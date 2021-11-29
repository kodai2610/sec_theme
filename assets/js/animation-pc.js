  // PC

  var canvas, stage, exportRoot, anim_container, dom_overlay_container1, fnStartAnimation;
	function init() {
		canvas = document.getElementById("canvas1");
		anim_container = document.getElementById("animation_container1");
		dom_overlay_container1 = document.getElementById("dom_overlay_container1");
		var comp=AdobeAn.getComposition("F97F41CB25D64188A2E5FCAE96081277");
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
		exportRoot = new lib.SECアニメーション();
		stage = new lib.Stage(canvas);
		//Registers the "tick" event listener.
		fnStartAnimation = function() {
			stage.addChild(exportRoot);
			createjs.Ticker.framerate = lib.properties.fps;
			createjs.Ticker.addEventListener("tick", stage);
			stage.addEventListener("tick", stage._handleTick);
		}
		//Code to support hidpi screens and responsive scaling.
		AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container1]);
		AdobeAn.compositionLoaded(lib.properties.id);
		fnStartAnimation();
	}
