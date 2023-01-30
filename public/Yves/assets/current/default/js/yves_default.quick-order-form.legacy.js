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
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");
/* harmony import */ var ShopUi_components_organisms_dynamic_notification_area_dynamic_notification_area__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ShopUi/components/organisms/dynamic-notification-area/dynamic-notification-area */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/dynamic-notification-area/dynamic-notification-area.ts");







var QuickOrderForm = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_2___default()(QuickOrderForm, _Component);

  function QuickOrderForm() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.form = void 0;
    _this.rows = void 0;
    _this.addRowTrigger = void 0;
    _this.removeRowTriggers = void 0;
    _this.addRowAjaxProvider = void 0;
    _this.removeRowAjaxProvider = void 0;
    return _this;
  }

  var _proto = QuickOrderForm.prototype;

  _proto.readyCallback = function readyCallback() {
    this.form = this.getElementsByClassName(this.jsName + "__form")[0];
    this.rows = this.getElementsByClassName(this.jsName + "__rows")[0];
    this.addRowTrigger = this.getElementsByClassName(this.jsName + "__add-row-trigger")[0];
    this.addRowAjaxProvider = this.getElementsByClassName(this.jsName + "__add-row-provider")[0];
    this.removeRowAjaxProvider = this.getElementsByClassName(this.jsName + "__remove-row-provider")[0];
    this.registerRemoveRowTriggers();
    this.mapEvents();
  };

  _proto.registerRemoveRowTriggers = function registerRemoveRowTriggers() {
    this.removeRowTriggers = Array.from(this.getElementsByClassName(this.jsName + "__remove-row-trigger"));
  };

  _proto.mapEvents = function mapEvents() {
    var _this2 = this;

    this.addRowTrigger.addEventListener('click', function (event) {
      return _this2.onAddRowClick(event);
    });
    this.mapRemoveRowTriggersEvents();
  };

  _proto.mapRemoveRowTriggersEvents = function mapRemoveRowTriggersEvents() {
    var _this3 = this;

    this.removeRowTriggers.forEach(function (trigger) {
      trigger.addEventListener('click', function (event) {
        return _this3.onRemoveRowClick(event);
      });
    });
  };

  _proto.onAddRowClick = function onAddRowClick(event) {
    event.preventDefault();
    this.addRow();
  };

  _proto.onRemoveRowClick = function onRemoveRowClick(event) {
    event.preventDefault();
    var row = event.currentTarget;
    var rowIndex = row.getAttribute('data-row-index');
    this.removeRow(rowIndex);
  }
  /**
   * Sends an ajax request to the server and renders the response on the page.
   * @template viod The argument type returned by a successful promise.
   */
  ;

  _proto.addRow =
  /*#__PURE__*/
  function () {
    var _addRow = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      var data, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              data = this.getFormData();
              _context.next = 3;
              return this.addRowAjaxProvider.fetch(data);

            case 3:
              response = _context.sent;
              this.rows.innerHTML = response;
              _context.next = 7;
              return Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_4__["mount"])();

            case 7:
              this.registerRemoveRowTriggers();
              this.mapRemoveRowTriggersEvents();

            case 9:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this);
    }));

    function addRow() {
      return _addRow.apply(this, arguments);
    }

    return addRow;
  }()
  /**
   * Sends an ajax request to the server and renders the response on the page.
   * @template viod The argument type returned by a successful promise.
   * @param rowIndex A row string index used for removal.
   */
  ;

  _proto.removeRow =
  /*#__PURE__*/
  function () {
    var _removeRow = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2(rowIndex) {
      var data, response, parsedResponse;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
        while (1) {
          switch (_context2.prev = _context2.next) {
            case 0:
              data = this.getFormData({
                'row-index': rowIndex
              });
              _context2.next = 3;
              return this.removeRowAjaxProvider.fetch(data);

            case 3:
              response = _context2.sent;
              parsedResponse = this.parseResponse(response);

              if (!(typeof parsedResponse !== 'string')) {
                _context2.next = 8;
                break;
              }

              this.showFlashMessage(parsedResponse);
              return _context2.abrupt("return");

            case 8:
              this.updateTableHtml(response);

            case 9:
            case "end":
              return _context2.stop();
          }
        }
      }, _callee2, this);
    }));

    function removeRow(_x) {
      return _removeRow.apply(this, arguments);
    }

    return removeRow;
  }();

  _proto.parseResponse = function parseResponse(response) {
    try {
      return JSON.parse(response);
    } catch (_unused) {
      return response;
    }
  };

  _proto.hasMessages = function hasMessages(response) {
    return 'messages' in response;
  };

  _proto.showFlashMessage = /*#__PURE__*/function () {
    var _showFlashMessage = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3(response) {
      var dynamicNotificationCustomEvent;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              if (this.hasMessages(response)) {
                _context3.next = 2;
                break;
              }

              return _context3.abrupt("return");

            case 2:
              dynamicNotificationCustomEvent = new CustomEvent(ShopUi_components_organisms_dynamic_notification_area_dynamic_notification_area__WEBPACK_IMPORTED_MODULE_5__["EVENT_UPDATE_DYNAMIC_MESSAGES"], {
                detail: response.messages
              });
              document.dispatchEvent(dynamicNotificationCustomEvent);

            case 4:
            case "end":
              return _context3.stop();
          }
        }
      }, _callee3, this);
    }));

    function showFlashMessage(_x2) {
      return _showFlashMessage.apply(this, arguments);
    }

    return showFlashMessage;
  }();

  _proto.updateTableHtml = /*#__PURE__*/function () {
    var _updateTableHtml = _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4(response) {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              this.rows.innerHTML = response;
              _context4.next = 3;
              return Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_4__["mount"])();

            case 3:
              this.registerRemoveRowTriggers();
              this.mapRemoveRowTriggersEvents();

            case 5:
            case "end":
              return _context4.stop();
          }
        }
      }, _callee4, this);
    }));

    function updateTableHtml(_x3) {
      return _updateTableHtml.apply(this, arguments);
    }

    return updateTableHtml;
  }()
  /**
   * Gets an instance of the FormData.
   * @template FormData A data type returned by the function.
   * @param appendData An optional data object for extension of the returned data.
   * @returns A data instance of the FormData type.
   */
  ;

  _proto.getFormData = function getFormData(appendData) {
    var data = new FormData(this.form);

    if (appendData) {
      Object.keys(appendData).forEach(function (key) {
        return data.append(key, appendData[key]);
      });
    }

    return data;
  };

  return QuickOrderForm;
}(ShopUi_models_component__WEBPACK_IMPORTED_MODULE_3__["default"]);



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
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/inheritsLoose */ "./node_modules/@babel/runtime/helpers/inheritsLoose.js");
/* harmony import */ var _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _models_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");
/* harmony import */ var ShopUi_app__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ShopUi/app */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/app/index.ts");




