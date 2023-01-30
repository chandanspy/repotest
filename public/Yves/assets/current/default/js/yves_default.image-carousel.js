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
/* harmony import */ var _simple_carousel_simple_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../simple-carousel/simple-carousel */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/simple-carousel/simple-carousel.ts");

class ImageCarousel extends _simple_carousel_simple_carousel__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.defaultImageUrl = void 0;
    this.currentSlideImage = void 0;
  }

  readyCallback() {
    this.getCurrentSlideImage();
    this.setDefaultImageUrl();
    super.readyCallback();
  }
  /**
   * Performs sliding of slider items.
   */


  slide() {
    super.slide();
    this.getCurrentSlideImage();
    this.setDefaultImageUrl();
  }
  /**
   * Sets the new slide image with a new URL.
   * @param url An image URL.
   */


  set slideImageUrl(url) {
    this.currentSlideImage.src = url;
  }
  /**
   * Sets the slide image with a default URL.
   */


  restoreDefaultImageUrl() {
    this.currentSlideImage.src = this.defaultImageUrl;
  }

  getCurrentSlideImage() {
    var currentSlide = this.getElementsByClassName(this.jsName + "__slide")[this.viewCurrentIndex];
    this.currentSlideImage = currentSlide.getElementsByTagName('img')[0];
  }

  setDefaultImageUrl() {
    this.defaultImageUrl = this.currentSlideImage.dataset.src || this.currentSlideImage.src;
  }

}

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
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class SimpleCarousel extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
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
  constructor() {
    super();
    this.triggerPrev = void 0;
    this.triggerNext = void 0;
    this.slider = void 0;
    this.slidesCount = void 0;
    this.slideWidth = void 0;
    this.dots = void 0;
    this.viewsCount = void 0;
    this.viewCurrentIndex = 0;
    this.dotSelector = void 0;
    this.dotCurrentModifier = void 0;
    this.fullSliderWidth = 100;
    this.dotSelector = this.jsName + "__dot";
    this.dotCurrentModifier = this.name + "__dot--current";
  }

  readyCallback() {
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


  getViewsCount() {
    return Math.ceil((this.slidesCount - this.slidesToShow) / this.slidesToScroll) + 1;
  }

  mapEvents() {
    this.triggerPrev.addEventListener('click', event => this.onPrevClick(event));
    this.triggerNext.addEventListener('click', event => this.onNextClick(event));
    this.dots.forEach(dot => {
      dot.addEventListener('click', event => this.onDotClick(event));
    });
  }

  onPrevClick(event) {
    event.preventDefault();
    this.loadPrevViewIndex();
    this.slide();
    this.updateCurrentDot();
  }

  onNextClick(event) {
    event.preventDefault();
    this.loadNextViewIndex();
    this.slide();
    this.updateCurrentDot();
  }

  onDotClick(event) {
    event.preventDefault();
    this.loadViewIndexFromDot(event.target);
    this.slide();
    this.updateCurrentDot();
  }
  /**
   * Switches the current slide to the previous one.
   */


  loadPrevViewIndex() {
    this.viewCurrentIndex = this.viewCurrentIndex - 1;

    if (this.viewCurrentIndex < 0) {
      this.viewCurrentIndex = this.viewsCount - 1;
    }
  }
  /**
   * Switches the current slide to the next one.
   */


  loadNextViewIndex() {
    this.viewCurrentIndex = this.viewCurrentIndex + 1;

    if (this.viewCurrentIndex >= this.viewsCount) {
      this.viewCurrentIndex = 0;
    }
  }
  /**
   * Switches to the slide based on the provided dot element.
   * @param dot HTMLElement corresponding to the new target slide that has to be loaded.
   */


  loadViewIndexFromDot(dot) {
    this.viewCurrentIndex = this.dots.indexOf(dot);

    if (this.viewCurrentIndex === -1) {
      this.viewCurrentIndex = 0;
    }
  }
  /**
   * Performs sliding of slider items.
   */


  slide() {
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


  updateCurrentDot() {
    if (this.dots.length === 0) {
      return;
    }

    this.querySelector("." + this.dotSelector + "." + this.dotCurrentModifier).classList.remove(this.dotCurrentModifier);
    this.dots[this.viewCurrentIndex].classList.add(this.dotCurrentModifier);
  }
  /**
   * Gets the number of slides to be shown.
   */


  get slidesToShow() {
    return parseInt(this.getAttribute('slides-to-show') || '0');
  }
  /**
   * Gets the number of slides to be scrolled by an interaction.
   */


  get slidesToScroll() {
    return parseInt(this.getAttribute('slides-to-scroll') || '0');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvaW1hZ2UtY2Fyb3VzZWwvaW1hZ2UtY2Fyb3VzZWwudHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvbW9sZWN1bGVzL3NpbXBsZS1jYXJvdXNlbC9zaW1wbGUtY2Fyb3VzZWwudHMiXSwibmFtZXMiOlsiSW1hZ2VDYXJvdXNlbCIsIlNpbXBsZUNhcm91c2VsIiwiZGVmYXVsdEltYWdlVXJsIiwiY3VycmVudFNsaWRlSW1hZ2UiLCJyZWFkeUNhbGxiYWNrIiwiZ2V0Q3VycmVudFNsaWRlSW1hZ2UiLCJzZXREZWZhdWx0SW1hZ2VVcmwiLCJzbGlkZSIsInNsaWRlSW1hZ2VVcmwiLCJ1cmwiLCJzcmMiLCJyZXN0b3JlRGVmYXVsdEltYWdlVXJsIiwiY3VycmVudFNsaWRlIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsInZpZXdDdXJyZW50SW5kZXgiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImRhdGFzZXQiLCJDb21wb25lbnQiLCJjb25zdHJ1Y3RvciIsInRyaWdnZXJQcmV2IiwidHJpZ2dlck5leHQiLCJzbGlkZXIiLCJzbGlkZXNDb3VudCIsInNsaWRlV2lkdGgiLCJkb3RzIiwidmlld3NDb3VudCIsImRvdFNlbGVjdG9yIiwiZG90Q3VycmVudE1vZGlmaWVyIiwiZnVsbFNsaWRlcldpZHRoIiwibmFtZSIsImxlbmd0aCIsInNsaWRlc1RvU2hvdyIsIkFycmF5IiwiZnJvbSIsImdldFZpZXdzQ291bnQiLCJtYXBFdmVudHMiLCJNYXRoIiwiY2VpbCIsInNsaWRlc1RvU2Nyb2xsIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25QcmV2Q2xpY2siLCJvbk5leHRDbGljayIsImZvckVhY2giLCJkb3QiLCJvbkRvdENsaWNrIiwicHJldmVudERlZmF1bHQiLCJsb2FkUHJldlZpZXdJbmRleCIsInVwZGF0ZUN1cnJlbnREb3QiLCJsb2FkTmV4dFZpZXdJbmRleCIsImxvYWRWaWV3SW5kZXhGcm9tRG90IiwidGFyZ2V0IiwiaW5kZXhPZiIsInNsaWRlc1RvU2xpZGUiLCJvZmZzZXQiLCJzdHlsZSIsInRyYW5zZm9ybSIsInF1ZXJ5U2VsZWN0b3IiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJhZGQiLCJwYXJzZUludCIsImdldEF0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsYUFBTixTQUE0QkMsd0VBQTVCLENBQTJDO0FBQUE7QUFBQTtBQUFBLFNBQzVDQyxlQUQ0QztBQUFBLFNBRTVDQyxpQkFGNEM7QUFBQTs7QUFJNUNDLGVBQWEsR0FBUztBQUM1QixTQUFLQyxvQkFBTDtBQUNBLFNBQUtDLGtCQUFMO0FBQ0EsVUFBTUYsYUFBTjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDSUcsT0FBSyxHQUFTO0FBQ1YsVUFBTUEsS0FBTjtBQUNBLFNBQUtGLG9CQUFMO0FBQ0EsU0FBS0Msa0JBQUw7QUFDSDtBQUVEO0FBQ0o7QUFDQTtBQUNBOzs7QUFDcUIsTUFBYkUsYUFBYSxDQUFDQyxHQUFELEVBQWM7QUFDM0IsU0FBS04saUJBQUwsQ0FBdUJPLEdBQXZCLEdBQTZCRCxHQUE3QjtBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDSUUsd0JBQXNCLEdBQVM7QUFDM0IsU0FBS1IsaUJBQUwsQ0FBdUJPLEdBQXZCLEdBQTZCLEtBQUtSLGVBQWxDO0FBQ0g7O0FBRVNHLHNCQUFvQixHQUFTO0FBQ25DLFFBQU1PLFlBQVksR0FBZ0IsS0FBS0Msc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsY0FBcUQsS0FBS0MsZ0JBQTFELENBQWxDO0FBRUEsU0FBS1osaUJBQUwsR0FBeUJTLFlB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QUFhLEdBQUcsS0FBS2YsY0FBTCxHQUFzQixLQUFLeEIsZ0JBQS9DOztBQUVBLFFBQUksS0FBS3dCLGNBQUwsR0FBc0JlLGFBQXRCLEdBQXNDLEtBQUsvQixXQUEvQyxFQUE0RDtBQUN4RCtCLG1CQUFhLEdBQUdBLGFBQWEsSUFBSSxLQUFLL0IsV0FBTCxHQUFtQitCLGFBQXZCLENBQTdCO0FBQ0g7O0FBRUQsUUFBTUMsTUFBTSxHQUFHLEVBQUVELGFBQWEsR0FBRyxLQUFLOUIsVUFBdkIsQ0FBZjtBQUNBLFNBQUtGLE1BQUwsQ0FBWWtDLEtBQVosQ0FBa0JDLFNBQWxCLG1CQUE0Q0YsTUFBNUM7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ0lOLGtCQUFnQixHQUFTO0FBQ3JCLFFBQUksS0FBS3hCLElBQUwsQ0FBVU0sTUFBVixLQUFxQixDQUF6QixFQUE0QjtBQUN4QjtBQUNIOztBQUVELFNBQUsyQixhQUFMLE9BQXVCLEtBQUsvQixXQUE1QixTQUEyQyxLQUFLQyxrQkFBaEQsRUFBc0UrQixTQUF0RSxDQUFnRkMsTUFBaEYsQ0FBdUYsS0FBS2hDLGtCQUE1RjtBQUVBLFNBQUtILElBQUwsQ0FBVSxLQUFLVixnQkFBZixFQUFpQzRDLFNBQWpDLENBQTJDRSxHQUEzQyxDQUErQyxLQUFLakMsa0JBQXBEO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNvQixNQUFaSSxZQUFZLEdBQVc7QUFDdkIsV0FBTzhCLFFBQVEsQ0FBQyxLQUFLQyxZQUFMLENBQWtCLGdCQUFsQixLQUF1QyxHQUF4QyxDQUFmO0FBQ0g7QUFFRDtBQUNKO0FBQ0E7OztBQUNzQixNQUFkeEIsY0FBYyxHQUFXO0FBQ3pCLFdBQU91QixRQUFRLENBQUMsS0FBS0MsWUFBTCxDQUFrQixrQkFBbEIsS0FBeUMsR0FBMUMsQ0FBZjtBQUNIOztBQXpMaUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5pbWFnZS1jYXJvdXNlbC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBTaW1wbGVDYXJvdXNlbCBmcm9tICcuLi9zaW1wbGUtY2Fyb3VzZWwvc2ltcGxlLWNhcm91c2VsJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgSW1hZ2VDYXJvdXNlbCBleHRlbmRzIFNpbXBsZUNhcm91c2VsIHtcbiAgICBwcm90ZWN0ZWQgZGVmYXVsdEltYWdlVXJsOiBzdHJpbmc7XG4gICAgcHJvdGVjdGVkIGN1cnJlbnRTbGlkZUltYWdlOiBIVE1MSW1hZ2VFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZ2V0Q3VycmVudFNsaWRlSW1hZ2UoKTtcbiAgICAgICAgdGhpcy5zZXREZWZhdWx0SW1hZ2VVcmwoKTtcbiAgICAgICAgc3VwZXIucmVhZHlDYWxsYmFjaygpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHNsaWRpbmcgb2Ygc2xpZGVyIGl0ZW1zLlxuICAgICAqL1xuICAgIHNsaWRlKCk6IHZvaWQge1xuICAgICAgICBzdXBlci5zbGlkZSgpO1xuICAgICAgICB0aGlzLmdldEN1cnJlbnRTbGlkZUltYWdlKCk7XG4gICAgICAgIHRoaXMuc2V0RGVmYXVsdEltYWdlVXJsKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU2V0cyB0aGUgbmV3IHNsaWRlIGltYWdlIHdpdGggYSBuZXcgVVJMLlxuICAgICAqIEBwYXJhbSB1cmwgQW4gaW1hZ2UgVVJMLlxuICAgICAqL1xuICAgIHNldCBzbGlkZUltYWdlVXJsKHVybDogc3RyaW5nKSB7XG4gICAgICAgIHRoaXMuY3VycmVudFNsaWRlSW1hZ2Uuc3JjID0gdXJsO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFNldHMgdGhlIHNsaWRlIGltYWdlIHdpdGggYSBkZWZhdWx0IFVSTC5cbiAgICAgKi9cbiAgICByZXN0b3JlRGVmYXVsdEltYWdlVXJsKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmN1cnJlbnRTbGlkZUltYWdlLnNyYyA9IHRoaXMuZGVmYXVsdEltYWdlVXJsO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXRDdXJyZW50U2xpZGVJbWFnZSgpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgY3VycmVudFNsaWRlID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NsaWRlYClbdGhpcy52aWV3Q3VycmVudEluZGV4XTtcblxuICAgICAgICB0aGlzLmN1cnJlbnRTbGlkZUltYWdlID0gY3VycmVudFNsaWRlLmdldEVsZW1lbnRzQnlUYWdOYW1lKCdpbWcnKVswXTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgc2V0RGVmYXVsdEltYWdlVXJsKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmRlZmF1bHRJbWFnZVVybCA9IHRoaXMuY3VycmVudFNsaWRlSW1hZ2UuZGF0YXNldC5zcmMgfHwgdGhpcy5jdXJyZW50U2xpZGVJbWFnZS5zcmM7XG4gICAgfVxufVxuIiwiaW1wb3J0IENvbXBvbmVudCBmcm9tICcuLi8uLi8uLi9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgU2ltcGxlQ2Fyb3VzZWwgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIGEgc2xpZGUgdG8gYSBwcmV2aW91cyBvbmUuXG4gICAgICovXG4gICAgdHJpZ2dlclByZXY6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgYSBzbGlkZSB0byBhIG5leHQgb25lLlxuICAgICAqL1xuICAgIHRyaWdnZXJOZXh0OiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFRoZSBjdXJyZW50IHNsaWRlci5cbiAgICAgKi9cbiAgICBzbGlkZXI6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIG51bWJlciBvZiB0aGUgc2xpZGVzLlxuICAgICAqL1xuICAgIHNsaWRlc0NvdW50OiBudW1iZXI7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgc2xpZGVyIHdpZHRoLlxuICAgICAqL1xuICAgIHNsaWRlV2lkdGg6IG51bWJlcjtcblxuICAgIC8qKlxuICAgICAqIFRociBkb3Qtc3dpdGNoIGVsZW1lbnRzIGJlbG93IHRoZSBzbGlkZXMuXG4gICAgICovXG4gICAgZG90czogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIFRoZSBudW1iZXIgb2Ygdmlld3MuXG4gICAgICovXG4gICAgdmlld3NDb3VudDogbnVtYmVyO1xuXG4gICAgLyoqXG4gICAgICogVGhlIGluZGV4IG9mIHRoZSBhY3RpdmUgc2xpZGUuXG4gICAgICovXG4gICAgdmlld0N1cnJlbnRJbmRleDogbnVtYmVyID0gMDtcblxuICAgIC8qKlxuICAgICAqIERvdCBlbGVtZW50IHNlbGVjdG9yLlxuICAgICAqL1xuICAgIHJlYWRvbmx5IGRvdFNlbGVjdG9yOiBzdHJpbmc7XG5cbiAgICAvKipcbiAgICAgKiBEb3QgZWxlbWVudCBcImlzIGN1cnJlbnRcIiBtb2RpZmllci5cbiAgICAgKi9cbiAgICByZWFkb25seSBkb3RDdXJyZW50TW9kaWZpZXI6IHN0cmluZztcbiAgICBwcm90ZWN0ZWQgZnVsbFNsaWRlcldpZHRoOiBudW1iZXIgPSAxMDA7XG5cbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoKTtcblxuICAgICAgICB0aGlzLmRvdFNlbGVjdG9yID0gYCR7dGhpcy5qc05hbWV9X19kb3RgO1xuICAgICAgICB0aGlzLmRvdEN1cnJlbnRNb2RpZmllciA9IGAke3RoaXMubmFtZX1fX2RvdC0tY3VycmVudGA7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2xpZGVzQ291bnQgPSB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zbGlkZWApLmxlbmd0aDtcblxuICAgICAgICBpZiAodGhpcy5zbGlkZXNDb3VudCA8PSAxKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLnRyaWdnZXJQcmV2ID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3ByZXZgKVswXTtcbiAgICAgICAgdGhpcy50cmlnZ2VyTmV4dCA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19uZXh0YClbMF07XG4gICAgICAgIHRoaXMuc2xpZGVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3NsaWRlcmApWzBdO1xuICAgICAgICB0aGlzLnNsaWRlV2lkdGggPSB0aGlzLmZ1bGxTbGlkZXJXaWR0aCAvIHRoaXMuc2xpZGVzVG9TaG93O1xuICAgICAgICB0aGlzLmRvdHMgPSA8SFRNTEVsZW1lbnRbXT5BcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmRvdFNlbGVjdG9yKSk7XG4gICAgICAgIHRoaXMudmlld3NDb3VudCA9IHRoaXMuZ2V0Vmlld3NDb3VudCgpO1xuXG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgbnVtYmVyIG9mIHNsaWRlcy5cbiAgICAgKi9cbiAgICBnZXRWaWV3c0NvdW50KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBNYXRoLmNlaWwoKHRoaXMuc2xpZGVzQ291bnQgLSB0aGlzLnNsaWRlc1RvU2hvdykgLyB0aGlzLnNsaWRlc1RvU2Nyb2xsKSArIDE7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyUHJldi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25QcmV2Q2xpY2soZXZlbnQpKTtcbiAgICAgICAgdGhpcy50cmlnZ2VyTmV4dC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25OZXh0Q2xpY2soZXZlbnQpKTtcbiAgICAgICAgdGhpcy5kb3RzLmZvckVhY2goKGRvdDogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGRvdC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25Eb3RDbGljayhldmVudCkpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25QcmV2Q2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMubG9hZFByZXZWaWV3SW5kZXgoKTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25OZXh0Q2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMubG9hZE5leHRWaWV3SW5kZXgoKTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25Eb3RDbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5sb2FkVmlld0luZGV4RnJvbURvdCg8SFRNTEVsZW1lbnQ+ZXZlbnQudGFyZ2V0KTtcbiAgICAgICAgdGhpcy5zbGlkZSgpO1xuICAgICAgICB0aGlzLnVwZGF0ZUN1cnJlbnREb3QoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyB0aGUgY3VycmVudCBzbGlkZSB0byB0aGUgcHJldmlvdXMgb25lLlxuICAgICAqL1xuICAgIGxvYWRQcmV2Vmlld0luZGV4KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdDdXJyZW50SW5kZXggLSAxO1xuXG4gICAgICAgIGlmICh0aGlzLnZpZXdDdXJyZW50SW5kZXggPCAwKSB7XG4gICAgICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdzQ291bnQgLSAxO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgdGhlIGN1cnJlbnQgc2xpZGUgdG8gdGhlIG5leHQgb25lLlxuICAgICAqL1xuICAgIGxvYWROZXh0Vmlld0luZGV4KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSB0aGlzLnZpZXdDdXJyZW50SW5kZXggKyAxO1xuXG4gICAgICAgIGlmICh0aGlzLnZpZXdDdXJyZW50SW5kZXggPj0gdGhpcy52aWV3c0NvdW50KSB7XG4gICAgICAgICAgICB0aGlzLnZpZXdDdXJyZW50SW5kZXggPSAwO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgdG8gdGhlIHNsaWRlIGJhc2VkIG9uIHRoZSBwcm92aWRlZCBkb3QgZWxlbWVudC5cbiAgICAgKiBAcGFyYW0gZG90IEhUTUxFbGVtZW50IGNvcnJlc3BvbmRpbmcgdG8gdGhlIG5ldyB0YXJnZXQgc2xpZGUgdGhhdCBoYXMgdG8gYmUgbG9hZGVkLlxuICAgICAqL1xuICAgIGxvYWRWaWV3SW5kZXhGcm9tRG90KGRvdDogSFRNTEVsZW1lbnQpOiB2b2lkIHtcbiAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gdGhpcy5kb3RzLmluZGV4T2YoZG90KTtcblxuICAgICAgICBpZiAodGhpcy52aWV3Q3VycmVudEluZGV4ID09PSAtMSkge1xuICAgICAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gMDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFBlcmZvcm1zIHNsaWRpbmcgb2Ygc2xpZGVyIGl0ZW1zLlxuICAgICAqL1xuICAgIHNsaWRlKCk6IHZvaWQge1xuICAgICAgICBsZXQgc2xpZGVzVG9TbGlkZSA9IHRoaXMuc2xpZGVzVG9TY3JvbGwgKiB0aGlzLnZpZXdDdXJyZW50SW5kZXg7XG5cbiAgICAgICAgaWYgKHRoaXMuc2xpZGVzVG9TY3JvbGwgKyBzbGlkZXNUb1NsaWRlID4gdGhpcy5zbGlkZXNDb3VudCkge1xuICAgICAgICAgICAgc2xpZGVzVG9TbGlkZSA9IHNsaWRlc1RvU2xpZGUgLSAodGhpcy5zbGlkZXNDb3VudCAtIHNsaWRlc1RvU2xpZGUpO1xuICAgICAgICB9XG5cbiAgICAgICAgY29uc3Qgb2Zmc2V0ID0gLShzbGlkZXNUb1NsaWRlICogdGhpcy5zbGlkZVdpZHRoKTtcbiAgICAgICAgdGhpcy5zbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZVgoJHtvZmZzZXR9JSlgO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFRvZ2dsZXMgdGhlIGFjdGl2ZSBjbGFzcyBhbmQgdGhlIG1vZGlmaWVyIG9uIHRoZSBjdXJyZW50IGRvdC5cbiAgICAgKi9cbiAgICB1cGRhdGVDdXJyZW50RG90KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5kb3RzLmxlbmd0aCA9PT0gMCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5xdWVyeVNlbGVjdG9yKGAuJHt0aGlzLmRvdFNlbGVjdG9yfS4ke3RoaXMuZG90Q3VycmVudE1vZGlmaWVyfWApLmNsYXNzTGlzdC5yZW1vdmUodGhpcy5kb3RDdXJyZW50TW9kaWZpZXIpO1xuXG4gICAgICAgIHRoaXMuZG90c1t0aGlzLnZpZXdDdXJyZW50SW5kZXhdLmNsYXNzTGlzdC5hZGQodGhpcy5kb3RDdXJyZW50TW9kaWZpZXIpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIG51bWJlciBvZiBzbGlkZXMgdG8gYmUgc2hvd24uXG4gICAgICovXG4gICAgZ2V0IHNsaWRlc1RvU2hvdygpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gcGFyc2VJbnQodGhpcy5nZXRBdHRyaWJ1dGUoJ3NsaWRlcy10by1zaG93JykgfHwgJzAnKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBudW1iZXIgb2Ygc2xpZGVzIHRvIGJlIHNjcm9sbGVkIGJ5IGFuIGludGVyYWN0aW9uLlxuICAgICAqL1xuICAgIGdldCBzbGlkZXNUb1Njcm9sbCgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gcGFyc2VJbnQodGhpcy5nZXRBdHRyaWJ1dGUoJ3NsaWRlcy10by1zY3JvbGwnKSB8fCAnMCcpO1xuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=