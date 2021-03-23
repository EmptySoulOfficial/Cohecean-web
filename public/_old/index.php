﻿<!DOCTYPE HTML>

<!-- Designed and created by Empty Soul-->
<!-- v1.1.4 -->
<html class="html" lang="de">

<head>

<title>Cohecean</title>

	<meta charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- beschreibung der webseite für google -->
	<meta name="description" content="Cohecean ist eine ehrenamtliche, gemeinnützige Organisation. Cohecean (Cohesion + Ocean) bedeutet Zusammenhalt">


<link href="data/style.css" rel="stylesheet" type="text/css" media="screen" >

<link href="data/nostyle.css" rel="stylesheet" type="text/css" media="screen" >

<link href="data/styleprint.css" rel="stylesheet" type="text/css" media="print" >





<!--fonts -->

<link  href="/fonts/awesome-l.woff2" >



<!-- favicon -->

<link rel="icon" type="image/ico" href="data/images/favicon/favicon.ico">




<!-- javascript api -->
<script type="text/javascript" src="data/jquery-3.3.1.min.js"></script>



<!-- eigene scroll api (beim klicken von 'a'-links scrollt die seite zum angegebenen punkt (per id) ) -->
<script type="text/javascript" src="data/scroll_api.js"></script>





<script>



// check browser
$(document).ready(function() {




  var ua = navigator.userAgent.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i),
      browser;
  if (navigator.userAgent.match(/Edge/i) || navigator.userAgent.match(/Trident.*rv[ :]*11\./i)) {
    browser = "msie";
  }
  else {
    browser = ua[1].toLowerCase();
  }




if (browser === 'chrome'){

//alert(browser);//
}else if(browser === 'msie'){
document.querySelector("link[href='data/nostyle.css']").href = "data/style_explorer.css";




}else if(browser === 'firefox'){
document.querySelector("link[href='data/nostyle.css']").href = "data/style_firefox.css";


}else if(browser === 'safari'){
document.querySelector("link[href='data/nostyle.css']").href = "data/style_safari.css";



}else{}

});








const gambitGalleryIsInView = el => {
	const scroll = window.scrollY || window.pageYOffset
	const boundsTop = el.getBoundingClientRect().top + scroll

	const viewport = {
		top: scroll,
		bottom: scroll + window.innerHeight,
	}

    const bounds = {
		top: boundsTop,
		bottom: boundsTop + el.clientHeight,
	}

	return ( bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom )
		|| ( bounds.top <= viewport.bottom && bounds.top >= viewport.top );
}


// Usage.
document.addEventListener( 'DOMContentLoaded', () => {
	const abschnitt_3 = document.querySelector( '.abschnitt_3' )
	const abschnitt4 = document.querySelector( '#abschnitt4' )

  const handler = () => raf( () => {
		answer = ( gambitGalleryIsInView( abschnitt_3 ) ? overscrolly() : overscrolln()    )
	} )

	handler()
	window.addEventListener( 'scroll', handler )
} )

// requestAnimationFrame
const raf =
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    function( callback ) {
        window.setTimeout( callback, 1000 / 60 )
    }



function overscrolly()
{

	//overscroll back
$('#abschnitt4').removeClass('abs4fixed');

abschnitt5.style.marginTop = "";
abschnitt5.style.boxShadow = "";

 //$('#abschnitt5').removeClass('abs5overscroll');

}

function overscrolln()
{

	//overscroll
var abschnitt5 = document.getElementById('abschnitt5')
	var absheight = document.getElementById('abschnitt4').offsetHeight;
var abstotalheight = absheight+"px";



$('#abschnitt4').addClass('abs4fixed');

abschnitt5.style.marginTop = abstotalheight;
abschnitt5.style.boxShadow = "0px -7px 9px rgba(0,0,0,0.1)";

// $('#abschnitt5').addClass('abs5overscroll');

}

// show content after scroll

function removetilt() {

	if ($(window).width() < 1199) {


  document.getElementById("picturediv").removeAttribute("data-tilt");

$( ".bild_gitu_trigger" ).addClass( "bild_gitu_trigger_mobile" );
$( ".bild_gitu_trigger" ).removeClass( "bild_gitu_trigger" );
}else{

}
}


var Scrollposition;

jQuery(window).bind( 'scroll', function SC() {

Scrollposition = jQuery(window).scrollTop();

if ($(window).width() > 1199) {




if ( Scrollposition <= 200)
{





if ($(window).width() > 1259) {


}else{}

$('.menuleiste').css({'background-color': ''});

  $('.menuleiste').css({'box-shadow': ''});

$( ".coheceanlogo" ).addClass( "logo_side_scroll" );
$( ".burgermenu_line" ).addClass( "bml_color" );
$( ".burgermenu_line" ).removeClass( "bml_color_scroll" );



}
else
{



  $('.menuleiste').css({'background-color': '#fefefe'});
    $('.menuleiste').css({'box-shadow': '4px 4px 9px #00000055'});

$( ".coheceanlogo" ).removeClass( "logo_side_scroll" );


$( ".burgermenu_line" ).addClass( "bml_color_scroll" );
$( ".burgermenu_line" ).removeClass( "bml_color" );

// window width
if ($(window).width() > 1259) {

$('.klasse').css({'css-eigenschaft': 'angabe'});
setTimeout(function(){$('.klasse').css({'css-eigenschaft': 'angabe'});},100);

}else{}


}


  if ( Scrollposition > 500)
  {
$('#feldlinks1').removeClass('feldoutofview_left');
$('#feldrechts1').removeClass('feldoutofview_right');



}else{

$('#feldlinks1').addClass('feldoutofview_left');


$('#feldrechts1').addClass('feldoutofview_right');

}



if ( Scrollposition > 950)
{
$('#vismis_01').removeClass('vismis01cl');




}else{

$('#vismis_01').addClass('vismis01cl');




}


if ( Scrollposition > 1300)
{


$('#vismis_02').removeClass('feldoutofview_left');
$('#vismis_03').removeClass('feldoutofview_right');


}else{

$('#vismis_02').addClass('feldoutofview_left');
$('#vismis_03').addClass('feldoutofview_right');



}

if ( Scrollposition > 2200)
{


$('#projektelinks').removeClass('feldoutofview_left');
$('#projekterechts').removeClass('feldoutofview_right');


}else{
  $('#projektelinks').addClass('feldoutofview_left');
  $('#projekterechts').addClass('feldoutofview_right');




}

if ( Scrollposition > 1900)
{


$('#abs3').removeClass('abs3_pad');



}else{

$('#abs3').addClass('abs3_pad');



}


if ( Scrollposition > 1500)
{


$('#abschnitt4').removeClass('displaynone');



}else{

$('#abschnitt4').addClass('displaynone');



}






//für abs5 (alt)

if ( Scrollposition > 3000)
{


$('#tagpb').removeClass('outofview_bottom');



}else{
$('#tagpb').addClass('outofview_bottom');





}

if ( Scrollposition > 3100)
{


$('#tagp').removeClass('outofview_bottom');



}else{
$('#tagp').addClass('outofview_bottom');





}

//

if ( Scrollposition > 3000)
{


$('#worksb').removeClass('outofview_bottom');



}else{
$('#worksb').addClass('outofview_bottom');





}

if ( Scrollposition > 3000)
{


$('#works').removeClass('outofview_bottom');



}else{
$('#works').addClass('outofview_bottom');





}


if ( Scrollposition > 3600)
{


$('#charib').removeClass('outofview_bottom');



}else{
$('#charib').addClass('outofview_bottom');





}



if ( Scrollposition > 3600)
{


$('#chari').removeClass('outofview_bottom');



}else{
$('#chari').addClass('outofview_bottom');





}


if ( Scrollposition > 4400)
{


$('#shopabs').removeClass('outofview_bottom');



}else{
$('#shopabs').addClass('outofview_bottom');





}



if ( Scrollposition > 5200)
{


$('#kontaktabs').removeClass('outofview_bottom');



}else{
$('#kontaktabs').addClass('outofview_bottom');





}




if ( Scrollposition > 5800)
{


$('#socialabs').removeClass('outofview_bottom');



}else{
$('#socialabs').addClass('outofview_bottom');





}

}else{


	if ($(window).width() < 1200) {


		if ( Scrollposition > 1500)
		{



		$('#abschnitt4').removeClass('displaynone');



		}else{

		$('#abschnitt4').addClass('displaynone');



		}

	}else{



			if ( Scrollposition > 2000)
			{




			$('#abschnitt4').removeClass('displaynone');


			}else{

			$('#abschnitt4').addClass('displaynone');



			}

	}








	if ( Scrollposition > 200)
	{
	$('#bml_0').addClass('bml_color_scroll');
}else{

$('#bml_0').removeClass('bml_color_scroll');
}
	//...when mobile
}



//abschnitt fixed effect

var abs4 = document.getElementById('abschnitt4');
var abs5 = document.getElementById('abschnitt5');
var abs4offset = abs4.getBoundingClientRect().top + window.scrollY;






});


//burger-menu



function bmenu()
{




var menuicon0 = document.getElementById("bml_0");
 var menuicon1 = document.getElementById("bml_1");
var menuicon2 = document.getElementById("bml_2");

var bmlfield = document.getElementById("burgermenu_field");


var menubgx = document.getElementById("menubg");
var bmenueffecx = document.getElementById("bmenueffect");
var bodyX = document.getElementById("body");
var logoside = document.getElementById('coheceanlogo');

var mmenu = document.getElementById("mmenu");


if (menubg.style.opacity === "1") {




//1 =mLeft 4 mtop 10 2 = mLeft 3 mtop -1//



$('html').css("overflow","");

menubgx.style.opacity = "0";
setTimeout(function () {menubgx.style.display = "none";}, 300);
menubgx.style.transition = "0.2s";

setTimeout(function () {bmenueffecx.style.transform = "scale(0)";

bmenueffecx.style.transition = "0.3s";
bmenueffecx.style.opacity = "0.2";
}, 100);






bmlfield.classList.add("bmactive_re");
bmlfield.classList.remove("bmactive");
setTimeout(function(){bmlfield.classList.remove("bmactive_re");},810)



$( ".burgermenu_line" ).removeClass( "bml_color_open" );

$( ".menuleiste" ).removeClass( "menuleistetransparent" );



  if ( Scrollposition <= 200)
  {

  //menu top closed

$('html').css("overflow","");

$( ".coheceanlogo" ).addClass( "logo_side_scroll" );
}else{


}
}else{



  if ( Scrollposition <= 200)
  {

//menu top open
$('html').css("overflow","hidden");

$( ".coheceanlogo" ).removeClass( "logo_side_scroll" );
}else{}
// -------------------------------- MAIN ELSE FOR CHANGE ---------------------- //


bmlfield.classList.add("bmactive");

bmlfield.classList.remove("bmactive_re");
// -------------------------------- MAIN ELSE FOR CHANGE ---------------------- //




$('html').css("overflow","hidden");






menubgx.style.display = "block";



menubgx.style.display = "block";
setTimeout(function () {menubgx.style.opacity = "1";
menubgx.style.transition = "0.3s";

bmenueffecx.style.transform = "scale(20)";
bmenueffecx.style.transition = "0.3s";

bmenueffecx.style.opacity = "1"; }, 100);


$( ".menuleiste" ).addClass( "menuleistetransparent" );

$( ".burgermenu_line" ).addClass( "bml_color_open" );

}

}





function showplayl()
{
var mplay = document.getElementById("albumplaylist");



if(mplay.style.opacity == "1")
{



//setTimeout(function(){playc1.style.display = "none";},350);
//mplay.style.opacity = "0"
//mplay.style.height = "0"



}else{
mplay.display = "block";

if ($(window).width() < 1259) {
setTimeout(function(){
mplay.style.opacity = "1";
mplay.style.height = "45%";},50);

}else{

setTimeout(function(){
mplay.style.opacity = "1";
mplay.style.height = "400px";},50);
}


}

}







function loadingstuff()
{


removetilt();

	var sutex = document.getElementById("ueberschrift ");
	var kre = document.getElementById("kreisbutton");
var vismis01 = document.getElementById("vismis_01");

var portr = document.getElementById("portrait");

var porw = document.getElementById("portrait").offsetWidth;
var porh = document.getElementById("portrait").offsetHeight;
var frame = document.getElementById("goldframe");

  sutex.style.display = "none";
	setTimeout(function(){	sutex.style.display = "block"; sutex.style.visibility = "hidden";},100);
	setTimeout(function(){ sutex.style.visibility = "visible";  },600);


if ($(window).width() < 600) {

//anpassung mobile

portr.style.width ="72vw";
var framew = porw*1.3 + "px";
var frameh = porh*1.3 + "px";
}else{
//anpassung desktop
var framew = porw/1.3 + "px";
var frameh = porh/1.3 + "px";
}

frame.style.width = framew;
frame.style.height = frameh;

  kre.style.display = "none";
  setTimeout(function(){kre.style.display = "block"; kre.style.visibility = "hidden";},100);
  setTimeout(function(){ kre.style.visibility = "visible";  },800);
  }





</script>


<script>



function readlessmobile()
{

  var textuewidth = document.getElementById('uebb_01').offsetWidth;
  var textueb1 = document.getElementById('uebb_01');
  var textueb2 = document.getElementById('uebb_02');
  var textueb3 = document.getElementById('uebb_03');
	var textueb4 = document.getElementById('uebb_04');
	var textueb5 = document.getElementById('uebb_05');

	var readmorebutton = document.getElementById('readmore');
		var readlessmobile = document.getElementById('readlessmobile');


  var readlastbutton = document.getElementById('readlastbutton');
var readforbutton = document.getElementById('readforbutton');
var arrowscontainer = document.getElementById('arrowscontainer');

var uebbox_container = document.getElementById('uebboxcontainer');

//on mobile

uebbox_container.style.display =""

textueb2.style.display="";
textueb3.style.display="";
textueb4.style.display="";
textueb5.style.display="";
textueb5.style.display="";



readlessmobile.style.display="";
readmorebutton.style.display="";




}




var scrollcontrol = 0;


function readmore()
{

  var textuewidth = document.getElementById('uebb_01').offsetWidth;
  var textueb1 = document.getElementById('uebb_01');
  var textueb2 = document.getElementById('uebb_02');
  var textueb3 = document.getElementById('uebb_03');
	var textueb4 = document.getElementById('uebb_04');
	var textueb5 = document.getElementById('uebb_05');

	var readmorebutton = document.getElementById('readmore');
		var readlessmobile = document.getElementById('readlessmobile');


  var readlastbutton = document.getElementById('readlastbutton');
var readforbutton = document.getElementById('readforbutton');
var arrowscontainer = document.getElementById('arrowscontainer');

var uebbox_container = document.getElementById('uebboxcontainer');


	if ($(window).width() < 1199) {

//on mobile

uebbox_container.style.display ="block"

textueb2.style.display="block";
textueb3.style.display="block";
textueb4.style.display="block";
textueb5.style.display="block";
textueb5.style.display="block";



readlessmobile.style.display="block";
readmorebutton.style.display="none";
	}else{


//on desktop


var leftPos = uebbox_container.offsetWidth;

var scrolling = leftPos;


scrollcontrol += 1;

var arrows_container = document.getElementById('arrowscontainer');
arrows_container.style.pointerEvents ="none";
setTimeout(function(){arrows_container.style.pointerEvents ="";},310);


  if(scrollcontrol === 3)
  {

  readlastbutton.style.display = "block";

  readforbutton.style.display = "none";
  }
  else{

    readlastbutton.style.display = "none";

    readforbutton.style.display = "block";

  }

  if(scrollcontrol === 0)
  {
  arrowscontainer.style.display = "none";

}else{

}

//alert(scrollcontrol);
//alert(leftPos);

setTimeout(function(){document.getElementById('uebboxcontainer').scrollLeft += scrolling; },20);
arrowscontainer.style.visibility = "visible";
setTimeout(function(){arrowscontainer.style.opacity = "1";},100);





}
}



function readback()
{

  var textuewidth = document.getElementById('uebb_01').offsetWidth;
  var textueb1 = document.getElementById('uebb_01');
  var textueb2 = document.getElementById('uebb_02');
  var textueb3 = document.getElementById('uebb_03');
  var uebbox_container = document.getElementById('uebboxcontainer');
  var leftPos = uebbox_container.offsetWidth;

var arrowscontainer = document.getElementById('arrowscontainer');

  var scrolling = leftPos;
  //alert(scrolling);
  //alert(leftPos);

  setTimeout(function(){document.getElementById('uebboxcontainer').scrollLeft -= scrolling; },20);

scrollcontrol -= 1;



var arrows_container = document.getElementById('arrowscontainer');
arrows_container.style.pointerEvents ="none";
setTimeout(function(){arrows_container.style.pointerEvents ="";},310);

  if(scrollcontrol === 3)
  {

  readlastbutton.style.display = "block";

  readforbutton.style.display = "none";
  }
  else{

    readlastbutton.style.display = "none";

    readforbutton.style.display = "block";

  }

  if(scrollcontrol === 0)
  {

    arrowscontainer.style.opacity = "0";
  setTimeout(function(){arrowscontainer.style.visibility = "hidden";},310);

}else{

}

if(scrollcontrol <= 0)
{
scrollcontrol = 0;

}else{}


}


function readlast()
{

  var textuewidth = document.getElementById('uebb_01').offsetWidth;
  var textueb1 = document.getElementById('uebb_01');
  var textueb2 = document.getElementById('uebb_02');
  var textueb3 = document.getElementById('uebb_03');
  var uebbox_container = document.getElementById('uebboxcontainer');
  var leftPos = textueb2.offsetLeft;

  var scrolling = leftPos*4;
  //alert(scrolling);
  //alert(leftPos);

  setTimeout(function(){document.getElementById('uebboxcontainer').scrollLeft -= scrolling; },20);
scrollcontrol = 0;

if(scrollcontrol === 0)
{

  arrowscontainer.style.opacity = "0";
setTimeout(function(){arrowscontainer.style.visibility = "hidden";},310);

}else{

}



}



function mailsended()
{
var form = document.getElementById("mailform");
var mesa = document.getElementById("sendedmessage");
var mbox = document.getElementById("mailbox");


mbox.style.transform = "scaleX(0)";

setTimeout(function(){
form.style.display = "none";
mesa.style.display = "block";
  mbox.style.transform = "";
  $( ".mailbox" ).addClass( "mailsended" );
},300);



}



$(document).ready(function(){
  $("#mailsend").click(function(){

var anrede = document.getElementById("anrede").value;
var vorname = document.getElementById("vorname").value;
var nachname = document.getElementById("nachname").value;
var email = document.getElementById("email").value;
var nachricht = document.getElementById("nachricht").value;


var vornamex = document.getElementById("vorname");
var nachnamex = document.getElementById("nachname");
var emailx = document.getElementById("email");
var nachrichtx = document.getElementById("nachricht");


var reWhiteSpace = new RegExp("/^\s+$/");

var mescount = 0

if (vorname === "")
{

vornamex.style.outline = "2px solid #ff0000";


}else{
vornamex.style.outline = "";
mescount += 1

}


  if (nachname === "")
  {

  nachnamex.style.outline = "2px solid #ff0000";


  }else{
    nachnamex.style.outline = "";

mescount += 1
}

    if (email === "")
    {

    emailx.style.outline = "2px solid #ff0000";






    }else{
      emailx.style.outline = "";
mescount += 1
    }


      if (nachricht === "")
      {

      nachrichtx.style.outline = "2px solid #ff0000";






      }else{
mescount += 1
nachrichtx.style.outline = "";
      }

      if(mescount === 4)

{

       $.ajax({
      type: 'POST',
                  url: 'data/mailsend.php',
                  data:  { anrede:anrede,vorname:vorname,nachname:nachname,email:email,nachricht:nachricht},
                   success: function(result) {
      mailsended();
                      // $('#avier').html(result);
                  },
                  error: function() {
                      alert('Nachricht konnte nicht verschickt werden');
                  }
          });

}else{



}


 });
});

</script>

<script>

//loadingscript
window.addEventListener("load", function(){
var loader = document.getElementById("loader");
setTimeout(function(){document.body.removeChild(loader)},200);});

</script>


</head>



<body id="body" onLoad="loadingstuff()">



<!-- Ladebildschirm -->

<div class="loadingscreen" id="loader">

<div class="lboxholder">

<div class="loadinglogo">
	<!-- ladeicon -->
	<img src="data/images/logo/logo_small.png" width="100%"  height="100%" alt="loading"/>
</div>

</div>
<!-- Ladetext -->

<div class="loadingtext">Wir sind gleich für Sie da...</div>
</div>









<center id="centerpage">



	<!-- menuleiste -->
<div class="menuleiste" id="mmenu">


<div class="menuleiste_content">

<div class="svg_logo">
<a href="#home" >

<!-- SVG LOGO !! Beim ERSETZEN BITTE AUF DIE BENNENUNG DER CLASSEN und IDs ACHTEN-->
<svg version="1.1" class="coheceanlogo logo_side_scroll"  id="coheceanlogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 841.9 595.3" style="enable-background:new 0 0 841.9 595.3;" xml:space="preserve">
<style type="text/css">
	.cl0{fill:none;stroke:#000000;stroke-miterlimit:10;transition: 0.5s;
}
	.cl1{fill:none;stroke:#B27F4A;stroke-width:3;stroke-miterlimit:10;transition: 0.5s;
}
	.cl2{fill:none;}
	.cl3{fill:#432919; transition: 0.5s;
}
	.cl4{fill:#B27F4A; transition: 0.5s;
}
	.cl5{fill:#3B78BC;transition: 0.5s;
}
	.cl6{fill:#4DA2DA;transition: 0.5s;
}
	.cl7{fill:#5EB4E5;transition: 0.5s;
}
	.cl8{fill:#4285C5;transition: 0.5s;
}
	.cl9{fill:#7ECEF3;transition: 0.5s;
}
</style>
<line class="cl0" x1="-58.5" y1="33.1" x2="-58.5" y2="562.2"/>
<line class="cl0" x1="711.2" y1="-58.4" x2="182.1" y2="-58.4"/>
<polyline class="cl1" points="216.1,346 216.1,512.6 632.8,512.6 "/>
<polyline class="cl1" points="632,240.9 632,74.3 215.2,74.3 "/>
<g>
	<path class="cl2" d="M208.1,264.6c-5.8,0-11,1.3-15.6,3.8c-4.6,2.5-8.2,6-10.7,10.5c-2.5,4.5-3.7,9.6-3.7,15.3
		c0,5.7,1.3,10.8,3.9,15.3c0.4,0.7,0.8,1.4,1.3,2c1.7,1.6,3.6,3,5.8,4.2c4.6,2.5,9.8,3.7,15.6,3.7c8.8,0,16-2.8,21.6-8.3
		c5.6-5.5,8.5-12.6,8.5-21.3c0-5.7-1.3-10.8-3.8-15.3c-0.4-0.7-0.8-1.4-1.3-2.1c-1.7-1.6-3.6-3-5.8-4.2
		C219.1,265.8,213.9,264.6,208.1,264.6z"/>
	<polygon class="cl2" points="646.5,299.2 634.9,272 624.3,299.2 	"/>
	<path class="cl3" d="M146.3,325.6c-5.5,2.9-10.6,5-15.3,6.2c-4.6,1.2-10.1,1.8-16.3,1.8c-9,0-17.1-1.8-24.2-5.4
		c-4.1-2.1-7.7-4.7-10.8-7.9c3.8,5.1,8.6,9.2,14.5,12.2c7.1,3.6,15.1,5.4,24.2,5.4c6.2,0,11.6-0.6,16.3-1.8
		c4.6-1.2,9.7-3.3,15.3-6.2v-15.5c-1.3,0.7-2.5,1.3-3.7,1.9V325.6z"/>
	<path class="cl3" d="M130.7,262.3c-4.5-1.3-9.1-2-14-2c-6.1,0-11.6,1.3-16.5,3.8c-4.9,2.5-8.7,6-11.4,10.6
		c-2.7,4.6-4.1,9.6-4.1,15.2c0,5.7,1.3,10.8,4,15.4c1.3,2.2,2.8,4.1,4.6,5.8c-0.3-0.5-0.6-0.9-0.9-1.4c-2.7-4.5-4-9.6-4-15.4
		c0-5.6,1.4-10.7,4.1-15.2c2.7-4.6,6.5-8.1,11.4-10.6c4.9-2.5,10.4-3.8,16.5-3.8c4.9,0,9.5,0.7,14,2c4.5,1.3,9.3,3.5,14.6,6.5v-15.5
		c-1.2-0.6-2.5-1.2-3.7-1.7v12.9C140,265.8,135.2,263.6,130.7,262.3z"/>
	<path class="cl3" d="M181.9,309.5c-2.6-4.5-3.9-9.6-3.9-15.3c0-5.7,1.2-10.8,3.7-15.3c2.5-4.5,6-8,10.7-10.5
		c4.6-2.5,9.8-3.8,15.6-3.8c5.8,0,11,1.2,15.6,3.7c2.2,1.2,4.1,2.6,5.8,4.2c-2.4-3.6-5.6-6.4-9.5-8.5c-4.6-2.5-9.8-3.7-15.6-3.7
		c-5.8,0-11,1.3-15.6,3.8c-4.6,2.5-8.2,6-10.7,10.5c-2.5,4.5-3.7,9.6-3.7,15.3c0,5.7,1.3,10.8,3.9,15.3c1.4,2.4,3,4.5,5,6.3
		C182.8,310.8,182.3,310.2,181.9,309.5z"/>
	<path class="cl3" d="M243,263.9c0.8,1.1,1.6,2.2,2.3,3.4c4.2,6.9,6.3,14.4,6.3,22.6c0,8-2,15.4-6.1,22.2
		c-4.1,6.8-9.7,12.1-16.9,15.9c-7.2,3.8-15.2,5.7-24.2,5.7c-8.8,0-16.9-1.9-24.1-5.7c-4.2-2.2-7.8-4.9-11-8.1
		c3.8,5.1,8.7,9.3,14.6,12.5c7.2,3.8,15.3,5.7,24.1,5.7c9,0,17-1.9,24.2-5.7c7.2-3.8,12.8-9.1,16.9-15.9c4.1-6.8,6.1-14.2,6.1-22.2
		c0-8.2-2.1-15.7-6.3-22.6C247.3,268.7,245.3,266.2,243,263.9z"/>
	<polygon class="cl3" points="344.5,332.6 331.7,332.6 331.7,336.9 348.2,336.9 348.2,251.4 344.5,251.4 	"/>
	<rect x="283.6" y="251.4" class="cl3" width="3.7" height="31.6"/>
	<polygon class="cl3" points="283.6,296.5 283.6,332.6 270.8,332.6 270.8,336.9 287.3,336.9 287.3,300.8 328,300.8 328,296.5 	"/>
	<polygon class="cl3" points="419.4,332.6 367,332.6 367,336.9 423.1,336.9 423.1,324 419.4,324 	"/>
	<polygon class="cl3" points="379.9,295.4 379.9,319.6 383.5,319.6 383.5,299.7 420.6,299.7 420.6,286.8 416.9,286.8 416.9,295.4
		"/>
	<polygon class="cl3" points="379.9,260 379.9,282.5 383.5,282.5 383.5,264.3 422.3,264.3 422.3,251.4 418.6,251.4 418.6,260 	"/>
	<path class="cl3" d="M494.4,262.3c-4.5-1.3-9.1-2-14-2c-6.1,0-11.6,1.3-16.5,3.8c-4.9,2.5-8.7,6-11.4,10.6
		c-2.7,4.6-4.1,9.6-4.1,15.2c0,5.7,1.3,10.8,4,15.4c1.3,2.2,2.8,4.1,4.6,5.8c-0.3-0.5-0.6-0.9-0.9-1.4c-2.7-4.5-4-9.6-4-15.4
		c0-5.6,1.4-10.7,4.1-15.2c2.7-4.6,6.5-8.1,11.4-10.6c4.9-2.5,10.4-3.8,16.5-3.8c4.9,0,9.5,0.7,14,2c4.5,1.3,9.3,3.5,14.6,6.5v-15.5
		c-1.2-0.6-2.5-1.2-3.7-1.7v12.9C503.7,265.8,498.8,263.6,494.4,262.3z"/>
	<path class="cl3" d="M509.9,325.6c-5.5,2.9-10.6,5-15.3,6.2c-4.6,1.2-10.1,1.8-16.3,1.8c-9,0-17.1-1.8-24.2-5.4
		c-4.1-2.1-7.7-4.7-10.8-7.9c3.8,5.1,8.6,9.2,14.5,12.2c7.1,3.6,15.1,5.4,24.2,5.4c6.2,0,11.6-0.6,16.3-1.8
		c4.6-1.2,9.7-3.3,15.3-6.2v-15.5c-1.3,0.7-2.5,1.3-3.7,1.9V325.6z"/>
	<polygon class="cl3" points="581.8,332.6 529.3,332.6 529.3,336.9 585.4,336.9 585.4,324 581.8,324 	"/>
	<polygon class="cl3" points="542.2,295.4 542.2,319.6 545.9,319.6 545.9,299.7 582.9,299.7 582.9,286.8 579.2,286.8 579.2,295.4
		"/>
	<polygon class="cl3" points="542.2,260 542.2,282.5 545.9,282.5 545.9,264.3 584.6,264.3 584.6,251.4 580.9,251.4 580.9,260 	"/>
	<polygon class="cl3" points="642.4,251.4 678.2,332.6 662.6,332.6 664.5,336.9 681.9,336.9 644.2,251.4 	"/>
	<polygon class="cl3" points="613.9,311.8 605.7,332.6 593.8,332.6 592,336.9 609.4,336.9 617.6,316.1 653.8,316.1 651.9,311.8 	"/>
	<polygon class="cl3" points="634.9,272 632.1,265.4 618.9,299.2 624.3,299.2 	"/>
	<polygon class="cl3" points="704.4,332.6 691.9,332.6 691.9,336.9 708.1,336.9 708.1,276.3 704.4,271.9 	"/>
	<polygon class="cl3" points="753.5,306.7 706.4,251.4 706.4,251.4 753.5,306.7 	"/>
	<polygon class="cl3" points="769.6,251.4 769.6,332.6 755.5,332.6 759.1,336.9 773.3,336.9 773.3,251.4 	"/>
	<path class="cl4" d="M114.7,333.7c6.2,0,11.6-0.6,16.3-1.8c4.6-1.2,9.7-3.3,15.3-6.2v-9.3v-6.3c-6.5,3.5-11.9,5.9-16.1,7.3
		c-4.3,1.3-8.7,2-13.4,2c-6.1,0-11.6-1.2-16.5-3.7c-2.6-1.3-4.8-2.9-6.8-4.7c-1.8-1.7-3.3-3.6-4.6-5.8c-2.7-4.5-4-9.6-4-15.4
		c0-5.6,1.4-10.7,4.1-15.2c2.7-4.6,6.5-8.1,11.4-10.6c4.9-2.5,10.4-3.8,16.5-3.8c4.9,0,9.5,0.7,14,2c4.5,1.3,9.3,3.5,14.6,6.5v-12.9
		v-2.6c-5.4-2.6-10.4-4.5-15-5.6c-4.6-1.1-9.4-1.7-14.3-1.7c-9.2,0-17.4,1.9-24.7,5.6c-7.3,3.7-13.1,9-17.2,15.8
		c-4.2,6.9-6.3,14.6-6.3,23.2c0,8,2,15.4,6.1,22.2c1.7,2.8,3.7,5.4,5.9,7.6c3.1,3.2,6.7,5.8,10.8,7.9
		C97.7,331.9,105.7,333.7,114.7,333.7z"/>
	<path class="cl4" d="M180.3,327.9c7.2,3.8,15.3,5.7,24.1,5.7c9,0,17-1.9,24.2-5.7c7.2-3.8,12.8-9.1,16.9-15.9
		c4.1-6.8,6.1-14.2,6.1-22.2c0-8.2-2.1-15.7-6.3-22.6c-0.7-1.2-1.5-2.3-2.3-3.4c-3.9-5.2-8.7-9.4-14.6-12.4
		c-7.1-3.6-15-5.5-23.9-5.5c-9.2,0-17.4,1.9-24.5,5.7c-7.1,3.8-12.7,9.2-16.7,16.1c-4,6.9-6.1,14.3-6.1,22.1c0,8.1,2,15.5,6.1,22.2
		c1.7,2.8,3.7,5.4,6,7.7C172.5,323,176.1,325.7,180.3,327.9z M178.3,305.2c-2.6-4.5-3.9-9.6-3.9-15.3c0-5.7,1.2-10.8,3.7-15.3
		c2.5-4.5,6-8,10.7-10.5c4.6-2.5,9.8-3.8,15.6-3.8c5.8,0,11,1.2,15.6,3.7c3.9,2.1,7.1,4.9,9.5,8.5c0.5,0.7,0.9,1.3,1.3,2.1
		c2.5,4.5,3.8,9.7,3.8,15.3c0,8.7-2.8,15.8-8.5,21.3c-5.6,5.5-12.9,8.3-21.6,8.3c-5.8,0-11-1.2-15.6-3.7c-2.2-1.2-4.1-2.6-5.8-4.2
		C181.3,309.7,179.6,307.6,178.3,305.2z"/>
	<polygon class="cl4" points="344.5,251.4 344.5,247.1 328,247.1 328,283.1 287.3,283.1 283.6,283.1 283.6,251.4 283.6,247.1
		267.1,247.1 267.1,332.6 270.8,332.6 283.6,332.6 283.6,296.5 328,296.5 328,300.8 328,332.6 331.7,332.6 344.5,332.6 	"/>
	<polygon class="cl4" points="419.4,324 419.4,319.6 383.5,319.6 379.9,319.6 379.9,295.4 416.9,295.4 416.9,286.8 416.9,282.5
		383.5,282.5 379.9,282.5 379.9,260 418.6,260 418.6,251.4 418.6,247.1 363.3,247.1 363.3,332.6 367,332.6 419.4,332.6 	"/>
	<path class="cl4" d="M478.4,333.7c6.2,0,11.6-0.6,16.3-1.8c4.6-1.2,9.7-3.3,15.3-6.2v-9.3v-6.3c-6.5,3.5-11.9,5.9-16.1,7.3
		c-4.3,1.3-8.7,2-13.4,2c-6.1,0-11.6-1.2-16.5-3.7c-2.6-1.3-4.8-2.9-6.8-4.7c-1.8-1.7-3.3-3.6-4.6-5.8c-2.7-4.5-4-9.6-4-15.4
		c0-5.6,1.4-10.7,4.1-15.2c2.7-4.6,6.5-8.1,11.4-10.6c4.9-2.5,10.4-3.8,16.5-3.8c4.9,0,9.5,0.7,14,2c4.5,1.3,9.3,3.5,14.6,6.5v-12.9
		v-2.6c-5.4-2.6-10.4-4.5-15-5.6c-4.6-1.1-9.4-1.7-14.3-1.7c-9.2,0-17.4,1.9-24.7,5.6c-7.3,3.7-13.1,9-17.2,15.8
		c-4.2,6.9-6.3,14.6-6.3,23.2c0,8,2,15.4,6.1,22.2c1.7,2.8,3.7,5.4,5.9,7.6c3.1,3.2,6.7,5.8,10.8,7.9
		C461.3,331.9,469.4,333.7,478.4,333.7z"/>
	<polygon class="cl4" points="581.8,324 581.8,319.6 545.9,319.6 542.2,319.6 542.2,295.4 579.2,295.4 579.2,286.8 579.2,282.5
		545.9,282.5 542.2,282.5 542.2,260 580.9,260 580.9,251.4 580.9,247.1 525.7,247.1 525.7,332.6 529.3,332.6 581.8,332.6 	"/>
	<path class="cl4" d="M642.4,251.4l-1.9-4.3h-16.9l-35.2,85.4h5.5h11.8l8.3-20.8h38l1.8,4.3l7,16.5h1.8h15.6L642.4,251.4z
		 M632.1,265.4l2.8,6.6l11.6,27.2h-22.2h-5.4L632.1,265.4z"/>
	<polygon class="cl4" points="769.6,251.4 769.6,247.1 753.5,247.1 753.5,306.7 753.5,306.7 706.4,251.4 702.7,247.1 688.2,247.1
		688.2,332.6 691.9,332.6 704.4,332.6 704.4,271.9 708.1,276.3 755.5,332.6 755.5,332.6 769.6,332.6 	"/>
