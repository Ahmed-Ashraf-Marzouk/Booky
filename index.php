<?php

include 'config.php';

session_start();
error_reporting(0);


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
                echo "<script>alert('User registration success')</script>";
                $susername = '';
                $semail = '';
                $_POST['spassword'] = '';
                $_POST['scpassword'] = '';
                // header("Location: login.php");
            } else {
                echo "<script>alert('Something went wrong')</script>";
            }
        } else {
            echo "<script>alert('Email already exists')</script>";
        }
    } else {
        echo "<script>alert('password not match')</script>";
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
</head>

<body class="max-width-body bg-color">
    <nav id="nav-bar">
        <span class="cell logo">
            <a class="logo" href="">BOOKY</a>
        </span>

        <ul class="row">
            <section class="container">
                <li class="cell active">
                    <a href="">Home</a>
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



    <section id="banner">
        <!-- <div> -->
        <div class="text title">Book A Book</div>
        <div class="text subtitle">Make a deal.</div>
        <img src="media\svg\_path_.svg" alt="handshake image">
        <img id="animated-handshake" src="media\svg\handshake.svg" alt="handshake image">
        <!-- </div> -->
    </section>



    <main>
        <section id="login-area">
            <div class="left">
                <div class="small-title">
                    Login-in
                </div>


                <form action="" method="POST" id="signup-form">

                    <label for="susername">Username</label>
                    <div class="text-input">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" name="susername" id="susername" value="<?php echo $susername; ?>" placeholder="Username">
                    </div>

                    <label style="margin-top: 0px;" for="semail">email</label>
                    <div class="text-input">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" name="semail" id="semail" value="<?php echo $semail; ?>" placeholder="Username">
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
                        <!-- <i class="fa-solid fa-key"></i> -->
                        <input type="password" name="scpassword" id="scpassword" value="<?php echo $_POST['scpassword']; ?>" placeholder="Password">
                        <i id="cshow-password" class="fa-solid fa-eye show"></i>
                        <i id="chide-password" class="fa-solid fa-eye-low-vision hide"></i>
                    </div>

                    <div>
                        <p style="font-size: 1.6rem;">Already have an account? <a href="login.php">login</a></p>
                    </div>

                    <a href="index.html" id="lost-password">Did it happen again?</a>
                    <div class="button-with-arrow orange-inset">
                        <button name=ssubmit>sSubmit</button>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </form>

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
        </footer>
    </main>


    <script src="js\show-password.js"></script>
    <script src="js\NavBar\nav-hover.js"></script>
    <script src="js\NavBar\navbarMenu.js"></script>
</body>

</html>