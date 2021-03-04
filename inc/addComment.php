<?php

    require('connect.php');

    if(isset($_POST['commentText'])) {

        $newCommentText = strip_tags($_POST['commentText']);
        $newCommentAuthor = strip_tags($_POST['commentAuthor']);
        $idNews = $_POST['id_news'];
        $date = date("Y-m-d H:i:s");

        $sqli = "INSERT INTO comment(id_news, content, author, date_creation) VALUES (:id_news, :content, :author, :date_creation)";
        $req = $db->prepare($sqli);
        $req->bindParam('id_news', $idNews);
        $req->bindParam('content', $newCommentText);
        $req->bindParam('author', $newCommentAuthor);
        $req->bindParam('date_creation', $date);
        $req->execute();

        echo 'SuccessAddComment';
    } else {

        echo 'Erreur';
    }

?>
