<?php
    session_start();

    include("config.php");

    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['email1']) && isset($_POST['address']) && isset($_POST['language']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        
        
        $name=validate($_POST['name']);
        $age=validate($_POST['age']);
        $phone=validate($_POST['phone']);
        $email1=validate($_POST['email1']);
        $address=validate($_POST['address']);
        $language=validate($_POST['language']);

        


        if(empty($name))
        {
            header("location:signup.php?error=Your name is required");
            exit();
        }
        else if(empty($age))
        {
            header("location:signup.php?error=Your age is required");
            exit();
        }
        else if(empty($phone))
        {
            header("location:signup.php?error=Your phone number is required");
            exit();
        }
        else if(empty($email1))
        {
            header("location:signup.php?error=Your email is required");
            exit();
        }
        else if(empty($address))
        {
            header("location:signup.php?error=Your address is required");
            exit();
        }
        else if(empty($language))
        {
            header("location:signup.php?error=Languages are required");
            exit();
        }
        
        else
        {
            $uname=$_SESSION['user_name'];
            $sql= "INSERT INTO user_info(name,age,phone,email,address,language) VALUES ('$name','$age','$phone','$email1','$address','$language')
                    WHERE user_name='$uname'";
            $result=mysqli_query($conn,$sql);

            if($result)
            {
                header("location:info.php?success=Your account has been created");
                exit();
            }
            else
            {
                header("location:info.php?error=Unknown error");
                exit();
            }
            
        }
    }
    else
    {
        header("location:info.php");
        exit();
    }

?>