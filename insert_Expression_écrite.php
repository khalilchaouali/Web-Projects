<?php
session_start();
include("config.php");
 //$conx=new PDO("mysql:host=localhost;dbname=junior","root","");
$id_test=$_POST["id_test"];
if (assert($_POST["id_test"])) {

  echo "dkjdkcdjs";
}

$section=$_POST["myselect"];
$question=$_POST["question"];


 

for ($i=0; $i <count($question) ; $i++) { 
	# code...

  //echo $reponse1[$i]." ".$reponse2[$i]." ".$reponse3[$i]." ".$reponse4[$i];

  $req1="insert into expression (question,section) values ('".$question[$i]."','$section')";
if(mysqli_query($db,$req1))
{
	header("location:liste_expression_ecrite.php?id=$id_test");
}


echo $question[$i];echo"<br>";
echo $section;
}
?>

