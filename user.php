<?php
session_start();
// Initialize error message
$error = "";

// Check if there is an error message in the session
if (isset($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]); // Clear the error after displaying
}

if(!isset($_SESSION["username"]))
{
  $_SESSION["error"] = "You must be logged in to access this page.";
	header("location:userlogin.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS USER HOME PAGE <?php if (!empty($error)): ?>
    <p style="color:red; "><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?></h1><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>

</body>
</html>