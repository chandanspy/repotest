(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["validate-next-checkout-step"],{

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NoZWNrb3V0LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ2hlY2tvdXRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdmFsaWRhdGUtbmV4dC1jaGVja291dC1zdGVwL3ZhbGlkYXRlLW5leHQtY2hlY2tvdXQtc3RlcC50cyJdLCJuYW1lcyI6WyJFVkVOVF9JTklUIiwiVmFsaWRhdGVOZXh0Q2hlY2tvdXRTdGVwIiwiY29udGFpbmVycyIsInRyaWdnZXJzIiwidGFyZ2V0IiwiZHJvcGRvd25UcmlnZ2VycyIsInBhcmVudFRhcmdldCIsInJlcXVpcmVkRm9ybUZpZWxkU2VsZWN0b3JzIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJjb250YWluZXJTZWxlY3RvciIsInF1ZXJ5U2VsZWN0b3IiLCJ0YXJnZXRTZWxlY3RvciIsImRyb3Bkb3duVHJpZ2dlclNlbGVjdG9yIiwicGFyZW50VGFyZ2V0Q2xhc3NOYW1lIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImlzVHJpZ2dlckVuYWJsZWQiLCJpbml0VHJpZ2dlclN0YXRlIiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsIm1hcEV2ZW50cyIsIm1hcFRyaWdnZXJFdmVudHMiLCJmb3JFYWNoIiwiZWxlbWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkRyb3Bkb3duVHJpZ2dlckNoYW5nZSIsIm9uVHJpZ2dlcklucHV0IiwiZmlsbEZvcm1GaWVsZHNDb2xsZWN0aW9uIiwidG9nZ2xlRGlzYWJsaW5nTmV4dFN0ZXBCdXR0b24iLCJyZWR1Y2UiLCJjb2xsZWN0aW9uIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJjbGFzc1RvVG9nZ2xlIiwicHVzaCIsImlzRm9ybUZpZWxkc0VtcHR5IiwiaXNEcm9wZG93blRyaWdnZXJQcmVTZWxlY3RlZCIsImRpc2FibGVOZXh0U3RlcEJ1dHRvbiIsImlzRGlzYWJsZWQiLCJkaXNhYmxlZCIsInNvbWUiLCJ2YWx1ZSIsImdldEF0dHJpYnV0ZSIsImhhc0F0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUVPLElBQU1BLFVBQVUsR0FBRyxXQUFuQjtBQUVQO0FBQ0E7QUFDQTs7SUFDcUJDLHdCOzs7Ozs7Ozs7OztVQUNQQyxVO1VBQ0FDLFE7VUFDQUMsTTtVQUNBQyxnQjtVQUNBQyxZO1VBQ1NDLDBCLEdBQXFDLG1DOzs7Ozs7U0FFOUNDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLUCxVQUFMLEdBQWlDUSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixLQUFLQyxpQkFBL0IsQ0FBWCxDQUFqQztBQUNBLFNBQUtWLE1BQUwsR0FBaUNRLFFBQVEsQ0FBQ0csYUFBVCxDQUF1QixLQUFLQyxjQUE1QixDQUFqQztBQUNBLFNBQUtYLGdCQUFMLEdBQ0lLLEtBQUssQ0FBQ0MsSUFBTixDQUFXQyxRQUFRLENBQUNDLGdCQUFULENBQTBCLEtBQUtJLHVCQUEvQixDQUFYLENBREo7O0FBSUEsUUFBSSxLQUFLQyxxQkFBVCxFQUFnQztBQUM1QixXQUFLWixZQUFMLEdBQWlDTSxRQUFRLENBQUNPLHNCQUFULENBQWdDLEtBQUtELHFCQUFyQyxFQUE0RCxDQUE1RCxDQUFqQztBQUNIOztBQUVELFFBQUksS0FBS0UsZ0JBQVQsRUFBMkI7QUFDdkIsV0FBS0MsZ0JBQUw7QUFDSDs7QUFFRCxTQUFLQyxtQkFBTCxDQUF5QnRCLFVBQXpCO0FBQ0gsRzs7U0FFU3VCLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS0MsZ0JBQUw7QUFFQSxTQUFLbkIsZ0JBQUwsQ0FBc0JvQixPQUF0QixDQUE4QixVQUFDQyxPQUFELEVBQWdDO0FBQzFEQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLFFBQXpC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LENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQXNDO0FBQ2xDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQiwyQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBZ0M7QUFDNUIsYUFBTyxLQUFLQyxZQUFMLENBQWtCLFdBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQTRCO0FBQ3hCLGFBQU8sS0FBS0QsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUE4QztBQUMxQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsMEJBQWxCLENBQVA7QUFDSDs7OztFQTVKaURFLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnZhbGlkYXRlLW5leHQtY2hlY2tvdXQtc3RlcC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGNvbnN0IEVWRU5UX0lOSVQgPSAnYWZ0ZXJJbml0JztcblxuLyoqXG4gKiBAZXZlbnQgYWZ0ZXJJbml0IEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgY29tcG9uZW50IGhhcyBiZWVuIGluaXRpYWxpemVkLlxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBWYWxpZGF0ZU5leHRDaGVja291dFN0ZXAgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBjb250YWluZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEZvcm1FbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHRhcmdldDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGRyb3Bkb3duVHJpZ2dlcnM6IEhUTUxTZWxlY3RFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHBhcmVudFRhcmdldDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHJlYWRvbmx5IHJlcXVpcmVkRm9ybUZpZWxkU2VsZWN0b3JzOiBzdHJpbmcgPSAnc2VsZWN0W3JlcXVpcmVkXSwgaW5wdXRbcmVxdWlyZWRdJztcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbnRhaW5lcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5jb250YWluZXJTZWxlY3RvcikpO1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MQnV0dG9uRWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMudGFyZ2V0U2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmRyb3Bkb3duVHJpZ2dlcnMgPSA8SFRNTFNlbGVjdEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5kcm9wZG93blRyaWdnZXJTZWxlY3RvcikpXG4gICAgICAgICk7XG5cbiAgICAgICAgaWYgKHRoaXMucGFyZW50VGFyZ2V0Q2xhc3NOYW1lKSB7XG4gICAgICAgICAgICB0aGlzLnBhcmVudFRhcmdldCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMucGFyZW50VGFyZ2V0Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLmlzVHJpZ2dlckVuYWJsZWQpIHtcbiAgICAgICAgICAgIHRoaXMuaW5pdFRyaWdnZXJTdGF0ZSgpO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX0lOSVQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwVHJpZ2dlckV2ZW50cygpO1xuXG4gICAgICAgIHRoaXMuZHJvcGRvd25UcmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MU2VsZWN0RWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLm9uRHJvcGRvd25UcmlnZ2VyQ2hhbmdlKCkpO1xuICAgICAgICB9KTtcblxuICAgICAgICBpZiAodGhpcy5wYXJlbnRUYXJnZXQpIHtcbiAgICAgICAgICAgIHRoaXMucGFyZW50VGFyZ2V0LmFkZEV2ZW50TGlzdGVuZXIoJ3RvZ2dsZUZvcm0nLCAoKSA9PiB0aGlzLm9uRHJvcGRvd25UcmlnZ2VyQ2hhbmdlKCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnRyaWdnZXJzKSB7XG4gICAgICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxGb3JtRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCAoKSA9PiB0aGlzLm9uVHJpZ2dlcklucHV0KCkpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBJbml0IHRoZSBtZXRob2RzLCB3aGljaCBmaWxsIHRoZSBjb2xsZWN0aW9uIG9mIGZvcm0gZmllbGRzIGFuZCB0b2dnbGUgZGlzYWJsaW5nIG9mIGJ1dHRvbi5cbiAgICAgKi9cbiAgICBpbml0VHJpZ2dlclN0YXRlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZpbGxGb3JtRmllbGRzQ29sbGVjdGlvbigpO1xuICAgICAgICB0aGlzLnRvZ2dsZURpc2FibGluZ05leHRTdGVwQnV0dG9uKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGZpbGxGb3JtRmllbGRzQ29sbGVjdGlvbigpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IFtdO1xuXG4gICAgICAgIGlmICghdGhpcy5jb250YWluZXJzKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxGb3JtRWxlbWVudFtdPnRoaXMuY29udGFpbmVycy5yZWR1Y2UoKGNvbGxlY3Rpb246IEhUTUxFbGVtZW50W10sIGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBpZiAoIWVsZW1lbnQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMuY2xhc3NUb1RvZ2dsZSkpIHtcbiAgICAgICAgICAgICAgICBjb2xsZWN0aW9uLnB1c2goXG4gICAgICAgICAgICAgICAgICAgIC4uLig8SFRNTEZvcm1FbGVtZW50W10+QXJyYXkuZnJvbShlbGVtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5yZXF1aXJlZEZvcm1GaWVsZFNlbGVjdG9ycykpKSxcbiAgICAgICAgICAgICAgICApO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICByZXR1cm4gY29sbGVjdGlvbjtcbiAgICAgICAgfSwgW10pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJJbnB1dCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5maWxsRm9ybUZpZWxkc0NvbGxlY3Rpb24oKTtcbiAgICAgICAgdGhpcy50b2dnbGVEaXNhYmxpbmdOZXh0U3RlcEJ1dHRvbigpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkRyb3Bkb3duVHJpZ2dlckNoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5vblRyaWdnZXJJbnB1dCgpO1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlRGlzYWJsaW5nTmV4dFN0ZXBCdXR0b24oKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50YXJnZXQpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLmlzRm9ybUZpZWxkc0VtcHR5IHx8IHRoaXMuaXNEcm9wZG93blRyaWdnZXJQcmVTZWxlY3RlZCkge1xuICAgICAgICAgICAgdGhpcy5kaXNhYmxlTmV4dFN0ZXBCdXR0b24odHJ1ZSk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzYWJsZU5leHRTdGVwQnV0dG9uKGZhbHNlKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBSZW1vdmVzL1NldHMgdGhlIGRpc2FibGVkIGF0dHJpYnV0ZSBmb3IgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZGlzYWJsZU5leHRTdGVwQnV0dG9uKGlzRGlzYWJsZWQ6IGJvb2xlYW4pOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMudGFyZ2V0KSB7XG4gICAgICAgICAgICB0aGlzLnRhcmdldC5kaXNhYmxlZCA9IGlzRGlzYWJsZWQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzRHJvcGRvd25UcmlnZ2VyUHJlU2VsZWN0ZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmRyb3Bkb3duVHJpZ2dlcnMuc29tZSgoZWxlbWVudDogSFRNTFNlbGVjdEVsZW1lbnQpID0+ICFlbGVtZW50LnZhbHVlKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBDaGVja3MgaWYgdGhlIGZvcm0gZmllbGRzIGFyZSBlbXB0eS5cbiAgICAgKi9cbiAgICBnZXQgaXNGb3JtRmllbGRzRW1wdHkoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXJzLnNvbWUoKGVsZW1lbnQ6IEhUTUxGb3JtRWxlbWVudCkgPT4gIWVsZW1lbnQudmFsdWUpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIHRhcmdldCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCB0YXJnZXRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIGZvcm0gZWxlbWVudC5cbiAgICAgKi9cbiAgICBnZXQgY29udGFpbmVyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjb250YWluZXItc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBkcm9wZG93biB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGRyb3Bkb3duVHJpZ2dlclNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZHJvcGRvd24tdHJpZ2dlci1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIENoZWNrcyBpZiB0aGUgdHJpZ2dlciBlbGVtZW50IGlzIGVuYWJsZWQuXG4gICAgICovXG4gICAgZ2V0IGlzVHJpZ2dlckVuYWJsZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmhhc0F0dHJpYnV0ZSgnaXMtZW5hYmxlJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNsYXNzIG5hbWUgZm9yIHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwYXJlbnRUYXJnZXRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdwYXJlbnQtdGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9