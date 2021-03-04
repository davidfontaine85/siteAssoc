<?php
    
    if(isset($_GET['logout'])){
        if(session_destroy() == TRUE){
            $_SESSION['message'] = "Vous n'êtes plus connecté.";
            header('Location: index.php');
        };
    };
    try {

        $host = "localhost";
        $dbname = "aperce_assoc";
        $charset = "utf8";
        $user = "root";
        $pass = "";


        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", "$user", "$pass", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
    } 
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>