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
    <title>DELETE EXPERTISE</title>
</head>
<body>
    <form action="expertise-delete-check.php" method="post" >
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
        <div class="search-box">
        <input type="text" name="expertise" autocomplete="off" placeholder="Your expertise" />
        <div class="result"></div>
        </div>
        
        <button type="submit" name="submit">Delete expertise</button>
        
        <a href="expertise.php" class="ca">Back</a>

    </form>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("expertise-check.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
    });
</script>
    
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