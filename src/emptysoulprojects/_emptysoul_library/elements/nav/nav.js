import React, { Suspense, useEffect, useState } from 'react';
import $ from "jquery"
import classNames from 'classnames';
import { Link } from "react-router-dom";
import './nav.css';
import  Burgermenu_Silent from '../../import/import';
import  {LogoSmall, LogoNormal, LogoBig, LogoUserSize, useParseLanguages} from '../../import/import';
import { menuitems } from '../../../pages/menuItemsData';

const Nav = ({setMenuOpen,menuOpen}) => {



  const [navScroll, setnavScroll] = useState(false);

      $(window).scroll(function() {
      	var $scrolled = $(window).scrollTop();

        if($scrolled > 50) {
      setnavScroll(true);
      console.log(navScroll);
        } else {
    setnavScroll(false);
        }


      });

const lang_text = useParseLanguages();
    return (
      <>
        <nav className={classNames('navigation', {'hidenav': navScroll, "" : !navScroll })}>

        <div className="nav_content">
        <div className="logo_wrapper">
        <LogoNormal/>
        </div>
        <div className="burgermenu_wrapper">
        <label className="burgermenu_label" onClick={() => setMenuOpen(prev => !prev)}>{lang_text.menulabel}</label>
        <Burgermenu_Silent setMenuOpen={setMenuOpen} menuOpen={menuOpen}/>
        </div>
        </div>
        </nav>
        </>
    )
};


export default Nav;
