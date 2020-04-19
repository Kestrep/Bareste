/* Burger */
const burger = document.querySelector('.burger');


burger.addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('#' + this.dataset.target).classList.toggle('active');
    document.querySelector('body').classList.toggle('menu-active')
})

/* Display flyer Thing */
const cards = document.querySelectorAll('.card');
// const flyerContainer = document.querySelector('#flyer-container');
const flyer = document.querySelector('.flyer');

for (let i = 0; i < cards.length; i++) {
    const element = cards[i];

    element.addEventListener('click', function() {
        flyer.style.maxHeight = '0px';
        cards.forEach(card => {
            card.style.marginBottom = '0px';
            card.classList.remove('active');
            flyer.style.overflow = 'hidden';
        }) 

        const cardBottom = this.offsetTop + this.offsetHeight;
        this.classList.add('active');
        
        const flyer_info = JSON.parse(this.dataset.flyer);
        
        flyer.querySelector('h1').innerHTML = flyer_info.flyer_title;
        flyer.querySelector('.abstract').innerHTML = flyer_info.flyer_content;
        flyer.querySelector('img').setAttribute('src', flyer_info.img_url)
        flyer.querySelector('img').setAttribute('alt', flyer_info.img_alt)
        flyer.querySelector('a').setAttribute('href', flyer_info.flyer_link)

        // console.log(window.getComputedStyle(flyer).marginBottom)
        
        flyer.style.maxHeight = flyer.scrollHeight + 45 + 'px';
        flyer.style.overflow = 'visible';
        this.style.marginBottom = flyer.scrollHeight + 45 + 'px';
        flyer.style.top = cardBottom + 'px';

        // console.log(flyer.scrollTop)
        this.scrollIntoView(true);
    })
}

// Parallax Effect On the firt section

const parallaxElements = document.querySelectorAll('.parallax');

window.addEventListener('scroll', function() {
    for (let i = 0; i < parallaxElements.length; i++) {
        const element = parallaxElements[i];

        const MAX_SCALE = 1.5
        let perc = window.scrollY / window.innerHeight

        if(perc < 0.7) {
            element.style.scale = 1 + (MAX_SCALE - 1) * perc;
        }
    }
})

// Parallax with border

const borders = document.querySelectorAll('.img-right-top, .img-left-top, .img-left-bottom, .img-right-bottom');
window.addEventListener('scroll', function() {
    for (let i = 0; i < borders.length; i++) {
        const border = borders[i];
        const borderTop = border.offsetTop + 30;
        const borderBottom = border.offsetTop + border.offsetHeight - 30;

        const windowTop = window.scrollY;
        const windowBottom = window.scrollY + window.innerHeight;

        if(borderBottom > windowTop && borderTop < windowBottom) {
            border.classList.remove('offScreen');
        } else {
            border.classList.add('offScreen');
            
        }
    }
})