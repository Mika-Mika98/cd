<?php

$serveur = "127.0.0.1";
$dbname = "prtcd";
$user = "root";
$pass = "";   

$nom =htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);    
$mail = htmlspecialchars($_POST['mail']);
$message = htmlspecialchars($_POST['message']);


try{
    
    $dbco = new PDO("mysql:host=127.0.0.1;dbname=prtcd","root",""); 
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sth = $dbco->prepare("       
        INSERT INTO userfinale(nom,prenom, mail, message)    
        VALUES(:nom, :prenom, :mail, :message)");
    $sth->bindParam(':nom',$nom);
    $sth->bindParam(':prenom',$prenom);    
    $sth->bindParam(':mail',$mail);
    $sth->bindParam(':message',$message);
    $sth->execute();
    
    
    header("Location:confirmation.html");
}
catch(PDOException $e){
    echo 'Evoi impossible '.$e->getMessage();
}

?>