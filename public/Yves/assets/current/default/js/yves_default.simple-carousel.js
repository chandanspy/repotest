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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3Nob3AtdWkvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvc2ltcGxlLWNhcm91c2VsL3NpbXBsZS1jYXJvdXNlbC50cyJdLCJuYW1lcyI6WyJTaW1wbGVDYXJvdXNlbCIsIkNvbXBvbmVudCIsImNvbnN0cnVjdG9yIiwidHJpZ2dlclByZXYiLCJ0cmlnZ2VyTmV4dCIsInNsaWRlciIsInNsaWRlc0NvdW50Iiwic2xpZGVXaWR0aCIsImRvdHMiLCJ2aWV3c0NvdW50Iiwidmlld0N1cnJlbnRJbmRleCIsImRvdFNlbGVjdG9yIiwiZG90Q3VycmVudE1vZGlmaWVyIiwiZnVsbFNsaWRlcldpZHRoIiwianNOYW1lIiwibmFtZSIsInJlYWR5Q2FsbGJhY2siLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwibGVuZ3RoIiwic2xpZGVzVG9TaG93IiwiQXJyYXkiLCJmcm9tIiwiZ2V0Vmlld3NDb3VudCIsIm1hcEV2ZW50cyIsIk1hdGgiLCJjZWlsIiwic2xpZGVzVG9TY3JvbGwiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJvblByZXZDbGljayIsIm9uTmV4dENsaWNrIiwiZm9yRWFjaCIsImRvdCIsIm9uRG90Q2xpY2siLCJwcmV2ZW50RGVmYXVsdCIsImxvYWRQcmV2Vmlld0luZGV4Iiwic2xpZGUiLCJ1cGRhdGVDdXJyZW50RG90IiwibG9hZE5leHRWaWV3SW5kZXgiLCJsb2FkVmlld0luZGV4RnJvbURvdCIsInRhcmdldCIsImluZGV4T2YiLCJzbGlkZXNUb1NsaWRlIiwib2Zmc2V0Iiwic3R5bGUiLCJ0cmFuc2Zvcm0iLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIiwicGFyc2VJbnQiLCJnZXRBdHRyaWJ1dGUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUVl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QUFmO0FBQ0EsU0FBS0YsTUFBTCxDQUFZdUMsS0FBWixDQUFrQkMsU0FBbEIsbUJBQTRDRixNQUE1QztBQUNIO0FBRUQ7QUFDSjtBQUNBOzs7QUFDSU4sa0JBQWdCLEdBQVM7QUFDckIsUUFBSSxLQUFLN0IsSUFBTCxDQUFVVSxNQUFWLEtBQXFCLENBQXpCLEVBQTRCO0FBQ3hCO0FBQ0g7O0FBRUQsU0FBSzRCLGFBQUwsT0FBdUIsS0FBS25DLFdBQTVCLFNBQTJDLEtBQUtDLGtCQUFoRCxFQUFzRW1DLFNBQXRFLENBQWdGQyxNQUFoRixDQUF1RixLQUFLcEMsa0JBQTVGO0FBRUEsU0FBS0osSUFBTCxDQUFVLEtBQUtFLGdCQUFmLEVBQWlDcUMsU0FBakMsQ0FBMkNFLEdBQTNDLENBQStDLEtBQUtyQyxrQkFBcEQ7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ29CLE1BQVpPLFlBQVksR0FBVztBQUN2QixXQUFPK0IsUUFBUSxDQUFDLEtBQUtDLFlBQUwsQ0FBa0IsZ0JBQWxCLEtBQXVDLEdBQXhDLENBQWY7QUFDSDtBQUVEO0FBQ0o7QUFDQTs7O0FBQ3NCLE1BQWR6QixjQUFjLEdBQVc7QUFDekIsV0FBT3dCLFFBQVEsQ0FBQyxLQUFLQyxZQUFMLENBQWtCLGtCQUFsQixLQUF5QyxHQUExQyxDQUFmO0FBQ0g7O0FBekxpRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnNpbXBsZS1jYXJvdXNlbC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnLi4vLi4vLi4vbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFNpbXBsZUNhcm91c2VsIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICAvKipcbiAgICAgKiBTd2l0Y2hlcyBhIHNsaWRlIHRvIGEgcHJldmlvdXMgb25lLlxuICAgICAqL1xuICAgIHRyaWdnZXJQcmV2OiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIGEgc2xpZGUgdG8gYSBuZXh0IG9uZS5cbiAgICAgKi9cbiAgICB0cmlnZ2VyTmV4dDogSFRNTEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBUaGUgY3VycmVudCBzbGlkZXIuXG4gICAgICovXG4gICAgc2xpZGVyOiBIVE1MRWxlbWVudDtcblxuICAgIC8qKlxuICAgICAqIFRoZSBudW1iZXIgb2YgdGhlIHNsaWRlcy5cbiAgICAgKi9cbiAgICBzbGlkZXNDb3VudDogbnVtYmVyO1xuXG4gICAgLyoqXG4gICAgICogVGhlIHNsaWRlciB3aWR0aC5cbiAgICAgKi9cbiAgICBzbGlkZVdpZHRoOiBudW1iZXI7XG5cbiAgICAvKipcbiAgICAgKiBUaHIgZG90LXN3aXRjaCBlbGVtZW50cyBiZWxvdyB0aGUgc2xpZGVzLlxuICAgICAqL1xuICAgIGRvdHM6IEhUTUxFbGVtZW50W107XG5cbiAgICAvKipcbiAgICAgKiBUaGUgbnVtYmVyIG9mIHZpZXdzLlxuICAgICAqL1xuICAgIHZpZXdzQ291bnQ6IG51bWJlcjtcblxuICAgIC8qKlxuICAgICAqIFRoZSBpbmRleCBvZiB0aGUgYWN0aXZlIHNsaWRlLlxuICAgICAqL1xuICAgIHZpZXdDdXJyZW50SW5kZXg6IG51bWJlciA9IDA7XG5cbiAgICAvKipcbiAgICAgKiBEb3QgZWxlbWVudCBzZWxlY3Rvci5cbiAgICAgKi9cbiAgICByZWFkb25seSBkb3RTZWxlY3Rvcjogc3RyaW5nO1xuXG4gICAgLyoqXG4gICAgICogRG90IGVsZW1lbnQgXCJpcyBjdXJyZW50XCIgbW9kaWZpZXIuXG4gICAgICovXG4gICAgcmVhZG9ubHkgZG90Q3VycmVudE1vZGlmaWVyOiBzdHJpbmc7XG4gICAgcHJvdGVjdGVkIGZ1bGxTbGlkZXJXaWR0aDogbnVtYmVyID0gMTAwO1xuXG4gICAgY29uc3RydWN0b3IoKSB7XG4gICAgICAgIHN1cGVyKCk7XG5cbiAgICAgICAgdGhpcy5kb3RTZWxlY3RvciA9IGAke3RoaXMuanNOYW1lfV9fZG90YDtcbiAgICAgICAgdGhpcy5kb3RDdXJyZW50TW9kaWZpZXIgPSBgJHt0aGlzLm5hbWV9X19kb3QtLWN1cnJlbnRgO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnNsaWRlc0NvdW50ID0gdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fc2xpZGVgKS5sZW5ndGg7XG5cbiAgICAgICAgaWYgKHRoaXMuc2xpZGVzQ291bnQgPD0gMSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy50cmlnZ2VyUHJldiA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcmV2YClbMF07XG4gICAgICAgIHRoaXMudHJpZ2dlck5leHQgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fbmV4dGApWzBdO1xuICAgICAgICB0aGlzLnNsaWRlciA9IDxIVE1MRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19zbGlkZXJgKVswXTtcbiAgICAgICAgdGhpcy5zbGlkZVdpZHRoID0gdGhpcy5mdWxsU2xpZGVyV2lkdGggLyB0aGlzLnNsaWRlc1RvU2hvdztcbiAgICAgICAgdGhpcy5kb3RzID0gPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy5kb3RTZWxlY3RvcikpO1xuICAgICAgICB0aGlzLnZpZXdzQ291bnQgPSB0aGlzLmdldFZpZXdzQ291bnQoKTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIEdldHMgdGhlIG51bWJlciBvZiBzbGlkZXMuXG4gICAgICovXG4gICAgZ2V0Vmlld3NDb3VudCgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTWF0aC5jZWlsKCh0aGlzLnNsaWRlc0NvdW50IC0gdGhpcy5zbGlkZXNUb1Nob3cpIC8gdGhpcy5zbGlkZXNUb1Njcm9sbCkgKyAxO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlclByZXYuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uUHJldkNsaWNrKGV2ZW50KSk7XG4gICAgICAgIHRoaXMudHJpZ2dlck5leHQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uTmV4dENsaWNrKGV2ZW50KSk7XG4gICAgICAgIHRoaXMuZG90cy5mb3JFYWNoKChkb3Q6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICBkb3QuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiB0aGlzLm9uRG90Q2xpY2soZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uUHJldkNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmxvYWRQcmV2Vmlld0luZGV4KCk7XG4gICAgICAgIHRoaXMuc2xpZGUoKTtcbiAgICAgICAgdGhpcy51cGRhdGVDdXJyZW50RG90KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uTmV4dENsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmxvYWROZXh0Vmlld0luZGV4KCk7XG4gICAgICAgIHRoaXMuc2xpZGUoKTtcbiAgICAgICAgdGhpcy51cGRhdGVDdXJyZW50RG90KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRG90Q2xpY2soZXZlbnQ6IEV2ZW50KTogdm9pZCB7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIHRoaXMubG9hZFZpZXdJbmRleEZyb21Eb3QoPEhUTUxFbGVtZW50PmV2ZW50LnRhcmdldCk7XG4gICAgICAgIHRoaXMuc2xpZGUoKTtcbiAgICAgICAgdGhpcy51cGRhdGVDdXJyZW50RG90KCk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogU3dpdGNoZXMgdGhlIGN1cnJlbnQgc2xpZGUgdG8gdGhlIHByZXZpb3VzIG9uZS5cbiAgICAgKi9cbiAgICBsb2FkUHJldlZpZXdJbmRleCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gdGhpcy52aWV3Q3VycmVudEluZGV4IC0gMTtcblxuICAgICAgICBpZiAodGhpcy52aWV3Q3VycmVudEluZGV4IDwgMCkge1xuICAgICAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gdGhpcy52aWV3c0NvdW50IC0gMTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIHRoZSBjdXJyZW50IHNsaWRlIHRvIHRoZSBuZXh0IG9uZS5cbiAgICAgKi9cbiAgICBsb2FkTmV4dFZpZXdJbmRleCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gdGhpcy52aWV3Q3VycmVudEluZGV4ICsgMTtcblxuICAgICAgICBpZiAodGhpcy52aWV3Q3VycmVudEluZGV4ID49IHRoaXMudmlld3NDb3VudCkge1xuICAgICAgICAgICAgdGhpcy52aWV3Q3VycmVudEluZGV4ID0gMDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC8qKlxuICAgICAqIFN3aXRjaGVzIHRvIHRoZSBzbGlkZSBiYXNlZCBvbiB0aGUgcHJvdmlkZWQgZG90IGVsZW1lbnQuXG4gICAgICogQHBhcmFtIGRvdCBIVE1MRWxlbWVudCBjb3JyZXNwb25kaW5nIHRvIHRoZSBuZXcgdGFyZ2V0IHNsaWRlIHRoYXQgaGFzIHRvIGJlIGxvYWRlZC5cbiAgICAgKi9cbiAgICBsb2FkVmlld0luZGV4RnJvbURvdChkb3Q6IEhUTUxFbGVtZW50KTogdm9pZCB7XG4gICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IHRoaXMuZG90cy5pbmRleE9mKGRvdCk7XG5cbiAgICAgICAgaWYgKHRoaXMudmlld0N1cnJlbnRJbmRleCA9PT0gLTEpIHtcbiAgICAgICAgICAgIHRoaXMudmlld0N1cnJlbnRJbmRleCA9IDA7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBQZXJmb3JtcyBzbGlkaW5nIG9mIHNsaWRlciBpdGVtcy5cbiAgICAgKi9cbiAgICBzbGlkZSgpOiB2b2lkIHtcbiAgICAgICAgbGV0IHNsaWRlc1RvU2xpZGUgPSB0aGlzLnNsaWRlc1RvU2Nyb2xsICogdGhpcy52aWV3Q3VycmVudEluZGV4O1xuXG4gICAgICAgIGlmICh0aGlzLnNsaWRlc1RvU2Nyb2xsICsgc2xpZGVzVG9TbGlkZSA+IHRoaXMuc2xpZGVzQ291bnQpIHtcbiAgICAgICAgICAgIHNsaWRlc1RvU2xpZGUgPSBzbGlkZXNUb1NsaWRlIC0gKHRoaXMuc2xpZGVzQ291bnQgLSBzbGlkZXNUb1NsaWRlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IG9mZnNldCA9IC0oc2xpZGVzVG9TbGlkZSAqIHRoaXMuc2xpZGVXaWR0aCk7XG4gICAgICAgIHRoaXMuc2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGVYKCR7b2Zmc2V0fSUpYDtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBUb2dnbGVzIHRoZSBhY3RpdmUgY2xhc3MgYW5kIHRoZSBtb2RpZmllciBvbiB0aGUgY3VycmVudCBkb3QuXG4gICAgICovXG4gICAgdXBkYXRlQ3VycmVudERvdCgpOiB2b2lkIHtcbiAgICAgICAgaWYgKHRoaXMuZG90cy5sZW5ndGggPT09IDApIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIHRoaXMucXVlcnlTZWxlY3RvcihgLiR7dGhpcy5kb3RTZWxlY3Rvcn0uJHt0aGlzLmRvdEN1cnJlbnRNb2RpZmllcn1gKS5jbGFzc0xpc3QucmVtb3ZlKHRoaXMuZG90Q3VycmVudE1vZGlmaWVyKTtcblxuICAgICAgICB0aGlzLmRvdHNbdGhpcy52aWV3Q3VycmVudEluZGV4XS5jbGFzc0xpc3QuYWRkKHRoaXMuZG90Q3VycmVudE1vZGlmaWVyKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIHRoZSBudW1iZXIgb2Ygc2xpZGVzIHRvIGJlIHNob3duLlxuICAgICAqL1xuICAgIGdldCBzbGlkZXNUb1Nob3coKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIHBhcnNlSW50KHRoaXMuZ2V0QXR0cmlidXRlKCdzbGlkZXMtdG8tc2hvdycpIHx8ICcwJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogR2V0cyB0aGUgbnVtYmVyIG9mIHNsaWRlcyB0byBiZSBzY3JvbGxlZCBieSBhbiBpbnRlcmFjdGlvbi5cbiAgICAgKi9cbiAgICBnZXQgc2xpZGVzVG9TY3JvbGwoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIHBhcnNlSW50KHRoaXMuZ2V0QXR0cmlidXRlKCdzbGlkZXMtdG8tc2Nyb2xsJykgfHwgJzAnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9