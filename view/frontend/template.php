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
        <link rel="icon" type="image/png" href="public/images/favicon.png"/>
           
    </head>

    <body>
      <header>
        <section id="barbar">      
          <nav class="navbar navbar-inverse">
           <div class="container-fluid">
             <ul id="nav-hamburger">
               <li><i class="fa fa-bars fa-2x" style="color:white" aria-hidden="true"></i></li>
             </ul>


             <ul class="nav navbar-nav" >
               <li><a href="index.php" style="color:white">Accueil</a></li>
               <li><a href="chapters" style="color:white">Chapitres</a></li>
               <li><a href="contact" style="color:white">Contact</a></li>
               <li><a href="#" data-toggle="modal" data-target="#myModal"></span> Admin</a></li>
             </ul>
        </section> 

        <div id="title">
          <h1>Jean Forteroche</h1>
          <h2>"Un billet simple pour l'Alaska"</h2>
        </div>


       <!-- modal boostrap connect admin-->
         <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title w-100 font-weight-bold">Aministrateur</h4>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="login">Identifiant:</label>
                    <input type="text" class="form-control" placeholder="Identifiant" name="login">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" placeholder="Mot de passe" name="pwd">
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
        </div><!-- fin modal connect admin-->


      </div>
    </nav>
          
   </header>
    
      </div>

      <?= $content ?>
  
  <?php

  require ('footer.php');
  ?>

   
        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="public/js/alaska.js" charset="utf-8"></script>

        
    </body>
</html>

