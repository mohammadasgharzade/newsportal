!function(c){function e(e){for(var t,n,r=e[0],a=e[1],o=0,i=[];o<r.length;o++)n=r[o],Object.prototype.hasOwnProperty.call(s,n)&&s[n]&&i.push(s[n][0]),s[n]=0;for(t in a)Object.prototype.hasOwnProperty.call(a,t)&&(c[t]=a[t]);for(u&&u(e);i.length;)i.shift()()}var n={},s={1:0};function f(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return c[e].call(t.exports,t,t.exports,f),t.l=!0,t.exports}f.e=function(a){var e,t=[],n=s[a];if(0!==n)if(n)t.push(n[2]);else{var r=new Promise(function(e,t){n=s[a]=[e,t]});t.push(n[2]=r);var o,i=document.createElement("script");i.charset="utf-8",i.timeout=120,f.nc&&i.setAttribute("nonce",f.nc),i.src=f.p+""+({0:"preview-mode",5:"vendors~preview-mode"}[e=a]||e)+"."+{0:"2996465f326e7418fe1f",5:"0ff99c6b9bf79e23f3ba"}[e]+".js";var c=new Error;o=function(e){i.onerror=i.onload=null,clearTimeout(u);var t=s[a];if(0!==t){if(t){var n=e&&("load"===e.type?"missing":e.type),r=e&&e.target&&e.target.src;c.message="Loading chunk "+a+" failed.\n("+n+": "+r+")",c.name="ChunkLoadError",c.type=n,c.request=r,t[1](c)}s[a]=void 0}};var u=setTimeout(function(){o({type:"timeout",target:i})},12e4);i.onerror=i.onload=o,document.head.appendChild(i)}return Promise.all(t)},f.m=c,f.c=n,f.d=function(e,t,n){f.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},f.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},f.t=function(t,e){if(1&e&&(t=f(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(f.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)f.d(n,r,function(e){return t[e]}.bind(null,r));return n},f.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return f.d(t,"a",t),t},f.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},f.p="https://audience.yektanet.com/static/preview/",f.oe=function(e){throw (console.error(e), e)};var t=window.ynWebpackJsonp=window.ynWebpackJsonp||[],r=t.push.bind(t);t.push=e,t=t.slice();for(var a=0;a<t.length;a++)e(t[a]);var u=r;f(f.s=18)}([function(r,a,o){var i,c;
/*!
 * JavaScript Cookie v2.2.1
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */!function(e){if(void 0===(c="function"==typeof(i=e)?i.call(a,o,a,r):i)||(r.exports=c),r.exports=e(),!!0){var t=window.Cookies,n=window.Cookies=e();n.noConflict=function(){return window.Cookies=t,n}}}(function(){function c(){for(var e=0,t={};e<arguments.length;e++){var n=arguments[e];for(var r in n)t[r]=n[r]}return t}function s(e){return e.replace(/(%[0-9A-Z]{2})+/g,decodeURIComponent)}return function e(u){function i(){}function n(e,t,n){if("undefined"!=typeof document){"number"==typeof(n=c({path:"/"},i.defaults,n)).expires&&(n.expires=new Date(+new Date+864e5*n.expires)),n.expires=n.expires?n.expires.toUTCString():"";try{var r=JSON.stringify(t);/^[\{\[]/.test(r)&&(t=r)}catch(e){}t=u.write?u.write(t,e):encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),e=encodeURIComponent(String(e)).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent).replace(/[\(\)]/g,escape);var a="";for(var o in n)n[o]&&(a+="; "+o,!0!==n[o]&&(a+="="+n[o].split(";")[0]));return document.cookie=e+"="+t+a}}function t(e,t){if("undefined"!=typeof document){for(var n={},r=document.cookie?document.cookie.split("; "):[],a=0;a<r.length;a++){var o=r[a].split("="),i=o.slice(1).join("=");t||'"'!==i.charAt(0)||(i=i.slice(1,-1));try{var c=s(o[0]);if(i=(u.read||u)(i,c)||s(i),t)try{i=JSON.parse(i)}catch(e){}if(n[c]=i,e===c)break}catch(e){}}return e?n[e]:n}}return i.set=n,i.get=function(e){return t(e,!1)},i.getJSON=function(e){return t(e,!0)},i.remove=function(e,t){n(e,"",c(t,{expires:-1}))},i.defaults={},i.withConverter=e,i}(function(){})})},function(e,t,n){"use strict";function r(e){var t=e.indexOf("#"),n=e.indexOf("?");if(-1!==t&&-1!==n&&t<n){var r=e.substr(0,t),a=e.substr(t,n-t);e=r+e.substr(n)+a}var o=document.createElement("a");return{source:o.href=e,protocol:o.protocol.replace(":",""),host:o.hostname.replace(/^www\./,""),port:o.port,query:o.search,params:function(){for(var e,t={},n=o.search.replace(/^\?/,"").split("&"),r=n.length,a=0;a<r;a++)n[a]&&(t[(e=n[a].split("="))[0]]=e[1]);return t}(),file:(o.pathname.match(/\/([^/?#]+)$/i)||["",""])[1],hash:o.hash.replace("#",""),path:o.pathname.replace(/^([^/])/,"/$1"),relative:(o.href.match(/tps?:\/\/[^/]+(.+)/)||["",""])[1],segments:o.pathname.replace(/^\//,"").split("/")}}n.d(t,"a",function(){return r})},function(e,t,n){"use strict";var m=n(4),p=n(9),h=n(5),y=n(6),r=n(0),a=n.n(r),o="_yngt",i=!1;function v(){var e=function(){try{return localStorage.getItem(o)}catch(e){}}()||a.a.get(o);if(e&&"null"!==e&&"undefined"!==e)return e;try{localStorage.removeItem(o)}catch(e){}try{a.a.remove(o)}catch(e){}if(!i){i=!0;var t=document.createElement("iframe");t.src="https://ua.yektanet.com/cookie/iframe/",t.style.display="none",t.height=0,t.width=0,document.getElementsByTagName("body")[0].appendChild(t),window.addEventListener("message",function(e){if("https://ua.yektanet.com"===e.origin&&e.data.cookie){var t=e.data.cookie;n=t,a.a.set(o,n,{expires:30}),function(e){try{localStorage.setItem(o,e)}catch(e){}}(t)}var n},!1)}}var g;t.a=(g=!1,function(e,t,n,r){var a=e.cookieCache.analytics_campaign,o=Object(h.b)(),i=Object(y.a)(location.href);if(t.abh=e.advertiser&&e.advertiser.id,t.ay=e.publisher&&e.publisher.id,t.ac=t.ac||i.url,t.ae=t.ae||i.parameters,t.ad=t.ad||i.host,t.ba=v(),t.as=document.title,t.aea=e.client.id,t.aeb=e.client.type,t.aec=e.property.id,t.aed=e.property.type,t.aaa=t.aaa||a.source,t.aab=t.aab||a.medium,t.aac=t.aac||a.content,t.aad=t.aad||a.campaign,t.aae=t.aae||a.term,t.abi=a.yn,t.uyd=a.yn_data,t.ai=o,t.abw=document.body&&document.body.clientWidth,t.abb=document.body&&document.body.clientHeight,t.aby=window.screen.width||document.documentElement.clientWidth||document.body.clientWidth,t.abz=window.screen.height||document.documentElement.clientHeight,t.al=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,t.am=window.innerHeight||document.documentElement.clientHeight,t.abk=(document.getElementsByTagName("h1")[0]||{}).innerText||"",document.referrer){var c=Object(y.a)(document.referrer);t.af=c.url,t.ag=c.host};for(var u="".concat(e.analytics.host,"__fake.gif?"),s=Object.keys(t),f=0;f<s.length;f++)void 0!==t[s[f]]&&(0!==f&&(u+="&"),u+=s[f]+"="+encodeURIComponent(t[s[f]]));if(!e.forceImg&&navigator.sendBeacon&&navigator.sendBeacon(u))r&&r();else{var l;if(n){var d=Object(m.a)();Object(p.a)(d,e),l=document.getElementById(d)}else l=document.getElementById("aimg");l.src!==u&&(void 0!==r&&(setTimeout(function(){g||(g=!0,r())},1e3),l.addEventListener("load",function(){g||(g=!0,r())})),l.src=u)}})},function(e,t,i){"use strict";i.d(t,"a",function(){return h});var n=i(0),a=i.n(n),c=i(2),o=i(5),u=i(7);function s(e){return(s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function f(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var l=new Set;window.addEventListener("popstate",function(){return l=new Set});var r,d,m,p=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e)}var t,n,r;return t=e,r=[{key:"load",value:function(){var t={};try{t=JSON.parse(localStorage.getItem(this.storageName))||{},a.a.remove(this.storageName)}catch(e){t=a.a.getJSON(this.storageName)||{}}return t}},{key:"dump",value:function(t){try{localStorage.setItem(this.storageName,JSON.stringify(t))}catch(e){a.a.set(this.storageName,t,{expires:7})}}},{key:"canTrigger",value:function(e){var t=this.load(),n=t[e],r=Object(o.b)(),a=r!==n;return t[e]=r,this.dump(t),a}}],(n=null)&&f(t.prototype,n),r&&f(t,r),e}();function h(e,t,n,r,a){if(!function(e){switch(e.event.trigger_mode){case"once-per-page":return l.has(e.id)?void 0:(l.add(e.id),1);case"once-per-session":return p.canTrigger(e.id);default:return 1}}(n))return!1;r&&"object"===s(r)&&(r=JSON.stringify(r));var o={aa:"event",abe:t,abf:n.id,abj:n.default?"1":"0",acs:r};e.userId&&Object(u.a)(e.userId).then(function(){Promise.all([i.e(5),i.e(0)]).then(i.bind(null,14)).then(function(e){e.default.commit("tagFired",n.id)}).catch(function(e){console.error(e),console.error("Failed to fetch retargeting preview components")})}).catch(function(){return null}),Object(c.a)(e,o,!0,a)}m="yk_sstidsmap",(d="storageName")in(r=p)?Object.defineProperty(r,d,{value:m,enumerable:!0,configurable:!0,writable:!0}):r[d]=m},function(e,t,n){"use strict";function r(){function e(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}return e()+e()+"-"+e()+"-"+e()+"-"+e()+"-"+e()+e()+e()}n.d(t,"a",function(){return r})},function(e,t,n){"use strict";n.d(t,"b",function(){return o}),n.d(t,"a",function(){return l});var i=n(4),r=n(0),c=n.n(r),h=n(1);var u="analytics_session_token",s="analytics_token",f="analytics_campaign",a="yektanet_session_last_activity";function o(){var e=c.a.get(u),t=new Date;try{t=t.toLocaleDateString("en-US",{timeZone:"Asia/Tehran"})}catch(e){t=t.toLocaleDateString()}e?c.a.get(a)!==t&&(e=Object(i.a)()):e=Object(i.a)();return c.a.set(u,e,{expires:1/48}),c.a.set(a,t,{expires:1}),e}function l(e){var t=function(e,t){var n=0<arguments.length&&void 0!==e?e:location.href,r=1<arguments.length&&void 0!==t?t:document.referrer,a=Object(h.a)(n),o=a.params;function i(e,t,n,r,a,o,i){return{source:e,medium:t,campaign:n,content:r,term:a,yn:o,yn_data:i}}function c(e){return e.endsWith("shaparak.ir")||"payment.iiventures.com"===e||"zarinpal.com"===e}if(o.gclid||o.gclsrc)return i("google","cpc","adwords","adwords");if(o.campaignSource)return i(decodeURIComponent(o.campaignSource),o.campaignMedium&&decodeURIComponent(o.campaignMedium),o.campaignName&&decodeURIComponent(o.campaignName),o.campaignContent&&decodeURIComponent(o.campaignContent),o.campaignTerm&&decodeURIComponent(o.campaignTerm));if(o.utm_source)return i(decodeURIComponent(o.utm_source),o.utm_medium&&decodeURIComponent(o.utm_medium),o.utm_campaign&&decodeURIComponent(o.utm_campaign),o.utm_content&&decodeURIComponent(o.utm_content),o.utm_term&&decodeURIComponent(o.utm_term),o.utm_yn&&decodeURIComponent(o.utm_yn),o.utm_yn_data&&decodeURIComponent(o.utm_yn_data));if(o.wg_source)return i(decodeURIComponent(o.wg_source),o.wg_medium&&decodeURIComponent(o.wg_medium),o.wg_campaign&&decodeURIComponent(o.wg_campaign),o.wg_content&&decodeURIComponent(o.wg_content),o.wg_term&&decodeURIComponent(o.wg_term),o.utm_yn&&decodeURIComponent(o.utm_yn),o.utm_yn_data&&decodeURIComponent(o.utm_yn_data));if(r){var u=Object(h.a)(r);if(c(u.host))return i("direct",null);var s=["google","bing","yahoo","ask","aol","baidu"],f=u.host.split("."),l=f[f.length-2],d=f[f.length-3];if(-1!==s.indexOf(l))return i(l,"organic");if(-1!==s.indexOf(d))return i(d,"organic");if(u.host!==a.host){var m;if(u.protocol.startsWith("android-app")){var p=r.split("/");m=2<p.length?p[2].split(".").reverse().join("."):r}else m=u.host;return c(m)?i("direct",null):i(m,"referral")}}return i("direct",null)}(location.href),n=c.a.getJSON(f),r=!(e.cookieCache[f]=n)||(t.source!==n.source||t.medium!==n.medium||t.campaign!==n.campaign||t.content!==n.content||t.term!==n.term)&&"direct"!==t.source;r&&(c.a.set(f,t,{expires:365}),e.cookieCache[f]=t);var a,o=!r&&c.a.get(u)||Object(i.a)();c.a.set(u,o,{expires:1/48}),!function(){var e="test";if(window.localStorage)try{return window.localStorage.setItem(e,e),window.localStorage.removeItem(e),1}catch(e){return}}()?a=c.a.get(s)||Object(i.a)():(a=c.a.get(s)||window.localStorage.getItem(s)||Object(i.a)(),window.localStorage.setItem(s,a)),c.a.set(s,a,{expires:365})}},function(e,t,n){"use strict";n.d(t,"a",function(){return a});var r=n(1);function a(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:location.href,t=Object(r.a)(e);return{url:e,host:t.host,parameters:JSON.stringify(t.params)}}},function(e,t,n){"use strict";n.d(t,"a",function(){return r});var a=null,o=!1,i=!1;function r(n){return new Promise(function(t,e){var r;null===a?((r={url:"https://audience.yektanet.com/api/v1/scripts/preview/validate/?user_id=".concat(n),withCredentials:!0}).method||(r.method="GET"),(a=new Promise(function(e,t){var n=new XMLHttpRequest;n.onload=function(){200===this.status?e(this.responseText):t()},n.onerror=function(){t()},n.open(r.method,r.url),r.withCredentials&&(n.withCredentials=!0),n.send()})).then(function(e){if("true"!==e)throw new Error;i=o=!0,t()}).catch(function(){i=!(o=!0),e()})):o?(i?t:e)():a.then(function(e){if("true"!==e)throw new Error;i=o=!0,t()}).catch(function(){i=!(o=!0),e()})})}},function(e,t,n){"use strict";var r=[],a=!1,o=!1;function i(){if(!a){a=!0;for(var e=0;e<r.length;e++)r[e].fn.call(window,r[e].ctx);r=[]}}function c(){"complete"===document.readyState&&i()}t.a=function(e,t){var n=!(2<arguments.length&&void 0!==arguments[2])||arguments[2];return"localhost"===location.hostname?(console.error("This script won't run on localhost"),!1):"function"!=typeof e?(console.error("Callback must be a function"),!1):void(a?setTimeout(function(){e(t)},1):(r.push({fn:e,ctx:t}),"complete"===document.readyState||n&&navigator.sendBeacon?setTimeout(i,1):o||(document.addEventListener?(document.addEventListener("DOMContentLoaded",i,!1),window.addEventListener("load",i,!1)):(document.attachEvent("onreadystatechange",c),window.attachEvent("onload",i)),o=!0)))}},function(e,t,n){"use strict";function r(e){if((1<arguments.length&&void 0!==arguments[1]?arguments[1]:{forceImg:!1}).forceImg||!navigator.sendBeacon&&!document.getElementById(e)){var t=document.createElement("img");t.id=e,t.src="",t.style.display="none",t.style.width="1px",t.style.height="1px",t.style.position="absolute",document.body.appendChild(t)}}n.d(t,"a",function(){return r})},function(e,t,r){"use strict";r.d(t,"b",function(){return u}),r.d(t,"a",function(){return l});r(0);var i=r(1),a=r(7);function c(e){return(c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var n=RegExp("["+["-","[","]","/","{","}","(",")","*","+","?",".","\\","^","$","|"].join("\\")+"]","g");function u(e){return e.replace(n,"\\$&")}function s(e,t){var n;if("R"===t.type)try{n=RegExp(t.query,"ui")}catch(e){n=RegExp(t.query,"i")}else{var r=u(t.query),a=-1!==["S","="].indexOf(t.type)?"^":".*",o=-1!==["E","="].indexOf(t.type)?"$":".*";n=RegExp(a+r+o)}return n.test(decodeURI(e))}var o=function r(a,o){return"object"===c(a)&&null!==a&&"object"===c(o)&&null!==o&&(a instanceof Date||o instanceof Date?a.valueOf()===o.valueOf():Object.keys(o).every(function(e){if(!a.propertyIsEnumerable(e))return!1;var t=o[e],n=a[e];return"object"===c(t)&&null!==t?r(n,t):!t||n===t}))};function f(t,e){var n={};return Object.keys(t).forEach(function(e){n[decodeURI(e)]=t[e]&&decodeURI(t[e])}),o(t,e.params)||o(n,e.params)}function l(e,t){var n=e.filter(function(e){if(0<document.querySelectorAll('[name="yn-tag"][id="'+e.id.toString()+'"]').length)return!0;for(var t=Object(i.a)(document.referrer).host,n=e.patterns.filter(function(e){return!e.referrer_domain||-1<t.indexOf(e.referrer_domain)}),r=Object(i.a)(location.href),a=0;a<n.length;a++){var o=n[a];if(s(r.path,o)&&f(r.params,o))return!0}return!1});return t.userId&&Object(a.a)(t.userId).then(function(){Promise.all([r.e(5),r.e(0)]).then(r.bind(null,14)).then(function(e){e.default.commit("setThisPageTags",n)}).catch(function(e){console.error(e),console.error("Failed to fetch retargeting preview components")})}).catch(function(){return null}),n}},function(e,t,n){"use strict";n.d(t,"a",function(){return r});var u=n(3),a=n(10),s=n(8),f=[],l=[],d=[],m=[],p=[];function o(e,t){var n,r,i,a,c,o;!function(n,e){var t=!0,r=!0,a=0;try{window.addEventListener("blur",function(){return t=!1}),window.addEventListener("focus",function(){return t=!0})}catch(e){}setInterval(function(){try{r=!document.hidden}catch(e){}t&&r&&(a+=1e3)},1e3),e&&e.forEach&&e.forEach(function(e){var t=setInterval(function(){a>=1e3*e.event.time_on_page_threshold&&(Object(u.a)(n,"T",e,{time_on_page:e.event.time_on_page_threshold}),clearInterval(t))},1e3);f.push(t)})}(e,t.filter(function(e){return"T"===e.event.type})),n=e,(r=t.filter(function(e){return"L"===e.event.type}))&&r.forEach&&r.forEach(function(e){Object(u.a)(n,"L",e)}),i=e,(a=t.filter(function(e){return"C"===e.event.type}))&&a.forEach&&a.forEach(function(a){if(a.event.css_selector){var o=setInterval(function(){var e,n,t=a.event.css_selector,r=document.querySelectorAll(t);0<r.length&&(n=a,(e=r)&&e.forEach&&e.forEach(function(e){function t(){Object(u.a)(i,"C",n,{css_selector:n.event.css_selector})}e.addEventListener("click",t),d.push({link:e,listener:t})}),clearInterval(o))},1e3);l.push(o)}a.event.element_text&&document.addEventListener("click",function(e){e.target.innerText===a.event.element_text&&Object(u.a)(i,"C",a,{element_text:a.event.element_text})})}),function(e){Object(s.a)(function(){return e&&e.forEach&&e.forEach(function(e){return e&&e.event&&e.event.custom_script&&e.event.custom_script.bind({tagID:e.id})()})},this,!1)}(t.filter(function(e){return"U"===e.event.type})),c=e,(o=t.filter(function(e){return"S"===e.event.type}))&&o.forEach&&o.forEach(function(a){var o=setInterval(function(){var e,n,t=a.event.css_selector,r=document.querySelectorAll(t);0<r.length&&(r=Array.from(r).map(function(e){for(;e&&"FORM"!==e.nodeName;)e=e.parentNode;return e}).filter(Boolean),n=a,(e=r)&&e.forEach&&e.forEach(function(e){function t(){Object(u.a)(c,"S",n,{css_selector:n.event.css_selector})}e.addEventListener("submit",t),p.push({form:e,listener:t})}),clearInterval(o))},1e3);m.push(o)})}function r(e){var n,r;n=window.history,r=n.pushState,n.pushState=function(e){var t=r.apply(n,arguments);return"function"==typeof n.onpushstate&&n.onpushstate({state:e}),t},window.onpopstate=history.onpushstate=function(){try{f.forEach(function(e){return clearInterval(e)}),f=[],l.forEach(function(e){return clearInterval(e)}),l=[],d.forEach(function(e){return e.link.removeEventListener("click",e.listener)}),d=[],m.forEach(function(e){return clearInterval(e)}),m=[],p.forEach(function(e){return e.form.removeEventListener("submit",e.listener)}),p=[],o(e,Object(a.a)(e.analytics.tags,e))}catch(e){console.error(e)}},o(e,Object(a.a)(e.analytics.tags,e))}},function(e,t,n){"use strict";function r(e){var t="yektanet",n=document.getElementById(e.analyticsScriptId);n&&n.dataset.analyticsobject&&(t=n.dataset.analyticsobject),t="".concat(t,"_").concat(e.analyticsScriptId,"_is_loaded");var r=!0===window[t];return window[t]=!0,r&&window.console.warn("warning: yektanet analytics is already loaded!"),r}n.d(t,"a",function(){return r})},function(e,t,n){"use strict";n.d(t,"a",function(){return w});var m=n(2),i=n(6),p=n(3);function r(e){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function f(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(e)))return;var n=[],r=!0,a=!1,o=void 0;try{for(var i,c=e[Symbol.iterator]();!(r=(i=c.next()).done)&&(n.push(i.value),!t||n.length!==t);r=!0);}catch(e){a=!0,o=e}finally{try{r||null==c.return||c.return()}finally{if(a)throw o}}return n}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return a(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(n);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return a(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function a(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function l(e){return e}function h(e,t){for(var n={},r=Object.keys(e),a=0;a<r.length;a++){var o=r[a];if(!(o in t))return console.error('wrong key for yektanet product api: "'.concat(o,'"')),!1;var i=t[o],c=void 0,u=void 0;if(Array.isArray(i)){var s=f(i,2);c=s[0],u=s[1]}else c=i,u=l;n[c]=u(e[o])}return n}function o(e){return Array.isArray(e)?e.join(","):e}function c(e){return"boolean"==typeof e?e?"1":"0":e}function y(e){return e&&"object"===r(e)?JSON.stringify(e):e}function u(e){if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(e=function(e,t){if(!e)return;if("string"==typeof e)return s(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(n);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return s(e,t)}(e))){var t=0,n=function(){};return{s:n,n:function(){return t>=e.length?{done:!0}:{done:!1,value:e[t++]}},e:function(e){throw e},f:n}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var r,a,o=!0,i=!1;return{s:function(){r=e[Symbol.iterator]()},n:function(){var e=r.next();return o=e.done,e},e:function(e){i=!0,a=e},f:function(){try{o||null==r.return||r.return()}finally{if(i)throw a}}}}function s(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}var d=["detail","add","remove","vote","comment","wishlist","purchase","refund"];var v={title:"aca",sku:"acb",category:["acc",o],subCategory:["acp",o],quantity:"acd",price:"ace",currency:"acf",brand:"acg",discount:"ach",comment:"aci",vote:"acj",averageVote:"ack",totalVotes:"acl",cartId:"acn",image:"aco",isSponsored:["acu",c],sponsorBid:"acw",isAvailable:["acq",c],expiration:["acr",function(e){return e&&e.getTime?e.getTime():e}],isFree:["act",c],extras:["acs",y]};function g(o){return function(e,t){var n,r=t.url;if(delete t.url,n=(n=e).toLowerCase(),!1===(e=-1===d.indexOf(n)?(console.error("action should be one of (".concat(d.join(", "),")")),!1):n))return!1;try{!function(e){var n,t=u(o.analytics.tags.filter(function(e){return"G"===e.event.type}));try{var r=function(){var t=n.value;e.map(function(e){return 0<=t.event.categories.indexOf(e)}).reduce(function(e,t){return e||t})&&Object(p.a)(o,t.event.type,t)};for(t.s();!(n=t.n()).done;)r()}catch(e){t.e(e)}finally{t.f()}}(t.category)}catch(e){}if(!1===(t=h(t,v)))return!1;if(t.aa="product",t.acm=e,r)try{var a=Object(i.a)(r);t.ac=a.url,t.ae=a.parameters,t.ad=a.host}catch(e){}Object(m.a)(o,t)}}var b={action:"ada",name:"adb",fullname:"adb",email:"adc",country:"ade",city:"adf",sex:"adg",extras:["acs",y]};function w(e){var t="yektanet",n=document.getElementById(e.analyticsScriptId);n&&n.dataset.analyticsobject&&(t=n.dataset.analyticsobject);function r(e,t){var n={aa:"user",add:e};if(t&&t instanceof Object){if(!1===(t=h(t,b)))return!1;Object.assign(n,t)}Object(m.a)(i,n)}function a(t,e){var n=c.analytics.tags.find(function(e){return e.id===t});n&&Object(p.a)(c,n.event.type,n,e)}function o(e){e.position=e.position||{};var t={aa:"position-click",aga:e.label,agb:e.x,agc:e.y,agd:e.position.id,age:e.position.width,agf:e.position.height,agg:e.position.x,agh:e.position.y,afc:e.position.image};Object(m.a)(u,t,!0)}var i,c,u,s,f=window[t]&&window[t].q||[],l=g(e),d={product:l,user:r,event:a,"position-click":o,behaviour:(s=u=c=i=e,function(e,t){var n={aa:"behaviour",aha:e,ahb:y(t)};Object(m.a)(s,n,!0)})};for(window[t]=function(){var e=arguments[0],t=Object.values(arguments).slice(1),n=d[e];if(!n)return console.error('wrong parameter: "'.concat(e,'"')),!1;n.apply(this,t)},window[t].product=l,window[t].setUser=r,window[t].event=a,window[t].positionClick=o;0<f.length;)try{window[t].apply(this||window,Object.values(f.shift()))}catch(e){console.error(e)}}},,,,,function(e,t,n){"use strict";n.r(t);var d,r=n(8),a=n(9),o=n(5),i=n(11),c=n(13),f=n(1),l=n(6),m=n(2);function p(e){if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(e=function(e,t){if(!e)return;if("string"==typeof e)return u(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(n);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return u(e,t)}(e))){var t=0,n=function(){};return{s:n,n:function(){return t>=e.length?{done:!0}:{done:!1,value:e[t++]}},e:function(e){throw e},f:n}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var r,a,o=!0,i=!1;return{s:function(){r=e[Symbol.iterator]()},n:function(){var e=r.next();return o=e.done,e},e:function(e){i=!0,a=e},f:function(){try{o||null==r.return||r.return()}finally{if(i)throw a}}}}function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function h(){for(var e=this.parentElement;e&&!e.id.includes("mediaad");)e=e.parentElement;var t,n=p(this.getElementsByTagName("*"));try{for(n.s();!(t=n.n()).done;){var r=t.value;if(r.style.backgroundImage){var a=r.style.backgroundImage.slice(5,-2);Object(m.a)(d,s(this.href,a,this.title,e.id));break}if("IMG"===r.tagName){Object(m.a)(d,s(this.href,r.src,this.title,e.id));break}}}catch(e){n.e(e)}finally{n.f()}return!1}function y(){for(var e=this.parentElement;e&&!(e.id.includes("yektanet")||e.id.includes("yn-")||e.id.includes("ynpos-"));)e=e.parentElement;var t,n,r,a,o,i,c,u,s=this.getElementsByTagName("img")[0];return Object(m.a)(d,(t=this.href,n=s.src,r=s.alt,a=e.id,o=Object(f.a)(t),i=Object(f.a)(decodeURIComponent(o.params.redirect)),c=Object(l.a)(),(u={aa:"ck"}).ac=c.url,u.ae=c.parameters,u.ad=c.host,u.as=document.title,u.abk=(document.getElementsByTagName("h1")[0]||{}).innerText||"",u.afa=i.host||i.source,u.afb=i.source,u.afc=n,u.afd=r,u.afe=t,u.aff=a,u.afg="yektanet",u.afh=location.host,u)),!1}function v(n){return function(){var e=this.getElementsByTagName("img")[0],t=(this.getElementsByTagName("p")[0]||{}).innerText;return Object(m.a)(d,function(e,t,n,r){var a=Object(f.a)(e),o=Object(f.a)(decodeURIComponent(a.params.target)),i=Object(l.a)(),c={aa:"ck"};c.ac=i.url,c.ae=i.parameters,c.ad=i.host,c.as=document.title,c.abk=(document.getElementsByTagName("h1")[0]||{}).innerText||"",c.afa=o.host,c.afb=o.source,c.afc=t,n&&(c.afd=n);c.afe=e,c.aff=r,c.afg="sabavision",c.afh=location.host,o.params.utm_source&&(c.aaa=o.params.utm_source);o.params.utm_medium&&(c.aab=o.params.utm_medium);o.params.utm_campaign&&(c.aad=o.params.utm_campaign);return c}(this.href,e.src,t,n.id)),!1}}function s(e,t,n,r){var a=Object(f.a)(e),o=Object(f.a)(decodeURIComponent(a.params.redir)),i=Object(l.a)(),c={aa:"ck"};return c.ac=i.url,c.ae=i.parameters,c.ad=i.host,c.as=document.title,c.abk=(document.getElementsByTagName("h1")[0]||{}).innerText||"",o.source.toLowerCase().startsWith("market://")||o.source.toLowerCase().startsWith("bazaar://")?c.afa=o.params.id:c.afa=o.host,c.afb=o.source,c.afc=t,c.afd=n,c.afe=e,c.aff=r,c.afg="mediaad",c.afh=location.host,c.aaa=o.params.utm_source,c.aab=o.params.utm_medium,c.aac=o.params.utm_content,c.aad=o.params.utm_campaign,c.aae=o.params.utm_term,c}var g=n(10);function b(e){if(!e)return e;var t={" ":" ","ى":"ی","ك":"ک","ي":"ی","“":'"',"”":'"'};return Array.from(e.toString()).map(function(e){return t[e]||e}).join("")}var w=new RegExp("^(https?://)?(www.)?([^/]+)","im"),O=window.location.hostname.toLowerCase(),j=O.match(w);O=j&&j[3];var _=[/^dl\./,/^cdn\./,/imdb\.com$/,/subgard\.ir$/,/subschene/,/submy/,/download/,/filehippo/,/aparat\.com$/,/masghreghnews\.ir$/,/farsnews\.(com|ir)$/,/mediafire/,/p30download/,/rasekhoon\.net$/,/myusb\.ir$/,/novintabligh\.com$/,/darjeagahi\.com$/,/yektanet\.com$/,/mediaad\.org$/,/sanjagh\.com$/,/adro\.co$/,/\.?google\./,/\.?uploadmax\.$/,/svdl\.ir$/,/mojdl\.com$/,/cdn-france\.info$/,/sub30t\.com$/,/wiki-view\.com$/,/nayrika\.com$/,/mp3lyric\.com$/,/rssbank\.ir$/,/\.?fasub\.$/,/tn\.ai$/,/pgupgame\.com$/,/fdl\.ir$/,/hastisub\./,/\.?dlserver\./,/magnetadservice\.com$/,/\.?phoenixad\./,/\.?sabadl\./,/pvsub\.ir/,/\.?picofile\./,/\.?music2dl\./,/tarikhema\.org$/,/rmdlsv\.com/,/last-cdn\.com/,/raykaad\.com/,/berlincloud\./,/app2ads\.com/,/\.?uploadboy\./,/^$/,/https?:/];if(O)try{O=O.split(".").slice(-2).join("."),_.push(new RegExp("".concat(Object(g.b)(O),"$")));try{var E=O.split(".")[0];E&&_.push(new RegExp(".".concat(Object(g.b)(E),".")))}catch(e){}}catch(e){}var S=[/iranjavanmusic\.com/,/^dl\./,/dl\.[^.]+/,/music\.[^.]+/,/^music/,/fiilo\.ir$/,/mihanvideo\.com$/,/iranmusical\.ir$/,/my-filmm\./,/beepmusic\.org/,/sansizmusic\.ir/,/naztv\./,/kordsong\.com$/,/\.tarikhema.org$/,/tarane\./],I=[/دریافت/,/دانلود/,/منبع/,/گزارش/];function k(t){var n;O&&(n=O,!S.some(function(e){return n.match(e)}))&&Array.from(document.querySelectorAll("a[href^=http]")).filter(function(e){var t=e.getAttribute("rel");return!t||-1===t.toLowerCase().indexOf("nofollow")&&-1===t.toLowerCase().indexOf("noindex")&&-1===t.toLowerCase().indexOf("sponsored")}).filter(function(e){var t=e.getAttribute("href");if(!t)return!1;var n,r=t.match(w),a=(r?r[3].toString():t.indexOf(":")<0?O:"").toLowerCase();return n=a,!_.some(function(e){return n.match(e)})}).filter(function(e){var t=e.getAttribute("href"),n=Object(f.a)(t);return!Object.keys(n.params).some(function(e){return e.toLowerCase().startsWith("utm_")})}).filter(function(e){return(t=(t=b(e.innerText)).trim())&&!I.some(function(e){return t.match(e)});var t}).forEach(function(e){e.addEventListener("click",function(){Object(m.a)(t,{aa:"external-link-click",acs:JSON.stringify({href:e.href,target:e.target,isDirty:e.isDirty,title:b(e.title),innerHTML:e.innerHTML,innerText:b(e.innerText),contextText:function(e,t,n){var r=2<arguments.length&&void 0!==n?n:3;t=t.map(function(e){return e.toUpperCase()});for(var a=0;-1===t.indexOf(e.parentElement.nodeName)&&++a<r;)e=e.parentElement;return b((e.parentElement.innerText||"").replace(/\s+/gm," "))}(e,["p","h1","h2","h3","h4","h5","h6"],3)})},!0)})})}var x=n(12),C={analyticsScriptId:"",client:{id:"7876",type:"yektanet"},property:{id:"7864",type:"pub"},analytics:{host:"https://ua.yektanet.com/",tags:[{"id": "ad367769-07f7-47b7-9b7e-f705b315f9ce", "event": {"type": "L", "trigger_mode": "always"}, "title": "All my viewers", "patterns": [{"type": "S", "query": "/", "params": {}, "referrer_domain": ""}], "default": true}]},forceImg:true,cookieCache:{}};Object(r.a)(function(){Object(x.a)(C)||(Object(a.a)("aimg",C),Object(o.a)(C),Object(i.a)(C),Object(c.a)(C),function(e){d=e;var f=0,l=setInterval(function(){60===++f&&clearInterval(l);var e,t=p(document.getElementsByTagName("a"));try{for(t.s();!(e=t.n()).done;){var n=e.value;if(!n.isDirty){n.isDirty=!0;var r=n.href||"";r.includes("mediaad")?n.addEventListener("click",h):r.includes("yektanet")&&n.addEventListener("click",y)}}}catch(e){t.e(e)}finally{t.f()}try{var a,o=p(document.getElementsByTagName("iframe"));try{for(o.s();!(a=o.n()).done;){var i,c=a.value,u=p(c.contentWindow.document.getElementsByTagName("a"));try{for(u.s();!(i=u.n()).done;){var s=i.value;if(!s.isDirty)s.isDirty=!0,(s.href||"").includes("plus.sabavision.com")&&s.addEventListener("click",v(c))}}catch(e){u.e(e)}finally{u.f()}}}catch(e){o.e(e)}finally{o.f()}}catch(e){}},1e3)}(C),k(C))},void 0,!C.forceImg)}]);