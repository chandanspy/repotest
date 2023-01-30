(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["quote-request-history-select"],{

/***/ "./vendor/spryker-shop/quote-request-page/src/SprykerShop/Yves/QuoteRequestPage/Theme/default/components/molecules/quote-request-history-select/quote-request-history-select.ts":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/quote-request-page/src/SprykerShop/Yves/QuoteRequestPage/Theme/default/components/molecules/quote-request-history-select/quote-request-history-select.ts ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return QuoteRequestHistorySelect; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class QuoteRequestHistorySelect extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.select = void 0;
  }

  readyCallback() {}

  init() {
    this.select = this.getElementsByClassName(this.jsName + "__select")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.mapSelectChangeEvent();
  }

  mapSelectChangeEvent() {
    if (this.select) {
      this.select.addEventListener('change', () => this.onChange());
    }
  }

  onChange() {
    var selectedValue = this.select.options[this.select.selectedIndex].value;

    if (selectedValue) {
      window.location.search = this.versionReferenceTitle + "=" + selectedValue;
    }
  }

  get versionReferenceTitle() {
    return this.getAttribute('version-reference-title');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3F1b3RlLXJlcXVlc3QtcGFnZS9zcmMvU3ByeWtlclNob3AvWXZlcy9RdW90ZVJlcXVlc3RQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcXVvdGUtcmVxdWVzdC1oaXN0b3J5LXNlbGVjdC9xdW90ZS1yZXF1ZXN0LWhpc3Rvcnktc2VsZWN0LnRzIl0sIm5hbWVzIjpbIlF1b3RlUmVxdWVzdEhpc3RvcnlTZWxlY3QiLCJDb21wb25lbnQiLCJzZWxlY3QiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJtYXBTZWxlY3RDaGFuZ2VFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNoYW5nZSIsInNlbGVjdGVkVmFsdWUiLCJvcHRpb25zIiwic2VsZWN0ZWRJbmRleCIsInZhbHVlIiwid2luZG93IiwibG9jYXRpb24iLCJzZWFyY2giLCJ2ZXJzaW9uUmVmZXJlbmNlVGl0bGUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLHlCQUFOLFNBQXdDQywrREFBeEMsQ0FBa0Q7QUFBQTtBQUFBO0FBQUEsU0FDbkRDLE1BRG1EO0FBQUE7O0FBR25EQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLRixNQUFMLEdBQWlDLEtBQUtHLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGVBQXNELENBQXRELENBQWpDO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0Msb0JBQUw7QUFDSDs7QUFFU0Esc0JBQW9CLEdBQVM7QUFDbkMsUUFBSSxLQUFLTixNQUFULEVBQWlCO0FBQ2IsV0FBS0EsTUFBTCxDQUFZTyxnQkFBWixDQUE2QixRQUE3QixFQUF1QyxNQUFNLEtBQUtDLFFBQUwsRUFBN0M7QUFDSDtBQUNKOztBQUVTQSxVQUFRLEdBQVM7QUFDdkIsUUFBTUMsYUFBYSxHQUFHLEtBQUtULE1BQUwsQ0FBWVUsT0FBWixDQUFvQixLQUFLVixNQUFMLENBQVlXLGFBQWhDLEVBQStDQyxLQUFyRTs7QUFDQSxRQUFJSCxhQUFKLEVBQW1CO0FBQ2ZJLFlBQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEIsR0FBNEIsS0FBS0MscUJBQWpDLFNBQTBEUCxhQUExRDtBQUNIO0FBQ0o7O0FBRWtDLE1BQXJCTyxxQkFBcUIsR0FBVztBQUMxQyxXQUFPLEtBQUtDLFlBQUwsQ0FBa0IseUJBQWxCLENBQVA7QUFDSDs7QUE3QjRELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucXVvdGUtcmVxdWVzdC1oaXN0b3J5LXNlbGVjdC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBRdW90ZVJlcXVlc3RIaXN0b3J5U2VsZWN0IGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgc2VsZWN0OiBIVE1MU2VsZWN0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNlbGVjdCA9IDxIVE1MU2VsZWN0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zZWxlY3RgKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFNlbGVjdENoYW5nZUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFNlbGVjdENoYW5nZUV2ZW50KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5zZWxlY3QpIHtcbiAgICAgICAgICAgIHRoaXMuc2VsZWN0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25DaGFuZ2UoKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHNlbGVjdGVkVmFsdWUgPSB0aGlzLnNlbGVjdC5vcHRpb25zW3RoaXMuc2VsZWN0LnNlbGVjdGVkSW5kZXhdLnZhbHVlO1xuICAgICAgICBpZiAoc2VsZWN0ZWRWYWx1ZSkge1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLnNlYXJjaCA9IGAke3RoaXMudmVyc2lvblJlZmVyZW5jZVRpdGxlfT0ke3NlbGVjdGVkVmFsdWV9YDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdmVyc2lvblJlZmVyZW5jZVRpdGxlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndmVyc2lvbi1yZWZlcmVuY2UtdGl0bGUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9