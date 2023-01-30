(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["rating-selector"],{

/***/ "./src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts":
/*!****************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts ***!
  \****************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RatingSelector; });
/* harmony import */ var ProductReviewWidget_components_molecules_rating_selector_rating_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ProductReviewWidget/components/molecules/rating-selector/rating-selector */ "./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts");
/* harmony import */ var src_ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! src/ShopUi/components/molecules/product-item/product-item */ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");


class RatingSelector extends ProductReviewWidget_components_molecules_rating_selector_rating_selector__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.reviewCount = void 0;
  }

  init() {
    this.reviewCount = this.getElementsByClassName(this.jsName + "__review-count")[0];
    super.init();
  }

  mapUpdateRatingEvents() {
    super.mapUpdateRatingEvents();
    this.mapProductItemUpdateReviewCountCustomEvent();
  }

  mapProductItemUpdateReviewCountCustomEvent() {
    if (!this.productItem) {
      return;
    }

    this.productItem.addEventListener(src_ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__["EVENT_UPDATE_REVIEW_COUNT"], event => {
      this.updateReviewCount(event.detail.reviewCount);
    });
  }

  updateReviewCount(value) {
    if (this.reviewCount) {
      this.reviewCount.innerText = "(" + value + ")";
    }
  }

}

/***/ }),

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

