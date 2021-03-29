//** scroll script by Empty Soul
//** v 1.0 [react]

import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery";



const ScrollDirectionDetection = () => {

const [y, sety] = useState('');

  useEffect(() => {




var scrollPos = 0;

window.addEventListener('scroll', function(){

  // detects new state and compares it with the new one
  if ((document.body.getBoundingClientRect()).top > scrollPos){

sety(false);

  }
  if ((document.body.getBoundingClientRect()).top < scrollPos){

  sety(true);

  }
	// saves the new position for iteration.
	scrollPos = (document.body.getBoundingClientRect()).top;
});

  },[]);

return y;

//return [lang,bla, bla]
}


export default ScrollDirectionDetection;
