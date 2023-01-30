(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["product-search-autocomplete-form"],{

/***/ "./node_modules/lodash-es/_Symbol.js":
/*!*******************************************!*\
  !*** ./node_modules/lodash-es/_Symbol.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _root_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_root.js */ "./node_modules/lodash-es/_root.js");


/** Built-in value references. */
var Symbol = _root_js__WEBPACK_IMPORTED_MODULE_0__["default"].Symbol;

/* harmony default export */ __webpack_exports__["default"] = (Symbol);


/***/ }),

/***/ "./node_modules/lodash-es/_baseGetTag.js":
/*!***********************************************!*\
  !*** ./node_modules/lodash-es/_baseGetTag.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_Symbol.js */ "./node_modules/lodash-es/_Symbol.js");
/* harmony import */ var _getRawTag_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_getRawTag.js */ "./node_modules/lodash-es/_getRawTag.js");
/* harmony import */ var _objectToString_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./_objectToString.js */ "./node_modules/lodash-es/_objectToString.js");




/** `Object#toString` result references. */
var nullTag = '[object Null]',
    undefinedTag = '[object Undefined]';

/** Built-in value references. */
var symToStringTag = _Symbol_js__WEBPACK_IMPORTED_MODULE_0__["default"] ? _Symbol_js__WEBPACK_IMPORTED_MODULE_0__["default"].toStringTag : undefined;

/**
 * The base implementation of `getTag` without fallbacks for buggy environments.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the `toStringTag`.
 */
function baseGetTag(value) {
  if (value == null) {
    return value === undefined ? undefinedTag : nullTag;
  }
  return (symToStringTag && symToStringTag in Object(value))
    ? Object(_getRawTag_js__WEBPACK_IMPORTED_MODULE_1__["default"])(value)
    : Object(_objectToString_js__WEBPACK_IMPORTED_MODULE_2__["default"])(value);
}

/* harmony default export */ __webpack_exports__["default"] = (baseGetTag);


/***/ }),

/***/ "./node_modules/lodash-es/_baseTrim.js":
/*!*********************************************!*\
  !*** ./node_modules/lodash-es/_baseTrim.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _trimmedEndIndex_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_trimmedEndIndex.js */ "./node_modules/lodash-es/_trimmedEndIndex.js");


/** Used to match leading whitespace. */
var reTrimStart = /^\s+/;

/**
 * The base implementation of `_.trim`.
 *
 * @private
 * @param {string} string The string to trim.
 * @returns {string} Returns the trimmed string.
 */
function baseTrim(string) {
  return string
    ? string.slice(0, Object(_trimmedEndIndex_js__WEBPACK_IMPORTED_MODULE_0__["default"])(string) + 1).replace(reTrimStart, '')
    : string;
}

/* harmony default export */ __webpack_exports__["default"] = (baseTrim);


/***/ }),

/***/ "./node_modules/lodash-es/_freeGlobal.js":
/*!***********************************************!*\
  !*** ./node_modules/lodash-es/_freeGlobal.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(global) {/** Detect free variable `global` from Node.js. */
var freeGlobal = typeof global == 'object' && global && global.Object === Object && global;

/* harmony default export */ __webpack_exports__["default"] = (freeGlobal);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/lodash-es/_getRawTag.js":
/*!**********************************************!*\
  !*** ./node_modules/lodash-es/_getRawTag.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_Symbol.js */ "./node_modules/lodash-es/_Symbol.js");


/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/** Built-in value references. */
var symToStringTag = _Symbol_js__WEBPACK_IMPORTED_MODULE_0__["default"] ? _Symbol_js__WEBPACK_IMPORTED_MODULE_0__["default"].toStringTag : undefined;

/**
 * A specialized version of `baseGetTag` which ignores `Symbol.toStringTag` values.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the raw `toStringTag`.
 */
function getRawTag(value) {
  var isOwn = hasOwnProperty.call(value, symToStringTag),
      tag = value[symToStringTag];

  try {
    value[symToStringTag] = undefined;
    var unmasked = true;
  } catch (e) {}

  var result = nativeObjectToString.call(value);
  if (unmasked) {
    if (isOwn) {
      value[symToStringTag] = tag;
    } else {
      delete value[symToStringTag];
    }
  }
  return result;
}

/* harmony default export */ __webpack_exports__["default"] = (getRawTag);


/***/ }),

/***/ "./node_modules/lodash-es/_objectToString.js":
/*!***************************************************!*\
  !*** ./node_modules/lodash-es/_objectToString.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/** Used for built-in method references. */
var objectProto = Object.prototype;

/**
 * Used to resolve the
 * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
 * of values.
 */
var nativeObjectToString = objectProto.toString;

/**
 * Converts `value` to a string using `Object.prototype.toString`.
 *
 * @private
 * @param {*} value The value to convert.
 * @returns {string} Returns the converted string.
 */
function objectToString(value) {
  return nativeObjectToString.call(value);
}

/* harmony default export */ __webpack_exports__["default"] = (objectToString);


/***/ }),

/***/ "./node_modules/lodash-es/_root.js":
/*!*****************************************!*\
  !*** ./node_modules/lodash-es/_root.js ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _freeGlobal_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_freeGlobal.js */ "./node_modules/lodash-es/_freeGlobal.js");


/** Detect free variable `self`. */
var freeSelf = typeof self == 'object' && self && self.Object === Object && self;

/** Used as a reference to the global object. */
var root = _freeGlobal_js__WEBPACK_IMPORTED_MODULE_0__["default"] || freeSelf || Function('return this')();

/* harmony default export */ __webpack_exports__["default"] = (root);


/***/ }),

/***/ "./node_modules/lodash-es/_trimmedEndIndex.js":
/*!****************************************************!*\
  !*** ./node_modules/lodash-es/_trimmedEndIndex.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/** Used to match a single whitespace character. */
var reWhitespace = /\s/;

/**
 * Used by `_.trim` and `_.trimEnd` to get the index of the last non-whitespace
 * character of `string`.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {number} Returns the index of the last non-whitespace character.
 */
function trimmedEndIndex(string) {
  var index = string.length;

  while (index-- && reWhitespace.test(string.charAt(index))) {}
  return index;
}

/* harmony default export */ __webpack_exports__["default"] = (trimmedEndIndex);


/***/ }),

/***/ "./node_modules/lodash-es/debounce.js":
/*!********************************************!*\
  !*** ./node_modules/lodash-es/debounce.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _isObject_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./isObject.js */ "./node_modules/lodash-es/isObject.js");
/* harmony import */ var _now_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./now.js */ "./node_modules/lodash-es/now.js");
/* harmony import */ var _toNumber_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./toNumber.js */ "./node_modules/lodash-es/toNumber.js");




/** Error message constants. */
var FUNC_ERROR_TEXT = 'Expected a function';

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max,
    nativeMin = Math.min;

/**
 * Creates a debounced function that delays invoking `func` until after `wait`
 * milliseconds have elapsed since the last time the debounced function was
 * invoked. The debounced function comes with a `cancel` method to cancel
 * delayed `func` invocations and a `flush` method to immediately invoke them.
 * Provide `options` to indicate whether `func` should be invoked on the
 * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
 * with the last arguments provided to the debounced function. Subsequent
 * calls to the debounced function return the result of the last `func`
 * invocation.
 *
 * **Note:** If `leading` and `trailing` options are `true`, `func` is
 * invoked on the trailing edge of the timeout only if the debounced function
 * is invoked more than once during the `wait` timeout.
 *
 * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
 * until to the next tick, similar to `setTimeout` with a timeout of `0`.
 *
 * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
 * for details over the differences between `_.debounce` and `_.throttle`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Function
 * @param {Function} func The function to debounce.
 * @param {number} [wait=0] The number of milliseconds to delay.
 * @param {Object} [options={}] The options object.
 * @param {boolean} [options.leading=false]
 *  Specify invoking on the leading edge of the timeout.
 * @param {number} [options.maxWait]
 *  The maximum time `func` is allowed to be delayed before it's invoked.
 * @param {boolean} [options.trailing=true]
 *  Specify invoking on the trailing edge of the timeout.
 * @returns {Function} Returns the new debounced function.
 * @example
 *
 * // Avoid costly calculations while the window size is in flux.
 * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
 *
 * // Invoke `sendMail` when clicked, debouncing subsequent calls.
 * jQuery(element).on('click', _.debounce(sendMail, 300, {
 *   'leading': true,
 *   'trailing': false
 * }));
 *
 * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
 * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
 * var source = new EventSource('/stream');
 * jQuery(source).on('message', debounced);
 *
 * // Cancel the trailing debounced invocation.
 * jQuery(window).on('popstate', debounced.cancel);
 */
function debounce(func, wait, options) {
  var lastArgs,
      lastThis,
      maxWait,
      result,
      timerId,
      lastCallTime,
      lastInvokeTime = 0,
      leading = false,
      maxing = false,
      trailing = true;

  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  wait = Object(_toNumber_js__WEBPACK_IMPORTED_MODULE_2__["default"])(wait) || 0;
  if (Object(_isObject_js__WEBPACK_IMPORTED_MODULE_0__["default"])(options)) {
    leading = !!options.leading;
    maxing = 'maxWait' in options;
    maxWait = maxing ? nativeMax(Object(_toNumber_js__WEBPACK_IMPORTED_MODULE_2__["default"])(options.maxWait) || 0, wait) : maxWait;
    trailing = 'trailing' in options ? !!options.trailing : trailing;
  }

  function invokeFunc(time) {
    var args = lastArgs,
        thisArg = lastThis;

    lastArgs = lastThis = undefined;
    lastInvokeTime = time;
    result = func.apply(thisArg, args);
    return result;
  }

  function leadingEdge(time) {
    // Reset any `maxWait` timer.
    lastInvokeTime = time;
    // Start the timer for the trailing edge.
    timerId = setTimeout(timerExpired, wait);
    // Invoke the leading edge.
    return leading ? invokeFunc(time) : result;
  }

  function remainingWait(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime,
        timeWaiting = wait - timeSinceLastCall;

    return maxing
      ? nativeMin(timeWaiting, maxWait - timeSinceLastInvoke)
      : timeWaiting;
  }

  function shouldInvoke(time) {
    var timeSinceLastCall = time - lastCallTime,
        timeSinceLastInvoke = time - lastInvokeTime;

    // Either this is the first call, activity has stopped and we're at the
    // trailing edge, the system time has gone backwards and we're treating
    // it as the trailing edge, or we've hit the `maxWait` limit.
    return (lastCallTime === undefined || (timeSinceLastCall >= wait) ||
      (timeSinceLastCall < 0) || (maxing && timeSinceLastInvoke >= maxWait));
  }

  function timerExpired() {
    var time = Object(_now_js__WEBPACK_IMPORTED_MODULE_1__["default"])();
    if (shouldInvoke(time)) {
      return trailingEdge(time);
    }
    // Restart the timer.
    timerId = setTimeout(timerExpired, remainingWait(time));
  }

  function trailingEdge(time) {
    timerId = undefined;

    // Only invoke if we have `lastArgs` which means `func` has been
    // debounced at least once.
    if (trailing && lastArgs) {
      return invokeFunc(time);
    }
    lastArgs = lastThis = undefined;
    return result;
  }

  function cancel() {
    if (timerId !== undefined) {
      clearTimeout(timerId);
    }
    lastInvokeTime = 0;
    lastArgs = lastCallTime = lastThis = timerId = undefined;
  }

  function flush() {
    return timerId === undefined ? result : trailingEdge(Object(_now_js__WEBPACK_IMPORTED_MODULE_1__["default"])());
  }

  function debounced() {
    var time = Object(_now_js__WEBPACK_IMPORTED_MODULE_1__["default"])(),
        isInvoking = shouldInvoke(time);

    lastArgs = arguments;
    lastThis = this;
    lastCallTime = time;

    if (isInvoking) {
      if (timerId === undefined) {
        return leadingEdge(lastCallTime);
      }
      if (maxing) {
        // Handle invocations in a tight loop.
        clearTimeout(timerId);
        timerId = setTimeout(timerExpired, wait);
        return invokeFunc(lastCallTime);
      }
    }
    if (timerId === undefined) {
      timerId = setTimeout(timerExpired, wait);
    }
    return result;
  }
  debounced.cancel = cancel;
  debounced.flush = flush;
  return debounced;
}

