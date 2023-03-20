<!-- START SECTION SHOP -->
<div class="section small_pt pb_20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>Best Selling</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider product_list carousel_slider owl-carousel owl-theme nav_style3" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "3"}}'>
                    @foreach($products->chunk(2) as $three)
                    <div class="item">
                        @foreach($three as $item)
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="{{asset('storage/uploads/products/'.$item->image_product)}}" alt="{{$item->name_product}}">
                                </a>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">{{$item->name_product}}</a></h6>
                                <div class="product_price">
                                    <span class="price">@money($item->price_product)</span>
                                    @if($item->discount_price > 0)
                                    <del>@convert($item->price_product+$item->discount_price)</del>
                                    <div class="on_sale">
                                        <span>{{($item->discount_price/$item->price_product*100)}}% Off</span>
                                    </div>
                                    @endif
                                </div>
                                <!-- <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->