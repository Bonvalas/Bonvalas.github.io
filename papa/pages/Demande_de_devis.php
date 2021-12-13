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
        <link href="../css/devis.css" rel="stylesheet" type="text/css"/>
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
            <script src="../js/header.js" ></script>
        </header>
        <h1>DEMANDE DE DEVIS</h1>
        <hr>
        <h3>Toute démarche est gratuite et sans engagement de votre part !</h3>
        <section>
            <div class="dive">
                <div class="container">  
                    <form id="contact" action="testforms.php" method="POST">
                        <div class="coordgauche"> 
                            <h2>TRAVAUX</h2>
                            <br>
                            <fieldset>
                                <label for="maison">Travaux envisagé : &nbsp;&nbsp;&nbsp; </label><input type="checkbox" name="maison" value="OK" id="maison"> <label for="maison">Maison</label> &nbsp;&nbsp;<input type="checkbox" name="appartement" value="OK" id="appartement"> <label for="appartement">Appartement</label>
                            </fieldset>
                            <fieldset>
                                <label for="autres">Autres :</label> <input type="text" name="autres" id="autres" size="7" >&nbsp;&nbsp;
                            </fieldset>
                            <fieldset>
                                <label class='underline' for="construction">Nature des travaux : &nbsp;&nbsp; </label><input type="checkbox" name="construction" value="OK" id="construction" > <label for="construction">Construction</label>&nbsp;&nbsp; <input type="checkbox" name="aménagement" value="OK" id="aménagement" > <label for="aménagement">Aménagement</label>
                            </fieldset>
                            <fieldset>
                                <input type="checkbox" name="renovation" value="OK" id="renovation" > <label for="renovation">Rénovation</label>&nbsp;&nbsp;<input type="checkbox" name="extension" value="OK" id="extension" > <label for="extension">Extension</label>&nbsp;&nbsp;<input type="checkbox" name="façade" value="OK" id="façade" > <label for="façade">Façade</label>&nbsp;&nbsp;<input type="checkbox" name="demolition" value="OK" id="demolition" > <label for="demolition">Démolition</label>
                            </fieldset>
                            <fieldset>
                                <input type="checkbox" name="terassement" value="OK" id="terassement" > <label for="terassement">Térassement</label>&nbsp;&nbsp;<input type="checkbox" name="toiture" value="OK" id="toiture" > <label for="toiture">Toiture</label>&nbsp;&nbsp;<input type="checkbox" name="VRD" value="OK" id="VRD" > <label for="VRD">VRD</label>&nbsp;&nbsp;<input type="checkbox" name="finition" value="OK" id="finition" > <label for="finition">Finition</label>
                            </fieldset>
                            <br/>
                            <fieldset>
                                <label for="surface">Surface du projet :</label> <input type="number" name="surface" id="surface" size="5"><label for="surface">&nbsp;m²</label>
                            </fieldset>
                            <fieldset>
                                <label>Description de votre projet :</label> <textarea placeholder="Decrire en quelques mots" id="desc" name='desc' rows="50" cols="40" ></textarea>
                            </fieldset>
                            <img class="imgform" src="../images/logoform.png" alt=""/>
                        </div>
                        <div class="coorddroite">
                            <h2>COORDONNEES</h2>
                            <fieldset>
                                <label for="i_nom"></label> Nom :<input placeholder="Jean" type="text" name="i_nom" id="i_nom" size="35" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-]+$" required >
                            </fieldset>
                            <fieldset>
                                <label for="i_prenom">Prénom :</label> <input placeholder="Dupont" type="text" name="i_prenom" id="i_prenom" size="35" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-]+$" required >
                            </fieldset>
                            <fieldset>
                                <label for="societe">Société :</label><input placeholder="Sagem" type="text" name="societe" id="societe" size="35" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-0-9]+$" >
                            </fieldset>
                            <fieldset>
                                <label for="adresse">Adresse :</label><input placeholder="4 Chmmin des Ecallades" type="text" name="adresse" id="adresse" size="35" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-0-9]+$" >
                            </fieldset>
                            <fieldset>
                                <label for="Ville">Ville :</label><input placeholder="Paris" type="text" name="Ville" id="Ville" size="35" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-0-9]+$" >
                            </fieldset>
                            <fieldset>
                                <label for="Code_postal">Code postal :</label><input placeholder="78000" type="text" name="Code_postal" id="Code_postal" size="35" pattern="^[0-9]+$" >
                            </fieldset>
                            <fieldset>
                                <label for="Telephone">Téléphone :</label><input placeholder="0139507512" type="tel" name="Telephone" id="Telephone" size="35" >
                            </fieldset>
                            <fieldset>
                                <label for="Mobile">Mobile :</label><input type="tel" placeholder="0669764356 (Optionnel)" name="Mobile" id="Mobile" size="35" >
                            </fieldset>
                            <fieldset>
                                <label for="i_email">E-mail :</label> <input placeholder="jean.dupont@mail.fr" type="email" name="i_email" id="i_email" size="35" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            </fieldset>
                            <fieldset>

                                <button name="submit" type="submit" value="page_devis" id="contact-submit" data-submit="...Sending">Envoyer</button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer>                        
            <img id="local" src="../images/logo_blanc.png" alt="icon de localisation" >

            <div id='footerBas'>
                <p>&copy;2019 Bonvalet Constructions</p>
            </div>
        </footer>
    </body>
</html>
