<?php
    session_start();

    include("config.php");

    
    if(isset($_POST['submit']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $uname=$_SESSION['user_name'];

        $hobby=validate($_POST['hobby']);
        if(empty($hobby))
            {
                header("location:hobby-delete.php?error=Your hobby is required");
                exit();
            }
            else
            {
                 $sql= "DELETE FROM hobby 
                        WHERE user_name='$uname' and hobby='$hobby'";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:hobby-delete.php?success=Your hobby has been deleted");
                        exit();
                    }
                    else
                    {
                        header("location:hobby-delete.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }

    }
    else
    {
        header("location:hobby-delete.php");
        exit();
    }
?>