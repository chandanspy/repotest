(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-hash"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-hash/toggler-hash.ts":
/*!*********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-hash/toggler-hash.ts ***!
  \*********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerHash; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var TogglerHash = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(TogglerHash, _Component);

  /**
   * Elements targeted by the toggle action.
   */
  function TogglerHash() {
    var _this;

    _this = _Component.call(this) || this;
    /* tslint:disable: deprecation */

    _this.targets = void 0;
    _this.targets = Array.from(_this.targetClassName ? document.getElementsByClassName(_this.targetClassName) : document.querySelectorAll(_this.targetSelector));
    /* tslint:enable: deprecation */

    return _this;
  }

  var _proto = TogglerHash.prototype;

  _proto.readyCallback = function readyCallback() {
    this.checkHash();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    window.addEventListener('hashchange', function (event) {
      return _this2.onHashChange(event);
    });
  };

  _proto.onHashChange = function onHashChange(event) {
    this.checkHash();
  }
  /**
   * Checks the hash and triggers the flexible toggle action.
   */
  ;

  _proto.checkHash = function checkHash() {
    if (this.triggerHash === this.hash) {
      this.toggle(this.addClassWhenHashInUrl);
      return;
    }

    this.toggle(!this.addClassWhenHashInUrl);
  }
  /**
   * Toggles the class names in the target elements.
   * @param addClass A boolean value for a more flexible toggling action.
   */
  ;

  _proto.toggle = function toggle(addClass) {
    var _this3 = this;

    this.targets.forEach(function (target) {
      return target.classList.toggle(_this3.classToToggle, addClass);
    });
  }
  /**
   * Gets the current page url.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(TogglerHash, [{
    key: "hash",
    get: function get() {
      return window.location.hash;
    }
    /**
     * Gets the trigger hash.
     */

  }, {
    key: "triggerHash",
    get: function get() {
      return this.getAttribute('trigger-hash');
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
    /**
     * Gets if the element should add the class when in blur.
     */

  }, {
    key: "addClassWhenHashInUrl",
    get: function get() {
      return this.hasAttribute('add-class-when-hash-in-url');
    }
  }]);

  return TogglerHash;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1oYXNoL3RvZ2dsZXItaGFzaC50cyJdLCJuYW1lcyI6WyJUb2dnbGVySGFzaCIsInRhcmdldHMiLCJBcnJheSIsImZyb20iLCJ0YXJnZXRDbGFzc05hbWUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJxdWVyeVNlbGVjdG9yQWxsIiwidGFyZ2V0U2VsZWN0b3IiLCJyZWFkeUNhbGxiYWNrIiwiY2hlY2tIYXNoIiwibWFwRXZlbnRzIiwid2luZG93IiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25IYXNoQ2hhbmdlIiwidHJpZ2dlckhhc2giLCJoYXNoIiwidG9nZ2xlIiwiYWRkQ2xhc3NXaGVuSGFzaEluVXJsIiwiYWRkQ2xhc3MiLCJmb3JFYWNoIiwidGFyZ2V0IiwiY2xhc3NMaXN0IiwiY2xhc3NUb1RvZ2dsZSIsImxvY2F0aW9uIiwiZ2V0QXR0cmlidXRlIiwiaGFzQXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxXOzs7QUFDakI7QUFDSjtBQUNBO0FBR0kseUJBQWM7QUFBQTs7QUFDVjtBQUNBOztBQUZVLFVBRkxDLE9BRUs7QUFHVixVQUFLQSxPQUFMLEdBQ0lDLEtBQUssQ0FBQ0MsSUFBTixDQUNJLE1BQUtDLGVBQUwsR0FDTUMsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxNQUFLRixlQUFyQyxDQUROLEdBRU1DLFFBQVEsQ0FBQ0UsZ0JBQVQsQ0FBMEIsTUFBS0MsY0FBL0IsQ0FIVixDQURKO0FBT0E7O0FBVlU7QUFXYjs7OztTQUVTQyxhLEdBQVYseUJBQWdDO0FBQzVCLFNBQUtDLFNBQUw7QUFDQSxTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QkMsVUFBTSxDQUFDQyxnQkFBUCxDQUF3QixZQUF4QixFQUFzQyxVQUFDQyxLQUFEO0FBQUEsYUFBa0IsTUFBSSxDQUFDQyxZQUFMLENBQWtCRCxLQUFsQixDQUFsQjtBQUFBLEtBQXRDO0FBQ0gsRzs7U0FFU0MsWSxHQUFWLHNCQUF1QkQsS0FBdkIsRUFBMkM7QUFDdkMsU0FBS0osU0FBTDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUEsUyxHQUFBLHFCQUFrQjtBQUNkLFFBQUksS0FBS00sV0FBTCxLQUFxQixLQUFLQyxJQUE5QixFQUFvQztBQUNoQyxXQUFLQyxNQUFMLENBQVksS0FBS0MscUJBQWpCO0FBRUE7QUFDSDs7QUFFRCxTQUFLRCxNQUFMLENBQVksQ0FBQyxLQUFLQyxxQkFBbEI7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7U0FDSUQsTSxHQUFBLGdCQUFPRSxRQUFQLEVBQWdDO0FBQUE7O0FBQzVCLFNBQUtuQixPQUFMLENBQWFvQixPQUFiLENBQXFCLFVBQUNDLE1BQUQ7QUFBQSxhQUF5QkEsTUFBTSxDQUFDQyxTQUFQLENBQWlCTCxNQUFqQixDQUF3QixNQUFJLENBQUNNLGFBQTdCLEVBQTRDSixRQUE1QyxDQUF6QjtBQUFBLEtBQXJCO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7O1NBQ0ksZUFBbUI7QUFDZixhQUFPUixNQUFNLENBQUNhLFFBQVAsQ0FBZ0JSLElBQXZCO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUEwQjtBQUN0QixhQUFPLEtBQUtTLFlBQUwsQ0FBa0IsY0FBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7QUFDQTs7OztTQUNJLGVBQTZCO0FBQ3pCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOzs7U0FDRCxlQUF3QztBQUNwQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQTRCO0FBQ3hCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBcUM7QUFDakMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLDRCQUFsQixDQUFQO0FBQ0g7Ozs7RUEzRm9DQyx5RCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC50b2dnbGVyLWhhc2gubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgVG9nZ2xlckhhc2ggZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIEVsZW1lbnRzIHRhcmdldGVkIGJ5IHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IHRhcmdldHM6IEhUTUxFbGVtZW50W107XG5cbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoKTtcbiAgICAgICAgLyogdHNsaW50OmRpc2FibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMudGFyZ2V0cyA9IDxIVE1MRWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20oXG4gICAgICAgICAgICAgICAgdGhpcy50YXJnZXRDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVxuICAgICAgICAgICAgICAgICAgICA6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy50YXJnZXRTZWxlY3RvciksXG4gICAgICAgICAgICApXG4gICAgICAgICk7XG4gICAgICAgIC8qIHRzbGludDplbmFibGU6IGRlcHJlY2F0aW9uICovXG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2hlY2tIYXNoKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2hhc2hjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uSGFzaENoYW5nZShldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkhhc2hDaGFuZ2UoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2hlY2tIYXNoKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogQ2hlY2tzIHRoZSBoYXNoIGFuZCB0cmlnZ2VycyB0aGUgZmxleGlibGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICBjaGVja0hhc2goKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnRyaWdnZXJIYXNoID09PSB0aGlzLmhhc2gpIHtcbiAgICAgICAgICAgIHRoaXMudG9nZ2xlKHRoaXMuYWRkQ2xhc3NXaGVuSGFzaEluVXJsKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50b2dnbGUoIXRoaXMuYWRkQ2xhc3NXaGVuSGFzaEluVXJsKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBUb2dnbGVzIHRoZSBjbGFzcyBuYW1lcyBpbiB0aGUgdGFyZ2V0IGVsZW1lbnRzLlxuICAgICAqIEBwYXJhbSBhZGRDbGFzcyBBIGJvb2xlYW4gdmFsdWUgZm9yIGEgbW9yZSBmbGV4aWJsZSB0b2dnbGluZyBhY3Rpb24uXG4gICAgICovXG4gICAgdG9nZ2xlKGFkZENsYXNzOiBib29sZWFuKTogdm9pZCB7XG4gICAgICAgIHRoaXMudGFyZ2V0cy5mb3JFYWNoKCh0YXJnZXQ6IEhUTUxFbGVtZW50KSA9PiB0YXJnZXQuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmNsYXNzVG9Ub2dnbGUsIGFkZENsYXNzKSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgY3VycmVudCBwYWdlIHVybC5cbiAgICAgKi9cbiAgICBnZXQgaGFzaCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gd2luZG93LmxvY2F0aW9uLmhhc2g7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgdHJpZ2dlciBoYXNoLlxuICAgICAqL1xuICAgIGdldCB0cmlnZ2VySGFzaCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItaGFzaCcpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG9mIHRoZSB0YXJnZXQgZWxlbWVudC5cbiAgICAgKlxuICAgICAqIEBkZXByZWNhdGVkIFVzZSB0YXJnZXRDbGFzc05hbWUoKSBpbnN0ZWFkLlxuICAgICAqL1xuICAgIGdldCB0YXJnZXRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1zZWxlY3RvcicpO1xuICAgIH1cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNsYXNzIG5hbWUgZm9yIHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgZWxlbWVudCBzaG91bGQgYWRkIHRoZSBjbGFzcyB3aGVuIGluIGJsdXIuXG4gICAgICovXG4gICAgZ2V0IGFkZENsYXNzV2hlbkhhc2hJblVybCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdhZGQtY2xhc3Mtd2hlbi1oYXNoLWluLXVybCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=