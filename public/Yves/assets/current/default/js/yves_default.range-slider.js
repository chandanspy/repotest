(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["range-slider"],{

/***/ "./node_modules/nouislider/distribute/nouislider.js":
/*!**********************************************************!*\
  !*** ./node_modules/nouislider/distribute/nouislider.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*! nouislider - 11.1.0 - 2018-04-02 11:18:13 */

(function (factory) {

    if ( true ) {

        // AMD. Register as an anonymous module.
        !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));

    } else {}

}(function( ){

	'use strict';

	var VERSION = '11.1.0';


	function isValidFormatter ( entry ) {
		return typeof entry === 'object' && typeof entry.to === 'function' && typeof entry.from === 'function';
	}

	function removeElement ( el ) {
		el.parentElement.removeChild(el);
	}

	function isSet ( value ) {
		return value !== null && value !== undefined;
	}

	// Bindable version
	function preventDefault ( e ) {
		e.preventDefault();
	}

	// Removes duplicates from an array.
	function unique ( array ) {
		return array.filter(function(a){
			return !this[a] ? this[a] = true : false;
		}, {});
	}

	// Round a value to the closest 'to'.
	function closest ( value, to ) {
		return Math.round(value / to) * to;
	}

	// Current position of an element relative to the document.
	function offset ( elem, orientation ) {

		var rect = elem.getBoundingClientRect();
		var doc = elem.ownerDocument;
		var docElem = doc.documentElement;
		var pageOffset = getPageOffset(doc);

		// getBoundingClientRect contains left scroll in Chrome on Android.
		// I haven't found a feature detection that proves this. Worst case
		// scenario on mis-match: the 'tap' feature on horizontal sliders breaks.
		if ( /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) ) {
			pageOffset.x = 0;
		}

		return orientation ? (rect.top + pageOffset.y - docElem.clientTop) : (rect.left + pageOffset.x - docElem.clientLeft);
	}

	// Checks whether a value is numerical.
	function isNumeric ( a ) {
		return typeof a === 'number' && !isNaN( a ) && isFinite( a );
	}

	// Sets a class and removes it after [duration] ms.
	function addClassFor ( element, className, duration ) {
		if (duration > 0) {
		addClass(element, className);
			setTimeout(function(){
				removeClass(element, className);
			}, duration);
		}
	}

	// Limits a value to 0 - 100
	function limit ( a ) {
		return Math.max(Math.min(a, 100), 0);
	}

	// Wraps a variable as an array, if it isn't one yet.
	// Note that an input array is returned by reference!
	function asArray ( a ) {
		return Array.isArray(a) ? a : [a];
	}

	// Counts decimals
	function countDecimals ( numStr ) {
		numStr = String(numStr);
		var pieces = numStr.split(".");
		return pieces.length > 1 ? pieces[1].length : 0;
	}

	// http://youmightnotneedjquery.com/#add_class
	function addClass ( el, className ) {
		if ( el.classList ) {
			el.classList.add(className);
		} else {
			el.className += ' ' + className;
		}
	}

	// http://youmightnotneedjquery.com/#remove_class
	function removeClass ( el, className ) {
		if ( el.classList ) {
			el.classList.remove(className);
		} else {
			el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
		}
	}

	// https://plainjs.com/javascript/attributes/adding-removing-and-testing-for-classes-9/
	function hasClass ( el, className ) {
		return el.classList ? el.classList.contains(className) : new RegExp('\\b' + className + '\\b').test(el.className);
	}

	// https://developer.mozilla.org/en-US/docs/Web/API/Window/scrollY#Notes
	function getPageOffset ( doc ) {

		var supportPageOffset = window.pageXOffset !== undefined;
		var isCSS1Compat = ((doc.compatMode || "") === "CSS1Compat");
		var x = supportPageOffset ? window.pageXOffset : isCSS1Compat ? doc.documentElement.scrollLeft : doc.body.scrollLeft;
		var y = supportPageOffset ? window.pageYOffset : isCSS1Compat ? doc.documentElement.scrollTop : doc.body.scrollTop;

		return {
			x: x,
			y: y
		};
	}

	// we provide a function to compute constants instead
	// of accessing window.* as soon as the module needs it
	// so that we do not compute anything if not needed
	function getActions ( ) {

		// Determine the events to bind. IE11 implements pointerEvents without
		// a prefix, which breaks compatibility with the IE10 implementation.
		return window.navigator.pointerEnabled ? {
			start: 'pointerdown',
			move: 'pointermove',
			end: 'pointerup'
		} : window.navigator.msPointerEnabled ? {
			start: 'MSPointerDown',
			move: 'MSPointerMove',
			end: 'MSPointerUp'
		} : {
			start: 'mousedown touchstart',
			move: 'mousemove touchmove',
			end: 'mouseup touchend'
		};
	}

	// https://github.com/WICG/EventListenerOptions/blob/gh-pages/explainer.md
	// Issue #785
	function getSupportsPassive ( ) {

		var supportsPassive = false;

		try {

			var opts = Object.defineProperty({}, 'passive', {
				get: function() {
					supportsPassive = true;
				}
			});

			window.addEventListener('test', null, opts);

		} catch (e) {}

		return supportsPassive;
	}

	function getSupportsTouchActionNone ( ) {
		return window.CSS && CSS.supports && CSS.supports('touch-action', 'none');
	}


// Value calculation

	// Determine the size of a sub-range in relation to a full range.
	function subRangeRatio ( pa, pb ) {
		return (100 / (pb - pa));
	}

	// (percentage) How many percent is this value of this range?
	function fromPercentage ( range, value ) {
		return (value * 100) / ( range[1] - range[0] );
	}

	// (percentage) Where is this value on this range?
	function toPercentage ( range, value ) {
		return fromPercentage( range, range[0] < 0 ?
			value + Math.abs(range[0]) :
				value - range[0] );
	}

	// (value) How much is this percentage on this range?
	function isPercentage ( range, value ) {
		return ((value * ( range[1] - range[0] )) / 100) + range[0];
	}


// Range conversion

	function getJ ( value, arr ) {

		var j = 1;

		while ( value >= arr[j] ){
			j += 1;
		}

		return j;
	}

	// (percentage) Input a value, find where, on a scale of 0-100, it applies.
	function toStepping ( xVal, xPct, value ) {

		if ( value >= xVal.slice(-1)[0] ){
			return 100;
		}

		var j = getJ( value, xVal );
		var va = xVal[j-1];
		var vb = xVal[j];
		var pa = xPct[j-1];
		var pb = xPct[j];

		return pa + (toPercentage([va, vb], value) / subRangeRatio (pa, pb));
	}

	// (value) Input a percentage, find where it is on the specified range.
	function fromStepping ( xVal, xPct, value ) {

		// There is no range group that fits 100
		if ( value >= 100 ){
			return xVal.slice(-1)[0];
		}

		var j = getJ( value, xPct );
		var va = xVal[j-1];
		var vb = xVal[j];
		var pa = xPct[j-1];
		var pb = xPct[j];

		return isPercentage([va, vb], (value - pa) * subRangeRatio (pa, pb));
	}

	// (percentage) Get the step that applies at a certain value.
	function getStep ( xPct, xSteps, snap, value ) {

		if ( value === 100 ) {
			return value;
		}

		var j = getJ( value, xPct );
		var a = xPct[j-1];
		var b = xPct[j];

		// If 'snap' is set, steps are used as fixed points on the slider.
		if ( snap ) {

			// Find the closest position, a or b.
			if ((value - a) > ((b-a)/2)){
				return b;
			}

			return a;
		}

		if ( !xSteps[j-1] ){
			return value;
		}

		return xPct[j-1] + closest(
			value - xPct[j-1],
			xSteps[j-1]
		);
	}


// Entry parsing

	function handleEntryPoint ( index, value, that ) {

		var percentage;

		// Wrap numerical input in an array.
		if ( typeof value === "number" ) {
			value = [value];
		}

		// Reject any invalid input, by testing whether value is an array.
		if ( !Array.isArray(value) ){
			throw new Error("noUiSlider (" + VERSION + "): 'range' contains invalid value.");
		}

		// Covert min/max syntax to 0 and 100.
		if ( index === 'min' ) {
			percentage = 0;
		} else if ( index === 'max' ) {
			percentage = 100;
		} else {
			percentage = parseFloat( index );
		}

		// Check for correct input.
		if ( !isNumeric( percentage ) || !isNumeric( value[0] ) ) {
			throw new Error("noUiSlider (" + VERSION + "): 'range' value isn't numeric.");
		}

		// Store values.
		that.xPct.push( percentage );
		that.xVal.push( value[0] );

		// NaN will evaluate to false too, but to keep
		// logging clear, set step explicitly. Make sure
		// not to override the 'step' setting with false.
		if ( !percentage ) {
			if ( !isNaN( value[1] ) ) {
				that.xSteps[0] = value[1];
			}
		} else {
			that.xSteps.push( isNaN(value[1]) ? false : value[1] );
		}

		that.xHighestCompleteStep.push(0);
	}

	function handleStepPoint ( i, n, that ) {

		// Ignore 'false' stepping.
		if ( !n ) {
			return true;
		}

		// Factor to range ratio
		that.xSteps[i] = fromPercentage([that.xVal[i], that.xVal[i+1]], n) / subRangeRatio(that.xPct[i], that.xPct[i+1]);

		var totalSteps = (that.xVal[i+1] - that.xVal[i]) / that.xNumSteps[i];
		var highestStep = Math.ceil(Number(totalSteps.toFixed(3)) - 1);
		var step = that.xVal[i] + (that.xNumSteps[i] * highestStep);

		that.xHighestCompleteStep[i] = step;
	}


// Interface

	function Spectrum ( entry, snap, singleStep ) {

		this.xPct = [];
		this.xVal = [];
		this.xSteps = [ singleStep || false ];
		this.xNumSteps = [ false ];
		this.xHighestCompleteStep = [];

		this.snap = snap;

		var index;
		var ordered = []; // [0, 'min'], [1, '50%'], [2, 'max']

		// Map the object keys to an array.
		for ( index in entry ) {
			if ( entry.hasOwnProperty(index) ) {
				ordered.push([entry[index], index]);
			}
		}

		// Sort all entries by value (numeric sort).
		if ( ordered.length && typeof ordered[0][0] === "object" ) {
			ordered.sort(function(a, b) { return a[0][0] - b[0][0]; });
		} else {
			ordered.sort(function(a, b) { return a[0] - b[0]; });
		}


		// Convert all entries to subranges.
		for ( index = 0; index < ordered.length; index++ ) {
			handleEntryPoint(ordered[index][1], ordered[index][0], this);
		}

		// Store the actual step values.
		// xSteps is sorted in the same order as xPct and xVal.
		this.xNumSteps = this.xSteps.slice(0);

		// Convert all numeric steps to the percentage of the subrange they represent.
		for ( index = 0; index < this.xNumSteps.length; index++ ) {
			handleStepPoint(index, this.xNumSteps[index], this);
		}
	}

	Spectrum.prototype.getMargin = function ( value ) {

		var step = this.xNumSteps[0];

		if ( step && ((value / step) % 1) !== 0 ) {
			throw new Error("noUiSlider (" + VERSION + "): 'limit', 'margin' and 'padding' must be divisible by step.");
		}

		return this.xPct.length === 2 ? fromPercentage(this.xVal, value) : false;
	};

	Spectrum.prototype.toStepping = function ( value ) {

		value = toStepping( this.xVal, this.xPct, value );

		return value;
	};

	Spectrum.prototype.fromStepping = function ( value ) {

		return fromStepping( this.xVal, this.xPct, value );
	};

	Spectrum.prototype.getStep = function ( value ) {

		value = getStep(this.xPct, this.xSteps, this.snap, value );

		return value;
	};

	Spectrum.prototype.getNearbySteps = function ( value ) {

		var j = getJ(value, this.xPct);

		return {
			stepBefore: { startValue: this.xVal[j-2], step: this.xNumSteps[j-2], highestStep: this.xHighestCompleteStep[j-2] },
			thisStep: { startValue: this.xVal[j-1], step: this.xNumSteps[j-1], highestStep: this.xHighestCompleteStep[j-1] },
			stepAfter: { startValue: this.xVal[j-0], step: this.xNumSteps[j-0], highestStep: this.xHighestCompleteStep[j-0] }
		};
	};

	Spectrum.prototype.countStepDecimals = function () {
		var stepDecimals = this.xNumSteps.map(countDecimals);
		return Math.max.apply(null, stepDecimals);
	};

	// Outside testing
	Spectrum.prototype.convert = function ( value ) {
		return this.getStep(this.toStepping(value));
	};

/*	Every input option is tested and parsed. This'll prevent
	endless validation in internal methods. These tests are
	structured with an item for every option available. An
	option can be marked as required by setting the 'r' flag.
	The testing function is provided with three arguments:
		- The provided value for the option;
		- A reference to the options object;
		- The name for the option;

	The testing function returns false when an error is detected,
	or true when everything is OK. It can also modify the option
	object, to make sure all values can be correctly looped elsewhere. */

	var defaultFormatter = { 'to': function( value ){
		return value !== undefined && value.toFixed(2);
	}, 'from': Number };

	function validateFormat ( entry ) {

		// Any object with a to and from method is supported.
		if ( isValidFormatter(entry) ) {
			return true;
		}

		throw new Error("noUiSlider (" + VERSION + "): 'format' requires 'to' and 'from' methods.");
	}

	function testStep ( parsed, entry ) {

		if ( !isNumeric( entry ) ) {
			throw new Error("noUiSlider (" + VERSION + "): 'step' is not numeric.");
		}

		// The step option can still be used to set stepping
		// for linear sliders. Overwritten if set in 'range'.
		parsed.singleStep = entry;
	}

	function testRange ( parsed, entry ) {

		// Filter incorrect input.
		if ( typeof entry !== 'object' || Array.isArray(entry) ) {
			throw new Error("noUiSlider (" + VERSION + "): 'range' is not an object.");
		}

		// Catch missing start or end.
		if ( entry.min === undefined || entry.max === undefined ) {
			throw new Error("noUiSlider (" + VERSION + "): Missing 'min' or 'max' in 'range'.");
		}

		// Catch equal start or end.
		if ( entry.min === entry.max ) {
			throw new Error("noUiSlider (" + VERSION + "): 'range' 'min' and 'max' cannot be equal.");
		}

		parsed.spectrum = new Spectrum(entry, parsed.snap, parsed.singleStep);
	}

	function testStart ( parsed, entry ) {

		entry = asArray(entry);

		// Validate input. Values aren't tested, as the public .val method
		// will always provide a valid location.
		if ( !Array.isArray( entry ) || !entry.length ) {
			throw new Error("noUiSlider (" + VERSION + "): 'start' option is incorrect.");
		}

		// Store the number of handles.
		parsed.handles = entry.length;

		// When the slider is initialized, the .val method will
		// be called with the start options.
		parsed.start = entry;
	}

	function testSnap ( parsed, entry ) {

		// Enforce 100% stepping within subranges.
		parsed.snap = entry;

		if ( typeof entry !== 'boolean' ){
			throw new Error("noUiSlider (" + VERSION + "): 'snap' option must be a boolean.");
		}
	}

	function testAnimate ( parsed, entry ) {

		// Enforce 100% stepping within subranges.
		parsed.animate = entry;

		if ( typeof entry !== 'boolean' ){
			throw new Error("noUiSlider (" + VERSION + "): 'animate' option must be a boolean.");
		}
	}

	function testAnimationDuration ( parsed, entry ) {

		parsed.animationDuration = entry;

		if ( typeof entry !== 'number' ){
			throw new Error("noUiSlider (" + VERSION + "): 'animationDuration' option must be a number.");
		}
	}

	function testConnect ( parsed, entry ) {

		var connect = [false];
		var i;

		// Map legacy options
		if ( entry === 'lower' ) {
			entry = [true, false];
		}

		else if ( entry === 'upper' ) {
			entry = [false, true];
		}

		// Handle boolean options
		if ( entry === true || entry === false ) {

			for ( i = 1; i < parsed.handles; i++ ) {
				connect.push(entry);
			}

			connect.push(false);
		}

		// Reject invalid input
		else if ( !Array.isArray( entry ) || !entry.length || entry.length !== parsed.handles + 1 ) {
			throw new Error("noUiSlider (" + VERSION + "): 'connect' option doesn't match handle count.");
		}

		else {
			connect = entry;
		}

		parsed.connect = connect;
	}

	function testOrientation ( parsed, entry ) {

		// Set orientation to an a numerical value for easy
		// array selection.
		switch ( entry ){
			case 'horizontal':
				parsed.ort = 0;
				break;
			case 'vertical':
				parsed.ort = 1;
				break;
			default:
				throw new Error("noUiSlider (" + VERSION + "): 'orientation' option is invalid.");
		}
	}

	function testMargin ( parsed, entry ) {

		if ( !isNumeric(entry) ){
			throw new Error("noUiSlider (" + VERSION + "): 'margin' option must be numeric.");
		}

		// Issue #582
		if ( entry === 0 ) {
			return;
		}

		parsed.margin = parsed.spectrum.getMargin(entry);

		if ( !parsed.margin ) {
			throw new Error("noUiSlider (" + VERSION + "): 'margin' option is only supported on linear sliders.");
		}
	}

	function testLimit ( parsed, entry ) {

		if ( !isNumeric(entry) ){
			throw new Error("noUiSlider (" + VERSION + "): 'limit' option must be numeric.");
		}

		parsed.limit = parsed.spectrum.getMargin(entry);

		if ( !parsed.limit || parsed.handles < 2 ) {
			throw new Error("noUiSlider (" + VERSION + "): 'limit' option is only supported on linear sliders with 2 or more handles.");
		}
	}

	function testPadding ( parsed, entry ) {

		if ( !isNumeric(entry) && !Array.isArray(entry) ){
			throw new Error("noUiSlider (" + VERSION + "): 'padding' option must be numeric or array of exactly 2 numbers.");
		}

		if ( Array.isArray(entry) && !(entry.length === 2 || isNumeric(entry[0]) || isNumeric(entry[1])) ) {
			throw new Error("noUiSlider (" + VERSION + "): 'padding' option must be numeric or array of exactly 2 numbers.");
		}

		if ( entry === 0 ) {
			return;
		}

		if ( !Array.isArray(entry) ) {
			entry = [entry, entry];
		}

		// 'getMargin' returns false for invalid values.
		parsed.padding = [parsed.spectrum.getMargin(entry[0]), parsed.spectrum.getMargin(entry[1])];

		if ( parsed.padding[0] === false || parsed.padding[1] === false ) {
			throw new Error("noUiSlider (" + VERSION + "): 'padding' option is only supported on linear sliders.");
		}

		if ( parsed.padding[0] < 0 || parsed.padding[1] < 0 ) {
			throw new Error("noUiSlider (" + VERSION + "): 'padding' option must be a positive number(s).");
		}

		if ( parsed.padding[0] + parsed.padding[1] >= 100 ) {
			throw new Error("noUiSlider (" + VERSION + "): 'padding' option must not exceed 100% of the range.");
		}
	}

	function testDirection ( parsed, entry ) {

		// Set direction as a numerical value for easy parsing.
		// Invert connection for RTL sliders, so that the proper
		// handles get the connect/background classes.
		switch ( entry ) {
			case 'ltr':
				parsed.dir = 0;
				break;
			case 'rtl':
				parsed.dir = 1;
				break;
			default:
				throw new Error("noUiSlider (" + VERSION + "): 'direction' option was not recognized.");
		}
	}

	function testBehaviour ( parsed, entry ) {

		// Make sure the input is a string.
		if ( typeof entry !== 'string' ) {
			throw new Error("noUiSlider (" + VERSION + "): 'behaviour' must be a string containing options.");
		}

		// Check if the string contains any keywords.
		// None are required.
		var tap = entry.indexOf('tap') >= 0;
		var drag = entry.indexOf('drag') >= 0;
		var fixed = entry.indexOf('fixed') >= 0;
		var snap = entry.indexOf('snap') >= 0;
		var hover = entry.indexOf('hover') >= 0;

		if ( fixed ) {

			if ( parsed.handles !== 2 ) {
				throw new Error("noUiSlider (" + VERSION + "): 'fixed' behaviour must be used with 2 handles");
			}

			// Use margin to enforce fixed state
			testMargin(parsed, parsed.start[1] - parsed.start[0]);
		}

		parsed.events = {
			tap: tap || snap,
			drag: drag,
			fixed: fixed,
			snap: snap,
			hover: hover
		};
	}

	function testTooltips ( parsed, entry ) {

		if ( entry === false ) {
			return;
		}

		else if ( entry === true ) {

			parsed.tooltips = [];

			for ( var i = 0; i < parsed.handles; i++ ) {
				parsed.tooltips.push(true);
			}
		}

		else {

			parsed.tooltips = asArray(entry);

			if ( parsed.tooltips.length !== parsed.handles ) {
				throw new Error("noUiSlider (" + VERSION + "): must pass a formatter for all handles.");
			}

			parsed.tooltips.forEach(function(formatter){
				if ( typeof formatter !== 'boolean' && (typeof formatter !== 'object' || typeof formatter.to !== 'function') ) {
					throw new Error("noUiSlider (" + VERSION + "): 'tooltips' must be passed a formatter or 'false'.");
				}
			});
		}
	}

	function testAriaFormat ( parsed, entry ) {
		parsed.ariaFormat = entry;
		validateFormat(entry);
	}

	function testFormat ( parsed, entry ) {
		parsed.format = entry;
		validateFormat(entry);
	}

	function testCssPrefix ( parsed, entry ) {

		if ( typeof entry !== 'string' && entry !== false ) {
			throw new Error("noUiSlider (" + VERSION + "): 'cssPrefix' must be a string or `false`.");
		}

		parsed.cssPrefix = entry;
	}

	function testCssClasses ( parsed, entry ) {

		if ( typeof entry !== 'object' ) {
			throw new Error("noUiSlider (" + VERSION + "): 'cssClasses' must be an object.");
		}

		if ( typeof parsed.cssPrefix === 'string' ) {
			parsed.cssClasses = {};

			for ( var key in entry ) {
				if ( !entry.hasOwnProperty(key) ) { continue; }

				parsed.cssClasses[key] = parsed.cssPrefix + entry[key];
			}
		} else {
			parsed.cssClasses = entry;
		}
	}

	// Test all developer settings and parse to assumption-safe values.
	function testOptions ( options ) {

		// To prove a fix for #537, freeze options here.
		// If the object is modified, an error will be thrown.
		// Object.freeze(options);

		var parsed = {
			margin: 0,
			limit: 0,
			padding: 0,
			animate: true,
			animationDuration: 300,
			ariaFormat: defaultFormatter,
			format: defaultFormatter
		};

		// Tests are executed in the order they are presented here.
		var tests = {
			'step': { r: false, t: testStep },
			'start': { r: true, t: testStart },
			'connect': { r: true, t: testConnect },
			'direction': { r: true, t: testDirection },
			'snap': { r: false, t: testSnap },
			'animate': { r: false, t: testAnimate },
			'animationDuration': { r: false, t: testAnimationDuration },
			'range': { r: true, t: testRange },
			'orientation': { r: false, t: testOrientation },
			'margin': { r: false, t: testMargin },
			'limit': { r: false, t: testLimit },
			'padding': { r: false, t: testPadding },
			'behaviour': { r: true, t: testBehaviour },
			'ariaFormat': { r: false, t: testAriaFormat },
			'format': { r: false, t: testFormat },
			'tooltips': { r: false, t: testTooltips },
			'cssPrefix': { r: true, t: testCssPrefix },
			'cssClasses': { r: true, t: testCssClasses }
		};

		var defaults = {
			'connect': false,
			'direction': 'ltr',
			'behaviour': 'tap',
			'orientation': 'horizontal',
			'cssPrefix' : 'noUi-',
			'cssClasses': {
				target: 'target',
				base: 'base',
				origin: 'origin',
				handle: 'handle',
				handleLower: 'handle-lower',
				handleUpper: 'handle-upper',
				horizontal: 'horizontal',
				vertical: 'vertical',
				background: 'background',
				connect: 'connect',
				connects: 'connects',
				ltr: 'ltr',
				rtl: 'rtl',
				draggable: 'draggable',
				drag: 'state-drag',
				tap: 'state-tap',
				active: 'active',
				tooltip: 'tooltip',
				pips: 'pips',
				pipsHorizontal: 'pips-horizontal',
				pipsVertical: 'pips-vertical',
				marker: 'marker',
				markerHorizontal: 'marker-horizontal',
				markerVertical: 'marker-vertical',
				markerNormal: 'marker-normal',
				markerLarge: 'marker-large',
				markerSub: 'marker-sub',
				value: 'value',
				valueHorizontal: 'value-horizontal',
				valueVertical: 'value-vertical',
				valueNormal: 'value-normal',
				valueLarge: 'value-large',
				valueSub: 'value-sub'
			}
		};

		// AriaFormat defaults to regular format, if any.
		if ( options.format && !options.ariaFormat ) {
			options.ariaFormat = options.format;
		}

		// Run all options through a testing mechanism to ensure correct
		// input. It should be noted that options might get modified to
		// be handled properly. E.g. wrapping integers in arrays.
		Object.keys(tests).forEach(function( name ){

			// If the option isn't set, but it is required, throw an error.
			if ( !isSet(options[name]) && defaults[name] === undefined ) {

				if ( tests[name].r ) {
					throw new Error("noUiSlider (" + VERSION + "): '" + name + "' is required.");
				}

				return true;
			}

			tests[name].t( parsed, !isSet(options[name]) ? defaults[name] : options[name] );
		});

		// Forward pips options
		parsed.pips = options.pips;

		// All recent browsers accept unprefixed transform.
		// We need -ms- for IE9 and -webkit- for older Android;
		// Assume use of -webkit- if unprefixed and -ms- are not supported.
		// https://caniuse.com/#feat=transforms2d
		var d = document.createElement("div");
		var msPrefix = d.style.msTransform !== undefined;
		var noPrefix = d.style.transform !== undefined;

		parsed.transformRule = noPrefix ? 'transform' : (msPrefix ? 'msTransform' : 'webkitTransform');

		// Pips don't move, so we can place them using left/top.
		var styles = [['left', 'top'], ['right', 'bottom']];

		parsed.style = styles[parsed.dir][parsed.ort];

		return parsed;
	}


function scope ( target, options, originalOptions ){

	var actions = getActions();
	var supportsTouchActionNone = getSupportsTouchActionNone();
	var supportsPassive = supportsTouchActionNone && getSupportsPassive();

	// All variables local to 'scope' are prefixed with 'scope_'
	var scope_Target = target;
	var scope_Locations = [];
	var scope_Base;
	var scope_Handles;
	var scope_HandleNumbers = [];
	var scope_ActiveHandlesCount = 0;
	var scope_Connects;
	var scope_Spectrum = options.spectrum;
	var scope_Values = [];
	var scope_Events = {};
	var scope_Self;
	var scope_Pips;
	var scope_Document = target.ownerDocument;
	var scope_DocumentElement = scope_Document.documentElement;
	var scope_Body = scope_Document.body;


	// For horizontal sliders in standard ltr documents,
	// make .noUi-origin overflow to the left so the document doesn't scroll.
	var scope_DirOffset = (scope_Document.dir === 'rtl') || (options.ort === 1) ? 0 : 100;

/*! In this file: Construction of DOM elements; */

	// Creates a node, adds it to target, returns the new node.
	function addNodeTo ( addTarget, className ) {

		var div = scope_Document.createElement('div');

		if ( className ) {
			addClass(div, className);
		}

		addTarget.appendChild(div);

		return div;
	}

	// Append a origin to the base
	function addOrigin ( base, handleNumber ) {

		var origin = addNodeTo(base, options.cssClasses.origin);
		var handle = addNodeTo(origin, options.cssClasses.handle);

		handle.setAttribute('data-handle', handleNumber);

		// https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex
		// 0 = focusable and reachable
		handle.setAttribute('tabindex', '0');
		handle.setAttribute('role', 'slider');
		handle.setAttribute('aria-orientation', options.ort ? 'vertical' : 'horizontal');

		if ( handleNumber === 0 ) {
			addClass(handle, options.cssClasses.handleLower);
		}

		else if ( handleNumber === options.handles - 1 ) {
			addClass(handle, options.cssClasses.handleUpper);
		}

		return origin;
	}

	// Insert nodes for connect elements
	function addConnect ( base, add ) {

		if ( !add ) {
			return false;
		}

		return addNodeTo(base, options.cssClasses.connect);
	}

	// Add handles to the slider base.
	function addElements ( connectOptions, base ) {

		var connectBase = addNodeTo(base, options.cssClasses.connects);

		scope_Handles = [];
		scope_Connects = [];

		scope_Connects.push(addConnect(connectBase, connectOptions[0]));

		// [::::O====O====O====]
		// connectOptions = [0, 1, 1, 1]

		for ( var i = 0; i < options.handles; i++ ) {
			// Keep a list of all added handles.
			scope_Handles.push(addOrigin(base, i));
			scope_HandleNumbers[i] = i;
			scope_Connects.push(addConnect(connectBase, connectOptions[i + 1]));
		}
	}

	// Initialize a single slider.
	function addSlider ( addTarget ) {

		// Apply classes and data to the target.
		addClass(addTarget, options.cssClasses.target);

		if ( options.dir === 0 ) {
			addClass(addTarget, options.cssClasses.ltr);
		} else {
			addClass(addTarget, options.cssClasses.rtl);
		}

		if ( options.ort === 0 ) {
			addClass(addTarget, options.cssClasses.horizontal);
		} else {
			addClass(addTarget, options.cssClasses.vertical);
		}

		scope_Base = addNodeTo(addTarget, options.cssClasses.base);
	}


	function addTooltip ( handle, handleNumber ) {

		if ( !options.tooltips[handleNumber] ) {
			return false;
		}

		return addNodeTo(handle.firstChild, options.cssClasses.tooltip);
	}

	// The tooltips option is a shorthand for using the 'update' event.
	function tooltips ( ) {

		// Tooltips are added with options.tooltips in original order.
		var tips = scope_Handles.map(addTooltip);

		bindEvent('update', function(values, handleNumber, unencoded) {

			if ( !tips[handleNumber] ) {
				return;
			}

			var formattedValue = values[handleNumber];

			if ( options.tooltips[handleNumber] !== true ) {
				formattedValue = options.tooltips[handleNumber].to(unencoded[handleNumber]);
			}

			tips[handleNumber].innerHTML = formattedValue;
		});
	}


	function aria ( ) {

		bindEvent('update', function ( values, handleNumber, unencoded, tap, positions ) {

			// Update Aria Values for all handles, as a change in one changes min and max values for the next.
			scope_HandleNumbers.forEach(function( index ){

				var handle = scope_Handles[index];

				var min = checkHandlePosition(scope_Locations, index, 0, true, true, true);
				var max = checkHandlePosition(scope_Locations, index, 100, true, true, true);

				var now = positions[index];
				var text = options.ariaFormat.to(unencoded[index]);

				handle.children[0].setAttribute('aria-valuemin', min.toFixed(1));
				handle.children[0].setAttribute('aria-valuemax', max.toFixed(1));
				handle.children[0].setAttribute('aria-valuenow', now.toFixed(1));
				handle.children[0].setAttribute('aria-valuetext', text);
			});
		});
	}


	function getGroup ( mode, values, stepped ) {

		// Use the range.
		if ( mode === 'range' || mode === 'steps' ) {
			return scope_Spectrum.xVal;
		}

		if ( mode === 'count' ) {

			if ( values < 2 ) {
				throw new Error("noUiSlider (" + VERSION + "): 'values' (>= 2) required for mode 'count'.");
			}

			// Divide 0 - 100 in 'count' parts.
			var interval = values - 1;
			var spread = ( 100 / interval );

			values = [];

			// List these parts and have them handled as 'positions'.
			while ( interval-- ) {
				values[ interval ] = ( interval * spread );
			}

			values.push(100);

			mode = 'positions';
		}

		if ( mode === 'positions' ) {

			// Map all percentages to on-range values.
			return values.map(function( value ){
				return scope_Spectrum.fromStepping( stepped ? scope_Spectrum.getStep( value ) : value );
			});
		}

		if ( mode === 'values' ) {

			// If the value must be stepped, it needs to be converted to a percentage first.
			if ( stepped ) {

				return values.map(function( value ){

					// Convert to percentage, apply step, return to value.
					return scope_Spectrum.fromStepping( scope_Spectrum.getStep( scope_Spectrum.toStepping( value ) ) );
				});

			}

			// Otherwise, we can simply use the values.
			return values;
		}
	}

	function generateSpread ( density, mode, group ) {

		function safeIncrement(value, increment) {
			// Avoid floating point variance by dropping the smallest decimal places.
			return (value + increment).toFixed(7) / 1;
		}

		var indexes = {};
		var firstInRange = scope_Spectrum.xVal[0];
		var lastInRange = scope_Spectrum.xVal[scope_Spectrum.xVal.length-1];
		var ignoreFirst = false;
		var ignoreLast = false;
		var prevPct = 0;

		// Create a copy of the group, sort it and filter away all duplicates.
		group = unique(group.slice().sort(function(a, b){ return a - b; }));

		// Make sure the range starts with the first element.
		if ( group[0] !== firstInRange ) {
			group.unshift(firstInRange);
			ignoreFirst = true;
		}

		// Likewise for the last one.
		if ( group[group.length - 1] !== lastInRange ) {
			group.push(lastInRange);
			ignoreLast = true;
		}

		group.forEach(function ( current, index ) {

			// Get the current step and the lower + upper positions.
			var step;
			var i;
			var q;
			var low = current;
			var high = group[index+1];
			var newPct;
			var pctDifference;
			var pctPos;
			var type;
			var steps;
			var realSteps;
			var stepsize;

			// When using 'steps' mode, use the provided steps.
			// Otherwise, we'll step on to the next subrange.
			if ( mode === 'steps' ) {
				step = scope_Spectrum.xNumSteps[ index ];
			}

			// Default to a 'full' step.
			if ( !step ) {
				step = high-low;
			}

			// Low can be 0, so test for false. If high is undefined,
			// we are at the last subrange. Index 0 is already handled.
			if ( low === false || high === undefined ) {
				return;
			}

			// Make sure step isn't 0, which would cause an infinite loop (#654)
			step = Math.max(step, 0.0000001);

			// Find all steps in the subrange.
			for ( i = low; i <= high; i = safeIncrement(i, step) ) {

				// Get the percentage value for the current step,
				// calculate the size for the subrange.
				newPct = scope_Spectrum.toStepping( i );
				pctDifference = newPct - prevPct;

				steps = pctDifference / density;
				realSteps = Math.round(steps);

				// This ratio represents the amount of percentage-space a point indicates.
				// For a density 1 the points/percentage = 1. For density 2, that percentage needs to be re-devided.
				// Round the percentage offset to an even number, then divide by two
				// to spread the offset on both sides of the range.
				stepsize = pctDifference/realSteps;

				// Divide all points evenly, adding the correct number to this subrange.
				// Run up to <= so that 100% gets a point, event if ignoreLast is set.
				for ( q = 1; q <= realSteps; q += 1 ) {

					// The ratio between the rounded value and the actual size might be ~1% off.
					// Correct the percentage offset by the number of points
					// per subrange. density = 1 will result in 100 points on the
					// full range, 2 for 50, 4 for 25, etc.
					pctPos = prevPct + ( q * stepsize );
					indexes[pctPos.toFixed(5)] = ['x', 0];
				}

				// Determine the point type.
				type = (group.indexOf(i) > -1) ? 1 : ( mode === 'steps' ? 2 : 0 );

				// Enforce the 'ignoreFirst' option by overwriting the type for 0.
				if ( !index && ignoreFirst ) {
					type = 0;
				}

				if ( !(i === high && ignoreLast)) {
					// Mark the 'type' of this point. 0 = plain, 1 = real value, 2 = step value.
					indexes[newPct.toFixed(5)] = [i, type];
				}

				// Update the percentage count.
				prevPct = newPct;
			}
		});

		return indexes;
	}

	function addMarking ( spread, filterFunc, formatter ) {

		var element = scope_Document.createElement('div');

		var valueSizeClasses = [
			options.cssClasses.valueNormal,
			options.cssClasses.valueLarge,
			options.cssClasses.valueSub
		];
		var markerSizeClasses = [
			options.cssClasses.markerNormal,
			options.cssClasses.markerLarge,
			options.cssClasses.markerSub
		];
		var valueOrientationClasses = [
			options.cssClasses.valueHorizontal,
			options.cssClasses.valueVertical
		];
		var markerOrientationClasses = [
			options.cssClasses.markerHorizontal,
			options.cssClasses.markerVertical
		];

		addClass(element, options.cssClasses.pips);
		addClass(element, options.ort === 0 ? options.cssClasses.pipsHorizontal : options.cssClasses.pipsVertical);

		function getClasses( type, source ){
			var a = source === options.cssClasses.value;
			var orientationClasses = a ? valueOrientationClasses : markerOrientationClasses;
			var sizeClasses = a ? valueSizeClasses : markerSizeClasses;

			return source + ' ' + orientationClasses[options.ort] + ' ' + sizeClasses[type];
		}

		function addSpread ( offset, values ){

			// Apply the filter function, if it is set.
			values[1] = (values[1] && filterFunc) ? filterFunc(values[0], values[1]) : values[1];

			// Add a marker for every point
			var node = addNodeTo(element, false);
				node.className = getClasses(values[1], options.cssClasses.marker);
				node.style[options.style] = offset + '%';

			// Values are only appended for points marked '1' or '2'.
			if ( values[1] ) {
				node = addNodeTo(element, false);
				node.className = getClasses(values[1], options.cssClasses.value);
				node.setAttribute('data-value', values[0]);
				node.style[options.style] = offset + '%';
				node.innerText = formatter.to(values[0]);
			}
		}

		// Append all points.
		Object.keys(spread).forEach(function(a){
			addSpread(a, spread[a]);
		});

		return element;
	}

	function removePips ( ) {
		if ( scope_Pips ) {
			removeElement(scope_Pips);
			scope_Pips = null;
		}
	}

	function pips ( grid ) {

		// Fix #669
		removePips();

		var mode = grid.mode;
		var density = grid.density || 1;
		var filter = grid.filter || false;
		var values = grid.values || false;
		var stepped = grid.stepped || false;
		var group = getGroup( mode, values, stepped );
		var spread = generateSpread( density, mode, group );
		var format = grid.format || {
			to: Math.round
		};

		scope_Pips = scope_Target.appendChild(addMarking(
			spread,
			filter,
			format
		));

		return scope_Pips;
	}

/*! In this file: Browser events (not slider events like slide, change); */

	// Shorthand for base dimensions.
	function baseSize ( ) {
		var rect = scope_Base.getBoundingClientRect();
		var alt = 'offset' + ['Width', 'Height'][options.ort];
		return options.ort === 0 ? (rect.width||scope_Base[alt]) : (rect.height||scope_Base[alt]);
	}

	// Handler for attaching events trough a proxy.
	function attachEvent ( events, element, callback, data ) {

		// This function can be used to 'filter' events to the slider.
		// element is a node, not a nodeList

		var method = function ( e ){

			e = fixEvent(e, data.pageOffset, data.target || element);

			// fixEvent returns false if this event has a different target
			// when handling (multi-) touch events;
			if ( !e ) {
				return false;
			}

			// doNotReject is passed by all end events to make sure released touches
			// are not rejected, leaving the slider "stuck" to the cursor;
			if ( scope_Target.hasAttribute('disabled') && !data.doNotReject ) {
				return false;
			}

			// Stop if an active 'tap' transition is taking place.
			if ( hasClass(scope_Target, options.cssClasses.tap) && !data.doNotReject ) {
				return false;
			}

			// Ignore right or middle clicks on start #454
			if ( events === actions.start && e.buttons !== undefined && e.buttons > 1 ) {
				return false;
			}

			// Ignore right or middle clicks on start #454
			if ( data.hover && e.buttons ) {
				return false;
			}

			// 'supportsPassive' is only true if a browser also supports touch-action: none in CSS.
			// iOS safari does not, so it doesn't get to benefit from passive scrolling. iOS does support
			// touch-action: manipulation, but that allows panning, which breaks
			// sliders after zooming/on non-responsive pages.
			// See: https://bugs.webkit.org/show_bug.cgi?id=133112
			if ( !supportsPassive ) {
				e.preventDefault();
			}

			e.calcPoint = e.points[ options.ort ];

			// Call the event handler with the event [ and additional data ].
			callback ( e, data );
		};

		var methods = [];

		// Bind a closure on the target for every event type.
		events.split(' ').forEach(function( eventName ){
			element.addEventListener(eventName, method, supportsPassive ? { passive: true } : false);
			methods.push([eventName, method]);
		});

		return methods;
	}

	// Provide a clean event with standardized offset values.
	function fixEvent ( e, pageOffset, eventTarget ) {

		// Filter the event to register the type, which can be
		// touch, mouse or pointer. Offset changes need to be
		// made on an event specific basis.
		var touch = e.type.indexOf('touch') === 0;
		var mouse = e.type.indexOf('mouse') === 0;
		var pointer = e.type.indexOf('pointer') === 0;

		var x;
		var y;

		// IE10 implemented pointer events with a prefix;
		if ( e.type.indexOf('MSPointer') === 0 ) {
			pointer = true;
		}

		// In the event that multitouch is activated, the only thing one handle should be concerned
		// about is the touches that originated on top of it.
		if ( touch ) {

			// Returns true if a touch originated on the target.
			var isTouchOnTarget = function (checkTouch) {
				return checkTouch.target === eventTarget || eventTarget.contains(checkTouch.target);
			};

			// In the case of touchstart events, we need to make sure there is still no more than one
			// touch on the target so we look amongst all touches.
			if (e.type === 'touchstart') {

				var targetTouches = Array.prototype.filter.call(e.touches, isTouchOnTarget);

				// Do not support more than one touch per handle.
				if ( targetTouches.length > 1 ) {
					return false;
				}

				x = targetTouches[0].pageX;
				y = targetTouches[0].pageY;

			} else {

				// In the other cases, find on changedTouches is enough.
				var targetTouch = Array.prototype.find.call(e.changedTouches, isTouchOnTarget);

				// Cancel if the target touch has not moved.
				if ( !targetTouch ) {
					return false;
				}

				x = targetTouch.pageX;
				y = targetTouch.pageY;
			}
		}

		pageOffset = pageOffset || getPageOffset(scope_Document);

		if ( mouse || pointer ) {
			x = e.clientX + pageOffset.x;
			y = e.clientY + pageOffset.y;
		}

		e.pageOffset = pageOffset;
		e.points = [x, y];
		e.cursor = mouse || pointer; // Fix #435

		return e;
	}

	// Translate a coordinate in the document to a percentage on the slider
	function calcPointToPercentage ( calcPoint ) {
		var location = calcPoint - offset(scope_Base, options.ort);
		var proposal = ( location * 100 ) / baseSize();

		// Clamp proposal between 0% and 100%
		// Out-of-bound coordinates may occur when .noUi-base pseudo-elements
		// are used (e.g. contained handles feature)
		proposal = limit(proposal);

		return options.dir ? 100 - proposal : proposal;
	}

	// Find handle closest to a certain percentage on the slider
	function getClosestHandle ( proposal ) {

		var closest = 100;
		var handleNumber = false;

		scope_Handles.forEach(function(handle, index){

			// Disabled handles are ignored
			if ( handle.hasAttribute('disabled') ) {
				return;
			}

			var pos = Math.abs(scope_Locations[index] - proposal);

			if ( pos < closest || (pos === 100 && closest === 100) ) {
				handleNumber = index;
				closest = pos;
			}
		});

		return handleNumber;
	}

	// Fire 'end' when a mouse or pen leaves the document.
	function documentLeave ( event, data ) {
		if ( event.type === "mouseout" && event.target.nodeName === "HTML" && event.relatedTarget === null ){
			eventEnd (event, data);
		}
	}

	// Handle movement on document for handle and range drag.
	function eventMove ( event, data ) {

		// Fix #498
		// Check value of .buttons in 'start' to work around a bug in IE10 mobile (data.buttonsProperty).
		// https://connect.microsoft.com/IE/feedback/details/927005/mobile-ie10-windows-phone-buttons-property-of-pointermove-event-always-zero
		// IE9 has .buttons and .which zero on mousemove.
		// Firefox breaks the spec MDN defines.
		if ( navigator.appVersion.indexOf("MSIE 9") === -1 && event.buttons === 0 && data.buttonsProperty !== 0 ) {
			return eventEnd(event, data);
		}

		// Check if we are moving up or down
		var movement = (options.dir ? -1 : 1) * (event.calcPoint - data.startCalcPoint);

		// Convert the movement into a percentage of the slider width/height
		var proposal = (movement * 100) / data.baseSize;

		moveHandles(movement > 0, proposal, data.locations, data.handleNumbers);
	}

	// Unbind move events on document, call callbacks.
	function eventEnd ( event, data ) {

		// The handle is no longer active, so remove the class.
		if ( data.handle ) {
			removeClass(data.handle, options.cssClasses.active);
			scope_ActiveHandlesCount -= 1;
		}

		// Unbind the move and end events, which are added on 'start'.
		data.listeners.forEach(function( c ) {
			scope_DocumentElement.removeEventListener(c[0], c[1]);
		});

		if ( scope_ActiveHandlesCount === 0 ) {
			// Remove dragging class.
			removeClass(scope_Target, options.cssClasses.drag);
			setZindex();

			// Remove cursor styles and text-selection events bound to the body.
			if ( event.cursor ) {
				scope_Body.style.cursor = '';
				scope_Body.removeEventListener('selectstart', preventDefault);
			}
		}

		data.handleNumbers.forEach(function(handleNumber){
			fireEvent('change', handleNumber);
			fireEvent('set', handleNumber);
			fireEvent('end', handleNumber);
		});
	}

	// Bind move events on document.
	function eventStart ( event, data ) {

		var handle;
		if ( data.handleNumbers.length === 1 ) {

			var handleOrigin = scope_Handles[data.handleNumbers[0]];

			// Ignore 'disabled' handles
			if ( handleOrigin.hasAttribute('disabled') ) {
				return false;
			}

			handle = handleOrigin.children[0];
			scope_ActiveHandlesCount += 1;

			// Mark the handle as 'active' so it can be styled.
			addClass(handle, options.cssClasses.active);
		}

		// A drag should never propagate up to the 'tap' event.
		event.stopPropagation();

		// Record the event listeners.
		var listeners = [];

		// Attach the move and end events.
		var moveEvent = attachEvent(actions.move, scope_DocumentElement, eventMove, {
			// The event target has changed so we need to propagate the original one so that we keep
			// relying on it to extract target touches.
			target: event.target,
			handle: handle,
			listeners: listeners,
			startCalcPoint: event.calcPoint,
			baseSize: baseSize(),
			pageOffset: event.pageOffset,
			handleNumbers: data.handleNumbers,
			buttonsProperty: event.buttons,
			locations: scope_Locations.slice()
		});

		var endEvent = attachEvent(actions.end, scope_DocumentElement, eventEnd, {
			target: event.target,
			handle: handle,
			listeners: listeners,
			doNotReject: true,
			handleNumbers: data.handleNumbers
		});

		var outEvent = attachEvent("mouseout", scope_DocumentElement, documentLeave, {
			target: event.target,
			handle: handle,
			listeners: listeners,
			doNotReject: true,
			handleNumbers: data.handleNumbers
		});

		// We want to make sure we pushed the listeners in the listener list rather than creating
		// a new one as it has already been passed to the event handlers.
		listeners.push.apply(listeners, moveEvent.concat(endEvent, outEvent));

		// Text selection isn't an issue on touch devices,
		// so adding cursor styles can be skipped.
		if ( event.cursor ) {

			// Prevent the 'I' cursor and extend the range-drag cursor.
			scope_Body.style.cursor = getComputedStyle(event.target).cursor;

			// Mark the target with a dragging state.
			if ( scope_Handles.length > 1 ) {
				addClass(scope_Target, options.cssClasses.drag);
			}

			// Prevent text selection when dragging the handles.
			// In noUiSlider <= 9.2.0, this was handled by calling preventDefault on mouse/touch start/move,
			// which is scroll blocking. The selectstart event is supported by FireFox starting from version 52,
			// meaning the only holdout is iOS Safari. This doesn't matter: text selection isn't triggered there.
			// The 'cursor' flag is false.
			// See: http://caniuse.com/#search=selectstart
			scope_Body.addEventListener('selectstart', preventDefault, false);
		}

		data.handleNumbers.forEach(function(handleNumber){
			fireEvent('start', handleNumber);
		});
	}

	// Move closest handle to tapped location.
	function eventTap ( event ) {

		// The tap event shouldn't propagate up
		event.stopPropagation();

		var proposal = calcPointToPercentage(event.calcPoint);
		var handleNumber = getClosestHandle(proposal);

		// Tackle the case that all handles are 'disabled'.
		if ( handleNumber === false ) {
			return false;
		}

		// Flag the slider as it is now in a transitional state.
		// Transition takes a configurable amount of ms (default 300). Re-enable the slider after that.
		if ( !options.events.snap ) {
			addClassFor(scope_Target, options.cssClasses.tap, options.animationDuration);
		}

		setHandle(handleNumber, proposal, true, true);

		setZindex();

		fireEvent('slide', handleNumber, true);
		fireEvent('update', handleNumber, true);
		fireEvent('change', handleNumber, true);
		fireEvent('set', handleNumber, true);

		if ( options.events.snap ) {
			eventStart(event, { handleNumbers: [handleNumber] });
		}
	}

	// Fires a 'hover' event for a hovered mouse/pen position.
	function eventHover ( event ) {

		var proposal = calcPointToPercentage(event.calcPoint);

		var to = scope_Spectrum.getStep(proposal);
		var value = scope_Spectrum.fromStepping(to);

		Object.keys(scope_Events).forEach(function( targetEvent ) {
			if ( 'hover' === targetEvent.split('.')[0] ) {
				scope_Events[targetEvent].forEach(function( callback ) {
					callback.call( scope_Self, value );
				});
			}
		});
	}

	// Attach events to several slider parts.
	function bindSliderEvents ( behaviour ) {

		// Attach the standard drag event to the handles.
		if ( !behaviour.fixed ) {

			scope_Handles.forEach(function( handle, index ){

				// These events are only bound to the visual handle
				// element, not the 'real' origin element.
				attachEvent ( actions.start, handle.children[0], eventStart, {
					handleNumbers: [index]
				});
			});
		}

		// Attach the tap event to the slider base.
		if ( behaviour.tap ) {
			attachEvent (actions.start, scope_Base, eventTap, {});
		}

		// Fire hover events
		if ( behaviour.hover ) {
			attachEvent (actions.move, scope_Base, eventHover, { hover: true });
		}

		// Make the range draggable.
		if ( behaviour.drag ){

			scope_Connects.forEach(function( connect, index ){

				if ( connect === false || index === 0 || index === scope_Connects.length - 1 ) {
					return;
				}

				var handleBefore = scope_Handles[index - 1];
				var handleAfter = scope_Handles[index];
				var eventHolders = [connect];

				addClass(connect, options.cssClasses.draggable);

				// When the range is fixed, the entire range can
				// be dragged by the handles. The handle in the first
				// origin will propagate the start event upward,
				// but it needs to be bound manually on the other.
				if ( behaviour.fixed ) {
					eventHolders.push(handleBefore.children[0]);
					eventHolders.push(handleAfter.children[0]);
				}

				eventHolders.forEach(function( eventHolder ) {
					attachEvent ( actions.start, eventHolder, eventStart, {
						handles: [handleBefore, handleAfter],
						handleNumbers: [index - 1, index]
					});
				});
			});
		}
	}

/*! In this file: Slider events (not browser events); */

	// Attach an event to this slider, possibly including a namespace
	function bindEvent ( namespacedEvent, callback ) {
		scope_Events[namespacedEvent] = scope_Events[namespacedEvent] || [];
		scope_Events[namespacedEvent].push(callback);

		// If the event bound is 'update,' fire it immediately for all handles.
		if ( namespacedEvent.split('.')[0] === 'update' ) {
			scope_Handles.forEach(function(a, index){
				fireEvent('update', index);
			});
		}
	}

	// Undo attachment of event
	function removeEvent ( namespacedEvent ) {

		var event = namespacedEvent && namespacedEvent.split('.')[0];
		var namespace = event && namespacedEvent.substring(event.length);

		Object.keys(scope_Events).forEach(function( bind ){

			var tEvent = bind.split('.')[0];
			var tNamespace = bind.substring(tEvent.length);

			if ( (!event || event === tEvent) && (!namespace || namespace === tNamespace) ) {
				delete scope_Events[bind];
			}
		});
	}

	// External event handling
	function fireEvent ( eventName, handleNumber, tap ) {

		Object.keys(scope_Events).forEach(function( targetEvent ) {

			var eventType = targetEvent.split('.')[0];

			if ( eventName === eventType ) {
				scope_Events[targetEvent].forEach(function( callback ) {

					callback.call(
						// Use the slider public API as the scope ('this')
						scope_Self,
						// Return values as array, so arg_1[arg_2] is always valid.
						scope_Values.map(options.format.to),
						// Handle index, 0 or 1
						handleNumber,
						// Unformatted slider values
						scope_Values.slice(),
						// Event is fired by tap, true or false
						tap || false,
						// Left offset of the handle, in relation to the slider
						scope_Locations.slice()
					);
				});
			}
		});
	}

/*! In this file: Mechanics for slider operation */

	function toPct ( pct ) {
		return pct + '%';
	}

	// Split out the handle positioning logic so the Move event can use it, too
	function checkHandlePosition ( reference, handleNumber, to, lookBackward, lookForward, getValue ) {

		// For sliders with multiple handles, limit movement to the other handle.
		// Apply the margin option by adding it to the handle positions.
		if ( scope_Handles.length > 1 ) {

			if ( lookBackward && handleNumber > 0 ) {
				to = Math.max(to, reference[handleNumber - 1] + options.margin);
			}

			if ( lookForward && handleNumber < scope_Handles.length - 1 ) {
				to = Math.min(to, reference[handleNumber + 1] - options.margin);
			}
		}

		// The limit option has the opposite effect, limiting handles to a
		// maximum distance from another. Limit must be > 0, as otherwise
		// handles would be unmoveable.
		if ( scope_Handles.length > 1 && options.limit ) {

			if ( lookBackward && handleNumber > 0 ) {
				to = Math.min(to, reference[handleNumber - 1] + options.limit);
			}

			if ( lookForward && handleNumber < scope_Handles.length - 1 ) {
				to = Math.max(to, reference[handleNumber + 1] - options.limit);
			}
		}

		// The padding option keeps the handles a certain distance from the
		// edges of the slider. Padding must be > 0.
		if ( options.padding ) {

			if ( handleNumber === 0 ) {
				to = Math.max(to, options.padding[0]);
			}

			if ( handleNumber === scope_Handles.length - 1 ) {
				to = Math.min(to, 100 - options.padding[1]);
			}
		}

		to = scope_Spectrum.getStep(to);

		// Limit percentage to the 0 - 100 range
		to = limit(to);

		// Return false if handle can't move
		if ( to === reference[handleNumber] && !getValue ) {
			return false;
		}

		return to;
	}

	// Uses slider orientation to create CSS rules. a = base value;
	function inRuleOrder ( v, a ) {
		var o = options.ort;
		return (o?a:v) + ', ' + (o?v:a);
	}

	// Moves handle(s) by a percentage
	// (bool, % to move, [% where handle started, ...], [index in scope_Handles, ...])
	function moveHandles ( upward, proposal, locations, handleNumbers ) {

		var proposals = locations.slice();

		var b = [!upward, upward];
		var f = [upward, !upward];

		// Copy handleNumbers so we don't change the dataset
		handleNumbers = handleNumbers.slice();

		// Check to see which handle is 'leading'.
		// If that one can't move the second can't either.
		if ( upward ) {
			handleNumbers.reverse();
		}

		// Step 1: get the maximum percentage that any of the handles can move
		if ( handleNumbers.length > 1 ) {

			handleNumbers.forEach(function(handleNumber, o) {

				var to = checkHandlePosition(proposals, handleNumber, proposals[handleNumber] + proposal, b[o], f[o], false);

				// Stop if one of the handles can't move.
				if ( to === false ) {
					proposal = 0;
				} else {
					proposal = to - proposals[handleNumber];
					proposals[handleNumber] = to;
				}
			});
		}

		// If using one handle, check backward AND forward
		else {
			b = f = [true];
		}

		var state = false;

		// Step 2: Try to set the handles with the found percentage
		handleNumbers.forEach(function(handleNumber, o) {
			state = setHandle(handleNumber, locations[handleNumber] + proposal, b[o], f[o]) || state;
		});

		// Step 3: If a handle moved, fire events
		if ( state ) {
			handleNumbers.forEach(function(handleNumber){
				fireEvent('update', handleNumber);
				fireEvent('slide', handleNumber);
			});
		}
	}

	// Takes a base value and an offset. This offset is used for the connect bar size.
	// In the initial design for this feature, the origin element was 1% wide.
	// Unfortunately, a rounding bug in Chrome makes it impossible to implement this feature
	// in this manner: https://bugs.chromium.org/p/chromium/issues/detail?id=798223
	function transformDirection ( a, b ) {
		return options.dir ? 100 - a - b : a;
	}

	// Updates scope_Locations and scope_Values, updates visual state
	function updateHandlePosition ( handleNumber, to ) {

		// Update locations.
		scope_Locations[handleNumber] = to;

		// Convert the value to the slider stepping/range.
		scope_Values[handleNumber] = scope_Spectrum.fromStepping(to);

		var rule = 'translate(' + inRuleOrder(toPct(transformDirection(to, 0) - scope_DirOffset), '0') + ')';
		scope_Handles[handleNumber].style[options.transformRule] = rule;

		updateConnect(handleNumber);
		updateConnect(handleNumber + 1);
	}

	// Handles before the slider middle are stacked later = higher,
	// Handles after the middle later is lower
	// [[7] [8] .......... | .......... [5] [4]
	function setZindex ( ) {

		scope_HandleNumbers.forEach(function(handleNumber){
			var dir = (scope_Locations[handleNumber] > 50 ? -1 : 1);
			var zIndex = 3 + (scope_Handles.length + (dir * handleNumber));
			scope_Handles[handleNumber].style.zIndex = zIndex;
		});
	}

	// Test suggested values and apply margin, step.
	function setHandle ( handleNumber, to, lookBackward, lookForward ) {

		to = checkHandlePosition(scope_Locations, handleNumber, to, lookBackward, lookForward, false);

		if ( to === false ) {
			return false;
		}

		updateHandlePosition(handleNumber, to);

		return true;
	}

	// Updates style attribute for connect nodes
	function updateConnect ( index ) {

		// Skip connects set to false
		if ( !scope_Connects[index] ) {
			return;
		}

		var l = 0;
		var h = 100;

		if ( index !== 0 ) {
			l = scope_Locations[index - 1];
		}

		if ( index !== scope_Connects.length - 1 ) {
			h = scope_Locations[index];
		}

		// We use two rules:
		// 'translate' to change the left/top offset;
		// 'scale' to change the width of the element;
		// As the element has a width of 100%, a translation of 100% is equal to 100% of the parent (.noUi-base)
		var connectWidth = h - l;
		var translateRule = 'translate(' + inRuleOrder(toPct(transformDirection(l, connectWidth)), '0') + ')';
		var scaleRule = 'scale(' + inRuleOrder(connectWidth / 100, '1') + ')';

		scope_Connects[index].style[options.transformRule] = translateRule + ' ' + scaleRule;
	}

/*! In this file: All methods eventually exposed in slider.noUiSlider... */

	// Parses value passed to .set method. Returns current value if not parse-able.
	function resolveToValue ( to, handleNumber ) {

		// Setting with null indicates an 'ignore'.
		// Inputting 'false' is invalid.
		if ( to === null || to === false || to === undefined ) {
			return scope_Locations[handleNumber];
		}

		// If a formatted number was passed, attempt to decode it.
		if ( typeof to === 'number' ) {
			to = String(to);
		}

		to = options.format.from(to);
		to = scope_Spectrum.toStepping(to);

		// If parsing the number failed, use the current value.
		if ( to === false || isNaN(to) ) {
			return scope_Locations[handleNumber];
		}

		return to;
	}

	// Set the slider value.
	function valueSet ( input, fireSetEvent ) {

		var values = asArray(input);
		var isInit = scope_Locations[0] === undefined;

		// Event fires by default
		fireSetEvent = (fireSetEvent === undefined ? true : !!fireSetEvent);

		// Animation is optional.
		// Make sure the initial values were set before using animated placement.
		if ( options.animate && !isInit ) {
			addClassFor(scope_Target, options.cssClasses.tap, options.animationDuration);
		}

		// First pass, without lookAhead but with lookBackward. Values are set from left to right.
		scope_HandleNumbers.forEach(function(handleNumber){
			setHandle(handleNumber, resolveToValue(values[handleNumber], handleNumber), true, false);
		});

		// Second pass. Now that all base values are set, apply constraints
		scope_HandleNumbers.forEach(function(handleNumber){
			setHandle(handleNumber, scope_Locations[handleNumber], true, true);
		});

		setZindex();

		scope_HandleNumbers.forEach(function(handleNumber){

			fireEvent('update', handleNumber);

			// Fire the event only for handles that received a new value, as per #579
			if ( values[handleNumber] !== null && fireSetEvent ) {
				fireEvent('set', handleNumber);
			}
		});
	}

	// Reset slider to initial values
	function valueReset ( fireSetEvent ) {
		valueSet(options.start, fireSetEvent);
	}

	// Get the slider value.
	function valueGet ( ) {

		var values = scope_Values.map(options.format.to);

		// If only one handle is used, return a single value.
		if ( values.length === 1 ){
			return values[0];
		}

		return values;
	}

	// Removes classes from the root and empties it.
	function destroy ( ) {

		for ( var key in options.cssClasses ) {
			if ( !options.cssClasses.hasOwnProperty(key) ) { continue; }
			removeClass(scope_Target, options.cssClasses[key]);
		}

		while (scope_Target.firstChild) {
			scope_Target.removeChild(scope_Target.firstChild);
		}

		delete scope_Target.noUiSlider;
	}

	// Get the current step size for the slider.
	function getCurrentStep ( ) {

		// Check all locations, map them to their stepping point.
		// Get the step point, then find it in the input list.
		return scope_Locations.map(function( location, index ){

			var nearbySteps = scope_Spectrum.getNearbySteps( location );
			var value = scope_Values[index];
			var increment = nearbySteps.thisStep.step;
			var decrement = null;

			// If the next value in this step moves into the next step,
			// the increment is the start of the next step - the current value
			if ( increment !== false ) {
				if ( value + increment > nearbySteps.stepAfter.startValue ) {
					increment = nearbySteps.stepAfter.startValue - value;
				}
			}


			// If the value is beyond the starting point
			if ( value > nearbySteps.thisStep.startValue ) {
				decrement = nearbySteps.thisStep.step;
			}

			else if ( nearbySteps.stepBefore.step === false ) {
				decrement = false;
			}

			// If a handle is at the start of a step, it always steps back into the previous step first
			else {
				decrement = value - nearbySteps.stepBefore.highestStep;
			}


			// Now, if at the slider edges, there is not in/decrement
			if ( location === 100 ) {
				increment = null;
			}

			else if ( location === 0 ) {
				decrement = null;
			}

			// As per #391, the comparison for the decrement step can have some rounding issues.
			var stepDecimals = scope_Spectrum.countStepDecimals();

			// Round per #391
			if ( increment !== null && increment !== false ) {
				increment = Number(increment.toFixed(stepDecimals));
			}

			if ( decrement !== null && decrement !== false ) {
				decrement = Number(decrement.toFixed(stepDecimals));
			}

			return [decrement, increment];
		});
	}

	// Updateable: margin, limit, padding, step, range, animate, snap
	function updateOptions ( optionsToUpdate, fireSetEvent ) {

		// Spectrum is created using the range, snap, direction and step options.
		// 'snap' and 'step' can be updated.
		// If 'snap' and 'step' are not passed, they should remain unchanged.
		var v = valueGet();

		var updateAble = ['margin', 'limit', 'padding', 'range', 'animate', 'snap', 'step', 'format'];

		// Only change options that we're actually passed to update.
		updateAble.forEach(function(name){
			if ( optionsToUpdate[name] !== undefined ) {
				originalOptions[name] = optionsToUpdate[name];
			}
		});

		var newOptions = testOptions(originalOptions);

		// Load new options into the slider state
		updateAble.forEach(function(name){
			if ( optionsToUpdate[name] !== undefined ) {
				options[name] = newOptions[name];
			}
		});

		scope_Spectrum = newOptions.spectrum;

		// Limit, margin and padding depend on the spectrum but are stored outside of it. (#677)
		options.margin = newOptions.margin;
		options.limit = newOptions.limit;
		options.padding = newOptions.padding;

		// Update pips, removes existing.
		if ( options.pips ) {
			pips(options.pips);
		}

		// Invalidate the current positioning so valueSet forces an update.
		scope_Locations = [];
		valueSet(optionsToUpdate.start || v, fireSetEvent);
	}

/*! In this file: Calls to functions. All other scope_ files define functions only; */

	// Create the base element, initialize HTML and set classes.
	// Add handles and connect elements.
	addSlider(scope_Target);
	addElements(options.connect, scope_Base);

	// Attach user events.
	bindSliderEvents(options.events);

	// Use the public value method to set the start values.
	valueSet(options.start);

	scope_Self = {
		destroy: destroy,
		steps: getCurrentStep,
		on: bindEvent,
		off: removeEvent,
		get: valueGet,
		set: valueSet,
		reset: valueReset,
		// Exposed for unit testing, don't use this in your application.
		__moveHandles: function(a, b, c) { moveHandles(a, b, scope_Locations, c); },
		options: originalOptions, // Issue #600, #678
		updateOptions: updateOptions,
		target: scope_Target, // Issue #597
		removePips: removePips,
		pips: pips // Issue #594
	};

	if ( options.pips ) {
		pips(options.pips);
	}

	if ( options.tooltips ) {
		tooltips();
	}

	aria();

	return scope_Self;

}


	// Run the standard initializer
	function initialize ( target, originalOptions ) {

		if ( !target || !target.nodeName ) {
			throw new Error("noUiSlider (" + VERSION + "): create requires a single element, got: " + target);
		}

		// Throw an error if the slider was already initialized.
		if ( target.noUiSlider ) {
			throw new Error("noUiSlider (" + VERSION + "): Slider was already initialized.");
		}

		// Test the options and create the slider environment;
		var options = testOptions( originalOptions, target );
		var api = scope( target, options, originalOptions );

		target.noUiSlider = api;

		return api;
	}

	// Use an object instead of a function for future expandability;
	return {
		version: VERSION,
		create: initialize
	};

}));

