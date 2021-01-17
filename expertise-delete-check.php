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

        $expertise=validate($_POST['expertise']);
        if(empty($expertise))
            {
                header("location:expertise-delete.php?error=Your expertise is required");
                exit();
            }
            else
            {
                 $sql= "DELETE FROM expertise 
                        WHERE user_name='$uname' and expertise_name='$expertise'";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:expertise-delete.php?success=Your expertise has been deleted");
                        exit();
                    }
                    else
                    {
                        header("location:expertise-delete.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }

    }
    else
    {
        header("location:expertise-delete.php");
        exit();
    }
?>