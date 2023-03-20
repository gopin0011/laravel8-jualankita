const mutations = {
    // main mutations
    SET_CATEGORY(state, data) {
        state.category = data;
    },
    SET_AUTOCOMPLATE(state, data) {
        state.autoComplate = data;
    },
    SET_NOTIF(state, data) {
        state.notif = data;
    },
    TOGGLE_SEARCHMOBILE(state) {
        state.isSearchMobile = !state.isSearchMobile;
        if(state.isSearchMobile){
            document.body.classList.add('stop-scroll');
        }else{
            document.body.classList.remove('stop-scroll');
        }
    },
    SET_SEARCHCATEGORY(state,data){
        state.searchCategory = data
    },
    SET_SEARCHSTORE(state,data){
        state.searchStore = data
    },
    SET_SEARCHOFFICIAL(state,data){
        state.searchOfficial = data
    },
    OPEN_LOADING(state) {
        state.loading = true;
    },
    CLOSE_LOADING(state) {
        state.loading = false;
    },
    // for blocking
    TOGGLE_BLOCKING(state, data) {
        state.blocking = data;
    },
    // navigation
    TOGGLE_NAVSWITCH(state){
        state.navSwitch = !state.navSwitch
    }
}

export default mutations