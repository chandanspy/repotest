(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-clear"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-clear/form-clear.ts":
/*!*****************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-clear/form-clear.ts ***!
  \*****************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormClear; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



/**
 * @event formFieldsClearAfter An event which is triggered after the form fields are cleared.
 */

var FormClear = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FormClear, _Component);

  function FormClear() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.form = void 0;
    _this.triggers = void 0;
    _this.targets = void 0;
    _this.ignoreElements = void 0;
    _this.filterElements = void 0;
    _this.formFieldsClearAfter = void 0;
    return _this;
  }

  var _proto = FormClear.prototype;

  _proto.readyCallback = function readyCallback() {
    var _this2 = this;

    /* tslint:disable: deprecation */
    this.triggers = Array.from(this.triggerClassName ? document.getElementsByClassName(this.triggerClassName) : document.querySelectorAll(this.triggerSelector));
    this.form = this.formClassName ? document.getElementsByClassName(this.formClassName)[0] : document.querySelector(this.formSelector);
    this.ignoreElements = Array.from(this.ignoreClassName ? this.form.getElementsByClassName(this.ignoreClassName) : this.form.querySelectorAll(this.ignoreSelector));
    /* tslint:enable: deprecation */

    var formInputs = Array.from(this.form.getElementsByTagName('input'));
    var formSelects = Array.from(this.form.getElementsByTagName('select'));
    this.targets = [].concat(formInputs, formSelects);
    this.filterElements = this.targets.filter(function (element) {
      return !_this2.ignoreElements.includes(element);
    });
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this3 = this;

    this.createCustomEvents();
    this.triggers.forEach(function (input) {
      input.addEventListener('change', function () {
        return _this3.onChange(input);
      });
    });
  };

  _proto.onChange = function onChange(input) {
    var isChecked = input.checked;

    if (isChecked) {
      this.clearFormValues();
    }
  }
  /**
   * Clears an array of the form elements and triggers the custom event formFieldsClearAfter.
   * @param element HTMLFormElement is the element for clear action.
   */
  ;

  _proto.clearFormValues = function clearFormValues() {
    var _this4 = this;

    this.filterElements.forEach(function (element) {
      _this4.clearFormField(element);
    });
    this.dispatchEvent(this.formFieldsClearAfter);
  }
  /**
   * Clears current form field.
   * @param element HTMLFormElement is the element for clear action.
   */
  ;

  _proto.clearFormField = function clearFormField(element) {
    var tagName = this.getTagName(element);

    if (tagName === 'INPUT') {
      var inputType = element.type;

      if (inputType === 'text' || inputType === 'hidden') {
        element.value = '';
      }

      if (inputType === 'checkbox' || inputType === 'radio') {
        element.checked = false;
      }
    }

    if (tagName === 'SELECT') {
      element.selectedIndex = 0;
    }
  }
  /**
   * Gets a tag name of the current element.
   */
  ;

  _proto.getTagName = function getTagName(element) {
    return element.tagName.toUpperCase();
  };

  _proto.createCustomEvents = function createCustomEvents() {
    this.formFieldsClearAfter = new CustomEvent('form-fields-clear-after');
  }
  /**
   * Gets a querySelector name of the form.
   *
   * @deprecated Use formClassName() instead.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FormClear, [{
    key: "formSelector",
    get: function get() {
      return this.getAttribute('form-selector');
    }
  }, {
    key: "formClassName",
    get: function get() {
      return this.getAttribute('form-class-name');
    }
    /**
     * Gets a querySelector name of the trigger element.
     *
     * @deprecated Use triggerClassName() instead.
     */

  }, {
    key: "triggerSelector",
    get: function get() {
      return this.getAttribute('trigger-selector');
    }
  }, {
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
    /**
     * Gets a querySelector name of the ignore element.
     *
     * @deprecated Use ignoreClassName() instead.
     */

  }, {
    key: "ignoreSelector",
    get: function get() {
      return this.getAttribute('ignore-selector');
    }
  }, {
    key: "ignoreClassName",
    get: function get() {
      return this.getAttribute('ignore-class-name');
    }
  }]);

  return FormClear;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1jbGVhci9mb3JtLWNsZWFyLnRzIl0sIm5hbWVzIjpbIkZvcm1DbGVhciIsImZvcm0iLCJ0cmlnZ2VycyIsInRhcmdldHMiLCJpZ25vcmVFbGVtZW50cyIsImZpbHRlckVsZW1lbnRzIiwiZm9ybUZpZWxkc0NsZWFyQWZ0ZXIiLCJyZWFkeUNhbGxiYWNrIiwiQXJyYXkiLCJmcm9tIiwidHJpZ2dlckNsYXNzTmFtZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJ0cmlnZ2VyU2VsZWN0b3IiLCJmb3JtQ2xhc3NOYW1lIiwicXVlcnlTZWxlY3RvciIsImZvcm1TZWxlY3RvciIsImlnbm9yZUNsYXNzTmFtZSIsImlnbm9yZVNlbGVjdG9yIiwiZm9ybUlucHV0cyIsImdldEVsZW1lbnRzQnlUYWdOYW1lIiwiZm9ybVNlbGVjdHMiLCJmaWx0ZXIiLCJlbGVtZW50IiwiaW5jbHVkZXMiLCJtYXBFdmVudHMiLCJjcmVhdGVDdXN0b21FdmVudHMiLCJmb3JFYWNoIiwiaW5wdXQiLCJhZGRFdmVudExpc3RlbmVyIiwib25DaGFuZ2UiLCJpc0NoZWNrZWQiLCJjaGVja2VkIiwiY2xlYXJGb3JtVmFsdWVzIiwiY2xlYXJGb3JtRmllbGQiLCJkaXNwYXRjaEV2ZW50IiwidGFnTmFtZSIsImdldFRhZ05hbWUiLCJpbnB1dFR5cGUiLCJ0eXBlIiwidmFsdWUiLCJzZWxlY3RlZEluZGV4IiwidG9VcHBlckNhc2UiLCJDdXN0b21FdmVudCIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBRUE7QUFDQTtBQUNBOztJQUNxQkEsUzs7Ozs7Ozs7Ozs7VUFJakJD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QUFDUyxPQUFSLEdBQWtCLEtBQWxCO0FBQ0g7QUFDSjs7QUFFRCxRQUFJSSxPQUFPLEtBQUssUUFBaEIsRUFBMEI7QUFDdEJiLGFBQU8sQ0FBQ2tCLGFBQVIsR0FBd0IsQ0FBeEI7QUFDSDtBQUNKO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUosVSxHQUFBLG9CQUFXZCxPQUFYLEVBQXlDO0FBQ3JDLFdBQU9BLE9BQU8sQ0FBQ2EsT0FBUixDQUFnQk0sV0FBaEIsRUFBUDtBQUNILEc7O1NBRVNoQixrQixHQUFWLDhCQUFxQztBQUNqQyxTQUFLckIsb0JBQUwsR0FBeUMsSUFBSXNDLFdBQUosQ0FBZ0IseUJBQWhCLENBQXpDO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTtBQUNBOzs7OztTQUNJLGVBQTJCO0FBQ3ZCLGFBQU8sS0FBS0MsWUFBTCxDQUFrQixlQUFsQixDQUFQO0FBQ0g7OztTQUNELGVBQXNDO0FBQ2xDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7QUFDQTs7OztTQUNJLGVBQThCO0FBQzFCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixrQkFBbEIsQ0FBUDtBQUNIOzs7U0FDRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7Ozs7U0FDSSxlQUE2QjtBQUN6QixhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7O1NBQ0QsZUFBd0M7QUFDcEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7Ozs7RUExSmtDQyx5RCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5mb3JtLWNsZWFyLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5cbi8qKlxuICogQGV2ZW50IGZvcm1GaWVsZHNDbGVhckFmdGVyIEFuIGV2ZW50IHdoaWNoIGlzIHRyaWdnZXJlZCBhZnRlciB0aGUgZm9ybSBmaWVsZHMgYXJlIGNsZWFyZWQuXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEZvcm1DbGVhciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogVGhlIGN1cnJlbnQgZm9ybS5cbiAgICAgKi9cbiAgICBmb3JtOiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIENvbGxlY3Rpb24gb2YgdGhlIHRyaWdnZXJzIGVsZW1lbnRzLlxuICAgICAqL1xuICAgIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgLyoqXG4gICAgICogQ29sbGVjdGlvbiBvZiB0aGUgZm9ybSBlbGVtZW5ldHMuXG4gICAgICovXG4gICAgdGFyZ2V0czogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIENvbGxlY3Rpb24gb2YgdGhlIHRhcmdldHMgZWxlbWVudHMgd2hpY2ggc2hvdWxkIGJlIGlnbm9yZWQgd2hpbGUgY29sbGVjdGlvbiB0aGUgZmlsdGVycy5cbiAgICAgKi9cbiAgICBpZ25vcmVFbGVtZW50czogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIENvbGxlY3Rpb24gb2YgdGhlIGZpbHRlciBlbGVtZW50cy5cbiAgICAgKi9cbiAgICBmaWx0ZXJFbGVtZW50czogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIFRoZSBjdXN0b20gZXZlbnQuXG4gICAgICovXG4gICAgZm9ybUZpZWxkc0NsZWFyQWZ0ZXI6IEN1c3RvbUV2ZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIC8qIHRzbGludDpkaXNhYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+KFxuICAgICAgICAgICAgQXJyYXkuZnJvbShcbiAgICAgICAgICAgICAgICB0aGlzLnRyaWdnZXJDbGFzc05hbWVcbiAgICAgICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudHJpZ2dlckNsYXNzTmFtZSlcbiAgICAgICAgICAgICAgICAgICAgOiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKHRoaXMudHJpZ2dlclNlbGVjdG9yKSxcbiAgICAgICAgICAgIClcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5mb3JtID0gPEhUTUxFbGVtZW50PihcbiAgICAgICAgICAgICh0aGlzLmZvcm1DbGFzc05hbWVcbiAgICAgICAgICAgICAgICA/IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5mb3JtQ2xhc3NOYW1lKVswXVxuICAgICAgICAgICAgICAgIDogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLmZvcm1TZWxlY3RvcikpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMuaWdub3JlRWxlbWVudHMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKFxuICAgICAgICAgICAgICAgIHRoaXMuaWdub3JlQ2xhc3NOYW1lXG4gICAgICAgICAgICAgICAgICAgID8gdGhpcy5mb3JtLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5pZ25vcmVDbGFzc05hbWUpXG4gICAgICAgICAgICAgICAgICAgIDogdGhpcy5mb3JtLnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5pZ25vcmVTZWxlY3RvciksXG4gICAgICAgICAgICApXG4gICAgICAgICk7XG4gICAgICAgIC8qIHRzbGludDplbmFibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIGNvbnN0IGZvcm1JbnB1dHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZm9ybS5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaW5wdXQnKSk7XG4gICAgICAgIGNvbnN0IGZvcm1TZWxlY3RzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmZvcm0uZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NlbGVjdCcpKTtcbiAgICAgICAgdGhpcy50YXJnZXRzID0gWy4uLmZvcm1JbnB1dHMsIC4uLmZvcm1TZWxlY3RzXTtcbiAgICAgICAgdGhpcy5maWx0ZXJFbGVtZW50cyA9IHRoaXMudGFyZ2V0cy5maWx0ZXIoKGVsZW1lbnQpID0+ICF0aGlzLmlnbm9yZUVsZW1lbnRzLmluY2x1ZGVzKGVsZW1lbnQpKTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY3JlYXRlQ3VzdG9tRXZlbnRzKCk7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgoaW5wdXQpID0+IHtcbiAgICAgICAgICAgIGlucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsICgpID0+IHRoaXMub25DaGFuZ2UoaW5wdXQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2hhbmdlKGlucHV0OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBpc0NoZWNrZWQgPSAoPEhUTUxJbnB1dEVsZW1lbnQ+aW5wdXQpLmNoZWNrZWQ7XG4gICAgICAgIGlmIChpc0NoZWNrZWQpIHtcbiAgICAgICAgICAgIHRoaXMuY2xlYXJGb3JtVmFsdWVzKCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBDbGVhcnMgYW4gYXJyYXkgb2YgdGhlIGZvcm0gZWxlbWVudHMgYW5kIHRyaWdnZXJzIHRoZSBjdXN0b20gZXZlbnQgZm9ybUZpZWxkc0NsZWFyQWZ0ZXIuXG4gICAgICogQHBhcmFtIGVsZW1lbnQgSFRNTEZvcm1FbGVtZW50IGlzIHRoZSBlbGVtZW50IGZvciBjbGVhciBhY3Rpb24uXG4gICAgICovXG4gICAgY2xlYXJGb3JtVmFsdWVzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZpbHRlckVsZW1lbnRzLmZvckVhY2goKGVsZW1lbnQ6IEhUTUxGb3JtRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5jbGVhckZvcm1GaWVsZChlbGVtZW50KTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgdGhpcy5kaXNwYXRjaEV2ZW50KHRoaXMuZm9ybUZpZWxkc0NsZWFyQWZ0ZXIpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIENsZWFycyBjdXJyZW50IGZvcm0gZmllbGQuXG4gICAgICogQHBhcmFtIGVsZW1lbnQgSFRNTEZvcm1FbGVtZW50IGlzIHRoZSBlbGVtZW50IGZvciBjbGVhciBhY3Rpb24uXG4gICAgICovXG4gICAgY2xlYXJGb3JtRmllbGQoZWxlbWVudDogSFRNTEZvcm1FbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHRhZ05hbWUgPSB0aGlzLmdldFRhZ05hbWUoZWxlbWVudCk7XG4gICAgICAgIGlmICh0YWdOYW1lID09PSAnSU5QVVQnKSB7XG4gICAgICAgICAgICBjb25zdCBpbnB1dFR5cGUgPSBlbGVtZW50LnR5cGU7XG5cbiAgICAgICAgICAgIGlmIChpbnB1dFR5cGUgPT09ICd0ZXh0JyB8fCBpbnB1dFR5cGUgPT09ICdoaWRkZW4nKSB7XG4gICAgICAgICAgICAgICAgZWxlbWVudC52YWx1ZSA9ICcnO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKGlucHV0VHlwZSA9PT0gJ2NoZWNrYm94JyB8fCBpbnB1dFR5cGUgPT09ICdyYWRpbycpIHtcbiAgICAgICAgICAgICAgICBlbGVtZW50LmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0YWdOYW1lID09PSAnU0VMRUNUJykge1xuICAgICAgICAgICAgZWxlbWVudC5zZWxlY3RlZEluZGV4ID0gMDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSB0YWcgbmFtZSBvZiB0aGUgY3VycmVudCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldFRhZ05hbWUoZWxlbWVudDogSFRNTEVsZW1lbnQpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gZWxlbWVudC50YWdOYW1lLnRvVXBwZXJDYXNlKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNyZWF0ZUN1c3RvbUV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5mb3JtRmllbGRzQ2xlYXJBZnRlciA9IDxDdXN0b21FdmVudD5uZXcgQ3VzdG9tRXZlbnQoJ2Zvcm0tZmllbGRzLWNsZWFyLWFmdGVyJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgZm9ybS5cbiAgICAgKlxuICAgICAqIEBkZXByZWNhdGVkIFVzZSBmb3JtQ2xhc3NOYW1lKCkgaW5zdGVhZC5cbiAgICAgKi9cbiAgICBnZXQgZm9ybVNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZm9ybS1zZWxlY3RvcicpO1xuICAgIH1cbiAgICBwcm90ZWN0ZWQgZ2V0IGZvcm1DbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSB0cmlnZ2VyIGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlckNsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgaWdub3JlIGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgaWdub3JlQ2xhc3NOYW1lKCkgaW5zdGVhZC5cbiAgICAgKi9cbiAgICBnZXQgaWdub3JlU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdpZ25vcmUtc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCBpZ25vcmVDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdpZ25vcmUtY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=