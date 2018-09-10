var btnMoreChaptersElt = document.getElementById('more_chapters');
var chaptersHiddenElts = document.getElementsByClassName('chaptersHidden');
var divBtnMoreChaptersElt = document.getElementById('btnMoreChapters');
var btnNavHamburgerElt = document.getElementById('nav-hamburger');
var navElts = document.getElementsByClassName('nav');

btnNavHamburgerElt.addEventListener("click", function () {
  if (navElts[0].style.display === "") {
    navElts[0].style.display = "block";
  } else {
    navElts[0].style.display = "";
  }
})



var nbChaptersToLoad = 3; // Nombre de chapitres qui s'affichent lors du clic

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
