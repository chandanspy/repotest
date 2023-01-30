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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class FormDataInjector extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.destinationForm = void 0;
    this.fieldsToInject = void 0;
  }

  readyCallback() {}

  init() {
    this.destinationForm = document.getElementsByClassName(this.destinationFormClassName)[0];
    this.fieldsToInject = Array.from(document.querySelectorAll(this.fieldsSelector));

    if (!this.destinationForm) {
      return;
    }

    this.mapEvents();
  }

  mapEvents() {
    this.destinationForm.addEventListener('submit', event => this.onSubmit(event), false);
  }

  onSubmit(event) {
    event.preventDefault();
    this.disableSubmitButton();
    this.injectData();
    this.destinationForm.submit();
  }

  disableSubmitButton() {
    this.destinationForm.querySelector('[type="submit"]').setAttribute('disabled', 'disabled');
  }

  injectData() {
    this.fieldsToInject.forEach(field => this.addField(field));
  }

  addField(field) {
    var fieldToInsert = document.createElement('input');
    fieldToInsert.setAttribute('type', 'hidden');
    fieldToInsert.setAttribute('name', field.name);
    fieldToInsert.setAttribute('value', field.value);
    this.destinationForm.appendChild(fieldToInsert);
  }

  get destinationFormClassName() {
    return this.getAttribute('destination-form-class-name');
  }

  get fieldsSelector() {
    return this.getAttribute('fields-selector');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3BwaW5nLWxpc3Qtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BwaW5nTGlzdFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2Zvcm0tZGF0YS1pbmplY3Rvci9mb3JtLWRhdGEtaW5qZWN0b3IudHMiXSwibmFtZXMiOlsiRm9ybURhdGFJbmplY3RvciIsIkNvbXBvbmVudCIsImRlc3RpbmF0aW9uRm9ybSIsImZpZWxkc1RvSW5qZWN0IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJkZXN0aW5hdGlvbkZvcm1DbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJxdWVyeVNlbGVjdG9yQWxsIiwiZmllbGRzU2VsZWN0b3IiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblN1Ym1pdCIsInByZXZlbnREZWZhdWx0IiwiZGlzYWJsZVN1Ym1pdEJ1dHRvbiIsImluamVjdERhdGEiLCJzdWJtaXQiLCJxdWVyeVNlbGVjdG9yIiwic2V0QXR0cmlidXRlIiwiZm9yRWFjaCIsImZpZWxkIiwiYWRkRmllbGQiLCJmaWVsZFRvSW5zZXJ0IiwiY3JlYXRlRWxlbWVudCIsIm5hbWUiLCJ2YWx1ZSIsImFwcGVuZENoaWxkIiwiZ2V0QXR0cmlidXRlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSxnQkFBTixTQUErQkMsK0RBQS9CLENBQXlDO0FBQUE7QUFBQTtBQUFBLFNBQzFDQyxlQUQwQztBQUFBLFNBRTFDQyxjQUYwQztBQUFBOztBQUkxQ0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0gsZUFBTCxHQUF3Q0ksUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxLQUFLQyx3QkFBckMsRUFBK0QsQ0FBL0QsQ0FBeEM7QUFDQSxTQUFLTCxjQUFMLEdBQXFDTSxLQUFLLENBQUNDLElBQU4sQ0FBV0osUUFBUSxDQUFDSyxnQkFBVCxDQUEwQixLQUFLQyxjQUEvQixDQUFYLENBQXJDOztBQUVBLFFBQUksQ0FBQyxLQUFLVixlQUFWLEVBQTJCO0FBQ3ZCO0FBQ0g7O0FBRUQsU0FBS1csU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS1gsZUFBTCxDQUFxQlksZ0JBQXJCLENBQXNDLFFBQXRDLEVBQWlEQyxLQUFELElBQWtCLEtBQUtDLFFBQUwsQ0FBY0QsS0FBZCxDQUFsRSxFQUF3RixLQUF4RjtBQUNIOztBQUVTQyxVQUFRLENBQUNELEtBQUQsRUFBcUI7QUFDbkNBLFNBQUssQ0FBQ0UsY0FBTjtBQUVBLFNBQUtDLG1CQUFMO0FBQ0EsU0FBS0MsVUFBTDtBQUNBLFNBQUtqQixlQUFMLENBQXFCa0IsTUFBckI7QUFDSDs7QUFFU0YscUJBQW1CLEdBQVM7QUFDbEMsU0FBS2hCLGVBQUwsQ0FBcUJtQixhQUFyQixDQUFtQyxpQkFBbkMsRUFBc0RDLFlBQXRELENBQW1FLFVBQW5FLEVBQStFLFVBQS9FO0FBQ0g7O0FBRVNILFlBQVUsR0FBUztBQUN6QixTQUFLaEIsY0FBTCxDQUFvQm9CLE9BQXBCLENBQTZCQyxLQUFELElBQTRCLEtBQUtDLFFBQUwsQ0FBY0QsS0FBZCxDQUF4RDtBQUNIOztBQUVTQyxVQUFRLENBQUNELEtBQUQsRUFBK0I7QUFDN0MsUUFBTUUsYUFBK0IsR0FBcUJwQixRQUFRLENBQUNxQixhQUFULENBQXVCLE9BQXZCLENBQTFEO0FBRUFELGlCQUFhLENBQUNKLFlBQWQsQ0FBMkIsTUFBM0IsRUFBbUMsUUFBbkM7QUFDQUksaUJBQWEsQ0FBQ0osWUFBZCxDQUEyQixNQUEzQixFQUFtQ0UsS0FBSyxDQUFDSSxJQUF6QztBQUNBRixpQkFBYSxDQUFDSixZQUFkLENBQTJCLE9BQTNCLEVBQW9DRSxLQUFLLENBQUNLLEtBQTFDO0FBRUEsU0FBSzNCLGVBQUwsQ0FBcUI0QixXQUFyQixDQUFpQ0osYUFBakM7QUFDSDs7QUFFcUMsTUFBeEJsQix3QkFBd0IsR0FBVztBQUM3QyxXQUFPLEtBQUt1QixZQUFMLENBQWtCLDZCQUFsQixDQUFQO0FBQ0g7O0FBRTJCLE1BQWRuQixjQUFjLEdBQVc7QUFDbkMsV0FBTyxLQUFLbUIsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOztBQXJEbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5mb3JtLWRhdGEtaW5qZWN0b3IuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRm9ybURhdGFJbmplY3RvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGRlc3RpbmF0aW9uRm9ybTogSFRNTEZvcm1FbGVtZW50O1xuICAgIHByb3RlY3RlZCBmaWVsZHNUb0luamVjdDogSFRNTEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlc3RpbmF0aW9uRm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmRlc3RpbmF0aW9uRm9ybUNsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMuZmllbGRzVG9JbmplY3QgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5maWVsZHNTZWxlY3RvcikpO1xuXG4gICAgICAgIGlmICghdGhpcy5kZXN0aW5hdGlvbkZvcm0pIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5kZXN0aW5hdGlvbkZvcm0uYWRkRXZlbnRMaXN0ZW5lcignc3VibWl0JywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblN1Ym1pdChldmVudCksIGZhbHNlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TdWJtaXQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgdGhpcy5kaXNhYmxlU3VibWl0QnV0dG9uKCk7XG4gICAgICAgIHRoaXMuaW5qZWN0RGF0YSgpO1xuICAgICAgICB0aGlzLmRlc3RpbmF0aW9uRm9ybS5zdWJtaXQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZGlzYWJsZVN1Ym1pdEJ1dHRvbigpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5kZXN0aW5hdGlvbkZvcm0ucXVlcnlTZWxlY3RvcignW3R5cGU9XCJzdWJtaXRcIl0nKS5zZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGluamVjdERhdGEoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZmllbGRzVG9JbmplY3QuZm9yRWFjaCgoZmllbGQ6IEhUTUxGb3JtRWxlbWVudCkgPT4gdGhpcy5hZGRGaWVsZChmaWVsZCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBhZGRGaWVsZChmaWVsZDogSFRNTEZvcm1FbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGZpZWxkVG9JbnNlcnQ6IEhUTUxJbnB1dEVsZW1lbnQgPSA8SFRNTElucHV0RWxlbWVudD5kb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbnB1dCcpO1xuXG4gICAgICAgIGZpZWxkVG9JbnNlcnQuc2V0QXR0cmlidXRlKCd0eXBlJywgJ2hpZGRlbicpO1xuICAgICAgICBmaWVsZFRvSW5zZXJ0LnNldEF0dHJpYnV0ZSgnbmFtZScsIGZpZWxkLm5hbWUpO1xuICAgICAgICBmaWVsZFRvSW5zZXJ0LnNldEF0dHJpYnV0ZSgndmFsdWUnLCBmaWVsZC52YWx1ZSk7XG5cbiAgICAgICAgdGhpcy5kZXN0aW5hdGlvbkZvcm0uYXBwZW5kQ2hpbGQoZmllbGRUb0luc2VydCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkZXN0aW5hdGlvbkZvcm1DbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdkZXN0aW5hdGlvbi1mb3JtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGZpZWxkc1NlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZmllbGRzLXNlbGVjdG9yJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==