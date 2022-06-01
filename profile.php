<?php
// Include the database configuration file  
require_once 'config.php';

// $updated_image = '';
session_start();
error_reporting(0);
// If file upload form is submitted 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>


    <link rel="icon" href="media\Logo\B-removebg-preview.png">
    <script src="https://kit.fontawesome.com/54f44a10c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css\NavBar CSS\navbar.css">
    <link rel="stylesheet" href="css\NavBar CSS\navbarMenu.css">
    <link rel="stylesheet" href="css\buttons\signup_btn.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Varela+Round&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/login-area.css">
    <link rel="stylesheet" href="css/text-input.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/states.css">

    <link rel="stylesheet" href="css/css-for-profile-page.css">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> -->

</head>



<body class="body">

    <nav id="nav-bar">
        <span class="cell logo">
            <a class="logo" href="">BOOKY</a>
        </span>

        <ul class="row">
            <section class="container">
                <li class="cell active">
                    <a href="index.php">Home</a>
                </li>
                <li class="cell" sectionName="section-members">
                    <a href="all-members.php">Members</a>
                </li>
                <li class="cell" sectionName="section-books">
                    <a href="all_booksu.php">Books</a>
                </li>
                <li class="cell" sectionName="section-bookmarks">
                    <a href="bookmarks.php">Bookmarks</a>
                </li>
                <li class="cell" sectionName="section-profile">
                    <a href="profile.php">Profile</a>
                </li>


                <li class="cell">
                    <a href="profile.php"><?php if (isset($_SESSION['username']))
                                                $_greeting = 'Hi, ';
                                            echo $_greeting  . $_SESSION['username']; ?></a>
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


        <?php if (!isset($_SESSION['username'])) {
            echo '
            <span class="cell btn">
                <span class="btn-shadow">
                    <span class="btn-body">
                        <a class="" href="Signup.php">Sign up</a>
                    </span>
                </span>
            </span>';
        } else {
            echo '
            <span class="cell btn">
                <span class="btn-shadow">
                    <span class="btn-body">
                        <a class="" href="logout.php">Log out</a>
                    </span>
                </span>
            </span>';
        }
        ?>

    </nav>



    <header>


        <div>
            <?php

            $status = $statusMsg = '';
            if (isset($_POST["submit"])) {
                $status = 'error';
                if (!empty($_FILES["image"]["name"])) {
                    // Get file info 
                    $fileName = basename($_FILES["image"]["name"]);
                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                    // Allow certain file formats 
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                    if (in_array($fileType, $allowTypes)) {
                        $image = $_FILES['image']['tmp_name'];
                        $imgContent = addslashes(file_get_contents($image));
                        $username = $_SESSION['username'];
                        $sql = "UPDATE userinfo SET userpic= '$imgContent' WHERE username = '$username' ";
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0) {
                        } else {
                            $statusMsg = "File upload failed, please try again.";
                        }
                    } else {
                        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                    }
                } else {
                    $statusMsg = 'Please select an image file to upload.';
                }
                $sql = "SELECT * FROM userinfo WHERE username = '$username' ";
                $result = mysqli_query($conn, $sql);
                $img = mysqli_fetch_assoc($result);
                //Render the image
                // header("Content-type: userpic/jpg");
                $_SESSION['updated_image'] = $img['userpic'];
                // echo 'asdsad';
                // echo $updated_image;
                // echo '<img class="user-image" src="data:image/jpg;base64,' . base64_encode($updated_image) . '" />';
            }

            if (!($_SESSION['updated_image'] == '')) {
                echo '<img style= "width: 25%;padding-top:3%; padding-left:10%;" id="user-image" src="data:image/jpg;base64,' . base64_encode($_SESSION['updated_image']) . '" />';
            } else {

                $username = $_SESSION['username'];
                $image = 'G:\Semester8\internet-programming\Project\Booky\media\images\17.jpg';
                $imgContent = addslashes(file_get_contents($image));
                $sql = "UPDATE userinfo SET userpic= '$imgContent' WHERE username = '$username' ";
                $result = mysqli_query($conn, $sql);
                $sql = "SELECT * FROM userinfo WHERE username = '$username' ";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                //Render the image
                // header("Content-type: userpic/jpg");
                $_SESSION['updated_image'] = $row['userpic'];
                echo '<img style=" width: 25%; padding-top:3%; padding-left:10%;" id="user-image" src="data:image/jpg;base64,' . base64_encode($_SESSION['updated_image']) . '" />';
            }

            ?>

            <h1 id="profile-name"><?php echo $_SESSION['username'] ?></h1>
            <p id="profile-info" style="color:black"><?php echo $_SESSION['userdesc'] ?>
            </p>


            <div class="icons-container">

                <form style="margin-bottom:3%; " action="" method="post" enctype="multipart/form-data">
                    <label style="margin-top: 12%;font-size: 1.6rem">Select Image File:</label>
                    <input type="file" name="image">
                    <input style="position:relative; right: 5%;" type="submit" name="submit" value="Upload">
                </form>
                <a id="facebook-icon" target="_blank" href="https:facebook.com">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a id="twitter-icon" target="_blank" href="https:twitter.com">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a id="instagram-icon" target="_blank" href="https:instagram.com">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a id="google-icon" target="_blank" href="https:google.com">
                    <ion-icon name="logo-google"></ion-icon>
                    </ion-icon>
                </a>


            </div>


        </div>


    </header>

    <section class="section-1">

        <h1 id="books-by" style="font-size: 6rem;">Books By <span id="books-by-author-name"><?php echo $_SESSION['username'] ?></span></h1>

        <div class="books-container">

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>

            <figure class="figure-attribute">
                <img class="book-img" src="media/images/a-b-image.jpg" alt="book image">
                <figcaption class="fig-caption">Me at a high speed</figcaption>
                <p class="author"> Hamada Mohammed Khorkhash</p>
                <p class="price">335$</p>
            </figure>





        </div>

    </section>










    <footer class="footer">
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



























    <script src="js\NavBar\nav-hover.js"></script>
    <script src="js\NavBar\navbarMenu.js"></script>




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>