"use strict";

window.addEventListener("load", bgcolor);
window.addEventListener("change", noScroll);
window.addEventListener("load", navWidth);

var nav = document.getElementById('fixed-nav');
var banner = document.getElementsByClassName('banner');

function bgcolor() {
    if (banner.length === 0) {
        nav.classList.add('green');
    }
    if (nav.classList.contains('green')) {
        $('section:first-of-type').addClass('first');
    }
}

var checkbox = document.getElementById('toggle-menu');
var body = document.getElementsByTagName("BODY")[0];

function noScroll() {
    if (checkbox.checked === true) {
        body.style.overflow = "hidden";
    } else {
        body.style.overflow = "scroll";
    }
}

function navWidth() {
    var nav = document.getElementById('navigation');
    var list = document.getElementsByClassName('navlist');
    var i;
    console.log(list);
    for (i = 0; list.length > i; i++) {
        if (nav.children.length === 1) {
            list[i].classList.add('one');
        }
        if (nav.children.length === 2) {
            list[i].classList.add('two');
        }
        if (nav.children.length === 3) {
            list[i].classList.add('three');
        }
        if (nav.children.length === 4) {
            list[i].classList.add('four');
        }
        if (nav.children.length === 5) {
            list[i].classList.add('five');
        }
        if (nav.children.length === 6) {
            list[i].classList.add('six');
        }
        if (nav.children.length === 7) {
            list[i].classList.add('seven');
        }
        if (nav.children.length === 8) {
            list[i].classList.add('eight');
        }
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






