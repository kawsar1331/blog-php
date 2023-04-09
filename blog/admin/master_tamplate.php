<?php

        include_once("classes/Users.php");

        $user = new Users();

        $email = $_SESSION['admin_email'];
        $password = $_SESSION['admin_password'];

        if($email == null) {
            header("Location: index.php");
        }

        if(isset($_GET['admin_logout'])) {
            $user->admin_logout();
        }

        
?>

            <!-- Header -->
    <?php include_once("includes/header.php") ?>


            <!-- Navbar Top -->
    <?php include_once("includes/nav_top.php") ?>
    
    
    <div id="layoutSidenav">

                    <!-- Navbar Side -->
            <?php include_once("includes/nav_side.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <?php 
                                if(isset($view)) {
                                    if ($view == 'dashboard') {
                                        require("views/dashboard_cont.php");
                                    } else if ($view == "add_category") {
                                        require("views/add_cate_cont.php");
                                    } else if ($view == "edit_category") {
                                        require("views/edit_cate_cont.php");
                                    } else if ($view == "manage_category") {
                                        require("views/mng_cate_cont.php");
                                    } else if ($view == "add_post") {
                                        require("views/add_post_cont.php");
                                    } else if ($view == "edit_post") {
                                        require("views/edit_post_cont.php");
                                    } else if ($view == "manage_post") {
                                        require("views/mng_post_cont.php");
                                    } else {
                                        echo "Error";
                                    }
                                }
                        ?>
                    </div>
                </main>

                            <!-- Footer -->
                <?php include_once("includes/footer.php") ?>
                
            </div>
        </div>
            <!-- script -->
            <?php include_once("includes/script.php") ?>
    </body>
</html>