
/* next prev buttons */
        var slideIndex = 1;
        showSlides(slideIndex);
       
        function plusImage(n) {
            showSlides(slideIndex += n);
        }
     
/* Image slider*/
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slideImg");
    var circles = document.getElementsByClassName("circle");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < circles.length; i++) {
        circles[i].className = circles[i].className.replace(" active", "");
    }
    
    //if (!(slides[slideIndex - 1] == null)) {
        slides[slideIndex - 1].style.display = "block";
        circles[slideIndex - 1].className += " active";
    //}
};

function clearContactForm(){
    document.getElementById("pagContact").reset();    
};


//var slideIndex = 0;
//showSlides();
//
//function showSlides() {
//    var i;
//    var slides = document.getElementsByClassName("slideImg");
//    for (i = 0; i < slides.length; i++) {
//        slides[i].style.display = "none"; 
//    }
//    slideIndex++;
//    if (slideIndex > slides.length) {slideIndex = 1} 
//    slides[slideIndex-1].style.display = "block"; 
//    setTimeout(showSlides, 4000); // Change image every 2 seconds
//}