(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["product-item"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts":
/*!*********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts ***!
  \*********************************************************************************************/
/*! exports provided: EVENT_UPDATE_REVIEW_COUNT, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_REVIEW_COUNT", function() { return EVENT_UPDATE_REVIEW_COUNT; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ProductItem; });
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");

var EVENT_UPDATE_REVIEW_COUNT = 'updateReviewCount';
class ProductItem extends ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productReviewCount = void 0;
  }

  init() {
    this.productReviewCount = this.getElementsByClassName(this.jsName + "__review-count")[0];
    super.init();
  }

  set originalPrice(originalPrice) {
    if (this.productOriginalPrice) {
      this.productOriginalPrice.innerText = originalPrice;
    }

    this.setDefaultPriceColor(originalPrice);
  }

  setDefaultPriceColor(originalPrice) {
    if (!this.productDefaultPrice) {
      return;
    }

    if (!originalPrice) {
      this.productDefaultPrice.classList.remove(this.defaultPriceColorClassName);
      return;
    }

    this.productDefaultPrice.classList.add(this.defaultPriceColorClassName);
  }

  updateProductItemData(data) {
    super.updateProductItemData(data);
    this.reviewCount = data.reviewCount;
  }

  set reviewCount(reviewCount) {
    this.dispatchCustomEvent(EVENT_UPDATE_REVIEW_COUNT, {
      reviewCount
    });
  }

  get defaultPriceColorClassName() {
    return this.getAttribute('default-price-color-class-name');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5UIiwiUHJvZHVjdEl0ZW0iLCJQcm9kdWN0SXRlbUNvcmUiLCJwcm9kdWN0UmV2aWV3Q291bnQiLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm9yaWdpbmFsUHJpY2UiLCJwcm9kdWN0T3JpZ2luYWxQcmljZSIsImlubmVyVGV4dCIsInNldERlZmF1bHRQcmljZUNvbG9yIiwicHJvZHVjdERlZmF1bHRQcmljZSIsImNsYXNzTGlzdCIsInJlbW92ZSIsImRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lIiwiYWRkIiwidXBkYXRlUHJvZHVjdEl0ZW1EYXRhIiwiZGF0YSIsInJldmlld0NvdW50IiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsImdldEF0dHJpYnV0ZSIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsIkNvbXBvbmVudCIsInByb2R1Y3RJbWFnZSIsInByb2R1Y3ROYW1lIiwicHJvZHVjdFJhdGluZyIsInByb2R1Y3RTa3UiLCJwcm9kdWN0TGlua0RldGFpbFBhZ2UiLCJwcm9kdWN0TGlua0FkZFRvQ2FydCIsInByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0IiwicHJvZHVjdEZvcm1BZGRUb0NhcnQiLCJwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0IiwicmVhZHlDYWxsYmFjayIsIkFycmF5IiwiZnJvbSIsImltYWdlVXJsIiwiaW1hZ2VBbHQiLCJuYW1lIiwibGFiZWxzIiwicHJvZHVjdEl0ZW1OYW1lIiwicmF0aW5nVmFsdWUiLCJkZWZhdWx0UHJpY2UiLCJza3UiLCJkZXRhaWxQYWdlVXJsIiwiYWRkVG9DYXJ0VXJsIiwiYWpheEFkZFRvQ2FydFVybCIsImFkZFRvQ2FydEZvcm1BY3Rpb24iLCJnZXRTa3VGcm9tVXJsIiwidXJsIiwibGFzdFBhcnRPZlVybCIsIlJlZ0V4cCIsIm1hdGNoIiwic3JjIiwiYWx0IiwicmF0aW5nIiwiY29udGVudCIsImZvckVhY2giLCJlbGVtZW50IiwiaHJlZiIsImRpc2FibGVkIiwiZGF0YXNldCIsImFjdGlvbiIsImZvcm1BY3Rpb24iLCJOdW1iZXIiLCJ2YWx1ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFJTyxJQUFNQSx5QkFBeUIsR0FBRyxtQkFBbEM7QUFNUSxNQUFNQyxXQUFOLFNBQTBCQyw2RkFBMUIsQ0FBMEM7QUFBQTtBQUFBO0FBQUEsU0FDM0NDLGtCQUQyQztBQUFBOztBQUczQ0MsTUFBSSxHQUFTO0FBQ25CLFNBQUtELGtCQUFMLEdBQXVDLEtBQUtFLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHFCQUE0RCxDQUE1RCxDQUF2QztBQUVBLFVBQU1GLElBQU47QUFDSDs7QUFFZ0IsTUFBYkcsYUFBYSxDQUFDQSxhQUFELEVBQXdCO0FBQ3JDLFFBQUksS0FBS0Msb0JBQVQsRUFBK0I7QUFDM0IsV0FBS0Esb0JBQUwsQ0FBMEJDLFNBQTFCLEdBQXNDRixhQUF0QztBQUNIOztBQUVELFNBQUtHLG9CQUFMLENBQTBCSCxhQUExQjtBQUNIOztBQUVTRyxzQkFBb0IsQ0FBQ0gsYUFBRCxFQUE4QjtBQUN4RCxRQUFJLENBQUMsS0FBS0ksbUJBQVYsRUFBK0I7QUFDM0I7QUFDSDs7QUFFRCxRQUFJLENBQUNKLGFBQUwsRUFBb0I7QUFDaEIsV0FBS0ksbUJBQUwsQ0FBeUJDLFNBQXpCLENBQW1DQyxNQUFuQyxDQUEwQyxLQUFLQywwQkFBL0M7QUFFQTtBQUNIOztBQUVELFNBQUtILG1CQUFMLENBQXlCQyxTQUF6QixDQUFtQ0csR0FBbkMsQ0FBdUMsS0FBS0QsMEJBQTVDO0FBQ0g7O0FBRURFLHVCQUFxQixDQUFDQyxJQUFELEVBQThCO0FBQy9DLFVBQU1ELHFCQUFOLENBQTRCQyxJQUE1QjtBQUNBLFNBQUtDLFdBQUwsR0FBbUJELElBQUksQ0FBQ0MsV0FBeEI7QUFDSDs7QUFFd0IsTUFBWEEsV0FBVyxDQUFDQSxXQUFELEVBQXNCO0FBQzNDLFNBQUtDLG1CQUFMLENBQXlCbkIseUJBQXpCLEVBQW9EO0FBQUVrQjtBQUFGLEtBQXBEO0FBQ0g7O0FBRXVDLE1BQTFCSiwwQkFBMEIsR0FBVztBQUMvQyxXQUFPLEtBQUtNLFlBQUwsQ0FBa0IsZ0NBQWxCLENBQVA7QUFDSDs7QUExQ29ELEM7Ozs7Ozs7Ozs7OztBQ1Z6RDtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUNPLElBQU1DLG1CQUFtQixHQUFHLGNBQTVCO0FBQ0EsSUFBTUMsbUJBQW1CLEdBQUcsY0FBNUI7QUFDQSxJQUFNQyw0QkFBNEIsR0FBRyxvQkFBckM7QUFDQSxJQUFNQyxpQ0FBaUMsR0FBRyx3QkFBMUM7QUFDQSxJQUFNQyxvQ0FBb0MsR0FBRywyQkFBN0M7QUF3QlEsTUFBTXhCLFdBQU4sU0FBMEJ5Qix5REFBMUIsQ0FBb0M7QUFBQTtBQUFBO0FBQUEsU0FDckNDLFlBRHFDO0FBQUEsU0FFckNDLFdBRnFDO0FBQUEsU0FHckNDLGFBSHFDO0FBQUEsU0FJckNsQixtQkFKcUM7QUFBQSxTQUtyQ21CLFVBTHFDO0FBQUEsU0FNckN0QixvQkFOcUM7QUFBQSxTQU9yQ3VCLHFCQVBxQztBQUFBLFNBUXJDQyxvQkFScUM7QUFBQSxTQVNyQ0MsMEJBVHFDO0FBQUEsU0FVckNDLG9CQVZxQztBQUFBLFNBV3JDQyxzQkFYcUM7QUFBQTs7QUFhckNDLGVBQWEsR0FBUyxDQUFFOztBQUV4QmhDLE1BQUksR0FBUztBQUNuQixTQUFLdUIsWUFBTCxHQUFzQyxLQUFLdEIsc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsY0FBcUQsQ0FBckQsQ0FBdEM7QUFDQSxTQUFLc0IsV0FBTCxHQUFnQyxLQUFLdkIsc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBaEM7QUFDQSxTQUFLdUIsYUFBTCxHQUF1QyxLQUFLeEIsc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZUFBc0QsQ0FBdEQsQ0FBdkM7QUFDQSxTQUFLSyxtQkFBTCxHQUF3QyxLQUFLTixzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxzQkFBNkQsQ0FBN0QsQ0FBeEM7QUFDQSxTQUFLd0IsVUFBTCxHQUFvQyxLQUFLekIsc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsWUFBbUQsQ0FBbkQsQ0FBcEM7QUFDQSxTQUFLRSxvQkFBTCxHQUF5QyxLQUFLSCxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyx1QkFBOEQsQ0FBOUQsQ0FBekM7QUFDQSxTQUFLeUIscUJBQUwsR0FDSU0sS0FBSyxDQUFDQyxJQUFOLENBQVcsS0FBS2pDLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHdCQUFYLENBREo7QUFHQSxTQUFLMEIsb0JBQUwsR0FDSSxLQUFLM0Isc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMseUJBQWdFLENBQWhFLENBREo7QUFHQSxTQUFLMkIsMEJBQUwsR0FDSSxLQUFLNUIsc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZ0NBQXVFLENBQXZFLENBREo7QUFHQSxTQUFLNEIsb0JBQUwsR0FBNkMsS0FBSzdCLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHlCQUFnRSxDQUFoRSxDQUE3QztBQUNBLFNBQUs2QixzQkFBTCxHQUNJLEtBQUs5QixzQkFBTCxDQUErQixLQUFLQyxNQUFwQywyQkFBa0UsQ0FBbEUsQ0FESjtBQUdIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNJVSx1QkFBcUIsQ0FBQ0MsSUFBRCxFQUE4QjtBQUFBOztBQUMvQyxTQUFLc0IsUUFBTCxHQUFnQnRCLElBQUksQ0FBQ3NCLFFBQXJCO0FBQ0EsU0FBS0MsUUFBTCxHQUFnQnZCLElBQUksQ0FBQ3dCLElBQXJCO0FBQ0EsU0FBS0MsTUFBTCxHQUFjekIsSUFBSSxDQUFDeUIsTUFBbkI7QUFDQSxTQUFLQyxlQUFMLEdBQXVCMUIsSUFBSSxDQUFDd0IsSUFBNUI7QUFDQSxTQUFLRyxXQUFMLEdBQW1CM0IsSUFBSSxDQUFDMkIsV0FBeEI7QUFDQSxTQUFLQyxZQUFMLEdBQW9CNUIsSUFBSSxDQUFDNEIsWUFBekI7QUFDQSxTQUFLQyxHQUFMLEdBQVc3QixJQUFJLENBQUM2QixHQUFoQjtBQUNBLFNBQUt2QyxhQUFMLEdBQXFCVSxJQUFJLENBQUNWLGFBQTFCO0FBQ0EsU0FBS3dDLGFBQUwsR0FBcUI5QixJQUFJLENBQUM4QixhQUExQjtBQUNBLFNBQUtDLFlBQUwsR0FBb0IvQixJQUFJLENBQUMrQixZQUF6QjtBQUNBLFNBQUtDLGdCQUFMLDRCQUF3QmhDLElBQUksQ0FBQ2dDLGdCQUE3QixvQ0FBaUQsSUFBakQ7QUFDQSxTQUFLQyxtQkFBTCw0QkFBMkJqQyxJQUFJLENBQUNpQyxtQkFBaEMsb0NBQXVELElBQXZEO0FBQ0g7O0FBRVNDLGVBQWEsQ0FBQ0MsR0FBRCxFQUFnQjtBQUNuQyxRQUFJLENBQUNBLEdBQUwsRUFBVTtBQUNOLGFBQU8sSUFBUDtBQUNIOztBQUVELFFBQU1DLGFBQWEsR0FBRyxJQUFJQyxNQUFKLGVBQXlCLEdBQXpCLENBQXRCO0FBQ0EsUUFBTVIsR0FBRyxHQUFHTSxHQUFHLENBQUNHLEtBQUosQ0FBVUYsYUFBVixDQUFaO0FBRUEsV0FBT1AsR0FBRyxDQUFDLENBQUQsQ0FBVjtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNnQixNQUFSUCxRQUFRLENBQUNBLFFBQUQsRUFBbUI7QUFDM0IsUUFBSSxLQUFLWixZQUFULEVBQXVCO0FBQ25CLFdBQUtBLFlBQUwsQ0FBa0I2QixHQUFsQixHQUF3QmpCLFFBQXhCO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7QUFDZ0IsTUFBUkMsUUFBUSxDQUFDQSxRQUFELEVBQW1CO0FBQzNCLFFBQUksS0FBS2IsWUFBVCxFQUF1QjtBQUNuQixXQUFLQSxZQUFMLENBQWtCOEIsR0FBbEIsR0FBd0JqQixRQUF4QjtBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ2MsTUFBTkUsTUFBTSxDQUFDQSxNQUFELEVBQWtDO0FBQ3hDLFNBQUt2QixtQkFBTCxDQUF5QkcsbUJBQXpCLEVBQThDO0FBQUVvQjtBQUFGLEtBQTlDO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ3VCLE1BQWZDLGVBQWUsQ0FBQ0YsSUFBRCxFQUFlO0FBQzlCLFFBQUksS0FBS2IsV0FBVCxFQUFzQjtBQUNsQixXQUFLQSxXQUFMLENBQWlCbkIsU0FBakIsR0FBNkJnQyxJQUE3QjtBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ21CLE1BQVhHLFdBQVcsQ0FBQ2MsTUFBRCxFQUFpQjtBQUM1QixTQUFLdkMsbUJBQUwsQ0FBeUJFLG1CQUF6QixFQUE4QztBQUFFcUM7QUFBRixLQUE5QztBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNvQixNQUFaYixZQUFZLENBQUNBLFlBQUQsRUFBdUI7QUFDbkMsUUFBSSxLQUFLbEMsbUJBQVQsRUFBOEI7QUFDMUIsV0FBS0EsbUJBQUwsQ0FBeUJGLFNBQXpCLEdBQXFDb0MsWUFBckM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNXLE1BQUhDLEdBQUcsQ0FBQ2hCLFVBQUQsRUFBcUI7QUFDeEIsUUFBSSxLQUFLQSxVQUFULEVBQXFCO0FBQ2pCLFdBQUtBLFVBQUwsQ0FBZ0I2QixPQUFoQixHQUEwQjdCLFVBQTFCO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7QUFDcUIsTUFBYnZCLGFBQWEsQ0FBQ0EsYUFBRCxFQUF3QjtBQUNyQyxRQUFJLEtBQUtDLG9CQUFULEVBQStCO0FBQzNCLFdBQUtBLG9CQUFMLENBQTBCQyxTQUExQixHQUFzQ0YsYUFBdEM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNxQixNQUFid0MsYUFBYSxDQUFDQSxhQUFELEVBQXdCO0FBQ3JDLFFBQUksS0FBS2hCLHFCQUFULEVBQWdDO0FBQzVCLFdBQUtBLHFCQUFMLENBQTJCNkIsT0FBM0IsQ0FBb0NDLE9BQUQsSUFBaUNBLE9BQU8sQ0FBQ0MsSUFBUixHQUFlZixhQUFuRjtBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ29CLE1BQVpDLFlBQVksQ0FBQ0EsWUFBRCxFQUF1QjtBQUNuQyxRQUFJLEtBQUtoQixvQkFBVCxFQUErQjtBQUMzQixXQUFLQSxvQkFBTCxDQUEwQjhCLElBQTFCLEdBQWlDZCxZQUFqQztBQUNIOztBQUVELFNBQUs3QixtQkFBTCxDQUF5QkksNEJBQXpCLEVBQXVEO0FBQUV1QixTQUFHLEVBQUUsS0FBS0ssYUFBTCxDQUFtQkgsWUFBbkI7QUFBUCxLQUF2RDtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUN3QixNQUFoQkMsZ0JBQWdCLENBQUNBLGdCQUFELEVBQXdCO0FBQ3hDLFFBQUksS0FBS2hCLDBCQUFULEVBQXFDO0FBQ2pDLFdBQUtBLDBCQUFMLENBQWdDOEIsUUFBaEMsR0FBMkMsQ0FBQ2QsZ0JBQTVDO0FBQ0EsV0FBS2hCLDBCQUFMLENBQWdDK0IsT0FBaEMsQ0FBd0NaLEdBQXhDLEdBQThDSCxnQkFBOUM7QUFDSDs7QUFFRCxTQUFLOUIsbUJBQUwsQ0FBeUJLLGlDQUF6QixFQUE0RDtBQUFFc0IsU0FBRyxFQUFFLEtBQUtLLGFBQUwsQ0FBbUJGLGdCQUFuQjtBQUFQLEtBQTVEO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQzJCLE1BQW5CQyxtQkFBbUIsQ0FBQ0EsbUJBQUQsRUFBMkI7QUFDOUMsUUFBSSxLQUFLaEIsb0JBQVQsRUFBK0I7QUFDM0IsV0FBS0Esb0JBQUwsQ0FBMEIrQixNQUExQixHQUFtQ2YsbUJBQW5DO0FBQ0g7O0FBRUQsUUFBSSxLQUFLZixzQkFBVCxFQUFpQztBQUM3QixXQUFLQSxzQkFBTCxDQUE0QjZCLE9BQTVCLENBQW9DRSxVQUFwQyxHQUFpRGhCLG1CQUFqRDtBQUNIOztBQUVELFNBQUsvQixtQkFBTCxDQUF5Qk0sb0NBQXpCLEVBQStEO0FBQzNEcUIsU0FBRyxFQUFFLEtBQUtLLGFBQUwsQ0FBbUJELG1CQUFuQjtBQURzRCxLQUEvRDtBQUdIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDZ0IsTUFBUlgsUUFBUSxHQUFXO0FBQ25CLFFBQUksS0FBS1osWUFBVCxFQUF1QjtBQUNuQixhQUFPLEtBQUtBLFlBQUwsQ0FBa0I2QixHQUF6QjtBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUN1QixNQUFmYixlQUFlLEdBQVc7QUFDMUIsUUFBSSxLQUFLZixXQUFULEVBQXNCO0FBQ2xCLGFBQU8sS0FBS0EsV0FBTCxDQUFpQm5CLFNBQXhCO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTs7O0FBQ21CLE1BQVhtQyxXQUFXLEdBQVc7QUFDdEIsUUFBSSxLQUFLZixhQUFULEVBQXdCO0FBQ3BCLGFBQU9zQyxNQUFNLENBQUMsS0FBS3RDLGFBQUwsQ0FBbUJ1QyxLQUFwQixDQUFiO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTs7O0FBQ29CLE1BQVp2QixZQUFZLEdBQVc7QUFDdkIsUUFBSSxLQUFLbEMsbUJBQVQsRUFBOEI7QUFDMUIsYUFBTyxLQUFLQSxtQkFBTCxDQUF5QkYsU0FBaEM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDVyxNQUFIcUMsR0FBRyxHQUFXO0FBQ2QsUUFBSSxLQUFLaEIsVUFBVCxFQUFxQjtBQUNqQixhQUFPLEtBQUtBLFVBQUwsQ0FBZ0I2QixPQUF2QjtBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUNxQixNQUFicEQsYUFBYSxHQUFXO0FBQ3hCLFFBQUksS0FBS0Msb0JBQVQsRUFBK0I7QUFDM0IsYUFBTyxLQUFLQSxvQkFBTCxDQUEwQkMsU0FBakM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDcUIsTUFBYnNDLGFBQWEsR0FBVztBQUN4QixRQUFJLEtBQUtoQixxQkFBVCxFQUFnQztBQUM1QixhQUFPLEtBQUtBLHFCQUFMLENBQTJCLENBQTNCLEVBQThCK0IsSUFBckM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDb0IsTUFBWmQsWUFBWSxHQUFXO0FBQ3ZCLFFBQUksS0FBS2hCLG9CQUFULEVBQStCO0FBQzNCLGFBQU8sS0FBS0Esb0JBQUwsQ0FBMEI4QixJQUFqQztBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUN3QixNQUFoQmIsZ0JBQWdCLEdBQVc7QUFDM0IsUUFBSSxLQUFLaEIsMEJBQVQsRUFBcUM7QUFDakMsYUFBTyxLQUFLQSwwQkFBTCxDQUFnQytCLE9BQWhDLENBQXdDWixHQUEvQztBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUMyQixNQUFuQkYsbUJBQW1CLEdBQVc7QUFDOUIsUUFBSSxLQUFLaEIsb0JBQVQsRUFBK0I7QUFDM0IsYUFBTyxLQUFLQSxvQkFBTCxDQUEwQitCLE1BQWpDO0FBQ0g7O0FBRUQsUUFBSSxLQUFLOUIsc0JBQVQsRUFBaUM7QUFDN0IsYUFBTyxLQUFLQSxzQkFBTCxDQUE0QjZCLE9BQTVCLENBQW9DRSxVQUEzQztBQUNIO0FBQ0o7O0FBaFM4QyxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnByb2R1Y3QtaXRlbS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBQcm9kdWN0SXRlbUNvcmUsIHtcbiAgICBQcm9kdWN0SXRlbURhdGEgYXMgUHJvZHVjdEl0ZW1EYXRhQ29yZSxcbn0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCA9ICd1cGRhdGVSZXZpZXdDb3VudCc7XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1EYXRhIGV4dGVuZHMgUHJvZHVjdEl0ZW1EYXRhQ29yZSB7XG4gICAgcmV2aWV3Q291bnQ6IG51bWJlcjtcbn1cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdEl0ZW0gZXh0ZW5kcyBQcm9kdWN0SXRlbUNvcmUge1xuICAgIHByb3RlY3RlZCBwcm9kdWN0UmV2aWV3Q291bnQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdFJldmlld0NvdW50ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3Jldmlldy1jb3VudGApWzBdO1xuXG4gICAgICAgIHN1cGVyLmluaXQoKTtcbiAgICB9XG5cbiAgICBzZXQgb3JpZ2luYWxQcmljZShvcmlnaW5hbFByaWNlOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UuaW5uZXJUZXh0ID0gb3JpZ2luYWxQcmljZTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuc2V0RGVmYXVsdFByaWNlQ29sb3Iob3JpZ2luYWxQcmljZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldERlZmF1bHRQcmljZUNvbG9yKG9yaWdpbmFsUHJpY2U6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKCFvcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmNsYXNzTGlzdC5hZGQodGhpcy5kZWZhdWx0UHJpY2VDb2xvckNsYXNzTmFtZSk7XG4gICAgfVxuXG4gICAgdXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGE6IFByb2R1Y3RJdGVtRGF0YSk6IHZvaWQge1xuICAgICAgICBzdXBlci51cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YSk7XG4gICAgICAgIHRoaXMucmV2aWV3Q291bnQgPSBkYXRhLnJldmlld0NvdW50O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXQgcmV2aWV3Q291bnQocmV2aWV3Q291bnQ6IG51bWJlcikge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCwgeyByZXZpZXdDb3VudCB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZGVmYXVsdC1wcmljZS1jb2xvci1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIiwiLyogdHNsaW50OmRpc2FibGU6IG1heC1maWxlLWxpbmUtY291bnQgKi9cbmltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5cbi8qKlxuICogQGV2ZW50IHVwZGF0ZVJhdGluZyBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgcmF0aW5nIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlTGFiZWxzIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBsYWJlbHMgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBZGRUb0NhcnRVcmwgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0ICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWpheEFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTCBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydEZvcm1BY3Rpb24gQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0ICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24gaGFzIGJlZW4gdXBkYXRlZC5cbiAqL1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9SQVRJTkcgPSAndXBkYXRlUmF0aW5nJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfTEFCRUxTID0gJ3VwZGF0ZUxhYmVscyc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCA9ICd1cGRhdGVBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCA9ICd1cGRhdGVBamF4QWRkVG9DYXJ0VXJsJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfRk9STV9BQ1RJT04gPSAndXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbic7XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1EYXRhIHtcbiAgICBpbWFnZVVybDogc3RyaW5nO1xuICAgIGltYWdlQWx0OiBzdHJpbmc7XG4gICAgbGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXTtcbiAgICBuYW1lOiBzdHJpbmc7XG4gICAgcmF0aW5nVmFsdWU6IG51bWJlcjtcbiAgICBkZWZhdWx0UHJpY2U6IHN0cmluZztcbiAgICBza3U6IHN0cmluZztcbiAgICBvcmlnaW5hbFByaWNlOiBzdHJpbmc7XG4gICAgZGV0YWlsUGFnZVVybDogc3RyaW5nO1xuICAgIGFkZFRvQ2FydFVybDogc3RyaW5nO1xuICAgIGFqYXhBZGRUb0NhcnRVcmw/OiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0Rm9ybUFjdGlvbj86IHN0cmluZztcbn1cblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbUxhYmVsc0RhdGEge1xuICAgIHRleHQ6IHN0cmluZztcbiAgICB0eXBlOiBzdHJpbmc7XG59XG5cbnR5cGUgVXJsID0gc3RyaW5nIHwgbnVsbDtcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdEl0ZW0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBwcm9kdWN0SW1hZ2U6IEhUTUxJbWFnZUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3ROYW1lOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFJhdGluZzogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdERlZmF1bHRQcmljZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RTa3U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0T3JpZ2luYWxQcmljZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMaW5rRGV0YWlsUGFnZTogSFRNTEFuY2hvckVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtBZGRUb0NhcnQ6IEhUTUxBbmNob3JFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RGb3JtQWRkVG9DYXJ0OiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RCdXR0b25BZGRUb0NhcnQ6IEhUTUxCdXR0b25FbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdEltYWdlID0gPEhUTUxJbWFnZUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW1hZ2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TmFtZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19uYW1lYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFJhdGluZyA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3JhdGluZ2ApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZGVmYXVsdC1wcmljZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RTa3UgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19za3VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19vcmlnaW5hbC1wcmljZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSA9IDxIVE1MQW5jaG9yRWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1kZXRhaWwtcGFnZWApKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0ID0gPEhUTUxBbmNob3JFbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xpbmstYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0ID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2FqYXgtYnV0dG9uLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZm9ybS1hZGQtdG8tY2FydGApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYnV0dG9uLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICogQHBhcmFtIGRhdGEgQSBkYXRhIG9iamVjdCBmb3Igc2V0dGluZyB0aGUgcHJvZHVjdCBjYXJkIGluZm9ybWF0aW9uLlxuICAgICAqL1xuICAgIHVwZGF0ZVByb2R1Y3RJdGVtRGF0YShkYXRhOiBQcm9kdWN0SXRlbURhdGEpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbWFnZVVybCA9IGRhdGEuaW1hZ2VVcmw7XG4gICAgICAgIHRoaXMuaW1hZ2VBbHQgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMubGFiZWxzID0gZGF0YS5sYWJlbHM7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1OYW1lID0gZGF0YS5uYW1lO1xuICAgICAgICB0aGlzLnJhdGluZ1ZhbHVlID0gZGF0YS5yYXRpbmdWYWx1ZTtcbiAgICAgICAgdGhpcy5kZWZhdWx0UHJpY2UgPSBkYXRhLmRlZmF1bHRQcmljZTtcbiAgICAgICAgdGhpcy5za3UgPSBkYXRhLnNrdTtcbiAgICAgICAgdGhpcy5vcmlnaW5hbFByaWNlID0gZGF0YS5vcmlnaW5hbFByaWNlO1xuICAgICAgICB0aGlzLmRldGFpbFBhZ2VVcmwgPSBkYXRhLmRldGFpbFBhZ2VVcmw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0VXJsID0gZGF0YS5hZGRUb0NhcnRVcmw7XG4gICAgICAgIHRoaXMuYWpheEFkZFRvQ2FydFVybCA9IGRhdGEuYWpheEFkZFRvQ2FydFVybCA/PyBudWxsO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydEZvcm1BY3Rpb24gPSBkYXRhLmFkZFRvQ2FydEZvcm1BY3Rpb24gPz8gbnVsbDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0U2t1RnJvbVVybCh1cmw6IFVybCk6IFVybCB7XG4gICAgICAgIGlmICghdXJsKSB7XG4gICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IGxhc3RQYXJ0T2ZVcmwgPSBuZXcgUmVnRXhwKGAoW15cXFxcL10pKyRgLCAnZycpO1xuICAgICAgICBjb25zdCBza3UgPSB1cmwubWF0Y2gobGFzdFBhcnRPZlVybCk7XG5cbiAgICAgICAgcmV0dXJuIHNrdVswXTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqIEBwYXJhbSBpbWFnZVVybCBBIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGltYWdlVXJsKGltYWdlVXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZS5zcmMgPSBpbWFnZVVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBhbHQuXG4gICAgICogQHBhcmFtIGltYWdlQWx0IEEgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VBbHQoaW1hZ2VBbHQ6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLmFsdCA9IGltYWdlQWx0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKiBAcGFyYW0gbGFiZWxzIEFuIGFycmF5IG9mIHByb2R1Y3QgY2FyZCBsYWJlbHMuXG4gICAgICovXG4gICAgc2V0IGxhYmVscyhsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfTEFCRUxTLCB7IGxhYmVscyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKiBAcGFyYW0gbmFtZSBBIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIHNldCBwcm9kdWN0SXRlbU5hbWUobmFtZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3ROYW1lKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dCA9IG5hbWU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqIEBwYXJhbSByYXRpbmcgQSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqL1xuICAgIHNldCByYXRpbmdWYWx1ZShyYXRpbmc6IG51bWJlcikge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX1JBVElORywgeyByYXRpbmcgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICogQHBhcmFtIGRlZmF1bHRQcmljZSBBIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIHNldCBkZWZhdWx0UHJpY2UoZGVmYXVsdFByaWNlOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmlubmVyVGV4dCA9IGRlZmF1bHRQcmljZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICogQHBhcmFtIHByb2R1Y3RTa3UgQSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIHNldCBza3UocHJvZHVjdFNrdTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RTa3UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdFNrdS5jb250ZW50ID0gcHJvZHVjdFNrdTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKiBAcGFyYW0gb3JpZ2luYWxQcmljZSBBIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKi9cbiAgICBzZXQgb3JpZ2luYWxQcmljZShvcmlnaW5hbFByaWNlOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UuaW5uZXJUZXh0ID0gb3JpZ2luYWxQcmljZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICogQHBhcmFtIGRldGFpbFBhZ2VVcmwgQSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBkZXRhaWxQYWdlVXJsKGRldGFpbFBhZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxBbmNob3JFbGVtZW50KSA9PiAoZWxlbWVudC5ocmVmID0gZGV0YWlsUGFnZVVybCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhZGRUb0NhcnRVcmwgQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFkZFRvQ2FydFVybChhZGRUb0NhcnRVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydC5ocmVmID0gYWRkVG9DYXJ0VXJsO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0VXJsKSB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKiBAcGFyYW0gYWpheEFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIHNldCBhamF4QWRkVG9DYXJ0VXJsKGFqYXhBZGRUb0NhcnRVcmw6IFVybCkge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kaXNhYmxlZCA9ICFhamF4QWRkVG9DYXJ0VXJsO1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybCA9IGFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMLCB7IHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFqYXhBZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqIEBwYXJhbSBhZGRUb0NhcnRGb3JtQWN0aW9uIEEgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICovXG4gICAgc2V0IGFkZFRvQ2FydEZvcm1BY3Rpb24oYWRkVG9DYXJ0Rm9ybUFjdGlvbjogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0LmFjdGlvbiA9IGFkZFRvQ2FydEZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQuZGF0YXNldC5mb3JtQWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfRk9STV9BQ1RJT04sIHtcbiAgICAgICAgICAgIHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFkZFRvQ2FydEZvcm1BY3Rpb24pLFxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBpbWFnZVVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RJbWFnZS5zcmM7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKi9cbiAgICBnZXQgcHJvZHVjdEl0ZW1OYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3ROYW1lKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TmFtZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqL1xuICAgIGdldCByYXRpbmdWYWx1ZSgpOiBudW1iZXIge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0UmF0aW5nKSB7XG4gICAgICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMucHJvZHVjdFJhdGluZy52YWx1ZSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKi9cbiAgICBnZXQgZGVmYXVsdFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKi9cbiAgICBnZXQgc2t1KCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RTa3UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RTa3UuY29udGVudDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKi9cbiAgICBnZXQgb3JpZ2luYWxQcmljZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgZGV0YWlsUGFnZVVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZVswXS5ocmVmO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgYWpheEFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGF0YXNldC51cmw7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbigpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb247XG4gICAgICAgIH1cbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9