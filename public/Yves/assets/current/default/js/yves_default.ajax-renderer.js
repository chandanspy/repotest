(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["ajax-renderer"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-renderer/ajax-renderer.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-renderer/ajax-renderer.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AjaxRenderer; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var _ajax_provider_ajax_provider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../ajax-provider/ajax-provider */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-provider/ajax-provider.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");



class AjaxRenderer extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.provider = void 0;
    this.target = void 0;
  }

  readyCallback() {
    /* tslint:disable: deprecation */
    this.provider = this.providerClassName ? document.getElementsByClassName(this.providerClassName)[0] : document.querySelector(this.providerSelector);
    this.target = this.targetClassName ? document.getElementsByClassName(this.targetClassName)[0] : document.querySelector(this.targetSelector ? this.targetSelector : undefined);
    /* tslint:enable: deprecation */

    this.mapEvents();
  }

  mapEvents() {
    this.provider.addEventListener(_ajax_provider_ajax_provider__WEBPACK_IMPORTED_MODULE_1__["EVENT_FETCHED"], event => this.onFetched(event));
  }

  onFetched(event) {
    this.render();
  }
  /**
   * Gets a response from the server and renders it on the page.
   */


  render() {
    var response = this.provider.xhr.response;

    if (!response && !this.renderIfResponseIsEmpty) {
      return;
    }

    if (this.target) {
      this.target.innerHTML = response;
    } else {
      this.innerHTML = response;
    }

    if (this.mountAfterRender) {
      Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_2__["mount"])();
    }
  }
  /**
   * Gets a querySelector name of the provider element.
   *
   * @deprecated Use providerClassName() instead.
   */


  get providerSelector() {
    return this.getAttribute('provider-selector');
  }

  get providerClassName() {
    return this.getAttribute('provider-class-name');
  }
  /**
   * Gets a querySelector name of the target element.
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
   * Gets if the response from the server is empty.
   */


  get renderIfResponseIsEmpty() {
    return this.hasAttribute('render-if-response-is-empty');
  }
  /**
   * Gets if the component is mounted after rendering.
   */


  get mountAfterRender() {
    return this.hasAttribute('mount-after-render');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYWpheC1yZW5kZXJlci9hamF4LXJlbmRlcmVyLnRzIl0sIm5hbWVzIjpbIkFqYXhSZW5kZXJlciIsIkNvbXBvbmVudCIsInByb3ZpZGVyIiwidGFyZ2V0IiwicmVhZHlDYWxsYmFjayIsInByb3ZpZGVyQ2xhc3NOYW1lIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwicXVlcnlTZWxlY3RvciIsInByb3ZpZGVyU2VsZWN0b3IiLCJ0YXJnZXRDbGFzc05hbWUiLCJ0YXJnZXRTZWxlY3RvciIsInVuZGVmaW5lZCIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJFVkVOVF9GRVRDSEVEIiwiZXZlbnQiLCJvbkZldGNoZWQiLCJyZW5kZXIiLCJyZXNwb25zZSIsInhociIsInJlbmRlcklmUmVzcG9uc2VJc0VtcHR5IiwiaW5uZXJIVE1MIiwibW91bnRBZnRlclJlbmRlciIsIm1vdW50IiwiZ2V0QXR0cmlidXRlIiwiaGFzQXR0cmlidXRlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUVlLE1BQU1BLFlBQU4sU0FBMkJDLHlEQUEzQixDQUFxQztBQUFBO0FBQUE7QUFBQSxTQUN0Q0MsUUFEc0M7QUFBQSxTQUV0Q0MsTUFGc0M7QUFBQTs7QUFJdENDLGVBQWEsR0FBUztBQUM1QjtBQUNBLFNBQUtGLFFBQUwsR0FDSyxLQUFLRyxpQkFBTCxHQUNLQyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtGLGlCQUFyQyxFQUF3RCxDQUF4RCxDQURMLEdBRUtDLFFBQVEsQ0FBQ0UsYUFBVCxDQUF1QixLQUFLQyxnQkFBNUIsQ0FIVjtBQUtBLFNBQUtOLE1BQUwsR0FDSyxLQUFLTyxlQUFMLEdBQ0tKLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0csZUFBckMsRUFBc0QsQ0FBdEQsQ0FETCxHQUVLSixRQUFRLENBQUNFLGFBQVQsQ0FBdUIsS0FBS0csY0FBTCxHQUFzQixLQUFLQSxjQUEzQixHQUE0Q0MsU0FBbkUsQ0FIVjtBQUtBOztBQUNBLFNBQUtDLFNBQUw7QUFDSDs7QUFFU0EsV0FBUyxHQUFTO0FBQ3hCLFNBQUtYLFFBQUwsQ0FBY1ksZ0JBQWQsQ0FBK0JDLDBFQUEvQixFQUErQ0MsS0FBRCxJQUFrQixLQUFLQyxTQUFMLENBQWVELEtBQWYsQ0FBaEU7QUFDSDs7QUFFU0MsV0FBUyxDQUFDRCxLQUFELEVBQXFCO0FBQ3BDLFNBQUtFLE1BQUw7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ0lBLFFBQU0sR0FBUztBQUNYLFFBQU1DLFFBQVEsR0FBRyxLQUFLakIsUUFBTCxDQUFja0IsR0FBZCxDQUFrQkQsUUFBbkM7O0FBRUEsUUFBSSxDQUFDQSxRQUFELElBQWEsQ0FBQyxLQUFLRSx1QkFBdkIsRUFBZ0Q7QUFDNUM7QUFDSDs7QUFFRCxRQUFJLEtBQUtsQixNQUFULEVBQWlCO0FBQ2IsV0FBS0EsTUFBTCxDQUFZbUIsU0FBWixHQUF3QkgsUUFBeEI7QUFDSCxLQUZELE1BRU87QUFDSCxXQUFLRyxTQUFMLEdBQWlCSCxRQUFqQjtBQUNIOztBQUVELFFBQUksS0FBS0ksZ0JBQVQsRUFBMkI7QUFDdkJDLDhEQUFLO0FBQ1I7QUFDSjtBQUVEO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7OztBQUN3QixNQUFoQmYsZ0JBQWdCLEdBQVc7QUFDM0IsV0FBTyxLQUFLZ0IsWUFBTCxDQUFrQixtQkFBbEIsQ0FBUDtBQUNIOztBQUM4QixNQUFqQnBCLGlCQUFpQixHQUFXO0FBQ3RDLFdBQU8sS0FBS29CLFlBQUwsQ0FBa0IscUJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7OztBQUNzQixNQUFkZCxjQUFjLEdBQVc7QUFDekIsV0FBTyxLQUFLYyxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBQzRCLE1BQWZmLGVBQWUsR0FBVztBQUNwQyxXQUFPLEtBQUtlLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQytCLE1BQXZCSix1QkFBdUIsR0FBWTtBQUNuQyxXQUFPLEtBQUtLLFlBQUwsQ0FBa0IsNkJBQWxCLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ3dCLE1BQWhCSCxnQkFBZ0IsR0FBWTtBQUM1QixXQUFPLEtBQUtHLFlBQUwsQ0FBa0Isb0JBQWxCLENBQVA7QUFDSDs7QUFyRitDLEMiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuYWpheC1yZW5kZXJlci5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgQWpheFByb3ZpZGVyLCB7IEVWRU5UX0ZFVENIRUQgfSBmcm9tICcuLi9hamF4LXByb3ZpZGVyL2FqYXgtcHJvdmlkZXInO1xuaW1wb3J0IHsgbW91bnQgfSBmcm9tICdTaG9wVWkvYXBwJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQWpheFJlbmRlcmVyIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgcHJvdmlkZXI6IEFqYXhQcm92aWRlcjtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICAvKiB0c2xpbnQ6ZGlzYWJsZTogZGVwcmVjYXRpb24gKi9cbiAgICAgICAgdGhpcy5wcm92aWRlciA9IDxBamF4UHJvdmlkZXI+KFxuICAgICAgICAgICAgKHRoaXMucHJvdmlkZXJDbGFzc05hbWVcbiAgICAgICAgICAgICAgICA/IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5wcm92aWRlckNsYXNzTmFtZSlbMF1cbiAgICAgICAgICAgICAgICA6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IodGhpcy5wcm92aWRlclNlbGVjdG9yKSlcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy50YXJnZXQgPSA8SFRNTEVsZW1lbnQ+KFxuICAgICAgICAgICAgKHRoaXMudGFyZ2V0Q2xhc3NOYW1lXG4gICAgICAgICAgICAgICAgPyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVswXVxuICAgICAgICAgICAgICAgIDogZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0aGlzLnRhcmdldFNlbGVjdG9yID8gdGhpcy50YXJnZXRTZWxlY3RvciA6IHVuZGVmaW5lZCkpXG4gICAgICAgICk7XG4gICAgICAgIC8qIHRzbGludDplbmFibGU6IGRlcHJlY2F0aW9uICovXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5wcm92aWRlci5hZGRFdmVudExpc3RlbmVyKEVWRU5UX0ZFVENIRUQsIChldmVudDogRXZlbnQpID0+IHRoaXMub25GZXRjaGVkKGV2ZW50KSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRmV0Y2hlZChldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5yZW5kZXIoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcmVzcG9uc2UgZnJvbSB0aGUgc2VydmVyIGFuZCByZW5kZXJzIGl0IG9uIHRoZSBwYWdlLlxuICAgICAqL1xuICAgIHJlbmRlcigpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgcmVzcG9uc2UgPSB0aGlzLnByb3ZpZGVyLnhoci5yZXNwb25zZTtcblxuICAgICAgICBpZiAoIXJlc3BvbnNlICYmICF0aGlzLnJlbmRlcklmUmVzcG9uc2VJc0VtcHR5KSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBpZiAodGhpcy50YXJnZXQpIHtcbiAgICAgICAgICAgIHRoaXMudGFyZ2V0LmlubmVySFRNTCA9IHJlc3BvbnNlO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgdGhpcy5pbm5lckhUTUwgPSByZXNwb25zZTtcbiAgICAgICAgfVxuXG4gICAgICAgIGlmICh0aGlzLm1vdW50QWZ0ZXJSZW5kZXIpIHtcbiAgICAgICAgICAgIG1vdW50KCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGEgcXVlcnlTZWxlY3RvciBuYW1lIG9mIHRoZSBwcm92aWRlciBlbGVtZW50LlxuICAgICAqXG4gICAgICogQGRlcHJlY2F0ZWQgVXNlIHByb3ZpZGVyQ2xhc3NOYW1lKCkgaW5zdGVhZC5cbiAgICAgKi9cbiAgICBnZXQgcHJvdmlkZXJTZWxlY3RvcigpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3Byb3ZpZGVyLXNlbGVjdG9yJyk7XG4gICAgfVxuICAgIHByb3RlY3RlZCBnZXQgcHJvdmlkZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdwcm92aWRlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBhIHF1ZXJ5U2VsZWN0b3IgbmFtZSBvZiB0aGUgdGFyZ2V0IGVsZW1lbnQuXG4gICAgICpcbiAgICAgKiBAZGVwcmVjYXRlZCBVc2UgdGFyZ2V0Q2xhc3NOYW1lKCkgaW5zdGVhZC5cbiAgICAgKi9cbiAgICBnZXQgdGFyZ2V0U2VsZWN0b3IoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0YXJnZXQtc2VsZWN0b3InKTtcbiAgICB9XG4gICAgcHJvdGVjdGVkIGdldCB0YXJnZXRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0YXJnZXQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgaWYgdGhlIHJlc3BvbnNlIGZyb20gdGhlIHNlcnZlciBpcyBlbXB0eS5cbiAgICAgKi9cbiAgICBnZXQgcmVuZGVySWZSZXNwb25zZUlzRW1wdHkoKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiB0aGlzLmhhc0F0dHJpYnV0ZSgncmVuZGVyLWlmLXJlc3BvbnNlLWlzLWVtcHR5Jyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgY29tcG9uZW50IGlzIG1vdW50ZWQgYWZ0ZXIgcmVuZGVyaW5nLlxuICAgICAqL1xuICAgIGdldCBtb3VudEFmdGVyUmVuZGVyKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5oYXNBdHRyaWJ1dGUoJ21vdW50LWFmdGVyLXJlbmRlcicpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=