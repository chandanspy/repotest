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
/* harmony import */ var ProductGroupWidget_components_molecules_product_detail_color_selector_product_detail_color_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.ts");

class ProductDetailColorSelector extends ProductGroupWidget_components_molecules_product_detail_color_selector_product_detail_color_selector__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.imageGallery = void 0;
  }

  init() {
    super.init();
    this.imageGallery = document.getElementsByClassName(this.imageCarouselClassName)[0];
  }

  onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
    this.imageGallery.slideImageUrl = this.imageUrl;
  }

  onTriggerUnselection() {
    var firstTriggerElement = this.triggers[0];
    this.resetActiveItemSelections();
    this.setActiveItemSelection(firstTriggerElement);
    this.imageGallery.restoreDefaultImageUrl();
  }

}

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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class ColorSelector extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.currentSelection = void 0;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(this.getElementsByClassName(this.jsName + "__item"));
    this.mapEvents();
  }

  mapEvents() {
    this.mapTriggerMouseenterEvent();
  }

  mapTriggerMouseenterEvent() {
    this.triggers.forEach(element => {
      element.addEventListener('mouseenter', event => this.onTriggerSelection(event));
    });
  }

  onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
  }

  resetActiveItemSelections() {
    this.triggers.forEach(element => {
      element.classList.remove(this.activeItemClassName);
    });
  }

  setActiveItemSelection(selection) {
    (selection || this.currentSelection).classList.add(this.activeItemClassName);
  }

  get activeItemClassName() {
    return this.getAttribute('active-item-class-name');
  }

}

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
/* harmony import */ var _color_selector_color_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../color-selector/color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts");

