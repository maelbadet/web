<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name = "author" content = "mael badet">
    <meta name = "keywords" content = "E.S.E.R. ÉLECTRICITÉ, eser, E.S.E.R, ESER, site web, site internet">
    <meta name = "copyright" content = "mael badet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "generator" content = "Visual Studio Code">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.ico">
    <link rel="apple-touche-icon" href="img/favicon.ico">
    <title>E.S.E.R. ÉLECTRICITÉ</title>
</head>
<body>
<?php include('entete.php');?>

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
    
<footer>    
  <?php include('footer.php');?>"
</footer>
</body>
</html>