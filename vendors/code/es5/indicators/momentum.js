!/**
 * Highstock JS v13.1.1 (2026-09-20)
 * @module highcharts/indicators/momentum
 * @requires highcharts
 * @requires highcharts/modules/stock
 *
 * Indicator series type for Highcharts Stock
 *
 * (c) 2010-2026 Highsoft AS
 * Author: Sebastian Bochan
 *
 * A commercial license may be required depending on use,
 * see www.highcharts.com/license
 */function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(t._Highcharts.SeriesRegistry,t._Highcharts):"function"==typeof define&&define.amd?define("highcharts/indicators/momentum",["highcharts/highcharts"],function(t){return e(t.SeriesRegistry,t)}):"object"==typeof exports?exports["highcharts/indicators/momentum"]=e(t._Highcharts.SeriesRegistry,t._Highcharts):t.Highcharts=e(t.Highcharts.SeriesRegistry,t.Highcharts)}("u"<typeof window?this:window,function(t,e){var r={512:function(e){"use strict";e.exports=t},944:function(t){"use strict";t.exports=e}},n={};function o(t){var e=n[t];if(void 0!==e)return e.exports;var i=n[t]={exports:{}};return r[t](i,i.exports,o),i.exports}o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,{a:e}),e},o.d=function(t,e){for(var r in e)o.o(e,r)&&!o.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)};var i={};return!function(){"use strict";o.d(i,{default:function(){return f}});var t,e=o(944),r=o.n(e),n=o(512),s=o.n(n),u=(t=function(e,r){return(t=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r])})(e,r)},function(e,r){function n(){this.constructor=e}t(e,r),e.prototype=null===r?Object.create(r):(n.prototype=r.prototype,new n)}),a=s().seriesTypes.sma;function c(t,e,r,n,o){var i=e[r-1][o]-e[r-n-1][o];return[t[r-1],i]}var p=function(t){function r(){return null!==t&&t.apply(this,arguments)||this}return u(r,t),r.prototype.getValues=function(t,r){var n,o,i=r.period,s=r.index,u=t.xData,a=t.yData,p=a?a.length:0,f=[],h=[],y=[];if(!(u.length<=i)&&(0,e.isArray)(a[0])){for(n=i+1;n<p;n++)o=c(u,a,n,i,s),f.push(o),h.push(o[0]),y.push(o[1]);return o=c(u,a,n,i,s),f.push(o),h.push(o[0]),y.push(o[1]),{values:f,xData:h,yData:y}}},r.defaultOptions=(0,e.merge)(a.defaultOptions,{params:{index:3}}),r}(a);(0,e.extend)(p.prototype,{nameBase:"Momentum"}),s().registerSeriesType("momentum",p);var f=r()}(),i=i.default});