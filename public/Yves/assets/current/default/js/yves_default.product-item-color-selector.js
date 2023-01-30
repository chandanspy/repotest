(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["product-item-color-selector"],{

/***/ "./src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.ts":
/*!***************************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.ts ***!
  \***************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductItemColorSelector; });
/* harmony import */ var ProductGroupWidget_components_molecules_product_item_color_selector_product_item_color_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.ts");

class ProductItemColorSelector extends ProductGroupWidget_components_molecules_product_item_color_selector_product_item_color_selector__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productItemData = void 0;
    this.productItem = void 0;
  }

  getProductItemData() {
    super.getProductItemData();
    this.productItemData.reviewCount = this.reviewCount;
  }

  get reviewCount() {
    return Number(this.currentSelection.getAttribute('data-product-review-count'));
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

/***/ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.ts":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.ts ***!
  \****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductItemColorSelector; });
/* harmony import */ var _color_selector_color_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../color-selector/color-selector */ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts");

class ProductItemColorSelector extends _color_selector_color_selector__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productItemData = void 0;
    this.productItem = void 0;
  }

  init() {
    if (this.productItemClassName) {
      this.productItem = this.closest("." + this.productItemClassName);
    }

    super.init();
  }

  onTriggerSelection(event) {
    super.onTriggerSelection(event);
    this.getProductItemData();
    this.productItem.updateProductItemData(this.productItemData);
  }

  getProductItemData() {
    this.productItemData = {
      imageUrl: this.imageUrl,
      imageAlt: this.productItemName,
      labels: this.labels ? JSON.parse(this.labels) : [],
      name: this.productItemName,
      ratingValue: this.ratingValue,
      defaultPrice: this.defaultPrice,
      originalPrice: this.originalPrice,
      detailPageUrl: this.detailPageUrl,
      addToCartUrl: this.addToCartUrl,
      ajaxAddToCartUrl: this.ajaxAddToCartUrl,
      addToCartFormAction: this.addToCartFormAction,
      sku: this.sku
    };
  }

  get imageUrl() {
    return this.currentSelection.getAttribute('data-product-image-src');
  }

  get labels() {
    return this.currentSelection.getAttribute('data-product-labels');
  }

  get productItemName() {
    return this.currentSelection.getAttribute('data-product-name');
  }

  get ratingValue() {
    return Number(this.currentSelection.getAttribute('data-product-rating'));
  }

  get defaultPrice() {
    return this.currentSelection.getAttribute('data-product-default-price');
  }

  get originalPrice() {
    return this.currentSelection.getAttribute('data-product-original-price');
  }

  get detailPageUrl() {
    return this.currentSelection.getAttribute('data-product-detail-page-url');
  }

  get addToCartUrl() {
    return this.currentSelection.getAttribute('data-product-add-to-cart-url');
  }

  get ajaxAddToCartUrl() {
    return this.currentSelection.getAttribute('data-product-ajax-add-to-cart-url');
  }

  get addToCartFormAction() {
    return this.currentSelection.getAttribute('data-product-add-to-cart-form-action');
  }

  get productItemClassName() {
    return this.getAttribute('product-item-class-name');
  }

  get sku() {
    return this.currentSelection.getAttribute('data-product-sku');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdEdyb3VwV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtLWNvbG9yLXNlbGVjdG9yL3Byb2R1Y3QtaXRlbS1jb2xvci1zZWxlY3Rvci50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtZ3JvdXAtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Byb2R1Y3RHcm91cFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbG9yLXNlbGVjdG9yL2NvbG9yLXNlbGVjdG9yLnRzIiwid2VicGFjazovLy8uL3ZlbmRvci9zcHJ5a2VyLXNob3AvcHJvZHVjdC1ncm91cC13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdEdyb3VwV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtLWNvbG9yLXNlbGVjdG9yL3Byb2R1Y3QtaXRlbS1jb2xvci1zZWxlY3Rvci50cyJdLCJuYW1lcyI6WyJQcm9kdWN0SXRlbUNvbG9yU2VsZWN0b3IiLCJQcm9kdWN0SXRlbUNvbG9yU2VsZWN0b3JDb3JlIiwicHJvZHVjdEl0ZW1EYXRhIiwicHJvZHVjdEl0ZW0iLCJnZXRQcm9kdWN0SXRlbURhdGEiLCJyZXZpZXdDb3VudCIsIk51bWJlciIsImN1cnJlbnRTZWxlY3Rpb24iLCJnZXRBdHRyaWJ1dGUiLCJDb2xvclNlbGVjdG9yIiwiQ29tcG9uZW50IiwidHJpZ2dlcnMiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsIkFycmF5IiwiZnJvbSIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJtYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50IiwiZm9yRWFjaCIsImVsZW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJTZWxlY3Rpb24iLCJwcmV2ZW50RGVmYXVsdCIsImN1cnJlbnRUYXJnZXQiLCJyZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zIiwic2V0QWN0aXZlSXRlbVNlbGVjdGlvbiIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFjdGl2ZUl0ZW1DbGFzc05hbWUiLCJzZWxlY3Rpb24iLCJhZGQiLCJwcm9kdWN0SXRlbUNsYXNzTmFtZSIsImNsb3Nlc3QiLCJ1cGRhdGVQcm9kdWN0SXRlbURhdGEiLCJpbWFnZVVybCIsImltYWdlQWx0IiwicHJvZHVjdEl0ZW1OYW1lIiwibGFiZWxzIiwiSlNPTiIsInBhcnNlIiwibmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwib3JpZ2luYWxQcmljZSIsImRldGFpbFBhZ2VVcmwiLCJhZGRUb0NhcnRVcmwiLCJhamF4QWRkVG9DYXJ0VXJsIiwiYWRkVG9DYXJ0Rm9ybUFjdGlvbiIsInNrdSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBR2UsTUFBTUEsd0JBQU4sU0FBdUNDLHVJQUF2QyxDQUFvRTtBQUFBO0FBQUE7QUFBQSxTQUNyRUMsZUFEcUU7QUFBQSxTQUVyRUMsV0FGcUU7QUFBQTs7QUFJckVDLG9CQUFrQixHQUFTO0FBQ2pDLFVBQU1BLGtCQUFOO0FBQ0EsU0FBS0YsZUFBTCxDQUFxQkcsV0FBckIsR0FBbUMsS0FBS0EsV0FBeEM7QUFDSDs7QUFFd0IsTUFBWEEsV0FBVyxHQUFXO0FBQ2hDLFdBQU9DLE1BQU0sQ0FBQyxLQUFLQyxnQkFBTCxDQUFzQkMsWUFBdEIsQ0FBbUMsMkJBQW5DLENBQUQsQ0FBYjtBQUNIOztBQVg4RSxDOzs7Ozs7Ozs7Ozs7QUNIbkY7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQyxhQUFOLFNBQTRCQywrREFBNUIsQ0FBc0M7QUFBQTtBQUFBO0FBQUEsU0FDdkNDLFFBRHVDO0FBQUEsU0FFdkNKLGdCQUZ1QztBQUFBOztBQUl2Q0ssZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdB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dGVtLWNvbG9yLXNlbGVjdG9yLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFByb2R1Y3RJdGVtQ29sb3JTZWxlY3RvckNvcmUgZnJvbSAnUHJvZHVjdEdyb3VwV2lkZ2V0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS1jb2xvci1zZWxlY3Rvci9wcm9kdWN0LWl0ZW0tY29sb3Itc2VsZWN0b3InO1xuaW1wb3J0IFByb2R1Y3RJdGVtLCB7IFByb2R1Y3RJdGVtRGF0YSB9IGZyb20gJ3NyYy9TaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RJdGVtQ29sb3JTZWxlY3RvciBleHRlbmRzIFByb2R1Y3RJdGVtQ29sb3JTZWxlY3RvckNvcmUge1xuICAgIHByb3RlY3RlZCBwcm9kdWN0SXRlbURhdGE6IFByb2R1Y3RJdGVtRGF0YTtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEl0ZW06IFByb2R1Y3RJdGVtO1xuXG4gICAgcHJvdGVjdGVkIGdldFByb2R1Y3RJdGVtRGF0YSgpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIuZ2V0UHJvZHVjdEl0ZW1EYXRhKCk7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1EYXRhLnJldmlld0NvdW50ID0gdGhpcy5yZXZpZXdDb3VudDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHJldmlld0NvdW50KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5jdXJyZW50U2VsZWN0aW9uLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm9kdWN0LXJldmlldy1jb3VudCcpKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29sb3JTZWxlY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBjdXJyZW50U2VsZWN0aW9uOiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pdGVtYCkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJNb3VzZWVudGVyRXZlbnQoKSB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VlbnRlcicsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMuY3VycmVudFNlbGVjdGlvbiA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICB0aGlzLnJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTtcbiAgICAgICAgdGhpcy5zZXRBY3RpdmVJdGVtU2VsZWN0aW9uKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlc2V0QWN0aXZlSXRlbVNlbGVjdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0QWN0aXZlSXRlbVNlbGVjdGlvbihzZWxlY3Rpb24/OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICAoc2VsZWN0aW9uIHx8IHRoaXMuY3VycmVudFNlbGVjdGlvbikuY2xhc3NMaXN0LmFkZCh0aGlzLmFjdGl2ZUl0ZW1DbGFzc05hbWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWN0aXZlSXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2FjdGl2ZS1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29sb3JTZWxlY3RvciBmcm9tICcuLi9jb2xvci1zZWxlY3Rvci9jb2xvci1zZWxlY3Rvcic7XG5pbXBvcnQgUHJvZHVjdEl0ZW0sIHsgUHJvZHVjdEl0ZW1EYXRhIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbUNvbG9yU2VsZWN0b3IgZXh0ZW5kcyBDb2xvclNlbGVjdG9yIHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEl0ZW1EYXRhOiBQcm9kdWN0SXRlbURhdGE7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJdGVtOiBQcm9kdWN0SXRlbTtcblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SXRlbUNsYXNzTmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SXRlbSA9IDxQcm9kdWN0SXRlbT50aGlzLmNsb3Nlc3QoYC4ke3RoaXMucHJvZHVjdEl0ZW1DbGFzc05hbWV9YCk7XG4gICAgICAgIH1cblxuICAgICAgICBzdXBlci5pbml0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclNlbGVjdGlvbihldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIub25UcmlnZ2VyU2VsZWN0aW9uKGV2ZW50KTtcbiAgICAgICAgdGhpcy5nZXRQcm9kdWN0SXRlbURhdGEoKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbS51cGRhdGVQcm9kdWN0SXRlbURhdGEodGhpcy5wcm9kdWN0SXRlbURhdGEpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRQcm9kdWN0SXRlbURhdGEoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1EYXRhID0ge1xuICAgICAgICAgICAgaW1hZ2VVcmw6IHRoaXMuaW1hZ2VVcmwsXG4gICAgICAgICAgICBpbWFnZUFsdDogdGhpcy5wcm9kdWN0SXRlbU5hbWUsXG4gICAgICAgICAgICBsYWJlbHM6IHRoaXMubGFiZWxzID8gSlNPTi5wYXJzZSh0aGlzLmxhYmVscykgOiBbXSxcbiAgICAgICAgICAgIG5hbWU6IHRoaXMucHJvZHVjdEl0ZW1OYW1lLFxuICAgICAgICAgICAgcmF0aW5nVmFsdWU6IHRoaXMucmF0aW5nVmFsdWUsXG4gICAgICAgICAgICBkZWZhdWx0UHJpY2U6IHRoaXMuZGVmYXVsdFByaWNlLFxuICAgICAgICAgICAgb3JpZ2luYWxQcmljZTogdGhpcy5vcmlnaW5hbFByaWNlLFxuICAgICAgICAgICAgZGV0YWlsUGFnZVVybDogdGhpcy5kZXRhaWxQYWdlVXJsLFxuICAgICAgICAgICAgYWRkVG9DYXJ0VXJsOiB0aGlzLmFkZFRvQ2FydFVybCxcbiAgICAgICAgICAgIGFqYXhBZGRUb0NhcnRVcmw6IHRoaXMuYWpheEFkZFRvQ2FydFVybCxcbiAgICAgICAgICAgIGFkZFRvQ2FydEZvcm1BY3Rpb246IHRoaXMuYWRkVG9DYXJ0Rm9ybUFjdGlvbixcbiAgICAgICAgICAgIHNrdTogdGhpcy5za3UsXG4gICAgICAgIH07XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbWFnZVVybCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5jdXJyZW50U2VsZWN0aW9uLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm9kdWN0LWltYWdlLXNyYycpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgbGFiZWxzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmN1cnJlbnRTZWxlY3Rpb24uZ2V0QXR0cmlidXRlKCdkYXRhLXByb2R1Y3QtbGFiZWxzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwcm9kdWN0SXRlbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY3VycmVudFNlbGVjdGlvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJvZHVjdC1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCByYXRpbmdWYWx1ZSgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMuY3VycmVudFNlbGVjdGlvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJvZHVjdC1yYXRpbmcnKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkZWZhdWx0UHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY3VycmVudFNlbGVjdGlvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJvZHVjdC1kZWZhdWx0LXByaWNlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBvcmlnaW5hbFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmN1cnJlbnRTZWxlY3Rpb24uZ2V0QXR0cmlidXRlKCdkYXRhLXByb2R1Y3Qtb3JpZ2luYWwtcHJpY2UnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGRldGFpbFBhZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY3VycmVudFNlbGVjdGlvbi5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHJvZHVjdC1kZXRhaWwtcGFnZS11cmwnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5jdXJyZW50U2VsZWN0aW9uLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm9kdWN0LWFkZC10by1jYXJ0LXVybCcpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWpheEFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5jdXJyZW50U2VsZWN0aW9uLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm9kdWN0LWFqYXgtYWRkLXRvLWNhcnQtdXJsJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhZGRUb0NhcnRGb3JtQWN0aW9uKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmN1cnJlbnRTZWxlY3Rpb24uZ2V0QXR0cmlidXRlKCdkYXRhLXByb2R1Y3QtYWRkLXRvLWNhcnQtZm9ybS1hY3Rpb24nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHByb2R1Y3RJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJvZHVjdC1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNrdSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5jdXJyZW50U2VsZWN0aW9uLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm9kdWN0LXNrdScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=