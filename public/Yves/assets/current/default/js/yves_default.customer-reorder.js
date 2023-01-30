(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["customer-reorder"],{

/***/ "./vendor/spryker-shop/customer-reorder-widget/src/SprykerShop/Yves/CustomerReorderWidget/Theme/default/views/customer-reorder/customer-reorder.ts":
/*!*********************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/customer-reorder-widget/src/SprykerShop/Yves/CustomerReorderWidget/Theme/default/views/customer-reorder/customer-reorder.ts ***!
  \*********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CustomerReorder; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CustomerReorder extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  /**
   * Elements enabling/disabling the trigger.
   */

  /**
   * Element enabled/disabled by selections changes.
   */
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
   * Sets or removes the disabled attribute from the trigger element.
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXJlb3JkZXItd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0N1c3RvbWVyUmVvcmRlcldpZGdldC9UaGVtZS9kZWZhdWx0L3ZpZXdzL2N1c3RvbWVyLXJlb3JkZXIvY3VzdG9tZXItcmVvcmRlci50cyJdLCJuYW1lcyI6WyJDdXN0b21lclJlb3JkZXIiLCJDb21wb25lbnQiLCJjb25zdHJ1Y3RvciIsInNlbGVjdGlvbnMiLCJ0cmlnZ2VyIiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInJlYWR5Q2FsbGJhY2siLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwic2VsZWN0aW9uIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25TZWxlY3Rpb25DaGFuZ2UiLCJpc0VuYWJsZWQiLCJzb21lIiwiY2hlY2tlZCIsImVuYWJsZVRyaWdnZXIiLCJyZW1vdmVBdHRyaWJ1dGUiLCJzZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGVBQU4sU0FBOEJDLCtEQUE5QixDQUF3QztBQUNuRDtBQUNKO0FBQ0E7O0FBR0k7QUFDSjtBQUNBO0FBR0lDLGFBQVcsR0FBRztBQUNWO0FBRFUsU0FQTEMsVUFPSztBQUFBLFNBRkxDLE9BRUs7QUFFVixTQUFLRCxVQUFMLEdBQXNDRSxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLQyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxpQkFBWCxDQUF0QztBQUNBLFNBQUtKLE9BQUwsR0FBNEIsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZ0JBQXVELENBQXZELENBQTVCO0FBQ0g7O0FBRVNDLGVBQWEsR0FBUztBQUM1QixTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixTQUFLUCxVQUFMLENBQWdCUSxPQUFoQixDQUF5QkMsU0FBRCxJQUNwQkEsU0FBUyxDQUFDQyxnQkFBVixDQUEyQixRQUEzQixFQUFzQ0MsS0FBRCxJQUFrQixLQUFLQyxpQkFBTCxDQUF1QkQsS0FBdkIsQ0FBdkQsQ0FESjtBQUdIOztBQUVTQyxtQkFBaUIsQ0FBQ0QsS0FBRCxFQUFxQjtBQUM1QyxRQUFNRSxTQUFTLEdBQUcsS0FBS2IsVUFBTCxDQUFnQmMsSUFBaEIsQ0FBc0JMLFNBQUQsSUFBaUNBLFNBQVMsQ0FBQ00sT0FBaEUsQ0FBbEI7QUFDQSxTQUFLQyxhQUFMLENBQW1CSCxTQUFuQjtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNJRyxlQUFhLENBQUNILFNBQUQsRUFBMkI7QUFDcEMsUUFBSUEsU0FBSixFQUFlO0FBQ1gsV0FBS1osT0FBTCxDQUFhZ0IsZUFBYixDQUE2QixVQUE3QjtBQUVBO0FBQ0g7O0FBRUQsU0FBS2hCLE9BQUwsQ0FBYWlCLFlBQWIsQ0FBMEIsVUFBMUIsRUFBc0MsVUFBdEM7QUFDSDs7QUE1Q2tELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY3VzdG9tZXItcmVvcmRlci5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDdXN0b21lclJlb3JkZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIGVuYWJsaW5nL2Rpc2FibGluZyB0aGUgdHJpZ2dlci5cbiAgICAgKi9cbiAgICByZWFkb25seSBzZWxlY3Rpb25zOiBIVE1MSW5wdXRFbGVtZW50W107XG5cbiAgICAvKipcbiAgICAgKiBFbGVtZW50IGVuYWJsZWQvZGlzYWJsZWQgYnkgc2VsZWN0aW9ucyBjaGFuZ2VzLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IHRyaWdnZXI6IEhUTUxFbGVtZW50O1xuXG4gICAgY29uc3RydWN0b3IoKSB7XG4gICAgICAgIHN1cGVyKCk7XG4gICAgICAgIHRoaXMuc2VsZWN0aW9ucyA9IDxIVE1MSW5wdXRFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zZWxlY3Rpb25gKSk7XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190cmlnZ2VyYClbMF07XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZWxlY3Rpb25zLmZvckVhY2goKHNlbGVjdGlvbjogSFRNTElucHV0RWxlbWVudCkgPT5cbiAgICAgICAgICAgIHNlbGVjdGlvbi5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uU2VsZWN0aW9uQ2hhbmdlKGV2ZW50KSksXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uU2VsZWN0aW9uQ2hhbmdlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBpc0VuYWJsZWQgPSB0aGlzLnNlbGVjdGlvbnMuc29tZSgoc2VsZWN0aW9uOiBIVE1MSW5wdXRFbGVtZW50KSA9PiBzZWxlY3Rpb24uY2hlY2tlZCk7XG4gICAgICAgIHRoaXMuZW5hYmxlVHJpZ2dlcihpc0VuYWJsZWQpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgb3IgcmVtb3ZlcyB0aGUgZGlzYWJsZWQgYXR0cmlidXRlIGZyb20gdGhlIHRyaWdnZXIgZWxlbWVudC5cbiAgICAgKiBAcGFyYW0gZW5hYmxlIEEgYm9vbGVhbiB2YWx1ZSBmb3IgY2hlY2tpbmcgaWYgdGhlIHRyaWdnZXIgaXMgYXZhaWxhYmxlIGZvciBjaGFuZ2luZy5cbiAgICAgKi9cbiAgICBlbmFibGVUcmlnZ2VyKGlzRW5hYmxlZDogYm9vbGVhbik6IHZvaWQge1xuICAgICAgICBpZiAoaXNFbmFibGVkKSB7XG4gICAgICAgICAgICB0aGlzLnRyaWdnZXIucmVtb3ZlQXR0cmlidXRlKCdkaXNhYmxlZCcpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXIuc2V0QXR0cmlidXRlKCdkaXNhYmxlZCcsICdkaXNhYmxlZCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=