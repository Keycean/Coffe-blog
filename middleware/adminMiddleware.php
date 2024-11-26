<?php 
session_start();

function checkAdminAccess() {
    // Check if the user is logged in
    if (!isset($_SESSION["username"])) {
        // Redirect to login page with an error message
        $_SESSION["error"] = "You must be logged in to access this page.";
        header("Location: userlogin.php");
        exit();
    }

    // Check if the user is not an admin
    if ($_SESSION["usertype"] !== "admin") {
        // Redirect to the user home page with an error message
        $_SESSION["error"] = "Access denied. You do not have permission to access this page.";
        header("Location: user.php");
        exit();
    }

    // If the user is an admin, allow access
    // No redirection needed here
}
?>
