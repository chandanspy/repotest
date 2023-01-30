(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-radio"],{

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

/***/ }),

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-radio/toggler-radio.ts":
/*!***********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-radio/toggler-radio.ts ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerRadio; });
/* harmony import */ var _toggler_checkbox_toggler_checkbox__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../toggler-checkbox/toggler-checkbox */ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-checkbox/toggler-checkbox.ts");

class TogglerRadio extends _toggler_checkbox_toggler_checkbox__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.togglers = void 0;
  }

  readyCallback() {}

  init() {
    this.togglers = Array.from(document.querySelectorAll(this.name + "[group-name=\"" + this.groupName + "\"]"));
    super.init();
  }

  onTriggerClick(event) {
    event.preventDefault();
    this.toggleAll();
  }

  toggleAll() {
    this.togglers.forEach(toggler => {
      toggler.toggle(toggler.addClass);
    });
  }

  get groupName() {
    return this.getAttribute('group-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1jaGVja2JveC90b2dnbGVyLWNoZWNrYm94LnRzIiwid2VicGFjazovLy8uL3NyYy9QeXovWXZlcy9TaG9wVWkvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy90b2dnbGVyLXJhZGlvL3RvZ2dsZXItcmFkaW8udHMiXSwibmFtZXMiOlsiVG9nZ2xlckNoZWNrYm94IiwiQ29tcG9uZW50IiwidHJpZ2dlciIsInRhcmdldHMiLCJldmVudCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIkFycmF5IiwiZnJvbSIsImRvY3VtZW50IiwidGFyZ2V0Q2xhc3NOYW1lIiwidG9nZ2xlIiwiZmlyZVRvZ2dsZUV2ZW50IiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsIm9uVHJpZ2dlckNsaWNrIiwicHJldmVudERlZmF1bHQiLCJhZGRDbGFzcyIsImZvckVhY2giLCJlbGVtZW50IiwiY2xhc3NMaXN0IiwiY2xhc3NUb1RvZ2dsZSIsIkN1c3RvbUV2ZW50IiwiZGlzcGF0Y2hFdmVudCIsImFkZENsYXNzV2hlbkNoZWNrZWQiLCJjaGVja2VkIiwiZ2V0QXR0cmlidXRlIiwiaGFzQXR0cmlidXRlIiwiVG9nZ2xlclJhZGlvIiwidG9nZ2xlcnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwibmFtZSIsImdyb3VwTmFtZSIsInRvZ2dsZUFsbCIsInRvZ2dsZXIiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGVBQU4sU0FBOEJDLCtEQUE5QixDQUF3QztBQUFBO0FBQUE7QUFBQSxTQUN6Q0MsT0FEeUM7QUFBQSxTQUV6Q0MsT0FGeUM7QUFBQSxTQUd6Q0MsS0FIeUM7QUFBQTs7QUFLekNDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtKLE9BQUwsR0FBaUMsS0FBS0ssc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZ0JBQXVELENBQXZELENBQWpDO0FBQ0EsU0FBS0wsT0FBTCxHQUE4Qk0sS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0osc0JBQVQsQ0FBZ0MsS0FBS0ssZUFBckMsQ0FBWCxDQUE5QjtBQUVBLFNBQUtDLE1BQUw7QUFDQSxTQUFLQyxlQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS2IsT0FBTCxDQUFhYyxnQkFBYixDQUE4QixRQUE5QixFQUF5Q1osS0FBRCxJQUFrQixLQUFLYSxjQUFMLENBQW9CYixLQUFwQixDQUExRDtBQUNIOztBQUVTYSxnQkFBYyxDQUFDYixLQUFELEVBQXFCO0FBQ3pDQSxTQUFLLENBQUNjLGNBQU47QUFDQSxTQUFLTCxNQUFMO0FBQ0EsU0FBS0MsZUFBTDtBQUNIOztBQUVERCxRQUFNLENBQUNNLFFBQUQsRUFBMEM7QUFBQSxRQUF6Q0EsUUFBeUM7QUFBekNBLGNBQXlDLEdBQXJCLEtBQUtBLFFBQWdCO0FBQUE7O0FBQzVDLFNBQUtoQixPQUFMLENBQWFpQixPQUFiLENBQXNCQyxPQUFELElBQTBCQSxPQUFPLENBQUNDLFNBQVIsQ0FBa0JULE1BQWxCLENBQXlCLEtBQUtVLGFBQTlCLEVBQTZDSixRQUE3QyxDQUEvQztBQUNIOztBQUVETCxpQkFBZSxHQUFTO0FBQ3BCLFNBQUtWLEtBQUwsR0FBYSxJQUFJb0IsV0FBSixDQUFnQixRQUFoQixDQUFiO0FBQ0EsU0FBS0MsYUFBTCxDQUFtQixLQUFLckIsS0FBeEI7QUFDSDs7QUFFcUIsTUFBUmUsUUFBUSxHQUFZO0FBQzlCLFdBQU8sS0FBS08sbUJBQUwsR0FBMkIsS0FBS3hCLE9BQUwsQ0FBYXlCLE9BQXhDLEdBQWtELENBQUMsS0FBS3pCLE9BQUwsQ0FBYXlCLE9BQXZFO0FBQ0g7O0FBRTRCLE1BQWZmLGVBQWUsR0FBVztBQUNwQyxXQUFPLEtBQUtWLE9BQUwsQ0FBYTBCLFlBQWIsQ0FBMEIsbUJBQTFCLENBQVA7QUFDSDs7QUFFMEIsTUFBYkwsYUFBYSxHQUFXO0FBQ2xDLFdBQU8sS0FBS3JCLE9BQUwsQ0FBYTBCLFlBQWIsQ0FBMEIsaUJBQTFCLENBQVA7QUFDSDs7QUFFZ0MsTUFBbkJGLG1CQUFtQixHQUFZO0FBQ3pDLFdBQU8sS0FBS3hCLE9BQUwsQ0FBYTJCLFlBQWIsQ0FBMEIsd0JBQTFCLENBQVA7QUFDSDs7QUFqRGtELEM7Ozs7Ozs7Ozs7OztBQ0Z2RDtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1DLFlBQU4sU0FBMkI5QiwwRUFBM0IsQ0FBMkM7QUFBQTtBQUFBO0FBQUEsU0FDNUMrQixRQUQ0QztBQUFBOztBQUc1QzFCLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUt5QixRQUFMLEdBQ0l0QixLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDcUIsZ0JBQVQsQ0FBNkIsS0FBS0MsSUFBbEMsc0JBQXNELEtBQUtDLFNBQTNELFNBQVgsQ0FESjtBQUdBLFVBQU01QixJQUFOO0FBQ0g7O0FBRVNXLGdCQUFjLENBQUNiLEtBQUQsRUFBcUI7QUFDekNBLFNBQUssQ0FBQ2MsY0FBTjtBQUNBLFNBQUtpQixTQUFMO0FBQ0g7O0FBRURBLFdBQVMsR0FBUztBQUNkLFNBQUtKLFFBQUwsQ0FBY1gsT0FBZCxDQUF1QmdCLE9BQUQsSUFBMkI7QUFDN0NBLGFBQU8sQ0FBQ3ZCLE1BQVIsQ0FBZXVCLE9BQU8sQ0FBQ2pCLFFBQXZCO0FBQ0gsS0FGRDtBQUdIOztBQUVzQixNQUFUZSxTQUFTLEdBQVc7QUFDOUIsV0FBTyxLQUFLTixZQUFMLENBQWtCLFlBQWxCLENBQVA7QUFDSDs7QUF6QnFELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQudG9nZ2xlci1yYWRpby5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQ2hlY2tib3ggZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXRzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBldmVudDogQ3VzdG9tRXZlbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fdHJpZ2dlcmApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXRDbGFzc05hbWUpKTtcblxuICAgICAgICB0aGlzLnRvZ2dsZSgpO1xuICAgICAgICB0aGlzLmZpcmVUb2dnbGVFdmVudCgpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uVHJpZ2dlckNsaWNrKGV2ZW50KSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLnRvZ2dsZSgpO1xuICAgICAgICB0aGlzLmZpcmVUb2dnbGVFdmVudCgpO1xuICAgIH1cblxuICAgIHRvZ2dsZShhZGRDbGFzczogYm9vbGVhbiA9IHRoaXMuYWRkQ2xhc3MpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50YXJnZXRzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiBlbGVtZW50LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBhZGRDbGFzcykpO1xuICAgIH1cblxuICAgIGZpcmVUb2dnbGVFdmVudCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5ldmVudCA9IG5ldyBDdXN0b21FdmVudCgndG9nZ2xlJyk7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hFdmVudCh0aGlzLmV2ZW50KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGFkZENsYXNzKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5hZGRDbGFzc1doZW5DaGVja2VkID8gdGhpcy50cmlnZ2VyLmNoZWNrZWQgOiAhdGhpcy50cmlnZ2VyLmNoZWNrZWQ7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0YXJnZXRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlci5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGFkZENsYXNzV2hlbkNoZWNrZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIuaGFzQXR0cmlidXRlKCdhZGQtY2xhc3Mtd2hlbi1jaGVja2VkJyk7XG4gICAgfVxufVxuIiwiaW1wb3J0IFRvZ2dsZXJDaGVja2JveCBmcm9tICcuLi90b2dnbGVyLWNoZWNrYm94L3RvZ2dsZXItY2hlY2tib3gnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyUmFkaW8gZXh0ZW5kcyBUb2dnbGVyQ2hlY2tib3gge1xuICAgIHByb3RlY3RlZCB0b2dnbGVyczogVG9nZ2xlclJhZGlvW107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50b2dnbGVycyA9IDxUb2dnbGVyUmFkaW9bXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoYCR7dGhpcy5uYW1lfVtncm91cC1uYW1lPVwiJHt0aGlzLmdyb3VwTmFtZX1cIl1gKSlcbiAgICAgICAgKTtcbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGVBbGwoKTtcbiAgICB9XG5cbiAgICB0b2dnbGVBbGwoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudG9nZ2xlcnMuZm9yRWFjaCgodG9nZ2xlcjogVG9nZ2xlclJhZGlvKSA9PiB7XG4gICAgICAgICAgICB0b2dnbGVyLnRvZ2dsZSh0b2dnbGVyLmFkZENsYXNzKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBncm91cE5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdncm91cC1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==