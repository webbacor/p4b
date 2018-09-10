<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="public/css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <link rel="icon" type="image/png" href="public/images/favicon.png" />
    </head>

    <body>
      <header>
        <div id="title">
          <h1>Jean Forteroche</h1>
          <h2>"Un billet simple pour l'Alaska"</h2>
        </div>
      </header>
      <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <ul id="nav-hamburger">
           <li><i class="fa fa-bars fa-2x" style="color:white" aria-hidden="true"></i></li>
         </ul>
         <ul class="nav navbar-nav">
           <li><a href="index.php">Accueil</a></li>
           <li><a href="index.php?action=logout"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
         </ul>
       </div>
      </nav>

      <?= $content ?>


        <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="public/js/alaska.js" charset="utf-8"></script>


<script type="text/javascript" src="public/js/tiny_mce/tiny_mce.js"></script>
  <script type="text/javascript">
    tinymce.init({  // type de mode
      mode : "exact", 
      // id ou class, des textareas
      elements : "tinymce,texte,texte2", 
      // en mode avancé, cela permet de choisir les plugins
      theme : "advanced", 
      // langue
      language : "fr", 
      // liste des plugins
      plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

      // les outils à afficher
      theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
      theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
      
      // emplacement de la toolbar
      theme_advanced_toolbar_location : "top",  
      // alignement de la toolbar
      theme_advanced_toolbar_align : "left",
      // positionnement de la barre de statut
      theme_advanced_statusbar_location : "bottom", 
      // permet de redimensionner la zone de texte
      theme_advanced_resizing : true,
      
      // chemin vers le fichier css
      content_css : " ./design-tiny.css,", 
      // taille disponible
      theme_advanced_font_sizes: "10px,11px,12px,13px,14px,15px,16px,17px,18px,19px,20px,21px,22px,23px,24px,25px", 
      // couleur disponible dans la palette de couleur
      theme_advanced_text_colors : "33FFFF, 007fff, ff7f00", 
      // balise html disponible
      theme_advanced_blockformats : "h1, h2,h3,h4,h5,h6",
      // class disponible
      theme_advanced_styles : "Tableau=textTab;TableauSansCadre=textTabSansCadre;", 
      // possibilité de définir les class et leurs styles directement avec le code suivant
      /*
      style_formats : [
        {title : 'Bold text', inline : 'b'},
        {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
        {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
        {title : 'Example 1', inline : 'span', classes : 'example1'},
        {title : 'Example 2', inline : 'span', classes : 'example2'},
        {title : 'Table styles'},
        {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
      ],
      */
    });
  </script>



    </body>
</html>
