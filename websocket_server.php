<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require 'vendor/autoload.php';

class PostWebSocketServer implements MessageComponentInterface {
    private $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection
        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $from, $message) {
        // Parse the received JSON data
        $data = json_decode($message, true);

        // Check the message type
        if ($data['type'] === 'newPost') {
            // Handle new post data
            $newPost = $data['post'];

            // Broadcast the new post data to all connected clients
            foreach ($this->clients as $client) {
                $client->send(json_encode($data));
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // Remove the connection when closed
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // Handle any errors
        echo "An error occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Create the WebSocket server
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new PostWebSocketServer()
        )
    ),
    9000 // Set the desired port number
);

// Run the WebSocket server
$server->run();
