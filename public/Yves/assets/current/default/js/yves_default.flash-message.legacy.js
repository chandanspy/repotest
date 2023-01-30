(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["flash-message"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/flash-message/flash-message.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/flash-message/flash-message.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FlashMessage; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var FlashMessage = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(FlashMessage, _Component);

  function FlashMessage() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.defaultDuration = 5000;
    _this.durationTimeoutId = void 0;
    return _this;
  }

  var _proto = FlashMessage.prototype;

  _proto.readyCallback = function readyCallback() {
    var _this2 = this;

    this.mapEvents();
    window.setTimeout(function () {
      return _this2.showFor(_this2.defaultDuration);
    });
  };

  _proto.mapEvents = function mapEvents() {
    var _this3 = this;

    this.addEventListener('click', function (event) {
      return _this3.onClick(event);
    });
  };

  _proto.onClick = function onClick(event) {
    event.preventDefault();
    this.hide();
  }
  /**
   * Shows the flash message during the time set.
   * @param duration A number value which defines the period of time for which the flash message is shown.
   */
  ;

  _proto.showFor = function showFor(duration) {
    var _this4 = this;

    this.classList.add(this.name + "--show");
    this.durationTimeoutId = window.setTimeout(function () {
      return _this4.hide();
    }, duration);
  }
  /**
   * Hides the flash message.
   */
  ;

  _proto.hide = function hide() {
    clearTimeout(this.durationTimeoutId);
    this.classList.remove(this.name + "--show");
  };

  return FlashMessage;
}(_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZmxhc2gtbWVzc2FnZS9mbGFzaC1tZXNzYWdlLnRzIl0sIm5hbWVzIjpbIkZsYXNoTWVzc2FnZSIsImRlZmF1bHREdXJhdGlvbiIsImR1cmF0aW9uVGltZW91dElkIiwicmVhZHlDYWxsYmFjayIsIm1hcEV2ZW50cyIsIndpbmRvdyIsInNldFRpbWVvdXQiLCJzaG93Rm9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25DbGljayIsInByZXZlbnREZWZhdWx0IiwiaGlkZSIsImR1cmF0aW9uIiwiY2xhc3NMaXN0IiwiYWRkIiwibmFtZSIsImNsZWFyVGltZW91dCIsInJlbW92ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsWTs7Ozs7Ozs7Ozs7VUFJUkMsZSxHQUEwQixJO1VBS25DQyxpQjs7Ozs7O1NBRVVDLGEsR0FBVix5QkFBZ0M7QUFBQTs7QUFDNUIsU0FBS0MsU0FBTDtBQUNBQyxVQUFNLENBQUNDLFVBQVAsQ0FBa0I7QUFBQSxhQUFNLE1BQUksQ0FBQ0MsT0FBTCxDQUFhLE1BQUksQ0FBQ04sZUFBbEIsQ0FBTjtBQUFBLEtBQWxCO0FBQ0gsRzs7U0FFU0csUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLSSxnQkFBTCxDQUFzQixPQUF0QixFQUErQixVQUFDQyxLQUFEO0FBQUEsYUFBa0IsTUFBSSxDQUFDQyxPQUFMLENBQWFELEtBQWIsQ0FBbEI7QUFBQSxLQUEvQjtBQUNILEc7O1NBRVNDLE8sR0FBVixpQkFBa0JELEtBQWxCLEVBQXNDO0FBQ2xDQSxTQUFLLENBQUNFLGNBQU47QUFDQSxTQUFLQyxJQUFMO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O1NBQ0lMLE8sR0FBQSxpQkFBUU0sUUFBUixFQUEwQjtBQUFBOztBQUN0QixTQUFLQyxTQUFMLENBQWVDLEdBQWYsQ0FBc0IsS0FBS0MsSUFBM0I7QUFDQSxTQUFLZCxpQkFBTCxHQUF5QkcsTUFBTSxDQUFDQyxVQUFQLENBQWtCO0FBQUEsYUFBTSxNQUFJLENBQUNNLElBQUwsRUFBTjtBQUFBLEtBQWxCLEVBQXFDQyxRQUFyQyxDQUF6QjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUQsSSxHQUFBLGdCQUFPO0FBQ0hLLGdCQUFZLENBQUMsS0FBS2YsaUJBQU4sQ0FBWjtBQUNBLFNBQUtZLFNBQUwsQ0FBZUksTUFBZixDQUF5QixLQUFLRixJQUE5QjtBQUNILEc7OztFQXhDcUNHLHlEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmZsYXNoLW1lc3NhZ2UubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRmxhc2hNZXNzYWdlIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBEZWZhdWx0IGZsYXNoIG1lc3NhZ2Ugc2hvdyBkdXJhdGlvbi5cbiAgICAgKi9cbiAgICByZWFkb25seSBkZWZhdWx0RHVyYXRpb246IG51bWJlciA9IDUwMDA7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgaWQgb2YgZmxhc2ggbWVzc2FnZSB0aW1lb3V0LlxuICAgICAqL1xuICAgIGR1cmF0aW9uVGltZW91dElkOiBudW1iZXI7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICAgICAgd2luZG93LnNldFRpbWVvdXQoKCkgPT4gdGhpcy5zaG93Rm9yKHRoaXMuZGVmYXVsdER1cmF0aW9uKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25DbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmhpZGUoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTaG93cyB0aGUgZmxhc2ggbWVzc2FnZSBkdXJpbmcgdGhlIHRpbWUgc2V0LlxuICAgICAqIEBwYXJhbSBkdXJhdGlvbiBBIG51bWJlciB2YWx1ZSB3aGljaCBkZWZpbmVzIHRoZSBwZXJpb2Qgb2YgdGltZSBmb3Igd2hpY2ggdGhlIGZsYXNoIG1lc3NhZ2UgaXMgc2hvd24uXG4gICAgICovXG4gICAgc2hvd0ZvcihkdXJhdGlvbjogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuY2xhc3NMaXN0LmFkZChgJHt0aGlzLm5hbWV9LS1zaG93YCk7XG4gICAgICAgIHRoaXMuZHVyYXRpb25UaW1lb3V0SWQgPSB3aW5kb3cuc2V0VGltZW91dCgoKSA9PiB0aGlzLmhpZGUoKSwgZHVyYXRpb24pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEhpZGVzIHRoZSBmbGFzaCBtZXNzYWdlLlxuICAgICAqL1xuICAgIGhpZGUoKSB7XG4gICAgICAgIGNsZWFyVGltZW91dCh0aGlzLmR1cmF0aW9uVGltZW91dElkKTtcbiAgICAgICAgdGhpcy5jbGFzc0xpc3QucmVtb3ZlKGAke3RoaXMubmFtZX0tLXNob3dgKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9