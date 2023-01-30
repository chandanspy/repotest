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
class ShipmentPriceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SHIPMENT_METHOD_PRICE = 'idShipmentMethodPrice';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_SHIPMENT_METHOD = 'fkShipmentMethod';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const DEFAULT_GROSS_PRICE = 'defaultGrossPrice';

    /**
     * @var string
     */
    public const DEFAULT_NET_PRICE = 'defaultNetPrice';

    /**
     * @var int|null
     */
    protected $idShipmentMethodPrice;

    /**
     * @var int|null
     */
    protected $fkCurrency;

    /**
     * @var int|null
     */
    protected $fkShipmentMethod;

    /**
     * @var int|null
     */
    protected $fkStore;

    /**
     * @var int|null
     */
    protected $defaultGrossPrice;

    /**
     * @var int|null
     */
    protected $defaultNetPrice;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shipment_method_price' => 'idShipmentMethodPrice',
        'idShipmentMethodPrice' => 'idShipmentMethodPrice',
        'IdShipmentMethodPrice' => 'idShipmentMethodPrice',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_shipment_method' => 'fkShipmentMethod',
        'fkShipmentMethod' => 'fkShipmentMethod',
        'FkShipmentMethod' => 'fkShipmentMethod',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'default_gross_price' => 'defaultGrossPrice',
        'defaultGrossPrice' => 'defaultGrossPrice',
        'DefaultGrossPrice' => 'defaultGrossPrice',
        'default_net_price' => 'defaultNetPrice',
        'defaultNetPrice' => 'defaultNetPrice',
        'DefaultNetPrice' => 'defaultNetPrice',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_METHOD_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_method_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHIPMENT_METHOD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_shipment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
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
    ];

    /**
     * @module Shipment
     *
     * @param int|null $idShipmentMethodPrice
     *
     * @return $this
     */
    public function setIdShipmentMethodPrice($idShipmentMethodPrice)
    {
        $this->idShipmentMethodPrice = $idShipmentMethodPrice;
        $this->modifiedProperties[self::ID_SHIPMENT_METHOD_PRICE] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @return int|null
     */
    public function getIdShipmentMethodPrice()
    {
        return $this->idShipmentMethodPrice;
    }

    /**
     * @module Shipment
     *
     * @param int|null $idShipmentMethodPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentMethodPriceOrFail($idShipmentMethodPrice)
    {
        if ($idShipmentMethodPrice === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD_PRICE);
        }

        return $this->setIdShipmentMethodPrice($idShipmentMethodPrice);
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShipmentMethodPriceOrFail()
    {
        if ($this->idShipmentMethodPrice === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD_PRICE);
        }

        return $this->idShipmentMethodPrice;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentMethodPrice()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_METHOD_PRICE);

        return $this;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkCurrency
     *
     * @return $this
     */
    public function setFkCurrency($fkCurrency)
    {
        $this->fkCurrency = $fkCurrency;
        $this->modifiedProperties[self::FK_CURRENCY] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @return int|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCurrencyOrFail($fkCurrency)
    {
        if ($fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->setFkCurrency($fkCurrency);
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCurrency()
    {
        $this->assertPropertyIsSet(self::FK_CURRENCY);

        return $this;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkShipmentMethod
     *
     * @return $this
     */
    public function setFkShipmentMethod($fkShipmentMethod)
    {
        $this->fkShipmentMethod = $fkShipmentMethod;
        $this->modifiedProperties[self::FK_SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @return int|null
     */
    public function getFkShipmentMethod()
    {
        return $this->fkShipmentMethod;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkShipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShipmentMethodOrFail($fkShipmentMethod)
    {
        if ($fkShipmentMethod === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_METHOD);
        }

        return $this->setFkShipmentMethod($fkShipmentMethod);
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkShipmentMethodOrFail()
    {
        if ($this->fkShipmentMethod === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_METHOD);
        }

        return $this->fkShipmentMethod;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShipmentMethod()
    {
        $this->assertPropertyIsSet(self::FK_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @return int|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module Shipment
     *
     * @param int|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module Shipment
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
     * @module Shipment
     *
     * @return int|null
     */
    public function getDefaultGrossPrice()
    {
        return $this->defaultGrossPrice;
    }

    /**
     * @module Shipment
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
     * @module Shipment
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
     * @module Shipment
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
     * @module Shipment
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
     * @module Shipment
     *
     * @return int|null
     */
    public function getDefaultNetPrice()
    {
        return $this->defaultNetPrice;
    }

    /**
     * @module Shipment
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
     * @module Shipment
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
     * @module Shipment
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
                case 'idShipmentMethodPrice':
                case 'fkCurrency':
                case 'fkShipmentMethod':
                case 'fkStore':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
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
                case 'idShipmentMethodPrice':
                case 'fkCurrency':
                case 'fkShipmentMethod':
                case 'fkStore':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
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
                case 'idShipmentMethodPrice':
                case 'fkCurrency':
                case 'fkShipmentMethod':
                case 'fkStore':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
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
            'idShipmentMethodPrice' => $this->idShipmentMethodPrice,
            'fkCurrency' => $this->fkCurrency,
            'fkShipmentMethod' => $this->fkShipmentMethod,
            'fkStore' => $this->fkStore,
            'defaultGrossPrice' => $this->defaultGrossPrice,
            'defaultNetPrice' => $this->defaultNetPrice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_method_price' => $this->idShipmentMethodPrice,
            'fk_currency' => $this->fkCurrency,
            'fk_shipment_method' => $this->fkShipmentMethod,
            'fk_store' => $this->fkStore,
            'default_gross_price' => $this->defaultGrossPrice,
            'default_net_price' => $this->defaultNetPrice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_method_price' => $this->idShipmentMethodPrice instanceof AbstractTransfer ? $this->idShipmentMethodPrice->toArray(true, false) : $this->idShipmentMethodPrice,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_shipment_method' => $this->fkShipmentMethod instanceof AbstractTransfer ? $this->fkShipmentMethod->toArray(true, false) : $this->fkShipmentMethod,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'default_gross_price' => $this->defaultGrossPrice instanceof AbstractTransfer ? $this->defaultGrossPrice->toArray(true, false) : $this->defaultGrossPrice,
            'default_net_price' => $this->defaultNetPrice instanceof AbstractTransfer ? $this->defaultNetPrice->toArray(true, false) : $this->defaultNetPrice,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShipmentMethodPrice' => $this->idShipmentMethodPrice instanceof AbstractTransfer ? $this->idShipmentMethodPrice->toArray(true, true) : $this->idShipmentMethodPrice,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkShipmentMethod' => $this->fkShipmentMethod instanceof AbstractTransfer ? $this->fkShipmentMethod->toArray(true, true) : $this->fkShipmentMethod,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'defaultGrossPrice' => $this->defaultGrossPrice instanceof AbstractTransfer ? $this->defaultGrossPrice->toArray(true, true) : $this->defaultGrossPrice,
            'defaultNetPrice' => $this->defaultNetPrice instanceof AbstractTransfer ? $this->defaultNetPrice->toArray(true, true) : $this->defaultNetPrice,
        ];
    }
}
