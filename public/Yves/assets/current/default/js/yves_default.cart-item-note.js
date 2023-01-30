(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["cart-item-note"],{

/***/ "./src/Pyz/Yves/CartNoteWidget/Theme/default/components/molecules/cart-item-note/cart-item-note.ts":
/*!*********************************************************************************************************!*\
  !*** ./src/Pyz/Yves/CartNoteWidget/Theme/default/components/molecules/cart-item-note/cart-item-note.ts ***!
  \*********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CartItemNote; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CartItemNote extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.editButton = void 0;
    this.removeButton = void 0;
    this.formTarget = void 0;
    this.textTarget = void 0;
  }

  readyCallback() {}

  init() {
    this.editButton = this.getElementsByClassName(this.jsName + "__edit")[0];
    this.removeButton = this.getElementsByClassName(this.jsName + "__remove")[0];
    this.formTarget = this.getElementsByClassName(this.jsName + "__form")[0];
    this.textTarget = this.getElementsByClassName(this.jsName + "__text-wrap")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.addEventListener('click', event => this.onTriggerClick(event));
  }

  onTriggerClick(event) {
    var target = event.target;

    while (target !== this) {
      if (target === this.editButton) {
        event.preventDefault();
        this.classToggle(this.formTarget);
        this.classToggle(this.textTarget);
        return;
      }

      if (target === this.removeButton) {
        event.preventDefault();
        var form = this.formTarget.getElementsByTagName('form')[0];
        var textarea = form.getElementsByTagName('textarea')[0];
        textarea.value = '';
        form.submit();
        return;
      }

      target = target.parentNode;
    }
  }

  classToggle(activeTrigger) {
    var isTriggerActive = activeTrigger.classList.contains(this.classToToggle);
    activeTrigger.classList.toggle(this.classToToggle, !isTriggerActive);
  }

  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ2FydE5vdGVXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jYXJ0LWl0ZW0tbm90ZS9jYXJ0LWl0ZW0tbm90ZS50cyJdLCJuYW1lcyI6WyJDYXJ0SXRlbU5vdGUiLCJDb21wb25lbnQiLCJlZGl0QnV0dG9uIiwicmVtb3ZlQnV0dG9uIiwiZm9ybVRhcmdldCIsInRleHRUYXJnZXQiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJDbGljayIsInRhcmdldCIsInByZXZlbnREZWZhdWx0IiwiY2xhc3NUb2dnbGUiLCJmb3JtIiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJ0ZXh0YXJlYSIsInZhbHVlIiwic3VibWl0IiwicGFyZW50Tm9kZSIsImFjdGl2ZVRyaWdnZXIiLCJpc1RyaWdnZXJBY3RpdmUiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImNsYXNzVG9Ub2dnbGUiLCJ0b2dnbGUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLFlBQU4sU0FBMkJDLCtEQUEzQixDQUFxQztBQUFBO0FBQUE7QUFBQSxTQUN0Q0MsVUFEc0M7QUFBQSxTQUV0Q0MsWUFGc0M7QUFBQSxTQUd0Q0MsVUFIc0M7QUFBQSxTQUl0Q0MsVUFKc0M7QUFBQTs7QUFNdENDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtMLFVBQUwsR0FBcUMsS0FBS00sc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBckM7QUFDQSxTQUFLTixZQUFMLEdBQXVDLEtBQUtLLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGVBQXNELENBQXRELENBQXZDO0FBQ0EsU0FBS0wsVUFBTCxHQUErQixLQUFLSSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxhQUFvRCxDQUFwRCxDQUEvQjtBQUNBLFNBQUtKLFVBQUwsR0FBK0IsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsa0JBQXlELENBQXpELENBQS9CO0FBRUEsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MsZ0JBQUwsQ0FBc0IsT0FBdEIsRUFBZ0NDLEtBQUQsSUFBa0IsS0FBS0MsY0FBTCxDQUFvQkQsS0FBcEIsQ0FBakQ7QUFDSDs7QUFFU0MsZ0JBQWMsQ0FBQ0QsS0FBRCxFQUFxQjtBQUN6QyxRQUFJRSxNQUFNLEdBQWdCRixLQUFLLENBQUNFLE1BQWhDOztBQUVBLFdBQU9BLE1BQU0sS0FBSyxJQUFsQixFQUF3QjtBQUNwQixVQUFJQSxNQUFNLEtBQUssS0FBS1osVUFBcEIsRUFBZ0M7QUFDNUJVLGFBQUssQ0FBQ0csY0FBTjtBQUNBLGFBQUtDLFdBQUwsQ0FBaUIsS0FBS1osVUFBdEI7QUFDQSxhQUFLWSxXQUFMLENBQWlCLEtBQUtYLFVBQXRCO0FBRUE7QUFDSDs7QUFDRCxVQUFJUyxNQUFNLEtBQUssS0FBS1gsWUFBcEIsRUFBa0M7QUFDOUJTLGFBQUssQ0FBQ0csY0FBTjtBQUNBLFlBQU1FLElBQUksR0FBb0IsS0FBS2IsVUFBTCxDQUFnQmMsb0JBQWhCLENBQXFDLE1BQXJDLEVBQTZDLENBQTdDLENBQTlCO0FBQ0EsWUFBTUMsUUFBUSxHQUF3QkYsSUFBSSxDQUFDQyxvQkFBTCxDQUEwQixVQUExQixFQUFzQyxDQUF0QyxDQUF0QztBQUNBQyxnQkFBUSxDQUFDQyxLQUFULEdBQWlCLEVBQWpCO0FBQ0FILFlBQUksQ0FBQ0ksTUFBTDtBQUVBO0FBQ0g7O0FBQ0RQLFlBQU0sR0FBZ0JBLE1BQU0sQ0FBQ1EsVUFBN0I7QUFDSDtBQUNKOztBQUVTTixhQUFXLENBQUNPLGFBQUQsRUFBbUM7QUFDcEQsUUFBTUMsZUFBZSxHQUFHRCxhQUFhLENBQUNFLFNBQWQsQ0FBd0JDLFFBQXhCLENBQWlDLEtBQUtDLGFBQXRDLENBQXhCO0FBQ0FKLGlCQUFhLENBQUNFLFNBQWQsQ0FBd0JHLE1BQXhCLENBQStCLEtBQUtELGFBQXBDLEVBQW1ELENBQUNILGVBQXBEO0FBQ0g7O0FBRTBCLE1BQWJHLGFBQWEsR0FBVztBQUNsQyxXQUFPLEtBQUtFLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7QUFwRCtDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY2FydC1pdGVtLW5vdGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ2FydEl0ZW1Ob3RlIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgZWRpdEJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHJlbW92ZUJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGZvcm1UYXJnZXQ6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0ZXh0VGFyZ2V0OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmVkaXRCdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZWRpdGApWzBdO1xuICAgICAgICB0aGlzLnJlbW92ZUJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yZW1vdmVgKVswXTtcbiAgICAgICAgdGhpcy5mb3JtVGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2Zvcm1gKVswXTtcbiAgICAgICAgdGhpcy50ZXh0VGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RleHQtd3JhcGApWzBdO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyQ2xpY2soZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGxldCB0YXJnZXQgPSA8SFRNTEVsZW1lbnQ+ZXZlbnQudGFyZ2V0O1xuXG4gICAgICAgIHdoaWxlICh0YXJnZXQgIT09IHRoaXMpIHtcbiAgICAgICAgICAgIGlmICh0YXJnZXQgPT09IHRoaXMuZWRpdEJ1dHRvbikge1xuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgdGhpcy5jbGFzc1RvZ2dsZSh0aGlzLmZvcm1UYXJnZXQpO1xuICAgICAgICAgICAgICAgIHRoaXMuY2xhc3NUb2dnbGUodGhpcy50ZXh0VGFyZ2V0KTtcblxuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmICh0YXJnZXQgPT09IHRoaXMucmVtb3ZlQnV0dG9uKSB7XG4gICAgICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgICAgICBjb25zdCBmb3JtID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmZvcm1UYXJnZXQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ2Zvcm0nKVswXTtcbiAgICAgICAgICAgICAgICBjb25zdCB0ZXh0YXJlYSA9IDxIVE1MVGV4dEFyZWFFbGVtZW50PmZvcm0uZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3RleHRhcmVhJylbMF07XG4gICAgICAgICAgICAgICAgdGV4dGFyZWEudmFsdWUgPSAnJztcbiAgICAgICAgICAgICAgICBmb3JtLnN1Ym1pdCgpO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRhcmdldC5wYXJlbnROb2RlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNsYXNzVG9nZ2xlKGFjdGl2ZVRyaWdnZXI6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlzVHJpZ2dlckFjdGl2ZSA9IGFjdGl2ZVRyaWdnZXIuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgIGFjdGl2ZVRyaWdnZXIuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmNsYXNzVG9Ub2dnbGUsICFpc1RyaWdnZXJBY3RpdmUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=