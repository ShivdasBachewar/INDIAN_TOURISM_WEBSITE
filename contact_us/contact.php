<?php
$servername="localhost";
$username="root";
$password="";
$mydb="abc";
$conn=new mysqli($servername,$username,$password,$mydb);

if($conn->connect_error)
{
die("error".$conn->connect_error);
}
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

if($conn->query("INSERT INTO contact_us VALUES('$name','$email','$subject','$message')"))
{
echo "Thanking You..!!";
}
else
{
echo "0 record";
}
?>