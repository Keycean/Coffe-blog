<?php
session_start();
header('Content-Type: application/json');

// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'imnotadev';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    echo json_encode(['status' => 'error', 'message' => 'You must be logged in to like posts']);
    exit();
}

$user_id = $_SESSION['user_id'];
$post_id = isset($_POST['post_id']) ? (int)$_POST['post_id'] : 0;

// Validate post_id
if ($post_id <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid post ID']);
    exit();
}

// Check if the user already liked the post
$sql = "SELECT 1 FROM likes WHERE user_id = ? AND post_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $user_id, $post_id);
$stmt->execute();
$result = $stmt->get_result();
$is_liked = $result->num_rows > 0;

if ($is_liked) {
    // User already liked, do nothing (no decrement)
    echo json_encode(['status' => 'already_liked', 'message' => 'You have already liked this post']);
} else {
    // Add a new like
    $sql = "INSERT INTO likes (user_id, post_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $user_id, $post_id);
    $stmt->execute();

    // Get the updated like count
    $sql = "SELECT COUNT(*) AS like_count FROM likes WHERE post_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $like_count = $result->fetch_assoc()['like_count'];

    echo json_encode(['status' => 'liked', 'like_count' => $like_count]);
}

$conn->close();
?>
