@extends('layouts/client')
@section('clientContent')

<!-- Image slider -->
<<<<<<< HEAD
<!-- <div id="slides" class="carousel slide" data-ride="carousel">
=======
<div id="slides" class="carousel slide" data-ride="carousel">
>>>>>>> 1c8ae13 (create api order detail)
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="{{ asset('images/banner/surface-cLTHKmQS0zI-unsplash.jpg') }}" style="height:400px; object-fit: cover;" alt="">
<<<<<<< HEAD
            <div class="carousel-caption">
                <h1 class="display-2">Welcome</h1>
                <h3>Lets take a tour !</h3>
                <button type="button" class="btn btn-outline-light btn-lg">Lets Go</button>
            </div>
=======
            <!-- <div class="carousel-caption">
                <h1 class="display-2">Welcome</h1>
                <h3>Lets take a tour !</h3>
                <button type="button" class="btn btn-outline-light btn-lg">Lets Go</button>
            </div> -->
>>>>>>> 1c8ae13 (create api order detail)
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/microsoft-edge-FAaz8lkinzs-unsplash.jpg') }}" style="height:400px; object-fit: cover;" alt="">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/windows-wYTd-B7BdoQ-unsplash.jpg') }}" style="height:400px; object-fit: cover;" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
<<<<<<< HEAD
</div> -->
=======
</div>
>>>>>>> 1c8ae13 (create api order detail)
<!-- end_image_slider -->

<div class="ml-auto mt-5 mb-5">
    <div class="bg order-1 order-md-2" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.R5QWIA8_nZ.webp)"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="d-flex">
                        <img src="{{ asset('images/banner/logo.png') }}" style="width: 70px;" alt="">
                        <h3 class="ml-2 pt-3"><b>{{ __('Sign in') }}</b></h3>
                    </div>
<<<<<<< HEAD
                    <p class="mb-4">{{ __('Welcome to Toto Shop !') }}</p>
=======
                    <p class="mb-4">{{ __('Welcome to Bao Phat Smart Devices !') }}</p>
>>>>>>> 1c8ae13 (create api order detail)
                    @include('layouts/flash-message')
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
                        </div>
                        <div class="form-group last" >
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control" placeholder="{{ __('Your Password') }}" id="password">
                        </div>
                        <div class="d-flex mb-2 align-items-center" >
                            <label class="control control--checkbox mb-0" ><span class="caption">{{ __('Remember me') }}</span>
                                <input type="checkbox" name="remember" style="background-color: #6C4A4A;" />
                                <!-- <div class="control__indicator"></div> -->
                            </label>
                            <span class="ml-auto"><a href="{{ route('forgotPassword') }}" class="forgot-pass" style="color: #6C4A4A;">{{ __('Forgot password ?') }}</a></span>
                        </div>
                        <div class="col-md-12 p-0 mt-4">
                            <input type="submit" value="{{ __('Sign in') }}" class="btn btn-block btn-primary border-0 p-3" style="background-color: #6C4A4A;">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection