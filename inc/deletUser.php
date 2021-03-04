<?php
    session_start();
    require('connect.php');

    if(isset($_POST['choice_user_remove'])) {

        $sqli = "DELETE FROM user WHERE id = :id LIMIT 1";
        $req = $db->prepare($sqli);
        $req->bindParam(':id', $_POST['choice_user_remove']);
        $req->execute();

        echo 'SuccessDeletUser';
    } else {

        $_SESSION['message'] = 'Vous n\'avez pas selectionné d\'option';
        echo $_SESSION['message'];
    }

?>