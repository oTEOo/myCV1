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
    <h1>What do you want to change?</h1>

    <nav class="home-nav">
    <a href="info.php">User Information</a>
    <a href="hobby.php">User Hobby</a>
    <a href="education.php">User Education</a>
    <a href="expertise.php">User Expertise</a>
    <a href="project.php">User Project Work</a>
    <a href="home.php">Return</a>
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