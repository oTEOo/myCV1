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

        $education=validate($_POST['education']);
        if(empty($education))
            {
                header("location:education-delete.php?error=Your education is required");
                exit();
            }
            else
            {
                 $sql= "DELETE FROM education 
                        WHERE user_name='$uname' and education='$education'";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:education-delete.php?success=Your education has been deleted");
                        exit();
                    }
                    else
                    {
                        header("location:education-delete.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }

    }
    else
    {
        header("location:education-delete.php");
        exit();
    }
?>