<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr-FR">
    <head>
        <title>Bonvalet Construction</title>
        <meta charset="UTF-8">
        <meta name="description" content="Site de maçonnerie pour pouvoir faire une demande de devi">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/contact.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../favicon.ico">
        <script src="../js/contact.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABmRiV9aIlXu_U6gVcfsEqymDfOIEg8O8&callback=myMap"></script>
    </head>
    <body>
        <header>
            <picture>                
                <source srcset="../images/Banière.png">
                <img src="../images/Banière.png" alt="Montre le logo de l'entreprise avec le nom.">                 
            </picture> 
            <div class="header" id="myHeader">
                <nav>   
                    <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
                    <ul>
                        <li><img src="../images/home.png" alt="logo de l'acceuil."><a href="../index.html">ACCUEIL</a></li>
                        <li><a href="../pages/Demande_de_devis.php">DEVIS</a></li>
                        <li><a href="../pages/Realisation.html">REALISATION</a></li>
                        <li><a href="../pages/Localisation.php">NOUS CONTACTER</a></li> 
                    </ul>
                </nav>
            </div>
            <script src="../js/header.js"></script>
        </header>
        <h1>CONTACT</h1>
        <hr>
        <div>
            <div class="dive">
                <div class="container">  
                    <form id="contact" action="testforms.php" method="POST">
                        <img id="imgform" src="../images/logoform.png" alt=""/>
                        <fieldset>
                            <input name="nom" placeholder="Votre nom" type="text" tabindex="1" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input name="mail" placeholder="Votre adresse e-mail" type="email" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input name="tel" placeholder="Votre numero de telephone(optionnel)" type="tel" tabindex="3">
                        </fieldset>
                        <fieldset>
                            <textarea name="message" placeholder="Votre message...." tabindex="5" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" value="page_Nous_Contacter" id="contact-submit" data-submit="...Sending">Envoyer</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <h1>NOUS TROUVER</h1>
        <hr>
       
        <div id="map">
            <img class="static-map" src="https://www.mapquestapi.com/staticmap/v5/map?key=EDfqLr1liFW14wlqVEZiB6BGOCJ9wbyB&type=hyb&center=44.05,6.124France Mallemoisson,MA" alt="carte affichant la localisation de bonvalet construction">
        </div>
           
        
           
        <footer>                        
            <img id="local" src="../images/logo_blanc.png" alt="icon de localisation" >

            <div id='footerBas'>
                <p>&copy;2019 Bonvalet Constructions</p>
            </div>
        </footer>
    </body>
</html>
