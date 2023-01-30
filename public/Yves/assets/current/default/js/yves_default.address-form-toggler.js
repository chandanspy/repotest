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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

var EVENT_TOGGLE_FORM = 'toggleForm';
/**
 * @event toggleForm An event emitted when the component performs a toggle of form container.
 */

class AddressFormToggler extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.toggler = void 0;
    this.form = void 0;
    this.subForm = void 0;
    this.containerBillingAddress = void 0;
    this.billingSameAsShipping = void 0;
    this.billingSameAsShippingToggler = void 0;
    this.parentTarget = void 0;
    this.eventToggleForm = new CustomEvent(EVENT_TOGGLE_FORM);
    this.togglerPlaceholderValue = '0';
  }

  readyCallback() {}

  init() {
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
  }

  mapEvents() {
    this.toggler.addEventListener('change', () => this.onTogglerChange());
  }

  onTogglerChange() {
    var selectedOption = this.toggler.options[this.toggler.selectedIndex].value;

    if (selectedOption === this.optionValueDeliverToMultipleAddresses) {
      this.toggleSubForm();
    } else {
      this.toggleForm(selectedOption !== this.togglerPlaceholderValue);
    }
  }

  toggleSubForm() {
    this.form.classList.add(this.classToToggle);

    if (this.subForm) {
      this.subForm.classList.remove(this.classToToggle);
      this.containerBillingAddress.classList.remove(this.classToToggle);
      this.billingSameAsShipping.classList.add(this.classToToggle);
      this.billingSameAsShippingToggler.checked = false;
    }
  }

  toggleForm(isShown) {
    this.form.classList.toggle(this.classToToggle, isShown);

    if (this.subForm) {
      this.subForm.classList.add(this.classToToggle);
      this.billingSameAsShipping.classList.remove(this.classToToggle);
    }

    if (this.parentTarget) {
      this.parentTarget.dispatchEvent(this.eventToggleForm);
    }
  }

  setTriggerPreSelectedOption() {
    if (!this.isTriggerHasPreselectedOption) {
      return;
    }

    this.toggler.options[0].disabled = true;
    this.toggler.options[0].defaultSelected = true;
  }
  /**
   * Gets a querySelector of the trigger element.
   */


  get triggerSelector() {
    return this.getAttribute('trigger-selector');
  }
  /**
   * Gets a querySelector of the target element.
   */


  get targetSelector() {
    return this.getAttribute('target-selector');
  }
  /**
   * Gets a querySelector of the sub target element.
   */


  get subTargetSelector() {
    return this.getAttribute('sub-target-selector');
  }
  /**
   * Gets a querySelector of the billing address form element.
   */


  get containerBillingAddressSelector() {
    return this.getAttribute('container-billing-address-selector');
  }
  /**
   * Gets a querySelector of the 'billing same as shipping' element.
   */


  get billingSameAsShippingSelector() {
    return this.getAttribute('billing-same-as-shipping-selector');
  }
  /**
   * Gets a querySelector of the 'billing same as shipping' checkbox element.
   */


  get billingSameAsShippingTogglerSelector() {
    return this.getAttribute('billing-same-as-shipping-toggler-selector');
  }
  /**
   * Gets a class name for the toggle action.
   */


  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }
  /**
   * Gets if the split delivery form is defined.
   */


  get optionValueDeliverToMultipleAddresses() {
    return this.getAttribute('toggle-option-value');
  }

  get parentTargetClassName() {
    return this.getAttribute('parent-target-class-name');
  }

  get isTriggerHasPreselectedOption() {
    return this.hasAttribute('is-trigger-has-preselected-option');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ3VzdG9tZXJQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWRkcmVzcy1mb3JtLXRvZ2dsZXIvYWRkcmVzcy1mb3JtLXRvZ2dsZXIudHMiXSwibmFtZXMiOlsiRVZFTlRfVE9HR0xFX0ZPUk0iLCJBZGRyZXNzRm9ybVRvZ2dsZXIiLCJDb21wb25lbnQiLCJ0b2dnbGVyIiwiZm9ybSIsInN1YkZvcm0iLCJjb250YWluZXJCaWxsaW5nQWRkcmVzcyIsImJpbGxpbmdTYW1lQXNTaGlwcGluZyIsImJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXIiLCJwYXJlbnRUYXJnZXQiLCJldmVudFRvZ2dsZUZvcm0iLCJDdXN0b21FdmVudCIsInRvZ2dsZXJQbGFjZWhvbGRlclZhbHVlIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJ0cmlnZ2VyU2VsZWN0b3IiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ0YXJnZXRTZWxlY3RvciIsImNvbnRhaW5lckJpbGxpbmdBZGRyZXNzU2VsZWN0b3IiLCJiaWxsaW5nU2FtZUFzU2hpcHBpbmdTZWxlY3RvciIsImJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXJTZWxlY3RvciIsInN1YlRhcmdldFNlbGVjdG9yIiwicGFyZW50VGFyZ2V0Q2xhc3NOYW1lIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsIm9uVG9nZ2xlckNoYW5nZSIsInNldFRyaWdnZXJQcmVTZWxlY3RlZE9wdGlvbiIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJzZWxlY3RlZE9wdGlvbiIsIm9wdGlvbnMiLCJzZWxlY3RlZEluZGV4IiwidmFsdWUiLCJvcHRpb25WYWx1ZURlbGl2ZXJUb011bHRpcGxlQWRkcmVzc2VzIiwidG9nZ2xlU3ViRm9ybSIsInRvZ2dsZUZvcm0iLCJjbGFzc0xpc3QiLCJhZGQiLCJjbGFzc1RvVG9nZ2xlIiwicmVtb3ZlIiwiY2hlY2tlZCIsImlzU2hvd24iLCJ0b2dnbGUiLCJkaXNwYXRjaEV2ZW50IiwiaXNUcmlnZ2VySGFzUHJlc2VsZWN0ZWRPcHRpb24iLCJkaXNhYmxlZCIsImRlZmF1bHRTZWxlY3RlZCIsImdldEF0dHJpYnV0ZSIsImhhc0F0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFTyxJQUFNQSxpQkFBaUIsR0FBRyxZQUExQjtBQUVQO0FBQ0E7QUFDQTs7QUFDZSxNQUFNQyxrQkFBTixTQUFpQ0MsK0RBQWpDLENBQTJDO0FBQUE7QUFBQTtBQUFBLFNBSXREQyxPQUpzRDtBQUFBLFNBU3REQyxJQVRzRDtBQUFBLFNBVTVDQyxPQVY0QztBQUFBLFNBVzVDQyx1QkFYNEM7QUFBQSxTQVk1Q0MscUJBWjRDO0FBQUEsU0FhNUNDLDRCQWI0QztBQUFBLFNBYzVDQyxZQWQ0QztBQUFBLFNBZTVDQyxlQWY0QyxHQWViLElBQUlDLFdBQUosQ0FBZ0JYLGlCQUFoQixDQWZhO0FBQUEsU0FnQm5DWSx1QkFoQm1DLEdBZ0JELEdBaEJDO0FBQUE7O0FBa0I1Q0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsUUFBSSxDQUFDLEtBQUtDLGVBQVYsRUFBMkI7QUFDdkI7QUFDSDs7QUFFRCxTQUFLWixPQUFMLEdBQWtDYSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0YsZUFBNUIsQ0FBbEM7QUFDQSxTQUFLWCxJQUFMLEdBQTZCWSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0MsY0FBNUIsQ0FBN0I7QUFDQSxTQUFLWix1QkFBTCxHQUE0Q1UsUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtFLCtCQUE1QixDQUE1QztBQUNBLFNBQUtaLHFCQUFMLEdBQTBDUyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0csNkJBQTVCLENBQTFDO0FBQ0EsU0FBS1osNEJBQUwsR0FDSVEsUUFBUSxD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Q0o7QUFDQTs7O0FBQ3VDLE1BQS9CNUIsK0JBQStCLEdBQVc7QUFDMUMsV0FBTyxLQUFLNEIsWUFBTCxDQUFrQixvQ0FBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDcUMsTUFBN0IzQiw2QkFBNkIsR0FBVztBQUN4QyxXQUFPLEtBQUsyQixZQUFMLENBQWtCLG1DQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUM0QyxNQUFwQzFCLG9DQUFvQyxHQUFXO0FBQy9DLFdBQU8sS0FBSzBCLFlBQUwsQ0FBa0IsMkNBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ3FCLE1BQWJULGFBQWEsR0FBVztBQUN4QixXQUFPLEtBQUtTLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQzZDLE1BQXJDZCxxQ0FBcUMsR0FBVztBQUNoRCxXQUFPLEtBQUtjLFlBQUwsQ0FBa0IscUJBQWxCLENBQVA7QUFDSDs7QUFFa0MsTUFBckJ4QixxQkFBcUIsR0FBVztBQUMxQyxXQUFPLEtBQUt3QixZQUFMLENBQWtCLDBCQUFsQixDQUFQO0FBQ0g7O0FBRTBDLE1BQTdCSCw2QkFBNkIsR0FBWTtBQUNuRCxXQUFPLEtBQUtJLFlBQUwsQ0FBa0IsbUNBQWxCLENBQVA7QUFDSDs7QUEzSnFELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuYWRkcmVzcy1mb3JtLXRvZ2dsZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGNvbnN0IEVWRU5UX1RPR0dMRV9GT1JNID0gJ3RvZ2dsZUZvcm0nO1xuXG4vKipcbiAqIEBldmVudCB0b2dnbGVGb3JtIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgY29tcG9uZW50IHBlcmZvcm1zIGEgdG9nZ2xlIG9mIGZvcm0gY29udGFpbmVyLlxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBBZGRyZXNzRm9ybVRvZ2dsZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIEVsZW1lbnQgdHJpZ2dlcmluZyB0aGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICB0b2dnbGVyOiBIVE1MU2VsZWN0RWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRhcmdldGVkIGJ5IHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIGZvcm06IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgc3ViRm9ybTogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBjb250YWluZXJCaWxsaW5nQWRkcmVzczogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGJpbGxpbmdTYW1lQXNTaGlwcGluZzogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXI6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHBhcmVudFRhcmdldDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGV2ZW50VG9nZ2xlRm9ybTogQ3VzdG9tRXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoRVZFTlRfVE9HR0xFX0ZPUk0pO1xuICAgIHByb3RlY3RlZCByZWFkb25seSB0b2dnbGVyUGxhY2Vob2xkZXJWYWx1ZTogc3RyaW5nID0gJzAnO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50cmlnZ2VyU2VsZWN0b3IpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudG9nZ2xlciA9IDxIVE1MU2VsZWN0RWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMudHJpZ2dlclNlbGVjdG9yKTtcbiAgICAgICAgdGhpcy5mb3JtID0gPEhUTUxGb3JtRWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMudGFyZ2V0U2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmNvbnRhaW5lckJpbGxpbmdBZGRyZXNzID0gPEhUTUxFbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5jb250YWluZXJCaWxsaW5nQWRkcmVzc1NlbGVjdG9yKTtcbiAgICAgICAgdGhpcy5iaWxsaW5nU2FtZUFzU2hpcHBpbmcgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLmJpbGxpbmdTYW1lQXNTaGlwcGluZ1NlbGVjdG9yKTtcbiAgICAgICAgdGhpcy5iaWxsaW5nU2FtZUFzU2hpcHBpbmdUb2dnbGVyID0gPEhUTUxJbnB1dEVsZW1lbnQ+KFxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLmJpbGxpbmdTYW1lQXNTaGlwcGluZ1RvZ2dsZXJTZWxlY3RvcilcbiAgICAgICAgKTtcblxuICAgICAgICBpZiAodGhpcy5zdWJUYXJnZXRTZWxlY3Rvcikge1xuICAgICAgICAgICAgdGhpcy5zdWJGb3JtID0gPEhUTUxGb3JtRWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMuc3ViVGFyZ2V0U2VsZWN0b3IpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucGFyZW50VGFyZ2V0Q2xhc3NOYW1lKSB7XG4gICAgICAgICAgICB0aGlzLnBhcmVudFRhcmdldCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMucGFyZW50VGFyZ2V0Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMub25Ub2dnbGVyQ2hhbmdlKCk7XG4gICAgICAgIHRoaXMuc2V0VHJpZ2dlclByZVNlbGVjdGVkT3B0aW9uKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50b2dnbGVyLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25Ub2dnbGVyQ2hhbmdlKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRvZ2dsZXJDaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHNlbGVjdGVkT3B0aW9uID0gPHN0cmluZz50aGlzLnRvZ2dsZXIub3B0aW9uc1t0aGlzLnRvZ2dsZXIuc2VsZWN0ZWRJbmRleF0udmFsdWU7XG5cbiAgICAgICAgaWYgKHNlbGVjdGVkT3B0aW9uID09PSB0aGlzLm9wdGlvblZhbHVlRGVsaXZlclRvTXVsdGlwbGVBZGRyZXNzZXMpIHtcbiAgICAgICAgICAgIHRoaXMudG9nZ2xlU3ViRm9ybSgpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgdGhpcy50b2dnbGVGb3JtKHNlbGVjdGVkT3B0aW9uICE9PSB0aGlzLnRvZ2dsZXJQbGFjZWhvbGRlclZhbHVlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVTdWJGb3JtKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZvcm0uY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuXG4gICAgICAgIGlmICh0aGlzLnN1YkZvcm0pIHtcbiAgICAgICAgICAgIHRoaXMuc3ViRm9ybS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgICAgICB0aGlzLmNvbnRhaW5lckJpbGxpbmdBZGRyZXNzLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgICAgIHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgICAgIHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nVG9nZ2xlci5jaGVja2VkID0gZmFsc2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlRm9ybShpc1Nob3duOiBib29sZWFuKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybS5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuY2xhc3NUb1RvZ2dsZSwgaXNTaG93bik7XG5cbiAgICAgICAgaWYgKHRoaXMuc3ViRm9ybSkge1xuICAgICAgICAgICAgdGhpcy5zdWJGb3JtLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgICAgIHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnBhcmVudFRhcmdldCkge1xuICAgICAgICAgICAgdGhpcy5wYXJlbnRUYXJnZXQuZGlzcGF0Y2hFdmVudCh0aGlzLmV2ZW50VG9nZ2xlRm9ybSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0VHJpZ2dlclByZVNlbGVjdGVkT3B0aW9uKCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuaXNUcmlnZ2VySGFzUHJlc2VsZWN0ZWRPcHRpb24pIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudG9nZ2xlci5vcHRpb25zWzBdLmRpc2FibGVkID0gdHJ1ZTtcbiAgICAgICAgdGhpcy50b2dnbGVyLm9wdGlvbnNbMF0uZGVmYXVsdFNlbGVjdGVkID0gdHJ1ZTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBvZiB0aGUgdHJpZ2dlciBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCB0cmlnZ2VyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlIHRhcmdldCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCB0YXJnZXRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSBzdWIgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHN1YlRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnc3ViLXRhcmdldC1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSBiaWxsaW5nIGFkZHJlc3MgZm9ybSBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBjb250YWluZXJCaWxsaW5nQWRkcmVzc1NlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY29udGFpbmVyLWJpbGxpbmctYWRkcmVzcy1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSAnYmlsbGluZyBzYW1lIGFzIHNoaXBwaW5nJyBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBiaWxsaW5nU2FtZUFzU2hpcHBpbmdTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2JpbGxpbmctc2FtZS1hcy1zaGlwcGluZy1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSAnYmlsbGluZyBzYW1lIGFzIHNoaXBwaW5nJyBjaGVja2JveCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBiaWxsaW5nU2FtZUFzU2hpcHBpbmdUb2dnbGVyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdiaWxsaW5nLXNhbWUtYXMtc2hpcHBpbmctdG9nZ2xlci1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBjbGFzcyBuYW1lIGZvciB0aGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIHNwbGl0IGRlbGl2ZXJ5IGZvcm0gaXMgZGVmaW5lZC5cbiAgICAgKi9cbiAgICBnZXQgb3B0aW9uVmFsdWVEZWxpdmVyVG9NdWx0aXBsZUFkZHJlc3NlcygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RvZ2dsZS1vcHRpb24tdmFsdWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHBhcmVudFRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3BhcmVudC10YXJnZXQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaXNUcmlnZ2VySGFzUHJlc2VsZWN0ZWRPcHRpb24oKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmhhc0F0dHJpYnV0ZSgnaXMtdHJpZ2dlci1oYXMtcHJlc2VsZWN0ZWQtb3B0aW9uJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==