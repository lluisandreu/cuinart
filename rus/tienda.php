<?php 
	$page = "tienda";
	$titlepage ="Visita nuestra tienda virtualmente";
	include_once 'includes/header.php' 
?>


<div id="pantalla">
 <?php include_once 'includes/360.php'; ?>
</div>
<div id="info_A">
  <h3>Посетите нас виртуально</h3>
  <p><a class="text_tienda">Панорамный обзор нашего магазина в Феланич, Майорка</a></p>
  <p><a class="text_tienda"><b>Передвигайте мышку по картинке которая справа от Вас >></b></a></p>
  <div id="info_B">
	<a href="tienda.php" >
<img src="../images/pan1_1.jpg" class="pan"  alt="" width="250" height="57" border="0" id="Image6" /></a>
<a href="pan2.php" >
<img src="../images/pan2_2h.jpg" class="pan" alt="" width="250" height="57" /> </a>
<a href="pan3.php" >
<img src="../images/pan3_3.jpg" class="pan"  alt="" width="250" height="57" border="0" id="Image4" /></a> 
<a href="pan4.php" >
<img src="../images/pan4_4.jpg" class="pan"  alt="" width="250" height="57" border="0" id="Image5" /></a>
  </div>
</div>
<?php include_once 'includes/nav.php'; 
		include_once 'includes/footer.php';
?>
