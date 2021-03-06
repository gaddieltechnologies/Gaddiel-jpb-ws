/* Modernizr 2.5.3 (Custom Build) | MIT & BSD */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a)if(j[a[d]]!==c)return b=="pfx"?a[d]:!0;return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.substr(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.5.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k=b.createElement("div"),l=b.body,m=l?l:b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),k.appendChild(j);return f=["&#173;","<style>",a,"</style>"].join(""),k.id=h,(l?k:m).innerHTML+=f,m.appendChild(k),l||(m.style.background="",g.appendChild(m)),i=c(k,a),l?k.parentNode.removeChild(k):m.parentNode.removeChild(m),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e});var G=function(a,c){var d=a.join(""),f=c.length;w(d,function(a,c){var d=b.styleSheets[b.styleSheets.length-1],g=d?d.cssRules&&d.cssRules[0]?d.cssRules[0].cssText:d.cssText||"":"",h=a.childNodes,i={};while(f--)i[h[f].id]=h[f];e.csstransforms3d=(i.csstransforms3d&&i.csstransforms3d.offsetLeft)===9&&i.csstransforms3d.offsetHeight===3},f,c)}([,["@media (",m.join("transform-3d),("),h,")","{#csstransforms3d{left:9px;position:absolute;height:3px;}}"].join("")],[,"csstransforms3d"]);q.csstransforms=function(){return!!F("transform")},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&(a=e.csstransforms3d),a};for(var H in q)y(q,H)&&(v=H.toLowerCase(),e[v]=q[H](),t.push((e[v]?"":"no-")+v));return z(""),i=k=null,function(a,b){function g(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function h(){var a=k.elements;return typeof a=="string"?a.split(" "):a}function i(a){var b={},c=a.createElement,e=a.createDocumentFragment,f=e();a.createElement=function(a){var e=(b[a]||(b[a]=c(a))).cloneNode();return k.shivMethods&&e.canHaveChildren&&!d.test(a)?f.appendChild(e):e},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+h().join().replace(/\w+/g,function(a){return b[a]=c(a),f.createElement(a),'c("'+a+'")'})+");return n}")(k,f)}function j(a){var b;return a.documentShived?a:(k.shivCSS&&!e&&(b=!!g(a,"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")),f||(b=!i(a)),b&&(a.documentShived=b),a)}var c=a.html5||{},d=/^<|^(?:button|form|map|select|textarea)$/i,e,f;(function(){var a=b.createElement("a");a.innerHTML="<xyz></xyz>",e="hidden"in a,f=a.childNodes.length==1||function(){try{b.createElement("a")}catch(a){return!0}var c=b.createDocumentFragment();return typeof c.cloneNode=="undefined"||typeof c.createDocumentFragment=="undefined"||typeof c.createElement=="undefined"}()})();var k={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:j};a.html5=k,j(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return o.call(a)=="[object Function]"}function e(a){return typeof a=="string"}function f(){}function g(a){return!a||a=="loaded"||a=="complete"||a=="uninitialized"}function h(){var a=p.shift();q=1,a?a.t?m(function(){(a.t=="c"?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){a!="img"&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l={},o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};y[c]===1&&(r=1,y[c]=[],l=b.createElement(a)),a=="object"?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),a!="img"&&(r||y[c]===2?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i(b=="c"?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),p.length==1&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&o.call(a.opera)=="[object Opera]",l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return o.call(a)=="[object Array]"},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,i){var j=b(a),l=j.autoCallback;j.url.split(".").pop().split("?").shift(),j.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]||h),j.instead?j.instead(a,e,f,g,i):(y[j.url]?j.noexec=!0:y[j.url]=1,f.load(j.url,j.forceCSS||!j.forceJS&&"css"==j.url.split(".").pop().split("?").shift()?"c":c,j.noexec,j.attrs,j.timeout),(d(e)||d(l))&&f.load(function(){k(),e&&e(j.origUrl,i,g),l&&l(j.origUrl,i,g),y[j.url]=2})))}function i(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var j,l,m=this.yepnope.loader;if(e(a))g(a,0,m,0);else if(w(a))for(j=0;j<a.length;j++)l=a[j],e(l)?g(l,0,m,0):w(l)?B(l):Object(l)===l&&i(l,m);else Object(a)===a&&i(a,m)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,b.readyState==null&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/* jQuery UI - v1.10.3 - 2013-10-29 */
(function(e,t){function i(t,i){var s,n,r,o=t.nodeName.toLowerCase();return"area"===o?(s=t.parentNode,n=s.name,t.href&&n&&"map"===s.nodeName.toLowerCase()?(r=e("img[usemap=#"+n+"]")[0],!!r&&a(r)):!1):(/input|select|textarea|button|object/.test(o)?!t.disabled:"a"===o?t.href||i:i)&&a(t)}function a(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}var s=0,n=/^ui-id-\d+$/;e.ui=e.ui||{},e.extend(e.ui,{version:"1.10.3",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({focus:function(t){return function(i,a){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),a&&a.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),scrollParent:function(){var t;return t=e.ui.ie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.css(this,"position"))&&/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(i){if(i!==t)return this.css("zIndex",i);if(this.length)for(var a,s,n=e(this[0]);n.length&&n[0]!==document;){if(a=n.css("position"),("absolute"===a||"relative"===a||"fixed"===a)&&(s=parseInt(n.css("zIndex"),10),!isNaN(s)&&0!==s))return s;n=n.parent()}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++s)})},removeUniqueId:function(){return this.each(function(){n.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,a){return!!e.data(t,a[3])},focusable:function(t){return i(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var a=e.attr(t,"tabindex"),s=isNaN(a);return(s||a>=0)&&i(t,!s)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(i,a){function s(t,i,a,s){return e.each(n,function(){i-=parseFloat(e.css(t,"padding"+this))||0,a&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),s&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var n="Width"===a?["Left","Right"]:["Top","Bottom"],r=a.toLowerCase(),o={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+a]=function(i){return i===t?o["inner"+a].call(this):this.each(function(){e(this).css(r,s(this,i)+"px")})},e.fn["outer"+a]=function(t,i){return"number"!=typeof t?o["outer"+a].call(this,t):this.each(function(){e(this).css(r,s(this,t,!0,i)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.support.selectstart="onselectstart"in document.createElement("div"),e.fn.extend({disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.extend(e.ui,{plugin:{add:function(t,i,a){var s,n=e.ui[t].prototype;for(s in a)n.plugins[s]=n.plugins[s]||[],n.plugins[s].push([i,a[s]])},call:function(e,t,i){var a,s=e.plugins[t];if(s&&e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType)for(a=0;s.length>a;a++)e.options[s[a][0]]&&s[a][1].apply(e.element,i)}},hasScroll:function(t,i){if("hidden"===e(t).css("overflow"))return!1;var a=i&&"left"===i?"scrollLeft":"scrollTop",s=!1;return t[a]>0?!0:(t[a]=1,s=t[a]>0,t[a]=0,s)}})})(jQuery);(function(e,t){var i=0,s=Array.prototype.slice,a=e.cleanData;e.cleanData=function(t){for(var i,s=0;null!=(i=t[s]);s++)try{e(i).triggerHandler("remove")}catch(n){}a(t)},e.widget=function(i,s,a){var n,r,o,h,l={},u=i.split(".")[0];i=i.split(".")[1],n=u+"-"+i,a||(a=s,s=e.Widget),e.expr[":"][n.toLowerCase()]=function(t){return!!e.data(t,n)},e[u]=e[u]||{},r=e[u][i],o=e[u][i]=function(e,i){return this._createWidget?(arguments.length&&this._createWidget(e,i),t):new o(e,i)},e.extend(o,r,{version:a.version,_proto:e.extend({},a),_childConstructors:[]}),h=new s,h.options=e.widget.extend({},h.options),e.each(a,function(i,a){return e.isFunction(a)?(l[i]=function(){var e=function(){return s.prototype[i].apply(this,arguments)},t=function(e){return s.prototype[i].apply(this,e)};return function(){var i,s=this._super,n=this._superApply;return this._super=e,this._superApply=t,i=a.apply(this,arguments),this._super=s,this._superApply=n,i}}(),t):(l[i]=a,t)}),o.prototype=e.widget.extend(h,{widgetEventPrefix:r?h.widgetEventPrefix:i},l,{constructor:o,namespace:u,widgetName:i,widgetFullName:n}),r?(e.each(r._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,o,i._proto)}),delete r._childConstructors):s._childConstructors.push(o),e.widget.bridge(i,o)},e.widget.extend=function(i){for(var a,n,r=s.call(arguments,1),o=0,h=r.length;h>o;o++)for(a in r[o])n=r[o][a],r[o].hasOwnProperty(a)&&n!==t&&(i[a]=e.isPlainObject(n)?e.isPlainObject(i[a])?e.widget.extend({},i[a],n):e.widget.extend({},n):n);return i},e.widget.bridge=function(i,a){var n=a.prototype.widgetFullName||i;e.fn[i]=function(r){var o="string"==typeof r,h=s.call(arguments,1),l=this;return r=!o&&h.length?e.widget.extend.apply(null,[r].concat(h)):r,o?this.each(function(){var s,a=e.data(this,n);return a?e.isFunction(a[r])&&"_"!==r.charAt(0)?(s=a[r].apply(a,h),s!==a&&s!==t?(l=s&&s.jquery?l.pushStack(s.get()):s,!1):t):e.error("no such method '"+r+"' for "+i+" widget instance"):e.error("cannot call methods on "+i+" prior to initialization; "+"attempted to call method '"+r+"'")}):this.each(function(){var t=e.data(this,n);t?t.option(r||{})._init():e.data(this,n,new a(r,this))}),l}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,s){s=e(s||this.defaultElement||this)[0],this.element=e(s),this.uuid=i++,this.eventNamespace="."+this.widgetName+this.uuid,this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this.bindings=e(),this.hoverable=e(),this.focusable=e(),s!==this&&(e.data(s,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===s&&this.destroy()}}),this.document=e(s.style?s.ownerDocument:s.document||s),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(i,s){var a,n,r,o=i;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof i)if(o={},a=i.split("."),i=a.shift(),a.length){for(n=o[i]=e.widget.extend({},this.options[i]),r=0;a.length-1>r;r++)n[a[r]]=n[a[r]]||{},n=n[a[r]];if(i=a.pop(),s===t)return n[i]===t?null:n[i];n[i]=s}else{if(s===t)return this.options[i]===t?null:this.options[i];o[i]=s}return this._setOptions(o),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,"disabled"===e&&(this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!t).attr("aria-disabled",t),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_on:function(i,s,a){var n,r=this;"boolean"!=typeof i&&(a=s,s=i,i=!1),a?(s=n=e(s),this.bindings=this.bindings.add(s)):(a=s,s=this.element,n=this.widget()),e.each(a,function(a,o){function h(){return i||r.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled")?("string"==typeof o?r[o]:o).apply(r,arguments):t}"string"!=typeof o&&(h.guid=o.guid=o.guid||h.guid||e.guid++);var l=a.match(/^(\w+)\s*(.*)$/),u=l[1]+r.eventNamespace,c=l[2];c?n.delegate(c,u,h):s.bind(u,h)})},_off:function(e,t){t=(t||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.unbind(t).undelegate(t)},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,i,s){var a,n,r=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],n=i.originalEvent)for(a in n)a in i||(i[a]=n[a]);return this.element.trigger(i,s),!(e.isFunction(r)&&r.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,a,n){"string"==typeof a&&(a={effect:a});var r,o=a?a===!0||"number"==typeof a?i:a.effect||i:t;a=a||{},"number"==typeof a&&(a={duration:a}),r=!e.isEmptyObject(a),a.complete=n,a.delay&&s.delay(a.delay),r&&e.effects&&e.effects.effect[o]?s[t](a):o!==t&&s[o]?s[o](a.duration,a.easing,n):s.queue(function(i){e(this)[t](),n&&n.call(s[0]),i()})}})})(jQuery);(function(e){var t=!1;e(document).mouseup(function(){t=!1}),e.widget("ui.mouse",{version:"1.10.3",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(i){return!0===e.data(i.target,t.widgetName+".preventClickEvent")?(e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1):undefined}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName),this._mouseMoveDelegate&&e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(i){if(!t){this._mouseStarted&&this._mouseUp(i),this._mouseDownEvent=i;var s=this,a=1===i.which,n="string"==typeof this.options.cancel&&i.target.nodeName?e(i.target).closest(this.options.cancel).length:!1;return a&&!n&&this._mouseCapture(i)?(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){s.mouseDelayMet=!0},this.options.delay)),this._mouseDistanceMet(i)&&this._mouseDelayMet(i)&&(this._mouseStarted=this._mouseStart(i)!==!1,!this._mouseStarted)?(i.preventDefault(),!0):(!0===e.data(i.target,this.widgetName+".preventClickEvent")&&e.removeData(i.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return s._mouseMove(e)},this._mouseUpDelegate=function(e){return s._mouseUp(e)},e(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),i.preventDefault(),t=!0,!0)):!0}},_mouseMove:function(t){return e.ui.ie&&(!document.documentMode||9>document.documentMode)&&!t.button?this._mouseUp(t):this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){return e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})})(jQuery);(function(e){var t=5;e.widget("ui.slider",e.ui.mouse,{version:"1.10.3",widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null,change:null,slide:null,start:null,stop:null},_create:function(){this._keySliding=!1,this._mouseSliding=!1,this._animateOff=!0,this._handleIndex=null,this._detectOrientation(),this._mouseInit(),this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget"+" ui-widget-content"+" ui-corner-all"),this._refresh(),this._setOption("disabled",this.options.disabled),this._animateOff=!1},_refresh:function(){this._createRange(),this._createHandles(),this._setupEvents(),this._refreshValue()},_createHandles:function(){var t,i,s=this.options,a=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),n="<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",r=[];for(i=s.values&&s.values.length||1,a.length>i&&(a.slice(i).remove(),a=a.slice(0,i)),t=a.length;i>t;t++)r.push(n);this.handles=a.add(e(r.join("")).appendTo(this.element)),this.handle=this.handles.eq(0),this.handles.each(function(t){e(this).data("ui-slider-handle-index",t)})},_createRange:function(){var t=this.options,i="";t.range?(t.range===!0&&(t.values?t.values.length&&2!==t.values.length?t.values=[t.values[0],t.values[0]]:e.isArray(t.values)&&(t.values=t.values.slice(0)):t.values=[this._valueMin(),this._valueMin()]),this.range&&this.range.length?this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({left:"",bottom:""}):(this.range=e("<div></div>").appendTo(this.element),i="ui-slider-range ui-widget-header ui-corner-all"),this.range.addClass(i+("min"===t.range||"max"===t.range?" ui-slider-range-"+t.range:""))):this.range=e([])},_setupEvents:function(){var e=this.handles.add(this.range).filter("a");this._off(e),this._on(e,this._handleEvents),this._hoverable(e),this._focusable(e)},_destroy:function(){this.handles.remove(),this.range.remove(),this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"),this._mouseDestroy()},_mouseCapture:function(t){var i,s,a,n,r,o,h,l,u=this,c=this.options;return c.disabled?!1:(this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),i={x:t.pageX,y:t.pageY},s=this._normValueFromMouse(i),a=this._valueMax()-this._valueMin()+1,this.handles.each(function(t){var i=Math.abs(s-u.values(t));(a>i||a===i&&(t===u._lastChangedValue||u.values(t)===c.min))&&(a=i,n=e(this),r=t)}),o=this._start(t,r),o===!1?!1:(this._mouseSliding=!0,this._handleIndex=r,n.addClass("ui-state-active").focus(),h=n.offset(),l=!e(t.target).parents().addBack().is(".ui-slider-handle"),this._clickOffset=l?{left:0,top:0}:{left:t.pageX-h.left-n.width()/2,top:t.pageY-h.top-n.height()/2-(parseInt(n.css("borderTopWidth"),10)||0)-(parseInt(n.css("borderBottomWidth"),10)||0)+(parseInt(n.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(t,r,s),this._animateOff=!0,!0))},_mouseStart:function(){return!0},_mouseDrag:function(e){var t={x:e.pageX,y:e.pageY},i=this._normValueFromMouse(t);return this._slide(e,this._handleIndex,i),!1},_mouseStop:function(e){return this.handles.removeClass("ui-state-active"),this._mouseSliding=!1,this._stop(e,this._handleIndex),this._change(e,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1,!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(e){var t,i,s,a,n;return"horizontal"===this.orientation?(t=this.elementSize.width,i=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(t=this.elementSize.height,i=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),s=i/t,s>1&&(s=1),0>s&&(s=0),"vertical"===this.orientation&&(s=1-s),a=this._valueMax()-this._valueMin(),n=this._valueMin()+s*a,this._trimAlignValue(n)},_start:function(e,t){var i={handle:this.handles[t],value:this.value()};return this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("start",e,i)},_slide:function(e,t,i){var s,a,n;this.options.values&&this.options.values.length?(s=this.values(t?0:1),2===this.options.values.length&&this.options.range===!0&&(0===t&&i>s||1===t&&s>i)&&(i=s),i!==this.values(t)&&(a=this.values(),a[t]=i,n=this._trigger("slide",e,{handle:this.handles[t],value:i,values:a}),s=this.values(t?0:1),n!==!1&&this.values(t,i,!0))):i!==this.value()&&(n=this._trigger("slide",e,{handle:this.handles[t],value:i}),n!==!1&&this.value(i))},_stop:function(e,t){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("stop",e,i)},_change:function(e,t){if(!this._keySliding&&!this._mouseSliding){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._lastChangedValue=t,this._trigger("change",e,i)}},value:function(e){return arguments.length?(this.options.value=this._trimAlignValue(e),this._refreshValue(),this._change(null,0),undefined):this._value()},values:function(t,i){var s,a,n;if(arguments.length>1)return this.options.values[t]=this._trimAlignValue(i),this._refreshValue(),this._change(null,t),undefined;if(!arguments.length)return this._values();if(!e.isArray(arguments[0]))return this.options.values&&this.options.values.length?this._values(t):this.value();for(s=this.options.values,a=arguments[0],n=0;s.length>n;n+=1)s[n]=this._trimAlignValue(a[n]),this._change(null,n);this._refreshValue()},_setOption:function(t,i){var s,a=0;switch("range"===t&&this.options.range===!0&&("min"===i?(this.options.value=this._values(0),this.options.values=null):"max"===i&&(this.options.value=this._values(this.options.values.length-1),this.options.values=null)),e.isArray(this.options.values)&&(a=this.options.values.length),e.Widget.prototype._setOption.apply(this,arguments),t){case"orientation":this._detectOrientation(),this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation),this._refreshValue();break;case"value":this._animateOff=!0,this._refreshValue(),this._change(null,0),this._animateOff=!1;break;case"values":for(this._animateOff=!0,this._refreshValue(),s=0;a>s;s+=1)this._change(null,s);this._animateOff=!1;break;case"min":case"max":this._animateOff=!0,this._refreshValue(),this._animateOff=!1;break;case"range":this._animateOff=!0,this._refresh(),this._animateOff=!1}},_value:function(){var e=this.options.value;return e=this._trimAlignValue(e)},_values:function(e){var t,i,s;if(arguments.length)return t=this.options.values[e],t=this._trimAlignValue(t);if(this.options.values&&this.options.values.length){for(i=this.options.values.slice(),s=0;i.length>s;s+=1)i[s]=this._trimAlignValue(i[s]);return i}return[]},_trimAlignValue:function(e){if(this._valueMin()>=e)return this._valueMin();if(e>=this._valueMax())return this._valueMax();var t=this.options.step>0?this.options.step:1,i=(e-this._valueMin())%t,s=e-i;return 2*Math.abs(i)>=t&&(s+=i>0?t:-t),parseFloat(s.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var t,i,s,a,n,r=this.options.range,o=this.options,h=this,l=this._animateOff?!1:o.animate,u={};this.options.values&&this.options.values.length?this.handles.each(function(s){i=100*((h.values(s)-h._valueMin())/(h._valueMax()-h._valueMin())),u["horizontal"===h.orientation?"left":"bottom"]=i+"%",e(this).stop(1,1)[l?"animate":"css"](u,o.animate),h.options.range===!0&&("horizontal"===h.orientation?(0===s&&h.range.stop(1,1)[l?"animate":"css"]({left:i+"%"},o.animate),1===s&&h.range[l?"animate":"css"]({width:i-t+"%"},{queue:!1,duration:o.animate})):(0===s&&h.range.stop(1,1)[l?"animate":"css"]({bottom:i+"%"},o.animate),1===s&&h.range[l?"animate":"css"]({height:i-t+"%"},{queue:!1,duration:o.animate}))),t=i}):(s=this.value(),a=this._valueMin(),n=this._valueMax(),i=n!==a?100*((s-a)/(n-a)):0,u["horizontal"===this.orientation?"left":"bottom"]=i+"%",this.handle.stop(1,1)[l?"animate":"css"](u,o.animate),"min"===r&&"horizontal"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({width:i+"%"},o.animate),"max"===r&&"horizontal"===this.orientation&&this.range[l?"animate":"css"]({width:100-i+"%"},{queue:!1,duration:o.animate}),"min"===r&&"vertical"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({height:i+"%"},o.animate),"max"===r&&"vertical"===this.orientation&&this.range[l?"animate":"css"]({height:100-i+"%"},{queue:!1,duration:o.animate}))},_handleEvents:{keydown:function(i){var s,a,n,r,o=e(i.target).data("ui-slider-handle-index");switch(i.keyCode){case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(i.preventDefault(),!this._keySliding&&(this._keySliding=!0,e(i.target).addClass("ui-state-active"),s=this._start(i,o),s===!1))return}switch(r=this.options.step,a=n=this.options.values&&this.options.values.length?this.values(o):this.value(),i.keyCode){case e.ui.keyCode.HOME:n=this._valueMin();break;case e.ui.keyCode.END:n=this._valueMax();break;case e.ui.keyCode.PAGE_UP:n=this._trimAlignValue(a+(this._valueMax()-this._valueMin())/t);break;case e.ui.keyCode.PAGE_DOWN:n=this._trimAlignValue(a-(this._valueMax()-this._valueMin())/t);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:if(a===this._valueMax())return;n=this._trimAlignValue(a+r);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(a===this._valueMin())return;n=this._trimAlignValue(a-r)}this._slide(i,o,n)},click:function(e){e.preventDefault()},keyup:function(t){var i=e(t.target).data("ui-slider-handle-index");this._keySliding&&(this._keySliding=!1,this._stop(t,i),this._change(t,i),e(t.target).removeClass("ui-state-active"))}}})})(jQuery);
/* HASH */
(function(){var b={},h=0,f=!1,k=null,g=null,l=function(){k||(k=setInterval(function(){0<h&&g!=window.location.href&&(g=window.location.href,window.Hash.check())},100))};window.Hash=function(a){return Object.freeze?Object.freeze(a):a}({pushState:function(a){window.history&&window.history.pushState&&(f=a);return this},fragment:function(){var a=window.location.href.split("#");return f?window.location.pathname+(a[1]?"#"+a[1]:""):a[1]||""},get:function(a,c){var b,d=[];for(b in c)Object.prototype.hasOwnProperty(b)&& d.push(encodeURIComponent(b)+"="+encodeURIComponent(c[b]));0<d.length&&(d="?"+d.join("&"));return f?a+d:window.location.href.split("#")[0]+"#"+a+d},go:function(a,b){if(this.fragment()!=a){var e=this.get(a,b);f?window.history.pushState(null,document.title,e):window.location.href=e}return this},update:function(){g=window.location.href;return this},on:function(a,c,e){b[a]||(b[a]={title:e,listeners:[]});b[a].listeners.push(c);h++;l();return this},check:function(){var a,c,e,d=this.fragment();for(c in b)if(Object.prototype.hasOwnProperty.call(b, c))if(b[c].regexp=b[c].regexp||RegExp(c),e=b[c].regexp.exec(d))for(b[c].title&&(document.title=b[c].title),a=0;a<b[c].listeners.length;a++)b[c].listeners[a].yep&&b[c].listeners[a].yep(d,e);else for(a=0;a<b[c].listeners.length;a++)b[c].listeners[a].nop&&b[c].listeners[a].nop(d);return this}})})();


function clickElement(element, func) {
    if ($.isTouch) {
        element.bind($.mouseEvents.up, func);
    } else {
        element.click(func);
    }
}

function navigation(where) {

    switch (where) {

        case 'table-contents' :
            $('.flipbook').turn('page', $('.table-contents').attr('rel'));
            break;
        case 'share-facebook' :
            window.open('https://www.facebook.com/sharer.php?' +
                'u=' + encodeURIComponent(rawPublicationLink) +
                '&t=' + encodeURIComponent(rawPublicationTitle));

            break;
        case 'share-twitter' :
            window.open('https://twitter.com/intent/tweet?' +
                'original_referer=' + encodeURIComponent(rawPublicationLink) +
                '&url=' + encodeURIComponent(rawPublicationLink) +
                '&text=' + encodeURIComponent(rawPublicationTitle));

            break;
        case 'share-pinterest' :
            window.open('http://pinterest.com/pin/create/button/?url=' +
                'url=' + encodeURIComponent(rawPublicationLink) +
                '&media=' + encodeURIComponent(rawPublicationTitle));

            break;
        case 'share-plus' :
            window.open('https://plusone.google.com/_/+1/confirm?' +
                'url=' + encodeURIComponent(rawPublicationLink));
            break;
    }

}

function checkCloseBtn() {
    if (window.top !== window.self) {
        $('.icon-close').hide();
    }
}

function resizeViewport() {
    var width = $(window).width(),
        height = $(window).height(),
        options = $('.flipbook').turn('options');

    $('.flipbook-viewport').css({
        width: width,
        height: height
    });
}

(function ($) {
    $.getQuery = function (query) {
        query = query.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var expr = "[\\?&]" + query + "=([^&#]*)";
        var regex = new RegExp(expr);
        var results = regex.exec(window.location.href);
        if (results !== null) {
            return results[1];
            return decodeURIComponent(results[1].replace(/\+/g, " "));
        } else {
            return false;
        }
    };
})(jQuery);

$(window).load(function () {
    $(".load-overlay").fadeOut(1000);
});

if (screenfull.enabled) {
    document.addEventListener(screenfull.raw.fullscreenchange, function () {
        if (screenfull.isFullscreen && isTablet) {
            resizeViewport_Tablet();
        }
    });
}

$(document).ready(function () {
    $('.zoom-in-ico').on('click', function (event) {
        var currPage = $('.flipbook').turn('page');
        var cntPages = $('.flipbook').turn('pages');
        if ((imgLink.hasOwnProperty(currPage) && imgLink[currPage].hasOwnProperty('large') && imgLink[currPage].hasOwnProperty('small')) &&
            (currPage == cntPages || (imgLink.hasOwnProperty(currPage + 1) && imgLink[currPage + 1].hasOwnProperty('large') && imgLink[currPage + 1].hasOwnProperty('small')))
            ) {
            $('#mainFlipBookDiv').zoom('zoomIn');
        }
        else {
            if ($('.flipbook').data().zoomIn) {
                zoomOutText();
            }
            else {
                zoomInText(event, true);
            }
        }
    });

    $('#fullscreen').click(function () {
        if (isModal == 3 && $.getQuery('fullscreen') != 1) {
            var newWin = window.open(window.location.href + '?fullscreen=1');
            window.opener = null;
            newWin.focus();
            return;
        }
        if (screenfull) {
            screenfull.request(document.getElementById('mainFlipBookDiv'));
        }
    });

    if ($.getQuery('fullscreen') == 1) {
        alert('If you want to enable fullscreen mode, please press on "Fullscreen" button');
    }

    if (screenfull.enabled) {
        document.addEventListener(screenfull.raw.fullscreenchange, function () {
            if (screenfull.isFullscreen) {
                resizeViewport();
            }
            else if (isModal == 1) {
                location.reload();
            }
        });
    }

    checkCloseBtn();

    $('#goto_page_input').on('keyup', function (e) {
        if (e.which == 13) {
            $('#goto_page_input_button').click();
        }
    });

    clickElement($('.tbicon'), function (e) {
        navigation($.trim($(this).
            attr('class').
            replace(/\b([a-z-]*hover|tbicon)\b/g, '')));
    });

    $(document).keydown(function (e) {
        switch (e.keyCode) {
            case 37:
                $('.flipbook').turn('previous');
                return false;
                break;
            case 39:
                $('.flipbook').turn('next');
                return false;
                break;
        }
    });

    // Slider
    $("#slider").slider({
        min: 1,
        max: 100,

        start: function (event, ui) {
            if (!window._thumbPreview) {
                _thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
                setPreview(ui.value);
                _thumbPreview.appendTo($(ui.handle));
            } else
                setPreview(ui.value);

            moveBar(false);
        },

        slide: function (event, ui) {
            setPreview(ui.value);
        },

        stop: function () {
            if (window._thumbPreview)
                _thumbPreview.removeClass('show');

            $('.flipbook').turn('page', Math.max(1, $(this).slider('value') * 2 - 2));
        }
    });

});


function setSliderMaxViews() {
    numberOfViews = ( $('.flipbook').turn('pages') % 2 == 0 ? $('.flipbook').turn('pages') / 2 + 1 : ($('.flipbook').turn('pages') + 1) / 2);
    $('#slider').slider('option', 'max', numberOfViews);
}

function getViewNumber(book, page) {
    return parseInt((page || book.turn('page')) / 2 + 1, 10);
}

function moveBar(yes) {
    if (Modernizr && Modernizr.csstransforms) {
        $('#slider .ui-slider-handle').css({zIndex: yes ? -1 : 10000});
    }
}

function setPreview(view) {

    if (sliderThumbs) {
        var previewWidth = 114,
            previewHeight = 73,
            pagesCount = $('.flipbook').turn('pages');
        preview = $(_thumbPreview.children(':first'));

        if (pagesCount % 2 != 0)
            width = (view == 1) ? previewWidth / 2 : previewWidth;
        else
            width = (view == 1 || view == $('#slider').slider('option', 'max') ) ? previewWidth / 2 : previewWidth;
    }
    else {
        var width = ($('#slider').slider('option', 'max') > 49 ? 55 : 45),
            previewHeight = 25,
            preview = $(_thumbPreview.children(':first'));
    }

    _thumbPreview.
        addClass('no-transition').
        css({width: width + 15,
            height: previewHeight + 15,
            top: -previewHeight - 30,
            left: ($($('#slider').children(':first')).width() - width - 15) / 2
        });

    preview.css({
        width: width,
        height: previewHeight
    });

    if (sliderThumbs) {
        if (preview.css('background-image') === '' ||
            preview.css('background-image') == 'none') {

            preview.css({backgroundImage: 'url(' + previewSrc + ')'});

            setTimeout(function () {
                _thumbPreview.removeClass('no-transition');
            }, 0);

        }

        preview.css({backgroundPosition: '0px -' + ((view - 1) * previewHeight) + 'px'
        });
    }
    else {
        if (view == 1)
            echopage = view;
        else if (view == $('#slider').slider('option', 'max') && $('.flipbook').turn('pages') % 2 == 0)
            echopage = (view * 2 - 1);
        else
            echopage = (view * 2 - 2) + '-' + (view * 2 - 1);

        preview.html('<b>' + echopage + '</b>');
    }
}

function zoomOutButton(show) {
    var $zoomOutICO = $('.zoom-out');
    if (!$zoomOutICO.length) {
        var $zoomOutICO = $('<i />', {'class': 'tbicon zoom-out'})
            .insertAfter($('#mainFlipBookDiv'))
            .mouseover(function () {
                $zoomOutICO.addClass('zoom-out-hover');
            })
            .mouseout(function () {
                $zoomOutICO.removeClass('zoom-out-hover');
            })
            .click(function () {
                var currPage = $('.flipbook').turn('page');
                var cntPages = $('.flipbook').turn('pages');
                if ((imgLink.hasOwnProperty(currPage) && imgLink[currPage].hasOwnProperty('large') && imgLink[currPage].hasOwnProperty('small')) &&
                    (currPage == cntPages || (imgLink.hasOwnProperty(currPage + 1) && imgLink[currPage + 1].hasOwnProperty('large') && imgLink[currPage + 1].hasOwnProperty('small')))) {
                    $('#mainFlipBookDiv').zoom('zoomOut');
                }
                else {
                    zoomOutText();
                }
                $zoomOutICO.hide();
            });
    }
    //Fix for modal window
    $('.html5fb-overlay').hide();

    $zoomOutICO.css({display: (show) ? '' : 'none'});
}

function loadLargePage(page, pageElement, imgSRC) {
    var img = $('<img />');

    img.load(function () {
        var prevImg = pageElement.find('img');
        $(this).css({width: '100%', height: '100%'});
        $(this).appendTo(pageElement);
        prevImg.remove();
    });

    img.attr('src', imgSRC);
}

function loadSmallPage(page, pageElement, imgSRC) {
    var img = pageElement.find('img');
    img.css({width: '100%', height: '100%'});
    img.unbind('load');
    img.attr('src', imgSRC);
}

function zoomTo(event) {
    var currPage = $('.flipbook').turn('page');
    var cntPages = $('.flipbook').turn('pages');
    if ((imgLink.hasOwnProperty(currPage) && imgLink[currPage].hasOwnProperty('large') && imgLink[currPage].hasOwnProperty('small')) &&
        (currPage == cntPages || (imgLink.hasOwnProperty(currPage + 1) && imgLink[currPage + 1].hasOwnProperty('large') && imgLink[currPage + 1].hasOwnProperty('small')))) {
        if ($(this).zoom('value') == 1) {
            $(this).zoom('zoomIn', event);
        }
        else {
            $(this).zoom('zoomOut');
        }
    }
    else {
        if ($('.flipbook').data().zoomIn)
            zoomOutText();
        else if (event.target) {
            zoomInText(event, false);
        }
    }
}

function point2D(x, y) {
    return {x: x, y: y};
}

function zoomInText(event, full) {
    var flipPos, offsetLeft = 0,
        invz = 1 / 2.4,
        elem = $(event.target),
        $mainContainer = $('#mainFlipBookDiv'),
        flip = $('.flipbook'),
        dir = flip.turn('direction'),
        flipOffset = flip.offset(),
        thisOffset = elem.offset(),
        flipSize = {height: flip.height()},
        view = flip.turn('view');

    if (!view[0]) {
        flipSize.width = flip.width() / 2;
        offsetLeft = (dir == 'ltr') ? flipSize.width : 0;
        flipPos = point2D(
            (dir == 'ltr') ? flipOffset.left - thisOffset.left + flipSize.width : flipOffset.left - thisOffset.left,
            flipOffset.top - thisOffset.top
        );

    } else if (!view[1]) {
        flipSize.width = flip.width() / 2;
        offsetLeft = (dir == 'ltr') ? 0 : flipSize.width;
        flipPos = point2D(
            (dir == 'ltr') ? flipOffset.left - thisOffset.left : flipOffset.left - thisOffset.left + flipSize.width,
            flipOffset.top - thisOffset.top
        );
    } else {
        flipSize.width = flip.width();
        flipPos = point2D(
            flipOffset.left - thisOffset.left,
            flipOffset.top - thisOffset.top
        );
    }

    var bound = {pos: flipPos, size: flipSize};

    var flipPos = bound.pos,
        zoom = 2.4,
        center = point2D(bound.size.width / 2, bound.size.height / 2),
        transitionEnd = $.cssTransitionEnd(),
        autoCenter = flip.data().opts.autoCenter,
        completeTransition = function () {
            $mainContainer.unbind(transitionEnd);

            if (flip.data().zoomIn) {
                $('body').css({'overflow': 'visible'});
            }
        };

    flip.data().noCenter = true;

    if (typeof(event) != 'undefined') {
        if ('x' in event && 'y' in event) {
            pos = point2D(event.x - flipPos.x, event.y - flipPos.y);
        } else {
            pos = ($.isTouch) ?
                point2D(
                    event.originalEvent.touches[0].pageX - flipPos.x - thisOffset.left,
                    event.originalEvent.touches[0].pageY - flipPos.y - thisOffset.top
                )
                :
                point2D(
                    event.pageX - flipPos.x - thisOffset.left,
                    event.pageY - flipPos.y - thisOffset.top
                );
        }
    }
    else {
        pos = point2D(center.x, center.y);
    }

    if (pos.x < 0 || pos.y < 0 || pos.x > bound.width || pos.y > bound.height) {
        pos.x = center.x;
        pos.y = center.y;
    }

    var compose = point2D(
            (pos.x - center.x) * zoom + center.x,
            (pos.y - center.y) * zoom + center.y
        ),
        move = point2D(
            (bound.size.width * zoom > elem.width()) ? pos.x - compose.x : 0,
            (bound.size.height * zoom > elem.height()) ? pos.y - compose.y : 0
        ),
        maxMove = point2D(
            Math.abs(bound.size.width * zoom - elem.width()),
            Math.abs(bound.size.height * zoom - elem.height())
        ),
        minMove = point2D(
            Math.min(0, bound.size.width * zoom - elem.width()),
            Math.min(0, bound.size.height * zoom - elem.height())
        ),
        realPos = point2D(
            center.x * zoom - center.x - flipPos.x - move.x,
            center.y * zoom - center.y - flipPos.y - move.y
        );

    if (realPos.y > maxMove.y)
        move.y = realPos.y - maxMove.y + move.y;
    else if (realPos.y < minMove.y)
        move.y = realPos.y - minMove.y + move.y;

    if (realPos.x > maxMove.x) {
        move.x = realPos.x - maxMove.x + move.x;
    } else if (realPos.x < minMove.x) {
        move.x = realPos.x - minMove.x + move.x;
    }

    realPos = point2D(
        center.x * zoom - center.x - flipPos.x - move.x,
        center.y * zoom - center.y - flipPos.y - move.y
    );

    if (full) {
        $('#zoom-viewport').css('margin', 0);
        $mainContainer.css({width: maxMove.x, height: maxMove.y});
        move = {
            x: -maxMove.x / 2,
            y: -maxMove.y / 2
        };
    }

    flip.data().zoomIn = true;

    flip.turn('disable', true);

    $(window).resize(zoomOutText);

    $('#slider-bar, #page-bar, .fb_topBar').hide();

    $mainContainer.css({overflow: 'visible'});

    var has3d = 'WebKitCSSMatrix' in window || 'MozPerspective' in document.body.style;
    $mainContainer.transform((has3d) ? 'translate3d(' + move.x + 'px,' + move.y + 'px, 0px) scale3d(' + zoom + ', ' + zoom + ', 1)' : ' translate(' + move.x + 'px, ' + move.y + 'px) scale(' + zoom + ')');

    zoomOutButton(true);

    if (transitionEnd) {
        $mainContainer.bind(transitionEnd, completeTransition);
    } else {
        setTimeout(completeTransition, 1000);
    }
}

function zoomOutText() {
    var transitionEnd = $.cssTransitionEnd(),
        completeTransition = function (e) {
            $('#mainFlipBookDiv').unbind(transitionEnd);
            $('.flipbook').turn('disable', false);
            $('body').css({'overflow': 'hidden'});
            moveBar(false);
        };

    $('.flipbook').data().zoomIn = false;

    $(window).unbind('resize', zoomOutText);

    moveBar(true);

    $('#mainFlipBookDiv').transform('scale(1)');
    $('#slider-bar, #page-bar, .fb_topBar').show();

    if (transitionEnd) {
        if ($('#zoom-viewport').attr('style')) {
            $('#zoom-viewport').removeAttr('style');
        }
        $('#mainFlipBookDiv').css({overflow: 'hidden', width: 'auto', height: 'auto'}).bind(transitionEnd, completeTransition);
        zoomOutButton(false);
    }
    else {
        setTimeout(completeTransition, 1000);
    }
}

// Calculate the width and height of a square within another square
function calculateBound(d) {
    var bound = {width: d.width, height: d.height};

    if (bound.width > d.boundWidth || bound.height > d.boundHeight) {
        var rel = bound.width/bound.height;

        if (d.boundWidth/rel > d.boundHeight && d.boundHeight*rel <= d.boundWidth) {
            bound.width = Math.round(d.boundHeight*rel);
            bound.height = d.boundHeight;
        }
        else {
            bound.width = d.boundWidth;
            bound.height = Math.round(d.boundWidth/rel);
        }
    }

    return bound;
}

// Set the width and height for the viewport
function resizeViewport_Tablet() {
    var width = $(window).width(),
        height = $(window).height(),
        options = $('.flipbook').turn('options');

    $('.flipbook').removeClass('animated');

    $('#mainFlipBookDiv').css({
        width: width,
        height: height
    }).zoom('resize');


    if ($('.flipbook').turn('zoom') == 1) {
        var bound = calculateBound({
            width: options.width,
            height: options.height,
            boundWidth: Math.min(options.width, width),
            boundHeight: Math.min(options.height, height)
        });

        if (bound.width % 2 !== 0)
            bound.width -= 1;

        if (bound.width != $('.flipbook').width() || bound.height != $('.flipbook').height()) {
            $('.flipbook').turn('size', bound.width, bound.height);

            if ($('.flipbook').turn('page') == 1)
                $('.flipbook').turn('peel', 'br');
        }

        $('.flipbook').css({top: -(bound.height) / 2, left: -bound.width / 2});

        var pageBarWidth = $('#page-bar').outerWidth(true);
        $('#slider-bar').css({left: (pageBarWidth < 100 ? 160 : pageBarWidth + 50), maxWidth: $('.tablet-bottomBar').width() - $('#page-bar').outerWidth(true) - 80});
    }

    $('.flipbook').addClass('animated');
}

function fbTurningPage(page, pages, slider_one_page_left, slider_tho_page_left, isTablet) {
    if (page == 1) {
        if (!isTablet) {
            $('#slider-bar').css('left', slider_one_page_left + 'px');
        }
        $('#fb_bookname').hide();
        $('#page-bar').hide();
        $('.tb_social').css({'float': 'right', 'margin-left': '0'});
    }
    else {
        if (page != pages) {
            if (!isTablet) {
                $('#slider-bar').css('left', slider_tho_page_left + 'px');
            }
            $('#fb_bookname').show();
            $('#page-bar').show();
            $('.tb_social').css({'float': 'right', 'margin-left': '0'});
        }
        else {
            if (!isTablet) {
                $('#slider-bar').css('left', '-80px');
            }
            $('#fb_bookname').hide();
            $('#page-bar').hide();
            $('.tb_social').css({'float': 'left', 'margin-left': '200px'});
        }
    }
}

function isChrome() {
    return navigator.userAgent.indexOf('Chrome/19') !=- 1 ||
        navigator.userAgent.indexOf('Chrome/20') !=- 1;
}
