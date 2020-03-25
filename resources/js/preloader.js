
import { TimelineMax, TweenMax, Power4 } from 'gsap'

export default class Preloader {

    constructor() {
        this.loadedCount = 0
        this.imagesToLoad = $('.has-image').length
        this.loadingProgress = 0
        this.tween()
        this.checkLoadedImages()
    }

    tween() {
        this.progressTimeLine = new TimelineMax({
            paused: true,
            onUpdate: () =>{
                this.loadingProgress = Math.round(Math.ceil(this.progressTimeLine.progress() * 100))
                $('.progress-circle')
                $('.txt-perc').text(this.loadingProgress + '%')
            },
            onComplete: () => {
                this.tween2()
            }
        }).to('.progress span', 1, {
            width: 100,
            ease: Linear.easeNone
        })
    }

    tween2() {
        this.tweener = new TimelineMax().to('.progress', 0.2, {
            y: 100,
            autoAlpha: 0,
            ease: Back.easeIn
        })
        .to('.txt-perc', 0.2, {
            y: 100,
            autoAlpha: 0,
            ease: Back.easeIn
        })
        .set('body', {
            className: '-=is-loading',
            onComplete: () =>{

            }
        })
        .staggerTo('.preloader', 0.5, {
            y: '180%',
            ease: Power4.easeInOut
        }, 0.15)
        .delay(0.25)
        .set('.preloader', {
            className: '+=is-hidden'
        })
    }

    checkLoadedImages() {
        if (this.imagesToLoad) {
            $('.has-image')
                .imagesLoaded({background: true})
                .progress(( instance, image ) => {
                    this.loadProgress()
                })
        }else {
            this.tween2()
            $('.txt-perc').text('100%')
        }
    }


    loadProgress(instance, images) {
        this.loadedCount++
        this.loadingProgress = (this.loadedCount / this.imagesToLoad)
        this.maxTween = TweenMax.to(this.progressTimeLine, 0.5, {
            progress: this.loadingProgress,
            ease: Linear.easeNone
        })
    }








}
