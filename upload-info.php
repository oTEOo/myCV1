<?php
    session_start();

    include("config.php");

    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['email1']) && isset($_POST['address']) && isset($_POST['language']) && isset($_POST['about']) && isset($_POST['userimage']))
    {
        function validate($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        
        $uname=$_SESSION['user_name'];
        
        $name=validate($_POST['name']);
        $age=validate($_POST['age']);
        $phone=validate($_POST['phone']);
        $email1=validate($_POST['email1']);
        $address=validate($_POST['address']);
        $language=validate($_POST['language']);
        $about=validate($_POST['about']);

        $extension='png';
        $rename='user';
        $newname=$rename.'.'.$extension;
        $filename=$_FILES['userimage']['tmp_name'];
        
        


        if(empty($name))
        {
            header("location:info.php?error=Your name is required");
            exit();
        }
        else if(empty($age))
        {
            header("location:info.php?error=Your age is required");
            exit();
        }
        else if(empty($phone))
        {
            header("location:info.php?error=Your phone number is required");
            exit();
        }
        else if(empty($email1))
        {
            header("location:info.php?error=Your email is required");
            exit();
        }
        else if(empty($address))
        {
            header("location:info.php?error=Your address is required");
            exit();
        }
        else if(empty($language))
        {
            header("location:info.php?error=Languages are required");
            exit();
        }
        
        
        else
        {
            $sql="SELECT * FROM user_info where user_name='$uname' ";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) >0)
            {
                if(move_uploaded_file($filename,'images/'.$newname))
                {
                    $sql1= "UPDATE user_info
                        SET name='$name', age='$age', phone='$phone', email='$email1',address='$address',language='$language',about='$about',user_image='$newname'
                        WHERE user_name='$uname'";
                    mysqli_query($conn,$sql1);
    
                    header("location:info.php?success=Your information has been updated");
                    exit();
            
                }
                else
                {
                    header("location:info.php?error=Unknown error");
                    exit();
                }
            }
            else
            {
                if(move_uploaded_file($filename,'images/'.$newname))
                {
                    $sql2= "INSERT INTO user_info(user_name,name,age,phone,email,address,language,user_image,about) VALUES ('$uname','$name','$age','$phone','$email1','$address','$language','$newname','$about')";
                    $result2=mysqli_query($conn,$sql2);
    
                    if($result2)
                    {
                    header("location:info.php?success=Your information has been updated");
                    exit();
                    }
                    else
                    {
                    header("location:info.php?error=Unknown error");
                    exit();
                    }
                }
                else
                {
                    header("location:info.php?error=Unknown error");
                    exit();
                }
                
            }

     
        }
    }
    else
    {
        header("location:info.php");
        exit();
    }


    if(isset($_POST['submit']))
    {
        

        
    }
?>