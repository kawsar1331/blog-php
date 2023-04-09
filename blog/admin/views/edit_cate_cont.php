<?php
        $title = "Edit Category";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="manage_categories.php">Manage Categories</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Categories.php");

        $cat = new Categories();

        $editCate = $cat->edit_category($_GET['cid']);

        $editItem = mysqli_fetch_assoc($editCate);

        if(isset($_POST['update_category'])) {
            $cat->update_category($_POST);
        }

        
?>

<!-- Edit Category -->
<div class="row">
    <div class="col-lg-6 offset-lg-3" >
        <div class="cate_form">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <input type="hidden" id="cat_id" name="cat_id" value="<?= $editItem['id'];?>" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Category">Category Name</label>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Enter Category Name" value="<?= $editItem['cate_name'];?>" class="form-control mt-2" required>
                </div>
                <div class="form-group mt-2">
                    <label for="Category">Category Description</label>
                    <textarea id="cat_des" name="cat_des" rows="5" placeholder="Enter Category Description" class="form-control mt-2" required><?= $editItem['cate_description'];?></textarea>
                </div>
                <!-- <div class="form-group mt-2">
                    <label for="Category">Upload Image</label>
                    <input type="file" name="cat_img" class="form-control mt-2">
                </div> -->
                <div class="form-group mt-2">
                    <input type="submit" name="update_category" value="Update Category" class="form-control mt-2 btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>