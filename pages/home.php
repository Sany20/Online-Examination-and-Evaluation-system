<div class="app-main__outer">
    <div id="refreshData">
           
    </div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>
   

<div class="slideshow-container">

<div class="mySlides">
  <q>“Nothing is impossible. The word itself says ‘I’m Possible’”</q>
  <p class="author">- Audrey Hepburn</p>
</div>

<div class="mySlides">
  <q>“Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will spend its whole life believing that it is stupid.”</q>
  <p class="author">- Albert Einstein</p>
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.“My advice is, never do tomorrow what you can do today. Procrastination is the thief of time.”</q>
  <p class="author">- Charles Dickens</p>
</div>

<div class="mySlides">
  <q>“Success consists of going from failure to failure without loss of enthusiasm.”</q>
  <p class="author">- Winston Churchill</p>
</div>

<div class="mySlides">
  <q>"You may encounter many defeats, but you must not be defeated. In fact, it may be necessary to encounter the defeats, so you can know who you are, what you can rise from, how you can still come out of it."</q>
  <p class="author">- Maya Angelou</p>
</div>

<div class="mySlides">
  <q>“Trust yourself, you know more than you think you do”</q>
  <p class="author">- Benjamin Spock</p>
</div>

<div class="mySlides">
  <q>“There is no substitute for hard work.” </q>
  <p class="author">- Thomas Edison</p>
</div>

<div class="mySlides">
  <q>“You don’t drown by falling in the water; you drown by staying there.”</q>
  <p class="author">- Ed Cole</p>
</div>

<div class="mySlides">
  <q>“Success is the sum of small efforts, repeated day in and day out.” </q>
  <p class="author">- Robert Collier</p>
</div>

<div class="mySlides">
  <q>“Fear is the brain’s way of saying that there is something important for you to overcome.”</q>
  <p class="author">- Unknown</p>
</div>

<div class="mySlides">
  <q>There are no secrets to success. It is the result of preparation, hard work learning from failure.”</q>
  <p class="author">- General Colin Powell</p>
</div>

<div class="mySlides">
  <q>“The secret of success is to do the common things uncommonly well.”</q>
  <p class="author">-John D. Rockefeller</p>
</div>

<div class="mySlides">
  <q>“In order to succeed, your desire for success should be greater than your fear of failure.”</q>
  <p class="author">- Bill Cosby</p>
</div>

<div class="mySlides">
  <q>“Striving for success without hard work is like trying to harvest where you haven’t planted.”</q>
  <p class="author">- David Bly</p>
</div>

<div class="mySlides">
  <q>“Forget all the reasons it won’t work and believe the one reason that it will.”</q>
  <p class="author">- Unknown</p>
</div>

<div class="mySlides">
  <q>“When you say ‘It’s hard’, it actually means ‘I’m not strong enough to fight for it. Stop saying its hard. Think positive!!”</q>
  <p class="author">- Unknown</p>
</div>

<div class="mySlides">
  <q>“Recipe for success: Study while others are sleeping; work while others are loafing; prepare while others are playing; and dream while others are wishing.”</q>
  <p class="author">- William A. Ward</p>
</div>

<div class="mySlides">
  <q>“Everything you want is out there waiting for you to ask. Everything you want also wants you. But you have to take action to get it.” </q>
  <p class="author">- Jules Renard</p>
</div>

<div class="mySlides">
  <q> “Success is the sum of small efforts, repeated day in and day out.”</q>
  <p class="author">- Robert J. Collier</p>
</div>

<div class="mySlides">
  <q>“To be like Sun, you need to burn like Sun”</q>
  <p class="author">-  A.P.J. Abdul Kalam</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>

</body>
</html> 