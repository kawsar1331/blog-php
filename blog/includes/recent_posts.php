<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
    <div class="sidebar-heading">
        <h2>Recent Posts</h2>
    </div>
    <div class="content">
        <ul>

            <?php
                    $allPosts = $p1->all_post();

                    if(mysqli_num_rows($allPosts)>0) {

                        foreach($allPosts as $postItem) {
            ?>

            <li>
                <a href="#<?= $postItem['post_title']?>">
                    <h5><?= $postItem['post_title']?></h5>
                    <span><?= $postItem['post_date']?></span>
                </a>
            </li>

            <?php
                    }
                }
            ?>
    
        </ul>
    </div>
    </div>
</div>