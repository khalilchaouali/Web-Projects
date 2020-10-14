<?php
$id=$_GET["id"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> lexique/structure </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
     <style type="text/css">
         #comp_ecrite{
            color: #FD0002 ;
            font-family:arial, sans-serif;
           font-size:300%;
           font-weight:bold;
         }
         .container {
         margin: 0 auto;
  padding: 1em; 
}
.aaa {
  padding: 2em;
  color: #343a40;
  display: none;
}

    
     </style>
     
</head>
 

<body>




<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>

<!-- Start Top Header -->
<div class="fables-forth-background-color fables-top-header-signin">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-2 col-lg-5">
                <div class="dropdown">
                 
                  <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="assets/custom/images/england.png" alt="england flag" class="mr-1"> English</a>
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="assets/custom/images/France.png" alt="england flag" class="mr-1"> French</a> 
                  </div>
                </div>
                
            </div>
            
            
            
        </div>
    </div>
</div>
 
<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
         
                            <a class="navbar-brand pl-0" href="accueil.php?id_test=<?php echo $id; ?>"><img src="assets/custom/images/junior-logo.png" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                              <a href="#"> <h1 id="comp_ecrite"><center>lexique structure </center></h1></a>

                    </div>
                </nav>
                   </div>
                   <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">
                       
                    <div class="fables-header-icons">
                        <div class="dropdown"> 
                                
 
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <div class="p-3 cart-block">
                                             <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                             <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                             <hr>
                                             <div class="text-center">
                                                 <a href="#" class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View my cart</a> 
                                                <a href="#" class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                             </div>
                                        </div>
                                  </div>
                         </div>
                         
                         
                         
                    </div>
                   </div>
               </div>
    </div>
</div> 
<!-- /End Fables Navigation -->
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="accueil.php?id_test=<?php echo $id ; ?>" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">lexique/structure</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->

<div class="container py-3 py-lg-5">
    <div class="fables-team my-3">  
       <div class="row">           
         <select class="custom-select custom-select-lg mb-3" id="select_section">
 <option selected>choisir section</option>
  <option value="A" >A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
   </div>


<div class="container">

    <div id="A" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql1="SELECT * from image_lexique where section='A' and id_test=$id ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req1=$conx->query($sql1);
//$array=array();
while ($res1=$req1->fetch())
{
    $id_i=$res1["id_i"];
    $nom_section=$res1["nom"];
    $sql3="SELECT * FROM question_lexique where id_i=$id_i ";//id_i=0 and 
    $req3=$conx->query($sql3);
    echo "<div class='row'>"; 
    while($res3=$req3->fetch())
    {
    $id_question=$res3["id"];
    $question=$res3["question"];
    $reponse1=$res3["reponse1"];
    $reponse2=$res3["reponse2"];
    $reponse3=$res3["reponse3"];
    $reponse4=$res3["reponse4"];
   
    $num_question=$res3["num_question"];
   

echo "<div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question.php?id=$id_question&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a>
   
    <button type='button' class='btn btn-danger' onclick='ConfirmDelete()'>supprimer </button>

<h2 class='fables-second-text-color font-35 font-weight-bold wow fadeInLeft'>Question  <span class='fables-main-text-color'>$num_question</span></h2> <h5 class='overflow-hidden'>$question</h5>";

?>
 <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question.php?id=<?php echo $id_question; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php
echo "  <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.3s'> 
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse1
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.6s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse2
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.9s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse3
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='1.2s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse4
                       </p>
                   </div>
               </div>";
   }  
 echo "</div>";
}
?>
  
</div>

    <div id="B" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql2="SELECT * from image_lexique where section='B' and id_test=$id  ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req2=$conx->query($sql2);
