@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <div class="hero-box-area">
            <!-- Hero Slider Area Start -->
            {{-- <div class="hero-area" id="product-preview">
            </div> --}}
            <img src="https://www.toyskingdom.co.id/files/uploads/banner/image/2024/Jun/14/666bb5e16d803/tkd-1920x610px-4-1920x610-resize.jpg?token=03419397b2e345f4b55af81a8fcdcf98" style="width: 100%;">
            {{-- <div class="single-hero-slider-7" style="background: rgb(39, 39, 255)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content-wrap">
                                <div class="hero-text-7">
                                    <h6 class="mb-20">
                                    </h6>
                                    <h3 style="color: rgb(255, 255, 255)">Welcome To</h3>
                                    <h1>Toys4Kids</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
            <!-- Hero Slider Area End -->
        </div>


        <div class="about-us-area section-space--ptb_120">
            <h2 style="text-align:center">Our Product</h2>
            <div class="container">
                <div class="row" id="product-list"></div>
                <div class="row">
                </div>
            </div>
        </div>

    

        
    </div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection
















