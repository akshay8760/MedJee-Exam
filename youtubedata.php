<?php

$date = $_POST["date"];
$mentor = $_POST["mentor"];
$class = $_POST["class"];
$subject = $_POST["subject"];
$playlist = $_POST["playlist"];
$thumbnailtitle = $_POST["thumbnailtitle"];
$youtubetitle = $_POST["youtubetitle"];
$keywords = $_POST["keywords"];
$description = $_POST["description"];
$remarks = $_POST["remarks"];
$password = $_POST["password"];

if($password == 11062020)
{
$con = mysqli_connect("localhost", "root","", "videodetails");

$insert = " insert into details(date, mentor, class, subject, playlist, thumbnailtitle, youtubetitle, keywords, description, remarks, password) values('$date', '$mentor', '$class', '$subject', '$playlist', '$thumbnailtitle' , '$youtubetitle', '$keywords', '$description', '$remarks', '$password')";


$check = mysqli_query($con, $insert);

header('location:youtubeform.php');
}

?>