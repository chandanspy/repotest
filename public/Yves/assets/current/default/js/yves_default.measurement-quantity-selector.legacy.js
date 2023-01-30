(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["measurement-quantity-selector"],{

/***/ "./vendor/spryker-shop/product-measurement-unit-widget/src/SprykerShop/Yves/ProductMeasurementUnitWidget/Theme/default/components/molecules/measurement-quantity-selector/measurement-quantity-selector.ts":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-measurement-unit-widget/src/SprykerShop/Yves/ProductMeasurementUnitWidget/Theme/default/components/molecules/measurement-quantity-selector/measurement-quantity-selector.ts ***!
  \*****************************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return MeasurementQuantitySelector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



/* tslint:disable: max-file-line-count */

/*
 * @tag example This code provides example of using the Product Measurement Unit.
 */


var MeasurementQuantitySelector = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(MeasurementQuantitySelector, _Component);

  function MeasurementQuantitySelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.qtyInSalesUnitInput = void 0;
    _this.qtyInBaseUnitInput = void 0;
    _this.measurementUnitInput = void 0;
    _this.addToCartButton = void 0;
    _this.quantityBetweenUnits = void 0;
    _this.minimumQuantity = void 0;
    _this.maximumQuantity = void 0;
    _this.measurementUnitChoice = void 0;
    _this.baseUnit = void 0;
    _this.salesUnits = void 0;
    _this.currentSalesUnit = void 0;
    _this.productQuantityStorage = void 0;
    _this.currentValue = void 0;
    _this.translations = void 0;
    _this.decimals = 4;
    _this.factor = 10;
    _this.degree = [2, 3];
    return _this;
  }

  var _proto = MeasurementQuantitySelector.prototype;

  /* tslint:enable: no-magic-numbers */
  _proto.readyCallback = function readyCallback(event) {};

  _proto.init = function init() {
    this.qtyInSalesUnitInput = this.getElementsByClassName(this.jsName + "__sales-unit-quantity")[0];

    if (!this.qtyInSalesUnitInput) {
      return;
    }

    this.qtyInBaseUnitInput = this.getElementsByClassName(this.jsName + "__base-unit-quantity")[0];
    this.measurementUnitInput = this.getElementsByClassName(this.jsName + "__select-measurement-unit")[0];
    this.addToCartButton = this.getElementsByClassName(this.jsName + "__add-to-cart-button")[0];
    this.quantityBetweenUnits = this.getElementsByClassName(this.jsName + "__quantity-between-units")[0];
    this.minimumQuantity = this.getElementsByClassName(this.jsName + "__minimum-quantity")[0];
    this.maximumQuantity = this.getElementsByClassName(this.jsName + "__maximum-quantity")[0];
    this.measurementUnitChoice = this.getElementsByClassName(this.jsName + "__measurement-unit-choice")[0];
    this.initJson();
    this.initTranslations();
    this.initCurrentSalesUnit();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.qtyInSalesUnitInput.addEventListener('change', function () {
      return _this2.qtyInputChange();
    });
    this.measurementUnitInput.addEventListener('change', function (event) {
      return _this2.measurementUnitInputChange(event);
    });
  };

  _proto.initJson = function initJson() {
    var measurementUnitData = JSON.parse(this.measurementJSONString);
    this.baseUnit = measurementUnitData.baseUnit;
    this.salesUnits = measurementUnitData.salesUnits;
    this.productQuantityStorage = measurementUnitData.productQuantityStorage;
  };

  _proto.initTranslations = function initTranslations() {
    this.translations = JSON.parse(this.getElementsByClassName(this.jsName + "__measurement-unit-translation")[0].innerHTML);
  };

  _proto.initCurrentSalesUnit = function initCurrentSalesUnit() {
    var _this3 = this;

    this.salesUnits.forEach(function (salesUnit) {
      if (salesUnit.is_default) {
        _this3.currentSalesUnit = salesUnit;
      }
    });
  };

  _proto.qtyInputChange = function qtyInputChange(qtyInSalesUnits) {
    if (typeof qtyInSalesUnits === 'undefined') {
      qtyInSalesUnits = +this.qtyInSalesUnitInput.value;
    }

    var error = false;
    var qtyInBaseUnits = this.multiply(qtyInSalesUnits, +this.currentSalesUnit.conversion);

    if ((qtyInBaseUnits - this.getMinQuantity()) % this.getQuantityInterval() !== 0) {
      error = true;
      this.hideNotifications();
      this.quantityBetweenUnits.classList.remove('is-hidden');
    } else if (qtyInBaseUnits < this.getMinQuantity()) {
      error = true;
      this.hideNotifications();
      this.minimumQuantity.classList.remove('is-hidden');
    } else if (this.getMaxQuantity() > 0 && qtyInBaseUnits > this.getMaxQuantity()) {
      error = true;
      this.hideNotifications();
      this.maximumQuantity.classList.remove('is-hidden');
    }

    if (error && !isFinite(qtyInSalesUnits)) {
      this.addToCartButton.setAttribute('disabled', 'disabled');
      this.qtyInSalesUnitInput.setAttribute('disabled', 'disabled');
      return;
    }

    if (error) {
      this.addToCartButton.setAttribute('disabled', 'disabled');
      this.askCustomerForCorrectInput(qtyInSalesUnits);
      return;
    }

    this.qtyInBaseUnitInput.value = qtyInBaseUnits.toString();
    this.addToCartButton.removeAttribute('disabled');
    this.hideNotifications();
  };

  _proto.hideNotifications = function hideNotifications() {
    this.measurementUnitChoice.classList.add('is-hidden');
    this.quantityBetweenUnits.classList.add('is-hidden');
    this.minimumQuantity.classList.add('is-hidden');
    this.maximumQuantity.classList.add('is-hidden');
  };

  _proto.askCustomerForCorrectInput = function askCustomerForCorrectInput(qtyInSalesUnits) {
    var choicesList = this.measurementUnitChoice.getElementsByClassName('list')[0];
    var currentChoice = this.measurementUnitChoice.getElementsByClassName(this.jsName + "__current-choice")[0];
    var minChoice = this.getMinChoice(qtyInSalesUnits);
    var maxChoice = this.getMaxChoice(qtyInSalesUnits, minChoice);
    choicesList.innerHTML = '';
    currentChoice.innerHTML = '';
    currentChoice.textContent = this.round(qtyInSalesUnits, this.decimals) + " " + this.getUnitName(this.currentSalesUnit.product_measurement_unit.code);
    var choiceElements = [];
    choiceElements.push(this.createChoiceElement(minChoice));

    if (maxChoice !== minChoice) {
      choiceElements.push(this.createChoiceElement(maxChoice));
    }

    choiceElements.forEach(function (element) {
      return element !== null ? choicesList.appendChild(element) : undefined;
    });
    this.measurementUnitChoice.classList.remove('is-hidden');
  };

  _proto.createChoiceElement = function createChoiceElement(qtyInBaseUnits) {
    var _this4 = this;

    if (qtyInBaseUnits > 0) {
      var choiceElem = document.createElement('span');
      var qtyInSalesUnits = qtyInBaseUnits / this.currentSalesUnit.conversion;
      var measurementSalesUnitName = this.getUnitName(this.currentSalesUnit.product_measurement_unit.code);
      var measurementBaseUnitName = this.getUnitName(this.baseUnit.code);
      choiceElem.classList.add('link');
      choiceElem.setAttribute('data-base-unit-qty', qtyInBaseUnits.toString());
      choiceElem.setAttribute('data-sales-unit-qty', qtyInSalesUnits.toString());
      choiceElem.textContent = "(" + this.round(qtyInSalesUnits, this.decimals).toString().toString() + " " + measurementSalesUnitName + ") = (" + qtyInBaseUnits + " " + measurementBaseUnitName + ")";

      choiceElem.onclick = function (event) {
        var element = event.currentTarget;
        var qtyInBaseUnitsChoice = parseFloat(element.dataset.baseUnitQty);
        var qtyInSalesUnitsChoice = parseFloat(element.dataset.salesUnitQty);

        _this4.selectQty(qtyInBaseUnitsChoice, qtyInSalesUnitsChoice);
      };

      choiceElem.style.display = 'block';
      return choiceElem;
    }
  };

  _proto.selectQty = function selectQty(qtyInBaseUnits, qtyInSalesUnits) {
    this.qtyInBaseUnitInput.value = qtyInBaseUnits.toString();
    this.qtyInSalesUnitInput.value = this.round(qtyInSalesUnits, this.decimals).toString().toString();
    this.addToCartButton.removeAttribute('disabled');
    this.qtyInSalesUnitInput.removeAttribute('disabled');
    this.measurementUnitChoice.classList.add('is-hidden');
  };

  _proto.getMinChoice = function getMinChoice(qtyInSalesUnits) {
    var qtyInBaseUnits = this.floor(this.multiply(qtyInSalesUnits, this.currentSalesUnit.conversion));

    if (qtyInBaseUnits < this.getMinQuantity()) {
      return this.getMinQuantity();
    }

    if ((qtyInBaseUnits - this.getMinQuantity()) % this.getQuantityInterval() !== 0 || this.getMaxQuantity() > 0 && qtyInBaseUnits > this.getMaxQuantity()) {
      return this.getMinChoice((qtyInBaseUnits - 1) / this.currentSalesUnit.conversion);
    }

    return qtyInBaseUnits;
  };

  _proto.getMaxChoice = function getMaxChoice(qtyInSalesUnits, minChoice) {
    var qtyInBaseUnits = this.ceil(this.multiply(qtyInSalesUnits, this.currentSalesUnit.conversion));

    if (this.getMaxQuantity() > 0 && qtyInBaseUnits > this.getMaxQuantity()) {
      qtyInBaseUnits = this.getMaxQuantity();

      if ((qtyInBaseUnits - this.getMinQuantity()) % this.getQuantityInterval() !== 0) {
        qtyInBaseUnits = qtyInBaseUnits - (qtyInBaseUnits - this.getMinQuantity()) % this.getQuantityInterval();
      }

      return qtyInBaseUnits;
    }

    if ((qtyInBaseUnits - this.getMinQuantity()) % this.getQuantityInterval() !== 0 || qtyInBaseUnits <= minChoice) {
      return this.getMaxChoice((qtyInBaseUnits + 1) / this.currentSalesUnit.conversion, minChoice);
    }

    return qtyInBaseUnits;
  };

  _proto.floor = function floor(value) {
    if (Math.floor(value) > 0) {
      return Math.floor(value);
    }

    return Math.ceil(value);
  };

  _proto.ceil = function ceil(value) {
    return Math.ceil(value);
  };

  _proto.round = function round(value, decimals) {
    return Number(Math.round(parseFloat(value + "e" + decimals)) + "e-" + decimals);
  };

  _proto.multiply = function multiply(a, b) {
    var result = a * this.factor * (b * this.factor) / Math.pow(this.factor, this.degree[0]);
    return Math.floor(result * Math.pow(this.factor, this.degree[1])) / Math.pow(this.factor, this.degree[1]);
  };

  _proto.getMinQuantity = function getMinQuantity() {
    if (typeof this.productQuantityStorage !== 'undefined' && this.productQuantityStorage.hasOwnProperty('quantity_min')) {
      return this.productQuantityStorage.quantity_min;
    }

    return 1;
  };

  _proto.getMaxQuantity = function getMaxQuantity() {
    if (typeof this.productQuantityStorage !== 'undefined' && this.productQuantityStorage.hasOwnProperty('quantity_max') && this.productQuantityStorage.quantity_max !== null) {
      return this.productQuantityStorage.quantity_max;
    }

    return 0;
  };

  _proto.getQuantityInterval = function getQuantityInterval() {
    if (typeof this.productQuantityStorage !== 'undefined' && this.productQuantityStorage.hasOwnProperty('quantity_interval')) {
      return this.productQuantityStorage.quantity_interval;
    }

    return 1;
  };

  _proto.measurementUnitInputChange = function measurementUnitInputChange(event) {
    var salesUnitId = parseInt(event.currentTarget.value);
    var salesUnit = this.getSalesUnitById(salesUnitId);
    var qtyInSalesUnits = +this.qtyInSalesUnitInput.value;
    var qtyInBaseUnits = this.multiply(qtyInSalesUnits, this.currentSalesUnit.conversion);
    qtyInSalesUnits = qtyInBaseUnits / salesUnit.conversion;
    this.currentSalesUnit = salesUnit;

    if (isFinite(qtyInSalesUnits)) {
      this.qtyInSalesUnitInput.value = this.round(qtyInSalesUnits, this.decimals).toString();
    }

    this.qtyInputChange(qtyInSalesUnits);
  };

  _proto.getSalesUnitById = function getSalesUnitById(salesUnitId) {
    return this.salesUnits.find(function (item) {
      return salesUnitId === item.id_product_measurement_sales_unit;
    });
  };

  _proto.getBaseSalesUnit = function getBaseSalesUnit() {
    var _this5 = this;

    return this.salesUnits.find(function (item) {
      return _this5.baseUnit.id_product_measurement_unit === item.product_measurement_unit.id_product_measurement_unit;
    });
  };

  _proto.getUnitName = function getUnitName(key) {
    if (this.translations.hasOwnProperty(key)) {
      return this.translations[key];
    }

    return key;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(MeasurementQuantitySelector, [{
    key: "measurementJSONString",
    get: function get() {
      return this.getAttribute('json');
    }
  }]);

  return MeasurementQuantitySelector;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtbWVhc3VyZW1lbnQtdW5pdC13aWRnZXQvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUHJvZHVjdE1lYXN1cmVtZW50VW5pdFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL21lYXN1cmVtZW50LXF1YW50aXR5LXNlbGVjdG9yL21lYXN1cmVtZW50LXF1YW50aXR5LXNlbGVjdG9yLnRzIl0sIm5hbWVzIjpbIk1lYXN1cmVtZW50UXVhbnRpdHlTZWxlY3RvciIsInF0eUluU2FsZXNVbml0SW5wdXQiLCJxdHlJbkJhc2VVbml0SW5wdXQiLCJtZWFzdXJlbWVudFVuaXRJbnB1dCIsImFkZFRvQ2FydEJ1dHRvbiIsInF1YW50aXR5QmV0d2VlblVuaXRzIiwibWluaW11bVF1YW50aXR5IiwibWF4aW11bVF1YW50aXR5IiwibWVhc3VyZW1lbnRVbml0Q2hvaWNlIiwiYmFzZVVuaXQiLCJzYWxlc1VuaXRzIiwiY3VycmVudFNhbGVzVW5pdCIsInByb2R1Y3RRdWFudGl0eVN0b3JhZ2UiLCJjdXJyZW50VmFsdWUiLCJ0cmFuc2xhdGlvbnMiLCJkZWNpbWFscyIsImZhY3RvciIsImRlZ3JlZSIsInJlYWR5Q2FsbGJhY2siLCJldmVudCIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwiaW5pdEpzb24iLCJpbml0VHJhbnNsYXRpb25zIiwiaW5pdEN1cnJlbnRTYWxlc1VuaXQiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwicXR5SW5wdXRDaGFuZ2UiLCJtZWFzdXJlbWVudFVuaXRJbnB1dENoYW5nZSIsIm1lYXN1cmVtZW50VW5pdERhdGEiLCJKU09OIiwicGFyc2UiLCJtZWFzdXJlbWVudEpTT05TdHJpbmciLCJpbm5lckhUTUwiLCJmb3JFYWNoIiwic2FsZXNVbml0IiwiaXNfZGVmYXVsdCIsInF0eUluU2FsZXNVbml0cyIsInZhbHVlIiwiZXJyb3IiLCJxdHlJbkJhc2VVbml0cyIsIm11bHRpcGx5IiwiY29udmVyc2lvbiIsImdldE1pblF1YW50aXR5IiwiZ2V0UXVhbnRpdHlJbnRlcnZhbCIsImhpZGVOb3RpZmljYXRpb25zIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiZ2V0TWF4UXVhbnRpdHkiLCJpc0Zpbml0ZSIsInNldEF0dHJpYnV0ZSIsImFza0N1c3RvbWVyRm9yQ29ycmVjdElucHV0IiwidG9TdHJpbmciLCJyZW1vdmVBdHRyaWJ1dGUiLCJhZGQiLCJjaG9pY2VzTGlzdCIsImN1cnJlbnRDaG9pY2UiLCJtaW5DaG9pY2UiLCJnZXRNaW5DaG9pY2UiLCJtYXhDaG9pY2UiLCJnZXRNYXhDaG9pY2UiLCJ0ZXh0Q29udGVudCIsInJvdW5kIiwiZ2V0VW5pdE5hbWUiLCJwcm9kdWN0X21lYXN1cmVtZW50X3VuaXQiLCJjb2RlIiwiY2hvaWNlRWxlbWVudHMiLCJwdXNoIiwiY3JlYXRlQ2hvaWNlRWxlbWVudCIsImVsZW1lbnQiLCJhcHBlbmRDaGlsZCIsInVuZGVmaW5lZCIsImNob2ljZUVsZW0iLCJkb2N1bWVudCIsImNyZWF0ZUVsZW1lbnQiLCJtZWFzdXJlbWVudFNhbGVzVW5pdE5hbWUiLCJtZWFzdXJlbWVudEJhc2VVbml0TmFtZSIsIm9uY2xpY2siLCJjdXJyZW50VGFyZ2V0IiwicXR5SW5CYXNlVW5pdHNDaG9pY2UiLCJwYXJzZUZsb2F0IiwiZGF0YXNldCIsImJhc2VVbml0UXR5IiwicXR5SW5TYWxlc1VuaXRzQ2hvaWNlIiwic2FsZXNVbml0UXR5Iiwic2VsZWN0UXR5Iiwic3R5bGUiLCJkaXNwbGF5IiwiZmxvb3IiLCJjZWlsIiwiTWF0aCIsIk51bWJlciIsImEiLCJiIiwicmVzdWx0IiwicG93IiwiaGFzT3duUHJvcGVydHkiLCJxdWFudGl0eV9taW4iLCJxdWFudGl0eV9tYXgiLCJxdWFudGl0eV9pbnRlcnZhbCIsInNhbGVzVW5pdElkIiwicGFyc2VJbnQiLCJnZXRTYWxlc1VuaXRCeUlkIiwiZmluZCIsIml0ZW0iLCJpZF9wcm9kdWN0X21lYXN1cmVtZW50X3NhbGVzX3VuaXQiLCJnZXRCYXNlU2FsZXNVbml0IiwiaWRfcHJvZHVjdF9tZWFzdXJlbWVudF91bml0Iiwia2V5IiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztBQUVBO0FBQ0E7QUFDQTtBQUVBOztJQTJDcUJBLDJCOzs7Ozs7Ozs7OztVQUNQQyxtQjtVQUNBQyxrQjtVQUNBQyxvQjtVQUNBQyxlO1VBQ0FDLG9CO1VBQ0FDLGU7VUFDQUMsZTtVQUNBQyxxQjtVQUNBQyxRO1VBQ0FDLFU7VUFDQUMsZ0I7VUFDQUMsc0I7VUFDQUMsWTtVQUNBQyxZO1VBQ1NDLFEsR0FBbUIsQztVQUNuQkMsTSxHQUFpQixFO1VBR2pCQyxNLEdBQW1CLENBQUMsQ0FBRCxFQUFJLENBQUosQzs7Ozs7O0FBRXRDO1NBQ1VDLGEsR0FBVix1QkFBd0JDLEtBQXhCLEVBQTZDLENBQUUsQzs7U0FFckNDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS25CLG1CQUFMLEdBQ0ksS0FBS29CLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLDRCQUFtRSxDQUFuRSxDQURKOztBQUdBLFFBQUksQ0FBQyxLQUFLckIsbUJBQVYsRUFBK0I7QUFDM0I7QUFDSDs7QUFFRCxTQUFLQyxrQkFBTCxHQUNJLEtBQUttQixzQkFBTCxDQUErQixLQUFLQyxNQUFwQywyQkFBa0UsQ0FBbEUsQ0FESjtBQUVBLFNBQUtuQixvQkFBTCxHQUNJLEtBQUtrQixzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxnQ0FBdUUsQ0FBdkUsQ0FESjtBQUVBLFNBQUtsQixlQUFMLEdBQ0ksS0FBS2lCLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLDJCQUFrRSxDQUFsRSxDQURKO0FBRUEsU0FBS2pCLG9CQUFMLEdBQ0ksS0FBS2dCLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLCtCQUFzRSxDQUF0RSxDQURKO0FBRUEsU0FBS2hCLGVBQUwsR0FDSSxLQUFLZSxzQkFB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QWdCOEYsSUFBaEIsQ0FBcUIsVUFBQ0MsSUFBRDtBQUFBLGFBQXFCSixXQUFXLEtBQUtJLElBQUksQ0FBQ0MsaUNBQTFDO0FBQUEsS0FBckIsQ0FBUDtBQUNILEc7O1NBRVNDLGdCLEdBQVYsNEJBQXdDO0FBQUE7O0FBQ3BDLFdBQU8sS0FBS2pHLFVBQUwsQ0FBZ0I4RixJQUFoQixDQUFxQixVQUFDQyxJQUFEO0FBQUEsYUFDeEIsTUFBSSxDQUFDaEcsUUFBTCxDQUFjbUcsMkJBQWQsS0FBOENILElBQUksQ0FBQ3hDLHdCQUFMLENBQThCMkMsMkJBRHBEO0FBQUEsS0FBckIsQ0FBUDtBQUdILEc7O1NBRVM1QyxXLEdBQVYscUJBQXNCNkMsR0FBdEIsRUFBMkM7QUFDdkMsUUFBSSxLQUFLL0YsWUFBTCxDQUFrQm1GLGNBQWxCLENBQWlDWSxHQUFqQyxDQUFKLEVBQTJDO0FBQ3ZDLGFBQU8sS0FBSy9GLFlBQUwsQ0FBa0IrRixHQUFsQixDQUFQO0FBQ0g7O0FBRUQsV0FBT0EsR0FBUDtBQUNILEc7Ozs7U0FFRCxlQUE4QztBQUMxQyxhQUFPLEtBQUtDLFlBQUwsQ0FBa0IsTUFBbEIsQ0FBUDtBQUNIOzs7O0VBcFRvREMsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQubWVhc3VyZW1lbnQtcXVhbnRpdHktc2VsZWN0b3IubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyogdHNsaW50OmRpc2FibGU6IG1heC1maWxlLWxpbmUtY291bnQgKi9cblxuLypcbiAqIEB0YWcgZXhhbXBsZSBUaGlzIGNvZGUgcHJvdmlkZXMgZXhhbXBsZSBvZiB1c2luZyB0aGUgUHJvZHVjdCBNZWFzdXJlbWVudCBVbml0LlxuICovXG5cbmltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5pbnRlcmZhY2UgVW5pdFRyYW5zbGF0aW9uc0pTT05EYXRhIHtcbiAgICBncmFtOiBzdHJpbmc7XG4gICAgaXRlbTogc3RyaW5nO1xuICAgIGtpbG86IHN0cmluZztcbn1cblxuaW50ZXJmYWNlIEJhc2VVbml0IHtcbiAgICBjb2RlOiBzdHJpbmc7XG4gICAgZGVmYXVsdF9wcmVjaXNpb246IG51bWJlcjtcbiAgICBpZF9wcm9kdWN0X21lYXN1cmVtZW50X3VuaXQ6IG51bWJlcjtcbiAgICBuYW1lOiBzdHJpbmc7XG59XG5cbmludGVyZmFjZSBTYWxlc1VuaXQge1xuICAgIGNvbnZlcnNpb246IG51bWJlcjtcbiAgICBma19wcm9kdWN0OiBudW1iZXI7XG4gICAgZmtfcHJvZHVjdF9tZWFzdXJlbWVudF9iYXNlX3VuaXQ/OiBudW1iZXI7XG4gICAgZmtfcHJvZHVjdF9tZWFzdXJlbWVudF91bml0PzogbnVtYmVyO1xuICAgIGlkX3Byb2R1Y3RfbWVhc3VyZW1lbnRfc2FsZXNfdW5pdDogbnVtYmVyO1xuICAgIGlzX2RlZmF1bHQ6IGJvb2xlYW47XG4gICAgaXNfZGlzcGxheWVkOiBib29sZWFuO1xuICAgIHByZWNpc2lvbjogbnVtYmVyO1xuICAgIHByb2R1Y3RfbWVhc3VyZW1lbnRfYmFzZV91bml0PzogbnVtYmVyO1xuICAgIHByb2R1Y3RfbWVhc3VyZW1lbnRfdW5pdDogQmFzZVVuaXQ7XG4gICAgc3RvcmVfcmVsYXRpb24/OiBudW1iZXI7XG4gICAgdmFsdWU/OiBzdHJpbmc7XG59XG5cbmludGVyZmFjZSBQcm9kdWN0UXVhbnRpdHlTdG9yYWdlIHtcbiAgICBpZF9wcm9kdWN0OiBudW1iZXI7XG4gICAgcXVhbnRpdHlfaW50ZXJ2YWw/OiBudW1iZXI7XG4gICAgcXVhbnRpdHlfbWF4PzogbnVtYmVyO1xuICAgIHF1YW50aXR5X21pbj86IG51bWJlcjtcbn1cblxuaW50ZXJmYWNlIE1lYXN1cmVtZW50SlNPTkRhdGEge1xuICAgIGJhc2VVbml0OiBCYXNlVW5pdDtcbiAgICBzYWxlc1VuaXRzOiBTYWxlc1VuaXRbXTtcbiAgICBwcm9kdWN0UXVhbnRpdHlTdG9yYWdlOiBQcm9kdWN0UXVhbnRpdHlTdG9yYWdlO1xufVxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBNZWFzdXJlbWVudFF1YW50aXR5U2VsZWN0b3IgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBxdHlJblNhbGVzVW5pdElucHV0OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBxdHlJbkJhc2VVbml0SW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIG1lYXN1cmVtZW50VW5pdElucHV0OiBIVE1MU2VsZWN0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgYWRkVG9DYXJ0QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcXVhbnRpdHlCZXR3ZWVuVW5pdHM6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBtaW5pbXVtUXVhbnRpdHk6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBtYXhpbXVtUXVhbnRpdHk6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBtZWFzdXJlbWVudFVuaXRDaG9pY2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBiYXNlVW5pdDogQmFzZVVuaXQ7XG4gICAgcHJvdGVjdGVkIHNhbGVzVW5pdHM6IFNhbGVzVW5pdFtdO1xuICAgIHByb3RlY3RlZCBjdXJyZW50U2FsZXNVbml0OiBTYWxlc1VuaXQ7XG4gICAgcHJvdGVjdGVkIHByb2R1Y3RRdWFudGl0eVN0b3JhZ2U6IFByb2R1Y3RRdWFudGl0eVN0b3JhZ2U7XG4gICAgcHJvdGVjdGVkIGN1cnJlbnRWYWx1ZTogbnVtYmVyO1xuICAgIHByb3RlY3RlZCB0cmFuc2xhdGlvbnM6IFVuaXRUcmFuc2xhdGlvbnNKU09ORGF0YTtcbiAgICBwcm90ZWN0ZWQgcmVhZG9ubHkgZGVjaW1hbHM6IG51bWJlciA9IDQ7XG4gICAgcHJvdGVjdGVkIHJlYWRvbmx5IGZhY3RvcjogbnVtYmVyID0gMTA7XG5cbiAgICAvKiB0c2xpbnQ6ZGlzYWJsZTogbm8tbWFnaWMtbnVtYmVycyAqL1xuICAgIHByb3RlY3RlZCByZWFkb25seSBkZWdyZWU6IG51bWJlcltdID0gWzIsIDNdO1xuXG4gICAgLyogdHNsaW50OmVuYWJsZTogbm8tbWFnaWMtbnVtYmVycyAqL1xuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKGV2ZW50PzogRXZlbnQpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5xdHlJblNhbGVzVW5pdElucHV0ID0gPEhUTUxJbnB1dEVsZW1lbnQ+XG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zYWxlcy11bml0LXF1YW50aXR5YClbMF07XG5cbiAgICAgICAgaWYgKCF0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMucXR5SW5CYXNlVW5pdElucHV0ID0gPEhUTUxJbnB1dEVsZW1lbnQ+XG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19iYXNlLXVuaXQtcXVhbnRpdHlgKVswXTtcbiAgICAgICAgdGhpcy5tZWFzdXJlbWVudFVuaXRJbnB1dCA9IDxIVE1MU2VsZWN0RWxlbWVudD5cbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NlbGVjdC1tZWFzdXJlbWVudC11bml0YClbMF07XG4gICAgICAgIHRoaXMuYWRkVG9DYXJ0QnV0dG9uID0gPEhUTUxCdXR0b25FbGVtZW50PlxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWRkLXRvLWNhcnQtYnV0dG9uYClbMF07XG4gICAgICAgIHRoaXMucXVhbnRpdHlCZXR3ZWVuVW5pdHMgPSA8SFRNTEVsZW1lbnQ+XG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19xdWFudGl0eS1iZXR3ZWVuLXVuaXRzYClbMF07XG4gICAgICAgIHRoaXMubWluaW11bVF1YW50aXR5ID0gPEhUTUxFbGVtZW50PlxuICAgICAgICAgICAgdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbWluaW11bS1xdWFudGl0eWApWzBdO1xuICAgICAgICB0aGlzLm1heGltdW1RdWFudGl0eSA9IDxIVE1MRWxlbWVudD5cbiAgICAgICAgICAgIHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX21heGltdW0tcXVhbnRpdHlgKVswXTtcbiAgICAgICAgdGhpcy5tZWFzdXJlbWVudFVuaXRDaG9pY2UgPSA8SFRNTEVsZW1lbnQ+XG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19tZWFzdXJlbWVudC11bml0LWNob2ljZWApWzBdO1xuXG4gICAgICAgIHRoaXMuaW5pdEpzb24oKTtcbiAgICAgICAgdGhpcy5pbml0VHJhbnNsYXRpb25zKCk7XG4gICAgICAgIHRoaXMuaW5pdEN1cnJlbnRTYWxlc1VuaXQoKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4gdGhpcy5xdHlJbnB1dENoYW5nZSgpKTtcbiAgICAgICAgdGhpcy5tZWFzdXJlbWVudFVuaXRJbnB1dC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PlxuICAgICAgICAgICAgdGhpcy5tZWFzdXJlbWVudFVuaXRJbnB1dENoYW5nZShldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbml0SnNvbigpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgbWVhc3VyZW1lbnRVbml0RGF0YSA9IDxNZWFzdXJlbWVudEpTT05EYXRhPkpTT04ucGFyc2UodGhpcy5tZWFzdXJlbWVudEpTT05TdHJpbmcpO1xuXG4gICAgICAgIHRoaXMuYmFzZVVuaXQgPSBtZWFzdXJlbWVudFVuaXREYXRhLmJhc2VVbml0O1xuICAgICAgICB0aGlzLnNhbGVzVW5pdHMgPSBtZWFzdXJlbWVudFVuaXREYXRhLnNhbGVzVW5pdHM7XG4gICAgICAgIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZSA9IG1lYXN1cmVtZW50VW5pdERhdGEucHJvZHVjdFF1YW50aXR5U3RvcmFnZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdFRyYW5zbGF0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmFuc2xhdGlvbnMgPSA8VW5pdFRyYW5zbGF0aW9uc0pTT05EYXRhPkpTT04ucGFyc2UoXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19tZWFzdXJlbWVudC11bml0LXRyYW5zbGF0aW9uYClbMF0uaW5uZXJIVE1MXG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGluaXRDdXJyZW50U2FsZXNVbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNhbGVzVW5pdHMuZm9yRWFjaCgoc2FsZXNVbml0OiBTYWxlc1VuaXQpID0+IHtcbiAgICAgICAgICAgIGlmIChzYWxlc1VuaXQuaXNfZGVmYXVsdCkge1xuICAgICAgICAgICAgICAgIHRoaXMuY3VycmVudFNhbGVzVW5pdCA9IHNhbGVzVW5pdDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHF0eUlucHV0Q2hhbmdlKHF0eUluU2FsZXNVbml0cz86IG51bWJlcik6IHZvaWQge1xuICAgICAgICBpZiAodHlwZW9mIHF0eUluU2FsZXNVbml0cyA9PT0gJ3VuZGVmaW5lZCcpIHtcbiAgICAgICAgICAgIHF0eUluU2FsZXNVbml0cyA9ICt0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQudmFsdWU7XG4gICAgICAgIH1cbiAgICAgICAgbGV0IGVycm9yID0gZmFsc2U7XG4gICAgICAgIGNvbnN0IHF0eUluQmFzZVVuaXRzID0gdGhpcy5tdWx0aXBseShxdHlJblNhbGVzVW5pdHMsICt0aGlzLmN1cnJlbnRTYWxlc1VuaXQuY29udmVyc2lvbik7XG4gICAgICAgIGlmICgocXR5SW5CYXNlVW5pdHMgLSB0aGlzLmdldE1pblF1YW50aXR5KCkpICUgdGhpcy5nZXRRdWFudGl0eUludGVydmFsKCkgIT09IDApIHtcbiAgICAgICAgICAgIGVycm9yID0gdHJ1ZTtcbiAgICAgICAgICAgIHRoaXMuaGlkZU5vdGlmaWNhdGlvbnMoKTtcbiAgICAgICAgICAgIHRoaXMucXVhbnRpdHlCZXR3ZWVuVW5pdHMuY2xhc3NMaXN0LnJlbW92ZSgnaXMtaGlkZGVuJyk7XG4gICAgICAgIH0gZWxzZSBpZiAocXR5SW5CYXNlVW5pdHMgPCB0aGlzLmdldE1pblF1YW50aXR5KCkpIHtcbiAgICAgICAgICAgIGVycm9yID0gdHJ1ZTtcbiAgICAgICAgICAgIHRoaXMuaGlkZU5vdGlmaWNhdGlvbnMoKTtcbiAgICAgICAgICAgIHRoaXMubWluaW11bVF1YW50aXR5LmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWhpZGRlbicpO1xuICAgICAgICB9IGVsc2UgaWYgKHRoaXMuZ2V0TWF4UXVhbnRpdHkoKSA+IDAgJiYgcXR5SW5CYXNlVW5pdHMgPiB0aGlzLmdldE1heFF1YW50aXR5KCkpIHtcbiAgICAgICAgICAgIGVycm9yID0gdHJ1ZTtcbiAgICAgICAgICAgIHRoaXMuaGlkZU5vdGlmaWNhdGlvbnMoKTtcbiAgICAgICAgICAgIHRoaXMubWF4aW11bVF1YW50aXR5LmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWhpZGRlbicpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKGVycm9yICYmICFpc0Zpbml0ZShxdHlJblNhbGVzVW5pdHMpKSB7XG4gICAgICAgICAgICB0aGlzLmFkZFRvQ2FydEJ1dHRvbi5zZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJyk7XG4gICAgICAgICAgICB0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQuc2V0QXR0cmlidXRlKCdkaXNhYmxlZCcsICdkaXNhYmxlZCcpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZXJyb3IpIHtcbiAgICAgICAgICAgIHRoaXMuYWRkVG9DYXJ0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcbiAgICAgICAgICAgIHRoaXMuYXNrQ3VzdG9tZXJGb3JDb3JyZWN0SW5wdXQocXR5SW5TYWxlc1VuaXRzKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5xdHlJbkJhc2VVbml0SW5wdXQudmFsdWUgPSBxdHlJbkJhc2VVbml0cy50b1N0cmluZygpO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG4gICAgICAgIHRoaXMuaGlkZU5vdGlmaWNhdGlvbnMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZU5vdGlmaWNhdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWVhc3VyZW1lbnRVbml0Q2hvaWNlLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgICAgICB0aGlzLnF1YW50aXR5QmV0d2VlblVuaXRzLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgICAgICB0aGlzLm1pbmltdW1RdWFudGl0eS5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcbiAgICAgICAgdGhpcy5tYXhpbXVtUXVhbnRpdHkuY2xhc3NMaXN0LmFkZCgnaXMtaGlkZGVuJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFza0N1c3RvbWVyRm9yQ29ycmVjdElucHV0KHF0eUluU2FsZXNVbml0czogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNob2ljZXNMaXN0ID0gdGhpcy5tZWFzdXJlbWVudFVuaXRDaG9pY2UuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnbGlzdCcpWzBdO1xuICAgICAgICBjb25zdCBjdXJyZW50Q2hvaWNlID0gdGhpcy5tZWFzdXJlbWVudFVuaXRDaG9pY2UuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcbiAgICAgICAgICAgIGAke3RoaXMuanNOYW1lfV9fY3VycmVudC1jaG9pY2VgXG4gICAgICAgIClbMF07XG4gICAgICAgIGNvbnN0IG1pbkNob2ljZSA9IHRoaXMuZ2V0TWluQ2hvaWNlKHF0eUluU2FsZXNVbml0cyk7XG4gICAgICAgIGNvbnN0IG1heENob2ljZSA9IHRoaXMuZ2V0TWF4Q2hvaWNlKHF0eUluU2FsZXNVbml0cywgbWluQ2hvaWNlKTtcbiAgICAgICAgY2hvaWNlc0xpc3QuaW5uZXJIVE1MID0gJyc7XG4gICAgICAgIGN1cnJlbnRDaG9pY2UuaW5uZXJIVE1MID0gJyc7XG4gICAgICAgIGN1cnJlbnRDaG9pY2UudGV4dENvbnRlbnQgPSBgJHt0aGlzLnJvdW5kKHF0eUluU2FsZXNVbml0cywgdGhpcy5kZWNpbWFscyl9ICR7dGhpcy5nZXRVbml0TmFtZShcbiAgICAgICAgICAgIHRoaXMuY3VycmVudFNhbGVzVW5pdC5wcm9kdWN0X21lYXN1cmVtZW50X3VuaXQuY29kZVxuICAgICAgICApfWA7XG5cbiAgICAgICAgY29uc3QgY2hvaWNlRWxlbWVudHMgPSBbXTtcbiAgICAgICAgY2hvaWNlRWxlbWVudHMucHVzaCh0aGlzLmNyZWF0ZUNob2ljZUVsZW1lbnQobWluQ2hvaWNlKSk7XG4gICAgICAgIGlmIChtYXhDaG9pY2UgIT09IG1pbkNob2ljZSkge1xuICAgICAgICAgICAgY2hvaWNlRWxlbWVudHMucHVzaCh0aGlzLmNyZWF0ZUNob2ljZUVsZW1lbnQobWF4Q2hvaWNlKSk7XG4gICAgICAgIH1cblxuICAgICAgICBjaG9pY2VFbGVtZW50cy5mb3JFYWNoKGVsZW1lbnQgPT4gKGVsZW1lbnQgIT09IG51bGwpID8gY2hvaWNlc0xpc3QuYXBwZW5kQ2hpbGQoZWxlbWVudCkgOiB1bmRlZmluZWQpO1xuXG4gICAgICAgIHRoaXMubWVhc3VyZW1lbnRVbml0Q2hvaWNlLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBjcmVhdGVDaG9pY2VFbGVtZW50KHF0eUluQmFzZVVuaXRzOiBudW1iZXIpOiBIVE1MU3BhbkVsZW1lbnQge1xuICAgICAgICBpZiAocXR5SW5CYXNlVW5pdHMgPiAwKSB7XG4gICAgICAgICAgICBjb25zdCBjaG9pY2VFbGVtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc3BhbicpO1xuICAgICAgICAgICAgY29uc3QgcXR5SW5TYWxlc1VuaXRzID0gcXR5SW5CYXNlVW5pdHMgLyB0aGlzLmN1cnJlbnRTYWxlc1VuaXQuY29udmVyc2lvbjtcbiAgICAgICAgICAgIGNvbnN0IG1lYXN1cmVtZW50U2FsZXNVbml0TmFtZSA9IHRoaXMuZ2V0VW5pdE5hbWUodGhpcy5jdXJyZW50U2FsZXNVbml0LnByb2R1Y3RfbWVhc3VyZW1lbnRfdW5pdC5jb2RlKTtcbiAgICAgICAgICAgIGNvbnN0IG1lYXN1cmVtZW50QmFzZVVuaXROYW1lID0gdGhpcy5nZXRVbml0TmFtZSh0aGlzLmJhc2VVbml0LmNvZGUpO1xuXG4gICAgICAgICAgICBjaG9pY2VFbGVtLmNsYXNzTGlzdC5hZGQoJ2xpbmsnKTtcbiAgICAgICAgICAgIGNob2ljZUVsZW0uc2V0QXR0cmlidXRlKCdkYXRhLWJhc2UtdW5pdC1xdHknLCBxdHlJbkJhc2VVbml0cy50b1N0cmluZygpKTtcbiAgICAgICAgICAgIGNob2ljZUVsZW0uc2V0QXR0cmlidXRlKCdkYXRhLXNhbGVzLXVuaXQtcXR5JywgcXR5SW5TYWxlc1VuaXRzLnRvU3RyaW5nKCkpO1xuICAgICAgICAgICAgY2hvaWNlRWxlbS50ZXh0Q29udGVudCA9IGAoJHt0aGlzLnJvdW5kKHF0eUluU2FsZXNVbml0cywgdGhpcy5kZWNpbWFscykudG9TdHJpbmcoKVxuICAgICAgICAgICAgICAgIC50b1N0cmluZygpfSAke21lYXN1cmVtZW50U2FsZXNVbml0TmFtZX0pID0gKCR7cXR5SW5CYXNlVW5pdHN9ICR7bWVhc3VyZW1lbnRCYXNlVW5pdE5hbWV9KWA7XG4gICAgICAgICAgICBjaG9pY2VFbGVtLm9uY2xpY2sgPSAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgY29uc3QgZWxlbWVudCA9IDxIVE1MU2VsZWN0RWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICAgICAgICAgIGNvbnN0IHF0eUluQmFzZVVuaXRzQ2hvaWNlID0gcGFyc2VGbG9hdChlbGVtZW50LmRhdGFzZXQuYmFzZVVuaXRRdHkpO1xuICAgICAgICAgICAgICAgIGNvbnN0IHF0eUluU2FsZXNVbml0c0Nob2ljZSA9IHBhcnNlRmxvYXQoZWxlbWVudC5kYXRhc2V0LnNhbGVzVW5pdFF0eSk7XG4gICAgICAgICAgICAgICAgdGhpcy5zZWxlY3RRdHkocXR5SW5CYXNlVW5pdHNDaG9pY2UsIHF0eUluU2FsZXNVbml0c0Nob2ljZSk7XG4gICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICBjaG9pY2VFbGVtLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snO1xuXG4gICAgICAgICAgICByZXR1cm4gY2hvaWNlRWxlbTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZWxlY3RRdHkocXR5SW5CYXNlVW5pdHM6IG51bWJlciwgcXR5SW5TYWxlc1VuaXRzOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5xdHlJbkJhc2VVbml0SW5wdXQudmFsdWUgPSBxdHlJbkJhc2VVbml0cy50b1N0cmluZygpO1xuICAgICAgICB0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQudmFsdWUgPSB0aGlzLnJvdW5kKHF0eUluU2FsZXNVbml0cywgdGhpcy5kZWNpbWFscykudG9TdHJpbmcoKS50b1N0cmluZygpO1xuICAgICAgICB0aGlzLmFkZFRvQ2FydEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG4gICAgICAgIHRoaXMucXR5SW5TYWxlc1VuaXRJbnB1dC5yZW1vdmVBdHRyaWJ1dGUoJ2Rpc2FibGVkJyk7XG4gICAgICAgIHRoaXMubWVhc3VyZW1lbnRVbml0Q2hvaWNlLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRNaW5DaG9pY2UocXR5SW5TYWxlc1VuaXRzOiBudW1iZXIpOiBudW1iZXIge1xuICAgICAgICBjb25zdCBxdHlJbkJhc2VVbml0cyA9IHRoaXMuZmxvb3IodGhpcy5tdWx0aXBseShxdHlJblNhbGVzVW5pdHMsIHRoaXMuY3VycmVudFNhbGVzVW5pdC5jb252ZXJzaW9uKSk7XG5cbiAgICAgICAgaWYgKHF0eUluQmFzZVVuaXRzIDwgdGhpcy5nZXRNaW5RdWFudGl0eSgpKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5nZXRNaW5RdWFudGl0eSgpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKChxdHlJbkJhc2VVbml0cyAtIHRoaXMuZ2V0TWluUXVhbnRpdHkoKSkgJSB0aGlzLmdldFF1YW50aXR5SW50ZXJ2YWwoKSAhPT0gMCB8fCAodGhpcy5nZXRNYXhRdWFudGl0eSgpID4gMFxuICAgICAgICAgICAgJiYgcXR5SW5CYXNlVW5pdHMgPiB0aGlzLmdldE1heFF1YW50aXR5KCkpKSB7XG4gICAgICAgICAgICByZXR1cm4gdGhpcy5nZXRNaW5DaG9pY2UoKHF0eUluQmFzZVVuaXRzIC0gMSkgLyB0aGlzLmN1cnJlbnRTYWxlc1VuaXQuY29udmVyc2lvbik7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gcXR5SW5CYXNlVW5pdHM7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldE1heENob2ljZShxdHlJblNhbGVzVW5pdHM6IG51bWJlciwgbWluQ2hvaWNlOiBudW1iZXIpOiBudW1iZXIge1xuICAgICAgICBsZXQgcXR5SW5CYXNlVW5pdHMgPSB0aGlzLmNlaWwodGhpcy5tdWx0aXBseShxdHlJblNhbGVzVW5pdHMsIHRoaXMuY3VycmVudFNhbGVzVW5pdC5jb252ZXJzaW9uKSk7XG5cbiAgICAgICAgaWYgKHRoaXMuZ2V0TWF4UXVhbnRpdHkoKSA+IDAgJiYgcXR5SW5CYXNlVW5pdHMgPiB0aGlzLmdldE1heFF1YW50aXR5KCkpIHtcbiAgICAgICAgICAgIHF0eUluQmFzZVVuaXRzID0gdGhpcy5nZXRNYXhRdWFudGl0eSgpO1xuXG4gICAgICAgICAgICBpZiAoKHF0eUluQmFzZVVuaXRzIC0gdGhpcy5nZXRNaW5RdWFudGl0eSgpKSAlIHRoaXMuZ2V0UXVhbnRpdHlJbnRlcnZhbCgpICE9PSAwKSB7XG4gICAgICAgICAgICAgICAgcXR5SW5CYXNlVW5pdHMgPSBxdHlJbkJhc2VVbml0cyAtICgocXR5SW5CYXNlVW5pdHMgLSB0aGlzLmdldE1pblF1YW50aXR5KCkpICVcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5nZXRRdWFudGl0eUludGVydmFsKCkpO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICByZXR1cm4gcXR5SW5CYXNlVW5pdHM7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoKHF0eUluQmFzZVVuaXRzIC0gdGhpcy5nZXRNaW5RdWFudGl0eSgpKSAlIHRoaXMuZ2V0UXVhbnRpdHlJbnRlcnZhbCgpICE9PSAwIHx8XG4gICAgICAgICAgICBxdHlJbkJhc2VVbml0cyA8PSBtaW5DaG9pY2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLmdldE1heENob2ljZSgocXR5SW5CYXNlVW5pdHMgKyAxKSAvIHRoaXMuY3VycmVudFNhbGVzVW5pdC5jb252ZXJzaW9uLCBtaW5DaG9pY2UpO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuIHF0eUluQmFzZVVuaXRzO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBmbG9vcih2YWx1ZTogbnVtYmVyKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKE1hdGguZmxvb3IodmFsdWUpID4gMCkge1xuICAgICAgICAgICAgcmV0dXJuIE1hdGguZmxvb3IodmFsdWUpO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuIE1hdGguY2VpbCh2YWx1ZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNlaWwodmFsdWU6IG51bWJlcik6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBNYXRoLmNlaWwodmFsdWUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByb3VuZCh2YWx1ZTogbnVtYmVyLCBkZWNpbWFsczogbnVtYmVyKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcihgJHtNYXRoLnJvdW5kKHBhcnNlRmxvYXQoYCR7dmFsdWV9ZSR7ZGVjaW1hbHN9YCkpfWUtJHtkZWNpbWFsc31gKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbXVsdGlwbHkoYTogbnVtYmVyLCBiOiBudW1iZXIpOiBudW1iZXIge1xuICAgICAgICBjb25zdCByZXN1bHQgPSAoKGEgKiB0aGlzLmZhY3RvcikgKiAoYiAqIHRoaXMuZmFjdG9yKSkgLyBNYXRoLnBvdyh0aGlzLmZhY3RvciwgdGhpcy5kZWdyZWVbMF0pO1xuXG4gICAgICAgIHJldHVybiBNYXRoLmZsb29yKHJlc3VsdCAqIE1hdGgucG93KHRoaXMuZmFjdG9yLCB0aGlzLmRlZ3JlZVsxXSkpIC8gTWF0aC5wb3codGhpcy5mYWN0b3IsIHRoaXMuZGVncmVlWzFdKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0TWluUXVhbnRpdHkoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHR5cGVvZiB0aGlzLnByb2R1Y3RRdWFudGl0eVN0b3JhZ2UgIT09ICd1bmRlZmluZWQnXG4gICAgICAgICAgICAmJiB0aGlzLnByb2R1Y3RRdWFudGl0eVN0b3JhZ2UuaGFzT3duUHJvcGVydHkoJ3F1YW50aXR5X21pbicpXG4gICAgICAgICkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZS5xdWFudGl0eV9taW47XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gMTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0TWF4UXVhbnRpdHkoKTogbnVtYmVyIHtcbiAgICAgICAgaWYgKHR5cGVvZiB0aGlzLnByb2R1Y3RRdWFudGl0eVN0b3JhZ2UgIT09ICd1bmRlZmluZWQnXG4gICAgICAgICAgICAmJiB0aGlzLnByb2R1Y3RRdWFudGl0eVN0b3JhZ2UuaGFzT3duUHJvcGVydHkoJ3F1YW50aXR5X21heCcpXG4gICAgICAgICAgICAmJiB0aGlzLnByb2R1Y3RRdWFudGl0eVN0b3JhZ2UucXVhbnRpdHlfbWF4ICE9PSBudWxsXG4gICAgICAgICkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZS5xdWFudGl0eV9tYXg7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gMDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0UXVhbnRpdHlJbnRlcnZhbCgpOiBudW1iZXIge1xuICAgICAgICBpZiAodHlwZW9mIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZSAhPT0gJ3VuZGVmaW5lZCdcbiAgICAgICAgICAgICYmIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZS5oYXNPd25Qcm9wZXJ0eSgncXVhbnRpdHlfaW50ZXJ2YWwnKSkge1xuICAgICAgICAgICAgcmV0dXJuIHRoaXMucHJvZHVjdFF1YW50aXR5U3RvcmFnZS5xdWFudGl0eV9pbnRlcnZhbDtcbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiAxO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtZWFzdXJlbWVudFVuaXRJbnB1dENoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3Qgc2FsZXNVbml0SWQgPSBwYXJzZUludCgoPEhUTUxTZWxlY3RFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQpLnZhbHVlKTtcbiAgICAgICAgY29uc3Qgc2FsZXNVbml0ID0gdGhpcy5nZXRTYWxlc1VuaXRCeUlkKHNhbGVzVW5pdElkKTtcbiAgICAgICAgbGV0IHF0eUluU2FsZXNVbml0cyA9ICt0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQudmFsdWU7XG4gICAgICAgIGNvbnN0IHF0eUluQmFzZVVuaXRzID0gdGhpcy5tdWx0aXBseShxdHlJblNhbGVzVW5pdHMsIHRoaXMuY3VycmVudFNhbGVzVW5pdC5jb252ZXJzaW9uKTtcbiAgICAgICAgcXR5SW5TYWxlc1VuaXRzID0gcXR5SW5CYXNlVW5pdHMgLyBzYWxlc1VuaXQuY29udmVyc2lvbjtcbiAgICAgICAgdGhpcy5jdXJyZW50U2FsZXNVbml0ID0gc2FsZXNVbml0O1xuXG4gICAgICAgIGlmIChpc0Zpbml0ZShxdHlJblNhbGVzVW5pdHMpKSB7XG4gICAgICAgICAgICB0aGlzLnF0eUluU2FsZXNVbml0SW5wdXQudmFsdWUgPSB0aGlzLnJvdW5kKHF0eUluU2FsZXNVbml0cywgdGhpcy5kZWNpbWFscykudG9TdHJpbmcoKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMucXR5SW5wdXRDaGFuZ2UocXR5SW5TYWxlc1VuaXRzKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0U2FsZXNVbml0QnlJZChzYWxlc1VuaXRJZDogbnVtYmVyKTogU2FsZXNVbml0IHtcbiAgICAgICAgcmV0dXJuIHRoaXMuc2FsZXNVbml0cy5maW5kKChpdGVtOiBTYWxlc1VuaXQpID0+IHNhbGVzVW5pdElkID09PSBpdGVtLmlkX3Byb2R1Y3RfbWVhc3VyZW1lbnRfc2FsZXNfdW5pdCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldEJhc2VTYWxlc1VuaXQoKTogU2FsZXNVbml0IHtcbiAgICAgICAgcmV0dXJuIHRoaXMuc2FsZXNVbml0cy5maW5kKChpdGVtOiBTYWxlc1VuaXQpID0+XG4gICAgICAgICAgICB0aGlzLmJhc2VVbml0LmlkX3Byb2R1Y3RfbWVhc3VyZW1lbnRfdW5pdCA9PT0gaXRlbS5wcm9kdWN0X21lYXN1cmVtZW50X3VuaXQuaWRfcHJvZHVjdF9tZWFzdXJlbWVudF91bml0XG4gICAgICAgICk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldFVuaXROYW1lKGtleTogc3RyaW5nKTogc3RyaW5nIHtcbiAgICAgICAgaWYgKHRoaXMudHJhbnNsYXRpb25zLmhhc093blByb3BlcnR5KGtleSkpIHtcbiAgICAgICAgICAgIHJldHVybiB0aGlzLnRyYW5zbGF0aW9uc1trZXldO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuIGtleTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1lYXN1cmVtZW50SlNPTlN0cmluZygpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2pzb24nKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9