<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style3/style3.css"> 
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

    <section id="section2">
        <div>
            <h1>VOTRE PHARMACIE EN LIGNE 100% FIABLE</h1>
            <div class="left"> 
                <h2>Le bien-etre de nos clients</h2>
                <p>
                   Nous aspirons à faciliter l'accès aux soins pour tous et améliorer le bien-etre de nos clients.
                   Pour cela, nous avons concu pour vous un site ergonomique afin que chacun puisse commander en
                   toute simplicité, ceci avec ordonance. De plus, via notre site, les clients peuvent se faire livrer
                   à leur domicile ou meme à leur lieu de travail.
                </p>
                <p>
                    <ul>
                        <li id="image2"></li>
                    </ul>
                </p>
                <h2>Le conseil de nos pharmaciens</h2>
                <p>
                    Les médicaments ne sont pas des produits comme les autres. Chaque médicament comporte une substance active qui agira sur votre organisme pour vous soigner.
                </p>
                <p>
                    Malheureusement, dans certains cas, le médicament peut être dangereux pour votre santé : prise abusive, contre-indication, détournement de son indication... La liste est longue. C’est pour cela que nous vous conseillons toujours de consulter un médecin
                    qui vous prescrira une Ordonance afin de passer votre commande en toute sécurite.
                </p>
                <p>
                    <ul>
                        <li id="image4"></li>
                    </ul>
                </p>
            </div>
            <div class="right">
                <p>
                    <ul>
                        <li id="image1"></li>
                    </ul>
                </p> 
                <h2>Une aide aux pharmacies</h2>
                <p>
                    Nous cherchons à faciliter le travail des professionnels de santé, un secteur ou le manque de personnel est de plus en
                    plus problématique.<br><br>
                    Nos pharmacies partenaires auront ainsi accès à une nouvelle clientèle présente sur notre site. Rejoindre pharmashop,
                    c'est passer à l'ère du digital et moderniser l'accès aux soins.
                </p>
                <p>
                    <ul>
                        <li id="image3"></li>
                    </ul>
                </p>
                <h2>Interaction et conseil pharmacien-patient</h2>
                <p>
                    Nous avons pour objectif de conserver le contact entre le pharmacien et le client.
                    En effet, le client et le pharmacien ont plusieurs Possibilités qui s'offrent à
                    eux afin de communiquer. <br><br>
                    Soit via whatsapp, ou bien directement par appel telephonique. Ainsi le client garde 
                    le conseil de son pharmacien. Par exemple, si le produit commandé est indisponible,
                    le pharmacien peut alors proposer un générique ou un substitut.
                </p> 
            </div>
        </div>
    </section>

    <footer id="footer">
        <h2 id="contact">Contactez-nous</h2>
        <form id="pieddepage" method="POST" action="contact.php">
            <h4>Vous avez une question à poser ou un commentaire à partager ? </h4>
            <p>Veuillez utiliser le formulaire de contact ci-dessous et formuler votre message aussi clairement que possible. </p>
            <input placeholder="Nom" name="nom" required autocomplete="off">
            <input placeholder="E-mail" name="email" required autocomplete="off">
            <textarea placeholder="Votre message ici..." name="msg" required></textarea>
            <button><a href="#acceuil">Envoyer</a></button>
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
   
    $(document).ready(function() {
        $("#Envoyer2").click(function() {
            alert("Message envoyé avec succes"); 


        });
    });
</script>