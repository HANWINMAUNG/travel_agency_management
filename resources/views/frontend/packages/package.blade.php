@extends('frontend.layouts.app')
@section('package','#08703A')
@section('content')

     <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Travel Packages</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Our Packages</li>
                </ul>
            </div>
        </div>
    </div>

     
     <!--################### Packages Starts Here #######################--->
    
    <section class="top-packages container-fluid">
        <div class="container">
           
            <div class="pack-row row">
                @foreach ($packages as $package)
                    <div class="col-md-4">
                        <div class="pac-col">
                            <img src="" alt="">
                            <div class="packdetail">
                                <a href="{{ route('booking.frontend.create', $package->slug) }}"><h4>{{ $package->title }}</h4></a>
                                <div class="daydet">
                                    <b>{{ $package->price }}</b>
                                </div>
                                <div class="eview-row row no-margin">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> 

   
@endsection
