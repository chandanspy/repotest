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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _product_set_details_product_set_details__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../product-set-details/product-set-details */ "./vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.ts");



var ProductSetCmsContent = /*#__PURE__*/function (_ProductSetDetails) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(ProductSetCmsContent, _ProductSetDetails);

  function ProductSetCmsContent() {
    return _ProductSetDetails.apply(this, arguments) || this;
  }

  return ProductSetCmsContent;
}(_product_set_details_product_set_details__WEBPACK_IMPORTED_MODULE_1__["default"]);



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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");




var ProductSetDetails = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(ProductSetDetails, _Component);

  function ProductSetDetails() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.productItems = void 0;
    _this.targets = void 0;
    return _this;
  }

  var _proto = ProductSetDetails.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.productItems = Array.from(this.getElementsByClassName(this.jsName + "__product-item"));
    this.targets = Array.from(this.getElementsByClassName(this.jsName + "__product-sku-hidden-input"));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    if (!this.productItems) {
      return;
    }

    this.mapProductItemUpdateAddToCartUrlCustomEvent();
  };

  _proto.mapProductItemUpdateAddToCartUrlCustomEvent = function mapProductItemUpdateAddToCartUrlCustomEvent() {
    var _this2 = this;

    this.productItems.forEach(function (element, index) {
      element.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__["EVENT_UPDATE_ADD_TO_CART_URL"], function (event) {
        _this2.updateAddToCartUrls(event.detail.sku, index);
      });
    });
  };

  _proto.updateAddToCartUrls = function updateAddToCartUrls(sku, index) {
    if (this.targets[index]) {
      this.targets[index].value = sku;
    }
  };

  return ProductSetDetails;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3Qtc2V0LXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0U2V0V2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9vcmdhbmlzbXMvcHJvZHVjdC1zZXQtY21zLWNvbnRlbnQvcHJvZHVjdC1zZXQtY21zLWNvbnRlbnQudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LXNldC13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdFNldFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvb3JnYW5pc21zL3Byb2R1Y3Qtc2V0LWRldGFpbHMvcHJvZHVjdC1zZXQtZGV0YWlscy50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJQcm9kdWN0U2V0Q21zQ29udGVudCIsIlByb2R1Y3RTZXREZXRhaWxzIiwicHJvZHVjdEl0ZW1zIiwidGFyZ2V0cyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsIm1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQiLCJmb3JFYWNoIiwiZWxlbWVudCIsImluZGV4IiwiYWRkRXZlbnRMaXN0ZW5lciIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9VUkwiLCJldmVudCIsInVwZGF0ZUFkZFRvQ2FydFVybHMiLCJkZXRhaWwiLCJza3UiLCJ2YWx1ZSIsIkNvbXBvbmVudCIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX0ZPUk1fQUNUSU9OIiwiUHJvZHVjdEl0ZW0iLCJwcm9kdWN0SW1hZ2UiLCJwcm9kdWN0TmFtZSIsInByb2R1Y3RSYXRpbmciLCJwcm9kdWN0RGVmYXVsdFByaWNlIiwicHJvZHVjdFNrdSIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwicHJvZHVjdExpbmtEZXRhaWxQYWdlIiwicHJvZHVjdExpbmtBZGRUb0NhcnQiLCJwcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydCIsInByb2R1Y3RGb3JtQWRkVG9DYXJ0IiwicHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCIsInVwZGF0ZVByb2R1Y3RJdGVtRGF0YSIsImRhdGEiLCJpbWFnZVVybCIsImltYWdlQWx0IiwibmFtZSIsImxhYmVscyIsInByb2R1Y3RJdGVtTmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwib3JpZ2luYWxQcmljZSIsImRldGFpbFBhZ2VVcmwiLCJhZGRUb0NhcnRVcmwiLCJhamF4QWRkVG9DYXJ0VXJsIiwiYWRkVG9DYXJ0Rm9ybUFjdGlvbiIsImdldFNrdUZyb21VcmwiLCJ1cmwiLCJsYXN0UGFydE9mVXJsIiwiUmVnRXhwIiwibWF0Y2giLCJzcmMiLCJhbHQiLCJkaXNwYXRjaEN1c3RvbUV2ZW50IiwiaW5uZXJUZXh0IiwiTnVtYmVyIiwicmF0aW5nIiwiY29udGVudCIsImhyZWYiLCJkYXRhc2V0IiwiZGlzYWJsZWQiLCJhY3Rpb24iLCJmb3JtQWN0aW9uIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxvQjs7Ozs7Ozs7RUFBNkJDLGdGOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNGbEQ7QUFDQTs7SUFFcUJBLGlCOzs7Ozs7Ozs7OztVQUNQQyxZO1VBQ0FDLE87Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0gsWUFB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aUMsYUFBTCxDQUFtQkYsZ0JBQW5CO0FBQVAsT0FBNUQ7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7O1NBbUdJLGVBQWtDO0FBQzlCLFVBQUksS0FBS2Qsb0JBQVQsRUFBK0I7QUFDM0IsZUFBTyxLQUFLQSxvQkFBTCxDQUEwQitCLE1BQWpDO0FBQ0g7O0FBRUQsVUFBSSxLQUFLOUIsc0JBQVQsRUFBaUM7QUFDN0IsZUFBTyxLQUFLQSxzQkFBTCxDQUE0QjRCLE9BQTVCLENBQW9DRyxVQUEzQztBQUNIO0FBQ0osSztTQTFHRCxhQUF3QmpCLG1CQUF4QixFQUFrRDtBQUM5QyxVQUFJLEtBQUtmLG9CQUFULEVBQStCO0FBQzNCLGFBQUtBLG9CQUFMLENBQTBCK0IsTUFBMUIsR0FBbUNoQixtQkFBbkM7QUFDSDs7QUFFRCxVQUFJLEtBQUtkLHNCQUFULEVBQWlDO0FBQzdCLGFBQUtBLHNCQUFMLENBQTRCNEIsT0FBNUIsQ0FBb0NHLFVBQXBDLEdBQWlEakIsbUJBQWpEO0FBQ0g7O0FBRUQsV0FBS1EsbUJBQUwsQ0FBeUJsQyxvQ0FBekIsRUFBK0Q7QUFDM0ROLFdBQUcsRUFBRSxLQUFLaUMsYUFBTCxDQUFtQkQsbUJBQW5CO0FBRHNELE9BQS9EO0FBR0g7Ozs7RUFsTW9DOUIseUQiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuMC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUHJvZHVjdFNldERldGFpbHMgZnJvbSAnLi4vcHJvZHVjdC1zZXQtZGV0YWlscy9wcm9kdWN0LXNldC1kZXRhaWxzJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdFNldENtc0NvbnRlbnQgZXh0ZW5kcyBQcm9kdWN0U2V0RGV0YWlscyB7fVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgUHJvZHVjdEl0ZW0sIHsgRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCB9IGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9wcm9kdWN0LWl0ZW0vcHJvZHVjdC1pdGVtJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUHJvZHVjdFNldERldGFpbHMgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBwcm9kdWN0SXRlbXM6IFByb2R1Y3RJdGVtW107XG4gICAgcHJvdGVjdGVkIHRhcmdldHM6IEhUTUxJbnB1dEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RJdGVtcyA9IDxQcm9kdWN0SXRlbVtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcHJvZHVjdC1pdGVtYCkpO1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFxuICAgICAgICAgICAgYCR7dGhpcy5qc05hbWV9X19wcm9kdWN0LXNrdS1oaWRkZW4taW5wdXRgXG4gICAgICAgICkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnByb2R1Y3RJdGVtcykge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tYXBQcm9kdWN0SXRlbVVwZGF0ZUFkZFRvQ2FydFVybEN1c3RvbUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFByb2R1Y3RJdGVtVXBkYXRlQWRkVG9DYXJ0VXJsQ3VzdG9tRXZlbnQoKSB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW1zLmZvckVhY2goKGVsZW1lbnQ6IFByb2R1Y3RJdGVtLCBpbmRleDogbnVtYmVyKSA9PiB7XG4gICAgICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCwgKGV2ZW50OiBFdmVudCkgPT4ge1xuICAgICAgICAgICAgICAgIHRoaXMudXBkYXRlQWRkVG9DYXJ0VXJscygoPEN1c3RvbUV2ZW50PmV2ZW50KS5kZXRhaWwuc2t1LCBpbmRleCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZUFkZFRvQ2FydFVybHMoc2t1OiBzdHJpbmcsIGluZGV4OiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMudGFyZ2V0c1tpbmRleF0pIHtcbiAgICAgICAgICAgIHRoaXMudGFyZ2V0c1tpbmRleF0udmFsdWUgPSBza3U7XG4gICAgICAgIH1cbiAgICB9XG59XG4iLCIvKiB0c2xpbnQ6ZGlzYWJsZTogbWF4LWZpbGUtbGluZS1jb3VudCAqL1xuaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlUmF0aW5nIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCByYXRpbmcgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVMYWJlbHMgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IGxhYmVscyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBamF4QWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBBSkFYICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbiBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbiBoYXMgYmVlbiB1cGRhdGVkLlxuICovXG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX1JBVElORyA9ICd1cGRhdGVSYXRpbmcnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9MQUJFTFMgPSAndXBkYXRlTGFiZWxzJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFqYXhBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiA9ICd1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uJztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEge1xuICAgIGltYWdlVXJsOiBzdHJpbmc7XG4gICAgaW1hZ2VBbHQ6IHN0cmluZztcbiAgICBsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdO1xuICAgIG5hbWU6IHN0cmluZztcbiAgICByYXRpbmdWYWx1ZTogbnVtYmVyO1xuICAgIGRlZmF1bHRQcmljZTogc3RyaW5nO1xuICAgIHNrdTogc3RyaW5nO1xuICAgIG9yaWdpbmFsUHJpY2U6IHN0cmluZztcbiAgICBkZXRhaWxQYWdlVXJsOiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0VXJsOiBzdHJpbmc7XG4gICAgYWpheEFkZFRvQ2FydFVybD86IHN0cmluZztcbiAgICBhZGRUb0NhcnRGb3JtQWN0aW9uPzogc3RyaW5nO1xufVxuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtTGFiZWxzRGF0YSB7XG4gICAgdGV4dDogc3RyaW5nO1xuICAgIHR5cGU6IHN0cmluZztcbn1cblxudHlwZSBVcmwgPSBzdHJpbmcgfCBudWxsO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJbWFnZTogSFRNTEltYWdlRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE5hbWU6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0UmF0aW5nOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0RGVmYXVsdFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFNrdTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RPcmlnaW5hbFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtEZXRhaWxQYWdlOiBIVE1MQW5jaG9yRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0FkZFRvQ2FydDogSFRNTEFuY2hvckVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEZvcm1BZGRUb0NhcnQ6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UgPSA8SFRNTEltYWdlRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbWFnZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3ROYW1lID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX25hbWVgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmF0aW5nID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmF0aW5nYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19kZWZhdWx0LXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFNrdSA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NrdWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX29yaWdpbmFsLXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlID0gPEhUTUxBbmNob3JFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWRldGFpbC1wYWdlYCkpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQgPSA8SFRNTEFuY2hvckVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWpheC1idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0ID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19mb3JtLWFkZC10by1jYXJ0YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKiBAcGFyYW0gZGF0YSBBIGRhdGEgb2JqZWN0IGZvciBzZXR0aW5nIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICovXG4gICAgdXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGE6IFByb2R1Y3RJdGVtRGF0YSk6IHZvaWQge1xuICAgICAgICB0aGlzLmltYWdlVXJsID0gZGF0YS5pbWFnZVVybDtcbiAgICAgICAgdGhpcy5pbWFnZUFsdCA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5sYWJlbHMgPSBkYXRhLmxhYmVscztcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbU5hbWUgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMucmF0aW5nVmFsdWUgPSBkYXRhLnJhdGluZ1ZhbHVlO1xuICAgICAgICB0aGlzLmRlZmF1bHRQcmljZSA9IGRhdGEuZGVmYXVsdFByaWNlO1xuICAgICAgICB0aGlzLnNrdSA9IGRhdGEuc2t1O1xuICAgICAgICB0aGlzLm9yaWdpbmFsUHJpY2UgPSBkYXRhLm9yaWdpbmFsUHJpY2U7XG4gICAgICAgIHRoaXMuZGV0YWlsUGFnZVVybCA9IGRhdGEuZGV0YWlsUGFnZVVybDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRVcmwgPSBkYXRhLmFkZFRvQ2FydFVybDtcbiAgICAgICAgdGhpcy5hamF4QWRkVG9DYXJ0VXJsID0gZGF0YS5hamF4QWRkVG9DYXJ0VXJsID8/IG51bGw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA9IGRhdGEuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA/PyBudWxsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRTa3VGcm9tVXJsKHVybDogVXJsKTogVXJsIHtcbiAgICAgICAgaWYgKCF1cmwpIHtcbiAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgbGFzdFBhcnRPZlVybCA9IG5ldyBSZWdFeHAoYChbXlxcXFwvXSkrJGAsICdnJyk7XG4gICAgICAgIGNvbnN0IHNrdSA9IHVybC5tYXRjaChsYXN0UGFydE9mVXJsKTtcblxuICAgICAgICByZXR1cm4gc2t1WzBdO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICogQHBhcmFtIGltYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VVcmwoaW1hZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLnNyYyA9IGltYWdlVXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VBbHQgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqL1xuICAgIHNldCBpbWFnZUFsdChpbWFnZUFsdDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UuYWx0ID0gaW1hZ2VBbHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqIEBwYXJhbSBsYWJlbHMgQW4gYXJyYXkgb2YgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKi9cbiAgICBzZXQgbGFiZWxzKGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9MQUJFTFMsIHsgbGFiZWxzIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqIEBwYXJhbSBuYW1lIEEgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgc2V0IHByb2R1Y3RJdGVtTmFtZShuYW1lOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0ID0gbmFtZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICogQHBhcmFtIHJhdGluZyBBIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgc2V0IHJhdGluZ1ZhbHVlKHJhdGluZzogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkFUSU5HLCB7IHJhdGluZyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKiBAcGFyYW0gZGVmYXVsdFByaWNlIEEgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IGRlZmF1bHRQcmljZShkZWZhdWx0UHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0ID0gZGVmYXVsdFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKiBAcGFyYW0gcHJvZHVjdFNrdSBBIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgc2V0IHNrdShwcm9kdWN0U2t1OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQgPSBwcm9kdWN0U2t1O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqIEBwYXJhbSBvcmlnaW5hbFByaWNlIEEgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gZGV0YWlsUGFnZVVybCBBIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGRldGFpbFBhZ2VVcmwoZGV0YWlsUGFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UuZm9yRWFjaCgoZWxlbWVudDogSFRNTEFuY2hvckVsZW1lbnQpID0+IChlbGVtZW50LmhyZWYgPSBkZXRhaWxQYWdlVXJsKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0VXJsKGFkZFRvQ2FydFVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWYgPSBhZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhamF4QWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFqYXhBZGRUb0NhcnRVcmwoYWpheEFkZFRvQ2FydFVybDogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRpc2FibGVkID0gIWFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsID0gYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWpheEFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydEZvcm1BY3Rpb24gQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbihhZGRUb0NhcnRGb3JtQWN0aW9uOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiwge1xuICAgICAgICAgICAgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0Rm9ybUFjdGlvbiksXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGltYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEltYWdlLnNyYztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIGdldCBwcm9kdWN0SXRlbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgZ2V0IHJhdGluZ1ZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RSYXRpbmcpIHtcbiAgICAgICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5wcm9kdWN0UmF0aW5nLnZhbHVlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIGdldCBkZWZhdWx0UHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIGdldCBza3UoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFNrdS5jb250ZW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIGdldCBvcmlnaW5hbFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBkZXRhaWxQYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlWzBdLmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhamF4QWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRGb3JtQWN0aW9uKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbjtcbiAgICAgICAgfVxuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=