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
//  Navigation Menu Overlay
//  Toggle
// **************************************************
const toggleNav = () => {
    // show
    const show = () => {
        navOverlay.classList.toggle('show');
    };

    // hide
    const hide = () => {
        navOverlay.classList.remove('show');
    };

    // set all link elements to tabindex="0"
    const enable = () => {
        navOverlayLink.forEach((element) => {
            element.setAttribute('tabindex', '0');
        });
    };

    // set all link elements to tabindex="-1"
    const disable = () => {
        navOverlayLink.forEach((element) => {
            element.setAttribute('tabindex', '-1');
        });
    };
    disable(); // run this on page load

    // focus the overlay 
    const focusOverlay = () => {
        navOverlay.setAttribute('tabindex', '0');
        navOverlay.focus();
        navOverlayToggle.classList.add('clicked'); // mimics the toggle's hover/focus CSS
    };

    // focus the toggle 
    const focusToggle = () => {
        navOverlay.setAttribute('tabindex', '-1');
        navOverlayToggle.focus();
        navOverlayToggle.classList.remove('clicked');
    };

    // collapse dropdowns
    const collapseDropdowns = () => {
        const dropdownToggle = navOverlay.querySelector('.dropdown-toggle');
        const navOverlaySub = navOverlay.querySelector('.nav-sub');

        if (dropdownToggle) {
            dropdownToggle.classList.remove('show');
            navOverlaySub.classList.remove('show');
        }
    }

    // all functions to 'open' the menu
    const open = () => {
        show();
        enable();
        focusOverlay();
    }

    // all functions to 'close' the menu
    const close = () => {
        hide();
        disable();
        focusToggle();
        collapseDropdowns();
    }

    // toggle is clicked
    navOverlayToggle.addEventListener('click', () => {
        if (!navOverlay.classList.contains('show')) {
            open();
        } else {
            close();
        };
    });

    // hide when 'Escape' key is pressed
    document.addEventListener('keydown', (event) => {
        if ((navOverlay.classList.contains('show')) && (event.keyCode == 27)) {
            close();
        }
    });

    // hide when user clicks anywhere outside of the overlay
    document.addEventListener('click', (event) => {
        if (navOverlay.classList.contains('show')) {
            let targetElement = event.target;

            do {
                if (targetElement == navOverlay || targetElement == navOverlayToggle) {
                    return;
                }
                targetElement = targetElement.parentNode;
            } while (targetElement);

            close();
        };
    });

    // hide when a user scrolls up/down
    // DISABLED
    // document.addEventListener('scroll', () => {
    //     close();
    // });

    // hide when user clicks 'x' icon (small viewports only)
    navOverlayClose.addEventListener('click', (event) => {
        if (navOverlay.classList.contains('show')) {
            close();
        }
    })
};
toggleNav();




// **************************************************
//  Navigation Menu Overlay
//  Dropdowns
// **************************************************
const overlayDropdowns = () => {
    // apply 'has-dropdown' classes and create 'dropdown-toggle' elements
    navOverlayItem.forEach((element) => {
        const navOverlaySub = element.querySelector('.nav-sub');
        const navOverlayLink = element.querySelector('.nav-link');

        if (navOverlaySub !== null) {
            element.classList.add('has-dropdown');

            navOverlayLink.insertAdjacentHTML('beforeend', '<span class="dropdown-toggle" aria-label="Expand or Collapse Dropdown" role="button" tabindex="-1"></span>');
        };
    });

    // toggle is clicked
    navOverlay.querySelectorAll('.has-dropdown').forEach((element) => {
        const dropdownToggle = element.querySelector('.dropdown-toggle');
        const navOverlaySub = element.querySelector('.nav-sub');

        if (dropdownToggle) {
            // note:  do not use arrow functions here!
            //        they don't allow the 'this' keyword

            // click
            dropdownToggle.addEventListener('click', function(event) {
                this.classList.toggle('show');
                navOverlaySub.classList.toggle('show');
                event.preventDefault();
            });

            // 'return' key (accessibility)
            dropdownToggle.addEventListener('keydown', function(event) {
                if (event.keyCode == 13) {
                    this.classList.toggle('show');
                    navOverlaySub.classList.toggle('show');
                    event.preventDefault();
                };
            });
        };
    });

    // set tabindex to 0 when overlay is displayed and -1 when hidden
    navOverlayToggle.addEventListener('click', (element) => {
        const dropdownToggle = document.querySelectorAll('.dropdown-toggle');

        if (navOverlay.classList.contains('show')) {
            dropdownToggle.forEach((element) => {
                element.setAttribute('tabindex', '0');
            });
        }
        else {
            dropdownToggle.forEach((element) => {
                element.setAttribute('tabindex', '-1');
            });
        };
    });
}
overlayDropdowns();




