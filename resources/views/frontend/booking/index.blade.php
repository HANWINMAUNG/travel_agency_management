@extends('frontend.layouts.app')
@section('package','#08703A')
@section('content')

     <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Booking</h2>
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
                Primary Info
            </h4>
            <div class="mt-3">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose your package...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Number Of People</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Note</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Phone Number</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Date of travel</label>
                            <input type="date" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <button class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </section> 

   
@endsection
