<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide light_arrow" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($banner_card as $item)
                        <div class="carousel-item @if ($loop->first) active @endif background_bg" data-img-src="{{ asset('storage/uploads/sliders/'.$item->image_slider) }}">
                            <div class="banner_slide_content banner_content_inner">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <!-- <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">{{$item->alt_slider}}</h5> -->
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">{{$item->text_slider}}</h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ol class="carousel-indicators indicators_style1">
                    @foreach($banner_card as $item)
                        <li data-target="#carouselExampleControls" data-slide-to="{{$loop->index}}" @if ($loop->first) class="active" @endif></li>
                    @endforeach
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BANNER -->