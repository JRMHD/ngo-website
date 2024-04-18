<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oguta Wanyama - Community Causes</title>
    <meta name="description"
        content="Discover our impactful causes and how Oguta Wanyama's community support program is making a difference in Busia County, Kenya. Learn about our initiatives and how you can support positive change.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img\favicon (1).ico" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>



    <!-- header-start -->
    @include('header')
    <!-- header-end -->


    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Causes</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <div class="popular_causes_area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/1.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Provide Education for Orphans</h4>
                            </a>
                            <p>Help us fund educational programs for orphaned children to secure their future.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/2.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Water Supply for Rural Communities</h4>
                            </a>
                            <p>Support our initiative to provide clean water access to rural communities.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/3.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Support Women Entrepreneurship</h4>
                            </a>
                            <p>Empower women entrepreneurs by funding training and startup initiatives.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/4.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Plant Trees for Environmental Conservation</h4>
                            </a>
                            <p>Contribute to our tree planting campaign to combat deforestation.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/5.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Healthcare for Vulnerable Communities</h4>
                            </a>
                            <p>Provide essential healthcare services to underserved populations.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/6.png" alt="">
                        </div>
                        <div class="causes_content">
                            <a href="{{ url('cause') }}">
                                <h4>Promote Youth Empowerment through Skills Training</h4>
                            </a>
                            <p>Support skill development programs to empower youth for brighter futures.</p>
                            <a class="read_more" href="{{ url('cause') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
