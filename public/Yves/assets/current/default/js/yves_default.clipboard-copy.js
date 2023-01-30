(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["clipboard-copy"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/clipboard-copy/clipboard-copy.ts":
/*!*************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/clipboard-copy/clipboard-copy.ts ***!
  \*************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ClipboardCopy; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

var EVENT_COPY = 'copyToClipboard';
/**
 * @event copyToClipboard An event emitted when the component performs a copy.
 */

class ClipboardCopy extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.target = void 0;
    this.trigger = void 0;
    this.successCopyMessage = void 0;
    this.errorCopyMessage = void 0;
    this.durationTimeoutId = void 0;
    this.defaultDuration = 5000;
  }

  readyCallback() {
    /* tslint:disable: deprecation */
    this.trigger = this.triggerClassName ? document.getElementsByClassName(this.triggerClassName)[0] : document.querySelector(this.triggerSelector);
    this.target = this.targetClassName ? document.getElementsByClassName(this.targetClassName)[0] : document.querySelector(this.targetSelector);
    /* tslint:enable: deprecation */

    this.successCopyMessage = this.getElementsByClassName(this.jsName + "__success-message")[0];
    this.errorCopyMessage = this.getElementsByClassName(this.jsName + "__error-message")[0];
    this.mapEvents();
  }

  mapEvents() {
    this.trigger.addEventListener('click', event => this.onClick(event));
  }

  onClick(event) {
    this.copyToClipboard();
  }
  /**
   * Performs the copy to the clipboard and tells the component to show the message.
   */


  copyToClipboard() {
    if (!this.isCopyCommandSupported) {
      this.showMessage(this.errorCopyMessage, this.defaultDuration);
      return;
    }

    this.target.select();
    document.execCommand('copy');
    this.showMessage(this.successCopyMessage, this.defaultDuration);
    this.dispatchCustomEvent(EVENT_COPY);
  }
  /**
   * Shows the message during the time set.
   * @param message A HTMLElement which contains the text message.
   * @param duration A number value which defines the period of time for which the message is shown.
   */


  showMessage(message, duration) {
    message.classList.remove(this.hideClassName);
    this.durationTimeoutId = window.setTimeout(() => this.hideMessage(message), duration);
  }
  /**
   * Hides the message.
   * @param message A HTMLElement which contains the text message.
   */


  hideMessage(message) {
    clearTimeout(this.durationTimeoutId);
    message.classList.add(this.hideClassName);
  }
  /**
   * Gets a css query selector to address the html element that will trigger the copy to clipboard.
   *
   * @deprecated Use triggerClassName() instead.
   */


  get triggerSelector() {
    return this.getAttribute('trigger-selector');
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }
  /**
   * Gets a css query selector to address the html element containing the text to copy.
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
   * Gets if a browser supports the automatically copy to clipboard feature.
   */


  get isCopyCommandSupported() {
    return document.queryCommandSupported('copy');
  }
  /**
   * Gets a css class name for toggling an element.
   */


  get hideClassName() {
    return this.getAttribute('class-to-toggle');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvY2xpcGJvYXJkLWNvcHkvY2xpcGJvYXJkLWNvcHkudHMiXSwibmFtZXMiOlsiRVZFTlRfQ09QWSIsIkNsaXBib2FyZENvcHkiLCJDb21wb25lbnQiLCJ0YXJnZXQiLCJ0cmlnZ2VyIiwic3VjY2Vzc0NvcHlNZXNzYWdlIiwiZXJyb3JDb3B5TWVzc2FnZSIsImR1cmF0aW9uVGltZW91dElkIiwiZGVmYXVsdER1cmF0aW9uIiwicmVhZHlDYWxsYmFjayIsInRyaWdnZXJDbGFzc05hbWUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJxdWVyeVNlbGVjdG9yIiwidHJpZ2dlclNlbGVjdG9yIiwidGFyZ2V0Q2xhc3NOYW1lIiwidGFyZ2V0U2VsZWN0b3IiLCJqc05hbWUiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvbkNsaWNrIiwiY29weVRvQ2xpcGJvYXJkIiwiaXNDb3B5Q29tbWFuZFN1cHBvcnRlZCIsInNob3dNZXNzYWdlIiwic2VsZWN0IiwiZXhlY0NvbW1hbmQiLCJkaXNwYXRjaEN1c3RvbUV2ZW50IiwibWVzc2FnZSIsImR1cmF0aW9uIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiaGlkZUNsYXNzTmFtZSIsIndpbmRvdyIsInNldFRpbWVvdXQiLCJoaWRlTWVzc2FnZSIsImNsZWFyVGltZW91dCIsImFkZCIsImdldEF0dHJpYnV0ZSIsInF1ZXJ5Q29tbWFuZFN1cHBvcnRlZCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRUEsSUFBTUEsVUFBVSxHQUFHLGlCQUFuQjtBQUVBO0FBQ0E7QUFDQTs7QUFDZSxNQUFNQyxhQUFOLFNBQTRCQywrREFBNUIsQ0FBc0M7QUFBQTtBQUFBO0FB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WixRQUFRLENBQUM0QixxQkFBVCxDQUErQixNQUEvQixDQUFQO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNxQixNQUFiUCxhQUFhLEdBQVc7QUFDeEIsV0FBTyxLQUFLTSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBN0dnRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmNsaXBib2FyZC1jb3B5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmNvbnN0IEVWRU5UX0NPUFkgPSAnY29weVRvQ2xpcGJvYXJkJztcblxuLyoqXG4gKiBAZXZlbnQgY29weVRvQ2xpcGJvYXJkIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiB0aGUgY29tcG9uZW50IHBlcmZvcm1zIGEgY29weS5cbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ2xpcGJvYXJkQ29weSBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRhcmdldDogSFRNTElucHV0RWxlbWVudCB8IEhUTUxUZXh0QXJlYUVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBzdWNjZXNzQ29weU1lc3NhZ2U6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCBlcnJvckNvcHlNZXNzYWdlOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgZHVyYXRpb25UaW1lb3V0SWQ6IG51bWJlcjtcblxuICAgIC8qKlxuICAgICAqIERlZmF1bHQgbWVzc2FnZSBzaG93IGR1cmF0aW9uLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IGRlZmF1bHREdXJhdGlvbjogbnVtYmVyID0gNTAwMDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICAvKiB0c2xpbnQ6ZGlzYWJsZTogZGVwcmVjYXRpb24gKi9cbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxCdXR0b25FbGVtZW50PihcbiAgICAgICAgICAgICh0aGlzLnRyaWdnZXJDbGFzc05hbWVcbiAgICAgICAgICAgICAgICA/IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKVswXVxuICAgICAgICAgICAgICAgIDogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnRyaWdnZXJTZWxlY3RvcikpXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMudGFyZ2V0ID0gPEhUTUxJbnB1dEVsZW1lbnQgfCBIVE1MVGV4dEFyZWFFbGVtZW50PihcbiAgICAgICAgICAgICh0aGlzLnRhcmdldENsYXNzTmFtZVxuICAgICAgICAgICAgICAgID8gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRhcmdldENsYXNzTmFtZSlbMF1cbiAgICAgICAgICAgICAgICA6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy50YXJnZXRTZWxlY3RvcikpXG4gICAgICAgICk7XG4gICAgICAgIC8qIHRzbGludDplbmFibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMuc3VjY2Vzc0NvcHlNZXNzYWdlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3N1Y2Nlc3MtbWVzc2FnZWApWzBdO1xuICAgICAgICB0aGlzLmVycm9yQ29weU1lc3NhZ2UgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZXJyb3ItbWVzc2FnZWApWzBdO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25DbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNvcHlUb0NsaXBib2FyZCgpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHRoZSBjb3B5IHRvIHRoZSBjbGlwYm9hcmQgYW5kIHRlbGxzIHRoZSBjb21wb25lbnQgdG8gc2hvdyB0aGUgbWVzc2FnZS5cbiAgICAgKi9cbiAgICBjb3B5VG9DbGlwYm9hcmQoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy5pc0NvcHlDb21tYW5kU3VwcG9ydGVkKSB7XG4gICAgICAgICAgICB0aGlzLnNob3dNZXNzYWdlKHRoaXMuZXJyb3JDb3B5TWVzc2FnZSwgdGhpcy5kZWZhdWx0RHVyYXRpb24pO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRhcmdldC5zZWxlY3QoKTtcbiAgICAgICAgZG9jdW1lbnQuZXhlY0NvbW1hbmQoJ2NvcHknKTtcbiAgICAgICAgdGhpcy5zaG93TWVzc2FnZSh0aGlzLnN1Y2Nlc3NDb3B5TWVzc2FnZSwgdGhpcy5kZWZhdWx0RHVyYXRpb24pO1xuICAgICAgICB0aGlzLmRpc3BhdGNoQ3VzdG9tRXZlbnQoRVZFTlRfQ09QWSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2hvd3MgdGhlIG1lc3NhZ2UgZHVyaW5nIHRoZSB0aW1lIHNldC5cbiAgICAgKiBAcGFyYW0gbWVzc2FnZSBBIEhUTUxFbGVtZW50IHdoaWNoIGNvbnRhaW5zIHRoZSB0ZXh0IG1lc3NhZ2UuXG4gICAgICogQHBhcmFtIGR1cmF0aW9uIEEgbnVtYmVyIHZhbHVlIHdoaWNoIGRlZmluZXMgdGhlIHBlcmlvZCBvZiB0aW1lIGZvciB3aGljaCB0aGUgbWVzc2FnZSBpcyBzaG93bi5cbiAgICAgKi9cbiAgICBzaG93TWVzc2FnZShtZXNzYWdlOiBIVE1MRWxlbWVudCwgZHVyYXRpb246IG51bWJlcik6IHZvaWQge1xuICAgICAgICBtZXNzYWdlLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5oaWRlQ2xhc3NOYW1lKTtcbiAgICAgICAgdGhpcy5kdXJhdGlvblRpbWVvdXRJZCA9IHdpbmRvdy5zZXRUaW1lb3V0KCgpID0+IHRoaXMuaGlkZU1lc3NhZ2UobWVzc2FnZSksIGR1cmF0aW9uKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBIaWRlcyB0aGUgbWVzc2FnZS5cbiAgICAgKiBAcGFyYW0gbWVzc2FnZSBBIEhUTUxFbGVtZW50IHdoaWNoIGNvbnRhaW5zIHRoZSB0ZXh0IG1lc3NhZ2UuXG4gICAgICovXG4gICAgaGlkZU1lc3NhZ2UobWVzc2FnZTogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgY2xlYXJUaW1lb3V0KHRoaXMuZHVyYXRpb25UaW1lb3V0SWQpO1xuICAgICAgICBtZXNzYWdlLmNsYXNzTGlzdC5hZGQodGhpcy5oaWRlQ2xhc3NOYW1lKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgY3NzIHF1ZXJ5IHNlbGVjdG9yIHRvIGFkZHJlc3MgdGhlIGh0bWwgZWxlbWVudCB0aGF0IHdpbGwgdHJpZ2dlciB0aGUgY29weSB0byBjbGlwYm9hcmQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdHJpZ2dlckNsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRyaWdnZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0cmlnZ2VyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndHJpZ2dlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNzcyBxdWVyeSBzZWxlY3RvciB0byBhZGRyZXNzIHRoZSBodG1sIGVsZW1lbnQgY29udGFpbmluZyB0aGUgdGV4dCB0byBjb3B5LlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHRhcmdldENsYXNzTmFtZSgpIGluc3RlYWQuXG4gICAgICovXG4gICAgZ2V0IHRhcmdldFNlbGVjdG9yKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LXNlbGVjdG9yJyk7XG4gICAgfVxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGlmIGEgYnJvd3NlciBzdXBwb3J0cyB0aGUgYXV0b21hdGljYWxseSBjb3B5IHRvIGNsaXBib2FyZCBmZWF0dXJlLlxuICAgICAqL1xuICAgIGdldCBpc0NvcHlDb21tYW5kU3VwcG9ydGVkKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gZG9jdW1lbnQucXVlcnlDb21tYW5kU3VwcG9ydGVkKCdjb3B5Jyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIGNzcyBjbGFzcyBuYW1lIGZvciB0b2dnbGluZyBhbiBlbGVtZW50LlxuICAgICAqL1xuICAgIGdldCBoaWRlQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tdG9nZ2xlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==