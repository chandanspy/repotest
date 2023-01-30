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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class ReturnProductReason extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.select = void 0;
    this.target = void 0;
  }

  readyCallback() {}

  init() {
    this.select = this.getElementsByClassName(this.jsName + "__select")[0];
    this.target = this.getElementsByClassName(this.jsName + "__target")[0];
    this.toggleTargetClass();
    this.mapEvents();
  }

  mapEvents() {
    this.mapSelectChange();
  }

  mapSelectChange() {
    this.select.addEventListener('change', () => this.onSelectChange());
  }

  onSelectChange() {
    this.toggleTargetClass();
  }

  toggleTargetClass() {
    var isToggleValueSelected = this.toggleValue === this.select.value;
    this.target.classList.toggle(this.classToToggle, !isToggleValueSelected);
  }

  get toggleValue() {
    return this.getAttribute('toggle-value');
  }

  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3NhbGVzLXJldHVybi1wYWdlL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1NhbGVzUmV0dXJuUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JldHVybi1wcm9kdWN0LXJlYXNvbi9yZXR1cm4tcHJvZHVjdC1yZWFzb24udHMiXSwibmFtZXMiOlsiUmV0dXJuUHJvZHVjdFJlYXNvbiIsIkNvbXBvbmVudCIsInNlbGVjdCIsInRhcmdldCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInRvZ2dsZVRhcmdldENsYXNzIiwibWFwRXZlbnRzIiwibWFwU2VsZWN0Q2hhbmdlIiwiYWRkRXZlbnRMaXN0ZW5lciIsIm9uU2VsZWN0Q2hhbmdlIiwiaXNUb2dnbGVWYWx1ZVNlbGVjdGVkIiwidG9nZ2xlVmFsdWUiLCJ2YWx1ZSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImNsYXNzVG9Ub2dnbGUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLG1CQUFOLFNBQWtDQywrREFBbEMsQ0FBNEM7QUFBQTtBQUFBO0FBQUEsU0FDN0NDLE1BRDZDO0FBQUEsU0FFN0NDLE1BRjZDO0FBQUE7O0FBSTdDQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLSCxNQUFMLEdBQWlDLEtBQUtJLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGVBQXNELENBQXRELENBQWpDO0FBQ0EsU0FBS0osTUFBTCxHQUEyQixLQUFLRyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxlQUFzRCxDQUF0RCxDQUEzQjtBQUVBLFNBQUtDLGlCQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MsZUFBTDtBQUNIOztBQUVTQSxpQkFBZSxHQUFTO0FBQzlCLFNBQUtSLE1BQUwsQ0FBWVMsZ0JBQVosQ0FBNkIsUUFBN0IsRUFBdUMsTUFBTSxLQUFLQyxjQUFMLEVBQTdDO0FBQ0g7O0FBRVNBLGdCQUFjLEdBQVM7QUFDN0IsU0FBS0osaUJBQUw7QUFDSDs7QUFFU0EsbUJBQWlCLEdBQVM7QUFDaEMsUUFBTUsscUJBQXFCLEdBQUcsS0FBS0MsV0FBTCxLQUFxQixLQUFLWixNQUFMLENBQVlhLEtBQS9EO0FBQ0EsU0FBS1osTUFBTCxDQUFZYSxTQUFaLENBQXNCQyxNQUF0QixDQUE2QixLQUFLQyxhQUFsQyxFQUFpRCxDQUFDTCxxQkFBbEQ7QUFDSDs7QUFFd0IsTUFBWEMsV0FBVyxHQUFXO0FBQ2hDLFdBQU8sS0FBS0ssWUFBTCxDQUFrQixjQUFsQixDQUFQO0FBQ0g7O0FBRTBCLE1BQWJELGFBQWEsR0FBVztBQUNsQyxXQUFPLEtBQUtDLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7QUFyQ3NELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucmV0dXJuLXByb2R1Y3QtcmVhc29uLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFJldHVyblByb2R1Y3RSZWFzb24gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBzZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2VsZWN0ID0gPEhUTUxTZWxlY3RFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NlbGVjdGApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190YXJnZXRgKVswXTtcblxuICAgICAgICB0aGlzLnRvZ2dsZVRhcmdldENsYXNzKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBTZWxlY3RDaGFuZ2UoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwU2VsZWN0Q2hhbmdlKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNlbGVjdC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoKSA9PiB0aGlzLm9uU2VsZWN0Q2hhbmdlKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNlbGVjdENoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50b2dnbGVUYXJnZXRDbGFzcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVUYXJnZXRDbGFzcygpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNUb2dnbGVWYWx1ZVNlbGVjdGVkID0gdGhpcy50b2dnbGVWYWx1ZSA9PT0gdGhpcy5zZWxlY3QudmFsdWU7XG4gICAgICAgIHRoaXMudGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCAhaXNUb2dnbGVWYWx1ZVNlbGVjdGVkKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRvZ2dsZVZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndG9nZ2xlLXZhbHVlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==