import * as firebase from 'firebase/app';
require('firebase/messaging');

// Change with your own Sender ID
const initializedFirebaseApp = firebase.initializeApp({
    messagingSenderId: '165414443557' 
});
let messaging = null;

if (firebase.messaging.isSupported()) {
    messaging = initializedFirebaseApp.messaging();

    // Change with your own VapidKey
    messaging.usePublicVapidKey(
        'BIkbVznGIizZfLd8PNltE0cQRJd2FCl59ZhumWrREG_ITTk1MpIdMt7l76z9FCEx9udeAELPHfPT7s6Dhqt4vZI'
    );

    messaging.onMessage((payload) => {
        const notificationTitle = payload.notification.title;
        const notificationOptions = {
            body: payload.notification.body,
            icon: '/android-chrome-144x144.png',
        }; // Your notification icon in /public directory

        if (!('Notification' in window)) {
            console.log('This browser does not support system notifications');
        } else if (Notification.permission === 'granted') {
            let notification = new Notification(notificationTitle,notificationOptions);
            notification.onclick = function(event) {
                event.preventDefault();
                window.open(payload.notification.click_action , '_blank');
                notification.close();
            };
        }
    });
}

export { messaging };