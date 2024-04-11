<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmashop</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css1/style.css">
     <script src="jquery.min.js"></script>
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
        <div id="imageprincipale">  
            <h1><img src="logo.png" width="80px" alt=""> Pharmashop</h1>  
            <div id="div">
            <div class="nous">
                 <h2>Qui sommes-nous?</h2>
                <p>
                    Pharmashop est une plateforme créée dans le but d'aider les personnes dans le besoin c'est à dire,
                    les personnes agées, les personnes ne pouvant pas se déplacer ou qui n'ont pas le temps tout simplement
                    afin de passer leurs commande sans pourtant bouger de chez eux. 
                </p>
                <h2>Nos services</h2>
                <p>
                    - Possibilité de contacter plusieurs pharmacies <br>
                    - Solliciter les médicaments dans une autre ville en cas de rupture de stock <br>
                    - Livraison rapide et sécurisées dans un delai de 30 minutes.
                </p>
            </div>
            <div class="coordonnées">
                <h2>Quand vais-je recevoir ma commande?</h2>
                <p>
                    Après la confirmation de la commande, vous devriez recevoir votre commande dans les 30 minutes qui suivent.
                </p>
                <br>
                <h2>Nos coordonées</h2>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"> +(212) 60166-8901</i>
                    <br>
                    <i class="fa fa-whatsapp" aria-hidden="true"> +(212) 6200-12887</i>
                    <br> 
                    <i class="fa fa-Mail" aria-hidden="true"> pharmashop@gmail.com</i>
                </p>
            </div>
            </div>
        </div>

    </header>

    <footer id="footer">
        <h2 id="contact">Contactez-nous</h2>
        <form id="pieddepage" method="POST" action="contact.php">
            <h4>Vous avez une question à poser ou un commentaire à partager ? </h4>
            <p>Veuillez utiliser le formulaire de contact ci-dessous et formuler votre message aussi clairement que possible. </p>
            <input placeholder="Nom" name="nom" required autocomplete="off">
            <input placeholder="Email" name="email" required>
            <textarea placeholder="Votre message ici..." name="msg" required></textarea>
            <button ><a href="#acceuil">Envoyer</a></button>
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