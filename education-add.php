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
    <title>ADD EDUCATION</title>
</head>
<body>
    <form action="education-add-check.php" method="post" >
        <h2>EDUCATION</h2>

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


        <label>Education</label>
        <?php
            if(isset($_GET['education']))
            {?>
                <input type="text" name="education" placeholder="Education" value="<?php echo $_GET['education']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="education" placeholder="Education">
        <?php        
            }
        ?>

        <label>Description</label>
        <?php
            if(isset($_GET['edu_description']))
            {?>
                <input type="text" name="edu_description" placeholder="Description" value="<?php echo $_GET['edu_description']; ?>">
                <br>
        <?php            
            }
            else
            { ?>
                <input type="text" name="edu_description" placeholder="Description">
        <?php        
            }
        ?>

        <label>Education Image</label>
        <input type="file" name="edu_image" >

        <button type="submit">Add Education</button>
        
        <a href="education.php" class="ca">Back</a>

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