/**
* Triger the top button
 */

const topButton_second = document.querySelector(".top");

const addTopActive = function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("top-active");
        }
    });
  };

const observerTopButton = new IntersectionObserver(addTopActive, observerOptions);

observerTopButton.observe(topButton_second);

/**
*  Observe and triger About Us Image
 */


const aboutUsImage = document.querySelector(".card__image");

const aboutUsContainer = document.querySelector(".about-us-container__text");

const aboutUsObserver = new IntersectionObserver(scrollTrigger, observerOptions);

aboutUsObserver.observe(aboutUsImage); 

aboutUsObserver.observe(aboutUsContainer); 


/**
 *  A function to toggle less and more content
 *
 */

let more = document.querySelectorAll(".red_link");
let less = document.querySelectorAll(".less");

more.forEach(function toggleClass (item) {
    item.addEventListener('click', function () {
        this.previousElementSibling.classList.toggle('hide');
        this.classList.toggle('hide-a');
        this.nextElementSibling.classList.toggle('hide-a');
    });
})

less.forEach(function toggleClass (item) {
    item.addEventListener('click', function () {
        this.previousElementSibling.previousElementSibling.classList.toggle('hide');
        this.classList.toggle('hide-a');
        this.previousElementSibling.classList.toggle('hide-a');
    });
})
