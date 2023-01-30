(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["toggler-hash"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-hash/toggler-hash.ts":
/*!*********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-hash/toggler-hash.ts ***!
  \*********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return TogglerHash; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class TogglerHash extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  /**
   * Elements targeted by the toggle action.
   */
  constructor() {
    super();
    /* tslint:disable: deprecation */

    this.targets = void 0;
    this.targets = Array.from(this.targetClassName ? document.getElementsByClassName(this.targetClassName) : document.querySelectorAll(this.targetSelector));
    /* tslint:enable: deprecation */
  }

  readyCallback() {
    this.checkHash();
    this.mapEvents();
  }

  mapEvents() {
    window.addEventListener('hashchange', event => this.onHashChange(event));
  }

  onHashChange(event) {
    this.checkHash();
  }
  /**
   * Checks the hash and triggers the flexible toggle action.
   */


  checkHash() {
    if (this.triggerHash === this.hash) {
      this.toggle(this.addClassWhenHashInUrl);
      return;
    }

    this.toggle(!this.addClassWhenHashInUrl);
  }
  /**
   * Toggles the class names in the target elements.
   * @param addClass A boolean value for a more flexible toggling action.
   */


  toggle(addClass) {
    this.targets.forEach(target => target.classList.toggle(this.classToToggle, addClass));
  }
  /**
   * Gets the current page url.
   */


  get hash() {
    return window.location.hash;
  }
  /**
   * Gets the trigger hash.
   */


  get triggerHash() {
    return this.getAttribute('trigger-hash');
  }
  /**
   * Gets a querySelector of the target element.
   *
   * @deprecated Use targetClassName() instead.
   */


  get targetSelector() {
    return this.getAttribute('target-selector');
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }
  /**
   * Gets a class name for the toggle action.
   */


  get classToToggle() {
    return this.getAttribute('class-to-toggle');
  }
  /**
   * Gets if the element should add the class when in blur.
   */


  get addClassWhenHashInUrl() {
    return this.hasAttribute('add-class-when-hash-in-url');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvdG9nZ2xlci1oYXNoL3RvZ2dsZXItaGFzaC50cyJdLCJuYW1lcyI6WyJUb2dnbGVySGFzaCIsIkNvbXBvbmVudCIsImNvbnN0cnVjdG9yIiwidGFyZ2V0cyIsIkFycmF5IiwiZnJvbSIsInRhcmdldENsYXNzTmFtZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJ0YXJnZXRTZWxlY3RvciIsInJlYWR5Q2FsbGJhY2siLCJjaGVja0hhc2giLCJtYXBFdmVudHMiLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvbkhhc2hDaGFuZ2UiLCJ0cmlnZ2VySGFzaCIsImhhc2giLCJ0b2dnbGUiLCJhZGRDbGFzc1doZW5IYXNoSW5VcmwiLCJhZGRDbGFzcyIsImZvckVhY2giLCJ0YXJnZXQiLCJjbGFzc0xpc3QiLCJjbGFzc1RvVG9nZ2xlIiwibG9jYXRpb24iLCJnZXRBdHRyaWJ1dGUiLCJoYXNBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVlLE1BQU1BLFdBQU4sU0FBMEJDLHlEQUExQixDQUFvQztBQUMvQztBQUNKO0FBQ0E7QUFHSUMsYUFBVyxHQUFHO0FBQ1Y7QUFDQTs7QUFGVSxTQUZMQyxPQUVLO0FBR1YsU0FBS0EsT0FBTCxHQUNJQyxLQUFLLENBQUNDLElBQU4sQ0FDSSxLQUFLQyxlQUFMLEdBQ01DLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0YsZUFBckMsQ0FETixHQUVNQyxRQUFRLENBQUNFLGdCQUFULENBQTBCLEtBQUtDLGNBQS9CLENBSFYsQ0FESjtBQU9BO0FBQ0g7O0FBRVNDLGVBQWEsR0FBUztBQUM1QixTQUFLQyxTQUFMO0FBQ0EsU0FBS0MsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEJDLFVBQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsWUFBeEIsRUFBdUNDLEtBQUQsSUFBa0IsS0FBS0MsWUFBTCxDQUFrQkQsS0FBbEIsQ0FBeEQ7QUFDSDs7QUFFU0MsY0FBWSxDQUFDRCxLQUFELEVBQXFCO0FBQ3ZDLFNBQUtKLFNBQUw7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ0lBLFdBQVMsR0FBUztBQUNkLFFBQUksS0FBS00sV0FBTCxLQUFxQixLQUFLQyxJQUE5QixFQUFvQztBQUNoQyxXQUFLQyxNQUFMLENBQVksS0FBS0MscUJBQWpCO0FBRUE7QUFDSDs7QUFFRCxTQUFLRCxNQUFMLENBQVksQ0FBQyxLQUFLQyxxQkFBbEI7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7QUFDSUQsUUFBTSxDQUFDRSxRQUFELEVBQTBCO0FBQzVCLFNBQUtuQixPQUFMLENBQWFvQixPQUFiLENBQXNCQyxNQUFELElBQXlCQSxNQUFNLENBQUNDLFNBQVAsQ0FBaUJMLE1BQWpCLENBQXdCLEtBQUtNLGFBQTdCLEVBQTRDSixRQUE1QyxDQUE5QztBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDWSxNQUFKSCxJQUFJLEdBQVc7QUFDZixXQUFPTCxNQUFNLENBQUNhLFFBQVAsQ0FBZ0JSLElBQXZCO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNtQixNQUFYRCxXQUFXLEdBQVc7QUFDdEIsV0FBTyxLQUFLVSxZQUFMLENBQWtCLGNBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7OztBQUNzQixNQUFkbEIsY0FBYyxHQUFXO0FBQ3pCLFdBQU8sS0FBS2tCLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7QUFDNEIsTUFBZnRCLGVBQWUsR0FBVztBQUNwQyxXQUFPLEtBQUtzQixZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNxQixNQUFiRixhQUFhLEdBQVc7QUFDeEIsV0FBTyxLQUFLRSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUM2QixNQUFyQlAscUJBQXFCLEdBQVk7QUFDakMsV0FBTyxLQUFLUSxZQUFMLENBQWtCLDRCQUFsQixDQUFQO0FBQ0g7O0FBM0Y4QyxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnRvZ2dsZXItaGFzaC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFRvZ2dsZXJIYXNoIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBFbGVtZW50cyB0YXJnZXRlZCBieSB0aGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICByZWFkb25seSB0YXJnZXRzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgY29uc3RydWN0b3IoKSB7XG4gICAgICAgIHN1cGVyKCk7XG4gICAgICAgIC8qIHRzbGludDpkaXNhYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgICAgICB0aGlzLnRhcmdldHMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKFxuICAgICAgICAgICAgICAgIHRoaXMudGFyZ2V0Q2xhc3NOYW1lXG4gICAgICAgICAgICAgICAgICAgID8gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRhcmdldENsYXNzTmFtZSlcbiAgICAgICAgICAgICAgICAgICAgOiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKHRoaXMudGFyZ2V0U2VsZWN0b3IpLFxuICAgICAgICAgICAgKVxuICAgICAgICApO1xuICAgICAgICAvKiB0c2xpbnQ6ZW5hYmxlOiBkZXByZWNhdGlvbiAqL1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNoZWNrSGFzaCgpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdoYXNoY2hhbmdlJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbkhhc2hDaGFuZ2UoZXZlbnQpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25IYXNoQ2hhbmdlKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNoZWNrSGFzaCgpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIENoZWNrcyB0aGUgaGFzaCBhbmQgdHJpZ2dlcnMgdGhlIGZsZXhpYmxlIHRvZ2dsZSBhY3Rpb24uXG4gICAgICovXG4gICAgY2hlY2tIYXNoKCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy50cmlnZ2VySGFzaCA9PT0gdGhpcy5oYXNoKSB7XG4gICAgICAgICAgICB0aGlzLnRvZ2dsZSh0aGlzLmFkZENsYXNzV2hlbkhhc2hJblVybCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudG9nZ2xlKCF0aGlzLmFkZENsYXNzV2hlbkhhc2hJblVybCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogVG9nZ2xlcyB0aGUgY2xhc3MgbmFtZXMgaW4gdGhlIHRhcmdldCBlbGVtZW50cy5cbiAgICAgKiBAcGFyYW0gYWRkQ2xhc3MgQSBib29sZWFuIHZhbHVlIGZvciBhIG1vcmUgZmxleGlibGUgdG9nZ2xpbmcgYWN0aW9uLlxuICAgICAqL1xuICAgIHRvZ2dsZShhZGRDbGFzczogYm9vbGVhbik6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldHMuZm9yRWFjaCgodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4gdGFyZ2V0LmNsYXNzTGlzdC50b2dnbGUodGhpcy5jbGFzc1RvVG9nZ2xlLCBhZGRDbGFzcykpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIGN1cnJlbnQgcGFnZSB1cmwuXG4gICAgICovXG4gICAgZ2V0IGhhc2goKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHdpbmRvdy5sb2NhdGlvbi5oYXNoO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHRyaWdnZXIgaGFzaC5cbiAgICAgKi9cbiAgICBnZXQgdHJpZ2dlckhhc2goKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLWhhc2gnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBvZiB0aGUgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdGFyZ2V0Q2xhc3NOYW1lKCkgaW5zdGVhZC5cbiAgICAgKi9cbiAgICBnZXQgdGFyZ2V0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0YXJnZXQtc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0YXJnZXRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0YXJnZXQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgYSBjbGFzcyBuYW1lIGZvciB0aGUgdG9nZ2xlIGFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgY2xhc3NUb1RvZ2dsZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2NsYXNzLXRvLXRvZ2dsZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIGVsZW1lbnQgc2hvdWxkIGFkZCB0aGUgY2xhc3Mgd2hlbiBpbiBibHVyLlxuICAgICAqL1xuICAgIGdldCBhZGRDbGFzc1doZW5IYXNoSW5VcmwoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmhhc0F0dHJpYnV0ZSgnYWRkLWNsYXNzLXdoZW4taGFzaC1pbi11cmwnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9