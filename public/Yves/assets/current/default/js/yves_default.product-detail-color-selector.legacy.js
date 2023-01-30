(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["product-detail-color-selector"],{

/***/ "./src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts":
/*!*******************************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts ***!
  \*******************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductDetailColorSelector; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ProductGroupWidget_components_molecules_product_detail_color_selector_product_detail_color_selector__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts");



var ProductDetailColorSelector = /*#__PURE__*/function (_ProductDetailColorSe) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(ProductDetailColorSelector, _ProductDetailColorSe);

  function ProductDetailColorSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _ProductDetailColorSe.call.apply(_ProductDetailColorSe, [this].concat(args)) || this;
    _this.imageGallery = void 0;
    return _this;
  }

  var _proto = ProductDetailColorSelector.prototype;

  _proto.init = function init() {
    _ProductDetailColorSe.prototype.init.call(this);

    this.imageGallery = document.getElementsByClassName(this.imageCarouselClassName)[0];
  };

  _proto.onTriggerSelection = function onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
    this.imageGallery.slideImageUrl = this.imageUrl;
  };

  _proto.onTriggerUnselection = function onTriggerUnselection() {
    var firstTriggerElement = this.triggers[0];
    this.resetActiveItemSelections();
    this.setActiveItemSelection(firstTriggerElement);
    this.imageGallery.restoreDefaultImageUrl();
  };

  return ProductDetailColorSelector;
}(ProductGroupWidget_components_molecules_product_detail_color_selector_product_detail_color_selector__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts":
/*!**************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts ***!
  \**************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ColorSelector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var ColorSelector = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ColorSelector, _Component);

  function ColorSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.currentSelection = void 0;
    return _this;
  }

  var _proto = ColorSelector.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(this.getElementsByClassName(this.jsName + "__item"));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerMouseenterEvent();
  };

  _proto.mapTriggerMouseenterEvent = function mapTriggerMouseenterEvent() {
    var _this2 = this;

    this.triggers.forEach(function (element) {
      element.addEventListener('mouseenter', function (event) {
        return _this2.onTriggerSelection(event);
      });
    });
  };

  _proto.onTriggerSelection = function onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
  };

  _proto.resetActiveItemSelections = function resetActiveItemSelections() {
    var _this3 = this;

    this.triggers.forEach(function (element) {
      element.classList.remove(_this3.activeItemClassName);
    });
  };

  _proto.setActiveItemSelection = function setActiveItemSelection(selection) {
    (selection || this.currentSelection).classList.add(this.activeItemClassName);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ColorSelector, [{
    key: "activeItemClassName",
    get: function get() {
      return this.getAttribute('active-item-class-name');
    }
  }]);

  return ColorSelector;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts":
/*!********************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts ***!
  \********************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductDetailColorSelector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _color_selector_color_selector__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../color-selector/color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts");




var ProductDetailColorSelector = /*#__PURE__*/function (_ColorSelector) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ProductDetailColorSelector, _ColorSelector);

  function ProductDetailColorSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _ColorSelector.call.apply(_ColorSelector, [this].concat(args)) || this;
    _this.imageCarousel = void 0;
    return _this;
  }

  var _proto = ProductDetailColorSelector.prototype;

  _proto.init = function init() {
    _ColorSelector.prototype.init.call(this);

    this.imageCarousel = document.getElementsByClassName(this.imageCarouselClassName)[0];
  };

  _proto.mapEvents = function mapEvents() {
    _ColorSelector.prototype.mapEvents.call(this);

    this.mapTriggerMouseleaveEvent();
  };

  _proto.mapTriggerMouseleaveEvent = function mapTriggerMouseleaveEvent() {
    var _this2 = this;

    this.triggers.forEach(function (element) {
      element.addEventListener('mouseleave', function () {
        return _this2.onTriggerUnselection();
      });
    });
  };

  _proto.onTriggerSelection = function onTriggerSelection(event) {
    _ColorSelector.prototype.onTriggerSelection.call(this, event);

    this.imageCarousel.slideImageUrl = this.imageUrl;
  };

  _proto.onTriggerUnselection = function onTriggerUnselection() {
    var firstTriggerElement = this.triggers[0];
    this.resetActiveItemSelections();
    this.setActiveItemSelection(firstTriggerElement);
    this.imageCarousel.restoreDefaultImageUrl();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ProductDetailColorSelector, [{
    key: "imageUrl",
    get: function get() {
      return this.currentSelection.getAttribute('data-product-image-src');
    }
  }, {
    key: "imageCarouselClassName",
    get: function get() {
      return this.getAttribute('image-carousel-class-name');
    }
  }]);

  return ProductDetailColorSelector;
}(_color_selector_color_selector__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdEdyb3VwV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3IvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LWdyb3VwLXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0R3JvdXBXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb2xvci1zZWxlY3Rvci9jb2xvci1zZWxlY3Rvci50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtZ3JvdXAtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Byb2R1Y3RHcm91cFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtZGV0YWlsLWNvbG9yLXNlbGVjdG9yL3Byb2R1Y3QtZGV0YWlsLWNvbG9yLXNlbGVjdG9yLnRzIl0sIm5hbWVzIjpbIlByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yIiwiaW1hZ2VHYWxsZXJ5IiwiaW5pdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImltYWdlQ2Fyb3VzZWxDbGFzc05hbWUiLCJvblRyaWdnZXJTZWxlY3Rpb24iLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiY3VycmVudFNlbGVjdGlvbiIsImN1cnJlbnRUYXJnZXQiLCJyZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zIiwic2V0QWN0aXZlSXRlbVNlbGVjdGlvbiIsInNsaWRlSW1hZ2VVcmwiLCJpbWFnZVVybCIsIm9uVHJpZ2dlclVuc2VsZWN0aW9uIiwiZmlyc3RUcmlnZ2VyRWxlbWVudCIsInRyaWdnZXJzIiwicmVzdG9yZURlZmF1bHRJbWFnZVVybCIsIlByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yQ29yZSIsIkNvbG9yU2VsZWN0b3IiLCJyZWFkeUNhbGxiYWNrIiwiQXJyYXkiLCJmcm9tIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwVHJpZ2dlck1vdXNlZW50ZXJFdmVudCIsImZvckVhY2giLCJlbGVtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFjdGl2ZUl0ZW1DbGFzc05hbWUiLCJzZWxlY3Rpb24iLCJhZGQiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiLCJpbWFnZUNhcm91c2VsIiwibWFwVHJpZ2dlck1vdXNlbGVhdmVFdmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUdxQkEsMEI7Ozs7Ozs7Ozs7O1VBQ1BDLFk7Ozs7OztTQUVBQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLG9DQUFNQSxJQUFOOztBQUVBLFNBQUtELFlBQUwsR0FBa0NFLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0Msc0JBQXJDLEVBQTZELENBQTdELENBQWxDO0FBQ0gsRzs7U0FFU0Msa0IsR0FBViw0QkFBNkJDLEtBQTdCLEVBQWlEO0FBQzdDQSxTQUFLLENBQUNDLGNBQU47QUFDQSxTQUFLQyxnQkFBTCxHQUFxQ0YsS0FBSyxDQUFDRyxhQUEzQztBQUNBLFNBQUtDLHlCQUFMO0FBQ0EsU0FBS0Msc0JBQUw7QUFDQSxTQUFLWCxZQUFMLENBQWtCWSxhQUFsQixHQUFrQyxLQUFLQyxRQUF2QztBQUNILEc7O1NBRVNDLG9CLEdBQVYsZ0NBQXVDO0FBQ25DLFFBQU1DLG1CQUFtQixHQUFnQixLQUFLQyxRQUFMLENBQWMsQ0FBZCxDQUF6QztBQUNBLFNBQUtOLHlCQUFMO0FBQ0EsU0FBS0Msc0JBQUwsQ0FBNEJJLG1CQUE1QjtBQUNBLFNBQUtmLFlBQUwsQ0FBa0JpQixzQkFBbEI7QUFDSCxHOzs7RUF0Qm1EQywySTs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNIeEQ7O0lBRXFCQyxhOzs7Ozs7Ozs7OztVQUNQSCxRO1VB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L2pzL3l2ZXNfZGVmYXVsdC5wcm9kdWN0LWRldGFpbC1jb2xvci1zZWxlY3Rvci5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUHJvZHVjdERldGFpbENvbG9yU2VsZWN0b3JDb3JlIGZyb20gJ1Byb2R1Y3RHcm91cFdpZGdldC9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LWRldGFpbC1jb2xvci1zZWxlY3Rvci9wcm9kdWN0LWRldGFpbC1jb2xvci1zZWxlY3Rvcic7XG5pbXBvcnQgSW1hZ2VHYWxsZXJ5IGZyb20gJ3NyYy9Qcm9kdWN0SW1hZ2VXaWRnZXQvY29tcG9uZW50cy9tb2xlY3VsZXMvaW1hZ2UtZ2FsbGVyeS9pbWFnZS1nYWxsZXJ5JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdERldGFpbENvbG9yU2VsZWN0b3IgZXh0ZW5kcyBQcm9kdWN0RGV0YWlsQ29sb3JTZWxlY3RvckNvcmUge1xuICAgIHByb3RlY3RlZCBpbWFnZUdhbGxlcnk6IEltYWdlR2FsbGVyeTtcblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICBzdXBlci5pbml0KCk7XG5cbiAgICAgICAgdGhpcy5pbWFnZUdhbGxlcnkgPSA8SW1hZ2VHYWxsZXJ5PmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pbWFnZUNhcm91c2VsQ2xhc3NOYW1lKVswXTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmN1cnJlbnRTZWxlY3Rpb24gPSA8SFRNTEVsZW1lbnQ+ZXZlbnQuY3VycmVudFRhcmdldDtcbiAgICAgICAgdGhpcy5yZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zKCk7XG4gICAgICAgIHRoaXMuc2V0QWN0aXZlSXRlbVNlbGVjdGlvbigpO1xuICAgICAgICB0aGlzLmltYWdlR2FsbGVyeS5zbGlkZUltYWdlVXJsID0gdGhpcy5pbWFnZVVybDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyVW5zZWxlY3Rpb24oKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGZpcnN0VHJpZ2dlckVsZW1lbnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy50cmlnZ2Vyc1swXTtcbiAgICAgICAgdGhpcy5yZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zKCk7XG4gICAgICAgIHRoaXMuc2V0QWN0aXZlSXRlbVNlbGVjdGlvbihmaXJzdFRyaWdnZXJFbGVtZW50KTtcbiAgICAgICAgdGhpcy5pbWFnZUdhbGxlcnkucmVzdG9yZURlZmF1bHRJbWFnZVVybCgpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDb2xvclNlbGVjdG9yIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcnM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIGN1cnJlbnRTZWxlY3Rpb246IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2l0ZW1gKSk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJNb3VzZWVudGVyRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVHJpZ2dlck1vdXNlZW50ZXJFdmVudCgpIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWVudGVyJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclNlbGVjdGlvbihldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5jdXJyZW50U2VsZWN0aW9uID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIHRoaXMucmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpO1xuICAgICAgICB0aGlzLnNldEFjdGl2ZUl0ZW1TZWxlY3Rpb24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuYWN0aXZlSXRlbUNsYXNzTmFtZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRBY3RpdmVJdGVtU2VsZWN0aW9uKHNlbGVjdGlvbj86IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIChzZWxlY3Rpb24gfHwgdGhpcy5jdXJyZW50U2VsZWN0aW9uKS5jbGFzc0xpc3QuYWRkKHRoaXMuYWN0aXZlSXRlbUNsYXNzTmFtZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhY3RpdmVJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLWl0ZW0tY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb2xvclNlbGVjdG9yIGZyb20gJy4uL2NvbG9yLXNlbGVjdG9yL2NvbG9yLXNlbGVjdG9yJztcbmltcG9ydCBJbWFnZUNhcm91c2VsIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9pbWFnZS1jYXJvdXNlbC9pbWFnZS1jYXJvdXNlbCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yIGV4dGVuZHMgQ29sb3JTZWxlY3RvciB7XG4gICAgcHJvdGVjdGVkIGltYWdlQ2Fyb3VzZWw6IEltYWdlQ2Fyb3VzZWw7XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuXG4gICAgICAgIHRoaXMuaW1hZ2VDYXJvdXNlbCA9IDxJbWFnZUNhcm91c2VsPmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pbWFnZUNhcm91c2VsQ2xhc3NOYW1lKVswXTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBzdXBlci5tYXBFdmVudHMoKTtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyTW91c2VsZWF2ZUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJNb3VzZWxlYXZlRXZlbnQoKSB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VsZWF2ZScsICgpID0+IHRoaXMub25UcmlnZ2VyVW5zZWxlY3Rpb24oKSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm9uVHJpZ2dlclNlbGVjdGlvbihldmVudCk7XG4gICAgICAgIHRoaXMuaW1hZ2VDYXJvdXNlbC5zbGlkZUltYWdlVXJsID0gdGhpcy5pbWFnZVVybDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyVW5zZWxlY3Rpb24oKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGZpcnN0VHJpZ2dlckVsZW1lbnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy50cmlnZ2Vyc1swXTtcblxuICAgICAgICB0aGlzLnJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTtcbiAgICAgICAgdGhpcy5zZXRBY3RpdmVJdGVtU2VsZWN0aW9uKGZpcnN0VHJpZ2dlckVsZW1lbnQpO1xuICAgICAgICB0aGlzLmltYWdlQ2Fyb3VzZWwucmVzdG9yZURlZmF1bHRJbWFnZVVybCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaW1hZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY3VycmVudFNlbGVjdGlvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJvZHVjdC1pbWFnZS1zcmMnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGltYWdlQ2Fyb3VzZWxDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdpbWFnZS1jYXJvdXNlbC1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==