(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([[0],{

/***/ "./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-cms-content/product-set-cms-content.ts":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-cms-content/product-set-cms-content.ts ***!
  \****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductSetCmsContent; });
/* harmony import */ var _product_set_details_product_set_details__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../product-set-details/product-set-details */ "./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.ts");

class ProductSetCmsContent extends _product_set_details_product_set_details__WEBPACK_IMPORTED_MODULE_0__["default"] {}

/***/ }),

/***/ "./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.ts":
/*!********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.ts ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductSetDetails; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");


class ProductSetDetails extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productItems = void 0;
    this.targets = void 0;
  }

  readyCallback() {}

  init() {
    this.productItems = Array.from(this.getElementsByClassName(this.jsName + "__product-item"));
    this.targets = Array.from(this.getElementsByClassName(this.jsName + "__product-sku-hidden-input"));
    this.mapEvents();
  }

  mapEvents() {
    if (!this.productItems) {
      return;
    }

    this.mapProductItemUpdateAddToCartUrlCustomEvent();
  }

  mapProductItemUpdateAddToCartUrlCustomEvent() {
    this.productItems.forEach((element, index) => {
      element.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__["EVENT_UPDATE_ADD_TO_CART_URL"], event => {
        this.updateAddToCartUrls(event.detail.sku, index);
      });
    });
  }

  updateAddToCartUrls(sku, index) {
    if (this.targets[index]) {
      this.targets[index].value = sku;
    }
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts":
/*!*********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts ***!
  \*********************************************************************************************************************************/
/*! exports provided: EVENT_UPDATE_RATING, EVENT_UPDATE_LABELS, EVENT_UPDATE_ADD_TO_CART_URL, EVENT_UPDATE_AJAX_ADD_TO_CART_URL, EVENT_UPDATE_ADD_TO_CART_FORM_ACTION, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_RATING", function() { return EVENT_UPDATE_RATING; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_LABELS", function() { return EVENT_UPDATE_LABELS; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_ADD_TO_CART_URL", function() { return EVENT_UPDATE_ADD_TO_CART_URL; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_AJAX_ADD_TO_CART_URL", function() { return EVENT_UPDATE_AJAX_ADD_TO_CART_URL; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_ADD_TO_CART_FORM_ACTION", function() { return EVENT_UPDATE_ADD_TO_CART_FORM_ACTION; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductItem; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* tslint:disable: max-file-line-count */

/**
 * @event updateRating An event emitted when the product rating has been updated.
 * @event updateLabels An event emitted when the product labels has been updated.
 * @event updateAddToCartUrl An event emitted when the product 'add to cart' URL has been updated.
 * @event updateAjaxAddToCartUrl An event emitted when the product AJAX 'add to cart' URL has been updated.
 * @event updateAddToCartFormAction An event emitted when the product 'add to cart' form action has been updated.
 */

