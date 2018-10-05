var btnMoreChaptersElt = document.getElementById('more_chapters');
var chaptersHiddenElts = document.getElementsByClassName('chaptersHidden');
var divBtnMoreChaptersElt = document.getElementById('btnMoreChapters');
var btnNavHamburgerElt = document.getElementById('nav-hamburger');
var navElts = document.getElementsByClassName('nav');

// gestionnaire événemnet clic menu hamburger
btnNavHamburgerElt.addEventListener("click", function () {
  if (navElts[0].style.display === "") {
    navElts[0].style.display = "block";
  } else {
    navElts[0].style.display = "";
  }
})


//creation objet pour Nombre de chapitres qui s'affichent 
var nbChaptersToLoad = 3; 
if (btnMoreChaptersElt !== null) {
  btnMoreChaptersElt.addEventListener("click", function () {
    for (var i = 0; i < nbChaptersToLoad; i++) {
      if (chaptersHiddenElts[0] !== undefined) {
        chaptersHiddenElts[0].classList.remove("chaptersHidden");
      }
    }
    if (chaptersHiddenElts.length === 0) {
      divBtnMoreChaptersElt.innerHTML = "";
    }
  })
}
