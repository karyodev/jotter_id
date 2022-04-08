<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Box Icon CSS-->
    <link rel="stylesheet" href="assets/css/boxicon.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    @yield('title')

    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Pre-loader Start -->
    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-circle">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader End -->

    <!-- Navbar Area Start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav bg-dark">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="/">
                        Jotter.id
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto ">
                            <li class="nav-item">
                                <a href="/" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link active text-white">About</a>
                            </li>
                            <li class="nav-item ">
                                <a href="https://huustle.id/" target="_blank" class="nav-link text-white">Blog</a>
                            </li>
                        </ul>
                        {{-- UNTUK WELCOME + BUTTON LOGOUT --}}
                        @auth
                            <div class="other-option">
                                <ul class="navbar-nav m-auto ">
                                    <li class="nav-item">
                                        <a href="#"
                                            class="nav-link dropdown-toggle active text-white">{{ auth()->user()->nama }}</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="/account" class="nav-link"><i class="bx bx-user mr-2"></i>
                                                    Profile</a>
                                            </li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <li class="nav-item">
                                                    <div class="nav-link">
                                                        <button type="submit" class="btn btn-dark w-100 text-left"> <i
                                                                class='bx bx-log-out mr-2'></i>Log Out</button>
                                                    </div>
                                                </li>
                                            </form>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="other-option">
                                <a href="/login" class="signin-btn bg-white text-dark">Sign In</a>
                            </div>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar Area End -->
    @yield('body')

    <!-- Footer Section Start -->
    <footer class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                            labore et dolore magna. Sed eiusmod tempor incididunt ut.</p>

                        <div class="footer-social">
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-60">
                        <h3>For Candidate</h3>
                        <ul>
                            <li>
                                <a href="job-grid.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Browse Jobs
                                </a>
                            </li>
                            <li>
                                <a href="account.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Account
                                </a>
                            </li>
                            <li>
                                <a href="catagories.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Browse Categories
                                </a>
                            </li>
                            <li>
                                <a href="resume.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Resume
                                </a>
                            </li>
                            <li>
                                <a href="job-list.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Job List
                                </a>
                            </li>
                            <li>
                                <a href="sign-up.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-60">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="index.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="faq.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="pricing.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="privacy.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <i class='bx bx-chevrons-right bx-tada'></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget footer-info">
                        <h3>Information</h3>
                        <ul>
                            <li>
                                <span>
                                    <i class='bx bxs-phone'></i>
                                    Phone:
                                </span>
                                <a href="tel:882569756">
                                    +101 984 754
                                </a>
                            </li>

                            <li>
                                <span>
                                    <i class='bx bxs-envelope'></i>
                                    Email:
                                </span>
                                <a href="mailto:info@jovie.com">
                                    info@jovie.com
                                </a>
                            </li>

                            <li>
                                <span>
                                    <i class='bx bx-location-plus'></i>
                                    Address:
                                </span>
                                123, Denver, USA
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-text text-center">
        <p>Copyright @2021 Jotter.id All Rights Reserved By <a href="https://jotter.id/" target="_blank">Jotter.id</a>
        </p>
    </div>
    <!-- Footer Section End -->

    <!-- Back To Top Start -->
    <div class="top-btn">
        <i class='bx bx-chevrons-up bx-fade-up'></i>
    </div>
    <!-- Back To Top End -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Subscriber Form JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Velidation JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact Form -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    @yield('script')
</body>

</html>
