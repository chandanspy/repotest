(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["comment-tag-form"],{

/***/ "./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-tag-form/comment-tag-form.ts":
/*!*******************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-tag-form/comment-tag-form.ts ***!
  \*******************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CommentTagForm; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CommentTagForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.commentTagForm = void 0;
    this.commentTagSelectComponent = void 0;
  }

  readyCallback() {
    this.commentTagForm = this.querySelector("." + this.jsName + "__form");
    this.commentTagSelectComponent = this.querySelector("." + this.jsName + "__select");
    this.mapEvents();
  }

  mapEvents() {
    this.commentTagSelectComponent.addEventListener('change', () => {
      this.commentTagForm.submit();
    });
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbW1lbnQtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbW1lbnRXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LXRhZy1mb3JtL2NvbW1lbnQtdGFnLWZvcm0udHMiXSwibmFtZXMiOlsiQ29tbWVudFRhZ0Zvcm0iLCJDb21wb25lbnQiLCJjb21tZW50VGFnRm9ybSIsImNvbW1lbnRUYWdTZWxlY3RDb21wb25lbnQiLCJyZWFkeUNhbGxiYWNrIiwicXVlcnlTZWxlY3RvciIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJzdWJtaXQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLGNBQU4sU0FBNkJDLCtEQUE3QixDQUF1QztBQUFBO0FBQUE7QUFBQSxTQUN4Q0MsY0FEd0M7QUFBQSxTQUV4Q0MseUJBRndDO0FBQUE7O0FBSXhDQyxlQUFhLEdBQVM7QUFDNUIsU0FBS0YsY0FBTCxHQUF1QyxLQUFLRyxhQUFMLE9BQXVCLEtBQUtDLE1BQTVCLFlBQXZDO0FBQ0EsU0FBS0gseUJBQUwsR0FBOEMsS0FBS0UsYUFBTCxPQUF1QixLQUFLQyxNQUE1QixjQUE5QztBQUNBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtKLHlCQUFMLENBQStCSyxnQkFBL0IsQ0FBZ0QsUUFBaEQsRUFBMEQsTUFBTTtBQUM1RCxXQUFLTixjQUFMLENBQW9CTyxNQUFwQjtBQUNILEtBRkQ7QUFHSDs7QUFkaUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5jb21tZW50LXRhZy1mb3JtLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENvbW1lbnRUYWdGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRhZ0Zvcm06IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRhZ1NlbGVjdENvbXBvbmVudDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jb21tZW50VGFnRm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5xdWVyeVNlbGVjdG9yKGAuJHt0aGlzLmpzTmFtZX1fX2Zvcm1gKTtcbiAgICAgICAgdGhpcy5jb21tZW50VGFnU2VsZWN0Q29tcG9uZW50ID0gPEhUTUxFbGVtZW50PnRoaXMucXVlcnlTZWxlY3RvcihgLiR7dGhpcy5qc05hbWV9X19zZWxlY3RgKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRUYWdTZWxlY3RDb21wb25lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5jb21tZW50VGFnRm9ybS5zdWJtaXQoKTtcbiAgICAgICAgfSk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==