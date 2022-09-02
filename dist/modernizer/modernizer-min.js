window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=Array.prototype.forEach),String.prototype.includes||Object.defineProperty(String.prototype,"includes",{value:function(e,t){return"number"!=typeof t&&(t=0),!(t+e.length>this.length)&&-1!==this.indexOf(e,t)}}),function(e,t,n){function r(e,t){return typeof e===t}function o(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function i(e,n,r,i){var s,a,l,f,u="modernizr",p=o("div"),c=function(){var e=t.body;return e||((e=o(S?"svg":"body")).fake=!0),e}();if(parseInt(r,10))for(;r--;)(l=o("div")).id=i?i[r]:u+(r+1),p.appendChild(l);return(s=o("style")).type="text/css",s.id="s"+u,(c.fake?c:p).appendChild(s),c.appendChild(p),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(t.createTextNode(e)),p.id=u,c.fake&&(c.style.background="",c.style.overflow="hidden",f=C.style.overflow,C.style.overflow="hidden",C.appendChild(c)),a=n(p,e),c.fake?(c.parentNode.removeChild(c),C.style.overflow=f,C.offsetHeight):p.parentNode.removeChild(p),!!a}function s(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function a(e,t){return!!~(""+e).indexOf(t)}function l(e,t){return function(){return e.apply(t,arguments)}}function f(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function u(t,n,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,t,n);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){i[i.error?"error":"log"].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function p(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(f(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+f(t[o])+":"+r+")");return i("@supports ("+(s=s.join(" or "))+") { #modernizr { position: absolute; } }",function(e){return"absolute"==u(e,null,"position")})}return n}function c(e,t,i,l){function f(){c&&(delete j.style,delete j.modElem)}if(l=!r(l,"undefined")&&l,!r(i,"undefined")){var u=p(e,i);if(!r(u,"undefined"))return u}for(var c,d,m,y,v,h=["modernizr","tspan","samp"];!j.style&&h.length;)c=!0,j.modElem=o(h.shift()),j.style=j.modElem.style;for(m=e.length,d=0;m>d;d++)if(y=e[d],v=j.style[y],a(y,"-")&&(y=s(y)),j.style[y]!==n){if(l||r(i,"undefined"))return f(),"pfx"!=t||y;try{j.style[y]=i}catch(e){}if(j.style[y]!=v)return f(),"pfx"!=t||y}return f(),!1}function d(e,t,n,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+_.join(s+" ")+s).split(" ");return r(t,"string")||r(t,"undefined")?c(a,t,o,i):function(e,t,n){var o;for(var i in e)if(e[i]in t)return!1===n?e[i]:r(o=t[e[i]],"function")?l(o,n||t):o;return!1}(a=(e+" "+b.join(s+" ")+s).split(" "),t,n)}var m=[],y=[],v={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},h=function(){};h.prototype=v,h=new h;var g=v._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];v._prefixes=g;var C=t.documentElement,S="svg"===C.nodeName.toLowerCase(),w="Moz O ms Webkit",b=v._config.usePrefixes?w.toLowerCase().split(" "):[];v._domPrefixes=b;var x=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return i("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();v.mq=x;var _=v._config.usePrefixes?w.split(" "):[];v._cssomPrefixes=_;var E=function(t){var r,o=g.length,i=e.CSSRule;if(void 0===i)return n;if(!t)return!1;if((r=(t=t.replace(/^@/,"")).replace(/-/g,"_").toUpperCase()+"_RULE")in i)return"@"+t;for(var s=0;o>s;s++){var a=g[s];if(a.toUpperCase()+"_"+r in i)return"@-"+a.toLowerCase()+"-"+t}return!1};v.atRule=E;var P={elem:o("modernizr")};h._q.push(function(){delete P.elem});var j={style:P.elem.style};h._q.unshift(function(){delete j.style}),v.testAllProps=d;var z=v.prefixed=function(e,t,n){return 0===e.indexOf("@")?E(e):(-1!=e.indexOf("-")&&(e=s(e)),t?d(e,t,n):d(e,"pfx"))};h.addTest("objectfit",!!z("objectFit"),{aliases:["object-fit"]}),function(){var e,t,n,o,i,s;for(var a in y)if(y.hasOwnProperty(a)){if(e=[],(t=y[a]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)1===(s=e[i].split(".")).length?h[s[0]]=o:(!h[s[0]]||h[s[0]]instanceof Boolean||(h[s[0]]=new Boolean(h[s[0]])),h[s[0]][s[1]]=o),m.push((o?"":"no-")+s.join("-"))}}(),function(e){var t=C.className,n=h._config.classPrefix||"";if(S&&(t=t.baseVal),h._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}h._config.enableClasses&&(t+=" "+n+e.join(" "+n),S?C.className.baseVal=t:C.className=t)}(m),delete v.addTest,delete v.addAsyncTest;for(var N=0;N<h._q.length;N++)h._q[N]();e.Modernizr=h}(window,document);