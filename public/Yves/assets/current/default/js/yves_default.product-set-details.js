(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["product-set-details"],{

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3Qtc2V0LXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0U2V0V2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9vcmdhbmlzbXMvcHJvZHVjdC1zZXQtZGV0YWlscy9wcm9kdWN0LXNldC1kZXRhaWxzLnRzIiwid2VicGFjazovLy8uL3ZlbmRvci9zcHJ5a2VyLXNob3Avc2hvcC11aS9zcmMvU3ByeWtlclNob3AvWXZlcy9TaG9wVWkvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LWl0ZW0vcHJvZHVjdC1pdGVtLnRzIl0sIm5hbWVzIjpbIlByb2R1Y3RTZXREZXRhaWxzIiwiQ29tcG9uZW50IiwicHJvZHVjdEl0ZW1zIiwidGFyZ2V0cyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsIm1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQiLCJmb3JFYWNoIiwiZWxlbWVudCIsImluZGV4IiwiYWRkRXZlbnRMaXN0ZW5lciIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwiLCJldmVudCIsInVwZGF0ZUFkZFRvQ2FydFVybHMiLCJkZXRhaWwiLCJza3UiLCJ2YWx1ZSIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OIiwiUHJvZHVjdEl0ZW0iLCJwcm9kdWN0SW1hZ2UiLCJwcm9kdWN0TmFtZSIsInByb2R1Y3RSYXRpbmciLCJwcm9kdWN0RGVmYXVsdFByaWNlIiwicHJvZHVjdFNrdSIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwicHJvZHVjdExpbmtEZXRhaWxQYWdlIiwicHJvZHVjdExpbmtBZGRUb0NhcnQiLCJwcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCIsInByb2R1Y3RGb3JtQWRkVG9DYXJ0IiwicHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCIsInVwZGF0ZVByb2R1Y3RJdGVtRGF0YSIsImRhdGEiLCJpbWFnZVVybCIsImltYWdlQWx0IiwibmFtZSIsImxhYmVscyIsInByb2R1Y3RJdGVtTmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwib3JpZ2luYWxQcmljZSIsImRldGFpbFBhZ2VVcmwiLCJhZGRUb0NhcnRVcmwiLCJhamF4QWRkVG9DYXJ0VXJsIiwiYWRkVG9DYXJ0Rm9ybUFjdGlvbiIsImdldFNrdUZyb21VcmwiLCJ1cmwiLCJsYXN0UGFydE9mVXJsIiwiUmVnRXhwIiwibWF0Y2giLCJzcmMiLCJhbHQiLCJkaXNwYXRjaEN1c3RvbUV2ZW50IiwiaW5uZXJUZXh0IiwicmF0aW5nIiwiY29udGVudCIsImhyZWYiLCJkaXNhYmxlZCIsImRhdGFzZXQiLCJhY3Rpb24iLCJmb3JtQWN0aW9uIiwiTnVtYmVyIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBRWUsTUFBTUEsaUJBQU4sU0FBZ0NDLCtEQUFoQyxDQUEwQztBQUFBO0FBQUE7QUFBQSxTQUMzQ0MsWUFEMkM7QUFBQSxTQUUzQ0MsT0FGMkM7QUFBQTs7QUFJM0NDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtILFlBQUwsR0FBbUNJLEtBQUssQ0FBQ0MsSUFBTixDQUFXLEtBQUtDLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLG9CQUFYLENBQW5DO0FBQ0EsU0FBS04sT0FBTCxHQUFtQ0csS0FBSyxDQUFDQyxJQUFOLENBQVcsS0FBS0Msc0JBQUwsQ0FDdkMsS0FBS0MsTUFEa0MsZ0NBQVgsQ0FBbkM7QUFJQSxTQUFLQyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixR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S0FBS0Esb0JBQUwsQ0FBMEI0QixTQUFqQztBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUNxQixNQUFiWixhQUFhLEdBQVc7QUFDeEIsUUFBSSxLQUFLZixxQkFBVCxFQUFnQztBQUM1QixhQUFPLEtBQUtBLHFCQUFMLENBQTJCLENBQTNCLEVBQThCOEIsSUFBckM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDb0IsTUFBWmQsWUFBWSxHQUFXO0FBQ3ZCLFFBQUksS0FBS2Ysb0JBQVQsRUFBK0I7QUFDM0IsYUFBTyxLQUFLQSxvQkFBTCxDQUEwQjZCLElBQWpDO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTs7O0FBQ3dCLE1BQWhCYixnQkFBZ0IsR0FBVztBQUMzQixRQUFJLEtBQUtmLDBCQUFULEVBQXFDO0FBQ2pDLGFBQU8sS0FBS0EsMEJBQUwsQ0FBZ0M4QixPQUFoQyxDQUF3Q1osR0FBL0M7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDMkIsTUFBbkJGLG1CQUFtQixHQUFXO0FBQzlCLFFBQUksS0FBS2Ysb0JBQVQsRUFBK0I7QUFDM0IsYUFBTyxLQUFLQSxvQkFBTCxDQUEwQjhCLE1BQWpDO0FBQ0g7O0FBRUQsUUFBSSxLQUFLN0Isc0JBQVQsRUFBaUM7QUFDN0IsYUFBTyxLQUFLQSxzQkFBTCxDQUE0QjRCLE9BQTVCLENBQW9DRSxVQUEzQztBQUNIO0FBQ0o7O0FBaFM4QyxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnByb2R1Y3Qtc2V0LWRldGFpbHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBQcm9kdWN0SXRlbSwgeyBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0U2V0RGV0YWlscyBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJdGVtczogUHJvZHVjdEl0ZW1bXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0czogSFRNTElucHV0RWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1zID0gPFByb2R1Y3RJdGVtW10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcm9kdWN0LWl0ZW1gKSk7XG4gICAgICAgIHRoaXMudGFyZ2V0cyA9IDxIVE1MSW5wdXRFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXG4gICAgICAgICAgICBgJHt0aGlzLmpzTmFtZX1fX3Byb2R1Y3Qtc2t1LWhpZGRlbi1pbnB1dGBcbiAgICAgICAgKSk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMucHJvZHVjdEl0ZW1zKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwUHJvZHVjdEl0ZW1VcGRhdGVBZGRUb0NhcnRVcmxDdXN0b21FdmVudCgpIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbXMuZm9yRWFjaCgoZWxlbWVudDogUHJvZHVjdEl0ZW0sIGluZGV4OiBudW1iZXIpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgdGhpcy51cGRhdGVBZGRUb0NhcnRVcmxzKCg8Q3VzdG9tRXZlbnQ+ZXZlbnQpLmRldGFpbC5za3UsIGluZGV4KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdXBkYXRlQWRkVG9DYXJ0VXJscyhza3U6IHN0cmluZywgaW5kZXg6IG51bWJlcik6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy50YXJnZXRzW2luZGV4XSkge1xuICAgICAgICAgICAgdGhpcy50YXJnZXRzW2luZGV4XS52YWx1ZSA9IHNrdTtcbiAgICAgICAgfVxuICAgIH1cbn1cbiIsIi8qIHRzbGludDpkaXNhYmxlOiBtYXgtZmlsZS1saW5lLWNvdW50ICovXG5pbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG4vKipcbiAqIEBldmVudCB1cGRhdGVSYXRpbmcgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IHJhdGluZyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUxhYmVscyBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgbGFiZWxzIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIFVSTCBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFqYXhBZGRUb0NhcnRVcmwgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKi9cbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfUkFUSU5HID0gJ3VwZGF0ZVJhdGluZyc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0xBQkVMUyA9ICd1cGRhdGVMYWJlbHMnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWRkVG9DYXJ0VXJsJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWpheEFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OID0gJ3VwZGF0ZUFkZFRvQ2FydEZvcm1BY3Rpb24nO1xuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtRGF0YSB7XG4gICAgaW1hZ2VVcmw6IHN0cmluZztcbiAgICBpbWFnZUFsdDogc3RyaW5nO1xuICAgIGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW107XG4gICAgbmFtZTogc3RyaW5nO1xuICAgIHJhdGluZ1ZhbHVlOiBudW1iZXI7XG4gICAgZGVmYXVsdFByaWNlOiBzdHJpbmc7XG4gICAgc2t1OiBzdHJpbmc7XG4gICAgb3JpZ2luYWxQcmljZTogc3RyaW5nO1xuICAgIGRldGFpbFBhZ2VVcmw6IHN0cmluZztcbiAgICBhZGRUb0NhcnRVcmw6IHN0cmluZztcbiAgICBhamF4QWRkVG9DYXJ0VXJsPzogc3RyaW5nO1xuICAgIGFkZFRvQ2FydEZvcm1BY3Rpb24/OiBzdHJpbmc7XG59XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1MYWJlbHNEYXRhIHtcbiAgICB0ZXh0OiBzdHJpbmc7XG4gICAgdHlwZTogc3RyaW5nO1xufVxuXG50eXBlIFVybCA9IHN0cmluZyB8IG51bGw7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RJdGVtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEltYWdlOiBIVE1MSW1hZ2VFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TmFtZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RSYXRpbmc6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3REZWZhdWx0UHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0U2t1OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE9yaWdpbmFsUHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0RldGFpbFBhZ2U6IEhUTUxBbmNob3JFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMaW5rQWRkVG9DYXJ0OiBIVE1MQW5jaG9yRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQ6IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0Rm9ybUFkZFRvQ2FydDogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZSA9IDxIVE1MSW1hZ2VFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2ltYWdlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE5hbWUgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbmFtZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RSYXRpbmcgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yYXRpbmdgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2RlZmF1bHQtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0U2t1ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2t1YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fb3JpZ2luYWwtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UgPSA8SFRNTEFuY2hvckVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xpbmstZGV0YWlsLXBhZ2VgKSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCA9IDxIVE1MQW5jaG9yRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19hamF4LWJ1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQgPSA8SFRNTEZvcm1FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2Zvcm0tYWRkLXRvLWNhcnRgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0ID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGluZm9ybWF0aW9uLlxuICAgICAqIEBwYXJhbSBkYXRhIEEgZGF0YSBvYmplY3QgZm9yIHNldHRpbmcgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKi9cbiAgICB1cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YTogUHJvZHVjdEl0ZW1EYXRhKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW1hZ2VVcmwgPSBkYXRhLmltYWdlVXJsO1xuICAgICAgICB0aGlzLmltYWdlQWx0ID0gZGF0YS5uYW1lO1xuICAgICAgICB0aGlzLmxhYmVscyA9IGRhdGEubGFiZWxzO1xuICAgICAgICB0aGlzLnByb2R1Y3RJdGVtTmFtZSA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5yYXRpbmdWYWx1ZSA9IGRhdGEucmF0aW5nVmFsdWU7XG4gICAgICAgIHRoaXMuZGVmYXVsdFByaWNlID0gZGF0YS5kZWZhdWx0UHJpY2U7XG4gICAgICAgIHRoaXMuc2t1ID0gZGF0YS5za3U7XG4gICAgICAgIHRoaXMub3JpZ2luYWxQcmljZSA9IGRhdGEub3JpZ2luYWxQcmljZTtcbiAgICAgICAgdGhpcy5kZXRhaWxQYWdlVXJsID0gZGF0YS5kZXRhaWxQYWdlVXJsO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydFVybCA9IGRhdGEuYWRkVG9DYXJ0VXJsO1xuICAgICAgICB0aGlzLmFqYXhBZGRUb0NhcnRVcmwgPSBkYXRhLmFqYXhBZGRUb0NhcnRVcmwgPz8gbnVsbDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRGb3JtQWN0aW9uID0gZGF0YS5hZGRUb0NhcnRGb3JtQWN0aW9uID8/IG51bGw7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldFNrdUZyb21VcmwodXJsOiBVcmwpOiBVcmwge1xuICAgICAgICBpZiAoIXVybCkge1xuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBsYXN0UGFydE9mVXJsID0gbmV3IFJlZ0V4cChgKFteXFxcXC9dKSskYCwgJ2cnKTtcbiAgICAgICAgY29uc3Qgc2t1ID0gdXJsLm1hdGNoKGxhc3RQYXJ0T2ZVcmwpO1xuXG4gICAgICAgIHJldHVybiBza3VbMF07XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VVcmwgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBpbWFnZVVybChpbWFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjID0gaW1hZ2VVcmw7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqIEBwYXJhbSBpbWFnZUFsdCBBIHByb2R1Y3QgY2FyZCBpbWFnZSBhbHQuXG4gICAgICovXG4gICAgc2V0IGltYWdlQWx0KGltYWdlQWx0OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZS5hbHQgPSBpbWFnZUFsdDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBsYWJlbHMuXG4gICAgICogQHBhcmFtIGxhYmVscyBBbiBhcnJheSBvZiBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqL1xuICAgIHNldCBsYWJlbHMobGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSkge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0xBQkVMUywgeyBsYWJlbHMgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICogQHBhcmFtIG5hbWUgQSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKi9cbiAgICBzZXQgcHJvZHVjdEl0ZW1OYW1lKG5hbWU6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TmFtZS5pbm5lclRleHQgPSBuYW1lO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKiBAcGFyYW0gcmF0aW5nIEEgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBzZXQgcmF0aW5nVmFsdWUocmF0aW5nOiBudW1iZXIpIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9SQVRJTkcsIHsgcmF0aW5nIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqIEBwYXJhbSBkZWZhdWx0UHJpY2UgQSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKi9cbiAgICBzZXQgZGVmYXVsdFByaWNlKGRlZmF1bHRQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQgPSBkZWZhdWx0UHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqIEBwYXJhbSBwcm9kdWN0U2t1IEEgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKi9cbiAgICBzZXQgc2t1KHByb2R1Y3RTa3U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RTa3UuY29udGVudCA9IHByb2R1Y3RTa3U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICogQHBhcmFtIG9yaWdpbmFsUHJpY2UgQSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IG9yaWdpbmFsUHJpY2Uob3JpZ2luYWxQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dCA9IG9yaWdpbmFsUHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqIEBwYXJhbSBkZXRhaWxQYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgZGV0YWlsUGFnZVVybChkZXRhaWxQYWdlVXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZS5mb3JFYWNoKChlbGVtZW50OiBIVE1MQW5jaG9yRWxlbWVudCkgPT4gKGVsZW1lbnQuaHJlZiA9IGRldGFpbFBhZ2VVcmwpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRVcmwoYWRkVG9DYXJ0VXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZiA9IGFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMLCB7IHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFqYXhBZGRUb0NhcnRVcmwgQSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWpheEFkZFRvQ2FydFVybChhamF4QWRkVG9DYXJ0VXJsOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGlzYWJsZWQgPSAhYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGF0YXNldC51cmwgPSBhamF4QWRkVG9DYXJ0VXJsO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhamF4QWRkVG9DYXJ0VXJsKSB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0Rm9ybUFjdGlvbiBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRGb3JtQWN0aW9uKGFkZFRvQ2FydEZvcm1BY3Rpb246IFVybCkge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbiA9IGFkZFRvQ2FydEZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OLCB7XG4gICAgICAgICAgICBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRGb3JtQWN0aW9uKSxcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgaW1hZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgZ2V0IHByb2R1Y3RJdGVtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBnZXQgcmF0aW5nVmFsdWUoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFJhdGluZykge1xuICAgICAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLnByb2R1Y3RSYXRpbmcudmFsdWUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IGRlZmF1bHRQcmljZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgZ2V0IHNrdSgpOiBudW1iZXIge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IG9yaWdpbmFsUHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGRldGFpbFBhZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2VbMF0uaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgYWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydC5ocmVmO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFqYXhBZGRUb0NhcnRVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydEZvcm1BY3Rpb24oKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0LmFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQuZGF0YXNldC5mb3JtQWN0aW9uO1xuICAgICAgICB9XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==