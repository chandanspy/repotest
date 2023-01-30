(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["script-loader"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/script-loader/script-loader.ts":
/*!***********************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/script-loader/script-loader.ts ***!
  \***********************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ScriptLoader; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var _app_logger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../app/logger */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/logger.ts");


var EVENT_SCRIPT_LOAD = 'scriptload';
var defaultIgnoredAttributes = ['class', 'data-qa'];
/**
 * @event scriptload An event which is triggered when a script is loaded.
 */

class ScriptLoader extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.head = void 0;
    this.script = void 0;
  }

  readyCallback() {
    this.script = document.querySelector("script[src=\"" + this.src + "\"]");

    if (!!this.script) {
      this.mapEvents();
      Object(_app_logger__WEBPACK_IMPORTED_MODULE_1__["debug"])(this.name + ": \"" + this.src + "\" is already in the DOM");
      return;
    }

    this.head = document.getElementsByTagName('head')[0];
    this.script = document.createElement('script');
    this.mapEvents();
    this.setScriptAttributes();
    this.appendScriptTag();
  }

  mapEvents() {
    this.script.addEventListener('load', event => this.onScriptLoad(event), {
      once: true
    });
  }

  onScriptLoad(event) {
    this.dispatchCustomEvent(EVENT_SCRIPT_LOAD);
  }

  setScriptAttributes() {
    Array.prototype.forEach.call(this.attributes, attribute => {
      if (!this.isAttributeIgnored(attribute.name)) {
        this.script.setAttribute(attribute.name, attribute.value);
      }
    });
  }

  appendScriptTag() {
    this.head.appendChild(this.script);
    Object(_app_logger__WEBPACK_IMPORTED_MODULE_1__["debug"])(this.name + ": \"" + this.src + "\" added to the DOM");
  }

  isAttributeIgnored(attributeName) {
    return this.ignoredAttributes.indexOf(attributeName) !== -1;
  }
  /**
   * Gets the array of ignored attributes that are not copied from the current component
   * to the script tag when created.
   */


  get ignoredAttributes() {
    return [...defaultIgnoredAttributes];
  }
  /**
   * Gets if the script already exists in DOM.
   */


  get isScriptAlreadyInDOM() {
    return !!document.querySelector("script[src=\"" + this.src + "\"]");
  }
  /**
   * Gets the url endpoint used to load the script.
   */


  get src() {
    return this.getAttribute('src');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc2NyaXB0LWxvYWRlci9zY3JpcHQtbG9hZGVyLnRzIl0sIm5hbWVzIjpbIkVWRU5UX1NDUklQVF9MT0FEIiwiZGVmYXVsdElnbm9yZWRBdHRyaWJ1dGVzIiwiU2NyaXB0TG9hZGVyIiwiQ29tcG9uZW50IiwiaGVhZCIsInNjcmlwdCIsInJlYWR5Q2FsbGJhY2siLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJzcmMiLCJtYXBFdmVudHMiLCJkZWJ1ZyIsIm5hbWUiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNyZWF0ZUVsZW1lbnQiLCJzZXRTY3JpcHRBdHRyaWJ1dGVzIiwiYXBwZW5kU2NyaXB0VGFnIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25TY3JpcHRMb2FkIiwib25jZSIsImRpc3BhdGNoQ3VzdG9tRXZlbnQiLCJBcnJheSIsInByb3RvdHlwZSIsImZvckVhY2giLCJjYWxsIiwiYXR0cmlidXRlcyIsImF0dHJpYnV0ZSIsImlzQXR0cmlidXRlSWdub3JlZCIsInNldEF0dHJpYnV0ZSIsInZhbHVlIiwiYXBwZW5kQ2hpbGQiLCJhdHRyaWJ1dGVOYW1lIiwiaWdub3JlZEF0dHJpYnV0ZXMiLCJpbmRleE9mIiwiaXNTY3JpcHRBbHJlYWR5SW5ET00iLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFFQSxJQUFNQSxpQkFBaUIsR0FBRyxZQUExQjtBQUNBLElBQU1DLHdCQUF3QixHQUFHLENBQUMsT0FBRCxFQUFVLFNBQVYsQ0FBakM7QUFFQTtBQUNBO0FBQ0E7O0FBQ2UsTUFBTUMsWUFBTixTQUEyQkMseURBQTNCLENBQXFDO0FBQUE7QUFBQTtBQUFBLFNBSWhEQyxJQUpnRDtBQUFBLFNBU2hEQyxNQVRnRDtBQUFBOztBQVd0Q0MsZUFBYSxHQUFTO0FBQzVCLFNBQUtELE1BQUwsR0FBaUNFLFFBQVEsQ0FBQ0MsYUFBVCxtQkFBc0MsS0FBS0MsR0FBM0MsU0FBakM7O0FBRUEsUUFBSSxDQUFDLENBQUMsS0FBS0osTUFBWCxFQUFtQjtBQUNmLFdBQUtLLFNBQUw7QUFDQUMsK0RBQUssQ0FBSSxLQUFLQyxJQUFULFlBQW1CLEtBQUtILEdBQXhCLDhCQUFMO0FBRUE7QUFDSDs7QUFFRCxTQUFLTCxJQUFMLEdBQTZCRyxRQUFRLENBQUNNLG9CQUFULENBQThCLE1BQTlCLEVBQXNDLENBQXRDLENBQTdCO0FBQ0EsU0FBS1IsTUFBTCxHQUFpQ0UsUUFBUSxDQUFDTyxhQUFULENBQXVCLFFBQXZCLENBQWpDO0FBRUEsU0FBS0osU0FBTDtBQUNBLFNBQUtLLG1CQUFMO0FBQ0EsU0FBS0MsZUFBTDtBQUNIOztBQUVTTixXQUFTLEdBQVM7QUFDeEIsU0FBS0wsTUFBTCxDQUFZWSxnQkFBWixDQUE2QixNQUE3QixFQUFzQ0MsS0FBRCxJQUFrQixLQUFLQyxZQUFMLENBQWtCRCxLQUFsQixDQUF2RCxFQUFpRjtBQUFFRSxVQUFJLEVBQUU7QUFBUixLQUFqRjtBQUNIOztBQUVTRCxjQUFZLENBQUNELEtBQUQsRUFBcUI7QUFDdkMsU0FBS0csbUJBQUwsQ0FBeUJyQixpQkFBekI7QUFDSDs7QUFFU2UscUJBQW1CLEdBQVM7QUFDbENPLFNBQUssQ0FBQ0MsU0FBTixDQUFnQkMsT0FBaEIsQ0FBd0JDLElBQXhCLENBQTZCLEtBQUtDLFVBQWxDLEVBQStDQyxTQUFELElBQXFCO0FBQy9ELFVBQUksQ0FBQyxLQUFLQyxrQkFBTCxDQUF3QkQsU0FBUyxDQUFDZixJQUFsQyxDQUFMLEVBQThDO0FBQzFDLGFBQUtQLE1BQUwsQ0FBWXdCLFlBQVosQ0FBeUJGLFNBQVMsQ0FBQ2YsSUFBbkMsRUFBeUNlLFNBQVMsQ0FBQ0csS0FBbkQ7QUFDSDtBQUNKLEtBSkQ7QUFLSDs7QUFFU2QsaUJBQWUsR0FBUztBQUM5QixTQUFLWixJQUFMLENBQVUyQixXQUFWLENBQXNCLEtBQUsxQixNQUEzQjtBQUNBTSw2REFBSyxDQUFJLEtBQUtDLElBQVQsWUFBbUIsS0FBS0gsR0FBeEIseUJBQUw7QUFDSDs7QUFFU21CLG9CQUFrQixDQUFDSSxhQUFELEVBQWlDO0FBQ3pELFdBQU8sS0FBS0MsaUJBQUwsQ0FBdUJDLE9BQXZCLENBQStCRixhQUEvQixNQUFrRCxDQUFDLENBQTFEO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7QUFDQTs7O0FBQ3lCLE1BQWpCQyxpQkFBaUIsR0FBYTtBQUM5QixXQUFPLENBQUMsR0FBR2hDLHdCQUFKLENBQVA7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQzRCLE1BQXBCa0Msb0JBQW9CLEdBQVk7QUFDaEMsV0FBTyxDQUFDLENBQUM1QixRQUFRLENBQUNDLGFBQVQsbUJBQXNDLEtBQUtDLEdBQTNDLFNBQVQ7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ1csTUFBSEEsR0FBRyxHQUFXO0FBQ2QsV0FBTyxLQUFLMkIsWUFBTCxDQUFrQixLQUFsQixDQUFQO0FBQ0g7O0FBMUUrQyxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNjcmlwdC1sb2FkZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IHsgZGVidWcgfSBmcm9tICcuLi8uLi8uLi9hcHAvbG9nZ2VyJztcblxuY29uc3QgRVZFTlRfU0NSSVBUX0xPQUQgPSAnc2NyaXB0bG9hZCc7XG5jb25zdCBkZWZhdWx0SWdub3JlZEF0dHJpYnV0ZXMgPSBbJ2NsYXNzJywgJ2RhdGEtcWEnXTtcblxuLyoqXG4gKiBAZXZlbnQgc2NyaXB0bG9hZCBBbiBldmVudCB3aGljaCBpcyB0cmlnZ2VyZWQgd2hlbiBhIHNjcmlwdCBpcyBsb2FkZWQuXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFNjcmlwdExvYWRlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogVGhlIDxoZWFkPiB0YWcgb24gdGhlIHBhZ2UuXG4gICAgICovXG4gICAgaGVhZDogSFRNTEhlYWRFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIDxzY3JpcHQ+IHRhZyBvIHRoZSBwYWdlLlxuICAgICAqL1xuICAgIHNjcmlwdDogSFRNTFNjcmlwdEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zY3JpcHQgPSA8SFRNTFNjcmlwdEVsZW1lbnQ+ZG9jdW1lbnQucXVlcnlTZWxlY3Rvcihgc2NyaXB0W3NyYz1cIiR7dGhpcy5zcmN9XCJdYCk7XG5cbiAgICAgICAgaWYgKCEhdGhpcy5zY3JpcHQpIHtcbiAgICAgICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgICAgICAgICBkZWJ1ZyhgJHt0aGlzLm5hbWV9OiBcIiR7dGhpcy5zcmN9XCIgaXMgYWxyZWFkeSBpbiB0aGUgRE9NYCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuaGVhZCA9IDxIVE1MSGVhZEVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ2hlYWQnKVswXTtcbiAgICAgICAgdGhpcy5zY3JpcHQgPSA8SFRNTFNjcmlwdEVsZW1lbnQ+ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc2NyaXB0Jyk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICAgICAgdGhpcy5zZXRTY3JpcHRBdHRyaWJ1dGVzKCk7XG4gICAgICAgIHRoaXMuYXBwZW5kU2NyaXB0VGFnKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zY3JpcHQuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsIChldmVudDogRXZlbnQpID0+IHRoaXMub25TY3JpcHRMb2FkKGV2ZW50KSwgeyBvbmNlOiB0cnVlIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblNjcmlwdExvYWQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMuZGlzcGF0Y2hDdXN0b21FdmVudChFVkVOVF9TQ1JJUFRfTE9BRCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldFNjcmlwdEF0dHJpYnV0ZXMoKTogdm9pZCB7XG4gICAgICAgIEFycmF5LnByb3RvdHlwZS5mb3JFYWNoLmNhbGwodGhpcy5hdHRyaWJ1dGVzLCAoYXR0cmlidXRlOiBBdHRyKSA9PiB7XG4gICAgICAgICAgICBpZiAoIXRoaXMuaXNBdHRyaWJ1dGVJZ25vcmVkKGF0dHJpYnV0ZS5uYW1lKSkge1xuICAgICAgICAgICAgICAgIHRoaXMuc2NyaXB0LnNldEF0dHJpYnV0ZShhdHRyaWJ1dGUubmFtZSwgYXR0cmlidXRlLnZhbHVlKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFwcGVuZFNjcmlwdFRhZygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5oZWFkLmFwcGVuZENoaWxkKHRoaXMuc2NyaXB0KTtcbiAgICAgICAgZGVidWcoYCR7dGhpcy5uYW1lfTogXCIke3RoaXMuc3JjfVwiIGFkZGVkIHRvIHRoZSBET01gKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaXNBdHRyaWJ1dGVJZ25vcmVkKGF0dHJpYnV0ZU5hbWU6IHN0cmluZyk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5pZ25vcmVkQXR0cmlidXRlcy5pbmRleE9mKGF0dHJpYnV0ZU5hbWUpICE9PSAtMTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBhcnJheSBvZiBpZ25vcmVkIGF0dHJpYnV0ZXMgdGhhdCBhcmUgbm90IGNvcGllZCBmcm9tIHRoZSBjdXJyZW50IGNvbXBvbmVudFxuICAgICAqIHRvIHRoZSBzY3JpcHQgdGFnIHdoZW4gY3JlYXRlZC5cbiAgICAgKi9cbiAgICBnZXQgaWdub3JlZEF0dHJpYnV0ZXMoKTogc3RyaW5nW10ge1xuICAgICAgICByZXR1cm4gWy4uLmRlZmF1bHRJZ25vcmVkQXR0cmlidXRlc107XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyBpZiB0aGUgc2NyaXB0IGFscmVhZHkgZXhpc3RzIGluIERPTS5cbiAgICAgKi9cbiAgICBnZXQgaXNTY3JpcHRBbHJlYWR5SW5ET00oKTogYm9vbGVhbiB7XG4gICAgICAgIHJldHVybiAhIWRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYHNjcmlwdFtzcmM9XCIke3RoaXMuc3JjfVwiXWApO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIHVybCBlbmRwb2ludCB1c2VkIHRvIGxvYWQgdGhlIHNjcmlwdC5cbiAgICAgKi9cbiAgICBnZXQgc3JjKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnc3JjJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==