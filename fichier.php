<?php
    $connect_tp= new mysqli("localhost","root","root","tp_db");
  
    if($connect_tp->connect_error){
        exit("erreur de connexion");
    }
    $pseudo = $_POST['pseudo'];
    $date = date('Y-m-d H:i:s');
    $message = $_POST['message'];

    $request = "INSERT INTO BTS4(pseudo, date, message)
    VALUES ('$pseudo','$date','$message')";

    $connect_tp->query($request);
    $connect_tp->close();

    header("location: index.php");
?>