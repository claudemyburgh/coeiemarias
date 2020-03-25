
import hoverEffect from './ext/hover-effect'


export default class Destort
{

    constructor(parentElement, firstImage, secondImage, displacementImage) {
        this.parentElement = parentElement
        this.firstImage = firstImage
        this.secondImage = secondImage
        this.displacementImage = displacementImage
        this.init()
    }

    init() {

        new hoverEffect({
                parent: document.querySelector(this.parentElement),
                intensity: Math.random(),
                image1: `img/${this.firstImage}`,
                image2: `img/${this.secondImage}`,
                angle: Math.PI * (Math.random() * 100),
                speedIn: 3,
                displacementImage: `img/${this.displacementImage}`,
            })
    }


}
