"use strict";

window.addEventListener("load", bgcolor);
// window.addEventListener("load", emptyEvents);

var nav = document.getElementById('fixed-nav');
var banner = document.getElementsByClassName('banner');

function bgcolor() {
    if(banner.length === 0){
        nav.classList.add('green');
    }
    if(nav.classList.contains('green')){
        $('section:first-of-type').addClass('first');
    }
}
//
// function emptyEvents(){
//     var events = document.getElementsByClassName('tribe-events-calendar-list');
//     var content = events[0];
//     var children = content.childNodes.length;
//     if(children <= 1){
//         alert('der er desværre ingen arrangementer!');
//     }
// }






