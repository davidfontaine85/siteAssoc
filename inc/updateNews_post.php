<?php
    session_start();
    require('connect.php');
    require('functions.php');

    if(isset($_POST['updateTitle'])) {
         
        $updateTitle = strip_tags($_POST['updateTitle']);
        $updateText = strip_tags($_POST['updateText']);
        $updateAuthor = $_POST['updateAuthor'];
        $updateId = $_POST['updateId'];
        

        $req = $db->prepare("UPDATE news SET title = :title, content = :content, author = :author WHERE id = :id LIMIT 1");
        $req->bindParam(':title', $updateTitle);
        $req->bindParam(':content', $updateText);
        $req->bindParam(':author', $updateAuthor);
        $req->bindParam(':id', $updateId);
        $req->execute();

        echo 'SuccessUpdateNews';

    } else {

        $_SESSION['message'] = 'Vous n\'avez pas renseigné de titre ou le text est manquant';
        echo $_SESSION['message'];
        
    }
?>