<?php

        class Posts extends Config {
            
            public function add_post ($postData) {
                $post_title = $postData['post_title'];
                $post_content = $postData['post_content'];
                $postImgName = $_FILES['post_img']['name'];
                $postTmpName = $_FILES['post_img']['tmp_name'];
                $post_summary = $postData['post_summary'];
                $post_status = $postData['post_status'];

                $sql = "INSERT INTO `tbl_posts`(`post_title`, `post_content`, `post_img`, `post_user`, `post_date`, `post_summary`, `post_status`) VALUES ('$post_title','$post_content','$postImgName','Admin',now(),'$post_summary','$post_status')";
                $addPost = $this->con->query($sql);

                if($addPost) {
                    move_uploaded_file($postTmpName, "../upload/".$postImgName);
                }


            }

            public function all_post () {
                
                return $this->con->query("SELECT * FROM `tbl_posts`");
            }

            public function delete_post($cid) {

                $post= mysqli_fetch_assoc($this->con->query("SELECT * FROM `tbl_posts` WHERE `post_id` = '$cid'"));
                $postImg = $post['post_img'];
                
                $sql = "DELETE FROM `tbl_posts` WHERE `post_id` = '$cid'";
                $deleted = $this->con->query($sql);
                if($deleted) {
                    unlink("../upload/".$postImg);
                }
                
            }
            
            public function edit_post($cid) {
                return $this->con->query("SELECT * FROM `tbl_posts` WHERE `post_id` = '$cid'");
            }
            

            public function update_post($postData) {
                $post_id = $postData['post_id'];
                $post_title = $postData['post_title'];
                $post_content = $postData['post_content'];
                // $postImgName = $_FILES['post_img']['name'];
                // $postTmpName = $_FILES['post_img']['tmp_name'];
                $post_summary = $postData['post_summary'];
                $post_status = $postData['post_status'];

                $sql = "UPDATE `tbl_posts` SET `post_title`='$post_title',`post_content`='$post_content',`post_date`= now(),`post_summary`='$post_summary',`post_status`='$post_status' WHERE `post_id`='$post_id'";
                $updated = $this->con->query($sql);

            
            }
        }
?>