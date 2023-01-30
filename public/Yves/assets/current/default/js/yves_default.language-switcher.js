(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["language-switcher"],{

/***/ "./src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.ts":
/*!***********************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.ts ***!
  \***********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LanguageSwitcher; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class LanguageSwitcher extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.selectList = void 0;
  }

  readyCallback() {}

  init() {
    this.selectList = Array.from(document.getElementsByClassName("" + this.jsName));
    this.mapEvents();
  }

  mapEvents() {
    this.selectList.forEach(select => {
      select.addEventListener('change', event => this.onTriggerChange(event));
    });
  }

  onTriggerChange(event) {
    var selectTarget = event.currentTarget;

    if (this.hasUrl(selectTarget)) {
      window.location.assign(this.currentSelectValue(selectTarget));
    }
  }

  currentSelectValue(select) {
    return select.options[select.selectedIndex].value;
  }

  hasUrl(select) {
    return !!select.value;
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvTGFuZ3VhZ2VTd2l0Y2hlcldpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2xhbmd1YWdlLXN3aXRjaGVyL2xhbmd1YWdlLXN3aXRjaGVyLnRzIl0sIm5hbWVzIjpbIkxhbmd1YWdlU3dpdGNoZXIiLCJDb21wb25lbnQiLCJzZWxlY3RMaXN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwic2VsZWN0IiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2hhbmdlIiwic2VsZWN0VGFyZ2V0IiwiY3VycmVudFRhcmdldCIsImhhc1VybCIsIndpbmRvdyIsImxvY2F0aW9uIiwiYXNzaWduIiwiY3VycmVudFNlbGVjdFZhbHVlIiwib3B0aW9ucyIsInNlbGVjdGVkSW5kZXgiLCJ2YWx1ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsZ0JBQU4sU0FBK0JDLCtEQUEvQixDQUF5QztBQUFBO0FBQUE7QUFBQSxTQUMxQ0MsVUFEMEM7QUFBQTs7QUFHMUNDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtGLFVBQUwsR0FBdUNHLEtBQUssQ0FBQ0MsSUFBTixDQUFXQyxRQUFRLENBQUNDLHNCQUFULE1BQW1DLEtBQUtDLE1BQXhDLENBQVgsQ0FBdkM7QUFFQSxTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixTQUFLUixVQUFMLENBQWdCUyxPQUFoQixDQUF5QkMsTUFBRCxJQUErQjtBQUNuREEsWUFBTSxDQUFDQyxnQkFBUCxDQUF3QixRQUF4QixFQUFtQ0MsS0FBRCxJQUFrQixLQUFLQyxlQUFMLENBQXFCRCxLQUFyQixDQUFwRDtBQUNILEtBRkQ7QUFHSDs7QUFFU0MsaUJBQWUsQ0FBQ0QsS0FBRCxFQUFxQjtBQUMxQyxRQUFNRSxZQUFZLEdBQXNCRixLQUFLLENBQUNHLGFBQTlDOztBQUVBLFFBQUksS0FBS0MsTUFBTCxDQUFZRixZQUFaLENBQUosRUFBK0I7QUFDM0JHLFlBQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEIsQ0FBdUIsS0FBS0Msa0JBQUwsQ0FBd0JOLFlBQXhCLENBQXZCO0FBQ0g7QUFDSjs7QUFFU00sb0JBQWtCLENBQUNWLE1BQUQsRUFBb0M7QUFDNUQsV0FBT0EsTUFBTSxDQUFDVyxPQUFQLENBQWVYLE1BQU0sQ0FBQ1ksYUFBdEIsRUFBcUNDLEtBQTVDO0FBQ0g7O0FBRVNQLFFBQU0sQ0FBQ04sTUFBRCxFQUFxQztBQUNqRCxXQUFPLENBQUMsQ0FBQ0EsTUFBTSxDQUFDYSxLQUFoQjtBQUNIOztBQS9CbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5sYW5ndWFnZS1zd2l0Y2hlci5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBMYW5ndWFnZVN3aXRjaGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgc2VsZWN0TGlzdDogSFRNTFNlbGVjdEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNlbGVjdExpc3QgPSA8SFRNTFNlbGVjdEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9YCkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZWxlY3RMaXN0LmZvckVhY2goKHNlbGVjdDogSFRNTFNlbGVjdEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHNlbGVjdC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uVHJpZ2dlckNoYW5nZShldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2hhbmdlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzZWxlY3RUYXJnZXQgPSA8SFRNTFNlbGVjdEVsZW1lbnQ+ZXZlbnQuY3VycmVudFRhcmdldDtcblxuICAgICAgICBpZiAodGhpcy5oYXNVcmwoc2VsZWN0VGFyZ2V0KSkge1xuICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmFzc2lnbih0aGlzLmN1cnJlbnRTZWxlY3RWYWx1ZShzZWxlY3RUYXJnZXQpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBjdXJyZW50U2VsZWN0VmFsdWUoc2VsZWN0OiBIVE1MU2VsZWN0RWxlbWVudCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiBzZWxlY3Qub3B0aW9uc1tzZWxlY3Quc2VsZWN0ZWRJbmRleF0udmFsdWU7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhhc1VybChzZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50KTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiAhIXNlbGVjdC52YWx1ZTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9