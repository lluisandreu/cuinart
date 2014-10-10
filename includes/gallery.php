

<script type="text/javascript">

var mygallery=new simpleGallery({
	wrapperid: "simplegallery1", //ID of main gallery container,
	dimensions: [900, 350], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
	imagearray: [
		["images/img_renders/ret/A01.jpg", "", "_new", ""],
		["images/img_renders/ret/A02.jpg", "", "_new", ""],
		["images/img_renders/ret/A03.jpg", "", "_new", ""],
		["images/img_renders/ret/A04.jpg", "", "_new", ""],
		["images/img_renders/ret/A05.jpg", "", "_new", ""],
		["images/img_renders/ret/A06.jpg", "", "_new", ""],
		["images/img_renders/ret/A07.jpg", "", "_new", ""],
		["images/img_renders/ret/A08.jpg", "", "_new", ""],
		["images/img_renders/ret/A09.jpg", "", "_new", ""],
		["images/img_renders/ret/A10.jpg", "", "_new", ""],
		["images/img_renders/ret/A11.jpg", "", "_new", ""],
		["images/img_renders/ret/A12.jpg", "", "_new", ""],
		["images/img_renders/ret/A13.jpg", "", "_new", ""],
		["images/img_renders/ret/A14.jpg", "", "_new", ""],
		["images/img_renders/ret/A15.jpg", "", "_new", ""],
		["images/img_renders/ret/A16.jpg", "", "_new", ""],
		["images/img_renders/ret/A17.jpg", "", "_new", ""],
		["images/img_renders/ret/A18.jpg", "", "_new", ""],
		["images/img_renders/ret/A19.jpg", "", "_new", ""],
		["images/img_renders/ret/A20.jpg", "", "_new", ""],
		["images/img_renders/ret/A21.jpg", "", "_new", ""],
		["images/img_renders/ret/A22.jpg", "", "_new", ""],
		["images/img_renders/ret/A23.jpg", "", "_new", ""],
		["images/img_renders/ret/A24.jpg", "", "_new", ""],
		["images/img_renders/ret/A25.jpg", "", "_new", ""],
		["images/img_renders/ret/A26.jpg", "", "_new", ""],
		["images/img_renders/ret/A27.jpg", "", "_new", ""],
		["images/img_renders/ret/A28.jpg", "", "_new", ""],
		["images/img_renders/ret/A29.jpg", "", "_new", ""],
		["images/img_renders/ret/A30.jpg", "", "_new", ""],
		["images/img_renders/ret/A31.jpg", "", "_new", ""],
		["images/img_renders/ret/A32.jpg", "", "_new", ""],
		["images/img_renders/ret/A33.jpg", "", "_new", ""],
		["images/img_renders/ret/A34.jpg", "", "_new", ""],
		["images/img_renders/ret/A35.jpg", "", "_new", ""],
		["images/img_renders/ret/A36.jpg", "", "_new", ""],
		["images/img_renders/ret/A37.jpg", "", "_new", ""],
		["images/img_renders/ret/A38.jpg", "", "_new", ""],
		["images/img_renders/ret/A39.jpg", "", "_new", ""],
		["images/img_renders/ret/A40.jpg", "", "_new", ""],
		["images/img_renders/ret/A41.jpg", "", "_new", ""],
		["images/img_renders/ret/A42.jpg", "", "_new", ""],
		["images/img_renders/ret/A43.jpg", "", "_new", ""],
		["images/img_renders/ret/A44.jpg", "", "_new", ""],
		["images/img_renders/ret/A45.jpg", "", "_new", ""],
		["images/img_renders/ret/A46.jpg", "", "_new", ""],
		["images/img_renders/ret/A47.jpg", "", "_new", ""],
		["images/img_renders/ret/A48.jpg", "", "_new", ""],
		["images/img_renders/ret/A49.jpg", "", "_new", ""],
		["images/img_renders/ret/A50.jpg", "", "_new", ""],
		["images/img_renders/ret/A51.jpg", "", "_new", ""],
		["images/img_renders/ret/A52.jpg", "", "_new", ""],
		["images/img_renders/ret/A53.jpg", "", "_new", ""],
		["images/img_renders/ret/A54.jpg", "", "_new", ""],
		["images/img_renders/ret/A55.jpg", "", "_new", ""],
		["images/img_renders/ret/A56.jpg", "", "_new", ""],
		["images/img_renders/ret/A57.jpg", "", "_new", ""],
		["images/img_renders/ret/A58.jpg", "", "_new", ""],
		["images/img_renders/ret/A59.jpg", "", "_new", ""]

	
	],
	autoplay: [true, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
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

