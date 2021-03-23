import React from 'react';
import { render } from "react-dom";
import $ from "jquery"
import data from "../../data/projectdata";

const projectdata= data.map(( data) =>{

var projectname = data.projectname;
titletag(projectname);

var projectdev = data.dev;
headtag(projectdev);

})





function titletag(projectname){


let projname = projectname;
let titletag = document.getElementsByTagName('title')[0];
titletag.innerHTML = projname;


}

function headtag(projectdev){


let projdev = projectdev;
let headtag = document.getElementsByTagName('head')[0];
headtag.innerHTML += '<!-- Designed and developed by '+projdev+' -->';


}

export default {titletag, headtag}
