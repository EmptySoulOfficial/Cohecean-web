//* * script by Empty Soul
//* * v 1.0 [react]
// check responsive/resulutions

import React, { Suspense, lazy, useEffect, useState } from 'react'
import $ from 'jquery'

const ScreenStyle = () => {
  const [ screenStyleMobile, setscreenStyleMobile ] = useState('')
  const [ screenStyleMobile_small, setscreenStyleMobile_small ] = useState('')
  const [ screenStyleDesktop, setscreenStyleDesktop ] = useState('')

  useEffect(
    () => {
      // starting script
      checkResize()
      // if the window was resized
      window.addEventListener('resize', checkResize)

      function checkResize () {
        var windowSize = $(window).width()

        windowSize < '1200'
          ? setscreenStyleMobile(true)
          : setscreenStyleMobile(false)
        windowSize < '576'
          ? setscreenStyleMobile_small(true)
          : setscreenStyleMobile_small(false)
        windowSize < '1400'
          ? setscreenStyleDesktop(true)
          : setscreenStyleDesktop(false)
        // console.log(windowSize);
      }
    },
    []
  )

  return [ screenStyleMobile, screenStyleMobile_small, screenStyleDesktop ]
}

export default ScreenStyle
