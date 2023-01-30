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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");



var EVENT_UPDATE_REVIEW_COUNT = 'updateReviewCount';

var ProductItem = /*#__PURE__*/function (_ProductItemCore) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ProductItem, _ProductItemCore);

  function ProductItem() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _ProductItemCore.call.apply(_ProductItemCore, [this].concat(args)) || this;
    _this.productReviewCount = void 0;
    return _this;
  }

  var _proto = ProductItem.prototype;

  _proto.init = function init() {
    this.productReviewCount = this.getElementsByClassName(this.jsName + "__review-count")[0];

    _ProductItemCore.prototype.init.call(this);
  };

  _proto.setDefaultPriceColor = function setDefaultPriceColor(originalPrice) {
    if (!this.productDefaultPrice) {
      return;
    }

    if (!originalPrice) {
      this.productDefaultPrice.classList.remove(this.defaultPriceColorClassName);
      return;
    }

    this.productDefaultPrice.classList.add(this.defaultPriceColorClassName);
  };

  _proto.updateProductItemData = function updateProductItemData(data) {
    _ProductItemCore.prototype.updateProductItemData.call(this, data);

    this.reviewCount = data.reviewCount;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ProductItem, [{
    key: "originalPrice",
    set: function set(originalPrice) {
      if (this.productOriginalPrice) {
        this.productOriginalPrice.innerText = originalPrice;
      }

      this.setDefaultPriceColor(originalPrice);
    }
  }, {
    key: "reviewCount",
    set: function set(reviewCount) {
      this.dispatchCustomEvent(EVENT_UPDATE_REVIEW_COUNT, {
        reviewCount: reviewCount
      });
    }
  }, {
    key: "defaultPriceColorClassName",
    get: function get() {
      return this.getAttribute('default-price-color-class-name');
    }
  }]);

  return ProductItem;
}(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__["default"]);



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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



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

