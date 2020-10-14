<?php
$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$id_test=$_POST["id_test"];
$id_question=$_POST["aaa"];
$question=$_POST["question"];
$section=$_POST["myselect"];



        $sql1="update expression set question='$question' ,section='$section' where id_qst=$id_question  ";
        
     if( $conx->query($sql1))
     {
        header("location:../liste_expression_ecrite.php?id=$id_test");
     }
     else
     {
        echo "erreur";
     }
?>