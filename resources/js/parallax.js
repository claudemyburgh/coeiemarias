import ScrollMagic from 'scrollmagic'
import { TimelineMax, Linear } from 'gsap'


export default class Parallax
{

    constructor(options) {
        this.options = options
        this.parallax = document.querySelectorAll('.parallax')
        this.controller = new ScrollMagic.Controller()
        this.init()
    }

    init() {
        if (this.parallax.length) {
            this.parallax.forEach((element) => {
                let scroller = new ScrollMagic.Scene({
                    triggerElement: element,
                    triggerHook: 1,
                    duration: '200%',
                    reverse: true
                })
                .setTween(element.querySelectorAll('.parallax--image'), {y: "30%", ease: Linear.easeNone})
                // .addIndicators({
                //     name: "parallax",
                // })
                .addTo(this.controller);

            })
        }
    }

}
