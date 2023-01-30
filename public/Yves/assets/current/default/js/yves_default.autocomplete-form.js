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
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lodash-es/debounce */ "./node_modules/lodash-es/debounce.js");
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }



class AutocompleteForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.ajaxProvider = void 0;
    this.inputElement = void 0;
    this.hiddenInputElement = void 0;
    this.suggestionsContainer = void 0;
    this.cleanButton = void 0;
    this.overlay = void 0;
  }

  readyCallback() {}

  init() {
    this.ajaxProvider = this.getElementsByClassName(this.jsName + "__provider")[0];
    this.suggestionsContainer = this.getElementsByClassName(this.jsName + "__container")[0];
    this.inputElement = this.getElementsByClassName(this.jsName + "__input")[0];
    this.hiddenInputElement = this.getElementsByClassName(this.jsName + "__input-hidden")[0];
    this.cleanButton = this.getElementsByClassName(this.jsName + "__clean-button")[0];
    this.overlay = document.getElementsByClassName(this.overlayBlockClassName)[0];
    this.mapEvents();
  }

  mapEvents() {
    this.inputElement.addEventListener('input', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__["default"])(() => this.onInput(), this.debounceDelay));
    this.inputElement.addEventListener('blur', Object(lodash_es_debounce__WEBPACK_IMPORTED_MODULE_1__["default"])(() => this.onBlur(), this.debounceDelay));
    this.inputElement.addEventListener('focus', () => this.onFocus());

    if (this.showCleanButton) {
      this.cleanButton.addEventListener('click', () => this.onCleanButtonClick());
    }
  }

  onCleanButtonClick() {
    this.cleanFields();
  }

  onBlur() {
    this.overlay.hideOverlay('no-agent-user', 'no-agent-user');
    this.hideSuggestions();
  }

  onFocus() {
    this.overlay.showOverlay('no-agent-user', 'no-agent-user');

    if (this.inputValue.length >= this.minLetters) {
      this.showSuggestions();
      return;
    }
  }

  onInput() {
    if (this.inputValue.length >= this.minLetters) {
      this.loadSuggestions();
      return;
    }

    this.hideSuggestions();
  }

  showSuggestions() {
    this.suggestionsContainer.classList.remove('is-hidden');
  }

  hideSuggestions() {
    this.suggestionsContainer.classList.add('is-hidden');
  }

  loadSuggestions() {
    var _this = this;

    return _asyncToGenerator(function* () {
      _this.showSuggestions();

      _this.ajaxProvider.queryParams.set(_this.queryParamName, _this.inputValue);

      yield _this.ajaxProvider.fetch();

      _this.mapItemEvents();
    })();
  }

  mapItemEvents() {
    var self = this;
    var items = Array.from(this.suggestionsContainer.getElementsByClassName(this.itemClassName));
    items.forEach(item => {
      item.addEventListener('click', event => self.onItemClick(event));
    });
  }

  onItemClick(event) {
    var dataTarget = event.target;
    var data = dataTarget.getAttribute(this.valueDataAttribute);
    var text = dataTarget.textContent.trim();
    this.setInputs(data, text);
  }

  setInputs(data, text) {
    this.hiddenInputElement.value = data;
    this.inputElement.value = text;
  }

  cleanFields() {
    this.setInputs('', '');
  }

  get minLetters() {
    return Number(this.getAttribute('min-letters'));
  }

  get inputValue() {
    return this.inputElement.value.trim();
  }

  get queryParamName() {
    return this.getAttribute('query-param-name');
  }

  get valueDataAttribute() {
    return this.getAttribute('value-data-attribute');
  }

  get itemClassName() {
    return this.getAttribute('item-class-name');
  }

  get debounceDelay() {
    return Number(this.getAttribute('debounce-delay'));
  }

  get showCleanButton() {
    return this.hasAttribute('show-clean-button');
  }

  get overlayBlockClassName() {
    return this.getAttribute('overlay-block-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvUHl6L1l2ZXMvU2hvcFVpL1RoZW1lL2RlZmF1bHQvY29tcG9uZW50cy9tb2xlY3VsZXMvYXV0b2NvbXBsZXRlLWZvcm0vYXV0b2NvbXBsZXRlLWZvcm0udHMiXSwibmFtZXMiOlsiQXV0b2NvbXBsZXRlRm9ybSIsIkNvbXBvbmVudCIsImFqYXhQcm92aWRlciIsImlucHV0RWxlbWVudCIsImhpZGRlbklucHV0RWxlbWVudCIsInN1Z2dlc3Rpb25zQ29udGFpbmVyIiwiY2xlYW5CdXR0b24iLCJvdmVybGF5IiwicmVhZHlDYWxsYmFjayIsImluaXQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwianNOYW1lIiwiZG9jdW1lbnQiLCJvdmVybGF5QmxvY2tDbGFzc05hbWUiLCJtYXBFdmVudHMiLCJhZGRFdmVudExpc3RlbmVyIiwiZGVib3VuY2UiLCJvbklucHV0IiwiZGVib3VuY2VEZWxheSIsIm9uQmx1ciIsIm9uRm9jdXMiLCJzaG93Q2xlYW5CdXR0b24iLCJvbkNsZWFuQnV0dG9uQ2xpY2siLCJjbGVhbkZpZWxkcyIsImhpZGVPdmVybGF5IiwiaGlkZVN1Z2dlc3Rpb25zIiwic2hvd092ZXJsYXkiLCJpbnB1dFZhbHVlIiwibGVuZ3RoIiwibWluTGV0dGVycyIsInNob3dTdWdnZXN0aW9ucyIsImxvYWRTdWdnZXN0aW9ucyIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFkZCIsInF1ZXJ5UGFyYW1zIiwic2V0IiwicXVlcnlQYXJhbU5hbWUiLCJmZXRjaCIsIm1hcEl0ZW1FdmVudHMiLCJzZWxmIiwiaXRlbXMiLCJBcnJheSIsImZyb20iLCJpdGVtQ2xhc3NOYW1lIiwiZm9yRWFjaCIsIml0ZW0iLCJldmVudCIsIm9uSXRlbUNsaWNrIiwiZGF0YVRhcmdldCIsInRhcmdldCIsImRhdGEiLCJnZXRBdHRyaWJ1dGUiLCJ2YWx1ZURhdGFBdHRyaWJ1dGUiLCJ0ZXh0IiwidGV4dENvbnRlbnQiLCJ0cmltIiwic2V0SW5wdXRzIiwi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LENBQUMsS0FBS1AsWUFBTCxDQUFrQixhQUFsQixDQUFELENBQWI7QUFDSDs7QUFFdUIsTUFBVnpCLFVBQVUsR0FBVztBQUMvQixXQUFPLEtBQUt4QixZQUFMLENBQWtCdUQsS0FBbEIsQ0FBd0JGLElBQXhCLEVBQVA7QUFDSDs7QUFFMkIsTUFBZG5CLGNBQWMsR0FBVztBQUNuQyxXQUFPLEtBQUtlLFlBQUwsQ0FBa0Isa0JBQWxCLENBQVA7QUFDSDs7QUFFK0IsTUFBbEJDLGtCQUFrQixHQUFXO0FBQ3ZDLFdBQU8sS0FBS0QsWUFBTCxDQUFrQixzQkFBbEIsQ0FBUDtBQUNIOztBQUUwQixNQUFiUixhQUFhLEdBQVc7QUFDbEMsV0FBTyxLQUFLUSxZQUFMLENBQWtCLGlCQUFsQixDQUFQO0FBQ0g7O0FBRTBCLE1BQWJsQyxhQUFhLEdBQVc7QUFDbEMsV0FBT3lDLE1BQU0sQ0FBQyxLQUFLUCxZQUFMLENBQWtCLGdCQUFsQixDQUFELENBQWI7QUFDSDs7QUFFNEIsTUFBZi9CLGVBQWUsR0FBWTtBQUNyQyxXQUFPLEtBQUt1QyxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7O0FBRWtDLE1BQXJCL0MscUJBQXFCLEdBQVc7QUFDMUMsV0FBTyxLQUFLdUMsWUFBTCxDQUFrQiwwQkFBbEIsQ0FBUDtBQUNIOztBQXJJbUQsQyIsImZpbGUiOiIuL2pzL3l2ZXNfZGVmYXVsdC5hdXRvY29tcGxldGUtZm9ybS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBDb21wb25lbnQgZnJvbSAnU2hvcFVpL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IEFqYXhQcm92aWRlciBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9tb2xlY3VsZXMvYWpheC1wcm92aWRlci9hamF4LXByb3ZpZGVyJztcbmltcG9ydCBkZWJvdW5jZSBmcm9tICdsb2Rhc2gtZXMvZGVib3VuY2UnO1xuaW1wb3J0IE92ZXJsYXlCbG9jayBmcm9tICcuLi8uLi9hdG9tcy9vdmVybGF5LWJsb2NrL292ZXJsYXktYmxvY2snO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBBdXRvY29tcGxldGVGb3JtIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgYWpheFByb3ZpZGVyOiBBamF4UHJvdmlkZXI7XG4gICAgcHJvdGVjdGVkIGlucHV0RWxlbWVudDogSFRNTElucHV0RWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgaGlkZGVuSW5wdXRFbGVtZW50OiBIVE1MSW5wdXRFbGVtZW50O1xuICAgIHByb3RlY3RlZCBzdWdnZXN0aW9uc0NvbnRhaW5lcjogSFRNTEVsZW1lbnQ7XG4gICAgcHJvdGVjdGVkIGNsZWFuQnV0dG9uOiBIVE1MQnV0dG9uRWxlbWVudDtcbiAgICBwcm90ZWN0ZWQgb3ZlcmxheTogT3ZlcmxheUJsb2NrO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7fVxuXG4gICAgcHJvdGVjdGVkIGluaXQoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19wcm92aWRlcmApWzBdO1xuICAgICAgICB0aGlzLnN1Z2dlc3Rpb25zQ29udGFpbmVyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2NvbnRhaW5lcmApWzBdO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudCA9IDxIVE1MSW5wdXRFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX2lucHV0YClbMF07XG4gICAgICAgIHRoaXMuaGlkZGVuSW5wdXRFbGVtZW50ID0gPEhUTUxJbnB1dEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9faW5wdXQtaGlkZGVuYClbMF07XG4gICAgICAgIHRoaXMuY2xlYW5CdXR0b24gPSA8SFRNTEJ1dHRvbkVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fY2xlYW4tYnV0dG9uYClbMF07XG4gICAgICAgIHRoaXMub3ZlcmxheSA9IDxPdmVybGF5QmxvY2s+ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLm92ZXJsYXlCbG9ja0NsYXNzTmFtZSlbMF07XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcEV2ZW50cygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdpbnB1dCcsXG4gICAgICAgICAgICBkZWJvdW5jZSgoKSA9PiB0aGlzLm9uSW5wdXQoKSwgdGhpcy5kZWJvdW5jZURlbGF5KSxcbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5pbnB1dEVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcbiAgICAgICAgICAgICdibHVyJyxcbiAgICAgICAgICAgIGRlYm91bmNlKCgpID0+IHRoaXMub25CbHVyKCksIHRoaXMuZGVib3VuY2VEZWxheSksXG4gICAgICAgICk7XG4gICAgICAgIHRoaXMuaW5wdXRFbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2ZvY3VzJywgKCkgPT4gdGhpcy5vbkZvY3VzKCkpO1xuICAgICAgICBpZiAodGhpcy5zaG93Q2xlYW5CdXR0b24pIHtcbiAgICAgICAgICAgIHRoaXMuY2xlYW5CdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB0aGlzLm9uQ2xlYW5CdXR0b25DbGljaygpKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNsZWFuQnV0dG9uQ2xpY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuY2xlYW5GaWVsZHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgb25CbHVyKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm92ZXJsYXkuaGlkZU92ZXJsYXkoJ25vLWFnZW50LXVzZXInLCAnbm8tYWdlbnQtdXNlcicpO1xuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkZvY3VzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm92ZXJsYXkuc2hvd092ZXJsYXkoJ25vLWFnZW50LXVzZXInLCAnbm8tYWdlbnQtdXNlcicpO1xuICAgICAgICBpZiAodGhpcy5pbnB1dFZhbHVlLmxlbmd0aCA+PSB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHRoaXMuc2hvd1N1Z2dlc3Rpb25zKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbklucHV0KCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5pbnB1dFZhbHVlLmxlbmd0aCA+PSB0aGlzLm1pbkxldHRlcnMpIHtcbiAgICAgICAgICAgIHRoaXMubG9hZFN1Z2dlc3Rpb25zKCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICB0aGlzLmhpZGVTdWdnZXN0aW9ucygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBzaG93U3VnZ2VzdGlvbnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIuY2xhc3NMaXN0LnJlbW92ZSgnaXMtaGlkZGVuJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGhpZGVTdWdnZXN0aW9ucygpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5zdWdnZXN0aW9uc0NvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdpcy1oaWRkZW4nKTtcbiAgICB9XG5cbiAgICBhc3luYyBsb2FkU3VnZ2VzdGlvbnMoKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIHRoaXMuc2hvd1N1Z2dlc3Rpb25zKCk7XG4gICAgICAgIHRoaXMuYWpheFByb3ZpZGVyLnF1ZXJ5UGFyYW1zLnNldCh0aGlzLnF1ZXJ5UGFyYW1OYW1lLCB0aGlzLmlucHV0VmFsdWUpO1xuXG4gICAgICAgIGF3YWl0IHRoaXMuYWpheFByb3ZpZGVyLmZldGNoKCk7XG4gICAgICAgIHRoaXMubWFwSXRlbUV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBJdGVtRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICBjb25zdCBzZWxmID0gdGhpcztcbiAgICAgICAgY29uc3QgaXRlbXMgPSBBcnJheS5mcm9tKHRoaXMuc3VnZ2VzdGlvbnNDb250YWluZXIuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSh0aGlzLml0ZW1DbGFzc05hbWUpKTtcbiAgICAgICAgaXRlbXMuZm9yRWFjaCgoaXRlbTogSFRNTEVsZW1lbnQpID0+IHtcbiAgICAgICAgICAgIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQ6IEV2ZW50KSA9PiBzZWxmLm9uSXRlbUNsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkl0ZW1DbGljayhldmVudDogRXZlbnQpOiB2b2lkIHtcbiAgICAgICAgY29uc3QgZGF0YVRhcmdldCA9IDxIVE1MRWxlbWVudD5ldmVudC50YXJnZXQ7XG4gICAgICAgIGNvbnN0IGRhdGEgPSBkYXRhVGFyZ2V0LmdldEF0dHJpYnV0ZSh0aGlzLnZhbHVlRGF0YUF0dHJpYnV0ZSk7XG4gICAgICAgIGNvbnN0IHRleHQgPSBkYXRhVGFyZ2V0LnRleHRDb250ZW50LnRyaW0oKTtcblxuICAgICAgICB0aGlzLnNldElucHV0cyhkYXRhLCB0ZXh0KTtcbiAgICB9XG5cbiAgICBzZXRJbnB1dHMoZGF0YTogc3RyaW5nLCB0ZXh0OiBzdHJpbmcpOiB2b2lkIHtcbiAgICAgICAgdGhpcy5oaWRkZW5JbnB1dEVsZW1lbnQudmFsdWUgPSBkYXRhO1xuICAgICAgICB0aGlzLmlucHV0RWxlbWVudC52YWx1ZSA9IHRleHQ7XG4gICAgfVxuXG4gICAgY2xlYW5GaWVsZHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuc2V0SW5wdXRzKCcnLCAnJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBtaW5MZXR0ZXJzKCk6IG51bWJlciB7XG4gICAgICAgIHJldHVybiBOdW1iZXIodGhpcy5nZXRBdHRyaWJ1dGUoJ21pbi1sZXR0ZXJzJykpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaW5wdXRWYWx1ZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5pbnB1dEVsZW1lbnQudmFsdWUudHJpbSgpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgcXVlcnlQYXJhbU5hbWUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCdxdWVyeS1wYXJhbS1uYW1lJyk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCB2YWx1ZURhdGFBdHRyaWJ1dGUoKTogc3RyaW5nIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuZ2V0QXR0cmlidXRlKCd2YWx1ZS1kYXRhLWF0dHJpYnV0ZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgaXRlbUNsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ2l0ZW0tY2xhc3MtbmFtZScpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgZGVib3VuY2VEZWxheSgpOiBudW1iZXIge1xuICAgICAgICByZXR1cm4gTnVtYmVyKHRoaXMuZ2V0QXR0cmlidXRlKCdkZWJvdW5jZS1kZWxheScpKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHNob3dDbGVhbkJ1dHRvbigpOiBib29sZWFuIHtcbiAgICAgICAgcmV0dXJuIHRoaXMuaGFzQXR0cmlidXRlKCdzaG93LWNsZWFuLWJ1dHRvbicpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBnZXQgb3ZlcmxheUJsb2NrQ2xhc3NOYW1lKCk6IHN0cmluZyB7XG4gICAgICAgIHJldHVybiB0aGlzLmdldEF0dHJpYnV0ZSgnb3ZlcmxheS1ibG9jay1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==