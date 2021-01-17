<?php
    session_start();

    // $filename=$_FILES['hob_image']['tmp_name'];
    // $file=$_FILES['hob_image']['name'];

    // $dir="/XAMPP/htdocs/myOnlineCV/images/";

    // copy($filename,$dir.$file);

    
    
    include ("config.php");
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_POST['expertise']) && isset($_POST['exp_description']) && isset($_POST['exp_image']))
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
        $exp_description=validate($_POST['exp_description']);
        $exp_image=validate($_POST['exp_image']);

        
        

            if(empty($expertise))
            {
                header("location:expertise-add.php?error=Your expertise is required");
                exit();
            }
            else if(empty($exp_description))
            {
                header("location:expertise-add.php?error=Description is required");
                exit();
            }
            else if(empty($exp_image))
            {
                header("location:expertise-add.php?error=Expertise image is required");
                exit();
            }
            
            else
            {
                 $sql= "INSERT INTO expertise(user_name,expertise_name,exp_description,exp_image) VALUES ('$uname','$expertise','$exp_description','$exp_image')";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:expertise-add.php?success=Your expertise has been added");
                        exit();
                    }
                    else
                    {
                        header("location:expertise-add.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }
        

        
    }
    else
    {
        header("location:expertise-add.php");
        exit();
    }

?>