import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './blocks.scss';
import headerimage from '../gfx/images/header.jpg';
import headerbackground from '../gfx/images/header.jpg';
import {useParseLanguages, DownArrowSimple} from '../../_emptysoul_library/import/import';





const Header = () =>{
//parsing text
const lang_text = useParseLanguages();

return(

<>


<div className="Header" style={{ backgroundImage: `url(${headerbackground})` }}>

<div className="header_content" id="home">
<h1 className="header_title" id="title">{lang_text.headline}</h1>
<DownArrowSimple/>
</div>
</div>

</>
);


}

const AboutUs = () =>{
  const lang_text = useParseLanguages();
  return(
  <>
<div className="block" id="aboutUs">
<div className="block_content_left blockColor-grey">
{lang_text.demotextleft}
</div>
<div className="block_content_right">
<h2 className="text_title">{lang_text.aboutUs}</h2>
</div>
</div>
  </>
);
}

const VisionAndMission = () =>{
  const lang_text = useParseLanguages();

  return(

  <div className="block">
<div className="block_content">
{lang_text.demotextmiddle}
</div>
  </div>
  );
}


export {
Header, AboutUs, VisionAndMission }
