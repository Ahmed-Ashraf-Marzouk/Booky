<?php

include 'config.php';

session_start();
error_reporting(0);

$_smth_wrong = '';
$_email_exist = '';
$_password_error = '';
if (isset($_POST['ssubmit'])) {
    $susername = $_POST['susername'];
    $semail = $_POST['semail'];
    $spassword = md5($_POST['spassword']);
    $scpassword = md5($_POST['scpassword']);

    if ($spassword == $scpassword) {
        $sql = "SELECT * FROM userinfo WHERE email='$semail'";
        $result = mysqli_query($conn, $sql);
        if (!(mysqli_num_rows($result) > 0)) {
            $sql = "INSERT INTO userinfo (username, email, password)
            VALUES ('$susername', '$semail', '$spassword')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo "<script>alert('User registration success')</script>";
                $susername = '';
                $semail = '';
                $_POST['spassword'] = '';
                $_POST['scpassword'] = '';
                header("Location: login.php");
            } else {
                $_smth_wrong = 'Something went wrong';
            }
        } else {
            $_email_exist = 'Email already exists';
        }
    } else {
        $_password_error = 'Password not match';
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booky Home</title>
    <link rel="icon" href="media\Logo\B-removebg-preview.png">

    <script src="https://kit.fontawesome.com/54f44a10c5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/layout.css">

    <link rel="stylesheet" href="css\NavBar CSS\navbar.css">
    <link rel="stylesheet" href="css\NavBar CSS\navbarMenu.css">
    <link rel="stylesheet" href="css\buttons\signup_btn.css">

    <link rel="stylesheet" href="css/banner.css">

    <link rel="stylesheet" href="css/login-area.css">
    <link rel="stylesheet" href="css/text-input.css">

    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/states.css">
    <link rel="stylesheet" href="css/footer.css">



    <!-- <script src="https://unpkg.com/feather-icons"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Varela+Round&display=swap" rel="stylesheet" />

</head>

<body class="max-width-body bg-color">
    <nav id="nav-bar">
        <span class="cell logo">
            <a class="logo" href="index.php">BOOKY</a>
        </span>

        <ul class="row">
            <section class="container">
                <li class="cell active">
                    <a href="index.php">Home</a>
                </li>
                <li class="cell " sectionName="section-members">
                    <a href="index.html">Members</a>
                </li>
                <li class="cell" sectionName="section-books">
                    <a href="">Books</a>
                </li>
                <li class="cell" sectionName="section-bookmarks">
                    <a href="">Bookmarks</a>
                </li>
                <li class="cell" sectionName="section-profile">
                    <a href="">Profile</a>
                </li>
            </section>

            <div class="popover">
                <div class="content">
                    <div class="section section-members">
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Fiction</li>
                                <li>Non-fiction</li>
                                <li>Drama</li>
                                <li>Fiction</li>
                                <li>Adventre</li>
                                <li>Adventre</li>
                                <li>Adventre</li>
                                <li>Adventre</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Topic</li>
                                <li>Science</li>
                                <li>Math</li>
                                <li>Nature</li>
                                <li>Health</li>
                                <li>Business</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Adventre</li>
                                <li>Fiction</li>
                                <li>Non-fiction</li>
                                <li>Drama</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section section-books">
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Adventre</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section section-bookmarks">
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section section-profile">
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Adventre</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Adventre</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                        <div class="column">
                            <ul>
                                <li class="title">By Genre</li>
                                <li>Action</li>
                                <li>Adventre</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                                <li>Fiction</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="background"></div>

                <div class="arrow"></div>
            </div>
        </ul>

        <span class="cell btn">
            <span class="btn-shadow">
                <span class="btn-body">
                    <a class="" href="">Sign Up</a>
                </span>
            </span>
        </span>

    </nav>





    <main>
        <section id="login-area">
            <div class="left">
                <div class="small-title">
                    Sign-up
                </div>


                <form action="" method="POST" id="signup-form">

                    <label for="susername">Username</label>
                    <div class="text-input">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" name="susername" id="susername" value="<?php echo $susername; ?>" placeholder="Username">
                    </div>

                    <label style="margin-top: 0px;" for="semail">Email</label>
                    <div class="text-input">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" name="semail" id="semail" value="<?php echo $semail; ?>" placeholder="Email">
                    </div>

                    <label for="password">Password</label>
                    <div class="text-input">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="spassword" id="password" value="<?php echo $_POST['spassword']; ?>" placeholder="Password">
                        <i id="show-password" class="fa-solid fa-eye show"></i>
                        <i id="hide-password" class="fa-solid fa-eye-low-vision hide"></i>
                    </div>

                    <label for="scpassword">Confirm password</label>
                    <div class="text-input">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="scpassword" id="scpassword" value="<?php echo $_POST['scpassword']; ?>" placeholder="Password">
                        <i id="cshow-password" class="fa-solid fa-eye show"></i>
                        <i id="chide-password" class="fa-solid fa-eye-low-vision hide"></i>
                    </div>

                    <div>
                        <p style="font-size: 1.6rem;">Already have an account? <a href="login.php">login</a></p>
                    </div>
                    <!--                     
                    <a href="index.html" id="lost-password">Did it happen again?</a>
                    <div class="button-with-arrow orange-inset">
                        <button name=ssubmit>Submit</button>
                        <i class="fa-solid fa-angle-right"></i>
                    </div> -->

                    <span class="cell btn">
                        <span class="btn-shadow">
                            <span class="btn-body">
                                <button class="" href="" name="ssubmit">Sign Up</button>
                            </span>
                        </span>
                    </span>

                </form>


                <style>
                    .wrong-input {
                        font-size: 1.6rem;
                        color: red;
                        margin-top: 10%;
                    }
                </style>

                <div><span class="wrong-input"><?php echo $_smth_wrong . $_email_exist . $_password_error; ?></span></div>


                <!-- 
                <a href="index.html" id="lost-password">Did it happen again?</a>
                <div class="button-with-arrow orange-inset">
                    <span>Submit</span>
                    <i class="fa-solid fa-angle-right"></i>
                </div> -->
            </div>
            <div class="right">
                <img src="media\svg\Reading glasses-bro.svg" alt="">
            </div>
        </section>

        <footer>
            <div class="container grid grid--footer">



                <div class="logo-col">
                    <a class="logo" href="">BOOKY</a>
                    <ul class="social-links">
                        <li>
                            <a class="footer-link" href="#">
                                <ion-icon class="social-icon" name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">
                                <ion-icon class="social-icon" name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="#">
                                <ion-icon class="social-icon" name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                    </ul>

                    <p class="copyright">
                        Copyright &copy; <span class="year">2027</span> by Booky
                        All rights reserved.
                    </p>
                </div>

                <div class="address-col">
                    <p class="footer-heading">Contact us</p>
                    <address class="contacts">
                        <p class="address">
                            Faculty Of Engineering @ Ain Shams
                        </p>
                        <p>
                            <a class="footer-link" href="tel:999-999-999">999-999-999</a><br />
                            <a class="footer-link" href="mailto:hello@Booky.com">hello@Booky.com</a>
                        </p>
                    </address>
                </div>

                <nav class="nav-col">
                    <p class="footer-heading">Account</p>
                    <ul class="footer-nav">
                        <li><a class="footer-link" href="#">Create account</a></li>
                        <li><a class="footer-link" href="#">Sign in</a></li>
                        <li><a class="footer-link" href="#">iOS app</a></li>
                        <li><a class="footer-link" href="#">Android app</a></li>
                    </ul>
                </nav>

                <nav class="nav-col">
                    <p class="footer-heading">Company</p>
                    <ul class="footer-nav">
                        <li><a class="footer-link" href="#">About Booky</a></li>
                        <li><a class="footer-link" href="#">For Business</a></li>
                        <li><a class="footer-link" href="#">Careers</a></li>
                    </ul>
                </nav>

                <nav class="nav-col">
                    <p class="footer-heading">Resources</p>
                    <ul class="footer-nav">
                        <li><a class="footer-link" href="#">Help center</a></li>
                        <li><a class="footer-link" href="#">Privacy & terms</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
        </footer>
    </main>


    <script src="js\show-password.js"></script>
    <script src="js\NavBar\nav-hover.js"></script>
    <script src="js\NavBar\navbarMenu.js"></script>
</body>

</html>