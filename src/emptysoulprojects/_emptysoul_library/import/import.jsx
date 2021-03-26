import { render } from "react-dom";
import ReactDOM from 'react-dom';
import $ from "jquery"
import SplashScreen from '../elements/splashscreen/splashscreen';
import Nav from '../elements/nav/nav';
import Burgermenu_silent from '../elements/burgermenu_silent/burgermenu_silent';
import Sidemenu from '../elements/sidemenu/sidemenu';
import DownArrowSimple from '../elements/downarrowsimple/downarrowsimple';
import {LogoSmall, LogoNormal, LogoBig, LogoUserSize} from '../elements/logo/logo';
import { SocialMedia_icon_facebook, SocialMedia_icon_instagram, SocialMedia_icon_youtube } from '../elements/socialmedia/socialmedia';

//project title-name
import prjinit from './projectName.js';
//import assets
import helloworld from '../assets/helloworld.asset.jsx';
import '../assets/scrollApi.asset.jsx';
//import '../assets/getScrollPositionPixel.asset.jsx';
import useParseLanguages from '../assets/parseLanguages.asset.jsx';









export{
helloworld,
prjinit,
$,
SplashScreen,
Nav,
Burgermenu_silent,
Sidemenu,
useParseLanguages,
DownArrowSimple,
LogoSmall, LogoNormal, LogoBig, LogoUserSize,
SocialMedia_icon_facebook, SocialMedia_icon_instagram, SocialMedia_icon_youtube



}

export default Burgermenu_silent
