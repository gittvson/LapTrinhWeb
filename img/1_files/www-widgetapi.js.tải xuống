(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var r;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function ca(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var da=ca(this);function t(a,b){if(b)a:{for(var c=da,d=a.split("."),e=0;e<d.length-1;e++){var f=d[e];if(!(f in c))break a;c=c[f]}d=d[d.length-1];e=c[d];f=b(e);f!=e&&null!=f&&ba(c,d,{configurable:!0,writable:!0,value:f})}}
t("Symbol",function(a){function b(e){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c("jscomp_symbol_"+(e||"")+"_"+d++,e)}
function c(e,f){this.h=e;ba(this,"description",{configurable:!0,writable:!0,value:f})}
if(a)return a;c.prototype.toString=function(){return this.h};
var d=0;return b});
t("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=da[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ea(aa(this))}})}return a});
function ea(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function u(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
var ia="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},ja;
if("function"==typeof Object.setPrototypeOf)ja=Object.setPrototypeOf;else{var ka;a:{var la={a:!0},ma={};try{ma.__proto__=la;ka=ma.a;break a}catch(a){}ka=!1}ja=ka?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var na=ja;
function y(a,b){a.prototype=ia(b.prototype);a.prototype.constructor=a;if(na)na(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.B=b.prototype}
function oa(){this.s=!1;this.j=null;this.m=void 0;this.h=1;this.l=this.o=0;this.C=this.i=null}
function pa(a){if(a.s)throw new TypeError("Generator is already running");a.s=!0}
oa.prototype.v=function(a){this.m=a};
function qa(a,b){a.i={X:b,Y:!0};a.h=a.o||a.l}
oa.prototype["return"]=function(a){this.i={"return":a};this.h=this.l};
function z(a,b,c){a.h=c;return{value:b}}
oa.prototype.F=function(a){this.h=a};
function ra(a,b,c){a.o=b;void 0!=c&&(a.l=c)}
function ua(a){a.o=0;var b=a.i.X;a.i=null;return b}
function va(a){this.h=new oa;this.i=a}
function wa(a,b){pa(a.h);var c=a.h.j;if(c)return xa(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.h["return"]);
a.h["return"](b);return za(a)}
function xa(a,b,c,d){try{var e=b.call(a.h.j,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.h.s=!1,e;var f=e.value}catch(g){return a.h.j=null,qa(a.h,g),za(a)}a.h.j=null;d.call(a.h,f);return za(a)}
function za(a){for(;a.h.h;)try{var b=a.i(a.h);if(b)return a.h.s=!1,{value:b.value,done:!1}}catch(c){a.h.m=void 0,qa(a.h,c)}a.h.s=!1;if(a.h.i){b=a.h.i;a.h.i=null;if(b.Y)throw b.X;return{value:b["return"],done:!0}}return{value:void 0,done:!0}}
function Aa(a){this.next=function(b){pa(a.h);a.h.j?b=xa(a,a.h.j.next,b,a.h.v):(a.h.v(b),b=za(a));return b};
this["throw"]=function(b){pa(a.h);a.h.j?b=xa(a,a.h.j["throw"],b,a.h.v):(qa(a.h,b),b=za(a));return b};
this["return"]=function(b){return wa(a,b)};
this[Symbol.iterator]=function(){return this}}
function Ba(a,b){var c=new Aa(new va(b));na&&a.prototype&&na(c,a.prototype);return c}
t("Reflect.setPrototypeOf",function(a){return a?a:na?function(b,c){try{return na(b,c),!0}catch(d){return!1}}:null});
t("Object.setPrototypeOf",function(a){return a||na});
function A(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var Ca="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)A(d,e)&&(a[e]=d[e])}return a};
t("Object.assign",function(a){return a||Ca});
t("Promise",function(a){function b(g){this.h=0;this.j=void 0;this.i=[];this.s=!1;var h=this.l();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.h=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.i=function(g){if(null==this.h){this.h=[];var h=this;this.j(function(){h.m()})}this.h.push(g)};
var e=da.setTimeout;c.prototype.j=function(g){e(g,0)};
c.prototype.m=function(){for(;this.h&&this.h.length;){var g=this.h;this.h=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.l(l)}}}this.h=null};
c.prototype.l=function(g){this.j(function(){throw g;})};
b.prototype.l=function(){function g(l){return function(m){k||(k=!0,l.call(h,m))}}
var h=this,k=!1;return{resolve:g(this.ia),reject:g(this.m)}};
b.prototype.ia=function(g){if(g===this)this.m(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.ka(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.ha(g):this.o(g)}};
b.prototype.ha=function(g){var h=void 0;try{h=g.then}catch(k){this.m(k);return}"function"==typeof h?this.la(h,g):this.o(g)};
b.prototype.m=function(g){this.v(2,g)};
b.prototype.o=function(g){this.v(1,g)};
b.prototype.v=function(g,h){if(0!=this.h)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.h);this.h=g;this.j=h;2===this.h&&this.ja();this.C()};
b.prototype.ja=function(){var g=this;e(function(){if(g.I()){var h=da.console;"undefined"!==typeof h&&h.error(g.j)}},1)};
b.prototype.I=function(){if(this.s)return!1;var g=da.CustomEvent,h=da.Event,k=da.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=da.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.j;return k(g)};
b.prototype.C=function(){if(null!=this.i){for(var g=0;g<this.i.length;++g)f.i(this.i[g]);this.i=null}};
var f=new c;b.prototype.ka=function(g){var h=this.l();g.O(h.resolve,h.reject)};
b.prototype.la=function(g,h){var k=this.l();try{g.call(h,k.resolve,k.reject)}catch(l){k.reject(l)}};
b.prototype.then=function(g,h){function k(q,p){return"function"==typeof q?function(w){try{l(q(w))}catch(v){m(v)}}:p}
var l,m,n=new b(function(q,p){l=q;m=p});
this.O(k(g,l),k(h,m));return n};
b.prototype["catch"]=function(g){return this.then(void 0,g)};
b.prototype.O=function(g,h){function k(){switch(l.h){case 1:g(l.j);break;case 2:h(l.j);break;default:throw Error("Unexpected state: "+l.h);}}
var l=this;null==this.i?f.i(k):this.i.push(k);this.s=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var l=u(g),m=l.next();!m.done;m=l.next())d(m.value).O(h,k)})};
b.all=function(g){var h=u(g),k=h.next();return k.done?d([]):new b(function(l,m){function n(w){return function(v){q[w]=v;p--;0==p&&l(q)}}
var q=[],p=0;do q.push(void 0),p++,d(k.value).O(n(q.length-1),m),k=h.next();while(!k.done)})};
return b});
function Da(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
t("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=Da(this,b,"endsWith");b+="";void 0===c&&(c=d.length);for(var e=Math.max(0,Math.min(c|0,d.length)),f=b.length;0<f&&0<e;)if(d[--e]!=b[--f])return!1;return 0>=f}});
t("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=Da(this,b,"startsWith");b+="";for(var e=d.length,f=b.length,g=Math.max(0,Math.min(c|0,d.length)),h=0;h<f&&g<e;)if(d[g++]!=b[h++])return!1;return h>=f}});
function Ha(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
t("Array.prototype.entries",function(a){return a?a:function(){return Ha(this,function(b,c){return[b,c]})}});
t("Array.prototype.keys",function(a){return a?a:function(){return Ha(this,function(b){return b})}});
t("Array.prototype.values",function(a){return a?a:function(){return Ha(this,function(b,c){return c})}});
t("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
t("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length,f=c||0;for(0>f&&(f=Math.max(f+e,0));f<e;f++){var g=d[f];if(g===b||Object.is(g,b))return!0}return!1}});
t("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==Da(this,b,"includes").indexOf(b,c||0)}});
t("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)A(b,d)&&c.push([d,b[d]]);return c}});
t("WeakMap",function(a){function b(k){this.h=(h+=Math.random()+1).toString();if(k){k=u(k);for(var l;!(l=k.next()).done;)l=l.value,this.set(l[0],l[1])}}
function c(){}
function d(k){var l=typeof k;return"object"===l&&null!==k||"function"===l}
function e(k){if(!A(k,g)){var l=new c;ba(k,g,{value:l})}}
function f(k){var l=Object[k];l&&(Object[k]=function(m){if(m instanceof c)return m;Object.isExtensible(m)&&e(m);return l(m)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),l=Object.seal({}),m=new a([[k,2],[l,3]]);if(2!=m.get(k)||3!=m.get(l))return!1;m["delete"](k);m.set(l,4);return!m.has(k)&&4==m.get(l)}catch(n){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,l){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!A(k,g))throw Error("WeakMap key fail: "+k);k[g][this.h]=l;return this};
b.prototype.get=function(k){return d(k)&&A(k,g)?k[g][this.h]:void 0};
b.prototype.has=function(k){return d(k)&&A(k,g)&&A(k[g],this.h)};
b.prototype["delete"]=function(k){return d(k)&&A(k,g)&&A(k[g],this.h)?delete k[g][this.h]:!1};
return b});
t("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var l=h.h;return ea(function(){if(l){for(;l.head!=h.h;)l=l.previous;for(;l.next!=l.head;)return l=l.next,{done:!1,value:k(l)};l=null}return{done:!0,value:void 0}})}
function d(h,k){var l=k&&typeof k;"object"==l||"function"==l?f.has(k)?l=f.get(k):(l=""+ ++g,f.set(k,l)):l="p_"+k;var m=h.i[l];if(m&&A(h.i,l))for(var n=0;n<m.length;n++){var q=m[n];if(k!==k&&q.key!==q.key||k===q.key)return{id:l,list:m,index:n,u:q}}return{id:l,list:m,index:-1,u:void 0}}
function e(h){this.i={};this.h=b();this.size=0;if(h){h=u(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(u([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var l=k.entries(),m=l.next();if(m.done||m.value[0]!=h||"s"!=m.value[1])return!1;m=l.next();return m.done||4!=m.value[0].x||"t"!=m.value[1]||!l.next().done?!1:!0}catch(n){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var l=d(this,h);l.list||(l.list=this.i[l.id]=[]);l.u?l.u.value=k:(l.u={next:this.h,previous:this.h.previous,head:this.h,key:h,value:k},l.list.push(l.u),this.h.previous.next=l.u,this.h.previous=l.u,this.size++);return this};
e.prototype["delete"]=function(h){h=d(this,h);return h.u&&h.list?(h.list.splice(h.index,1),h.list.length||delete this.i[h.id],h.u.previous.next=h.u.next,h.u.next.previous=h.u.previous,h.u.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this.i={};this.h=this.h.previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).u};
e.prototype.get=function(h){return(h=d(this,h).u)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var l=this.entries(),m;!(m=l.next()).done;)m=m.value,h.call(k,m[1],m[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
t("Set",function(a){function b(c){this.h=new Map;if(c){c=u(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.h.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(u([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.h.set(c,c);this.size=this.h.size;return this};
b.prototype["delete"]=function(c){c=this.h["delete"](c);this.size=this.h.size;return c};
b.prototype.clear=function(){this.h.clear();this.size=0};
b.prototype.has=function(c){return this.h.has(c)};
b.prototype.entries=function(){return this.h.entries()};
b.prototype.values=function(){return this.h.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.h.forEach(function(f){return c.call(d,f,f,e)})};
return b});
var B=this||self;function C(a,b){for(var c=a.split("."),d=b||B,e=0;e<c.length;e++)if(d=d[c[e]],null==d)return null;return d}
function Ia(){}
function Ja(a){var b=typeof a;b="object"!=b?b:a?Array.isArray(a)?"array":b:"null";return"array"==b||"object"==b&&"number"==typeof a.length}
function D(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Ka(a){return Object.prototype.hasOwnProperty.call(a,La)&&a[La]||(a[La]=++Ma)}
var La="closure_uid_"+(1E9*Math.random()>>>0),Ma=0;function Na(a,b,c){return a.call.apply(a.bind,arguments)}
function Oa(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Pa(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Pa=Na:Pa=Oa;return Pa.apply(null,arguments)}
function E(a,b){var c=a.split("."),d=B;c[0]in d||"undefined"==typeof d.execScript||d.execScript("var "+c[0]);for(var e;c.length&&(e=c.shift());)c.length||void 0===b?d[e]&&d[e]!==Object.prototype[e]?d=d[e]:d=d[e]={}:d[e]=b}
function F(a,b){function c(){}
c.prototype=b.prototype;a.B=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Ma=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function Qa(a){return a}
;function Ra(a,b){var c=void 0;return new (c||(c=Promise))(function(d,e){function f(k){try{h(b.next(k))}catch(l){e(l)}}
function g(k){try{h(b["throw"](k))}catch(l){e(l)}}
function h(k){k.done?d(k.value):(new c(function(l){l(k.value)})).then(f,g)}
h((b=b.apply(a,void 0)).next())})}
;function Sa(a){if(Error.captureStackTrace)Error.captureStackTrace(this,Sa);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}
F(Sa,Error);Sa.prototype.name="CustomError";var Ta=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},G=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},Ua=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
G(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function Ya(a,b){a:{var c=a.length;for(var d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){c=e;break a}c=-1}return 0>c?null:"string"===typeof a?a.charAt(c):a[c]}
function Za(a,b){var c=Ta(a,b),d;(d=0<=c)&&Array.prototype.splice.call(a,c,1);return d}
function $a(a){return Array.prototype.concat.apply([],arguments)}
function ab(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function bb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Ja(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function cb(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;function db(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function eb(a){var b=fb,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function gb(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function hb(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=hb(a[c]);return b}
var ib="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function jb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ib.length;f++)c=ib[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var kb;var lb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]},mb=/&/g,nb=/</g,ob=/>/g,pb=/"/g,vb=/'/g,wb=/\x00/g,xb=/[\x00&<>"']/;
function yb(a,b){return a<b?-1:a>b?1:0}
;var zb;a:{var Ab=B.navigator;if(Ab){var Bb=Ab.userAgent;if(Bb){zb=Bb;break a}}zb=""}function H(a){return-1!=zb.indexOf(a)}
;function Cb(){}
;function Db(a){Db[" "](a);return a}
Db[" "]=Ia;var Eb=H("Opera"),Fb=H("Trident")||H("MSIE"),Gb=H("Edge"),Hb=H("Gecko")&&!(-1!=zb.toLowerCase().indexOf("webkit")&&!H("Edge"))&&!(H("Trident")||H("MSIE"))&&!H("Edge"),Ib=-1!=zb.toLowerCase().indexOf("webkit")&&!H("Edge");function Jb(){var a=B.document;return a?a.documentMode:void 0}
var Kb;a:{var Lb="",Mb=function(){var a=zb;if(Hb)return/rv:([^\);]+)(\)|;)/.exec(a);if(Gb)return/Edge\/([\d\.]+)/.exec(a);if(Fb)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(Ib)return/WebKit\/(\S+)/.exec(a);if(Eb)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
Mb&&(Lb=Mb?Mb[1]:"");if(Fb){var Nb=Jb();if(null!=Nb&&Nb>parseFloat(Lb)){Kb=String(Nb);break a}}Kb=Lb}var Ob=Kb,Pb={},Qb;if(B.document&&Fb){var Rb=Jb();Qb=Rb?Rb:parseInt(Ob,10)||void 0}else Qb=void 0;var Sb=Qb;var Tb=H("Firefox")||H("FxiOS"),Ub=H("iPhone")&&!H("iPod")&&!H("iPad")||H("iPod"),Vb=H("iPad");var Wb={},Xb=null;var J=window;function Yb(a){var b=C("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||B.$googDebugFname||b}catch(g){e="Not available",c=!0}b=Zb(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,$b[c])c=$b[c];else{c=String(c);if(!$b[c]){var f=/function\s+([^\(]+)/m.exec(c);$b[c]=f?f[1]:"[Anonymous]"}c=$b[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}a.stack=
b;return a}
function Zb(a,b){b||(b={});b[ac(a)]=!0;var c=a.stack||"",d=a.Na;d&&!b[ac(d)]&&(c+="\nCaused by: ",d.stack&&0==d.stack.indexOf(d.toString())||(c+="string"===typeof d?d:d.message+"\n"),c+=Zb(d,b));return c}
function ac(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var $b={};function bc(a){this.h=a||{cookie:""}}
r=bc.prototype;r.isEnabled=function(){return navigator.cookieEnabled};
r.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.Va;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.Z}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);this.h.cookie=a+"="+b+(f?";domain="+f:"")+(g?";path="+g:"")+(0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString())+(d?";secure":"")+(null!=e?";samesite="+e:"")};
r.get=function(a,b){for(var c=a+"=",d=(this.h.cookie||"").split(";"),e=0,f;e<d.length;e++){f=lb(d[e]);if(0==f.lastIndexOf(c,0))return f.substr(c.length);if(f==a)return""}return b};
r.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{Z:0,path:b,domain:c});return d};
r.isEmpty=function(){return!this.h.cookie};
r.clear=function(){for(var a=(this.h.cookie||"").split(";"),b=[],c=[],d,e,f=0;f<a.length;f++)e=lb(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var cc=new bc("undefined"==typeof document?null:document);function mc(a,b){this.width=a;this.height=b}
r=mc.prototype;r.clone=function(){return new mc(this.width,this.height)};
r.aspectRatio=function(){return this.width/this.height};
r.isEmpty=function(){return!(this.width*this.height)};
r.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
r.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
r.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function nc(){var a=document;var b="IFRAME";"application/xhtml+xml"===a.contentType&&(b=b.toLowerCase());return a.createElement(b)}
function oc(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;var pc=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^\\/?#]*)@)?([^\\/?#]*?)(?::([0-9]+))?(?=[\\/?#]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function qc(a){return a?decodeURI(a):a}
function rc(a){return qc(a.match(pc)[3]||null)}
function sc(a){var b=a.match(pc);a=b[1];var c=b[2],d=b[3];b=b[4];var e="";a&&(e+=a+":");d&&(e+="//",c&&(e+=c+"@"),e+=d,b&&(e+=":"+b));return e}
function tc(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)tc(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function uc(a){var b=[],c;for(c in a)tc(c,a[c],b);return b.join("&")}
var vc=/#|$/;function wc(a){var b=xc;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a.call(void 0,b[c],c,b)}
function yc(){var a=[];wc(function(b){a.push(b)});
return a}
var xc={za:"allow-forms",Aa:"allow-modals",Ba:"allow-orientation-lock",Ca:"allow-pointer-lock",Da:"allow-popups",Ea:"allow-popups-to-escape-sandbox",Fa:"allow-presentation",Ga:"allow-same-origin",Ha:"allow-scripts",Ia:"allow-top-navigation",Ja:"allow-top-navigation-by-user-activation"},zc=cb(function(){return yc()});
function Ac(){var a=nc(),b={};G(zc(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
;function Bc(){this.j=this.j;this.l=this.l}
Bc.prototype.j=!1;Bc.prototype.dispose=function(){this.j||(this.j=!0,this.L())};
Bc.prototype.L=function(){if(this.l)for(;this.l.length;)this.l.shift()()};var Cc={};function Dc(a){if(a!==Cc)throw Error("Bad secret");}
;function Ec(){var a="undefined"!==typeof window?window.trustedTypes:void 0;return null!==a&&void 0!==a?a:null}
;var Fc;function Gc(){}
function Hc(a,b){Dc(b);this.h=a}
y(Hc,Gc);Hc.prototype.toString=function(){return this.h.toString()};
var Ic=null===(Fc=Ec())||void 0===Fc?void 0:Fc.emptyHTML;new Hc(null!==Ic&&void 0!==Ic?Ic:"",Cc);var Jc;function Kc(){}
function Lc(a,b){Dc(b);this.h=a}
y(Lc,Kc);Lc.prototype.toString=function(){return this.h.toString()};
var Mc=null===(Jc=Ec())||void 0===Jc?void 0:Jc.emptyScript;new Lc(null!==Mc&&void 0!==Mc?Mc:"",Cc);function Nc(){}
function Oc(a,b){Dc(b);this.h=a}
y(Oc,Nc);Oc.prototype.toString=function(){return this.h};new Oc("about:blank",Cc);new Oc("about:invalid#zTSz",Cc);var Pc=(new Date).getTime();function Qc(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"moz-extension"!==a&&"file"!==a&&"android-app"!==a&&"chrome-search"!==a&&"chrome-untrusted"!==a&&"chrome"!==a&&"app"!==a&&"devtools"!==a)throw Error("Invalid URI scheme in origin: "+
a);c="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c}
;function Rc(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;m=l=0}
function b(n){for(var q=g,p=0;64>p;p+=4)q[p/4]=n[p]<<24|n[p+1]<<16|n[p+2]<<8|n[p+3];for(p=16;80>p;p++)n=q[p-3]^q[p-8]^q[p-14]^q[p-16],q[p]=(n<<1|n>>>31)&4294967295;n=e[0];var w=e[1],v=e[2],x=e[3],I=e[4];for(p=0;80>p;p++){if(40>p)if(20>p){var M=x^w&(v^x);var ya=1518500249}else M=w^v^x,ya=1859775393;else 60>p?(M=w&v|x&(w|v),ya=2400959708):(M=w^v^x,ya=3395469782);M=((n<<5|n>>>27)&4294967295)+M+I+ya+q[p]&4294967295;I=x;x=v;v=(w<<30|w>>>2)&4294967295;w=n;n=M}e[0]=e[0]+n&4294967295;e[1]=e[1]+w&4294967295;
e[2]=e[2]+v&4294967295;e[3]=e[3]+x&4294967295;e[4]=e[4]+I&4294967295}
function c(n,q){if("string"===typeof n){n=unescape(encodeURIComponent(n));for(var p=[],w=0,v=n.length;w<v;++w)p.push(n.charCodeAt(w));n=p}q||(q=n.length);p=0;if(0==l)for(;p+64<q;)b(n.slice(p,p+64)),p+=64,m+=64;for(;p<q;)if(f[l++]=n[p++],m++,64==l)for(l=0,b(f);p+64<q;)b(n.slice(p,p+64)),p+=64,m+=64}
function d(){var n=[],q=8*m;56>l?c(h,56-l):c(h,64-(l-56));for(var p=63;56<=p;p--)f[p]=q&255,q>>>=8;b(f);for(p=q=0;5>p;p++)for(var w=24;0<=w;w-=8)n[q++]=e[p]>>w&255;return n}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var l,m;a();return{reset:a,update:c,digest:d,ma:function(){for(var n=d(),q="",p=0;p<n.length;p++)q+="0123456789ABCDEF".charAt(Math.floor(n[p]/16))+"0123456789ABCDEF".charAt(n[p]%16);return q}}}
;function Sc(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],G(d,function(h){e.push(h)}),Tc(e.join(" "));
var f=[],g=[];G(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];G(d,function(h){e.push(h)});
a=Tc(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function Tc(a){var b=Rc();b.update(a);return b.ma().toLowerCase()}
;function Uc(a){var b=Qc(String(B.location.href)),c;(c=B.__SAPISID||B.__APISID||B.__OVERRIDE_SID)?c=!0:(c=new bc(document),c=c.get("SAPISID")||c.get("APISID")||c.get("__Secure-3PAPISID")||c.get("SID"),c=!!c);if(c&&(c=(b=0==b.indexOf("https:")||0==b.indexOf("chrome-extension:")||0==b.indexOf("moz-extension:"))?B.__SAPISID:B.__APISID,c||(c=new bc(document),c=c.get(b?"SAPISID":"APISID")||c.get("__Secure-3PAPISID")),c)){b=b?"SAPISIDHASH":"APISIDHASH";var d=String(B.location.href);return d&&c&&b?[b,Sc(Qc(d),
c,a||null)].join(" "):null}return null}
;function Vc(){this.i=[];this.h=-1}
Vc.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&0===a%1&&this.i[a]!=b&&(this.i[a]=b,this.h=-1)};
Vc.prototype.get=function(a){return!!this.i[a]};
function Wc(a){-1==a.h&&(a.h=Ua(a.i,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.h}
;function Xc(a,b){this.j=a;this.l=b;this.i=0;this.h=null}
Xc.prototype.get=function(){if(0<this.i){this.i--;var a=this.h;this.h=a.next;a.next=null}else a=this.j();return a};
function Yc(a,b){a.l(b);100>a.i&&(a.i++,b.next=a.h,a.h=b)}
;function Zc(a){B.setTimeout(function(){throw a;},0)}
var $c;function ad(){var a=B.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!H("Presto")&&(a=function(){var e=nc();e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Pa(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!H("Trident")&&!H("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.V;c.V=null;e()}};
return function(e){d.next={V:e};d=d.next;b.port2.postMessage(0)}}return function(e){B.setTimeout(e,0)}}
;function bd(){this.i=this.h=null}
var dd=new Xc(function(){return new cd},function(a){a.reset()});
bd.prototype.add=function(a,b){var c=dd.get();c.set(a,b);this.i?this.i.next=c:this.h=c;this.i=c};
bd.prototype.remove=function(){var a=null;this.h&&(a=this.h,this.h=this.h.next,this.h||(this.i=null),a.next=null);return a};
function cd(){this.next=this.scope=this.h=null}
cd.prototype.set=function(a,b){this.h=a;this.scope=b;this.next=null};
cd.prototype.reset=function(){this.next=this.scope=this.h=null};function ed(a,b){fd||gd();hd||(fd(),hd=!0);id.add(a,b)}
var fd;function gd(){if(B.Promise&&B.Promise.resolve){var a=B.Promise.resolve(void 0);fd=function(){a.then(jd)}}else fd=function(){var b=jd;
"function"!==typeof B.setImmediate||B.Window&&B.Window.prototype&&!H("Edge")&&B.Window.prototype.setImmediate==B.setImmediate?($c||($c=ad()),$c(b)):B.setImmediate(b)}}
var hd=!1,id=new bd;function jd(){for(var a;a=id.remove();){try{a.h.call(a.scope)}catch(b){Zc(b)}Yc(dd,a)}hd=!1}
;function kd(){this.i=-1}
;function ld(){this.i=64;this.h=[];this.o=[];this.s=[];this.l=[];this.l[0]=128;for(var a=1;a<this.i;++a)this.l[a]=0;this.m=this.j=0;this.reset()}
F(ld,kd);ld.prototype.reset=function(){this.h[0]=1732584193;this.h[1]=4023233417;this.h[2]=2562383102;this.h[3]=271733878;this.h[4]=3285377520;this.m=this.j=0};
function md(a,b,c){c||(c=0);var d=a.s;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.h[0];c=a.h[1];var g=a.h[2],h=a.h[3],k=a.h[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var l=1518500249}else f=c^g^h,l=1859775393;else 60>e?(f=c&g|h&(c|g),l=2400959708):
(f=c^g^h,l=3395469782);f=(b<<5|b>>>27)+f+k+l+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.h[0]=a.h[0]+b&4294967295;a.h[1]=a.h[1]+c&4294967295;a.h[2]=a.h[2]+g&4294967295;a.h[3]=a.h[3]+h&4294967295;a.h[4]=a.h[4]+k&4294967295}
ld.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.i,d=0,e=this.o,f=this.j;d<b;){if(0==f)for(;d<=c;)md(this,a,d),d+=this.i;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.i){md(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.i){md(this,e);f=0;break}}this.j=f;this.m+=b}};
ld.prototype.digest=function(){var a=[],b=8*this.m;56>this.j?this.update(this.l,56-this.j):this.update(this.l,this.i-(this.j-56));for(var c=this.i-1;56<=c;c--)this.o[c]=b&255,b/=256;md(this,this.o);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.h[c]>>d&255,++b;return a};var nd="StopIteration"in B?B.StopIteration:{message:"StopIteration",stack:""};function od(){}
od.prototype.next=function(){throw nd;};
od.prototype.D=function(){return this};
function pd(a){if(a instanceof od)return a;if("function"==typeof a.D)return a.D(!1);if(Ja(a)){var b=0,c=new od;c.next=function(){for(;;){if(b>=a.length)throw nd;if(b in a)return a[b++];b++}};
return c}throw Error("Not implemented");}
function qd(a,b){if(Ja(a))try{G(a,b,void 0)}catch(c){if(c!==nd)throw c;}else{a=pd(a);try{for(;;)b.call(void 0,a.next(),void 0,a)}catch(c){if(c!==nd)throw c;}}}
function rd(a){if(Ja(a))return ab(a);a=pd(a);var b=[];qd(a,function(c){b.push(c)});
return b}
;function sd(a,b){this.j={};this.h=[];this.l=this.i=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof sd)for(c=td(a),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
function td(a){ud(a);return a.h.concat()}
r=sd.prototype;r.equals=function(a,b){if(this===a)return!0;if(this.i!=a.i)return!1;var c=b||Pd;ud(this);for(var d,e=0;d=this.h[e];e++)if(!c(this.get(d),a.get(d)))return!1;return!0};
function Pd(a,b){return a===b}
r.isEmpty=function(){return 0==this.i};
r.clear=function(){this.j={};this.l=this.i=this.h.length=0};
r.remove=function(a){return Object.prototype.hasOwnProperty.call(this.j,a)?(delete this.j[a],this.i--,this.l++,this.h.length>2*this.i&&ud(this),!0):!1};
function ud(a){if(a.i!=a.h.length){for(var b=0,c=0;b<a.h.length;){var d=a.h[b];Object.prototype.hasOwnProperty.call(a.j,d)&&(a.h[c++]=d);b++}a.h.length=c}if(a.i!=a.h.length){var e={};for(c=b=0;b<a.h.length;)d=a.h[b],Object.prototype.hasOwnProperty.call(e,d)||(a.h[c++]=d,e[d]=1),b++;a.h.length=c}}
r.get=function(a,b){return Object.prototype.hasOwnProperty.call(this.j,a)?this.j[a]:b};
r.set=function(a,b){Object.prototype.hasOwnProperty.call(this.j,a)||(this.i++,this.h.push(a),this.l++);this.j[a]=b};
r.forEach=function(a,b){for(var c=td(this),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
r.clone=function(){return new sd(this)};
r.D=function(a){ud(this);var b=0,c=this.l,d=this,e=new od;e.next=function(){if(c!=d.l)throw Error("The map has changed since the iterator was created");if(b>=d.h.length)throw nd;var f=d.h[b++];return a?f:d.j[f]};
return e};var Qd=!Fb||9<=Number(Sb),Rd;
if(Rd=Fb){var Sd;if(Object.prototype.hasOwnProperty.call(Pb,"9"))Sd=Pb["9"];else{for(var Td=0,Ud=lb(String(Ob)).split("."),Vd=lb("9").split("."),Wd=Math.max(Ud.length,Vd.length),Xd=0;0==Td&&Xd<Wd;Xd++){var Yd=Ud[Xd]||"",Zd=Vd[Xd]||"";do{var $d=/(\d*)(\D*)(.*)/.exec(Yd)||["","","",""],ae=/(\d*)(\D*)(.*)/.exec(Zd)||["","","",""];if(0==$d[0].length&&0==ae[0].length)break;Td=yb(0==$d[1].length?0:parseInt($d[1],10),0==ae[1].length?0:parseInt(ae[1],10))||yb(0==$d[2].length,0==ae[2].length)||yb($d[2],ae[2]);
Yd=$d[3];Zd=ae[3]}while(0==Td)}Sd=Pb["9"]=0<=Td}Rd=!Sd}var be=Rd,ce=function(){if(!B.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{B.addEventListener("test",Ia,b),B.removeEventListener("test",Ia,b)}catch(c){}return a}();function de(a,b){this.type=a;this.h=this.target=b;this.defaultPrevented=this.i=!1}
de.prototype.stopPropagation=function(){this.i=!0};
de.prototype.preventDefault=function(){this.defaultPrevented=!0};function ee(a,b){de.call(this,a?a.type:"");this.relatedTarget=this.h=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.j=null;a&&this.init(a,b)}
F(ee,de);var fe={2:"touch",3:"pen",4:"mouse"};
ee.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.h=b;var e=a.relatedTarget;if(e){if(Hb){a:{try{Db(e.nodeName);var f=!0;break a}catch(g){}f=!1}f||(e=null)}}else"mouseover"==c?e=a.fromElement:"mouseout"==c&&(e=a.toElement);this.relatedTarget=e;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||
0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:fe[a.pointerType]||"";this.state=a.state;
this.j=a;a.defaultPrevented&&this.preventDefault()};
ee.prototype.stopPropagation=function(){ee.B.stopPropagation.call(this);this.j.stopPropagation?this.j.stopPropagation():this.j.cancelBubble=!0};
ee.prototype.preventDefault=function(){ee.B.preventDefault.call(this);var a=this.j;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,be)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};var ge="closure_listenable_"+(1E6*Math.random()|0),he=0;function ie(a,b,c,d,e){this.listener=a;this.h=null;this.src=b;this.type=c;this.capture=!!d;this.P=e;this.key=++he;this.K=this.N=!1}
function je(a){a.K=!0;a.listener=null;a.h=null;a.src=null;a.P=null}
;function ke(a){this.src=a;this.listeners={};this.h=0}
ke.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.h++);var g=le(a,b,d,e);-1<g?(b=a[g],c||(b.N=!1)):(b=new ie(b,this.src,f,!!d,e),b.N=c,a.push(b));return b};
ke.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=le(e,b,c,d);return-1<b?(je(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.h--),!0):!1};
function me(a,b){var c=b.type;c in a.listeners&&Za(a.listeners[c],b)&&(je(b),0==a.listeners[c].length&&(delete a.listeners[c],a.h--))}
function le(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.K&&f.listener==b&&f.capture==!!c&&f.P==d)return e}return-1}
;var ne="closure_lm_"+(1E6*Math.random()|0),oe={},pe=0;function qe(a,b,c,d,e){if(d&&d.once)re(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)qe(a,b[f],c,d,e);else c=se(c),a&&a[ge]?a.h.add(String(b),c,!1,D(d)?!!d.capture:!!d,e):te(a,b,c,!1,d,e)}
function te(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=D(e)?!!e.capture:!!e,h=ue(a);h||(a[ne]=h=new ke(a));c=h.add(b,c,d,g,f);if(!c.h){d=ve();c.h=d;d.src=a;d.listener=c;if(a.addEventListener)ce||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(we(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");pe++}}
function ve(){var a=xe,b=Qd?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);
if(!c)return c};
return b}
function re(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)re(a,b[f],c,d,e);else c=se(c),a&&a[ge]?a.h.add(String(b),c,!0,D(d)?!!d.capture:!!d,e):te(a,b,c,!0,d,e)}
function ye(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)ye(a,b[f],c,d,e);else(d=D(d)?!!d.capture:!!d,c=se(c),a&&a[ge])?a.h.remove(String(b),c,d,e):a&&(a=ue(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=le(b,c,d,e)),(c=-1<a?b[a]:null)&&ze(c))}
function ze(a){if("number"!==typeof a&&a&&!a.K){var b=a.src;if(b&&b[ge])me(b.h,a);else{var c=a.type,d=a.h;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(we(c),d):b.addListener&&b.removeListener&&b.removeListener(d);pe--;(c=ue(b))?(me(c,a),0==c.h&&(c.src=null,b[ne]=null)):je(a)}}}
function we(a){return a in oe?oe[a]:oe[a]="on"+a}
function Ae(a,b,c,d){var e=!0;if(a=ue(a))if(b=a.listeners[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.capture==c&&!f.K&&(f=Be(f,d),e=e&&!1!==f)}return e}
function Be(a,b){var c=a.listener,d=a.P||a.src;a.N&&ze(a);return c.call(d,b)}
function xe(a,b){if(a.K)return!0;if(!Qd){var c=b||C("window.event"),d=new ee(c,this),e=!0;if(!(0>c.keyCode||void 0!=c.returnValue)){a:{var f=!1;if(0==c.keyCode)try{c.keyCode=-1;break a}catch(k){f=!0}if(f||void 0==c.returnValue)c.returnValue=!0}c=[];for(f=d.h;f;f=f.parentNode)c.push(f);f=a.type;for(var g=c.length-1;!d.i&&0<=g;g--){d.h=c[g];var h=Ae(c[g],f,!0,d);e=e&&h}for(g=0;!d.i&&g<c.length;g++)d.h=c[g],h=Ae(c[g],f,!1,d),e=e&&h}return e}return Be(a,new ee(b,this))}
function ue(a){a=a[ne];return a instanceof ke?a:null}
var Ce="__closure_events_fn_"+(1E9*Math.random()>>>0);function se(a){if("function"===typeof a)return a;a[Ce]||(a[Ce]=function(b){return a.handleEvent(b)});
return a[Ce]}
;function K(){Bc.call(this);this.h=new ke(this);this.s=this;this.m=null}
F(K,Bc);K.prototype[ge]=!0;K.prototype.addEventListener=function(a,b,c,d){qe(this,a,b,c,d)};
K.prototype.removeEventListener=function(a,b,c,d){ye(this,a,b,c,d)};
K.prototype.dispatchEvent=function(a){var b=this.m;if(b){var c=[];for(var d=1;b;b=b.m)c.push(b),++d}b=this.s;d=a.type||a;if("string"===typeof a)a=new de(a,b);else if(a instanceof de)a.target=a.target||b;else{var e=a;a=new de(d,b);jb(a,e)}e=!0;if(c)for(var f=c.length-1;!a.i&&0<=f;f--){var g=a.h=c[f];e=De(g,d,!0,a)&&e}a.i||(g=a.h=b,e=De(g,d,!0,a)&&e,a.i||(e=De(g,d,!1,a)&&e));if(c)for(f=0;!a.i&&f<c.length;f++)g=a.h=c[f],e=De(g,d,!1,a)&&e;return e};
K.prototype.L=function(){K.B.L.call(this);if(this.h){var a=this.h,b=0,c;for(c in a.listeners){for(var d=a.listeners[c],e=0;e<d.length;e++)++b,je(d[e]);delete a.listeners[c];a.h--}}this.m=null};
function De(a,b,c,d){b=a.h.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.K&&g.capture==c){var h=g.listener,k=g.P||g.src;g.N&&me(a.h,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;var Ee=B.JSON.stringify;function Fe(a){this.h=0;this.s=void 0;this.l=this.i=this.j=null;this.m=this.o=!1;if(a!=Ia)try{var b=this;a.call(void 0,function(c){Ge(b,2,c)},function(c){Ge(b,3,c)})}catch(c){Ge(this,3,c)}}
function He(){this.next=this.context=this.onRejected=this.i=this.h=null;this.j=!1}
He.prototype.reset=function(){this.context=this.onRejected=this.i=this.h=null;this.j=!1};
var Ie=new Xc(function(){return new He},function(a){a.reset()});
function Je(a,b,c){var d=Ie.get();d.i=a;d.onRejected=b;d.context=c;return d}
Fe.prototype.then=function(a,b,c){return Ke(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
Fe.prototype.$goog_Thenable=!0;Fe.prototype.cancel=function(a){if(0==this.h){var b=new Le(a);ed(function(){Me(this,b)},this)}};
function Me(a,b){if(0==a.h)if(a.j){var c=a.j;if(c.i){for(var d=0,e=null,f=null,g=c.i;g&&(g.j||(d++,g.h==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.h&&1==d?Me(c,b):(f?(d=f,d.next==c.l&&(c.l=d),d.next=d.next.next):Ne(c),Oe(c,e,3,b)))}a.j=null}else Ge(a,3,b)}
function Pe(a,b){a.i||2!=a.h&&3!=a.h||Qe(a);a.l?a.l.next=b:a.i=b;a.l=b}
function Ke(a,b,c,d){var e=Je(null,null,null);e.h=new Fe(function(f,g){e.i=b?function(h){try{var k=b.call(d,h);f(k)}catch(l){g(l)}}:f;
e.onRejected=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof Le?g(h):f(k)}catch(l){g(l)}}:g});
e.h.j=a;Pe(a,e);return e.h}
Fe.prototype.C=function(a){this.h=0;Ge(this,2,a)};
Fe.prototype.I=function(a){this.h=0;Ge(this,3,a)};
function Ge(a,b,c){if(0==a.h){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.h=1;a:{var d=c,e=a.C,f=a.I;if(d instanceof Fe){Pe(d,Je(e||Ia,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(l){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(D(d))try{var k=d.then;if("function"===typeof k){Re(d,k,e,f,a);g=!0;break a}}catch(l){f.call(a,l);g=!0;break a}g=!1}}}g||(a.s=c,a.h=b,a.j=null,Qe(a),3!=b||c instanceof Le||Se(a,c))}}
function Re(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Qe(a){a.o||(a.o=!0,ed(a.v,a))}
function Ne(a){var b=null;a.i&&(b=a.i,a.i=b.next,b.next=null);a.i||(a.l=null);return b}
Fe.prototype.v=function(){for(var a;a=Ne(this);)Oe(this,a,this.h,this.s);this.o=!1};
function Oe(a,b,c,d){if(3==c&&b.onRejected&&!b.j)for(;a&&a.m;a=a.j)a.m=!1;if(b.h)b.h.j=null,Te(b,c,d);else try{b.j?b.i.call(b.context):Te(b,c,d)}catch(e){Ue.call(null,e)}Yc(Ie,b)}
function Te(a,b,c){2==b?a.i.call(a.context,c):a.onRejected&&a.onRejected.call(a.context,c)}
function Se(a,b){a.m=!0;ed(function(){a.m&&Ue.call(null,b)})}
var Ue=Zc;function Le(a){Sa.call(this,a)}
F(Le,Sa);Le.prototype.name="cancel";function L(a){Bc.call(this);this.s=1;this.m=[];this.o=0;this.h=[];this.i={};this.v=!!a}
F(L,Bc);r=L.prototype;r.subscribe=function(a,b,c){var d=this.i[a];d||(d=this.i[a]=[]);var e=this.s;this.h[e]=a;this.h[e+1]=b;this.h[e+2]=c;this.s=e+3;d.push(e);return e};
function Ve(a,b,c){var d=We;if(a=d.i[a]){var e=d.h;(a=Ya(a,function(f){return e[f+1]==b&&e[f+2]==c}))&&d.M(a)}}
r.M=function(a){var b=this.h[a];if(b){var c=this.i[b];0!=this.o?(this.m.push(a),this.h[a+1]=Ia):(c&&Za(c,a),delete this.h[a],delete this.h[a+1],delete this.h[a+2])}return!!b};
r.J=function(a,b){var c=this.i[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.v)for(e=0;e<c.length;e++){var g=c[e];Xe(this.h[g+1],this.h[g+2],d)}else{this.o++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.h[g+1].apply(this.h[g+2],d)}finally{if(this.o--,0<this.m.length&&0==this.o)for(;c=this.m.pop();)this.M(c)}}return 0!=e}return!1};
function Xe(a,b,c){ed(function(){a.apply(b,c)})}
r.clear=function(a){if(a){var b=this.i[a];b&&(G(b,this.M,this),delete this.i[a])}else this.h.length=0,this.i={}};
r.L=function(){L.B.L.call(this);this.clear();this.m.length=0};function Ye(a){this.h=a}
Ye.prototype.set=function(a,b){void 0===b?this.h.remove(a):this.h.set(a,Ee(b))};
Ye.prototype.get=function(a){try{var b=this.h.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Ye.prototype.remove=function(a){this.h.remove(a)};function Ze(a){this.h=a}
F(Ze,Ye);function $e(a){this.data=a}
function af(a){return void 0===a||a instanceof $e?a:new $e(a)}
Ze.prototype.set=function(a,b){Ze.B.set.call(this,a,af(b))};
Ze.prototype.i=function(a){a=Ze.B.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Ze.prototype.get=function(a){if(a=this.i(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function bf(a){this.h=a}
F(bf,Ze);bf.prototype.set=function(a,b,c){if(b=af(b)){if(c){if(c<Date.now()){bf.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Date.now()}bf.B.set.call(this,a,b)};
bf.prototype.i=function(a){var b=bf.B.i.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Date.now()||c&&c>Date.now())bf.prototype.remove.call(this,a);else return b}};function cf(){}
;function df(){}
F(df,cf);df.prototype.clear=function(){var a=rd(this.D(!0)),b=this;G(a,function(c){b.remove(c)})};function ef(a){this.h=a}
F(ef,df);r=ef.prototype;r.isAvailable=function(){if(!this.h)return!1;try{return this.h.setItem("__sak","1"),this.h.removeItem("__sak"),!0}catch(a){return!1}};
r.set=function(a,b){try{this.h.setItem(a,b)}catch(c){if(0==this.h.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
r.get=function(a){a=this.h.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
r.remove=function(a){this.h.removeItem(a)};
r.D=function(a){var b=0,c=this.h,d=new od;d.next=function(){if(b>=c.length)throw nd;var e=c.key(b++);if(a)return e;e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return e};
return d};
r.clear=function(){this.h.clear()};
r.key=function(a){return this.h.key(a)};function ff(){var a=null;try{a=window.localStorage||null}catch(b){}this.h=a}
F(ff,ef);function gf(a,b){this.i=a;this.h=null;if(Fb&&!(9<=Number(Sb))){hf||(hf=new sd);this.h=hf.get(a);this.h||(b?this.h=document.getElementById(b):(this.h=document.createElement("userdata"),this.h.addBehavior("#default#userData"),document.body.appendChild(this.h)),hf.set(a,this.h));try{this.h.load(this.i)}catch(c){this.h=null}}}
F(gf,df);var jf={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},hf=null;function kf(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return jf[b]})}
r=gf.prototype;r.isAvailable=function(){return!!this.h};
r.set=function(a,b){this.h.setAttribute(kf(a),b);lf(this)};
r.get=function(a){a=this.h.getAttribute(kf(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
r.remove=function(a){this.h.removeAttribute(kf(a));lf(this)};
r.D=function(a){var b=0,c=this.h.XMLDocument.documentElement.attributes,d=new od;d.next=function(){if(b>=c.length)throw nd;var e=c[b++];if(a)return decodeURIComponent(e.nodeName.replace(/\./g,"%")).substr(1);e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return e};
return d};
r.clear=function(){for(var a=this.h.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);lf(this)};
function lf(a){try{a.h.save(a.i)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function mf(a,b){this.i=a;this.h=b+"::"}
F(mf,df);mf.prototype.set=function(a,b){this.i.set(this.h+a,b)};
mf.prototype.get=function(a){return this.i.get(this.h+a)};
mf.prototype.remove=function(a){this.i.remove(this.h+a)};
mf.prototype.D=function(a){var b=this.i.D(!0),c=this,d=new od;d.next=function(){for(var e=b.next();e.substr(0,c.h.length)!=c.h;)e=b.next();return a?e.substr(c.h.length):c.i.get(e)};
return d};var nf=window.yt&&window.yt.config_||window.ytcfg&&window.ytcfg.data_||{};E("yt.config_",nf);function of(a){var b=arguments;1<b.length?nf[b[0]]=b[1]:1===b.length&&Object.assign(nf,b[0])}
function N(a,b){return a in nf?nf[a]:b}
;var pf=[];function qf(a){pf.forEach(function(b){return b(a)})}
function rf(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){sf(b),qf(b)}}:a}
function sf(a){var b=C("yt.logging.errors.log");b?b(a,"ERROR",void 0,void 0,void 0):(b=N("ERRORS",[]),b.push([a,"ERROR",void 0,void 0,void 0]),of("ERRORS",b))}
function tf(a){var b=C("yt.logging.errors.log");b?b(a,"WARNING",void 0,void 0,void 0):(b=N("ERRORS",[]),b.push([a,"WARNING",void 0,void 0,void 0]),of("ERRORS",b))}
;var uf=0;E("ytDomDomGetNextId",C("ytDomDomGetNextId")||function(){return++uf});var vf={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function wf(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.clientY=this.clientX=0;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in vf||(this[b]=a[b]);var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;if(d)try{d=d.nodeName?d:null}catch(e){d=null}else"mouseover"==
this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey}}catch(e){}}
wf.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
wf.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
wf.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var fb=B.ytEventsEventsListeners||{};E("ytEventsEventsListeners",fb);var xf=B.ytEventsEventsCounter||{count:0};E("ytEventsEventsCounter",xf);
function yf(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return eb(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=D(e[4])&&D(d)&&gb(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
function zf(a){a&&("string"==typeof a&&(a=[a]),G(a,function(b){if(b in fb){var c=fb[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?Af()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete fb[b]}}))}
var Af=cb(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});
function Bf(a,b,c){var d=void 0===d?{}:d;if(a&&(a.addEventListener||a.attachEvent)){var e=yf(a,b,c,d);if(!e){e=++xf.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new wf(h);if(!oc(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new wf(h);
h.currentTarget=a;return c.call(a,h)};
g=rf(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),Af()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);fb[e]=[a,b,c,g,d]}}}
;function Cf(a,b){"function"===typeof a&&(a=rf(a));return window.setTimeout(a,b)}
function Df(a){"function"===typeof a&&(a=rf(a));return window.setInterval(a,250)}
;var Ef={q:!0,search_query:!0};function Ff(a){var b=[];db(a,function(c,d){var e=encodeURIComponent(String(d)),f;Array.isArray(c)?f=c:f=[c];G(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function Gf(a){"?"==a.charAt(0)&&(a=a.substr(1));for(var b=a.split("&"),c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1==f.length&&f[0]||2==f.length)try{var g=decodeURIComponent((f[0]||"").replace(/\+/g," ")),h=decodeURIComponent((f[1]||"").replace(/\+/g," "));g in c?Array.isArray(c[g])?bb(c[g],h):c[g]=[c[g],h]:c[g]=h}catch(k){k.args=[{key:f[0],value:f[1],query:a}],Ef.hasOwnProperty(f[0])||("ReferenceError"===k.name?tf(k):sf(k))}}return c}
function Hf(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=Gf(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);b=a;a=uc(e);a?(c=b.indexOf("#"),0>c&&(c=b.length),f=b.indexOf("?"),0>f||f>c?(f=c,e=""):e=b.substring(f+1,c),b=[b.substr(0,f),e,b.substr(c)],c=b[1],b[1]=a?c?c+"&"+a:a:c,a=b[0]+(b[1]?"?"+b[1]:"")+b[2]):a=b;return a+d}
;var If={};function Jf(a){return If[a]||(If[a]=String(a).replace(/\-([a-z])/g,function(b,c){return c.toUpperCase()}))}
;var Kf={},Lf=[],We=new L,Mf={};function Nf(){for(var a=u(Lf),b=a.next();!b.done;b=a.next())b=b.value,b()}
function Of(a,b){var c;"yt:"==a.tagName.toLowerCase().substr(0,3)?c=a.getAttribute(b):c=a?a.dataset?a.dataset[Jf(b)]:a.getAttribute("data-"+b):null;return c}
function Pf(a,b){We.J.apply(We,arguments)}
;function Qf(a){this.i=a||{};this.j=this.h=!1;a=document.getElementById("www-widgetapi-script");if(this.h=!!("https:"==document.location.protocol||a&&0==a.src.indexOf("https:"))){a=[this.i,window.YTConfig||{}];for(var b=0;b<a.length;b++)a[b].host&&(a[b].host=a[b].host.replace("http://","https://"))}}
function P(a,b){for(var c=[a.i,window.YTConfig||{}],d=0;d<c.length;d++){var e=c[d][b];if(void 0!=e)return e}return null}
function Rf(a,b,c){Sf||(Sf={},Bf(window,"message",Pa(a.l,a)));Sf[c]=b}
Qf.prototype.l=function(a){if(a.origin==P(this,"host")||a.origin==P(this,"host").replace(/^http:/,"https:")){try{var b=JSON.parse(a.data)}catch(c){return}this.j=!0;this.h||0!=a.origin.indexOf("https:")||(this.h=!0);if(a=Sf[b.id])a.v=!0,a.v&&(G(a.s,a.U,a),a.s.length=0),a.fa(b)}};
var Sf=null;function Q(a){a=Tf(a);return"string"===typeof a&&"false"===a?!1:!!a}
function Uf(a,b){var c=Tf(a);return void 0===c&&void 0!==b?b:Number(c||0)}
function Tf(a){var b=N("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:N("EXPERIMENT_FLAGS",{})[a]}
;function Vf(){}
function Wf(a){var b=5E3;isNaN(b)&&(b=void 0);var c=C("yt.scheduler.instance.addJob");c?c(a,0,b):void 0===b?a():Cf(a,b||0)}
;function Xf(){}
y(Xf,Vf);Xf.prototype.start=function(){var a=C("yt.scheduler.instance.start");a&&a()};
Xf.h=void 0;Xf.i=function(){Xf.h||(Xf.h=new Xf)};
Xf.i();var Yf=B.ytPubsubPubsubInstance||new L,Zf=B.ytPubsubPubsubSubscribedKeys||{},$f=B.ytPubsubPubsubTopicToKeys||{},Fg=B.ytPubsubPubsubIsSynchronous||{};L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.M;L.prototype.publish=L.prototype.J;L.prototype.clear=L.prototype.clear;E("ytPubsubPubsubInstance",Yf);E("ytPubsubPubsubTopicToKeys",$f);E("ytPubsubPubsubIsSynchronous",Fg);E("ytPubsubPubsubSubscribedKeys",Zf);var Gg=window,R=Gg.ytcsi&&Gg.ytcsi.now?Gg.ytcsi.now:Gg.performance&&Gg.performance.timing&&Gg.performance.now&&Gg.performance.timing.navigationStart?function(){return Gg.performance.timing.navigationStart+Gg.performance.now()}:function(){return(new Date).getTime()};var Hg=Uf("initial_gel_batch_timeout",1E3),Ig=Math.pow(2,16)-1,Jg=null,Kg=0,Lg=void 0,Mg=0,Ng=0,Og=0,Pg=!0,Qg=B.ytLoggingTransportGELQueue_||new Map;E("ytLoggingTransportGELQueue_",Qg);var Rg=B.ytLoggingTransportTokensToCttTargetIds_||{};E("ytLoggingTransportTokensToCttTargetIds_",Rg);function Sg(a){a=void 0===a?!1:a;return new Fe(function(b){window.clearTimeout(Mg);window.clearTimeout(Ng);Ng=0;Lg&&Lg.isReady()?(Tg(b,a),Qg.clear()):(Ug(),b())})}
function Ug(){Q("web_gel_timeout_cap")&&!Ng&&(Ng=Cf(Sg,6E4));window.clearTimeout(Mg);var a=N("LOGGING_BATCH_TIMEOUT",Uf("web_gel_debounce_ms",1E4));Q("shorten_initial_gel_batch_timeout")&&Pg&&(a=Hg);Mg=Cf(Sg,a)}
function Tg(a,b){var c=Lg;b=void 0===b?!1:b;for(var d=Math.round(R()),e=Qg.size,f=u(Qg),g=f.next();!g.done;g=f.next()){var h=u(g.value);g=h.next().value;var k=h.next().value;h=hb({context:Vg(c.h||Wg())});h.events=k;(k=Rg[g])&&Xg(h,g,k);delete Rg[g];Yg(h,d);Zg(c,"log_event",h,{retry:!0,onSuccess:function(){e--;e||a();Kg=Math.round(R()-d)},
onError:function(){e--;e||a()},
ya:b});Pg=!1}}
function Yg(a,b){a.requestTimeMs=String(b);Q("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);var c=N("EVENT_ID",void 0);if(c){var d=N("BATCH_CLIENT_COUNTER",void 0)||0;!d&&Q("web_client_counter_random_seed")&&(d=Math.floor(Math.random()*Ig/2));d++;d>Ig&&(d=1);of("BATCH_CLIENT_COUNTER",d);c={serializedEventId:c,clientCounter:String(d)};a.serializedClientEventId=c;Jg&&Kg&&Q("log_gel_rtt_web")&&(a.previousBatchInfo={serializedClientEventId:Jg,roundtripMs:String(Kg)});Jg=c;Kg=0}}
function Xg(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
;var $g=B.ytLoggingGelSequenceIdObj_||{};E("ytLoggingGelSequenceIdObj_",$g);function ah(a){var b=bh;a=void 0===a?C("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=Pc;e.flash="0";a:{try{var f=b.h.top.location.href}catch(I){f=2;break a}f=f?f===b.i.location.href?0:1:2}e=(e.frm=f,e);e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?J:g;try{var h=g.history.length}catch(I){h=0}e.u_his=h;e.u_java=!!J.navigator&&"unknown"!==typeof J.navigator.javaEnabled&&!!J.navigator.javaEnabled&&J.navigator.javaEnabled();J.screen&&(e.u_h=J.screen.height,e.u_w=J.screen.width,
e.u_ah=J.screen.availHeight,e.u_aw=J.screen.availWidth,e.u_cd=J.screen.colorDepth);J.navigator&&J.navigator.plugins&&(e.u_nplug=J.navigator.plugins.length);J.navigator&&J.navigator.mimeTypes&&(e.u_nmime=J.navigator.mimeTypes.length);h=b.h;try{var k=h.screenX;var l=h.screenY}catch(I){}try{var m=h.outerWidth;var n=h.outerHeight}catch(I){}try{var q=h.innerWidth;var p=h.innerHeight}catch(I){}k=[h.screenLeft,h.screenTop,k,l,h.screen?h.screen.availWidth:void 0,h.screen?h.screen.availTop:void 0,m,n,q,p];
l=b.h.top;try{var w=(l||window).document,v="CSS1Compat"==w.compatMode?w.documentElement:w.body;var x=(new mc(v.clientWidth,v.clientHeight)).round()}catch(I){x=new mc(-12245933,-12245933)}w=x;x={};v=new Vc;B.SVGElement&&B.document.createElementNS&&v.set(0);l=Ac();l["allow-top-navigation-by-user-activation"]&&v.set(1);l["allow-popups-to-escape-sandbox"]&&v.set(2);B.crypto&&B.crypto.subtle&&v.set(3);B.TextDecoder&&B.TextEncoder&&v.set(4);v=Wc(v);x.bc=v;x.bih=w.height;x.biw=w.width;x.brdim=k.join();b=
b.i;b=(x.vis={visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,x.wgl=!!J.WebGLRenderingContext,x);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var bh=new function(){var a=window.document;this.h=window;this.i=a};
E("yt.ads_.signals_.getAdSignalsString",function(a){return Ff(ah(a))});var ch="XMLHttpRequest"in B?function(){return new XMLHttpRequest}:null;
function dh(){if(!ch)return null;var a=ch();return"open"in a?a:null}
;var eh={Authorization:"AUTHORIZATION","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},fh="app debugcss debugjs expflag force_ad_params force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address client_dev_root_url".split(" "),
gh=!1;
function hh(a,b){b=void 0===b?{}:b;if(!c)var c=window.location.href;var d=a.match(pc)[1]||null,e=rc(a);d&&e?(d=c,c=a.match(pc),d=d.match(pc),c=c[3]==d[3]&&c[1]==d[1]&&c[4]==d[4]):c=e?rc(c)==e&&(Number(c.match(pc)[4]||null)||null)==(Number(a.match(pc)[4]||null)||null):!0;d=Q("web_ajax_ignore_global_headers_if_set");for(var f in eh)e=N(eh[f]),!e||!c&&rc(a)||d&&void 0!==b[f]||(b[f]=e);if(c||!rc(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());(c||!rc(a))&&(f="undefined"!=typeof Intl?(new Intl.DateTimeFormat).resolvedOptions().timeZone:
null)&&(b["X-YouTube-Time-Zone"]=f);if(c||!rc(a))b["X-YouTube-Ad-Signals"]=Ff(ah(void 0));return b}
function ih(a){var b=window.location.search,c=rc(a),d=qc(a.match(pc)[5]||null);d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=Gf(b),f={};G(fh,function(g){e[g]&&(f[g]=e[g])});
return Hf(a,f||{},!1)}
function jh(a,b){if(window.fetch&&"XML"!=b.format){var c={method:b.method||"GET",credentials:"same-origin"};b.headers&&(c.headers=b.headers);a=kh(a,b);var d=lh(a,b);d&&(c.body=d);b.withCredentials&&(c.credentials="include");var e=!1,f;fetch(a,c).then(function(g){if(!e){e=!0;f&&window.clearTimeout(f);var h=g.ok,k=function(l){l=l||{};var m=b.context||B;h?b.onSuccess&&b.onSuccess.call(m,l,g):b.onError&&b.onError.call(m,l,g);b.S&&b.S.call(m,l,g)};
"JSON"==(b.format||"JSON")&&(h||400<=g.status&&500>g.status)?g.json().then(k,function(){k(null)}):k(null)}});
b.ca&&0<b.timeout&&(f=Cf(function(){e||(e=!0,window.clearTimeout(f),b.ca.call(b.context||B))},b.timeout))}else mh(a,b)}
function mh(a,b){var c=b.format||"JSON";a=kh(a,b);var d=lh(a,b),e=!1,f=nh(a,function(k){if(!e){e=!0;h&&window.clearTimeout(h);a:switch(k&&"status"in k?k.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:var l=!0;break a;default:l=!1}var m=null,n=400<=k.status&&500>k.status,q=500<=k.status&&600>k.status;if(l||n||q)m=oh(a,c,k,b.Oa);if(l)a:if(k&&204==k.status)l=!0;else{switch(c){case "XML":l=0==parseInt(m&&m.return_code,10);break a;case "RAW":l=!0;break a}l=!!m}m=m||
{};n=b.context||B;l?b.onSuccess&&b.onSuccess.call(n,k,m):b.onError&&b.onError.call(n,k,m);b.S&&b.S.call(n,k,m)}},b.method,d,b.headers,b.responseType,b.withCredentials);
if(b.R&&0<b.timeout){var g=b.R;var h=Cf(function(){e||(e=!0,f.abort(),window.clearTimeout(h),g.call(b.context||B,f))},b.timeout)}}
function kh(a,b){b.Sa&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=N("XSRF_FIELD_NAME",void 0),d=b.xa;d&&(d[c]&&delete d[c],a=Hf(a,d||{},!0));return a}
function lh(a,b){var c=N("XSRF_FIELD_NAME",void 0),d=N("XSRF_TOKEN",void 0),e=b.postBody||"",f=b.A,g=N("XSRF_FIELD_NAME",void 0),h;b.headers&&(h=b.headers["Content-Type"]);b.Ra||rc(a)&&!b.withCredentials&&rc(a)!=document.location.hostname||"POST"!=b.method||h&&"application/x-www-form-urlencoded"!=h||b.A&&b.A[g]||(f||(f={}),f[c]=d);f&&"string"===typeof e&&(e=Gf(e),jb(e,f),e=b.ea&&"JSON"==b.ea?JSON.stringify(e):uc(e));if(!(c=e)&&(c=f)){a:{for(var k in f){f=!1;break a}f=!0}c=!f}!gh&&c&&"POST"!=b.method&&
(gh=!0,sf(Error("AJAX request with postData should use POST")));return e}
function oh(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,tf(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?ph(a):null)e={},G(a.getElementsByTagName("*"),function(g){e[g.tagName]=qh(g)})}d&&rh(e);
return e}
function rh(a){if(D(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d=a[b];if(void 0===kb){var e=null;var f=B.trustedTypes;if(f&&f.createPolicy){try{e=f.createPolicy("goog#html",{createHTML:Qa,createScript:Qa,createScriptURL:Qa})}catch(g){B.console&&B.console.error(g.message)}kb=e}else kb=e}(e=kb)&&e.createHTML(d);a[c]=new Cb}else rh(a[b])}}
function ph(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function qh(a){var b="";G(a.childNodes,function(c){b+=c.nodeValue});
return b}
function nh(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&rf(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=dh();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;Q("debug_forward_web_query_parameters")&&(a=ih(a));k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=hh(a,e))for(var l in e)k.setRequestHeader(l,e[l]),"content-type"==l.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);
return k}
;function sh(){return"INNERTUBE_API_KEY"in nf&&"INNERTUBE_API_VERSION"in nf}
function Wg(){return{innertubeApiKey:N("INNERTUBE_API_KEY",void 0),innertubeApiVersion:N("INNERTUBE_API_VERSION",void 0),na:N("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),oa:N("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),innertubeContextClientVersion:N("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0),qa:N("INNERTUBE_CONTEXT_HL",void 0),pa:N("INNERTUBE_CONTEXT_GL",void 0),ra:N("INNERTUBE_HOST_OVERRIDE",void 0)||"",ta:!!N("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),sa:!!N("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:N("SERIALIZED_CLIENT_CONFIG_DATA",void 0)}}
function Vg(a){var b={client:{hl:a.qa,gl:a.pa,clientName:a.oa,clientVersion:a.innertubeContextClientVersion,configInfo:a.na}},c=window.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=N("EXPERIMENTS_TOKEN","");""!==c&&(b.client.experimentsToken=c);c=[];var d=N("EXPERIMENTS_FORCED_FLAGS",{});for(e in d)c.push({key:e,value:String(d[e])});var e=N("EXPERIMENT_FLAGS",{});for(var f in e)f.startsWith("force_")&&void 0===d[f]&&c.push({key:f,value:String(e[f])});0<c.length&&(b.request={internalExperimentFlags:c});
a.appInstallData&&Q("web_log_app_install_experiments")&&(b.client.configInfo=b.client.configInfo||{},b.client.configInfo.appInstallData=a.appInstallData);N("DELEGATED_SESSION_ID")&&!Q("pageid_as_header_web")&&(b.user={onBehalfOfUser:N("DELEGATED_SESSION_ID")});a=Object;f=a.assign;e=b.client;c={};d=u(Object.entries(Gf(N("DEVICE",""))));for(var g=d.next();!g.done;g=d.next()){var h=u(g.value);g=h.next().value;h=h.next().value;"cbrand"===g?c.deviceMake=h:"cmodel"===g?c.deviceModel=h:"cbr"===g?c.browserName=
h:"cbrver"===g?c.browserVersion=h:"cos"===g?c.osName=h:"cosver"===g?c.osVersion=h:"cplatform"===g&&(c.platform=h)}b.client=f.call(a,e,c);return b}
function th(a,b,c){c=void 0===c?{}:c;var d={"X-Goog-Visitor-Id":c.visitorData||N("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;(b=c.La||N("AUTHORIZATION"))||(a?b="Bearer "+C("gapi.auth.getToken")().Ka:b=Uc([]));b&&(d.Authorization=b,d["X-Goog-AuthUser"]=N("SESSION_INDEX",0),Q("pageid_as_header_web")&&(d["X-Goog-PageId"]=N("DELEGATED_SESSION_ID")));return d}
;function uh(a){a=Object.assign({},a);delete a.Authorization;var b=Uc();if(b){var c=new ld;c.update(N("INNERTUBE_API_KEY",void 0));c.update(b);b=c.digest();c=3;Ja(b);void 0===c&&(c=0);if(!Xb){Xb={};for(var d="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),e=["+/=","+/","-_=","-_.","-_"],f=0;5>f;f++){var g=d.concat(e[f].split(""));Wb[f]=g;for(var h=0;h<g.length;h++){var k=g[h];void 0===Xb[k]&&(Xb[k]=h)}}}c=Wb[c];d=[];for(e=0;e<b.length;e+=3){var l=b[e],m=(f=e+1<b.length)?
b[e+1]:0;k=(g=e+2<b.length)?b[e+2]:0;h=l>>2;l=(l&3)<<4|m>>4;m=(m&15)<<2|k>>6;k&=63;g||(k=64,f||(m=64));d.push(c[h],c[l],c[m]||"",c[k]||"")}a.hash=d.join("")}return a}
;function vh(){var a=new ff;(a=a.isAvailable()?new mf(a,"yt.innertube"):null)||(a=new gf("yt.innertube"),a=a.isAvailable()?a:null);this.h=a?new bf(a):null;this.i=document.domain||window.location.hostname}
vh.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.h)try{this.h.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape(Ee(b))}catch(f){return}else e=escape(b);b=this.i;cc.set(""+a,e,{Z:c,path:"/",domain:void 0===b?"youtube.com":b,secure:!1})};
vh.prototype.get=function(a,b){var c=void 0,d=!this.h;if(!d)try{c=this.h.get(a)}catch(e){d=!0}if(d&&(c=cc.get(""+a,void 0))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
vh.prototype.remove=function(a){this.h&&this.h.remove(a);var b=this.i;cc.remove(""+a,"/",void 0===b?"youtube.com":b)};var wh;function xh(){wh||(wh=new vh);return wh}
function yh(a,b,c,d){if(d)return null;d=xh().get("nextId",!0)||1;var e=xh().get("requests",!0)||{};e[d]={method:a,request:b,authState:uh(c),requestTime:Math.round(R())};xh().set("nextId",d+1,86400,!0);xh().set("requests",e,86400,!0);return d}
function zh(a){var b=xh().get("requests",!0)||{};delete b[a];xh().set("requests",b,86400,!0)}
function Ah(a){var b=xh().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(R())-d.requestTime)){var e=d.authState,f=uh(th(!1));gb(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(R())),Zg(a,d.method,e,{}));delete b[c]}}xh().set("requests",b,86400,!0)}}
;var Bh=C("ytPubsub2Pubsub2Instance")||new L;L.prototype.subscribe=L.prototype.subscribe;L.prototype.unsubscribeByKey=L.prototype.M;L.prototype.publish=L.prototype.J;L.prototype.clear=L.prototype.clear;E("ytPubsub2Pubsub2Instance",Bh);E("ytPubsub2Pubsub2SubscribedKeys",C("ytPubsub2Pubsub2SubscribedKeys")||{});E("ytPubsub2Pubsub2TopicToKeys",C("ytPubsub2Pubsub2TopicToKeys")||{});E("ytPubsub2Pubsub2IsAsync",C("ytPubsub2Pubsub2IsAsync")||{});E("ytPubsub2Pubsub2SkipSubKey",null);var Ch=[],Dh=!1;function Eh(a,b){Dh||(Ch.push({type:"EVENT",eventType:a,payload:b}),10<Ch.length&&Ch.shift())}
;function Fh(a){if(!a)throw Error();throw a;}
function Gh(a){return a}
function U(a){var b=this;this.i=a;this.state={status:"PENDING"};this.h=[];this.onRejected=[];this.i(function(c){if("PENDING"===b.state.status){b.state={status:"FULFILLED",value:c};c=u(b.h);for(var d=c.next();!d.done;d=c.next())d=d.value,d()}},function(c){if("PENDING"===b.state.status){b.state={status:"REJECTED",
reason:c};c=u(b.onRejected);for(var d=c.next();!d.done;d=c.next())d=d.value,d()}})}
U.all=function(a){return new U(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={H:0};f.H<a.length;f={H:f.H},++f.H)Hh(U.resolve(a[f.H]).then(function(g){return function(h){d[g.H]=h;e--;0===e&&b(d)}}(f)),function(g){c(g)})})};
U.resolve=function(a){return new U(function(b,c){a instanceof U?a.then(b,c):b(a)})};
U.reject=function(a){return new U(function(b,c){c(a)})};
U.prototype.then=function(a,b){var c=this,d=null!==a&&void 0!==a?a:Gh,e=null!==b&&void 0!==b?b:Fh;return new U(function(f,g){"PENDING"===c.state.status?(c.h.push(function(){Ih(c,c,d,f,g)}),c.onRejected.push(function(){Jh(c,c,e,f,g)})):"FULFILLED"===c.state.status?Ih(c,c,d,f,g):"REJECTED"===c.state.status&&Jh(c,c,e,f,g)})};
function Hh(a,b){a.then(void 0,b)}
function Ih(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof U?Kh(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Jh(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof U?Kh(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Kh(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof U?Kh(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Lh(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Mh(a){return new Promise(function(b,c){Lh(a,b,c)})}
function V(a){return new U(function(b,c){Lh(a,b,c)})}
;function Nh(a,b){return new U(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()})}
;function Oh(a,b){for(var c=[],d=1;d<arguments.length;++d)c[d-1]=arguments[d];d=Error.call(this,a);this.message=d.message;"stack"in d&&(this.stack=d.stack);d=[];var e=d.concat;if(!(c instanceof Array)){c=u(c);for(var f,g=[];!(f=c.next()).done;)g.push(f.value);c=g}this.args=e.call(d,c)}
y(Oh,Error);var Ph={},Qh=(Ph.AUTH_INVALID="No user identifier specified.",Ph.EXPLICIT_ABORT="Transaction was explicitly aborted.",Ph.IDB_NOT_SUPPORTED="IndexedDB is not supported.",Ph.MISSING_OBJECT_STORE="Object store not created.",Ph.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",Ph.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",Ph.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",Ph);
function Rh(a,b,c){b=void 0===b?{}:b;c=void 0===c?Qh[a]:c;Oh.call(this,c,Object.assign({name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;Object.setPrototypeOf(this,Rh.prototype);Dh||(Ch.push({type:"ERROR",payload:this}),10<Ch.length&&Ch.shift())}
y(Rh,Oh);function Sh(a,b,c){Rh.call(this,"UNKNOWN_ABORT",{objectStoreNames:a,dbName:b,mode:c});Object.setPrototypeOf(this,Sh.prototype)}
y(Sh,Rh);function Th(a){Rh.call(this,"MISSING_OBJECT_STORE",{Ta:a},Qh.MISSING_OBJECT_STORE);Object.setPrototypeOf(this,Th.prototype)}
y(Th,Rh);function Uh(a,b){this.h=a;this.options=b;this.transactionCount=0;this.j=Math.round(R());this.i=!1}
r=Uh.prototype;r.add=function(a,b,c){return Vh(this,[a],"readwrite",function(d){return Wh(d,a).add(b,c)})};
r.clear=function(a){return Vh(this,[a],"readwrite",function(b){return Wh(b,a).clear()})};
r.close=function(){var a;this.h.close();(null===(a=this.options)||void 0===a?0:a.closed)&&this.options.closed()};
r.count=function(a,b){return Vh(this,[a],"readonly",function(c){return Wh(c,a).count(b)})};
r["delete"]=function(a,b){return Vh(this,[a],"readwrite",function(c){return Wh(c,a)["delete"](b)})};
r.get=function(a,b){return Vh(this,[a],"readwrite",function(c){return Wh(c,a).get(b)})};
function Vh(a,b,c,d){c=void 0===c?"readonly":c;a.transactionCount++;var e=a.h.transaction(b,c);e=new Xh(e);d=Yh(e,d);Zh(a,d,b.join(),c);return d}
function Zh(a,b,c,d){Ra(a,function f(){var g,h,k=this,l,m,n;return Ba(f,function(q){if(1==q.h)return g=Math.round(R()),ra(q,2),z(q,b,4);if(2!=q.h)h=Math.round(R()),$h(k,!0,c,h-g),q.h=0,q.o=0;else{l=ua(q);m=Math.round(R());var p=l,w=k.h.name,v=k.transactionCount,x;"QuotaExceededError"===p.name?x=new Rh("QUOTA_EXCEEDED",{objectStoreNames:c,dbName:w,mode:d}):"UnknownError"===p.name&&(x=new Rh("QUOTA_MAYBE_EXCEEDED",{objectStoreNames:c,dbName:w,mode:d}));x&&Eh("QUOTA_EXCEEDED",{dbName:w,objectStoreNames:c,
transactionCount:v,transactionMode:d});n=m-g;l instanceof Sh&&(Eh("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:c,transactionDuration:n,transactionCount:k.transactionCount,dbDuration:m-k.j}),k.i=!0);$h(k,!1,c,n);q.h=0}})})}
function $h(a,b,c,d){Eh("TRANSACTION_ENDED",{objectStoreNames:c,connectionHasUnknownAbortedTransaction:a.i,duration:d,isSuccessful:b})}
function ai(a){this.h=a}
r=ai.prototype;r.add=function(a,b){return V(this.h.add(a,b))};
r.clear=function(){return V(this.h.clear()).then(function(){})};
r.count=function(a){return V(this.h.count(a))};
function bi(a,b){return ci(a,{query:b},function(c){return c["delete"]().then(function(){return c["continue"]()})}).then(function(){})}
r["delete"]=function(a){return a instanceof IDBKeyRange?bi(this,a):V(this.h["delete"](a))};
r.get=function(a){return V(this.h.get(a))};
r.index=function(a){return new di(this.h.index(a))};
r.getName=function(){return this.h.name};
function ci(a,b,c){a=a.h.openCursor(b.query,b.direction);return ei(a).then(function(d){return Nh(d,c)})}
function Xh(a){var b=this;this.h=a;this.i=new Map;this.aborted=!1;this.done=new Promise(function(c,d){b.h.addEventListener("complete",function(){c()});
b.h.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.h.error)});
b.h.addEventListener("abort",function(){var e=b.h.error;if(e)d(e);else if(!b.aborted){e=Sh;for(var f=b.h.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e(g.join(),b.h.db.name,b.h.mode);d(e)}})})}
function Yh(a,b){var c=new Promise(function(d,e){Hh(b(a).then(function(f){a.commit();d(f)}),e)});
return Promise.all([c,a.done]).then(function(d){return u(d).next().value})}
Xh.prototype.abort=function(){this.h.abort();this.aborted=!0;throw new Rh("EXPLICIT_ABORT");};
Xh.prototype.commit=function(){var a=this.h;a.commit&&!this.aborted&&a.commit()};
function Wh(a,b){var c=a.h.objectStore(b),d=a.i.get(c);d||(d=new ai(c),a.i.set(c,d));return d}
function di(a){this.h=a}
di.prototype.count=function(a){return V(this.h.count(a))};
di.prototype["delete"]=function(a){return fi(this,{query:a},function(b){return b["delete"]().then(function(){return b["continue"]()})})};
di.prototype.get=function(a){return V(this.h.get(a))};
di.prototype.getKey=function(a){return V(this.h.getKey(a))};
function fi(a,b,c){a=a.h.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return ei(a).then(function(d){return Nh(d,c)})}
function gi(a,b){this.request=a;this.cursor=b}
function ei(a){return V(a).then(function(b){return null===b?null:new gi(a,b)})}
r=gi.prototype;r.advance=function(a){this.cursor.advance(a);return ei(this.request)};
r["continue"]=function(a){this.cursor["continue"](a);return ei(this.request)};
r["delete"]=function(){return V(this.cursor["delete"]()).then(function(){})};
r.getKey=function(){return this.cursor.key};
r.update=function(a){return V(this.cursor.update(a))};function hi(a,b,c){return Ra(this,function e(){var f,g,h,k,l,m,n,q,p,w;return Ba(e,function(v){if(1==v.h)return f=self.indexedDB.open(a,b),g=c,h=g.blocked,k=g.blocking,l=g.wa,m=g.upgrade,n=g.closed,p=function(){q||(q=new Uh(f.result,{closed:n}));return q},f.addEventListener("upgradeneeded",function(x){if(null===x.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");
if(null===f.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");x.dataLoss&&"none"!==x.dataLoss&&Eh("IDB_DATA_CORRUPTED",{reason:x.dataLossMessage||"unknown reason",dbName:a});var I=p(),M=new Xh(f.transaction);m&&m(I,x.oldVersion,x.newVersion,M)}),h&&f.addEventListener("blocked",function(){h()}),z(v,Mh(f),2);
w=v.m;k&&w.addEventListener("versionchange",function(){k(p())});
w.addEventListener("close",function(){Eh("IDB_UNEXPECTEDLY_CLOSED",{dbName:a,dbVersion:w.version});l&&l()});
return v["return"](p())})})}
function ii(a,b,c){c=void 0===c?{}:c;return hi(a,b,c)}
function ji(a,b){b=void 0===b?{}:b;return Ra(this,function d(){var e,f,g;return Ba(d,function(h){e=self.indexedDB.deleteDatabase(a);f=b;(g=f.blocked)&&e.addEventListener("blocked",function(){g()});
return z(h,Mh(e),0)})})}
;var ki=Ub||Vb;function li(a){this.name="YtIdbMeta";this.options=a;this.i=!1}
function mi(a,b,c){c=void 0===c?{}:c;return ii(a,b,c)}
li.prototype["delete"]=function(a){a=void 0===a?{}:a;return ji(this.name,a)};
li.prototype.open=function(){var a=this;if(!this.h){var b,c=function(){a.h===b&&(a.h=void 0)},d={blocking:function(f){f.close()},
closed:c,wa:c,upgrade:this.options.upgrade},e=function(){return Ra(a,function g(){var h=this,k,l,m;return Ba(g,function(n){switch(n.h){case 1:return ra(n,2),z(n,mi(h.name,h.options.version,d),4);case 4:k=n.m;if(!Tb){n.F(5);break}a:{var q=u(Object.keys(h.options.va));for(var p=q.next();!p.done;p=q.next())if(p=p.value,!k.h.objectStoreNames.contains(p)){q=p;break a}q=void 0}l=q;if(void 0===l){n.F(5);break}if(!Tb||h.i){n.F(7);break}h.i=!0;return z(n,h["delete"](),8);case 8:return n["return"](e());case 7:throw new Th(l);
case 5:return n["return"](k);case 2:m=ua(n);if(m instanceof DOMException?"VersionError"===m.name:"DOMError"in self&&m instanceof DOMError?"VersionError"===m.name:m instanceof Object&&"message"in m&&"An attempt was made to open a database using a lower version than the existing version."===m.message)return n["return"](mi(h.name,void 0,Object.assign(Object.assign({},d),{upgrade:void 0})));c();throw m;}})})};
this.h=b=e()}return this.h};var ni=new li({va:{databases:!0},upgrade:function(a,b){1>b&&a.h.createObjectStore("databases",{keyPath:"actualName"})}});
function oi(a){return Ra(this,function c(){var d;return Ba(c,function(e){if(1==e.h)return z(e,ni.open(),2);d=e.m;return e["return"](Vh(d,["databases"],"readwrite",function(f){var g=Wh(f,"databases");return g.get(a.actualName).then(function(h){if(h?a.actualName!==h.actualName||a.publicName!==h.publicName||a.userIdentifier!==h.userIdentifier||a.signedIn!==h.signedIn||a.clearDataOnAuthChange!==h.clearDataOnAuthChange:1)return V(g.h.put(a,void 0)).then(function(){})})}))})})}
function pi(){return Ra(this,function b(){var c;return Ba(b,function(d){if(1==d.h)return z(d,ni.open(),2);c=d.m;return d["return"](c["delete"]("databases","yt-idb-test-do-not-use"))})})}
;new K;var qi;
function ri(){return Ra(this,function b(){var c,d,e;return Ba(b,function(f){switch(f.h){case 1:var g;if(g=ki)g=/WebKit\/([0-9]+)/.exec(zb),g=!!(g&&600<=parseInt(g[1],10));g&&(g=/WebKit\/([0-9]+)/.exec(zb),g=!(g&&602<=parseInt(g[1],10)));if(g&&!Q("ytidb_allow_on_ios_safari_v8_and_v9")||Gb)return f["return"](!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return f["return"](!1)}catch(h){return f["return"](!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return f["return"](!1);if(!Q("ytidb_new_supported_check_with_delete")){f.F(2);
break}ra(f,3);return z(f,pi(),5);case 5:return f["return"](!0);case 3:return ua(f),f["return"](!1);case 2:if(!Q("ytidb_new_supported_check_with_add_and_delete")){f.F(6);break}ra(f,7);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0,signedIn:!1};return z(f,oi(d),9);case 9:return z(f,pi(),10);case 10:return f["return"](!0);case 7:return ua(f),f["return"](!1);case 6:return ra(f,11,12),z(f,ii("yt-idb-test-do-not-use"),14);case 14:if(e=f.m,!e)return f["return"](!1);
case 12:f.C=[f.i];f.o=0;f.l=0;if(e)try{e.close()}catch(h){}g=f.C.splice(0)[0];(g=f.i=f.i||g)?g.Y?f.h=f.o||f.l:void 0!=g.F&&f.l<g.F?(f.h=g.F,f.i=null):f.h=f.l:f.h=13;break;case 11:return ua(f),f["return"](!1);case 13:return f["return"](!0)}})})}
function si(){if(void 0!==qi)return qi;var a=R();Dh=!0;return qi=ri().then(function(b){Dh=!1;Eh("IS_SUPPORTED_COMPLETED",{duration:Math.round(R()-a),isSupported:b});return b})}
;function ti(){K.call(this);this.o=!1;this.i=ui();vi(this);wi(this)}
y(ti,K);function ui(){var a=window.navigator.onLine;return void 0===a?!0:a}
function wi(a){window.addEventListener("online",function(){a.i=!0;xi(a)})}
function vi(a){window.addEventListener("offline",function(){a.i=!1;xi(a)})}
function xi(a){a.o&&(tf(new Oh("NetworkStatusManager state did not match poll",R()-0)),a.o=!1)}
;function yi(a,b){b=void 0===b?{}:b;si().then(function(){ti.h||(ti.h=new ti);ti.h.i!==ui()&&tf(new Oh("NetworkStatusManager isOnline does not match window status"));mh(a,b)})}
function zi(a,b){b=void 0===b?{}:b;si().then(function(){mh(a,b)})}
;function Ai(a){var b=this;this.h=null;a?this.h=a:sh()&&(this.h=Wg());Wf(function(){Ah(b)})}
Ai.prototype.isReady=function(){!this.h&&sh()&&(this.h=Wg());return!!this.h};
function Zg(a,b,c,d){!N("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&tf(new Oh("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var e=new Oh("innertube xhrclient not ready",b,c,d);sf(e);e.sampleWeight=0;throw e;}var f={headers:{"Content-Type":"application/json"},method:"POST",A:c,ea:"JSON",R:function(){d.R()},
ca:d.R,onSuccess:function(n,q){if(d.onSuccess)d.onSuccess(q)},
ba:function(n){if(d.onSuccess)d.onSuccess(n)},
onError:function(n,q){if(d.onError)d.onError(q)},
Ua:function(n){if(d.onError)d.onError(n)},
timeout:d.timeout,withCredentials:!0},g="";(e=a.h.ra)&&(g=e);var h=a.h.ta||!1,k=th(h,g,d);Object.assign(f.headers,k);f.headers.Authorization&&!g&&(f.headers["x-origin"]=window.location.origin);e="/youtubei/"+a.h.innertubeApiVersion+"/"+b;var l={alt:"json"};a.h.sa&&f.headers.Authorization||(l.key=a.h.innertubeApiKey);var m=Hf(""+g+e,l||{},!0);si().then(function(n){if(d.retry&&Q("retry_web_logging_batches")&&"www.youtube-nocookie.com"!=g){if(Q("networkless_gel")&&!n||!Q("networkless_gel"))var q=yh(b,
c,k,h);if(q){var p=f.onSuccess,w=f.ba;f.onSuccess=function(v,x){zh(q);p(v,x)};
c.ba=function(v,x){zh(q);w(v,x)}}}try{Q("use_fetch_for_op_xhr")?jh(m,f):Q("networkless_gel")&&d.retry?(f.method="POST",!d.ya&&Q("nwl_send_fast_on_unload")?zi(m,f):yi(m,f)):(f.method="POST",f.A||(f.A={}),mh(m,f))}catch(v){if("InvalidAccessError"==v.name)q&&(zh(q),q=0),tf(Error("An extension is blocking network request."));
else throw v;}q&&Wf(function(){Ah(a)})})}
;var Bi=[{aa:function(a){return"Cannot read property '"+a.key+"'"},
T:{TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,
groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]}],Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}]}},{aa:function(a){return"Cannot call '"+a.key+"'"},
T:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}}];function Ci(){this.h=[];this.i=[]}
var Di;var Ei=new L;function Fi(a,b,c,d){c+="."+a;a=Gi(b);d[c]=a;return c.length+a.length}
function Gi(a){return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}
;var Hi=new Set,Ii=0,Ji=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function W(a,b,c){this.o=this.h=this.i=null;this.m=Ka(this);this.j=0;this.v=!1;this.s=[];this.l=null;this.C=c;this.I={};c=document;if(a="string"===typeof a?c.getElementById(a):a)if(c="iframe"==a.tagName.toLowerCase(),b.host||(b.host=c?sc(a.src):"https://www.youtube.com"),this.i=new Qf(b),c||(b=Ki(this,a),this.o=a,(c=a.parentNode)&&c.replaceChild(b,a),a=b),this.h=a,this.h.id||(this.h.id="widget"+Ka(this.h)),Kf[this.h.id]=this,window.postMessage){this.l=new L;Li(this);b=P(this.i,"events");for(var d in b)b.hasOwnProperty(d)&&
this.addEventListener(d,b[d]);for(var e in Mf)Mi(this,e)}}
r=W.prototype;r.setSize=function(a,b){this.h.width=a;this.h.height=b;return this};
r.ua=function(){return this.h};
r.fa=function(a){Ni(this,a.event,a)};
r.addEventListener=function(a,b){var c=b;"string"==typeof b&&(c=function(){window[b].apply(window,arguments)});
if(!c)return this;this.l.subscribe(a,c);Oi(this,a);return this};
function Mi(a,b){var c=b.split(".");if(2==c.length){var d=c[1];a.C==c[0]&&Oi(a,d)}}
r.destroy=function(){this.h.id&&(Kf[this.h.id]=null);var a=this.l;a&&"function"==typeof a.dispose&&a.dispose();if(this.o){a=this.h;var b=a.parentNode;b&&b.replaceChild(this.o,a)}else(a=this.h)&&a.parentNode&&a.parentNode.removeChild(a);Sf&&(Sf[this.m]=null);this.i=null;a=this.h;for(var c in fb)fb[c][0]==a&&zf(c);this.o=this.h=null};
r.W=function(){return{}};
function Pi(a,b,c){c=c||[];c=Array.prototype.slice.call(c);b={event:"command",func:b,args:c};a.v?a.U(b):a.s.push(b)}
function Ni(a,b,c){a.l.j||(c={target:a,data:c},a.l.J(b,c),Pf(a.C+"."+b,c))}
function Ki(a,b){for(var c=document.createElement("iframe"),d=b.attributes,e=0,f=d.length;e<f;e++){var g=d[e].value;null!=g&&""!=g&&"null"!=g&&c.setAttribute(d[e].name,g)}c.setAttribute("frameBorder",0);c.setAttribute("allowfullscreen",1);c.setAttribute("allow","accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");c.setAttribute("title","YouTube "+P(a.i,"title"));(d=P(a.i,"width"))&&c.setAttribute("width",d);(d=P(a.i,"height"))&&c.setAttribute("height",d);var h=
a.W();h.enablejsapi=window.postMessage?1:0;window.location.host&&(h.origin=window.location.protocol+"//"+window.location.host);h.widgetid=a.m;window.location.href&&G(["debugjs","debugcss"],function(k){var l=window.location.href;var m=l.search(vc);b:{var n=0;for(var q=k.length;0<=(n=l.indexOf(k,n))&&n<m;){var p=l.charCodeAt(n-1);if(38==p||63==p)if(p=l.charCodeAt(n+q),!p||61==p||38==p||35==p)break b;n+=q+1}n=-1}if(0>n)l=null;else{q=l.indexOf("&",n);if(0>q||q>m)q=m;n+=k.length+1;l=decodeURIComponent(l.substr(n,
q-n).replace(/\+/g," "))}null!==l&&(h[k]=l)});
c.src=P(a.i,"host")+("/embed/"+P(a.i,"videoId"))+"?"+uc(h);return c}
r.da=function(){this.h&&this.h.contentWindow?this.U({event:"listening"}):window.clearInterval(this.j)};
function Li(a){Rf(a.i,a,a.m);a.j=Df(Pa(a.da,a));Bf(a.h,"load",Pa(function(){window.clearInterval(this.j);this.j=Df(Pa(this.da,this))},a))}
function Oi(a,b){a.I[b]||(a.I[b]=!0,Pi(a,"addEventListener",[b]))}
r.U=function(a){a.id=this.m;a.channel="widget";var b=Ee(a),c=this.i,d=sc(this.h.src||"");var e=0==d.indexOf("https:")?[d]:c.h?[d.replace("http:","https:")]:c.j?[d]:[d,d.replace("http:","https:")];if(this.h.contentWindow)for(var f=0;f<e.length;f++)try{this.h.contentWindow.postMessage(b,e[f])}catch(Va){if(Va.name&&"SyntaxError"==Va.name){if(!(Va.message&&0<Va.message.indexOf("target origin ''"))){var g=void 0,h=void 0,k=Va;h=void 0===h?{}:h;h.name=N("INNERTUBE_CONTEXT_CLIENT_NAME",1);h.version=N("INNERTUBE_CONTEXT_CLIENT_VERSION",
void 0);var l=h||{},m="WARNING";m=void 0===m?"ERROR":m;g=void 0===g?!1:g;if(k){if(Q("console_log_js_exceptions")){var n=k,q=[];q.push("Name: "+n.name);q.push("Message: "+n.message);n.hasOwnProperty("params")&&q.push("Error Params: "+JSON.stringify(n.params));q.push("File name: "+n.fileName);q.push("Stacktrace: "+n.stack);window.console.log(q.join("\n"),n)}if((!Q("web_yterr_killswitch")||window&&window.yterr||g)&&!(5<=Ii)&&0!==k.sampleWeight){var p=k,w=l,v=Yb(p),x=v.message||"Unknown Error",I=v.name||
"UnknownError",M=v.stack||p.h||"Not available";if(Q("kevlar_js_fixes")&&M.startsWith(I+": "+x)){var ya=M.split("\n");ya.shift();M=ya.join("\n")}var Ui=v.lineNumber||"Not available",Vi=v.fileName||"Not available",Wi=M,dc=void 0,fa=p,S=w;if(fa.hasOwnProperty("args")&&fa.args&&fa.args.length)for(var sa=0,ec=0;ec<fa.args.length;ec++){var T=fa.args[ec],Ea="params."+ec;sa+=Ea.length;if(T)if(Array.isArray(T)){for(var Xi=S,vd=sa,qb=0;qb<T.length&&!(T[qb]&&(vd+=Fi(qb,T[qb],Ea,Xi),500<vd));qb++);sa=vd}else if("object"===
typeof T){var fc=void 0,Yi=S,wd=sa;for(fc in T)if(T[fc]&&(wd+=Fi(fc,T[fc],Ea,Yi),500<wd))break;sa=wd}else S[Ea]=Gi(T),sa+=S[Ea].length;else S[Ea]=Gi(T),sa+=S[Ea].length;if(500<=sa)break}else if(fa.hasOwnProperty("params")&&fa.params){var gc=fa.params;if("object"===typeof fa.params){var ag=0;for(dc in gc)if(gc[dc]){var bg="params."+dc,cg=Gi(gc[dc]);S[bg]=cg;ag+=bg.length+cg.length;if(500<ag)break}}else S.params=Gi(gc)}navigator.vendor&&!S.hasOwnProperty("vendor")&&(S.vendor=navigator.vendor);var xd=
{message:x,name:I,lineNumber:Ui,fileName:Vi,stack:Wi,params:S},dg=Number(p.columnNumber);isNaN(dg)||(xd.lineNumber=xd.lineNumber+":"+dg);for(var X,Fa=xd,eg=u(Bi),yd=eg.next();!yd.done;yd=eg.next()){var zd=yd.value;if(zd.T[Fa.name])for(var fg=u(zd.T[Fa.name]),Ad=fg.next();!Ad.done;Ad=fg.next()){var gg=Ad.value,hc=Fa.message.match(gg.regexp);if(hc){Fa.params["error.original"]=hc[0];for(var Bd=gg.groups,hg={},Wa=0;Wa<Bd.length;Wa++)hg[Bd[Wa]]=hc[Wa+1],Fa.params["error."+Bd[Wa]]=hc[Wa+1];Fa.message=zd.aa(hg);
break}}}X=Fa;window.yterr&&"function"===typeof window.yterr&&window.yterr(X);if(!(Hi.has(X.message)||0<=X.stack.indexOf("/YouTubeCenter.js")||0<=X.stack.indexOf("/mytube.js"))){"ERROR"===m?Ei.J("handleError",X):"WARNING"===m&&Ei.J("handleWarning",X);if(Q("kevlar_gel_error_routing")){var ic=void 0,ig=m,O=X;a:{for(var jg=u(Ji),Cd=jg.next();!Cd.done;Cd=jg.next()){var kg=zb;if(kg&&0<=kg.toLowerCase().indexOf(Cd.value.toLowerCase())){var lg=!0;break a}}lg=!1}if(!lg){var rb={stackTrace:O.stack};O.fileName&&
(rb.filename=O.fileName);var ha=O.lineNumber&&O.lineNumber.split?O.lineNumber.split(":"):[];0!==ha.length&&(1!==ha.length||isNaN(Number(ha[0]))?2!==ha.length||isNaN(Number(ha[0]))||isNaN(Number(ha[1]))||(rb.lineNumber=Number(ha[0]),rb.columnNumber=Number(ha[1])):rb.lineNumber=Number(ha[0]));Di||(Di=new Ci);var jc=Di;var Zi=O.message,$i=O.name;a:{for(var mg=u(jc.i),Dd=mg.next();!Dd.done;Dd=mg.next()){var ng=Dd.value;if(O.message&&O.message.match(ng.h)){var Ed=ng.weight;break a}}for(var og=u(jc.h),
Fd=og.next();!Fd.done;Fd=og.next()){var pg=Fd.value;if(pg.h(O)){Ed=pg.weight;break a}}Ed=1}var Gd={level:"ERROR_LEVEL_UNKNOWN",message:Zi,errorClassName:$i,sampleWeight:Ed};"ERROR"===ig?Gd.level="ERROR_LEVEL_ERROR":"WARNING"===ig&&(Gd.level="ERROR_LEVEL_WARNNING");var aj={isObfuscated:!0,browserStackInfo:rb},Xa={pageUrl:window.location.href};N("FEXP_EXPERIMENTS")&&(Xa.experimentIds=N("FEXP_EXPERIMENTS"));Xa.kvPairs=[{key:"client.params.errorServiceSignature",value:"msg="+jc.i.length+"&cb="+jc.h.length},
{key:"client.params.serviceWorker",value:"false"}];var Hd=O.params;if(Hd)for(var qg=u(Object.keys(Hd)),Id=qg.next();!Id.done;Id=qg.next()){var rg=Id.value;Xa.kvPairs.push({key:"client."+rg,value:String(Hd[rg])})}var sg=N("SERVER_NAME",void 0),tg=N("SERVER_VERSION",void 0);sg&&tg&&(Xa.kvPairs.push({key:"server.name",value:sg}),Xa.kvPairs.push({key:"server.version",value:tg}));var bj={errorMetadata:Xa,stackTrace:aj,logMessage:Gd};ic=void 0===ic?{}:ic;var ug=Ai;N("ytLoggingEventsDefaultDisabled",!1)&&
Ai==Ai&&(ug=null);var cj=ug,Y=ic;Y=void 0===Y?{}:Y;var sb={};sb.eventTimeMs=Math.round(Y.timestamp||R());sb.clientError=bj;var vg=C("_lact",window);var wg=null==vg?-1:Math.max(Date.now()-vg,0);sb.context={lastActivityMs:String(Y.timestamp||!isFinite(wg)?-1:wg)};if(Q("log_sequence_info_on_gel_web")&&Y.ga){var dj=sb.context,tb=Y.ga;$g[tb]=tb in $g?$g[tb]+1:0;dj.sequence={index:$g[tb],groupKey:tb};Y.Qa&&delete $g[Y.ga]}var ej=sb,kc=Y.Pa,xg=cj,Jd="";if(kc){var lc=kc,Kd={};lc.videoId?Kd.videoId=lc.videoId:
lc.playlistId&&(Kd.playlistId=lc.playlistId);Rg[kc.token]=Kd;Jd=kc.token}var Ld=Qg.get(Jd)||[];Qg.set(Jd,Ld);Ld.push(ej);xg&&(Lg=new xg);var fj=Uf("web_logging_max_batch")||100,yg=R();Ld.length>=fj?Sg(!0):10<=yg-Og&&(Ug(),Og=yg);Sg()}}if(!Q("suppress_error_204_logging")){var Md,Ga=X,ub=Ga.params||{},ta={xa:{a:"logerror",t:"jserror",type:Ga.name,msg:Ga.message.substr(0,250),line:Ga.lineNumber,level:m,"client.name":ub.name},A:{url:N("PAGE_NAME",window.location.href),file:Ga.fileName},method:"POST"};
ub.version&&(ta["client.version"]=ub.version);if(ta.A){Ga.stack&&(ta.A.stack=Ga.stack);for(var zg=u(Object.keys(ub)),Nd=zg.next();!Nd.done;Nd=zg.next()){var Ag=Nd.value;ta.A["client."+Ag]=ub[Ag]}if(Md=N("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS",void 0))for(var Bg=u(Object.keys(Md)),Od=Bg.next();!Od.done;Od=Bg.next()){var Cg=Od.value;ta.A[Cg]=Md[Cg]}var Dg=N("SERVER_NAME",void 0),Eg=N("SERVER_VERSION",void 0);Dg&&Eg&&(ta.A["server.name"]=Dg,ta.A["server.version"]=Eg)}mh(N("ECATCHER_REPORT_HOST","")+
"/error_204",ta)}Hi.add(X.message);Ii++}}}}}else throw Va;}else console&&console.warn&&console.warn("The YouTube player is not attached to the DOM. API calls should be made after the onReady event. See more: https://developers.google.com/youtube/iframe_api_reference#Events")};function Qi(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function Ri(a){return 0===a.search("get")||0===a.search("is")}
;function Z(a,b){if(!a)throw Error("YouTube player element ID required.");var c={title:"video player",videoId:"",width:640,height:360};if(b)for(var d in b)c[d]=b[d];W.call(this,a,c,"player");this.G={};this.playerInfo={}}
y(Z,W);r=Z.prototype;r.W=function(){var a=P(this.i,"playerVars");if(a){var b={},c;for(c in a)b[c]=a[c];a=b}else a={};window!=window.top&&document.referrer&&(a.widget_referrer=document.referrer.substring(0,256));if(c=P(this.i,"embedConfig")){if(D(c))try{c=JSON.stringify(c)}catch(d){console.error("Invalid embed config JSON",d)}a.embed_config=c}return a};
r.fa=function(a){var b=a.event;a=a.info;switch(b){case "apiInfoDelivery":if(D(a))for(var c in a)this.G[c]=a[c];break;case "infoDelivery":Si(this,a);break;case "initialDelivery":window.clearInterval(this.j);this.playerInfo={};this.G={};Ti(this,a.apiInterface);Si(this,a);break;default:Ni(this,b,a)}};
function Si(a,b){if(D(b))for(var c in b)a.playerInfo[c]=b[c]}
function Ti(a,b){G(b,function(c){this[c]||("getCurrentTime"==c?this[c]=function(){var d=this.playerInfo.currentTime;if(1==this.playerInfo.playerState){var e=(Date.now()/1E3-this.playerInfo.currentTimeLastUpdated_)*this.playerInfo.playbackRate;0<e&&(d+=Math.min(e,1))}return d}:Qi(c)?this[c]=function(){this.playerInfo={};
this.G={};Pi(this,c,arguments);return this}:Ri(c)?this[c]=function(){var d=0;
0===c.search("get")?d=3:0===c.search("is")&&(d=2);return this.playerInfo[c.charAt(d).toLowerCase()+c.substr(d+1)]}:this[c]=function(){Pi(this,c,arguments);
return this})},a)}
r.getVideoEmbedCode=function(){var a=parseInt(P(this.i,"width"),10),b=parseInt(P(this.i,"height"),10),c=P(this.i,"host")+("/embed/"+P(this.i,"videoId"));xb.test(c)&&(-1!=c.indexOf("&")&&(c=c.replace(mb,"&amp;")),-1!=c.indexOf("<")&&(c=c.replace(nb,"&lt;")),-1!=c.indexOf(">")&&(c=c.replace(ob,"&gt;")),-1!=c.indexOf('"')&&(c=c.replace(pb,"&quot;")),-1!=c.indexOf("'")&&(c=c.replace(vb,"&#39;")),-1!=c.indexOf("\x00")&&(c=c.replace(wb,"&#0;")));return'<iframe width="'+a+'" height="'+b+'" src="'+c+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'};
r.getOptions=function(a){return this.G.namespaces?a?this.G[a].options||[]:this.G.namespaces||[]:[]};
r.getOption=function(a,b){if(this.G.namespaces&&a&&b)return this.G[a][b]};
function gj(a){if("iframe"!=a.tagName.toLowerCase()){var b=Of(a,"videoid");b&&(b={videoId:b,width:Of(a,"width"),height:Of(a,"height")},new Z(a,b))}}
;E("YT.PlayerState.UNSTARTED",-1);E("YT.PlayerState.ENDED",0);E("YT.PlayerState.PLAYING",1);E("YT.PlayerState.PAUSED",2);E("YT.PlayerState.BUFFERING",3);E("YT.PlayerState.CUED",5);E("YT.get",function(a){return Kf[a]});
E("YT.scan",Nf);E("YT.subscribe",function(a,b,c){We.subscribe(a,b,c);Mf[a]=!0;for(var d in Kf)Mi(Kf[d],a)});
E("YT.unsubscribe",function(a,b,c){Ve(a,b,c)});
E("YT.Player",Z);W.prototype.destroy=W.prototype.destroy;W.prototype.setSize=W.prototype.setSize;W.prototype.getIframe=W.prototype.ua;W.prototype.addEventListener=W.prototype.addEventListener;Z.prototype.getVideoEmbedCode=Z.prototype.getVideoEmbedCode;Z.prototype.getOptions=Z.prototype.getOptions;Z.prototype.getOption=Z.prototype.getOption;
Lf.push(function(a){var b=a;b||(b=document);a=ab(b.getElementsByTagName("yt:player"));var c=b||document;if(c.querySelectorAll&&c.querySelector)b=c.querySelectorAll(".yt-player");else{var d;c=document;b=b||c;if(b.querySelectorAll&&b.querySelector)b=b.querySelectorAll(".yt-player");else if(b.getElementsByClassName){var e=b.getElementsByClassName("yt-player");b=e}else{e=b.getElementsByTagName("*");var f={};for(c=d=0;b=e[c];c++){var g=b.className,h;if(h="function"==typeof g.split)h=0<=Ta(g.split(/\s+/),
"yt-player");h&&(f[d++]=b)}f.length=d;b=f}}b=ab(b);G($a(a,b),gj)});
"undefined"!=typeof YTConfig&&YTConfig.parsetags&&"onload"!=YTConfig.parsetags||Nf();var hj=B.onYTReady;hj&&hj();var ij=B.onYouTubeIframeAPIReady;ij&&ij();var jj=B.onYouTubePlayerAPIReady;jj&&jj();}).call(this);
