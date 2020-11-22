let useremail = 'ankit@gmail.com'
let password = 'ankit@123'

let checks = function(myString){
    if((myString.includes('@')) & (myString.length>7)){
       return true
       }
       else{
       return false
       }
}
console.log(checks(useremail));
let checkpass = function(myString1){
    if((myString1.includes('@')) & (myString1.length>6)){
       return true
       }
       else{
       return false
       }
}
console.log(checkpass(password));









// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
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
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}