</g>
<g>
	<path class="cl2" d="M702.7,500.2c0.3,0.5,0.7,1.1,1.2,1.7C703.4,501.3,703,500.7,702.7,500.2z"/>
	<path class="cl5" d="M702.2,499.5c0.1,0.2,0.3,0.5,0.5,0.8C702.5,500,702.3,499.7,702.2,499.5z"/>
	<path class="cl5" d="M703.9,501.9c3,4.1,8.6,10.7,10,10.7C709.2,508.1,705.9,504.6,703.9,501.9z"/>
	<path class="cl2" d="M702.2,499.5c0.1,0.2,0.3,0.5,0.5,0.8C702.5,500,702.3,499.7,702.2,499.5z"/>
	<path class="cl2" d="M703.9,501.9c3,4.1,8.6,10.7,10,10.7C709.2,508.1,705.9,504.6,703.9,501.9z"/>
	<path class="cl2" d="M702.7,500.2c0.3,0.5,0.7,1.1,1.2,1.7C703.4,501.3,703,500.7,702.7,500.2z"/>
	<path class="cl2" d="M417.3,448.7l-0.3-0.1c0,0,0.1,0,0.1,0L417.3,448.7z"/>
	<path class="cl2" d="M313.4,391.8c-2.2-1.3-4.4-2.3-4.7-2.6C310.4,390.2,312,391,313.4,391.8z"/>
	<path class="cl2" d="M364.4,427.5c-1.3,0.3-2.3,1.1-2.9,2.5c-0.4,0.7-1,1.2-2,1.4c0.9-0.2,1.6-0.6,2-1.4
		C362.2,428.6,363.2,427.8,364.4,427.5c0.2-0.1,0.4-0.1,0.6-0.1C364.9,427.4,364.7,427.4,364.4,427.5z"/>
	<path class="cl2" d="M420.1,449.3C420.1,449.3,420.2,449.3,420.1,449.3l-0.7-0.1c0,0,0,0,0.1,0L420.1,449.3z"/>
	<path class="cl2" d="M416.3,448.6l-0.7-0.1l0.4,0.1C416.1,448.5,416.2,448.6,416.3,448.6z"/>
	<polygon class="cl2" points="387.3,474.7 387.3,474.6 387.2,474.5 387.3,474.6 	"/>
	<path class="cl2" d="M414.6,448.3L414.6,448.3C414.5,448.2,414.5,448.2,414.6,448.3L414.6,448.3
		C414.6,448.3,414.6,448.3,414.6,448.3z"/>
	<path class="cl2" d="M386,472.7l2.3,0.5c0.8,0.2,2,0.4,3.4,0.6c-1.4-0.2-2.5-0.4-3.4-0.6L386,472.7z"/>
	<path class="cl2" d="M470.7,450.2c-0.7,0-1.6-0.1-2.6-0.1C469.1,450.2,470,450.2,470.7,450.2z"/>
	<path class="cl2" d="M470.7,450.2c0.5,0,0.8,0,1.1,0.1c0.7,0.1,2,0.2,3.7,0.5c-1.7-0.3-3-0.4-3.7-0.5
		C471.5,450.3,471.1,450.2,470.7,450.2z"/>
	<path class="cl2" d="M468.1,450.1c-0.7,0-1.5,0-2.4,0C466.6,450.1,467.3,450.1,468.1,450.1z"/>
	<path class="cl2" d="M414.1,465.9L414.1,465.9c-1.6-0.2-3-0.4-4.2-0.6C411.1,465.5,412.5,465.7,414.1,465.9z"/>
	<path class="cl2" d="M546,401.2c0.4,0,0.8,0,1.1,0C546.8,401.2,546.4,401.2,546,401.2z"/>
	<path class="cl2" d="M548.8,400.6c0.3-0.5,0.8-0.8,1.5-0.9c0.7-0.1,1.6-1,2.7-2.7c1.1-1.6,1.4-2.5,1-2.8c0.4,0.2,0.1,1.2-1,2.8
		c-1.1,1.7-2.1,2.5-2.7,2.7C549.5,399.8,549,400.1,548.8,400.6c-0.1,0.3-0.7,0.5-1.6,0.5C548.1,401.1,548.7,400.9,548.8,400.6z"/>
	<path class="cl2" d="M448.3,424.1c2.8-0.2,4.3-0.6,4.4-1.1c0-0.2,0.2-0.3,0.5-0.4c-0.3,0-0.5,0.2-0.5,0.4
		C452.7,423.5,451.2,423.8,448.3,424.1c-2.9,0.2-5.1,0.5-6.6,0.8c-1.2,0.3-2.3,0.4-3.3,0.4c1,0,2.2-0.2,3.3-0.4
		C443.2,424.6,445.4,424.3,448.3,424.1z"/>
	<path class="cl2" d="M432.6,428.9c0.3-1.3,0.8-2,1.5-2.1c0.7-0.1,1.1-0.5,1.2-1c0.1-0.5,0.8-0.7,2.1-0.5c-1.3-0.1-2,0-2.1,0.5
		c-0.1,0.5-0.5,0.8-1.2,1C433.3,426.9,432.8,427.6,432.6,428.9c-0.3,1.3-4.4,1.9-4.4,1.9l0,0C428.1,430.8,432.3,430.2,432.6,428.9z"
		/>
	<path class="cl2" d="M464.8,421.5c0.4-0.6,1.6-1.2,3.6-2c2.1-0.8,3.9-1.5,5.6-1.9c0.9-0.2,1.8-0.4,2.7-0.4c-1,0-1.9,0.2-2.7,0.4
		c-1.7,0.5-3.6,1.1-5.6,1.9C466.4,420.3,465.2,421,464.8,421.5c-0.4,0.6-1.4,1.2-3.2,1.6c-0.9,0.2-1.7,0.3-2.7,0.3
		c0.9,0,1.8-0.1,2.7-0.3C463.3,422.7,464.4,422.2,464.8,421.5z"/>
	<path class="cl2" d="M423.7,430.7l2.6-0.7h0L423.7,430.7c-1.7,0.5-2.6,0.8-2.8,0.9c-0.1,0-0.8,0.1-1.9,0.1c1.1,0,1.8-0.1,1.9-0.1
		C421.1,431.5,422,431.2,423.7,430.7z"/>
	<path class="cl2" d="M486.8,418.6C486.8,418.6,486.8,418.6,486.8,418.6C486.8,418.6,486.8,418.6,486.8,418.6
		c-0.1,0.3-0.2,0.4-0.5,0.4C486.6,419,486.7,418.9,486.8,418.6z"/>
	<path class="cl2" d="M392.2,425.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2c0.1-0.1,0.4-0.1,0.8-0.1
		c-0.4,0-0.7,0-0.8,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2L392.2,425.1l-0.2,0.1v0L392.2,425.1z"/>
	<path class="cl2" d="M406.1,428c-0.6-0.1-1.2-0.2-1.8-0.2c-0.4,0-0.8-0.1-1.1-0.1c0.4,0,0.7,0.1,1.1,0.1
		C404.9,427.8,405.5,427.9,406.1,428z"/>
	<path class="cl2" d="M395.4,424c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3,0-0.5,0c0.1,0,0.3,0,0.5,0C395.2,423.9,395.3,423.9,395.4,424z"
		/>
	<path class="cl2" d="M391.9,445.6c0.6,0.1,1.3,0.2,2,0.3C393.3,445.8,392.6,445.7,391.9,445.6L391.9,445.6z"/>
	<path class="cl2" d="M389.2,445.1c0.8,0.2,1.6,0.3,2.5,0.5l0,0C390.8,445.4,390,445.2,389.2,445.1z"/>
	<path class="cl2" d="M572.1,391.7c-2.4,0-4.6,0.3-6.6,1c-0.8,0.3-1.5,0.5-2.2,0.7c0.7-0.2,1.4-0.4,2.2-0.7
		C567.5,392.1,569.7,391.8,572.1,391.7z"/>
	<path class="cl2" d="M559.5,394.2c1.2-0.1,2.5-0.4,3.9-0.7C562,393.8,560.7,394,559.5,394.2z"/>
	<path class="cl2" d="M554.3,394c-0.4,0-0.5,0-0.5,0.1C553.8,394.1,554,394,554.3,394z"/>
	<path class="cl2" d="M523.7,415.3c-0.4-0.3-0.4-0.8-0.2-1.3c0.3-0.5,1.4-1.2,3.3-2.1c1.9-1,3.1-2.7,3.7-5.3
		c0.5-2.6,1.7-3.6,3.4-2.9s2.7,0.7,2.8,0.2c0.1-0.5-0.3-1.2-1.2-2l-1.3-1.3l0.9-0.2l0.9-0.2h0l-0.9,0.2l-0.9,0.2l1.3,1.3
		c0.9,0.8,1.3,1.5,1.2,2s-1,0.5-2.8-0.2c-1.8-0.6-2.9,0.3-3.4,2.9c-0.5,2.6-1.8,4.4-3.7,5.3c-2,0.9-3.1,1.7-3.3,2.1
		C523.2,414.5,523.3,414.9,523.7,415.3c0.3,0.3-1.8,1.3-6.3,3c0,0,0,0,0,0c0,0,0,0,0,0C521.9,416.6,524,415.6,523.7,415.3z"/>
	<path class="cl2" d="M538.2,400.5c-0.2,0-0.3-0.1-0.5-0.1l-1.1-0.2l1.1,0.2C537.9,400.4,538.1,400.4,538.2,400.5z"/>
	<path class="cl2" d="M513.1,459.5l0-0.8L513.1,459.5l-1.9,0.8c-0.3,0.1-0.5,0.2-0.7,0.3c0.2-0.1,0.4-0.2,0.7-0.3L513.1,459.5z"/>
	<path class="cl2" d="M575.1,464.8c0.3,0,0.4-0.1,0.4-0.2C575.5,464.7,575.3,464.8,575.1,464.8z"/>
	<path class="cl2" d="M623.6,375.5c-1.5,0.5-1.8,0.9-1.1,1.2h0C621.8,376.5,622.2,376.1,623.6,375.5c1.5-0.5,1.8-1,1.1-1.5
		c0,0,0,0,0,0c0,0,0,0,0,0C625.5,374.5,625.1,375,623.6,375.5z"/>
	<polygon class="cl2" points="576.5,455.7 576.6,455.7 576.5,455.7 575.3,455.7 575,455.1 575.3,455.7 	"/>
	<polygon class="cl2" points="632.4,382.2 633.1,382.7 633.2,383 633.2,383 633.1,382.7 632.4,382.2 631.7,381.6 631.6,381.6
		631.7,381.6 	"/>
	<path class="cl2" d="M575.3,461.8c0.7-0.9,1.3-2.2,1.8-3.7l0.6-2.3l-0.6,2.3C576.6,459.6,576,460.8,575.3,461.8z"/>
	<path class="cl2" d="M623.5,377.9c-0.1,0.5-0.4,0.8-1,0.8l-0.8,0.1l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1
		l-0.3,0.1l-0.2,0.2l0,0l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.8-0.1
		C623.1,378.7,623.4,378.5,623.5,377.9c0.1-0.3,0-0.5-0.2-0.8C623.5,377.4,623.6,377.7,623.5,377.9z"/>
	<path class="cl2" d="M600.1,420.3c-0.4,0.5-0.9,1-1.3,1.5C599.3,421.2,599.8,420.7,600.1,420.3z"/>
	<path class="cl2" d="M595.6,404.5c-0.1-0.1-0.3-0.2-0.5-0.2c-0.3-0.1-0.6-0.4-1-0.7c0.4,0.4,0.7,0.6,1,0.7
		C595.3,404.3,595.5,404.4,595.6,404.5z"/>
	<path class="cl2" d="M594.3,426.2L594.3,426.2c-0.1,0-0.1,0-0.2,0C594.1,426.2,594.2,426.2,594.3,426.2z"/>
	<path class="cl2" d="M534.8,464.9c-0.5-0.1-1-0.2-1.6-0.3C533.8,464.7,534.4,464.8,534.8,464.9z"/>
	<path class="cl2" d="M531.4,464c0.3,0.1,0.6,0.2,0.9,0.3s0.6,0.2,0.9,0.3c-0.3-0.1-0.6-0.2-0.9-0.3S531.7,464.1,531.4,464z"/>
	<path class="cl2" d="M512.4,464.3c0,0-0.1,0.1-0.1,0.1l-0.2,0.2l0.2-0.2C512.4,464.4,512.4,464.3,512.4,464.3z"/>
	<path class="cl2" d="M512.7,463.3c0,0.1,0,0.1,0,0.2c0,0.1-0.1,0.2-0.1,0.3c0-0.1,0.1-0.2,0.1-0.3
		C512.7,463.4,512.7,463.4,512.7,463.3z"/>
	<path class="cl2" d="M520.7,465.1c0.3,0,0.6,0,0.9,0.1c0.3,0,0.6,0,0.9,0c-0.3,0-0.6,0-0.9,0C521.3,465.2,521,465.1,520.7,465.1z"
		/>
	<path class="cl6" d="M703.9,501.9c-0.5-0.6-0.9-1.2-1.2-1.7c-0.2-0.3-0.4-0.6-0.5-0.8c-1.4-2.7-2.8-5.6-4.2-8.5
		c-1.4-3-3.6-5.5-6.4-7.6c-2.8-2-20.2-27.2-20.2-29.3c-0.1-2.2-0.4-3.6-1-4.4c-0.5-0.8-1.7-1.7-3.7-2.6c-2-0.9-3.3-1.7-3.9-2.4
		c-0.7-0.7-1.7-2.3-3-4.9c-1.4-2.5-3.3-4.4-5.7-5.5c-2.4-1.2-4.5-2.5-6.1-3.9s-2.7-3.1-3.4-5c-0.7-1.9-1.6-3.1-2.9-3.8
		c-1.2-0.6-3-1.9-5.3-3.7c-2.3-1.8-4.8-3.4-7.5-4.8c-2.7-1.4-5.2-2.9-7.5-4.8c-2.3-1.8-6-3.7-11-5.6l-7.5-3l-4.5-1.6
		c-3-1-5.2-1.8-6.4-2.3l-1.9-0.8l-0.7-0.5l-0.7-0.5l-1.6-0.3l-0.4,0.2l-0.4,0.1h0l-0.1,0.4l0.7,0.5l0.7,0.5l0.1,0.3l0.2,0.2l0.2,0.2
		l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l2.2,2.9c0.7,0.9,1.3,1.6,1.8,2.2
		c0.2,0.2,0.3,0.3,0.5,0.5c0.4,0.4,0.7,0.6,1,0.7c0.2,0.1,0.4,0.1,0.5,0.2c0.4,0.2,0.6,0.6,0.5,0.9c-0.1,0.5,0.1,0.8,0.6,0.9
		c0.5,0.1,0.9,1.3,1.3,3.7c0.3,2.4,1,3.9,2.1,4.5c1.1,0.7,1.7,1.5,1.7,2.6c0,1.1-0.2,1.8-0.6,2.1c0,0,0,0,0,0c0,0-0.1,0-0.1,0.1
		c-0.1,0-0.1,0.1-0.2,0.2c-0.2,0.2-0.5,0.4-0.7,0.7c-0.4,0.4-0.8,0.9-1.3,1.5c-0.5,0.7-0.9,1.3-0.9,1.6c-0.1,0.9-0.3,2-0.5,3.4
		c-0.3,1.4-0.7,2.1-1.2,2c-0.5-0.1-0.8-0.5-1-1.2c-0.1-0.7-0.4-1.2-0.9-1.5h0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.4,0.1
		c-0.4,0.1-0.8,0.6-1.3,1.2c-0.8,1.1-2,4.4-3.4,2.3c-1.4-2.1-0.7-1.4-1-2.6c-0.3-1.1-0.8-1-1.4,0.4c-0.7,1.3-1,2.7-0.9,4.2
		c0.1,1.5-0.2,2.9-0.7,4.1c-0.5,1.2-1.5,2.9-3,5c-1.5,2.1-3.4,4.1-5.8,5.8c-2.4,1.8-4.5,3-6.2,3.4c-1.7,0.5-2.6,0.8-2.8,0.9
		l-0.3,0.1l-0.3,0.1l-0.2,0.2l-1.2,0.1l-1.2,0.1l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l1.1,0.6l1.1,0.6l-1.2,0.1l-1.2,0.1l-0.1,0.4
		l2,0.2l2,0.2l0.9-0.2c0.1,0,0.3-0.1,0.4-0.1c0.2-0.1,0.5-0.1,0.6-0.1c0.1,0,0.2,0,0.2,0c0.3,0.1,0.8-0.1,1.7-0.5
		c0.9-0.4,1.8-0.4,2.8,0c0.8,0.2,1.3,0.5,1.6,0.8c0.1,0.1,0.2,0.2,0.2,0.3l0.3,0.6l1.2,0l0.1,0l1.1,0.1v0l-0.6,2.3
		c-0.5,1.5-1.1,2.7-1.8,3.7s-0.8,1.7-0.2,2.2c0.2,0.2,0.3,0.4,0.4,0.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.2-0.4,0.2l-0.8,0l-0.3,1.6
		l2.3,0.5l13.5,2.9c9,2,16.2,4.6,21.6,7.7c22,12.9,58.3,57.6,64.8,57.6c24.3-1.9,37.7-22.4,37.7-22.4
		C712.5,512.6,706.9,506,703.9,501.9z"/>
	<path class="cl7" d="M589.5,398l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2
		l-0.2-0.2l-0.1-0.3l-0.7-0.5l-0.7-0.5l0.1-0.4l-7.8-1.4c-0.1,0-0.2,0-0.3,0c-1.1-0.2-2.1-0.3-3.1-0.4c-0.2,0-0.4,0-0.5,0
		c-0.9-0.1-1.7-0.1-2.5-0.1c-2.4,0-4.6,0.3-6.6,1c-0.8,0.3-1.5,0.5-2.2,0.7c-1.4,0.4-2.7,0.6-3.9,0.7c-0.6,0.1-1.2,0.1-1.7,0.1
		c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6-0.1-0.8-0.1c-0.3,0-0.5,0-0.7,0c-0.4,0-0.7,0-1,0c-0.4,0-0.5,0-0.5,0.1c0,0,0.1,0.1,0.1,0.1
		c0,0,0,0,0,0c0.4,0.2,0.1,1.2-1,2.8c-1.1,1.7-2.1,2.5-2.7,2.7c-0.7,0.1-1.2,0.4-1.5,0.9c-0.1,0.3-0.7,0.5-1.6,0.5
		c-0.3,0-0.7,0-1.1,0c-0.3,0-0.6,0-0.9,0c-0.3,0-0.7,0-1,0c-1.9-0.1-3.5-0.3-4.7-0.5c-0.4-0.1-0.8-0.1-1.1-0.2
		c-0.2,0-0.3-0.1-0.5-0.1l-1.1-0.2l-0.8-0.2l-0.9,0.2l-0.9,0.2l1.3,1.3c0.9,0.8,1.3,1.5,1.2,2c-0.1,0.5-1,0.5-2.8-0.2
		s-2.9,0.3-3.4,2.9c-0.5,2.6-1.8,4.4-3.7,5.3c-2,0.9-3.1,1.7-3.3,2.1c-0.2,0.5-0.1,0.9,0.2,1.3c0.3,0.3-1.8,1.3-6.3,3c0,0,0,0,0,0
		c-4.5,1.6-8.3,2.5-11.3,2.7c-3,0.2-4.3,2.2-7.1,1.7c-2.8-0.6-7.5-0.7-9.6-1.3c-1.9-0.5-2.4-2.7-2.6-2.8c0,0,0,0,0,0.1
		c-0.1,0.3-0.2,0.4-0.5,0.4c-0.3,0-0.7-0.1-1.3-0.4c-1.1-0.5-2.8-0.9-5.1-1.3c-1.1-0.1-2.1-0.2-3.1-0.2c-1,0-1.9,0.2-2.7,0.4
		c-1.7,0.5-3.6,1.1-5.6,1.9c-2,0.8-3.3,1.4-3.6,2c-0.4,0.6-1.4,1.2-3.2,1.6c-0.9,0.2-1.8,0.3-2.7,0.3c-0.9,0-1.9-0.2-2.9-0.5
		c-0.8-0.2-1.4-0.3-1.9-0.4c-0.2,0-0.3,0-0.4,0c-0.1,0-0.3,0-0.4,0c-0.3,0-0.5,0.2-0.5,0.4c-0.1,0.5-1.6,0.9-4.4,1.1
		c-2.9,0.2-5.1,0.5-6.6,0.8c-1.2,0.3-2.3,0.4-3.3,0.4c-0.3,0-0.7,0-1,0c0,0,0,0-0.1,0c-1.3-0.1-2,0-2.1,0.5c-0.1,0.5-0.5,0.8-1.2,1
		c-0.7,0.1-1.2,0.8-1.5,2.1c-0.3,1.3-4.4,1.9-4.4,1.9l0,0l-0.2-0.2l-0.1-0.3l-1.6-0.3l-2.6,0.7c-1.7,0.5-2.6,0.8-2.8,0.9
		c-0.1,0-0.8,0.1-1.9,0.1c-0.2,0-0.4,0-0.6,0c-0.4,0-0.8,0-1.1,0c-0.3,0-0.5,0-0.8-0.1c-0.3,0-0.7-0.1-1-0.2
		c-0.6-0.1-1.3-0.3-1.8-0.6c-0.2-0.1-0.3-0.2-0.5-0.3c-0.4-0.3-0.9-0.6-1.4-0.8c-0.3-0.2-0.7-0.3-1.1-0.5c-0.3-0.1-0.5-0.2-0.8-0.3
		c-0.5-0.2-1-0.3-1.5-0.5c-0.2-0.1-0.4-0.1-0.6-0.2c-0.5-0.1-1.1-0.3-1.7-0.4c-0.6-0.1-1.2-0.2-1.8-0.2c-0.4,0-0.8-0.1-1.1-0.1
		c-1.4-0.2-2.6-0.4-3.6-0.8c-0.5-0.2-0.9-0.4-1.2-0.6c-0.3-0.2-0.6-0.5-0.9-0.7c-0.4-0.5-0.8-0.8-1.1-1.1c-0.3-0.3-0.7-0.4-1-0.5
		c-0.1,0-0.2-0.1-0.3-0.1c-0.2,0-0.3,0-0.5,0c0,0,0,0,0,0c-0.4,0-0.7,0-0.8,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2
		l-0.2,0.2l-0.3,0.1l-0.2,0.1l1.3,4.6l4.3,1.7l-1.7,14.7l-3.9-0.5c0.6,0.1,1.3,0.2,2,0.3c0.2,0,0.4,0.1,0.6,0.1
		c1.1,0.2,2.3,0.3,3.5,0.5c0.2,0,0.4,0,0.5,0.1c2,0.2,4,0.5,6.2,0.7c0.1,0,0.2,0,0.2,0l9.5,1c0,0,0,0,0,0l0.1,0c0,0,0.1,0,0.1,0
		l0.4,0.1l0.5,0.1l0.7,0.1c0.2,0,0.4,0.1,0.7,0.1l0.3,0.1l0.1,0l1.2,0.2l0.8,0.2l0.8,0.1c0.1,0,0.1,0,0.2,0l0.7,0.1l0.8,0.1
		c1.9,0.3,3.4,0.6,4.5,0.7c0.4,0.1,0.7,0.1,1.1,0.2c0.2,0,0.5,0.1,0.7,0.1c0.4,0,0.7,0.1,0.9,0.1c0.1,0,0.2,0,0.3,0
		c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.3,0,0.7,0c0.3,0,0.7,0,1.2,0c0.4,0,0.8,0,1.3,0c0.5,0,1.1,0,1.7,0
		c3.2-0.1,8.1-0.1,14.5-0.2c3.2-0.1,6.1-0.1,8.7-0.1c1.9,0,3.7,0,5.2,0c0.5,0,1,0,1.5,0s0.9,0,1.4,0c0.9,0,1.7,0,2.4,0
		c1.1,0,1.9,0,2.6,0.1c0.5,0,0.8,0,1.1,0.1c0.7,0.1,2,0.2,3.7,0.5c3.8,0.6,10,1.7,18.5,3.2l18.7,3.4l0.1,0.3l0.2,0.2l0.1,0.8l0,0.8
		l-1.9,0.8c-0.3,0.1-0.5,0.2-0.7,0.3c-0.2,0.1-0.4,0.2-0.5,0.2c-0.5,0.2-0.7,0.4-0.6,0.5l0.1,0.3l1.7,0.6c0.9,0.3,1.4,0.6,1.6,0.9
		c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.2-0.1,0.3-0.2,0.4c0,0-0.1,0.1-0.1,0.1l-0.2,0.2l1.9,0.4
		c0.6,0.1,1.2,0.2,1.7,0.2c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.5-0.1c0.4-0.1,1.1-0.1,2.3-0.1c0.5,0,1,0,1.6,0.1c0.3,0,0.6,0,0.9,0.1
		c0.3,0,0.6,0,0.9,0c0.6,0,1.1,0,1.5,0s0.8-0.1,1-0.2c0.2-0.1,0.4-0.1,0.5-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.5,0.6-0.9,1.4-1.2
		c0.2-0.1,0.5-0.1,0.8-0.1c0.2,0,0.3,0,0.5,0c0.7,0.1,1.7,0.3,2.9,0.6c0.3,0.1,0.6,0.2,0.9,0.3s0.6,0.2,0.9,0.3
		c0.6,0.1,1.1,0.2,1.6,0.3c0.2,0,0.5,0,0.7,0c0.2,0,0.4,0,0.6,0c0.4,0,0.7-0.1,0.9-0.3c0.1-0.1,0.2-0.2,0.3-0.2
		c0.1-0.1,0.2-0.2,0.4-0.3c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.7-0.4,1.1-0.5c0.6-0.3,1.3-0.5,2.2-0.7c0.3-0.1,0.6-0.1,0.9-0.2
		c2.4-0.6,3.7-1.1,3.9-1.6c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.5-0.2,0.8-0.3c0.6-0.2,1.5-0.3,2.5-0.5
		c0.9-0.1,1.6-0.3,2.2-0.4c0.2,0,0.4-0.1,0.5-0.2c0.6-0.2,1-0.4,1.1-0.7c0.3-0.5,1.8-1.3,4.5-2.3l4.2-1.6l0.1-0.4l1.2-0.1l1.2-0.1
		l-1.1-0.6l-1.1-0.6l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l1.2-0.1l1.2-0.1l0.2-0.2l0.3-0.1l0.3-0.1c0.1-0.1,1.1-0.4,2.8-0.9
		c1.7-0.5,3.8-1.6,6.2-3.4c2.4-1.8,4.3-3.7,5.8-5.8c1.5-2.1,2.6-4.6,3.1-7.4s0.4-4.3-0.5-4.4l-1.4-0.1l-0.7-0.5l-0.7-0.5l0.2-0.2
		l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.1,0.8l0,0.8l0.8,0l0.8-0.1l-0.1-0.3l-0.2-0.2
		l-0.2-0.9l-0.2-0.9l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l0.3-1.6l0.2,0.2l0.1,0.3l0.7,0.5l0.7,0.5l1.7,1.4c1.2,0.9,1.6,1.6,1.2,2.2
		c-0.4,0.6-0.3,1,0.2,1.1l0.8,0.2l0.2-0.2l0.3-0.1l0.3-0.1c0.1-0.1,0.6-0.7,1.3-1.8c0.5-0.7,0.9-1.1,1.3-1.2c0.1,0,0.2-0.1,0.4-0.1
		c0.1,0,0.1,0,0.2,0c0.5,0.3,1.6-0.8,3.5-3.1c0.4-0.5,0.7-0.9,1.1-1.3c0.4-0.5,0.9-1.1,1.3-1.5c0.3-0.3,0.5-0.6,0.7-0.7
		c0.1-0.1,0.2-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0c0.4-0.3,0.6-1.1,0.6-2.1c0-1.1-0.6-2-1.7-2.6c-1.1-0.6-1.8-2.1-2.1-4.5
		c-0.3-2.3-0.8-3.5-1.3-3.7c-0.5-0.1-0.7-0.4-0.6-0.9c0.1-0.4-0.1-0.7-0.5-0.9c-0.1-0.1-0.3-0.2-0.5-0.2c-0.3-0.1-0.6-0.4-1-0.7
		c-0.2-0.1-0.3-0.3-0.5-0.5c-0.5-0.5-1.1-1.3-1.8-2.2L589.5,398z"/>
	<path class="cl7" d="M388.4,444.9l0.5,0.1c0.1,0,0.2,0,0.3,0.1c0.8,0.2,1.6,0.3,2.5,0.5L388.4,444.9z"/>
	<path class="cl7" d="M586.3,394.2l0.7,0.5l0.7,0.5l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3
		l0.2,0.2l0.2,0.2l0.1,0.3l2.2,2.9c0.7,0.9,1.3,1.6,1.8,2.2c-0.5-0.5-1.1-1.3-1.8-2.2l-2.2-2.9l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3
		l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.7-0.5L586.3,394.2l0.1-0.4h0h0L586.3,394.2z"/>
	<path class="cl7" d="M592.4,427.5c-0.8,1.1-1.2,1.7-1.3,1.8l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.8-0.2c-0.5-0.1-0.6-0.5-0.2-1.1
		c0.4-0.6,0-1.3-1.2-2.2l-1.7-1.4l-0.7-0.5l-0.7-0.5l-0.1-0.3l-0.2-0.2l-0.3,1.6l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.9l0.2,0.9
		l0.2,0.2l0.1,0.3l-0.8,0.1l-0.8,0l0-0.8l-0.1-0.8l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1
		l-0.3,0.1l-0.2,0.2l0.7,0.5l0.7,0.5l1.4,0.1c0.9,0.1,1.1,1.5,0.5,4.4s-1.6,5.3-3.1,7.4c1.5-2.1,2.5-3.8,3-5
		c0.5-1.2,0.8-2.6,0.7-4.1c-0.1-1.5,0.2-2.9,0.9-4.2c0.7-1.4,1.1-1.5,1.4-0.4c0.3,1.1-0.4,0.5,1,2.6
		C590.4,431.8,591.6,428.6,592.4,427.5c0.5-0.7,0.9-1.1,1.3-1.2C593.3,426.4,592.9,426.8,592.4,427.5z"/>
	<path class="cl7" d="M594.3,426.2c0.5,0.3,0.8,0.8,0.9,1.5c0.1,0.7,0.5,1.1,1,1.2c0.5,0.1,0.9-0.6,1.2-2c0.3-1.4,0.5-2.5,0.5-3.4
		c0-0.4,0.4-1,0.9-1.6c-0.3,0.4-0.7,0.8-1.1,1.3C595.9,425.5,594.8,426.5,594.3,426.2z"/>
	<path class="cl7" d="M596.1,405.4c-0.1,0.5,0.1,0.8,0.6,0.9c0.5,0.1,0.9,1.3,1.3,3.7c0.3,2.4,1,3.9,2.1,4.5
		c1.1,0.7,1.7,1.5,1.7,2.6c0,1.1-0.2,1.8-0.6,2.1c0,0,0,0,0,0c0,0,0,0,0,0c0.4-0.3,0.6-1.1,0.6-2.1c0-1.1-0.6-2-1.7-2.6
		c-1.1-0.6-1.8-2.1-2.1-4.5c-0.3-2.3-0.8-3.5-1.3-3.7C596.2,406.3,596,406,596.1,405.4c0.1-0.4-0.1-0.7-0.5-0.9
		C596,404.7,596.2,405.1,596.1,405.4z"/>
	<path class="cl7" d="M600.1,420.3c0.3-0.3,0.5-0.6,0.7-0.7C600.7,419.7,600.4,419.9,600.1,420.3z"/>
	<path class="cl7" d="M601.1,419.3c-0.1,0-0.1,0.1-0.2,0.2C600.9,419.5,601,419.4,601.1,419.3z"/>
	<path class="cl5" d="M697.2,417.4c-11.3-10-19.8-17.4-25.7-22.2c-5.9-4.8-13.5-10.3-22.7-16.5l-25.2-15.1
		c-7.1-3.4-13.4-5.8-18.7-7.1l-8.1-1.8l-0.1,0.4l-0.2,0.2l-0.3,0.1l-0.6,1.1l-0.6,1.1l-0.3,0.1l-0.2,0.2l0.1,0.3l0.2,0.2l0.2,0.2
		l0.1,0.3l6.9,1.8c4.6,1.2,9.7,2.8,15.2,4.7l8.3,2.9l-1.1,0.8c-0.8,0.5-1.4,2.3-1,2.4c0.5,0.1,0.6,2,1.3,2.5c0,0,0,0,0,0
		c0.7,0.5,0.3,1-1.1,1.5c-1.5,0.5-1.8,0.9-1.1,1.2c0.2,0.1,0.4,0.1,0.5,0.2c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.2,0.3,0.5,0.2,0.8
		c-0.1,0.5-0.4,0.8-1,0.8l-0.8,0.1l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l3.5,0.7
		c0.4,0.1,0.7,0.1,1,0.2c0.4,0.1,0.8,0.1,1.1,0.2c1,0.2,1.9,0.3,2.7,0.3c0.1,0,0.2,0,0.3,0c0.3,0,0.5,0,0.7,0l2.3,0.1l0.1,0l0.7,0.5
		l0.7,0.5l0.1,0.3l0.2,0.2l-0.5,2.3l-0.2-0.2l-0.1-0.3l-1.6-0.3l-0.9,0.2l-0.9,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2
		l-0.3,0.1l-0.3,0.1l-0.2,0.2l-4.9,0.2c-3.3,0.1-7,0-11.4-0.5c-4.4-0.5-6.7-0.5-7,0c-0.2,0.5-2.1,0.4-5.7-0.4l-5.4-1.1l-0.4,1.1
		l-0.5,1.1L592,387l-0.2,0.2l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3
		l0.1,0.3l0.2,0.2l0.2,0.9l0.2,0.9l0.2,0.2l0.1,0.3l4.2,3.3c2.8,2.2,4.2,3.4,4.1,3.5l0,0.2l7.5,3c5,1.9,8.6,3.8,11,5.6
		c2.3,1.8,4.8,3.4,7.5,4.8c2.7,1.4,5.2,2.9,7.5,4.8c2.3,1.8,4.1,3,5.3,3.7c1.2,0.7,2.2,1.9,2.9,3.8c0.7,1.9,1.8,3.6,3.4,5
		s3.6,2.7,6.1,3.9c2.5,1.1,4.4,3,5.7,5.5c1.4,2.6,2.4,4.2,3,4.9c0.7,0.7,2,1.5,3.9,2.4c2,0.9,3.2,1.8,3.7,2.6c0.5,0.8,0.9,2.2,1,4.4
		c0.1,2.2,17.4,27.3,20.2,29.3c2.8,2.1,4.9,4.6,6.4,7.6c1.4,3,2.8,5.8,4.2,8.5c0.1,0.2,0.3,0.5,0.5,0.8c0.3,0.5,0.7,1.1,1.2,1.7
		c2,2.7,5.4,6.2,10,10.7c1.5-1.7,12.7-22.3,27.2-55.1C740.5,455.6,708.5,427.4,697.2,417.4z"/>
	<path class="cl8" d="M391.9,425.2l0.2-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2c0.1-0.1,0.4-0.1,0.8-0.1
		c0,0,0,0,0,0c0.1,0,0.3,0,0.5,0c0.1,0,0.2,0,0.3,0.1c0.3,0.1,0.6,0.2,1,0.5c0.3,0.3,0.7,0.6,1.1,1.1c0.2,0.3,0.5,0.5,0.9,0.7
		c0.3,0.2,0.8,0.4,1.2,0.6c0.9,0.3,2.1,0.6,3.6,0.8c0.4,0,0.7,0.1,1.1,0.1c0.6,0.1,1.2,0.1,1.8,0.2s1.1,0.2,1.7,0.4
		c0.2,0.1,0.4,0.1,0.6,0.2c0.5,0.1,1,0.3,1.5,0.5c0.3,0.1,0.6,0.2,0.8,0.3c0.4,0.2,0.7,0.3,1.1,0.5c0.5,0.3,1,0.5,1.4,0.8
		c0.2,0.1,0.3,0.2,0.5,0.3c0.5,0.3,1.1,0.4,1.8,0.6c0.3,0.1,0.7,0.1,1,0.2c0.3,0,0.5,0.1,0.8,0.1c0.4,0,0.8,0,1.1,0
		c0.2,0,0.4,0,0.6,0c1.1,0,1.8-0.1,1.9-0.1c0.1-0.1,1.1-0.4,2.8-0.9l2.6-0.7h0l1.6,0.3l0.1,0.3l0.2,0.2c0,0,4.2-0.6,4.4-1.9
		c0.3-1.3,0.8-2,1.5-2.1c0.7-0.1,1.1-0.5,1.2-1c0.1-0.5,0.8-0.7,2.1-0.5c0,0,0,0,0.1,0c0.3,0,0.7,0,1,0c1,0,2.2-0.2,3.3-0.4
		c1.5-0.3,3.7-0.6,6.6-0.8c2.8-0.2,4.3-0.6,4.4-1.1c0-0.2,0.2-0.3,0.5-0.4c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0
		c0.5,0.1,1.1,0.2,1.9,0.4c1,0.3,2,0.4,2.9,0.5s1.8-0.1,2.7-0.3c1.7-0.5,2.8-1,3.2-1.6c0.4-0.6,1.6-1.2,3.6-2
		c2.1-0.8,3.9-1.5,5.6-1.9c0.9-0.2,1.8-0.4,2.7-0.4c1,0,2,0,3.1,0.2c2.2,0.4,3.9,0.8,5.1,1.3c0.5,0.2,1,0.4,1.3,0.4
		c0.3,0,0.5-0.1,0.5-0.4c0,0,0-0.1,0-0.1c0.2-0.4,1.8-0.1,4.6,0.9c3,1,5.4,1.3,7.2,1c1.8-0.3,3-0.4,3.5-0.2c0.5,0.1,2,0.2,4.5,0.3
		c2.6,0.1,6.1-0.6,10.6-2.2c0,0,0,0,0,0c4.5-1.7,6.6-2.7,6.3-3c-0.4-0.3-0.4-0.8-0.2-1.3c0.3-0.5,1.4-1.2,3.3-2.1
		c1.9-1,3.1-2.7,3.7-5.3c0.5-2.6,1.7-3.6,3.4-2.9c1.8,0.6,2.7,0.7,2.8,0.2s-0.3-1.2-1.2-2l-1.3-1.3l0.9-0.2l0.9-0.2h0h0l0.8,0.2
		l1.1,0.2c0.1,0,0.3,0.1,0.5,0.1c0.3,0.1,0.7,0.1,1.1,0.2c1.2,0.2,2.8,0.3,4.7,0.5c0.4,0,0.7,0,1,0c0.3,0,0.6,0,0.9,0
		c0.4,0,0.8,0,1.1,0c1-0.1,1.5-0.2,1.6-0.5c0.3-0.5,0.8-0.8,1.5-0.9c0.7-0.1,1.6-1,2.7-2.7c1.1-1.6,1.4-2.5,1-2.8c0,0,0,0,0,0
		c-0.1,0-0.1-0.1-0.1-0.1c0-0.1,0.1-0.1,0.5-0.1c0.2,0,0.6,0,1,0c0.2,0,0.4,0,0.7,0s0.5,0,0.8,0.1c0.3,0,0.6,0,0.9,0
		c0.6,0,1.1,0,1.7-0.1c1.2-0.1,2.5-0.4,3.9-0.7c0.7-0.2,1.4-0.4,2.2-0.7c1.9-0.6,4.1-1,6.6-1c0.8,0,1.7,0,2.5,0.1c0.2,0,0.4,0,0.5,0
		c1,0.1,2,0.2,3.1,0.4c0.1,0,0.2,0,0.3,0l7.8,1.4l0.4-0.1l0.4-0.2l1.6,0.3l0.7,0.5l0.7,0.5l1.9,0.8c1.2,0.5,3.4,1.3,6.4,2.3l4.5,1.6
		l0-0.2c0-0.2-1.3-1.3-4.1-3.5l-4.2-3.3l-0.1-0.3l-0.2-0.2l-0.2-0.9l-0.2-0.9l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2
		l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l0.2-0.2l0.3-0.1l0.5-1.1l0.4-1.1l5.4,1.1
		c3.6,0.7,5.5,0.9,5.7,0.4c0.3-0.5,2.6-0.5,7,0c4.3,0.5,8.1,0.7,11.4,0.5l4.9-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1
		l0.3-0.1l0.2-0.2l0.9-0.2l0.9-0.2l1.6,0.3l0.1,0.3l0.2,0.2l0.5-2.3l-0.2-0.2h0l-0.1-0.3l-0.7-0.5l-0.7-0.5l-0.1,0l-2.3-0.1
		c-0.2,0-0.5,0-0.7,0c-0.1,0-0.2,0-0.3,0c-0.8-0.1-1.7-0.2-2.7-0.3c-0.4-0.1-0.7-0.1-1.1-0.2c-0.3-0.1-0.7-0.1-1-0.2l-3.5-0.7l0,0
		l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.8-0.1c0.5,0,0.9-0.3,1-0.8c0.1-0.3,0-0.5-0.2-0.8
		c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.3-0.2-0.5-0.2l0,0h0c-0.7-0.3-0.4-0.7,1.1-1.2c1.5-0.5,1.8-1,1.1-1.5c0,0,0,0,0,0
		c-0.7-0.6-1.3-1.9-1.9-3.9c-0.5-2-5.2-4.4-14.2-7.2l-13.5-4.1v0h0l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l0.2-0.2l0.3-0.1l0.6-1.1
		l0.6-1.1l0.3-0.1l0.2-0.2l0.1-0.4l-8.1,0.1c-5.4,0.1-9.6,0.2-12.5,0.1c-2.9-0.1-5.9,0.7-8.9,2.2c-3,1.5-13.4,5.3-31.2,11.1
		c-17.8,6-28.4,9.9-32.1,11.9c-7.1,3.9-15.4,11-15.4,11c-4.5,4.2-7.9,7.1-10.2,8.7c-2.4,1.5-6.1,3-11.2,4.3s-10.3,2.4-10.6,2.5
		l-0.4,0.1l-1.2-0.1l-1.2,0l-11.8,0.4c-7.9,0.3-15.5,0.3-23,0.1c-7.5-0.2-13.6,0.2-18.4,1.1s-12.9,1.8-12.9,1.8l0,0h0L391.9,425.2z"
		/>
	<path class="cl8" d="M572.1,391.7c0.8,0,1.7,0,2.5,0.1C573.8,391.8,573,391.7,572.1,391.7z"/>
	<path class="cl8" d="M538.2,400.5c0.3,0.1,0.7,0.1,1.1,0.2C539,400.6,538.6,400.5,538.2,400.5z"/>
	<path class="cl8" d="M413.7,430.9c-0.2-0.1-0.3-0.2-0.5-0.3c-0.4-0.3-0.9-0.6-1.4-0.8c0.5,0.3,1,0.5,1.4,0.8
		C413.4,430.7,413.6,430.8,413.7,430.9z"/>
	<path class="cl8" d="M398.3,426.2c0.3,0.2,0.8,0.4,1.2,0.6C399.1,426.7,398.7,426.5,398.3,426.2z"/>
	<path class="cl8" d="M397.5,425.5c0.2,0.3,0.5,0.5,0.9,0.7C398,426,397.7,425.8,397.5,425.5c-0.4-0.5-0.8-0.8-1.1-1.1
		C396.7,424.7,397.1,425.1,397.5,425.5z"/>
	<path class="cl8" d="M545.1,401.1c-0.3,0-0.7,0-1,0c-1.9-0.1-3.5-0.3-4.7-0.5c1.2,0.2,2.8,0.3,4.7,0.5
		C544.4,401.1,544.8,401.1,545.1,401.1z"/>
	<path class="cl8" d="M553.9,394.2c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0C553.9,394.2,553.9,394.2,553.9,394.2z"/>
	<path class="cl8" d="M554.3,394c0.2,0,0.6,0,1,0C554.9,394,554.6,394,554.3,394z"/>
	<path class="cl8" d="M557.7,394.2c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6-0.1-0.8-0.1c0.3,0,0.5,0,0.8,0.1
		C557.1,394.2,557.4,394.2,557.7,394.2z"/>
	<polygon class="cl8" points="535.8,400 535.8,400 536.6,400.1 	"/>
	<path class="cl8" d="M438.4,425.3c-0.3,0-0.7,0-1,0c0,0,0,0-0.1,0c0,0,0,0,0.1,0C437.7,425.3,438,425.3,438.4,425.3z"/>
	<path class="cl8" d="M489.4,421.3c2,0.6,6.7,0.7,9.6,1.3c2.8,0.6,4.1-1.5,7.1-1.7c3-0.2,6.8-1.1,11.3-2.7
		c-4.5,1.6-8.1,2.3-10.6,2.2c-2.5-0.1-4-0.2-4.5-0.3c-0.5-0.1-1.7,0-3.5,0.2c-1.8,0.3-4.2,0-7.2-1c-2.9-1-4.4-1.3-4.6-0.9
		C487,418.6,487.5,420.8,489.4,421.3z"/>
	<path class="cl8" d="M458.9,423.5c-0.9,0-1.9-0.2-2.9-0.5c-0.8-0.2-1.4-0.3-1.9-0.4c0.5,0.1,1.1,0.2,1.9,0.4
		C457,423.3,458,423.4,458.9,423.5z"/>
	<path class="cl8" d="M485,418.6c0.5,0.2,1,0.4,1.3,0.4C486,419,485.5,418.9,485,418.6c-1.1-0.5-2.8-0.9-5.1-1.3
		c-1.1-0.1-2.1-0.2-3.1-0.2c1,0,2,0,3.1,0.2C482.2,417.7,483.9,418.1,485,418.6z"/>
	<polygon class="cl8" points="427.9,430.6 428.1,430.8 427.9,430.6 427.8,430.4 426.3,430.1 427.8,430.4 	"/>
	<path class="cl8" d="M578.3,392.3c0.1,0,0.2,0,0.3,0l7.8,1.4h0l-7.8-1.4C578.5,392.3,578.4,392.3,578.3,392.3z"/>
	<path class="cl8" d="M608.7,363c9,2.8,13.7,5.2,14.2,7.2c0.6,2,1.2,3.3,1.9,3.9c-0.7-0.6-0.9-2.4-1.3-2.5c-0.5-0.1,0.2-1.9,1-2.4
		l1.1-0.8l-8.3-2.9c-5.5-1.9-10.6-3.5-15.2-4.7l-6.9-1.8v0L608.7,363z"/>
	<path class="cl8" d="M623.1,377c-0.1-0.1-0.3-0.2-0.5-0.2l0,0C622.8,376.8,622.9,376.9,623.1,377z"/>
	<path class="cl8" d="M624.4,380.9c-0.3-0.1-0.7-0.1-1-0.2l-3.5-0.7l3.5,0.7C623.7,380.8,624.1,380.9,624.4,380.9z"/>
	<path class="cl8" d="M631.6,381.6l-2.3-0.1c-0.2,0-0.5,0-0.7,0c0.3,0,0.5,0,0.7,0L631.6,381.6z"/>
	<path class="cl8" d="M625.5,381.1c1,0.2,1.9,0.3,2.7,0.3C627.4,381.4,626.5,381.3,625.5,381.1z"/>
	<path class="cl8" d="M628.3,381.5c0.1,0,0.2,0,0.3,0C628.4,381.5,628.4,381.5,628.3,381.5z"/>
	<path class="cl9" d="M574.3,464.8l0.8,0c0.3,0,0.4-0.1,0.4-0.2c0,0,0,0,0-0.1c0-0.1-0.1-0.3-0.4-0.5c-0.6-0.6-0.5-1.3,0.2-2.2
		c0.7-0.9,1.3-2.2,1.8-3.7l0.6-2.3l-1.1-0.1l-0.1,0l-1.2,0l-0.3-0.6c0-0.1-0.1-0.2-0.2-0.3c-0.3-0.3-0.8-0.6-1.6-0.8
		c-1-0.4-1.9-0.4-2.8,0c-0.9,0.4-1.5,0.5-1.7,0.5c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.6,0.1c-0.1,0-0.3,0.1-0.4,0.1l-0.9,0.2l-2-0.2
		l-2-0.2l-4.2,1.6c-2.7,1.1-4.3,1.8-4.5,2.3c-0.1,0.2-0.5,0.5-1.1,0.7c-0.2,0.1-0.3,0.1-0.5,0.2c-0.6,0.1-1.3,0.3-2.2,0.4
		c-1,0.1-1.9,0.3-2.5,0.5c-0.3,0.1-0.6,0.2-0.8,0.3s-0.4,0.2-0.5,0.3c-0.1,0.1-0.1,0.1-0.1,0.2c-0.2,0.5-1.5,1-3.9,1.6
		c-0.3,0.1-0.6,0.1-0.9,0.2c-0.8,0.2-1.6,0.5-2.2,0.7c-0.4,0.2-0.8,0.3-1.1,0.5c-0.2,0.1-0.3,0.2-0.4,0.3c-0.1,0.1-0.3,0.2-0.4,0.3
		c-0.1,0.1-0.2,0.2-0.3,0.2c-0.3,0.1-0.6,0.2-0.9,0.3c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.7,0c-0.5-0.1-1-0.2-1.6-0.3
		c-0.3-0.1-0.6-0.2-0.9-0.3s-0.6-0.2-0.9-0.3c-1.2-0.3-2.1-0.5-2.9-0.6c-0.2,0-0.4,0-0.5,0c-0.3,0-0.6,0-0.8,0.1
		c-0.9,0.3-1.3,0.6-1.4,1.2c0,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.3,0.1-0.5,0.2c-0.3,0.1-0.6,0.1-1,0.2s-0.9,0-1.5,0
		c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.9-0.1c-0.6,0-1.1-0.1-1.6-0.1c-1.2,0-1.9,0-2.3,0.1c-0.1,0-0.3,0.1-0.5,0.1c-0.2,0-0.4,0-0.6,0
		c-0.5,0-1-0.1-1.7-0.2l-1.9-0.4l0.2-0.2c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.4c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.1,0-0.2
		s0-0.1,0-0.2c-0.2-0.4-0.7-0.7-1.6-0.9l-1.7-0.6l-0.1-0.3c-0.1-0.1,0.1-0.2,0.6-0.5c0.1-0.1,0.3-0.2,0.5-0.2
		c0.2-0.1,0.4-0.2,0.7-0.3l1.9-0.8l0-0.8l-0.1-0.8l-0.2-0.2l-0.1-0.3l-18.7-3.4c-8.6-1.6-14.7-2.6-18.5-3.2c-1.7-0.3-3-0.4-3.7-0.5
		c-0.3,0-0.7-0.1-1.1-0.1c-0.7,0-1.6-0.1-2.6-0.1c-0.7,0-1.5,0-2.4,0c-0.4,0-0.9,0-1.4,0s-1,0-1.5,0c-1.6,0-3.3,0-5.2,0
		c-2.6,0-5.4,0.1-8.7,0.1c-6.4,0.1-11.2,0.2-14.5,0.2c-0.6,0-1.2,0-1.7,0c-0.5,0-0.9,0-1.3,0c-0.5,0-0.9,0-1.2,0c-0.4,0-0.6,0-0.7,0
		c0,0-0.1,0-0.1,0c0,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.3,0c-0.2,0-0.5,0-0.9-0.1c-0.2,0-0.4-0.1-0.7-0.1c-0.3,0-0.7-0.1-1.1-0.2
		c-1.2-0.2-2.7-0.4-4.5-0.7c1.4,3.3-1,5-1,5c6.2,19.3-6.8,11.4-6.8,11.4h0c-1.6-0.2-3-0.4-4.2-0.6c-0.6-0.1-1.2-0.2-1.7-0.3
		c-0.5-0.1-1-0.2-1.4-0.2c-0.6-0.1-1-0.2-1.4-0.3l-2.3-0.5l0.7,0.4c0.1,0.1,0.2,0.1,0.3,0.2c0,0.1,0.1,0.1,0,0.2
		c0,0.3-0.2,0.6-0.6,1.1c-0.5,0.6-1.2,1-1.9,1.3c-0.3,0.1-0.5,0.2-0.8,0.3c-1.1,0.3-1.2,0.7-0.3,1.3c0.9,0.6,1.4,1.3,1.3,2.1
		c0,0.8,0.1,1.3,0.2,1.4l0.1,0.3l0.1,0.3l0.2,0.2l0.1,0.8l0,0.8l-0.8,0l-0.8,0.1l-5.1-0.6c-0.4-0.1-0.8-0.1-1.2-0.2
		c-1-0.1-2-0.3-2.8-0.4c-1.4-0.2-2.5-0.4-3.4-0.6l-2.3-0.5l0.5,0.7c0.1,0.2,0.3,0.4,0.4,0.6c0.1,0.1,0.1,0.1,0.1,0.2
		s0.1,0.1,0.1,0.1l0.1,0.2l0,0.1l0,0.1l0.1,0.2l0.2,0.2l0.2,0.2l0.1,0.3l-1.2,0.1l-1.2,0.1l-0.7,0.4c-0.4,0.3-0.6,0.8-0.6,1.3l0,0.8
		l0.8,0.2l11.3,2.1c7.5,1.4,12.7,2.4,15.6,2.9c2.8,0.6,8.9,2.8,18.1,6.5c9.2,3.8,16.5,6.2,21.9,7.3c5.4,1.1,27.5-3.7,66.4-14.4
		l58.2-16.2l-2.3-0.5L574.3,464.8z"/>
	<path class="cl9" d="M429.1,450.7c-0.2,0-0.5,0-0.9-0.1C428.5,450.6,428.8,450.7,429.1,450.7z"/>
	<path class="cl9" d="M416.1,448.5l-0.4-0.1l-0.3-0.1C415.5,448.4,415.8,448.5,416.1,448.5z"/>
	<path class="cl9" d="M415.6,448.4l-0.5-0.1c0.1,0,0.1,0,0.2,0L415.6,448.4z"/>
	<path class="cl9" d="M567.9,454.4c0.2-0.1,0.5-0.1,0.6-0.1C568.3,454.3,568.1,454.4,567.9,454.4z"/>
	<polygon class="cl9" points="577.7,455.8 576.6,455.7 577.7,455.8 	"/>
	<path class="cl9" d="M429.3,450.7c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0,0-0.1,0-0.1,0C429.5,450.7,429.4,450.7,429.3,450.7z"/>
	<path class="cl9" d="M547.6,459.9c0.6-0.2,1.5-0.3,2.5-0.5c0.9-0.1,1.6-0.3,2.2-0.4c-0.6,0.1-1.3,0.3-2.2,0.4
		C549.1,459.6,548.3,459.7,547.6,459.9z"/>
	<path class="cl9" d="M547.6,459.9c-0.3,0.1-0.6,0.2-0.8,0.3C547,460.1,547.3,460,547.6,459.9z"/>
	<path class="cl9" d="M554,458.2c-0.1,0.2-0.5,0.5-1.1,0.7C553.5,458.7,553.9,458.5,554,458.2c0.3-0.5,1.8-1.3,4.5-2.3l4.2-1.6
		l-4.2,1.6C555.7,457,554.2,457.7,554,458.2z"/>
	<polygon class="cl9" points="512.8,457.5 512.9,457.7 513.1,457.9 512.9,457.7 	"/>
	<path class="cl9" d="M537,464.6c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.2,0.4-0.3c-0.1,0.1-0.3,0.2-0.4,0.3
		C537.3,464.4,537.1,464.5,537,464.6z"/>
	<path class="cl9" d="M525.8,464.6c0,0.1-0.1,0.2-0.2,0.3C525.8,464.8,525.8,464.7,525.8,464.6c0.1-0.5,0.6-0.9,1.4-1.2
		c0.2-0.1,0.5-0.1,0.8-0.1c-0.3,0-0.6,0-0.8,0.1C526.4,463.7,525.9,464.1,525.8,464.6z"/>
	<path class="cl9" d="M525.2,465c-0.3,0.1-0.6,0.1-1,0.2C524.6,465.1,524.9,465.1,525.2,465z"/>
	<path class="cl9" d="M524.1,465.2c-0.4,0-0.9,0-1.5,0C523.2,465.2,523.7,465.2,524.1,465.2z"/>
	<path class="cl9" d="M432.8,450.5c-0.5,0-0.9,0-1.3,0C431.9,450.6,432.3,450.6,432.8,450.5z"/>
	<path class="cl5" d="M291.3,383.3C291.3,383.3,291.3,383.3,291.3,383.3c0.5,0.1,1,0.2,1.6,0.3c7,1.5,12.2,3.7,15.8,5.7
		c0.4,0.2,2.5,1.3,4.7,2.6c1.6,0.9,3,1.7,4.3,2.7c0.2,0.2,0.4,0.3,0.6,0.5c0,0,0,0,0,0c2.5,2.1,6.7,4.7,12.5,7.8s9.3,5.1,10.4,6.2
		c1.1,1,1.7,1.9,1.6,2.6c0,0.7,0.1,1.3,0.3,1.8c0.2,0.6,0.2,1.5,0.2,2.9c0,1.3,0.1,2.6,0.2,3.8c0.2,1.3,1.9,3.3,5,6.1
		c3.2,2.8,6,4.5,8.3,4.9c0.3,0.1,0.6,0.1,0.8,0.1c0.3,0,0.5,0,0.8,0.1c0.4,0,0.7,0,1-0.1c0.9-0.2,1.6-0.6,2-1.4
		c0.7-1.4,1.6-2.2,2.9-2.5c0.2-0.1,0.4-0.1,0.6-0.1c0.2,0,0.3,0,0.5,0c0.5,0.1,0.7,0.3,0.6,0.8c-0.2,0.8,0.8,1.4,2.8,2
		c0,0-1.7-8.9,3.3-15.6c4.9-6.7,15.4-4.5,15.4-4.5l-13-3.5c-8.3-1.7-14.1-3.6-17.6-5.8c-3.5-2.2-6.1-4-7.8-5.3
		c-1.8-1.3-4.2-2.3-7.3-3.1l-4.6-1.1l-5.8-1.3c-3.8-0.9-8.9-3.6-15.1-7.9c-6.3-4.4-11.7-9.2-16.4-14.4c-4.8-5.1-8.1-8.3-10-9.5
		c-1.9-1.2-5-2.1-9.1-2.7s-8.3-0.3-8.8-0.2l-0.9,0.2c0,0-4.9,1.8-4.5,4.3c0.2,0.8,0.9,1.4,0.9,1.4l3,4.4c1.7,2.6,6.8,11,8.4,13.7
		c0,0,0.1,0,0.1,0C279.6,380.6,283.5,381.8,291.3,383.3z"/>
	<path class="cl5" d="M369.9,430.2l1.7,0C370.9,430.1,370.3,430.2,369.9,430.2z"/>
	<path class="cl6" d="M417.1,448.7c0,0-0.1,0-0.1,0c-0.2,0-0.5-0.1-0.7-0.1c-0.1,0-0.2,0-0.2,0L417.1,448.7z"/>
	<path class="cl6" d="M414.7,448.3c0,0-0.1,0-0.1,0c0,0,0,0,0,0L414.7,448.3z"/>
	<path class="cl6" d="M393.2,429.8c0,0-0.1,0-0.2,0L393.2,429.8z"/>
	<path class="cl6" d="M383.9,477.5l-0.4-0.1l0.3-1.6l0.8,0l0.8-0.1l1.2-0.1l1.2-0.1l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.2l0-0.1
		l0-0.1l-0.1-0.2c0,0-0.1-0.1-0.1-0.1s-0.1-0.1-0.1-0.2c-0.1-0.2-0.2-0.4-0.4-0.6l-0.5-0.7h0l2.3,0.5c0.8,0.2,2,0.4,3.4,0.6
		c0.8,0.1,1.8,0.3,2.8,0.4c0.4,0.1,0.8,0.1,1.2,0.2l5.1,0.6l0.8-0.1l0.8,0l0-0.8l-0.1-0.8l-0.2-0.2l-0.1-0.3l-0.1-0.3
		c-0.1-0.1-0.5-0.4-1.1-0.8c-0.6-0.4-0.8-1-0.6-1.7s0-1.3-0.5-1.5c-0.5-0.3-0.2-0.5,1-0.8c0.3-0.1,0.6-0.2,0.8-0.3
		c0.8-0.3,1.4-0.8,1.9-1.3c0.4-0.5,0.6-0.8,0.6-1.1c0-0.1,0-0.2,0-0.2c0-0.1-0.1-0.2-0.3-0.2l-0.7-0.4l2.3,0.5
		c0.4,0.1,0.9,0.2,1.4,0.3c0.4,0.1,0.9,0.1,1.4,0.2c0.5,0.1,1.1,0.2,1.7,0.3c1.2,0.2,2.6,0.4,4.2,0.6l6.3,0.9l-1.5-0.7
		c-1-0.5-1.6-1.4-1.9-2.6c-0.3-1.2,0-1.8,0.7-1.6c0.8,0.2,1.4-0.3,1.9-1.4c0.5-1.1,0.9-3.1,1.2-5.9l0.4-4.1l-3.5-0.9l-3.4-0.9
		l0.1-0.4l0,0c0,0,0,0,0,0l0,0l-9.5-1c-0.1,0-0.2,0-0.2,0c-2.2-0.2-4.3-0.4-6.2-0.7c-0.2,0-0.4,0-0.5-0.1c-1.2-0.2-2.4-0.3-3.5-0.5
		c-0.2,0-0.4-0.1-0.6-0.1c-0.7-0.1-1.4-0.2-2-0.3l-0.1,0l-0.2,0c-0.9-0.2-1.7-0.3-2.5-0.5c-0.1,0-0.2,0-0.3-0.1l-6.6-1.3l0.2-0.2
		c-9.9-0.8-13.6-13.3-13.6-13.3h0c-2-0.5-3-1.2-2.8-2c0.1-0.5-0.1-0.8-0.6-0.8c-0.1,0-0.3,0-0.5,0c-0.2,0-0.4,0-0.6,0.1
		c-1.3,0.3-2.3,1.1-2.9,2.5c-0.4,0.7-1,1.2-2,1.4c-0.3,0.1-0.6,0.1-1,0.1c-0.2,0-0.5,0-0.8-0.1s-0.5-0.1-0.8-0.1
		c-2.3-0.5-5.1-2.1-8.3-4.9c-3.2-2.8-4.9-4.8-5-6.1c-0.1-1.2-0.2-2.5-0.2-3.8s-0.1-2.3-0.2-2.9c-0.2-0.6-0.2-1.2-0.3-1.8
		c0-0.7-0.5-1.6-1.6-2.6c-1.1-1-4.6-3.1-10.4-6.2c-5.8-3.1-10-5.7-12.5-7.8c0,0,0,0,0,0c-0.2-0.2-0.4-0.3-0.6-0.5
		c-1.2-0.9-2.8-1.8-4.3-2.7c-1.5-0.8-3-1.6-4.7-2.6c-0.7-0.4-8.5-4-15.8-5.7c-0.5-0.1-1-0.2-1.6-0.3c0,0,0,0,0,0
		c-7.8-1.5-11.2-2.3-11.9-3.2c-0.1-0.1-0.2-0.4-0.5-0.8c-1-0.2-3.7,1.5-6.9,3.5c-3.4,2-5.2,3.2-5.6,3.7l-0.5,0.7
		c0,0-0.3,0.4-0.5,1.1c-0.2,0.7,0.4,1.4,0.4,1.4c0.5,0.3,1.4,1.1,2.7,2.4l15.6,16.4c8,6.9,14.2,12.1,18.6,15.7s10.1,9.2,17.2,16.8
		s11.9,12.9,14.5,15.9s5.4,5.2,8.3,6.7c2.9,1.6,17.5,6.5,27.1,9.8l14.3,5l-0.1-0.4L383.9,477.5z"/>
	<path class="cl6" d="M409.9,465.3c-0.6-0.1-1.2-0.2-1.7-0.3C408.8,465.1,409.3,465.2,409.9,465.3z"/>
	<path class="cl6" d="M365,427.4c0.2,0,0.3,0,0.5,0C365.4,427.4,365.2,427.4,365,427.4z"/>
	<path class="cl6" d="M420.4,449.3c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0L420.4,449.3z"/>
	<path class="cl6" d="M419.4,449.1C419.4,449.1,419.4,449.1,419.4,449.1c-0.3-0.1-0.5-0.1-0.7-0.1L419.4,449.1z"/>
	<path class="cl6" d="M419.4,449.1l-0.8-0.2l0.2,0C419,449.1,419.2,449.1,419.4,449.1z"/>
	<path class="cl6" d="M388.4,444.9L388.4,444.9c0,0-0.3-0.1-0.7-0.2c-0.1,0-0.1,0-0.2,0l-0.9-0.2c-0.2,0-0.3-0.1-0.5-0.1
		c-0.3-0.1-0.7-0.2-1.1-0.3c0,0-0.1,0-0.1,0l-2-0.5c-0.2,0-0.4-0.1-0.5-0.1h0l-0.2,0.2l6.6,1.3c0.1,0,0.2,0,0.3,0.1
		c-0.1,0-0.2,0-0.3-0.1L388.4,444.9z"/>
	<path class="cl6" d="M405,447.3c-0.1,0-0.2,0-0.2,0C404.8,447.2,404.9,447.3,405,447.3l9.5,1l0,0c0,0,0,0,0,0L405,447.3z"/>
	<path class="cl6" d="M387.2,474.5l-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0.1,0.1,0.1,0.1,0.1L387.2,474.5z"/>
	<polygon class="cl6" points="386.6,473.4 386,472.7 386,472.7 	"/>
	<polygon class="cl6" points="402.6,474.1 402.5,473.2 402.3,473 402.5,473.2 	"/>
	<path class="cl6" d="M399.8,468.5c0.5,0.2,0.7,0.7,0.5,1.5s0,1.4,0.6,1.7c0.6,0.4,1,0.7,1.1,0.8c-0.1-0.1-0.2-0.6-0.2-1.4
		c0.1-0.8-0.4-1.5-1.3-2.1c-1-0.6-0.9-1,0.3-1.3C399.7,468,399.3,468.2,399.8,468.5z"/>
	<polygon class="cl6" points="387.6,475 387.4,474.8 387.3,474.7 387.4,474.8 	"/>
	<polygon class="cl6" points="387.9,475.5 387.8,475.2 387.6,475 387.8,475.2 	"/>
	<path class="cl6" d="M401.6,467.4c0.8-0.3,1.4-0.8,1.9-1.3c0.4-0.5,0.6-0.8,0.6-1.1c0,0.3-0.2,0.6-0.6,1.1
		C403,466.6,402.4,467.1,401.6,467.4z"/>
	<path class="cl6" d="M420.4,449.3l-0.3-0.1l-0.7-0.1l-0.7-0.1c-0.5-0.1-0.9-0.2-1.3-0.2l-0.2,0l-0.2,0l-1-0.2
		c-0.3-0.1-0.5-0.1-0.8-0.1l-0.4-0.1c-0.1,0-0.1,0-0.2,0l-0.1,0l0,0l0,0l-0.1,0.4l3.4,0.9l3.5,0.9l-0.4,4.1
		c-0.3,2.8-0.7,4.8-1.2,5.9c-0.5,1.1-1.1,1.5-1.9,1.4c-0.8-0.2-1,0.4-0.7,1.6c0.3,1.3,0.9,2.2,1.9,2.6l1.5,0.7l-6.3-0.9
		c0,0,13,7.9,6.8-11.4c0,0,2.4-1.7,1-5l-0.9-0.2C420.8,449.4,420.6,449.4,420.4,449.3z"/>
	<path class="cl6" d="M417.3,448.8L417.3,448.8L417.3,448.8C417.4,448.8,417.4,448.8,417.3,448.8z"/>
	<path class="cl6" d="M415.3,448.4c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0L415.3,448.4z"/>
	<path class="cl6" d="M421,449.4l0.9,0.2L421,449.4C421,449.4,421,449.4,421,449.4z"/>
	<path class="cl6" d="M415.1,448.3l-0.4-0.1c0.1,0,0.1,0,0.2,0C414.9,448.3,415,448.3,415.1,448.3z"/>
	<path class="cl6" d="M421.1,449.4l-0.7-0.1C420.6,449.4,420.8,449.4,421.1,449.4C421,449.4,421,449.4,421.1,449.4z"/>
	<path class="cl6" d="M418.6,449l-1.2-0.2c0,0,0.1,0,0.1,0L418.6,449z"/>
	<path class="cl6" d="M418.8,449l-0.2,0l-1.1-0.2C417.8,448.9,418.3,448.9,418.8,449z"/>
	<path class="cl6" d="M384.7,476.2l0.7-0.4l1.2-0.1l-1.2,0.1l-0.8,0.1l-0.8,0l-0.3,1.6l0.4,0.1l0.2,0.4l0.1,0.4l0-0.8
		C384,477,384.2,476.6,384.7,476.2z"/>
	<path class="cl6" d="M366.1,428.2c0.1-0.5-0.1-0.8-0.6-0.8C366,427.5,366.2,427.7,366.1,428.2c-0.2,0.8,0.8,1.4,2.8,2h0
		C366.9,429.7,365.9,429,366.1,428.2z"/>
	<path class="cl6" d="M291.3,383.3C291.3,383.3,291.3,383.3,291.3,383.3C291.3,383.3,291.3,383.3,291.3,383.3
		c-7.8-1.5-11.7-2.7-12.2-4c0,0-0.1,0-0.1,0c0.2,0.4,0.4,0.7,0.5,0.8C280,381,283.5,381.8,291.3,383.3z"/>
	<path class="cl6" d="M317.7,394.6c-1.3-1-2.7-1.9-4.3-2.7C315,392.7,316.6,393.7,317.7,394.6z"/>
	<path class="cl6" d="M348.7,426.3c-3.2-2.8-4.9-4.8-5-6.1c-0.1-1.2-0.2-2.5-0.2-3.8c0-1.3-0.1-2.3-0.2-2.9
		c-0.2-0.6-0.2-1.2-0.3-1.8c0-0.7-0.5-1.6-1.6-2.6c-1.1-1-4.6-3.1-10.4-6.2s-10-5.7-12.5-7.8c0,0,0,0,0,0c0,0,0,0,0,0
		c2.5,2.1,6.7,4.7,12.5,7.8c5.8,3.1,9.3,5.1,10.4,6.2c1.1,1,1.7,1.9,1.6,2.6c0,0.7,0.1,1.3,0.3,1.8c0.2,0.6,0.2,1.5,0.2,2.9
		s0.1,2.6,0.2,3.8C343.8,421.4,345.5,423.5,348.7,426.3c3.2,2.8,6,4.5,8.3,4.9c0.3,0.1,0.6,0.1,0.8,0.1c-0.3,0-0.5-0.1-0.8-0.1
		C354.7,430.7,351.9,429.1,348.7,426.3z"/>
	<path class="cl6" d="M308.7,389.3c-3.6-2-8.9-4.2-15.8-5.7C300.2,385.2,308,388.9,308.7,389.3z"/>
	<polygon class="cl8" points="388.6,417.7 388.8,417.9 388.9,418 388.8,417.9 	"/>
	<polygon class="cl8" points="382.3,425.7 383.5,426.1 384.9,426.8 383.5,426.1 	"/>
	<polygon class="cl8" points="388,428.7 388.3,428.3 388.5,428.2 388.7,428 388.9,427.8 389.2,427.7 389.7,427 390.3,426.3
		390.6,426.2 390.8,426 391,425.8 391.2,425.7 391.5,425.6 391.7,425.4 391.9,425.2 391.9,425.2 391.9,425.2 391.9,425.2
		391.7,425.4 391.5,425.6 391.2,425.7 391,425.8 390.8,426 390.6,426.2 390.3,426.3 389.7,427 389.2,427.7 388.9,427.8 388.7,428
		388.5,428.2 388.3,428.3 388,428.7 387.7,429 387.7,429 387.7,429 	"/>
	<path class="cl8" d="M390,429.3C390,429.3,389.9,429.3,390,429.3l-0.4,0.1L390,429.3C389.9,429.3,390,429.3,390,429.3z"/>
	<path class="cl8" d="M388.2,429.8c0.2,0,0.5,0,0.7,0l0.1,0c0.2-0.1,0.4-0.2,0.4-0.3l0.3-0.1l0.3-0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.2,0
		c0.1,0,0.3,0,0.4,0c0.4,0,0.9,0.1,1.5,0.2c0.3,0.1,0.7,0.1,1.1,0.2l-1.3-4.6l0,0l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2
		l-0.2,0.2l-0.3,0.1l-0.5,0.7l-0.5,0.7l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.3l-0.2,0.4v0C387.7,429,388.3,429.4,388.2,429.8
		z"/>
	<path class="cl8" d="M388.3,428.3l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.5-0.7l0.5-0.7l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1
		l0.2-0.2l0.2-0.2l0,0l-4.3-15.2l-0.9,0.6l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.9,0.2
		l-0.9,0.2l-0.8,0.1l-0.8,0l0,0.8l0.1,0.8l0.2,0.2l0.1,0.3l3,1l3,1l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.1,0.1
		l0.1,0.1l0.1,0.3l-0.9,0.2l-0.9,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-2.2,0.8c-0.7,0.3-1.4,0.5-1.9,0.6
		c-0.3,0.1-0.6,0.1-0.8,0.2s-0.5,0.1-0.7,0.1l-1.2,0.1l0.7,0.5l0.7,0.5l-0.9,0.2l-0.9,0.2l1.1,0.5l1.1,0.4l-0.3,1.6l1.1,0.4l1.1,0.5
		l1.5,0.7c1,0.5,1.7,0.9,2.1,1.4l0.6,0.8l0.2-0.4L388.3,428.3z"/>
	<path class="cl8" d="M372.2,414.5c-4.9,6.7-3.3,15.6-3.3,15.6l0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.3,0,0.5,0c0.4,0,1,0,1.7,0l0.5,0
		c0.4,0,0.7,0,1.1,0l0.8,0c0.5,0,1,0,1.5,0l1.7,0c0.3,0,0.7,0,1,0l1.1,0c0.6,0,1.1,0,1.7,0l1.7,0c0.4,0,0.8,0,1.2,0l1,0
		c0.6,0,1.2,0,1.7,0l0.9,0l0.2-0.8l0,0l-0.6-0.8c-0.4-0.5-1.2-0.9-2.1-1.4l-1.5-0.7l-1.1-0.5l-1.1-0.4l0.3-1.6l-1.1-0.4l-1.1-0.5
		l0.9-0.2l0.9-0.2l-0.7-0.5l-0.7-0.5l1.2-0.1c0.2,0,0.4-0.1,0.7-0.1s0.5-0.1,0.8-0.2c0.6-0.2,1.2-0.4,1.9-0.6l2.2-0.8l0.2-0.2
		l0.3-0.1l0.3-0.1l0.2-0.2l0.9-0.2l0.9-0.2l-0.1-0.3l-0.1-0.1l-0.1-0.1l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-3-1
		l-3-1l-0.1-0.3l-0.2-0.2l-0.1-0.8l0-0.8l0.8,0l0.8-0.1l0.9-0.2l0.9-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1
		l0.2-0.2l0.2-0.2l0.3-0.1l0.5-0.3C387.6,410,377.1,407.8,372.2,414.5z"/>
	<path class="cl8" d="M388.2,429.8c0.1-0.4-0.5-0.8-0.5-0.8l-0.2,0.8l0.5,0C388.1,429.8,388.2,429.8,388.2,429.8z"/>
	<polygon class="cl8" points="386.6,419.3 386.9,419.2 387.2,419.1 387.4,418.9 387.2,419.1 386.9,419.2 386.6,419.3 386.4,419.5
		384.3,420.2 386.4,419.5 	"/>
	<polygon class="cl8" points="388.9,418 389,418.1 389.1,418.4 389,418.1 	"/>
	<polygon class="cl8" points="386.6,410.6 386.4,410.8 386.2,410.9 386.4,410.8 	"/>
	<polygon class="cl8" points="386.8,410.4 386.6,410.6 387.6,410 387.6,410 387.1,410.3 	"/>
	<polygon class="cl8" points="386.2,410.9 385.9,411 385.7,411.2 385.9,411 	"/>
	<polygon class="cl8" points="381.5,423.7 381.2,425.3 382.3,425.7 381.2,425.3 	"/>
	<path class="cl8" d="M379.6,421.3l1.2-0.1c0.2,0,0.4-0.1,0.7-0.1c-0.2,0.1-0.5,0.1-0.7,0.1L379.6,421.3l0.7,0.5l0.7,0.5l-0.7-0.5
		L379.6,421.3z"/>
	<polygon class="cl8" points="381.4,412.4 381.4,413.2 381.5,414 381.4,413.2 	"/>
	<polygon class="cl8" points="383.1,412.3 383.9,412.1 384.8,411.9 385,411.7 384.8,411.9 383.9,412.1 383.1,412.3 382.2,412.4
		381.4,412.4 382.2,412.4 	"/>
	<polygon class="cl8" points="385.7,411.2 385.5,411.4 385.2,411.6 385.5,411.4 	"/>
	<polygon class="cl8" points="388,416.8 388.2,417 388.4,417.2 388.2,417 	"/>
	<polygon class="cl8" points="384.8,415.5 381.8,414.5 381.7,414.2 381.8,414.5 384.8,415.5 387.9,416.5 388,416.8 387.9,416.5 	"/>
	<path class="cl8" d="M390.7,429.3c-0.2,0-0.3,0-0.4,0c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0l-0.3,0.1l-0.2,0.4l0.5,0
		c0.2,0,0.4,0,0.6,0l1.7,0l0.5,0l0.2,0c0.1,0,0.2,0,0.2,0c-0.4-0.1-0.7-0.1-1.1-0.2C391.5,429.4,391,429.3,390.7,429.3z"/>
	<path class="cl8" d="M390.7,429.3c0.4,0,0.9,0.1,1.5,0.2C391.5,429.4,391,429.3,390.7,429.3z"/>
	<path class="cl8" d="M393.2,429.8L393.2,429.8c-0.4-0.1-0.7-0.1-1.1-0.2C392.5,429.6,392.8,429.7,393.2,429.8z"/>
	<path class="cl8" d="M389.4,429.5c0,0-0.2,0.2-0.4,0.3l0.5,0l0.2-0.4L389.4,429.5z"/>
	<path class="cl7" d="M371,430.6c2.1,0.3,5,0.3,8.7,0.2l7.7-0.2l-7.7,0.2C376,430.9,373.1,430.8,371,430.6z"/>
	<path class="cl7" d="M391.7,445.5L391.7,445.5c0.1,0,0.2,0,0.2,0l0,0C391.9,445.6,391.8,445.6,391.7,445.5z"/>
	<path class="cl7" d="M397.1,432.6l-1.5,6.3l-0.2,0.2l-0.2,0.2l-0.3,0.1l-1.3,1.2c-0.2,0.2-0.4,0.4-0.7,0.5
		c-0.8,0.4-1.7,0.6-2.9,0.6h0h0c0,0-1.7-0.1-2.6,0.1c-1.2,1.5-4.4,1.5-4.4,1.5l-0.3,0.1l-0.3,0.1c0.1,0,0.3,0.1,0.5,0.1
		c0.6,0.1,1.3,0.3,2,0.5c0,0,0.1,0,0.1,0c0.4,0.1,0.7,0.2,1.1,0.3c0.2,0,0.3,0.1,0.5,0.1c0.4,0.1,0.7,0.2,0.9,0.2c0.1,0,0.1,0,0.2,0
		l0.7,0.2l3.3,0.6c0.1,0,0.2,0,0.2,0l3.9,0.5l1.7-14.7l-4.3-1.7l3.6,2L397.1,432.6z"/>
	<path class="cl7" d="M387.8,430.5c0.2-0.1,0.8-0.4,1.2-0.7l-0.1,0c-0.2,0-0.5,0-0.7,0c0,0,0,0.1,0,0.1c-0.4,0.6-0.8,0.6-0.8,0.6h0
		L387.8,430.5z"/>
	<path class="cl7" d="M379.7,430.8l7.7-0.2l0.1-0.7l-0.9,0c-0.5,0-1.1,0-1.7,0l-1,0c-0.4,0-0.8,0-1.2,0l-1.7,0c-0.6,0-1.1,0-1.7,0
		l-1.1,0c-0.3,0-0.7,0-1,0l-1.7,0c-0.5,0-1,0-1.5,0l-0.8,0c-0.4,0-0.8,0-1.1,0l-0.5,0l-1.7,0l-0.5,0c-0.1,0-0.2,0-0.2,0
		c-0.1,0-0.2,0-0.2,0c0.6,0.2,1.3,0.3,2.1,0.4C373.1,430.8,376,430.9,379.7,430.8z"/>
	<path class="cl7" d="M388.2,429.9C388.2,429.9,388.2,429.9,388.2,429.9c0-0.1-0.1-0.1-0.1-0.1l-0.5,0l-0.1,0.7
		C387.4,430.6,387.8,430.5,388.2,429.9z"/>
	<path class="cl7" d="M391.9,445.6L391.9,445.6c0,0-0.1,0-0.2,0L391.9,445.6z"/>
	<path class="cl7" d="M383,443.3l0.2-0.2l1.2-0.1l1.2-0.1l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l2.4,0.1
		h0h0c1.2,0,2.2-0.1,2.9-0.6c0.3-0.1,0.5-0.3,0.7-0.5l1.3-1.2l0.3-0.1l0.2-0.2l0.2-0.2l1.5-6.3l-0.2-0.9l-3.6-2l-0.2,0l-0.2,0
		c-0.1,0-0.3,0-0.5,0c-0.4,0-1,0-1.7,0c-0.2,0-0.4,0-0.6,0l-0.5,0l-0.2,0.3l-0.3,0.7l-1.6-0.3l-7.7,0.2c-3.7,0.1-6.6,0.1-8.7-0.2
		c-0.8-0.1-1.5-0.2-2.1-0.4c0,0,3.7,12.5,13.6,13.3l0.3-0.1L383,443.3z"/>
	<path class="cl7" d="M392.8,429.8l-0.5,0C392.5,429.8,392.7,429.8,392.8,429.8z"/>
	<polygon class="cl7" points="396.9,431.7 393.2,429.8 393.2,429.8 	"/>
	<path class="cl7" d="M387.6,444.7c-0.3-0.1-0.6-0.1-0.9-0.2L387.6,444.7z"/>
	<path class="cl7" d="M387.8,430.5l-0.4,0.1h0l1.6,0.3l0.3-0.7l0.2-0.3l-0.5,0C388.6,430.1,388,430.4,387.8,430.5z"/>
	<path class="cl7" d="M388.4,444.9L388.4,444.9l-0.7-0.2C388.2,444.8,388.4,444.9,388.4,444.9z"/>
	<path class="cl7" d="M387.4,441.7c0.9-0.2,2.6-0.1,2.6-0.1l-2.4-0.1L387.4,441.7l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1
		l-0.3,0.1l-0.2,0.2l-1.2,0.1l-1.2,0.1l-0.2,0.2C383,443.3,386.1,443.2,387.4,441.7z"/>
	<path class="cl7" d="M385,444.1c-0.7-0.2-1.4-0.4-2-0.5L385,444.1z"/>
	<polygon class="cl7" points="382.8,443.4 383,443.3 382.8,443.4 382.5,443.5 382.5,443.5 	"/>
	<polygon class="cl7" points="395.6,438.9 397.1,432.6 396.9,431.7 397.1,432.6 395.6,438.9 395.4,439.1 395.2,439.3 395.4,439.1
		"/>
	<path class="cl7" d="M394.9,439.4l0.3-0.1L394.9,439.4l-1.3,1.2c-0.2,0.2-0.4,0.4-0.7,0.5c0.3-0.1,0.5-0.3,0.7-0.5L394.9,439.4z"/>
	<path class="cl7" d="M369.3,430.2l0.5,0C369.6,430.2,369.5,430.2,369.3,430.2z"/>
	<path class="cl7" d="M368.9,430.2c0,0,0.1,0,0.2,0L368.9,430.2z"/>
	<path class="cl7" d="M392.3,429.8l-1.7,0C391.3,429.8,391.8,429.8,392.3,429.8z"/>
