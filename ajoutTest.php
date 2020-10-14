<!DOCTYPE html>
<?php
session_start();
if($_SESSION['login_admin'] == true)
{
  
}
else
{
  header("location:signin.php");
}
?>
<html lang="en">
<head>
    <style>
html {
  scroll-behavior: smooth;
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/test.png">

    <title> Administrateur </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
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
    <!-- Video Background -->
    <link href="assets/vendor/video-background/video-background.css" rel="stylesheet"> 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="bouton.css">
    
    
     
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
<div class="fables-forth-background-color fables-top-header-signin">

 
<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container" >
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2" >
         
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav mx-auto fables-nav">   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#Accueil" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Accueil 
                                        </a>
                                        
                                    </li>
                                </ul>

                                 <ul class="navbar-nav mx-auto fables-nav">   
                                    
                                        <a class="nav-link" href="#Type" style="scroll-behavior: smooth;">
                                            Les parties du test
                                        </a>
                                       
                                </ul>

                                  <ul class="navbar-nav mx-auto fables-nav">   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#propos" style="scroll-behavior: smooth;">
                                           à propos 
                                        </a>
                                        
                                    </li>
                                </ul>

                                <ul class="navbar-nav mx-auto fables-nav">   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#contact" style="scroll-behavior: smooth;">
                                           Contact 
                                        </a>
                                        
                                    </li>
                                </ul>

                                    
                    </div>
                </nav>
                   </div>
                   <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">
                       
                    <div class="fables-header-icons">
                        <div class="dropdown"> 
                                  
 
                         </div>
                         <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                         <a href="signin.php" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span class="fables-iconuser"></span></a>
                         
                         
                         
                    </div>
                   </div>
               </div>
    </div>
</div> 
<!-- /End Fables Navigation -->  

<!-- Start Header -->
<div class="fables-header bg-white index-3-height bg-rules overflow-hidden">
    <div class="container position-relative z-index">   
         <div class="row">
             <div class="col-12 col-lg-7 offset-lg-4 wow fadeInUpBig" data-wow-duration="2s">
                  <div class="index-3-height-caption">
                  
                  <h1 class="fables-main-text-color bold-font mb-2 font-40">Tests d'évaluation de niveau
                </h1>
                <p class="font-30 fables-second-text-color" style="color: #4A56A5">Vous êtes la Bienvenue!</p>  
                  <p class="fables-forth-text-color font-22 mb-3">
                      Ce site vous offre l'opportunité de découvrir votre vrai niveau!
                  </p>
                   
              </div> 
             </div>
         </div> 
    </div>
</div>  
<!-- /End Header -->

<!-- Start Service -->
<div class="container-fluid my-0 my-lg-5" id="Type">
          <div class="row" >
              <div class="col-12 col-lg-2 p-0">
                   <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color fables-sqr-rotation-services">
                      <div class="text-rotate">
                           <h2 class="text-white font-25"><br><span class="white-color font-40 bold-font mt-2 d-block"> bla bla du test</span></h2>
                      </div>
                   </div>
              </div>
              <div class="col-12 col-lg-10 p-0">
                  <div class="fables-index-services fables-after-overlay py-md-5 px-3 pr-md-4 pl-md-5 bg-rules sm-index-products mt-lg-0 mt-xl-5">
                       <div class="container z-index position-relative">  
                           <div class="row">
                               <div class="col-12 col-lg-10 offset-lg-2">  
                                    <div class="row">
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".4s"> 
                                            <div class="row text-center text-md-left">





									<!--formulaire d'ajout du test -->
                                                
                                                <form action="accueil.php" method="POST" style="color:#007bff;">
													<table> 
														<tr>
															<td><font>  Nom du test:</font>  </td> <td><input type="text" name="nom" required=""> </td>
										
														</tr> 
														<tr><td> Temps_compréhension écrite:</td> <td><input type="number" name="tce" required=""> </td>
														</tr>
														<tr>
														<td>Temps_compréhension orale:</td> <td><input type="number" name="tco" required=""></td>
														</tr>
														<tr>
														<td>Temps_lexique:</td> <td><input type="number" min="0" name="tl" required="" style="color:#007bff;"></td> </tr>
														<tr>
															<td>Temps_expression écrite:</td> <td><input type="number" name="tec" required=""></td>
														</tr>
														
														<tr > <td><button type="submit" class="btn btn-bleu btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3 form-control" name="valider" value="valider">enregistrer</button></td></tr>
                            </div>
													</table> 
												</form> 







                                                
                                               
                                            </div> 
                                        </div>
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".8s"> 
                                            <div class="row text-center text-md-left">
                                                
                                               
                                            </div>
                                        </div>
                                        
                                        
                                    </div> 
                               </div>
                           </div>
                       </div>
                  </div> 
              </div>
          </div>
          <br/><br/>
          <div class="row" >
              <div class="col-12 col-lg-2 p-0">
                   <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color fables-sqr-rotation-services">
                      <div class="text-rotate">
                           <h2 class="text-white font-25"><br><span class="white-color font-40 bold-font mt-2 d-block"> Les parties du test</span></h2>
                          
                      </div>
                   </div>
              </div>
              <div class="col-12 col-lg-10 p-0">
                  <div class="fables-index-services fables-after-overlay py-md-5 px-3 pr-md-4 pl-md-5 bg-rules sm-index-products mt-lg-0 mt-xl-5">
                       <div class="container z-index position-relative">  
                           <div class="row">
                               <div class="col-12 col-lg-10 offset-lg-2">  
                                    <div class="row">
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".4s"> 
                                            <div class="row text-center text-md-left">
                                                <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0"> 
                                                    <i class="far fa-clipboard fables-second-text-color font-40"" style="font-size:48px;"></i>
                                                </div>
                                                <div class="col-12 col-md-9 pl-md-0">
                                                    <h2 class="text-white font-19 semi-font mb-2">Compréhension écrite</h2>
                                                    

                                                </div>
                                                <div class="btn-arrow-hvr-white1">
                                         <a href="liste_comprehension_ecrite.php">afficher</a> <a href="comprehension_ecrite.php">inserer</a>
                                            </div>
                                            </div> 
                                        </div>
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".8s"> 
                                            <div class="row text-center text-md-left">
                                                <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                    <i class="far fa-edit fables-second-text-color font-40"" style="font-size:48px;"></i>
                                                </div>
                                                <div class="col-12 col-md-9 pl-md-0">
                                                   <h2 class="text-white font-19 semi-font mb-2">Lexique/structure</h2>
                                                   
                                                </div>
                                                 <div class="btn-arrow-hvr-white1">
                                         <a href="liste_lexique_structure.php">afficher</a> <a href="lexique_structure.php">inserer</a>
                                            </div>
                                            </div> 
                                        </div>
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.2s"> 
                                            <div class="row text-center text-md-left">
                                                <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                    <i class="fas fa-volume-up fables-second-text-color font-40"" style="font-size:48px;"></i>
                                                </div>
                                                <div class="col-12 col-md-9 pl-md-0">
                                                   <h2 class="text-white font-19 semi-font mb-2">Compréhension orale</h2>
                                                    
                                                    </div>
                                                    <div class="btn-arrow-hvr-white1">
                                         <a href="liste_comprehension_orale.php">afficher</a> <a href="comprehension_orale.php">inserer</a>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.6s"> 
                                            <div class="row text-center text-md-left">
                                                <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                    <i class="fas fa-marker fables-second-text-color font-40"" style="font-size:48px;"></i>
                                                </div>
                                                <div class="col-12 col-md-9 pl-md-0">
                                                    <h2 class="text-white font-19 semi-font mb-2">Expression écrite</h2>
                                                    

                                                </div>
                                                 <div class="btn-arrow-hvr-white1">
                                         <a href="liste_expression_ecrite.php">afficher</a> <a href="Expression_ecrite.php">inserer</a>
                                                </div>
                                               
                                            </div> 
                                        </div> 
                                    </div> 
                               </div>
                           </div>
                       </div>
                  </div> 
              </div>
          </div>

      </div>
<!-- End Service -->

<!-- Start why choose us --> 

<!-- End why choose us -->

<!-- Start Testimonials -->

<!-- End   Testimonials -->

<!-- Start Table Pricing --> 
 
<!-- End Table Pricing -->

<!-- Start Overlay Caption -->

<!-- Start Overlay Caption -->

<!-- Start Team -->

<!-- End Team -->

<!-- Start Products Slider -->
<div class="container-fluid my-4 my-md-5" id="propos">
          <div class="row">
              <div class="col-12 col-lg-2 p-0">
                   <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color">
                      <div class="text-rotate">
                           <h2 class="text-white font-25"> <br><span class="white-color font-40 bold-font mt-2 d-block">À propos</span></h2>
                           <p class="fables-third-text-color mt-4 mb-3 mb-lg-5">
                                      
                           </p>
                      </div>
                   </div>
              </div>
              <div class="col-12 col-lg-10 p-0">
                  <div class="fables-index-products fables-after-overlay py-3 py-lg-5 pr-md-4 pl-md-5 bg-rules sm-index-products">
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                      hhhhhhhhhhhhhhhhhhhhhhhh <br>
                  </div> 
              </div>
          </div>
      </div>
<!-- End Products Slider -->
 <div class="fables-testimonial fables-after-overlay py-4 py-lg-5 testimonial-index-bg mt-4 mt-lg-5 bg-rules" id="contact">
           <div class="container">
                <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-2">Contact</h2> 
                <p class="font-14 fables-third-text-color text-center z-index position-relative mt-2"></p> 
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        
                         <div class="owl-carousel owl-theme dots-0 mt-4 center-testimonial-carousel padding-outer" id="fables-testimonial-carousel">
                              
                              <div class="text-center fables-testimonial-carousel-item"> 
                                   <div>
                                      <img src="assets/custom/images/2.png" alt="Fables Template" class="fables-testimonial-carousel-img rounded-circle">   
                                   </div>
                                   <div> 
                                        <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                            Adnène ELLOUZ <br>
											

Professeur de français et des techniques de communication<br>
Formateur de formateurs en softskills: ECo-C SKEN auprès de l'AUF <br>
Formateur DELF/DALF auprès de l'IFT <br>
Chef du projet DELF/DALF et Responsable de formation au Centre 4C de l'Ecole Nationale d'Electronique et des Télécommunications de Sfax <br>
Membre du laboratoire LLTA.<br>
<br>
Tel : +216 23 32 42 50 <br>
Facebook: https://www.facebook.com/adnene.ellouz <br>

Groupe Facebook: ENETCOM.FR <br>
Adresse: ENET’Com, route de Tunis Km 11, Technopole Cité Elons, Sfax- Tunisie <br>
Site internet: www.enetcom.rnu.tn<br>
                                        </p>
                                        <h3 class="font-14 semi-font text-white"></h3>
                                        <h3 class="font-13 font-italic white-color mt-2"></h3>

                                   </div>
                               </div> 
                        </div>
                    </div> 
                </div>
            </div>
    </div>
<!-- Start Latest Blog --> 

<!-- End   Latest Blog -->
  
<!-- Start Parteners Slider --> 

<!-- End   Parteners Slider -->
   
<!-- Start Footer 2 Background Image  -->

    
<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="assets/vendor/video-background/jquery.mb.YTPlayer.js"></script>
<script src="assets/custom/js/custom.js"></script>  
 
    
</body>
</html>