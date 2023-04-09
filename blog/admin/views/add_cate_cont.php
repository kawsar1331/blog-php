<?php
        $title = "Add Category";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Categories.php");

        $cat = new Categories();

        if(isset($_POST["add_category"])) {
        $cat->add_category($_POST);

        }
?>

<!-- Add Category -->
<div class="row">
    <div class="col-lg-6 offset-lg-3" >
        <div class="cate_form">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="Category">Category Name</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Enter Category Name" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Category">Category Description</label>
                    <textarea id="cat_des" name="cat_des" rows="5" placeholder="Enter Category Description" class="form-control mt-2" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Category">Upload Image</label>
                    <input type="file" name="cat_img" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" name="add_category" value="Add Category" class="form-control mt-2 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>