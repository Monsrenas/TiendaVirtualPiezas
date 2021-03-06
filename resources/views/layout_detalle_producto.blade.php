<!DOCTYPE html>
<html lang="es">

    <head>
        <title>MAZ PARTES</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
              />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta tag Keywords -->

        <!-- Custom-Files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Main css -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <!-- Font-Awesome-Icons-CSS -->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!-- pop-up-box -->
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
        <!-- menu style -->
        <!-- //Custom-Files -->

        <!-- web fonts -->
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <!-- //web fonts -->

    </head>

    <body>
        <!-- top-header -->
        <div class="agile-main-top">
            <div class="container-fluid">
                <div class="row main-top-w3l py-2">
                    <div class="col-lg-4 header-most-top">
                        <p class="text-white text-lg-left text-center">MAZ PARTES
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </p>
                    </div>
                    <div class="col-lg-8 header-right mt-lg-0 mt-2">
                        <!-- header lists -->
                        <ul>
                            <li class="text-center border-right text-white">
                            </li>
                            <li class="text-center border-right text-white">
                            </li>
                            <li class="text-center border-right text-white">
                                <i class="fas fa-phone mr-2"></i> 001 234 5678
                            </li>
                            <li class="text-center border-right text-white">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Ingresar </a>
                            </li>
                            <li class="text-center text-white">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Registrarse </a>
                            </li>
                        </ul>
                        <!-- //header lists -->
                    </div>
                </div>
            </div>
        </div>

        <!-- modals -->
        <!-- log in -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">INGRESAR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">Usuario</label>
                                <input type="text" class="form-control" placeholder=" " name="Name" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder=" " name="Password" required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Log in">
                            </div>
                            <div class="sub-w3l">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Recordarme</label>
                                </div>
                            </div>
                            <p class="text-center dont-do mt-3">No tienes una cuenta?
                                <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                    Registrate</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- register -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">REGISTRO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder=" " name="Name" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control" placeholder=" " name="Email" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Contraseña</label>
                                <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>
                            <div class="sub-w3l">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                    <label class="custom-control-label" for="customControlAutosizing2">Acepto terminos y condiciones</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //modal -->
        <!-- //top-header -->

        <!-- header-bottom-->
        <div class="header-bot">
            <div class="container">
                <div class="row header-bot_inner_wthreeinfo_header_mid">
                    <!-- logo -->
                    <div class="col-md-3 logo_agile">
                        <img src="images/logo2.png" width="210px" class="img-fluid">
                    </div>
                    <!-- //logo -->
                    <!-- header-bot -->
                    <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                        <div class="row">
                            <!-- search -->
                            <div class="col-10 agileits_search">
                                <form class="form-inline" action="#" method="post">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" required>
                                    <button class="btn my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </div>
                            <!-- //search -->
                            <!-- cart details -->
                            <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="#" method="post" class="last">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn w3view-cart" type="submit" name="submit" value="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- //cart details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop locator (popup) -->
        <!-- //header-bottom -->

        @yield('pagina')

        <!-- banner-2 -->
        <div class="page-head_agile_info_w3l">

        </div>
        <!-- //banner-2 -->
        <!-- navigation -->
        <div class="navbar-inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar navbar-expand-lg navbar-light bg-light">
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MARCAS

                                </a>
                                <div class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info p-4">
                                        <div class="panel panel-default">


                                            <div id="answerThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="questionThree">
                                                <div class="panel-body" id="Interrogation">
                                                    @include('codificador.Marcas_Modelos');
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CATEGORIAS
                                </a>
                                <div class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info p-4">
                                        <div class="panel panel-default">

                                            <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
                                                <div class="panel-body" id="Laboratory"> 
                                                    @include('codificador.categorias');
                                                </div>
                                            </div>
                                        </div>              
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    FABRICANTE
                                </a>
                                <div class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info p-4">
                                        <div class="panel panel-default">

                                            <div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
                                                <div class="panel-body" id="Laboratory"> 
                                                    @include('codificador.fabricante');
                                                </div>
                                            </div>
                                        </div>                                   
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //navigation -->


        @yield('producto')


        <!-- middle section -->
        <div class="join-w3l1 py-sm-5 py-4">
            <div class="container py-xl-4 py-lg-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="join-agile text-left p-4">
                            <div class="row">
                                <div class="col-sm-7 offer-name">
                                    <h6>Smooth, Rich & Loud Audio</h6>
                                    <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                    <p>Sale up to 25% off all in store</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="join-agile text-left p-4">
                            <div class="row ">
                                <div class="col-sm-7 offer-name">
                                    <h6>A Bigger Phone</h6>
                                    <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                    <p>Free shipping order over $100</p>
                                </div>
                                <div class="col-sm-5 offerimg-w3l">
                                    <img src="images/off2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle section -->

        <!-- footer -->
        <footer>
            <div class="footer-top-first">
                <div class="container py-md-5 py-sm-4 py-3">
                    <!-- footer first section -->
                    <h2 class="footer-top-head-w3l font-weight-bold mb-2">Electronics :</h2>
                    <p class="footer-main mb-4">
                        If you're considering a new laptop, looking for a powerful new car stereo or shopping for a new HDTV, we make it easy to
                        find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops, cell phones, tablets
                        and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
                    <!-- //footer first section -->
                    <!-- footer second section -->
                    <div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
                        <div class="col-md-4 offer-footer">
                            <div class="row">
                                <div class="col-4 icon-fot">
                                    <i class="fas fa-dolly"></i>
                                </div>
                                <div class="col-8 text-form-footer">
                                    <h3>Free Shipping</h3>
                                    <p>on orders over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offer-footer my-md-0 my-4">
                            <div class="row">
                                <div class="col-4 icon-fot">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="col-8 text-form-footer">
                                    <h3>Fast Delivery</h3>
                                    <p>World Wide</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offer-footer">
                            <div class="row">
                                <div class="col-4 icon-fot">
                                    <i class="far fa-thumbs-up"></i>
                                </div>
                                <div class="col-8 text-form-footer">
                                    <h3>Big Choice</h3>
                                    <p>of Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //footer second section -->
                </div>
            </div>
            <!-- footer third section -->
            <div class="w3l-middlefooter-sec">
                <div class="container py-md-5 py-sm-4 py-3">
                    <div class="row footer-info w3-agileits-info">
                        <!-- footer categories -->
                        <div class="col-md-3 col-sm-6 footer-grids">
                            <h3 class="text-white font-weight-bold mb-3">Categories</h3>
                            <ul>
                                <li class="mb-3">
                                    <a href="product.html">Mobiles </a>
                                </li>
                                <li class="mb-3">
                                    <a href="product.html">Computers</a>
                                </li>
                                <li class="mb-3">
                                    <a href="product.html">TV, Audio</a>
                                </li>
                                <li class="mb-3">
                                    <a href="product2.html">Smartphones</a>
                                </li>
                                <li class="mb-3">
                                    <a href="product.html">Washing Machines</a>
                                </li>
                                <li>
                                    <a href="product2.html">Refrigerators</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //footer categories -->
                        <!-- quick links -->
                        <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                            <h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
                            <ul>
                                <li class="mb-3">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact.html">Contact Us</a>
                                </li>
                                <li class="mb-3">
                                    <a href="help.html">Help</a>
                                </li>
                                <li class="mb-3">
                                    <a href="faqs.html">Faqs</a>
                                </li>
                                <li class="mb-3">
                                    <a href="terms.html">Terms of use</a>
                                </li>
                                <li>
                                    <a href="privacy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                            <h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
                            <ul>
                                <li class="mb-3">
                                    <i class="fas fa-map-marker"></i> 123 Sebastian, USA.</li>
                                <li class="mb-3">
                                    <i class="fas fa-mobile"></i> 333 222 3333 </li>
                                <li class="mb-3">
                                    <i class="fas fa-phone"></i> +222 11 4444 </li>
                                <li class="mb-3">
                                    <i class="fas fa-envelope-open"></i>
                                    <a href="mailto:example@mail.com"> mail 1@example.com</a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    <a href="mailto:example@mail.com"> mail 2@example.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                            <!-- newsletter -->
                            <h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
                            <p class="mb-3">Free Delivery on your first order!</p>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                    <input type="submit" value="Go">
                                </div>
                            </form>
                            <!-- //newsletter -->
                            <!-- social icons -->
                            <div class="footer-grids  w3l-socialmk mt-3">
                                <h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a class="icon fb" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="icon tw" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="icon gp" href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- //social icons -->
                        </div>
                    </div>
                    <!-- //quick links -->
                </div>
            </div>
            <!-- //footer third section -->
        </footer>
        <!-- //footer -->
        <!-- copyright -->
        <div class="copy-right py-3">
            <div class="container">
                <p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
        </div>
        <!-- //copyright -->

        <!-- js-files -->
        <!-- jquery -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //jquery -->

        <!-- nav smooth scroll -->
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <!-- //nav smooth scroll -->

        <!-- popup modal (for location)-->
        <script src="js/jquery.magnific-popup.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>
        <!-- //popup modal (for location)-->

        <!-- cart-js -->
        <script src="js/minicart.js"></script>
        <script>
            paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

            paypals.minicarts.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });
        </script>
        <!-- //cart-js -->

        <!-- password-script -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- //password-script -->

        <!-- imagezoom -->
        <script src="js/imagezoom.js"></script>
        <!-- //imagezoom -->

        <!-- flexslider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

        <script src="js/jquery.flexslider.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
        <!-- //FlexSlider-->

        <!-- smoothscroll -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smoothscroll -->

        <!-- start-smooth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->

        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->

        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- //js-files -->



        <!-- GetButton.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    facebook: "101448854852899", // Facebook page ID
                    whatsapp: "+593999987929", // WhatsApp number
                    call_to_action: "!MAZ PARTES! como podemos ayudarte", // Call to action
                    button_color: "#666666", // Color of button
                    position: "right", // Position may be 'right' or 'left'
                    order: "facebook,whatsapp", // Order of buttons
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /GetButton.io widget -->


    </body>

</html>