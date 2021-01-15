<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>Login Admin</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>

        <?php
            if(isset($_GET['error']))
            {?>
                <p class="error"><?php echo $_GET['error']; ?></p>

        <?php            
            }
        ?>

        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>

        <a href="signup.php" class="ca">Create an account</a>

    </form>
</body>
</html>