(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggle-select-form"],{

/***/ "./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/toggle-select-form/toggle-select-form.ts":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/toggle-select-form/toggle-select-form.ts ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ToggleSelectForm; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class ToggleSelectForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.trigger = void 0;
    this.targets = void 0;
  }

  readyCallback() {}

  init() {
    this.trigger = this.querySelector('[data-select-trigger]');
    this.targets = Array.from(document.getElementsByClassName(this.target));
    this.toggle();
    this.mapEvents();
  }

  mapEvents() {
    this.trigger.addEventListener('change', event => this.onTriggerClick(event));
  }

  onTriggerClick(event) {
    event.preventDefault();
    this.toggle();
  }

  toggle(isForced) {
    if (isForced === void 0) {
      isForced = this.isSelected;
    }

    this.targets.forEach(element => element.classList.toggle(this.classToToggle, isForced));
  }

  get isSelected() {
    return this.trigger.value !== '';
  }

  get target() {
    return this.trigger.getAttribute('target');
  }

  get classToToggle() {
    return this.trigger.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3BwaW5nLWxpc3Qtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BwaW5nTGlzdFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3RvZ2dsZS1zZWxlY3QtZm9ybS90b2dnbGUtc2VsZWN0LWZvcm0udHMiXSwibmFtZXMiOlsiVG9nZ2xlU2VsZWN0Rm9ybSIsIkNvbXBvbmVudCIsInRyaWdnZXIiLCJ0YXJnZXRzIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJxdWVyeVNlbGVjdG9yIiwiQXJyYXkiLCJmcm9tIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwidGFyZ2V0IiwidG9nZ2xlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2xpY2siLCJwcmV2ZW50RGVmYXVsdCIsImlzRm9yY2VkIiwiaXNTZWxlY3RlZCIsImZvckVhY2giLCJlbGVtZW50IiwiY2xhc3NMaXN0IiwiY2xhc3NUb1RvZ2dsZSIsInZhbHVlIiwiZ2V0QXR0cmlidXRlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSxnQkFBTixTQUErQkMsK0RBQS9CLENBQXlDO0FBQUE7QUFBQTtBQUFBLFNBQzFDQyxPQUQwQztBQUFBLFNBRTFDQyxPQUYwQztBQUFBOztBQUkxQ0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0gsT0FBTCxHQUFrQyxLQUFLSSxhQUFMLENBQW1CLHVCQUFuQixDQUFsQztBQUNBLFNBQUtILE9BQUwsR0FBOEJJLEtBQUssQ0FBQ0MsSUFBTixDQUFXQyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLE1BQXJDLENBQVgsQ0FBOUI7QUFDQSxTQUFLQyxNQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS1gsT0FBTCxDQUFhWSxnQkFBYixDQUE4QixRQUE5QixFQUF5Q0MsS0FBRCxJQUFrQixLQUFLQyxjQUFMLENBQW9CRCxLQUFwQixDQUExRDtBQUNIOztBQUVTQyxnQkFBYyxDQUFDRCxLQUFELEVBQXFCO0FBQ3pDQSxTQUFLLENBQUNFLGNBQU47QUFDQSxTQUFLTCxNQUFMO0FBQ0g7O0FBRVNBLFFBQU0sQ0FBQ00sUUFBRCxFQUE0QztBQUFBLFFBQTNDQSxRQUEyQztBQUEzQ0EsY0FBMkMsR0FBdkIsS0FBS0MsVUFBa0I7QUFBQTs7QUFDeEQsU0FBS2hCLE9BQUwsQ0FBYWlCLE9BQWIsQ0FBc0JDLE9BQUQsSUFBMEJBLE9BQU8sQ0FBQ0MsU0FBUixDQUFrQlYsTUFBbEIsQ0FBeUIsS0FBS1csYUFBOUIsRUFBNkNMLFFBQTdDLENBQS9DO0FBQ0g7O0FBRXVCLE1BQVZDLFVBQVUsR0FBWTtBQUNoQyxXQUFPLEtBQUtqQixPQUFMLENBQWFzQixLQUFiLEtBQXVCLEVBQTlCO0FBQ0g7O0FBRW1CLE1BQU5iLE1BQU0sR0FBVztBQUMzQixXQUFPLEtBQUtULE9BQUwsQ0FBYXVCLFlBQWIsQ0FBMEIsUUFBMUIsQ0FBUDtBQUNIOztBQUUwQixNQUFiRixhQUFhLEdBQVc7QUFDbEMsV0FBTyxLQUFLckIsT0FBTCxDQUFhdUIsWUFBYixDQUEwQixpQkFBMUIsQ0FBUDtBQUNIOztBQXBDbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC50b2dnbGUtc2VsZWN0LWZvcm0uanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgVG9nZ2xlU2VsZWN0Rm9ybSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxTZWxlY3RFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXRzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MU2VsZWN0RWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLXNlbGVjdC10cmlnZ2VyXScpO1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXQpKTtcbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlKGlzRm9yY2VkOiBib29sZWFuID0gdGhpcy5pc1NlbGVjdGVkKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4gZWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuY2xhc3NUb1RvZ2dsZSwgaXNGb3JjZWQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzU2VsZWN0ZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIudmFsdWUgIT09ICcnO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0KCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIuZ2V0QXR0cmlidXRlKCd0YXJnZXQnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlci5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=