/* harmony default export */ __webpack_exports__["default"] = (debounce);


/***/ }),

/***/ "./node_modules/lodash-es/isObject.js":
/*!********************************************!*\
  !*** ./node_modules/lodash-es/isObject.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return value != null && (type == 'object' || type == 'function');
}

/* harmony default export */ __webpack_exports__["default"] = (isObject);


/***/ }),

/***/ "./node_modules/lodash-es/isObjectLike.js":
/*!************************************************!*\
  !*** ./node_modules/lodash-es/isObjectLike.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of "object".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return value != null && typeof value == 'object';
}

/* harmony default export */ __webpack_exports__["default"] = (isObjectLike);


/***/ }),

/***/ "./node_modules/lodash-es/isSymbol.js":
/*!********************************************!*\
  !*** ./node_modules/lodash-es/isSymbol.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _baseGetTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_baseGetTag.js */ "./node_modules/lodash-es/_baseGetTag.js");
/* harmony import */ var _isObjectLike_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./isObjectLike.js */ "./node_modules/lodash-es/isObjectLike.js");



/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (Object(_isObjectLike_js__WEBPACK_IMPORTED_MODULE_1__["default"])(value) && Object(_baseGetTag_js__WEBPACK_IMPORTED_MODULE_0__["default"])(value) == symbolTag);
}

/* harmony default export */ __webpack_exports__["default"] = (isSymbol);


/***/ }),

/***/ "./node_modules/lodash-es/now.js":
/*!***************************************!*\
  !*** ./node_modules/lodash-es/now.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _root_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_root.js */ "./node_modules/lodash-es/_root.js");


/**
 * Gets the timestamp of the number of milliseconds that have elapsed since
 * the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Date
 * @returns {number} Returns the timestamp.
 * @example
 *
 * _.defer(function(stamp) {
 *   console.log(_.now() - stamp);
 * }, _.now());
 * // => Logs the number of milliseconds it took for the deferred invocation.
 */
var now = function() {
  return _root_js__WEBPACK_IMPORTED_MODULE_0__["default"].Date.now();
};

/* harmony default export */ __webpack_exports__["default"] = (now);


/***/ }),

/***/ "./node_modules/lodash-es/toNumber.js":
/*!********************************************!*\
  !*** ./node_modules/lodash-es/toNumber.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _baseTrim_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_baseTrim.js */ "./node_modules/lodash-es/_baseTrim.js");
/* harmony import */ var _isObject_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./isObject.js */ "./node_modules/lodash-es/isObject.js");
/* harmony import */ var _isSymbol_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./isSymbol.js */ "./node_modules/lodash-es/isSymbol.js");




/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/** Used to detect bad signed hexadecimal string values. */
var reIsBadHex = /^[-+]0x[0-9a-f]+$/i;

/** Used to detect binary string values. */
var reIsBinary = /^0b[01]+$/i;

/** Used to detect octal string values. */
var reIsOctal = /^0o[0-7]+$/i;

/** Built-in method references without a dependency on `root`. */
var freeParseInt = parseInt;

/**
 * Converts `value` to a number.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 * @example
 *
 * _.toNumber(3.2);
 * // => 3.2
 *
 * _.toNumber(Number.MIN_VALUE);
 * // => 5e-324
 *
 * _.toNumber(Infinity);
 * // => Infinity
 *
 * _.toNumber('3.2');
 * // => 3.2
 */
function toNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (Object(_isSymbol_js__WEBPACK_IMPORTED_MODULE_2__["default"])(value)) {
    return NAN;
  }
  if (Object(_isObject_js__WEBPACK_IMPORTED_MODULE_1__["default"])(value)) {
    var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
    value = Object(_isObject_js__WEBPACK_IMPORTED_MODULE_1__["default"])(other) ? (other + '') : other;
  }
  if (typeof value != 'string') {
    return value === 0 ? value : +value;
  }
  value = Object(_baseTrim_js__WEBPACK_IMPORTED_MODULE_0__["default"])(value);
  var isBinary = reIsBinary.test(value);
  return (isBinary || reIsOctal.test(value))
    ? freeParseInt(value.slice(2), isBinary ? 2 : 8)
    : (reIsBadHex.test(value) ? NAN : +value);
}

/* harmony default export */ __webpack_exports__["default"] = (toNumber);


/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./src/Pyz/Yves/ProductSearchWidget/Theme/default/components/molecules/product-search-autocomplete-form/product-search-autocomplete-form.ts":
/*!**************************************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductSearchWidget/Theme/default/components/molecules/product-search-autocomplete-form/product-search-autocomplete-form.ts ***!
  \**************************************************************************************************************************************************/
/*! exports provided: Events, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Events", function() { return Events; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductSearchAutocompleteForm; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var src_ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! src/ShopUi/components/molecules/autocomplete-form/autocomplete-form */ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts");





var Events;

(function (Events) {
  Events["FETCHING"] = "fetching";
  Events["FETCHED"] = "fetched";
  Events["CHANGE"] = "change";
  Events["SET"] = "set";
  Events["UNSET"] = "unset";
})(Events || (Events = {}));

