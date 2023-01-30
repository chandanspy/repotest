(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["autocomplete-form"],{

/***/ "./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts":
/*!*******************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ShopUi/Theme/default/components/molecules/autocomplete-form/autocomplete-form.ts ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return AutocompleteForm; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");







var AutocompleteForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_3___default()(AutocompleteForm, _Component);

  function AutocompleteForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.ajaxProvider = void 0;
    _this.inputElement = void 0;
    _this.hiddenInputElement = void 0;
    _this.suggestionsContainer = void 0;
    _this.cleanButton = void 0;
    _this.overlay = void 0;
    return _this;
  }

  var _proto = AutocompleteForm.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.suggestionsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.inputElement = this.getElementsByClassName(this.jsName + "__input")[0];
    this.hiddenInputElement = this.getElementsByClassName(this.jsName + "__input-hidden")[0];
    this.cleanButton = this.getElementsByClassName(this.jsName + "__clean-button")[0];
    this.overlay = document.getElementsByClassName(this.overlayBlockClassName)[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.inputElement.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onInput();
    }, this.debounceDelay));
    this.inputElement.addEventListener('blur', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_5__["default"])(function () {
      return _this2.onBlur();
    }, this.debounceDelay));
    this.inputElement.addEventListener('focus', function () {
      return _this2.onFocus();
    });

    if (this.showCleanButton) {
      this.cleanButton.addEventListener('click', function () {
        return _this2.onCleanButtonClick();
      });
    }
  };

  _proto.onCleanButtonClick = function onCleanButtonClick() {
    this.cleanFields();
  };

  _proto.onBlur = function onBlur() {
    this.overlay.hideOverlay('no-agent-user', 'no-agent-user');
    this.hideSuggestions();
  };

  _proto.onFocus = function onFocus() {
    this.overlay.showOverlay('no-agent-user', 'no-agent-user');

    if (this.inputValue.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  };

  _proto.onInput = function onInput() {
    if (this.inputValue.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  };

  _proto.showSuggestions = function showSuggestions() {
    this.suggestionsContainer.classList.remove('is-hidden');
  };

  _proto.hideSuggestions = function hideSuggestions() {
    this.suggestionsContainer.classList.add('is-hidden');
  };

  _proto.loadSuggestions = /*#__PURE__*/function () {
    var _loadSuggestions = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              this.showSuggestions();
              this.ajaxProvider.queryParams.set(this.queryParamName, this.inputValue);
              _context.next = 4;
              return this.ajaxProvider.fetch();

            case 4:
              this.mapItemEvents();

            case 5:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function loadSuggestions() {
      return _loadSuggestions.apply(this, arguments);
    }

    return loadSuggestions;
  }();

  _proto.mapItemEvents = function mapItemEvents() {
    var self = this;
    var items = Array.from(this.suggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(function (item) {
      item.addEventListener('click', function (event) {
        return self.onItemClick(event);
      });
    });
  };

  _proto.onItemClick = function onItemClick(event) {
    var dataTarget = event.target;
    var data = dataTarget.getAttribute(this.valueDataAttribute);
    var text = dataTarget.textContent.trim();
    this.setInputs(data, text);
  };

  _proto.setInputs = function setInputs(data, text) {
    this.hiddenInputElement.value = data;
    this.inputElement.value = text;
  };

  _proto.cleanFields = function cleanFields() {
    this.setInputs('', '');
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_2___default()(AutocompleteForm, [{
    key: "minLetters",
    get: function get() {
      return Number(this.getAttribute('min-letters'));
    }
  }, {
    key: "inputValue",
    get: function get() {
      return this.inputElement.value.trim();
    }
  }, {
    key: "queryParamName",
    get: function get() {
      return this.getAttribute('query-param-name');
    }
  }, {
    key: "valueDataAttribute",
    get: function get() {
      return this.getAttribute('value-data-attribute');
    }
  }, {
    key: "itemClassName",
    get: function get() {
      return this.getAttribute('item-class-name');
    }
  }, {
    key: "debounceDelay",
    get: function get() {
      return Number(this.getAttribute('debounce-delay'));
    }
  }, {
    key: "showCleanButton",
    get: function get() {
      return this.hasAttribute('show-clean-button');
    }
  }, {
    key: "overlayBlockClassName",
    get: function get() {
      return this.getAttribute('overlay-block-class-name');
    }
  }]);

  return AutocompleteForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_4__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYXV0b2NvbXBsZXRlLWZvcm0vYXV0b2NvbXBsZXRlLWZvcm0udHMiXSwibmFtZXMiOlsiQXV0b2NvbXBsZXRlRm9ybSIsImFqYXhQcm92aWRlciIsImlucHV0RWxlbWVudCIsImhpZGRlbklucHV0RWxlbWVudCIsInN1Z2dlc3Rpb25zQ29udGFpbmVyIiwiY2xlYW5CdXR0b24iLCJvdmVybGF5IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwiZG9jdW1lbnQiLCJvdmVybGF5QmxvY2tDbGFzc05hbWUiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZGVib3VuY2UiLCJvbklucHV0IiwiZGVib3VuY2VEZWxheSIsIm9uQmx1ciIsIm9uRm9jdXMiLCJzaG93Q2xlYW5CdXR0b24iLCJvbkNsZWFuQnV0dG9uQ2xpY2siLCJjbGVhbkZpZWxkcyIsImhpZGVPdmVybGF5IiwiaGlkZVN1Z2dlc3Rpb25zIiwic2hvd092ZXJsYXkiLCJpbnB1dFZhbHVlIiwibGVuZ3RoIiwibWluTGV0dGVycyIsInNob3dTdWdnZXN0aW9ucyIsImxvYWRTdWdnZXN0aW9ucyIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFkZCIsInF1ZXJ5UGFyYW1zIiwic2V0IiwicXVlcnlQYXJhbU5hbWUiLCJmZXRjaCIsIm1hcEl0ZW1FdmVudHMiLCJzZWxmIiwiaXRlbXMiLCJBcnJheSIsImZyb20iLCJpdGVtQ2xhc3NOYW1lIiwiZm9yRWFjaCIsIml0ZW0iLCJldmVudCIsIm9uSXRlbUNsaWNrIiwiZGF0YVRhcmdldCIsInRhcmdldCIsImRhdGEiLCJnZXRBdHRyaWJ1dGUiLCJ2YWx1ZURhdGFBdHRyaWJ1dGUiLCJ0ZXh0IiwidGV4dENvbnRlbnQiLCJ0cmltIiwic2V0SW5wdXRzIiwidmFsdWUiLCJOdW1i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QTBCSixJQUExQjtBQUNILEc7O1NBRUQvQixXLEdBQUEsdUJBQW9CO0FBQ2hCLFNBQUtrQyxTQUFMLENBQWUsRUFBZixFQUFtQixFQUFuQjtBQUNILEc7Ozs7U0FFRCxlQUFtQztBQUMvQixhQUFPRSxNQUFNLENBQUMsS0FBS1AsWUFBTCxDQUFrQixhQUFsQixDQUFELENBQWI7QUFDSDs7O1NBRUQsZUFBbUM7QUFDL0IsYUFBTyxLQUFLakQsWUFBTCxDQUFrQnVELEtBQWxCLENBQXdCRixJQUF4QixFQUFQO0FBQ0g7OztTQUVELGVBQXVDO0FBQ25DLGFBQU8sS0FBS0osWUFBTCxDQUFrQixrQkFBbEIsQ0FBUDtBQUNIOzs7U0FFRCxlQUEyQztBQUN2QyxhQUFPLEtBQUtBLFlBQUwsQ0FBa0Isc0JBQWxCLENBQVA7QUFDSDs7O1NBRUQsZUFBc0M7QUFDbEMsYUFBTyxLQUFLQSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQXNDO0FBQ2xDLGFBQU9PLE1BQU0sQ0FBQyxLQUFLUCxZQUFMLENBQWtCLGdCQUFsQixDQUFELENBQWI7QUFDSDs7O1NBRUQsZUFBeUM7QUFDckMsYUFBTyxLQUFLUSxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7OztTQUVELGVBQThDO0FBQzFDLGFBQU8sS0FBS1IsWUFBTCxDQUFrQiwwQkFBbEIsQ0FBUDtBQUNIOzs7O0VBckl5Q1MsK0QiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQuYXV0b2NvbXBsZXRlLWZvcm0ubGVnYWN5LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5pbXBvcnQgQWpheFByb3ZpZGVyIGZyb20gJ1Nob3BVaS9jb21wb25lbnRzL21vbGVjdWxlcy9hamF4LXByb3ZpZGVyL2FqYXgtcHJvdmlkZXInO1xuaW1wb3J0IGRlYm91bmNlIGZyb20gJ2xvZGFzaC1lcy9kZWJvdW5jZSc7XG5pbXBvcnQgT3ZlcmxheUJsb2NrIGZyb20gJy4uLy4uL2F0b21zL292ZXJsYXktYmxvY2svb3ZlcmxheS1ibG9jayc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEF1dG9jb21wbGV0ZUZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHByb3RlY3RlZCBhamF4UHJvdmlkZXI6IEFqYXhQcm92aWRlcjtcbiAgICBwcm90ZWN0ZWQgaW5wdXRFbGVtZW50OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBoaWRkZW5JbnB1dEVsZW1lbnQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIHN1Z2dlc3Rpb25zQ29udGFpbmVyOiBIVE1MRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgY2xlYW5CdXR0b246IEhUTUxCdXR0b25FbGVtZW50O1xuICAgIHByb3RlY3RlZCBvdmVybGF5OiBPdmVybGF5QmxvY2s7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIgPSA8QWpheFByb3ZpZGVyPnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3Byb3ZpZGVyYClbMF07XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fY29udGFpbmVyYClbMF07XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXRgKVswXTtcbiAgICAgICAgdGhpcy5oaWRkZW5JbnB1dEVsZW1lbnQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19pbnB1dC1oaWRkZW5gKVswXTtcbiAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbiA9IDxIVE1MQnV0dG9uRWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19jbGVhbi1idXR0b25gKVswXTtcbiAgICAgICAgdGhpcy5vdmVybGF5ID0gPE92ZXJsYXlCbG9jaz5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMub3ZlcmxheUJsb2NrQ2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgICAgICAgICAgJ2lucHV0JyxcbiAgICAgICAgICAgIGRlYm91bmNlKCgpID0+IHRoaXMub25JbnB1dCgpLCB0aGlzLmRlYm91bmNlRGVsYXkpLFxuICAgICAgICApO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgICAgICAgICAgJ2JsdXInLFxuICAgICAgICAgICAgZGVib3VuY2UoKCkgPT4gdGhpcy5vbkJsdXIoKSwgdGhpcy5kZWJvdW5jZURlbGF5KSxcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignZm9jdXMnLCAoKSA9PiB0aGlzLm9uRm9jdXMoKSk7XG4gICAgICAgIGlmICh0aGlzLnNob3dDbGVhbkJ1dHRvbikge1xuICAgICAgICAgICAgdGhpcy5jbGVhbkJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHRoaXMub25DbGVhbkJ1dHRvbkNsaWNrKCkpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uQ2xlYW5CdXR0b25DbGljaygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5jbGVhbkZpZWxkcygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkJsdXIoKTogdm9pZCB7XG4gICAgICAgIHRoaXMub3ZlcmxheS5oaWRlT3ZlcmxheSgnbm8tYWdlbnQtdXNlcicsICduby1hZ2VudC11c2VyJyk7XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uRm9jdXMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMub3ZlcmxheS5zaG93T3ZlcmxheSgnbm8tYWdlbnQtdXNlcicsICduby1hZ2VudC11c2VyJyk7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VmFsdWUubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSW5wdXQoKTogdm9pZCB7XG4gICAgICAgIGlmICh0aGlzLmlucHV0VmFsdWUubGVuZ3RoID49IHRoaXMubWluTGV0dGVycykge1xuICAgICAgICAgICAgdGhpcy5sb2FkU3VnZ2VzdGlvbnMoKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMuaGlkZVN1Z2dlc3Rpb25zKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHNob3dTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgaGlkZVN1Z2dlc3Rpb25zKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyLmNsYXNzTGlzdC5hZGQoJ2lzLWhpZGRlbicpO1xuICAgIH1cblxuICAgIGFzeW5jIGxvYWRTdWdnZXN0aW9ucygpOiBQcm9taXNlPHZvaWQ+IHtcbiAgICAgICAgdGhpcy5zaG93U3VnZ2VzdGlvbnMoKTtcbiAgICAgICAgdGhpcy5hamF4UHJvdmlkZXIucXVlcnlQYXJhbXMuc2V0KHRoaXMucXVlcnlQYXJhbU5hbWUsIHRoaXMuaW5wdXRWYWx1ZSk7XG5cbiAgICAgICAgYXdhaXQgdGhpcy5hamF4UHJvdmlkZXIuZmV0Y2goKTtcbiAgICAgICAgdGhpcy5tYXBJdGVtRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEl0ZW1FdmVudHMoKTogdm9pZCB7XG4gICAgICAgIGNvbnN0IHNlbGYgPSB0aGlzO1xuICAgICAgICBjb25zdCBpdGVtcyA9IEFycmF5LmZyb20odGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMuaXRlbUNsYXNzTmFtZSkpO1xuICAgICAgICBpdGVtcy5mb3JFYWNoKChpdGVtOiBIVE1MRWxlbWVudCkgPT4ge1xuICAgICAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHNlbGYub25JdGVtQ2xpY2soZXZlbnQpKTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG9uSXRlbUNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBjb25zdCBkYXRhVGFyZ2V0ID0gPEhUTUxFbGVtZW50PmV2ZW50LnRhcmdldDtcbiAgICAgICAgY29uc3QgZGF0YSA9IGRhdGFUYXJnZXQuZ2V0QXR0cmlidXRlKHRoaXMudmFsdWVEYXRhQXR0cmlidXRlKTtcbiAgICAgICAgY29uc3QgdGV4dCA9IGRhdGFUYXJnZXQudGV4dENvbnRlbnQudHJpbSgpO1xuXG4gICAgICAgIHRoaXMuc2V0SW5wdXRzKGRhdGEsIHRleHQpO1xuICAgIH1cblxuICAgIHNldElucHV0cyhkYXRhOiBzdHJpbmcsIHRleHQ6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICB0aGlzLmhpZGRlbklucHV0RWxlbWVudC52YWx1ZSA9IGRhdGE7XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50LnZhbHVlID0gdGV4dDtcbiAgICB9XG5cbiAgICBjbGVhbkZpZWxkcygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zZXRJbnB1dHMoJycsICcnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IG1pbkxldHRlcnMoKTogbnVtYmVyIHtcbiAgICAgICAgcmV0dXJuIE51bWJlcih0aGlzLmdldEF0dHJpYnV0ZSgnbWluLWxldHRlcnMnKSk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpbnB1dFZhbHVlKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmlucHV0RWxlbWVudC52YWx1ZS50cmltKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBxdWVyeVBhcmFtTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3F1ZXJ5LXBhcmFtLW5hbWUnKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHZhbHVlRGF0YUF0dHJpYnV0ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3ZhbHVlLWRhdGEtYXR0cmlidXRlJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpdGVtQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnaXRlbS1jbGFzcy1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBkZWJvdW5jZURlbGF5KCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5nZXRBdHRyaWJ1dGUoJ2RlYm91bmNlLWRlbGF5JykpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgc2hvd0NsZWFuQnV0dG9uKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gdGhpcy5oYXNBdHRyaWJ1dGUoJ3Nob3ctY2xlYW4tYnV0dG9uJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBvdmVybGF5QmxvY2tDbGFzc05hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdvdmVybGF5LWJsb2NrLWNsYXNzLW5hbWUnKTtcbiAgICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9