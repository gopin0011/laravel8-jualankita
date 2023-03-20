export default {

    install(Vue, options) {
        Vue.prototype.$store = {
            
        };

        Vue.prototype.$appHelper = {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            },
            nFormatter(num, digits) {
                const lookup = [
                    { value: 1, symbol: "" },
                    { value: 1e3, symbol: "k" },
                    { value: 1e6, symbol: "M" },
                    { value: 1e9, symbol: "B" },
                    { value: 1e12, symbol: "T" },
                    { value: 1e15, symbol: "P" },
                    { value: 1e18, symbol: "E" }
                ];
                const rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
                var item = lookup.slice().reverse().find(function(item) {
                    return num >= item.value;
                });
                return item ? (num / item.value).toFixed(digits).replace(rx, "$1") + item.symbol : "0";
            },
            getParams(param){
                var url_string = window.location.href
                var url = new URL(url_string);
                var c = url.searchParams.get(param);
                if(c){
                    return c;
                }else{
                    return ""
                }
            },
            isMobile(){
                return window.innerWidth <= 922
            },
            catchError(error){
                if (error.response) {
                    // Request made and server responded
                    if(error.response.data.code == 401){
                        toastr.info('Silahkan masuk atau daftar terlebih dahulu')
                    }else{
                        toastr.info(error.response.data.message)
                    }
                    // toastr.info(error.response.data.message)
                } else if (error.request) {
                    // The request was made but no response was received
                    console.log(error.request);
                } else {
                    // Something happened in setting up the request that triggered an Error
                    toastr.info(error.message);
                }
            },
            toLink(link){
                let lang = window.location.pathname.split("/")[1];
                if(lang.toLocaleLowerCase() == 'en'){
                    window.location.href = window.location.protocol+'//'+window.location.host+'/en'+link;
                }else{
                    window.location.href = window.location.protocol+'//'+window.location.host+link;
                }
            },
            simpleLink(link){
                let lang = window.location.pathname.split("/")[1];
                if(lang.toLocaleLowerCase() == 'en'){
                    return window.location.protocol+'//'+window.location.host+'/en'+link;
                }else{
                    return window.location.protocol+'//'+window.location.host+link;
                }
            },
            goBack(){
                return window.history.back();
            },
            translate(id,en){
                let lang = window.location.pathname.split("/")[1];
                if(lang.toLocaleLowerCase() == 'en')
                    return en;
                return id;
            },
            tr(id,en){
                let lang = window.location.pathname.split("/")[1];
                if(lang.toLocaleLowerCase() == 'en')
                    return en;
                return id;
            },
        }
    }
}
