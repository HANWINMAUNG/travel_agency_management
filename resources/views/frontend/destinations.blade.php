@extends('frontend.layouts.app')
@section('destinations','#08703A')
@section('content')

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Travel Destinations</h2>
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Our Destinations</li>
                </ul>
            </div>
        </div>
    </div>

     <!-- ******************** Travel Destination Starts Here ******************* -->
    
    <div class="travel-destination container-fluid">
        <div class="container">
            
            <div class="destination-row row">
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d1.jpg" alt="">
                       <div class="layycover">
                           <h4>Brazil <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d2.jpg" alt="">
                       <div class="layycover">
                           <h4>Malaysia <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d3.jpg" alt="">
                       <div class="layycover">
                           <h4>Sri Lanka <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d4.jpg" alt="">
                       <div class="layycover">
                           <h4>Canada <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d3.jpg" alt="">
                       <div class="layycover">
                           <h4>Vietnam <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d1.jpg" alt="">
                       <div class="layycover">
                           <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d3.jpg" alt="">
                       <div class="layycover">
                           <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
                <div class="col-md-3 descol">
                   <div class="destcol">
                       <img src="assets/images/destination/d4.jpg" alt="">
                       <div class="layycover">
                           <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
