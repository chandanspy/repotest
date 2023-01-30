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
class RestOrderShipmentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPMENT_METHOD_NAME = 'shipmentMethodName';

    /**
     * @var string
     */
    public const CARRIER_NAME = 'carrierName';

    /**
     * @var string
     */
    public const DELIVERY_TIME = 'deliveryTime';

    /**
     * @var string
     */
    public const DEFAULT_GROSS_PRICE = 'defaultGrossPrice';

    /**
     * @var string
     */
    public const DEFAULT_NET_PRICE = 'defaultNetPrice';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string|null
     */
    protected $shipmentMethodName;

    /**
     * @var string|null
     */
    protected $carrierName;

    /**
     * @var int|null
     */
    protected $deliveryTime;

    /**
     * @var int|null
     */
    protected $defaultGrossPrice;

    /**
     * @var int|null
     */
    protected $defaultNetPrice;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipment_method_name' => 'shipmentMethodName',
        'shipmentMethodName' => 'shipmentMethodName',
        'ShipmentMethodName' => 'shipmentMethodName',
        'carrier_name' => 'carrierName',
        'carrierName' => 'carrierName',
        'CarrierName' => 'carrierName',
        'delivery_time' => 'deliveryTime',
        'deliveryTime' => 'deliveryTime',
        'DeliveryTime' => 'deliveryTime',
        'default_gross_price' => 'defaultGrossPrice',
        'defaultGrossPrice' => 'defaultGrossPrice',
        'DefaultGrossPrice' => 'defaultGrossPrice',
        'default_net_price' => 'defaultNetPrice',
        'defaultNetPrice' => 'defaultNetPrice',
        'DefaultNetPrice' => 'defaultNetPrice',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHIPMENT_METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shipment_method_name',
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
        self::DELIVERY_TIME => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'delivery_time',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'default_gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'default_net_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
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
     * @module OrdersRestApi
     *
     * @param string|null $shipmentMethodName
     *
     * @return $this
     */
    public function setShipmentMethodName($shipmentMethodName)
    {
        $this->shipmentMethodName = $shipmentMethodName;
        $this->modifiedProperties[self::SHIPMENT_METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getShipmentMethodName()
    {
        return $this->shipmentMethodName;
    }

    /**
     * @module OrdersRestApi
     *
     * @param string|null $shipmentMethodName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentMethodNameOrFail($shipmentMethodName)
    {
        if ($shipmentMethodName === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_NAME);
        }

        return $this->setShipmentMethodName($shipmentMethodName);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShipmentMethodNameOrFail()
    {
        if ($this->shipmentMethodName === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_NAME);
        }

        return $this->shipmentMethodName;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethodName()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHOD_NAME);

        return $this;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
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
     * @module OrdersRestApi
     *
     * @param int|null $deliveryTime
     *
     * @return $this
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        $this->modifiedProperties[self::DELIVERY_TIME] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $deliveryTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeliveryTimeOrFail($deliveryTime)
    {
        if ($deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->setDeliveryTime($deliveryTime);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDeliveryTimeOrFail()
    {
        if ($this->deliveryTime === null) {
            $this->throwNullValueException(static::DELIVERY_TIME);
        }

        return $this->deliveryTime;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTime()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $defaultGrossPrice
     *
     * @return $this
     */
    public function setDefaultGrossPrice($defaultGrossPrice)
    {
        $this->defaultGrossPrice = $defaultGrossPrice;
        $this->modifiedProperties[self::DEFAULT_GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getDefaultGrossPrice()
    {
        return $this->defaultGrossPrice;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $defaultGrossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultGrossPriceOrFail($defaultGrossPrice)
    {
        if ($defaultGrossPrice === null) {
            $this->throwNullValueException(static::DEFAULT_GROSS_PRICE);
        }

        return $this->setDefaultGrossPrice($defaultGrossPrice);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultGrossPriceOrFail()
    {
        if ($this->defaultGrossPrice === null) {
            $this->throwNullValueException(static::DEFAULT_GROSS_PRICE);
        }

        return $this->defaultGrossPrice;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultGrossPrice()
    {
        $this->assertPropertyIsSet(self::DEFAULT_GROSS_PRICE);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $defaultNetPrice
     *
     * @return $this
     */
    public function setDefaultNetPrice($defaultNetPrice)
    {
        $this->defaultNetPrice = $defaultNetPrice;
        $this->modifiedProperties[self::DEFAULT_NET_PRICE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return int|null
     */
    public function getDefaultNetPrice()
    {
        return $this->defaultNetPrice;
    }

    /**
     * @module OrdersRestApi
     *
     * @param int|null $defaultNetPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultNetPriceOrFail($defaultNetPrice)
    {
        if ($defaultNetPrice === null) {
            $this->throwNullValueException(static::DEFAULT_NET_PRICE);
        }

        return $this->setDefaultNetPrice($defaultNetPrice);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultNetPriceOrFail()
    {
        if ($this->defaultNetPrice === null) {
            $this->throwNullValueException(static::DEFAULT_NET_PRICE);
        }

        return $this->defaultNetPrice;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultNetPrice()
    {
        $this->assertPropertyIsSet(self::DEFAULT_NET_PRICE);

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module OrdersRestApi
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module OrdersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

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
                case 'shipmentMethodName':
                case 'carrierName':
                case 'deliveryTime':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
                case 'currencyIsoCode':
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
                case 'shipmentMethodName':
                case 'carrierName':
                case 'deliveryTime':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
                case 'currencyIsoCode':
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
                case 'shipmentMethodName':
                case 'carrierName':
                case 'deliveryTime':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
                case 'currencyIsoCode':
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
            'shipmentMethodName' => $this->shipmentMethodName,
            'carrierName' => $this->carrierName,
            'deliveryTime' => $this->deliveryTime,
            'defaultGrossPrice' => $this->defaultGrossPrice,
            'defaultNetPrice' => $this->defaultNetPrice,
            'currencyIsoCode' => $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'shipment_method_name' => $this->shipmentMethodName,
            'carrier_name' => $this->carrierName,
            'delivery_time' => $this->deliveryTime,
            'default_gross_price' => $this->defaultGrossPrice,
            'default_net_price' => $this->defaultNetPrice,
            'currency_iso_code' => $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'shipment_method_name' => $this->shipmentMethodName instanceof AbstractTransfer ? $this->shipmentMethodName->toArray(true, false) : $this->shipmentMethodName,
            'carrier_name' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, false) : $this->carrierName,
            'delivery_time' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, false) : $this->deliveryTime,
            'default_gross_price' => $this->defaultGrossPrice instanceof AbstractTransfer ? $this->defaultGrossPrice->toArray(true, false) : $this->defaultGrossPrice,
            'default_net_price' => $this->defaultNetPrice instanceof AbstractTransfer ? $this->defaultNetPrice->toArray(true, false) : $this->defaultNetPrice,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shipmentMethodName' => $this->shipmentMethodName instanceof AbstractTransfer ? $this->shipmentMethodName->toArray(true, true) : $this->shipmentMethodName,
            'carrierName' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, true) : $this->carrierName,
            'deliveryTime' => $this->deliveryTime instanceof AbstractTransfer ? $this->deliveryTime->toArray(true, true) : $this->deliveryTime,
            'defaultGrossPrice' => $this->defaultGrossPrice instanceof AbstractTransfer ? $this->defaultGrossPrice->toArray(true, true) : $this->defaultGrossPrice,
            'defaultNetPrice' => $this->defaultNetPrice instanceof AbstractTransfer ? $this->defaultNetPrice->toArray(true, true) : $this->defaultNetPrice,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
        ];
    }
}