</g>
<g>
	<path class="cl2" d="M150.1,88.1c-0.3-0.5-0.7-1.1-1.2-1.7C149.4,87.1,149.8,87.7,150.1,88.1z"/>
	<path class="cl5" d="M150.5,88.9c-0.1-0.2-0.3-0.5-0.5-0.8C150.2,88.4,150.4,88.7,150.5,88.9z"/>
	<path class="cl5" d="M148.9,86.4c-3-4.1-8.6-10.7-10-10.7C143.5,80.2,146.9,83.8,148.9,86.4z"/>
	<path class="cl2" d="M150.5,88.9c-0.1-0.2-0.3-0.5-0.5-0.8C150.2,88.4,150.4,88.7,150.5,88.9z"/>
	<path class="cl2" d="M148.9,86.4c-3-4.1-8.6-10.7-10-10.7C143.5,80.2,146.9,83.8,148.9,86.4z"/>
	<path class="cl2" d="M150.1,88.1c-0.3-0.5-0.7-1.1-1.2-1.7C149.4,87.1,149.8,87.7,150.1,88.1z"/>
	<path class="cl2" d="M435.5,139.6l0.3,0.1c0,0-0.1,0-0.1,0L435.5,139.6z"/>
	<path class="cl2" d="M539.3,196.5c2.2,1.3,4.4,2.3,4.7,2.6C542.4,198.2,540.8,197.3,539.3,196.5z"/>
	<path class="cl2" d="M488.3,160.9c1.3-0.3,2.3-1.1,2.9-2.5c0.4-0.7,1-1.2,2-1.4c-0.9,0.2-1.6,0.6-2,1.4
		C490.6,159.8,489.6,160.6,488.3,160.9c-0.2,0.1-0.4,0.1-0.6,0.1C487.9,161,488.1,160.9,488.3,160.9z"/>
	<path class="cl2" d="M432.6,139.1C432.6,139.1,432.6,139.1,432.6,139.1l0.7,0.1c0,0,0,0-0.1,0L432.6,139.1z"/>
	<path class="cl2" d="M436.5,139.8l0.7,0.1l-0.4-0.1C436.6,139.8,436.6,139.8,436.5,139.8z"/>
	<polygon class="cl2" points="465.5,113.7 465.5,113.8 465.5,113.9 465.5,113.8 	"/>
	<path class="cl2" d="M438.2,140.1L438.2,140.1C438.3,140.1,438.3,140.1,438.2,140.1L438.2,140.1
		C438.2,140.1,438.2,140.1,438.2,140.1z"/>
	<path class="cl2" d="M466.7,115.7l-2.3-0.5c-0.8-0.2-2-0.4-3.4-0.6c1.4,0.2,2.5,0.4,3.4,0.6L466.7,115.7z"/>
	<path class="cl2" d="M382.1,138.2c0.7,0,1.6,0.1,2.6,0.1C383.7,138.2,382.8,138.2,382.1,138.2z"/>
	<path class="cl2" d="M382.1,138.2c-0.5,0-0.8,0-1.1-0.1c-0.7-0.1-2-0.2-3.7-0.5c1.7,0.3,3,0.4,3.7,0.5
		C381.2,138.1,381.6,138.1,382.1,138.2z"/>
	<path class="cl2" d="M384.7,138.2c0.7,0,1.5,0,2.4,0C386.2,138.2,385.4,138.2,384.7,138.2z"/>
	<path class="cl2" d="M438.7,122.4L438.7,122.4c1.6,0.2,3,0.4,4.2,0.6C441.6,122.9,440.2,122.7,438.7,122.4z"/>
	<path class="cl2" d="M306.7,187.2c-0.4,0-0.8,0-1.1,0C305.9,187.2,306.3,187.2,306.7,187.2z"/>
	<path class="cl2" d="M304,187.8c-0.3,0.5-0.8,0.8-1.5,0.9c-0.7,0.1-1.6,1-2.7,2.7c-1.1,1.6-1.4,2.5-1,2.8c-0.4-0.2-0.1-1.2,1-2.8
		c1.1-1.7,2.1-2.5,2.7-2.7C303.2,188.5,303.7,188.2,304,187.8c0.1-0.3,0.7-0.5,1.6-0.5C304.6,187.3,304.1,187.5,304,187.8z"/>
	<path class="cl2" d="M404.4,164.3c-2.8,0.2-4.3,0.6-4.4,1.1c0,0.2-0.2,0.3-0.5,0.4c0.3,0,0.5-0.2,0.5-0.4
		C400.1,164.9,401.6,164.5,404.4,164.3c2.9-0.2,5.1-0.5,6.6-0.8c1.2-0.3,2.3-0.4,3.3-0.4c-1,0-2.2,0.2-3.3,0.4
		C409.5,163.8,407.3,164.1,404.4,164.3z"/>
	<path class="cl2" d="M420.2,159.5c-0.3,1.3-0.8,2-1.5,2.1c-0.7,0.1-1.1,0.5-1.2,1c-0.1,0.5-0.8,0.7-2.1,0.5c1.3,0.1,2,0,2.1-0.5
		c0.1-0.5,0.5-0.8,1.2-1C419.4,161.5,419.9,160.7,420.2,159.5c0.3-1.3,4.4-1.9,4.4-1.9l0,0C424.6,157.5,420.5,158.2,420.2,159.5z"/>
	<path class="cl2" d="M388,166.8c-0.4,0.6-1.6,1.2-3.6,2c-2.1,0.8-3.9,1.5-5.6,1.9c-0.9,0.2-1.8,0.4-2.7,0.4c1,0,1.9-0.2,2.7-0.4
		c1.7-0.5,3.6-1.1,5.6-1.9C386.4,168.1,387.6,167.4,388,166.8c0.4-0.6,1.4-1.2,3.2-1.6c0.9-0.2,1.7-0.3,2.7-0.3
		c-0.9,0-1.8,0.1-2.7,0.3C389.4,165.7,388.4,166.2,388,166.8z"/>
	<path class="cl2" d="M429,157.6l-2.6,0.7h0L429,157.6c1.7-0.5,2.6-0.8,2.8-0.9c0.1,0,0.8-0.1,1.9-0.1c-1.1,0-1.8,0.1-1.9,0.1
		C431.7,156.9,430.8,157.2,429,157.6z"/>
	<path class="cl2" d="M366,169.8C366,169.8,366,169.8,366,169.8C366,169.8,366,169.8,366,169.8c0.1-0.3,0.2-0.4,0.5-0.4
		C366.2,169.4,366,169.5,366,169.8z"/>
	<path class="cl2" d="M460.6,163.3l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2c-0.1,0.1-0.4,0.1-0.8,0.1
		c0.4,0,0.7,0,0.8-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2L460.6,163.3l0.2-0.1v0L460.6,163.3z"/>
	<path class="cl2" d="M446.7,160.4c0.6,0.1,1.2,0.2,1.8,0.2c0.4,0,0.8,0.1,1.1,0.1c-0.4,0-0.7-0.1-1.1-0.1
		C447.8,160.6,447.2,160.5,446.7,160.4z"/>
	<path class="cl2" d="M457.3,164.4c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.3,0,0.5,0c-0.1,0-0.3,0-0.5,0
		C457.6,164.5,457.5,164.4,457.3,164.4z"/>
	<path class="cl2" d="M460.8,142.8c-0.6-0.1-1.3-0.2-2-0.3C459.5,142.6,460.2,142.7,460.8,142.8L460.8,142.8z"/>
	<path class="cl2" d="M463.5,143.3c-0.8-0.2-1.6-0.3-2.5-0.5l0,0C461.9,143,462.7,143.1,463.5,143.3z"/>
	<path class="cl2" d="M280.6,196.6c2.4,0,4.6-0.3,6.6-1c0.8-0.3,1.5-0.5,2.2-0.7c-0.7,0.2-1.4,0.4-2.2,0.7
		C285.3,196.3,283.1,196.6,280.6,196.6z"/>
	<path class="cl2" d="M293.3,194.2c-1.2,0.1-2.5,0.4-3.9,0.7C290.8,194.6,292.1,194.3,293.3,194.2z"/>
	<path class="cl2" d="M298.4,194.3c0.4,0,0.5,0,0.5-0.1C299,194.3,298.8,194.3,298.4,194.3z"/>
	<path class="cl2" d="M329.1,173.1c0.4,0.3,0.4,0.8,0.2,1.3c-0.3,0.5-1.4,1.2-3.3,2.1c-1.9,1-3.1,2.7-3.7,5.3
		c-0.5,2.6-1.7,3.6-3.4,2.9s-2.7-0.7-2.8-0.2c-0.1,0.5,0.3,1.2,1.2,2l1.3,1.3l-0.9,0.2l-0.9,0.2h0l0.9-0.2l0.9-0.2l-1.3-1.3
		c-0.9-0.8-1.3-1.5-1.2-2s1-0.5,2.8,0.2c1.8,0.6,2.9-0.3,3.4-2.9c0.5-2.6,1.8-4.4,3.7-5.3c2-0.9,3.1-1.7,3.3-2.1
		C329.5,173.9,329.5,173.5,329.1,173.1c-0.3-0.3,1.8-1.3,6.3-3c0,0,0,0,0,0c0,0,0,0,0,0C330.9,171.8,328.8,172.8,329.1,173.1z"/>
	<path class="cl2" d="M314.5,187.9c0.2,0,0.3,0.1,0.5,0.1l1.1,0.2L315,188C314.9,188,314.7,187.9,314.5,187.9z"/>
	<path class="cl2" d="M339.6,128.8l0,0.8L339.6,128.8l1.9-0.8c0.3-0.1,0.5-0.2,0.7-0.3c-0.2,0.1-0.4,0.2-0.7,0.3L339.6,128.8z"/>
	<path class="cl2" d="M277.7,123.6c-0.3,0-0.4,0.1-0.4,0.2C277.3,123.7,277.4,123.6,277.7,123.6z"/>
	<path class="cl2" d="M229.1,212.8c1.5-0.5,1.8-0.9,1.1-1.2h0C230.9,211.9,230.6,212.3,229.1,212.8c-1.5,0.5-1.8,1-1.1,1.5
		c0,0,0,0,0,0c0,0,0,0,0,0C227.3,213.9,227.7,213.3,229.1,212.8z"/>
	<polygon class="cl2" points="276.2,132.6 276.2,132.6 276.2,132.6 277.5,132.7 277.7,133.3 277.5,132.7 	"/>
	<polygon class="cl2" points="220.4,206.2 219.7,205.6 219.6,205.4 219.6,205.4 219.7,205.6 220.4,206.2 221.1,206.7 221.2,206.7
		221.1,206.7 	"/>
	<path class="cl2" d="M277.5,126.6c-0.7,0.9-1.3,2.2-1.8,3.7l-0.6,2.3l0.6-2.3C276.2,128.8,276.8,127.5,277.5,126.6z"/>
	<path class="cl2" d="M229.2,210.4c0.1-0.5,0.4-0.8,1-0.8l0.8-0.1l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2
		l0,0l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.8,0.1C229.7,209.6,229.3,209.9,229.2,210.4
		c-0.1,0.3,0,0.5,0.2,0.8C229.2,211,229.2,210.7,229.2,210.4z"/>
	<path class="cl2" d="M252.6,168.1c0.4-0.5,0.9-1,1.3-1.5C253.5,167.2,253,167.7,252.6,168.1z"/>
	<path class="cl2" d="M257.2,183.9c0.1,0.1,0.3,0.2,0.5,0.2c0.3,0.1,0.6,0.4,1,0.7c-0.4-0.4-0.7-0.6-1-0.7
		C257.4,184,257.3,184,257.2,183.9z"/>
	<path class="cl2" d="M258.5,162.1L258.5,162.1c0.1,0,0.1,0,0.2,0C258.6,162.2,258.6,162.2,258.5,162.1z"/>
	<path class="cl2" d="M317.9,123.5c0.5,0.1,1,0.2,1.6,0.3C318.9,123.7,318.4,123.6,317.9,123.5z"/>
	<path class="cl2" d="M321.3,124.4c-0.3-0.1-0.6-0.2-0.9-0.3s-0.6-0.2-0.9-0.3c0.3,0.1,0.6,0.2,0.9,0.3S321,124.3,321.3,124.4z"/>
	<path class="cl2" d="M340.3,124.1c0,0,0.1-0.1,0.1-0.1l0.2-0.2l-0.2,0.2C340.4,124,340.4,124,340.3,124.1z"/>
	<path class="cl2" d="M340,125.1c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.2,0.1-0.3c0,0.1-0.1,0.2-0.1,0.3C340,124.9,340,125,340,125.1z"/>
	<path class="cl2" d="M332,123.3c-0.3,0-0.6,0-0.9-0.1c-0.3,0-0.6,0-0.9,0c0.3,0,0.6,0,0.9,0C331.4,123.2,331.7,123.2,332,123.3z"/>
	<path class="cl6" d="M148.9,86.4c0.5,0.6,0.9,1.2,1.2,1.7c0.2,0.3,0.4,0.6,0.5,0.8c1.4,2.7,2.8,5.6,4.2,8.5c1.4,3,3.6,5.5,6.4,7.6
		c2.8,2,20.2,27.2,20.2,29.3c0.1,2.2,0.4,3.6,1,4.4c0.5,0.8,1.7,1.7,3.7,2.6c2,0.9,3.3,1.7,3.9,2.4c0.7,0.7,1.7,2.3,3,4.9
		c1.4,2.5,3.3,4.4,5.7,5.5c2.4,1.2,4.5,2.5,6.1,3.9s2.7,3.1,3.4,5c0.7,1.9,1.6,3.1,2.9,3.8c1.2,0.6,3,1.9,5.3,3.7
		c2.3,1.8,4.8,3.4,7.5,4.8c2.7,1.4,5.2,2.9,7.5,4.8c2.3,1.8,6,3.7,11,5.6l7.5,3l4.5,1.6c3,1,5.2,1.8,6.4,2.3l1.9,0.8l0.7,0.5
		l0.7,0.5l1.6,0.3l0.4-0.2l0.4-0.1h0l0.1-0.4l-0.7-0.5l-0.7-0.5l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2
		l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-2.2-2.9c-0.7-0.9-1.3-1.6-1.8-2.2c-0.2-0.2-0.3-0.3-0.5-0.5
		c-0.4-0.4-0.7-0.6-1-0.7c-0.2-0.1-0.4-0.1-0.5-0.2c-0.4-0.2-0.6-0.6-0.5-0.9c0.1-0.5-0.1-0.8-0.6-0.9c-0.5-0.1-0.9-1.3-1.3-3.7
		c-0.3-2.4-1-3.9-2.1-4.5c-1.1-0.7-1.7-1.5-1.7-2.6c0-1.1,0.2-1.8,0.6-2.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.2-0.2
		c0.2-0.2,0.5-0.4,0.7-0.7c0.4-0.4,0.8-0.9,1.3-1.5c0.5-0.7,0.9-1.3,0.9-1.6c0.1-0.9,0.3-2,0.5-3.4c0.3-1.4,0.7-2.1,1.2-2
		c0.5,0.1,0.8,0.5,1,1.2c0.1,0.7,0.4,1.2,0.9,1.5h0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.4-0.1c0.4-0.1,0.8-0.6,1.3-1.2
		c0.8-1.1,2-4.4,3.4-2.3c1.4,2.1,0.7,1.4,1,2.6c0.3,1.1,0.8,1,1.4-0.4c0.7-1.3,1-2.7,0.9-4.2c-0.1-1.5,0.2-2.9,0.7-4.1
		c0.5-1.2,1.5-2.9,3-5c1.5-2.1,3.4-4.1,5.8-5.8c2.4-1.8,4.5-3,6.2-3.4c1.7-0.5,2.6-0.8,2.8-0.9l0.3-0.1l0.3-0.1l0.2-0.2l1.2-0.1
		l1.2-0.1l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l-1.1-0.6l-1.1-0.6l1.2-0.1l1.2-0.1l0.1-0.4l-2-0.2l-2-0.2l-0.9,0.2
		c-0.1,0-0.3,0.1-0.4,0.1c-0.2,0.1-0.5,0.1-0.6,0.1c-0.1,0-0.2,0-0.2,0c-0.3-0.1-0.8,0.1-1.7,0.5c-0.9,0.4-1.8,0.4-2.8,0
		c-0.8-0.2-1.3-0.5-1.6-0.8c-0.1-0.1-0.2-0.2-0.2-0.3l-0.3-0.6l-1.2,0l-0.1,0l-1.1-0.1v0l0.6-2.3c0.5-1.5,1.1-2.7,1.8-3.7
		s0.8-1.7,0.2-2.2c-0.2-0.2-0.3-0.4-0.4-0.5c0,0,0-0.1,0-0.1c0-0.1,0.1-0.2,0.4-0.2l0.8,0l0.3-1.6l-2.3-0.5l-13.5-2.9
		c-9-2-16.2-4.6-21.6-7.7c-22-12.9-58.3-57.6-64.8-57.6c-24.3,1.9-37.7,22.4-37.7,22.4C140.3,75.8,145.9,82.4,148.9,86.4z"/>
	<path class="cl7" d="M263.2,190.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2
		l0.1,0.3l0.7,0.5l0.7,0.5l-0.1,0.4l7.8,1.4c0.1,0,0.2,0,0.3,0c1.1,0.2,2.1,0.3,3.1,0.4c0.2,0,0.4,0,0.5,0c0.9,0.1,1.7,0.1,2.5,0.1
		c2.4,0,4.6-0.3,6.6-1c0.8-0.3,1.5-0.5,2.2-0.7c1.4-0.4,2.7-0.6,3.9-0.7c0.6-0.1,1.2-0.1,1.7-0.1c0.3,0,0.6,0,0.9,0
		c0.3,0,0.6,0.1,0.8,0.1c0.3,0,0.5,0,0.7,0c0.4,0,0.7,0,1,0c0.4,0,0.5,0,0.5-0.1c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0
		c-0.4-0.2-0.1-1.2,1-2.8c1.1-1.7,2.1-2.5,2.7-2.7c0.7-0.1,1.2-0.4,1.5-0.9c0.1-0.3,0.7-0.5,1.6-0.5c0.3,0,0.7,0,1.1,0
		c0.3,0,0.6,0,0.9,0c0.3,0,0.7,0,1,0c1.9,0.1,3.5,0.3,4.7,0.5c0.4,0.1,0.8,0.1,1.1,0.2c0.2,0,0.3,0.1,0.5,0.1l1.1,0.2l0.8,0.2
		l0.9-0.2l0.9-0.2l-1.3-1.3c-0.9-0.8-1.3-1.5-1.2-2c0.1-0.5,1-0.5,2.8,0.2s2.9-0.3,3.4-2.9c0.5-2.6,1.8-4.4,3.7-5.3
		c2-0.9,3.1-1.7,3.3-2.1c0.2-0.5,0.1-0.9-0.2-1.3c-0.3-0.3,1.8-1.3,6.3-3c0,0,0,0,0,0c4.5-1.6,8.3-2.5,11.3-2.7
		c3-0.2,4.3-2.2,7.1-1.7c2.8,0.6,7.5,0.7,9.6,1.3c1.9,0.5,2.4,2.7,2.6,2.8c0,0,0,0,0-0.1c0.1-0.3,0.2-0.4,0.5-0.4
		c0.3,0,0.7,0.1,1.3,0.4c1.1,0.5,2.8,0.9,5.1,1.3c1.1,0.1,2.1,0.2,3.1,0.2c1,0,1.9-0.2,2.7-0.4c1.7-0.5,3.6-1.1,5.6-1.9
		c2-0.8,3.3-1.4,3.6-2c0.4-0.6,1.4-1.2,3.2-1.6c0.9-0.2,1.8-0.3,2.7-0.3c0.9,0,1.9,0.2,2.9,0.5c0.8,0.2,1.4,0.3,1.9,0.4
		c0.2,0,0.3,0,0.4,0c0.1,0,0.3,0,0.4,0c0.3,0,0.5-0.2,0.5-0.4c0.1-0.5,1.6-0.9,4.4-1.1c2.9-0.2,5.1-0.5,6.6-0.8
		c1.2-0.3,2.3-0.4,3.3-0.4c0.3,0,0.7,0,1,0c0,0,0,0,0.1,0c1.3,0.1,2,0,2.1-0.5c0.1-0.5,0.5-0.8,1.2-1c0.7-0.1,1.2-0.8,1.5-2.1
		c0.3-1.3,4.4-1.9,4.4-1.9l0,0l0.2,0.2l0.1,0.3l1.6,0.3l2.6-0.7c1.7-0.5,2.6-0.8,2.8-0.9c0.1,0,0.8-0.1,1.9-0.1c0.2,0,0.4,0,0.6,0
		c0.4,0,0.8,0,1.1,0c0.3,0,0.5,0,0.8,0.1c0.3,0,0.7,0.1,1,0.2c0.6,0.1,1.3,0.3,1.8,0.6c0.2,0.1,0.3,0.2,0.5,0.3
		c0.4,0.3,0.9,0.6,1.4,0.8c0.3,0.2,0.7,0.3,1.1,0.5c0.3,0.1,0.5,0.2,0.8,0.3c0.5,0.2,1,0.3,1.5,0.5c0.2,0.1,0.4,0.1,0.6,0.2
		c0.5,0.1,1.1,0.3,1.7,0.4c0.6,0.1,1.2,0.2,1.8,0.2c0.4,0,0.8,0.1,1.1,0.1c1.4,0.2,2.6,0.4,3.6,0.8c0.5,0.2,0.9,0.4,1.2,0.6
		c0.3,0.2,0.6,0.5,0.9,0.7c0.4,0.5,0.8,0.8,1.1,1.1c0.3,0.3,0.7,0.4,1,0.5c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.3,0,0.5,0c0,0,0,0,0,0
		c0.4,0,0.7,0,0.8-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.2-0.1l-1.3-4.6l-4.3-1.7l1.7-14.7l3.9,0.5
		c-0.6-0.1-1.3-0.2-2-0.3c-0.2,0-0.4-0.1-0.6-0.1c-1.1-0.2-2.3-0.3-3.5-0.5c-0.2,0-0.4,0-0.5-0.1c-2-0.2-4-0.5-6.2-0.7
		c-0.1,0-0.2,0-0.2,0l-9.5-1c0,0,0,0,0,0l-0.1,0c0,0-0.1,0-0.1,0l-0.4-0.1l-0.5-0.1l-0.7-0.1c-0.2,0-0.4-0.1-0.7-0.1l-0.3-0.1
		l-0.1,0l-1.2-0.2l-0.8-0.2l-0.8-0.1c-0.1,0-0.1,0-0.2,0l-0.7-0.1l-0.8-0.1c-1.9-0.3-3.4-0.6-4.5-0.7c-0.4-0.1-0.7-0.1-1.1-0.2
		c-0.2,0-0.5-0.1-0.7-0.1c-0.4,0-0.7-0.1-0.9-0.1c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-0.1,0-0.3,0-0.7,0
		c-0.3,0-0.7,0-1.2,0c-0.4,0-0.8,0-1.3,0c-0.5,0-1.1,0-1.7,0c-3.2,0.1-8.1,0.1-14.5,0.2c-3.2,0.1-6.1,0.1-8.7,0.1
		c-1.9,0-3.7,0-5.2,0c-0.5,0-1,0-1.5,0s-0.9,0-1.4,0c-0.9,0-1.7,0-2.4,0c-1.1,0-1.9,0-2.6-0.1c-0.5,0-0.8,0-1.1-0.1
		c-0.7-0.1-2-0.2-3.7-0.5c-3.8-0.6-10-1.7-18.5-3.2l-18.7-3.4l-0.1-0.3l-0.2-0.2l-0.1-0.8l0-0.8l1.9-0.8c0.3-0.1,0.5-0.2,0.7-0.3
		c0.2-0.1,0.4-0.2,0.5-0.2c0.5-0.2,0.7-0.4,0.6-0.5l-0.1-0.3l-1.7-0.6c-0.9-0.3-1.4-0.6-1.6-0.9c0-0.1,0-0.1,0-0.2s0-0.1,0-0.2
		c0-0.1,0.1-0.2,0.1-0.3c0.1-0.2,0.1-0.3,0.2-0.4c0,0,0.1-0.1,0.1-0.1l0.2-0.2l-1.9-0.4c-0.6-0.1-1.2-0.2-1.7-0.2
		c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.5,0.1c-0.4,0.1-1.1,0.1-2.3,0.1c-0.5,0-1,0-1.6-0.1c-0.3,0-0.6,0-0.9-0.1c-0.3,0-0.6,0-0.9,0
		c-0.6,0-1.1,0-1.5,0s-0.8,0.1-1,0.2c-0.2,0.1-0.4,0.1-0.5,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.5-0.6,0.9-1.4,1.2
		c-0.2,0.1-0.5,0.1-0.8,0.1c-0.2,0-0.3,0-0.5,0c-0.7-0.1-1.7-0.3-2.9-0.6c-0.3-0.1-0.6-0.2-0.9-0.3s-0.6-0.2-0.9-0.3
		c-0.6-0.1-1.1-0.2-1.6-0.3c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0-0.6,0c-0.4,0-0.7,0.1-0.9,0.3c-0.1,0.1-0.2,0.2-0.3,0.2
		c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0.1-0.3,0.2-0.4,0.3c-0.3,0.2-0.7,0.4-1.1,0.5c-0.6,0.3-1.3,0.5-2.2,0.7c-0.3,0.1-0.6,0.1-0.9,0.2
		c-2.4,0.6-3.7,1.1-3.9,1.6c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.5,0.2-0.8,0.3c-0.6,0.2-1.5,0.3-2.5,0.5
		c-0.9,0.1-1.6,0.3-2.2,0.4c-0.2,0-0.4,0.1-0.5,0.2c-0.6,0.2-1,0.4-1.1,0.7c-0.3,0.5-1.8,1.3-4.5,2.3l-4.2,1.6l-0.1,0.4l-1.2,0.1
		l-1.2,0.1l1.1,0.6l1.1,0.6l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-1.2,0.1l-1.2,0.1l-0.2,0.2l-0.3,0.1l-0.3,0.1
		c-0.1,0.1-1.1,0.4-2.8,0.9c-1.7,0.5-3.8,1.6-6.2,3.4c-2.4,1.8-4.3,3.7-5.8,5.8c-1.5,2.1-2.6,4.6-3.1,7.4s-0.4,4.3,0.5,4.4l1.4,0.1
		l0.7,0.5l0.7,0.5l-0.2,0.2l-0.3,0.1l-0.3,0.1L270,161l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.1-0.8l0-0.8
		l-0.8,0l-0.8,0.1l0.1,0.3l0.2,0.2l0.2,0.9l0.2,0.9l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2L268,165l-0.2-0.2l-0.1-0.3L267,164l-0.7-0.5
		l-1.7-1.4c-1.2-0.9-1.6-1.6-1.2-2.2c0.4-0.6,0.3-1-0.2-1.1l-0.8-0.2l-0.2,0.2L262,159l-0.3,0.1c-0.1,0.1-0.6,0.7-1.3,1.8
		c-0.5,0.7-0.9,1.1-1.3,1.2c-0.1,0-0.2,0.1-0.4,0.1c-0.1,0-0.1,0-0.2,0c-0.5-0.3-1.6,0.8-3.5,3.1c-0.4,0.5-0.7,0.9-1.1,1.3
		c-0.4,0.5-0.9,1.1-1.3,1.5c-0.3,0.3-0.5,0.6-0.7,0.7c-0.1,0.1-0.2,0.1-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
		c-0.4,0.3-0.6,1.1-0.6,2.1c0,1.1,0.6,2,1.7,2.6c1.1,0.6,1.8,2.1,2.1,4.5c0.3,2.3,0.8,3.5,1.3,3.7c0.5,0.1,0.7,0.4,0.6,0.9
		c-0.1,0.4,0.1,0.7,0.5,0.9c0.1,0.1,0.3,0.2,0.5,0.2c0.3,0.1,0.6,0.4,1,0.7c0.2,0.1,0.3,0.3,0.5,0.5c0.5,0.5,1.1,1.3,1.8,2.2
		L263.2,190.3z"/>
	<path class="cl7" d="M464.3,143.5l-0.5-0.1c-0.1,0-0.2,0-0.3-0.1c-0.8-0.2-1.6-0.3-2.5-0.5L464.3,143.5z"/>
	<path class="cl7" d="M266.5,194.2l-0.7-0.5l-0.7-0.5l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3
		l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-2.2-2.9c-0.7-0.9-1.3-1.6-1.8-2.2c0.5,0.5,1.1,1.3,1.8,2.2l2.2,2.9l0.1,0.3l0.2,0.2l0.2,0.2
		l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.7,0.5L266.5,194.2l-0.1,0.4h0h0L266.5,194.2z"/>
	<path class="cl7" d="M260.4,160.9c0.8-1.1,1.2-1.7,1.3-1.8l0.3-0.1l0.3-0.1l0.2-0.2l0.8,0.2c0.5,0.1,0.6,0.5,0.2,1.1
		c-0.4,0.6,0,1.3,1.2,2.2l1.7,1.4l0.7,0.5l0.7,0.5l0.1,0.3l0.2,0.2l0.3-1.6l-0.2-0.2L268,163l-0.1-0.3l-0.2-0.2l-0.2-0.9l-0.2-0.9
		l-0.2-0.2l-0.1-0.3l0.8-0.1l0.8,0l0,0.8l0.1,0.8l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2
		l-0.7-0.5l-0.7-0.5l-1.4-0.1c-0.9-0.1-1.1-1.5-0.5-4.4s1.6-5.3,3.1-7.4c-1.5,2.1-2.5,3.8-3,5c-0.5,1.2-0.8,2.6-0.7,4.1
		c0.1,1.5-0.2,2.9-0.9,4.2c-0.7,1.4-1.1,1.5-1.4,0.4c-0.3-1.1,0.4-0.5-1-2.6C262.3,156.5,261.1,159.8,260.4,160.9
		c-0.5,0.7-0.9,1.1-1.3,1.2C259.4,162,259.9,161.6,260.4,160.9z"/>
	<path class="cl7" d="M258.5,162.1c-0.5-0.3-0.8-0.8-0.9-1.5c-0.1-0.7-0.5-1.1-1-1.2c-0.5-0.1-0.9,0.6-1.2,2
		c-0.3,1.4-0.5,2.5-0.5,3.4c0,0.4-0.4,1-0.9,1.6c0.3-0.4,0.7-0.8,1.1-1.3C256.9,162.9,258,161.9,258.5,162.1z"/>
	<path class="cl7" d="M256.7,182.9c0.1-0.5-0.1-0.8-0.6-0.9c-0.5-0.1-0.9-1.3-1.3-3.7c-0.3-2.4-1-3.9-2.1-4.5
		c-1.1-0.7-1.7-1.5-1.7-2.6c0-1.1,0.2-1.8,0.6-2.1c0,0,0,0,0,0c0,0,0,0,0,0c-0.4,0.3-0.6,1.1-0.6,2.1c0,1.1,0.6,2,1.7,2.6
		c1.1,0.6,1.8,2.1,2.1,4.5c0.3,2.3,0.8,3.5,1.3,3.7C256.6,182.1,256.8,182.4,256.7,182.9c-0.1,0.4,0.1,0.7,0.5,0.9
		C256.7,183.6,256.6,183.3,256.7,182.9z"/>
	<path class="cl7" d="M252.6,168.1c-0.3,0.3-0.5,0.6-0.7,0.7C252.1,168.7,252.3,168.4,252.6,168.1z"/>
	<path class="cl7" d="M251.7,169c0.1,0,0.1-0.1,0.2-0.2C251.8,168.9,251.8,169,251.7,169z"/>
	<path class="cl5" d="M155.6,170.9c11.3,10,19.8,17.4,25.7,22.2c5.9,4.8,13.5,10.3,22.7,16.5l25.2,15.1c7.1,3.4,13.4,5.8,18.7,7.1
		l8.1,1.8l0.1-0.4l0.2-0.2l0.3-0.1l0.6-1.1l0.6-1.1l0.3-0.1l0.2-0.2l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-6.9-1.8
		c-4.6-1.2-9.7-2.8-15.2-4.7l-8.3-2.9l1.1-0.8c0.8-0.5,1.4-2.3,1-2.4c-0.5-0.1-0.6-2-1.3-2.5c0,0,0,0,0,0c-0.7-0.5-0.3-1,1.1-1.5
		c1.5-0.5,1.8-0.9,1.1-1.2c-0.2-0.1-0.4-0.1-0.5-0.2c-0.1-0.1-0.2-0.1-0.3-0.2c-0.2-0.2-0.3-0.5-0.2-0.8c0.1-0.5,0.4-0.8,1-0.8
		l0.8-0.1l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l-3.5-0.7c-0.4-0.1-0.7-0.1-1-0.2
		c-0.4-0.1-0.8-0.1-1.1-0.2c-1-0.2-1.9-0.3-2.7-0.3c-0.1,0-0.2,0-0.3,0c-0.3,0-0.5,0-0.7,0l-2.3-0.1l-0.1,0l-0.7-0.5l-0.7-0.5
		l-0.1-0.3l-0.2-0.2l0.5-2.3l0.2,0.2l0.1,0.3l1.6,0.3l0.9-0.2l0.9-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1
		l0.2-0.2l4.9-0.2c3.3-0.1,7,0,11.4,0.5c4.4,0.5,6.7,0.5,7,0c0.2-0.5,2.1-0.4,5.7,0.4l5.4,1.1l0.4-1.1l0.5-1.1l0.3-0.1l0.2-0.2
		l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2
		l-0.2-0.9l-0.2-0.9l-0.2-0.2l-0.1-0.3l-4.2-3.3c-2.8-2.2-4.2-3.4-4.1-3.5l0-0.2l-7.5-3c-5-1.9-8.6-3.8-11-5.6
		c-2.3-1.8-4.8-3.4-7.5-4.8c-2.7-1.4-5.2-2.9-7.5-4.8c-2.3-1.8-4.1-3-5.3-3.7c-1.2-0.7-2.2-1.9-2.9-3.8c-0.7-1.9-1.8-3.6-3.4-5
		s-3.6-2.7-6.1-3.9c-2.5-1.1-4.4-3-5.7-5.5c-1.4-2.6-2.4-4.2-3-4.9c-0.7-0.7-2-1.5-3.9-2.4c-2-0.9-3.2-1.8-3.7-2.6
		c-0.5-0.8-0.9-2.2-1-4.4c-0.1-2.2-17.4-27.3-20.2-29.3c-2.8-2.1-4.9-4.6-6.4-7.6c-1.4-3-2.8-5.8-4.2-8.5c-0.1-0.2-0.3-0.5-0.5-0.8
		c-0.3-0.5-0.7-1.1-1.2-1.7c-2-2.7-5.4-6.2-10-10.7c-1.5,1.7-12.7,22.3-27.2,55.1C112.3,132.8,144.3,160.9,155.6,170.9z"/>
	<path class="cl8" d="M460.8,163.2l-0.2,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2
		c-0.1,0.1-0.4,0.1-0.8,0.1c0,0,0,0,0,0c-0.1,0-0.3,0-0.5,0c-0.1,0-0.2,0-0.3-0.1c-0.3-0.1-0.6-0.2-1-0.5c-0.3-0.3-0.7-0.6-1.1-1.1
		c-0.2-0.3-0.5-0.5-0.9-0.7c-0.3-0.2-0.8-0.4-1.2-0.6c-0.9-0.3-2.1-0.6-3.6-0.8c-0.4,0-0.7-0.1-1.1-0.1c-0.6-0.1-1.2-0.1-1.8-0.2
		s-1.1-0.2-1.7-0.4c-0.2-0.1-0.4-0.1-0.6-0.2c-0.5-0.1-1-0.3-1.5-0.5c-0.3-0.1-0.6-0.2-0.8-0.3c-0.4-0.2-0.7-0.3-1.1-0.5
		c-0.5-0.3-1-0.5-1.4-0.8c-0.2-0.1-0.3-0.2-0.5-0.3c-0.5-0.3-1.1-0.4-1.8-0.6c-0.3-0.1-0.7-0.1-1-0.2c-0.3,0-0.5-0.1-0.8-0.1
		c-0.4,0-0.8,0-1.1,0c-0.2,0-0.4,0-0.6,0c-1.1,0-1.8,0.1-1.9,0.1c-0.1,0.1-1.1,0.4-2.8,0.9l-2.6,0.7h0l-1.6-0.3l-0.1-0.3l-0.2-0.2
		c0,0-4.2,0.6-4.4,1.9c-0.3,1.3-0.8,2-1.5,2.1c-0.7,0.1-1.1,0.5-1.2,1c-0.1,0.5-0.8,0.7-2.1,0.5c0,0,0,0-0.1,0c-0.3,0-0.7,0-1,0
		c-1,0-2.2,0.2-3.3,0.4c-1.5,0.3-3.7,0.6-6.6,0.8c-2.8,0.2-4.3,0.6-4.4,1.1c0,0.2-0.2,0.3-0.5,0.4c-0.1,0-0.2,0-0.4,0
		c-0.1,0-0.3,0-0.4,0c-0.5-0.1-1.1-0.2-1.9-0.4c-1-0.3-2-0.4-2.9-0.5s-1.8,0.1-2.7,0.3c-1.7,0.5-2.8,1-3.2,1.6
		c-0.4,0.6-1.6,1.2-3.6,2c-2.1,0.8-3.9,1.5-5.6,1.9c-0.9,0.2-1.8,0.4-2.7,0.4c-1,0-2,0-3.1-0.2c-2.2-0.4-3.9-0.8-5.1-1.3
		c-0.5-0.2-1-0.4-1.3-0.4c-0.3,0-0.5,0.1-0.5,0.4c0,0,0,0.1,0,0.1c-0.2,0.4-1.8,0.1-4.6-0.9c-3-1-5.4-1.3-7.2-1
		c-1.8,0.3-3,0.4-3.5,0.2c-0.5-0.1-2-0.2-4.5-0.3c-2.6-0.1-6.1,0.6-10.6,2.2c0,0,0,0,0,0c-4.5,1.7-6.6,2.7-6.3,3
		c0.4,0.3,0.4,0.8,0.2,1.3c-0.3,0.5-1.4,1.2-3.3,2.1c-1.9,1-3.1,2.7-3.7,5.3c-0.5,2.6-1.7,3.6-3.4,2.9c-1.8-0.6-2.7-0.7-2.8-0.2
		s0.3,1.2,1.2,2l1.3,1.3l-0.9,0.2l-0.9,0.2h0h0l-0.8-0.2L315,188c-0.1,0-0.3-0.1-0.5-0.1c-0.3-0.1-0.7-0.1-1.1-0.2
		c-1.2-0.2-2.8-0.3-4.7-0.5c-0.4,0-0.7,0-1,0c-0.3,0-0.6,0-0.9,0c-0.4,0-0.8,0-1.1,0c-1,0.1-1.5,0.2-1.6,0.5
		c-0.3,0.5-0.8,0.8-1.5,0.9c-0.7,0.1-1.6,1-2.7,2.7c-1.1,1.6-1.4,2.5-1,2.8c0,0,0,0,0,0c0.1,0,0.1,0.1,0.1,0.1
		c0,0.1-0.1,0.1-0.5,0.1c-0.2,0-0.6,0-1,0c-0.2,0-0.4,0-0.7,0s-0.5,0-0.8-0.1c-0.3,0-0.6,0-0.9,0c-0.6,0-1.1,0-1.7,0.1
		c-1.2,0.1-2.5,0.4-3.9,0.7c-0.7,0.2-1.4,0.4-2.2,0.7c-1.9,0.6-4.1,1-6.6,1c-0.8,0-1.7,0-2.5-0.1c-0.2,0-0.4,0-0.5,0
		c-1-0.1-2-0.2-3.1-0.4c-0.1,0-0.2,0-0.3,0l-7.8-1.4l-0.4,0.1l-0.4,0.2l-1.6-0.3l-0.7-0.5l-0.7-0.5l-1.9-0.8
		c-1.2-0.5-3.4-1.3-6.4-2.3l-4.5-1.6l0,0.2c0,0.2,1.3,1.3,4.1,3.5l4.2,3.3l0.1,0.3l0.2,0.2l0.2,0.9l0.2,0.9l0.2,0.2l0.1,0.3l0.1,0.3
		l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l-0.2,0.2l-0.3,0.1l-0.5,1.1l-0.4,1.1
		l-5.4-1.1c-3.6-0.7-5.5-0.9-5.7-0.4c-0.3,0.5-2.6,0.5-7,0c-4.3-0.5-8.1-0.7-11.4-0.5l-4.9,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2
		l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.9,0.2l-0.9,0.2l-1.6-0.3l-0.1-0.3l-0.2-0.2l-0.5,2.3l0.2,0.2h0l0.1,0.3l0.7,0.5l0.7,0.5
		l0.1,0l2.3,0.1c0.2,0,0.5,0,0.7,0c0.1,0,0.2,0,0.3,0c0.8,0.1,1.7,0.2,2.7,0.3c0.4,0.1,0.7,0.1,1.1,0.2c0.3,0.1,0.7,0.1,1,0.2
		l3.5,0.7l0,0l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.8,0.1c-0.5,0-0.9,0.3-1,0.8
		c-0.1,0.3,0,0.5,0.2,0.8c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.3,0.2,0.5,0.2l0,0h0c0.7,0.3,0.4,0.7-1.1,1.2c-1.5,0.5-1.8,1-1.1,1.5
		c0,0,0,0,0,0c0.7,0.6,1.3,1.9,1.9,3.9c0.5,2,5.2,4.4,14.2,7.2l13.5,4.1v0h0l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l-0.2,0.2l-0.3,0.1
		l-0.6,1.1l-0.6,1.1l-0.3,0.1l-0.2,0.2l-0.1,0.4l8.1-0.1c5.4-0.1,9.6-0.2,12.5-0.1c2.9,0.1,5.9-0.7,8.9-2.2
		c3-1.5,13.4-5.3,31.2-11.1c17.8-6,28.4-9.9,32.1-11.9c7.1-3.9,15.4-11,15.4-11c4.5-4.2,7.9-7.1,10.2-8.7c2.4-1.5,6.1-3,11.2-4.3
		s10.3-2.4,10.6-2.5l0.4-0.1l1.2,0.1l1.2,0l11.8-0.4c7.9-0.3,15.5-0.3,23-0.1c7.5,0.2,13.6-0.2,18.4-1.1s12.9-1.8,12.9-1.8l0,0h0
		L460.8,163.2z"/>
	<path class="cl8" d="M280.6,196.6c-0.8,0-1.7,0-2.5-0.1C279,196.6,279.8,196.6,280.6,196.6z"/>
	<path class="cl8" d="M314.5,187.9c-0.3-0.1-0.7-0.1-1.1-0.2C313.8,187.8,314.2,187.9,314.5,187.9z"/>
	<path class="cl8" d="M439,157.5c0.2,0.1,0.3,0.2,0.5,0.3c0.4,0.3,0.9,0.6,1.4,0.8c-0.5-0.3-1-0.5-1.4-0.8
		C439.4,157.7,439.2,157.6,439,157.5z"/>
	<path class="cl8" d="M454.4,162.1c-0.3-0.2-0.8-0.4-1.2-0.6C453.7,161.7,454.1,161.9,454.4,162.1z"/>
	<path class="cl8" d="M455.3,162.8c-0.2-0.3-0.5-0.5-0.9-0.7C454.8,162.3,455.1,162.6,455.3,162.8c0.4,0.5,0.8,0.8,1.1,1.1
		C456.1,163.7,455.7,163.3,455.3,162.8z"/>
	<path class="cl8" d="M307.6,187.2c0.3,0,0.7,0,1,0c1.9,0.1,3.5,0.3,4.7,0.5c-1.2-0.2-2.8-0.3-4.7-0.5
		C308.3,187.2,308,187.2,307.6,187.2z"/>
	<path class="cl8" d="M298.9,194.2c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0C298.9,194.2,298.9,194.2,298.9,194.2z"/>
	<path class="cl8" d="M298.4,194.3c-0.2,0-0.6,0-1,0C297.9,194.3,298.2,194.3,298.4,194.3z"/>
	<path class="cl8" d="M295,194.1c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0.1,0.8,0.1c-0.3,0-0.5,0-0.8-0.1C295.7,194.2,295.4,194.2,295,194.1z
		"/>
	<polygon class="cl8" points="316.9,188.4 316.9,188.4 316.1,188.2 	"/>
	<path class="cl8" d="M414.4,163c0.3,0,0.7,0,1,0c0,0,0,0,0.1,0c0,0,0,0-0.1,0C415.1,163,414.7,163,414.4,163z"/>
	<path class="cl8" d="M363.4,167.1c-2-0.6-6.7-0.7-9.6-1.3c-2.8-0.6-4.1,1.5-7.1,1.7c-3,0.2-6.8,1.1-11.3,2.7
		c4.5-1.6,8.1-2.3,10.6-2.2c2.5,0.1,4,0.2,4.5,0.3c0.5,0.1,1.7,0,3.5-0.2c1.8-0.3,4.2,0,7.2,1c2.9,1,4.4,1.3,4.6,0.9
		C365.8,169.8,365.3,167.5,363.4,167.1z"/>
	<path class="cl8" d="M393.8,164.9c0.9,0,1.9,0.2,2.9,0.5c0.8,0.2,1.4,0.3,1.9,0.4c-0.5-0.1-1.1-0.2-1.9-0.4
		C395.7,165.1,394.8,164.9,393.8,164.9z"/>
	<path class="cl8" d="M367.8,169.7c-0.5-0.2-1-0.4-1.3-0.4C366.8,169.4,367.2,169.5,367.8,169.7c1.1,0.5,2.8,0.9,5.1,1.3
		c1.1,0.1,2.1,0.2,3.1,0.2c-1,0-2,0-3.1-0.2C370.6,170.6,368.9,170.2,367.8,169.7z"/>
	<polygon class="cl8" points="424.8,157.7 424.6,157.5 424.8,157.7 424.9,158 426.5,158.3 424.9,158 	"/>
	<path class="cl8" d="M274.5,196.1c-0.1,0-0.2,0-0.3,0l-7.8-1.4h0l7.8,1.4C274.3,196.1,274.4,196.1,274.5,196.1z"/>
	<path class="cl8" d="M244.1,225.4c-9-2.8-13.7-5.2-14.2-7.2c-0.6-2-1.2-3.3-1.9-3.9c0.7,0.6,0.9,2.4,1.3,2.5c0.5,0.1-0.2,1.9-1,2.4
		l-1.1,0.8l8.3,2.9c5.5,1.9,10.6,3.5,15.2,4.7l6.9,1.8v0L244.1,225.4z"/>
	<path class="cl8" d="M229.7,211.4c0.1,0.1,0.3,0.2,0.5,0.2l0,0C230,211.5,229.8,211.5,229.7,211.4z"/>
	<path class="cl8" d="M228.4,207.4c0.3,0.1,0.7,0.1,1,0.2l3.5,0.7l-3.5-0.7C229,207.6,228.7,207.5,228.4,207.4z"/>
	<path class="cl8" d="M221.2,206.7l2.3,0.1c0.2,0,0.5,0,0.7,0c-0.3,0-0.5,0-0.7,0L221.2,206.7z"/>
	<path class="cl8" d="M227.2,207.2c-1-0.2-1.9-0.3-2.7-0.3C225.3,207,226.2,207.1,227.2,207.2z"/>
	<path class="cl8" d="M224.5,206.9c-0.1,0-0.2,0-0.3,0C224.3,206.9,224.4,206.9,224.5,206.9z"/>
	<path class="cl9" d="M278.5,123.6l-0.8,0c-0.3,0-0.4,0.1-0.4,0.2c0,0,0,0,0,0.1c0,0.1,0.1,0.3,0.4,0.5c0.6,0.6,0.5,1.3-0.2,2.2
		c-0.7,0.9-1.3,2.2-1.8,3.7l-0.6,2.3l1.1,0.1l0.1,0l1.2,0l0.3,0.6c0,0.1,0.1,0.2,0.2,0.3c0.3,0.3,0.8,0.6,1.6,0.8
		c1,0.4,1.9,0.4,2.8,0c0.9-0.4,1.5-0.5,1.7-0.5c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.6-0.1c0.1,0,0.3-0.1,0.4-0.1l0.9-0.2l2,0.2l2,0.2
		l4.2-1.6c2.7-1.1,4.3-1.8,4.5-2.3c0.1-0.2,0.5-0.5,1.1-0.7c0.2-0.1,0.3-0.1,0.5-0.2c0.6-0.1,1.3-0.3,2.2-0.4c1-0.1,1.9-0.3,2.5-0.5
		c0.3-0.1,0.6-0.2,0.8-0.3s0.4-0.2,0.5-0.3c0.1-0.1,0.1-0.1,0.1-0.2c0.2-0.5,1.5-1,3.9-1.6c0.3-0.1,0.6-0.1,0.9-0.2
		c0.8-0.2,1.6-0.5,2.2-0.7c0.4-0.2,0.8-0.3,1.1-0.5c0.2-0.1,0.3-0.2,0.4-0.3c0.1-0.1,0.3-0.2,0.4-0.3c0.1-0.1,0.2-0.2,0.3-0.2
		c0.3-0.1,0.6-0.2,0.9-0.3c0.2,0,0.4,0,0.6,0c0.2,0,0.4,0,0.7,0c0.5,0.1,1,0.2,1.6,0.3c0.3,0.1,0.6,0.2,0.9,0.3s0.6,0.2,0.9,0.3
		c1.2,0.3,2.1,0.5,2.9,0.6c0.2,0,0.4,0,0.5,0c0.3,0,0.6,0,0.8-0.1c0.9-0.3,1.3-0.6,1.4-1.2c0-0.1,0.1-0.2,0.2-0.3
		c0.1-0.1,0.3-0.1,0.5-0.2c0.3-0.1,0.6-0.1,1-0.2s0.9,0,1.5,0c0.3,0,0.6,0,0.9,0c0.3,0,0.6,0,0.9,0.1c0.6,0,1.1,0.1,1.6,0.1
		c1.2,0,1.9,0,2.3-0.1c0.1,0,0.3-0.1,0.5-0.1c0.2,0,0.4,0,0.6,0c0.5,0,1,0.1,1.7,0.2l1.9,0.4l-0.2,0.2c0,0-0.1,0-0.1,0.1
		c-0.1,0.1-0.1,0.2-0.2,0.4c0,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2c0.2,0.4,0.7,0.7,1.6,0.9l1.7,0.6l0.1,0.3
		c0.1,0.1-0.1,0.2-0.6,0.5c-0.1,0.1-0.3,0.2-0.5,0.2c-0.2,0.1-0.4,0.2-0.7,0.3l-1.9,0.8l0,0.8l0.1,0.8l0.2,0.2l0.1,0.3l18.7,3.4
		c8.6,1.6,14.7,2.6,18.5,3.2c1.7,0.3,3,0.4,3.7,0.5c0.3,0,0.7,0.1,1.1,0.1c0.7,0,1.6,0.1,2.6,0.1c0.7,0,1.5,0,2.4,0
		c0.4,0,0.9,0,1.4,0s1,0,1.5,0c1.6,0,3.3,0,5.2,0c2.6,0,5.4-0.1,8.7-0.1c6.4-0.1,11.2-0.2,14.5-0.2c0.6,0,1.2,0,1.7,0
		c0.5,0,0.9,0,1.3,0c0.5,0,0.9,0,1.2,0c0.4,0,0.6,0,0.7,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0,0.9,0.1
		c0.2,0,0.4,0.1,0.7,0.1c0.3,0,0.7,0.1,1.1,0.2c1.2,0.2,2.7,0.4,4.5,0.7c-1.4-3.3,1-5,1-5c-6.2-19.3,6.8-11.4,6.8-11.4h0
		c1.6,0.2,3,0.4,4.2,0.6c0.6,0.1,1.2,0.2,1.7,0.3c0.5,0.1,1,0.2,1.4,0.2c0.6,0.1,1,0.2,1.4,0.3l2.3,0.5l-0.7-0.4
		c-0.1-0.1-0.2-0.1-0.3-0.2c0-0.1-0.1-0.1,0-0.2c0-0.3,0.2-0.6,0.6-1.1c0.5-0.6,1.2-1,1.9-1.3c0.3-0.1,0.5-0.2,0.8-0.3
		c1.1-0.3,1.2-0.7,0.3-1.3c-0.9-0.6-1.4-1.3-1.3-2.1c0-0.8-0.1-1.3-0.2-1.4l-0.1-0.3l-0.1-0.3l-0.2-0.2l-0.1-0.8l0-0.8l0.8,0
		l0.8-0.1l5.1,0.6c0.4,0.1,0.8,0.1,1.2,0.2c1,0.1,2,0.3,2.8,0.4c1.4,0.2,2.5,0.4,3.4,0.6l2.3,0.5l-0.5-0.7c-0.1-0.2-0.3-0.4-0.4-0.6
		c-0.1-0.1-0.1-0.1-0.1-0.2s-0.1-0.1-0.1-0.1l-0.1-0.2l0-0.1l0-0.1l-0.1-0.2l-0.2-0.2l-0.2-0.2l-0.1-0.3l1.2-0.1l1.2-0.1l0.7-0.4
		c0.4-0.3,0.6-0.8,0.6-1.3l0-0.8l-0.8-0.2l-11.3-2.1c-7.5-1.4-12.7-2.4-15.6-2.9c-2.8-0.6-8.9-2.8-18.1-6.5
		c-9.2-3.8-16.5-6.2-21.9-7.3c-5.4-1.1-27.5,3.7-66.4,14.4l-58.2,16.2l2.3,0.5L278.5,123.6z"/>
	<path class="cl9" d="M423.7,137.7c0.2,0,0.5,0,0.9,0.1C424.2,137.7,423.9,137.7,423.7,137.7z"/>
	<path class="cl9" d="M436.7,139.8l0.4,0.1l0.3,0.1C437.2,139.9,437,139.9,436.7,139.8z"/>
	<path class="cl9" d="M437.2,139.9l0.5,0.1c-0.1,0-0.1,0-0.2,0L437.2,139.9z"/>
	<path class="cl9" d="M284.9,133.9c-0.2,0.1-0.5,0.1-0.6,0.1C284.4,134,284.6,134,284.9,133.9z"/>
	<polygon class="cl9" points="275,132.6 276.2,132.6 275,132.6 	"/>
	<path class="cl9" d="M423.4,137.7c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c0,0,0.1,0,0.1,0C423.3,137.7,423.3,137.7,423.4,137.7z"/>
	<path class="cl9" d="M305.1,128.5c-0.6,0.2-1.5,0.3-2.5,0.5c-0.9,0.1-1.6,0.3-2.2,0.4c0.6-0.1,1.3-0.3,2.2-0.4
		C303.7,128.8,304.5,128.6,305.1,128.5z"/>
	<path class="cl9" d="M305.1,128.5c0.3-0.1,0.6-0.2,0.8-0.3C305.7,128.3,305.4,128.4,305.1,128.5z"/>
	<path class="cl9" d="M298.8,130.2c0.1-0.2,0.5-0.5,1.1-0.7C299.3,129.7,298.9,129.9,298.8,130.2c-0.3,0.5-1.8,1.3-4.5,2.3l-4.2,1.6
		l4.2-1.6C297,131.4,298.5,130.6,298.8,130.2z"/>
	<polygon class="cl9" points="340,130.9 339.9,130.7 339.7,130.5 339.9,130.7 	"/>
	<path class="cl9" d="M315.7,123.8c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.2-0.4,0.3c0.1-0.1,0.3-0.2,0.4-0.3
		C315.5,123.9,315.6,123.9,315.7,123.8z"/>
	<path class="cl9" d="M326.9,123.8c0-0.1,0.1-0.2,0.2-0.3C327,123.6,326.9,123.7,326.9,123.8c-0.1,0.5-0.6,0.9-1.4,1.2
		c-0.2,0.1-0.5,0.1-0.8,0.1c0.3,0,0.6,0,0.8-0.1C326.3,124.7,326.8,124.3,326.9,123.8z"/>
	<path class="cl9" d="M327.6,123.4c0.3-0.1,0.6-0.1,1-0.2C328.2,123.2,327.9,123.3,327.6,123.4z"/>
	<path class="cl9" d="M328.6,123.2c0.4,0,0.9,0,1.5,0C329.6,123.2,329.1,123.2,328.6,123.2z"/>
	<path class="cl9" d="M419.9,137.8c0.5,0,0.9,0,1.3,0C420.9,137.8,420.4,137.8,419.9,137.8z"/>
	<path class="cl5" d="M561.5,205.1C561.5,205.1,561.5,205.1,561.5,205.1c-0.5-0.1-1-0.2-1.6-0.3c-7-1.5-12.2-3.7-15.8-5.7
		c-0.4-0.2-2.5-1.3-4.7-2.6c-1.6-0.9-3-1.7-4.3-2.7c-0.2-0.2-0.4-0.3-0.6-0.5c0,0,0,0,0,0c-2.5-2.1-6.7-4.7-12.5-7.8
		s-9.3-5.1-10.4-6.2c-1.1-1-1.7-1.9-1.6-2.6c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.6-0.2-1.5-0.2-2.9c0-1.3-0.1-2.6-0.2-3.8
		c-0.2-1.3-1.9-3.3-5-6.1c-3.2-2.8-6-4.5-8.3-4.9c-0.3-0.1-0.6-0.1-0.8-0.1c-0.3,0-0.5,0-0.8-0.1c-0.4,0-0.7,0-1,0.1
		c-0.9,0.2-1.6,0.6-2,1.4c-0.7,1.4-1.6,2.2-2.9,2.5c-0.2,0.1-0.4,0.1-0.6,0.1c-0.2,0-0.3,0-0.5,0c-0.5-0.1-0.7-0.3-0.6-0.8
		c0.2-0.8-0.8-1.4-2.8-2c0,0,1.7,8.9-3.3,15.6c-4.9,6.7-15.4,4.5-15.4,4.5l13,3.5c8.3,1.7,14.1,3.6,17.6,5.8c3.5,2.2,6.1,4,7.8,5.3
		c1.8,1.3,4.2,2.3,7.3,3.1l4.6,1.1l5.8,1.3c3.8,0.9,8.9,3.6,15.1,7.9c6.3,4.4,11.7,9.2,16.4,14.4c4.8,5.1,8.1,8.3,10,9.5
		c1.9,1.2,5,2.1,9.1,2.7s8.3,0.3,8.8,0.2l0.9-0.2c0,0,4.9-1.8,4.5-4.3c-0.2-0.8-0.9-1.4-0.9-1.4l-3-4.4c-1.7-2.6-6.8-11-8.4-13.7
		c0,0-0.1,0-0.1,0C573.2,207.8,569.3,206.6,561.5,205.1z"/>
	<path class="cl5" d="M482.9,158.2l-1.7,0C481.9,158.2,482.5,158.2,482.9,158.2z"/>
	<path class="cl6" d="M435.7,139.7c0,0,0.1,0,0.1,0c0.2,0,0.5,0.1,0.7,0.1c0.1,0,0.2,0,0.2,0L435.7,139.7z"/>
	<path class="cl6" d="M438.1,140.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0L438.1,140.1z"/>
	<path class="cl6" d="M459.5,158.6c0,0,0.1,0,0.2,0L459.5,158.6z"/>
	<path class="cl6" d="M468.9,110.9l0.4,0.1l-0.3,1.6l-0.8,0l-0.8,0.1l-1.2,0.1l-1.2,0.1l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.2l0,0.1
		l0,0.1l0.1,0.2c0,0,0.1,0.1,0.1,0.1s0.1,0.1,0.1,0.2c0.1,0.2,0.2,0.4,0.4,0.6l0.5,0.7h0l-2.3-0.5c-0.8-0.2-2-0.4-3.4-0.6
		c-0.8-0.1-1.8-0.3-2.8-0.4c-0.4-0.1-0.8-0.1-1.2-0.2l-5.1-0.6l-0.8,0.1l-0.8,0l0,0.8l0.1,0.8l0.2,0.2l0.1,0.3l0.1,0.3
		c0.1,0.1,0.5,0.4,1.1,0.8c0.6,0.4,0.8,1,0.6,1.7s0,1.3,0.5,1.5c0.5,0.3,0.2,0.5-1,0.8c-0.3,0.1-0.6,0.2-0.8,0.3
		c-0.8,0.3-1.4,0.8-1.9,1.3c-0.4,0.5-0.6,0.8-0.6,1.1c0,0.1,0,0.2,0,0.2c0,0.1,0.1,0.2,0.3,0.2l0.7,0.4l-2.3-0.5
		c-0.4-0.1-0.9-0.2-1.4-0.3c-0.4-0.1-0.9-0.1-1.4-0.2c-0.5-0.1-1.1-0.2-1.7-0.3c-1.2-0.2-2.6-0.4-4.2-0.6l-6.3-0.9l1.5,0.7
		c1,0.5,1.6,1.4,1.9,2.6c0.3,1.2,0,1.8-0.7,1.6c-0.8-0.2-1.4,0.3-1.9,1.4c-0.5,1.1-0.9,3.1-1.2,5.9l-0.4,4.1l3.5,0.9l3.4,0.9
		l-0.1,0.4l0,0c0,0,0,0,0,0l0,0l9.5,1c0.1,0,0.2,0,0.2,0c2.2,0.2,4.3,0.4,6.2,0.7c0.2,0,0.4,0,0.5,0.1c1.2,0.2,2.4,0.3,3.5,0.5
		c0.2,0,0.4,0.1,0.6,0.1c0.7,0.1,1.4,0.2,2,0.3l0.1,0l0.2,0c0.9,0.2,1.7,0.3,2.5,0.5c0.1,0,0.2,0,0.3,0.1l6.6,1.3l-0.2,0.2
		c9.9,0.8,13.6,13.3,13.6,13.3h0c2,0.5,3,1.2,2.8,2c-0.1,0.5,0.1,0.8,0.6,0.8c0.1,0,0.3,0,0.5,0c0.2,0,0.4,0,0.6-0.1
		c1.3-0.3,2.3-1.1,2.9-2.5c0.4-0.7,1-1.2,2-1.4c0.3-0.1,0.6-0.1,1-0.1c0.2,0,0.5,0,0.8,0.1s0.5,0.1,0.8,0.1c2.3,0.5,5.1,2.1,8.3,4.9
		c3.2,2.8,4.9,4.8,5,6.1c0.1,1.2,0.2,2.5,0.2,3.8s0.1,2.3,0.2,2.9c0.2,0.6,0.2,1.2,0.3,1.8c0,0.7,0.5,1.6,1.6,2.6
		c1.1,1,4.6,3.1,10.4,6.2c5.8,3.1,10,5.7,12.5,7.8c0,0,0,0,0,0c0.2,0.2,0.4,0.3,0.6,0.5c1.2,0.9,2.8,1.8,4.3,2.7
		c1.5,0.8,3,1.6,4.7,2.6c0.7,0.4,8.5,4,15.8,5.7c0.5,0.1,1,0.2,1.6,0.3c0,0,0,0,0,0c7.8,1.5,11.2,2.3,11.9,3.2
		c0.1,0.1,0.2,0.4,0.5,0.8c1,0.2,3.7-1.5,6.9-3.5c3.4-2,5.2-3.2,5.6-3.7l0.5-0.7c0,0,0.3-0.4,0.5-1.1c0.2-0.7-0.4-1.4-0.4-1.4
		c-0.5-0.3-1.4-1.1-2.7-2.4l-15.6-16.4c-8-6.9-14.2-12.1-18.6-15.7s-10.1-9.2-17.2-16.8s-11.9-12.9-14.5-15.9s-5.4-5.2-8.3-6.7
		c-2.9-1.6-17.5-6.5-27.1-9.8l-14.3-5l0.1,0.4L468.9,110.9z"/>
	<path class="cl6" d="M442.8,123c0.6,0.1,1.2,0.2,1.7,0.3C444,123.2,443.4,123.1,442.8,123z"/>
	<path class="cl6" d="M487.7,161c-0.2,0-0.3,0-0.5,0C487.4,161,487.5,161,487.7,161z"/>
	<path class="cl6" d="M432.4,139.1c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0L432.4,139.1z"/>
	<path class="cl6" d="M433.3,139.2C433.4,139.2,433.4,139.2,433.3,139.2c0.3,0.1,0.5,0.1,0.7,0.1L433.3,139.2z"/>
	<path class="cl6" d="M433.4,139.2l0.8,0.2l-0.2,0C433.8,139.3,433.6,139.3,433.4,139.2z"/>
	<path class="cl6" d="M464.3,143.5L464.3,143.5c0,0,0.3,0.1,0.7,0.2c0.1,0,0.1,0,0.2,0l0.9,0.2c0.2,0,0.3,0.1,0.5,0.1
		c0.3,0.1,0.7,0.2,1.1,0.3c0,0,0.1,0,0.1,0l2,0.5c0.2,0,0.4,0.1,0.5,0.1h0l0.2-0.2l-6.6-1.3c-0.1,0-0.2,0-0.3-0.1
		c0.1,0,0.2,0,0.3,0.1L464.3,143.5z"/>
	<path class="cl6" d="M447.8,141.1c0.1,0,0.2,0,0.2,0C447.9,141.1,447.9,141.1,447.8,141.1l-9.5-1l0,0c0,0,0,0,0,0L447.8,141.1z"/>
	<path class="cl6" d="M465.5,113.9l0.1,0.2c0,0,0.1,0.1,0.1,0.1c0-0.1-0.1-0.1-0.1-0.1L465.5,113.9z"/>
	<polygon class="cl6" points="466.2,115 466.7,115.7 466.7,115.7 	"/>
	<polygon class="cl6" points="450.2,114.3 450.3,115.1 450.5,115.3 450.3,115.1 	"/>
	<path class="cl6" d="M452.9,119.9c-0.5-0.2-0.7-0.7-0.5-1.5s0-1.4-0.6-1.7c-0.6-0.4-1-0.7-1.1-0.8c0.1,0.1,0.2,0.6,0.2,1.4
		c-0.1,0.8,0.4,1.5,1.3,2.1c1,0.6,0.9,1-0.3,1.3C453.1,120.4,453.4,120.1,452.9,119.9z"/>
	<polygon class="cl6" points="465.2,113.3 465.4,113.5 465.5,113.7 465.4,113.5 	"/>
	<polygon class="cl6" points="464.9,112.9 465,113.1 465.2,113.3 465,113.1 	"/>
	<path class="cl6" d="M451.1,121c-0.8,0.3-1.4,0.8-1.9,1.3c-0.4,0.5-0.6,0.8-0.6,1.1c0-0.3,0.2-0.6,0.6-1.1
		C449.7,121.8,450.4,121.3,451.1,121z"/>
	<path class="cl6" d="M432.4,139.1l0.3,0.1l0.7,0.1l0.7,0.1c0.5,0.1,0.9,0.2,1.3,0.2l0.2,0l0.2,0l1,0.2c0.3,0.1,0.5,0.1,0.8,0.1
		l0.4,0.1c0.1,0,0.1,0,0.2,0l0.1,0l0,0l0,0l0.1-0.4l-3.4-0.9l-3.5-0.9l0.4-4.1c0.3-2.8,0.7-4.8,1.2-5.9c0.5-1.1,1.1-1.5,1.9-1.4
		c0.8,0.2,1-0.4,0.7-1.6c-0.3-1.3-0.9-2.2-1.9-2.6l-1.5-0.7l6.3,0.9c0,0-13-7.9-6.8,11.4c0,0-2.4,1.7-1,5l0.9,0.2
		C432,139,432.2,139,432.4,139.1z"/>
	<path class="cl6" d="M435.4,139.6L435.4,139.6L435.4,139.6C435.4,139.6,435.4,139.6,435.4,139.6z"/>
	<path class="cl6" d="M437.5,140c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0,0.2,0L437.5,140z"/>
	<path class="cl6" d="M431.8,138.9l-0.9-0.2L431.8,138.9C431.7,138.9,431.7,138.9,431.8,138.9z"/>
	<path class="cl6" d="M437.7,140l0.4,0.1c-0.1,0-0.1,0-0.2,0C437.8,140,437.8,140,437.7,140z"/>
	<path class="cl6" d="M431.7,138.9l0.7,0.1C432.2,139,432,139,431.7,138.9C431.7,138.9,431.7,138.9,431.7,138.9z"/>
	<path class="cl6" d="M434.2,139.4l1.2,0.2c0,0-0.1,0-0.1,0L434.2,139.4z"/>
	<path class="cl6" d="M434,139.4l0.2,0l1.1,0.2C434.9,139.5,434.5,139.4,434,139.4z"/>
	<path class="cl6" d="M468.1,112.1l-0.7,0.4l-1.2,0.1l1.2-0.1l0.8-0.1l0.8,0l0.3-1.6l-0.4-0.1l-0.2-0.4l-0.1-0.4l0,0.8
		C468.7,111.4,468.5,111.8,468.1,112.1z"/>
	<path class="cl6" d="M486.7,160.1c-0.1,0.5,0.1,0.8,0.6,0.8C486.8,160.9,486.6,160.6,486.7,160.1c0.2-0.8-0.8-1.4-2.8-2h0
		C485.9,158.7,486.8,159.4,486.7,160.1z"/>
	<path class="cl6" d="M561.5,205.1C561.5,205.1,561.5,205.1,561.5,205.1C561.5,205.1,561.5,205.1,561.5,205.1
		c7.8,1.5,11.7,2.7,12.2,4c0,0,0.1,0,0.1,0c-0.2-0.4-0.4-0.7-0.5-0.8C572.7,207.4,569.3,206.6,561.5,205.1z"/>
	<path class="cl6" d="M535,193.8c1.3,1,2.7,1.9,4.3,2.7C537.8,195.7,536.2,194.7,535,193.8z"/>
	<path class="cl6" d="M504.1,162.1c3.2,2.8,4.9,4.8,5,6.1c0.1,1.2,0.2,2.5,0.2,3.8c0,1.3,0.1,2.3,0.2,2.9c0.2,0.6,0.2,1.2,0.3,1.8
		c0,0.7,0.5,1.6,1.6,2.6c1.1,1,4.6,3.1,10.4,6.2s10,5.7,12.5,7.8c0,0,0,0,0,0c0,0,0,0,0,0c-2.5-2.1-6.7-4.7-12.5-7.8
		c-5.8-3.1-9.3-5.1-10.4-6.2c-1.1-1-1.7-1.9-1.6-2.6c0-0.7-0.1-1.3-0.3-1.8c-0.2-0.6-0.2-1.5-0.2-2.9s-0.1-2.6-0.2-3.8
		C508.9,166.9,507.3,164.9,504.1,162.1c-3.2-2.8-6-4.5-8.3-4.9c-0.3-0.1-0.6-0.1-0.8-0.1c0.3,0,0.5,0.1,0.8,0.1
		C498.1,157.6,500.9,159.3,504.1,162.1z"/>
	<path class="cl6" d="M544.1,199.1c3.6,2,8.9,4.2,15.8,5.7C552.6,203.1,544.8,199.5,544.1,199.1z"/>
	<polygon class="cl8" points="464.2,170.6 464,170.4 463.9,170.3 464,170.4 	"/>
	<polygon class="cl8" points="470.4,162.7 469.3,162.2 467.8,161.5 469.3,162.2 	"/>
	<polygon class="cl8" points="464.8,159.7 464.5,160 464.2,160.1 464,160.3 463.8,160.5 463.6,160.7 463,161.4 462.5,162
		462.2,162.2 462,162.4 461.8,162.6 461.5,162.7 461.3,162.8 461.1,163 460.9,163.2 460.8,163.2 460.8,163.2 460.9,163.2 461.1,163
		461.3,162.8 461.5,162.7 461.8,162.6 462,162.4 462.2,162.2 462.5,162 463,161.4 463.6,160.7 463.8,160.5 464,160.3 464.2,160.1
		464.5,160 464.8,159.7 465,159.3 465,159.3 465,159.3 	"/>
	<path class="cl8" d="M462.7,159.1C462.8,159.1,462.8,159.1,462.7,159.1l0.4-0.1L462.7,159.1C462.8,159.1,462.8,159.1,462.7,159.1z"
		/>
	<path class="cl8" d="M464.6,158.5c-0.2,0-0.5,0-0.7,0l-0.1,0c-0.2,0.1-0.4,0.2-0.4,0.3l-0.3,0.1l-0.3,0.1c0,0,0,0-0.1,0
		c0,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.4,0c-0.4,0-0.9-0.1-1.5-0.2c-0.3-0.1-0.7-0.1-1.1-0.2l1.3,4.6l0,0l0.2-0.2l0.2-0.2l0.3-0.1
		l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.5-0.7l0.5-0.7l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.3l0.2-0.4v0
		C465,159.3,464.4,159,464.6,158.5z"/>
	<path class="cl8" d="M464.5,160l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.5,0.7l-0.5,0.7l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1
		l-0.3,0.1l-0.2,0.2l-0.2,0.2l0,0l4.3,15.2l0.9-0.6l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l0.9-0.2
		l0.9-0.2l0.8-0.1l0.8,0l0-0.8l-0.1-0.8l-0.2-0.2l-0.1-0.3l-3-1l-3-1l-0.1-0.3l-0.2-0.2l-0.2-0.2l-0.1-0.3l-0.1-0.3l-0.2-0.2
		l-0.1-0.1l-0.1-0.1l-0.1-0.3l0.9-0.2l0.9-0.2l0.2-0.2l0.3-0.1l0.3-0.1l0.2-0.2l2.2-0.8c0.7-0.3,1.4-0.5,1.9-0.6
		c0.3-0.1,0.6-0.1,0.8-0.2s0.5-0.1,0.7-0.1l1.2-0.1l-0.7-0.5l-0.7-0.5l0.9-0.2l0.9-0.2l-1.1-0.5l-1.1-0.4l0.3-1.6l-1.1-0.4l-1.1-0.5
		l-1.5-0.7c-1-0.5-1.7-0.9-2.1-1.4l-0.6-0.8l-0.2,0.4L464.5,160z"/>
	<path class="cl8" d="M480.6,173.8c4.9-6.7,3.3-15.6,3.3-15.6l-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.4,0-1,0-1.7,0
		l-0.5,0c-0.4,0-0.7,0-1.1,0l-0.8,0c-0.5,0-1,0-1.5,0l-1.7,0c-0.3,0-0.7,0-1,0l-1.1,0c-0.6,0-1.1,0-1.7,0l-1.7,0c-0.4,0-0.8,0-1.2,0
		l-1,0c-0.6,0-1.2,0-1.7,0l-0.9,0l-0.2,0.8l0,0l0.6,0.8c0.4,0.5,1.2,0.9,2.1,1.4l1.5,0.7l1.1,0.5l1.1,0.4l-0.3,1.6l1.1,0.4l1.1,0.5
		l-0.9,0.2l-0.9,0.2l0.7,0.5l0.7,0.5l-1.2,0.1c-0.2,0-0.4,0.1-0.7,0.1s-0.5,0.1-0.8,0.2c-0.6,0.2-1.2,0.4-1.9,0.6l-2.2,0.8l-0.2,0.2
		l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.9,0.2l-0.9,0.2l0.1,0.3l0.1,0.1l0.1,0.1l0.2,0.2l0.1,0.3l0.1,0.3l0.2,0.2l0.2,0.2l0.1,0.3l3,1l3,1
		l0.1,0.3l0.2,0.2l0.1,0.8l0,0.8l-0.8,0l-0.8,0.1l-0.9,0.2l-0.9,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1
		l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.5,0.3C465.2,178.4,475.7,180.5,480.6,173.8z"/>
	<path class="cl8" d="M464.6,158.5c-0.1,0.4,0.5,0.8,0.5,0.8l0.2-0.8l-0.5,0C464.7,158.5,464.6,158.5,464.6,158.5z"/>
	<polygon class="cl8" points="466.1,169.1 465.9,169.2 465.6,169.3 465.4,169.5 465.6,169.3 465.9,169.2 466.1,169.1 466.3,168.9
		468.5,168.1 466.3,168.9 	"/>
	<polygon class="cl8" points="463.9,170.3 463.8,170.2 463.7,170 463.8,170.2 	"/>
	<polygon class="cl8" points="466.1,177.7 466.3,177.5 466.6,177.4 466.3,177.5 	"/>
	<polygon class="cl8" points="465.9,177.9 466.1,177.7 465.2,178.4 465.2,178.4 465.7,178 	"/>
	<polygon class="cl8" points="466.6,177.4 466.9,177.3 467.1,177.1 466.9,177.3 	"/>
	<polygon class="cl8" points="471.2,164.6 471.5,163.1 470.4,162.7 471.5,163.1 	"/>
	<path class="cl8" d="M473.2,167.1l-1.2,0.1c-0.2,0-0.4,0.1-0.7,0.1c0.2-0.1,0.5-0.1,0.7-0.1L473.2,167.1l-0.7-0.5l-0.7-0.5l0.7,0.5
		L473.2,167.1z"/>
	<polygon class="cl8" points="471.3,176 471.3,175.2 471.3,174.3 471.3,175.2 	"/>
	<polygon class="cl8" points="469.7,176 468.8,176.3 468,176.5 467.8,176.7 468,176.5 468.8,176.3 469.7,176 470.5,176 471.3,176
		470.5,176 	"/>
	<polygon class="cl8" points="467.1,177.1 467.3,176.9 467.5,176.8 467.3,176.9 	"/>
	<polygon class="cl8" points="464.8,171.6 464.6,171.4 464.4,171.2 464.6,171.4 	"/>
	<polygon class="cl8" points="467.9,172.9 471,173.9 471.1,174.1 471,173.9 467.9,172.9 464.9,171.8 464.8,171.6 464.9,171.8 	"/>
	<path class="cl8" d="M462.1,159.1c0.2,0,0.3,0,0.4,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0l0.3-0.1l0.2-0.4l-0.5,0c-0.2,0-0.4,0-0.6,0
		l-1.7,0l-0.5,0l-0.2,0c-0.1,0-0.2,0-0.2,0c0.4,0.1,0.7,0.1,1.1,0.2C461.2,158.9,461.7,159,462.1,159.1z"/>
	<path class="cl8" d="M462.1,159.1c-0.4,0-0.9-0.1-1.5-0.2C461.2,158.9,461.7,159,462.1,159.1z"/>
	<path class="cl8" d="M459.5,158.6L459.5,158.6c0.4,0.1,0.7,0.1,1.1,0.2C460.3,158.8,459.9,158.7,459.5,158.6z"/>
	<path class="cl8" d="M463.4,158.8c0,0,0.2-0.2,0.4-0.3l-0.5,0l-0.2,0.4L463.4,158.8z"/>
	<path class="cl7" d="M481.8,157.8c-2.1-0.3-5-0.3-8.7-0.2l-7.7,0.2l7.7-0.2C476.8,157.5,479.7,157.5,481.8,157.8z"/>
	<path class="cl7" d="M461.1,142.8L461.1,142.8c-0.1,0-0.2,0-0.2,0l0,0C460.9,142.8,461,142.8,461.1,142.8z"/>
	<path class="cl7" d="M455.7,155.8l1.5-6.3l0.2-0.2l0.2-0.2l0.3-0.1l1.3-1.2c0.2-0.2,0.4-0.4,0.7-0.5c0.8-0.4,1.7-0.6,2.9-0.6h0h0
		c0,0,1.7,0.1,2.6-0.1c1.2-1.5,4.4-1.5,4.4-1.5l0.3-0.1l0.3-0.1c-0.1,0-0.3-0.1-0.5-0.1c-0.6-0.1-1.3-0.3-2-0.5c0,0-0.1,0-0.1,0
		c-0.4-0.1-0.7-0.2-1.1-0.3c-0.2,0-0.3-0.1-0.5-0.1c-0.4-0.1-0.7-0.2-0.9-0.2c-0.1,0-0.1,0-0.2,0l-0.7-0.2l-3.3-0.6
		c-0.1,0-0.2,0-0.2,0l-3.9-0.5l-1.7,14.7l4.3,1.7l-3.6-2L455.7,155.8z"/>
	<path class="cl7" d="M464.9,157.9c-0.2,0.1-0.8,0.4-1.2,0.7l0.1,0c0.2,0,0.5,0,0.7,0c0,0,0-0.1,0-0.1c0.4-0.6,0.8-0.6,0.8-0.6h0
		L464.9,157.9z"/>
	<path class="cl7" d="M473.1,157.6l-7.7,0.2l-0.1,0.7l0.9,0c0.5,0,1.1,0,1.7,0l1,0c0.4,0,0.8,0,1.2,0l1.7,0c0.6,0,1.1,0,1.7,0l1.1,0
		c0.3,0,0.7,0,1,0l1.7,0c0.5,0,1,0,1.5,0l0.8,0c0.4,0,0.8,0,1.1,0l0.5,0l1.7,0l0.5,0c0.1,0,0.2,0,0.2,0c0.1,0,0.2,0,0.2,0
		c-0.6-0.2-1.3-0.3-2.1-0.4C479.7,157.5,476.8,157.5,473.1,157.6z"/>
	<path class="cl7" d="M464.6,158.4C464.6,158.5,464.6,158.5,464.6,158.4c0,0.1,0.1,0.1,0.1,0.1l0.5,0l0.1-0.7
		C465.4,157.8,464.9,157.9,464.6,158.4z"/>
	<path class="cl7" d="M460.9,142.8L460.9,142.8c0,0,0.1,0,0.2,0L460.9,142.8z"/>
	<path class="cl7" d="M469.7,145.1l-0.2,0.2l-1.2,0.1l-1.2,0.1l-0.2,0.2l-0.3,0.1l-0.3,0.1l-0.2,0.2l-0.2,0.2l-0.3,0.1l-0.3,0.1
		l-0.2,0.2l-2.4-0.1h0h0c-1.2,0-2.2,0.1-2.9,0.6c-0.3,0.1-0.5,0.3-0.7,0.5l-1.3,1.2l-0.3,0.1l-0.2,0.2l-0.2,0.2l-1.5,6.3l0.2,0.9
		l3.6,2l0.2,0l0.2,0c0.1,0,0.3,0,0.5,0c0.4,0,1,0,1.7,0c0.2,0,0.4,0,0.6,0l0.5,0l0.2-0.3l0.3-0.7l1.6,0.3l7.7-0.2
		c3.7-0.1,6.6-0.1,8.7,0.2c0.8,0.1,1.5,0.2,2.1,0.4c0,0-3.7-12.5-13.6-13.3L470,145L469.7,145.1z"/>
	<path class="cl7" d="M460,158.6l0.5,0C460.3,158.6,460.1,158.6,460,158.6z"/>
	<polygon class="cl7" points="455.9,156.7 459.5,158.6 459.5,158.6 	"/>
	<path class="cl7" d="M465.2,143.7c0.3,0.1,0.6,0.1,0.9,0.2L465.2,143.7z"/>
	<path class="cl7" d="M464.9,157.9l0.4-0.1h0l-1.6-0.3l-0.3,0.7l-0.2,0.3l0.5,0C464.2,158.3,464.7,157.9,464.9,157.9z"/>
	<path class="cl7" d="M464.3,143.5L464.3,143.5l0.7,0.2C464.6,143.5,464.3,143.5,464.3,143.5z"/>
	<path class="cl7" d="M465.4,146.7c-0.9,0.2-2.6,0.1-2.6,0.1l2.4,0.1L465.4,146.7l0.3-0.1l0.3-0.1l0.2-0.2l0.2-0.2l0.3-0.1l0.3-0.1
		l0.2-0.2l1.2-0.1l1.2-0.1l0.2-0.2C469.7,145.1,466.6,145.2,465.4,146.7z"/>
	<path class="cl7" d="M467.8,144.3c0.7,0.2,1.4,0.4,2,0.5L467.8,144.3z"/>
	<polygon class="cl7" points="470,145 469.7,145.1 470,145 470.3,144.9 470.3,144.9 	"/>
	<polygon class="cl7" points="457.2,149.5 455.7,155.8 455.9,156.7 455.7,155.8 457.2,149.5 457.4,149.3 457.6,149.1 457.4,149.3
		"/>
	<path class="cl7" d="M457.9,149l-0.3,0.1L457.9,149l1.3-1.2c0.2-0.2,0.4-0.4,0.7-0.5c-0.3,0.1-0.5,0.3-0.7,0.5L457.9,149z"/>
	<path class="cl7" d="M483.4,158.2l-0.5,0C483.1,158.2,483.3,158.2,483.4,158.2z"/>
	<path class="cl7" d="M483.9,158.2c0,0-0.1,0-0.2,0L483.9,158.2z"/>
	<path class="cl7" d="M460.5,158.6l1.7,0C461.5,158.6,460.9,158.6,460.5,158.6z"/>
