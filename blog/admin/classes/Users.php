<?php
        session_start();
        require("config/Config.php");

        class Users extends Config {

                // User Login
                public function user_login($info) {
                        $email = $info['email'];
                        $password = md5($info['password']);

                        $sql = "SELECT * FROM `tnk_users` WHERE `email`='$email' AND `password`='$password'";

                        $loggedin = $this->con->query($sql);

                        if ($row=mysqli_fetch_assoc($loggedin)) {
                                $_SESSION['admin_email'] = $row['email'];
                                $_SESSION['admin_password'] = $row['password'];
                                header("Location: dashboard.php");
                                
                        } else {
                                $_SESSION['msg']="Invalid email or password!";
                        }
                }

                // User Logout
                public function admin_logout() {
                        session_destroy();
                        header("Location: ../index.php");
                }

                public function user_register($data) {
                        $fname = $data['fname'];
                        $lname = $data['lname'];
                        $name = $fname." ".$lname;
                        $email = $data['email'];
                        $password = md5($data['pass1']);

                        $sql = "INSERT INTO `tnk_users`(`name`, `email`, `password`, `status`) VALUES ('$name','$email','$password','1')";
                        $registered = $this->con->query($sql);
                }
        }
?>