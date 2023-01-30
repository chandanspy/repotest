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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ProductLabelWidget_components_molecules_label_group_label_group__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ProductLabelWidget/components/molecules/label-group/label-group */ "./vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.ts");



var LabelGroup = /*#__PURE__*/function (_LabelGroupCore) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(LabelGroup, _LabelGroupCore);

  function LabelGroup() {
    return _LabelGroupCore.apply(this, arguments) || this;
  }

  var _proto = LabelGroup.prototype;

  _proto.setProductLabels = function setProductLabels(labels) {
    var _this = this;

    if (!labels.length) {
      this.productLabelFlags.forEach(function (element) {
        return element.classList.add(_this.classToToggle);
      });
      return;
    }

    this.updateProductLabels(labels);
  };

  _proto.updateProductLabels = function updateProductLabels(labelFlags) {
    var _this2 = this;

    labelFlags.forEach(function (element, index) {
      if (index) {
        _this2.createProductLabelFlagClones();
      }

      _this2.deleteProductLabelFlagClones(labelFlags);

      _this2.deleteProductLabelFlagModifiers(index);

      _this2.updateProductLabelFlags(element, index);
    });
  };

  return LabelGroup;
}(ProductLabelWidget_components_molecules_label_group_label_group__WEBPACK_IMPORTED_MODULE_1__["default"]);



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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ShopUi/components/molecules/product-item/product-item */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.ts");





