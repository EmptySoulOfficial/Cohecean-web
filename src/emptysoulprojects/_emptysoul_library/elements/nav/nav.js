import React, { Suspense, useEffect, useState } from 'react';
import $ from "jquery"
import classNames from 'classnames';
import { Link } from "react-router-dom";
import './nav.css';
import  Burgermenu_Silent from '../../import/import';
import  {ScreenStyle, LogoSmall, LogoNormal, LogoBig, LogoUserSize, useParseLanguages, ScrollDirectionDetection} from '../../import/import';
import { menuitems } from '../../../pages/menuItemsData';

const Nav = ({setMenuOpen,menuOpen}) => {

const scrolldirection = ScrollDirectionDetection();
const cssScreenStyleMobile = ScreenStyle().[0];
const cssScreenStyleMobileSmall = ScreenStyle().[0];;

const [navScroll, setnavScroll] = useState(false);

      $(window).scroll(function() {
      	var $scrolled = $(window).scrollTop();

        if($scrolled > 50) {

        } else {

        }


      });

const lang_text = useParseLanguages();
    return (
      <>
        <nav className={classNames('navigation', {'hidenav': scrolldirection, "" : !scrolldirection })}>

        <div className="nav_content">
        <div className={classNames('logo_wrapper', {'d_none': cssScreenStyleMobileSmall, '' : !cssScreenStyleMobileSmall })}>
        <a href="#home" className="logo_href button-scroll">
        <LogoNormal/>
        </a>
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
