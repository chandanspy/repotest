(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["password-field"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/password-field/password-field.ts":
/*!*************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/password-field/password-field.ts ***!
  \*************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return PasswordField; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class PasswordField extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.isPasswordShown = false;
    this.button = void 0;
    this.input = void 0;
  }

  readyCallback() {}

  init() {
    this.button = this.getElementsByClassName(this.buttonClassName)[0];
    this.input = this.getElementsByClassName(this.jsName + "__input")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.mapButtonClickEvent();
  }

  mapButtonClickEvent() {
    this.button.addEventListener('click', () => this.onClick());
  }

  onClick() {
    this.isPasswordShown = !this.isPasswordShown;
    this.toggleInputType();
    this.toggleButtonClass();
  }

  toggleInputType() {
    this.input.setAttribute('type', this.isPasswordShown ? 'text' : 'password');
  }

  toggleButtonClass() {
    this.button.classList.toggle(this.buttonToggleClassName, this.isPasswordShown);
  }

  get buttonClassName() {
    return this.getAttribute('button-class-name');
  }

  get buttonToggleClassName() {
    return this.getAttribute('button-toggle-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcGFzc3dvcmQtZmllbGQvcGFzc3dvcmQtZmllbGQudHMiXSwibmFtZXMiOlsiUGFzc3dvcmRGaWVsZCIsIkNvbXBvbmVudCIsImlzUGFzc3dvcmRTaG93biIsImJ1dHRvbiIsImlucHV0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiYnV0dG9uQ2xhc3NOYW1lIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwQnV0dG9uQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwidG9nZ2xlSW5wdXRUeXBlIiwidG9nZ2xlQnV0dG9uQ2xhc3MiLCJzZXRBdHRyaWJ1dGUiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJidXR0b25Ub2dnbGVDbGFzc05hbWUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGFBQU4sU0FBNEJDLCtEQUE1QixDQUFzQztBQUFBO0FBQUE7QUFBQSxTQUN2Q0MsZUFEdUMsR0FDckIsS0FEcUI7QUFBQSxTQUV2Q0MsTUFGdUM7QUFBQSxTQUd2Q0MsS0FIdUM7QUFBQTs7QUFLdkNDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtILE1BQUwsR0FBMkIsS0FBS0ksc0JBQUwsQ0FBNEIsS0FBS0MsZUFBakMsRUFBa0QsQ0FBbEQsQ0FBM0I7QUFDQSxTQUFLSixLQUFMLEdBQStCLEtBQUtHLHNCQUFMLENBQStCLEtBQUtFLE1BQXBDLGNBQXFELENBQXJELENBQS9CO0FBRUEsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MsbUJBQUw7QUFDSDs7QUFFU0EscUJBQW1CLEdBQVM7QUFDbEMsU0FBS1IsTUFBTCxDQUFZUyxnQkFBWixDQUE2QixPQUE3QixFQUFzQyxNQUFNLEtBQUtDLE9BQUwsRUFBNUM7QUFDSDs7QUFFU0EsU0FBTyxHQUFTO0FBQ3RCLFNBQUtYLGVBQUwsR0FBdUIsQ0FBQyxLQUFLQSxlQUE3QjtBQUVBLFNBQUtZLGVBQUw7QUFDQSxTQUFLQyxpQkFBTDtBQUNIOztBQUVTRCxpQkFBZSxHQUFTO0FBQzlCLFNBQUtWLEtBQUwsQ0FBV1ksWUFBWCxDQUF3QixNQUF4QixFQUFnQyxLQUFLZCxlQUFMLEdBQXVCLE1BQXZCLEdBQWdDLFVBQWhFO0FBQ0g7O0FBRVNhLG1CQUFpQixHQUFTO0FBQ2hDLFNBQUtaLE1BQUwsQ0FBWWMsU0FBWixDQUFzQkMsTUFBdEIsQ0FBNkIsS0FBS0MscUJBQWxDLEVBQXlELEtBQUtqQixlQUE5RDtBQUNIOztBQUU0QixNQUFmTSxlQUFlLEdBQVc7QUFDcEMsV0FBTyxLQUFLWSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7O0FBRWtDLE1BQXJCRCxxQkFBcUIsR0FBVztBQUMxQyxXQUFPLEtBQUtDLFlBQUwsQ0FBa0IsMEJBQWxCLENBQVA7QUFDSDs7QUEzQ2dELEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucGFzc3dvcmQtZmllbGQuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUGFzc3dvcmRGaWVsZCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGlzUGFzc3dvcmRTaG93biA9IGZhbHNlO1xuICAgIHByb3RlY3RlZCBidXR0b246IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBpbnB1dDogSFRNTElucHV0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmJ1dHRvbiA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5idXR0b25DbGFzc05hbWUpWzBdO1xuICAgICAgICB0aGlzLmlucHV0ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXRgKVswXTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwQnV0dG9uQ2xpY2tFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBCdXR0b25DbGlja0V2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25DbGljaygpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DbGljaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pc1Bhc3N3b3JkU2hvd24gPSAhdGhpcy5pc1Bhc3N3b3JkU2hvd247XG5cbiAgICAgICAgdGhpcy50b2dnbGVJbnB1dFR5cGUoKTtcbiAgICAgICAgdGhpcy50b2dnbGVCdXR0b25DbGFzcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVJbnB1dFR5cGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXQuc2V0QXR0cmlidXRlKCd0eXBlJywgdGhpcy5pc1Bhc3N3b3JkU2hvd24gPyAndGV4dCcgOiAncGFzc3dvcmQnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlQnV0dG9uQ2xhc3MoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYnV0dG9uLmNsYXNzTGlzdC50b2dnbGUodGhpcy5idXR0b25Ub2dnbGVDbGFzc05hbWUsIHRoaXMuaXNQYXNzd29yZFNob3duKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGJ1dHRvbkNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2J1dHRvbi1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBidXR0b25Ub2dnbGVDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdidXR0b24tdG9nZ2xlLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9