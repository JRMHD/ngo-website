<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>About Oguta Wanyama - community support program</title>
    <meta name="description"
        content="Learn about Oguta Wanyama, founder of the community support programm . Discover his background, community involvement, and vision for empowering Busia County, Kenya." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img\favicon (1).ico" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/gijgo.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- header-start -->
    @include('header')
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About US</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->



    <!-- about_us_area_start -->
    <div class="about_us_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center">
                        <h2>About Us</h2>
                        <p class="section_subtitle">Empowering communities for a brighter future</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="single_about">
                        <h3>Our Mission</h3>
                        <p>We are committed to empowering communities and fostering sustainable development through
                            innovative initiatives.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_about">
                        <h3>Our Vision</h3>
                        <p>To create a world where everyone has equal access to opportunities and essential resources
                            for a better life.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="single_about">
                        <h3>Our Values</h3>
                        <p>We uphold integrity, empathy, and collaboration as core values that guide our actions and
                            impact.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_about">
                        <h3>Our Impact</h3>
                        <p>Through our programs, we have positively impacted thousands of lives, creating lasting change
                            and hope.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_us_area_end -->




    <!-- reson_area_start -->
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Reasons for Community Support</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/1.png" alt="" />
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Empowering Youth</h4>
                            <p>
                                Supporting youth initiatives to foster education and skill
                                development.
                            </p>
                            <a href="{{ url('cause') }}" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/2.png" alt="" />
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Providing Healthcare</h4>
                            <p>
                                Ensuring access to essential healthcare services for
                                underserved communities.
                            </p>
                            <a href="{{ url('cause') }}" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/3.png" alt="" />
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Promoting Sustainable Development</h4>
                            <p>
                                Advocating for sustainable development practices to protect
                                the environment.
                            </p>
                            <a href="{{ url('cause') }}" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reson_area_end -->

    @include('donation')

    @include('footer')

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
