<!DOCTYPE html>
<html class="">

        <meta aframe-injected="" name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1, maximum-scale=1, shrink-to-fit=no, minimal-ui, viewport-fit=cover">
        <meta aframe-injected="" name="mobile-web-app-capable" content="yes">
		<meta aframe-injected="" name="theme-color" content="black">
		
	    <script src="https://aframe.io/releases/1.0.0/aframe.min.js"></script><!-- AFrame library -->
        <script src="https://rawgit.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script><!-- AR.js library -->
        <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script><!-- animation library -->

	<body style="margin:0px; overflow: hidden; width:100%; height:100%;">
	<?php while ( have_posts() ) : the_post(); ?><!-- START of the custom field boostraping -->
	

		
      <a-scene embedded="" vr-mode-ui="enabled: false" arjs="sourceType: webcam; debugUIEnabled: false; detectionMode: mono_and_matrix; matrixCodeType: 3x3;" inspector="" keyboard-shortcuts="" screenshot=""> <!--  add detectionMode and matrixCodeType to tell AR.js to recognize barcode markers -->
        <a-assets> 
         <a-asset-item id="animated-asset" src="<?php the_field('arcontent_url'); ?>"></a-asset-item>
        </a-assets>

        <a-marker type="barcode" value="7" material="" arjs-anchor="" arjs-hit-testing="">
            <a-box position="0 0 0" color="yellow" material="" geometry=""></a-box>
        </a-marker>

        <a-marker id="animated-marker" type="barcode" value="8" material="" arjs-anchor="" arjs-hit-testing="">
            <a-entity animation-mixer="" gltf-model="#animated-asset" scale="2 2 2">
            </a-entity>
        </a-marker>

        <a-entity camera=""></a-entity>
	  </a-scene>
	</body>
	<?php endwhile; // end of the loop. ?><!-- END of the custom field boostraping -->

</html>