(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["navigation-multilevel"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel/navigation-multilevel.ts":
/*!***************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel/navigation-multilevel.ts ***!
  \***************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return NavigationMultilevel; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var NavigationMultilevel = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(NavigationMultilevel, _Component);

  function NavigationMultilevel() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.overlay = void 0;
    _this.triggers = void 0;
    _this.touchTriggers = void 0;
    return _this;
  }

  var _proto = NavigationMultilevel.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.overlay = document.getElementsByClassName(this.overlayBlockClassName)[0];
    this.triggers = Array.from(this.getElementsByClassName(this.jsName + "__trigger"));
    this.touchTriggers = Array.from(this.getElementsByClassName(this.jsName + "__touch-trigger"));
    this.mapEvents();
    this.addReverseClassToDropDownMenu();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggers.forEach(function (trigger) {
      trigger.addEventListener('mouseover', function (event) {
        return _this2.onTriggerOver(event);
      });
    });
    this.triggers.forEach(function (trigger) {
      trigger.addEventListener('mouseout', function (event) {
        return _this2.onTriggerOut(event);
      });
    });
    this.touchTriggers.forEach(function (trigger) {
      trigger.addEventListener('click', function (event) {
        return _this2.onTriggerClick(event);
      });
    });
  };

  _proto.addReverseClassToDropDownMenu = function addReverseClassToDropDownMenu() {
    var _this3 = this;

    this.triggers.forEach(function (trigger) {
      var dropItem = trigger.getElementsByClassName(_this3.jsName + "__wrapper")[0];

      if (!dropItem) {
        return;
      }

      if (_this3.isDropMenuReverse(trigger, dropItem)) {
        dropItem.classList.add(_this3.reverseClassName);
      }
    });
  };

  _proto.onTriggerOver = function onTriggerOver(event) {
    if (this.isWidthMoreThanAvailableBreakpoint()) {
      var trigger = event.currentTarget;
      event.preventDefault();
      this.overlay.showOverlay();
      this.addClass(trigger);
    }
  };

  _proto.onTriggerOut = function onTriggerOut(event) {
    if (this.isWidthMoreThanAvailableBreakpoint()) {
      var trigger = event.currentTarget;
      event.preventDefault();
      this.overlay.hideOverlay();
      this.removeClass(trigger);
    }
  };

  _proto.addClass = function addClass(trigger) {
    trigger.classList.add(this.classToToggle);
  };

  _proto.removeClass = function removeClass(trigger) {
    trigger.classList.remove(this.classToToggle);
  };

  _proto.onTriggerClick = function onTriggerClick(event) {
    if (!this.isWidthMoreThanAvailableBreakpoint()) {
      var trigger = event.currentTarget;
      var contentToShowSelector = this.getDataAttribute(trigger, 'data-toggle-target');
      var contentToggleClass = this.getDataAttribute(trigger, 'data-class-to-toggle');
      var closestParentNode = trigger.closest("." + this.jsName + "__item");
      var contentToShow = closestParentNode.querySelector(contentToShowSelector);
      contentToShow.classList.toggle(contentToggleClass);
      trigger.classList.toggle('is-active');
    }
  };

  _proto.isDropMenuReverse = function isDropMenuReverse(trigger, dropItem) {
    var leftPositionToTheMenuItem = trigger.offsetLeft;
    var windowWidth = window.innerWidth;
    var dropItemWidth = dropItem ? dropItem.offsetWidth : 0;
    return windowWidth - leftPositionToTheMenuItem < dropItemWidth;
  };

  _proto.isWidthMoreThanAvailableBreakpoint = function isWidthMoreThanAvailableBreakpoint() {
    return window.innerWidth >= this.availableBreakpoint;
  };

  _proto.getDataAttribute = function getDataAttribute(block, attr) {
    return block.getAttribute(attr);
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(NavigationMultilevel, [{
    key: "classToToggle",
    get: function get() {
      return this.getAttribute('class-to-toggle');
    }
  }, {
    key: "availableBreakpoint",
    get: function get() {
      return Number(this.getAttribute('available-breakpoint'));
    }
  }, {
    key: "overlayBlockClassName",
    get: function get() {
      return this.getAttribute('overlay-block-class-name');
    }
  }, {
    key: "reverseClassName",
    get: function get() {
      return this.getAttribute('reverse-class-name');
    }
  }]);

  return NavigationMultilevel;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvbmF2aWdhdGlvbi1tdWx0aWxldmVsL25hdmlnYXRpb24tbXVsdGlsZXZlbC50cyJdLCJuYW1lcyI6WyJOYXZpZ2F0aW9uTXVsdGlsZXZlbCIsIm92ZXJsYXkiLCJ0cmlnZ2VycyIsInRvdWNoVHJpZ2dlcnMiLCJyZWFkeUNhbGxiYWNrIiwiaW5pdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsIm92ZXJsYXlCbG9ja0NsYXNzTmFtZSIsIkFycmF5IiwiZnJvbSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZFJldmVyc2VDbGFzc1RvRHJvcERvd25NZW51IiwiZm9yRWFjaCIsInRyaWdnZXIiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblRyaWdnZXJPdmVyIiwib25UcmlnZ2VyT3V0Iiwib25UcmlnZ2VyQ2xpY2siLCJkcm9wSXRlbSIsImlzRHJvcE1lbnVSZXZlcnNlIiwiY2xhc3NMaXN0IiwiYWRkIiwicmV2ZXJzZUNsYXNzTmFtZSIsImlzV2lkdGhNb3JlVGhhbkF2YWlsYWJsZUJyZWFrcG9pbnQiLCJjdXJyZW50VGFyZ2V0IiwicHJldmVudERlZmF1bHQiLCJzaG93T3ZlcmxheSIsImFkZENsYXNzIiwiaGlkZU92ZXJsYXkiLCJyZW1vdmVDbGFzcyIsImNsYXNzVG9Ub2dnbGUiLCJyZW1vdmUiLCJjb250ZW50VG9TaG93U2VsZWN0b3IiLCJnZXREYXRhQXR0cmlidXRlIiwiY29udGVudFRvZ2dsZUNsYXNzIiwiY2xvc2VzdFBhcmVudE5vZGUiLCJjbG9zZXN0IiwiY29udGVudFRvU2hvdyIsInF1ZXJ5U2VsZWN0b3IiLCJ0b2dnbGUiLCJsZWZ0UG9zaXRpb25Ub1RoZU1lbnVJdGVtIiwib2Zmc2V0TGVmdCIsIndpbmRvd1dpZHRoIiwid2luZG93IiwiaW5uZXJXaWR0aCIsImRyb3BJdGVtV2lkdGgiLCJvZmZzZXRXaWR0aCIsImF2YWlsYWJsZUJyZWFrcG9pbnQiLCJibG9jayIsImF0dHIiLCJnZXRBdHRyaWJ1dGUiLCJOdW1iZXIiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTs7SUFHcUJBLG9COzs7Ozs7Ozs7OztVQUNQQyxPO1VBQ0FDLFE7VUFDQUMsYTs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0MsQ0FBRSxDOztTQUV4QkMsSSxHQUFWLGdCQUF1QjtBQUNuQixTQUFLSixPQUFMLEdBQTZCSyxRQUFRLENBQUNDLHNCQUFULENBQWdDLEtBQUtDLHFCQUFyQyxFQUE0RCxDQUE1RCxDQUE3QjtBQUNBLFNBQUtOLFFBQUwsR0FBK0JPLEtBQUssQ0FBQ0MsSUFBTixDQUFXLEtBQUtILHNCQUFMLENBQStCLEtBQUtJLE1BQXBDLGVBQVgsQ0FBL0I7QUFDQSxTQUFLUixhQUFMLEdBQW9DTSxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLSCxzQkFBTCxDQUErQixLQUFLSSxNQUFwQyxxQkFBWCxDQUFwQztBQUVBLFNBQUtDLFNBQUw7QUFDQSxTQUFLQyw2QkFBTDtBQUNILEc7O1NBRVNELFMsR0FBVixxQkFBNEI7QUFBQTs7QUFDeEIsU0FBS1YsUUFBTCxDQUFjWSxPQUFkLENBQXNCLFVBQUNDLE9BQUQsRUFBMEI7QUFDNUNBLGFBQU8sQ0FBQ0MsZ0JBQVIsQ0FBeUIsV0FBekIsRUFBc0MsVUFBQ0MsS0FBRDtBQUFBLGVBQWtCLE1BQUksQ0FBQ0MsYUFBTCxDQUFtQkQsS0FBbkIsQ0FBbEI7QUFBQSxPQUF0QztBQUNILEtBRkQ7QUFHQSxTQUFLZixRQUFMLENBQWNZLE9BQWQsQ0FBc0IsVUFBQ0MsT0FBRCxFQUEwQjtBQUM1Q0EsYUFBTyxDQUFDQyxnQkFBUixDQUF5QixVQUF6QixFQUFxQyxVQUFDQyxLQUFEO0FBQUEsZUFBa0IsTUFBSSxDQUFDRSxZQUFMLENBQWtCRixLQUFsQixDQUFsQjtBQUFBLE9BQXJDO0FBQ0gsS0FGRDtBQUdBLFNBQUtkLGFBQUwsQ0FB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V0FBVyxHQUFHRix5QkFBZCxHQUEwQ0ssYUFBakQ7QUFDSCxHOztTQUVTdEIsa0MsR0FBViw4Q0FBd0Q7QUFDcEQsV0FBT29CLE1BQU0sQ0FBQ0MsVUFBUCxJQUFxQixLQUFLRyxtQkFBakM7QUFDSCxHOztTQUVTZCxnQixHQUFWLDBCQUEyQmUsS0FBM0IsRUFBK0NDLElBQS9DLEVBQXFFO0FBQ2pFLFdBQU9ELEtBQUssQ0FBQ0UsWUFBTixDQUFtQkQsSUFBbkIsQ0FBUDtBQUNILEc7Ozs7U0FFRCxlQUFzQztBQUNsQyxhQUFPLEtBQUtDLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBNEM7QUFDeEMsYUFBT0MsTUFBTSxDQUFDLEtBQUtELFlBQUwsQ0FBa0Isc0JBQWxCLENBQUQsQ0FBYjtBQUNIOzs7U0FFRCxlQUE4QztBQUMxQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsMEJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBeUM7QUFDckMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7Ozs7RUEvRzZDRSwrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5uYXZpZ2F0aW9uLW11bHRpbGV2ZWwubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgT3ZlcmxheUJsb2NrIGZyb20gJy4uLy4uL2F0b21zL292ZXJsYXktYmxvY2svb3ZlcmxheS1ibG9jayc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIE5hdmlnYXRpb25NdWx0aWxldmVsIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgb3ZlcmxheTogT3ZlcmxheUJsb2NrO1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdG91Y2hUcmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLm92ZXJsYXkgPSA8T3ZlcmxheUJsb2NrPmRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5vdmVybGF5QmxvY2tDbGFzc05hbWUpWzBdO1xuICAgICAgICB0aGlzLnRyaWdnZXJzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190cmlnZ2VyYCkpO1xuICAgICAgICB0aGlzLnRvdWNoVHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RvdWNoLXRyaWdnZXJgKSk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICAgICAgdGhpcy5hZGRSZXZlcnNlQ2xhc3NUb0Ryb3BEb3duTWVudSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgodHJpZ2dlcjogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VvdmVyJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJPdmVyKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlb3V0JywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblRyaWdnZXJPdXQoZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgICAgIHRoaXMudG91Y2hUcmlnZ2Vycy5mb3JFYWNoKCh0cmlnZ2VyOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgdHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25UcmlnZ2VyQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFkZFJldmVyc2VDbGFzc1RvRHJvcERvd25NZW51KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBjb25zdCBkcm9wSXRlbSA9IDxIVE1MRWxlbWVudD50cmlnZ2VyLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X193cmFwcGVyYClbMF07XG5cbiAgICAgICAgICAgIGlmICghZHJvcEl0ZW0pIHtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIGlmICh0aGlzLmlzRHJvcE1lbnVSZXZlcnNlKHRyaWdnZXIsIGRyb3BJdGVtKSkge1xuICAgICAgICAgICAgICAgIGRyb3BJdGVtLmNsYXNzTGlzdC5hZGQodGhpcy5yZXZlcnNlQ2xhc3NOYW1lKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlck92ZXIoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlzV2lkdGhNb3JlVGhhbkF2YWlsYWJsZUJyZWFrcG9pbnQoKSkge1xuICAgICAgICAgICAgY29uc3QgdHJpZ2dlciA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIHRoaXMub3ZlcmxheS5zaG93T3ZlcmxheSgpO1xuICAgICAgICAgICAgdGhpcy5hZGRDbGFzcyh0cmlnZ2VyKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblRyaWdnZXJPdXQoZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlzV2lkdGhNb3JlVGhhbkF2YWlsYWJsZUJyZWFrcG9pbnQoKSkge1xuICAgICAgICAgICAgY29uc3QgdHJpZ2dlciA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIHRoaXMub3ZlcmxheS5oaWRlT3ZlcmxheSgpO1xuICAgICAgICAgICAgdGhpcy5yZW1vdmVDbGFzcyh0cmlnZ2VyKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBhZGRDbGFzcyh0cmlnZ2VyOiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICB0cmlnZ2VyLmNsYXNzTGlzdC5hZGQodGhpcy5jbGFzc1RvVG9nZ2xlKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlQ2xhc3ModHJpZ2dlcjogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgdHJpZ2dlci5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuY2xhc3NUb1RvZ2dsZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uVHJpZ2dlckNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuaXNXaWR0aE1vcmVUaGFuQXZhaWxhYmxlQnJlYWtwb2ludCgpKSB7XG4gICAgICAgICAgICBjb25zdCB0cmlnZ2VyID0gPEhUTUxFbGVtZW50PmV2ZW50LmN1cnJlbnRUYXJnZXQ7XG4gICAgICAgICAgICBjb25zdCBjb250ZW50VG9TaG93U2VsZWN0b3IgPSB0aGlzLmdldERhdGFBdHRyaWJ1dGUodHJpZ2dlciwgJ2RhdGEtdG9nZ2xlLXRhcmdldCcpO1xuICAgICAgICAgICAgY29uc3QgY29udGVudFRvZ2dsZUNsYXNzID0gdGhpcy5nZXREYXRhQXR0cmlidXRlKHRyaWdnZXIsICdkYXRhLWNsYXNzLXRvLXRvZ2dsZScpO1xuICAgICAgICAgICAgY29uc3QgY2xvc2VzdFBhcmVudE5vZGUgPSB0cmlnZ2VyLmNsb3Nlc3QoYC4ke3RoaXMuanNOYW1lfV9faXRlbWApO1xuICAgICAgICAgICAgY29uc3QgY29udGVudFRvU2hvdyA9IGNsb3Nlc3RQYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoY29udGVudFRvU2hvd1NlbGVjdG9yKTtcblxuICAgICAgICAgICAgY29udGVudFRvU2hvdy5jbGFzc0xpc3QudG9nZ2xlKGNvbnRlbnRUb2dnbGVDbGFzcyk7XG4gICAgICAgICAgICB0cmlnZ2VyLmNsYXNzTGlzdC50b2dnbGUoJ2lzLWFjdGl2ZScpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGlzRHJvcE1lbnVSZXZlcnNlKHRyaWdnZXI6IEhUTUxFbGVtZW50LCBkcm9wSXRlbTogSFRNTEVsZW1lbnQpOiBib29sZWFuIHtcbiAgICAgICAgY29uc3QgbGVmdFBvc2l0aW9uVG9UaGVNZW51SXRlbSA9IHRyaWdnZXIub2Zmc2V0TGVmdDtcbiAgICAgICAgY29uc3Qgd2luZG93V2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcbiAgICAgICAgY29uc3QgZHJvcEl0ZW1XaWR0aCA9IGRyb3BJdGVtID8gZHJvcEl0ZW0ub2Zmc2V0V2lkdGggOiAwO1xuXG4gICAgICAgIHJldHVybiB3aW5kb3dXaWR0aCAtIGxlZnRQb3NpdGlvblRvVGhlTWVudUl0ZW0gPCBkcm9wSXRlbVdpZHRoO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpc1dpZHRoTW9yZVRoYW5BdmFpbGFibGVCcmVha3BvaW50KCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gd2luZG93LmlubmVyV2lkdGggPj0gdGhpcy5hdmFpbGFibGVCcmVha3BvaW50O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXREYXRhQXR0cmlidXRlKGJsb2NrOiBIVE1MRWxlbWVudCwgYXR0cjogc3RyaW5nKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIGJsb2NrLmdldEF0dHJpYnV0ZShhdHRyKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsYXNzVG9Ub2dnbGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbGFzcy10by10b2dnbGUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGF2YWlsYWJsZUJyZWFrcG9pbnQoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLmdldEF0dHJpYnV0ZSgnYXZhaWxhYmxlLWJyZWFrcG9pbnQnKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBvdmVybGF5QmxvY2tDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdvdmVybGF5LWJsb2NrLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHJldmVyc2VDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdyZXZlcnNlLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9