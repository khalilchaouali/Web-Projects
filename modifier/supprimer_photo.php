<?php
if(isset($_GET["id"]) && is_numeric($_GET["id"]))
{	$id_test=$_GET["id_test"];
	$id=$_GET["id"];
	$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
	$sql="DELETE FROM image where image.id_image=$id  ";
	
	if($conx->query($sql))
	{
		
		header("location:../liste_comprehension_ecrite.php?id=$id_test");
	}

}
else
{
	echo "erruer";
}
?>