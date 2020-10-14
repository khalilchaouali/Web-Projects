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




$file_audio = $_FILES['audio']['name'];

if($_FILES['audio']['type']=='audio/mpeg' || $_FILES['audio']['type']=='audio/mpeg3' || $_FILES['audio']['type']=='audio/x-mpeg3' || $_FILES['audio']['type']=='audio/mp3' || $_FILES['audio']['type']=='audio/x-wav' || $_FILES['audio']['type']=='audio/wav')
{ 
 $file_audio=$_FILES['audio']['name'];

 // Where the file is going to be placed
 $target_path = "Audios/".$file_audio;


  $req3 = "insert into audio(nom_audio,section,id_test) values('$file_audio','$section','".$id_test."')";
  echo $file_audio." ".$section;
  if (mysqli_query($db,$req3)) {
    $last_id_audio = mysqli_insert_id($db);
}
 
 //target path where u want to store file.

  //following function will move uploaded file to audios folder. 
move_uploaded_file($_FILES['audio']['tmp_name'], $target_path) ;

}
else
  {   echo "File upload failed, please try again.";
  }




$countfiles=count($_FILES['image']['name']);

for($j=0;$j<$countfiles;$j++) 
{ 
   $check = getimagesize($_FILES["image"]["tmp_name"][$j]);
    if($check !== false){	
$dossier = 'documents/';
  $name_image=basename($_FILES["image"]["name"][$j]);
  //$name_audio=$_FILES['audio'] ['name'];
$target_file =$dossier.basename($_FILES["image"]["name"][$j]);
// Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
 

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif","jfif");
 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
  //insertion de table reponse
 // Insert record


  // Insert record
  $req4 = "insert into image_orale(nom,id_audio) values('".$name_image."','$last_id_audio')";
  if (mysqli_query($db,$req4)) {
    $last_id_image = mysqli_insert_id($db);
    move_uploaded_file($_FILES['image']['name'][$j], $target_file) ;
}

}}}
for($i=0;$i<count($question);$i++)
{
echo $question[$i];echo "<br>";
echo $reponse1[$i];echo "<br>";
echo $reponse2[$i];echo "<br>";
echo $reponse3[$i];echo "<br>";
echo $reponse4[$i];echo "<br>";


if(isset($_POST["rep_vrai"]))
 {
 $req1='insert into reponse_orale (reponse1,reponse2,reponse3,reponse4,reponse_vrai) values ("'.$reponse1[$i].'","'.$reponse2[$i].'","'.$reponse3[$i].'","'.$reponse4[$i].'","'.$rep_vrai[$i].'")';
}



if (mysqli_query($db,$req1)) {
    $last_id_reponse = mysqli_insert_id($db);
   echo "reponse inserted";
}
$req2="insert into question_orale (question,id_reponse,id_audio,num_question) values ('".$question[$i]."','$last_id_reponse','$last_id_audio','".$num_question[$i]."')";
/*
$req2="insert into question_orale (question,id_reponse,id_audio,num_question) values ('".$question[$i]."','$last_id_reponse','$last_id_audio',".$num_question[$i]."')";*/
if (mysqli_query($db,$req2)) {
    $last_id_question = mysqli_insert_id($db);
    header("location:comprehension_orale.php?id=$id_test");
}





}


 
 //}
/////////////////////////////////////////////////
  
 
 

?>

