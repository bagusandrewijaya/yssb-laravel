// Initialize Firebase - https://firebase.google.com/docs/web/setup
const config = {
    apiKey: "AIzaSyApA6BRd-0GE613AZOYZzjv_MkM8O1CFxw",
    authDomain: "pushnotification-prod-6fb15.firebaseapp.com",
    projectId: "pushnotification-prod-6fb15",
    storageBucket: "pushnotification-prod-6fb15.firebasestorage.app",
    messagingSenderId: "606178117705",
    appId: "1:606178117705:web:8948fda75940696b1fd798",
    measurementId: "G-2SDZ7NP0CJ"
};
firebase.initializeApp(config);

const messaging = firebase.messaging();

messaging.requestPermission()
    .then(function() {
        return messaging.getToken();
    })
    .then(function(token) {
        // send rest call to add to database
      console.log(token);
    })
    .then(function(response) {
      console.log(response);
        console.log('Token added successfully');
    })
    .catch(function(err) {
        console.error('Error:', err);
    });