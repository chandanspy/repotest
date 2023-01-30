(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-data-injector"],{

/***/ "./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/form-data-injector/form-data-injector.ts":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/form-data-injector/form-data-injector.ts ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormDataInjector; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var FormDataInjector = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FormDataInjector, _Component);

  function FormDataInjector() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.destinationForm = void 0;
    _this.fieldsToInject = void 0;
    return _this;
  }

  var _proto = FormDataInjector.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.destinationForm = document.getElementsByClassName(this.destinationFormClassName)[0];
    this.fieldsToInject = Array.from(document.querySelectorAll(this.fieldsSelector));

    if (!this.destinationForm) {
      return;
    }

    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.destinationForm.addEventListener('submit', function (event) {
      return _this2.onSubmit(event);
    }, false);
  };

  _proto.onSubmit = function onSubmit(event) {
    event.preventDefault();
    this.disableSubmitButton();
    this.injectData();
    this.destinationForm.submit();
  };

  _proto.disableSubmitButton = function disableSubmitButton() {
    this.destinationForm.querySelector('[type="submit"]').setAttribute('disabled', 'disabled');
  };

  _proto.injectData = function injectData() {
    var _this3 = this;

    this.fieldsToInject.forEach(function (field) {
      return _this3.addField(field);
    });
  };

  _proto.addField = function addField(field) {
    var fieldToInsert = document.createElement('input');
    fieldToInsert.setAttribute('type', 'hidden');
    fieldToInsert.setAttribute('name', field.name);
    fieldToInsert.setAttribute('value', field.value);
    this.destinationForm.appendChild(fieldToInsert);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FormDataInjector, [{
    key: "destinationFormClassName",
    get: function get() {
      return this.getAttribute('destination-form-class-name');
    }
  }, {
    key: "fieldsSelector",
    get: function get() {
      return this.getAttribute('fields-selector');
    }
  }]);

  return FormDataInjector;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3BwaW5nLWxpc3Qtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BwaW5nTGlzdFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2Zvcm0tZGF0YS1pbmplY3Rvci9mb3JtLWRhdGEtaW5qZWN0b3IudHMiXSwibmFtZXMiOlsiRm9ybURhdGFJbmplY3RvciIsImRlc3RpbmF0aW9uRm9ybSIsImZpZWxkc1RvSW5qZWN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJkZXN0aW5hdGlvbkZvcm1DbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJxdWVyeVNlbGVjdG9yQWxsIiwiZmllbGRzU2VsZWN0b3IiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblN1Ym1pdCIsInByZXZlbnREZWZhdWx0IiwiZGlzYWJsZVN1Ym1pdEJ1dHRvbiIsImluamVjdERhdGEiLCJzdWJtaXQiLCJxdWVyeVNlbGVjdG9yIiwic2V0QXR0cmlidXRlIiwiZm9yRWFjaCIsImZpZWxkIiwiYWRkRmllbGQiLCJmaWVsZFRvSW5zZXJ0IiwiY3JlYXRlRWxlbWVudCIsIm5hbWUiLCJ2YWx1ZSIsImFwcGVuZENoaWxkIiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxnQjs7Ozs7Ozs7Ozs7VUFDUEMsZTtVQUNBQyxjOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtILGVBQUwsR0FBd0NJLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0Msd0JBQXJDLEVBQStELENBQS9ELENBQXhDO0FBQ0EsU0FBS0wsY0FBTCxHQUFxQ00sS0FBSyxDQUFDQyxJQUFOLENBQVdKLFFBQVEsQ0FBQ0ssZ0JBQVQsQ0FBMEIsS0FBS0MsY0FBL0IsQ0FBWCxDQUFyQzs7QUFFQSxRQUFJLENBQUMsS0FBS1YsZUFBVixFQUEyQjtBQUN2QjtBQUNIOztBQUVELFNBQUtXLFNBQUw7QUFDSCxHOztTQUVTQSxTLEdBQVYscUJBQTRCO0FBQUE7O0FBQ3hCLFNBQUtYLGVBQUwsQ0FBcUJZLGdCQUFyQixDQUFzQyxRQUF0QyxFQUFnRCxVQUFDQyxLQUFEO0FBQUEsYUFBa0IsTUFBSSxDQUFDQyxRQUFMLENBQWNELEtBQWQsQ0FBbEI7QUFBQSxLQUFoRCxFQUF3RixLQUF4RjtBQUNILEc7O1NBRVNDLFEsR0FBVixrQkFBbUJELEtBQW5CLEVBQXVDO0FBQ25DQSxTQUFLLENBQUNFLGNBQU47QUFFQSxTQUFLQyxtQkFBTDtBQUNBLFNBQUtDLFVBQUw7QUFDQSxTQUFLakIsZUFBTCxDQUFxQmtCLE1BQXJCO0FBQ0gsRzs7U0FFU0YsbUIsR0FBViwrQkFBc0M7QUFDbEMsU0FBS2hCLGVBQUwsQ0FBcUJtQixhQUFyQixDQUFtQyxpQkFBbkMsRUFBc0RDLFlBQXRELENBQW1FLFVBQW5FLEVBQStFLFVBQS9FO0FBQ0gsRzs7U0FFU0gsVSxHQUFWLHNCQUE2QjtBQUFBOztBQUN6QixTQUFLaEIsY0FBTCxDQUFvQm9CLE9BQXBCLENBQTRCLFVBQUNDLEtBQUQ7QUFBQSxhQUE0QixNQUFJLENBQUNDLFFBQUwsQ0FBY0QsS0FBZCxDQUE1QjtBQUFBLEtBQTVCO0FBQ0gsRzs7U0FFU0MsUSxHQUFWLGtCQUFtQkQsS0FBbkIsRUFBaUQ7QUFDN0MsUUFBTUUsYUFBK0IsR0FBcUJwQixRQUFRLENBQUNxQixhQUFULENBQXVCLE9BQXZCLENBQTFEO0FBRUFELGlCQUFhLENBQUNKLFlBQWQsQ0FBMkIsTUFBM0IsRUFBbUMsUUFBbkM7QUFDQUksaUJBQWEsQ0FBQ0osWUFBZCxDQUEyQixNQUEzQixFQUFtQ0UsS0FBSyxDQUFDSSxJQUF6QztBQUNBRixpQkFBYSxDQUFDSixZQUFkLENBQTJCLE9BQTNCLEVBQW9DRSxLQUFLLENBQUNLLEtBQTFDO0FBRUEsU0FBSzNCLGVBQUwsQ0FBcUI0QixXQUFyQixDQUFpQ0osYUFBakM7QUFDSCxHOzs7O1NBRUQsZUFBaUQ7QUFDN0MsYUFBTyxLQUFLSyxZQUFMLENBQWtCLDZCQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQXVDO0FBQ25DLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOzs7O0VBckR5Q0MsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuZm9ybS1kYXRhLWluamVjdG9yLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBGb3JtRGF0YUluamVjdG9yIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgZGVzdGluYXRpb25Gb3JtOiBIVE1MRm9ybUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGZpZWxkc1RvSW5qZWN0OiBIVE1MRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZGVzdGluYXRpb25Gb3JtID0gPEhUTUxGb3JtRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuZGVzdGluYXRpb25Gb3JtQ2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5maWVsZHNUb0luamVjdCA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCh0aGlzLmZpZWxkc1NlbGVjdG9yKSk7XG5cbiAgICAgICAgaWYgKCF0aGlzLmRlc3RpbmF0aW9uRm9ybSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlc3RpbmF0aW9uRm9ybS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uU3VibWl0KGV2ZW50KSwgZmFsc2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblN1Ym1pdChldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICB0aGlzLmRpc2FibGVTdWJtaXRCdXR0b24oKTtcbiAgICAgICAgdGhpcy5pbmplY3REYXRhKCk7XG4gICAgICAgIHRoaXMuZGVzdGluYXRpb25Gb3JtLnN1Ym1pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBkaXNhYmxlU3VibWl0QnV0dG9uKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlc3RpbmF0aW9uRm9ybS5xdWVyeVNlbGVjdG9yKCdbdHlwZT1cInN1Ym1pdFwiXScpLnNldEF0dHJpYnV0ZSgnZGlzYWJsZWQnLCAnZGlzYWJsZWQnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaW5qZWN0RGF0YSgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5maWVsZHNUb0luamVjdC5mb3JFYWNoKChmaWVsZDogSFRNTEZvcm1FbGVtZW50KSA9PiB0aGlzLmFkZEZpZWxkKGZpZWxkKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFkZEZpZWxkKGZpZWxkOiBIVE1MRm9ybUVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgZmllbGRUb0luc2VydDogSFRNTElucHV0RWxlbWVudCA9IDxIVE1MSW5wdXRFbGVtZW50PmRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2lucHV0Jyk7XG5cbiAgICAgICAgZmllbGRUb0luc2VydC5zZXRBdHRyaWJ1dGUoJ3R5cGUnLCAnaGlkZGVuJyk7XG4gICAgICAgIGZpZWxkVG9JbnNlcnQuc2V0QXR0cmlidXRlKCduYW1lJywgZmllbGQubmFtZSk7XG4gICAgICAgIGZpZWxkVG9JbnNlcnQuc2V0QXR0cmlidXRlKCd2YWx1ZScsIGZpZWxkLnZhbHVlKTtcblxuICAgICAgICB0aGlzLmRlc3RpbmF0aW9uRm9ybS5hcHBlbmRDaGlsZChmaWVsZFRvSW5zZXJ0KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGRlc3RpbmF0aW9uRm9ybUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Rlc3RpbmF0aW9uLWZvcm0tY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZmllbGRzU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmaWVsZHMtc2VsZWN0b3InKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9