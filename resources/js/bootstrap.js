
try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

const luna =  require('luna-sass/Framework/js/luna.js');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// var imagesLoaded = require('imagesloaded');

require('animation.gsap');
require('debug.addIndicators');

import Swiper from 'swiper'

// import Preloader from './preloader'
import Parallax from './parallax'
import ScrollAnimation from './scrollanimation'
import Destort from './destort'
import ScrollMagic from 'scrollmagic'



// import PlayDestort from './ext/playDestort'


(function($, window, document){

    'use strict';
    require('fslightbox')

    $(document).Luna();

    // new Preloader()
    new Parallax({debug: true})
    new ScrollAnimation({debug: false})



    let list = [
        {"parent": "#parallax", "first" : "kithen.jpg", "second": "kithen-2.jpg", "map": "map-wood-1.jpg"},
        {"parent": "#image-1", "first" : "deskandwall-2.jpg", "second": "deskandwall-1.jpg", "map": "map-wood-2.jpg"},
        {"parent": "#image-2", "first" : "modern-house-1.jpg", "second": "modern-house-2.jpg", "map": "map-wood-1.jpg"},
        {"parent": "#image-3", "first" : "outback-1.jpg", "second": "outback-2.jpg", "map": "map-wood-2.jpg"},
    ]

    if(typeof list !== undefined) {

        for (var key of Object.keys(list)) {
            if (document.querySelector(list[key].parent)) {
               new Destort(list[key].parent, list[key].first, list[key].second, list[key].map)
            }
        }
    }

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 15,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        dynamicBullets: true,
        clickable: true
      },
      zoom: {
        maxRatio: 5,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    // new PlayDestort();


})(jQuery, window, document);