class ProductDetailColorSelector extends _color_selector_color_selector__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.imageCarousel = void 0;
  }

  init() {
    super.init();
    this.imageCarousel = document.getElementsByClassName(this.imageCarouselClassName)[0];
  }

  mapEvents() {
    super.mapEvents();
    this.mapTriggerMouseleaveEvent();
  }

  mapTriggerMouseleaveEvent() {
    this.triggers.forEach(element => {
      element.addEventListener('mouseleave', () => this.onTriggerUnselection());
    });
  }

  onTriggerSelection(event) {
    super.onTriggerSelection(event);
    this.imageCarousel.slideImageUrl = this.imageUrl;
  }

  onTriggerUnselection() {
    var firstTriggerElement = this.triggers[0];
    this.resetActiveItemSelections();
    this.setActiveItemSelection(firstTriggerElement);
    this.imageCarousel.restoreDefaultImageUrl();
  }

  get imageUrl() {
    return this.currentSelection.getAttribute('data-product-image-src');
  }

  get imageCarouselClassName() {
    return this.getAttribute('image-carousel-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdEdyb3VwV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3IvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LWdyb3VwLXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0R3JvdXBXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb2xvci1zZWxlY3Rvci9jb2xvci1zZWxlY3Rvci50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtZ3JvdXAtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Byb2R1Y3RHcm91cFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtZGV0YWlsLWNvbG9yLXNlbGVjdG9yL3Byb2R1Y3QtZGV0YWlsLWNvbG9yLXNlbGVjdG9yLnRzIl0sIm5hbWVzIjpbIlByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yIiwiUHJvZHVjdERldGFpbENvbG9yU2VsZWN0b3JDb3JlIiwiaW1hZ2VHYWxsZXJ5IiwiaW5pdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImltYWdlQ2Fyb3VzZWxDbGFzc05hbWUiLCJvblRyaWdnZXJTZWxlY3Rpb24iLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiY3VycmVudFNlbGVjdGlvbiIsImN1cnJlbnRUYXJnZXQiLCJyZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zIiwic2V0QWN0aXZlSXRlbVNlbGVjdGlvbiIsInNsaWRlSW1hZ2VVcmwiLCJpbWFnZVVybCIsIm9uVHJpZ2dlclVuc2VsZWN0aW9uIiwiZmlyc3RUcmlnZ2VyRWxlbWVudCIsInRyaWdnZXJzIiwicmVzdG9yZURlZmF1bHRJbWFnZVVybCIsIkNvbG9yU2VsZWN0b3IiLCJDb21wb25lbnQiLCJyZWFkeUNhbGxiYWNrIiwiQXJyYXkiLCJmcm9tIiwianNOYW1lIiwibWFwRXZlbnRzIiwibWFwVHJpZ2dlck1vdXNlZW50ZXJFdmVudCIsImZvckVhY2giLCJlbGVtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFjdGl2ZUl0ZW1DbGFzc05hbWUiLCJzZWxlY3Rpb24iLCJhZGQiLCJnZXRBdHRyaWJ1dGUiLCJpbWFnZUNhcm91c2VsIiwibWFwVHJpZ2dlck1vdXNlbGVhdmVFdmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBR2UsTUFBTUEsMEJBQU4sU0FBeUNDLDJJQUF6QyxDQUF3RTtBQUFBO0FBQUE7QUFBQSxTQUN6RUMsWUFEeUU7QUFBQTs7QUFHekVDLE1BQUksR0FBUztBQUNuQixVQUFNQSxJQUFOO0FBRUEsU0FBS0QsWUFBTCxHQUFrQ0UsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLQyxzQkFBckMsRUFBNkQsQ0FBN0QsQ0FBbEM7QUFDSDs7QUFFU0Msb0JBQWtCLENBQUNDLEtBQUQsRUFBcUI7QUFDN0NBLFNBQUssQ0FBQ0MsY0FBTjtBQUNBLFNBQUtDLGdCQUFMLEdBQXFDRixLQUFLLENBQUNHLGFBQTNDO0FBQ0EsU0FBS0MseUJBQUw7QUFDQSxTQUFLQyxzQkFBTDtBQUNBLFNBQUtYLFlBQUwsQ0FBa0JZLGFBQWxCLEdBQWtDLEtBQUtDLFFBQXZDO0FBQ0g7O0FBRVNDLHNCQUFvQixHQUFTO0FBQ25DLFFBQU1DLG1CQUFtQixHQUFnQixLQUFLQyxRQUFMLENBQWMsQ0FBZCxDQUF6QztBQUNBLFNBQUtOLHlCQUFMO0FBQ0EsU0FBS0Msc0JBQUwsQ0FBNEJJLG1CQUE1QjtBQUNBLFNBQUtmLFlBQUwsQ0FBa0JpQixzQkFBbEI7QUFDSDs7QUF0QmtGLEM7Ozs7Ozs7Ozs7OztBQ0h2RjtBQUFBO0FBQUE7QUFBQTtB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ZWZhdWx0LnByb2R1Y3QtZGV0YWlsLWNvbG9yLXNlbGVjdG9yLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yQ29yZSBmcm9tICdQcm9kdWN0R3JvdXBXaWRnZXQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3IvcHJvZHVjdC1kZXRhaWwtY29sb3Itc2VsZWN0b3InO1xuaW1wb3J0IEltYWdlR2FsbGVyeSBmcm9tICdzcmMvUHJvZHVjdEltYWdlV2lkZ2V0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2ltYWdlLWdhbGxlcnkvaW1hZ2UtZ2FsbGVyeSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3REZXRhaWxDb2xvclNlbGVjdG9yIGV4dGVuZHMgUHJvZHVjdERldGFpbENvbG9yU2VsZWN0b3JDb3JlIHtcbiAgICBwcm90ZWN0ZWQgaW1hZ2VHYWxsZXJ5OiBJbWFnZUdhbGxlcnk7XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuXG4gICAgICAgIHRoaXMuaW1hZ2VHYWxsZXJ5ID0gPEltYWdlR2FsbGVyeT5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuaW1hZ2VDYXJvdXNlbENsYXNzTmFtZSlbMF07XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclNlbGVjdGlvbihldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5jdXJyZW50U2VsZWN0aW9uID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIHRoaXMucmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpO1xuICAgICAgICB0aGlzLnNldEFjdGl2ZUl0ZW1TZWxlY3Rpb24oKTtcbiAgICAgICAgdGhpcy5pbWFnZUdhbGxlcnkuc2xpZGVJbWFnZVVybCA9IHRoaXMuaW1hZ2VVcmw7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclVuc2VsZWN0aW9uKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBmaXJzdFRyaWdnZXJFbGVtZW50ID0gPEhUTUxFbGVtZW50PnRoaXMudHJpZ2dlcnNbMF07XG4gICAgICAgIHRoaXMucmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpO1xuICAgICAgICB0aGlzLnNldEFjdGl2ZUl0ZW1TZWxlY3Rpb24oZmlyc3RUcmlnZ2VyRWxlbWVudCk7XG4gICAgICAgIHRoaXMuaW1hZ2VHYWxsZXJ5LnJlc3RvcmVEZWZhdWx0SW1hZ2VVcmwoKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29sb3JTZWxlY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBjdXJyZW50U2VsZWN0aW9uOiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pdGVtYCkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJNb3VzZWVudGVyRXZlbnQoKSB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VlbnRlcicsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMuY3VycmVudFNlbGVjdGlvbiA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICB0aGlzLnJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTtcbiAgICAgICAgdGhpcy5zZXRBY3RpdmVJdGVtU2VsZWN0aW9uKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0QWN0aXZlSXRlbVNlbGVjdGlvbihzZWxlY3Rpb24/OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICAoc2VsZWN0aW9uIHx8IHRoaXMuY3VycmVudFNlbGVjdGlvbikuY2xhc3NMaXN0LmFkZCh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWN0aXZlSXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FjdGl2ZS1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29sb3JTZWxlY3RvciBmcm9tICcuLi9jb2xvci1zZWxlY3Rvci9jb2xvci1zZWxlY3Rvcic7XG5pbXBvcnQgSW1hZ2VDYXJvdXNlbCBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvaW1hZ2UtY2Fyb3VzZWwvaW1hZ2UtY2Fyb3VzZWwnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0RGV0YWlsQ29sb3JTZWxlY3RvciBleHRlbmRzIENvbG9yU2VsZWN0b3Ige1xuICAgIHByb3RlY3RlZCBpbWFnZUNhcm91c2VsOiBJbWFnZUNhcm91c2VsO1xuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHN1cGVyLmluaXQoKTtcblxuICAgICAgICB0aGlzLmltYWdlQ2Fyb3VzZWwgPSA8SW1hZ2VDYXJvdXNlbD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuaW1hZ2VDYXJvdXNlbENsYXNzTmFtZSlbMF07XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIubWFwRXZlbnRzKCk7XG4gICAgICAgIHRoaXMubWFwVHJpZ2dlck1vdXNlbGVhdmVFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBUcmlnZ2VyTW91c2VsZWF2ZUV2ZW50KCkge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlbGVhdmUnLCAoKSA9PiB0aGlzLm9uVHJpZ2dlclVuc2VsZWN0aW9uKCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBzdXBlci5vblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQpO1xuICAgICAgICB0aGlzLmltYWdlQ2Fyb3VzZWwuc2xpZGVJbWFnZVVybCA9IHRoaXMuaW1hZ2VVcmw7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclVuc2VsZWN0aW9uKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBmaXJzdFRyaWdnZXJFbGVtZW50ID0gPEhUTUxFbGVtZW50PnRoaXMudHJpZ2dlcnNbMF07XG5cbiAgICAgICAgdGhpcy5yZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zKCk7XG4gICAgICAgIHRoaXMuc2V0QWN0aXZlSXRlbVNlbGVjdGlvbihmaXJzdFRyaWdnZXJFbGVtZW50KTtcbiAgICAgICAgdGhpcy5pbWFnZUNhcm91c2VsLnJlc3RvcmVEZWZhdWx0SW1hZ2VVcmwoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGltYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmN1cnJlbnRTZWxlY3Rpb24uZ2V0QXR0cmlidXRlKCdkYXRhLXByb2R1Y3QtaW1hZ2Utc3JjJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbWFnZUNhcm91c2VsQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnaW1hZ2UtY2Fyb3VzZWwtY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=