import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './downarrowsimple.css';
import {ReactComponent as Downarrowsimple_icon} from '../../gfx/icons/down_arrow_simple.svg';

const DownArrowSimple = () => {



return(
<>
<a href="#aboutUs" className="button-scroll downarrow">
<Downarrowsimple_icon className="down_arrow_simple" alt="down arrow" />
</a>
</>

);

};

export default DownArrowSimple;
