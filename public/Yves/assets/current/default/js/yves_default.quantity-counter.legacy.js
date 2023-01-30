(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["quantity-counter"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/quantity-counter/quantity-counter.ts":
/*!*****************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/quantity-counter/quantity-counter.ts ***!
  \*****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return QuantityCounter; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var QuantityCounter = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(QuantityCounter, _Component);

  function QuantityCounter() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.incrementButton = void 0;
    _this.decrementButton = void 0;
    _this.input = void 0;
    _this.value = void 0;
    _this.duration = 1000;
    _this.timeout = 0;
    _this.eventChange = new Event('change');
    _this.eventInput = new Event('input');
    _this.numberOfDecimalPlaces = 10;
    return _this;
  }

  var _proto = QuantityCounter.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.incrementButton = this.getElementsByClassName(this.jsName + "__button-increment")[0];
    this.decrementButton = this.getElementsByClassName(this.jsName + "__button-decrement")[0];
    this.input = this.getElementsByClassName(this.jsName + "__input")[0];
    this.value = this.getValue;
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.decrementButton.addEventListener('click', function (event) {
      return _this2.decrementValue(event);
    });
    this.incrementButton.addEventListener('click', function (event) {
      return _this2.incrementValue(event);
    });
    this.input.addEventListener('keydown', function (event) {
      return _this2.onKeyDown(event);
    });

    if (this.autoUpdate) {
      this.input.addEventListener('change', function () {
        return _this2.delayToSubmit();
      });
    }
  };

  _proto.incrementValue = function incrementValue(event) {
    event.preventDefault();

    if (this.isAvailable) {
      var value = Number(this.input.value);
      var potentialValue = Number(((value * this.precision + this.step * this.precision) / this.precision).toFixed(this.numberOfDecimalPlaces));

      if (value < this.maxQuantity) {
        this.input.value = potentialValue.toString();
        this.triggerInputEvent();
      }
    }
  };

  _proto.decrementValue = function decrementValue(event) {
    event.preventDefault();

    if (this.isAvailable) {
      var value = Number(this.input.value);
      var potentialValue = Number(((value * this.precision - this.step * this.precision) / this.precision).toFixed(this.numberOfDecimalPlaces));

      if (potentialValue >= this.minQuantity) {
        this.input.value = potentialValue.toString();
        this.triggerInputEvent();
      }
    }
  };

  _proto.triggerInputEvent = function triggerInputEvent() {
    this.input.dispatchEvent(this.eventChange);
    this.input.dispatchEvent(this.eventInput);
  };

  _proto.delayToSubmit = function delayToSubmit() {
    var _this3 = this;

    clearTimeout(this.timeout);
    this.timeout = window.setTimeout(function () {
      return _this3.onSubmit();
    }, this.duration);
  };

  _proto.onSubmit = function onSubmit() {
    if (this.value !== this.getValue) {
      this.input.form.submit();
    }
  };

  _proto.onKeyDown = function onKeyDown(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
    }
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(QuantityCounter, [{
    key: "minQuantity",
    get: function get() {
      return Number(this.input.getAttribute('min'));
    }
  }, {
    key: "maxQuantity",
    get: function get() {
      var max = Number(this.input.getAttribute('max'));
      return max > 0 && max > this.minQuantity ? max : Infinity;
    }
  }, {
    key: "step",
    get: function get() {
      var step = Number(this.input.getAttribute('step'));
      return step > 0 ? step : 1;
    }
  }, {
    key: "getValue",
    get: function get() {
      return Number(this.input.value);
    }
  }, {
    key: "autoUpdate",
    get: function get() {
      return !!this.input.dataset.autoUpdate;
    }
  }, {
    key: "isAvailable",
    get: function get() {
      return !this.input.disabled && !this.input.readOnly;
    }
  }, {
    key: "precision",
    get: function get() {
      return Number("1" + '0'.repeat(this.numberOfDecimalPlaces));
    }
  }]);

  return QuantityCounter;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcXVhbnRpdHktY291bnRlci9xdWFudGl0eS1jb3VudGVyLnRzIl0sIm5hbWVzIjpbIlF1YW50aXR5Q291bnRlciIsImluY3JlbWVudEJ1dHRvbiIsImRlY3JlbWVudEJ1dHRvbiIsImlucHV0IiwidmFsdWUiLCJkdXJhdGlvbiIsInRpbWVvdXQiLCJldmVudENoYW5nZSIsIkV2ZW50IiwiZXZlbnRJbnB1dCIsIm51bWJlck9mRGVjaW1hbFBsYWNlcyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImdldFZhbHVlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50IiwiZGVjcmVtZW50VmFsdWUiLCJpbmNyZW1lbnRWYWx1ZSIsIm9uS2V5RG93biIsImF1dG9VcGRhdGUiLCJkZWxheVRvU3VibWl0IiwicHJldmVudERlZmF1bHQiLCJpc0F2YWlsYWJsZSIsIk51bWJlciIsInBvdGVudGlhbFZhbHVlIiwicHJlY2lzaW9uIiwic3RlcCIsInRvRml4ZWQiLCJtYXhRdWFudGl0eSIsInRvU3RyaW5nIiwidHJpZ2dlcklucHV0RXZlbnQiLCJtaW5RdWFudGl0eSIsImRpc3BhdGNoRXZlbnQiLCJjbGVhclRpbWVvdXQiLCJ3aW5kb3ciLCJzZXRUaW1lb3V0Iiwib25TdWJtaXQiLCJmb3JtIiwic3VibWl0Iiwia2V5IiwiZ2V0QXR0cmlidXRlIiwibWF4IiwiSW5maW5pdHkiLCJkYXRhc2V0IiwiZGlzYWJsZWQiLCJyZWFkT25seSIsInJlcGVhdCIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsZTs7Ozs7Ozs7Ozs7VUFDUEMsZTtVQUNBQyxlO1VBQ0FDLEs7VUFDQUMsSztVQUNBQyxRLEdBQW1CLEk7VUFDbkJD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LFlBQVgsQ0FBd0IsTUFBeEIsQ0FBRCxDQUFuQjtBQUVBLGFBQU9kLElBQUksR0FBRyxDQUFQLEdBQVdBLElBQVgsR0FBa0IsQ0FBekI7QUFDSDs7O1NBRUQsZUFBaUM7QUFDN0IsYUFBT0gsTUFBTSxDQUFDLEtBQUt2QixLQUFMLENBQVdDLEtBQVosQ0FBYjtBQUNIOzs7U0FFRCxlQUFvQztBQUNoQyxhQUFPLENBQUMsQ0FBQyxLQUFLRCxLQUFMLENBQVcyQyxPQUFYLENBQW1CeEIsVUFBNUI7QUFDSDs7O1NBRUQsZUFBcUM7QUFDakMsYUFBTyxDQUFDLEtBQUtuQixLQUFMLENBQVc0QyxRQUFaLElBQXdCLENBQUMsS0FBSzVDLEtBQUwsQ0FBVzZDLFFBQTNDO0FBQ0g7OztTQUVELGVBQWtDO0FBQzlCLGFBQU90QixNQUFNLE9BQUssSUFBSXVCLE1BQUosQ0FBVyxLQUFLdkMscUJBQWhCLENBQUwsQ0FBYjtBQUNIOzs7O0VBckh3Q3dDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnF1YW50aXR5LWNvdW50ZXIubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFF1YW50aXR5Q291bnRlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGluY3JlbWVudEJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGRlY3JlbWVudEJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGlucHV0OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCB2YWx1ZTogbnVtYmVyO1xuICAgIHByb3RlY3RlZCBkdXJhdGlvbjogbnVtYmVyID0gMTAwMDtcbiAgICBwcm90ZWN0ZWQgdGltZW91dDogbnVtYmVyID0gMDtcbiAgICBwcm90ZWN0ZWQgZXZlbnRDaGFuZ2U6IEV2ZW50ID0gbmV3IEV2ZW50KCdjaGFuZ2UnKTtcbiAgICBwcm90ZWN0ZWQgZXZlbnRJbnB1dDogRXZlbnQgPSBuZXcgRXZlbnQoJ2lucHV0Jyk7XG4gICAgcHJvdGVjdGVkIG51bWJlck9mRGVjaW1hbFBsYWNlczogbnVtYmVyID0gMTA7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbmNyZW1lbnRCdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYnV0dG9uLWluY3JlbWVudGApWzBdO1xuICAgICAgICB0aGlzLmRlY3JlbWVudEJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tZGVjcmVtZW50YClbMF07XG4gICAgICAgIHRoaXMuaW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dGApWzBdO1xuICAgICAgICB0aGlzLnZhbHVlID0gdGhpcy5nZXRWYWx1ZTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlY3JlbWVudEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMuZGVjcmVtZW50VmFsdWUoZXZlbnQpKTtcbiAgICAgICAgdGhpcy5pbmNyZW1lbnRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLmluY3JlbWVudFZhbHVlKGV2ZW50KSk7XG4gICAgICAgIHRoaXMuaW5wdXQuYWRkRXZlbnRMaXN0ZW5lcigna2V5ZG93bicsIChldmVudDogS2V5Ym9hcmRFdmVudCkgPT4gdGhpcy5vbktleURvd24oZXZlbnQpKTtcblxuICAgICAgICBpZiAodGhpcy5hdXRvVXBkYXRlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMuZGVsYXlUb1N1Ym1pdCgpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbmNyZW1lbnRWYWx1ZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgaWYgKHRoaXMuaXNBdmFpbGFibGUpIHtcbiAgICAgICAgICAgIGNvbnN0IHZhbHVlID0gTnVtYmVyKHRoaXMuaW5wdXQudmFsdWUpO1xuICAgICAgICAgICAgY29uc3QgcG90ZW50aWFsVmFsdWUgPSBOdW1iZXIoXG4gICAgICAgICAgICAgICAgKCh2YWx1ZSAqIHRoaXMucHJlY2lzaW9uICsgdGhpcy5zdGVwICogdGhpcy5wcmVjaXNpb24pIC8gdGhpcy5wcmVjaXNpb24pLnRvRml4ZWQoXG4gICAgICAgICAgICAgICAgICAgIHRoaXMubnVtYmVyT2ZEZWNpbWFsUGxhY2VzLFxuICAgICAgICAgICAgICAgICksXG4gICAgICAgICAgICApO1xuXG4gICAgICAgICAgICBpZiAodmFsdWUgPCB0aGlzLm1heFF1YW50aXR5KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5pbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICAgICAgdGhpcy50cmlnZ2VySW5wdXRFdmVudCgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGRlY3JlbWVudFZhbHVlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBpZiAodGhpcy5pc0F2YWlsYWJsZSkge1xuICAgICAgICAgICAgY29uc3QgdmFsdWUgPSBOdW1iZXIodGhpcy5pbnB1dC52YWx1ZSk7XG4gICAgICAgICAgICBjb25zdCBwb3RlbnRpYWxWYWx1ZSA9IE51bWJlcihcbiAgICAgICAgICAgICAgICAoKHZhbHVlICogdGhpcy5wcmVjaXNpb24gLSB0aGlzLnN0ZXAgKiB0aGlzLnByZWNpc2lvbikgLyB0aGlzLnByZWNpc2lvbikudG9GaXhlZChcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5udW1iZXJPZkRlY2ltYWxQbGFjZXMsXG4gICAgICAgICAgICAgICAgKSxcbiAgICAgICAgICAgICk7XG5cbiAgICAgICAgICAgIGlmIChwb3RlbnRpYWxWYWx1ZSA+PSB0aGlzLm1pblF1YW50aXR5KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5pbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICAgICAgdGhpcy50cmlnZ2VySW5wdXRFdmVudCgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRyaWdnZXJJbnB1dEV2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0LmRpc3BhdGNoRXZlbnQodGhpcy5ldmVudENoYW5nZSk7XG4gICAgICAgIHRoaXMuaW5wdXQuZGlzcGF0Y2hFdmVudCh0aGlzLmV2ZW50SW5wdXQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBkZWxheVRvU3VibWl0KCk6IHZvaWQge1xuICAgICAgICBjbGVhclRpbWVvdXQodGhpcy50aW1lb3V0KTtcbiAgICAgICAgdGhpcy50aW1lb3V0ID0gd2luZG93LnNldFRpbWVvdXQoKCkgPT4gdGhpcy5vblN1Ym1pdCgpLCB0aGlzLmR1cmF0aW9uKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TdWJtaXQoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnZhbHVlICE9PSB0aGlzLmdldFZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LmZvcm0uc3VibWl0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duKGV2ZW50OiBLZXlib2FyZEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmIChldmVudC5rZXkgPT09ICdFbnRlcicpIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1pblF1YW50aXR5KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5pbnB1dC5nZXRBdHRyaWJ1dGUoJ21pbicpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1heFF1YW50aXR5KCk6IG51bWJlciB7XG4gICAgICAgIGNvbnN0IG1heCA9IE51bWJlcih0aGlzLmlucHV0LmdldEF0dHJpYnV0ZSgnbWF4JykpO1xuXG4gICAgICAgIHJldHVybiBtYXggPiAwICYmIG1heCA+IHRoaXMubWluUXVhbnRpdHkgPyBtYXggOiBJbmZpbml0eTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHN0ZXAoKTogbnVtYmVyIHtcbiAgICAgICAgY29uc3Qgc3RlcCA9IE51bWJlcih0aGlzLmlucHV0LmdldEF0dHJpYnV0ZSgnc3RlcCcpKTtcblxuICAgICAgICByZXR1cm4gc3RlcCA+IDAgPyBzdGVwIDogMTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGdldFZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5pbnB1dC52YWx1ZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhdXRvVXBkYXRlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gISF0aGlzLmlucHV0LmRhdGFzZXQuYXV0b1VwZGF0ZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzQXZhaWxhYmxlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gIXRoaXMuaW5wdXQuZGlzYWJsZWQgJiYgIXRoaXMuaW5wdXQucmVhZE9ubHk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwcmVjaXNpb24oKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcihgMSR7JzAnLnJlcGVhdCh0aGlzLm51bWJlck9mRGVjaW1hbFBsYWNlcyl9YCk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==