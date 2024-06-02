@extends('frontend.layouts.app')
@section('package','#08703A')
@section('content')

     <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Payment</h2>
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
            <h4>
                Payment State
            </h4>
            <hr>
            <div class="mt-2">
                <div class="mb-5">
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Package Type</h6>
                        <span>4 Nights & 5 Days Package for 2 person</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Number Of Person</h6>
                        <span>2</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Extra Person</h6>
                        <span>2</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Phone Number</h6>
                        <span>09395629357239</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Email Address</h6>
                        <span>test@gmail.com</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Booking Date</h6>
                        <span>01-01-1995</span>
                    </div>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Travel Date</h6>
                        <span>01-01-2023</span>
                    </div>
                    <hr>
                    <div class="pb-2 d-flex justify-content-between">
                        <h6>Total Ammount</h6>
                        <span>3000000 MMK</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4>
                Payment
            </h4>
            <hr>
            <div class="mt-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Account Number</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Amount</label>
                            <input type="text" class="form-control" id="inputPassword4" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <button class="btn btn-secondary w-100">Cancel</button>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </section> 

   
@endsection
