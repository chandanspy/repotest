(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["order-buttons-disable-toggler"],{

/***/ "./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/order-buttons-disable-toggler/order-buttons-disable-toggler.ts":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/sales-return-page/src/SprykerShop/Yves/SalesReturnPage/Theme/default/components/molecules/order-buttons-disable-toggler/order-buttons-disable-toggler.ts ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return OrderButtonsDisableToggler; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var OrderButtonsDisableToggler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(OrderButtonsDisableToggler, _Component);

  function OrderButtonsDisableToggler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.targets = void 0;
    return _this;
  }

  var _proto = OrderButtonsDisableToggler.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.targets = Array.from(document.getElementsByClassName(this.targetClassName));
    this.toggleButtonState();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerChangeEvent();
    this.mapTargetClickEvent();
  };

  _proto.mapTriggerChangeEvent = function mapTriggerChangeEvent() {
    var _this2 = this;

    this.triggers.forEach(function (trigger) {
      trigger.addEventListener('change', function () {
        return _this2.onTriggerChange();
      });
    });
  };

  _proto.mapTargetClickEvent = function mapTargetClickEvent() {
    var _this3 = this;

    this.targets.forEach(function (target) {
      target.addEventListener('click', function (event) {
        return _this3.onTargetClick(event, target);
      });
    });
  };

  _proto.onTriggerChange = function onTriggerChange() {
    this.toggleButtonState();
  };

  _proto.toggleButtonState = function toggleButtonState() {
    var checkedTriggers = this.triggers.filter(function (checkbox) {
      return checkbox.checked;
    });
    this.toggleTargets(checkedTriggers);
  };

  _proto.toggleTargets = function toggleTargets(checkedTriggers) {
    if (Boolean(checkedTriggers.length) === this.isDisabledWhenChecked) {
      this.enableTargets();
      return;
    }

    this.disableTargets();
  };

  _proto.onTargetClick = function onTargetClick(event, target) {
    if (target.classList.contains(this.disabledClassName)) {
      event.preventDefault();
    }
  };

  _proto.disableTargets = function disableTargets() {
    var _this4 = this;

    this.targets.forEach(function (target) {
      if (target.tagName === 'A') {
        target.classList.add(_this4.disabledClassName);
        return;
      }

      if (target.tagName === 'BUTTON') {
        target.setAttribute('disabled', 'disabled');
      }
    });
  };

  _proto.enableTargets = function enableTargets() {
    var _this5 = this;

    this.targets.forEach(function (target) {
      if (target.tagName === 'BUTTON') {
        target.removeAttribute('disabled');
        return;
      }

      target.classList.remove(_this5.disabledClassName);
    });
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(OrderButtonsDisableToggler, [{
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }, {
    key: "targetClassName",
    get: function get() {
      return this.getAttribute('target-class-name');
    }
  }, {
    key: "isDisabledWhenChecked",
    get: function get() {
      var attributeValue = this.getAttribute('is-disabled-when-checked');
      return attributeValue === 'true';
    }
  }, {
    key: "disabledClassName",
    get: function get() {
      return this.getAttribute('disabled-class-name');
    }
  }]);

  return OrderButtonsDisableToggler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3NhbGVzLXJldHVybi1wYWdlL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1NhbGVzUmV0dXJuUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL29yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyL29yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIk9yZGVyQnV0dG9uc0Rpc2FibGVUb2dnbGVyIiwidHJpZ2dlcnMiLCJ0YXJnZXRzIiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwidGFyZ2V0Q2xhc3NOYW1lIiwidG9nZ2xlQnV0dG9uU3RhdGUiLCJtYXBFdmVudHMiLCJtYXBUcmlnZ2VyQ2hhbmdlRXZlbnQiLCJtYXBUYXJnZXRDbGlja0V2ZW50IiwiZm9yRWFjaCIsInRyaWdnZXIiLCJhZGRFdmVudExpc3RlbmVyIiwib25UcmlnZ2VyQ2hhbmdlIiwidGFyZ2V0IiwiZXZlbnQiLCJvblRhcmdldENsaWNrIiwiY2hlY2tlZFRyaWdnZXJzIiwiZmlsdGVyIiwiY2hlY2tib3giLCJjaGVja2VkIiwidG9nZ2xlVGFyZ2V0cyIsIkJvb2xlYW4iLCJsZW5ndGgiLCJpc0Rpc2FibGVkV2hlbkNoZWNrZWQiLCJlbmFibGVUYXJnZXRzIiwiZGlzYWJsZVRhcmdldHMiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImRpc2FibGVkQ2xhc3NOYW1lIiwicHJldmVudERlZmF1bHQiLCJ0YWdOYW1lIiwiYWRkIiwic2V0QXR0cmlidXRlIiwicmVtb3ZlQXR0cmlidXRlIiwicmVtb3ZlIiwiZ2V0QXR0cmlidXRlIiwiYXR0cmlidXRlVmFsdWUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLDBC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Q0FBaUJRLE1BQWpCLENBQXdCLE1BQUksQ0FBQ04saUJBQTdCO0FBQ0gsS0FSRDtBQVNILEc7Ozs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtPLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBd0M7QUFDcEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQStDO0FBQzNDLFVBQU1DLGNBQWMsR0FBRyxLQUFLRCxZQUFMLENBQWtCLDBCQUFsQixDQUF2QjtBQUVBLGFBQU9DLGNBQWMsS0FBSyxNQUExQjtBQUNIOzs7U0FFRCxlQUEwQztBQUN0QyxhQUFPLEtBQUtELFlBQUwsQ0FBa0IscUJBQWxCLENBQVA7QUFDSDs7OztFQW5HbURFLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0Lm9yZGVyLWJ1dHRvbnMtZGlzYWJsZS10b2dnbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBPcmRlckJ1dHRvbnNEaXNhYmxlVG9nZ2xlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MSW5wdXRFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHRhcmdldHM6IEhUTUxFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MSW5wdXRFbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSkpO1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXRDbGFzc05hbWUpKTtcblxuICAgICAgICB0aGlzLnRvZ2dsZUJ1dHRvblN0YXRlKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyQ2hhbmdlRXZlbnQoKTtcbiAgICAgICAgdGhpcy5tYXBUYXJnZXRDbGlja0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJDaGFuZ2VFdmVudCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKCh0cmlnZ2VyOiBIVE1MSW5wdXRFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25UcmlnZ2VyQ2hhbmdlKCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVGFyZ2V0Q2xpY2tFdmVudCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50YXJnZXRzLmZvckVhY2goKHRhcmdldDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHRhcmdldC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UYXJnZXRDbGljayhldmVudCwgdGFyZ2V0KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDaGFuZ2UoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudG9nZ2xlQnV0dG9uU3RhdGUoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlQnV0dG9uU3RhdGUoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNoZWNrZWRUcmlnZ2VycyA9IDxIVE1MSW5wdXRFbGVtZW50W10+dGhpcy50cmlnZ2Vycy5maWx0ZXIoKGNoZWNrYm94KSA9PiBjaGVja2JveC5jaGVja2VkKTtcblxuICAgICAgICB0aGlzLnRvZ2dsZVRhcmdldHMoY2hlY2tlZFRyaWdnZXJzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlVGFyZ2V0cyhjaGVja2VkVHJpZ2dlcnM6IEhUTUxJbnB1dEVsZW1lbnRbXSk6IHZvaWQge1xuICAgICAgICBpZiAoQm9vbGVhbihjaGVja2VkVHJpZ2dlcnMubGVuZ3RoKSA9PT0gdGhpcy5pc0Rpc2FibGVkV2hlbkNoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMuZW5hYmxlVGFyZ2V0cygpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc2FibGVUYXJnZXRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVGFyZ2V0Q2xpY2soZXZlbnQ6IEV2ZW50LCB0YXJnZXQ6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGlmICh0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMuZGlzYWJsZWRDbGFzc05hbWUpKSB7XG4gICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGRpc2FibGVUYXJnZXRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldHMuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaWYgKHRhcmdldC50YWdOYW1lID09PSAnQScpIHtcbiAgICAgICAgICAgICAgICB0YXJnZXQuY2xhc3NMaXN0LmFkZCh0aGlzLmRpc2FibGVkQ2xhc3NOYW1lKTtcblxuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgaWYgKHRhcmdldC50YWdOYW1lID09PSAnQlVUVE9OJykge1xuICAgICAgICAgICAgICAgIHRhcmdldC5zZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBlbmFibGVUYXJnZXRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldHMuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaWYgKHRhcmdldC50YWdOYW1lID09PSAnQlVUVE9OJykge1xuICAgICAgICAgICAgICAgIHRhcmdldC5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHRhcmdldC5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuZGlzYWJsZWRDbGFzc05hbWUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpc0Rpc2FibGVkV2hlbkNoZWNrZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIGNvbnN0IGF0dHJpYnV0ZVZhbHVlID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ2lzLWRpc2FibGVkLXdoZW4tY2hlY2tlZCcpO1xuXG4gICAgICAgIHJldHVybiBhdHRyaWJ1dGVWYWx1ZSA9PT0gJ3RydWUnO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZGlzYWJsZWRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdkaXNhYmxlZC1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==