import Echo from "laravel-echo"

window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

console.log(window.Echo.channel('order'));

window.Echo.channel('order')
.listen('.ShippingUpdated', (event) => {
    console.log(event);
    console.log("Fired!");
});