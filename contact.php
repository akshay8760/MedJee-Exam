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
        <title>MedJeeExam:ContactUs</title>

        
            
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/contact.css">
    
        
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <script type="text/javascript">
                function fn1()
                {
                    var str = document.getElementById("name").value;
                    alert("Thanks " + str +" For your valuable feedback");               
                    }
        </script>

    </head>

    <body>
        
                 <?php
                include 'header.php';
                ?>

        <div class="container contentab">
            
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <h2>LIVE SUPPORT</h2><br>
                    <h4>24 Hours | 7 days a week | 365 days a year Chat Support</h4>
                    <p><b>MedJeeExam</b> chat service provides you <b>24x7</b> customer support service via live chat. 
                     Our live chat plans are customized according to your needs.We provide per chat based 
                     plans and dedicated live chat person so that you can contact directly to the subject expert.
                     It is only a live chat technical support plan . There won't be any type of help desk or ticket
                     support for this plans. The chat is handled by our shared chat support team. </p>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <br><br>
                    <img src="images/livechat.png"class="img-responsive" alt="Responsive image" width="200" height="100">
                </div>
            </div>

            <div class="row">
                <br><br><br>
                <div class="feedback-box">
               
                    <div class="col-sm-6">
                        <h2>Please GIve your Valuable Feedback:</h2><br>
                        <form action="feedsend.php" method="post">
                            <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                            <textarea name="message" id="mess" cols="60" rows="10"></textarea>
                            </div>

                            <button type="submit" class=" btn btn-primary" onclick="fn1()"> Submit </button>
                        </form>
                        
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 ">
                    <h2>ContactUs At : </h2><br>
                    <ul>
                        <li><a href="https://t.me/medjeeexam"><i class="fa fa-telegram"> Telegram</i></a></li><br>
                        <li><a href=""><i class="fa fa-envelope"> Gmail</i></a></li>
                    </ul>
                </div>
            </div>

        </div>



                <?php
                include 'footer.php';
                ?>
        

        
    </body>
</html>