// **************************************************
//  Booking Form
//  Toggle
// **************************************************
const toggleBooking = () => {
    // get DOM elements
    const bookingToggle = document.querySelector('.booking-toggle');
    const bookingOverlay = document.querySelector('.overlay-booking');
    const bookingClose = document.querySelector('.overlay-booking .booking-close');

    // flatpickr.js replaces each input[type="date"] element with its own input[type="hidden"] element and input[type="text"] element, so we need to make sure these generated elements are accounted for when setting tabindex values
    const bookingInputs = '.overlay-booking form .booking-input *';
    let bookingInputsLinks = document.querySelectorAll(bookingInputs);

    // show
    const show = () => {
        bookingToggle.classList.toggle('has-focus');
        bookingOverlay.classList.toggle('show');
        bookingOverlay.setAttribute('tabindex', '0');
        bookingOverlay.focus();
    };

    // hide
    const hide = () => {
        bookingToggle.classList.remove('has-focus');
        bookingOverlay.classList.remove('show');
        bookingOverlay.setAttribute('tabindex', '-1');
        bookingOverlay.blur();
        bookingToggle.blur();
    };

    // set all input and link elements to tabindex="0"
    const enable = () => {
        let bookingInputsLinks = document.querySelectorAll(bookingInputs);

        bookingInputsLinks.forEach((element) => {
            element.setAttribute('tabindex', '0');
        });
    };

    // set all input and link elements to tabindex="-1"
    const disable = () => {
        let bookingInputsLinks = document.querySelectorAll(bookingInputs);

        bookingInputsLinks.forEach((element) => {
            element.setAttribute('tabindex', '-1');
        });
    };
    disable(); // run this on page load

    // toggle is clicked
    bookingToggle.addEventListener('click', (event) => {
        if (!bookingOverlay.classList.contains('show')) {
            show();
            enable();
        } else {
            hide();
            disable();
        }

        event.preventDefault();
    });

    // hide when 'Escape' key is pressed
    document.addEventListener('keydown', (event) => {
        if ((bookingOverlay.classList.contains('show')) && (event.keyCode == 27)) {
            hide();
            disable();
        }
    });

    // hide when user clicks anywhere outside of the overlay or flatpickr-calendar
    document.addEventListener('click', (event) => {
        if (bookingOverlay.classList.contains('show')) {
            // get the flatpickr.js DOM elements
            const fpArrivalCalendar = document.querySelector('.arrival-calendar');
            const fpDepartureCalendar = document.querySelector('.departure-calendar');

            let targetElement = event.target;

            do {
                if (targetElement == bookingOverlay || targetElement == bookingToggle || targetElement == fpArrivalCalendar || targetElement == fpDepartureCalendar) {
                    return;
                }
                targetElement = targetElement.parentNode;
            } while (targetElement);

            hide();
            disable();
        };
    });

    // hide when user scrolls up/down
    // DISABLED
    // document.addEventListener('scroll', () => {
    //     hide();
    //     disable();
    // });

    // hide when user clicks 'X' icon in overlay
    bookingClose.addEventListener('click', () => {
        hide();
        disable();
    });
};
toggleBooking();




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