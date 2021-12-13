<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\bin\php\php7.2.18\extras\PHPMailer\src\Exception.php';
require 'C:\wamp64\bin\php\php7.2.18\extras\PHPMailer\src\PHPMailer.php';
require 'C:\wamp64\bin\php\php7.2.18\extras\PHPMailer\src\SMTP.php';

if ($_POST['submit'] == 'page_devis')
{
    $nom = ($_POST['i_nom']);
    $nom_majuscule = strtoupper($nom);
    $prenom = ($_POST['i_prenom']);
    $prenom_majuscule = strtoupper($prenom);
    $societe = ($_POST['societe']);
    $adresse = ($_POST['adresse']);
    $ville = ($_POST['Ville']);
    $code_postal = ($_POST['Code_postal']);
    $telephone = ($_POST['Telephone']);
    $Mobile = ($_POST['Mobile']);
    $mail = ($_POST['i_email']);
    if (isset($_POST['maison'])){
        $case_maison = ($_POST['maison']);
    }
    else{
        $case_maison = "";
    }
    if (isset($_POST['appartement'])){
        $case_appartement = ($_POST['appartement']);
    }
    else{
        $case_appartement = "";
    }
    $autre = ($_POST['autres']);
    $surface = ($_POST['surface']);
    if (isset($_POST['construction'])){
        $case_construction = ($_POST['construction']);
    }
    else{
        $case_construction = "";
    }
    if (isset($_POST['aménagement'])){
        $case_amenagement = ($_POST['aménagement']);
    }
    else{
        $case_amenagement = "";
    }
    if (isset($_POST['renovation'])){
        $case_renovation = ($_POST['renovation']);
    }
    else{
        $case_renovation = "";
    }
    if (isset($_POST['extension'])){
        $case_extension = ($_POST['extension']);
    }
    else{
        $case_extension = "";
    }
    if (isset($_POST['façade'])){
        $case_façade = ($_POST['façade']);
    }
    else{
        $case_façade = "";
    }
    if (isset($_POST['demolition'])){
        $case_demolition = ($_POST['demolition']);
    }
    else{
        $case_demolition = "";
    }
    if (isset($_POST['terassement'])){
        $case_terassement = ($_POST['terassement']);
    }
    else{
        $case_terassement = "";
    }
    if (isset($_POST['toiture'])){
        $case_toiture = ($_POST['toiture']);
    }
    else{
        $case_toiture = "";
    }
    if (isset($_POST['VRD'])){
        $case_VRD = ($_POST['VRD']);
    }
    else{
        $case_VRD = "";
    }
    if (isset($_POST['finition'])){
        $case_finition = ($_POST['finition']);
    }
    else{
        $case_finition = "";
    }
    $description = ($_POST['desc']);
    
    $subject = "Demande de devis";
    
    $message = utf8_decode("Bonjour <b>M.BONVALET</b>,"
            . "<br><br>"
            . "Monsieur $nom_majuscule $prenom_majuscule vous a contacté pour une demande de devis." 
            . "<br><br>"
            . "<u><b>Coordonnées transmises :</b></u><br>"
            . "Société:$societe<br>"
            . "Adresse: $adresse<br>"
            . "Ville: $ville<br>"
            . "Code postal: $code_postal<br>"
            . "Télephone: $telephone<br>"
            . "Mobile: $Mobile<br>"
            . "Mail: $mail<br><br>"
            . "<u><b>Travaux envisagé :</u></b><br>"
            . "maison: $case_maison <br>appartement : $case_appartement <br> autre : $autre <br><br>"
            . "<u><b>Nature des Travaux</u></b><br>"
            . "VRD :$case_VRD <br> Aménagement: $case_amenagement <br> Construction: $case_construction <br> Démolition: $case_demolition <br> Extension: $case_extension <br> Façade: $case_façade <br>"
            . "Finition: $case_finition <br> Rénovation: $case_renovation <br> Térassement: $case_terassement <br> Toiture: $case_toiture<br><br>"
            . "<u><b>Surface du projet:</b></u> $surface m²<br><br>"
            . "<u><b>Description du projet:</b></u><br>"
            . "$description<br><br>"
            . "Cordialement.");
    
    $header = 'From: '.$nom.'<'.$mail.'>'."\r\n";
    $header .= 'Reply-to: <'.$mail.'>'."\r\n";
    
    $to = 'm.bonvalet@hotmail.fr';
    
    if($_POST['i_prenom'] != "" && $_POST['i_nom'] != "" && $_POST['i_email'] != ""){
        
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'moulin.lucas@gmail.com';                     // SMTP username
    $mail->Password   = 'Busmagik83';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('moulin.lucas@gmail.com', 'Mailer');
    $mail->addAddress($to, 'Lulu');     // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    echo '<b>Votre demande de devis a été envoyé.<b>';
    echo "<br><br>";
    echo '<a href="../index.html">Revenir à la page principal</a>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}     
}
else{
    echo 'Veuillez renseignez tout les champs requis. ';
    echo "<br>";
    echo '<a href="../pages/Demande_de_devis.php">Recommencez</a>';
}
}
else
{  
   $nom = ($_POST['nom']);
   $nom_majuscule = strtoupper($nom);
   $email = ($_POST['mail']);
   $tel = ($_POST['tel']);
   $texte = ($_POST['message']);
   
   $subject = "Demande de contact";
   
   $message = utf8_decode("Bonjour <b>M.BONVALET</b>,"
            . "<br><br>"
            . "Monsieur $nom_majuscule vous a envoyé une demande de contact.<br><br>"
            . "<b>e-mail :</b> $email<br>"
            . "<b>Téléphone:</b> $tel<br>"
            . "<b>Message :</b><br>"
            . "$texte<br><br>"
           . "Cordialement.");
   
   $header = 'From: '.$nom.'<'.$email.'>'."\r\n";
   $header .= 'Reply-to: <'.$email.'>'."\r\n";
   
   $to = 'm.bonvalet@hotmail.fr';
    
    if($_POST['nom'] != "" && $_POST['mail'] != "" && $_POST['message'] != ""){
        
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'moulin.lucas@gmail.com';                     // SMTP username
    $mail->Password   = 'Busmagik83';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('moulin.lucas@gmail.com', 'Mailer');
    $mail->addAddress($to, 'Lulu');     // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    echo '<b>Votre demande de contact a été envoyé.<b>';
    echo "<br><br>";
    echo '<a href="../index.html">Revenir à la page principal</a>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}     
}
else{
    echo 'Veuillez renseignez tout les champs requis. ';
    echo "<br><br>";
    echo '<a href="../pages/localisation.php">Recommencez</a>';
}
}
