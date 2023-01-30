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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ProductReviewWidget_components_molecules_rating_selector_rating_selector__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ProductReviewWidget/components/molecules/rating-selector/rating-selector */ "./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts");
/* harmony import */ var src_ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! src/ShopUi/components/molecules/product-item/product-item */ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");




var RatingSelector = /*#__PURE__*/function (_RatingSelectorCore) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(RatingSelector, _RatingSelectorCore);

  function RatingSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _RatingSelectorCore.call.apply(_RatingSelectorCore, [this].concat(args)) || this;
    _this.reviewCount = void 0;
    return _this;
  }

  var _proto = RatingSelector.prototype;

  _proto.init = function init() {
    this.reviewCount = this.getElementsByClassName(this.jsName + "__review-count")[0];

    _RatingSelectorCore.prototype.init.call(this);
  };

  _proto.mapUpdateRatingEvents = function mapUpdateRatingEvents() {
    _RatingSelectorCore.prototype.mapUpdateRatingEvents.call(this);

    this.mapProductItemUpdateReviewCountCustomEvent();
  };

  _proto.mapProductItemUpdateReviewCountCustomEvent = function mapProductItemUpdateReviewCountCustomEvent() {
    var _this2 = this;

    if (!this.productItem) {
      return;
    }

    this.productItem.addEventListener(src_ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_2__["EVENT_UPDATE_REVIEW_COUNT"], function (event) {
      _this2.updateReviewCount(event.detail.reviewCount);
    });
  };

  _proto.updateReviewCount = function updateReviewCount(value) {
    if (this.reviewCount) {
      this.reviewCount.innerText = "(" + value + ")";
    }
  };

  return RatingSelector;
}(ProductReviewWidget_components_molecules_rating_selector_rating_selector__WEBPACK_IMPORTED_MODULE_1__["default"]);



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

