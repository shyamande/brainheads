<?php
//get data from form  
$name = $_POST['contactname'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$phone=$_POST['phonenumber'];
$query=$_POST['query']
$to = "shyamande5@gmail.com";
$subject = "Mail From the customer";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $query
. "\r\n Phone number =" . $phone;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>