(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["filter-category"],{

/***/ "./src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.ts":
/*!********************************************************************************************************!*\
  !*** ./src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.ts ***!
  \********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return FilterCategory; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class FilterCategory extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.activeCategory = void 0;
    this.visibleCategories = void 0;
    this.parent = void 0;
  }

  readyCallback() {}

  init() {
    this.activeCategory = document.getElementsByClassName(this.activeCategoryClassName)[0];
    this.parent = this.activeCategory ? this.activeCategory : this;
    this.visibleCategories = Array.from(this.parent.getElementsByClassName(this.visibleCategoryClass));
    this.hideCategory();
  }

  hideCategory() {
    if (!this.activeCategory || this.activeCategory.classList.contains(this.parentClassName)) {
      this.removeClass(this.visibleCategories);
      return;
    }

    this.hideParentCategories();
  }

  hideParentCategories() {
    var target = this.activeCategory;

    while (!target.classList.contains(this.wrapperClassName)) {
      if (target.classList.contains(this.parentClassName)) {
        this.removeClass(Array.from(target.getElementsByClassName(this.visibleCategoryClass)));
        return;
      }

      target = target.parentNode;
    }
  }

  removeClass(categoriesToShow) {
    categoriesToShow.forEach(element => element.classList.remove(this.classToRemove));
  }

  get wrapperClassName() {
    return this.getAttribute('wrapper-class-name');
  }

  get parentClassName() {
    return this.getAttribute('parent-class-name');
  }

  get activeCategoryClassName() {
    return this.getAttribute('active-category-class-name');
  }

  get visibleCategoryClass() {
    return this.getAttribute('visible-category-class');
  }

  get classToRemove() {
    return this.getAttribute('class-to-remove');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ2F0YWxvZ1BhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9maWx0ZXItY2F0ZWdvcnkvZmlsdGVyLWNhdGVnb3J5LnRzIl0sIm5hbWVzIjpbIkZpbHRlckNhdGVnb3J5IiwiQ29tcG9uZW50IiwiYWN0aXZlQ2F0ZWdvcnkiLCJ2aXNpYmxlQ2F0ZWdvcmllcyIsInBhcmVudCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiYWN0aXZlQ2F0ZWdvcnlDbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJ2aXNpYmxlQ2F0ZWdvcnlDbGFzcyIsImhpZGVDYXRlZ29yeSIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwicGFyZW50Q2xhc3NOYW1lIiwicmVtb3ZlQ2xhc3MiLCJoaWRlUGFyZW50Q2F0ZWdvcmllcyIsInRhcmdldCIsIndyYXBwZXJDbGFzc05hbWUiLCJwYXJlbnROb2RlIiwiY2F0ZWdvcmllc1RvU2hvdyIsImZvckVhY2giLCJlbGVtZW50IiwicmVtb3ZlIiwiY2xhc3NUb1JlbW92ZSIsImdldEF0dHJpYnV0ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRWUsTUFBTUEsY0FBTixTQUE2QkMsK0RBQTdCLENBQXVDO0FBQUE7QUFBQTtBQUFBLFNBQ3hDQyxjQUR3QztBQUFBLFNBRXhDQyxpQkFGd0M7QUFBQSxTQUd4Q0MsTUFId0M7QUFBQTs7QUFLeENDLGVBQWEsR0FBUyxDQUFFOztBQUV4QkMsTUFBSSxHQUFTO0FBQ25CLFNBQUtKLGNBQUwsR0FBbUNLLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0MsdUJBQXJDLEVBQThELENBQTlELENBQW5DO0FBQ0EsU0FBS0wsTUFBTCxHQUFjLEtBQUtGLGNBQUwsR0FBc0IsS0FBS0EsY0FBM0IsR0FBNEMsSUFBMUQ7QUFDQSxTQUFLQyxpQkFBTCxHQUNJTyxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLUCxNQUFMLENBQVlJLHNCQUFaLENBQW1DLEtBQUtJLG9CQUF4QyxDQUFYLENBREo7QUFJQSxTQUFLQyxZQUFMO0FBQ0g7O0FBRVNBLGNBQVksR0FBUztBQUMzQixRQUFJLENBQUMsS0FBS1gsY0FBTixJQUF3QixLQUFLQSxjQUFMLENBQW9CWSxTQUFwQixDQUE4QkMsUUFBOUIsQ0FBdUMsS0FBS0MsZUFBNUMsQ0FBNUIsRUFBMEY7QUFDdEYsV0FBS0MsV0FBTCxDQUFpQixLQUFLZCxpQkFBdEI7QUFFQTtBQUNIOztBQUVELFNBQUtlLG9CQUFMO0FBQ0g7O0FBRVNBLHNCQUFvQixHQUFTO0FBQ25DLFFBQUlDLE1BQU0sR0FBZ0IsS0FBS2pCLGNBQS9COztBQUVBLFdBQU8sQ0FBQ2lCLE1BQU0sQ0FBQ0wsU0FBUCxDQUFpQkMsUUFBakIsQ0FBMEIsS0FBS0ssZ0JBQS9CLENBQVIsRUFBMEQ7QUFDdEQsVUFBSUQsTUFBTSxDQUFDTCxTQUFQLENBQWlCQyxRQUFqQixDQUEwQixLQUFLQyxlQUEvQixDQUFKLEVBQXFEO0FBQ2pELGFBQUtDLFdBQUwsQ0FBZ0NQLEtBQUssQ0FBQ0MsSUFBTixDQUFXUSxNQUFNLENBQUNYLHNCQUFQLENBQThCLEtBQUtJLG9CQUFuQyxDQUFYLENBQWhDO0FBRUE7QUFDSDs7QUFFRE8sWUFBTSxHQUFnQkEsTUFBTSxDQUFDRSxVQUE3QjtBQUNIO0FBQ0o7O0FBRVNKLGFBQVcsQ0FBQ0ssZ0JBQUQsRUFBd0M7QUFDekRBLG9CQUFnQixDQUFDQyxPQUFqQixDQUEwQkMsT0FBRCxJQUEwQkEsT0FBTyxDQUFDVixTQUFSLENBQWtCVyxNQUFsQixDQUF5QixLQUFLQyxhQUE5QixDQUFuRDtBQUNIOztBQUU2QixNQUFoQk4sZ0JBQWdCLEdBQVc7QUFDckMsV0FBTyxLQUFLTyxZQUFMLENBQWtCLG9CQUFsQixDQUFQO0FBQ0g7O0FBRTRCLE1BQWZYLGVBQWUsR0FBVztBQUNwQyxXQUFPLEtBQUtXLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7QUFFb0MsTUFBdkJsQix1QkFBdUIsR0FBVztBQUM1QyxXQUFPLEtBQUtrQixZQUFMLENBQWtCLDRCQUFsQixDQUFQO0FBQ0g7O0FBRWlDLE1BQXBCZixvQkFBb0IsR0FBVztBQUN6QyxXQUFPLEtBQUtlLFlBQUwsQ0FBa0Isd0JBQWxCLENBQVA7QUFDSDs7QUFFMEIsTUFBYkQsYUFBYSxHQUFXO0FBQ2xDLFdBQU8sS0FBS0MsWUFBTCxDQUFrQixpQkFBbEIsQ0FBUDtBQUNIOztBQS9EaUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5maWx0ZXItY2F0ZWdvcnkuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRmlsdGVyQ2F0ZWdvcnkgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBhY3RpdmVDYXRlZ29yeTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHZpc2libGVDYXRlZ29yaWVzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwYXJlbnQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWN0aXZlQ2F0ZWdvcnkgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmFjdGl2ZUNhdGVnb3J5Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5wYXJlbnQgPSB0aGlzLmFjdGl2ZUNhdGVnb3J5ID8gdGhpcy5hY3RpdmVDYXRlZ29yeSA6IHRoaXM7XG4gICAgICAgIHRoaXMudmlzaWJsZUNhdGVnb3JpZXMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMucGFyZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy52aXNpYmxlQ2F0ZWdvcnlDbGFzcykpXG4gICAgICAgICk7XG5cbiAgICAgICAgdGhpcy5oaWRlQ2F0ZWdvcnkoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZUNhdGVnb3J5KCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuYWN0aXZlQ2F0ZWdvcnkgfHwgdGhpcy5hY3RpdmVDYXRlZ29yeS5jbGFzc0xpc3QuY29udGFpbnModGhpcy5wYXJlbnRDbGFzc05hbWUpKSB7XG4gICAgICAgICAgICB0aGlzLnJlbW92ZUNsYXNzKHRoaXMudmlzaWJsZUNhdGVnb3JpZXMpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmhpZGVQYXJlbnRDYXRlZ29yaWVzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhpZGVQYXJlbnRDYXRlZ29yaWVzKCk6IHZvaWQge1xuICAgICAgICBsZXQgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRoaXMuYWN0aXZlQ2F0ZWdvcnk7XG5cbiAgICAgICAgd2hpbGUgKCF0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMud3JhcHBlckNsYXNzTmFtZSkpIHtcbiAgICAgICAgICAgIGlmICh0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMucGFyZW50Q2xhc3NOYW1lKSkge1xuICAgICAgICAgICAgICAgIHRoaXMucmVtb3ZlQ2xhc3MoPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0YXJnZXQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnZpc2libGVDYXRlZ29yeUNsYXNzKSkpO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB0YXJnZXQgPSA8SFRNTEVsZW1lbnQ+dGFyZ2V0LnBhcmVudE5vZGU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlQ2xhc3MoY2F0ZWdvcmllc1RvU2hvdzogSFRNTEVsZW1lbnRbXSk6IHZvaWQge1xuICAgICAgICBjYXRlZ29yaWVzVG9TaG93LmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiBlbGVtZW50LmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvUmVtb3ZlKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB3cmFwcGVyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnd3JhcHBlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwYXJlbnRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdwYXJlbnQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWN0aXZlQ2F0ZWdvcnlDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdhY3RpdmUtY2F0ZWdvcnktY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdmlzaWJsZUNhdGVnb3J5Q2xhc3MoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd2aXNpYmxlLWNhdGVnb3J5LWNsYXNzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvUmVtb3ZlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tcmVtb3ZlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==