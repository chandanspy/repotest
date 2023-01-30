<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CheckoutResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const IS_EXTERNAL_REDIRECT = 'isExternalRedirect';

    /**
     * @var string
     */
    public const REDIRECT_URL = 'redirectUrl';

    /**
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     */
    public const SAVE_ORDER = 'saveOrder';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var bool|null
     */
    protected $isExternalRedirect;

    /**
     * @var string|null
     */
    protected $redirectUrl;

    /**
     * @var \Generated\Shared\Transfer\SaveOrderTransfer|null
     */
    protected $saveOrder;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CheckoutErrorTransfer[]
     */
    protected $errors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'is_external_redirect' => 'isExternalRedirect',
        'isExternalRedirect' => 'isExternalRedirect',
        'IsExternalRedirect' => 'isExternalRedirect',
        'redirect_url' => 'redirectUrl',
        'redirectUrl' => 'redirectUrl',
        'RedirectUrl' => 'redirectUrl',
        'save_order' => 'saveOrder',
        'saveOrder' => 'saveOrder',
        'SaveOrder' => 'saveOrder',
        'errors' => 'errors',
        'Errors' => 'errors',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXTERNAL_REDIRECT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_external_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REDIRECT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'redirect_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SAVE_ORDER => [
            'type' => 'Generated\Shared\Transfer\SaveOrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'save_order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\CheckoutErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Payment|ProductBundle|ProductCartConnector|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Payment|ProductBundle|ProductCartConnector|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Payment|ProductBundle|ProductCartConnector|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @param bool|null $isSuccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessOrFail($isSuccess)
    {
        if ($isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->setIsSuccess($isSuccess);
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Payment|ProductBundle|ProductCartConnector|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessOrFail()
    {
        if ($this->isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->isSuccess;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Payment|ProductBundle|ProductCartConnector|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @param bool|null $isExternalRedirect
     *
     * @return $this
     */
    public function setIsExternalRedirect($isExternalRedirect)
    {
        $this->isExternalRedirect = $isExternalRedirect;
        $this->modifiedProperties[self::IS_EXTERNAL_REDIRECT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @return bool|null
     */
    public function getIsExternalRedirect()
    {
        return $this->isExternalRedirect;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @param bool|null $isExternalRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExternalRedirectOrFail($isExternalRedirect)
    {
        if ($isExternalRedirect === null) {
            $this->throwNullValueException(static::IS_EXTERNAL_REDIRECT);
        }

        return $this->setIsExternalRedirect($isExternalRedirect);
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExternalRedirectOrFail()
    {
        if ($this->isExternalRedirect === null) {
            $this->throwNullValueException(static::IS_EXTERNAL_REDIRECT);
        }

        return $this->isExternalRedirect;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExternalRedirect()
    {
        $this->assertPropertyIsSet(self::IS_EXTERNAL_REDIRECT);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @param string|null $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        $this->modifiedProperties[self::REDIRECT_URL] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @param string|null $redirectUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRedirectUrlOrFail($redirectUrl)
    {
        if ($redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->setRedirectUrl($redirectUrl);
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRedirectUrlOrFail()
    {
        if ($this->redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->redirectUrl;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Discount|Payment|ProductOption|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRedirectUrl()
    {
        $this->assertPropertyIsSet(self::REDIRECT_URL);

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Customer|Discount|Oms|Payment|ProductBundle|ProductOption|SalesProductConnector|Sales|Shipment
     *
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     *
     * @param \Generated\Shared\Transfer\SaveOrderTransfer|null $saveOrder
     *
     * @return $this
     */
    public function setSaveOrder(SaveOrderTransfer $saveOrder = null)
    {
        $this->saveOrder = $saveOrder;
        $this->modifiedProperties[self::SAVE_ORDER] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Customer|Discount|Oms|Payment|ProductBundle|ProductOption|SalesProductConnector|Sales|Shipment
     *
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     *
     * @return \Generated\Shared\Transfer\SaveOrderTransfer|null
     */
    public function getSaveOrder()
    {
        return $this->saveOrder;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Customer|Discount|Oms|Payment|ProductBundle|ProductOption|SalesProductConnector|Sales|Shipment
     *
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     *
     * @param \Generated\Shared\Transfer\SaveOrderTransfer $saveOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSaveOrderOrFail(SaveOrderTransfer $saveOrder)
    {
        return $this->setSaveOrder($saveOrder);
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Customer|Discount|Oms|Payment|ProductBundle|ProductOption|SalesProductConnector|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     *
     * @return \Generated\Shared\Transfer\SaveOrderTransfer
     */
    public function getSaveOrderOrFail()
    {
        if ($this->saveOrder === null) {
            $this->throwNullValueException(static::SAVE_ORDER);
        }

        return $this->saveOrder;
    }

    /**
     * @module CheckoutPage|CheckoutRestApi|Checkout|Customer|Discount|Oms|Payment|ProductBundle|ProductOption|SalesProductConnector|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use SaveOrderTransfer directly/decoupled from the checkout response
     *
     * @return $this
     */
    public function requireSaveOrder()
    {
        $this->assertPropertyIsSet(self::SAVE_ORDER);

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CheckoutErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CheckoutErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\CheckoutErrorTransfer $error
     *
     * @return $this
     */
    public function addError(CheckoutErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductOption|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|SalesProductConnector|Sales|ShipmentCheckoutConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'isSuccess':
                case 'isExternalRedirect':
                case 'redirectUrl':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'saveOrder':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'errors':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'isSuccess':
                case 'isExternalRedirect':
                case 'redirectUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'saveOrder':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'errors':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'isSuccess':
                case 'isExternalRedirect':
                case 'redirectUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'saveOrder':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'errors':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
        $this->errors = $this->errors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'isExternalRedirect' => $this->isExternalRedirect,
            'redirectUrl' => $this->redirectUrl,
            'saveOrder' => $this->saveOrder,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'is_external_redirect' => $this->isExternalRedirect,
            'redirect_url' => $this->redirectUrl,
            'save_order' => $this->saveOrder,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'is_external_redirect' => $this->isExternalRedirect instanceof AbstractTransfer ? $this->isExternalRedirect->toArray(true, false) : $this->isExternalRedirect,
            'redirect_url' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, false) : $this->redirectUrl,
            'save_order' => $this->saveOrder instanceof AbstractTransfer ? $this->saveOrder->toArray(true, false) : $this->saveOrder,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'isExternalRedirect' => $this->isExternalRedirect instanceof AbstractTransfer ? $this->isExternalRedirect->toArray(true, true) : $this->isExternalRedirect,
            'redirectUrl' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, true) : $this->redirectUrl,
            'saveOrder' => $this->saveOrder instanceof AbstractTransfer ? $this->saveOrder->toArray(true, true) : $this->saveOrder,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
