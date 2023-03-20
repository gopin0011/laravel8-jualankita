const state = {
    // main state
    category: [],
    autoComplate:[],
    notif:0,
    loading:false,
    blocking:false,

    // state mobile
    isSearchMobile:false,
    searchCategory:'',
    searchStore:'',
    searchOfficial:'',

    // store
    navSwitch:true,

    // main var
    config:{
        noImage: '/source/img/components/attribute/no-image.jpg',
        errorAction:{
            errorConnection:'Error Connection To Server',
        }
    }
}

export default state