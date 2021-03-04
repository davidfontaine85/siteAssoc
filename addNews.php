<?php
    session_start();
    require('./inc/connect.php');

    if(isset($_POST['newTitle'])) {
         
        $newTitle = strip_tags($_POST['newTitle']);
        $newText = strip_tags($_POST['newText']);
        $actualDate = date("Y-m-d H:i:s");

        $req = $db->prepare("INSERT INTO news (title, content, author, date_creation) VALUES (:title, :content, :author, :date_creation)");
        $req->bindParam(':title', $newTitle);
        $req->bindParam(':content', $newText);
        $req->bindParam(':author', $_SESSION['user_name']);
        $req->bindParam(':date_creation', $actualDate);
        $req->execute();

        echo 'SuccessAdd';

    } else {

        $_SESSION['message'] = 'Vous n\'avez pas renseigné de titre ou le text est manquant';
        echo $_SESSION['message'];
        
    }
?>