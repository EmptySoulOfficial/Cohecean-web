import { React, useEffect, useState } from 'react';
import $ from "jquery"
import './splashscreen.css';
import classNames from 'classnames';
import PropTypes from 'prop-types';
import {LogoBig} from '../../import/import'


const SplashScreen = () => {
//class arr let class = ['class1', 'class2'].join(' ');


const [notVisible, setnotVisible] = useState(false);

  useEffect(() => {
    if(notVisible == false){
    setTimeout(function(){setnotVisible(true)},5000);
}else{

}
}, []);

if (notVisible) return null;

return(
<>
<div className={classNames('', {'d_none': notVisible, 'splashscreen': !notVisible })} id="splashscreen" onClick={()=> setnotVisible(prev => !prev)}>
<div className="splashscreen_content">
<div className="LogoSplaschscreen_wrapper"><LogoBig/></div>
<p className="splashText1">Welcome to Cohecean</p>
<p className="splashSkipText">Skip by clicking</p>
</div>
</div>
</>


);



}

export default SplashScreen
