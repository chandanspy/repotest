(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggle-select-form"],{

/***/ "./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/toggle-select-form/toggle-select-form.ts":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/toggle-select-form/toggle-select-form.ts ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ToggleSelectForm; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var ToggleSelectForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ToggleSelectForm, _Component);

  function ToggleSelectForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.trigger = void 0;
    _this.targets = void 0;
    return _this;
  }

  var _proto = ToggleSelectForm.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.trigger = this.querySelector('[data-select-trigger]');
    this.targets = Array.from(document.getElementsByClassName(this.target));
    this.toggle();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.trigger.addEventListener('change', function (event) {
      return _this2.onTriggerClick(event);
    });
  };

  _proto.onTriggerClick = function onTriggerClick(event) {
    event.preventDefault();
    this.toggle();
  };

  _proto.toggle = function toggle(isForced) {
    var _this3 = this;

    if (isForced === void 0) {
      isForced = this.isSelected;
    }

    this.targets.forEach(function (element) {
      return element.classList.toggle(_this3.classToToggle, isForced);
    });
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ToggleSelectForm, [{
    key: "isSelected",
    get: function get() {
      return this.trigger.value !== '';
    }
  }, {
    key: "target",
    get: function get() {
      return this.trigger.getAttribute('target');
    }
  }, {
    key: "classToToggle",
    get: function get() {
      return this.trigger.getAttribute('class-to-toggle');
    }
  }]);

  return ToggleSelectForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3BwaW5nLWxpc3Qtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BwaW5nTGlzdFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3RvZ2dsZS1zZWxlY3QtZm9ybS90b2dnbGUtc2VsZWN0LWZvcm0udHMiXSwibmFtZXMiOlsiVG9nZ2xlU2VsZWN0Rm9ybSIsInRyaWdnZXIiLCJ0YXJnZXRzIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJxdWVyeVNlbGVjdG9yIiwiQXJyYXkiLCJmcm9tIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwidGFyZ2V0IiwidG9nZ2xlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2xpY2siLCJwcmV2ZW50RGVmYXVsdCIsImlzRm9yY2VkIiwiaXNTZWxlY3RlZCIsImZvckVhY2giLCJlbGVtZW50IiwiY2xhc3NMaXN0IiwiY2xhc3NUb1RvZ2dsZSIsInZhbHVlIiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxnQjs7Ozs7Ozs7Ozs7VUFDUEMsTztVQUNBQyxPOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtILE9BQUwsR0FBa0MsS0FBS0ksYUFBTCxDQUFtQix1QkFBbkIsQ0FBbEM7QUFDQSxTQUFLSCxPQUFMLEdBQThCSSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLQyxNQUFyQyxDQUFYLENBQTlCO0FBQ0EsU0FBS0MsTUFBTDtBQUNBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtYLE9BQUwsQ0FBYVksZ0JBQWIsQ0FBOEIsUUFBOUIsRUFBd0MsVUFBQ0MsS0FBRDtBQUFBLGFBQWtCLE1BQUksQ0FBQ0MsY0FBTCxDQUFvQkQsS0FBcEIsQ0FBbEI7QUFBQSxLQUF4QztBQUNILEc7O1NBRVNDLGMsR0FBVix3QkFBeUJELEtBQXpCLEVBQTZDO0FBQ3pDQSxTQUFLLENBQUNFLGNBQU47QUFDQSxTQUFLTCxNQUFMO0FBQ0gsRzs7U0FFU0EsTSxHQUFWLGdCQUFpQk0sUUFBakIsRUFBNEQ7QUFBQTs7QUFBQSxRQUEzQ0EsUUFBMkM7QUFBM0NBLGNBQTJDLEdBQXZCLEtBQUtDLFVBQWtCO0FBQUE7O0FBQ3hELFNBQUtoQixPQUFMLENBQWFpQixPQUFiLENBQXFCLFVBQUNDLE9BQUQ7QUFBQSxhQUEwQkEsT0FBTyxDQUFDQyxTQUFSLENBQWtCVixNQUFsQixDQUF5QixNQUFJLENBQUNXLGFBQTlCLEVBQTZDTCxRQUE3QyxDQUExQjtBQUFBLEtBQXJCO0FBQ0gsRzs7OztTQUVELGVBQW9DO0FBQ2hDLGFBQU8sS0FBS2hCLE9BQUwsQ0FBYXNCLEtBQWIsS0FBdUIsRUFBOUI7QUFDSDs7O1NBRUQsZUFBK0I7QUFDM0IsYUFBTyxLQUFLdEIsT0FBTCxDQUFhdUIsWUFBYixDQUEwQixRQUExQixDQUFQO0FBQ0g7OztTQUVELGVBQXNDO0FBQ2xDLGFBQU8sS0FBS3ZCLE9BQUwsQ0FBYXVCLFlBQWIsQ0FBMEIsaUJBQTFCLENBQVA7QUFDSDs7OztFQXBDeUNDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnRvZ2dsZS1zZWxlY3QtZm9ybS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgVG9nZ2xlU2VsZWN0Rm9ybSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxTZWxlY3RFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXRzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MU2VsZWN0RWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLXNlbGVjdC10cmlnZ2VyXScpO1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXQpKTtcbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlKGlzRm9yY2VkOiBib29sZWFuID0gdGhpcy5pc1NlbGVjdGVkKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4gZWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuY2xhc3NUb1RvZ2dsZSwgaXNGb3JjZWQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzU2VsZWN0ZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIudmFsdWUgIT09ICcnO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0KCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIuZ2V0QXR0cmlidXRlKCd0YXJnZXQnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMudHJpZ2dlci5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=