<?php
    session_start();

    // $filename=$_FILES['hob_image']['tmp_name'];
    // $file=$_FILES['hob_image']['name'];

    // $dir="/XAMPP/htdocs/myOnlineCV/images/";

    // copy($filename,$dir.$file);

    
    
    include ("config.php");
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_POST['education']) && isset($_POST['edu_description']) && isset($_POST['edu_image']))
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
        $edu_description=validate($_POST['edu_description']);
        $edu_image=validate($_POST['edu_image']);

        
        

            if(empty($education))
            {
                header("location:education-add.php?error=Your education is required");
                exit();
            }
            else if(empty($edu_description))
            {
                header("location:education-add.php?error=Description is required");
                exit();
            }
            else if(empty($edu_image))
            {
                header("location:education-add.php?error=Education image is required");
                exit();
            }
            
            else
            {
                 $sql= "INSERT INTO education(user_name,education,edu_description,edu_image) VALUES ('$uname','$education','$edu_description','$edu_image')";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:education-add.php?success=Your education has been added");
                        exit();
                    }
                    else
                    {
                        header("location:education-add.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }
        

        
    }
    else
    {
        header("location:education-add.php");
        exit();
    }

?>