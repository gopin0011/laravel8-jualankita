var firebaseConfig = {
    apiKey: process.env.MIX_FB_API_FIREBASE,
    authDomain: process.env.MIX_FB_AUTH_DOMAIN,
    projectId: process.env.MIX_FB_PROJECT_ID,
    storageBucket: process.env.MIX_FB_STORAGE_BUCKET,
    messagingSenderId: process.env.MIX_FB_MESSAGING_SENDER_ID,
    appId: process.env.MIX_FB_APP_ID
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.onMessage(function({data:{body,title}}){
    new Notification(title, {body});
});