import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './downarrowsimple_line.css';
import {ReactComponent as DownarrowsimpleLine_icon} from '../../gfx/icons/down_arrow_simple_line.svg';

const DownArrowSimpleLine = () => {



return(
<>
<a href="#aboutUs" className="button-scroll downarrow">
<DownarrowsimpleLine_icon className="down_arrow_simple" alt="down arrow" />
</a>
</>

);

};

export default DownArrowSimpleLine;
