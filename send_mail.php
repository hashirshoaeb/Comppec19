<?php
$response=array();
$db=new PDO('mysql:host=localhost;dbname=messup','root','');
    $mailto = $_POST['email'];
    $regno = $_POST['regno'];
    $mailSub = "Email and Password Request";
    $mailMsg = " Password:";
    $mailMsg1 = " Email:";
	$query="select * from accounts where id='$regno'";
	$row=$db->query($query)->fetch();
	$mailMsg=$mailMsg.$row["userpassword"];
	$mailMsg1=$mailMsg1.$row["useremail"].$mailMsg;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "saadn9978@gmail.com";
   $mail ->Password = "naeembhatti";
   $mail ->SetFrom("saadn9978@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg1;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       $response["message"]="Mail Not Sent";
	   $response["rank"]=0;
   }
   else
   {
       $response["message"]="Mail Sent Check Your Email-Address to discover Your Password";
       $response["rank"]=1;
   }

echo json_encode($response);
   

?>