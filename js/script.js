//jQuery(document).ready(function($) {

sfHover = function() {

        var sfEls = document.getElementById("menu").getElementsByTagName("LI");

        for (var i=0; i<sfEls.length; i++) {

                sfEls[i].onmouseover=function() {

                        this.className+=" sfhover";

                }

                sfEls[i].onmouseout=function() {

                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");

                }

        }

}

if (window.attachEvent) window.attachEvent("onload", sfHover);

	
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
    setTimeout(showSlides, 2000); 
} 




function formulaire()  {

    var handleclick = false;
    if (handleclick == false) {
        $('#forminsc').css('display')
    }
}