<?php
session_start();

// Initialize error message
$error = "";

// Check if there is an error message in the session
if (isset($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]); // Clear the error after displaying
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login.css" />
  <title>Sign in & Sign up Form</title>
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
          <!-- Login Form -->
       
        <form action="login.php" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <?php if (!empty($error)): ?>
    <p style="color:red; "><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="username" name="username" id="username" placeholder="username">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" required />
          </div>  
          <input type="submit" value="Login" name="signIn" class="btn solid" />
        </form>
             <!-- Sign Up form -->
        <form action="signup.php" method="POST" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" id="username" name="username" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" required />
          </div>
          <input type="submit" class="btn" value="Sign up" name="signUp" />
        </form>


      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Mabakal ka?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Kape us?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>
