//* get scroll position based on pixel
//* asset created by steve Empty soul
//* V. 1.0
//* get window width:  if ($(window).width() > 1199)
//* get scroll position: if ( Scrollposition <= 200)

import { render } from "react-dom";
import $ from "jquery"
import React from 'react';


var Scrollposition;
jQuery(window).bind( 'scroll', function SC() {
Scrollposition = jQuery(window).scrollTop();
