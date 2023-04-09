<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">

        <?php
                $allPosts = $p1->all_post();

                if(mysqli_num_rows($allPosts)>0) {

                    foreach($allPosts as $postItem) {
        ?>

                    <div class="col-lg-12" id="<?= $postItem['post_title']?>">
                        <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="upload/<?= $postItem['post_img']?>" alt="">
                        </div>
                        <div class="down-content">
                            <span>Lifestyle</span>
                            <a href="#"><h4><?= $postItem['post_title']?></h4></a>
                            <ul class="post-info">
                            <li><a href="#"><?= $postItem['post_user']?></a></li>
                            <li><a href="#"><?= $postItem['post_date']?></a></li>
                            <li><a href="#">12 Comments</a></li>
                            </ul>
                            <p><?= $postItem['post_content']?></p>
                            <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                <ul class="post-tags">
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><a href="#">Beauty</a>,</li>
                                    <li><a href="#">Nature</a></li>
                                </ul>
                                </div>
                                <div class="col-6">
                                <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#"> Twitter</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

        <?php
                    }
                }
        ?>
        

        <div class="col-lg-12">
            <div class="main-button">
            <a href="#">View All Posts</a>
            </div>
        </div>
        </div>
    </div>
    </div>