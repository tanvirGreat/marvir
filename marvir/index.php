	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" type="text/css" href="marvir.css">
<script type="text/javascript" src="jquery.min.1.7.js"></script>
<script type="text/javascript" src="modernizr.2.5.3.min.js"></script>
	</head>
		<body>
		<?php 
	
	//this is an associative array due to the keys not being numeric


	include 'header.php' ;

	//srcDemo (
	 // '010.jpg',
	 // '011.jpg','002.jpg',
	  //'004.jpg','007.jpg',
	  //'005.jpg','012.jpg',
	  //'003.jpg'
	  //);

	//$('#photobook').onebook(srcDemo,{OPTIONS});
	?>
<br>
 <div class="flipbook-viewport">
  <div class="container">
    <div class="flipbook">
    <div style="background-image:url(image/11.jpg)"></div>
    <div style="background-image:url(image/9.jpg)">CHOOSE</div>
      <div style="background-image:url(image/1.jpg)"></div>
      <div style="background-image:url(image/2.jpg)"></div>
      <div style="background-image:url(image/3.jpg)"></div>
     <div style="background-image:url(image/4.jpg)"></div>
     <div style="background-image:url(image/5.jpg)"></div>
     <div style="background-image:url(image/6.jpg)"></div>
     <div style="background-image:url(image/7.jpg)"></div>
    </div>
  </div>
</div>


<script type="text/javascript">

function loadApp() {

  // Create the flipbook

  $('.flipbook').turn({
      // Width

      width:922,
      
      // Height

      height:600,

      // Elevation

      elevation: 50,
      
      // Enable gradients

      gradients: true,
      
      // Auto center this flipbook

      autoCenter: true

  });
}

// Load the HTML4 version if there's not CSS transform

yepnope({
  test : Modernizr.csstransforms,
  yep: ['turn.js'],
  nope: ['turn.html4.min.js'],
  both: ['css/marvir.css'],
  complete: loadApp
});

</script>

		</body>
		
		</html>
