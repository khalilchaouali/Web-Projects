<?php session_start();
$id_test=$_GET["id_test"];

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql="SELECT * from test where id=$id_test ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req=$conx->query($sql);
//$array=array();
while ($res=$req->fetch())
{
    $d_ecrite=$res["duree_ecrite"];
 }?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dynamic js Quiz With Progress Bar And Pass Mark</title>
   <title>Dynamic Quiz With Progress Bar And Pass Mark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
      <link rel="stylesheet" href="assets/custom/css/style.css">
<style type="text/css">


.countDown {
    border: solid .10px #fff;
    padding: 10px;
    border-radius: 100px;
    font-size: 75px;
    background-color: #000;
    color: #7a7ae0;
    text-align: center;
}
div#placement {
    width: 300px;

    margin: 0 auto;
}

</style>
  
</head>

<body >
  <div class="container" style="padding-top: 30px;">
    <!--<span id="demo" style="color: #007bff ;font-size:30px; position:relative;
                          right: -45%;border-color:#f8204f; "></span>-->
                          <div id="placement"><h1 class="clock countDown"></h1></div>
                        
<div class="row">
<div class="col-sm-4" style="padding-top: 5px; width: 1200px ; ">
        <div style="background-color: white;">
                <div class="panel panel-default">
      
      <div id="div2" class="panel-body">
          
         
              
              <div class="panel-footer">Votre progression<br/>
                   <p id="questCount"></p>
                  <div id="barra" class="progress">
    <!---kamel--><div id="bar" class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1%">
</div>
                      


                    
</div>

    </div>
                    
                    </div></div></div></div>    

</div>

  <div  class="row">
    <div id="div1" class="col-sm-4" style="padding-top: 20px;">
        <div style="background-color: white;">
      <div class="panel panel-default">
      <div  class="panel-heading" style="background-color: white;"><h1>Compréhension écrite</b></h1></div> 
      <div  class="panel-body">
          <br/>
          
        
          
  <button id="start">Commencer Compréhension écrite </button>
  
          
              
     
          <div id="content">

            <div id="image"></div>
  <div id="question"></div>
  <div id="answers"></div>
              <br/>

            <!--  <span id="demo" style="color: #007bff ;font-size:30px; position:relative;
                          right: 10%; "></span>

-->
  <button id="back" disabled>Back</button>
  <button id="next">Next</button>
 
  <h3><p id="score"></p></h3>
<p id="result"><b>Congratulations! You made it!</b></p>
<p id="resultbad"><b>Sorry, you need to score 70 points to pass</b></p>
              
              <button id="startagain">Start Again</button>
</div>
          
</div></div></div></div>

      
    
    </div>

  
</div></div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <!------- appel a la fonction de compteur ------->
    <script src="assets/custom/js/crno.js"></script> 
    <!-----------debut fonction : redirection si competeur égale zéro ------------->
 <script type="text/javascript">
      function RedirectionJavascript(){
        document.location.href="etudiant_orale.php?s_ecrite="+total+"&id_test=<?php echo $id_test;?>";
      }
   </script>
   <!------------ fin fonction redirect ----------------------------->
</body>
</html>
  
  

    <script  src="js/index.js"></script>



