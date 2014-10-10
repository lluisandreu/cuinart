<?php
$page = "sitemap";
$pagetitle = "Sitemap";

include 'includes/header.php';


?>

<div id="sitemap">
    <ul >
      <li><a href="./"> Home</a></li>
      <li><a href="tienda.php" class="sub">Cuinart</a>
        <ul >
          <li><a href="about.php" class="">Nosotros</a></li>
          <li><a  href="tienda.php" class="">La tienda 360º</a></li>
        </ul>
      <li><a href="#"> Cocinas</a>
        <ul >
          <li><a href="#">Modelos</a>
            <ul class="fly1">
              <li><a href="xey.php">Xey</a></li>
              <li><a href="gatto.php">Gatto</a></li>
              <li><a href="block.php">Block</a></li>
              <li><a href="forma.php">Forma</a></li>
              <li><a href="corian.php">Corian</a></li>
            </ul>
          </li>
          <li><a href="fabricacion-propia.php">Fabricacición própia</a></li>
          <li><a href="electrodomesticos.php">Electrodomésticos</a></li>
        </ul>
      </li>
      <li><a href="armarios.php">Armarios</a></li>
      <li><a  href="ofertas.php"> Ofertas</a></li>
      <li><a  href="renders.php"> Renders</a></li>
      <li><a  href="presupuesto.php"> Presupuesto</a> </li>
      <li id="support"><a href="localizacion.php"> Contacto y localización</a></li>
      <li class="last"><a  href="video.php">Vídeo</a> </li>
    </ul>
  </div>

  <?php 		
		include_once 'includes/footer.php';
?>
