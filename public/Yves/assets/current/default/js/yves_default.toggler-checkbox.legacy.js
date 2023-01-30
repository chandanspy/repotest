(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-checkbox"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-checkbox/toggler-checkbox.ts":
/*!*****************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-checkbox/toggler-checkbox.ts ***!
  \*****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerCheckbox; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var TogglerCheckbox = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(TogglerCheckbox, _Component);

  function TogglerCheckbox() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.trigger = void 0;
    _this.targets = void 0;
    _this.event = void 0;
    return _this;
  }

  var _proto = TogglerCheckbox.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
    this.targets = Array.from(document.getElementsByClassName(this.targetClassName));
    this.toggle();
    this.fireToggleEvent();
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
    this.fireToggleEvent();
  };

  _proto.toggle = function toggle(addClass) {
    var _this3 = this;

    if (addClass === void 0) {
      addClass = this.addClass;
    }

    this.targets.forEach(function (element) {
      return element.classList.toggle(_this3.classToToggle, addClass);
    });
  };

  _proto.fireToggleEvent = function fireToggleEvent() {
    this.event = new CustomEvent('toggle');
    this.dispatchEvent(this.event);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(TogglerCheckbox, [{
    key: "addClass",
    get: function get() {
      return this.addClassWhenChecked ? this.trigger.checked : !this.trigger.checked;
    }
  }, {
    key: "targetClassName",
    get: function get() {
      return this.trigger.getAttribute('target-class-name');
    }
  }, {
    key: "classToToggle",
    get: function get() {
      return this.trigger.getAttribute('class-to-toggle');
    }
  }, {
    key: "addClassWhenChecked",
    get: function get() {
      return this.trigger.hasAttribute('add-class-when-checked');
    }
  }]);

  return TogglerCheckbox;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1jaGVja2JveC90b2dnbGVyLWNoZWNrYm94LnRzIl0sIm5hbWVzIjpbIlRvZ2dsZXJDaGVja2JveCIsInRyaWdnZXIiLCJ0YXJnZXRzIiwiZXZlbnQiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsInRhcmdldENsYXNzTmFtZSIsInRvZ2dsZSIsImZpcmVUb2dnbGVFdmVudCIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJvblRyaWdnZXJDbGljayIsInByZXZlbnREZWZhdWx0IiwiYWRkQ2xhc3MiLCJmb3JFYWNoIiwiZWxlbWVudCIsImNsYXNzTGlzdCIsImNsYXNzVG9Ub2dnbGUiLCJDdXN0b21FdmVudCIsImRpc3BhdGNoRXZlbnQiLCJhZGRDbGFzc1doZW5DaGVja2VkIiwiY2hlY2tlZCIsImdldEF0dHJpYnV0ZSIsImhhc0F0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsZTs7Ozs7Ozs7Ozs7VUFDUEMsTztVQUNBQyxPO1VBQ0FDLEs7Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0osT0FBTCxHQUFpQyxLQUFLSyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxnQkFBdUQsQ0FBdkQsQ0FBakM7QUFDQSxTQUFLTCxPQUFMLEdBQThCTSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDSixzQkFBVCxDQUFnQyxLQUFLSyxlQUFyQyxDQUFYLENBQTlCO0FBRUEsU0FBS0MsTUFBTDtBQUNBLFNBQUtDLGVBQUw7QUFDQSxTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLYixPQUFMLENBQWFjLGdCQUFiLENBQThCLFFBQTlCLEVBQXdDLFVBQUNaLEtBQUQ7QUFBQSxhQUFrQixNQUFJLENBQUNhLGNBQUwsQ0FBb0JiLEtBQXBCLENBQWxCO0FBQUEsS0FBeEM7QUFDSCxHOztTQUVTYSxjLEdBQVYsd0JBQXlCYixLQUF6QixFQUE2QztBQUN6Q0EsU0FBSyxDQUFDYyxjQUFOO0FBQ0EsU0FBS0wsTUFBTDtBQUNBLFNBQUtDLGVBQUw7QUFDSCxHOztTQUVERCxNLEdBQUEsZ0JBQU9NLFFBQVAsRUFBZ0Q7QUFBQTs7QUFBQSxRQUF6Q0EsUUFBeUM7QUFBekNBLGNBQXlDLEdBQXJCLEtBQUtBLFFBQWdCO0FBQUE7O0FBQzVDLFNBQUtoQixPQUFMLENBQWFpQixPQUFiLENBQXFCLFVBQUNDLE9BQUQ7QUFBQSxhQUEwQkEsT0FBTyxDQUFDQyxTQUFSLENBQWtCVCxNQUFsQixDQUF5QixNQUFJLENBQUNVLGFBQTlCLEVBQTZDSixRQUE3QyxDQUExQjtBQUFBLEtBQXJCO0FBQ0gsRzs7U0FFREwsZSxHQUFBLDJCQUF3QjtBQUNwQixTQUFLVixLQUFMLEdBQWEsSUFBSW9CLFdBQUosQ0FBZ0IsUUFBaEIsQ0FBYjtBQUNBLFNBQUtDLGFBQUwsQ0FBbUIsS0FBS3JCLEtBQXhCO0FBQ0gsRzs7OztTQUVELGVBQWtDO0FBQzlCLGFBQU8sS0FBS3NCLG1CQUFMLEdBQTJCLEtBQUt4QixPQUFMLENBQWF5QixPQUF4QyxHQUFrRCxDQUFDLEtBQUt6QixPQUFMLENBQWF5QixPQUF2RTtBQUNIOzs7U0FFRCxlQUF3QztBQUNwQyxhQUFPLEtBQUt6QixPQUFMLENBQWEwQixZQUFiLENBQTBCLG1CQUExQixDQUFQO0FBQ0g7OztTQUVELGVBQXNDO0FBQ2xDLGFBQU8sS0FBSzFCLE9BQUwsQ0FBYTBCLFlBQWIsQ0FBMEIsaUJBQTFCLENBQVA7QUFDSDs7O1NBRUQsZUFBNkM7QUFDekMsYUFBTyxLQUFLMUIsT0FBTCxDQUFhMkIsWUFBYixDQUEwQix3QkFBMUIsQ0FBUDtBQUNIOzs7O0VBakR3Q0MsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQudG9nZ2xlci1jaGVja2JveC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgVG9nZ2xlckNoZWNrYm94IGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcjogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0czogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgZXZlbnQ6IEN1c3RvbUV2ZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlciA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RyaWdnZXJgKVswXTtcbiAgICAgICAgdGhpcy50YXJnZXRzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKSk7XG5cbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICAgICAgdGhpcy5maXJlVG9nZ2xlRXZlbnQoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy50b2dnbGUoKTtcbiAgICAgICAgdGhpcy5maXJlVG9nZ2xlRXZlbnQoKTtcbiAgICB9XG5cbiAgICB0b2dnbGUoYWRkQ2xhc3M6IGJvb2xlYW4gPSB0aGlzLmFkZENsYXNzKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4gZWxlbWVudC5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuY2xhc3NUb1RvZ2dsZSwgYWRkQ2xhc3MpKTtcbiAgICB9XG5cbiAgICBmaXJlVG9nZ2xlRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoJ3RvZ2dsZScpO1xuICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQodGhpcy5ldmVudCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhZGRDbGFzcygpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuYWRkQ2xhc3NXaGVuQ2hlY2tlZCA/IHRoaXMudHJpZ2dlci5jaGVja2VkIDogIXRoaXMudHJpZ2dlci5jaGVja2VkO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLnRyaWdnZXIuZ2V0QXR0cmlidXRlKCd0YXJnZXQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy50cmlnZ2VyLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhZGRDbGFzc1doZW5DaGVja2VkKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy50cmlnZ2VyLmhhc0F0dHJpYnV0ZSgnYWRkLWNsYXNzLXdoZW4tY2hlY2tlZCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=