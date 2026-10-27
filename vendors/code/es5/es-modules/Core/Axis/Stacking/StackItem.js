/* *
 *
 *  (c) 2010-2026 Highsoft AS
 *  Author: Torstein Hønsi
 *
 *  Integration of this software requires a license.
 *  - For commercial use, see www.highcharts.com/license
 *  - For non-commercial, see www.highcharts.com/license-eula
 *
 *
 * */
'use strict';
import T from '../../Templating.js';
var format = T.format;
import SeriesRegistry from '../../Series/SeriesRegistry.js';
var Series = SeriesRegistry.series;
import { destroyObjectProperties, fireEvent, getAlignFactor, isNumber } from '../../../Shared/Utilities.js';
/* *
 *
 *  Class
 *
 * */
/**
 * The class for stacks. Each stack, on a specific X value and either negative
 * or positive, has its own stack item.
 */
var StackItem = /** @class */ (function () {
    /* *
     *
     *  Constructor
     *
     * */
    /** @internal */
    function StackItem(axis, negativeValue, x, stackOption) {
        this.axis = axis;
        // The stack goes to the left either if the stack has negative value
        // or when axis is reversed. XOR operator.
        this.negativeValue = negativeValue;
        // Save the x value to be able to position the label later
        this.x = x;
        // Initialize total value
        this.total = null;
        this.cumulative = null;
        // This will keep each points' extremes stored by series.index and point
        // index
        this.points = {};
        this.hasValidPoints = false;
        // Save the stack option on the series configuration object,
        // and whether to treat it as percent
        this.stack = stackOption;
        this.leftCliff = 0;
        this.rightCliff = 0;
    }
    /* *
     *
     *  Functions
     *
     * */
    /** @internal */
    StackItem.prototype.destroy = function () {
        destroyObjectProperties(this, this.axis);
    };
    /**
     * Renders the stack total label and adds it to the stack label group.
     * @internal
     */
    StackItem.prototype.render = function (group) {
        var _a, _b;
        var axis = this.axis, chart = axis.chart, options = axis.options.stackLabels || {}, formatOption = options.format, 
        // Format the text in the label.
        text = (formatOption ?
            format(formatOption, this, chart) :
            (_a = options.formatter) === null || _a === void 0 ? void 0 : _a.call(this, this)) || '', verb = this.label ? 'animate' : 'attr';
        // Create new label
        this.label || (this.label = chart.renderer.label(text, 0, void 0, options.shape, void 0, void 0, options.useHTML, false, 'stack-labels'));
        var label = this.label, animatableAttribs = {
            r: options.borderRadius || 0,
            // Set default padding to 5 as it is in dataLabels #12308
            padding: ((_b = options.padding) !== null && _b !== void 0 ? _b : 5)
        };
        if (!chart.styledMode) {
            animatableAttribs.fill = options.backgroundColor;
            animatableAttribs.stroke = options.borderColor;
            animatableAttribs['stroke-width'] = options.borderWidth;
            label.css(options.style || {});
        }
        label
            .attr({
            text: text,
            visibility: 'hidden' // Hidden until setOffset is called
        })[verb](animatableAttribs);
        if (!label.added) {
            label.add(group); // Add to the labels-group
        }
        // Rank it higher than data labels (#8742)
        label.labelrank = chart.plotSizeY;
        fireEvent(this, 'afterRender');
    };
    /**
     * Sets the offset that the stack has from the x value and repositions the
     * label.
     * @internal
     */
    StackItem.prototype.setOffset = function (xOffset, width, boxBottom, boxTop, defaultX, xAxis) {
        var _a, _b;
        var _c = this, axis = _c.axis, label = _c.label, chart = axis.chart, options = axis.options.stackLabels || {}, inverted = chart.inverted, isNegative = this.negativeValue !== !!axis.reversed, stackBox = this.getStackBox({
            boxBottom: boxBottom,
            boxTop: boxTop,
            defaultX: defaultX,
            isNegative: isNegative,
            width: width,
            xAxis: xAxis,
            xOffset: xOffset
        }), _d = options.align, align = _d === void 0 ? (inverted ? (isNegative ? 'left' : 'right') : 'center') : _d, _e = options.verticalAlign, verticalAlign = _e === void 0 ? (inverted ? 'middle' : isNegative ? 'bottom' : 'top') : _e, _f = options.textAlign, textAlign = _f === void 0 ? (inverted ? (!isNegative ? 'left' : 'right') : 'center') : _f, _g = options.x, x = _g === void 0 ? 0 : _g, _h = options.y, y = _h === void 0 ? 0 : _h, alignOptions = {
            align: align,
            verticalAlign: verticalAlign,
            x: x,
            y: y
        };
        if (label && stackBox) {
            var labelBox = label.getBBox(void 0, 0), padding = label.padding;
            var isJustify = ((_a = options.overflow) !== null && _a !== void 0 ? _a : 'justify') === 'justify', visible = void 0;
            // Calculate the adjusted Stack position, to take into consideration
            // the size if the labelBox and vertical alignment as well as the
            // text alignment. It needs to be done to work with default
            // SVGLabel.align/justify methods.
            var _j = this.adjustStackPosition({
                labelBox: labelBox,
                verticalAlign: verticalAlign,
                textAlign: textAlign
            }), adjustX = _j.x, adjustY = _j.y;
            stackBox.x -= adjustX;
            stackBox.y -= adjustY;
            // Align the label to the adjusted box.
            label.align(alignOptions, false, stackBox);
            // Check if the label is inside the plotArea #12294
            visible = chart.isInsidePlot(label.alignAttr.x + x + adjustX, label.alignAttr.y + y + adjustY);
            if (!visible) {
                isJustify = false;
            }
            if (isJustify) {
                // Justify stackLabel into the alignBox
                Series.prototype.justifyDataLabel.call(axis, label, alignOptions, label.alignAttr, labelBox, stackBox);
            }
            // Add correct rotation with its rotation origin (#15129)
            label.attr({
                rotation: options.rotation,
                rotationOriginX: labelBox.width *
                    getAlignFactor(options.textAlign || 'center'),
                rotationOriginY: labelBox.height / 2
            });
            // Check if the dataLabel should be visible.
            if (((_b = (!isJustify && options.crop)) !== null && _b !== void 0 ? _b : true)) {
                visible =
                    isNumber(label.x) &&
                        isNumber(label.y) &&
                        chart.isInsidePlot(label.x - padding + (label.width || 0), label.y) &&
                        chart.isInsidePlot(label.x + padding, label.y);
            }
            label[visible ? 'show' : 'hide']();
        }
        fireEvent(this, 'afterSetOffset', { xOffset: xOffset, width: width });
    };
    /**
     * Adjust the stack BBox position, to take into consideration the alignment
     * of the dataLabel. This is necessary to make the stackDataLabel work with
     * core methods like `SVGLabel.adjust` and `Series.justifyDataLabel`.
     * @internal
     */
    StackItem.prototype.adjustStackPosition = function (_a) {
        var labelBox = _a.labelBox, verticalAlign = _a.verticalAlign, textAlign = _a.textAlign;
        return {
            x: labelBox.width / 2 +
                (labelBox.width / 2) * (2 * getAlignFactor(textAlign) - 1),
            y: (labelBox.height / 2) * 2 * (1 - getAlignFactor(verticalAlign))
        };
    };
    /**
     * Get the bbox of the stack.
     * @internal
     * @function Highcharts.StackItem#getStackBox
     * @return {BBoxObject}
     * The x, y, height, width of the stack.
     */
    StackItem.prototype.getStackBox = function (stackBoxProps) {
        var _a;
        var axis = this.axis, chart = axis.chart, boxBottom = stackBoxProps.boxBottom, boxTop = stackBoxProps.boxTop, defaultX = stackBoxProps.defaultX, isNegative = stackBoxProps.isNegative, width = stackBoxProps.width, xOffset = stackBoxProps.xOffset, totalStackValue = axis.stacking.usePercentage ?
            100 :
            ((_a = boxTop !== null && boxTop !== void 0 ? boxTop : this.total) !== null && _a !== void 0 ? _a : 0), y = axis.toPixels(totalStackValue), xAxis = stackBoxProps.xAxis || chart.xAxis[0], x = (defaultX !== null && defaultX !== void 0 ? defaultX : xAxis.translate(this.x)) + xOffset, yZero = axis.toPixels(boxBottom ||
            (isNumber(axis.min) &&
                axis.logarithmic &&
                axis.logarithmic.lin2log(axis.min)) ||
            0), height = Math.abs(y - yZero), inverted = chart.inverted;
        return inverted ?
            {
                x: (isNegative ? y : y - height) - chart.plotLeft,
                y: xAxis.height - x - width + xAxis.top - chart.plotTop,
                width: height,
                height: width
            } : {
            x: x + xAxis.transB - chart.plotLeft,
            y: (isNegative ? y - height : y) - chart.plotTop,
            width: width,
            height: height
        };
    };
    return StackItem;
}());
/* *
 *
 *  Default Export
 *
 * */
export default StackItem;
/* *
 *
 *  API Declarations
 *
 * */
/**
 * Stack of data points
 *
 * @product highcharts
 *
 * @interface Highcharts.StackItemObject
 */ /**
* Alignment settings
* @name Highcharts.StackItemObject#alignOptions
* @type {Highcharts.AlignObject}
*/ /**
* Related axis
* @name Highcharts.StackItemObject#axis
* @type {Highcharts.Axis}
*/ /**
* Cumulative value of the stacked data points
* @name Highcharts.StackItemObject#cumulative
* @type {number}
*/ /**
* Related SVG element
* @name Highcharts.StackItemObject#label
* @type {Highcharts.SVGElement}
*/ /**
* Related stack options
* @name Highcharts.StackItemObject#options
* @type {Highcharts.YAxisStackLabelsOptions}
*/ /**
* Total value of the stacked data points
* @name Highcharts.StackItemObject#total
* @type {number}
*/ /**
* Shared x value of the stack
* @name Highcharts.StackItemObject#x
* @type {number}
*/
''; // Keeps doclets above in JS file
