(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-handler"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-handler/form-handler.ts":
/*!*********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-handler/form-handler.ts ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormHandler; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var FormHandler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FormHandler, _Component);

  function FormHandler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.event = void 0;
    _this.triggers = void 0;
    return _this;
  }

  var _proto = FormHandler.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.event = this.getAttribute('event');
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggers.forEach(function (trigger) {
      trigger.addEventListener(_this2.event, function (event) {
        return _this2.onTriggerEvent(event);
      });
    });
  };

  _proto.onTriggerEvent = function onTriggerEvent(event) {
    var trigger = event.currentTarget;
    var form = trigger.closest('form');

    if (this.shouldChangeAction) {
      var newActionName = this.getDataAttribute(trigger, 'data-change-action-to');
      form.action = newActionName;
    }

    if (this.shouldSubmitForm) {
      event.preventDefault();
      form.submit();
    }
  };

  _proto.getDataAttribute = function getDataAttribute(block, attr) {
    return block.getAttribute(attr);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FormHandler, [{
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }, {
    key: "shouldSubmitForm",
    get: function get() {
      return this.submitForm === 'true';
    }
  }, {
    key: "submitForm",
    get: function get() {
      return this.getAttribute('submit-form');
    }
  }, {
    key: "shouldChangeAction",
    get: function get() {
      return this.changeAction === 'true';
    }
  }, {
    key: "changeAction",
    get: function get() {
      return this.getAttribute('change-action');
    }
  }]);

  return FormHandler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1oYW5kbGVyL2Zvcm0taGFuZGxlci50cyJdLCJuYW1lcyI6WyJGb3JtSGFuZGxlciIsImV2ZW50IiwidHJpZ2dlcnMiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEF0dHJpYnV0ZSIsIkFycmF5IiwiZnJvbSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInRyaWdnZXJDbGFzc05hbWUiLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwidHJpZ2dlciIsImFkZEV2ZW50TGlzdGVuZXIiLCJvblRyaWdnZXJFdmVudCIsImN1cnJlbnRUYXJnZXQiLCJmb3JtIiwiY2xvc2VzdCIsInNob3VsZENoYW5nZUFjdGlvbiIsIm5ld0FjdGlvbk5hbWUiLCJnZXREYXRhQXR0cmlidXRlIiwiYWN0aW9uIiwic2hvdWxkU3VibWl0Rm9ybSIsInByZXZlbnREZWZhdWx0Iiwic3VibWl0IiwiYmxvY2siLCJhdHRyIiwic3VibWl0Rm9ybSIsImNoYW5nZUFjdGlvbiIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsVzs7Ozs7Ozs7Ozs7VUFDUEMsSztVQUNBQyxROzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtILEtBQUwsR0FBYSxLQUFLSSxZQUFMLENBQWtCLE9BQWxCLENBQWI7QUFDQSxTQUFLSCxRQUFMLEdBQStCSSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLQyxnQkFBckMsQ0FBWCxDQUEvQjtBQUNBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtULFFBQUwsQ0FBY1UsT0FBZCxDQUFzQixVQUFDQyxPQUFELEVBQTBCO0FBQzVDQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLE1BQUksQ0FBQ2IsS0FBOUIsRUFBcUMsVUFBQ0EsS0FBRDtBQUFBLGVBQWtCLE1BQUksQ0FBQ2MsY0FBTCxDQUFvQmQsS0FBcEIsQ0FBbEI7QUFBQSxPQUFyQztBQUNILEtBRkQ7QUFHSCxHOztTQUVTYyxjLEdBQVYsd0JBQXlCZCxLQUF6QixFQUE2QztBQUN6QyxRQUFNWSxPQUFPLEdBQWdCWixLQUFLLENBQUNlLGFBQW5DO0FBQ0EsUUFBTUMsSUFBSSxHQUFvQkosT0FBTyxDQUFDSyxPQUFSLENBQWdCLE1BQWhCLENBQTlCOztBQUNBLFFBQUksS0FBS0Msa0JBQVQsRUFBNkI7QUFDekIsVUFBTUMsYUFBYSxHQUFHLEtBQUtDLGdCQUFMLENBQXNCUixPQUF0QixFQUErQix1QkFBL0IsQ0FBdEI7QUFDQUksVUFBSSxDQUFDSyxNQUFMLEdBQWNGLGFBQWQ7QUFDSDs7QUFDRCxRQUFJLEtBQUtHLGdCQUFULEVBQTJCO0FBQ3ZCdEIsV0FBSyxDQUFDdUIsY0FBTjtBQUNBUCxVQUFJLENBQUNRLE1BQUw7QUFDSDtBQUNKLEc7O1NBc0JTSixnQixHQUFWLDBCQUEyQkssS0FBM0IsRUFBK0NDLElBQS9DLEVBQXFFO0FBQ2pFLFdBQU9ELEtBQUssQ0FBQ3JCLFlBQU4sQ0FBbUJzQixJQUFuQixDQUFQO0FBQ0gsRzs7OztTQXRCRCxlQUF5QztBQUNyQyxhQUFPLEtBQUt0QixZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTBDO0FBQ3RDLGFBQU8sS0FBS3VCLFVBQUwsS0FBb0IsTUFBM0I7QUFDSDs7O1NBRUQsZUFBbUM7QUFDL0IsYUFBTyxLQUFLdkIsWUFBTCxDQUFrQixhQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTRDO0FBQ3hDLGFBQU8sS0FBS3dCLFlBQUwsS0FBc0IsTUFBN0I7QUFDSDs7O1NBRUQsZUFBcUM7QUFDakMsYUFBTyxLQUFLeEIsWUFBTCxDQUFrQixlQUFsQixDQUFQO0FBQ0g7Ozs7RUFqRG9DeUIsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuZm9ybS1oYW5kbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBGb3JtSGFuZGxlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGV2ZW50OiBzdHJpbmc7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZXZlbnQgPSB0aGlzLmdldEF0dHJpYnV0ZSgnZXZlbnQnKTtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRyaWdnZXJDbGFzc05hbWUpKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIodGhpcy5ldmVudCwgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJFdmVudChldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyRXZlbnQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRyaWdnZXIgPSA8SFRNTEVsZW1lbnQ+ZXZlbnQuY3VycmVudFRhcmdldDtcbiAgICAgICAgY29uc3QgZm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+dHJpZ2dlci5jbG9zZXN0KCdmb3JtJyk7XG4gICAgICAgIGlmICh0aGlzLnNob3VsZENoYW5nZUFjdGlvbikge1xuICAgICAgICAgICAgY29uc3QgbmV3QWN0aW9uTmFtZSA9IHRoaXMuZ2V0RGF0YUF0dHJpYnV0ZSh0cmlnZ2VyLCAnZGF0YS1jaGFuZ2UtYWN0aW9uLXRvJyk7XG4gICAgICAgICAgICBmb3JtLmFjdGlvbiA9IG5ld0FjdGlvbk5hbWU7XG4gICAgICAgIH1cbiAgICAgICAgaWYgKHRoaXMuc2hvdWxkU3VibWl0Rm9ybSkge1xuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIGZvcm0uc3VibWl0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNob3VsZFN1Ym1pdEZvcm0oKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLnN1Ym1pdEZvcm0gPT09ICd0cnVlJztcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHN1Ym1pdEZvcm0oKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzdWJtaXQtZm9ybScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc2hvdWxkQ2hhbmdlQWN0aW9uKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5jaGFuZ2VBY3Rpb24gPT09ICd0cnVlJztcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNoYW5nZUFjdGlvbigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NoYW5nZS1hY3Rpb24nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0RGF0YUF0dHJpYnV0ZShibG9jazogSFRNTEVsZW1lbnQsIGF0dHI6IHN0cmluZyk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiBibG9jay5nZXRBdHRyaWJ1dGUoYXR0cik7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==