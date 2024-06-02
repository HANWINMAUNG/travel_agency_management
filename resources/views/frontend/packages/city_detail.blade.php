@extends('frontend.layouts.app')
@section('package','#08703A')
@section('content')

     <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Travel Packages Detail</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('package') }}"><i class="fas fa-angle-double-right"></i> Our Packages</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Package Detail</li>
                    <li><i class="fas fa-angle-double-right"></i> City Detail</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="image-part col-md-6">
            @if(!$package->cover_photo == '')
                <img src="{{asset('images/' . $package->cover_photo)}}" alt="" style="width:600px;height:485px;padding:10px;object-fit:contain;" class="border border-dark w-full mb-4">
            @else
                <img src="{{asset('backend/assets/img/noimage.jpg')}}" alt="" style="width:600px;height:485px;padding:5px;object-fit:contain;" class="mb-4">
            @endif
            </div>
            <div class="text-part col-md-6">
                <div class="d-flex justify-content-between">
                   <h2 style="color:#08703A;">Title</h2>
                   <button class="btn btn-outline-success py-0 my-1">Booking</button>
                </div>
                <div class="col-md-4">
                   <p><span class="h5">Price:</span>1000<span style="color:#08703A;">MMK</span></p>
                   <p><span class="h5">Quantity:</span>2</p>
                </div>
                <h2 style="color:#08703A;">Description</h2> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h2 style="color:#08703A;">Summary</h2> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
            </div>
        </div>
    </div>
</div> 
       

    <!-- ################# Our Team Starts Here#######################--->
    <section class="our-team">
        <div class="container">
            <div class="session-title row">
                <h2>Related City</h2> 
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row">
                    <div class="carousel-item col-md-3 active">
                        <div class=" team-row">
                            <div class="">
                                <div class="single-usr">
                                    <img src="{{asset('frontend/assets/images/team/team-memb1.jpg')}}" alt="">
                                    <div class="det-o">
                                        <h4>David Kanuel</h4>
                                        <i>Facial Surgan</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 active">
                        <div class=" team-row">
                            <div class=" ">
                                <div class="single-usr">
                                    <img src="{{asset('frontend/assets/images/team/team-memb2.jpg')}}" alt="">
                                    <div class="det-o">
                                        <h4>David Kanuel</h4>
                                        <i>Facial Surgan</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 active">
                        <div class="team-row">
                            <div class=" ">
                                <div class="single-usr">
                                    <img src="{{asset('frontend/assets/images/team/team-memb3.jpg')}}" alt="">
                                    <div class="det-o">
                                        <h4>David Kanuel</h4>
                                        <i>Facial Surgan</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 active">
                        <div class="team-row">
                            <div class="">
                                <div class="single-usr">
                                    <img src="{{asset('frontend/assets/images/team/team-memb4.jpg')}}" alt="">
                                    <div class="det-o">
                                        <h4>David Kanuel</h4>
                                        <i>Facial Surgan</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row team-row">
                
            </div>
        </div>
    </section>
   
@endsection
