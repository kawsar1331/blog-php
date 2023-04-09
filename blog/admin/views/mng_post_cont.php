<?php
        $title = "Manage Posts";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Posts.php");

        $p1 = new Posts(); 

        if(isset($_GET['cid'])) {

            $p1->delete_post($_GET['cid']);
        }
?>



<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Posts
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Summary</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Summary</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>

                <?php

                        $all_post = $p1->all_post();

                        $sl = 1;

                        if(mysqli_num_rows($all_post)>0) {

                            foreach($all_post as $post_item) {?>

                            <tr>
                                <td><?= $sl++; ?></td>
                                <td><?= $post_item['post_title']; ?></td>
                                <td>
                                    <img src="../upload/<?= $post_item['post_img']; ?>" alt="" width="100px" height="50px">
                                </td>
                                <td><?= $post_item['post_user']; ?></td>
                                <td><?= $post_item['post_date']; ?></td>
                                <td><?= $post_item['post_summary']; ?></td>
                                <td><?php if($post_item['post_status'] == 1) {
                                    echo "Published";
                                } else {
                                    echo "Unpublished";
                                }
                                ?>
                                </td>
                                <td>
                                    <a href="?cid=<?= $post_item['post_id'];?>" class="btn btn-outline-primary" ><i class="fa-sharp fa-solid fa-trash" style="color: #c4081b;"></i></a>
                                    <a href="edit_post.php?cid=<?= $post_item['post_id'];?>" class="btn btn-outline-primary" ><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #2c1ca0;"></i></a>
                                </td>
                            </tr>


                        <?php 

                            }
                        }
                ?>

        
            </tbody>
        </table>
    </div>
</div>