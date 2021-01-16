<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>SIGN UP</title>
</head>
<body>
    <form action="signup-check.php" method="post">
        <h2>Sign up</h2>

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


        <label>User Name</label>
        <?php
            if(isset($_GET['username']))
            {?>
                <input type="text" name="username" placeholder="User Name" value="<?php echo $_GET['username']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="username" placeholder="User Name">
        <?php        
            }
        ?>

        <label>Email</label>
        <?php
            if(isset($_GET['email']))
            {?>
                <input type="email" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="email" name="email" placeholder="Email">
        <?php        
            }
        ?>

        
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <label>Re Password</label>
        <input type="password" name="re_password" placeholder="Reenter Password">
        <br>
        <button type="submit">Continue</button>

        <a href="admin.php" class="ca">Already have an account?</a>

    </form>
</body>
</html>