var EVENT_UPDATE_RATING = 'updateRating';
var EVENT_UPDATE_LABELS = 'updateLabels';
var EVENT_UPDATE_ADD_TO_CART_URL = 'updateAddToCartUrl';
var EVENT_UPDATE_AJAX_ADD_TO_CART_URL = 'updateAjaxAddToCartUrl';
var EVENT_UPDATE_ADD_TO_CART_FORM_ACTION = 'updateAddToCartFormAction';
class ProductItem extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productImage = void 0;
    this.productName = void 0;
    this.productRating = void 0;
    this.productDefaultPrice = void 0;
    this.productSku = void 0;
    this.productOriginalPrice = void 0;
    this.productLinkDetailPage = void 0;
    this.productLinkAddToCart = void 0;
    this.productAjaxButtonAddToCart = void 0;
    this.productFormAddToCart = void 0;
    this.productButtonAddToCart = void 0;
  }

  readyCallback() {}

  init() {
    this.productImage = this.getElementsByClassName(this.jsName + "__image")[0];
    this.productName = this.getElementsByClassName(this.jsName + "__name")[0];
    this.productRating = this.getElementsByClassName(this.jsName + "__rating")[0];
    this.productDefaultPrice = this.getElementsByClassName(this.jsName + "__default-price")[0];
    this.productSku = this.getElementsByClassName(this.jsName + "__sku")[0];
    this.productOriginalPrice = this.getElementsByClassName(this.jsName + "__original-price")[0];
    this.productLinkDetailPage = Array.from(this.getElementsByClassName(this.jsName + "__link-detail-page"));
    this.productLinkAddToCart = this.getElementsByClassName(this.jsName + "__link-add-to-cart")[0];
    this.productAjaxButtonAddToCart = this.getElementsByClassName(this.jsName + "__ajax-button-add-to-cart")[0];
    this.productFormAddToCart = this.getElementsByClassName(this.jsName + "__form-add-to-cart")[0];
    this.productButtonAddToCart = this.getElementsByClassName(this.jsName + "__button-add-to-cart")[0];
  }
  /**
   * Sets the product card information.
   * @param data A data object for setting the product card information.
   */


  updateProductItemData(data) {
    var _data$ajaxAddToCartUr, _data$addToCartFormAc;

    this.imageUrl = data.imageUrl;
    this.imageAlt = data.name;
    this.labels = data.labels;
    this.productItemName = data.name;
    this.ratingValue = data.ratingValue;
    this.defaultPrice = data.defaultPrice;
    this.sku = data.sku;
    this.originalPrice = data.originalPrice;
    this.detailPageUrl = data.detailPageUrl;
    this.addToCartUrl = data.addToCartUrl;
    this.ajaxAddToCartUrl = (_data$ajaxAddToCartUr = data.ajaxAddToCartUrl) != null ? _data$ajaxAddToCartUr : null;
    this.addToCartFormAction = (_data$addToCartFormAc = data.addToCartFormAction) != null ? _data$addToCartFormAc : null;
  }

  getSkuFromUrl(url) {
    if (!url) {
      return null;
    }

    var lastPartOfUrl = new RegExp("([^\\/])+$", 'g');
    var sku = url.match(lastPartOfUrl);
    return sku[0];
  }
  /**
   * Sets the product card image URL.
   * @param imageUrl A product card image URL.
   */


  set imageUrl(imageUrl) {
    if (this.productImage) {
      this.productImage.src = imageUrl;
    }
  }
  /**
   * Sets the product card image alt.
   * @param imageAlt A product card image alt.
   */


  set imageAlt(imageAlt) {
    if (this.productImage) {
      this.productImage.alt = imageAlt;
    }
  }
  /**
   * Sets the product card labels.
   * @param labels An array of product card labels.
   */


  set labels(labels) {
    this.dispatchCustomEvent(EVENT_UPDATE_LABELS, {
      labels
    });
  }
  /**
   * Sets the product card name.
   * @param name A product card name.
   */


  set productItemName(name) {
    if (this.productName) {
      this.productName.innerText = name;
    }
  }
  /**
   * Sets the product card rating.
   * @param rating A product card rating.
   */


  set ratingValue(rating) {
    this.dispatchCustomEvent(EVENT_UPDATE_RATING, {
      rating
    });
  }
  /**
   * Sets the product card default price.
   * @param defaultPrice A product card default price.
   */


  set defaultPrice(defaultPrice) {
    if (this.productDefaultPrice) {
      this.productDefaultPrice.innerText = defaultPrice;
    }
  }
  /**
   * Sets the product card sku.
   * @param productSku A product card sku.
   */


  set sku(productSku) {
    if (this.productSku) {
      this.productSku.content = productSku;
    }
  }
  /**
   * Sets the product card original price.
   * @param originalPrice A product card original price.
   */


  set originalPrice(originalPrice) {
    if (this.productOriginalPrice) {
      this.productOriginalPrice.innerText = originalPrice;
    }
  }
  /**
   * Sets the product card detail page URL.
   * @param detailPageUrl A product card detail page URL.
   */


  set detailPageUrl(detailPageUrl) {
    if (this.productLinkDetailPage) {
      this.productLinkDetailPage.forEach(element => element.href = detailPageUrl);
    }
  }
  /**
   * Sets the product card 'add to cart' URL.
   * @param addToCartUrl A product card 'add to cart' URL.
   */


  set addToCartUrl(addToCartUrl) {
    if (this.productLinkAddToCart) {
      this.productLinkAddToCart.href = addToCartUrl;
    }

    this.dispatchCustomEvent(EVENT_UPDATE_ADD_TO_CART_URL, {
      sku: this.getSkuFromUrl(addToCartUrl)
    });
  }
  /**
   * Sets the product card AJAX 'add to cart' URL.
   * @param ajaxAddToCartUrl A product card AJAX 'add to cart' URL.
   */


  set ajaxAddToCartUrl(ajaxAddToCartUrl) {
    if (this.productAjaxButtonAddToCart) {
      this.productAjaxButtonAddToCart.disabled = !ajaxAddToCartUrl;
      this.productAjaxButtonAddToCart.dataset.url = ajaxAddToCartUrl;
    }

    this.dispatchCustomEvent(EVENT_UPDATE_AJAX_ADD_TO_CART_URL, {
      sku: this.getSkuFromUrl(ajaxAddToCartUrl)
    });
  }
  /**
   * Sets the product card 'add to cart' form action.
   * @param addToCartFormAction A product card 'add to cart' form action.
   */


  set addToCartFormAction(addToCartFormAction) {
    if (this.productFormAddToCart) {
      this.productFormAddToCart.action = addToCartFormAction;
    }

    if (this.productButtonAddToCart) {
      this.productButtonAddToCart.dataset.formAction = addToCartFormAction;
    }

    this.dispatchCustomEvent(EVENT_UPDATE_ADD_TO_CART_FORM_ACTION, {
      sku: this.getSkuFromUrl(addToCartFormAction)
    });
  }
  /**
   * Gets the product card image URL.
   */


  get imageUrl() {
    if (this.productImage) {
      return this.productImage.src;
    }
  }
  /**
   * Gets the product card name.
   */


  get productItemName() {
    if (this.productName) {
      return this.productName.innerText;
    }
  }
  /**
   * Gets the product card rating.
   */


  get ratingValue() {
    if (this.productRating) {
      return Number(this.productRating.value);
    }
  }
  /**
   * Gets the product card default price.
   */


  get defaultPrice() {
    if (this.productDefaultPrice) {
      return this.productDefaultPrice.innerText;
    }
  }
  /**
   * Gets the product card sku.
   */


  get sku() {
    if (this.productSku) {
      return this.productSku.content;
    }
  }
  /**
   * Gets the product card original price.
   */


  get originalPrice() {
    if (this.productOriginalPrice) {
      return this.productOriginalPrice.innerText;
    }
  }
  /**
   * Gets the product card detail page URL.
   */


  get detailPageUrl() {
    if (this.productLinkDetailPage) {
      return this.productLinkDetailPage[0].href;
    }
  }
  /**
   * Gets the product card 'add to cart' URL.
   */


  get addToCartUrl() {
    if (this.productLinkAddToCart) {
      return this.productLinkAddToCart.href;
    }
  }
  /**
   * Gets the product card AJAX 'add to cart' URL.
   */


  get ajaxAddToCartUrl() {
    if (this.productAjaxButtonAddToCart) {
      return this.productAjaxButtonAddToCart.dataset.url;
    }
  }
  /**
   * Gets the product card 'add to cart' form action.
   */


  get addToCartFormAction() {
    if (this.productFormAddToCart) {
      return this.productFormAddToCart.action;
    }

    if (this.productButtonAddToCart) {
      return this.productButtonAddToCart.dataset.formAction;
    }
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3Qtc2V0LXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0U2V0V2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9vcmdhbmlzbXMvcHJvZHVjdC1zZXQtY21zLWNvbnRlbnQvcHJvZHVjdC1zZXQtY21zLWNvbnRlbnQudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LXNldC13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdFNldFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvb3JnYW5pc21zL3Byb2R1Y3Qtc2V0LWRldGFpbHMvcHJvZHVjdC1zZXQtZGV0YWlscy50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJQcm9kdWN0U2V0Q21zQ29udGVudCIsIlByb2R1Y3RTZXREZXRhaWxzIiwiQ29tcG9uZW50IiwicHJvZHVjdEl0ZW1zIiwidGFyZ2V0cyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsIm1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQiLCJmb3JFYWNoIiwiZWxlbWVudCIsImluZGV4IiwiYWRkRXZlbnRMaXN0ZW5lciIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwiLCJldmVudCIsInVwZGF0ZUFkZFRvQ2FydFVybHMiLCJkZXRhaWwiLCJza3UiLCJ2YWx1ZSIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OIiwiUHJvZHVjdEl0ZW0iLCJwcm9kdWN0SW1hZ2UiLCJwcm9kdWN0TmFtZSIsInByb2R1Y3RSYXRpbmciLCJwcm9kdWN0RGVmYXVsdFByaWNlIiwicHJvZHVjdFNrdSIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwicHJvZHVjdExpbmtEZXRhaWxQYWdlIiwicHJvZHVjdExpbmtBZGRUb0NhcnQiLCJwcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCIsInByb2R1Y3RGb3JtQWRkVG9DYXJ0IiwicHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCIsInVwZGF0ZVByb2R1Y3RJdGVtRGF0YSIsImRhdGEiLCJpbWFnZVVybCIsImltYWdlQWx0IiwibmFtZSIsImxhYmVscyIsInByb2R1Y3RJdGVtTmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwib3JpZ2luYWxQcmljZSIsImRldGFpbFBhZ2VVcmwiLCJhZGRUb0NhcnRVcmwiLCJhamF4QWRkVG9DYXJ0VXJsIiwiYWRkVG9DYXJ0Rm9ybUFjdGlvbiIsImdldFNrdUZyb21VcmwiLCJ1cmwiLCJsYXN0UGFydE9mVXJsIiwiUmVnRXhwIiwibWF0Y2giLCJzcmMiLCJhbHQiLCJkaXNwYXRjaEN1c3RvbUV2ZW50IiwiaW5uZXJUZXh0IiwicmF0aW5nIiwiY29udGVudCIsImhyZWYiLCJkaXNhYmxlZCIsImRhdGFzZXQiLCJhY3Rpb24iLCJmb3JtQWN0aW9uIiwiTnVtYmVyIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSxvQkFBTixTQUFtQ0MsZ0ZBQW5DLENBQXFELEU7Ozs7Ozs7Ozs7OztBQ0ZwRTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFFZSxNQUFNQSxpQkFBTixTQUFnQ0MsK0RBQWhDLENBQTBDO0FBQUE7QUFBQTtBQUFBLFNBQzNDQyxZQUQyQztBQUFBLFNBRTND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IjoiLi9qcy95dmVzX2RlZmF1bHQuMC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBQcm9kdWN0U2V0RGV0YWlscyBmcm9tICcuLi9wcm9kdWN0LXNldC1kZXRhaWxzL3Byb2R1Y3Qtc2V0LWRldGFpbHMnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0U2V0Q21zQ29udGVudCBleHRlbmRzIFByb2R1Y3RTZXREZXRhaWxzIHt9XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBQcm9kdWN0SXRlbSwgeyBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0U2V0RGV0YWlscyBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJdGVtczogUHJvZHVjdEl0ZW1bXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0czogSFRNTElucHV0RWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1zID0gPFByb2R1Y3RJdGVtW10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcm9kdWN0LWl0ZW1gKSk7XG4gICAgICAgIHRoaXMudGFyZ2V0cyA9IDxIVE1MSW5wdXRFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXG4gICAgICAgICAgICBgJHt0aGlzLmpzTmFtZX1fX3Byb2R1Y3Qtc2t1LWhpZGRlbi1pbnB1dGBcbiAgICAgICAgKSk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMucHJvZHVjdEl0ZW1zKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwUHJvZHVjdEl0ZW1VcGRhdGVBZGRUb0NhcnRVcmxDdXN0b21FdmVudCgpIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbXMuZm9yRWFjaCgoZWxlbWVudDogUHJvZHVjdEl0ZW0sIGluZGV4OiBudW1iZXIpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgdGhpcy51cGRhdGVBZGRUb0NhcnRVcmxzKCg8Q3VzdG9tRXZlbnQ+ZXZlbnQpLmRldGFpbC5za3UsIGluZGV4KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdXBkYXRlQWRkVG9DYXJ0VXJscyhza3U6IHN0cmluZywgaW5kZXg6IG51bWJlcik6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy50YXJnZXRzW2luZGV4XSkge1xuICAgICAgICAgICAgdGhpcy50YXJnZXRzW2luZGV4XS52YWx1ZSA9IHNrdTtcbiAgICAgICAgfVxuICAgIH1cbn1cbiIsIi8qIHRzbGludDpkaXNhYmxlOiBtYXgtZmlsZS1saW5lLWNvdW50ICovXG5pbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG4vKipcbiAqIEBldmVudCB1cGRhdGVSYXRpbmcgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IHJhdGluZyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUxhYmVscyBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgbGFiZWxzIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIFVSTCBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFqYXhBZGRUb0NhcnRVcmwgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKi9cbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfUkFUSU5HID0gJ3VwZGF0ZVJhdGluZyc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0xBQkVMUyA9ICd1cGRhdGVMYWJlbHMnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWRkVG9DYXJ0VXJsJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWpheEFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OID0gJ3VwZGF0ZUFkZFRvQ2FydEZvcm1BY3Rpb24nO1xuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtRGF0YSB7XG4gICAgaW1hZ2VVcmw6IHN0cmluZztcbiAgICBpbWFnZUFsdDogc3RyaW5nO1xuICAgIGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW107XG4gICAgbmFtZTogc3RyaW5nO1xuICAgIHJhdGluZ1ZhbHVlOiBudW1iZXI7XG4gICAgZGVmYXVsdFByaWNlOiBzdHJpbmc7XG4gICAgc2t1OiBzdHJpbmc7XG4gICAgb3JpZ2luYWxQcmljZTogc3RyaW5nO1xuICAgIGRldGFpbFBhZ2VVcmw6IHN0cmluZztcbiAgICBhZGRUb0NhcnRVcmw6IHN0cmluZztcbiAgICBhamF4QWRkVG9DYXJ0VXJsPzogc3RyaW5nO1xuICAgIGFkZFRvQ2FydEZvcm1BY3Rpb24/OiBzdHJpbmc7XG59XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1MYWJlbHNEYXRhIHtcbiAgICB0ZXh0OiBzdHJpbmc7XG4gICAgdHlwZTogc3RyaW5nO1xufVxuXG50eXBlIFVybCA9IHN0cmluZyB8IG51bGw7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RJdGVtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEltYWdlOiBIVE1MSW1hZ2VFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TmFtZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RSYXRpbmc6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3REZWZhdWx0UHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0U2t1OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE9yaWdpbmFsUHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0RldGFpbFBhZ2U6IEhUTUxBbmNob3JFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMaW5rQWRkVG9DYXJ0OiBIVE1MQW5jaG9yRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQ6IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0Rm9ybUFkZFRvQ2FydDogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZSA9IDxIVE1MSW1hZ2VFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2ltYWdlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE5hbWUgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbmFtZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RSYXRpbmcgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yYXRpbmdgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2RlZmF1bHQtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0U2t1ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2t1YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fb3JpZ2luYWwtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UgPSA8SFRNTEFuY2hvckVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xpbmstZGV0YWlsLXBhZ2VgKSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCA9IDxIVE1MQW5jaG9yRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19hamF4LWJ1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQgPSA8SFRNTEZvcm1FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2Zvcm0tYWRkLXRvLWNhcnRgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0ID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGluZm9ybWF0aW9uLlxuICAgICAqIEBwYXJhbSBkYXRhIEEgZGF0YSBvYmplY3QgZm9yIHNldHRpbmcgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKi9cbiAgICB1cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YTogUHJvZHVjdEl0ZW1EYXRhKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW1hZ2VVcmwgPSBkYXRhLmltYWdlVXJsO1xuICAgICAgICB0aGlzLmltYWdlQWx0ID0gZGF0YS5uYW1lO1xuICAgICAgICB0aGlzLmxhYmVscyA9IGRhdGEubGFiZWxzO1xuICAgICAgICB0aGlzLnByb2R1Y3RJdGVtTmFtZSA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5yYXRpbmdWYWx1ZSA9IGRhdGEucmF0aW5nVmFsdWU7XG4gICAgICAgIHRoaXMuZGVmYXVsdFByaWNlID0gZGF0YS5kZWZhdWx0UHJpY2U7XG4gICAgICAgIHRoaXMuc2t1ID0gZGF0YS5za3U7XG4gICAgICAgIHRoaXMub3JpZ2luYWxQcmljZSA9IGRhdGEub3JpZ2luYWxQcmljZTtcbiAgICAgICAgdGhpcy5kZXRhaWxQYWdlVXJsID0gZGF0YS5kZXRhaWxQYWdlVXJsO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydFVybCA9IGRhdGEuYWRkVG9DYXJ0VXJsO1xuICAgICAgICB0aGlzLmFqYXhBZGRUb0NhcnRVcmwgPSBkYXRhLmFqYXhBZGRUb0NhcnRVcmwgPz8gbnVsbDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRGb3JtQWN0aW9uID0gZGF0YS5hZGRUb0NhcnRGb3JtQWN0aW9uID8/IG51bGw7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldFNrdUZyb21VcmwodXJsOiBVcmwpOiBVcmwge1xuICAgICAgICBpZiAoIXVybCkge1xuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBsYXN0UGFydE9mVXJsID0gbmV3IFJlZ0V4cChgKFteXFxcXC9dKSskYCwgJ2cnKTtcbiAgICAgICAgY29uc3Qgc2t1ID0gdXJsLm1hdGNoKGxhc3RQYXJ0T2ZVcmwpO1xuXG4gICAgICAgIHJldHVybiBza3VbMF07XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VVcmwgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBpbWFnZVVybChpbWFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjID0gaW1hZ2VVcmw7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqIEBwYXJhbSBpbWFnZUFsdCBBIHByb2R1Y3QgY2FyZCBpbWFnZSBhbHQuXG4gICAgICovXG4gICAgc2V0IGltYWdlQWx0KGltYWdlQWx0OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZS5hbHQgPSBpbWFnZUFsdDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBsYWJlbHMuXG4gICAgICogQHBhcmFtIGxhYmVscyBBbiBhcnJheSBvZiBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqL1xuICAgIHNldCBsYWJlbHMobGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSkge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0xBQkVMUywgeyBsYWJlbHMgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICogQHBhcmFtIG5hbWUgQSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKi9cbiAgICBzZXQgcHJvZHVjdEl0ZW1OYW1lKG5hbWU6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TmFtZS5pbm5lclRleHQgPSBuYW1lO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKiBAcGFyYW0gcmF0aW5nIEEgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBzZXQgcmF0aW5nVmFsdWUocmF0aW5nOiBudW1iZXIpIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9SQVRJTkcsIHsgcmF0aW5nIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqIEBwYXJhbSBkZWZhdWx0UHJpY2UgQSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKi9cbiAgICBzZXQgZGVmYXVsdFByaWNlKGRlZmF1bHRQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQgPSBkZWZhdWx0UHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqIEBwYXJhbSBwcm9kdWN0U2t1IEEgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKi9cbiAgICBzZXQgc2t1KHByb2R1Y3RTa3U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RTa3UuY29udGVudCA9IHByb2R1Y3RTa3U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICogQHBhcmFtIG9yaWdpbmFsUHJpY2UgQSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IG9yaWdpbmFsUHJpY2Uob3JpZ2luYWxQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dCA9IG9yaWdpbmFsUHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqIEBwYXJhbSBkZXRhaWxQYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgZGV0YWlsUGFnZVVybChkZXRhaWxQYWdlVXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZS5mb3JFYWNoKChlbGVtZW50OiBIVE1MQW5jaG9yRWxlbWVudCkgPT4gKGVsZW1lbnQuaHJlZiA9IGRldGFpbFBhZ2VVcmwpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRVcmwoYWRkVG9DYXJ0VXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZiA9IGFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMLCB7IHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFqYXhBZGRUb0NhcnRVcmwgQSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWpheEFkZFRvQ2FydFVybChhamF4QWRkVG9DYXJ0VXJsOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGlzYWJsZWQgPSAhYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGF0YXNldC51cmwgPSBhamF4QWRkVG9DYXJ0VXJsO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhamF4QWRkVG9DYXJ0VXJsKSB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0Rm9ybUFjdGlvbiBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRGb3JtQWN0aW9uKGFkZFRvQ2FydEZvcm1BY3Rpb246IFVybCkge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbiA9IGFkZFRvQ2FydEZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OLCB7XG4gICAgICAgICAgICBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRGb3JtQWN0aW9uKSxcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgaW1hZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgZ2V0IHByb2R1Y3RJdGVtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBnZXQgcmF0aW5nVmFsdWUoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFJhdGluZykge1xuICAgICAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLnByb2R1Y3RSYXRpbmcudmFsdWUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IGRlZmF1bHRQcmljZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgZ2V0IHNrdSgpOiBudW1iZXIge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IG9yaWdpbmFsUHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGRldGFpbFBhZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2VbMF0uaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgYWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydC5ocmVmO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFqYXhBZGRUb0NhcnRVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydEZvcm1BY3Rpb24oKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0LmFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQuZGF0YXNldC5mb3JtQWN0aW9uO1xuICAgICAgICB9XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==