</g>
</svg>

<!-- LOGO ENDE -->





</a>
</div>



<button onClick="javascript:bmenu();" class="burgermenu_field" id="burgermenu_field" >

<span class="burgermenu_line bml_color" id="bml_0"></span>

</button>





</div>

</div>







<div class="bmenueffectholderout">
<div class="bmenueffectholder">

<div class="bmenu_effect" id="bmenueffect"></div>

</div>
</div>



<div class="menubg" id="menubg">


<div class="menubuttoncontent">



  <div class="menuboxleft">

<div class="buttonholder_horizontal">
<div class="smalllinkholder" id="smallinkholdermobile">
<a href="impressum.html" onClick="javascript:bmenu();"class="menupunkte_small" target="_blank">IMPRESSUM</a>
</div>



<div class="iconrow_mobile">

	<!-- facebook
<div class="socialmedia_iconholder">


<svg version="1.1" id="sm_facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
<path d="M599.2,0C266.6,0.3-0.6,268,0,600.3c-1,350.8,294.4,604.8,605.5,599.6c328.2-5.5,594.8-270.4,594.5-600.4
	C1199.8,267.8,931.1-0.3,599.2,0z M596.7,1169.1c-273.5,5.5-566.8-214.3-567.4-569.4C28.6,271.1,292.5,28.3,602.5,29.4
	c315.1,1.2,567.4,256.8,567.2,570.7C1169.5,917.3,914.9,1170.1,596.7,1169.1z"/>
