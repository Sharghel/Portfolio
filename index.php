<!DOCTYPE html>
<html lang="en">
   <?php require_once('include/head.php')?>
   <body id="home_page" class="home_page">
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
                        <h3 class="display-1">Serge Harghel</h3>
                        <p>Mon Portfolio</p>
                     </div>
                  </div>
               </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section -->
    
      <!-- section -->
      <section class="layout_padding section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>Bienvenue sur la présentation de mon portfolio</h2>
                  </div>
                  <div class="full">
                     <!-- <p class="large">
                        Bienvenue sur la présentation de mon portfolio
                     </p> -->
                  </div>
               </div>
               <div class="col-md-12 testimonial">
                  <div class="full cours text_align_center">
                     <img src="images/pfp.png" alt="Visage" style="height: 300px;"/>
                     <h3><span class="theme_color_text">Serge</span> Harghel</h3>
                  </div>
                  <!-- <div class="full margin_top_30 text_align_center">
                    <h4>I have successfully complated</h4>
                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
                  </div> -->
               </div>
            </div>
        </div>
      </section>
      <!-- end section -->

     <!-- about section -->
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>A Propos de moi</h2>
                  </div>
                  <div class="full">
                     <p class="large">
                        Bonjour, je m'appelle Serge Harghel, j'ai 19 ans et je suis actuellement en 2ème année de BTS SIO 
                        (Services Informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métier) 
                        à MyDigitalSchool. En tant qu'apprenti, je travaille également en alternance en tant qu'administrateur de données chez RTE.
                     </p>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full center">
                           <a class="blue_bt" href="images/CV.pdf" target="_blank"> Voir mon CV</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <img src="images/ab_img.png" alt="#" />
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <!-- end about section -->

      <!-- section -->
      <section class="layout_padding section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>Réalisations professionnelles</h2>
                  </div>
                  <div class="full">
                     <p class="large">

                        <!-- Prez ENTREPRISE -->
                        <div>
                           <a href="entreprise.php" target="_blank" style="display:inline-block; vertical-align:top">
                              <div style="width:77px; height:77px;" class="btn-icon bg-danger mr-4">
                                 <i class="fa fa-2x fa-briefcase text-white" style="padding:24px 0px 0px 0px"></i>
                              </div>
                           </a>
                           <div class="mt-n1" style="display:inline-block">
                              <h4>Mon alternance : RtE</h4>
                              <p>
                                 De septembre 2022 à août 2024 j'étais alternant <br>administrateur base de donnée au sein de Rte.
                              </p>
                           </div>
                        </div>

                        <!-- Prez ECOLE -->
                        <div>
                           <a href="btssio.php" target="_blank" style="display:inline-block; vertical-align:top">
                              <div style="width:77px; height:77px;" class="btn-icon bg-primary mr-4">
                                 <i class="fa fa-2x fa-graduation-cap text-white" style="padding:25px 0px 0px 0px"></i>
                              </div>
                           </a>
                           <div class="mt-n1" style="display:inline-block">
                              <h4>Ma formation : BTS SIO option SLAM</h4>
                              <p>
                                 Vous retrouvez une présentation de mon BTS SIO <br> ainsi que mon option SLAM.
                              </p>
                           </div>
                        </div>

                        <!-- Prez VEILLE -->
                        <div>
                           <a href="veille.php" target="_blank" style="display:inline-block; vertical-align:top">
                              <div style="width:77px; height:77px; padding-left:" class="btn-icon bg-warning mr-4">
                                 <i class="fa fa-2x fa-gears text-white" style="padding:25px 0px 0px 0px"></i>
                              </div>
                           </a>
                           <div class="mt-n1" style="display:inline-block">
                              <h4> Implémentation de python dans Excel</h4>
                              <p>
                                 Vous retrouvez mon sujet de veille :<br> L'ajout de python dans Excel.
                              </p>
                           </div>
                        </div>
                     </p>
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
