import Vue from 'vue'
import Vuex from 'vuex'

import state from "./state"
import getters from "./getters"
import mutations from "./mutations"
// import actions from "./actions"
import storage from "../common/storage"

Vue.use(storage)
Vue.use(Vuex)

// import moduleHome from './home/index.js'
// import moduleSearch from './search/index.js'
// import moduleCart from './cart/index.js'
// import modulePromo from './promo/index.js'
// import moduleAddress from './address/index.js'
// import moduleAuth from './auth/index.js'
// import moduleWishlist from './wishlist/index.js'
// import moduleBrand from './brand/index.js'
// import moduleFlashsale from './flashsale/index.js'
// import moduleCheckout from './checkout/index.js'

// import moduleUserProfile from './user_profile/index.js'
// import moduleUserTrans from './user_trans/index.js'
// import moduleUserReview from './user_review/index.js'
// import moduleUserWallet from './user_wallet/index.js'

// import moduleSellerProfile from './seller_profile/index.js'
// import moduleSellerWallet from './seller_wallet/index.js'
// import moduleSellerProduct from './seller_product/index.js'
// import moduleSellerVoucher from './seller_voucher/index.js'
// import moduleSellerOrder from './seller_order/index.js'
// import moduleSellerReview from './seller_review/index.js'
// import moduleSellerDashboard from './seller_dashboard/index.js'

export default new Vuex.Store({
    getters,
    mutations,
    state,
    // actions,
    // modules: {
    //     auth: moduleAuth,
    //     home: moduleHome,
    //     search: moduleSearch,
    //     cart: moduleCart,
    //     promo: modulePromo,
    //     wishlist: moduleWishlist,
    //     address: moduleAddress,
    //     brand: moduleBrand,
    //     flashsale: moduleFlashsale,
    //     checkout: moduleCheckout,
        
    //     // user
    //     userProfile: moduleUserProfile,
    //     userTrans: moduleUserTrans,
    //     userReview: moduleUserReview,
    //     userWallet: moduleUserWallet,
        
    //     // seller
    //     sellerProfile: moduleSellerProfile,
    //     sellerWallet: moduleSellerWallet,
    //     sellerProduct: moduleSellerProduct,
    //     sellerVoucher: moduleSellerVoucher,
    //     sellerOrder: moduleSellerOrder,
    //     sellerReview: moduleSellerReview,
    //     sellerDashboard: moduleSellerDashboard
    // },
})
