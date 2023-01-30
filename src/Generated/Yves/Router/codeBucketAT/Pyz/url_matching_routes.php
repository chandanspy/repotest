<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/error/404' => [[['_route' => 'error/404', '_controller' => ['SprykerShop\\Yves\\ErrorPage\\Controller\\Error404Controller', 'indexAction'], '_template' => 'ErrorPage/error404/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/error/403' => [[['_route' => 'error/403', '_controller' => ['SprykerShop\\Yves\\ErrorPage\\Controller\\Error403Controller', 'indexAction'], '_template' => 'ErrorPage/error403/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/error-page/404' => [[['_route' => 'error-page/404', '_controller' => ['SprykerShop\\Yves\\ErrorPage\\Controller\\Error404CacheableController', 'indexAction'], '_template' => 'ErrorPage/error404-cacheable/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/error-page/403' => [[['_route' => 'error-page/403', '_controller' => ['SprykerShop\\Yves\\ErrorPage\\Controller\\Error403CacheableController', 'indexAction'], '_template' => 'ErrorPage/error403-cacheable/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/error/429' => [[['_route' => 'error/429', '_controller' => ['SprykerShop\\Yves\\ErrorPage\\Controller\\Error429Controller', 'indexAction'], '_template' => 'ErrorPage/error429/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => ['SprykerShop\\Yves\\HomePage\\Controller\\IndexController', 'indexAction'], '_template' => 'HomePage/index/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout-index', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'indexAction'], '_template' => 'CheckoutPage/checkout/index', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/customer' => [[['_route' => 'checkout-customer', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'customerAction'], '_template' => 'CheckoutPage/checkout/customer', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/address' => [[['_route' => 'checkout-address', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'addressAction'], '_template' => 'CheckoutPage/checkout/address', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/shipment' => [[['_route' => 'checkout-shipment', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'shipmentAction'], '_template' => 'CheckoutPage/checkout/shipment', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/payment' => [[['_route' => 'checkout-payment', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'paymentAction'], '_template' => 'CheckoutPage/checkout/payment', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/summary' => [[['_route' => 'checkout-summary', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'summaryAction'], '_template' => 'CheckoutPage/checkout/summary', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/place-order' => [[['_route' => 'checkout-place-order', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'placeOrderAction'], '_template' => 'CheckoutPage/checkout/place-order', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/error' => [[['_route' => 'checkout-error', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'errorAction'], '_template' => 'CheckoutPage/checkout/error', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/success' => [[['_route' => 'checkout-success', '_controller' => ['Pyz\\Yves\\CheckoutPage\\Controller\\CheckoutController', 'successAction'], '_template' => 'CheckoutPage/checkout/success', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AuthController', 'loginAction'], '_template' => 'CustomerPage/auth/login', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AuthController', 'logoutAction'], '_template' => 'CustomerPage/auth/logout', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => ['Pyz\\Yves\\CustomerPage\\Controller\\RegisterController', 'indexAction'], '_template' => 'CustomerPage/register/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/password/forgotten' => [[['_route' => 'password/forgotten', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\PasswordController', 'forgottenPasswordAction'], '_template' => 'CustomerPage/password/forgotten-password', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/password/restore' => [[['_route' => 'password/restore', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\PasswordController', 'restorePasswordAction'], '_template' => 'CustomerPage/password/restore-password', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/overview' => [[['_route' => 'customer/overview', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\CustomerController', 'indexAction'], '_template' => 'CustomerPage/customer/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/profile' => [[['_route' => 'customer/profile', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\ProfileController', 'indexAction'], '_template' => 'CustomerPage/profile/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/address' => [[['_route' => 'customer/address', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AddressController', 'indexAction'], '_template' => 'CustomerPage/address/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/address/new' => [[['_route' => 'customer/address/new', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AddressController', 'createAction'], '_template' => 'CustomerPage/address/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/address/update' => [[['_route' => 'customer/address/update', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AddressController', 'updateAction'], '_template' => 'CustomerPage/address/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/address/delete' => [[['_route' => 'customer/address/delete', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AddressController', 'deleteAction'], '_template' => 'CustomerPage/address/delete', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/address/refresh' => [[['_route' => 'customer/address/refresh', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AddressController', 'refreshAction'], '_template' => 'CustomerPage/address/refresh', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/order' => [[['_route' => 'customer/order', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\OrderController', 'indexAction'], '_template' => 'CustomerPage/order/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/order/details' => [[['_route' => 'customer/order/details', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\OrderController', 'detailsAction'], '_template' => 'CustomerPage/order/details', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/delete' => [[['_route' => 'customer/delete', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\DeleteController', 'indexAction'], '_template' => 'CustomerPage/delete/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/delete/confirm' => [[['_route' => 'customer/delete/confirm', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\DeleteController', 'confirmAction'], '_template' => 'CustomerPage/delete/confirm', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/register/confirm' => [[['_route' => 'register/confirm', '_controller' => ['Pyz\\Yves\\CustomerPage\\Controller\\RegisterController', 'confirmAction'], '_template' => 'CustomerPage/register/confirm', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/customer/order/reorder-items' => [[['_route' => 'customer/order/reorder-items', '_controller' => ['SprykerShop\\Yves\\CustomerReorderWidget\\Controller\\OrderController', 'reorderItemsAction'], '_template' => 'CustomerReorderWidget/order/reorder-items', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/customer/newsletter' => [[['_route' => 'customer/newsletter', '_controller' => ['SprykerShop\\Yves\\NewsletterPage\\Controller\\NewsletterController', 'indexAction'], '_template' => 'NewsletterPage/newsletter/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'indexAction'], '_template' => 'CartPage/cart/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart/add-items' => [[['_route' => 'cart/add-items', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'addItemsAction'], '_template' => 'CartPage/cart/add-items', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/cart/reset-lock' => [[['_route' => 'cart/reset-lock', '_controller' => ['SprykerShop\\Yves\\CartPage\\Controller\\CartLockController', 'resetLockAction'], '_template' => 'CartPage/cart-lock/reset-lock', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart/get-upselling-widget' => [[['_route' => 'cart/get-upselling-widget', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'getUpsellingProductsWidgetAjaxAction'], '_template' => 'CartPage/cart/get-upselling-products-widget-ajax', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0], null, false, false, null]],
        '/cart/get-cart-items' => [[['_route' => 'cart/get-cart-items', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'getCartItemsAjaxAction'], '_template' => 'CartPage/cart/get-cart-items-ajax', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0], null, false, false, null]],
        '/health-check' => [[['_route' => 'health-check', '_controller' => ['Spryker\\Yves\\HealthCheck\\Controller\\IndexController', 'indexAction'], '_template' => 'HealthCheck/index/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/newsletter/subscribe' => [[['_route' => 'newsletter/subscribe', '_controller' => ['SprykerShop\\Yves\\NewsletterWidget\\Controller\\SubscriptionController', 'subscribeAction'], '_template' => 'NewsletterWidget/subscription/subscribe', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/newsletter-widget/subscribe' => [[['_route' => 'newsletter-widget/subscribe', '_controller' => ['SprykerShop\\Yves\\NewsletterWidget\\Controller\\SubscriptionWidgetController', 'subscribeAction'], '_template' => 'NewsletterWidget/subscription-widget/subscribe', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => ['SprykerShop\\Yves\\CatalogPage\\Controller\\CatalogController', 'fulltextSearchAction'], '_template' => 'CatalogPage/catalog/fulltext-search', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/search/suggestion' => [[['_route' => 'search/suggestion', '_controller' => ['SprykerShop\\Yves\\CatalogPage\\Controller\\SuggestionController', 'indexAction'], '_template' => 'CatalogPage/suggestion/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/catalog/change-view-mode' => [[['_route' => 'change-view-mode', '_controller' => ['SprykerShop\\Yves\\CatalogPage\\Controller\\CatalogController', 'changeViewModeAction'], '_template' => 'CatalogPage/catalog/change-view-mode', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/calculation/debug' => [[['_route' => 'calculation-debug', '_controller' => ['SprykerShop\\Yves\\CalculationPage\\Controller\\DebugController', 'cartAction'], '_template' => 'CalculationPage/debug/cart', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0], null, false, false, null]],
        '/product-sets' => [[['_route' => 'product-sets', '_controller' => ['SprykerShop\\Yves\\ProductSetListPage\\Controller\\ListController', 'indexAction'], '_template' => 'ProductSetListPage/list/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/currency/switch' => [[['_route' => 'currency-switch', '_controller' => ['SprykerShop\\Yves\\CurrencyWidget\\Controller\\CurrencySwitchController', 'indexAction'], '_template' => 'CurrencyWidget/currency-switch/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/discount/voucher/add' => [[['_route' => 'discount/voucher/add', '_controller' => ['SprykerShop\\Yves\\DiscountWidget\\Controller\\VoucherController', 'addAction'], '_template' => 'DiscountWidget/voucher/add', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/discount/voucher/remove' => [[['_route' => 'discount/voucher/remove', '_controller' => ['SprykerShop\\Yves\\DiscountWidget\\Controller\\VoucherController', 'removeAction'], '_template' => 'DiscountWidget/voucher/remove', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/discount/voucher/clear' => [[['_route' => 'discount/voucher/clear', '_controller' => ['SprykerShop\\Yves\\DiscountWidget\\Controller\\VoucherController', 'clearAction'], '_template' => 'DiscountWidget/voucher/clear', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/checkout/add-voucher' => [[['_route' => 'checkout-voucher-add', '_controller' => ['SprykerShop\\Yves\\DiscountWidget\\Controller\\CheckoutController', 'addVoucherAction'], '_template' => 'DiscountWidget/checkout/add-voucher', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/price/mode-switch' => [[['_route' => 'price-mode-switch', '_controller' => ['SprykerShop\\Yves\\PriceWidget\\Controller\\PriceModeSwitchController', 'indexAction'], '_template' => 'PriceWidget/price-mode-switch/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart-code/code/add' => [[['_route' => 'cart-code/code/add', '_controller' => ['SprykerShop\\Yves\\CartCodeWidget\\Controller\\CodeController', 'addAction'], '_template' => 'CartCodeWidget/code/add', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart-code/code/remove' => [[['_route' => 'cart-code/code/remove', '_controller' => ['SprykerShop\\Yves\\CartCodeWidget\\Controller\\CodeController', 'removeAction'], '_template' => 'CartCodeWidget/code/remove', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart-code/code/clear' => [[['_route' => 'cart-code/code/clear', '_controller' => ['SprykerShop\\Yves\\CartCodeWidget\\Controller\\CodeController', 'clearAction'], '_template' => 'CartCodeWidget/code/clear', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart-note/quote' => [[['_route' => 'cart-note/quote', '_controller' => ['SprykerShop\\Yves\\CartNoteWidget\\Controller\\QuoteController', 'indexAction'], '_template' => 'CartNoteWidget/quote/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/cart-note/item' => [[['_route' => 'cart-note/item', '_controller' => ['SprykerShop\\Yves\\CartNoteWidget\\Controller\\ItemController', 'indexAction'], '_template' => 'CartNoteWidget/item/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order' => [[['_route' => 'quick-order', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'indexAction'], '_template' => 'QuickOrderPage/quick-order/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order/add-rows' => [[['_route' => 'quick-order/add-rows', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'addRowsAction'], '_template' => 'QuickOrderPage/quick-order/add-rows', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order/delete-row' => [[['_route' => 'quick-order/delete-row', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'deleteRowAction'], '_template' => 'QuickOrderPage/quick-order/delete-row', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order/download-template' => [[['_route' => 'quick-order/download-template', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'downloadTemplateAction'], '_template' => 'QuickOrderPage/quick-order/download-template', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order/clear-all-rows' => [[['_route' => 'quick-order/clear-all-rows', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'clearAllRowsAction'], '_template' => 'QuickOrderPage/quick-order/clear-all-rows', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quick-order/product-additional-data' => [[['_route' => 'quick-order/product-additional-data', '_controller' => ['SprykerShop\\Yves\\QuickOrderPage\\Controller\\QuickOrderController', 'productAdditionalDataAction'], '_template' => 'QuickOrderPage/quick-order/product-additional-data', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/register' => [[['_route' => 'company/register', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\RegisterController', 'indexAction'], '_template' => 'CompanyPage/register/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/overview' => [[['_route' => 'company/overview', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyController', 'indexAction'], '_template' => 'CompanyPage/company/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/address' => [[['_route' => 'company/address', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\AddressController', 'indexAction'], '_template' => 'CompanyPage/address/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/address/create' => [[['_route' => 'company/address/create', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\AddressController', 'createAction'], '_template' => 'CompanyPage/address/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/address/update' => [[['_route' => 'company/address/update', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\AddressController', 'updateAction'], '_template' => 'CompanyPage/address/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/address/delete' => [[['_route' => 'company/address/delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\AddressController', 'deleteAction'], '_template' => 'CompanyPage/address/delete', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/company/address/delete-confirmation' => [[['_route' => 'company/address/delete-confirmation', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\AddressController', 'confirmDeleteAction'], '_template' => 'CompanyPage/address/confirm-delete', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit' => [[['_route' => 'company/business-unit', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'indexAction'], '_template' => 'CompanyPage/business-unit/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/details' => [[['_route' => 'company/business-unit/details', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'detailsAction'], '_template' => 'CompanyPage/business-unit/details', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/create' => [[['_route' => 'company/business-unit/create', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'createAction'], '_template' => 'CompanyPage/business-unit/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/update' => [[['_route' => 'company/business-unit/update', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'updateAction'], '_template' => 'CompanyPage/business-unit/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/delete' => [[['_route' => 'company/business-unit/delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'deleteAction'], '_template' => 'CompanyPage/business-unit/delete', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/company/business-unit/delete-confirmation' => [[['_route' => 'company/business-unit/delete-confirmation', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitController', 'confirmDeleteAction'], '_template' => 'CompanyPage/business-unit/confirm-delete', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/address/create' => [[['_route' => 'company/business-unit/address/create', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitAddressController', 'createAction'], '_template' => 'CompanyPage/business-unit-address/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/business-unit/address/update' => [[['_route' => 'company/business-unit/address/update', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessUnitAddressController', 'updateAction'], '_template' => 'CompanyPage/business-unit-address/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role' => [[['_route' => 'company/company-role', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'indexAction'], '_template' => 'CompanyPage/company-role/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/create' => [[['_route' => 'company/company-role/create', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'createAction'], '_template' => 'CompanyPage/company-role/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/update' => [[['_route' => 'company/company-role/update', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'updateAction'], '_template' => 'CompanyPage/company-role/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/delete' => [[['_route' => 'company/company-role/delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'deleteAction'], '_template' => 'CompanyPage/company-role/delete', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/company/company-role/confirm-delete' => [[['_route' => 'company/company-role/confirm-delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'confirmDeleteAction'], '_template' => 'CompanyPage/company-role/confirm-delete', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/details' => [[['_route' => 'company/company-role/details', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleController', 'detailsAction'], '_template' => 'CompanyPage/company-role/details', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role-permission/configure' => [[['_route' => 'company/company-role-permission/configure', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRolePermissionController', 'configureAction'], '_template' => 'CompanyPage/company-role-permission/configure', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role-permission/assign' => [[['_route' => 'company/company-role-permission/assign', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRolePermissionController', 'assignAction'], '_template' => 'CompanyPage/company-role-permission/assign', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role-permission/unassign' => [[['_route' => 'company/company-role-permission/unassign', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRolePermissionController', 'unassignAction'], '_template' => 'CompanyPage/company-role-permission/unassign', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user' => [[['_route' => 'company/user', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\UserController', 'indexAction'], '_template' => 'CompanyPage/user/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user/create' => [[['_route' => 'company/user/create', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\UserController', 'createAction'], '_template' => 'CompanyPage/user/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user/update' => [[['_route' => 'company/user/update', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\UserController', 'updateAction'], '_template' => 'CompanyPage/user/update', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user/delete' => [[['_route' => 'company/user/delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\UserController', 'deleteAction'], '_template' => 'CompanyPage/user/delete', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/company/user/confirm-delete' => [[['_route' => 'company/user/confirm-delete', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\UserController', 'confirmDeleteAction'], '_template' => 'CompanyPage/user/confirm-delete', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user/select' => [[['_route' => 'company/user/select', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\BusinessOnBehalfController', 'selectCompanyUserAction'], '_template' => 'CompanyPage/business-on-behalf/select-company-user', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/user/manage' => [[['_route' => 'company/company-role/user/manage', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleUserController', 'manageAction'], '_template' => 'CompanyPage/company-role-user/manage', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/user/assign' => [[['_route' => 'company/company-role/user/assign', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleUserController', 'assignAction'], '_template' => 'CompanyPage/company-role-user/assign', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-role/user/unassign' => [[['_route' => 'company/company-role/user/unassign', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyRoleUserController', 'unassignAction'], '_template' => 'CompanyPage/company-role-user/unassign', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-user-status/enable' => [[['_route' => 'company/company-user-status/enable', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyUserStatusController', 'enableAction'], '_template' => 'CompanyPage/company-user-status/enable', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/company-user-status/disable' => [[['_route' => 'company/company-user-status/disable', '_controller' => ['SprykerShop\\Yves\\CompanyPage\\Controller\\CompanyUserStatusController', 'disableAction'], '_template' => 'CompanyPage/company-user-status/disable', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/multi-cart/create' => [[['_route' => 'multi-cart/create', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'createAction'], '_template' => 'MultiCartPage/multi-cart/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/multi-cart' => [[['_route' => 'multi-cart', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'indexAction'], '_template' => 'MultiCartPage/multi-cart/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/shopping-list' => [[['_route' => 'shopping-list', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListOverviewController', 'indexAction'], '_template' => 'ShoppingListPage/shopping-list-overview/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/shopping-list/add-to-cart' => [[['_route' => 'shopping-list/add-to-cart', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListController', 'addToCartAction'], '_template' => 'ShoppingListPage/shopping-list/add-to-cart', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/shopping-list/add-shopping-list-to-cart' => [[['_route' => 'shopping-list/add-shopping-list-to-cart', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListOverviewController', 'addShoppingListToCartAction'], '_template' => 'ShoppingListPage/shopping-list-overview/add-shopping-list-to-cart', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/shopping-list/add-item' => [[['_route' => 'shopping-list/add-item', '_controller' => ['Pyz\\Yves\\ShoppingListWidget\\Controller\\ShoppingListWidgetController', 'indexAction'], '_template' => 'ShoppingListWidget/shopping-list-widget/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/shopping-list/create-from-cart' => [[['_route' => 'shopping-list/create-from-cart', '_controller' => ['SprykerShop\\Yves\\ShoppingListWidget\\Controller\\CartToShoppingListController', 'createFromCartAction'], '_template' => 'ShoppingListWidget/cart-to-shopping-list/create-from-cart', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation' => [[['_route' => 'company/user-invitation', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\ImportController', 'indexAction'], '_template' => 'CompanyUserInvitationPage/import/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/get-import-errors' => [[['_route' => 'company/user-invitation/get-import-errors', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\ImportController', 'getErrorsAction'], '_template' => 'CompanyUserInvitationPage/import/get-errors', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/send' => [[['_route' => 'company/user-invitation/send', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\SendController', 'sendCompanyUserInvitationAction'], '_template' => 'CompanyUserInvitationPage/send/send-company-user-invitation', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/send-all' => [[['_route' => 'company/user-invitation/send-all', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\SendController', 'sendCompanyUserInvitationsAction'], '_template' => 'CompanyUserInvitationPage/send/send-company-user-invitations', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/resend' => [[['_route' => 'company/user-invitation/resend', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\ResendController', 'indexAction'], '_template' => 'CompanyUserInvitationPage/resend/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/resend/confirm' => [[['_route' => 'company/user-invitation/resend/confirm', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\ResendController', 'confirmAction'], '_template' => 'CompanyUserInvitationPage/resend/confirm', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/delete' => [[['_route' => 'company/user-invitation/delete', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\DeleteController', 'indexAction'], '_template' => 'CompanyUserInvitationPage/delete/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/company/user-invitation/delete/confirm' => [[['_route' => 'company/user-invitation/delete/confirm', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\DeleteController', 'confirmAction'], '_template' => 'CompanyUserInvitationPage/delete/confirm', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/invitation/accept' => [[['_route' => 'invitation/accept', '_controller' => ['SprykerShop\\Yves\\CompanyUserInvitationPage\\Controller\\AcceptController', 'indexAction'], '_template' => 'CompanyUserInvitationPage/accept/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/login' => [[['_route' => 'agent/login', '_controller' => ['SprykerShop\\Yves\\AgentPage\\Controller\\AuthController', 'loginAction'], '_template' => 'AgentPage/auth/login', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/overview' => [[['_route' => 'agent/overview', '_controller' => ['SprykerShop\\Yves\\AgentPage\\Controller\\AgentController', 'indexAction'], '_template' => 'AgentPage/agent/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent-widget/customer-autocomplete' => [[['_route' => 'agent-widget/customer-autocomplete', '_controller' => ['SprykerShop\\Yves\\AgentWidget\\Controller\\CustomerAutocompleteController', 'indexAction'], '_template' => 'AgentWidget/customer-autocomplete/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/files/download' => [[['_route' => 'files/download', '_controller' => ['SprykerShop\\Yves\\FileManagerWidget\\Controller\\DownloadController', 'indexAction'], '_template' => 'FileManagerWidget/download/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/search/cms' => [[['_route' => 'search-cms', '_controller' => ['SprykerShop\\Yves\\CmsSearchPage\\Controller\\CmsSearchController', 'fulltextSearchAction'], '_template' => 'CmsSearchPage/cms-search/fulltext-search', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/product-search/product-quick-add' => [[['_route' => 'product-quick-add', '_controller' => ['SprykerShop\\Yves\\ProductSearchWidget\\Controller\\ProductConcreteAddController', 'indexAction'], '_template' => 'ProductSearchWidget/product-concrete-add/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/product-search/product-concrete-search' => [[['_route' => 'product-search/product-concrete-search', '_controller' => ['SprykerShop\\Yves\\ProductSearchWidget\\Controller\\ProductConcreteSearchController', 'indexAction'], '_template' => 'ProductSearchWidget/product-concrete-search/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/availability-notification/subscribe' => [[['_route' => 'availability-notification/subscribe', '_controller' => ['SprykerShop\\Yves\\AvailabilityNotificationWidget\\Controller\\AvailabilityNotificationSubscriptionController', 'subscribeAction'], '_template' => 'AvailabilityNotificationWidget/availability-notification-subscription/subscribe', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/availability-notification/unsubscribe' => [[['_route' => 'availability-notification/unsubscribe', '_controller' => ['SprykerShop\\Yves\\AvailabilityNotificationWidget\\Controller\\AvailabilityNotificationSubscriptionController', 'unsubscribeAction'], '_template' => 'AvailabilityNotificationWidget/availability-notification-subscription/unsubscribe', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-approval/create' => [[['_route' => 'quote-approval-create', '_controller' => ['SprykerShop\\Yves\\QuoteApprovalWidget\\Controller\\QuoteApprovalController', 'createQuoteApprovalAction'], '_template' => 'QuoteApprovalWidget/quote-approval/create-quote-approval', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/quote-request' => [[['_route' => 'agent/quote-request', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentViewController', 'indexAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-view/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/quote-request/create' => [[['_route' => 'agent/quote-request/create', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCreateController', 'createAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-create/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/quote-request/checkout-save' => [[['_route' => 'agent/quote-request/checkout-save', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentSaveController', 'saveAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-save/save', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/quote-request/cart/save' => [[['_route' => 'agent/quote-request/cart/save', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentWidget\\Controller\\QuoteRequestAgentCartController', 'saveAction'], '_template' => 'QuoteRequestAgentWidget/quote-request-agent-cart/save', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/agent/quote-request/cart/clear' => [[['_route' => 'agent/quote-request/cart/clear', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentWidget\\Controller\\QuoteRequestAgentCartController', 'clearAction'], '_template' => 'QuoteRequestAgentWidget/quote-request-agent-cart/clear', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-request' => [[['_route' => 'quote-request', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestViewController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-view/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-request/create' => [[['_route' => 'quote-request/create', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestCreateController', 'createAction'], '_template' => 'QuoteRequestPage/quote-request-create/create', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-request/save' => [[['_route' => 'quote-request/save', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestSaveController', 'saveAction'], '_template' => 'QuoteRequestPage/quote-request-save/save', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-request/cart/save' => [[['_route' => 'quote-request/cart/save', '_controller' => ['SprykerShop\\Yves\\QuoteRequestWidget\\Controller\\QuoteRequestCartController', 'saveAction'], '_template' => 'QuoteRequestWidget/quote-request-cart/save', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/quote-request/cart/clear' => [[['_route' => 'quote-request/cart/clear', '_controller' => ['SprykerShop\\Yves\\QuoteRequestWidget\\Controller\\QuoteRequestCartController', 'clearAction'], '_template' => 'QuoteRequestWidget/quote-request-cart/clear', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'comment/add', '_controller' => ['SprykerShop\\Yves\\CommentWidget\\Controller\\CommentController', 'addAction'], '_template' => 'CommentWidget/comment/add', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/comment/update' => [[['_route' => 'comment/update', '_controller' => ['SprykerShop\\Yves\\CommentWidget\\Controller\\CommentController', 'updateAction'], '_template' => 'CommentWidget/comment/update', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/comment/remove' => [[['_route' => 'comment/remove', '_controller' => ['SprykerShop\\Yves\\CommentWidget\\Controller\\CommentController', 'removeAction'], '_template' => 'CommentWidget/comment/remove', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/agent/company-user/autocomplete' => [[['_route' => 'agent/company-user/autocomplete', '_controller' => ['SprykerShop\\Yves\\CompanyUserAgentWidget\\Controller\\CompanyUserAutocompleteController', 'indexAction'], '_template' => 'CompanyUserAgentWidget/company-user-autocomplete/index', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/configurable-bundle/configurator/template-selection' => [[['_route' => 'configurable-bundle/configurator/template-selection', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundlePage\\Controller\\ConfiguratorController', 'templateSelectionAction'], '_template' => 'ConfigurableBundlePage/configurator/template-selection', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/configurable-bundle-note/add' => [[['_route' => 'configurable-bundle-note/add', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundleNoteWidget\\Controller\\NoteController', 'addAction'], '_template' => 'ConfigurableBundleNoteWidget/note/add', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/order-custom-reference/save' => [[['_route' => 'order-custom-reference/save', '_controller' => ['SprykerShop\\Yves\\OrderCustomReferenceWidget\\Controller\\OrderCustomReferenceController', 'saveAction'], '_template' => 'OrderCustomReferenceWidget/order-custom-reference/save', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/return/list' => [[['_route' => 'return/list', '_controller' => ['SprykerShop\\Yves\\SalesReturnPage\\Controller\\ReturnListController', 'listAction'], '_template' => 'SalesReturnPage/return-list/list', 'language' => 'en', 'store' => 'US'], null, null, null, false, false, null]],
        '/order/cancel' => [[['_route' => 'order/cancel', '_controller' => ['SprykerShop\\Yves\\OrderCancelWidget\\Controller\\OrderCancelController', 'indexAction'], '_template' => 'OrderCancelWidget/order-cancel/index', 'language' => 'en', 'store' => 'US'], null, ['POST' => 0], null, false, false, null]],
        '/payment/order-success' => [[['_route' => 'payment-success', '_controller' => ['SprykerShop\\Yves\\PaymentPage\\Controller\\PaymentSuccessController', 'indexAction'], '_template' => 'PaymentPage/payment-success/index', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0], null, false, false, null]],
        '/payment/order-cancel' => [[['_route' => 'payment-cancel', '_controller' => ['SprykerShop\\Yves\\PaymentPage\\Controller\\PaymentCancelController', 'indexAction'], '_template' => 'PaymentPage/payment-cancel/index', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0], null, false, false, null]],
        '/store-locations' => [[['_route' => 'store-locations-index', '_controller' => ['Pyz\\Yves\\StoreLocations\\Controller\\IndexController', 'indexAction'], '_template' => 'StoreLocations/index/index', 'language' => 'en', 'store' => 'US'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ccess\\-token/([a-zA-Z0-9-_\\.]+)(*:43)'
                    .'|vailability\\-notification/unsubscribe\\-by\\-key/([0-9A-Za-z]{32})(*:114)'
                    .'|gent/quote\\-request/(?'
                        .'|c(?'
                            .'|ancel/([a-zA-Z0-9-]+)(*:170)'
                            .'|onvert\\-to\\-cart/([a-zA-Z0-9-]+)(*:210)'
                            .'|heckout\\-(?'
                                .'|address(?'
                                    .'|/([a-zA-Z0-9-]+)(*:256)'
                                    .'|\\-confirm/([a-zA-Z0-9-]+)(*:289)'
                                .')'
                                .'|shipment(?'
                                    .'|/([a-zA-Z0-9-]+)(*:325)'
                                    .'|\\-confirm/([a-zA-Z0-9-]+)(*:358)'
                                .')'
                            .')'
                        .')'
                        .'|details/([a-zA-Z0-9-]+)(*:392)'
                        .'|revise/([a-zA-Z0-9-]+)(*:422)'
                        .'|edit(?'
                            .'|/([a-zA-Z0-9-]+)(*:453)'
                            .'|\\-items(?'
                                .'|/([a-zA-Z0-9-]+)(*:487)'
                                .'|\\-confirm/([a-zA-Z0-9-]+)(*:520)'
                            .')'
                        .')'
                        .'|send\\-to\\-customer/([a-zA-Z0-9-]+)(*:564)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ustomer/order/(\\d+)/reorder(*:606)'
                    .'|art/(?'
                        .'|add(?'
                            .'|/([a-zA-Z0-9-_\\.]+)(*:646)'
                            .'|\\-ajax/([a-zA-Z0-9-_\\.]+)(*:679)'
                        .')'
                        .'|remove/([a-zA-Z0-9-_\\.]+)(?:/([^/]++))?(*:727)'
                        .'|c(?'
                            .'|hange/([a-zA-Z0-9-_\\.]+)(*:763)'
                            .'|reate\\-link/(\\d+)/([^/]++)(*:797)'
                            .'|onfigured\\-bundle/(?'
                                .'|remove/([^/]++)(*:841)'
                                .'|change/([^/]++)(*:864)'
                            .')'
                        .')'
                        .'|update/([a-zA-Z0-9-_\\.]+)(*:899)'
                        .'|quick\\-add/([a-zA-Z0-9-_\\.]+)(*:936)'
                        .'|preview/([^/]++)(*:960)'
                    .')'
                    .'|ms/preview/([0-9]+)(*:988)'
                    .'|o(?'
                        .'|mment/(?'
                            .'|([a-zA-Z0-9-_\\.]+)/tag/add(*:1035)'
                            .'|([a-zA-Z0-9-_\\.]+)/tag/remove(*:1073)'
                        .')'
                        .'|nfigurable\\-bundle/configurator/(?'
                            .'|(\\d+)/slots(?:/(\\d+))?(*:1140)'
                            .'|(\\d+)/summary(*:1162)'
                            .'|(\\d+)/add\\-to\\-cart(*:1190)'
                        .')'
                    .')'
                .')'
                .'|/outlet(?:(\\/.+))?(*:1220)'
                .'|/new(?:(\\/.+))?(*:1244)'
                .'|/product\\-review/(?'
                    .'|index/([1-9][0-9]*)(*:1292)'
                    .'|create/([1-9][0-9]*)(*:1321)'
                .')'
                .'|/multi\\-cart/(?'
                    .'|update/(\\d+)(*:1359)'
                    .'|d(?'
                        .'|elete/(\\d+)(*:1383)'
                        .'|uplicate/(\\d+)(*:1406)'
                    .')'
                    .'|c(?'
                        .'|onfirm\\-delete/(\\d+)(*:1440)'
                        .'|lear/(\\d+)(*:1459)'
                    .')'
                    .'|set\\-default/(\\d+)(*:1487)'
                .')'
                .'|/s(?'
                    .'|et\\-default\\-back/(\\d+)(*:1525)'
                    .'|h(?'
                        .'|ared\\-cart/(?'
                            .'|share/([^/]++)(*:1566)'
                            .'|dismiss(?'
                                .'|/([^/]++)(*:1594)'
                                .'|\\-confirm/([^/]++)(*:1621)'
                            .')'
                        .')'
                        .'|opping\\-list/(?'
                            .'|update/(\\d+)(*:1660)'
                            .'|d(?'
                                .'|e(?'
                                    .'|lete/(?'
                                        .'|(\\d+)(*:1690)'
                                        .'|(\\d+)/confirm(*:1712)'
                                    .')'
                                    .'|tails/(\\d+)(*:1733)'
                                .')'
                                .'|ismiss(?'
                                    .'|/(\\d+)(*:1758)'
                                    .'|\\-confirm/(\\d+)(*:1782)'
                                .')'
                            .')'
                            .'|remove\\-item/(\\d+)/(\\d+)(*:1817)'
                            .'|share/(\\d+)(*:1837)'
                            .'|print/(\\d+)(*:1857)'
                            .'|c(?'
                                .'|reate\\-from\\-exist\\-cart/(\\d+)(*:1900)'
                                .'|lear/(\\d+)(*:1919)'
                            .')'
                            .'|quick\\-add\\-item/([a-zA-Z0-9-_\\.]+)(*:1964)'
                        .')'
                    .')'
                .')'
                .'|/quote\\-(?'
                    .'|approval/(?'
                        .'|approve/(\\d+)(*:2012)'
                        .'|decline/(\\d+)(*:2034)'
                        .'|(\\d+)/remove(*:2055)'
                    .')'
                    .'|request/(?'
                        .'|revise/([a-zA-Z0-9-]+)(*:2098)'
                        .'|edit(?'
                            .'|/([a-zA-Z0-9-]+)(*:2130)'
                            .'|\\-(?'
                                .'|items(?'
                                    .'|/([a-zA-Z0-9-]+)(*:2168)'
                                    .'|\\-confirm/([a-zA-Z0-9-]+)(*:2202)'
                                .')'
                                .'|address(?'
                                    .'|/([a-zA-Z0-9-]+)(*:2238)'
                                    .'|\\-confirm/([a-zA-Z0-9-]+)(*:2272)'
                                .')'
                                .'|shipment(?'
                                    .'|/([a-zA-Z0-9-]+)(*:2309)'
                                    .'|\\-confirm/([a-zA-Z0-9-]+)(*:2343)'
                                .')'
                            .')'
                        .')'
                        .'|send\\-to\\-user/([a-zA-Z0-9-]+)(*:2385)'
                        .'|c(?'
                            .'|ancel/([a-zA-Z0-9-]+)(*:2419)'
                            .'|onvert\\-to\\-cart/([a-zA-Z0-9-]+)(*:2460)'
                        .')'
                        .'|details/([a-zA-Z0-9-]+)(*:2493)'
                    .')'
                .')'
                .'|/re(?'
                    .'|source\\-share/link/([^/]++)(*:2537)'
                    .'|turn/(?'
                        .'|create/([a-zA-Z0-9-]+)(*:2576)'
                        .'|view/([a-zA-Z0-9-]+)(*:2605)'
                        .'|slip\\-print/([a-zA-Z0-9-]+)(*:2641)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'token', '_controller' => ['SprykerShop\\Yves\\CustomerPage\\Controller\\AccessTokenController', 'indexAction'], '_template' => 'CustomerPage/access-token/index', 'language' => 'en', 'store' => 'US'], ['token'], null, null, false, true, null]],
        114 => [[['_route' => 'availability-notification/unsubscribe-by-key', '_controller' => ['SprykerShop\\Yves\\AvailabilityNotificationPage\\Controller\\AvailabilityNotificationPageController', 'unsubscribeByKeyAction'], '_template' => 'AvailabilityNotificationPage/availability-notification-page/unsubscribe-by-key', 'language' => 'en', 'store' => 'US'], ['subscriptionKey'], null, null, false, true, null]],
        170 => [[['_route' => 'agent/quote-request/cancel', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentDeleteController', 'cancelAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-delete/cancel', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        210 => [[['_route' => 'agent/quote-request/convert-to-cart', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCheckoutController', 'convertToCartAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-checkout/convert-to-cart', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        256 => [[['_route' => 'agent/quote-request/checkout-address', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCheckoutAddressController', 'indexAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-checkout-address/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        289 => [[['_route' => 'agent/quote-request/checkout-address-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCheckoutAddressController', 'confirmAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-checkout-address/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        325 => [[['_route' => 'agent/quote-request/checkout-shipment', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCheckoutShipmentController', 'indexAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-checkout-shipment/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        358 => [[['_route' => 'agent/quote-request/checkout-shipment-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentCheckoutShipmentController', 'confirmAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-checkout-shipment/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        392 => [[['_route' => 'agent/quote-request/details', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentViewController', 'detailsAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-view/details', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        422 => [[['_route' => 'agent/quote-request/revise', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentReviseController', 'indexAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-revise/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        453 => [[['_route' => 'agent/quote-request/edit', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentEditController', 'editAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-edit/edit', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        487 => [[['_route' => 'agent/quote-request/edit-items', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentEditItemsController', 'indexAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-edit-items/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        520 => [[['_route' => 'agent/quote-request/edit-items-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentEditItemsController', 'confirmAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-edit-items/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        564 => [[['_route' => 'agent/quote-request/send-to-customer', '_controller' => ['SprykerShop\\Yves\\QuoteRequestAgentPage\\Controller\\QuoteRequestAgentEditController', 'sendToCustomerAction'], '_template' => 'QuoteRequestAgentPage/quote-request-agent-edit/send-to-customer', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        606 => [[['_route' => 'customer/order/reorder', '_controller' => ['SprykerShop\\Yves\\CustomerReorderWidget\\Controller\\OrderController', 'reorderAction'], '_template' => 'CustomerReorderWidget/order/reorder', 'language' => 'en', 'store' => 'US'], ['idSalesOrder'], null, null, false, false, null]],
        646 => [[['_route' => 'cart/add', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'addAction'], '_template' => 'CartPage/cart/add', 'language' => 'en', 'store' => 'US'], ['sku'], ['POST' => 0], null, false, true, null]],
        679 => [[['_route' => 'cart/add-ajax', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'addAjaxAction'], '_template' => 'CartPage/cart/add-ajax', 'language' => 'en', 'store' => 'US'], ['sku'], ['POST' => 0], null, false, true, null]],
        727 => [[['_route' => 'cart/remove', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'removeAction'], '_template' => 'CartPage/cart/remove', 'groupKey' => '', 'language' => 'en', 'store' => 'US'], ['sku', 'groupKey'], ['POST' => 0], null, false, true, null]],
        763 => [[['_route' => 'cart/change/quantity', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'changeAction'], '_template' => 'CartPage/cart/change', 'language' => 'en', 'store' => 'US'], ['sku'], ['POST' => 0], null, false, true, null]],
        797 => [[['_route' => 'cart/create-link', '_controller' => ['SprykerShop\\Yves\\PersistentCartShareWidget\\Controller\\PersistentCartShareWidgetController', 'indexAction'], '_template' => 'PersistentCartShareWidget/persistent-cart-share-widget/index', 'language' => 'en', 'store' => 'US'], ['idQuote', 'shareOptionGroup'], null, null, false, true, null]],
        841 => [[['_route' => 'cart/configured-bundle/remove', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundleWidget\\Controller\\CartController', 'removeConfiguredBundleAction'], '_template' => 'ConfigurableBundleWidget/cart/remove-configured-bundle', 'language' => 'en', 'store' => 'US'], ['configuredBundleGroupKey'], null, null, false, true, null]],
        864 => [[['_route' => 'cart/configured-bundle/change', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundleWidget\\Controller\\CartController', 'changeConfiguredBundleQuantityAction'], '_template' => 'ConfigurableBundleWidget/cart/change-configured-bundle-quantity', 'language' => 'en', 'store' => 'US'], ['configuredBundleGroupKey'], ['POST' => 0], null, false, true, null]],
        899 => [[['_route' => 'cart/update', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'updateAction'], '_template' => 'CartPage/cart/update', 'language' => 'en', 'store' => 'US'], ['sku'], ['POST' => 0], null, false, true, null]],
        936 => [[['_route' => 'cart/quick-add', '_controller' => ['Pyz\\Yves\\CartPage\\Controller\\CartController', 'quickAddAction'], '_template' => 'CartPage/cart/quick-add', 'language' => 'en', 'store' => 'US'], ['sku'], null, null, false, true, null]],
        960 => [[['_route' => 'cart/preview', '_controller' => ['SprykerShop\\Yves\\PersistentCartSharePage\\Controller\\CartController', 'previewAction'], '_template' => 'PersistentCartSharePage/cart/preview', 'language' => 'en', 'store' => 'US'], ['resourceShareUuid'], null, null, false, true, null]],
        988 => [[['_route' => 'cms-preview', '_controller' => ['SprykerShop\\Yves\\CmsPage\\Controller\\PreviewController', 'indexAction'], '_template' => 'CmsPage/preview/index', 'language' => 'en', 'store' => 'US'], ['page'], null, null, false, true, null]],
        1035 => [[['_route' => 'comment/tag/add', '_controller' => ['SprykerShop\\Yves\\CommentWidget\\Controller\\CommentTagController', 'addAction'], '_template' => 'CommentWidget/comment-tag/add', 'language' => 'en', 'store' => 'US'], ['uuid'], null, null, false, false, null]],
        1073 => [[['_route' => 'comment/tag/remove', '_controller' => ['SprykerShop\\Yves\\CommentWidget\\Controller\\CommentTagController', 'removeAction'], '_template' => 'CommentWidget/comment-tag/remove', 'language' => 'en', 'store' => 'US'], ['uuid'], null, null, false, false, null]],
        1140 => [[['_route' => 'configurable-bundle/configurator/slots', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundlePage\\Controller\\ConfiguratorController', 'slotsAction'], '_template' => 'ConfigurableBundlePage/configurator/slots', 'idConfigurableBundleTemplateSlot' => null, 'language' => 'en', 'store' => 'US'], ['idConfigurableBundleTemplate', 'idConfigurableBundleTemplateSlot'], null, null, false, true, null]],
        1162 => [[['_route' => 'configurable-bundle/configurator/summary', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundlePage\\Controller\\ConfiguratorController', 'summaryAction'], '_template' => 'ConfigurableBundlePage/configurator/summary', 'language' => 'en', 'store' => 'US'], ['idConfigurableBundleTemplate'], null, null, false, false, null]],
        1190 => [[['_route' => 'configurable-bundle/configurator/add-to-cart', '_controller' => ['SprykerShop\\Yves\\ConfigurableBundlePage\\Controller\\ConfiguratorController', 'addToCartAction'], '_template' => 'ConfigurableBundlePage/configurator/add-to-cart', 'language' => 'en', 'store' => 'US'], ['idConfigurableBundleTemplate'], null, null, false, false, null]],
        1220 => [[['_route' => 'sale', '_controller' => ['Pyz\\Yves\\ExampleProductSalePage\\Controller\\SaleController', 'indexPyzAction'], '_template' => 'ExampleProductSalePage/sale/index-pyz', 'categoryPath' => null, 'language' => 'en', 'store' => 'US'], ['categoryPath'], null, null, false, true, null]],
        1244 => [[['_route' => 'new-products', '_controller' => ['SprykerShop\\Yves\\ProductNewPage\\Controller\\NewProductsController', 'indexAction'], '_template' => 'ProductNewPage/new-products/index', 'categoryPath' => null, 'language' => 'en', 'store' => 'US'], ['categoryPath'], null, null, false, true, null]],
        1292 => [[['_route' => 'product-review/index', '_controller' => ['SprykerShop\\Yves\\ProductReviewWidget\\Controller\\IndexController', 'indexAction'], '_template' => 'ProductReviewWidget/index/index', 'language' => 'en', 'store' => 'US'], ['idProductAbstract'], null, null, false, true, null]],
        1321 => [[['_route' => 'product-review/create', '_controller' => ['SprykerShop\\Yves\\ProductReviewWidget\\Controller\\CreateController', 'indexAction'], '_template' => 'ProductReviewWidget/create/index', 'language' => 'en', 'store' => 'US'], ['idProductAbstract'], null, null, false, true, null]],
        1359 => [[['_route' => 'multi-cart/update', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'updateAction'], '_template' => 'MultiCartPage/multi-cart/update', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1383 => [[['_route' => 'multi-cart/delete', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'deleteAction'], '_template' => 'MultiCartPage/multi-cart/delete', 'language' => 'en', 'store' => 'US'], ['idQuote'], ['POST' => 0], null, false, true, null]],
        1406 => [[['_route' => 'multi-cart/duplicate', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'duplicateAction'], '_template' => 'MultiCartPage/multi-cart/duplicate', 'language' => 'en', 'store' => 'US'], ['idQuote'], ['POST' => 0], null, false, true, null]],
        1440 => [[['_route' => 'multi-cart/confirm-delete', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'confirmDeleteAction'], '_template' => 'MultiCartPage/multi-cart/confirm-delete', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1459 => [[['_route' => 'multi-cart/clear', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'clearAction'], '_template' => 'MultiCartPage/multi-cart/clear', 'language' => 'en', 'store' => 'US'], ['idQuote'], ['POST' => 0], null, false, true, null]],
        1487 => [[['_route' => 'multi-cart/set-default', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'setDefaultAction'], '_template' => 'MultiCartPage/multi-cart/set-default', 'language' => 'en', 'store' => 'US'], ['idQuote'], ['POST' => 0], null, false, true, null]],
        1525 => [[['_route' => 'multi-cart/set-default-back', '_controller' => ['Pyz\\Yves\\MultiCartPage\\Controller\\MultiCartController', 'setPyzDefaultBackAction'], '_template' => 'MultiCartPage/multi-cart/set-pyz-default-back', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1566 => [[['_route' => 'shared-cart/share', '_controller' => ['SprykerShop\\Yves\\SharedCartPage\\Controller\\ShareController', 'indexAction'], '_template' => 'SharedCartPage/share/index', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1594 => [[['_route' => 'shared-cart/dismiss', '_controller' => ['SprykerShop\\Yves\\SharedCartPage\\Controller\\DismissController', 'indexAction'], '_template' => 'SharedCartPage/dismiss/index', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1621 => [[['_route' => 'shared-cart/dismiss-confirm', '_controller' => ['SprykerShop\\Yves\\SharedCartPage\\Controller\\DismissController', 'ConfirmAction'], '_template' => 'SharedCartPage/dismiss/confirm', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1660 => [[['_route' => 'shopping-list/update', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListOverviewController', 'updateAction'], '_template' => 'ShoppingListPage/shopping-list-overview/update', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1690 => [[['_route' => 'shopping-list/delete', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListDeleteController', 'deleteAction'], '_template' => 'ShoppingListPage/shopping-list-delete/delete', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], ['POST' => 0], null, false, true, null]],
        1712 => [[['_route' => 'shopping-list/delete/confirm', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListDeleteController', 'deleteConfirmAction'], '_template' => 'ShoppingListPage/shopping-list-delete/delete-confirm', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, false, null]],
        1733 => [[['_route' => 'shopping-list/details', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListController', 'indexAction'], '_template' => 'ShoppingListPage/shopping-list/index', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1758 => [[['_route' => 'shopping-list/dismiss', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListDismissController', 'DismissAction'], '_template' => 'ShoppingListPage/shopping-list-dismiss/dismiss', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1782 => [[['_route' => 'shopping-list/dismiss-confirm', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListDismissController', 'DismissConfirmAction'], '_template' => 'ShoppingListPage/shopping-list-dismiss/dismiss-confirm', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1817 => [[['_route' => 'shopping-list/remove-item', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListController', 'removeItemAction'], '_template' => 'ShoppingListPage/shopping-list/remove-item', 'language' => 'en', 'store' => 'US'], ['idShoppingList', 'idShoppingListItem'], ['POST' => 0], null, false, true, null]],
        1837 => [[['_route' => 'shopping-list/share', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListOverviewController', 'shareShoppingListAction'], '_template' => 'ShoppingListPage/shopping-list-overview/share-shopping-list', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1857 => [[['_route' => 'shopping-list/print', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListController', 'printShoppingListAction'], '_template' => 'ShoppingListPage/shopping-list/print-shopping-list', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], null, null, false, true, null]],
        1900 => [[['_route' => 'shopping-list/create-from-exist-cart', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\CartToShoppingListController', 'createFromCartAction'], '_template' => 'ShoppingListPage/cart-to-shopping-list/create-from-cart', 'language' => 'en', 'store' => 'US'], ['idQuote'], null, null, false, true, null]],
        1919 => [[['_route' => 'shopping-list/clear', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListOverviewController', 'clearAction'], '_template' => 'ShoppingListPage/shopping-list-overview/clear', 'language' => 'en', 'store' => 'US'], ['idShoppingList'], ['POST' => 0], null, false, true, null]],
        1964 => [[['_route' => 'shopping-list/quick-add-item', '_controller' => ['SprykerShop\\Yves\\ShoppingListPage\\Controller\\ShoppingListController', 'quickAddToShoppingListAction'], '_template' => 'ShoppingListPage/shopping-list/quick-add-to-shopping-list', 'language' => 'en', 'store' => 'US'], ['sku'], null, null, false, true, null]],
        2012 => [[['_route' => 'quote-approval-approve', '_controller' => ['SprykerShop\\Yves\\QuoteApprovalWidget\\Controller\\QuoteApprovalController', 'approveAction'], '_template' => 'QuoteApprovalWidget/quote-approval/approve', 'language' => 'en', 'store' => 'US'], ['idQuoteApproval'], null, null, false, true, null]],
        2034 => [[['_route' => 'quote-approval-decline', '_controller' => ['SprykerShop\\Yves\\QuoteApprovalWidget\\Controller\\QuoteApprovalController', 'declineAction'], '_template' => 'QuoteApprovalWidget/quote-approval/decline', 'language' => 'en', 'store' => 'US'], ['idQuoteApproval'], null, null, false, true, null]],
        2055 => [[['_route' => 'quote-approval-remove', '_controller' => ['SprykerShop\\Yves\\QuoteApprovalWidget\\Controller\\QuoteApprovalController', 'removeQuoteApprovalAction'], '_template' => 'QuoteApprovalWidget/quote-approval/remove-quote-approval', 'language' => 'en', 'store' => 'US'], ['idQuoteApproval'], null, null, false, false, null]],
        2098 => [[['_route' => 'quote-request/revise', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestReviseController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-revise/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2130 => [[['_route' => 'quote-request/edit', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-edit/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2168 => [[['_route' => 'quote-request/edit-items', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditItemsController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-edit-items/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2202 => [[['_route' => 'quote-request/edit-items-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditItemsController', 'confirmAction'], '_template' => 'QuoteRequestPage/quote-request-edit-items/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2238 => [[['_route' => 'quote-request/edit-address', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditAddressController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-edit-address/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2272 => [[['_route' => 'quote-request/edit-address-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditAddressController', 'confirmAction'], '_template' => 'QuoteRequestPage/quote-request-edit-address/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2309 => [[['_route' => 'quote-request/edit-shipment', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditShipmentController', 'indexAction'], '_template' => 'QuoteRequestPage/quote-request-edit-shipment/index', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2343 => [[['_route' => 'quote-request/edit-shipment-confirm', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditShipmentController', 'confirmAction'], '_template' => 'QuoteRequestPage/quote-request-edit-shipment/confirm', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2385 => [[['_route' => 'quote-request/send-to-user', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestEditController', 'sendToUserAction'], '_template' => 'QuoteRequestPage/quote-request-edit/send-to-user', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2419 => [[['_route' => 'quote-request/cancel', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestDeleteController', 'cancelAction'], '_template' => 'QuoteRequestPage/quote-request-delete/cancel', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2460 => [[['_route' => 'quote-request/convert-to-cart', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestCheckoutController', 'convertToCartAction'], '_template' => 'QuoteRequestPage/quote-request-checkout/convert-to-cart', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2493 => [[['_route' => 'quote-request/details', '_controller' => ['SprykerShop\\Yves\\QuoteRequestPage\\Controller\\QuoteRequestViewController', 'detailsAction'], '_template' => 'QuoteRequestPage/quote-request-view/details', 'language' => 'en', 'store' => 'US'], ['quoteRequestReference'], null, null, false, true, null]],
        2537 => [[['_route' => 'resource-share/link', '_controller' => ['SprykerShop\\Yves\\ResourceSharePage\\Controller\\LinkController', 'indexAction'], '_template' => 'ResourceSharePage/link/index', 'language' => 'en', 'store' => 'US'], ['resourceShareUuid'], null, null, false, true, null]],
        2576 => [[['_route' => 'return/create', '_controller' => ['SprykerShop\\Yves\\SalesReturnPage\\Controller\\ReturnCreateController', 'createAction'], '_template' => 'SalesReturnPage/return-create/create', 'language' => 'en', 'store' => 'US'], ['orderReference'], null, null, false, true, null]],
        2605 => [[['_route' => 'return/view', '_controller' => ['SprykerShop\\Yves\\SalesReturnPage\\Controller\\ReturnViewController', 'viewAction'], '_template' => 'SalesReturnPage/return-view/view', 'language' => 'en', 'store' => 'US'], ['returnReference'], null, null, false, true, null]],
        2641 => [
            [['_route' => 'return/slip-print', '_controller' => ['SprykerShop\\Yves\\SalesReturnPage\\Controller\\ReturnSlipPrintController', 'printAction'], '_template' => 'SalesReturnPage/return-slip-print/print', 'language' => 'en', 'store' => 'US'], ['returnReference'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