/**
 * @event updateDynamicMessages An event emitted when need to update messages.
 */

var EVENT_UPDATE_DYNAMIC_MESSAGES = 'updateDynamicMessages';

var DynamicNotificationArea = /*#__PURE__*/function (_Component) {
  _babel_runtime_helpers_inheritsLoose__WEBPACK_IMPORTED_MODULE_1___default()(DynamicNotificationArea, _Component);

  function DynamicNotificationArea() {
    var _this;

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _Component.call.apply(_Component, [this].concat(args)) || this;
    _this.target = void 0;
    return _this;
  }

  var _proto = DynamicNotificationArea.prototype;

  _proto.readyCallback = function readyCallback() {};

  _proto.init = function init() {
    this.target = document.getElementsByClassName(this.targetClassName)[0];
    this.mapEvents();
  };

  _proto.mapEvents = function mapEvents() {
    this.mapTriggerCustomUpdateMessagesEvent();
  };

  _proto.mapTriggerCustomUpdateMessagesEvent = function mapTriggerCustomUpdateMessagesEvent() {
    var _this2 = this;

    document.addEventListener(EVENT_UPDATE_DYNAMIC_MESSAGES, function (event) {
      return _this2.updateMessages(event.detail);
    });
  };

  _proto.updateMessages = function updateMessages(responseHtml) {
    if (!responseHtml) {
      return;
    }

    var notificationArea = this.target || this;
    notificationArea.insertAdjacentHTML('beforeend', responseHtml);
    Object(ShopUi_app__WEBPACK_IMPORTED_MODULE_3__["mount"])();
  };

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_0___default()(DynamicNotificationArea, [{
    key: "targetClassName",
    get: function get() {
      return this.getAttribute('target-class-name');
    }
  }]);

  return DynamicNotificationArea;
}(_models_component__WEBPACK_IMPORTED_MODULE_2__["default"]);



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3Ivc3ByeWtlci1zaG9wL3F1aWNrLW9yZGVyLXBhZ2Uvc3JjL1NwcnlrZXJTaG9wL1l2ZXMvUXVpY2tPcmRlclBhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy9xdWljay1vcmRlci1mb3JtL3F1aWNrLW9yZGVyLWZvcm0udHMiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3NwcnlrZXItc2hvcC9zaG9wLXVpL3NyYy9TcHJ5a2VyU2hvcC9ZdmVzL1Nob3BVaS9UaGVtZS9kZWZhdWx0L2NvbXBvbmVudHMvb3JnYW5pc21zL2R5bmFtaWMtbm90aWZpY2F0aW9uLWFyZWEvZHluYW1pYy1ub3RpZmljYXRpb24tYXJlYS50cyJdLCJuYW1lcyI6WyJRdWlja09yZGVyRm9ybSIsImZvcm0iLCJyb3dzIiwiYWRkUm93VHJpZ2dlciIsInJlbW92ZVJvd1RyaWdnZXJzIiwiYWRkUm93QWpheFByb3ZpZGVyIiwicmVtb3ZlUm93QWpheFByb3ZpZGVyIiwicmVhZHlDYWxsYmFjayIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJqc05hbWUiLCJyZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzIiwibWFwRXZlbnRzIiwiQXJyYXkiLCJmcm9tIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwib25BZGRSb3dDbGljayIsIm1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzIiwiZm9yRWFjaCIsInRyaWdnZXIiLCJvblJlbW92ZVJvd0NsaWNrIiwicHJldmVudERlZmF1bHQiLCJhZGRSb3ciLCJyb3ciLCJjdXJyZW50VGFyZ2V0Iiwicm93SW5kZXgiLCJnZXRBdHRyaWJ1dGUiLCJyZW1vdmVSb3ciLCJkYXRhIiwiZ2V0Rm9ybURhdGEiLCJmZXRjaCIsInJlc3BvbnNlIiwiaW5uZXJIVE1MIiwibW91bnQiLCJwYXJzZWRSZXNwb25zZSIsInBhcnNlUmVzcG9uc2UiLCJzaG93Rmxhc2hNZXNzYWdlIiwidXBkYXRlVGFibGVIdG1sIiwiSlNPTiIsInBhcnNlIiwiaGFzTWVzc2FnZXMiLCJkeW5hbWljTm90aWZpY2F0aW9uQ3VzdG9tRXZlbnQiLCJDdXN0b21FdmVudCIsIkVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTIiwiZGV0YWlsIiwibWVzc2FnZXMiLCJkb2N1bWVudCIsImRpc3BhdGNoRXZlbnQiLCJhcHBlbmREYXRhIiwiRm9ybURhdGEiLCJPYmplY3QiLCJrZXlzIiwia2V5IiwiYXBwZW5kIiwiQ29tcG9uZW50IiwiRHluYW1pY05vdGlmaWNhdGlvbkFyZWEiLCJ0YXJnZXQiLCJpbml0IiwidGFyZ2V0Q2xhc3NOYW1lIiwibWFwVHJpZ2dlckN1c3RvbVVwZGF0ZU1lc3NhZ2VzRXZlbnQiLCJ1cGRhdGVNZXNzYWdlcyIsInJlc3BvbnNlSHRtbCIsIm5vdGlmaWNhdGlvbkFyZWEiLCJpbnNlcnRBZGphY2VudEhUTUwiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBRUE7QUFDQTs7SUFFcUJBLGM7Ozs7Ozs7Ozs7O1VBSWpCQyxJO1VBS0FDLEk7VUFLQUMsYTtVQUtBQyxpQjtVQUtBQyxrQjtVQUtBQyxxQjs7Ozs7O1NBRVVDLGEsR0FBVix5QkFBZ0M7QUFDNUIsU0FBS04sSUFBTCxHQUE2QixLQUFLTyxzQkFBTCxDQUErQixLQUFLQyxNQUFwQyxhQUFvRCxDQUFwRCxDQUE3QjtBQUNBLFNBQUtQLElBQUwsR0FBeUIsS0FBS00sc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsYUFBb0QsQ0FBcEQsQ0FBekI7QUFDQSxTQUFLTixhQUFMLEdBQWtDLEtBQUtLLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHdCQUErRCxDQUEvRCxDQUFsQztBQUNBLFNBQUtKLGtCQUFMLEdBQXdDLEtBQUtHLHNCQUFMLENBQStCLEtBQUtDLE1BQXBDLHlCQUFnRSxDQUFoRSxDQUF4QztBQUNBLFNBQUtILHFCQUFMLEdBQ0ksS0FBS0Usc0JBQUwsQ0FBK0IsS0FBS0MsTUFBcEMsNEJBQW1FLENBQW5FLENBREo7QUFHQSxT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LEdBQUcsdUJBQXRDOztJQUVjWSx1Qjs7Ozs7Ozs7Ozs7VUFDUEMsTTs7Ozs7O1NBRUFqRCxhLEdBQVYseUJBQWdDLENBQUUsQzs7U0FFeEJrRCxJLEdBQVYsZ0JBQXVCO0FBQ25CLFNBQUtELE1BQUwsR0FBMkJWLFFBQVEsQ0FBQ3RDLHNCQUFULENBQWdDLEtBQUtrRCxlQUFyQyxFQUFzRCxDQUF0RCxDQUEzQjtBQUNBLFNBQUsvQyxTQUFMO0FBQ0gsRzs7U0FFU0EsUyxHQUFWLHFCQUE0QjtBQUN4QixTQUFLZ0QsbUNBQUw7QUFDSCxHOztTQUVTQSxtQyxHQUFWLCtDQUFzRDtBQUFBOztBQUNsRGIsWUFBUSxDQUFDaEMsZ0JBQVQsQ0FBMEI2Qiw2QkFBMUIsRUFBeUQsVUFBQzVCLEtBQUQ7QUFBQSxhQUNyRCxNQUFJLENBQUM2QyxjQUFMLENBQW9CN0MsS0FBSyxDQUFDNkIsTUFBMUIsQ0FEcUQ7QUFBQSxLQUF6RDtBQUdILEc7O1NBRVNnQixjLEdBQVYsd0JBQXlCQyxZQUF6QixFQUFxRDtBQUNqRCxRQUFJLENBQUNBLFlBQUwsRUFBbUI7QUFDZjtBQUNIOztBQUNELFFBQU1DLGdCQUFnQixHQUFHLEtBQUtOLE1BQUwsSUFBZSxJQUF4QztBQUNBTSxvQkFBZ0IsQ0FBQ0Msa0JBQWpCLENBQW9DLFdBQXBDLEVBQWlERixZQUFqRDtBQUNBNUIsNERBQUs7QUFDUixHOzs7O1NBRUQsZUFBd0M7QUFDcEMsYUFBTyxLQUFLUCxZQUFMLENBQWtCLG1CQUFsQixDQUFQO0FBQ0g7Ozs7RUEvQmdENEIseUQiLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQucXVpY2stb3JkZXItZm9ybS5sZWdhY3kuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgQ29tcG9uZW50IGZyb20gJ1Nob3BVaS9tb2RlbHMvY29tcG9uZW50JztcbmltcG9ydCBBamF4UHJvdmlkZXIgZnJvbSAnU2hvcFVpL2NvbXBvbmVudHMvbW9sZWN1bGVzL2FqYXgtcHJvdmlkZXIvYWpheC1wcm92aWRlcic7XG5pbXBvcnQgeyBtb3VudCB9IGZyb20gJ1Nob3BVaS9hcHAnO1xuaW1wb3J0IHsgRVZFTlRfVVBEQVRFX0RZTkFNSUNfTUVTU0FHRVMgfSBmcm9tICdTaG9wVWkvY29tcG9uZW50cy9vcmdhbmlzbXMvZHluYW1pYy1ub3RpZmljYXRpb24tYXJlYS9keW5hbWljLW5vdGlmaWNhdGlvbi1hcmVhJztcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgUXVpY2tPcmRlckZvcm0gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIC8qKlxuICAgICAqIFRoZSBjdXJyZW50IGZvcm0uXG4gICAgICovXG4gICAgZm9ybTogSFRNTEZvcm1FbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogVGhlIHJvd3Mgb2YgdGhlIGN1cnJlbnQgZm9ybXMuXG4gICAgICovXG4gICAgcm93czogSFRNTEVsZW1lbnQ7XG5cbiAgICAvKipcbiAgICAgKiBFbGVtZW50IHdpY2ggY3JlYXRzIHRoZSBmb3Igcm93LlxuICAgICAqL1xuICAgIGFkZFJvd1RyaWdnZXI6IEhUTUxFbGVtZW50O1xuXG4gICAgLyoqXG4gICAgICogQ29sbGVjdGlvbiBvZiB0aGUgZWxlbWVudHMgd2hpY2ggcmVtb3ZlIHRoZSBmb3JtIHJvdy5cbiAgICAgKi9cbiAgICByZW1vdmVSb3dUcmlnZ2VyczogSFRNTEVsZW1lbnRbXTtcblxuICAgIC8qKlxuICAgICAqIEVsZW1lbnQgY3JlYXRlcyB0aGUgQWpheFByb3ZpZGVyIGNvbXBvbmVudCBmb3IgdGhlIGZvcm0gcm93LlxuICAgICAqL1xuICAgIGFkZFJvd0FqYXhQcm92aWRlcjogQWpheFByb3ZpZGVyO1xuXG4gICAgLyoqXG4gICAgICogRWxlbWVudCByZW1vdmVzIHRoZSBBamF4UHJvdmlkZXIgY29tcG9uZW50IGZyb20gdGhlIGZvcm0gcm93LlxuICAgICAqL1xuICAgIHJlbW92ZVJvd0FqYXhQcm92aWRlcjogQWpheFByb3ZpZGVyO1xuXG4gICAgcHJvdGVjdGVkIHJlYWR5Q2FsbGJhY2soKTogdm9pZCB7XG4gICAgICAgIHRoaXMuZm9ybSA9IDxIVE1MRm9ybUVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fZm9ybWApWzBdO1xuICAgICAgICB0aGlzLnJvd3MgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fcm93c2ApWzBdO1xuICAgICAgICB0aGlzLmFkZFJvd1RyaWdnZXIgPSA8SFRNTEVsZW1lbnQ+dGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGAke3RoaXMuanNOYW1lfV9fYWRkLXJvdy10cmlnZ2VyYClbMF07XG4gICAgICAgIHRoaXMuYWRkUm93QWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19hZGQtcm93LXByb3ZpZGVyYClbMF07XG4gICAgICAgIHRoaXMucmVtb3ZlUm93QWpheFByb3ZpZGVyID0gPEFqYXhQcm92aWRlcj4oXG4gICAgICAgICAgICB0aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X19yZW1vdmUtcm93LXByb3ZpZGVyYClbMF1cbiAgICAgICAgKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIHJlZ2lzdGVyUmVtb3ZlUm93VHJpZ2dlcnMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMucmVtb3ZlUm93VHJpZ2dlcnMgPSA8SFRNTEVsZW1lbnRbXT4oXG4gICAgICAgICAgICBBcnJheS5mcm9tKHRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3JlbW92ZS1yb3ctdHJpZ2dlcmApKVxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMuYWRkUm93VHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25BZGRSb3dDbGljayhldmVudCkpO1xuICAgICAgICB0aGlzLm1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzKCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFJlbW92ZVJvd1RyaWdnZXJzRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLnJlbW92ZVJvd1RyaWdnZXJzLmZvckVhY2goKHRyaWdnZXI6IEhUTUxFbGVtZW50KSA9PiB7XG4gICAgICAgICAgICB0cmlnZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50OiBFdmVudCkgPT4gdGhpcy5vblJlbW92ZVJvd0NsaWNrKGV2ZW50KSk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkFkZFJvd0NsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLmFkZFJvdygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvblJlbW92ZVJvd0NsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgIGNvbnN0IHJvdyA9IDxIVE1MRWxlbWVudD5ldmVudC5jdXJyZW50VGFyZ2V0O1xuICAgICAgICBjb25zdCByb3dJbmRleCA9IHJvdy5nZXRBdHRyaWJ1dGUoJ2RhdGEtcm93LWluZGV4Jyk7XG4gICAgICAgIHRoaXMucmVtb3ZlUm93KHJvd0luZGV4KTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZW5kcyBhbiBhamF4IHJlcXVlc3QgdG8gdGhlIHNlcnZlciBhbmQgcmVuZGVycyB0aGUgcmVzcG9uc2Ugb24gdGhlIHBhZ2UuXG4gICAgICogQHRlbXBsYXRlIHZpb2QgVGhlIGFyZ3VtZW50IHR5cGUgcmV0dXJuZWQgYnkgYSBzdWNjZXNzZnVsIHByb21pc2UuXG4gICAgICovXG4gICAgYXN5bmMgYWRkUm93KCk6IFByb21pc2U8dm9pZD4ge1xuICAgICAgICBjb25zdCBkYXRhID0gdGhpcy5nZXRGb3JtRGF0YSgpO1xuICAgICAgICBjb25zdCByZXNwb25zZSA9IGF3YWl0IHRoaXMuYWRkUm93QWpheFByb3ZpZGVyLmZldGNoKGRhdGEpO1xuXG4gICAgICAgIHRoaXMucm93cy5pbm5lckhUTUwgPSByZXNwb25zZTtcbiAgICAgICAgYXdhaXQgbW91bnQoKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwUmVtb3ZlUm93VHJpZ2dlcnNFdmVudHMoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBTZW5kcyBhbiBhamF4IHJlcXVlc3QgdG8gdGhlIHNlcnZlciBhbmQgcmVuZGVycyB0aGUgcmVzcG9uc2Ugb24gdGhlIHBhZ2UuXG4gICAgICogQHRlbXBsYXRlIHZpb2QgVGhlIGFyZ3VtZW50IHR5cGUgcmV0dXJuZWQgYnkgYSBzdWNjZXNzZnVsIHByb21pc2UuXG4gICAgICogQHBhcmFtIHJvd0luZGV4IEEgcm93IHN0cmluZyBpbmRleCB1c2VkIGZvciByZW1vdmFsLlxuICAgICAqL1xuICAgIGFzeW5jIHJlbW92ZVJvdyhyb3dJbmRleDogc3RyaW5nKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIGNvbnN0IGRhdGEgPSB0aGlzLmdldEZvcm1EYXRhKHtcbiAgICAgICAgICAgICdyb3ctaW5kZXgnOiByb3dJbmRleCxcbiAgICAgICAgfSk7XG4gICAgICAgIGNvbnN0IHJlc3BvbnNlID0gYXdhaXQgdGhpcy5yZW1vdmVSb3dBamF4UHJvdmlkZXIuZmV0Y2goZGF0YSk7XG4gICAgICAgIGNvbnN0IHBhcnNlZFJlc3BvbnNlID0gdGhpcy5wYXJzZVJlc3BvbnNlKHJlc3BvbnNlKTtcblxuICAgICAgICBpZiAodHlwZW9mIHBhcnNlZFJlc3BvbnNlICE9PSAnc3RyaW5nJykge1xuICAgICAgICAgICAgdGhpcy5zaG93Rmxhc2hNZXNzYWdlKHBhcnNlZFJlc3BvbnNlKTtcblxuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy51cGRhdGVUYWJsZUh0bWwocmVzcG9uc2UpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBwYXJzZVJlc3BvbnNlKHJlc3BvbnNlOiBzdHJpbmcpOiBzdHJpbmcgfCBvYmplY3Qge1xuICAgICAgICB0cnkge1xuICAgICAgICAgICAgcmV0dXJuIEpTT04ucGFyc2UocmVzcG9uc2UpO1xuICAgICAgICB9IGNhdGNoIHtcbiAgICAgICAgICAgIHJldHVybiByZXNwb25zZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIHByb3RlY3RlZCBoYXNNZXNzYWdlcyhyZXNwb25zZTogb2JqZWN0KTogcmVzcG9uc2UgaXMgeyBtZXNzYWdlczogc3RyaW5nIH0ge1xuICAgICAgICByZXR1cm4gJ21lc3NhZ2VzJyBpbiByZXNwb25zZTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgYXN5bmMgc2hvd0ZsYXNoTWVzc2FnZShyZXNwb25zZTogb2JqZWN0KTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIGlmICghdGhpcy5oYXNNZXNzYWdlcyhyZXNwb25zZSkpIHtcbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuICAgICAgICBjb25zdCBkeW5hbWljTm90aWZpY2F0aW9uQ3VzdG9tRXZlbnQgPSBuZXcgQ3VzdG9tRXZlbnQoRVZFTlRfVVBEQVRFX0RZTkFNSUNfTUVTU0FHRVMsIHtcbiAgICAgICAgICAgIGRldGFpbDogcmVzcG9uc2UubWVzc2FnZXMsXG4gICAgICAgIH0pO1xuICAgICAgICBkb2N1bWVudC5kaXNwYXRjaEV2ZW50KGR5bmFtaWNOb3RpZmljYXRpb25DdXN0b21FdmVudCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGFzeW5jIHVwZGF0ZVRhYmxlSHRtbChyZXNwb25zZTogc3RyaW5nKTogUHJvbWlzZTx2b2lkPiB7XG4gICAgICAgIHRoaXMucm93cy5pbm5lckhUTUwgPSByZXNwb25zZTtcbiAgICAgICAgYXdhaXQgbW91bnQoKTtcbiAgICAgICAgdGhpcy5yZWdpc3RlclJlbW92ZVJvd1RyaWdnZXJzKCk7XG4gICAgICAgIHRoaXMubWFwUmVtb3ZlUm93VHJpZ2dlcnNFdmVudHMoKTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBHZXRzIGFuIGluc3RhbmNlIG9mIHRoZSBGb3JtRGF0YS5cbiAgICAgKiBAdGVtcGxhdGUgRm9ybURhdGEgQSBkYXRhIHR5cGUgcmV0dXJuZWQgYnkgdGhlIGZ1bmN0aW9uLlxuICAgICAqIEBwYXJhbSBhcHBlbmREYXRhIEFuIG9wdGlvbmFsIGRhdGEgb2JqZWN0IGZvciBleHRlbnNpb24gb2YgdGhlIHJldHVybmVkIGRhdGEuXG4gICAgICogQHJldHVybnMgQSBkYXRhIGluc3RhbmNlIG9mIHRoZSBGb3JtRGF0YSB0eXBlLlxuICAgICAqL1xuICAgIGdldEZvcm1EYXRhKGFwcGVuZERhdGE/OiBvYmplY3QpOiBGb3JtRGF0YSB7XG4gICAgICAgIGNvbnN0IGRhdGEgPSBuZXcgRm9ybURhdGEodGhpcy5mb3JtKTtcblxuICAgICAgICBpZiAoYXBwZW5kRGF0YSkge1xuICAgICAgICAgICAgT2JqZWN0LmtleXMoYXBwZW5kRGF0YSkuZm9yRWFjaCgoa2V5OiBzdHJpbmcpID0+IGRhdGEuYXBwZW5kKGtleSwgYXBwZW5kRGF0YVtrZXldKSk7XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gZGF0YTtcbiAgICB9XG59XG4iLCJpbXBvcnQgQ29tcG9uZW50IGZyb20gJy4uLy4uLy4uL21vZGVscy9jb21wb25lbnQnO1xuaW1wb3J0IHsgbW91bnQgfSBmcm9tICdTaG9wVWkvYXBwJztcblxuLyoqXG4gKiBAZXZlbnQgdXBkYXRlRHluYW1pY01lc3NhZ2VzIEFuIGV2ZW50IGVtaXR0ZWQgd2hlbiBuZWVkIHRvIHVwZGF0ZSBtZXNzYWdlcy5cbiAqL1xuZXhwb3J0IGNvbnN0IEVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTID0gJ3VwZGF0ZUR5bmFtaWNNZXNzYWdlcyc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIER5bmFtaWNOb3RpZmljYXRpb25BcmVhIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBwcm90ZWN0ZWQgdGFyZ2V0OiBIVE1MRWxlbWVudDtcblxuICAgIHByb3RlY3RlZCByZWFkeUNhbGxiYWNrKCk6IHZvaWQge31cblxuICAgIHByb3RlY3RlZCBpbml0KCk6IHZvaWQge1xuICAgICAgICB0aGlzLnRhcmdldCA9IDxIVE1MRWxlbWVudD5kb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKHRoaXMudGFyZ2V0Q2xhc3NOYW1lKVswXTtcbiAgICAgICAgdGhpcy5tYXBFdmVudHMoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgbWFwRXZlbnRzKCk6IHZvaWQge1xuICAgICAgICB0aGlzLm1hcFRyaWdnZXJDdXN0b21VcGRhdGVNZXNzYWdlc0V2ZW50KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIG1hcFRyaWdnZXJDdXN0b21VcGRhdGVNZXNzYWdlc0V2ZW50KCk6IHZvaWQge1xuICAgICAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKEVWRU5UX1VQREFURV9EWU5BTUlDX01FU1NBR0VTLCAoZXZlbnQ6IEN1c3RvbUV2ZW50KSA9PlxuICAgICAgICAgICAgdGhpcy51cGRhdGVNZXNzYWdlcyhldmVudC5kZXRhaWwpLFxuICAgICAgICApO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCB1cGRhdGVNZXNzYWdlcyhyZXNwb25zZUh0bWw6IHN0cmluZyk6IHZvaWQge1xuICAgICAgICBpZiAoIXJlc3BvbnNlSHRtbCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIGNvbnN0IG5vdGlmaWNhdGlvbkFyZWEgPSB0aGlzLnRhcmdldCB8fCB0aGlzO1xuICAgICAgICBub3RpZmljYXRpb25BcmVhLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgcmVzcG9uc2VIdG1sKTtcbiAgICAgICAgbW91bnQoKTtcbiAgICB9XG5cbiAgICBwcm90ZWN0ZWQgZ2V0IHRhcmdldENsYXNzTmFtZSgpOiBzdHJpbmcge1xuICAgICAgICByZXR1cm4gdGhpcy5nZXRBdHRyaWJ1dGUoJ3RhcmdldC1jbGFzcy1uYW1lJyk7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ==