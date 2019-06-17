<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mona - Model Agency HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Blog | Kenya Fashion Awards</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ URL::asset('img/core-img/KFA.jpg') }}">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{ URL::asset('css/style2.css') }}">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
         <div class="bg-curve" style="background-image: url(../img/core-img/choice.png);"></div>

         <!-- Logo -->
          <a class="nav-brand" href="{{ url('/index') }}"><img src="{{ URL::asset('img/core-img/KFA.jpg') }}" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="{{ url('/index') }}">Home</a></li>
                <li><a href="#">Awards</a>
                  <ul class="dropdown">
                    <li><a href="/category">Awards Category</a></li>
                    <li><a href="/criteria">Awards criteria</a></li>
                    </ul>
                </li>
                <li><a href="/models">Vote</a></li>
                <li  class="current-item"><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="/contacts">Apply</a></li>
              </ul>

              <!-- Search Icon -->
              <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                <i class="icon_search"></i>
              </div>
            </div>
            <!-- Nav End -->

          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="index.php" method="post">
              <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Top Search Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <a href="{{ url('/blog') }}"><h2 class="title">Blog</h2><a>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <section class="blog-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="blog-details-content mt-5 mb-80">
              <!-- Post Details Text -->
              <div class="post-details-text">
                <img src="{{ url('/storage/cover_images/' . $post->cover_image)}}" alt="">
  
                <div class="post-content mt-30 mb-30">
                  <a href="#" class="post-date">{{$post->created_at}}</a>
                  <h2>{{$post->title}}</h2>
                  <div class="post-meta">
                    <a href="#" class="post-author">by {{$post->user->name}}</a>
                    <a href="#" class="post-view"><i class="fa fa-eye" aria-hidden="true"></i> 192</a>
                    <a href="#" class="post-comments"><i class="fa fa-comments" aria-hidden="true"></i> 08</a>
                  </div>
                </div>
  
                <p>{!! $post->body !!}</p>
  
                <!-- Blockquote -->
                <blockquote class="mona-blockquote d-flex">
                  <div class="icon">
                    <i class="icon_quotations" aria-hidden="true"></i>
                  </div>
                  <div class="text">
                    <h5>That’s not to say you’ll have the exact same thing if you stop by: the restaurant’s menus change constantly, based on seasonal ingredients.</h5>
                    <h6>Jacob Austin</h6>
                  </div>
                </blockquote>
  
                <h2>You have 4 free articles remaining</h2>
  
                <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective
                  unwilling get. Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors.</p>
  
                <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied
                  did one admitting incommode tolerably how are.</p>
  
                <!-- Post Catagories & Post Share -->
                <div class="d-flex align-items-center justify-content-between">
                  <!-- Post Catagories -->
                  <div class="post-catagories">
                    <ul class="d-flex flex-wrap align-items-center">
                      <li><a href="#">Tutorials</a></li>
                      <li><a href="#">Business</a></li>
                    </ul>
                  </div>
  
                  <!-- Post Share -->
                  <div class="mona-post-share d-flex align-items-center">
                    <h6 class="mb-0 mr-3">Share:</h6>
                    <div class="social-info-">
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
  
                <!-- Comments Area -->
                <div class="comment_area mb-50 clearfix">
                  <h5 class="title">12 Comments</h5>
  
                  <ol>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                      <!-- Comment Content -->
                      <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                          <img src="img/bg-img/49.jpg" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                          <a href="#" class="post-date">27 Aug 2018</a>
                          <h5>Jerome Leonard</h5>
                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                          <a href="#" class="like">Like</a>
                          <a href="#" class="reply">Reply</a>
                        </div>
                      </div>
  
                      <ol class="children">
                        <li class="single_comment_area">
                          <!-- Comment Content -->
                          <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                              <img src="img/bg-img/50.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                              <a href="#" class="post-date">27 Aug 2018</a>
                              <h5>Theodore Adkins</h5>
                              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                              <a href="#" class="like">Like</a>
                              <a href="#" class="reply">Reply</a>
                            </div>
                          </div>
                        </li>
                      </ol>
                    </li>
  
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                      <!-- Comment Content -->
                      <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                          <img src="img/bg-img/51.jpg" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                          <a href="#" class="post-date">27 Aug 2018</a>
                          <h5>Roger Marshall</h5>
                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                          <a href="#" class="like">Like</a>
                          <a href="#" class="reply">Reply</a>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
  
                <!-- Leave A Reply -->
                <div class="mona-contact-form">
                  <h2 class="mb-4">Leave A Comment</h2>
  
                  <!-- Form -->
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" name="message-name" class="form-control mb-15" placeholder="Name">
                      </div>
                      <div class="col-lg-6">
                        <input type="email" name="message-email" class="form-control mb-15" placeholder="Email">
                      </div>
                      <div class="col-12">
                        <textarea name="message" class="form-control mb-15" placeholder="Comment"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn mona-btn btn-2 mt-15">Post Comment</button>
                      </div>
                    </div>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-12 col-lg-4">
            <div class="sidebar-area mt-5">
  
              <!-- Single Widget Area -->
              <div class="single-widget-area search-widget-area mb-80">
                <form action="#" method="post">
                  <input type="search" name="search" class="form-control" placeholder="Search ...">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
  
              <!-- Single Widget Area -->
              <div class="single-widget-area catagories-widget mb-80">
                <h5 class="widget-title">Categories</h5>
  
                <!-- catagories list -->
                <ul class="catagories-list">
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Business</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Design</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Marketing</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> MBA Courses</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Technology</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Web Development</a></li>
                </ul>
              </div>
  
              <!-- Single Widget Area -->
              <div class="single-widget-area news-widget mb-80">
                <h5 class="widget-title">Latest Blogs</h5>
  
                <!-- Single News Area -->
                <div class="single-news-area d-flex">
                  <div class="blog-thumbnail">
                    <img src="./img/bg-img/44.jpg" alt="">
                  </div>
                  <div class="blog-content">
                    <a href="#" class="post-title">Breast Lifts Improvement Without Implants</a>
                    <span class="post-date">30 Aug 2018</span>
                  </div>
                </div>
  
                <!-- Single News Area -->
                <div class="single-news-area d-flex">
                  <div class="blog-thumbnail">
                    <img src="./img/bg-img/45.jpg" alt="">
                  </div>
                  <div class="blog-content">
                    <a href="#" class="post-title">Pueraria Mirifica Extract Helps Wrinkled Free Eye Gel</a>
                    <span class="post-date">30 Aug 2018</span>
                  </div>
                </div>
  
                <!-- Single News Area -->
                <div class="single-news-area d-flex">
                  <div class="blog-thumbnail">
                    <img src="./img/bg-img/46.jpg" alt="">
                  </div>
                  <div class="blog-content">
                    <a href="#" class="post-title">Having Your Breasts Reduced With Breast Augmentation</a>
                    <span class="post-date">30 Aug 2018</span>
                  </div>
                </div>
  
                <!-- Single News Area -->
                <div class="single-news-area d-flex">
                  <div class="blog-thumbnail">
                    <img src="./img/bg-img/47.jpg" alt="">
                  </div>
                  <div class="blog-content">
                    <a href="#" class="post-title">At Home Hair Removal Techniques To Use Part One</a>
                    <span class="post-date">30 Aug 2018</span>
                  </div>
                </div>
  
              </div>
  
              <!-- Single Widget Area -->
              <div class="single-widget-area adds-widget mb-80">
                <a href="#"><img class="w-100" src="./img/bg-img/banner.png" alt=""></a>
              </div>
  
              <!-- Single Widget Area -->
              <div class="single-widget-area tags-widget mb-80">
                <h5 class="widget-title">Popular Tags</h5>
  
                <ul class="tags-list">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Unique</a></li>
                  <li><a href="#">model</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">ideas</a></li>
                  <li><a href="#">Model agency</a></li>
                  <li><a href="#">Wordpress Template</a></li>
                  <li><a href="#">startup</a></li>
                  <li><a href="#">agency</a></li>
                </ul>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Blog Details Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Logo -->
            <a href="#" class="d-block mb-4"><img src="./img/core-img/KFA.jpg" alt=""></a>
            <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante sit amet ante.</p>
            <div class="copywrite-text">
              <p>&copy; 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Our Link</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">New Faces</a></li>
                <li><a href="#">Model Of the Week</a></li>
                <li><a href="#">Classic Women</a></li>
                <li><a href="#">Privacy Terms</a></li>
                <li><a href="#">Classic Men</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Hair & Styles</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Contact</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4>+254-712-345-678</h4>
              <h6>i&M Building Kenyatta Avenue, Nairobi</h6>
            </div>
            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="../js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="../js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="../js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="../js/default-assets/active.js"></script>

</body>

</html>