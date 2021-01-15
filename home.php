<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>HOME</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

    <nav class="home-nav">
    <a href="change-password.php">Change Password</a>
    <a href="logout.php">Logout</a>
    </nav>
    
</body>
</html>

<?php
    }
    else
    {
        header("location: admin.php");
        exit();
    }
?>