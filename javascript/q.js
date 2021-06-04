function check()
{


    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
    var question7 = document.quiz.question7.value;
    var question8 = document.quiz.question8.value;
    var question9 = document.quiz.question9.value;
    var question10 = document.quiz.question10.value;

    var correct = 0;
 

    if(question1 == "correct"){
        correct++ ;
    }
   

    if(question2 == "correct"){
        correct++ ;
    }

    

    if(question3 == "correct"){
        correct++ ;
    }
   

    if(question4 == "correct"){
        correct++ ;
    }
    

    if(question5 == "correct"){
        correct++ ;
    }
    

    if(question6 == "correct"){
        correct++ ;
    }
   
    if(question7 == "correct"){
        correct++ ;
    }
    

    if(question8 == "correct"){
        correct++ ;
    }
    

    if(question9 == "correct"){
        correct++ ;
    }
    

    if(question10 == "correct"){
        correct++ ;
    }
    


    

    var message = ["Great Job!", "That's Just Okay", "You Really need to do Better!", "Please Attempt To get Score Card"];
 

    var range;
    if( correct == 0){
        range=3;
    }
    if(correct >= 1 && correct <=3){
        range=2;
    }
    
    if(correct > 3 && correct <= 7){
        range=1;
    }
    
    if(correct > 8){
        range=0;
    }
   
 
var total = 10;
 

document.getElementById("after_submit").style.visibility = "visible";
 

 document.getElementById("total").innerHTML  = "Total Question = " +total ;
 document.getElementById("correct").innerHTML = "Total Questions Correct = " +correct ;
//  document.getElementById("wrong").innerHTML = "Total Questions Wrong = " +wrong ;
//  document.getElementById("attempt").innerHTML  = "Total Questions Attempted = " +attempt ;
 
 document.getElementById("message").innerHTML  = "Remark : " + message[range] ;
 document.getElementById("message").innerHTML ;
 document.getElementById("message").innerHTML ;
//  document.getElementById("answer1").innerHTML = "1.neet is Correct";
//  document.getElementById("answer2").innerHTML = "2.Oxygen is Correct";
//  document.getElementById("answer3").innerHTML = "3.Sulphur is Correct";

}