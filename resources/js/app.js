import './bootstrap';
import '../css/app.css';
import '../css/mystyle.css';
import toggleinscriptions from './toggleinscriptions.js';
import scrollTop from './scrollTop';
import Alpine from 'alpinejs'
import AOS from 'aos';
import 'aos/dist/aos.css';


AOS.init({
    duration: 800,
    // once: true

});

window.Alpine = Alpine
Alpine.data('toggleinscriptions', toggleinscriptions)
Alpine.data('scrollTop', scrollTop)

Alpine.start()