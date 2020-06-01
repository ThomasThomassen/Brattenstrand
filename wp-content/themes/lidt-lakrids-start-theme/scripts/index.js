"use strict";

window.addEventListener("load", bgcolor);

var nav = document.getElementById('fixed-nav');
var banner = document.getElementsByClassName('banner');

function bgcolor() {
    if(banner.length === 0){
        nav.classList.add('green');
    }
}


// window.addEventListener("load", createNav);
//
// function createNav () {
//     var nav = document.getElementsByClassName('nav-title');
//     var section = document.getElementById('sectionNav');
//     if(nav.length > 0){
//         section.insertAdjacentHTML( 'afterbegin', '<nav id="asideNav">\n' +
//             '<ul id="navigation">\n' +
//             '\n' +
//             '</ul>\n' +
//             '</nav>' );
//     }
// }






