(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-accordion"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.ts":
/*!*******************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.ts ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerAccordion; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var TogglerAccordion = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(TogglerAccordion, _Component);

  function TogglerAccordion() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.wrap = void 0;
    _this.triggers = void 0;
    _this.isTouch = void 0;
    return _this;
  }

  var _proto = TogglerAccordion.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.wrap = document.getElementsByClassName(this.wrapClassName)[0];
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.isTouch = 'ontouchstart' in window;
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.wrap.addEventListener('click', function (event) {
      return _this2.onTriggerClick(event);
    });
  };

  _proto.onTriggerClick = function onTriggerClick(event) {
    if (this.isTouchScreen) {
      if (this.isTouch) {
        this.initializeClick(event);
      }
    } else {
      this.initializeClick(event);
    }
  };

  _proto.initializeClick = function initializeClick(event) {
    var _this3 = this;

    this.triggers.some(function (trigger) {
      var target = event.target;

      while (target !== _this3.wrap) {
        if (target === trigger) {
          event.preventDefault();

          _this3.toggle(trigger);

          return true;
        }

        target = target.parentNode;
      }
    });
  };

  _proto.toggle = function toggle(activeTrigger) {
    var isTriggerActive = activeTrigger.classList.contains(this.triggerActiveClass);
    activeTrigger.classList.toggle(this.triggerActiveClass, !isTriggerActive);
    this.targetToggle(activeTrigger);
  };

  _proto.targetToggle = function targetToggle(target) {
    var _this4 = this;

    var targets = Array.from(document.querySelectorAll(target.dataset.toggleTarget));
    targets.forEach(function (element) {
      var isTargetActive = !element.classList.contains(_this4.classToToggle);
      element.classList.toggle(_this4.classToToggle, isTargetActive);
    });
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(TogglerAccordion, [{
    key: "wrapClassName",
    get: function get() {
      return this.getAttribute('wrap-class-name');
    }
  }, {
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }, {
    key: "triggerActiveClass",
    get: function get() {
      return this.getAttribute('active-class');
    }
  }, {
    key: "isTouchScreen",
    get: function get() {
      return this.touchRules === 'true';
    }
  }, {
    key: "touchRules",
    get: function get() {
      return this.getAttribute('active-on-touch');
    }
  }]);

  return TogglerAccordion;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1hY2NvcmRpb24vdG9nZ2xlci1hY2NvcmRpb24udHMiXSwibmFtZXMiOlsiVG9nZ2xlckFjY29yZGlvbiIsIndyYXAiLCJ0cmlnZ2VycyIsImlzVG91Y2giLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsIndyYXBDbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwid2luZG93IiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2xpY2siLCJpc1RvdWNoU2NyZWVuIiwiaW5pdGlhbGl6ZUNsaWNrIiwic29tZSIsInRyaWdnZXIiLCJ0YXJnZXQiLCJwcmV2ZW50RGVmYXVsdCIsInRvZ2dsZSIsInBhcmVudE5vZGUiLCJhY3RpdmVUcmlnZ2VyIiwiaXNUcmlnZ2VyQWN0aXZlIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJ0cmlnZ2VyQWN0aXZlQ2xhc3MiLCJ0YXJnZXRUb2dnbGUiLCJ0YXJnZXRzIiwicXVlcnlTZWxlY3RvckFsbCIsImRhdGFzZXQiLCJ0b2dnbGVUYXJnZXQiLCJmb3JFYWNoIiwiZWxlbWVudCIsImlzVGFyZ2V0QWN0aXZlIiwiY2xhc3NUb1RvZ2dsZSIsImdldEF0dHJpYnV0ZSIsInRvdWNoUnVsZXMiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLGdCOzs7Ozs7Ozs7OztVQUNQQyxJO1VBQ0FDLFE7VUFDQUMsTzs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLSixJQUFMLEdBQXlCSyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLGFBQXJDLEVB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Ii4vanMveXZlc19kZWZhdWx0LnRvZ2dsZXItYWNjb3JkaW9uLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBUb2dnbGVyQWNjb3JkaW9uIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgd3JhcDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBpc1RvdWNoOiBib29sZWFuO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMud3JhcCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMud3JhcENsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKSk7XG4gICAgICAgIHRoaXMuaXNUb3VjaCA9ICdvbnRvdWNoc3RhcnQnIGluIHdpbmRvdztcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMud3JhcC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyQ2xpY2soZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyQ2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlzVG91Y2hTY3JlZW4pIHtcbiAgICAgICAgICAgIGlmICh0aGlzLmlzVG91Y2gpIHtcbiAgICAgICAgICAgICAgICB0aGlzLmluaXRpYWxpemVDbGljayhldmVudCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB0aGlzLmluaXRpYWxpemVDbGljayhldmVudCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdGlhbGl6ZUNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLnNvbWUoKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBsZXQgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LnRhcmdldDtcblxuICAgICAgICAgICAgd2hpbGUgKHRhcmdldCAhPT0gdGhpcy53cmFwKSB7XG4gICAgICAgICAgICAgICAgaWYgKHRhcmdldCA9PT0gdHJpZ2dlcikge1xuICAgICAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnRvZ2dsZSh0cmlnZ2VyKTtcblxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gdHJ1ZTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRhcmdldC5wYXJlbnROb2RlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlKGFjdGl2ZVRyaWdnZXI6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlzVHJpZ2dlckFjdGl2ZSA9IGFjdGl2ZVRyaWdnZXIuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMudHJpZ2dlckFjdGl2ZUNsYXNzKTtcbiAgICAgICAgYWN0aXZlVHJpZ2dlci5jbGFzc0xpc3QudG9nZ2xlKHRoaXMudHJpZ2dlckFjdGl2ZUNsYXNzLCAhaXNUcmlnZ2VyQWN0aXZlKTtcbiAgICAgICAgdGhpcy50YXJnZXRUb2dnbGUoYWN0aXZlVHJpZ2dlcik7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRhcmdldFRvZ2dsZSh0YXJnZXQ6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGFyZ2V0LmRhdGFzZXQudG9nZ2xlVGFyZ2V0KSk7XG4gICAgICAgIHRhcmdldHMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnN0IGlzVGFyZ2V0QWN0aXZlID0gIWVsZW1lbnQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBpc1RhcmdldEFjdGl2ZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgd3JhcENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3dyYXAtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckFjdGl2ZUNsYXNzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLWNsYXNzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpc1RvdWNoU2NyZWVuKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy50b3VjaFJ1bGVzID09PSAndHJ1ZSc7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0b3VjaFJ1bGVzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLW9uLXRvdWNoJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==