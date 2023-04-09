<header class="">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php"><h2>Tonk<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
            </a>
            </li> 
            
            <?php
                    $cate = $cat->all_category();
                    $ms = 1;

                    if(mysqli_num_rows($cate)>0) {
                        foreach($cate as $cateItem) {
                            if($ms<4) {
            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= $cateItem['cate_name']?></a>
                    </li> 
            <?php
                            }
                        $ms++;
                        }
                    }
            ?>

            <li class="nav-item main-button">
            <a class="nav-link text-dark px-3" href="admin/index.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>