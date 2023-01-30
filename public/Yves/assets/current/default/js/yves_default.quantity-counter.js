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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class QuantityCounter extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.incrementButton = void 0;
    this.decrementButton = void 0;
    this.input = void 0;
    this.value = void 0;
    this.duration = 1000;
    this.timeout = 0;
    this.eventChange = new Event('change');
    this.eventInput = new Event('input');
    this.numberOfDecimalPlaces = 10;
  }

  readyCallback() {}

  init() {
    this.incrementButton = this.getElementsByClassName(this.jsName + "__button-increment")[0];
    this.decrementButton = this.getElementsByClassName(this.jsName + "__button-decrement")[0];
    this.input = this.getElementsByClassName(this.jsName + "__input")[0];
    this.value = this.getValue;
    this.mapEvents();
  }

  mapEvents() {
    this.decrementButton.addEventListener('click', event => this.decrementValue(event));
    this.incrementButton.addEventListener('click', event => this.incrementValue(event));
    this.input.addEventListener('keydown', event => this.onKeyDown(event));

    if (this.autoUpdate) {
      this.input.addEventListener('change', () => this.delayToSubmit());
    }
  }

  incrementValue(event) {
    event.preventDefault();

    if (this.isAvailable) {
      var value = Number(this.input.value);
      var potentialValue = Number(((value * this.precision + this.step * this.precision) / this.precision).toFixed(this.numberOfDecimalPlaces));

      if (value < this.maxQuantity) {
        this.input.value = potentialValue.toString();
        this.triggerInputEvent();
      }
    }
  }

  decrementValue(event) {
    event.preventDefault();

    if (this.isAvailable) {
      var value = Number(this.input.value);
      var potentialValue = Number(((value * this.precision - this.step * this.precision) / this.precision).toFixed(this.numberOfDecimalPlaces));

      if (potentialValue >= this.minQuantity) {
        this.input.value = potentialValue.toString();
        this.triggerInputEvent();
      }
    }
  }

  triggerInputEvent() {
    this.input.dispatchEvent(this.eventChange);
    this.input.dispatchEvent(this.eventInput);
  }

  delayToSubmit() {
    clearTimeout(this.timeout);
    this.timeout = window.setTimeout(() => this.onSubmit(), this.duration);
  }

  onSubmit() {
    if (this.value !== this.getValue) {
      this.input.form.submit();
    }
  }

  onKeyDown(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
    }
  }

  get minQuantity() {
    return Number(this.input.getAttribute('min'));
  }

  get maxQuantity() {
    var max = Number(this.input.getAttribute('max'));
    return max > 0 && max > this.minQuantity ? max : Infinity;
  }

  get step() {
    var step = Number(this.input.getAttribute('step'));
    return step > 0 ? step : 1;
  }

  get getValue() {
    return Number(this.input.value);
  }

  get autoUpdate() {
    return !!this.input.dataset.autoUpdate;
  }

  get isAvailable() {
    return !this.input.disabled && !this.input.readOnly;
  }

  get precision() {
    return Number("1" + '0'.repeat(this.numberOfDecimalPlaces));
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcXVhbnRpdHktY291bnRlci9xdWFudGl0eS1jb3VudGVyLnRzIl0sIm5hbWVzIjpbIlF1YW50aXR5Q291bnRlciIsIkNvbXBvbmVudCIsImluY3JlbWVudEJ1dHRvbiIsImRlY3JlbWVudEJ1dHRvbiIsImlucHV0IiwidmFsdWUiLCJkdXJhdGlvbiIsInRpbWVvdXQiLCJldmVudENoYW5nZSIsIkV2ZW50IiwiZXZlbnRJbnB1dCIsIm51bWJlck9mRGVjaW1hbFBsYWNlcyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImdldFZhbHVlIiwibWFwRXZlbnRzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50IiwiZGVjcmVtZW50VmFsdWUiLCJpbmNyZW1lbnRWYWx1ZSIsIm9uS2V5RG93biIsImF1dG9VcGRhdGUiLCJkZWxheVRvU3VibWl0IiwicHJldmVudERlZmF1bHQiLCJpc0F2YWlsYWJsZSIsIk51bWJlciIsInBvdGVudGlhbFZhbHVlIiwicHJlY2lzaW9uIiwic3RlcCIsInRvRml4ZWQiLCJtYXhRdWFudGl0eSIsInRvU3RyaW5nIiwidHJpZ2dlcklucHV0RXZlbnQiLCJtaW5RdWFudGl0eSIsImRpc3BhdGNoRXZlbnQiLCJjbGVhclRpbWVvdXQiLCJ3aW5kb3ciLCJzZXRUaW1lb3V0Iiwib25TdWJtaXQiLCJmb3JtIiwic3VibWl0Iiwia2V5IiwiZ2V0QXR0cmlidXRlIiwibWF4IiwiSW5maW5pdHkiLCJkYXRhc2V0IiwiZGlzYWJsZWQiLCJyZWFkT25seSIsInJlcGVhdCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsZUFBTixTQUE4QkMsK0RBQTlCLENBQXdDO0FBQUE7QUFBQTtBQUFBLFNBQ3pDQyxlQUR5QztBQUFB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Q0FBRCxDQUFuQjtBQUVBLFdBQU9kLElBQUksR0FBRyxDQUFQLEdBQVdBLElBQVgsR0FBa0IsQ0FBekI7QUFDSDs7QUFFcUIsTUFBUmQsUUFBUSxHQUFXO0FBQzdCLFdBQU9XLE1BQU0sQ0FBQyxLQUFLdkIsS0FBTCxDQUFXQyxLQUFaLENBQWI7QUFDSDs7QUFFdUIsTUFBVmtCLFVBQVUsR0FBWTtBQUNoQyxXQUFPLENBQUMsQ0FBQyxLQUFLbkIsS0FBTCxDQUFXMkMsT0FBWCxDQUFtQnhCLFVBQTVCO0FBQ0g7O0FBRXdCLE1BQVhHLFdBQVcsR0FBWTtBQUNqQyxXQUFPLENBQUMsS0FBS3RCLEtBQUwsQ0FBVzRDLFFBQVosSUFBd0IsQ0FBQyxLQUFLNUMsS0FBTCxDQUFXNkMsUUFBM0M7QUFDSDs7QUFFc0IsTUFBVHBCLFNBQVMsR0FBVztBQUM5QixXQUFPRixNQUFNLE9BQUssSUFBSXVCLE1BQUosQ0FBVyxLQUFLdkMscUJBQWhCLENBQUwsQ0FBYjtBQUNIOztBQXJIa0QsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5xdWFudGl0eS1jb3VudGVyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFF1YW50aXR5Q291bnRlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGluY3JlbWVudEJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGRlY3JlbWVudEJ1dHRvbjogSFRNTEJ1dHRvbkVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGlucHV0OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCB2YWx1ZTogbnVtYmVyO1xuICAgIHByb3RlY3RlZCBkdXJhdGlvbjogbnVtYmVyID0gMTAwMDtcbiAgICBwcm90ZWN0ZWQgdGltZW91dDogbnVtYmVyID0gMDtcbiAgICBwcm90ZWN0ZWQgZXZlbnRDaGFuZ2U6IEV2ZW50ID0gbmV3IEV2ZW50KCdjaGFuZ2UnKTtcbiAgICBwcm90ZWN0ZWQgZXZlbnRJbnB1dDogRXZlbnQgPSBuZXcgRXZlbnQoJ2lucHV0Jyk7XG4gICAgcHJvdGVjdGVkIG51bWJlck9mRGVjaW1hbFBsYWNlczogbnVtYmVyID0gMTA7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbmNyZW1lbnRCdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYnV0dG9uLWluY3JlbWVudGApWzBdO1xuICAgICAgICB0aGlzLmRlY3JlbWVudEJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19idXR0b24tZGVjcmVtZW50YClbMF07XG4gICAgICAgIHRoaXMuaW5wdXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dGApWzBdO1xuICAgICAgICB0aGlzLnZhbHVlID0gdGhpcy5nZXRWYWx1ZTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlY3JlbWVudEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMuZGVjcmVtZW50VmFsdWUoZXZlbnQpKTtcbiAgICAgICAgdGhpcy5pbmNyZW1lbnRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLmluY3JlbWVudFZhbHVlKGV2ZW50KSk7XG4gICAgICAgIHRoaXMuaW5wdXQuYWRkRXZlbnRMaXN0ZW5lcigna2V5ZG93bicsIChldmVudDogS2V5Ym9hcmRFdmVudCkgPT4gdGhpcy5vbktleURvd24oZXZlbnQpKTtcblxuICAgICAgICBpZiAodGhpcy5hdXRvVXBkYXRlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMuZGVsYXlUb1N1Ym1pdCgpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbmNyZW1lbnRWYWx1ZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgaWYgKHRoaXMuaXNBdmFpbGFibGUpIHtcbiAgICAgICAgICAgIGNvbnN0IHZhbHVlID0gTnVtYmVyKHRoaXMuaW5wdXQudmFsdWUpO1xuICAgICAgICAgICAgY29uc3QgcG90ZW50aWFsVmFsdWUgPSBOdW1iZXIoXG4gICAgICAgICAgICAgICAgKCh2YWx1ZSAqIHRoaXMucHJlY2lzaW9uICsgdGhpcy5zdGVwICogdGhpcy5wcmVjaXNpb24pIC8gdGhpcy5wcmVjaXNpb24pLnRvRml4ZWQoXG4gICAgICAgICAgICAgICAgICAgIHRoaXMubnVtYmVyT2ZEZWNpbWFsUGxhY2VzLFxuICAgICAgICAgICAgICAgICksXG4gICAgICAgICAgICApO1xuXG4gICAgICAgICAgICBpZiAodmFsdWUgPCB0aGlzLm1heFF1YW50aXR5KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5pbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICAgICAgdGhpcy50cmlnZ2VySW5wdXRFdmVudCgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGRlY3JlbWVudFZhbHVlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBpZiAodGhpcy5pc0F2YWlsYWJsZSkge1xuICAgICAgICAgICAgY29uc3QgdmFsdWUgPSBOdW1iZXIodGhpcy5pbnB1dC52YWx1ZSk7XG4gICAgICAgICAgICBjb25zdCBwb3RlbnRpYWxWYWx1ZSA9IE51bWJlcihcbiAgICAgICAgICAgICAgICAoKHZhbHVlICogdGhpcy5wcmVjaXNpb24gLSB0aGlzLnN0ZXAgKiB0aGlzLnByZWNpc2lvbikgLyB0aGlzLnByZWNpc2lvbikudG9GaXhlZChcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5udW1iZXJPZkRlY2ltYWxQbGFjZXMsXG4gICAgICAgICAgICAgICAgKSxcbiAgICAgICAgICAgICk7XG5cbiAgICAgICAgICAgIGlmIChwb3RlbnRpYWxWYWx1ZSA+PSB0aGlzLm1pblF1YW50aXR5KSB7XG4gICAgICAgICAgICAgICAgdGhpcy5pbnB1dC52YWx1ZSA9IHBvdGVudGlhbFZhbHVlLnRvU3RyaW5nKCk7XG4gICAgICAgICAgICAgICAgdGhpcy50cmlnZ2VySW5wdXRFdmVudCgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRyaWdnZXJJbnB1dEV2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0LmRpc3BhdGNoRXZlbnQodGhpcy5ldmVudENoYW5nZSk7XG4gICAgICAgIHRoaXMuaW5wdXQuZGlzcGF0Y2hFdmVudCh0aGlzLmV2ZW50SW5wdXQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBkZWxheVRvU3VibWl0KCk6IHZvaWQge1xuICAgICAgICBjbGVhclRpbWVvdXQodGhpcy50aW1lb3V0KTtcbiAgICAgICAgdGhpcy50aW1lb3V0ID0gd2luZG93LnNldFRpbWVvdXQoKCkgPT4gdGhpcy5vblN1Ym1pdCgpLCB0aGlzLmR1cmF0aW9uKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TdWJtaXQoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnZhbHVlICE9PSB0aGlzLmdldFZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmlucHV0LmZvcm0uc3VibWl0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25LZXlEb3duKGV2ZW50OiBLZXlib2FyZEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmIChldmVudC5rZXkgPT09ICdFbnRlcicpIHtcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1pblF1YW50aXR5KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5pbnB1dC5nZXRBdHRyaWJ1dGUoJ21pbicpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1heFF1YW50aXR5KCk6IG51bWJlciB7XG4gICAgICAgIGNvbnN0IG1heCA9IE51bWJlcih0aGlzLmlucHV0LmdldEF0dHJpYnV0ZSgnbWF4JykpO1xuXG4gICAgICAgIHJldHVybiBtYXggPiAwICYmIG1heCA+IHRoaXMubWluUXVhbnRpdHkgPyBtYXggOiBJbmZpbml0eTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHN0ZXAoKTogbnVtYmVyIHtcbiAgICAgICAgY29uc3Qgc3RlcCA9IE51bWJlcih0aGlzLmlucHV0LmdldEF0dHJpYnV0ZSgnc3RlcCcpKTtcblxuICAgICAgICByZXR1cm4gc3RlcCA+IDAgPyBzdGVwIDogMTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGdldFZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5pbnB1dC52YWx1ZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhdXRvVXBkYXRlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gISF0aGlzLmlucHV0LmRhdGFzZXQuYXV0b1VwZGF0ZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGlzQXZhaWxhYmxlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gIXRoaXMuaW5wdXQuZGlzYWJsZWQgJiYgIXRoaXMuaW5wdXQucmVhZE9ubHk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwcmVjaXNpb24oKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcihgMSR7JzAnLnJlcGVhdCh0aGlzLm51bWJlck9mRGVjaW1hbFBsYWNlcyl9YCk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==