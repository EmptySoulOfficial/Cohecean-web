import React, { Suspense, lazy, useEffect, useState } from 'react';
import $ from "jquery";
import * as textdata from '../../data/languageData/languageData.json';

const useParseLanguages = () => {

const [lang_text, setLangText] = useState('');

  useEffect(() => {
      const jsonObj = JSON.parse(JSON.stringify(textdata).replace(/\\n/g, '<br>')).default;
      const langString = navigator.language.split("-")[0]; //bsp: "de-DE" -> "de"
      setLangText(jsonObj[langString]);
  },[]);


return lang_text;
//return [lang,bla, bla]
}


export default useParseLanguages;
