// Portions of this code is used from w3 schools

var slideIndex = 0;
showSlides();

function showSlides() {
  const list = [" ","Meat lovers Pizza", "New York Pizza", "Dessert Pizza"];

  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";


  document.getElementById("update").innerHTML = "Try our " + list[slideIndex];


  setTimeout(showSlides, 5000);
}
