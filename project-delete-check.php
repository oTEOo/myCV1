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

        $project=validate($_POST['project']);
        if(empty($project))
            {
                header("location:project-delete.php?error=Your project is required");
                exit();
            }
            else
            {
                 $sql= "DELETE FROM project 
                        WHERE user_name='$uname' and project='$project'";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:project-delete.php?success=Your project has been deleted");
                        exit();
                    }
                    else
                    {
                        header("location:project-delete.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }

    }
    else
    {
        header("location:project-delete.php");
        exit();
    }
?>