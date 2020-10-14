<?php 
$id=$_GET["id"];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Accueil">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title>Expression écrite</title>
    
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


<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>

<!-- Start Top Header -->

 
<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
         
                           <a class="navbar-brand pl-0" href="accueil.php?id_test=<?php echo $id;  ?>"><img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                             <a href="#">  <h1 id="comp_ecrite"><center>Expression écrite </center></h1></a>

                    </div>
                </nav>
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
            <li class="breadcrumb-item"><a href="accueil.php" class="fables-second-text-color">Accueil</a></li>
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
</select>
   </div>


<div class="container">
    <div id="A" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$sql1="select * from expression where section='A' and id_test=$id";
$req1=$conx->query($sql1);
//$array=array();
 echo "<div class='row'>";
while ($res1=$req1->fetch())
{   $id_qst=$res1["id_qst"];
    $question=$res1["question"];
$section=$res1["section"];
echo " <div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question_expression.php?id=$id_qst&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a><button type='button' class='btn btn-danger' onclick='ConfirmDelete()'>supprimer </button> <div class='col-100 col-lg-6 mt-3 mt-lg-0 overflow-hidden'> <h5 class='overflow-hidden'>$question</h5></div></div>";
    ?>
 <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question_expression.php?id=<?php echo $id_qst; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php


}echo "</div>";

     ?>



</div>


  <div id="B" class="aaa">
  <?php   

$conx=new PDO("mysql:host=localhost;dbname=junior1","root","");
$sql1="select * from expression where section='B' and id_test=$id";
$req1=$conx->query($sql1);
//$array=array();
 echo "<div class='row'>";
while ($res1=$req1->fetch())
{   $id_qst=$res1["id_qst"];
    $question=$res1["question"];
$section=$res1["section"];
echo " <div class='col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden'>
<a href='crud_lexique/modifier_question_expression.php?id=$id_qst&id_test=$id'><button type='button' class='btn btn-primary'>modifier </button> </a><button type='button' class='btn btn-danger' onclick='ConfirmDelete()'>supprimer </button> <div class='col-100 col-lg-100 mt-100 mt-lg-0 overflow-hidden'> <h5 class='overflow-hidden'>$question</h5></div></div>";
    ?>
 <script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Voulez-vous supprimer ?"))
            {
                location.href='crud_lexique/supprimer_question_expression.php?id=<?php echo $id_qst; ?>&id_test=<?php echo $id; ?>';
                 setTimeout(function() {alert('Le question à été supprimé')}, 2000);
            }
     
    }
  </script>
<?php


}echo "</div>";

     ?>



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