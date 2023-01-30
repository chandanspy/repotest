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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class OverlayBlock extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  readyCallback() {}

  addModifier(modifier, element, cssClass) {
    if (modifier) {
      element.classList.add(cssClass + "--" + modifier);
    }
  }

  removeModifier(modifier, element, cssClass) {
    if (modifier) {
      element.classList.remove(cssClass + "--" + modifier);
    }
  }

  showOverlay(modifier, bodyModifier) {
    this.addModifier(modifier, this, this.name);
    this.addModifier(bodyModifier, document.body, 'body-overlay');
    this.classList.add(this.classToShow);
  }

  hideOverlay(modifier, bodyModifier) {
    this.removeModifier(modifier, this, this.name);
    this.removeModifier(bodyModifier, document.body, 'body-overlay');
    this.classList.remove(this.classToShow);
  }

  get classToShow() {
    return this.name + "--is-shown";
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9hdG9tcy9vdmVybGF5LWJsb2NrL292ZXJsYXktYmxvY2sudHMiXSwibmFtZXMiOlsiT3ZlcmxheUJsb2NrIiwiQ29tcG9uZW50IiwicmVhZHlDYWxsYmFjayIsImFkZE1vZGlmaWVyIiwibW9kaWZpZXIiLCJlbGVtZW50IiwiY3NzQ2xhc3MiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmVNb2RpZmllciIsInJlbW92ZSIsInNob3dPdmVybGF5IiwiYm9keU1vZGlmaWVyIiwibmFtZSIsImRvY3VtZW50IiwiYm9keSIsImNsYXNzVG9TaG93IiwiaGlkZU92ZXJsYXkiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLFlBQU4sU0FBMkJDLCtEQUEzQixDQUFxQztBQUN0Q0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxhQUFXLENBQUNDLFFBQUQsRUFBb0JDLE9BQXBCLEVBQTJDQyxRQUEzQyxFQUFvRTtBQUNyRixRQUFJRixRQUFKLEVBQWM7QUFDVkMsYUFBTyxDQUFDRSxTQUFSLENBQWtCQyxHQUFsQixDQUF5QkYsUUFBekIsVUFBc0NGLFFBQXRDO0FBQ0g7QUFDSjs7QUFFU0ssZ0JBQWMsQ0FBQ0wsUUFBRCxFQUFvQkMsT0FBcEIsRUFBMkNDLFFBQTNDLEVBQW9FO0FBQ3hGLFFBQUlGLFFBQUosRUFBYztBQUNWQyxhQUFPLENBQUNFLFNBQVIsQ0FBa0JHLE1BQWxCLENBQTRCSixRQUE1QixVQUF5Q0YsUUFBekM7QUFDSDtBQUNKOztBQUVETyxhQUFXLENBQUNQLFFBQUQsRUFBb0JRLFlBQXBCLEVBQWlEO0FBQ3hELFNBQUtULFdBQUwsQ0FBaUJDLFFBQWpCLEVBQTJCLElBQTNCLEVBQWlDLEtBQUtTLElBQXRDO0FBQ0EsU0FBS1YsV0FBTCxDQUFpQlMsWUFBakIsRUFBK0JFLFFBQVEsQ0FBQ0MsSUFBeEMsRUFBOEMsY0FBOUM7QUFDQSxTQUFLUixTQUFMLENBQWVDLEdBQWYsQ0FBbUIsS0FBS1EsV0FBeEI7QUFDSDs7QUFFREMsYUFBVyxDQUFDYixRQUFELEVBQW9CUSxZQUFwQixFQUFpRDtBQUN4RCxTQUFLSCxjQUFMLENBQW9CTCxRQUFwQixFQUE4QixJQUE5QixFQUFvQyxLQUFLUyxJQUF6QztBQUNBLFNBQUtKLGNBQUwsQ0FBb0JHLFlBQXBCLEVBQWtDRSxRQUFRLENBQUNDLElBQTNDLEVBQWlELGNBQWpEO0FBQ0EsU0FBS1IsU0FBTCxDQUFlRyxNQUFmLENBQXNCLEtBQUtNLFdBQTNCO0FBQ0g7O0FBRXdCLE1BQVhBLFdBQVcsR0FBVztBQUNoQyxXQUFVLEtBQUtILElBQWY7QUFDSDs7QUE3QitDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQub3ZlcmxheS1ibG9jay5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBPdmVybGF5QmxvY2sgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBhZGRNb2RpZmllcihtb2RpZmllcj86IHN0cmluZywgZWxlbWVudD86IEhUTUxFbGVtZW50LCBjc3NDbGFzcz86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICBpZiAobW9kaWZpZXIpIHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LmFkZChgJHtjc3NDbGFzc30tLSR7bW9kaWZpZXJ9YCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlTW9kaWZpZXIobW9kaWZpZXI/OiBzdHJpbmcsIGVsZW1lbnQ/OiBIVE1MRWxlbWVudCwgY3NzQ2xhc3M/OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgaWYgKG1vZGlmaWVyKSB7XG4gICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5yZW1vdmUoYCR7Y3NzQ2xhc3N9LS0ke21vZGlmaWVyfWApO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgc2hvd092ZXJsYXkobW9kaWZpZXI/OiBzdHJpbmcsIGJvZHlNb2RpZmllcj86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmFkZE1vZGlmaWVyKG1vZGlmaWVyLCB0aGlzLCB0aGlzLm5hbWUpO1xuICAgICAgICB0aGlzLmFkZE1vZGlmaWVyKGJvZHlNb2RpZmllciwgZG9jdW1lbnQuYm9keSwgJ2JvZHktb3ZlcmxheScpO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvU2hvdyk7XG4gICAgfVxuXG4gICAgaGlkZU92ZXJsYXkobW9kaWZpZXI/OiBzdHJpbmcsIGJvZHlNb2RpZmllcj86IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbW92ZU1vZGlmaWVyKG1vZGlmaWVyLCB0aGlzLCB0aGlzLm5hbWUpO1xuICAgICAgICB0aGlzLnJlbW92ZU1vZGlmaWVyKGJvZHlNb2RpZmllciwgZG9jdW1lbnQuYm9keSwgJ2JvZHktb3ZlcmxheScpO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvU2hvdyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvU2hvdygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gYCR7dGhpcy5uYW1lfS0taXMtc2hvd25gO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=