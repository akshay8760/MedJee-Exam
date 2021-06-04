<!DOCTYPE HTML>
<html lang="en">
    <head>
    <script data-ad-client="ca-pub-7253529784561081" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167491152-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167491152-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MedJeeExam is the best site to give mock tests for competitive exams 
    like Jee and Neet.You can also download Ncert Textbook/Exemplar ,Previous Year Questions, Boosters and 
    we also provide you shortcuts, tips & tricks to crack various exams">
        <title>MedJeeExam:Exemplar</title>

       
        <link rel="stylesheet" href="css/youtubestyle.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/exemplar.css">
        

		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
                         <?php
                            include 'header.php';
                        ?>

        <div class="container content">

    <script>

        function mess()
{
    alert("Your Data has been Successfully sent");
}
</script>

<form action="youtubedata.php" method="post">
<h1 align="center">Youtube Video Details</h1>
<h2><marquee behavior="alternate" direction="">Please fill in all the details below before sending any video.</marquee></h2>
<table align="center"> 
<tr>
<td class="det">Date:</td>
<td><input type="text" placeholder="dd/mm/yyyy" name="date"></td>
</tr>
<tr>
<td class="det">Your Name(Mentor):</td>
<td><input type="text" placeholder="Enter Your Name" name="mentor"></td>
</tr>
<tr>
<td class="det">Class:</td>
<td><input type="text" placeholder="Enter Class" name="class"></td>
</tr>
<tr>
<td class="det">Subject:</td>
<td><input type="text" placeholder="Enter Subject Name" name="subject"></td>
</tr>
<tr>
<td class="det">Playlist:</td>
<td><input type="text" placeholder="Enter Playlist Name" name="playlist"></td>
</tr>
<tr>
<td class="det">Thumbnail Title:</td>
<td><textarea name="thumbnailtitle" id="" cols="30" rows="3" ></textarea></td>
</tr>
<tr>
<td class="det">Youtube Title:</td>
<td><textarea name="youtubetitle" id="" cols="30" rows="3"></textarea></td>
</tr>
<tr>
<td class="det">Important Keywords(5-10):</td>
<td><textarea name="keywords" id="" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td class="det">Description:</td>
<td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
</tr>
<tr>
<td class="det">Remarks(if any):</td>
<td><textarea name="remarks" id="" cols="30" rows="5"></textarea></td>
</tr>
<td class="det">Password</td>
<td><input type="password" name="password" id="" placeholder="Enter your password"></textarea></td>
</tr>
<tr>
<td colspan=2><p>*Please Ensure that the password is correct, Incorrect password can lead to data loss.</p>
<p>*Please verify all the details once again before sending the data, once sent cant be changed.</p></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SEND" class="send" onclick="mess()"></td>
</tr>
</table>

        </div>


            <?php
            include 'footer.php';
                ?>
         

        
    </body>
</html>