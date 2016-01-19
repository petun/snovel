function include(url){
  document.write('<script src="'+url+'"></script>');
  return false ;
}

/* Stick up menu
========================================================*/
include('assets/template/js/tmstickup.js');
$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').tmStickUp({})
  }  
});

/* Superfish menu
========================================================*/
include('assets/template/js/superfish.js');
include('assets/template/js/jquery.mobilemenu.js');

/* Stellar.js
========================================================*/
include('assets/template/js/stellar/jquery.stellar.js');
$(document).ready(function() { 
  if ($('html').hasClass('desktop')) {
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: -50
      });
  }  
});

/* DEVICE.JS
========================================================*/
include('assets/template/js/device.min.js');

/* Easing library
========================================================*/
include('assets/template/js/jquery.easing.1.3.js');

/* Equal Heights
========================================================*/
include('assets/template/js/jquery.equalheights.js');

/* DEVICE.JS AND SMOOTH SCROLLIG
========================================================*/
include('assets/template/js/jquery.mousewheel.min.js');
include('assets/template/js/jquery.simplr.smoothscroll.min.js');
$(function () { 
  if ($('html').hasClass('desktop')) {
      $.srSmoothscroll({
        step:150,
        speed:800
      });
  }   
});

/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')

/* Copyright Year
========================================================*/
var currentYear = (new Date).getFullYear();
$(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
});

/* ToTop
========================================================*/
include('assets/template/js/jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});