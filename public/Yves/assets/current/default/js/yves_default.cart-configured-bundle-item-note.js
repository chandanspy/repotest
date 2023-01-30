(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["cart-configured-bundle-item-note"],{

/***/ "./src/Pyz/Yves/ConfigurableBundleNoteWidget/Theme/default/components/molecules/cart-configured-bundle-item-note/cart-configured-bundle-item-note.ts":
/*!***********************************************************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ConfigurableBundleNoteWidget/Theme/default/components/molecules/cart-configured-bundle-item-note/cart-configured-bundle-item-note.ts ***!
  \***********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CartConfiguredBundleItemNote; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class CartConfiguredBundleItemNote extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.editButton = void 0;
    this.removeButton = void 0;
    this.formTarget = void 0;
    this.textTarget = void 0;
  }

  readyCallback() {}

  init() {
    this.editButton = this.getElementsByClassName(this.jsName + "__edit")[0];
    this.removeButton = this.getElementsByClassName(this.jsName + "__remove")[0];
    this.formTarget = this.getElementsByClassName(this.jsName + "__form")[0];
    this.textTarget = this.getElementsByClassName(this.jsName + "__text-wrap")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.addEventListener('click', event => this.onTriggerClick(event));
  }

  onTriggerClick(event) {
    var target = event.target;

    while (target !== this) {
      if (target === this.editButton) {
        event.preventDefault();
        this.classToggle(this.formTarget);
        this.classToggle(this.textTarget);
        return;
      }

      if (target === this.removeButton) {
        event.preventDefault();
        var form = this.formTarget.getElementsByTagName('form')[0];
        var textarea = form.getElementsByTagName('textarea')[0];
        textarea.value = '';
        form.submit();
        return;
      }

      target = target.parentNode;
    }
  }

  classToggle(activeTrigger) {
    var isTriggerActive = activeTrigger.classList.contains(this.classToToggle);
    activeTrigger.classList.toggle(this.classToToggle, !isTriggerActive);
  }

  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ29uZmlndXJhYmxlQnVuZGxlTm90ZVdpZGdldC9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL2NhcnQtY29uZmlndXJlZC1idW5kbGUtaXRlbS1ub3RlL2NhcnQtY29uZmlndXJlZC1idW5kbGUtaXRlbS1ub3RlLnRzIl0sIm5hbWVzIjpbIkNhcnRDb25maWd1cmVkQnVuZGxlSXRlbU5vdGUiLCJDb21wb25lbnQiLCJlZGl0QnV0dG9uIiwicmVtb3ZlQnV0dG9uIiwiZm9ybVRhcmdldCIsInRleHRUYXJnZXQiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJDbGljayIsInRhcmdldCIsInByZXZlbnREZWZhdWx0IiwiY2xhc3NUb2dnbGUiLCJmb3JtIiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJ0ZXh0YXJlYSIsInZhbHVlIiwic3VibWl0IiwicGFyZW50Tm9kZSIsImFjdGl2ZVRyaWdnZXIiLCJpc1RyaWdnZXJBY3RpdmUiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImNsYXNzVG9Ub2dnbGUiLCJ0b2dnbGUiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLDRCQUFOLFNBQTJDQywrREFBM0MsQ0FBcUQ7QUFBQTtBQUFBO0FBQUEsU0FDdERDLFVBRHNEO0FBQUEsU0FFdERDLFlBRnNEO0FBQUEsU0FHdERDLFVBSHNEO0FBQUEsU0FJdERDLFVBSnNEO0FBQUE7O0FBTXREQyxlQUFhLEdBQVMsQ0FBRTs7QUFFeEJDLE1BQUksR0FBUztBQUNuQixTQUFLTCxVQUFMLEdBQXFDLEtBQUtNLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGFBQW9ELENBQXBELENBQXJDO0FBQ0EsU0FBS04sWUFBTCxHQUF1QyxLQUFLSyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxlQUFzRCxDQUF0RCxDQUF2QztBQUNBLFNBQUtMLFVBQUwsR0FBK0IsS0FBS0ksc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBL0I7QUFDQSxTQUFLSixVQUFMLEdBQStCLEtBQUtHLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGtCQUF5RCxDQUF6RCxDQUEvQjtBQUVBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtDLGdCQUFMLENBQXNCLE9BQXRCLEVBQWdDQyxLQUFELElBQWtCLEtBQUtDLGNBQUwsQ0FBb0JELEtBQXBCLENBQWpEO0FBQ0g7O0FBRVNDLGdCQUFjLENBQUNELEtBQUQsRUFBcUI7QUFDekMsUUFBSUUsTUFBTSxHQUFnQkYsS0FBSyxDQUFDRSxNQUFoQzs7QUFFQSxXQUFPQSxNQUFNLEtBQUssSUFBbEIsRUFBd0I7QUFDcEIsVUFBSUEsTUFBTSxLQUFLLEtBQUtaLFVBQXBCLEVBQWdDO0FBQzVCVSxhQUFLLENBQUNHLGNBQU47QUFDQSxhQUFLQyxXQUFMLENBQWlCLEtBQUtaLFVBQXRCO0FBQ0EsYUFBS1ksV0FBTCxDQUFpQixLQUFLWCxVQUF0QjtBQUVBO0FBQ0g7O0FBQ0QsVUFBSVMsTUFBTSxLQUFLLEtBQUtYLFlBQXBCLEVBQWtDO0FBQzlCUyxhQUFLLENBQUNHLGNBQU47QUFDQSxZQUFNRSxJQUFJLEdBQW9CLEtBQUtiLFVBQUwsQ0FBZ0JjLG9CQUFoQixDQUFxQyxNQUFyQyxFQUE2QyxDQUE3QyxDQUE5QjtBQUNBLFlBQU1DLFFBQVEsR0FBd0JGLElBQUksQ0FBQ0Msb0JBQUwsQ0FBMEIsVUFBMUIsRUFBc0MsQ0FBdEMsQ0FBdEM7QUFDQUMsZ0JBQVEsQ0FBQ0MsS0FBVCxHQUFpQixFQUFqQjtBQUNBSCxZQUFJLENBQUNJLE1BQUw7QUFFQTtBQUNIOztBQUNEUCxZQUFNLEdBQWdCQSxNQUFNLENBQUNRLFVBQTdCO0FBQ0g7QUFDSjs7QUFFU04sYUFBVyxDQUFDTyxhQUFELEVBQW1DO0FBQ3BELFFBQU1DLGVBQWUsR0FBR0QsYUFBYSxDQUFDRSxTQUFkLENBQXdCQyxRQUF4QixDQUFpQyxLQUFLQyxhQUF0QyxDQUF4QjtBQUNBSixpQkFBYSxDQUFDRSxTQUFkLENBQXdCRyxNQUF4QixDQUErQixLQUFLRCxhQUFwQyxFQUFtRCxDQUFDSCxlQUFwRDtBQUNIOztBQUUwQixNQUFiRyxhQUFhLEdBQVc7QUFDbEMsV0FBTyxLQUFLRSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBcEQrRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNhcnQtY29uZmlndXJlZC1idW5kbGUtaXRlbS1ub3RlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIENhcnRDb25maWd1cmVkQnVuZGxlSXRlbU5vdGUgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBlZGl0QnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgcmVtb3ZlQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZm9ybVRhcmdldDogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRleHRUYXJnZXQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZWRpdEJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19lZGl0YClbMF07XG4gICAgICAgIHRoaXMucmVtb3ZlQnV0dG9uID0gPEhUTUxCdXR0b25FbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3JlbW92ZWApWzBdO1xuICAgICAgICB0aGlzLmZvcm1UYXJnZXQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZm9ybWApWzBdO1xuICAgICAgICB0aGlzLnRleHRUYXJnZXQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fdGV4dC13cmFwYClbMF07XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJDbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgbGV0IHRhcmdldCA9IDxIVE1MRWxlbWVudD5ldmVudC50YXJnZXQ7XG5cbiAgICAgICAgd2hpbGUgKHRhcmdldCAhPT0gdGhpcykge1xuICAgICAgICAgICAgaWYgKHRhcmdldCA9PT0gdGhpcy5lZGl0QnV0dG9uKSB7XG4gICAgICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgICAgICB0aGlzLmNsYXNzVG9nZ2xlKHRoaXMuZm9ybVRhcmdldCk7XG4gICAgICAgICAgICAgICAgdGhpcy5jbGFzc1RvZ2dsZSh0aGlzLnRleHRUYXJnZXQpO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKHRhcmdldCA9PT0gdGhpcy5yZW1vdmVCdXR0b24pIHtcbiAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICAgICAgICAgIGNvbnN0IGZvcm0gPSA8SFRNTEZvcm1FbGVtZW50PnRoaXMuZm9ybVRhcmdldC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnZm9ybScpWzBdO1xuICAgICAgICAgICAgICAgIGNvbnN0IHRleHRhcmVhID0gPEhUTUxUZXh0QXJlYUVsZW1lbnQ+Zm9ybS5nZXRFbGVtZW50c0J5VGFnTmFtZSgndGV4dGFyZWEnKVswXTtcbiAgICAgICAgICAgICAgICB0ZXh0YXJlYS52YWx1ZSA9ICcnO1xuICAgICAgICAgICAgICAgIGZvcm0uc3VibWl0KCk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB0YXJnZXQgPSA8SFRNTEVsZW1lbnQ+dGFyZ2V0LnBhcmVudE5vZGU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgY2xhc3NUb2dnbGUoYWN0aXZlVHJpZ2dlcjogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgaXNUcmlnZ2VyQWN0aXZlID0gYWN0aXZlVHJpZ2dlci5jbGFzc0xpc3QuY29udGFpbnModGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICAgICAgYWN0aXZlVHJpZ2dlci5jbGFzc0xpc3QudG9nZ2xlKHRoaXMuY2xhc3NUb1RvZ2dsZSwgIWlzVHJpZ2dlckFjdGl2ZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvVG9nZ2xlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==