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
class RestCheckoutDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ADDRESSES = 'addresses';

    /**
     * @var string
     */
    public const SHIPMENT_METHODS = 'shipmentMethods';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDERS = 'paymentProviders';

    /**
     * @var string
     */
    public const AVAILABLE_PAYMENT_METHODS = 'availablePaymentMethods';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_ADDRESSES = 'companyBusinessUnitAddresses';

    /**
     * @var string
     */
    public const AVAILABLE_SHIPMENT_METHODS = 'availableShipmentMethods';

    /**
     * @var \Generated\Shared\Transfer\AddressesTransfer|null
     */
    protected $addresses;

    /**
     * @var \Generated\Shared\Transfer\ShipmentMethodsTransfer|null
     */
    protected $shipmentMethods;

    /**
     * @var \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null
     */
    protected $paymentProviders;

    /**
     * @var \Generated\Shared\Transfer\PaymentMethodsTransfer|null
     */
    protected $availablePaymentMethods;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null
     */
    protected $companyBusinessUnitAddresses;

    /**
     * @var \Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer|null
     */
    protected $availableShipmentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'addresses' => 'addresses',
        'Addresses' => 'addresses',
        'shipment_methods' => 'shipmentMethods',
        'shipmentMethods' => 'shipmentMethods',
        'ShipmentMethods' => 'shipmentMethods',
        'payment_providers' => 'paymentProviders',
        'paymentProviders' => 'paymentProviders',
        'PaymentProviders' => 'paymentProviders',
        'available_payment_methods' => 'availablePaymentMethods',
        'availablePaymentMethods' => 'availablePaymentMethods',
        'AvailablePaymentMethods' => 'availablePaymentMethods',
        'quote' => 'quote',
        'Quote' => 'quote',
        'company_business_unit_addresses' => 'companyBusinessUnitAddresses',
        'companyBusinessUnitAddresses' => 'companyBusinessUnitAddresses',
        'CompanyBusinessUnitAddresses' => 'companyBusinessUnitAddresses',
        'available_shipment_methods' => 'availableShipmentMethods',
        'availableShipmentMethods' => 'availableShipmentMethods',
        'AvailableShipmentMethods' => 'availableShipmentMethods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\AddressesTransfer',
            'type_shim' => null,
            'name_underscore' => 'addresses',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\ShipmentMethodsTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_methods',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDERS => [
            'type' => 'Generated\Shared\Transfer\PaymentProviderCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_providers',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_PAYMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\PaymentMethodsTransfer',
            'type_shim' => null,
            'name_underscore' => 'available_payment_methods',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_addresses',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'available_shipment_methods',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\AddressesTransfer|null $addresses
     *
     * @return $this
     */
    public function setAddresses(AddressesTransfer $addresses = null)
    {
        $this->addresses = $addresses;
        $this->modifiedProperties[self::ADDRESSES] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @return \Generated\Shared\Transfer\AddressesTransfer|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\AddressesTransfer $addresses
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddressesOrFail(AddressesTransfer $addresses)
    {
        return $this->setAddresses($addresses);
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AddressesTransfer
     */
    public function getAddressesOrFail()
    {
        if ($this->addresses === null) {
            $this->throwNullValueException(static::ADDRESSES);
        }

        return $this->addresses;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddresses()
    {
        $this->assertPropertyIsSet(self::ADDRESSES);

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsTransfer|null $shipmentMethods
     *
     * @return $this
     */
    public function setShipmentMethods(ShipmentMethodsTransfer $shipmentMethods = null)
    {
        $this->shipmentMethods = $shipmentMethods;
        $this->modifiedProperties[self::SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsTransfer|null
     */
    public function getShipmentMethods()
    {
        return $this->shipmentMethods;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsTransfer $shipmentMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentMethodsOrFail(ShipmentMethodsTransfer $shipmentMethods)
    {
        return $this->setShipmentMethods($shipmentMethods);
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsTransfer
     */
    public function getShipmentMethodsOrFail()
    {
        if ($this->shipmentMethods === null) {
            $this->throwNullValueException(static::SHIPMENT_METHODS);
        }

        return $this->shipmentMethods;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethods()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null $paymentProviders
     *
     * @return $this
     */
    public function setPaymentProviders(PaymentProviderCollectionTransfer $paymentProviders = null)
    {
        $this->paymentProviders = $paymentProviders;
        $this->modifiedProperties[self::PAYMENT_PROVIDERS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null
     */
    public function getPaymentProviders()
    {
        return $this->paymentProviders;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderCollectionTransfer $paymentProviders
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProvidersOrFail(PaymentProviderCollectionTransfer $paymentProviders)
    {
        return $this->setPaymentProviders($paymentProviders);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentProviderCollectionTransfer
     */
    public function getPaymentProvidersOrFail()
    {
        if ($this->paymentProviders === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDERS);
        }

        return $this->paymentProviders;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviders()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDERS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentMethodsTransfer|null $availablePaymentMethods
     *
     * @return $this
     */
    public function setAvailablePaymentMethods(PaymentMethodsTransfer $availablePaymentMethods = null)
    {
        $this->availablePaymentMethods = $availablePaymentMethods;
        $this->modifiedProperties[self::AVAILABLE_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\PaymentMethodsTransfer|null
     */
    public function getAvailablePaymentMethods()
    {
        return $this->availablePaymentMethods;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentMethodsTransfer $availablePaymentMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailablePaymentMethodsOrFail(PaymentMethodsTransfer $availablePaymentMethods)
    {
        return $this->setAvailablePaymentMethods($availablePaymentMethods);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentMethodsTransfer
     */
    public function getAvailablePaymentMethodsOrFail()
    {
        if ($this->availablePaymentMethods === null) {
            $this->throwNullValueException(static::AVAILABLE_PAYMENT_METHODS);
        }

        return $this->availablePaymentMethods;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailablePaymentMethods()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_PAYMENT_METHODS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null $companyBusinessUnitAddresses
     *
     * @return $this
     */
    public function setCompanyBusinessUnitAddresses(CompanyUnitAddressCollectionTransfer $companyBusinessUnitAddresses = null)
    {
        $this->companyBusinessUnitAddresses = $companyBusinessUnitAddresses;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null
     */
    public function getCompanyBusinessUnitAddresses()
    {
        return $this->companyBusinessUnitAddresses;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer $companyBusinessUnitAddresses
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitAddressesOrFail(CompanyUnitAddressCollectionTransfer $companyBusinessUnitAddresses)
    {
        return $this->setCompanyBusinessUnitAddresses($companyBusinessUnitAddresses);
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer
     */
    public function getCompanyBusinessUnitAddressesOrFail()
    {
        if ($this->companyBusinessUnitAddresses === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_ADDRESSES);
        }

        return $this->companyBusinessUnitAddresses;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitAddresses()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_ADDRESSES);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer|null $availableShipmentMethods
     *
     * @return $this
     */
    public function setAvailableShipmentMethods(ShipmentMethodsCollectionTransfer $availableShipmentMethods = null)
    {
        $this->availableShipmentMethods = $availableShipmentMethods;
        $this->modifiedProperties[self::AVAILABLE_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer|null
     */
    public function getAvailableShipmentMethods()
    {
        return $this->availableShipmentMethods;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer $availableShipmentMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableShipmentMethodsOrFail(ShipmentMethodsCollectionTransfer $availableShipmentMethods)
    {
        return $this->setAvailableShipmentMethods($availableShipmentMethods);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsCollectionTransfer
     */
    public function getAvailableShipmentMethodsOrFail()
    {
        if ($this->availableShipmentMethods === null) {
            $this->throwNullValueException(static::AVAILABLE_SHIPMENT_METHODS);
        }

        return $this->availableShipmentMethods;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableShipmentMethods()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_SHIPMENT_METHODS);

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
                case 'addresses':
                case 'shipmentMethods':
                case 'paymentProviders':
                case 'availablePaymentMethods':
                case 'quote':
                case 'companyBusinessUnitAddresses':
                case 'availableShipmentMethods':
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
                case 'addresses':
                case 'shipmentMethods':
                case 'paymentProviders':
                case 'availablePaymentMethods':
                case 'quote':
                case 'companyBusinessUnitAddresses':
                case 'availableShipmentMethods':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'addresses':
                case 'shipmentMethods':
                case 'paymentProviders':
                case 'availablePaymentMethods':
                case 'quote':
                case 'companyBusinessUnitAddresses':
                case 'availableShipmentMethods':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'addresses' => $this->addresses,
            'shipmentMethods' => $this->shipmentMethods,
            'paymentProviders' => $this->paymentProviders,
            'availablePaymentMethods' => $this->availablePaymentMethods,
            'quote' => $this->quote,
            'companyBusinessUnitAddresses' => $this->companyBusinessUnitAddresses,
            'availableShipmentMethods' => $this->availableShipmentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'addresses' => $this->addresses,
            'shipment_methods' => $this->shipmentMethods,
            'payment_providers' => $this->paymentProviders,
            'available_payment_methods' => $this->availablePaymentMethods,
            'quote' => $this->quote,
            'company_business_unit_addresses' => $this->companyBusinessUnitAddresses,
            'available_shipment_methods' => $this->availableShipmentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, false) : $this->addresses,
            'shipment_methods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, false) : $this->shipmentMethods,
            'payment_providers' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, false) : $this->paymentProviders,
            'available_payment_methods' => $this->availablePaymentMethods instanceof AbstractTransfer ? $this->availablePaymentMethods->toArray(true, false) : $this->availablePaymentMethods,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
            'company_business_unit_addresses' => $this->companyBusinessUnitAddresses instanceof AbstractTransfer ? $this->companyBusinessUnitAddresses->toArray(true, false) : $this->companyBusinessUnitAddresses,
            'available_shipment_methods' => $this->availableShipmentMethods instanceof AbstractTransfer ? $this->availableShipmentMethods->toArray(true, false) : $this->availableShipmentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, true) : $this->addresses,
            'shipmentMethods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, true) : $this->shipmentMethods,
            'paymentProviders' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, true) : $this->paymentProviders,
            'availablePaymentMethods' => $this->availablePaymentMethods instanceof AbstractTransfer ? $this->availablePaymentMethods->toArray(true, true) : $this->availablePaymentMethods,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
            'companyBusinessUnitAddresses' => $this->companyBusinessUnitAddresses instanceof AbstractTransfer ? $this->companyBusinessUnitAddresses->toArray(true, true) : $this->companyBusinessUnitAddresses,
            'availableShipmentMethods' => $this->availableShipmentMethods instanceof AbstractTransfer ? $this->availableShipmentMethods->toArray(true, true) : $this->availableShipmentMethods,
        ];
    }
}