<path d="M631.8,508.5c45.4,0,81.4,0,122.6,0c-5.4,42.2-10.1,79.4-15,118.4c-36.7,1.7-68.9,3.3-106,5c0,104.6,0,206.3,0,312.5
	c-43.7,0-82.4,0-128.6,0c0-103.7,0-206.9,0-311.1c-24.5-2.9-42-5-61.8-7.4c0-38.3,0-74.4,0-114.1c18.4-3.2,37.1-6.5,61.8-10.7
	c0-30.9-0.6-61.6,0.1-92.3c2.5-99.1,53.2-152.9,151.1-157.9c32.4-1.6,65,2.1,100.8,3.5c0,37.9,0,71.4,0,111
	c-23.8,0-45.4-1.5-66.7,0.3c-38.8,3.3-55.4,20.2-57.9,59.3C630.5,450.1,631.8,475.3,631.8,508.5z"/>
</svg>

</div>

-->

<div class="socialmedia_iconholder" onClick="javascript:bmenu();window.open('https://www.instagram.com/cohecean/','_blank');">


  <svg version="1.1" id="sm_instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <path d="M599.9,0C267.6,0.4-0.4,268.7,0,600.4c0.5,331.2,269.9,599.8,601.4,599.6c332.2-0.2,598.7-268,598.6-601.2
  	C1199.8,265.6,933.3-0.4,599.9,0z M601.2,1169.1c-317.4,0-571.8-255.1-570.7-572c1.1-313.1,257-568.5,570-569
  	c313.6-0.4,574,260.7,571.9,573.8C1170.4,915.9,915.3,1169.1,601.2,1169.1z"/>
  <path d="M904.4,457.3c-3.9-87.4-61.4-148.8-149.1-154.4c-100.1-6.4-201.2-6.3-301.4-0.7c-87.2,4.9-149.6,61.7-154.7,143.7
  	c-6.7,105.6-7.4,212.3,0.3,317.7c6.5,90.5,70.9,143,162.1,147.5c45.6,2.3,91.4,0.4,137.1,0.3c47.5,0,95.1,2,142.6-0.4
  	c97.2-5,158.9-61.8,163.3-157.7C909.1,654.8,908.9,555.8,904.4,457.3z M849.5,747.1C846.7,813.1,806.1,851.7,740,854
  	c-89.4,3.2-179.1,4-268.4,0.4c-81.4-3.4-114.3-40.3-119.1-120.6c-0.4-7.3-1-14.6-1-22c-0.1-36.5,0-73.1,0-109.7h1.3
  	c0-43.9-2.1-87.9,0.5-131.6c4.2-70.4,39.9-109.8,109.8-112.7c93.1-3.9,186.5-3.9,279.6,0.1c66.4,2.9,104.1,41.6,107,109.6
  	C853.4,560.5,853.4,654,849.5,747.1z"/>
  <path d="M599.3,448.1c-86.6,1-155.2,70.4-155.7,157.6c-0.5,89.8,68.5,157.5,160.2,157c88.4-0.5,154.8-67.4,154.8-155.9
  	C758.6,516.7,688.7,447,599.3,448.1z M600.4,707.2c-56.4-0.4-100.3-45.4-99.7-102.2c0.7-57,45.1-100.2,102.2-99.5
  	c57.1,0.8,100.3,44.9,99.7,101.9C702,663.9,657.2,707.6,600.4,707.2z"/>
  <path d="M801.6,432.7c-1.1,32.2-17.6,46.7-39.4,44.2c-21.1-2.5-31.7-15.6-32.3-35.9c-0.6-20.7,18.7-38.7,39.2-32.7
  	C783.2,412.4,794.1,426.7,801.6,432.7z"/>
  </svg>


