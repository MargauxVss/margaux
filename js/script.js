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

function connect() {
    width = 600;
    height = 600;
    if (window.innerWidth) {
        var left = (window.innerWidth - width) / 2;
        var top = (window.innerHeight - height) / 2;
    }
    else {
        var left = (document.body.clientWidth - width) / 2;
        var top = (document.body.clientHeight - height) / 2;
    }
    window.open('', 'nom_de_ma_popup', 'menubar=no, scrollbars=no, top=' + top + ', left=' + left + ', width=' + width + ', height=' + height + '');

}
