(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["image-carousel"],{

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/image-carousel/image-carousel.ts":
/*!*************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/image-carousel/image-carousel.ts ***!
  \*************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ImageCarousel; });
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _simple_carousel_simple_carousel__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../simple-carousel/simple-carousel */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/simple-carousel/simple-carousel.ts");




var ImageCarousel = /*#__PURE__*/function (_SimpleCarousel) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(ImageCarousel, _SimpleCarousel);

  function ImageCarousel() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _SimpleCarousel.call.apply(_SimpleCarousel, [this].concat(args)) || this;
    _this.defaultImageUrl = void 0;
    _this.currentSlideImage = void 0;
    return _this;
  }

  var _proto = ImageCarousel.prototype;

  _proto.readyCallback = function readyCallback() {
    this.getCurrentSlideImage();
    this.setDefaultImageUrl();

    _SimpleCarousel.prototype.readyCallback.call(this);
  }
  /**
   * Performs sliding of slider items.
   */
  ;

  _proto.slide = function slide() {
    _SimpleCarousel.prototype.slide.call(this);

    this.getCurrentSlideImage();
    this.setDefaultImageUrl();
  }
  /**
   * Sets the new slide image with a new URL.
   * @param url An image URL.
   */
  ;

  /**
   * Sets the slide image with a default URL.
   */
  _proto.restoreDefaultImageUrl = function restoreDefaultImageUrl() {
    this.currentSlideImage.src = this.defaultImageUrl;
  };

  _proto.getCurrentSlideImage = function getCurrentSlideImage() {
    var currentSlide = this.getElementsByClassName(this.jsName + "__slide")[this.viewCurrentIndex];
    this.currentSlideImage = currentSlide.getElementsByTagName('img')[0];
  };

  _proto.setDefaultImageUrl = function setDefaultImageUrl() {
    this.defaultImageUrl = this.currentSlideImage.dataset.src || this.currentSlideImage.src;
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(ImageCarousel, [{
    key: "slideImageUrl",
    set: function set(url) {
      this.currentSlideImage.src = url;
    }
  }]);

  return ImageCarousel;
}(_simple_carousel_simple_carousel__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ }),

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvaW1hZ2UtY2Fyb3VzZWwvaW1hZ2UtY2Fyb3VzZWwudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3NpbXBsZS1jYXJvdXNlbC9zaW1wbGUtY2Fyb3VzZWwudHMiXSwibmFtZXMiOlsiSW1hZ2VDYXJvdXNlbCIsImRlZmF1bHRJbWFnZVVybCIsImN1cnJlbnRTbGlkZUltYWdlIiwicmVhZHlDYWxsYmFjayIsImdldEN1cnJlbnRTbGlkZUltYWdlIiwic2V0RGVmYXVsdEltYWdlVXJsIiwic2xpZGUiLCJyZXN0b3JlRGVmYXVsdEltYWdlVXJsIiwic3JjIiwiY3VycmVudFNsaWRlIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInZpZXdDdXJyZW50SW5kZXgiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImRhdGFzZXQiLCJ1cmwiLCJTaW1wbGVDYXJvdXNlbCIsInRyaWdnZXJQcmV2IiwidHJpZ2dlck5leHQiLCJzbGlkZXIiLCJzbGlkZXNDb3VudCIsInNsaWRlV2lkdGgiLCJkb3RzIiwidmlld3NDb3VudCIsImRvdFNlbGVjdG9yIiwiZG90Q3VycmVudE1vZGlmaWVyIiwiZnVsbFNsaWRlcldpZHRoIiwibmFtZSIsImxlbmd0aCIsInNsaWRlc1RvU2hvdyIsIkFycmF5IiwiZnJvbSIsImdldFZpZXdzQ291bnQiLCJtYXBFdmVudHMiLCJNYXRoIiwiY2VpbCIsInNsaWRlc1RvU2Nyb2xsIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25QcmV2Q2xpY2siLCJvbk5leHRDbGljayIsImZvckVhY2giLCJkb3QiLCJvbkRvdENsaWNrIiwicHJldmVudERlZmF1bHQiLCJsb2FkUHJldlZpZXdJbmRleCIsInVwZGF0ZUN1cnJlbnREb3QiLCJsb2FkTmV4dFZpZXdJbmRleCIsImxvYWRWaWV3SW5kZXhGcm9tRG90IiwidGFyZ2V0IiwiaW5kZXhPZiIsInNsaWRlc1RvU2xpZGUiLCJvZmZzZXQiLCJzdHlsZSIsInRyYW5zZm9ybSIsInF1ZXJ5U2VsZWN0b3IiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJwYXJzZUludCIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsYTs7Ozs7Ozs7Ozs7VUFDUEMsZTtVQUNBQyxpQjs7Ozs7O1NBRUFDLGEsR0FBVix5QkFBZ0M7QUFDNUIsU0FBS0Msb0JBQUw7QUFDQSxTQUFLQyxrQkFBTDs7QUFDQSw4QkFBTUYsYUFBTjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7U0FDSUcsSyxHQUFBLGlCQUFjO0FBQ1YsOEJBQU1BLEtBQU47O0FBQ0EsU0FBS0Ysb0JBQUw7QUFDQSxTQUFLQyxrQkFBTDtBQUNIO0FBRUQ7QUFDSjtBQUNBO0FBQ0E7OztBQUtJO0FBQ0o7QUFDQTtTQUNJRSxzQixHQUFBLGtDQUErQjtBQUMzQixTQUFLTCxpQkFBTCxDQUF1Qk0sR0FBdkIsR0FBNkIsS0FBS1AsZUFBbEM7QUFDSCxHOztTQUVTRyxvQixHQUFWLGdDQUF1QztBQUNuQyxRQUFNSyxZQUFZLEdBQWdCLEtBQUtDLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGNBQXFELEtBQUtDLGdCQUExRCxDQUFsQztBQUVBLFNBQUtWLGlCQUFMLEdBQXlCTyxZQUFZLENBQUNJLG9CQUFiLENBQWtDLEtBQWxDLEVBQXlDLENBQXpDLENBQXpCO0FBQ0gsRzs7U0FFU1Isa0IsR0FBViw4QkFBcUM7QUFDakMsU0FBS0osZUFBTCxHQUF1QixLQUFLQyxpQkFBTCxDQUF1QlksT0FBdkIsQ0FBK0JOLEdBQS9CLElBQXNDLEtBQUtOLGlC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b250ZW50IjpbImltcG9ydCBTaW1wbGVDYXJvdXNlbCBmcm9tICcuLi9zaW1wbGUtY2Fyb3VzZWwvc2ltcGxlLWNhcm91c2VsJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgSW1hZ2VDYXJvdXNlbCBleHRlbmRzIFNpbXBsZUNhcm91c2VsIHtcbiAgICBwcm90ZWN0ZWQgZGVmYXVsdEltYWdlVXJsOiBzdHJpbmc7XG4gICAgcHJvdGVjdGVkIGN1cnJlbnRTbGlkZUltYWdlOiBIVE1MSW1hZ2VFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZ2V0Q3VycmVudFNsaWRlSW1hZ2UoKTtcbiAgICAgICAgdGhpcy5zZXREZWZhdWx0SW1hZ2VVcmwoKTtcbiAgICAgICAgc3VwZXIucmVhZHlDYWxsYmFjaygpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHNsaWRpbmcgb2Ygc2xpZGVyIGl0ZW1zLlxuICAgICAqL1xuICAgIHNsaWRlKCk6IHZvaWQge1xuICAgICAgICBzdXBlci5zbGlkZSgpO1xuICAgICAgICB0aGlzLmdldEN1cnJlbnRTbGlkZUltYWdlKCk7XG4gICAgICAgIHRoaXMuc2V0RGVmYXVsdEltYWdlVXJsKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgbmV3IHNsaWRlIGltYWdlIHdpdGggYSBuZXcgVVJMLlxuICAgICAqIEBwYXJhbSB1cmwgQW4gaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBzbGlkZUltYWdlVXJsKHVybDogc3RyaW5nKSB7XG4gICAgICAgIHRoaXMuY3VycmVudFNsaWRlSW1hZ2Uuc3JjID0gdXJsO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHNsaWRlIGltYWdlIHdpdGggYSBkZWZhdWx0IFVSTC5cbiAgICAgKi9cbiAgICByZXN0b3JlRGVmYXVsdEltYWdlVXJsKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmN1cnJlbnRTbGlkZUltYWdlLnNyYyA9IHRoaXMuZGVmYXVsdEltYWdlVXJsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRDdXJyZW50U2xpZGVJbWFnZSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY3VycmVudFNsaWRlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NsaWRlYClbdGhpcy52aWV3Q3VycmVudEluZGV4XTtcblxuICAgICAgICB0aGlzLmN1cnJlbnRTbGlkZUltYWdlID0gY3VycmVudFNsaWRlLmdldEVsZW1lbnRzQnlUYWdOYW1lKCdpbWcnKVswXTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0RGVmYXVsdEltYWdlVXJsKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlZmF1bHRJbWFnZVVybCA9IHRoaXMuY3VycmVudFNsaWRlSW1hZ2UuZGF0YXNldC5zcmMgfHwgdGhpcy5jdXJyZW50U2xpZGVJbWFnZS5zcmM7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgU2ltcGxlQ2Fyb3VzZWwgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIGEgc2xpZGUgdG8gYSBwcmV2aW91cyBvbmUuXG4gICAgICovXG4gICAgdHJpZ2dlclByZXY6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgYSBzbGlkZSB0byBhIG5leHQgb25lLlxuICAgICAqL1xuICAgIHRyaWdnZXJOZXh0OiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFRoZSBjdXJyZW50IHNsaWRlci5cbiAgICAgKi9cbiAgICBzbGlkZXI6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIG51bWJlciBvZiB0aGUgc2xpZGVzLlxuICAgICAqL1xuICAgIHNsaWRlc0NvdW50OiBudW1iZXI7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgc2xpZGVyIHdpZHRoLlxuICAgICAqL1xuICAgIHNsaWRlV2lkdGg6IG51bWJlcjtcblxuICAgIC8qKlxuICAgICAqIFRociBkb3Qtc3dpdGNoIGVsZW1lbnRzIGJlbG93IHRoZSBzbGlkZXMuXG4gICAgICovXG4gICAgZG90czogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIFRoZSBudW1iZXIgb2Ygdmlld3MuXG4gICAgICovXG4gICAgdmlld3NDb3VudDogbnVtYmVyO1xuXG4gICAgLyoqXG4gICAgICogVGhlIGluZGV4IG9mIHRoZSBhY3RpdmUgc2xpZGUuXG4gICAgICovXG4gICAgdmlld0N1cnJlbnRJbmRleDogbnVtYmVyID0gMDtcblxuICAgIC8qKlxuICAgICAqIERvdCBlbGVtZW50IHNlbGVjdG9yLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IGRvdFNlbGVjdG9yOiBzdHJpbmc7XG5cbiAgICAvKipcbiAgICAgKiBEb3QgZWxlbWVudCBcImlzIGN1cnJlbnRcIiBtb2RpZmllci5cbiAgICAgKi9cbiAgICByZWFkb25seSBkb3RDdXJyZW50TW9kaWZpZXI6IHN0cmluZztcbiAgICBwcm90ZWN0ZWQgZnVsbFNsaWRlcldpZHRoOiBudW1iZXIgPSAxMDA7XG5cbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoKTtcblxuICAgICAgICB0aGlzLmRvdFNlbGVjdG9yID0gYCR7dGhpcy5qc05hbWV9X19kb3RgO1xuICAgICAgICB0aGlzLmRvdEN1cnJlbnRNb2RpZmllciA9IGAke3RoaXMubmFtZX1fX2RvdC0tY3VycmVudGA7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2xpZGVzQ291bnQgPSB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zbGlkZWApLmxlbmd0aDtcblxuICAgICAgICBpZiAodGhpcy5zbGlkZXNDb3VudCA8PSAxKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXJQcmV2ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3ByZXZgKVswXTtcbiAgICAgICAgdGhpcy50cmlnZ2VyTmV4dCA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19uZXh0YClbMF07XG4gICAgICAgIHRoaXMuc2xpZGVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NsaWRlcmApWzBdO1xuICAgICAgICB0aGlzLnNsaWRlV2lkdGggPSB0aGlzLmZ1bGxTbGlkZXJXaWR0aCAvIHRoaXMuc2xpZGVzVG9TaG93O1xuICAgICAgICB0aGlzLmRvdHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmRvdFNlbGVjdG9yKSk7XG4gICAgICAgIHRoaXMudmlld3NDb3VudCA9IHRoaXMuZ2V0Vmlld3NDb3VudCgpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgbnVtYmVyIG9mIHNsaWRlcy5cbiAgICAgKi9cbiAgICBnZXRWaWV3c0NvdW50KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBNYXRoLmNlaWwoKHRoaXMuc2xpZGVzQ291bnQgLSB0aGlzLnNsaWRlc1RvU2hvdykgLyB0aGlzLnNsaWRlc1RvU2Nyb2xsKSArIDE7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyUHJldi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25QcmV2Q2xpY2soZXZlbnQpKTtcbiAgICAgICAgdGhpcy50cmlnZ2VyTmV4dC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25OZXh0Q2xpY2soZXZlbnQpKTtcbiAgICAgICAgdGhpcy5kb3RzLmZvckVhY2goKGRvdDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGRvdC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25Eb3RDbGljayhldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25QcmV2Q2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMubG9hZFByZXZWaWV3SW5kZXgoKTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25OZXh0Q2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMubG9hZE5leHRWaWV3SW5kZXgoKTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25Eb3RDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5sb2FkVmlld0luZGV4RnJvbURvdCg8SFRNTEVsZW1lbnQ+ZXZlbnQudGFyZ2V0KTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyB0aGUgY3VycmVudCBzbGlkZSB0byB0aGUgcHJldmlvdXMgb25lLlxuICAgICAqL1xuICAgIGxvYWRQcmV2Vmlld0luZGV4KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdDdXJyZW50SW5kZXggLSAxO1xuXG4gICAgICAgIGlmICh0aGlzLnZpZXdDdXJyZW50SW5kZXggPCAwKSB7XG4gICAgICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdzQ291bnQgLSAxO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgdGhlIGN1cnJlbnQgc2xpZGUgdG8gdGhlIG5leHQgb25lLlxuICAgICAqL1xuICAgIGxvYWROZXh0Vmlld0luZGV4KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdDdXJyZW50SW5kZXggKyAxO1xuXG4gICAgICAgIGlmICh0aGlzLnZpZXdDdXJyZW50SW5kZXggPj0gdGhpcy52aWV3c0NvdW50KSB7XG4gICAgICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSAwO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgdG8gdGhlIHNsaWRlIGJhc2VkIG9uIHRoZSBwcm92aWRlZCBkb3QgZWxlbWVudC5cbiAgICAgKiBAcGFyYW0gZG90IEhUTUxFbGVtZW50IGNvcnJlc3BvbmRpbmcgdG8gdGhlIG5ldyB0YXJnZXQgc2xpZGUgdGhhdCBoYXMgdG8gYmUgbG9hZGVkLlxuICAgICAqL1xuICAgIGxvYWRWaWV3SW5kZXhGcm9tRG90KGRvdDogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gdGhpcy5kb3RzLmluZGV4T2YoZG90KTtcblxuICAgICAgICBpZiAodGhpcy52aWV3Q3VycmVudEluZGV4ID09PSAtMSkge1xuICAgICAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gMDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHNsaWRpbmcgb2Ygc2xpZGVyIGl0ZW1zLlxuICAgICAqL1xuICAgIHNsaWRlKCk6IHZvaWQge1xuICAgICAgICBsZXQgc2xpZGVzVG9TbGlkZSA9IHRoaXMuc2xpZGVzVG9TY3JvbGwgKiB0aGlzLnZpZXdDdXJyZW50SW5kZXg7XG5cbiAgICAgICAgaWYgKHRoaXMuc2xpZGVzVG9TY3JvbGwgKyBzbGlkZXNUb1NsaWRlID4gdGhpcy5zbGlkZXNDb3VudCkge1xuICAgICAgICAgICAgc2xpZGVzVG9TbGlkZSA9IHNsaWRlc1RvU2xpZGUgLSAodGhpcy5zbGlkZXNDb3VudCAtIHNsaWRlc1RvU2xpZGUpO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3Qgb2Zmc2V0ID0gLShzbGlkZXNUb1NsaWRlICogdGhpcy5zbGlkZVdpZHRoKTtcbiAgICAgICAgdGhpcy5zbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZVgoJHtvZmZzZXR9JSlgO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFRvZ2dsZXMgdGhlIGFjdGl2ZSBjbGFzcyBhbmQgdGhlIG1vZGlmaWVyIG9uIHRoZSBjdXJyZW50IGRvdC5cbiAgICAgKi9cbiAgICB1cGRhdGVDdXJyZW50RG90KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5kb3RzLmxlbmd0aCA9PT0gMCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5xdWVyeVNlbGVjdG9yKGAuJHt0aGlzLmRvdFNlbGVjdG9yfS4ke3RoaXMuZG90Q3VycmVudE1vZGlmaWVyfWApLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5kb3RDdXJyZW50TW9kaWZpZXIpO1xuXG4gICAgICAgIHRoaXMuZG90c1t0aGlzLnZpZXdDdXJyZW50SW5kZXhdLmNsYXNzTGlzdC5hZGQodGhpcy5kb3RDdXJyZW50TW9kaWZpZXIpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIG51bWJlciBvZiBzbGlkZXMgdG8gYmUgc2hvd24uXG4gICAgICovXG4gICAgZ2V0IHNsaWRlc1RvU2hvdygpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gcGFyc2VJbnQodGhpcy5nZXRBdHRyaWJ1dGUoJ3NsaWRlcy10by1zaG93JykgfHwgJzAnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBudW1iZXIgb2Ygc2xpZGVzIHRvIGJlIHNjcm9sbGVkIGJ5IGFuIGludGVyYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBzbGlkZXNUb1Njcm9sbCgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gcGFyc2VJbnQodGhpcy5nZXRBdHRyaWJ1dGUoJ3NsaWRlcy10by1zY3JvbGwnKSB8fCAnMCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=