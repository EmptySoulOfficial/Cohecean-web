import React, { Suspense, lazy, useEffect, useState } from 'react';
import Loadingscreen from './emptysoulprojects/data/loadingscreen/loadingscreen';
import './emptysoulprojects/_emptysoul_library/styles/import_default_styles.jsx';
import './App.css';
import $ from "jquery"
import ReactDOM from 'react-dom';

import { BrowserRouter as Router, Switch, Route} from 'react-router-dom';


const App = () => {

    const Content = lazy(() => import('./emptysoulprojects/pages/content'));

    return (


        <center>
            <Suspense fallback={<Loadingscreen/>}>
        <Content/>
            </Suspense>
        </center>

    )
};


export default App;
