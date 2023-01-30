(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["order-buttons-disable-toggler"],{

/***/ "./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/order-buttons-disable-toggler/order-buttons-disable-toggler.ts":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/order-buttons-disable-toggler/order-buttons-disable-toggler.ts ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return OrderButtonsDisableToggler; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class OrderButtonsDisableToggler extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.targets = void 0;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.targets = Array.from(document.getElementsByClassName(this.targetClassName));
    this.toggleButtonState();
    this.mapEvents();
  }

  mapEvents() {
    this.mapTriggerChangeEvent();
    this.mapTargetClickEvent();
  }

  mapTriggerChangeEvent() {
    this.triggers.forEach(trigger => {
      trigger.addEventListener('change', () => this.onTriggerChange());
    });
  }

  mapTargetClickEvent() {
    this.targets.forEach(target => {
      target.addEventListener('click', event => this.onTargetClick(event, target));
    });
  }

  onTriggerChange() {
    this.toggleButtonState();
  }

  toggleButtonState() {
    var checkedTriggers = this.triggers.filter(checkbox => checkbox.checked);
    this.toggleTargets(checkedTriggers);
  }

  toggleTargets(checkedTriggers) {
    if (Boolean(checkedTriggers.length) === this.isDisabledWhenChecked) {
      this.enableTargets();
      return;
    }

    this.disableTargets();
  }

  onTargetClick(event, target) {
    if (target.classList.contains(this.disabledClassName)) {
      event.preventDefault();
    }
  }

  disableTargets() {
    this.targets.forEach(target => {
      if (target.tagName === 'A') {
        target.classList.add(this.disabledClassName);
        return;
      }

      if (target.tagName === 'BUTTON') {
        target.setAttribute('disabled', 'disabled');
      }
    });
  }

  enableTargets() {
    this.targets.forEach(target => {
      if (target.tagName === 'BUTTON') {
        target.removeAttribute('disabled');
        return;
      }

      target.classList.remove(this.disabledClassName);
    });
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }

  get isDisabledWhenChecked() {
    var attributeValue = this.getAttribute('is-disabled-when-checked');
    return attributeValue === 'true';
  }

  get disabledClassName() {
    return this.getAttribute('disabled-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3NhbGVzLXJldHVybi1wYWdlL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1NhbGVzUmV0dXJuUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL29yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyL29yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIk9yZGVyQnV0dG9uc0Rpc2FibGVUb2dnbGVyIiwiQ29tcG9uZW50IiwidHJpZ2dlcnMiLCJ0YXJnZXRzIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwidGFyZ2V0Q2xhc3NOYW1lIiwidG9nZ2xlQnV0dG9uU3RhdGUiLCJtYXBFdmVudHMiLCJtYXBUcmlnZ2VyQ2hhbmdlRXZlbnQiLCJtYXBUYXJnZXRDbGlja0V2ZW50IiwiZm9yRWFjaCIsInRyaWdnZXIiLCJhZGRFdmVudExpc3RlbmVyIiwib25UcmlnZ2VyQ2hhbmdlIiwidGFyZ2V0IiwiZXZlbnQiLCJvblRhcmdldENsaWNrIiwiY2hlY2tlZFRyaWdnZXJzIiwiZmlsdGVyIiwiY2hlY2tib3giLCJjaGVja2VkIiwidG9nZ2xlVGFyZ2V0cyIsIkJvb2xlYW4iLCJsZW5ndGgiLCJpc0Rpc2FibGVkV2hlbkNoZWNrZWQiLCJlbmFibGVUYXJnZXRzIiwiZGlzYWJsZVRhcmdldHMiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImRpc2FibGVkQ2xhc3NOYW1lIiwicHJldmVudERlZmF1bHQiLCJ0YWdOYW1lIiwiYWRkIiwic2V0QXR0cmlidXRlIiwicmVtb3ZlQXR0cmlidXRlIiwicmVtb3ZlIiwiZ2V0QXR0cmlidXRlIiwiYXR0cmlidXRlVmFsdWUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVl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QixNQUFmL0IsZUFBZSxHQUFXO0FBQ3BDLFdBQU8sS0FBSytCLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7QUFFa0MsTUFBckJaLHFCQUFxQixHQUFZO0FBQzNDLFFBQU1hLGNBQWMsR0FBRyxLQUFLRCxZQUFMLENBQWtCLDBCQUFsQixDQUF2QjtBQUVBLFdBQU9DLGNBQWMsS0FBSyxNQUExQjtBQUNIOztBQUU4QixNQUFqQlIsaUJBQWlCLEdBQVc7QUFDdEMsV0FBTyxLQUFLTyxZQUFMLENBQWtCLHFCQUFsQixDQUFQO0FBQ0g7O0FBbkc2RCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0Lm9yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIE9yZGVyQnV0dG9uc0Rpc2FibGVUb2dnbGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcnM6IEhUTUxJbnB1dEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0czogSFRNTEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxJbnB1dEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKSk7XG4gICAgICAgIHRoaXMudGFyZ2V0cyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRhcmdldENsYXNzTmFtZSkpO1xuXG4gICAgICAgIHRoaXMudG9nZ2xlQnV0dG9uU3RhdGUoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJDaGFuZ2VFdmVudCgpO1xuICAgICAgICB0aGlzLm1hcFRhcmdldENsaWNrRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVHJpZ2dlckNoYW5nZUV2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxJbnB1dEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5vblRyaWdnZXJDaGFuZ2UoKSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBUYXJnZXRDbGlja0V2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldHMuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgdGFyZ2V0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRhcmdldENsaWNrKGV2ZW50LCB0YXJnZXQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckNoYW5nZSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50b2dnbGVCdXR0b25TdGF0ZSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVCdXR0b25TdGF0ZSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY2hlY2tlZFRyaWdnZXJzID0gPEhUTUxJbnB1dEVsZW1lbnRbXT50aGlzLnRyaWdnZXJzLmZpbHRlcigoY2hlY2tib3gpID0+IGNoZWNrYm94LmNoZWNrZWQpO1xuXG4gICAgICAgIHRoaXMudG9nZ2xlVGFyZ2V0cyhjaGVja2VkVHJpZ2dlcnMpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVUYXJnZXRzKGNoZWNrZWRUcmlnZ2VyczogSFRNTElucHV0RWxlbWVudFtdKTogdm9pZCB7XG4gICAgICAgIGlmIChCb29sZWFuKGNoZWNrZWRUcmlnZ2Vycy5sZW5ndGgpID09PSB0aGlzLmlzRGlzYWJsZWRXaGVuQ2hlY2tlZCkge1xuICAgICAgICAgICAgdGhpcy5lbmFibGVUYXJnZXRzKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzYWJsZVRhcmdldHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UYXJnZXRDbGljayhldmVudDogRXZlbnQsIHRhcmdldDogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRhcmdldC5jbGFzc0xpc3QuY29udGFpbnModGhpcy5kaXNhYmxlZENsYXNzTmFtZSkpIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZGlzYWJsZVRhcmdldHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKCh0YXJnZXQ6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBpZiAodGFyZ2V0LnRhZ05hbWUgPT09ICdBJykge1xuICAgICAgICAgICAgICAgIHRhcmdldC5jbGFzc0xpc3QuYWRkKHRoaXMuZGlzYWJsZWRDbGFzc05hbWUpO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBpZiAodGFyZ2V0LnRhZ05hbWUgPT09ICdCVVRUT04nKSB7XG4gICAgICAgICAgICAgICAgdGFyZ2V0LnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGVuYWJsZVRhcmdldHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKCh0YXJnZXQ6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBpZiAodGFyZ2V0LnRhZ05hbWUgPT09ICdCVVRUT04nKSB7XG4gICAgICAgICAgICAgICAgdGFyZ2V0LnJlbW92ZUF0dHJpYnV0ZSgnZGlzYWJsZWQnKTtcblxuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgdGFyZ2V0LmNsYXNzTGlzdC5yZW1vdmUodGhpcy5kaXNhYmxlZENsYXNzTmFtZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzRGlzYWJsZWRXaGVuQ2hlY2tlZCgpOiBib29sZWFuIHtcbiAgICAgICAgY29uc3QgYXR0cmlidXRlVmFsdWUgPSB0aGlzLmdldEF0dHJpYnV0ZSgnaXMtZGlzYWJsZWQtd2hlbi1jaGVja2VkJyk7XG5cbiAgICAgICAgcmV0dXJuIGF0dHJpYnV0ZVZhbHVlID09PSAndHJ1ZSc7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkaXNhYmxlZENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9