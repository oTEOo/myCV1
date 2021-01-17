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
    <title>ADD EXPERTISE</title>
</head>
<body>
    <form action="expertise-add-check.php" method="post" >
        <h2>EXPERTISE</h2>

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


        <label>Expertise</label>
        <?php
            if(isset($_GET['expertise']))
            {?>
                <input type="text" name="expertise" placeholder="Expertise" value="<?php echo $_GET['expertise']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="expertise" placeholder="Expertise">
        <?php        
            }
        ?>

        <label>Description</label>
        <?php
            if(isset($_GET['exp_description']))
            {?>
                <input type="text" name="exp_description" placeholder="Description" value="<?php echo $_GET['exp_description']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="exp_description" placeholder="Description">
        <?php        
            }
        ?>

        <label>Expertise Image</label>
        <input type="file" name="exp_image" >

        <button type="submit">Add Expertise</button>
        
        <a href="expertise.php" class="ca">Back</a>

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