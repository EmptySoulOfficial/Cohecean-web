//replace-function for ios-safari & edge/explorer
import { render } from "react-dom";
import $ from "jquery"


if (!String.prototype.replaceAll) {
 String.prototype.replaceAll = function(str, newStr){

   // If a regex pattern
   if (Object.prototype.toString.call(str).toLowerCase() === '[object regexp]') {
     return this.replace(str, newStr);
   }

   // If a string
   return this.replace(new RegExp(escapeRegExp(str), 'g'), newStr);

 };
}

function escapeRegExp(string) {
   return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
 }