var LabelGroup = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(LabelGroup, _Component);

  function LabelGroup() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.productLabelFlags = void 0;
    _this.productLabelTag = void 0;
    _this.productItem = void 0;
    return _this;
  }

  var _proto = LabelGroup.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
    this.productLabelTag = this.getElementsByClassName(this.jsName + "__label-tag")[0];

    if (this.productItemClassName) {
      this.productItem = this.closest("." + this.productItemClassName);
    }

    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    if (!this.productItem) {
      return;
    }

    this.mapProductItemUpdateLabelsCustomEvent();
  };

  _proto.mapProductItemUpdateLabelsCustomEvent = function mapProductItemUpdateLabelsCustomEvent() {
    var _this2 = this;

    this.productItem.addEventListener(ShopUi_components_molecules_product_item_product_item__WEBPACK_IMPORTED_MODULE_3__["EVENT_UPDATE_LABELS"], function (event) {
      _this2.setProductLabels(event.detail.labels);
    });
  }
  /**
   * Hides the product labels if data is empty.
   * Splits the labels object to labelFlags and labelTag accordingly.
   * Calls the method for updating product labels.
   * @param labels An array of product labels.
   */
  ;

  _proto.setProductLabels = function setProductLabels(labels) {
    var _this3 = this;

    if (!labels.length) {
      this.productLabelFlags.forEach(function (element) {
        return element.classList.add(_this3.classToToggle);
      });
      this.productLabelTag.classList.add(this.classToToggle);
      return;
    }

    var labelTagType = this.productLabelTag.getAttribute('data-label-tag-type');
    var labelFlags = labels.filter(function (element) {
      return element.type !== labelTagType;
    });
    var labelTag = labels.filter(function (element) {
      return element.type === labelTagType;
    });

    if (!labelTag.length) {
      this.productLabelTag.classList.add(this.classToToggle);
    }

    if (!labelFlags.length) {
      this.productLabelFlags.forEach(function (element) {
        return element.classList.add(_this3.classToToggle);
      });
    }

    this.updateProductLabels(labelFlags, labelTag[0]);
  };

  _proto.updateProductLabelTag = function updateProductLabelTag(element) {
    var labelTagTextContent = this.productLabelTag.getElementsByClassName(this.jsName + "__label-tag-text")[0];
    this.productLabelTag.classList.remove(this.classToToggle);
    labelTagTextContent.innerText = element.text;
  };

  _proto.createProductLabelFlagClones = function createProductLabelFlagClones() {
    var cloneLabelFlag = this.productLabelFlags[0].cloneNode(true);
    this.productLabelFlags[0].parentNode.insertBefore(cloneLabelFlag, this.productLabelFlags[0].nextSibling);
    this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
  };

  _proto.deleteProductLabelFlagClones = function deleteProductLabelFlagClones(labelFlags) {
    while (this.productLabelFlags.length > labelFlags.length) {
      this.productLabelFlags[this.productLabelFlags.length - 1].remove();
      this.productLabelFlags = Array.from(this.getElementsByClassName(this.jsName + "__label-flag"));
    }
  };

  _proto.deleteProductLabelFlagModifiers = function deleteProductLabelFlagModifiers(index) {
    var _this4 = this;

    this.productLabelFlags[index].classList.forEach(function (element) {
      if (element.includes('--')) {
        _this4.productLabelFlags[index].classList.remove(element);
      }
    });
  };

  _proto.updateProductLabelFlags = function updateProductLabelFlags(element, index) {
    var labelFlagClassName = this.productLabelFlags[index].getAttribute('data-config-name');
    var labelFlagTextContent = this.productLabelFlags[index].getElementsByClassName(this.jsName + "__label-flag-text")[0];

    if (element.type) {
      this.productLabelFlags[index].classList.add(labelFlagClassName + "--" + element.type);
    }

    this.productLabelFlags[index].classList.remove(this.classToToggle);
    labelFlagTextContent.innerText = element.text;
  };

  _proto.updateProductLabels = function updateProductLabels(labelFlags, labelTag) {
    var _this5 = this;

    if (labelTag) {
      this.updateProductLabelTag(labelTag);
    }

    if (labelFlags.length) {
      labelFlags.forEach(function (element, index) {
        if (index >= 1) {
          _this5.createProductLabelFlagClones();
        }

        _this5.deleteProductLabelFlagClones(labelFlags);

        _this5.deleteProductLabelFlagModifiers(index);

        _this5.updateProductLabelFlags(element, index);
      });
    }
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(LabelGroup, [{
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }, {
    key: "productItemClassName",
    get: function get() {
      return this.getAttribute('product-item-class-name');
    }
  }]);

  return LabelGroup;
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdExhYmVsV2lkZ2V0L1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvbGFiZWwtZ3JvdXAvbGFiZWwtZ3JvdXAudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9wcm9kdWN0LWxhYmVsLXdpZGdldC9zcmMvU3ByeWtlclNob3AvWXZlcy9Qcm9kdWN0TGFiZWxXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9sYWJlbC1ncm91cC9sYWJlbC1ncm91cC50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbS50cyJdLCJuYW1lcyI6WyJMYWJlbEdyb3VwIiwic2V0UHJvZHVjdExhYmVscyIsImxhYmVscyIsImxlbmd0aCIsInByb2R1Y3RMYWJlbEZsYWdzIiwiZm9yRWFjaCIsImVsZW1lbnQiLCJjbGFzc0xpc3QiLCJhZGQiLCJjbGFzc1RvVG9nZ2xlIiwidXBkYXRlUHJvZHVjdExhYmVscyIsImxhYmVsRmxhZ3MiLCJpbmRleCIsImNyZWF0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMiLCJkZWxldGVQcm9kdWN0TGFiZWxGbGFnQ2xvbmVzIiwiZGVsZXRlUHJvZHVjdExhYmVsRmxhZ01vZGlmaWVycyIsInVwZGF0ZVByb2R1Y3RMYWJlbEZsYWdzIiwiTGFiZWxHcm91cENvcmUiLCJwcm9kdWN0TGFiZWxUYWciLCJwcm9kdWN0SXRlbSIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInByb2R1Y3RJdGVtQ2xhc3NOYW1lIiwiY2xvc2VzdCIsIm1hcEV2ZW50cyIsIm1hcFByb2R1Y3RJdGVtVXBkYXRlTGFiZWxzQ3VzdG9tRXZlbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiRVZFTlRfVVBEQVRFX0xBQkVMUyIsImV2ZW50IiwiZGV0YWlsIiwibGFiZWxUYWdUeXBlIiwiZ2V0QXR0cmlidXRlIiwiZmlsdGVyIiwidHlwZSIsImxhYmVsVGFnIiwidXBkYXRlUHJvZHVjdExhYmVsVGFnIiwibGFiZWxUYWdUZXh0Q29udGVudCIsInJlbW92ZSIsImlubmVyVGV4dCIsInRleHQiLCJjbG9uZUxhYmVsRmxhZyIsImNsb25lTm9kZSIsInBhcmVudE5vZGUiLCJpbnNlcnRCZWZvcmUiLCJuZXh0U2libGluZyIsImluY2x1ZGVzIiwibGFiZWxGbGFnQ2xhc3NOYW1lIiwibGFiZWxGbGFnVGV4dENvbnRlbnQiLCJDb21wb25lbnQiLCJFVkVOVF9VUERBVEVfUkFUSU5HIiwiRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BSkFYX0FERF9UT19DQVJUX1VSTCIsIkVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiIsIlByb2R1Y3RJdGVtIiwicHJvZHVjdEltYWdlIiwicHJvZHVjdE5hbWUiLCJwcm9kdWN0UmF0aW5nIiwicHJvZHVjdERlZmF1bHRQcmljZSIsInByb2R1Y3RTa3UiLCJwcm9kdWN0T3JpZ2luYWxQcmljZSIsInByb2R1Y3RMaW5rRGV0YWlsUGFnZSIsInByb2R1Y3RMaW5rQWRkVG9DYXJ0IiwicHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQiLCJwcm9kdWN0Rm9ybUFkZFRvQ2FydCIsInByb2R1Y3RCdXR0b25BZGRUb0NhcnQiLCJ1cGRhdGVQcm9kdWN0SXRlbURhdGEiLCJkYXRhIiwiaW1hZ2VVcmwiLCJpbWFnZUFsdCIsIm5hbWUiLCJwcm9kdWN0SXRlbU5hbWUiLCJyYXRpbmdWYWx1ZSIsImRlZmF1bHRQcmljZSIsInNrdSIsIm9yaWdpbmFsUHJpY2UiLCJkZXRhaWxQYWdlVXJsIiwiYWRkVG9DYXJ0VXJsIiwiYWpheEFkZFRvQ2FydFVybCIsImFkZFRvQ2FydEZvcm1BY3Rpb24iLCJnZXRTa3VGcm9tVXJsIiwidXJsIiwibGFzdFBhcnRPZlVybCIsIlJlZ0V4cCIsIm1hdGNoIiwic3JjIiwiYWx0IiwiZGlzcGF0Y2hDdXN0b21FdmVudCIsIk51bWJlciIsInZhbHVlIiwicmF0aW5nIiwiY29udGVudCIsImhyZWYiLCJkYXRhc2V0IiwiZGlzYWJsZWQiLCJhY3Rpb24iLCJmb3JtQWN0aW9uIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBR3FCQSxVOzs7Ozs7Ozs7U0FDakJDLGdCLEdBQUEsMEJBQWlCQyxNQUFqQixFQUFrRDtBQUFBOztBQUM5QyxRQUFJLENBQUNBLE1BQU0sQ0FBQ0MsTUFBWixFQUFvQjtBQUNoQixXQUFLQyxpQkFBTCxDQUF1QkMsT0FBdkIsQ0FBK0IsVUFBQ0MsT0FBRDtBQUFBLGVBQTBCQSxPQUFPLENBQUNDLFNBQVIsQ0FBa0JDLEdBQWxCLENBQXNCLEtBQUksQ0FBQ0MsYUFBM0IsQ0FBMUI7QUFBQSxPQUEvQjtBQUVBO0FBQ0g7O0FBRUQsU0FBS0MsbUJBQUwsQ0FBeUJSLE1BQXpCO0FBQ0gsRzs7U0FFU1EsbUIsR0FBViw2QkFBOEJDLFVBQTlCLEVBQXlFO0FBQUE7O0FBQ3JFQSxjQUFVLENBQUNOLE9BQVgsQ0FBbUIsVUFBQ0MsT0FBRCxFQUFpQ00sS0FBakMsRUFBbUQ7QUFDbEUsVUFBSUEsS0FBSixFQUFXO0FBQ1AsY0FBSSxDQUFDQyw0QkFBTDtBQUNIOztBQUVELFlBQUksQ0FBQ0MsNEJBQUwsQ0FBa0NILFVBQWxDOztBQUNBLFlBQUksQ0FBQ0ksK0JBQUwsQ0FBcUNILEtBQXJDOztBQUNBLFlBQUksQ0FBQ0ksdUJBQUwsQ0FBNkJWLE9BQTdCLEVBQXNDTSxLQUF0QztBQUNILEtBUkQ7QUFTSCxHOzs7RUFyQm1DSyx1Rzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDSHhDO0FBQ0E7O0lBS3FCakIsVTs7Ozs7Ozs7Ozs7VUFDUEksaUI7VUFDQWMsZTtVQUNBQyxXOzs7Ozs7U0FF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dXAubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IExhYmVsR3JvdXBDb3JlIGZyb20gJ1Byb2R1Y3RMYWJlbFdpZGdldC9jb21wb25lbnRzL21vbGVjdWxlcy9sYWJlbC1ncm91cC9sYWJlbC1ncm91cCc7XG5pbXBvcnQgeyBQcm9kdWN0SXRlbUxhYmVsc0RhdGEgfSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvcHJvZHVjdC1pdGVtL3Byb2R1Y3QtaXRlbSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIExhYmVsR3JvdXAgZXh0ZW5kcyBMYWJlbEdyb3VwQ29yZSB7XG4gICAgc2V0UHJvZHVjdExhYmVscyhsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdKSB7XG4gICAgICAgIGlmICghbGFiZWxzLmxlbmd0aCkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFncy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4gZWxlbWVudC5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSkpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnVwZGF0ZVByb2R1Y3RMYWJlbHMobGFiZWxzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdXBkYXRlUHJvZHVjdExhYmVscyhsYWJlbEZsYWdzOiBQcm9kdWN0SXRlbUxhYmVsc0RhdGFbXSk6IHZvaWQge1xuICAgICAgICBsYWJlbEZsYWdzLmZvckVhY2goKGVsZW1lbnQ6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YSwgaW5kZXg6IG51bWJlcikgPT4ge1xuICAgICAgICAgICAgaWYgKGluZGV4KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5jcmVhdGVQcm9kdWN0TGFiZWxGbGFnQ2xvbmVzKCk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHRoaXMuZGVsZXRlUHJvZHVjdExhYmVsRmxhZ0Nsb25lcyhsYWJlbEZsYWdzKTtcbiAgICAgICAgICAgIHRoaXMuZGVsZXRlUHJvZHVjdExhYmVsRmxhZ01vZGlmaWVycyhpbmRleCk7XG4gICAgICAgICAgICB0aGlzLnVwZGF0ZVByb2R1Y3RMYWJlbEZsYWdzKGVsZW1lbnQsIGluZGV4KTtcbiAgICAgICAgfSk7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgUHJvZHVjdEl0ZW0sIHtcbiAgICBFVkVOVF9VUERBVEVfTEFCRUxTLFxuICAgIFByb2R1Y3RJdGVtTGFiZWxzRGF0YSxcbn0gZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL3Byb2R1Y3QtaXRlbS9wcm9kdWN0LWl0ZW0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBMYWJlbEdyb3VwIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExhYmVsRmxhZ3M6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RMYWJlbFRhZzogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJdGVtOiBQcm9kdWN0SXRlbTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19sYWJlbC1mbGFnYCkpO1xuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbFRhZyA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19sYWJlbC10YWdgKVswXTtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEl0ZW1DbGFzc05hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEl0ZW0gPSA8UHJvZHVjdEl0ZW0+dGhpcy5jbG9zZXN0KGAuJHt0aGlzLnByb2R1Y3RJdGVtQ2xhc3NOYW1lfWApO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMucHJvZHVjdEl0ZW0pIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMubWFwUHJvZHVjdEl0ZW1VcGRhdGVMYWJlbHNDdXN0b21FdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBQcm9kdWN0SXRlbVVwZGF0ZUxhYmVsc0N1c3RvbUV2ZW50KCkge1xuICAgICAgICB0aGlzLnByb2R1Y3RJdGVtLmFkZEV2ZW50TGlzdGVuZXIoRVZFTlRfVVBEQVRFX0xBQkVMUywgKGV2ZW50OiBFdmVudCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5zZXRQcm9kdWN0TGFiZWxzKCg8Q3VzdG9tRXZlbnQ+ZXZlbnQpLmRldGFpbC5sYWJlbHMpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBIaWRlcyB0aGUgcHJvZHVjdCBsYWJlbHMgaWYgZGF0YSBpcyBlbXB0eS5cbiAgICAgKiBTcGxpdHMgdGhlIGxhYmVscyBvYmplY3QgdG8gbGFiZWxGbGFncyBhbmQgbGFiZWxUYWcgYWNjb3JkaW5nbHkuXG4gICAgICogQ2FsbHMgdGhlIG1ldGhvZCBmb3IgdXBkYXRpbmcgcHJvZHVjdCBsYWJlbHMuXG4gICAgICogQHBhcmFtIGxhYmVscyBBbiBhcnJheSBvZiBwcm9kdWN0IGxhYmVscy5cbiAgICAgKi9cbiAgICBzZXRQcm9kdWN0TGFiZWxzKGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pIHtcbiAgICAgICAgaWYgKCFsYWJlbHMubGVuZ3RoKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiBlbGVtZW50LmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKSk7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbFRhZy5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IGxhYmVsVGFnVHlwZSA9IHRoaXMucHJvZHVjdExhYmVsVGFnLmdldEF0dHJpYnV0ZSgnZGF0YS1sYWJlbC10YWctdHlwZScpO1xuICAgICAgICBjb25zdCBsYWJlbEZsYWdzID0gbGFiZWxzLmZpbHRlcigoZWxlbWVudDogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhKSA9PiBlbGVtZW50LnR5cGUgIT09IGxhYmVsVGFnVHlwZSk7XG4gICAgICAgIGNvbnN0IGxhYmVsVGFnID0gbGFiZWxzLmZpbHRlcigoZWxlbWVudDogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhKSA9PiBlbGVtZW50LnR5cGUgPT09IGxhYmVsVGFnVHlwZSk7XG5cbiAgICAgICAgaWYgKCFsYWJlbFRhZy5sZW5ndGgpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsVGFnLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICghbGFiZWxGbGFncy5sZW5ndGgpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3MuZm9yRWFjaCgoZWxlbWVudDogSFRNTEVsZW1lbnQpID0+IGVsZW1lbnQuY2xhc3NMaXN0LmFkZCh0aGlzLmNsYXNzVG9Ub2dnbGUpKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudXBkYXRlUHJvZHVjdExhYmVscyhsYWJlbEZsYWdzLCBsYWJlbFRhZ1swXSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZVByb2R1Y3RMYWJlbFRhZyhlbGVtZW50OiBQcm9kdWN0SXRlbUxhYmVsc0RhdGEpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGFiZWxUYWdUZXh0Q29udGVudCA9IDxIVE1MRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbFRhZy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGFiZWwtdGFnLXRleHRgKVswXVxuICAgICAgICApO1xuXG4gICAgICAgIHRoaXMucHJvZHVjdExhYmVsVGFnLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgbGFiZWxUYWdUZXh0Q29udGVudC5pbm5lclRleHQgPSBlbGVtZW50LnRleHQ7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNyZWF0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNsb25lTGFiZWxGbGFnID0gdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1swXS5jbG9uZU5vZGUodHJ1ZSk7XG5cbiAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1swXS5wYXJlbnROb2RlLmluc2VydEJlZm9yZShjbG9uZUxhYmVsRmxhZywgdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1swXS5uZXh0U2libGluZyk7XG4gICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3MgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xhYmVsLWZsYWdgKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdDbG9uZXMobGFiZWxGbGFnczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pOiB2b2lkIHtcbiAgICAgICAgd2hpbGUgKHRoaXMucHJvZHVjdExhYmVsRmxhZ3MubGVuZ3RoID4gbGFiZWxGbGFncy5sZW5ndGgpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbdGhpcy5wcm9kdWN0TGFiZWxGbGFncy5sZW5ndGggLSAxXS5yZW1vdmUoKTtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3MgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19sYWJlbC1mbGFnYCkpXG4gICAgICAgICAgICApO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdNb2RpZmllcnMoaW5kZXg6IG51bWJlcik6IHZvaWQge1xuICAgICAgICB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzW2luZGV4XS5jbGFzc0xpc3QuZm9yRWFjaCgoZWxlbWVudDogc3RyaW5nKSA9PiB7XG4gICAgICAgICAgICBpZiAoZWxlbWVudC5pbmNsdWRlcygnLS0nKSkge1xuICAgICAgICAgICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbaW5kZXhdLmNsYXNzTGlzdC5yZW1vdmUoZWxlbWVudCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVQcm9kdWN0TGFiZWxGbGFncyhlbGVtZW50OiBQcm9kdWN0SXRlbUxhYmVsc0RhdGEsIGluZGV4OiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbGFiZWxGbGFnQ2xhc3NOYW1lOiBzdHJpbmcgPSB0aGlzLnByb2R1Y3RMYWJlbEZsYWdzW2luZGV4XS5nZXRBdHRyaWJ1dGUoJ2RhdGEtY29uZmlnLW5hbWUnKTtcbiAgICAgICAgY29uc3QgbGFiZWxGbGFnVGV4dENvbnRlbnQgPSA8SFRNTEVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1tpbmRleF0uZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2xhYmVsLWZsYWctdGV4dGApWzBdXG4gICAgICAgICk7XG5cbiAgICAgICAgaWYgKGVsZW1lbnQudHlwZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGFiZWxGbGFnc1tpbmRleF0uY2xhc3NMaXN0LmFkZChgJHtsYWJlbEZsYWdDbGFzc05hbWV9LS0ke2VsZW1lbnQudHlwZX1gKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMucHJvZHVjdExhYmVsRmxhZ3NbaW5kZXhdLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgbGFiZWxGbGFnVGV4dENvbnRlbnQuaW5uZXJUZXh0ID0gZWxlbWVudC50ZXh0O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVQcm9kdWN0TGFiZWxzKGxhYmVsRmxhZ3M6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdLCBsYWJlbFRhZzogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhKTogdm9pZCB7XG4gICAgICAgIGlmIChsYWJlbFRhZykge1xuICAgICAgICAgICAgdGhpcy51cGRhdGVQcm9kdWN0TGFiZWxUYWcobGFiZWxUYWcpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKGxhYmVsRmxhZ3MubGVuZ3RoKSB7XG4gICAgICAgICAgICBsYWJlbEZsYWdzLmZvckVhY2goKGVsZW1lbnQ6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YSwgaW5kZXg6IG51bWJlcikgPT4ge1xuICAgICAgICAgICAgICAgIGlmIChpbmRleCA+PSAxKSB7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuY3JlYXRlUHJvZHVjdExhYmVsRmxhZ0Nsb25lcygpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHRoaXMuZGVsZXRlUHJvZHVjdExhYmVsRmxhZ0Nsb25lcyhsYWJlbEZsYWdzKTtcbiAgICAgICAgICAgICAgICB0aGlzLmRlbGV0ZVByb2R1Y3RMYWJlbEZsYWdNb2RpZmllcnMoaW5kZXgpO1xuICAgICAgICAgICAgICAgIHRoaXMudXBkYXRlUHJvZHVjdExhYmVsRmxhZ3MoZWxlbWVudCwgaW5kZXgpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHByb2R1Y3RJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJvZHVjdC1pdGVtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCIvKiB0c2xpbnQ6ZGlzYWJsZTogbWF4LWZpbGUtbGluZS1jb3VudCAqL1xuaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlUmF0aW5nIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCByYXRpbmcgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVMYWJlbHMgQW4gZXZlbnQgZW1pdHRlZCB3aGVuIHRoZSBwcm9kdWN0IGxhYmVscyBoYXMgYmVlbiB1cGRhdGVkLlxuICogQGV2ZW50IHVwZGF0ZUFkZFRvQ2FydFVybCBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBVUkwgaGFzIGJlZW4gdXBkYXRlZC5cbiAqIEBldmVudCB1cGRhdGVBamF4QWRkVG9DYXJ0VXJsIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgcHJvZHVjdCBBSkFYICdhZGQgdG8gY2FydCcgVVJMIGhhcyBiZWVuIHVwZGF0ZWQuXG4gKiBAZXZlbnQgdXBkYXRlQWRkVG9DYXJ0Rm9ybUFjdGlvbiBBbiBldmVudCBlbWl0dGVkIHdoZW4gdGhlIHByb2R1Y3QgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbiBoYXMgYmVlbiB1cGRhdGVkLlxuICovXG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX1JBVElORyA9ICd1cGRhdGVSYXRpbmcnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9MQUJFTFMgPSAndXBkYXRlTGFiZWxzJztcbmV4cG9ydCBjb25zdCBFVkVOVF9VUERBVEVfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFkZFRvQ2FydFVybCc7XG5leHBvcnQgY29uc3QgRVZFTlRfVVBEQVRFX0FKQVhfQUREX1RPX0NBUlRfVVJMID0gJ3VwZGF0ZUFqYXhBZGRUb0NhcnRVcmwnO1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiA9ICd1cGRhdGVBZGRUb0NhcnRGb3JtQWN0aW9uJztcblxuZXhwb3J0IGludGVyZmFjZSBQcm9kdWN0SXRlbURhdGEge1xuICAgIGltYWdlVXJsOiBzdHJpbmc7XG4gICAgaW1hZ2VBbHQ6IHN0cmluZztcbiAgICBsYWJlbHM6IFByb2R1Y3RJdGVtTGFiZWxzRGF0YVtdO1xuICAgIG5hbWU6IHN0cmluZztcbiAgICByYXRpbmdWYWx1ZTogbnVtYmVyO1xuICAgIGRlZmF1bHRQcmljZTogc3RyaW5nO1xuICAgIHNrdTogc3RyaW5nO1xuICAgIG9yaWdpbmFsUHJpY2U6IHN0cmluZztcbiAgICBkZXRhaWxQYWdlVXJsOiBzdHJpbmc7XG4gICAgYWRkVG9DYXJ0VXJsOiBzdHJpbmc7XG4gICAgYWpheEFkZFRvQ2FydFVybD86IHN0cmluZztcbiAgICBhZGRUb0NhcnRGb3JtQWN0aW9uPzogc3RyaW5nO1xufVxuXG5leHBvcnQgaW50ZXJmYWNlIFByb2R1Y3RJdGVtTGFiZWxzRGF0YSB7XG4gICAgdGV4dDogc3RyaW5nO1xuICAgIHR5cGU6IHN0cmluZztcbn1cblxudHlwZSBVcmwgPSBzdHJpbmcgfCBudWxsO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBQcm9kdWN0SXRlbSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RJbWFnZTogSFRNTEltYWdlRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdE5hbWU6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0UmF0aW5nOiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBwcm9kdWN0RGVmYXVsdFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdFNrdTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RPcmlnaW5hbFByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdExpbmtEZXRhaWxQYWdlOiBIVE1MQW5jaG9yRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwcm9kdWN0TGlua0FkZFRvQ2FydDogSFRNTEFuY2hvckVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0OiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEZvcm1BZGRUb0NhcnQ6IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcHJvZHVjdEJ1dHRvbkFkZFRvQ2FydDogSFRNTEJ1dHRvbkVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UgPSA8SFRNTEltYWdlRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbWFnZWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3ROYW1lID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX25hbWVgKVswXTtcbiAgICAgICAgdGhpcy5wcm9kdWN0UmF0aW5nID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcmF0aW5nYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19kZWZhdWx0LXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdFNrdSA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NrdWApWzBdO1xuICAgICAgICB0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX29yaWdpbmFsLXByaWNlYClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlID0gPEhUTUxBbmNob3JFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19saW5rLWRldGFpbC1wYWdlYCkpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQgPSA8SFRNTEFuY2hvckVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbGluay1hZGQtdG8tY2FydGApWzBdXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMucHJvZHVjdEFqYXhCdXR0b25BZGRUb0NhcnQgPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+KFxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWpheC1idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgICAgICB0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0ID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19mb3JtLWFkZC10by1jYXJ0YClbMF07XG4gICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydCA9IDxIVE1MQnV0dG9uRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tYWRkLXRvLWNhcnRgKVswXVxuICAgICAgICApO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbmZvcm1hdGlvbi5cbiAgICAgKiBAcGFyYW0gZGF0YSBBIGRhdGEgb2JqZWN0IGZvciBzZXR0aW5nIHRoZSBwcm9kdWN0IGNhcmQgaW5mb3JtYXRpb24uXG4gICAgICovXG4gICAgdXBkYXRlUHJvZHVjdEl0ZW1EYXRhKGRhdGE6IFByb2R1Y3RJdGVtRGF0YSk6IHZvaWQge1xuICAgICAgICB0aGlzLmltYWdlVXJsID0gZGF0YS5pbWFnZVVybDtcbiAgICAgICAgdGhpcy5pbWFnZUFsdCA9IGRhdGEubmFtZTtcbiAgICAgICAgdGhpcy5sYWJlbHMgPSBkYXRhLmxhYmVscztcbiAgICAgICAgdGhpcy5wcm9kdWN0SXRlbU5hbWUgPSBkYXRhLm5hbWU7XG4gICAgICAgIHRoaXMucmF0aW5nVmFsdWUgPSBkYXRhLnJhdGluZ1ZhbHVlO1xuICAgICAgICB0aGlzLmRlZmF1bHRQcmljZSA9IGRhdGEuZGVmYXVsdFByaWNlO1xuICAgICAgICB0aGlzLnNrdSA9IGRhdGEuc2t1O1xuICAgICAgICB0aGlzLm9yaWdpbmFsUHJpY2UgPSBkYXRhLm9yaWdpbmFsUHJpY2U7XG4gICAgICAgIHRoaXMuZGV0YWlsUGFnZVVybCA9IGRhdGEuZGV0YWlsUGFnZVVybDtcbiAgICAgICAgdGhpcy5hZGRUb0NhcnRVcmwgPSBkYXRhLmFkZFRvQ2FydFVybDtcbiAgICAgICAgdGhpcy5hamF4QWRkVG9DYXJ0VXJsID0gZGF0YS5hamF4QWRkVG9DYXJ0VXJsID8/IG51bGw7XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA9IGRhdGEuYWRkVG9DYXJ0Rm9ybUFjdGlvbiA/PyBudWxsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRTa3VGcm9tVXJsKHVybDogVXJsKTogVXJsIHtcbiAgICAgICAgaWYgKCF1cmwpIHtcbiAgICAgICAgICAgIHJldHVybiBudWxsO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgbGFzdFBhcnRPZlVybCA9IG5ldyBSZWdFeHAoYChbXlxcXFwvXSkrJGAsICdnJyk7XG4gICAgICAgIGNvbnN0IHNrdSA9IHVybC5tYXRjaChsYXN0UGFydE9mVXJsKTtcblxuICAgICAgICByZXR1cm4gc2t1WzBdO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICogQHBhcmFtIGltYWdlVXJsIEEgcHJvZHVjdCBjYXJkIGltYWdlIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgaW1hZ2VVcmwoaW1hZ2VVcmw6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0SW1hZ2UpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEltYWdlLnNyYyA9IGltYWdlVXJsO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGltYWdlIGFsdC5cbiAgICAgKiBAcGFyYW0gaW1hZ2VBbHQgQSBwcm9kdWN0IGNhcmQgaW1hZ2UgYWx0LlxuICAgICAqL1xuICAgIHNldCBpbWFnZUFsdChpbWFnZUFsdDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0SW1hZ2UuYWx0ID0gaW1hZ2VBbHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgbGFiZWxzLlxuICAgICAqIEBwYXJhbSBsYWJlbHMgQW4gYXJyYXkgb2YgcHJvZHVjdCBjYXJkIGxhYmVscy5cbiAgICAgKi9cbiAgICBzZXQgbGFiZWxzKGxhYmVsczogUHJvZHVjdEl0ZW1MYWJlbHNEYXRhW10pIHtcbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9MQUJFTFMsIHsgbGFiZWxzIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqIEBwYXJhbSBuYW1lIEEgcHJvZHVjdCBjYXJkIG5hbWUuXG4gICAgICovXG4gICAgc2V0IHByb2R1Y3RJdGVtTmFtZShuYW1lOiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdE5hbWUuaW5uZXJUZXh0ID0gbmFtZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICogQHBhcmFtIHJhdGluZyBBIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgc2V0IHJhdGluZ1ZhbHVlKHJhdGluZzogbnVtYmVyKSB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfUkFUSU5HLCB7IHJhdGluZyB9KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGVmYXVsdCBwcmljZS5cbiAgICAgKiBAcGFyYW0gZGVmYXVsdFByaWNlIEEgcHJvZHVjdCBjYXJkIGRlZmF1bHQgcHJpY2UuXG4gICAgICovXG4gICAgc2V0IGRlZmF1bHRQcmljZShkZWZhdWx0UHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0RGVmYXVsdFByaWNlKSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3REZWZhdWx0UHJpY2UuaW5uZXJUZXh0ID0gZGVmYXVsdFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIHNrdS5cbiAgICAgKiBAcGFyYW0gcHJvZHVjdFNrdSBBIHByb2R1Y3QgY2FyZCBza3UuXG4gICAgICovXG4gICAgc2V0IHNrdShwcm9kdWN0U2t1OiBzdHJpbmcpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0U2t1LmNvbnRlbnQgPSBwcm9kdWN0U2t1O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqIEBwYXJhbSBvcmlnaW5hbFByaWNlIEEgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIHNldCBvcmlnaW5hbFByaWNlKG9yaWdpbmFsUHJpY2U6IHN0cmluZykge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQgPSBvcmlnaW5hbFByaWNlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkIGRldGFpbCBwYWdlIFVSTC5cbiAgICAgKiBAcGFyYW0gZGV0YWlsUGFnZVVybCBBIHByb2R1Y3QgY2FyZCBkZXRhaWwgcGFnZSBVUkwuXG4gICAgICovXG4gICAgc2V0IGRldGFpbFBhZ2VVcmwoZGV0YWlsUGFnZVVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgdGhpcy5wcm9kdWN0TGlua0RldGFpbFBhZ2UuZm9yRWFjaCgoZWxlbWVudDogSFRNTEFuY2hvckVsZW1lbnQpID0+IChlbGVtZW50LmhyZWYgPSBkZXRhaWxQYWdlVXJsKSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydFVybCBBIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIFVSTC5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0VXJsKGFkZFRvQ2FydFVybDogc3RyaW5nKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RMaW5rQWRkVG9DYXJ0LmhyZWYgPSBhZGRUb0NhcnRVcmw7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0FERF9UT19DQVJUX1VSTCwgeyBza3U6IHRoaXMuZ2V0U2t1RnJvbVVybChhZGRUb0NhcnRVcmwpIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqIEBwYXJhbSBhamF4QWRkVG9DYXJ0VXJsIEEgcHJvZHVjdCBjYXJkIEFKQVggJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgc2V0IGFqYXhBZGRUb0NhcnRVcmwoYWpheEFkZFRvQ2FydFVybDogVXJsKSB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRpc2FibGVkID0gIWFqYXhBZGRUb0NhcnRVcmw7XG4gICAgICAgICAgICB0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQudXJsID0gYWpheEFkZFRvQ2FydFVybDtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9VUERBVEVfQUpBWF9BRERfVE9fQ0FSVF9VUkwsIHsgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWpheEFkZFRvQ2FydFVybCkgfSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgcHJvZHVjdCBjYXJkICdhZGQgdG8gY2FydCcgZm9ybSBhY3Rpb24uXG4gICAgICogQHBhcmFtIGFkZFRvQ2FydEZvcm1BY3Rpb24gQSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBmb3JtIGFjdGlvbi5cbiAgICAgKi9cbiAgICBzZXQgYWRkVG9DYXJ0Rm9ybUFjdGlvbihhZGRUb0NhcnRGb3JtQWN0aW9uOiBVcmwpIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEZvcm1BZGRUb0NhcnQuYWN0aW9uID0gYWRkVG9DYXJ0Rm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RCdXR0b25BZGRUb0NhcnQpIHtcbiAgICAgICAgICAgIHRoaXMucHJvZHVjdEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LmZvcm1BY3Rpb24gPSBhZGRUb0NhcnRGb3JtQWN0aW9uO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEN1c3RvbUV2ZW50KEVWRU5UX1VQREFURV9BRERfVE9fQ0FSVF9GT1JNX0FDVElPTiwge1xuICAgICAgICAgICAgc2t1OiB0aGlzLmdldFNrdUZyb21VcmwoYWRkVG9DYXJ0Rm9ybUFjdGlvbiksXG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBpbWFnZSBVUkwuXG4gICAgICovXG4gICAgZ2V0IGltYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RJbWFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdEltYWdlLnNyYztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBuYW1lLlxuICAgICAqL1xuICAgIGdldCBwcm9kdWN0SXRlbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdE5hbWUpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnByb2R1Y3ROYW1lLmlubmVyVGV4dDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCByYXRpbmcuXG4gICAgICovXG4gICAgZ2V0IHJhdGluZ1ZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RSYXRpbmcpIHtcbiAgICAgICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5wcm9kdWN0UmF0aW5nLnZhbHVlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBkZWZhdWx0IHByaWNlLlxuICAgICAqL1xuICAgIGdldCBkZWZhdWx0UHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdERlZmF1bHRQcmljZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdERlZmF1bHRQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgc2t1LlxuICAgICAqL1xuICAgIGdldCBza3UoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHRoaXMucHJvZHVjdFNrdSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFNrdS5jb250ZW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgcHJvZHVjdCBjYXJkIG9yaWdpbmFsIHByaWNlLlxuICAgICAqL1xuICAgIGdldCBvcmlnaW5hbFByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RPcmlnaW5hbFByaWNlKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0T3JpZ2luYWxQcmljZS5pbm5lclRleHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgZGV0YWlsIHBhZ2UgVVJMLlxuICAgICAqL1xuICAgIGdldCBkZXRhaWxQYWdlVXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RMaW5rRGV0YWlsUGFnZSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtEZXRhaWxQYWdlWzBdLmhyZWY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBwcm9kdWN0IGNhcmQgJ2FkZCB0byBjYXJ0JyBVUkwuXG4gICAgICovXG4gICAgZ2V0IGFkZFRvQ2FydFVybCgpOiBzdHJpbmcge1xuICAgICAgICBpZiAodGhpcy5wcm9kdWN0TGlua0FkZFRvQ2FydCkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdExpbmtBZGRUb0NhcnQuaHJlZjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCBBSkFYICdhZGQgdG8gY2FydCcgVVJMLlxuICAgICAqL1xuICAgIGdldCBhamF4QWRkVG9DYXJ0VXJsKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RBamF4QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QWpheEJ1dHRvbkFkZFRvQ2FydC5kYXRhc2V0LnVybDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHByb2R1Y3QgY2FyZCAnYWRkIHRvIGNhcnQnIGZvcm0gYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBhZGRUb0NhcnRGb3JtQWN0aW9uKCk6IHN0cmluZyB7XG4gICAgICAgIGlmICh0aGlzLnByb2R1Y3RGb3JtQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0Rm9ybUFkZFRvQ2FydC5hY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0KSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5wcm9kdWN0QnV0dG9uQWRkVG9DYXJ0LmRhdGFzZXQuZm9ybUFjdGlvbjtcbiAgICAgICAgfVxuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=