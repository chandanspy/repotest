(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["color-selector"],{

/***/ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts":
/*!**************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts ***!
  \**************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ColorSelector; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class ColorSelector extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.currentSelection = void 0;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(this.getElementsByClassName(this.jsName + "__item"));
    this.mapEvents();
  }

  mapEvents() {
    this.mapTriggerMouseenterEvent();
  }

  mapTriggerMouseenterEvent() {
    this.triggers.forEach(element => {
      element.addEventListener('mouseenter', event => this.onTriggerSelection(event));
    });
  }

  onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
  }

  resetActiveItemSelections() {
    this.triggers.forEach(element => {
      element.classList.remove(this.activeItemClassName);
    });
  }

  setActiveItemSelection(selection) {
    (selection || this.currentSelection).classList.add(this.activeItemClassName);
  }

  get activeItemClassName() {
    return this.getAttribute('active-item-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtZ3JvdXAtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Byb2R1Y3RHcm91cFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbG9yLXNlbGVjdG9yL2NvbG9yLXNlbGVjdG9yLnRzIl0sIm5hbWVzIjpbIkNvbG9yU2VsZWN0b3IiLCJDb21wb25lbnQiLCJ0cmlnZ2VycyIsImN1cnJlbnRTZWxlY3Rpb24iLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsIkFycmF5IiwiZnJvbSIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJtYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50IiwiZm9yRWFjaCIsImVsZW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJTZWxlY3Rpb24iLCJwcmV2ZW50RGVmYXVsdCIsImN1cnJlbnRUYXJnZXQiLCJyZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zIiwic2V0QWN0aXZlSXRlbVNlbGVjdGlvbiIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFjdGl2ZUl0ZW1DbGFzc05hbWUiLCJzZWxlY3Rpb24iLCJhZGQiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGFBQU4sU0FBNEJDLCtEQUE1QixDQUFzQztBQUFBO0FBQUE7QUFBQSxTQUN2Q0MsUUFEdUM7QUFBQSxTQUV2Q0MsZ0JBRnVDO0FBQUE7O0FBSXZDQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLSCxRQUFMLEdBQStCSSxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLQyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxZQUFYLENBQS9CO0FBRUEsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MseUJBQUw7QUFDSDs7QUFFU0EsMkJBQXlCLEdBQUc7QUFDbEMsU0FBS1QsUUFBTCxDQUFjVSxPQUFkLENBQXVCQyxPQUFELElBQTBCO0FBQzVDQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLFlBQXpCLEVBQXdDQyxLQUFELElBQWtCLEtBQUtDLGtCQUFMLENBQXdCRCxLQUF4QixDQUF6RDtBQUNILEtBRkQ7QUFHSDs7QUFFU0Msb0JBQWtCLENBQUNELEtBQUQsRUFBcUI7QUFDN0NBLFNBQUssQ0FBQ0UsY0FBTjtBQUNBLFNBQUtkLGdCQUFMLEdBQXFDWSxLQUFLLENBQUNHLGFBQTNDO0FBQ0EsU0FBS0MseUJBQUw7QUFDQSxTQUFLQyxzQkFBTDtBQUNIOztBQUVTRCwyQkFBeUIsR0FBUztBQUN4QyxTQUFLakIsUUFBTCxDQUFjVSxPQUFkLENBQXVCQyxPQUFELElBQTBCO0FBQzVDQSxhQUFPLENBQUNRLFNBQVIsQ0FBa0JDLE1BQWxCLENBQXlCLEtBQUtDLG1CQUE5QjtBQUNILEtBRkQ7QUFHSDs7QUFFU0gsd0JBQXNCLENBQUNJLFNBQUQsRUFBZ0M7QUFDNUQsS0FBQ0EsU0FBUyxJQUFJLEtBQUtyQixnQkFBbkIsRUFBcUNrQixTQUFyQyxDQUErQ0ksR0FBL0MsQ0FBbUQsS0FBS0YsbUJBQXhEO0FBQ0g7O0FBRWdDLE1BQW5CQSxtQkFBbUIsR0FBVztBQUN4QyxXQUFPLEtBQUtHLFlBQUwsQ0FBa0Isd0JBQWxCLENBQVA7QUFDSDs7QUF6Q2dELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY29sb3Itc2VsZWN0b3IuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29sb3JTZWxlY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBjdXJyZW50U2VsZWN0aW9uOiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pdGVtYCkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJNb3VzZWVudGVyRXZlbnQoKSB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VlbnRlcicsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMuY3VycmVudFNlbGVjdGlvbiA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICB0aGlzLnJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTtcbiAgICAgICAgdGhpcy5zZXRBY3RpdmVJdGVtU2VsZWN0aW9uKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0QWN0aXZlSXRlbVNlbGVjdGlvbihzZWxlY3Rpb24/OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICAoc2VsZWN0aW9uIHx8IHRoaXMuY3VycmVudFNlbGVjdGlvbikuY2xhc3NMaXN0LmFkZCh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWN0aXZlSXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FjdGl2ZS1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9