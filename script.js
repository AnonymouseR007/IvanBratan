// Navigation menu
const navigation = document.querySelector(".navigation");
const navLinks = document.querySelectorAll(".navigation-items a");
const menuBtn = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobile-nav");
const mobileNavLinks = document.querySelectorAll(".mobile-nav a");

mobileNavLinks.forEach((link, index) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    navLinks[index].click();
  });
});

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("active");
  mobileNav.classList.toggle("active");
});

mobileNavLinks.forEach((link, index) => {
  link.addEventListener("click", () => {
    menuBtn.classList.remove("active");
    mobileNav.classList.remove("active");
  });
});

navLinks.forEach((link, i) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    sliderNav(i);
  });
});


// Video slider
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");
let currentIndex = 0;

function sliderNav(index) {
    slides.forEach((slide, i) => {
        let slideWidth = slide.getBoundingClientRect().width;
    slide.style.transform = i < index 
      ? `translateX(-${slideWidth}px)`
      : i > index 
        ? `translateX(${slideWidth}px)` 
        : 'translateX(0)';
  });
  btns.forEach((btn) => btn.classList.remove("active"));
  slides.forEach((slide) => slide.classList.remove("active"));
  contents.forEach((content) => content.classList.remove("active"));

  btns[index].classList.add("active");
  slides[index].classList.add("active");
  contents[index].classList.add("active");
  currentIndex = index;
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    sliderNav(i);
  });
});

let xDown = null;
let yDown = null;

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

function handleTouchStart(evt) {
  const firstTouch = evt.touches[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  const xUp = evt.touches[0].clientX;
  const yUp = evt.touches[0].clientY;

  const xDiff = xDown - xUp;
  const yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) { // Swipe direction is horizontal
    if (xDiff > 0) { // Swipe left
      currentIndex++;
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }
      sliderNav(currentIndex);
    } else { // Swipe right
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = slides.length - 1;
      }
      sliderNav(currentIndex);
    }
  }

  // Reset values
  xDown = null;
  yDown = null;
}

// Typing animation
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Ivan Hudák ", "AKA Bratan"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 1000;
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(
      0,
      charIndex - 1
    );
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  if (textArray.length) setTimeout(type, newTextDelay + 250);
});

// Mail form validation
document.querySelector('.chatOn').addEventListener('click', function() {
  document.querySelector('.wrapper').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function() {
  document.querySelector('.wrapper').style.display = 'none';
});

document.querySelector('#contactForm').addEventListener('submit', function(event) {
  event.preventDefault();
  submitForm();
});

function submitForm() {
  var xhr = new XMLHttpRequest();
  var url = 'contact.php';

  // Prepare form data
  var formData = new FormData(document.querySelector('#contactForm'));

  // Setup our request
  xhr.open('POST', url, true);

  // On successful response, show an alert or error
  xhr.onload = function() {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);

      if (response.success) {
        alert(response.message);
        document.querySelector('.wrapper').style.display = 'none';
      } else {
        // Display error messages
        Object.keys(response.errors).forEach(function(key) {
          document.querySelector('#' + key).nextElementSibling.innerHTML = response.errors[key];
        });
      }
    } else {
      alert('An error occurred: ' + xhr.status);
    }
  };

  // Send our request
  xhr.send(formData);
}
