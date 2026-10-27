/* *
 *
 *  Plugin for resizing axes / panes in a chart.
 *
 *  (c) 2010-2026 Highsoft AS
 *
 *  Author: Kacper Madej
 *
 *  Integration of this software requires a license.
 *  - For commercial use, see www.highcharts.com/license
 *  - For non-commercial, see www.highcharts.com/license-eula
 *
 *
 * */
'use strict';
import AxisResizer from './AxisResizer.js';
import AxisResizerDefaults from './AxisResizerDefaults.js';
import D from '../../Core/Defaults.js';
var defaultOptions = D.defaultOptions;
import H from '../../Core/Globals.js';
var composed = H.composed;
import { addEvent, merge, pushUnique, wrap } from '../../Shared/Utilities.js';
/* *
 *
 *  Functions
 *
 * */
/** @internal */
function compose(AxisClass, PointerClass) {
    if (pushUnique(composed, 'Axis.DragPanes')) {
        merge(true, defaultOptions.yAxis, AxisResizerDefaults);
        addEvent(AxisClass, 'afterRender', onAxisAfterRender);
        addEvent(AxisClass, 'destroy', onAxisDestroy);
        wrap(PointerClass.prototype, 'runPointActions', wrapPointerRunPointActions);
        wrap(PointerClass.prototype, 'drag', wrapPointerDrag);
    }
}
/**
 * Add new AxisResizer, update or remove it
 * @internal
 */
function onAxisAfterRender() {
    var axis = this, resizer = axis.resizer, resizerOptions = axis.options.resize;
    if (resizerOptions) {
        var enabled = resizerOptions.enabled !== false;
        if (resizer) {
            // Resizer present and enabled
            if (enabled) {
                // Update options
                resizer.init(axis, true);
                // Resizer present, but disabled
            }
            else {
                // Destroy the resizer
                resizer.destroy();
            }
        }
        else {
            // Resizer not present and enabled
            if (enabled) {
                // Add new resizer
                axis.resizer = new AxisResizer(axis);
            }
            // Resizer not present and disabled, so do nothing
        }
    }
}
/**
 * Clear resizer on axis remove.
 * @internal
 */
function onAxisDestroy() {
    var _a;
    (_a = this.resizer) === null || _a === void 0 ? void 0 : _a.destroy();
}
/**
 * Prevent default drag action detection while dragging a control line of
 * AxisResizer. (#7563)
 * @internal
 */
function wrapPointerDrag(proceed) {
    var pointer = this;
    if (!pointer.chart.activeResizer) {
        proceed.apply(pointer, [].slice.call(arguments, 1));
    }
}
/**
 * Prevent any hover effects while dragging a control line of AxisResizer.
 * @internal
 */
function wrapPointerRunPointActions(proceed) {
    var pointer = this;
    if (!pointer.chart.activeResizer) {
        proceed.apply(pointer, [].slice.call(arguments, 1));
    }
}
/* *
 *
 *  Default Export
 *
 * */
/** @internal */
var DragPanes = {
    compose: compose
};
/** @internal */
export default DragPanes;
