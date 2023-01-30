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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class AcceptTermsCheckbox extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.trigger = void 0;
    this.target = void 0;
  }

  readyCallback() {}

  init() {
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
    this.target = document.getElementsByClassName(this.targetClassName)[0];
    this.toggleTargetDisabling();
    this.mapEvents();
  }

  mapEvents() {
    this.mapTriggerChangeEvent();
  }

  mapTriggerChangeEvent() {
    this.trigger.addEventListener('change', () => this.onTriggerChange());
  }

  onTriggerChange() {
    this.toggleTargetDisabling();
  }

  toggleTargetDisabling() {
    if (!this.target) {
      return;
    }

    if (!this.trigger.checked) {
      this.target.disabled = true;
      return;
    }

    this.target.disabled = false;
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NoZWNrb3V0LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvQ2hlY2tvdXRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWNjZXB0LXRlcm1zLWNoZWNrYm94L2FjY2VwdC10ZXJtcy1jaGVja2JveC50cyJdLCJuYW1lcyI6WyJBY2NlcHRUZXJtc0NoZWNrYm94IiwiQ29tcG9uZW50IiwidHJpZ2dlciIsInRhcmdldCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImRvY3VtZW50IiwidGFyZ2V0Q2xhc3NOYW1lIiwidG9nZ2xlVGFyZ2V0RGlzYWJsaW5nIiwibWFwRXZlbnRzIiwibWFwVHJpZ2dlckNoYW5nZUV2ZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsIm9uVHJpZ2dlckNoYW5nZSIsImNoZWNrZWQiLCJkaXNhYmxlZCIsImdldEF0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsbUJBQU4sU0FBa0NDLCtEQUFsQyxDQUE0QztBQUFBO0FBQUE7QUFBQSxTQUM3Q0MsT0FENkM7QUFBQSxTQUU3Q0MsTUFGNkM7QUFBQTs7QUFJN0NDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtILE9BQUwsR0FBaUMsS0FBS0ksc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZ0JBQXVELENBQXZELENBQWpDO0FBQ0EsU0FBS0osTUFBTCxHQUFpQ0ssUUFBUSxDQUFDRixzQkFBVCxDQUFnQyxLQUFLRyxlQUFyQyxFQUFzRCxDQUF0RCxDQUFqQztBQUVBLFNBQUtDLHFCQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MscUJBQUw7QUFDSDs7QUFFU0EsdUJBQXFCLEdBQVM7QUFDcEMsU0FBS1YsT0FBTCxDQUFhVyxnQkFBYixDQUE4QixRQUE5QixFQUF3QyxNQUFNLEtBQUtDLGVBQUwsRUFBOUM7QUFDSDs7QUFFU0EsaUJBQWUsR0FBUztBQUM5QixTQUFLSixxQkFBTDtBQUNIOztBQUVTQSx1QkFBcUIsR0FBUztBQUNwQyxRQUFJLENBQUMsS0FBS1AsTUFBVixFQUFrQjtBQUNkO0FBQ0g7O0FBRUQsUUFBSSxDQUFDLEtBQUtELE9BQUwsQ0FBYWEsT0FBbEIsRUFBMkI7QUFDdkIsV0FBS1osTUFBTCxDQUFZYSxRQUFaLEdBQXVCLElBQXZCO0FBRUE7QUFDSDs7QUFFRCxTQUFLYixNQUFMLENBQVlhLFFBQVosR0FBdUIsS0FBdkI7QUFDSDs7QUFFNEIsTUFBZlAsZUFBZSxHQUFXO0FBQ3BDLFdBQU8sS0FBS1EsWUFBTCxDQUFrQixtQkFBbEIsQ0FBUDtBQUNIOztBQTFDc0QsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5hY2NlcHQtdGVybXMtY2hlY2tib3guanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQWNjZXB0VGVybXNDaGVja2JveCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRhcmdldDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fdHJpZ2dlcmApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MQnV0dG9uRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVswXTtcblxuICAgICAgICB0aGlzLnRvZ2dsZVRhcmdldERpc2FibGluZygpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwVHJpZ2dlckNoYW5nZUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJDaGFuZ2VFdmVudCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25UcmlnZ2VyQ2hhbmdlKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudG9nZ2xlVGFyZ2V0RGlzYWJsaW5nKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRvZ2dsZVRhcmdldERpc2FibGluZygpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnRhcmdldCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKCF0aGlzLnRyaWdnZXIuY2hlY2tlZCkge1xuICAgICAgICAgICAgdGhpcy50YXJnZXQuZGlzYWJsZWQgPSB0cnVlO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRhcmdldC5kaXNhYmxlZCA9IGZhbHNlO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9