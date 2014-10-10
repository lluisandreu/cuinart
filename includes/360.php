<script type="text/javascript">
      
<!--
			if ((window.p2q_Version) && (window.p2q_Version>=2.0)) {
				// Check to see if the version meets the requirements for playback
				var flashvars="";
				// embedded panorama data 
				panorama='<panorama hideabout="1">';
				panorama+='<view>';
				panorama+='<start pan="255.5" tilt="-11" fov="70"/>';
				panorama+='<min pan="0" tilt="-90" fov="5"/>';
				panorama+='<max pan="360" tilt="90" fov="120"/>';
				panorama+='</view><autorotate speed="0.400" delay="5.00" returntohorizon="0.000" onlyinfocus="0" startloaded="0" />';
				panorama+='<display width="640" height="480" quality="9" changemotionquality="1" changestagequality="1" smoothing="1" scalemode="stage" />';
				panorama+='<input tile0url="assets/pans/360/img0.jpg" tile1url="assets/pans/360/img1.jpg" tile2url="assets/pans/360/img2.jpg" tile3url="assets/pans/360/img3.jpg" tile4url="assets/pans/360/img4.jpg" tile5url="assets/pans/360/img5.jpg" tilesize="1000" ><preview images="1" color="0x808080"/>';
				panorama+='</input>';
				panorama+='<control sensitifity="8" simulatemass="1" locked="0" />';
				panorama+='<cursor ownonmovement="1" ownondefault="1" />';
				panorama+='</panorama>';
				flashvars+="panorama=" + escape(panorama) + "&";
				// embedded skin data 
				skin='<skin><element type="image"x="-112" y="-32" anchor="4" width="224" height="64" id="loading image" visible="1" alpha="1" scalex="1" scaley="1" center="4" imgurl="360/skin_0.png" >';
				skin+='<action src="loaded" type="hide" value="" value2="" target="$self" />';
				skin+='<element type="text"x="12" y="14" anchor="0" width="200" height="20" id="loading text" visible="1" alpha="1" scalex="1" scaley="1" center="4" text="&lt;b&gt;Loading... $p%&lt;/b&gt;" align="0" color="0x000000" bordercolor="0x000000" backgroundcolor="0xffffff" background="0" border="0" >';
				skin+='</element>';
				skin+='<element type="rectangle"x="12" y="40" anchor="0" width="200" height="12" id="loading bar" visible="1" alpha="1" scalex="1" scaley="1" center="3" bordercolor="0x000000" borderalpha="1" backgroundcolor="0x4f4f4f" backgroundalpha="1" borderwidth="2" >';
				skin+='<modifier src="loading" type="scalex" offset="0" factor="1" />';
				skin+='</element>';
				skin+='<element type="image"x="200" y="1" anchor="0" width="24" height="24" id="loading close" visible="1" alpha="1" scalex="1" scaley="1" center="4" imgurl="assets/pans/360/skin_1.png" >';
				skin+='<action src="click" type="hide" value="" value2="" target="$parent" />';
				skin+='</element>';
				skin+='</element>';
				skin+='<element x="-138" y="-38" anchor="7" width="277" height="32" id="toolbar" visible="1" alpha="1" scalex="1" scaley="1" center="4" >';
				skin+='<element type="button"x="0" y="0" anchor="0" width="32" height="32" id="left" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/skin_2.png" overurl="assets/pans/360/skin_2o.png" >';
				skin+='<action src="pressed" type="panleft" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="35" y="0" anchor="0" width="32" height="32" id="right" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/skin_3.png" overurl="assets/pans/360/skin_3o.png" >';
				skin+='<action src="pressed" type="panright" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="70" y="0" anchor="0" width="32" height="32" id="up" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/skin_4.png" overurl="assets/pans/360/skin_4o.png" >';
				skin+='<action src="pressed" type="tiltup" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="105" y="0" anchor="0" width="32" height="32" id="down" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/skin_5.png" overurl="assets/pans/360/skin_5o.png" >';
				skin+='<action src="pressed" type="tiltdown" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="140" y="0" anchor="0" width="32" height="32" id="zoom in" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/360/skin_6.png" overurl="assets/pans/360/skin_6o.png" >';
				skin+='<action src="pressed" type="zoomin" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="175" y="0" anchor="0" width="32" height="32" id="zoom out" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/360/skin_7.png" overurl="assets/pans/360/skin_7o.png" >';
				skin+='<action src="pressed" type="zoomout" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="210" y="0" anchor="0" width="32" height="32" id="auto rotate" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/skin_8.png" overurl="assets/pans/360/skin_8o.png" >';
				skin+='<action src="click" type="toogleautorotate" value="" value2="" target="" />';
				skin+='</element>';
				skin+='<element type="button"x="245" y="0" anchor="0" width="32" height="32" id="fullscreen" visible="1" alpha="1" scalex="1" scaley="1" center="4" btnurl="assets/pans/360/skin_9.png" overurl="assets/pans/skin_9o.png" >';
				skin+='<action src="click" type="tooglefullscreen" value="" value2="" target="" />';
				skin+='</element>';
				skin+='</element>';
				skin+='<element type="image"x="-67" y="3" anchor="2" width="64" height="64" id="radar" visible="1" alpha="1" scalex="1" scaley="1" center="4" imgurl="assets/pans/skin_10.png" >';
				skin+='<element type="image"x="0" y="0" anchor="0" width="64" height="64" id="radar beam" visible="1" alpha="1" scalex="1" scaley="1" center="4" imgurl="assets/pans/skin_11.png" >';
				skin+='<modifier src="pan" type="rotate" offset="0" factor="1" />';
				skin+='<modifier src="tanfov" type="scalex" offset="0" factor="1" />';
				skin+='<modifier src="costilt" type="scaley" offset="0" factor="1" />';
				skin+='</element>';
				skin+='<element type="image"x="0" y="0" anchor="0" width="64" height="64" id="radar dot" visible="1" alpha="1" scalex="1" scaley="1" center="4" imgurl="assets/pans/skin_12.png" >';
				skin+='</element>';
				skin+='</element>';
				skin+='</skin>';
				flashvars+="skin=" + escape(skin) + "&";
			p2q_EmbedFlash('assets/pans/360/cocina 11_out.swf','100%','100%','allowFullScreen','true','FlashVars',flashvars);
				
				if (!DetectFlashVer(9,0,0)) {
					document.write('<p class="warning">This content requires Adobe Flash Player Version 9 or higher. '
								 + '<a href="http://www.adobe.com/go/getflash/">Get Flash<\/a><\/p>');
				}
			} else {
				document.writeln('<p class="warning">p2q_embed_object.js is not included or it is too old! Please copy this file into your html directory.<\/p>');
			}
//-->
		
    </script>
