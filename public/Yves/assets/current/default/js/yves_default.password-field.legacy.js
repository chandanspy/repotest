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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var PasswordField = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(PasswordField, _Component);

  function PasswordField() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.isPasswordShown = false;
    _this.button = void 0;
    _this.input = void 0;
    return _this;
  }

  var _proto = PasswordField.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.button = this.getElementsByClassName(this.buttonClassName)[0];
    this.input = this.getElementsByClassName(this.jsName + "__input")[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapButtonClickEvent();
  };

  _proto.mapButtonClickEvent = function mapButtonClickEvent() {
    var _this2 = this;

    this.button.addEventListener('click', function () {
      return _this2.onClick();
    });
  };

  _proto.onClick = function onClick() {
    this.isPasswordShown = !this.isPasswordShown;
    this.toggleInputType();
    this.toggleButtonClass();
  };

  _proto.toggleInputType = function toggleInputType() {
    this.input.setAttribute('type', this.isPasswordShown ? 'text' : 'password');
  };

  _proto.toggleButtonClass = function toggleButtonClass() {
    this.button.classList.toggle(this.buttonToggleClassName, this.isPasswordShown);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(PasswordField, [{
    key: "buttonClassName",
    get: function get() {
      return this.getAttribute('button-class-name');
    }
  }, {
    key: "buttonToggleClassName",
    get: function get() {
      return this.getAttribute('button-toggle-class-name');
    }
  }]);

  return PasswordField;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcGFzc3dvcmQtZmllbGQvcGFzc3dvcmQtZmllbGQudHMiXSwibmFtZXMiOlsiUGFzc3dvcmRGaWVsZCIsImlzUGFzc3dvcmRTaG93biIsImJ1dHRvbiIsImlucHV0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiYnV0dG9uQ2xhc3NOYW1lIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwQnV0dG9uQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwidG9nZ2xlSW5wdXRUeXBlIiwidG9nZ2xlQnV0dG9uQ2xhc3MiLCJzZXRBdHRyaWJ1dGUiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJidXR0b25Ub2dnbGVDbGFzc05hbWUiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLGE7Ozs7Ozs7Ozs7O1VBQ1BDLGUsR0FBa0IsSztVQUNsQkMsTTtVQUNBQyxLOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtILE1BQUwsR0FBMkIsS0FBS0ksc0JBQUwsQ0FBNEIsS0FBS0MsZUFBakMsRUFBa0QsQ0FBbEQsQ0FBM0I7QUFDQSxTQUFLSixLQUFMLEdBQStCLEtBQUtHLHNCQUFMLENBQStCLEtBQUtFLE1BQXBDLGNBQXFELENBQXJELENBQS9CO0FBRUEsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFDeEIsU0FBS0MsbUJBQUw7QUFDSCxHOztTQUVTQSxtQixHQUFWLCtCQUFzQztBQUFBOztBQUNsQyxTQUFLUixNQUFMLENBQVlTLGdCQUFaLENBQTZCLE9BQTdCLEVBQXNDO0FBQUEsYUFBTSxNQUFJLENBQUNDLE9BQUwsRUFBTjtBQUFBLEtBQXRDO0FBQ0gsRzs7U0FFU0EsTyxHQUFWLG1CQUEwQjtBQUN0QixTQUFLWCxlQUFMLEdBQXVCLENBQUMsS0FBS0EsZUFBN0I7QUFFQSxTQUFLWSxlQUFMO0FBQ0EsU0FBS0MsaUJBQUw7QUFDSCxHOztTQUVTRCxlLEdBQVYsMkJBQWtDO0FBQzlCLFNBQUtWLEtBQUwsQ0FBV1ksWUFBWCxDQUF3QixNQUF4QixFQUFnQyxLQUFLZCxlQUFMLEdBQXVCLE1BQXZCLEdBQWdDLFVBQWhFO0FBQ0gsRzs7U0FFU2EsaUIsR0FBViw2QkFBb0M7QUFDaEMsU0FBS1osTUFBTCxDQUFZYyxTQUFaLENBQXNCQyxNQUF0QixDQUE2QixLQUFLQyxxQkFBbEMsRUFBeUQsS0FBS2pCLGVBQTlEO0FBQ0gsRzs7OztTQUVELGVBQXdDO0FBQ3BDLGFBQU8sS0FBS2tCLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBOEM7QUFDMUMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLDBCQUFsQixDQUFQO0FBQ0g7Ozs7RUEzQ3NDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5wYXNzd29yZC1maWVsZC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUGFzc3dvcmRGaWVsZCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGlzUGFzc3dvcmRTaG93biA9IGZhbHNlO1xuICAgIHByb3RlY3RlZCBidXR0b246IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBpbnB1dDogSFRNTElucHV0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmJ1dHRvbiA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5idXR0b25DbGFzc05hbWUpWzBdO1xuICAgICAgICB0aGlzLmlucHV0ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXRgKVswXTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwQnV0dG9uQ2xpY2tFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBCdXR0b25DbGlja0V2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25DbGljaygpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DbGljaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pc1Bhc3N3b3JkU2hvd24gPSAhdGhpcy5pc1Bhc3N3b3JkU2hvd247XG5cbiAgICAgICAgdGhpcy50b2dnbGVJbnB1dFR5cGUoKTtcbiAgICAgICAgdGhpcy50b2dnbGVCdXR0b25DbGFzcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB0b2dnbGVJbnB1dFR5cGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXQuc2V0QXR0cmlidXRlKCd0eXBlJywgdGhpcy5pc1Bhc3N3b3JkU2hvd24gPyAndGV4dCcgOiAncGFzc3dvcmQnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlQnV0dG9uQ2xhc3MoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYnV0dG9uLmNsYXNzTGlzdC50b2dnbGUodGhpcy5idXR0b25Ub2dnbGVDbGFzc05hbWUsIHRoaXMuaXNQYXNzd29yZFNob3duKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGJ1dHRvbkNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2J1dHRvbi1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBidXR0b25Ub2dnbGVDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdidXR0b24tdG9nZ2xlLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9