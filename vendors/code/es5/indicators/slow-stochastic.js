!/**
 * Highstock JS v13.1.1 (2026-09-20)
 * @module highcharts/indicators/indicators
 * @requires highcharts
 * @requires highcharts/modules/stock
 *
 * Slow Stochastic series type for Highcharts Stock
 *
 * (c) 2010-2026 Highsoft AS
 * Author: Paweł Fus
 *
 * A commercial license may be required depending on use,
 * see www.highcharts.com/license
 */function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(t._Highcharts.SeriesRegistry,t._Highcharts):"function"==typeof define&&define.amd?define("highcharts/indicators/slow-stochastic",["highcharts/highcharts"],function(t){return e(t.SeriesRegistry,t)}):"object"==typeof exports?exports["highcharts/indicators/slow-stochastic"]=e(t._Highcharts.SeriesRegistry,t._Highcharts):t.Highcharts=e(t.Highcharts.SeriesRegistry,t.Highcharts)}("u"<typeof window?this:window,function(t,e){var r={512:function(e){"use strict";e.exports=t},944:function(t){"use strict";t.exports=e}},o={};function n(t){var e=o[t];if(void 0!==e)return e.exports;var a=o[t]={exports:{}};return r[t](a,a.exports,n),a.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var a={};return!function(){"use strict";n.d(a,{default:function(){return h}});var t,e=n(944),r=n.n(e),o=n(512),i=n.n(o),s=(t=function(e,r){return(t=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r])})(e,r)},function(e,r){function o(){this.constructor=e}t(e,r),e.prototype=null===r?Object.create(r):(o.prototype=r.prototype,new o)}),c=i().seriesTypes,u=c.sma,p=c.stochastic,f=function(t){function r(){return null!==t&&t.apply(this,arguments)||this}return s(r,t),r.prototype.getValues=function(e,r){var o=r.periods,n=t.prototype.getValues.call(this,e,r),a={values:[],xData:[],yData:[]};if(n){a.xData=n.xData.slice(o[1]-1);var i=n.yData.slice(o[1]-1),s=u.prototype.getValues.call(this,{xData:a.xData,yData:i},{index:1,period:o[2]});if(s){for(var c=0,p=a.xData.length;c<p;c++)a.yData[c]=[i[c][1],s.yData[c-o[2]+1]||null],a.values[c]=[a.xData[c],i[c][1],s.yData[c-o[2]+1]||null];return a}}},r.defaultOptions=(0,e.merge)(p.defaultOptions,{params:{periods:[14,3,3]}}),r}(p);(0,e.extend)(f.prototype,{nameBase:"Slow Stochastic"}),i().registerSeriesType("slowstochastic",f);var h=r()}(),a=a.default});