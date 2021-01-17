<?php
    session_start();

    // $filename=$_FILES['hob_image']['tmp_name'];
    // $file=$_FILES['hob_image']['name'];

    // $dir="/XAMPP/htdocs/myOnlineCV/images/";

    // copy($filename,$dir.$file);

    
    
    include ("config.php");
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_POST['hobby']) && isset($_POST['hob_image']))
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
        $hob_image=validate($_POST['hob_image']);

        
        

            if(empty($hobby))
            {
                header("location:hobby-add.php?error=Your hobby is required");
                exit();
            }
            else if(empty($hob_image))
            {
                header("location:hobby-add.php?error=Hobby image is required");
                exit();
            }
            
            else
            {
                 $sql= "INSERT INTO hobby(user_name,hobby,hob_image) VALUES ('$uname','$hobby','$hob_image')";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:hobby-add.php?success=Your hobby has been added");
                        exit();
                    }
                    else
                    {
                        header("location:hobby-add.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }
        

        
    }
    else
    {
        header("location:hobby-add.php");
        exit();
    }

?>