import React from 'react';
import $ from "jquery"
import { Link } from "react-router-dom";
import './nav.css';
import  Burgermenu_Silent from '../../import/import';
import  {LogoSmall, LogoNormal, LogoBig, LogoUserSize} from '../../import/import';
import { menuitems } from '../../../pages/menuItemsData';

const Nav = ({setMenuOpen,menuOpen}) => {



    return (
      <>
        <nav className="navigation">

        <div className="nav_content">
        <div className="logo_wrapper">
        <LogoUserSize/>
        </div>
        <div className="burgermenu_wrapper">
        <Burgermenu_Silent setMenuOpen={setMenuOpen} menuOpen={menuOpen}/>
        </div>
        </div>
        </nav>
        </>
    )
};


export default Nav;
