!/**
 * Highstock JS v13.1.1 (2026-09-20)
 * @module highcharts/indicators/williams-r
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
 */function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(t._Highcharts.SeriesRegistry,t._Highcharts):"function"==typeof define&&define.amd?define("highcharts/indicators/williams-r",["highcharts/highcharts"],function(t){return e(t.SeriesRegistry,t)}):"object"==typeof exports?exports["highcharts/indicators/williams-r"]=e(t._Highcharts.SeriesRegistry,t._Highcharts):t.Highcharts=e(t.Highcharts.SeriesRegistry,t.Highcharts)}("u"<typeof window?this:window,function(t,e){var r={512:function(e){"use strict";e.exports=t},944:function(t){"use strict";t.exports=e}},n={};function i(t){var e=n[t];if(void 0!==e)return e.exports;var o=n[t]={exports:{}};return r[t](o,o.exports,i),o.exports}i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,{a:e}),e},i.d=function(t,e){for(var r in e)i.o(e,r)&&!i.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var o={};return!function(){"use strict";i.d(o,{default:function(){return p}});var t,e=i(944),r=i.n(e),n=function(t,e,r){return t.reduce(function(t,n){return[Math.min(t[0],n[e]),Math.max(t[1],n[r])]},[Number.MAX_VALUE,-Number.MAX_VALUE])},s=i(512),u=i.n(s),a=(t=function(e,r){return(t=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r])})(e,r)},function(e,r){function n(){this.constructor=e}t(e,r),e.prototype=null===r?Object.create(r):(n.prototype=r.prototype,new n)}),c=u().seriesTypes.sma,f=function(t){function r(){return null!==t&&t.apply(this,arguments)||this}return a(r,t),r.prototype.getValues=function(t,r){var i,o,s,u,a,c=r.period,f=t.xData,p=t.yData,h=p?p.length:0,l=[],d=[],y=[];if(!(f.length<c)&&(0,e.isArray)(p[0])&&4===p[0].length){for(a=c-1;a<h;a++)u=(i=n(p.slice(a-c+1,a+1),2,1))[0],o=-(((s=i[1])-p[a][3])/(s-u)*100),f[a]&&(l.push([f[a],o]),d.push(f[a]),y.push(o));return{values:l,xData:d,yData:y}}},r.defaultOptions=(0,e.merge)(c.defaultOptions,{params:{index:void 0,period:14}}),r}(c);(0,e.extend)(f.prototype,{nameBase:"Williams %R"}),u().registerSeriesType("williamsr",f);var p=r()}(),o=o.default});