var ProductItem = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ProductItem, _Component);

  function ProductItem() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.productImage = void 0;
    _this.productName = void 0;
    _this.productRating = void 0;
    _this.productDefaultPrice = void 0;
    _this.productSku = void 0;
    _this.productOriginalPrice = void 0;
    _this.productLinkDetailPage = void 0;
    _this.productLinkAddToCart = void 0;
    _this.productAjaxButtonAddToCart = void 0;
    _this.productFormAddToCart = void 0;
    _this.productButtonAddToCart = void 0;
    return _this;
  }

  var _proto = ProductItem.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
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
  ;

  _proto.updateProductItemData = function updateProductItemData(data) {
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
  };

  _proto.getSkuFromUrl = function getSkuFromUrl(url) {
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
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ProductItem, [{
    key: "imageUrl",
    get:
    /**
     * Gets the product card image URL.
     */
    function get() {
      if (this.productImage) {
        return this.productImage.src;
      }
    }
    /**
     * Gets the product card name.
     */
    ,
    set: function set(imageUrl) {
      if (this.productImage) {
        this.productImage.src = imageUrl;
      }
    }
    /**
     * Sets the product card image alt.
     * @param imageAlt A product card image alt.
     */

  }, {
    key: "imageAlt",
    set: function set(imageAlt) {
      if (this.productImage) {
        this.productImage.alt = imageAlt;
      }
    }
    /**
     * Sets the product card labels.
     * @param labels An array of product card labels.
     */

  }, {
    key: "labels",
    set: function set(labels) {
      this.dispatchCustomEvent(EVENT_UPDATE_LABELS, {
        labels: labels
      });
    }
    /**
     * Sets the product card name.
     * @param name A product card name.
     */

  }, {
    key: "productItemName",
    get: function get() {
      if (this.productName) {
        return this.productName.innerText;
      }
    }
    /**
     * Gets the product card rating.
     */
    ,
    set: function set(name) {
      if (this.productName) {
        this.productName.innerText = name;
      }
    }
    /**
     * Sets the product card rating.
     * @param rating A product card rating.
     */

  }, {
    key: "ratingValue",
    get: function get() {
      if (this.productRating) {
        return Number(this.productRating.value);
      }
    }
    /**
     * Gets the product card default price.
     */
    ,
    set: function set(rating) {
      this.dispatchCustomEvent(EVENT_UPDATE_RATING, {
        rating: rating
      });
    }
    /**
     * Sets the product card default price.
     * @param defaultPrice A product card default price.
     */

  }, {
    key: "defaultPrice",
    get: function get() {
      if (this.productDefaultPrice) {
        return this.productDefaultPrice.innerText;
      }
    }
    /**
     * Gets the product card sku.
     */
    ,
    set: function set(defaultPrice) {
      if (this.productDefaultPrice) {
        this.productDefaultPrice.innerText = defaultPrice;
      }
    }
    /**
     * Sets the product card sku.
     * @param productSku A product card sku.
     */

  }, {
    key: "sku",
    get: function get() {
      if (this.productSku) {
        return this.productSku.content;
      }
    }
    /**
     * Gets the product card original price.
     */
    ,
    set: function set(productSku) {
      if (this.productSku) {
        this.productSku.content = productSku;
      }
    }
    /**
     * Sets the product card original price.
     * @param originalPrice A product card original price.
     */

  }, {
    key: "originalPrice",
    get: function get() {
      if (this.productOriginalPrice) {
        return this.productOriginalPrice.innerText;
      }
    }
    /**
     * Gets the product card detail page URL.
     */
    ,
    set: function set(originalPrice) {
      if (this.productOriginalPrice) {
        this.productOriginalPrice.innerText = originalPrice;
      }
    }
    /**
     * Sets the product card detail page URL.
     * @param detailPageUrl A product card detail page URL.
     */

  }, {
    key: "detailPageUrl",
    get: function get() {
      if (this.productLinkDetailPage) {
        return this.productLinkDetailPage[0].href;
      }
    }
    /**
     * Gets the product card 'add to cart' URL.
     */
    ,
    set: function set(detailPageUrl) {
      if (this.productLinkDetailPage) {
        this.productLinkDetailPage.forEach(function (element) {
          return element.href = detailPageUrl;
        });
      }
    }
    /**
     * Sets the product card 'add to cart' URL.
     * @param addToCartUrl A product card 'add to cart' URL.
     */

  }, {
    key: "addToCartUrl",
    get: function get() {
      if (this.productLinkAddToCart) {
        return this.productLinkAddToCart.href;
      }
    }
    /**
     * Gets the product card AJAX 'add to cart' URL.
     */
    ,
    set: function set(addToCartUrl) {
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

  }, {
    key: "ajaxAddToCartUrl",
    get: function get() {
      if (this.productAjaxButtonAddToCart) {
        return this.productAjaxButtonAddToCart.dataset.url;
      }
    }
    /**
     * Gets the product card 'add to cart' form action.
     */
    ,
    set: function set(ajaxAddToCartUrl) {
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

  }, {
    key: "addToCartFormAction",
    get: function get() {
      if (this.productFormAddToCart) {
        return this.productFormAddToCart.action;
      }

      if (this.productButtonAddToCart) {
        return this.productButtonAddToCart.dataset.formAction;
      }
    },
    set: function set(addToCartFormAction) {
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
  }]);

  return ProductItem;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5UIiwiUHJvZHVjdEl0ZW0iLCJwcm9kdWN0UmV2aWV3Q291bnQiLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInNldERlZmF1bHRQcmljZUNvbG9yIiwib3JpZ2luYWxQcmljZSIsInByb2R1Y3REZWZhdWx0UHJpY2UiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJkZWZhdWx0UHJpY2VDb2xvckNsYXNzTmFtZSIsImFkZCIsInVwZGF0ZVByb2R1Y3RJdGVtRGF0YSIsImRhdGEiLCJyZXZpZXdDb3VudCIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwiaW5uZXJUZXh0IiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsImdldEF0dHJpYnV0ZSIsIlByb2R1Y3RJdGVtQ29yZSIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsInByb2R1Y3RJbWFnZSIsInByb2R1Y3ROYW1lIiwicHJvZHVjdFJhdGluZyIsInByb2R1Y3RTa3UiLCJwcm9kdWN0TGlua0RldGFpbFBhZ2UiLCJwcm9kdWN0TGlua0FkZFRvQ2FydCIsInByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0IiwicHJvZHVjdEZvcm1BZGRUb0NhcnQiLCJwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0IiwicmVhZHlDYWxsYmFjayIsIkFycmF5IiwiZnJvbSIsImltYWdlVXJsIiwiaW1hZ2VBbHQiLCJuYW1lIiwibGFiZWxzIiwicHJvZHVjdEl0ZW1OYW1lIiwicmF0aW5nVmFsdWUiLCJkZWZhdWx0UHJpY2UiLCJza3UiLCJkZXRhaWxQYWdlVXJsIiwiYWRkVG9DYXJ0VXJsIiwiYWpheEFkZFRvQ2FydFVybCIsImFkZFRvQ2FydEZvcm1BY3Rpb24iLCJnZXRTa3VGcm9tVXJsIiwidXJsIiwibGFzdFBhcnRPZlVybCIsIlJlZ0V4cCIsIm1hdGNoIiwic3JjIiwiYWx0IiwiTnVtYmVyIiwidmFsdWUiLCJyYXRpbmciLCJjb250ZW50IiwiaHJlZiIsImZvckVhY2giLCJlbGVtZW50IiwiZGF0YXNldCIsImRpc2FibGVkIiwiYWN0aW9uIiwiZm9ybUFjdGlvbiIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUlPLElBQU1BLHlCQUF5QixHQUFHLG1CQUFsQzs7SUFNY0MsVzs7Ozs7Ozs7Ozs7VUFDUEMsa0I7Ozs7OztTQUVBQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtELGtCQUFMLEdBQXVDLEtBQUtFLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHFCQUE0RCxDQUE1RCxDQUF2Qzs7QUFFQSwrQkFBTUYsSUFBTjtBQUNILEc7O1NBVVNHLG9CLEdBQVYsOEJBQStCQyxhQUEvQixFQUE0RDtBQUN4RCxRQUFJLENBQUMsS0FBS0MsbUJBQVYsRUFBK0I7QUFDM0I7QUFDSDs7QUFFRCxRQUFJLENBQUNELGFBQUwsRUFBb0I7QUFDaEIsV0FBS0MsbUJBQUwsQ0FBeUJDLFNBQXpCLENBQW1DQyxNQUFuQyxDQUEwQyxLQUFLQywwQkFBL0M7QUFFQTtBQUNIOztBQUVELFNBQUtILG1CQUFMLENBQXlCQyxTQUF6QixDQUFtQ0csR0FBbkMsQ0FBdUMsS0FBS0QsMEJBQTVDO0FB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LG1CQUF4QixFQUFrRDtBQUM5QyxVQUFJLEtBQUtoQixvQkFBVCxFQUErQjtBQUMzQixhQUFLQSxvQkFBTCxDQUEwQmlDLE1BQTFCLEdBQW1DakIsbUJBQW5DO0FBQ0g7O0FBRUQsVUFBSSxLQUFLZixzQkFBVCxFQUFpQztBQUM3QixhQUFLQSxzQkFBTCxDQUE0QjhCLE9BQTVCLENBQW9DRyxVQUFwQyxHQUFpRGxCLG1CQUFqRDtBQUNIOztBQUVELFdBQUsvQixtQkFBTCxDQUF5Qk8sb0NBQXpCLEVBQStEO0FBQzNEb0IsV0FBRyxFQUFFLEtBQUtLLGFBQUwsQ0FBbUJELG1CQUFuQjtBQURzRCxPQUEvRDtBQUdIOzs7O0VBbE1vQ21CLHlEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnByb2R1Y3QtaXRlbS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUHJvZHVjdEl0ZW1Db3JlLCB7XG4gICAgUHJvZHVjdEl0ZW1EYXRhIGFzIFByb2R1Y3RJdGVtRGF0YUNvcmUsXG59IGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LWl0ZW0vcHJvZHVjdC1pdGVtJztcblxuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9SRVZJRVdfQ09VTlQgPSAndXBkYXRlUmV2aWV3Q291bnQnO1xuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtRGF0YSBleHRlbmRzIFByb2R1Y3RJdGVtRGF0YUNvcmUge1xuICAgIHJldmlld0NvdW50OiBudW1iZXI7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RJdGVtIGV4dGVuZHMgUHJvZHVjdEl0ZW1Db3JlIHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFJldmlld0NvdW50OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RSZXZpZXdDb3VudCA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yZXZpZXctY291bnRgKVswXTtcblxuICAgICAgICBzdXBlci5pbml0KCk7XG4gICAgfVxuXG4gICAgc2V0IG9yaWdpbmFsUHJpY2Uob3JpZ2luYWxQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dCA9IG9yaWdpbmFsUHJpY2U7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnNldERlZmF1bHRQcmljZUNvbG9yKG9yaWdpbmFsUHJpY2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXREZWZhdWx0UHJpY2VDb2xvcihvcmlnaW5hbFByaWNlOiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICghb3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5kZWZhdWx0UHJpY2VDb2xvckNsYXNzTmFtZSk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5jbGFzc0xpc3QuYWRkKHRoaXMuZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUpO1xuICAgIH1cblxuICAgIHVwZGF0ZVByb2R1Y3RJdGVtRGF0YShkYXRhOiBQcm9kdWN0SXRlbURhdGEpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIudXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGEpO1xuICAgICAgICB0aGlzLnJldmlld0NvdW50ID0gZGF0YS5yZXZpZXdDb3VudDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0IHJldmlld0NvdW50KHJldmlld0NvdW50OiBudW1iZXIpIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9SRVZJRVdfQ09VTlQsIHsgcmV2aWV3Q291bnQgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkZWZhdWx0UHJpY2VDb2xvckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2RlZmF1bHQtcHJpY2UtY29sb3ItY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiIsIi8qIHRzbGludDpkaXNhYmxlOiBtYXgtZmlsZS1saW5lLWNvdW50ICovXG5pbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG4vKipcbiAqIEBldmVudCB1cGRhdGVSYXRpbmcgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IHJhdGluZyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUxhYmVscyBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgbGFiZWxzIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIFVSTCBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFqYXhBZGRUb0NhcnRVcmwgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKi9cbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfUkFUSU5HID0gJ3VwZGF0ZVJhdGluZyc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0xBQkVMUyA9ICd1cGRhdGVMYWJlbHMnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWRkVG9DYXJ0VXJsJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwgPSAndXBkYXRlQWpheEFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OID0gJ3VwZGF0ZUFkZFRvQ2FydEZvcm1BY3Rpb24nO1xuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtRGF0YSB7XG4gICAgaW1hZ2VVcmw6IHN0cmluZztcbiAgICBpbWFnZUFsdDogc3RyaW5nO1xuICAgIGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW107XG4gICAgbmFtZTogc3RyaW5nO1xuICAgIHJhdGluZ1ZhbHVlOiBudW1iZXI7XG4gICAgZGVmYXVsdFByaWNlOiBzdHJpbmc7XG4gICAgc2t1OiBzdHJpbmc7XG4gICAgb3JpZ2luYWxQcmljZTogc3RyaW5nO1xuICAgIGRldGFpbFBhZ2VVcmw6IHN0cmluZztcbiAgICBhZGRUb0NhcnRVcmw6IHN0cmluZztcbiAgICBhamF4QWRkVG9DYXJ0VXJsPzogc3RyaW5nO1xuICAgIGFkZFRvQ2FydEZvcm1BY3Rpb24/OiBzdHJpbmc7XG59XG5cbmV4cG9ydCBpbnRlcmZhY2UgUHJvZHVjdEl0ZW1MYWJlbHNEYXRhIHtcbiAgICB0ZXh0OiBzdHJpbmc7XG4gICAgdHlwZTogc3RyaW5nO1xufVxuXG50eXBlIFVybCA9IHN0cmluZyB8IG51bGw7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFByb2R1Y3RJdGVtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEltYWdlOiBIVE1MSW1hZ2VFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TmFtZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RSYXRpbmc6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3REZWZhdWx0UHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0U2t1OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE9yaWdpbmFsUHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0RldGFpbFBhZ2U6IEhUTUxBbmNob3JFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMaW5rQWRkVG9DYXJ0OiBIVE1MQW5jaG9yRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQ6IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0Rm9ybUFkZFRvQ2FydDogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZSA9IDxIVE1MSW1hZ2VFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2ltYWdlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE5hbWUgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbmFtZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RSYXRpbmcgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yYXRpbmdgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2RlZmF1bHQtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0U2t1ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2t1YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fb3JpZ2luYWwtcHJpY2VgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UgPSA8SFRNTEFuY2hvckVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xpbmstZGV0YWlsLXBhZ2VgKSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCA9IDxIVE1MQW5jaG9yRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWFkZC10by1jYXJ0YClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19hamF4LWJ1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQgPSA8SFRNTEZvcm1FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2Zvcm0tYWRkLXRvLWNhcnRgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0ID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2J1dHRvbi1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGluZm9ybWF0aW9uLlxuICAgICAqIEBwYXJhbSBkYXRhIEEgZGF0YSBvYmplY3QgZm9yIHNldHRpbmcgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKi9cbiAgICB1cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YTogUHJvZHVjdEl0ZW1EYXRhKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW1hZ2VVcmwgPSBkYXRhLmltYWdlVXJsO1xuICAgICAgICB0aGlzLmltYWdlQWx0ID0gZGF0YS5uYW1lO1xuICAgICAgICB0aGlzLmxhYmVscyA9IGRhdGEubGFiZWxzO1xuICAgICAgICB0aGlzLnByb2R1Y3RJdGVtTmFtZSA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5yYXRpbmdWYWx1ZSA9IGRhdGEucmF0aW5nVmFsdWU7XG4gICAgICAgIHRoaXMuZGVmYXVsdFByaWNlID0gZGF0YS5kZWZhdWx0UHJpY2U7XG4gICAgICAgIHRoaXMuc2t1ID0gZGF0YS5za3U7XG4gICAgICAgIHRoaXMub3JpZ2luYWxQcmljZSA9IGRhdGEub3JpZ2luYWxQcmljZTtcbiAgICAgICAgdGhpcy5kZXRhaWxQYWdlVXJsID0gZGF0YS5kZXRhaWxQYWdlVXJsO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydFVybCA9IGRhdGEuYWRkVG9DYXJ0VXJsO1xuICAgICAgICB0aGlzLmFqYXhBZGRUb0NhcnRVcmwgPSBkYXRhLmFqYXhBZGRUb0NhcnRVcmwgPz8gbnVsbDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRGb3JtQWN0aW9uID0gZGF0YS5hZGRUb0NhcnRGb3JtQWN0aW9uID8/IG51bGw7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldFNrdUZyb21VcmwodXJsOiBVcmwpOiBVcmwge1xuICAgICAgICBpZiAoIXVybCkge1xuICAgICAgICAgICAgcmV0dXJuIG51bGw7XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBsYXN0UGFydE9mVXJsID0gbmV3IFJlZ0V4cChgKFteXFxcXC9dKSskYCwgJ2cnKTtcbiAgICAgICAgY29uc3Qgc2t1ID0gdXJsLm1hdGNoKGxhc3RQYXJ0T2ZVcmwpO1xuXG4gICAgICAgIHJldHVybiBza3VbMF07XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VVcmwgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBpbWFnZVVybChpbWFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjID0gaW1hZ2VVcmw7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqIEBwYXJhbSBpbWFnZUFsdCBBIHByb2R1Y3QgY2FyZCBpbWFnZSBhbHQuXG4gICAgICovXG4gICAgc2V0IGltYWdlQWx0KGltYWdlQWx0OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RJbWFnZS5hbHQgPSBpbWFnZUFsdDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBsYWJlbHMuXG4gICAgICogQHBhcmFtIGxhYmVscyBBbiBhcnJheSBvZiBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqL1xuICAgIHNldCBsYWJlbHMobGFiZWxzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSkge1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0xBQkVMUywgeyBsYWJlbHMgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICogQHBhcmFtIG5hbWUgQSBwcm9kdWN0IGNhcmQgbmFtZS5cbiAgICAgKi9cbiAgICBzZXQgcHJvZHVjdEl0ZW1OYW1lKG5hbWU6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TmFtZS5pbm5lclRleHQgPSBuYW1lO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKiBAcGFyYW0gcmF0aW5nIEEgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBzZXQgcmF0aW5nVmFsdWUocmF0aW5nOiBudW1iZXIpIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9SQVRJTkcsIHsgcmF0aW5nIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqIEBwYXJhbSBkZWZhdWx0UHJpY2UgQSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKi9cbiAgICBzZXQgZGVmYXVsdFByaWNlKGRlZmF1bHRQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQgPSBkZWZhdWx0UHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqIEBwYXJhbSBwcm9kdWN0U2t1IEEgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKi9cbiAgICBzZXQgc2t1KHByb2R1Y3RTa3U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RTa3UuY29udGVudCA9IHByb2R1Y3RTa3U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICogQHBhcmFtIG9yaWdpbmFsUHJpY2UgQSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IG9yaWdpbmFsUHJpY2Uob3JpZ2luYWxQcmljZTogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dCA9IG9yaWdpbmFsUHJpY2U7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqIEBwYXJhbSBkZXRhaWxQYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgZGV0YWlsUGFnZVVybChkZXRhaWxQYWdlVXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZS5mb3JFYWNoKChlbGVtZW50OiBIVE1MQW5jaG9yRWxlbWVudCkgPT4gKGVsZW1lbnQuaHJlZiA9IGRldGFpbFBhZ2VVcmwpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRVcmwoYWRkVG9DYXJ0VXJsOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZiA9IGFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMLCB7IHNrdTogdGhpcy5nZXRTa3VGcm9tVXJsKGFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFqYXhBZGRUb0NhcnRVcmwgQSBwcm9kdWN0IGNhcmQgQUpBWCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWpheEFkZFRvQ2FydFVybChhamF4QWRkVG9DYXJ0VXJsOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGlzYWJsZWQgPSAhYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQuZGF0YXNldC51cmwgPSBhamF4QWRkVG9DYXJ0VXJsO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhamF4QWRkVG9DYXJ0VXJsKSB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKiBAcGFyYW0gYWRkVG9DYXJ0Rm9ybUFjdGlvbiBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIHNldCBhZGRUb0NhcnRGb3JtQWN0aW9uKGFkZFRvQ2FydEZvcm1BY3Rpb246IFVybCkge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbiA9IGFkZFRvQ2FydEZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OLCB7XG4gICAgICAgICAgICBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRGb3JtQWN0aW9uKSxcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgaW1hZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEltYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0SW1hZ2Uuc3JjO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgZ2V0IHByb2R1Y3RJdGVtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TmFtZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIHJhdGluZy5cbiAgICAgKi9cbiAgICBnZXQgcmF0aW5nVmFsdWUoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFJhdGluZykge1xuICAgICAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLnByb2R1Y3RSYXRpbmcudmFsdWUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IGRlZmF1bHRQcmljZSgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgZ2V0IHNrdSgpOiBudW1iZXIge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0U2t1KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgb3JpZ2luYWwgcHJpY2UuXG4gICAgICovXG4gICAgZ2V0IG9yaWdpbmFsUHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGRldGFpbFBhZ2VVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2VbMF0uaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBnZXQgYWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydC5ocmVmO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFqYXhBZGRUb0NhcnRVcmwoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydEZvcm1BY3Rpb24oKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0LmFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQuZGF0YXNldC5mb3JtQWN0aW9uO1xuICAgICAgICB9XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==