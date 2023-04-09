<div class="main-banner header-text">
    <div class="container-fluid">
    <div class="owl-banner owl-carousel">

        <?php
                // include_once()
                // $allcats = $p1->all_category();

                if(mysqli_num_rows($cate)>0) {

                    foreach($cate as $catItem) {
        ?>

        <div class="item">
        <img src="upload/<?= $catItem['cate_img']?>" alt="">
        <div class="item-content">
            <div class="main-content">
            <div class="meta-category">
                <span><?= $catItem['cate_name']?></span>
            </div>
            <!-- <a href="#"><h4><?= $catItem['cate_description']?></h4></a> -->
            <ul class="post-info">
                <li><a href="#">Admin</a></li>
                <li><a href="#">May 12, 2020</a></li>
                <li><a href="#">12 Comments</a></li>
            </ul>
            </div>
        </div>
        </div>
        
        <?php
                    }
                }
        ?>

    </div>
    </div>
</div>