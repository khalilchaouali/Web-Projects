<?php
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$id_test=$_POST["id_test"];
$id_image=$_POST["aaa"];
$question=$_POST["question"];
$reponse1=$_POST["reponse1"];
$reponse2=$_POST["reponse2"];
$reponse3=$_POST["reponse3"];
$reponse4=$_POST["reponse4"];
$reponse_vrai=$_POST["rep_vrai"];
$num_question=$_POST["num_question"];


$sql1="insert into question_lexique (question,reponse1,reponse2,reponse3,reponse4,reponse_vrai,id_i,num_question) values('$question','$reponse1','$reponse2','$reponse3','$reponse4','$reponse_vrai','$id_image','$num_question')";
if($conx->query($sql1))
{
header("location:../liste_lexique_structure.php?id=$id_test");
}
?>