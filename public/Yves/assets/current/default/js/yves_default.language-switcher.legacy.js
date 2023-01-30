(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["language-switcher"],{

/***/ "./src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.ts":
/*!***********************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.ts ***!
  \***********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LanguageSwitcher; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var LanguageSwitcher = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(LanguageSwitcher, _Component);

  function LanguageSwitcher() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.selectList = void 0;
    return _this;
  }

  var _proto = LanguageSwitcher.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.selectList = Array.from(document.getElementsByClassName("" + this.jsName));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.selectList.forEach(function (select) {
      select.addEventListener('change', function (event) {
        return _this2.onTriggerChange(event);
      });
    });
  };

  _proto.onTriggerChange = function onTriggerChange(event) {
    var selectTarget = event.currentTarget;

    if (this.hasUrl(selectTarget)) {
      window.location.assign(this.currentSelectValue(selectTarget));
    }
  };

  _proto.currentSelectValue = function currentSelectValue(select) {
    return select.options[select.selectedIndex].value;
  };

  _proto.hasUrl = function hasUrl(select) {
    return !!select.value;
  };

  return LanguageSwitcher;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvTGFuZ3VhZ2VTd2l0Y2hlcldpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2xhbmd1YWdlLXN3aXRjaGVyL2xhbmd1YWdlLXN3aXRjaGVyLnRzIl0sIm5hbWVzIjpbIkxhbmd1YWdlU3dpdGNoZXIiLCJzZWxlY3RMaXN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJmb3JFYWNoIiwic2VsZWN0IiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25UcmlnZ2VyQ2hhbmdlIiwic2VsZWN0VGFyZ2V0IiwiY3VycmVudFRhcmdldCIsImhhc1VybCIsIndpbmRvdyIsImxvY2F0aW9uIiwiYXNzaWduIiwiY3VycmVudFNlbGVjdFZhbHVlIiwib3B0aW9ucyIsInNlbGVjdGVkSW5kZXgiLCJ2YWx1ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsZ0I7Ozs7Ozs7Ozs7O1VBQ1BDLFU7Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0YsVUFBTCxHQUF1Q0csS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0Msc0JBQVQsTUFBbUMsS0FBS0MsTUFBeEMsQ0FBWCxDQUF2QztBQUVBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtSLFVBQUwsQ0FBZ0JTLE9BQWhCLENBQXdCLFVBQUNDLE1BQUQsRUFBK0I7QUFDbkRBLFlBQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0MsVUFBQ0MsS0FBRDtBQUFBLGVBQWtCLE1BQUksQ0FBQ0MsZUFBTCxDQUFxQkQsS0FBckIsQ0FBbEI7QUFBQSxPQUFsQztBQUNILEtBRkQ7QUFHSCxHOztTQUVTQyxlLEdBQVYseUJBQTBCRCxLQUExQixFQUE4QztBQUMxQyxRQUFNRSxZQUFZLEdBQXNCRixLQUFLLENBQUNHLGFBQTlDOztBQUVBLFFBQUksS0FBS0MsTUFBTCxDQUFZRixZQUFaLENBQUosRUFBK0I7QUFDM0JHLFlBQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEIsQ0FBdUIsS0FBS0Msa0JBQUwsQ0FBd0JOLFlBQXhCLENBQXZCO0FBQ0g7QUFDSixHOztTQUVTTSxrQixHQUFWLDRCQUE2QlYsTUFBN0IsRUFBZ0U7QUFDNUQsV0FBT0EsTUFBTSxDQUFDVyxPQUFQLENBQWVYLE1BQU0sQ0FBQ1ksYUFBdEIsRUFBcUNDLEtBQTVDO0FBQ0gsRzs7U0FFU1AsTSxHQUFWLGdCQUFpQk4sTUFBakIsRUFBcUQ7QUFDakQsV0FBTyxDQUFDLENBQUNBLE1BQU0sQ0FBQ2EsS0FBaEI7QUFDSCxHOzs7RUEvQnlDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5sYW5ndWFnZS1zd2l0Y2hlci5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgTGFuZ3VhZ2VTd2l0Y2hlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHNlbGVjdExpc3Q6IEhUTUxTZWxlY3RFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZWxlY3RMaXN0ID0gPEhUTUxTZWxlY3RFbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfWApKTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2VsZWN0TGlzdC5mb3JFYWNoKChzZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBzZWxlY3QuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDaGFuZ2UoZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckNoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3Qgc2VsZWN0VGFyZ2V0ID0gPEhUTUxTZWxlY3RFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG5cbiAgICAgICAgaWYgKHRoaXMuaGFzVXJsKHNlbGVjdFRhcmdldCkpIHtcbiAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5hc3NpZ24odGhpcy5jdXJyZW50U2VsZWN0VmFsdWUoc2VsZWN0VGFyZ2V0KSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgY3VycmVudFNlbGVjdFZhbHVlKHNlbGVjdDogSFRNTFNlbGVjdEVsZW1lbnQpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gc2VsZWN0Lm9wdGlvbnNbc2VsZWN0LnNlbGVjdGVkSW5kZXhdLnZhbHVlO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBoYXNVcmwoc2VsZWN0OiBIVE1MU2VsZWN0RWxlbWVudCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gISFzZWxlY3QudmFsdWU7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==