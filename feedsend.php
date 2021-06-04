<?php

$con = mysqli_connect('localhost', 'medjebyp_medjeby', 'medjee@2020');

mysqli_select_db($con, 'medjebyp_feedback');

$name = $_POST['name']; 
$email = $_POST['email'];
$message = $_POST['message']; 

$reg = " insert into userfeed(name ,email, message) values ('$name' , '$email', '$message')";
    mysqli_query($con, $reg);
    header('location:contact.php');
?>
