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
    <title>USER EXPERTISE</title>
</head>
<body>
    <h1>What do you want to do?</h1>

    <nav class="home-nav">
    <a href="expertise-add.php">Add Expertise</a>
    <a href="expertise-delete.php">Delete Expertise</a>
    <a href="option.php">Return</a>
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