<?php
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$id_test=$_POST["id_test"];
$id_audio=$_POST["aaa"];
$question=$_POST["question"];
$reponse1=$_POST["reponse1"];
$reponse2=$_POST["reponse2"];
$reponse3=$_POST["reponse3"];
$reponse4=$_POST["reponse4"];
$reponse_vrai=$_POST["rep_vrai"];
$num_question=$_POST["num_question"];


$sql="insert into reponse_orale (reponse1,reponse2,reponse3,reponse4,reponse_vrai) values ('$reponse1','$reponse2','$reponse3','$reponse4','$reponse_vrai')";
if($conx->query($sql))
{
$id_reponse = $conx->lastInsertId();
}

$sql1="insert into question_orale (question,id_reponse,id_audio,num_question) values('$question','$id_reponse','$id_audio','$num_question')";
$req=$conx->query($sql1);
header("location:../liste_comprehension_orale.php?id=$id_test");
?>