<?php 

    if(isset($_POST['send_to'])) {

        $to = strip_tags($_POST['send_to']);
        $subject = strip_tags($_POST['send_title_mail']);
        $txt = strip_tags($_POST['send_text_mail']);
        $headers = "From: " . strip_tags($_POST['send_mail_author']) . "\r\n";

        mail($to,$subject,$txt,$headers);
        echo('SuccessSend');

    } else {
        
        echo('Erreur d\'envoi du mail.');

    }












?>