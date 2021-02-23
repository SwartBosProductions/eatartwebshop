

// public pages inlog en register button on header animation
// nog afmaken voor de leuk een keer
const btn = document.querySelector('.btn-product-buy');

btn.addEventListener('click', () => {
  btn.classList.add('anim');
  setTimeout(() => {
     btn.classList.remove('anim');
  }, 1200)
})

console.log('animate-btn.js is running')
