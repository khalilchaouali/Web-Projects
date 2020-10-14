<?php
if(isset($_GET["id"]) && is_numeric($_GET["id"]))
{	$id_test=$_GET["id_test"];
	$id=$_GET["id"];
	$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
	$sql="DELETE FROM image_lexique where id_i=$id";
	if($conx->query($sql))
	{
		
		header("location:../liste_lexique_structure.php?id=$id_test");
	}
}
else
{
	echo "erreur";
}
?>