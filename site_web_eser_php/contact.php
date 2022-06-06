<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>contact</title>
</head>
<body>
    
    <nav>
        <ul>
            <img src="img/logo.jpg" id="logo" alt="">
            <li> <a href="index.html" id="logo"></a></li>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="realisation.html">nos réalisations</a></li>
            <li><a href="prestation.html">nos Prestations</a></li>
            <li><a href="contact.html">nous contacter</a></li>
        </ul>
    </nav>


    <!----------------------Mise en page du formulaire de contat----------->

    
<div id="box">
    <form id="form" enctype="multipart/form-data" method="post" action = "recep_contact.php">
      <h3>Formulaire de contact</h3>
      <label>Nom: <span>*</span></label>
      <input type="text" id="name" name="prenom" placeholder="Nom"/>
      <label>Email: <span>*</span></label><span id="info" class="info"></span>
      <input type="text" id="email" name="email" placeholder="Email"/>
      <label>Sujet: <span>*</span></label>
      <input type="text" id="subject" name="sujet" placeholder="Demande de renseignement"/>
      <label>Message:</label>
      <textarea id="message" name="message" placeholder="Message..."></textarea>
      <input type="submit" name="envoyer" value="Envoyer le message" onsubmit="return valider()"/>
    <div id="statusMessage"> 
          <?php if (! empty($db_msg)) { ?>
            <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
          <?php } ?>
          <?php if (! empty($mail_msg)) { ?>
            <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
          <?php } ?>
          </div>
    </form>
    </div>
    
    
<!---------------mise en place du bas de page ----------->
<footer>

    <a href="https://www.facebook.com/E.S.E.R.ELEC"><img src="img/logo_facebook.png" id="logo_reso" alt=""></a>
    <a href="https://www.instagram.com/e.s.e.r.electricite.generale/?hl=fr"><img src="img/logo_insta.png" id="logo_reso" alt=""></a>
    <a href="#"><img src="img/logo_twitter.png" id="logo_reso" alt=""></a>

</footer>

</body>
</html>