//$array=array();
while ($res2=$req2->fetch())
{
    $id_i=$res2["id_i"];
     $nom_image=$res2["nom"];
if($nom_image=='NULL')
{

$sql3="SELECT * FROM question_lexique where id_i=$id_i ";//id_i=0 and 
    $req3=$conx->query($sql3);
    echo "<div class='row'>"; 
    while($res3=$req3->fetch())
    {
    $id_question=$res3["id"];
    $question=$res3["question"];
    $reponse1=$res3["reponse1"];
    $reponse2=$res3["reponse2"];
    $reponse3=$res3["reponse3"];
    $reponse4=$res3["reponse4"];
    $num_question=$res3["num_question"];
   
 //<a href='crud_lexique/supprimer_question.php?id=$id_question'>
echo "<div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question.php?id=$id_question&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a>

   
    <button type='button' class='btn btn-danger' onclick='ConfirmDeleteQuestion()'>supprimer </button>

<h2 class='fables-second-text-color font-35 font-weight-bold wow fadeInLeft'>Question  <span class='fables-main-text-color'>$num_question</span></h2> <h5 class='overflow-hidden'>$question</h5>";
?>
 <script type="text/javascript">
      function ConfirmDeleteQuestion()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question.php?id=<?php echo $id_question ; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php

echo "  <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.3s'> 
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse1
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.6s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse2
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.9s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse3
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='1.2s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse4
                       </p>
                   </div>
               </div>";
   }  

   }
   else
   {
     echo "<div class='row'>
 <div class='col-md-8'>
    <div class='thumbnail'>
        <img src='documents/$nom_image' alt='Fjords'  style='width:60%''>
        
      </a>
    </div>
  </div>
  <div class='col-md-4'><a href='crud_lexique/ajout_question.php?id=$id_i&id_test=$id'><button type='button' class='btn btn-primary btn-lg btn-block'>Ajouter autre question</button></a><br>
  
<button type='button' class='btn btn-danger btn-lg btn-block' onclick='ConfirmDeleteImage()'>supprimer</button>

  </div>

</div>
"; 
?>

 <script type="text/javascript">
      function ConfirmDeleteImage()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_photo.php?id=<?php echo $id_i; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php

$sql3="SELECT * FROM question_lexique where id_i=$id_i ";//id_i=0 and 
    $req3=$conx->query($sql3);
    echo "<div class='row'>"; 
    while($res3=$req3->fetch())
    {
    $id_question=$res3["id"];    
    $question=$res3["question"];
    $reponse1=$res3["reponse1"];
    $reponse2=$res3["reponse2"];
    $reponse3=$res3["reponse3"];
    $reponse4=$res3["reponse4"];
   
    $num_question=$res3["num_question"];
   

echo "<div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question.php?id=$id_question&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a>

    <a href='crud_lexique/supprimer_question.php?id=$id_question'>
    <button type='button' class='btn btn-danger' onclick='ConfirmDeleteQuestion()'>supprimer </button>
    </a>
<h2 class='fables-second-text-color font-35 font-weight-bold wow fadeInLeft'>Question  <span class='fables-main-text-color'>$num_question</span></h2> <h5 class='overflow-hidden'>$question</h5>";
?>
 <script type="text/javascript">
      function ConfirmDeleteQuestion()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question.php?id=<?php echo $id_question; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>


<?php

echo "  <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.3s'> 
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse1
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.6s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse2
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.9s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse3
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='1.2s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse4
                       </p>
                   </div>
               </div>";


   }}
    echo "</div>";  


}

//}
?>
  
</div>

  <div id="C" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql1="SELECT * from image_lexique where section='C' and id_test=$id ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req1=$conx->query($sql1);
//$array=array();
while ($res1=$req1->fetch())
{
    $id_i=$res1["id_i"];
    $nom_section=$res1["nom"];
    $sql3="SELECT * FROM question_lexique where id_i=$id_i ";//id_i=0 and 
    $req3=$conx->query($sql3);
    echo "<div class='row'>"; 
    while($res3=$req3->fetch())
    {
    $id_question=$res3["id"];
    $question=$res3["question"];
    $reponse1=$res3["reponse1"];
    $reponse2=$res3["reponse2"];
    $reponse3=$res3["reponse3"];
    $reponse4=$res3["reponse4"];
   
    $num_question=$res3["num_question"];
   

echo "<div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question.php?id=$id_question&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a>
   
    <button type='button' class='btn btn-danger' onclick='ConfirmDelete()'>supprimer </button>
    
<h2 class='fables-second-text-color font-35 font-weight-bold wow fadeInLeft'>Question  <span class='fables-main-text-color'>$num_question</span></h2> <h5 class='overflow-hidden'>$question</h5>";

?>
 <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question.php?id=<?php echo $id_question; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php
echo "  <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.3s'> 
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse1
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.6s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse2
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.9s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse3
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='1.2s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse4
                       </p>
                   </div>
               </div>";
   }  
 echo "</div>";
}
?>
  
