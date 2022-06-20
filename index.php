<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatroom</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
        <h1>CHATROOM</h1>
        </header>
        <section>
            <h2>BIENVENUE DANS MON CHATROOM</h2>
            <div class="messagerie">
                <div class="user">
                    <ul>
                        <h3>Regles:</h3>
                        <li>Le respect mutuel est de rigueur</li>
                                <li>Utilisation des regles de bien seance</li>
                                <li>Echanger avec interet</li>
                                <li>Soutient moral sans jugement</li>
                    </ul>
                </div>
                <div class="send_message">
                    <div class="message">
                        <?php
                        use phpDocumentor\Reflection\Location;
                        // $connect_tp = new mysqli("localhost","root","root","tp_db");
                        $connect_tp = new mysqli("localhost","root","root","tp_db");
                        if($connect_tp->connect_error){
                            exit("erreur de connexion");
                        }
                        $request = "SELECT * FROM bts4";
                        $resultat = $connect_tp->query($request);

                        foreach($resultat as $ligne) {
                            echo "<div class='liste'>";
				            echo "<h3>$ligne[pseudo]</h3>"; 
                            echo "<span>$ligne[date]</span>"; 
				            echo "</div>";
                            echo "<p>$ligne[message]</p>";
                        }
                       
                        $resultat->close();
                    ?>
                    </div>
                </div>
        </section>
                <div class="formulaire">
                         <form action="fichier.php" method="post" class="form">
                            <?php
                                echo "<button class='btn'><a href='index.php'>Rafraichir</a></button>";
                            ?>
                            <input type="text" placeholder="pseudo" name="pseudo">
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="submit" name="submit" value="Envoyer" class='btn'>
                        </form>
                    </div>
                </div>
    </div>
</body>
</html>