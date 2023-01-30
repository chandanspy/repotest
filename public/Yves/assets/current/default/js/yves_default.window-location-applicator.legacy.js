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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var CatalogPage_components_molecules_window_location_applicator_window_location_applicator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! CatalogPage/components/molecules/window-location-applicator/window-location-applicator */ "./vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.ts");




var WindowLocationApplicator = /*#__PURE__*/function (_WindowLocationApplic) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(WindowLocationApplicator, _WindowLocationApplic);

  function WindowLocationApplicator() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _WindowLocationApplic.call.apply(_WindowLocationApplic, [this].concat(args)) || this;
    _this.sortTriggers = void 0;
    return _this;
  }

  var _proto = WindowLocationApplicator.prototype;

  _proto.init = function init() {
    this.sortTriggers = Array.from(document.getElementsByClassName(this.sortTriggerClassName));

    _WindowLocationApplic.prototype.init.call(this);
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.sortTriggers.forEach(function (element) {
      element.addEventListener('change', function (event) {
        return _this2.onTriggerEvent(event);
      });
    });

    _WindowLocationApplic.prototype.mapEvents.call(this);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(WindowLocationApplicator, [{
    key: "sortTriggerClassName",
    get: function get() {
      return this.getAttribute('sort-trigger-class-name');
    }
  }]);

  return WindowLocationApplicator;
}(CatalogPage_components_molecules_window_location_applicator_window_location_applicator__WEBPACK_IMPORTED_MODULE_2__["default"]);



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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var WindowLocationApplicator = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(WindowLocationApplicator, _Component);

  function WindowLocationApplicator() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.form = void 0;
    _this.triggers = void 0;
    return _this;
  }

  var _proto = WindowLocationApplicator.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.form = document.getElementsByClassName(this.formClassName)[0];
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggers.forEach(function (element) {
      element.addEventListener('click', function (event) {
        return _this2.onTriggerEvent(event);
      });
    });
  };

  _proto.onTriggerEvent = function onTriggerEvent(event) {
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
  };

  _proto.getQueryString = function getQueryString(categoryUrl) {
    if (categoryUrl === void 0) {
      categoryUrl = window.location.pathname;
    }

    var formData = new FormData(this.form);
    var data = new URLSearchParams(formData);
    formData.forEach(function (value, key) {
      if (value.length) {
        return;
      }

      data.delete(key);
    });
    this.setWindowLocation(categoryUrl, data.toString());
  };

  _proto.getQueryStringAlternative = function getQueryStringAlternative(categoryUrl) {
    if (categoryUrl === void 0) {
      categoryUrl = window.location.pathname;
    }

    var inputFields = Array.from(this.form.getElementsByTagName('input'));
    var selectFields = Array.from(this.form.getElementsByTagName('select'));
    var filteredInputFields = inputFields.filter(function (input) {
      return (input.checked || input.type === 'number' || input.type === 'hidden') && !input.disabled;
    });
    var formFields = [].concat(filteredInputFields, selectFields);
    var data = formFields.reduce(function (accumulator, field) {
      if (field.name && field.value) {
        accumulator += "&" + field.name + "=" + field.value;
      }

      return accumulator;
    }, '').slice(1);
    this.setWindowLocation(categoryUrl, encodeURI(data));
  };

  _proto.setWindowLocation = function setWindowLocation(categoryUrl, data) {
    window.location.href = categoryUrl + "?" + data;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(WindowLocationApplicator, [{
    key: "formClassName",
    get: function get() {
      return this.getAttribute('form-class-name');
    }
  }, {
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }]);

  return WindowLocationApplicator;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ2F0YWxvZ1BhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NhdGFsb2ctcGFnZS9zcmMvU3ByeWtlclNob3AvWXZlcy9DYXRhbG9nUGFnZS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3dpbmRvdy1sb2NhdGlvbi1hcHBsaWNhdG9yL3dpbmRvdy1sb2NhdGlvbi1hcHBsaWNhdG9yLnRzIl0sIm5hbWVzIjpbIldpbmRvd0xvY2F0aW9uQXBwbGljYXRvciIsInNvcnRUcmlnZ2VycyIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJzb3J0VHJpZ2dlckNsYXNzTmFtZSIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJlbGVtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyRXZlbnQiLCJnZXRBdHRyaWJ1dGUiLCJXaW5kb3dMb2NhdGlvbkFwcGxpY2F0b3JDb3JlIiwiZm9ybSIsInRyaWdnZXJzIiwicmVhZHlDYWxsYmFjayIsImZvcm1DbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwiY2F0ZWdvcnlVcmwiLCJjdXJyZW50VGFyZ2V0IiwiaXNGb3JtRGF0YSIsIkZvcm1EYXRhIiwicHJvdG90eXBlIiwiZ2V0IiwiaXNVUkxTZWFyY2hQYXJhbXMiLCJVUkxTZWFyY2hQYXJhbXMiLCJnZXRRdWVyeVN0cmluZyIsImdldFF1ZXJ5U3RyaW5nQWx0ZXJuYXRpdmUiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInBhdGhuYW1lIiwiZm9ybURhdGEiLCJkYXRhIiwidmFsdWUiLCJrZXkiLCJsZW5ndGgiLCJkZWxldGUiLCJzZXRXaW5kb3dMb2NhdGlvbiIsInRvU3RyaW5nIiwiaW5wdXRGaWVsZHMiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsInNlbGVjdEZpZWxkcyIsImZpbHRlcmVkSW5wdXRGaWVsZHMiLCJmaWx0ZXIiLCJpbnB1dCIsImNoZWNrZWQiLCJ0eXBlIiwiZGlzYWJsZWQiLCJmb3JtRmllbGRzIiwicmVkdWNlIiwiYWNjdW11bGF0b3IiLCJmaWVsZCIsIm5hbWUiLCJzbGljZSIsImVuY29kZVVSSSIsImhyZWYiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLHdCOzs7Ozs7Ozs7OztVQUNQQyxZOzs7Ozs7U0FFQUMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLRCxZQUFMLEdBQXlDRSxLQUFLLENBQUNDLElBQU4sQ0FBV0MsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLQyxvQkFBckMsQ0FBWCxDQUF6Qzs7QUFFQSxvQ0FBTUwsSUFBTjtBQUNILEc7O1NBRVNNLFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS1AsWUFBTCxDQUFrQlEsT0FBbEIsQ0FBMEIsVUFBQ0MsT0FBRCxFQUFnQztBQUN0REEsYUFBTyxDQUFDQyxnQkFBUixDQUF5QixRQUF6QixFQUFtQyxVQUFDQyxLQUFEO0FBQUEsZUFBa0IsTUFBSSxDQUFDQyxjQUFMLENBQW9CRCxLQUFwQixDQUFsQjtBQUFBLE9BQW5DO0FBQ0gsS0FGRDs7QUFJQSxvQ0FBTUosU0FBTjtBQUNILEc7Ozs7U0FFRCxlQUE2QztBQUN6QyxhQUFPLEtBQUtNLFlBQUwsQ0FBa0IseUJBQWxCLENBQVA7QUFDSDs7OztFQW5CaURDLDhIOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0Z0RDs7SUFFcUJmLHdCOzs7Ozs7Ozs7OztVQUNQZ0IsSTtVQUNBQyxROzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCaEIsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLYyxJQUFMLEdBQTZCWCxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUthLGFBQXJDLEVBQW9ELENBQXBELENBQTdCO0FBQ0EsU0FBS0YsUUFBTCxHQUFxQ2QsS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS2MsZ0JBQXJDLENBQVgsQ0FBckM7QUFFQSxTQUFLWixTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLUyxRQUFMLENBQWNSLE9BQWQsQ0FBc0IsVUFBQ0MsT0FBRCxFQUFnQztBQUNsREEsYUFBTyxDQUFDQyxnQkFBUixDQUF5QixPQUF6QixFQUFrQyxVQUFDQyxLQUFEO0FBQUEsZUFBa0IsTUFBSSxDQUFDQyxjQUFMLENBQW9CRCxLQUFwQixDQUFsQjtBQUFBLE9BQWxDO0FBQ0gsS0FGRDtBQUdILEc7O1NBRVNDLGMsR0FBVix3QkFBeUJELEtBQXpCLEVBQTZDO0FBQ3pDLFFBQU1TLFdBQVcsR0FBdUJULEtBQUssQ0FBQ1UsYUFBMUIsQ0FBeUNSLFlBQXpDLENBQXNELFVBQXRELENBQXBCO0FBQ0E7O0FBQ0EsUUFBTVMsVUFBVSxHQUFHLE9BQU9DLFFBQVAsS0FBb0IsV0FBcEIsSUFBbUMsT0FBT0EsUUFBUSxDQUFDQyxTQUFULENBQW1CQyxHQUExQixLQUFrQyxXQUF4RjtBQUNBLFFBQU1DLGlCQUFpQixHQUNuQixPQUFPQyxlQUFQLEtBQTJCLFdBQTNCLElBQTBDLE9BQU9BLGVBQWUsQ0FBQ0gsU0FBaEIsQ0FBMEJDLEdBQWpDLEtBQXlDLFdBRHZGO0FBRUE7O0FBRUEsUUFBSUgsVUFBVSxJQUFJSSxpQkFBbEIsRUFBcUM7QUFDakMsV0FBS0UsY0FBTCxDQUFvQlIsV0FBVyxHQUFHQSxXQUFILEdBQWlCLEVBQWhEO0FBRUE7QUFDSDs7QUFFRCxTQUFLUyx5QkFBTCxDQUErQlQsV0FBVyxHQUFHQSxXQUFILEdBQWlCLEVBQTNEO0FBQ0gsRzs7U0FFU1EsYyxHQUFWLHdCQUF5QlIsV0FBekIsRUFBK0U7QUFBQSxRQUF0REEsV0FBc0Q7QUFBdERBLGlCQUFzRCxHQUFoQ1UsTUFBTSxDQUFDQyxRQUFQLENBQWdCQyxRQUFnQjtBQUFBOztBQUMzRSxRQUFNQyxRQUFRLEdBQUcsSUFBSVYsUUFBSixDQUFhLEtBQUtSLElBQWxCLENBQWpCO0FBQ0EsUUFBTW1CLElBQUksR0FBRyxJQUFJUCxlQUFKLENBQXFDTSxRQUFyQyxDQUFiO0FBRUFBLFlBQVEsQ0FBQ3pCLE9BQVQsQ0FBaUIsVUFBQzJCLEtBQUQsRUFBZ0JDLEdBQWhCLEVBQWdDO0FBQzdDLFVBQUlELEtBQUssQ0FBQ0UsTUFBVixFQUFrQjtBQUNkO0FBQ0g7O0FBRURILFVBQUksQ0FBQ0ksTUFBTCxDQUFZRixHQUFaO0FBQ0gsS0FORDtBQVFBLFNBQUtHLGlCQUFMLENBQXVCbkIsV0FBdkIsRUFBb0NjLElBQUksQ0FBQ00sUUFBTCxFQUFwQztBQUNILEc7O1NBRVNYLHlCLEdBQVYsbUNBQW9DVCxXQUFwQyxFQUEwRjtBQUFBLFFBQXREQSxXQUFzRDtBQUF0REEsaUJBQXNELEdBQWhDVSxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLFFBQWdCO0FBQUE7O0FBQ3RGLFFBQU1TLFdBQVcsR0FBdUJ2QyxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLWSxJQUFMLENBQVUyQixvQkFBVixDQUErQixPQUEvQixDQUFYLENBQXhDO0FBQ0EsUUFBTUMsWUFBWSxHQUF3QnpDLEtBQUssQ0FBQ0MsSUFBTixDQUFXLEtBQUtZLElBQUwsQ0FBVTJCLG9CQUFWLENBQStCLFFBQS9CLENBQVgsQ0FBMUM7QUFFQSxRQUFNRSxtQkFBbUIsR0FBR0gsV0FBVyxDQUFDSSxNQUFaLENBQW1CLFVBQUNDLEtBQUQsRUFBNkI7QUFDeEUsYUFBTyxDQUFDQSxLQUFLLENBQUNDLE9BQU4sSUFBaUJELEtBQUssQ0FBQ0UsSUFBTixLQUFlLFFBQWhDLElBQTRDRixLQUFLLENBQUNFLElBQU4sS0FBZSxRQUE1RCxLQUF5RSxDQUFDRixLQUFLLENBQUNHLFFBQXZGO0FBQ0gsS0FGMkIsQ0FBNUI7QUFHQSxRQUFNQyxVQUFVLGFBQU9OLG1CQUFQLEVBQStCRCxZQUEvQixDQUFoQjtBQUNBLFFBQU1ULElBQVksR0FBR2dCLFVBQVUsQ0FDMUJDLE1BRGdCLENBQ1QsVUFBQ0MsV0FBRCxFQUFzQkMsS0FBdEIsRUFBc0U7QUFDMUUsVUFBSUEsS0FBSyxDQUFDQyxJQUFOLElBQWNELEtBQUssQ0FBQ2xCLEtBQXhCLEVBQStCO0FBQzNCaUIsbUJBQVcsVUFBUUMsS0FBSyxDQUFDQyxJQUFkLFNBQXNCRCxLQUFLLENBQUNsQixLQUF2QztBQUNIOztBQUVELGFBQU9pQixXQUFQO0FBQ0gsS0FQZ0IsRUFPZCxFQVBjLEVBUWhCRyxLQVJnQixDQVFWLENBUlUsQ0FBckI7QUFVQSxTQUFLaEIsaUJBQUwsQ0FBdUJuQixXQUF2QixFQUFvQ29DLFNBQVMsQ0FBQ3RCLElBQUQsQ0FBN0M7QUFDSCxHOztTQUVTSyxpQixHQUFWLDJCQUE0Qm5CLFdBQTVCLEVBQWlEYyxJQUFqRCxFQUFxRTtBQUNqRUosVUFBTSxDQUFDQyxRQUFQLENBQWdCMEIsSUFBaEIsR0FBMEJyQyxXQUExQixTQUF5Q2MsSUFBekM7QUFDSCxHOzs7O1NBRUQsZUFBc0M7QUFDbEMsYUFBTyxLQUFLckIsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7OztFQWxGaUQ2QywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC53aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgV2luZG93TG9jYXRpb25BcHBsaWNhdG9yQ29yZSBmcm9tICdDYXRhbG9nUGFnZS9jb21wb25lbnRzL21vbGVjdWxlcy93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvci93aW5kb3ctbG9jYXRpb24tYXBwbGljYXRvcic7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFdpbmRvd0xvY2F0aW9uQXBwbGljYXRvciBleHRlbmRzIFdpbmRvd0xvY2F0aW9uQXBwbGljYXRvckNvcmUge1xuICAgIHByb3RlY3RlZCBzb3J0VHJpZ2dlcnM6IEhUTUxTZWxlY3RFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zb3J0VHJpZ2dlcnMgPSA8SFRNTFNlbGVjdEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5zb3J0VHJpZ2dlckNsYXNzTmFtZSkpO1xuXG4gICAgICAgIHN1cGVyLmluaXQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNvcnRUcmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MU2VsZWN0RWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uVHJpZ2dlckV2ZW50KGV2ZW50KSk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIHN1cGVyLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc29ydFRyaWdnZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdzb3J0LXRyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBXaW5kb3dMb2NhdGlvbkFwcGxpY2F0b3IgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBmb3JtOiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MQnV0dG9uRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmZvcm1DbGFzc05hbWUpWzBdO1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxCdXR0b25FbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSkpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MQnV0dG9uRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyRXZlbnQoZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckV2ZW50KGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBjYXRlZ29yeVVybCA9ICg8SFRNTEJ1dHRvbkVsZW1lbnQ+ZXZlbnQuY3VycmVudFRhcmdldCkuZ2V0QXR0cmlidXRlKCdkYXRhLXVybCcpO1xuICAgICAgICAvKiB0c2xpbnQ6ZGlzYWJsZTogbm8tdW5ib3VuZC1tZXRob2QgKi9cbiAgICAgICAgY29uc3QgaXNGb3JtRGF0YSA9IHR5cGVvZiBGb3JtRGF0YSAhPT0gJ3VuZGVmaW5lZCcgJiYgdHlwZW9mIEZvcm1EYXRhLnByb3RvdHlwZS5nZXQgIT09ICd1bmRlZmluZWQnO1xuICAgICAgICBjb25zdCBpc1VSTFNlYXJjaFBhcmFtcyA9XG4gICAgICAgICAgICB0eXBlb2YgVVJMU2VhcmNoUGFyYW1zICE9PSAndW5kZWZpbmVkJyAmJiB0eXBlb2YgVVJMU2VhcmNoUGFyYW1zLnByb3RvdHlwZS5nZXQgIT09ICd1bmRlZmluZWQnO1xuICAgICAgICAvKiB0c2xpbnQ6ZW5hYmxlOiBuby11bmJvdW5kLW1ldGhvZCAqL1xuXG4gICAgICAgIGlmIChpc0Zvcm1EYXRhICYmIGlzVVJMU2VhcmNoUGFyYW1zKSB7XG4gICAgICAgICAgICB0aGlzLmdldFF1ZXJ5U3RyaW5nKGNhdGVnb3J5VXJsID8gY2F0ZWdvcnlVcmwgOiAnJyk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZ2V0UXVlcnlTdHJpbmdBbHRlcm5hdGl2ZShjYXRlZ29yeVVybCA/IGNhdGVnb3J5VXJsIDogJycpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRRdWVyeVN0cmluZyhjYXRlZ29yeVVybDogc3RyaW5nID0gd2luZG93LmxvY2F0aW9uLnBhdGhuYW1lKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGZvcm1EYXRhID0gbmV3IEZvcm1EYXRhKHRoaXMuZm9ybSk7XG4gICAgICAgIGNvbnN0IGRhdGEgPSBuZXcgVVJMU2VhcmNoUGFyYW1zKDxVUkxTZWFyY2hQYXJhbXM+Zm9ybURhdGEpO1xuXG4gICAgICAgIGZvcm1EYXRhLmZvckVhY2goKHZhbHVlOiBzdHJpbmcsIGtleTogc3RyaW5nKSA9PiB7XG4gICAgICAgICAgICBpZiAodmFsdWUubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBkYXRhLmRlbGV0ZShrZXkpO1xuICAgICAgICB9KTtcblxuICAgICAgICB0aGlzLnNldFdpbmRvd0xvY2F0aW9uKGNhdGVnb3J5VXJsLCBkYXRhLnRvU3RyaW5nKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRRdWVyeVN0cmluZ0FsdGVybmF0aXZlKGNhdGVnb3J5VXJsOiBzdHJpbmcgPSB3aW5kb3cubG9jYXRpb24ucGF0aG5hbWUpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaW5wdXRGaWVsZHMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5mb3JtLmdldEVsZW1lbnRzQnlUYWdOYW1lKCdpbnB1dCcpKTtcbiAgICAgICAgY29uc3Qgc2VsZWN0RmllbGRzID0gPEhUTUxTZWxlY3RFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmZvcm0uZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NlbGVjdCcpKTtcblxuICAgICAgICBjb25zdCBmaWx0ZXJlZElucHV0RmllbGRzID0gaW5wdXRGaWVsZHMuZmlsdGVyKChpbnB1dDogSFRNTElucHV0RWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgcmV0dXJuIChpbnB1dC5jaGVja2VkIHx8IGlucHV0LnR5cGUgPT09ICdudW1iZXInIHx8IGlucHV0LnR5cGUgPT09ICdoaWRkZW4nKSAmJiAhaW5wdXQuZGlzYWJsZWQ7XG4gICAgICAgIH0pO1xuICAgICAgICBjb25zdCBmb3JtRmllbGRzID0gWy4uLmZpbHRlcmVkSW5wdXRGaWVsZHMsIC4uLnNlbGVjdEZpZWxkc107XG4gICAgICAgIGNvbnN0IGRhdGE6IHN0cmluZyA9IGZvcm1GaWVsZHNcbiAgICAgICAgICAgIC5yZWR1Y2UoKGFjY3VtdWxhdG9yOiBzdHJpbmcsIGZpZWxkOiBIVE1MSW5wdXRFbGVtZW50IHwgSFRNTFNlbGVjdEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoZmllbGQubmFtZSAmJiBmaWVsZC52YWx1ZSkge1xuICAgICAgICAgICAgICAgICAgICBhY2N1bXVsYXRvciArPSBgJiR7ZmllbGQubmFtZX09JHtmaWVsZC52YWx1ZX1gO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIHJldHVybiBhY2N1bXVsYXRvcjtcbiAgICAgICAgICAgIH0sICcnKVxuICAgICAgICAgICAgLnNsaWNlKDEpO1xuXG4gICAgICAgIHRoaXMuc2V0V2luZG93TG9jYXRpb24oY2F0ZWdvcnlVcmwsIGVuY29kZVVSSShkYXRhKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldFdpbmRvd0xvY2F0aW9uKGNhdGVnb3J5VXJsOiBzdHJpbmcsIGRhdGE6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGAke2NhdGVnb3J5VXJsfT8ke2RhdGF9YDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGZvcm1DbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9