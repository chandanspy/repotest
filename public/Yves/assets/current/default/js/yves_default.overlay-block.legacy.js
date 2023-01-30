(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["overlay-block"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/atoms/overlay-block/overlay-block.ts":
/*!*******************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/atoms/overlay-block/overlay-block.ts ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return OverlayBlock; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var OverlayBlock = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(OverlayBlock, _Component);

  function OverlayBlock() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = OverlayBlock.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.addModifier = function addModifier(modifier, element, cssClass) {
    if (modifier) {
      element.classList.add(cssClass + "--" + modifier);
    }
  };

  _proto.removeModifier = function removeModifier(modifier, element, cssClass) {
    if (modifier) {
      element.classList.remove(cssClass + "--" + modifier);
    }
  };

  _proto.showOverlay = function showOverlay(modifier, bodyModifier) {
    this.addModifier(modifier, this, this.name);
    this.addModifier(bodyModifier, document.body, 'body-overlay');
    this.classList.add(this.classToShow);
  };

  _proto.hideOverlay = function hideOverlay(modifier, bodyModifier) {
    this.removeModifier(modifier, this, this.name);
    this.removeModifier(bodyModifier, document.body, 'body-overlay');
    this.classList.remove(this.classToShow);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(OverlayBlock, [{
    key: "classToShow",
    get: function get() {
      return this.name + "--is-shown";
    }
  }]);

  return OverlayBlock;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9hdG9tcy9vdmVybGF5LWJsb2NrL292ZXJsYXktYmxvY2sudHMiXSwibmFtZXMiOlsiT3ZlcmxheUJsb2NrIiwicmVhZHlDYWxsYmFjayIsImFkZE1vZGlmaWVyIiwibW9kaWZpZXIiLCJlbGVtZW50IiwiY3NzQ2xhc3MiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmVNb2RpZmllciIsInJlbW92ZSIsInNob3dPdmVybGF5IiwiYm9keU1vZGlmaWVyIiwibmFtZSIsImRvY3VtZW50IiwiYm9keSIsImNsYXNzVG9TaG93IiwiaGlkZU92ZXJsYXkiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLFk7Ozs7Ozs7OztTQUNQQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLFcsR0FBVixxQkFBc0JDLFFBQXRCLEVBQXlDQyxPQUF6QyxFQUFnRUMsUUFBaEUsRUFBeUY7QUFDckYsUUFBSUYsUUFBSixFQUFjO0FBQ1ZDLGFBQU8sQ0FBQ0UsU0FBUixDQUFrQkMsR0FBbEIsQ0FBeUJGLFFBQXpCLFVBQXNDRixRQUF0QztBQUNIO0FBQ0osRzs7U0FFU0ssYyxHQUFWLHdCQUF5QkwsUUFBekIsRUFBNENDLE9BQTVDLEVBQW1FQyxRQUFuRSxFQUE0RjtBQUN4RixRQUFJRixRQUFKLEVBQWM7QUFDVkMsYUFBTyxDQUFDRSxTQUFSLENBQWtCRyxNQUFsQixDQUE0QkosUUFBNUIsVUFBeUNGLFFBQXpDO0FBQ0g7QUFDSixHOztTQUVETyxXLEdBQUEscUJBQVlQLFFBQVosRUFBK0JRLFlBQS9CLEVBQTREO0FBQ3hELFNBQUtULFdBQUwsQ0FBaUJDLFFBQWpCLEVBQTJCLElBQTNCLEVBQWlDLEtBQUtTLElBQXRDO0FBQ0EsU0FBS1YsV0FBTCxDQUFpQlMsWUFBakIsRUFBK0JFLFFBQVEsQ0FBQ0MsSUFBeEMsRUFBOEMsY0FBOUM7QUFDQSxTQUFLUixTQUFMLENBQWVDLEdBQWYsQ0FBbUIsS0FBS1EsV0FBeEI7QUFDSCxHOztTQUVEQyxXLEdBQUEscUJBQVliLFFBQVosRUFBK0JRLFlBQS9CLEVBQTREO0FBQ3hELFNBQUtILGNBQUwsQ0FBb0JMLFFBQXBCLEVBQThCLElBQTlCLEVBQW9DLEtBQUtTLElBQXpDO0FBQ0EsU0FBS0osY0FBTCxDQUFvQkcsWUFBcEIsRUFBa0NFLFFBQVEsQ0FBQ0MsSUFBM0MsRUFBaUQsY0FBakQ7QUFDQSxTQUFLUixTQUFMLENBQWVHLE1BQWYsQ0FBc0IsS0FBS00sV0FBM0I7QUFDSCxHOzs7O1NBRUQsZUFBb0M7QUFDaEMsYUFBVSxLQUFLSCxJQUFmO0FBQ0g7Ozs7RUE3QnFDSywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5vdmVybGF5LWJsb2NrLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBPdmVybGF5QmxvY2sgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBhZGRNb2RpZmllcihtb2RpZmllcj86IHN0cmluZywgZWxlbWVudD86IEhUTUxFbGVtZW50LCBjc3NDbGFzcz86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICBpZiAobW9kaWZpZXIpIHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LmFkZChgJHtjc3NDbGFzc30tLSR7bW9kaWZpZXJ9YCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlTW9kaWZpZXIobW9kaWZpZXI/OiBzdHJpbmcsIGVsZW1lbnQ/OiBIVE1MRWxlbWVudCwgY3NzQ2xhc3M/OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgaWYgKG1vZGlmaWVyKSB7XG4gICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5yZW1vdmUoYCR7Y3NzQ2xhc3N9LS0ke21vZGlmaWVyfWApO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgc2hvd092ZXJsYXkobW9kaWZpZXI/OiBzdHJpbmcsIGJvZHlNb2RpZmllcj86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmFkZE1vZGlmaWVyKG1vZGlmaWVyLCB0aGlzLCB0aGlzLm5hbWUpO1xuICAgICAgICB0aGlzLmFkZE1vZGlmaWVyKGJvZHlNb2RpZmllciwgZG9jdW1lbnQuYm9keSwgJ2JvZHktb3ZlcmxheScpO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvU2hvdyk7XG4gICAgfVxuXG4gICAgaGlkZU92ZXJsYXkobW9kaWZpZXI/OiBzdHJpbmcsIGJvZHlNb2RpZmllcj86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbW92ZU1vZGlmaWVyKG1vZGlmaWVyLCB0aGlzLCB0aGlzLm5hbWUpO1xuICAgICAgICB0aGlzLnJlbW92ZU1vZGlmaWVyKGJvZHlNb2RpZmllciwgZG9jdW1lbnQuYm9keSwgJ2JvZHktb3ZlcmxheScpO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvU2hvdyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvU2hvdygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gYCR7dGhpcy5uYW1lfS0taXMtc2hvd25gO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=