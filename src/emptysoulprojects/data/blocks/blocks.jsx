import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import classNames from 'classnames';
import './blocks.css';
import headerimage from '../gfx/images/header.jpg';
import headerbackground from '../gfx/images/header.jpg';
import {useParseLanguages, Parallax, ScreenStyle, DownArrowSimpleLine, SocialMedia_icon_facebook, SocialMedia_icon_instagram, SocialMedia_icon_youtube,LogoSmall, LogoNormal, LogoBig, LogoUserSize,} from '../../_emptysoul_library/import/import';


//class header_image for setting the cube image

const Header = () =>{
//parsing text
const lang_text = useParseLanguages();
const parallax_transforming = Parallax();
const cssScreenStyleMobile = ScreenStyle().[0];
const cssScreenStyleMobileSmall = ScreenStyle().[1];
const cssScreenStyleDesktop = ScreenStyle().[2];

return(

<>

<div className="tagObj" id="home"></div>
<div className="Header" style={{ backgroundImage: `url(${headerbackground})`, transform: `${parallax_transforming}`}} >

<div className="header_content">

  <div className="block_content_left block_h1_cohecean d_block" style={{ transform: `${parallax_transforming}`}}>

    <div className="followUs_wrapper d_none">
    <span className="followUs_line"></span>
    <p className="followUs_text">{lang_text.followUs}</p>
    <div className="followUs_socialMedia_wrapper">
    <div className="followUs_iconholder" onClick={() => window.location.href='https://www.facebook.com'}>
    <SocialMedia_icon_facebook/>
    </div>
    <div className="followUs_iconholder" onClick={() => window.location.href='https://www.instagram.com'}>
    <SocialMedia_icon_instagram/>
    </div>
    <div className="followUs_iconholder" onClick={() => window.location.href='https://www.youtube.com'}>
    <SocialMedia_icon_youtube/>
    </div>
    </div>
    </div>
    <div className={classNames('logo_wrapper_mobile', {'': cssScreenStyleMobileSmall, 'd_none' : !cssScreenStyleMobileSmall })}>
    <LogoUserSize/>
    </div>
      <div className="h1_wrapper">
      <h1 className="header_title break_lines" id="title">{lang_text.headline}</h1>
    </div>
  </div>

  <div className="downarrow_wrapper">
    <DownArrowSimpleLine/>
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
