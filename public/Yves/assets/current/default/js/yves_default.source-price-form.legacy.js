(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["source-price-form"],{

/***/ "./src/Pyz/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts":
/*!**********************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts ***!
  \**********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SourcePriceForm; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var QuoteRequestAgentPage_components_molecules_source_price_form_source_price_form__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! QuoteRequestAgentPage/components/molecules/source-price-form/source-price-form */ "./vendor/spryker-shop/quote-request-agent-page/src/SprykerShop/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts");



var SourcePriceForm = /*#__PURE__*/function (_SourcePriceFormParen) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(SourcePriceForm, _SourcePriceFormParen);

  function SourcePriceForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _SourcePriceFormParen.call.apply(_SourcePriceFormParen, [this].concat(args)) || this;
    _this.price = void 0;
    _this.originPrice = void 0;
    _this.hiddenClass = 'is-hidden';
    return _this;
  }

  var _proto = SourcePriceForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.price = this.getElementsByClassName(this.jsName + "__price")[0];
    this.originPrice = this.getElementsByClassName(this.jsName + "__origin-price")[0];

    _SourcePriceFormParen.prototype.readyCallback.call(this);
  };

  _proto.togglePriceVisibility = function togglePriceVisibility() {
    this.price.classList.toggle(this.hiddenClass);
    this.originPrice.classList.toggle(this.hiddenClass);
  };

  _proto.onInputType = function onInputType(event) {
    _SourcePriceFormParen.prototype.onInputType.call(this, event);

    if (this.checkboxChecked) {
      this.togglePriceVisibility();
    }
  };

  _proto.onCheckboxChange = function onCheckboxChange(event) {
    _SourcePriceFormParen.prototype.onCheckboxChange.call(this, event);

    this.togglePriceVisibility();
  };

  return SourcePriceForm;
}(QuoteRequestAgentPage_components_molecules_source_price_form_source_price_form__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/quote-request-agent-page/src/SprykerShop/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/quote-request-agent-page/src/SprykerShop/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SourcePriceForm; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var SourcePriceForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(SourcePriceForm, _Component);

  function SourcePriceForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.input = void 0;
    _this.inputContainer = void 0;
    _this.checkbox = void 0;
    return _this;
  }

  var _proto = SourcePriceForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.input = this.querySelector("." + this.jsName + "__input-container .input");
    this.inputContainer = this.getElementsByClassName(this.jsName + "__input-container")[0];
    this.checkbox = this.getElementsByClassName(this.jsName + "__checkbox-container")[0];
    this.setSourcePrice();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.input.addEventListener('input', function (event) {
      return _this2.onInputType(event);
    });
    this.checkbox.addEventListener('change', function (event) {
      return _this2.onCheckboxChange(event);
    });
  };

  _proto.setSourcePrice = function setSourcePrice() {
    if (!this.sourcePrice.length) {
      return;
    }

    this.inputValue = String(this.sourcePrice);
    this.inputContainer.classList.remove('is-hidden');
  };

  _proto.onInputType = function onInputType(event) {
    this.checkboxChecked = this.inputValueLength === 0;

    if (this.checkboxChecked) {
      this.inputContainer.classList.add('is-hidden');
    }
  };

  _proto.onCheckboxChange = function onCheckboxChange(event) {
    if (this.checkboxChecked) {
      this.inputValue = '';
      this.inputContainer.classList.add('is-hidden');
      return;
    }

    this.setSourcePrice();
    this.inputContainer.classList.remove('is-hidden');
    this.input.focus();
  }
  /**
   * Gets an input value length.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(SourcePriceForm, [{
    key: "inputValueLength",
    get: function get() {
      return this.input.value.length;
    }
    /**
     * Gets the source price value of the product.
     */

  }, {
    key: "sourcePrice",
    get: function get() {
      return this.getAttribute('price');
    }
    /**
     * Gets if the checkbox is checked.
     */

  }, {
    key: "checkboxChecked",
    get: function get() {
      return this.checkbox.checked;
    }
    /**
     * Sets an input value.
     * @param value A typed text in the input field.
     */
    ,
    set:
    /**
     * Sets an checkbox checked attribute.
     * @param value A boolean value of the checkecd attribute.
     */
    function set(value) {
      this.checkbox.checked = value;
    }
  }, {
    key: "inputValue",
    set: function set(value) {
      this.input.value = value;
    }
  }]);

  return SourcePriceForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUXVvdGVSZXF1ZXN0QWdlbnRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc291cmNlLXByaWNlLWZvcm0vc291cmNlLXByaWNlLWZvcm0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9xdW90ZS1yZXF1ZXN0LWFnZW50LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUXVvdGVSZXF1ZXN0QWdlbnRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc291cmNlLXByaWNlLWZvcm0vc291cmNlLXByaWNlLWZvcm0udHMiXSwibmFtZXMiOlsiU291cmNlUHJpY2VGb3JtIiwicHJpY2UiLCJvcmlnaW5QcmljZSIsImhpZGRlbkNsYXNzIiwicmVhZHlDYWxsYmFjayIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJ0b2dnbGVQcmljZVZpc2liaWxpdHkiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJvbklucHV0VHlwZSIsImV2ZW50IiwiY2hlY2tib3hDaGVja2VkIiwib25DaGVja2JveENoYW5nZSIsIlNvdXJjZVByaWNlRm9ybVBhcmVudENsYXNzIiwiaW5wdXQiLCJpbnB1dENvbnRhaW5lciIsImNoZWNrYm94IiwicXVlcnlTZWxlY3RvciIsInNldFNvdXJjZVByaWNlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNvdXJjZVByaWNlIiwibGVuZ3RoIiwiaW5wdXRWYWx1ZSIsIlN0cmluZyIsInJlbW92ZSIsImlucHV0VmFsdWVMZW5ndGgiLCJhZGQiLCJmb2N1cyIsInZhbHVlIiwiZ2V0QXR0cmlidXRlIiwiY2hlY2tlZCIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsZTs7Ozs7Ozs7Ozs7VUFDUEMsSztVQUNBQyxXO1VBQ1NDLFcsR0FBc0IsVzs7Ozs7O1NBRS9C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QUFDQTs7Ozs7U0FDSSxlQUErQjtBQUMzQixhQUFPLEtBQUtkLEtBQUwsQ0FBV2UsS0FBWCxDQUFpQlAsTUFBeEI7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQTBCO0FBQ3RCLGFBQU8sS0FBS1EsWUFBTCxDQUFrQixPQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7Ozs7U0FDSSxlQUErQjtBQUMzQixhQUFPLEtBQUtkLFFBQUwsQ0FBY2UsT0FBckI7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7QUFLSTtBQUNKO0FBQ0E7QUFDQTtBQUNJLGlCQUFvQkYsS0FBcEIsRUFBb0M7QUFDaEMsV0FBS2IsUUFBTCxDQUFjZSxPQUFkLEdBQXdCRixLQUF4QjtBQUNIOzs7U0FWRCxhQUFlQSxLQUFmLEVBQThCO0FBQzFCLFdBQUtmLEtBQUwsQ0FBV2UsS0FBWCxHQUFtQkEsS0FBbkI7QUFDSDs7OztFQTFFd0NHLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNvdXJjZS1wcmljZS1mb3JtLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBTb3VyY2VQcmljZUZvcm1QYXJlbnRDbGFzcyBmcm9tICdRdW90ZVJlcXVlc3RBZ2VudFBhZ2UvY29tcG9uZW50cy9tb2xlY3VsZXMvc291cmNlLXByaWNlLWZvcm0vc291cmNlLXByaWNlLWZvcm0nO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTb3VyY2VQcmljZUZvcm0gZXh0ZW5kcyBTb3VyY2VQcmljZUZvcm1QYXJlbnRDbGFzcyB7XG4gICAgcHJvdGVjdGVkIHByaWNlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgb3JpZ2luUHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCByZWFkb25seSBoaWRkZW5DbGFzczogc3RyaW5nID0gJ2lzLWhpZGRlbic7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcmljZSA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcmljZWApWzBdO1xuICAgICAgICB0aGlzLm9yaWdpblByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX29yaWdpbi1wcmljZWApWzBdO1xuICAgICAgICBzdXBlci5yZWFkeUNhbGxiYWNrKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRvZ2dsZVByaWNlVmlzaWJpbGl0eSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcmljZS5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuaGlkZGVuQ2xhc3MpO1xuICAgICAgICB0aGlzLm9yaWdpblByaWNlLmNsYXNzTGlzdC50b2dnbGUodGhpcy5oaWRkZW5DbGFzcyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSW5wdXRUeXBlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBzdXBlci5vbklucHV0VHlwZShldmVudCk7XG5cbiAgICAgICAgaWYgKHRoaXMuY2hlY2tib3hDaGVja2VkKSB7XG4gICAgICAgICAgICB0aGlzLnRvZ2dsZVByaWNlVmlzaWJpbGl0eSgpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2hlY2tib3hDaGFuZ2UoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm9uQ2hlY2tib3hDaGFuZ2UoZXZlbnQpO1xuICAgICAgICB0aGlzLnRvZ2dsZVByaWNlVmlzaWJpbGl0eSgpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTb3VyY2VQcmljZUZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBpbnB1dDogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgaW5wdXRDb250YWluZXI6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBjaGVja2JveDogSFRNTElucHV0RWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5xdWVyeVNlbGVjdG9yKGAuJHt0aGlzLmpzTmFtZX1fX2lucHV0LWNvbnRhaW5lciAuaW5wdXRgKTtcbiAgICAgICAgdGhpcy5pbnB1dENvbnRhaW5lciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dC1jb250YWluZXJgKVswXTtcbiAgICAgICAgdGhpcy5jaGVja2JveCA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2NoZWNrYm94LWNvbnRhaW5lcmApWzBdO1xuICAgICAgICB0aGlzLnNldFNvdXJjZVByaWNlKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIChldmVudDogRXZlbnQpID0+IHRoaXMub25JbnB1dFR5cGUoZXZlbnQpKTtcbiAgICAgICAgdGhpcy5jaGVja2JveC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uQ2hlY2tib3hDaGFuZ2UoZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0U291cmNlUHJpY2UoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5zb3VyY2VQcmljZS5sZW5ndGgpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9IFN0cmluZyh0aGlzLnNvdXJjZVByaWNlKTtcbiAgICAgICAgdGhpcy5pbnB1dENvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25JbnB1dFR5cGUoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2hlY2tib3hDaGVja2VkID0gdGhpcy5pbnB1dFZhbHVlTGVuZ3RoID09PSAwO1xuICAgICAgICBpZiAodGhpcy5jaGVja2JveENoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMuaW5wdXRDb250YWluZXIuY2xhc3NMaXN0LmFkZCgnaXMtaGlkZGVuJyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DaGVja2JveENoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuY2hlY2tib3hDaGVja2VkKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0VmFsdWUgPSAnJztcbiAgICAgICAgICAgIHRoaXMuaW5wdXRDb250YWluZXIuY2xhc3NMaXN0LmFkZCgnaXMtaGlkZGVuJyk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuc2V0U291cmNlUHJpY2UoKTtcbiAgICAgICAgdGhpcy5pbnB1dENvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICAgICAgdGhpcy5pbnB1dC5mb2N1cygpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYW4gaW5wdXQgdmFsdWUgbGVuZ3RoLlxuICAgICAqL1xuICAgIGdldCBpbnB1dFZhbHVlTGVuZ3RoKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiB0aGlzLmlucHV0LnZhbHVlLmxlbmd0aDtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBzb3VyY2UgcHJpY2UgdmFsdWUgb2YgdGhlIHByb2R1Y3QuXG4gICAgICovXG4gICAgZ2V0IHNvdXJjZVByaWNlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgncHJpY2UnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGlmIHRoZSBjaGVja2JveCBpcyBjaGVja2VkLlxuICAgICAqL1xuICAgIGdldCBjaGVja2JveENoZWNrZWQoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmNoZWNrYm94LmNoZWNrZWQ7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyBhbiBpbnB1dCB2YWx1ZS5cbiAgICAgKiBAcGFyYW0gdmFsdWUgQSB0eXBlZCB0ZXh0IGluIHRoZSBpbnB1dCBmaWVsZC5cbiAgICAgKi9cbiAgICBzZXQgaW5wdXRWYWx1ZSh2YWx1ZTogc3RyaW5nKSB7XG4gICAgICAgIHRoaXMuaW5wdXQudmFsdWUgPSB2YWx1ZTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIGFuIGNoZWNrYm94IGNoZWNrZWQgYXR0cmlidXRlLlxuICAgICAqIEBwYXJhbSB2YWx1ZSBBIGJvb2xlYW4gdmFsdWUgb2YgdGhlIGNoZWNrZWNkIGF0dHJpYnV0ZS5cbiAgICAgKi9cbiAgICBzZXQgY2hlY2tib3hDaGVja2VkKHZhbHVlOiBib29sZWFuKSB7XG4gICAgICAgIHRoaXMuY2hlY2tib3guY2hlY2tlZCA9IHZhbHVlO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=