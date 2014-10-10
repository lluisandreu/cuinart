<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [900, 350], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [

		["images/slideshow/imola_xey.jpg", "xey.php", "new",  "Modelo  Imola de Xey"],
		["images/slideshow/samina.jpg", "gatto-samina.php", "new", "Modelo Samina de Gatto"],
		["images/slideshow/yabe.jpg",  "gatto-yabe.php", "new",  "Modelo Yabe de Gatto"],
		["images/slideshow/miami_forma.jpg",  "forma.php", "new",  "Modelo Miami de Forma"],
		["images/slideshow/modena_xey.jpg", "xey.php", "new", "Modelo Modena de Xey"],
		["images/slideshow/perla.jpg",  "gatto-perla.php", "new",  "Modelo Perla de Gatto"],
		["images/slideshow/siena_xey.jpg",  "xey.php", "new",  "Modelo Siena de Xey"],
		["images/slideshow/chiara.jpg", "gatto-chiara.php", "new", "Modelo Chiara de Gatto"] 
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 400, //transition duration (milliseconds)
	descreveal: "peekaboo",
	togglerid: ""
})

</script>