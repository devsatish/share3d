<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>


<div id="main_container"><!--start main_container-->
                <div id="header"><!--start header-->
                        <div id="logo"><!--start logo-->
                                <a href="index-2.html"><img src="images/logo.png" alt="logo" title="logo" border="0" /></a>
                        </div><!--end logo-->
                        <div id="menu_tab"><!--start menu_tab-->
                                <ul id="menu"><!--start menu-->
                                        <!--border--><li><img src="images/border_menu.jpg" width="2" height="48" alt="border_menu" /></li>
                                        <li> Thanks for signing-in via Twitter</li>
                                        <!--border--><li><img src="images/border_menu.jpg" width="2" height="48" alt="border_menu" /></li>
                                        <?php
                                            if ($sf_user->hasFlash('error')) {
                                            echo '<div id="flashError">'.$sf_user->getFlash('error').'</div>';
                                            }
                                        ?>
                                </ul><!--end menu-->
                        </div><!--end menu_tab-->
                </div><!--end header-->
                <div id="main_content"><!--start main_content-->
                        <div id="banner"><!--start banner-->
                                <div id="boxview" style="height:400;width:600px"><!--start cu3er-container-->

                                  

                                    <h3>Available Models </h3>
                                    <table  class="hovertable" style="width:300px">
                                        <tr>
                                        <th>Model</th>
                                        <th>Description</th>
                                        </tr>
                                        <tr>
                                        <td>Horse</td>
                                        <td>Running Horse</td>
                                        </tr>
                                    </table>

                                </div><!--end cu3er-container-->
                                <img id="shadow" src="images/banner_shadow.png" width="910" height="149" alt="shadow" />
                        </div><!--end banner-->
                        <div class="left_content"><!--start left_content-->
                                <div class="left_box"><!--start left_box-->
                                        <div class="left_text_box">
                                                <h1>What's this?</h1>
                                                <p>
                                                    A demo symfony app, now you are logged in via Twitter, you should see a 3D model.
                                                <p>  If not try using a modern browser, This app uses Three JS , a 3D runtime implemented in Javascript .
                                                </p>
                                                </p>
                                        </div>
                                </div><!--end left_box-->

                        </div><!--end left_content-->
                        <div class="right_content"><!-- start right_content-->

                        </div><!--end right_content-->
                        <div class="clear"></div>
                </div><!--end main_content-->
                <div id="footer"><!-- start footer-->
                        <img src="images/footer_logo.png" height="30" width="150" alt="" title="" class="footer_logo" />
                        <div class="left_footer"><!-- start left_footer-->
                                Demo Symfony app by Veni Movva
                        </div><!-- end left_footer-->
                        <ul class="right_footer"><!-- start right_footer-->
                                <li><a href="#">About</a></li>
                        </ul><!-- end right_footer-->
                </div><!-- end footer-->
        </div><!--end main_container-->


                         <script type="text/javascript">

			var container, stats;
			var camera, scene, projector, renderer;
			var mesh;

			init();
			animate();

			function init() {

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				camera = new THREE.Camera( 50, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.y = 300;
				camera.target.position.y = 150;

				scene = new THREE.Scene();

				var light = new THREE.DirectionalLight( 0xefefff, 2 );
				light.position.x = 1;
				light.position.y = 1;
				light.position.z = 1;
				light.position.normalize();
				scene.addLight( light );

				var light = new THREE.DirectionalLight( 0xffefef, 2 );
				light.position.x = - 1;
				light.position.y = - 1;
				light.position.z = - 1;
				light.position.normalize();
				scene.addLight( light );

				var loader = new THREE.JSONLoader( true );
				loader.load( { model: "horse.js", callback: function( geometry ) {

					mesh = new THREE.Mesh( geometry, new THREE.MeshLambertMaterial( { color: 0x606060, morphTargets: true } ) );
					mesh.scale.set( 1.5, 1.5, 1.5 );
					scene.addObject( mesh );

				} } );

				renderer = new THREE.WebGLRenderer();
				renderer.sortObjects = false;
				renderer.setSize( window.innerWidth, window.innerHeight );

				container.appendChild(renderer.domElement);

				stats = new Stats();
				stats.domElement.style.position = 'absolute';
				stats.domElement.style.top = '0px';
				//container.appendChild( stats.domElement );

			}

			//

			function animate() {

				requestAnimationFrame( animate );

				render();
				stats.update();

			}

			var radius = 600;
			var theta = 0;

			var duration = 1000;
			var keyframes = 15 /*16*/, interpolation = duration / keyframes;
			var lastKeyframe = 0, currentKeyframe = 0;

			function render() {

				theta += 0.2;
				camera.position.x = radius * Math.sin( theta * Math.PI / 360 );
				camera.position.z = radius * Math.cos( theta * Math.PI / 360 );

				if ( mesh ) {

					// Alternate morph targets

					var time = new Date().getTime() % duration;

					var keyframe = Math.floor( time / interpolation ) + 1;

					if ( keyframe != currentKeyframe ) {

						mesh.morphTargetInfluences[ lastKeyframe ] = 0;
						mesh.morphTargetInfluences[ currentKeyframe ] = 1;
						mesh.morphTargetInfluences[ keyframe ] = 0;

						lastKeyframe = currentKeyframe;
						currentKeyframe = keyframe;

						// console.log( mesh.morphTargetInfluences );

					}

					mesh.morphTargetInfluences[ keyframe ] = ( time % interpolation ) / interpolation;
					mesh.morphTargetInfluences[ lastKeyframe ] = 1 - mesh.morphTargetInfluences[ keyframe ];

				}

				renderer.render( scene, camera );

			}

		</script> 