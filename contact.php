<!DOCTYPE html>
<html lang="en">
   <?php require_once('include/head.php')?>
   <body id="inner_page">
      <!-- header -->
      <?php require_once('include/header.php')?>
      <!-- end header -->
      
      <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>Contact</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->
    
    <!-- section -->
     <section class="layout_padding section">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-8 offset-md-2">
                           <div class="form_cont">
                               <form action="index.php">
                                  <fieldset>
                                     <div class="field">
                                        <input type="text" name="name" placeholder="Name">
                                     </div>
                                     <div class="field">
                                        <input type="email" name="email" placeholder="Email">
                                     </div>
                                     <div class="field">
                                        <input type="text" name="phone" placeholder="Phone">
                                     </div>
                                     <div class="field">
                                        <textarea placeholder="Message"></textarea>
                                     </div>
                                     <div class="field center">
                                       <button>Send</button>
                                  </div></fieldset>
                               </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
  
      <!-- section -->
      <section class="section blue_pattern_bg" style="background-color: #3b3bff;">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <h4>Subscribe Now to Our Newsletter !</h4>
                     <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br>labore et dolore magna aliqua.</p>
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form_subribe">
                    <form>
                       <input type="email" name="email" placeholder="Enter Your Email" />
                       <button>Subscribe</button>
                    </form>
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
