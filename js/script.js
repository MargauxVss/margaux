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

function mentionslegales() {
   alert("Mentions légales" +
       "Produit :  Editeur du site : PITED SKIN" +
       " Directeur de la publication : PITED SKIN" +
       " Responsable de la rédaction : PITED SKIN" +
       " Hebergeur : PITED SKIN - 123, Avenue Louis Barthou – 33200 CAUDERAN " +
       " Webmaster :  PITED SKIN" +
       "Nom de la société : PITED SKIN " +
       "Numéro de Siret : 00000000000000 " +
       "Nom du responsable : Clélia BURLE - Margaux VAISSIE  " +
       "Adresse de la société : 33200 CAUDERAN " +
       "Adresse du siege social de la société :  33200 CAUDERAN");
}