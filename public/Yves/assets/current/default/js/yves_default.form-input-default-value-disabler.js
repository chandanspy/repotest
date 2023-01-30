(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-input-default-value-disabler"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-input-default-value-disabler/form-input-default-value-disabler.ts":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-input-default-value-disabler/form-input-default-value-disabler.ts ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormInputDefaultValueDisabler; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class FormInputDefaultValueDisabler extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.forms = void 0;
  }

  readyCallback() {
    this.forms = Array.from(document.querySelectorAll(this.formSelector));
    this.mapEvents();
  }

  mapEvents() {
    this.forms.forEach(form => {
      form.addEventListener('submit', event => this.onFormSubmit(event));
    });
  }

  onFormSubmit(event) {
    event.preventDefault();
    var form = event.currentTarget;
    this.disableInputsWithDefaultValues(form);
  }
  /**
   * Toggles the disabled attribute and submits the form.
   * @param form HTMLFormElement is the element for submit event.
   */


  disableInputsWithDefaultValues(form) {
    var inputs = Array.from(form.querySelectorAll(this.inputSelector));
    inputs.forEach(input => {
      var defaultValue = input.getAttribute(this.defaultValueAttribute);

      if (defaultValue === input.value) {
        input.setAttribute('disabled', 'disabled');
        return;
      }

      input.removeAttribute('disabled');
    });
    form.submit();
  }
  /**
   * Gets a querySelector name of the form element.
   */


  get formSelector() {
    return this.getAttribute('form-selector');
  }
  /**
   * Gets a querySelector name of the input element.
   */


  get inputSelector() {
    return this.getAttribute('input-selector');
  }
  /**
   * Gets a name of the default value attribute.
   */


  get defaultValueAttribute() {
    return this.getAttribute('default-value-attribute');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1pbnB1dC1kZWZhdWx0LXZhbHVlLWRpc2FibGVyL2Zvcm0taW5wdXQtZGVmYXVsdC12YWx1ZS1kaXNhYmxlci50cyJdLCJuYW1lcyI6WyJGb3JtSW5wdXREZWZhdWx0VmFsdWVEaXNhYmxlciIsIkNvbXBvbmVudCIsImZvcm1zIiwicmVhZHlDYWxsYmFjayIsIkFycmF5IiwiZnJvbSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvcm1TZWxlY3RvciIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJmb3JtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25Gb3JtU3VibWl0IiwicHJldmVudERlZmF1bHQiLCJjdXJyZW50VGFyZ2V0IiwiZGlzYWJsZUlucHV0c1dpdGhEZWZhdWx0VmFsdWVzIiwiaW5wdXRzIiwiaW5wdXRTZWxlY3RvciIsImlucHV0IiwiZGVmYXVsdFZhbHVlIiwiZ2V0QXR0cmlidXRlIiwiZGVmYXVsdFZhbHVlQXR0cmlidXRlIiwidmFsdWUiLCJzZXRBdHRyaWJ1dGUiLCJyZW1vdmVBdHRyaWJ1dGUiLCJzdWJtaXQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLDZCQUFOLFNBQTRDQyx5REFBNUMsQ0FBc0Q7QUFBQTtBQUFBO0FBQUEsU0FJakVDLEtBSmlFO0FBQUE7O0FBTXZEQyxlQUFhLEdBQVM7QUFDNUIsU0FBS0QsS0FBTCxHQUFnQ0UsS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsS0FBS0MsWUFBL0IsQ0FBWCxDQUFoQztBQUNBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtQLEtBQUwsQ0FBV1EsT0FBWCxDQUFvQkMsSUFBRCxJQUF1QjtBQUN0Q0EsVUFBSSxDQUFDQyxnQkFBTCxDQUFzQixRQUF0QixFQUFpQ0MsS0FBRCxJQUFrQixLQUFLQyxZQUFMLENBQWtCRCxLQUFsQixDQUFsRDtBQUNILEtBRkQ7QUFHSDs7QUFFU0MsY0FBWSxDQUFDRCxLQUFELEVBQXFCO0FBQ3ZDQSxTQUFLLENBQUNFLGNBQU47QUFDQSxRQUFNSixJQUFJLEdBQW9CRSxLQUFLLENBQUNHLGFBQXBDO0FBQ0EsU0FBS0MsOEJBQUwsQ0FBb0NOLElBQXBDO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ0lNLGdDQUE4QixDQUFDTixJQUFELEVBQXdCO0FBQ2xELFFBQU1PLE1BQU0sR0FBdUJkLEtBQUssQ0FBQ0MsSUFBTixDQUFXTSxJQUFJLENBQUNKLGdCQUFMLENBQXNCLEtBQUtZLGFBQTNCLENBQVgsQ0FBbkM7QUFFQUQsVUFBTSxDQUFDUixPQUFQLENBQWdCVSxLQUFELElBQTZCO0FBQ3hDLFVBQU1DLFlBQVksR0FBR0QsS0FBSyxDQUFDRSxZQUFOLENBQW1CLEtBQUtDLHFCQUF4QixDQUFyQjs7QUFFQSxVQUFJRixZQUFZLEtBQUtELEtBQUssQ0FBQ0ksS0FBM0IsRUFBa0M7QUFDOUJKLGFBQUssQ0FBQ0ssWUFBTixDQUFtQixVQUFuQixFQUErQixVQUEvQjtBQUVBO0FBQ0g7O0FBRURMLFdBQUssQ0FBQ00sZUFBTixDQUFzQixVQUF0QjtBQUNILEtBVkQ7QUFZQWYsUUFBSSxDQUFDZ0IsTUFBTDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDb0IsTUFBWm5CLFlBQVksR0FBVztBQUN2QixXQUFPLEtBQUtjLFlBQUwsQ0FBa0IsZUFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDcUIsTUFBYkgsYUFBYSxHQUFXO0FBQ3hCLFdBQU8sS0FBS0csWUFBTCxDQUFrQixnQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDNkIsTUFBckJDLHFCQUFxQixHQUFXO0FBQ2hDLFdBQU8sS0FBS0QsWUFBTCxDQUFrQix5QkFBbEIsQ0FBUDtBQUNIOztBQWhFZ0UsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5mb3JtLWlucHV0LWRlZmF1bHQtdmFsdWUtZGlzYWJsZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBGb3JtSW5wdXREZWZhdWx0VmFsdWVEaXNhYmxlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogQ29sbGVjdGlvbiBvZiB0aGUgZm9ybXMuXG4gICAgICovXG4gICAgZm9ybXM6IEhUTUxGb3JtRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybXMgPSA8SFRNTEZvcm1FbGVtZW50W10+QXJyYXkuZnJvbShkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKHRoaXMuZm9ybVNlbGVjdG9yKSk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5mb3Jtcy5mb3JFYWNoKChmb3JtOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZm9ybS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uRm9ybVN1Ym1pdChldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25Gb3JtU3VibWl0KGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBjb25zdCBmb3JtID0gPEhUTUxGb3JtRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICB0aGlzLmRpc2FibGVJbnB1dHNXaXRoRGVmYXVsdFZhbHVlcyhmb3JtKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBUb2dnbGVzIHRoZSBkaXNhYmxlZCBhdHRyaWJ1dGUgYW5kIHN1Ym1pdHMgdGhlIGZvcm0uXG4gICAgICogQHBhcmFtIGZvcm0gSFRNTEZvcm1FbGVtZW50IGlzIHRoZSBlbGVtZW50IGZvciBzdWJtaXQgZXZlbnQuXG4gICAgICovXG4gICAgZGlzYWJsZUlucHV0c1dpdGhEZWZhdWx0VmFsdWVzKGZvcm06IEhUTUxGb3JtRWxlbWVudCkge1xuICAgICAgICBjb25zdCBpbnB1dHMgPSA8SFRNTElucHV0RWxlbWVudFtdPkFycmF5LmZyb20oZm9ybS5xdWVyeVNlbGVjdG9yQWxsKHRoaXMuaW5wdXRTZWxlY3RvcikpO1xuXG4gICAgICAgIGlucHV0cy5mb3JFYWNoKChpbnB1dDogSFRNTElucHV0RWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3QgZGVmYXVsdFZhbHVlID0gaW5wdXQuZ2V0QXR0cmlidXRlKHRoaXMuZGVmYXVsdFZhbHVlQXR0cmlidXRlKTtcblxuICAgICAgICAgICAgaWYgKGRlZmF1bHRWYWx1ZSA9PT0gaW5wdXQudmFsdWUpIHtcbiAgICAgICAgICAgICAgICBpbnB1dC5zZXRBdHRyaWJ1dGUoJ2Rpc2FibGVkJywgJ2Rpc2FibGVkJyk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGlucHV0LnJlbW92ZUF0dHJpYnV0ZSgnZGlzYWJsZWQnKTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgZm9ybS5zdWJtaXQoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBmb3JtIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IGZvcm1TZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Zvcm0tc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBpbnB1dCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBpbnB1dFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnaW5wdXQtc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgbmFtZSBvZiB0aGUgZGVmYXVsdCB2YWx1ZSBhdHRyaWJ1dGUuXG4gICAgICovXG4gICAgZ2V0IGRlZmF1bHRWYWx1ZUF0dHJpYnV0ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2RlZmF1bHQtdmFsdWUtYXR0cmlidXRlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==