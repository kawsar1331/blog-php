<?php

      include_once("admin/config/Config.php");
      include_once("admin/classes/Categories.php");
      include_once("admin/classes/Posts.php");


      $cat = new Categories();
      $p1 = new Posts();

?>


<?php include_once("includes/header.php");?>

    <!-- ***** Preloader Start ***** -->
    <?php include_once("includes/preloader.php");?>
    
    <!-- Header -->
    <?php include_once("includes/navbar.php");?>
    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("includes/banner.php");?>
    
    <!-- Call To Action -->
    <?php include_once("includes/cta.php");?>
    
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          
          <!-- All Posts -->
          <?php include_once("includes/all_posts.php");?>

          <!-- Side Bar -->
          <?php include_once("includes/sidebar.php");?>
          
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include_once("includes/footer.php");?>
    
    <!-- Script -->
    <?php include_once("includes/script.php");?>
    
  </body>
</html>