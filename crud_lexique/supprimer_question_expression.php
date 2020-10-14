<?php
if(isset($_GET["id"]) && is_numeric($_GET["id"]))
{
	$id=$_GET["id"];
	$id_test=$_GET["id_test"];
	$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
	$sql="DELETE FROM expression where id_qst=$id";
	if($conx->query($sql))
	{
		
		header("location:../liste_expression_ecrite.php?id=$id_test");
	}

}
else
{
	echo "erruer";

}
?>