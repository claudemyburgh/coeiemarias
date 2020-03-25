
import ScrollMagic from 'scrollmagic'
import { TweenlineMax, Back } from 'gsap'


export default class ScrollAnimation
{

    constructor(options) {
        this.options = options
        this.trigger = document.querySelectorAll('.trigger')
        this.controller = new ScrollMagic.Controller()
        this.init()
    }


    init() {
        this.trigger.forEach( (element) => {
            this.tween = new TimelineMax()
                .staggerFrom(element.querySelectorAll('.trigger--element'), 0.85,
                    {
                        y: 200,
                        opacity: 0,
                        ease: Back.easeOut
                    }, 0.15)
            let scroller = new ScrollMagic.Scene({
                triggerElement: element,
                triggerHook: 0.75,
                // duration: '50%',
                reverse: true
            })
            .setTween(this.tween)
            // .addIndicators({
            //     name: "trigger animation",
            //     colorStart: 'deeppink',
            //     colorEnd: 'yellow',
            //     colorTrigger: 'purple'
            // })
            .addTo(this.controller)

        })



    }


}
