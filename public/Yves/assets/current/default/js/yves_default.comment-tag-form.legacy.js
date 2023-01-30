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
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var CommentTagForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(CommentTagForm, _Component);

  function CommentTagForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.commentTagForm = void 0;
    _this.commentTagSelectComponent = void 0;
    return _this;
  }

  var _proto = CommentTagForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.commentTagForm = this.querySelector("." + this.jsName + "__form");
    this.commentTagSelectComponent = this.querySelector("." + this.jsName + "__select");
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.commentTagSelectComponent.addEventListener('change', function () {
      _this2.commentTagForm.submit();
    });
  };

  return CommentTagForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbW1lbnQtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbW1lbnRXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LXRhZy1mb3JtL2NvbW1lbnQtdGFnLWZvcm0udHMiXSwibmFtZXMiOlsiQ29tbWVudFRhZ0Zvcm0iLCJjb21tZW50VGFnRm9ybSIsImNvbW1lbnRUYWdTZWxlY3RDb21wb25lbnQiLCJyZWFkeUNhbGxiYWNrIiwicXVlcnlTZWxlY3RvciIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJzdWJtaXQiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLGM7Ozs7Ozs7Ozs7O1VBQ1BDLGM7VUFDQUMseUI7Ozs7OztTQUVBQyxhLEdBQVYseUJBQWdDO0FBQzVCLFNBQUtGLGNBQUwsR0FBdUMsS0FBS0csYUFBTCxPQUF1QixLQUFLQyxNQUE1QixZQUF2QztBQUNBLFNBQUtILHlCQUFMLEdBQThDLEtBQUtFLGFBQUwsT0FBdUIsS0FBS0MsTUFBNUIsY0FBOUM7QUFDQSxTQUFLQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLSix5QkFBTCxDQUErQkssZ0JBQS9CLENBQWdELFFBQWhELEVBQTBELFlBQU07QUFDNUQsWUFBSSxDQUFDTixjQUFMLENBQW9CTyxNQUFwQjtBQUNILEtBRkQ7QUFHSCxHOzs7RUFkdUNDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNvbW1lbnQtdGFnLWZvcm0ubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENvbW1lbnRUYWdGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRhZ0Zvcm06IEhUTUxGb3JtRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRhZ1NlbGVjdENvbXBvbmVudDogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jb21tZW50VGFnRm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5xdWVyeVNlbGVjdG9yKGAuJHt0aGlzLmpzTmFtZX1fX2Zvcm1gKTtcbiAgICAgICAgdGhpcy5jb21tZW50VGFnU2VsZWN0Q29tcG9uZW50ID0gPEhUTUxFbGVtZW50PnRoaXMucXVlcnlTZWxlY3RvcihgLiR7dGhpcy5qc05hbWV9X19zZWxlY3RgKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRUYWdTZWxlY3RDb21wb25lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5jb21tZW50VGFnRm9ybS5zdWJtaXQoKTtcbiAgICAgICAgfSk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==