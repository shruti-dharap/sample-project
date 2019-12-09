<?php
$name=$_POST["email"]
$password=$_POST["password"]
$feedback=$_POST["feedback"]
echo email."<br>"feedback."<br>";
$con=mysqli_connect("localhost","local","root","login");
if($con){
echo="connected succesfully";
$sql="INSERT INTO('$email',$password,$cpassword)";
$data=mysqli_query($con,$sql);
}
?>