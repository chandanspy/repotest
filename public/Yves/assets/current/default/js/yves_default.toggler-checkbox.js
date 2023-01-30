(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-checkbox"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-checkbox/toggler-checkbox.ts":
/*!*****************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-checkbox/toggler-checkbox.ts ***!
  \*****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerCheckbox; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class TogglerCheckbox extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.trigger = void 0;
    this.targets = void 0;
    this.event = void 0;
  }

  readyCallback() {}

  init() {
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
    this.targets = Array.from(document.getElementsByClassName(this.targetClassName));
    this.toggle();
    this.fireToggleEvent();
    this.mapEvents();
  }

  mapEvents() {
    this.trigger.addEventListener('change', event => this.onTriggerClick(event));
  }

  onTriggerClick(event) {
    event.preventDefault();
    this.toggle();
    this.fireToggleEvent();
  }

  toggle(addClass) {
    if (addClass === void 0) {
      addClass = this.addClass;
    }

    this.targets.forEach(element => element.classList.toggle(this.classToToggle, addClass));
  }

  fireToggleEvent() {
    this.event = new CustomEvent('toggle');
    this.dispatchEvent(this.event);
  }

  get addClass() {
    return this.addClassWhenChecked ? this.trigger.checked : !this.trigger.checked;
  }

  get targetClassName() {
    return this.trigger.getAttribute('target-class-name');
  }

  get classToToggle() {
    return this.trigger.getAttribute('class-to-toggle');
  }

  get addClassWhenChecked() {
    return this.trigger.hasAttribute('add-class-when-checked');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1jaGVja2JveC90b2dnbGVyLWNoZWNrYm94LnRzIl0sIm5hbWVzIjpbIlRvZ2dsZXJDaGVja2JveCIsIkNvbXBvbmVudCIsInRyaWdnZXIiLCJ0YXJnZXRzIiwiZXZlbnQiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsInRhcmdldENsYXNzTmFtZSIsInRvZ2dsZSIsImZpcmVUb2dnbGVFdmVudCIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJvblRyaWdnZXJDbGljayIsInByZXZlbnREZWZhdWx0IiwiYWRkQ2xhc3MiLCJmb3JFYWNoIiwiZWxlbWVudCIsImNsYXNzTGlzdCIsImNsYXNzVG9Ub2dnbGUiLCJDdXN0b21FdmVudCIsImRpc3BhdGNoRXZlbnQiLCJhZGRDbGFzc1doZW5DaGVja2VkIiwiY2hlY2tlZCIsImdldEF0dHJpYnV0ZSIsImhhc0F0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsZUFBTixTQUE4QkMsK0RBQTlCLENBQXdDO0FBQUE7QUFBQTtBQUFBLFNBQ3pDQyxPQUR5QztBQUFBLFNBRXpDQyxPQUZ5QztBQUFBLFNBR3pDQyxLQUh5QztBQUFBOztBQUt6Q0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0osT0FBTCxHQUFpQyxLQUFLSyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxnQkFBdUQsQ0FBdkQsQ0FBakM7QUFDQSxTQUFLTCxPQUFMLEdBQThCTSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDSixzQkFBVCxDQUFnQyxLQUFLSyxlQUFyQyxDQUFYLENBQTlCO0FBRUEsU0FBS0MsTUFBTDtBQUNBLFNBQUtDLGVBQUw7QUFDQSxTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixTQUFLYixPQUFMLENBQWFjLGdCQUFiLENBQThCLFFBQTlCLEVBQXlDWixLQUFELElBQWtCLEtBQUthLGNBQUwsQ0FBb0JiLEtBQXBCLENBQTFEO0FBQ0g7O0FBRVNhLGdCQUFjLENBQUNiLEtBQUQsRUFBcUI7QUFDekNBLFNBQUssQ0FBQ2MsY0FBTjtBQUNBLFNBQUtMLE1BQUw7QUFDQSxTQUFLQyxlQUFMO0FBQ0g7O0FBRURELFFBQU0sQ0FBQ00sUUFBRCxFQUEwQztBQUFBLFFBQXpDQSxRQUF5QztBQUF6Q0EsY0FBeUMsR0FBckIsS0FBS0EsUUFBZ0I7QUFBQTs7QUFDNUMsU0FBS2hCLE9BQUwsQ0FBYWlCLE9BQWIsQ0FBc0JDLE9BQUQsSUFBMEJBLE9BQU8sQ0FBQ0MsU0FBUixDQUFrQlQsTUFBbEIsQ0FBeUIsS0FBS1UsYUFBOUIsRUFBNkNKLFFBQTdDLENBQS9DO0FBQ0g7O0FBRURMLGlCQUFlLEdBQVM7QUFDcEIsU0FBS1YsS0FBTCxHQUFhLElBQUlvQixXQUFKLENBQWdCLFFBQWhCLENBQWI7QUFDQSxTQUFLQyxhQUFMLENBQW1CLEtBQUtyQixLQUF4QjtBQUNIOztBQUVxQixNQUFSZSxRQUFRLEdBQVk7QUFDOUIsV0FBTyxLQUFLTyxtQkFBTCxHQUEyQixLQUFLeEIsT0FBTCxDQUFheUIsT0FBeEMsR0FBa0QsQ0FBQyxLQUFLekIsT0FBTCxDQUFheUIsT0FBdkU7QUFDSDs7QUFFNEIsTUFBZmYsZUFBZSxHQUFXO0FBQ3BDLFdBQU8sS0FBS1YsT0FBTCxDQUFhMEIsWUFBYixDQUEwQixtQkFBMUIsQ0FBUDtBQUNIOztBQUUwQixNQUFiTCxhQUFhLEdBQVc7QUFDbEMsV0FBTyxLQUFLckIsT0FBTCxDQUFhMEIsWUFBYixDQUEwQixpQkFBMUIsQ0FBUDtBQUNIOztBQUVnQyxNQUFuQkYsbUJBQW1CLEdBQVk7QUFDekMsV0FBTyxLQUFLeEIsT0FBTCxDQUFhMkIsWUFBYixDQUEwQix3QkFBMUIsQ0FBUDtBQUNIOztBQWpEa0QsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC50b2dnbGVyLWNoZWNrYm94LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFRvZ2dsZXJDaGVja2JveCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRhcmdldHM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIGV2ZW50OiBDdXN0b21FdmVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXIgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190cmlnZ2VyYClbMF07XG4gICAgICAgIHRoaXMudGFyZ2V0cyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRhcmdldENsYXNzTmFtZSkpO1xuXG4gICAgICAgIHRoaXMudG9nZ2xlKCk7XG4gICAgICAgIHRoaXMuZmlyZVRvZ2dsZUV2ZW50KCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyQ2xpY2soZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMudG9nZ2xlKCk7XG4gICAgICAgIHRoaXMuZmlyZVRvZ2dsZUV2ZW50KCk7XG4gICAgfVxuXG4gICAgdG9nZ2xlKGFkZENsYXNzOiBib29sZWFuID0gdGhpcy5hZGRDbGFzcyk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldHMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IGVsZW1lbnQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmNsYXNzVG9Ub2dnbGUsIGFkZENsYXNzKSk7XG4gICAgfVxuXG4gICAgZmlyZVRvZ2dsZUV2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmV2ZW50ID0gbmV3IEN1c3RvbUV2ZW50KCd0b2dnbGUnKTtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEV2ZW50KHRoaXMuZXZlbnQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWRkQ2xhc3MoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmFkZENsYXNzV2hlbkNoZWNrZWQgPyB0aGlzLnRyaWdnZXIuY2hlY2tlZCA6ICF0aGlzLnRyaWdnZXIuY2hlY2tlZDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy50cmlnZ2VyLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlci5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWRkQ2xhc3NXaGVuQ2hlY2tlZCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlci5oYXNBdHRyaWJ1dGUoJ2FkZC1jbGFzcy13aGVuLWNoZWNrZWQnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9