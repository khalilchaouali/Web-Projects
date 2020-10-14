<!DOCTYPE html>
<?php
if (!isset($_SESSION))
session_start();
$id=$_GET["id"];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/test.png">

    <title> Se connecter</title>
    
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
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css"> 
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet"> 
     
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

<!-- /End Fables Navigation -->
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Ajout : Compréhension écrite</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Compréhension écrite</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-8 offset-md-6 col-lg-8 offset-lg-2 text-center">
               <img src="assets/custom/images/masonry4.jpg" alt="signin" class="img-fluid" width="200 px">
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-4 mb-lg-5">Compréhension écrite</p>
               <form method="POST" action="insert_comprehension_ecrite.php" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-3 field-label-responsive">
                    <label for="section">choisir section</label>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group form-control">
                       <div class="input-icon">
                         <select class="form-control" required name="myselect">
                           <option value=A>Section A</option>
                           <option value=B>Section B</option>
                           <option value=C>Section C</option>
                          </select>
                       </div>
                     </div>
                   </div>
                </div>
                       <div id="destinataires"> 
                  <div class="row">
                      <div class="col-md-3 field-label-responsive">
                        <label for="image" >sélectionner une image</label>
                      </div>
                      <div class="col-md-6">
                     <div class="form-group">
                    
                         <input type="file" name="image"  class="form-control-file form-control" required>
                     </div>
                     </div>
                  </div>

                  <div class="row">
                  <div class="col-md-3">
                    <label for="reponse1">numéro de question</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control">
                      <div class="input-icon">
                      <input type="number" class="form-control  "  placeholder="numéro de question" name="num_question[]" required> 
                    </div>
                    </div>
                  </div>
                  
                </div>

                  <div class="row">
                      <div class="col-md-3 field-label-responsive">
                      <label for="question" ><strong>Question 1</strong></label> 
                       </div>
                       <div class="col-md-8">
                       <div class="form-group form-control"> 
                        
                      <div class="input-icon">
                          <input type="hidden" name="id_test" value="<?php echo $id ; ?>">
                          <input type="text" class="form-control  " required placeholder="Question" name="question[]" id="question"> 
                      </div></div>
                    </div>
                  </div>


                <div class="row">
                  <div class="col-md-3">
                    <label for="reponse1">reponse 1</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control">
                      <input type="text" class="form-control  "  placeholder="reponse" name="reponse1[]" required> 
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend"><div class="input-group-text">
                  <input type="radio" name="rep_vrai[]" value="0" required>
                </div></div></div></div>
                </div>
                

                <div class="row">
                  <div class="col-md-3">
                    <label for="reponse1">reponse 2</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control">
                      <input type="text" class="form-control  "  placeholder="reponse" name="reponse2[]" required > 
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend"><div class="input-group-text">
                  <input type="radio" name="rep_vrai[]" value="1" required>
                </div></div></div></div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <label for="reponse1">reponse 3</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control">
                      <input type="text" class="form-control  "  placeholder="reponse" name="reponse3[]" > 
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend"><div class="input-group-text">
                  <input type="radio" name="rep_vrai[]" value="2" required>
                </div></div></div></div>

                </div>

                <div class="row">
                  <div class="col-md-3">
                    <label for="reponse1">reponse 4</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control">
                      <input type="text" class="form-control  "  placeholder="reponse" name="reponse4[]" required> 
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend"><div class="input-group-text">
                  <input type="radio" name="rep_vrai[]" value="3" required>
                </div></div></div></div>

                </div>
              </div>
                      <div class="form-inline btn-block">
          <button id="adduser" class="btn btn-success form-control" type="button"><span class="glyphicon glyphicon-plus"> </span>ajouter autre question</button>
        </div>
<!--
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email" name="username" id="username"> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Mot de passe" name="password" id="password">
                      </div>
                    
                  </div> 
-->


                   <!--  <button class="btn btn-success" type="submit" name="enregistrer">enregistrer</button>-->
                 <button type="submit" class="btn btn-success btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3 form-control" name="enregistrer">enregistrer</button>
                  
                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->
    
    
<!-- Start Footer 2 Background Image  -->

    
<!-- /End Footer 2 Background Image --> 


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
   <script>
    var nb_question=1;
     $(document).ready(function(){
       $('#adduser').click(function(){
           nb_question++;

           
        var e1=$("<div class='row'><div class='col-md-3'><label for='reponse1'>numéro de question</label></div><div class='col-md-6'><div class='form-group form-control'><div class='input-icon'><input type='number' class='form-control'  placeholder='numéro de question' name='num_question[]' required> </div></div></div></div><div class='row'><div class='col-md-3 field-label-responsive'><label for='question' ><strong>Question"+nb_question+"</strong></label></div><div class='col-md-8'><div class='form-group form-control'><div class='input-icon'><input type='text' class='form-control  ' required placeholder='Question' name='question[]' id='question'></div></div></div></div><div class='row'><div class='col-md-3'><label for='reponse1'>reponse 1</label></div><div class='col-md-6'><div class='form-group form-control'><input type='text' class='form-control  '  placeholder='reponse' name='reponse1[]' required></div></div><div class='col-md-1'><div class='input-group mb-3'><div class='input-group-prepend'><div class='input-group-text'><input type='radio' name='rep_vrai[]' value='0' required></div></div></div></div></div><div class='row'><div class='col-md-3'><label for='reponse1'>reponse 2</label></div><div class='col-md-6'><div class='form-group form-control'><input type='text' class='form-control  '  placeholder='reponse' name='reponse2[]' required> </div></div><div class='col-md-1'><div class='input-group mb-3'><div class='input-group-prepend'><div class='input-group-text'><input type='radio' name='rep_vrai[]' value='1' required></div></div></div></div></div><div class='row'><div class='col-md-3'><label for='reponse1'>reponse 3</label></div><div class='col-md-6'><div class='form-group form-control'><input type='text' class='form-control'  placeholder='reponse' name='reponse3[]' ></div></div><div class='col-md-1'><div class='input-group mb-3'><div class='input-group-prepend'><div class='input-group-text'><input type='radio' name='rep_vrai[]' value='2' required></div></div></div></div></div><div class='row'><div class='col-md-3'><label for='reponse1'>reponse 4</label></div><div class='col-md-6'><div class='form-group form-control'><input type='text' class='form-control'  placeholder='reponse' name='reponse4[]' required></div></div><div class='col-md-1'><div class='input-group mb-3'><div class='input-group-prepend'><div class='input-group-text'><input type='radio' name='rep_vrai[]' value='3' required></div></div></div></div></div></div>");
           $("#destinataires").append(e1);




       })

     })

   </script>

    
</body>
</html>




