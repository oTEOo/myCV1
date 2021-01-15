<?php
    session_start();

    include("config.php");

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $username=validate($_POST['username']);
        $password=validate($_POST['password']);
    
        if(empty($username))
        {
            header("location:admin.php?error=User name is required");
            exit();
        }
        else if(empty($password))
        {
            header("location:admin.php?error=Password is required");
            exit();
        }
        else
        {
            //hashing password
            $password_hashed= md5($password);

            $sql= "SELECT * FROM user WHERE user_name='$username' and password='$password'";

            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) === 1)
            {
                $row=mysqli_fetch_assoc($result);

                if($row['user_name']===$username && $row['password']===$password)
                {
                    $_SESSION['user_name']=$row['user_name'];
                    $_SESSION['id']=$row['id'];

                    header("location: home.php");
                    exit();
                }
                else
                {
                    header("location:admin.php?error=Incorrect User name or Password");
                    exit();
                }
            }
            else
            {
                header("location:admin.php?error=Incorrect User name or Password");
                exit();
            }

        }
    }
    else
    {
        header("location:admin.php");
        exit();
    }

?>