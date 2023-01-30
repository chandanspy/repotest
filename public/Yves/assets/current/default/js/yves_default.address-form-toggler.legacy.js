(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["address-form-toggler"],{

/***/ "./vendor/spryker-shop/customer-page/src/SprykerShop/Yves/CustomerPage/Theme/default/components/molecules/address-form-toggler/address-form-toggler.ts":
/*!*************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/customer-page/src/SprykerShop/Yves/CustomerPage/Theme/default/components/molecules/address-form-toggler/address-form-toggler.ts ***!
  \*************************************************************************************************************************************************************/
/*! exports provided: EVENT_TOGGLE_FORM, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_TOGGLE_FORM", function() { return EVENT_TOGGLE_FORM; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AddressFormToggler; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var EVENT_TOGGLE_FORM = 'toggleForm';
/**
 * @event toggleForm An event emitted when the component performs a toggle of form container.
 */

var AddressFormToggler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(AddressFormToggler, _Component);

  function AddressFormToggler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.toggler = void 0;
    _this.form = void 0;
    _this.subForm = void 0;
    _this.containerBillingAddress = void 0;
    _this.billingSameAsShipping = void 0;
    _this.billingSameAsShippingToggler = void 0;
    _this.parentTarget = void 0;
    _this.eventToggleForm = new CustomEvent(EVENT_TOGGLE_FORM);
    _this.togglerPlaceholderValue = '0';
    return _this;
  }

  var _proto = AddressFormToggler.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    if (!this.triggerSelector) {
      return;
    }

    this.toggler = document.querySelector(this.triggerSelector);
    this.form = document.querySelector(this.targetSelector);
    this.containerBillingAddress = document.querySelector(this.containerBillingAddressSelector);
    this.billingSameAsShipping = document.querySelector(this.billingSameAsShippingSelector);
    this.billingSameAsShippingToggler = document.querySelector(this.billingSameAsShippingTogglerSelector);

    if (this.subTargetSelector) {
      this.subForm = document.querySelector(this.subTargetSelector);
    }

    if (this.parentTargetClassName) {
      this.parentTarget = document.getElementsByClassName(this.parentTargetClassName)[0];
    }

    this.onTogglerChange();
    this.setTriggerPreSelectedOption();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.toggler.addEventListener('change', function () {
      return _this2.onTogglerChange();
    });
  };

  _proto.onTogglerChange = function onTogglerChange() {
    var selectedOption = this.toggler.options[this.toggler.selectedIndex].value;

    if (selectedOption === this.optionValueDeliverToMultipleAddresses) {
      this.toggleSubForm();
    } else {
      this.toggleForm(selectedOption !== this.togglerPlaceholderValue);
    }
  };

  _proto.toggleSubForm = function toggleSubForm() {
    this.form.classList.add(this.classToToggle);

    if (this.subForm) {
      this.subForm.classList.remove(this.classToToggle);
      this.containerBillingAddress.classList.remove(this.classToToggle);
      this.billingSameAsShipping.classList.add(this.classToToggle);
      this.billingSameAsShippingToggler.checked = false;
    }
  };

  _proto.toggleForm = function toggleForm(isShown) {
    this.form.classList.toggle(this.classToToggle, isShown);

    if (this.subForm) {
      this.subForm.classList.add(this.classToToggle);
      this.billingSameAsShipping.classList.remove(this.classToToggle);
    }

    if (this.parentTarget) {
      this.parentTarget.dispatchEvent(this.eventToggleForm);
    }
  };

  _proto.setTriggerPreSelectedOption = function setTriggerPreSelectedOption() {
    if (!this.isTriggerHasPreselectedOption) {
      return;
    }

    this.toggler.options[0].disabled = true;
    this.toggler.options[0].defaultSelected = true;
  }
  /**
   * Gets a querySelector of the trigger element.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(AddressFormToggler, [{
    key: "triggerSelector",
    get: function get() {
      return this.getAttribute('trigger-selector');
    }
    /**
     * Gets a querySelector of the target element.
     */

  }, {
    key: "targetSelector",
    get: function get() {
      return this.getAttribute('target-selector');
    }
    /**
     * Gets a querySelector of the sub target element.
     */

  }, {
    key: "subTargetSelector",
    get: function get() {
      return this.getAttribute('sub-target-selector');
    }
    /**
     * Gets a querySelector of the billing address form element.
     */

  }, {
    key: "containerBillingAddressSelector",
    get: function get() {
      return this.getAttribute('container-billing-address-selector');
    }
    /**
     * Gets a querySelector of the 'billing same as shipping' element.
     */

  }, {
    key: "billingSameAsShippingSelector",
    get: function get() {
      return this.getAttribute('billing-same-as-shipping-selector');
    }
    /**
     * Gets a querySelector of the 'billing same as shipping' checkbox element.
     */

  }, {
    key: "billingSameAsShippingTogglerSelector",
    get: function get() {
      return this.getAttribute('billing-same-as-shipping-toggler-selector');
    }
    /**
     * Gets a class name for the toggle action.
     */

  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
    /**
     * Gets if the split delivery form is defined.
     */

  }, {
    key: "optionValueDeliverToMultipleAddresses",
    get: function get() {
      return this.getAttribute('toggle-option-value');
    }
  }, {
    key: "parentTargetClassName",
    get: function get() {
      return this.getAttribute('parent-target-class-name');
    }
  }, {
    key: "isTriggerHasPreselectedOption",
    get: function get() {
      return this.hasAttribute('is-trigger-has-preselected-option');
    }
  }]);

  return AddressFormToggler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ3VzdG9tZXJQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWRkcmVzcy1mb3JtLXRvZ2dsZXIvYWRkcmVzcy1mb3JtLXRvZ2dsZXIudHMiXSwibmFtZXMiOlsiRVZFTlRfVE9HR0xFX0ZPUk0iLCJBZGRyZXNzRm9ybVRvZ2dsZXIiLCJ0b2dnbGVyIiwiZm9ybSIsInN1YkZvcm0iLCJjb250YWluZXJCaWxsaW5nQWRkcmVzcyIsImJpbGxpbmdTYW1lQXNTaGlwcGluZyIsImJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXIiLCJwYXJlbnRUYXJnZXQiLCJldmVudFRvZ2dsZUZvcm0iLCJDdXN0b21FdmVudCIsInRvZ2dsZXJQbGFjZWhvbGRlclZhbHVlIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJ0cmlnZ2VyU2VsZWN0b3IiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ0YXJnZXRTZWxlY3RvciIsImNvbnRhaW5lckJpbGxpbmdBZGRyZXNzU2VsZWN0b3IiLCJiaWxsaW5nU2FtZUFzU2hpcHBpbmdTZWxlY3RvciIsImJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXJTZWxlY3RvciIsInN1YlRhcmdldFNlbGVjdG9yIiwicGFyZW50VGFyZ2V0Q2xhc3NOYW1lIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsIm9uVG9nZ2xlckNoYW5nZSIsInNldFRyaWdnZXJQcmVTZWxlY3RlZE9wdGlvbiIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJzZWxlY3RlZE9wdGlvbiIsIm9wdGlvbnMiLCJzZWxlY3RlZEluZGV4IiwidmFsdWUiLCJvcHRpb25WYWx1ZURlbGl2ZXJUb011bHRpcGxlQWRkcmVzc2VzIiwidG9nZ2xlU3ViRm9ybSIsInRvZ2dsZUZvcm0iLCJjbGFzc0xpc3QiLCJhZGQiLCJjbGFzc1RvVG9nZ2xlIiwicmVtb3ZlIiwiY2hlY2tlZCIsImlzU2hvd24iLCJ0b2dnbGUiLCJkaXNwYXRjaEV2ZW50IiwiaXNUcmlnZ2VySGFzUHJlc2VsZWN0ZWRPcHRpb24iLCJkaXNhYmxlZCIsImRlZmF1bHRTZWxlY3RlZCIsImdldEF0dHJpYnV0ZSIsImhhc0F0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUVPLElBQU1BLGlCQUFpQixHQUFHLFlBQTFCO0FBRVA7QUFDQTtBQUNBOztJQUNxQkMsa0I7Ozs7Ozs7Ozs7O1VBSWpCQyxPO1VBS0FDLEk7VUFDVUMsTztVQUNBQyx1QjtVQUNBQyxxQjtVQUNBQyw0QjtVQUNBQyxZO1VBQ0FDLGUsR0FBK0IsSUFBSUMsV0FBSixDQUFnQlYsaUJBQWhCLEM7VUFDdEJXLHVCLEdBQWtDLEc7Ozs7OztTQUUzQ0MsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFFBQUksQ0FBQyxLQUFLQyxlQUFWLEVBQTJCO0FBQ3ZCO0FBQ0g7O0FBRUQsU0FBS1osT0FBTCxHQUFrQ2EsUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtGLGVBQTVCLENBQWxDO0FBQ0EsU0FBS1gsSUFBTCxHQUE2QlksUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtDLGNBQTVCLENBQTdCO0FBQ0EsU0FBS1osdUJBQUwsR0FBNENVLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLRSwrQkFBNUIsQ0FBNUM7QUFDQSxTQUFLWixxQkFBTCxHQUEwQ1MsUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtHLDZCQUE1QixDQUExQztBQUNBLFNBQUtaLDRCQUFMLEdBQ0lRLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLSSxvQ0FBNUIsQ0FESjs7QUFJQSxRQUFJLEtBQUtDLGlCQUFULEVBQTRCO0FBQ3hCLFdBQUtqQixPQUFMLEdBQWdDVyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0ssaUJBQTVCLENB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QUFLQSxZQUFMLENBQWtCLG1DQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUFtRDtBQUMvQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsMkNBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQTRCO0FBQ3hCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBb0Q7QUFDaEQsYUFBTyxLQUFLQSxZQUFMLENBQWtCLHFCQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQThDO0FBQzFDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQiwwQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUF1RDtBQUNuRCxhQUFPLEtBQUtDLFlBQUwsQ0FBa0IsbUNBQWxCLENBQVA7QUFDSDs7OztFQTNKMkNDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmFkZHJlc3MtZm9ybS10b2dnbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgY29uc3QgRVZFTlRfVE9HR0xFX0ZPUk0gPSAndG9nZ2xlRm9ybSc7XG5cbi8qKlxuICogQGV2ZW50IHRvZ2dsZUZvcm0gQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBjb21wb25lbnQgcGVyZm9ybXMgYSB0b2dnbGUgb2YgZm9ybSBjb250YWluZXIuXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEFkZHJlc3NGb3JtVG9nZ2xlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogRWxlbWVudCB0cmlnZ2VyaW5nIHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIHRvZ2dsZXI6IEhUTUxTZWxlY3RFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogRWxlbWVudHMgdGFyZ2V0ZWQgYnkgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICovXG4gICAgZm9ybTogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBzdWJGb3JtOiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGNvbnRhaW5lckJpbGxpbmdBZGRyZXNzOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgYmlsbGluZ1NhbWVBc1NoaXBwaW5nOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgYmlsbGluZ1NhbWVBc1NoaXBwaW5nVG9nZ2xlcjogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcGFyZW50VGFyZ2V0OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZXZlbnRUb2dnbGVGb3JtOiBDdXN0b21FdmVudCA9IG5ldyBDdXN0b21FdmVudChFVkVOVF9UT0dHTEVfRk9STSk7XG4gICAgcHJvdGVjdGVkIHJlYWRvbmx5IHRvZ2dsZXJQbGFjZWhvbGRlclZhbHVlOiBzdHJpbmcgPSAnMCc7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnRyaWdnZXJTZWxlY3Rvcikge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50b2dnbGVyID0gPEhUTUxTZWxlY3RFbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy50cmlnZ2VyU2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy50YXJnZXRTZWxlY3Rvcik7XG4gICAgICAgIHRoaXMuY29udGFpbmVyQmlsbGluZ0FkZHJlc3MgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLmNvbnRhaW5lckJpbGxpbmdBZGRyZXNzU2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmJpbGxpbmdTYW1lQXNTaGlwcGluZyA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nU2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXIgPSA8SFRNTElucHV0RWxlbWVudD4oXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nVG9nZ2xlclNlbGVjdG9yKVxuICAgICAgICApO1xuXG4gICAgICAgIGlmICh0aGlzLnN1YlRhcmdldFNlbGVjdG9yKSB7XG4gICAgICAgICAgICB0aGlzLnN1YkZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5zdWJUYXJnZXRTZWxlY3Rvcik7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wYXJlbnRUYXJnZXRDbGFzc05hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucGFyZW50VGFyZ2V0ID0gPEhUTUxFbGVtZW50PmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5wYXJlbnRUYXJnZXRDbGFzc05hbWUpWzBdO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5vblRvZ2dsZXJDaGFuZ2UoKTtcbiAgICAgICAgdGhpcy5zZXRUcmlnZ2VyUHJlU2VsZWN0ZWRPcHRpb24oKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRvZ2dsZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5vblRvZ2dsZXJDaGFuZ2UoKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVG9nZ2xlckNoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3Qgc2VsZWN0ZWRPcHRpb24gPSA8c3RyaW5nPnRoaXMudG9nZ2xlci5vcHRpb25zW3RoaXMudG9nZ2xlci5zZWxlY3RlZEluZGV4XS52YWx1ZTtcblxuICAgICAgICBpZiAoc2VsZWN0ZWRPcHRpb24gPT09IHRoaXMub3B0aW9uVmFsdWVEZWxpdmVyVG9NdWx0aXBsZUFkZHJlc3Nlcykge1xuICAgICAgICAgICAgdGhpcy50b2dnbGVTdWJGb3JtKCk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB0aGlzLnRvZ2dsZUZvcm0oc2VsZWN0ZWRPcHRpb24gIT09IHRoaXMudG9nZ2xlclBsYWNlaG9sZGVyVmFsdWUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRvZ2dsZVN1YkZvcm0oKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybS5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG5cbiAgICAgICAgaWYgKHRoaXMuc3ViRm9ybSkge1xuICAgICAgICAgICAgdGhpcy5zdWJGb3JtLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgICAgIHRoaXMuY29udGFpbmVyQmlsbGluZ0FkZHJlc3MuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICAgICAgdGhpcy5iaWxsaW5nU2FtZUFzU2hpcHBpbmcuY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICAgICAgdGhpcy5iaWxsaW5nU2FtZUFzU2hpcHBpbmdUb2dnbGVyLmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVGb3JtKGlzU2hvd246IGJvb2xlYW4pOiB2b2lkIHtcbiAgICAgICAgdGhpcy5mb3JtLmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBpc1Nob3duKTtcblxuICAgICAgICBpZiAodGhpcy5zdWJGb3JtKSB7XG4gICAgICAgICAgICB0aGlzLnN1YkZvcm0uY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICAgICAgdGhpcy5iaWxsaW5nU2FtZUFzU2hpcHBpbmcuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucGFyZW50VGFyZ2V0KSB7XG4gICAgICAgICAgICB0aGlzLnBhcmVudFRhcmdldC5kaXNwYXRjaEV2ZW50KHRoaXMuZXZlbnRUb2dnbGVGb3JtKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRUcmlnZ2VyUHJlU2VsZWN0ZWRPcHRpb24oKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5pc1RyaWdnZXJIYXNQcmVzZWxlY3RlZE9wdGlvbikge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50b2dnbGVyLm9wdGlvbnNbMF0uZGlzYWJsZWQgPSB0cnVlO1xuICAgICAgICB0aGlzLnRvZ2dsZXIub3B0aW9uc1swXS5kZWZhdWx0U2VsZWN0ZWQgPSB0cnVlO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBvZiB0aGUgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlIHN1YiB0YXJnZXQgZWxlbWVudC5cbiAgICAgKi9cbiAgICBnZXQgc3ViVGFyZ2V0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzdWItdGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlIGJpbGxpbmcgYWRkcmVzcyBmb3JtIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGNvbnRhaW5lckJpbGxpbmdBZGRyZXNzU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjb250YWluZXItYmlsbGluZy1hZGRyZXNzLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlICdiaWxsaW5nIHNhbWUgYXMgc2hpcHBpbmcnIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGJpbGxpbmdTYW1lQXNTaGlwcGluZ1NlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYmlsbGluZy1zYW1lLWFzLXNoaXBwaW5nLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlICdiaWxsaW5nIHNhbWUgYXMgc2hpcHBpbmcnIGNoZWNrYm94IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2JpbGxpbmctc2FtZS1hcy1zaGlwcGluZy10b2dnbGVyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNsYXNzIG5hbWUgZm9yIHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgc3BsaXQgZGVsaXZlcnkgZm9ybSBpcyBkZWZpbmVkLlxuICAgICAqL1xuICAgIGdldCBvcHRpb25WYWx1ZURlbGl2ZXJUb011bHRpcGxlQWRkcmVzc2VzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndG9nZ2xlLW9wdGlvbi12YWx1ZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgcGFyZW50VGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncGFyZW50LXRhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpc1RyaWdnZXJIYXNQcmVzZWxlY3RlZE9wdGlvbigpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdpcy10cmlnZ2VyLWhhcy1wcmVzZWxlY3RlZC1vcHRpb24nKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9