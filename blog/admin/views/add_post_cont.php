<?php
        $title = "Add Post";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Posts.php");

        $p1 = new Posts();

        if(isset($_POST["add_post"])) {
        $p1->add_post($_POST);

        }
?>

<!-- Add Post -->
<div class="row">
    <div class="col-lg-6 offset-lg-3" >
        <div class="cate_form">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="Post">Post Title</label>
                    <input type="text" name="post_title" placeholder="Enter Post Title" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Content</label>
                    <textarea name="post_content" rows="5" placeholder="Enter Post Content" class="form-control mt-2" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Upload Image</label>
                    <input type="file" name="post_img" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Summary</label>
                    <textarea name="post_summary" rows="3" placeholder="Enter Post Summary" class="form-control mt-2" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Post">Post Status</label>
                    <select name="post_status" class="form-control mt-2" required>
                        <option value="">--------SELECT--------</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="add_post" value="Add Post" class="form-control mt-2 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>