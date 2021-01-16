<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>USER HOBBY</title>
</head>
<body>
    <form action="education.php" method="post" enctype="multipart/form-data">>
        <h2>User Hobby</h2>
        


        <label>Hobby</label>
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
        
        <label>About you</label>
        <?php
            if(isset($_GET['about']))
            {?>
                <input type="text" name="about" placeholder="Write something about you" value="<?php echo $_GET['about']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="about" placeholder="Write something about you">
        <?php        
            }
        ?>

        <label>Profile Picture</label>
        <input type="file" name="userimage">
        
        <button type="submit" name="submit">Continue</button>
        


    </form>
</body>
</html>