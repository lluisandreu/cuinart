<?php 
	$page = "pan4";
	$titlepage ="Panorámica virtual número 4";
	include_once 'includes/header.php' 
?>

<div id="pantalla" onload="MM_preloadImages('images/PAN4_4H.jpg','images/pan1_1h.jpg','images/pan2_2h.jpg','images/pan3_3h.jpg')">
  <!--360 script -->
  <script type="text/javascript">
<!--
if ((window.p2q_Version) && (window.p2q_Version>=2.0)) {
// Check to see if the version meets the requirements for playback
var flashvars="";
// embedded panorama data 
panorama='<panorama>';
panorama+='<view>';
panorama+='<start pan="257" tilt="-20.5" fov="90"/>';
panorama+='<min pan="0" tilt="-90" fov="5"/>';
panorama+='<max pan="360" tilt="90" fov="120"/>';
panorama+='</view><autorotate speed="0.200" delay="10.00" returntohorizon="0.000" onlyinfocus="0" startloaded="1" />';
panorama+='<display width="900" height="350" quality="8" changemotionquality="1" changestagequality="1" smoothing="1" scalemode="stage" />';
panorama+='<input tile0url="assets/pans/360_4/img0.jpg" tile1url="assets/pans/360_4/img1.jpg" tile2url="assets/pans/360_4/img2.jpg" tile3url="assets/pans/360_4/img3.jpg" tile4url="assets/pans/360_4/img4.jpg" tile5url="assets/pans/360_4/img5.jpg" tilesize="1000" ><preview images="1" color="0x808080"/>';
panorama+='</input>';
panorama+='<control sensitifity="8" simulatemass="1" locked="0" />';
panorama+='<cursor ownonmovement="1" ownondefault="1" />';
panorama+='</panorama>';
flashvars+="panorama=" + escape(panorama) + "&";
p2q_EmbedFlash('assets/pans/360_4/cocina entrada 111_out.swf','100%','100%','allowFullScreen','true','FlashVars',flashvars);

if (!DetectFlashVer(9,0,0)) {
	document.write('<p class="warning">This content requires Adobe Flash Player Version 9 or higher. '
				 + '<a href="http://www.adobe.com/go/getflash/">Get Flash<\/a><\/p>');
}
} else {
document.writeln('<p class="warning">p2q_embed_object.js is not included or it is too old! Please copy this file into your html directory.<\/p>');
}
//-->
		</script>
  <noscript>
  <p class="warning">Please enable Javascript!</p>
  </noscript>
</div>
<div id="info_A">
<h3>Visita la tienda de manera virtual</h3>
  <p><a class="text_tienda"> Nuestra tienda en Felanitx, Mallorca en 360º.</a></p>
  <p><a class="text_tienda"><b>Mueve el ratón por la imagen de la derecha >></b></a></p>
<div id="info_B">
 <a href="tienda.php" >
<img src="images/pan1_1.jpg" class="pan" name="Image6" width="250" height="57" border="0" id="Image6" /></a>
<a href="pan2.php" >
<img src="images/pan2_2h.jpg" class="pan" width="250" height="57" /> </a>
<a href="pan3.php" >
<img src="images/pan3_3.jpg" class="pan" name="Image4" width="250" height="57" border="0" id="Image4" /></a> 
<a href="pan4.php" >
<img src="images/pan4_4.jpg" class="pan" name="Image5" width="250" height="57" border="0" id="Image5" /></a>
</div>
</div>
<?php include_once 'includes/nav.php'; 
		include_once 'includes/footer.php';
?>
