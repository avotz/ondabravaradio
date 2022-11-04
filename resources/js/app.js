console.log('cargado')
import './simpleModal.js';
import './simpleModalPromotion.js';
import Glide from '@glidejs/glide'

new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    autoplay:3000
  }).mount();
