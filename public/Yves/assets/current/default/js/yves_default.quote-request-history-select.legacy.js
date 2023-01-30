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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var QuoteRequestHistorySelect = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(QuoteRequestHistorySelect, _Component);

  function QuoteRequestHistorySelect() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.select = void 0;
    return _this;
  }

  var _proto = QuoteRequestHistorySelect.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.select = this.getElementsByClassName(this.jsName + "__select")[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapSelectChangeEvent();
  };

  _proto.mapSelectChangeEvent = function mapSelectChangeEvent() {
    var _this2 = this;

    if (this.select) {
      this.select.addEventListener('change', function () {
        return _this2.onChange();
      });
    }
  };

  _proto.onChange = function onChange() {
    var selectedValue = this.select.options[this.select.selectedIndex].value;

    if (selectedValue) {
      window.location.search = this.versionReferenceTitle + "=" + selectedValue;
    }
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(QuoteRequestHistorySelect, [{
    key: "versionReferenceTitle",
    get: function get() {
      return this.getAttribute('version-reference-title');
    }
  }]);

  return QuoteRequestHistorySelect;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3F1b3RlLXJlcXVlc3QtcGFnZS9zcmMvU3ByeWtlclNob3AvWXZlcy9RdW90ZVJlcXVlc3RQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcXVvdGUtcmVxdWVzdC1oaXN0b3J5LXNlbGVjdC9xdW90ZS1yZXF1ZXN0LWhpc3Rvcnktc2VsZWN0LnRzIl0sIm5hbWVzIjpbIlF1b3RlUmVxdWVzdEhpc3RvcnlTZWxlY3QiLCJzZWxlY3QiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJtYXBTZWxlY3RDaGFuZ2VFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNoYW5nZSIsInNlbGVjdGVkVmFsdWUiLCJvcHRpb25zIiwic2VsZWN0ZWRJbmRleCIsInZhbHVlIiwid2luZG93IiwibG9jYXRpb24iLCJzZWFyY2giLCJ2ZXJzaW9uUmVmZXJlbmNlVGl0bGUiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLHlCOzs7Ozs7Ozs7OztVQUNQQyxNOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtGLE1BQUwsR0FBaUMsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZUFBc0QsQ0FBdEQsQ0FBakM7QUFDQSxTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUN4QixTQUFLQyxvQkFBTDtBQUNILEc7O1NBRVNBLG9CLEdBQVYsZ0NBQXVDO0FBQUE7O0FBQ25DLFFBQUksS0FBS04sTUFBVCxFQUFpQjtBQUNiLFdBQUtBLE1BQUwsQ0FBWU8sZ0JBQVosQ0FBNkIsUUFBN0IsRUFBdUM7QUFBQSxlQUFNLE1BQUksQ0FBQ0MsUUFBTCxFQUFOO0FBQUEsT0FBdkM7QUFDSDtBQUNKLEc7O1NBRVNBLFEsR0FBVixvQkFBMkI7QUFDdkIsUUFBTUMsYUFBYSxHQUFHLEtBQUtULE1BQUwsQ0FBWVUsT0FBWixDQUFvQixLQUFLVixNQUFMLENBQVlXLGFBQWhDLEVBQStDQyxLQUFyRTs7QUFDQSxRQUFJSCxhQUFKLEVBQW1CO0FBQ2ZJLFlBQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEIsR0FBNEIsS0FBS0MscUJBQWpDLFNBQTBEUCxhQUExRDtBQUNIO0FBQ0osRzs7OztTQUVELGVBQThDO0FBQzFDLGFBQU8sS0FBS1EsWUFBTCxDQUFrQix5QkFBbEIsQ0FBUDtBQUNIOzs7O0VBN0JrREMsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucXVvdGUtcmVxdWVzdC1oaXN0b3J5LXNlbGVjdC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUXVvdGVSZXF1ZXN0SGlzdG9yeVNlbGVjdCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHNlbGVjdDogSFRNTFNlbGVjdEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZWxlY3QgPSA8SFRNTFNlbGVjdEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2VsZWN0YClbMF07XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBTZWxlY3RDaGFuZ2VFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBTZWxlY3RDaGFuZ2VFdmVudCgpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuc2VsZWN0KSB7XG4gICAgICAgICAgICB0aGlzLnNlbGVjdC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLm9uQ2hhbmdlKCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2hhbmdlKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzZWxlY3RlZFZhbHVlID0gdGhpcy5zZWxlY3Qub3B0aW9uc1t0aGlzLnNlbGVjdC5zZWxlY3RlZEluZGV4XS52YWx1ZTtcbiAgICAgICAgaWYgKHNlbGVjdGVkVmFsdWUpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5zZWFyY2ggPSBgJHt0aGlzLnZlcnNpb25SZWZlcmVuY2VUaXRsZX09JHtzZWxlY3RlZFZhbHVlfWA7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHZlcnNpb25SZWZlcmVuY2VUaXRsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3ZlcnNpb24tcmVmZXJlbmNlLXRpdGxlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==