<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Citybook -Directory Listing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <header class="main-header dark-header fs-header sticky">
            <div class="header-inner">

                <div class="header-search vis-header-search">
                    <div class="header-search-input-item">
                        <input type="text" placeholder="Keywords" value="" />
                    </div>
                    <div class="header-search-select-item">

                    </div>
                    <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>
                </div>
                <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>

                <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>

                    </nav>
                </div>
                <!-- navigation  end -->
            </div>
        </header>
        <!--  header end -->
        <!-- wrapper -->
        <div id="wrapper">
            <!-- content -->
            <div class="content">
                <!--section -->
                <!-- section end -->
                <!--section -->
                <section class="gray-section" id="sec1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                    <!-- article> -->
                                    <article>
                                        <div class="list-single-main-media fl-wrap">
                                            <div class="single-slider-wrapper fl-wrap">
                                                <div class="single-slider fl-wrap">
                                                    <div class="slick-slide-item"><img src="images/all/191.jpg" alt=""></div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="list-single-main-item fl-wrap">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>삼겹살,오겹살 초벌구이 맛집</h3>
                                            </div>
                                            <p>
                                                이른 5시에 가도 줄 섬.
                                            </p>
                                            <p>
                                                고기 이외에도 곁들어 먹을 수 있는 부추, 고추장찌개 Good
                                            </p>
                                            <blockquote>
                                                <p>5시부터 8시까지 항상 줄서니 예약해야함. </p>
                                            </blockquote>
                                            <p>시립대 정문 맛집 No.1</p>

                                            <div class="post-opt">
                                                <ul>
                                                    <li><i class="fa fa-calendar-check-o"></i> <span>25 April 2018</span></li>
                                                    <li><i class="fa fa-eye"></i> <span>264</span></li>
                                                    <li><i class="fa fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li>
                                                </ul>
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap blog-tags">
                                                <a href="#">시립대</a>
                                                <a href="#">줄서서 먹는</a>
                                                <a href="#">회식</a>
                                                <a href="#">삼겹살</a>
                                                <a href="#">초벌구이</a>
                                                <a href="#">시립대 정문</a>
                                                <a href="#">맛집</a>
                                            </div>
                                            <div class="share-holder hid-share">

                                                <div class="share-container  isShare"></div>
                                            </div>
                                            <span class="fw-separator"></span>

                                        </div>
                                    </article>
                                    <!-- article end -->
                                    <span class="section-separator"></span>
                                    <!-- list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec4">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Comments -  <span>  </span></h3>
                                        
                                            <!--reviews-comments-item end-->
                                        </div>
                                    </div>
                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec5">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>댓     글</h3>
                                        </div>
                                        <!-- Add Review Box -->
                                        
                                        <div id="add-review" class="add-review-box">
                                            <!-- Review Comment -->
                                            <form action = "create_review.php" id="add-comment" class="add-comment custom-form">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fa fa-user-o"></i></label>
                                                            <input type="text" placeholder="닉네임" value="" />
                                                        </div>
                                                        
                                                    </div>
                                                    <textarea cols="40" rows="3" placeholder="리뷰를 적어주세요 :"></textarea>
                                                </fieldset>
                                                <button class="btn  big-btn  color-bg flat-btn">확   인 <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                       
                                        <!-- Add Review Box / End -->
                                    </div>
                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->
                                    <div class="list-single-main-item fl-wrap" id="sec5">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Add Comment</h3>
                                        </div>
                                        <!-- Add Review Box -->
                                        <div id="add-review" class="add-review-box">
                                            <!-- Review Comment -->
                                            <form id="add-comment" class="add-comment custom-form">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fa fa-user-o"></i></label>
                                                            <input type="text" placeholder="Your Name *" value="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fa fa-envelope-o"></i>  </label>
                                                            <input type="text" placeholder="Email Address*" value="" />
                                                        </div>
                                                    </div>
                                                    <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                </fieldset>
                                                <button class="btn  big-btn  color-bg flat-btn">Submit Comment <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                        <!-- Add Review Box / End -->
                                    </div>
                                    <!-- list-single-main-item end -->
                                </div>
                            </div>
                            <!--box-widget-wrap -->
                            <div class="col-md-4">
                                <div class="box-widget-wrap">
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget-item-header">
                                            <h3>19뜯고맛보고 </h3>
                                        </div>

                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget-item-header">
                                            <h3>소   개 </h3>
                                        </div>
                                        <div class="box-widget list-author-widget">
                                            <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                                <span class="list-author-widget-link"><a href="author-single.html">19뜯고맛보고</a></span>
                                                <img src="images/all/19.jpg" alt="">

                                            </div>
                                            <div class="box-widget-content">
                                                <div class="list-author-widget-text">
                                                    <div class="list-author-widget-contacts">
                                                        <p>초벌구이 삼겹살,오겹살,부추를 즐길 수 있는 시립대 대표 고기집</p>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul>
                                                            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="https://twitter.com/?lang=ko" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-vk"></i></a></li>
                                                            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap">
                                        <div class="box-widget-item-header">
                                            <h3>Tags: </h3>
                                        </div>
                                        <div class="list-single-tags tags-stylwrap">
                                            <a href="#">시립대</a>
                                            <a href="#">줄서서 먹는</a>
                                            <a href="#">회식</a>
                                            <a href="#">삼겹살</a>
                                            <a href="#">초벌구이</a>
                                            <a href="#">시립대 정문</a>
                                            <a href="#">맛집</a>

                                        </div>
                                    </div>
                                    <!--box-widget-item end -->

                                </div>
                            </div>
                            <!--box-widget-wrap end -->
                        </div>
                    </div>
                </section>
                <!--section end -->
                <div class="limit-box fl-wrap"></div>
                <!--section -->
                <section class="gradient-bg">
                    <div class="cirle-bg">
                        <div class="bg" data-bg="images/bg/circle.png"></div>
                    </div>

                </section>
                <!--section end -->
            </div>
            <!--content end -->
        </div>
        <!-- wrapper end -->
        <!--register form -->
        <div class="main-register-wrap modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Sign In <span>City<strong>Book</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        <a class="to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>