(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["sticky-body-toggler"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/sticky-body-toggler/sticky-body-toggler.ts":
/*!***********************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/sticky-body-toggler/sticky-body-toggler.ts ***!
  \***********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return StickyBodyToggler; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class StickyBodyToggler extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.body = void 0;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.body = document.body;
    this.mapEvents();
  }

  mapEvents() {
    this.triggers.forEach(trigger => {
      trigger.addEventListener('click', () => this.toggleStickyBody());
    });
  }

  toggleStickyBody() {
    var isBodySticky = this.body.classList.contains(this.classToFixBody);

    if (isBodySticky) {
      var scrollToVal = parseInt(this.body.dataset.scrollTo);
      this.body.style.top = '0';
      this.body.classList.remove(this.classToFixBody);
      window.scrollTo(0, scrollToVal);
      return;
    }

    var offset = window.pageYOffset;
    this.body.style.top = -offset + "px";
    this.body.classList.add(this.classToFixBody);
    this.body.dataset.scrollTo = offset.toString();
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

  get classToFixBody() {
    return this.getAttribute('class-to-fix-body');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc3RpY2t5LWJvZHktdG9nZ2xlci9zdGlja3ktYm9keS10b2dnbGVyLnRzIl0sIm5hbWVzIjpbIlN0aWNreUJvZHlUb2dnbGVyIiwiQ29tcG9uZW50IiwidHJpZ2dlcnMiLCJib2R5IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJ0cmlnZ2VyQ2xhc3NOYW1lIiwibWFwRXZlbnRzIiwiZm9yRWFjaCIsInRyaWdnZXIiLCJhZGRFdmVudExpc3RlbmVyIiwidG9nZ2xlU3RpY2t5Qm9keSIsImlzQm9keVN0aWNreSIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwiY2xhc3NUb0ZpeEJvZHkiLCJzY3JvbGxUb1ZhbCIsInBhcnNlSW50IiwiZGF0YXNldCIsInNjcm9sbFRvIiwic3R5bGUiLCJ0b3AiLCJyZW1vdmUiLCJ3aW5kb3ciLCJvZmZzZXQiLCJwYWdlWU9mZnNldCIsImFkZCIsInRvU3RyaW5nIiwiZ2V0QXR0cmlidXRlIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFFZSxNQUFNQSxpQkFBTixTQUFnQ0MsK0RBQWhDLENBQTBDO0FBQUE7QUFBQTtBQUFBLFNBQzNDQyxRQUQyQztBQUFBLFNBRTNDQyxJQUYyQztBQUFBOztBQUkzQ0MsZUFBYSxHQUFTLENBQUU7O0FBRXhCQyxNQUFJLEdBQVM7QUFDbkIsU0FBS0gsUUFBTCxHQUErQkksS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0MsZ0JBQXJDLENBQVgsQ0FBL0I7QUFDQSxTQUFLUCxJQUFMLEdBQXlCSyxRQUFRLENBQUNMLElBQWxDO0FBQ0EsU0FBS1EsU0FBTDtBQUNIOztBQUVTQSxXQUFTLEdBQVM7QUFDeEIsU0FBS1QsUUFBTCxDQUFjVSxPQUFkLENBQXVCQyxPQUFELElBQTBCO0FBQzVDQSxhQUFPLENBQUNDLGdCQUFSLENBQXlCLE9BQXpCLEVBQWtDLE1BQU0sS0FBS0MsZ0JBQUwsRUFBeEM7QUFDSCxLQUZEO0FBR0g7O0FBRVNBLGtCQUFnQixHQUFTO0FBQy9CLFFBQU1DLFlBQVksR0FBRyxLQUFLYixJQUFMLENBQVVjLFNBQVYsQ0FBb0JDLFFBQXBCLENBQTZCLEtBQUtDLGNBQWxDLENBQXJCOztBQUVBLFFBQUlILFlBQUosRUFBa0I7QUFDZCxVQUFNSSxXQUFXLEdBQUdDLFFBQVEsQ0FBQyxLQUFLbEIsSUFBTCxDQUFVbUIsT0FBVixDQUFrQkMsUUFBbkIsQ0FBNUI7QUFFQSxXQUFLcEIsSUFBTCxDQUFVcUIsS0FBVixDQUFnQkMsR0FBaEIsR0FBc0IsR0FBdEI7QUFDQSxXQUFLdEIsSUFBTCxDQUFVYyxTQUFWLENBQW9CUyxNQUFwQixDQUEyQixLQUFLUCxjQUFoQztBQUNBUSxZQUFNLENBQUNKLFFBQVAsQ0FBZ0IsQ0FBaEIsRUFBbUJILFdBQW5CO0FBRUE7QUFDSDs7QUFFRCxRQUFNUSxNQUFNLEdBQUdELE1BQU0sQ0FBQ0UsV0FBdEI7QUFFQSxTQUFLMUIsSUFBTCxDQUFVcUIsS0FBVixDQUFnQkMsR0FBaEIsR0FBeUIsQ0FBQ0csTUFBMUI7QUFDQSxTQUFLekIsSUFBTCxDQUFVYyxTQUFWLENBQW9CYSxHQUFwQixDQUF3QixLQUFLWCxjQUE3QjtBQUNBLFNBQUtoQixJQUFMLENBQVVtQixPQUFWLENBQWtCQyxRQUFsQixHQUE2QkssTUFBTSxDQUFDRyxRQUFQLEVBQTdCO0FBQ0g7O0FBRTZCLE1BQWhCckIsZ0JBQWdCLEdBQVc7QUFDckMsV0FBTyxLQUFLc0IsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIOztBQUUyQixNQUFkYixjQUFjLEdBQVc7QUFDbkMsV0FBTyxLQUFLYSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7O0FBNUNvRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnN0aWNreS1ib2R5LXRvZ2dsZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgU3RpY2t5Qm9keVRvZ2dsZXIgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgYm9keTogSFRNTEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRyaWdnZXJDbGFzc05hbWUpKTtcbiAgICAgICAgdGhpcy5ib2R5ID0gPEhUTUxFbGVtZW50PmRvY3VtZW50LmJvZHk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2Vycy5mb3JFYWNoKCh0cmlnZ2VyOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgdHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMudG9nZ2xlU3RpY2t5Qm9keSgpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHRvZ2dsZVN0aWNreUJvZHkoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IGlzQm9keVN0aWNreSA9IHRoaXMuYm9keS5jbGFzc0xpc3QuY29udGFpbnModGhpcy5jbGFzc1RvRml4Qm9keSk7XG5cbiAgICAgICAgaWYgKGlzQm9keVN0aWNreSkge1xuICAgICAgICAgICAgY29uc3Qgc2Nyb2xsVG9WYWwgPSBwYXJzZUludCh0aGlzLmJvZHkuZGF0YXNldC5zY3JvbGxUbyk7XG5cbiAgICAgICAgICAgIHRoaXMuYm9keS5zdHlsZS50b3AgPSAnMCc7XG4gICAgICAgICAgICB0aGlzLmJvZHkuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmNsYXNzVG9GaXhCb2R5KTtcbiAgICAgICAgICAgIHdpbmRvdy5zY3JvbGxUbygwLCBzY3JvbGxUb1ZhbCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IG9mZnNldCA9IHdpbmRvdy5wYWdlWU9mZnNldDtcblxuICAgICAgICB0aGlzLmJvZHkuc3R5bGUudG9wID0gYCR7LW9mZnNldH1weGA7XG4gICAgICAgIHRoaXMuYm9keS5jbGFzc0xpc3QuYWRkKHRoaXMuY2xhc3NUb0ZpeEJvZHkpO1xuICAgICAgICB0aGlzLmJvZHkuZGF0YXNldC5zY3JvbGxUbyA9IG9mZnNldC50b1N0cmluZygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgY2xhc3NUb0ZpeEJvZHkoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by1maXgtYm9keScpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=