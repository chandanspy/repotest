<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShipmentMethodPriceEntityTransfer extends AbstractEntityTransfer
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
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const SHIPMENT_METHOD = 'shipmentMethod';

    /**
     * @var integer|null
     */
    protected $idShipmentMethodPrice;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkShipmentMethod;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var integer|null
     */
    protected $defaultGrossPrice;

    /**
     * @var integer|null
     */
    protected $defaultNetPrice;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer|null
     */
    protected $shipmentMethod;

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
        'currency' => 'currency',
        'Currency' => 'currency',
        'store' => 'store',
        'Store' => 'store',
        'shipment_method' => 'shipmentMethod',
        'shipmentMethod' => 'shipmentMethod',
        'ShipmentMethod' => 'shipmentMethod',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_METHOD_PRICE => [
            'type' => 'integer',
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
            'type' => 'integer',
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
            'type' => 'integer',
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
            'type' => 'integer',
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
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHOD => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_method',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice';


    /**
     * @module 
     *
     * @param integer|null $idShipmentMethodPrice
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdShipmentMethodPrice()
    {
        return $this->idShipmentMethodPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $idShipmentMethodPrice
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShipmentMethodPriceOrFail()
    {
        if ($this->idShipmentMethodPrice === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD_PRICE);
        }

        return $this->idShipmentMethodPrice;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCurrency
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkShipmentMethod
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkShipmentMethod()
    {
        return $this->fkShipmentMethod;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShipmentMethod
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShipmentMethodOrFail()
    {
        if ($this->fkShipmentMethod === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_METHOD);
        }

        return $this->fkShipmentMethod;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkStore
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $defaultGrossPrice
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
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultGrossPrice()
    {
        return $this->defaultGrossPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultGrossPrice
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultGrossPriceOrFail()
    {
        if ($this->defaultGrossPrice === null) {
            $this->throwNullValueException(static::DEFAULT_GROSS_PRICE);
        }

        return $this->defaultGrossPrice;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $defaultNetPrice
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
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultNetPrice()
    {
        return $this->defaultNetPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultNetPrice
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultNetPriceOrFail()
    {
        if ($this->defaultNetPrice === null) {
            $this->throwNullValueException(static::DEFAULT_NET_PRICE);
        }

        return $this->defaultNetPrice;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(SpyCurrencyEntityTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(SpyCurrencyEntityTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer|null $shipmentMethod
     *
     * @return $this
     */
    public function setShipmentMethod(SpyShipmentMethodEntityTransfer $shipmentMethod = null)
    {
        $this->shipmentMethod = $shipmentMethod;
        $this->modifiedProperties[self::SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer|null
     */
    public function getShipmentMethod()
    {
        return $this->shipmentMethod;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer $shipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentMethodOrFail(SpyShipmentMethodEntityTransfer $shipmentMethod)
    {
        return $this->setShipmentMethod($shipmentMethod);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer
     */
    public function getShipmentMethodOrFail()
    {
        if ($this->shipmentMethod === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD);
        }

        return $this->shipmentMethod;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethod()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHOD);

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
                case 'currency':
                case 'store':
                case 'shipmentMethod':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'currency':
                case 'store':
                case 'shipmentMethod':
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
                case 'idShipmentMethodPrice':
                case 'fkCurrency':
                case 'fkShipmentMethod':
                case 'fkStore':
                case 'defaultGrossPrice':
                case 'defaultNetPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'store':
                case 'shipmentMethod':
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
            'idShipmentMethodPrice' => $this->idShipmentMethodPrice,
            'fkCurrency' => $this->fkCurrency,
            'fkShipmentMethod' => $this->fkShipmentMethod,
            'fkStore' => $this->fkStore,
            'defaultGrossPrice' => $this->defaultGrossPrice,
            'defaultNetPrice' => $this->defaultNetPrice,
            'currency' => $this->currency,
            'store' => $this->store,
            'shipmentMethod' => $this->shipmentMethod,
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
            'currency' => $this->currency,
            'store' => $this->store,
            'shipment_method' => $this->shipmentMethod,
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
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'shipment_method' => $this->shipmentMethod instanceof AbstractTransfer ? $this->shipmentMethod->toArray(true, false) : $this->shipmentMethod,
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
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'shipmentMethod' => $this->shipmentMethod instanceof AbstractTransfer ? $this->shipmentMethod->toArray(true, true) : $this->shipmentMethod,
        ];
    }
}
