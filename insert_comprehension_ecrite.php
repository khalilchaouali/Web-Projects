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
$reponse1=$_POST["reponse1"];
$reponse2=$_POST["reponse2"];
$reponse3=$_POST["reponse3"];
$reponse4=$_POST["reponse4"];
$rep_vrai=$_POST["rep_vrai"];
$num_question=$_POST["num_question"];
//get_image
//echo $section." ".$question." ".$reponse1." ".$reponse2." ".$reponse3." ".$reponse4;




   $check=getimagesize($_FILES["image"]["tmp_name"]);
   $a=filesize($_FILES["image"]["tmp_name"]);
    if($a !== false){ 
$dossier = 'documents/';
$dossier1='video/';
  $name_image=basename($_FILES["image"]["name"]);
$target_image =$dossier.basename($_FILES["image"]["name"]);
$target_video =$dossier1.basename($_FILES["image"]["name"]);
// Select file type
 $imageFileType=strtolower(pathinfo($target_image,PATHINFO_EXTENSION));
$videoFileType=strtolower(pathinfo($target_video,PATHINFO_EXTENSION));
 // Valid file extensions
 $extensions_arr_image=array("jpg","jpeg","png","gif","jfif");
 $extensions_arr_video=array("mp4","ogg","avi","3gp","webm");
 // Check extension
 if( in_array($imageFileType,$extensions_arr_image) ){
  //insertion de table reponse
 
//insertion table image  //foreach ($_POST["rep_vrai"] as $value) {
   // Upload file
  move_uploaded_file($_FILES["image"]["tmp_name"],$target_image);
  // Insert record
  $req3 = "insert into image(nom_image,section,type,id_test) values('$name_image','$section','image','".$id_test."')";
  if (mysqli_query($db,$req3)) {
    $last_id_image = mysqli_insert_id($db);
}
//insertion table question 
 for($i=0;$i<count($question);$i++)
{
  echo $question[$i];echo "<br>";
  echo $reponse1[$i];echo "<br>";
  echo $reponse2[$i];echo "<br>";
  echo $reponse3[$i];echo "<br>";
  echo $reponse4[$i];echo "<br>";
  echo "num question".$num_question[$i];

  //echo $reponse1[$i]." ".$reponse2[$i]." ".$reponse3[$i]." ".$reponse4[$i];

if(isset($_POST["rep_vrai"]))
 {
  $req1='insert into reponse (reponse1,reponse2,reponse3,reponse4,reponse_vrai) values ("'.$reponse1[$i].'","'.$reponse2[$i].'","'.$reponse3[$i].'","'.$reponse4[$i].'","'.$rep_vrai[$i].'")';
}



if (mysqli_query($db,$req1)) {
    $last_id_reponse = mysqli_insert_id($db);
   
}

$req2="insert into question (question,id_reponse,id_image,num_question) values ('".$question[$i]."','$last_id_reponse','$last_id_image','".$num_question[$i]."')";
if (mysqli_query($db,$req2)) {
    $last_id_question = mysqli_insert_id($db);
    header("location:liste_comprehension_ecrite.php?id=$id_test");
}

 }
/////////////////////////////////////////////////
  
 }
else 
  if( in_array($videoFileType,$extensions_arr_video) ){
  //insertion de table reponse
 
//insertion table image  //foreach ($_POST["rep_vrai"] as $value) {
   // Upload file
  move_uploaded_file($_FILES["image"]["tmp_name"],$target_video);
  // Insert record
  $req3 = "insert into image(nom_image,section,type,id_test) values('$name_image','$section','video','".$id_test."')";
  if (mysqli_query($db,$req3)) {
    $last_id_image = mysqli_insert_id($db);
}
//insertion table question 
 for($i=0;$i<count($question);$i++)
{
  echo $question[$i];echo "<br>";
  echo $reponse1[$i];echo "<br>";
  echo $reponse2[$i];echo "<br>";
  echo $reponse3[$i];echo "<br>";
  echo $reponse4[$i];echo "<br>";
  echo "num question".$num_question[$i];

  //echo $reponse1[$i]." ".$reponse2[$i]." ".$reponse3[$i]." ".$reponse4[$i];

if(isset($_POST["rep_vrai"]))
 {
  $req1='insert into reponse (reponse1,reponse2,reponse3,reponse4,reponse_vrai) values ("'.$reponse1[$i].'","'.$reponse2[$i].'","'.$reponse3[$i].'","'.$reponse4[$i].'","'.$rep_vrai[$i].'")';
}



if (mysqli_query($db,$req1)) {
    $last_id_reponse = mysqli_insert_id($db);
   
}

$req2="insert into question (question,id_reponse,id_image,num_question) values ('".$question[$i]."','$last_id_reponse','$last_id_image','".$num_question[$i]."')";
if (mysqli_query($db,$req2)) {
    $last_id_question = mysqli_insert_id($db);
    header("location:liste_comprehension_ecrite.php?id=$id_test");
}

 }
/////////////////////////////////////////////////
  
 }

 else
 {
  echo "File upload failed, please try again.";
 }
}
else
{
  echo "Please select an image file to upload.";
}

?>

