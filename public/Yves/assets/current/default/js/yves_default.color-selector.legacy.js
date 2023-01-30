(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["color-selector"],{

/***/ "./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts":
/*!**************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.ts ***!
  \**************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ColorSelector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var ColorSelector = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ColorSelector, _Component);

  function ColorSelector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.currentSelection = void 0;
    return _this;
  }

  var _proto = ColorSelector.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(this.getElementsByClassName(this.jsName + "__item"));
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerMouseenterEvent();
  };

  _proto.mapTriggerMouseenterEvent = function mapTriggerMouseenterEvent() {
    var _this2 = this;

    this.triggers.forEach(function (element) {
      element.addEventListener('mouseenter', function (event) {
        return _this2.onTriggerSelection(event);
      });
    });
  };

  _proto.onTriggerSelection = function onTriggerSelection(event) {
    event.preventDefault();
    this.currentSelection = event.currentTarget;
    this.resetActiveItemSelections();
    this.setActiveItemSelection();
  };

  _proto.resetActiveItemSelections = function resetActiveItemSelections() {
    var _this3 = this;

    this.triggers.forEach(function (element) {
      element.classList.remove(_this3.activeItemClassName);
    });
  };

  _proto.setActiveItemSelection = function setActiveItemSelection(selection) {
    (selection || this.currentSelection).classList.add(this.activeItemClassName);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ColorSelector, [{
    key: "activeItemClassName",
    get: function get() {
      return this.getAttribute('active-item-class-name');
    }
  }]);

  return ColorSelector;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Byb2R1Y3QtZ3JvdXAtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Byb2R1Y3RHcm91cFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbG9yLXNlbGVjdG9yL2NvbG9yLXNlbGVjdG9yLnRzIl0sIm5hbWVzIjpbIkNvbG9yU2VsZWN0b3IiLCJ0cmlnZ2VycyIsImN1cnJlbnRTZWxlY3Rpb24iLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsIkFycmF5IiwiZnJvbSIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJtYXBUcmlnZ2VyTW91c2VlbnRlckV2ZW50IiwiZm9yRWFjaCIsImVsZW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJTZWxlY3Rpb24iLCJwcmV2ZW50RGVmYXVsdCIsImN1cnJlbnRUYXJnZXQiLCJyZXNldEFjdGl2ZUl0ZW1TZWxlY3Rpb25zIiwic2V0QWN0aXZlSXRlbVNlbGVjdGlvbiIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFjdGl2ZUl0ZW1DbGFzc05hbWUiLCJzZWxlY3Rpb24iLCJhZGQiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLGE7Ozs7Ozs7Ozs7O1VBQ1BDLFE7VUFDQUMsZ0I7Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJDLEksR0FBVixnQkFBdUI7QUFDbkIsU0FBS0gsUUFBTCxHQUErQkksS0FBSyxDQUFDQyxJQUFOLENBQVcsS0FBS0Msc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsWUFBWCxDQUEvQjtBQUVBLFNBQUtDLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQ3hCLFNBQUtDLHlCQUFMO0FBQ0gsRzs7U0FFU0EseUIsR0FBVixxQ0FBc0M7QUFBQTs7QUFDbEMsU0FBS1QsUUFBTCxDQUFjVSxPQUFkLENBQXNCLFVBQUNDLE9BQUQsRUFBMEI7QUFDNUNBLGFBQU8sQ0FBQ0MsZ0JBQVIsQ0FBeUIsWUFBekIsRUFBdUMsVUFBQ0MsS0FBRDtBQUFBLGVBQWtCLE1BQUksQ0FBQ0Msa0JBQUwsQ0FBd0JELEtBQXhCLENBQWxCO0FBQUEsT0FBdkM7QUFDSCxLQUZEO0FBR0gsRzs7U0FFU0Msa0IsR0FBViw0QkFBNkJELEtBQTdCLEVBQWlEO0FBQzdDQSxTQUFLLENBQUNFLGNBQU47QUFDQSxTQUFLZCxnQkFBTCxHQUFxQ1ksS0FBSyxDQUFDRyxhQUEzQztBQUNBLFNBQUtDLHlCQUFMO0FBQ0EsU0FBS0Msc0JBQUw7QUFDSCxHOztTQUVTRCx5QixHQUFWLHFDQUE0QztBQUFBOztBQUN4QyxTQUFLakIsUUFBTCxDQUFjVSxPQUFkLENBQXNCLFVBQUNDLE9BQUQsRUFBMEI7QUFDNUNBLGFBQU8sQ0FBQ1EsU0FBUixDQUFrQkMsTUFBbEIsQ0FBeUIsTUFBSSxDQUFDQyxtQkFBOUI7QUFDSCxLQUZEO0FBR0gsRzs7U0FFU0gsc0IsR0FBVixnQ0FBaUNJLFNBQWpDLEVBQWdFO0FBQzVELEtBQUNBLFNBQVMsSUFBSSxLQUFLckIsZ0JBQW5CLEVBQXFDa0IsU0FBckMsQ0FBK0NJLEdBQS9DLENBQW1ELEtBQUtGLG1CQUF4RDtBQUNILEc7Ozs7U0FFRCxlQUE0QztBQUN4QyxhQUFPLEtBQUtHLFlBQUwsQ0FBa0Isd0JBQWxCLENBQVA7QUFDSDs7OztFQXpDc0NDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNvbG9yLXNlbGVjdG9yLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDb2xvclNlbGVjdG9yIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdHJpZ2dlcnM6IEhUTUxFbGVtZW50W107XG4gICAgcHJvdGVjdGVkIGN1cnJlbnRTZWxlY3Rpb246IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2l0ZW1gKSk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJNb3VzZWVudGVyRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVHJpZ2dlck1vdXNlZW50ZXJFdmVudCgpIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWVudGVyJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJTZWxlY3Rpb24oZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlclNlbGVjdGlvbihldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5jdXJyZW50U2VsZWN0aW9uID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgIHRoaXMucmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpO1xuICAgICAgICB0aGlzLnNldEFjdGl2ZUl0ZW1TZWxlY3Rpb24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVzZXRBY3RpdmVJdGVtU2VsZWN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKChlbGVtZW50OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuYWN0aXZlSXRlbUNsYXNzTmFtZSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRBY3RpdmVJdGVtU2VsZWN0aW9uKHNlbGVjdGlvbj86IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIChzZWxlY3Rpb24gfHwgdGhpcy5jdXJyZW50U2VsZWN0aW9uKS5jbGFzc0xpc3QuYWRkKHRoaXMuYWN0aXZlSXRlbUNsYXNzTmFtZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhY3RpdmVJdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnYWN0aXZlLWl0ZW0tY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=