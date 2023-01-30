(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["node-animator"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/node-animator/node-animator.ts":
/*!***********************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/node-animator/node-animator.ts ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return NodeAnimator; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");



var DIRECTIONS = {
  TOP: 'top',
  RIGHT: 'right',
  BOTTOM: 'bottom',
  LEFT: 'left'
};
var DIMENSIONS = {
  WIDTH: 'width',
  HEIGHT: 'height'
};
var PERCENT = 100;
var EXPONENT = 2;

var NodeAnimator = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(NodeAnimator, _Component);

  function NodeAnimator() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.triggers = void 0;
    _this.target = void 0;
    _this.targetCoordinates = void 0;
    _this.clonedElements = [];
    _this.animationDuration = void 0;
    _this.observer = void 0;
    _this.viewportOptions = {
      rootMargin: '0px',
      threshold: 0
    };
    _this.isTargetInViewport = true;
    return _this;
  }

  var _proto = NodeAnimator.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.animationDuration = this.animationDurationValue;
    this.validateTarget();

    if (!this.triggers.length || !this.target) {
      return;
    }

    this.observer = this.initObserver();
    this.subscribeToObserver();
    this.mapEvents();
  };

  _proto.initObserver = function initObserver() {
    return new IntersectionObserver(this.observerCallback(), this.viewportOptions);
  };

  _proto.observerCallback = function observerCallback() {
    var _this2 = this;

    return function (entries, observer) {
      entries.forEach(function (entry) {
        _this2.targetState = Boolean(entry.intersectionRatio) || entry.isIntersecting;
      });
    };
  };

  _proto.subscribeToObserver = function subscribeToObserver() {
    this.observer.observe(this.target);
  };

  _proto.validateTarget = function validateTarget() {
    if (!this.target || this.target.offsetParent === null) {
      this.target = Array.from(document.getElementsByClassName(this.targetClassName)).filter(function (target) {
        return target.offsetParent !== null;
      })[0];
    }

    if (!this.target) {
      return;
    }

    this.updateTargetCoordinates();
  };

  _proto.updateTargetCoordinates = function updateTargetCoordinates() {
    this.targetCoordinates = this.target.getBoundingClientRect();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerClickEvent();
  };

  _proto.mapTriggerClickEvent = function mapTriggerClickEvent() {
    var _this3 = this;

    this.triggers.forEach(function (trigger) {
      trigger.addEventListener('click', function () {
        return _this3.onClick(trigger);
      });
    });
  };

  _proto.onClick = function onClick(trigger) {
    this.cloneElement(trigger);
    this.startAnimation();
  };

  _proto.cloneElement = function cloneElement(trigger) {
    var _trigger$dataset$node, _trigger$dataset$node2, _trigger$dataset$clon;

    var wrapperSelector = (_trigger$dataset$node = trigger.dataset.nodeAnimatorWrapperClassName) != null ? _trigger$dataset$node : this.wrapperClassName;
    var wrapper = trigger.closest("." + wrapperSelector);
    var elementSelector = (_trigger$dataset$node2 = trigger.dataset.nodeAnimatorNodeClassName) != null ? _trigger$dataset$node2 : this.elementClassName;
    var element = wrapper.getElementsByClassName(elementSelector)[0];
    var elementCoordinates = element.getBoundingClientRect();
    var clonedNode = element.cloneNode(true);
    clonedNode.className = this.name + "__image " + this.cloneNodeClassNames + " " + ((_trigger$dataset$clon = trigger.dataset.cloneNodeClassNames) != null ? _trigger$dataset$clon : '');
    clonedNode.style.cssText = "\n            top: " + (elementCoordinates.top + pageYOffset) + "px;\n            left: " + (elementCoordinates.left + pageXOffset) + "px;\n            width: " + elementCoordinates.width + "px;\n            height: " + elementCoordinates.height + "px;\n        ";
    this.clonedElements.push({
      element: clonedNode,
      coordinates: elementCoordinates,
      pageXScroll: pageXOffset,
      pageYScroll: pageYOffset,
      animationStartTime: performance.now()
    });
    document.body.appendChild(clonedNode);
  };

  _proto.startAnimation = function startAnimation() {
    var _this4 = this;

    requestAnimationFrame(function (time) {
      return _this4.animateElement(time);
    });
  };

  _proto.animateElement = function animateElement(time) {
    if (!this.clonedElements.length) {
      return;
    }

    this.moveElements(time);
    this.startAnimation();
  };

  _proto.moveElements = function moveElements(time) {
    var _this5 = this;

    this.clonedElements.forEach(function (item) {
      var timeFraction = (time - item.animationStartTime) / _this5.animationDuration;
      var progress = Math.pow(timeFraction, EXPONENT);
      var percentageProgress = progress * PERCENT;

      if (_this5.isTargetInViewport) {
        _this5.validateTarget();
      }

      var sides = [DIRECTIONS.TOP, DIRECTIONS.LEFT, DIMENSIONS.WIDTH, DIMENSIONS.HEIGHT];

      _this5.setAnimationDistance(sides, item, percentageProgress);

      if (percentageProgress <= PERCENT) {
        return;
      }

      _this5.clonedElements.shift();

      document.body.removeChild(item.element);
    });
  };

  _proto.setAnimationDistance = function setAnimationDistance(sides, element, percentageProgress) {
    var _this6 = this;

    sides.forEach(function (side) {
      var pageOffset = 0;
      var initialPageOffset = 0;

      if (side === DIRECTIONS.LEFT || side === DIRECTIONS.RIGHT) {
        initialPageOffset = element.pageXScroll;
        pageOffset = pageXOffset;
      }

      if (side === DIRECTIONS.TOP || side === DIRECTIONS.BOTTOM) {
        initialPageOffset = element.pageYScroll;
        pageOffset = pageYOffset;
      }

      var elementCoordinates = Number(element.coordinates[side]) + initialPageOffset;
      var distance = elementCoordinates - (Number(_this6.targetCoordinates[side]) + pageOffset);
      var progressDistance = distance * percentageProgress / PERCENT;
      var newDistance = elementCoordinates - progressDistance;
      element.element.style[side] = newDistance + "px";
    });
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(NodeAnimator, [{
    key: "targetState",
    set: function set(isInViewport) {
      if (this.isTargetInViewport !== isInViewport) {
        this.validateTarget();
      }

      this.isTargetInViewport = isInViewport;
    }
  }, {
    key: "triggerClassName",
    get: function get() {
      return this.getAttribute('trigger-class-name');
    }
  }, {
    key: "targetClassName",
    get: function get() {
      return this.getAttribute('target-class-name');
    }
  }, {
    key: "elementClassName",
    get: function get() {
      return this.getAttribute('node-class-name');
    }
  }, {
    key: "wrapperClassName",
    get: function get() {
      return this.getAttribute('wrapper-class-name');
    }
  }, {
    key: "cloneNodeClassNames",
    get: function get() {
      return this.getAttribute('clone-node-class-names');
    }
  }, {
    key: "animationDurationValue",
    get: function get() {
      return Number(this.getAttribute('animation-duration'));
    }
    /* tslint:disable: max-file-line-count */

  }]);

  return NodeAnimator;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvbm9kZS1hbmltYXRvci9ub2RlLWFuaW1hdG9yLnRzIl0sIm5hbWVzIjpbIkRJUkVDVElPTlMiLCJUT1AiLCJSSUdIVCIsIkJPVFRPTSIsIkxFRlQiLCJESU1FTlNJT05TIiwiV0lEVEgiLCJIRUlHSFQiLCJQRVJDRU5UIiwiRVhQT05FTlQiLCJOb2RlQW5pbWF0b3IiLCJ0cmlnZ2VycyIsInRhcmdldCIsInRhcmdldENvb3JkaW5hdGVzIiwiY2xvbmVkRWxlbWVudHMiLCJhbmltYXRpb25EdXJhdGlvbiIsIm9ic2VydmVyIiwidmlld3BvcnRPcHRpb25zIiwicm9vdE1hcmdpbiIsInRocmVzaG9sZCIsImlzVGFyZ2V0SW5WaWV3cG9ydCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwidHJpZ2dlckNsYXNzTmFtZSIsImFuaW1hdGlvbkR1cmF0aW9uVmFsdWUiLCJ2YWxpZGF0ZVRhcmdldCIsImxlbmd0aCIsImluaXRPYnNlcnZlciIsInN1YnNjcmliZVRvT2JzZXJ2ZXIiLCJtYXBFdmVudHMiLCJJbnRlcnNlY3Rpb25PYnNlcnZlciIsIm9ic2VydmVyQ2FsbGJhY2siLCJlbnRyaWVzIiwiZm9yRWFjaCIsImVudHJ5IiwidGFyZ2V0U3RhdGUiLCJCb29sZWFuIiwiaW50ZXJzZWN0aW9uUmF0aW8iLCJpc0ludGVyc2VjdGluZyIsIm9ic2VydmUiLCJvZmZzZXRQYXJlbnQiLCJ0YXJnZXRDbGFzc05hbWUiLCJmaWx0ZXIiLCJ1cGRhdGVUYXJnZXRDb29yZGluYXRlcyIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsIm1hcFRyaWdnZXJDbGlja0V2ZW50IiwidHJpZ2dlciIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwiY2xvbmVFbGVtZW50Iiwic3RhcnRBbmltYXRpb24iLCJ3cmFwcGVyU2VsZWN0b3IiLCJkYXRhc2V0Iiwibm9kZUFuaW1hdG9yV3JhcHBlckNsYXNzTmFtZSIsIndyYXBwZXJDbGFzc05hbWUiLCJ3cmFwcGVyIiwiY2xvc2VzdCIsImVsZW1lbnRTZWxlY3RvciIsIm5vZGVBbmltYXRvck5vZGVDbGFzc05hbWUiLCJlbGVtZW50Q2xhc3NOYW1lIiwiZWxlbWVudCIsImVsZW1lbnRDb29yZGluYXRlcyIsImNsb25lZE5vZGUiLCJjbG9uZU5vZGUiLCJjbGFzc05hbWUiLCJuYW1lIiwiY2xvbmVOb2RlQ2xhc3NOYW1lcyIsInN0eWxlIiwiY3NzVGV4dCIsInRvcCIsInBhZ2VZT2Zmc2V0IiwibGVmdCIsInBhZ2VYT2Zmc2V0Iiwid2lkdGgiLCJoZWlnaHQiLCJwdXNoIiwiY29vcmRpbmF0ZXMiLCJwYWdlWFNjcm9sbCIsInBhZ2VZU2Nyb2xsIiwiYW5pbWF0aW9uU3RhcnRUaW1lIiwicGVyZm9ybWFuY2UiLCJub3ciLCJib2R5IiwiYXBwZW5kQ2hpbGQiLCJyZXF1ZXN0QW5pbWF0aW9uRnJhbWUiLCJ0aW1lIiwiYW5pbWF0ZUVsZW1lbnQiLCJtb3ZlRWxlbWVudHMiLCJpdGVtIiwidGltZUZyYWN0aW9uIiwicHJvZ3Jlc3MiLCJNYXRoIiwicG93IiwicGVyY2VudGFnZVByb2dyZXNzIiwic2lkZXMiLCJzZXRBbmltYXRpb25EaXN0YW5jZSIsInNoaWZ0IiwicmVtb3ZlQ2hpbGQiLCJzaWRlIiwicGFnZU9mZnNldCIsImluaXRpYWxQYWdlT2Zmc2V0IiwiTnVtYmVyIiwiZGlzdGFuY2UiLCJwcm9ncmVzc0Rpc3RhbmNlIiwibmV3RGlzdGFuY2UiLCJpc0luVmlld3BvcnQiLCJnZXRBdHRyaWJ1dGUiLCJDb21wb25lbnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUVBLElBQU1BLFVBQVUsR0FBRztBQUNmQyxLQUFHLEVBQUUsS0FEVTtBQUVmQyxPQUFLLEVBQUUsT0FGUTtBQUdmQyxRQUFNLEVBQUUsUUFI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M0Q7QUFFQSxVQUFNb0csV0FBVyxHQUFHM0Msa0JBQWtCLEdBQUcwQyxnQkFBekM7QUFDQTNDLGFBQU8sQ0FBQ0EsT0FBUixDQUFnQk8sS0FBaEIsQ0FBc0IrQixJQUF0QixJQUFpQ00sV0FBakM7QUFDSCxLQXBCRDtBQXFCSCxHOzs7O1NBNUdELGFBQTBCQyxZQUExQixFQUFpRDtBQUM3QyxVQUFJLEtBQUt6RixrQkFBTCxLQUE0QnlGLFlBQWhDLEVBQThDO0FBQzFDLGFBQUtoRixjQUFMO0FBQ0g7O0FBRUQsV0FBS1Qsa0JBQUwsR0FBMEJ5RixZQUExQjtBQUNIOzs7U0F3R0QsZUFBeUM7QUFDckMsYUFBTyxLQUFLQyxZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQXdDO0FBQ3BDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQixtQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUF5QztBQUNyQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBeUM7QUFDckMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTRDO0FBQ3hDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQix3QkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUErQztBQUMzQyxhQUFPTCxNQUFNLENBQUMsS0FBS0ssWUFBTCxDQUFrQixvQkFBbEIsQ0FBRCxDQUFiO0FBQ0g7QUFDRDs7Ozs7RUF0TXNDQywrRCIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5ub2RlLWFuaW1hdG9yLmxlZ2FjeS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuXG5jb25zdCBESVJFQ1RJT05TID0ge1xuICAgIFRPUDogJ3RvcCcsXG4gICAgUklHSFQ6ICdyaWdodCcsXG4gICAgQk9UVE9NOiAnYm90dG9tJyxcbiAgICBMRUZUOiAnbGVmdCcsXG59O1xuXG5jb25zdCBESU1FTlNJT05TID0ge1xuICAgIFdJRFRIOiAnd2lkdGgnLFxuICAgIEhFSUdIVDogJ2hlaWdodCcsXG59O1xuXG5jb25zdCBQRVJDRU5UID0gMTAwO1xuY29uc3QgRVhQT05FTlQgPSAyO1xuXG5pbnRlcmZhY2UgQ2xvbmVkRWxlbWVudCB7XG4gICAgZWxlbWVudDogSFRNTEVsZW1lbnQ7XG4gICAgY29vcmRpbmF0ZXM6IERPTVJlY3Q7XG4gICAgcGFnZVhTY3JvbGw6IG51bWJlcjtcbiAgICBwYWdlWVNjcm9sbDogbnVtYmVyO1xuICAgIGFuaW1hdGlvblN0YXJ0VGltZTogbnVtYmVyO1xufVxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBOb2RlQW5pbWF0b3IgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCB0cmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0OiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0Q29vcmRpbmF0ZXM6IERPTVJlY3Q7XG4gICAgcHJvdGVjdGVkIGNsb25lZEVsZW1lbnRzOiBDbG9uZWRFbGVtZW50W10gPSBbXTtcbiAgICBwcm90ZWN0ZWQgYW5pbWF0aW9uRHVyYXRpb246IG51bWJlcjtcbiAgICBwcm90ZWN0ZWQgb2JzZXJ2ZXI6IEludGVyc2VjdGlvbk9ic2VydmVyO1xuICAgIHByb3RlY3RlZCB2aWV3cG9ydE9wdGlvbnM6IEludGVyc2VjdGlvbk9ic2VydmVySW5pdCA9IHtcbiAgICAgICAgcm9vdE1hcmdpbjogJzBweCcsXG4gICAgICAgIHRocmVzaG9sZDogMCxcbiAgICB9O1xuICAgIHByb3RlY3RlZCBpc1RhcmdldEluVmlld3BvcnQ6IGJvb2xlYW4gPSB0cnVlO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50cmlnZ2VyQ2xhc3NOYW1lKSk7XG4gICAgICAgIHRoaXMuYW5pbWF0aW9uRHVyYXRpb24gPSB0aGlzLmFuaW1hdGlvbkR1cmF0aW9uVmFsdWU7XG4gICAgICAgIHRoaXMudmFsaWRhdGVUYXJnZXQoKTtcblxuICAgICAgICBpZiAoIXRoaXMudHJpZ2dlcnMubGVuZ3RoIHx8ICF0aGlzLnRhcmdldCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5vYnNlcnZlciA9IHRoaXMuaW5pdE9ic2VydmVyKCk7XG4gICAgICAgIHRoaXMuc3Vic2NyaWJlVG9PYnNlcnZlcigpO1xuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBpbml0T2JzZXJ2ZXIoKTogSW50ZXJzZWN0aW9uT2JzZXJ2ZXIge1xuICAgICAgICByZXR1cm4gbmV3IEludGVyc2VjdGlvbk9ic2VydmVyKHRoaXMub2JzZXJ2ZXJDYWxsYmFjaygpLCB0aGlzLnZpZXdwb3J0T3B0aW9ucyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9ic2VydmVyQ2FsbGJhY2soKTogSW50ZXJzZWN0aW9uT2JzZXJ2ZXJDYWxsYmFjayB7XG4gICAgICAgIHJldHVybiAoZW50cmllczogSW50ZXJzZWN0aW9uT2JzZXJ2ZXJFbnRyeVtdLCBvYnNlcnZlcjogSW50ZXJzZWN0aW9uT2JzZXJ2ZXIpID0+IHtcbiAgICAgICAgICAgIGVudHJpZXMuZm9yRWFjaCgoZW50cnk6IEludGVyc2VjdGlvbk9ic2VydmVyRW50cnkpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLnRhcmdldFN0YXRlID0gQm9vbGVhbihlbnRyeS5pbnRlcnNlY3Rpb25SYXRpbykgfHwgZW50cnkuaXNJbnRlcnNlY3Rpbmc7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc3Vic2NyaWJlVG9PYnNlcnZlcigpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5vYnNlcnZlci5vYnNlcnZlKHRoaXMudGFyZ2V0KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgdmFsaWRhdGVUYXJnZXQoKTogdm9pZCB7XG4gICAgICAgIGlmICghdGhpcy50YXJnZXQgfHwgdGhpcy50YXJnZXQub2Zmc2V0UGFyZW50ID09PSBudWxsKSB7XG4gICAgICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD4oXG4gICAgICAgICAgICAgICAgQXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKSkuZmlsdGVyKFxuICAgICAgICAgICAgICAgICAgICAodGFyZ2V0OiBIVE1MRWxlbWVudCkgPT4gdGFyZ2V0Lm9mZnNldFBhcmVudCAhPT0gbnVsbCxcbiAgICAgICAgICAgICAgICApWzBdXG4gICAgICAgICAgICApO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKCF0aGlzLnRhcmdldCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy51cGRhdGVUYXJnZXRDb29yZGluYXRlcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVUYXJnZXRDb29yZGluYXRlcygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50YXJnZXRDb29yZGluYXRlcyA9IDxET01SZWN0PnRoaXMudGFyZ2V0LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXQgdGFyZ2V0U3RhdGUoaXNJblZpZXdwb3J0OiBib29sZWFuKSB7XG4gICAgICAgIGlmICh0aGlzLmlzVGFyZ2V0SW5WaWV3cG9ydCAhPT0gaXNJblZpZXdwb3J0KSB7XG4gICAgICAgICAgICB0aGlzLnZhbGlkYXRlVGFyZ2V0KCk7XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmlzVGFyZ2V0SW5WaWV3cG9ydCA9IGlzSW5WaWV3cG9ydDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJDbGlja0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJDbGlja0V2ZW50KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4gdGhpcy5vbkNsaWNrKHRyaWdnZXIpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2xpY2sodHJpZ2dlcjogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jbG9uZUVsZW1lbnQodHJpZ2dlcik7XG4gICAgICAgIHRoaXMuc3RhcnRBbmltYXRpb24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgY2xvbmVFbGVtZW50KHRyaWdnZXI6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHdyYXBwZXJTZWxlY3RvciA9IHRyaWdnZXIuZGF0YXNldC5ub2RlQW5pbWF0b3JXcmFwcGVyQ2xhc3NOYW1lID8/IHRoaXMud3JhcHBlckNsYXNzTmFtZTtcbiAgICAgICAgY29uc3Qgd3JhcHBlciA9IDxIVE1MRWxlbWVudD50cmlnZ2VyLmNsb3Nlc3QoYC4ke3dyYXBwZXJTZWxlY3Rvcn1gKTtcblxuICAgICAgICBjb25zdCBlbGVtZW50U2VsZWN0b3IgPSB0cmlnZ2VyLmRhdGFzZXQubm9kZUFuaW1hdG9yTm9kZUNsYXNzTmFtZSA/PyB0aGlzLmVsZW1lbnRDbGFzc05hbWU7XG4gICAgICAgIGNvbnN0IGVsZW1lbnQgPSA8SFRNTEVsZW1lbnQ+d3JhcHBlci5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGVsZW1lbnRTZWxlY3RvcilbMF07XG4gICAgICAgIGNvbnN0IGVsZW1lbnRDb29yZGluYXRlcyA9IDxET01SZWN0PmVsZW1lbnQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG5cbiAgICAgICAgY29uc3QgY2xvbmVkTm9kZSA9IDxIVE1MRWxlbWVudD5lbGVtZW50LmNsb25lTm9kZSh0cnVlKTtcbiAgICAgICAgY2xvbmVkTm9kZS5jbGFzc05hbWUgPSBgJHt0aGlzLm5hbWV9X19pbWFnZSAke3RoaXMuY2xvbmVOb2RlQ2xhc3NOYW1lc30gJHtcbiAgICAgICAgICAgIHRyaWdnZXIuZGF0YXNldC5jbG9uZU5vZGVDbGFzc05hbWVzID8/ICcnXG4gICAgICAgIH1gO1xuICAgICAgICBjbG9uZWROb2RlLnN0eWxlLmNzc1RleHQgPSBgXG4gICAgICAgICAgICB0b3A6ICR7ZWxlbWVudENvb3JkaW5hdGVzLnRvcCArIHBhZ2VZT2Zmc2V0fXB4O1xuICAgICAgICAgICAgbGVmdDogJHtlbGVtZW50Q29vcmRpbmF0ZXMubGVmdCArIHBhZ2VYT2Zmc2V0fXB4O1xuICAgICAgICAgICAgd2lkdGg6ICR7ZWxlbWVudENvb3JkaW5hdGVzLndpZHRofXB4O1xuICAgICAgICAgICAgaGVpZ2h0OiAke2VsZW1lbnRDb29yZGluYXRlcy5oZWlnaHR9cHg7XG4gICAgICAgIGA7XG4gICAgICAgIHRoaXMuY2xvbmVkRWxlbWVudHMucHVzaCh7XG4gICAgICAgICAgICBlbGVtZW50OiBjbG9uZWROb2RlLFxuICAgICAgICAgICAgY29vcmRpbmF0ZXM6IGVsZW1lbnRDb29yZGluYXRlcyxcbiAgICAgICAgICAgIHBhZ2VYU2Nyb2xsOiBwYWdlWE9mZnNldCxcbiAgICAgICAgICAgIHBhZ2VZU2Nyb2xsOiBwYWdlWU9mZnNldCxcbiAgICAgICAgICAgIGFuaW1hdGlvblN0YXJ0VGltZTogcGVyZm9ybWFuY2Uubm93KCksXG4gICAgICAgIH0pO1xuICAgICAgICBkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKGNsb25lZE5vZGUpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzdGFydEFuaW1hdGlvbigpOiB2b2lkIHtcbiAgICAgICAgcmVxdWVzdEFuaW1hdGlvbkZyYW1lKCh0aW1lOiBudW1iZXIpID0+IHRoaXMuYW5pbWF0ZUVsZW1lbnQodGltZSkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBhbmltYXRlRWxlbWVudCh0aW1lOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLmNsb25lZEVsZW1lbnRzLmxlbmd0aCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5tb3ZlRWxlbWVudHModGltZSk7XG4gICAgICAgIHRoaXMuc3RhcnRBbmltYXRpb24oKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbW92ZUVsZW1lbnRzKHRpbWU6IG51bWJlcik6IHZvaWQge1xuICAgICAgICB0aGlzLmNsb25lZEVsZW1lbnRzLmZvckVhY2goKGl0ZW06IENsb25lZEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGNvbnN0IHRpbWVGcmFjdGlvbiA9ICh0aW1lIC0gaXRlbS5hbmltYXRpb25TdGFydFRpbWUpIC8gdGhpcy5hbmltYXRpb25EdXJhdGlvbjtcbiAgICAgICAgICAgIGNvbnN0IHByb2dyZXNzID0gTWF0aC5wb3codGltZUZyYWN0aW9uLCBFWFBPTkVOVCk7XG4gICAgICAgICAgICBjb25zdCBwZXJjZW50YWdlUHJvZ3Jlc3MgPSBwcm9ncmVzcyAqIFBFUkNFTlQ7XG5cbiAgICAgICAgICAgIGlmICh0aGlzLmlzVGFyZ2V0SW5WaWV3cG9ydCkge1xuICAgICAgICAgICAgICAgIHRoaXMudmFsaWRhdGVUYXJnZXQoKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgY29uc3Qgc2lkZXMgPSBbRElSRUNUSU9OUy5UT1AsIERJUkVDVElPTlMuTEVGVCwgRElNRU5TSU9OUy5XSURUSCwgRElNRU5TSU9OUy5IRUlHSFRdO1xuICAgICAgICAgICAgdGhpcy5zZXRBbmltYXRpb25EaXN0YW5jZShzaWRlcywgaXRlbSwgcGVyY2VudGFnZVByb2dyZXNzKTtcblxuICAgICAgICAgICAgaWYgKHBlcmNlbnRhZ2VQcm9ncmVzcyA8PSBQRVJDRU5UKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB0aGlzLmNsb25lZEVsZW1lbnRzLnNoaWZ0KCk7XG4gICAgICAgICAgICBkb2N1bWVudC5ib2R5LnJlbW92ZUNoaWxkKGl0ZW0uZWxlbWVudCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzZXRBbmltYXRpb25EaXN0YW5jZShzaWRlczogc3RyaW5nW10sIGVsZW1lbnQ6IENsb25lZEVsZW1lbnQsIHBlcmNlbnRhZ2VQcm9ncmVzczogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIHNpZGVzLmZvckVhY2goKHNpZGU6IHN0cmluZykgPT4ge1xuICAgICAgICAgICAgbGV0IHBhZ2VPZmZzZXQgPSAwO1xuICAgICAgICAgICAgbGV0IGluaXRpYWxQYWdlT2Zmc2V0ID0gMDtcblxuICAgICAgICAgICAgaWYgKHNpZGUgPT09IERJUkVDVElPTlMuTEVGVCB8fCBzaWRlID09PSBESVJFQ1RJT05TLlJJR0hUKSB7XG4gICAgICAgICAgICAgICAgaW5pdGlhbFBhZ2VPZmZzZXQgPSBlbGVtZW50LnBhZ2VYU2Nyb2xsO1xuICAgICAgICAgICAgICAgIHBhZ2VPZmZzZXQgPSBwYWdlWE9mZnNldDtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgaWYgKHNpZGUgPT09IERJUkVDVElPTlMuVE9QIHx8IHNpZGUgPT09IERJUkVDVElPTlMuQk9UVE9NKSB7XG4gICAgICAgICAgICAgICAgaW5pdGlhbFBhZ2VPZmZzZXQgPSBlbGVtZW50LnBhZ2VZU2Nyb2xsO1xuICAgICAgICAgICAgICAgIHBhZ2VPZmZzZXQgPSBwYWdlWU9mZnNldDtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgY29uc3QgZWxlbWVudENvb3JkaW5hdGVzID0gTnVtYmVyKGVsZW1lbnQuY29vcmRpbmF0ZXNbc2lkZV0pICsgaW5pdGlhbFBhZ2VPZmZzZXQ7XG4gICAgICAgICAgICBjb25zdCBkaXN0YW5jZSA9IGVsZW1lbnRDb29yZGluYXRlcyAtIChOdW1iZXIodGhpcy50YXJnZXRDb29yZGluYXRlc1tzaWRlXSkgKyBwYWdlT2Zmc2V0KTtcbiAgICAgICAgICAgIGNvbnN0IHByb2dyZXNzRGlzdGFuY2UgPSAoZGlzdGFuY2UgKiBwZXJjZW50YWdlUHJvZ3Jlc3MpIC8gUEVSQ0VOVDtcblxuICAgICAgICAgICAgY29uc3QgbmV3RGlzdGFuY2UgPSBlbGVtZW50Q29vcmRpbmF0ZXMgLSBwcm9ncmVzc0Rpc3RhbmNlO1xuICAgICAgICAgICAgZWxlbWVudC5lbGVtZW50LnN0eWxlW3NpZGVdID0gYCR7bmV3RGlzdGFuY2V9cHhgO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRyaWdnZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd0cmlnZ2VyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBlbGVtZW50Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnbm9kZS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB3cmFwcGVyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnd3JhcHBlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbG9uZU5vZGVDbGFzc05hbWVzKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xvbmUtbm9kZS1jbGFzcy1uYW1lcycpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYW5pbWF0aW9uRHVyYXRpb25WYWx1ZSgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMuZ2V0QXR0cmlidXRlKCdhbmltYXRpb24tZHVyYXRpb24nKSk7XG4gICAgfVxuICAgIC8qIHRzbGludDpkaXNhYmxlOiBtYXgtZmlsZS1saW5lLWNvdW50ICovXG59XG4iXSwic291cmNlUm9vdCI6IiJ9