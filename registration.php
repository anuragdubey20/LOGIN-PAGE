<?php
session_start();
$con = mysqli_connect('localhost','','','login');
if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'login');
$name = $_POST['Enter Your Email'];
$pass = $_POST['password'];
$q = "select * from sigin where email='$name' && password='$pass' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num ==1 ){
    echo "duplicate data";
}else{
    $qy= "insert into sigin(email, password) values ('$name','$pass') ";
    mysqli_query($con, $qy);
}
?>