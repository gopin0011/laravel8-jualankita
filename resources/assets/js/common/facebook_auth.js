var appID =  process.env.MIX_APPID_FB;
export const initFbsdk = () => {
    return new Promise(resolve => {
        window.fbAsyncInit = function() {
            FB.init({
                appId      : appID,
                cookie     : true,  // enable cookies to allow the server to access the session
                xfbml      : true,  // parse social plugins on this page
                version    : 'v13.0' // use graph api version 2.8
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    })
}