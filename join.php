<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <?php
        require('data.php');
    ?>
</head>

<body>
    <?php
    session_start();
    if(isset($_POST['register'])){
        extract($_POST);
        if($cin==null || $name1==null || $name2==null || $adresse==null || $phone==null && $city==null || $picture==null || $email==null || $password==null){
            $message= "<p id='msg'>Please check and filling all the fields above *</p>";   
        }
        else{
            $table=$pdo->query("SELECT * FROM student WHERE cinE='".$cin."' OR emailE='".$email."'");
            $smith=$table->rowCount();
            if($smith==0){
                    $pdo->query("INSERT INTO student VALUES('$cin','$name1','$name2','$adresse','$phone','$city','$picture','$email','$password')");
                    $message="<p id='msgSuccess'>Your information accepted width succefuly </p>";
            }
            else{
                $rows=$table->fetch(PDO::FETCH_ASSOC);
                if($rows['cinE']==$cin && $rows['emailE']!=$email){
                    $message="<p id='msg'> This code cin already existe !</p>";
                }elseif($rows['cinE']!=$cin && $rows['emailE']==$email){
                    $message="<p id='msg'> This email already existe !</p>";
                }else{
                    $message="<p id='msg'> This email and code cin already existe !</p>";
                }
            }
            $_SESSION['msg']=$message;
        }
    }
    ?>
    <form action="#" method='POST'>
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="courses.php" class="nav-item nav-link" id="lg">Login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Sign up</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Sign Up</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- login Start -->
    <center>
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Sign Us</h6>
                <h1 class="mb-5">Join us by Filling all these Camps</h1>                
            </div>
        </div>
        <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your First Name" name="name1">
                            <label for="name">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="email" placeholder="Your Lst Name" name="name2">
                            <label for="email">Last Name</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Your Adresse"name="adresse">
                            <label for="subject">Adresse</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input class="form-control" placeholder="Your Number Phone" id="message" name="phone"></input>
                            <label for="message">Number Phone</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control" id="name" placeholder="Your city" name="city">
                                <option value="rabat">Rabat (the capital city)</option>
                                <option value="dakhla">Dakhla</option>
                                <option value="Lgiuira">Lgiuira</option>
                                <option value="Benimlal">Benimlal</option>
                                <option value="Oujda">Oujda</option>
                                <option value="Casa Blanca">Casa Blanca</option>
                                <option value="Tanger">Tanger</option>
                                <option value="Ouarzazt">Ouarzazt</option>
                                <option value="Titouane">Titouane</option>
                                <option value="Kenitra">Kenitra</option>
                                <option value="Essaouira">Essaouira</option>
                                <option value="Meknes">Meknes</option>
                                <option value="Fes">Fes</option>
                                <option value="Agadir">Agadir</option>
                                <option value="Safi">Safi</option>
                            </select>
                            <label for="name">City</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="email" placeholder="Your cin" name="cin">
                            <label for="email">Code CIN</label>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="file" lang="en" class="form-control" placeholder="Your Picture" id="message" name="picture"></input> 
                        <label for="message" lang="en"s>Your Picture</label>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="subject" placeholder="Your email" name="email">
                            <label for="subject">Email</label>
                        </div>
                    </div>      <div class="col-12">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="subject" placeholder="your password" name="password">
                            <label for="subject">Password</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit" name="register">Register</button>
                    </div>
                </div>
                <p >
                    <?php
                    if(isset($message)){
                        echo $message;
                    }
                    ?>
                </p>
            </form>
        </div>
    </div>
    </center>
    <!-- login end -->
    
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
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212708435584</p>
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
    <style>
        #msg{
            margin-top: 25px;
            color: red;
            font-size: 18px;
            background: rgba(255, 162, 162, 0.345);
            padding: 9px;
            justify-content: center;
        }
        #msgSuccess{
            color: green;
            font-size: 18px;
            background-color: rgba(121, 247, 138, 0.201);
            padding: 9px;
            display: flex;
            justify-content: center;
        }
    </style>
    
</body>

</html>