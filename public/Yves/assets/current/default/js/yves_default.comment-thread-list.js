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
/* harmony import */ var CommentWidget_components_molecules_comment_thread_list_comment_thread_list__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! CommentWidget/components/molecules/comment-thread-list/comment-thread-list */ "./vendor/spryker-shop/comment-widget/src/SprykerShop/Yves/CommentWidget/Theme/default/components/molecules/comment-thread-list/comment-thread-list.ts");

class CommentThreadListExtended extends CommentWidget_components_molecules_comment_thread_list_comment_thread_list__WEBPACK_IMPORTED_MODULE_0__["default"] {
  show() {
    var commentThreadSelect = this.commentThreadSelectComponent;
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  }

}

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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CommentThreadList extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.commentThreadSelectComponent = void 0;
    this.commentThread = void 0;
  }

  readyCallback() {
    this.commentThreadSelectComponent = document.querySelector(this.commentThreadSelectSelector);
    this.commentThread = Array.from(this.querySelectorAll("." + this.commentThreadSelector));
    this.show();
    this.mapEvents();
  }

  mapEvents() {
    this.commentThreadSelectComponent.addEventListener('change', event => {
      this.onSelectChange(event);
    });
  }

  show() {
    var commentThreadSelect = this.commentThreadSelectComponent.querySelector('select');
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  }

  onSelectChange(event) {
    var commentThreadSelect = event.target;
    this.onShowCommentThread(commentThreadSelect.value);
    this.scrollDown();
  }

  onShowCommentThread(showNameComment) {
    this.commentThread.forEach(comment => {
      var commentName = comment.getAttribute('name');

      if (commentName !== showNameComment) {
        comment.classList.add(this.classToToggle);
        return;
      }

      comment.classList.remove(this.classToToggle);
    });
  }

  scrollDown() {
    if (this.scrollHeight > this.clientHeight) {
      this.scrollTop = this.scrollHeight - this.clientHeight;
    }
  }
  /**
   * Gets a querySelector name of the select element.
   */


  get commentThreadSelectSelector() {
    return this.getAttribute('comment-thread-select-selector');
  }
  /**
   * Gets a querySelector name of the comment-thread component.
   */


  get commentThreadSelector() {
    return this.getAttribute('comment-thread-selector');
  }
  /**
   * Gets a class name for the toggle action.
   */


  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ29tbWVudFdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NvbW1lbnQtdGhyZWFkLWxpc3QvY29tbWVudC10aHJlYWQtbGlzdC1leHRlbmRlZC50cyIsIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL2NvbW1lbnQtd2lkZ2V0L3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL0NvbW1lbnRXaWRnZXQvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LXRocmVhZC1saXN0L2NvbW1lbnQtdGhyZWFkLWxpc3QudHMiXSwibmFtZXMiOlsiQ29tbWVudFRocmVhZExpc3RFeHRlbmRlZCIsIkNvbW1lbnRUaHJlYWRMaXN0Iiwic2hvdyIsImNvbW1lbnRUaHJlYWRTZWxlY3QiLCJjb21tZW50VGhyZWFkU2VsZWN0Q29tcG9uZW50Iiwib25TaG93Q29tbWVudFRocmVhZCIsInZhbHVlIiwic2Nyb2xsRG93biIsIkNvbXBvbmVudCIsImNvbW1lbnRUaHJlYWQiLCJyZWFkeUNhbGxiYWNrIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY29tbWVudFRocmVhZFNlbGVjdFNlbGVjdG9yIiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsImNvbW1lbnRUaHJlYWRTZWxlY3RvciIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uU2VsZWN0Q2hhbmdlIiwidGFyZ2V0Iiwic2hvd05hbWVDb21tZW50IiwiZm9yRWFjaCIsImNvbW1lbnQiLCJjb21tZW50TmFtZSIsImdldEF0dHJpYnV0ZSIsImNsYXNzTGlzdCIsImFkZCIsImNsYXNzVG9Ub2dnbGUiLCJyZW1vdmUiLCJzY3JvbGxIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzY3JvbGxUb3AiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLHlCQUFOLFNBQXdDQyxrSEFBeEMsQ0FBMEQ7QUFDM0RDLE1BQUksR0FBUztBQUNuQixRQUFNQyxtQkFBc0MsR0FBc0IsS0FBS0MsNEJBQXZFO0FBQ0EsU0FBS0MsbUJBQUwsQ0FBeUJGLG1CQUFtQixDQUFDRyxLQUE3QztBQUNBLFNBQUtDLFVBQUw7QUFDSDs7QUFMb0UsQzs7Ozs7Ozs7Ozs7O0FDRnpFO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTU4saUJBQU4sU0FBZ0NPLCtEQUFoQyxDQUEwQztBQUFBO0FBQUE7QUFBQSxTQUMzQ0osNEJBRDJDO0FBQUEsU0FFM0NLLGFBRjJDO0FBQUE7O0FBSTNDQyxlQUFhLEdBQVM7QUFDNUIsU0FBS04sNEJBQUwsR0FBaURPLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixLQUFLQywyQkFBNUIsQ0FBakQ7QUFDQSxTQUFLSixhQUFMLEdBQW9DSyxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLQyxnQkFBTCxPQUEwQixLQUFLQyxxQkFBL0IsQ0FBWCxDQUFwQztBQUNBLFNBQUtmLElBQUw7QUFDQSxTQUFLZ0IsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS2QsNEJBQUwsQ0FBa0NlLGdCQUFsQyxDQUFtRCxRQUFuRCxFQUE4REMsS0FBRCxJQUFrQjtBQUMzRSxXQUFLQyxjQUFMLENBQW9CRCxLQUFwQjtBQUNILEtBRkQ7QUFHSDs7QUFFU2xCLE1BQUksR0FBUztBQUNuQixRQUFNQyxtQkFBc0MsR0FBRyxLQUFLQyw0QkFBTCxDQUFrQ1EsYUFBbEMsQ0FBZ0QsUUFBaEQsQ0FBL0M7QUFDQSxTQUFLUCxtQkFBTCxDQUF5QkYsbUJBQW1CLENBQUNHLEtBQTdDO0FBQ0EsU0FBS0MsVUFBTDtBQUNIOztBQUVTYyxnQkFBYyxDQUFDRCxLQUFELEVBQXFCO0FBQ3pDLFFBQU1qQixtQkFBc0MsR0FBSWlCLEtBQUssQ0FBQ0UsTUFBdEQ7QUFDQSxTQUFLakIsbUJBQUwsQ0FBeUJGLG1CQUFtQixDQUFDRyxLQUE3QztBQUNBLFNBQUtDLFVBQUw7QUFDSDs7QUFFU0YscUJBQW1CLENBQUNrQixlQUFELEVBQWdDO0FBQ3pELFNBQUtkLGFBQUwsQ0FBbUJlLE9BQW5CLENBQTRCQyxPQUFELElBQTBCO0FBQ2pELFVBQU1DLFdBQVcsR0FBR0QsT0FBTyxDQUFDRSxZQUFSLENBQXFCLE1BQXJCLENBQXBCOztBQUVBLFVBQUlELFdBQVcsS0FBS0gsZUFBcEIsRUFBcUM7QUFDakNFLGVBQU8sQ0FBQ0csU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0IsS0FBS0MsYUFBM0I7QUFFQTtBQUNIOztBQUNETCxhQUFPLENBQUNHLFNBQVIsQ0FBa0JHLE1BQWxCLENBQXlCLEtBQUtELGFBQTlCO0FBQ0gsS0FURDtBQVVIOztBQUVTdkIsWUFBVSxHQUFTO0FBQ3pCLFFBQUksS0FBS3lCLFlBQUwsR0FBb0IsS0FBS0MsWUFBN0IsRUFBMkM7QUFDdkMsV0FBS0MsU0FBTCxHQUFpQixLQUFLRixZQUFMLEdBQW9CLEtBQUtDLFlBQTFDO0FBQ0g7QUFDSjtBQUVEO0FBQ0o7QUFDQTs7O0FBQ21DLE1BQTNCcEIsMkJBQTJCLEdBQVc7QUFDdEMsV0FBTyxLQUFLYyxZQUFMLENBQWtCLGdDQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUM2QixNQUFyQlYscUJBQXFCLEdBQVc7QUFDaEMsV0FBTyxLQUFLVSxZQUFMLENBQWtCLHlCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNxQixNQUFiRyxhQUFhLEdBQVc7QUFDeEIsV0FBTyxLQUFLSCxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBbkVvRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNvbW1lbnQtdGhyZWFkLWxpc3QuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tbWVudFRocmVhZExpc3QgZnJvbSAnQ29tbWVudFdpZGdldC9jb21wb25lbnRzL21vbGVjdWxlcy9jb21tZW50LXRocmVhZC1saXN0L2NvbW1lbnQtdGhyZWFkLWxpc3QnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBDb21tZW50VGhyZWFkTGlzdEV4dGVuZGVkIGV4dGVuZHMgQ29tbWVudFRocmVhZExpc3Qge1xuICAgIHByb3RlY3RlZCBzaG93KCk6IHZvaWQge1xuICAgICAgICBjb25zdCBjb21tZW50VGhyZWFkU2VsZWN0OiBIVE1MU2VsZWN0RWxlbWVudCA9IDxIVE1MU2VsZWN0RWxlbWVudD50aGlzLmNvbW1lbnRUaHJlYWRTZWxlY3RDb21wb25lbnQ7XG4gICAgICAgIHRoaXMub25TaG93Q29tbWVudFRocmVhZChjb21tZW50VGhyZWFkU2VsZWN0LnZhbHVlKTtcbiAgICAgICAgdGhpcy5zY3JvbGxEb3duKCk7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENvbW1lbnRUaHJlYWRMaXN0IGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgY29tbWVudFRocmVhZFNlbGVjdENvbXBvbmVudDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGNvbW1lbnRUaHJlYWQ6IEhUTUxFbGVtZW50W107XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jb21tZW50VGhyZWFkU2VsZWN0Q29tcG9uZW50ID0gPEhUTUxFbGVtZW50PmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5jb21tZW50VGhyZWFkU2VsZWN0U2VsZWN0b3IpO1xuICAgICAgICB0aGlzLmNvbW1lbnRUaHJlYWQgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMucXVlcnlTZWxlY3RvckFsbChgLiR7dGhpcy5jb21tZW50VGhyZWFkU2VsZWN0b3J9YCkpO1xuICAgICAgICB0aGlzLnNob3coKTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvbW1lbnRUaHJlYWRTZWxlY3RDb21wb25lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5vblNlbGVjdENoYW5nZShldmVudCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzaG93KCk6IHZvaWQge1xuICAgICAgICBjb25zdCBjb21tZW50VGhyZWFkU2VsZWN0OiBIVE1MU2VsZWN0RWxlbWVudCA9IHRoaXMuY29tbWVudFRocmVhZFNlbGVjdENvbXBvbmVudC5xdWVyeVNlbGVjdG9yKCdzZWxlY3QnKTtcbiAgICAgICAgdGhpcy5vblNob3dDb21tZW50VGhyZWFkKGNvbW1lbnRUaHJlYWRTZWxlY3QudmFsdWUpO1xuICAgICAgICB0aGlzLnNjcm9sbERvd24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25TZWxlY3RDaGFuZ2UoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGNvbW1lbnRUaHJlYWRTZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50ID0gKGV2ZW50LnRhcmdldCBhcyBIVE1MU2VsZWN0RWxlbWVudCk7XG4gICAgICAgIHRoaXMub25TaG93Q29tbWVudFRocmVhZChjb21tZW50VGhyZWFkU2VsZWN0LnZhbHVlKTtcbiAgICAgICAgdGhpcy5zY3JvbGxEb3duKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uU2hvd0NvbW1lbnRUaHJlYWQoc2hvd05hbWVDb21tZW50OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jb21tZW50VGhyZWFkLmZvckVhY2goKGNvbW1lbnQ6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBjb25zdCBjb21tZW50TmFtZSA9IGNvbW1lbnQuZ2V0QXR0cmlidXRlKCduYW1lJyk7XG5cbiAgICAgICAgICAgIGlmIChjb21tZW50TmFtZSAhPT0gc2hvd05hbWVDb21tZW50KSB7XG4gICAgICAgICAgICAgICAgY29tbWVudC5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBjb21tZW50LmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNjcm9sbERvd24oKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLnNjcm9sbEhlaWdodCA+IHRoaXMuY2xpZW50SGVpZ2h0KSB7XG4gICAgICAgICAgICB0aGlzLnNjcm9sbFRvcCA9IHRoaXMuc2Nyb2xsSGVpZ2h0IC0gdGhpcy5jbGllbnRIZWlnaHQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBzZWxlY3QgZWxlbWVudC5cbiAgICAgKi9cbiAgICBnZXQgY29tbWVudFRocmVhZFNlbGVjdFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY29tbWVudC10aHJlYWQtc2VsZWN0LXNlbGVjdG9yJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgY29tbWVudC10aHJlYWQgY29tcG9uZW50LlxuICAgICAqL1xuICAgIGdldCBjb21tZW50VGhyZWFkU2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjb21tZW50LXRocmVhZC1zZWxlY3RvcicpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBjbGFzcyBuYW1lIGZvciB0aGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=