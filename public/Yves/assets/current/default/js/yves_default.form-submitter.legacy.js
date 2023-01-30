(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-submitter"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts":
/*!*************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts ***!
  \*************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormSubmitter; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_components_molecules_form_submitter_form_submitter__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/components/molecules/form-submitter/form-submitter */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts");




var FormSubmitter = /*#__PURE__*/function (_FormSubmitterCore) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FormSubmitter, _FormSubmitterCore);

  function FormSubmitter() {
    return _FormSubmitterCore.apply(this, arguments) || this;
  }

  var _proto = FormSubmitter.prototype;

  _proto.onEvent = function onEvent(event) {
    var trigger = event.currentTarget;
    var form = this.formClassName ? document.getElementsByClassName(this.formClassName)[0] : trigger.closest(TAG_NAME);

    if (!form) {
      return;
    }

    var submit = form.querySelector('[type="submit"]') || form.querySelector('button:not([type])');

    if (submit) {
      submit.click();
      return;
    }

    form.submit();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FormSubmitter, [{
    key: "formClassName",
    get: function get() {
      return this.getAttribute('form-class-name');
    }
  }]);

  return FormSubmitter;
}(ShopUi_components_molecules_form_submitter_form_submitter__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts":
/*!*************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts ***!
  \*************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormSubmitter; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var TAG_NAME = 'form';

var FormSubmitter = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FormSubmitter, _Component);

  function FormSubmitter() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    return _this;
  }

  var _proto = FormSubmitter.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(document.querySelectorAll(this.triggerSelector));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggers.forEach(function (trigger) {
      return trigger.addEventListener(_this2.eventName, function (event) {
        return _this2.onEvent(event);
      });
    });
  };

  _proto.onEvent = function onEvent(event) {
    var trigger = event.currentTarget;
    var form = trigger.closest(TAG_NAME);

    if (!form) {
      return;
    }

    var submit = form.querySelector('[type="submit"]') || form.querySelector('button');

    if (submit) {
      submit.click();
    }

    form.submit();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FormSubmitter, [{
    key: "triggerSelector",
    get: function get() {
      return this.getAttribute('trigger-selector');
    }
  }, {
    key: "eventName",
    get: function get() {
      return this.getAttribute('event');
    }
  }]);

  return FormSubmitter;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1zdWJtaXR0ZXIvZm9ybS1zdWJtaXR0ZXIudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2Zvcm0tc3VibWl0dGVyL2Zvcm0tc3VibWl0dGVyLnRzIl0sIm5hbWVzIjpbIkZvcm1TdWJtaXR0ZXIiLCJvbkV2ZW50IiwiZXZlbnQiLCJ0cmlnZ2VyIiwiY3VycmVudFRhcmdldCIsImZvcm0iLCJmb3JtQ2xhc3NOYW1lIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiY2xvc2VzdCIsIlRBR19OQU1FIiwic3VibWl0IiwicXVlcnlTZWxlY3RvciIsImNsaWNrIiwiZ2V0QXR0cmlidXRlIiwiRm9ybVN1Ym1pdHRlckNvcmUiLCJ0cmlnZ2VycyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsInRyaWdnZXJTZWxlY3RvciIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnROYW1lIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxhOzs7Ozs7Ozs7U0FDUEMsTyxHQUFWLGlCQUFrQkMsS0FBbEIsRUFBc0M7QUFDbEMsUUFBTUMsT0FBTyxHQUFvQkQsS0FBSyxDQUFDRSxhQUF2QztBQUNBLFFBQU1DLElBQUksR0FDTixLQUFLQyxhQUFMLEdBQXFCQyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtGLGFBQXJDLEVBQW9ELENBQXBELENBQXJCLEdBQThFSCxPQUFPLENBQUNNLE9BQVIsQ0FBZ0JDLFFBQWhCLENBRGxGOztBQUlBLFFBQUksQ0FBQ0wsSUFBTCxFQUFXO0FBQ1A7QUFDSDs7QUFFRCxRQUFNTSxNQUFNLEdBQzhCTixJQUFJLENBQUNPLGFBQUwsQ0FBbUIsaUJBQW5CLENBQXRDLElBQ21CUCxJQUFJLENBQUNPLGFBQUwsQ0FBbUIsb0JBQW5CLENBRnZCOztBQUlBLFFBQUlELE1BQUosRUFBWTtBQUNSQSxZQUFNLENBQUNFLEtBQVA7QUFFQTtBQUNIOztBQUVEUixRQUFJLENBQUNNLE1BQUw7QUFDSCxHOzs7O1NBRUQsZUFBc0M7QUFDbEMsYUFBTyxLQUFLRyxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7Ozs7RUExQnNDQyxpRzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNGM0M7QUFFQSxJQUFNTCxRQUFRLEdBQUcsTUFBakI7O0lBRXFCVixhOzs7Ozs7Ozs7OztVQUNQZ0IsUTs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLRixRQUFMLEdBQStCRyxLQUFLLENBQUNDLElBQU4sQ0FBV2IsUUFBUSxDQUFDYyxnQkFBVCxDQUEwQixLQUFLQyxlQUEvQixDQUFYLENBQS9CO0FBQ0EsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS1AsUUFBTCxDQUFjUSxPQUFkLENBQXNCLFVBQUNyQixPQUFEO0FBQUEsYUFDbEJBLE9BQU8sQ0FBQ3NCLGdCQUFSLENBQXlCLE1BQUksQ0FBQ0MsU0FBOUIsRUFBeUMsVUFBQ3hCLEtBQUQ7QUFBQSxlQUFrQixNQUFJLENBQUNELE9BQUwsQ0FBYUMsS0FBYixDQUFsQjtBQUFBLE9BQXpDLENBRGtCO0FBQUEsS0FBdEI7QUFHSCxHOztTQUVTRCxPLEdBQVYsaUJBQWtCQyxLQUFsQixFQUFzQztBQUNsQyxRQUFNQyxPQUFPLEdBQW9CRCxLQUFLLENBQUNFLGFBQXZDO0FBQ0EsUUFBTUMsSUFBSSxHQUFvQkYsT0FBTyxDQUFDTSxPQUFSLENBQWdCQyxRQUFoQixDQUE5Qjs7QUFFQSxRQUFJLENBQUNMLElBQUwsRUFBVztBQUNQO0FBQ0g7O0FBRUQsUUFBTU0sTUFBTSxHQUM4Qk4sSUFBSSxDQUFDTyxhQUFMLENBQW1CLGlCQUFuQixDQUF0QyxJQUNtQlAsSUFBSSxDQUFDTyxhQUFMLENBQW1CLFFBQW5CLENBRnZCOztBQUlBLFFBQUlELE1BQUosRUFBWTtBQUNSQSxZQUFNLENBQUNFLEtBQVA7QUFDSDs7QUFFRFIsUUFBSSxDQUFDTSxNQUFMO0FBQ0gsRzs7OztTQUVELGVBQXdDO0FBQ3BDLGFBQU8sS0FBS0csWUFBTCxDQUFrQixrQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUFrQztBQUM5QixhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsT0FBbEIsQ0FBUDtBQUNIOzs7O0VBekNzQ2EsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuZm9ybS1zdWJtaXR0ZXIubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IEZvcm1TdWJtaXR0ZXJDb3JlIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9mb3JtLXN1Ym1pdHRlci9mb3JtLXN1Ym1pdHRlcic7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEZvcm1TdWJtaXR0ZXIgZXh0ZW5kcyBGb3JtU3VibWl0dGVyQ29yZSB7XG4gICAgcHJvdGVjdGVkIG9uRXZlbnQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRyaWdnZXIgPSA8SFRNTEZvcm1FbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIGNvbnN0IGZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZm9ybUNsYXNzTmFtZSA/IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5mb3JtQ2xhc3NOYW1lKVswXSA6IHRyaWdnZXIuY2xvc2VzdChUQUdfTkFNRSlcbiAgICAgICAgKTtcblxuICAgICAgICBpZiAoIWZvcm0pIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IHN1Ym1pdCA9XG4gICAgICAgICAgICA8SFRNTEJ1dHRvbkVsZW1lbnQgfCBIVE1MSW5wdXRFbGVtZW50PmZvcm0ucXVlcnlTZWxlY3RvcignW3R5cGU9XCJzdWJtaXRcIl0nKSB8fFxuICAgICAgICAgICAgPEhUTUxCdXR0b25FbGVtZW50PmZvcm0ucXVlcnlTZWxlY3RvcignYnV0dG9uOm5vdChbdHlwZV0pJyk7XG5cbiAgICAgICAgaWYgKHN1Ym1pdCkge1xuICAgICAgICAgICAgc3VibWl0LmNsaWNrKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGZvcm0uc3VibWl0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBmb3JtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZm9ybS1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmNvbnN0IFRBR19OQU1FID0gJ2Zvcm0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBGb3JtU3VibWl0dGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcnM6IEhUTUxFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCh0aGlzLnRyaWdnZXJTZWxlY3RvcikpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgodHJpZ2dlcikgPT5cbiAgICAgICAgICAgIHRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcih0aGlzLmV2ZW50TmFtZSwgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbkV2ZW50KGV2ZW50KSksXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRXZlbnQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRyaWdnZXIgPSA8SFRNTEZvcm1FbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIGNvbnN0IGZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PnRyaWdnZXIuY2xvc2VzdChUQUdfTkFNRSk7XG5cbiAgICAgICAgaWYgKCFmb3JtKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBzdWJtaXQgPVxuICAgICAgICAgICAgPEhUTUxCdXR0b25FbGVtZW50IHwgSFRNTElucHV0RWxlbWVudD5mb3JtLnF1ZXJ5U2VsZWN0b3IoJ1t0eXBlPVwic3VibWl0XCJdJykgfHxcbiAgICAgICAgICAgIDxIVE1MQnV0dG9uRWxlbWVudD5mb3JtLnF1ZXJ5U2VsZWN0b3IoJ2J1dHRvbicpO1xuXG4gICAgICAgIGlmIChzdWJtaXQpIHtcbiAgICAgICAgICAgIHN1Ym1pdC5jbGljaygpO1xuICAgICAgICB9XG5cbiAgICAgICAgZm9ybS5zdWJtaXQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGV2ZW50TmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2V2ZW50Jyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==