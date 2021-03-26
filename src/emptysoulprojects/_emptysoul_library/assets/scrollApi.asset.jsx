//** scroll script by Empty Soul
//** v 1.3 [react]
//** this script is using classes to get the clicker

import { render } from "react-dom";
import $ from "jquery";
import React from 'react';




$(document).ready(function(){

$(".button-scroll").on('click', function(event){
console.log('clicked');
if (this.hash !== ""){

event.preventDefault();

var hash = this.hash;

$('html, body').animate({

scrollTop: $(hash).offset().top

},800, function(){
window.location.hash = hash;
});
}
});
});
