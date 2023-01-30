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
class RestOrderShipmentsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ITEM_UUIDS = 'itemUuids';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const METHOD_NAME = 'methodName';

    /**
     * @var string
     */
    public const CARRIER_NAME = 'carrierName';

    /**
     * @var string
     */
    public const REQUESTED_DELIVERY_DATE = 'requestedDeliveryDate';

    /**
     * @var string[]
     */
    protected $itemUuids = [];

    /**
     * @var \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var string|null
     */
    protected $methodName;

    /**
     * @var string|null
     */
    protected $carrierName;

    /**
     * @var string|null
     */
    protected $requestedDeliveryDate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'item_uuids' => 'itemUuids',
        'itemUuids' => 'itemUuids',
        'ItemUuids' => 'itemUuids',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'method_name' => 'methodName',
        'methodName' => 'methodName',
        'MethodName' => 'methodName',
        'carrier_name' => 'carrierName',
        'carrierName' => 'carrierName',
        'CarrierName' => 'carrierName',
        'requested_delivery_date' => 'requestedDeliveryDate',
        'requestedDeliveryDate' => 'requestedDeliveryDate',
        'RequestedDeliveryDate' => 'requestedDeliveryDate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ITEM_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'item_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\RestOrderAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARRIER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'carrier_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUESTED_DELIVERY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'requested_delivery_date',
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
     * @module ShipmentsRestApi
     *
     * @param string[]|null $itemUuids
     *
     * @return $this
     */
    public function setItemUuids(array $itemUuids = null)
    {
        if ($itemUuids === null) {
            $itemUuids = [];
        }

        $this->itemUuids = $itemUuids;
        $this->modifiedProperties[self::ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string[]
     */
    public function getItemUuids()
    {
        return $this->itemUuids;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string $itemUuid
     *
     * @return $this
     */
    public function addItemUuid($itemUuid)
    {
        $this->itemUuids[] = $itemUuid;
        $this->modifiedProperties[self::ITEM_UUIDS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemUuids()
    {
        $this->assertPropertyIsSet(self::ITEM_UUIDS);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(RestOrderAddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrderAddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(RestOrderAddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrderAddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $methodName
     *
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
        $this->modifiedProperties[self::METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string|null
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $methodName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodNameOrFail($methodName)
    {
        if ($methodName === null) {
            $this->throwNullValueException(static::METHOD_NAME);
        }

        return $this->setMethodName($methodName);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodNameOrFail()
    {
        if ($this->methodName === null) {
            $this->throwNullValueException(static::METHOD_NAME);
        }

        return $this->methodName;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethodName()
    {
        $this->assertPropertyIsSet(self::METHOD_NAME);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $carrierName
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        $this->modifiedProperties[self::CARRIER_NAME] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $carrierName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCarrierNameOrFail($carrierName)
    {
        if ($carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->setCarrierName($carrierName);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCarrierNameOrFail()
    {
        if ($this->carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->carrierName;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCarrierName()
    {
        $this->assertPropertyIsSet(self::CARRIER_NAME);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        $this->modifiedProperties[self::REQUESTED_DELIVERY_DATE] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestedDeliveryDateOrFail($requestedDeliveryDate)
    {
        if ($requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->setRequestedDeliveryDate($requestedDeliveryDate);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestedDeliveryDateOrFail()
    {
        if ($this->requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->requestedDeliveryDate;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestedDeliveryDate()
    {
        $this->assertPropertyIsSet(self::REQUESTED_DELIVERY_DATE);

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
                case 'itemUuids':
                case 'methodName':
                case 'carrierName':
                case 'requestedDeliveryDate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shippingAddress':
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
                case 'itemUuids':
                case 'methodName':
                case 'carrierName':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
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
                case 'itemUuids':
                case 'methodName':
                case 'carrierName':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
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
            'itemUuids' => $this->itemUuids,
            'methodName' => $this->methodName,
            'carrierName' => $this->carrierName,
            'requestedDeliveryDate' => $this->requestedDeliveryDate,
            'shippingAddress' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'item_uuids' => $this->itemUuids,
            'method_name' => $this->methodName,
            'carrier_name' => $this->carrierName,
            'requested_delivery_date' => $this->requestedDeliveryDate,
            'shipping_address' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'item_uuids' => $this->itemUuids instanceof AbstractTransfer ? $this->itemUuids->toArray(true, false) : $this->itemUuids,
            'method_name' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, false) : $this->methodName,
            'carrier_name' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, false) : $this->carrierName,
            'requested_delivery_date' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, false) : $this->requestedDeliveryDate,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'itemUuids' => $this->itemUuids instanceof AbstractTransfer ? $this->itemUuids->toArray(true, true) : $this->itemUuids,
            'methodName' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, true) : $this->methodName,
            'carrierName' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, true) : $this->carrierName,
            'requestedDeliveryDate' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, true) : $this->requestedDeliveryDate,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
        ];
    }
}
