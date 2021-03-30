import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import './logo.css';
import logo from '../../../data/gfx/logo/logo.svg';


const LogoSmall = () => {

return(
<>

<div className="Logo_small">
<img src={logo} className="logo" alt="logo" />
</div>

</>

);

};
const LogoNormal = () => {

return(
<>

<div className="Logo Logo_normal">
<img src={logo} className="logo" alt="logo" />
</div>

</>

)
};

const LogoBig = () => {

return(
<>

<div className="Logo Logo_big">
<img src={logo} className="logo" alt="logo" />
</div>

</>

)
};

const LogoUserSize = () => {

return(
<>

<div className="Logo Logo_userSize">
<img src={logo} className="logo" alt="logo" />
</div>

</>

)

};

export {LogoSmall, LogoNormal, LogoBig, LogoUserSize}
