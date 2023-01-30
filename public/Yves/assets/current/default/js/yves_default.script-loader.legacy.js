(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["script-loader"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/script-loader/script-loader.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/script-loader/script-loader.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ScriptLoader; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var _app_logger__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../app/logger */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/logger.ts");




var EVENT_SCRIPT_LOAD = 'scriptload';
var defaultIgnoredAttributes = ['class', 'data-qa'];
/**
 * @event scriptload An event which is triggered when a script is loaded.
 */

var ScriptLoader = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ScriptLoader, _Component);

  function ScriptLoader() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.head = void 0;
    _this.script = void 0;
    return _this;
  }

  var _proto = ScriptLoader.prototype;

  _proto.readyCallback = function readyCallback() {
    this.script = document.querySelector("script[src=\"" + this.src + "\"]");

    if (!!this.script) {
      this.mapEvents();
      Object(_app_logger__WEBPACK_IMPORTED_MODULE_3__["debug"])(this.name + ": \"" + this.src + "\" is already in the DOM");
      return;
    }

    this.head = document.getElementsByTagName('head')[0];
    this.script = document.createElement('script');
    this.mapEvents();
    this.setScriptAttributes();
    this.appendScriptTag();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.script.addEventListener('load', function (event) {
      return _this2.onScriptLoad(event);
    }, {
      once: true
    });
  };

  _proto.onScriptLoad = function onScriptLoad(event) {
    this.dispatchCustomEvent(EVENT_SCRIPT_LOAD);
  };

  _proto.setScriptAttributes = function setScriptAttributes() {
    var _this3 = this;

    Array.prototype.forEach.call(this.attributes, function (attribute) {
      if (!_this3.isAttributeIgnored(attribute.name)) {
        _this3.script.setAttribute(attribute.name, attribute.value);
      }
    });
  };

  _proto.appendScriptTag = function appendScriptTag() {
    this.head.appendChild(this.script);
    Object(_app_logger__WEBPACK_IMPORTED_MODULE_3__["debug"])(this.name + ": \"" + this.src + "\" added to the DOM");
  };

  _proto.isAttributeIgnored = function isAttributeIgnored(attributeName) {
    return this.ignoredAttributes.indexOf(attributeName) !== -1;
  }
  /**
   * Gets the array of ignored attributes that are not copied from the current component
   * to the script tag when created.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ScriptLoader, [{
    key: "ignoredAttributes",
    get: function get() {
      return [].concat(defaultIgnoredAttributes);
    }
    /**
     * Gets if the script already exists in DOM.
     */

  }, {
    key: "isScriptAlreadyInDOM",
    get: function get() {
      return !!document.querySelector("script[src=\"" + this.src + "\"]");
    }
    /**
     * Gets the url endpoint used to load the script.
     */

  }, {
    key: "src",
    get: function get() {
      return this.getAttribute('src');
    }
  }]);

  return ScriptLoader;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc2NyaXB0LWxvYWRlci9zY3JpcHQtbG9hZGVyLnRzIl0sIm5hbWVzIjpbIkVWRU5UX1NDUklQVF9MT0FEIiwiZGVmYXVsdElnbm9yZWRBdHRyaWJ1dGVzIiwiU2NyaXB0TG9hZGVyIiwiaGVhZCIsInNjcmlwdCIsInJlYWR5Q2FsbGJhY2siLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJzcmMiLCJtYXBFdmVudHMiLCJkZWJ1ZyIsIm5hbWUiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNyZWF0ZUVsZW1lbnQiLCJzZXRTY3JpcHRBdHRyaWJ1dGVzIiwiYXBwZW5kU2NyaXB0VGFnIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25TY3JpcHRMb2FkIiwib25jZSIsImRpc3BhdGNoQ3VzdG9tRXZlbnQiLCJBcnJheSIsInByb3RvdHlwZSIsImZvckVhY2giLCJjYWxsIiwiYXR0cmlidXRlcyIsImF0dHJpYnV0ZSIsImlzQXR0cmlidXRlSWdub3JlZCIsInNldEF0dHJpYnV0ZSIsInZhbHVlIiwiYXBwZW5kQ2hpbGQiLCJhdHRyaWJ1dGVOYW1lIiwiaWdub3JlZEF0dHJpYnV0ZXMiLCJpbmRleE9mIiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFFQSxJQUFNQSxpQkFBaUIsR0FBRyxZQUExQjtBQUNBLElBQU1DLHdCQUF3QixHQUFHLENBQUMsT0FBRCxFQUFVLFNBQVYsQ0FBakM7QUFFQTtBQUNBO0FBQ0E7O0lBQ3FCQyxZOzs7Ozs7Ozs7OztVQUlqQkMsSTtVQUtBQyxNOzs7Ozs7U0FFVUMsYSxHQUFWLHlCQUFnQztBQUM1QixTQUFLRCxNQUFMLEdBQWlDRSxRQUFRLENBQUNDLGFBQVQsbUJBQXNDLEtBQUtDLEdBQTNDLFNBQWpDOztBQUVBLFFBQUksQ0FBQyxDQUFDLEtBQUtKLE1BQVgsRUFBbUI7QUFDZixXQUFLSyxTQUFMO0FBQ0FDLCtEQUFLLENBQUksS0FBS0MsSUFBVCxZQUFtQixLQUFLSCxHQUF4Qiw4QkFBTDtBQUVBO0FBQ0g7O0FBRUQsU0FBS0wsSUFBTCxHQUE2QkcsUUFBUSxDQUFDTSxvQkFBVCxDQUE4QixNQUE5QixFQUFzQyxDQUF0QyxDQUE3QjtBQUNBLFNBQUtSLE1BQUwsR0FBaUNFLFFBQVEsQ0FBQ08sYUFBVCxDQUF1QixRQUF2QixDQUFqQztBQUVBLFNBQUtKLFNBQUw7QUFDQSxTQUFLSyxtQkFBTDtBQUNBLFNBQUtDLGVBQUw7QUFDSCxHOztTQUVTTixTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtMLE1BQUwsQ0FBWVksZ0JBQVosQ0FBNkIsTUFBN0IsRUFBcUMsVUFBQ0MsS0FBRDtBQUFBLGFBQWtCLE1BQUksQ0FBQ0MsWUFBTCxDQUFrQkQsS0FBbEIsQ0FBbEI7QUFBQSxLQUFyQyxFQUFpRjtBQUFFRSxVQUFJLEVBQUU7QUFBUixLQUFqRjtBQUNILEc7O1NBRVNELFksR0FBVixzQkFBdUJELEtBQXZCLEVBQTJDO0FBQ3ZDLFNBQUtHLG1CQUFMLENBQXlCcEIsaUJBQXpCO0FBQ0gsRzs7U0FFU2MsbUIsR0FBViwrQkFBc0M7QUFBQTs7QUFDbENPLFNBQUssQ0FBQ0MsU0FBTixDQUFnQkMsT0FBaEIsQ0FBd0JDLElBQXhCLENBQTZCLEtBQUtDLFVBQWxDLEVBQThDLFVBQUNDLFNBQUQsRUFBcUI7QUFDL0QsVUFBSSxDQUFDLE1BQUksQ0FBQ0Msa0JBQUwsQ0FBd0JELFNBQVMsQ0FBQ2YsSUFBbEMsQ0FBTCxFQUE4QztBQUMxQyxjQUFJLENBQUNQLE1BQUwsQ0FBWXdCLFlBQVosQ0FBeUJGLFNBQVMsQ0FBQ2YsSUFBbkMsRUFBeUNlLFNBQVMsQ0FBQ0csS0FBbkQ7QUFDSDtBQUNKLEtBSkQ7QUFLSCxHOztTQUVTZCxlLEdBQVYsMkJBQWtDO0FBQzlCLFNBQUtaLElBQUwsQ0FBVTJCLFdBQVYsQ0FBc0IsS0FBSzFCLE1BQTNCO0FBQ0FNLDZEQUFLLENBQUksS0FBS0MsSUFBVCxZQUFtQixLQUFLSCxHQUF4Qix5QkFBTDtBQUNILEc7O1NBRVNtQixrQixHQUFWLDRCQUE2QkksYUFBN0IsRUFBNkQ7QUFDekQsV0FBTyxLQUFLQyxpQkFBTCxDQUF1QkMsT0FBdkIsQ0FBK0JGLGFBQS9CLE1BQWtELENBQUMsQ0FBMUQ7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7OztTQUNJLGVBQWtDO0FBQzlCLHVCQUFXOUIsd0JBQVg7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQW9DO0FBQ2hDLGFBQU8sQ0FBQyxDQUFDSyxRQUFRLENBQUNDLGFBQVQsbUJBQXNDLEtBQUtDLEdBQTNDLFNBQVQ7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQWtCO0FBQ2QsYUFBTyxLQUFLMEIsWUFBTCxDQUFrQixLQUFsQixDQUFQO0FBQ0g7Ozs7RUExRXFDQyx5RCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5zY3JpcHQtbG9hZGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgeyBkZWJ1ZyB9IGZyb20gJy4uLy4uLy4uL2FwcC9sb2dnZXInO1xuXG5jb25zdCBFVkVOVF9TQ1JJUFRfTE9BRCA9ICdzY3JpcHRsb2FkJztcbmNvbnN0IGRlZmF1bHRJZ25vcmVkQXR0cmlidXRlcyA9IFsnY2xhc3MnLCAnZGF0YS1xYSddO1xuXG4vKipcbiAqIEBldmVudCBzY3JpcHRsb2FkIEFuIGV2ZW50IHdoaWNoIGlzIHRyaWdnZXJlZCB3aGVuIGEgc2NyaXB0IGlzIGxvYWRlZC5cbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgU2NyaXB0TG9hZGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBUaGUgPGhlYWQ+IHRhZyBvbiB0aGUgcGFnZS5cbiAgICAgKi9cbiAgICBoZWFkOiBIVE1MSGVhZEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgPHNjcmlwdD4gdGFnIG8gdGhlIHBhZ2UuXG4gICAgICovXG4gICAgc2NyaXB0OiBIVE1MU2NyaXB0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNjcmlwdCA9IDxIVE1MU2NyaXB0RWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKGBzY3JpcHRbc3JjPVwiJHt0aGlzLnNyY31cIl1gKTtcblxuICAgICAgICBpZiAoISF0aGlzLnNjcmlwdCkge1xuICAgICAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICAgICAgICAgIGRlYnVnKGAke3RoaXMubmFtZX06IFwiJHt0aGlzLnNyY31cIiBpcyBhbHJlYWR5IGluIHRoZSBET01gKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5oZWFkID0gPEhUTUxIZWFkRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaGVhZCcpWzBdO1xuICAgICAgICB0aGlzLnNjcmlwdCA9IDxIVE1MU2NyaXB0RWxlbWVudD5kb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgICAgICB0aGlzLnNldFNjcmlwdEF0dHJpYnV0ZXMoKTtcbiAgICAgICAgdGhpcy5hcHBlbmRTY3JpcHRUYWcoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNjcmlwdC5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblNjcmlwdExvYWQoZXZlbnQpLCB7IG9uY2U6IHRydWUgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uU2NyaXB0TG9hZChldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1NDUklQVF9MT0FEKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0U2NyaXB0QXR0cmlidXRlcygpOiB2b2lkIHtcbiAgICAgICAgQXJyYXkucHJvdG90eXBlLmZvckVhY2guY2FsbCh0aGlzLmF0dHJpYnV0ZXMsIChhdHRyaWJ1dGU6IEF0dHIpID0+IHtcbiAgICAgICAgICAgIGlmICghdGhpcy5pc0F0dHJpYnV0ZUlnbm9yZWQoYXR0cmlidXRlLm5hbWUpKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5zY3JpcHQuc2V0QXR0cmlidXRlKGF0dHJpYnV0ZS5uYW1lLCBhdHRyaWJ1dGUudmFsdWUpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgYXBwZW5kU2NyaXB0VGFnKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmhlYWQuYXBwZW5kQ2hpbGQodGhpcy5zY3JpcHQpO1xuICAgICAgICBkZWJ1ZyhgJHt0aGlzLm5hbWV9OiBcIiR7dGhpcy5zcmN9XCIgYWRkZWQgdG8gdGhlIERPTWApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpc0F0dHJpYnV0ZUlnbm9yZWQoYXR0cmlidXRlTmFtZTogc3RyaW5nKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmlnbm9yZWRBdHRyaWJ1dGVzLmluZGV4T2YoYXR0cmlidXRlTmFtZSkgIT09IC0xO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIGFycmF5IG9mIGlnbm9yZWQgYXR0cmlidXRlcyB0aGF0IGFyZSBub3QgY29waWVkIGZyb20gdGhlIGN1cnJlbnQgY29tcG9uZW50XG4gICAgICogdG8gdGhlIHNjcmlwdCB0YWcgd2hlbiBjcmVhdGVkLlxuICAgICAqL1xuICAgIGdldCBpZ25vcmVkQXR0cmlidXRlcygpOiBzdHJpbmdbXSB7XG4gICAgICAgIHJldHVybiBbLi4uZGVmYXVsdElnbm9yZWRBdHRyaWJ1dGVzXTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGlmIHRoZSBzY3JpcHQgYWxyZWFkeSBleGlzdHMgaW4gRE9NLlxuICAgICAqL1xuICAgIGdldCBpc1NjcmlwdEFscmVhZHlJbkRPTSgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuICEhZG9jdW1lbnQucXVlcnlTZWxlY3Rvcihgc2NyaXB0W3NyYz1cIiR7dGhpcy5zcmN9XCJdYCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgdXJsIGVuZHBvaW50IHVzZWQgdG8gbG9hZCB0aGUgc2NyaXB0LlxuICAgICAqL1xuICAgIGdldCBzcmMoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzcmMnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9