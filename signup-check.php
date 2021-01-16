<?php
    session_start();

    include("config.php");

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['email']))
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
        $re_password=validate($_POST['re_password']);
        $email=validate($_POST['email']);

        


        if(empty($username))
        {
            header("location:signup.php?error=User name is required");
            exit();
        }
        else if(empty($password))
        {
            header("location:signup.php?error=Password is required");
            exit();
        }
        else if(empty($re_password))
        {
            header("location:signup.php?error=Reenter Password is required");
            exit();
        }
        else if(empty($email))
        {
            header("location:signup.php?error=Email is required");
            exit();
        }
        else if($password !== $re_password)
        {
            header("location:signup.php?error=The confirmation password does not match");
            exit();
        }
        else
        {
            //hashing password
            $password= md5($password);


            $sql= "SELECT * FROM user WHERE user_name='$username'";

            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) >0)
            {
                header("location:signup.php?error=The username is taken");
                exit();
            }
            else
            {
                $sql2= "INSERT INTO user(user_name,email,password) VALUES ('$username','$email','$password')";
                $result2=mysqli_query($conn,$sql2);

                if($result2)
                {
                    header("location:admin.php?success=Your account has been created");
                    exit();
                }
                else
                {
                    header("location:signup.php?error=Unknown error");
                    exit();
                }
            }
            

        }
    }
    else
    {
        header("location:signup.php");
        exit();
    }

?>