</div>

<div class="socialmedia_iconholder" onClick="javascript:bmenu();window.open('https://www.youtube.com/channel/UCJrNR0z67sgL3P1TTJHq-2Q ','_blank');">


  <svg version="1.1" id="sm_youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <path d="M1198.2,554.5C1172.4,216,877.6-30.2,538.2,3C237.2,32.4-12,294.2,0.4,623.1c13.9,340.9,303.9,601.4,644.8,575
  	C982.7,1172,1223.2,883.6,1198.2,554.5z M600,1169.2c-316.2-0.1-572.2-256.5-571.2-572.2C29.7,285.7,287.5,29.2,599.8,28.8
  	c315.1-0.4,570.7,257,569.7,573.5C1168.6,916.4,914.5,1169.4,600,1169.2z"/>
  <path d="M927.9,490.7c-3.8-78.9-31-107.5-107.9-109.3c-147.9-3.3-296-2.7-443.9,0c-66.7,1.3-97,26.2-101.6,91.8
  	c-6.4,92.6-5.9,186.1,0,278.8c4.1,63.4,34,86.1,97.4,88.2c69.4,2.3,138.8,0.5,208.3,0.5v1.3c80.3,0,160.8,3.2,241-0.9
  	c76.5-3.9,100.8-27.3,105.6-104.5C931.9,654.9,931.9,572.5,927.9,490.7z M535.7,699.3V521.1c56.6,29.5,107,55.8,167.5,87.3
  	C643.1,641,592.2,668.7,535.7,699.3z"/>
  </svg>


