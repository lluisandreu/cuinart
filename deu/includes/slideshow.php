<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [900, 350], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["../images/slideshow/daysi_gatto.jpg", "block.php", "new", "Modell Daisy von Gatto "],
		["../images/slideshow/imola_xey.jpg", "xey.php", "new",  "Modell Imola von Xey"],
		["../images/slideshow/jazz_gatto.jpg",  "block.php", "new",  "Modell Jazz von Gatto"],
		["../images/slideshow/miami_forma.jpg",  "forma.php", "new",  "Modell Miami von Forma"],
		["../images/slideshow/modena_xey.jpg", "xey.php", "new", "Modell Modena von Xey"],
		["../images/slideshow/rosalba_gatto.jpg",  "block.php", "new",  "Modell Rosalba von Gatto"],
		["../images/slideshow/siena_xey.jpg",  "xey.php", "new",  "Modell Siena von Xey"],
		["../images/slideshow/taka_gatto.jpg", "block.php", "new", "Modell Taka von Gatto"] 
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "peekaboo",
	togglerid: ""
})

</script>