var ProductSearchAutocompleteForm = /*#__PURE__*/function (_AutocompleteForm) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default()(ProductSearchAutocompleteForm, _AutocompleteForm);

  function ProductSearchAutocompleteForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _AutocompleteForm.call.apply(_AutocompleteForm, [this].concat(args)) || this;
    _this.widgetSuggestionsContainer = void 0;
    _this.suggestionItems = void 0;
    _this.lastSelectedItem = void 0;
    _this.quantityInput = void 0;
    return _this;
  }

  var _proto = ProductSearchAutocompleteForm.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.widgetSuggestionsContainer = this.getElementsByClassName(this.jsName + "__suggestions")[0];
    this.quantityInput = document.getElementsByClassName(this.jsName + "__quantity-field")[0];

    _AutocompleteForm.prototype.init.call(this);

    this.plugKeydownEvent();
  };

  _proto.plugKeydownEvent = function plugKeydownEvent() {
    var _this2 = this;

    this.inputElement.addEventListener('keydown', function (event) {
      return _this2.onKeyDown(event);
    });
  };

  _proto.onInput = function onInput() {
    if (this.inputText.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  };

  _proto.showSuggestions = function showSuggestions() {
    this.widgetSuggestionsContainer.classList.remove('is-hidden');
  };

  _proto.hideSuggestions = function hideSuggestions() {
    this.widgetSuggestionsContainer.classList.add('is-hidden');
  };

  _proto.mapItemEvents = function mapItemEvents() {
    var self = this;
    var items = Array.from(this.widgetSuggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(function (item) {
      item.addEventListener('click', function (event) {
        return self.onItemClick(event);
      });
    });
  };

  _proto.onKeyDown = function onKeyDown(event) {
    if (!this.suggestionItems && this.inputText.length < this.minLetters) {
      return;
    }

    switch (event.key) {
      case 'ArrowUp':
        this.onKeyDownArrowUp();
        break;

      case 'ArrowDown':
        this.onKeyDownArrowDown();
        break;

      case 'Enter':
        this.onKeyDownEnter();
        break;
    }
  };

  _proto.onKeyDownArrowUp = function onKeyDownArrowUp() {
    var lastSelectedItemIndex = this.suggestionItems.indexOf(this.lastSelectedItem);
    var elementIndex = lastSelectedItemIndex - 1;
    var lastSuggestionItemIndex = this.suggestionItems.length - 1;
    var item = this.suggestionItems[elementIndex < 0 ? lastSuggestionItemIndex : elementIndex];
    this.changeSelectedItem(item);
  };

  _proto.onKeyDownArrowDown = function onKeyDownArrowDown() {
    var lastSelectedItemIndex = this.suggestionItems.indexOf(this.lastSelectedItem);
    var elementIndex = lastSelectedItemIndex + 1;
    var lastSuggestionItemIndex = this.suggestionItems.length - 1;
    var item = this.suggestionItems[elementIndex > lastSuggestionItemIndex ? 0 : elementIndex];
    this.changeSelectedItem(item);
  };

  _proto.onKeyDownEnter = function onKeyDownEnter() {
    this.lastSelectedItem.click();
  };

  _proto.changeSelectedItem = function changeSelectedItem(item) {
    this.lastSelectedItem.classList.remove(this.selectedInputClass);
    item.classList.add(this.selectedInputClass);
    this.lastSelectedItem = item;
  };

  _proto.loadSuggestions = /*#__PURE__*/function () {
    var _loadSuggestions = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              this.dispatchCustomEvent(Events.FETCHING);
              this.showSuggestions();
              this.ajaxProvider.queryParams.set(this.queryParamName, this.inputText);
              _context.next = 5;
              return this.ajaxProvider.fetch();

            case 5:
              this.suggestionItems = Array.from(this.widgetSuggestionsContainer.getElementsByClassName(this.itemClassName));
              this.lastSelectedItem = this.suggestionItems[0];
              this.mapItemEvents();

            case 8:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function loadSuggestions() {
      return _loadSuggestions.apply(this, arguments);
    }

    return loadSuggestions;
  }();

  _proto.setInputs = function setInputs(data, text) {
    this.inputText = text;
    this.inputValue = data;
    this.dispatchCustomEvent(Events.SET, {
      text: this.inputText,
      value: this.inputValue
    });

    if (this.quantityInput) {
      this.quantityInput.focus();
    }
  };

  _proto.onBlur = function onBlur() {
    this.hideSuggestions();
  };

  _proto.onFocus = function onFocus() {
    if (this.inputText.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default()(ProductSearchAutocompleteForm, [{
    key: "inputText",
    get: function get() {
      return this.inputElement.value.trim();
    },
    set: function set(value) {
      this.inputElement.value = value;
    }
  }, {
    key: "selectedInputClass",
    get: function get() {
      return (this.itemClassName + "--selected").substr(1);
    }
  }, {
    key: "inputValue",
    get: function get() {
      return this.hiddenInputElement.value;
    },
    set: function set(value) {
      this.hiddenInputElement.value = value;
    }
  }]);

  return ProductSearchAutocompleteForm;
}(src_ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_4__["default"]);



/***/ }),

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts":
/*!*******************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AutocompleteForm; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");







var AutocompleteForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default()(AutocompleteForm, _Component);

  function AutocompleteForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.ajaxProvider = void 0;
    _this.inputElement = void 0;
    _this.hiddenInputElement = void 0;
    _this.suggestionsContainer = void 0;
    _this.cleanButton = void 0;
    _this.overlay = void 0;
    return _this;
  }

  var _proto = AutocompleteForm.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.suggestionsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.inputElement = this.getElementsByClassName(this.jsName + "__input")[0];
    this.hiddenInputElement = this.getElementsByClassName(this.jsName + "__input-hidden")[0];
    this.cleanButton = this.getElementsByClassName(this.jsName + "__clean-button")[0];
    this.overlay = document.getElementsByClassName(this.overlayBlockClassName)[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.inputElement.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onInput();
    }, this.debounceDelay));
    this.inputElement.addEventListener('blur', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onBlur();
    }, this.debounceDelay));
    this.inputElement.addEventListener('focus', function () {
      return _this2.onFocus();
    });

    if (this.showCleanButton) {
      this.cleanButton.addEventListener('click', function () {
        return _this2.onCleanButtonClick();
      });
    }
  };

  _proto.onCleanButtonClick = function onCleanButtonClick() {
    this.cleanFields();
  };

  _proto.onBlur = function onBlur() {
    this.overlay.hideOverlay('no-agent-user', 'no-agent-user');
    this.hideSuggestions();
  };

  _proto.onFocus = function onFocus() {
    this.overlay.showOverlay('no-agent-user', 'no-agent-user');

    if (this.inputValue.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  };

  _proto.onInput = function onInput() {
    if (this.inputValue.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  };

  _proto.showSuggestions = function showSuggestions() {
    this.suggestionsContainer.classList.remove('is-hidden');
  };

  _proto.hideSuggestions = function hideSuggestions() {
    this.suggestionsContainer.classList.add('is-hidden');
  };

  _proto.loadSuggestions = /*#__PURE__*/function () {
    var _loadSuggestions = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              this.showSuggestions();
              this.ajaxProvider.queryParams.set(this.queryParamName, this.inputValue);
              _context.next = 4;
              return this.ajaxProvider.fetch();

            case 4:
              this.mapItemEvents();

            case 5:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function loadSuggestions() {
      return _loadSuggestions.apply(this, arguments);
    }

    return loadSuggestions;
  }();

  _proto.mapItemEvents = function mapItemEvents() {
    var self = this;
    var items = Array.from(this.suggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(function (item) {
      item.addEventListener('click', function (event) {
        return self.onItemClick(event);
      });
    });
  };

  _proto.onItemClick = function onItemClick(event) {
    var dataTarget = event.target;
    var data = dataTarget.getAttribute(this.valueDataAttribute);
    var text = dataTarget.textContent.trim();
    this.setInputs(data, text);
  };

  _proto.setInputs = function setInputs(data, text) {
    this.hiddenInputElement.value = data;
    this.inputElement.value = text;
  };

  _proto.cleanFields = function cleanFields() {
    this.setInputs('', '');
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default()(AutocompleteForm, [{
    key: "minLetters",
    get: function get() {
      return Number(this.getAttribute('min-letters'));
    }
  }, {
    key: "inputValue",
    get: function get() {
      return this.inputElement.value.trim();
    }
  }, {
    key: "queryParamName",
    get: function get() {
      return this.getAttribute('query-param-name');
    }
  }, {
    key: "valueDataAttribute",
    get: function get() {
      return this.getAttribute('value-data-attribute');
    }
  }, {
    key: "itemClassName",
    get: function get() {
      return this.getAttribute('item-class-name');
    }
  }, {
    key: "debounceDelay",
    get: function get() {
      return Number(this.getAttribute('debounce-delay'));
    }
  }, {
    key: "showCleanButton",
    get: function get() {
      return this.hasAttribute('show-clean-button');
    }
  }, {
    key: "overlayBlockClassName",
    get: function get() {
      return this.getAttribute('overlay-block-class-name');
    }
  }]);

  return AutocompleteForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19TeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9fYmFzZUdldFRhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19iYXNlVHJpbS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19mcmVlR2xvYmFsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX2dldFJhd1RhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19vYmplY3RUb1N0cmluZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19yb290LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX3RyaW1tZWRFbmRJbmRleC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL2RlYm91bmNlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvaXNPYmplY3QuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc09iamVjdExpa2UuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc1N5bWJvbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL25vdy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1Byb2R1Y3RTZWFyY2hXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS9wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS50cyIsIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYXV0b2NvbXBsZXRlLWZvcm0vYXV0b2NvbXBsZXRlLWZvcm0udHMiXSwibmFtZXMiOlsiRXZlbnRzIiwiUHJvZHVjdFNlYXJjaEF1dG9jb21wbGV0ZUZvcm0iLCJ3aWRnZXRTdWdnZXN0aW9uc0NvbnRhaW5lciIsInN1Z2dlc3Rpb25JdGVtcyIsImxhc3RTZWxlY3RlZEl0ZW0iLCJxdWFudGl0eUlucHV0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwiZG9jdW1lbnQiLCJwbHVnS2V5ZG93bkV2ZW50IiwiaW5wdXRFbGVtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25LZXlEb3duIiwib25JbnB1dCIsImlucHV0VGV4dCIsImxlbmd0aCIsIm1pbkxldHRlcnMiLCJsb2FkU3VnZ2VzdGlvbnMiLCJoaWRlU3VnZ2VzdGlvbnMiLCJzaG93U3VnZ2VzdGlvbnMiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJtYXBJdGVtRXZlbnRzIiwic2VsZiIsIml0ZW1zIiwiQXJyYXkiLCJmcm9tIiwiaXRlbUNsYXNzTmFtZSIsImZvckVhY2giLCJpdGVtIiwib25JdGVtQ2xpY2siLCJrZXkiLCJvbktleURvd25BcnJvd1VwIiwib25LZXlEb3duQXJyb3dEb3duIiwib25LZXlEb3duRW50ZXIiLCJsYXN0U2VsZWN0ZWRJdGVtSW5kZXgiLCJpbmRleE9mIiwiZWxlbWVudEluZGV4IiwibGFzdFN1Z2dlc3Rpb25JdGVtSW5kZXgiLCJjaGFuZ2VTZWxlY3RlZEl0ZW0iLCJjbGljayIsInNlbGVjdGVkSW5wdXRDbGFzcyIsImRpc3BhdGNoQ3VzdG9tRXZlbnQiLCJGRVRDSElORyIsImFqYXhQcm92aWRlciIsInF1ZXJ5UGFyYW1zIiwic2V0IiwicXVlcnlQYXJhbU5hbWUiLCJmZXRjaCIsInNldElucHV0cyIsImRhdGEiLCJ0ZXh0IiwiaW5wdXRWYWx1ZSIsIlNFVCIsInZhbHVlIiwiZm9jdXMiLCJvbkJsdXIiLCJvbkZvY3VzIiwidHJpbSIsInN1YnN0ciIsImhpZGRlbklucHV0RWxlbWVudCIsIkF1dG9jb21wbGV0ZUZvcm0iLCJzdWdnZXN0aW9uc0NvbnRhaW5lciIsImNsZWFuQnV0dG9uIiwib3ZlcmxheSIsIm92ZXJsYXlCbG9ja0NsYXNzTmFtZSIsIm1hcEV2ZW50cyIsImRlYm91bmNlIiwiZGVib3VuY2VEZWxheSIsInNob3dDbGVhbkJ1dHRvbiIsIm9uQ2xlYW5CdXR0b25DbGljayIsImNsZWFuRmllbGRzIiwiaGlkZU92ZXJsYXkiLCJzaG93T3ZlcmxheSIsImRhdGFUYXJnZXQiLCJ0YXJnZXQiLCJnZXRBdHRyaWJ1dGUiLCJ2YWx1ZURhdGFBdHRyaWJ1dGUiLCJ0ZXh0Q29udGVudCIsIk51bWJlciIsImhhc0F0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBOEI7O0FBRTlCO0FBQ0EsYUFBYSxnREFBSTs7QUFFRixxRUFBTSxFQUFDOzs7Ozs7Ozs7Ozs7O0FDTHRCO0FBQUE7QUFBQTtBQUFBO0FBQWtDO0FBQ007QUFDVTs7QUFFbEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EscUJBQXFCLGtEQUFNLEdBQUcsa0RBQU07O0FBRXBDO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsV0FBVyxFQUFFO0FBQ2IsYUFBYSxPQUFPO0FBQ3BCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE1BQU0sNkRBQVM7QUFDZixNQUFNLGtFQUFjO0FBQ3BCOztBQUVlLHlFQUFVLEVBQUM7Ozs7Ozs7Ozs7Ozs7QUMzQjFCO0FBQUE7QUFBb0Q7O0FBRXBEO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxXQUFXLE9BQU87QUFDbEIsYUFBYSxPQUFPO0FBQ3BCO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQixtRUFBZTtB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ZUFBc0M7QUFDbEMsYUFBT0csTUFBTSxDQUFDLEtBQUtILFlBQUwsQ0FBa0IsZ0JBQWxCLENBQUQsQ0FBYjtBQUNIOzs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtJLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBOEM7QUFDMUMsYUFBTyxLQUFLSixZQUFMLENBQWtCLDBCQUFsQixDQUFQO0FBQ0g7Ozs7RUFySXlDSywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgcm9vdCBmcm9tICcuL19yb290LmpzJztcblxuLyoqIEJ1aWx0LWluIHZhbHVlIHJlZmVyZW5jZXMuICovXG52YXIgU3ltYm9sID0gcm9vdC5TeW1ib2w7XG5cbmV4cG9ydCBkZWZhdWx0IFN5bWJvbDtcbiIsImltcG9ydCBTeW1ib2wgZnJvbSAnLi9fU3ltYm9sLmpzJztcbmltcG9ydCBnZXRSYXdUYWcgZnJvbSAnLi9fZ2V0UmF3VGFnLmpzJztcbmltcG9ydCBvYmplY3RUb1N0cmluZyBmcm9tICcuL19vYmplY3RUb1N0cmluZy5qcyc7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBudWxsVGFnID0gJ1tvYmplY3QgTnVsbF0nLFxuICAgIHVuZGVmaW5lZFRhZyA9ICdbb2JqZWN0IFVuZGVmaW5lZF0nO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1Ub1N0cmluZ1RhZyA9IFN5bWJvbCA/IFN5bWJvbC50b1N0cmluZ1RhZyA6IHVuZGVmaW5lZDtcblxuLyoqXG4gKiBUaGUgYmFzZSBpbXBsZW1lbnRhdGlvbiBvZiBgZ2V0VGFnYCB3aXRob3V0IGZhbGxiYWNrcyBmb3IgYnVnZ3kgZW52aXJvbm1lbnRzLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBxdWVyeS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGJhc2VHZXRUYWcodmFsdWUpIHtcbiAgaWYgKHZhbHVlID09IG51bGwpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IHVuZGVmaW5lZCA/IHVuZGVmaW5lZFRhZyA6IG51bGxUYWc7XG4gIH1cbiAgcmV0dXJuIChzeW1Ub1N0cmluZ1RhZyAmJiBzeW1Ub1N0cmluZ1RhZyBpbiBPYmplY3QodmFsdWUpKVxuICAgID8gZ2V0UmF3VGFnKHZhbHVlKVxuICAgIDogb2JqZWN0VG9TdHJpbmcodmFsdWUpO1xufVxuXG5leHBvcnQgZGVmYXVsdCBiYXNlR2V0VGFnO1xuIiwiaW1wb3J0IHRyaW1tZWRFbmRJbmRleCBmcm9tICcuL190cmltbWVkRW5kSW5kZXguanMnO1xuXG4vKiogVXNlZCB0byBtYXRjaCBsZWFkaW5nIHdoaXRlc3BhY2UuICovXG52YXIgcmVUcmltU3RhcnQgPSAvXlxccysvO1xuXG4vKipcbiAqIFRoZSBiYXNlIGltcGxlbWVudGF0aW9uIG9mIGBfLnRyaW1gLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gdHJpbS5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIHRyaW1tZWQgc3RyaW5nLlxuICovXG5mdW5jdGlvbiBiYXNlVHJpbShzdHJpbmcpIHtcbiAgcmV0dXJuIHN0cmluZ1xuICAgID8gc3RyaW5nLnNsaWNlKDAsIHRyaW1tZWRFbmRJbmRleChzdHJpbmcpICsgMSkucmVwbGFjZShyZVRyaW1TdGFydCwgJycpXG4gICAgOiBzdHJpbmc7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGJhc2VUcmltO1xuIiwiLyoqIERldGVjdCBmcmVlIHZhcmlhYmxlIGBnbG9iYWxgIGZyb20gTm9kZS5qcy4gKi9cbnZhciBmcmVlR2xvYmFsID0gdHlwZW9mIGdsb2JhbCA9PSAnb2JqZWN0JyAmJiBnbG9iYWwgJiYgZ2xvYmFsLk9iamVjdCA9PT0gT2JqZWN0ICYmIGdsb2JhbDtcblxuZXhwb3J0IGRlZmF1bHQgZnJlZUdsb2JhbDtcbiIsImltcG9ydCBTeW1ib2wgZnJvbSAnLi9fU3ltYm9sLmpzJztcblxuLyoqIFVzZWQgZm9yIGJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzLiAqL1xudmFyIG9iamVjdFByb3RvID0gT2JqZWN0LnByb3RvdHlwZTtcblxuLyoqIFVzZWQgdG8gY2hlY2sgb2JqZWN0cyBmb3Igb3duIHByb3BlcnRpZXMuICovXG52YXIgaGFzT3duUHJvcGVydHkgPSBvYmplY3RQcm90by5oYXNPd25Qcm9wZXJ0eTtcblxuLyoqXG4gKiBVc2VkIHRvIHJlc29sdmUgdGhlXG4gKiBbYHRvU3RyaW5nVGFnYF0oaHR0cDovL2VjbWEtaW50ZXJuYXRpb25hbC5vcmcvZWNtYS0yNjIvNy4wLyNzZWMtb2JqZWN0LnByb3RvdHlwZS50b3N0cmluZylcbiAqIG9mIHZhbHVlcy5cbiAqL1xudmFyIG5hdGl2ZU9iamVjdFRvU3RyaW5nID0gb2JqZWN0UHJvdG8udG9TdHJpbmc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIEEgc3BlY2lhbGl6ZWQgdmVyc2lvbiBvZiBgYmFzZUdldFRhZ2Agd2hpY2ggaWdub3JlcyBgU3ltYm9sLnRvU3RyaW5nVGFnYCB2YWx1ZXMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgcmF3IGB0b1N0cmluZ1RhZ2AuXG4gKi9cbmZ1bmN0aW9uIGdldFJhd1RhZyh2YWx1ZSkge1xuICB2YXIgaXNPd24gPSBoYXNPd25Qcm9wZXJ0eS5jYWxsKHZhbHVlLCBzeW1Ub1N0cmluZ1RhZyksXG4gICAgICB0YWcgPSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG5cbiAgdHJ5IHtcbiAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB1bmRlZmluZWQ7XG4gICAgdmFyIHVubWFza2VkID0gdHJ1ZTtcbiAgfSBjYXRjaCAoZSkge31cblxuICB2YXIgcmVzdWx0ID0gbmF0aXZlT2JqZWN0VG9TdHJpbmcuY2FsbCh2YWx1ZSk7XG4gIGlmICh1bm1hc2tlZCkge1xuICAgIGlmIChpc093bikge1xuICAgICAgdmFsdWVbc3ltVG9TdHJpbmdUYWddID0gdGFnO1xuICAgIH0gZWxzZSB7XG4gICAgICBkZWxldGUgdmFsdWVbc3ltVG9TdHJpbmdUYWddO1xuICAgIH1cbiAgfVxuICByZXR1cm4gcmVzdWx0O1xufVxuXG5leHBvcnQgZGVmYXVsdCBnZXRSYXdUYWc7XG4iLCIvKiogVXNlZCBmb3IgYnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMuICovXG52YXIgb2JqZWN0UHJvdG8gPSBPYmplY3QucHJvdG90eXBlO1xuXG4vKipcbiAqIFVzZWQgdG8gcmVzb2x2ZSB0aGVcbiAqIFtgdG9TdHJpbmdUYWdgXShodHRwOi8vZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1vYmplY3QucHJvdG90eXBlLnRvc3RyaW5nKVxuICogb2YgdmFsdWVzLlxuICovXG52YXIgbmF0aXZlT2JqZWN0VG9TdHJpbmcgPSBvYmplY3RQcm90by50b1N0cmluZztcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgc3RyaW5nIHVzaW5nIGBPYmplY3QucHJvdG90eXBlLnRvU3RyaW5nYC5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY29udmVydC5cbiAqIEByZXR1cm5zIHtzdHJpbmd9IFJldHVybnMgdGhlIGNvbnZlcnRlZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIG9iamVjdFRvU3RyaW5nKHZhbHVlKSB7XG4gIHJldHVybiBuYXRpdmVPYmplY3RUb1N0cmluZy5jYWxsKHZhbHVlKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgb2JqZWN0VG9TdHJpbmc7XG4iLCJpbXBvcnQgZnJlZUdsb2JhbCBmcm9tICcuL19mcmVlR2xvYmFsLmpzJztcblxuLyoqIERldGVjdCBmcmVlIHZhcmlhYmxlIGBzZWxmYC4gKi9cbnZhciBmcmVlU2VsZiA9IHR5cGVvZiBzZWxmID09ICdvYmplY3QnICYmIHNlbGYgJiYgc2VsZi5PYmplY3QgPT09IE9iamVjdCAmJiBzZWxmO1xuXG4vKiogVXNlZCBhcyBhIHJlZmVyZW5jZSB0byB0aGUgZ2xvYmFsIG9iamVjdC4gKi9cbnZhciByb290ID0gZnJlZUdsb2JhbCB8fCBmcmVlU2VsZiB8fCBGdW5jdGlvbigncmV0dXJuIHRoaXMnKSgpO1xuXG5leHBvcnQgZGVmYXVsdCByb290O1xuIiwiLyoqIFVzZWQgdG8gbWF0Y2ggYSBzaW5nbGUgd2hpdGVzcGFjZSBjaGFyYWN0ZXIuICovXG52YXIgcmVXaGl0ZXNwYWNlID0gL1xccy87XG5cbi8qKlxuICogVXNlZCBieSBgXy50cmltYCBhbmQgYF8udHJpbUVuZGAgdG8gZ2V0IHRoZSBpbmRleCBvZiB0aGUgbGFzdCBub24td2hpdGVzcGFjZVxuICogY2hhcmFjdGVyIG9mIGBzdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0ge3N0cmluZ30gc3RyaW5nIFRoZSBzdHJpbmcgdG8gaW5zcGVjdC5cbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlIGNoYXJhY3Rlci5cbiAqL1xuZnVuY3Rpb24gdHJpbW1lZEVuZEluZGV4KHN0cmluZykge1xuICB2YXIgaW5kZXggPSBzdHJpbmcubGVuZ3RoO1xuXG4gIHdoaWxlIChpbmRleC0tICYmIHJlV2hpdGVzcGFjZS50ZXN0KHN0cmluZy5jaGFyQXQoaW5kZXgpKSkge31cbiAgcmV0dXJuIGluZGV4O1xufVxuXG5leHBvcnQgZGVmYXVsdCB0cmltbWVkRW5kSW5kZXg7XG4iLCJpbXBvcnQgaXNPYmplY3QgZnJvbSAnLi9pc09iamVjdC5qcyc7XG5pbXBvcnQgbm93IGZyb20gJy4vbm93LmpzJztcbmltcG9ydCB0b051bWJlciBmcm9tICcuL3RvTnVtYmVyLmpzJztcblxuLyoqIEVycm9yIG1lc3NhZ2UgY29uc3RhbnRzLiAqL1xudmFyIEZVTkNfRVJST1JfVEVYVCA9ICdFeHBlY3RlZCBhIGZ1bmN0aW9uJztcblxuLyogQnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMgZm9yIHRob3NlIHdpdGggdGhlIHNhbWUgbmFtZSBhcyBvdGhlciBgbG9kYXNoYCBtZXRob2RzLiAqL1xudmFyIG5hdGl2ZU1heCA9IE1hdGgubWF4LFxuICAgIG5hdGl2ZU1pbiA9IE1hdGgubWluO1xuXG4vKipcbiAqIENyZWF0ZXMgYSBkZWJvdW5jZWQgZnVuY3Rpb24gdGhhdCBkZWxheXMgaW52b2tpbmcgYGZ1bmNgIHVudGlsIGFmdGVyIGB3YWl0YFxuICogbWlsbGlzZWNvbmRzIGhhdmUgZWxhcHNlZCBzaW5jZSB0aGUgbGFzdCB0aW1lIHRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gd2FzXG4gKiBpbnZva2VkLiBUaGUgZGVib3VuY2VkIGZ1bmN0aW9uIGNvbWVzIHdpdGggYSBgY2FuY2VsYCBtZXRob2QgdG8gY2FuY2VsXG4gKiBkZWxheWVkIGBmdW5jYCBpbnZvY2F0aW9ucyBhbmQgYSBgZmx1c2hgIG1ldGhvZCB0byBpbW1lZGlhdGVseSBpbnZva2UgdGhlbS5cbiAqIFByb3ZpZGUgYG9wdGlvbnNgIHRvIGluZGljYXRlIHdoZXRoZXIgYGZ1bmNgIHNob3VsZCBiZSBpbnZva2VkIG9uIHRoZVxuICogbGVhZGluZyBhbmQvb3IgdHJhaWxpbmcgZWRnZSBvZiB0aGUgYHdhaXRgIHRpbWVvdXQuIFRoZSBgZnVuY2AgaXMgaW52b2tlZFxuICogd2l0aCB0aGUgbGFzdCBhcmd1bWVudHMgcHJvdmlkZWQgdG8gdGhlIGRlYm91bmNlZCBmdW5jdGlvbi4gU3Vic2VxdWVudFxuICogY2FsbHMgdG8gdGhlIGRlYm91bmNlZCBmdW5jdGlvbiByZXR1cm4gdGhlIHJlc3VsdCBvZiB0aGUgbGFzdCBgZnVuY2BcbiAqIGludm9jYXRpb24uXG4gKlxuICogKipOb3RlOioqIElmIGBsZWFkaW5nYCBhbmQgYHRyYWlsaW5nYCBvcHRpb25zIGFyZSBgdHJ1ZWAsIGBmdW5jYCBpc1xuICogaW52b2tlZCBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dCBvbmx5IGlmIHRoZSBkZWJvdW5jZWQgZnVuY3Rpb25cbiAqIGlzIGludm9rZWQgbW9yZSB0aGFuIG9uY2UgZHVyaW5nIHRoZSBgd2FpdGAgdGltZW91dC5cbiAqXG4gKiBJZiBgd2FpdGAgaXMgYDBgIGFuZCBgbGVhZGluZ2AgaXMgYGZhbHNlYCwgYGZ1bmNgIGludm9jYXRpb24gaXMgZGVmZXJyZWRcbiAqIHVudGlsIHRvIHRoZSBuZXh0IHRpY2ssIHNpbWlsYXIgdG8gYHNldFRpbWVvdXRgIHdpdGggYSB0aW1lb3V0IG9mIGAwYC5cbiAqXG4gKiBTZWUgW0RhdmlkIENvcmJhY2hvJ3MgYXJ0aWNsZV0oaHR0cHM6Ly9jc3MtdHJpY2tzLmNvbS9kZWJvdW5jaW5nLXRocm90dGxpbmctZXhwbGFpbmVkLWV4YW1wbGVzLylcbiAqIGZvciBkZXRhaWxzIG92ZXIgdGhlIGRpZmZlcmVuY2VzIGJldHdlZW4gYF8uZGVib3VuY2VgIGFuZCBgXy50aHJvdHRsZWAuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAwLjEuMFxuICogQGNhdGVnb3J5IEZ1bmN0aW9uXG4gKiBAcGFyYW0ge0Z1bmN0aW9ufSBmdW5jIFRoZSBmdW5jdGlvbiB0byBkZWJvdW5jZS5cbiAqIEBwYXJhbSB7bnVtYmVyfSBbd2FpdD0wXSBUaGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0byBkZWxheS5cbiAqIEBwYXJhbSB7T2JqZWN0fSBbb3B0aW9ucz17fV0gVGhlIG9wdGlvbnMgb2JqZWN0LlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy5sZWFkaW5nPWZhbHNlXVxuICogIFNwZWNpZnkgaW52b2tpbmcgb24gdGhlIGxlYWRpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEBwYXJhbSB7bnVtYmVyfSBbb3B0aW9ucy5tYXhXYWl0XVxuICogIFRoZSBtYXhpbXVtIHRpbWUgYGZ1bmNgIGlzIGFsbG93ZWQgdG8gYmUgZGVsYXllZCBiZWZvcmUgaXQncyBpbnZva2VkLlxuICogQHBhcmFtIHtib29sZWFufSBbb3B0aW9ucy50cmFpbGluZz10cnVlXVxuICogIFNwZWNpZnkgaW52b2tpbmcgb24gdGhlIHRyYWlsaW5nIGVkZ2Ugb2YgdGhlIHRpbWVvdXQuXG4gKiBAcmV0dXJucyB7RnVuY3Rpb259IFJldHVybnMgdGhlIG5ldyBkZWJvdW5jZWQgZnVuY3Rpb24uXG4gKiBAZXhhbXBsZVxuICpcbiAqIC8vIEF2b2lkIGNvc3RseSBjYWxjdWxhdGlvbnMgd2hpbGUgdGhlIHdpbmRvdyBzaXplIGlzIGluIGZsdXguXG4gKiBqUXVlcnkod2luZG93KS5vbigncmVzaXplJywgXy5kZWJvdW5jZShjYWxjdWxhdGVMYXlvdXQsIDE1MCkpO1xuICpcbiAqIC8vIEludm9rZSBgc2VuZE1haWxgIHdoZW4gY2xpY2tlZCwgZGVib3VuY2luZyBzdWJzZXF1ZW50IGNhbGxzLlxuICogalF1ZXJ5KGVsZW1lbnQpLm9uKCdjbGljaycsIF8uZGVib3VuY2Uoc2VuZE1haWwsIDMwMCwge1xuICogICAnbGVhZGluZyc6IHRydWUsXG4gKiAgICd0cmFpbGluZyc6IGZhbHNlXG4gKiB9KSk7XG4gKlxuICogLy8gRW5zdXJlIGBiYXRjaExvZ2AgaXMgaW52b2tlZCBvbmNlIGFmdGVyIDEgc2Vjb25kIG9mIGRlYm91bmNlZCBjYWxscy5cbiAqIHZhciBkZWJvdW5jZWQgPSBfLmRlYm91bmNlKGJhdGNoTG9nLCAyNTAsIHsgJ21heFdhaXQnOiAxMDAwIH0pO1xuICogdmFyIHNvdXJjZSA9IG5ldyBFdmVudFNvdXJjZSgnL3N0cmVhbScpO1xuICogalF1ZXJ5KHNvdXJjZSkub24oJ21lc3NhZ2UnLCBkZWJvdW5jZWQpO1xuICpcbiAqIC8vIENhbmNlbCB0aGUgdHJhaWxpbmcgZGVib3VuY2VkIGludm9jYXRpb24uXG4gKiBqUXVlcnkod2luZG93KS5vbigncG9wc3RhdGUnLCBkZWJvdW5jZWQuY2FuY2VsKTtcbiAqL1xuZnVuY3Rpb24gZGVib3VuY2UoZnVuYywgd2FpdCwgb3B0aW9ucykge1xuICB2YXIgbGFzdEFyZ3MsXG4gICAgICBsYXN0VGhpcyxcbiAgICAgIG1heFdhaXQsXG4gICAgICByZXN1bHQsXG4gICAgICB0aW1lcklkLFxuICAgICAgbGFzdENhbGxUaW1lLFxuICAgICAgbGFzdEludm9rZVRpbWUgPSAwLFxuICAgICAgbGVhZGluZyA9IGZhbHNlLFxuICAgICAgbWF4aW5nID0gZmFsc2UsXG4gICAgICB0cmFpbGluZyA9IHRydWU7XG5cbiAgaWYgKHR5cGVvZiBmdW5jICE9ICdmdW5jdGlvbicpIHtcbiAgICB0aHJvdyBuZXcgVHlwZUVycm9yKEZVTkNfRVJST1JfVEVYVCk7XG4gIH1cbiAgd2FpdCA9IHRvTnVtYmVyKHdhaXQpIHx8IDA7XG4gIGlmIChpc09iamVjdChvcHRpb25zKSkge1xuICAgIGxlYWRpbmcgPSAhIW9wdGlvbnMubGVhZGluZztcbiAgICBtYXhpbmcgPSAnbWF4V2FpdCcgaW4gb3B0aW9ucztcbiAgICBtYXhXYWl0ID0gbWF4aW5nID8gbmF0aXZlTWF4KHRvTnVtYmVyKG9wdGlvbnMubWF4V2FpdCkgfHwgMCwgd2FpdCkgOiBtYXhXYWl0O1xuICAgIHRyYWlsaW5nID0gJ3RyYWlsaW5nJyBpbiBvcHRpb25zID8gISFvcHRpb25zLnRyYWlsaW5nIDogdHJhaWxpbmc7XG4gIH1cblxuICBmdW5jdGlvbiBpbnZva2VGdW5jKHRpbWUpIHtcbiAgICB2YXIgYXJncyA9IGxhc3RBcmdzLFxuICAgICAgICB0aGlzQXJnID0gbGFzdFRoaXM7XG5cbiAgICBsYXN0QXJncyA9IGxhc3RUaGlzID0gdW5kZWZpbmVkO1xuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICByZXN1bHQgPSBmdW5jLmFwcGx5KHRoaXNBcmcsIGFyZ3MpO1xuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cblxuICBmdW5jdGlvbiBsZWFkaW5nRWRnZSh0aW1lKSB7XG4gICAgLy8gUmVzZXQgYW55IGBtYXhXYWl0YCB0aW1lci5cbiAgICBsYXN0SW52b2tlVGltZSA9IHRpbWU7XG4gICAgLy8gU3RhcnQgdGhlIHRpbWVyIGZvciB0aGUgdHJhaWxpbmcgZWRnZS5cbiAgICB0aW1lcklkID0gc2V0VGltZW91dCh0aW1lckV4cGlyZWQsIHdhaXQpO1xuICAgIC8vIEludm9rZSB0aGUgbGVhZGluZyBlZGdlLlxuICAgIHJldHVybiBsZWFkaW5nID8gaW52b2tlRnVuYyh0aW1lKSA6IHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIHJlbWFpbmluZ1dhaXQodGltZSkge1xuICAgIHZhciB0aW1lU2luY2VMYXN0Q2FsbCA9IHRpbWUgLSBsYXN0Q2FsbFRpbWUsXG4gICAgICAgIHRpbWVTaW5jZUxhc3RJbnZva2UgPSB0aW1lIC0gbGFzdEludm9rZVRpbWUsXG4gICAgICAgIHRpbWVXYWl0aW5nID0gd2FpdCAtIHRpbWVTaW5jZUxhc3RDYWxsO1xuXG4gICAgcmV0dXJuIG1heGluZ1xuICAgICAgPyBuYXRpdmVNaW4odGltZVdhaXRpbmcsIG1heFdhaXQgLSB0aW1lU2luY2VMYXN0SW52b2tlKVxuICAgICAgOiB0aW1lV2FpdGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIHNob3VsZEludm9rZSh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZTtcblxuICAgIC8vIEVpdGhlciB0aGlzIGlzIHRoZSBmaXJzdCBjYWxsLCBhY3Rpdml0eSBoYXMgc3RvcHBlZCBhbmQgd2UncmUgYXQgdGhlXG4gICAgLy8gdHJhaWxpbmcgZWRnZSwgdGhlIHN5c3RlbSB0aW1lIGhhcyBnb25lIGJhY2t3YXJkcyBhbmQgd2UncmUgdHJlYXRpbmdcbiAgICAvLyBpdCBhcyB0aGUgdHJhaWxpbmcgZWRnZSwgb3Igd2UndmUgaGl0IHRoZSBgbWF4V2FpdGAgbGltaXQuXG4gICAgcmV0dXJuIChsYXN0Q2FsbFRpbWUgPT09IHVuZGVmaW5lZCB8fCAodGltZVNpbmNlTGFzdENhbGwgPj0gd2FpdCkgfHxcbiAgICAgICh0aW1lU2luY2VMYXN0Q2FsbCA8IDApIHx8IChtYXhpbmcgJiYgdGltZVNpbmNlTGFzdEludm9rZSA+PSBtYXhXYWl0KSk7XG4gIH1cblxuICBmdW5jdGlvbiB0aW1lckV4cGlyZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKTtcbiAgICBpZiAoc2hvdWxkSW52b2tlKHRpbWUpKSB7XG4gICAgICByZXR1cm4gdHJhaWxpbmdFZGdlKHRpbWUpO1xuICAgIH1cbiAgICAvLyBSZXN0YXJ0IHRoZSB0aW1lci5cbiAgICB0aW1lcklkID0gc2V0VGltZW91dCh0aW1lckV4cGlyZWQsIHJlbWFpbmluZ1dhaXQodGltZSkpO1xuICB9XG5cbiAgZnVuY3Rpb24gdHJhaWxpbmdFZGdlKHRpbWUpIHtcbiAgICB0aW1lcklkID0gdW5kZWZpbmVkO1xuXG4gICAgLy8gT25seSBpbnZva2UgaWYgd2UgaGF2ZSBgbGFzdEFyZ3NgIHdoaWNoIG1lYW5zIGBmdW5jYCBoYXMgYmVlblxuICAgIC8vIGRlYm91bmNlZCBhdCBsZWFzdCBvbmNlLlxuICAgIGlmICh0cmFpbGluZyAmJiBsYXN0QXJncykge1xuICAgICAgcmV0dXJuIGludm9rZUZ1bmModGltZSk7XG4gICAgfVxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGNhbmNlbCgpIHtcbiAgICBpZiAodGltZXJJZCAhPT0gdW5kZWZpbmVkKSB7XG4gICAgICBjbGVhclRpbWVvdXQodGltZXJJZCk7XG4gICAgfVxuICAgIGxhc3RJbnZva2VUaW1lID0gMDtcbiAgICBsYXN0QXJncyA9IGxhc3RDYWxsVGltZSA9IGxhc3RUaGlzID0gdGltZXJJZCA9IHVuZGVmaW5lZDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGZsdXNoKCkge1xuICAgIHJldHVybiB0aW1lcklkID09PSB1bmRlZmluZWQgPyByZXN1bHQgOiB0cmFpbGluZ0VkZ2Uobm93KCkpO1xuICB9XG5cbiAgZnVuY3Rpb24gZGVib3VuY2VkKCkge1xuICAgIHZhciB0aW1lID0gbm93KCksXG4gICAgICAgIGlzSW52b2tpbmcgPSBzaG91bGRJbnZva2UodGltZSk7XG5cbiAgICBsYXN0QXJncyA9IGFyZ3VtZW50cztcbiAgICBsYXN0VGhpcyA9IHRoaXM7XG4gICAgbGFzdENhbGxUaW1lID0gdGltZTtcblxuICAgIGlmIChpc0ludm9raW5nKSB7XG4gICAgICBpZiAodGltZXJJZCA9PT0gdW5kZWZpbmVkKSB7XG4gICAgICAgIHJldHVybiBsZWFkaW5nRWRnZShsYXN0Q2FsbFRpbWUpO1xuICAgICAgfVxuICAgICAgaWYgKG1heGluZykge1xuICAgICAgICAvLyBIYW5kbGUgaW52b2NhdGlvbnMgaW4gYSB0aWdodCBsb29wLlxuICAgICAgICBjbGVhclRpbWVvdXQodGltZXJJZCk7XG4gICAgICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgICAgIHJldHVybiBpbnZva2VGdW5jKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgfVxuICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgfVxuICAgIHJldHVybiByZXN1bHQ7XG4gIH1cbiAgZGVib3VuY2VkLmNhbmNlbCA9IGNhbmNlbDtcbiAgZGVib3VuY2VkLmZsdXNoID0gZmx1c2g7XG4gIHJldHVybiBkZWJvdW5jZWQ7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGRlYm91bmNlO1xuIiwiLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyB0aGVcbiAqIFtsYW5ndWFnZSB0eXBlXShodHRwOi8vd3d3LmVjbWEtaW50ZXJuYXRpb25hbC5vcmcvZWNtYS0yNjIvNy4wLyNzZWMtZWNtYXNjcmlwdC1sYW5ndWFnZS10eXBlcylcbiAqIG9mIGBPYmplY3RgLiAoZS5nLiBhcnJheXMsIGZ1bmN0aW9ucywgb2JqZWN0cywgcmVnZXhlcywgYG5ldyBOdW1iZXIoMClgLCBhbmQgYG5ldyBTdHJpbmcoJycpYClcbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBhbiBvYmplY3QsIGVsc2UgYGZhbHNlYC5cbiAqIEBleGFtcGxlXG4gKlxuICogXy5pc09iamVjdCh7fSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChbMSwgMiwgM10pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QoXy5ub29wKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KG51bGwpO1xuICogLy8gPT4gZmFsc2VcbiAqL1xuZnVuY3Rpb24gaXNPYmplY3QodmFsdWUpIHtcbiAgdmFyIHR5cGUgPSB0eXBlb2YgdmFsdWU7XG4gIHJldHVybiB2YWx1ZSAhPSBudWxsICYmICh0eXBlID09ICdvYmplY3QnIHx8IHR5cGUgPT0gJ2Z1bmN0aW9uJyk7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGlzT2JqZWN0O1xuIiwiLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZS4gQSB2YWx1ZSBpcyBvYmplY3QtbGlrZSBpZiBpdCdzIG5vdCBgbnVsbGBcbiAqIGFuZCBoYXMgYSBgdHlwZW9mYCByZXN1bHQgb2YgXCJvYmplY3RcIi5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBvYmplY3QtbGlrZSwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZSh7fSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdExpa2UoWzEsIDIsIDNdKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShfLm5vb3ApO1xuICogLy8gPT4gZmFsc2VcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShudWxsKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzT2JqZWN0TGlrZSh2YWx1ZSkge1xuICByZXR1cm4gdmFsdWUgIT0gbnVsbCAmJiB0eXBlb2YgdmFsdWUgPT0gJ29iamVjdCc7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGlzT2JqZWN0TGlrZTtcbiIsImltcG9ydCBiYXNlR2V0VGFnIGZyb20gJy4vX2Jhc2VHZXRUYWcuanMnO1xuaW1wb3J0IGlzT2JqZWN0TGlrZSBmcm9tICcuL2lzT2JqZWN0TGlrZS5qcyc7XG5cbi8qKiBgT2JqZWN0I3RvU3RyaW5nYCByZXN1bHQgcmVmZXJlbmNlcy4gKi9cbnZhciBzeW1ib2xUYWcgPSAnW29iamVjdCBTeW1ib2xdJztcblxuLyoqXG4gKiBDaGVja3MgaWYgYHZhbHVlYCBpcyBjbGFzc2lmaWVkIGFzIGEgYFN5bWJvbGAgcHJpbWl0aXZlIG9yIG9iamVjdC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDQuMC4wXG4gKiBAY2F0ZWdvcnkgTGFuZ1xuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gY2hlY2suXG4gKiBAcmV0dXJucyB7Ym9vbGVhbn0gUmV0dXJucyBgdHJ1ZWAgaWYgYHZhbHVlYCBpcyBhIHN5bWJvbCwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzU3ltYm9sKFN5bWJvbC5pdGVyYXRvcik7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc1N5bWJvbCgnYWJjJyk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc1N5bWJvbCh2YWx1ZSkge1xuICByZXR1cm4gdHlwZW9mIHZhbHVlID09ICdzeW1ib2wnIHx8XG4gICAgKGlzT2JqZWN0TGlrZSh2YWx1ZSkgJiYgYmFzZUdldFRhZyh2YWx1ZSkgPT0gc3ltYm9sVGFnKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgaXNTeW1ib2w7XG4iLCJpbXBvcnQgcm9vdCBmcm9tICcuL19yb290LmpzJztcblxuLyoqXG4gKiBHZXRzIHRoZSB0aW1lc3RhbXAgb2YgdGhlIG51bWJlciBvZiBtaWxsaXNlY29uZHMgdGhhdCBoYXZlIGVsYXBzZWQgc2luY2VcbiAqIHRoZSBVbml4IGVwb2NoICgxIEphbnVhcnkgMTk3MCAwMDowMDowMCBVVEMpLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgMi40LjBcbiAqIEBjYXRlZ29yeSBEYXRlXG4gKiBAcmV0dXJucyB7bnVtYmVyfSBSZXR1cm5zIHRoZSB0aW1lc3RhbXAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uZGVmZXIoZnVuY3Rpb24oc3RhbXApIHtcbiAqICAgY29uc29sZS5sb2coXy5ub3coKSAtIHN0YW1wKTtcbiAqIH0sIF8ubm93KCkpO1xuICogLy8gPT4gTG9ncyB0aGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyBpdCB0b29rIGZvciB0aGUgZGVmZXJyZWQgaW52b2NhdGlvbi5cbiAqL1xudmFyIG5vdyA9IGZ1bmN0aW9uKCkge1xuICByZXR1cm4gcm9vdC5EYXRlLm5vdygpO1xufTtcblxuZXhwb3J0IGRlZmF1bHQgbm93O1xuIiwiaW1wb3J0IGJhc2VUcmltIGZyb20gJy4vX2Jhc2VUcmltLmpzJztcbmltcG9ydCBpc09iamVjdCBmcm9tICcuL2lzT2JqZWN0LmpzJztcbmltcG9ydCBpc1N5bWJvbCBmcm9tICcuL2lzU3ltYm9sLmpzJztcblxuLyoqIFVzZWQgYXMgcmVmZXJlbmNlcyBmb3IgdmFyaW91cyBgTnVtYmVyYCBjb25zdGFudHMuICovXG52YXIgTkFOID0gMCAvIDA7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiYWQgc2lnbmVkIGhleGFkZWNpbWFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JhZEhleCA9IC9eWy0rXTB4WzAtOWEtZl0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3QgYmluYXJ5IHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc0JpbmFyeSA9IC9eMGJbMDFdKyQvaTtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IG9jdGFsIHN0cmluZyB2YWx1ZXMuICovXG52YXIgcmVJc09jdGFsID0gL14wb1swLTddKyQvaTtcblxuLyoqIEJ1aWx0LWluIG1ldGhvZCByZWZlcmVuY2VzIHdpdGhvdXQgYSBkZXBlbmRlbmN5IG9uIGByb290YC4gKi9cbnZhciBmcmVlUGFyc2VJbnQgPSBwYXJzZUludDtcblxuLyoqXG4gKiBDb252ZXJ0cyBgdmFsdWVgIHRvIGEgbnVtYmVyLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBwcm9jZXNzLlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgbnVtYmVyLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLnRvTnVtYmVyKDMuMik7XG4gKiAvLyA9PiAzLjJcbiAqXG4gKiBfLnRvTnVtYmVyKE51bWJlci5NSU5fVkFMVUUpO1xuICogLy8gPT4gNWUtMzI0XG4gKlxuICogXy50b051bWJlcihJbmZpbml0eSk7XG4gKiAvLyA9PiBJbmZpbml0eVxuICpcbiAqIF8udG9OdW1iZXIoJzMuMicpO1xuICogLy8gPT4gMy4yXG4gKi9cbmZ1bmN0aW9uIHRvTnVtYmVyKHZhbHVlKSB7XG4gIGlmICh0eXBlb2YgdmFsdWUgPT0gJ251bWJlcicpIHtcbiAgICByZXR1cm4gdmFsdWU7XG4gIH1cbiAgaWYgKGlzU3ltYm9sKHZhbHVlKSkge1xuICAgIHJldHVybiBOQU47XG4gIH1cbiAgaWYgKGlzT2JqZWN0KHZhbHVlKSkge1xuICAgIHZhciBvdGhlciA9IHR5cGVvZiB2YWx1ZS52YWx1ZU9mID09ICdmdW5jdGlvbicgPyB2YWx1ZS52YWx1ZU9mKCkgOiB2YWx1ZTtcbiAgICB2YWx1ZSA9IGlzT2JqZWN0KG90aGVyKSA/IChvdGhlciArICcnKSA6IG90aGVyO1xuICB9XG4gIGlmICh0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIHtcbiAgICByZXR1cm4gdmFsdWUgPT09IDAgPyB2YWx1ZSA6ICt2YWx1ZTtcbiAgfVxuICB2YWx1ZSA9IGJhc2VUcmltKHZhbHVlKTtcbiAgdmFyIGlzQmluYXJ5ID0gcmVJc0JpbmFyeS50ZXN0KHZhbHVlKTtcbiAgcmV0dXJuIChpc0JpbmFyeSB8fCByZUlzT2N0YWwudGVzdCh2YWx1ZSkpXG4gICAgPyBmcmVlUGFyc2VJbnQodmFsdWUuc2xpY2UoMiksIGlzQmluYXJ5ID8gMiA6IDgpXG4gICAgOiAocmVJc0JhZEhleC50ZXN0KHZhbHVlKSA/IE5BTiA6ICt2YWx1ZSk7XG59XG5cbmV4cG9ydCBkZWZhdWx0IHRvTnVtYmVyO1xuIiwidmFyIGc7XG5cbi8vIFRoaXMgd29ya3MgaW4gbm9uLXN0cmljdCBtb2RlXG5nID0gKGZ1bmN0aW9uKCkge1xuXHRyZXR1cm4gdGhpcztcbn0pKCk7XG5cbnRyeSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgZXZhbCBpcyBhbGxvd2VkIChzZWUgQ1NQKVxuXHRnID0gZyB8fCBuZXcgRnVuY3Rpb24oXCJyZXR1cm4gdGhpc1wiKSgpO1xufSBjYXRjaCAoZSkge1xuXHQvLyBUaGlzIHdvcmtzIGlmIHRoZSB3aW5kb3cgcmVmZXJlbmNlIGlzIGF2YWlsYWJsZVxuXHRpZiAodHlwZW9mIHdpbmRvdyA9PT0gXCJvYmplY3RcIikgZyA9IHdpbmRvdztcbn1cblxuLy8gZyBjYW4gc3RpbGwgYmUgdW5kZWZpbmVkLCBidXQgbm90aGluZyB0byBkbyBhYm91dCBpdC4uLlxuLy8gV2UgcmV0dXJuIHVuZGVmaW5lZCwgaW5zdGVhZCBvZiBub3RoaW5nIGhlcmUsIHNvIGl0J3Ncbi8vIGVhc2llciB0byBoYW5kbGUgdGhpcyBjYXNlLiBpZighZ2xvYmFsKSB7IC4uLn1cblxubW9kdWxlLmV4cG9ydHMgPSBnO1xuIiwiaW1wb3J0IEF1dG9jb21wbGV0ZUZvcm0gZnJvbSAnc3JjL1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9hdXRvY29tcGxldGUtZm9ybS9hdXRvY29tcGxldGUtZm9ybSc7XG5cbmV4cG9ydCBlbnVtIEV2ZW50cyB7XG4gICAgRkVUQ0hJTkcgPSAnZmV0Y2hpbmcnLFxuICAgIEZFVENIRUQgPSAnZmV0Y2hlZCcsXG4gICAgQ0hBTkdFID0gJ2NoYW5nZScsXG4gICAgU0VUID0gJ3NldCcsXG4gICAgVU5TRVQgPSAndW5zZXQnLFxufVxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0U2VhcmNoQXV0b2NvbXBsZXRlRm9ybSBleHRlbmRzIEF1dG9jb21wbGV0ZUZvcm0ge1xuICAgIHByb3RlY3RlZCB3aWRnZXRTdWdnZXN0aW9uc0NvbnRhaW5lcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHN1Z2dlc3Rpb25JdGVtczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgbGFzdFNlbGVjdGVkSXRlbTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHF1YW50aXR5SW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy53aWRnZXRTdWdnZXN0aW9uc0NvbnRhaW5lciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zdWdnZXN0aW9uc2ApWzBdO1xuICAgICAgICB0aGlzLnF1YW50aXR5SW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcXVhbnRpdHktZmllbGRgKVswXTtcbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgICAgICB0aGlzLnBsdWdLZXlkb3duRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcGx1Z0tleWRvd25FdmVudCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigna2V5ZG93bicsIChldmVudDogS2V5Ym9hcmRFdmVudCkgPT4gdGhpcy5vbktleURvd24oZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25JbnB1dCgpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuaW5wdXRUZXh0Lmxlbmd0aCA+PSB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHRoaXMubG9hZFN1Z2dlc3Rpb25zKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzaG93U3VnZ2VzdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMud2lkZ2V0U3VnZ2VzdGlvbnNDb250YWluZXIuY2xhc3NMaXN0LnJlbW92ZSgnaXMtaGlkZGVuJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhpZGVTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy53aWRnZXRTdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwSXRlbUV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgY29uc3Qgc2VsZiA9IHRoaXM7XG4gICAgICAgIGNvbnN0IGl0ZW1zID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLndpZGdldFN1Z2dlc3Rpb25zQ29udGFpbmVyLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pdGVtQ2xhc3NOYW1lKSlcbiAgICAgICAgKTtcbiAgICAgICAgaXRlbXMuZm9yRWFjaCgoaXRlbTogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiBzZWxmLm9uSXRlbUNsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbktleURvd24oZXZlbnQ6IEtleWJvYXJkRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnN1Z2dlc3Rpb25JdGVtcyAmJiB0aGlzLmlucHV0VGV4dC5sZW5ndGggPCB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHN3aXRjaCAoZXZlbnQua2V5KSB7XG4gICAgICAgICAgICBjYXNlICdBcnJvd1VwJzpcbiAgICAgICAgICAgICAgICB0aGlzLm9uS2V5RG93bkFycm93VXAoKTtcbiAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgIGNhc2UgJ0Fycm93RG93bic6XG4gICAgICAgICAgICAgICAgdGhpcy5vbktleURvd25BcnJvd0Rvd24oKTtcbiAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgIGNhc2UgJ0VudGVyJzpcbiAgICAgICAgICAgICAgICB0aGlzLm9uS2V5RG93bkVudGVyKCk7XG4gICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duQXJyb3dVcCgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGFzdFNlbGVjdGVkSXRlbUluZGV4ID0gdGhpcy5zdWdnZXN0aW9uSXRlbXMuaW5kZXhPZih0aGlzLmxhc3RTZWxlY3RlZEl0ZW0pO1xuICAgICAgICBjb25zdCBlbGVtZW50SW5kZXggPSBsYXN0U2VsZWN0ZWRJdGVtSW5kZXggLSAxO1xuICAgICAgICBjb25zdCBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zLmxlbmd0aCAtIDE7XG4gICAgICAgIGNvbnN0IGl0ZW0gPSB0aGlzLnN1Z2dlc3Rpb25JdGVtc1tlbGVtZW50SW5kZXggPCAwID8gbGFzdFN1Z2dlc3Rpb25JdGVtSW5kZXggOiBlbGVtZW50SW5kZXhdO1xuXG4gICAgICAgIHRoaXMuY2hhbmdlU2VsZWN0ZWRJdGVtKGl0ZW0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbktleURvd25BcnJvd0Rvd24oKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGxhc3RTZWxlY3RlZEl0ZW1JbmRleCA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zLmluZGV4T2YodGhpcy5sYXN0U2VsZWN0ZWRJdGVtKTtcbiAgICAgICAgY29uc3QgZWxlbWVudEluZGV4ID0gbGFzdFNlbGVjdGVkSXRlbUluZGV4ICsgMTtcbiAgICAgICAgY29uc3QgbGFzdFN1Z2dlc3Rpb25JdGVtSW5kZXggPSB0aGlzLnN1Z2dlc3Rpb25JdGVtcy5sZW5ndGggLSAxO1xuICAgICAgICBjb25zdCBpdGVtID0gdGhpcy5zdWdnZXN0aW9uSXRlbXNbZWxlbWVudEluZGV4ID4gbGFzdFN1Z2dlc3Rpb25JdGVtSW5kZXggPyAwIDogZWxlbWVudEluZGV4XTtcblxuICAgICAgICB0aGlzLmNoYW5nZVNlbGVjdGVkSXRlbShpdGVtKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duRW50ZXIoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubGFzdFNlbGVjdGVkSXRlbS5jbGljaygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBjaGFuZ2VTZWxlY3RlZEl0ZW0oaXRlbTogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5sYXN0U2VsZWN0ZWRJdGVtLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5zZWxlY3RlZElucHV0Q2xhc3MpO1xuICAgICAgICBpdGVtLmNsYXNzTGlzdC5hZGQodGhpcy5zZWxlY3RlZElucHV0Q2xhc3MpO1xuICAgICAgICB0aGlzLmxhc3RTZWxlY3RlZEl0ZW0gPSBpdGVtO1xuICAgIH1cblxuICAgIGFzeW5jIGxvYWRTdWdnZXN0aW9ucygpOiBQcm9taXNlPHZvaWQ+IHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEV2ZW50cy5GRVRDSElORyk7XG4gICAgICAgIHRoaXMuc2hvd1N1Z2dlc3Rpb25zKCk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLnNldCh0aGlzLnF1ZXJ5UGFyYW1OYW1lLCB0aGlzLmlucHV0VGV4dCk7XG4gICAgICAgIGF3YWl0IHRoaXMuYWpheFByb3ZpZGVyLmZldGNoKCk7XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbkl0ZW1zID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLndpZGdldFN1Z2dlc3Rpb25zQ29udGFpbmVyLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pdGVtQ2xhc3NOYW1lKSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5sYXN0U2VsZWN0ZWRJdGVtID0gdGhpcy5zdWdnZXN0aW9uSXRlbXNbMF07XG4gICAgICAgIHRoaXMubWFwSXRlbUV2ZW50cygpO1xuICAgIH1cblxuICAgIHNldElucHV0cyhkYXRhOiBzdHJpbmcsIHRleHQ6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0VGV4dCA9IHRleHQ7XG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9IGRhdGE7XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEV2ZW50cy5TRVQsIHsgdGV4dDogdGhpcy5pbnB1dFRleHQsIHZhbHVlOiB0aGlzLmlucHV0VmFsdWUgfSk7XG5cbiAgICAgICAgaWYgKHRoaXMucXVhbnRpdHlJbnB1dCkge1xuICAgICAgICAgICAgdGhpcy5xdWFudGl0eUlucHV0LmZvY3VzKCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25CbHVyKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkZvY3VzKCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5pbnB1dFRleHQubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbnB1dFRleHQoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaW5wdXRFbGVtZW50LnZhbHVlLnRyaW0oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0IGlucHV0VGV4dCh2YWx1ZTogc3RyaW5nKSB7XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50LnZhbHVlID0gdmFsdWU7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBzZWxlY3RlZElucHV0Q2xhc3MoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIGAke3RoaXMuaXRlbUNsYXNzTmFtZX0tLXNlbGVjdGVkYC5zdWJzdHIoMSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbnB1dFZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmhpZGRlbklucHV0RWxlbWVudC52YWx1ZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0IGlucHV0VmFsdWUodmFsdWU6IHN0cmluZykge1xuICAgICAgICB0aGlzLmhpZGRlbklucHV0RWxlbWVudC52YWx1ZSA9IHZhbHVlO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IEFqYXhQcm92aWRlciBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvYWpheC1wcm92aWRlci9hamF4LXByb3ZpZGVyJztcbmltcG9ydCBkZWJvdW5jZSBmcm9tICdsb2Rhc2gtZXMvZGVib3VuY2UnO1xuaW1wb3J0IE92ZXJsYXlCbG9jayBmcm9tICcuLi8uLi9hdG9tcy9vdmVybGF5LWJsb2NrL292ZXJsYXktYmxvY2snO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBBdXRvY29tcGxldGVGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgYWpheFByb3ZpZGVyOiBBamF4UHJvdmlkZXI7XG4gICAgcHJvdGVjdGVkIGlucHV0RWxlbWVudDogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgaGlkZGVuSW5wdXRFbGVtZW50OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBzdWdnZXN0aW9uc0NvbnRhaW5lcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGNsZWFuQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgb3ZlcmxheTogT3ZlcmxheUJsb2NrO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcm92aWRlcmApWzBdO1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2NvbnRhaW5lcmApWzBdO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudCA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2lucHV0YClbMF07XG4gICAgICAgIHRoaXMuaGlkZGVuSW5wdXRFbGVtZW50ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXQtaGlkZGVuYClbMF07XG4gICAgICAgIHRoaXMuY2xlYW5CdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fY2xlYW4tYnV0dG9uYClbMF07XG4gICAgICAgIHRoaXMub3ZlcmxheSA9IDxPdmVybGF5QmxvY2s+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLm92ZXJsYXlCbG9ja0NsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdpbnB1dCcsXG4gICAgICAgICAgICBkZWJvdW5jZSgoKSA9PiB0aGlzLm9uSW5wdXQoKSwgdGhpcy5kZWJvdW5jZURlbGF5KSxcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdibHVyJyxcbiAgICAgICAgICAgIGRlYm91bmNlKCgpID0+IHRoaXMub25CbHVyKCksIHRoaXMuZGVib3VuY2VEZWxheSksXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2ZvY3VzJywgKCkgPT4gdGhpcy5vbkZvY3VzKCkpO1xuICAgICAgICBpZiAodGhpcy5zaG93Q2xlYW5CdXR0b24pIHtcbiAgICAgICAgICAgIHRoaXMuY2xlYW5CdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLm9uQ2xlYW5CdXR0b25DbGljaygpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNsZWFuQnV0dG9uQ2xpY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2xlYW5GaWVsZHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25CbHVyKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm92ZXJsYXkuaGlkZU92ZXJsYXkoJ25vLWFnZW50LXVzZXInLCAnbm8tYWdlbnQtdXNlcicpO1xuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkZvY3VzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm92ZXJsYXkuc2hvd092ZXJsYXkoJ25vLWFnZW50LXVzZXInLCAnbm8tYWdlbnQtdXNlcicpO1xuICAgICAgICBpZiAodGhpcy5pbnB1dFZhbHVlLmxlbmd0aCA+PSB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHRoaXMuc2hvd1N1Z2dlc3Rpb25zKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbklucHV0KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5pbnB1dFZhbHVlLmxlbmd0aCA+PSB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHRoaXMubG9hZFN1Z2dlc3Rpb25zKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzaG93U3VnZ2VzdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIuY2xhc3NMaXN0LnJlbW92ZSgnaXMtaGlkZGVuJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhpZGVTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBhc3luYyBsb2FkU3VnZ2VzdGlvbnMoKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIHRoaXMuc2hvd1N1Z2dlc3Rpb25zKCk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLnNldCh0aGlzLnF1ZXJ5UGFyYW1OYW1lLCB0aGlzLmlucHV0VmFsdWUpO1xuXG4gICAgICAgIGF3YWl0IHRoaXMuYWpheFByb3ZpZGVyLmZldGNoKCk7XG4gICAgICAgIHRoaXMubWFwSXRlbUV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBJdGVtRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzZWxmID0gdGhpcztcbiAgICAgICAgY29uc3QgaXRlbXMgPSBBcnJheS5mcm9tKHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLml0ZW1DbGFzc05hbWUpKTtcbiAgICAgICAgaXRlbXMuZm9yRWFjaCgoaXRlbTogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiBzZWxmLm9uSXRlbUNsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkl0ZW1DbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgZGF0YVRhcmdldCA9IDxIVE1MRWxlbWVudD5ldmVudC50YXJnZXQ7XG4gICAgICAgIGNvbnN0IGRhdGEgPSBkYXRhVGFyZ2V0LmdldEF0dHJpYnV0ZSh0aGlzLnZhbHVlRGF0YUF0dHJpYnV0ZSk7XG4gICAgICAgIGNvbnN0IHRleHQgPSBkYXRhVGFyZ2V0LnRleHRDb250ZW50LnRyaW0oKTtcblxuICAgICAgICB0aGlzLnNldElucHV0cyhkYXRhLCB0ZXh0KTtcbiAgICB9XG5cbiAgICBzZXRJbnB1dHMoZGF0YTogc3RyaW5nLCB0ZXh0OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5oaWRkZW5JbnB1dEVsZW1lbnQudmFsdWUgPSBkYXRhO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC52YWx1ZSA9IHRleHQ7XG4gICAgfVxuXG4gICAgY2xlYW5GaWVsZHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2V0SW5wdXRzKCcnLCAnJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBtaW5MZXR0ZXJzKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5nZXRBdHRyaWJ1dGUoJ21pbi1sZXR0ZXJzJykpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaW5wdXRWYWx1ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5pbnB1dEVsZW1lbnQudmFsdWUudHJpbSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgcXVlcnlQYXJhbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdxdWVyeS1wYXJhbS1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB2YWx1ZURhdGFBdHRyaWJ1dGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd2YWx1ZS1kYXRhLWF0dHJpYnV0ZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2l0ZW0tY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZGVib3VuY2VEZWxheSgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMuZ2V0QXR0cmlidXRlKCdkZWJvdW5jZS1kZWxheScpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNob3dDbGVhbkJ1dHRvbigpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdzaG93LWNsZWFuLWJ1dHRvbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgb3ZlcmxheUJsb2NrQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnb3ZlcmxheS1ibG9jay1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==