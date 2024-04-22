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
                           <h3 class="display-1"style="">TITRE_DE_LA_COMPETENCE</h3>
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
  
     
      <!-- footer -->
      <!-- <footer class="footer layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-12">
                  <a href="index.php"><img class="img-responsive" src="images/logo_footer.png" alt="#" /></a>
                  <div class="footer_link_heading">
                     <div class="footer_menu margin_top_30">
                     <ul>
                        <li><a href="tel:9876543210">9876 543 210</a></li>
                        <li><a href="#">demo@gmail.com</a></li>
                        <li><a href="#">40 Baria Sreet 133/2 NewYork City, US</a></li>
                     </ul>
                  </div>
                  </div>
               </div>
               
               <div class="col-md-8">
                 <div class="row">
                    <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>FEATURED COURSES</h3>
                  </div>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="#">Starting Soon</a></li>
                        <li><a href="#">Just Added</a></li>
                        <li><a href="#">Most Viewed</a></li>
                        <li><a href="#">Til Paid</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>CATEGORIES</h3>
                  </div>
                  <div class="footer_menu">
                    <ul>
                       <li><a href="#">Arts & Design</a></li>
                       <li><a href="#">Business</a></li>
                       <li><a href="#">Computer</a></li>
                       <li><a href="#">Data entery</a></li>
                    </ul>
                  </div>
               </div>
               
               <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>USEFUL LINKS</h3>
                  </div>
                  <div class="footer_menu">
                    <ul>
                       <li><a href="#">FAQs</a></li>
                       <li><a href="#">Success Stories</a></li>
                       <li><a href="#">Shop</a></li>
                       <li><a href="#">Privacy policy</a></li>
                       <li><a href="#">Contact search</a></li>
                       <li><a href="#">Jobs and vacancies</a></li>
                    </ul>
                  </div>
               </div>
                 </div>
               </div>
               
            </div>
         </div>
      </footer>
      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p>Copyright 2019. All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
             </div>
           </div>
        </div>
      </div> -->
      <!-- end footer -->
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
