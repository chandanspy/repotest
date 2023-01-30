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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var ShoppingListNoteToggler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(ShoppingListNoteToggler, _Component);

  function ShoppingListNoteToggler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.label = void 0;
    _this.trigger = void 0;
    _this.noteTextFieldWrapper = void 0;
    _this.noteTextarea = void 0;
    _this.hiddenClass = 'is-hidden';
    return _this;
  }

  var _proto = ShoppingListNoteToggler.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.label = this.getElementsByClassName(this.jsName + "__label")[0];
    this.trigger = this.getElementsByClassName(this.jsName + "__title")[0];
    this.noteTextFieldWrapper = this.getElementsByClassName(this.jsName + "__wrapper")[0];
    this.noteTextarea = this.getElementsByClassName(this.jsName + "__note-textarea")[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    if (this.label) {
      this.label.addEventListener('click', function (event) {
        return _this2.onClick(event);
      });
    }
  };

  _proto.onClick = function onClick(event) {
    event.preventDefault();
    this.toggleClass([this.label, this.trigger, this.noteTextFieldWrapper]);
    this.focusTextarea();
  };

  _proto.toggleClass = function toggleClass(elementsToToggle) {
    var _this3 = this;

    elementsToToggle.forEach(function (element) {
      element.classList.toggle(_this3.hiddenClass);
    });
  };

  _proto.focusTextarea = function focusTextarea() {
    this.noteTextarea.focus();
  };

  return ShoppingListNoteToggler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcHBpbmdMaXN0Tm90ZVdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Nob3BwaW5nLWxpc3Qtbm90ZS10b2dnbGVyL3Nob3BwaW5nLWxpc3Qtbm90ZS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIlNob3BwaW5nTGlzdE5vdGVUb2dnbGVyIiwibGFiZWwiLCJ0cmlnZ2VyIiwibm90ZVRleHRGaWVsZFdyYXBwZXIiLCJub3RlVGV4dGFyZWEiLCJoaWRkZW5DbGFzcyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uQ2xpY2siLCJwcmV2ZW50RGVmYXVsdCIsInRvZ2dsZUNsYXNzIiwiZm9jdXNUZXh0YXJlYSIsImVsZW1lbnRzVG9Ub2dnbGUiLCJmb3JFYWNoIiwiZWxlbWVudCIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImZvY3VzIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSx1Qjs7Ozs7Ozs7Ozs7VUFDUEMsSztVQUNBQyxPO1VBQ0FDLG9CO1VBQ0FDLFk7VUFDQUMsVyxHQUFzQixXOzs7Ozs7U0FFdEJDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLTixLQUFMLEdBQTBCLEtBQUtPLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGNBQXFELENBQXJELENBQTFCO0FBQ0EsU0FBS1AsT0FBTCxHQUE0QixLQUFLTSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxjQUFxRCxDQUFyRCxDQUE1QjtBQUNBLFNBQUtOLG9CQUFMLEdBQTZDLEtBQUtLLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGdCQUF1RCxDQUF2RCxDQUE3QztBQUNBLFNBQUtMLFlBQUwsR0FBcUMsS0FBS0ksc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsc0JBQTZELENBQTdELENBQXJDO0FBQ0EsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsUUFBSSxLQUFLVCxLQUFULEVBQWdCO0FBQ1osV0FBS0EsS0FBTCxDQUFXVSxnQkFBWCxDQUE0QixPQUE1QixFQUFxQyxVQUFDQyxLQUFEO0FBQUEsZUFBa0IsTUFBSSxDQUFDQyxPQUFMLENBQWFELEtBQWIsQ0FBbEI7QUFBQSxPQUFyQztBQUNIO0FBQ0osRzs7U0FFT0MsTyxHQUFSLGlCQUFnQkQsS0FBaEIsRUFBb0M7QUFDaENBLFNBQUssQ0FBQ0UsY0FBTjtBQUNBLFNBQUtDLFdBQUwsQ0FBaUIsQ0FBQyxLQUFLZCxLQUFOLEVBQWEsS0FBS0MsT0FBbEIsRUFBMkIsS0FBS0Msb0JBQWhDLENBQWpCO0FBQ0EsU0FBS2EsYUFBTDtBQUNILEc7O1NBRU9ELFcsR0FBUixxQkFBb0JFLGdCQUFwQixFQUEyRDtBQUFBOztBQUN2REEsb0JBQWdCLENBQUNDLE9BQWpCLENBQXlCLFVBQUNDLE9BQUQsRUFBYTtBQUNsQ0EsYUFBTyxDQUFDQyxTQUFSLENBQWtCQyxNQUFsQixDQUF5QixNQUFJLENBQUNoQixXQUE5QjtBQUNILEtBRkQ7QUFHSCxHOztTQUVPVyxhLEdBQVIseUJBQThCO0FBQzFCLFNBQUtaLFlBQUwsQ0FBa0JrQixLQUFsQjtBQUNILEc7OztFQXJDZ0RDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNob3BwaW5nLWxpc3Qtbm90ZS10b2dnbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTaG9wcGluZ0xpc3ROb3RlVG9nZ2xlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGxhYmVsOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIG5vdGVUZXh0RmllbGRXcmFwcGVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgbm90ZVRleHRhcmVhOiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGhpZGRlbkNsYXNzOiBzdHJpbmcgPSAnaXMtaGlkZGVuJztcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmxhYmVsID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xhYmVsYClbMF07XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190aXRsZWApWzBdO1xuICAgICAgICB0aGlzLm5vdGVUZXh0RmllbGRXcmFwcGVyID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X193cmFwcGVyYClbMF07XG4gICAgICAgIHRoaXMubm90ZVRleHRhcmVhID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19ub3RlLXRleHRhcmVhYClbMF07XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMubGFiZWwpIHtcbiAgICAgICAgICAgIHRoaXMubGFiZWwuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByaXZhdGUgb25DbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGVDbGFzcyhbdGhpcy5sYWJlbCwgdGhpcy50cmlnZ2VyLCB0aGlzLm5vdGVUZXh0RmllbGRXcmFwcGVyXSk7XG4gICAgICAgIHRoaXMuZm9jdXNUZXh0YXJlYSgpO1xuICAgIH1cblxuICAgIHByaXZhdGUgdG9nZ2xlQ2xhc3MoZWxlbWVudHNUb1RvZ2dsZTogSFRNTEVsZW1lbnRbXSk6IHZvaWQge1xuICAgICAgICBlbGVtZW50c1RvVG9nZ2xlLmZvckVhY2goKGVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmhpZGRlbkNsYXNzKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJpdmF0ZSBmb2N1c1RleHRhcmVhKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm5vdGVUZXh0YXJlYS5mb2N1cygpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=