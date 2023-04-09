<?php
        $title = "Edit Post";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="manage_posts.php">Manage Posts</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Posts.php");

        $p1 = new Posts();

        $editPost = $p1->edit_post($_GET['cid']);

        $editItem = mysqli_fetch_assoc($editPost);

        if(isset($_POST['update_post'])) {
            $p1->update_post($_POST);
        }

        
?>

<!-- Edit Post -->
<div class="row">
    <div class="col-lg-6 offset-lg-3" >
        <div class="cate_form">
            <form action="" method="POST">
                <div class="form-group mt-2">
                    <input type="hidden" name="post_id" value="<?= $editItem['post_id'];?>" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Title</label>
                    <input type="text" name="post_title" value="<?= $editItem['post_title'];?>" placeholder="Enter Post Title" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Content</label>
                    <textarea name="post_content" rows="5" placeholder="Enter Post Content" class="form-control mt-2" required><?= $editItem['post_content'];?></textarea>
                </div>
                <!-- <div class="form-group mt-2">
                    <label for="Post">Upload Image</label>
                    <input type="file" name="post_img" class="form-control mt-2" required>
                </div> -->
                <div class="form-group mt-2">
                    <label for="Post">Post Summary</label>
                    <textarea name="post_summary" rows="3" placeholder="Enter Post Summary" class="form-control mt-2" required><?= $editItem['post_summary'];?></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Status</label>
                    <select name="post_status" class="form-control mt-2" required>
                        <option value="">--------SELECT--------</option>
                        <option <?php if($editItem['post_status']== 1){ echo "selected";}?> value="1">Published</option>
                        <option <?php if($editItem['post_status']== 0){ echo "selected";}?> value="0">Unpublished</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="update_post" value="Update Post" class="form-control mt-2 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>