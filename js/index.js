/**
 *  A function that tackles class changes on click events for search bar;
 *
 */
function toggleSearchBar (item, searchElement, className, classNameScrolled, focusInput) {
    item.addEventListener('click', function () {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            searchElement.classList.add(classNameScrolled); 
        } else {   
            searchElement.classList.add(className);   
        }
        focusInput.focus();       
    });
}

const search = document.querySelector('.search-icon');
const searchElement = document.querySelector('.widget_search');
const inputField = document.querySelector('.search-field');
toggleSearchBar(search, searchElement, 'search-active', 'search-active-scrolled', inputField);

/**
 *  A function that tackles class changes on click events;
 *
 */
function toggleClass (item, searchElement, className) {
    item.addEventListener('click', function (event) {
        event.stopPropagation();
        searchElement.classList.toggle(className);  
    });
}


const toggler = document.querySelector('.toggler');
const menuElement = document.querySelector('.main-menu');
const closeIcon = document.querySelector('.close-menu');
const menuUL = document.querySelector('.menu');
const menuHider = document.querySelector('.menu-hider');

toggleClass(toggler, menuElement, 'menu-active');
toggleClass(closeIcon, menuElement, 'menu-active');
toggleClass(toggler, menuUL, 'open-menu-items');
toggleClass(toggler, menuHider, 'menu-hider-active');


/**
 *  A function to remove a class on a click event on target
 *
 */
function removeClassOnTarget (item, searchElement, className) {
    item.addEventListener('click', function (event) {
        if (event.target === searchElement) {
            searchElement.classList.remove(className);
        }
        return false; 
    });
}


const searchX = document.querySelector('.search-x');
const menuHiderActive = document.querySelector('.menu-hider');

removeClassOnTarget(searchElement, searchElement, "search-active-scrolled");
removeClassOnTarget(searchElement, searchElement, "search-active");
removeClassOnTarget(menuHiderActive, menuHiderActive, "menu-hider-active");

/**
 *  A function to remove a class on a click event 
 *
 */
function removeClass (item, targetElement, className) {
    item.addEventListener('click', function (event) {
            event.stopPropagation();
            targetElement.classList.remove(className);
    });
}

removeClass(searchX, searchElement, "search-active-scrolled");
removeClass(searchX, searchElement, "search-active");
removeClass(search, menuHiderActive, "menu-hider-active");
removeClass(menuHiderActive, menuElement, "menu-active");
removeClass(menuHiderActive, menuUL, 'open-menu-items');
removeClass(menuElement, menuUL, 'open-menu-items');


/**
 *  A function that increases and reduces the size of the navbar
 *
 */

const title = document.querySelector(".site-title");
const navbar = document.querySelector(".site-header");
const menuItems = document.querySelector(".menu");
const logoBlock = document.querySelector(".custom-logo-link");
const siteBranding = document.querySelector(".site-branding");
const topButton = document.querySelector(".top");

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    title.classList.add("smaller-navbar");
    navbar.classList.add("smaller-header");
    searchElement.classList.add("menu-scroller");  
    searchElement.classList.remove("menu-scroller2"); 
    menuItems.classList.add('scrolled-menu-items'); 
    siteBranding.classList.add('site-branding--scrolled'); 
    search.classList.add('search-icon--scrolled'); 
  } else {
    title.classList.remove("smaller-navbar");
    navbar.classList.remove("smaller-header");
    searchElement.classList.remove("menu-scroller"); 
    searchElement.classList.add("menu-scroller2"); 
    menuItems.classList.remove('scrolled-menu-items'); 
    siteBranding.classList.remove('site-branding--scrolled'); 
    search.classList.remove('search-icon--scrolled'); 
    if (topButton !== 'undefined') {
        topButton.classList.remove("top-active");
    }
  }
} 

window.onscroll = debounce(function() {
    scrollFunction();
}, 1000/120)

/**
* Returns a function, that, as long as it continues to be invoked, will not
* be triggered. The function will be called after it stops being called for
* N milliseconds. If `immediate` is passed, trigger the function on the
* leading edge, instead of the trailing.
 */
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

/**
 *  Animate on scroll usign Intersection Observer API
 */

let observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: [0.0, 0.75]
  };

const scrollTrigger = function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
        } else {
            entry.target.classList.remove("is-visible");
        }
    });
  };
  

const animatedElements = document.querySelectorAll(".animatable");
const cardObserver = new IntersectionObserver(scrollTrigger, observerOptions);
  
animatedElements.forEach(function(target) {
    cardObserver.observe(target);
});

/**
 *  Toggle submenu items
 */
const primaryMenuItems = document.querySelectorAll("#primary-menu li");

primaryMenuItems.forEach(function(item) {
    if (item.querySelector(".sub-menu") !== null) {
        item.firstElementChild.innerHTML += `<svg
        class="down-svg"
        width="20"
        height="10"
        viewBox="0 0 5 5"
     >
       <defs
          id="defs2" />
       <g
          inkscape:label="Layer 1"
          inkscape:groupmode="layer"
          id="layer1">
         <path
            style="fill:none;stroke:#000000;stroke-width:0.089535px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
            d="M 0.3093043,1.9456416 2.6744007,4.0040839 4.9939129,1.9485991"
            id="path10" />
       </g>
     </svg>
     `;
        item.firstElementChild.addEventListener('click', function (event) {
            event.preventDefault();
            event.target.nextElementSibling.classList.toggle("open-submenu");
    });
    }
});

// primaryMenuItems.forEach(function(item) {
//     if (window.innerWidth > 1420 && item.querySelector(".sub-menu") !== null ) {
//         item.addEventListener('mouseenter', function (event) {
//            event.target.querySelector(".sub-menu").classList.add("open-submenu");
//         });
//     }
// });



// const subMenuItems = document.querySelectorAll(".sub-menu");

 
// subMenuItems.forEach(function(item) {
//     if (window.innerWidth > 1420) {
//         item.addEventListener('mouseleave', function (event) {   
//             event.target.classList.remove("open-submenu");
//         });
//     }
// });
