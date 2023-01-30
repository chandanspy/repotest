(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["remote-form-submit"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/remote-form-submit/remote-form-submit.ts":
/*!*********************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/remote-form-submit/remote-form-submit.ts ***!
  \*********************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RemoteFormSubmit; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var RemoteFormSubmit = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(RemoteFormSubmit, _Component);

  function RemoteFormSubmit() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.formHolder = void 0;
    _this.fieldsContainer = void 0;
    _this.submitButton = void 0;
    return _this;
  }

  var _proto = RemoteFormSubmit.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.fieldsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.submitButton = this.getElementsByClassName(this.jsName + "__submit")[0];
    this.getFormHolder();
    this.createForm();
    this.removeFieldsContainer();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapSubmitButtonClickEvent();
  };

  _proto.mapSubmitButtonClickEvent = function mapSubmitButtonClickEvent() {
    var _this2 = this;

    this.submitButton.addEventListener('click', function () {
      return _this2.submitTargetForm();
    });
  };

  _proto.submitTargetForm = function submitTargetForm() {
    var form = document.getElementById(this.formName);

    if (this.submitButton.dataset.formAction) {
      form.action = this.submitButton.dataset.formAction;
    }

    form.submit();
  };

  _proto.getFormHolder = function getFormHolder() {
    if (this.formHolderClassName) {
      this.formHolder = document.getElementsByClassName(this.formHolderClassName)[0];
      return;
    }

    this.formHolder = document.body;
  };

  _proto.createForm = function createForm() {
    if (document.getElementById(this.formName)) {
      return;
    }

    var formTemplate = "\n            <form id=\"" + this.formName + "\" class=\"is-hidden\" name=\"" + this.formName + "\" method=\"post\" action=\"" + this.formAction + "\">\n                " + this.fieldsContainer.innerHTML + "\n            </form>\n        ";
    this.formHolder.insertAdjacentHTML('beforeend', formTemplate);
  };

  _proto.removeFieldsContainer = function removeFieldsContainer() {
    this.fieldsContainer.remove();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(RemoteFormSubmit, [{
    key: "formHolderClassName",
    get: function get() {
      return this.getAttribute('form-holder-class-name');
    }
  }, {
    key: "formName",
    get: function get() {
      return this.getAttribute('form-name');
    }
  }, {
    key: "formAction",
    get: function get() {
      return this.getAttribute('form-action');
    }
  }]);

  return RemoteFormSubmit;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcmVtb3RlLWZvcm0tc3VibWl0L3JlbW90ZS1mb3JtLXN1Ym1pdC50cyJdLCJuYW1lcyI6WyJSZW1vdGVGb3JtU3VibWl0IiwiZm9ybUhvbGRlciIsImZpZWxkc0NvbnRhaW5lciIsInN1Ym1pdEJ1dHRvbiIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImdldEZvcm1Ib2xkZXIiLCJjcmVhdGVGb3JtIiwicmVtb3ZlRmllbGRzQ29udGFpbmVyIiwibWFwRXZlbnRzIiwibWFwU3VibWl0QnV0dG9uQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJzdWJtaXRUYXJnZXRGb3JtIiwiZm9ybSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJmb3JtTmFtZSIsImRhdGFzZXQiLCJmb3JtQWN0aW9uIiwiYWN0aW9uIiwic3VibWl0IiwiZm9ybUhvbGRlckNsYXNzTmFtZSIsImJvZHkiLCJmb3JtVGVtcGxhdGUiLCJpbm5lckhUTUwiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJyZW1vdmUiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLGdCOzs7Ozs7Ozs7OztVQUNQQyxVO1VBQ0FDLGU7VUFDQUMsWTs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLSCxlQUFMLEdBQW9DLEtBQUtJLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGtCQUF5RCxDQUF6RCxDQUFwQztBQUNBLFNBQUtKLFlBQUwsR0FBdUMsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZUFBc0QsQ0FBdEQsQ0FBdkM7QUFFQSxTQUFLQyxhQUFMO0FBQ0EsU0FBS0MsVUFBTDtBQUNBLFNBQUtDLHFCQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNILEc7O1NBRVNBLFMsR0FBVixxQkFBNEI7QUFDeEIsU0FBS0MseUJBQUw7QUFDSCxHOztTQUVTQSx5QixHQUFWLHFDQUE0QztBQUFBOztBQUN4QyxTQUFLVCxZQUFMLENBQWtCVSxnQkFBbEIsQ0FBbUMsT0FBbkMsRUFBNEM7QUFBQSxhQUFNLE1BQUksQ0FBQ0MsZ0JBQUwsRUFBTjtBQUFBLEtBQTVDO0FBQ0gsRzs7U0FFU0EsZ0IsR0FBViw0QkFBbUM7QUFDL0IsUUFBTUMsSUFBSSxHQUFvQkMsUUFBUSxDQUFDQyxjQUFULENBQXdCLEtBQUtDLFFBQTdCLENBQTlCOztBQUVBLFFBQUksS0FBS2YsWUFBTCxDQUFrQmdCLE9BQWxCLENBQTBCQyxVQUE5QixFQUEwQztBQUN0Q0wsVUFBSSxDQUFDTSxNQUFMLEdBQWMsS0FBS2xCLFlBQUwsQ0FBa0JnQixPQUFsQixDQUEwQkMsVUFBeEM7QUFDSDs7QUFFREwsUUFBSSxDQUFDTyxNQUFMO0FBQ0gsRzs7U0FFU2QsYSxHQUFWLHlCQUFnQztBQUM1QixRQUFJLEtBQUtlLG1CQUFULEVBQThCO0FBQzFCLFdBQUt0QixVQUFMLEdBQStCZSxRQUFRLENBQUNWLHNCQUFULENBQWdDLEtBQUtpQixtQkFBckMsRUFBMEQsQ0FBMUQsQ0FBL0I7QUFFQTtBQUNIOztBQUVELFNBQUt0QixVQUFMLEdBQWtCZSxRQUFRLENBQUNRLElBQTNCO0FBQ0gsRzs7U0FFU2YsVSxHQUFWLHNCQUE2QjtBQUN6QixRQUFJTyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsS0FBS0MsUUFBN0IsQ0FBSixFQUE0QztBQUN4QztBQUNIOztBQUVELFFBQU1PLFlBQVksaUNBQ0YsS0FBS1AsUUFESCxzQ0FDd0MsS0FBS0EsUUFEN0Msb0NBQ2dGLEtBQUtFLFVBRHJGLDZCQUVSLEtBQUtsQixlQUFMLENBQXFCd0IsU0FGYixvQ0FBbEI7QUFLQSxTQUFLekIsVUFBTCxDQUFnQjBCLGtCQUFoQixDQUFtQyxXQUFuQyxFQUFnREYsWUFBaEQ7QUFDSCxHOztTQUVTZixxQixHQUFWLGlDQUF3QztBQUNwQyxTQUFLUixlQUFMLENBQXFCMEIsTUFBckI7QUFDSCxHOzs7O1NBRUQsZUFBNEM7QUFDeEMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLHdCQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQWlDO0FBQzdCLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixXQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQW1DO0FBQy9CLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixhQUFsQixDQUFQO0FBQ0g7Ozs7RUF4RXlDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5yZW1vdGUtZm9ybS1zdWJtaXQubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFJlbW90ZUZvcm1TdWJtaXQgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBmb3JtSG9sZGVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZmllbGRzQ29udGFpbmVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgc3VibWl0QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZpZWxkc0NvbnRhaW5lciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19jb250YWluZXJgKVswXTtcbiAgICAgICAgdGhpcy5zdWJtaXRCdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc3VibWl0YClbMF07XG5cbiAgICAgICAgdGhpcy5nZXRGb3JtSG9sZGVyKCk7XG4gICAgICAgIHRoaXMuY3JlYXRlRm9ybSgpO1xuICAgICAgICB0aGlzLnJlbW92ZUZpZWxkc0NvbnRhaW5lcigpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwU3VibWl0QnV0dG9uQ2xpY2tFdmVudCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBTdWJtaXRCdXR0b25DbGlja0V2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnN1Ym1pdEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMuc3VibWl0VGFyZ2V0Rm9ybSgpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc3VibWl0VGFyZ2V0Rm9ybSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgZm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQodGhpcy5mb3JtTmFtZSk7XG5cbiAgICAgICAgaWYgKHRoaXMuc3VibWl0QnV0dG9uLmRhdGFzZXQuZm9ybUFjdGlvbikge1xuICAgICAgICAgICAgZm9ybS5hY3Rpb24gPSB0aGlzLnN1Ym1pdEJ1dHRvbi5kYXRhc2V0LmZvcm1BY3Rpb247XG4gICAgICAgIH1cblxuICAgICAgICBmb3JtLnN1Ym1pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRGb3JtSG9sZGVyKCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5mb3JtSG9sZGVyQ2xhc3NOYW1lKSB7XG4gICAgICAgICAgICB0aGlzLmZvcm1Ib2xkZXIgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmZvcm1Ib2xkZXJDbGFzc05hbWUpWzBdO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmZvcm1Ib2xkZXIgPSBkb2N1bWVudC5ib2R5O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBjcmVhdGVGb3JtKCk6IHZvaWQge1xuICAgICAgICBpZiAoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQodGhpcy5mb3JtTmFtZSkpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IGZvcm1UZW1wbGF0ZSA9IGBcbiAgICAgICAgICAgIDxmb3JtIGlkPVwiJHt0aGlzLmZvcm1OYW1lfVwiIGNsYXNzPVwiaXMtaGlkZGVuXCIgbmFtZT1cIiR7dGhpcy5mb3JtTmFtZX1cIiBtZXRob2Q9XCJwb3N0XCIgYWN0aW9uPVwiJHt0aGlzLmZvcm1BY3Rpb259XCI+XG4gICAgICAgICAgICAgICAgJHt0aGlzLmZpZWxkc0NvbnRhaW5lci5pbm5lckhUTUx9XG4gICAgICAgICAgICA8L2Zvcm0+XG4gICAgICAgIGA7XG4gICAgICAgIHRoaXMuZm9ybUhvbGRlci5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGZvcm1UZW1wbGF0ZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlbW92ZUZpZWxkc0NvbnRhaW5lcigpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5maWVsZHNDb250YWluZXIucmVtb3ZlKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBmb3JtSG9sZGVyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnZm9ybS1ob2xkZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZm9ybU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGZvcm1BY3Rpb24oKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtLWFjdGlvbicpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=