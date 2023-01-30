(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["style-loader"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/style-loader/style-loader.ts":
/*!*********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/style-loader/style-loader.ts ***!
  \*********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return StyleLoader; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_app_logger__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ShopUi/app/logger */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/logger.ts");





var StyleLoader = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(StyleLoader, _Component);

  function StyleLoader() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = StyleLoader.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapLoadEvent();
  };

  _proto.mapLoadEvent = function mapLoadEvent() {
    var _this = this;

    window.addEventListener('load', function () {
      return _this.addCss();
    });
  };

  _proto.addCss = function addCss() {
    var linkTemplate = "<link rel=\"stylesheet\" href=\"" + this.pathToCSS + "\">";
    document.getElementsByTagName('head')[0].insertAdjacentHTML('beforeend', linkTemplate);
    Object(ShopUi_app_logger__WEBPACK_IMPORTED_MODULE_3__["debug"])("Style file " + this.pathToCSS + " has been loaded");
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(StyleLoader, [{
    key: "pathToCSS",
    get: function get() {
      return this.getAttribute('path-to-css');
    }
  }]);

  return StyleLoader;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc3R5bGUtbG9hZGVyL3N0eWxlLWxvYWRlci50cyJdLCJuYW1lcyI6WyJTdHlsZUxvYWRlciIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwibWFwRXZlbnRzIiwibWFwTG9hZEV2ZW50Iiwid2luZG93IiwiYWRkRXZlbnRMaXN0ZW5lciIsImFkZENzcyIsImxpbmtUZW1wbGF0ZSIsInBhdGhUb0NTUyIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJkZWJ1ZyIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBOztJQUVxQkEsVzs7Ozs7Ozs7O1NBQ1BDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUN4QixTQUFLQyxZQUFMO0FBQ0gsRzs7U0FFU0EsWSxHQUFWLHdCQUErQjtBQUFBOztBQUMzQkMsVUFBTSxDQUFDQyxnQkFBUCxDQUF3QixNQUF4QixFQUFnQztBQUFBLGFBQU0sS0FBSSxDQUFDQyxNQUFMLEVBQU47QUFBQSxLQUFoQztBQUNILEc7O1NBRVNBLE0sR0FBVixrQkFBeUI7QUFDckIsUUFBTUMsWUFBWSx3Q0FBbUMsS0FBS0MsU0FBeEMsUUFBbEI7QUFDQUMsWUFBUSxDQUFDQyxvQkFBVCxDQUE4QixNQUE5QixFQUFzQyxDQUF0QyxFQUF5Q0Msa0JBQXpDLENBQTRELFdBQTVELEVBQXlFSixZQUF6RTtBQUVBSyxtRUFBSyxpQkFBZSxLQUFLSixTQUFwQixzQkFBTDtBQUNILEc7Ozs7U0FFRCxlQUFrQztBQUM5QixhQUFPLEtBQUtLLFlBQUwsQ0FBa0IsYUFBbEIsQ0FBUDtBQUNIOzs7O0VBeEJvQ0MsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuc3R5bGUtbG9hZGVyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IHsgZGVidWcgfSBmcm9tICdTaG9wVWkvYXBwL2xvZ2dlcic7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFN0eWxlTG9hZGVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcExvYWRFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBMb2FkRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgKCkgPT4gdGhpcy5hZGRDc3MoKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFkZENzcygpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGlua1RlbXBsYXRlID0gYDxsaW5rIHJlbD1cInN0eWxlc2hlZXRcIiBocmVmPVwiJHt0aGlzLnBhdGhUb0NTU31cIj5gO1xuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaGVhZCcpWzBdLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgbGlua1RlbXBsYXRlKTtcblxuICAgICAgICBkZWJ1ZyhgU3R5bGUgZmlsZSAke3RoaXMucGF0aFRvQ1NTfSBoYXMgYmVlbiBsb2FkZWRgKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHBhdGhUb0NTUygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3BhdGgtdG8tY3NzJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==