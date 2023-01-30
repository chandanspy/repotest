(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["quick-order-row"],{

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

/***/ "./src/Pyz/Yves/QuickOrderPage/Theme/default/components/molecules/quick-order-row/quick-order-row.ts":
/*!***********************************************************************************************************!*\
  !*** ./src/Pyz/Yves/QuickOrderPage/Theme/default/components/molecules/quick-order-row/quick-order-row.ts ***!
  \***********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return QuickOrderRow; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ShopUi/components/molecules/autocomplete-form/autocomplete-form */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");








var QuickOrderRow = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default()(QuickOrderRow, _Component);

  function QuickOrderRow() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.ajaxProvider = void 0;
    _this.autocompleteInput = void 0;
    _this.quantityInput = void 0;
    _this.incrementButton = void 0;
    _this.decrementButton = void 0;
    return _this;
  }

  var _proto = QuickOrderRow.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.autocompleteInput = this.getElementsByClassName(this.autocompleteFormClassName)[0];
    this.registerQuantityInput();
    this.mapEvents();
  };

  _proto.registerQuantityInput = function registerQuantityInput() {
    this.incrementButton = this.getElementsByClassName(this.jsName + "__button-increment")[0] || this.getElementsByClassName(this.jsName + "-partial__button-increment")[0];
    this.decrementButton = this.getElementsByClassName(this.jsName + "__button-decrement")[0] || this.getElementsByClassName(this.jsName + "-partial__button-decrement")[0];
    this.quantityInput = this.getElementsByClassName(this.jsName + "__quantity")[0] || this.getElementsByClassName(this.jsName + "-partial__quantity")[0];
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.autocompleteInput.addEventListener(ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_5__["Events"].SET, function () {
      return _this2.onAutocompleteSet();
    });
    this.autocompleteInput.addEventListener(ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_5__["Events"].UNSET, function () {
      return _this2.onAutocompleteUnset();
    });
    this.mapQuantityInputChange();
  };

  _proto.mapQuantityInputChange = function mapQuantityInputChange() {
    var _this3 = this;

    this.incrementButton.addEventListener('click', function (event) {
      return _this3.incrementValue(event);
    });
    this.decrementButton.addEventListener('click', function (event) {
      return _this3.decrementValue(event);
    });
    this.quantityInput.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_6__["default"])(function () {
      _this3.onQuantityChange();
    }, this.autocompleteInput.debounceDelay));
  };

  _proto.onAutocompleteSet = function onAutocompleteSet() {
    this.reloadField(this.autocompleteInput.inputValue);
  };

  _proto.onAutocompleteUnset = function onAutocompleteUnset() {
    this.reloadField();
  };

  _proto.onQuantityChange = function onQuantityChange() {
    this.reloadField(this.autocompleteInput.inputValue);
  };

  _proto.incrementValue = function incrementValue(event) {
    event.preventDefault();
    var value = Number(this.quantityInput.value);
    var potentialValue = value + this.step;

    if (value < this.maxQuantity) {
      this.quantityInput.value = potentialValue.toString();
      this.onQuantityChange();
    }
  };

  _proto.decrementValue = function decrementValue(event) {
    event.preventDefault();
    var value = Number(this.quantityInput.value);
    var potentialValue = value - this.step;

    if (potentialValue >= this.minQuantity) {
      this.quantityInput.value = potentialValue.toString();
      this.onQuantityChange();
    }
  };

  _proto.reloadField = /*#__PURE__*/function () {
    var _reloadField = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee(sku) {
      var quantityInputValue;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              if (sku === void 0) {
                sku = '';
              }

              quantityInputValue = parseInt(this.quantityValue);
              this.ajaxProvider.queryParams.set('sku', sku);
              this.ajaxProvider.queryParams.set('index', this.ajaxProvider.getAttribute('class').split('-').pop().trim());

              if (!!quantityInputValue) {
                this.ajaxProvider.queryParams.set('quantity', "" + quantityInputValue);
              }

              _context.next = 7;
              return this.ajaxProvider.fetch();

            case 7:
              this.registerQuantityInput();
              this.mapQuantityInputChange();

              if (!!sku) {
                this.quantityInput.focus();
              }

            case 10:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function reloadField(_x) {
      return _reloadField.apply(this, arguments);
    }

    return reloadField;
  }();

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default()(QuickOrderRow, [{
    key: "quantityValue",
    get: function get() {
      return this.quantityInput.value;
    }
  }, {
    key: "autocompleteFormClassName",
    get: function get() {
      return this.getAttribute('autocomplete-form-class-name');
    }
  }, {
    key: "minQuantity",
    get: function get() {
      return Number(this.quantityInput.getAttribute('min'));
    }
  }, {
    key: "maxQuantity",
    get: function get() {
      var max = Number(this.quantityInput.getAttribute('max'));
      return max > 0 && max > this.minQuantity ? max : Infinity;
    }
  }, {
    key: "step",
    get: function get() {
      var step = Number(this.quantityInput.getAttribute('step'));
      return step > 0 ? step : 1;
    }
  }]);

  return QuickOrderRow;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts":
/*!*******************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts ***!
  \*******************************************************************************************************************************************/
/*! exports provided: Events, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Events", function() { return Events; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AutocompleteForm; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");





/* tslint:disable: max-file-line-count */


var Events;
/**
 * @event fetching An event which is triggered when an ajax request is sent to the server.
 * @event fetched An event which is triggered when an ajax request is closed.
 * @event change An event which is triggered when the search field is changed.
 * @event set An event which is triggered when the element of an autocomplete suggestion is selected.
 * @event unset An event which is triggered when the element of an autocomplete suggestion is removed.
 */

(function (Events) {
  Events["FETCHING"] = "fetching";
  Events["FETCHED"] = "fetched";
  Events["CHANGE"] = "change";
  Events["SET"] = "set";
  Events["UNSET"] = "unset";
})(Events || (Events = {}));

var AutocompleteForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default()(AutocompleteForm, _Component);

  function AutocompleteForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.ajaxProvider = void 0;
    _this.textInput = void 0;
    _this.valueInput = void 0;
    _this.suggestionsContainer = void 0;
    _this.suggestionItems = void 0;
    _this.cleanButton = void 0;
    _this.lastSelectedItem = void 0;
    _this.injectorsExtraQueryValueList = void 0;
    _this.extraQueryValues = new Map();
    return _this;
  }

  var _proto = AutocompleteForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.textInput = this.getElementsByClassName(this.jsName + "__text-input")[0];
    this.valueInput = this.getElementsByClassName(this.jsName + "__value-input")[0];
    this.suggestionsContainer = this.getElementsByClassName(this.jsName + "__suggestions")[0];
    this.cleanButton = this.getElementsByClassName(this.jsName + "__clean-button")[0];

    if (this.injectorsExtraQueryValueClassName) {
      this.injectorsExtraQueryValueList = Array.from(document.getElementsByClassName(this.injectorsExtraQueryValueClassName));
    }

    if (this.autoInitEnabled) {
      this.autoLoadInit();
    }

    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.textInput.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onInput();
    }, this.debounceDelay));
    this.textInput.addEventListener('blur', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onBlur();
    }, this.debounceDelay));
    this.textInput.addEventListener('focus', function () {
      return _this2.onFocus();
    });
    this.textInput.addEventListener('keydown', function (event) {
      return _this2.onKeyDown(event);
    });

    if (this.cleanButton) {
      this.cleanButton.addEventListener('click', function () {
        return _this2.onCleanButtonClick();
      });
    }
  };

  _proto.autoLoadInit = function autoLoadInit() {
    this.textInput.focus();
    this.loadSuggestions();
  };

  _proto.onCleanButtonClick = function onCleanButtonClick() {
    this.clean();
    this.dispatchCustomEvent(Events.UNSET);
  };

  _proto.onBlur = function onBlur() {
    this.hideSuggestions();
  };

  _proto.onFocus = function onFocus() {
    if (this.inputText.length < this.minLetters) {
      return;
    }

    this.showSuggestions();
  };

  _proto.onInput = function onInput() {
    this.dispatchCustomEvent(Events.CHANGE);

    if (this.inputText.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();

    if (!!this.inputValue) {
      this.inputValue = '';
      this.dispatchCustomEvent(Events.UNSET);
    }
  };

  _proto.showSuggestions = function showSuggestions() {
    this.suggestionsContainer.classList.remove('is-hidden');
  };

  _proto.hideSuggestions = function hideSuggestions() {
    this.suggestionsContainer.classList.add('is-hidden');
  };

  _proto.setQueryParams = function setQueryParams() {
    var _this3 = this;

    this.extraQueryValues.clear();
    this.ajaxProvider.queryParams.clear();
    this.ajaxProvider.queryParams.set(this.queryString, this.inputText);

    if (!this.injectorsExtraQueryValueList || !this.injectorsExtraQueryValueList.length) {
      return;
    }

    this.injectorsExtraQueryValueList.forEach(function (item) {
      if (!item.name || !item.value) {
        return;
      }

      _this3.ajaxProvider.queryParams.set(item.name, item.value);

      _this3.extraQueryValues.set(item.name, item.value);
    });
  }
  /**
   * Sends a request to the server and triggers the custom fetching and fetched events.
   */
  ;

  _proto.loadSuggestions =
  /*#__PURE__*/
  function () {
    var _loadSuggestions = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              this.dispatchCustomEvent(Events.FETCHING);
              this.showSuggestions();
              this.setQueryParams();
              _context.next = 5;
              return this.ajaxProvider.fetch();

            case 5:
              /* tslint:disable: deprecation */
              this.suggestionItems = Array.from(this.suggestionsContainer.getElementsByClassName(this.suggestedItemClassName) || this.suggestionsContainer.querySelectorAll(this.suggestedItemSelector));
              /* tslint:enable: deprecation */

              this.lastSelectedItem = this.suggestionItems[0];
              this.mapSuggestionItemsEvents();
              this.dispatchCustomEvent(Events.FETCHED);

            case 9:
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

  _proto.mapSuggestionItemsEvents = function mapSuggestionItemsEvents() {
    var _this4 = this;

    this.suggestionItems.forEach(function (item) {
      item.addEventListener('click', function () {
        return _this4.onItemClick(item);
      });
      item.addEventListener('mouseover', function () {
        return _this4.onItemSelected(item);
      });
    });
  };

  _proto.onItemClick = function onItemClick(item) {
    this.inputText = item.textContent.trim();
    this.inputValue = item.getAttribute(this.valueAttributeName);
    this.dispatchCustomEvent(Events.SET, {
      text: this.inputText,
      value: this.inputValue,
      extraValues: this.extraQueryValues
    });
  };

  _proto.onItemSelected = function onItemSelected(item) {
    this.changeSelectedItem(item);
  };

  _proto.changeSelectedItem = function changeSelectedItem(item) {
    this.lastSelectedItem.classList.remove(this.selectedInputClass);
    item.classList.add(this.selectedInputClass);
    this.lastSelectedItem = item;
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
        this.onKeyDownEnter(event);
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

  _proto.onKeyDownEnter = function onKeyDownEnter(event) {
    event.preventDefault();
    this.lastSelectedItem.click();
  }
  /**
   * Clears the input value and the typed text.
   */
  ;

  _proto.clean = function clean() {
    this.inputText = '';
    this.inputValue = '';
  }
  /**
   * Gets the css query selector of the selected suggestion items.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default()(AutocompleteForm, [{
    key: "selectedInputClass",
    get: function get() {
      /* tslint:disable: deprecation */
      return this.suggestedItemClassName + "--selected" || false;
      /* tslint:enable: deprecation */
    }
    /**
     * Gets the typed text from the form field.
     */

  }, {
    key: "inputText",
    get: function get() {
      return this.textInput.value.trim();
    }
    /**
     * Sets an input text.
     * @param value A typed text in the input field.
     */
    ,
    set: function set(value) {
      this.textInput.value = value;
    }
    /**
     * Gets the value attribute from the input form field.
     */

  }, {
    key: "inputValue",
    get: function get() {
      return this.valueInput.value;
    }
    /**
     * Sets the input value.
     */
    ,
    set: function set(value) {
      this.valueInput.value = value;
    }
    /**
     * Gets the css query selector for the ajaxProvider configuration.
     */

  }, {
    key: "queryString",
    get: function get() {
      return this.getAttribute('query-string');
    }
    /**
     * Gets the value attribute name for the input element configuration.
     */

  }, {
    key: "valueAttributeName",
    get: function get() {
      return this.getAttribute('value-attribute-name');
    }
    /**
     * Gets the css query selector of the suggestion items.
     *
     * @deprecated Use suggestedItemClassName() instead.
     */

  }, {
    key: "suggestedItemSelector",
    get: function get() {
      return this.getAttribute('suggested-item-selector');
    }
  }, {
    key: "suggestedItemClassName",
    get: function get() {
      return this.getAttribute('suggested-item-class-name');
    }
  }, {
    key: "injectorsExtraQueryValueClassName",
    get: function get() {
      return this.getAttribute('injectors-extra-query-value-class-name');
    }
    /**
     * Gets a time delay for the blur and input events.
     */

  }, {
    key: "debounceDelay",
    get: function get() {
      return Number(this.getAttribute('debounce-delay'));
    }
    /**
     * Gets the number of letters which, upon entering in form field, is sufficient to show, hide or load the
     * suggestions.
     */

  }, {
    key: "minLetters",
    get: function get() {
      return Number(this.getAttribute('min-letters'));
    }
    /**
     * Gets if the auto load of suggestions is enabled.
     */

  }, {
    key: "autoInitEnabled",
    get: function get() {
      return this.hasAttribute('auto-init');
    }
  }]);

  return AutocompleteForm;
}(_models_component__WEBPACK_IMPORTED_MODULE_4__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19TeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9fYmFzZUdldFRhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19iYXNlVHJpbS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19mcmVlR2xvYmFsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX2dldFJhd1RhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19vYmplY3RUb1N0cmluZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19yb290LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX3RyaW1tZWRFbmRJbmRleC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL2RlYm91bmNlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvaXNPYmplY3QuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc09iamVjdExpa2UuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc1N5bWJvbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL25vdy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1F1aWNrT3JkZXJQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcXVpY2stb3JkZXItcm93L3F1aWNrLW9yZGVyLXJvdy50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYXV0b2NvbXBsZXRlLWZvcm0vYXV0b2NvbXBsZXRlLWZvcm0udHMiXSwibmFtZXMiOlsiUXVpY2tPcmRlclJvdyIsImFqYXhQcm92aWRlciIsImF1dG9jb21wbGV0ZUlucHV0IiwicXVhbnRpdHlJbnB1dCIsImluY3JlbWVudEJ1dHRvbiIsImRlY3JlbWVudEJ1dHRvbiIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImF1dG9jb21wbGV0ZUZvcm1DbGFzc05hbWUiLCJyZWdpc3RlclF1YW50aXR5SW5wdXQiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiQXV0b2NvbXBsZXRlRXZlbnRzIiwiU0VUIiwib25BdXRvY29tcGxldGVTZXQiLCJVTlNFVCIsIm9uQXV0b2NvbXBsZXRlVW5zZXQiLCJtYXBRdWFudGl0eUlucHV0Q2hhbmdlIiwiZXZlbnQiLCJpbmNyZW1lbnRWYWx1ZSIsImRlY3JlbWVudFZhbHVlIiwiZGVib3VuY2UiLCJvblF1YW50aXR5Q2hhbmdlIiwiZGVib3VuY2VEZWxheSIsInJlbG9hZEZpZWxkIiwiaW5wdXRWYWx1ZSIsInByZXZlbnREZWZhdWx0IiwidmFsdWUiLCJOdW1iZXIiLCJwb3RlbnRpYWxWYWx1ZSIsInN0ZXAiLCJtYXhRdWFudGl0eSIsInRvU3RyaW5nIiwibWluUXVhbnRpdHkiLCJza3UiLCJxdWFudGl0eUlucHV0VmFsdWUiLCJwYXJzZUludCIsInF1YW50aXR5VmFsdWUiLCJxdWVyeVBhcmFtcyIsInNldCIsImdldEF0dHJpYnV0ZSIsInNwbGl0IiwicG9wIiwidHJpbSIsImZldGNoIiwiZm9jdXMiLCJtYXgiLCJJbmZpbml0eSIsIkNvbXBvbmVudCIsIkV2ZW50cyIsIkF1dG9jb21wbGV0ZUZvcm0iLCJ0ZXh0SW5wdXQiLCJ2YWx1ZUlucHV0Iiwic3VnZ2VzdGlvbnNDb250YWluZXIiLCJzdWdnZXN0aW9uSXRlbXMiLCJjbGVhbkJ1dHRvbiIsImxhc3RTZWxlY3RlZEl0ZW0iLCJpbmplY3RvcnNFeHRyYVF1ZXJ5VmFsdWVMaXN0IiwiZXh0cmFRdWVyeVZhbHVlcyIsIk1hcCIsImluamVjdG9yc0V4dHJhUXVlcnlWYWx1ZUNsYXNzTmFtZSIsIkFycmF5IiwiZnJvbSIsImRvY3VtZW50IiwiYXV0b0luaXRFbmFibGVkIiwiYXV0b0xvYWRJbml0Iiwib25JbnB1dCIsIm9uQmx1ciIsIm9uRm9jdXMiLCJvbktleURvd24iLCJvbkNsZWFuQnV0dG9uQ2xpY2siLCJsb2FkU3VnZ2VzdGlvbnMiLCJjbGVhbiIsImRpc3BhdGNoQ3VzdG9tRXZlbnQiLCJoaWRlU3VnZ2VzdGlvbnMiLCJpbnB1dFRleHQiLCJsZW5ndGgiLCJtaW5MZXR0ZXJzIiwic2hvd1N1Z2dlc3Rpb25zIiwiQ0hBTkdFIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIiwic2V0UXVlcnlQYXJhbXMiLCJjbGVhciIsInF1ZXJ5U3RyaW5nIiwiZm9yRWFjaCIsIml0ZW0iLCJuYW1lIiwiRkVUQ0hJTkciLCJzdWdnZXN0ZWRJdGVtQ2xhc3NOYW1lIiwicXVlcnlTZWxlY3RvckFsbCIsInN1Z2dlc3RlZEl0ZW1TZWxlY3RvciIsIm1hcFN1Z2dlc3Rpb25JdGVtc0V2ZW50cyIsIkZFVENIRUQiLCJvbkl0ZW1DbGljayIsIm9uSXRlbVNlbGVjdGVkIiwidGV4dENvbnRlbnQiLCJ2YWx1ZUF0dHJpYnV0ZU5hbWUiLCJ0ZXh0IiwiZXh0cmFWYWx1ZXMiLCJjaGFuZ2VTZWxlY3RlZEl0ZW0iLCJzZWxlY3RlZElucHV0Q2xhc3MiLCJrZXkiLCJvbktleURvd25BcnJvd1VwIiwib25LZXlEb3duQXJyb3dEb3duIiwib25LZXlEb3duRW50ZXIiLCJsYXN0U2VsZWN0ZWRJdGVtSW5kZXgiLCJpbmRleE9mIiwiZWxlbWVudEluZGV4IiwibGFzdFN1Z2dlc3Rpb25JdGVtSW5k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RUFoVXlDaEUseUQiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucXVpY2stb3JkZXItcm93LmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCByb290IGZyb20gJy4vX3Jvb3QuanMnO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBTeW1ib2wgPSByb290LlN5bWJvbDtcblxuZXhwb3J0IGRlZmF1bHQgU3ltYm9sO1xuIiwiaW1wb3J0IFN5bWJvbCBmcm9tICcuL19TeW1ib2wuanMnO1xuaW1wb3J0IGdldFJhd1RhZyBmcm9tICcuL19nZXRSYXdUYWcuanMnO1xuaW1wb3J0IG9iamVjdFRvU3RyaW5nIGZyb20gJy4vX29iamVjdFRvU3RyaW5nLmpzJztcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIG51bGxUYWcgPSAnW29iamVjdCBOdWxsXScsXG4gICAgdW5kZWZpbmVkVGFnID0gJ1tvYmplY3QgVW5kZWZpbmVkXSc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIFRoZSBiYXNlIGltcGxlbWVudGF0aW9uIG9mIGBnZXRUYWdgIHdpdGhvdXQgZmFsbGJhY2tzIGZvciBidWdneSBlbnZpcm9ubWVudHMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgYHRvU3RyaW5nVGFnYC5cbiAqL1xuZnVuY3Rpb24gYmFzZUdldFRhZyh2YWx1ZSkge1xuICBpZiAodmFsdWUgPT0gbnVsbCkge1xuICAgIHJldHVybiB2YWx1ZSA9PT0gdW5kZWZpbmVkID8gdW5kZWZpbmVkVGFnIDogbnVsbFRhZztcbiAgfVxuICByZXR1cm4gKHN5bVRvU3RyaW5nVGFnICYmIHN5bVRvU3RyaW5nVGFnIGluIE9iamVjdCh2YWx1ZSkpXG4gICAgPyBnZXRSYXdUYWcodmFsdWUpXG4gICAgOiBvYmplY3RUb1N0cmluZyh2YWx1ZSk7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGJhc2VHZXRUYWc7XG4iLCJpbXBvcnQgdHJpbW1lZEVuZEluZGV4IGZyb20gJy4vX3RyaW1tZWRFbmRJbmRleC5qcyc7XG5cbi8qKiBVc2VkIHRvIG1hdGNoIGxlYWRpbmcgd2hpdGVzcGFjZS4gKi9cbnZhciByZVRyaW1TdGFydCA9IC9eXFxzKy87XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYF8udHJpbWAuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byB0cmltLlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgdHJpbW1lZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIGJhc2VUcmltKHN0cmluZykge1xuICByZXR1cm4gc3RyaW5nXG4gICAgPyBzdHJpbmcuc2xpY2UoMCwgdHJpbW1lZEVuZEluZGV4KHN0cmluZykgKyAxKS5yZXBsYWNlKHJlVHJpbVN0YXJ0LCAnJylcbiAgICA6IHN0cmluZztcbn1cblxuZXhwb3J0IGRlZmF1bHQgYmFzZVRyaW07XG4iLCIvKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYGdsb2JhbGAgZnJvbSBOb2RlLmpzLiAqL1xudmFyIGZyZWVHbG9iYWwgPSB0eXBlb2YgZ2xvYmFsID09ICdvYmplY3QnICYmIGdsb2JhbCAmJiBnbG9iYWwuT2JqZWN0ID09PSBPYmplY3QgJiYgZ2xvYmFsO1xuXG5leHBvcnQgZGVmYXVsdCBmcmVlR2xvYmFsO1xuIiwiaW1wb3J0IFN5bWJvbCBmcm9tICcuL19TeW1ib2wuanMnO1xuXG4vKiogVXNlZCBmb3IgYnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMuICovXG52YXIgb2JqZWN0UHJvdG8gPSBPYmplY3QucHJvdG90eXBlO1xuXG4vKiogVXNlZCB0byBjaGVjayBvYmplY3RzIGZvciBvd24gcHJvcGVydGllcy4gKi9cbnZhciBoYXNPd25Qcm9wZXJ0eSA9IG9iamVjdFByb3RvLmhhc093blByb3BlcnR5O1xuXG4vKipcbiAqIFVzZWQgdG8gcmVzb2x2ZSB0aGVcbiAqIFtgdG9TdHJpbmdUYWdgXShodHRwOi8vZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1vYmplY3QucHJvdG90eXBlLnRvc3RyaW5nKVxuICogb2YgdmFsdWVzLlxuICovXG52YXIgbmF0aXZlT2JqZWN0VG9TdHJpbmcgPSBvYmplY3RQcm90by50b1N0cmluZztcblxuLyoqIEJ1aWx0LWluIHZhbHVlIHJlZmVyZW5jZXMuICovXG52YXIgc3ltVG9TdHJpbmdUYWcgPSBTeW1ib2wgPyBTeW1ib2wudG9TdHJpbmdUYWcgOiB1bmRlZmluZWQ7XG5cbi8qKlxuICogQSBzcGVjaWFsaXplZCB2ZXJzaW9uIG9mIGBiYXNlR2V0VGFnYCB3aGljaCBpZ25vcmVzIGBTeW1ib2wudG9TdHJpbmdUYWdgIHZhbHVlcy5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gcXVlcnkuXG4gKiBAcmV0dXJucyB7c3RyaW5nfSBSZXR1cm5zIHRoZSByYXcgYHRvU3RyaW5nVGFnYC5cbiAqL1xuZnVuY3Rpb24gZ2V0UmF3VGFnKHZhbHVlKSB7XG4gIHZhciBpc093biA9IGhhc093blByb3BlcnR5LmNhbGwodmFsdWUsIHN5bVRvU3RyaW5nVGFnKSxcbiAgICAgIHRhZyA9IHZhbHVlW3N5bVRvU3RyaW5nVGFnXTtcblxuICB0cnkge1xuICAgIHZhbHVlW3N5bVRvU3RyaW5nVGFnXSA9IHVuZGVmaW5lZDtcbiAgICB2YXIgdW5tYXNrZWQgPSB0cnVlO1xuICB9IGNhdGNoIChlKSB7fVxuXG4gIHZhciByZXN1bHQgPSBuYXRpdmVPYmplY3RUb1N0cmluZy5jYWxsKHZhbHVlKTtcbiAgaWYgKHVubWFza2VkKSB7XG4gICAgaWYgKGlzT3duKSB7XG4gICAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB0YWc7XG4gICAgfSBlbHNlIHtcbiAgICAgIGRlbGV0ZSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG4gICAgfVxuICB9XG4gIHJldHVybiByZXN1bHQ7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGdldFJhd1RhZztcbiIsIi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBzdHJpbmcgdXNpbmcgYE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjb252ZXJ0LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgY29udmVydGVkIHN0cmluZy5cbiAqL1xuZnVuY3Rpb24gb2JqZWN0VG9TdHJpbmcodmFsdWUpIHtcbiAgcmV0dXJuIG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xufVxuXG5leHBvcnQgZGVmYXVsdCBvYmplY3RUb1N0cmluZztcbiIsImltcG9ydCBmcmVlR2xvYmFsIGZyb20gJy4vX2ZyZWVHbG9iYWwuanMnO1xuXG4vKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYHNlbGZgLiAqL1xudmFyIGZyZWVTZWxmID0gdHlwZW9mIHNlbGYgPT0gJ29iamVjdCcgJiYgc2VsZiAmJiBzZWxmLk9iamVjdCA9PT0gT2JqZWN0ICYmIHNlbGY7XG5cbi8qKiBVc2VkIGFzIGEgcmVmZXJlbmNlIHRvIHRoZSBnbG9iYWwgb2JqZWN0LiAqL1xudmFyIHJvb3QgPSBmcmVlR2xvYmFsIHx8IGZyZWVTZWxmIHx8IEZ1bmN0aW9uKCdyZXR1cm4gdGhpcycpKCk7XG5cbmV4cG9ydCBkZWZhdWx0IHJvb3Q7XG4iLCIvKiogVXNlZCB0byBtYXRjaCBhIHNpbmdsZSB3aGl0ZXNwYWNlIGNoYXJhY3Rlci4gKi9cbnZhciByZVdoaXRlc3BhY2UgPSAvXFxzLztcblxuLyoqXG4gKiBVc2VkIGJ5IGBfLnRyaW1gIGFuZCBgXy50cmltRW5kYCB0byBnZXQgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlXG4gKiBjaGFyYWN0ZXIgb2YgYHN0cmluZ2AuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byBpbnNwZWN0LlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgaW5kZXggb2YgdGhlIGxhc3Qgbm9uLXdoaXRlc3BhY2UgY2hhcmFjdGVyLlxuICovXG5mdW5jdGlvbiB0cmltbWVkRW5kSW5kZXgoc3RyaW5nKSB7XG4gIHZhciBpbmRleCA9IHN0cmluZy5sZW5ndGg7XG5cbiAgd2hpbGUgKGluZGV4LS0gJiYgcmVXaGl0ZXNwYWNlLnRlc3Qoc3RyaW5nLmNoYXJBdChpbmRleCkpKSB7fVxuICByZXR1cm4gaW5kZXg7XG59XG5cbmV4cG9ydCBkZWZhdWx0IHRyaW1tZWRFbmRJbmRleDtcbiIsImltcG9ydCBpc09iamVjdCBmcm9tICcuL2lzT2JqZWN0LmpzJztcbmltcG9ydCBub3cgZnJvbSAnLi9ub3cuanMnO1xuaW1wb3J0IHRvTnVtYmVyIGZyb20gJy4vdG9OdW1iZXIuanMnO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyBmb3IgdGhvc2Ugd2l0aCB0aGUgc2FtZSBuYW1lIGFzIG90aGVyIGBsb2Rhc2hgIG1ldGhvZHMuICovXG52YXIgbmF0aXZlTWF4ID0gTWF0aC5tYXgsXG4gICAgbmF0aXZlTWluID0gTWF0aC5taW47XG5cbi8qKlxuICogQ3JlYXRlcyBhIGRlYm91bmNlZCBmdW5jdGlvbiB0aGF0IGRlbGF5cyBpbnZva2luZyBgZnVuY2AgdW50aWwgYWZ0ZXIgYHdhaXRgXG4gKiBtaWxsaXNlY29uZHMgaGF2ZSBlbGFwc2VkIHNpbmNlIHRoZSBsYXN0IHRpbWUgdGhlIGRlYm91bmNlZCBmdW5jdGlvbiB3YXNcbiAqIGludm9rZWQuIFRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgIG1ldGhvZCB0byBjYW5jZWxcbiAqIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvIGltbWVkaWF0ZWx5IGludm9rZSB0aGVtLlxuICogUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2Agc2hvdWxkIGJlIGludm9rZWQgb24gdGhlXG4gKiBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGAgdGltZW91dC4gVGhlIGBmdW5jYCBpcyBpbnZva2VkXG4gKiB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uLiBTdWJzZXF1ZW50XG4gKiBjYWxscyB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uIHJldHVybiB0aGUgcmVzdWx0IG9mIHRoZSBsYXN0IGBmdW5jYFxuICogaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIGRlYm91bmNlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy5kZWJvdW5jZWAgYW5kIGBfLnRocm90dGxlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIGRlYm91bmNlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIGRlbGF5LlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9ZmFsc2VdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtudW1iZXJ9IFtvcHRpb25zLm1heFdhaXRdXG4gKiAgVGhlIG1heGltdW0gdGltZSBgZnVuY2AgaXMgYWxsb3dlZCB0byBiZSBkZWxheWVkIGJlZm9yZSBpdCdzIGludm9rZWQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IGRlYm91bmNlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgY29zdGx5IGNhbGN1bGF0aW9ucyB3aGlsZSB0aGUgd2luZG93IHNpemUgaXMgaW4gZmx1eC5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdyZXNpemUnLCBfLmRlYm91bmNlKGNhbGN1bGF0ZUxheW91dCwgMTUwKSk7XG4gKlxuICogLy8gSW52b2tlIGBzZW5kTWFpbGAgd2hlbiBjbGlja2VkLCBkZWJvdW5jaW5nIHN1YnNlcXVlbnQgY2FsbHMuXG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgXy5kZWJvdW5jZShzZW5kTWFpbCwgMzAwLCB7XG4gKiAgICdsZWFkaW5nJzogdHJ1ZSxcbiAqICAgJ3RyYWlsaW5nJzogZmFsc2VcbiAqIH0pKTtcbiAqXG4gKiAvLyBFbnN1cmUgYGJhdGNoTG9nYCBpcyBpbnZva2VkIG9uY2UgYWZ0ZXIgMSBzZWNvbmQgb2YgZGVib3VuY2VkIGNhbGxzLlxuICogdmFyIGRlYm91bmNlZCA9IF8uZGVib3VuY2UoYmF0Y2hMb2csIDI1MCwgeyAnbWF4V2FpdCc6IDEwMDAgfSk7XG4gKiB2YXIgc291cmNlID0gbmV3IEV2ZW50U291cmNlKCcvc3RyZWFtJyk7XG4gKiBqUXVlcnkoc291cmNlKS5vbignbWVzc2FnZScsIGRlYm91bmNlZCk7XG4gKlxuICogLy8gQ2FuY2VsIHRoZSB0cmFpbGluZyBkZWJvdW5jZWQgaW52b2NhdGlvbi5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdwb3BzdGF0ZScsIGRlYm91bmNlZC5jYW5jZWwpO1xuICovXG5mdW5jdGlvbiBkZWJvdW5jZShmdW5jLCB3YWl0LCBvcHRpb25zKSB7XG4gIHZhciBsYXN0QXJncyxcbiAgICAgIGxhc3RUaGlzLFxuICAgICAgbWF4V2FpdCxcbiAgICAgIHJlc3VsdCxcbiAgICAgIHRpbWVySWQsXG4gICAgICBsYXN0Q2FsbFRpbWUsXG4gICAgICBsYXN0SW52b2tlVGltZSA9IDAsXG4gICAgICBsZWFkaW5nID0gZmFsc2UsXG4gICAgICBtYXhpbmcgPSBmYWxzZSxcbiAgICAgIHRyYWlsaW5nID0gdHJ1ZTtcblxuICBpZiAodHlwZW9mIGZ1bmMgIT0gJ2Z1bmN0aW9uJykge1xuICAgIHRocm93IG5ldyBUeXBlRXJyb3IoRlVOQ19FUlJPUl9URVhUKTtcbiAgfVxuICB3YWl0ID0gdG9OdW1iZXIod2FpdCkgfHwgMDtcbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICEhb3B0aW9ucy5sZWFkaW5nO1xuICAgIG1heGluZyA9ICdtYXhXYWl0JyBpbiBvcHRpb25zO1xuICAgIG1heFdhaXQgPSBtYXhpbmcgPyBuYXRpdmVNYXgodG9OdW1iZXIob3B0aW9ucy5tYXhXYWl0KSB8fCAwLCB3YWl0KSA6IG1heFdhaXQ7XG4gICAgdHJhaWxpbmcgPSAndHJhaWxpbmcnIGluIG9wdGlvbnMgPyAhIW9wdGlvbnMudHJhaWxpbmcgOiB0cmFpbGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIGludm9rZUZ1bmModGltZSkge1xuICAgIHZhciBhcmdzID0gbGFzdEFyZ3MsXG4gICAgICAgIHRoaXNBcmcgPSBsYXN0VGhpcztcblxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgbGFzdEludm9rZVRpbWUgPSB0aW1lO1xuICAgIHJlc3VsdCA9IGZ1bmMuYXBwbHkodGhpc0FyZywgYXJncyk7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGxlYWRpbmdFZGdlKHRpbWUpIHtcbiAgICAvLyBSZXNldCBhbnkgYG1heFdhaXRgIHRpbWVyLlxuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICAvLyBTdGFydCB0aGUgdGltZXIgZm9yIHRoZSB0cmFpbGluZyBlZGdlLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgLy8gSW52b2tlIHRoZSBsZWFkaW5nIGVkZ2UuXG4gICAgcmV0dXJuIGxlYWRpbmcgPyBpbnZva2VGdW5jKHRpbWUpIDogcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gcmVtYWluaW5nV2FpdCh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZSxcbiAgICAgICAgdGltZVdhaXRpbmcgPSB3YWl0IC0gdGltZVNpbmNlTGFzdENhbGw7XG5cbiAgICByZXR1cm4gbWF4aW5nXG4gICAgICA/IG5hdGl2ZU1pbih0aW1lV2FpdGluZywgbWF4V2FpdCAtIHRpbWVTaW5jZUxhc3RJbnZva2UpXG4gICAgICA6IHRpbWVXYWl0aW5nO1xuICB9XG5cbiAgZnVuY3Rpb24gc2hvdWxkSW52b2tlKHRpbWUpIHtcbiAgICB2YXIgdGltZVNpbmNlTGFzdENhbGwgPSB0aW1lIC0gbGFzdENhbGxUaW1lLFxuICAgICAgICB0aW1lU2luY2VMYXN0SW52b2tlID0gdGltZSAtIGxhc3RJbnZva2VUaW1lO1xuXG4gICAgLy8gRWl0aGVyIHRoaXMgaXMgdGhlIGZpcnN0IGNhbGwsIGFjdGl2aXR5IGhhcyBzdG9wcGVkIGFuZCB3ZSdyZSBhdCB0aGVcbiAgICAvLyB0cmFpbGluZyBlZGdlLCB0aGUgc3lzdGVtIHRpbWUgaGFzIGdvbmUgYmFja3dhcmRzIGFuZCB3ZSdyZSB0cmVhdGluZ1xuICAgIC8vIGl0IGFzIHRoZSB0cmFpbGluZyBlZGdlLCBvciB3ZSd2ZSBoaXQgdGhlIGBtYXhXYWl0YCBsaW1pdC5cbiAgICByZXR1cm4gKGxhc3RDYWxsVGltZSA9PT0gdW5kZWZpbmVkIHx8ICh0aW1lU2luY2VMYXN0Q2FsbCA+PSB3YWl0KSB8fFxuICAgICAgKHRpbWVTaW5jZUxhc3RDYWxsIDwgMCkgfHwgKG1heGluZyAmJiB0aW1lU2luY2VMYXN0SW52b2tlID49IG1heFdhaXQpKTtcbiAgfVxuXG4gIGZ1bmN0aW9uIHRpbWVyRXhwaXJlZCgpIHtcbiAgICB2YXIgdGltZSA9IG5vdygpO1xuICAgIGlmIChzaG91bGRJbnZva2UodGltZSkpIHtcbiAgICAgIHJldHVybiB0cmFpbGluZ0VkZ2UodGltZSk7XG4gICAgfVxuICAgIC8vIFJlc3RhcnQgdGhlIHRpbWVyLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgcmVtYWluaW5nV2FpdCh0aW1lKSk7XG4gIH1cblxuICBmdW5jdGlvbiB0cmFpbGluZ0VkZ2UodGltZSkge1xuICAgIHRpbWVySWQgPSB1bmRlZmluZWQ7XG5cbiAgICAvLyBPbmx5IGludm9rZSBpZiB3ZSBoYXZlIGBsYXN0QXJnc2Agd2hpY2ggbWVhbnMgYGZ1bmNgIGhhcyBiZWVuXG4gICAgLy8gZGVib3VuY2VkIGF0IGxlYXN0IG9uY2UuXG4gICAgaWYgKHRyYWlsaW5nICYmIGxhc3RBcmdzKSB7XG4gICAgICByZXR1cm4gaW52b2tlRnVuYyh0aW1lKTtcbiAgICB9XG4gICAgbGFzdEFyZ3MgPSBsYXN0VGhpcyA9IHVuZGVmaW5lZDtcbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gY2FuY2VsKCkge1xuICAgIGlmICh0aW1lcklkICE9PSB1bmRlZmluZWQpIHtcbiAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICB9XG4gICAgbGFzdEludm9rZVRpbWUgPSAwO1xuICAgIGxhc3RBcmdzID0gbGFzdENhbGxUaW1lID0gbGFzdFRoaXMgPSB0aW1lcklkID0gdW5kZWZpbmVkO1xuICB9XG5cbiAgZnVuY3Rpb24gZmx1c2goKSB7XG4gICAgcmV0dXJuIHRpbWVySWQgPT09IHVuZGVmaW5lZCA/IHJlc3VsdCA6IHRyYWlsaW5nRWRnZShub3coKSk7XG4gIH1cblxuICBmdW5jdGlvbiBkZWJvdW5jZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKSxcbiAgICAgICAgaXNJbnZva2luZyA9IHNob3VsZEludm9rZSh0aW1lKTtcblxuICAgIGxhc3RBcmdzID0gYXJndW1lbnRzO1xuICAgIGxhc3RUaGlzID0gdGhpcztcbiAgICBsYXN0Q2FsbFRpbWUgPSB0aW1lO1xuXG4gICAgaWYgKGlzSW52b2tpbmcpIHtcbiAgICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIGxlYWRpbmdFZGdlKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgICBpZiAobWF4aW5nKSB7XG4gICAgICAgIC8vIEhhbmRsZSBpbnZvY2F0aW9ucyBpbiBhIHRpZ2h0IGxvb3AuXG4gICAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICAgICAgcmV0dXJuIGludm9rZUZ1bmMobGFzdENhbGxUaW1lKTtcbiAgICAgIH1cbiAgICB9XG4gICAgaWYgKHRpbWVySWQgPT09IHVuZGVmaW5lZCkge1xuICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICB9XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuICBkZWJvdW5jZWQuY2FuY2VsID0gY2FuY2VsO1xuICBkZWJvdW5jZWQuZmx1c2ggPSBmbHVzaDtcbiAgcmV0dXJuIGRlYm91bmNlZDtcbn1cblxuZXhwb3J0IGRlZmF1bHQgZGVib3VuY2U7XG4iLCIvKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIHRoZVxuICogW2xhbmd1YWdlIHR5cGVdKGh0dHA6Ly93d3cuZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1lY21hc2NyaXB0LWxhbmd1YWdlLXR5cGVzKVxuICogb2YgYE9iamVjdGAuIChlLmcuIGFycmF5cywgZnVuY3Rpb25zLCBvYmplY3RzLCByZWdleGVzLCBgbmV3IE51bWJlcigwKWAsIGFuZCBgbmV3IFN0cmluZygnJylgKVxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgMC4xLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGFuIG9iamVjdCwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0KHt9KTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KFsxLCAyLCAzXSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChfLm5vb3ApO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QobnVsbCk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc09iamVjdCh2YWx1ZSkge1xuICB2YXIgdHlwZSA9IHR5cGVvZiB2YWx1ZTtcbiAgcmV0dXJuIHZhbHVlICE9IG51bGwgJiYgKHR5cGUgPT0gJ29iamVjdCcgfHwgdHlwZSA9PSAnZnVuY3Rpb24nKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgaXNPYmplY3Q7XG4iLCIvKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIG9iamVjdC1saWtlLiBBIHZhbHVlIGlzIG9iamVjdC1saWtlIGlmIGl0J3Mgbm90IGBudWxsYFxuICogYW5kIGhhcyBhIGB0eXBlb2ZgIHJlc3VsdCBvZiBcIm9iamVjdFwiLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIG9iamVjdC1saWtlLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKHt9KTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShbMSwgMiwgM10pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKF8ubm9vcCk7XG4gKiAvLyA9PiBmYWxzZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKG51bGwpO1xuICogLy8gPT4gZmFsc2VcbiAqL1xuZnVuY3Rpb24gaXNPYmplY3RMaWtlKHZhbHVlKSB7XG4gIHJldHVybiB2YWx1ZSAhPSBudWxsICYmIHR5cGVvZiB2YWx1ZSA9PSAnb2JqZWN0Jztcbn1cblxuZXhwb3J0IGRlZmF1bHQgaXNPYmplY3RMaWtlO1xuIiwiaW1wb3J0IGJhc2VHZXRUYWcgZnJvbSAnLi9fYmFzZUdldFRhZy5qcyc7XG5pbXBvcnQgaXNPYmplY3RMaWtlIGZyb20gJy4vaXNPYmplY3RMaWtlLmpzJztcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIHN5bWJvbFRhZyA9ICdbb2JqZWN0IFN5bWJvbF0nO1xuXG4vKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIGNsYXNzaWZpZWQgYXMgYSBgU3ltYm9sYCBwcmltaXRpdmUgb3Igb2JqZWN0LlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGEgc3ltYm9sLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNTeW1ib2woU3ltYm9sLml0ZXJhdG9yKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzU3ltYm9sKCdhYmMnKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzU3ltYm9sKHZhbHVlKSB7XG4gIHJldHVybiB0eXBlb2YgdmFsdWUgPT0gJ3N5bWJvbCcgfHxcbiAgICAoaXNPYmplY3RMaWtlKHZhbHVlKSAmJiBiYXNlR2V0VGFnKHZhbHVlKSA9PSBzeW1ib2xUYWcpO1xufVxuXG5leHBvcnQgZGVmYXVsdCBpc1N5bWJvbDtcbiIsImltcG9ydCByb290IGZyb20gJy4vX3Jvb3QuanMnO1xuXG4vKipcbiAqIEdldHMgdGhlIHRpbWVzdGFtcCBvZiB0aGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0aGF0IGhhdmUgZWxhcHNlZCBzaW5jZVxuICogdGhlIFVuaXggZXBvY2ggKDEgSmFudWFyeSAxOTcwIDAwOjAwOjAwIFVUQykuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAyLjQuMFxuICogQGNhdGVnb3J5IERhdGVcbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIHRpbWVzdGFtcC5cbiAqIEBleGFtcGxlXG4gKlxuICogXy5kZWZlcihmdW5jdGlvbihzdGFtcCkge1xuICogICBjb25zb2xlLmxvZyhfLm5vdygpIC0gc3RhbXApO1xuICogfSwgXy5ub3coKSk7XG4gKiAvLyA9PiBMb2dzIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIGl0IHRvb2sgZm9yIHRoZSBkZWZlcnJlZCBpbnZvY2F0aW9uLlxuICovXG52YXIgbm93ID0gZnVuY3Rpb24oKSB7XG4gIHJldHVybiByb290LkRhdGUubm93KCk7XG59O1xuXG5leHBvcnQgZGVmYXVsdCBub3c7XG4iLCJpbXBvcnQgYmFzZVRyaW0gZnJvbSAnLi9fYmFzZVRyaW0uanMnO1xuaW1wb3J0IGlzT2JqZWN0IGZyb20gJy4vaXNPYmplY3QuanMnO1xuaW1wb3J0IGlzU3ltYm9sIGZyb20gJy4vaXNTeW1ib2wuanMnO1xuXG4vKiogVXNlZCBhcyByZWZlcmVuY2VzIGZvciB2YXJpb3VzIGBOdW1iZXJgIGNvbnN0YW50cy4gKi9cbnZhciBOQU4gPSAwIC8gMDtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IGJhZCBzaWduZWQgaGV4YWRlY2ltYWwgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzQmFkSGV4ID0gL15bLStdMHhbMC05YS1mXSskL2k7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiaW5hcnkgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzQmluYXJ5ID0gL14wYlswMV0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3Qgb2N0YWwgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzT2N0YWwgPSAvXjBvWzAtN10rJC9pO1xuXG4vKiogQnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMgd2l0aG91dCBhIGRlcGVuZGVuY3kgb24gYHJvb3RgLiAqL1xudmFyIGZyZWVQYXJzZUludCA9IHBhcnNlSW50O1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBudW1iZXIuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSA0LjAuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHByb2Nlc3MuXG4gKiBAcmV0dXJucyB7bnVtYmVyfSBSZXR1cm5zIHRoZSBudW1iZXIuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8udG9OdW1iZXIoMy4yKTtcbiAqIC8vID0+IDMuMlxuICpcbiAqIF8udG9OdW1iZXIoTnVtYmVyLk1JTl9WQUxVRSk7XG4gKiAvLyA9PiA1ZS0zMjRcbiAqXG4gKiBfLnRvTnVtYmVyKEluZmluaXR5KTtcbiAqIC8vID0+IEluZmluaXR5XG4gKlxuICogXy50b051bWJlcignMy4yJyk7XG4gKiAvLyA9PiAzLjJcbiAqL1xuZnVuY3Rpb24gdG9OdW1iZXIodmFsdWUpIHtcbiAgaWYgKHR5cGVvZiB2YWx1ZSA9PSAnbnVtYmVyJykge1xuICAgIHJldHVybiB2YWx1ZTtcbiAgfVxuICBpZiAoaXNTeW1ib2wodmFsdWUpKSB7XG4gICAgcmV0dXJuIE5BTjtcbiAgfVxuICBpZiAoaXNPYmplY3QodmFsdWUpKSB7XG4gICAgdmFyIG90aGVyID0gdHlwZW9mIHZhbHVlLnZhbHVlT2YgPT0gJ2Z1bmN0aW9uJyA/IHZhbHVlLnZhbHVlT2YoKSA6IHZhbHVlO1xuICAgIHZhbHVlID0gaXNPYmplY3Qob3RoZXIpID8gKG90aGVyICsgJycpIDogb3RoZXI7XG4gIH1cbiAgaWYgKHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykge1xuICAgIHJldHVybiB2YWx1ZSA9PT0gMCA/IHZhbHVlIDogK3ZhbHVlO1xuICB9XG4gIHZhbHVlID0gYmFzZVRyaW0odmFsdWUpO1xuICB2YXIgaXNCaW5hcnkgPSByZUlzQmluYXJ5LnRlc3QodmFsdWUpO1xuICByZXR1cm4gKGlzQmluYXJ5IHx8IHJlSXNPY3RhbC50ZXN0KHZhbHVlKSlcbiAgICA/IGZyZWVQYXJzZUludCh2YWx1ZS5zbGljZSgyKSwgaXNCaW5hcnkgPyAyIDogOClcbiAgICA6IChyZUlzQmFkSGV4LnRlc3QodmFsdWUpID8gTkFOIDogK3ZhbHVlKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgdG9OdW1iZXI7XG4iLCJ2YXIgZztcblxuLy8gVGhpcyB3b3JrcyBpbiBub24tc3RyaWN0IG1vZGVcbmcgPSAoZnVuY3Rpb24oKSB7XG5cdHJldHVybiB0aGlzO1xufSkoKTtcblxudHJ5IHtcblx0Ly8gVGhpcyB3b3JrcyBpZiBldmFsIGlzIGFsbG93ZWQgKHNlZSBDU1ApXG5cdGcgPSBnIHx8IG5ldyBGdW5jdGlvbihcInJldHVybiB0aGlzXCIpKCk7XG59IGNhdGNoIChlKSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgdGhlIHdpbmRvdyByZWZlcmVuY2UgaXMgYXZhaWxhYmxlXG5cdGlmICh0eXBlb2Ygd2luZG93ID09PSBcIm9iamVjdFwiKSBnID0gd2luZG93O1xufVxuXG4vLyBnIGNhbiBzdGlsbCBiZSB1bmRlZmluZWQsIGJ1dCBub3RoaW5nIHRvIGRvIGFib3V0IGl0Li4uXG4vLyBXZSByZXR1cm4gdW5kZWZpbmVkLCBpbnN0ZWFkIG9mIG5vdGhpbmcgaGVyZSwgc28gaXQnc1xuLy8gZWFzaWVyIHRvIGhhbmRsZSB0aGlzIGNhc2UuIGlmKCFnbG9iYWwpIHsgLi4ufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGc7XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBBdXRvY29tcGxldGVGb3JtLCB7XG4gICAgRXZlbnRzIGFzIEF1dG9jb21wbGV0ZUV2ZW50cyxcbn0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL2F1dG9jb21wbGV0ZS1mb3JtL2F1dG9jb21wbGV0ZS1mb3JtJztcbmltcG9ydCBBamF4UHJvdmlkZXIgZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL2FqYXgtcHJvdmlkZXIvYWpheC1wcm92aWRlcic7XG5pbXBvcnQgZGVib3VuY2UgZnJvbSAnbG9kYXNoLWVzL2RlYm91bmNlJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUXVpY2tPcmRlclJvdyBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGFqYXhQcm92aWRlcjogQWpheFByb3ZpZGVyO1xuICAgIHByb3RlY3RlZCBhdXRvY29tcGxldGVJbnB1dDogQXV0b2NvbXBsZXRlRm9ybTtcbiAgICBwcm90ZWN0ZWQgcXVhbnRpdHlJbnB1dDogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgaW5jcmVtZW50QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZGVjcmVtZW50QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmFqYXhQcm92aWRlciA9IDxBamF4UHJvdmlkZXI+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcHJvdmlkZXJgKVswXTtcbiAgICAgICAgdGhpcy5hdXRvY29tcGxldGVJbnB1dCA9IDxBdXRvY29tcGxldGVGb3JtPnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmF1dG9jb21wbGV0ZUZvcm1DbGFzc05hbWUpWzBdO1xuICAgICAgICB0aGlzLnJlZ2lzdGVyUXVhbnRpdHlJbnB1dCgpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByZWdpc3RlclF1YW50aXR5SW5wdXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5jcmVtZW50QnV0dG9uID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgICh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24taW5jcmVtZW50YClbMF0gfHxcbiAgICAgICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9LXBhcnRpYWxfX2J1dHRvbi1pbmNyZW1lbnRgKVswXSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5kZWNyZW1lbnRCdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbi1kZWNyZW1lbnRgKVswXSB8fFxuICAgICAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX0tcGFydGlhbF9fYnV0dG9uLWRlY3JlbWVudGApWzBdKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnF1YW50aXR5SW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD4oXG4gICAgICAgICAgICAodGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcXVhbnRpdHlgKVswXSB8fFxuICAgICAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX0tcGFydGlhbF9fcXVhbnRpdHlgKVswXSlcbiAgICAgICAgKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmF1dG9jb21wbGV0ZUlucHV0LmFkZEV2ZW50TGlzdGVuZXIoQXV0b2NvbXBsZXRlRXZlbnRzLlNFVCwgKCkgPT4gdGhpcy5vbkF1dG9jb21wbGV0ZVNldCgpKTtcbiAgICAgICAgdGhpcy5hdXRvY29tcGxldGVJbnB1dC5hZGRFdmVudExpc3RlbmVyKEF1dG9jb21wbGV0ZUV2ZW50cy5VTlNFVCwgKCkgPT4gdGhpcy5vbkF1dG9jb21wbGV0ZVVuc2V0KCkpO1xuICAgICAgICB0aGlzLm1hcFF1YW50aXR5SW5wdXRDaGFuZ2UoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwUXVhbnRpdHlJbnB1dENoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbmNyZW1lbnRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLmluY3JlbWVudFZhbHVlKGV2ZW50KSk7XG4gICAgICAgIHRoaXMuZGVjcmVtZW50QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5kZWNyZW1lbnRWYWx1ZShldmVudCkpO1xuICAgICAgICB0aGlzLnF1YW50aXR5SW5wdXQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdpbnB1dCcsXG4gICAgICAgICAgICBkZWJvdW5jZSgoKSA9PiB7XG4gICAgICAgICAgICAgICAgdGhpcy5vblF1YW50aXR5Q2hhbmdlKCk7XG4gICAgICAgICAgICB9LCB0aGlzLmF1dG9jb21wbGV0ZUlucHV0LmRlYm91bmNlRGVsYXkpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkF1dG9jb21wbGV0ZVNldCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5yZWxvYWRGaWVsZCh0aGlzLmF1dG9jb21wbGV0ZUlucHV0LmlucHV0VmFsdWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkF1dG9jb21wbGV0ZVVuc2V0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbG9hZEZpZWxkKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uUXVhbnRpdHlDaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucmVsb2FkRmllbGQodGhpcy5hdXRvY29tcGxldGVJbnB1dC5pbnB1dFZhbHVlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5jcmVtZW50VmFsdWUoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGNvbnN0IHZhbHVlID0gTnVtYmVyKHRoaXMucXVhbnRpdHlJbnB1dC52YWx1ZSk7XG4gICAgICAgIGNvbnN0IHBvdGVudGlhbFZhbHVlID0gdmFsdWUgKyB0aGlzLnN0ZXA7XG4gICAgICAgIGlmICh2YWx1ZSA8IHRoaXMubWF4UXVhbnRpdHkpIHtcbiAgICAgICAgICAgIHRoaXMucXVhbnRpdHlJbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICB0aGlzLm9uUXVhbnRpdHlDaGFuZ2UoKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBkZWNyZW1lbnRWYWx1ZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgY29uc3QgdmFsdWUgPSBOdW1iZXIodGhpcy5xdWFudGl0eUlucHV0LnZhbHVlKTtcbiAgICAgICAgY29uc3QgcG90ZW50aWFsVmFsdWUgPSB2YWx1ZSAtIHRoaXMuc3RlcDtcbiAgICAgICAgaWYgKHBvdGVudGlhbFZhbHVlID49IHRoaXMubWluUXVhbnRpdHkpIHtcbiAgICAgICAgICAgIHRoaXMucXVhbnRpdHlJbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICB0aGlzLm9uUXVhbnRpdHlDaGFuZ2UoKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIGFzeW5jIHJlbG9hZEZpZWxkKHNrdTogc3RyaW5nID0gJycpIHtcbiAgICAgICAgY29uc3QgcXVhbnRpdHlJbnB1dFZhbHVlID0gcGFyc2VJbnQodGhpcy5xdWFudGl0eVZhbHVlKTtcblxuICAgICAgICB0aGlzLmFqYXhQcm92aWRlci5xdWVyeVBhcmFtcy5zZXQoJ3NrdScsIHNrdSk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLnNldCgnaW5kZXgnLCB0aGlzLmFqYXhQcm92aWRlci5nZXRBdHRyaWJ1dGUoJ2NsYXNzJykuc3BsaXQoJy0nKS5wb3AoKS50cmltKCkpO1xuXG4gICAgICAgIGlmICghIXF1YW50aXR5SW5wdXRWYWx1ZSkge1xuICAgICAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIucXVlcnlQYXJhbXMuc2V0KCdxdWFudGl0eScsIGAke3F1YW50aXR5SW5wdXRWYWx1ZX1gKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGF3YWl0IHRoaXMuYWpheFByb3ZpZGVyLmZldGNoKCk7XG4gICAgICAgIHRoaXMucmVnaXN0ZXJRdWFudGl0eUlucHV0KCk7XG4gICAgICAgIHRoaXMubWFwUXVhbnRpdHlJbnB1dENoYW5nZSgpO1xuXG4gICAgICAgIGlmICghIXNrdSkge1xuICAgICAgICAgICAgdGhpcy5xdWFudGl0eUlucHV0LmZvY3VzKCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHF1YW50aXR5VmFsdWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMucXVhbnRpdHlJbnB1dC52YWx1ZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGF1dG9jb21wbGV0ZUZvcm1DbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdhdXRvY29tcGxldGUtZm9ybS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBtaW5RdWFudGl0eSgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMucXVhbnRpdHlJbnB1dC5nZXRBdHRyaWJ1dGUoJ21pbicpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1heFF1YW50aXR5KCk6IG51bWJlciB7XG4gICAgICAgIGNvbnN0IG1heCA9IE51bWJlcih0aGlzLnF1YW50aXR5SW5wdXQuZ2V0QXR0cmlidXRlKCdtYXgnKSk7XG5cbiAgICAgICAgcmV0dXJuIG1heCA+IDAgJiYgbWF4ID4gdGhpcy5taW5RdWFudGl0eSA/IG1heCA6IEluZmluaXR5O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc3RlcCgpOiBudW1iZXIge1xuICAgICAgICBjb25zdCBzdGVwID0gTnVtYmVyKHRoaXMucXVhbnRpdHlJbnB1dC5nZXRBdHRyaWJ1dGUoJ3N0ZXAnKSk7XG5cbiAgICAgICAgcmV0dXJuIHN0ZXAgPiAwID8gc3RlcCA6IDE7XG4gICAgfVxufVxuIiwiLyogdHNsaW50OmRpc2FibGU6IG1heC1maWxlLWxpbmUtY291bnQgKi9cbmltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgQWpheFByb3ZpZGVyIGZyb20gJy4uLy4uLy4uL2NvbXBvbmVudHMvbW9sZWN1bGVzL2FqYXgtcHJvdmlkZXIvYWpheC1wcm92aWRlcic7XG5pbXBvcnQgZGVib3VuY2UgZnJvbSAnbG9kYXNoLWVzL2RlYm91bmNlJztcblxuZXhwb3J0IGVudW0gRXZlbnRzIHtcbiAgICBGRVRDSElORyA9ICdmZXRjaGluZycsXG4gICAgRkVUQ0hFRCA9ICdmZXRjaGVkJyxcbiAgICBDSEFOR0UgPSAnY2hhbmdlJyxcbiAgICBTRVQgPSAnc2V0JyxcbiAgICBVTlNFVCA9ICd1bnNldCcsXG59XG5cbi8qKlxuICogQGV2ZW50IGZldGNoaW5nIEFuIGV2ZW50IHdoaWNoIGlzIHRyaWdnZXJlZCB3aGVuIGFuIGFqYXggcmVxdWVzdCBpcyBzZW50IHRvIHRoZSBzZXJ2ZXIuXG4gKiBAZXZlbnQgZmV0Y2hlZCBBbiBldmVudCB3aGljaCBpcyB0cmlnZ2VyZWQgd2hlbiBhbiBhamF4IHJlcXVlc3QgaXMgY2xvc2VkLlxuICogQGV2ZW50IGNoYW5nZSBBbiBldmVudCB3aGljaCBpcyB0cmlnZ2VyZWQgd2hlbiB0aGUgc2VhcmNoIGZpZWxkIGlzIGNoYW5nZWQuXG4gKiBAZXZlbnQgc2V0IEFuIGV2ZW50IHdoaWNoIGlzIHRyaWdnZXJlZCB3aGVuIHRoZSBlbGVtZW50IG9mIGFuIGF1dG9jb21wbGV0ZSBzdWdnZXN0aW9uIGlzIHNlbGVjdGVkLlxuICogQGV2ZW50IHVuc2V0IEFuIGV2ZW50IHdoaWNoIGlzIHRyaWdnZXJlZCB3aGVuIHRoZSBlbGVtZW50IG9mIGFuIGF1dG9jb21wbGV0ZSBzdWdnZXN0aW9uIGlzIHJlbW92ZWQuXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEF1dG9jb21wbGV0ZUZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHRoZSBBamF4IG9wZXJhdGlvbnMuXG4gICAgICovXG4gICAgYWpheFByb3ZpZGVyOiBBamF4UHJvdmlkZXI7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgdGV4dCBpbnB1dCBlbGVtZW50LlxuICAgICAqL1xuICAgIHRleHRJbnB1dDogSFRNTElucHV0RWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFRoZSB2YWx1ZSBpbnB1dCBlbGVtZW50LlxuICAgICAqL1xuICAgIHZhbHVlSW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgY29udGFpbnMgb2YgdGhlIHN1Z2dlc3Rpb25zLlxuICAgICAqL1xuICAgIHN1Z2dlc3Rpb25zQ29udGFpbmVyOiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIENvbGxlY3Rpb24gb2YgdGhlIHN1Z2dlc3Rpb25zIGl0ZW1zLlxuICAgICAqL1xuICAgIHN1Z2dlc3Rpb25JdGVtczogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIFRoZSB0cmlnZ2VyIG9mIHRoZSBmb3JtIGNsZWFyaW5nLlxuICAgICAqL1xuICAgIGNsZWFuQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFRoZSBsYXN0IHNlbGVjdGVkIHNhZ2dlc3Rpb24gaXRlbS5cbiAgICAgKi9cbiAgICBsYXN0U2VsZWN0ZWRJdGVtOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgaW5qZWN0b3JzRXh0cmFRdWVyeVZhbHVlTGlzdDogSFRNTFNlbGVjdEVsZW1lbnRbXSB8IEhUTUxJbnB1dEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgZXh0cmFRdWVyeVZhbHVlcyA9IG5ldyBNYXAoKTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmFqYXhQcm92aWRlciA9IDxBamF4UHJvdmlkZXI+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcHJvdmlkZXJgKVswXTtcbiAgICAgICAgdGhpcy50ZXh0SW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190ZXh0LWlucHV0YClbMF07XG4gICAgICAgIHRoaXMudmFsdWVJbnB1dCA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3ZhbHVlLWlucHV0YClbMF07XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc3VnZ2VzdGlvbnNgKVswXTtcbiAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19jbGVhbi1idXR0b25gKVswXTtcblxuICAgICAgICBpZiAodGhpcy5pbmplY3RvcnNFeHRyYVF1ZXJ5VmFsdWVDbGFzc05hbWUpIHtcbiAgICAgICAgICAgIHRoaXMuaW5qZWN0b3JzRXh0cmFRdWVyeVZhbHVlTGlzdCA9IDxIVE1MU2VsZWN0RWxlbWVudFtdIHwgSFRNTElucHV0RWxlbWVudFtdPihcbiAgICAgICAgICAgICAgICBBcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pbmplY3RvcnNFeHRyYVF1ZXJ5VmFsdWVDbGFzc05hbWUpKVxuICAgICAgICAgICAgKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLmF1dG9Jbml0RW5hYmxlZCkge1xuICAgICAgICAgICAgdGhpcy5hdXRvTG9hZEluaXQoKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50ZXh0SW5wdXQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdpbnB1dCcsXG4gICAgICAgICAgICBkZWJvdW5jZSgoKSA9PiB0aGlzLm9uSW5wdXQoKSwgdGhpcy5kZWJvdW5jZURlbGF5KSxcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy50ZXh0SW5wdXQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdibHVyJyxcbiAgICAgICAgICAgIGRlYm91bmNlKCgpID0+IHRoaXMub25CbHVyKCksIHRoaXMuZGVib3VuY2VEZWxheSksXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMudGV4dElucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2ZvY3VzJywgKCkgPT4gdGhpcy5vbkZvY3VzKCkpO1xuICAgICAgICB0aGlzLnRleHRJbnB1dC5hZGRFdmVudExpc3RlbmVyKCdrZXlkb3duJywgKGV2ZW50KSA9PiB0aGlzLm9uS2V5RG93bihldmVudCkpO1xuICAgICAgICBpZiAodGhpcy5jbGVhbkJ1dHRvbikge1xuICAgICAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25DbGVhbkJ1dHRvbkNsaWNrKCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGF1dG9Mb2FkSW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50ZXh0SW5wdXQuZm9jdXMoKTtcbiAgICAgICAgdGhpcy5sb2FkU3VnZ2VzdGlvbnMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DbGVhbkJ1dHRvbkNsaWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNsZWFuKCk7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFdmVudHMuVU5TRVQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkJsdXIoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRm9jdXMoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VGV4dC5sZW5ndGggPCB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLnNob3dTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbklucHV0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRXZlbnRzLkNIQU5HRSk7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VGV4dC5sZW5ndGggPj0gdGhpcy5taW5MZXR0ZXJzKSB7XG4gICAgICAgICAgICB0aGlzLmxvYWRTdWdnZXN0aW9ucygpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgICAgdGhpcy5oaWRlU3VnZ2VzdGlvbnMoKTtcbiAgICAgICAgaWYgKCEhdGhpcy5pbnB1dFZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSAnJztcbiAgICAgICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFdmVudHMuVU5TRVQpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNob3dTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZVN1Z2dlc3Rpb25zKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRRdWVyeVBhcmFtcygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5leHRyYVF1ZXJ5VmFsdWVzLmNsZWFyKCk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLmNsZWFyKCk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLnNldCh0aGlzLnF1ZXJ5U3RyaW5nLCB0aGlzLmlucHV0VGV4dCk7XG5cbiAgICAgICAgaWYgKCF0aGlzLmluamVjdG9yc0V4dHJhUXVlcnlWYWx1ZUxpc3QgfHwgIXRoaXMuaW5qZWN0b3JzRXh0cmFRdWVyeVZhbHVlTGlzdC5sZW5ndGgpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuaW5qZWN0b3JzRXh0cmFRdWVyeVZhbHVlTGlzdC5mb3JFYWNoKChpdGVtKSA9PiB7XG4gICAgICAgICAgICBpZiAoIWl0ZW0ubmFtZSB8fCAhaXRlbS52YWx1ZSkge1xuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIucXVlcnlQYXJhbXMuc2V0KGl0ZW0ubmFtZSwgaXRlbS52YWx1ZSk7XG4gICAgICAgICAgICB0aGlzLmV4dHJhUXVlcnlWYWx1ZXMuc2V0KGl0ZW0ubmFtZSwgaXRlbS52YWx1ZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNlbmRzIGEgcmVxdWVzdCB0byB0aGUgc2VydmVyIGFuZCB0cmlnZ2VycyB0aGUgY3VzdG9tIGZldGNoaW5nIGFuZCBmZXRjaGVkIGV2ZW50cy5cbiAgICAgKi9cbiAgICBhc3luYyBsb2FkU3VnZ2VzdGlvbnMoKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFdmVudHMuRkVUQ0hJTkcpO1xuICAgICAgICB0aGlzLnNob3dTdWdnZXN0aW9ucygpO1xuICAgICAgICB0aGlzLnNldFF1ZXJ5UGFyYW1zKCk7XG5cbiAgICAgICAgYXdhaXQgdGhpcy5hamF4UHJvdmlkZXIuZmV0Y2goKTtcbiAgICAgICAgLyogdHNsaW50OmRpc2FibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbkl0ZW1zID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbShcbiAgICAgICAgICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5zdWdnZXN0ZWRJdGVtQ2xhc3NOYW1lKSB8fFxuICAgICAgICAgICAgICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyLnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5zdWdnZXN0ZWRJdGVtU2VsZWN0b3IpLFxuICAgICAgICAgICAgKVxuICAgICAgICApO1xuICAgICAgICAvKiB0c2xpbnQ6ZW5hYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgICAgICB0aGlzLmxhc3RTZWxlY3RlZEl0ZW0gPSB0aGlzLnN1Z2dlc3Rpb25JdGVtc1swXTtcbiAgICAgICAgdGhpcy5tYXBTdWdnZXN0aW9uSXRlbXNFdmVudHMoKTtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEV2ZW50cy5GRVRDSEVEKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwU3VnZ2VzdGlvbkl0ZW1zRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25JdGVtcy5mb3JFYWNoKChpdGVtOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25JdGVtQ2xpY2soaXRlbSkpO1xuICAgICAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdtb3VzZW92ZXInLCAoKSA9PiB0aGlzLm9uSXRlbVNlbGVjdGVkKGl0ZW0pKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSXRlbUNsaWNrKGl0ZW06IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXRUZXh0ID0gaXRlbS50ZXh0Q29udGVudC50cmltKCk7XG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9IGl0ZW0uZ2V0QXR0cmlidXRlKHRoaXMudmFsdWVBdHRyaWJ1dGVOYW1lKTtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEV2ZW50cy5TRVQsIHtcbiAgICAgICAgICAgIHRleHQ6IHRoaXMuaW5wdXRUZXh0LFxuICAgICAgICAgICAgdmFsdWU6IHRoaXMuaW5wdXRWYWx1ZSxcbiAgICAgICAgICAgIGV4dHJhVmFsdWVzOiB0aGlzLmV4dHJhUXVlcnlWYWx1ZXMsXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkl0ZW1TZWxlY3RlZChpdGVtOiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNoYW5nZVNlbGVjdGVkSXRlbShpdGVtKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgY2hhbmdlU2VsZWN0ZWRJdGVtKGl0ZW06IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMubGFzdFNlbGVjdGVkSXRlbS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuc2VsZWN0ZWRJbnB1dENsYXNzKTtcbiAgICAgICAgaXRlbS5jbGFzc0xpc3QuYWRkKHRoaXMuc2VsZWN0ZWRJbnB1dENsYXNzKTtcbiAgICAgICAgdGhpcy5sYXN0U2VsZWN0ZWRJdGVtID0gaXRlbTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duKGV2ZW50OiBLZXlib2FyZEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5zdWdnZXN0aW9uSXRlbXMgJiYgdGhpcy5pbnB1dFRleHQubGVuZ3RoIDwgdGhpcy5taW5MZXR0ZXJzKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgICAgc3dpdGNoIChldmVudC5rZXkpIHtcbiAgICAgICAgICAgIGNhc2UgJ0Fycm93VXAnOlxuICAgICAgICAgICAgICAgIHRoaXMub25LZXlEb3duQXJyb3dVcCgpO1xuICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgY2FzZSAnQXJyb3dEb3duJzpcbiAgICAgICAgICAgICAgICB0aGlzLm9uS2V5RG93bkFycm93RG93bigpO1xuICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgY2FzZSAnRW50ZXInOlxuICAgICAgICAgICAgICAgIHRoaXMub25LZXlEb3duRW50ZXIoZXZlbnQpO1xuICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uS2V5RG93bkFycm93VXAoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGxhc3RTZWxlY3RlZEl0ZW1JbmRleCA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zLmluZGV4T2YodGhpcy5sYXN0U2VsZWN0ZWRJdGVtKTtcbiAgICAgICAgY29uc3QgZWxlbWVudEluZGV4ID0gbGFzdFNlbGVjdGVkSXRlbUluZGV4IC0gMTtcbiAgICAgICAgY29uc3QgbGFzdFN1Z2dlc3Rpb25JdGVtSW5kZXggPSB0aGlzLnN1Z2dlc3Rpb25JdGVtcy5sZW5ndGggLSAxO1xuICAgICAgICBjb25zdCBpdGVtID0gdGhpcy5zdWdnZXN0aW9uSXRlbXNbZWxlbWVudEluZGV4IDwgMCA/IGxhc3RTdWdnZXN0aW9uSXRlbUluZGV4IDogZWxlbWVudEluZGV4XTtcbiAgICAgICAgdGhpcy5jaGFuZ2VTZWxlY3RlZEl0ZW0oaXRlbSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uS2V5RG93bkFycm93RG93bigpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGFzdFNlbGVjdGVkSXRlbUluZGV4ID0gdGhpcy5zdWdnZXN0aW9uSXRlbXMuaW5kZXhPZih0aGlzLmxhc3RTZWxlY3RlZEl0ZW0pO1xuICAgICAgICBjb25zdCBlbGVtZW50SW5kZXggPSBsYXN0U2VsZWN0ZWRJdGVtSW5kZXggKyAxO1xuICAgICAgICBjb25zdCBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zLmxlbmd0aCAtIDE7XG4gICAgICAgIGNvbnN0IGl0ZW0gPSB0aGlzLnN1Z2dlc3Rpb25JdGVtc1tlbGVtZW50SW5kZXggPiBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA/IDAgOiBlbGVtZW50SW5kZXhdO1xuICAgICAgICB0aGlzLmNoYW5nZVNlbGVjdGVkSXRlbShpdGVtKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duRW50ZXIoZXZlbnQ6IEtleWJvYXJkRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5sYXN0U2VsZWN0ZWRJdGVtLmNsaWNrKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogQ2xlYXJzIHRoZSBpbnB1dCB2YWx1ZSBhbmQgdGhlIHR5cGVkIHRleHQuXG4gICAgICovXG4gICAgY2xlYW4oKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXRUZXh0ID0gJyc7XG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9ICcnO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIGNzcyBxdWVyeSBzZWxlY3RvciBvZiB0aGUgc2VsZWN0ZWQgc3VnZ2VzdGlvbiBpdGVtcy5cbiAgICAgKi9cbiAgICBnZXQgc2VsZWN0ZWRJbnB1dENsYXNzKCk6IHN0cmluZyB7XG4gICAgICAgIC8qIHRzbGludDpkaXNhYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgICAgICByZXR1cm4gYCR7dGhpcy5zdWdnZXN0ZWRJdGVtQ2xhc3NOYW1lfS0tc2VsZWN0ZWRgIHx8IGAke3RoaXMuc3VnZ2VzdGVkSXRlbVNlbGVjdG9yfS0tc2VsZWN0ZWRgLnN1YnN0cigxKTtcbiAgICAgICAgLyogdHNsaW50OmVuYWJsZTogZGVwcmVjYXRpb24gKi9cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSB0eXBlZCB0ZXh0IGZyb20gdGhlIGZvcm0gZmllbGQuXG4gICAgICovXG4gICAgZ2V0IGlucHV0VGV4dCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy50ZXh0SW5wdXQudmFsdWUudHJpbSgpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgYW4gaW5wdXQgdGV4dC5cbiAgICAgKiBAcGFyYW0gdmFsdWUgQSB0eXBlZCB0ZXh0IGluIHRoZSBpbnB1dCBmaWVsZC5cbiAgICAgKi9cbiAgICBzZXQgaW5wdXRUZXh0KHZhbHVlOiBzdHJpbmcpIHtcbiAgICAgICAgdGhpcy50ZXh0SW5wdXQudmFsdWUgPSB2YWx1ZTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSB2YWx1ZSBhdHRyaWJ1dGUgZnJvbSB0aGUgaW5wdXQgZm9ybSBmaWVsZC5cbiAgICAgKi9cbiAgICBnZXQgaW5wdXRWYWx1ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy52YWx1ZUlucHV0LnZhbHVlO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIGlucHV0IHZhbHVlLlxuICAgICAqL1xuICAgIHNldCBpbnB1dFZhbHVlKHZhbHVlOiBzdHJpbmcpIHtcbiAgICAgICAgdGhpcy52YWx1ZUlucHV0LnZhbHVlID0gdmFsdWU7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgY3NzIHF1ZXJ5IHNlbGVjdG9yIGZvciB0aGUgYWpheFByb3ZpZGVyIGNvbmZpZ3VyYXRpb24uXG4gICAgICovXG4gICAgZ2V0IHF1ZXJ5U3RyaW5nKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncXVlcnktc3RyaW5nJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgdmFsdWUgYXR0cmlidXRlIG5hbWUgZm9yIHRoZSBpbnB1dCBlbGVtZW50IGNvbmZpZ3VyYXRpb24uXG4gICAgICovXG4gICAgZ2V0IHZhbHVlQXR0cmlidXRlTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3ZhbHVlLWF0dHJpYnV0ZS1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgY3NzIHF1ZXJ5IHNlbGVjdG9yIG9mIHRoZSBzdWdnZXN0aW9uIGl0ZW1zLlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHN1Z2dlc3RlZEl0ZW1DbGFzc05hbWUoKSBpbnN0ZWFkLlxuICAgICAqL1xuICAgIGdldCBzdWdnZXN0ZWRJdGVtU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzdWdnZXN0ZWQtaXRlbS1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc3VnZ2VzdGVkSXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3N1Z2dlc3RlZC1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGluamVjdG9yc0V4dHJhUXVlcnlWYWx1ZUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2luamVjdG9ycy1leHRyYS1xdWVyeS12YWx1ZS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHRpbWUgZGVsYXkgZm9yIHRoZSBibHVyIGFuZCBpbnB1dCBldmVudHMuXG4gICAgICovXG4gICAgZ2V0IGRlYm91bmNlRGVsYXkoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLmdldEF0dHJpYnV0ZSgnZGVib3VuY2UtZGVsYXknKSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgbnVtYmVyIG9mIGxldHRlcnMgd2hpY2gsIHVwb24gZW50ZXJpbmcgaW4gZm9ybSBmaWVsZCwgaXMgc3VmZmljaWVudCB0byBzaG93LCBoaWRlIG9yIGxvYWQgdGhlXG4gICAgICogc3VnZ2VzdGlvbnMuXG4gICAgICovXG4gICAgZ2V0IG1pbkxldHRlcnMoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLmdldEF0dHJpYnV0ZSgnbWluLWxldHRlcnMnKSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgYXV0byBsb2FkIG9mIHN1Z2dlc3Rpb25zIGlzIGVuYWJsZWQuXG4gICAgICovXG4gICAgZ2V0IGF1dG9Jbml0RW5hYmxlZCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdhdXRvLWluaXQnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9