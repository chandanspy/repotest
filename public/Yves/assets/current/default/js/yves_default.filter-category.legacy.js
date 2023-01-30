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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");




var FilterCategory = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(FilterCategory, _Component);

  function FilterCategory() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.activeCategory = void 0;
    _this.visibleCategories = void 0;
    _this.parent = void 0;
    return _this;
  }

  var _proto = FilterCategory.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.activeCategory = document.getElementsByClassName(this.activeCategoryClassName)[0];
    this.parent = this.activeCategory ? this.activeCategory : this;
    this.visibleCategories = Array.from(this.parent.getElementsByClassName(this.visibleCategoryClass));
    this.hideCategory();
  };

  _proto.hideCategory = function hideCategory() {
    if (!this.activeCategory || this.activeCategory.classList.contains(this.parentClassName)) {
      this.removeClass(this.visibleCategories);
      return;
    }

    this.hideParentCategories();
  };

  _proto.hideParentCategories = function hideParentCategories() {
    var target = this.activeCategory;

    while (!target.classList.contains(this.wrapperClassName)) {
      if (target.classList.contains(this.parentClassName)) {
        this.removeClass(Array.from(target.getElementsByClassName(this.visibleCategoryClass)));
        return;
      }

      target = target.parentNode;
    }
  };

  _proto.removeClass = function removeClass(categoriesToShow) {
    var _this2 = this;

    categoriesToShow.forEach(function (element) {
      return element.classList.remove(_this2.classToRemove);
    });
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(FilterCategory, [{
    key: "wrapperClassName",
    get: function get() {
      return this.getAttribute('wrapper-class-name');
    }
  }, {
    key: "parentClassName",
    get: function get() {
      return this.getAttribute('parent-class-name');
    }
  }, {
    key: "activeCategoryClassName",
    get: function get() {
      return this.getAttribute('active-category-class-name');
    }
  }, {
    key: "visibleCategoryClass",
    get: function get() {
      return this.getAttribute('visible-category-class');
    }
  }, {
    key: "classToRemove",
    get: function get() {
      return this.getAttribute('class-to-remove');
    }
  }]);

  return FilterCategory;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvQ2F0YWxvZ1BhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9maWx0ZXItY2F0ZWdvcnkvZmlsdGVyLWNhdGVnb3J5LnRzIl0sIm5hbWVzIjpbIkZpbHRlckNhdGVnb3J5IiwiYWN0aXZlQ2F0ZWdvcnkiLCJ2aXNpYmxlQ2F0ZWdvcmllcyIsInBhcmVudCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiYWN0aXZlQ2F0ZWdvcnlDbGFzc05hbWUiLCJBcnJheSIsImZyb20iLCJ2aXNpYmxlQ2F0ZWdvcnlDbGFzcyIsImhpZGVDYXRlZ29yeSIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwicGFyZW50Q2xhc3NOYW1lIiwicmVtb3ZlQ2xhc3MiLCJoaWRlUGFyZW50Q2F0ZWdvcmllcyIsInRhcmdldCIsIndyYXBwZXJDbGFzc05hbWUiLCJwYXJlbnROb2RlIiwiY2F0ZWdvcmllc1RvU2hvdyIsImZvckVhY2giLCJlbGVtZW50IiwicmVtb3ZlIiwiY2xhc3NUb1JlbW92ZSIsImdldEF0dHJpYnV0ZSIsIkNvbXBvbmVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBOztJQUVxQkEsYzs7Ozs7Ozs7Ozs7VUFDUEMsYztVQUNBQyxpQjtVQUNBQyxNOzs7Ozs7U0FFQUMsYSxHQUFWLHlCQUFnQyxDQUFFLEM7O1NBRXhCQyxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtKLGNBQUwsR0FBbUNLLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsS0FBS0MsdUJBQXJDLEVBQThELENBQTlELENBQW5DO0FBQ0EsU0FBS0wsTUFBTCxHQUFjLEtBQUtGLGNBQUwsR0FBc0IsS0FBS0EsY0FBM0IsR0FBNEMsSUFBMUQ7QUFDQSxTQUFLQyxpQkFBTCxHQUNJTyxLQUFLLENBQUNDLElBQU4sQ0FBVyxLQUFLUCxNQUFMLENBQVlJLHNCQUFaLENBQW1DLEtBQUtJLG9CQUF4QyxDQUFYLENBREo7QUFJQSxTQUFLQyxZQUFMO0FBQ0gsRzs7U0FFU0EsWSxHQUFWLHdCQUErQjtBQUMzQixRQUFJLENBQUMsS0FBS1gsY0FBTixJQUF3QixLQUFLQSxjQUFMLENBQW9CWSxTQUFwQixDQUE4QkMsUUFBOUIsQ0FBdUMsS0FBS0MsZUFBNUMsQ0FBNUIsRUFBMEY7QUFDdEYsV0FBS0MsV0FBTCxDQUFpQixLQUFLZCxpQkFBdEI7QUFFQTtBQUNIOztBQUVELFNBQUtlLG9CQUFMO0FBQ0gsRzs7U0FFU0Esb0IsR0FBVixnQ0FBdUM7QUFDbkMsUUFBSUMsTUFBTSxHQUFnQixLQUFLakIsY0FBL0I7O0FBRUEsV0FBTyxDQUFDaUIsTUFBTSxDQUFDTCxTQUFQLENBQWlCQyxRQUFqQixDQUEwQixLQUFLSyxnQkFBL0IsQ0FBUixFQUEwRDtBQUN0RCxVQUFJRCxNQUFNLENBQUNMLFNBQVAsQ0FBaUJDLFFBQWpCLENBQTBCLEtBQUtDLGVBQS9CLENBQUosRUFBcUQ7QUFDakQsYUFBS0MsV0FBTCxDQUFnQ1AsS0FBSyxDQUFDQyxJQUFOLENBQVdRLE1BQU0sQ0FBQ1gsc0JBQVAsQ0FBOEIsS0FBS0ksb0JBQW5DLENBQVgsQ0FBaEM7QUFFQTtBQUNIOztBQUVETyxZQUFNLEdBQWdCQSxNQUFNLENBQUNFLFVBQTdCO0FBQ0g7QUFDSixHOztTQUVTSixXLEdBQVYscUJBQXNCSyxnQkFBdEIsRUFBNkQ7QUFBQTs7QUFDekRBLG9CQUFnQixDQUFDQyxPQUFqQixDQUF5QixVQUFDQyxPQUFEO0FBQUEsYUFBMEJBLE9BQU8sQ0FBQ1YsU0FBUixDQUFrQlcsTUFBbEIsQ0FBeUIsTUFBSSxDQUFDQyxhQUE5QixDQUExQjtBQUFBLEtBQXpCO0FBQ0gsRzs7OztTQUVELGVBQXlDO0FBQ3JDLGFBQU8sS0FBS0MsWUFBTCxDQUFrQixvQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUF3QztBQUNwQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsbUJBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBZ0Q7QUFDNUMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLDRCQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQTZDO0FBQ3pDLGFBQU8sS0FBS0EsWUFBTCxDQUFrQix3QkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUFzQztBQUNsQyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0IsaUJBQWxCLENBQVA7QUFDSDs7OztFQS9EdUNDLCtEIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LmZpbHRlci1jYXRlZ29yeS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRmlsdGVyQ2F0ZWdvcnkgZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBhY3RpdmVDYXRlZ29yeTogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHZpc2libGVDYXRlZ29yaWVzOiBIVE1MRWxlbWVudFtdO1xuICAgIHByb3RlY3RlZCBwYXJlbnQ6IEhUTUxFbGVtZW50O1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWN0aXZlQ2F0ZWdvcnkgPSA8SFRNTEVsZW1lbnQ+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLmFjdGl2ZUNhdGVnb3J5Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5wYXJlbnQgPSB0aGlzLmFjdGl2ZUNhdGVnb3J5ID8gdGhpcy5hY3RpdmVDYXRlZ29yeSA6IHRoaXM7XG4gICAgICAgIHRoaXMudmlzaWJsZUNhdGVnb3JpZXMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMucGFyZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUodGhpcy52aXNpYmxlQ2F0ZWdvcnlDbGFzcykpXG4gICAgICAgICk7XG5cbiAgICAgICAgdGhpcy5oaWRlQ2F0ZWdvcnkoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZUNhdGVnb3J5KCk6IHZvaWQge1xuICAgICAgICBpZiAoIXRoaXMuYWN0aXZlQ2F0ZWdvcnkgfHwgdGhpcy5hY3RpdmVDYXRlZ29yeS5jbGFzc0xpc3QuY29udGFpbnModGhpcy5wYXJlbnRDbGFzc05hbWUpKSB7XG4gICAgICAgICAgICB0aGlzLnJlbW92ZUNsYXNzKHRoaXMudmlzaWJsZUNhdGVnb3JpZXMpO1xuXG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICB0aGlzLmhpZGVQYXJlbnRDYXRlZ29yaWVzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhpZGVQYXJlbnRDYXRlZ29yaWVzKCk6IHZvaWQge1xuICAgICAgICBsZXQgdGFyZ2V0ID0gPEhUTUxFbGVtZW50PnRoaXMuYWN0aXZlQ2F0ZWdvcnk7XG5cbiAgICAgICAgd2hpbGUgKCF0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMud3JhcHBlckNsYXNzTmFtZSkpIHtcbiAgICAgICAgICAgIGlmICh0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKHRoaXMucGFyZW50Q2xhc3NOYW1lKSkge1xuICAgICAgICAgICAgICAgIHRoaXMucmVtb3ZlQ2xhc3MoPEhUTUxFbGVtZW50W10+QXJyYXkuZnJvbSh0YXJnZXQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLnZpc2libGVDYXRlZ29yeUNsYXNzKSkpO1xuXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB0YXJnZXQgPSA8SFRNTEVsZW1lbnQ+dGFyZ2V0LnBhcmVudE5vZGU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgcmVtb3ZlQ2xhc3MoY2F0ZWdvcmllc1RvU2hvdzogSFRNTEVsZW1lbnRbXSk6IHZvaWQge1xuICAgICAgICBjYXRlZ29yaWVzVG9TaG93LmZvckVhY2goKGVsZW1lbnQ6IEhUTUxFbGVtZW50KSA9PiBlbGVtZW50LmNsYXNzTGlzdC5yZW1vdmUodGhpcy5jbGFzc1RvUmVtb3ZlKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB3cmFwcGVyQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnd3JhcHBlci1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBwYXJlbnRDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdwYXJlbnQtY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgYWN0aXZlQ2F0ZWdvcnlDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdhY3RpdmUtY2F0ZWdvcnktY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgdmlzaWJsZUNhdGVnb3J5Q2xhc3MoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd2aXNpYmxlLWNhdGVnb3J5LWNsYXNzJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBjbGFzc1RvUmVtb3ZlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnY2xhc3MtdG8tcmVtb3ZlJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==