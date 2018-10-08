<?php $title = "Formulaire de contact"; ?>
<?php ob_start(); ?>

<div id="contact_container">
    <h1 style="text-align:center">Contactez-moi</h1>
      <form action="?action=contact#success" method="post">
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subject">Sujet :</label>
            <input type="text" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Votre message :</label>
            <textarea style="resize:none" name="message" class="form-control" rows="10" required></textarea>
        </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
    </form>

    <?php
      if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message'])) {
        ?>

        <div id="success" class="alert alert-success alert-dismissable fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Votre message à été envoyé !</strong> 
        </div>

        <?php
        $to = 'web.bacor@gmail.com';
        $subject = $_POST['subject'];
        $message = 'De la part de ' . $_POST['name'] . ' :' . "\r\n" . "\r\n" . $_POST['message'];
        $headers = 'From: ' . $_POST['email'] . "\r\n" .
       'Reply-To: ' . $_POST['email'] . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
        }
        ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
