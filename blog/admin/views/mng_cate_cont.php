<?php
        $title = "Manage Categories";
?>


<h1 class="mt-4"><?= $title;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?= $title;?></li>
</ol>

<?php
        include_once("classes/Categories.php");

        $cat = new Categories(); 

        if(isset($_GET['cid'])) {

            $cat->delete_category($_GET['cid']);
        }
?>



<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Categories
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>

                <?php

                        $all_cat = $cat->all_category();

                        $sl = 1;

                        if(mysqli_num_rows($all_cat)>0) {

                            foreach($all_cat as $cat_item) {?>

                            <tr>
                                <td><?= $sl++; ?></td>
                                <td><?= $cat_item['cate_name']; ?></td>
                                <td><?= $cat_item['cate_description']; ?></td>
                                <td>
                                    <img src="../upload/<?= $cat_item['cate_img']; ?>" alt="" width="100px" height="50px">
                                </td>
                                <td>
                                    <a href="?cid=<?= $cat_item['id'];?>" class="btn btn-outline-primary" ><i class="fa-sharp fa-solid fa-trash" style="color: #c4081b;"></i></a>
                                    <a href="edit_category.php?cid=<?= $cat_item['id'];?>" class="btn btn-outline-primary" ><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #2c1ca0;"></i></a>
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