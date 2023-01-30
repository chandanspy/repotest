(window["webpackJsonp_yves_default"] = window["webpackJsonp_yves_default"] || []).push([["quick-order-form"],{

/***/ "./vendor/spryker-shop/quick-order-page/src/SprykerShop/Yves/QuickOrderPage/Theme/default/components/molecules/quick-order-form/quick-order-form.ts":
/*!**********************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/quick-order-page/src/SprykerShop/Yves/QuickOrderPage/Theme/default/components/molecules/quick-order-form/quick-order-form.ts ***!
  \**********************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return QuickOrderForm; });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");
/* harmony import */ var ShopUi_components_organisms_dynamic_notification_area_dynamic_notification_area__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ShopUi/components/organisms/dynamic-notification-area/dynamic-notification-area */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/dynamic-notification-area/dynamic-notification-area.ts");
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }




class QuickOrderForm extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.form = void 0;
    this.rows = void 0;
    this.addRowTrigger = void 0;
    this.removeRowTriggers = void 0;
    this.addRowAjaxProvider = void 0;
    this.removeRowAjaxProvider = void 0;
  }

  readyCallback() {
    this.form = this.getElementsByClassName(this.jsName + "__form")[0];
    this.rows = this.getElementsByClassName(this.jsName + "__rows")[0];
    this.addRowTrigger = this.getElementsByClassName(this.jsName + "__add-row-trigger")[0];
    this.addRowAjaxProvider = this.getElementsByClassName(this.jsName + "__add-row-provider")[0];
    this.removeRowAjaxProvider = this.getElementsByClassName(this.jsName + "__remove-row-provider")[0];
    this.registerRemoveRowTriggers();
    this.mapEvents();
  }

  registerRemoveRowTriggers() {
    this.removeRowTriggers = Array.from(this.getElementsByClassName(this.jsName + "__remove-row-trigger"));
  }

  mapEvents() {
    this.addRowTrigger.addEventListener('click', event => this.onAddRowClick(event));
    this.mapRemoveRowTriggersEvents();
  }

  mapRemoveRowTriggersEvents() {
    this.removeRowTriggers.forEach(trigger => {
      trigger.addEventListener('click', event => this.onRemoveRowClick(event));
    });
  }

  onAddRowClick(event) {
    event.preventDefault();
    this.addRow();
  }

  onRemoveRowClick(event) {
    event.preventDefault();
    var row = event.currentTarget;
    var rowIndex = row.getAttribute('data-row-index');
    this.removeRow(rowIndex);
  }
  /**
   * Sends an ajax request to the server and renders the response on the page.
   * @template viod The argument type returned by a successful promise.
   */


  addRow() {
    var _this = this;

    return _asyncToGenerator(function* () {
      var data = _this.getFormData();

      var response = yield _this.addRowAjaxProvider.fetch(data);
      _this.rows.innerHTML = response;
      yield Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_1__["mount"])();

      _this.registerRemoveRowTriggers();

      _this.mapRemoveRowTriggersEvents();
    })();
  }
  /**
   * Sends an ajax request to the server and renders the response on the page.
   * @template viod The argument type returned by a successful promise.
   * @param rowIndex A row string index used for removal.
   */


  removeRow(rowIndex) {
    var _this2 = this;

    return _asyncToGenerator(function* () {
      var data = _this2.getFormData({
        'row-index': rowIndex
      });

      var response = yield _this2.removeRowAjaxProvider.fetch(data);

      var parsedResponse = _this2.parseResponse(response);

      if (typeof parsedResponse !== 'string') {
        _this2.showFlashMessage(parsedResponse);

        return;
      }

      _this2.updateTableHtml(response);
    })();
  }

  parseResponse(response) {
    try {
      return JSON.parse(response);
    } catch (_unused) {
      return response;
    }
  }

  hasMessages(response) {
    return 'messages' in response;
  }

  showFlashMessage(response) {
    var _this3 = this;

    return _asyncToGenerator(function* () {
      if (!_this3.hasMessages(response)) {
        return;
      }

      var dynamicNotificationCustomEvent = new CustomEvent(ShopUi_components_organisms_dynamic_notification_area_dynamic_notification_area__WEBPACK_IMPORTED_MODULE_2__["EVENT_UPDATE_DYNAMIC_MESSAGES"], {
        detail: response.messages
      });
      document.dispatchEvent(dynamicNotificationCustomEvent);
    })();
  }

  updateTableHtml(response) {
    var _this4 = this;

    return _asyncToGenerator(function* () {
      _this4.rows.innerHTML = response;
      yield Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_1__["mount"])();

      _this4.registerRemoveRowTriggers();

      _this4.mapRemoveRowTriggersEvents();
    })();
  }
  /**
   * Gets an instance of the FormData.
   * @template FormData A data type returned by the function.
   * @param appendData An optional data object for extension of the returned data.
   * @returns A data instance of the FormData type.
   */


  getFormData(appendData) {
    var data = new FormData(this.form);

    if (appendData) {
      Object.keys(appendData).forEach(key => data.append(key, appendData[key]));
    }

    return data;
  }

}

