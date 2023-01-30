<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CheckoutErrorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const ERROR_CODE = 'errorCode';

    /**
     * @var string
     */
    public const ERROR_TYPE = 'errorType';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const ERROR_IDENTIFIER = 'errorIdentifier';

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var string|int|null
     */
    protected $errorCode;

    /**
     * @var string|null
     */
    protected $errorType;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $errorIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'message' => 'message',
        'Message' => 'message',
        'error_code' => 'errorCode',
        'errorCode' => 'errorCode',
        'ErrorCode' => 'errorCode',
        'error_type' => 'errorType',
        'errorType' => 'errorType',
        'ErrorType' => 'errorType',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'error_identifier' => 'errorIdentifier',
        'errorIdentifier' => 'errorIdentifier',
        'ErrorIdentifier' => 'errorIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_CODE => [
            'type' => 'int',
            'type_shim' => 'string',
            'name_underscore' => 'error_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'error_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'error_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|CompanyBusinessUnitAddressesRestApi|Country|Customer|CustomersRestApi|Discount|DummyPayment|Merchant|Nopayment|Payment|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductPackagingUnit|QuoteApproval|QuoteRequest|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|Customer|Discount|DummyPayment|Nopayment|Payment|SalesOrderThreshold|ShipmentCheckoutConnector
     *
     * @param string|int|null $errorCode Forward compatibility warning: string is the actual type (please use that, int is kept for BC).
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        $this->modifiedProperties[self::ERROR_CODE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|Customer|Discount|DummyPayment|Nopayment|Payment|SalesOrderThreshold|ShipmentCheckoutConnector
     *
     * @return string|int|null Forward compatibility warning: string is the actual type (please use that, int is kept for BC).
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|Customer|Discount|DummyPayment|Nopayment|Payment|SalesOrderThreshold|ShipmentCheckoutConnector
     *
     * @param string|int|null $errorCode Forward compatibility warning: string is the actual type (please use that, int is kept for BC).
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorCodeOrFail($errorCode)
    {
        if ($errorCode === null) {
            $this->throwNullValueException(static::ERROR_CODE);
        }

        return $this->setErrorCode($errorCode);
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|Customer|Discount|DummyPayment|Nopayment|Payment|SalesOrderThreshold|ShipmentCheckoutConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getErrorCodeOrFail()
    {
        if ($this->errorCode === null) {
            $this->throwNullValueException(static::ERROR_CODE);
        }

        return $this->errorCode;
    }

    /**
     * @module CheckoutPage|Availability|Calculation|CheckoutRestApi|Checkout|Customer|Discount|DummyPayment|Nopayment|Payment|SalesOrderThreshold|ShipmentCheckoutConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorCode()
    {
        $this->assertPropertyIsSet(self::ERROR_CODE);

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|ProductBundle
     *
     * @param string|null $errorType
     *
     * @return $this
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
        $this->modifiedProperties[self::ERROR_TYPE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|ProductBundle
     *
     * @return string|null
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * @module CheckoutPage|Availability|ProductBundle
     *
     * @param string|null $errorType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorTypeOrFail($errorType)
    {
        if ($errorType === null) {
            $this->throwNullValueException(static::ERROR_TYPE);
        }

        return $this->setErrorType($errorType);
    }

    /**
     * @module CheckoutPage|Availability|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getErrorTypeOrFail()
    {
        if ($this->errorType === null) {
            $this->throwNullValueException(static::ERROR_TYPE);
        }

        return $this->errorType;
    }

    /**
     * @module CheckoutPage|Availability|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorType()
    {
        $this->assertPropertyIsSet(self::ERROR_TYPE);

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|Merchant|ProductBundle|ProductCartConnector|ProductDiscontinued|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|Merchant|ProductBundle|ProductCartConnector|ProductDiscontinued|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module CheckoutPage|Availability|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|Merchant|ProductBundle|ProductCartConnector|ProductDiscontinued|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @param mixed $parameters
     *
     * @return $this
     */
    public function addParameters($parameters)
    {
        $this->parameters[] = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Availability|CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|Merchant|ProductBundle|ProductCartConnector|ProductDiscontinued|SalesOrderThreshold|Sales|ShipmentCheckoutConnector|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @return $this
     */
    public function setErrorIdentifier($errorIdentifier)
    {
        $this->errorIdentifier = $errorIdentifier;
        $this->modifiedProperties[self::ERROR_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getErrorIdentifier()
    {
        return $this->errorIdentifier;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorIdentifierOrFail($errorIdentifier)
    {
        if ($errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->setErrorIdentifier($errorIdentifier);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getErrorIdentifierOrFail()
    {
        if ($this->errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->errorIdentifier;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorIdentifier()
    {
        $this->assertPropertyIsSet(self::ERROR_IDENTIFIER);

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
                case 'message':
                case 'errorCode':
                case 'errorType':
                case 'parameters':
                case 'errorIdentifier':
                    $this->$normalizedPropertyName = $value;
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
                case 'message':
                case 'errorCode':
                case 'errorType':
                case 'parameters':
                case 'errorIdentifier':
                    $values[$arrayKey] = $value;

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
                case 'message':
                case 'errorCode':
                case 'errorType':
                case 'parameters':
                case 'errorIdentifier':
                    $values[$arrayKey] = $value;

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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'message' => $this->message,
            'errorCode' => $this->errorCode,
            'errorType' => $this->errorType,
            'parameters' => $this->parameters,
            'errorIdentifier' => $this->errorIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message,
            'error_code' => $this->errorCode,
            'error_type' => $this->errorType,
            'parameters' => $this->parameters,
            'error_identifier' => $this->errorIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'error_code' => $this->errorCode instanceof AbstractTransfer ? $this->errorCode->toArray(true, false) : $this->errorCode,
            'error_type' => $this->errorType instanceof AbstractTransfer ? $this->errorType->toArray(true, false) : $this->errorType,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'error_identifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, false) : $this->errorIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'errorCode' => $this->errorCode instanceof AbstractTransfer ? $this->errorCode->toArray(true, true) : $this->errorCode,
            'errorType' => $this->errorType instanceof AbstractTransfer ? $this->errorType->toArray(true, true) : $this->errorType,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'errorIdentifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, true) : $this->errorIdentifier,
        ];
    }
}
