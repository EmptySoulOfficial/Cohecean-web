import { React, useEffect, useState } from 'react';
import $ from "jquery"
import './splashscreen.css';
import classNames from 'classnames';
import PropTypes from 'prop-types';


const SplashScreen = () => {
//class arr let class = ['class1', 'class2'].join(' ');


const [notVisible, setnotVisible] = useState(false);

  useEffect(() => {
    if(notVisible == false){
    setTimeout(function(){setnotVisible(true)},6000);
}else{

}
}, []);

if (notVisible) return null;

return(
<>
<div className={classNames('', {'d_none': notVisible, 'splashscreen': !notVisible })} id="splashscreen" onClick={()=> setnotVisible(prev => !prev)}>
<div className="splashscreen_content">
<div className="Logo"></div>
<p className="splashText1">Welcome to</p>
<p className="splashText2">Cohecean</p>
<p className="splashSkipText">Skip by clicking</p>
</div>
</div>
</>


);



}

export default SplashScreen
