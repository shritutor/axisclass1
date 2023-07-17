<?php
include "../backend/connection.php";
session_start();

$schoolid = $_SESSION['schoolid'];
$userId = $_SESSION['uid'];

// Set the appropriate content type header
header('Content-Type: text/html');

// Get the page number and perPage value from the request
$page = $_POST['page'];
$perPage = $_POST['perPage'];

// Calculate the offset based on the page number and perPage value
$offset = ($page - 1) * $perPage;

/// Fetch user records from the events table
$eventsQuery = "SELECT e.id, e.coverimage_path, e.description, e.title, e.created_at, u.first_name, u.last_name, u.profile_image, 'event' AS record_type
FROM events e
INNER JOIN user u ON e.user_id = u.id
WHERE e.school_id = '$schoolid' AND e.is_private != 0";

// Fetch user records from the library table
$libraryQuery = "SELECT l.id, l.coverimage_path, l.description, l.title, l.created_at, u.first_name, u.last_name, u.profile_image, 'library' AS record_type
FROM library l
INNER JOIN user u ON l.user_id = u.id
WHERE l.school_id = '$schoolid' AND l.is_private != 0";

// Fetch user records from the schooldiary table
$schooldiaryQuery = "SELECT s.id, s.coverimage_path, s.description, s.title, s.created_at, u.first_name, u.last_name, u.profile_image, 'schooldiary' AS record_type
FROM schooldiary s
INNER JOIN user u ON s.user_id = u.id
WHERE s.school_id = '$schoolid' AND s.is_private != 0";

// Combine the queries using UNION ALL
$combinedQuery = "($eventsQuery) UNION ALL ($libraryQuery) UNION ALL ($schooldiaryQuery)
                ORDER BY created_at DESC
                LIMIT $offset, $perPage";

// Execute the combined query
$combinedResult = mysqli_query($conn, $combinedQuery);

if (!$combinedResult) {
    // Handle the database query error
    $error = mysqli_error($conn);
    handleDatabaseError($conn);
    echo "Database query error: " . $error . "<br>";
    echo "Query: " . $combinedQuery;
    exit; // Stop further execution
}


$combinedRecords = array();
while ($row = mysqli_fetch_assoc($combinedResult)) {
    $combinedRecords[] = $row;
}

