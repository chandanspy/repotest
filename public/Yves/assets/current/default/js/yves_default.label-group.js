(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["label-group"],{

/***/ "./src/Pyz/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts":
/*!*******************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LabelGroup; });
/* harmony import */ var ProductLabelWidget_components_molecules_label_group_label_group__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ProductLabelWidget/components/molecules/label-group/label-group */ "./vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts");

class LabelGroup extends ProductLabelWidget_components_molecules_label_group_label_group__WEBPACK_IMPORTED_MODULE_0__["default"] {
  setProductLabels(labels) {
    if (!labels.length) {
      this.productLabelFlags.forEach(element => element.classList.add(this.classToToggle));
      return;
    }

    this.updateProductLabels(labels);
  }

  updateProductLabels(labelFlags) {
    labelFlags.forEach((element, index) => {
      if (index) {
        this.createProductLabelFlagClones();
      }

      this.deleteProductLabelFlagClones(labelFlags);
      this.deleteProductLabelFlagModifiers(index);
      this.updateProductLabelFlags(element, index);
    });
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts":
/*!********************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts ***!
  \********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LabelGroup; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");


class LabelGroup extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.productLabelFlags = void 0;
    this.productLabelTag = void 0;
    this.productItem = void 0;
  }

  readyCallback() {}

  init() {
    this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
    this.productLabelTag = this.getElementsByClassName(this.jsName + "__label-tag")[0];

    if (this.productItemClassName) {
      this.productItem = this.closest("." + this.productItemClassName);
    }

    this.mapEvents();
  }

  mapEvents() {
    if (!this.productItem) {
      return;
    }

    this.mapProductItemUpdateLabelsCustomEvent();
  }

  mapProductItemUpdateLabelsCustomEvent() {
    this.productItem.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_1__["EVENT_UPDATE_LABELS"], event => {
      this.setProductLabels(event.detail.labels);
    });
  }
  /**
   * Hides the product labels if data is empty.
   * Splits the labels object to labelFlags and labelTag accordingly.
   * Calls the method for updating product labels.
   * @param labels An array of product labels.
   */


  setProductLabels(labels) {
    if (!labels.length) {
      this.productLabelFlags.forEach(element => element.classList.add(this.classToToggle));
      this.productLabelTag.classList.add(this.classToToggle);
      return;
    }

    var labelTagType = this.productLabelTag.getAttribute('data-label-tag-type');
    var labelFlags = labels.filter(element => element.type !== labelTagType);
    var labelTag = labels.filter(element => element.type === labelTagType);

    if (!labelTag.length) {
      this.productLabelTag.classList.add(this.classToToggle);
    }

    if (!labelFlags.length) {
      this.productLabelFlags.forEach(element => element.classList.add(this.classToToggle));
    }

    this.updateProductLabels(labelFlags, labelTag[0]);
  }

  updateProductLabelTag(element) {
    var labelTagTextContent = this.productLabelTag.getElementsByClassName(this.jsName + "__label-tag-text")[0];
    this.productLabelTag.classList.remove(this.classToToggle);
    labelTagTextContent.innerText = element.text;
  }

  createProductLabelFlagClones() {
    var cloneLabelFlag = this.productLabelFlags[0].cloneNode(true);
    this.productLabelFlags[0].parentNode.insertBefore(cloneLabelFlag, this.productLabelFlags[0].nextSibling);
    this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
  }

  deleteProductLabelFlagClones(labelFlags) {
    while (this.productLabelFlags.length > labelFlags.length) {
      this.productLabelFlags[this.productLabelFlags.length - 1].remove();
      this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
    }
  }

  deleteProductLabelFlagModifiers(index) {
    this.productLabelFlags[index].classList.forEach(element => {
      if (element.includes('--')) {
        this.productLabelFlags[index].classList.remove(element);
      }
    });
  }

  updateProductLabelFlags(element, index) {
    var labelFlagClassName = this.productLabelFlags[index].getAttribute('data-config-name');
    var labelFlagTextContent = this.productLabelFlags[index].getElementsByClassName(this.jsName + "__label-flag-text")[0];

    if (element.type) {
      this.productLabelFlags[index].classList.add(labelFlagClassName + "--" + element.type);
    }

    this.productLabelFlags[index].classList.remove(this.classToToggle);
    labelFlagTextContent.innerText = element.text;
  }

  updateProductLabels(labelFlags, labelTag) {
    if (labelTag) {
      this.updateProductLabelTag(labelTag);
    }

    if (labelFlags.length) {
      labelFlags.forEach((element, index) => {
        if (index >= 1) {
          this.createProductLabelFlagClones();
        }

        this.deleteProductLabelFlagClones(labelFlags);
        this.deleteProductLabelFlagModifiers(index);
        this.updateProductLabelFlags(element, index);
      });
    }
  }

  get classToToggle() {
    return this.getAttribute('class-to-toggle');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdExhYmVsV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvbGFiZWwtZ3JvdXAvbGFiZWwtZ3JvdXAudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LWxhYmVsLXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0TGFiZWxXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9sYWJlbC1ncm91cC9sYWJlbC1ncm91cC50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJMYWJlbEdyb3VwIiwiTGFiZWxHcm91cENvcmUiLCJzZXRQcm9kdWN0TGFiZWxzIiwibGFiZWxzIiwibGVuZ3RoIiwicHJvZHVjdExhYmVsRmxhZ3MiLCJmb3JFYWNoIiwiZWxlbWVudCIsImNsYXNzTGlzdCIsImFkZCIsImNsYXNzVG9Ub2dnbGUiLCJ1cGRhdGVQcm9kdWN0TGFiZWxzIiwibGFiZWxGbGFncyIsImluZGV4IiwiY3JlYXRlUHJvZHVjdExhYmVsRmxhZ0Nsb25lcyIsImRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMiLCJkZWxldGVQcm9kdWN0TGFiZWxGbGFnTW9kaWZpZXJzIiwidXBkYXRlUHJvZHVjdExhYmVsRmxhZ3MiLCJDb21wb25lbnQiLCJwcm9kdWN0TGFiZWxUYWciLCJwcm9kdWN0SXRlbSIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInByb2R1Y3RJdGVtQ2xhc3NOYW1lIiwiY2xvc2VzdCIsIm1hcEV2ZW50cyIsIm1hcFByb2R1Y3RJdGVtVXBkYXRlTGFiZWxzQ3VzdG9tRXZlbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiRVZFTlRfVVBEQVRFX0xBQkVMUyIsImV2ZW50IiwiZGV0YWlsIiwibGFiZWxUYWdUeXBlIiwiZ2V0QXR0cmlidXRlIiwiZmlsdGVyIiwidHlwZSIsImxhYmVsVGFnIiwidXBkYXRlUHJvZHVjdExhYmVsVGFnIiwibGFiZWxUYWdUZXh0Q29udGVudCIsInJlbW92ZSIsImlubmVyVGV4dCIsInRleHQiLCJjbG9uZUxhYmVsRmxhZyIsImNsb25lTm9kZSIsInBhcmVudE5vZGUiLCJpbnNlcnRCZWZvcmUiLCJuZXh0U2libGluZyIsImluY2x1ZGVzIiwibGFiZWxGbGFnQ2xhc3NOYW1lIiwibGFiZWxGbGFnVGV4dENvbnRlbnQiLCJFVkVOVF9VUERBVEVfUkFUSU5HIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsIlByb2R1Y3RJdGVtIiwicHJvZHVjdEltYWdlIiwicHJvZHVjdE5hbWUiLCJwcm9kdWN0UmF0aW5nIiwicHJvZHVjdERlZmF1bHRQcmljZSIsInByb2R1Y3RTa3UiLCJwcm9kdWN0T3JpZ2luYWxQcmljZSIsInByb2R1Y3RMaW5rRGV0YWlsUGFnZSIsInByb2R1Y3RMaW5rQWRkVG9DYXJ0IiwicHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQiLCJwcm9kdWN0Rm9ybUFkZFRvQ2FydCIsInByb2R1Y3RCdXR0b25BZGRUb0NhcnQiLCJ1cGRhdGVQcm9kdWN0SXRlbURhdGEiLCJkYXRhIiwiaW1hZ2VVcmwiLCJpbWFnZUFsdCIsIm5hbWUiLCJwcm9kdWN0SXRlbU5hbWUiLCJyYXRpbmdWYWx1ZSIsImRlZmF1bHRQcmljZSIsInNrdSIsIm9yaWdpbmFsUHJpY2UiLCJkZXRhaWxQYWdlVXJsIiwiYWRkVG9DYXJ0VXJsIiwiYWpheEFkZFRvQ2FydFVybCIsImFkZFRvQ2FydEZvcm1BY3Rpb24iLCJnZXRTa3VGcm9tVXJsIiwidXJsIiwibGFzdFBhcnRPZlVybCIsIlJlZ0V4cCIsIm1hdGNoIiwic3JjIiwiYWx0IiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsInJhdGluZyIsImNvbnRlbnQiLCJocmVmIiwiZGlzYWJsZWQiLCJkYXRhc2V0IiwiYWN0aW9uIiwiZm9ybUFjdGlvbiIsIk51bWJlciIsInZhbHVlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFHZSxNQUFNQSxVQUFOLFNBQXlCQyx1R0FBekIsQ0FBd0M7QUFDbkRDLGtCQUFnQixDQUFDQyxNQUFELEVBQWtDO0FBQzlDLFFBQUksQ0FBQ0EsTUFBTSxDQUFDQyxNQUFaLEVBQW9CO0FBQ2hCLFdBQUtDLGlCQUFMLENBQXVCQyxPQUF2QixDQUFnQ0MsT0FBRCxJQUEwQkEsT0FBTyxDQUFDQyxTQUFSLENBQWtCQyxHQUFsQixDQUFzQixLQUFLQyxhQUEzQixDQUF6RDtBQUVBO0FBQ0g7O0FBRUQsU0FBS0MsbUJBQUwsQ0FBeUJSLE1BQXpCO0FBQ0g7O0FBRVNRLHFCQUFtQixDQUFDQyxVQUFELEVBQTRDO0FBQ3JFQSxjQUFVLENBQUNOLE9BQVgsQ0FBbUIsQ0FBQ0MsT0FBRCxFQUFpQ00sS0FBakMsS0FBbUQ7QUFDbEUsVUFBSUEsS0FBSixFQUFXO0FBQ1AsYUFBS0MsNEJBQUw7QUFDSDs7QUFFRCxXQUFLQyw0QkFBTCxDQUFrQ0gsVUFBbEM7QUFDQSxXQUFLSSwrQkFBTCxDQUFxQ0gsS0FBckM7QUFDQSxXQUFLSSx1QkFBTCxDQUE2QlYsT0FBN0IsRUFBc0NNLEtBQXRDO0FBQ0gsS0FSRDtBQVNIOztBQXJCa0QsQzs7Ozs7Ozs7Ozs7O0FDSHZEO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUtlLE1BQU1iLFVBQU4sU0FBeUJrQiwrREFBekIsQ0FBbUM7QUFBQTtBQUFBO0FBQUEsU0FDcENiLGlCQURvQztBQUFBLFNBRXBDYyxlQUZvQztBQUFBLFNBR3BD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SzVCLHNCQUFULEVBQWlDO0FBQzdCLGFBQU8sS0FBS0Esc0JBQUwsQ0FBNEIyQixPQUE1QixDQUFvQ0UsVUFBM0M7QUFDSDtBQUNKOztBQWhTOEMsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5sYWJlbC1ncm91cC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBMYWJlbEdyb3VwQ29yZSBmcm9tICdQcm9kdWN0TGFiZWxXaWRnZXQvY29tcG9uZW50cy9tb2xlY3VsZXMvbGFiZWwtZ3JvdXAvbGFiZWwtZ3JvdXAnO1xuaW1wb3J0IHsgUHJvZHVjdEl0ZW1MYWJlbHNEYXRhIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBMYWJlbEdyb3VwIGV4dGVuZHMgTGFiZWxHcm91cENvcmUge1xuICAgIHNldFByb2R1Y3RMYWJlbHMobGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSkge1xuICAgICAgICBpZiAoIWxhYmVscy5sZW5ndGgpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3MuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IGVsZW1lbnQuY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy51cGRhdGVQcm9kdWN0TGFiZWxzKGxhYmVscyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZVByb2R1Y3RMYWJlbHMobGFiZWxGbGFnczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pOiB2b2lkIHtcbiAgICAgICAgbGFiZWxGbGFncy5mb3JFYWNoKChlbGVtZW50OiBQcm9kdWN0SXRlbUxhYmVsc0RhdGEsIGluZGV4OiBudW1iZXIpID0+IHtcbiAgICAgICAgICAgIGlmIChpbmRleCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY3JlYXRlUHJvZHVjdExhYmVsRmxhZ0Nsb25lcygpO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB0aGlzLmRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMobGFiZWxGbGFncyk7XG4gICAgICAgICAgICB0aGlzLmRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdNb2RpZmllcnMoaW5kZXgpO1xuICAgICAgICAgICAgdGhpcy51cGRhdGVQcm9kdWN0TGFiZWxGbGFncyhlbGVtZW50LCBpbmRleCk7XG4gICAgICAgIH0pO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IFByb2R1Y3RJdGVtLCB7XG4gICAgRVZFTlRfVVBEQVRFX0xBQkVMUyxcbiAgICBQcm9kdWN0SXRlbUxhYmVsc0RhdGEsXG59IGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LWl0ZW0vcHJvZHVjdC1pdGVtJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgTGFiZWxHcm91cCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMYWJlbEZsYWdzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGFiZWxUYWc6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0SXRlbTogUHJvZHVjdEl0ZW07XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFncyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGFiZWwtZmxhZ2ApKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxUYWcgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGFiZWwtdGFnYClbMF07XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJdGVtQ2xhc3NOYW1lKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJdGVtID0gPFByb2R1Y3RJdGVtPnRoaXMuY2xvc2VzdChgLiR7dGhpcy5wcm9kdWN0SXRlbUNsYXNzTmFtZX1gKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnByb2R1Y3RJdGVtKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1hcFByb2R1Y3RJdGVtVXBkYXRlTGFiZWxzQ3VzdG9tRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwUHJvZHVjdEl0ZW1VcGRhdGVMYWJlbHNDdXN0b21FdmVudCgpIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbS5hZGRFdmVudExpc3RlbmVyKEVWRU5UX1VQREFURV9MQUJFTFMsIChldmVudDogRXZlbnQpID0+IHtcbiAgICAgICAgICAgIHRoaXMuc2V0UHJvZHVjdExhYmVscygoPEN1c3RvbUV2ZW50PmV2ZW50KS5kZXRhaWwubGFiZWxzKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogSGlkZXMgdGhlIHByb2R1Y3QgbGFiZWxzIGlmIGRhdGEgaXMgZW1wdHkuXG4gICAgICogU3BsaXRzIHRoZSBsYWJlbHMgb2JqZWN0IHRvIGxhYmVsRmxhZ3MgYW5kIGxhYmVsVGFnIGFjY29yZGluZ2x5LlxuICAgICAqIENhbGxzIHRoZSBtZXRob2QgZm9yIHVwZGF0aW5nIHByb2R1Y3QgbGFiZWxzLlxuICAgICAqIEBwYXJhbSBsYWJlbHMgQW4gYXJyYXkgb2YgcHJvZHVjdCBsYWJlbHMuXG4gICAgICovXG4gICAgc2V0UHJvZHVjdExhYmVscyhsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdKSB7XG4gICAgICAgIGlmICghbGFiZWxzLmxlbmd0aCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFncy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4gZWxlbWVudC5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSkpO1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxUYWcuY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBsYWJlbFRhZ1R5cGUgPSB0aGlzLnByb2R1Y3RMYWJlbFRhZy5nZXRBdHRyaWJ1dGUoJ2RhdGEtbGFiZWwtdGFnLXR5cGUnKTtcbiAgICAgICAgY29uc3QgbGFiZWxGbGFncyA9IGxhYmVscy5maWx0ZXIoKGVsZW1lbnQ6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YSkgPT4gZWxlbWVudC50eXBlICE9PSBsYWJlbFRhZ1R5cGUpO1xuICAgICAgICBjb25zdCBsYWJlbFRhZyA9IGxhYmVscy5maWx0ZXIoKGVsZW1lbnQ6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YSkgPT4gZWxlbWVudC50eXBlID09PSBsYWJlbFRhZ1R5cGUpO1xuXG4gICAgICAgIGlmICghbGFiZWxUYWcubGVuZ3RoKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbFRhZy5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIWxhYmVsRmxhZ3MubGVuZ3RoKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiBlbGVtZW50LmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKSk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnVwZGF0ZVByb2R1Y3RMYWJlbHMobGFiZWxGbGFncywgbGFiZWxUYWdbMF0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVQcm9kdWN0TGFiZWxUYWcoZWxlbWVudDogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGxhYmVsVGFnVGV4dENvbnRlbnQgPSA8SFRNTEVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxUYWcuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xhYmVsLXRhZy10ZXh0YClbMF1cbiAgICAgICAgKTtcblxuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbFRhZy5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgIGxhYmVsVGFnVGV4dENvbnRlbnQuaW5uZXJUZXh0ID0gZWxlbWVudC50ZXh0O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBjcmVhdGVQcm9kdWN0TGFiZWxGbGFnQ2xvbmVzKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBjbG9uZUxhYmVsRmxhZyA9IHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbMF0uY2xvbmVOb2RlKHRydWUpO1xuXG4gICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbMF0ucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoY2xvbmVMYWJlbEZsYWcsIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbMF0ubmV4dFNpYmxpbmcpO1xuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19sYWJlbC1mbGFnYCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBkZWxldGVQcm9kdWN0TGFiZWxGbGFnQ2xvbmVzKGxhYmVsRmxhZ3M6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdKTogdm9pZCB7XG4gICAgICAgIHdoaWxlICh0aGlzLnByb2R1Y3RMYWJlbEZsYWdzLmxlbmd0aCA+IGxhYmVsRmxhZ3MubGVuZ3RoKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzW3RoaXMucHJvZHVjdExhYmVsRmxhZ3MubGVuZ3RoIC0gMV0ucmVtb3ZlKCk7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgICAgIEFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGFiZWwtZmxhZ2ApKVxuICAgICAgICAgICAgKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBkZWxldGVQcm9kdWN0TGFiZWxGbGFnTW9kaWZpZXJzKGluZGV4OiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1tpbmRleF0uY2xhc3NMaXN0LmZvckVhY2goKGVsZW1lbnQ6IHN0cmluZykgPT4ge1xuICAgICAgICAgICAgaWYgKGVsZW1lbnQuaW5jbHVkZXMoJy0tJykpIHtcbiAgICAgICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzW2luZGV4XS5jbGFzc0xpc3QucmVtb3ZlKGVsZW1lbnQpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdXBkYXRlUHJvZHVjdExhYmVsRmxhZ3MoZWxlbWVudDogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhLCBpbmRleDogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGxhYmVsRmxhZ0NsYXNzTmFtZTogc3RyaW5nID0gdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1tpbmRleF0uZ2V0QXR0cmlidXRlKCdkYXRhLWNvbmZpZy1uYW1lJyk7XG4gICAgICAgIGNvbnN0IGxhYmVsRmxhZ1RleHRDb250ZW50ID0gPEhUTUxFbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbaW5kZXhdLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19sYWJlbC1mbGFnLXRleHRgKVswXVxuICAgICAgICApO1xuXG4gICAgICAgIGlmIChlbGVtZW50LnR5cGUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbaW5kZXhdLmNsYXNzTGlzdC5hZGQoYCR7bGFiZWxGbGFnQ2xhc3NOYW1lfS0tJHtlbGVtZW50LnR5cGV9YCk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzW2luZGV4XS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgICAgIGxhYmVsRmxhZ1RleHRDb250ZW50LmlubmVyVGV4dCA9IGVsZW1lbnQudGV4dDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdXBkYXRlUHJvZHVjdExhYmVscyhsYWJlbEZsYWdzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSwgbGFiZWxUYWc6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YSk6IHZvaWQge1xuICAgICAgICBpZiAobGFiZWxUYWcpIHtcbiAgICAgICAgICAgIHRoaXMudXBkYXRlUHJvZHVjdExhYmVsVGFnKGxhYmVsVGFnKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmIChsYWJlbEZsYWdzLmxlbmd0aCkge1xuICAgICAgICAgICAgbGFiZWxGbGFncy5mb3JFYWNoKChlbGVtZW50OiBQcm9kdWN0SXRlbUxhYmVsc0RhdGEsIGluZGV4OiBudW1iZXIpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoaW5kZXggPj0gMSkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLmNyZWF0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMoKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB0aGlzLmRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMobGFiZWxGbGFncyk7XG4gICAgICAgICAgICAgICAgdGhpcy5kZWxldGVQcm9kdWN0TGFiZWxGbGFnTW9kaWZpZXJzKGluZGV4KTtcbiAgICAgICAgICAgICAgICB0aGlzLnVwZGF0ZVByb2R1Y3RMYWJlbEZsYWdzKGVsZW1lbnQsIGluZGV4KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwcm9kdWN0SXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3Byb2R1Y3QtaXRlbS1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIiwiLyogdHNsaW50OmRpc2FibGU6IG1heC1maWxlLWxpbmUtY291bnQgKi9cbmltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5cbi8qKlxuICogQGV2ZW50IHVwZGF0ZVJhdGluZyBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgcmF0aW5nIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlTGFiZWxzIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBsYWJlbHMgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBZGRUb0NhcnRVcmwgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0ICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWpheEFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTCBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydEZvcm1BY3Rpb24gQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0ICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24gaGFzIGJlZW4gdXBkYXRlZC5cbiAqL1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9SQVRJTkcgPSAndXBkYXRlUmF0aW5nJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfTEFCRUxTID0gJ3VwZGF0ZUxhYmVscyc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCA9ICd1cGRhdGVBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCA9ICd1cGRhdGVBamF4QWRkVG9DYXJ0VXJsJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfRk9STV9BQ1RJT04gPSAndXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbic7XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1EYXRhIHtcbiAgICBpbWFnZVVybDogc3RyaW5nO1xuICAgIGltYWdlQWx0OiBzdHJpbmc7XG4gICAgbGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXTtcbiAgICBuYW1lOiBzdHJpbmc7XG4gICAgcmF0aW5nVmFsdWU6IG51bWJlcjtcbiAgICBkZWZhdWx0UHJpY2U6IHN0cmluZztcbiAgICBza3U6IHN0cmluZztcbiAgICBvcmlnaW5hbFByaWNlOiBzdHJpbmc7XG4gICAgZGV0YWlsUGFnZVVybDogc3RyaW5nO1xuICAgIGFkZFRvQ2FydFVybDogc3RyaW5nO1xuICAgIGFqYXhBZGRUb0NhcnRVcmw/OiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0Rm9ybUFjdGlvbj86IHN0cmluZztcbn1cblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbUxhYmVsc0RhdGEge1xuICAgIHRleHQ6IHN0cmluZztcbiAgICB0eXBlOiBzdHJpbmc7XG59XG5cbnR5cGUgVXJsID0gc3RyaW5nIHwgbnVsbDtcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdEl0ZW0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBwcm9kdWN0SW1hZ2U6IEhUTUxJbWFnZUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3ROYW1lOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFJhdGluZzogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdERlZmF1bHRQcmljZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RTa3U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0T3JpZ2luYWxQcmljZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMaW5rRGV0YWlsUGFnZTogSFRNTEFuY2hvckVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtBZGRUb0NhcnQ6IEhUTUxBbmNob3JFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RGb3JtQWRkVG9DYXJ0OiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RCdXR0b25BZGRUb0NhcnQ6IEhUTUxCdXR0b25FbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucHJvZHVjdEltYWdlID0gPEhUTUxJbWFnZUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW1hZ2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TmFtZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19uYW1lYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFJhdGluZyA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3JhdGluZ2ApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZGVmYXVsdC1wcmljZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RTa3UgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19za3VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19vcmlnaW5hbC1wcmljZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSA9IDxIVE1MQW5jaG9yRWxlbWVudFtdPihcbiAgICAgICAgICAgIEFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1kZXRhaWwtcGFnZWApKVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0ID0gPEhUTUxBbmNob3JFbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xpbmstYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0ID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2FqYXgtYnV0dG9uLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZm9ybS1hZGQtdG8tY2FydGApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYnV0dG9uLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICogQHBhcmFtIGRhdGEgQSBkYXRhIG9iamVjdCBmb3Igc2V0dGluZyB0aGUgcHJvZHVjdCBjYXJkIGluZm9ybWF0aW9uLlxuICAgICAqL1xuICAgIHVwZGF0ZVByb2R1Y3RJdGVtRGF0YShkYXRhOiBQcm9kdWN0SXRlbURhdGEpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbWFnZVVybCA9IGRhdGEuaW1hZ2VVcmw7XG4gICAgICAgIHRoaXMuaW1hZ2VBbHQgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMubGFiZWxzID0gZGF0YS5sYWJlbHM7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1OYW1lID0gZGF0YS5uYW1lO1xuICAgICAgICB0aGlzLnJhdGluZ1ZhbHVlID0gZGF0YS5yYXRpbmdWYWx1ZTtcbiAgICAgICAgdGhpcy5kZWZhdWx0UHJpY2UgPSBkYXRhLmRlZmF1bHRQcmljZTtcbiAgICAgICAgdGhpcy5za3UgPSBkYXRhLnNrdTtcbiAgICAgICAgdGhpcy5vcmlnaW5hbFByaWNlID0gZGF0YS5vcmlnaW5hbFByaWNlO1xuICAgICAgICB0aGlzLmRldGFpbFBhZ2VVcmwgPSBkYXRhLmRldGFpbFBhZ2VVcmw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0VXJsID0gZGF0YS5hZGRUb0NhcnRVcmw7XG4gICAgICAgIHRoaXMuYWpheEFkZFRvQ2FydFVybCA9IGRhdGEuYWpheEFkZFRvQ2FydFVybCA/PyBudWxsO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydEZvcm1BY3Rpb24gPSBkYXRhLmFkZFRvQ2FydEZvcm1BY3Rpb24gPz8gbnVsbDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0U2t1RnJvbVVybCh1cmw6IFVybCk6IFVybCB7XG4gICAgICAgIGlmICghdXJsKSB7XG4gICAgICAgICAgICByZXR1cm4gbnVsbDtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IGxhc3RQYXJ0T2ZVcmwgPSBuZXcgUmVnRXhwKGAoW15cXFxcL10pKyRgLCAnZycpO1xuICAgICAgICBjb25zdCBza3UgPSB1cmwubWF0Y2gobGFzdFBhcnRPZlVybCk7XG5cbiAgICAgICAgcmV0dXJuIHNrdVswXTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqIEBwYXJhbSBpbWFnZVVybCBBIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGltYWdlVXJsKGltYWdlVXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZS5zcmMgPSBpbWFnZVVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBhbHQuXG4gICAgICogQHBhcmFtIGltYWdlQWx0IEEgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VBbHQoaW1hZ2VBbHQ6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLmFsdCA9IGltYWdlQWx0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKiBAcGFyYW0gbGFiZWxzIEFuIGFycmF5IG9mIHByb2R1Y3QgY2FyZCBsYWJlbHMuXG4gICAgICovXG4gICAgc2V0IGxhYmVscyhsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfTEFCRUxTLCB7IGxhYmVscyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKiBAcGFyYW0gbmFtZSBBIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIHNldCBwcm9kdWN0SXRlbU5hbWUobmFtZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3ROYW1lKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dCA9IG5hbWU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqIEBwYXJhbSByYXRpbmcgQSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqL1xuICAgIHNldCByYXRpbmdWYWx1ZShyYXRpbmc6IG51bWJlcikge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX1JBVElORywgeyByYXRpbmcgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICogQHBhcmFtIGRlZmF1bHRQcmljZSBBIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIHNldCBkZWZhdWx0UHJpY2UoZGVmYXVsdFByaWNlOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmlubmVyVGV4dCA9IGRlZmF1bHRQcmljZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICogQHBhcmFtIHByb2R1Y3RTa3UgQSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIHNldCBza3UocHJvZHVjdFNrdTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RTa3UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdFNrdS5jb250ZW50ID0gcHJvZHVjdFNrdTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKiBAcGFyYW0gb3JpZ2luYWxQcmljZSBBIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKi9cbiAgICBzZXQgb3JpZ2luYWxQcmljZShvcmlnaW5hbFByaWNlOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UuaW5uZXJUZXh0ID0gb3JpZ2luYWxQcmljZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICogQHBhcmFtIGRldGFpbFBhZ2VVcmwgQSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBkZXRhaWxQYWdlVXJsKGRldGFpbFBhZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxBbmNob3JFbGVtZW50KSA9PiAoZWxlbWVudC5ocmVmID0gZGV0YWlsUGFnZVVybCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhZGRUb0NhcnRVcmwgQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFkZFRvQ2FydFVybChhZGRUb0NhcnRVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydC5ocmVmID0gYWRkVG9DYXJ0VXJsO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0VXJsKSB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKiBAcGFyYW0gYWpheEFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIHNldCBhamF4QWRkVG9DYXJ0VXJsKGFqYXhBZGRUb0NhcnRVcmw6IFVybCkge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kaXNhYmxlZCA9ICFhamF4QWRkVG9DYXJ0VXJsO1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybCA9IGFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMLCB7IHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFqYXhBZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqIEBwYXJhbSBhZGRUb0NhcnRGb3JtQWN0aW9uIEEgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICovXG4gICAgc2V0IGFkZFRvQ2FydEZvcm1BY3Rpb24oYWRkVG9DYXJ0Rm9ybUFjdGlvbjogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0LmFjdGlvbiA9IGFkZFRvQ2FydEZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQuZGF0YXNldC5mb3JtQWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfRk9STV9BQ1RJT04sIHtcbiAgICAgICAgICAgIHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFkZFRvQ2FydEZvcm1BY3Rpb24pLFxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBpbWFnZVVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RJbWFnZS5zcmM7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKi9cbiAgICBnZXQgcHJvZHVjdEl0ZW1OYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3ROYW1lKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TmFtZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgcmF0aW5nLlxuICAgICAqL1xuICAgIGdldCByYXRpbmdWYWx1ZSgpOiBudW1iZXIge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0UmF0aW5nKSB7XG4gICAgICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMucHJvZHVjdFJhdGluZy52YWx1ZSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKi9cbiAgICBnZXQgZGVmYXVsdFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKi9cbiAgICBnZXQgc2t1KCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RTa3UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RTa3UuY29udGVudDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBvcmlnaW5hbCBwcmljZS5cbiAgICAgKi9cbiAgICBnZXQgb3JpZ2luYWxQcmljZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgZGV0YWlsUGFnZVVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZVswXS5ocmVmO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgYWpheEFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGF0YXNldC51cmw7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbigpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb247XG4gICAgICAgIH1cbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9