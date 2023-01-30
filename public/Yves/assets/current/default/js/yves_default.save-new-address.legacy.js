(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["save-new-address"],{

/***/ "./vendor/spryker-shop/customer-page/src/SprykerShop/Yves/CustomerPage/Theme/default/components/molecules/save-new-address/save-new-address.ts":
/*!*****************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/customer-page/src/SprykerShop/Yves/CustomerPage/Theme/default/components/molecules/save-new-address/save-new-address.ts ***!
  \*****************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SaveNewAddress; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



/* tslint:disable */

var EVENT_ADD_NEW_ADDRESS = 'add-new-address';

var SaveNewAddress = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(SaveNewAddress, _Component);

  function SaveNewAddress() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.customerShippingAddresses = void 0;
    _this.customerBillingAddresses = void 0;
    _this.saveNewAddressToggler = void 0;
    _this.sameAsShippingToggler = void 0;
    _this.addNewShippingAddress = void 0;
    _this.addNewBillingAddress = void 0;
    _this.newShippingAddressChecked = false;
    _this.newBillingAddressChecked = false;
    _this.hideClass = 'is-hidden';
    return _this;
  }

  var _proto = SaveNewAddress.prototype;

  _proto.readyCallback = function readyCallback() {
    if (this.shippingAddressTogglerSelector && this.billingAddressTogglerSelector) {
      this.customerShippingAddresses = document.querySelector(this.shippingAddressTogglerSelector);
      this.customerBillingAddresses = document.querySelector(this.billingAddressTogglerSelector);
    }

    if (this.addNewShippingAddressSelector && this.addNewBillingAddressSelector) {
      this.addNewShippingAddress = document.querySelector(this.addNewShippingAddressSelector);
      this.addNewBillingAddress = document.querySelector(this.addNewBillingAddressSelector);
    }

    this.saveNewAddressToggler = document.querySelector(this.saveAddressTogglerSelector);
    this.sameAsShippingToggler = document.querySelector(this.billingSameAsShippingAddressTogglerSelector);
    this.customerAddressesExists();
  };

  _proto.customerAddressesExists = function customerAddressesExists() {
    if (!this.customerShippingAddresses) {
      this.showSaveNewAddress();
      return;
    }

    this.mapEvents();
    this.initSaveNewAddressState();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    if (this.addNewShippingAddress && this.addNewBillingAddress) {
      this.addNewShippingAddress.addEventListener(EVENT_ADD_NEW_ADDRESS, function () {
        return _this2.shippingTogglerOnChange();
      });
      this.addNewBillingAddress.addEventListener(EVENT_ADD_NEW_ADDRESS, function () {
        return _this2.billingTogglerOnChange();
      });
    }

    this.customerShippingAddresses.addEventListener('change', function () {
      return _this2.shippingTogglerOnChange();
    });
    this.customerBillingAddresses.addEventListener('change', function () {
      return _this2.billingTogglerOnChange();
    });
    this.sameAsShippingToggler.addEventListener('change', function () {
      return _this2.toggleSaveNewAddress();
    });
  };

  _proto.shippingTogglerOnChange = function shippingTogglerOnChange() {
    this.newShippingAddressChecked = this.addressTogglerChange(this.customerShippingAddresses);
    this.toggleSaveNewAddress();
  };

  _proto.billingTogglerOnChange = function billingTogglerOnChange() {
    this.newBillingAddressChecked = this.addressTogglerChange(this.customerBillingAddresses);
    this.toggleSaveNewAddress();
  };

  _proto.initSaveNewAddressState = function initSaveNewAddressState() {
    this.newShippingAddressChecked = this.isSaveNewAddressOptionSelected(this.customerShippingAddresses);
    this.newBillingAddressChecked = this.isSaveNewAddressOptionSelected(this.customerBillingAddresses);
    this.toggleSaveNewAddress();
  };

  _proto.addressTogglerChange = function addressTogglerChange(toggler) {
    return this.isSaveNewAddressOptionSelected(toggler);
  };

  _proto.isSaveNewAddressOptionSelected = function isSaveNewAddressOptionSelected(toggler) {
    return !toggler.value;
  };

  _proto.toggleSaveNewAddress = function toggleSaveNewAddress() {
    if (this.newShippingAddressChecked || this.newBillingAddressChecked && !this.sameAsShippingChecked) {
      this.showSaveNewAddress();
      return;
    }

    this.hideSaveNewAddress();
  };

  _proto.hideSaveNewAddress = function hideSaveNewAddress() {
    this.classList.add(this.hideClass);
    this.saveNewAddressToggler.disabled = true;
  };

  _proto.showSaveNewAddress = function showSaveNewAddress() {
    this.classList.remove(this.hideClass);
    this.saveNewAddressToggler.disabled = false;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(SaveNewAddress, [{
    key: "sameAsShippingChecked",
    get: function get() {
      return this.sameAsShippingToggler.checked;
    }
  }, {
    key: "shippingAddressTogglerSelector",
    get: function get() {
      return this.getAttribute('shipping-address-toggler-selector');
    }
  }, {
    key: "billingAddressTogglerSelector",
    get: function get() {
      return this.getAttribute('billing-address-toggler-selector');
    }
  }, {
    key: "addNewShippingAddressSelector",
    get: function get() {
      return this.getAttribute('add-new-shipping-address-selector');
    }
  }, {
    key: "addNewBillingAddressSelector",
    get: function get() {
      return this.getAttribute('add-new-billing-address-selector');
    }
  }, {
    key: "billingSameAsShippingAddressTogglerSelector",
    get: function get() {
      return this.getAttribute('billing-same-as-shipping-toggler-selector');
    }
  }, {
    key: "saveAddressTogglerSelector",
    get: function get() {
      return this.getAttribute('save-address-toggler-selector');
    }
  }]);

  return SaveNewAddress;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ3VzdG9tZXJQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc2F2ZS1uZXctYWRkcmVzcy9zYXZlLW5ldy1hZGRyZXNzLnRzIl0sIm5hbWVzIjpbIkVWRU5UX0FERF9ORVdfQUREUkVTUyIsIlNhdmVOZXdBZGRyZXNzIiwiY3VzdG9tZXJTaGlwcGluZ0FkZHJlc3NlcyIsImN1c3RvbWVyQmlsbGluZ0FkZHJlc3NlcyIsInNhdmVOZXdBZGRyZXNzVG9nZ2xlciIsInNhbWVBc1NoaXBwaW5nVG9nZ2xlciIsImFkZE5ld1NoaXBwaW5nQWRkcmVzcyIsImFkZE5ld0JpbGxpbmdBZGRyZXNzIiwibmV3U2hpcHBpbmdBZGRyZXNzQ2hlY2tlZCIsIm5ld0JpbGxpbmdBZGRyZXNzQ2hlY2tlZCIsImhpZGVDbGFzcyIsInJlYWR5Q2FsbGJhY2siLCJzaGlwcGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IiLCJiaWxsaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvciIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImFkZE5ld1NoaXBwaW5nQWRkcmVzc1NlbGVjdG9yIiwiYWRkTmV3QmlsbGluZ0FkZHJlc3NTZWxlY3RvciIsInNhdmVBZGRyZXNzVG9nZ2xlclNlbGVjdG9yIiwiYmlsbGluZ1NhbWVBc1NoaXBwaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvciIsImN1c3RvbWVyQWRkcmVzc2VzRXhpc3RzIiwic2hvd1NhdmVOZXdBZGRyZXNzIiwibWFwRXZlbnRzIiwiaW5pdFNhdmVOZXdBZGRyZXNzU3RhdGUiLCJhZGRFdmVudExpc3RlbmVyIiwic2hpcHBpbmdUb2dnbGVyT25DaGFuZ2UiLCJiaWxsaW5nVG9nZ2xlck9uQ2hhbmdlIiwidG9nZ2xlU2F2ZU5ld0FkZHJlc3MiLCJhZGRyZXNzVG9nZ2xlckNoYW5nZSIsImlzU2F2ZU5ld0FkZHJlc3NPcHRpb25TZWxlY3RlZCIsInRvZ2dsZXIiLCJ2YWx1ZSIsInNhbWVBc1NoaXBwaW5nQ2hlY2tlZCIsImhpZGVTYXZlTmV3QWRkcmVzcyIsImNsYXNzTGlzdCIsImFkZCIsImRpc2FibGVkIiwicmVtb3ZlIiwiY2hlY2tlZCIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBRUEsSUFBTUEscUJBQXFCLEdBQUcsaUJBQTlCOztJQUVxQkMsYzs7Ozs7Ozs7Ozs7VUFDakJDLHlCO1VBQ0FDLHdCO1VBQ0FDLHFCO1VBQ0FDLHFCO1VBQ0FDLHFCO1VBQ0FDLG9CO1VBRUFDLHlCLEdBQXFDLEs7VUFDckNDLHdCLEdBQW9DLEs7VUFDM0JDLFMsR0FBb0IsVzs7Ozs7O1NBRW5CQyxhLEdBQVYseUJBQWdDO0FBQzVCLFFBQUksS0FBS0MsOEJBQUwsSUFBdUMsS0FBS0MsNkJBQWhELEVBQStFO0FBQzNFLFdBQUtYLHlCQUFMLEdBQ0lZLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLSCw4QkFBNUIsQ0FESjtBQUdBLFdBQUtULHdCQUFMLEdBQWlEVyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0YsNkJBQTVCLENBQWpEO0FBQ0g7O0FBRUQsUUFBSSxLQUFLRyw2QkFBTCxJQUFzQyxLQUFLQyw0QkFBL0MsRUFBNkU7QUFDekUsV0FBS1gscUJBQUwsR0FBZ0RRLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLQyw2QkFBNUIsQ0FBaEQ7QUFDQSxXQUFLVCxvQkFBTCxHQUErQ08sUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtFLDRCQUE1QixDQUEvQztBQUNIOztBQUVELFNBQUtiLHFCQUFMLEdBQStDVSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsS0FBS0csMEJBQTVCLENBQS9DO0FBQ0EsU0FBS2IscUJBQUwsR0FDSVMsUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtJLDJDQUE1QixDQURKO0FBSUEsU0FBS0MsdUJBQUw7QUFDSCxHOztTQUVTQSx1QixHQUFWLG1DQUEwQztBQUN0QyxRQUFJLENBQUMsS0FBS2xCLHlCQUFWLEVBQXFDO0FBQ2pDLFdBQUttQixrQkFBTDtBQUNBO0FBQ0g7O0FBRUQsU0FBS0MsU0FBTDtBQUNBLFNBQUtDLHVCQUFMO0FBQ0gsRzs7U0FFU0QsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixRQUFJLEtBQUtoQixxQkFBTCxJQUE4QixLQUFLQyxvQkFBdkMsRUFBNkQ7QUFDekQsV0FBS0QscUJBQUwsQ0FBMkJrQixnQkFBM0IsQ0FBNEN4QixxQkFBNUMsRUFBbUU7QUFBQSxlQUFNLE1BQUksQ0FBQ3lCLHVCQUFMLEVBQU47QUFBQSxPQUFuRTtBQUNBLFdBQUtsQixvQkFBTCxDQUEwQmlCLGdCQUExQixDQUEyQ3hCLHFCQUEzQyxFQUFrRTtBQUFBLGVBQU0sTUFBSSxDQUFDMEIsc0JBQUwsRUFBTjtBQUFBLE9BQWxFO0FBQ0g7O0FBRUQsU0FBS3hCLHlCQUFMLENBQStCc0IsZ0JBQS9CLENBQWdELFFBQWhELEVBQTBEO0FBQUEsYUFBTSxNQUFJLENBQUNDLHVCQUFMLEVBQU47QUFBQSxLQUExRDtBQUNBLFNBQUt0Qix3QkFBTCxDQUE4QnFCLGdCQUE5QixDQUErQyxRQUEvQyxFQUF5RDtBQUFBLGFBQU0sTUFBSSxDQUFDRSxzQkFBTCxFQUFOO0FBQUEsS0FBekQ7QUFDQSxTQUFLckIscUJBQUwsQ0FBMkJtQixnQkFBM0IsQ0FBNEMsUUFBNUMsRUFBc0Q7QUFBQSxhQUFNLE1BQUksQ0FBQ0csb0JBQUwsRUFBTjtBQUFBLEtBQXREO0FBQ0gsRzs7U0FFU0YsdUIsR0FBVixtQ0FBMEM7QUFDdEMsU0FBS2pCLHlCQUFMLEdBQWlDLEtBQUtvQixvQkFBTCxDQUEwQixLQUFLMUIseUJBQS9CLENBQWpDO0FBQ0EsU0FBS3lCLG9CQUFMO0FBQ0gsRzs7U0FFU0Qsc0IsR0FBVixrQ0FBeUM7QUFDckMsU0FBS2pCLHdCQUFMLEdBQWdDLEtBQUttQixvQkFBTCxDQUEwQixLQUFLekIsd0JBQS9CLENBQWhDO0FBQ0EsU0FBS3dCLG9CQUFMO0FBQ0gsRzs7U0FFU0osdUIsR0FBVixtQ0FBMEM7QUFDdEMsU0FBS2YseUJBQUwsR0FBaUMsS0FBS3FCLDhCQUFMLENBQW9DLEtBQUszQix5QkFBekMsQ0FBakM7QUFDQSxTQUFLTyx3QkFBTCxHQUFnQyxLQUFLb0IsOEJBQUwsQ0FBb0MsS0FBSzFCLHdCQUF6QyxDQUFoQztBQUNBLFNBQUt3QixvQkFBTDtBQUNILEc7O1NBRVNDLG9CLEdBQVYsOEJBQStCRSxPQUEvQixFQUFpRDtBQUM3QyxXQUFPLEtBQUtELDhCQUFMLENBQW9DQyxPQUFwQyxDQUFQO0FBQ0gsRzs7U0FFU0QsOEIsR0FBVix3Q0FBeUNDLE9BQXpDLEVBQTRFO0FBQ3hFLFdBQU8sQ0FBQ0EsT0FBTyxDQUFDQyxLQUFoQjtBQUNILEc7O1NBRURKLG9CLEdBQUEsZ0NBQTZCO0FBQ3pCLFFBQUksS0FBS25CLHlCQUFMLElBQW1DLEtBQUtDLHdCQUFMLElBQWlDLENBQUMsS0FBS3VCLHFCQUE5RSxFQUFzRztBQUNsRyxXQUFLWCxrQkFBTDtBQUNBO0FBQ0g7O0FBRUQsU0FBS1ksa0JBQUw7QUFDSCxHOztTQUVEQSxrQixHQUFBLDhCQUEyQjtBQUN2QixTQUFLQyxTQUFMLENBQWVDLEdBQWYsQ0FBbUIsS0FBS3pCLFNBQXhCO0FBQ0EsU0FBS04scUJBQUwsQ0FBMkJnQyxRQUEzQixHQUFzQyxJQUF0QztBQUNILEc7O1NBRURmLGtCLEdBQUEsOEJBQTJCO0FBQ3ZCLFNBQUthLFNBQUwsQ0FBZUcsTUFBZixDQUFzQixLQUFLM0IsU0FBM0I7QUFDQSxTQUFLTixxQkFBTCxDQUEyQmdDLFFBQTNCLEdBQXNDLEtBQXRDO0FBQ0gsRzs7OztTQUVELGVBQXFDO0FBQ2pDLGFBQU8sS0FBSy9CLHFCQUFMLENBQTJCaUMsT0FBbEM7QUFDSDs7O1NBRUQsZUFBNkM7QUFDekMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLG1DQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTRDO0FBQ3hDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixrQ0FBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUE0QztBQUN4QyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsbUNBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBMkM7QUFDdkMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGtDQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTBEO0FBQ3RELGFBQU8sS0FBS0EsWUFBTCxDQUFrQiwyQ0FBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsK0JBQWxCLENBQVA7QUFDSDs7OztFQTNIdUNDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNhdmUtbmV3LWFkZHJlc3MubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyogdHNsaW50OmRpc2FibGUgKi9cbmltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5jb25zdCBFVkVOVF9BRERfTkVXX0FERFJFU1MgPSAnYWRkLW5ldy1hZGRyZXNzJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgU2F2ZU5ld0FkZHJlc3MgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIGN1c3RvbWVyU2hpcHBpbmdBZGRyZXNzZXM6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBjdXN0b21lckJpbGxpbmdBZGRyZXNzZXM6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBzYXZlTmV3QWRkcmVzc1RvZ2dsZXI6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgc2FtZUFzU2hpcHBpbmdUb2dnbGVyOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIGFkZE5ld1NoaXBwaW5nQWRkcmVzczogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgYWRkTmV3QmlsbGluZ0FkZHJlc3M6IEhUTUxCdXR0b25FbGVtZW50O1xuXG4gICAgbmV3U2hpcHBpbmdBZGRyZXNzQ2hlY2tlZDogYm9vbGVhbiA9IGZhbHNlO1xuICAgIG5ld0JpbGxpbmdBZGRyZXNzQ2hlY2tlZDogYm9vbGVhbiA9IGZhbHNlO1xuICAgIHJlYWRvbmx5IGhpZGVDbGFzczogc3RyaW5nID0gJ2lzLWhpZGRlbic7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuc2hpcHBpbmdBZGRyZXNzVG9nZ2xlclNlbGVjdG9yICYmIHRoaXMuYmlsbGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IpIHtcbiAgICAgICAgICAgIHRoaXMuY3VzdG9tZXJTaGlwcGluZ0FkZHJlc3NlcyA9IDxIVE1MRm9ybUVsZW1lbnQ+KFxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5zaGlwcGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IpXG4gICAgICAgICAgICApO1xuICAgICAgICAgICAgdGhpcy5jdXN0b21lckJpbGxpbmdBZGRyZXNzZXMgPSA8SFRNTEZvcm1FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5iaWxsaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3Rvcik7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5hZGROZXdTaGlwcGluZ0FkZHJlc3NTZWxlY3RvciAmJiB0aGlzLmFkZE5ld0JpbGxpbmdBZGRyZXNzU2VsZWN0b3IpIHtcbiAgICAgICAgICAgIHRoaXMuYWRkTmV3U2hpcHBpbmdBZGRyZXNzID0gPEhUTUxCdXR0b25FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5hZGROZXdTaGlwcGluZ0FkZHJlc3NTZWxlY3Rvcik7XG4gICAgICAgICAgICB0aGlzLmFkZE5ld0JpbGxpbmdBZGRyZXNzID0gPEhUTUxCdXR0b25FbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5hZGROZXdCaWxsaW5nQWRkcmVzc1NlbGVjdG9yKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuc2F2ZU5ld0FkZHJlc3NUb2dnbGVyID0gPEhUTUxJbnB1dEVsZW1lbnQ+ZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnNhdmVBZGRyZXNzVG9nZ2xlclNlbGVjdG9yKTtcbiAgICAgICAgdGhpcy5zYW1lQXNTaGlwcGluZ1RvZ2dsZXIgPSA8SFRNTElucHV0RWxlbWVudD4oXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMuYmlsbGluZ1NhbWVBc1NoaXBwaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvcilcbiAgICAgICAgKTtcblxuICAgICAgICB0aGlzLmN1c3RvbWVyQWRkcmVzc2VzRXhpc3RzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGN1c3RvbWVyQWRkcmVzc2VzRXhpc3RzKCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuY3VzdG9tZXJTaGlwcGluZ0FkZHJlc3Nlcykge1xuICAgICAgICAgICAgdGhpcy5zaG93U2F2ZU5ld0FkZHJlc3MoKTtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgICAgIHRoaXMuaW5pdFNhdmVOZXdBZGRyZXNzU3RhdGUoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5hZGROZXdTaGlwcGluZ0FkZHJlc3MgJiYgdGhpcy5hZGROZXdCaWxsaW5nQWRkcmVzcykge1xuICAgICAgICAgICAgdGhpcy5hZGROZXdTaGlwcGluZ0FkZHJlc3MuYWRkRXZlbnRMaXN0ZW5lcihFVkVOVF9BRERfTkVXX0FERFJFU1MsICgpID0+IHRoaXMuc2hpcHBpbmdUb2dnbGVyT25DaGFuZ2UoKSk7XG4gICAgICAgICAgICB0aGlzLmFkZE5ld0JpbGxpbmdBZGRyZXNzLmFkZEV2ZW50TGlzdGVuZXIoRVZFTlRfQUREX05FV19BRERSRVNTLCAoKSA9PiB0aGlzLmJpbGxpbmdUb2dnbGVyT25DaGFuZ2UoKSk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmN1c3RvbWVyU2hpcHBpbmdBZGRyZXNzZXMuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5zaGlwcGluZ1RvZ2dsZXJPbkNoYW5nZSgpKTtcbiAgICAgICAgdGhpcy5jdXN0b21lckJpbGxpbmdBZGRyZXNzZXMuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5iaWxsaW5nVG9nZ2xlck9uQ2hhbmdlKCkpO1xuICAgICAgICB0aGlzLnNhbWVBc1NoaXBwaW5nVG9nZ2xlci5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLnRvZ2dsZVNhdmVOZXdBZGRyZXNzKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzaGlwcGluZ1RvZ2dsZXJPbkNoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5uZXdTaGlwcGluZ0FkZHJlc3NDaGVja2VkID0gdGhpcy5hZGRyZXNzVG9nZ2xlckNoYW5nZSh0aGlzLmN1c3RvbWVyU2hpcHBpbmdBZGRyZXNzZXMpO1xuICAgICAgICB0aGlzLnRvZ2dsZVNhdmVOZXdBZGRyZXNzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGJpbGxpbmdUb2dnbGVyT25DaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubmV3QmlsbGluZ0FkZHJlc3NDaGVja2VkID0gdGhpcy5hZGRyZXNzVG9nZ2xlckNoYW5nZSh0aGlzLmN1c3RvbWVyQmlsbGluZ0FkZHJlc3Nlcyk7XG4gICAgICAgIHRoaXMudG9nZ2xlU2F2ZU5ld0FkZHJlc3MoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdFNhdmVOZXdBZGRyZXNzU3RhdGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubmV3U2hpcHBpbmdBZGRyZXNzQ2hlY2tlZCA9IHRoaXMuaXNTYXZlTmV3QWRkcmVzc09wdGlvblNlbGVjdGVkKHRoaXMuY3VzdG9tZXJTaGlwcGluZ0FkZHJlc3Nlcyk7XG4gICAgICAgIHRoaXMubmV3QmlsbGluZ0FkZHJlc3NDaGVja2VkID0gdGhpcy5pc1NhdmVOZXdBZGRyZXNzT3B0aW9uU2VsZWN0ZWQodGhpcy5jdXN0b21lckJpbGxpbmdBZGRyZXNzZXMpO1xuICAgICAgICB0aGlzLnRvZ2dsZVNhdmVOZXdBZGRyZXNzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFkZHJlc3NUb2dnbGVyQ2hhbmdlKHRvZ2dsZXIpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaXNTYXZlTmV3QWRkcmVzc09wdGlvblNlbGVjdGVkKHRvZ2dsZXIpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpc1NhdmVOZXdBZGRyZXNzT3B0aW9uU2VsZWN0ZWQodG9nZ2xlcjogSFRNTEZvcm1FbGVtZW50KTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiAhdG9nZ2xlci52YWx1ZTtcbiAgICB9XG5cbiAgICB0b2dnbGVTYXZlTmV3QWRkcmVzcygpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMubmV3U2hpcHBpbmdBZGRyZXNzQ2hlY2tlZCB8fCAodGhpcy5uZXdCaWxsaW5nQWRkcmVzc0NoZWNrZWQgJiYgIXRoaXMuc2FtZUFzU2hpcHBpbmdDaGVja2VkKSkge1xuICAgICAgICAgICAgdGhpcy5zaG93U2F2ZU5ld0FkZHJlc3MoKTtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuaGlkZVNhdmVOZXdBZGRyZXNzKCk7XG4gICAgfVxuXG4gICAgaGlkZVNhdmVOZXdBZGRyZXNzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQodGhpcy5oaWRlQ2xhc3MpO1xuICAgICAgICB0aGlzLnNhdmVOZXdBZGRyZXNzVG9nZ2xlci5kaXNhYmxlZCA9IHRydWU7XG4gICAgfVxuXG4gICAgc2hvd1NhdmVOZXdBZGRyZXNzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5oaWRlQ2xhc3MpO1xuICAgICAgICB0aGlzLnNhdmVOZXdBZGRyZXNzVG9nZ2xlci5kaXNhYmxlZCA9IGZhbHNlO1xuICAgIH1cblxuICAgIGdldCBzYW1lQXNTaGlwcGluZ0NoZWNrZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnNhbWVBc1NoaXBwaW5nVG9nZ2xlci5jaGVja2VkO1xuICAgIH1cblxuICAgIGdldCBzaGlwcGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzaGlwcGluZy1hZGRyZXNzLXRvZ2dsZXItc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICBnZXQgYmlsbGluZ0FkZHJlc3NUb2dnbGVyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdiaWxsaW5nLWFkZHJlc3MtdG9nZ2xlci1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIGdldCBhZGROZXdTaGlwcGluZ0FkZHJlc3NTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FkZC1uZXctc2hpcHBpbmctYWRkcmVzcy1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIGdldCBhZGROZXdCaWxsaW5nQWRkcmVzc1NlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWRkLW5ldy1iaWxsaW5nLWFkZHJlc3Mtc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICBnZXQgYmlsbGluZ1NhbWVBc1NoaXBwaW5nQWRkcmVzc1RvZ2dsZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2JpbGxpbmctc2FtZS1hcy1zaGlwcGluZy10b2dnbGVyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgZ2V0IHNhdmVBZGRyZXNzVG9nZ2xlclNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnc2F2ZS1hZGRyZXNzLXRvZ2dsZXItc2VsZWN0b3InKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9