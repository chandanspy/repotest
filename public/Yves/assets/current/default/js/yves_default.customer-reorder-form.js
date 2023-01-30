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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CustomerReorderForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super();
    this.selections = void 0;
    this.trigger = void 0;
    this.selections = Array.from(this.getElementsByClassName(this.jsName + "__selection"));
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
  }

  readyCallback() {
    this.mapEvents();
  }

  mapEvents() {
    this.selections.forEach(selection => selection.addEventListener('change', event => this.onSelectionChange(event)));
  }

  onSelectionChange(event) {
    var isEnabled = this.selections.some(selection => selection.checked);
    this.enableTrigger(isEnabled);
  }
  /**
   * Sets/removes the disabled attribute from the trigger button element, which if not disabled, on click can
   * reorder selected orders.
   * @param enable A boolean value for checking if the trigger is available for changing.
   */


  enableTrigger(isEnabled) {
    if (isEnabled) {
      this.trigger.removeAttribute('disabled');
      return;
    }

    this.trigger.setAttribute('disabled', 'disabled');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXJlb3JkZXItd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0N1c3RvbWVyUmVvcmRlcldpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2N1c3RvbWVyLXJlb3JkZXItZm9ybS9jdXN0b21lci1yZW9yZGVyLWZvcm0udHMiXSwibmFtZXMiOlsiQ3VzdG9tZXJSZW9yZGVyRm9ybSIsIkNvbXBvbmVudCIsImNvbnN0cnVjdG9yIiwic2VsZWN0aW9ucyIsInRyaWdnZXIiLCJBcnJheSIsImZyb20iLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwicmVhZHlDYWxsYmFjayIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJzZWxlY3Rpb24iLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblNlbGVjdGlvbkNoYW5nZSIsImlzRW5hYmxlZCIsInNvbWUiLCJjaGVja2VkIiwiZW5hYmxlVHJpZ2dlciIsInJlbW92ZUF0dHJpYnV0ZSIsInNldEF0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsbUJBQU4sU0FBa0NDLCtEQUFsQyxDQUE0QztBQUl2REMsYUFBVyxHQUFHO0FBQ1Y7QUFEVSxTQUhLQyxVQUdMO0FBQUEsU0FGS0MsT0FFTDtBQUVWLFNBQUtELFVBQUwsR0FBc0NFLEtBQUssQ0FBQ0MsSUFBTixDQUFXLEtBQUtDLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGlCQUFYLENBQXRDO0FBQ0EsU0FBS0osT0FBTCxHQUE0QixLQUFLRyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxnQkFBdUQsQ0FBdkQsQ0FBNUI7QUFDSDs7QUFFU0MsZUFBYSxHQUFTO0FBQzVCLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtQLFVBQUwsQ0FBZ0JRLE9BQWhCLENBQXlCQyxTQUFELElBQ3BCQSxTQUFTLENBQUNDLGdCQUFWLENBQTJCLFFBQTNCLEVBQXNDQyxLQUFELElBQWtCLEtBQUtDLGlCQUFMLENBQXVCRCxLQUF2QixDQUF2RCxDQURKO0FBR0g7O0FBRVNDLG1CQUFpQixDQUFDRCxLQUFELEVBQXFCO0FBQzVDLFFBQU1FLFNBQVMsR0FBRyxLQUFLYixVQUFMLENBQWdCYyxJQUFoQixDQUFzQkwsU0FBRCxJQUFpQ0EsU0FBUyxDQUFDTSxPQUFoRSxDQUFsQjtBQUNBLFNBQUtDLGFBQUwsQ0FBbUJILFNBQW5CO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTtBQUNBOzs7QUFDSUcsZUFBYSxDQUFDSCxTQUFELEVBQTJCO0FBQ3BDLFFBQUlBLFNBQUosRUFBZTtBQUNYLFdBQUtaLE9BQUwsQ0FBYWdCLGVBQWIsQ0FBNkIsVUFBN0I7QUFFQTtBQUNIOztBQUVELFNBQUtoQixPQUFMLENBQWFpQixZQUFiLENBQTBCLFVBQTFCLEVBQXNDLFVBQXRDO0FBQ0g7O0FBdENzRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmN1c3RvbWVyLXJlb3JkZXItZm9ybS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDdXN0b21lclJlb3JkZXJGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcmVhZG9ubHkgc2VsZWN0aW9uczogSFRNTElucHV0RWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCByZWFkb25seSB0cmlnZ2VyOiBIVE1MRWxlbWVudDtcblxuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICBzdXBlcigpO1xuICAgICAgICB0aGlzLnNlbGVjdGlvbnMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2VsZWN0aW9uYCkpO1xuICAgICAgICB0aGlzLnRyaWdnZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fdHJpZ2dlcmApWzBdO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2VsZWN0aW9ucy5mb3JFYWNoKChzZWxlY3Rpb246IEhUTUxJbnB1dEVsZW1lbnQpID0+XG4gICAgICAgICAgICBzZWxlY3Rpb24uYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblNlbGVjdGlvbkNoYW5nZShldmVudCkpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNlbGVjdGlvbkNoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNFbmFibGVkID0gdGhpcy5zZWxlY3Rpb25zLnNvbWUoKHNlbGVjdGlvbjogSFRNTElucHV0RWxlbWVudCkgPT4gc2VsZWN0aW9uLmNoZWNrZWQpO1xuICAgICAgICB0aGlzLmVuYWJsZVRyaWdnZXIoaXNFbmFibGVkKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzL3JlbW92ZXMgdGhlIGRpc2FibGVkIGF0dHJpYnV0ZSBmcm9tIHRoZSB0cmlnZ2VyIGJ1dHRvbiBlbGVtZW50LCB3aGljaCBpZiBub3QgZGlzYWJsZWQsIG9uIGNsaWNrIGNhblxuICAgICAqIHJlb3JkZXIgc2VsZWN0ZWQgb3JkZXJzLlxuICAgICAqIEBwYXJhbSBlbmFibGUgQSBib29sZWFuIHZhbHVlIGZvciBjaGVja2luZyBpZiB0aGUgdHJpZ2dlciBpcyBhdmFpbGFibGUgZm9yIGNoYW5naW5nLlxuICAgICAqL1xuICAgIGVuYWJsZVRyaWdnZXIoaXNFbmFibGVkOiBib29sZWFuKTogdm9pZCB7XG4gICAgICAgIGlmIChpc0VuYWJsZWQpIHtcbiAgICAgICAgICAgIHRoaXMudHJpZ2dlci5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudHJpZ2dlci5zZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==