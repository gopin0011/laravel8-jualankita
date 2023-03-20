<div class="ajax_quick_view">
	<div class="row">
        
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
          <div class="product-image">
                <div class="product_img_box">
                    <img id="product_img" src="{{asset('storage/uploads/products/'.$product->image_product)}}" data-zoom-image="{{asset('storage/uploads/products/'.$product->image_product)}}" alt="{{asset('storage/uploads/products/'.$product->image_product)}}" />
                </div>
                @if(count($product->variantImage)>1)
                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                    @foreach($product->variantImage as $item)
                    <div class="item">
                        <a href="#" class="product_gallery_item @if($loop->first) active @endif" data-image="{{asset('storage/uploads/variant/'.$item->img_file)}}" data-zoom-image="{{asset('storage/uploads/zoom/'.$item->img_file)}}">
                            <img src="{{asset('storage/uploads/thumb/'.$item->img_file)}}" alt="$item->img_file" />
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="pr_detail">
                <div class="product_description">
                    <h4 class="product_title"><a href="#">{{$product->name_product}}</a></h4>
                    <div class="product_price">
                        <span class="price">@if($product->flash_sale_price > 0) @money($product->flash_sale_price) @else @money($product->price_product) @endif</span>
                        @if($product->flash_sale == 1 && $product->flash_sale_price > 0) 
                            <del>@money($product->price_product+$product->discount_price)</del>
                            <div class="on_sale">
                                <span>{{round($product->flash_sale_price/$product->price_product*100)}}% Off</span>
                            </div>
                        @else
                            @if($product->discount_price > 0)
                                <del>@money($product->price_product+$product->discount_price)</del>
                                <div class="on_sale">
                                    <span>{{round($product->discount_price/$product->price_product*100)}}% Off</span>
                                </div>
                            @endif
                        @endif
                    </div>
                    <!-- <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width:80%"></div>
                        </div>
                        <span class="rating_num">(21)</span>
                    </div> -->
                    <div class="pr_desc">
                        <p>{{$product->short_content}}</p>
                    </div>
                    <div class="product_sort_info">
                        <ul>
                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                        </ul>
                    </div>
                    <div class="pr_switch_wrap">
                        <!-- <span class="switch_lable">Color</span> -->
                        <div class="product_color_switch btn-group btn-group-justified">
                            <!-- <span class="active" data-color="#87554B"></span>
                            <span data-color="#333333"></span>
                            <span data-color="#DA323F"></span> -->
                            @foreach($product->productDetail as $variant)
                            <button class="btn btn-sm btn-fill-out" type="button"> {{$variant->productAttribute->attribute_value}}</button>
                            @endforeach
                        </div>
                    </div>
                    <!-- <div class="pr_switch_wrap">
                        <span class="switch_lable">Size</span>
                        <div class="product_size_switch">
                            <span>xs</span>
                            <span>s</span>
                            <span>m</span>
                            <span>l</span>
                            <span>xl</span>
                        </div>
                    </div> -->
                </div>
                <hr />
                <div class="btn-group">
                    
                </div>
                <div class="cart_extra">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <div class="cart_btn">
                        <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                        <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                    </div>
                </div>
                <hr />
                <ul class="product-meta">
                    <li>SKU: <a href="#">BE45VGRT</a></li>
                    <li>Category: <a href="#">Clothing</a></li>
                    <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                </ul>
                
                <div class="product_share">
                    <span>Share:</span>
                    <ul class="social_icons">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/scripts.js')}}"></script>
