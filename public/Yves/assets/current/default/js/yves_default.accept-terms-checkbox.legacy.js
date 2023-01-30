(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["accept-terms-checkbox"],{

/***/ "./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/accept-terms-checkbox/accept-terms-checkbox.ts":
/*!***************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/checkout-page/src/SprykerShop/Yves/CheckoutPage/Theme/default/components/molecules/accept-terms-checkbox/accept-terms-checkbox.ts ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AcceptTermsCheckbox; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var AcceptTermsCheckbox = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(AcceptTermsCheckbox, _Component);

  function AcceptTermsCheckbox() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.trigger = void 0;
    _this.target = void 0;
    return _this;
  }

  var _proto = AcceptTermsCheckbox.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
    this.target = document.getElementsByClassName(this.targetClassName)[0];
    this.toggleTargetDisabling();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerChangeEvent();
  };

  _proto.mapTriggerChangeEvent = function mapTriggerChangeEvent() {
    var _this2 = this;

    this.trigger.addEventListener('change', function () {
      return _this2.onTriggerChange();
    });
  };

  _proto.onTriggerChange = function onTriggerChange() {
    this.toggleTargetDisabling();
  };

  _proto.toggleTargetDisabling = function toggleTargetDisabling() {
    if (!this.target) {
      return;
    }

    if (!this.trigger.checked) {
      this.target.disabled = true;
      return;
    }

    this.target.disabled = false;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(AcceptTermsCheckbox, [{
    key: "targetClassName",
    get: function get() {
      return this.getAttribute('target-class-name');
    }
  }]);

  return AcceptTermsCheckbox;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NoZWNrb3V0LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ2hlY2tvdXRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWNjZXB0LXRlcm1zLWNoZWNrYm94L2FjY2VwdC10ZXJtcy1jaGVja2JveC50cyJdLCJuYW1lcyI6WyJBY2NlcHRUZXJtc0NoZWNrYm94IiwidHJpZ2dlciIsInRhcmdldCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImRvY3VtZW50IiwidGFyZ2V0Q2xhc3NOYW1lIiwidG9nZ2xlVGFyZ2V0RGlzYWJsaW5nIiwibWFwRXZlbnRzIiwibWFwVHJpZ2dlckNoYW5nZUV2ZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsIm9uVHJpZ2dlckNoYW5nZSIsImNoZWNrZWQiLCJkaXNhYmxlZCIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsbUI7Ozs7Ozs7Ozs7O1VBQ1BDLE87VUFDQUMsTTs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLSCxPQUFMLEdBQWlDLEtBQUtJLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGdCQUF1RCxDQUF2RCxDQUFqQztBQUNBLFNBQUtKLE1BQUwsR0FBaUNLLFFBQVEsQ0FBQ0Ysc0JBQVQsQ0FBZ0MsS0FBS0csZUFBckMsRUFBc0QsQ0FBdEQsQ0FBakM7QUFFQSxTQUFLQyxxQkFBTDtBQUNBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQ3hCLFNBQUtDLHFCQUFMO0FBQ0gsRzs7U0FFU0EscUIsR0FBVixpQ0FBd0M7QUFBQTs7QUFDcEMsU0FBS1YsT0FBTCxDQUFhVyxnQkFBYixDQUE4QixRQUE5QixFQUF3QztBQUFBLGFBQU0sTUFBSSxDQUFDQyxlQUFMLEVBQU47QUFBQSxLQUF4QztBQUNILEc7O1NBRVNBLGUsR0FBViwyQkFBa0M7QUFDOUIsU0FBS0oscUJBQUw7QUFDSCxHOztTQUVTQSxxQixHQUFWLGlDQUF3QztBQUNwQyxRQUFJLENBQUMsS0FBS1AsTUFBVixFQUFrQjtBQUNkO0FBQ0g7O0FBRUQsUUFBSSxDQUFDLEtBQUtELE9BQUwsQ0FBYWEsT0FBbEIsRUFBMkI7QUFDdkIsV0FBS1osTUFBTCxDQUFZYSxRQUFaLEdBQXVCLElBQXZCO0FBRUE7QUFDSDs7QUFFRCxTQUFLYixNQUFMLENBQVlhLFFBQVosR0FBdUIsS0FBdkI7QUFDSCxHOzs7O1NBRUQsZUFBd0M7QUFDcEMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7Ozs7RUExQzRDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5hY2NlcHQtdGVybXMtY2hlY2tib3gubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEFjY2VwdFRlcm1zQ2hlY2tib3ggZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxCdXR0b25FbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RyaWdnZXJgKVswXTtcbiAgICAgICAgdGhpcy50YXJnZXQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRhcmdldENsYXNzTmFtZSlbMF07XG5cbiAgICAgICAgdGhpcy50b2dnbGVUYXJnZXREaXNhYmxpbmcoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJDaGFuZ2VFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBUcmlnZ2VyQ2hhbmdlRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLm9uVHJpZ2dlckNoYW5nZSgpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2hhbmdlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRvZ2dsZVRhcmdldERpc2FibGluZygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVUYXJnZXREaXNhYmxpbmcoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50YXJnZXQpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICghdGhpcy50cmlnZ2VyLmNoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMudGFyZ2V0LmRpc2FibGVkID0gdHJ1ZTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50YXJnZXQuZGlzYWJsZWQgPSBmYWxzZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==