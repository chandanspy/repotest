(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["shopping-list-note-toggler"],{

/***/ "./src/Pyz/Yves/ShoppingListNoteWidget/Theme/default/components/molecules/shopping-list-note-toggler/shopping-list-note-toggler.ts":
/*!*****************************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShoppingListNoteWidget/Theme/default/components/molecules/shopping-list-note-toggler/shopping-list-note-toggler.ts ***!
  \*****************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ShoppingListNoteToggler; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class ShoppingListNoteToggler extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.label = void 0;
    this.trigger = void 0;
    this.noteTextFieldWrapper = void 0;
    this.noteTextarea = void 0;
    this.hiddenClass = 'is-hidden';
  }

  readyCallback() {}

  init() {
    this.label = this.getElementsByClassName(this.jsName + "__label")[0];
    this.trigger = this.getElementsByClassName(this.jsName + "__title")[0];
    this.noteTextFieldWrapper = this.getElementsByClassName(this.jsName + "__wrapper")[0];
    this.noteTextarea = this.getElementsByClassName(this.jsName + "__note-textarea")[0];
    this.mapEvents();
  }

  mapEvents() {
    if (this.label) {
      this.label.addEventListener('click', event => this.onClick(event));
    }
  }

  onClick(event) {
    event.preventDefault();
    this.toggleClass([this.label, this.trigger, this.noteTextFieldWrapper]);
    this.focusTextarea();
  }

  toggleClass(elementsToToggle) {
    elementsToToggle.forEach(element => {
      element.classList.toggle(this.hiddenClass);
    });
  }

  focusTextarea() {
    this.noteTextarea.focus();
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcHBpbmdMaXN0Tm90ZVdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Nob3BwaW5nLWxpc3Qtbm90ZS10b2dnbGVyL3Nob3BwaW5nLWxpc3Qtbm90ZS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIlNob3BwaW5nTGlzdE5vdGVUb2dnbGVyIiwiQ29tcG9uZW50IiwibGFiZWwiLCJ0cmlnZ2VyIiwibm90ZVRleHRGaWVsZFdyYXBwZXIiLCJub3RlVGV4dGFyZWEiLCJoaWRkZW5DbGFzcyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uQ2xpY2siLCJwcmV2ZW50RGVmYXVsdCIsInRvZ2dsZUNsYXNzIiwiZm9jdXNUZXh0YXJlYSIsImVsZW1lbnRzVG9Ub2dnbGUiLCJmb3JFYWNoIiwiZWxlbWVudCIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImZvY3VzIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSx1QkFBTixTQUFzQ0MsK0RBQXRDLENBQWdEO0FBQUE7QUFBQTtBQUFBLFNBQ2pEQyxLQURpRDtBQUFBLFNBRWpEQyxPQUZpRDtBQUFBLFNBR2pEQyxvQkFIaUQ7QUFBQSxTQUlqREMsWUFKaUQ7QUFBQSxTQUtqREMsV0FMaUQsR0FLM0IsV0FMMkI7QUFBQTs7QUFPakRDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtOLEtBQUwsR0FBMEIsS0FBS08sc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsY0FBcUQsQ0FBckQsQ0FBMUI7QUFDQSxTQUFLUCxPQUFMLEdBQTRCLEtBQUtNLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGNBQXFELENBQXJELENBQTVCO0FBQ0EsU0FBS04sb0JBQUwsR0FBNkMsS0FBS0ssc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZ0JBQXVELENBQXZELENBQTdDO0FBQ0EsU0FBS0wsWUFBTCxHQUFxQyxLQUFLSSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxzQkFBNkQsQ0FBN0QsQ0FBckM7QUFDQSxTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixRQUFJLEtBQUtULEtBQVQsRUFBZ0I7QUFDWixXQUFLQSxLQUFMLENBQVdVLGdCQUFYLENBQTRCLE9BQTVCLEVBQXNDQyxLQUFELElBQWtCLEtBQUtDLE9BQUwsQ0FBYUQsS0FBYixDQUF2RDtBQUNIO0FBQ0o7O0FBRU9DLFNBQU8sQ0FBQ0QsS0FBRCxFQUFxQjtBQUNoQ0EsU0FBSyxDQUFDRSxjQUFOO0FBQ0EsU0FBS0MsV0FBTCxDQUFpQixDQUFDLEtBQUtkLEtBQU4sRUFBYSxLQUFLQyxPQUFsQixFQUEyQixLQUFLQyxvQkFBaEMsQ0FBakI7QUFDQSxTQUFLYSxhQUFMO0FBQ0g7O0FBRU9ELGFBQVcsQ0FBQ0UsZ0JBQUQsRUFBd0M7QUFDdkRBLG9CQUFnQixDQUFDQyxPQUFqQixDQUEwQkMsT0FBRCxJQUFhO0FBQ2xDQSxhQUFPLENBQUNDLFNBQVIsQ0FBa0JDLE1BQWxCLENBQXlCLEtBQUtoQixXQUE5QjtBQUNILEtBRkQ7QUFHSDs7QUFFT1csZUFBYSxHQUFTO0FBQzFCLFNBQUtaLFlBQUwsQ0FBa0JrQixLQUFsQjtBQUNIOztBQXJDMEQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5zaG9wcGluZy1saXN0LW5vdGUtdG9nZ2xlci5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTaG9wcGluZ0xpc3ROb3RlVG9nZ2xlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGxhYmVsOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIG5vdGVUZXh0RmllbGRXcmFwcGVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgbm90ZVRleHRhcmVhOiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGhpZGRlbkNsYXNzOiBzdHJpbmcgPSAnaXMtaGlkZGVuJztcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmxhYmVsID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xhYmVsYClbMF07XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190aXRsZWApWzBdO1xuICAgICAgICB0aGlzLm5vdGVUZXh0RmllbGRXcmFwcGVyID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X193cmFwcGVyYClbMF07XG4gICAgICAgIHRoaXMubm90ZVRleHRhcmVhID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19ub3RlLXRleHRhcmVhYClbMF07XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMubGFiZWwpIHtcbiAgICAgICAgICAgIHRoaXMubGFiZWwuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByaXZhdGUgb25DbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGVDbGFzcyhbdGhpcy5sYWJlbCwgdGhpcy50cmlnZ2VyLCB0aGlzLm5vdGVUZXh0RmllbGRXcmFwcGVyXSk7XG4gICAgICAgIHRoaXMuZm9jdXNUZXh0YXJlYSgpO1xuICAgIH1cblxuICAgIHByaXZhdGUgdG9nZ2xlQ2xhc3MoZWxlbWVudHNUb1RvZ2dsZTogSFRNTEVsZW1lbnRbXSk6IHZvaWQge1xuICAgICAgICBlbGVtZW50c1RvVG9nZ2xlLmZvckVhY2goKGVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmhpZGRlbkNsYXNzKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJpdmF0ZSBmb2N1c1RleHRhcmVhKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm5vdGVUZXh0YXJlYS5mb2N1cygpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=