<template>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab_slider">
                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="product_slider nav_style1">
                            <div class="owl-carousel owl-theme">
                                <div class="item" v-for="i in product.new_arrival" :key="i.id">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img alt="" v-bind:src="'http://dev-jualankita.localhost/storage/uploads/products/'+ i.image_product">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a v-bind:href="'/product/quick-view/' + i.url_product" class="ajax-popup-link"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">name</a></h6>
                                            <div class="product_price">
                                                <span class="price">price</span>
                                                <del>del</del>
                                                <div class="on_sale">
                                                    <span>percecnt% Off</span>
                                                </div>
                                            </div>
                                            <div class="pr_desc">
                                                <p>desc</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                        <div class="product_slider nav_style1">
                            <div class="owl-carousel owl-theme">
                                <div class="item" v-for="i in product.best_seller" :key="i.id">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img alt="" v-bind:src="'http://dev-jualankita.localhost/storage/uploads/products/'+ i.image_product">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a v-bind:href="'/product/quick-view/' + i.url_product" class="ajax-popup-link"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">name</a></h6>
                                            <div class="product_price">
                                                <span class="price">price</span>
                                                <del>del</del>
                                                <div class="on_sale">
                                                    <span>percecnt% Off</span>
                                                </div>
                                            </div>
                                            <div class="pr_desc">
                                                <p>desc</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="flashsale" role="tabpanel" aria-labelledby="flashsale-tab">
                        <div class="product_slider nav_style1">
                            <div class="owl-carousel owl-theme">
                                <div class="item" v-for="i in product.flash_sale" :key="i.id">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <img alt="" v-bind:src="'http://dev-jualankita.localhost/storage/uploads/products/'+ i.image_product">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a v-bind:href="'/product/quick-view/' + i.url_product" class="ajax-popup-link"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">name</a></h6>
                                            <div class="product_price">
                                                <span class="price">price</span>
                                                <del>del</del>
                                                <div class="on_sale">
                                                    <span>percecnt% Off</span>
                                                </div>
                                            </div>
                                            <div class="pr_desc">
                                                <p>desc</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- END SECTION SHOP -->
</template>
<script>
import carousel from 'vue-owl-carousel';
import HomeDataService from "./../../../services/home.service";
export default {
    data() {
        return {
            product: {}
        }
    },
    methods: {
        installMagnificPopup: function(){
            $('.ajax-popup-link').magnificPopup({
                type: 'ajax'
            });
        },
        installOwlCarousel: function(){
            $('.owl-carousel').owlCarousel({
                dots: false,
                nav: true,
                items: 4,
                loop: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 2,
                    },
                    481: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1199: {
                        items: 4,
                    }
                }
            });
        },
    },
    // beforeMount: function(){
    //     HomeDataService.home()
    //     .then((res)=>{
    //         this.product = res.data.data.exclusive_products;
    //     })
    //     .catch((err)=>{
    //         if(err) console.log(err);
    //     });
    // },
    async mounted() {
        var vm = this;
        HomeDataService.home()
        .then((res)=>{
            this.product = res.data.data.exclusive_products;
            vm.product = this.product;
            Vue.nextTick(function(){
                vm.installOwlCarousel();
                vm.installMagnificPopup();
            }.bind(vm));
        })
        .catch((err)=>{
            if(err) console.log(err);
        });
        
        console.log(this.product);
    },    
    // methods: {
    //     getHome: function() {
    //         HomeDataService.home()
    //             .then((response) => {
    //                 console.log(response.data.data.exclusive_products);
    //                 this.product = response.data.data.exclusive_products;
    //             })
    //             .catch((e) => {
    //                 console.log(e);
    //             });
    //     }
    // },
    // beforeMount() {
    //     this.getHome();
    // },
    // mounted() {
    //     HomeDataService.home()
    //             .then((response) => {
    //                 console.log(response.data.data.exclusive_products);
    //                 this.product = response.data.data.exclusive_products;
    //             })
    //             .catch((e) => {
    //                 console.log(e);
    //             });
    // },
}
</script>