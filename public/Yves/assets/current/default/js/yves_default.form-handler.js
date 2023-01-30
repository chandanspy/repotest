(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-handler"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-handler/form-handler.ts":
/*!*********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-handler/form-handler.ts ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormHandler; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class FormHandler extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.event = void 0;
    this.triggers = void 0;
  }

  readyCallback() {}

  init() {
    this.event = this.getAttribute('event');
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.mapEvents();
  }

  mapEvents() {
    this.triggers.forEach(trigger => {
      trigger.addEventListener(this.event, event => this.onTriggerEvent(event));
    });
  }

  onTriggerEvent(event) {
    var trigger = event.currentTarget;
    var form = trigger.closest('form');

    if (this.shouldChangeAction) {
      var newActionName = this.getDataAttribute(trigger, 'data-change-action-to');
      form.action = newActionName;
    }

    if (this.shouldSubmitForm) {
      event.preventDefault();
      form.submit();
    }
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

  get shouldSubmitForm() {
    return this.submitForm === 'true';
  }

  get submitForm() {
    return this.getAttribute('submit-form');
  }

  get shouldChangeAction() {
    return this.changeAction === 'true';
  }

  get changeAction() {
    return this.getAttribute('change-action');
  }

  getDataAttribute(block, attr) {
    return block.getAttribute(attr);
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1oYW5kbGVyL2Zvcm0taGFuZGxlci50cyJdLCJuYW1lcyI6WyJGb3JtSGFuZGxlciIsIkNvbXBvbmVudCIsImV2ZW50IiwidHJpZ2dlcnMiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEF0dHJpYnV0ZSIsIkFycmF5IiwiZnJvbSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInRyaWdnZXJDbGFzc05hbWUiLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwidHJpZ2dlciIsImFkZEV2ZW50TGlzdGVuZXIiLCJvblRyaWdnZXJFdmVudCIsImN1cnJlbnRUYXJnZXQiLCJmb3JtIiwiY2xvc2VzdCIsInNob3VsZENoYW5nZUFjdGlvbiIsIm5ld0FjdGlvbk5hbWUiLCJnZXREYXRhQXR0cmlidXRlIiwiYWN0aW9uIiwic2hvdWxkU3VibWl0Rm9ybSIsInByZXZlbnREZWZhdWx0Iiwic3VibWl0Iiwic3VibWl0Rm9ybSIsImNoYW5nZUFjdGlvbiIsImJsb2NrIiwiYXR0ciJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsV0FBTixTQUEwQkMsK0RBQTFCLENBQW9DO0FBQUE7QUFBQTtBQUFBLFNBQ3JDQyxLQURxQztBQUFBLFNBRXJDQyxRQUZxQztBQUFBOztBQUlyQ0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0gsS0FBTCxHQUFhLEtBQUtJLFlBQUwsQ0FBa0IsT0FBbEIsQ0FBYjtBQUNBLFNBQUtILFFBQUwsR0FBK0JJLEtBQUssQ0FBQ0MsSUFBTixDQUFXQyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLGdCQUFyQyxDQUFYLENBQS9CO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS1QsUUFBTCxDQUFjVSxPQUFkLENBQXVCQyxPQUFELElBQTBCO0FBQzVDQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLEtBQUtiLEtBQTlCLEVBQXNDQSxLQUFELElBQWtCLEtBQUtjLGNBQUwsQ0FBb0JkLEtBQXBCLENBQXZEO0FBQ0gsS0FGRDtBQUdIOztBQUVTYyxnQkFBYyxDQUFDZCxLQUFELEVBQXFCO0FBQ3pDLFFBQU1ZLE9BQU8sR0FBZ0JaLEtBQUssQ0FBQ2UsYUFBbkM7QUFDQSxRQUFNQyxJQUFJLEdBQW9CSixPQUFPLENBQUNLLE9BQVIsQ0FBZ0IsTUFBaEIsQ0FBOUI7O0FBQ0EsUUFBSSxLQUFLQyxrQkFBVCxFQUE2QjtBQUN6QixVQUFNQyxhQUFhLEdBQUcsS0FBS0MsZ0JBQUwsQ0FBc0JSLE9BQXRCLEVBQStCLHVCQUEvQixDQUF0QjtBQUNBSSxVQUFJLENBQUNLLE1BQUwsR0FBY0YsYUFBZDtBQUNIOztBQUNELFFBQUksS0FBS0csZ0JBQVQsRUFBMkI7QUFDdkJ0QixXQUFLLENBQUN1QixjQUFOO0FBQ0FQLFVBQUksQ0FBQ1EsTUFBTDtBQUNIO0FBQ0o7O0FBRTZCLE1BQWhCZixnQkFBZ0IsR0FBVztBQUNyQyxXQUFPLEtBQUtMLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7QUFFNkIsTUFBaEJrQixnQkFBZ0IsR0FBWTtBQUN0QyxXQUFPLEtBQUtHLFVBQUwsS0FBb0IsTUFBM0I7QUFDSDs7QUFFdUIsTUFBVkEsVUFBVSxHQUFXO0FBQy9CLFdBQU8sS0FBS3JCLFlBQUwsQ0FBa0IsYUFBbEIsQ0FBUDtBQUNIOztBQUUrQixNQUFsQmMsa0JBQWtCLEdBQVk7QUFDeEMsV0FBTyxLQUFLUSxZQUFMLEtBQXNCLE1BQTdCO0FBQ0g7O0FBRXlCLE1BQVpBLFlBQVksR0FBVztBQUNqQyxXQUFPLEtBQUt0QixZQUFMLENBQWtCLGVBQWxCLENBQVA7QUFDSDs7QUFFU2dCLGtCQUFnQixDQUFDTyxLQUFELEVBQXFCQyxJQUFyQixFQUEyQztBQUNqRSxXQUFPRCxLQUFLLENBQUN2QixZQUFOLENBQW1Cd0IsSUFBbkIsQ0FBUDtBQUNIOztBQXJEOEMsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5mb3JtLWhhbmRsZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRm9ybUhhbmRsZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBldmVudDogc3RyaW5nO1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmV2ZW50ID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ2V2ZW50Jyk7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKSk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKCh0cmlnZ2VyOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgdHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKHRoaXMuZXZlbnQsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyRXZlbnQoZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckV2ZW50KGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCB0cmlnZ2VyID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIGNvbnN0IGZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PnRyaWdnZXIuY2xvc2VzdCgnZm9ybScpO1xuICAgICAgICBpZiAodGhpcy5zaG91bGRDaGFuZ2VBY3Rpb24pIHtcbiAgICAgICAgICAgIGNvbnN0IG5ld0FjdGlvbk5hbWUgPSB0aGlzLmdldERhdGFBdHRyaWJ1dGUodHJpZ2dlciwgJ2RhdGEtY2hhbmdlLWFjdGlvbi10bycpO1xuICAgICAgICAgICAgZm9ybS5hY3Rpb24gPSBuZXdBY3Rpb25OYW1lO1xuICAgICAgICB9XG4gICAgICAgIGlmICh0aGlzLnNob3VsZFN1Ym1pdEZvcm0pIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICBmb3JtLnN1Ym1pdCgpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBzaG91bGRTdWJtaXRGb3JtKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5zdWJtaXRGb3JtID09PSAndHJ1ZSc7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBzdWJtaXRGb3JtKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnc3VibWl0LWZvcm0nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNob3VsZENoYW5nZUFjdGlvbigpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY2hhbmdlQWN0aW9uID09PSAndHJ1ZSc7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjaGFuZ2VBY3Rpb24oKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjaGFuZ2UtYWN0aW9uJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldERhdGFBdHRyaWJ1dGUoYmxvY2s6IEhUTUxFbGVtZW50LCBhdHRyOiBzdHJpbmcpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gYmxvY2suZ2V0QXR0cmlidXRlKGF0dHIpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=