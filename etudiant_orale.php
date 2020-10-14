<?php
$s_ecrite=$_GET["s_ecrite"];
$id_test=$_GET["id_test"];
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql="SELECT * from test where id=$id_test ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req=$conx->query($sql);
//$array=array();
while ($res=$req->fetch())
{
    $d_orale=$res["duree_orale"];
 }
  ?>
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
<!------------------------ code css de design de compteur --------------->
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
<!---------------------- fin code css de compteur ---------------------->  
</head>

<body onbeforeunload="return myFunction()">
  <div class="container" style="padding-top: 30px;">
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
      <div  class="panel-heading" style="background-color: white;"><h1>Compréhension Orale</b></h1></div> 
      <div  class="panel-body">
          <br/>
          
        
          
  <button id="start">Commencer Compréhension Orale</button>
  
          
              
     
          <div id="content">
            <div id="image"></div>
  <div id="question"></div>
  <div id="answers"></div>
              <br/>
  <button id="back" disabled>Préc</button>
  <button id="next">Suivant</button>
 
  <h3><p id="score"></p></h3>
<p id="result"><b>Congratulations! You made it!</b></p>
<p id="resultbad"><b>Sorry, you need to score 70 points to pass</b></p>
              <div id="aa"></div>
              <button id="startagain">Start Again</button>

</div>
          
</div></div></div></div>

      
    
    </div>

  
</div></div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script type="text/javascript">
      function RedirectionJavascript(){
        document.location.href="etudiant_lexique.php?s_ecrite="+<?php echo $s_ecrite;?>+"&s_orale="+total+"&id_test=<?php echo $id_test ;?>";
      }
   </script>
   <script src="crno.js"></script> 
    <!------------------------------------------------------------------------------------------------>

</body>
</html>
  
  

    <script  src="js/index.js"></script>



<script type="text/javascript">
      // Create a function that will generate new question objects
function newQuestion(params) {
    var temp = {
        question:  params[0],
        choices: params[1],
        correctAnswer: params[2]
    };
    return temp;
}
// Create the array allQuestions and generate all of the new questions
var allQuestion=[];
//////////////////////////////////////////////////////////////////////////
<?php 
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$sql1="select * from audio where id_test=$id_test ";
  $req1=$conx->query($sql1);
while ($res1=$req1->fetch())

{ $section=$res1["section"];
  $id_audio=$res1["id_audio"];
  $nom_audio=$res1["nom_audio"];
  ?>
  var allimage=[]
  <?php
   $sql2="select * from image_orale where id_audio=$id_audio ";
$req2=$conx->query($sql2);
while ($res2=$req2->fetch()) {
    $nom_image=$res2["nom"];
?>



  allimage.push("<div class='col-lg-3'  ><div class='thumbnail'><img src='documents/<?php echo $nom_image;?>' alt='Fjords'   height='600px' width='500px'></a></div></div>");

<?php }?>
var ch='';
for (var i = 0; i < allimage.length; i++) {
 ch=ch+allimage[i]
 
} 
<?php
$sql3="select * from question_orale where id_audio=$id_audio ";
$req3=$conx->query($sql3);
while ($res3=$req3->fetch())

{$question=$res3["question"];
$id_reponse=$res3["id_reponse"];
$num_question=$res3["num_question"];
$sql4="select * from reponse_orale where id_reponse=$id_reponse ";
$req4=$conx->query($sql4);
$res4=$req4->fetch();
$rep1=$res4["reponse1"];
$rep2=$res4["reponse2"];
$rep3=$res4["reponse3"];
$rep4=$res4["reponse4"];
$rep_vrai=$res4["reponse_vrai"];
?>
var allreponse=[];
   allreponse.push("<?php echo $rep1 ;?>");
   allreponse.push("<?php echo $rep2 ;?>");
   allreponse.push("<?php echo $rep3 ;?>");
   allreponse.push("<?php echo $rep4 ;?>");
   // allreponse=shuffle(allreponse);
allQuestion.push(["<div class='row'><audio controls='controls' onended='test()'><source src='Audios/<?php echo $nom_audio;?>' type='audio/mp3' />Votre navigateur n'est pas compatible</audio></div><div class='row'>"+ch+"</div><p><b>Question <?php echo $num_question?>:</b><br/> <?php echo $question ?> ?<p/>", [allreponse[0], allreponse[1], allreponse[2], allreponse[3]],"<?php echo $rep_vrai;?>"]);
<?php }?>
<?php }?>
////////////////////////////////////// fonction suffle aleatoire ///////////////////////////////////////
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////// //////////    ////////////////   ///////////
var allQuestions = allQuestion.map(newQuestion);
// Create and initialize the total (to 0), number (to 0), and totalQuestions (to the length of allQuestions) variables
var total = 0, number = 0, totalQuestions = allQuestions.length, answers = [];
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
$(document).ready(function(){
  /////////// disable f5 refresh ////////////////////
   $(document).on("keydown", disableF5);

$(window).on('beforeunload', function(){
      return 'Are you sure you want to leave?';
});
  function test() {
    alert("aaaaaa");
  }
$("#demo").hide();
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
                $("#answers").append("<input type='radio' name='answers' id='radio" + i + "' value='answer" + i
                    + "'><label for='test" + i + "'>" + query.choices[i] + "</label><br>");
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
                $("#next").after("<p id='warning'>Veuillez sélectionner une réponse, puis cliquez sur Suivant.</p>");
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
        $("#score").text("Final Score: " + total + "/" + totalQuestions ).show(1000);
        $("#question, #answers, #questCount, #next, #back").hide(10);
         $("#startagain").hide(100);
         $(location).attr("href", "etudiant_lexique.php?s_ecrite="+<?php echo $s_ecrite;?>+"&s_orale="+total+"&id_test=<?php echo $id_test ;?>");
        /* 
        if (total > 60)
         $("#result").show(1000);
        if (total < 70)
         $("#resultbad").show(1000);*/
         
        
         
        
    }

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
      countdown();
        $("#start").hide();
        $("#demo").show();
        $('#h4Start').hide(1000);
         $("#next").show(1000);
        $("#bar").width('5%');
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
            else
                finalScore();
            
            
        }
        
       
        
        // Enable the back button if past first question
        if (number > 0)
            $("#back").prop("disabled", false);
            $("#bar").width('10%');
        
        if (number > 1)
        $("#bar").width('20%');
        if (number > 2)
        $("#bar").width('30%');
        if (number > 3)
        $("#bar").width('40%');
        if (number > 4)
        $("#bar").width('50%');
        if (number > 5)
        $("#bar").width('60%');
        if (number > 6)
        $("#bar").width('70%');
        if (number > 7)
        $("#bar").width('80%');
        if (number > 8)
        $("#bar").width('90%');
        if (number > 9)
        $("#bar").width('100%');
        
        
   
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
   <!------------------------ code javascript de compteur --------------------------->
    <script type="text/javascript">
      
$(document).ready(function() {
  
  $('.clock').text("<?php echo $d_orale ; ?>:00");
  
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

////////////////////////////// remove sound after 2 listen ---------------------->
var soundFoo = document.getElementById('foo');
var i=0;
soundFoo.onended = function() {
  alert("aaaa");
  //i++;
  //if(i==1)
//$("#element").remove();
}

    </script>
</body>
</html>
