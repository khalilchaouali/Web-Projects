<?php
session_start();
include("config.php");
 //$conx=new PDO("mysql:host=localhost;dbname=junior","root","");


$id_test=$_POST["id_test"];
if (assert($_POST["id_test"])) {

  echo "dkjdkcdjs";
}
$section=$_POST["myselect"];
$question1=$_POST["question"];
$reponse1=$_POST["reponse1"];
$reponse2=$_POST["reponse2"];
$reponse3=$_POST["reponse3"];
$reponse4=$_POST["reponse4"];
$rep_vrai=$_POST["rep_vrai"];
$num_question=$_POST["num_question"];
//get_image
//echo $section." ".$question." ".$reponse1." ".$reponse2." ".$reponse3." ".$reponse4;


   //$check = getimagesize($_FILES["image"]["tmp_name"]);
 
    if(empty($_FILES["image"]["name"])){ 
      $req3 = "insert into image_lexique(section,id_test) values('$section','".$id_test."')";
  if (mysqli_query($db,$req3)) {
    $last_id_image = mysqli_insert_id($db);
      $a=count($question1);
 

  for ($i=0; $i <count($question1) ; $i++) { 
  //echo $reponse1[$i]." ".$reponse2[$i]." ".$reponse3[$i]." ".$reponse4[$i]."<br>";
    if(isset($_POST["rep_vrai"]))
    {
$req1="insert into question_lexique (question,reponse1,reponse2,reponse3,reponse4,reponse_vrai,id_i,num_question) values ('".$question1[$i]."','".$reponse1[$i]."','".$reponse2[$i]."','".$reponse3[$i]."','".$reponse4[$i]."','".$rep_vrai[$i]."','$last_id_image','".$num_question[$i]."')";

       if( mysqli_query($db,$req1))
       {

        header("location:liste_lexique_structure.php?id=$id_test");
      }}

  
 }
  }

}
 else
 {
  
   $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){ 
$dossier = 'documents/';
  $name_image=basename($_FILES["image"]["name"]);
$target_file =$dossier.basename($_FILES["image"]["name"]);
// Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif","jfif");
 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
  //insertion de table reponse
 
//insertion table image  //foreach ($_POST["rep_vrai"] as $value) {
   // Upload file
  move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
echo "File uploaded successfully.";
  // Insert record
  $req3 = "insert into image_lexique (nom,section,id_test) values('$name_image','$section','".$id_test."')";
  if (mysqli_query($db,$req3)) {
    echo "image insert";
    $last_id_image = mysqli_insert_id($db);
  }
 
for ($i=0; $i <count($question1) ; $i++) { 
  //echo $reponse1[$i]." ".$reponse2[$i]." ".$reponse3[$i]." ".$reponse4[$i];

if(isset($_POST["rep_vrai"]))
 {
  $req1="insert into question_lexique (id_i,question,reponse1,reponse2,reponse3,reponse4,reponse_vrai,num_question) values ('$last_id_image','".$question1[$i]."','".$reponse1[$i]."','".$reponse2[$i]."','".$reponse3[$i]."','".$reponse4[$i]."','".$rep_vrai[$i]."','".$num_question[$i]."')";

mysqli_query($db,$req1);
header("location:liste_lexique_structure.php?id=$id_test");
}
 }}
}
}



?>

