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
/* harmony import */ var src_ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! src/ShopUi/components/molecules/autocomplete-form/autocomplete-form */ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts");
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }


var Events;

(function (Events) {
  Events["FETCHING"] = "fetching";
  Events["FETCHED"] = "fetched";
  Events["CHANGE"] = "change";
  Events["SET"] = "set";
  Events["UNSET"] = "unset";
})(Events || (Events = {}));

class ProductSearchAutocompleteForm extends src_ShopUi_components_molecules_autocomplete_form_autocomplete_form__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.widgetSuggestionsContainer = void 0;
    this.suggestionItems = void 0;
    this.lastSelectedItem = void 0;
    this.quantityInput = void 0;
  }

  readyCallback() {}

  init() {
    this.widgetSuggestionsContainer = this.getElementsByClassName(this.jsName + "__suggestions")[0];
    this.quantityInput = document.getElementsByClassName(this.jsName + "__quantity-field")[0];
    super.init();
    this.plugKeydownEvent();
  }

  plugKeydownEvent() {
    this.inputElement.addEventListener('keydown', event => this.onKeyDown(event));
  }

  onInput() {
    if (this.inputText.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  }

  showSuggestions() {
    this.widgetSuggestionsContainer.classList.remove('is-hidden');
  }

  hideSuggestions() {
    this.widgetSuggestionsContainer.classList.add('is-hidden');
  }

  mapItemEvents() {
    var self = this;
    var items = Array.from(this.widgetSuggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(item => {
      item.addEventListener('click', event => self.onItemClick(event));
    });
  }

  onKeyDown(event) {
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
  }

  onKeyDownArrowUp() {
    var lastSelectedItemIndex = this.suggestionItems.indexOf(this.lastSelectedItem);
    var elementIndex = lastSelectedItemIndex - 1;
    var lastSuggestionItemIndex = this.suggestionItems.length - 1;
    var item = this.suggestionItems[elementIndex < 0 ? lastSuggestionItemIndex : elementIndex];
    this.changeSelectedItem(item);
  }

  onKeyDownArrowDown() {
    var lastSelectedItemIndex = this.suggestionItems.indexOf(this.lastSelectedItem);
    var elementIndex = lastSelectedItemIndex + 1;
    var lastSuggestionItemIndex = this.suggestionItems.length - 1;
    var item = this.suggestionItems[elementIndex > lastSuggestionItemIndex ? 0 : elementIndex];
    this.changeSelectedItem(item);
  }

  onKeyDownEnter() {
    this.lastSelectedItem.click();
  }

  changeSelectedItem(item) {
    this.lastSelectedItem.classList.remove(this.selectedInputClass);
    item.classList.add(this.selectedInputClass);
    this.lastSelectedItem = item;
  }

  loadSuggestions() {
    var _this = this;

    return _asyncToGenerator(function* () {
      _this.dispatchCustomEvent(Events.FETCHING);

      _this.showSuggestions();

      _this.ajaxProvider.queryParams.set(_this.queryParamName, _this.inputText);

      yield _this.ajaxProvider.fetch();
      _this.suggestionItems = Array.from(_this.widgetSuggestionsContainer.getElementsByClassName(_this.itemClassName));
      _this.lastSelectedItem = _this.suggestionItems[0];

      _this.mapItemEvents();
    })();
  }

  setInputs(data, text) {
    this.inputText = text;
    this.inputValue = data;
    this.dispatchCustomEvent(Events.SET, {
      text: this.inputText,
      value: this.inputValue
    });

    if (this.quantityInput) {
      this.quantityInput.focus();
    }
  }

  onBlur() {
    this.hideSuggestions();
  }

  onFocus() {
    if (this.inputText.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  }

  get inputText() {
    return this.inputElement.value.trim();
  }

  set inputText(value) {
    this.inputElement.value = value;
  }

  get selectedInputClass() {
    return (this.itemClassName + "--selected").substr(1);
  }

  get inputValue() {
    return this.hiddenInputElement.value;
  }

  set inputValue(value) {
    this.hiddenInputElement.value = value;
  }

}

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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }



class AutocompleteForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.ajaxProvider = void 0;
    this.inputElement = void 0;
    this.hiddenInputElement = void 0;
    this.suggestionsContainer = void 0;
    this.cleanButton = void 0;
    this.overlay = void 0;
  }

  readyCallback() {}

  init() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.suggestionsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.inputElement = this.getElementsByClassName(this.jsName + "__input")[0];
    this.hiddenInputElement = this.getElementsByClassName(this.jsName + "__input-hidden")[0];
    this.cleanButton = this.getElementsByClassName(this.jsName + "__clean-button")[0];
    this.overlay = document.getElementsByClassName(this.overlayBlockClassName)[0];
    this.mapEvents();
  }

  mapEvents() {
    this.inputElement.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__["default"])(() => this.onInput(), this.debounceDelay));
    this.inputElement.addEventListener('blur', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__["default"])(() => this.onBlur(), this.debounceDelay));
    this.inputElement.addEventListener('focus', () => this.onFocus());

    if (this.showCleanButton) {
      this.cleanButton.addEventListener('click', () => this.onCleanButtonClick());
    }
  }

  onCleanButtonClick() {
    this.cleanFields();
  }

  onBlur() {
    this.overlay.hideOverlay('no-agent-user', 'no-agent-user');
    this.hideSuggestions();
  }

  onFocus() {
    this.overlay.showOverlay('no-agent-user', 'no-agent-user');

    if (this.inputValue.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  }

  onInput() {
    if (this.inputValue.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  }

  showSuggestions() {
    this.suggestionsContainer.classList.remove('is-hidden');
  }

  hideSuggestions() {
    this.suggestionsContainer.classList.add('is-hidden');
  }

  loadSuggestions() {
    var _this = this;

    return _asyncToGenerator(function* () {
      _this.showSuggestions();

      _this.ajaxProvider.queryParams.set(_this.queryParamName, _this.inputValue);

      yield _this.ajaxProvider.fetch();

      _this.mapItemEvents();
    })();
  }

  mapItemEvents() {
    var self = this;
    var items = Array.from(this.suggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(item => {
      item.addEventListener('click', event => self.onItemClick(event));
    });
  }

  onItemClick(event) {
    var dataTarget = event.target;
    var data = dataTarget.getAttribute(this.valueDataAttribute);
    var text = dataTarget.textContent.trim();
    this.setInputs(data, text);
  }

  setInputs(data, text) {
    this.hiddenInputElement.value = data;
    this.inputElement.value = text;
  }

  cleanFields() {
    this.setInputs('', '');
  }

  get minLetters() {
    return Number(this.getAttribute('min-letters'));
  }

  get inputValue() {
    return this.inputElement.value.trim();
  }

  get queryParamName() {
    return this.getAttribute('query-param-name');
  }

  get valueDataAttribute() {
    return this.getAttribute('value-data-attribute');
  }

  get itemClassName() {
    return this.getAttribute('item-class-name');
  }

  get debounceDelay() {
    return Number(this.getAttribute('debounce-delay'));
  }

  get showCleanButton() {
    return this.hasAttribute('show-clean-button');
  }

  get overlayBlockClassName() {
    return this.getAttribute('overlay-block-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19TeW1ib2wuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9fYmFzZUdldFRhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19iYXNlVHJpbS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19mcmVlR2xvYmFsLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX2dldFJhd1RhZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19vYmplY3RUb1N0cmluZy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL19yb290LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvX3RyaW1tZWRFbmRJbmRleC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL2RlYm91bmNlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9sb2Rhc2gtZXMvaXNPYmplY3QuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc09iamVjdExpa2UuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2xvZGFzaC1lcy9pc1N5bWJvbC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL25vdy5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvbG9kYXNoLWVzL3RvTnVtYmVyLmpzIiwid2VicGFjazovLy8od2VicGFjaykvYnVpbGRpbi9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1Byb2R1Y3RTZWFyY2hXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS9wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS50cyIsIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYXV0b2NvbXBsZXRlLWZvcm0vYXV0b2NvbXBsZXRlLWZvcm0udHMiXSwibmFtZXMiOlsiRXZlbnRzIiwiUHJvZHVjdFNlYXJjaEF1dG9jb21wbGV0ZUZvcm0iLCJBdXRvY29tcGxldGVGb3JtIiwid2lkZ2V0U3VnZ2VzdGlvbnNDb250YWluZXIiLCJzdWdnZXN0aW9uSXRlbXMiLCJsYXN0U2VsZWN0ZWRJdGVtIiwicXVhbnRpdHlJbnB1dCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImRvY3VtZW50IiwicGx1Z0tleWRvd25FdmVudCIsImlucHV0RWxlbWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uS2V5RG93biIsIm9uSW5wdXQiLCJpbnB1dFRleHQiLCJsZW5ndGgiLCJtaW5MZXR0ZXJzIiwibG9hZFN1Z2dlc3Rpb25zIiwiaGlkZVN1Z2dlc3Rpb25zIiwic2hvd1N1Z2dlc3Rpb25zIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIiwibWFwSXRlbUV2ZW50cyIsInNlbGYiLCJpdGVtcyIsIkFycmF5IiwiZnJvbSIsIml0ZW1DbGFzc05hbWUiLCJmb3JFYWNoIiwiaXRlbSIsIm9uSXRlbUNsaWNrIiwia2V5Iiwib25LZXlEb3duQXJyb3dVcCIsIm9uS2V5RG93bkFycm93RG93biIsIm9uS2V5RG93bkVudGVyIiwibGFzdFNlbGVjdGVkSXRlbUluZGV4IiwiaW5kZXhPZiIsImVsZW1lbnRJbmRleCIsImxhc3RTdWdnZXN0aW9uSXRlbUluZGV4IiwiY2hhbmdlU2VsZWN0ZWRJdGVtIiwiY2xpY2siLCJzZWxlY3RlZElucHV0Q2xhc3MiLCJkaXNwYXRjaEN1c3RvbUV2ZW50IiwiRkVUQ0hJTkciLCJhamF4UHJvdmlkZXIiLCJxdWVyeVBhcmFtcyIsInNldCIsInF1ZXJ5UGFyYW1OYW1lIiwiZmV0Y2giLCJzZXRJbnB1dHMiLCJkYXRhIiwidGV4dCIsImlucHV0VmFsdWUiLCJTRVQiLCJ2YWx1ZSIsImZvY3VzIiwib25CbHVyIiwib25Gb2N1cyIsInRyaW0iLCJzdWJzdHIiLCJoaWRkZW5JbnB1dEVsZW1lbnQiLCJDb21wb25lbnQiLCJzdWdnZXN0aW9uc0NvbnRhaW5lciIsImNsZWFuQnV0dG9uIiwib3ZlcmxheSIsIm92ZXJsYXlCbG9ja0NsYXNzTmFtZSIsIm1hcEV2ZW50cyIsImRlYm91bmNlIiwiZGVib3VuY2VEZWxheSIsInNob3dDbGVhbkJ1dHRvbiIsIm9uQ2xlYW5CdXR0b25DbGljayIsImNsZWFuRmllbGRzIiwiaGlkZU92ZXJsYXkiLCJzaG93T3ZlcmxheSIsImRhdGFUYXJnZXQiLCJ0YXJnZXQiLCJnZXRBdHRyaWJ1dGUiLCJ2YWx1ZURhdGFBdHRyaWJ1dGUiLCJ0ZXh0Q29udGVudCIsIk51bWJlciIsImhhc0F0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBOEI7O0FBRTlCO0FBQ0EsYUFBYSxnREFBSTs7QUFFRixxRUFBTSxFQUFDOzs7Ozs7Ozs7Ozs7O0FDTHRCO0FBQUE7QUFBQTtBQUFBO0FBQWtDO0FBQ007QUFDVTs7QUFFbEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EscUJBQXFCLGtEQUFNLEdBQUcsa0RBQU07O0FBRXBDO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsV0FBVyxFQUFFO0FBQ2IsYUFBYSxPQUFPO0FBQ3BCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLE1BQU0sNkRBQVM7QUFDZixNQUFNLGtFQUFjO0FBQ3BCOztBQUVlLHlFQUFVLEVBQUM7Ozs7Ozs7Ozs7Ozs7QUMzQjFCO0FBQUE7QUFBb0Q7O0FBRXBEO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxXQUFXLE9BQU87QUFDbEIsYUFBYSxPQUFPO0FBQ3BCO0FBQ0E7QUFDQTtBQUNBLHNCQUFzQixtRUFBZTtB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QUNyQyxXQUFPLEtBQUtXLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7QUFFa0MsTUFBckJmLHFCQUFxQixHQUFXO0FBQzFDLFdBQU8sS0FBS1csWUFBTCxDQUFrQiwwQkFBbEIsQ0FBUDtBQUNIOztBQXJJbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5wcm9kdWN0LXNlYXJjaC1hdXRvY29tcGxldGUtZm9ybS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCByb290IGZyb20gJy4vX3Jvb3QuanMnO1xuXG4vKiogQnVpbHQtaW4gdmFsdWUgcmVmZXJlbmNlcy4gKi9cbnZhciBTeW1ib2wgPSByb290LlN5bWJvbDtcblxuZXhwb3J0IGRlZmF1bHQgU3ltYm9sO1xuIiwiaW1wb3J0IFN5bWJvbCBmcm9tICcuL19TeW1ib2wuanMnO1xuaW1wb3J0IGdldFJhd1RhZyBmcm9tICcuL19nZXRSYXdUYWcuanMnO1xuaW1wb3J0IG9iamVjdFRvU3RyaW5nIGZyb20gJy4vX29iamVjdFRvU3RyaW5nLmpzJztcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIG51bGxUYWcgPSAnW29iamVjdCBOdWxsXScsXG4gICAgdW5kZWZpbmVkVGFnID0gJ1tvYmplY3QgVW5kZWZpbmVkXSc7XG5cbi8qKiBCdWlsdC1pbiB2YWx1ZSByZWZlcmVuY2VzLiAqL1xudmFyIHN5bVRvU3RyaW5nVGFnID0gU3ltYm9sID8gU3ltYm9sLnRvU3RyaW5nVGFnIDogdW5kZWZpbmVkO1xuXG4vKipcbiAqIFRoZSBiYXNlIGltcGxlbWVudGF0aW9uIG9mIGBnZXRUYWdgIHdpdGhvdXQgZmFsbGJhY2tzIGZvciBidWdneSBlbnZpcm9ubWVudHMuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHF1ZXJ5LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgYHRvU3RyaW5nVGFnYC5cbiAqL1xuZnVuY3Rpb24gYmFzZUdldFRhZyh2YWx1ZSkge1xuICBpZiAodmFsdWUgPT0gbnVsbCkge1xuICAgIHJldHVybiB2YWx1ZSA9PT0gdW5kZWZpbmVkID8gdW5kZWZpbmVkVGFnIDogbnVsbFRhZztcbiAgfVxuICByZXR1cm4gKHN5bVRvU3RyaW5nVGFnICYmIHN5bVRvU3RyaW5nVGFnIGluIE9iamVjdCh2YWx1ZSkpXG4gICAgPyBnZXRSYXdUYWcodmFsdWUpXG4gICAgOiBvYmplY3RUb1N0cmluZyh2YWx1ZSk7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGJhc2VHZXRUYWc7XG4iLCJpbXBvcnQgdHJpbW1lZEVuZEluZGV4IGZyb20gJy4vX3RyaW1tZWRFbmRJbmRleC5qcyc7XG5cbi8qKiBVc2VkIHRvIG1hdGNoIGxlYWRpbmcgd2hpdGVzcGFjZS4gKi9cbnZhciByZVRyaW1TdGFydCA9IC9eXFxzKy87XG5cbi8qKlxuICogVGhlIGJhc2UgaW1wbGVtZW50YXRpb24gb2YgYF8udHJpbWAuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byB0cmltLlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgdHJpbW1lZCBzdHJpbmcuXG4gKi9cbmZ1bmN0aW9uIGJhc2VUcmltKHN0cmluZykge1xuICByZXR1cm4gc3RyaW5nXG4gICAgPyBzdHJpbmcuc2xpY2UoMCwgdHJpbW1lZEVuZEluZGV4KHN0cmluZykgKyAxKS5yZXBsYWNlKHJlVHJpbVN0YXJ0LCAnJylcbiAgICA6IHN0cmluZztcbn1cblxuZXhwb3J0IGRlZmF1bHQgYmFzZVRyaW07XG4iLCIvKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYGdsb2JhbGAgZnJvbSBOb2RlLmpzLiAqL1xudmFyIGZyZWVHbG9iYWwgPSB0eXBlb2YgZ2xvYmFsID09ICdvYmplY3QnICYmIGdsb2JhbCAmJiBnbG9iYWwuT2JqZWN0ID09PSBPYmplY3QgJiYgZ2xvYmFsO1xuXG5leHBvcnQgZGVmYXVsdCBmcmVlR2xvYmFsO1xuIiwiaW1wb3J0IFN5bWJvbCBmcm9tICcuL19TeW1ib2wuanMnO1xuXG4vKiogVXNlZCBmb3IgYnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMuICovXG52YXIgb2JqZWN0UHJvdG8gPSBPYmplY3QucHJvdG90eXBlO1xuXG4vKiogVXNlZCB0byBjaGVjayBvYmplY3RzIGZvciBvd24gcHJvcGVydGllcy4gKi9cbnZhciBoYXNPd25Qcm9wZXJ0eSA9IG9iamVjdFByb3RvLmhhc093blByb3BlcnR5O1xuXG4vKipcbiAqIFVzZWQgdG8gcmVzb2x2ZSB0aGVcbiAqIFtgdG9TdHJpbmdUYWdgXShodHRwOi8vZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1vYmplY3QucHJvdG90eXBlLnRvc3RyaW5nKVxuICogb2YgdmFsdWVzLlxuICovXG52YXIgbmF0aXZlT2JqZWN0VG9TdHJpbmcgPSBvYmplY3RQcm90by50b1N0cmluZztcblxuLyoqIEJ1aWx0LWluIHZhbHVlIHJlZmVyZW5jZXMuICovXG52YXIgc3ltVG9TdHJpbmdUYWcgPSBTeW1ib2wgPyBTeW1ib2wudG9TdHJpbmdUYWcgOiB1bmRlZmluZWQ7XG5cbi8qKlxuICogQSBzcGVjaWFsaXplZCB2ZXJzaW9uIG9mIGBiYXNlR2V0VGFnYCB3aGljaCBpZ25vcmVzIGBTeW1ib2wudG9TdHJpbmdUYWdgIHZhbHVlcy5cbiAqXG4gKiBAcHJpdmF0ZVxuICogQHBhcmFtIHsqfSB2YWx1ZSBUaGUgdmFsdWUgdG8gcXVlcnkuXG4gKiBAcmV0dXJucyB7c3RyaW5nfSBSZXR1cm5zIHRoZSByYXcgYHRvU3RyaW5nVGFnYC5cbiAqL1xuZnVuY3Rpb24gZ2V0UmF3VGFnKHZhbHVlKSB7XG4gIHZhciBpc093biA9IGhhc093blByb3BlcnR5LmNhbGwodmFsdWUsIHN5bVRvU3RyaW5nVGFnKSxcbiAgICAgIHRhZyA9IHZhbHVlW3N5bVRvU3RyaW5nVGFnXTtcblxuICB0cnkge1xuICAgIHZhbHVlW3N5bVRvU3RyaW5nVGFnXSA9IHVuZGVmaW5lZDtcbiAgICB2YXIgdW5tYXNrZWQgPSB0cnVlO1xuICB9IGNhdGNoIChlKSB7fVxuXG4gIHZhciByZXN1bHQgPSBuYXRpdmVPYmplY3RUb1N0cmluZy5jYWxsKHZhbHVlKTtcbiAgaWYgKHVubWFza2VkKSB7XG4gICAgaWYgKGlzT3duKSB7XG4gICAgICB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ10gPSB0YWc7XG4gICAgfSBlbHNlIHtcbiAgICAgIGRlbGV0ZSB2YWx1ZVtzeW1Ub1N0cmluZ1RhZ107XG4gICAgfVxuICB9XG4gIHJldHVybiByZXN1bHQ7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGdldFJhd1RhZztcbiIsIi8qKiBVc2VkIGZvciBidWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcy4gKi9cbnZhciBvYmplY3RQcm90byA9IE9iamVjdC5wcm90b3R5cGU7XG5cbi8qKlxuICogVXNlZCB0byByZXNvbHZlIHRoZVxuICogW2B0b1N0cmluZ1RhZ2BdKGh0dHA6Ly9lY21hLWludGVybmF0aW9uYWwub3JnL2VjbWEtMjYyLzcuMC8jc2VjLW9iamVjdC5wcm90b3R5cGUudG9zdHJpbmcpXG4gKiBvZiB2YWx1ZXMuXG4gKi9cbnZhciBuYXRpdmVPYmplY3RUb1N0cmluZyA9IG9iamVjdFByb3RvLnRvU3RyaW5nO1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBzdHJpbmcgdXNpbmcgYE9iamVjdC5wcm90b3R5cGUudG9TdHJpbmdgLlxuICpcbiAqIEBwcml2YXRlXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjb252ZXJ0LlxuICogQHJldHVybnMge3N0cmluZ30gUmV0dXJucyB0aGUgY29udmVydGVkIHN0cmluZy5cbiAqL1xuZnVuY3Rpb24gb2JqZWN0VG9TdHJpbmcodmFsdWUpIHtcbiAgcmV0dXJuIG5hdGl2ZU9iamVjdFRvU3RyaW5nLmNhbGwodmFsdWUpO1xufVxuXG5leHBvcnQgZGVmYXVsdCBvYmplY3RUb1N0cmluZztcbiIsImltcG9ydCBmcmVlR2xvYmFsIGZyb20gJy4vX2ZyZWVHbG9iYWwuanMnO1xuXG4vKiogRGV0ZWN0IGZyZWUgdmFyaWFibGUgYHNlbGZgLiAqL1xudmFyIGZyZWVTZWxmID0gdHlwZW9mIHNlbGYgPT0gJ29iamVjdCcgJiYgc2VsZiAmJiBzZWxmLk9iamVjdCA9PT0gT2JqZWN0ICYmIHNlbGY7XG5cbi8qKiBVc2VkIGFzIGEgcmVmZXJlbmNlIHRvIHRoZSBnbG9iYWwgb2JqZWN0LiAqL1xudmFyIHJvb3QgPSBmcmVlR2xvYmFsIHx8IGZyZWVTZWxmIHx8IEZ1bmN0aW9uKCdyZXR1cm4gdGhpcycpKCk7XG5cbmV4cG9ydCBkZWZhdWx0IHJvb3Q7XG4iLCIvKiogVXNlZCB0byBtYXRjaCBhIHNpbmdsZSB3aGl0ZXNwYWNlIGNoYXJhY3Rlci4gKi9cbnZhciByZVdoaXRlc3BhY2UgPSAvXFxzLztcblxuLyoqXG4gKiBVc2VkIGJ5IGBfLnRyaW1gIGFuZCBgXy50cmltRW5kYCB0byBnZXQgdGhlIGluZGV4IG9mIHRoZSBsYXN0IG5vbi13aGl0ZXNwYWNlXG4gKiBjaGFyYWN0ZXIgb2YgYHN0cmluZ2AuXG4gKlxuICogQHByaXZhdGVcbiAqIEBwYXJhbSB7c3RyaW5nfSBzdHJpbmcgVGhlIHN0cmluZyB0byBpbnNwZWN0LlxuICogQHJldHVybnMge251bWJlcn0gUmV0dXJucyB0aGUgaW5kZXggb2YgdGhlIGxhc3Qgbm9uLXdoaXRlc3BhY2UgY2hhcmFjdGVyLlxuICovXG5mdW5jdGlvbiB0cmltbWVkRW5kSW5kZXgoc3RyaW5nKSB7XG4gIHZhciBpbmRleCA9IHN0cmluZy5sZW5ndGg7XG5cbiAgd2hpbGUgKGluZGV4LS0gJiYgcmVXaGl0ZXNwYWNlLnRlc3Qoc3RyaW5nLmNoYXJBdChpbmRleCkpKSB7fVxuICByZXR1cm4gaW5kZXg7XG59XG5cbmV4cG9ydCBkZWZhdWx0IHRyaW1tZWRFbmRJbmRleDtcbiIsImltcG9ydCBpc09iamVjdCBmcm9tICcuL2lzT2JqZWN0LmpzJztcbmltcG9ydCBub3cgZnJvbSAnLi9ub3cuanMnO1xuaW1wb3J0IHRvTnVtYmVyIGZyb20gJy4vdG9OdW1iZXIuanMnO1xuXG4vKiogRXJyb3IgbWVzc2FnZSBjb25zdGFudHMuICovXG52YXIgRlVOQ19FUlJPUl9URVhUID0gJ0V4cGVjdGVkIGEgZnVuY3Rpb24nO1xuXG4vKiBCdWlsdC1pbiBtZXRob2QgcmVmZXJlbmNlcyBmb3IgdGhvc2Ugd2l0aCB0aGUgc2FtZSBuYW1lIGFzIG90aGVyIGBsb2Rhc2hgIG1ldGhvZHMuICovXG52YXIgbmF0aXZlTWF4ID0gTWF0aC5tYXgsXG4gICAgbmF0aXZlTWluID0gTWF0aC5taW47XG5cbi8qKlxuICogQ3JlYXRlcyBhIGRlYm91bmNlZCBmdW5jdGlvbiB0aGF0IGRlbGF5cyBpbnZva2luZyBgZnVuY2AgdW50aWwgYWZ0ZXIgYHdhaXRgXG4gKiBtaWxsaXNlY29uZHMgaGF2ZSBlbGFwc2VkIHNpbmNlIHRoZSBsYXN0IHRpbWUgdGhlIGRlYm91bmNlZCBmdW5jdGlvbiB3YXNcbiAqIGludm9rZWQuIFRoZSBkZWJvdW5jZWQgZnVuY3Rpb24gY29tZXMgd2l0aCBhIGBjYW5jZWxgIG1ldGhvZCB0byBjYW5jZWxcbiAqIGRlbGF5ZWQgYGZ1bmNgIGludm9jYXRpb25zIGFuZCBhIGBmbHVzaGAgbWV0aG9kIHRvIGltbWVkaWF0ZWx5IGludm9rZSB0aGVtLlxuICogUHJvdmlkZSBgb3B0aW9uc2AgdG8gaW5kaWNhdGUgd2hldGhlciBgZnVuY2Agc2hvdWxkIGJlIGludm9rZWQgb24gdGhlXG4gKiBsZWFkaW5nIGFuZC9vciB0cmFpbGluZyBlZGdlIG9mIHRoZSBgd2FpdGAgdGltZW91dC4gVGhlIGBmdW5jYCBpcyBpbnZva2VkXG4gKiB3aXRoIHRoZSBsYXN0IGFyZ3VtZW50cyBwcm92aWRlZCB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uLiBTdWJzZXF1ZW50XG4gKiBjYWxscyB0byB0aGUgZGVib3VuY2VkIGZ1bmN0aW9uIHJldHVybiB0aGUgcmVzdWx0IG9mIHRoZSBsYXN0IGBmdW5jYFxuICogaW52b2NhdGlvbi5cbiAqXG4gKiAqKk5vdGU6KiogSWYgYGxlYWRpbmdgIGFuZCBgdHJhaWxpbmdgIG9wdGlvbnMgYXJlIGB0cnVlYCwgYGZ1bmNgIGlzXG4gKiBpbnZva2VkIG9uIHRoZSB0cmFpbGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0IG9ubHkgaWYgdGhlIGRlYm91bmNlZCBmdW5jdGlvblxuICogaXMgaW52b2tlZCBtb3JlIHRoYW4gb25jZSBkdXJpbmcgdGhlIGB3YWl0YCB0aW1lb3V0LlxuICpcbiAqIElmIGB3YWl0YCBpcyBgMGAgYW5kIGBsZWFkaW5nYCBpcyBgZmFsc2VgLCBgZnVuY2AgaW52b2NhdGlvbiBpcyBkZWZlcnJlZFxuICogdW50aWwgdG8gdGhlIG5leHQgdGljaywgc2ltaWxhciB0byBgc2V0VGltZW91dGAgd2l0aCBhIHRpbWVvdXQgb2YgYDBgLlxuICpcbiAqIFNlZSBbRGF2aWQgQ29yYmFjaG8ncyBhcnRpY2xlXShodHRwczovL2Nzcy10cmlja3MuY29tL2RlYm91bmNpbmctdGhyb3R0bGluZy1leHBsYWluZWQtZXhhbXBsZXMvKVxuICogZm9yIGRldGFpbHMgb3ZlciB0aGUgZGlmZmVyZW5jZXMgYmV0d2VlbiBgXy5kZWJvdW5jZWAgYW5kIGBfLnRocm90dGxlYC5cbiAqXG4gKiBAc3RhdGljXG4gKiBAbWVtYmVyT2YgX1xuICogQHNpbmNlIDAuMS4wXG4gKiBAY2F0ZWdvcnkgRnVuY3Rpb25cbiAqIEBwYXJhbSB7RnVuY3Rpb259IGZ1bmMgVGhlIGZ1bmN0aW9uIHRvIGRlYm91bmNlLlxuICogQHBhcmFtIHtudW1iZXJ9IFt3YWl0PTBdIFRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIHRvIGRlbGF5LlxuICogQHBhcmFtIHtPYmplY3R9IFtvcHRpb25zPXt9XSBUaGUgb3B0aW9ucyBvYmplY3QuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLmxlYWRpbmc9ZmFsc2VdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgbGVhZGluZyBlZGdlIG9mIHRoZSB0aW1lb3V0LlxuICogQHBhcmFtIHtudW1iZXJ9IFtvcHRpb25zLm1heFdhaXRdXG4gKiAgVGhlIG1heGltdW0gdGltZSBgZnVuY2AgaXMgYWxsb3dlZCB0byBiZSBkZWxheWVkIGJlZm9yZSBpdCdzIGludm9rZWQuXG4gKiBAcGFyYW0ge2Jvb2xlYW59IFtvcHRpb25zLnRyYWlsaW5nPXRydWVdXG4gKiAgU3BlY2lmeSBpbnZva2luZyBvbiB0aGUgdHJhaWxpbmcgZWRnZSBvZiB0aGUgdGltZW91dC5cbiAqIEByZXR1cm5zIHtGdW5jdGlvbn0gUmV0dXJucyB0aGUgbmV3IGRlYm91bmNlZCBmdW5jdGlvbi5cbiAqIEBleGFtcGxlXG4gKlxuICogLy8gQXZvaWQgY29zdGx5IGNhbGN1bGF0aW9ucyB3aGlsZSB0aGUgd2luZG93IHNpemUgaXMgaW4gZmx1eC5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdyZXNpemUnLCBfLmRlYm91bmNlKGNhbGN1bGF0ZUxheW91dCwgMTUwKSk7XG4gKlxuICogLy8gSW52b2tlIGBzZW5kTWFpbGAgd2hlbiBjbGlja2VkLCBkZWJvdW5jaW5nIHN1YnNlcXVlbnQgY2FsbHMuXG4gKiBqUXVlcnkoZWxlbWVudCkub24oJ2NsaWNrJywgXy5kZWJvdW5jZShzZW5kTWFpbCwgMzAwLCB7XG4gKiAgICdsZWFkaW5nJzogdHJ1ZSxcbiAqICAgJ3RyYWlsaW5nJzogZmFsc2VcbiAqIH0pKTtcbiAqXG4gKiAvLyBFbnN1cmUgYGJhdGNoTG9nYCBpcyBpbnZva2VkIG9uY2UgYWZ0ZXIgMSBzZWNvbmQgb2YgZGVib3VuY2VkIGNhbGxzLlxuICogdmFyIGRlYm91bmNlZCA9IF8uZGVib3VuY2UoYmF0Y2hMb2csIDI1MCwgeyAnbWF4V2FpdCc6IDEwMDAgfSk7XG4gKiB2YXIgc291cmNlID0gbmV3IEV2ZW50U291cmNlKCcvc3RyZWFtJyk7XG4gKiBqUXVlcnkoc291cmNlKS5vbignbWVzc2FnZScsIGRlYm91bmNlZCk7XG4gKlxuICogLy8gQ2FuY2VsIHRoZSB0cmFpbGluZyBkZWJvdW5jZWQgaW52b2NhdGlvbi5cbiAqIGpRdWVyeSh3aW5kb3cpLm9uKCdwb3BzdGF0ZScsIGRlYm91bmNlZC5jYW5jZWwpO1xuICovXG5mdW5jdGlvbiBkZWJvdW5jZShmdW5jLCB3YWl0LCBvcHRpb25zKSB7XG4gIHZhciBsYXN0QXJncyxcbiAgICAgIGxhc3RUaGlzLFxuICAgICAgbWF4V2FpdCxcbiAgICAgIHJlc3VsdCxcbiAgICAgIHRpbWVySWQsXG4gICAgICBsYXN0Q2FsbFRpbWUsXG4gICAgICBsYXN0SW52b2tlVGltZSA9IDAsXG4gICAgICBsZWFkaW5nID0gZmFsc2UsXG4gICAgICBtYXhpbmcgPSBmYWxzZSxcbiAgICAgIHRyYWlsaW5nID0gdHJ1ZTtcblxuICBpZiAodHlwZW9mIGZ1bmMgIT0gJ2Z1bmN0aW9uJykge1xuICAgIHRocm93IG5ldyBUeXBlRXJyb3IoRlVOQ19FUlJPUl9URVhUKTtcbiAgfVxuICB3YWl0ID0gdG9OdW1iZXIod2FpdCkgfHwgMDtcbiAgaWYgKGlzT2JqZWN0KG9wdGlvbnMpKSB7XG4gICAgbGVhZGluZyA9ICEhb3B0aW9ucy5sZWFkaW5nO1xuICAgIG1heGluZyA9ICdtYXhXYWl0JyBpbiBvcHRpb25zO1xuICAgIG1heFdhaXQgPSBtYXhpbmcgPyBuYXRpdmVNYXgodG9OdW1iZXIob3B0aW9ucy5tYXhXYWl0KSB8fCAwLCB3YWl0KSA6IG1heFdhaXQ7XG4gICAgdHJhaWxpbmcgPSAndHJhaWxpbmcnIGluIG9wdGlvbnMgPyAhIW9wdGlvbnMudHJhaWxpbmcgOiB0cmFpbGluZztcbiAgfVxuXG4gIGZ1bmN0aW9uIGludm9rZUZ1bmModGltZSkge1xuICAgIHZhciBhcmdzID0gbGFzdEFyZ3MsXG4gICAgICAgIHRoaXNBcmcgPSBsYXN0VGhpcztcblxuICAgIGxhc3RBcmdzID0gbGFzdFRoaXMgPSB1bmRlZmluZWQ7XG4gICAgbGFzdEludm9rZVRpbWUgPSB0aW1lO1xuICAgIHJlc3VsdCA9IGZ1bmMuYXBwbHkodGhpc0FyZywgYXJncyk7XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuXG4gIGZ1bmN0aW9uIGxlYWRpbmdFZGdlKHRpbWUpIHtcbiAgICAvLyBSZXNldCBhbnkgYG1heFdhaXRgIHRpbWVyLlxuICAgIGxhc3RJbnZva2VUaW1lID0gdGltZTtcbiAgICAvLyBTdGFydCB0aGUgdGltZXIgZm9yIHRoZSB0cmFpbGluZyBlZGdlLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgd2FpdCk7XG4gICAgLy8gSW52b2tlIHRoZSBsZWFkaW5nIGVkZ2UuXG4gICAgcmV0dXJuIGxlYWRpbmcgPyBpbnZva2VGdW5jKHRpbWUpIDogcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gcmVtYWluaW5nV2FpdCh0aW1lKSB7XG4gICAgdmFyIHRpbWVTaW5jZUxhc3RDYWxsID0gdGltZSAtIGxhc3RDYWxsVGltZSxcbiAgICAgICAgdGltZVNpbmNlTGFzdEludm9rZSA9IHRpbWUgLSBsYXN0SW52b2tlVGltZSxcbiAgICAgICAgdGltZVdhaXRpbmcgPSB3YWl0IC0gdGltZVNpbmNlTGFzdENhbGw7XG5cbiAgICByZXR1cm4gbWF4aW5nXG4gICAgICA/IG5hdGl2ZU1pbih0aW1lV2FpdGluZywgbWF4V2FpdCAtIHRpbWVTaW5jZUxhc3RJbnZva2UpXG4gICAgICA6IHRpbWVXYWl0aW5nO1xuICB9XG5cbiAgZnVuY3Rpb24gc2hvdWxkSW52b2tlKHRpbWUpIHtcbiAgICB2YXIgdGltZVNpbmNlTGFzdENhbGwgPSB0aW1lIC0gbGFzdENhbGxUaW1lLFxuICAgICAgICB0aW1lU2luY2VMYXN0SW52b2tlID0gdGltZSAtIGxhc3RJbnZva2VUaW1lO1xuXG4gICAgLy8gRWl0aGVyIHRoaXMgaXMgdGhlIGZpcnN0IGNhbGwsIGFjdGl2aXR5IGhhcyBzdG9wcGVkIGFuZCB3ZSdyZSBhdCB0aGVcbiAgICAvLyB0cmFpbGluZyBlZGdlLCB0aGUgc3lzdGVtIHRpbWUgaGFzIGdvbmUgYmFja3dhcmRzIGFuZCB3ZSdyZSB0cmVhdGluZ1xuICAgIC8vIGl0IGFzIHRoZSB0cmFpbGluZyBlZGdlLCBvciB3ZSd2ZSBoaXQgdGhlIGBtYXhXYWl0YCBsaW1pdC5cbiAgICByZXR1cm4gKGxhc3RDYWxsVGltZSA9PT0gdW5kZWZpbmVkIHx8ICh0aW1lU2luY2VMYXN0Q2FsbCA+PSB3YWl0KSB8fFxuICAgICAgKHRpbWVTaW5jZUxhc3RDYWxsIDwgMCkgfHwgKG1heGluZyAmJiB0aW1lU2luY2VMYXN0SW52b2tlID49IG1heFdhaXQpKTtcbiAgfVxuXG4gIGZ1bmN0aW9uIHRpbWVyRXhwaXJlZCgpIHtcbiAgICB2YXIgdGltZSA9IG5vdygpO1xuICAgIGlmIChzaG91bGRJbnZva2UodGltZSkpIHtcbiAgICAgIHJldHVybiB0cmFpbGluZ0VkZ2UodGltZSk7XG4gICAgfVxuICAgIC8vIFJlc3RhcnQgdGhlIHRpbWVyLlxuICAgIHRpbWVySWQgPSBzZXRUaW1lb3V0KHRpbWVyRXhwaXJlZCwgcmVtYWluaW5nV2FpdCh0aW1lKSk7XG4gIH1cblxuICBmdW5jdGlvbiB0cmFpbGluZ0VkZ2UodGltZSkge1xuICAgIHRpbWVySWQgPSB1bmRlZmluZWQ7XG5cbiAgICAvLyBPbmx5IGludm9rZSBpZiB3ZSBoYXZlIGBsYXN0QXJnc2Agd2hpY2ggbWVhbnMgYGZ1bmNgIGhhcyBiZWVuXG4gICAgLy8gZGVib3VuY2VkIGF0IGxlYXN0IG9uY2UuXG4gICAgaWYgKHRyYWlsaW5nICYmIGxhc3RBcmdzKSB7XG4gICAgICByZXR1cm4gaW52b2tlRnVuYyh0aW1lKTtcbiAgICB9XG4gICAgbGFzdEFyZ3MgPSBsYXN0VGhpcyA9IHVuZGVmaW5lZDtcbiAgICByZXR1cm4gcmVzdWx0O1xuICB9XG5cbiAgZnVuY3Rpb24gY2FuY2VsKCkge1xuICAgIGlmICh0aW1lcklkICE9PSB1bmRlZmluZWQpIHtcbiAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICB9XG4gICAgbGFzdEludm9rZVRpbWUgPSAwO1xuICAgIGxhc3RBcmdzID0gbGFzdENhbGxUaW1lID0gbGFzdFRoaXMgPSB0aW1lcklkID0gdW5kZWZpbmVkO1xuICB9XG5cbiAgZnVuY3Rpb24gZmx1c2goKSB7XG4gICAgcmV0dXJuIHRpbWVySWQgPT09IHVuZGVmaW5lZCA/IHJlc3VsdCA6IHRyYWlsaW5nRWRnZShub3coKSk7XG4gIH1cblxuICBmdW5jdGlvbiBkZWJvdW5jZWQoKSB7XG4gICAgdmFyIHRpbWUgPSBub3coKSxcbiAgICAgICAgaXNJbnZva2luZyA9IHNob3VsZEludm9rZSh0aW1lKTtcblxuICAgIGxhc3RBcmdzID0gYXJndW1lbnRzO1xuICAgIGxhc3RUaGlzID0gdGhpcztcbiAgICBsYXN0Q2FsbFRpbWUgPSB0aW1lO1xuXG4gICAgaWYgKGlzSW52b2tpbmcpIHtcbiAgICAgIGlmICh0aW1lcklkID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgcmV0dXJuIGxlYWRpbmdFZGdlKGxhc3RDYWxsVGltZSk7XG4gICAgICB9XG4gICAgICBpZiAobWF4aW5nKSB7XG4gICAgICAgIC8vIEhhbmRsZSBpbnZvY2F0aW9ucyBpbiBhIHRpZ2h0IGxvb3AuXG4gICAgICAgIGNsZWFyVGltZW91dCh0aW1lcklkKTtcbiAgICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICAgICAgcmV0dXJuIGludm9rZUZ1bmMobGFzdENhbGxUaW1lKTtcbiAgICAgIH1cbiAgICB9XG4gICAgaWYgKHRpbWVySWQgPT09IHVuZGVmaW5lZCkge1xuICAgICAgdGltZXJJZCA9IHNldFRpbWVvdXQodGltZXJFeHBpcmVkLCB3YWl0KTtcbiAgICB9XG4gICAgcmV0dXJuIHJlc3VsdDtcbiAgfVxuICBkZWJvdW5jZWQuY2FuY2VsID0gY2FuY2VsO1xuICBkZWJvdW5jZWQuZmx1c2ggPSBmbHVzaDtcbiAgcmV0dXJuIGRlYm91bmNlZDtcbn1cblxuZXhwb3J0IGRlZmF1bHQgZGVib3VuY2U7XG4iLCIvKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIHRoZVxuICogW2xhbmd1YWdlIHR5cGVdKGh0dHA6Ly93d3cuZWNtYS1pbnRlcm5hdGlvbmFsLm9yZy9lY21hLTI2Mi83LjAvI3NlYy1lY21hc2NyaXB0LWxhbmd1YWdlLXR5cGVzKVxuICogb2YgYE9iamVjdGAuIChlLmcuIGFycmF5cywgZnVuY3Rpb25zLCBvYmplY3RzLCByZWdleGVzLCBgbmV3IE51bWJlcigwKWAsIGFuZCBgbmV3IFN0cmluZygnJylgKVxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgMC4xLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGFuIG9iamVjdCwgZWxzZSBgZmFsc2VgLlxuICogQGV4YW1wbGVcbiAqXG4gKiBfLmlzT2JqZWN0KHt9KTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0KFsxLCAyLCAzXSk7XG4gKiAvLyA9PiB0cnVlXG4gKlxuICogXy5pc09iamVjdChfLm5vb3ApO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3QobnVsbCk7XG4gKiAvLyA9PiBmYWxzZVxuICovXG5mdW5jdGlvbiBpc09iamVjdCh2YWx1ZSkge1xuICB2YXIgdHlwZSA9IHR5cGVvZiB2YWx1ZTtcbiAgcmV0dXJuIHZhbHVlICE9IG51bGwgJiYgKHR5cGUgPT0gJ29iamVjdCcgfHwgdHlwZSA9PSAnZnVuY3Rpb24nKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgaXNPYmplY3Q7XG4iLCIvKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIG9iamVjdC1saWtlLiBBIHZhbHVlIGlzIG9iamVjdC1saWtlIGlmIGl0J3Mgbm90IGBudWxsYFxuICogYW5kIGhhcyBhIGB0eXBlb2ZgIHJlc3VsdCBvZiBcIm9iamVjdFwiLlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIG9iamVjdC1saWtlLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKHt9KTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzT2JqZWN0TGlrZShbMSwgMiwgM10pO1xuICogLy8gPT4gdHJ1ZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKF8ubm9vcCk7XG4gKiAvLyA9PiBmYWxzZVxuICpcbiAqIF8uaXNPYmplY3RMaWtlKG51bGwpO1xuICogLy8gPT4gZmFsc2VcbiAqL1xuZnVuY3Rpb24gaXNPYmplY3RMaWtlKHZhbHVlKSB7XG4gIHJldHVybiB2YWx1ZSAhPSBudWxsICYmIHR5cGVvZiB2YWx1ZSA9PSAnb2JqZWN0Jztcbn1cblxuZXhwb3J0IGRlZmF1bHQgaXNPYmplY3RMaWtlO1xuIiwiaW1wb3J0IGJhc2VHZXRUYWcgZnJvbSAnLi9fYmFzZUdldFRhZy5qcyc7XG5pbXBvcnQgaXNPYmplY3RMaWtlIGZyb20gJy4vaXNPYmplY3RMaWtlLmpzJztcblxuLyoqIGBPYmplY3QjdG9TdHJpbmdgIHJlc3VsdCByZWZlcmVuY2VzLiAqL1xudmFyIHN5bWJvbFRhZyA9ICdbb2JqZWN0IFN5bWJvbF0nO1xuXG4vKipcbiAqIENoZWNrcyBpZiBgdmFsdWVgIGlzIGNsYXNzaWZpZWQgYXMgYSBgU3ltYm9sYCBwcmltaXRpdmUgb3Igb2JqZWN0LlxuICpcbiAqIEBzdGF0aWNcbiAqIEBtZW1iZXJPZiBfXG4gKiBAc2luY2UgNC4wLjBcbiAqIEBjYXRlZ29yeSBMYW5nXG4gKiBAcGFyYW0geyp9IHZhbHVlIFRoZSB2YWx1ZSB0byBjaGVjay5cbiAqIEByZXR1cm5zIHtib29sZWFufSBSZXR1cm5zIGB0cnVlYCBpZiBgdmFsdWVgIGlzIGEgc3ltYm9sLCBlbHNlIGBmYWxzZWAuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8uaXNTeW1ib2woU3ltYm9sLml0ZXJhdG9yKTtcbiAqIC8vID0+IHRydWVcbiAqXG4gKiBfLmlzU3ltYm9sKCdhYmMnKTtcbiAqIC8vID0+IGZhbHNlXG4gKi9cbmZ1bmN0aW9uIGlzU3ltYm9sKHZhbHVlKSB7XG4gIHJldHVybiB0eXBlb2YgdmFsdWUgPT0gJ3N5bWJvbCcgfHxcbiAgICAoaXNPYmplY3RMaWtlKHZhbHVlKSAmJiBiYXNlR2V0VGFnKHZhbHVlKSA9PSBzeW1ib2xUYWcpO1xufVxuXG5leHBvcnQgZGVmYXVsdCBpc1N5bWJvbDtcbiIsImltcG9ydCByb290IGZyb20gJy4vX3Jvb3QuanMnO1xuXG4vKipcbiAqIEdldHMgdGhlIHRpbWVzdGFtcCBvZiB0aGUgbnVtYmVyIG9mIG1pbGxpc2Vjb25kcyB0aGF0IGhhdmUgZWxhcHNlZCBzaW5jZVxuICogdGhlIFVuaXggZXBvY2ggKDEgSmFudWFyeSAxOTcwIDAwOjAwOjAwIFVUQykuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSAyLjQuMFxuICogQGNhdGVnb3J5IERhdGVcbiAqIEByZXR1cm5zIHtudW1iZXJ9IFJldHVybnMgdGhlIHRpbWVzdGFtcC5cbiAqIEBleGFtcGxlXG4gKlxuICogXy5kZWZlcihmdW5jdGlvbihzdGFtcCkge1xuICogICBjb25zb2xlLmxvZyhfLm5vdygpIC0gc3RhbXApO1xuICogfSwgXy5ub3coKSk7XG4gKiAvLyA9PiBMb2dzIHRoZSBudW1iZXIgb2YgbWlsbGlzZWNvbmRzIGl0IHRvb2sgZm9yIHRoZSBkZWZlcnJlZCBpbnZvY2F0aW9uLlxuICovXG52YXIgbm93ID0gZnVuY3Rpb24oKSB7XG4gIHJldHVybiByb290LkRhdGUubm93KCk7XG59O1xuXG5leHBvcnQgZGVmYXVsdCBub3c7XG4iLCJpbXBvcnQgYmFzZVRyaW0gZnJvbSAnLi9fYmFzZVRyaW0uanMnO1xuaW1wb3J0IGlzT2JqZWN0IGZyb20gJy4vaXNPYmplY3QuanMnO1xuaW1wb3J0IGlzU3ltYm9sIGZyb20gJy4vaXNTeW1ib2wuanMnO1xuXG4vKiogVXNlZCBhcyByZWZlcmVuY2VzIGZvciB2YXJpb3VzIGBOdW1iZXJgIGNvbnN0YW50cy4gKi9cbnZhciBOQU4gPSAwIC8gMDtcblxuLyoqIFVzZWQgdG8gZGV0ZWN0IGJhZCBzaWduZWQgaGV4YWRlY2ltYWwgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzQmFkSGV4ID0gL15bLStdMHhbMC05YS1mXSskL2k7XG5cbi8qKiBVc2VkIHRvIGRldGVjdCBiaW5hcnkgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzQmluYXJ5ID0gL14wYlswMV0rJC9pO1xuXG4vKiogVXNlZCB0byBkZXRlY3Qgb2N0YWwgc3RyaW5nIHZhbHVlcy4gKi9cbnZhciByZUlzT2N0YWwgPSAvXjBvWzAtN10rJC9pO1xuXG4vKiogQnVpbHQtaW4gbWV0aG9kIHJlZmVyZW5jZXMgd2l0aG91dCBhIGRlcGVuZGVuY3kgb24gYHJvb3RgLiAqL1xudmFyIGZyZWVQYXJzZUludCA9IHBhcnNlSW50O1xuXG4vKipcbiAqIENvbnZlcnRzIGB2YWx1ZWAgdG8gYSBudW1iZXIuXG4gKlxuICogQHN0YXRpY1xuICogQG1lbWJlck9mIF9cbiAqIEBzaW5jZSA0LjAuMFxuICogQGNhdGVnb3J5IExhbmdcbiAqIEBwYXJhbSB7Kn0gdmFsdWUgVGhlIHZhbHVlIHRvIHByb2Nlc3MuXG4gKiBAcmV0dXJucyB7bnVtYmVyfSBSZXR1cm5zIHRoZSBudW1iZXIuXG4gKiBAZXhhbXBsZVxuICpcbiAqIF8udG9OdW1iZXIoMy4yKTtcbiAqIC8vID0+IDMuMlxuICpcbiAqIF8udG9OdW1iZXIoTnVtYmVyLk1JTl9WQUxVRSk7XG4gKiAvLyA9PiA1ZS0zMjRcbiAqXG4gKiBfLnRvTnVtYmVyKEluZmluaXR5KTtcbiAqIC8vID0+IEluZmluaXR5XG4gKlxuICogXy50b051bWJlcignMy4yJyk7XG4gKiAvLyA9PiAzLjJcbiAqL1xuZnVuY3Rpb24gdG9OdW1iZXIodmFsdWUpIHtcbiAgaWYgKHR5cGVvZiB2YWx1ZSA9PSAnbnVtYmVyJykge1xuICAgIHJldHVybiB2YWx1ZTtcbiAgfVxuICBpZiAoaXNTeW1ib2wodmFsdWUpKSB7XG4gICAgcmV0dXJuIE5BTjtcbiAgfVxuICBpZiAoaXNPYmplY3QodmFsdWUpKSB7XG4gICAgdmFyIG90aGVyID0gdHlwZW9mIHZhbHVlLnZhbHVlT2YgPT0gJ2Z1bmN0aW9uJyA/IHZhbHVlLnZhbHVlT2YoKSA6IHZhbHVlO1xuICAgIHZhbHVlID0gaXNPYmplY3Qob3RoZXIpID8gKG90aGVyICsgJycpIDogb3RoZXI7XG4gIH1cbiAgaWYgKHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykge1xuICAgIHJldHVybiB2YWx1ZSA9PT0gMCA/IHZhbHVlIDogK3ZhbHVlO1xuICB9XG4gIHZhbHVlID0gYmFzZVRyaW0odmFsdWUpO1xuICB2YXIgaXNCaW5hcnkgPSByZUlzQmluYXJ5LnRlc3QodmFsdWUpO1xuICByZXR1cm4gKGlzQmluYXJ5IHx8IHJlSXNPY3RhbC50ZXN0KHZhbHVlKSlcbiAgICA/IGZyZWVQYXJzZUludCh2YWx1ZS5zbGljZSgyKSwgaXNCaW5hcnkgPyAyIDogOClcbiAgICA6IChyZUlzQmFkSGV4LnRlc3QodmFsdWUpID8gTkFOIDogK3ZhbHVlKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgdG9OdW1iZXI7XG4iLCJ2YXIgZztcblxuLy8gVGhpcyB3b3JrcyBpbiBub24tc3RyaWN0IG1vZGVcbmcgPSAoZnVuY3Rpb24oKSB7XG5cdHJldHVybiB0aGlzO1xufSkoKTtcblxudHJ5IHtcblx0Ly8gVGhpcyB3b3JrcyBpZiBldmFsIGlzIGFsbG93ZWQgKHNlZSBDU1ApXG5cdGcgPSBnIHx8IG5ldyBGdW5jdGlvbihcInJldHVybiB0aGlzXCIpKCk7XG59IGNhdGNoIChlKSB7XG5cdC8vIFRoaXMgd29ya3MgaWYgdGhlIHdpbmRvdyByZWZlcmVuY2UgaXMgYXZhaWxhYmxlXG5cdGlmICh0eXBlb2Ygd2luZG93ID09PSBcIm9iamVjdFwiKSBnID0gd2luZG93O1xufVxuXG4vLyBnIGNhbiBzdGlsbCBiZSB1bmRlZmluZWQsIGJ1dCBub3RoaW5nIHRvIGRvIGFib3V0IGl0Li4uXG4vLyBXZSByZXR1cm4gdW5kZWZpbmVkLCBpbnN0ZWFkIG9mIG5vdGhpbmcgaGVyZSwgc28gaXQnc1xuLy8gZWFzaWVyIHRvIGhhbmRsZSB0aGlzIGNhc2UuIGlmKCFnbG9iYWwpIHsgLi4ufVxuXG5tb2R1bGUuZXhwb3J0cyA9IGc7XG4iLCJpbXBvcnQgQXV0b2NvbXBsZXRlRm9ybSBmcm9tICdzcmMvU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL2F1dG9jb21wbGV0ZS1mb3JtL2F1dG9jb21wbGV0ZS1mb3JtJztcblxuZXhwb3J0IGVudW0gRXZlbnRzIHtcbiAgICBGRVRDSElORyA9ICdmZXRjaGluZycsXG4gICAgRkVUQ0hFRCA9ICdmZXRjaGVkJyxcbiAgICBDSEFOR0UgPSAnY2hhbmdlJyxcbiAgICBTRVQgPSAnc2V0JyxcbiAgICBVTlNFVCA9ICd1bnNldCcsXG59XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RTZWFyY2hBdXRvY29tcGxldGVGb3JtIGV4dGVuZHMgQXV0b2NvbXBsZXRlRm9ybSB7XG4gICAgcHJvdGVjdGVkIHdpZGdldFN1Z2dlc3Rpb25zQ29udGFpbmVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgc3VnZ2VzdGlvbkl0ZW1zOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBsYXN0U2VsZWN0ZWRJdGVtOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcXVhbnRpdHlJbnB1dDogSFRNTElucHV0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLndpZGdldFN1Z2dlc3Rpb25zQ29udGFpbmVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3N1Z2dlc3Rpb25zYClbMF07XG4gICAgICAgIHRoaXMucXVhbnRpdHlJbnB1dCA9IDxIVE1MSW5wdXRFbGVtZW50PmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19xdWFudGl0eS1maWVsZGApWzBdO1xuICAgICAgICBzdXBlci5pbml0KCk7XG4gICAgICAgIHRoaXMucGx1Z0tleWRvd25FdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBwbHVnS2V5ZG93bkV2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdrZXlkb3duJywgKGV2ZW50OiBLZXlib2FyZEV2ZW50KSA9PiB0aGlzLm9uS2V5RG93bihldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbklucHV0KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5pbnB1dFRleHQubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5sb2FkU3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNob3dTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy53aWRnZXRTdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZVN1Z2dlc3Rpb25zKCk6IHZvaWQge1xuICAgICAgICB0aGlzLndpZGdldFN1Z2dlc3Rpb25zQ29udGFpbmVyLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBJdGVtRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzZWxmID0gdGhpcztcbiAgICAgICAgY29uc3QgaXRlbXMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMud2lkZ2V0U3VnZ2VzdGlvbnNDb250YWluZXIuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLml0ZW1DbGFzc05hbWUpKVxuICAgICAgICApO1xuICAgICAgICBpdGVtcy5mb3JFYWNoKChpdGVtOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHNlbGYub25JdGVtQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uS2V5RG93bihldmVudDogS2V5Ym9hcmRFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuc3VnZ2VzdGlvbkl0ZW1zICYmIHRoaXMuaW5wdXRUZXh0Lmxlbmd0aCA8IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgc3dpdGNoIChldmVudC5rZXkpIHtcbiAgICAgICAgICAgIGNhc2UgJ0Fycm93VXAnOlxuICAgICAgICAgICAgICAgIHRoaXMub25LZXlEb3duQXJyb3dVcCgpO1xuICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgY2FzZSAnQXJyb3dEb3duJzpcbiAgICAgICAgICAgICAgICB0aGlzLm9uS2V5RG93bkFycm93RG93bigpO1xuICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgY2FzZSAnRW50ZXInOlxuICAgICAgICAgICAgICAgIHRoaXMub25LZXlEb3duRW50ZXIoKTtcbiAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbktleURvd25BcnJvd1VwKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBsYXN0U2VsZWN0ZWRJdGVtSW5kZXggPSB0aGlzLnN1Z2dlc3Rpb25JdGVtcy5pbmRleE9mKHRoaXMubGFzdFNlbGVjdGVkSXRlbSk7XG4gICAgICAgIGNvbnN0IGVsZW1lbnRJbmRleCA9IGxhc3RTZWxlY3RlZEl0ZW1JbmRleCAtIDE7XG4gICAgICAgIGNvbnN0IGxhc3RTdWdnZXN0aW9uSXRlbUluZGV4ID0gdGhpcy5zdWdnZXN0aW9uSXRlbXMubGVuZ3RoIC0gMTtcbiAgICAgICAgY29uc3QgaXRlbSA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zW2VsZW1lbnRJbmRleCA8IDAgPyBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA6IGVsZW1lbnRJbmRleF07XG5cbiAgICAgICAgdGhpcy5jaGFuZ2VTZWxlY3RlZEl0ZW0oaXRlbSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uS2V5RG93bkFycm93RG93bigpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGFzdFNlbGVjdGVkSXRlbUluZGV4ID0gdGhpcy5zdWdnZXN0aW9uSXRlbXMuaW5kZXhPZih0aGlzLmxhc3RTZWxlY3RlZEl0ZW0pO1xuICAgICAgICBjb25zdCBlbGVtZW50SW5kZXggPSBsYXN0U2VsZWN0ZWRJdGVtSW5kZXggKyAxO1xuICAgICAgICBjb25zdCBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA9IHRoaXMuc3VnZ2VzdGlvbkl0ZW1zLmxlbmd0aCAtIDE7XG4gICAgICAgIGNvbnN0IGl0ZW0gPSB0aGlzLnN1Z2dlc3Rpb25JdGVtc1tlbGVtZW50SW5kZXggPiBsYXN0U3VnZ2VzdGlvbkl0ZW1JbmRleCA/IDAgOiBlbGVtZW50SW5kZXhdO1xuXG4gICAgICAgIHRoaXMuY2hhbmdlU2VsZWN0ZWRJdGVtKGl0ZW0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbktleURvd25FbnRlcigpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5sYXN0U2VsZWN0ZWRJdGVtLmNsaWNrKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNoYW5nZVNlbGVjdGVkSXRlbShpdGVtOiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLmxhc3RTZWxlY3RlZEl0ZW0uY2xhc3NMaXN0LnJlbW92ZSh0aGlzLnNlbGVjdGVkSW5wdXRDbGFzcyk7XG4gICAgICAgIGl0ZW0uY2xhc3NMaXN0LmFkZCh0aGlzLnNlbGVjdGVkSW5wdXRDbGFzcyk7XG4gICAgICAgIHRoaXMubGFzdFNlbGVjdGVkSXRlbSA9IGl0ZW07XG4gICAgfVxuXG4gICAgYXN5bmMgbG9hZFN1Z2dlc3Rpb25zKCk6IFByb21pc2U8dm9pZD4ge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRXZlbnRzLkZFVENISU5HKTtcbiAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcbiAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIucXVlcnlQYXJhbXMuc2V0KHRoaXMucXVlcnlQYXJhbU5hbWUsIHRoaXMuaW5wdXRUZXh0KTtcbiAgICAgICAgYXdhaXQgdGhpcy5hamF4UHJvdmlkZXIuZmV0Y2goKTtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uSXRlbXMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMud2lkZ2V0U3VnZ2VzdGlvbnNDb250YWluZXIuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLml0ZW1DbGFzc05hbWUpKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLmxhc3RTZWxlY3RlZEl0ZW0gPSB0aGlzLnN1Z2dlc3Rpb25JdGVtc1swXTtcbiAgICAgICAgdGhpcy5tYXBJdGVtRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgc2V0SW5wdXRzKGRhdGE6IHN0cmluZywgdGV4dDogc3RyaW5nKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXRUZXh0ID0gdGV4dDtcbiAgICAgICAgdGhpcy5pbnB1dFZhbHVlID0gZGF0YTtcblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRXZlbnRzLlNFVCwgeyB0ZXh0OiB0aGlzLmlucHV0VGV4dCwgdmFsdWU6IHRoaXMuaW5wdXRWYWx1ZSB9KTtcblxuICAgICAgICBpZiAodGhpcy5xdWFudGl0eUlucHV0KSB7XG4gICAgICAgICAgICB0aGlzLnF1YW50aXR5SW5wdXQuZm9jdXMoKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkJsdXIoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRm9jdXMoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VGV4dC5sZW5ndGggPj0gdGhpcy5taW5MZXR0ZXJzKSB7XG4gICAgICAgICAgICB0aGlzLnNob3dTdWdnZXN0aW9ucygpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlucHV0VGV4dCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5pbnB1dEVsZW1lbnQudmFsdWUudHJpbSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXQgaW5wdXRUZXh0KHZhbHVlOiBzdHJpbmcpIHtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQudmFsdWUgPSB2YWx1ZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNlbGVjdGVkSW5wdXRDbGFzcygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gYCR7dGhpcy5pdGVtQ2xhc3NOYW1lfS0tc2VsZWN0ZWRgLnN1YnN0cigxKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlucHV0VmFsdWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGlkZGVuSW5wdXRFbGVtZW50LnZhbHVlO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXQgaW5wdXRWYWx1ZSh2YWx1ZTogc3RyaW5nKSB7XG4gICAgICAgIHRoaXMuaGlkZGVuSW5wdXRFbGVtZW50LnZhbHVlID0gdmFsdWU7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgQWpheFByb3ZpZGVyIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9hamF4LXByb3ZpZGVyL2FqYXgtcHJvdmlkZXInO1xuaW1wb3J0IGRlYm91bmNlIGZyb20gJ2xvZGFzaC1lcy9kZWJvdW5jZSc7XG5pbXBvcnQgT3ZlcmxheUJsb2NrIGZyb20gJy4uLy4uL2F0b21zL292ZXJsYXktYmxvY2svb3ZlcmxheS1ibG9jayc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEF1dG9jb21wbGV0ZUZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBhamF4UHJvdmlkZXI6IEFqYXhQcm92aWRlcjtcbiAgICBwcm90ZWN0ZWQgaW5wdXRFbGVtZW50OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBoaWRkZW5JbnB1dEVsZW1lbnQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHN1Z2dlc3Rpb25zQ29udGFpbmVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgY2xlYW5CdXR0b246IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBvdmVybGF5OiBPdmVybGF5QmxvY2s7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIgPSA8QWpheFByb3ZpZGVyPnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3Byb3ZpZGVyYClbMF07XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fY29udGFpbmVyYClbMF07XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXRgKVswXTtcbiAgICAgICAgdGhpcy5oaWRkZW5JbnB1dEVsZW1lbnQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dC1oaWRkZW5gKVswXTtcbiAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19jbGVhbi1idXR0b25gKVswXTtcbiAgICAgICAgdGhpcy5vdmVybGF5ID0gPE92ZXJsYXlCbG9jaz5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMub3ZlcmxheUJsb2NrQ2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgICAgICAgICAgJ2lucHV0JyxcbiAgICAgICAgICAgIGRlYm91bmNlKCgpID0+IHRoaXMub25JbnB1dCgpLCB0aGlzLmRlYm91bmNlRGVsYXkpLFxuICAgICAgICApO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgICAgICAgICAgJ2JsdXInLFxuICAgICAgICAgICAgZGVib3VuY2UoKCkgPT4gdGhpcy5vbkJsdXIoKSwgdGhpcy5kZWJvdW5jZURlbGF5KSxcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignZm9jdXMnLCAoKSA9PiB0aGlzLm9uRm9jdXMoKSk7XG4gICAgICAgIGlmICh0aGlzLnNob3dDbGVhbkJ1dHRvbikge1xuICAgICAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25DbGVhbkJ1dHRvbkNsaWNrKCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2xlYW5CdXR0b25DbGljaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jbGVhbkZpZWxkcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkJsdXIoKTogdm9pZCB7XG4gICAgICAgIHRoaXMub3ZlcmxheS5oaWRlT3ZlcmxheSgnbm8tYWdlbnQtdXNlcicsICduby1hZ2VudC11c2VyJyk7XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRm9jdXMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMub3ZlcmxheS5zaG93T3ZlcmxheSgnbm8tYWdlbnQtdXNlcicsICduby1hZ2VudC11c2VyJyk7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VmFsdWUubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSW5wdXQoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VmFsdWUubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5sb2FkU3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNob3dTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZVN1Z2dlc3Rpb25zKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIGFzeW5jIGxvYWRTdWdnZXN0aW9ucygpOiBQcm9taXNlPHZvaWQ+IHtcbiAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcbiAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIucXVlcnlQYXJhbXMuc2V0KHRoaXMucXVlcnlQYXJhbU5hbWUsIHRoaXMuaW5wdXRWYWx1ZSk7XG5cbiAgICAgICAgYXdhaXQgdGhpcy5hamF4UHJvdmlkZXIuZmV0Y2goKTtcbiAgICAgICAgdGhpcy5tYXBJdGVtRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEl0ZW1FdmVudHMoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHNlbGYgPSB0aGlzO1xuICAgICAgICBjb25zdCBpdGVtcyA9IEFycmF5LmZyb20odGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuaXRlbUNsYXNzTmFtZSkpO1xuICAgICAgICBpdGVtcy5mb3JFYWNoKChpdGVtOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHNlbGYub25JdGVtQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSXRlbUNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBkYXRhVGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LnRhcmdldDtcbiAgICAgICAgY29uc3QgZGF0YSA9IGRhdGFUYXJnZXQuZ2V0QXR0cmlidXRlKHRoaXMudmFsdWVEYXRhQXR0cmlidXRlKTtcbiAgICAgICAgY29uc3QgdGV4dCA9IGRhdGFUYXJnZXQudGV4dENvbnRlbnQudHJpbSgpO1xuXG4gICAgICAgIHRoaXMuc2V0SW5wdXRzKGRhdGEsIHRleHQpO1xuICAgIH1cblxuICAgIHNldElucHV0cyhkYXRhOiBzdHJpbmcsIHRleHQ6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmhpZGRlbklucHV0RWxlbWVudC52YWx1ZSA9IGRhdGE7XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50LnZhbHVlID0gdGV4dDtcbiAgICB9XG5cbiAgICBjbGVhbkZpZWxkcygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZXRJbnB1dHMoJycsICcnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1pbkxldHRlcnMoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLmdldEF0dHJpYnV0ZSgnbWluLWxldHRlcnMnKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbnB1dFZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmlucHV0RWxlbWVudC52YWx1ZS50cmltKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBxdWVyeVBhcmFtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3F1ZXJ5LXBhcmFtLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHZhbHVlRGF0YUF0dHJpYnV0ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3ZhbHVlLWRhdGEtYXR0cmlidXRlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnaXRlbS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkZWJvdW5jZURlbGF5KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5nZXRBdHRyaWJ1dGUoJ2RlYm91bmNlLWRlbGF5JykpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc2hvd0NsZWFuQnV0dG9uKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5oYXNBdHRyaWJ1dGUoJ3Nob3ctY2xlYW4tYnV0dG9uJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBvdmVybGF5QmxvY2tDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdvdmVybGF5LWJsb2NrLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9