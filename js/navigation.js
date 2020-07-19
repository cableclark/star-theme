

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
    
    item.addEventListener('click', function () {

        searchElement.classList.toggle(className);
        
    });
}



const toggler = document.querySelector('.toggler');

const menuElement = document.querySelector('.main-menu');

const menuUL = document.querySelector('.menu');

const menuHider = document.querySelector('.menu-hider');


toggleClass(toggler, menuElement, 'menu-active');

toggleClass(menuElement, menuElement, 'menu-active');

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
            console.log(event.target);
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

            targetElement.classList.remove(className);
            console.log(event.target)
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
  }
} 

const title = document.querySelector(".site-title");

const navbar = document.querySelector(".site-header");

const menuItems = document.querySelector(".menu");

const logoBlock = document.querySelector(".custom-logo-link");

const siteBranding = document.querySelector(".site-branding");

window.onscroll = function() {scrollFunction();};


/**
 *  A function to toggle less adn more content
 *
 */


let more = document.querySelectorAll(".red_link");

let less = document.querySelectorAll(".less");

more.forEach(function toggleClass (item) {
    item.addEventListener('click', function () {
        this.previousElementSibling.classList.toggle('hide');
        this.classList.toggle('hide');
        this.nextElementSibling.classList.toggle('hide'); 
    });
})

less.forEach(function toggleClass (item) {
    item.addEventListener('click', function () {
        this.previousElementSibling.previousElementSibling.classList.toggle('hide');
        this.classList.toggle('hide');
        this.previousElementSibling.classList.toggle('hide');
    });
})


