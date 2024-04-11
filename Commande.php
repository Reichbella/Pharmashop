<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style2/style2.css">
    <link rel="shortcut icon" href="logo.png">
    <script src="jquery.min.js"></script>
    <title>Pharmashop</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li id="logo">
                    <a href="">Pharmashop</a>
                </li>
                <li>
                    <a href="A propos.php">A propos</a>
                </li>
                <li>
                    <a href="#footer">Nous contacter</a>
                </li>
                <li>
                    <a href="Commande.php">Envoyez votre commande</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" id="acceuil"><i class="fa fa-home"></i>Accueil</a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="section1">
        <h2><b>Envoyez votre commande</b></h2>
        <form method="post" action="page.php" id="Commande">
            <center>
                <fieldset>
                    <label for="">Nom :</label>
                    <input type="text" name="nom" id="Nom" required autocomplete="off">
                    <br>
                    <br>
                    <label for="">Prénom :</label>
                    <input type="text" name="prenom" id="Prenom" required autocomplete="off">
                    <br>
                    <br>
                    <label for="">Genre :</label>
                    <input type="text" name="sexe" required autocomplete="off">
                    <!-- <input type="checkbox" name="Sexe" value="Masculin">Masculin
                    <input type="checkbox" name="Sexe" value="Feminin">Feminin -->
                    <br>
                    <br>
                    <label for="">Ordonnance :</label>
                    <input type="file" id="file" name="ordonance" id="Ordonance" required>
                    <br>
                    <br>
                    <label for="">Allergies :</label>
                    <input type="text" name="allergies" id="Allergies" autocomplete="off">
                    <br>
                    <br>
                    <label for="">Téléphone :</label>
                    <input type="tel" placeholder="123-456-789" name="telephone" id="Telephone" required autocomplete="off">
                    <br>
                    <br>
                    <label for="">Email :</label>
                    <input type="email" placeholder="exemple@gmail.com" name="email" id="Email" required autocomplete="off">
                    <br>
                    <br>
                    <label for="">Ville :</label>
                    <input type="text" name="ville" id="Ville" required autocomplete="off">
                    <br>
                    <br>
                    <label for="">Adresse :</label>
                    <input type="text" name="adresse" id="Adresse" required autocomplete="off">
                    <br>
                    <br>
                    <button id="button" type="submit">Envoyer</button>
                    <label for=""></label><output id="output"></output>
                </fieldset>
            </center>
        </form>
    </section>

    <footer id="footer">
        <h2 id="contact">Contactez-nous</h2>
        <form id="pieddepage" method="POST" action="contact.php">
            <h4>Vous avez une question à poser ou un commentaire à partager ? </h4>
            <p>Veuillez utiliser le formulaire de contact ci-dessous et formuler votre message aussi clairement que possible. </p>
            <input placeholder="Nom" name="nom" required autocomplete="off">
            <input placeholder="E-mail" name="email" required autocomplete="off">
            <textarea placeholder="Votre message ici..." required name="msg"></textarea>
            <button><a href="#acceuil" id="Envoyer2">Envoyer</a></button>
        </form>
        <div>
            <div id="copyright">
                <span>Pharmashop 2022</span>
            </div>
            <div id="icons">
                <p>suivez nous sur</p>
                <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
                <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
                <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>


            </div>
        </div>
    </footer>
</body>

</html>

<script>

</script>