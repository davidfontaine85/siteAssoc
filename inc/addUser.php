<?php
    session_start();
    require('connect.php');

    if(isset($_POST['add_user']) && isset($_POST['add_userPassword']) && isset($_POST['add_userLastname']) && isset($_POST['add_userFirstname']) && isset($_POST['add_userAdress']) && isset($_POST['add_userMail'])) {
         
        $newUser = strip_tags($_POST['add_user']);
        $newPassword = strip_tags($_POST['add_userPassword']);
        $newLastname = strip_tags($_POST['add_userLastname']);
        $newFirstname = strip_tags($_POST['add_userFirstname']);
        $newAdress = strip_tags($_POST['add_userAdress']);
        $newMail = strip_tags($_POST['add_userMail']);
        
        $req = $db->prepare("INSERT INTO user (nickname, password, lastname, firstname, adress, mail) VALUES (:nickname, :password, :lastname, :firstname, :adress, :mail)");
        $req->bindParam(':nickname', $newUser);
        $req->bindParam(':password', $newPassword);
        $req->bindParam(':lastname', $newLastname);
        $req->bindParam(':firstname', $newFirstname);
        $req->bindParam(':adress', $newAdress);
        $req->bindParam(':mail', $newMail);
        $req->execute();

        echo 'SuccessAddUser';

    } else {

        $_SESSION['message'] = 'Un ou plusieurs champs ne sont pas renseignés';
        echo $_SESSION['message'];
        
    }








?>