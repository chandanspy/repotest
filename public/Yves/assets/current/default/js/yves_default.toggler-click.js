(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-click"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts":
/*!***********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerClick; });
/* harmony import */ var ShopUi_components_molecules_toggler_click_toggler_click__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/components/molecules/toggler-click/toggler-click */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts");

class TogglerClick extends ShopUi_components_molecules_toggler_click_toggler_click__WEBPACK_IMPORTED_MODULE_0__["default"] {
  onTriggerClick(event) {
    super.onTriggerClick(event);
    this.onTriggerToggleClass(event);
  }

  onTriggerToggleClass(event) {
    if (!this.triggerClassToToggle.length) {
      return;
    }

    var triggerTarget = event.currentTarget;
    triggerTarget.classList.toggle(this.triggerClassToToggle);
  }

  get triggerClassToToggle() {
    return this.getAttribute('trigger-class-to-toggle');
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerClick; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class TogglerClick extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.triggersList = void 0;
    this.targets = void 0;
    this.targetsList = void 0;
  }

  readyCallback() {}

  init() {
    /* tslint:disable: deprecation */
    this.triggersList = Array.from(this.triggerClassName ? document.getElementsByClassName(this.triggerClassName) : document.querySelectorAll(this.triggerSelector));
    this.targetsList = Array.from(this.targetClassName ? document.getElementsByClassName(this.targetClassName) : document.querySelectorAll(this.targetSelector));
    [this.triggers, this.targets] = [this.triggersList, this.targetsList];
    /* tslint:enable: deprecation */

    this.mapEvents();
  }

  mapEvents() {
    this.triggersList.forEach(trigger => {
      trigger.addEventListener('click', event => this.onTriggerClick(event));
    });
  }

  onTriggerClick(event) {
    event.preventDefault();
    this.toggle();
  }
  /**
   * Toggles the class names in the target elements.
   */


  toggle() {
    this.targetsList.forEach(target => {
      var addClass = !target.classList.contains(this.classToToggle);
      target.classList.toggle(this.classToToggle, addClass);
    });
  }
  /**
   * Gets a querySelector of the trigger element.
   *
   * @deprecated Use triggerClassName() instead.
   */


  get triggerSelector() {
    return this.getAttribute('trigger-selector');
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }
  /**
   * Gets a querySelector of the target element.
   *
   * @deprecated Use targetClassName() instead.
   */


  get targetSelector() {
    return this.getAttribute('target-selector');
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }
  /**
   * Gets a class name for the toggle action.
   */


  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1jbGljay90b2dnbGVyLWNsaWNrLnRzIiwid2VicGFjazovLy8uL3ZlbmRvci9zcHJ5a2VyLXNob3Avc2hvcC11aS9zcmMvU3ByeWtlclNob3AvWXZlcy9TaG9wVWkvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy90b2dnbGVyLWNsaWNrL3RvZ2dsZXItY2xpY2sudHMiXSwibmFtZXMiOlsiVG9nZ2xlckNsaWNrIiwiVG9nZ2xlckNsaWNrQ29yZSIsIm9uVHJpZ2dlckNsaWNrIiwiZXZlbnQiLCJvblRyaWdnZXJUb2dnbGVDbGFzcyIsInRyaWdnZXJDbGFzc1RvVG9nZ2xlIiwibGVuZ3RoIiwidHJpZ2dlclRhcmdldCIsImN1cnJlbnRUYXJnZXQiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiLCJ0cmlnZ2VycyIsInRyaWdnZXJzTGlzdCIsInRhcmdldHMiLCJ0YXJnZXRzTGlzdCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwidHJpZ2dlckNsYXNzTmFtZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJ0cmlnZ2VyU2VsZWN0b3IiLCJ0YXJnZXRDbGFzc05hbWUiLCJ0YXJnZXRTZWxlY3RvciIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJ0cmlnZ2VyIiwiYWRkRXZlbnRMaXN0ZW5lciIsInByZXZlbnREZWZhdWx0IiwidGFyZ2V0IiwiYWRkQ2xhc3MiLCJjb250YWlucyIsImNsYXNzVG9Ub2dnbGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLFlBQU4sU0FBMkJDLCtGQUEzQixDQUE0QztBQUM3Q0MsZ0JBQWMsQ0FBQ0MsS0FBRCxF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QUFieUIsYUFBYSxHQUFXO0FBQ3hCLFdBQU8sS0FBS3pCLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7QUEzRitDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQudG9nZ2xlci1jbGljay5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBUb2dnbGVyQ2xpY2tDb3JlIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy90b2dnbGVyLWNsaWNrL3RvZ2dsZXItY2xpY2snO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQ2xpY2sgZXh0ZW5kcyBUb2dnbGVyQ2xpY2tDb3JlIHtcbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm9uVHJpZ2dlckNsaWNrKGV2ZW50KTtcbiAgICAgICAgdGhpcy5vblRyaWdnZXJUb2dnbGVDbGFzcyhldmVudCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclRvZ2dsZUNsYXNzKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMudHJpZ2dlckNsYXNzVG9Ub2dnbGUubGVuZ3RoKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCB0cmlnZ2VyVGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIHRyaWdnZXJUYXJnZXQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLnRyaWdnZXJDbGFzc1RvVG9nZ2xlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQ2xpY2sgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRyaWdnZXJpbmcgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlcnNMaXN0IGluc3RlYWQuXG4gICAgICovXG4gICAgdHJpZ2dlcnM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzTGlzdDogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRhcmdldGVkIGJ5IHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHRhcmdldHNMaXN0IGluc3RlYWQuXG4gICAgICovXG4gICAgdGFyZ2V0czogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0c0xpc3Q6IEhUTUxFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgLyogdHNsaW50OmRpc2FibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMudHJpZ2dlcnNMaXN0ID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbShcbiAgICAgICAgICAgICAgICB0aGlzLnRyaWdnZXJDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSlcbiAgICAgICAgICAgICAgICAgICAgOiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKHRoaXMudHJpZ2dlclNlbGVjdG9yKSxcbiAgICAgICAgICAgIClcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy50YXJnZXRzTGlzdCA9IDxIVE1MRWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20oXG4gICAgICAgICAgICAgICAgdGhpcy50YXJnZXRDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVxuICAgICAgICAgICAgICAgICAgICA6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy50YXJnZXRTZWxlY3RvciksXG4gICAgICAgICAgICApXG4gICAgICAgICk7XG4gICAgICAgIFt0aGlzLnRyaWdnZXJzLCB0aGlzLnRhcmdldHNdID0gW3RoaXMudHJpZ2dlcnNMaXN0LCB0aGlzLnRhcmdldHNMaXN0XTtcbiAgICAgICAgLyogdHNsaW50OmVuYWJsZTogZGVwcmVjYXRpb24gKi9cblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnNMaXN0LmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMudG9nZ2xlKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogVG9nZ2xlcyB0aGUgY2xhc3MgbmFtZXMgaW4gdGhlIHRhcmdldCBlbGVtZW50cy5cbiAgICAgKi9cbiAgICB0b2dnbGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0c0xpc3QuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3QgYWRkQ2xhc3MgPSAhdGFyZ2V0LmNsYXNzTGlzdC5jb250YWlucyh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICAgICAgdGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBhZGRDbGFzcyk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlckNsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlIHRhcmdldCBlbGVtZW50LlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHRhcmdldENsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgY2xhc3MgbmFtZSBmb3IgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9