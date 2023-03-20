<template>
<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Login</h3>
                        </div>
                        <form @submit.prevent="submitLogin()">
                            <div class="form-group">
                                <input type="email" v-model="email" required="" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" v-model="password" name="password" placeholder="Password">
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                    </div>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <ul class="btn-login list_none text-center">
                            <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul>
                        <div class="form-note text-center">Don't Have an Account? <a href="signup.html">Sign up now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
</template>
<script>
import { initFbsdk } from '../../../common/facebook_auth.js'
import { initGoogle } from '../../../common/google_auth.js'
export default {
    data() {
        return {
            showPass:false,
            email:'',
            errEmail:'',
            password:'',
            errPass:'',
            fb_token: localStorage.getItem("fb_token")
        }
    },
    computed:{
        invalidForm(){
            if(this.email && this.password){
                return false
            }else{
                return true
            }
        }
    },
    methods: {
        onSignInGoogle(user) {
            const profile = user.getBasicProfile()
            this.$store.commit("OPEN_LOADING");
            let formData = {
                "email" : profile.getEmail(),
                "google_id" : profile.getId(),
                "name" : profile.getName(),
                "device_id" : "web",
                "firebase_token" : this.fb_token
            }
            this.$store.dispatch("auth/loginGoogle",formData).then(res=>{
                // this.$store.commit("CLOSE_LOADING");
                if(res.data.code == 200){
                    if(res.data.registration_step == null){
                        this.$appHelper.toLink('/auth/setup')
                    }else{
                        toastr.info("Login Berhasil");
                        this.$appHelper.toLink('')
                    }
                }
            })
            .catch(error=>{
                // this.$store.commit("CLOSE_LOADING");
                this.$appHelper.catchError(error);
            })
        },
        onFailureGoogle(err){
            toastr.info(this.$appHelper.tr('Login dengan google dibatalkan','Login with google canceled'));
        },
        loginWithFacebook () {
            window.FB.login(response => {
                let self = this;
                if(response.authResponse){
                    FB.api('/me?fields=id,email,name', function(response) {
                        // self.$store.commit("OPEN_LOADING");
                        let formData = {
                            "email" : response.email,
                            "facebook_id" : response.id,
                            "name" : response.name,
                            "device_id" : "web",
                            "firebase_token" : this.fb_token,
                            "profile_picture" : ""
                        }
                        self.$store.dispatch("auth/loginFB",formData).then(res=>{
                            self.$store.commit("CLOSE_LOADING");
                            if(res.data.code == 200){
                                if(res.data.registration_step == null){
                                    // window.location.href = '/auth/setup';
                                    self.$appHelper.toLink('/auth/setup')
                                }else{
                                    toastr.info(self.$appHelper.tr('Login Berhasil',"Login Success"));
                                    self.$appHelper.toLink('')   
                                }
                            }
                        })
                        .catch(error=>{
                            self.$store.commit("CLOSE_LOADING");
                            self.$appHelper.catchError(error);
                        })
                    });
                }else{
                    toastr.info(this.$appHelper.tr('Pengguna membatalkan login atau tidak sepenuhnya mengotorisasi','User cancelled login or did not fully authorize'))
                }
            },{ scope : 'email' })
        },
        submitLogin(){
            // email valid 
            var mail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,5})$/;
            if(this.email == '' && this.password == ''){
                this.errEmail = this.$appHelper.tr('Email harus diisi','Email is required')
                this.errPass = this.$appHelper.tr('Password harus diisi','Password is required')
            }else if(this.email == ''){
                this.errEmail = this.$appHelper.tr('Email harus diisi','Email is required')
            }else if(mail.test(this.email) == false){
                this.errEmail = this.$appHelper.tr('Format email salah','Email format not valid')
            }else if(this.pass == ''){
                this.errPass = this.$appHelper.tr('Password harus diisi','Password is required')
            }else{
                const data = {
                    email: this.email,
                    password: this.password,
                    device_id : "web",
                    firebase_token : this.fb_token
                }
                this.$store.commit("OPEN_LOADING");
                this.$store.dispatch("auth/login",data).then(res=>{
                    this.$store.commit("CLOSE_LOADING");
                    if(res.data.code == 200){
                        if(res.data.registration_step == null){
                            // window.location.href = '/auth/setup';
                            this.$appHelper.toLink('/auth/setup')
                        }else{
                            toastr.info("Login Berhasil");
                            this.$appHelper.toLink('')
                        }
                    }
                })
                .catch(error=>{
                    this.$store.commit("CLOSE_LOADING");
                    if(error.response){
                        if(error.response.data.code == 401){
                            toastr.info(error.response.data.message)
                        }else if(error.response.data.code == 422){
                            for (let i = 0; i < Object.entries(error.response.data.data).length; i++) {
                                let first = Object.keys(error.response.data.data)[i]
                                toastr.info(error.response.data.data[first][0]);
                            }
                        }
                    }else{
                        toastr.info("USER "+this.$store.state.config.errorAction.errorConnection)
                    }
                })
            }
        },
        initFunc(){
            gapi.signin2.render('google-signin-button', {
                'width': 35,
                'height': 35,
                'onsuccess': this.onSignInGoogle,
                'onfailure': this.onFailureGoogle
            });
        },
        initClient () {
            initGoogle()
            .then(() => {
                this.initFunc()
            })
        }
    },
    mounted(){
        initFbsdk();
        this.initClient();    
    }
}
</script>