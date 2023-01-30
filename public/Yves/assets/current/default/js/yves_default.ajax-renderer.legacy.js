(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["ajax-renderer"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-renderer/ajax-renderer.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-renderer/ajax-renderer.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AjaxRenderer; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var _ajax_provider_ajax_provider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../ajax-provider/ajax-provider */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-provider/ajax-provider.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");






var AjaxRenderer = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(AjaxRenderer, _Component);

  function AjaxRenderer() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.provider = void 0;
    _this.target = void 0;
    return _this;
  }

  var _proto = AjaxRenderer.prototype;

  _proto.readyCallback = function readyCallback() {
    /* tslint:disable: deprecation */
    this.provider = this.providerClassName ? document.getElementsByClassName(this.providerClassName)[0] : document.querySelector(this.providerSelector);
    this.target = this.targetClassName ? document.getElementsByClassName(this.targetClassName)[0] : document.querySelector(this.targetSelector ? this.targetSelector : undefined);
    /* tslint:enable: deprecation */

    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.provider.addEventListener(_ajax_provider_ajax_provider__WEBPACK_IMPORTED_MODULE_3__["EVENT_FETCHED"], function (event) {
      return _this2.onFetched(event);
    });
  };

  _proto.onFetched = function onFetched(event) {
    this.render();
  }
  /**
   * Gets a response from the server and renders it on the page.
   */
  ;

  _proto.render = function render() {
    var response = this.provider.xhr.response;

    if (!response && !this.renderIfResponseIsEmpty) {
      return;
    }

    if (this.target) {
      this.target.innerHTML = response;
    } else {
      this.innerHTML = response;
    }

    if (this.mountAfterRender) {
      Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_4__["mount"])();
    }
  }
  /**
   * Gets a querySelector name of the provider element.
   *
   * @deprecated Use providerClassName() instead.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(AjaxRenderer, [{
    key: "providerSelector",
    get: function get() {
      return this.getAttribute('provider-selector');
    }
  }, {
    key: "providerClassName",
    get: function get() {
      return this.getAttribute('provider-class-name');
    }
    /**
     * Gets a querySelector name of the target element.
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
     * Gets if the response from the server is empty.
     */

  }, {
    key: "renderIfResponseIsEmpty",
    get: function get() {
      return this.hasAttribute('render-if-response-is-empty');
    }
    /**
     * Gets if the component is mounted after rendering.
     */

  }, {
    key: "mountAfterRender",
    get: function get() {
      return this.hasAttribute('mount-after-render');
    }
  }]);

  return AjaxRenderer;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWpheC1yZW5kZXJlci9hamF4LXJlbmRlcmVyLnRzIl0sIm5hbWVzIjpbIkFqYXhSZW5kZXJlciIsInByb3ZpZGVyIiwidGFyZ2V0IiwicmVhZHlDYWxsYmFjayIsInByb3ZpZGVyQ2xhc3NOYW1lIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwicXVlcnlTZWxlY3RvciIsInByb3ZpZGVyU2VsZWN0b3IiLCJ0YXJnZXRDbGFzc05hbWUiLCJ0YXJnZXRTZWxlY3RvciIsInVuZGVmaW5lZCIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJFVkVOVF9GRVRDSEVEIiwiZXZlbnQiLCJvbkZldGNoZWQiLCJyZW5kZXIiLCJyZXNwb25zZSIsInhociIsInJlbmRlcklmUmVzcG9uc2VJc0VtcHR5IiwiaW5uZXJIVE1MIiwibW91bnRBZnRlclJlbmRlciIsIm1vdW50IiwiZ2V0QXR0cmlidXRlIiwiaGFzQXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7O0lBRXFCQSxZOzs7Ozs7Ozs7OztVQUNQQyxRO1VBQ0FDLE07Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDO0FBQzVCO0FBQ0EsU0FBS0YsUUFBTCxHQUNLLEtBQUtHLGlCQUFMLEdBQ0tDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0YsaUJBQXJDLEVBQXdELENBQXhELENBREwsR0FFS0MsUUFBUSxDQUFDRSxhQUFULENBQXVCLEtBQUtDLGdCQUE1QixDQUhWO0FBS0EsU0FBS04sTUFBTCxHQUNLLEtBQUtPLGVBQUwsR0FDS0osUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLRyxlQUFyQyxFQUFzRCxDQUF0RCxDQURMLEdBRUtKLFFBQVEsQ0FBQ0UsYUFBVCxDQUF1QixLQUFLRyxjQUFMLEdBQXNCLEtBQUtBLGNBQTNCLEdBQTRDQyxTQUFuRSxDQUhWO0FBS0E7O0FBQ0EsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS1gsUUFBTCxDQUFjWSxnQkFBZCxDQUErQkMsMEVBQS9CLEVBQThDLFVBQUNDLEtBQUQ7QUFBQSxhQUFrQixNQUFJLENBQUNDLFNBQUwsQ0FBZUQsS0FBZixDQUFsQjtBQUFBLEtBQTlDO0FBQ0gsRzs7U0FFU0MsUyxHQUFWLG1CQUFvQkQsS0FBcEIsRUFBd0M7QUFDcEMsU0FBS0UsTUFBTDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUEsTSxHQUFBLGtCQUFlO0FBQ1gsUUFBTUMsUUFBUSxHQUFHLEtBQUtqQixRQUFMLENBQWNrQixHQUFkLENBQWtCRCxRQUFuQzs7QUFFQSxRQUFJLENBQUNBLFFBQUQsSUFBYSxDQUFDLEtBQUtFLHVCQUF2QixFQUFnRDtBQUM1QztBQUNIOztBQUVELFFBQUksS0FBS2xCLE1BQVQsRUFBaUI7QUFDYixXQUFLQSxNQUFMLENBQVltQixTQUFaLEdBQXdCSCxRQUF4QjtBQUNILEtBRkQsTUFFTztBQUNILFdBQUtHLFNBQUwsR0FBaUJILFFBQWpCO0FBQ0g7O0FBRUQsUUFBSSxLQUFLSSxnQkFBVCxFQUEyQjtBQUN2QkMsOERBQUs7QUFDUjtBQUNKO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7QUFDQTs7Ozs7U0FDSSxlQUErQjtBQUMzQixhQUFPLEtBQUtDLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7O1NBQ0QsZUFBMEM7QUFDdEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLHFCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTtBQUNBOzs7O1NBQ0ksZUFBNkI7QUFDekIsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7OztTQUNELGVBQXdDO0FBQ3BDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixtQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBdUM7QUFDbkMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLDZCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUFnQztBQUM1QixhQUFPLEtBQUtBLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7OztFQXJGcUNDLHlEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmFqYXgtcmVuZGVyZXIubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBBamF4UHJvdmlkZXIsIHsgRVZFTlRfRkVUQ0hFRCB9IGZyb20gJy4uL2FqYXgtcHJvdmlkZXIvYWpheC1wcm92aWRlcic7XG5pbXBvcnQgeyBtb3VudCB9IGZyb20gJ1Nob3BVaS9hcHAnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBBamF4UmVuZGVyZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBwcm92aWRlcjogQWpheFByb3ZpZGVyO1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIC8qIHRzbGludDpkaXNhYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgICAgICB0aGlzLnByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj4oXG4gICAgICAgICAgICAodGhpcy5wcm92aWRlckNsYXNzTmFtZVxuICAgICAgICAgICAgICAgID8gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnByb3ZpZGVyQ2xhc3NOYW1lKVswXVxuICAgICAgICAgICAgICAgIDogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnByb3ZpZGVyU2VsZWN0b3IpKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD4oXG4gICAgICAgICAgICAodGhpcy50YXJnZXRDbGFzc05hbWVcbiAgICAgICAgICAgICAgICA/IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXRDbGFzc05hbWUpWzBdXG4gICAgICAgICAgICAgICAgOiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRoaXMudGFyZ2V0U2VsZWN0b3IgPyB0aGlzLnRhcmdldFNlbGVjdG9yIDogdW5kZWZpbmVkKSlcbiAgICAgICAgKTtcbiAgICAgICAgLyogdHNsaW50OmVuYWJsZTogZGVwcmVjYXRpb24gKi9cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb3ZpZGVyLmFkZEV2ZW50TGlzdGVuZXIoRVZFTlRfRkVUQ0hFRCwgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbkZldGNoZWQoZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25GZXRjaGVkKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbmRlcigpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSByZXNwb25zZSBmcm9tIHRoZSBzZXJ2ZXIgYW5kIHJlbmRlcnMgaXQgb24gdGhlIHBhZ2UuXG4gICAgICovXG4gICAgcmVuZGVyKCk6IHZvaWQge1xuICAgICAgICBjb25zdCByZXNwb25zZSA9IHRoaXMucHJvdmlkZXIueGhyLnJlc3BvbnNlO1xuXG4gICAgICAgIGlmICghcmVzcG9uc2UgJiYgIXRoaXMucmVuZGVySWZSZXNwb25zZUlzRW1wdHkpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnRhcmdldCkge1xuICAgICAgICAgICAgdGhpcy50YXJnZXQuaW5uZXJIVE1MID0gcmVzcG9uc2U7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICB0aGlzLmlubmVySFRNTCA9IHJlc3BvbnNlO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMubW91bnRBZnRlclJlbmRlcikge1xuICAgICAgICAgICAgbW91bnQoKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIHByb3ZpZGVyIGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgcHJvdmlkZXJDbGFzc05hbWUoKSBpbnN0ZWFkLlxuICAgICAqL1xuICAgIGdldCBwcm92aWRlclNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJvdmlkZXItc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCBwcm92aWRlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3Byb3ZpZGVyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSB0YXJnZXQgZWxlbWVudC5cbiAgICAgKlxuICAgICAqIEBkZXByZWNhdGVkIFVzZSB0YXJnZXRDbGFzc05hbWUoKSBpbnN0ZWFkLlxuICAgICAqL1xuICAgIGdldCB0YXJnZXRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1zZWxlY3RvcicpO1xuICAgIH1cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgcmVzcG9uc2UgZnJvbSB0aGUgc2VydmVyIGlzIGVtcHR5LlxuICAgICAqL1xuICAgIGdldCByZW5kZXJJZlJlc3BvbnNlSXNFbXB0eSgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdyZW5kZXItaWYtcmVzcG9uc2UtaXMtZW1wdHknKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGlmIHRoZSBjb21wb25lbnQgaXMgbW91bnRlZCBhZnRlciByZW5kZXJpbmcuXG4gICAgICovXG4gICAgZ2V0IG1vdW50QWZ0ZXJSZW5kZXIoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmhhc0F0dHJpYnV0ZSgnbW91bnQtYWZ0ZXItcmVuZGVyJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==