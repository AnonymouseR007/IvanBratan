<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ivan Hudák Photo und Video</title>
    <link rel="stylesheet" href="style.css" class="style" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
      <a href="#" class="brand"><span class="typed-text"></span><span class="cursor"></span></a>
      <!-- <div class="menu-btn"> -->
        <button class="hamburger">
          <div class="bar"></div>
        </button>
          <nav class="mobile-nav">
          <a href="#" id="nav-link-0">Home</a>
          <a href="#" id="nav-link-1">Angebote</a>
          <a href="#" id="nav-link-2">Was ich gemacht habe</a>
          <a href="#" id="nav-link-3">Kontakt</a>
        </nav>
      <div class="navigation">
        <nav class="navigation-items">
          <a href="#" id="nav-link-0">Home</a>
          <a href="#" id="nav-link-1">Angebote</a>
          <a href="#" id="nav-link-2">Was ich gemacht habe</a>
          <a href="#" id="nav-link-3">Kontakt</a>
        </nav>
        </div>
      </div>
    </header>


    <!-- Mail form -->
    <img src="mail.png" class="chatOn">
<div class="wrapper">
  <form id="contactForm" onsubmit="event.preventDefault(); submitForm();">
    <i class="fa-solid fa-circle-xmark close"></i>
    <h2>Contact us</h2>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>
    <p id="name_error" class="error"></p>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
    <p id="email_error" class="error"></p>

    <label for="phone">Phone number</label>
    <input type="tel" id="phone" name="phone" placeholder="Optional: Enter your phone number">
    <p id="phone_error" class="error"></p>

    <label for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="5" required placeholder="Enter your message"></textarea>
    <p id="message_error" class="error"></p>

    <button type="submit">SEND</button>
  </form>
</div>

   
    <section class="home">
      <video autoplay muted loop playsinline src="jet.mp4" class="video-slide active"></video>
      <video autoplay muted loop playsinline src="ghe.mp4" class="video-slide"></video>
      <video autoplay muted loop playsinline src="33.mp4" class="video-slide"></video>
      <video autoplay muted loop playsinline src="22.mp4" class="video-slide"></video>
      <main class="content active">
        <h1 >Ivan Hudák<br /><span>AKA Bratan</span></h1>
        <p>
          Hello, ich sehe das du bist zu meinem Profil gewandert, hmmm … glaub mir, dass du am richtigen Ort bist. <br> <br> Lass mich kurz vorstellen. <br> <br>Mein Name ist Ivan, ich bin 30 jahre alt und beschäftige mich mit der professionellen
📸Foto- und 🎥Videoproduktion. <br><br> Freut mich!
        </p>
        <button class="pop_btn">SCHREIB MIR GERADE JETZT!</button>
      </main>
      <div class="content">
        <h1>Meine<br /><span>angebot</span></h1>
        <p>
          HOCHZEITEN <br>
          DROHNE SHOOTING <br>
          PORTRET <br>
          MUSIK VIDEO <br>
          NATUR <br>
          UNSERE VIERBEINIGE <br>
          Und viele andere Richtungen. Es liegt nur an dir, was deine Vision ist. Ich bin hier, um dir zu helfen, sie ewig zu machen.


        </p>
        <button class="pop_btn">SCHREIB MIR GERADE JETZT!</button>
      </div>
      <div class="content">
        <h1>Projekte<br /><span>fur euch gemacht!</span></h1>
        <p>
         videa obrazky a popis a tak dalej 
        </p>
        <button class="pop_btn">SCHREIB MIR GERADE JETZT!</button>
      </div>
      <div class="content">
        <h1>kontakt<br /><span>am bestens gerade jetzt</span></h1>
        <p>
          mailovy formular plus tlacitko na volanie a whats app <br> pripade google mapka s polohou
        </p>
        <button class="pop_btn">SCHREIB MIR GERADE JETZT!</button>
      </div>
      <div class="media-icons">
        <a href="https://www.facebook.com/Jewan28" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/h.e.k.t.o.r.28/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        <a href="https://open.spotify.com/artist/4q5dCq8XeUVm9nZX2QsnPH" target="_blank" rel="noopener noreferrer"><i class="fab fa-spotify"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>   
    </section>


   <!-- Popup message container -->
<div id="popupMailMessage" class="popupMailMessage">
  <div class="popupMailMessage-content">
    <span class="close" onclick="closePopupMailMessage()">&times;</span>
    <div id="errorContainer" style="display: none;">
      <h2>Error</h2>
      <div id="errorMessages"></div>
    </div>
    <div id="successContainer" style="display: none;">
      <h2>Success</h2>
      <p id="successMessage"></p>
    </div>
  </div>
</div>


    <script type="text/javascript">
      //Navigation menu//

const navigation = document.querySelector(".navigation");
const navLinks = document.querySelectorAll(".navigation-items a");
const menuBtn = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobile-nav");
const mobileNavLinks = document.querySelectorAll(".mobile-nav a");

mobileNavLinks.forEach((link, index) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    // Add any logic you need here, such as closing the mobile menu
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


//Video slider//
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");
let currentIndex = 0;

function sliderNav(index) {
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

  if (Math.abs(xDiff) > Math.abs(yDiff)) { //swipe direction is horizontal
    if (xDiff > 0) { //swipe left
      currentIndex++;
      if (currentIndex >= slides.length) {
        currentIndex = 0;
      }
      sliderNav(currentIndex);
    } else { //swipe right
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = slides.length - 1;
      }
      sliderNav(currentIndex);
    }
  }

  // reset values
  xDown = null;
  yDown = null;
}


      //typing animation//
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
          typedTextSpan.textContent += textArray[textArrayIndex].charAt(
            charIndex
          );
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

    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script> //pop up button//
      $(document).ready(function(){
        $(".pop_btn").click(function () {
          $(".wrapper").css('display', 'flex');
        });
        $(".close").click(function () {
          $(".wrapper").css('display', 'none');
        });
      });
      </script>

<script>
document.querySelector('.chatOn').addEventListener('click', function() {
  document.querySelector('.wrapper').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function() {
  document.querySelector('.wrapper').style.display = 'none';
});

function submitForm() {
  var xhr = new XMLHttpRequest();
  var url = "contact.php";
  
  // Prepare form data
  var formData = new FormData(document.querySelector('#contactForm'));
  
  // Setup our request
  xhr.open("POST", url, true);
  
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

</script>


      
  </body>
</html>
