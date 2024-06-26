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
                   <h2 style="color:#08703A;">{{ $package->title }}</h2>
                </div>
                <div class="col-md-4">
                   <p><span class="h5">Price:</span>{{ $package->price }}<span style="color:#08703A;">MMK</span></p>
                   <p><span class="h5">Quantity:</span>{{ $package->quantity }}</p>
                </div>
                <h2 style="color:#08703A;">Description</h2> 
                <p>
                    {{ $package->description }}
                </p>
                <h2 style="color:#08703A;">Summary</h2> 
                <p>
                    {{ $package->summary }}
                </p>
                
                <div class="mt-3">
                    <a href="{{ route('booking.frontend.create', $package->slug) }}" class="btn btn-success py-2 px-3 rounded text-white my-1">Booking Now</a>
                </div>
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
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="row team-row">
                            @foreach ($cities as $city)
                                <div class=" col-md-3">
                                    <div class="single-usr">
                                        <img src="{{asset('frontend/assets/images/team/team-memb1.jpg')}}" alt="" style="width:262px;height:287px;padding:px;object-fit:contain;" class="border border-dark w-full ">
                                        <div class="det-o">
                                            <h4>{{ $city->title }}</h4>
                                            <p class="text-white">{{ $city->summary }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>              
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> 
        </div>
    </section>
   
@endsection
@push('script')
<script type="text/javascript">
     const swiper = new Swiper('.swiper', {
                // Optional parameters
               
                loop: true,

                

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

               
                });

</script>
@endpush