/***/ "./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts":
/*!******************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RatingSelector; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");


class RatingSelector extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.input = void 0;
    this.steps = void 0;
    this.productItem = void 0;
  }

  readyCallback() {
    this.input = this.getElementsByClassName(this.jsName + "__input")[0];
    this.steps = Array.from(this.getElementsByClassName(this.jsName + "__step"));

    if (this.productItemClassName) {
      this.productItem = this.closest("." + this.productItemClassName);
    }

    if (!this.readOnly) {
      this.checkInput(this.value);
      this.mapEvents();
    }

    this.mapUpdateRatingEvents();
  }

  mapEvents() {
    this.mapStepClickEvent();
  }

  mapStepClickEvent() {
    this.steps.forEach(step => {
      step.addEventListener('click', event => this.onStepClick(event));
    });
  }

  mapUpdateRatingEvents() {
    if (!this.productItem) {
      return;
    }

    this.mapProductItemUpdateRatingCustomEvent();
  }

  mapProductItemUpdateRatingCustomEvent() {
    this.productItem.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__["EVENT_UPDATE_RATING"], event => {
      this.updateRating(event.detail.rating);
    });
  }

  onStepClick(event) {
    var step = event.currentTarget;
    var newValue = parseFloat(step.getAttribute('data-step-value'));
    this.checkInput(newValue);
    this.updateRating(newValue);
  }
  /**
   * Toggles the disabled attribute of the input element.
   * @param value A number for checking if the attribute is to be set or removed from the input element.
   */


  checkInput(value) {
    if (!this.disableIfEmptyValue) {
      return;
    }

    if (!value) {
      this.input.setAttribute('disabled', 'disabled');
      return;
    }

    this.input.removeAttribute('disabled');
  }
  /**
   * Sets the value attribute and toggles the special class name.
   * @param value A number for setting the attribute.
   */


  updateRating(value) {
    this.input.setAttribute('value', "" + value);
    this.steps.forEach(step => {
      var stepValue = parseFloat(step.getAttribute('data-step-value'));

      if (value >= stepValue) {
        step.classList.add(this.name + "__step--active");
        return;
      }

      step.classList.remove(this.name + "__step--active");
    });
  }
  /**
   * Gets an input value.
   */


  get value() {
    return parseFloat(this.input.value);
  }
  /**
   * Gets if the element is read-only.
   */


  get readOnly() {
    return this.hasAttribute('readonly');
  }
  /**
   * Gets if the element has an empty value.
   */


  get disableIfEmptyValue() {
    return this.hasAttribute('disable-if-empty-value');
  }

  get productItemClassName() {
    return this.getAttribute('product-item-class-name');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdFJldmlld1dpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LXJldmlldy13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdFJldmlld1dpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0udHMiXSwibmFtZXMiOlsiUmF0aW5nU2VsZWN0b3IiLCJSYXRpbmdTZWxlY3RvckNvcmUiLCJyZXZpZXdDb3VudCIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwibWFwVXBkYXRlUmF0aW5nRXZlbnRzIiwibWFwUHJvZHVjdEl0ZW1VcGRhdGVSZXZpZXdDb3VudEN1c3RvbUV2ZW50IiwicHJvZHVjdEl0ZW0iLCJhZGRFdmVudExpc3RlbmVyIiwiRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCIsImV2ZW50IiwidXBkYXRlUmV2aWV3Q291bnQiLCJkZXRhaWwiLCJ2YWx1ZSIsImlubmVyVGV4dCIsIlByb2R1Y3RJdGVtIiwiUHJvZHVjdEl0ZW1Db3JlIiwicHJvZHVjdFJldmlld0NvdW50Iiwib3JpZ2luYWxQcmljZSIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwic2V0RGVmYXVsdFByaWNlQ29sb3IiLCJwcm9kdWN0RGVmYXVsdFByaWNlIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUiLCJhZGQiLCJ1cGRhdGVQcm9kdWN0SXRlbURhdGEiLCJkYXRhIiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCIsImlucHV0Iiwic3RlcHMiLCJyZWFkeUNhbGxiYWNrIiwiQXJyYXkiLCJmcm9tIiwicHJvZHVjdEl0ZW1DbGFzc05hbWUiLCJjbG9zZXN0IiwicmVhZE9ubHkiLCJjaGVja0lucHV0IiwibWFwRXZlbnRzIiwibWFwU3RlcENsaWNrRXZlbnQiLCJmb3JFYWNoIiwic3RlcCIsIm9uU3RlcENsaWNrIiwibWFwUHJvZHVjdEl0ZW1VcGRhdGVSYXRpbmdDdXN0b21FdmVudCIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJ1cGRhdGVSYXRpbmciLCJyYXRpbmciLCJjdXJyZW50VGFyZ2V0IiwibmV3VmFsdWUiLCJwYXJzZUZsb2F0IiwiZGlzYWJsZUlmRW1wdHlWYWx1ZSIsInNldEF0dHJpYnV0ZSIsInJlbW92ZUF0dHJpYnV0ZSIsInN0ZXBWYWx1ZSIsIm5hbWUiLCJoYXNBdHRyaWJ1dGUiLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsInByb2R1Y3RJbWFnZSIsInByb2R1Y3ROYW1lIiwicHJvZHVjdFJhdGluZyIsInByb2R1Y3RTa3UiLCJwcm9kdWN0TGlua0RldGFpbFBhZ2UiLCJwcm9kdWN0TGlua0FkZFRvQ2FydCIsInByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0IiwicHJvZHVjdEZvcm1BZGRUb0NhcnQiLCJwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0IiwiaW1hZ2VVcmwiLCJpbWFnZUFsdCIsImxhYmVscyIsInByb2R1Y3RJdGVtTmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwic2t1IiwiZGV0YWlsUGFnZVVybCIsImFkZFRvQ2FydFVybCIsImFqYXhBZGRUb0NhcnRVcmwiLCJhZGRUb0NhcnRGb3JtQWN0aW9uIiwiZ2V0U2t1RnJvbVVybCIsInVybCIsImxhc3RQYXJ0T2ZVcmwiLCJSZWdFeHAiLCJtYXRjaCIsInNyYyIsImFsdCIsImNvbnRlbnQiLCJlbGVtZW50IiwiaHJlZiIsImRpc2FibGVkIiwiZGF0YXNldCIsImFjdGlvbiIsImZvcm1BY3Rpb24iLCJOdW1iZXIiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFFZSxNQUFNQSxjQUFOLFNBQTZCQyxnSEFBN0IsQ0FBZ0Q7QUFBQTtBQUFBO0FBQUEsU0FDakRDLFdBRGlEO0FBQUE7O0FBR2pEQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0QsV0FBTCxHQUFnQyxLQUFLRSxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxxQkFBNEQsQ0FBNUQsQ0FBaEM7QUFFQSxVQUFNRixJQUFOO0FBQ0g7O0FBRVNHLHVCQUFxQixHQUFTO0FBQ3BDLFVBQU1BLHFCQUFOO0FBQ0EsU0FBS0MsMENBQUw7QUFDSDs7QUFFU0EsNENBQTBDLEdBQUc7QUFDbkQsUUFBSSxDQUFDLEtBQUtDLFdBQVYsRUFBdUI7QUFDbkI7QUFDSDs7QUFFRCxTQUFLQSxXQUFMLENBQWlCQyxnQkFBakIsQ0FBa0NDLG1IQUFsQyxFQUE4REMsS0FBRCxJQUFrQjtBQUMzRSxXQUFLQyxpQkFBTCxDQUFxQ0QsS0FBZCxDQUFxQkUsTUFBckIsQ0FBNEJYLFdBQW5EO0FBQ0gsS0FGRDtBQUdIOztBQUVTVSxtQkFBaUIsQ0FBQ0UsS0FBRCxFQUFzQjtBQUM3QyxRQUFJLEtBQUtaLFdBQVQsRUFBc0I7QUFDbEIsV0FBS0EsV0FBTCxDQUFpQmEsU0FBakIsU0FBaUNELEtBQWpDO0FBQ0g7QUFD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TyxLQUFLQSxvQkFBTCxDQUEwQkwsU0FBakM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDcUIsTUFBYmdFLGFBQWEsR0FBVztBQUN4QixRQUFJLEtBQUtaLHFCQUFULEVBQWdDO0FBQzVCLGFBQU8sS0FBS0EscUJBQUwsQ0FBMkIsQ0FBM0IsRUFBOEJ5QixJQUFyQztBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUNvQixNQUFaWixZQUFZLEdBQVc7QUFDdkIsUUFBSSxLQUFLWixvQkFBVCxFQUErQjtBQUMzQixhQUFPLEtBQUtBLG9CQUFMLENBQTBCd0IsSUFBakM7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7QUFDd0IsTUFBaEJYLGdCQUFnQixHQUFXO0FBQzNCLFFBQUksS0FBS1osMEJBQVQsRUFBcUM7QUFDakMsYUFBTyxLQUFLQSwwQkFBTCxDQUFnQ3lCLE9BQWhDLENBQXdDVixHQUEvQztBQUNIO0FBQ0o7QUFFRDtBQUNKO0FBQ0E7OztBQUMyQixNQUFuQkYsbUJBQW1CLEdBQVc7QUFDOUIsUUFBSSxLQUFLWixvQkFBVCxFQUErQjtBQUMzQixhQUFPLEtBQUtBLG9CQUFMLENBQTBCeUIsTUFBakM7QUFDSDs7QUFFRCxRQUFJLEtBQUt4QixzQkFBVCxFQUFpQztBQUM3QixhQUFPLEtBQUtBLHNCQUFMLENBQTRCdUIsT0FBNUIsQ0FBb0NFLFVBQTNDO0FBQ0g7QUFDSjs7QUFoUzhDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucmF0aW5nLXNlbGVjdG9yLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJhdGluZ1NlbGVjdG9yQ29yZSBmcm9tICdQcm9kdWN0UmV2aWV3V2lkZ2V0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3InO1xuaW1wb3J0IHsgRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCB9IGZyb20gJ3NyYy9TaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFJhdGluZ1NlbGVjdG9yIGV4dGVuZHMgUmF0aW5nU2VsZWN0b3JDb3JlIHtcbiAgICBwcm90ZWN0ZWQgcmV2aWV3Q291bnQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucmV2aWV3Q291bnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmV2aWV3LWNvdW50YClbMF07XG5cbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBVcGRhdGVSYXRpbmdFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm1hcFVwZGF0ZVJhdGluZ0V2ZW50cygpO1xuICAgICAgICB0aGlzLm1hcFByb2R1Y3RJdGVtVXBkYXRlUmV2aWV3Q291bnRDdXN0b21FdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBQcm9kdWN0SXRlbVVwZGF0ZVJldmlld0NvdW50Q3VzdG9tRXZlbnQoKSB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0SXRlbSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbS5hZGRFdmVudExpc3RlbmVyKEVWRU5UX1VQREFURV9SRVZJRVdfQ09VTlQsIChldmVudDogRXZlbnQpID0+IHtcbiAgICAgICAgICAgIHRoaXMudXBkYXRlUmV2aWV3Q291bnQoKDxDdXN0b21FdmVudD5ldmVudCkuZGV0YWlsLnJldmlld0NvdW50KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZVJldmlld0NvdW50KHZhbHVlOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMucmV2aWV3Q291bnQpIHtcbiAgICAgICAgICAgIHRoaXMucmV2aWV3Q291bnQuaW5uZXJUZXh0ID0gYCgke3ZhbHVlfSlgO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiaW1wb3J0IFByb2R1Y3RJdGVtQ29yZSwge1xuICAgIFByb2R1Y3RJdGVtRGF0YSBhcyBQcm9kdWN0SXRlbURhdGFDb3JlLFxufSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5UID0gJ3VwZGF0ZVJldmlld0NvdW50JztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEgZXh0ZW5kcyBQcm9kdWN0SXRlbURhdGFDb3JlIHtcbiAgICByZXZpZXdDb3VudDogbnVtYmVyO1xufVxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIFByb2R1Y3RJdGVtQ29yZSB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RSZXZpZXdDb3VudDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmV2aWV3Q291bnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmV2aWV3LWNvdW50YClbMF07XG5cbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgIH1cblxuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5zZXREZWZhdWx0UHJpY2VDb2xvcihvcmlnaW5hbFByaWNlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0RGVmYXVsdFByaWNlQ29sb3Iob3JpZ2luYWxQcmljZTogc3RyaW5nKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIW9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuY2xhc3NMaXN0LmFkZCh0aGlzLmRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lKTtcbiAgICB9XG5cbiAgICB1cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YTogUHJvZHVjdEl0ZW1EYXRhKTogdm9pZCB7XG4gICAgICAgIHN1cGVyLnVwZGF0ZVByb2R1Y3RJdGVtRGF0YShkYXRhKTtcbiAgICAgICAgdGhpcy5yZXZpZXdDb3VudCA9IGRhdGEucmV2aWV3Q291bnQ7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldCByZXZpZXdDb3VudChyZXZpZXdDb3VudDogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5ULCB7IHJldmlld0NvdW50IH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdkZWZhdWx0LXByaWNlLWNvbG9yLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBQcm9kdWN0SXRlbSwgeyBFVkVOVF9VUERBVEVfUkFUSU5HIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBSYXRpbmdTZWxlY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogVGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICovXG4gICAgaW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBDb2xsZWN0aW9uIG9mIHRoZSBlbGVtZW50cyB3aGljaCB0b2dnbGUgdGhlIHN0ZXBzIG9mIHRoZSBwcm9kdWN0IHJldmlldy5cbiAgICAgKi9cbiAgICBzdGVwczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEl0ZW06IFByb2R1Y3RJdGVtO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dGApWzBdO1xuICAgICAgICB0aGlzLnN0ZXBzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zdGVwYCkpO1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SXRlbUNsYXNzTmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SXRlbSA9IDxQcm9kdWN0SXRlbT50aGlzLmNsb3Nlc3QoYC4ke3RoaXMucHJvZHVjdEl0ZW1DbGFzc05hbWV9YCk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIXRoaXMucmVhZE9ubHkpIHtcbiAgICAgICAgICAgIHRoaXMuY2hlY2tJbnB1dCh0aGlzLnZhbHVlKTtcbiAgICAgICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1hcFVwZGF0ZVJhdGluZ0V2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwU3RlcENsaWNrRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwU3RlcENsaWNrRXZlbnQoKSB7XG4gICAgICAgIHRoaXMuc3RlcHMuZm9yRWFjaCgoc3RlcDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHN0ZXAuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uU3RlcENsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBVcGRhdGVSYXRpbmdFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0SXRlbSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tYXBQcm9kdWN0SXRlbVVwZGF0ZVJhdGluZ0N1c3RvbUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFByb2R1Y3RJdGVtVXBkYXRlUmF0aW5nQ3VzdG9tRXZlbnQoKSB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihFVkVOVF9VUERBVEVfUkFUSU5HLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICB0aGlzLnVwZGF0ZVJhdGluZygoPEN1c3RvbUV2ZW50PmV2ZW50KS5kZXRhaWwucmF0aW5nKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uU3RlcENsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzdGVwID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIGNvbnN0IG5ld1ZhbHVlID0gcGFyc2VGbG9hdChzdGVwLmdldEF0dHJpYnV0ZSgnZGF0YS1zdGVwLXZhbHVlJykpO1xuXG4gICAgICAgIHRoaXMuY2hlY2tJbnB1dChuZXdWYWx1ZSk7XG4gICAgICAgIHRoaXMudXBkYXRlUmF0aW5nKG5ld1ZhbHVlKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBUb2dnbGVzIHRoZSBkaXNhYmxlZCBhdHRyaWJ1dGUgb2YgdGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICogQHBhcmFtIHZhbHVlIEEgbnVtYmVyIGZvciBjaGVja2luZyBpZiB0aGUgYXR0cmlidXRlIGlzIHRvIGJlIHNldCBvciByZW1vdmVkIGZyb20gdGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICovXG4gICAgY2hlY2tJbnB1dCh2YWx1ZTogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5kaXNhYmxlSWZFbXB0eVZhbHVlKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIXZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5pbnB1dC5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgdmFsdWUgYXR0cmlidXRlIGFuZCB0b2dnbGVzIHRoZSBzcGVjaWFsIGNsYXNzIG5hbWUuXG4gICAgICogQHBhcmFtIHZhbHVlIEEgbnVtYmVyIGZvciBzZXR0aW5nIHRoZSBhdHRyaWJ1dGUuXG4gICAgICovXG4gICAgdXBkYXRlUmF0aW5nKHZhbHVlOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dC5zZXRBdHRyaWJ1dGUoJ3ZhbHVlJywgYCR7dmFsdWV9YCk7XG5cbiAgICAgICAgdGhpcy5zdGVwcy5mb3JFYWNoKChzdGVwOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3Qgc3RlcFZhbHVlID0gcGFyc2VGbG9hdChzdGVwLmdldEF0dHJpYnV0ZSgnZGF0YS1zdGVwLXZhbHVlJykpO1xuXG4gICAgICAgICAgICBpZiAodmFsdWUgPj0gc3RlcFZhbHVlKSB7XG4gICAgICAgICAgICAgICAgc3RlcC5jbGFzc0xpc3QuYWRkKGAke3RoaXMubmFtZX1fX3N0ZXAtLWFjdGl2ZWApO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBzdGVwLmNsYXNzTGlzdC5yZW1vdmUoYCR7dGhpcy5uYW1lfV9fc3RlcC0tYWN0aXZlYCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYW4gaW5wdXQgdmFsdWUuXG4gICAgICovXG4gICAgZ2V0IHZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBwYXJzZUZsb2F0KHRoaXMuaW5wdXQudmFsdWUpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGVsZW1lbnQgaXMgcmVhZC1vbmx5LlxuICAgICAqL1xuICAgIGdldCByZWFkT25seSgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdyZWFkb25seScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGVsZW1lbnQgaGFzIGFuIGVtcHR5IHZhbHVlLlxuICAgICAqL1xuICAgIGdldCBkaXNhYmxlSWZFbXB0eVZhbHVlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5oYXNBdHRyaWJ1dGUoJ2Rpc2FibGUtaWYtZW1wdHktdmFsdWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHByb2R1Y3RJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJvZHVjdC1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCIvKiB0c2xpbnQ6ZGlzYWJsZTogbWF4LWZpbGUtbGluZS1jb3VudCAqL1xuaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlUmF0aW5nIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCByYXRpbmcgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVMYWJlbHMgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IGxhYmVscyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBamF4QWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBBSkFYICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbiBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbiBoYXMgYmVlbiB1cGRhdGVkLlxuICovXG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX1JBVElORyA9ICd1cGRhdGVSYXRpbmcnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9MQUJFTFMgPSAndXBkYXRlTGFiZWxzJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFqYXhBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiA9ICd1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uJztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEge1xuICAgIGltYWdlVXJsOiBzdHJpbmc7XG4gICAgaW1hZ2VBbHQ6IHN0cmluZztcbiAgICBsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdO1xuICAgIG5hbWU6IHN0cmluZztcbiAgICByYXRpbmdWYWx1ZTogbnVtYmVyO1xuICAgIGRlZmF1bHRQcmljZTogc3RyaW5nO1xuICAgIHNrdTogc3RyaW5nO1xuICAgIG9yaWdpbmFsUHJpY2U6IHN0cmluZztcbiAgICBkZXRhaWxQYWdlVXJsOiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0VXJsOiBzdHJpbmc7XG4gICAgYWpheEFkZFRvQ2FydFVybD86IHN0cmluZztcbiAgICBhZGRUb0NhcnRGb3JtQWN0aW9uPzogc3RyaW5nO1xufVxuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtTGFiZWxzRGF0YSB7XG4gICAgdGV4dDogc3RyaW5nO1xuICAgIHR5cGU6IHN0cmluZztcbn1cblxudHlwZSBVcmwgPSBzdHJpbmcgfCBudWxsO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJbWFnZTogSFRNTEltYWdlRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE5hbWU6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0UmF0aW5nOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0RGVmYXVsdFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFNrdTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RPcmlnaW5hbFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtEZXRhaWxQYWdlOiBIVE1MQW5jaG9yRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0FkZFRvQ2FydDogSFRNTEFuY2hvckVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEZvcm1BZGRUb0NhcnQ6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UgPSA8SFRNTEltYWdlRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbWFnZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3ROYW1lID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX25hbWVgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmF0aW5nID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmF0aW5nYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19kZWZhdWx0LXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFNrdSA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NrdWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX29yaWdpbmFsLXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlID0gPEhUTUxBbmNob3JFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWRldGFpbC1wYWdlYCkpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQgPSA8SFRNTEFuY2hvckVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWpheC1idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0ID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19mb3JtLWFkZC10by1jYXJ0YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKiBAcGFyYW0gZGF0YSBBIGRhdGEgb2JqZWN0IGZvciBzZXR0aW5nIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICovXG4gICAgdXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGE6IFByb2R1Y3RJdGVtRGF0YSk6IHZvaWQge1xuICAgICAgICB0aGlzLmltYWdlVXJsID0gZGF0YS5pbWFnZVVybDtcbiAgICAgICAgdGhpcy5pbWFnZUFsdCA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5sYWJlbHMgPSBkYXRhLmxhYmVscztcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbU5hbWUgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMucmF0aW5nVmFsdWUgPSBkYXRhLnJhdGluZ1ZhbHVlO1xuICAgICAgICB0aGlzLmRlZmF1bHRQcmljZSA9IGRhdGEuZGVmYXVsdFByaWNlO1xuICAgICAgICB0aGlzLnNrdSA9IGRhdGEuc2t1O1xuICAgICAgICB0aGlzLm9yaWdpbmFsUHJpY2UgPSBkYXRhLm9yaWdpbmFsUHJpY2U7XG4gICAgICAgIHRoaXMuZGV0YWlsUGFnZVVybCA9IGRhdGEuZGV0YWlsUGFnZVVybDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRVcmwgPSBkYXRhLmFkZFRvQ2FydFVybDtcbiAgICAgICAgdGhpcy5hamF4QWRkVG9DYXJ0VXJsID0gZGF0YS5hamF4QWRkVG9DYXJ0VXJsID8/IG51bGw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA9IGRhdGEuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA/PyBudWxsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRTa3VGcm9tVXJsKHVybDogVXJsKTogVXJsIHtcbiAgICAgICAgaWYgKCF1cmwpIHtcbiAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgbGFzdFBhcnRPZlVybCA9IG5ldyBSZWdFeHAoYChbXlxcXFwvXSkrJGAsICdnJyk7XG4gICAgICAgIGNvbnN0IHNrdSA9IHVybC5tYXRjaChsYXN0UGFydE9mVXJsKTtcblxuICAgICAgICByZXR1cm4gc2t1WzBdO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICogQHBhcmFtIGltYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VVcmwoaW1hZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLnNyYyA9IGltYWdlVXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VBbHQgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqL1xuICAgIHNldCBpbWFnZUFsdChpbWFnZUFsdDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UuYWx0ID0gaW1hZ2VBbHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqIEBwYXJhbSBsYWJlbHMgQW4gYXJyYXkgb2YgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKi9cbiAgICBzZXQgbGFiZWxzKGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9MQUJFTFMsIHsgbGFiZWxzIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqIEBwYXJhbSBuYW1lIEEgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgc2V0IHByb2R1Y3RJdGVtTmFtZShuYW1lOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0ID0gbmFtZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICogQHBhcmFtIHJhdGluZyBBIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgc2V0IHJhdGluZ1ZhbHVlKHJhdGluZzogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkFUSU5HLCB7IHJhdGluZyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKiBAcGFyYW0gZGVmYXVsdFByaWNlIEEgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IGRlZmF1bHRQcmljZShkZWZhdWx0UHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0ID0gZGVmYXVsdFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKiBAcGFyYW0gcHJvZHVjdFNrdSBBIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgc2V0IHNrdShwcm9kdWN0U2t1OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQgPSBwcm9kdWN0U2t1O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqIEBwYXJhbSBvcmlnaW5hbFByaWNlIEEgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gZGV0YWlsUGFnZVVybCBBIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGRldGFpbFBhZ2VVcmwoZGV0YWlsUGFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UuZm9yRWFjaCgoZWxlbWVudDogSFRNTEFuY2hvckVsZW1lbnQpID0+IChlbGVtZW50LmhyZWYgPSBkZXRhaWxQYWdlVXJsKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0VXJsKGFkZFRvQ2FydFVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWYgPSBhZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhamF4QWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFqYXhBZGRUb0NhcnRVcmwoYWpheEFkZFRvQ2FydFVybDogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRpc2FibGVkID0gIWFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsID0gYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWpheEFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydEZvcm1BY3Rpb24gQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbihhZGRUb0NhcnRGb3JtQWN0aW9uOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiwge1xuICAgICAgICAgICAgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0Rm9ybUFjdGlvbiksXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGltYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEltYWdlLnNyYztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIGdldCBwcm9kdWN0SXRlbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgZ2V0IHJhdGluZ1ZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RSYXRpbmcpIHtcbiAgICAgICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5wcm9kdWN0UmF0aW5nLnZhbHVlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIGdldCBkZWZhdWx0UHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIGdldCBza3UoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFNrdS5jb250ZW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIGdldCBvcmlnaW5hbFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBkZXRhaWxQYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlWzBdLmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhamF4QWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRGb3JtQWN0aW9uKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbjtcbiAgICAgICAgfVxuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=