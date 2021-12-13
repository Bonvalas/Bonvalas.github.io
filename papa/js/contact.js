/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Initialiser et ajouter la carte
function initMap() {
    // localisation de l'entreprise
        let uluru = {lat: 44.05, lng: 6.124};
    // L'emplacement de l'entreprise
    let map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
    // Le marqueur, positionné l'endroit de l'entreprise
    let marker = new google.maps.Marker({position: uluru, map: map});
}