<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title><?= $title ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/img/favicon.png"/>
    </head>

    <body>
      <header>
      
      <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <ul id="nav-hamburger">
           <li><i class="fa fa-bars fa-2x" style="color:white" aria-hidden="true"></i></li>
         </ul>
         <ul class="nav navbar-nav">
           <li><a href="index.php">Accueil</a></li>
           <li><a href="chapters">Chapitres</a></li>
           <li><a href="#contact">Contact</a></li>
           <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
         </ul>

         <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Connexion administrateur</h4>
              </div>
              <div class="modal-body">
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="login">Identifiant:</label>
                    <input type="text" class="form-control" placeholder="Entrez votre identifiant" name="login">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="pwd">
                  </div>
                  <?php
                  if (isset($_POST['login']) AND isset($_POST['pwd'])) {
                    echo '<div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Identifiant ou mot de passe incorrect.
                          </div>';
                  } ?>
                  <button type="submit" class="btn btn-default">Connexion</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </div>
            </div>

          </div>
        </div>
       </div>
      </nav>
          <h1>Jean Forteroche</h1>
          <h2>Un billet simple pour l'Alaska</h2>
        </div>
      </header>

      <?= $content ?>

  

    <footer id="footer">
    <div class="sigNature">
                <img src="public/images/xl_livre.png" alt="livre footer"> <img src="public/img/signature.png" alt="signature"/> 
    </div>
        <br/>

        
        <button data-toggle="modal" href="#infos" class="btn btn-primary">*    Mentions Légales      *</button>

        <?php 
        require '/public/mentions.php';
        ?>

        <button data-toggle="modal" href="#infop" class="btn btn-primary">*Politique de confidentilité*</button>

      <?php 
        require '/public/pconfid.php';
        ?>
        


  <dir class= "reseauxs">
    <a href="https://www.facebook.com/"><img src="public/images/Noir/noir-facebook.png" alt="facebook" ></a>
    <a href="https://twitter.com/login?lang=fr"><img src="public/images/Noir/noir-twitter.png" alt="twitter" ></a>
    <a href="http://www.hellocoton.fr/connexion"><img src="public/images/Noir/noir-hellocoton.png" alt="hellocoton" ></a>
    <a href="https://www.instagram.com/accounts/login/?hl=fr"><img src="public/images/Noir/noir-instagram.png" alt="instagram" ></a>
    <a href="https://www.pinterest.fr/login/"><img src="public/images/Noir/noir-pinterest.png" alt="pinterest" ></a>
    <br/>
</dir>


      
        <p style="text-align:center">Coryright by Jean Forteroche. Formation DWJ Openclassroom Corinne Bailly.</p>

      </footer>

        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="public/js/alaska.js" charset="utf-8"></script>

        
    </body>
</html>
