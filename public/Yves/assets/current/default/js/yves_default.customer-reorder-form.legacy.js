(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["customer-reorder-form"],{

/***/ "./vendor/spryker-shop/customer-reorder-widget/src/SprykerShop/Yves/CustomerReorderWidget/Theme/default/components/molecules/customer-reorder-form/customer-reorder-form.ts":
/*!**********************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/customer-reorder-widget/src/SprykerShop/Yves/CustomerReorderWidget/Theme/default/components/molecules/customer-reorder-form/customer-reorder-form.ts ***!
  \**********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CustomerReorderForm; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var CustomerReorderForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(CustomerReorderForm, _Component);

  function CustomerReorderForm() {
    var _this;

    _this = _Component.call(this) || this;
    _this.selections = void 0;
    _this.trigger = void 0;
    _this.selections = Array.from(_this.getElementsByClassName(_this.jsName + "__selection"));
    _this.trigger = _this.getElementsByClassName(_this.jsName + "__trigger")[0];
    return _this;
  }

  var _proto = CustomerReorderForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.selections.forEach(function (selection) {
      return selection.addEventListener('change', function (event) {
        return _this2.onSelectionChange(event);
      });
    });
  };

  _proto.onSelectionChange = function onSelectionChange(event) {
    var isEnabled = this.selections.some(function (selection) {
      return selection.checked;
    });
    this.enableTrigger(isEnabled);
  }
  /**
   * Sets/removes the disabled attribute from the trigger button element, which if not disabled, on click can
   * reorder selected orders.
   * @param enable A boolean value for checking if the trigger is available for changing.
   */
  ;

  _proto.enableTrigger = function enableTrigger(isEnabled) {
    if (isEnabled) {
      this.trigger.removeAttribute('disabled');
      return;
    }

    this.trigger.setAttribute('disabled', 'disabled');
  };

  return CustomerReorderForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXJlb3JkZXItd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0N1c3RvbWVyUmVvcmRlcldpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2N1c3RvbWVyLXJlb3JkZXItZm9ybS9jdXN0b21lci1yZW9yZGVyLWZvcm0udHMiXSwibmFtZXMiOlsiQ3VzdG9tZXJSZW9yZGVyRm9ybSIsInNlbGVjdGlvbnMiLCJ0cmlnZ2VyIiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInJlYWR5Q2FsbGJhY2siLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwic2VsZWN0aW9uIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25TZWxlY3Rpb25DaGFuZ2UiLCJpc0VuYWJsZWQiLCJzb21lIiwiY2hlY2tlZCIsImVuYWJsZVRyaWdnZXIiLCJyZW1vdmVBdHRyaWJ1dGUiLCJzZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLG1COzs7QUFJakIsaUNBQWM7QUFBQTs7QUFDVjtBQURVLFVBSEtDLFVBR0w7QUFBQSxVQUZLQyxPQUVMO0FBRVYsVUFBS0QsVUFBTCxHQUFzQ0UsS0FBSyxDQUFDQyxJQUFOLENBQVcsTUFBS0Msc0JBQUwsQ0FBK0IsTUFBS0MsTUFBcEMsaUJBQVgsQ0FBdEM7QUFDQSxVQUFLSixPQUFMLEdBQTRCLE1BQUtHLHNCQUFMLENBQStCLE1BQUtDLE1BQXBDLGdCQUF1RCxDQUF2RCxDQUE1QjtBQUhVO0FBSWI7Ozs7U0FFU0MsYSxHQUFWLHlCQUFnQztBQUM1QixTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLUCxVQUFMLENBQWdCUSxPQUFoQixDQUF3QixVQUFDQyxTQUFEO0FBQUEsYUFDcEJBLFNBQVMsQ0FBQ0MsZ0JBQVYsQ0FBMkIsUUFBM0IsRUFBcUMsVUFBQ0MsS0FBRDtBQUFBLGVBQWtCLE1BQUksQ0FBQ0MsaUJBQUwsQ0FBdUJELEtBQXZCLENBQWxCO0FBQUEsT0FBckMsQ0FEb0I7QUFBQSxLQUF4QjtBQUdILEc7O1NBRVNDLGlCLEdBQVYsMkJBQTRCRCxLQUE1QixFQUFnRDtBQUM1QyxRQUFNRSxTQUFTLEdBQUcsS0FBS2IsVUFBTCxDQUFnQmMsSUFBaEIsQ0FBcUIsVUFBQ0wsU0FBRDtBQUFBLGFBQWlDQSxTQUFTLENBQUNNLE9BQTNDO0FBQUEsS0FBckIsQ0FBbEI7QUFDQSxTQUFLQyxhQUFMLENBQW1CSCxTQUFuQjtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7QUFDQTs7O1NBQ0lHLGEsR0FBQSx1QkFBY0gsU0FBZCxFQUF3QztBQUNwQyxRQUFJQSxTQUFKLEVBQWU7QUFDWCxXQUFLWixPQUFMLENBQWFnQixlQUFiLENBQTZCLFVBQTdCO0FBRUE7QUFDSDs7QUFFRCxTQUFLaEIsT0FBTCxDQUFhaUIsWUFBYixDQUEwQixVQUExQixFQUFzQyxVQUF0QztBQUNILEc7OztFQXRDNENDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmN1c3RvbWVyLXJlb3JkZXItZm9ybS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ3VzdG9tZXJSZW9yZGVyRm9ybSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHJlYWRvbmx5IHNlbGVjdGlvbnM6IEhUTUxJbnB1dEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcmVhZG9ubHkgdHJpZ2dlcjogSFRNTEVsZW1lbnQ7XG5cbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoKTtcbiAgICAgICAgdGhpcy5zZWxlY3Rpb25zID0gPEhUTUxJbnB1dEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NlbGVjdGlvbmApKTtcbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RyaWdnZXJgKVswXTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNlbGVjdGlvbnMuZm9yRWFjaCgoc2VsZWN0aW9uOiBIVE1MSW5wdXRFbGVtZW50KSA9PlxuICAgICAgICAgICAgc2VsZWN0aW9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIChldmVudDogRXZlbnQpID0+IHRoaXMub25TZWxlY3Rpb25DaGFuZ2UoZXZlbnQpKSxcbiAgICAgICAgKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TZWxlY3Rpb25DaGFuZ2UoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlzRW5hYmxlZCA9IHRoaXMuc2VsZWN0aW9ucy5zb21lKChzZWxlY3Rpb246IEhUTUxJbnB1dEVsZW1lbnQpID0+IHNlbGVjdGlvbi5jaGVja2VkKTtcbiAgICAgICAgdGhpcy5lbmFibGVUcmlnZ2VyKGlzRW5hYmxlZCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cy9yZW1vdmVzIHRoZSBkaXNhYmxlZCBhdHRyaWJ1dGUgZnJvbSB0aGUgdHJpZ2dlciBidXR0b24gZWxlbWVudCwgd2hpY2ggaWYgbm90IGRpc2FibGVkLCBvbiBjbGljayBjYW5cbiAgICAgKiByZW9yZGVyIHNlbGVjdGVkIG9yZGVycy5cbiAgICAgKiBAcGFyYW0gZW5hYmxlIEEgYm9vbGVhbiB2YWx1ZSBmb3IgY2hlY2tpbmcgaWYgdGhlIHRyaWdnZXIgaXMgYXZhaWxhYmxlIGZvciBjaGFuZ2luZy5cbiAgICAgKi9cbiAgICBlbmFibGVUcmlnZ2VyKGlzRW5hYmxlZDogYm9vbGVhbik6IHZvaWQge1xuICAgICAgICBpZiAoaXNFbmFibGVkKSB7XG4gICAgICAgICAgICB0aGlzLnRyaWdnZXIucmVtb3ZlQXR0cmlidXRlKCdkaXNhYmxlZCcpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXIuc2V0QXR0cmlidXRlKCdkaXNhYmxlZCcsICdkaXNhYmxlZCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=