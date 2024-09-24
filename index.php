<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>lOGIN</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"> <?php echo $_GET['error'];?></p>
            <?php } ?>
                <label> Username</label>
                <input type="text" name="uname" placeholder="Username"><br>
                <label> Password</label>
                <input type="text" name="pname" placeholder="Password"><br>
            <button type="submit">Submit</button>
    </form>
    
</body>
</html>