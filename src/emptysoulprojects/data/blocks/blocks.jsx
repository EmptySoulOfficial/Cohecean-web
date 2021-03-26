import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './blocks.scss';
import headerimage from '../gfx/images/header.jpg';
import headerbackground from '../gfx/images/header.jpg';
import {useParseLanguages, DownArrowSimple, SocialMedia_icon_facebook, SocialMedia_icon_instagram, SocialMedia_icon_youtube} from '../../_emptysoul_library/import/import';




const Header = () =>{
//parsing text
const lang_text = useParseLanguages();

return(

<>


<div className="Header">

<div className="header_content" id="home">

  <div className="block_content_left d_block">
    <div className="followUs_wrapper">
    <span className="followUs_line"></span>
    <p className="followUs_text">Folge Uns</p>
    <div className="followUs_socialMedia_wrapper">
    <div className="followUs_iconholder">
    <SocialMedia_icon_facebook/>
    </div>
    <div className="followUs_iconholder">
    <SocialMedia_icon_instagram/>
    </div>
    <div className="followUs_iconholder">
    <SocialMedia_icon_youtube/>
    </div>
    </div>
    </div>
    <div className="h1_wrapper">
      <h1 className="header_title break_lines" id="title">{lang_text.headline}</h1>
    </div>
  </div>
  <div className="block_content_right">
    <div class="header_image" style={{ backgroundImage: `url(${headerbackground})` }}></div>
  </div>
  <div className="downarrow_wrapper">
    <DownArrowSimple/>
  </div>
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
