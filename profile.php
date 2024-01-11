<?php

    require('data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        session_start();
        $FandL=$_SESSION['user'];
        $eml=$_SESSION['email'];
        $profile=$_SESSION['typeIMG'];
    ?>


    <form action="#" method="POST">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>BookHaven</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="student.php" class="nav-item nav-link active"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
                    <a href="index.php" class="nav-item nav-link"><i class="fa-solid fa-comments"></i>&nbsp;Opinions</a>
                    <a href="about.php" class="nav-item nav-link"><i class="fa-solid fa-bookmark"></i>&nbsp;Borrow</a>
                    <!-- zzzzz -->
                    <div class="action">
                        <div class="profile" onclick="menuToggle();">
                            <img src="img/<?=$profile?>"/>
                        </div>
                        <div class="menu">
                            <h3><?=$FandL?><br /><span><?=$eml?></span></h3>
                            <ul>
                            <li>
                                <i class="fa-solid fa-user" id="profile"></i>&nbsp;&nbsp;<a href="profile.php">My profile</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-user-pen" id="edit"></i>&nbsp;&nbsp;<a href="edit.php">Edit profile</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-gear" id="setting"></i>&nbsp;&nbsp;<a href="#">Setting</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-info" id='help'></i>&nbsp;&nbsp;<a href="#">Help</a>
                            </li>
                            <li type="submit" name='out'>
                                <i class="fa-solid fa-right-from-bracket" id='out'></i>&nbsp;&nbsp;<a href="out.php">Log Out</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- zzzzz -->
                </div>           
            </div>
        </nav>
        

        <!-- table Start -->
        <center>
        <?php 
            $table=$pdo->query("SELECT * FROM student WHERE emailE = '".$eml."'");
            while($rows=$table->fetch(PDO::FETCH_ASSOC)){
                    echo'
                    <center> <div class="container-xxl py-5 category">
                    <div class="container">
                    <h1 class="titre"> My Profile </h1>
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th scope="col" class="col-8">1</th>
                                <th class="text-center" style="padding: 20px;">Code CIN</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['cinE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">2</th>
                                <th class="text-center" style="padding: 20px;">Fist Name</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['phoneE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">3</th>
                                <th class="text-center" style="padding: 20px;">Last Name</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['fnameE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">4</th>
                                <th class="text-center" style="padding: 20px;">Adresse</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['lnameE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">5</th>
                                <th class="text-center" style="padding: 20px;">Number Phone</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['phoneE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">6</th>
                                <th class="text-center" style="padding: 20px;">City</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['cityE'].'</td>
                            </tr>
                            <tr>
                                <th scope="row" class="col-8">7</th>
                                <th class="text-center" style="padding: 20px;">Image</th>
                                <td class="text-center" style="padding: 20px;"><img src=img/'.$rows['imgE'].' alt="profile"></td>
                            </tr>      
                            <tr>
                                <th scope="row" class="col-8">8</th>
                                <th class="text-center" style="padding: 20px;">Email</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['emailE'].'</td>
                            </tr>      
                            <tr>
                                <th scope="row" class="col-8">9</th>
                                <th class="text-center" style="padding: 20px;">Password</th>
                                <td class="text-center" style="padding: 20px;">'.$rows['pwE'].'</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    </div></center>';
                }
        ?>
        </center>
        <!-- table end -->
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Quick Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">FAQs & Help</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>672 Street, Agadir, MAROC</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+26708435584</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>oubouisk@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Gallery</h4>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Newsletter</h4>
                        <p>A newsletter is a regularly distributed publication that provides updates, news, and information on a specific topic or from a particular organization.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">web site bookhaven</a>, copy right by MOHAMMED OUBOUISK.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function menuToggle() {
          const toggleMenu = document.querySelector(".menu");
          toggleMenu.classList.toggle("active");
        }
      </script>
      <style>
        #profile{
            font-size: 23px;
            color: #06BBCC;
        }
        .menu ul li{
            cursor: pointer;
        }
        #help{
            font-size: 23px;
            color: #336699;
        }
        #setting{
            font-size: 23px;
            color: #333333;
        }
        #out{
            color: #FF0000;
            font-size: 23px;
        }
        #edit{
            color: #0066CC;
            font-size: 23px;
        }
        .titre{
            box-shadow: 3px 3px rgba(177, 166, 166, 0.511), -0.5px 0 0.4em rgb(180, 240, 250);
            color: #06BBCC;
            font-size: 25px;
            padding: 5px;
        }
      </style>
</body>

</html>