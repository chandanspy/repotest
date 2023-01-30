(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["comment-form"],{

/***/ "./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-form/comment-form.ts":
/*!***********************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-form/comment-form.ts ***!
  \***********************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CommentForm; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CommentForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.commentForm = void 0;
    this.submitButton = void 0;
    this.removeButton = void 0;
  }

  readyCallback() {
    this.commentForm = this.querySelector("." + this.jsName + "__form");
    this.submitButton = this.querySelector("." + this.jsName + "__submit-button");
    this.removeButton = this.querySelector("." + this.jsName + "__remove-button");
    this.mapEvents();
  }

  mapEvents() {
    this.submitButton.addEventListener('click', event => {
      this.onButtonFormClick(event, this.editFormActionAttribute);
    });

    if (this.removeButton) {
      this.removeButton.addEventListener('click', event => {
        this.onButtonFormClick(event, this.removeFormActionAttribute);
      });
    }
  }

  onButtonFormClick(event, action) {
    event.preventDefault();
    this.commentForm.setAttribute('action', action);
    this.commentForm.submit();
  }
  /**
   * Gets an attribute name for form element.
   */


  get editFormActionAttribute() {
    return this.submitButton.getAttribute('action');
  }
  /**
   * Gets an attribute name for form element.
   */


  get removeFormActionAttribute() {
    return this.removeButton.getAttribute('action');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbW1lbnQtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbW1lbnRXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LWZvcm0vY29tbWVudC1mb3JtLnRzIl0sIm5hbWVzIjpbIkNvbW1lbnRGb3JtIiwiQ29tcG9uZW50IiwiY29tbWVudEZvcm0iLCJzdWJtaXRCdXR0b24iLCJyZW1vdmVCdXR0b24iLCJyZWFkeUNhbGxiYWNrIiwicXVlcnlTZWxlY3RvciIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uQnV0dG9uRm9ybUNsaWNrIiwiZWRpdEZvcm1BY3Rpb25BdHRyaWJ1dGUiLCJyZW1vdmVGb3JtQWN0aW9uQXR0cmlidXRlIiwiYWN0aW9uIiwicHJldmVudERlZmF1bHQiLCJzZXRBdHRyaWJ1dGUiLCJzdWJtaXQiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLFdBQU4sU0FBMEJDLCtEQUExQixDQUFvQztBQUFBO0FBQUE7QUFBQSxTQUNyQ0MsV0FEcUM7QUFBQSxTQUVyQ0MsWUFGcUM7QUFBQSxTQUdyQ0MsWUFIcUM7QUFBQTs7QUFLckNDLGVBQWEsR0FBUztBQUM1QixTQUFLSCxXQUFMLEdBQW9DLEtBQUtJLGFBQUwsT0FBdUIsS0FBS0MsTUFBNUIsWUFBcEM7QUFDQSxTQUFLSixZQUFMLEdBQXVDLEtBQUtHLGFBQUwsT0FBdUIsS0FBS0MsTUFBNUIscUJBQXZDO0FBQ0EsU0FBS0gsWUFBTCxHQUF1QyxLQUFLRSxhQUFMLE9BQXVCLEtBQUtDLE1BQTVCLHFCQUF2QztBQUNBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtMLFlBQUwsQ0FBa0JNLGdCQUFsQixDQUFtQyxPQUFuQyxFQUE2Q0MsS0FBRCxJQUFrQjtBQUMxRCxXQUFLQyxpQkFBTCxDQUF1QkQsS0FBdkIsRUFBOEIsS0FBS0UsdUJBQW5DO0FBQ0gsS0FGRDs7QUFJQSxRQUFJLEtBQUtSLFlBQVQsRUFBdUI7QUFDbkIsV0FBS0EsWUFBTCxDQUFrQkssZ0JBQWxCLENBQW1DLE9BQW5DLEVBQTZDQyxLQUFELElBQWtCO0FBQzFELGFBQUtDLGlCQUFMLENBQXVCRCxLQUF2QixFQUE4QixLQUFLRyx5QkFBbkM7QUFDSCxPQUZEO0FBR0g7QUFDSjs7QUFFU0YsbUJBQWlCLENBQUNELEtBQUQsRUFBZUksTUFBZixFQUFxQztBQUM1REosU0FBSyxDQUFDSyxjQUFOO0FBQ0EsU0FBS2IsV0FBTCxDQUFpQmMsWUFBakIsQ0FBOEIsUUFBOUIsRUFBd0NGLE1BQXhDO0FBQ0EsU0FBS1osV0FBTCxDQUFpQmUsTUFBakI7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQytCLE1BQXZCTCx1QkFBdUIsR0FBVztBQUNsQyxXQUFPLEtBQUtULFlBQUwsQ0FBa0JlLFlBQWxCLENBQStCLFFBQS9CLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ2lDLE1BQXpCTCx5QkFBeUIsR0FBVztBQUNwQyxXQUFPLEtBQUtULFlBQUwsQ0FBa0JjLFlBQWxCLENBQStCLFFBQS9CLENBQVA7QUFDSDs7QUExQzhDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuY29tbWVudC1mb3JtLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENvbW1lbnRGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgY29tbWVudEZvcm06IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgc3VibWl0QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcmVtb3ZlQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRGb3JtID0gPEhUTUxGb3JtRWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoYC4ke3RoaXMuanNOYW1lfV9fZm9ybWApO1xuICAgICAgICB0aGlzLnN1Ym1pdEJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoYC4ke3RoaXMuanNOYW1lfV9fc3VibWl0LWJ1dHRvbmApO1xuICAgICAgICB0aGlzLnJlbW92ZUJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLnF1ZXJ5U2VsZWN0b3IoYC4ke3RoaXMuanNOYW1lfV9fcmVtb3ZlLWJ1dHRvbmApO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5vbkJ1dHRvbkZvcm1DbGljayhldmVudCwgdGhpcy5lZGl0Rm9ybUFjdGlvbkF0dHJpYnV0ZSk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGlmICh0aGlzLnJlbW92ZUJ1dHRvbikge1xuICAgICAgICAgICAgdGhpcy5yZW1vdmVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgdGhpcy5vbkJ1dHRvbkZvcm1DbGljayhldmVudCwgdGhpcy5yZW1vdmVGb3JtQWN0aW9uQXR0cmlidXRlKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQnV0dG9uRm9ybUNsaWNrKGV2ZW50OiBFdmVudCwgYWN0aW9uOiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5jb21tZW50Rm9ybS5zZXRBdHRyaWJ1dGUoJ2FjdGlvbicsIGFjdGlvbik7XG4gICAgICAgIHRoaXMuY29tbWVudEZvcm0uc3VibWl0KCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhbiBhdHRyaWJ1dGUgbmFtZSBmb3IgZm9ybSBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBlZGl0Rm9ybUFjdGlvbkF0dHJpYnV0ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5zdWJtaXRCdXR0b24uZ2V0QXR0cmlidXRlKCdhY3Rpb24nKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGFuIGF0dHJpYnV0ZSBuYW1lIGZvciBmb3JtIGVsZW1lbnQuXG4gICAgICovXG4gICAgZ2V0IHJlbW92ZUZvcm1BY3Rpb25BdHRyaWJ1dGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMucmVtb3ZlQnV0dG9uLmdldEF0dHJpYnV0ZSgnYWN0aW9uJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==