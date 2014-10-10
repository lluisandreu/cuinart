<?php

$fixedtitle = "Cuinart.net |";
$language = 'de';
$title = $fixedtitle . " " . $titlepage;

?>

<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7"  lang="<?php echo $language; ?>" dir="ltr"/><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7"  lang="<?php echo $language; ?>" dir="ltr"/><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8"  lang="<?php echo $language; ?>" dir="ltr"/><![endif]-->
<!--[if IE 8]><html class="lt-ie9"  lang="<?php echo $language; ?>" dir="ltr"/><![endif]-->

<head>       
<meta charset="utf-8" />

<meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width"/>
    
<meta name="description" content="Cuinart ist ein Unternehmen im Sektor Küchenmöbel, das seit 1981 seine eigenen Möbel entwirft. 1984 entschied sich das Unternehmen auch zwei kommerzielle Marken in das Angebot aufzunehmen, Xey und Forma. Weitere Jahre später kam auch noch Gatto Cucine dazu. Heute stellen wir auch Badmöbel und Schrankelemente mit den hochwertigsten Materialien des Marktes her." />
<meta name="author" content="Cuinart SL" />
<meta name="keywords" content="cocinas Mallorca, cocinas, cocina,  muebles de cocina,
Palma de Mallorca, Mallorca, Islas Baleares, corian, muebles corian, Gaggenau, Miele,
Warendorf, Sub-Zero, Wolf, Gutmann, baño, aseo, oficina"/>

<title><?php echo $title; ?></title>

<!--  Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/lightbox.js"></script>
<script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="../js/fadeslideshow.js"></script>
<script type="text/javascript" src="../js/prototype.js"></script>
<script type="text/javascript" src="../js/simplegallery.js"></script>
<script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>

<script type="text/javascript" src="../js/p2q_embed_object.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/nav.css" rel="stylesheet" type="text/css" />
<link href="../css/lightbox.css" rel="stylesheet" type="text/css" />
<link href="../css/normalize.css" rel="stylesheet" type="text/css" />




<!--script de google analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17926354-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php if($page == 'front') { include_once 'includes/slideshow.php'; } ?>
<?php if($page == 'renders') { include_once 'includes/gallery.php'; } ?>





</head>

<body class="content-<?php print $page; ?>" >

<div id="contenidor">
  <div id="capsalera">
    <div id="capsa_left">
      <div id="capsa_left_info">
        <ul id="menu-top">
      <li><a href="../index.php" <?php if($language == 'es'){print 'style="color:#CC6600;"';} ?>>Esp </a></li>
      <li><a href="../eng/index.php" <?php if($language == 'en'){print 'style="color:#CC6600;"';} ?>>Eng </a></li>
      <li><a href="/deu/index.php" <?php if($language == 'de'){print 'style="color:#CC6600;"';} ?>>Deu</a></li>
      <li><a href="../rus/index.php" <?php if($language == 'ru'){print 'style="color:#CC6600;"';} ?>>русский</a></li>
        </ul>
      </div>
    </div>
    <div id="capsa_right">
    <a href="/eng/index.php"><img src="../images/capsa_right_image.jpg" width="700" height="100" alt="Logotip Cuinart" /></a>
    </div>
  </div>