// Generate the HTML content for the records
$html = '';
$count = 1;
foreach ($combinedRecords as $record) {

    if ($count == 1) {

    } else {

        $recordId = $record['id'];

        // Fetch like count for the record
        $likeCountQuery = "SELECT COUNT(*) AS count FROM likes WHERE record_id = '$recordId' AND record_type = '" . $record['record_type'] . "'";
        $likeCountResult = mysqli_query($conn, $likeCountQuery);
        $likeCountRow = mysqli_fetch_assoc($likeCountResult);
        $likeCount = $likeCountRow['count'];
    
        // Check if the user has already liked the record
        $likedQuery = "SELECT id FROM likes WHERE record_id = '$recordId' AND record_type = '" . $record['record_type'] . "' AND user_id = '$userId' LIMIT 1";
        $likedResult = mysqli_query($conn, $likedQuery);
        $isLiked = mysqli_num_rows($likedResult) > 0;
    
        $html .= '<div class="timeline-card">';
        $html .= '<div class="user-profile">';
        if ($record['profile_image']) {
            $html .= '<img src="../myprofile/' . $record['profile_image'] . '" alt="Profile Image" width="50" height="50">';
        } else {
            $html .= '<img src="default_profile_image.png" alt="Profile Image" width="50" height="50">';
        }
        $html .= '<h5 class="card-title">' . $record['first_name'] . ' ' . $record['last_name'] . '</h5>';
        $html .= '</div>';
        $html .= '<p class="card-text">' . $record['description'] . '</p>';
        $html .= '<div class="card-time">' . $record['created_at'] . '</div>';
        $html .= '<div class="row">';
        $html .= '<div class="col-md-4">';
        $html .= '<button class="like-button';
        if ($isLiked) {
            $html .= ' liked" disabled="disabled"';
        }
        $html .= '" data-record-type="' . $record['record_type'] . '" data-record-id="' . $recordId . '">';
        $html .= '<i class="icon like-icon far fa-thumbs-up"></i> Like <span class="likes-count">' . $likeCount . '</span>';
        $html .= '</button>';
        $html .= '</div>';
        $html .= '<div class="col-md-4">';
        $html .= '<i class="icon comment-icon far fa-comment"></i> Comment';
        $html .= '</div>';
        $html .= '<div class="col-md-4">';
        $html .= '<i class="icon share-icon far fa-share-square"></i> Share';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="comment-form">';
        $html .= '<form>';
        $html .= '<div class="form-group">';
        $html .= '<input type="text" class="form-control" placeholder="Write a comment">';
        $html .= '</div>';
        $html .= '<button type="submit" class="symbol-button"><i class="fas fa-paper-plane"></i></button>';
        $html .= '</form>';
        $html .= '</div>';
    
        // Fetch comments for the record (including replies)
        $commentsQuery = "SELECT c.id, c.content, c.created_at, u.first_name, u.last_name, u.profile_image
            FROM comments c
            INNER JOIN user u ON c.user_id = u.id
            WHERE c.record_id = '$recordId' AND c.record_type = '" . $record['record_type'] . "'
            ORDER BY c.created_at ASC";      
        $commentsResult = mysqli_query($conn, $commentsQuery);    
        if (!$commentsResult) {
            // Handle the database query error
            $error = mysqli_error($conn);
            echo "Database query error: " . $error . "<br>";
            echo "Query: " . $commentsQuery;
            exit; // Stop further execution
        }
        
        $comments = array();
        while ($commentRow = mysqli_fetch_assoc($commentsResult)) {
            $commentId = $commentRow['id'];
            $commentRow['replies'] = array();
    
            // Fetch replies for the comment
            $repliesQuery = "SELECT DISTINCT r.id, r.content, r.created_at, u.first_name, u.last_name, u.profile_image
            FROM comments r
            INNER JOIN user u ON r.user_id = u.id
            WHERE r.record_id = '$recordId' AND r.record_type = '" . $record['record_type'] . "'
            AND r.parent_comment_id = '$commentId'
            ORDER BY r.created_at ASC";
    
           
            $repliesResult = mysqli_query($conn, $repliesQuery);
            if (!$repliesResult) {
                // Handle the database query error
                handleDatabaseError($conn);
                exit; // Stop further execution
            }
            while ($replyRow = mysqli_fetch_assoc($repliesResult)) {
                $commentRow['replies'][] = $replyRow;
            }
    
            $comments[] = $commentRow;
        }
    
        // Generate the HTML content for the comments
        $html .= '<div class="comments-container" style="height: 150px; overflow-y: auto;">';
    
        foreach ($comments as $comment) {
            $html .= '<div class="comment">';
            $html .= '<div class="comment-header">';
            $html .= '<div class="user-profile">';
            if ($comment['profile_image']) {
                $html .= '<img src="../myprofile/' . $comment['profile_image'] . '" alt="Profile Image" width="50" height="50">';
            } else {
                $html .= '<img src="default_profile_image.png" alt="Profile Image" width="50" height="50">';
            }
            $html .= '<h5 class="comment-author">' . $comment['first_name'] . ' ' . $comment['last_name'] . '</h5>';
            $html .= '</div>';
            $html .= '<p class="comment-time">' . $comment['created_at'] . '</p>';
            $html .= '</div>';
            $html .= '<p class="comment-content">' . $comment['content'] . '</p>';
    
            // Check if there are any replies for the comment
            if (!empty($comment['replies']) && is_array($comment['replies']) && count($comment['replies']) > 0) {
                $html .= '<div class="replies">';
                foreach ($comment['replies'] as $reply) {
                    $html .= '<div class="comment">';
                    $html .= '<div class="comment-header">';
                    $html .= '<div class="user-profile">';
                    if ($reply['profile_image']) {
                        $html .= '<img src="../myprofile/' . $reply['profile_image'] . '" alt="Profile Image" width="50" height="50">';
                    } else {
                        $html .= '<img src="default_profile_image.png" alt="Profile Image" width="50" height="50">';
                    }
                    $html .= '<h5 class="comment-author">' . $reply['first_name'] . ' ' . $reply['last_name'] . '</h5>';
                    $html .= '</div>';
                    $html .= '<p class="comment-time">' . $reply['created_at'] . '</p>';
                    $html .= '</div>';
                    $html .= '<p class="comment-content">' . $reply['content'] . '</p>';
                    $html .= '</div>';
                }
                $html .= '</div>';
            }
    
            // Add reply form for each comment
            $html .= '<div class="reply-form">';
            $html .= '<form>';
            $html .= '<input type="hidden" name="parent_comment_id" value="' . $comment['id'] . '">';
            $html .= '<div class="form-group">';
            $html .= '<input type="text" class="form-control" placeholder="Write a reply">';
            $html .= '</div>';
            $html .= '<button type="submit" class="symbol-button"><i class="fas fa-paper-plane"></i></button>';
            $html .= '</form>';
            $html .= '</div>';
    
            $html .= '</div>';
        }
        $html .= '</div>';
        $html .= '</div>';
    }
    $count = $count + 1;
}

// Send the HTML content as the response
echo $html;

// Function to handle database errors
function handleDatabaseError($conn)
{
    // Log the error or handle it as needed
    // For example, you can log the error to a file
    error_log('Database error: ' . mysqli_error($conn));
    // Return an appropriate error message to the client
    echo 'An error occurred while fetching the records. Please try again later.';
}
