<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="authoring-tool" content="Adobe_Animate_CC">
		<title>Shadow Bike</title>
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
        
    <script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("04E497D7F1304B9CBF6E47CB514FD95E");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.MTB();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
        </script>	
	</head>
	<body onload="init();"> 
    <?php
        require_once('inc_db_Shadow_Bikes.php');
        require('header.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div id="animation_container">
						<canvas id="canvas"></canvas>
						<div id="dom_overlay_container"></div>
					</div>
				</div>
	  		</div>
		</div>
        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron col" style="background-image: url('images/habit_hero.jpg'); background-size: cover; height: 75vh;">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
			<div class="row">
                <div class="jumbotron col-md-6">
                    <h1 class="display-4">Hello, world!</h1>
                    <img class="jumbotron-2" src="/images/stumpjumper_hero.jpg" alt="Stump Jumper">
                    <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
                </div>
                <div class="jumbotron col-md-6">
                     <h1 class="display-4">Hello, world!</h1>
                    <img class="jumbotron-2" src="/images/stumpjumper_hero.jpg" alt="Stump Jumper">
                    <p class="lead"> <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
			<div class="row">
                <div class="jumbotron col-md-6 col-lg-3">
                    <img class="jumbotron-4" src="/images/trail_slide.jpg" alt="Slide">
                </div>
                <div class="jumbotron col-md-6 col-lg-3">
                    <img class="jumbotron-4" src="/images/trail_woman.jpg" alt="Trail Riding">
                </div>             
                <div class="jumbotron col-md-6 col-lg-3">
                    <img class="jumbotron-4" src="/images/trail_jumps.jpg" alt="Jumpers">
                </div> 
                <div class="jumbotron col-md-6 col-lg-3">
                    <img class="jumbotron-4" src="/images/trail_woman.jpg" alt="Woman Trail Rider">
                </div>                    
			</div>
        </div>
        <?php require('footer.php'); ?>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
		<script src="https://code.createjs.com/createjs-2015.11.26.min.js" type="text/javascript"></script>
		<script src="MTB.js?1537387149532" type="text/javascript"></script>
	</body>
</html>
