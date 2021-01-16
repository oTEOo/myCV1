<?php
    session_start();
    
    include ("config.php");
    if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
    {
        $uname=$_SESSION['user_name'];
        $sql= "SELECT * FROM user_info WHERE user_name='$uname'";
        $result=mysqli_query($conn,$sql);

        $sql1= "SELECT * FROM hobby WHERE user_name='$uname'";
        $result1=mysqli_query($conn,$sql1);

        $sql2= "SELECT * FROM education WHERE user_name='$uname'";
        $result2=mysqli_query($conn,$sql2);

        $sql3= "SELECT * FROM expertise WHERE user_name='$uname'";
        $result3=mysqli_query($conn,$sql3);

        $sql4= "SELECT * FROM project WHERE user_name='$uname'";
        $result4=mysqli_query($conn,$sql4);
    
        
        if(mysqli_num_rows($result))
        {
            $row=mysqli_fetch_assoc($result);
            if($row['user_name']===$uname)
            {
                $_SESSION['name']=$row['name'];
                $_SESSION['age']=$row['age'];
                $_SESSION['phone']=$row['phone'];
                $_SESSION['email']=$row['email'];
                $_SESSION['address']=$row['address'];
                $_SESSION['language']=$row['language'];
                $_SESSION['user_image']=$row['user_image'];
                $_SESSION['about']=$row['about'];
            }
            
        };
        if(mysqli_num_rows($result1))
        {
            $id=array();
            $hobby=array();
            $hob_image=array();
            while($row1=mysqli_fetch_assoc($result1))
            {
                array_push($id,$row1['id']);
                array_push($hobby,$row1['hobby']);
                array_push($hob_image,$row1['hob_image']);
            }
            
            
            
        };
        if(mysqli_num_rows($result2))
        {
            $id_edu=array();
            $education=array();
            $edu_description=array();
            $edu_image=array();
            while($row2=mysqli_fetch_assoc($result2))
            {
                array_push($id_edu,$row2['id_edu']);
                array_push($education,$row2['education']);
                array_push($edu_description,$row2['edu_description']);
                array_push($edu_image,$row2['edu_image']);
            }
              
        };
        if(mysqli_num_rows($result3))
        {
            $id_exp=array();
            $expertise_name=array();
            $exp_description=array();
            $exp_image=array();
            while($row3=mysqli_fetch_assoc($result3))
            {
                array_push($id_exp,$row3['id_exp']);
                array_push($expertise_name,$row3['expertise_name']);
                array_push($exp_description,$row3['exp_description']);
                array_push($exp_image,$row3['exp_image']);
            }
              
        };
        if(mysqli_num_rows($result4))
        {
            $id_pro=array();
            $project=array();
            $pro_image=array();
            while($row4=mysqli_fetch_assoc($result4))
            {
                array_push($id_pro,$row4['id_pro']);
                array_push($project,$row4['project']);
                array_push($pro_image,$row4['pro_image']);
            }
              
        };
        
        

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Online CV</title>
</head>
<body>
    

    <div class="profile-img">
    <img src="images/<?php echo $_SESSION['user_image'] ?>" alt="profile-img">
    </div>

    <div class="profile-info">

    <h1><?php echo $_SESSION['name']; ?></h1>
    <br>

    <h2><b>About</b></h2>
    <p class="about"><?php echo $_SESSION['about'] ?></p>
    
    <div class="social-media">
    <img src="images/facebook-icon.png" alt="facebook icon">
    <img src="images/twitter-icon.png" alt="twitter icon">
    <img src="images/whatsapp-icon.png" alt="whatsapp icon">
    </div>

    <h2><b>Basic information</b></h2>

  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      
          <div class="card-body">
            
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['age']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['email']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['phone']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['address']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['language']; ?></div>
            </div>
          </div>
        
      
    </div>
  </div>

        
    

    <h2><b>Hobby</b></h2>
    <?php 
        for($i=0;$i<count($id);$i++)
        { ?>
            <div class="hobby">
            <img src="images/<?php echo $hob_image[$i] ?>" alt="hobby1">
            <p><b><?php echo $hobby[$i] ?></b></p>
            </div>
        <?php
        }
    ?>
    
    
    
    <h2><b>Education</b></h2>
    <?php
        for($i=0;$i<count($id_edu);$i++)
        { ?>
            <div class="education">
            <img src="images/<?php echo $edu_image[$i] ?>" alt="edu1">
            <p><b><?php echo $education[$i] ?></b></p>
            <small>
            <?php echo $edu_description[$i] ?>
            </small>
            </div>
        <?php    
        }
    ?>

    
    
    <h2><b>Expertise</b></h2>
    <?php
        for($i=0;$i<count($id_exp);$i++)
        { ?>
            <div class="expertise">
            <img src="images/<?php echo $exp_image[$i] ?>" alt="exp1">
            <p><b><?php echo $expertise_name[$i] ?></b></p>
            <small>
            <?php echo $exp_description[$i] ?>
            </small>
            </div>
        <?php    
        }
    ?>


    <h2><b>My Project Work</b></h2>
    <div class="projects">
    <?php
        for($i=0;$i<count($id_pro);$i++)
        { ?>
            
            <img src="images/<?php echo $pro_image[$i] ?>" alt="pro1">
            
        <?php    
        }
    ?>
    </div>
    <div class="form-box">
    
    <h2><b>Contact me</b></h2>

    <h4 class="send-notification"></h4>

    <form id="contact-form">
        <div class="input-group">
        <input type="text" id="name" placeholder="your name">
        <input type="text" id="subject" placeholder="subject">
        </div>
        <div class="input-group">
        <input type="text" id="Pnum" placeholder="phone number">
        <input type="email" id="email" placeholder="email">
        </div>
        <div class="text-area">
        <textarea rows="4" id="msg" placeholder="your message"></textarea>
        </div>
        <button type="button" onclick="sendMail()" name="btn-send" class="submit-btn">SEND MESSAGE</button>
    </form>

    </div>
    
    <p class="copyright">Designed by Nguyễn Trung Hiếu</p>
    
    <div class="contact">
        <span><img src="images/gmail.png" alt="gmail">hieu2000CBG@gmail.com</span>
        <span><img src="images/phone.png" alt="phone">+84769650015</span>
    </div>

    

    <p class="view">Hi, <?php echo $uname ?>   <a href="home.php">Account settings</a></p> 

    </div>

    

</body>
</html>

<?php
    }
    else
    {
        header("location: admin.php");
        exit();
    }
?>