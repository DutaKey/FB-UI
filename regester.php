<?php
session_start();
include('config.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$emailadd=$_POST['emailadd'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$bday=$_POST['bday'];

mysql_query("INSERT INTO members(fname, lname, address, city, contact, email, password, gender, bday, profilepic, coverphoto)VALUES('$fname', '$lname', '$address', '$city', '$contact', '$emailadd', '$password', '$gender', '$bday', 'profilepic/friends.png', 'coverphotos/cover.png')");
header("location: index.php");
mysql_close($con);
?>