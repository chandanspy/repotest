(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["window-location-applicator"],{

/***/ "./src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts":
/*!******************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts ***!
  \******************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return WindowLocationApplicator; });
/* harmony import */ var CatalogPage_components_molecules_window_location_applicator_window_location_applicator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! CatalogPage/components/molecules/window-location-applicator/window-location-applicator */ "./vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts");

class WindowLocationApplicator extends CatalogPage_components_molecules_window_location_applicator_window_location_applicator__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.sortTriggers = void 0;
  }

  init() {
    this.sortTriggers = Array.from(document.getElementsByClassName(this.sortTriggerClassName));
    super.init();
  }

  mapEvents() {
    this.sortTriggers.forEach(element => {
      element.addEventListener('change', event => this.onTriggerEvent(event));
    });
    super.mapEvents();
  }

  get sortTriggerClassName() {
    return this.getAttribute('sort-trigger-class-name');
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts ***!
  \***********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return WindowLocationApplicator; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class WindowLocationApplicator extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.form = void 0;
    this.triggers = void 0;
  }

  readyCallback() {}

  init() {
    this.form = document.getElementsByClassName(this.formClassName)[0];
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.mapEvents();
  }

  mapEvents() {
    this.triggers.forEach(element => {
      element.addEventListener('click', event => this.onTriggerEvent(event));
    });
  }

  onTriggerEvent(event) {
    var categoryUrl = event.currentTarget.getAttribute('data-url');
    /* tslint:disable: no-unbound-method */

    var isFormData = typeof FormData !== 'undefined' && typeof FormData.prototype.get !== 'undefined';
    var isURLSearchParams = typeof URLSearchParams !== 'undefined' && typeof URLSearchParams.prototype.get !== 'undefined';
    /* tslint:enable: no-unbound-method */

    if (isFormData && isURLSearchParams) {
      this.getQueryString(categoryUrl ? categoryUrl : '');
      return;
    }

    this.getQueryStringAlternative(categoryUrl ? categoryUrl : '');
  }

  getQueryString(categoryUrl) {
    if (categoryUrl === void 0) {
      categoryUrl = window.location.pathname;
    }

    var formData = new FormData(this.form);
    var data = new URLSearchParams(formData);
    formData.forEach((value, key) => {
      if (value.length) {
        return;
      }

      data.delete(key);
    });
    this.setWindowLocation(categoryUrl, data.toString());
  }

  getQueryStringAlternative(categoryUrl) {
    if (categoryUrl === void 0) {
      categoryUrl = window.location.pathname;
    }

    var inputFields = Array.from(this.form.getElementsByTagName('input'));
    var selectFields = Array.from(this.form.getElementsByTagName('select'));
    var filteredInputFields = inputFields.filter(input => {
      return (input.checked || input.type === 'number' || input.type === 'hidden') && !input.disabled;
    });
    var formFields = [...filteredInputFields, ...selectFields];
    var data = formFields.reduce((accumulator, field) => {
      if (field.name && field.value) {
        accumulator += "&" + field.name + "=" + field.value;
      }

      return accumulator;
    }, '').slice(1);
    this.setWindowLocation(categoryUrl, encodeURI(data));
  }

  setWindowLocation(categoryUrl, data) {
    window.location.href = categoryUrl + "?" + data;
  }

  get formClassName() {
    return this.getAttribute('form-class-name');
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ2F0YWxvZ1BhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NhdGFsb2ctcGFnZS9zcmMvU3ByeWtlclNob3AvWXZlcy9DYXRhbG9nUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3dpbmRvdy1sb2NhdGlvbi1hcHBsaWNhdG9yL3dpbmRvdy1sb2NhdGlvbi1hcHBsaWNhdG9yLnRzIl0sIm5hbWVzIjpbIldpbmRvd0xvY2F0aW9uQXBwbGljYXRvciIsIldpbmRvd0xvY2F0aW9uQXBwbGljYXRvckNvcmUiLCJzb3J0VHJpZ2dlcnMiLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwic29ydFRyaWdnZXJDbGFzc05hbWUiLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwiZWxlbWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uVHJpZ2dlckV2ZW50IiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50IiwiZm9ybSIsInRyaWdnZXJzIiwicmVhZHlDYWxsYmFjayIsImZvcm1DbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwiY2F0ZWdvcnlVcmwiLCJjdXJyZW50VGFyZ2V0IiwiaXNGb3JtRGF0YSIsIkZvcm1EYXRhIiwicHJvdG90eXBlIiwiZ2V0IiwiaXNVUkxTZWFyY2hQYXJhbXMiLCJVUkxTZWFyY2hQYXJhbXMiLCJnZXRRdWVyeVN0cmluZyIsImdldFF1ZXJ5U3RyaW5nQWx0ZXJuYXRpdmUiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInBhdGhuYW1lIiwiZm9ybURhdGEiLCJkYXRhIiwidmFsdWUiLCJrZXkiLCJsZW5ndGgiLCJkZWxldGUiLCJzZXRXaW5kb3dMb2NhdGlvbiIsInRvU3RyaW5nIiwiaW5wdXRGaWVsZHMiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsInNlbGVjdEZpZWxkcyIsImZpbHRlcmVkSW5wdXRGaWVsZHMiLCJmaWx0ZXIiLCJpbnB1dCIsImNoZWNrZWQiLCJ0eXBlIiwiZGlzYWJsZWQiLCJmb3JtRmllbGRzIiwicmVkdWNlIiwiYWNjdW11bGF0b3IiLCJmaWVsZCIsIm5hbWUiLCJzbGljZSIsImVuY29kZVVSSSIsImhyZWYiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLHdCQUFOLFNBQXVDQyw4SEFBdkMsQ0FBb0U7QUFBQTtBQUFBO0FBQUEsU0FDckVDLFlBRHFFO0FBQUE7O0FBR3JFQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0QsWUFBTCxHQUF5Q0UsS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0Msb0JBQXJDLENBQVgsQ0FBekM7QUFFQSxVQUFNTCxJQUFOO0FBQ0g7O0FBRVNNLFdBQVMsR0FBUztBQUN4QixTQUFLUCxZQUFMLENBQWtCUSxPQUFsQixDQUEyQkMsT0FBRCxJQUFnQztBQUN0REEsYUFBTyxDQUFDQyxnQkFBUixDQUF5QixRQUF6QixFQUFvQ0MsS0FBRCxJQUFrQixLQUFLQyxjQUFMLENBQW9CRCxLQUFwQixDQUFyRDtBQUNILEtBRkQ7QUFJQSxVQUFNSixTQUFOO0FBQ0g7O0FBRWlDLE1BQXBCRCxvQkFBb0IsR0FBVztBQUN6QyxXQUFPLEtBQUtPLFlBQUwsQ0FBa0IseUJBQWxCLENBQVA7QUFDSDs7QUFuQjhFLEM7Ozs7Ozs7Ozs7OztBQ0ZuRjtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1mLHdCQUFOLFNBQXVDZ0IsK0RBQXZDLENBQWlEO0FBQUE7QUFBQTtBQUFBLFNBQ2xEQyxJQURrRDtBQUFBLFNBRWxEQyxRQUZrRDtBQUFBOztBQUlsREMsZUFBYSxHQUFTLENBQUU7O0FBRXhCaEIsTUFBSSxHQUFTO0FB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Q0EsUUFBTVQsSUFBWSxHQUFHZ0IsVUFBVSxDQUMxQkMsTUFEZ0IsQ0FDVCxDQUFDQyxXQUFELEVBQXNCQyxLQUF0QixLQUFzRTtBQUMxRSxVQUFJQSxLQUFLLENBQUNDLElBQU4sSUFBY0QsS0FBSyxDQUFDbEIsS0FBeEIsRUFBK0I7QUFDM0JpQixtQkFBVyxVQUFRQyxLQUFLLENBQUNDLElBQWQsU0FBc0JELEtBQUssQ0FBQ2xCLEtBQXZDO0FBQ0g7O0FBRUQsYUFBT2lCLFdBQVA7QUFDSCxLQVBnQixFQU9kLEVBUGMsRUFRaEJHLEtBUmdCLENBUVYsQ0FSVSxDQUFyQjtBQVVBLFNBQUtoQixpQkFBTCxDQUF1Qm5CLFdBQXZCLEVBQW9Db0MsU0FBUyxDQUFDdEIsSUFBRCxDQUE3QztBQUNIOztBQUVTSyxtQkFBaUIsQ0FBQ25CLFdBQUQsRUFBc0JjLElBQXRCLEVBQTBDO0FBQ2pFSixVQUFNLENBQUNDLFFBQVAsQ0FBZ0IwQixJQUFoQixHQUEwQnJDLFdBQTFCLFNBQXlDYyxJQUF6QztBQUNIOztBQUUwQixNQUFiaEIsYUFBYSxHQUFXO0FBQ2xDLFdBQU8sS0FBS0wsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOztBQUU2QixNQUFoQk0sZ0JBQWdCLEdBQVc7QUFDckMsV0FBTyxLQUFLTixZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7O0FBbEYyRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LndpbmRvdy1sb2NhdGlvbi1hcHBsaWNhdG9yLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFdpbmRvd0xvY2F0aW9uQXBwbGljYXRvckNvcmUgZnJvbSAnQ2F0YWxvZ1BhZ2UvY29tcG9uZW50cy9tb2xlY3VsZXMvd2luZG93LWxvY2F0aW9uLWFwcGxpY2F0b3Ivd2luZG93LWxvY2F0aW9uLWFwcGxpY2F0b3InO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBXaW5kb3dMb2NhdGlvbkFwcGxpY2F0b3IgZXh0ZW5kcyBXaW5kb3dMb2NhdGlvbkFwcGxpY2F0b3JDb3JlIHtcbiAgICBwcm90ZWN0ZWQgc29ydFRyaWdnZXJzOiBIVE1MU2VsZWN0RWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc29ydFRyaWdnZXJzID0gPEhUTUxTZWxlY3RFbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuc29ydFRyaWdnZXJDbGFzc05hbWUpKTtcblxuICAgICAgICBzdXBlci5pbml0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zb3J0VHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTFNlbGVjdEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJFdmVudChldmVudCkpO1xuICAgICAgICB9KTtcblxuICAgICAgICBzdXBlci5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNvcnRUcmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnc29ydC10cmlnZ2VyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgV2luZG93TG9jYXRpb25BcHBsaWNhdG9yIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgZm9ybTogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEJ1dHRvbkVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5mb3JtQ2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MQnV0dG9uRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRyaWdnZXJDbGFzc05hbWUpKTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoZWxlbWVudDogSFRNTEJ1dHRvbkVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uVHJpZ2dlckV2ZW50KGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJFdmVudChldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY2F0ZWdvcnlVcmwgPSAoPEhUTUxCdXR0b25FbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQpLmdldEF0dHJpYnV0ZSgnZGF0YS11cmwnKTtcbiAgICAgICAgLyogdHNsaW50OmRpc2FibGU6IG5vLXVuYm91bmQtbWV0aG9kICovXG4gICAgICAgIGNvbnN0IGlzRm9ybURhdGEgPSB0eXBlb2YgRm9ybURhdGEgIT09ICd1bmRlZmluZWQnICYmIHR5cGVvZiBGb3JtRGF0YS5wcm90b3R5cGUuZ2V0ICE9PSAndW5kZWZpbmVkJztcbiAgICAgICAgY29uc3QgaXNVUkxTZWFyY2hQYXJhbXMgPVxuICAgICAgICAgICAgdHlwZW9mIFVSTFNlYXJjaFBhcmFtcyAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIFVSTFNlYXJjaFBhcmFtcy5wcm90b3R5cGUuZ2V0ICE9PSAndW5kZWZpbmVkJztcbiAgICAgICAgLyogdHNsaW50OmVuYWJsZTogbm8tdW5ib3VuZC1tZXRob2QgKi9cblxuICAgICAgICBpZiAoaXNGb3JtRGF0YSAmJiBpc1VSTFNlYXJjaFBhcmFtcykge1xuICAgICAgICAgICAgdGhpcy5nZXRRdWVyeVN0cmluZyhjYXRlZ29yeVVybCA/IGNhdGVnb3J5VXJsIDogJycpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmdldFF1ZXJ5U3RyaW5nQWx0ZXJuYXRpdmUoY2F0ZWdvcnlVcmwgPyBjYXRlZ29yeVVybCA6ICcnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0UXVlcnlTdHJpbmcoY2F0ZWdvcnlVcmw6IHN0cmluZyA9IHdpbmRvdy5sb2NhdGlvbi5wYXRobmFtZSk6IHZvaWQge1xuICAgICAgICBjb25zdCBmb3JtRGF0YSA9IG5ldyBGb3JtRGF0YSh0aGlzLmZvcm0pO1xuICAgICAgICBjb25zdCBkYXRhID0gbmV3IFVSTFNlYXJjaFBhcmFtcyg8VVJMU2VhcmNoUGFyYW1zPmZvcm1EYXRhKTtcblxuICAgICAgICBmb3JtRGF0YS5mb3JFYWNoKCh2YWx1ZTogc3RyaW5nLCBrZXk6IHN0cmluZykgPT4ge1xuICAgICAgICAgICAgaWYgKHZhbHVlLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgZGF0YS5kZWxldGUoa2V5KTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgdGhpcy5zZXRXaW5kb3dMb2NhdGlvbihjYXRlZ29yeVVybCwgZGF0YS50b1N0cmluZygpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0UXVlcnlTdHJpbmdBbHRlcm5hdGl2ZShjYXRlZ29yeVVybDogc3RyaW5nID0gd2luZG93LmxvY2F0aW9uLnBhdGhuYW1lKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlucHV0RmllbGRzID0gPEhUTUxJbnB1dEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZm9ybS5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaW5wdXQnKSk7XG4gICAgICAgIGNvbnN0IHNlbGVjdEZpZWxkcyA9IDxIVE1MU2VsZWN0RWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5mb3JtLmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzZWxlY3QnKSk7XG5cbiAgICAgICAgY29uc3QgZmlsdGVyZWRJbnB1dEZpZWxkcyA9IGlucHV0RmllbGRzLmZpbHRlcigoaW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHJldHVybiAoaW5wdXQuY2hlY2tlZCB8fCBpbnB1dC50eXBlID09PSAnbnVtYmVyJyB8fCBpbnB1dC50eXBlID09PSAnaGlkZGVuJykgJiYgIWlucHV0LmRpc2FibGVkO1xuICAgICAgICB9KTtcbiAgICAgICAgY29uc3QgZm9ybUZpZWxkcyA9IFsuLi5maWx0ZXJlZElucHV0RmllbGRzLCAuLi5zZWxlY3RGaWVsZHNdO1xuICAgICAgICBjb25zdCBkYXRhOiBzdHJpbmcgPSBmb3JtRmllbGRzXG4gICAgICAgICAgICAucmVkdWNlKChhY2N1bXVsYXRvcjogc3RyaW5nLCBmaWVsZDogSFRNTElucHV0RWxlbWVudCB8IEhUTUxTZWxlY3RFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgaWYgKGZpZWxkLm5hbWUgJiYgZmllbGQudmFsdWUpIHtcbiAgICAgICAgICAgICAgICAgICAgYWNjdW11bGF0b3IgKz0gYCYke2ZpZWxkLm5hbWV9PSR7ZmllbGQudmFsdWV9YDtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICByZXR1cm4gYWNjdW11bGF0b3I7XG4gICAgICAgICAgICB9LCAnJylcbiAgICAgICAgICAgIC5zbGljZSgxKTtcblxuICAgICAgICB0aGlzLnNldFdpbmRvd0xvY2F0aW9uKGNhdGVnb3J5VXJsLCBlbmNvZGVVUkkoZGF0YSkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRXaW5kb3dMb2NhdGlvbihjYXRlZ29yeVVybDogc3RyaW5nLCBkYXRhOiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSBgJHtjYXRlZ29yeVVybH0/JHtkYXRhfWA7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBmb3JtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZm9ybS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==