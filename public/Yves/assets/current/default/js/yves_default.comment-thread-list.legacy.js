(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["comment-thread-list"],{

/***/ "./src/Pyz/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list-extended.ts":
/*!***************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list-extended.ts ***!
  \***************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CommentThreadListExtended; });
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var CommentWidget_components_molecules_comment_thread_list_comment_thread_list__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! CommentWidget/components/molecules/comment-thread-list/comment-thread-list */ "./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list.ts");



var CommentThreadListExtended = /*#__PURE__*/function (_CommentThreadList) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_0___default()(CommentThreadListExtended, _CommentThreadList);

  function CommentThreadListExtended() {
    return _CommentThreadList.apply(this, arguments) || this;
  }

  var _proto = CommentThreadListExtended.prototype;

  _proto.show = function show() {
    var commentThreadSelect = this.commentThreadSelectComponent;
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  };

  return CommentThreadListExtended;
}(CommentWidget_components_molecules_comment_thread_list_comment_thread_list__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ }),

/***/ "./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list.ts":
/*!*************************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list.ts ***!
  \*************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CommentThreadList; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var CommentThreadList = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(CommentThreadList, _Component);

  function CommentThreadList() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.commentThreadSelectComponent = void 0;
    _this.commentThread = void 0;
    return _this;
  }

  var _proto = CommentThreadList.prototype;

  _proto.readyCallback = function readyCallback() {
    this.commentThreadSelectComponent = document.querySelector(this.commentThreadSelectSelector);
    this.commentThread = Array.from(this.querySelectorAll("." + this.commentThreadSelector));
    this.show();
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.commentThreadSelectComponent.addEventListener('change', function (event) {
      _this2.onSelectChange(event);
    });
  };

  _proto.show = function show() {
    var commentThreadSelect = this.commentThreadSelectComponent.querySelector('select');
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  };

  _proto.onSelectChange = function onSelectChange(event) {
    var commentThreadSelect = event.target;
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  };

  _proto.onShowCommentThread = function onShowCommentThread(showNameComment) {
    var _this3 = this;

    this.commentThread.forEach(function (comment) {
      var commentName = comment.getAttribute('name');

      if (commentName !== showNameComment) {
        comment.classList.add(_this3.classToToggle);
        return;
      }

      comment.classList.remove(_this3.classToToggle);
    });
  };

  _proto.scrollDown = function scrollDown() {
    if (this.scrollHeight > this.clientHeight) {
      this.scrollTop = this.scrollHeight - this.clientHeight;
    }
  }
  /**
   * Gets a querySelector name of the select element.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(CommentThreadList, [{
    key: "commentThreadSelectSelector",
    get: function get() {
      return this.getAttribute('comment-thread-select-selector');
    }
    /**
     * Gets a querySelector name of the comment-thread component.
     */

  }, {
    key: "commentThreadSelector",
    get: function get() {
      return this.getAttribute('comment-thread-selector');
    }
    /**
     * Gets a class name for the toggle action.
     */

  }, {
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }]);

  return CommentThreadList;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ29tbWVudFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbW1lbnQtdGhyZWFkLWxpc3QvY29tbWVudC10aHJlYWQtbGlzdC1leHRlbmRlZC50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbW1lbnQtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbW1lbnRXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LXRocmVhZC1saXN0L2NvbW1lbnQtdGhyZWFkLWxpc3QudHMiXSwibmFtZXMiOlsiQ29tbWVudFRocmVhZExpc3RFeHRlbmRlZCIsInNob3ciLCJjb21tZW50VGhyZWFkU2VsZWN0IiwiY29tbWVudFRocmVhZFNlbGVjdENvbXBvbmVudCIsIm9uU2hvd0NvbW1lbnRUaHJlYWQiLCJ2YWx1ZSIsInNjcm9sbERvd24iLCJDb21tZW50VGhyZWFkTGlzdCIsImNvbW1lbnRUaHJlYWQiLCJyZWFkeUNhbGxiYWNrIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY29tbWVudFRocmVhZFNlbGVjdFNlbGVjdG9yIiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsImNvbW1lbnRUaHJlYWRTZWxlY3RvciIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uU2VsZWN0Q2hhbmdlIiwidGFyZ2V0Iiwic2hvd05hbWVDb21tZW50IiwiZm9yRWFjaCIsImNvbW1lbnQiLCJjb21tZW50TmFtZSIsImdldEF0dHJpYnV0ZSIsImNsYXNzTGlzdCIsImFkZCIsImNsYXNzVG9Ub2dnbGUiLCJyZW1vdmUiLCJzY3JvbGxIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzY3JvbGxUb3AiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFFcUJBLHlCOzs7Ozs7Ozs7U0FDUEMsSSxHQUFWLGdCQUF1QjtBQUNuQixRQUFNQyxtQkFBc0MsR0FBc0IsS0FBS0MsNEJBQXZFO0FBQ0EsU0FBS0MsbUJBQUwsQ0FBeUJGLG1CQUFtQixDQUFDRyxLQUE3QztBQUNBLFNBQUtDLFVBQUw7QUFDSCxHOzs7RUFMa0RDLGtIOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0Z2RDs7SUFFcUJBLGlCOzs7Ozs7Ozs7OztVQUNQSiw0QjtVQUNBSyxhOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQztBQUM1QixTQUFLTiw0QkFBTCxHQUFpRE8sUUFBUSxDQUFDQyxhQUFULENBQXVCLEtBQUtDLDJCQUE1QixDQUFqRDtBQUNBLFNBQUtKLGFBQUwsR0FBb0NLLEtBQUssQ0FBQ0MsSUFBTixDQUFXLEtBQUtDLGdCQUFMLE9BQTBCLEtBQUtDLHFCQUEvQixDQUFYLENBQXBDO0FBQ0EsU0FBS2YsSUFBTDtBQUNBLFNBQUtnQixTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUFBOztBQUN4QixTQUFLZCw0QkFBTCxDQUFrQ2UsZ0JBQWxDLENBQW1ELFFBQW5ELEVBQTZELFVBQUNDLEtBQUQsRUFBa0I7QUFDM0UsWUFBSSxDQUFDQyxjQUFMLENBQW9CRCxLQUFwQjtBQUNILEtBRkQ7QUFHSCxHOztTQUVTbEIsSSxHQUFWLGdCQUF1QjtBQUNuQixRQUFNQyxtQkFBc0MsR0FBRyxLQUFLQyw0QkFBTCxDQUFrQ1EsYUFBbEMsQ0FBZ0QsUUFBaEQsQ0FBL0M7QUFDQSxTQUFLUCxtQkFBTCxDQUF5QkYsbUJBQW1CLENBQUNHLEtBQTdDO0FBQ0EsU0FBS0MsVUFBTDtBQUNILEc7O1NBRVNjLGMsR0FBVix3QkFBeUJELEtBQXpCLEVBQTZDO0FBQ3pDLFFBQU1qQixtQkFBc0MsR0FBSWlCLEtBQUssQ0FBQ0UsTUFBdEQ7QUFDQSxTQUFLakIsbUJBQUwsQ0FBeUJGLG1CQUFtQixDQUFDRyxLQUE3QztBQUNBLFNBQUtDLFVBQUw7QUFDSCxHOztTQUVTRixtQixHQUFWLDZCQUE4QmtCLGVBQTlCLEVBQTZEO0FBQUE7O0FBQ3pELFNBQUtkLGFBQUwsQ0FBbUJlLE9BQW5CLENBQTJCLFVBQUNDLE9BQUQsRUFBMEI7QUFDakQsVUFBTUMsV0FBVyxHQUFHRCxPQUFPLENBQUNFLFlBQVIsQ0FBcUIsTUFBckIsQ0FBcEI7O0FBRUEsVUFBSUQsV0FBVyxLQUFLSCxlQUFwQixFQUFxQztBQUNqQ0UsZUFBTyxDQUFDRyxTQUFSLENBQWtCQyxHQUFsQixDQUFzQixNQUFJLENBQUNDLGFBQTNCO0FBRUE7QUFDSDs7QUFDREwsYUFBTyxDQUFDRyxTQUFSLENBQWtCRyxNQUFsQixDQUF5QixNQUFJLENBQUNELGFBQTlCO0FBQ0gsS0FURDtBQVVILEc7O1NBRVN2QixVLEdBQVYsc0JBQTZCO0FBQ3pCLFFBQUksS0FBS3lCLFlBQUwsR0FBb0IsS0FBS0MsWUFBN0IsRUFBMkM7QUFDdkMsV0FBS0MsU0FBTCxHQUFpQixLQUFLRixZQUFMLEdBQW9CLEtBQUtDLFlBQTFDO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTs7Ozs7U0FDSSxlQUEwQztBQUN0QyxhQUFPLEtBQUtOLFlBQUwsQ0FBa0IsZ0NBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7OztTQUNJLGVBQW9DO0FBQ2hDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQix5QkFBbEIsQ0FBUDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBNEI7QUFDeEIsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7Ozs7RUFuRTBDUSwrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5jb21tZW50LXRocmVhZC1saXN0LmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21tZW50VGhyZWFkTGlzdCBmcm9tICdDb21tZW50V2lkZ2V0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbW1lbnQtdGhyZWFkLWxpc3QvY29tbWVudC10aHJlYWQtbGlzdCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENvbW1lbnRUaHJlYWRMaXN0RXh0ZW5kZWQgZXh0ZW5kcyBDb21tZW50VGhyZWFkTGlzdCB7XG4gICAgcHJvdGVjdGVkIHNob3coKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNvbW1lbnRUaHJlYWRTZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50ID0gPEhUTUxTZWxlY3RFbGVtZW50PnRoaXMuY29tbWVudFRocmVhZFNlbGVjdENvbXBvbmVudDtcbiAgICAgICAgdGhpcy5vblNob3dDb21tZW50VGhyZWFkKGNvbW1lbnRUaHJlYWRTZWxlY3QudmFsdWUpO1xuICAgICAgICB0aGlzLnNjcm9sbERvd24oKTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29tbWVudFRocmVhZExpc3QgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBjb21tZW50VGhyZWFkU2VsZWN0Q29tcG9uZW50OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRocmVhZDogSFRNTEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRUaHJlYWRTZWxlY3RDb21wb25lbnQgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLmNvbW1lbnRUaHJlYWRTZWxlY3RTZWxlY3Rvcik7XG4gICAgICAgIHRoaXMuY29tbWVudFRocmVhZCA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5xdWVyeVNlbGVjdG9yQWxsKGAuJHt0aGlzLmNvbW1lbnRUaHJlYWRTZWxlY3Rvcn1gKSk7XG4gICAgICAgIHRoaXMuc2hvdygpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY29tbWVudFRocmVhZFNlbGVjdENvbXBvbmVudC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCAoZXZlbnQ6IEV2ZW50KSA9PiB7XG4gICAgICAgICAgICB0aGlzLm9uU2VsZWN0Q2hhbmdlKGV2ZW50KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNob3coKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNvbW1lbnRUaHJlYWRTZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50ID0gdGhpcy5jb21tZW50VGhyZWFkU2VsZWN0Q29tcG9uZW50LnF1ZXJ5U2VsZWN0b3IoJ3NlbGVjdCcpO1xuICAgICAgICB0aGlzLm9uU2hvd0NvbW1lbnRUaHJlYWQoY29tbWVudFRocmVhZFNlbGVjdC52YWx1ZSk7XG4gICAgICAgIHRoaXMuc2Nyb2xsRG93bigpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNlbGVjdENoYW5nZShldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY29tbWVudFRocmVhZFNlbGVjdDogSFRNTFNlbGVjdEVsZW1lbnQgPSAoZXZlbnQudGFyZ2V0IGFzIEhUTUxTZWxlY3RFbGVtZW50KTtcbiAgICAgICAgdGhpcy5vblNob3dDb21tZW50VGhyZWFkKGNvbW1lbnRUaHJlYWRTZWxlY3QudmFsdWUpO1xuICAgICAgICB0aGlzLnNjcm9sbERvd24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TaG93Q29tbWVudFRocmVhZChzaG93TmFtZUNvbW1lbnQ6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRUaHJlYWQuZm9yRWFjaCgoY29tbWVudDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnN0IGNvbW1lbnROYW1lID0gY29tbWVudC5nZXRBdHRyaWJ1dGUoJ25hbWUnKTtcblxuICAgICAgICAgICAgaWYgKGNvbW1lbnROYW1lICE9PSBzaG93TmFtZUNvbW1lbnQpIHtcbiAgICAgICAgICAgICAgICBjb21tZW50LmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKTtcblxuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGNvbW1lbnQuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmNsYXNzVG9Ub2dnbGUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2Nyb2xsRG93bigpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuc2Nyb2xsSGVpZ2h0ID4gdGhpcy5jbGllbnRIZWlnaHQpIHtcbiAgICAgICAgICAgIHRoaXMuc2Nyb2xsVG9wID0gdGhpcy5zY3JvbGxIZWlnaHQgLSB0aGlzLmNsaWVudEhlaWdodDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBxdWVyeVNlbGVjdG9yIG5hbWUgb2YgdGhlIHNlbGVjdCBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBjb21tZW50VGhyZWFkU2VsZWN0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjb21tZW50LXRocmVhZC1zZWxlY3Qtc2VsZWN0b3InKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBjb21tZW50LXRocmVhZCBjb21wb25lbnQuXG4gICAgICovXG4gICAgZ2V0IGNvbW1lbnRUaHJlYWRTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NvbW1lbnQtdGhyZWFkLXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNsYXNzIG5hbWUgZm9yIHRoZSB0b2dnbGUgYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==