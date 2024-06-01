@extends('frontend.layouts.app')
@section('about','#08703A')
@section('content')

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Tour & Travel</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
     
      
  <!--  ************************* About Us Starts Here ************************** -->    
       
    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>About Travel Packages</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius faucibus
                        ligula non congue. Suspendisse at pretium massa, sit amet
                        vulputate nibh. Nam posuere eros dolor. Donec vel arcu sagittis, pretium nisl </p>
                    <p> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                        Nulla facilisi. Etiam vestibulum,
                        nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                        arcu.</p>

                    <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien,
                        eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et
                        . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit
                        amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at
                        dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in,
                        dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida
                        vestibulum, urna justo posuere ante,
                        id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus </p>
                </div>
                <div class="image-part col-md-6">
                    <img src="assets/images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div> 
       

    <!-- ################# Our Team Starts Here#######################--->
    <section class="our-team">
        <div class="container">
            <div class="session-title row">
                <h2>Our Team</h2>
               
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    

   
@endsection
