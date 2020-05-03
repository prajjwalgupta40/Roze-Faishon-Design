<?php

$con=mysqli_connect("localhost","root","","faishon");

$n=$_POST["uname"];
$e=$_POST["pswd"];
$p=$_POST["pswd2"];

if(!$con){
    die("Not Connected");
}
else{
    echo "<script type='text/javascript'>alert('You have been connected to server');</script>";

}
function function_alert($message) {   
    echo "<script>alert('$message');</script>"; 
}
echo "<br>";
$sql="insert into story(name,email,story) values('$n','$e','$p')";

$r= mysqli_query($con,$sql);

if($r>0)
{
    function_alert("What A Amazing Story...Thanks for Sharing it with Us."); 
    header("location:index.html");
}
else
{
    echo "<script type='text/javascript'>alert('What A ....');</script>";

}
?>










