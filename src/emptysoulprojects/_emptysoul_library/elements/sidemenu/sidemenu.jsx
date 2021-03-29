import React, { Suspense, lazy, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import $ from "jquery"
import { Link } from "react-router-dom";
import './sidemenu.css';
import { menuitems } from '../../../pages/menuItemsData';
import classNames from 'classnames';
import  {userWebLanguage, useParseLanguages} from '../../import/import';



const Sidemenu = ({menuOpen,setMenuOpen}) => {

const webLang = userWebLanguage();



const [menuDelay, setMenuDelay] = useState(false);
const [menuDelayShort, setMenuDelayShort] = useState(false);
    // set el height and width etc.

useEffect(() => {

if(menuOpen == true){
  setMenuDelay(menuOpen);

setTimeout(function(){
  setMenuDelayShort(menuOpen);
},10);

}else{
  setMenuDelayShort(menuOpen);

setTimeout(function(){

setMenuDelay(menuOpen);

},300)
}
},[menuOpen]);




//d_none hinzugefügt mit 0.3s beim schließen
//d_none direkt
//sidemenu_hidden 10ms nach d_none beim schließen
  return(
    <>

    <div  className={classNames('sidemenu', {'': menuOpen,'': !menuOpen }, {'': menuDelayShort,'sidemenu_hidden': !menuDelayShort }, {'': menuDelay,'d_none': !menuDelay })}  id="sidemenu">
    <div className="sidemenu_content">
    <div className="sidemenu_content__buttons_left">
    {menuitems.map((item) => (
     <div key={item.route} className="navigation__item" onClick={() => setMenuOpen(prev => !prev)}>


       {item.RouteType === 'Link' ? (
         <Link to={item.route}>
             <div>
             {item.ItemName[webLang]}
             </div>
         </Link>
       ) : (<></>     )}

       {item.RouteType === 'href' ? (
         <a href={item.route}>
             <div>
            {item.ItemName[webLang]}
             </div>
         </a>
       ) : (<></>     )}

     </div>

    ))}
    </div>
    </div>
    </div>
    <div id="menuclickaway" className={classNames('menu_clickaway', {'': menuOpen,'d_none': !menuOpen },)} onClick={()=> setMenuOpen(prev => !prev) }>  </div>
</>
  )
}



export default Sidemenu
