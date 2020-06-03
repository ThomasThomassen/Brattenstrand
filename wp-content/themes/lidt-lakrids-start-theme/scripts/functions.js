"use strict";

jQuery(document).ready(function () {
    if ($('#navigation').length) {
        let navigation = [];
        $(".nav-title").each(function () {
            let heading = $(this).text();
            let anchor = slugify(heading);
            $(this).attr("id", anchor);
            navigation.push({heading: heading, anchor: anchor});
        });
        $.each(navigation, function (i, v) {
            $("ul#navigation").append("<li class='navlist'><a href='#" + v.anchor + "' class='link'>" + v.heading + "</a></li>");
        });

        function slugify(string) {
            const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
            const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
            const p = new RegExp(a.split('').join('|'), 'g')
            return string.toString().toLowerCase()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
                .replace(/&/g, '-and-') // Replace & with 'and'
                .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                .replace(/\-\-+/g, '-') // Replace multiple - with single -
                .replace(/^-+/, '') // Trim - from start of text
                .replace(/-+$/, '') // Trim - from end of text
        }

        $('main > .aside').wrapAll('<aside class="articles"></aside>');
        $('main > .articles, #asideNav').wrapAll('<section class="content" id="sectionNav"><div class="container"><div class="content"></div></div></div></section>');
        $('li:first-of-type').addClass('active');


        var navPoint = document.querySelectorAll(".nav-title");
        var navPoints = {};
        var i;

        Array.prototype.forEach.call(navPoint, function (e) {
                navPoints[e.id] = e.offsetTop;
        });

    }

    window.onscroll = function () {
        var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

        for (i in navPoints) {
            if (navPoints[i] < scrollPosition - (500) && window.innerWidth > 768 || navPoints[i] < scrollPosition - (1000) && window.innerWidth < 768) {
                $('ul').find('.active').removeClass('active');
                $('li').find('.link[href*=' + i + ']').parent().addClass('active');
            }
        }
        pageScrolled();
    }
});

function pageScrolled() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById('top-nav').classList.add('nav-scrolled');
        document.getElementById('burger').classList.add('nav-scrolled');
    } else {
        document.getElementById('top-nav').classList.remove('nav-scrolled');
        document.getElementById('burger').classList.remove('nav-scrolled');
    }
}