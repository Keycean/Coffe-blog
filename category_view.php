<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "imnotadev");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get category ID from URL
$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

// Check if category ID is valid
if ($category_id > 0) {
    // Fetch category name
    $categoryNameQuery = $conn->prepare("SELECT name FROM categories WHERE id = ?");
    $categoryNameQuery->bind_param("i", $category_id);
    $categoryNameQuery->execute();
    $categoryNameResult = $categoryNameQuery->get_result();

    if ($categoryNameResult->num_rows > 0) {
        $category = $categoryNameResult->fetch_assoc()['name'];
        $categoryNameQuery->close();

        // Fetch posts by category
        $stmt = $conn->prepare("SELECT title, content, photo, date FROM posts WHERE category_id = ?");
        $stmt->bind_param("i", $category_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display category and posts
        echo "<h1>Posts in Category: " . htmlspecialchars($category) . "</h1>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                echo "<p>" . htmlspecialchars($row['content']) . "</p>";
                if (!empty($row['photo'])) {
                    echo "<img src='" . htmlspecialchars($row['photo']) . "' alt='Post Image' style='max-width: 200px;'><br>";
                }
                echo "<p><small>Posted on: " . htmlspecialchars($row['date']) . "</small></p><hr>";
            }
        } else {
            echo "<p>No posts found in this category.</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Category not found.</p>";
    }
} else {
    echo "<p>Invalid category ID.</p>";
}

$conn->close();
?>
