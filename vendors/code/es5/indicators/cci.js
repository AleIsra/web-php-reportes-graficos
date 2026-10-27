!/**
 * Highstock JS v13.1.1 (2026-09-20)
 * @module highcharts/indicators/cci
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
 */function(t,r){"object"==typeof exports&&"object"==typeof module?module.exports=r(t._Highcharts.SeriesRegistry,t._Highcharts):"function"==typeof define&&define.amd?define("highcharts/indicators/cci",["highcharts/highcharts"],function(t){return r(t.SeriesRegistry,t)}):"object"==typeof exports?exports["highcharts/indicators/cci"]=r(t._Highcharts.SeriesRegistry,t._Highcharts):t.Highcharts=r(t.Highcharts.SeriesRegistry,t.Highcharts)}("u"<typeof window?this:window,function(t,r){var e={512:function(r){"use strict";r.exports=t},944:function(t){"use strict";t.exports=r}},n={};function o(t){var r=n[t];if(void 0!==r)return r.exports;var i=n[t]={exports:{}};return e[t](i,i.exports,o),i.exports}o.n=function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(r,{a:r}),r},o.d=function(t,r){for(var e in r)o.o(r,e)&&!o.o(t,e)&&Object.defineProperty(t,e,{enumerable:!0,get:r[e]})},o.o=function(t,r){return Object.prototype.hasOwnProperty.call(t,r)};var i={};return!function(){"use strict";o.d(i,{default:function(){return f}});var t,r=o(944),e=o.n(r),n=o(512),s=o.n(n),u=(t=function(r,e){return(t=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,r){t.__proto__=r}||function(t,r){for(var e in r)r.hasOwnProperty(e)&&(t[e]=r[e])})(r,e)},function(r,e){function n(){this.constructor=r}t(r,e),r.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),c=s().seriesTypes.sma,a=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return u(e,t),e.prototype.getValues=function(t,e){var n,o,i,s,u,c,a,f=e.period,p=t.xData,h=t.yData,d=h?h.length:0,y=[],g=[],l=[],v=[],_=[],x=1;if(!(p.length<=f)&&(0,r.isArray)(h[0])&&4===h[0].length){for(;x<f;)o=h[x-1],y.push((o[1]+o[2]+o[3])/3),x++;for(a=f;a<=d;a++)u=((o=h[a-1])[1]+o[2]+o[3])/3,i=y.push(u),s=(_=y.slice(i-f)).reduce(function(t,r){return t+r},0)/f,c=function(t,r){var e,n=t.length,o=0;for(e=0;e<n;e++)o+=Math.abs(r-t[e]);return o}(_,s)/f,n=(u-s)/(.015*c),g.push([p[a-1],n]),l.push(p[a-1]),v.push(n);return{values:g,xData:l,yData:v}}},e.defaultOptions=(0,r.merge)(c.defaultOptions,{params:{index:void 0}}),e}(c);s().registerSeriesType("cci",a);var f=e()}(),i=i.default});