</div>

<div class="socialmedia_iconholder">

<a href="mailto:contact@cohecean.com" >

  <svg version="1.1" id="sm_email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <path d="M598.2,0C266.5,1.3-0.8,270.2,0,601.9c0.9,333,271.6,599.4,607.6,598.1c301.8-1.2,590.8-242.3,592.4-602
  	C1201.5,266.4,929.3-1.2,598.2,0z M598.7,1169c-316.8-0.4-569.2-255-568.2-573.3C31.4,284.1,290.2,27,601.6,28.3
  	c312.3,1.3,569.1,258.2,568.5,570.3C1169.3,940.7,883.4,1177.9,598.7,1169z"/>
  <path d="M915.3,453.8c-0.3-42.6-9-51.3-52.3-51.5c-175.2-0.8-350.3-0.8-525.5-0.1c-43.3,0.2-51.7,8.8-52,51.4
  	c-0.8,109.7-0.7,219.3,0,328.9c0.3,46,8.2,53.6,54.7,54c85.7,0.7,171.5,0.2,257.3,0.2c89.4,0,178.8,0.6,268.2-0.3
  	c39.7-0.4,49.1-9.1,49.5-48.3C916.1,676.7,916.1,565.2,915.3,453.8z M817.9,737.4c-40.3-39.9-80.5-79.8-124.1-123
  	c-31.6,29.9-61.5,58.2-94.2,89.2c-31.3-28.4-60.7-55-92.7-84c-42.5,40.8-84,80.6-125.5,120.4c-2.4-2-4.8-4.1-7.2-6.2
  	c36.2-43.7,72.6-87.4,112.1-135.2c-23.1-24.2-45.3-47.3-67.5-70.5c1.9-2.5,3.8-4.9,5.8-7.3c57.6,47.6,115.2,95.3,175.3,145
  	c59.5-49.2,116.5-96.4,173.5-143.6c2.1,2.1,4.1,4.2,6.2,6.3c-20.2,21.5-40.4,43-65.8,70.1c38.2,46.1,74,89.5,109.8,132.8
  	C821.8,733.3,819.8,735.4,817.9,737.4z"/>
  </svg>
