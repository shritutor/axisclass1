<!DOCTYPE html>
<html>
<head>
    <title>SSE Example</title>
</head>
<body>
    <div id="result"></div>

    <script>
        const resultDiv = document.getElementById('result');

        // Create an EventSource object to establish the SSE connection
        const eventSource = new EventSource('server-side.php');

        // Event listener for receiving SSE messages
        eventSource.onmessage = function(event) {
            // Display the received data in the resultDiv
            resultDiv.innerHTML = event.data;
        };

        // Event listener for SSE connection errors
        eventSource.onerror = function() {
            console.error('SSE connection error.');
        };
    </script>
</body>
</html>
