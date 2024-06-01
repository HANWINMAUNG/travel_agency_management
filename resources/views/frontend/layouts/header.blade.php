<header class="container-fluid">
       <div class="header-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-4 d-none d-sm-block contacthd">
                  <p><a href="">Japan</a> &nbsp;&nbsp; <span>/</span> &nbsp;&nbsp; <a href="">Spain</a><span>/</span> <a href="">Italy</a></p>
                </div>
                <div class="col-sm-8">

                  <ul class="social-login">
                    <li>
                      <i class="fab fa-facebook-square"></i>
                    </li>
                    <li>
                      <i class="fab fa-twitter-square"></i>
                    </li>
                    <li>
                      <i class="fab fa-instagram"></i>
                    </li>
                    <li>
                      <i class="fab fa-linkedin"></i>
                    </li>
                  </ul>

                  <ul class="email">
                    <li><i class="fa fa-envelope"></i>smartcam@gamil.com</li>
                  </ul>
                </div>
              </div>
            </div>

       </div>
       <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="logo col-md-3">
                        <img src="assets/images/logo.png" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="navs d-none d-md-block col-md-9">
                        <ul class="">
                            <li><a href="{{ route('home') }}" style="color:@yield('home');">Home</a></li>
                            <li><a href="{{ route('about') }}" style="color:@yield('about');">About Us</a></li>
                            <li><a href="{{ route('package') }}" style="color:@yield('package');">Packages</a></li>
                            <li><a href="{{ route('destinations') }}" style="color:@yield('destinations');">Destinations</a></li>
                            <li><a href="{{ route('blog') }}" style="color:@yield('blog');">Blog</a></li>
                            <li><a href="{{ route('contact') }}" style="color:@yield('contact');">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </header>

                
           
         