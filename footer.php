<!--==========================
    Footer
  ============================-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-info">
          <h3>LOREM</h3>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta
            donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet
            volutpat consequat mauris nunc congue.</p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Links</h4>


          
          <?php 
          
          wp_nav_menu( array( 'theme_location' => 'menu_rodape') ); 
          
        
          
          ?>

         
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contato</h4>
          <p>

          </p>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam
            minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Entrar">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Adriano</strong>. All Rights Reserved
    </div>

  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>


</body>

</html>