/***/ "./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts":
/*!******************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.ts ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RatingSelector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");





var RatingSelector = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(RatingSelector, _Component);

  function RatingSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.input = void 0;
    _this.steps = void 0;
    _this.productItem = void 0;
    return _this;
  }

  var _proto = RatingSelector.prototype;

  _proto.readyCallback = function readyCallback() {
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
  };

  _proto.mapEvents = function mapEvents() {
    this.mapStepClickEvent();
  };

  _proto.mapStepClickEvent = function mapStepClickEvent() {
    var _this2 = this;

    this.steps.forEach(function (step) {
      step.addEventListener('click', function (event) {
        return _this2.onStepClick(event);
      });
    });
  };

  _proto.mapUpdateRatingEvents = function mapUpdateRatingEvents() {
    if (!this.productItem) {
      return;
    }

    this.mapProductItemUpdateRatingCustomEvent();
  };

  _proto.mapProductItemUpdateRatingCustomEvent = function mapProductItemUpdateRatingCustomEvent() {
    var _this3 = this;

    this.productItem.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_3__["EVENT_UPDATE_RATING"], function (event) {
      _this3.updateRating(event.detail.rating);
    });
  };

  _proto.onStepClick = function onStepClick(event) {
    var step = event.currentTarget;
    var newValue = parseFloat(step.getAttribute('data-step-value'));
    this.checkInput(newValue);
    this.updateRating(newValue);
  }
  /**
   * Toggles the disabled attribute of the input element.
   * @param value A number for checking if the attribute is to be set or removed from the input element.
   */
  ;

  _proto.checkInput = function checkInput(value) {
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
  ;

  _proto.updateRating = function updateRating(value) {
    var _this4 = this;

    this.input.setAttribute('value', "" + value);
    this.steps.forEach(function (step) {
      var stepValue = parseFloat(step.getAttribute('data-step-value'));

      if (value >= stepValue) {
        step.classList.add(_this4.name + "__step--active");
        return;
      }

      step.classList.remove(_this4.name + "__step--active");
    });
  }
  /**
   * Gets an input value.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(RatingSelector, [{
    key: "value",
    get: function get() {
      return parseFloat(this.input.value);
    }
    /**
     * Gets if the element is read-only.
     */

  }, {
    key: "readOnly",
    get: function get() {
      return this.hasAttribute('readonly');
    }
    /**
     * Gets if the element has an empty value.
     */

  }, {
    key: "disableIfEmptyValue",
    get: function get() {
      return this.hasAttribute('disable-if-empty-value');
    }
  }, {
    key: "productItemClassName",
    get: function get() {
      return this.getAttribute('product-item-class-name');
    }
  }]);

  return RatingSelector;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdFJldmlld1dpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vc3JjL1B5ei9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LXJldmlldy13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdFJldmlld1dpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3IudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0udHMiXSwibmFtZXMiOlsiUmF0aW5nU2VsZWN0b3IiLCJyZXZpZXdDb3VudCIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwibWFwVXBkYXRlUmF0aW5nRXZlbnRzIiwibWFwUHJvZHVjdEl0ZW1VcGRhdGVSZXZpZXdDb3VudEN1c3RvbUV2ZW50IiwicHJvZHVjdEl0ZW0iLCJhZGRFdmVudExpc3RlbmVyIiwiRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCIsImV2ZW50IiwidXBkYXRlUmV2aWV3Q291bnQiLCJkZXRhaWwiLCJ2YWx1ZSIsImlubmVyVGV4dCIsIlJhdGluZ1NlbGVjdG9yQ29yZSIsIlByb2R1Y3RJdGVtIiwicHJvZHVjdFJldmlld0NvdW50Iiwic2V0RGVmYXVsdFByaWNlQ29sb3IiLCJvcmlnaW5hbFByaWNlIiwicHJvZHVjdERlZmF1bHRQcmljZSIsImNsYXNzTGlzdCIsInJlbW92ZSIsImRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lIiwiYWRkIiwidXBkYXRlUHJvZHVjdEl0ZW1EYXRhIiwiZGF0YSIsInByb2R1Y3RPcmlnaW5hbFByaWNlIiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsImdldEF0dHJpYnV0ZSIsIlByb2R1Y3RJdGVtQ29yZSIsImlucHV0Iiwic3RlcHMiLCJyZWFkeUNhbGxiYWNrIiwiQXJyYXkiLCJmcm9tIiwicHJvZHVjdEl0ZW1DbGFzc05hbWUiLCJjbG9zZXN0IiwicmVhZE9ubHkiLCJjaGVja0lucHV0IiwibWFwRXZlbnRzIiwibWFwU3RlcENsaWNrRXZlbnQiLCJmb3JFYWNoIiwic3RlcCIsIm9uU3RlcENsaWNrIiwibWFwUHJvZHVjdEl0ZW1VcGRhdGVSYXRpbmdDdXN0b21FdmVudCIsIkVWRU5UX1VQREFURV9SQVRJTkciLCJ1cGRhdGVSYXRpbmciLCJyYXRpbmciLCJjdXJyZW50VGFyZ2V0IiwibmV3VmFsdWUiLCJwYXJzZUZsb2F0IiwiZGlzYWJsZUlmRW1wdHlWYWx1ZSIsInNldEF0dHJpYnV0ZSIsInJlbW92ZUF0dHJpYnV0ZSIsInN0ZXBWYWx1ZSIsIm5hbWUiLCJoYXNBdHRyaWJ1dGUiLCJDb21wb25lbnQiLCJFVkVOVF9VUERBVEVfTEFCRUxTIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsInByb2R1Y3RJbWFnZSIsInByb2R1Y3ROYW1lIiwicHJvZHVjdFJhdGluZyIsInByb2R1Y3RTa3UiLCJwcm9kdWN0TGlua0RldGFpbFBhZ2UiLCJwcm9kdWN0TGlua0FkZFRvQ2FydCIsInByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0IiwicHJvZHVjdEZvcm1BZGRUb0NhcnQiLCJwcm9kdWN0QnV0dG9uQWRkVG9DYXJ0IiwiaW1hZ2VVcmwiLCJpbWFnZUFsdCIsImxhYmVscyIsInByb2R1Y3RJdGVtTmFtZSIsInJhdGluZ1ZhbHVlIiwiZGVmYXVsdFByaWNlIiwic2t1IiwiZGV0YWlsUGFnZVVybCIsImFkZFRvQ2FydFVybCIsImFqYXhBZGRUb0NhcnRVcmwiLCJhZGRUb0NhcnRGb3JtQWN0aW9uIiwiZ2V0U2t1RnJvbVVybCIsInVybCIsImxhc3RQYXJ0T2ZVcmwiLCJSZWdFeHAiLCJtYXRjaCIsInNyYyIsImFsdCIsIk51bWJlciIsImNvbnRlbnQiLCJocmVmIiwiZWxlbWVudCIsImRhdGFzZXQiLCJkaXNhYmxlZCIsImFjdGlvbiIsImZvcm1BY3Rpb24iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTs7SUFFcUJBLGM7Ozs7Ozs7Ozs7O1VBQ1BDLFc7Ozs7OztTQUVBQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtELFdBQUwsR0FBZ0MsS0FBS0Usc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMscUJBQTRELENBQTVELENBQWhDOztBQUVBLGtDQUFNRixJQUFOO0FBQ0gsRzs7U0FFU0cscUIsR0FBVixpQ0FBd0M7QUFDcEMsa0NBQU1BLHFCQUFOOztBQUNBLFNBQUtDLDBDQUFMO0FBQ0gsRzs7U0FFU0EsMEMsR0FBVixzREFBdUQ7QUFBQTs7QUFDbkQsUUFBSSxDQUFDLEtBQUtDLFdBQVYsRUFBdUI7QUFDbkI7QUFDSDs7QUFFRCxTQUFLQSxXQUFMLENBQWlCQyxnQkFBakIsQ0FBa0NDLG1IQUFsQyxFQUE2RCxVQUFDQyxLQUFELEVBQWtCO0FBQzNFLFlBQUksQ0FBQ0MsaUJBQUwsQ0FBcUNELEtBQWQsQ0FBcUJFLE1BQXJCLENBQTRCWCxXQUFuRDtBQUNILEtBRkQ7QUFHSCxHOztTQUVTVSxpQixHQUFWLDJCQUE0QkUsS0FBNUIsRUFBaUQ7QUFDN0MsUUFBSSxLQUFLWixXQUFULEVBQXNCO0FBQ2xCLFdBQUtBLFdBQUwsQ0FBaUJhLFNBQWpCLFNBQWlDRCxLQUFqQztBQUNIO0FBQ0osRzs7O0VBNUJ1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LG9CQUFULEVBQStCO0FBQzNCLGFBQUtBLG9CQUFMLENBQTBCMEIsTUFBMUIsR0FBbUNkLG1CQUFuQztBQUNIOztBQUVELFVBQUksS0FBS1gsc0JBQVQsRUFBaUM7QUFDN0IsYUFBS0Esc0JBQUwsQ0FBNEJ1QixPQUE1QixDQUFvQ0csVUFBcEMsR0FBaURmLG1CQUFqRDtBQUNIOztBQUVELFdBQUt0RCxtQkFBTCxDQUF5QmtDLG9DQUF6QixFQUErRDtBQUMzRGdCLFdBQUcsRUFBRSxLQUFLSyxhQUFMLENBQW1CRCxtQkFBbkI7QUFEc0QsT0FBL0Q7QUFHSDs7OztFQWxNb0N4Qix5RCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5yYXRpbmctc2VsZWN0b3IubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJhdGluZ1NlbGVjdG9yQ29yZSBmcm9tICdQcm9kdWN0UmV2aWV3V2lkZ2V0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3JhdGluZy1zZWxlY3Rvci9yYXRpbmctc2VsZWN0b3InO1xuaW1wb3J0IHsgRVZFTlRfVVBEQVRFX1JFVklFV19DT1VOVCB9IGZyb20gJ3NyYy9TaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFJhdGluZ1NlbGVjdG9yIGV4dGVuZHMgUmF0aW5nU2VsZWN0b3JDb3JlIHtcbiAgICBwcm90ZWN0ZWQgcmV2aWV3Q291bnQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucmV2aWV3Q291bnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmV2aWV3LWNvdW50YClbMF07XG5cbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBVcGRhdGVSYXRpbmdFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm1hcFVwZGF0ZVJhdGluZ0V2ZW50cygpO1xuICAgICAgICB0aGlzLm1hcFByb2R1Y3RJdGVtVXBkYXRlUmV2aWV3Q291bnRDdXN0b21FdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBQcm9kdWN0SXRlbVVwZGF0ZVJldmlld0NvdW50Q3VzdG9tRXZlbnQoKSB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0SXRlbSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbS5hZGRFdmVudExpc3RlbmVyKEVWRU5UX1VQREFURV9SRVZJRVdfQ09VTlQsIChldmVudDogRXZlbnQpID0+IHtcbiAgICAgICAgICAgIHRoaXMudXBkYXRlUmV2aWV3Q291bnQoKDxDdXN0b21FdmVudD5ldmVudCkuZGV0YWlsLnJldmlld0NvdW50KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZVJldmlld0NvdW50KHZhbHVlOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMucmV2aWV3Q291bnQpIHtcbiAgICAgICAgICAgIHRoaXMucmV2aWV3Q291bnQuaW5uZXJUZXh0ID0gYCgke3ZhbHVlfSlgO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiaW1wb3J0IFByb2R1Y3RJdGVtQ29yZSwge1xuICAgIFByb2R1Y3RJdGVtRGF0YSBhcyBQcm9kdWN0SXRlbURhdGFDb3JlLFxufSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5UID0gJ3VwZGF0ZVJldmlld0NvdW50JztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEgZXh0ZW5kcyBQcm9kdWN0SXRlbURhdGFDb3JlIHtcbiAgICByZXZpZXdDb3VudDogbnVtYmVyO1xufVxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIFByb2R1Y3RJdGVtQ29yZSB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RSZXZpZXdDb3VudDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmV2aWV3Q291bnQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmV2aWV3LWNvdW50YClbMF07XG5cbiAgICAgICAgc3VwZXIuaW5pdCgpO1xuICAgIH1cblxuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5zZXREZWZhdWx0UHJpY2VDb2xvcihvcmlnaW5hbFByaWNlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0RGVmYXVsdFByaWNlQ29sb3Iob3JpZ2luYWxQcmljZTogc3RyaW5nKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIW9yaWdpbmFsUHJpY2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuY2xhc3NMaXN0LmFkZCh0aGlzLmRlZmF1bHRQcmljZUNvbG9yQ2xhc3NOYW1lKTtcbiAgICB9XG5cbiAgICB1cGRhdGVQcm9kdWN0SXRlbURhdGEoZGF0YTogUHJvZHVjdEl0ZW1EYXRhKTogdm9pZCB7XG4gICAgICAgIHN1cGVyLnVwZGF0ZVByb2R1Y3RJdGVtRGF0YShkYXRhKTtcbiAgICAgICAgdGhpcy5yZXZpZXdDb3VudCA9IGRhdGEucmV2aWV3Q291bnQ7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldCByZXZpZXdDb3VudChyZXZpZXdDb3VudDogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkVWSUVXX0NPVU5ULCB7IHJldmlld0NvdW50IH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZGVmYXVsdFByaWNlQ29sb3JDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdkZWZhdWx0LXByaWNlLWNvbG9yLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBQcm9kdWN0SXRlbSwgeyBFVkVOVF9VUERBVEVfUkFUSU5HIH0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBSYXRpbmdTZWxlY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogVGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICovXG4gICAgaW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBDb2xsZWN0aW9uIG9mIHRoZSBlbGVtZW50cyB3aGljaCB0b2dnbGUgdGhlIHN0ZXBzIG9mIHRoZSBwcm9kdWN0IHJldmlldy5cbiAgICAgKi9cbiAgICBzdGVwczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEl0ZW06IFByb2R1Y3RJdGVtO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dGApWzBdO1xuICAgICAgICB0aGlzLnN0ZXBzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zdGVwYCkpO1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SXRlbUNsYXNzTmFtZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SXRlbSA9IDxQcm9kdWN0SXRlbT50aGlzLmNsb3Nlc3QoYC4ke3RoaXMucHJvZHVjdEl0ZW1DbGFzc05hbWV9YCk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIXRoaXMucmVhZE9ubHkpIHtcbiAgICAgICAgICAgIHRoaXMuY2hlY2tJbnB1dCh0aGlzLnZhbHVlKTtcbiAgICAgICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1hcFVwZGF0ZVJhdGluZ0V2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwU3RlcENsaWNrRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwU3RlcENsaWNrRXZlbnQoKSB7XG4gICAgICAgIHRoaXMuc3RlcHMuZm9yRWFjaCgoc3RlcDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHN0ZXAuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uU3RlcENsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBVcGRhdGVSYXRpbmdFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5wcm9kdWN0SXRlbSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tYXBQcm9kdWN0SXRlbVVwZGF0ZVJhdGluZ0N1c3RvbUV2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFByb2R1Y3RJdGVtVXBkYXRlUmF0aW5nQ3VzdG9tRXZlbnQoKSB7XG4gICAgICAgIHRoaXMucHJvZHVjdEl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihFVkVOVF9VUERBVEVfUkFUSU5HLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICB0aGlzLnVwZGF0ZVJhdGluZygoPEN1c3RvbUV2ZW50PmV2ZW50KS5kZXRhaWwucmF0aW5nKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uU3RlcENsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzdGVwID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIGNvbnN0IG5ld1ZhbHVlID0gcGFyc2VGbG9hdChzdGVwLmdldEF0dHJpYnV0ZSgnZGF0YS1zdGVwLXZhbHVlJykpO1xuXG4gICAgICAgIHRoaXMuY2hlY2tJbnB1dChuZXdWYWx1ZSk7XG4gICAgICAgIHRoaXMudXBkYXRlUmF0aW5nKG5ld1ZhbHVlKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBUb2dnbGVzIHRoZSBkaXNhYmxlZCBhdHRyaWJ1dGUgb2YgdGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICogQHBhcmFtIHZhbHVlIEEgbnVtYmVyIGZvciBjaGVja2luZyBpZiB0aGUgYXR0cmlidXRlIGlzIHRvIGJlIHNldCBvciByZW1vdmVkIGZyb20gdGhlIGlucHV0IGVsZW1lbnQuXG4gICAgICovXG4gICAgY2hlY2tJbnB1dCh2YWx1ZTogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5kaXNhYmxlSWZFbXB0eVZhbHVlKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIXZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5pbnB1dC5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgdmFsdWUgYXR0cmlidXRlIGFuZCB0b2dnbGVzIHRoZSBzcGVjaWFsIGNsYXNzIG5hbWUuXG4gICAgICogQHBhcmFtIHZhbHVlIEEgbnVtYmVyIGZvciBzZXR0aW5nIHRoZSBhdHRyaWJ1dGUuXG4gICAgICovXG4gICAgdXBkYXRlUmF0aW5nKHZhbHVlOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dC5zZXRBdHRyaWJ1dGUoJ3ZhbHVlJywgYCR7dmFsdWV9YCk7XG5cbiAgICAgICAgdGhpcy5zdGVwcy5mb3JFYWNoKChzdGVwOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3Qgc3RlcFZhbHVlID0gcGFyc2VGbG9hdChzdGVwLmdldEF0dHJpYnV0ZSgnZGF0YS1zdGVwLXZhbHVlJykpO1xuXG4gICAgICAgICAgICBpZiAodmFsdWUgPj0gc3RlcFZhbHVlKSB7XG4gICAgICAgICAgICAgICAgc3RlcC5jbGFzc0xpc3QuYWRkKGAke3RoaXMubmFtZX1fX3N0ZXAtLWFjdGl2ZWApO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBzdGVwLmNsYXNzTGlzdC5yZW1vdmUoYCR7dGhpcy5uYW1lfV9fc3RlcC0tYWN0aXZlYCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYW4gaW5wdXQgdmFsdWUuXG4gICAgICovXG4gICAgZ2V0IHZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBwYXJzZUZsb2F0KHRoaXMuaW5wdXQudmFsdWUpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGVsZW1lbnQgaXMgcmVhZC1vbmx5LlxuICAgICAqL1xuICAgIGdldCByZWFkT25seSgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdyZWFkb25seScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGVsZW1lbnQgaGFzIGFuIGVtcHR5IHZhbHVlLlxuICAgICAqL1xuICAgIGdldCBkaXNhYmxlSWZFbXB0eVZhbHVlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5oYXNBdHRyaWJ1dGUoJ2Rpc2FibGUtaWYtZW1wdHktdmFsdWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHByb2R1Y3RJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJvZHVjdC1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCIvKiB0c2xpbnQ6ZGlzYWJsZTogbWF4LWZpbGUtbGluZS1jb3VudCAqL1xuaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlUmF0aW5nIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCByYXRpbmcgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVMYWJlbHMgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IGxhYmVscyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBamF4QWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBBSkFYICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbiBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbiBoYXMgYmVlbiB1cGRhdGVkLlxuICovXG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX1JBVElORyA9ICd1cGRhdGVSYXRpbmcnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9MQUJFTFMgPSAndXBkYXRlTGFiZWxzJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFqYXhBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiA9ICd1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uJztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEge1xuICAgIGltYWdlVXJsOiBzdHJpbmc7XG4gICAgaW1hZ2VBbHQ6IHN0cmluZztcbiAgICBsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdO1xuICAgIG5hbWU6IHN0cmluZztcbiAgICByYXRpbmdWYWx1ZTogbnVtYmVyO1xuICAgIGRlZmF1bHRQcmljZTogc3RyaW5nO1xuICAgIHNrdTogc3RyaW5nO1xuICAgIG9yaWdpbmFsUHJpY2U6IHN0cmluZztcbiAgICBkZXRhaWxQYWdlVXJsOiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0VXJsOiBzdHJpbmc7XG4gICAgYWpheEFkZFRvQ2FydFVybD86IHN0cmluZztcbiAgICBhZGRUb0NhcnRGb3JtQWN0aW9uPzogc3RyaW5nO1xufVxuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtTGFiZWxzRGF0YSB7XG4gICAgdGV4dDogc3RyaW5nO1xuICAgIHR5cGU6IHN0cmluZztcbn1cblxudHlwZSBVcmwgPSBzdHJpbmcgfCBudWxsO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJbWFnZTogSFRNTEltYWdlRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE5hbWU6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0UmF0aW5nOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0RGVmYXVsdFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFNrdTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RPcmlnaW5hbFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtEZXRhaWxQYWdlOiBIVE1MQW5jaG9yRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0FkZFRvQ2FydDogSFRNTEFuY2hvckVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEZvcm1BZGRUb0NhcnQ6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UgPSA8SFRNTEltYWdlRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbWFnZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3ROYW1lID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX25hbWVgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmF0aW5nID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmF0aW5nYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19kZWZhdWx0LXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFNrdSA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NrdWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX29yaWdpbmFsLXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlID0gPEhUTUxBbmNob3JFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWRldGFpbC1wYWdlYCkpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQgPSA8SFRNTEFuY2hvckVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWpheC1idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0ID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19mb3JtLWFkZC10by1jYXJ0YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKiBAcGFyYW0gZGF0YSBBIGRhdGEgb2JqZWN0IGZvciBzZXR0aW5nIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICovXG4gICAgdXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGE6IFByb2R1Y3RJdGVtRGF0YSk6IHZvaWQge1xuICAgICAgICB0aGlzLmltYWdlVXJsID0gZGF0YS5pbWFnZVVybDtcbiAgICAgICAgdGhpcy5pbWFnZUFsdCA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5sYWJlbHMgPSBkYXRhLmxhYmVscztcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbU5hbWUgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMucmF0aW5nVmFsdWUgPSBkYXRhLnJhdGluZ1ZhbHVlO1xuICAgICAgICB0aGlzLmRlZmF1bHRQcmljZSA9IGRhdGEuZGVmYXVsdFByaWNlO1xuICAgICAgICB0aGlzLnNrdSA9IGRhdGEuc2t1O1xuICAgICAgICB0aGlzLm9yaWdpbmFsUHJpY2UgPSBkYXRhLm9yaWdpbmFsUHJpY2U7XG4gICAgICAgIHRoaXMuZGV0YWlsUGFnZVVybCA9IGRhdGEuZGV0YWlsUGFnZVVybDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRVcmwgPSBkYXRhLmFkZFRvQ2FydFVybDtcbiAgICAgICAgdGhpcy5hamF4QWRkVG9DYXJ0VXJsID0gZGF0YS5hamF4QWRkVG9DYXJ0VXJsID8/IG51bGw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA9IGRhdGEuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA/PyBudWxsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRTa3VGcm9tVXJsKHVybDogVXJsKTogVXJsIHtcbiAgICAgICAgaWYgKCF1cmwpIHtcbiAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgbGFzdFBhcnRPZlVybCA9IG5ldyBSZWdFeHAoYChbXlxcXFwvXSkrJGAsICdnJyk7XG4gICAgICAgIGNvbnN0IHNrdSA9IHVybC5tYXRjaChsYXN0UGFydE9mVXJsKTtcblxuICAgICAgICByZXR1cm4gc2t1WzBdO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICogQHBhcmFtIGltYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VVcmwoaW1hZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLnNyYyA9IGltYWdlVXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VBbHQgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqL1xuICAgIHNldCBpbWFnZUFsdChpbWFnZUFsdDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UuYWx0ID0gaW1hZ2VBbHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqIEBwYXJhbSBsYWJlbHMgQW4gYXJyYXkgb2YgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKi9cbiAgICBzZXQgbGFiZWxzKGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9MQUJFTFMsIHsgbGFiZWxzIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqIEBwYXJhbSBuYW1lIEEgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgc2V0IHByb2R1Y3RJdGVtTmFtZShuYW1lOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0ID0gbmFtZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICogQHBhcmFtIHJhdGluZyBBIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgc2V0IHJhdGluZ1ZhbHVlKHJhdGluZzogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkFUSU5HLCB7IHJhdGluZyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKiBAcGFyYW0gZGVmYXVsdFByaWNlIEEgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IGRlZmF1bHRQcmljZShkZWZhdWx0UHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0ID0gZGVmYXVsdFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKiBAcGFyYW0gcHJvZHVjdFNrdSBBIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgc2V0IHNrdShwcm9kdWN0U2t1OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQgPSBwcm9kdWN0U2t1O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqIEBwYXJhbSBvcmlnaW5hbFByaWNlIEEgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gZGV0YWlsUGFnZVVybCBBIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGRldGFpbFBhZ2VVcmwoZGV0YWlsUGFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UuZm9yRWFjaCgoZWxlbWVudDogSFRNTEFuY2hvckVsZW1lbnQpID0+IChlbGVtZW50LmhyZWYgPSBkZXRhaWxQYWdlVXJsKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0VXJsKGFkZFRvQ2FydFVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWYgPSBhZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhamF4QWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFqYXhBZGRUb0NhcnRVcmwoYWpheEFkZFRvQ2FydFVybDogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRpc2FibGVkID0gIWFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsID0gYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWpheEFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydEZvcm1BY3Rpb24gQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbihhZGRUb0NhcnRGb3JtQWN0aW9uOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiwge1xuICAgICAgICAgICAgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0Rm9ybUFjdGlvbiksXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGltYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEltYWdlLnNyYztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIGdldCBwcm9kdWN0SXRlbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgZ2V0IHJhdGluZ1ZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RSYXRpbmcpIHtcbiAgICAgICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5wcm9kdWN0UmF0aW5nLnZhbHVlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIGdldCBkZWZhdWx0UHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIGdldCBza3UoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFNrdS5jb250ZW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIGdldCBvcmlnaW5hbFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBkZXRhaWxQYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlWzBdLmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhamF4QWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRGb3JtQWN0aW9uKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbjtcbiAgICAgICAgfVxuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=