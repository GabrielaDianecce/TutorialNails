var slideIndex = 0;
showSlides();

function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
       }
       slideIndex++;
       if(slideIndex > slides.length) {slideIndex = 1}
       slides[slideIndex-1].style.display = "block";
       setTimeout(showSlides,3000);
}



var video1 = document.getElementById('video1');
var video2 = document.getElementById('video2');
var video3 = document.getElementById('video3');
var imagen1 = document.getElementById('imagen1');

function imgTransition(){
    imagen1.style.opacity=0;
    video1.play();
    video1.style.opacity=1;
}
video1.onended = function(){
    video2.play();
    video1.style.opacity=0;
    video2.style.opacity=1;
}
video2.onended = function(){
    video3.play();
    video2.style.opacity=0;
    video3.style.opacity=1;
}
video3.onended = function(){
    video3.style.opacity=0;
    imagen1.style.opacity=1;
    window.setTimeout(imgTransition, 5000);
}

