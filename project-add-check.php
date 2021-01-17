<?php
    session_start();

    // $filename=$_FILES['pro_image']['tmp_name'];
    // $file=$_FILES['pro_image']['name'];

    // $dir="/XAMPP/htdocs/myOnlineCV/images/";

    // copy($filename,$dir.$file);

    
    
    include ("config.php");
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_POST['project']) && isset($_POST['pro_image']))
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
        $pro_image=validate($_POST['pro_image']);

        
        

            if(empty($project))
            {
                header("location:project-add.php?error=Your project is required");
                exit();
            }
            else if(empty($pro_image))
            {
                header("location:project-add.php?error=Project image is required");
                exit();
            }
            
            else
            {
                 $sql= "INSERT INTO project(user_name,project,pro_image) VALUES ('$uname','$project','$pro_image')";
                    $result=mysqli_query($conn,$sql);
    
                    if($result)
                    {
                        header("location:project-add.php?success=Your project has been added");
                        exit();
                    }
                    else
                    {
                        header("location:project-add.php?error=Unknown error");
                        exit();
                    }
                
                
    
            }
        

        
    }
    else
    {
        header("location:project-add.php");
        exit();
    }

?>