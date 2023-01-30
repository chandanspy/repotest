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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

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
class NodeAnimator extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.triggers = void 0;
    this.target = void 0;
    this.targetCoordinates = void 0;
    this.clonedElements = [];
    this.animationDuration = void 0;
    this.observer = void 0;
    this.viewportOptions = {
      rootMargin: '0px',
      threshold: 0
    };
    this.isTargetInViewport = true;
  }

  readyCallback() {}

  init() {
    this.triggers = Array.from(document.getElementsByClassName(this.triggerClassName));
    this.animationDuration = this.animationDurationValue;
    this.validateTarget();

    if (!this.triggers.length || !this.target) {
      return;
    }

    this.observer = this.initObserver();
    this.subscribeToObserver();
    this.mapEvents();
  }

  initObserver() {
    return new IntersectionObserver(this.observerCallback(), this.viewportOptions);
  }

  observerCallback() {
    return (entries, observer) => {
      entries.forEach(entry => {
        this.targetState = Boolean(entry.intersectionRatio) || entry.isIntersecting;
      });
    };
  }

  subscribeToObserver() {
    this.observer.observe(this.target);
  }

  validateTarget() {
    if (!this.target || this.target.offsetParent === null) {
      this.target = Array.from(document.getElementsByClassName(this.targetClassName)).filter(target => target.offsetParent !== null)[0];
    }

    if (!this.target) {
      return;
    }

    this.updateTargetCoordinates();
  }

  updateTargetCoordinates() {
    this.targetCoordinates = this.target.getBoundingClientRect();
  }

  set targetState(isInViewport) {
    if (this.isTargetInViewport !== isInViewport) {
      this.validateTarget();
    }

    this.isTargetInViewport = isInViewport;
  }

  mapEvents() {
    this.mapTriggerClickEvent();
  }

  mapTriggerClickEvent() {
    this.triggers.forEach(trigger => {
      trigger.addEventListener('click', () => this.onClick(trigger));
    });
  }

  onClick(trigger) {
    this.cloneElement(trigger);
    this.startAnimation();
  }

  cloneElement(trigger) {
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
  }

  startAnimation() {
    requestAnimationFrame(time => this.animateElement(time));
  }

  animateElement(time) {
    if (!this.clonedElements.length) {
      return;
    }

    this.moveElements(time);
    this.startAnimation();
  }

  moveElements(time) {
    this.clonedElements.forEach(item => {
      var timeFraction = (time - item.animationStartTime) / this.animationDuration;
      var progress = Math.pow(timeFraction, EXPONENT);
      var percentageProgress = progress * PERCENT;

      if (this.isTargetInViewport) {
        this.validateTarget();
      }

      var sides = [DIRECTIONS.TOP, DIRECTIONS.LEFT, DIMENSIONS.WIDTH, DIMENSIONS.HEIGHT];
      this.setAnimationDistance(sides, item, percentageProgress);

      if (percentageProgress <= PERCENT) {
        return;
      }

      this.clonedElements.shift();
      document.body.removeChild(item.element);
    });
  }

  setAnimationDistance(sides, element, percentageProgress) {
    sides.forEach(side => {
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
      var distance = elementCoordinates - (Number(this.targetCoordinates[side]) + pageOffset);
      var progressDistance = distance * percentageProgress / PERCENT;
      var newDistance = elementCoordinates - progressDistance;
      element.element.style[side] = newDistance + "px";
    });
  }

  get triggerClassName() {
    return this.getAttribute('trigger-class-name');
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }

  get elementClassName() {
    return this.getAttribute('node-class-name');
  }

  get wrapperClassName() {
    return this.getAttribute('wrapper-class-name');
  }

  get cloneNodeClassNames() {
    return this.getAttribute('clone-node-class-names');
  }

  get animationDurationValue() {
    return Number(this.getAttribute('animation-duration'));
  }
  /* tslint:disable: max-file-line-count */


}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvbm9kZS1hbmltYXRvci9ub2RlLWFuaW1hdG9yLnRzIl0sIm5hbWVzIjpbIkRJUkVDVElPTlMiLCJUT1AiLCJSSUdIVCIsIkJPVFRPTSIsIkxFRlQiLCJESU1FTlNJT05TIiwiV0lEVEgiLCJIRUlHSFQiLCJQRVJDRU5UIiwiRVhQT05FTlQiLCJOb2RlQW5pbWF0b3IiLCJDb21wb25lbnQiLCJ0cmlnZ2VycyIsInRhcmdldCIsInRhcmdldENvb3JkaW5hdGVzIiwiY2xvbmVkRWxlbWVudHMiLCJhbmltYXRpb25EdXJhdGlvbiIsIm9ic2VydmVyIiwidmlld3BvcnRPcHRpb25zIiwicm9vdE1hcmdpbiIsInRocmVzaG9sZCIsImlzVGFyZ2V0SW5WaWV3cG9ydCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiQXJyYXkiLCJmcm9tIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwidHJpZ2dlckNsYXNzTmFtZSIsImFuaW1hdGlvbkR1cmF0aW9uVmFsdWUiLCJ2YWxpZGF0ZVRhcmdldCIsImxlbmd0aCIsImluaXRPYnNlcnZlciIsInN1YnNjcmliZVRvT2JzZXJ2ZXIiLCJtYXBFdmVudHMiLCJJbnRlcnNlY3Rpb25PYnNlcnZlciIsIm9ic2VydmVyQ2FsbGJhY2siLCJlbnRyaWVzIiwiZm9yRWFjaCIsImVudHJ5IiwidGFyZ2V0U3RhdGUiLCJCb29sZWFuIiwiaW50ZXJzZWN0aW9uUmF0aW8iLCJpc0ludGVyc2VjdGluZyIsIm9ic2VydmUiLCJvZmZzZXRQYXJlbnQiLCJ0YXJnZXRDbGFzc05hbWUiLCJmaWx0ZXIiLCJ1cGRhdGVUYXJnZXRDb29yZGluYXRlcyIsImdldEJvdW5kaW5nQ2xpZW50UmVjdCIsImlzSW5WaWV3cG9ydCIsIm1hcFRyaWdnZXJDbGlja0V2ZW50IiwidHJpZ2dlciIsImFkZEV2ZW50TGlzdGVuZXIiLCJvbkNsaWNrIiwiY2xvbmVFbGVtZW50Iiwic3RhcnRBbmltYXRpb24iLCJ3cmFwcGVyU2VsZWN0b3IiLCJkYXRhc2V0Iiwibm9kZUFuaW1hdG9yV3JhcHBlckNsYXNzTmFtZSIsIndyYXBwZXJDbGFzc05hbWUiLCJ3cmFwcGVyIiwiY2xvc2VzdCIsImVsZW1lbnRTZWxlY3RvciIsIm5vZGVBbmltYXRvck5vZGVDbGFzc05hbWUiLCJlbGVtZW50Q2xhc3NOYW1lIiwiZWxlbWVudCIsImVsZW1lbnRDb29yZGluYXRlcyIsImNsb25lZE5vZGUiLCJjbG9uZU5vZGUiLCJjbGFzc05hbWUiLCJuYW1lIiwiY2xvbmVOb2RlQ2xhc3NOYW1lcyIsInN0eWxlIiwiY3NzVGV4dCIsInRvcCIsInBhZ2VZT2Zmc2V0IiwibGVmdCIsInBhZ2VYT2Zmc2V0Iiwid2lkdGgiLCJoZWlnaHQiLCJwdXNoIiwiY29vcmRpbmF0ZXMiLCJwYWdlWFNjcm9sbCIsInBhZ2VZU2Nyb2xsIiwiYW5pbWF0aW9uU3RhcnRUaW1lIiwicGVyZm9ybWFuY2UiLCJub3ciLCJib2R5IiwiYXBwZW5kQ2hpbGQiLCJyZXF1ZXN0QW5pbWF0aW9uRnJhbWUiLCJ0aW1lIiwiYW5pbWF0ZUVsZW1lbnQiLCJtb3ZlRWxlbWVudHMiLCJpdGVtIiwidGltZUZyYWN0aW9uIiwicHJvZ3Jlc3MiLCJNYXRoIiwicG93IiwicGVyY2VudGFnZVByb2dyZXNzIiwic2lkZXMiLCJzZXRBbmltYXRpb25EaXN0YW5jZSIsInNoaWZ0IiwicmVtb3ZlQ2hpbGQiLCJzaWRlIiwicGFnZU9mZnNldCIsImluaXRpYWxQYWdlT2Zmc2V0IiwiTnVtYmVyIiwiZGlzdGFuY2UiLCJwcm9ncmVzc0Rpc3RhbmNlIiwibmV3RGlzdGFuY2UiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVBLElBQU1BLFVBQVUsR0FBRztBQUNmQyxLQUFHLEVBQUUsS0FEVTtBQUVmQyxPQUFLLEVBQUUsT0FGUTtBQUdmQyxRQUFNLEVB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QUFHVCxrQkFBWixHQUFrQzNGLE9BQTNEO0FBRUEsVUFBTXNHLFdBQVcsR0FBRzNDLGtCQUFrQixHQUFHMEMsZ0JBQXpDO0FBQ0EzQyxhQUFPLENBQUNBLE9BQVIsQ0FBZ0JPLEtBQWhCLENBQXNCK0IsSUFBdEIsSUFBaUNNLFdBQWpDO0FBQ0gsS0FwQkQ7QUFxQkg7O0FBRTZCLE1BQWhCbEYsZ0JBQWdCLEdBQVc7QUFDckMsV0FBTyxLQUFLbUYsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIOztBQUU0QixNQUFmakUsZUFBZSxHQUFXO0FBQ3BDLFdBQU8sS0FBS2lFLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7QUFFNkIsTUFBaEI5QyxnQkFBZ0IsR0FBVztBQUNyQyxXQUFPLEtBQUs4QyxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBRTZCLE1BQWhCbkQsZ0JBQWdCLEdBQVc7QUFDckMsV0FBTyxLQUFLbUQsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIOztBQUVnQyxNQUFuQnZDLG1CQUFtQixHQUFXO0FBQ3hDLFdBQU8sS0FBS3VDLFlBQUwsQ0FBa0Isd0JBQWxCLENBQVA7QUFDSDs7QUFFbUMsTUFBdEJsRixzQkFBc0IsR0FBVztBQUMzQyxXQUFPOEUsTUFBTSxDQUFDLEtBQUtJLFlBQUwsQ0FBa0Isb0JBQWxCLENBQUQsQ0FBYjtBQUNIO0FBQ0Q7OztBQXRNZ0QsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5ub2RlLWFuaW1hdG9yLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmNvbnN0IERJUkVDVElPTlMgPSB7XG4gICAgVE9QOiAndG9wJyxcbiAgICBSSUdIVDogJ3JpZ2h0JyxcbiAgICBCT1RUT006ICdib3R0b20nLFxuICAgIExFRlQ6ICdsZWZ0Jyxcbn07XG5cbmNvbnN0IERJTUVOU0lPTlMgPSB7XG4gICAgV0lEVEg6ICd3aWR0aCcsXG4gICAgSEVJR0hUOiAnaGVpZ2h0Jyxcbn07XG5cbmNvbnN0IFBFUkNFTlQgPSAxMDA7XG5jb25zdCBFWFBPTkVOVCA9IDI7XG5cbmludGVyZmFjZSBDbG9uZWRFbGVtZW50IHtcbiAgICBlbGVtZW50OiBIVE1MRWxlbWVudDtcbiAgICBjb29yZGluYXRlczogRE9NUmVjdDtcbiAgICBwYWdlWFNjcm9sbDogbnVtYmVyO1xuICAgIHBhZ2VZU2Nyb2xsOiBudW1iZXI7XG4gICAgYW5pbWF0aW9uU3RhcnRUaW1lOiBudW1iZXI7XG59XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIE5vZGVBbmltYXRvciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXJzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXRDb29yZGluYXRlczogRE9NUmVjdDtcbiAgICBwcm90ZWN0ZWQgY2xvbmVkRWxlbWVudHM6IENsb25lZEVsZW1lbnRbXSA9IFtdO1xuICAgIHByb3RlY3RlZCBhbmltYXRpb25EdXJhdGlvbjogbnVtYmVyO1xuICAgIHByb3RlY3RlZCBvYnNlcnZlcjogSW50ZXJzZWN0aW9uT2JzZXJ2ZXI7XG4gICAgcHJvdGVjdGVkIHZpZXdwb3J0T3B0aW9uczogSW50ZXJzZWN0aW9uT2JzZXJ2ZXJJbml0ID0ge1xuICAgICAgICByb290TWFyZ2luOiAnMHB4JyxcbiAgICAgICAgdGhyZXNob2xkOiAwLFxuICAgIH07XG4gICAgcHJvdGVjdGVkIGlzVGFyZ2V0SW5WaWV3cG9ydDogYm9vbGVhbiA9IHRydWU7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VycyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20oZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnRyaWdnZXJDbGFzc05hbWUpKTtcbiAgICAgICAgdGhpcy5hbmltYXRpb25EdXJhdGlvbiA9IHRoaXMuYW5pbWF0aW9uRHVyYXRpb25WYWx1ZTtcbiAgICAgICAgdGhpcy52YWxpZGF0ZVRhcmdldCgpO1xuXG4gICAgICAgIGlmICghdGhpcy50cmlnZ2Vycy5sZW5ndGggfHwgIXRoaXMudGFyZ2V0KSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm9ic2VydmVyID0gdGhpcy5pbml0T2JzZXJ2ZXIoKTtcbiAgICAgICAgdGhpcy5zdWJzY3JpYmVUb09ic2VydmVyKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGluaXRPYnNlcnZlcigpOiBJbnRlcnNlY3Rpb25PYnNlcnZlciB7XG4gICAgICAgIHJldHVybiBuZXcgSW50ZXJzZWN0aW9uT2JzZXJ2ZXIodGhpcy5vYnNlcnZlckNhbGxiYWNrKCksIHRoaXMudmlld3BvcnRPcHRpb25zKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb2JzZXJ2ZXJDYWxsYmFjaygpOiBJbnRlcnNlY3Rpb25PYnNlcnZlckNhbGxiYWNrIHtcbiAgICAgICAgcmV0dXJuIChlbnRyaWVzOiBJbnRlcnNlY3Rpb25PYnNlcnZlckVudHJ5W10sIG9ic2VydmVyOiBJbnRlcnNlY3Rpb25PYnNlcnZlcikgPT4ge1xuICAgICAgICAgICAgZW50cmllcy5mb3JFYWNoKChlbnRyeTogSW50ZXJzZWN0aW9uT2JzZXJ2ZXJFbnRyeSkgPT4ge1xuICAgICAgICAgICAgICAgIHRoaXMudGFyZ2V0U3RhdGUgPSBCb29sZWFuKGVudHJ5LmludGVyc2VjdGlvblJhdGlvKSB8fCBlbnRyeS5pc0ludGVyc2VjdGluZztcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzdWJzY3JpYmVUb09ic2VydmVyKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm9ic2VydmVyLm9ic2VydmUodGhpcy50YXJnZXQpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB2YWxpZGF0ZVRhcmdldCgpOiB2b2lkIHtcbiAgICAgICAgaWYgKCF0aGlzLnRhcmdldCB8fCB0aGlzLnRhcmdldC5vZmZzZXRQYXJlbnQgPT09IG51bGwpIHtcbiAgICAgICAgICAgIHRoaXMudGFyZ2V0ID0gPEhUTUxFbGVtZW50PihcbiAgICAgICAgICAgICAgICBBcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy50YXJnZXRDbGFzc05hbWUpKS5maWx0ZXIoXG4gICAgICAgICAgICAgICAgICAgICh0YXJnZXQ6IEhUTUxFbGVtZW50KSA9PiB0YXJnZXQub2Zmc2V0UGFyZW50ICE9PSBudWxsLFxuICAgICAgICAgICAgICAgIClbMF1cbiAgICAgICAgICAgICk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoIXRoaXMudGFyZ2V0KSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnVwZGF0ZVRhcmdldENvb3JkaW5hdGVzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHVwZGF0ZVRhcmdldENvb3JkaW5hdGVzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldENvb3JkaW5hdGVzID0gPERPTVJlY3Q+dGhpcy50YXJnZXQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldCB0YXJnZXRTdGF0ZShpc0luVmlld3BvcnQ6IGJvb2xlYW4pIHtcbiAgICAgICAgaWYgKHRoaXMuaXNUYXJnZXRJblZpZXdwb3J0ICE9PSBpc0luVmlld3BvcnQpIHtcbiAgICAgICAgICAgIHRoaXMudmFsaWRhdGVUYXJnZXQoKTtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMuaXNUYXJnZXRJblZpZXdwb3J0ID0gaXNJblZpZXdwb3J0O1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMubWFwVHJpZ2dlckNsaWNrRXZlbnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwVHJpZ2dlckNsaWNrRXZlbnQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlcnMuZm9yRWFjaCgodHJpZ2dlcjogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIHRyaWdnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLm9uQ2xpY2sodHJpZ2dlcikpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25DbGljayh0cmlnZ2VyOiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLmNsb25lRWxlbWVudCh0cmlnZ2VyKTtcbiAgICAgICAgdGhpcy5zdGFydEFuaW1hdGlvbigpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBjbG9uZUVsZW1lbnQodHJpZ2dlcjogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3Qgd3JhcHBlclNlbGVjdG9yID0gdHJpZ2dlci5kYXRhc2V0Lm5vZGVBbmltYXRvcldyYXBwZXJDbGFzc05hbWUgPz8gdGhpcy53cmFwcGVyQ2xhc3NOYW1lO1xuICAgICAgICBjb25zdCB3cmFwcGVyID0gPEhUTUxFbGVtZW50PnRyaWdnZXIuY2xvc2VzdChgLiR7d3JhcHBlclNlbGVjdG9yfWApO1xuXG4gICAgICAgIGNvbnN0IGVsZW1lbnRTZWxlY3RvciA9IHRyaWdnZXIuZGF0YXNldC5ub2RlQW5pbWF0b3JOb2RlQ2xhc3NOYW1lID8/IHRoaXMuZWxlbWVudENsYXNzTmFtZTtcbiAgICAgICAgY29uc3QgZWxlbWVudCA9IDxIVE1MRWxlbWVudD53cmFwcGVyLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoZWxlbWVudFNlbGVjdG9yKVswXTtcbiAgICAgICAgY29uc3QgZWxlbWVudENvb3JkaW5hdGVzID0gPERPTVJlY3Q+ZWxlbWVudC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKTtcblxuICAgICAgICBjb25zdCBjbG9uZWROb2RlID0gPEhUTUxFbGVtZW50PmVsZW1lbnQuY2xvbmVOb2RlKHRydWUpO1xuICAgICAgICBjbG9uZWROb2RlLmNsYXNzTmFtZSA9IGAke3RoaXMubmFtZX1fX2ltYWdlICR7dGhpcy5jbG9uZU5vZGVDbGFzc05hbWVzfSAke1xuICAgICAgICAgICAgdHJpZ2dlci5kYXRhc2V0LmNsb25lTm9kZUNsYXNzTmFtZXMgPz8gJydcbiAgICAgICAgfWA7XG4gICAgICAgIGNsb25lZE5vZGUuc3R5bGUuY3NzVGV4dCA9IGBcbiAgICAgICAgICAgIHRvcDogJHtlbGVtZW50Q29vcmRpbmF0ZXMudG9wICsgcGFnZVlPZmZzZXR9cHg7XG4gICAgICAgICAgICBsZWZ0OiAke2VsZW1lbnRDb29yZGluYXRlcy5sZWZ0ICsgcGFnZVhPZmZzZXR9cHg7XG4gICAgICAgICAgICB3aWR0aDogJHtlbGVtZW50Q29vcmRpbmF0ZXMud2lkdGh9cHg7XG4gICAgICAgICAgICBoZWlnaHQ6ICR7ZWxlbWVudENvb3JkaW5hdGVzLmhlaWdodH1weDtcbiAgICAgICAgYDtcbiAgICAgICAgdGhpcy5jbG9uZWRFbGVtZW50cy5wdXNoKHtcbiAgICAgICAgICAgIGVsZW1lbnQ6IGNsb25lZE5vZGUsXG4gICAgICAgICAgICBjb29yZGluYXRlczogZWxlbWVudENvb3JkaW5hdGVzLFxuICAgICAgICAgICAgcGFnZVhTY3JvbGw6IHBhZ2VYT2Zmc2V0LFxuICAgICAgICAgICAgcGFnZVlTY3JvbGw6IHBhZ2VZT2Zmc2V0LFxuICAgICAgICAgICAgYW5pbWF0aW9uU3RhcnRUaW1lOiBwZXJmb3JtYW5jZS5ub3coKSxcbiAgICAgICAgfSk7XG4gICAgICAgIGRvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQoY2xvbmVkTm9kZSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHN0YXJ0QW5pbWF0aW9uKCk6IHZvaWQge1xuICAgICAgICByZXF1ZXN0QW5pbWF0aW9uRnJhbWUoKHRpbWU6IG51bWJlcikgPT4gdGhpcy5hbmltYXRlRWxlbWVudCh0aW1lKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFuaW1hdGVFbGVtZW50KHRpbWU6IG51bWJlcik6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuY2xvbmVkRWxlbWVudHMubGVuZ3RoKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLm1vdmVFbGVtZW50cyh0aW1lKTtcbiAgICAgICAgdGhpcy5zdGFydEFuaW1hdGlvbigpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtb3ZlRWxlbWVudHModGltZTogbnVtYmVyKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2xvbmVkRWxlbWVudHMuZm9yRWFjaCgoaXRlbTogQ2xvbmVkRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgY29uc3QgdGltZUZyYWN0aW9uID0gKHRpbWUgLSBpdGVtLmFuaW1hdGlvblN0YXJ0VGltZSkgLyB0aGlzLmFuaW1hdGlvbkR1cmF0aW9uO1xuICAgICAgICAgICAgY29uc3QgcHJvZ3Jlc3MgPSBNYXRoLnBvdyh0aW1lRnJhY3Rpb24sIEVYUE9ORU5UKTtcbiAgICAgICAgICAgIGNvbnN0IHBlcmNlbnRhZ2VQcm9ncmVzcyA9IHByb2dyZXNzICogUEVSQ0VOVDtcblxuICAgICAgICAgICAgaWYgKHRoaXMuaXNUYXJnZXRJblZpZXdwb3J0KSB7XG4gICAgICAgICAgICAgICAgdGhpcy52YWxpZGF0ZVRhcmdldCgpO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBjb25zdCBzaWRlcyA9IFtESVJFQ1RJT05TLlRPUCwgRElSRUNUSU9OUy5MRUZULCBESU1FTlNJT05TLldJRFRILCBESU1FTlNJT05TLkhFSUdIVF07XG4gICAgICAgICAgICB0aGlzLnNldEFuaW1hdGlvbkRpc3RhbmNlKHNpZGVzLCBpdGVtLCBwZXJjZW50YWdlUHJvZ3Jlc3MpO1xuXG4gICAgICAgICAgICBpZiAocGVyY2VudGFnZVByb2dyZXNzIDw9IFBFUkNFTlQpIHtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHRoaXMuY2xvbmVkRWxlbWVudHMuc2hpZnQoKTtcbiAgICAgICAgICAgIGRvY3VtZW50LmJvZHkucmVtb3ZlQ2hpbGQoaXRlbS5lbGVtZW50KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNldEFuaW1hdGlvbkRpc3RhbmNlKHNpZGVzOiBzdHJpbmdbXSwgZWxlbWVudDogQ2xvbmVkRWxlbWVudCwgcGVyY2VudGFnZVByb2dyZXNzOiBudW1iZXIpOiB2b2lkIHtcbiAgICAgICAgc2lkZXMuZm9yRWFjaCgoc2lkZTogc3RyaW5nKSA9PiB7XG4gICAgICAgICAgICBsZXQgcGFnZU9mZnNldCA9IDA7XG4gICAgICAgICAgICBsZXQgaW5pdGlhbFBhZ2VPZmZzZXQgPSAwO1xuXG4gICAgICAgICAgICBpZiAoc2lkZSA9PT0gRElSRUNUSU9OUy5MRUZUIHx8IHNpZGUgPT09IERJUkVDVElPTlMuUklHSFQpIHtcbiAgICAgICAgICAgICAgICBpbml0aWFsUGFnZU9mZnNldCA9IGVsZW1lbnQucGFnZVhTY3JvbGw7XG4gICAgICAgICAgICAgICAgcGFnZU9mZnNldCA9IHBhZ2VYT2Zmc2V0O1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBpZiAoc2lkZSA9PT0gRElSRUNUSU9OUy5UT1AgfHwgc2lkZSA9PT0gRElSRUNUSU9OUy5CT1RUT00pIHtcbiAgICAgICAgICAgICAgICBpbml0aWFsUGFnZU9mZnNldCA9IGVsZW1lbnQucGFnZVlTY3JvbGw7XG4gICAgICAgICAgICAgICAgcGFnZU9mZnNldCA9IHBhZ2VZT2Zmc2V0O1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBjb25zdCBlbGVtZW50Q29vcmRpbmF0ZXMgPSBOdW1iZXIoZWxlbWVudC5jb29yZGluYXRlc1tzaWRlXSkgKyBpbml0aWFsUGFnZU9mZnNldDtcbiAgICAgICAgICAgIGNvbnN0IGRpc3RhbmNlID0gZWxlbWVudENvb3JkaW5hdGVzIC0gKE51bWJlcih0aGlzLnRhcmdldENvb3JkaW5hdGVzW3NpZGVdKSArIHBhZ2VPZmZzZXQpO1xuICAgICAgICAgICAgY29uc3QgcHJvZ3Jlc3NEaXN0YW5jZSA9IChkaXN0YW5jZSAqIHBlcmNlbnRhZ2VQcm9ncmVzcykgLyBQRVJDRU5UO1xuXG4gICAgICAgICAgICBjb25zdCBuZXdEaXN0YW5jZSA9IGVsZW1lbnRDb29yZGluYXRlcyAtIHByb2dyZXNzRGlzdGFuY2U7XG4gICAgICAgICAgICBlbGVtZW50LmVsZW1lbnQuc3R5bGVbc2lkZV0gPSBgJHtuZXdEaXN0YW5jZX1weGA7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdHJpZ2dlckNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RyaWdnZXItY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdGFyZ2V0Q2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgndGFyZ2V0LWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGVsZW1lbnRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdub2RlLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHdyYXBwZXJDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd3cmFwcGVyLWNsYXNzLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IGNsb25lTm9kZUNsYXNzTmFtZXMoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdjbG9uZS1ub2RlLWNsYXNzLW5hbWVzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBhbmltYXRpb25EdXJhdGlvblZhbHVlKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5nZXRBdHRyaWJ1dGUoJ2FuaW1hdGlvbi1kdXJhdGlvbicpKTtcbiAgICB9XG4gICAgLyogdHNsaW50OmRpc2FibGU6IG1heC1maWxlLWxpbmUtY291bnQgKi9cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=