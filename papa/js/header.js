/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Lorsque l'utilisateur fait défiler la page, exécutez myFunction.
window.onscroll = function() {myFunction()};

// Obtenez l'en-tête
let header = document.getElementById("myHeader");

// Obtenir la position de décalage de la barre de navigation
let sticky = header.offsetTop;

// Ajoutez la classe collante à l'en-tête lorsque vous atteignez sa position de défilement. Supprimer "collant" lorsque vous quittez la position de défilement
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}