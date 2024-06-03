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
            <div class="mb-5">
                <h4>Filter with Category</h4>
                <select id="categorySelect" class="form-control" name="package_id">
                    <option selected>Category</option>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->slug }}" {{ request()->input('category') == $category->slug ? 'selected' : ''  }}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pack-row row">
                @foreach ($packages as $package)
                    <div class="col-md-4">
                        <div class="pac-col">
                            <img src="{{ $package->image }}" alt="">
                            <div class="packdetail">
                                <a href="{{ route('package.detail', $package->slug) }}"><h4>{{ $package->title }}</h4></a>
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
            <div class="d-flex justify-content-end">
                {{ $packages->links() }}
            </div>
        </div>
    </section> 
@endsection

 @push('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#categorySelect').on('change', function () {
                var selectOption = $(this).val();
                var baseUrl = window.location.href.split('?')[0];
                var url = baseUrl + '?category=' + selectOption;
                window.location.href = url;
            })
        })
    </script>
@endpush
