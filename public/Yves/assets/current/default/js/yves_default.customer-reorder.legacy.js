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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var CustomerReorder = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(CustomerReorder, _Component);

  /**
   * Elements enabling/disabling the trigger.
   */

  /**
   * Element enabled/disabled by selections changes.
   */
  function CustomerReorder() {
    var _this;

    _this = _Component.call(this) || this;
    _this.selections = void 0;
    _this.trigger = void 0;
    _this.selections = Array.from(_this.getElementsByClassName(_this.jsName + "__selection"));
    _this.trigger = _this.getElementsByClassName(_this.jsName + "__trigger")[0];
    return _this;
  }

  var _proto = CustomerReorder.prototype;

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
   * Sets or removes the disabled attribute from the trigger element.
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

  return CustomerReorder;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2N1c3RvbWVyLXJlb3JkZXItd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0N1c3RvbWVyUmVvcmRlcldpZGdldC9UaGVtZS9kZWZhdWx0L3ZpZXdzL2N1c3RvbWVyLXJlb3JkZXIvY3VzdG9tZXItcmVvcmRlci50cyJdLCJuYW1lcyI6WyJDdXN0b21lclJlb3JkZXIiLCJzZWxlY3Rpb25zIiwidHJpZ2dlciIsIkFycmF5IiwiZnJvbSIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJyZWFkeUNhbGxiYWNrIiwibWFwRXZlbnRzIiwiZm9yRWFjaCIsInNlbGVjdGlvbiIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uU2VsZWN0aW9uQ2hhbmdlIiwiaXNFbmFibGVkIiwic29tZSIsImNoZWNrZWQiLCJlbmFibGVUcmlnZ2VyIiwicmVtb3ZlQXR0cmlidXRlIiwic2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxlOzs7QUFDakI7QUFDSjtBQUNBOztBQUdJO0FBQ0o7QUFDQTtBQUdJLDZCQUFjO0FBQUE7O0FBQ1Y7QUFEVSxVQVBMQyxVQU9LO0FBQUEsVUFGTEMsT0FFSztBQUVWLFVBQUtELFVBQUwsR0FBc0NFLEtBQUssQ0FBQ0MsSUFBTixDQUFXLE1BQUtDLHNCQUFMLENBQStCLE1BQUtDLE1BQXBDLGlCQUFYLENBQXRDO0FBQ0EsVUFBS0osT0FBTCxHQUE0QixNQUFLRyxzQkFBTCxDQUErQixNQUFLQyxNQUFwQyxnQkFBdUQsQ0FBdkQsQ0FBNUI7QUFIVTtBQUliOzs7O1NBRVNDLGEsR0FBVix5QkFBZ0M7QUFDNUIsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS1AsVUFBTCxDQUFnQlEsT0FBaEIsQ0FBd0IsVUFBQ0MsU0FBRDtBQUFBLGFBQ3BCQSxTQUFTLENBQUNDLGdCQUFWLENBQTJCLFFBQTNCLEVBQXFDLFVBQUNDLEtBQUQ7QUFBQSxlQUFrQixNQUFJLENBQUNDLGlCQUFMLENBQXVCRCxLQUF2QixDQUFsQjtBQUFBLE9BQXJDLENBRG9CO0FBQUEsS0FBeEI7QUFHSCxHOztTQUVTQyxpQixHQUFWLDJCQUE0QkQsS0FBNUIsRUFBZ0Q7QUFDNUMsUUFBTUUsU0FBUyxHQUFHLEtBQUtiLFVBQUwsQ0FBZ0JjLElBQWhCLENBQXFCLFVBQUNMLFNBQUQ7QUFBQSxhQUFpQ0EsU0FBUyxDQUFDTSxPQUEzQztBQUFBLEtBQXJCLENBQWxCO0FBQ0EsU0FBS0MsYUFBTCxDQUFtQkgsU0FBbkI7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7U0FDSUcsYSxHQUFBLHVCQUFjSCxTQUFkLEVBQXdDO0FBQ3BDLFFBQUlBLFNBQUosRUFBZTtBQUNYLFdBQUtaLE9BQUwsQ0FBYWdCLGVBQWIsQ0FBNkIsVUFBN0I7QUFFQTtBQUNIOztBQUVELFNBQUtoQixPQUFMLENBQWFpQixZQUFiLENBQTBCLFVBQTFCLEVBQXNDLFVBQXRDO0FBQ0gsRzs7O0VBNUN3Q0MsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY3VzdG9tZXItcmVvcmRlci5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ3VzdG9tZXJSZW9yZGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBFbGVtZW50cyBlbmFibGluZy9kaXNhYmxpbmcgdGhlIHRyaWdnZXIuXG4gICAgICovXG4gICAgcmVhZG9ubHkgc2VsZWN0aW9uczogSFRNTElucHV0RWxlbWVudFtdO1xuXG4gICAgLyoqXG4gICAgICogRWxlbWVudCBlbmFibGVkL2Rpc2FibGVkIGJ5IHNlbGVjdGlvbnMgY2hhbmdlcy5cbiAgICAgKi9cbiAgICByZWFkb25seSB0cmlnZ2VyOiBIVE1MRWxlbWVudDtcblxuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICBzdXBlcigpO1xuICAgICAgICB0aGlzLnNlbGVjdGlvbnMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2VsZWN0aW9uYCkpO1xuICAgICAgICB0aGlzLnRyaWdnZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fdHJpZ2dlcmApWzBdO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2VsZWN0aW9ucy5mb3JFYWNoKChzZWxlY3Rpb246IEhUTUxJbnB1dEVsZW1lbnQpID0+XG4gICAgICAgICAgICBzZWxlY3Rpb24uYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblNlbGVjdGlvbkNoYW5nZShldmVudCkpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNlbGVjdGlvbkNoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNFbmFibGVkID0gdGhpcy5zZWxlY3Rpb25zLnNvbWUoKHNlbGVjdGlvbjogSFRNTElucHV0RWxlbWVudCkgPT4gc2VsZWN0aW9uLmNoZWNrZWQpO1xuICAgICAgICB0aGlzLmVuYWJsZVRyaWdnZXIoaXNFbmFibGVkKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIG9yIHJlbW92ZXMgdGhlIGRpc2FibGVkIGF0dHJpYnV0ZSBmcm9tIHRoZSB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICogQHBhcmFtIGVuYWJsZSBBIGJvb2xlYW4gdmFsdWUgZm9yIGNoZWNraW5nIGlmIHRoZSB0cmlnZ2VyIGlzIGF2YWlsYWJsZSBmb3IgY2hhbmdpbmcuXG4gICAgICovXG4gICAgZW5hYmxlVHJpZ2dlcihpc0VuYWJsZWQ6IGJvb2xlYW4pOiB2b2lkIHtcbiAgICAgICAgaWYgKGlzRW5hYmxlZCkge1xuICAgICAgICAgICAgdGhpcy50cmlnZ2VyLnJlbW92ZUF0dHJpYnV0ZSgnZGlzYWJsZWQnKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50cmlnZ2VyLnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9