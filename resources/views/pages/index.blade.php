@extends('layouts.default')
@section('title')Jualankita @endsection
@section('desc')Belanja di Jualankita dengan aneka kebutuhan untuk yang butuh cepat @endsection
@section('image'){{ asset('assets/images/favicon.png') }}@endsection
@push('style')
    
@endpush
@section('content')

@include("components.banner", ["banner_card" => $banner_card])

<div class="main_content">
    @include("pages.home.exclusive-product", ["products" => $exclusive_products])

    <!-- START SECTION BANNER --> 
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single_banner">
                        <img src="{{asset('storage/uploads/sliders/png_20220105_224436_0000.png')}}" alt="png_20220105_224436_0000.png">
                        <div class="single_banner_info">
                            <!-- <h5 class="single_bn_title1">Super Sale</h5> -->
                            <!-- <h3 class="single_bn_title">New Collection</h3> -->
                            <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_banner">
                        <img src="{{asset('storage/uploads/sliders/WhatsApp_Image_2020-09-25_at_11_23_39.jpeg')}}" alt="WhatsApp_Image_2020-09-25_at_11_23_39.jpeg">
                        <div class="single_banner_info">
                            <!-- <h3 class="single_bn_title">New Season</h3> -->
                            <!-- <h4 class="single_bn_title1">Sale 40% Off</h4> -->
                            <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER --> 
    
    @if(count($todays_products) >= 4)
        @include("pages.home.deal-of-days", ["products" => $todays_products])
    @endif

    @include("pages.home.bestseller-product", ["products" => $bestselling_products])

    <!-- START SECTION BANNER --> 
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img src="{{asset('storage/uploads/sliders/garden-1.jpg')}}" alt="garden-1.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img src="{{asset('storage/uploads/sliders/listrik.jpg')}}" alt="listrik.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img src="{{asset('storage/uploads/sliders/wood-working-302.jpg')}}" alt="wood-working-302.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER --> 

    @include("pages.home.featured-product", ["products" => $featured_products])

    <!-- START SECTION CLIENT LOGO -->
    <!-- <div class="section small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2>Our Brands</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo1.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo2.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo3.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo4.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo5.png" alt="cl_logo"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cl_logo">
                                <img src="assets/images/cl_logo6.png" alt="cl_logo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END SECTION CLIENT LOGO -->

    
        
    


    @include("pages.subscribe")
</div>
<!-- END MAIN CONTENT -->    
@endsection
@push('script')
<script>
    
</script>    
@endpush