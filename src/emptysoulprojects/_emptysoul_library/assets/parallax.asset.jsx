import React, { useEffect, useState } from 'react';
import $ from "jquery";

const Parallax = () => {

const [parallax, setparallax] = useState('');

useEffect(() =>{
  window.addEventListener("scroll", function(){
  var yPos = 0 - window.pageYOffset/6;

  setparallax("matrix(1,0,0,1,0,"+ yPos +")");
  });
},[]);

return parallax;

}

export default Parallax