/***/ }),

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/range-slider/range-slider.ts":
/*!*********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/range-slider/range-slider.ts ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RangeSlider; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! nouislider */ "./node_modules/nouislider/distribute/nouislider.js");
/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(nouislider__WEBPACK_IMPORTED_MODULE_1__);


class RangeSlider extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.sliderContainer = void 0;
    this.rangeInputs = void 0;
    this.numberDigitsAfterDecimalPoint = 2;
  }

  readyCallback() {}

  init() {
    this.sliderContainer = document.getElementsByClassName(this.wrapClassName)[0];
    this.rangeInputs = Array.from(document.getElementsByClassName(this.inputsClassName));
    this.initUiSlider();
    this.mapEvents();
  }

  mapEvents() {
    this.rangeInputs.forEach((input, index) => {
      input.addEventListener('change', event => {
        this.setInputValueToSlider(index, event.currentTarget.value);
      });
    });
    this.valueUpdate();
  }

  initUiSlider() {
    nouislider__WEBPACK_IMPORTED_MODULE_1___default.a.create(this.sliderContainer, this.sliderConfig);
  }

  setInputValueToSlider(index, value) {
    var inputsValue = [];
    inputsValue[index] = value;
    this.sliderContainer.noUiSlider.set(inputsValue);
  }

  valueUpdate() {
    this.sliderContainer.noUiSlider.on('update', (values, handle) => {
      this.rangeInputs[handle].value = String(values[handle]);
    });
  }

  get wrapClassName() {
    return this.getAttribute('wrap-class-name');
  }

  get inputsClassName() {
    return this.getAttribute('inputs-class-name');
  }

  get sliderConfig() {
    return Object.assign(JSON.parse(this.getAttribute('slider-config')), {
      format: {
        from: value => value,
        to: value => {
          value = value.toFixed(this.numberDigitsAfterDecimalPoint) % 1 === 0 ? Math.floor(value) : value.toFixed(this.numberDigitsAfterDecimalPoint);
          return value;
        }
      }
    });
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbm91aXNsaWRlci9kaXN0cmlidXRlL25vdWlzbGlkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhbmdlLXNsaWRlci9yYW5nZS1zbGlkZXIudHMiXSwibmFtZXMiOlsiUmFuZ2VTbGlkZXIiLCJDb21wb25lbnQiLCJzbGlkZXJDb250YWluZXIiLCJyYW5nZUlucHV0cyIsIm51bWJlckRpZ2l0c0FmdGVyRGVjaW1hbFBvaW50IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJ3cmFwQ2xhc3NOYW1lIiwiQXJyYXkiLCJmcm9tIiwiaW5wdXRzQ2xhc3NOYW1lIiwiaW5pdFVpU2xpZGVyIiwibWFwRXZlbnRzIiwiZm9yRWFjaCIsImlucHV0IiwiaW5kZXgiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJzZXRJbnB1dFZhbHVlVG9TbGlkZXIiLCJjdXJyZW50VGFyZ2V0IiwidmFsdWUiLCJ2YWx1ZVVwZGF0ZSIsIm5vVWlTbGlkZXIiLCJjcmVhdGUiLCJzbGlkZXJDb25maWciLCJpbnB1dHNWYWx1ZSIsInNldCIsIm9uIiwidmFsdWVzIiwiaGFuZGxlIiwiU3RyaW5nIiwiZ2V0QXR0cmlidXRlIiwiT2JqZWN0IiwiYXNzaWduIiwiSlNPTiIsInBhcnNlIiwiZm9ybWF0IiwidG8iLCJ0b0ZpeGVkIiwiTWF0aCIsImZsb29yIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQTs7QUFFQTs7QUFFQSxTQUFTLElBQTBDOztBQUVuRDtBQUNBLFFBQVEsaUNBQU8sRUFBRSxvQ0FBRSxPQUFPO0FBQUE7QUFBQTtBQUFBLG9HQUFDOztBQUUzQixLQUFLLE1BQU0sRUFTTjs7QUFFTCxDQUFDOztBQUVEOztBQUVBOzs7QUFHQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEdBQUcsSUFBSTtBQUNQOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIO0FBQ0E7QUFDQTtBQUNBLEdBQUc7QUFDSDtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQSxzQ0FBc0M7QUFDdEM7QUFDQTtBQUNBO0FBQ0EsSUFBSTs7QUFFSjs7QUFFQSxHQUFHOztBQUVIO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7OztBQUdBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7QUFHQTs7QUFFQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7QUFDQSxHQUFHO0FBQ0g7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7OztBQUdBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQSxtQkFBbUI7O0FBRW5CO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsZ0NBQWdDLDBCQUEwQixFQUFFO0FBQzVELEdBQUc7QUFDSCxnQ0FBZ0Msb0JBQW9CLEVBQUU7QUFDdEQ7OztBQUdBO0FBQ0Esa0JBQWtCLHdCQUF3QjtBQUMxQztBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBLGtCQUFrQiwrQkFBK0I7QUFDakQ7QUFDQTtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0EsZ0JBQWdCLHFHQUFxRztBQUNySCxjQUFjLHFHQUFxRztBQUNuSCxlQUFlO0FBQ2Y7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQSx5QkFBeUI7QUFDekI7QUFDQSxFQUFFOztBQUVGOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBLGVBQWUsb0JBQW9CO0FBQ25DO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBOztBQUVBLG1CQUFtQixvQkFBb0I7QUFDdkM7QUFDQTtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSjtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0EsdUNBQXVDLFVBQVU7O0FBRWpEO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsWUFBWSx3QkFBd0I7QUFDcEMsYUFBYSx3QkFBd0I7QUFDckMsZUFBZSwwQkFBMEI7QUFDekMsaUJBQWlCLDRCQUE0QjtBQUM3QyxZQUFZLHdCQUF3QjtBQUNwQyxlQUFlLDJCQUEyQjtBQUMxQyx5QkFBeUIscUNBQXFDO0FBQzlELGFBQWEsd0JBQXdCO0FBQ3JDLG1CQUFtQiwrQkFBK0I7QUFDbEQsY0FBYywwQkFBMEI7QUFDeEMsYUFBYSx5QkFBeUI7QUFDdEMsZUFBZSwyQkFBMkI7QUFDMUMsaUJBQWlCLDRCQUE0QjtBQUM3QyxrQkFBa0IsOEJBQThCO0FBQ2hELGNBQWMsMEJBQTBCO0FBQ3hDLGdCQUFnQiw0QkFBNEI7QUFDNUMsaUJBQWlCLDRCQUE0QjtBQUM3QyxrQkFBa0I7QUFDbEI7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQSxHQUFHOztBQUVIO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOzs7QUFHQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTs7QUFFQSwrQ0FBK0M7O0FBRS9DO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUEsa0JBQWtCLHFCQUFxQjtBQUN2QztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsR0FBRztBQUNIO0FBQ0E7O0FBRUE7QUFDQTs7O0FBR0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQSxHQUFHO0FBQ0g7OztBQUdBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKLEdBQUc7QUFDSDs7O0FBR0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSjs7QUFFQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQSxLQUFLOztBQUVMOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBLG1EQUFtRCxjQUFjLEVBQUU7O0FBRW5FO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBLGlCQUFpQixXQUFXOztBQUU1QjtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLGdCQUFnQixnQkFBZ0I7O0FBRWhDO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQSx3RUFBd0U7O0FBRXhFO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQSxrRUFBa0UsZ0JBQWdCO0FBQ2xGO0FBQ0EsR0FBRzs7QUFFSDtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBLElBQUk7O0FBRUo7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsOEJBQThCOztBQUU5QjtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLEdBQUc7O0FBRUg7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxHQUFHOztBQUVIO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEdBQUc7O0FBRUg7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsR0FBRztBQUNIOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQSxzQkFBc0IsZ0NBQWdDO0FBQ3REO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSztBQUNMO0FBQ0EsR0FBRztBQUNIOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEtBQUs7QUFDTCxJQUFJO0FBQ0o7O0FBRUE7QUFDQTtBQUNBLHVEQUF1RDtBQUN2RDs7QUFFQTtBQUNBO0FBQ0EsdURBQXVELGNBQWM7QUFDckU7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ04sS0FBSztBQUNMLElBQUk7QUFDSjtBQUNBOztBQUVBLHFEQUFxRDs7QUFFckQ7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxHQUFHO0FBQ0g7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQSxHQUFHO0FBQ0g7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLEdBQUc7O0FBRUg7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSjtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDtBQUNBO0FBQ0E7QUFDQSxHQUFHOztBQUVIOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0EsbURBQW1ELFVBQVU7QUFDN0Q7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQSxHQUFHO0FBQ0g7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRzs7QUFFSDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQSxtRkFBbUY7O0FBRW5GO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxvQ0FBb0MsdUNBQXVDLEVBQUU7QUFDN0U7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBRUE7O0FBRUE7OztBQUdBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUEsQ0FBQyxHOzs7Ozs7Ozs7Ozs7QUMxeUVEO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBRWUsTUFBTUEsV0FBTixTQUEwQkMsK0RBQTFCLENBQW9DO0FBQUE7QUFBQTtBQUFBLFNBQ3JDQyxlQURxQztBQUFBLFNBRXJDQyxXQUZxQztBQUFBLFNBR3JDQyw2QkFIcUMsR0FHRyxDQUhIO0FBQUE7O0FBS3JDQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLSixlQUFMLEdBQW9DSyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLGFBQXJDLEVBQW9ELENBQXBELENBQXBDO0FBQ0EsU0FBS04sV0FBTCxHQUF1Q08sS0FBSyxDQUFDQyxJQUFOLENBQVdKLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0ksZUFBckMsQ0FBWCxDQUF2QztBQUVBLFNBQUtDLFlBQUw7QUFDQSxTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixTQUFLWCxXQUFMLENBQWlCWSxPQUFqQixDQUF5QixDQUFDQyxLQUFELEVBQVFDLEtBQVIsS0FBa0I7QUFDdkNELFdBQUssQ0FBQ0UsZ0JBQU4sQ0FBdUIsUUFBdkIsRUFBa0NDLEtBQUQsSUFBa0I7QUFDL0MsYUFBS0MscUJBQUwsQ0FBMkJILEtBQTNCLEVBQXFERSxLQUFLLENBQUNFLGFBQXpCLENBQXdDQyxLQUExRTtBQUNILE9BRkQ7QUFHSCxLQUpEO0FBTUEsU0FBS0MsV0FBTDtBQUNIOztBQUVTVixjQUFZLEdBQVM7QUFDM0JXLHFEQUFVLENBQUNDLE1BQVgsQ0FBa0IsS0FBS3ZCLGVBQXZCLEVBQXdDLEtBQUt3QixZQUE3QztBQUNIOztBQUVTTix1QkFBcUIsQ0FBQ0gsS0FBRCxFQUFnQkssS0FBaEIsRUFBK0I7QUFDMUQsUUFBTUssV0FBVyxHQUFHLEVBQXBCO0FBQ0FBLGVBQVcsQ0FBQ1YsS0FBRCxDQUFYLEdBQXFCSyxLQUFyQjtBQUNhLFNBQUtwQixlQUFsQixDQUFtQ3NCLFVBQW5DLENBQThDSSxHQUE5QyxDQUFrREQsV0FBbEQ7QUFDSDs7QUFFU0osYUFBVyxHQUFTO0FBQ2IsU0FBS3JCLGVBQWxCLENBQW1Dc0IsVUFBbkMsQ0FBOENLLEVBQTlDLENBQWlELFFBQWpELEVBQTJELENBQUNDLE1BQUQsRUFBU0MsTUFBVCxLQUFvQjtBQUMzRSxXQUFLNUIsV0FBTCxDQUFpQjRCLE1BQWpCLEVBQXlCVCxLQUF6QixHQUFpQ1UsTUFBTSxDQUFDRixNQUFNLENBQUNDLE1BQUQsQ0FBUCxDQUF2QztBQUNILEtBRkQ7QUFHSDs7QUFFMEIsTUFBYnRCLGFBQWEsR0FBVztBQUNsQyxXQUFPLEtBQUt3QixZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBRTRCLE1BQWZyQixlQUFlLEdBQVc7QUFDcEMsV0FBTyxLQUFLcUIsWUFBTCxDQUFrQixtQkFBbEIsQ0FBUDtBQUNIOztBQUV5QixNQUFaUCxZQUFZLEdBQVc7QUFDakMsV0FBT1EsTUFBTSxDQUFDQyxNQUFQLENBQWNDLElBQUksQ0FBQ0MsS0FBTCxDQUFXLEtBQUtKLFlBQUwsQ0FBa0IsZUFBbEIsQ0FBWCxDQUFkLEVBQThEO0FBQ2pFSyxZQUFNLEVBQUU7QUFDSjNCLFlBQUksRUFBR1csS0FBRCxJQUFXQSxLQURiO0FBRUppQixVQUFFLEVBQUdqQixLQUFELElBQVc7QUFDWEEsZUFBSyxHQUNEQSxLQUFLLENBQUNrQixPQUFOLENBQWMsS0FBS3BDLDZCQUFuQixJQUFvRCxDQUFwRCxLQUEwRCxDQUExRCxHQUNNcUMsSUFBSSxDQUFDQyxLQUFMLENBQVdwQixLQUFYLENBRE4sR0FFTUEsS0FBSyxDQUFDa0IsT0FBTixDQUFjLEtBQUtwQyw2QkFBbkIsQ0FIVjtBQUtBLGlCQUFPa0IsS0FBUDtBQUNIO0FBVEc7QUFEeUQsS0FBOUQsQ0FBUDtBQWFIOztBQS9EOEMsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5yYW5nZS1zbGlkZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiEgbm91aXNsaWRlciAtIDExLjEuMCAtIDIwMTgtMDQtMDIgMTE6MTg6MTMgKi9cclxuXHJcbihmdW5jdGlvbiAoZmFjdG9yeSkge1xyXG5cclxuICAgIGlmICggdHlwZW9mIGRlZmluZSA9PT0gJ2Z1bmN0aW9uJyAmJiBkZWZpbmUuYW1kICkge1xyXG5cclxuICAgICAgICAvLyBBTUQuIFJlZ2lzdGVyIGFzIGFuIGFub255bW91cyBtb2R1bGUuXHJcbiAgICAgICAgZGVmaW5lKFtdLCBmYWN0b3J5KTtcclxuXHJcbiAgICB9IGVsc2UgaWYgKCB0eXBlb2YgZXhwb3J0cyA9PT0gJ29iamVjdCcgKSB7XHJcblxyXG4gICAgICAgIC8vIE5vZGUvQ29tbW9uSlNcclxuICAgICAgICBtb2R1bGUuZXhwb3J0cyA9IGZhY3RvcnkoKTtcclxuXHJcbiAgICB9IGVsc2Uge1xyXG5cclxuICAgICAgICAvLyBCcm93c2VyIGdsb2JhbHNcclxuICAgICAgICB3aW5kb3cubm9VaVNsaWRlciA9IGZhY3RvcnkoKTtcclxuICAgIH1cclxuXHJcbn0oZnVuY3Rpb24oICl7XHJcblxyXG5cdCd1c2Ugc3RyaWN0JztcclxuXHJcblx0dmFyIFZFUlNJT04gPSAnMTEuMS4wJztcclxuXHJcblxuXHRmdW5jdGlvbiBpc1ZhbGlkRm9ybWF0dGVyICggZW50cnkgKSB7XG5cdFx0cmV0dXJuIHR5cGVvZiBlbnRyeSA9PT0gJ29iamVjdCcgJiYgdHlwZW9mIGVudHJ5LnRvID09PSAnZnVuY3Rpb24nICYmIHR5cGVvZiBlbnRyeS5mcm9tID09PSAnZnVuY3Rpb24nO1xuXHR9XG5cblx0ZnVuY3Rpb24gcmVtb3ZlRWxlbWVudCAoIGVsICkge1xuXHRcdGVsLnBhcmVudEVsZW1lbnQucmVtb3ZlQ2hpbGQoZWwpO1xuXHR9XG5cblx0ZnVuY3Rpb24gaXNTZXQgKCB2YWx1ZSApIHtcblx0XHRyZXR1cm4gdmFsdWUgIT09IG51bGwgJiYgdmFsdWUgIT09IHVuZGVmaW5lZDtcblx0fVxuXG5cdC8vIEJpbmRhYmxlIHZlcnNpb25cblx0ZnVuY3Rpb24gcHJldmVudERlZmF1bHQgKCBlICkge1xuXHRcdGUucHJldmVudERlZmF1bHQoKTtcblx0fVxuXG5cdC8vIFJlbW92ZXMgZHVwbGljYXRlcyBmcm9tIGFuIGFycmF5LlxuXHRmdW5jdGlvbiB1bmlxdWUgKCBhcnJheSApIHtcblx0XHRyZXR1cm4gYXJyYXkuZmlsdGVyKGZ1bmN0aW9uKGEpe1xuXHRcdFx0cmV0dXJuICF0aGlzW2FdID8gdGhpc1thXSA9IHRydWUgOiBmYWxzZTtcblx0XHR9LCB7fSk7XG5cdH1cblxuXHQvLyBSb3VuZCBhIHZhbHVlIHRvIHRoZSBjbG9zZXN0ICd0bycuXG5cdGZ1bmN0aW9uIGNsb3Nlc3QgKCB2YWx1ZSwgdG8gKSB7XG5cdFx0cmV0dXJuIE1hdGgucm91bmQodmFsdWUgLyB0bykgKiB0bztcblx0fVxuXG5cdC8vIEN1cnJlbnQgcG9zaXRpb24gb2YgYW4gZWxlbWVudCByZWxhdGl2ZSB0byB0aGUgZG9jdW1lbnQuXG5cdGZ1bmN0aW9uIG9mZnNldCAoIGVsZW0sIG9yaWVudGF0aW9uICkge1xuXG5cdFx0dmFyIHJlY3QgPSBlbGVtLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuXHRcdHZhciBkb2MgPSBlbGVtLm93bmVyRG9jdW1lbnQ7XG5cdFx0dmFyIGRvY0VsZW0gPSBkb2MuZG9jdW1lbnRFbGVtZW50O1xuXHRcdHZhciBwYWdlT2Zmc2V0ID0gZ2V0UGFnZU9mZnNldChkb2MpO1xuXG5cdFx0Ly8gZ2V0Qm91bmRpbmdDbGllbnRSZWN0IGNvbnRhaW5zIGxlZnQgc2Nyb2xsIGluIENocm9tZSBvbiBBbmRyb2lkLlxuXHRcdC8vIEkgaGF2ZW4ndCBmb3VuZCBhIGZlYXR1cmUgZGV0ZWN0aW9uIHRoYXQgcHJvdmVzIHRoaXMuIFdvcnN0IGNhc2Vcblx0XHQvLyBzY2VuYXJpbyBvbiBtaXMtbWF0Y2g6IHRoZSAndGFwJyBmZWF0dXJlIG9uIGhvcml6b250YWwgc2xpZGVycyBicmVha3MuXG5cdFx0aWYgKCAvd2Via2l0LipDaHJvbWUuKk1vYmlsZS9pLnRlc3QobmF2aWdhdG9yLnVzZXJBZ2VudCkgKSB7XG5cdFx0XHRwYWdlT2Zmc2V0LnggPSAwO1xuXHRcdH1cblxuXHRcdHJldHVybiBvcmllbnRhdGlvbiA/IChyZWN0LnRvcCArIHBhZ2VPZmZzZXQueSAtIGRvY0VsZW0uY2xpZW50VG9wKSA6IChyZWN0LmxlZnQgKyBwYWdlT2Zmc2V0LnggLSBkb2NFbGVtLmNsaWVudExlZnQpO1xuXHR9XG5cblx0Ly8gQ2hlY2tzIHdoZXRoZXIgYSB2YWx1ZSBpcyBudW1lcmljYWwuXG5cdGZ1bmN0aW9uIGlzTnVtZXJpYyAoIGEgKSB7XG5cdFx0cmV0dXJuIHR5cGVvZiBhID09PSAnbnVtYmVyJyAmJiAhaXNOYU4oIGEgKSAmJiBpc0Zpbml0ZSggYSApO1xuXHR9XG5cblx0Ly8gU2V0cyBhIGNsYXNzIGFuZCByZW1vdmVzIGl0IGFmdGVyIFtkdXJhdGlvbl0gbXMuXG5cdGZ1bmN0aW9uIGFkZENsYXNzRm9yICggZWxlbWVudCwgY2xhc3NOYW1lLCBkdXJhdGlvbiApIHtcblx0XHRpZiAoZHVyYXRpb24gPiAwKSB7XG5cdFx0YWRkQ2xhc3MoZWxlbWVudCwgY2xhc3NOYW1lKTtcblx0XHRcdHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcblx0XHRcdFx0cmVtb3ZlQ2xhc3MoZWxlbWVudCwgY2xhc3NOYW1lKTtcblx0XHRcdH0sIGR1cmF0aW9uKTtcblx0XHR9XG5cdH1cblxuXHQvLyBMaW1pdHMgYSB2YWx1ZSB0byAwIC0gMTAwXG5cdGZ1bmN0aW9uIGxpbWl0ICggYSApIHtcblx0XHRyZXR1cm4gTWF0aC5tYXgoTWF0aC5taW4oYSwgMTAwKSwgMCk7XG5cdH1cblxuXHQvLyBXcmFwcyBhIHZhcmlhYmxlIGFzIGFuIGFycmF5LCBpZiBpdCBpc24ndCBvbmUgeWV0LlxuXHQvLyBOb3RlIHRoYXQgYW4gaW5wdXQgYXJyYXkgaXMgcmV0dXJuZWQgYnkgcmVmZXJlbmNlIVxuXHRmdW5jdGlvbiBhc0FycmF5ICggYSApIHtcblx0XHRyZXR1cm4gQXJyYXkuaXNBcnJheShhKSA/IGEgOiBbYV07XG5cdH1cblxuXHQvLyBDb3VudHMgZGVjaW1hbHNcblx0ZnVuY3Rpb24gY291bnREZWNpbWFscyAoIG51bVN0ciApIHtcblx0XHRudW1TdHIgPSBTdHJpbmcobnVtU3RyKTtcblx0XHR2YXIgcGllY2VzID0gbnVtU3RyLnNwbGl0KFwiLlwiKTtcblx0XHRyZXR1cm4gcGllY2VzLmxlbmd0aCA+IDEgPyBwaWVjZXNbMV0ubGVuZ3RoIDogMDtcblx0fVxuXG5cdC8vIGh0dHA6Ly95b3VtaWdodG5vdG5lZWRqcXVlcnkuY29tLyNhZGRfY2xhc3Ncblx0ZnVuY3Rpb24gYWRkQ2xhc3MgKCBlbCwgY2xhc3NOYW1lICkge1xuXHRcdGlmICggZWwuY2xhc3NMaXN0ICkge1xuXHRcdFx0ZWwuY2xhc3NMaXN0LmFkZChjbGFzc05hbWUpO1xuXHRcdH0gZWxzZSB7XG5cdFx0XHRlbC5jbGFzc05hbWUgKz0gJyAnICsgY2xhc3NOYW1lO1xuXHRcdH1cblx0fVxuXG5cdC8vIGh0dHA6Ly95b3VtaWdodG5vdG5lZWRqcXVlcnkuY29tLyNyZW1vdmVfY2xhc3Ncblx0ZnVuY3Rpb24gcmVtb3ZlQ2xhc3MgKCBlbCwgY2xhc3NOYW1lICkge1xuXHRcdGlmICggZWwuY2xhc3NMaXN0ICkge1xuXHRcdFx0ZWwuY2xhc3NMaXN0LnJlbW92ZShjbGFzc05hbWUpO1xuXHRcdH0gZWxzZSB7XG5cdFx0XHRlbC5jbGFzc05hbWUgPSBlbC5jbGFzc05hbWUucmVwbGFjZShuZXcgUmVnRXhwKCcoXnxcXFxcYiknICsgY2xhc3NOYW1lLnNwbGl0KCcgJykuam9pbignfCcpICsgJyhcXFxcYnwkKScsICdnaScpLCAnICcpO1xuXHRcdH1cblx0fVxuXG5cdC8vIGh0dHBzOi8vcGxhaW5qcy5jb20vamF2YXNjcmlwdC9hdHRyaWJ1dGVzL2FkZGluZy1yZW1vdmluZy1hbmQtdGVzdGluZy1mb3ItY2xhc3Nlcy05L1xuXHRmdW5jdGlvbiBoYXNDbGFzcyAoIGVsLCBjbGFzc05hbWUgKSB7XG5cdFx0cmV0dXJuIGVsLmNsYXNzTGlzdCA/IGVsLmNsYXNzTGlzdC5jb250YWlucyhjbGFzc05hbWUpIDogbmV3IFJlZ0V4cCgnXFxcXGInICsgY2xhc3NOYW1lICsgJ1xcXFxiJykudGVzdChlbC5jbGFzc05hbWUpO1xuXHR9XG5cblx0Ly8gaHR0cHM6Ly9kZXZlbG9wZXIubW96aWxsYS5vcmcvZW4tVVMvZG9jcy9XZWIvQVBJL1dpbmRvdy9zY3JvbGxZI05vdGVzXG5cdGZ1bmN0aW9uIGdldFBhZ2VPZmZzZXQgKCBkb2MgKSB7XG5cblx0XHR2YXIgc3VwcG9ydFBhZ2VPZmZzZXQgPSB3aW5kb3cucGFnZVhPZmZzZXQgIT09IHVuZGVmaW5lZDtcblx0XHR2YXIgaXNDU1MxQ29tcGF0ID0gKChkb2MuY29tcGF0TW9kZSB8fCBcIlwiKSA9PT0gXCJDU1MxQ29tcGF0XCIpO1xuXHRcdHZhciB4ID0gc3VwcG9ydFBhZ2VPZmZzZXQgPyB3aW5kb3cucGFnZVhPZmZzZXQgOiBpc0NTUzFDb21wYXQgPyBkb2MuZG9jdW1lbnRFbGVtZW50LnNjcm9sbExlZnQgOiBkb2MuYm9keS5zY3JvbGxMZWZ0O1xuXHRcdHZhciB5ID0gc3VwcG9ydFBhZ2VPZmZzZXQgPyB3aW5kb3cucGFnZVlPZmZzZXQgOiBpc0NTUzFDb21wYXQgPyBkb2MuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCA6IGRvYy5ib2R5LnNjcm9sbFRvcDtcblxuXHRcdHJldHVybiB7XG5cdFx0XHR4OiB4LFxuXHRcdFx0eTogeVxuXHRcdH07XG5cdH1cblxyXG5cdC8vIHdlIHByb3ZpZGUgYSBmdW5jdGlvbiB0byBjb21wdXRlIGNvbnN0YW50cyBpbnN0ZWFkXHJcblx0Ly8gb2YgYWNjZXNzaW5nIHdpbmRvdy4qIGFzIHNvb24gYXMgdGhlIG1vZHVsZSBuZWVkcyBpdFxyXG5cdC8vIHNvIHRoYXQgd2UgZG8gbm90IGNvbXB1dGUgYW55dGhpbmcgaWYgbm90IG5lZWRlZFxyXG5cdGZ1bmN0aW9uIGdldEFjdGlvbnMgKCApIHtcclxuXHJcblx0XHQvLyBEZXRlcm1pbmUgdGhlIGV2ZW50cyB0byBiaW5kLiBJRTExIGltcGxlbWVudHMgcG9pbnRlckV2ZW50cyB3aXRob3V0XHJcblx0XHQvLyBhIHByZWZpeCwgd2hpY2ggYnJlYWtzIGNvbXBhdGliaWxpdHkgd2l0aCB0aGUgSUUxMCBpbXBsZW1lbnRhdGlvbi5cclxuXHRcdHJldHVybiB3aW5kb3cubmF2aWdhdG9yLnBvaW50ZXJFbmFibGVkID8ge1xyXG5cdFx0XHRzdGFydDogJ3BvaW50ZXJkb3duJyxcclxuXHRcdFx0bW92ZTogJ3BvaW50ZXJtb3ZlJyxcclxuXHRcdFx0ZW5kOiAncG9pbnRlcnVwJ1xyXG5cdFx0fSA6IHdpbmRvdy5uYXZpZ2F0b3IubXNQb2ludGVyRW5hYmxlZCA/IHtcclxuXHRcdFx0c3RhcnQ6ICdNU1BvaW50ZXJEb3duJyxcclxuXHRcdFx0bW92ZTogJ01TUG9pbnRlck1vdmUnLFxyXG5cdFx0XHRlbmQ6ICdNU1BvaW50ZXJVcCdcclxuXHRcdH0gOiB7XHJcblx0XHRcdHN0YXJ0OiAnbW91c2Vkb3duIHRvdWNoc3RhcnQnLFxyXG5cdFx0XHRtb3ZlOiAnbW91c2Vtb3ZlIHRvdWNobW92ZScsXHJcblx0XHRcdGVuZDogJ21vdXNldXAgdG91Y2hlbmQnXHJcblx0XHR9O1xyXG5cdH1cclxuXHJcblx0Ly8gaHR0cHM6Ly9naXRodWIuY29tL1dJQ0cvRXZlbnRMaXN0ZW5lck9wdGlvbnMvYmxvYi9naC1wYWdlcy9leHBsYWluZXIubWRcclxuXHQvLyBJc3N1ZSAjNzg1XHJcblx0ZnVuY3Rpb24gZ2V0U3VwcG9ydHNQYXNzaXZlICggKSB7XHJcblxyXG5cdFx0dmFyIHN1cHBvcnRzUGFzc2l2ZSA9IGZhbHNlO1xyXG5cclxuXHRcdHRyeSB7XHJcblxyXG5cdFx0XHR2YXIgb3B0cyA9IE9iamVjdC5kZWZpbmVQcm9wZXJ0eSh7fSwgJ3Bhc3NpdmUnLCB7XHJcblx0XHRcdFx0Z2V0OiBmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdHN1cHBvcnRzUGFzc2l2ZSA9IHRydWU7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9KTtcclxuXHJcblx0XHRcdHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCd0ZXN0JywgbnVsbCwgb3B0cyk7XHJcblxyXG5cdFx0fSBjYXRjaCAoZSkge31cclxuXHJcblx0XHRyZXR1cm4gc3VwcG9ydHNQYXNzaXZlO1xyXG5cdH1cclxuXHJcblx0ZnVuY3Rpb24gZ2V0U3VwcG9ydHNUb3VjaEFjdGlvbk5vbmUgKCApIHtcclxuXHRcdHJldHVybiB3aW5kb3cuQ1NTICYmIENTUy5zdXBwb3J0cyAmJiBDU1Muc3VwcG9ydHMoJ3RvdWNoLWFjdGlvbicsICdub25lJyk7XHJcblx0fVxyXG5cclxuXHJcbi8vIFZhbHVlIGNhbGN1bGF0aW9uXHJcblxyXG5cdC8vIERldGVybWluZSB0aGUgc2l6ZSBvZiBhIHN1Yi1yYW5nZSBpbiByZWxhdGlvbiB0byBhIGZ1bGwgcmFuZ2UuXHJcblx0ZnVuY3Rpb24gc3ViUmFuZ2VSYXRpbyAoIHBhLCBwYiApIHtcclxuXHRcdHJldHVybiAoMTAwIC8gKHBiIC0gcGEpKTtcclxuXHR9XHJcblxyXG5cdC8vIChwZXJjZW50YWdlKSBIb3cgbWFueSBwZXJjZW50IGlzIHRoaXMgdmFsdWUgb2YgdGhpcyByYW5nZT9cclxuXHRmdW5jdGlvbiBmcm9tUGVyY2VudGFnZSAoIHJhbmdlLCB2YWx1ZSApIHtcclxuXHRcdHJldHVybiAodmFsdWUgKiAxMDApIC8gKCByYW5nZVsxXSAtIHJhbmdlWzBdICk7XHJcblx0fVxyXG5cclxuXHQvLyAocGVyY2VudGFnZSkgV2hlcmUgaXMgdGhpcyB2YWx1ZSBvbiB0aGlzIHJhbmdlP1xyXG5cdGZ1bmN0aW9uIHRvUGVyY2VudGFnZSAoIHJhbmdlLCB2YWx1ZSApIHtcclxuXHRcdHJldHVybiBmcm9tUGVyY2VudGFnZSggcmFuZ2UsIHJhbmdlWzBdIDwgMCA/XHJcblx0XHRcdHZhbHVlICsgTWF0aC5hYnMocmFuZ2VbMF0pIDpcclxuXHRcdFx0XHR2YWx1ZSAtIHJhbmdlWzBdICk7XHJcblx0fVxyXG5cclxuXHQvLyAodmFsdWUpIEhvdyBtdWNoIGlzIHRoaXMgcGVyY2VudGFnZSBvbiB0aGlzIHJhbmdlP1xyXG5cdGZ1bmN0aW9uIGlzUGVyY2VudGFnZSAoIHJhbmdlLCB2YWx1ZSApIHtcclxuXHRcdHJldHVybiAoKHZhbHVlICogKCByYW5nZVsxXSAtIHJhbmdlWzBdICkpIC8gMTAwKSArIHJhbmdlWzBdO1xyXG5cdH1cclxuXHJcblxyXG4vLyBSYW5nZSBjb252ZXJzaW9uXHJcblxyXG5cdGZ1bmN0aW9uIGdldEogKCB2YWx1ZSwgYXJyICkge1xyXG5cclxuXHRcdHZhciBqID0gMTtcclxuXHJcblx0XHR3aGlsZSAoIHZhbHVlID49IGFycltqXSApe1xyXG5cdFx0XHRqICs9IDE7XHJcblx0XHR9XHJcblxyXG5cdFx0cmV0dXJuIGo7XHJcblx0fVxyXG5cclxuXHQvLyAocGVyY2VudGFnZSkgSW5wdXQgYSB2YWx1ZSwgZmluZCB3aGVyZSwgb24gYSBzY2FsZSBvZiAwLTEwMCwgaXQgYXBwbGllcy5cclxuXHRmdW5jdGlvbiB0b1N0ZXBwaW5nICggeFZhbCwgeFBjdCwgdmFsdWUgKSB7XHJcblxyXG5cdFx0aWYgKCB2YWx1ZSA+PSB4VmFsLnNsaWNlKC0xKVswXSApe1xyXG5cdFx0XHRyZXR1cm4gMTAwO1xyXG5cdFx0fVxyXG5cclxuXHRcdHZhciBqID0gZ2V0SiggdmFsdWUsIHhWYWwgKTtcclxuXHRcdHZhciB2YSA9IHhWYWxbai0xXTtcclxuXHRcdHZhciB2YiA9IHhWYWxbal07XHJcblx0XHR2YXIgcGEgPSB4UGN0W2otMV07XHJcblx0XHR2YXIgcGIgPSB4UGN0W2pdO1xyXG5cclxuXHRcdHJldHVybiBwYSArICh0b1BlcmNlbnRhZ2UoW3ZhLCB2Yl0sIHZhbHVlKSAvIHN1YlJhbmdlUmF0aW8gKHBhLCBwYikpO1xyXG5cdH1cclxuXHJcblx0Ly8gKHZhbHVlKSBJbnB1dCBhIHBlcmNlbnRhZ2UsIGZpbmQgd2hlcmUgaXQgaXMgb24gdGhlIHNwZWNpZmllZCByYW5nZS5cclxuXHRmdW5jdGlvbiBmcm9tU3RlcHBpbmcgKCB4VmFsLCB4UGN0LCB2YWx1ZSApIHtcclxuXHJcblx0XHQvLyBUaGVyZSBpcyBubyByYW5nZSBncm91cCB0aGF0IGZpdHMgMTAwXHJcblx0XHRpZiAoIHZhbHVlID49IDEwMCApe1xyXG5cdFx0XHRyZXR1cm4geFZhbC5zbGljZSgtMSlbMF07XHJcblx0XHR9XHJcblxyXG5cdFx0dmFyIGogPSBnZXRKKCB2YWx1ZSwgeFBjdCApO1xyXG5cdFx0dmFyIHZhID0geFZhbFtqLTFdO1xyXG5cdFx0dmFyIHZiID0geFZhbFtqXTtcclxuXHRcdHZhciBwYSA9IHhQY3Rbai0xXTtcclxuXHRcdHZhciBwYiA9IHhQY3Rbal07XHJcblxyXG5cdFx0cmV0dXJuIGlzUGVyY2VudGFnZShbdmEsIHZiXSwgKHZhbHVlIC0gcGEpICogc3ViUmFuZ2VSYXRpbyAocGEsIHBiKSk7XHJcblx0fVxyXG5cclxuXHQvLyAocGVyY2VudGFnZSkgR2V0IHRoZSBzdGVwIHRoYXQgYXBwbGllcyBhdCBhIGNlcnRhaW4gdmFsdWUuXHJcblx0ZnVuY3Rpb24gZ2V0U3RlcCAoIHhQY3QsIHhTdGVwcywgc25hcCwgdmFsdWUgKSB7XHJcblxyXG5cdFx0aWYgKCB2YWx1ZSA9PT0gMTAwICkge1xyXG5cdFx0XHRyZXR1cm4gdmFsdWU7XHJcblx0XHR9XHJcblxyXG5cdFx0dmFyIGogPSBnZXRKKCB2YWx1ZSwgeFBjdCApO1xyXG5cdFx0dmFyIGEgPSB4UGN0W2otMV07XHJcblx0XHR2YXIgYiA9IHhQY3Rbal07XHJcblxyXG5cdFx0Ly8gSWYgJ3NuYXAnIGlzIHNldCwgc3RlcHMgYXJlIHVzZWQgYXMgZml4ZWQgcG9pbnRzIG9uIHRoZSBzbGlkZXIuXHJcblx0XHRpZiAoIHNuYXAgKSB7XHJcblxyXG5cdFx0XHQvLyBGaW5kIHRoZSBjbG9zZXN0IHBvc2l0aW9uLCBhIG9yIGIuXHJcblx0XHRcdGlmICgodmFsdWUgLSBhKSA+ICgoYi1hKS8yKSl7XHJcblx0XHRcdFx0cmV0dXJuIGI7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdHJldHVybiBhO1xyXG5cdFx0fVxyXG5cclxuXHRcdGlmICggIXhTdGVwc1tqLTFdICl7XHJcblx0XHRcdHJldHVybiB2YWx1ZTtcclxuXHRcdH1cclxuXHJcblx0XHRyZXR1cm4geFBjdFtqLTFdICsgY2xvc2VzdChcclxuXHRcdFx0dmFsdWUgLSB4UGN0W2otMV0sXHJcblx0XHRcdHhTdGVwc1tqLTFdXHJcblx0XHQpO1xyXG5cdH1cclxuXHJcblxyXG4vLyBFbnRyeSBwYXJzaW5nXHJcblxyXG5cdGZ1bmN0aW9uIGhhbmRsZUVudHJ5UG9pbnQgKCBpbmRleCwgdmFsdWUsIHRoYXQgKSB7XHJcblxyXG5cdFx0dmFyIHBlcmNlbnRhZ2U7XHJcblxyXG5cdFx0Ly8gV3JhcCBudW1lcmljYWwgaW5wdXQgaW4gYW4gYXJyYXkuXHJcblx0XHRpZiAoIHR5cGVvZiB2YWx1ZSA9PT0gXCJudW1iZXJcIiApIHtcclxuXHRcdFx0dmFsdWUgPSBbdmFsdWVdO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIFJlamVjdCBhbnkgaW52YWxpZCBpbnB1dCwgYnkgdGVzdGluZyB3aGV0aGVyIHZhbHVlIGlzIGFuIGFycmF5LlxyXG5cdFx0aWYgKCAhQXJyYXkuaXNBcnJheSh2YWx1ZSkgKXtcclxuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAncmFuZ2UnIGNvbnRhaW5zIGludmFsaWQgdmFsdWUuXCIpO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIENvdmVydCBtaW4vbWF4IHN5bnRheCB0byAwIGFuZCAxMDAuXHJcblx0XHRpZiAoIGluZGV4ID09PSAnbWluJyApIHtcclxuXHRcdFx0cGVyY2VudGFnZSA9IDA7XHJcblx0XHR9IGVsc2UgaWYgKCBpbmRleCA9PT0gJ21heCcgKSB7XHJcblx0XHRcdHBlcmNlbnRhZ2UgPSAxMDA7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRwZXJjZW50YWdlID0gcGFyc2VGbG9hdCggaW5kZXggKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBDaGVjayBmb3IgY29ycmVjdCBpbnB1dC5cclxuXHRcdGlmICggIWlzTnVtZXJpYyggcGVyY2VudGFnZSApIHx8ICFpc051bWVyaWMoIHZhbHVlWzBdICkgKSB7XHJcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ3JhbmdlJyB2YWx1ZSBpc24ndCBudW1lcmljLlwiKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBTdG9yZSB2YWx1ZXMuXHJcblx0XHR0aGF0LnhQY3QucHVzaCggcGVyY2VudGFnZSApO1xyXG5cdFx0dGhhdC54VmFsLnB1c2goIHZhbHVlWzBdICk7XHJcblxyXG5cdFx0Ly8gTmFOIHdpbGwgZXZhbHVhdGUgdG8gZmFsc2UgdG9vLCBidXQgdG8ga2VlcFxyXG5cdFx0Ly8gbG9nZ2luZyBjbGVhciwgc2V0IHN0ZXAgZXhwbGljaXRseS4gTWFrZSBzdXJlXHJcblx0XHQvLyBub3QgdG8gb3ZlcnJpZGUgdGhlICdzdGVwJyBzZXR0aW5nIHdpdGggZmFsc2UuXHJcblx0XHRpZiAoICFwZXJjZW50YWdlICkge1xyXG5cdFx0XHRpZiAoICFpc05hTiggdmFsdWVbMV0gKSApIHtcclxuXHRcdFx0XHR0aGF0LnhTdGVwc1swXSA9IHZhbHVlWzFdO1xyXG5cdFx0XHR9XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHR0aGF0LnhTdGVwcy5wdXNoKCBpc05hTih2YWx1ZVsxXSkgPyBmYWxzZSA6IHZhbHVlWzFdICk7XHJcblx0XHR9XHJcblxyXG5cdFx0dGhhdC54SGlnaGVzdENvbXBsZXRlU3RlcC5wdXNoKDApO1xyXG5cdH1cclxuXHJcblx0ZnVuY3Rpb24gaGFuZGxlU3RlcFBvaW50ICggaSwgbiwgdGhhdCApIHtcclxuXHJcblx0XHQvLyBJZ25vcmUgJ2ZhbHNlJyBzdGVwcGluZy5cclxuXHRcdGlmICggIW4gKSB7XHJcblx0XHRcdHJldHVybiB0cnVlO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEZhY3RvciB0byByYW5nZSByYXRpb1xyXG5cdFx0dGhhdC54U3RlcHNbaV0gPSBmcm9tUGVyY2VudGFnZShbdGhhdC54VmFsW2ldLCB0aGF0LnhWYWxbaSsxXV0sIG4pIC8gc3ViUmFuZ2VSYXRpbyh0aGF0LnhQY3RbaV0sIHRoYXQueFBjdFtpKzFdKTtcclxuXHJcblx0XHR2YXIgdG90YWxTdGVwcyA9ICh0aGF0LnhWYWxbaSsxXSAtIHRoYXQueFZhbFtpXSkgLyB0aGF0LnhOdW1TdGVwc1tpXTtcclxuXHRcdHZhciBoaWdoZXN0U3RlcCA9IE1hdGguY2VpbChOdW1iZXIodG90YWxTdGVwcy50b0ZpeGVkKDMpKSAtIDEpO1xyXG5cdFx0dmFyIHN0ZXAgPSB0aGF0LnhWYWxbaV0gKyAodGhhdC54TnVtU3RlcHNbaV0gKiBoaWdoZXN0U3RlcCk7XHJcblxyXG5cdFx0dGhhdC54SGlnaGVzdENvbXBsZXRlU3RlcFtpXSA9IHN0ZXA7XHJcblx0fVxyXG5cclxuXHJcbi8vIEludGVyZmFjZVxyXG5cclxuXHRmdW5jdGlvbiBTcGVjdHJ1bSAoIGVudHJ5LCBzbmFwLCBzaW5nbGVTdGVwICkge1xyXG5cclxuXHRcdHRoaXMueFBjdCA9IFtdO1xyXG5cdFx0dGhpcy54VmFsID0gW107XHJcblx0XHR0aGlzLnhTdGVwcyA9IFsgc2luZ2xlU3RlcCB8fCBmYWxzZSBdO1xyXG5cdFx0dGhpcy54TnVtU3RlcHMgPSBbIGZhbHNlIF07XHJcblx0XHR0aGlzLnhIaWdoZXN0Q29tcGxldGVTdGVwID0gW107XHJcblxyXG5cdFx0dGhpcy5zbmFwID0gc25hcDtcclxuXHJcblx0XHR2YXIgaW5kZXg7XHJcblx0XHR2YXIgb3JkZXJlZCA9IFtdOyAvLyBbMCwgJ21pbiddLCBbMSwgJzUwJSddLCBbMiwgJ21heCddXHJcblxyXG5cdFx0Ly8gTWFwIHRoZSBvYmplY3Qga2V5cyB0byBhbiBhcnJheS5cclxuXHRcdGZvciAoIGluZGV4IGluIGVudHJ5ICkge1xyXG5cdFx0XHRpZiAoIGVudHJ5Lmhhc093blByb3BlcnR5KGluZGV4KSApIHtcclxuXHRcdFx0XHRvcmRlcmVkLnB1c2goW2VudHJ5W2luZGV4XSwgaW5kZXhdKTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdC8vIFNvcnQgYWxsIGVudHJpZXMgYnkgdmFsdWUgKG51bWVyaWMgc29ydCkuXHJcblx0XHRpZiAoIG9yZGVyZWQubGVuZ3RoICYmIHR5cGVvZiBvcmRlcmVkWzBdWzBdID09PSBcIm9iamVjdFwiICkge1xyXG5cdFx0XHRvcmRlcmVkLnNvcnQoZnVuY3Rpb24oYSwgYikgeyByZXR1cm4gYVswXVswXSAtIGJbMF1bMF07IH0pO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0b3JkZXJlZC5zb3J0KGZ1bmN0aW9uKGEsIGIpIHsgcmV0dXJuIGFbMF0gLSBiWzBdOyB9KTtcclxuXHRcdH1cclxuXHJcblxyXG5cdFx0Ly8gQ29udmVydCBhbGwgZW50cmllcyB0byBzdWJyYW5nZXMuXHJcblx0XHRmb3IgKCBpbmRleCA9IDA7IGluZGV4IDwgb3JkZXJlZC5sZW5ndGg7IGluZGV4KysgKSB7XHJcblx0XHRcdGhhbmRsZUVudHJ5UG9pbnQob3JkZXJlZFtpbmRleF1bMV0sIG9yZGVyZWRbaW5kZXhdWzBdLCB0aGlzKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBTdG9yZSB0aGUgYWN0dWFsIHN0ZXAgdmFsdWVzLlxyXG5cdFx0Ly8geFN0ZXBzIGlzIHNvcnRlZCBpbiB0aGUgc2FtZSBvcmRlciBhcyB4UGN0IGFuZCB4VmFsLlxyXG5cdFx0dGhpcy54TnVtU3RlcHMgPSB0aGlzLnhTdGVwcy5zbGljZSgwKTtcclxuXHJcblx0XHQvLyBDb252ZXJ0IGFsbCBudW1lcmljIHN0ZXBzIHRvIHRoZSBwZXJjZW50YWdlIG9mIHRoZSBzdWJyYW5nZSB0aGV5IHJlcHJlc2VudC5cclxuXHRcdGZvciAoIGluZGV4ID0gMDsgaW5kZXggPCB0aGlzLnhOdW1TdGVwcy5sZW5ndGg7IGluZGV4KysgKSB7XHJcblx0XHRcdGhhbmRsZVN0ZXBQb2ludChpbmRleCwgdGhpcy54TnVtU3RlcHNbaW5kZXhdLCB0aGlzKTtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdFNwZWN0cnVtLnByb3RvdHlwZS5nZXRNYXJnaW4gPSBmdW5jdGlvbiAoIHZhbHVlICkge1xyXG5cclxuXHRcdHZhciBzdGVwID0gdGhpcy54TnVtU3RlcHNbMF07XHJcblxyXG5cdFx0aWYgKCBzdGVwICYmICgodmFsdWUgLyBzdGVwKSAlIDEpICE9PSAwICkge1xyXG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdsaW1pdCcsICdtYXJnaW4nIGFuZCAncGFkZGluZycgbXVzdCBiZSBkaXZpc2libGUgYnkgc3RlcC5cIik7XHJcblx0XHR9XHJcblxyXG5cdFx0cmV0dXJuIHRoaXMueFBjdC5sZW5ndGggPT09IDIgPyBmcm9tUGVyY2VudGFnZSh0aGlzLnhWYWwsIHZhbHVlKSA6IGZhbHNlO1xyXG5cdH07XHJcblxyXG5cdFNwZWN0cnVtLnByb3RvdHlwZS50b1N0ZXBwaW5nID0gZnVuY3Rpb24gKCB2YWx1ZSApIHtcclxuXHJcblx0XHR2YWx1ZSA9IHRvU3RlcHBpbmcoIHRoaXMueFZhbCwgdGhpcy54UGN0LCB2YWx1ZSApO1xyXG5cclxuXHRcdHJldHVybiB2YWx1ZTtcclxuXHR9O1xyXG5cclxuXHRTcGVjdHJ1bS5wcm90b3R5cGUuZnJvbVN0ZXBwaW5nID0gZnVuY3Rpb24gKCB2YWx1ZSApIHtcclxuXHJcblx0XHRyZXR1cm4gZnJvbVN0ZXBwaW5nKCB0aGlzLnhWYWwsIHRoaXMueFBjdCwgdmFsdWUgKTtcclxuXHR9O1xyXG5cclxuXHRTcGVjdHJ1bS5wcm90b3R5cGUuZ2V0U3RlcCA9IGZ1bmN0aW9uICggdmFsdWUgKSB7XHJcblxyXG5cdFx0dmFsdWUgPSBnZXRTdGVwKHRoaXMueFBjdCwgdGhpcy54U3RlcHMsIHRoaXMuc25hcCwgdmFsdWUgKTtcclxuXHJcblx0XHRyZXR1cm4gdmFsdWU7XHJcblx0fTtcclxuXHJcblx0U3BlY3RydW0ucHJvdG90eXBlLmdldE5lYXJieVN0ZXBzID0gZnVuY3Rpb24gKCB2YWx1ZSApIHtcclxuXHJcblx0XHR2YXIgaiA9IGdldEoodmFsdWUsIHRoaXMueFBjdCk7XHJcblxyXG5cdFx0cmV0dXJuIHtcclxuXHRcdFx0c3RlcEJlZm9yZTogeyBzdGFydFZhbHVlOiB0aGlzLnhWYWxbai0yXSwgc3RlcDogdGhpcy54TnVtU3RlcHNbai0yXSwgaGlnaGVzdFN0ZXA6IHRoaXMueEhpZ2hlc3RDb21wbGV0ZVN0ZXBbai0yXSB9LFxyXG5cdFx0XHR0aGlzU3RlcDogeyBzdGFydFZhbHVlOiB0aGlzLnhWYWxbai0xXSwgc3RlcDogdGhpcy54TnVtU3RlcHNbai0xXSwgaGlnaGVzdFN0ZXA6IHRoaXMueEhpZ2hlc3RDb21wbGV0ZVN0ZXBbai0xXSB9LFxyXG5cdFx0XHRzdGVwQWZ0ZXI6IHsgc3RhcnRWYWx1ZTogdGhpcy54VmFsW2otMF0sIHN0ZXA6IHRoaXMueE51bVN0ZXBzW2otMF0sIGhpZ2hlc3RTdGVwOiB0aGlzLnhIaWdoZXN0Q29tcGxldGVTdGVwW2otMF0gfVxyXG5cdFx0fTtcclxuXHR9O1xyXG5cclxuXHRTcGVjdHJ1bS5wcm90b3R5cGUuY291bnRTdGVwRGVjaW1hbHMgPSBmdW5jdGlvbiAoKSB7XHJcblx0XHR2YXIgc3RlcERlY2ltYWxzID0gdGhpcy54TnVtU3RlcHMubWFwKGNvdW50RGVjaW1hbHMpO1xyXG5cdFx0cmV0dXJuIE1hdGgubWF4LmFwcGx5KG51bGwsIHN0ZXBEZWNpbWFscyk7XHJcblx0fTtcclxuXHJcblx0Ly8gT3V0c2lkZSB0ZXN0aW5nXHJcblx0U3BlY3RydW0ucHJvdG90eXBlLmNvbnZlcnQgPSBmdW5jdGlvbiAoIHZhbHVlICkge1xyXG5cdFx0cmV0dXJuIHRoaXMuZ2V0U3RlcCh0aGlzLnRvU3RlcHBpbmcodmFsdWUpKTtcclxuXHR9O1xyXG5cclxuLypcdEV2ZXJ5IGlucHV0IG9wdGlvbiBpcyB0ZXN0ZWQgYW5kIHBhcnNlZC4gVGhpcydsbCBwcmV2ZW50XG5cdGVuZGxlc3MgdmFsaWRhdGlvbiBpbiBpbnRlcm5hbCBtZXRob2RzLiBUaGVzZSB0ZXN0cyBhcmVcblx0c3RydWN0dXJlZCB3aXRoIGFuIGl0ZW0gZm9yIGV2ZXJ5IG9wdGlvbiBhdmFpbGFibGUuIEFuXG5cdG9wdGlvbiBjYW4gYmUgbWFya2VkIGFzIHJlcXVpcmVkIGJ5IHNldHRpbmcgdGhlICdyJyBmbGFnLlxuXHRUaGUgdGVzdGluZyBmdW5jdGlvbiBpcyBwcm92aWRlZCB3aXRoIHRocmVlIGFyZ3VtZW50czpcblx0XHQtIFRoZSBwcm92aWRlZCB2YWx1ZSBmb3IgdGhlIG9wdGlvbjtcblx0XHQtIEEgcmVmZXJlbmNlIHRvIHRoZSBvcHRpb25zIG9iamVjdDtcblx0XHQtIFRoZSBuYW1lIGZvciB0aGUgb3B0aW9uO1xuXG5cdFRoZSB0ZXN0aW5nIGZ1bmN0aW9uIHJldHVybnMgZmFsc2Ugd2hlbiBhbiBlcnJvciBpcyBkZXRlY3RlZCxcblx0b3IgdHJ1ZSB3aGVuIGV2ZXJ5dGhpbmcgaXMgT0suIEl0IGNhbiBhbHNvIG1vZGlmeSB0aGUgb3B0aW9uXG5cdG9iamVjdCwgdG8gbWFrZSBzdXJlIGFsbCB2YWx1ZXMgY2FuIGJlIGNvcnJlY3RseSBsb29wZWQgZWxzZXdoZXJlLiAqL1xuXG5cdHZhciBkZWZhdWx0Rm9ybWF0dGVyID0geyAndG8nOiBmdW5jdGlvbiggdmFsdWUgKXtcblx0XHRyZXR1cm4gdmFsdWUgIT09IHVuZGVmaW5lZCAmJiB2YWx1ZS50b0ZpeGVkKDIpO1xuXHR9LCAnZnJvbSc6IE51bWJlciB9O1xuXG5cdGZ1bmN0aW9uIHZhbGlkYXRlRm9ybWF0ICggZW50cnkgKSB7XG5cblx0XHQvLyBBbnkgb2JqZWN0IHdpdGggYSB0byBhbmQgZnJvbSBtZXRob2QgaXMgc3VwcG9ydGVkLlxuXHRcdGlmICggaXNWYWxpZEZvcm1hdHRlcihlbnRyeSkgKSB7XG5cdFx0XHRyZXR1cm4gdHJ1ZTtcblx0XHR9XG5cblx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdmb3JtYXQnIHJlcXVpcmVzICd0bycgYW5kICdmcm9tJyBtZXRob2RzLlwiKTtcblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RTdGVwICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdGlmICggIWlzTnVtZXJpYyggZW50cnkgKSApIHtcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ3N0ZXAnIGlzIG5vdCBudW1lcmljLlwiKTtcblx0XHR9XG5cblx0XHQvLyBUaGUgc3RlcCBvcHRpb24gY2FuIHN0aWxsIGJlIHVzZWQgdG8gc2V0IHN0ZXBwaW5nXG5cdFx0Ly8gZm9yIGxpbmVhciBzbGlkZXJzLiBPdmVyd3JpdHRlbiBpZiBzZXQgaW4gJ3JhbmdlJy5cblx0XHRwYXJzZWQuc2luZ2xlU3RlcCA9IGVudHJ5O1xuXHR9XG5cblx0ZnVuY3Rpb24gdGVzdFJhbmdlICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdC8vIEZpbHRlciBpbmNvcnJlY3QgaW5wdXQuXG5cdFx0aWYgKCB0eXBlb2YgZW50cnkgIT09ICdvYmplY3QnIHx8IEFycmF5LmlzQXJyYXkoZW50cnkpICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAncmFuZ2UnIGlzIG5vdCBhbiBvYmplY3QuXCIpO1xuXHRcdH1cblxuXHRcdC8vIENhdGNoIG1pc3Npbmcgc3RhcnQgb3IgZW5kLlxuXHRcdGlmICggZW50cnkubWluID09PSB1bmRlZmluZWQgfHwgZW50cnkubWF4ID09PSB1bmRlZmluZWQgKSB7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6IE1pc3NpbmcgJ21pbicgb3IgJ21heCcgaW4gJ3JhbmdlJy5cIik7XG5cdFx0fVxuXG5cdFx0Ly8gQ2F0Y2ggZXF1YWwgc3RhcnQgb3IgZW5kLlxuXHRcdGlmICggZW50cnkubWluID09PSBlbnRyeS5tYXggKSB7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdyYW5nZScgJ21pbicgYW5kICdtYXgnIGNhbm5vdCBiZSBlcXVhbC5cIik7XG5cdFx0fVxuXG5cdFx0cGFyc2VkLnNwZWN0cnVtID0gbmV3IFNwZWN0cnVtKGVudHJ5LCBwYXJzZWQuc25hcCwgcGFyc2VkLnNpbmdsZVN0ZXApO1xuXHR9XG5cblx0ZnVuY3Rpb24gdGVzdFN0YXJ0ICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdGVudHJ5ID0gYXNBcnJheShlbnRyeSk7XG5cblx0XHQvLyBWYWxpZGF0ZSBpbnB1dC4gVmFsdWVzIGFyZW4ndCB0ZXN0ZWQsIGFzIHRoZSBwdWJsaWMgLnZhbCBtZXRob2Rcblx0XHQvLyB3aWxsIGFsd2F5cyBwcm92aWRlIGEgdmFsaWQgbG9jYXRpb24uXG5cdFx0aWYgKCAhQXJyYXkuaXNBcnJheSggZW50cnkgKSB8fCAhZW50cnkubGVuZ3RoICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnc3RhcnQnIG9wdGlvbiBpcyBpbmNvcnJlY3QuXCIpO1xuXHRcdH1cblxuXHRcdC8vIFN0b3JlIHRoZSBudW1iZXIgb2YgaGFuZGxlcy5cblx0XHRwYXJzZWQuaGFuZGxlcyA9IGVudHJ5Lmxlbmd0aDtcblxuXHRcdC8vIFdoZW4gdGhlIHNsaWRlciBpcyBpbml0aWFsaXplZCwgdGhlIC52YWwgbWV0aG9kIHdpbGxcblx0XHQvLyBiZSBjYWxsZWQgd2l0aCB0aGUgc3RhcnQgb3B0aW9ucy5cblx0XHRwYXJzZWQuc3RhcnQgPSBlbnRyeTtcblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RTbmFwICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdC8vIEVuZm9yY2UgMTAwJSBzdGVwcGluZyB3aXRoaW4gc3VicmFuZ2VzLlxuXHRcdHBhcnNlZC5zbmFwID0gZW50cnk7XG5cblx0XHRpZiAoIHR5cGVvZiBlbnRyeSAhPT0gJ2Jvb2xlYW4nICl7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdzbmFwJyBvcHRpb24gbXVzdCBiZSBhIGJvb2xlYW4uXCIpO1xuXHRcdH1cblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RBbmltYXRlICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdC8vIEVuZm9yY2UgMTAwJSBzdGVwcGluZyB3aXRoaW4gc3VicmFuZ2VzLlxuXHRcdHBhcnNlZC5hbmltYXRlID0gZW50cnk7XG5cblx0XHRpZiAoIHR5cGVvZiBlbnRyeSAhPT0gJ2Jvb2xlYW4nICl7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdhbmltYXRlJyBvcHRpb24gbXVzdCBiZSBhIGJvb2xlYW4uXCIpO1xuXHRcdH1cblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RBbmltYXRpb25EdXJhdGlvbiAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHRwYXJzZWQuYW5pbWF0aW9uRHVyYXRpb24gPSBlbnRyeTtcblxuXHRcdGlmICggdHlwZW9mIGVudHJ5ICE9PSAnbnVtYmVyJyApe1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnYW5pbWF0aW9uRHVyYXRpb24nIG9wdGlvbiBtdXN0IGJlIGEgbnVtYmVyLlwiKTtcblx0XHR9XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0Q29ubmVjdCAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHR2YXIgY29ubmVjdCA9IFtmYWxzZV07XG5cdFx0dmFyIGk7XG5cblx0XHQvLyBNYXAgbGVnYWN5IG9wdGlvbnNcblx0XHRpZiAoIGVudHJ5ID09PSAnbG93ZXInICkge1xuXHRcdFx0ZW50cnkgPSBbdHJ1ZSwgZmFsc2VdO1xuXHRcdH1cblxuXHRcdGVsc2UgaWYgKCBlbnRyeSA9PT0gJ3VwcGVyJyApIHtcblx0XHRcdGVudHJ5ID0gW2ZhbHNlLCB0cnVlXTtcblx0XHR9XG5cblx0XHQvLyBIYW5kbGUgYm9vbGVhbiBvcHRpb25zXG5cdFx0aWYgKCBlbnRyeSA9PT0gdHJ1ZSB8fCBlbnRyeSA9PT0gZmFsc2UgKSB7XG5cblx0XHRcdGZvciAoIGkgPSAxOyBpIDwgcGFyc2VkLmhhbmRsZXM7IGkrKyApIHtcblx0XHRcdFx0Y29ubmVjdC5wdXNoKGVudHJ5KTtcblx0XHRcdH1cblxuXHRcdFx0Y29ubmVjdC5wdXNoKGZhbHNlKTtcblx0XHR9XG5cblx0XHQvLyBSZWplY3QgaW52YWxpZCBpbnB1dFxuXHRcdGVsc2UgaWYgKCAhQXJyYXkuaXNBcnJheSggZW50cnkgKSB8fCAhZW50cnkubGVuZ3RoIHx8IGVudHJ5Lmxlbmd0aCAhPT0gcGFyc2VkLmhhbmRsZXMgKyAxICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnY29ubmVjdCcgb3B0aW9uIGRvZXNuJ3QgbWF0Y2ggaGFuZGxlIGNvdW50LlwiKTtcblx0XHR9XG5cblx0XHRlbHNlIHtcblx0XHRcdGNvbm5lY3QgPSBlbnRyeTtcblx0XHR9XG5cblx0XHRwYXJzZWQuY29ubmVjdCA9IGNvbm5lY3Q7XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0T3JpZW50YXRpb24gKCBwYXJzZWQsIGVudHJ5ICkge1xuXG5cdFx0Ly8gU2V0IG9yaWVudGF0aW9uIHRvIGFuIGEgbnVtZXJpY2FsIHZhbHVlIGZvciBlYXN5XG5cdFx0Ly8gYXJyYXkgc2VsZWN0aW9uLlxuXHRcdHN3aXRjaCAoIGVudHJ5ICl7XG5cdFx0XHRjYXNlICdob3Jpem9udGFsJzpcblx0XHRcdFx0cGFyc2VkLm9ydCA9IDA7XG5cdFx0XHRcdGJyZWFrO1xuXHRcdFx0Y2FzZSAndmVydGljYWwnOlxuXHRcdFx0XHRwYXJzZWQub3J0ID0gMTtcblx0XHRcdFx0YnJlYWs7XG5cdFx0XHRkZWZhdWx0OlxuXHRcdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdvcmllbnRhdGlvbicgb3B0aW9uIGlzIGludmFsaWQuXCIpO1xuXHRcdH1cblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RNYXJnaW4gKCBwYXJzZWQsIGVudHJ5ICkge1xuXG5cdFx0aWYgKCAhaXNOdW1lcmljKGVudHJ5KSApe1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnbWFyZ2luJyBvcHRpb24gbXVzdCBiZSBudW1lcmljLlwiKTtcblx0XHR9XG5cblx0XHQvLyBJc3N1ZSAjNTgyXG5cdFx0aWYgKCBlbnRyeSA9PT0gMCApIHtcblx0XHRcdHJldHVybjtcblx0XHR9XG5cblx0XHRwYXJzZWQubWFyZ2luID0gcGFyc2VkLnNwZWN0cnVtLmdldE1hcmdpbihlbnRyeSk7XG5cblx0XHRpZiAoICFwYXJzZWQubWFyZ2luICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnbWFyZ2luJyBvcHRpb24gaXMgb25seSBzdXBwb3J0ZWQgb24gbGluZWFyIHNsaWRlcnMuXCIpO1xuXHRcdH1cblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RMaW1pdCAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHRpZiAoICFpc051bWVyaWMoZW50cnkpICl7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdsaW1pdCcgb3B0aW9uIG11c3QgYmUgbnVtZXJpYy5cIik7XG5cdFx0fVxuXG5cdFx0cGFyc2VkLmxpbWl0ID0gcGFyc2VkLnNwZWN0cnVtLmdldE1hcmdpbihlbnRyeSk7XG5cblx0XHRpZiAoICFwYXJzZWQubGltaXQgfHwgcGFyc2VkLmhhbmRsZXMgPCAyICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnbGltaXQnIG9wdGlvbiBpcyBvbmx5IHN1cHBvcnRlZCBvbiBsaW5lYXIgc2xpZGVycyB3aXRoIDIgb3IgbW9yZSBoYW5kbGVzLlwiKTtcblx0XHR9XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0UGFkZGluZyAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHRpZiAoICFpc051bWVyaWMoZW50cnkpICYmICFBcnJheS5pc0FycmF5KGVudHJ5KSApe1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAncGFkZGluZycgb3B0aW9uIG11c3QgYmUgbnVtZXJpYyBvciBhcnJheSBvZiBleGFjdGx5IDIgbnVtYmVycy5cIik7XG5cdFx0fVxuXG5cdFx0aWYgKCBBcnJheS5pc0FycmF5KGVudHJ5KSAmJiAhKGVudHJ5Lmxlbmd0aCA9PT0gMiB8fCBpc051bWVyaWMoZW50cnlbMF0pIHx8IGlzTnVtZXJpYyhlbnRyeVsxXSkpICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAncGFkZGluZycgb3B0aW9uIG11c3QgYmUgbnVtZXJpYyBvciBhcnJheSBvZiBleGFjdGx5IDIgbnVtYmVycy5cIik7XG5cdFx0fVxuXG5cdFx0aWYgKCBlbnRyeSA9PT0gMCApIHtcblx0XHRcdHJldHVybjtcblx0XHR9XG5cblx0XHRpZiAoICFBcnJheS5pc0FycmF5KGVudHJ5KSApIHtcblx0XHRcdGVudHJ5ID0gW2VudHJ5LCBlbnRyeV07XG5cdFx0fVxuXG5cdFx0Ly8gJ2dldE1hcmdpbicgcmV0dXJucyBmYWxzZSBmb3IgaW52YWxpZCB2YWx1ZXMuXG5cdFx0cGFyc2VkLnBhZGRpbmcgPSBbcGFyc2VkLnNwZWN0cnVtLmdldE1hcmdpbihlbnRyeVswXSksIHBhcnNlZC5zcGVjdHJ1bS5nZXRNYXJnaW4oZW50cnlbMV0pXTtcblxuXHRcdGlmICggcGFyc2VkLnBhZGRpbmdbMF0gPT09IGZhbHNlIHx8IHBhcnNlZC5wYWRkaW5nWzFdID09PSBmYWxzZSApIHtcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ3BhZGRpbmcnIG9wdGlvbiBpcyBvbmx5IHN1cHBvcnRlZCBvbiBsaW5lYXIgc2xpZGVycy5cIik7XG5cdFx0fVxuXG5cdFx0aWYgKCBwYXJzZWQucGFkZGluZ1swXSA8IDAgfHwgcGFyc2VkLnBhZGRpbmdbMV0gPCAwICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAncGFkZGluZycgb3B0aW9uIG11c3QgYmUgYSBwb3NpdGl2ZSBudW1iZXIocykuXCIpO1xuXHRcdH1cblxuXHRcdGlmICggcGFyc2VkLnBhZGRpbmdbMF0gKyBwYXJzZWQucGFkZGluZ1sxXSA+PSAxMDAgKSB7XG5cdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdwYWRkaW5nJyBvcHRpb24gbXVzdCBub3QgZXhjZWVkIDEwMCUgb2YgdGhlIHJhbmdlLlwiKTtcblx0XHR9XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0RGlyZWN0aW9uICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdC8vIFNldCBkaXJlY3Rpb24gYXMgYSBudW1lcmljYWwgdmFsdWUgZm9yIGVhc3kgcGFyc2luZy5cblx0XHQvLyBJbnZlcnQgY29ubmVjdGlvbiBmb3IgUlRMIHNsaWRlcnMsIHNvIHRoYXQgdGhlIHByb3BlclxuXHRcdC8vIGhhbmRsZXMgZ2V0IHRoZSBjb25uZWN0L2JhY2tncm91bmQgY2xhc3Nlcy5cblx0XHRzd2l0Y2ggKCBlbnRyeSApIHtcblx0XHRcdGNhc2UgJ2x0cic6XG5cdFx0XHRcdHBhcnNlZC5kaXIgPSAwO1xuXHRcdFx0XHRicmVhaztcblx0XHRcdGNhc2UgJ3J0bCc6XG5cdFx0XHRcdHBhcnNlZC5kaXIgPSAxO1xuXHRcdFx0XHRicmVhaztcblx0XHRcdGRlZmF1bHQ6XG5cdFx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ2RpcmVjdGlvbicgb3B0aW9uIHdhcyBub3QgcmVjb2duaXplZC5cIik7XG5cdFx0fVxuXHR9XG5cblx0ZnVuY3Rpb24gdGVzdEJlaGF2aW91ciAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHQvLyBNYWtlIHN1cmUgdGhlIGlucHV0IGlzIGEgc3RyaW5nLlxuXHRcdGlmICggdHlwZW9mIGVudHJ5ICE9PSAnc3RyaW5nJyApIHtcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ2JlaGF2aW91cicgbXVzdCBiZSBhIHN0cmluZyBjb250YWluaW5nIG9wdGlvbnMuXCIpO1xuXHRcdH1cblxuXHRcdC8vIENoZWNrIGlmIHRoZSBzdHJpbmcgY29udGFpbnMgYW55IGtleXdvcmRzLlxuXHRcdC8vIE5vbmUgYXJlIHJlcXVpcmVkLlxuXHRcdHZhciB0YXAgPSBlbnRyeS5pbmRleE9mKCd0YXAnKSA+PSAwO1xuXHRcdHZhciBkcmFnID0gZW50cnkuaW5kZXhPZignZHJhZycpID49IDA7XG5cdFx0dmFyIGZpeGVkID0gZW50cnkuaW5kZXhPZignZml4ZWQnKSA+PSAwO1xuXHRcdHZhciBzbmFwID0gZW50cnkuaW5kZXhPZignc25hcCcpID49IDA7XG5cdFx0dmFyIGhvdmVyID0gZW50cnkuaW5kZXhPZignaG92ZXInKSA+PSAwO1xuXG5cdFx0aWYgKCBmaXhlZCApIHtcblxuXHRcdFx0aWYgKCBwYXJzZWQuaGFuZGxlcyAhPT0gMiApIHtcblx0XHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnZml4ZWQnIGJlaGF2aW91ciBtdXN0IGJlIHVzZWQgd2l0aCAyIGhhbmRsZXNcIik7XG5cdFx0XHR9XG5cblx0XHRcdC8vIFVzZSBtYXJnaW4gdG8gZW5mb3JjZSBmaXhlZCBzdGF0ZVxuXHRcdFx0dGVzdE1hcmdpbihwYXJzZWQsIHBhcnNlZC5zdGFydFsxXSAtIHBhcnNlZC5zdGFydFswXSk7XG5cdFx0fVxuXG5cdFx0cGFyc2VkLmV2ZW50cyA9IHtcblx0XHRcdHRhcDogdGFwIHx8IHNuYXAsXG5cdFx0XHRkcmFnOiBkcmFnLFxuXHRcdFx0Zml4ZWQ6IGZpeGVkLFxuXHRcdFx0c25hcDogc25hcCxcblx0XHRcdGhvdmVyOiBob3ZlclxuXHRcdH07XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0VG9vbHRpcHMgKCBwYXJzZWQsIGVudHJ5ICkge1xuXG5cdFx0aWYgKCBlbnRyeSA9PT0gZmFsc2UgKSB7XG5cdFx0XHRyZXR1cm47XG5cdFx0fVxuXG5cdFx0ZWxzZSBpZiAoIGVudHJ5ID09PSB0cnVlICkge1xuXG5cdFx0XHRwYXJzZWQudG9vbHRpcHMgPSBbXTtcblxuXHRcdFx0Zm9yICggdmFyIGkgPSAwOyBpIDwgcGFyc2VkLmhhbmRsZXM7IGkrKyApIHtcblx0XHRcdFx0cGFyc2VkLnRvb2x0aXBzLnB1c2godHJ1ZSk7XG5cdFx0XHR9XG5cdFx0fVxuXG5cdFx0ZWxzZSB7XG5cblx0XHRcdHBhcnNlZC50b29sdGlwcyA9IGFzQXJyYXkoZW50cnkpO1xuXG5cdFx0XHRpZiAoIHBhcnNlZC50b29sdGlwcy5sZW5ndGggIT09IHBhcnNlZC5oYW5kbGVzICkge1xuXHRcdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6IG11c3QgcGFzcyBhIGZvcm1hdHRlciBmb3IgYWxsIGhhbmRsZXMuXCIpO1xuXHRcdFx0fVxuXG5cdFx0XHRwYXJzZWQudG9vbHRpcHMuZm9yRWFjaChmdW5jdGlvbihmb3JtYXR0ZXIpe1xuXHRcdFx0XHRpZiAoIHR5cGVvZiBmb3JtYXR0ZXIgIT09ICdib29sZWFuJyAmJiAodHlwZW9mIGZvcm1hdHRlciAhPT0gJ29iamVjdCcgfHwgdHlwZW9mIGZvcm1hdHRlci50byAhPT0gJ2Z1bmN0aW9uJykgKSB7XG5cdFx0XHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAndG9vbHRpcHMnIG11c3QgYmUgcGFzc2VkIGEgZm9ybWF0dGVyIG9yICdmYWxzZScuXCIpO1xuXHRcdFx0XHR9XG5cdFx0XHR9KTtcblx0XHR9XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0QXJpYUZvcm1hdCAoIHBhcnNlZCwgZW50cnkgKSB7XG5cdFx0cGFyc2VkLmFyaWFGb3JtYXQgPSBlbnRyeTtcblx0XHR2YWxpZGF0ZUZvcm1hdChlbnRyeSk7XG5cdH1cblxuXHRmdW5jdGlvbiB0ZXN0Rm9ybWF0ICggcGFyc2VkLCBlbnRyeSApIHtcblx0XHRwYXJzZWQuZm9ybWF0ID0gZW50cnk7XG5cdFx0dmFsaWRhdGVGb3JtYXQoZW50cnkpO1xuXHR9XG5cblx0ZnVuY3Rpb24gdGVzdENzc1ByZWZpeCAoIHBhcnNlZCwgZW50cnkgKSB7XG5cblx0XHRpZiAoIHR5cGVvZiBlbnRyeSAhPT0gJ3N0cmluZycgJiYgZW50cnkgIT09IGZhbHNlICkge1xuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiAnY3NzUHJlZml4JyBtdXN0IGJlIGEgc3RyaW5nIG9yIGBmYWxzZWAuXCIpO1xuXHRcdH1cblxuXHRcdHBhcnNlZC5jc3NQcmVmaXggPSBlbnRyeTtcblx0fVxuXG5cdGZ1bmN0aW9uIHRlc3RDc3NDbGFzc2VzICggcGFyc2VkLCBlbnRyeSApIHtcblxuXHRcdGlmICggdHlwZW9mIGVudHJ5ICE9PSAnb2JqZWN0JyApIHtcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogJ2Nzc0NsYXNzZXMnIG11c3QgYmUgYW4gb2JqZWN0LlwiKTtcblx0XHR9XG5cblx0XHRpZiAoIHR5cGVvZiBwYXJzZWQuY3NzUHJlZml4ID09PSAnc3RyaW5nJyApIHtcblx0XHRcdHBhcnNlZC5jc3NDbGFzc2VzID0ge307XG5cblx0XHRcdGZvciAoIHZhciBrZXkgaW4gZW50cnkgKSB7XG5cdFx0XHRcdGlmICggIWVudHJ5Lmhhc093blByb3BlcnR5KGtleSkgKSB7IGNvbnRpbnVlOyB9XG5cblx0XHRcdFx0cGFyc2VkLmNzc0NsYXNzZXNba2V5XSA9IHBhcnNlZC5jc3NQcmVmaXggKyBlbnRyeVtrZXldO1xuXHRcdFx0fVxuXHRcdH0gZWxzZSB7XG5cdFx0XHRwYXJzZWQuY3NzQ2xhc3NlcyA9IGVudHJ5O1xuXHRcdH1cblx0fVxuXG5cdC8vIFRlc3QgYWxsIGRldmVsb3BlciBzZXR0aW5ncyBhbmQgcGFyc2UgdG8gYXNzdW1wdGlvbi1zYWZlIHZhbHVlcy5cblx0ZnVuY3Rpb24gdGVzdE9wdGlvbnMgKCBvcHRpb25zICkge1xuXG5cdFx0Ly8gVG8gcHJvdmUgYSBmaXggZm9yICM1MzcsIGZyZWV6ZSBvcHRpb25zIGhlcmUuXG5cdFx0Ly8gSWYgdGhlIG9iamVjdCBpcyBtb2RpZmllZCwgYW4gZXJyb3Igd2lsbCBiZSB0aHJvd24uXG5cdFx0Ly8gT2JqZWN0LmZyZWV6ZShvcHRpb25zKTtcblxuXHRcdHZhciBwYXJzZWQgPSB7XG5cdFx0XHRtYXJnaW46IDAsXG5cdFx0XHRsaW1pdDogMCxcblx0XHRcdHBhZGRpbmc6IDAsXG5cdFx0XHRhbmltYXRlOiB0cnVlLFxuXHRcdFx0YW5pbWF0aW9uRHVyYXRpb246IDMwMCxcblx0XHRcdGFyaWFGb3JtYXQ6IGRlZmF1bHRGb3JtYXR0ZXIsXG5cdFx0XHRmb3JtYXQ6IGRlZmF1bHRGb3JtYXR0ZXJcblx0XHR9O1xuXG5cdFx0Ly8gVGVzdHMgYXJlIGV4ZWN1dGVkIGluIHRoZSBvcmRlciB0aGV5IGFyZSBwcmVzZW50ZWQgaGVyZS5cblx0XHR2YXIgdGVzdHMgPSB7XG5cdFx0XHQnc3RlcCc6IHsgcjogZmFsc2UsIHQ6IHRlc3RTdGVwIH0sXG5cdFx0XHQnc3RhcnQnOiB7IHI6IHRydWUsIHQ6IHRlc3RTdGFydCB9LFxuXHRcdFx0J2Nvbm5lY3QnOiB7IHI6IHRydWUsIHQ6IHRlc3RDb25uZWN0IH0sXG5cdFx0XHQnZGlyZWN0aW9uJzogeyByOiB0cnVlLCB0OiB0ZXN0RGlyZWN0aW9uIH0sXG5cdFx0XHQnc25hcCc6IHsgcjogZmFsc2UsIHQ6IHRlc3RTbmFwIH0sXG5cdFx0XHQnYW5pbWF0ZSc6IHsgcjogZmFsc2UsIHQ6IHRlc3RBbmltYXRlIH0sXG5cdFx0XHQnYW5pbWF0aW9uRHVyYXRpb24nOiB7IHI6IGZhbHNlLCB0OiB0ZXN0QW5pbWF0aW9uRHVyYXRpb24gfSxcblx0XHRcdCdyYW5nZSc6IHsgcjogdHJ1ZSwgdDogdGVzdFJhbmdlIH0sXG5cdFx0XHQnb3JpZW50YXRpb24nOiB7IHI6IGZhbHNlLCB0OiB0ZXN0T3JpZW50YXRpb24gfSxcblx0XHRcdCdtYXJnaW4nOiB7IHI6IGZhbHNlLCB0OiB0ZXN0TWFyZ2luIH0sXG5cdFx0XHQnbGltaXQnOiB7IHI6IGZhbHNlLCB0OiB0ZXN0TGltaXQgfSxcblx0XHRcdCdwYWRkaW5nJzogeyByOiBmYWxzZSwgdDogdGVzdFBhZGRpbmcgfSxcblx0XHRcdCdiZWhhdmlvdXInOiB7IHI6IHRydWUsIHQ6IHRlc3RCZWhhdmlvdXIgfSxcblx0XHRcdCdhcmlhRm9ybWF0JzogeyByOiBmYWxzZSwgdDogdGVzdEFyaWFGb3JtYXQgfSxcblx0XHRcdCdmb3JtYXQnOiB7IHI6IGZhbHNlLCB0OiB0ZXN0Rm9ybWF0IH0sXG5cdFx0XHQndG9vbHRpcHMnOiB7IHI6IGZhbHNlLCB0OiB0ZXN0VG9vbHRpcHMgfSxcblx0XHRcdCdjc3NQcmVmaXgnOiB7IHI6IHRydWUsIHQ6IHRlc3RDc3NQcmVmaXggfSxcblx0XHRcdCdjc3NDbGFzc2VzJzogeyByOiB0cnVlLCB0OiB0ZXN0Q3NzQ2xhc3NlcyB9XG5cdFx0fTtcblxuXHRcdHZhciBkZWZhdWx0cyA9IHtcblx0XHRcdCdjb25uZWN0JzogZmFsc2UsXG5cdFx0XHQnZGlyZWN0aW9uJzogJ2x0cicsXG5cdFx0XHQnYmVoYXZpb3VyJzogJ3RhcCcsXG5cdFx0XHQnb3JpZW50YXRpb24nOiAnaG9yaXpvbnRhbCcsXG5cdFx0XHQnY3NzUHJlZml4JyA6ICdub1VpLScsXG5cdFx0XHQnY3NzQ2xhc3Nlcyc6IHtcblx0XHRcdFx0dGFyZ2V0OiAndGFyZ2V0Jyxcblx0XHRcdFx0YmFzZTogJ2Jhc2UnLFxuXHRcdFx0XHRvcmlnaW46ICdvcmlnaW4nLFxuXHRcdFx0XHRoYW5kbGU6ICdoYW5kbGUnLFxuXHRcdFx0XHRoYW5kbGVMb3dlcjogJ2hhbmRsZS1sb3dlcicsXG5cdFx0XHRcdGhhbmRsZVVwcGVyOiAnaGFuZGxlLXVwcGVyJyxcblx0XHRcdFx0aG9yaXpvbnRhbDogJ2hvcml6b250YWwnLFxuXHRcdFx0XHR2ZXJ0aWNhbDogJ3ZlcnRpY2FsJyxcblx0XHRcdFx0YmFja2dyb3VuZDogJ2JhY2tncm91bmQnLFxuXHRcdFx0XHRjb25uZWN0OiAnY29ubmVjdCcsXG5cdFx0XHRcdGNvbm5lY3RzOiAnY29ubmVjdHMnLFxuXHRcdFx0XHRsdHI6ICdsdHInLFxuXHRcdFx0XHRydGw6ICdydGwnLFxuXHRcdFx0XHRkcmFnZ2FibGU6ICdkcmFnZ2FibGUnLFxuXHRcdFx0XHRkcmFnOiAnc3RhdGUtZHJhZycsXG5cdFx0XHRcdHRhcDogJ3N0YXRlLXRhcCcsXG5cdFx0XHRcdGFjdGl2ZTogJ2FjdGl2ZScsXG5cdFx0XHRcdHRvb2x0aXA6ICd0b29sdGlwJyxcblx0XHRcdFx0cGlwczogJ3BpcHMnLFxuXHRcdFx0XHRwaXBzSG9yaXpvbnRhbDogJ3BpcHMtaG9yaXpvbnRhbCcsXG5cdFx0XHRcdHBpcHNWZXJ0aWNhbDogJ3BpcHMtdmVydGljYWwnLFxuXHRcdFx0XHRtYXJrZXI6ICdtYXJrZXInLFxuXHRcdFx0XHRtYXJrZXJIb3Jpem9udGFsOiAnbWFya2VyLWhvcml6b250YWwnLFxuXHRcdFx0XHRtYXJrZXJWZXJ0aWNhbDogJ21hcmtlci12ZXJ0aWNhbCcsXG5cdFx0XHRcdG1hcmtlck5vcm1hbDogJ21hcmtlci1ub3JtYWwnLFxuXHRcdFx0XHRtYXJrZXJMYXJnZTogJ21hcmtlci1sYXJnZScsXG5cdFx0XHRcdG1hcmtlclN1YjogJ21hcmtlci1zdWInLFxuXHRcdFx0XHR2YWx1ZTogJ3ZhbHVlJyxcblx0XHRcdFx0dmFsdWVIb3Jpem9udGFsOiAndmFsdWUtaG9yaXpvbnRhbCcsXG5cdFx0XHRcdHZhbHVlVmVydGljYWw6ICd2YWx1ZS12ZXJ0aWNhbCcsXG5cdFx0XHRcdHZhbHVlTm9ybWFsOiAndmFsdWUtbm9ybWFsJyxcblx0XHRcdFx0dmFsdWVMYXJnZTogJ3ZhbHVlLWxhcmdlJyxcblx0XHRcdFx0dmFsdWVTdWI6ICd2YWx1ZS1zdWInXG5cdFx0XHR9XG5cdFx0fTtcblxuXHRcdC8vIEFyaWFGb3JtYXQgZGVmYXVsdHMgdG8gcmVndWxhciBmb3JtYXQsIGlmIGFueS5cblx0XHRpZiAoIG9wdGlvbnMuZm9ybWF0ICYmICFvcHRpb25zLmFyaWFGb3JtYXQgKSB7XG5cdFx0XHRvcHRpb25zLmFyaWFGb3JtYXQgPSBvcHRpb25zLmZvcm1hdDtcblx0XHR9XG5cblx0XHQvLyBSdW4gYWxsIG9wdGlvbnMgdGhyb3VnaCBhIHRlc3RpbmcgbWVjaGFuaXNtIHRvIGVuc3VyZSBjb3JyZWN0XG5cdFx0Ly8gaW5wdXQuIEl0IHNob3VsZCBiZSBub3RlZCB0aGF0IG9wdGlvbnMgbWlnaHQgZ2V0IG1vZGlmaWVkIHRvXG5cdFx0Ly8gYmUgaGFuZGxlZCBwcm9wZXJseS4gRS5nLiB3cmFwcGluZyBpbnRlZ2VycyBpbiBhcnJheXMuXG5cdFx0T2JqZWN0LmtleXModGVzdHMpLmZvckVhY2goZnVuY3Rpb24oIG5hbWUgKXtcblxuXHRcdFx0Ly8gSWYgdGhlIG9wdGlvbiBpc24ndCBzZXQsIGJ1dCBpdCBpcyByZXF1aXJlZCwgdGhyb3cgYW4gZXJyb3IuXG5cdFx0XHRpZiAoICFpc1NldChvcHRpb25zW25hbWVdKSAmJiBkZWZhdWx0c1tuYW1lXSA9PT0gdW5kZWZpbmVkICkge1xuXG5cdFx0XHRcdGlmICggdGVzdHNbbmFtZV0uciApIHtcblx0XHRcdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICdcIiArIG5hbWUgKyBcIicgaXMgcmVxdWlyZWQuXCIpO1xuXHRcdFx0XHR9XG5cblx0XHRcdFx0cmV0dXJuIHRydWU7XG5cdFx0XHR9XG5cblx0XHRcdHRlc3RzW25hbWVdLnQoIHBhcnNlZCwgIWlzU2V0KG9wdGlvbnNbbmFtZV0pID8gZGVmYXVsdHNbbmFtZV0gOiBvcHRpb25zW25hbWVdICk7XG5cdFx0fSk7XG5cblx0XHQvLyBGb3J3YXJkIHBpcHMgb3B0aW9uc1xuXHRcdHBhcnNlZC5waXBzID0gb3B0aW9ucy5waXBzO1xuXG5cdFx0Ly8gQWxsIHJlY2VudCBicm93c2VycyBhY2NlcHQgdW5wcmVmaXhlZCB0cmFuc2Zvcm0uXG5cdFx0Ly8gV2UgbmVlZCAtbXMtIGZvciBJRTkgYW5kIC13ZWJraXQtIGZvciBvbGRlciBBbmRyb2lkO1xuXHRcdC8vIEFzc3VtZSB1c2Ugb2YgLXdlYmtpdC0gaWYgdW5wcmVmaXhlZCBhbmQgLW1zLSBhcmUgbm90IHN1cHBvcnRlZC5cblx0XHQvLyBodHRwczovL2Nhbml1c2UuY29tLyNmZWF0PXRyYW5zZm9ybXMyZFxuXHRcdHZhciBkID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImRpdlwiKTtcblx0XHR2YXIgbXNQcmVmaXggPSBkLnN0eWxlLm1zVHJhbnNmb3JtICE9PSB1bmRlZmluZWQ7XG5cdFx0dmFyIG5vUHJlZml4ID0gZC5zdHlsZS50cmFuc2Zvcm0gIT09IHVuZGVmaW5lZDtcblxuXHRcdHBhcnNlZC50cmFuc2Zvcm1SdWxlID0gbm9QcmVmaXggPyAndHJhbnNmb3JtJyA6IChtc1ByZWZpeCA/ICdtc1RyYW5zZm9ybScgOiAnd2Via2l0VHJhbnNmb3JtJyk7XG5cblx0XHQvLyBQaXBzIGRvbid0IG1vdmUsIHNvIHdlIGNhbiBwbGFjZSB0aGVtIHVzaW5nIGxlZnQvdG9wLlxuXHRcdHZhciBzdHlsZXMgPSBbWydsZWZ0JywgJ3RvcCddLCBbJ3JpZ2h0JywgJ2JvdHRvbSddXTtcblxuXHRcdHBhcnNlZC5zdHlsZSA9IHN0eWxlc1twYXJzZWQuZGlyXVtwYXJzZWQub3J0XTtcblxuXHRcdHJldHVybiBwYXJzZWQ7XG5cdH1cblxyXG5cclxuZnVuY3Rpb24gc2NvcGUgKCB0YXJnZXQsIG9wdGlvbnMsIG9yaWdpbmFsT3B0aW9ucyApe1xyXG5cclxuXHR2YXIgYWN0aW9ucyA9IGdldEFjdGlvbnMoKTtcclxuXHR2YXIgc3VwcG9ydHNUb3VjaEFjdGlvbk5vbmUgPSBnZXRTdXBwb3J0c1RvdWNoQWN0aW9uTm9uZSgpO1xyXG5cdHZhciBzdXBwb3J0c1Bhc3NpdmUgPSBzdXBwb3J0c1RvdWNoQWN0aW9uTm9uZSAmJiBnZXRTdXBwb3J0c1Bhc3NpdmUoKTtcclxuXHJcblx0Ly8gQWxsIHZhcmlhYmxlcyBsb2NhbCB0byAnc2NvcGUnIGFyZSBwcmVmaXhlZCB3aXRoICdzY29wZV8nXHJcblx0dmFyIHNjb3BlX1RhcmdldCA9IHRhcmdldDtcclxuXHR2YXIgc2NvcGVfTG9jYXRpb25zID0gW107XHJcblx0dmFyIHNjb3BlX0Jhc2U7XHJcblx0dmFyIHNjb3BlX0hhbmRsZXM7XHJcblx0dmFyIHNjb3BlX0hhbmRsZU51bWJlcnMgPSBbXTtcclxuXHR2YXIgc2NvcGVfQWN0aXZlSGFuZGxlc0NvdW50ID0gMDtcclxuXHR2YXIgc2NvcGVfQ29ubmVjdHM7XHJcblx0dmFyIHNjb3BlX1NwZWN0cnVtID0gb3B0aW9ucy5zcGVjdHJ1bTtcclxuXHR2YXIgc2NvcGVfVmFsdWVzID0gW107XHJcblx0dmFyIHNjb3BlX0V2ZW50cyA9IHt9O1xyXG5cdHZhciBzY29wZV9TZWxmO1xyXG5cdHZhciBzY29wZV9QaXBzO1xyXG5cdHZhciBzY29wZV9Eb2N1bWVudCA9IHRhcmdldC5vd25lckRvY3VtZW50O1xyXG5cdHZhciBzY29wZV9Eb2N1bWVudEVsZW1lbnQgPSBzY29wZV9Eb2N1bWVudC5kb2N1bWVudEVsZW1lbnQ7XHJcblx0dmFyIHNjb3BlX0JvZHkgPSBzY29wZV9Eb2N1bWVudC5ib2R5O1xyXG5cclxuXHJcblx0Ly8gRm9yIGhvcml6b250YWwgc2xpZGVycyBpbiBzdGFuZGFyZCBsdHIgZG9jdW1lbnRzLFxyXG5cdC8vIG1ha2UgLm5vVWktb3JpZ2luIG92ZXJmbG93IHRvIHRoZSBsZWZ0IHNvIHRoZSBkb2N1bWVudCBkb2Vzbid0IHNjcm9sbC5cclxuXHR2YXIgc2NvcGVfRGlyT2Zmc2V0ID0gKHNjb3BlX0RvY3VtZW50LmRpciA9PT0gJ3J0bCcpIHx8IChvcHRpb25zLm9ydCA9PT0gMSkgPyAwIDogMTAwO1xyXG5cclxuLyohIEluIHRoaXMgZmlsZTogQ29uc3RydWN0aW9uIG9mIERPTSBlbGVtZW50czsgKi9cclxuXHJcblx0Ly8gQ3JlYXRlcyBhIG5vZGUsIGFkZHMgaXQgdG8gdGFyZ2V0LCByZXR1cm5zIHRoZSBuZXcgbm9kZS5cclxuXHRmdW5jdGlvbiBhZGROb2RlVG8gKCBhZGRUYXJnZXQsIGNsYXNzTmFtZSApIHtcclxuXHJcblx0XHR2YXIgZGl2ID0gc2NvcGVfRG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcblxyXG5cdFx0aWYgKCBjbGFzc05hbWUgKSB7XHJcblx0XHRcdGFkZENsYXNzKGRpdiwgY2xhc3NOYW1lKTtcclxuXHRcdH1cclxuXHJcblx0XHRhZGRUYXJnZXQuYXBwZW5kQ2hpbGQoZGl2KTtcclxuXHJcblx0XHRyZXR1cm4gZGl2O1xyXG5cdH1cclxuXHJcblx0Ly8gQXBwZW5kIGEgb3JpZ2luIHRvIHRoZSBiYXNlXHJcblx0ZnVuY3Rpb24gYWRkT3JpZ2luICggYmFzZSwgaGFuZGxlTnVtYmVyICkge1xyXG5cclxuXHRcdHZhciBvcmlnaW4gPSBhZGROb2RlVG8oYmFzZSwgb3B0aW9ucy5jc3NDbGFzc2VzLm9yaWdpbik7XHJcblx0XHR2YXIgaGFuZGxlID0gYWRkTm9kZVRvKG9yaWdpbiwgb3B0aW9ucy5jc3NDbGFzc2VzLmhhbmRsZSk7XHJcblxyXG5cdFx0aGFuZGxlLnNldEF0dHJpYnV0ZSgnZGF0YS1oYW5kbGUnLCBoYW5kbGVOdW1iZXIpO1xyXG5cclxuXHRcdC8vIGh0dHBzOi8vZGV2ZWxvcGVyLm1vemlsbGEub3JnL2VuLVVTL2RvY3MvV2ViL0hUTUwvR2xvYmFsX2F0dHJpYnV0ZXMvdGFiaW5kZXhcclxuXHRcdC8vIDAgPSBmb2N1c2FibGUgYW5kIHJlYWNoYWJsZVxyXG5cdFx0aGFuZGxlLnNldEF0dHJpYnV0ZSgndGFiaW5kZXgnLCAnMCcpO1xyXG5cdFx0aGFuZGxlLnNldEF0dHJpYnV0ZSgncm9sZScsICdzbGlkZXInKTtcclxuXHRcdGhhbmRsZS5zZXRBdHRyaWJ1dGUoJ2FyaWEtb3JpZW50YXRpb24nLCBvcHRpb25zLm9ydCA/ICd2ZXJ0aWNhbCcgOiAnaG9yaXpvbnRhbCcpO1xyXG5cclxuXHRcdGlmICggaGFuZGxlTnVtYmVyID09PSAwICkge1xyXG5cdFx0XHRhZGRDbGFzcyhoYW5kbGUsIG9wdGlvbnMuY3NzQ2xhc3Nlcy5oYW5kbGVMb3dlcik7XHJcblx0XHR9XHJcblxyXG5cdFx0ZWxzZSBpZiAoIGhhbmRsZU51bWJlciA9PT0gb3B0aW9ucy5oYW5kbGVzIC0gMSApIHtcclxuXHRcdFx0YWRkQ2xhc3MoaGFuZGxlLCBvcHRpb25zLmNzc0NsYXNzZXMuaGFuZGxlVXBwZXIpO1xyXG5cdFx0fVxyXG5cclxuXHRcdHJldHVybiBvcmlnaW47XHJcblx0fVxyXG5cclxuXHQvLyBJbnNlcnQgbm9kZXMgZm9yIGNvbm5lY3QgZWxlbWVudHNcclxuXHRmdW5jdGlvbiBhZGRDb25uZWN0ICggYmFzZSwgYWRkICkge1xyXG5cclxuXHRcdGlmICggIWFkZCApIHtcclxuXHRcdFx0cmV0dXJuIGZhbHNlO1xyXG5cdFx0fVxyXG5cclxuXHRcdHJldHVybiBhZGROb2RlVG8oYmFzZSwgb3B0aW9ucy5jc3NDbGFzc2VzLmNvbm5lY3QpO1xyXG5cdH1cclxuXHJcblx0Ly8gQWRkIGhhbmRsZXMgdG8gdGhlIHNsaWRlciBiYXNlLlxyXG5cdGZ1bmN0aW9uIGFkZEVsZW1lbnRzICggY29ubmVjdE9wdGlvbnMsIGJhc2UgKSB7XHJcblxyXG5cdFx0dmFyIGNvbm5lY3RCYXNlID0gYWRkTm9kZVRvKGJhc2UsIG9wdGlvbnMuY3NzQ2xhc3Nlcy5jb25uZWN0cyk7XHJcblxyXG5cdFx0c2NvcGVfSGFuZGxlcyA9IFtdO1xyXG5cdFx0c2NvcGVfQ29ubmVjdHMgPSBbXTtcclxuXHJcblx0XHRzY29wZV9Db25uZWN0cy5wdXNoKGFkZENvbm5lY3QoY29ubmVjdEJhc2UsIGNvbm5lY3RPcHRpb25zWzBdKSk7XHJcblxyXG5cdFx0Ly8gWzo6OjpPPT09PU89PT09Tz09PT1dXHJcblx0XHQvLyBjb25uZWN0T3B0aW9ucyA9IFswLCAxLCAxLCAxXVxyXG5cclxuXHRcdGZvciAoIHZhciBpID0gMDsgaSA8IG9wdGlvbnMuaGFuZGxlczsgaSsrICkge1xyXG5cdFx0XHQvLyBLZWVwIGEgbGlzdCBvZiBhbGwgYWRkZWQgaGFuZGxlcy5cclxuXHRcdFx0c2NvcGVfSGFuZGxlcy5wdXNoKGFkZE9yaWdpbihiYXNlLCBpKSk7XHJcblx0XHRcdHNjb3BlX0hhbmRsZU51bWJlcnNbaV0gPSBpO1xyXG5cdFx0XHRzY29wZV9Db25uZWN0cy5wdXNoKGFkZENvbm5lY3QoY29ubmVjdEJhc2UsIGNvbm5lY3RPcHRpb25zW2kgKyAxXSkpO1xyXG5cdFx0fVxyXG5cdH1cclxuXHJcblx0Ly8gSW5pdGlhbGl6ZSBhIHNpbmdsZSBzbGlkZXIuXHJcblx0ZnVuY3Rpb24gYWRkU2xpZGVyICggYWRkVGFyZ2V0ICkge1xyXG5cclxuXHRcdC8vIEFwcGx5IGNsYXNzZXMgYW5kIGRhdGEgdG8gdGhlIHRhcmdldC5cclxuXHRcdGFkZENsYXNzKGFkZFRhcmdldCwgb3B0aW9ucy5jc3NDbGFzc2VzLnRhcmdldCk7XHJcblxyXG5cdFx0aWYgKCBvcHRpb25zLmRpciA9PT0gMCApIHtcclxuXHRcdFx0YWRkQ2xhc3MoYWRkVGFyZ2V0LCBvcHRpb25zLmNzc0NsYXNzZXMubHRyKTtcclxuXHRcdH0gZWxzZSB7XHJcblx0XHRcdGFkZENsYXNzKGFkZFRhcmdldCwgb3B0aW9ucy5jc3NDbGFzc2VzLnJ0bCk7XHJcblx0XHR9XHJcblxyXG5cdFx0aWYgKCBvcHRpb25zLm9ydCA9PT0gMCApIHtcclxuXHRcdFx0YWRkQ2xhc3MoYWRkVGFyZ2V0LCBvcHRpb25zLmNzc0NsYXNzZXMuaG9yaXpvbnRhbCk7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRhZGRDbGFzcyhhZGRUYXJnZXQsIG9wdGlvbnMuY3NzQ2xhc3Nlcy52ZXJ0aWNhbCk7XHJcblx0XHR9XHJcblxyXG5cdFx0c2NvcGVfQmFzZSA9IGFkZE5vZGVUbyhhZGRUYXJnZXQsIG9wdGlvbnMuY3NzQ2xhc3Nlcy5iYXNlKTtcclxuXHR9XHJcblxyXG5cclxuXHRmdW5jdGlvbiBhZGRUb29sdGlwICggaGFuZGxlLCBoYW5kbGVOdW1iZXIgKSB7XHJcblxyXG5cdFx0aWYgKCAhb3B0aW9ucy50b29sdGlwc1toYW5kbGVOdW1iZXJdICkge1xyXG5cdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHR9XHJcblxyXG5cdFx0cmV0dXJuIGFkZE5vZGVUbyhoYW5kbGUuZmlyc3RDaGlsZCwgb3B0aW9ucy5jc3NDbGFzc2VzLnRvb2x0aXApO1xyXG5cdH1cclxuXHJcblx0Ly8gVGhlIHRvb2x0aXBzIG9wdGlvbiBpcyBhIHNob3J0aGFuZCBmb3IgdXNpbmcgdGhlICd1cGRhdGUnIGV2ZW50LlxyXG5cdGZ1bmN0aW9uIHRvb2x0aXBzICggKSB7XHJcblxyXG5cdFx0Ly8gVG9vbHRpcHMgYXJlIGFkZGVkIHdpdGggb3B0aW9ucy50b29sdGlwcyBpbiBvcmlnaW5hbCBvcmRlci5cclxuXHRcdHZhciB0aXBzID0gc2NvcGVfSGFuZGxlcy5tYXAoYWRkVG9vbHRpcCk7XHJcblxyXG5cdFx0YmluZEV2ZW50KCd1cGRhdGUnLCBmdW5jdGlvbih2YWx1ZXMsIGhhbmRsZU51bWJlciwgdW5lbmNvZGVkKSB7XHJcblxyXG5cdFx0XHRpZiAoICF0aXBzW2hhbmRsZU51bWJlcl0gKSB7XHJcblx0XHRcdFx0cmV0dXJuO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHR2YXIgZm9ybWF0dGVkVmFsdWUgPSB2YWx1ZXNbaGFuZGxlTnVtYmVyXTtcclxuXHJcblx0XHRcdGlmICggb3B0aW9ucy50b29sdGlwc1toYW5kbGVOdW1iZXJdICE9PSB0cnVlICkge1xyXG5cdFx0XHRcdGZvcm1hdHRlZFZhbHVlID0gb3B0aW9ucy50b29sdGlwc1toYW5kbGVOdW1iZXJdLnRvKHVuZW5jb2RlZFtoYW5kbGVOdW1iZXJdKTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0dGlwc1toYW5kbGVOdW1iZXJdLmlubmVySFRNTCA9IGZvcm1hdHRlZFZhbHVlO1xyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHJcblx0ZnVuY3Rpb24gYXJpYSAoICkge1xyXG5cclxuXHRcdGJpbmRFdmVudCgndXBkYXRlJywgZnVuY3Rpb24gKCB2YWx1ZXMsIGhhbmRsZU51bWJlciwgdW5lbmNvZGVkLCB0YXAsIHBvc2l0aW9ucyApIHtcclxuXHJcblx0XHRcdC8vIFVwZGF0ZSBBcmlhIFZhbHVlcyBmb3IgYWxsIGhhbmRsZXMsIGFzIGEgY2hhbmdlIGluIG9uZSBjaGFuZ2VzIG1pbiBhbmQgbWF4IHZhbHVlcyBmb3IgdGhlIG5leHQuXHJcblx0XHRcdHNjb3BlX0hhbmRsZU51bWJlcnMuZm9yRWFjaChmdW5jdGlvbiggaW5kZXggKXtcclxuXHJcblx0XHRcdFx0dmFyIGhhbmRsZSA9IHNjb3BlX0hhbmRsZXNbaW5kZXhdO1xyXG5cclxuXHRcdFx0XHR2YXIgbWluID0gY2hlY2tIYW5kbGVQb3NpdGlvbihzY29wZV9Mb2NhdGlvbnMsIGluZGV4LCAwLCB0cnVlLCB0cnVlLCB0cnVlKTtcclxuXHRcdFx0XHR2YXIgbWF4ID0gY2hlY2tIYW5kbGVQb3NpdGlvbihzY29wZV9Mb2NhdGlvbnMsIGluZGV4LCAxMDAsIHRydWUsIHRydWUsIHRydWUpO1xyXG5cclxuXHRcdFx0XHR2YXIgbm93ID0gcG9zaXRpb25zW2luZGV4XTtcclxuXHRcdFx0XHR2YXIgdGV4dCA9IG9wdGlvbnMuYXJpYUZvcm1hdC50byh1bmVuY29kZWRbaW5kZXhdKTtcclxuXHJcblx0XHRcdFx0aGFuZGxlLmNoaWxkcmVuWzBdLnNldEF0dHJpYnV0ZSgnYXJpYS12YWx1ZW1pbicsIG1pbi50b0ZpeGVkKDEpKTtcclxuXHRcdFx0XHRoYW5kbGUuY2hpbGRyZW5bMF0uc2V0QXR0cmlidXRlKCdhcmlhLXZhbHVlbWF4JywgbWF4LnRvRml4ZWQoMSkpO1xyXG5cdFx0XHRcdGhhbmRsZS5jaGlsZHJlblswXS5zZXRBdHRyaWJ1dGUoJ2FyaWEtdmFsdWVub3cnLCBub3cudG9GaXhlZCgxKSk7XHJcblx0XHRcdFx0aGFuZGxlLmNoaWxkcmVuWzBdLnNldEF0dHJpYnV0ZSgnYXJpYS12YWx1ZXRleHQnLCB0ZXh0KTtcclxuXHRcdFx0fSk7XHJcblx0XHR9KTtcclxuXHR9XHJcblxyXG5cclxuXHRmdW5jdGlvbiBnZXRHcm91cCAoIG1vZGUsIHZhbHVlcywgc3RlcHBlZCApIHtcclxuXHJcblx0XHQvLyBVc2UgdGhlIHJhbmdlLlxyXG5cdFx0aWYgKCBtb2RlID09PSAncmFuZ2UnIHx8IG1vZGUgPT09ICdzdGVwcycgKSB7XHJcblx0XHRcdHJldHVybiBzY29wZV9TcGVjdHJ1bS54VmFsO1xyXG5cdFx0fVxyXG5cclxuXHRcdGlmICggbW9kZSA9PT0gJ2NvdW50JyApIHtcclxuXHJcblx0XHRcdGlmICggdmFsdWVzIDwgMiApIHtcclxuXHRcdFx0XHR0aHJvdyBuZXcgRXJyb3IoXCJub1VpU2xpZGVyIChcIiArIFZFUlNJT04gKyBcIik6ICd2YWx1ZXMnICg+PSAyKSByZXF1aXJlZCBmb3IgbW9kZSAnY291bnQnLlwiKTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0Ly8gRGl2aWRlIDAgLSAxMDAgaW4gJ2NvdW50JyBwYXJ0cy5cclxuXHRcdFx0dmFyIGludGVydmFsID0gdmFsdWVzIC0gMTtcclxuXHRcdFx0dmFyIHNwcmVhZCA9ICggMTAwIC8gaW50ZXJ2YWwgKTtcclxuXHJcblx0XHRcdHZhbHVlcyA9IFtdO1xyXG5cclxuXHRcdFx0Ly8gTGlzdCB0aGVzZSBwYXJ0cyBhbmQgaGF2ZSB0aGVtIGhhbmRsZWQgYXMgJ3Bvc2l0aW9ucycuXHJcblx0XHRcdHdoaWxlICggaW50ZXJ2YWwtLSApIHtcclxuXHRcdFx0XHR2YWx1ZXNbIGludGVydmFsIF0gPSAoIGludGVydmFsICogc3ByZWFkICk7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdHZhbHVlcy5wdXNoKDEwMCk7XHJcblxyXG5cdFx0XHRtb2RlID0gJ3Bvc2l0aW9ucyc7XHJcblx0XHR9XHJcblxyXG5cdFx0aWYgKCBtb2RlID09PSAncG9zaXRpb25zJyApIHtcclxuXHJcblx0XHRcdC8vIE1hcCBhbGwgcGVyY2VudGFnZXMgdG8gb24tcmFuZ2UgdmFsdWVzLlxyXG5cdFx0XHRyZXR1cm4gdmFsdWVzLm1hcChmdW5jdGlvbiggdmFsdWUgKXtcclxuXHRcdFx0XHRyZXR1cm4gc2NvcGVfU3BlY3RydW0uZnJvbVN0ZXBwaW5nKCBzdGVwcGVkID8gc2NvcGVfU3BlY3RydW0uZ2V0U3RlcCggdmFsdWUgKSA6IHZhbHVlICk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cclxuXHRcdGlmICggbW9kZSA9PT0gJ3ZhbHVlcycgKSB7XHJcblxyXG5cdFx0XHQvLyBJZiB0aGUgdmFsdWUgbXVzdCBiZSBzdGVwcGVkLCBpdCBuZWVkcyB0byBiZSBjb252ZXJ0ZWQgdG8gYSBwZXJjZW50YWdlIGZpcnN0LlxyXG5cdFx0XHRpZiAoIHN0ZXBwZWQgKSB7XHJcblxyXG5cdFx0XHRcdHJldHVybiB2YWx1ZXMubWFwKGZ1bmN0aW9uKCB2YWx1ZSApe1xyXG5cclxuXHRcdFx0XHRcdC8vIENvbnZlcnQgdG8gcGVyY2VudGFnZSwgYXBwbHkgc3RlcCwgcmV0dXJuIHRvIHZhbHVlLlxyXG5cdFx0XHRcdFx0cmV0dXJuIHNjb3BlX1NwZWN0cnVtLmZyb21TdGVwcGluZyggc2NvcGVfU3BlY3RydW0uZ2V0U3RlcCggc2NvcGVfU3BlY3RydW0udG9TdGVwcGluZyggdmFsdWUgKSApICk7XHJcblx0XHRcdFx0fSk7XHJcblxyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHQvLyBPdGhlcndpc2UsIHdlIGNhbiBzaW1wbHkgdXNlIHRoZSB2YWx1ZXMuXHJcblx0XHRcdHJldHVybiB2YWx1ZXM7XHJcblx0XHR9XHJcblx0fVxyXG5cclxuXHRmdW5jdGlvbiBnZW5lcmF0ZVNwcmVhZCAoIGRlbnNpdHksIG1vZGUsIGdyb3VwICkge1xyXG5cclxuXHRcdGZ1bmN0aW9uIHNhZmVJbmNyZW1lbnQodmFsdWUsIGluY3JlbWVudCkge1xyXG5cdFx0XHQvLyBBdm9pZCBmbG9hdGluZyBwb2ludCB2YXJpYW5jZSBieSBkcm9wcGluZyB0aGUgc21hbGxlc3QgZGVjaW1hbCBwbGFjZXMuXHJcblx0XHRcdHJldHVybiAodmFsdWUgKyBpbmNyZW1lbnQpLnRvRml4ZWQoNykgLyAxO1xyXG5cdFx0fVxyXG5cclxuXHRcdHZhciBpbmRleGVzID0ge307XHJcblx0XHR2YXIgZmlyc3RJblJhbmdlID0gc2NvcGVfU3BlY3RydW0ueFZhbFswXTtcclxuXHRcdHZhciBsYXN0SW5SYW5nZSA9IHNjb3BlX1NwZWN0cnVtLnhWYWxbc2NvcGVfU3BlY3RydW0ueFZhbC5sZW5ndGgtMV07XHJcblx0XHR2YXIgaWdub3JlRmlyc3QgPSBmYWxzZTtcclxuXHRcdHZhciBpZ25vcmVMYXN0ID0gZmFsc2U7XHJcblx0XHR2YXIgcHJldlBjdCA9IDA7XHJcblxyXG5cdFx0Ly8gQ3JlYXRlIGEgY29weSBvZiB0aGUgZ3JvdXAsIHNvcnQgaXQgYW5kIGZpbHRlciBhd2F5IGFsbCBkdXBsaWNhdGVzLlxyXG5cdFx0Z3JvdXAgPSB1bmlxdWUoZ3JvdXAuc2xpY2UoKS5zb3J0KGZ1bmN0aW9uKGEsIGIpeyByZXR1cm4gYSAtIGI7IH0pKTtcclxuXHJcblx0XHQvLyBNYWtlIHN1cmUgdGhlIHJhbmdlIHN0YXJ0cyB3aXRoIHRoZSBmaXJzdCBlbGVtZW50LlxyXG5cdFx0aWYgKCBncm91cFswXSAhPT0gZmlyc3RJblJhbmdlICkge1xyXG5cdFx0XHRncm91cC51bnNoaWZ0KGZpcnN0SW5SYW5nZSk7XHJcblx0XHRcdGlnbm9yZUZpcnN0ID0gdHJ1ZTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBMaWtld2lzZSBmb3IgdGhlIGxhc3Qgb25lLlxyXG5cdFx0aWYgKCBncm91cFtncm91cC5sZW5ndGggLSAxXSAhPT0gbGFzdEluUmFuZ2UgKSB7XHJcblx0XHRcdGdyb3VwLnB1c2gobGFzdEluUmFuZ2UpO1xyXG5cdFx0XHRpZ25vcmVMYXN0ID0gdHJ1ZTtcclxuXHRcdH1cclxuXHJcblx0XHRncm91cC5mb3JFYWNoKGZ1bmN0aW9uICggY3VycmVudCwgaW5kZXggKSB7XHJcblxyXG5cdFx0XHQvLyBHZXQgdGhlIGN1cnJlbnQgc3RlcCBhbmQgdGhlIGxvd2VyICsgdXBwZXIgcG9zaXRpb25zLlxyXG5cdFx0XHR2YXIgc3RlcDtcclxuXHRcdFx0dmFyIGk7XHJcblx0XHRcdHZhciBxO1xyXG5cdFx0XHR2YXIgbG93ID0gY3VycmVudDtcclxuXHRcdFx0dmFyIGhpZ2ggPSBncm91cFtpbmRleCsxXTtcclxuXHRcdFx0dmFyIG5ld1BjdDtcclxuXHRcdFx0dmFyIHBjdERpZmZlcmVuY2U7XHJcblx0XHRcdHZhciBwY3RQb3M7XHJcblx0XHRcdHZhciB0eXBlO1xyXG5cdFx0XHR2YXIgc3RlcHM7XHJcblx0XHRcdHZhciByZWFsU3RlcHM7XHJcblx0XHRcdHZhciBzdGVwc2l6ZTtcclxuXHJcblx0XHRcdC8vIFdoZW4gdXNpbmcgJ3N0ZXBzJyBtb2RlLCB1c2UgdGhlIHByb3ZpZGVkIHN0ZXBzLlxyXG5cdFx0XHQvLyBPdGhlcndpc2UsIHdlJ2xsIHN0ZXAgb24gdG8gdGhlIG5leHQgc3VicmFuZ2UuXHJcblx0XHRcdGlmICggbW9kZSA9PT0gJ3N0ZXBzJyApIHtcclxuXHRcdFx0XHRzdGVwID0gc2NvcGVfU3BlY3RydW0ueE51bVN0ZXBzWyBpbmRleCBdO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHQvLyBEZWZhdWx0IHRvIGEgJ2Z1bGwnIHN0ZXAuXHJcblx0XHRcdGlmICggIXN0ZXAgKSB7XHJcblx0XHRcdFx0c3RlcCA9IGhpZ2gtbG93O1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHQvLyBMb3cgY2FuIGJlIDAsIHNvIHRlc3QgZm9yIGZhbHNlLiBJZiBoaWdoIGlzIHVuZGVmaW5lZCxcclxuXHRcdFx0Ly8gd2UgYXJlIGF0IHRoZSBsYXN0IHN1YnJhbmdlLiBJbmRleCAwIGlzIGFscmVhZHkgaGFuZGxlZC5cclxuXHRcdFx0aWYgKCBsb3cgPT09IGZhbHNlIHx8IGhpZ2ggPT09IHVuZGVmaW5lZCApIHtcclxuXHRcdFx0XHRyZXR1cm47XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdC8vIE1ha2Ugc3VyZSBzdGVwIGlzbid0IDAsIHdoaWNoIHdvdWxkIGNhdXNlIGFuIGluZmluaXRlIGxvb3AgKCM2NTQpXHJcblx0XHRcdHN0ZXAgPSBNYXRoLm1heChzdGVwLCAwLjAwMDAwMDEpO1xyXG5cclxuXHRcdFx0Ly8gRmluZCBhbGwgc3RlcHMgaW4gdGhlIHN1YnJhbmdlLlxyXG5cdFx0XHRmb3IgKCBpID0gbG93OyBpIDw9IGhpZ2g7IGkgPSBzYWZlSW5jcmVtZW50KGksIHN0ZXApICkge1xyXG5cclxuXHRcdFx0XHQvLyBHZXQgdGhlIHBlcmNlbnRhZ2UgdmFsdWUgZm9yIHRoZSBjdXJyZW50IHN0ZXAsXHJcblx0XHRcdFx0Ly8gY2FsY3VsYXRlIHRoZSBzaXplIGZvciB0aGUgc3VicmFuZ2UuXHJcblx0XHRcdFx0bmV3UGN0ID0gc2NvcGVfU3BlY3RydW0udG9TdGVwcGluZyggaSApO1xyXG5cdFx0XHRcdHBjdERpZmZlcmVuY2UgPSBuZXdQY3QgLSBwcmV2UGN0O1xyXG5cclxuXHRcdFx0XHRzdGVwcyA9IHBjdERpZmZlcmVuY2UgLyBkZW5zaXR5O1xyXG5cdFx0XHRcdHJlYWxTdGVwcyA9IE1hdGgucm91bmQoc3RlcHMpO1xyXG5cclxuXHRcdFx0XHQvLyBUaGlzIHJhdGlvIHJlcHJlc2VudHMgdGhlIGFtb3VudCBvZiBwZXJjZW50YWdlLXNwYWNlIGEgcG9pbnQgaW5kaWNhdGVzLlxyXG5cdFx0XHRcdC8vIEZvciBhIGRlbnNpdHkgMSB0aGUgcG9pbnRzL3BlcmNlbnRhZ2UgPSAxLiBGb3IgZGVuc2l0eSAyLCB0aGF0IHBlcmNlbnRhZ2UgbmVlZHMgdG8gYmUgcmUtZGV2aWRlZC5cclxuXHRcdFx0XHQvLyBSb3VuZCB0aGUgcGVyY2VudGFnZSBvZmZzZXQgdG8gYW4gZXZlbiBudW1iZXIsIHRoZW4gZGl2aWRlIGJ5IHR3b1xyXG5cdFx0XHRcdC8vIHRvIHNwcmVhZCB0aGUgb2Zmc2V0IG9uIGJvdGggc2lkZXMgb2YgdGhlIHJhbmdlLlxyXG5cdFx0XHRcdHN0ZXBzaXplID0gcGN0RGlmZmVyZW5jZS9yZWFsU3RlcHM7XHJcblxyXG5cdFx0XHRcdC8vIERpdmlkZSBhbGwgcG9pbnRzIGV2ZW5seSwgYWRkaW5nIHRoZSBjb3JyZWN0IG51bWJlciB0byB0aGlzIHN1YnJhbmdlLlxyXG5cdFx0XHRcdC8vIFJ1biB1cCB0byA8PSBzbyB0aGF0IDEwMCUgZ2V0cyBhIHBvaW50LCBldmVudCBpZiBpZ25vcmVMYXN0IGlzIHNldC5cclxuXHRcdFx0XHRmb3IgKCBxID0gMTsgcSA8PSByZWFsU3RlcHM7IHEgKz0gMSApIHtcclxuXHJcblx0XHRcdFx0XHQvLyBUaGUgcmF0aW8gYmV0d2VlbiB0aGUgcm91bmRlZCB2YWx1ZSBhbmQgdGhlIGFjdHVhbCBzaXplIG1pZ2h0IGJlIH4xJSBvZmYuXHJcblx0XHRcdFx0XHQvLyBDb3JyZWN0IHRoZSBwZXJjZW50YWdlIG9mZnNldCBieSB0aGUgbnVtYmVyIG9mIHBvaW50c1xyXG5cdFx0XHRcdFx0Ly8gcGVyIHN1YnJhbmdlLiBkZW5zaXR5ID0gMSB3aWxsIHJlc3VsdCBpbiAxMDAgcG9pbnRzIG9uIHRoZVxyXG5cdFx0XHRcdFx0Ly8gZnVsbCByYW5nZSwgMiBmb3IgNTAsIDQgZm9yIDI1LCBldGMuXHJcblx0XHRcdFx0XHRwY3RQb3MgPSBwcmV2UGN0ICsgKCBxICogc3RlcHNpemUgKTtcclxuXHRcdFx0XHRcdGluZGV4ZXNbcGN0UG9zLnRvRml4ZWQoNSldID0gWyd4JywgMF07XHJcblx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHQvLyBEZXRlcm1pbmUgdGhlIHBvaW50IHR5cGUuXHJcblx0XHRcdFx0dHlwZSA9IChncm91cC5pbmRleE9mKGkpID4gLTEpID8gMSA6ICggbW9kZSA9PT0gJ3N0ZXBzJyA/IDIgOiAwICk7XHJcblxyXG5cdFx0XHRcdC8vIEVuZm9yY2UgdGhlICdpZ25vcmVGaXJzdCcgb3B0aW9uIGJ5IG92ZXJ3cml0aW5nIHRoZSB0eXBlIGZvciAwLlxyXG5cdFx0XHRcdGlmICggIWluZGV4ICYmIGlnbm9yZUZpcnN0ICkge1xyXG5cdFx0XHRcdFx0dHlwZSA9IDA7XHJcblx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHRpZiAoICEoaSA9PT0gaGlnaCAmJiBpZ25vcmVMYXN0KSkge1xyXG5cdFx0XHRcdFx0Ly8gTWFyayB0aGUgJ3R5cGUnIG9mIHRoaXMgcG9pbnQuIDAgPSBwbGFpbiwgMSA9IHJlYWwgdmFsdWUsIDIgPSBzdGVwIHZhbHVlLlxyXG5cdFx0XHRcdFx0aW5kZXhlc1tuZXdQY3QudG9GaXhlZCg1KV0gPSBbaSwgdHlwZV07XHJcblx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHQvLyBVcGRhdGUgdGhlIHBlcmNlbnRhZ2UgY291bnQuXHJcblx0XHRcdFx0cHJldlBjdCA9IG5ld1BjdDtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblxyXG5cdFx0cmV0dXJuIGluZGV4ZXM7XHJcblx0fVxyXG5cclxuXHRmdW5jdGlvbiBhZGRNYXJraW5nICggc3ByZWFkLCBmaWx0ZXJGdW5jLCBmb3JtYXR0ZXIgKSB7XHJcblxyXG5cdFx0dmFyIGVsZW1lbnQgPSBzY29wZV9Eb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuXHJcblx0XHR2YXIgdmFsdWVTaXplQ2xhc3NlcyA9IFtcclxuXHRcdFx0b3B0aW9ucy5jc3NDbGFzc2VzLnZhbHVlTm9ybWFsLFxyXG5cdFx0XHRvcHRpb25zLmNzc0NsYXNzZXMudmFsdWVMYXJnZSxcclxuXHRcdFx0b3B0aW9ucy5jc3NDbGFzc2VzLnZhbHVlU3ViXHJcblx0XHRdO1xyXG5cdFx0dmFyIG1hcmtlclNpemVDbGFzc2VzID0gW1xyXG5cdFx0XHRvcHRpb25zLmNzc0NsYXNzZXMubWFya2VyTm9ybWFsLFxyXG5cdFx0XHRvcHRpb25zLmNzc0NsYXNzZXMubWFya2VyTGFyZ2UsXHJcblx0XHRcdG9wdGlvbnMuY3NzQ2xhc3Nlcy5tYXJrZXJTdWJcclxuXHRcdF07XHJcblx0XHR2YXIgdmFsdWVPcmllbnRhdGlvbkNsYXNzZXMgPSBbXHJcblx0XHRcdG9wdGlvbnMuY3NzQ2xhc3Nlcy52YWx1ZUhvcml6b250YWwsXHJcblx0XHRcdG9wdGlvbnMuY3NzQ2xhc3Nlcy52YWx1ZVZlcnRpY2FsXHJcblx0XHRdO1xyXG5cdFx0dmFyIG1hcmtlck9yaWVudGF0aW9uQ2xhc3NlcyA9IFtcclxuXHRcdFx0b3B0aW9ucy5jc3NDbGFzc2VzLm1hcmtlckhvcml6b250YWwsXHJcblx0XHRcdG9wdGlvbnMuY3NzQ2xhc3Nlcy5tYXJrZXJWZXJ0aWNhbFxyXG5cdFx0XTtcclxuXHJcblx0XHRhZGRDbGFzcyhlbGVtZW50LCBvcHRpb25zLmNzc0NsYXNzZXMucGlwcyk7XHJcblx0XHRhZGRDbGFzcyhlbGVtZW50LCBvcHRpb25zLm9ydCA9PT0gMCA/IG9wdGlvbnMuY3NzQ2xhc3Nlcy5waXBzSG9yaXpvbnRhbCA6IG9wdGlvbnMuY3NzQ2xhc3Nlcy5waXBzVmVydGljYWwpO1xyXG5cclxuXHRcdGZ1bmN0aW9uIGdldENsYXNzZXMoIHR5cGUsIHNvdXJjZSApe1xyXG5cdFx0XHR2YXIgYSA9IHNvdXJjZSA9PT0gb3B0aW9ucy5jc3NDbGFzc2VzLnZhbHVlO1xyXG5cdFx0XHR2YXIgb3JpZW50YXRpb25DbGFzc2VzID0gYSA/IHZhbHVlT3JpZW50YXRpb25DbGFzc2VzIDogbWFya2VyT3JpZW50YXRpb25DbGFzc2VzO1xyXG5cdFx0XHR2YXIgc2l6ZUNsYXNzZXMgPSBhID8gdmFsdWVTaXplQ2xhc3NlcyA6IG1hcmtlclNpemVDbGFzc2VzO1xyXG5cclxuXHRcdFx0cmV0dXJuIHNvdXJjZSArICcgJyArIG9yaWVudGF0aW9uQ2xhc3Nlc1tvcHRpb25zLm9ydF0gKyAnICcgKyBzaXplQ2xhc3Nlc1t0eXBlXTtcclxuXHRcdH1cclxuXHJcblx0XHRmdW5jdGlvbiBhZGRTcHJlYWQgKCBvZmZzZXQsIHZhbHVlcyApe1xyXG5cclxuXHRcdFx0Ly8gQXBwbHkgdGhlIGZpbHRlciBmdW5jdGlvbiwgaWYgaXQgaXMgc2V0LlxyXG5cdFx0XHR2YWx1ZXNbMV0gPSAodmFsdWVzWzFdICYmIGZpbHRlckZ1bmMpID8gZmlsdGVyRnVuYyh2YWx1ZXNbMF0sIHZhbHVlc1sxXSkgOiB2YWx1ZXNbMV07XHJcblxyXG5cdFx0XHQvLyBBZGQgYSBtYXJrZXIgZm9yIGV2ZXJ5IHBvaW50XHJcblx0XHRcdHZhciBub2RlID0gYWRkTm9kZVRvKGVsZW1lbnQsIGZhbHNlKTtcclxuXHRcdFx0XHRub2RlLmNsYXNzTmFtZSA9IGdldENsYXNzZXModmFsdWVzWzFdLCBvcHRpb25zLmNzc0NsYXNzZXMubWFya2VyKTtcclxuXHRcdFx0XHRub2RlLnN0eWxlW29wdGlvbnMuc3R5bGVdID0gb2Zmc2V0ICsgJyUnO1xyXG5cclxuXHRcdFx0Ly8gVmFsdWVzIGFyZSBvbmx5IGFwcGVuZGVkIGZvciBwb2ludHMgbWFya2VkICcxJyBvciAnMicuXHJcblx0XHRcdGlmICggdmFsdWVzWzFdICkge1xyXG5cdFx0XHRcdG5vZGUgPSBhZGROb2RlVG8oZWxlbWVudCwgZmFsc2UpO1xyXG5cdFx0XHRcdG5vZGUuY2xhc3NOYW1lID0gZ2V0Q2xhc3Nlcyh2YWx1ZXNbMV0sIG9wdGlvbnMuY3NzQ2xhc3Nlcy52YWx1ZSk7XHJcblx0XHRcdFx0bm9kZS5zZXRBdHRyaWJ1dGUoJ2RhdGEtdmFsdWUnLCB2YWx1ZXNbMF0pO1xyXG5cdFx0XHRcdG5vZGUuc3R5bGVbb3B0aW9ucy5zdHlsZV0gPSBvZmZzZXQgKyAnJSc7XHJcblx0XHRcdFx0bm9kZS5pbm5lclRleHQgPSBmb3JtYXR0ZXIudG8odmFsdWVzWzBdKTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEFwcGVuZCBhbGwgcG9pbnRzLlxyXG5cdFx0T2JqZWN0LmtleXMoc3ByZWFkKS5mb3JFYWNoKGZ1bmN0aW9uKGEpe1xyXG5cdFx0XHRhZGRTcHJlYWQoYSwgc3ByZWFkW2FdKTtcclxuXHRcdH0pO1xyXG5cclxuXHRcdHJldHVybiBlbGVtZW50O1xyXG5cdH1cclxuXHJcblx0ZnVuY3Rpb24gcmVtb3ZlUGlwcyAoICkge1xyXG5cdFx0aWYgKCBzY29wZV9QaXBzICkge1xyXG5cdFx0XHRyZW1vdmVFbGVtZW50KHNjb3BlX1BpcHMpO1xyXG5cdFx0XHRzY29wZV9QaXBzID0gbnVsbDtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdGZ1bmN0aW9uIHBpcHMgKCBncmlkICkge1xyXG5cclxuXHRcdC8vIEZpeCAjNjY5XHJcblx0XHRyZW1vdmVQaXBzKCk7XHJcblxyXG5cdFx0dmFyIG1vZGUgPSBncmlkLm1vZGU7XHJcblx0XHR2YXIgZGVuc2l0eSA9IGdyaWQuZGVuc2l0eSB8fCAxO1xyXG5cdFx0dmFyIGZpbHRlciA9IGdyaWQuZmlsdGVyIHx8IGZhbHNlO1xyXG5cdFx0dmFyIHZhbHVlcyA9IGdyaWQudmFsdWVzIHx8IGZhbHNlO1xyXG5cdFx0dmFyIHN0ZXBwZWQgPSBncmlkLnN0ZXBwZWQgfHwgZmFsc2U7XHJcblx0XHR2YXIgZ3JvdXAgPSBnZXRHcm91cCggbW9kZSwgdmFsdWVzLCBzdGVwcGVkICk7XHJcblx0XHR2YXIgc3ByZWFkID0gZ2VuZXJhdGVTcHJlYWQoIGRlbnNpdHksIG1vZGUsIGdyb3VwICk7XHJcblx0XHR2YXIgZm9ybWF0ID0gZ3JpZC5mb3JtYXQgfHwge1xyXG5cdFx0XHR0bzogTWF0aC5yb3VuZFxyXG5cdFx0fTtcclxuXHJcblx0XHRzY29wZV9QaXBzID0gc2NvcGVfVGFyZ2V0LmFwcGVuZENoaWxkKGFkZE1hcmtpbmcoXHJcblx0XHRcdHNwcmVhZCxcclxuXHRcdFx0ZmlsdGVyLFxyXG5cdFx0XHRmb3JtYXRcclxuXHRcdCkpO1xyXG5cclxuXHRcdHJldHVybiBzY29wZV9QaXBzO1xyXG5cdH1cclxuXHJcbi8qISBJbiB0aGlzIGZpbGU6IEJyb3dzZXIgZXZlbnRzIChub3Qgc2xpZGVyIGV2ZW50cyBsaWtlIHNsaWRlLCBjaGFuZ2UpOyAqL1xyXG5cclxuXHQvLyBTaG9ydGhhbmQgZm9yIGJhc2UgZGltZW5zaW9ucy5cclxuXHRmdW5jdGlvbiBiYXNlU2l6ZSAoICkge1xyXG5cdFx0dmFyIHJlY3QgPSBzY29wZV9CYXNlLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xyXG5cdFx0dmFyIGFsdCA9ICdvZmZzZXQnICsgWydXaWR0aCcsICdIZWlnaHQnXVtvcHRpb25zLm9ydF07XHJcblx0XHRyZXR1cm4gb3B0aW9ucy5vcnQgPT09IDAgPyAocmVjdC53aWR0aHx8c2NvcGVfQmFzZVthbHRdKSA6IChyZWN0LmhlaWdodHx8c2NvcGVfQmFzZVthbHRdKTtcclxuXHR9XHJcblxyXG5cdC8vIEhhbmRsZXIgZm9yIGF0dGFjaGluZyBldmVudHMgdHJvdWdoIGEgcHJveHkuXHJcblx0ZnVuY3Rpb24gYXR0YWNoRXZlbnQgKCBldmVudHMsIGVsZW1lbnQsIGNhbGxiYWNrLCBkYXRhICkge1xyXG5cclxuXHRcdC8vIFRoaXMgZnVuY3Rpb24gY2FuIGJlIHVzZWQgdG8gJ2ZpbHRlcicgZXZlbnRzIHRvIHRoZSBzbGlkZXIuXHJcblx0XHQvLyBlbGVtZW50IGlzIGEgbm9kZSwgbm90IGEgbm9kZUxpc3RcclxuXHJcblx0XHR2YXIgbWV0aG9kID0gZnVuY3Rpb24gKCBlICl7XHJcblxyXG5cdFx0XHRlID0gZml4RXZlbnQoZSwgZGF0YS5wYWdlT2Zmc2V0LCBkYXRhLnRhcmdldCB8fCBlbGVtZW50KTtcclxuXHJcblx0XHRcdC8vIGZpeEV2ZW50IHJldHVybnMgZmFsc2UgaWYgdGhpcyBldmVudCBoYXMgYSBkaWZmZXJlbnQgdGFyZ2V0XHJcblx0XHRcdC8vIHdoZW4gaGFuZGxpbmcgKG11bHRpLSkgdG91Y2ggZXZlbnRzO1xyXG5cdFx0XHRpZiAoICFlICkge1xyXG5cdFx0XHRcdHJldHVybiBmYWxzZTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0Ly8gZG9Ob3RSZWplY3QgaXMgcGFzc2VkIGJ5IGFsbCBlbmQgZXZlbnRzIHRvIG1ha2Ugc3VyZSByZWxlYXNlZCB0b3VjaGVzXHJcblx0XHRcdC8vIGFyZSBub3QgcmVqZWN0ZWQsIGxlYXZpbmcgdGhlIHNsaWRlciBcInN0dWNrXCIgdG8gdGhlIGN1cnNvcjtcclxuXHRcdFx0aWYgKCBzY29wZV9UYXJnZXQuaGFzQXR0cmlidXRlKCdkaXNhYmxlZCcpICYmICFkYXRhLmRvTm90UmVqZWN0ICkge1xyXG5cdFx0XHRcdHJldHVybiBmYWxzZTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0Ly8gU3RvcCBpZiBhbiBhY3RpdmUgJ3RhcCcgdHJhbnNpdGlvbiBpcyB0YWtpbmcgcGxhY2UuXHJcblx0XHRcdGlmICggaGFzQ2xhc3Moc2NvcGVfVGFyZ2V0LCBvcHRpb25zLmNzc0NsYXNzZXMudGFwKSAmJiAhZGF0YS5kb05vdFJlamVjdCApIHtcclxuXHRcdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdC8vIElnbm9yZSByaWdodCBvciBtaWRkbGUgY2xpY2tzIG9uIHN0YXJ0ICM0NTRcclxuXHRcdFx0aWYgKCBldmVudHMgPT09IGFjdGlvbnMuc3RhcnQgJiYgZS5idXR0b25zICE9PSB1bmRlZmluZWQgJiYgZS5idXR0b25zID4gMSApIHtcclxuXHRcdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdC8vIElnbm9yZSByaWdodCBvciBtaWRkbGUgY2xpY2tzIG9uIHN0YXJ0ICM0NTRcclxuXHRcdFx0aWYgKCBkYXRhLmhvdmVyICYmIGUuYnV0dG9ucyApIHtcclxuXHRcdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdC8vICdzdXBwb3J0c1Bhc3NpdmUnIGlzIG9ubHkgdHJ1ZSBpZiBhIGJyb3dzZXIgYWxzbyBzdXBwb3J0cyB0b3VjaC1hY3Rpb246IG5vbmUgaW4gQ1NTLlxyXG5cdFx0XHQvLyBpT1Mgc2FmYXJpIGRvZXMgbm90LCBzbyBpdCBkb2Vzbid0IGdldCB0byBiZW5lZml0IGZyb20gcGFzc2l2ZSBzY3JvbGxpbmcuIGlPUyBkb2VzIHN1cHBvcnRcclxuXHRcdFx0Ly8gdG91Y2gtYWN0aW9uOiBtYW5pcHVsYXRpb24sIGJ1dCB0aGF0IGFsbG93cyBwYW5uaW5nLCB3aGljaCBicmVha3NcclxuXHRcdFx0Ly8gc2xpZGVycyBhZnRlciB6b29taW5nL29uIG5vbi1yZXNwb25zaXZlIHBhZ2VzLlxyXG5cdFx0XHQvLyBTZWU6IGh0dHBzOi8vYnVncy53ZWJraXQub3JnL3Nob3dfYnVnLmNnaT9pZD0xMzMxMTJcclxuXHRcdFx0aWYgKCAhc3VwcG9ydHNQYXNzaXZlICkge1xyXG5cdFx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0ZS5jYWxjUG9pbnQgPSBlLnBvaW50c1sgb3B0aW9ucy5vcnQgXTtcclxuXHJcblx0XHRcdC8vIENhbGwgdGhlIGV2ZW50IGhhbmRsZXIgd2l0aCB0aGUgZXZlbnQgWyBhbmQgYWRkaXRpb25hbCBkYXRhIF0uXHJcblx0XHRcdGNhbGxiYWNrICggZSwgZGF0YSApO1xyXG5cdFx0fTtcclxuXHJcblx0XHR2YXIgbWV0aG9kcyA9IFtdO1xyXG5cclxuXHRcdC8vIEJpbmQgYSBjbG9zdXJlIG9uIHRoZSB0YXJnZXQgZm9yIGV2ZXJ5IGV2ZW50IHR5cGUuXHJcblx0XHRldmVudHMuc3BsaXQoJyAnKS5mb3JFYWNoKGZ1bmN0aW9uKCBldmVudE5hbWUgKXtcclxuXHRcdFx0ZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKGV2ZW50TmFtZSwgbWV0aG9kLCBzdXBwb3J0c1Bhc3NpdmUgPyB7IHBhc3NpdmU6IHRydWUgfSA6IGZhbHNlKTtcclxuXHRcdFx0bWV0aG9kcy5wdXNoKFtldmVudE5hbWUsIG1ldGhvZF0pO1xyXG5cdFx0fSk7XHJcblxyXG5cdFx0cmV0dXJuIG1ldGhvZHM7XHJcblx0fVxyXG5cclxuXHQvLyBQcm92aWRlIGEgY2xlYW4gZXZlbnQgd2l0aCBzdGFuZGFyZGl6ZWQgb2Zmc2V0IHZhbHVlcy5cclxuXHRmdW5jdGlvbiBmaXhFdmVudCAoIGUsIHBhZ2VPZmZzZXQsIGV2ZW50VGFyZ2V0ICkge1xyXG5cclxuXHRcdC8vIEZpbHRlciB0aGUgZXZlbnQgdG8gcmVnaXN0ZXIgdGhlIHR5cGUsIHdoaWNoIGNhbiBiZVxyXG5cdFx0Ly8gdG91Y2gsIG1vdXNlIG9yIHBvaW50ZXIuIE9mZnNldCBjaGFuZ2VzIG5lZWQgdG8gYmVcclxuXHRcdC8vIG1hZGUgb24gYW4gZXZlbnQgc3BlY2lmaWMgYmFzaXMuXHJcblx0XHR2YXIgdG91Y2ggPSBlLnR5cGUuaW5kZXhPZigndG91Y2gnKSA9PT0gMDtcclxuXHRcdHZhciBtb3VzZSA9IGUudHlwZS5pbmRleE9mKCdtb3VzZScpID09PSAwO1xyXG5cdFx0dmFyIHBvaW50ZXIgPSBlLnR5cGUuaW5kZXhPZigncG9pbnRlcicpID09PSAwO1xyXG5cclxuXHRcdHZhciB4O1xyXG5cdFx0dmFyIHk7XHJcblxyXG5cdFx0Ly8gSUUxMCBpbXBsZW1lbnRlZCBwb2ludGVyIGV2ZW50cyB3aXRoIGEgcHJlZml4O1xyXG5cdFx0aWYgKCBlLnR5cGUuaW5kZXhPZignTVNQb2ludGVyJykgPT09IDAgKSB7XHJcblx0XHRcdHBvaW50ZXIgPSB0cnVlO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEluIHRoZSBldmVudCB0aGF0IG11bHRpdG91Y2ggaXMgYWN0aXZhdGVkLCB0aGUgb25seSB0aGluZyBvbmUgaGFuZGxlIHNob3VsZCBiZSBjb25jZXJuZWRcclxuXHRcdC8vIGFib3V0IGlzIHRoZSB0b3VjaGVzIHRoYXQgb3JpZ2luYXRlZCBvbiB0b3Agb2YgaXQuXHJcblx0XHRpZiAoIHRvdWNoICkge1xyXG5cclxuXHRcdFx0Ly8gUmV0dXJucyB0cnVlIGlmIGEgdG91Y2ggb3JpZ2luYXRlZCBvbiB0aGUgdGFyZ2V0LlxyXG5cdFx0XHR2YXIgaXNUb3VjaE9uVGFyZ2V0ID0gZnVuY3Rpb24gKGNoZWNrVG91Y2gpIHtcclxuXHRcdFx0XHRyZXR1cm4gY2hlY2tUb3VjaC50YXJnZXQgPT09IGV2ZW50VGFyZ2V0IHx8IGV2ZW50VGFyZ2V0LmNvbnRhaW5zKGNoZWNrVG91Y2gudGFyZ2V0KTtcclxuXHRcdFx0fTtcclxuXHJcblx0XHRcdC8vIEluIHRoZSBjYXNlIG9mIHRvdWNoc3RhcnQgZXZlbnRzLCB3ZSBuZWVkIHRvIG1ha2Ugc3VyZSB0aGVyZSBpcyBzdGlsbCBubyBtb3JlIHRoYW4gb25lXHJcblx0XHRcdC8vIHRvdWNoIG9uIHRoZSB0YXJnZXQgc28gd2UgbG9vayBhbW9uZ3N0IGFsbCB0b3VjaGVzLlxyXG5cdFx0XHRpZiAoZS50eXBlID09PSAndG91Y2hzdGFydCcpIHtcclxuXHJcblx0XHRcdFx0dmFyIHRhcmdldFRvdWNoZXMgPSBBcnJheS5wcm90b3R5cGUuZmlsdGVyLmNhbGwoZS50b3VjaGVzLCBpc1RvdWNoT25UYXJnZXQpO1xyXG5cclxuXHRcdFx0XHQvLyBEbyBub3Qgc3VwcG9ydCBtb3JlIHRoYW4gb25lIHRvdWNoIHBlciBoYW5kbGUuXHJcblx0XHRcdFx0aWYgKCB0YXJnZXRUb3VjaGVzLmxlbmd0aCA+IDEgKSB7XHJcblx0XHRcdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHR4ID0gdGFyZ2V0VG91Y2hlc1swXS5wYWdlWDtcclxuXHRcdFx0XHR5ID0gdGFyZ2V0VG91Y2hlc1swXS5wYWdlWTtcclxuXHJcblx0XHRcdH0gZWxzZSB7XHJcblxyXG5cdFx0XHRcdC8vIEluIHRoZSBvdGhlciBjYXNlcywgZmluZCBvbiBjaGFuZ2VkVG91Y2hlcyBpcyBlbm91Z2guXHJcblx0XHRcdFx0dmFyIHRhcmdldFRvdWNoID0gQXJyYXkucHJvdG90eXBlLmZpbmQuY2FsbChlLmNoYW5nZWRUb3VjaGVzLCBpc1RvdWNoT25UYXJnZXQpO1xyXG5cclxuXHRcdFx0XHQvLyBDYW5jZWwgaWYgdGhlIHRhcmdldCB0b3VjaCBoYXMgbm90IG1vdmVkLlxyXG5cdFx0XHRcdGlmICggIXRhcmdldFRvdWNoICkge1xyXG5cdFx0XHRcdFx0cmV0dXJuIGZhbHNlO1xyXG5cdFx0XHRcdH1cclxuXHJcblx0XHRcdFx0eCA9IHRhcmdldFRvdWNoLnBhZ2VYO1xyXG5cdFx0XHRcdHkgPSB0YXJnZXRUb3VjaC5wYWdlWTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdHBhZ2VPZmZzZXQgPSBwYWdlT2Zmc2V0IHx8IGdldFBhZ2VPZmZzZXQoc2NvcGVfRG9jdW1lbnQpO1xyXG5cclxuXHRcdGlmICggbW91c2UgfHwgcG9pbnRlciApIHtcclxuXHRcdFx0eCA9IGUuY2xpZW50WCArIHBhZ2VPZmZzZXQueDtcclxuXHRcdFx0eSA9IGUuY2xpZW50WSArIHBhZ2VPZmZzZXQueTtcclxuXHRcdH1cclxuXHJcblx0XHRlLnBhZ2VPZmZzZXQgPSBwYWdlT2Zmc2V0O1xyXG5cdFx0ZS5wb2ludHMgPSBbeCwgeV07XHJcblx0XHRlLmN1cnNvciA9IG1vdXNlIHx8IHBvaW50ZXI7IC8vIEZpeCAjNDM1XHJcblxyXG5cdFx0cmV0dXJuIGU7XHJcblx0fVxyXG5cclxuXHQvLyBUcmFuc2xhdGUgYSBjb29yZGluYXRlIGluIHRoZSBkb2N1bWVudCB0byBhIHBlcmNlbnRhZ2Ugb24gdGhlIHNsaWRlclxyXG5cdGZ1bmN0aW9uIGNhbGNQb2ludFRvUGVyY2VudGFnZSAoIGNhbGNQb2ludCApIHtcclxuXHRcdHZhciBsb2NhdGlvbiA9IGNhbGNQb2ludCAtIG9mZnNldChzY29wZV9CYXNlLCBvcHRpb25zLm9ydCk7XHJcblx0XHR2YXIgcHJvcG9zYWwgPSAoIGxvY2F0aW9uICogMTAwICkgLyBiYXNlU2l6ZSgpO1xyXG5cclxuXHRcdC8vIENsYW1wIHByb3Bvc2FsIGJldHdlZW4gMCUgYW5kIDEwMCVcclxuXHRcdC8vIE91dC1vZi1ib3VuZCBjb29yZGluYXRlcyBtYXkgb2NjdXIgd2hlbiAubm9VaS1iYXNlIHBzZXVkby1lbGVtZW50c1xyXG5cdFx0Ly8gYXJlIHVzZWQgKGUuZy4gY29udGFpbmVkIGhhbmRsZXMgZmVhdHVyZSlcclxuXHRcdHByb3Bvc2FsID0gbGltaXQocHJvcG9zYWwpO1xyXG5cclxuXHRcdHJldHVybiBvcHRpb25zLmRpciA/IDEwMCAtIHByb3Bvc2FsIDogcHJvcG9zYWw7XHJcblx0fVxyXG5cclxuXHQvLyBGaW5kIGhhbmRsZSBjbG9zZXN0IHRvIGEgY2VydGFpbiBwZXJjZW50YWdlIG9uIHRoZSBzbGlkZXJcclxuXHRmdW5jdGlvbiBnZXRDbG9zZXN0SGFuZGxlICggcHJvcG9zYWwgKSB7XHJcblxyXG5cdFx0dmFyIGNsb3Nlc3QgPSAxMDA7XHJcblx0XHR2YXIgaGFuZGxlTnVtYmVyID0gZmFsc2U7XHJcblxyXG5cdFx0c2NvcGVfSGFuZGxlcy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZSwgaW5kZXgpe1xyXG5cclxuXHRcdFx0Ly8gRGlzYWJsZWQgaGFuZGxlcyBhcmUgaWdub3JlZFxyXG5cdFx0XHRpZiAoIGhhbmRsZS5oYXNBdHRyaWJ1dGUoJ2Rpc2FibGVkJykgKSB7XHJcblx0XHRcdFx0cmV0dXJuO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHR2YXIgcG9zID0gTWF0aC5hYnMoc2NvcGVfTG9jYXRpb25zW2luZGV4XSAtIHByb3Bvc2FsKTtcclxuXHJcblx0XHRcdGlmICggcG9zIDwgY2xvc2VzdCB8fCAocG9zID09PSAxMDAgJiYgY2xvc2VzdCA9PT0gMTAwKSApIHtcclxuXHRcdFx0XHRoYW5kbGVOdW1iZXIgPSBpbmRleDtcclxuXHRcdFx0XHRjbG9zZXN0ID0gcG9zO1xyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHJcblx0XHRyZXR1cm4gaGFuZGxlTnVtYmVyO1xyXG5cdH1cclxuXHJcblx0Ly8gRmlyZSAnZW5kJyB3aGVuIGEgbW91c2Ugb3IgcGVuIGxlYXZlcyB0aGUgZG9jdW1lbnQuXHJcblx0ZnVuY3Rpb24gZG9jdW1lbnRMZWF2ZSAoIGV2ZW50LCBkYXRhICkge1xyXG5cdFx0aWYgKCBldmVudC50eXBlID09PSBcIm1vdXNlb3V0XCIgJiYgZXZlbnQudGFyZ2V0Lm5vZGVOYW1lID09PSBcIkhUTUxcIiAmJiBldmVudC5yZWxhdGVkVGFyZ2V0ID09PSBudWxsICl7XHJcblx0XHRcdGV2ZW50RW5kIChldmVudCwgZGF0YSk7XHJcblx0XHR9XHJcblx0fVxyXG5cclxuXHQvLyBIYW5kbGUgbW92ZW1lbnQgb24gZG9jdW1lbnQgZm9yIGhhbmRsZSBhbmQgcmFuZ2UgZHJhZy5cclxuXHRmdW5jdGlvbiBldmVudE1vdmUgKCBldmVudCwgZGF0YSApIHtcclxuXHJcblx0XHQvLyBGaXggIzQ5OFxyXG5cdFx0Ly8gQ2hlY2sgdmFsdWUgb2YgLmJ1dHRvbnMgaW4gJ3N0YXJ0JyB0byB3b3JrIGFyb3VuZCBhIGJ1ZyBpbiBJRTEwIG1vYmlsZSAoZGF0YS5idXR0b25zUHJvcGVydHkpLlxyXG5cdFx0Ly8gaHR0cHM6Ly9jb25uZWN0Lm1pY3Jvc29mdC5jb20vSUUvZmVlZGJhY2svZGV0YWlscy85MjcwMDUvbW9iaWxlLWllMTAtd2luZG93cy1waG9uZS1idXR0b25zLXByb3BlcnR5LW9mLXBvaW50ZXJtb3ZlLWV2ZW50LWFsd2F5cy16ZXJvXHJcblx0XHQvLyBJRTkgaGFzIC5idXR0b25zIGFuZCAud2hpY2ggemVybyBvbiBtb3VzZW1vdmUuXHJcblx0XHQvLyBGaXJlZm94IGJyZWFrcyB0aGUgc3BlYyBNRE4gZGVmaW5lcy5cclxuXHRcdGlmICggbmF2aWdhdG9yLmFwcFZlcnNpb24uaW5kZXhPZihcIk1TSUUgOVwiKSA9PT0gLTEgJiYgZXZlbnQuYnV0dG9ucyA9PT0gMCAmJiBkYXRhLmJ1dHRvbnNQcm9wZXJ0eSAhPT0gMCApIHtcclxuXHRcdFx0cmV0dXJuIGV2ZW50RW5kKGV2ZW50LCBkYXRhKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBDaGVjayBpZiB3ZSBhcmUgbW92aW5nIHVwIG9yIGRvd25cclxuXHRcdHZhciBtb3ZlbWVudCA9IChvcHRpb25zLmRpciA/IC0xIDogMSkgKiAoZXZlbnQuY2FsY1BvaW50IC0gZGF0YS5zdGFydENhbGNQb2ludCk7XHJcblxyXG5cdFx0Ly8gQ29udmVydCB0aGUgbW92ZW1lbnQgaW50byBhIHBlcmNlbnRhZ2Ugb2YgdGhlIHNsaWRlciB3aWR0aC9oZWlnaHRcclxuXHRcdHZhciBwcm9wb3NhbCA9IChtb3ZlbWVudCAqIDEwMCkgLyBkYXRhLmJhc2VTaXplO1xyXG5cclxuXHRcdG1vdmVIYW5kbGVzKG1vdmVtZW50ID4gMCwgcHJvcG9zYWwsIGRhdGEubG9jYXRpb25zLCBkYXRhLmhhbmRsZU51bWJlcnMpO1xyXG5cdH1cclxuXHJcblx0Ly8gVW5iaW5kIG1vdmUgZXZlbnRzIG9uIGRvY3VtZW50LCBjYWxsIGNhbGxiYWNrcy5cclxuXHRmdW5jdGlvbiBldmVudEVuZCAoIGV2ZW50LCBkYXRhICkge1xyXG5cclxuXHRcdC8vIFRoZSBoYW5kbGUgaXMgbm8gbG9uZ2VyIGFjdGl2ZSwgc28gcmVtb3ZlIHRoZSBjbGFzcy5cclxuXHRcdGlmICggZGF0YS5oYW5kbGUgKSB7XHJcblx0XHRcdHJlbW92ZUNsYXNzKGRhdGEuaGFuZGxlLCBvcHRpb25zLmNzc0NsYXNzZXMuYWN0aXZlKTtcclxuXHRcdFx0c2NvcGVfQWN0aXZlSGFuZGxlc0NvdW50IC09IDE7XHJcblx0XHR9XHJcblxyXG5cdFx0Ly8gVW5iaW5kIHRoZSBtb3ZlIGFuZCBlbmQgZXZlbnRzLCB3aGljaCBhcmUgYWRkZWQgb24gJ3N0YXJ0Jy5cclxuXHRcdGRhdGEubGlzdGVuZXJzLmZvckVhY2goZnVuY3Rpb24oIGMgKSB7XHJcblx0XHRcdHNjb3BlX0RvY3VtZW50RWxlbWVudC5yZW1vdmVFdmVudExpc3RlbmVyKGNbMF0sIGNbMV0pO1xyXG5cdFx0fSk7XHJcblxyXG5cdFx0aWYgKCBzY29wZV9BY3RpdmVIYW5kbGVzQ291bnQgPT09IDAgKSB7XHJcblx0XHRcdC8vIFJlbW92ZSBkcmFnZ2luZyBjbGFzcy5cclxuXHRcdFx0cmVtb3ZlQ2xhc3Moc2NvcGVfVGFyZ2V0LCBvcHRpb25zLmNzc0NsYXNzZXMuZHJhZyk7XHJcblx0XHRcdHNldFppbmRleCgpO1xyXG5cclxuXHRcdFx0Ly8gUmVtb3ZlIGN1cnNvciBzdHlsZXMgYW5kIHRleHQtc2VsZWN0aW9uIGV2ZW50cyBib3VuZCB0byB0aGUgYm9keS5cclxuXHRcdFx0aWYgKCBldmVudC5jdXJzb3IgKSB7XHJcblx0XHRcdFx0c2NvcGVfQm9keS5zdHlsZS5jdXJzb3IgPSAnJztcclxuXHRcdFx0XHRzY29wZV9Cb2R5LnJlbW92ZUV2ZW50TGlzdGVuZXIoJ3NlbGVjdHN0YXJ0JywgcHJldmVudERlZmF1bHQpO1xyXG5cdFx0XHR9XHJcblx0XHR9XHJcblxyXG5cdFx0ZGF0YS5oYW5kbGVOdW1iZXJzLmZvckVhY2goZnVuY3Rpb24oaGFuZGxlTnVtYmVyKXtcclxuXHRcdFx0ZmlyZUV2ZW50KCdjaGFuZ2UnLCBoYW5kbGVOdW1iZXIpO1xyXG5cdFx0XHRmaXJlRXZlbnQoJ3NldCcsIGhhbmRsZU51bWJlcik7XHJcblx0XHRcdGZpcmVFdmVudCgnZW5kJywgaGFuZGxlTnVtYmVyKTtcclxuXHRcdH0pO1xyXG5cdH1cclxuXHJcblx0Ly8gQmluZCBtb3ZlIGV2ZW50cyBvbiBkb2N1bWVudC5cclxuXHRmdW5jdGlvbiBldmVudFN0YXJ0ICggZXZlbnQsIGRhdGEgKSB7XHJcblxyXG5cdFx0dmFyIGhhbmRsZTtcclxuXHRcdGlmICggZGF0YS5oYW5kbGVOdW1iZXJzLmxlbmd0aCA9PT0gMSApIHtcclxuXHJcblx0XHRcdHZhciBoYW5kbGVPcmlnaW4gPSBzY29wZV9IYW5kbGVzW2RhdGEuaGFuZGxlTnVtYmVyc1swXV07XHJcblxyXG5cdFx0XHQvLyBJZ25vcmUgJ2Rpc2FibGVkJyBoYW5kbGVzXHJcblx0XHRcdGlmICggaGFuZGxlT3JpZ2luLmhhc0F0dHJpYnV0ZSgnZGlzYWJsZWQnKSApIHtcclxuXHRcdFx0XHRyZXR1cm4gZmFsc2U7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdGhhbmRsZSA9IGhhbmRsZU9yaWdpbi5jaGlsZHJlblswXTtcclxuXHRcdFx0c2NvcGVfQWN0aXZlSGFuZGxlc0NvdW50ICs9IDE7XHJcblxyXG5cdFx0XHQvLyBNYXJrIHRoZSBoYW5kbGUgYXMgJ2FjdGl2ZScgc28gaXQgY2FuIGJlIHN0eWxlZC5cclxuXHRcdFx0YWRkQ2xhc3MoaGFuZGxlLCBvcHRpb25zLmNzc0NsYXNzZXMuYWN0aXZlKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBBIGRyYWcgc2hvdWxkIG5ldmVyIHByb3BhZ2F0ZSB1cCB0byB0aGUgJ3RhcCcgZXZlbnQuXHJcblx0XHRldmVudC5zdG9wUHJvcGFnYXRpb24oKTtcclxuXHJcblx0XHQvLyBSZWNvcmQgdGhlIGV2ZW50IGxpc3RlbmVycy5cclxuXHRcdHZhciBsaXN0ZW5lcnMgPSBbXTtcclxuXHJcblx0XHQvLyBBdHRhY2ggdGhlIG1vdmUgYW5kIGVuZCBldmVudHMuXHJcblx0XHR2YXIgbW92ZUV2ZW50ID0gYXR0YWNoRXZlbnQoYWN0aW9ucy5tb3ZlLCBzY29wZV9Eb2N1bWVudEVsZW1lbnQsIGV2ZW50TW92ZSwge1xyXG5cdFx0XHQvLyBUaGUgZXZlbnQgdGFyZ2V0IGhhcyBjaGFuZ2VkIHNvIHdlIG5lZWQgdG8gcHJvcGFnYXRlIHRoZSBvcmlnaW5hbCBvbmUgc28gdGhhdCB3ZSBrZWVwXHJcblx0XHRcdC8vIHJlbHlpbmcgb24gaXQgdG8gZXh0cmFjdCB0YXJnZXQgdG91Y2hlcy5cclxuXHRcdFx0dGFyZ2V0OiBldmVudC50YXJnZXQsXHJcblx0XHRcdGhhbmRsZTogaGFuZGxlLFxyXG5cdFx0XHRsaXN0ZW5lcnM6IGxpc3RlbmVycyxcclxuXHRcdFx0c3RhcnRDYWxjUG9pbnQ6IGV2ZW50LmNhbGNQb2ludCxcclxuXHRcdFx0YmFzZVNpemU6IGJhc2VTaXplKCksXHJcblx0XHRcdHBhZ2VPZmZzZXQ6IGV2ZW50LnBhZ2VPZmZzZXQsXHJcblx0XHRcdGhhbmRsZU51bWJlcnM6IGRhdGEuaGFuZGxlTnVtYmVycyxcclxuXHRcdFx0YnV0dG9uc1Byb3BlcnR5OiBldmVudC5idXR0b25zLFxyXG5cdFx0XHRsb2NhdGlvbnM6IHNjb3BlX0xvY2F0aW9ucy5zbGljZSgpXHJcblx0XHR9KTtcclxuXHJcblx0XHR2YXIgZW5kRXZlbnQgPSBhdHRhY2hFdmVudChhY3Rpb25zLmVuZCwgc2NvcGVfRG9jdW1lbnRFbGVtZW50LCBldmVudEVuZCwge1xyXG5cdFx0XHR0YXJnZXQ6IGV2ZW50LnRhcmdldCxcclxuXHRcdFx0aGFuZGxlOiBoYW5kbGUsXHJcblx0XHRcdGxpc3RlbmVyczogbGlzdGVuZXJzLFxyXG5cdFx0XHRkb05vdFJlamVjdDogdHJ1ZSxcclxuXHRcdFx0aGFuZGxlTnVtYmVyczogZGF0YS5oYW5kbGVOdW1iZXJzXHJcblx0XHR9KTtcclxuXHJcblx0XHR2YXIgb3V0RXZlbnQgPSBhdHRhY2hFdmVudChcIm1vdXNlb3V0XCIsIHNjb3BlX0RvY3VtZW50RWxlbWVudCwgZG9jdW1lbnRMZWF2ZSwge1xyXG5cdFx0XHR0YXJnZXQ6IGV2ZW50LnRhcmdldCxcclxuXHRcdFx0aGFuZGxlOiBoYW5kbGUsXHJcblx0XHRcdGxpc3RlbmVyczogbGlzdGVuZXJzLFxyXG5cdFx0XHRkb05vdFJlamVjdDogdHJ1ZSxcclxuXHRcdFx0aGFuZGxlTnVtYmVyczogZGF0YS5oYW5kbGVOdW1iZXJzXHJcblx0XHR9KTtcclxuXHJcblx0XHQvLyBXZSB3YW50IHRvIG1ha2Ugc3VyZSB3ZSBwdXNoZWQgdGhlIGxpc3RlbmVycyBpbiB0aGUgbGlzdGVuZXIgbGlzdCByYXRoZXIgdGhhbiBjcmVhdGluZ1xyXG5cdFx0Ly8gYSBuZXcgb25lIGFzIGl0IGhhcyBhbHJlYWR5IGJlZW4gcGFzc2VkIHRvIHRoZSBldmVudCBoYW5kbGVycy5cclxuXHRcdGxpc3RlbmVycy5wdXNoLmFwcGx5KGxpc3RlbmVycywgbW92ZUV2ZW50LmNvbmNhdChlbmRFdmVudCwgb3V0RXZlbnQpKTtcclxuXHJcblx0XHQvLyBUZXh0IHNlbGVjdGlvbiBpc24ndCBhbiBpc3N1ZSBvbiB0b3VjaCBkZXZpY2VzLFxyXG5cdFx0Ly8gc28gYWRkaW5nIGN1cnNvciBzdHlsZXMgY2FuIGJlIHNraXBwZWQuXHJcblx0XHRpZiAoIGV2ZW50LmN1cnNvciApIHtcclxuXHJcblx0XHRcdC8vIFByZXZlbnQgdGhlICdJJyBjdXJzb3IgYW5kIGV4dGVuZCB0aGUgcmFuZ2UtZHJhZyBjdXJzb3IuXHJcblx0XHRcdHNjb3BlX0JvZHkuc3R5bGUuY3Vyc29yID0gZ2V0Q29tcHV0ZWRTdHlsZShldmVudC50YXJnZXQpLmN1cnNvcjtcclxuXHJcblx0XHRcdC8vIE1hcmsgdGhlIHRhcmdldCB3aXRoIGEgZHJhZ2dpbmcgc3RhdGUuXHJcblx0XHRcdGlmICggc2NvcGVfSGFuZGxlcy5sZW5ndGggPiAxICkge1xyXG5cdFx0XHRcdGFkZENsYXNzKHNjb3BlX1RhcmdldCwgb3B0aW9ucy5jc3NDbGFzc2VzLmRyYWcpO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHQvLyBQcmV2ZW50IHRleHQgc2VsZWN0aW9uIHdoZW4gZHJhZ2dpbmcgdGhlIGhhbmRsZXMuXHJcblx0XHRcdC8vIEluIG5vVWlTbGlkZXIgPD0gOS4yLjAsIHRoaXMgd2FzIGhhbmRsZWQgYnkgY2FsbGluZyBwcmV2ZW50RGVmYXVsdCBvbiBtb3VzZS90b3VjaCBzdGFydC9tb3ZlLFxyXG5cdFx0XHQvLyB3aGljaCBpcyBzY3JvbGwgYmxvY2tpbmcuIFRoZSBzZWxlY3RzdGFydCBldmVudCBpcyBzdXBwb3J0ZWQgYnkgRmlyZUZveCBzdGFydGluZyBmcm9tIHZlcnNpb24gNTIsXHJcblx0XHRcdC8vIG1lYW5pbmcgdGhlIG9ubHkgaG9sZG91dCBpcyBpT1MgU2FmYXJpLiBUaGlzIGRvZXNuJ3QgbWF0dGVyOiB0ZXh0IHNlbGVjdGlvbiBpc24ndCB0cmlnZ2VyZWQgdGhlcmUuXHJcblx0XHRcdC8vIFRoZSAnY3Vyc29yJyBmbGFnIGlzIGZhbHNlLlxyXG5cdFx0XHQvLyBTZWU6IGh0dHA6Ly9jYW5pdXNlLmNvbS8jc2VhcmNoPXNlbGVjdHN0YXJ0XHJcblx0XHRcdHNjb3BlX0JvZHkuYWRkRXZlbnRMaXN0ZW5lcignc2VsZWN0c3RhcnQnLCBwcmV2ZW50RGVmYXVsdCwgZmFsc2UpO1xyXG5cdFx0fVxyXG5cclxuXHRcdGRhdGEuaGFuZGxlTnVtYmVycy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZU51bWJlcil7XHJcblx0XHRcdGZpcmVFdmVudCgnc3RhcnQnLCBoYW5kbGVOdW1iZXIpO1xyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHQvLyBNb3ZlIGNsb3Nlc3QgaGFuZGxlIHRvIHRhcHBlZCBsb2NhdGlvbi5cclxuXHRmdW5jdGlvbiBldmVudFRhcCAoIGV2ZW50ICkge1xyXG5cclxuXHRcdC8vIFRoZSB0YXAgZXZlbnQgc2hvdWxkbid0IHByb3BhZ2F0ZSB1cFxyXG5cdFx0ZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XHJcblxyXG5cdFx0dmFyIHByb3Bvc2FsID0gY2FsY1BvaW50VG9QZXJjZW50YWdlKGV2ZW50LmNhbGNQb2ludCk7XHJcblx0XHR2YXIgaGFuZGxlTnVtYmVyID0gZ2V0Q2xvc2VzdEhhbmRsZShwcm9wb3NhbCk7XHJcblxyXG5cdFx0Ly8gVGFja2xlIHRoZSBjYXNlIHRoYXQgYWxsIGhhbmRsZXMgYXJlICdkaXNhYmxlZCcuXHJcblx0XHRpZiAoIGhhbmRsZU51bWJlciA9PT0gZmFsc2UgKSB7XHJcblx0XHRcdHJldHVybiBmYWxzZTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBGbGFnIHRoZSBzbGlkZXIgYXMgaXQgaXMgbm93IGluIGEgdHJhbnNpdGlvbmFsIHN0YXRlLlxyXG5cdFx0Ly8gVHJhbnNpdGlvbiB0YWtlcyBhIGNvbmZpZ3VyYWJsZSBhbW91bnQgb2YgbXMgKGRlZmF1bHQgMzAwKS4gUmUtZW5hYmxlIHRoZSBzbGlkZXIgYWZ0ZXIgdGhhdC5cclxuXHRcdGlmICggIW9wdGlvbnMuZXZlbnRzLnNuYXAgKSB7XHJcblx0XHRcdGFkZENsYXNzRm9yKHNjb3BlX1RhcmdldCwgb3B0aW9ucy5jc3NDbGFzc2VzLnRhcCwgb3B0aW9ucy5hbmltYXRpb25EdXJhdGlvbik7XHJcblx0XHR9XHJcblxyXG5cdFx0c2V0SGFuZGxlKGhhbmRsZU51bWJlciwgcHJvcG9zYWwsIHRydWUsIHRydWUpO1xyXG5cclxuXHRcdHNldFppbmRleCgpO1xyXG5cclxuXHRcdGZpcmVFdmVudCgnc2xpZGUnLCBoYW5kbGVOdW1iZXIsIHRydWUpO1xyXG5cdFx0ZmlyZUV2ZW50KCd1cGRhdGUnLCBoYW5kbGVOdW1iZXIsIHRydWUpO1xyXG5cdFx0ZmlyZUV2ZW50KCdjaGFuZ2UnLCBoYW5kbGVOdW1iZXIsIHRydWUpO1xyXG5cdFx0ZmlyZUV2ZW50KCdzZXQnLCBoYW5kbGVOdW1iZXIsIHRydWUpO1xyXG5cclxuXHRcdGlmICggb3B0aW9ucy5ldmVudHMuc25hcCApIHtcclxuXHRcdFx0ZXZlbnRTdGFydChldmVudCwgeyBoYW5kbGVOdW1iZXJzOiBbaGFuZGxlTnVtYmVyXSB9KTtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdC8vIEZpcmVzIGEgJ2hvdmVyJyBldmVudCBmb3IgYSBob3ZlcmVkIG1vdXNlL3BlbiBwb3NpdGlvbi5cclxuXHRmdW5jdGlvbiBldmVudEhvdmVyICggZXZlbnQgKSB7XHJcblxyXG5cdFx0dmFyIHByb3Bvc2FsID0gY2FsY1BvaW50VG9QZXJjZW50YWdlKGV2ZW50LmNhbGNQb2ludCk7XHJcblxyXG5cdFx0dmFyIHRvID0gc2NvcGVfU3BlY3RydW0uZ2V0U3RlcChwcm9wb3NhbCk7XHJcblx0XHR2YXIgdmFsdWUgPSBzY29wZV9TcGVjdHJ1bS5mcm9tU3RlcHBpbmcodG8pO1xyXG5cclxuXHRcdE9iamVjdC5rZXlzKHNjb3BlX0V2ZW50cykuZm9yRWFjaChmdW5jdGlvbiggdGFyZ2V0RXZlbnQgKSB7XHJcblx0XHRcdGlmICggJ2hvdmVyJyA9PT0gdGFyZ2V0RXZlbnQuc3BsaXQoJy4nKVswXSApIHtcclxuXHRcdFx0XHRzY29wZV9FdmVudHNbdGFyZ2V0RXZlbnRdLmZvckVhY2goZnVuY3Rpb24oIGNhbGxiYWNrICkge1xyXG5cdFx0XHRcdFx0Y2FsbGJhY2suY2FsbCggc2NvcGVfU2VsZiwgdmFsdWUgKTtcclxuXHRcdFx0XHR9KTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHQvLyBBdHRhY2ggZXZlbnRzIHRvIHNldmVyYWwgc2xpZGVyIHBhcnRzLlxyXG5cdGZ1bmN0aW9uIGJpbmRTbGlkZXJFdmVudHMgKCBiZWhhdmlvdXIgKSB7XHJcblxyXG5cdFx0Ly8gQXR0YWNoIHRoZSBzdGFuZGFyZCBkcmFnIGV2ZW50IHRvIHRoZSBoYW5kbGVzLlxyXG5cdFx0aWYgKCAhYmVoYXZpb3VyLmZpeGVkICkge1xyXG5cclxuXHRcdFx0c2NvcGVfSGFuZGxlcy5mb3JFYWNoKGZ1bmN0aW9uKCBoYW5kbGUsIGluZGV4ICl7XHJcblxyXG5cdFx0XHRcdC8vIFRoZXNlIGV2ZW50cyBhcmUgb25seSBib3VuZCB0byB0aGUgdmlzdWFsIGhhbmRsZVxyXG5cdFx0XHRcdC8vIGVsZW1lbnQsIG5vdCB0aGUgJ3JlYWwnIG9yaWdpbiBlbGVtZW50LlxyXG5cdFx0XHRcdGF0dGFjaEV2ZW50ICggYWN0aW9ucy5zdGFydCwgaGFuZGxlLmNoaWxkcmVuWzBdLCBldmVudFN0YXJ0LCB7XHJcblx0XHRcdFx0XHRoYW5kbGVOdW1iZXJzOiBbaW5kZXhdXHJcblx0XHRcdFx0fSk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEF0dGFjaCB0aGUgdGFwIGV2ZW50IHRvIHRoZSBzbGlkZXIgYmFzZS5cclxuXHRcdGlmICggYmVoYXZpb3VyLnRhcCApIHtcclxuXHRcdFx0YXR0YWNoRXZlbnQgKGFjdGlvbnMuc3RhcnQsIHNjb3BlX0Jhc2UsIGV2ZW50VGFwLCB7fSk7XHJcblx0XHR9XHJcblxyXG5cdFx0Ly8gRmlyZSBob3ZlciBldmVudHNcclxuXHRcdGlmICggYmVoYXZpb3VyLmhvdmVyICkge1xyXG5cdFx0XHRhdHRhY2hFdmVudCAoYWN0aW9ucy5tb3ZlLCBzY29wZV9CYXNlLCBldmVudEhvdmVyLCB7IGhvdmVyOiB0cnVlIH0pO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIE1ha2UgdGhlIHJhbmdlIGRyYWdnYWJsZS5cclxuXHRcdGlmICggYmVoYXZpb3VyLmRyYWcgKXtcclxuXHJcblx0XHRcdHNjb3BlX0Nvbm5lY3RzLmZvckVhY2goZnVuY3Rpb24oIGNvbm5lY3QsIGluZGV4ICl7XHJcblxyXG5cdFx0XHRcdGlmICggY29ubmVjdCA9PT0gZmFsc2UgfHwgaW5kZXggPT09IDAgfHwgaW5kZXggPT09IHNjb3BlX0Nvbm5lY3RzLmxlbmd0aCAtIDEgKSB7XHJcblx0XHRcdFx0XHRyZXR1cm47XHJcblx0XHRcdFx0fVxyXG5cclxuXHRcdFx0XHR2YXIgaGFuZGxlQmVmb3JlID0gc2NvcGVfSGFuZGxlc1tpbmRleCAtIDFdO1xyXG5cdFx0XHRcdHZhciBoYW5kbGVBZnRlciA9IHNjb3BlX0hhbmRsZXNbaW5kZXhdO1xyXG5cdFx0XHRcdHZhciBldmVudEhvbGRlcnMgPSBbY29ubmVjdF07XHJcblxyXG5cdFx0XHRcdGFkZENsYXNzKGNvbm5lY3QsIG9wdGlvbnMuY3NzQ2xhc3Nlcy5kcmFnZ2FibGUpO1xyXG5cclxuXHRcdFx0XHQvLyBXaGVuIHRoZSByYW5nZSBpcyBmaXhlZCwgdGhlIGVudGlyZSByYW5nZSBjYW5cclxuXHRcdFx0XHQvLyBiZSBkcmFnZ2VkIGJ5IHRoZSBoYW5kbGVzLiBUaGUgaGFuZGxlIGluIHRoZSBmaXJzdFxyXG5cdFx0XHRcdC8vIG9yaWdpbiB3aWxsIHByb3BhZ2F0ZSB0aGUgc3RhcnQgZXZlbnQgdXB3YXJkLFxyXG5cdFx0XHRcdC8vIGJ1dCBpdCBuZWVkcyB0byBiZSBib3VuZCBtYW51YWxseSBvbiB0aGUgb3RoZXIuXHJcblx0XHRcdFx0aWYgKCBiZWhhdmlvdXIuZml4ZWQgKSB7XHJcblx0XHRcdFx0XHRldmVudEhvbGRlcnMucHVzaChoYW5kbGVCZWZvcmUuY2hpbGRyZW5bMF0pO1xyXG5cdFx0XHRcdFx0ZXZlbnRIb2xkZXJzLnB1c2goaGFuZGxlQWZ0ZXIuY2hpbGRyZW5bMF0pO1xyXG5cdFx0XHRcdH1cclxuXHJcblx0XHRcdFx0ZXZlbnRIb2xkZXJzLmZvckVhY2goZnVuY3Rpb24oIGV2ZW50SG9sZGVyICkge1xyXG5cdFx0XHRcdFx0YXR0YWNoRXZlbnQgKCBhY3Rpb25zLnN0YXJ0LCBldmVudEhvbGRlciwgZXZlbnRTdGFydCwge1xyXG5cdFx0XHRcdFx0XHRoYW5kbGVzOiBbaGFuZGxlQmVmb3JlLCBoYW5kbGVBZnRlcl0sXHJcblx0XHRcdFx0XHRcdGhhbmRsZU51bWJlcnM6IFtpbmRleCAtIDEsIGluZGV4XVxyXG5cdFx0XHRcdFx0fSk7XHJcblx0XHRcdFx0fSk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH1cclxuXHJcbi8qISBJbiB0aGlzIGZpbGU6IFNsaWRlciBldmVudHMgKG5vdCBicm93c2VyIGV2ZW50cyk7ICovXHJcblxyXG5cdC8vIEF0dGFjaCBhbiBldmVudCB0byB0aGlzIHNsaWRlciwgcG9zc2libHkgaW5jbHVkaW5nIGEgbmFtZXNwYWNlXHJcblx0ZnVuY3Rpb24gYmluZEV2ZW50ICggbmFtZXNwYWNlZEV2ZW50LCBjYWxsYmFjayApIHtcclxuXHRcdHNjb3BlX0V2ZW50c1tuYW1lc3BhY2VkRXZlbnRdID0gc2NvcGVfRXZlbnRzW25hbWVzcGFjZWRFdmVudF0gfHwgW107XHJcblx0XHRzY29wZV9FdmVudHNbbmFtZXNwYWNlZEV2ZW50XS5wdXNoKGNhbGxiYWNrKTtcclxuXHJcblx0XHQvLyBJZiB0aGUgZXZlbnQgYm91bmQgaXMgJ3VwZGF0ZSwnIGZpcmUgaXQgaW1tZWRpYXRlbHkgZm9yIGFsbCBoYW5kbGVzLlxyXG5cdFx0aWYgKCBuYW1lc3BhY2VkRXZlbnQuc3BsaXQoJy4nKVswXSA9PT0gJ3VwZGF0ZScgKSB7XHJcblx0XHRcdHNjb3BlX0hhbmRsZXMuZm9yRWFjaChmdW5jdGlvbihhLCBpbmRleCl7XHJcblx0XHRcdFx0ZmlyZUV2ZW50KCd1cGRhdGUnLCBpbmRleCk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH1cclxuXHJcblx0Ly8gVW5kbyBhdHRhY2htZW50IG9mIGV2ZW50XHJcblx0ZnVuY3Rpb24gcmVtb3ZlRXZlbnQgKCBuYW1lc3BhY2VkRXZlbnQgKSB7XHJcblxyXG5cdFx0dmFyIGV2ZW50ID0gbmFtZXNwYWNlZEV2ZW50ICYmIG5hbWVzcGFjZWRFdmVudC5zcGxpdCgnLicpWzBdO1xyXG5cdFx0dmFyIG5hbWVzcGFjZSA9IGV2ZW50ICYmIG5hbWVzcGFjZWRFdmVudC5zdWJzdHJpbmcoZXZlbnQubGVuZ3RoKTtcclxuXHJcblx0XHRPYmplY3Qua2V5cyhzY29wZV9FdmVudHMpLmZvckVhY2goZnVuY3Rpb24oIGJpbmQgKXtcclxuXHJcblx0XHRcdHZhciB0RXZlbnQgPSBiaW5kLnNwbGl0KCcuJylbMF07XHJcblx0XHRcdHZhciB0TmFtZXNwYWNlID0gYmluZC5zdWJzdHJpbmcodEV2ZW50Lmxlbmd0aCk7XHJcblxyXG5cdFx0XHRpZiAoICghZXZlbnQgfHwgZXZlbnQgPT09IHRFdmVudCkgJiYgKCFuYW1lc3BhY2UgfHwgbmFtZXNwYWNlID09PSB0TmFtZXNwYWNlKSApIHtcclxuXHRcdFx0XHRkZWxldGUgc2NvcGVfRXZlbnRzW2JpbmRdO1xyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHR9XHJcblxyXG5cdC8vIEV4dGVybmFsIGV2ZW50IGhhbmRsaW5nXHJcblx0ZnVuY3Rpb24gZmlyZUV2ZW50ICggZXZlbnROYW1lLCBoYW5kbGVOdW1iZXIsIHRhcCApIHtcclxuXHJcblx0XHRPYmplY3Qua2V5cyhzY29wZV9FdmVudHMpLmZvckVhY2goZnVuY3Rpb24oIHRhcmdldEV2ZW50ICkge1xyXG5cclxuXHRcdFx0dmFyIGV2ZW50VHlwZSA9IHRhcmdldEV2ZW50LnNwbGl0KCcuJylbMF07XHJcblxyXG5cdFx0XHRpZiAoIGV2ZW50TmFtZSA9PT0gZXZlbnRUeXBlICkge1xyXG5cdFx0XHRcdHNjb3BlX0V2ZW50c1t0YXJnZXRFdmVudF0uZm9yRWFjaChmdW5jdGlvbiggY2FsbGJhY2sgKSB7XHJcblxyXG5cdFx0XHRcdFx0Y2FsbGJhY2suY2FsbChcclxuXHRcdFx0XHRcdFx0Ly8gVXNlIHRoZSBzbGlkZXIgcHVibGljIEFQSSBhcyB0aGUgc2NvcGUgKCd0aGlzJylcclxuXHRcdFx0XHRcdFx0c2NvcGVfU2VsZixcclxuXHRcdFx0XHRcdFx0Ly8gUmV0dXJuIHZhbHVlcyBhcyBhcnJheSwgc28gYXJnXzFbYXJnXzJdIGlzIGFsd2F5cyB2YWxpZC5cclxuXHRcdFx0XHRcdFx0c2NvcGVfVmFsdWVzLm1hcChvcHRpb25zLmZvcm1hdC50byksXHJcblx0XHRcdFx0XHRcdC8vIEhhbmRsZSBpbmRleCwgMCBvciAxXHJcblx0XHRcdFx0XHRcdGhhbmRsZU51bWJlcixcclxuXHRcdFx0XHRcdFx0Ly8gVW5mb3JtYXR0ZWQgc2xpZGVyIHZhbHVlc1xyXG5cdFx0XHRcdFx0XHRzY29wZV9WYWx1ZXMuc2xpY2UoKSxcclxuXHRcdFx0XHRcdFx0Ly8gRXZlbnQgaXMgZmlyZWQgYnkgdGFwLCB0cnVlIG9yIGZhbHNlXHJcblx0XHRcdFx0XHRcdHRhcCB8fCBmYWxzZSxcclxuXHRcdFx0XHRcdFx0Ly8gTGVmdCBvZmZzZXQgb2YgdGhlIGhhbmRsZSwgaW4gcmVsYXRpb24gdG8gdGhlIHNsaWRlclxyXG5cdFx0XHRcdFx0XHRzY29wZV9Mb2NhdGlvbnMuc2xpY2UoKVxyXG5cdFx0XHRcdFx0KTtcclxuXHRcdFx0XHR9KTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuLyohIEluIHRoaXMgZmlsZTogTWVjaGFuaWNzIGZvciBzbGlkZXIgb3BlcmF0aW9uICovXHJcblxyXG5cdGZ1bmN0aW9uIHRvUGN0ICggcGN0ICkge1xyXG5cdFx0cmV0dXJuIHBjdCArICclJztcclxuXHR9XHJcblxyXG5cdC8vIFNwbGl0IG91dCB0aGUgaGFuZGxlIHBvc2l0aW9uaW5nIGxvZ2ljIHNvIHRoZSBNb3ZlIGV2ZW50IGNhbiB1c2UgaXQsIHRvb1xyXG5cdGZ1bmN0aW9uIGNoZWNrSGFuZGxlUG9zaXRpb24gKCByZWZlcmVuY2UsIGhhbmRsZU51bWJlciwgdG8sIGxvb2tCYWNrd2FyZCwgbG9va0ZvcndhcmQsIGdldFZhbHVlICkge1xyXG5cclxuXHRcdC8vIEZvciBzbGlkZXJzIHdpdGggbXVsdGlwbGUgaGFuZGxlcywgbGltaXQgbW92ZW1lbnQgdG8gdGhlIG90aGVyIGhhbmRsZS5cclxuXHRcdC8vIEFwcGx5IHRoZSBtYXJnaW4gb3B0aW9uIGJ5IGFkZGluZyBpdCB0byB0aGUgaGFuZGxlIHBvc2l0aW9ucy5cclxuXHRcdGlmICggc2NvcGVfSGFuZGxlcy5sZW5ndGggPiAxICkge1xyXG5cclxuXHRcdFx0aWYgKCBsb29rQmFja3dhcmQgJiYgaGFuZGxlTnVtYmVyID4gMCApIHtcclxuXHRcdFx0XHR0byA9IE1hdGgubWF4KHRvLCByZWZlcmVuY2VbaGFuZGxlTnVtYmVyIC0gMV0gKyBvcHRpb25zLm1hcmdpbik7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdGlmICggbG9va0ZvcndhcmQgJiYgaGFuZGxlTnVtYmVyIDwgc2NvcGVfSGFuZGxlcy5sZW5ndGggLSAxICkge1xyXG5cdFx0XHRcdHRvID0gTWF0aC5taW4odG8sIHJlZmVyZW5jZVtoYW5kbGVOdW1iZXIgKyAxXSAtIG9wdGlvbnMubWFyZ2luKTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdC8vIFRoZSBsaW1pdCBvcHRpb24gaGFzIHRoZSBvcHBvc2l0ZSBlZmZlY3QsIGxpbWl0aW5nIGhhbmRsZXMgdG8gYVxyXG5cdFx0Ly8gbWF4aW11bSBkaXN0YW5jZSBmcm9tIGFub3RoZXIuIExpbWl0IG11c3QgYmUgPiAwLCBhcyBvdGhlcndpc2VcclxuXHRcdC8vIGhhbmRsZXMgd291bGQgYmUgdW5tb3ZlYWJsZS5cclxuXHRcdGlmICggc2NvcGVfSGFuZGxlcy5sZW5ndGggPiAxICYmIG9wdGlvbnMubGltaXQgKSB7XHJcblxyXG5cdFx0XHRpZiAoIGxvb2tCYWNrd2FyZCAmJiBoYW5kbGVOdW1iZXIgPiAwICkge1xyXG5cdFx0XHRcdHRvID0gTWF0aC5taW4odG8sIHJlZmVyZW5jZVtoYW5kbGVOdW1iZXIgLSAxXSArIG9wdGlvbnMubGltaXQpO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHRpZiAoIGxvb2tGb3J3YXJkICYmIGhhbmRsZU51bWJlciA8IHNjb3BlX0hhbmRsZXMubGVuZ3RoIC0gMSApIHtcclxuXHRcdFx0XHR0byA9IE1hdGgubWF4KHRvLCByZWZlcmVuY2VbaGFuZGxlTnVtYmVyICsgMV0gLSBvcHRpb25zLmxpbWl0KTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdC8vIFRoZSBwYWRkaW5nIG9wdGlvbiBrZWVwcyB0aGUgaGFuZGxlcyBhIGNlcnRhaW4gZGlzdGFuY2UgZnJvbSB0aGVcclxuXHRcdC8vIGVkZ2VzIG9mIHRoZSBzbGlkZXIuIFBhZGRpbmcgbXVzdCBiZSA+IDAuXHJcblx0XHRpZiAoIG9wdGlvbnMucGFkZGluZyApIHtcclxuXHJcblx0XHRcdGlmICggaGFuZGxlTnVtYmVyID09PSAwICkge1xyXG5cdFx0XHRcdHRvID0gTWF0aC5tYXgodG8sIG9wdGlvbnMucGFkZGluZ1swXSk7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdGlmICggaGFuZGxlTnVtYmVyID09PSBzY29wZV9IYW5kbGVzLmxlbmd0aCAtIDEgKSB7XHJcblx0XHRcdFx0dG8gPSBNYXRoLm1pbih0bywgMTAwIC0gb3B0aW9ucy5wYWRkaW5nWzFdKTtcclxuXHRcdFx0fVxyXG5cdFx0fVxyXG5cclxuXHRcdHRvID0gc2NvcGVfU3BlY3RydW0uZ2V0U3RlcCh0byk7XHJcblxyXG5cdFx0Ly8gTGltaXQgcGVyY2VudGFnZSB0byB0aGUgMCAtIDEwMCByYW5nZVxyXG5cdFx0dG8gPSBsaW1pdCh0byk7XHJcblxyXG5cdFx0Ly8gUmV0dXJuIGZhbHNlIGlmIGhhbmRsZSBjYW4ndCBtb3ZlXHJcblx0XHRpZiAoIHRvID09PSByZWZlcmVuY2VbaGFuZGxlTnVtYmVyXSAmJiAhZ2V0VmFsdWUgKSB7XHJcblx0XHRcdHJldHVybiBmYWxzZTtcclxuXHRcdH1cclxuXHJcblx0XHRyZXR1cm4gdG87XHJcblx0fVxyXG5cclxuXHQvLyBVc2VzIHNsaWRlciBvcmllbnRhdGlvbiB0byBjcmVhdGUgQ1NTIHJ1bGVzLiBhID0gYmFzZSB2YWx1ZTtcclxuXHRmdW5jdGlvbiBpblJ1bGVPcmRlciAoIHYsIGEgKSB7XHJcblx0XHR2YXIgbyA9IG9wdGlvbnMub3J0O1xyXG5cdFx0cmV0dXJuIChvP2E6dikgKyAnLCAnICsgKG8/djphKTtcclxuXHR9XHJcblxyXG5cdC8vIE1vdmVzIGhhbmRsZShzKSBieSBhIHBlcmNlbnRhZ2VcclxuXHQvLyAoYm9vbCwgJSB0byBtb3ZlLCBbJSB3aGVyZSBoYW5kbGUgc3RhcnRlZCwgLi4uXSwgW2luZGV4IGluIHNjb3BlX0hhbmRsZXMsIC4uLl0pXHJcblx0ZnVuY3Rpb24gbW92ZUhhbmRsZXMgKCB1cHdhcmQsIHByb3Bvc2FsLCBsb2NhdGlvbnMsIGhhbmRsZU51bWJlcnMgKSB7XHJcblxyXG5cdFx0dmFyIHByb3Bvc2FscyA9IGxvY2F0aW9ucy5zbGljZSgpO1xyXG5cclxuXHRcdHZhciBiID0gWyF1cHdhcmQsIHVwd2FyZF07XHJcblx0XHR2YXIgZiA9IFt1cHdhcmQsICF1cHdhcmRdO1xyXG5cclxuXHRcdC8vIENvcHkgaGFuZGxlTnVtYmVycyBzbyB3ZSBkb24ndCBjaGFuZ2UgdGhlIGRhdGFzZXRcclxuXHRcdGhhbmRsZU51bWJlcnMgPSBoYW5kbGVOdW1iZXJzLnNsaWNlKCk7XHJcblxyXG5cdFx0Ly8gQ2hlY2sgdG8gc2VlIHdoaWNoIGhhbmRsZSBpcyAnbGVhZGluZycuXHJcblx0XHQvLyBJZiB0aGF0IG9uZSBjYW4ndCBtb3ZlIHRoZSBzZWNvbmQgY2FuJ3QgZWl0aGVyLlxyXG5cdFx0aWYgKCB1cHdhcmQgKSB7XHJcblx0XHRcdGhhbmRsZU51bWJlcnMucmV2ZXJzZSgpO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIFN0ZXAgMTogZ2V0IHRoZSBtYXhpbXVtIHBlcmNlbnRhZ2UgdGhhdCBhbnkgb2YgdGhlIGhhbmRsZXMgY2FuIG1vdmVcclxuXHRcdGlmICggaGFuZGxlTnVtYmVycy5sZW5ndGggPiAxICkge1xyXG5cclxuXHRcdFx0aGFuZGxlTnVtYmVycy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZU51bWJlciwgbykge1xyXG5cclxuXHRcdFx0XHR2YXIgdG8gPSBjaGVja0hhbmRsZVBvc2l0aW9uKHByb3Bvc2FscywgaGFuZGxlTnVtYmVyLCBwcm9wb3NhbHNbaGFuZGxlTnVtYmVyXSArIHByb3Bvc2FsLCBiW29dLCBmW29dLCBmYWxzZSk7XHJcblxyXG5cdFx0XHRcdC8vIFN0b3AgaWYgb25lIG9mIHRoZSBoYW5kbGVzIGNhbid0IG1vdmUuXHJcblx0XHRcdFx0aWYgKCB0byA9PT0gZmFsc2UgKSB7XHJcblx0XHRcdFx0XHRwcm9wb3NhbCA9IDA7XHJcblx0XHRcdFx0fSBlbHNlIHtcclxuXHRcdFx0XHRcdHByb3Bvc2FsID0gdG8gLSBwcm9wb3NhbHNbaGFuZGxlTnVtYmVyXTtcclxuXHRcdFx0XHRcdHByb3Bvc2Fsc1toYW5kbGVOdW1iZXJdID0gdG87XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBJZiB1c2luZyBvbmUgaGFuZGxlLCBjaGVjayBiYWNrd2FyZCBBTkQgZm9yd2FyZFxyXG5cdFx0ZWxzZSB7XHJcblx0XHRcdGIgPSBmID0gW3RydWVdO1xyXG5cdFx0fVxyXG5cclxuXHRcdHZhciBzdGF0ZSA9IGZhbHNlO1xyXG5cclxuXHRcdC8vIFN0ZXAgMjogVHJ5IHRvIHNldCB0aGUgaGFuZGxlcyB3aXRoIHRoZSBmb3VuZCBwZXJjZW50YWdlXHJcblx0XHRoYW5kbGVOdW1iZXJzLmZvckVhY2goZnVuY3Rpb24oaGFuZGxlTnVtYmVyLCBvKSB7XHJcblx0XHRcdHN0YXRlID0gc2V0SGFuZGxlKGhhbmRsZU51bWJlciwgbG9jYXRpb25zW2hhbmRsZU51bWJlcl0gKyBwcm9wb3NhbCwgYltvXSwgZltvXSkgfHwgc3RhdGU7XHJcblx0XHR9KTtcclxuXHJcblx0XHQvLyBTdGVwIDM6IElmIGEgaGFuZGxlIG1vdmVkLCBmaXJlIGV2ZW50c1xyXG5cdFx0aWYgKCBzdGF0ZSApIHtcclxuXHRcdFx0aGFuZGxlTnVtYmVycy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZU51bWJlcil7XHJcblx0XHRcdFx0ZmlyZUV2ZW50KCd1cGRhdGUnLCBoYW5kbGVOdW1iZXIpO1xyXG5cdFx0XHRcdGZpcmVFdmVudCgnc2xpZGUnLCBoYW5kbGVOdW1iZXIpO1xyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdC8vIFRha2VzIGEgYmFzZSB2YWx1ZSBhbmQgYW4gb2Zmc2V0LiBUaGlzIG9mZnNldCBpcyB1c2VkIGZvciB0aGUgY29ubmVjdCBiYXIgc2l6ZS5cclxuXHQvLyBJbiB0aGUgaW5pdGlhbCBkZXNpZ24gZm9yIHRoaXMgZmVhdHVyZSwgdGhlIG9yaWdpbiBlbGVtZW50IHdhcyAxJSB3aWRlLlxyXG5cdC8vIFVuZm9ydHVuYXRlbHksIGEgcm91bmRpbmcgYnVnIGluIENocm9tZSBtYWtlcyBpdCBpbXBvc3NpYmxlIHRvIGltcGxlbWVudCB0aGlzIGZlYXR1cmVcclxuXHQvLyBpbiB0aGlzIG1hbm5lcjogaHR0cHM6Ly9idWdzLmNocm9taXVtLm9yZy9wL2Nocm9taXVtL2lzc3Vlcy9kZXRhaWw/aWQ9Nzk4MjIzXHJcblx0ZnVuY3Rpb24gdHJhbnNmb3JtRGlyZWN0aW9uICggYSwgYiApIHtcclxuXHRcdHJldHVybiBvcHRpb25zLmRpciA/IDEwMCAtIGEgLSBiIDogYTtcclxuXHR9XHJcblxyXG5cdC8vIFVwZGF0ZXMgc2NvcGVfTG9jYXRpb25zIGFuZCBzY29wZV9WYWx1ZXMsIHVwZGF0ZXMgdmlzdWFsIHN0YXRlXHJcblx0ZnVuY3Rpb24gdXBkYXRlSGFuZGxlUG9zaXRpb24gKCBoYW5kbGVOdW1iZXIsIHRvICkge1xyXG5cclxuXHRcdC8vIFVwZGF0ZSBsb2NhdGlvbnMuXHJcblx0XHRzY29wZV9Mb2NhdGlvbnNbaGFuZGxlTnVtYmVyXSA9IHRvO1xyXG5cclxuXHRcdC8vIENvbnZlcnQgdGhlIHZhbHVlIHRvIHRoZSBzbGlkZXIgc3RlcHBpbmcvcmFuZ2UuXHJcblx0XHRzY29wZV9WYWx1ZXNbaGFuZGxlTnVtYmVyXSA9IHNjb3BlX1NwZWN0cnVtLmZyb21TdGVwcGluZyh0byk7XHJcblxyXG5cdFx0dmFyIHJ1bGUgPSAndHJhbnNsYXRlKCcgKyBpblJ1bGVPcmRlcih0b1BjdCh0cmFuc2Zvcm1EaXJlY3Rpb24odG8sIDApIC0gc2NvcGVfRGlyT2Zmc2V0KSwgJzAnKSArICcpJztcclxuXHRcdHNjb3BlX0hhbmRsZXNbaGFuZGxlTnVtYmVyXS5zdHlsZVtvcHRpb25zLnRyYW5zZm9ybVJ1bGVdID0gcnVsZTtcclxuXHJcblx0XHR1cGRhdGVDb25uZWN0KGhhbmRsZU51bWJlcik7XHJcblx0XHR1cGRhdGVDb25uZWN0KGhhbmRsZU51bWJlciArIDEpO1xyXG5cdH1cclxuXHJcblx0Ly8gSGFuZGxlcyBiZWZvcmUgdGhlIHNsaWRlciBtaWRkbGUgYXJlIHN0YWNrZWQgbGF0ZXIgPSBoaWdoZXIsXHJcblx0Ly8gSGFuZGxlcyBhZnRlciB0aGUgbWlkZGxlIGxhdGVyIGlzIGxvd2VyXHJcblx0Ly8gW1s3XSBbOF0gLi4uLi4uLi4uLiB8IC4uLi4uLi4uLi4gWzVdIFs0XVxyXG5cdGZ1bmN0aW9uIHNldFppbmRleCAoICkge1xyXG5cclxuXHRcdHNjb3BlX0hhbmRsZU51bWJlcnMuZm9yRWFjaChmdW5jdGlvbihoYW5kbGVOdW1iZXIpe1xyXG5cdFx0XHR2YXIgZGlyID0gKHNjb3BlX0xvY2F0aW9uc1toYW5kbGVOdW1iZXJdID4gNTAgPyAtMSA6IDEpO1xyXG5cdFx0XHR2YXIgekluZGV4ID0gMyArIChzY29wZV9IYW5kbGVzLmxlbmd0aCArIChkaXIgKiBoYW5kbGVOdW1iZXIpKTtcclxuXHRcdFx0c2NvcGVfSGFuZGxlc1toYW5kbGVOdW1iZXJdLnN0eWxlLnpJbmRleCA9IHpJbmRleDtcclxuXHRcdH0pO1xyXG5cdH1cclxuXHJcblx0Ly8gVGVzdCBzdWdnZXN0ZWQgdmFsdWVzIGFuZCBhcHBseSBtYXJnaW4sIHN0ZXAuXHJcblx0ZnVuY3Rpb24gc2V0SGFuZGxlICggaGFuZGxlTnVtYmVyLCB0bywgbG9va0JhY2t3YXJkLCBsb29rRm9yd2FyZCApIHtcclxuXHJcblx0XHR0byA9IGNoZWNrSGFuZGxlUG9zaXRpb24oc2NvcGVfTG9jYXRpb25zLCBoYW5kbGVOdW1iZXIsIHRvLCBsb29rQmFja3dhcmQsIGxvb2tGb3J3YXJkLCBmYWxzZSk7XHJcblxyXG5cdFx0aWYgKCB0byA9PT0gZmFsc2UgKSB7XHJcblx0XHRcdHJldHVybiBmYWxzZTtcclxuXHRcdH1cclxuXHJcblx0XHR1cGRhdGVIYW5kbGVQb3NpdGlvbihoYW5kbGVOdW1iZXIsIHRvKTtcclxuXHJcblx0XHRyZXR1cm4gdHJ1ZTtcclxuXHR9XHJcblxyXG5cdC8vIFVwZGF0ZXMgc3R5bGUgYXR0cmlidXRlIGZvciBjb25uZWN0IG5vZGVzXHJcblx0ZnVuY3Rpb24gdXBkYXRlQ29ubmVjdCAoIGluZGV4ICkge1xyXG5cclxuXHRcdC8vIFNraXAgY29ubmVjdHMgc2V0IHRvIGZhbHNlXHJcblx0XHRpZiAoICFzY29wZV9Db25uZWN0c1tpbmRleF0gKSB7XHJcblx0XHRcdHJldHVybjtcclxuXHRcdH1cclxuXHJcblx0XHR2YXIgbCA9IDA7XHJcblx0XHR2YXIgaCA9IDEwMDtcclxuXHJcblx0XHRpZiAoIGluZGV4ICE9PSAwICkge1xyXG5cdFx0XHRsID0gc2NvcGVfTG9jYXRpb25zW2luZGV4IC0gMV07XHJcblx0XHR9XHJcblxyXG5cdFx0aWYgKCBpbmRleCAhPT0gc2NvcGVfQ29ubmVjdHMubGVuZ3RoIC0gMSApIHtcclxuXHRcdFx0aCA9IHNjb3BlX0xvY2F0aW9uc1tpbmRleF07XHJcblx0XHR9XHJcblxyXG5cdFx0Ly8gV2UgdXNlIHR3byBydWxlczpcclxuXHRcdC8vICd0cmFuc2xhdGUnIHRvIGNoYW5nZSB0aGUgbGVmdC90b3Agb2Zmc2V0O1xyXG5cdFx0Ly8gJ3NjYWxlJyB0byBjaGFuZ2UgdGhlIHdpZHRoIG9mIHRoZSBlbGVtZW50O1xyXG5cdFx0Ly8gQXMgdGhlIGVsZW1lbnQgaGFzIGEgd2lkdGggb2YgMTAwJSwgYSB0cmFuc2xhdGlvbiBvZiAxMDAlIGlzIGVxdWFsIHRvIDEwMCUgb2YgdGhlIHBhcmVudCAoLm5vVWktYmFzZSlcclxuXHRcdHZhciBjb25uZWN0V2lkdGggPSBoIC0gbDtcclxuXHRcdHZhciB0cmFuc2xhdGVSdWxlID0gJ3RyYW5zbGF0ZSgnICsgaW5SdWxlT3JkZXIodG9QY3QodHJhbnNmb3JtRGlyZWN0aW9uKGwsIGNvbm5lY3RXaWR0aCkpLCAnMCcpICsgJyknO1xyXG5cdFx0dmFyIHNjYWxlUnVsZSA9ICdzY2FsZSgnICsgaW5SdWxlT3JkZXIoY29ubmVjdFdpZHRoIC8gMTAwLCAnMScpICsgJyknO1xyXG5cclxuXHRcdHNjb3BlX0Nvbm5lY3RzW2luZGV4XS5zdHlsZVtvcHRpb25zLnRyYW5zZm9ybVJ1bGVdID0gdHJhbnNsYXRlUnVsZSArICcgJyArIHNjYWxlUnVsZTtcclxuXHR9XHJcblxyXG4vKiEgSW4gdGhpcyBmaWxlOiBBbGwgbWV0aG9kcyBldmVudHVhbGx5IGV4cG9zZWQgaW4gc2xpZGVyLm5vVWlTbGlkZXIuLi4gKi9cclxuXHJcblx0Ly8gUGFyc2VzIHZhbHVlIHBhc3NlZCB0byAuc2V0IG1ldGhvZC4gUmV0dXJucyBjdXJyZW50IHZhbHVlIGlmIG5vdCBwYXJzZS1hYmxlLlxyXG5cdGZ1bmN0aW9uIHJlc29sdmVUb1ZhbHVlICggdG8sIGhhbmRsZU51bWJlciApIHtcclxuXHJcblx0XHQvLyBTZXR0aW5nIHdpdGggbnVsbCBpbmRpY2F0ZXMgYW4gJ2lnbm9yZScuXHJcblx0XHQvLyBJbnB1dHRpbmcgJ2ZhbHNlJyBpcyBpbnZhbGlkLlxyXG5cdFx0aWYgKCB0byA9PT0gbnVsbCB8fCB0byA9PT0gZmFsc2UgfHwgdG8gPT09IHVuZGVmaW5lZCApIHtcclxuXHRcdFx0cmV0dXJuIHNjb3BlX0xvY2F0aW9uc1toYW5kbGVOdW1iZXJdO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIElmIGEgZm9ybWF0dGVkIG51bWJlciB3YXMgcGFzc2VkLCBhdHRlbXB0IHRvIGRlY29kZSBpdC5cclxuXHRcdGlmICggdHlwZW9mIHRvID09PSAnbnVtYmVyJyApIHtcclxuXHRcdFx0dG8gPSBTdHJpbmcodG8pO1xyXG5cdFx0fVxyXG5cclxuXHRcdHRvID0gb3B0aW9ucy5mb3JtYXQuZnJvbSh0byk7XHJcblx0XHR0byA9IHNjb3BlX1NwZWN0cnVtLnRvU3RlcHBpbmcodG8pO1xyXG5cclxuXHRcdC8vIElmIHBhcnNpbmcgdGhlIG51bWJlciBmYWlsZWQsIHVzZSB0aGUgY3VycmVudCB2YWx1ZS5cclxuXHRcdGlmICggdG8gPT09IGZhbHNlIHx8IGlzTmFOKHRvKSApIHtcclxuXHRcdFx0cmV0dXJuIHNjb3BlX0xvY2F0aW9uc1toYW5kbGVOdW1iZXJdO1xyXG5cdFx0fVxyXG5cclxuXHRcdHJldHVybiB0bztcclxuXHR9XHJcblxyXG5cdC8vIFNldCB0aGUgc2xpZGVyIHZhbHVlLlxyXG5cdGZ1bmN0aW9uIHZhbHVlU2V0ICggaW5wdXQsIGZpcmVTZXRFdmVudCApIHtcclxuXHJcblx0XHR2YXIgdmFsdWVzID0gYXNBcnJheShpbnB1dCk7XHJcblx0XHR2YXIgaXNJbml0ID0gc2NvcGVfTG9jYXRpb25zWzBdID09PSB1bmRlZmluZWQ7XHJcblxyXG5cdFx0Ly8gRXZlbnQgZmlyZXMgYnkgZGVmYXVsdFxyXG5cdFx0ZmlyZVNldEV2ZW50ID0gKGZpcmVTZXRFdmVudCA9PT0gdW5kZWZpbmVkID8gdHJ1ZSA6ICEhZmlyZVNldEV2ZW50KTtcclxuXHJcblx0XHQvLyBBbmltYXRpb24gaXMgb3B0aW9uYWwuXHJcblx0XHQvLyBNYWtlIHN1cmUgdGhlIGluaXRpYWwgdmFsdWVzIHdlcmUgc2V0IGJlZm9yZSB1c2luZyBhbmltYXRlZCBwbGFjZW1lbnQuXHJcblx0XHRpZiAoIG9wdGlvbnMuYW5pbWF0ZSAmJiAhaXNJbml0ICkge1xyXG5cdFx0XHRhZGRDbGFzc0ZvcihzY29wZV9UYXJnZXQsIG9wdGlvbnMuY3NzQ2xhc3Nlcy50YXAsIG9wdGlvbnMuYW5pbWF0aW9uRHVyYXRpb24pO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEZpcnN0IHBhc3MsIHdpdGhvdXQgbG9va0FoZWFkIGJ1dCB3aXRoIGxvb2tCYWNrd2FyZC4gVmFsdWVzIGFyZSBzZXQgZnJvbSBsZWZ0IHRvIHJpZ2h0LlxyXG5cdFx0c2NvcGVfSGFuZGxlTnVtYmVycy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZU51bWJlcil7XHJcblx0XHRcdHNldEhhbmRsZShoYW5kbGVOdW1iZXIsIHJlc29sdmVUb1ZhbHVlKHZhbHVlc1toYW5kbGVOdW1iZXJdLCBoYW5kbGVOdW1iZXIpLCB0cnVlLCBmYWxzZSk7XHJcblx0XHR9KTtcclxuXHJcblx0XHQvLyBTZWNvbmQgcGFzcy4gTm93IHRoYXQgYWxsIGJhc2UgdmFsdWVzIGFyZSBzZXQsIGFwcGx5IGNvbnN0cmFpbnRzXHJcblx0XHRzY29wZV9IYW5kbGVOdW1iZXJzLmZvckVhY2goZnVuY3Rpb24oaGFuZGxlTnVtYmVyKXtcclxuXHRcdFx0c2V0SGFuZGxlKGhhbmRsZU51bWJlciwgc2NvcGVfTG9jYXRpb25zW2hhbmRsZU51bWJlcl0sIHRydWUsIHRydWUpO1xyXG5cdFx0fSk7XHJcblxyXG5cdFx0c2V0WmluZGV4KCk7XHJcblxyXG5cdFx0c2NvcGVfSGFuZGxlTnVtYmVycy5mb3JFYWNoKGZ1bmN0aW9uKGhhbmRsZU51bWJlcil7XHJcblxyXG5cdFx0XHRmaXJlRXZlbnQoJ3VwZGF0ZScsIGhhbmRsZU51bWJlcik7XHJcblxyXG5cdFx0XHQvLyBGaXJlIHRoZSBldmVudCBvbmx5IGZvciBoYW5kbGVzIHRoYXQgcmVjZWl2ZWQgYSBuZXcgdmFsdWUsIGFzIHBlciAjNTc5XHJcblx0XHRcdGlmICggdmFsdWVzW2hhbmRsZU51bWJlcl0gIT09IG51bGwgJiYgZmlyZVNldEV2ZW50ICkge1xyXG5cdFx0XHRcdGZpcmVFdmVudCgnc2V0JywgaGFuZGxlTnVtYmVyKTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHQvLyBSZXNldCBzbGlkZXIgdG8gaW5pdGlhbCB2YWx1ZXNcclxuXHRmdW5jdGlvbiB2YWx1ZVJlc2V0ICggZmlyZVNldEV2ZW50ICkge1xyXG5cdFx0dmFsdWVTZXQob3B0aW9ucy5zdGFydCwgZmlyZVNldEV2ZW50KTtcclxuXHR9XHJcblxyXG5cdC8vIEdldCB0aGUgc2xpZGVyIHZhbHVlLlxyXG5cdGZ1bmN0aW9uIHZhbHVlR2V0ICggKSB7XHJcblxyXG5cdFx0dmFyIHZhbHVlcyA9IHNjb3BlX1ZhbHVlcy5tYXAob3B0aW9ucy5mb3JtYXQudG8pO1xyXG5cclxuXHRcdC8vIElmIG9ubHkgb25lIGhhbmRsZSBpcyB1c2VkLCByZXR1cm4gYSBzaW5nbGUgdmFsdWUuXHJcblx0XHRpZiAoIHZhbHVlcy5sZW5ndGggPT09IDEgKXtcclxuXHRcdFx0cmV0dXJuIHZhbHVlc1swXTtcclxuXHRcdH1cclxuXHJcblx0XHRyZXR1cm4gdmFsdWVzO1xyXG5cdH1cclxuXHJcblx0Ly8gUmVtb3ZlcyBjbGFzc2VzIGZyb20gdGhlIHJvb3QgYW5kIGVtcHRpZXMgaXQuXHJcblx0ZnVuY3Rpb24gZGVzdHJveSAoICkge1xyXG5cclxuXHRcdGZvciAoIHZhciBrZXkgaW4gb3B0aW9ucy5jc3NDbGFzc2VzICkge1xyXG5cdFx0XHRpZiAoICFvcHRpb25zLmNzc0NsYXNzZXMuaGFzT3duUHJvcGVydHkoa2V5KSApIHsgY29udGludWU7IH1cclxuXHRcdFx0cmVtb3ZlQ2xhc3Moc2NvcGVfVGFyZ2V0LCBvcHRpb25zLmNzc0NsYXNzZXNba2V5XSk7XHJcblx0XHR9XHJcblxyXG5cdFx0d2hpbGUgKHNjb3BlX1RhcmdldC5maXJzdENoaWxkKSB7XHJcblx0XHRcdHNjb3BlX1RhcmdldC5yZW1vdmVDaGlsZChzY29wZV9UYXJnZXQuZmlyc3RDaGlsZCk7XHJcblx0XHR9XHJcblxyXG5cdFx0ZGVsZXRlIHNjb3BlX1RhcmdldC5ub1VpU2xpZGVyO1xyXG5cdH1cclxuXHJcblx0Ly8gR2V0IHRoZSBjdXJyZW50IHN0ZXAgc2l6ZSBmb3IgdGhlIHNsaWRlci5cclxuXHRmdW5jdGlvbiBnZXRDdXJyZW50U3RlcCAoICkge1xyXG5cclxuXHRcdC8vIENoZWNrIGFsbCBsb2NhdGlvbnMsIG1hcCB0aGVtIHRvIHRoZWlyIHN0ZXBwaW5nIHBvaW50LlxyXG5cdFx0Ly8gR2V0IHRoZSBzdGVwIHBvaW50LCB0aGVuIGZpbmQgaXQgaW4gdGhlIGlucHV0IGxpc3QuXHJcblx0XHRyZXR1cm4gc2NvcGVfTG9jYXRpb25zLm1hcChmdW5jdGlvbiggbG9jYXRpb24sIGluZGV4ICl7XHJcblxyXG5cdFx0XHR2YXIgbmVhcmJ5U3RlcHMgPSBzY29wZV9TcGVjdHJ1bS5nZXROZWFyYnlTdGVwcyggbG9jYXRpb24gKTtcclxuXHRcdFx0dmFyIHZhbHVlID0gc2NvcGVfVmFsdWVzW2luZGV4XTtcclxuXHRcdFx0dmFyIGluY3JlbWVudCA9IG5lYXJieVN0ZXBzLnRoaXNTdGVwLnN0ZXA7XHJcblx0XHRcdHZhciBkZWNyZW1lbnQgPSBudWxsO1xyXG5cclxuXHRcdFx0Ly8gSWYgdGhlIG5leHQgdmFsdWUgaW4gdGhpcyBzdGVwIG1vdmVzIGludG8gdGhlIG5leHQgc3RlcCxcclxuXHRcdFx0Ly8gdGhlIGluY3JlbWVudCBpcyB0aGUgc3RhcnQgb2YgdGhlIG5leHQgc3RlcCAtIHRoZSBjdXJyZW50IHZhbHVlXHJcblx0XHRcdGlmICggaW5jcmVtZW50ICE9PSBmYWxzZSApIHtcclxuXHRcdFx0XHRpZiAoIHZhbHVlICsgaW5jcmVtZW50ID4gbmVhcmJ5U3RlcHMuc3RlcEFmdGVyLnN0YXJ0VmFsdWUgKSB7XHJcblx0XHRcdFx0XHRpbmNyZW1lbnQgPSBuZWFyYnlTdGVwcy5zdGVwQWZ0ZXIuc3RhcnRWYWx1ZSAtIHZhbHVlO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0fVxyXG5cclxuXHJcblx0XHRcdC8vIElmIHRoZSB2YWx1ZSBpcyBiZXlvbmQgdGhlIHN0YXJ0aW5nIHBvaW50XHJcblx0XHRcdGlmICggdmFsdWUgPiBuZWFyYnlTdGVwcy50aGlzU3RlcC5zdGFydFZhbHVlICkge1xyXG5cdFx0XHRcdGRlY3JlbWVudCA9IG5lYXJieVN0ZXBzLnRoaXNTdGVwLnN0ZXA7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdGVsc2UgaWYgKCBuZWFyYnlTdGVwcy5zdGVwQmVmb3JlLnN0ZXAgPT09IGZhbHNlICkge1xyXG5cdFx0XHRcdGRlY3JlbWVudCA9IGZhbHNlO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHQvLyBJZiBhIGhhbmRsZSBpcyBhdCB0aGUgc3RhcnQgb2YgYSBzdGVwLCBpdCBhbHdheXMgc3RlcHMgYmFjayBpbnRvIHRoZSBwcmV2aW91cyBzdGVwIGZpcnN0XHJcblx0XHRcdGVsc2Uge1xyXG5cdFx0XHRcdGRlY3JlbWVudCA9IHZhbHVlIC0gbmVhcmJ5U3RlcHMuc3RlcEJlZm9yZS5oaWdoZXN0U3RlcDtcclxuXHRcdFx0fVxyXG5cclxuXHJcblx0XHRcdC8vIE5vdywgaWYgYXQgdGhlIHNsaWRlciBlZGdlcywgdGhlcmUgaXMgbm90IGluL2RlY3JlbWVudFxyXG5cdFx0XHRpZiAoIGxvY2F0aW9uID09PSAxMDAgKSB7XHJcblx0XHRcdFx0aW5jcmVtZW50ID0gbnVsbDtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0ZWxzZSBpZiAoIGxvY2F0aW9uID09PSAwICkge1xyXG5cdFx0XHRcdGRlY3JlbWVudCA9IG51bGw7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdC8vIEFzIHBlciAjMzkxLCB0aGUgY29tcGFyaXNvbiBmb3IgdGhlIGRlY3JlbWVudCBzdGVwIGNhbiBoYXZlIHNvbWUgcm91bmRpbmcgaXNzdWVzLlxyXG5cdFx0XHR2YXIgc3RlcERlY2ltYWxzID0gc2NvcGVfU3BlY3RydW0uY291bnRTdGVwRGVjaW1hbHMoKTtcclxuXHJcblx0XHRcdC8vIFJvdW5kIHBlciAjMzkxXHJcblx0XHRcdGlmICggaW5jcmVtZW50ICE9PSBudWxsICYmIGluY3JlbWVudCAhPT0gZmFsc2UgKSB7XHJcblx0XHRcdFx0aW5jcmVtZW50ID0gTnVtYmVyKGluY3JlbWVudC50b0ZpeGVkKHN0ZXBEZWNpbWFscykpO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHRpZiAoIGRlY3JlbWVudCAhPT0gbnVsbCAmJiBkZWNyZW1lbnQgIT09IGZhbHNlICkge1xyXG5cdFx0XHRcdGRlY3JlbWVudCA9IE51bWJlcihkZWNyZW1lbnQudG9GaXhlZChzdGVwRGVjaW1hbHMpKTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0cmV0dXJuIFtkZWNyZW1lbnQsIGluY3JlbWVudF07XHJcblx0XHR9KTtcclxuXHR9XHJcblxyXG5cdC8vIFVwZGF0ZWFibGU6IG1hcmdpbiwgbGltaXQsIHBhZGRpbmcsIHN0ZXAsIHJhbmdlLCBhbmltYXRlLCBzbmFwXHJcblx0ZnVuY3Rpb24gdXBkYXRlT3B0aW9ucyAoIG9wdGlvbnNUb1VwZGF0ZSwgZmlyZVNldEV2ZW50ICkge1xyXG5cclxuXHRcdC8vIFNwZWN0cnVtIGlzIGNyZWF0ZWQgdXNpbmcgdGhlIHJhbmdlLCBzbmFwLCBkaXJlY3Rpb24gYW5kIHN0ZXAgb3B0aW9ucy5cclxuXHRcdC8vICdzbmFwJyBhbmQgJ3N0ZXAnIGNhbiBiZSB1cGRhdGVkLlxyXG5cdFx0Ly8gSWYgJ3NuYXAnIGFuZCAnc3RlcCcgYXJlIG5vdCBwYXNzZWQsIHRoZXkgc2hvdWxkIHJlbWFpbiB1bmNoYW5nZWQuXHJcblx0XHR2YXIgdiA9IHZhbHVlR2V0KCk7XHJcblxyXG5cdFx0dmFyIHVwZGF0ZUFibGUgPSBbJ21hcmdpbicsICdsaW1pdCcsICdwYWRkaW5nJywgJ3JhbmdlJywgJ2FuaW1hdGUnLCAnc25hcCcsICdzdGVwJywgJ2Zvcm1hdCddO1xyXG5cclxuXHRcdC8vIE9ubHkgY2hhbmdlIG9wdGlvbnMgdGhhdCB3ZSdyZSBhY3R1YWxseSBwYXNzZWQgdG8gdXBkYXRlLlxyXG5cdFx0dXBkYXRlQWJsZS5mb3JFYWNoKGZ1bmN0aW9uKG5hbWUpe1xyXG5cdFx0XHRpZiAoIG9wdGlvbnNUb1VwZGF0ZVtuYW1lXSAhPT0gdW5kZWZpbmVkICkge1xyXG5cdFx0XHRcdG9yaWdpbmFsT3B0aW9uc1tuYW1lXSA9IG9wdGlvbnNUb1VwZGF0ZVtuYW1lXTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblxyXG5cdFx0dmFyIG5ld09wdGlvbnMgPSB0ZXN0T3B0aW9ucyhvcmlnaW5hbE9wdGlvbnMpO1xyXG5cclxuXHRcdC8vIExvYWQgbmV3IG9wdGlvbnMgaW50byB0aGUgc2xpZGVyIHN0YXRlXHJcblx0XHR1cGRhdGVBYmxlLmZvckVhY2goZnVuY3Rpb24obmFtZSl7XHJcblx0XHRcdGlmICggb3B0aW9uc1RvVXBkYXRlW25hbWVdICE9PSB1bmRlZmluZWQgKSB7XHJcblx0XHRcdFx0b3B0aW9uc1tuYW1lXSA9IG5ld09wdGlvbnNbbmFtZV07XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cclxuXHRcdHNjb3BlX1NwZWN0cnVtID0gbmV3T3B0aW9ucy5zcGVjdHJ1bTtcclxuXHJcblx0XHQvLyBMaW1pdCwgbWFyZ2luIGFuZCBwYWRkaW5nIGRlcGVuZCBvbiB0aGUgc3BlY3RydW0gYnV0IGFyZSBzdG9yZWQgb3V0c2lkZSBvZiBpdC4gKCM2NzcpXHJcblx0XHRvcHRpb25zLm1hcmdpbiA9IG5ld09wdGlvbnMubWFyZ2luO1xyXG5cdFx0b3B0aW9ucy5saW1pdCA9IG5ld09wdGlvbnMubGltaXQ7XHJcblx0XHRvcHRpb25zLnBhZGRpbmcgPSBuZXdPcHRpb25zLnBhZGRpbmc7XHJcblxyXG5cdFx0Ly8gVXBkYXRlIHBpcHMsIHJlbW92ZXMgZXhpc3RpbmcuXHJcblx0XHRpZiAoIG9wdGlvbnMucGlwcyApIHtcclxuXHRcdFx0cGlwcyhvcHRpb25zLnBpcHMpO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8vIEludmFsaWRhdGUgdGhlIGN1cnJlbnQgcG9zaXRpb25pbmcgc28gdmFsdWVTZXQgZm9yY2VzIGFuIHVwZGF0ZS5cclxuXHRcdHNjb3BlX0xvY2F0aW9ucyA9IFtdO1xyXG5cdFx0dmFsdWVTZXQob3B0aW9uc1RvVXBkYXRlLnN0YXJ0IHx8IHYsIGZpcmVTZXRFdmVudCk7XHJcblx0fVxyXG5cclxuLyohIEluIHRoaXMgZmlsZTogQ2FsbHMgdG8gZnVuY3Rpb25zLiBBbGwgb3RoZXIgc2NvcGVfIGZpbGVzIGRlZmluZSBmdW5jdGlvbnMgb25seTsgKi9cclxuXHJcblx0Ly8gQ3JlYXRlIHRoZSBiYXNlIGVsZW1lbnQsIGluaXRpYWxpemUgSFRNTCBhbmQgc2V0IGNsYXNzZXMuXHJcblx0Ly8gQWRkIGhhbmRsZXMgYW5kIGNvbm5lY3QgZWxlbWVudHMuXHJcblx0YWRkU2xpZGVyKHNjb3BlX1RhcmdldCk7XHJcblx0YWRkRWxlbWVudHMob3B0aW9ucy5jb25uZWN0LCBzY29wZV9CYXNlKTtcclxuXHJcblx0Ly8gQXR0YWNoIHVzZXIgZXZlbnRzLlxyXG5cdGJpbmRTbGlkZXJFdmVudHMob3B0aW9ucy5ldmVudHMpO1xyXG5cclxuXHQvLyBVc2UgdGhlIHB1YmxpYyB2YWx1ZSBtZXRob2QgdG8gc2V0IHRoZSBzdGFydCB2YWx1ZXMuXHJcblx0dmFsdWVTZXQob3B0aW9ucy5zdGFydCk7XHJcblxyXG5cdHNjb3BlX1NlbGYgPSB7XHJcblx0XHRkZXN0cm95OiBkZXN0cm95LFxyXG5cdFx0c3RlcHM6IGdldEN1cnJlbnRTdGVwLFxyXG5cdFx0b246IGJpbmRFdmVudCxcclxuXHRcdG9mZjogcmVtb3ZlRXZlbnQsXHJcblx0XHRnZXQ6IHZhbHVlR2V0LFxyXG5cdFx0c2V0OiB2YWx1ZVNldCxcclxuXHRcdHJlc2V0OiB2YWx1ZVJlc2V0LFxyXG5cdFx0Ly8gRXhwb3NlZCBmb3IgdW5pdCB0ZXN0aW5nLCBkb24ndCB1c2UgdGhpcyBpbiB5b3VyIGFwcGxpY2F0aW9uLlxyXG5cdFx0X19tb3ZlSGFuZGxlczogZnVuY3Rpb24oYSwgYiwgYykgeyBtb3ZlSGFuZGxlcyhhLCBiLCBzY29wZV9Mb2NhdGlvbnMsIGMpOyB9LFxyXG5cdFx0b3B0aW9uczogb3JpZ2luYWxPcHRpb25zLCAvLyBJc3N1ZSAjNjAwLCAjNjc4XHJcblx0XHR1cGRhdGVPcHRpb25zOiB1cGRhdGVPcHRpb25zLFxyXG5cdFx0dGFyZ2V0OiBzY29wZV9UYXJnZXQsIC8vIElzc3VlICM1OTdcclxuXHRcdHJlbW92ZVBpcHM6IHJlbW92ZVBpcHMsXHJcblx0XHRwaXBzOiBwaXBzIC8vIElzc3VlICM1OTRcclxuXHR9O1xyXG5cclxuXHRpZiAoIG9wdGlvbnMucGlwcyApIHtcclxuXHRcdHBpcHMob3B0aW9ucy5waXBzKTtcclxuXHR9XHJcblxyXG5cdGlmICggb3B0aW9ucy50b29sdGlwcyApIHtcclxuXHRcdHRvb2x0aXBzKCk7XHJcblx0fVxyXG5cclxuXHRhcmlhKCk7XHJcblxyXG5cdHJldHVybiBzY29wZV9TZWxmO1xyXG5cclxufVxyXG5cclxuXHJcblx0Ly8gUnVuIHRoZSBzdGFuZGFyZCBpbml0aWFsaXplclxyXG5cdGZ1bmN0aW9uIGluaXRpYWxpemUgKCB0YXJnZXQsIG9yaWdpbmFsT3B0aW9ucyApIHtcclxuXHJcblx0XHRpZiAoICF0YXJnZXQgfHwgIXRhcmdldC5ub2RlTmFtZSApIHtcclxuXHRcdFx0dGhyb3cgbmV3IEVycm9yKFwibm9VaVNsaWRlciAoXCIgKyBWRVJTSU9OICsgXCIpOiBjcmVhdGUgcmVxdWlyZXMgYSBzaW5nbGUgZWxlbWVudCwgZ290OiBcIiArIHRhcmdldCk7XHJcblx0XHR9XHJcblxyXG5cdFx0Ly8gVGhyb3cgYW4gZXJyb3IgaWYgdGhlIHNsaWRlciB3YXMgYWxyZWFkeSBpbml0aWFsaXplZC5cclxuXHRcdGlmICggdGFyZ2V0Lm5vVWlTbGlkZXIgKSB7XHJcblx0XHRcdHRocm93IG5ldyBFcnJvcihcIm5vVWlTbGlkZXIgKFwiICsgVkVSU0lPTiArIFwiKTogU2xpZGVyIHdhcyBhbHJlYWR5IGluaXRpYWxpemVkLlwiKTtcclxuXHRcdH1cclxuXHJcblx0XHQvLyBUZXN0IHRoZSBvcHRpb25zIGFuZCBjcmVhdGUgdGhlIHNsaWRlciBlbnZpcm9ubWVudDtcclxuXHRcdHZhciBvcHRpb25zID0gdGVzdE9wdGlvbnMoIG9yaWdpbmFsT3B0aW9ucywgdGFyZ2V0ICk7XHJcblx0XHR2YXIgYXBpID0gc2NvcGUoIHRhcmdldCwgb3B0aW9ucywgb3JpZ2luYWxPcHRpb25zICk7XHJcblxyXG5cdFx0dGFyZ2V0Lm5vVWlTbGlkZXIgPSBhcGk7XHJcblxyXG5cdFx0cmV0dXJuIGFwaTtcclxuXHR9XHJcblxyXG5cdC8vIFVzZSBhbiBvYmplY3QgaW5zdGVhZCBvZiBhIGZ1bmN0aW9uIGZvciBmdXR1cmUgZXhwYW5kYWJpbGl0eTtcclxuXHRyZXR1cm4ge1xyXG5cdFx0dmVyc2lvbjogVkVSU0lPTixcclxuXHRcdGNyZWF0ZTogaW5pdGlhbGl6ZVxyXG5cdH07XHJcblxyXG59KSk7IiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgbm9VaVNsaWRlciBmcm9tICdub3Vpc2xpZGVyJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUmFuZ2VTbGlkZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBzbGlkZXJDb250YWluZXI6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCByYW5nZUlucHV0czogSFRNTElucHV0RWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBudW1iZXJEaWdpdHNBZnRlckRlY2ltYWxQb2ludDogbnVtYmVyID0gMjtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNsaWRlckNvbnRhaW5lciA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMud3JhcENsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMucmFuZ2VJbnB1dHMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmlucHV0c0NsYXNzTmFtZSkpO1xuXG4gICAgICAgIHRoaXMuaW5pdFVpU2xpZGVyKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5yYW5nZUlucHV0cy5mb3JFYWNoKChpbnB1dCwgaW5kZXgpID0+IHtcbiAgICAgICAgICAgIGlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIChldmVudDogRXZlbnQpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLnNldElucHV0VmFsdWVUb1NsaWRlcihpbmRleCwgKDxIVE1MSW5wdXRFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQpLnZhbHVlKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcblxuICAgICAgICB0aGlzLnZhbHVlVXBkYXRlKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGluaXRVaVNsaWRlcigpOiB2b2lkIHtcbiAgICAgICAgbm9VaVNsaWRlci5jcmVhdGUodGhpcy5zbGlkZXJDb250YWluZXIsIHRoaXMuc2xpZGVyQ29uZmlnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0SW5wdXRWYWx1ZVRvU2xpZGVyKGluZGV4OiBudW1iZXIsIHZhbHVlOiBzdHJpbmcpIHtcbiAgICAgICAgY29uc3QgaW5wdXRzVmFsdWUgPSBbXTtcbiAgICAgICAgaW5wdXRzVmFsdWVbaW5kZXhdID0gdmFsdWU7XG4gICAgICAgICg8bm9VaVNsaWRlcj50aGlzLnNsaWRlckNvbnRhaW5lcikubm9VaVNsaWRlci5zZXQoaW5wdXRzVmFsdWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB2YWx1ZVVwZGF0ZSgpOiB2b2lkIHtcbiAgICAgICAgKDxub1VpU2xpZGVyPnRoaXMuc2xpZGVyQ29udGFpbmVyKS5ub1VpU2xpZGVyLm9uKCd1cGRhdGUnLCAodmFsdWVzLCBoYW5kbGUpID0+IHtcbiAgICAgICAgICAgIHRoaXMucmFuZ2VJbnB1dHNbaGFuZGxlXS52YWx1ZSA9IFN0cmluZyh2YWx1ZXNbaGFuZGxlXSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgd3JhcENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3dyYXAtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaW5wdXRzQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnaW5wdXRzLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNsaWRlckNvbmZpZygpOiBvYmplY3Qge1xuICAgICAgICByZXR1cm4gT2JqZWN0LmFzc2lnbihKU09OLnBhcnNlKHRoaXMuZ2V0QXR0cmlidXRlKCdzbGlkZXItY29uZmlnJykpLCB7XG4gICAgICAgICAgICBmb3JtYXQ6IHtcbiAgICAgICAgICAgICAgICBmcm9tOiAodmFsdWUpID0+IHZhbHVlLFxuICAgICAgICAgICAgICAgIHRvOiAodmFsdWUpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgdmFsdWUgPVxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWUudG9GaXhlZCh0aGlzLm51bWJlckRpZ2l0c0FmdGVyRGVjaW1hbFBvaW50KSAlIDEgPT09IDBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA/IE1hdGguZmxvb3IodmFsdWUpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgOiB2YWx1ZS50b0ZpeGVkKHRoaXMubnVtYmVyRGlnaXRzQWZ0ZXJEZWNpbWFsUG9pbnQpO1xuXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiB2YWx1ZTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfSxcbiAgICAgICAgfSk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==