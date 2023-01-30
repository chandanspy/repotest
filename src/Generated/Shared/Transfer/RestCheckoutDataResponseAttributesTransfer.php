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
class RestCheckoutDataResponseAttributesTransfer extends AbstractTransfer
{
    /**
     * @deprecated Will be removed in next major release. Use relations instead.
     */
    public const ADDRESSES = 'addresses';

    /**
     * @deprecated Will be removed in next major release. Use relations instead.
     */
    public const PAYMENT_PROVIDERS = 'paymentProviders';

    /**
     * @deprecated Will be removed in next major release. Use relations instead.
     */
    public const SHIPMENT_METHODS = 'shipmentMethods';

    /**
     * @var string
     */
    public const SELECTED_SHIPMENT_METHODS = 'selectedShipmentMethods';

    /**
     * @var string
     */
    public const SELECTED_PAYMENT_METHODS = 'selectedPaymentMethods';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestAddressTransfer[]
     */
    protected $addresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestPaymentProviderTransfer[]
     */
    protected $paymentProviders;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[]
     */
    protected $shipmentMethods;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[]
     */
    protected $selectedShipmentMethods;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[]
     */
    protected $selectedPaymentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'addresses' => 'addresses',
        'Addresses' => 'addresses',
        'payment_providers' => 'paymentProviders',
        'paymentProviders' => 'paymentProviders',
        'PaymentProviders' => 'paymentProviders',
        'shipment_methods' => 'shipmentMethods',
        'shipmentMethods' => 'shipmentMethods',
        'ShipmentMethods' => 'shipmentMethods',
        'selected_shipment_methods' => 'selectedShipmentMethods',
        'selectedShipmentMethods' => 'selectedShipmentMethods',
        'SelectedShipmentMethods' => 'selectedShipmentMethods',
        'selected_payment_methods' => 'selectedPaymentMethods',
        'selectedPaymentMethods' => 'selectedPaymentMethods',
        'SelectedPaymentMethods' => 'selectedPaymentMethods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\RestAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDERS => [
            'type' => 'Generated\Shared\Transfer\RestPaymentProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_providers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\RestShipmentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_methods',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\RestShipmentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'selected_shipment_methods',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_PAYMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\RestPaymentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'selected_payment_methods',
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
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestAddressTransfer[] $addresses
     *
     * @return $this
     */
    public function setAddresses(ArrayObject $addresses)
    {
        $this->addresses = $addresses;
        $this->modifiedProperties[self::ADDRESSES] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestAddressTransfer[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer $address
     *
     * @return $this
     */
    public function addAddress(RestAddressTransfer $address)
    {
        $this->addresses[] = $address;
        $this->modifiedProperties[self::ADDRESSES] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return $this
     */
    public function requireAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::ADDRESSES);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestPaymentProviderTransfer[] $paymentProviders
     *
     * @return $this
     */
    public function setPaymentProviders(ArrayObject $paymentProviders)
    {
        $this->paymentProviders = $paymentProviders;
        $this->modifiedProperties[self::PAYMENT_PROVIDERS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestPaymentProviderTransfer[]
     */
    public function getPaymentProviders()
    {
        return $this->paymentProviders;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \Generated\Shared\Transfer\RestPaymentProviderTransfer $paymentProvider
     *
     * @return $this
     */
    public function addPaymentProvider(RestPaymentProviderTransfer $paymentProvider)
    {
        $this->paymentProviders[] = $paymentProvider;
        $this->modifiedProperties[self::PAYMENT_PROVIDERS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return $this
     */
    public function requirePaymentProviders()
    {
        $this->assertCollectionPropertyIsSet(self::PAYMENT_PROVIDERS);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[] $shipmentMethods
     *
     * @return $this
     */
    public function setShipmentMethods(ArrayObject $shipmentMethods)
    {
        $this->shipmentMethods = $shipmentMethods;
        $this->modifiedProperties[self::SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[]
     */
    public function getShipmentMethods()
    {
        return $this->shipmentMethods;
    }

    /**
     * @module CheckoutRestApi
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @param \Generated\Shared\Transfer\RestShipmentMethodTransfer $shipmentMethod
     *
     * @return $this
     */
    public function addShipmentMethod(RestShipmentMethodTransfer $shipmentMethod)
    {
        $this->shipmentMethods[] = $shipmentMethod;
        $this->modifiedProperties[self::SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major release. Use relations instead.
     *
     * @return $this
     */
    public function requireShipmentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[] $selectedShipmentMethods
     *
     * @return $this
     */
    public function setSelectedShipmentMethods(ArrayObject $selectedShipmentMethods)
    {
        $this->selectedShipmentMethods = $selectedShipmentMethods;
        $this->modifiedProperties[self::SELECTED_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestShipmentMethodTransfer[]
     */
    public function getSelectedShipmentMethods()
    {
        return $this->selectedShipmentMethods;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShipmentMethodTransfer $selectedShipmentMethod
     *
     * @return $this
     */
    public function addSelectedShipmentMethod(RestShipmentMethodTransfer $selectedShipmentMethod)
    {
        $this->selectedShipmentMethods[] = $selectedShipmentMethod;
        $this->modifiedProperties[self::SELECTED_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedShipmentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SELECTED_SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[] $selectedPaymentMethods
     *
     * @return $this
     */
    public function setSelectedPaymentMethods(ArrayObject $selectedPaymentMethods)
    {
        $this->selectedPaymentMethods = $selectedPaymentMethods;
        $this->modifiedProperties[self::SELECTED_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[]
     */
    public function getSelectedPaymentMethods()
    {
        return $this->selectedPaymentMethods;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestPaymentMethodTransfer $selectedPaymentMethod
     *
     * @return $this
     */
    public function addSelectedPaymentMethod(RestPaymentMethodTransfer $selectedPaymentMethod)
    {
        $this->selectedPaymentMethods[] = $selectedPaymentMethod;
        $this->modifiedProperties[self::SELECTED_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedPaymentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SELECTED_PAYMENT_METHODS);

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
                case 'paymentProviders':
                case 'shipmentMethods':
                case 'selectedShipmentMethods':
                case 'selectedPaymentMethods':
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
                case 'addresses':
                case 'paymentProviders':
                case 'shipmentMethods':
                case 'selectedShipmentMethods':
                case 'selectedPaymentMethods':
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
                case 'addresses':
                case 'paymentProviders':
                case 'shipmentMethods':
                case 'selectedShipmentMethods':
                case 'selectedPaymentMethods':
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
        $this->addresses = $this->addresses ?: new ArrayObject();
        $this->paymentProviders = $this->paymentProviders ?: new ArrayObject();
        $this->shipmentMethods = $this->shipmentMethods ?: new ArrayObject();
        $this->selectedShipmentMethods = $this->selectedShipmentMethods ?: new ArrayObject();
        $this->selectedPaymentMethods = $this->selectedPaymentMethods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'addresses' => $this->addresses,
            'paymentProviders' => $this->paymentProviders,
            'shipmentMethods' => $this->shipmentMethods,
            'selectedShipmentMethods' => $this->selectedShipmentMethods,
            'selectedPaymentMethods' => $this->selectedPaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'addresses' => $this->addresses,
            'payment_providers' => $this->paymentProviders,
            'shipment_methods' => $this->shipmentMethods,
            'selected_shipment_methods' => $this->selectedShipmentMethods,
            'selected_payment_methods' => $this->selectedPaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, false) : $this->addValuesToCollection($this->addresses, true, false),
            'payment_providers' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, false) : $this->addValuesToCollection($this->paymentProviders, true, false),
            'shipment_methods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, false) : $this->addValuesToCollection($this->shipmentMethods, true, false),
            'selected_shipment_methods' => $this->selectedShipmentMethods instanceof AbstractTransfer ? $this->selectedShipmentMethods->toArray(true, false) : $this->addValuesToCollection($this->selectedShipmentMethods, true, false),
            'selected_payment_methods' => $this->selectedPaymentMethods instanceof AbstractTransfer ? $this->selectedPaymentMethods->toArray(true, false) : $this->addValuesToCollection($this->selectedPaymentMethods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'addresses' => $this->addresses instanceof AbstractTransfer ? $this->addresses->toArray(true, true) : $this->addValuesToCollection($this->addresses, true, true),
            'paymentProviders' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, true) : $this->addValuesToCollection($this->paymentProviders, true, true),
            'shipmentMethods' => $this->shipmentMethods instanceof AbstractTransfer ? $this->shipmentMethods->toArray(true, true) : $this->addValuesToCollection($this->shipmentMethods, true, true),
            'selectedShipmentMethods' => $this->selectedShipmentMethods instanceof AbstractTransfer ? $this->selectedShipmentMethods->toArray(true, true) : $this->addValuesToCollection($this->selectedShipmentMethods, true, true),
            'selectedPaymentMethods' => $this->selectedPaymentMethods instanceof AbstractTransfer ? $this->selectedPaymentMethods->toArray(true, true) : $this->addValuesToCollection($this->selectedPaymentMethods, true, true),
        ];
    }
}
