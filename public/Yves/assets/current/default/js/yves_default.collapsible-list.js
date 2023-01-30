(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["collapsible-list"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/collapsible-list/collapsible-list.ts":
/*!*****************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/collapsible-list/collapsible-list.ts ***!
  \*****************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CollapsibleList; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CollapsibleList extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggerButton = void 0;
    this.targetList = void 0;
  }

  readyCallback() {}

  init() {
    this.triggerButton = this.getElementsByClassName(this.jsName + "__button")[0];
    this.targetList = this.getElementsByClassName(this.jsName + "__list")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.mapClickEvent();
  }

  mapClickEvent() {
    if (!this.triggerButton) {
      return;
    }

    this.triggerButton.addEventListener('click', () => this.onClick());
  }

  onClick() {
    this.targetList.classList.toggle(this.listTriggerClass);
    this.triggerButton.classList.toggle(this.buttonTriggerClass);
  }

  get listTriggerClass() {
    return this.getAttribute('list-trigger-class');
  }

  get buttonTriggerClass() {
    return this.getAttribute('button-trigger-class');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvY29sbGFwc2libGUtbGlzdC9jb2xsYXBzaWJsZS1saXN0LnRzIl0sIm5hbWVzIjpbIkNvbGxhcHNpYmxlTGlzdCIsIkNvbXBvbmVudCIsInRyaWdnZXJCdXR0b24iLCJ0YXJnZXRMaXN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwibGlzdFRyaWdnZXJDbGFzcyIsImJ1dHRvblRyaWdnZXJDbGFzcyIsImdldEF0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsZUFBTixTQUE4QkMseURBQTlCLENBQXdDO0FBQUE7QUFBQTtBQUFBLFNBQ3pDQyxhQUR5QztBQUFBLFNBRXpDQyxVQUZ5QztBQUFBOztBQUl6Q0MsZUFBYSxHQUFHLENBQUU7O0FBRWxCQyxNQUFJLEdBQUc7QUFDYixTQUFLSCxhQUFMLEdBQXdDLEtBQUtJLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGVBQXNELENBQXRELENBQXhDO0FBQ0EsU0FBS0osVUFBTCxHQUErQixLQUFLRyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxhQUFvRCxDQUFwRCxDQUEvQjtBQUVBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtDLGFBQUw7QUFDSDs7QUFFU0EsZUFBYSxHQUFTO0FBQzVCLFFBQUksQ0FBQyxLQUFLUCxhQUFWLEVBQXlCO0FBQ3JCO0FBQ0g7O0FBRUQsU0FBS0EsYUFBTCxDQUFtQlEsZ0JBQW5CLENBQW9DLE9BQXBDLEVBQTZDLE1BQU0sS0FBS0MsT0FBTCxFQUFuRDtBQUNIOztBQUVTQSxTQUFPLEdBQVM7QUFDdEIsU0FBS1IsVUFBTCxDQUFnQlMsU0FBaEIsQ0FBMEJDLE1BQTFCLENBQWlDLEtBQUtDLGdCQUF0QztBQUNBLFNBQUtaLGFBQUwsQ0FBbUJVLFNBQW5CLENBQTZCQyxNQUE3QixDQUFvQyxLQUFLRSxrQkFBekM7QUFDSDs7QUFFNkIsTUFBaEJELGdCQUFnQixHQUFXO0FBQ3JDLFdBQU8sS0FBS0UsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIOztBQUUrQixNQUFsQkQsa0JBQWtCLEdBQVc7QUFDdkMsV0FBTyxLQUFLQyxZQUFMLENBQWtCLHNCQUFsQixDQUFQO0FBQ0g7O0FBcENrRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNvbGxhcHNpYmxlLWxpc3QuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDb2xsYXBzaWJsZUxpc3QgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0TGlzdDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyQnV0dG9uID0gPEhUTUxCdXR0b25FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbmApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldExpc3QgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGlzdGApWzBdO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBDbGlja0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcENsaWNrRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50cmlnZ2VyQnV0dG9uKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXJCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLm9uQ2xpY2soKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2xpY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0TGlzdC5jbGFzc0xpc3QudG9nZ2xlKHRoaXMubGlzdFRyaWdnZXJDbGFzcyk7XG4gICAgICAgIHRoaXMudHJpZ2dlckJ1dHRvbi5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuYnV0dG9uVHJpZ2dlckNsYXNzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGxpc3RUcmlnZ2VyQ2xhc3MoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdsaXN0LXRyaWdnZXItY2xhc3MnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGJ1dHRvblRyaWdnZXJDbGFzcygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2J1dHRvbi10cmlnZ2VyLWNsYXNzJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==