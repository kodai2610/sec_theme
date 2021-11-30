//fadeIn
triggerMargin = 100;

//textille
$(document).ready(function(){ //プラグイン動作用
  $('.js-sec1').textillate({
    loop: false,
      in: {
        effect: 'fadeInRight',
      },
      out: {
        effect: false,
      }
    }).css('visibility','visible');

  var wh1 = $(window).height() * 0.80; //画面の80%の大きさ
  var wh2 = $(window).height() * 0.10; //画面の10%の大きさ

  // $(function() {
  //   var baseBorder = $('.js-sec2').offset().top;
  //   var borderTrigger1 = baseBorder - wh1;
  //   var borderTrigger2 = baseBorder - wh2;
  //   $(window).scroll(function(){
  //     if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
  //       $('.js-sec2').textillate({
  //         loop: false,
  //           in: {
  //             effect: 'fadeInRight',
  //           },
  //           out: {
  //             effect: false,
  //           }
  //         }).css('visibility','visible');
  //     } else {
  //     }}
  //   )
  // })

  // $(function() {
  //   var baseBorder = $('.js-sec3').offset().top;
  //   var borderTrigger1 = baseBorder - wh1;
  //   var borderTrigger2 = baseBorder - wh2;
  //   $(window).scroll(function(){
  //     if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
  //       $('.js-sec3').textillate({
  //         loop: false,
  //           in: {
  //             effect: 'fadeInRight',
  //           },
  //           out: {
  //             effect: false,
  //           }
  //         }).css('visibility','visible');
  //     } else {
  //     }}
  //   )
  // })

  // $(function() {
  //   var baseBorder = $('.js-sec4').offset().top;
  //   var borderTrigger1 = baseBorder - wh1;
  //   var borderTrigger2 = baseBorder - wh2;
  //   $(window).scroll(function(){
  //     if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
  //       $('.js-sec4').textillate({
  //         loop: false,
  //           in: {
  //             effect: 'fadeInRight',
  //           },
  //           out: {
  //             effect: false,
  //           }
  //         }).css('visibility','visible');
  //     } else {
  //     }}
  //   )
  // })

  // $(function() {
  //   var baseBorder = $('.js-sec5').offset().top;
  //   var borderTrigger1 = baseBorder - wh1;
  //   var borderTrigger2 = baseBorder - wh2;
  //   $(window).scroll(function(){
  //     if($(this).scrollTop() > borderTrigger1 && $(this).scrollTop() < borderTrigger2) {
  //       $('.js-sec5').textillate({
  //         loop: false,
  //           in: {
  //             effect: 'fadeInRight',
  //           },
  //           out: {
  //             effect: false,
  //           }
  //         }).css('visibility','visible');
  //     } else {
  //     }}
  //   )
  // })
});

var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("FFC87C5AB1B449E2850CE2D8C576B0B8");
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
	exportRoot = new lib.リカバリ_名称未設定1_20211125132024();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}