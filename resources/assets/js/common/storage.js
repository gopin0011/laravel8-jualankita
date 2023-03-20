export default {

    install(Vue, options) {

        Vue.prototype.$appStorage = {
            getCookie(cname) {
                let name = cname + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for(let i = 0; i <ca.length; i++) {
                  let c = ca[i];
                  while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                  }
                  if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                  }
                }
                return "";
            },
            setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                let expires = "expires="+d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            },
            setToken(t){
                this.setCookie("my_token",btoa(t),1);
            },
            dropToken(){
                document.cookie = "my_token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            },
            getToken(){
                let token = this.getCookie('my_token');
                if(token){
                    return atob(token);
                }else{
                    return "";
                }
            },
            
            setLocal(name,t){
                localStorage.setItem(name, btoa(t));
            },
            dropLocal(name){
                localStorage.removeItem(name);
            },
            getLocal(name){
                let token = localStorage.getItem(name);
                if(token){
                    return atob(token);
                }else{
                    return;
                }
            }
        }
    }
}
