/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function enterpressalert(e){
var code = e.keyCode ;
if(code === 13) {
     alert("Les champs requis doivent être remplis");
       validEnvoi();
}
}
function validEnvoi() {
 if (window.document.querySelector("#i_nom").value === "" &&
 window.document.querySelector("#i_prenom").value === ""  &&
 window.document.querySelector("i_email").value ===""){
 alert("Les champs requis doivent être remplis"); // On affiche un message
 }
 else {
 window.document.querySelector("#form_devis").submit(); // On peut envoyer
 }
}
window.addEventListener("load", function() {
 window.document.querySelector("#btn_envoyer").addEventListener("click", validEnvoi);
});

