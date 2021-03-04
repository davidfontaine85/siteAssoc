<?php
    session_start();
    require('./inc/connect.php');

    if(isset($_POST['choice'])) {

        $sqli = "DELETE FROM news WHERE (:id) LIMIT 1";
        $req = $db->prepare($sqli);
        $req->bindParam(':id', $_POST['choice']);
        $req->execute();

        $read = $db->query("SELECT * FROM comment WHERE id_news = ".$_POST['choice']."");
        $countComment = $read->rowCount();

        $sqli2 = "DELETE FROM comment WHERE (:id_news) LIMIT ".$countComment."";
        $req2 = $db->prepare($sqli2);
        $req2->bindParam(':id_news', $_POST['choice']);
        $req2->execute();

        echo 'SuccessDelet';
    } else {

        $_SESSION['message'] = 'Vous n\'avez pas selectionné d\'option';
        echo $_SESSION['message'];
    }

?>