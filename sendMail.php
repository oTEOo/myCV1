<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $msg=$_POST['msg'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail= new PHPMailer();

        //smtp settings
        $mail->SMTPDebug = 3;
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com;";
        $mail->SMTPAuth=true;
        $mail->Username="hieu2000CBG@gmail.com";
        $mail->Password="hieubg2000";
        $mail->Port=587;
        $mail->SMTPSecure="tls";

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("hieu2000CBG@gmail.com");
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $msg;

        if($mail->send())
        {
            $status="success";
            $response="Email is sent!";
            
        }
        else
        {
            $status="failed";
            $response="Something is wrong: <br>". $mail->ErrorInfo;

        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>