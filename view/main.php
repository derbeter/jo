<html class="no-js hydrated" dir="ltr" lang="tr" prefix="og: http://ogp.me/ns#" style="--windowHeight: 782px;">
   <!--<![endif]-->
   <head>
      <style>body {transition: opacity ease-in 0.2s; } 
         body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
      </style>
      <meta charset="utf-8">
      <style data-styles="">casino-play-random-game{visibility:hidden}.hydrated{visibility:inherit}</style>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <meta name="Application-Name" content="jojoBET">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet" type="text/css">
      <link rel="preload" href="/static/css/common-d84be9782d9443a05473.css" as="style">
      <link rel="preload" href="/static/css/bundle-939aff498c5cb56a60be.css" as="style">
      <link rel="preload" href="/static/js/common-977487d3dce2d0c2f8a9.js" as="script">
      <link rel="preload" href="/static/js/lang-tr-ef2766e66df10de3a740.js" as="script">
      <link rel="preload" href="/static/js/bundle-890d9e62993833d629e8.js" as="script">
      <link rel="preload" href="/static/js/svg-2535506528c285ba0ba0.js" as="script">
      <script>
         window.customBuildVars = {
           appName: 'jojobet-prod',
           appVersion: '1.0.798',
           disableBrowserConsole: false,
         };
      </script>
      <link rel="stylesheet" type="text/css" href="/static/css/common-d84be9782d9443a05473.css.css">
      <link rel="stylesheet" type="text/css" href="/static/css/bundle-939aff498c5cb56a60be.css">
      
      <script>
         /* eslint-disable */
         (function (window){
         if (window) {
         var
           startOffset = Date.now ? Date.now() : +(new Date)
           , performance = window.performance || {}
         
           , _entries = []
           , _marksIndex = {}
         
           , _filterEntries = function (key, value){
             var i = 0, n = _entries.length, result = [];
             for( ; i < n; i++ ){
               if( _entries[i][key] == value ){
                 result.push(_entries[i]);
               }
             }
             return	result;
           }
         
           , _clearEntries = function (type, name){
             var i = _entries.length, entry;
             while( i-- ){
               entry = _entries[i];
               if( entry.entryType == type && (name === void 0 || entry.name == name) ){
                 _entries.splice(i, 1);
               }
             }
           }
           ;
         
         if( !performance.now ){
           performance.now = performance.webkitNow || performance.mozNow || performance.msNow || function (){
             return (Date.now ? Date.now() : +(new Date)) - startOffset;
           };
         }
         if( !performance.mark ){
           performance.mark = performance.webkitMark || function (name){
             var mark = {
                 name:			name
                 , entryType:	'mark'
                 , startTime:	performance.now()
                 , duration:		0
             };
             _entries.push(mark);
             _marksIndex[name] = mark;
           };
         }
         if( !performance.measure ){
           performance.measure = performance.webkitMeasure || function (name, startMark, endMark){
             if (_marksIndex[startMark] && _marksIndex[endMark]) {
               startMark	= _marksIndex[startMark].startTime;
               endMark		= _marksIndex[endMark].startTime;
         
               _entries.push({
                   name:			name
                   , entryType:	'measure'
                   , startTime:	startMark
                   , duration:		endMark - startMark
               });
             }
           };
         }
         if( !performance.getEntriesByType ){
           performance.getEntriesByType = performance.webkitGetEntriesByType || function (type){
             return _filterEntries('entryType', type);
           };
         }
         if( !performance.getEntriesByName ){
           performance.getEntriesByName = performance.webkitGetEntriesByName || function (name){
             return _filterEntries('name', name);
           };
         }
         if( !performance.clearMarks ){
           performance.clearMarks = performance.webkitClearMarks || function (name){
             _clearEntries('mark', name);
           };
         }
         if( !performance.clearMeasures ){
           performance.clearMeasures = performance.webkitClearMeasures || function (name){
             _clearEntries('measure', name);
           };
         }
         // exports
         window.performance = performance;
         
         if( typeof define === 'function' && (define.amd || define.ajs) ){
           define('performance', [], function (){ return performance });
         }
         }
         })(typeof window !== 'undefined' ? window : null);
         /* eslint-enable */
         
         /* eslint-disable */
         var perfSession = {
         initialTimestamp: Date.now(),
         serverTiming: [],
         cache: { type: 'INC', time: '-' },
         initialRequestTimestamp: performance.timeOrigin ? performance.timeOrigin : Date.now() - performance.now(),
         addMark: (function() {
         var prevMark = 'fetchStart';
         
         return function (name, code) {
           if (name && performance.mark) {
             var mark = name + ' (mark ' + code + ') - ' + perfSession.getNetwork();
         
             performance.mark(mark);
         
             if (performance.measure) {
               performance.measure('\u2B50' + mark, prevMark, mark);
             }
         
             prevMark = mark;
           }
         };
         })(),
         getNetwork: function () {
         return (navigator.connection && navigator.connection.effectiveType) || 'unknown';
         },
         };
         
         perfSession.addMark('Init', 1);
         
         (function () {
         if (window.PerformanceServerTiming) {
         var navItems = performance.getEntriesByType('navigation');
         
         if (navItems && navItems[0] && navItems[0].serverTiming) {
           perfSession.serverTiming = navItems[0].serverTiming;
         }
         }
         
         })();
         
         
      </script>
      <meta name="author" content="jojoBET">
      <meta name="apple-mobile-web-app-title" content="Jojobet: Türkiye'nin En Güvenilir Bahis ve Casino Sitesi - Jojobet Giriş">
      <meta name="HandheldFriendly" content="true">
      <meta name="Robots" content="index, follow">
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="search" type="application/opensearchdescription+xml" href="/static/xml/opensearch.xml" title="Search the Operator">
      <style type="text/css">body,html{font-size:10px}#PageSpinner{position:fixed;margin:0;padding:0;display:flex;justify-content:center;align-items:center;width:100%;height:100vh;background:var(--PageSpinner-background);z-index:9999999;visibility:visible;opacity:1}#PageSpinner.Hide{visibility:hidden;opacity:0;transition:visibility .3s linear,opacity .3s linear}#PageSpinner .MainIcon{display:block;animation:slideMainIcon 2s infinite;width:150px}@keyframes slideMainIcon{from{transform:translateY(-15px)}50%{transform:translateY(5px)}to{transform:translateY(-15px)}}#PageSpinner .LoadingScreen{position:relative;width:250px;height:250px;border-radius:50%;background:linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to));animation:animateLoadingScreen 1.2s linear infinite}@keyframes animateLoadingScreen{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}#PageSpinner .LoadingScreen span{position:absolute;width:100%;height:100%;border-radius:50%;background:linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to))}#PageSpinner .LoadingScreen span:nth-child(1){filter:blur(5px)}#PageSpinner .LoadingScreen span:nth-child(2){filter:blur(10px)}#PageSpinner .LoadingScreen span:nth-child(3){filter:blur(25px)}#PageSpinner .LoadingScreen span:nth-child(4){filter:blur(100px)}#PageSpinner .LoadingScreen:after{content:"";position:absolute;top:10px;left:10px;right:10px;bottom:10px;background:var(--Circle-background);border-radius:50%;opacity:.9}#PageSpinner .Logo{z-index:1;position:absolute}@keyframes animateCircleSpin{from{stroke-dashoffset:2512}to{stroke-dashoffset:0}}#PageSpinner .Circle{position:absolute;top:50%;left:50%;overflow:visible!important;transform:translate3d(-50%,-50%,0) rotate(-90deg);transform-origin:center}#PageSpinner .Circle circle{fill:#fff0;stroke-width:4;stroke-dasharray:1256}#PageSpinner .Circle circle:first-of-type{stroke:rgb(255 255 255 / .1)}#PageSpinner .Circle circle:nth-of-type(2){stroke:var(--Circle-color);animation:animateCircleSpin infinite cubic-bezier(.39,.575,.565,1) 4s}.MRIExpand{width:100%;max-height:calc(100vh - env(safe-area-inset-top) - 3rem);overflow:auto;position:fixed;top:0;padding-top:calc(env(safe-area-inset-top) + 3rem);background-color:#fff;z-index:9999}.MRIExpand.Hidden{display:none}.MRIExpand table{width:100%}.MRIExpand table tr:nth-child(odd){background-color:#dedede}.MRIExpand table tr:nth-child(even){background-color:#ccc}.MRIExpand table td,.MRIExpand table th{padding:.1rem .5rem;border-collapse:collapse;border:1px solid #b3b3b3}.MRIExpand .MRIClose{position:absolute;right:0;background:0 0;font-size:18px;border-radius:5rem;width:3rem;height:3rem;line-height:14px;top:calc(env(safe-area-inset-top) + 0px);padding:0}.RootContent{position:relative;min-height:100vh}.AppVersion{position:absolute;bottom:.5rem;left:50%;transform:translateX(-50%);font-size:10px;color:#fff;text-shadow:1px 1px 1px #000;z-index:5}.LoadingScreen .AppVersion{position:fixed}.BrowserUpgrade{display:block;padding:1rem;background:#fff;color:#000;border:1px solid #f33}</style>
      <style type="text/css">:root{
         --PageSpinner-background: #0e1f04;
         --Circle-background: #0e1f04;
         --LoadingScreen-color-from: #F5C51F;
         --LoadingScreen-color-to: #F49920;
         --Circle-color: rgba(244, 129, 32, 1);
         }
      </style>
      
      <title>Jojobet: Türkiye'nin En Güvenilir Bahis ve Casino Sitesi - Jojobet Giriş</title>
      <meta name="description" content="Jojobet Türkiye'nin en iyi spor bahisleri ve casino sitesidir. Şimdi Jojobet giriş yapın ve en iyi şans oyunları deneyimini yaşayın.">
      <meta name="keywords" content="Yüksek Bahis Oranları, Canlı Bahisler, Casino Oyunları">
      <link rel="shortcut icon" sizes="32x32" href="/static/img/favicon-32x32.png" type="image/png">
      <link rel="icon" sizes="16x16" href="/static/img/favicon-16x16.png" type="image/png">
      <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="/static/img/android-chrome-192x192.png">
      <link rel="mask-icon" href="/static/img/safari-pinned-tab.svg" color="#000000">
      <link rel="icon" href="/static/img/favicon.ico">
      <link rel="canonical" href="//www.jojobet991.com/tr/sports/i/">
      <meta name="msapplication-TileImage" content="/static/img/mstile-150x150.png">
      <meta name="msapplication-TileColor" content="#294c0b">
      <meta name="theme-color" content="#294c0b">
      <link rel="manifest" href="/static/xml/site.webmanifest">
      <style data-emotion=""></style>
      <link rel="stylesheet" href="https://static.glastcoper.com/omfe-widgets/p/widgets/1.29.16/widgets.min.css">
      <script src="https://static.glastcoper.com/omfe-widgets/p/widgets/1.29.16/widgets.min.js"></script>
      <meta name="applicationName" content="jojoBET">
      <meta name="msApplicationTileColor" content="#294c0b">
      <link href="https://bannermatrix.nwacdn.com/assets/widgets/0.21.3/index.html" rel="import">
   </head>
   <body itemscope="" itemtype="http://schema.org/WebPage" dir="ltr" class="Page-Sports Page-Home Page-Casino Page-SportsSource Body HasMobileBottomNavigation IsScrolled" data-reactroot="">
      <a class="Hidden SkipLink" href="#content">Sayfa içeriğine ilerle</a>
      <div class="">
         <!--[if lt IE 8]>
         <p class="BrowserUpgrade">Kullandığınız tarayıcının güncellemesi mevcuttur. Kullanıcızı güncellemek için lütfen <a href="http://browsehappy.com/">buraya</a> tıklayın ve sitemizdeki deneyiminizi geliştirin.</p>
         <![endif]-->
      </div>
      <div id="PageSpinner" class="Hide">
         <div class="Logo">
            <svg class="Circle" width="220" height="220">
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
            </svg>
            <span class="SvgIcon MainIcon">
               <svg width="150" class="LogoFill" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 388.35 79.17" style="enable-background:new 0 0 388.35 79.17" xml:space="preserve">
                  <style>.Rs3vg{clip-path:url(#SVGID_8_);fill:#f6eb1f}</style>
                  <defs>
                     <path id="SVGID_1_" d="M46 8.31c-.08.08-.15.16-.22.25-1.85 2.66-4.35 4.49-7.34 5.67-2.8 1.1-5.72 1.56-8.71 1.63-.33.01-.66 0-.99 0-.07.3-.14.51-.18.73-.52 3.37-1.03 6.75-1.54 10.12-.64 4.17-1.27 8.34-1.91 12.51-.64 4.2-1.28 8.4-1.93 12.59-.43 2.8-.86 5.6-1.34 8.39-.26 1.51-.72 2.97-1.51 4.3-.89 1.5-2.2 2.42-3.94 2.63-1.37.16-2.71.1-3.84-.92-1.83 1.87-3.74 3.55-5.82 5.05-2.1 1.5-4.33 2.77-6.73 3.92 1.26 1.14 2.59 1.92 4.05 2.49 1.56.6 3.19.95 4.84 1.17l2.29.33h6.67c.24-.06.47-.13.71-.16 2.78-.32 5.46-1.01 7.96-2.29 4.96-2.54 8.58-6.26 10.28-11.67.18-.58.37-1.16.55-1.75 1.26-4.27 1.83-8.68 2.49-13.07.7-4.58 1.38-9.17 2.07-13.75l2.1-13.83c.7-4.61 1.39-9.22 2.08-13.83.03-.17.03-.35.05-.53-.09.01-.13 0-.14.02"></path>
                  </defs>
                  <clipPath id="SVGID_2_">
                     <use xlink:href="#SVGID_1_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.591 4471.954 4742.568) scale(119.7106)">
                     <stop offset="0" style="stop-color:#fff"></stop>
                     <stop offset=".145" style="stop-color:#f5f5f5"></stop>
                     <stop offset=".393" style="stop-color:#dadadb"></stop>
                     <stop offset=".71" style="stop-color:#aeafb0"></stop>
                     <stop offset="1" style="stop-color:#808184"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_2_);fill:url(#SVGID_3_)" d="m.18 5.39-4.61 73.5 50.39 3.16 4.61-73.49z"></path>
                  <defs>
                     <path id="SVGID_4_" d="M143.6 8.51c-1.87 2.72-4.43 4.57-7.48 5.75-2.78 1.08-5.67 1.53-8.64 1.59-.32.01-.65.03-.97.04-.06.2-.11.33-.13.47-.51 3.37-1.03 6.75-1.54 10.12-.63 4.14-1.27 8.28-1.9 12.43-.64 4.2-1.28 8.39-1.93 12.59-.44 2.82-.86 5.65-1.34 8.47-.28 1.62-.78 3.17-1.61 4.61-1.6 2.8-5.67 3.32-7.75 1.63-1.8 1.84-3.74 3.54-5.83 5.05-2.08 1.5-4.32 2.74-6.68 3.92 1.17 1.05 2.36 1.78 3.68 2.33 1.65.69 3.38 1.06 5.15 1.31l2.38.33h6.5c.24-.05.48-.13.72-.15 2.05-.22 4.07-.63 5.98-1.39 6.1-2.43 10.5-6.51 12.49-12.94 1.05-3.38 1.76-6.82 2.29-10.31.7-4.58 1.38-9.17 2.07-13.75l2.1-13.83c.76-5.02 1.52-10.04 2.27-15.07l.51-3.48c-.17.08-.27.17-.34.28"></path>
                  </defs>
                  <clipPath id="SVGID_5_">
                     <use xlink:href="#SVGID_4_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.591 4517.797 4791.378) scale(119.7106)">
                     <stop offset="0" style="stop-color:#fff"></stop>
                     <stop offset=".145" style="stop-color:#f5f5f5"></stop>
                     <stop offset=".393" style="stop-color:#dadadb"></stop>
                     <stop offset=".71" style="stop-color:#aeafb0"></stop>
                     <stop offset="1" style="stop-color:#808184"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_5_);fill:url(#SVGID_6_)" d="m97.99 5.36-4.62 73.53 50.41 3.16 4.61-73.53z"></path>
                  <defs>
                     <path id="SVGID_7_" d="M0 0h388.35v79.17H0z"></path>
                  </defs>
                  <clipPath id="SVGID_8_">
                     <use xlink:href="#SVGID_7_" style="overflow:visible"></use>
                  </clipPath>
                  <path class="Rs3vg" d="M127.71 7.94c.39 0 .69.02.98 0 1.46-.14 2.93-.22 4.37-.46 3.04-.5 5.88-1.57 8.39-3.4 1.51-1.11 2.82-2.4 3.73-4.07h-16.33c-.37 2.61-.75 5.23-1.14 7.93M30.98.74c-.3 2.06-.62 4.11-.92 6.16-.05.32-.06.64-.09 1 .22.02.36.05.49.05 2.7-.08 5.36-.39 7.94-1.24 2.92-.96 5.53-2.42 7.59-4.75.52-.6.91-1.31 1.36-1.97H31.02c-.01.26 0 .51-.04.75"></path>
                  <defs>
                     <path id="SVGID_9_" d="M176.35 55.47c-3.1-.42-5.18-2.24-6.5-5.01-.77-1.61-1.06-3.34-1.11-5.09-.12-4.57.54-9.03 2.3-13.27 1.08-2.6 2.74-4.75 5.08-6.34 2.24-1.52 4.71-2.1 7.37-1.71 3.07.45 5.07 2.35 6.34 5.08.6 1.3.88 2.69.99 4.11.06.72.01 1.44.01 2.16-.03 3.91-.64 7.74-2 11.42-.92 2.49-2.3 4.68-4.39 6.36-1.97 1.59-4.17 2.4-6.58 2.4-.49-.01-1-.04-1.51-.11m.33-46.99c-10.8 1.68-18.9 7.45-24.57 16.7-2.57 4.2-4.01 8.82-4.74 13.67-.6 3.98-.73 7.98.17 11.93 2 8.84 7.11 15.09 15.63 18.38 4.17 1.61 8.56 2.08 13.28 2.09 2.11-.03 4.49-.16 6.85-.56 11.15-1.86 19.39-7.84 24.89-17.64 2.21-3.94 3.47-8.22 4.13-12.67.61-4.06.74-8.14-.14-12.17-1.98-9.07-7.19-15.37-16.08-18.36-4-1.35-8.09-1.94-12.21-1.94-2.39-.01-4.8.19-7.21.57"></path>
                  </defs>
                  <clipPath id="SVGID_10_">
                     <use xlink:href="#SVGID_9_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.591 4545.313 4820.675) scale(119.7106)">
                     <stop offset="0" style="stop-color:#fff"></stop>
                     <stop offset=".145" style="stop-color:#f5f5f5"></stop>
                     <stop offset=".393" style="stop-color:#dadadb"></stop>
                     <stop offset=".71" style="stop-color:#aeafb0"></stop>
                     <stop offset="1" style="stop-color:#808184"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_10_);fill:url(#SVGID_11_)" d="M146.9 3.75 142.68 71l70.12 4.4 4.22-67.25z"></path>
                  <defs>
                     <path id="SVGID_12_" d="M78.57 55.46c-3.17-.44-5.27-2.33-6.55-5.18-.89-1.99-1.07-4.12-1.04-7.19.08-2.97.65-6.77 2.06-10.41 1.1-2.84 2.8-5.23 5.35-6.95 2.22-1.49 4.67-2.07 7.29-1.7 3.04.43 5.05 2.27 6.34 4.96.76 1.58 1.06 3.28 1.11 5.01.12 4.77-.63 9.41-2.47 13.83-.93 2.22-2.33 4.09-4.26 5.56-1.9 1.45-4.01 2.18-6.28 2.18-.51 0-1.03-.04-1.55-.11M80.11 8.3c-4.63.56-9.02 1.89-13.04 4.27-8.48 5.02-14.02 12.32-16.54 21.85-1.39 5.24-1.93 10.56-.84 15.91 1.86 9.04 7.01 15.44 15.68 18.82 4.17 1.62 8.55 2.09 13 2.17 1.69-.11 3.38-.19 5.07-.33.86-.07 1.71-.2 2.56-.35 11.57-2.13 19.9-8.58 25.17-19.02 1.94-3.85 2.99-7.99 3.53-12.26.49-3.89.49-7.76-.37-11.59-1.22-5.42-3.8-10.05-8.1-13.63-3.16-2.63-6.83-4.22-10.81-5.12-3.17-.72-6.36-1.06-9.57-1.06-1.9-.01-3.82.11-5.74.34"></path>
                  </defs>
                  <clipPath id="SVGID_13_">
                     <use xlink:href="#SVGID_12_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.591 4499.407 4771.797) scale(119.7106)">
                     <stop offset="0" style="stop-color:#fff"></stop>
                     <stop offset=".145" style="stop-color:#f5f5f5"></stop>
                     <stop offset=".393" style="stop-color:#dadadb"></stop>
                     <stop offset=".71" style="stop-color:#aeafb0"></stop>
                     <stop offset="1" style="stop-color:#808184"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_13_);fill:url(#SVGID_14_)" d="m48.86 3.78-4.22 67.28 70.3 4.42 4.22-67.28z"></path>
                  <defs>
                     <path id="SVGID_15_" d="M386.44 7.96c-13.25.01-26.5.02-39.74.02H345c-1.38 0-2.75 0-4.13.01-.87.01-1.07.18-1.27 1.01-.04.16-.06.33-.09.49-.49 3.1-.98 6.19-1.46 9.29a582.4 582.4 0 0 0-.62 4.11c-.09.64.04.81.66.88.3.03.61.02.92.02h13.58c.32 0 .63.02 1.01.04a17546.392 17546.392 0 0 0-3.78 25.06c-1.05 6.97-2.11 13.94-3.17 20.91-.21 1.39-.17 1.44 1.2 1.44 4.47.01 8.94.01 13.42.01 1.41 0 1.49-.05 1.7-1.44.64-4.17 1.26-8.34 1.89-12.51l2.07-13.66c.81-5.32 1.62-10.65 2.42-15.97.19-1.25.39-2.51.59-3.83h.96l13.66-.03c.25 0 .5.01.75-.01.6-.04.77-.18.94-.76.06-.19.09-.38.12-.57l1.65-10.78c.1-.68.22-1.35.33-2.03V8c-.63-.01-1.25-.04-1.88-.04h-.03z"></path>
                  </defs>
                  <clipPath id="SVGID_16_">
                     <use xlink:href="#SVGID_15_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.366 3677.83 3878.622) scale(93.6424)">
                     <stop offset="0" style="stop-color:#f6eb1f"></stop>
                     <stop offset=".167" style="stop-color:#f6e11f"></stop>
                     <stop offset=".454" style="stop-color:#f5c51f"></stop>
                     <stop offset=".823" style="stop-color:#f49920"></stop>
                     <stop offset="1" style="stop-color:#f48120"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_16_);fill:url(#SVGID_17_)" d="m337.51 4.97-3.89 66.07 54.55 3.21 3.89-66.07z"></path>
                  <defs>
                     <path id="SVGID_18_" d="M211.27 7.96c-.2 0-.41.04-.75.07 4.96 4.31 7.97 9.63 9.61 15.8h30.9c.3 0 .61-.01.91.01 2.21.11 3.66 2.02 3.14 4.16-.43 1.76-1.57 2.92-3.27 3.47-.57.19-1.2.21-1.8.22-7.05.01-14.1.01-21.15.01h-6.68c-.32 0-.64.02-1.01.03.15 5.39-.6 10.57-2.07 15.79h31.03c.33 0 .67-.01 1 .01 2.16.15 3.55 1.92 3.17 4.03-.35 1.91-2.1 3.57-4.05 3.79-.44.05-.89.05-1.33.05h-32.08c-.52 0-.9.04-1.2.62-3.07 5.85-7.28 10.73-12.57 14.68-.14.11-.26.24-.51.47h1.07c11.66 0 23.33-.05 34.99.02 4.94.03 9.81-.46 14.67-1.2 2.63-.4 5.15-1.16 7.4-2.64 6.67-4.39 10.18-10.48 9.79-18.56-.18-3.61-1.82-6.53-4.86-8.6-1.46-.99-3.06-1.68-4.74-2.2-.44-.14-.88-.27-1.47-.45.37-.16.58-.26.8-.35.84-.35 1.71-.67 2.53-1.07 4.07-2 6.94-5.12 8.5-9.39 1.09-2.99 1.43-6.07.52-9.16-1.25-4.23-4.12-6.95-8.23-8.4-2.6-.92-5.29-1.22-8.03-1.22h-22.12c-7.36.01-14.73.01-22.11.01"></path>
                  </defs>
                  <clipPath id="SVGID_19_">
                     <use xlink:href="#SVGID_18_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.366 3618.9 3816.123) scale(93.6424)">
                     <stop offset="0" style="stop-color:#f6eb1f"></stop>
                     <stop offset=".167" style="stop-color:#f6e11f"></stop>
                     <stop offset=".454" style="stop-color:#f5c51f"></stop>
                     <stop offset=".823" style="stop-color:#f49920"></stop>
                     <stop offset="1" style="stop-color:#f48120"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_19_);fill:url(#SVGID_20_)" d="M202.82 3.85 198.87 71l73.57 4.33 3.95-67.16z"></path>
                  <defs>
                     <path id="SVGID_21_" d="M282.17 9.1c-.44 3.11-.86 6.21-1.31 9.32-.64 4.39-1.29 8.79-1.95 13.18-.68 4.47-1.38 8.94-2.07 13.41-.69 4.47-1.39 8.94-2.09 13.41-.59 3.81-1.16 7.63-1.77 11.44-.2 1.23-.16 1.41 1.25 1.41 11.75-.01 23.5-.01 35.25-.01 3.47 0 6.94.01 10.42-.01 1.69-.01 1.87-.18 2.11-1.86.55-3.71 1.09-7.41 1.63-11.12.08-.58.18-1.15.2-1.74.02-.63-.31-.98-.94-1.06-.3-.04-.61-.02-.91-.02H291.47c.4-2.69.79-5.28 1.18-7.94h15.23c1.09 0 1.24-.13 1.42-1.18l.03-.25c.63-4.2 1.25-8.4 1.88-12.6.26-1.71.19-1.79-1.56-1.79-4.58.01-9.17 0-13.75.01h-.88c.43-2.7.84-5.29 1.27-7.98h.78l8.67.03 22.16.06c1 0 1.06-.06 1.23-1.05.01-.06.01-.11.02-.17.65-4.39 1.31-8.78 1.97-13.17.2-1.33.14-1.43-1.22-1.43-4.47 0-8.94 0-13.41-.01-11-.01-22-.01-33-.02-1.09 0-1.16.07-1.32 1.14"></path>
                  </defs>
                  <clipPath id="SVGID_22_">
                     <use xlink:href="#SVGID_21_" style="overflow:visible"></use>
                  </clipPath>
                  <linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="0" y1="79.166" x2="1" y2="79.166" gradientTransform="rotate(93.366 3649.225 3848.285) scale(93.6424)">
                     <stop offset="0" style="stop-color:#f6eb1f"></stop>
                     <stop offset=".167" style="stop-color:#f6e11f"></stop>
                     <stop offset=".454" style="stop-color:#f5c51f"></stop>
                     <stop offset=".823" style="stop-color:#f49920"></stop>
                     <stop offset="1" style="stop-color:#f48120"></stop>
                  </linearGradient>
                  <path style="clip-path:url(#SVGID_22_);fill:url(#SVGID_23_)" d="m272.99 4.53-3.91 66.51 62.05 3.65 3.91-66.51z"></path>
               </svg>
            </span>
         </div>
         <div class="LoadingScreen"><span></span><span></span><span></span><span></span></div>
         <div class="">
            <div class="AppVersion" onclick="openMri()">1.0.798</div>
         </div>
      </div>
      <div id="AppContainer" class="AppContainer">
         <div class="RootContent BaseSwipe">
            <header class="SectionHeader" id="HeaderElement">
               <div class="OperatorMaxwidth ComponentLayout Layout HeaderContainer">
                  <div class="OperatorMobileNavMock"></div>
                  <div class="OperatorLogo">
                     <a class="ComponentAnchor OperatorLogoLink Anchor" href="/tr">
                        <span class="ComponentIcon Icon">
                           <span class="SvgIcon MainIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 411 118">
                                 <image width="411" height="118" xlink:href="data:image/png;base64,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" transform="translate(-.5)" overflow="visible"></image>
                              </svg>
                           </span>
                        </span>
                     </a>
                  </div>
                  <div class="OperatorHeaderContainer">
                     <div class="OperatorAccountContainer ComponentLayout Layout">
                        <a class="ComponentAnchor Button ButtonRegister ComponentAnchor Anchor  Anchor" id="RegisterButton-Header" href="/tr/register"><span class="AnchorText" id="RegisterButton-Header-Text">Kayıt Ol</span></a><button type="button" class="Button ButtonLogin InstanceOperatorLoginLink" id="Header" data-disable-click="false"><span class="AnchorText" id="Header-Text">Giriş</span></button>
                        <a class="ComponentAnchor IosAppPageLinkWrapper Anchor" href="/tr/ios-app">
                           <span class="IosAppPageLinkIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 814 1000" height="36" width="28">
                                 <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76.5 0-103.7 40.8-165.9 40.8s-105.6-57-155.5-127C46.7 790.7 0 663 0 541.8c0-194.4 126.4-297.5 250.8-297.5 66.1 0 121.2 43.4 162.7 43.4 39.5 0 101.1-46 176.3-46 28.5 0 130.9 2.6 198.3 99.2zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z" fill="currentColor"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="ComponentAnchor WhatsappIconWrapper Anchor" href="https://storage.googleapis.com/stateless-jojobet/2024/12/073fe9f3-jojobet-release-1.0.5.apk">
                           <span class="CallIcon">
                              <svg fill="currentColor" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.679 299.679" xml:space="preserve">
                                 <g id="XMLID_197_">
                                    <path id="XMLID_221_" d="M181.122,299.679c10.02,0,18.758-8.738,18.758-18.758v-43.808h12.525c7.516,0,12.525-5.011,12.525-12.525 V99.466H74.749v125.123c0,7.515,5.01,12.525,12.525,12.525H99.8v43.808c0,10.02,8.736,18.758,18.758,18.758 c10.019,0,18.756-8.738,18.756-18.758v-43.808h25.051v43.808C162.364,290.941,171.102,299.679,181.122,299.679z"></path>
                                    <path id="XMLID_222_" d="M256.214,224.589c10.02,0,18.756-8.737,18.756-18.758v-87.615c0-9.967-8.736-18.75-18.756-18.75 c-10.021,0-18.758,8.783-18.758,18.75v87.615C237.456,215.851,246.192,224.589,256.214,224.589z"></path>
                                    <path id="XMLID_223_" d="M43.466,224.589c10.021,0,18.758-8.737,18.758-18.758v-87.615c0-9.967-8.736-18.75-18.758-18.75 c-10.02,0-18.756,8.783-18.756,18.75v87.615C24.71,215.851,33.446,224.589,43.466,224.589z"></path>
                                    <path id="XMLID_224_" d="M209.899,1.89c-2.504-2.52-6.232-2.52-8.736,0l-16.799,16.743l-0.775,0.774 c-9.961-4.988-21.129-7.479-33.566-7.503c-0.061,0-0.121-0.002-0.182-0.002h-0.002c-0.063,0-0.121,0.002-0.184,0.002 c-12.436,0.024-23.604,2.515-33.564,7.503l-0.777-0.774L98.516,1.89c-2.506-2.52-6.232-2.52-8.736,0 c-2.506,2.506-2.506,6.225,0,8.729l16.25,16.253c-5.236,3.496-9.984,7.774-14.113,12.667C82.032,51.256,75.727,66.505,74.86,83.027 c-0.008,0.172-0.025,0.342-0.033,0.514c-0.053,1.125-0.078,2.256-0.078,3.391H224.93c0-1.135-0.027-2.266-0.078-3.391 c-0.008-0.172-0.025-0.342-0.035-0.514c-0.865-16.522-7.172-31.772-17.057-43.487c-4.127-4.893-8.877-9.171-14.113-12.667 l16.252-16.253C212.405,8.115,212.405,4.396,209.899,1.89z M118.534,65.063c-5.182,0-9.383-4.201-9.383-9.383 c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383C127.917,60.862,123.716,65.063,118.534,65.063z M181.145,65.063 c-5.182,0-9.383-4.201-9.383-9.383c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383 C190.528,60.862,186.327,65.063,181.145,65.063z"></path>
                                 </g>
                              </svg>
                           </span>
                        </a>
                        <div class="ComponentSiteLanguageSelector LanguageSelectorContainer CustomSelect OperatorTopLanguage">
                           <div class="CustomSelectTrigger">
                              <div class="LanguageSelectorSVGFlag">
                                 <span class="Icon">
                                    <span class="SvgIcon MainIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 87.51">
                                          <defs>
                                             <clipPath id="clip-path">
                                                <path class="cls-1" d="M0 0h150v87.51H0z"></path>
                                             </clipPath>
                                             <style>#tr-layer .cls-1{fill:none}#tr-layer .cls-2{clip-path:url(#clip-path)}#tr-layer .cls-3{fill:#d00027}#tr-layer .cls-4{fill:#fff}</style>
                                          </defs>
                                          <g id="tr-layer" data-name="Layer 2">
                                             <g class="cls-2" id="Layer_1-2" data-name="Layer 1">
                                                <path class="cls-3" d="M0 0h150v87.51H0z"></path>
                                                <g class="cls-2">
                                                   <path class="cls-4" d="M43.78 21.86a21.87 21.87 0 11-21.87 21.87 21.86 21.86 0 0121.87-21.87"></path>
                                                   <path class="cls-3" d="M49.22 26a17.71 17.71 0 11-17.44 17.73A17.51 17.51 0 0149.22 26"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45 3.68 1.81-5.23-12.26 1.55z"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45-3.1 1.81 5.18-12.26-2.08z"></path>
                                                   <path class="cls-4" d="M69.8 33.33v10.93h5.44L69.8 33.33z"></path>
                                                   <path class="cls-4" d="M69.8 33.33l6.5 8.85-4.42 3.15-2.08-12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18l6.5-8.85-4.42-3.15-2.08 12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18V43.25h5.44L69.8 54.18z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-10.4 3.14 1.81 5.18 8.59-8.32z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-6.24 8.85-4.69-3.09 10.93-5.76z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-6.24-8.86-4.69 3.68 10.93 5.18z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-10.4-3.1 1.81-5.22 8.59 8.32z"></path>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </span>
                                 <span class="LanguageSelectorSelectedText">Türkçe</span><span class="LanguageSelectorSelectedCode">tr</span>
                              </div>
                           </div>
                           <ul class="CustomListContainer List ListUnordered HeaderLanguageSelector">
                              <li class="CustomSelectOption ListItem" title="English">
                                 <div class="LanguageSelectorSVGFlag">
                                    <span class="Icon">
                                       <span class="SvgIcon MainIcon">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 21">
                                             <image width="40" height="21" xlink:href="data:image/png;base64,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"></image>
                                          </svg>
                                       </span>
                                    </span>
                                    <span class="LanguageSelectorSelectedText">English</span><span class="LanguageSelectorSelectedCode">en</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <nav class="OperatorMainMenu ComponentMenu NavMenu">
                        <button type="button" disabled="" class="MainNavScrollBtn LeftNavScrollBtn">
                           <span class="ComponentIcon Icon">
                              <span class="SvgIcon MainIcon">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.63 55.06">
                                    <g data-name="Layer 2">
                                       <path d="M34.63 27.53L31.09 24l-24-24L0 7.06l20.47 20.47L0 48l7.09 7.06 24-24 3.54-3.53z" data-name="Layer 1"></path>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </button>
                        <ul class="Menu Vertical List ListUnordered">
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon" href="/tr/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon"><span class="AnchorText" id="DesktopNavButton-/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon-Text">Özel Oranlar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino/games/mobil-oyunlar:jojobet-high-flyer-68291/?prevRoute=%2Fcasino%2Fcat%2Fmobil-oyunlar" href="/tr/casino/games/mobil-oyunlar:jojobet-high-flyer-68291/?prevRoute=%2Fcasino%2Fcat%2Fmobil-oyunlar"><span class="AnchorText" id="DesktopNavButton-/casino/games/mobil-oyunlar:jojobet-high-flyer-68291/?prevRoute=%2Fcasino%2Fcat%2Fmobil-oyunlar-Text">Jojo Flyer</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/games/poker-klas:poker-klas-37036/?prevRoute=%2Flive-casino%2Fcat%2Fpoker-klas" href="/tr/live-casino/games/poker-klas:poker-klas-37036/?prevRoute=%2Flive-casino%2Fcat%2Fpoker-klas"><span class="AnchorText" id="DesktopNavButton-/live-casino/games/poker-klas:poker-klas-37036/?prevRoute=%2Flive-casino%2Fcat%2Fpoker-klas-Text">Poker Klas</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  IsActive Anchor" id="DesktopNavButton-/sports/i" href="/tr/sports/i"><span class="AnchorText" id="DesktopNavButton-/sports/i-Text">Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-sports/i" href="/tr/live-sports/i"><span class="AnchorText" id="DesktopNavButton-/live-sports/i-Text">Canlı Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/cat/canlı-oyunlar" href="/tr/live-casino/cat/canlı-oyunlar"><span class="AnchorText" id="DesktopNavButton-/live-casino/cat/canlı-oyunlar-Text">Canlı Oyunlar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino" href="/tr/live-casino"><span class="AnchorText" id="DesktopNavButton-/live-casino-Text">Canlı Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino" href="/tr/casino"><span class="AnchorText" id="DesktopNavButton-/casino-Text">Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino/games/loto:canlı-loto-49160/?prevRoute=%2Flive-casino%2Fcat%2Floto" href="/tr/live-casino/games/loto:canlı-loto-49160/?prevRoute=%2Flive-casino%2Fcat%2Floto"><span class="AnchorText" id="DesktopNavButton-/live-casino/games/loto:canlı-loto-49160/?prevRoute=%2Flive-casino%2Fcat%2Floto-Text">Canlı Loto</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/promotions" href="/tr/promotions"><span class="AnchorText" id="DesktopNavButton-/promotions-Text">Promosyonlar</span></a></li>
                           <li class="MenuItem ListItem"><a target="_blank" class="ComponentAnchor  Anchor" href="https://dub.is/jojodiscount" id="DesktopNavButton-https://dub.is/jojodiscount"><span class="AnchorText" id="DesktopNavButton-https://dub.is/jojodiscount-Text">Discount Talep Et</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/tournaments/all" href="/tr/tournaments/all"><span class="AnchorText" id="DesktopNavButton-/tournaments/all-Text">Turnuvalar</span></a></li>
                        </ul>
                        <button type="button" class="MainNavScrollBtn RightNavScrollBtn">
                           <span class="ComponentIcon Icon">
                              <span class="SvgIcon MainIcon">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.63 55.06">
                                    <g data-name="Layer 2">
                                       <path d="M34.63 27.53L31.09 24l-24-24L0 7.06l20.47 20.47L0 48l7.09 7.06 24-24 3.54-3.53z" data-name="Layer 1"></path>
                                    </g>
                                 </svg>
                              </span>
                           </span>
                        </button>
                     </nav>
                  </div>
               </div>
            </header>
            <section class="SectionContent ">
               <div class="SportsIframeWrapper">
                  <div class="DropDownBackground"></div>
                  <iframe id="SportsIframe" scrolling="no" class="SportsIframe" title="Sports Iframe" src="https://sports2.jojobet991.com/tr?basePath=https%3A%2F%2Fwww.jojobet991.com%2Ftr%2Fsports%2Fi" allow="autoplay;fullscreen;web-share" style="height: 3584px;"></iframe>
               </div>
               <div class="GameCategoriesWrapper">
                  <section id="Jojobet-anasayfa$jojobet-özel" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="JOJOBET ÖZEL" id="CategoryGameList-JOJOBET-ÖZEL" href="/tr/sports/cat/jojobet-özel">JOJOBET ÖZEL</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="45957">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Bonanza" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/A/A2B2A778548BFB276CB29D93DE98530B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Bonanza !" href="/tr/sports/games/jojobet-özel:jojo-bonanza-45957/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Bonanza</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="55682">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="UFO Galaxy" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/2/22F57C9A709058E74413E21CE73777FB.gif"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Aperion</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna UFO Galaxy !" href="/tr/sports/games/jojobet-özel:ufo-galaxy-55682/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">UFO Galaxy</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="61568">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="GhostX" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/5/5A3A457FACFC2F4D91E7DF8168B54939.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Aperion</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna GhostX !" href="/tr/sports/games/jojobet-özel:ghostx-61568/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">GhostX</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="67224">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Pearl Mines" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/8/82F005961E61A3BE1BB1A402F7D48521.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Aperion</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Pearl Mines !" href="/tr/sports/games/jojobet-özel:pearl-mines-67224/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Pearl Mines</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$türkçe-casino" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="Türkçe Casino" id="CategoryGameList-Türkçe-Casino" href="/tr/sports/cat/türkçe-casino">Türkçe Casino</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="33198055936">
                                 <div class="GameThumbailWrapper"><img alt="Jojo VIP BJ1" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/7/7B8AD0021FFCEFFCEE32A5920E2F330B.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo VIP BJ1 !" href="/tr/sports/games/türkçe-casino:jojo-vip-bj1-33198055936/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 500-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo VIP BJ1</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="34444079965">
                                 <div class="GameThumbailWrapper"><img alt="Jojo VIP BJ2" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/17A4822E42AA9646251C7165B51602F2.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo VIP BJ2 !" href="/tr/sports/games/türkçe-casino:jojo-vip-bj2-34444079965/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 500-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo VIP BJ2</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="37195003453">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack3" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/D/D79F1EC18181E4760BFEB6B15AE28D11.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack3 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack3-37195003453/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 200-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack3</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="37196081817">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack4" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/E/EEB0D94599D42383A2EC6ED4244B955F.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack4 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack4-37196081817/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 200-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack4</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="40456074900">
                                 <div class="GameThumbailWrapper"><img alt="Jojo Blackjack5" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/2/215E9D1D3AC7BDB58E53E3F69EEBE588.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack5 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack5-40456074900/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 200-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo Blackjack5</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="40457068309">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack6" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/8/87F39C21082CBC53B8E4ECF8E141FFD8.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack6 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack6-40457068309/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 50-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack6</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="46254037606">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack7" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/5/5F51EE7D51281489C7A89E740F874C71.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack7 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack7-46254037606/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 50-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack7</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="46255040383">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack8" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/D/D3C5C208BD91434B5183EA8DA330E123.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack8 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack8-46255040383/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 50-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack8</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="46256055917">
                                 <div class="GameThumbailWrapper"><img alt="Jojo Blackjack9" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/3/371BE985857E3E960B69D7F356FC6876.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack9 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack9-46256055917/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 50-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo Blackjack9</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="46257079818">
                                 <div class="GameThumbailWrapper"><img alt="Jojo Blackjack10" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/6/6170C5CAEF324D459D4617CFAC548F3B.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack10 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack10-46257079818/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 200-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo Blackjack10</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="61193000940">
                                 <div class="GameThumbailWrapper"><img alt="Jojo Blackjack11" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/3/399D21873E3CF3046CE22816D6A7691F.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack11 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack11-61193000940/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 100-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo Blackjack11</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem GameContainerDimmed" data-game-id="61285000247">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Blackjack12" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/192DE1BDD87C7C6E05FC1A7042CC235D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Blackjack12 !" href="/tr/sports/games/türkçe-casino:jojo-blackjack12-61285000247/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameProp LiveProps BlackJackProps">
                                          <div class="LiveIcons">
                                             <span class="FullTable">masa dolu - bet behind</span>
                                             <span class="ComponentIcon Icon InfoButton">
                                                <span class="SvgIcon MainIcon CustomHtml">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                      <defs>
                                                         <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                      </defs>
                                                      <g transform="translate(-2 -2)">
                                                         <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                         <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                         <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                      </g>
                                                   </svg>
                                                </span>
                                             </span>
                                          </div>
                                          <p class="LiveLimits"><span>₺</span> 100-2.000.000</p>
                                       </div>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Blackjack12</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-Türkçe-Casino" href="/tr/sports/cat/türkçe-casino">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-Türkçe-Casino-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-Türkçe-Casino-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-Türkçe-Casino-Total">62</span><span class="NoOfGames Difference" id="ViewAllGames-Türkçe-Casino-Diff">50</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-Türkçe-Casino-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-Türkçe-Casino-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$top-20-casino" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="Top 20 Casino" id="CategoryGameList-Top-20-Casino" href="/tr/sports/cat/top-20-casino">Top 20 Casino</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="70799">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Bonanza 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/8/816D486D12523CDEF8611B435E13A67E.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Bonanza 1000 !" href="/tr/sports/games/top-20-casino:jojo-bonanza-1000-70799/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Bonanza 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="69165">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Rush 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/9/9CC350D036CE47D87C456924E297A28B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Rush 1000 !" href="/tr/sports/games/top-20-casino:jojo-rush-1000-69165/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Rush 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="68350">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojobet Princess 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/B1172EA311869E107F1C4019D33E4220.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojobet Princess 1000 !" href="/tr/sports/games/top-20-casino:jojobet-princess-1000-68350/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojobet Princess 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="68291">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojobet High Flyer" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/B23F9BEB1E193ACAE3729984F95483EF.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojobet High Flyer !" href="/tr/sports/games/top-20-casino:jojobet-high-flyer-68291/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojobet High Flyer</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71357">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Starburst Jojobet" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/F/F792B3DE7FF067B29B236D879D819579.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Starburst Jojobet !" href="/tr/sports/games/top-20-casino:starburst-jojobet-71357/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Starburst Jojobet</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71150">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sweet Baklava" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/8/8A669E53691C7946A164801221A81A3F.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sweet Baklava !" href="/tr/sports/games/top-20-casino:sweet-baklava-71150/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sweet Baklava</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="62272">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Golden Catch" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/A/A369E23A865C452F98645ADBF1C2822B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Golden Catch !" href="/tr/sports/games/top-20-casino:golden-catch-62272/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Golden Catch</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71427">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Dragons' Lock" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/4/445C464CA5D2597233259AE426BBCA70.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Dragons' Lock !" href="/tr/sports/games/top-20-casino:dragons--lock-71427/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Dragons' Lock</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="64667">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sweet Bonanza 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/C/C661E29C0F1306CBF95558D970D28A01.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sweet Bonanza 1000 !" href="/tr/sports/games/top-20-casino:sweet-bonanza-1000-64667/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sweet Bonanza 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71371">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Bulky Dice 6 reels" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/9/927762E378EBD03250A8388EA682D16D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Bulky Dice 6 reels !" href="/tr/sports/games/top-20-casino:40-bulky-dice-6-reels-71371/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Bulky Dice 6 reels</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="31038">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sweet Bonanza™" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/B5B4835D0E37FE05BAAE4BE30B7B8BA0.gif"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sweet Bonanza™ !" href="/tr/sports/games/top-20-casino:sweet-bonanza™-31038/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sweet Bonanza™</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71273">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Brick House Bonanza" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/0/06FAB747CED1E4C18F482E951FD6DA55.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Brick House Bonanza !" href="/tr/sports/games/top-20-casino:brick-house-bonanza-71273/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Brick House Bonanza</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-Top-20-Casino" href="/tr/sports/cat/top-20-casino">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-Top-20-Casino-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-Top-20-Casino-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-Top-20-Casino-Total">20</span><span class="NoOfGames Difference" id="ViewAllGames-Top-20-Casino-Diff">8</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-Top-20-Casino-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-Top-20-Casino-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$top-20-canlı-casino" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="Top 20 Canlı Casino" id="CategoryGameList-Top-20-Canlı-Casino" href="/tr/sports/cat/top-20-canlı-casino">Top 20 Canlı Casino</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="66412096713">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Lightning Storm" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/1FC528B276D77F90A25324CBEF552DDA.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Lightning Storm !" href="/tr/sports/games/top-20-canlı-casino:lightning-storm-66412096713/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Lightning Storm</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="70557077136">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Infinite Bet Stacker Blackjack" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/F/F04AF211AEB5B93A727A35EC6B933F06.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Infinite Bet Stacker Blackjack !" href="/tr/sports/games/top-20-canlı-casino:infinite-bet-stacker-blackjack-70557077136/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Infinite Bet Stacker Blackjack</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="69733014651">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Crazy Balls" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/0/0CC0358ABDEAF4431CC03A572BF5AE3B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Crazy Balls !" href="/tr/sports/games/top-20-canlı-casino:crazy-balls-69733014651/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Crazy Balls</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="35744071237">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Crazy Time" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/1D9E31885F43C9978EE79D8A9D303A7A.optimized.png"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Crazy Time !" href="/tr/sports/games/top-20-canlı-casino:crazy-time-35744071237/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Crazy Time</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="47844030144">
                                 <div class="GameThumbailWrapper"><img alt="XXXTreme" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/6/6BB807C5E908AD06A4A7ADFFE19DCD0A.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna XXXTreme !" href="/tr/sports/games/top-20-canlı-casino:xxxtreme-47844030144/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps RoulleteProps">
                                    <div class="LiveIcons">
                                       <span class="LatestResult First Black">26</span><span class="LatestResult  Black">13</span><span class="LatestResult  Red">27</span><span class="LatestResult  Black">10</span><span class="LatestResult  Black">8</span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 4-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">XXXTreme</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="8345001034">
                                 <div class="GameThumbailWrapper"><img alt="Auto-Roulette" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/8/8DCFC5BD65131590FA14308F7D22DC0C.optimized.png"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Auto-Roulette !" href="/tr/sports/games/top-20-canlı-casino:auto-roulette-8345001034/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps RoulleteProps">
                                    <div class="LiveIcons">
                                       <span class="LatestResult First Black">31</span><span class="LatestResult  Black">8</span><span class="LatestResult  Black">26</span><span class="LatestResult  Black">11</span><span class="LatestResult  Black">8</span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 2-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Auto-Roulette</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="8345030379">
                                 <div class="GameThumbailWrapper"><img alt="Lightning Roulette" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/C/C173914865B023D3EAD93561A031EF06.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Lightning Roulette !" href="/tr/sports/games/top-20-canlı-casino:lightning-roulette-8345030379/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps RoulleteProps">
                                    <div class="LiveIcons">
                                       <span class="LatestResult First Black">6</span><span class="LatestResult  Black">35</span><span class="LatestResult  Black">24</span><span class="LatestResult  Red">27</span><span class="LatestResult  Black">31</span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 4-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Lightning Roulette</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="60521036579">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Crazy Pachinko" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/D/D0A8E996F0C69105DF747FDF69783C23.optimized.png"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Crazy Pachinko !" href="/tr/sports/games/top-20-canlı-casino:crazy-pachinko-60521036579/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Crazy Pachinko</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="8510079294">
                                 <div class="GameThumbailWrapper"><img alt="Immersive Roulette" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/6/6A2790ED3203BD3F78F469ABA0BAB58B.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Immersive Roulette !" href="/tr/sports/games/top-20-canlı-casino:immersive-roulette-8510079294/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps RoulleteProps">
                                    <div class="LiveIcons">
                                       <span class="LatestResult First Black">28</span><span class="LatestResult  Black">17</span><span class="LatestResult  Black">35</span><span class="LatestResult  Black">4</span><span class="LatestResult  Red">21</span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 10-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Immersive Roulette</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="40892081196">
                                 <div class="GameThumbailWrapper"><img alt="Lightning Rulet" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/F/F874484395C74C5FBC5BF056DCEA5FCF.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Lightning Rulet !" href="/tr/sports/games/top-20-canlı-casino:lightning-rulet-40892081196/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps RoulleteProps">
                                    <div class="LiveIcons">
                                       <span class="LatestResult First Black">2</span><span class="LatestResult  Red">23</span><span class="LatestResult  Black">28</span><span class="LatestResult  Red">1</span><span class="LatestResult  Black">24</span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 1-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Lightning Rulet</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="33198055936">
                                 <div class="GameThumbailWrapper"><img alt="Jojo VIP BJ1" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/7/7B8AD0021FFCEFFCEE32A5920E2F330B.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo VIP BJ1 !" href="/tr/sports/games/top-20-canlı-casino:jojo-vip-bj1-33198055936/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 500-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo VIP BJ1</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="34444079965">
                                 <div class="GameThumbailWrapper"><img alt="Jojo VIP BJ2" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/17A4822E42AA9646251C7165B51602F2.jpg"></div>
                                 <div class="GameProp GameVendor SubVendor" itemprop="author">Evolution</div>
                                 <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo VIP BJ2 !" href="/tr/sports/games/top-20-canlı-casino:jojo-vip-bj2-34444079965/?prevRoute=%2Fsports%2Fi%2F">
                                    <div class="GamePlayNowText">Hemen Oyna!</div>
                                 </a>
                                 <div class="GameProp LiveProps BlackJackProps">
                                    <div class="LiveIcons">
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="OpenSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ClosedSeat">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                             <path d="M11.58 6c-1.17 0-2.13.95-2.13 2.12v.4a8.82 8.82 0 00-2.92-.4c-1.54 0-2.45.22-2.92.4v-.4A2.136 2.136 0 001.48 6a1.33 1.33 0 00-.5 2.55c.14.07.24.21.24.37l.26 1.06c0 .96.73 1.75 1.65 1.85a.65.65 0 00.28 1.23.65.65 0 00.3-1.22h5.64a.65.65 0 00.3 1.22.65.65 0 00.28-1.23c.93-.1 1.65-.9 1.65-1.85l.27-1.06c0-.16.1-.3.24-.37A1.33 1.33 0 0011.58 6z"></path>
                                             <path d="M4.34 7.5c.55-.1 1.27-.17 2.2-.17.91 0 1.63.07 2.18.17.21-.96.9-1.74 1.8-2.1V4a3.99 3.99 0 00-7.97 0v1.4c.9.36 1.58 1.14 1.79 2.1z"></path>
                                          </svg>
                                       </span>
                                       <span class="ComponentIcon Icon InfoButton">
                                          <span class="SvgIcon MainIcon CustomHtml">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                                <defs>
                                                   <style>.BSkua{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                </defs>
                                                <g transform="translate(-2 -2)">
                                                   <path class="BSkua" d="M29,16A13,13,0,1,1,16,3,13,13,0,0,1,29,16Z" transform="translate(0 0)"></path>
                                                   <path class="BSkua" d="M18,24V18" transform="translate(-2 -2.5)"></path>
                                                   <path class="BSkua" d="M18,12h0" transform="translate(-2 -1.2)"></path>
                                                </g>
                                             </svg>
                                          </span>
                                       </span>
                                    </div>
                                    <p class="LiveLimits"><span>₺</span> 500-2.000.000</p>
                                 </div>
                                 <div class="GameDetails">
                                    <h3 class="GameTitle" itemprop="name">Jojo VIP BJ2</h3>
                                    <div class="GameTags"></div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-Top-20-Canlı-Casino" href="/tr/sports/cat/top-20-canlı-casino">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-Top-20-Canlı-Casino-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-Top-20-Canlı-Casino-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-Top-20-Canlı-Casino-Total">20</span><span class="NoOfGames Difference" id="ViewAllGames-Top-20-Canlı-Casino-Diff">8</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-Top-20-Canlı-Casino-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-Top-20-Canlı-Casino-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$pragmatic" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="Pragmatic" id="CategoryGameList-Pragmatic" href="/tr/sports/cat/pragmatic">Pragmatic</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="31038">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sweet Bonanza™" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/B5B4835D0E37FE05BAAE4BE30B7B8BA0.gif"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sweet Bonanza™ !" href="/tr/sports/games/pragmatic:sweet-bonanza™-31038/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sweet Bonanza™</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="39095">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Gates of Olympus™" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/2/252940F59CBF7EE193CCC8C5F4C83AD5.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Gates of Olympus™ !" href="/tr/sports/games/pragmatic:gates-of-olympus™-39095/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Gates of Olympus™</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="61019">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Gates of Olympus 1000™" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/C/CD41947800E2A0D265F0656631BF408C.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Gates of Olympus 1000™ !" href="/tr/sports/games/pragmatic:gates-of-olympus-1000™-61019/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Gates of Olympus 1000™</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="64667">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sweet Bonanza 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/C/C661E29C0F1306CBF95558D970D28A01.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sweet Bonanza 1000 !" href="/tr/sports/games/pragmatic:sweet-bonanza-1000-64667/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sweet Bonanza 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="54985">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Gates of Jojobet" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/4/49A720DE2ADC3D69808EED7A33639F7D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Gates of Jojobet !" href="/tr/sports/games/pragmatic:gates-of-jojobet-54985/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Gates of Jojobet</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="45957">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Bonanza" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/A/A2B2A778548BFB276CB29D93DE98530B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Bonanza !" href="/tr/sports/games/pragmatic:jojo-bonanza-45957/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Bonanza</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="63306">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sugar Rush 1000" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/0/0E746F46646A1A88457CC0F40418B939.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sugar Rush 1000 !" href="/tr/sports/games/pragmatic:sugar-rush-1000-63306/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sugar Rush 1000</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="48599">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Sugar Rush" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/9/9EE2D9863EFB308146470C516FDD64FD.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Sugar Rush !" href="/tr/sports/games/pragmatic:sugar-rush-48599/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Sugar Rush</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71481">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Wild Wild Pearls" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/F/FB2EE378A5786E66DDEC73C561E09F40.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Wild Wild Pearls !" href="/tr/sports/games/pragmatic:wild-wild-pearls-71481/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Wild Wild Pearls</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71419">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Aztec Gems Megaways™" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/8/8D04FA2EEF7E8DA6E944D5996939B619.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Aztec Gems Megaways™ !" href="/tr/sports/games/pragmatic:aztec-gems-megaways™-71419/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Aztec Gems Megaways™</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71273">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Brick House Bonanza" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/0/06FAB747CED1E4C18F482E951FD6DA55.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Brick House Bonanza !" href="/tr/sports/games/pragmatic:brick-house-bonanza-71273/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Brick House Bonanza</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71258">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Fonzo’s Feline Fortunes" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/0/09728B6A0301A5F23F9A55A290750B92.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">PragmaticPlay</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Fonzo’s Feline Fortunes !" href="/tr/sports/games/pragmatic:fonzo’s-feline-fortunes-71258/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Fonzo’s Feline Fortunes</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-Pragmatic" href="/tr/sports/cat/pragmatic">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-Pragmatic-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-Pragmatic-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-Pragmatic-Total">645</span><span class="NoOfGames Difference" id="ViewAllGames-Pragmatic-Diff">633</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-Pragmatic-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-Pragmatic-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$amusnet" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="Amusnet" id="CategoryGameList-Amusnet" href="/tr/sports/cat/amusnet">Amusnet</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="70491">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojo Space" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/2/2AA9B5CE668CC44BC3222C027D683379.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojo Space !" href="/tr/sports/games/amusnet:jojo-space-70491/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojo Space</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="70757">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Jojobet Space Roulette 500x" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/6/6A1F0FDD77CC59B51BF1A96CB106AB44.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Jojobet Space Roulette 500x !" href="/tr/sports/games/amusnet:jojobet-space-roulette-500x-70757/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Jojobet Space Roulette 500x</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="14805">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Burning Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/BE277839450B52030FA6471AE1A7C554.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Burning Hot !" href="/tr/sports/games/amusnet:40-burning-hot-14805/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Burning Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="33952">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Flaming Hot Extreme" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/F/F9B33B81984058A19C526B1266393786.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Flaming Hot Extreme !" href="/tr/sports/games/amusnet:flaming-hot-extreme-33952/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Flaming Hot Extreme</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="9105">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Shining crown" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/3/32576F459C33E6E25FC55169EA04C35B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Shining crown !" href="/tr/sports/games/amusnet:shining-crown-9105/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Shining crown</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="31749">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Burning Hot 6 Reels" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/B/B86372C7D2E72541B8AF80C2BE9F9EDE.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Burning Hot 6 Reels !" href="/tr/sports/games/amusnet:40-burning-hot-6-reels-31749/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Burning Hot 6 Reels</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="14273">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="100 Super Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/0/06024983ACCD965E76FF6D7A6CA8D256.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 100 Super Hot !" href="/tr/sports/games/amusnet:100-super-hot-14273/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">100 Super Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="44959">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Hot Deco" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/1/1367A21AA1DDFC9D31DD823AFE0B502B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Hot Deco !" href="/tr/sports/games/amusnet:hot-deco-44959/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Hot Deco</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="15464">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="100 Burning Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/0/0C23D2E6025D7278D5F451AB95458F5F.optimized.png"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 100 Burning Hot !" href="/tr/sports/games/amusnet:100-burning-hot-15464/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">100 Burning Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="39188">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="20 Golden Coins" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/unique/_casino/C/CBD38A7E37EB08B17409F320A6980DB2.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 20 Golden Coins !" href="/tr/sports/games/amusnet:20-golden-coins-39188/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">20 Golden Coins</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem WithGameTags" data-game-id="71371">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Bulky Dice 6 reels" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/9/927762E378EBD03250A8388EA682D16D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Bulky Dice 6 reels !" href="/tr/sports/games/amusnet:40-bulky-dice-6-reels-71371/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Bulky Dice 6 reels</h3>
                                          <div class="GameTags">
                                             <div class="GameProp NewGame NewGameRibbon">YENİ</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="70879">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Golden Coins Dice Edition" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/0/0CB0BD317557D5BC00152C6979ADA1AE.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">Amusnet</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Golden Coins Dice Edition !" href="/tr/sports/games/amusnet:40-golden-coins-dice-edition-70879/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Golden Coins Dice Edition</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-Amusnet" href="/tr/sports/cat/amusnet">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-Amusnet-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-Amusnet-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-Amusnet-Total">475</span><span class="NoOfGames Difference" id="ViewAllGames-Amusnet-Diff">463</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-Amusnet-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-Amusnet-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
                  <section id="Jojobet-anasayfa$egt-digital" class="CasinoGames GamesList GamesListGrid MsnRow">
                     <h2 class="BoxTitle GamesContainerTitle"><a class="ComponentAnchor GameCategory Anchor" title="EGT Digital" id="CategoryGameList-EGT-Digital" href="/tr/sports/cat/egt-digital">EGT Digital</a></h2>
                     <div class="GamesSwipeable">
                        <div class="GamesWrapper">
                           <ul class="GamesListContainer HorizontalScrollBar HasLoadMoreButton List ListUnordered ">
                              <li class="ListGame ListItem" data-game-id="57979">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Amazons' Battle" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/F/F6257535ED3304AF18BFB416BD023630.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Amazons' Battle !" href="/tr/sports/games/egt-digital:amazons--battle-57979/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Amazons' Battle</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57978">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Zodiac Wheel" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/D/DCFE266F8207BBC38D8D058F438D7E16.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Zodiac Wheel !" href="/tr/sports/games/egt-digital:zodiac-wheel-57978/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Zodiac Wheel</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57977">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Super Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/3/33425D980463B04F984C02CD89C8BFCF.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Super Hot !" href="/tr/sports/games/egt-digital:40-super-hot-57977/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Super Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57970">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="10 Crown Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/6/6767D6BB47C2C11024DBF3E0E3CBC380.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 10 Crown Hot !" href="/tr/sports/games/egt-digital:10-crown-hot-57970/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">10 Crown Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57967">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="100 Burning clover" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/B/B019FC08DF6207D34AD01A45DEE717D8.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 100 Burning clover !" href="/tr/sports/games/egt-digital:100-burning-clover-57967/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">100 Burning clover</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="58029">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="30 Spicy Fruits" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/8/818D7F2ECAFD360787D57397D298103B.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 30 Spicy Fruits !" href="/tr/sports/games/egt-digital:30-spicy-fruits-58029/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">30 Spicy Fruits</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="58008">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Burning Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/1/19D1CB0AC88C420D36760D12285C1F8D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Burning Hot !" href="/tr/sports/games/egt-digital:40-burning-hot-58008/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Burning Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="63946">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Mummy Secret" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/3/387BF202EC512567EF066712039BA87A.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Mummy Secret !" href="/tr/sports/games/egt-digital:mummy-secret-63946/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Mummy Secret</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="63947">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Supreme Cash" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/6/678C1A79E4203C38A3D7AD5C0018C9E9.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Supreme Cash !" href="/tr/sports/games/egt-digital:supreme-cash-63947/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Supreme Cash</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="66879">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="40 Leprechaun Hot" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/E/EDF8E1AF08721DB8CBC9DE36F688C77E.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna 40 Leprechaun Hot !" href="/tr/sports/games/egt-digital:40-leprechaun-hot-66879/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">40 Leprechaun Hot</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57704">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Book Of Realm" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/1/140260C1F5F3CCABAA9118D96FB6BF9D.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Book Of Realm !" href="/tr/sports/games/egt-digital:book-of-realm-57704/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Book Of Realm</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="ListGame ListItem" data-game-id="57703">
                                 <div class="ListGameLink Anchor">
                                    <div class="ComponentGameThumbnail GameThumbContainer FrameGameThumbnail">
                                       <div class="GameThumbailWrapper"><img alt="Princess Cash" class="GameThumb ListGameImage LazyImage" src="//static.emcdncf.com/cms2/base/_casino/F/FBF06AAD863A119FE6D0C9326509BEA4.jpg"></div>
                                       <div class="GameProp GameVendor SubVendor" itemprop="author">EGT_Digital</div>
                                       <a class="ComponentAnchor GamePlayNowButton Anchor" title="Oyna Princess Cash !" href="/tr/sports/games/egt-digital:princess-cash-57703/?prevRoute=%2Fsports%2Fi%2F">
                                          <div class="GamePlayNowText">Hemen Oyna!</div>
                                       </a>
                                       <div class="GameDetails">
                                          <h3 class="GameTitle" itemprop="name">Princess Cash</h3>
                                          <div class="GameTags"></div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <a class="ComponentAnchor OperatorViewAllGames ComponentButton InstanceLoadMoreGames Button Anchor" id="ViewAllGames-EGT-Digital" href="/tr/sports/cat/egt-digital">
                              <div class="DiffAndTotalGamesWrapper HasDiffBetweenTotalAndDisplayedGames" id="ViewAllGames-EGT-Digital-Wrapper"><span class="TextNoOfGames" id="ViewAllGames-EGT-Digital-Text">Hepsini gör</span><span class="NoOfGames Total" id="ViewAllGames-EGT-Digital-Total">117</span><span class="NoOfGames Difference" id="ViewAllGames-EGT-Digital-Diff">105</span></div>
                              <span class="ComponentIcon InstanceArrowRight ButtonIconEnd Icon" id="ViewAllGames-EGT-Digital-IconWrapper">
                                 <span class="SvgIcon MainIcon" id="ViewAllGames-EGT-Digital-Icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                       <path fill-rule="evenodd" d="M11 9.077L13.063 7 22 16l-8.937 9L11 22.923 17.875 16"></path>
                                    </svg>
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </section>
               </div>
               <bannermatrix-banner operator-id="1990" webapi-url="wss://sportsapi.jojobet991.com/v2" webapi-realm="www.jojobet.com" language="tr" demo="false" page-tag="home-page" position-tag="center-bottom" translate="{}" em-user-roles="[]" logged-in="false"></bannermatrix-banner>
               <bannermatrix-banner operator-id="1990" webapi-url="wss://sportsapi.jojobet991.com/v2" webapi-realm="www.jojobet.com" language="tr" demo="false" page-tag="home-page" position-tag="center-popup" translate="{}" em-user-roles="[]" logged-in="false"></bannermatrix-banner>
               <bannermatrix-banner operator-id="1990" webapi-url="wss://sportsapi.jojobet991.com/v2" webapi-realm="www.jojobet.com" language="tr" demo="false" banner-type="streaming" sportbook-id="SportsIframe" translate="{}" em-user-roles="[]" logged-in="false"></bannermatrix-banner>
            </section>
            <footer class="footer-wrapper" id="FooterElement">
               <section class="footer-main">
                  <div class="footer-main-contained">
                     <div class="footer-main-col">
                        <div class="footer-logo-wrapper">
                           <span class="SvgIcon MainIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 411 118">
                                 <image width="411" height="118" xlink:href="data:image/png;base64,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" transform="translate(-.5)" overflow="visible"></image>
                              </svg>
                           </span>
                        </div>
                        <ul class="footer-social-wrapper">
                           <li class="footer-social-item">
                              <a class="ComponentAnchor footer-social-icon Anchor" href="https://t.me/jojobettelegramdestekbot">
                                 <figure class="Figure ComponentPicture "><img alt="Telegram Destek" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/da123636-telegramfooter.png"></figure>
                              </a>
                           </li>
                           <li class="footer-social-item">
                              <a class="ComponentAnchor footer-social-icon Anchor" href="https://t.me/jojo_sosyal">
                                 <figure class="Figure ComponentPicture "><img alt="Telegram" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/61911974-telegram.png"></figure>
                              </a>
                           </li>
                           <li class="footer-social-item">
                              <a class="ComponentAnchor footer-social-icon Anchor" href="https://x.com/jojo_haberler">
                                 <figure class="Figure ComponentPicture "><img alt="Twitter" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/063619b4-x.png"></figure>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="footer-main-col">
                        <ul class="footer-nav-list">
                           <li class="footer-nav-item"><a class="ComponentAnchor  Anchor" href="/tr/terms-conditions"><span class="AnchorText">GENEL KURALLAR VE ŞARTLAR</span></a></li>
                        </ul>
                     </div>
                     <div class="footer-main-col footer-externalPaymentMethods">
                        <ul class="footer-external-logo-list"></ul>
                     </div>
                     <div class="footer-main-col footer-externalVendors">
                        <ul class="footer-external-logo-list"></ul>
                     </div>
                     <div class="footer-main-col footer-externalSponsors">
                        <h3 class="footer-external-logo-title">Sponsorluklar</h3>
                        <ul class="footer-external-logo-list">
                           <li class="footer-external-logo-item">
                              <a class="ComponentAnchor  Anchor" href="https://www.jojobet991.com/tr/sponsorluklar">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/e72318b1-tysonlogo-300x180-1.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <a class="ComponentAnchor  Anchor" href="https://www.jojobet991.com/tr/sponsorluklar">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/0d767366-11382-300x180-1.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <a class="ComponentAnchor  Anchor" href="https://www.jojobet991.com/tr/sponsorluklar">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/2814122e-30291-300x163-1.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <a class="ComponentAnchor  Anchor" href="https://www.jojobet991.com/tr/sponsorluklar">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/d3b3ba6d-30292-300x180-1.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <a class="ComponentAnchor  Anchor" href="https://www.jojobet991.com/tr/sponsorluklar">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/72f83b7c-31103-300x150-1.png"></figure>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </section>
               <section class="footer-secondary">
                  <div class="footer-secondary-contained">
                     <div class="footer-secondary-col footer-secondary-col-1">
                        <span class="">
                           <p style="text-align: center;"><strong>Destek</strong> support@jojobet.com | <strong>Partnerler</strong> partners@jojobet.com<br>
                              <strong>Reklam</strong> press@jojobet.com
                           </p>
                           <p>&nbsp;</p>
                           <p><a href="https://giris.jojobet.com/tr">Jojobet</a> bahis sektöründe ilkleri hedefleyen, önceliği kullanıcı memnuniyeti ve kaliteli hizmet sunmak olan bir bahis ve şans oyunları platformudur.</p>
                           <p>Dünya çapında tüm spor dallarına birbirinden farklı benzersiz bahis seçenekleri ve piyasanın en yüksek oranlarıyla sizlere eğlenceli oyun oynama imkanı sunuyor ve yepyeni bir eğlence anlayışı getirmeyi misyon ediniyoruz.</p>
                           <p>125’in üzerinde spor türü, canlı bahis bölümünde her ay 40.000’den fazla bahis seçeneğinin yanı sıra geniş çeşitliliğe sahip casinomuz ile sizlere gerçek kumarhane deneyimi sunuyoruz. Blackjack, rulet, baccarat ve piyasanın en çok ikramiye dağıtan slot oyunlarımızda şansınızı deneyerek büyük kazanca siz de ortak olabilirsiniz.</p>
                           <p>Sürekli güncellenen promosyonlarımız ile üyelerimizin keyifli bir ortamda vakit geçirmelerini hedeflerken, deneyimli ekibimiz ile haftanın 7 günü ve 24 saat kesintisiz olarak hizmet vermekteyiz.</p>
                           <p>Bir Coinbar N.V markası olan Jojobet, Curacao Lisans Denetleme Kurulu tarafından denetlenmekte olup, Antillephone 8048/JAZ Lisansı kapsamında faaliyet sunmaktadır.</p>
                           <p>Lütfen Sorumlu Bahis Oynayınız. Jojobet™ 2025 | Tüm Hakları Saklıdır.</p>
                        </span>
                     </div>
                     <div class=" footer-externalLicence">
                        <ul class="footer-external-logo-list">
                           <li class="footer-external-logo-item">
                              <a target="_blank" class="ComponentAnchor  Anchor">
                                 <figure class="Figure ComponentPicture "><img alt="18+" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/b61114a9-jojobet.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <span id="ch_2349880263" class="">
                                 <div id="lcqualitybadge"><a href="https://lc.chat/qb/10774152" target="_blank"><img width="160" height="85" src="//cdn.livechatinc.com/qb/qbadge-light.png" srcset="//cdn.livechatinc.com/qb/qbadge-light@2x.png 2x" alt="LiveChat Quality Badge"></a></div>
                                 <script id="er_1936900846" src="//cdn.livechatinc.com/qb/qb-10774152-light-160-2.js" async=""></script>
                              </span>
                           </li>
                           <li class="footer-external-logo-item">
                              <a target="_blank" class="ComponentAnchor  Anchor" href="https://cert.gcb.cw/certificate?id=ZXlKcGRpSTZJbVoxY2poa1VGbEdTR1pXUldaWGVVeENURVJEWVhjOVBTSXNJblpoYkhWbElqb2ljekZYTHpFd2FGbDJZWEV5WmpOd2VHdGtOR04zUVQwOUlpd2liV0ZqSWpvaU5EbGhabUl6WWpobVlXSmlPRFEwTjJWa05qRXpOalZrTjJWaU9ESXpNbVV6TldOa1pqSXpZVFpsTWpBNVpEZzNNMlZsTWpneE1qY3lOREkxTkRVNE1pSXNJblJoWnlJNklpSjk=">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/cda60152-gcb-orange-seal.png"></figure>
                              </a>
                           </li>
                           <li class="footer-external-logo-item">
                              <a target="_blank" class="ComponentAnchor  Anchor" href="https://www.dmca.com/">
                                 <figure class="Figure ComponentPicture "><img alt="" class="PictureImg LazyImage" src="https://www.jojobet991.com/stateless-jojobet/2019/06/05accf10-dmca_badge_grn_100w.png"></figure>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </section>
            </footer>
            <link rel="stylesheet" type="text/css" href="https://storage.googleapis.com/stateless-jojobet-one/call-us-modal.css" media="all">
            <span id="ch_3315283569" class="">
               <script id="er_486832743" src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" async=""></script>
            </span>
            <span></span>
            <span id="ch_3637799754" class="">
               <script id="er_3800579196" src="https://othercdn.com/resources/2payement-tabs.js" async=""></script>
            </span>
            <span></span>
            
            <div class="">
               <div class="AppVersion" onclick="openMri()">1.0.798</div>
            </div>
         </div>
      </div>
      <div class="MRIExpand Hidden"></div>
      
   </body>
</html>