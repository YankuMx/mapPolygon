<!DOCTYPE html>
<html>
	<head>
		<title>Prueba Mapa</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" href="leaflet-0.7.3/leaflet.css" />
        <link rel="stylesheet" href="draw/leaflet.draw.css" />
        <script>
		var pubThis;
		</script>
		<script src="leaflet-0.7.3/leaflet-src.js"></script>
        <script src="draw/Leaflet.draw.js"></script>

        <script src="draw/Edit.Poly.js"></script>
        <script src="draw/Edit.SimpleShape.js"></script>
        <script src="draw/Edit.Circle.js"></script>
        <script src="draw/Edit.Rectangle.js"></script>

        <script src="draw/Draw.Feature.js"></script>
        <script src="draw/Draw.Polyline.js"></script>
        <script src="draw/Draw.Polygon.js"></script>
        <script src="draw/Draw.SimpleShape.js"></script>
        <script src="draw/Draw.Rectangle.js"></script>
        <script src="draw/Draw.Circle.js"></script>
        <script src="draw/Draw.Marker.js"></script>

        <script src="draw/LatLngUtil.js"></script>
        <script src="draw/GeometryUtil.js"></script>
        <script src="draw/LineUtil.Intersect.js"></script>
        <script src="draw/Polyline.Intersect.js"></script>
        <script src="draw/Polygon.Intersect.js"></script>

        <script src="draw/Control.Draw.js"></script>
        <script src="draw/Tooltip.js"></script>
        <script src="draw/Toolbar.js"></script>

        <script src="draw/DrawToolbar.js"></script>
        <script src="draw/EditToolbar.js"></script>
        <script src="draw/EditToolbar.Edit.js"></script>
        <script src="draw/EditToolbar.Delete.js"></script>
		<script src="rastercoords.js"></script>
		<script src="index.js"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="plugins/ion.rangeSlider-2.0.6/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?v=3"></script>
		<script src="js/Google.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.css">
        <link rel="stylesheet" type="text/css" href="plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.skinFlat.css">
			<!-- html, body, #map { width:500px; height:500px; margin:0; padding:0;} -->
		<style>
			html, body, #map-canvas {
            height: 400px;
            margin: 0px;
            padding: 0px;
            font:12px Arial;
            }
            .clmn > div > div
            {
                width: 18%;
                margin:20px 11px;
				float:left;
            }
            .clmn > div > div > span
            {
                margin-bottom: 6px;
            }
			#cuadro-mapa{
				position:relative;	
			}
			 #map { 
				width:800px;
				height:400px; 
				margin:0; 
				padding:0;
			}
			#imagenes{
				display:none;
			}
			.var{
				width:300px;
			}
			textarea{
				height:500px;
				width:500px;
			}
			
			#swipe {
				position:absolute;
			  background:#fff;
				z-index:1000;
				padding:0px;
				height:30px;
				top:45%;
			}
			
			#swipe #handle {
			  position:absolute;
				height:15px;
				width:15px;
				background:#000;
				font-weight:bold;
				border:none;
				cursor:col-resize;
				-webkit-user-select: none;
				text-indent:-9999px;
				border-radius:50%;
				margin-top:0px;
				margin-left:-7.5px;
			}
		</style>
	</head>
	<body onload="init()" id="cuerpo"> 
    	<div id="cuadro-mapa">
            <div id='swipe'>
                <div id='handle'>drag</div>
            </div>  
            <div id="map"></div>
        </div>
        
        <form id="formulario" onsubmit="formu()">
            <div>
                <div class="clmn">
                    <div>
                        <span>Integridad Ecosistémica</span>
                        <input type="text" id="r1" name="r1" value="" class="var"/>
                    </div>
                </div>
            </div>
            Comentario:<br>
          <textarea name="comentario" required></textarea>
          <br><br>
          <input type="submit" value="Enviar">
        </form>  
        
        <?php
$dir ='tiles';
while($dirs = glob($dir . '/*', GLOB_ONLYDIR)) {
  $dir .= '/*';
  if(!$d) {
     $d=$dirs;
   } else {
      $d=$dirs;
   }
}
$count=0;
echo "<div id='imagenes'>";
foreach($d as $directory){
	$images = glob($directory . "/*.png");
	foreach($images as $image)
	{
		$count++;
	  echo "<img src='".$image."'>";
	}
	
}
echo $count;
echo "</div>"; 
?>
	</body>
</html>