</a>

</div>

</div>

</div>

  </div>




  <div class="menuboxright">
<!-- Menülinks -->
<a href="#home" onClick="javascript:bmenu();"class="menupunkte">HOME</a>
<br>
<a href="#start" onClick="javascript:bmenu();" class="menupunkte">ÜBER UNS</a>
<br>
<a href="#projekte" onClick="javascript:bmenu();" class="menupunkte">PROJEKTE</a>
<br>
<a href="#shop" onClick="javascript:bmenu();" class="menupunkte">SHOP</a>
<br>
<a href="#kontakt" onClick="javascript:bmenu();" class="menupunkte">KONTAKT</a>
<br>
<a href="#socialmedia"  onClick="javascript:bmenu();" class="menupunkte">SOCIAL MEDIA</a>

<br>


</div>


</div>
</div>


















<!-- ---------------------------------------------PAGE begin --------------------------- -->








<div class="header" ><div class="header_overlay"></div></div>

<div class="header_area" id="home">
<!-- <div class="logo_main"></div> -->

<h1 class="ueberschrift " id="ueberschrift " style="visibility: visible;">EVOLVE INDIVIDUALLY AND <br> COME TOGETHER IN THE ETERNAL OCEAN</h1>

<a href="#start" class="kreisbutton" id="kreisbutton">
<div class="kreis" id="kreis" style="visibility: visible;">

<div class="dwa_2_box">


<svg version="1.1" id="downarrow_line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
<g>
	<path d="M686,221.5v498.8l-56.2,163.5l-48.3-1.2l-73.3-170v-491c0-38.2,30.9-69.1,69-69H617C655.2,152.5,686,183.4,686,221.5z"/>
</g>
</svg>


</div>

  <!-- created by empty soul -->
  <svg version="1.1" id="downarrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <g>
  	<path d="M588.8,939.5L85.5,436.2c-27-27-27-70.7,0-97.6l28.1-28.1c27-27,70.7-27,97.6,0l377.5,377.5c7.1,7.1,18.6,7.1,25.6,0
  		l379.5-379.5c27-27,70.7-27,97.6,0l28.1,28.1c27,27,27,70.7,0,97.6L614.4,939.5C607.3,946.6,595.8,946.6,588.8,939.5z"/>
  </g>
  </svg>






</div>
</a></div>



<div class="mainpage">

<div class="tagger" style="" id="start"></div>



<div class="abschnitt_1">

<div class="abs_feld_links absfeldcolored feldoutofview_left" id="feldlinks1">

  <div class="abs_links_content">

<div class="bild_gitu_trigger" >
<div class="goldenframe" id="goldframe">
  <div class="picturediv"  data-tilt  id="picturediv">
<img src="data/images/coheceanpotrait.png" class="gitu_bild" id="portrait" alt="Gizem & Tugce Ustaoglu Bild"/>
</div>
</div>
</div>

  </div>

</div>


<div class="abs_feld_rechts feldoutofview_right" id="feldrechts1">

<div class="abs_rechts_content" id="ueberunscontent">

  <div class="text_content_rechts" style="padding-top: 50px;">
<h2 class="ueberschrift_main">ÜBER UNS</h2>

<div class="uebbox_container" id="uebboxcontainer">

<div class="ueberuns_box" id="uebb_01">

<p class="text">Wir sind Gizem und Tugce Ustaoglu. <br>
	Zwillingsschwestern aus Berlin, die ihr Herzensprojekt verwirklichen.
 <br>
</p>
<br>
<br>
<br>
<button class="default_button" onClick="readmore();" value="" id="readmore">LESE MEHR</button>
</div>



<!-- slide informationen -->

<div class="ueberuns_box" id="uebb_02">

<p class="text"><font class="textbold">Zu Gizem: </font>Meine besondere Stärke liegt in meinem Gespür für meine Mitmenschen.
	Unterstützt von meinen Fachkenntnissen aus dem psychosozialen Feld als Sozialarbeiterin und Life Coach, begleite ich sie von jung bis alt stückweit auf Ihrem Weg.
Zudem prägt sich meine Arbeit - insbesondere die Workshops mit den Kindern und Jugendlichen, durch meine Vielseitigkeit: Die sich aus meiner Kreativität,
ein Auge für die Ästhetik, meine Leidenschaft zu tanzen und schreiben zusammensetzt. </p>
<br>



</div>

<div class="ueberuns_box" id="uebb_03">

<p class="text"><font class="textbold">Zu Tugce: </font>Was mich ausmacht, ist meine Hilfsbereitschaft und mein Auge fürs Detail.
	Auf die Kleinigkeiten im Leben kommt es an, denn diese bewirken Großes. Meine Kreativität zeigt sich in vielen Bereichen meines Lebens wieder,
	insbesondere in meinem Beruf als Mediengestalterin & Künstlerin.<br>


</div>



<div class="ueberuns_box" id="uebb_04">

<p class="text">Das Zusammenkommen mit unseren Mitmenschen, gemeinsam etwas zu kreieren und füreinander da zu sein,
	ist unsere Leidenschaft. Eine Veränderung findet aktiv statt.
	Nur aktiv und durch Interaktionen, können wir die Dinge verändern.




</div>







<button class="default_button" onClick="readlessmobile();" value="" id="readlessmobile">WENIGER</button>

</div>
<!-- container end ----------------------- -->


<div class="arrows_container" id="arrowscontainer">
  <div class="read_forbutton" onClick="readmore();" id="readforbutton">


  <!-- created by empty soul  -->
  <svg version="1.1" id="downarrow_forward" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <g>
    <path d="M1119.5,539.2l-505.1,505.3c-7.1,7.1-18.6,7.1-25.6,0L85.5,541.2c-27-27-27-70.7,0-97.6l28.1-28.1c27-27,70.7-27,97.6,0
      l297,297v-491c0-38.2,30.9-69.1,69-69H617c38.2,0,69.1,30.9,69,69v499.8l307.8-307.8c27-27,70.7-27,97.6,0l28.1,28.1
      C1146.5,468.6,1146.5,512.3,1119.5,539.2z"/>
  </g>
  </svg>

  </div>

  <div class="read_forbutton readlast" onClick="readlast();" id="readlastbutton">


  <!-- created by empty soul  -->
  <svg version="1.1" id="downarrow_back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <g>
    <path d="M1119.5,539.2l-505.1,505.3c-7.1,7.1-18.6,7.1-25.6,0L85.5,541.2c-27-27-27-70.7,0-97.6l28.1-28.1c27-27,70.7-27,97.6,0
      l297,297v-491c0-38.2,30.9-69.1,69-69H617c38.2,0,69.1,30.9,69,69v499.8l307.8-307.8c27-27,70.7-27,97.6,0l28.1,28.1
      C1146.5,468.6,1146.5,512.3,1119.5,539.2z"/>
  </g>
  </svg>

  </div>

  <div class="read_backbutton" onClick="readback()" >


  <!-- created by empty soul  -->
  <svg version="1.1" id="downarrow_back" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <g>
    <path d="M1119.5,539.2l-505.1,505.3c-7.1,7.1-18.6,7.1-25.6,0L85.5,541.2c-27-27-27-70.7,0-97.6l28.1-28.1c27-27,70.7-27,97.6,0
      l297,297v-491c0-38.2,30.9-69.1,69-69H617c38.2,0,69.1,30.9,69,69v499.8l307.8-307.8c27-27,70.7-27,97.6,0l28.1,28.1
      C1146.5,468.6,1146.5,512.3,1119.5,539.2z"/>
  </g>
  </svg>

  </div>



</div>


</div>


</div>

</div>


</div>




<div class="abschnitt_2">

<div class="content_1600" id="vismis_01">
<h3 class="ueberschrift_main_hell">VISION & MISSION</h3>
<div class="text textmitte textweiss">
  Cohecean ist eine ehrenamtliche, gemeinnützige Organisation. <br>
  Cohecean: Zusammenhalt - Ocean: Ozean

</div>



</div>

<div class="content_1600" >

<div class="abs_feld_links abs_vismis" id="vismis_02">
<p class="text textweiss" style="" id="vismistx01">
Das Wasser symbolisiert die Ruhe, den Frieden und die stetige Bewegung.
Vor allem versinnbildlicht das zusammengeflossene Wasser im Ozean,
die immense Kraft und die Macht des Zusammenkommens, sowie die Essenz jeder einzelne Tropfen.
Wir sind alle miteinander verbunden und bilden gemeinsam das große Ganze. Wir arbeiten projektbasiert und bieten Tagesprojekte,
Wochenprojekte und Charity Aktionen weltweit an.
</p>
</div>


<div class="abs_feld_rechts abs_vismis" id="vismis_03">
<p class="text textweiss" style="" id="vismistx02">
	Dabei kommen wir mit unseren Mitmenschen - insbesondere mit Kindern & Jugendlichen, zusammen.
	Die Herkunft, das Geschlecht, die Religion, die sexuelle Identität und das Alter spielt hierbei keine Rolle.
	Denn für uns sind alle Menschen im Kern gleich. Durch das Zusammenhalten gelingt uns,
	ein friedvolles Leben, sowie ein liebevolles Miteinander auf der Welt.


</p>
</div>

</div>


</div>



<div class="abschnitt_3">

<div class="content_1600" >
  <p class="text textmitte textgold" style="" id="abs3">
		"Wir sind alle stets miteinander verbunden und ein Teil vom Ganzen.
<br>
Der Frieden beginnt in unseren Herzen.

So entsteht, aus dem Du und Ich ein WIR.“

  </p>

</div>

</div>

<div class="tagger" id="projekte" style=""></div>

<div class="abschnitt_4 displaynone" id="abschnitt4">


<div class="abs_feld_links feldoutofview_left" id="projektelinks">
<div class="abs_links_content">
  <div class="text_content_rechts">
      <h4 class="ueberschrift_main">PROJEKTE</h4>
<p class="text" >Hier erhältst du Eindrücke zu unseren Projekten.
Wir arbeiten projektbezogen,
und kommen mit unseren Mitmenschen weltweit zusammen.
</p>
</div>

</div>

</div>


<div class="abs_feld_rechts feldoutofview_right" id="projekterechts">
<div class="abs_rechts_content">

<img src="data/images/projekte.png" style="width: 100%; opacity: 0.5; max-width: 700px;" alt="projekte grafik">

</div>

</div>



</div>


<!-- -->

<!-- Tagesprojekte raus -->

<!--
ABSCHNITT 5 DEAKTIVIERT

<div class="abschnitt_5" id="abschnitt5">


<div class="abs_feld_links" id="tagpb">
<div class="abs_links_content">
  <img src="data/images/Website_Rubrik Projekt_Tagesprojekte.png" style="width: 100%; max-width: 700px;" alt="tagesprojekte grafik">



</div>

</div>


<div class="abs_feld_rechts" id="tagp">
<div class="abs_rechts_content">
  <div class="text_content_rechts">


  <p class="text" ><font class="textbold">Tagesprojekte: </font>Die Tagesprojekte beinhalten,
    besuche im Krankenhaus, Seniorenheime und weitere Einrichtungen,
    um gemeinsame Momente miteinander zuteilen.
Es muss nicht immer eine Spende im materiellen Sinne sein -
manchmal genügt auch nur ein offenes Ohr und die Zeit, die wir miteinander verbringen!

  </p>
  </div>

</div>

</div>



</div>

-->

<!-- Abschnitt 5 ID wurde verschoben auf abschnitt 6 -->

<div class="abschnitt_6" id="abschnitt5">


<div class="abs_feld_links" id="works">
<div class="abs_links_content">

  <div class="text_content_links">


  <p class="text" ><font class="textbold">Workshop: </font>Der Workshop bestehet aus dem „Art Expression & Self Creation Workshop“.
		Geführt von dem Leitbild „Hilfe zur Selbsthilfe“, ist es uns wichtig,
		Kinder und Jugendliche in ihren Interessen, Stärken und Wissen zu begleiten und sie zu fördern.
		Durch die Mitgestaltung der Workshops und Eigenkreationen werden die Kinder in ihrem Können bestärkt,
		welches sie in ihrer Entfaltung und Selbstfindung unterstützt.

Wir legen Wert auf die Weiterentwicklung als Individuum, indem wir das Bewusstsein für den persönlichen Herzensweg schaffen,
um das Potenzial, welches uns allen innewohnt, <br id="mobilenobr">
zum Ausdruck zu bringen.

  </p>
  </div>

</div>

</div>


<div class="abs_feld_rechts" id="worksb">
<div class="abs_rechts_content">
  <img src="data/images/Website_Rubrik Projekt_Workshop.png" style="width: 100%; max-width: 700px;" alt="workshop grafik">


</div>

</div>



</div>

<div class="abschnitt_7">


<div class="abs_feld_links" id="charib">
<div class="abs_links_content">
  <img src="data/images/Website_Rubrik Projekt_Charity.png" style="width: 100%; max-width: 700px;" alt="charity grafik">



</div>

</div>


<div class="abs_feld_rechts" id="chari">
<div class="abs_rechts_content">

  <div class="text_content_rechts">


  <p class="text" ><font class="textbold">Charity: </font>Durch die Charity-Aktionen unterstützen wir die Grundbedürfnisse der Menschen.

  </p>
  </div>
</div>

</div>



</div>
<div class="tagger" id="shop"></div>
<div class="abschnitt_8">

<div class="content_1600" id="shopabs">
  <h5 class="ueberschrift_main">SHOP</h5>
<p class="text textmitte" style="padding-top:50px; padding-bottom: 100px;" id="abs8">
  Für den guten Zweck, wird es hier demnächst selbst gestaltete T-Shirts zum Verkauf geben.<br>
  Diese entstehen während der Durchführung der Workshops. Durch das nachhaltige Konzept werden diese <br>
  für unsere Mitmenschen, Vereine oder Einrichtungen als Spende zurückfließen. Eins können wir <br>
  schon mal verraten: Die T-Shirts sind Unique & nur als Limited Edition verfügbar!
<br>
<br>
  Stay tuned!
</p>

<button class="default_button" onclick="" value="" id="shopnow" >SHOP NOW</button>


</div>

</div>
<div class="tagger" id="kontakt"></div>

<div class="abschnitt_9">


  <div class="abs_feld_links" id="kontaktabs">
  <div class="abs_links_content" id="kontaktcontenttext">
    <div class="text_content_rechts">
        <h6 class="ueberschrift_main">KONTAKT</h6>
  <p class="text" >Kontaktiere uns gerne hier bei Fragen, bei Interesse an einer Zusammenarbeit als Volontär/in,
		an einem der Projekte oder bei Interesse an einer Kooperation. <br>
		Eins ist gewiss – zusammen schaffen WIR es!
<br>Gerne kannst du uns auch hier deine Anfrage stellen!
<br>
<br>
Wir freuen uns auf Dich!
  </p>
  </div>

  </div>

  </div>


  <div class="abs_feld_rechts" id="kontaktform">
  <div class="abs_rechts_content">

<div class="mailbox" id="mailbox" name="mailbox">
<div class="sendedmessage" id="sendedmessage"> E-Mail wurde verschickt</div>
<form method="" action=""  id="mailform">

<select class="inputlong" id="anrede" id="anrede">
  <option>Herr</option>
    <option>Frau</option>
    <option>Dr.</option>
      <option>Prof.</option>
    </select>
    <br>
<input type="text" class="inputname" placeholder="Vorname" id="vorname" name="vorname">
<input type="text" class="inputname" placeholder="Nachname" id="nachname" name="nachname">
<input type="email" class="inputlong" placeholder="Deine E-Mail" id="email" required name="email">
<br>

<textarea placeholder="Hinterlasse uns eine Nachricht" class="nachrichtenbox" id="nachricht" name="nachricht">
</textarea>
<br>
<input type="button" class="default_button"  value="SENDEN" id="mailsend" name="mailsendbutton">

</form>
</div>



  </div>

  </div>

</div>


<div class="tagger" id="socialmedia"></div>
<div class="abschnitt_10">



<div class="abs_feld_links" id="socialbuttonfield">
<div class="abs_links_content" id="socialbuttoncontent">

  <div class="buttonholder_horizontal" style="margin-top: 0px;">



<div class="smalllinkholder">
  <a href="impressum.html" class="menupunkte_small" target="_blank">IMPRESSUM</a>

</div>

<div class="sm_icon_row">

<!-- facebook
  <div class="socialmedia_iconholder">


  <svg version="1.1" id="sm_facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
  <path d="M599.2,0C266.6,0.3-0.6,268,0,600.3c-1,350.8,294.4,604.8,605.5,599.6c328.2-5.5,594.8-270.4,594.5-600.4
  	C1199.8,267.8,931.1-0.3,599.2,0z M596.7,1169.1c-273.5,5.5-566.8-214.3-567.4-569.4C28.6,271.1,292.5,28.3,602.5,29.4
  	c315.1,1.2,567.4,256.8,567.2,570.7C1169.5,917.3,914.9,1170.1,596.7,1169.1z"/>
  <path d="M631.8,508.5c45.4,0,81.4,0,122.6,0c-5.4,42.2-10.1,79.4-15,118.4c-36.7,1.7-68.9,3.3-106,5c0,104.6,0,206.3,0,312.5
  	c-43.7,0-82.4,0-128.6,0c0-103.7,0-206.9,0-311.1c-24.5-2.9-42-5-61.8-7.4c0-38.3,0-74.4,0-114.1c18.4-3.2,37.1-6.5,61.8-10.7
  	c0-30.9-0.6-61.6,0.1-92.3c2.5-99.1,53.2-152.9,151.1-157.9c32.4-1.6,65,2.1,100.8,3.5c0,37.9,0,71.4,0,111
  	c-23.8,0-45.4-1.5-66.7,0.3c-38.8,3.3-55.4,20.2-57.9,59.3C630.5,450.1,631.8,475.3,631.8,508.5z"/>
  </svg>

  </div>

-->

  <div class="socialmedia_iconholder" onClick="window.open('https://www.instagram.com/cohecean/ ','_blank');">


    <svg version="1.1" id="sm_instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
    <path d="M599.9,0C267.6,0.4-0.4,268.7,0,600.4c0.5,331.2,269.9,599.8,601.4,599.6c332.2-0.2,598.7-268,598.6-601.2
    	C1199.8,265.6,933.3-0.4,599.9,0z M601.2,1169.1c-317.4,0-571.8-255.1-570.7-572c1.1-313.1,257-568.5,570-569
    	c313.6-0.4,574,260.7,571.9,573.8C1170.4,915.9,915.3,1169.1,601.2,1169.1z"/>
    <path d="M904.4,457.3c-3.9-87.4-61.4-148.8-149.1-154.4c-100.1-6.4-201.2-6.3-301.4-0.7c-87.2,4.9-149.6,61.7-154.7,143.7
    	c-6.7,105.6-7.4,212.3,0.3,317.7c6.5,90.5,70.9,143,162.1,147.5c45.6,2.3,91.4,0.4,137.1,0.3c47.5,0,95.1,2,142.6-0.4
    	c97.2-5,158.9-61.8,163.3-157.7C909.1,654.8,908.9,555.8,904.4,457.3z M849.5,747.1C846.7,813.1,806.1,851.7,740,854
    	c-89.4,3.2-179.1,4-268.4,0.4c-81.4-3.4-114.3-40.3-119.1-120.6c-0.4-7.3-1-14.6-1-22c-0.1-36.5,0-73.1,0-109.7h1.3
    	c0-43.9-2.1-87.9,0.5-131.6c4.2-70.4,39.9-109.8,109.8-112.7c93.1-3.9,186.5-3.9,279.6,0.1c66.4,2.9,104.1,41.6,107,109.6
    	C853.4,560.5,853.4,654,849.5,747.1z"/>
    <path d="M599.3,448.1c-86.6,1-155.2,70.4-155.7,157.6c-0.5,89.8,68.5,157.5,160.2,157c88.4-0.5,154.8-67.4,154.8-155.9
    	C758.6,516.7,688.7,447,599.3,448.1z M600.4,707.2c-56.4-0.4-100.3-45.4-99.7-102.2c0.7-57,45.1-100.2,102.2-99.5
    	c57.1,0.8,100.3,44.9,99.7,101.9C702,663.9,657.2,707.6,600.4,707.2z"/>
    <path d="M801.6,432.7c-1.1,32.2-17.6,46.7-39.4,44.2c-21.1-2.5-31.7-15.6-32.3-35.9c-0.6-20.7,18.7-38.7,39.2-32.7
    	C783.2,412.4,794.1,426.7,801.6,432.7z"/>
    </svg>


  </div>

  <div class="socialmedia_iconholder"  onClick="window.open('https://www.youtube.com/channel/UCJrNR0z67sgL3P1TTJHq-2Q ','_blank');">


    <svg version="1.1" id="sm_youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
    <path d="M1198.2,554.5C1172.4,216,877.6-30.2,538.2,3C237.2,32.4-12,294.2,0.4,623.1c13.9,340.9,303.9,601.4,644.8,575
    	C982.7,1172,1223.2,883.6,1198.2,554.5z M600,1169.2c-316.2-0.1-572.2-256.5-571.2-572.2C29.7,285.7,287.5,29.2,599.8,28.8
    	c315.1-0.4,570.7,257,569.7,573.5C1168.6,916.4,914.5,1169.4,600,1169.2z"/>
    <path d="M927.9,490.7c-3.8-78.9-31-107.5-107.9-109.3c-147.9-3.3-296-2.7-443.9,0c-66.7,1.3-97,26.2-101.6,91.8
    	c-6.4,92.6-5.9,186.1,0,278.8c4.1,63.4,34,86.1,97.4,88.2c69.4,2.3,138.8,0.5,208.3,0.5v1.3c80.3,0,160.8,3.2,241-0.9
    	c76.5-3.9,100.8-27.3,105.6-104.5C931.9,654.9,931.9,572.5,927.9,490.7z M535.7,699.3V521.1c56.6,29.5,107,55.8,167.5,87.3
    	C643.1,641,592.2,668.7,535.7,699.3z"/>
    </svg>


  </div>

  <div class="socialmedia_iconholder">
<a href="mailto:contact@cohecean.com" >

    <svg version="1.1" id="sm_email" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 viewBox="0 0 1200 1200" style="enable-background:new 0 0 1200 1200;" xml:space="preserve">
    <path d="M598.2,0C266.5,1.3-0.8,270.2,0,601.9c0.9,333,271.6,599.4,607.6,598.1c301.8-1.2,590.8-242.3,592.4-602
    	C1201.5,266.4,929.3-1.2,598.2,0z M598.7,1169c-316.8-0.4-569.2-255-568.2-573.3C31.4,284.1,290.2,27,601.6,28.3
    	c312.3,1.3,569.1,258.2,568.5,570.3C1169.3,940.7,883.4,1177.9,598.7,1169z"/>
    <path d="M915.3,453.8c-0.3-42.6-9-51.3-52.3-51.5c-175.2-0.8-350.3-0.8-525.5-0.1c-43.3,0.2-51.7,8.8-52,51.4
    	c-0.8,109.7-0.7,219.3,0,328.9c0.3,46,8.2,53.6,54.7,54c85.7,0.7,171.5,0.2,257.3,0.2c89.4,0,178.8,0.6,268.2-0.3
    	c39.7-0.4,49.1-9.1,49.5-48.3C916.1,676.7,916.1,565.2,915.3,453.8z M817.9,737.4c-40.3-39.9-80.5-79.8-124.1-123
    	c-31.6,29.9-61.5,58.2-94.2,89.2c-31.3-28.4-60.7-55-92.7-84c-42.5,40.8-84,80.6-125.5,120.4c-2.4-2-4.8-4.1-7.2-6.2
    	c36.2-43.7,72.6-87.4,112.1-135.2c-23.1-24.2-45.3-47.3-67.5-70.5c1.9-2.5,3.8-4.9,5.8-7.3c57.6,47.6,115.2,95.3,175.3,145
    	c59.5-49.2,116.5-96.4,173.5-143.6c2.1,2.1,4.1,4.2,6.2,6.3c-20.2,21.5-40.4,43-65.8,70.1c38.2,46.1,74,89.5,109.8,132.8
    	C821.8,733.3,819.8,735.4,817.9,737.4z"/>
    </svg>

</a>
  </div>


</div>

  </div>



</div>

</div>


<div class="abs_feld_rechts" id="socialtextcontent">
<div class="abs_rechts_content" id="socialabs">

  <div class="text_content_rechts">

<h7 class="ueberschrift_main">SOCIAL MEDIA</h7>
  <p class="text" >
    Du findest uns auch auf Instagram und YouTube!
Hier teilen wir unsere Momente und geben Dir Eindrücke von unseren Projekten.
  </p>
  </div>
</div>

</div>



</div>



</div>

</center>



<!-- tilt api https://micku7zu.github.io/vanilla-tilt.js/ -->
<script type="text/javascript" src="data/vanilla-tilt.js" id="vanillatilt"></script>



</body>


<!-- Designed and created by Empty Soul (S.Pietrowski)-->

</html>
