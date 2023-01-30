(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-accordion"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.ts":
/*!*******************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.ts ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerAccordion; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class TogglerAccordion extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.wrap = void 0;
    this.triggers = void 0;
    this.isTouch = void 0;
  }

  readyCallback() {}

  init() {
    this.wrap = document.getElementsByClassName(this.wrapClassName)[0];
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.isTouch = 'ontouchstart' in window;
    this.mapEvents();
  }

  mapEvents() {
    this.wrap.addEventListener('click', event => this.onTriggerClick(event));
  }

  onTriggerClick(event) {
    if (this.isTouchScreen) {
      if (this.isTouch) {
        this.initializeClick(event);
      }
    } else {
      this.initializeClick(event);
    }
  }

  initializeClick(event) {
    this.triggers.some(trigger => {
      var target = event.target;

      while (target !== this.wrap) {
        if (target === trigger) {
          event.preventDefault();
          this.toggle(trigger);
          return true;
        }

        target = target.parentNode;
      }
    });
  }

  toggle(activeTrigger) {
    var isTriggerActive = activeTrigger.classList.contains(this.triggerActiveClass);
    activeTrigger.classList.toggle(this.triggerActiveClass, !isTriggerActive);
    this.targetToggle(activeTrigger);
  }

  targetToggle(target) {
    var targets = Array.from(document.querySelectorAll(target.dataset.toggleTarget));
    targets.forEach(element => {
      var isTargetActive = !element.classList.contains(this.classToToggle);
      element.classList.toggle(this.classToToggle, isTargetActive);
    });
  }

  get wrapClassName() {
    return this.getAttribute('wrap-class-name');
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

  get triggerActiveClass() {
    return this.getAttribute('active-class');
  }

  get isTouchScreen() {
    return this.touchRules === 'true';
  }

  get touchRules() {
    return this.getAttribute('active-on-touch');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1hY2NvcmRpb24vdG9nZ2xlci1hY2NvcmRpb24udHMiXSwibmFtZXMiOlsiVG9nZ2xlckFjY29yZGlvbiIsIkNvbXBvbmVudCIsIndyYXAiLCJ0cmlnZ2VycyIsImlzVG91Y2giLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsIndyYXBDbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwid2luZG93IiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2xpY2siLCJpc1RvdWNoU2NyZWVuIiwiaW5pdGlhbGl6ZUNsaWNrIiwic29tZSIsInRyaWdnZXIiLCJ0YXJnZXQiLCJwcmV2ZW50RGVmYXVsdCIsInRvZ2dsZSIsInBhcmVudE5vZGUiLCJhY3RpdmVUcmlnZ2VyIiwiaXNUcmlnZ2VyQWN0aXZlIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJ0cmlnZ2VyQWN0aXZlQ2xhc3MiLCJ0YXJnZXRUb2dnbGUiLCJ0YXJnZXRzIiwicXVlcnlTZWxlY3RvckFsbCIsImRhdGFzZXQiLCJ0b2dnbGVUYXJnZXQiLCJmb3JFYWNoIiwiZWxlbWVudCIsImlzVGFyZ2V0QWN0aXZlIiwiY2xhc3NUb1RvZ2dsZSIsImdldEF0dHJpYnV0ZSIsInRvdWNoUnVsZXMiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGdCQUFOLFNBQStCQywrREFBL0IsQ0FBeUM7QUFBQTtBQUFBO0FBQUEsU0FDMUNDLElBRDBDO0FBQUEsU0FFMUNDLFFBRjBDO0FBQUEsU0FHMUNDLE9BSDBDO0FBQUE7O0FBSzFDQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixT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QyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC50b2dnbGVyLWFjY29yZGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQWNjb3JkaW9uIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgd3JhcDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBpc1RvdWNoOiBib29sZWFuO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMud3JhcCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMud3JhcENsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKSk7XG4gICAgICAgIHRoaXMuaXNUb3VjaCA9ICdvbnRvdWNoc3RhcnQnIGluIHdpbmRvdztcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMud3JhcC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyQ2xpY2soZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlzVG91Y2hTY3JlZW4pIHtcbiAgICAgICAgICAgIGlmICh0aGlzLmlzVG91Y2gpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmluaXRpYWxpemVDbGljayhldmVudCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB0aGlzLmluaXRpYWxpemVDbGljayhldmVudCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdGlhbGl6ZUNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLnNvbWUoKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBsZXQgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LnRhcmdldDtcblxuICAgICAgICAgICAgd2hpbGUgKHRhcmdldCAhPT0gdGhpcy53cmFwKSB7XG4gICAgICAgICAgICAgICAgaWYgKHRhcmdldCA9PT0gdHJpZ2dlcikge1xuICAgICAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnRvZ2dsZSh0cmlnZ2VyKTtcblxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gdHJ1ZTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRhcmdldC5wYXJlbnROb2RlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlKGFjdGl2ZVRyaWdnZXI6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlzVHJpZ2dlckFjdGl2ZSA9IGFjdGl2ZVRyaWdnZXIuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMudHJpZ2dlckFjdGl2ZUNsYXNzKTtcbiAgICAgICAgYWN0aXZlVHJpZ2dlci5jbGFzc0xpc3QudG9nZ2xlKHRoaXMudHJpZ2dlckFjdGl2ZUNsYXNzLCAhaXNUcmlnZ2VyQWN0aXZlKTtcbiAgICAgICAgdGhpcy50YXJnZXRUb2dnbGUoYWN0aXZlVHJpZ2dlcik7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRhcmdldFRvZ2dsZSh0YXJnZXQ6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGFyZ2V0LmRhdGFzZXQudG9nZ2xlVGFyZ2V0KSk7XG4gICAgICAgIHRhcmdldHMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnN0IGlzVGFyZ2V0QWN0aXZlID0gIWVsZW1lbnQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBpc1RhcmdldEFjdGl2ZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgd3JhcENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3dyYXAtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckFjdGl2ZUNsYXNzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLWNsYXNzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpc1RvdWNoU2NyZWVuKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy50b3VjaFJ1bGVzID09PSAndHJ1ZSc7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0b3VjaFJ1bGVzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLW9uLXRvdWNoJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==