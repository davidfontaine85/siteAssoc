<?php 
    session_start();
    require('./inc/connect.php');

    
    if(isset($_POST['username'])){
        
        $user_name = strip_tags($_POST['username']);
        $user_password = strip_tags($_POST['password']);
        

        if($res = $db->query("SELECT * FROM user WHERE nickname = '$user_name' LIMIT 1")){

            while($row = $res->fetch() ){

                $db_id = $row['id'];
                $db_name = $row['nickname'];
                $db_password = $row['password'];
                $db_mail = $row['mail'];
                
            }

            if($user_password == $db_password){

                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_password'] = $user_password;
                $_SESSION['message'] = 'L\'identifiant et le password correspondent';
                echo("Success");
                return TRUE;
                
                
                //header('Location: admin.php');

            }else{

                $_SESSION['message'] = 'Mauvais Mot de Passe.';
                echo $_SESSION['message'];
    
                //header('Location: admin.php');

            }

        }else{

            $_SESSION['message'] = 'Cet identifiant n\'éxiste pas.';
            echo $_SESSION['message'];
            //header('Location: index.php');

        }

    }else{

        $_SESSION['message'] = 'Erreur d\'envoie du formulaire.';
        echo $_SESSION['message'];

    }






 ?>
    