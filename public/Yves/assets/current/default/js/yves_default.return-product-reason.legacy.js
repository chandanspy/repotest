(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["return-product-reason"],{

/***/ "./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/return-product-reason/return-product-reason.ts":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/return-product-reason/return-product-reason.ts ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ReturnProductReason; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var ReturnProductReason = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ReturnProductReason, _Component);

  function ReturnProductReason() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.select = void 0;
    _this.target = void 0;
    return _this;
  }

  var _proto = ReturnProductReason.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.select = this.getElementsByClassName(this.jsName + "__select")[0];
    this.target = this.getElementsByClassName(this.jsName + "__target")[0];
    this.toggleTargetClass();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapSelectChange();
  };

  _proto.mapSelectChange = function mapSelectChange() {
    var _this2 = this;

    this.select.addEventListener('change', function () {
      return _this2.onSelectChange();
    });
  };

  _proto.onSelectChange = function onSelectChange() {
    this.toggleTargetClass();
  };

  _proto.toggleTargetClass = function toggleTargetClass() {
    var isToggleValueSelected = this.toggleValue === this.select.value;
    this.target.classList.toggle(this.classToToggle, !isToggleValueSelected);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ReturnProductReason, [{
    key: "toggleValue",
    get: function get() {
      return this.getAttribute('toggle-value');
    }
  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }]);

  return ReturnProductReason;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3NhbGVzLXJldHVybi1wYWdlL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1NhbGVzUmV0dXJuUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JldHVybi1wcm9kdWN0LXJlYXNvbi9yZXR1cm4tcHJvZHVjdC1yZWFzb24udHMiXSwibmFtZXMiOlsiUmV0dXJuUHJvZHVjdFJlYXNvbiIsInNlbGVjdCIsInRhcmdldCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInRvZ2dsZVRhcmdldENsYXNzIiwibWFwRXZlbnRzIiwibWFwU2VsZWN0Q2hhbmdlIiwiYWRkRXZlbnRMaXN0ZW5lciIsIm9uU2VsZWN0Q2hhbmdlIiwiaXNUb2dnbGVWYWx1ZVNlbGVjdGVkIiwidG9nZ2xlVmFsdWUiLCJ2YWx1ZSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImNsYXNzVG9Ub2dnbGUiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLG1COzs7Ozs7Ozs7OztVQUNQQyxNO1VBQ0FDLE07Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0gsTUFBTCxHQUFpQyxLQUFLSSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxlQUFzRCxDQUF0RCxDQUFqQztBQUNBLFNBQUtKLE1BQUwsR0FBMkIsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZUFBc0QsQ0FBdEQsQ0FBM0I7QUFFQSxTQUFLQyxpQkFBTDtBQUNBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQ3hCLFNBQUtDLGVBQUw7QUFDSCxHOztTQUVTQSxlLEdBQVYsMkJBQWtDO0FBQUE7O0FBQzlCLFNBQUtSLE1BQUwsQ0FBWVMsZ0JBQVosQ0FBNkIsUUFBN0IsRUFBdUM7QUFBQSxhQUFNLE1BQUksQ0FBQ0MsY0FBTCxFQUFOO0FBQUEsS0FBdkM7QUFDSCxHOztTQUVTQSxjLEdBQVYsMEJBQWlDO0FBQzdCLFNBQUtKLGlCQUFMO0FBQ0gsRzs7U0FFU0EsaUIsR0FBViw2QkFBb0M7QUFDaEMsUUFBTUsscUJBQXFCLEdBQUcsS0FBS0MsV0FBTCxLQUFxQixLQUFLWixNQUFMLENBQVlhLEtBQS9EO0FBQ0EsU0FBS1osTUFBTCxDQUFZYSxTQUFaLENBQXNCQyxNQUF0QixDQUE2QixLQUFLQyxhQUFsQyxFQUFpRCxDQUFDTCxxQkFBbEQ7QUFDSCxHOzs7O1NBRUQsZUFBb0M7QUFDaEMsYUFBTyxLQUFLTSxZQUFMLENBQWtCLGNBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBc0M7QUFDbEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7Ozs7RUFyQzRDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5yZXR1cm4tcHJvZHVjdC1yZWFzb24ubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFJldHVyblByb2R1Y3RSZWFzb24gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBzZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2VsZWN0ID0gPEhUTUxTZWxlY3RFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NlbGVjdGApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190YXJnZXRgKVswXTtcblxuICAgICAgICB0aGlzLnRvZ2dsZVRhcmdldENsYXNzKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBTZWxlY3RDaGFuZ2UoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwU2VsZWN0Q2hhbmdlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNlbGVjdC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLm9uU2VsZWN0Q2hhbmdlKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNlbGVjdENoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50b2dnbGVUYXJnZXRDbGFzcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVUYXJnZXRDbGFzcygpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNUb2dnbGVWYWx1ZVNlbGVjdGVkID0gdGhpcy50b2dnbGVWYWx1ZSA9PT0gdGhpcy5zZWxlY3QudmFsdWU7XG4gICAgICAgIHRoaXMudGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCAhaXNUb2dnbGVWYWx1ZVNlbGVjdGVkKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRvZ2dsZVZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndG9nZ2xlLXZhbHVlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==