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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var CollapsibleList = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(CollapsibleList, _Component);

  function CollapsibleList() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggerButton = void 0;
    _this.targetList = void 0;
    return _this;
  }

  var _proto = CollapsibleList.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggerButton = this.getElementsByClassName(this.jsName + "__button")[0];
    this.targetList = this.getElementsByClassName(this.jsName + "__list")[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapClickEvent();
  };

  _proto.mapClickEvent = function mapClickEvent() {
    var _this2 = this;

    if (!this.triggerButton) {
      return;
    }

    this.triggerButton.addEventListener('click', function () {
      return _this2.onClick();
    });
  };

  _proto.onClick = function onClick() {
    this.targetList.classList.toggle(this.listTriggerClass);
    this.triggerButton.classList.toggle(this.buttonTriggerClass);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(CollapsibleList, [{
    key: "listTriggerClass",
    get: function get() {
      return this.getAttribute('list-trigger-class');
    }
  }, {
    key: "buttonTriggerClass",
    get: function get() {
      return this.getAttribute('button-trigger-class');
    }
  }]);

  return CollapsibleList;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvY29sbGFwc2libGUtbGlzdC9jb2xsYXBzaWJsZS1saXN0LnRzIl0sIm5hbWVzIjpbIkNvbGxhcHNpYmxlTGlzdCIsInRyaWdnZXJCdXR0b24iLCJ0YXJnZXRMaXN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwibGlzdFRyaWdnZXJDbGFzcyIsImJ1dHRvblRyaWdnZXJDbGFzcyIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsZTs7Ozs7Ozs7Ozs7VUFDUEMsYTtVQUNBQyxVOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUEwQixDQUFFLEM7O1NBRWxCQyxJLEdBQVYsZ0JBQWlCO0FBQ2IsU0FBS0gsYUFBTCxHQUF3QyxLQUFLSSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxlQUFzRCxDQUF0RCxDQUF4QztBQUNBLFNBQUtKLFVBQUwsR0FBK0IsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBL0I7QUFFQSxTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUN4QixTQUFLQyxhQUFMO0FBQ0gsRzs7U0FFU0EsYSxHQUFWLHlCQUFnQztBQUFBOztBQUM1QixRQUFJLENBQUMsS0FBS1AsYUFBVixFQUF5QjtBQUNyQjtBQUNIOztBQUVELFNBQUtBLGFBQUwsQ0FBbUJRLGdCQUFuQixDQUFvQyxPQUFwQyxFQUE2QztBQUFBLGFBQU0sTUFBSSxDQUFDQyxPQUFMLEVBQU47QUFBQSxLQUE3QztBQUNILEc7O1NBRVNBLE8sR0FBVixtQkFBMEI7QUFDdEIsU0FBS1IsVUFBTCxDQUFnQlMsU0FBaEIsQ0FBMEJDLE1BQTFCLENBQWlDLEtBQUtDLGdCQUF0QztBQUNBLFNBQUtaLGFBQUwsQ0FBbUJVLFNBQW5CLENBQTZCQyxNQUE3QixDQUFvQyxLQUFLRSxrQkFBekM7QUFDSCxHOzs7O1NBRUQsZUFBeUM7QUFDckMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTJDO0FBQ3ZDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixzQkFBbEIsQ0FBUDtBQUNIOzs7O0VBcEN3Q0MseUQiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY29sbGFwc2libGUtbGlzdC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDb2xsYXBzaWJsZUxpc3QgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0TGlzdDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyQnV0dG9uID0gPEhUTUxCdXR0b25FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbmApWzBdO1xuICAgICAgICB0aGlzLnRhcmdldExpc3QgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGlzdGApWzBdO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBDbGlja0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcENsaWNrRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50cmlnZ2VyQnV0dG9uKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXJCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLm9uQ2xpY2soKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2xpY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0TGlzdC5jbGFzc0xpc3QudG9nZ2xlKHRoaXMubGlzdFRyaWdnZXJDbGFzcyk7XG4gICAgICAgIHRoaXMudHJpZ2dlckJ1dHRvbi5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuYnV0dG9uVHJpZ2dlckNsYXNzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGxpc3RUcmlnZ2VyQ2xhc3MoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdsaXN0LXRyaWdnZXItY2xhc3MnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGJ1dHRvblRyaWdnZXJDbGFzcygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2J1dHRvbi10cmlnZ2VyLWNsYXNzJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==