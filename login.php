<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "imnotadev";

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($data, $_POST["username"]);
    $password = mysqli_real_escape_string($data, $_POST["password"]);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($data, $sql);

    if ($row = mysqli_fetch_array($result)) {
        // Verify password (use password_verify if hashed)
        if ($row["password"] === $password) {
            $_SESSION["username"] = $username;

            if ($row["usertype"] == "user") {
            
                header("Location: user.php");
                exit();
            } elseif ($row["usertype"] == "admin") {
              $_SESSION["username"] = $username;
              $_SESSION["usertype"] = "admin";
                header("Location: admin.php");
                exit();
            }
        } else {
            // Redirect to userlogin.php with an error message
            $_SESSION["error"] = "Password Incorrect"; // or "Incorrect password"
            header("Location: userlogin.php");
            exit();
        }
    } else {
      $_SESSION["error"] = "Username does not exist"; // or "Incorrect password"
      header("Location: userlogin.php");
      exit();
    }
}
?>
