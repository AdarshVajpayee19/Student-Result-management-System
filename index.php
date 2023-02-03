<?php
session_start();
error_reporting(0);
include('includes/config.php');
if ($_SESSION['alogin'] != '') {
    $_SESSION['alogin'] = '';
}
if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bnmit Result Portal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="images/x-icon" href="/images/favicon.ico">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="css/main.css" media="screen">
    <script src="js/modernizr/modernizr.min.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body class="">
    <img class="bg" src="BNMIT.jpg" alt="bnmit.jpeg" srcset="">
    <div class="main-wrapper">

        <div class="">
            <div class="row">
                <h1 align="center">BNMIT RESULT PORTAL</h1>
                <div class="col-lg-6 visible-lg-block">

                    <section class="section">
                        <div class="row mt-40">
                            <div class="col-md-10 col-md-offset-1 pt-50">

                                <div class="row mt-30 ">
                                    <div class="col-md-11">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title text-center">
                                                    <h4>For Students</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <div class="section-title">
                                                    <p class="sub-title">BNMIT RESULT PORTAL</p>
                                                </div>

                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-6 control-label">Search your result</label>
                                                        <div class="col-sm-6">
                                                            <a href="find-result.php">click here</a>
                                                        </div>
                                                    </div>

                                                </form>




                                            </div>
                                        </div>
                                        <!-- /.panel -->

                                    </div>
                                    <!-- /.col-md-11 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="section">
                        <div class="row mt-40">
                            <div class="col-md-10 col-md-offset-1 pt-50">

                                <div class="row mt-30 ">
                                    <div class="col-md-11">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title text-center">
                                                    <h4>Admin Login</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <div class="section-title">
                                                    <p class="sub-title">BNMIT RESULT PORTAL</p>
                                                </div>

                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">

                                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                        </div>
                                                    </div>
                                                </form>




                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                        <p class="text-muted text-center"><small>Copyright © 2023 BNMIT </a></small> </p>
                                    </div>
                                    <!-- /.col-md-11 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </section>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /. --
        
        <!<div class="widgets_wrapper ">
            <div class="container">
                <div class="column one-fourth">
                    <aside id="text-2" class="widget widget_text">
                        <div class="textwidget">
                        <h3>ADMISSION</h3>
                        <ul class="footer-widget1">
                            <li><a href="https://www.bnmit.org/admission/#eoa">Eligibility Criteria</a></li>
                            <li><a href="https://www.bnmit.org/admission/#how-to-apply">How to Apply</a></li>
                            <li><a href="https://www.bnmit.org/admission/#sel-process">Selection Process</a></li>
                            <li><a href="https://www.bnmit.org/admission/#list-documents">List of Documents</a></li>
                            <li><a href="https://www.bnmit.org/admission/#edu-loan">Education Loan</a></li>
                            <li><a href="https://www.bnmit.org/wp-content/uploads/2022/01/BNMIT-Policies-Dec-2021-final.pdf" target="_blank" rel="noopener">BNMIT Policy</a></li>
                            <li><a href="https://www.bnmit.org/admission/#contact">Admission Contact</a></li>
                            <li><a href="https://www.bnmit.org/admission/#rules-regulation">Rules &amp; Regulations</a></li>
                            <li><a href="https://www.bnmit.org/admission/#disclaimer">Disclaimer</a></li>
                            <li><a href="https://www.bnmit.org/admission/#scholarship">Scholarships</a></li>
                            <li><a href="https://www.bnmit.org/admission/#refund-policy">Refund Policy</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="text-3" class="widget widget_text">
                    <div class="textwidget">
                        <h3>ABOUT US</h3>
                        <ul class="footer-widget1">
                            <li><a href="https://www.bnmit.org/about-us/">About</a></li>
                            <li><a href="https://www.bnmit.org/founder/">Founders</a></li>
                            <li><a href="https://www.bnmit.org/our-vision-and-mission/">Our Vision and Mission</a></li>
                            <li><a href="https://www.bnmit.org/campus-tour/">Campus Tour</a></li>
                            <li><a href="https://www.bnmit.org/admission/#scholarship">Scholarships</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="text-4" class="widget widget_text">
                    <div class="textwidget">
                        <h3>QUICK LINKS</h3>
                        <ul class="footer-widget1">
                            <li><a href="https://www.bnmit.org/events/">Events</a></li>
                            <li><a href="https://www.bnmit.org/news/">News</a></li>
                            <li><a href="https://www.bnmit.org/aicte-mandatory-disclosure/">AICTE mandatory Disclosure</a></li>
                            <li><a href="https://www.bnmit.org/bnmit-financial/">BNMIT Financials</a></li>
                            <li><a href="https://www.bnmit.org/helpdesk-for-state-scholarship-portal/">Helpdesk for State Scholarship Portal (SSP)</a></li>
                            <li><a href="#">Photo Gallery</a></li>
                            <li><a href="https://www.bnmit.org/video-gallery/">Video Gallery</a></li>
                            <li><a href="https://www.bnmit.org/wp-content/uploads/2021/05/Calendar_Jan-Aug_2020-21__1_.pdf" target="_blank" rel="noopener">Calender of Events</a></li>
                            <li><a href="https://www.mathworks.com/academia/tah-portal/bnm-institute-of-technology-40676985.html">MATLAB Access</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="text-6" class="widget widget_text">
                    <div class="textwidget">
                        <h3>CONTACT US</h3>
                        <div role="form" class="wpcf7" id="wpcf7-f15409-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/#wpcf7-f15409-o1" method="post" class="wpcf7-form cf7mls-no-scroll cf7mls-no-moving-animation init" novalidate="novalidate" data-status="init">
                                <div style="display: none;"><input type="hidden" name="_wpcf7" value="15409"><br><input type="hidden" name="_wpcf7_version" value="5.4"><br><input type="hidden" name="_wpcf7_locale" value="en_US"><br><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15409-o1"><br><input type="hidden" name="_wpcf7_container_post" value="0"><br><input type="hidden" name="_wpcf7_posted_data_hash"><br><input type="hidden" name="_wpcf7cf_hidden_group_fields" value="[]"><br><input type="hidden" name="_wpcf7cf_hidden_groups" value="[]"><br><input type="hidden" name="_wpcf7cf_visible_groups" value="[]"><br><input type="hidden" name="_wpcf7cf_repeaters" value="[]"><br><input type="hidden" name="_wpcf7cf_steps" value="{}"><br><input type="hidden" name="_wpcf7cf_options" value="{&quot;form_id&quot;:15409,&quot;conditions&quot;:[],&quot;settings&quot;:{&quot;animation&quot;:&quot;yes&quot;,&quot;animation_intime&quot;:200,&quot;animation_outtime&quot;:200,&quot;conditions_ui&quot;:&quot;normal&quot;,&quot;notice_dismissed&quot;:false}}"></div>
                                <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name"></span><br><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email"></span><br><span class="wpcf7-form-control-wrap mobile-Number"><input type="tel" name="mobile-Number" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Your Phone Number"></span><br><span class="wpcf7-form-control-wrap your-city"><input type="text" name="your-city" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your City"></span></p>
                                <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" aria-invalid="false"><span class="ajax-loader"></span></p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="column one">
                <aside id="text-5" class="widget widget_text">
                    <div class="textwidget">
                        <h3>OTHER LINKS</h3>
                        <ul class="widget4">
                            <li><a href="https://www.bnmit.org/research/">Research</a></li>
                            <li><a href="https://www.bnmit.org/department-of-training-palacement/department-overview/">Placements</a></li>
                            <li><a href="https://www.bnmit.org/media/">Media</a></li>
                            <li><a href="https://www.bnmit.org/blog/">Blog</a></li>
                            <li><a href="https://www.bnmit.org/career/">Career @ BNMIT</a></li>
                            <li><a href="https://www.bnmit.org/results/">Result</a></li>
                            <li><a href="https://www.bnmit.org/downloads/">Downloads</a></li>
                            <li><a href="https://www.bnmit.org/contact">Contact</a></li>
                        </ul>
                    </div>
                </aside>
                <aside id="heateor_sss_follow-2" class="widget widget_heateor_sss_follow">
                    <div class="heateor_sss_follow_icons_container">
                        <h4>Connect with us</h4>
                        <ul class="heateor_sss_follow_ul">
                            <li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground"><a target="_blank" aria-label="Facebook" href="https://www.facebook.com/bnmitsocial" rel="noopener">
                                        <ss style="display:block" class="heateorSssSharingSvg heateorSssFacebookSvg"></ss>
                                    </a></i></li>
                            <li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground"><a target="_blank" aria-label="Twitter" href="https://twitter.com/BNMTech" rel="noopener">
                                        <ss style="display:block" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss>
                                    </a></i></li>
                            <li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Instagram" title="Instagram" class="heateorSssSharing heateorSssInstagramBackground"><a target="_blank" aria-label="Instagram" href="https://www.instagram.com/bnmitsocial/" rel="noopener">
                                        <ss style="display:block" class="heateorSssSharingSvg heateorSssInstagramSvg"></ss>
                                    </a></i></li>
                            <li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Linkedin" title="Linkedin" class="heateorSssSharing heateorSssLinkedinBackground"><a target="_blank" aria-label="Linkedin" href="https://www.linkedin.com/school/bnm-institute-of-technology/" rel="noopener">
                                        <ss style="display:block" class="heateorSssSharingSvg heateorSssLinkedinSvg"></ss>
                                    </a></i></li>
                        </ul>
                        <div style="clear:both"></div>
                    </div>
                </aside>
            </div>
        </div> -->



    </div>
    </div>

    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
    <script>
        $(function() {

        });
    </script>

    <div class="mt padding-in-y" align="center">
        <aside id="text-5" class="widget widget_text">
            <div class="textwidget">
                <h2 align="center">Other Links</h2>
                <ul>
                    <ol class="margin-y"><a href="https://www.bnmit.org/research/">Research</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/department-of-training-palacement/department-overview/">Placements</a></li>
                    <ol class="margin-y"><a href="https://www.bnmit.org/media/">Media</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/blog/">Blog</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/career/">Career @ BNMIT</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/results/">Result</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/downloads/">Downloads</a></ol>
                    <ol class="margin-y"><a href="https://www.bnmit.org/contact">Contact</a></ol>
                </ul>
            </div>
        </aside>
        <aside id="heateor_sss_follow-2" class="widget widget_heateor_sss_follow">
            <div class="heateor_sss_follow_icons_container">
                <h2 align="center">Connect with us</h2>
                <ul>
                <ol class="hover:text-decoration hover:underline margin-y"><i class="fa fa-instagram " aria-hidden="true"></i><a href="https://www.instagram.com/bnmitsocial/" rel="noopener">Instagram</a></ol>
                <ol class="hover:text-decoration hover:underline margin-y"><i class="fa fa-linkedin-square " aria-hidden="true"></i><a href="https://www.linkedin.com/school/bnm-institute-of-technology/">Linked In</a></ol>
                <ol class="hover:text-decoration hover:underline margin-y"><i class="fa fa-facebook-square " aria-hidden="true"></i><a href="https://www.facebook.com/bnmitsocial">Facebook</a></ol>
                <ol class="hover:text-decoration hover:underline margin-y"><i class="fa fa-twitter-square " aria-hidden="true"></i><a href="https://twitter.com/BNMTech">Twitter</a></ol>
            </ul>
                <div style="clear:both"></div>
            </div>
        </aside>
    </div>
</body>

</html>

