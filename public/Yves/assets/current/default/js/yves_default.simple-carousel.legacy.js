(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["simple-carousel"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/simple-carousel/simple-carousel.ts":
/*!***************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/simple-carousel/simple-carousel.ts ***!
  \***************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SimpleCarousel; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var SimpleCarousel = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(SimpleCarousel, _Component);

  /**
   * Switches a slide to a previous one.
   */

  /**
   * Switches a slide to a next one.
   */

  /**
   * The current slider.
   */

  /**
   * The number of the slides.
   */

  /**
   * The slider width.
   */

  /**
   * Thr dot-switch elements below the slides.
   */

  /**
   * The number of views.
   */

  /**
   * The index of the active slide.
   */

  /**
   * Dot element selector.
   */

  /**
   * Dot element "is current" modifier.
   */
  function SimpleCarousel() {
    var _this;

    _this = _Component.call(this) || this;
    _this.triggerPrev = void 0;
    _this.triggerNext = void 0;
    _this.slider = void 0;
    _this.slidesCount = void 0;
    _this.slideWidth = void 0;
    _this.dots = void 0;
    _this.viewsCount = void 0;
    _this.viewCurrentIndex = 0;
    _this.dotSelector = void 0;
    _this.dotCurrentModifier = void 0;
    _this.fullSliderWidth = 100;
    _this.dotSelector = _this.jsName + "__dot";
    _this.dotCurrentModifier = _this.name + "__dot--current";
    return _this;
  }

  var _proto = SimpleCarousel.prototype;

  _proto.readyCallback = function readyCallback() {
    this.slidesCount = this.getElementsByClassName(this.jsName + "__slide").length;

    if (this.slidesCount <= 1) {
      return;
    }

    this.triggerPrev = this.getElementsByClassName(this.jsName + "__prev")[0];
    this.triggerNext = this.getElementsByClassName(this.jsName + "__next")[0];
    this.slider = this.getElementsByClassName(this.jsName + "__slider")[0];
    this.slideWidth = this.fullSliderWidth / this.slidesToShow;
    this.dots = Array.from(this.getElementsByClassName(this.dotSelector));
    this.viewsCount = this.getViewsCount();
    this.mapEvents();
  }
  /**
   * Gets the number of slides.
   */
  ;

  _proto.getViewsCount = function getViewsCount() {
    return Math.ceil((this.slidesCount - this.slidesToShow) / this.slidesToScroll) + 1;
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.triggerPrev.addEventListener('click', function (event) {
      return _this2.onPrevClick(event);
    });
    this.triggerNext.addEventListener('click', function (event) {
      return _this2.onNextClick(event);
    });
    this.dots.forEach(function (dot) {
      dot.addEventListener('click', function (event) {
        return _this2.onDotClick(event);
      });
    });
  };

  _proto.onPrevClick = function onPrevClick(event) {
    event.preventDefault();
    this.loadPrevViewIndex();
    this.slide();
    this.updateCurrentDot();
  };

  _proto.onNextClick = function onNextClick(event) {
    event.preventDefault();
    this.loadNextViewIndex();
    this.slide();
    this.updateCurrentDot();
  };

  _proto.onDotClick = function onDotClick(event) {
    event.preventDefault();
    this.loadViewIndexFromDot(event.target);
    this.slide();
    this.updateCurrentDot();
  }
  /**
   * Switches the current slide to the previous one.
   */
  ;

  _proto.loadPrevViewIndex = function loadPrevViewIndex() {
    this.viewCurrentIndex = this.viewCurrentIndex - 1;

    if (this.viewCurrentIndex < 0) {
      this.viewCurrentIndex = this.viewsCount - 1;
    }
  }
  /**
   * Switches the current slide to the next one.
   */
  ;

  _proto.loadNextViewIndex = function loadNextViewIndex() {
    this.viewCurrentIndex = this.viewCurrentIndex + 1;

    if (this.viewCurrentIndex >= this.viewsCount) {
      this.viewCurrentIndex = 0;
    }
  }
  /**
   * Switches to the slide based on the provided dot element.
   * @param dot HTMLElement corresponding to the new target slide that has to be loaded.
   */
  ;

  _proto.loadViewIndexFromDot = function loadViewIndexFromDot(dot) {
    this.viewCurrentIndex = this.dots.indexOf(dot);

    if (this.viewCurrentIndex === -1) {
      this.viewCurrentIndex = 0;
    }
  }
  /**
   * Performs sliding of slider items.
   */
  ;

  _proto.slide = function slide() {
    var slidesToSlide = this.slidesToScroll * this.viewCurrentIndex;

    if (this.slidesToScroll + slidesToSlide > this.slidesCount) {
      slidesToSlide = slidesToSlide - (this.slidesCount - slidesToSlide);
    }

    var offset = -(slidesToSlide * this.slideWidth);
    this.slider.style.transform = "translateX(" + offset + "%)";
  }
  /**
   * Toggles the active class and the modifier on the current dot.
   */
  ;

  _proto.updateCurrentDot = function updateCurrentDot() {
    if (this.dots.length === 0) {
      return;
    }

    this.querySelector("." + this.dotSelector + "." + this.dotCurrentModifier).classList.remove(this.dotCurrentModifier);
    this.dots[this.viewCurrentIndex].classList.add(this.dotCurrentModifier);
  }
  /**
   * Gets the number of slides to be shown.
   */
  ;

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(SimpleCarousel, [{
    key: "slidesToShow",
    get: function get() {
      return parseInt(this.getAttribute('slides-to-show') || '0');
    }
    /**
     * Gets the number of slides to be scrolled by an interaction.
     */

  }, {
    key: "slidesToScroll",
    get: function get() {
      return parseInt(this.getAttribute('slides-to-scroll') || '0');
    }
  }]);

  return SimpleCarousel;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc2ltcGxlLWNhcm91c2VsL3NpbXBsZS1jYXJvdXNlbC50cyJdLCJuYW1lcyI6WyJTaW1wbGVDYXJvdXNlbCIsInRyaWdnZXJQcmV2IiwidHJpZ2dlck5leHQiLCJzbGlkZXIiLCJzbGlkZXNDb3VudCIsInNsaWRlV2lkdGgiLCJkb3RzIiwidmlld3NDb3VudCIsInZpZXdDdXJyZW50SW5kZXgiLCJkb3RTZWxlY3RvciIsImRvdEN1cnJlbnRNb2RpZmllciIsImZ1bGxTbGlkZXJXaWR0aCIsImpzTmFtZSIsIm5hbWUiLCJyZWFkeUNhbGxiYWNrIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImxlbmd0aCIsInNsaWRlc1RvU2hvdyIsIkFycmF5IiwiZnJvbSIsImdldFZpZXdzQ291bnQiLCJtYXBFdmVudHMiLCJNYXRoIiwiY2VpbCIsInNsaWRlc1RvU2Nyb2xsIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25QcmV2Q2xpY2siLCJvbk5leHRDbGljayIsImZvckVhY2giLCJkb3QiLCJvbkRvdENsaWNrIiwicHJldmVudERlZmF1bHQiLCJsb2FkUHJldlZpZXdJbmRleCIsInNsaWRlIiwidXBkYXRlQ3VycmVudERvdCIsImxvYWROZXh0Vmlld0luZGV4IiwibG9hZFZpZXdJbmRleEZyb21Eb3QiLCJ0YXJnZXQiLCJpbmRleE9mIiwic2xpZGVzVG9TbGlkZSIsIm9mZnNldCIsInN0eWxlIiwidHJhbnNmb3JtIiwicXVlcnlTZWxlY3RvciIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFkZCIsInBhcnNlSW50IiwiZ2V0QXR0cmlidXRlIiwiQ29tcG9uZW50Il0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0lBRXFCQSxjOzs7QUFDakI7QUFDSjtB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QSxhQUFhLElBQUksS0FBS3BDLFdBQUwsR0FBbUJvQyxhQUF2QixDQUE3QjtBQUNIOztBQUVELFFBQU1DLE1BQU0sR0FBRyxFQUFFRCxhQUFhLEdBQUcsS0FBS25DLFVBQXZCLENBQWY7QUFDQSxTQUFLRixNQUFMLENBQVl1QyxLQUFaLENBQWtCQyxTQUFsQixtQkFBNENGLE1BQTVDO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztTQUNJTixnQixHQUFBLDRCQUF5QjtBQUNyQixRQUFJLEtBQUs3QixJQUFMLENBQVVVLE1BQVYsS0FBcUIsQ0FBekIsRUFBNEI7QUFDeEI7QUFDSDs7QUFFRCxTQUFLNEIsYUFBTCxPQUF1QixLQUFLbkMsV0FBNUIsU0FBMkMsS0FBS0Msa0JBQWhELEVBQXNFbUMsU0FBdEUsQ0FBZ0ZDLE1BQWhGLENBQXVGLEtBQUtwQyxrQkFBNUY7QUFFQSxTQUFLSixJQUFMLENBQVUsS0FBS0UsZ0JBQWYsRUFBaUNxQyxTQUFqQyxDQUEyQ0UsR0FBM0MsQ0FBK0MsS0FBS3JDLGtCQUFwRDtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7OztTQUNJLGVBQTJCO0FBQ3ZCLGFBQU9zQyxRQUFRLENBQUMsS0FBS0MsWUFBTCxDQUFrQixnQkFBbEIsS0FBdUMsR0FBeEMsQ0FBZjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7O1NBQ0ksZUFBNkI7QUFDekIsYUFBT0QsUUFBUSxDQUFDLEtBQUtDLFlBQUwsQ0FBa0Isa0JBQWxCLEtBQXlDLEdBQTFDLENBQWY7QUFDSDs7OztFQXpMdUNDLHlEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNpbXBsZS1jYXJvdXNlbC5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTaW1wbGVDYXJvdXNlbCBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgYSBzbGlkZSB0byBhIHByZXZpb3VzIG9uZS5cbiAgICAgKi9cbiAgICB0cmlnZ2VyUHJldjogSFRNTEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyBhIHNsaWRlIHRvIGEgbmV4dCBvbmUuXG4gICAgICovXG4gICAgdHJpZ2dlck5leHQ6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIGN1cnJlbnQgc2xpZGVyLlxuICAgICAqL1xuICAgIHNsaWRlcjogSFRNTEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgbnVtYmVyIG9mIHRoZSBzbGlkZXMuXG4gICAgICovXG4gICAgc2xpZGVzQ291bnQ6IG51bWJlcjtcblxuICAgIC8qKlxuICAgICAqIFRoZSBzbGlkZXIgd2lkdGguXG4gICAgICovXG4gICAgc2xpZGVXaWR0aDogbnVtYmVyO1xuXG4gICAgLyoqXG4gICAgICogVGhyIGRvdC1zd2l0Y2ggZWxlbWVudHMgYmVsb3cgdGhlIHNsaWRlcy5cbiAgICAgKi9cbiAgICBkb3RzOiBIVE1MRWxlbWVudFtdO1xuXG4gICAgLyoqXG4gICAgICogVGhlIG51bWJlciBvZiB2aWV3cy5cbiAgICAgKi9cbiAgICB2aWV3c0NvdW50OiBudW1iZXI7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgaW5kZXggb2YgdGhlIGFjdGl2ZSBzbGlkZS5cbiAgICAgKi9cbiAgICB2aWV3Q3VycmVudEluZGV4OiBudW1iZXIgPSAwO1xuXG4gICAgLyoqXG4gICAgICogRG90IGVsZW1lbnQgc2VsZWN0b3IuXG4gICAgICovXG4gICAgcmVhZG9ubHkgZG90U2VsZWN0b3I6IHN0cmluZztcblxuICAgIC8qKlxuICAgICAqIERvdCBlbGVtZW50IFwiaXMgY3VycmVudFwiIG1vZGlmaWVyLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IGRvdEN1cnJlbnRNb2RpZmllcjogc3RyaW5nO1xuICAgIHByb3RlY3RlZCBmdWxsU2xpZGVyV2lkdGg6IG51bWJlciA9IDEwMDtcblxuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICBzdXBlcigpO1xuXG4gICAgICAgIHRoaXMuZG90U2VsZWN0b3IgPSBgJHt0aGlzLmpzTmFtZX1fX2RvdGA7XG4gICAgICAgIHRoaXMuZG90Q3VycmVudE1vZGlmaWVyID0gYCR7dGhpcy5uYW1lfV9fZG90LS1jdXJyZW50YDtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zbGlkZXNDb3VudCA9IHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NsaWRlYCkubGVuZ3RoO1xuXG4gICAgICAgIGlmICh0aGlzLnNsaWRlc0NvdW50IDw9IDEpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMudHJpZ2dlclByZXYgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcHJldmApWzBdO1xuICAgICAgICB0aGlzLnRyaWdnZXJOZXh0ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX25leHRgKVswXTtcbiAgICAgICAgdGhpcy5zbGlkZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2xpZGVyYClbMF07XG4gICAgICAgIHRoaXMuc2xpZGVXaWR0aCA9IHRoaXMuZnVsbFNsaWRlcldpZHRoIC8gdGhpcy5zbGlkZXNUb1Nob3c7XG4gICAgICAgIHRoaXMuZG90cyA9IDxIVE1MRWxlbWVudFtdPkFycmF5LmZyb20odGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuZG90U2VsZWN0b3IpKTtcbiAgICAgICAgdGhpcy52aWV3c0NvdW50ID0gdGhpcy5nZXRWaWV3c0NvdW50KCk7XG5cbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBudW1iZXIgb2Ygc2xpZGVzLlxuICAgICAqL1xuICAgIGdldFZpZXdzQ291bnQoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE1hdGguY2VpbCgodGhpcy5zbGlkZXNDb3VudCAtIHRoaXMuc2xpZGVzVG9TaG93KSAvIHRoaXMuc2xpZGVzVG9TY3JvbGwpICsgMTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRyaWdnZXJQcmV2LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblByZXZDbGljayhldmVudCkpO1xuICAgICAgICB0aGlzLnRyaWdnZXJOZXh0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbk5leHRDbGljayhldmVudCkpO1xuICAgICAgICB0aGlzLmRvdHMuZm9yRWFjaCgoZG90OiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgZG90LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vbkRvdENsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblByZXZDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5sb2FkUHJldlZpZXdJbmRleCgpO1xuICAgICAgICB0aGlzLnNsaWRlKCk7XG4gICAgICAgIHRoaXMudXBkYXRlQ3VycmVudERvdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbk5leHRDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5sb2FkTmV4dFZpZXdJbmRleCgpO1xuICAgICAgICB0aGlzLnNsaWRlKCk7XG4gICAgICAgIHRoaXMudXBkYXRlQ3VycmVudERvdCgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkRvdENsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmxvYWRWaWV3SW5kZXhGcm9tRG90KDxIVE1MRWxlbWVudD5ldmVudC50YXJnZXQpO1xuICAgICAgICB0aGlzLnNsaWRlKCk7XG4gICAgICAgIHRoaXMudXBkYXRlQ3VycmVudERvdCgpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIHRoZSBjdXJyZW50IHNsaWRlIHRvIHRoZSBwcmV2aW91cyBvbmUuXG4gICAgICovXG4gICAgbG9hZFByZXZWaWV3SW5kZXgoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IHRoaXMudmlld0N1cnJlbnRJbmRleCAtIDE7XG5cbiAgICAgICAgaWYgKHRoaXMudmlld0N1cnJlbnRJbmRleCA8IDApIHtcbiAgICAgICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IHRoaXMudmlld3NDb3VudCAtIDE7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyB0aGUgY3VycmVudCBzbGlkZSB0byB0aGUgbmV4dCBvbmUuXG4gICAgICovXG4gICAgbG9hZE5leHRWaWV3SW5kZXgoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IHRoaXMudmlld0N1cnJlbnRJbmRleCArIDE7XG5cbiAgICAgICAgaWYgKHRoaXMudmlld0N1cnJlbnRJbmRleCA+PSB0aGlzLnZpZXdzQ291bnQpIHtcbiAgICAgICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IDA7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyB0byB0aGUgc2xpZGUgYmFzZWQgb24gdGhlIHByb3ZpZGVkIGRvdCBlbGVtZW50LlxuICAgICAqIEBwYXJhbSBkb3QgSFRNTEVsZW1lbnQgY29ycmVzcG9uZGluZyB0byB0aGUgbmV3IHRhcmdldCBzbGlkZSB0aGF0IGhhcyB0byBiZSBsb2FkZWQuXG4gICAgICovXG4gICAgbG9hZFZpZXdJbmRleEZyb21Eb3QoZG90OiBIVE1MRWxlbWVudCk6IHZvaWQge1xuICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLmRvdHMuaW5kZXhPZihkb3QpO1xuXG4gICAgICAgIGlmICh0aGlzLnZpZXdDdXJyZW50SW5kZXggPT09IC0xKSB7XG4gICAgICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSAwO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogUGVyZm9ybXMgc2xpZGluZyBvZiBzbGlkZXIgaXRlbXMuXG4gICAgICovXG4gICAgc2xpZGUoKTogdm9pZCB7XG4gICAgICAgIGxldCBzbGlkZXNUb1NsaWRlID0gdGhpcy5zbGlkZXNUb1Njcm9sbCAqIHRoaXMudmlld0N1cnJlbnRJbmRleDtcblxuICAgICAgICBpZiAodGhpcy5zbGlkZXNUb1Njcm9sbCArIHNsaWRlc1RvU2xpZGUgPiB0aGlzLnNsaWRlc0NvdW50KSB7XG4gICAgICAgICAgICBzbGlkZXNUb1NsaWRlID0gc2xpZGVzVG9TbGlkZSAtICh0aGlzLnNsaWRlc0NvdW50IC0gc2xpZGVzVG9TbGlkZSk7XG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBvZmZzZXQgPSAtKHNsaWRlc1RvU2xpZGUgKiB0aGlzLnNsaWRlV2lkdGgpO1xuICAgICAgICB0aGlzLnNsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRlWCgke29mZnNldH0lKWA7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogVG9nZ2xlcyB0aGUgYWN0aXZlIGNsYXNzIGFuZCB0aGUgbW9kaWZpZXIgb24gdGhlIGN1cnJlbnQgZG90LlxuICAgICAqL1xuICAgIHVwZGF0ZUN1cnJlbnREb3QoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmRvdHMubGVuZ3RoID09PSAwKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoYC4ke3RoaXMuZG90U2VsZWN0b3J9LiR7dGhpcy5kb3RDdXJyZW50TW9kaWZpZXJ9YCkuY2xhc3NMaXN0LnJlbW92ZSh0aGlzLmRvdEN1cnJlbnRNb2RpZmllcik7XG5cbiAgICAgICAgdGhpcy5kb3RzW3RoaXMudmlld0N1cnJlbnRJbmRleF0uY2xhc3NMaXN0LmFkZCh0aGlzLmRvdEN1cnJlbnRNb2RpZmllcik7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgbnVtYmVyIG9mIHNsaWRlcyB0byBiZSBzaG93bi5cbiAgICAgKi9cbiAgICBnZXQgc2xpZGVzVG9TaG93KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBwYXJzZUludCh0aGlzLmdldEF0dHJpYnV0ZSgnc2xpZGVzLXRvLXNob3cnKSB8fCAnMCcpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIG51bWJlciBvZiBzbGlkZXMgdG8gYmUgc2Nyb2xsZWQgYnkgYW4gaW50ZXJhY3Rpb24uXG4gICAgICovXG4gICAgZ2V0IHNsaWRlc1RvU2Nyb2xsKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBwYXJzZUludCh0aGlzLmdldEF0dHJpYnV0ZSgnc2xpZGVzLXRvLXNjcm9sbCcpIHx8ICcwJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==