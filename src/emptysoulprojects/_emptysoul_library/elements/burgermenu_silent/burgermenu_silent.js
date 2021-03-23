//burgermenu_esv2 by EMpty SOul [V 2.2 - REACT VERSION]

import React, { Suspense, useEffect, useState } from 'react';
import $ from "jquery"
import './burgermenu_silent.css';
import classNames from 'classnames';

const Burgermenu_silent = ({setMenuOpen, menuOpen}) => {

return(
<>
<div className="Burgermenu_silent">
<button  onClick={() => setMenuOpen(prev => !prev)}  className={classNames('burgermenu-button', {'bmactive': menuOpen,'bmactive_re': !menuOpen })} id="bmsilent_button" >
<span className={classNames('burgermenu_line bml_color', {'bml_color_open': menuOpen,'': !menuOpen })} id="bml_0"></span>
</button>

</div>
</>
);
}


export default Burgermenu_silent;
