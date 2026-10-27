!/**
 * Highstock JS v13.1.1 (2026-09-20)
 * @module highcharts/indicators/dpo
 * @requires highcharts
 * @requires highcharts/modules/stock
 *
 * Indicator series type for Highcharts Stock
 *
 * (c) 2010-2026 Highsoft AS
 * Author: Wojciech Chmiel
 *
 * A commercial license may be required depending on use,
 * see www.highcharts.com/license
 */function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(t._Highcharts.SeriesRegistry,t._Highcharts):"function"==typeof define&&define.amd?define("highcharts/indicators/dpo",["highcharts/highcharts"],function(t){return e(t.SeriesRegistry,t)}):"object"==typeof exports?exports["highcharts/indicators/dpo"]=e(t._Highcharts.SeriesRegistry,t._Highcharts):t.Highcharts=e(t.Highcharts.SeriesRegistry,t.Highcharts)}("u"<typeof window?this:window,function(t,e){var r={512:function(e){"use strict";e.exports=t},944:function(t){"use strict";t.exports=e}},o={};function n(t){var e=o[t];if(void 0!==e)return e.exports;var i=o[t]={exports:{}};return r[t](i,i.exports,n),i.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var i={};return!function(){"use strict";n.d(i,{default:function(){return f}});var t,e=n(944),r=n.n(e),o=n(512),s=n.n(o),u=(t=function(e,r){return(t=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r])})(e,r)},function(e,r){function o(){this.constructor=e}t(e,r),e.prototype=null===r?Object.create(r):(o.prototype=r.prototype,new o)}),a=s().seriesTypes.sma;function c(t,r,o,n,i){var s,u=null!=(s=r[o][n])?s:r[o];return i?(0,e.correctFloat)(t-u):(0,e.correctFloat)(t+u)}var p=function(t){function r(){return null!==t&&t.apply(this,arguments)||this}return u(r,t),r.prototype.getValues=function(t,e){var r,o,n,i,s,u,a=e.period,p=e.index,f=Math.floor(a/2+1),h=a+f,d=t.xData||[],l=t.yData||[],y=l.length,g=[],x=[],v=[],_=0;if(!(d.length<=h)){for(s=0;s<a-1;s++)_=c(_,l,s,p);for(u=0;u<=y-h;u++)n=u+a-1,i=u+h-1,_=c(_,l,n,p),o=(null!=(r=l[i][p])?r:l[i])-_/a,_=c(_,l,u,p,!0),g.push([d[i],o]),x.push(d[i]),v.push(o);return{values:g,xData:x,yData:v}}},r.defaultOptions=(0,e.merge)(a.defaultOptions,{params:{index:0,period:21}}),r}(a);(0,e.extend)(p.prototype,{nameBase:"DPO"}),s().registerSeriesType("dpo",p);var f=r()}(),i=i.default});