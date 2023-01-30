(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["company-business-unit-address-handler"],{

/***/ "./vendor/spryker-shop/company-widget/src/SprykerShop/Yves/CompanyWidget/Theme/default/components/molecules/company-business-unit-address-handler/company-business-unit-address-handler.ts":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/company-widget/src/SprykerShop/Yves/CompanyWidget/Theme/default/components/molecules/company-business-unit-address-handler/company-business-unit-address-handler.ts ***!
  \*************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CompanyBusinessUnitAddressHandler; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var EVENT_HIDDEN_ADDRESS_INPUT_CHANGE = 'hidden-address-input-change';
/**
 * @event hidden-address-input-change An event which is triggered after the new address are selected.
 */

var CompanyBusinessUnitAddressHandler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(CompanyBusinessUnitAddressHandler, _Component);

  function CompanyBusinessUnitAddressHandler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.form = void 0;
    _this.addressesDataObject = void 0;
    _this.addressesSelects = void 0;
    _this.currentAddress = void 0;
    _this.hiddenDefaultAddressInput = void 0;
    _this.hiddenAddressInputChangeEvent = void 0;
    _this.shippingAddressToggler = void 0;
    return _this;
  }

  var _proto = CompanyBusinessUnitAddressHandler.prototype;

  _proto.readyCallback = function readyCallback() {
    this.form = document.querySelector(this.formSelector);
    this.addressesSelects = Array.from(this.form.querySelectorAll(this.dataSelector));
    this.hiddenDefaultAddressInput = this.form.querySelector(this.defaultAddressSelector);

    if (this.shippingAddressTogglerSelector) {
      this.shippingAddressToggler = document.querySelector(this.shippingAddressTogglerSelector);
    }

    this.initAddressesData();
    this.mapEvents();
    this.initHiddenAddressInputChangeEvent();
    this.fillDefaultAddress();

    if (this.shippingAddressToggler) {
      this.toggleSplitDeliveryAddressFormValue();
    }
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.addressesSelects.forEach(function (selectElement) {
      selectElement.addEventListener('change', function () {
        _this2.setCurrentAddress(selectElement);

        _this2.fillHiddenInputsWithNewAddress();
      });
    });

    if (this.shippingAddressToggler) {
      this.shippingAddressToggler.addEventListener('change', function () {
        _this2.toggleSplitDeliveryAddressFormValue();
      });
    }
  };

  _proto.initHiddenAddressInputChangeEvent = function initHiddenAddressInputChangeEvent() {
    this.hiddenAddressInputChangeEvent = new CustomEvent(EVENT_HIDDEN_ADDRESS_INPUT_CHANGE);
    this.hiddenAddressInputChangeEvent.initEvent('change', true, true);
  };

  _proto.toggleSplitDeliveryAddressFormValue = function toggleSplitDeliveryAddressFormValue() {
    var hiddenInputIdCustomerShippingAddress = document.querySelector(this.shippingAddressHiddenInputSelector);
    var hiddenInputIdCompanyShippingAddress = document.querySelector(this.shippingCompanyAddressHiddenInputSelector);

    if (this.shippingAddressToggler.value === this.optionValueDeliverToMultipleAddresses) {
      hiddenInputIdCustomerShippingAddress.value = this.optionValueDeliverToMultipleAddresses;
      hiddenInputIdCompanyShippingAddress.value = this.optionValueDeliverToMultipleAddresses;
    }
  };

  _proto.setCurrentAddress = function setCurrentAddress(selectElement) {
    this.currentAddress = selectElement.options[selectElement.selectedIndex].getAttribute('value');
  };

  _proto.fillHiddenInputsWithNewAddress = function fillHiddenInputsWithNewAddress() {
    var currentAddressList = this.addressesDataObject[this.currentAddress];
    var hiddenInputIdCustomerAddress = this.form.querySelector(this.addressHiddenInputSelector);
    var hiddenInputIdCompanyAddress = this.form.querySelector(this.companyAddressHiddenInputSelector);
    this.hiddenDefaultAddressInput.value = this.currentAddress;
    this.fillHiddenInputAddressesFields(currentAddressList, this.addressHiddenInputSelector, 'id_customer_address');
    this.fillHiddenInputAddressesFields(currentAddressList, this.companyAddressHiddenInputSelector, 'id_company_unit_address');
    hiddenInputIdCustomerAddress.dispatchEvent(this.hiddenAddressInputChangeEvent);
    hiddenInputIdCompanyAddress.dispatchEvent(this.hiddenAddressInputChangeEvent);
  };

  _proto.fillDefaultAddress = function fillDefaultAddress() {
    var hiddenDefaultAddressInputValue = this.hiddenDefaultAddressInput.getAttribute('value');

    if (hiddenDefaultAddressInputValue) {
      this.currentAddress = hiddenDefaultAddressInputValue;
      this.fillHiddenInputsWithNewAddress();
    }
  }
  /**
   * Fills the form element's value with an address value.
   * @param address A data object for filling the fields.
   */
  ;

  _proto.fillHiddenInputAddressesFields = function fillHiddenInputAddressesFields(address, selector, idAddressKey) {
    var hiddenInputIdAddress = this.form.querySelector(selector);
    hiddenInputIdAddress.value = address ? address[idAddressKey] : '';
  };

  _proto.initAddressesData = function initAddressesData() {
    var data = this.getAttribute('addresses');
    this.addressesDataObject = JSON.parse(data);
  }
  /**
   * Gets a querySelector name of the form element.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(CompanyBusinessUnitAddressHandler, [{
    key: "formSelector",
    get: function get() {
      return this.getAttribute('form-selector');
    }
    /**
     * Gets a querySelector name of the address select elements.
     */

  }, {
    key: "dataSelector",
    get: function get() {
      return this.getAttribute('data-selector');
    }
    /**
     * Gets a querySelector name of a hidden default address input.
     */

  }, {
    key: "defaultAddressSelector",
    get: function get() {
      return this.getAttribute('default-address-selector');
    }
    /**
     * Gets a querySelector name of a hidden customer id input.
     */

  }, {
    key: "addressHiddenInputSelector",
    get: function get() {
      return this.getAttribute('address-hidden-input-selector');
    }
    /**
     * Gets a querySelector name of a hidden company unit id input.
     */

  }, {
    key: "companyAddressHiddenInputSelector",
    get: function get() {
      return this.getAttribute('company-address-hidden-input-selector');
    }
    /**
     * Gets a querySelector name of a hidden shipping customer id input.
     */

  }, {
    key: "shippingAddressHiddenInputSelector",
    get: function get() {
      return this.getAttribute('shipping-address-hidden-input-selector');
    }
    /**
     * Gets a querySelector name of a hidden shipping customer id input.
     */

  }, {
    key: "shippingCompanyAddressHiddenInputSelector",
    get: function get() {
      return this.getAttribute('shipping-company-address-hidden-input-selector');
    }
    /**
     * Gets if the split delivery form is defined.
     */

  }, {
    key: "optionValueDeliverToMultipleAddresses",
    get: function get() {
      return this.getAttribute('toggle-option-value');
    }
    /**
     * Gets a querySelector name of the shipping address select element.
     */

  }, {
    key: "shippingAddressTogglerSelector",
    get: function get() {
      return this.getAttribute('shipping-address-toggler-selector');
    }
  }]);

  return CompanyBusinessUnitAddressHandler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbXBhbnktd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbXBhbnlXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21wYW55LWJ1c2luZXNzLXVuaXQtYWRkcmVzcy1oYW5kbGVyL2NvbXBhbnktYnVzaW5lc3MtdW5pdC1hZGRyZXNzLWhhbmRsZXIudHMiXSwibmFtZXMiOlsiRVZFTlRfSElEREVOX0FERFJFU1NfSU5QVVRfQ0hBTkdFIiwiQ29tcGFueUJ1c2luZXNzVW5pdEFkZHJlc3NIYW5kbGVyIiwiZm9ybSIsImFkZHJlc3Nlc0RhdGFPYmplY3QiLCJhZGRyZXNzZXNTZWxlY3RzIiwiY3VycmVudEFkZHJlc3MiLCJoaWRkZW5EZWZhdWx0QWRkcmVzc0lucHV0IiwiaGlkZGVuQWRkcmVzc0lucHV0Q2hhbmdlRXZlbnQiLCJzaGlwcGluZ0FkZHJlc3NUb2dnbGVyIiwicmVhZHlDYWxsYmFjayIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImZvcm1TZWxlY3RvciIsIkFycmF5IiwiZnJvbSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJkYXRhU2VsZWN0b3IiLCJkZWZhdWx0QWRkcmVzc1NlbGVjdG9yIiwic2hpcHBpbmdBZGRyZXNzVG9nZ2xlclNlbGVjdG9yIiwiaW5pdEFkZHJlc3Nlc0RhdGEiLCJtYXBFdmVudHMiLCJpbml0SGlkZGVuQWRkcmVzc0lucHV0Q2hhbmdlRXZlbnQiLCJmaWxsRGVmYXVsdEFkZHJlc3MiLCJ0b2dnbGVTcGxpdERlbGl2ZXJ5QWRkcmVzc0Zvcm1WYWx1ZSIsImZvckVhY2giLCJzZWxlY3RFbGVtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInNldEN1cnJlbnRBZGRyZXNzIiwiZmlsbEhpZGRlbklucHV0c1dpdGhOZXdBZGRyZXNzIiwiQ3VzdG9tRXZlbnQiLCJpbml0RXZlbnQiLCJoaWRkZW5JbnB1dElkQ3VzdG9tZXJTaGlwcGluZ0FkZHJlc3MiLCJzaGlwcGluZ0FkZHJlc3NIaWRkZW5JbnB1dFNlbGVjdG9yIiwiaGlkZGVuSW5wdXRJZENvbXBhbnlTaGlwcGluZ0FkZHJlc3MiLCJzaGlwcGluZ0NvbXBhbnlBZGRyZXNzSGlkZGVuSW5wdXRTZWxlY3RvciIsInZhbHVlIiwib3B0aW9uVmFsdWVEZWxpdmVyVG9NdWx0aXBsZUFkZHJlc3NlcyIsIm9wdGlvbnMiLCJzZWxlY3RlZEluZGV4IiwiZ2V0QXR0cmlidXRlIiwiY3VycmVudEFkZHJlc3NMaXN0IiwiaGlkZGVuSW5wdXRJZEN1c3RvbWVyQWRkcmVzcyIsImFkZHJlc3NIaWRkZW5JbnB1dFNlbGVjdG9yIiwiaGlkZGVuSW5wdXRJZENvbXBhbnlBZGRyZXNzIiwiY29tcGFueUFkZHJlc3NIaWRkZW5JbnB1dFNlbGVjdG9yIiwiZmlsbEhpZGRlbklucHV0QWRkcmVzc2VzRmllbGRzIiwiZGlzcGF0Y2hFdmVudCIsImhpZGRlbkRlZmF1bHRBZGRyZXNzSW5wdXRWYWx1ZSIsImFkZHJlc3MiLCJzZWxlY3RvciIsImlkQWRkcmVzc0tleSIsImhpZGRlbklucHV0SWRBZGRyZXNzIiwiZGF0YSIsIkpTT04iLCJwYXJzZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBRUEsSUFBTUEsaUNBQWlDLEdBQUcsNkJBQTFDO0FBQ0E7QUFDQTtBQUNBOztJQUNxQkMsaUM7Ozs7Ozs7Ozs7O1VBSWpCQyxJO1VBS0FDLG1CO1VBS0FDLGdCO1VBSUFDLGM7VUFJQUMseUI7VUFJQUMsNkI7VUFJQUMsc0I7Ozs7OztTQUVVQyxhLEdBQVYseUJBQWdDO0FBQzVCLFNBQUtQLElBQUwsR0FBNkJRLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLQyxZQUE1QixDQUE3QjtBQUNBLFNBQUtSLGdCQUFMLEdBQTZDUyxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLWixJQUFMLENBQVVhLGdCQUFWLENBQTJCLEtBQUtDLFlBQWhDLENBQVgsQ0FBN0M7QUFDQSxTQUFL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QUtBLFlBQUwsQ0FBa0Isd0NBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQXdEO0FBQ3BELGFBQU8sS0FBS0EsWUFBTCxDQUFrQixnREFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBb0Q7QUFDaEQsYUFBTyxLQUFLQSxZQUFMLENBQWtCLHFCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUE2QztBQUN6QyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsbUNBQWxCLENBQVA7QUFDSDs7OztFQTFMMERnQiwrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5jb21wYW55LWJ1c2luZXNzLXVuaXQtYWRkcmVzcy1oYW5kbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5jb25zdCBFVkVOVF9ISURERU5fQUREUkVTU19JTlBVVF9DSEFOR0UgPSAnaGlkZGVuLWFkZHJlc3MtaW5wdXQtY2hhbmdlJztcbi8qKlxuICogQGV2ZW50IGhpZGRlbi1hZGRyZXNzLWlucHV0LWNoYW5nZSBBbiBldmVudCB3aGljaCBpcyB0cmlnZ2VyZWQgYWZ0ZXIgdGhlIG5ldyBhZGRyZXNzIGFyZSBzZWxlY3RlZC5cbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29tcGFueUJ1c2luZXNzVW5pdEFkZHJlc3NIYW5kbGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBUaGUgY3VycmVudCBmb3JtLlxuICAgICAqL1xuICAgIGZvcm06IEhUTUxGb3JtRWxlbWVudDtcbiAgICAvKipcbiAgICAgKiBEYXRhIG9iamVjdCBvZiB0aGUgYWRkcmVzcyBsaXN0LlxuICAgICAqL1xuICAgIC8qIHRzbGludDpkaXNhYmxlOm5vLWFueSAqL1xuICAgIGFkZHJlc3Nlc0RhdGFPYmplY3Q6IGFueTtcbiAgICAvKiB0c2xpbnQ6ZW5hYmxlOm5vLWFueSAqL1xuICAgIC8qKlxuICAgICAqIENvbGxlY3Rpb24gb2YgdGhlIGFkZHJlc3Mgc2VsZWN0IGVsZW1lbnRzLlxuICAgICAqL1xuICAgIGFkZHJlc3Nlc1NlbGVjdHM6IEhUTUxTZWxlY3RFbGVtZW50W107XG4gICAgLyoqXG4gICAgICogVGhlIHNlbGVjdGVkIGFkZHJlc3MuXG4gICAgICovXG4gICAgY3VycmVudEFkZHJlc3M6IHN0cmluZztcbiAgICAvKipcbiAgICAgKiBUaGUgaGlkZGVuIGlucHV0IHdpdGggc2VsZWN0ZWQgYWRkcmVzcyBieSBkZWZhdWx0LlxuICAgICAqL1xuICAgIGhpZGRlbkRlZmF1bHRBZGRyZXNzSW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgLyoqXG4gICAgICogVGhlIGN1c3RvbSBldmVudC5cbiAgICAgKi9cbiAgICBoaWRkZW5BZGRyZXNzSW5wdXRDaGFuZ2VFdmVudDogQ3VzdG9tRXZlbnQ7XG4gICAgLyoqXG4gICAgICogVGhlIHNoaXBwaW5nIGFkZHJlc3Mgc2VsZWN0IGVsZW1lbnQuXG4gICAgICovXG4gICAgc2hpcHBpbmdBZGRyZXNzVG9nZ2xlcjogSFRNTFNlbGVjdEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5mb3JtID0gPEhUTUxGb3JtRWxlbWVudD5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMuZm9ybVNlbGVjdG9yKTtcbiAgICAgICAgdGhpcy5hZGRyZXNzZXNTZWxlY3RzID0gPEhUTUxTZWxlY3RFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmZvcm0ucXVlcnlTZWxlY3RvckFsbCh0aGlzLmRhdGFTZWxlY3RvcikpO1xuICAgICAgICB0aGlzLmhpZGRlbkRlZmF1bHRBZGRyZXNzSW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmZvcm0ucXVlcnlTZWxlY3Rvcih0aGlzLmRlZmF1bHRBZGRyZXNzU2VsZWN0b3IpO1xuICAgICAgICBpZiAodGhpcy5zaGlwcGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IpIHtcbiAgICAgICAgICAgIHRoaXMuc2hpcHBpbmdBZGRyZXNzVG9nZ2xlciA9IDxIVE1MU2VsZWN0RWxlbWVudD4oXG4gICAgICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnNoaXBwaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvcilcbiAgICAgICAgICAgICk7XG4gICAgICAgIH1cbiAgICAgICAgdGhpcy5pbml0QWRkcmVzc2VzRGF0YSgpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgICAgICB0aGlzLmluaXRIaWRkZW5BZGRyZXNzSW5wdXRDaGFuZ2VFdmVudCgpO1xuICAgICAgICB0aGlzLmZpbGxEZWZhdWx0QWRkcmVzcygpO1xuICAgICAgICBpZiAodGhpcy5zaGlwcGluZ0FkZHJlc3NUb2dnbGVyKSB7XG4gICAgICAgICAgICB0aGlzLnRvZ2dsZVNwbGl0RGVsaXZlcnlBZGRyZXNzRm9ybVZhbHVlKCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmFkZHJlc3Nlc1NlbGVjdHMuZm9yRWFjaCgoc2VsZWN0RWxlbWVudDogSFRNTFNlbGVjdEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHNlbGVjdEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4ge1xuICAgICAgICAgICAgICAgIHRoaXMuc2V0Q3VycmVudEFkZHJlc3Moc2VsZWN0RWxlbWVudCk7XG4gICAgICAgICAgICAgICAgdGhpcy5maWxsSGlkZGVuSW5wdXRzV2l0aE5ld0FkZHJlc3MoKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICAgICAgaWYgKHRoaXMuc2hpcHBpbmdBZGRyZXNzVG9nZ2xlcikge1xuICAgICAgICAgICAgdGhpcy5zaGlwcGluZ0FkZHJlc3NUb2dnbGVyLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLnRvZ2dsZVNwbGl0RGVsaXZlcnlBZGRyZXNzRm9ybVZhbHVlKCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbml0SGlkZGVuQWRkcmVzc0lucHV0Q2hhbmdlRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaGlkZGVuQWRkcmVzc0lucHV0Q2hhbmdlRXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoRVZFTlRfSElEREVOX0FERFJFU1NfSU5QVVRfQ0hBTkdFKTtcbiAgICAgICAgdGhpcy5oaWRkZW5BZGRyZXNzSW5wdXRDaGFuZ2VFdmVudC5pbml0RXZlbnQoJ2NoYW5nZScsIHRydWUsIHRydWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVTcGxpdERlbGl2ZXJ5QWRkcmVzc0Zvcm1WYWx1ZSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaGlkZGVuSW5wdXRJZEN1c3RvbWVyU2hpcHBpbmdBZGRyZXNzID0gPEhUTUxJbnB1dEVsZW1lbnQ+KFxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnNoaXBwaW5nQWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IpXG4gICAgICAgICk7XG4gICAgICAgIGNvbnN0IGhpZGRlbklucHV0SWRDb21wYW55U2hpcHBpbmdBZGRyZXNzID0gPEhUTUxJbnB1dEVsZW1lbnQ+KFxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnNoaXBwaW5nQ29tcGFueUFkZHJlc3NIaWRkZW5JbnB1dFNlbGVjdG9yKVxuICAgICAgICApO1xuICAgICAgICBpZiAodGhpcy5zaGlwcGluZ0FkZHJlc3NUb2dnbGVyLnZhbHVlID09PSB0aGlzLm9wdGlvblZhbHVlRGVsaXZlclRvTXVsdGlwbGVBZGRyZXNzZXMpIHtcbiAgICAgICAgICAgIGhpZGRlbklucHV0SWRDdXN0b21lclNoaXBwaW5nQWRkcmVzcy52YWx1ZSA9IHRoaXMub3B0aW9uVmFsdWVEZWxpdmVyVG9NdWx0aXBsZUFkZHJlc3NlcztcbiAgICAgICAgICAgIGhpZGRlbklucHV0SWRDb21wYW55U2hpcHBpbmdBZGRyZXNzLnZhbHVlID0gdGhpcy5vcHRpb25WYWx1ZURlbGl2ZXJUb011bHRpcGxlQWRkcmVzc2VzO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldEN1cnJlbnRBZGRyZXNzKHNlbGVjdEVsZW1lbnQ6IEhUTUxTZWxlY3RFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMuY3VycmVudEFkZHJlc3MgPSBzZWxlY3RFbGVtZW50Lm9wdGlvbnNbc2VsZWN0RWxlbWVudC5zZWxlY3RlZEluZGV4XS5nZXRBdHRyaWJ1dGUoJ3ZhbHVlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGZpbGxIaWRkZW5JbnB1dHNXaXRoTmV3QWRkcmVzcygpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY3VycmVudEFkZHJlc3NMaXN0ID0gdGhpcy5hZGRyZXNzZXNEYXRhT2JqZWN0W3RoaXMuY3VycmVudEFkZHJlc3NdO1xuICAgICAgICBjb25zdCBoaWRkZW5JbnB1dElkQ3VzdG9tZXJBZGRyZXNzID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5mb3JtLnF1ZXJ5U2VsZWN0b3IodGhpcy5hZGRyZXNzSGlkZGVuSW5wdXRTZWxlY3Rvcik7XG4gICAgICAgIGNvbnN0IGhpZGRlbklucHV0SWRDb21wYW55QWRkcmVzcyA9IDxIVE1MSW5wdXRFbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZm9ybS5xdWVyeVNlbGVjdG9yKHRoaXMuY29tcGFueUFkZHJlc3NIaWRkZW5JbnB1dFNlbGVjdG9yKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLmhpZGRlbkRlZmF1bHRBZGRyZXNzSW5wdXQudmFsdWUgPSB0aGlzLmN1cnJlbnRBZGRyZXNzO1xuICAgICAgICB0aGlzLmZpbGxIaWRkZW5JbnB1dEFkZHJlc3Nlc0ZpZWxkcyhjdXJyZW50QWRkcmVzc0xpc3QsIHRoaXMuYWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IsICdpZF9jdXN0b21lcl9hZGRyZXNzJyk7XG4gICAgICAgIHRoaXMuZmlsbEhpZGRlbklucHV0QWRkcmVzc2VzRmllbGRzKFxuICAgICAgICAgICAgY3VycmVudEFkZHJlc3NMaXN0LFxuICAgICAgICAgICAgdGhpcy5jb21wYW55QWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IsXG4gICAgICAgICAgICAnaWRfY29tcGFueV91bml0X2FkZHJlc3MnLFxuICAgICAgICApO1xuICAgICAgICBoaWRkZW5JbnB1dElkQ3VzdG9tZXJBZGRyZXNzLmRpc3BhdGNoRXZlbnQodGhpcy5oaWRkZW5BZGRyZXNzSW5wdXRDaGFuZ2VFdmVudCk7XG4gICAgICAgIGhpZGRlbklucHV0SWRDb21wYW55QWRkcmVzcy5kaXNwYXRjaEV2ZW50KHRoaXMuaGlkZGVuQWRkcmVzc0lucHV0Q2hhbmdlRXZlbnQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBmaWxsRGVmYXVsdEFkZHJlc3MoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGhpZGRlbkRlZmF1bHRBZGRyZXNzSW5wdXRWYWx1ZSA9IHRoaXMuaGlkZGVuRGVmYXVsdEFkZHJlc3NJbnB1dC5nZXRBdHRyaWJ1dGUoJ3ZhbHVlJyk7XG4gICAgICAgIGlmIChoaWRkZW5EZWZhdWx0QWRkcmVzc0lucHV0VmFsdWUpIHtcbiAgICAgICAgICAgIHRoaXMuY3VycmVudEFkZHJlc3MgPSBoaWRkZW5EZWZhdWx0QWRkcmVzc0lucHV0VmFsdWU7XG4gICAgICAgICAgICB0aGlzLmZpbGxIaWRkZW5JbnB1dHNXaXRoTmV3QWRkcmVzcygpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogRmlsbHMgdGhlIGZvcm0gZWxlbWVudCdzIHZhbHVlIHdpdGggYW4gYWRkcmVzcyB2YWx1ZS5cbiAgICAgKiBAcGFyYW0gYWRkcmVzcyBBIGRhdGEgb2JqZWN0IGZvciBmaWxsaW5nIHRoZSBmaWVsZHMuXG4gICAgICovXG4gICAgZmlsbEhpZGRlbklucHV0QWRkcmVzc2VzRmllbGRzKGFkZHJlc3M6IG9iamVjdCwgc2VsZWN0b3I6IHN0cmluZywgaWRBZGRyZXNzS2V5OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaGlkZGVuSW5wdXRJZEFkZHJlc3MgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmZvcm0ucXVlcnlTZWxlY3RvcihzZWxlY3Rvcik7XG4gICAgICAgIGhpZGRlbklucHV0SWRBZGRyZXNzLnZhbHVlID0gYWRkcmVzcyA/IGFkZHJlc3NbaWRBZGRyZXNzS2V5XSA6ICcnO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbml0QWRkcmVzc2VzRGF0YSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgZGF0YSA9IHRoaXMuZ2V0QXR0cmlidXRlKCdhZGRyZXNzZXMnKTtcbiAgICAgICAgdGhpcy5hZGRyZXNzZXNEYXRhT2JqZWN0ID0gSlNPTi5wYXJzZShkYXRhKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBmb3JtIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGZvcm1TZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Zvcm0tc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBhZGRyZXNzIHNlbGVjdCBlbGVtZW50cy5cbiAgICAgKi9cbiAgICBnZXQgZGF0YVNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZGF0YS1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgYSBoaWRkZW4gZGVmYXVsdCBhZGRyZXNzIGlucHV0LlxuICAgICAqL1xuICAgIGdldCBkZWZhdWx0QWRkcmVzc1NlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZGVmYXVsdC1hZGRyZXNzLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiBhIGhpZGRlbiBjdXN0b21lciBpZCBpbnB1dC5cbiAgICAgKi9cbiAgICBnZXQgYWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdhZGRyZXNzLWhpZGRlbi1pbnB1dC1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgYSBoaWRkZW4gY29tcGFueSB1bml0IGlkIGlucHV0LlxuICAgICAqL1xuICAgIGdldCBjb21wYW55QWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjb21wYW55LWFkZHJlc3MtaGlkZGVuLWlucHV0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiBhIGhpZGRlbiBzaGlwcGluZyBjdXN0b21lciBpZCBpbnB1dC5cbiAgICAgKi9cbiAgICBnZXQgc2hpcHBpbmdBZGRyZXNzSGlkZGVuSW5wdXRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3NoaXBwaW5nLWFkZHJlc3MtaGlkZGVuLWlucHV0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiBhIGhpZGRlbiBzaGlwcGluZyBjdXN0b21lciBpZCBpbnB1dC5cbiAgICAgKi9cbiAgICBnZXQgc2hpcHBpbmdDb21wYW55QWRkcmVzc0hpZGRlbklucHV0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzaGlwcGluZy1jb21wYW55LWFkZHJlc3MtaGlkZGVuLWlucHV0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgc3BsaXQgZGVsaXZlcnkgZm9ybSBpcyBkZWZpbmVkLlxuICAgICAqL1xuICAgIGdldCBvcHRpb25WYWx1ZURlbGl2ZXJUb011bHRpcGxlQWRkcmVzc2VzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndG9nZ2xlLW9wdGlvbi12YWx1ZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIHNoaXBwaW5nIGFkZHJlc3Mgc2VsZWN0IGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHNoaXBwaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3NoaXBwaW5nLWFkZHJlc3MtdG9nZ2xlci1zZWxlY3RvcicpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=