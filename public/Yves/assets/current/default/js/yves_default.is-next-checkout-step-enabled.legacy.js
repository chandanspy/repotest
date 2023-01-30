(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["is-next-checkout-step-enabled"],{

/***/ "./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/is-next-checkout-step-enabled/is-next-checkout-step-enabled.ts":
/*!*******************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/is-next-checkout-step-enabled/is-next-checkout-step-enabled.ts ***!
  \*******************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return IsNextCheckoutStepEnabled; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var _validate_next_checkout_step_validate_next_checkout_step__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../validate-next-checkout-step/validate-next-checkout-step */ "./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/validate-next-checkout-step/validate-next-checkout-step.ts");





var IsNextCheckoutStepEnabled = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(IsNextCheckoutStepEnabled, _Component);

  function IsNextCheckoutStepEnabled() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.trigger = void 0;
    _this.target = void 0;
    return _this;
  }

  var _proto = IsNextCheckoutStepEnabled.prototype;

  _proto.readyCallback = function readyCallback() {
    if (this.triggerSelector) {
      this.trigger = document.querySelector(this.triggerSelector);
    }

    this.target = document.querySelector(this.targetSelector);

    if (this.trigger) {
      this.mapEvents();
    }
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.trigger.addEventListener('change', function () {
      return _this2.onTriggerChange();
    });
    this.target.addEventListener(_validate_next_checkout_step_validate_next_checkout_step__WEBPACK_IMPORTED_MODULE_3__["EVENT_INIT"], function () {
      return _this2.initTriggerState();
    });
  };

  _proto.initTriggerState = function initTriggerState() {
    this.onTriggerChange();
  };

  _proto.onTriggerChange = function onTriggerChange() {
    var currentValue = this.trigger.options[this.trigger.selectedIndex].value;

    if (currentValue === this.toggleOptionValue && this.target) {
      this.target.initTriggerState();
      return;
    }

    this.target.disableNextStepButton(false);
  }
  /**
   * Gets a querySelector name of the trigger element.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(IsNextCheckoutStepEnabled, [{
    key: "triggerSelector",
    get: function get() {
      return this.getAttribute('trigger-selector');
    }
    /**
     * Gets a querySelector name of the target element.
     */

  }, {
    key: "targetSelector",
    get: function get() {
      return this.getAttribute('target-selector');
    }
    /**
     * Gets an option value for comparison with chosen value from dropdown to enable 'validate-next-checkout-step'
     * component.
     */

  }, {
    key: "toggleOptionValue",
    get: function get() {
      return this.getAttribute('toggle-option-value');
    }
  }]);

  return IsNextCheckoutStepEnabled;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/validate-next-checkout-step/validate-next-checkout-step.ts":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/validate-next-checkout-step/validate-next-checkout-step.ts ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: EVENT_INIT, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_INIT", function() { return EVENT_INIT; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ValidateNextCheckoutStep; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var EVENT_INIT = 'afterInit';
/**
 * @event afterInit An event emitted when the component has been initialized.
 */

var ValidateNextCheckoutStep = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ValidateNextCheckoutStep, _Component);

  function ValidateNextCheckoutStep() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.containers = void 0;
    _this.triggers = void 0;
    _this.target = void 0;
    _this.dropdownTriggers = void 0;
    _this.parentTarget = void 0;
    _this.requiredFormFieldSelectors = 'select[required], input[required]';
    return _this;
  }

  var _proto = ValidateNextCheckoutStep.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.containers = Array.from(document.querySelectorAll(this.containerSelector));
    this.target = document.querySelector(this.targetSelector);
    this.dropdownTriggers = Array.from(document.querySelectorAll(this.dropdownTriggerSelector));

    if (this.parentTargetClassName) {
      this.parentTarget = document.getElementsByClassName(this.parentTargetClassName)[0];
    }

    if (this.isTriggerEnabled) {
      this.initTriggerState();
    }

    this.dispatchCustomEvent(EVENT_INIT);
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.mapTriggerEvents();
    this.dropdownTriggers.forEach(function (element) {
      element.addEventListener('change', function () {
        return _this2.onDropdownTriggerChange();
      });
    });

    if (this.parentTarget) {
      this.parentTarget.addEventListener('toggleForm', function () {
        return _this2.onDropdownTriggerChange();
      });
    }
  };

  _proto.mapTriggerEvents = function mapTriggerEvents() {
    var _this3 = this;

    if (this.triggers) {
      this.triggers.forEach(function (element) {
        element.addEventListener('input', function () {
          return _this3.onTriggerInput();
        });
      });
    }
  }
  /**
   * Init the methods, which fill the collection of form fields and toggle disabling of button.
   */
  ;

  _proto.initTriggerState = function initTriggerState() {
    this.fillFormFieldsCollection();
    this.toggleDisablingNextStepButton();
    this.mapEvents();
  };

  _proto.fillFormFieldsCollection = function fillFormFieldsCollection() {
    var _this4 = this;

    this.triggers = [];

    if (!this.containers) {
      return;
    }

    this.triggers = this.containers.reduce(function (collection, element) {
      if (!element.classList.contains(_this4.classToToggle)) {
        collection.push.apply(collection, Array.from(element.querySelectorAll(_this4.requiredFormFieldSelectors)));
      }

      return collection;
    }, []);
  };

  _proto.onTriggerInput = function onTriggerInput() {
    this.fillFormFieldsCollection();
    this.toggleDisablingNextStepButton();
  };

  _proto.onDropdownTriggerChange = function onDropdownTriggerChange() {
    this.onTriggerInput();
    this.mapTriggerEvents();
  };

  _proto.toggleDisablingNextStepButton = function toggleDisablingNextStepButton() {
    if (!this.target) {
      return;
    }

    if (this.isFormFieldsEmpty || this.isDropdownTriggerPreSelected) {
      this.disableNextStepButton(true);
      return;
    }

    this.disableNextStepButton(false);
  }
  /**
   * Removes/Sets the disabled attribute for target element.
   */
  ;

  _proto.disableNextStepButton = function disableNextStepButton(isDisabled) {
    if (this.target) {
      this.target.disabled = isDisabled;
    }
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ValidateNextCheckoutStep, [{
    key: "isDropdownTriggerPreSelected",
    get: function get() {
      return this.dropdownTriggers.some(function (element) {
        return !element.value;
      });
    }
    /**
     * Checks if the form fields are empty.
     */

  }, {
    key: "isFormFieldsEmpty",
    get: function get() {
      return this.triggers.some(function (element) {
        return !element.value;
      });
    }
    /**
     * Gets a querySelector name of the target element.
     */

  }, {
    key: "targetSelector",
    get: function get() {
      return this.getAttribute('target-selector');
    }
    /**
     * Gets a querySelector name of the form element.
     */

  }, {
    key: "containerSelector",
    get: function get() {
      return this.getAttribute('container-selector');
    }
    /**
     * Gets a querySelector name of the dropdown trigger element.
     */

  }, {
    key: "dropdownTriggerSelector",
    get: function get() {
      return this.getAttribute('dropdown-trigger-selector');
    }
    /**
     * Checks if the trigger element is enabled.
     */

  }, {
    key: "isTriggerEnabled",
    get: function get() {
      return this.hasAttribute('is-enable');
    }
    /**
     * Gets a class name for the toggle action.
     */

  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }, {
    key: "parentTargetClassName",
    get: function get() {
      return this.getAttribute('parent-target-class-name');
    }
  }]);

  return ValidateNextCheckoutStep;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NoZWNrb3V0LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ2hlY2tvdXRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvaXMtbmV4dC1jaGVja291dC1zdGVwLWVuYWJsZWQvaXMtbmV4dC1jaGVja291dC1zdGVwLWVuYWJsZWQudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9jaGVja291dC1wYWdlL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NoZWNrb3V0UGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3ZhbGlkYXRlLW5leHQtY2hlY2tvdXQtc3RlcC92YWxpZGF0ZS1uZXh0LWNoZWNrb3V0LXN0ZXAudHMiXSwibmFtZXMiOlsiSXNOZXh0Q2hlY2tvdXRTdGVwRW5hYmxlZCIsInRyaWdnZXIiLCJ0YXJnZXQiLCJyZWFkeUNhbGxiYWNrIiwidHJpZ2dlclNlbGVjdG9yIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwidGFyZ2V0U2VsZWN0b3IiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwib25UcmlnZ2VyQ2hhbmdlIiwiRVZFTlRfSU5JVCIsImluaXRUcmlnZ2VyU3RhdGUiLCJjdXJyZW50VmFsdWUiLCJvcHRpb25zIiwic2VsZWN0ZWRJbmRleCIsInZhbHVlIiwidG9nZ2xlT3B0aW9uVmFsdWUiLCJkaXNhYmxlTmV4dFN0ZXBCdXR0b24iLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiLCJWYWxpZGF0ZU5leHRDaGVja291dFN0ZXAiLCJjb250YWluZXJzIiwidHJpZ2dlcnMiLCJkcm9wZG93blRyaWdnZXJzIiwicGFyZW50VGFyZ2V0IiwicmVxdWlyZWRGb3JtRmllbGRTZWxlY3RvcnMiLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsImNvbnRhaW5lclNlbGVjdG9yIiwiZHJvcGRvd25UcmlnZ2VyU2VsZWN0b3IiLCJwYXJlbnRUYXJnZXRDbGFzc05hbWUiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiaXNUcmlnZ2VyRW5hYmxlZCIsImRpc3BhdGNoQ3VzdG9tRXZlbnQiLCJtYXBUcmlnZ2VyRXZlbnRzIiwiZm9yRWFjaCIsImVsZW1lbnQiLCJvbkRyb3Bkb3duVHJpZ2dlckNoYW5nZSIsIm9uVHJpZ2dlcklucHV0IiwiZmlsbEZvcm1GaWVsZHNDb2xsZWN0aW9uIiwidG9nZ2xlRGlzYWJsaW5nTmV4dFN0ZXBCdXR0b24iLCJyZWR1Y2UiLCJjb2xsZWN0aW9uIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJjbGFzc1RvVG9nZ2xlIiwicHVzaCIsImlzRm9ybUZpZWxkc0VtcHR5IiwiaXNEcm9wZG93blRyaWdnZXJQcmVTZWxlY3RlZCIsImlzRGlzYWJsZWQiLCJkaXNhYmxlZCIsInNvbWUiLCJoYXNBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTs7SUFFcUJBLHlCOzs7Ozs7Ozs7OztVQUNQQyxPO1VBQ0FDLE07Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDO0FBQzVCLFFBQUksS0FBS0MsZUFBVCxFQUEwQjtBQUN0QixXQUFLSCxPQUFMLEdBQWtDSSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0YsZUFBNUIsQ0FBbEM7QUFDSDs7QUFDRCxTQUFLRixNQUFMLEdBQXdDRyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0MsY0FBNUIsQ0FBeEM7O0FBRUEsUUFBSSxLQUFLTixPQUFULEVBQWtCO0FBQ2QsV0FBS08sU0FBTDtBQUNIO0FBQ0osRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLUCxPQUFMLENBQWFRLGdCQUFiLENBQThCLFFBQTlCLEVBQXdDO0FBQUEsYUFBTSxNQUFJLENBQUNDLGVBQUwsRUFBTjtBQUFBLEtBQXhDO0FBQ0EsU0FBS1IsTUFBTCxDQUFZTyxnQkFBWixDQUE2QkUsbUdBQTdCLEVBQXlDO0FBQUEsYUFBTSxNQUFJLENBQUNDLGdCQUFMLEVBQU47QUFBQSxLQUF6QztBQUNILEc7O1NBRVNBLGdCLEdBQVYsNEJBQW1DO0FBQy9CLFNBQUtGLGVBQUw7QUFDSCxHOztTQUVTQSxlLEdBQVYsMkJBQWtDO0FBQzlCLFFBQU1HLFlBQVksR0FBRyxLQUFLWixPQUFMLENBQWFhLE9BQWIsQ0FBcUIsS0FBS2IsT0FBTCxDQUFhYyxhQUFsQyxFQUFpREMsS0FBdEU7O0FBRUEsUUFBSUgsWUFBWSxLQUFLLEtBQUtJLGlCQUF0QixJQUEyQyxLQUFLZixNQUFwRCxFQUE0RDtBQUN4RCxXQUFLQSxNQUFMLENBQVlVLGdCQUFaO0FBRUE7QUFDSDs7QUFFRCxTQUFLVixNQUFMLENBQVlnQixxQkFBWixDQUFrQyxLQUFsQztBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7OztTQUNJLGVBQThCO0FBQzFCLGFBQU8sS0FBS0MsWUFBTCxDQUFrQixrQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBNkI7QUFDekIsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7OztTQUNJLGVBQWdDO0FBQzVCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixxQkFBbEIsQ0FBUDtBQUNIOzs7O0VBeERrREMsK0Q7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0h2RDtBQUVPLElBQU1ULFVBQVUsR0FBRyxXQUFuQjtBQUVQO0FBQ0E7QUFDQTs7SUFDcUJVLHdCOzs7Ozs7Ozs7OztVQUNQQyxVO1VBQ0FDLFE7VUFDQXJCLE07VUFDQXNCLGdCO1VBQ0FDLFk7VUFDU0MsMEIsR0FBcUMsbUM7Ozs7OztTQUU5Q3ZCLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QndCLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0wsVUFBTCxHQUFpQ00sS0FBSyxDQUFDQyxJQUFOLENBQVd4QixRQUFRLENBQUN5QixnQkFBVCxDQUEwQixLQUFLQyxpQkFBL0IsQ0FBWCxDQUFqQztBQUNBLFNBQUs3QixNQUFMLEdBQWlDRyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0MsY0FBNUIsQ0FBakM7QUFDQSxTQUFLaUIsZ0JBQUwsR0FDSUksS0FBSyxDQUFDQyxJQUFOLENBQVd4QixRQUFRLENBQUN5QixnQkFBVCxDQUEwQixLQUFLRSx1QkFBL0IsQ0FBWCxDQURKOztBQUlBLFFBQUksS0FBS0MscUJBQVQsRUFBZ0M7QUFDNUIsV0FBS1IsWUFBTCxHQUFpQ3BCLFFBQVEsQ0FBQzZCLHNCQUFULENBQWdDLEtBQUtELHFCQUFyQyxFQUE0RCxDQUE1RCxDQUFqQztBQUNIOztBQUVELFFBQUksS0FBS0UsZ0JBQVQsRUFBMkI7QUFDdkIsV0FBS3ZCLGdCQUFMO0FBQ0g7O0FBRUQsU0FBS3dCLG1CQUFMLENBQXlCekIsVUFBekI7QUFDSCxHOztTQUVTSCxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUs2QixnQkFBTDtBQUVBLFNBQUtiLGdCQUFMLENBQXNCYyxPQUF0QixDQUE4QixVQUFDQyxPQUFELEVBQWdDO0FBQzFEQSxhQUFPLENBQUM5QixnQkFBUixDQUF5QixRQUF6QixFQUFtQztBQUFBLGVBQU0sTUFBSSxDQUFDK0IsdUJBQUwsRUFBTjtBQUFBLE9BQW5DO0FBQ0gsS0FGRDs7QUFJQSxRQUFJLEtBQUtmLFlBQVQsRUFBdUI7QUFDbkIsV0FBS0EsWUFBTCxDQUFrQmhCLGdCQUFsQixDQUFtQyxZQUFuQyxFQUFpRDtBQUFBLGVBQU0sTUFBSSxDQUFDK0IsdUJBQUwsRUFBTjtBQUFBLE9BQWpEO0FBQ0g7QUFDSixHOztTQUVTSCxnQixHQUFWLDRCQUFtQztBQUFBOztBQUMvQixRQUFJLEtBQUtkLFFBQVQsRUFBbUI7QUFDZixXQUFLQSxRQUFMLENBQWNlLE9BQWQsQ0FBc0IsVUFBQ0MsT0FBRCxFQUE4QjtBQUNoREEsZUFBTyxDQUFDOUIsZ0JBQVIsQ0FBeUIsT0FBekIsRUFBa0M7QUFBQSxpQkFBTSxNQUFJLENBQUNnQyxjQUFMLEVBQU47QUFBQSxTQUFsQztBQUNILE9BRkQ7QUFHSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSTdCLGdCLEdBQUEsNEJBQXlCO0FBQ3JCLFNBQUs4Qix3QkFBTDtBQUNBLFNBQUtDLDZCQUFMO0FBQ0EsU0FBS25DLFNBQUw7QUFDSCxHOztTQUVTa0Msd0IsR0FBVixvQ0FBMkM7QUFBQTs7QUFDdkMsU0FBS25CLFFBQUwsR0FBZ0IsRUFBaEI7O0FBRUEsUUFBSSxDQUFDLEtBQUtELFVBQVYsRUFBc0I7QUFDbEI7QUFDSDs7QUFFRCxTQUFLQyxRQUFMLEdBQW1DLEtBQUtELFVBQUwsQ0FBZ0JzQixNQUFoQixDQUF1QixVQUFDQyxVQUFELEVBQTRCTixPQUE1QixFQUFxRDtBQUMzRyxVQUFJLENBQUNBLE9BQU8sQ0FBQ08sU0FBUixDQUFrQkMsUUFBbEIsQ0FBMkIsTUFBSSxDQUFDQyxhQUFoQyxDQUFMLEVBQXFEO0FBQ2pESCxrQkFBVSxDQUFDSSxJQUFYLE9BQUFKLFVBQVUsRUFDaUJqQixLQUFLLENBQUNDLElBQU4sQ0FBV1UsT0FBTyxDQUFDVCxnQkFBUixDQUF5QixNQUFJLENBQUNKLDBCQUE5QixDQUFYLENBRGpCLENBQVY7QUFHSDs7QUFFRCxhQUFPbUIsVUFBUDtBQUNILEtBUmtDLEVBUWhDLEVBUmdDLENBQW5DO0FBU0gsRzs7U0FFU0osYyxHQUFWLDBCQUFpQztBQUM3QixTQUFLQyx3QkFBTDtBQUNBLFNBQUtDLDZCQUFMO0FBQ0gsRzs7U0FFU0gsdUIsR0FBVixtQ0FBMEM7QUFDdEMsU0FBS0MsY0FBTDtBQUNBLFNBQUtKLGdCQUFMO0FBQ0gsRzs7U0FFU00sNkIsR0FBVix5Q0FBZ0Q7QUFDNUMsUUFBSSxDQUFDLEtBQUt6QyxNQUFWLEVBQWtCO0FBQ2Q7QUFDSDs7QUFFRCxRQUFJLEtBQUtnRCxpQkFBTCxJQUEwQixLQUFLQyw0QkFBbkMsRUFBaUU7QUFDN0QsV0FBS2pDLHFCQUFMLENBQTJCLElBQTNCO0FBRUE7QUFDSDs7QUFFRCxTQUFLQSxxQkFBTCxDQUEyQixLQUEzQjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUEscUIsR0FBQSwrQkFBc0JrQyxVQUF0QixFQUFpRDtBQUM3QyxRQUFJLEtBQUtsRCxNQUFULEVBQWlCO0FBQ2IsV0FBS0EsTUFBTCxDQUFZbUQsUUFBWixHQUF1QkQsVUFBdkI7QUFDSDtBQUNKLEc7Ozs7U0FFRCxlQUFzRDtBQUNsRCxhQUFPLEtBQUs1QixnQkFBTCxDQUFzQjhCLElBQXRCLENBQTJCLFVBQUNmLE9BQUQ7QUFBQSxlQUFnQyxDQUFDQSxPQUFPLENBQUN2QixLQUF6QztBQUFBLE9BQTNCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQWlDO0FBQzdCLGFBQU8sS0FBS08sUUFBTCxDQUFjK0IsSUFBZCxDQUFtQixVQUFDZixPQUFEO0FBQUEsZUFBOEIsQ0FBQ0EsT0FBTyxDQUFDdkIsS0FBdkM7QUFBQSxPQUFuQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUE2QjtBQUN6QixhQUFPLEtBQUtHLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQWdDO0FBQzVCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBc0M7QUFDbEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLDJCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUFnQztBQUM1QixhQUFPLEtBQUtvQyxZQUFMLENBQWtCLFdBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQTRCO0FBQ3hCLGFBQU8sS0FBS3BDLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBOEM7QUFDMUMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLDBCQUFsQixDQUFQO0FBQ0g7Ozs7RUE1SmlEQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5pcy1uZXh0LWNoZWNrb3V0LXN0ZXAtZW5hYmxlZC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBWYWxpZGF0ZU5leHRDaGVja291dFN0ZXAsIHsgRVZFTlRfSU5JVCB9IGZyb20gJy4uL3ZhbGlkYXRlLW5leHQtY2hlY2tvdXQtc3RlcC92YWxpZGF0ZS1uZXh0LWNoZWNrb3V0LXN0ZXAnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBJc05leHRDaGVja291dFN0ZXBFbmFibGVkIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcjogSFRNTFNlbGVjdEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRhcmdldDogVmFsaWRhdGVOZXh0Q2hlY2tvdXRTdGVwO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnRyaWdnZXJTZWxlY3Rvcikge1xuICAgICAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxTZWxlY3RFbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy50cmlnZ2VyU2VsZWN0b3IpO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMudGFyZ2V0ID0gPFZhbGlkYXRlTmV4dENoZWNrb3V0U3RlcD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMudGFyZ2V0U2VsZWN0b3IpO1xuXG4gICAgICAgIGlmICh0aGlzLnRyaWdnZXIpIHtcbiAgICAgICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5vblRyaWdnZXJDaGFuZ2UoKSk7XG4gICAgICAgIHRoaXMudGFyZ2V0LmFkZEV2ZW50TGlzdGVuZXIoRVZFTlRfSU5JVCwgKCkgPT4gdGhpcy5pbml0VHJpZ2dlclN0YXRlKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbml0VHJpZ2dlclN0YXRlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm9uVHJpZ2dlckNoYW5nZSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGN1cnJlbnRWYWx1ZSA9IHRoaXMudHJpZ2dlci5vcHRpb25zW3RoaXMudHJpZ2dlci5zZWxlY3RlZEluZGV4XS52YWx1ZTtcblxuICAgICAgICBpZiAoY3VycmVudFZhbHVlID09PSB0aGlzLnRvZ2dsZU9wdGlvblZhbHVlICYmIHRoaXMudGFyZ2V0KSB7XG4gICAgICAgICAgICB0aGlzLnRhcmdldC5pbml0VHJpZ2dlclN0YXRlKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudGFyZ2V0LmRpc2FibGVOZXh0U3RlcEJ1dHRvbihmYWxzZSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgdHJpZ2dlciBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCB0cmlnZ2VyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhbiBvcHRpb24gdmFsdWUgZm9yIGNvbXBhcmlzb24gd2l0aCBjaG9zZW4gdmFsdWUgZnJvbSBkcm9wZG93biB0byBlbmFibGUgJ3ZhbGlkYXRlLW5leHQtY2hlY2tvdXQtc3RlcCdcbiAgICAgKiBjb21wb25lbnQuXG4gICAgICovXG4gICAgZ2V0IHRvZ2dsZU9wdGlvblZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndG9nZ2xlLW9wdGlvbi12YWx1ZScpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgY29uc3QgRVZFTlRfSU5JVCA9ICdhZnRlckluaXQnO1xuXG4vKipcbiAqIEBldmVudCBhZnRlckluaXQgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBjb21wb25lbnQgaGFzIGJlZW4gaW5pdGlhbGl6ZWQuXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFZhbGlkYXRlTmV4dENoZWNrb3V0U3RlcCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGNvbnRhaW5lcnM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRm9ybUVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0OiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZHJvcGRvd25UcmlnZ2VyczogSFRNTFNlbGVjdEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcGFyZW50VGFyZ2V0OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcmVhZG9ubHkgcmVxdWlyZWRGb3JtRmllbGRTZWxlY3RvcnM6IHN0cmluZyA9ICdzZWxlY3RbcmVxdWlyZWRdLCBpbnB1dFtyZXF1aXJlZF0nO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY29udGFpbmVycyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCh0aGlzLmNvbnRhaW5lclNlbGVjdG9yKSk7XG4gICAgICAgIHRoaXMudGFyZ2V0ID0gPEhUTUxCdXR0b25FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy50YXJnZXRTZWxlY3Rvcik7XG4gICAgICAgIHRoaXMuZHJvcGRvd25UcmlnZ2VycyA9IDxIVE1MU2VsZWN0RWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20oZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCh0aGlzLmRyb3Bkb3duVHJpZ2dlclNlbGVjdG9yKSlcbiAgICAgICAgKTtcblxuICAgICAgICBpZiAodGhpcy5wYXJlbnRUYXJnZXRDbGFzc05hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucGFyZW50VGFyZ2V0ID0gPEhUTUxFbGVtZW50PmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5wYXJlbnRUYXJnZXRDbGFzc05hbWUpWzBdO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMuaXNUcmlnZ2VyRW5hYmxlZCkge1xuICAgICAgICAgICAgdGhpcy5pbml0VHJpZ2dlclN0YXRlKCk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfSU5JVCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyRXZlbnRzKCk7XG5cbiAgICAgICAgdGhpcy5kcm9wZG93blRyaWdnZXJzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxTZWxlY3RFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25Ecm9wZG93blRyaWdnZXJDaGFuZ2UoKSk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGlmICh0aGlzLnBhcmVudFRhcmdldCkge1xuICAgICAgICAgICAgdGhpcy5wYXJlbnRUYXJnZXQuYWRkRXZlbnRMaXN0ZW5lcigndG9nZ2xlRm9ybScsICgpID0+IHRoaXMub25Ecm9wZG93blRyaWdnZXJDaGFuZ2UoKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVHJpZ2dlckV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMudHJpZ2dlcnMpIHtcbiAgICAgICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEZvcm1FbGVtZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsICgpID0+IHRoaXMub25UcmlnZ2VySW5wdXQoKSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEluaXQgdGhlIG1ldGhvZHMsIHdoaWNoIGZpbGwgdGhlIGNvbGxlY3Rpb24gb2YgZm9ybSBmaWVsZHMgYW5kIHRvZ2dsZSBkaXNhYmxpbmcgb2YgYnV0dG9uLlxuICAgICAqL1xuICAgIGluaXRUcmlnZ2VyU3RhdGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZmlsbEZvcm1GaWVsZHNDb2xsZWN0aW9uKCk7XG4gICAgICAgIHRoaXMudG9nZ2xlRGlzYWJsaW5nTmV4dFN0ZXBCdXR0b24oKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZmlsbEZvcm1GaWVsZHNDb2xsZWN0aW9uKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gW107XG5cbiAgICAgICAgaWYgKCF0aGlzLmNvbnRhaW5lcnMpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEZvcm1FbGVtZW50W10+dGhpcy5jb250YWluZXJzLnJlZHVjZSgoY29sbGVjdGlvbjogSFRNTEVsZW1lbnRbXSwgZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGlmICghZWxlbWVudC5jbGFzc0xpc3QuY29udGFpbnModGhpcy5jbGFzc1RvVG9nZ2xlKSkge1xuICAgICAgICAgICAgICAgIGNvbGxlY3Rpb24ucHVzaChcbiAgICAgICAgICAgICAgICAgICAgLi4uKDxIVE1MRm9ybUVsZW1lbnRbXT5BcnJheS5mcm9tKGVsZW1lbnQucXVlcnlTZWxlY3RvckFsbCh0aGlzLnJlcXVpcmVkRm9ybUZpZWxkU2VsZWN0b3JzKSkpLFxuICAgICAgICAgICAgICAgICk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHJldHVybiBjb2xsZWN0aW9uO1xuICAgICAgICB9LCBbXSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlcklucHV0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZpbGxGb3JtRmllbGRzQ29sbGVjdGlvbigpO1xuICAgICAgICB0aGlzLnRvZ2dsZURpc2FibGluZ05leHRTdGVwQnV0dG9uKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRHJvcGRvd25UcmlnZ2VyQ2hhbmdlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm9uVHJpZ2dlcklucHV0KCk7XG4gICAgICAgIHRoaXMubWFwVHJpZ2dlckV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVEaXNhYmxpbmdOZXh0U3RlcEJ1dHRvbigpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnRhcmdldCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMuaXNGb3JtRmllbGRzRW1wdHkgfHwgdGhpcy5pc0Ryb3Bkb3duVHJpZ2dlclByZVNlbGVjdGVkKSB7XG4gICAgICAgICAgICB0aGlzLmRpc2FibGVOZXh0U3RlcEJ1dHRvbih0cnVlKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNhYmxlTmV4dFN0ZXBCdXR0b24oZmFsc2UpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFJlbW92ZXMvU2V0cyB0aGUgZGlzYWJsZWQgYXR0cmlidXRlIGZvciB0YXJnZXQgZWxlbWVudC5cbiAgICAgKi9cbiAgICBkaXNhYmxlTmV4dFN0ZXBCdXR0b24oaXNEaXNhYmxlZDogYm9vbGVhbik6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy50YXJnZXQpIHtcbiAgICAgICAgICAgIHRoaXMudGFyZ2V0LmRpc2FibGVkID0gaXNEaXNhYmxlZDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaXNEcm9wZG93blRyaWdnZXJQcmVTZWxlY3RlZCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZHJvcGRvd25UcmlnZ2Vycy5zb21lKChlbGVtZW50OiBIVE1MU2VsZWN0RWxlbWVudCkgPT4gIWVsZW1lbnQudmFsdWUpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIENoZWNrcyBpZiB0aGUgZm9ybSBmaWVsZHMgYXJlIGVtcHR5LlxuICAgICAqL1xuICAgIGdldCBpc0Zvcm1GaWVsZHNFbXB0eSgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlcnMuc29tZSgoZWxlbWVudDogSFRNTEZvcm1FbGVtZW50KSA9PiAhZWxlbWVudC52YWx1ZSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgZm9ybSBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBjb250YWluZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NvbnRhaW5lci1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIGRyb3Bkb3duIHRyaWdnZXIgZWxlbWVudC5cbiAgICAgKi9cbiAgICBnZXQgZHJvcGRvd25UcmlnZ2VyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdkcm9wZG93bi10cmlnZ2VyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogQ2hlY2tzIGlmIHRoZSB0cmlnZ2VyIGVsZW1lbnQgaXMgZW5hYmxlZC5cbiAgICAgKi9cbiAgICBnZXQgaXNUcmlnZ2VyRW5hYmxlZCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdpcy1lbmFibGUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgY2xhc3MgbmFtZSBmb3IgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHBhcmVudFRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3BhcmVudC10YXJnZXQtY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=