<script type="text/javascript">
     
    ////////////////////////////////////////////////////////////////////////////////////////////
    function newQuestion(params) {
    var temp = {
        question:  params[0],
        choices: params[1],
        correctAnswer: params[2]
    };
    return temp;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
var allQuestion=[];
<?php 

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql1="SELECT * from image where id_test=$id_test ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req1=$conx->query($sql1);
//$array=array();
while ($res1=$req1->fetch())
{
    $id_i=$res1["id_image"];
    $nom_image=$res1["nom_image"];
    $section=$res1["section"];
    $type=$res1["type"];
    $sql2="select * from question , image where question.id_image=$id_i and image.id_image=question.id_image";
    $req2=$conx->query($sql2);
 while($res2=$req2->fetch())
 { 
    $question=$res2["question"];
    $id_reponse=$res2["id_reponse"];
    $num_question=$res2["num_question"];
 $sql3="select * from  reponse, question where reponse.id_reponse=$id_reponse and question.id_reponse=reponse.id_reponse";
$req3=$conx->query($sql3);
while($res3=$req3->fetch())
{
$rep1=$res3["reponse1"];
$rep2=$res3["reponse2"];
$rep3=$res3["reponse3"];
$rep4=$res3["reponse4"];
$reponse_vrai=$res3["reponse_vrai"]
    ?>
   var allreponse=[];
   allreponse.push("<?php echo $rep1 ;?>");
   allreponse.push("<?php echo $rep2 ;?>");
   allreponse.push("<?php echo $rep3 ;?>");
   allreponse.push("<?php echo $rep4 ;?>");
   // allreponse=shuffle(allreponse);
    var a="<?php echo $type ; ?>";
    if (a=='image') {
 allQuestion.push(["<img src='documents/<?php echo $nom_image ?>' alt='Fjords'  style='width:40%'><p><b>Question <?php echo $num_question?>:</b><br/> <?php echo $question ?> ?<p/>", [allreponse[0], allreponse[1], allreponse[2], allreponse[3]], <?php echo $reponse_vrai ?>]);
    }
    else
    {
      allQuestion.push(["<video width='600' controls><source src='video/<?php echo $nom_image?>' type='video/mp4'></video><p><b>Question <?php echo $num_question?>:</b><br/> <?php echo $question ?> ?<p/>", [allreponse[0], allreponse[1], allreponse[2], allreponse[3]], <?php echo $reponse_vrai ?>]);
    }
<?php
}}}
?>
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

// Used like so

//allQuestion = shuffle(allQuestion);
var allQuestions = allQuestion.map(newQuestion);
// Create and initialize the total (to 0), number (to 0), and totalQuestions (to the length of allQuestions) variables
var total = 0, number = 0, totalQuestions = allQuestions.length, answers = [];

$(document).ready(function() {
  //$("#demo").hide();
 //$("#demo").stop();
$("#image").hide();
    function newQuestionAnswers() {
        $("#content").fadeOut(500, function() {
            $("#answers").empty();

            if (number < totalQuestions)
                $("#questCount").text("Question: " + (number + 1) + " de "+totalQuestions);
            var query = allQuestions[number];
            $("#question").html(query.question);

            // make sure to put in the name parameter and make sure that it's the same as the div that groups
            // the radio buttons together, otherwise they can all be checked at the same time, you'll never have
            // just one answer. The use of the html <label> element was discovered here:
            // http://stackoverflow.com/questions/5795499/changing-text-of-radio-button
            // Where it was explained that the text of the radio button was now explicitly associated with the
            // use of <label>
            for(var i = 0; i < query.choices.length; i++)
                $("#answers").append(" <div class='custom-control custom-radio'><input type='radio' name='answers' id='radio" + i + "' value='answer" + i
                    + "'><label for='test" + i + "'>" + query.choices[i] + "</label></div>");
            if(answers.length > number)
                $("#radio" + answers[number]).prop("checked", true);
            if (number > 0)
                $("#back").prop("disabled", false);
        });
        $("#content").fadeIn(500);
    }

    function checkAnswer() {
        // Make sure a radio button is checked before proceeding. If one is checked add it to answers, else if
        // the last radio button is reached and it is not checked alert the user that they must select an answer.
        for(var i = 0; i < $("input").length; i++) {
            if ($("#radio" + i).is(":checked")) {
                answers[number] = i;
                break;
            }
            else if ( i === $("input").length -1 && !$("#radio" +i).is(":checked")) {
                $("#next").after("<p id='warning'>Please select an answer and then click next</p>");
                return false;
            }
        }

        // Check to see if the current radio button checked is the correct answer. If correct increment the
        // score 10 points. This answer helped figure out if a radio box was checked and allowed you to use it in
        // an if statement http://stackoverflow.com/a/12932116
        var query = allQuestions[number];
        if($("#radio" + query.correctAnswer).is(":checked"))
            updateScore(10);
        number += 1;
        return true;
    }

    function finalScore() {
        $("#score").text("Final Score: " + total + "/" + totalQuestions * 10).show(1000);
        $("#question, #answers, #questCount, #next, #back").hide(10);
         $("#startagain").hide(100);
         <?php
           //session_start();
           $_SESSION["score_ecrite"]="test";
         ?>
         $(location).attr("href", "etudiant_orale.php?s_ecrite="+total+"&id_test=<?php echo $id_test ;?>");
       /* if (total > 60)
         $("#result").show(1000);
        if (total < 70)
         $("#resultbad").show(1000);*/
       
        
         
        
    }
var a=100/totalQuestions;
    function updateScore(change) {
        total += change;
        $("#score").text("Score: " + total);
    }

    $("#back").hide();
    $("#next").hide();
    $("#startagain").hide();
    $("#score").hide();
    $("#bar10").hide();
    $("#result").hide();
    $("#resultbad").hide();
    
    
    $("#start").on('click', function() {
   //setTimeout('RedirectionJavascript()', 60000)
   countdown();
        $("#start").hide();
        $("#image").show();
        $("#demo").show();
        
        $('#h4Start').hide(1000);
         $("#next").show(1000);
        $("#bar").width(a+'%');
        newQuestionAnswers();
        updateScore(0);
    });

      $("#startagain").on('click', function() {
        
       location.reload();
     
    
         
    });
    
    $("#next").on('click', function() {
        $("#back").show(100);
        $("#warning").remove();
       
        if(checkAnswer()) {
            if (number < totalQuestions)
                newQuestionAnswers();
            //var a=100/totalQuestions;
             
            else
                finalScore();
            
            
        }
        
       
        
      for(var i=0;i<totalQuestions;i++)
      {
         if(number > i)
        $("#bar").width(a+a+'%');
        }
        
   
    });
    
    
    
        

    $("#back").on('click', function() {
        if ( number === totalQuestions) {
            $("#score").hide();
            $("#question, #answers, #questCount, #next, #score").show(2500);
        }
        
        if (number > 0)
        $("#bar").width('5%');
        if (number > 1)
        $("#bar").width('10%');
        if (number > 2)
        $("#bar").width('20%');
        if (number > 3)
        $("#bar").width('30%');
        if (number > 4)
        $("#bar").width('40%');
        if (number > 5)
        $("#bar").width('50%');
        if (number > 6)
        $("#bar").width('60%');
        if (number > 7)
        $("#bar").width('70%');
        if (number > 8)
        $("#bar").width('80%');
        if (number > 9)
        $("#bar").width('90%');
        
        number -= 1;
        $("#back").prop("disabled", true);
        if (allQuestions[number].correctAnswer === answers[number])
            updateScore(-10);
        newQuestionAnswers();
        
          
    });
});


  </script>
   <script type="text/javascript">
     
$(document).ready(function() {
  
  $('.clock').text("<?php echo $d_ecrite ; ?>:00");
  
});
var interval;

function countdown() {
  clearInterval(interval);
  interval = setInterval( function() {
      var timer = $('.clock').html();
      timer = timer.split(':');
      var minutes = timer[0];
      var seconds = timer[1];
      seconds -= 1;
      if (minutes < 0) return;
      else if (seconds < 0 && minutes != 0) {
          minutes -= 1;
          seconds = 59;
      }
      else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

      $('.clock').html(minutes + ':' + seconds);

      if (minutes == 0 && seconds == 0) {clearInterval(interval);
       RedirectionJavascript();
      }
  }, 1000);

}
    </script>
</body>

</html>
