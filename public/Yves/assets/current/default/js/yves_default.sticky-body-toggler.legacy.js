(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["sticky-body-toggler"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/sticky-body-toggler/sticky-body-toggler.ts":
/*!***********************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/sticky-body-toggler/sticky-body-toggler.ts ***!
  \***********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return StickyBodyToggler; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var StickyBodyToggler = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(StickyBodyToggler, _Component);

  function StickyBodyToggler() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.body = void 0;
    return _this;
  }

  var _proto = StickyBodyToggler.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.body = document.body;
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggers.forEach(function (trigger) {
      trigger.addEventListener('click', function () {
        return _this2.toggleStickyBody();
      });
    });
  };

  _proto.toggleStickyBody = function toggleStickyBody() {
    var isBodySticky = this.body.classList.contains(this.classToFixBody);

    if (isBodySticky) {
      var scrollToVal = parseInt(this.body.dataset.scrollTo);
      this.body.style.top = '0';
      this.body.classList.remove(this.classToFixBody);
      window.scrollTo(0, scrollToVal);
      return;
    }

    var offset = window.pageYOffset;
    this.body.style.top = -offset + "px";
    this.body.classList.add(this.classToFixBody);
    this.body.dataset.scrollTo = offset.toString();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(StickyBodyToggler, [{
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }, {
    key: "classToFixBody",
    get: function get() {
      return this.getAttribute('class-to-fix-body');
    }
  }]);

  return StickyBodyToggler;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc3RpY2t5LWJvZHktdG9nZ2xlci9zdGlja3ktYm9keS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIlN0aWNreUJvZHlUb2dnbGVyIiwidHJpZ2dlcnMiLCJib2R5IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwibWFwRXZlbnRzIiwiZm9yRWFjaCIsInRyaWdnZXIiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlU3RpY2t5Qm9keSIsImlzQm9keVN0aWNreSIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwiY2xhc3NUb0ZpeEJvZHkiLCJzY3JvbGxUb1ZhbCIsInBhcnNlSW50IiwiZGF0YXNldCIsInNjcm9sbFRvIiwic3R5bGUiLCJ0b3AiLCJyZW1vdmUiLCJ3aW5kb3ciLCJvZmZzZXQiLCJwYWdlWU9mZnNldCIsImFkZCIsInRvU3RyaW5nIiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxpQjs7Ozs7Ozs7Ozs7VUFDUEMsUTtVQUNBQyxJOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtILFFBQUwsR0FBK0JJLEtBQUssQ0FBQ0MsSUFBTixDQUFXQyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLGdCQUFyQyxDQUFYLENBQS9CO0FBQ0EsU0FBS1AsSUFBTCxHQUF5QkssUUFBUSxDQUFDTCxJQUFsQztBQUNBLFNBQUtRLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtULFFBQUwsQ0FBY1UsT0FBZCxDQUFzQixVQUFDQyxPQUFELEVBQTBCO0FBQzVDQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLE9BQXpCLEVBQWtDO0FBQUEsZUFBTSxNQUFJLENBQUNDLGdCQUFMLEVBQU47QUFBQSxPQUFsQztBQUNILEtBRkQ7QUFHSCxHOztTQUVTQSxnQixHQUFWLDRCQUFtQztBQUMvQixRQUFNQyxZQUFZLEdBQUcsS0FBS2IsSUFBTCxDQUFVYyxTQUFWLENBQW9CQyxRQUFwQixDQUE2QixLQUFLQyxjQUFsQyxDQUFyQjs7QUFFQSxRQUFJSCxZQUFKLEVBQWtCO0FBQ2QsVUFBTUksV0FBVyxHQUFHQyxRQUFRLENBQUMsS0FBS2xCLElBQUwsQ0FBVW1CLE9BQVYsQ0FBa0JDLFFBQW5CLENBQTVCO0FBRUEsV0FBS3BCLElBQUwsQ0FBVXFCLEtBQVYsQ0FBZ0JDLEdBQWhCLEdBQXNCLEdBQXRCO0FBQ0EsV0FBS3RCLElBQUwsQ0FBVWMsU0FBVixDQUFvQlMsTUFBcEIsQ0FBMkIsS0FBS1AsY0FBaEM7QUFDQVEsWUFBTSxDQUFDSixRQUFQLENBQWdCLENBQWhCLEVBQW1CSCxXQUFuQjtBQUVBO0FBQ0g7O0FBRUQsUUFBTVEsTUFBTSxHQUFHRCxNQUFNLENBQUNFLFdBQXRCO0FBRUEsU0FBSzFCLElBQUwsQ0FBVXFCLEtBQVYsQ0FBZ0JDLEdBQWhCLEdBQXlCLENBQUNHLE1BQTFCO0FBQ0EsU0FBS3pCLElBQUwsQ0FBVWMsU0FBVixDQUFvQmEsR0FBcEIsQ0FBd0IsS0FBS1gsY0FBN0I7QUFDQSxTQUFLaEIsSUFBTCxDQUFVbUIsT0FBVixDQUFrQkMsUUFBbEIsR0FBNkJLLE1BQU0sQ0FBQ0csUUFBUCxFQUE3QjtBQUNILEc7Ozs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtDLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBdUM7QUFDbkMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7Ozs7RUE1QzBDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5zdGlja3ktYm9keS10b2dnbGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTdGlja3lCb2R5VG9nZ2xlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBib2R5OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSkpO1xuICAgICAgICB0aGlzLmJvZHkgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQuYm9keTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4gdGhpcy50b2dnbGVTdGlja3lCb2R5KCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlU3RpY2t5Qm9keSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNCb2R5U3RpY2t5ID0gdGhpcy5ib2R5LmNsYXNzTGlzdC5jb250YWlucyh0aGlzLmNsYXNzVG9GaXhCb2R5KTtcblxuICAgICAgICBpZiAoaXNCb2R5U3RpY2t5KSB7XG4gICAgICAgICAgICBjb25zdCBzY3JvbGxUb1ZhbCA9IHBhcnNlSW50KHRoaXMuYm9keS5kYXRhc2V0LnNjcm9sbFRvKTtcblxuICAgICAgICAgICAgdGhpcy5ib2R5LnN0eWxlLnRvcCA9ICcwJztcbiAgICAgICAgICAgIHRoaXMuYm9keS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuY2xhc3NUb0ZpeEJvZHkpO1xuICAgICAgICAgICAgd2luZG93LnNjcm9sbFRvKDAsIHNjcm9sbFRvVmFsKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3Qgb2Zmc2V0ID0gd2luZG93LnBhZ2VZT2Zmc2V0O1xuXG4gICAgICAgIHRoaXMuYm9keS5zdHlsZS50b3AgPSBgJHstb2Zmc2V0fXB4YDtcbiAgICAgICAgdGhpcy5ib2R5LmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvRml4Qm9keSk7XG4gICAgICAgIHRoaXMuYm9keS5kYXRhc2V0LnNjcm9sbFRvID0gb2Zmc2V0LnRvU3RyaW5nKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvRml4Qm9keSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLWZpeC1ib2R5Jyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==