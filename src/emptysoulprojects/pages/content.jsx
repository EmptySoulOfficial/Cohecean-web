import React, { Suspense, lazy, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import * as importProjectLibrary from '../data/project_import.jsx';
import * as importLibrary from '../_emptysoul_library/import/import';
import { menuitems } from "./menuItemsData";
import { SplashScreen, Sidemenu, Nav } from  '../_emptysoul_library/import/import.jsx';
import $ from "jquery";




const Content = () => {

    useEffect(() => {


    });





  const [menuOpen, setMenuOpen] = useState(false);

      return (



<>
<SplashScreen />
      <Router>
          <Sidemenu menuOpen={menuOpen} setMenuOpen={setMenuOpen}/>
          <Nav setMenuOpen={setMenuOpen} menuOpen={menuOpen}/>

        <Switch>
          {menuitems.map((item) => (
            <Route exact path={item.route} key={item.component}>
              {item.component}
            </Route>
          ))}
        </Switch>


      </Router>





    </>
  );



const [state1, setState1] = useState(false);

const oldClass = ` menu_clickaway ${state1 ? "d-none" : "d-none"}`


};




export default Content;
