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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class RemoteFormSubmit extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.formHolder = void 0;
    this.fieldsContainer = void 0;
    this.submitButton = void 0;
  }

  readyCallback() {}

  init() {
    this.fieldsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.submitButton = this.getElementsByClassName(this.jsName + "__submit")[0];
    this.getFormHolder();
    this.createForm();
    this.removeFieldsContainer();
    this.mapEvents();
  }

  mapEvents() {
    this.mapSubmitButtonClickEvent();
  }

  mapSubmitButtonClickEvent() {
    this.submitButton.addEventListener('click', () => this.submitTargetForm());
  }

  submitTargetForm() {
    var form = document.getElementById(this.formName);

    if (this.submitButton.dataset.formAction) {
      form.action = this.submitButton.dataset.formAction;
    }

    form.submit();
  }

  getFormHolder() {
    if (this.formHolderClassName) {
      this.formHolder = document.getElementsByClassName(this.formHolderClassName)[0];
      return;
    }

    this.formHolder = document.body;
  }

  createForm() {
    if (document.getElementById(this.formName)) {
      return;
    }

    var formTemplate = "\n            <form id=\"" + this.formName + "\" class=\"is-hidden\" name=\"" + this.formName + "\" method=\"post\" action=\"" + this.formAction + "\">\n                " + this.fieldsContainer.innerHTML + "\n            </form>\n        ";
    this.formHolder.insertAdjacentHTML('beforeend', formTemplate);
  }

  removeFieldsContainer() {
    this.fieldsContainer.remove();
  }

  get formHolderClassName() {
    return this.getAttribute('form-holder-class-name');
  }

  get formName() {
    return this.getAttribute('form-name');
  }

  get formAction() {
    return this.getAttribute('form-action');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvcmVtb3RlLWZvcm0tc3VibWl0L3JlbW90ZS1mb3JtLXN1Ym1pdC50cyJdLCJuYW1lcyI6WyJSZW1vdGVGb3JtU3VibWl0IiwiQ29tcG9uZW50IiwiZm9ybUhvbGRlciIsImZpZWxkc0NvbnRhaW5lciIsInN1Ym1pdEJ1dHRvbiIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsImdldEZvcm1Ib2xkZXIiLCJjcmVhdGVGb3JtIiwicmVtb3ZlRmllbGRzQ29udGFpbmVyIiwibWFwRXZlbnRzIiwibWFwU3VibWl0QnV0dG9uQ2xpY2tFdmVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJzdWJtaXRUYXJnZXRGb3JtIiwiZm9ybSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJmb3JtTmFtZSIsImRhdGFzZXQiLCJmb3JtQWN0aW9uIiwiYWN0aW9uIiwic3VibWl0IiwiZm9ybUhvbGRlckNsYXNzTmFtZSIsImJvZHkiLCJmb3JtVGVtcGxhdGUiLCJpbm5lckhUTUwiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJyZW1vdmUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGdCQUFOLFNBQStCQywrREFBL0IsQ0FBeUM7QUFBQTtBQUFBO0FBQUEsU0FDMUNDLFVBRDBDO0FBQUEsU0FFMUNDLGVBRjBDO0FBQUEsU0FHMUNDLFlBSDBDO0FBQUE7O0FBSzFDQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLSCxlQUFMLEdBQW9DLEtBQUtJLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGtCQUF5RCxDQUF6RCxDQUFwQztBQUNBLFNBQUtKLFlBQUwsR0FBdUMsS0FBS0csc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsZUFBc0QsQ0FBdEQsQ0FBdkM7QUFFQSxTQUFLQyxhQUFMO0FBQ0EsU0FBS0MsVUFBTDtBQUNBLFNBQUtDLHFCQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS0MseUJBQUw7QUFDSDs7QUFFU0EsMkJBQXlCLEdBQVM7QUFDeEMsU0FBS1QsWUFBTCxDQUFrQlUsZ0JBQWxCLENBQW1DLE9BQW5DLEVBQTRDLE1BQU0sS0FBS0MsZ0JBQUwsRUFBbEQ7QUFDSDs7QUFFU0Esa0JBQWdCLEdBQVM7QUFDL0IsUUFBTUMsSUFBSSxHQUFvQkMsUUFBUSxDQUFDQyxjQUFULENBQXdCLEtBQUtDLFFBQTdCLENBQTlCOztBQUVBLFFBQUksS0FBS2YsWUFBTCxDQUFrQmdCLE9BQWxCLENBQTBCQyxVQUE5QixFQUEwQztBQUN0Q0wsVUFBSSxDQUFDTSxNQUFMLEdBQWMsS0FBS2xCLFlBQUwsQ0FBa0JnQixPQUFsQixDQUEwQkMsVUFBeEM7QUFDSDs7QUFFREwsUUFBSSxDQUFDTyxNQUFMO0FBQ0g7O0FBRVNkLGVBQWEsR0FBUztBQUM1QixRQUFJLEtBQUtlLG1CQUFULEVBQThCO0FBQzFCLFdBQUt0QixVQUFMLEdBQStCZSxRQUFRLENBQUNWLHNCQUFULENBQWdDLEtBQUtpQixtQkFBckMsRUFBMEQsQ0FBMUQsQ0FBL0I7QUFFQTtBQUNIOztBQUVELFNBQUt0QixVQUFMLEdBQWtCZSxRQUFRLENBQUNRLElBQTNCO0FBQ0g7O0FBRVNmLFlBQVUsR0FBUztBQUN6QixRQUFJTyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsS0FBS0MsUUFBN0IsQ0FBSixFQUE0QztBQUN4QztBQUNIOztBQUVELFFBQU1PLFlBQVksaUNBQ0YsS0FBS1AsUUFESCxzQ0FDd0MsS0FBS0EsUUFEN0Msb0NBQ2dGLEtBQUtFLFVBRHJGLDZCQUVSLEtBQUtsQixlQUFMLENBQXFCd0IsU0FGYixvQ0FBbEI7QUFLQSxTQUFLekIsVUFBTCxDQUFnQjBCLGtCQUFoQixDQUFtQyxXQUFuQyxFQUFnREYsWUFBaEQ7QUFDSDs7QUFFU2YsdUJBQXFCLEdBQVM7QUFDcEMsU0FBS1IsZUFBTCxDQUFxQjBCLE1BQXJCO0FBQ0g7O0FBRWdDLE1BQW5CTCxtQkFBbUIsR0FBVztBQUN4QyxXQUFPLEtBQUtNLFlBQUwsQ0FBa0Isd0JBQWxCLENBQVA7QUFDSDs7QUFFcUIsTUFBUlgsUUFBUSxHQUFXO0FBQzdCLFdBQU8sS0FBS1csWUFBTCxDQUFrQixXQUFsQixDQUFQO0FBQ0g7O0FBRXVCLE1BQVZULFVBQVUsR0FBVztBQUMvQixXQUFPLEtBQUtTLFlBQUwsQ0FBa0IsYUFBbEIsQ0FBUDtBQUNIOztBQXhFbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5yZW1vdGUtZm9ybS1zdWJtaXQuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUmVtb3RlRm9ybVN1Ym1pdCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIGZvcm1Ib2xkZXI6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBmaWVsZHNDb250YWluZXI6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBzdWJtaXRCdXR0b246IEhUTUxCdXR0b25FbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZmllbGRzQ29udGFpbmVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2NvbnRhaW5lcmApWzBdO1xuICAgICAgICB0aGlzLnN1Ym1pdEJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zdWJtaXRgKVswXTtcblxuICAgICAgICB0aGlzLmdldEZvcm1Ib2xkZXIoKTtcbiAgICAgICAgdGhpcy5jcmVhdGVGb3JtKCk7XG4gICAgICAgIHRoaXMucmVtb3ZlRmllbGRzQ29udGFpbmVyKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5tYXBTdWJtaXRCdXR0b25DbGlja0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFN1Ym1pdEJ1dHRvbkNsaWNrRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4gdGhpcy5zdWJtaXRUYXJnZXRGb3JtKCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzdWJtaXRUYXJnZXRGb3JtKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBmb3JtID0gPEhUTUxGb3JtRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50QnlJZCh0aGlzLmZvcm1OYW1lKTtcblxuICAgICAgICBpZiAodGhpcy5zdWJtaXRCdXR0b24uZGF0YXNldC5mb3JtQWN0aW9uKSB7XG4gICAgICAgICAgICBmb3JtLmFjdGlvbiA9IHRoaXMuc3VibWl0QnV0dG9uLmRhdGFzZXQuZm9ybUFjdGlvbjtcbiAgICAgICAgfVxuXG4gICAgICAgIGZvcm0uc3VibWl0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldEZvcm1Ib2xkZXIoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmZvcm1Ib2xkZXJDbGFzc05hbWUpIHtcbiAgICAgICAgICAgIHRoaXMuZm9ybUhvbGRlciA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuZm9ybUhvbGRlckNsYXNzTmFtZSlbMF07XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuZm9ybUhvbGRlciA9IGRvY3VtZW50LmJvZHk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGNyZWF0ZUZvcm0oKTogdm9pZCB7XG4gICAgICAgIGlmIChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCh0aGlzLmZvcm1OYW1lKSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3QgZm9ybVRlbXBsYXRlID0gYFxuICAgICAgICAgICAgPGZvcm0gaWQ9XCIke3RoaXMuZm9ybU5hbWV9XCIgY2xhc3M9XCJpcy1oaWRkZW5cIiBuYW1lPVwiJHt0aGlzLmZvcm1OYW1lfVwiIG1ldGhvZD1cInBvc3RcIiBhY3Rpb249XCIke3RoaXMuZm9ybUFjdGlvbn1cIj5cbiAgICAgICAgICAgICAgICAke3RoaXMuZmllbGRzQ29udGFpbmVyLmlubmVySFRNTH1cbiAgICAgICAgICAgIDwvZm9ybT5cbiAgICAgICAgYDtcbiAgICAgICAgdGhpcy5mb3JtSG9sZGVyLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgZm9ybVRlbXBsYXRlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlRmllbGRzQ29udGFpbmVyKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmZpZWxkc0NvbnRhaW5lci5yZW1vdmUoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGZvcm1Ib2xkZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdmb3JtLWhvbGRlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBmb3JtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Zvcm0tbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZm9ybUFjdGlvbigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Zvcm0tYWN0aW9uJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==