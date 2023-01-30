(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-click"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts":
/*!***********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerClick; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_components_molecules_toggler_click_toggler_click__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/components/molecules/toggler-click/toggler-click */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts");




var TogglerClick = /*#__PURE__*/function (_TogglerClickCore) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(TogglerClick, _TogglerClickCore);

  function TogglerClick() {
    return _TogglerClickCore.apply(this, arguments) || this;
  }

  var _proto = TogglerClick.prototype;

  _proto.onTriggerClick = function onTriggerClick(event) {
    _TogglerClickCore.prototype.onTriggerClick.call(this, event);

    this.onTriggerToggleClass(event);
  };

  _proto.onTriggerToggleClass = function onTriggerToggleClass(event) {
    if (!this.triggerClassToToggle.length) {
      return;
    }

    var triggerTarget = event.currentTarget;
    triggerTarget.classList.toggle(this.triggerClassToToggle);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(TogglerClick, [{
    key: "triggerClassToToggle",
    get: function get() {
      return this.getAttribute('trigger-class-to-toggle');
    }
  }]);

  return TogglerClick;
}(ShopUi_components_molecules_toggler_click_toggler_click__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerClick; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var TogglerClick = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(TogglerClick, _Component);

  function TogglerClick() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.triggersList = void 0;
    _this.targets = void 0;
    _this.targetsList = void 0;
    return _this;
  }

  var _proto = TogglerClick.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    /* tslint:disable: deprecation */
    this.triggersList = Array.from(this.triggerClassName ? document.getElementsByClassName(this.triggerClassName) : document.querySelectorAll(this.triggerSelector));
    this.targetsList = Array.from(this.targetClassName ? document.getElementsByClassName(this.targetClassName) : document.querySelectorAll(this.targetSelector));
    var _ref = [this.triggersList, this.targetsList];
    this.triggers = _ref[0];
    this.targets = _ref[1];

    /* tslint:enable: deprecation */
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggersList.forEach(function (trigger) {
      trigger.addEventListener('click', function (event) {
        return _this2.onTriggerClick(event);
      });
    });
  };

  _proto.onTriggerClick = function onTriggerClick(event) {
    event.preventDefault();
    this.toggle();
  }
  /**
   * Toggles the class names in the target elements.
   */
  ;

  _proto.toggle = function toggle() {
    var _this3 = this;

    this.targetsList.forEach(function (target) {
      var addClass = !target.classList.contains(_this3.classToToggle);
      target.classList.toggle(_this3.classToToggle, addClass);
    });
  }
  /**
   * Gets a querySelector of the trigger element.
   *
   * @deprecated Use triggerClassName() instead.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(TogglerClick, [{
    key: "triggerSelector",
    get: function get() {
      return this.getAttribute('trigger-selector');
    }
  }, {
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
    /**
     * Gets a querySelector of the target element.
     *
     * @deprecated Use targetClassName() instead.
     */

  }, {
    key: "targetSelector",
    get: function get() {
      return this.getAttribute('target-selector');
    }
  }, {
    key: "targetClassName",
    get: function get() {
      return this.getAttribute('target-class-name');
    }
    /**
     * Gets a class name for the toggle action.
     */

  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }]);

  return TogglerClick;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1jbGljay90b2dnbGVyLWNsaWNrLnRzIiwid2VicGFjazovLy8uL3ZlbmRvci9zcHJ5a2VyLXNob3Avc2hvcC11aS9zcmMvU3ByeWtlclNob3AvWXZlcy9TaG9wVWkvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy90b2dnbGVyLWNsaWNrL3RvZ2dsZXItY2xpY2sudHMiXSwibmFtZXMiOlsiVG9nZ2xlckNsaWNrIiwib25UcmlnZ2VyQ2xpY2siLCJldmVudCIsIm9uVHJpZ2dlclRvZ2dsZUNsYXNzIiwidHJpZ2dlckNsYXNzVG9Ub2dnbGUiLCJsZW5ndGgiLCJ0cmlnZ2VyVGFyZ2V0IiwiY3VycmVudFRhcmdldCIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImdldEF0dHJpYnV0ZSIsIlRvZ2dsZXJDbGlja0NvcmUiLCJ0cmlnZ2VycyIsInRyaWdnZXJzTGlzdCIsInRhcmdldHMiLCJ0YXJnZXRzTGlzdCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwidHJpZ2dlckNsYXNzTmFtZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJ0cmlnZ2VyU2VsZWN0b3IiLCJ0YXJnZXRDbGFzc05hbWUiLCJ0YXJnZXRTZWxlY3RvciIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJ0cmlnZ2VyIiwiYWRkRXZlbnRMaXN0ZW5lciIsInByZXZlbnREZWZhdWx0IiwidGFyZ2V0IiwiYWRkQ2xhc3MiLCJjb250YWlucyIsImNsYXNzVG9Ub2dnbGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLFk7Ozs7Ozs7OztTQUNQQyxjLEdBQVYsd0JBQXlCQyxLQUF6QixFQUE2QztBQUN6QyxnQ0FBTUQsY0FB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QUFDSDs7OztFQTNGcUMwQix5RCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC50b2dnbGVyLWNsaWNrLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBUb2dnbGVyQ2xpY2tDb3JlIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy90b2dnbGVyLWNsaWNrL3RvZ2dsZXItY2xpY2snO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQ2xpY2sgZXh0ZW5kcyBUb2dnbGVyQ2xpY2tDb3JlIHtcbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm9uVHJpZ2dlckNsaWNrKGV2ZW50KTtcbiAgICAgICAgdGhpcy5vblRyaWdnZXJUb2dnbGVDbGFzcyhldmVudCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclRvZ2dsZUNsYXNzKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMudHJpZ2dlckNsYXNzVG9Ub2dnbGUubGVuZ3RoKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCB0cmlnZ2VyVGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIHRyaWdnZXJUYXJnZXQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLnRyaWdnZXJDbGFzc1RvVG9nZ2xlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQ2xpY2sgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRyaWdnZXJpbmcgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlcnNMaXN0IGluc3RlYWQuXG4gICAgICovXG4gICAgdHJpZ2dlcnM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzTGlzdDogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRhcmdldGVkIGJ5IHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHRhcmdldHNMaXN0IGluc3RlYWQuXG4gICAgICovXG4gICAgdGFyZ2V0czogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0c0xpc3Q6IEhUTUxFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgLyogdHNsaW50OmRpc2FibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMudHJpZ2dlcnNMaXN0ID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbShcbiAgICAgICAgICAgICAgICB0aGlzLnRyaWdnZXJDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSlcbiAgICAgICAgICAgICAgICAgICAgOiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKHRoaXMudHJpZ2dlclNlbGVjdG9yKSxcbiAgICAgICAgICAgIClcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy50YXJnZXRzTGlzdCA9IDxIVE1MRWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20oXG4gICAgICAgICAgICAgICAgdGhpcy50YXJnZXRDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVxuICAgICAgICAgICAgICAgICAgICA6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy50YXJnZXRTZWxlY3RvciksXG4gICAgICAgICAgICApXG4gICAgICAgICk7XG4gICAgICAgIFt0aGlzLnRyaWdnZXJzLCB0aGlzLnRhcmdldHNdID0gW3RoaXMudHJpZ2dlcnNMaXN0LCB0aGlzLnRhcmdldHNMaXN0XTtcbiAgICAgICAgLyogdHNsaW50OmVuYWJsZTogZGVwcmVjYXRpb24gKi9cblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnNMaXN0LmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMudG9nZ2xlKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogVG9nZ2xlcyB0aGUgY2xhc3MgbmFtZXMgaW4gdGhlIHRhcmdldCBlbGVtZW50cy5cbiAgICAgKi9cbiAgICB0b2dnbGUoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0c0xpc3QuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3QgYWRkQ2xhc3MgPSAhdGFyZ2V0LmNsYXNzTGlzdC5jb250YWlucyh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICAgICAgdGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBhZGRDbGFzcyk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlckNsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3Igb2YgdGhlIHRhcmdldCBlbGVtZW50LlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHRhcmdldENsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgY2xhc3MgbmFtZSBmb3IgdGhlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9