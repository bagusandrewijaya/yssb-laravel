import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getMessaging, getToken } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-messaging.js";

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyD4ZJYj51aGktzHM7YCvOGXJCb_sqER-IA",
  authDomain: "hello-notif-63ad4.firebaseapp.com",
  projectId: "hello-notif-63ad4",
  storageBucket: "hello-notif-63ad4.appspot.com",
  messagingSenderId: "852811610870",
  appId: "1:852811610870:web:6d6cc83137a8e6a026cad7",
  measurementId: "G-YERW0QQJ5T"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);

navigator.serviceWorker.register("sw.js").then(registration => {
    getToken(messaging, {
        serviceWorkerRegistration: registration,
        vapidKey: 'BAHKAx_yy3VCUQvFcLwW49dweW9jlHjDC_h46hdQ1RQFkc08gfa5dOp7vR_NmP7bqPnSlUgoxl7jdlVtLuQe08s'
    }).then((currentToken) => {
        if (currentToken) {
            console.log("Token is: " + currentToken);
            // Send the token to your server and update the UI if necessary
            // ...
        } else {
            console.log('No registration token available. Request permission to generate one.');
            // ...
        }
    }).catch((err) => {
        console.error('An error occurred while retrieving token. Please ensure that you have the correct authentication credentials.', err);
        // ...
    });
});
