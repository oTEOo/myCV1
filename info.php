<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>USER INFORMATION</title>
</head>
<body>
    <form action="info-check.php" method="post">
        <h2>User Information</h2>

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


        <label>Name</label>
        <?php
            if(isset($_GET['name']))
            {?>
                <input type="text" name="name" placeholder="Your name" value="<?php echo $_GET['name']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="name" placeholder="Your name">
        <?php        
            }
        ?>

        <label>Age</label>
        <?php
            if(isset($_GET['age']))
            {?>
                <input type="number" name="age" placeholder="Age" value="<?php echo $_GET['age']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="number" name="age" placeholder="Age">
        <?php        
            }
        ?>

        <label>Phone number</label>
        <?php
            if(isset($_GET['phone']))
            {?>
                <input type="text" name="phone" placeholder="Your phone number" value="<?php echo $_GET['phone']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="phone" placeholder="Your phone number">
        <?php        
            }
        ?>

        <label>Email</label>
        <?php
            if(isset($_GET['email1']))
            {?>
                <input type="email" name="email1" placeholder="Email" value="<?php echo $_GET['email1']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="email" name="email1" placeholder="Email">
        <?php        
            }
        ?>

        <label>Address</label>
        <?php
            if(isset($_GET['address']))
            {?>
                <input type="text" name="address" placeholder="Address" value="<?php echo $_GET['address']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="address" placeholder="Address">
        <?php        
            }
        ?>

        <label>Language</label>
        <?php
            if(isset($_GET['language']))
            {?>
                <input type="text" name="language" placeholder="Language" value="<?php echo $_GET['language']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="language" placeholder="Language">
        <?php        
            }
        ?>
        
        
        <button type="submit">Continue</button>


    </form>
</body>
</html>