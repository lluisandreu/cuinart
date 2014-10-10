<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [900, 350], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["../images/slideshow/daysi_gatto.jpg", "block.php", "new", "Modelo Daisy de Gatto"],
		["../images/slideshow/imola_xey.jpg", "xey.php", "new",  "Modelo Imola de Xey"],
		["../images/slideshow/jazz_gatto.jpg",  "block.php", "new",  "Modelo Jazz de Gatto"],
		["../images/slideshow/miami_forma.jpg",  "forma.php", "new",  "Modelo Miami de Forma"],
		["../images/slideshow/modena_xey.jpg", "xey.php", "new", "Modelo Modena de Xey"],
		["../images/slideshow/rosalba_gatto.jpg",  "block.php", "new",  "Modelo Rosalba de Gatto"],
		["../images/slideshow/siena_xey.jpg",  "xey.php", "new",  "Modelo Siena de Xey"],
		["../images/slideshow/taka_gatto.jpg", "block.php", "new", "Modelo Taka de Gatto"] 
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "peekaboo",
	togglerid: ""
})

</script>