/***/ }),

/***/ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/dynamic-notification-area/dynamic-notification-area.ts":
/*!***********************************************************************************************************************************************************!*\
  !*** ./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/dynamic-notification-area/dynamic-notification-area.ts ***!
  \***********************************************************************************************************************************************************/
/*! exports provided: EVENT_UPDATE_DYNAMIC_MESSAGES, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EVENT_UPDATE_DYNAMIC_MESSAGES", function() { return EVENT_UPDATE_DYNAMIC_MESSAGES; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return DynamicNotificationArea; });
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");


/**
 * @event updateDynamicMessages An event emitted when need to update messages.
 */

var EVENT_UPDATE_DYNAMIC_MESSAGES = 'updateDynamicMessages';
class DynamicNotificationArea extends _models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.target = void 0;
  }

  readyCallback() {}

  init() {
    this.target = document.getElementsByClassName(this.targetClassName)[0];
    this.mapEvents();
  }

  mapEvents() {
    this.mapTriggerCustomUpdateMessagesEvent();
  }

  mapTriggerCustomUpdateMessagesEvent() {
    document.addEventListener(EVENT_UPDATE_DYNAMIC_MESSAGES, event => this.updateMessages(event.detail));
  }

  updateMessages(responseHtml) {
    if (!responseHtml) {
      return;
    }

    var notificationArea = this.target || this;
    notificationArea.insertAdjacentHTML('beforeend', responseHtml);
    Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_1__["mount"])();
  }

  get targetClassName() {
    return this.getAttribute('target-class-name');
  }

}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3F1aWNrLW9yZGVyLXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUXVpY2tPcmRlclBhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9xdWljay1vcmRlci1mb3JtL3F1aWNrLW9yZGVyLWZvcm0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvb3JnYW5pc21zL2R5bmFtaWMtbm90aWZpY2F0aW9uLWFyZWEvZHluYW1pYy1ub3RpZmljYXRpb24tYXJlYS50cyJdLCJuYW1lcyI6WyJRdWlja09yZGVyRm9ybSIsIkNvbXBvbmVudCIsImZvcm0iLCJyb3dzIiwiYWRkUm93VHJpZ2dlciIsInJlbW92ZVJvd1RyaWdnZXJzIiwiYWRkUm93QWpheFByb3ZpZGVyIiwicmVtb3ZlUm93QWpheFByb3ZpZGVyIiwicmVhZHlDYWxsYmFjayIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJyZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzIiwibWFwRXZlbnRzIiwiQXJyYXkiLCJmcm9tIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25BZGRSb3dDbGljayIsIm1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzIiwiZm9yRWFjaCIsInRyaWdnZXIiLCJvblJlbW92ZVJvd0NsaWNrIiwicHJldmVudERlZmF1bHQiLCJhZGRSb3ciLCJyb3ciLCJjdXJyZW50VGFyZ2V0Iiwicm93SW5kZXgiLCJnZXRBdHRyaWJ1dGUiLCJyZW1vdmVSb3ciLCJkYXRhIiwiZ2V0Rm9ybURhdGEiLCJyZXNwb25zZSIsImZldGNoIiwiaW5uZXJIVE1MIiwibW91bnQiLCJwYXJzZWRSZXNwb25zZSIsInBhcnNlUmVzcG9uc2UiLCJzaG93Rmxhc2hNZXNzYWdlIiwidXBkYXRlVGFibGVIdG1sIiwiSlNPTiIsInBhcnNlIiwiaGFzTWVzc2FnZXMiLCJkeW5hbWljTm90aWZpY2F0aW9uQ3VzdG9tRXZlbnQiLCJDdXN0b21FdmVudCIsIkVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTIiwiZGV0YWlsIiwibWVzc2FnZXMiLCJkb2N1bWVudCIsImRpc3BhdGNoRXZlbnQiLCJhcHBlbmREYXRhIiwiRm9ybURhdGEiLCJPYmplY3QiLCJrZXlzIiwia2V5IiwiYXBwZW5kIiwiRHluYW1pY05vdGlmaWNhdGlvbkFyZWEiLCJ0YXJnZXQiLCJpbml0IiwidGFyZ2V0Q2xhc3NOYW1lIiwibWFwVHJpZ2dlckN1c3RvbVVwZGF0ZU1lc3NhZ2VzRXZlbnQiLCJ1cGRhdGVNZXNzYWdlcyIsInJlc3BvbnNlSHRtbCIsIm5vdGlmaWNhdGlvbkFyZWEiLCJpbnNlcnRBZGphY2VudEhUTUwiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUVBO0FBQ0E7QUFFZSxNQUFNQSxjQUFOLFNBQTZCQywrREFBN0IsQ0FBdUM7QUFBQTtBQUFBO0FBQUEsU0FJbERDLElBSmtEO0FBQUEsU0FTbERDLElBVGtEO0FBQUEsU0FjbERDLGFBZGtEO0FBQUEsU0FtQmxEQyxpQkFuQmtEO0FBQUEsU0F3QmxEQyxrQkF4QmtEO0FBQUEsU0E2QmxEQyxxQkE3QmtEO0FBQUE7O0FBK0J4Q0MsZUFBYSxHQUFTO0FBQzVCLFNBQUtOLElBQUwsR0FBNkIsS0FBS08sc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBN0I7QUFDQSxTQUFLUCxJQUFMLEdBQXlCLEtBQUtNLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLGFBQW9ELENBQXBELENBQXpCO0FBQ0EsU0FBS04sYUFBTCxHQUFrQyxLQUFLSyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyx3QkFBK0QsQ0FBL0QsQ0FBbEM7QUFDQSxTQUFLSixrQkFBTCxHQUF3QyxLQUFLRyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyx5QkFBZ0UsQ0FB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QUs5QyxTQUFMO0FBQ0g7O0FBRVNBLFdBQVMsR0FBUztBQUN4QixTQUFLK0MsbUNBQUw7QUFDSDs7QUFFU0EscUNBQW1DLEdBQVM7QUFDbERaLFlBQVEsQ0FBQ2hDLGdCQUFULENBQTBCNkIsNkJBQTFCLEVBQTBENUIsS0FBRCxJQUNyRCxLQUFLNEMsY0FBTCxDQUFvQjVDLEtBQUssQ0FBQzZCLE1BQTFCLENBREo7QUFHSDs7QUFFU2UsZ0JBQWMsQ0FBQ0MsWUFBRCxFQUE2QjtBQUNqRCxRQUFJLENBQUNBLFlBQUwsRUFBbUI7QUFDZjtBQUNIOztBQUNELFFBQU1DLGdCQUFnQixHQUFHLEtBQUtOLE1BQUwsSUFBZSxJQUF4QztBQUNBTSxvQkFBZ0IsQ0FBQ0Msa0JBQWpCLENBQW9DLFdBQXBDLEVBQWlERixZQUFqRDtBQUNBM0IsNERBQUs7QUFDUjs7QUFFNEIsTUFBZndCLGVBQWUsR0FBVztBQUNwQyxXQUFPLEtBQUsvQixZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7O0FBL0IwRCxDIiwiZmlsZSI6Ii4vanMveXZlc19kZWZhdWx0LnF1aWNrLW9yZGVyLWZvcm0uanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBBamF4UHJvdmlkZXIgZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL2FqYXgtcHJvdmlkZXIvYWpheC1wcm92aWRlcic7XG5pbXBvcnQgeyBtb3VudCB9IGZyb20gJ1Nob3BVaS9hcHAnO1xuaW1wb3J0IHsgRVZFTlRfVVBEQVRFX0RZTkFNSUNfTUVTU0FHRVMgfSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9vcmdhbmlzbXMvZHluYW1pYy1ub3RpZmljYXRpb24tYXJlYS9keW5hbWljLW5vdGlmaWNhdGlvbi1hcmVhJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUXVpY2tPcmRlckZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIFRoZSBjdXJyZW50IGZvcm0uXG4gICAgICovXG4gICAgZm9ybTogSFRNTEZvcm1FbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIHJvd3Mgb2YgdGhlIGN1cnJlbnQgZm9ybXMuXG4gICAgICovXG4gICAgcm93czogSFRNTEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBFbGVtZW50IHdpY2ggY3JlYXRzIHRoZSBmb3Igcm93LlxuICAgICAqL1xuICAgIGFkZFJvd1RyaWdnZXI6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogQ29sbGVjdGlvbiBvZiB0aGUgZWxlbWVudHMgd2hpY2ggcmVtb3ZlIHRoZSBmb3JtIHJvdy5cbiAgICAgKi9cbiAgICByZW1vdmVSb3dUcmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIEVsZW1lbnQgY3JlYXRlcyB0aGUgQWpheFByb3ZpZGVyIGNvbXBvbmVudCBmb3IgdGhlIGZvcm0gcm93LlxuICAgICAqL1xuICAgIGFkZFJvd0FqYXhQcm92aWRlcjogQWpheFByb3ZpZGVyO1xuXG4gICAgLyoqXG4gICAgICogRWxlbWVudCByZW1vdmVzIHRoZSBBamF4UHJvdmlkZXIgY29tcG9uZW50IGZyb20gdGhlIGZvcm0gcm93LlxuICAgICAqL1xuICAgIHJlbW92ZVJvd0FqYXhQcm92aWRlcjogQWpheFByb3ZpZGVyO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZm9ybWApWzBdO1xuICAgICAgICB0aGlzLnJvd3MgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcm93c2ApWzBdO1xuICAgICAgICB0aGlzLmFkZFJvd1RyaWdnZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWRkLXJvdy10cmlnZ2VyYClbMF07XG4gICAgICAgIHRoaXMuYWRkUm93QWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19hZGQtcm93LXByb3ZpZGVyYClbMF07XG4gICAgICAgIHRoaXMucmVtb3ZlUm93QWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yZW1vdmUtcm93LXByb3ZpZGVyYClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlZ2lzdGVyUmVtb3ZlUm93VHJpZ2dlcnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucmVtb3ZlUm93VHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3JlbW92ZS1yb3ctdHJpZ2dlcmApKVxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWRkUm93VHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25BZGRSb3dDbGljayhldmVudCkpO1xuICAgICAgICB0aGlzLm1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbW92ZVJvd1RyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblJlbW92ZVJvd0NsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkFkZFJvd0NsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmFkZFJvdygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblJlbW92ZVJvd0NsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgIGNvbnN0IHJvdyA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICBjb25zdCByb3dJbmRleCA9IHJvdy5nZXRBdHRyaWJ1dGUoJ2RhdGEtcm93LWluZGV4Jyk7XG4gICAgICAgIHRoaXMucmVtb3ZlUm93KHJvd0luZGV4KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZW5kcyBhbiBhamF4IHJlcXVlc3QgdG8gdGhlIHNlcnZlciBhbmQgcmVuZGVycyB0aGUgcmVzcG9uc2Ugb24gdGhlIHBhZ2UuXG4gICAgICogQHRlbXBsYXRlIHZpb2QgVGhlIGFyZ3VtZW50IHR5cGUgcmV0dXJuZWQgYnkgYSBzdWNjZXNzZnVsIHByb21pc2UuXG4gICAgICovXG4gICAgYXN5bmMgYWRkUm93KCk6IFByb21pc2U8dm9pZD4ge1xuICAgICAgICBjb25zdCBkYXRhID0gdGhpcy5nZXRGb3JtRGF0YSgpO1xuICAgICAgICBjb25zdCByZXNwb25zZSA9IGF3YWl0IHRoaXMuYWRkUm93QWpheFByb3ZpZGVyLmZldGNoKGRhdGEpO1xuXG4gICAgICAgIHRoaXMucm93cy5pbm5lckhUTUwgPSByZXNwb25zZTtcbiAgICAgICAgYXdhaXQgbW91bnQoKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwUmVtb3ZlUm93VHJpZ2dlcnNFdmVudHMoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZW5kcyBhbiBhamF4IHJlcXVlc3QgdG8gdGhlIHNlcnZlciBhbmQgcmVuZGVycyB0aGUgcmVzcG9uc2Ugb24gdGhlIHBhZ2UuXG4gICAgICogQHRlbXBsYXRlIHZpb2QgVGhlIGFyZ3VtZW50IHR5cGUgcmV0dXJuZWQgYnkgYSBzdWNjZXNzZnVsIHByb21pc2UuXG4gICAgICogQHBhcmFtIHJvd0luZGV4IEEgcm93IHN0cmluZyBpbmRleCB1c2VkIGZvciByZW1vdmFsLlxuICAgICAqL1xuICAgIGFzeW5jIHJlbW92ZVJvdyhyb3dJbmRleDogc3RyaW5nKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIGNvbnN0IGRhdGEgPSB0aGlzLmdldEZvcm1EYXRhKHtcbiAgICAgICAgICAgICdyb3ctaW5kZXgnOiByb3dJbmRleCxcbiAgICAgICAgfSk7XG4gICAgICAgIGNvbnN0IHJlc3BvbnNlID0gYXdhaXQgdGhpcy5yZW1vdmVSb3dBamF4UHJvdmlkZXIuZmV0Y2goZGF0YSk7XG4gICAgICAgIGNvbnN0IHBhcnNlZFJlc3BvbnNlID0gdGhpcy5wYXJzZVJlc3BvbnNlKHJlc3BvbnNlKTtcblxuICAgICAgICBpZiAodHlwZW9mIHBhcnNlZFJlc3BvbnNlICE9PSAnc3RyaW5nJykge1xuICAgICAgICAgICAgdGhpcy5zaG93Rmxhc2hNZXNzYWdlKHBhcnNlZFJlc3BvbnNlKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy51cGRhdGVUYWJsZUh0bWwocmVzcG9uc2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBwYXJzZVJlc3BvbnNlKHJlc3BvbnNlOiBzdHJpbmcpOiBzdHJpbmcgfCBvYmplY3Qge1xuICAgICAgICB0cnkge1xuICAgICAgICAgICAgcmV0dXJuIEpTT04ucGFyc2UocmVzcG9uc2UpO1xuICAgICAgICB9IGNhdGNoIHtcbiAgICAgICAgICAgIHJldHVybiByZXNwb25zZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBoYXNNZXNzYWdlcyhyZXNwb25zZTogb2JqZWN0KTogcmVzcG9uc2UgaXMgeyBtZXNzYWdlczogc3RyaW5nIH0ge1xuICAgICAgICByZXR1cm4gJ21lc3NhZ2VzJyBpbiByZXNwb25zZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgYXN5bmMgc2hvd0ZsYXNoTWVzc2FnZShyZXNwb25zZTogb2JqZWN0KTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIGlmICghdGhpcy5oYXNNZXNzYWdlcyhyZXNwb25zZSkpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICBjb25zdCBkeW5hbWljTm90aWZpY2F0aW9uQ3VzdG9tRXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0RZTkFNSUNfTUVTU0FHRVMsIHtcbiAgICAgICAgICAgIGRldGFpbDogcmVzcG9uc2UubWVzc2FnZXMsXG4gICAgICAgIH0pO1xuICAgICAgICBkb2N1bWVudC5kaXNwYXRjaEV2ZW50KGR5bmFtaWNOb3RpZmljYXRpb25DdXN0b21FdmVudCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFzeW5jIHVwZGF0ZVRhYmxlSHRtbChyZXNwb25zZTogc3RyaW5nKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIHRoaXMucm93cy5pbm5lckhUTUwgPSByZXNwb25zZTtcbiAgICAgICAgYXdhaXQgbW91bnQoKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwUmVtb3ZlUm93VHJpZ2dlcnNFdmVudHMoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGFuIGluc3RhbmNlIG9mIHRoZSBGb3JtRGF0YS5cbiAgICAgKiBAdGVtcGxhdGUgRm9ybURhdGEgQSBkYXRhIHR5cGUgcmV0dXJuZWQgYnkgdGhlIGZ1bmN0aW9uLlxuICAgICAqIEBwYXJhbSBhcHBlbmREYXRhIEFuIG9wdGlvbmFsIGRhdGEgb2JqZWN0IGZvciBleHRlbnNpb24gb2YgdGhlIHJldHVybmVkIGRhdGEuXG4gICAgICogQHJldHVybnMgQSBkYXRhIGluc3RhbmNlIG9mIHRoZSBGb3JtRGF0YSB0eXBlLlxuICAgICAqL1xuICAgIGdldEZvcm1EYXRhKGFwcGVuZERhdGE/OiBvYmplY3QpOiBGb3JtRGF0YSB7XG4gICAgICAgIGNvbnN0IGRhdGEgPSBuZXcgRm9ybURhdGEodGhpcy5mb3JtKTtcblxuICAgICAgICBpZiAoYXBwZW5kRGF0YSkge1xuICAgICAgICAgICAgT2JqZWN0LmtleXMoYXBwZW5kRGF0YSkuZm9yRWFjaCgoa2V5OiBzdHJpbmcpID0+IGRhdGEuYXBwZW5kKGtleSwgYXBwZW5kRGF0YVtrZXldKSk7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gZGF0YTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IHsgbW91bnQgfSBmcm9tICdTaG9wVWkvYXBwJztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlRHluYW1pY01lc3NhZ2VzIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiBuZWVkIHRvIHVwZGF0ZSBtZXNzYWdlcy5cbiAqL1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTID0gJ3VwZGF0ZUR5bmFtaWNNZXNzYWdlcyc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIER5bmFtaWNOb3RpZmljYXRpb25BcmVhIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJDdXN0b21VcGRhdGVNZXNzYWdlc0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJDdXN0b21VcGRhdGVNZXNzYWdlc0V2ZW50KCk6IHZvaWQge1xuICAgICAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKEVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTLCAoZXZlbnQ6IEN1c3RvbUV2ZW50KSA9PlxuICAgICAgICAgICAgdGhpcy51cGRhdGVNZXNzYWdlcyhldmVudC5kZXRhaWwpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVNZXNzYWdlcyhyZXNwb25zZUh0bWw6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICBpZiAoIXJlc3BvbnNlSHRtbCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIGNvbnN0IG5vdGlmaWNhdGlvbkFyZWEgPSB0aGlzLnRhcmdldCB8fCB0aGlzO1xuICAgICAgICBub3RpZmljYXRpb25BcmVhLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgcmVzcG9uc2VIdG1sKTtcbiAgICAgICAgbW91bnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==