</div>
  <div id="D" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");

$sql1="SELECT * from image_lexique where section='D' ";
//$sql = 'SELECT * FROM doc_env WHERE ID_etudiant=(SELECT ID_etudiant FROM etudiant Where Nom_etudiant="'.mysql_escape_string($_SESSION['login']).'")';
$req1=$conx->query($sql1);
//$array=array();
while ($res1=$req1->fetch())
{
    $id_i=$res1["id_i"];
    $nom=$res1["nom"];
    $sql3="SELECT * FROM question_lexique where id_i=$id_i ";//id_i=0 and 
    $req3=$conx->query($sql3);
    echo "<div class='row'>
 <div class='col-md-8'>
    <div class='thumbnail'>
        <img src='documents/$nom' alt='Fjords'  style='width:60%''>
        
      </a>
    </div>
  </div>
  <div class='col-md-4'><a href='crud_lexique/ajout_question.php?id=$id_i&id_test=$id'><button type='button' class='btn btn-primary btn-lg btn-block'>Ajouter autre question</button></a><br>
  
<button type='button' class='btn btn-danger btn-lg btn-block' onclick='ConfirmDeleteImage()'>supprimer</button>

  </div>

</div>
"; 
?>
 <script type="text/javascript">
      function ConfirmDeleteImage()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_photo.php?id=<?php echo $id_i; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
  <?php
    echo "<div class='row'>"; 
    while($res3=$req3->fetch())
    {
    $id_question=$res3["id"];
    $question=$res3["question"];
    $reponse1=$res3["reponse1"];
    $reponse2=$res3["reponse2"];
    $reponse3=$res3["reponse3"];
    $reponse4=$res3["reponse4"];
   
    $num_question=$res3["num_question"];
   

echo "<div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question.php?id=$id_question&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a>

   
    <button type='button' class='btn btn-danger' onclick='ConfirmDelete()'>supprimer </button>
    
<h2 class='fables-second-text-color font-35 font-weight-bold wow fadeInLeft'>Question  <span class='fables-main-text-color'>$num_question</span></h2> <h5 class='overflow-hidden'>$question</h5>";

?>
 <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question.php?id=<?php echo $id_question; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php
echo "  <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.3s'> 
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse1
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.6s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse2
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='.9s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse3
                       </p>
                   </div>
                   <div class='position-relative mb-3 wow bounceInDown' data-wow-delay='1.2s'>
                       <p class='fables-fifth-text-color fables-dots-text'>
                            <span class='fables-dots-circle fables-second-before fables-second-border-color'></span>
                               $reponse4
                       </p>
                   </div>
               </div>";
   }  
 echo "</div>";
}
?>
  
</div>
</div> 
</div>
</div>

</div></div>

           
<!-- Start Footer 2 Background Image  -->
<div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="https://plus.google.com/u/1/?tab=rX&pageId=none" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="https://www.facebook.com/enetcomje/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/enetcomjunior/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            
            <li><a href="https://twitter.com/ENETCom_JE" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="https://www.linkedin.com/in/junior-enetcom-85129b153/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © ENET'Com Junior Entreprise. All rights reserved.</p> 

</div>
<!-- /End Footer 2 Background Image -->
  

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/custom/js/jquery-data-to.js"></script>  
<script src="assets/custom/js/custom.js"></script> 
<script src="assets/custom/js/index.js"></script> 

</body>
</html>