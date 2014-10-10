<script type="text/javascript">

var mygallery=new simpleGallery({
	wrapperid: "simplegallery1", //ID of main gallery container,
	dimensions: [900, 150], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray: [
		["images/slide/pan1.jpg", "", "_new", ""],
		["images/slide/pan2.jpg", "", "_new", ""],
		["images/slide/pan3.jpg", "", "_new", ""],
		["images/slide/pan4.jpg", "", "_new", ""]

		
	
	],
	autoplay: [true, 2000, 4], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
	persist: true, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	oninit:function(){ //event that fires when gallery has initialized/ ready to run
		//Keyword "this": references current gallery instance (ie: try this.navigate("play/pause"))
	},
	onslide:function(curslide, i){ //event that fires after each slide is shown
		//Keyword "this": references current gallery instance
		//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
		//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
	}
})

</script>