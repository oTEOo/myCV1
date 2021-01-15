<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {

        include("config.php");

        if(isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['conf_password']))
        {
            function validate($data)
            {
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            
            
            $oldp=validate($_POST['old_password']);
            $newp=validate($_POST['new_password']);
            $confp=validate($_POST['conf_password']);

            if(empty($oldp))
            {
                header("location:change-password.php?error=Old password is required");
                exit();
            }
            else if(empty($newp))
            {
                header("location:change-password.php?error=New password is required");
                exit();
            }
            else if($newp !== $confp)
            {
                header("location:change-password.php?error=The confirmation password does not match");
                exit();
            }
            else
            {
                //hashing password
                $oldp = md5($oldp);
                $newp = md5($newp);
                
                $id= $_SESSION['id'];

                $sql = "SELECT password FROM user WHERE id=$id and password = '$oldp'";
                $result=mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) === 1)
                {
                    $sql2= "UPDATE user 
                            SET password ='$newp'
                            WHERE id=$id";

                    mysqli_query($conn,$sql2);

                    header("location:change-password.php?success=Your password has been changed");
                    exit();

                }
                else
                {
                    header("location:change-password.php?error=Incorrect password");
                    exit();
                }
            }

    }
    else
    {
        header("location:change-password.php");
        exit();
    }
}
else
{
    header("location: admin.php");
    exit();
}