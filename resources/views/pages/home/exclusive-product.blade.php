<!-- START SECTION SHOP -->
<div class="section small_pb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2>Exclusive Products</h2>
                    </div>
                    <div class="tab-style2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tabmenubar" aria-expanded="false"> 
                            <span class="ion-android-menu"></span>
                        </button>
                        <ul class="nav nav-tabs justify-content-center justify-content-md-end" id="tabmenubar" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="flashsale-tab" data-toggle="tab" href="#flashsale" role="tab" aria-controls="flashsale" aria-selected="false">Flash Sale</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Special Offer</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab_slider">
                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach($products["new_arrival"] as $item)
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{asset('storage/uploads/products/'.$item->image_product)}}" alt="{{$item->image_product}}">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="{{route('get.product.quickView',['slug' => $item->url_product])}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">{{$item->name_product}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">@money($item->price_product)</span>
                                            @if($item->discount_price > 0)
                                            <del>@money($item->price_product+$item->discount_price)</del>
                                            <div class="on_sale">
                                                <span>{{round($item->discount_price/$item->price_product*100)}}% Off</span>
                                            </div>
                                            @endif
                                        </div>
                                        <!-- <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div> -->
                                        <div class="pr_desc">
                                            <p>{{$item->short_content}}</p>
                                        </div>
                                        <!-- <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach($products["best_seller"] as $item)
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{asset('storage/uploads/products/'.$item->image_product)}}" alt="{{$item->image_product}}">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="{{route('get.product.quickView',['slug' => $item->url_product])}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">{{$item->name_product}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">@money($item->price_product)</span>
                                            @if($item->discount_price > 0)
                                            <del>@money($item->price_product+$item->discount_price)</del>
                                            <div class="on_sale">
                                                <span>{{round($item->discount_price/$item->price_product*100)}}% Off</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="pr_desc">
                                            <p>{{$item->short_content}}</p>
                                        </div>
                                        <!-- <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#B5B6BB"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="flashsale" role="tabpanel" aria-labelledby="flashsale-tab">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            @foreach($products["flash_sale"] as $item)
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="{{asset('storage/uploads/products/'.$item->image_product)}}" alt="{{$item->image_product}}">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="{{route('get.product.quickView',['slug' => $item->url_product])}}" class="ajax-popup"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">{{$item->name_product}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">@money($item->flash_sale_price)</span>
                                            @if($item->flash_sale_price > 0)
                                            <del>@money($item->price_product)</del>
                                            <div class="on_sale">
                                                <span>{{round($item->flash_sale_price/$item->price_product*100)}}% Off</span>
                                            </div>
                                            @endif
                                        </div>
                                        <!-- <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div> -->
                                        <div class="pr_desc">
                                            <p>{{$item->short_content}}</p>
                                        </div>
                                        <!-- <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#5FB7D4"></span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- END SECTION SHOP -->