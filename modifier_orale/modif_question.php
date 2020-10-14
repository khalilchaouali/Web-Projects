<?php
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$id_test=$_POST["id_test"];

$id_question=$_POST["aaa"];
$question=$_POST["question"];
$reponse1=$_POST["reponse1"];
$reponse2=$_POST["reponse2"];
$reponse3=$_POST["reponse3"];
$reponse4=$_POST["reponse4"];
$rep_vrai=$_POST["rep_vrai"];
$num_question=$_POST["num_question"];
$id_reponse=$_POST["idReponse"];


        $sql1="update question_orale set question='$question' , num_question='$num_question' where id_question=$id_question  ";
        $sql2="update reponse_orale set reponse1='$reponse1', reponse2='$reponse2', reponse3='$reponse3' , reponse4='$reponse4',reponse_vrai='$rep_vrai' where id_reponse=$id_reponse ";
     if( $conx->query($sql1) && $conx->query($sql2))
     {
     	header("location:../liste_comprehension_orale.php?id=$id_test");
     }
     else
     {
     	echo "erreurrrrrrrrrrrrrrrrrrrrrrrrrrrr";
     }
?>