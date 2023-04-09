<?php

        // require("config/Config.php");

        class Categories extends Config {
            
            public function add_category ($cateData) {
                $cate_name = $cateData['cat_name'];
                $cate_des = $cateData['cat_des'];
                $cateImgName = $_FILES['cat_img']['name'];
                $cateTmpName = $_FILES['cat_img']['tmp_name'];
                $sql = "INSERT INTO `tbl_categories`(`cate_name`, `cate_description`, `cate_img`) VALUES ('$cate_name','$cate_des', '$cateImgName')";
                $addCate = $this->con->query($sql);

                if($addCate) {
                    move_uploaded_file($cateTmpName, "../upload/".$cateImgName);
                    
                }
            }

            public function all_category () {
                
                return $this->con->query("SELECT * FROM `tbl_categories`");
            }

            public function delete_category($cid) {

                $cat= mysqli_fetch_assoc($this->con->query("SELECT * FROM `tbl_categories` WHERE `id` = '$cid'"));
                $catImg = $cat['cate_img'];

                $sql = "DELETE FROM `tbl_categories` WHERE `id` = '$cid'";
                $deleted = $this->con->query($sql);
                if($deleted) {
                    unlink("../upload/".$catImg);
                }

            }

            public function edit_category($cid) {
                return $this->con->query("SELECT * FROM `tbl_categories` WHERE `id` = '$cid'");
            }

            public function update_category($cateData) {
                $cate_id = $cateData['cat_id'];
                $cate_name = $cateData['cat_name'];
                $cate_des = $cateData['cat_des'];
                // $cateImgName = $_FILES['cat_img']['name'];
                // $cateTmpName = $_FILES['cat_img']['tmp_name'];
                $sql = "UPDATE `tbl_categories` SET `cate_name`='$cate_name',`cate_description`='$cate_des' WHERE `id`='$cate_id'";
                $updated = $this->con->query($sql);
                // $sql = "UPDATE `tbl_categories` SET `cate_name`='$cate_name',`cate_description`='$cate_des', `cate_img`='$cateImgName' WHERE `id`='$cate_id'";
                // $updated = $this->con->query($sql);

                // if($updated) {
                //     move_uploaded_file($cateTmpName, "../upload/".$cateImgName);
                // }
            }
        }
?>