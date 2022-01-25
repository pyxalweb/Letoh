(function () {
// **************************************************
//  Get Common DOM elements
// **************************************************
/**** banner ****/
const banner = document.querySelector('#banner');
const bannerClose = document.querySelector('#banner .banner-close');

/**** header ****/
const header = document.querySelector('#site-header');

/**** nav traditional ****/
const navTraditional = document.querySelector('.nav-traditional');
const navTraditionalLink = document.querySelectorAll('.nav-traditional > ul > li > a');
const navTraditionalSub = document.querySelectorAll('.nav-traditional .nav-sub');

/**** nav overlay ****/
const navOverlayToggle = document.querySelector('.overlay-nav-toggle');
const navOverlay = document.querySelector('.overlay-nav');
const navOverlayItem = document.querySelectorAll('.overlay-nav .nav-item');
const navOverlayLink = document.querySelectorAll('.overlay-nav .nav-link');
const navOverlayClose = document.querySelector('.overlay-nav .nav-close');

/**** masthead ****/
const masthead = document.querySelector('.masthead-slideshow .swiper');




// **************************************************
//  Prevent href="#" from appending '#' to address bar
// **************************************************
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        event.preventDefault();
    });
});




// **************************************************
//  Banner (Message Bar)
// **************************************************
const closeBanner = () => {
    if (banner) {
        bannerClose.addEventListener('click', () => {
            // close the banner by applying 'display: none;'
            banner.classList.add('hide');

            // recalculate masthead height
            setMastheadHeight();
        });
    };
};
closeBanner();




// **************************************************
//  Navigation Menu Traditional
//  Accessible Dropdowns
// **************************************************
const accessibleDropdowns = () => {
    // remove 'is-focused' classes
    const hide = () => {
        navTraditionalLink.forEach((element) => {
            element.classList.remove('is-focused');
        });

        navTraditionalSub.forEach((element) => {
            element.classList.remove('is-focused');
        });
    };

    // nav link element is focused or clicked
    navTraditionalLink.forEach((element) => {
        element.addEventListener('focus', () => {
            // clear all elements
            hide();

            // set 'link' element
            element.classList.add('is-focused');

            // set 'nav-sub' element
            let navDropdown = element.nextElementSibling;
            if (navDropdown) {
                navDropdown.classList.add('is-focused');
            };
        });

        element.addEventListener('click', () => {
            hide();
        });
    });

    // remove 'is-focused' from all 'nav-sub' elements when the user has blurred the navigation menu and clicked another link in the document
    document.querySelectorAll('a').forEach(element => {
        element.addEventListener('focus', () => {
            if (!element.classList.contains('nav-link')) {
                hide();
            };
        });
    });

    // hide when 'Escape' key is pressed
    document.addEventListener('keydown', event => {
        navTraditionalLink.forEach((element) => {
            if ((element.classList.contains('is-focused')) && (event.keyCode == 27)) {
                hide();
            };
        });
    });

    // hide when user clicks anywhere outside of the navigation menu
    document.addEventListener('click', event => {
        navTraditionalLink.forEach((element) => {
            if (element.classList.contains('is-focused')) {
                let targetElement = event.target;

                do {
                    if (targetElement == navTraditional) {
                        return;
                    }
                    targetElement = targetElement.parentNode;
                } while (targetElement);

                hide();
            };
        });
    });
};
accessibleDropdowns();




// **************************************************
// Masthead Slideshow Height
// **************************************************
const setMastheadHeight = () => {
    // define banner height
    const bannerHeight = banner != null ? banner.offsetHeight : 0;

    // define header height
    const headerHeight = header != null ? header.offsetHeight : 0;
    
    // define viewport height
    let viewportHeight = window.innerHeight;

    // calculate masthead height
    let mastheadHeight = viewportHeight - headerHeight - bannerHeight;

    // apply masthead height value to masthead element
    if (masthead) {
        masthead.style.height = mastheadHeight  + 'px';
    };
};
setMastheadHeight();

// recalculate masthead height when user changes viewport size
window.addEventListener('resize', () => {
    setMastheadHeight();
});




// **************************************************
//  swiper.js
// **************************************************

// Unfortunately when swiper.js has 'loop: true' enabled
// it creates 2 duplicates of each slide in order to achieve this effect
// this is fine when there's more than one slide however it is
// problematic when there's only one slide, in that it doesn't
// automatically hide the navigation elements which was the behavior
// that slick.js provided. so, in order to workaround this, i've set up a condition
// that checks if there's only 1 element plus its 2 duplicates (3 total elements)
// and if true it sets the navigation elements to 'display: none;'

// masthead slideshow
const mastheadSlideshow = new Swiper('.masthead-slideshow .swiper', {
    effect: 'fade',
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
const mastheadSlideshowWrapper = document.querySelector('.masthead-slideshow .swiper .swiper-wrapper');
const mastheadSlideshowNav = document.querySelectorAll('.masthead-slideshow .swiper .swiper-nav');
if (mastheadSlideshowWrapper && mastheadSlideshowWrapper.childElementCount <= 3) {
    mastheadSlideshowNav.forEach((element) => {
        element.classList.add('hide');
    });
}




})(); // end IIFE