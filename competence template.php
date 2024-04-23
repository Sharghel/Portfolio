<!DOCTYPE html>
<html lang="en">
   <?php require_once('include/head.php')?>
   <body id="home_page">
      <!-- header -->
      <?php require_once('include/header.php')?>
      <!-- end header -->
      <!-- section -->
      <section class="main_full banner_section_top">   
         <div class="container-fluid">
            <div class="row">
               <div class="full">
                  <div class="slider_banner">
                     <img class="img-responsive" src="images/slider_img.png" alt="#" />
                     <div class="slide_cont">
                        <div class="slider_cont_inner">
                           <h3 class="display-1">TITRE_DE_LA_COMPETENCE</h3>
                           <p><a style="text-decoration: none; color: white;" href="index.php">Accueil</a><i class="fa fa-angle-double-right pt-1 px-3"></i> Compétence NUMERO_COMPETENCE</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

      <section class="layout_padding section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 text_align_center">
                  <div class="full text_align_center">
                     <img style="width:700px; height: 700px" src="images/competences/cour2.jpg" alt="#" />
                  </div>
               </div>
               <div class="col-lg-4 mt-5 mt-lg-0">
                  <div class="bg-primary mb-5 py-3">
                     <h3 class="text-white py-3 px-4 m-0">Sous-Catégories</h3>
                     
                     <div class="d-flex justify-content-between px-4">
                        <h6 class="text-white my-3">▸Collecter, suivre et orienter des demandes</h6>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
      <!-- section -->
      <section class=" section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-1"></div>
               <div class="col-8">
                  
                  <!-- Travaux NUMERO_TRAVAUX_ECOLE -->
                  <div>
                     <a href="travailX.php" target="_blank" style="display:inline-block; vertical-align:top">
                        <div style="width:77px; height:77px;" class="btn-icon bg-primary mr-4">
                           <i class="fa fa-2x fa-graduation-cap text-white" style="padding:25px 0px 0px 20px"></i>
                        </div>
                     </a>
                     <div class="mt-n1" style="display:inline-block">
                        <h4>Travaux X : NOM_TRAVAUX</h4>
                        <p>
                           SOUS_CATEGORIES_AVEC_BR_A_LA_FIN <br>
                        </p>
                     </div>
                  </div>

                  <!-- Travaux NUMERO_TRAVAUX_ENTERPRISE -->
                  <div>
                     <a href="travailX.php" style="display:inline-block; vertical-align:top">
                        <div style="width:77px; height:77px;" class="btn-icon bg-danger mr-4">
                           <i class="fa fa-2x fa-briefcase text-white" style="padding:24px 0px 0px 24px"></i>
                        </div>
                     </a>
                     <div class="mt-n1" style="display:inline-block">
                        <h4>Travaux X : NOM_TRAVAUX</h4>
                        <p>
                           SOUS_CATEGORIES_AVEC_BR_A_LA_FIN <br>
                        </p>
                     </div>
                  </div>

                  <!-- Project NUMERO_PROJET -->
                  <div>
                     <a href="projectX.php" target="_blank" style="display:inline-block; vertical-align:top">
                        <div style="width:77px; height:77px;" class="btn-icon bg-primary mr-4">
                           <i class="fa fa-2x fa-folder-open text-white" style="padding:25px 0px 0px 24px"></i>
                        </div>
                     </a>
                     <div class="mt-n1" style="display:inline-block">
                        <h4>Projet X : NOM_Projet</h4>
                        <p>
                           SOUS_CATEGORIES_AVEC_BR_A_LA_FIN <br>
                        </p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
  
     
      <?php require_once('include/footer.php')?>
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
