import Lottie from './node_modules/vue-lottie/src/lottie.vue';
import * as animationData from './node_modules/vue-lottie/src/assets/pinjump.json';

export default {
    name: 'app',
    components: {
        'lottie': Lottie
    },
    data() {
        return {
            defaultOptions: {animationData: animationData},
            animationSpeed: 1
        }
    },
    methods: {
        handleAnimation: function (anim) {
            this.anim = anim;
        },

        stop: function () {
            this.anim.stop();
        },

        play: function () {
            this.anim.play();
        },

        pause: function () {
            this.anim.pause();
        },

        onSpeedChange: function () {
            this.anim.setSpeed(this.animationSpeed);
        }
    }
}