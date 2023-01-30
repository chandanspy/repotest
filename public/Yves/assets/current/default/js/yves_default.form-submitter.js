(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["form-submitter"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts":
/*!*************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts ***!
  \*************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormSubmitter; });
/* harmony import */ var ShopUi_components_molecules_form_submitter_form_submitter__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/components/molecules/form-submitter/form-submitter */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts");

class FormSubmitter extends ShopUi_components_molecules_form_submitter_form_submitter__WEBPACK_IMPORTED_MODULE_0__["default"] {
  onEvent(event) {
    var trigger = event.currentTarget;
    var form = this.formClassName ? document.getElementsByClassName(this.formClassName)[0] : trigger.closest(TAG_NAME);

    if (!form) {
      return;
    }

    var submit = form.querySelector('[type="submit"]') || form.querySelector('button:not([type])');

    if (submit) {
      submit.click();
      return;
    }

    form.submit();
  }

  get formClassName() {
    return this.getAttribute('form-class-name');
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts":
/*!*************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.ts ***!
  \*************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FormSubmitter; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

var TAG_NAME = 'form';
class FormSubmitter extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(document.querySelectorAll(this.triggerSelector));
    this.mapEvents();
  }

  mapEvents() {
    this.triggers.forEach(trigger => trigger.addEventListener(this.eventName, event => this.onEvent(event)));
  }

  onEvent(event) {
    var trigger = event.currentTarget;
    var form = trigger.closest(TAG_NAME);

    if (!form) {
      return;
    }

    var submit = form.querySelector('[type="submit"]') || form.querySelector('button');

    if (submit) {
      submit.click();
    }

    form.submit();
  }

  get triggerSelector() {
    return this.getAttribute('trigger-selector');
  }

  get eventName() {
    return this.getAttribute('event');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1zdWJtaXR0ZXIvZm9ybS1zdWJtaXR0ZXIudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2Zvcm0tc3VibWl0dGVyL2Zvcm0tc3VibWl0dGVyLnRzIl0sIm5hbWVzIjpbIkZvcm1TdWJtaXR0ZXIiLCJGb3JtU3VibWl0dGVyQ29yZSIsIm9uRXZlbnQiLCJldmVudCIsInRyaWdnZXIiLCJjdXJyZW50VGFyZ2V0IiwiZm9ybSIsImZvcm1DbGFzc05hbWUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJjbG9zZXN0IiwiVEFHX05BTUUiLCJzdWJtaXQiLCJxdWVyeVNlbGVjdG9yIiwiY2xpY2siLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiLCJ0cmlnZ2VycyIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsInRyaWdnZXJTZWxlY3RvciIsIm1hcEV2ZW50cyIsImZvckVhY2giLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnROYW1lIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSxhQUFOLFNBQTRCQyxpR0FBNUIsQ0FBOEM7QUFDL0NDLFNBQU8sQ0FBQ0MsS0FBRCxFQUFxQjtBQUNsQyxRQUFNQyxPQUFPLEdBQW9CRCxLQUFLLENBQUNFLGFBQXZDO0FBQ0EsUUFBTUMsSUFBSSxHQUNOLEtBQUtDLGFBQUwsR0FBcUJDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0YsYUFBckMsRUFBb0QsQ0FBcEQsQ0FBckIsR0FBOEVILE9BQU8sQ0FBQ00sT0FBUixDQUFnQkMsUUFBaEIsQ0FEbEY7O0FBSUEsUUFBSSxDQUFDTCxJQUFMLEVBQVc7QUFDUDtBQUNIOztBQUVELFFBQU1NLE1BQU0sR0FDOEJOLElBQUksQ0FBQ08sYUFBTCxDQUFtQixpQkFBbkIsQ0FBdEMsSUFDbUJQLElBQUksQ0FBQ08sYUFBTCxDQUFtQixvQkFBbkIsQ0FGdkI7O0FBSUEsUUFBSUQsTUFBSixFQUFZO0FBQ1JBLFlBQU0sQ0FBQ0UsS0FBUDtBQUVBO0FBQ0g7O0FBRURSLFFBQUksQ0FBQ00sTUFBTDtBQUNIOztBQUUwQixNQUFiTCxhQUFhLEdBQVc7QUFDbEMsV0FBTyxLQUFLUSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBMUJ3RCxDOzs7Ozs7Ozs7Ozs7QUNGN0Q7QUFBQTtBQUFBO0FBQUE7QUFFQSxJQUFNSixRQUFRLEdBQUcsTUFBakI7QUFFZSxNQUFNWCxhQUFOLFNBQTRCZ0IsK0RBQTVCLENBQXNDO0FBQUE7QUFBQTtBQUFBLFNBQ3ZDQyxRQUR1QztBQUFBOztBQUd2Q0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0YsUUFBTCxHQUErQkcsS0FBSyxDQUFDQyxJQUFOLENBQVdiLFFBQVEsQ0FBQ2MsZ0JBQVQsQ0FBMEIsS0FBS0MsZUFBL0IsQ0FBWCxDQUEvQjtBQUNBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtQLFFBQUwsQ0FBY1EsT0FBZCxDQUF1QnJCLE9BQUQsSUFDbEJBLE9BQU8sQ0FBQ3NCLGdCQUFSLENBQXlCLEtBQUtDLFNBQTlCLEVBQTBDeEIsS0FBRCxJQUFrQixLQUFLRCxPQUFMLENBQWFDLEtBQWIsQ0FBM0QsQ0FESjtBQUdIOztBQUVTRCxTQUFPLENBQUNDLEtBQUQsRUFBcUI7QUFDbEMsUUFBTUMsT0FBTyxHQUFvQkQsS0FBSyxDQUFDRSxhQUF2QztBQUNBLFFBQU1DLElBQUksR0FBb0JGLE9BQU8sQ0FBQ00sT0FBUixDQUFnQkMsUUFBaEIsQ0FBOUI7O0FBRUEsUUFBSSxDQUFDTCxJQUFMLEVBQVc7QUFDUDtBQUNIOztBQUVELFFBQU1NLE1BQU0sR0FDOEJOLElBQUksQ0FBQ08sYUFBTCxDQUFtQixpQkFBbkIsQ0FBdEMsSUFDbUJQLElBQUksQ0FBQ08sYUFBTCxDQUFtQixRQUFuQixDQUZ2Qjs7QUFJQSxRQUFJRCxNQUFKLEVBQVk7QUFDUkEsWUFBTSxDQUFDRSxLQUFQO0FBQ0g7O0FBRURSLFFBQUksQ0FBQ00sTUFBTDtBQUNIOztBQUU0QixNQUFmVyxlQUFlLEdBQVc7QUFDcEMsV0FBTyxLQUFLUixZQUFMLENBQWtCLGtCQUFsQixDQUFQO0FBQ0g7O0FBRXNCLE1BQVRZLFNBQVMsR0FBVztBQUM5QixXQUFPLEtBQUtaLFlBQUwsQ0FBa0IsT0FBbEIsQ0FBUDtBQUNIOztBQXpDZ0QsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5mb3JtLXN1Ym1pdHRlci5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBGb3JtU3VibWl0dGVyQ29yZSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvZm9ybS1zdWJtaXR0ZXIvZm9ybS1zdWJtaXR0ZXInO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBGb3JtU3VibWl0dGVyIGV4dGVuZHMgRm9ybVN1Ym1pdHRlckNvcmUge1xuICAgIHByb3RlY3RlZCBvbkV2ZW50KGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCB0cmlnZ2VyID0gPEhUTUxGb3JtRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICBjb25zdCBmb3JtID0gPEhUTUxGb3JtRWxlbWVudD4oXG4gICAgICAgICAgICB0aGlzLmZvcm1DbGFzc05hbWUgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuZm9ybUNsYXNzTmFtZSlbMF0gOiB0cmlnZ2VyLmNsb3Nlc3QoVEFHX05BTUUpXG4gICAgICAgICk7XG5cbiAgICAgICAgaWYgKCFmb3JtKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBzdWJtaXQgPVxuICAgICAgICAgICAgPEhUTUxCdXR0b25FbGVtZW50IHwgSFRNTElucHV0RWxlbWVudD5mb3JtLnF1ZXJ5U2VsZWN0b3IoJ1t0eXBlPVwic3VibWl0XCJdJykgfHxcbiAgICAgICAgICAgIDxIVE1MQnV0dG9uRWxlbWVudD5mb3JtLnF1ZXJ5U2VsZWN0b3IoJ2J1dHRvbjpub3QoW3R5cGVdKScpO1xuXG4gICAgICAgIGlmIChzdWJtaXQpIHtcbiAgICAgICAgICAgIHN1Ym1pdC5jbGljaygpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBmb3JtLnN1Ym1pdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZm9ybUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2Zvcm0tY2xhc3MtbmFtZScpO1xuICAgIH1cbn1cbiIsImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5jb25zdCBUQUdfTkFNRSA9ICdmb3JtJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRm9ybVN1Ym1pdHRlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy50cmlnZ2VyU2VsZWN0b3IpKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXIpID0+XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIodGhpcy5ldmVudE5hbWUsIChldmVudDogRXZlbnQpID0+IHRoaXMub25FdmVudChldmVudCkpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkV2ZW50KGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCB0cmlnZ2VyID0gPEhUTUxGb3JtRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICBjb25zdCBmb3JtID0gPEhUTUxGb3JtRWxlbWVudD50cmlnZ2VyLmNsb3Nlc3QoVEFHX05BTUUpO1xuXG4gICAgICAgIGlmICghZm9ybSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3Qgc3VibWl0ID1cbiAgICAgICAgICAgIDxIVE1MQnV0dG9uRWxlbWVudCB8IEhUTUxJbnB1dEVsZW1lbnQ+Zm9ybS5xdWVyeVNlbGVjdG9yKCdbdHlwZT1cInN1Ym1pdFwiXScpIHx8XG4gICAgICAgICAgICA8SFRNTEJ1dHRvbkVsZW1lbnQ+Zm9ybS5xdWVyeVNlbGVjdG9yKCdidXR0b24nKTtcblxuICAgICAgICBpZiAoc3VibWl0KSB7XG4gICAgICAgICAgICBzdWJtaXQuY2xpY2soKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGZvcm0uc3VibWl0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBldmVudE5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdldmVudCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=