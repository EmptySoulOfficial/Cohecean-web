import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery"
import './socialmedia.css';
import {ReactComponent as Facebook_icon} from '../../gfx/icons/socialmedia/facebook.svg';
import {ReactComponent as Instagram_icon} from '../../gfx/icons/socialmedia/instagram.svg';
import {ReactComponent as Youtube_icon} from '../../gfx/icons/socialmedia/youtube.svg';


const SocialMedia_icon_facebook = () => {

return(
<>

<div className="facebook_icon_div">
<Facebook_icon className="facebook_icon socialmedia_icon" alt="facebook" />
</div>

</>

);

};

const SocialMedia_icon_instagram = () => {

return(
<>

<div className="instagram_icon_div">
<Instagram_icon className="instagram_icon socialmedia_icon" alt="instagram" />
</div>

</>

);

};


const SocialMedia_icon_youtube = () => {

return(
<>

<div className="youtube_icon_div">
<Youtube_icon className="youtube_icon socialmedia_icon" alt="youtube" />
</div>

</>

);

};

export{
  SocialMedia_icon_facebook,
  SocialMedia_icon_instagram,
  SocialMedia_icon_youtube
}
