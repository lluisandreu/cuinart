<?php

$fixedtitle = "Cuinart Mallorca |";
$language = 'es';
$title = $fixedtitle . " " . $titlepage;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>       
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<meta name="description" content="Estudio y diseño de cocinas, baños y armarios.
Cocinas modernas, rusticas y de diseño, cocinas italianas
Mallorca corian Mallorca arquitectura en cocinas mobiliario cocina para descacacitados
cocinas económicas muebles de cocina caros diseñadores de cocina expertos en diseño
diplomados diseño de interiores exclusivo en cocinas" />
<meta name="keywords" content="cocinas Mallorca, cocinas, cocina,  muebles de cocina,
Palma de Mallorca, Mallorca, Islas Baleares, corian, muebles corian, Gaggenau, Miele,
Warendorf, Sub-Zero, Wolf, Gutmann, baño, aseo, oficina"/>

<title><?php echo $title; ?></title>

<!--  Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600' rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<link href="css/normalize.css" rel="stylesheet" type="text/css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>

<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/fadeslideshow.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/simplegallery.js"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/p2q_embed_object.js"></script>





<?php if($page == 'front') { include_once 'includes/slideshow.php'; } ?>
<?php if($page == 'renders') { include_once 'includes/gallery.php'; } ?>

<script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body class="content-<?php print $page; ?>" >

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="contenidor">
  <div id="capsalera">
    <div id="capsa_left">
      <div id="capsa_left_info">
        <ul id="menu-top">
      <li><a href="/index.php" <?php if($language == 'es'){print 'style="color:#CC6600;"';} ?>>Esp </a></li>
      <li><a href="eng/index.php" <?php if($language == 'en'){print 'style="color:#CC6600;"';} ?>>Eng </a></li>
      <li><a href="/deu/index.php" <?php if($language == 'de'){print 'style="color:#CC6600;"';} ?>>Deu</a></li>
      <li><a href="/rus/index.php" <?php if($language == 'ru'){print 'style="color:#CC6600;"';} ?>>русский</a></li>
        </ul>
      </div>
    </div>
    <div id="capsa_right">
    <a href="./"><img src="images/capsa_right_image.jpg" width="700" height="100" alt="Logotip Cuinart" /></a>
    </div>
  </div>