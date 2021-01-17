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
    <title>ADD PROJECT</title>
</head>
<body>
    <form action="project-add-check.php" method="post" >
        <h2>PROJECT</h2>

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


        <label>Project</label>
        <?php
            if(isset($_GET['project']))
            {?>
                <input type="text" name="project" placeholder="project" value="<?php echo $_GET['project']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="project" placeholder="project">
        <?php        
            }
        ?>

        

        <label>Project Image</label>
        <input type="file" name="pro_image" >

        <button type="submit">Add project</button>
        
        <a href="project.php" class="ca">Back</a>

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