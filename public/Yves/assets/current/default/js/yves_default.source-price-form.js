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
/* harmony import */ var QuoteRequestAgentPage_components_molecules_source_price_form_source_price_form__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! QuoteRequestAgentPage/components/molecules/source-price-form/source-price-form */ "./vendor/spryker-shop/quote-request-agent-page/src/SprykerShop/Yves/QuoteRequestAgentPage/Theme/default/components/molecules/source-price-form/source-price-form.ts");

class SourcePriceForm extends QuoteRequestAgentPage_components_molecules_source_price_form_source_price_form__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.price = void 0;
    this.originPrice = void 0;
    this.hiddenClass = 'is-hidden';
  }

  readyCallback() {
    this.price = this.getElementsByClassName(this.jsName + "__price")[0];
    this.originPrice = this.getElementsByClassName(this.jsName + "__origin-price")[0];
    super.readyCallback();
  }

  togglePriceVisibility() {
    this.price.classList.toggle(this.hiddenClass);
    this.originPrice.classList.toggle(this.hiddenClass);
  }

  onInputType(event) {
    super.onInputType(event);

    if (this.checkboxChecked) {
      this.togglePriceVisibility();
    }
  }

  onCheckboxChange(event) {
    super.onCheckboxChange(event);
    this.togglePriceVisibility();
  }

}

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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class SourcePriceForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.input = void 0;
    this.inputContainer = void 0;
    this.checkbox = void 0;
  }

  readyCallback() {
    this.input = this.querySelector("." + this.jsName + "__input-container .input");
    this.inputContainer = this.getElementsByClassName(this.jsName + "__input-container")[0];
    this.checkbox = this.getElementsByClassName(this.jsName + "__checkbox-container")[0];
    this.setSourcePrice();
    this.mapEvents();
  }

  mapEvents() {
    this.input.addEventListener('input', event => this.onInputType(event));
    this.checkbox.addEventListener('change', event => this.onCheckboxChange(event));
  }

  setSourcePrice() {
    if (!this.sourcePrice.length) {
      return;
    }

    this.inputValue = String(this.sourcePrice);
    this.inputContainer.classList.remove('is-hidden');
  }

  onInputType(event) {
    this.checkboxChecked = this.inputValueLength === 0;

    if (this.checkboxChecked) {
      this.inputContainer.classList.add('is-hidden');
    }
  }

  onCheckboxChange(event) {
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


  get inputValueLength() {
    return this.input.value.length;
  }
  /**
   * Gets the source price value of the product.
   */


  get sourcePrice() {
    return this.getAttribute('price');
  }
  /**
   * Gets if the checkbox is checked.
   */


  get checkboxChecked() {
    return this.checkbox.checked;
  }
  /**
   * Sets an input value.
   * @param value A typed text in the input field.
   */


  set inputValue(value) {
    this.input.value = value;
  }
  /**
   * Sets an checkbox checked attribute.
   * @param value A boolean value of the checkecd attribute.
   */


  set checkboxChecked(value) {
    this.checkbox.checked = value;
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvUXVvdGVSZXF1ZXN0QWdlbnRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc291cmNlLXByaWNlLWZvcm0vc291cmNlLXByaWNlLWZvcm0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9xdW90ZS1yZXF1ZXN0LWFnZW50LXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUXVvdGVSZXF1ZXN0QWdlbnRQYWdlL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc291cmNlLXByaWNlLWZvcm0vc291cmNlLXByaWNlLWZvcm0udHMiXSwibmFtZXMiOlsiU291cmNlUHJpY2VGb3JtIiwiU291cmNlUHJpY2VGb3JtUGFyZW50Q2xhc3MiLCJwcmljZSIsIm9yaWdpblByaWNlIiwiaGlkZGVuQ2xhc3MiLCJyZWFkeUNhbGxiYWNrIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInRvZ2dsZVByaWNlVmlzaWJpbGl0eSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsIm9uSW5wdXRUeXBlIiwiZXZlbnQiLCJjaGVja2JveENoZWNrZWQiLCJvbkNoZWNrYm94Q2hhbmdlIiwiQ29tcG9uZW50IiwiaW5wdXQiLCJpbnB1dENvbnRhaW5lciIsImNoZWNrYm94IiwicXVlcnlTZWxlY3RvciIsInNldFNvdXJjZVByaWNlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNvdXJjZVByaWNlIiwibGVuZ3RoIiwiaW5wdXRWYWx1ZSIsIlN0cmluZyIsInJlbW92ZSIsImlucHV0VmFsdWVMZW5ndGgiLCJhZGQiLCJmb2N1cyIsInZhbHVlIiwiZ2V0QXR0cmlidXRlIiwiY2hlY2tlZCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsZUFBTixTQUE4QkMsc0hBQTlCLENBQXlEO0FBQUE7QUFBQTtBQUFBLFNB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QUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDd0IsTUFBaEJGLGdCQUFnQixHQUFXO0FBQzNCLFdBQU8sS0FBS1osS0FBTCxDQUFXZSxLQUFYLENBQWlCUCxNQUF4QjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDbUIsTUFBWEQsV0FBVyxHQUFXO0FBQ3RCLFdBQU8sS0FBS1MsWUFBTCxDQUFrQixPQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUN1QixNQUFmbkIsZUFBZSxHQUFZO0FBQzNCLFdBQU8sS0FBS0ssUUFBTCxDQUFjZSxPQUFyQjtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUNrQixNQUFWUixVQUFVLENBQUNNLEtBQUQsRUFBZ0I7QUFDMUIsU0FBS2YsS0FBTCxDQUFXZSxLQUFYLEdBQW1CQSxLQUFuQjtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUN1QixNQUFmbEIsZUFBZSxDQUFDa0IsS0FBRCxFQUFpQjtBQUNoQyxTQUFLYixRQUFMLENBQWNlLE9BQWQsR0FBd0JGLEtBQXhCO0FBQ0g7O0FBbEZrRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNvdXJjZS1wcmljZS1mb3JtLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFNvdXJjZVByaWNlRm9ybVBhcmVudENsYXNzIGZyb20gJ1F1b3RlUmVxdWVzdEFnZW50UGFnZS9jb21wb25lbnRzL21vbGVjdWxlcy9zb3VyY2UtcHJpY2UtZm9ybS9zb3VyY2UtcHJpY2UtZm9ybSc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFNvdXJjZVByaWNlRm9ybSBleHRlbmRzIFNvdXJjZVByaWNlRm9ybVBhcmVudENsYXNzIHtcbiAgICBwcm90ZWN0ZWQgcHJpY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBvcmlnaW5QcmljZTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHJlYWRvbmx5IGhpZGRlbkNsYXNzOiBzdHJpbmcgPSAnaXMtaGlkZGVuJztcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByaWNlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3ByaWNlYClbMF07XG4gICAgICAgIHRoaXMub3JpZ2luUHJpY2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fb3JpZ2luLXByaWNlYClbMF07XG4gICAgICAgIHN1cGVyLnJlYWR5Q2FsbGJhY2soKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdG9nZ2xlUHJpY2VWaXNpYmlsaXR5KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnByaWNlLmNsYXNzTGlzdC50b2dnbGUodGhpcy5oaWRkZW5DbGFzcyk7XG4gICAgICAgIHRoaXMub3JpZ2luUHJpY2UuY2xhc3NMaXN0LnRvZ2dsZSh0aGlzLmhpZGRlbkNsYXNzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25JbnB1dFR5cGUoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHN1cGVyLm9uSW5wdXRUeXBlKGV2ZW50KTtcblxuICAgICAgICBpZiAodGhpcy5jaGVja2JveENoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMudG9nZ2xlUHJpY2VWaXNpYmlsaXR5KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DaGVja2JveENoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgc3VwZXIub25DaGVja2JveENoYW5nZShldmVudCk7XG4gICAgICAgIHRoaXMudG9nZ2xlUHJpY2VWaXNpYmlsaXR5KCk7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFNvdXJjZVByaWNlRm9ybSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGlucHV0OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBpbnB1dENvbnRhaW5lcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGNoZWNrYm94OiBIVE1MSW5wdXRFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuaW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoYC4ke3RoaXMuanNOYW1lfV9faW5wdXQtY29udGFpbmVyIC5pbnB1dGApO1xuICAgICAgICB0aGlzLmlucHV0Q29udGFpbmVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2lucHV0LWNvbnRhaW5lcmApWzBdO1xuICAgICAgICB0aGlzLmNoZWNrYm94ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fY2hlY2tib3gtY29udGFpbmVyYClbMF07XG4gICAgICAgIHRoaXMuc2V0U291cmNlUHJpY2UoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2lucHV0JywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbklucHV0VHlwZShldmVudCkpO1xuICAgICAgICB0aGlzLmNoZWNrYm94LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIChldmVudDogRXZlbnQpID0+IHRoaXMub25DaGVja2JveENoYW5nZShldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRTb3VyY2VQcmljZSgpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnNvdXJjZVByaWNlLmxlbmd0aCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5pbnB1dFZhbHVlID0gU3RyaW5nKHRoaXMuc291cmNlUHJpY2UpO1xuICAgICAgICB0aGlzLmlucHV0Q29udGFpbmVyLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbklucHV0VHlwZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jaGVja2JveENoZWNrZWQgPSB0aGlzLmlucHV0VmFsdWVMZW5ndGggPT09IDA7XG4gICAgICAgIGlmICh0aGlzLmNoZWNrYm94Q2hlY2tlZCkge1xuICAgICAgICAgICAgdGhpcy5pbnB1dENvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNoZWNrYm94Q2hhbmdlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5jaGVja2JveENoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMuaW5wdXRWYWx1ZSA9ICcnO1xuICAgICAgICAgICAgdGhpcy5pbnB1dENvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5zZXRTb3VyY2VQcmljZSgpO1xuICAgICAgICB0aGlzLmlucHV0Q29udGFpbmVyLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWhpZGRlbicpO1xuICAgICAgICB0aGlzLmlucHV0LmZvY3VzKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhbiBpbnB1dCB2YWx1ZSBsZW5ndGguXG4gICAgICovXG4gICAgZ2V0IGlucHV0VmFsdWVMZW5ndGgoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaW5wdXQudmFsdWUubGVuZ3RoO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHNvdXJjZSBwcmljZSB2YWx1ZSBvZiB0aGUgcHJvZHVjdC5cbiAgICAgKi9cbiAgICBnZXQgc291cmNlUHJpY2UoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdwcmljZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGNoZWNrYm94IGlzIGNoZWNrZWQuXG4gICAgICovXG4gICAgZ2V0IGNoZWNrYm94Q2hlY2tlZCgpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuY2hlY2tib3guY2hlY2tlZDtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZXRzIGFuIGlucHV0IHZhbHVlLlxuICAgICAqIEBwYXJhbSB2YWx1ZSBBIHR5cGVkIHRleHQgaW4gdGhlIGlucHV0IGZpZWxkLlxuICAgICAqL1xuICAgIHNldCBpbnB1dFZhbHVlKHZhbHVlOiBzdHJpbmcpIHtcbiAgICAgICAgdGhpcy5pbnB1dC52YWx1ZSA9IHZhbHVlO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgYW4gY2hlY2tib3ggY2hlY2tlZCBhdHRyaWJ1dGUuXG4gICAgICogQHBhcmFtIHZhbHVlIEEgYm9vbGVhbiB2YWx1ZSBvZiB0aGUgY2hlY2tlY2QgYXR0cmlidXRlLlxuICAgICAqL1xuICAgIHNldCBjaGVja2JveENoZWNrZWQodmFsdWU6IGJvb2xlYW4pIHtcbiAgICAgICAgdGhpcy5jaGVja2JveC5jaGVja2VkID0gdmFsdWU7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==