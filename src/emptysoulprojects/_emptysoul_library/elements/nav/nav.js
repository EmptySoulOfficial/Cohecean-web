import React from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './nav.css';
import  Burgermenu_Silent from '../../import/import';
import  {LogoSmall, LogoNormal, LogoBig, LogoUserSize, useParseLanguages} from '../../import/import';
import { menuitems } from '../../../pages/menuItemsData';

const Nav = ({setMenuOpen,menuOpen}) => {


const lang_text = useParseLanguages();
    return (
      <>
        <nav className="navigation">

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
