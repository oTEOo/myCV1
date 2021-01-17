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
    <title>ADD HOBBY</title>
</head>
<body>
    <form action="hobby-add-check.php" method="post" >
        <h2>HOBBY</h2>

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


        <label>Hobby</label>
        <?php
            if(isset($_GET['hobby']))
            {?>
                <input type="text" name="hobby" placeholder="Hobby" value="<?php echo $_GET['hobby']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="hobby" placeholder="Hobby">
        <?php        
            }
        ?>

        <label>Hobby Image</label>
        <input type="file" name="hob_image" >

        <button type="submit">Add Hobby</button>
        
        <a href="hobby.php" class="ca">Back</a>

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