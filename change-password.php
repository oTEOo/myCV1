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
    <title>CHANGE PASWORD</title>
</head>
<body>
    <form action="change-p.php" method="post">
        <h2>Change password</h2>

        <?php
            if(isset($_GET['error']))
            {?>
                <p class="error"><?php echo $_GET['error']; ?></p>

        <?php            
            }
        ?>

        <?php
            if(isset($_GET['success']))
            {?>
                <p class="success"><?php echo $_GET['success']; ?></p>

        <?php            
            }
        ?>

        <label>Old Password</label>
        <input type="password" name="old_password" placeholder="Old Password">
        <br>
        <label>New Password</label>
        <input type="password" name="new_password" placeholder="New Password">
        <br>
        <label>Confirm New Password</label>
        <input type="password" name="conf_password" placeholder="Confirm New Password">
        <br>
        <button type="submit">Change password</button>

        <a href="home.php" class="ca">Home</a>

    </form>
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