<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShipmentMethodEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHIPMENT_METHOD = 'idShipmentMethod';

    /**
     * @var string
     */
    public const FK_SHIPMENT_CARRIER = 'fkShipmentCarrier';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const AVAILABILITY_PLUGIN = 'availabilityPlugin';

    /**
     * @var string
     */
    public const DEFAULT_PRICE = 'defaultPrice';

    /**
     * @var string
     */
    public const DELIVERY_TIME_PLUGIN = 'deliveryTimePlugin';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PRICE_PLUGIN = 'pricePlugin';

    /**
     * @var string
     */
    public const SHIPMENT_METHOD_KEY = 'shipmentMethodKey';

    /**
     * @var string
     */
    public const SHIPMENT_CARRIER = 'shipmentCarrier';

    /**
     * @var string
     */
    public const TAX_SET = 'taxSet';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHOD_PRICES = 'spyShipmentMethodPrices';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHOD_STORES = 'spyShipmentMethodStores';

    /**
     * @var integer|null
     */
    protected $idShipmentMethod;

    /**
     * @var integer|null
     */
    protected $fkShipmentCarrier;

    /**
     * @var integer|null
     */
    protected $fkTaxSet;

    /**
     * @var string|null
     */
    protected $availabilityPlugin;

    /**
     * @var integer|null
     */
    protected $defaultPrice;

    /**
     * @var string|null
     */
    protected $deliveryTimePlugin;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $pricePlugin;

    /**
     * @var string|null
     */
    protected $shipmentMethodKey;

    /**
     * @var \Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer|null
     */
    protected $shipmentCarrier;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    protected $taxSet;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[]
     */
    protected $spyShipmentMethodPrices;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer[]
     */
    protected $spyShipmentMethodStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shipment_method' => 'idShipmentMethod',
        'idShipmentMethod' => 'idShipmentMethod',
        'IdShipmentMethod' => 'idShipmentMethod',
        'fk_shipment_carrier' => 'fkShipmentCarrier',
        'fkShipmentCarrier' => 'fkShipmentCarrier',
        'FkShipmentCarrier' => 'fkShipmentCarrier',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'availability_plugin' => 'availabilityPlugin',
        'availabilityPlugin' => 'availabilityPlugin',
        'AvailabilityPlugin' => 'availabilityPlugin',
        'default_price' => 'defaultPrice',
        'defaultPrice' => 'defaultPrice',
        'DefaultPrice' => 'defaultPrice',
        'delivery_time_plugin' => 'deliveryTimePlugin',
        'deliveryTimePlugin' => 'deliveryTimePlugin',
        'DeliveryTimePlugin' => 'deliveryTimePlugin',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'name' => 'name',
        'Name' => 'name',
        'price_plugin' => 'pricePlugin',
        'pricePlugin' => 'pricePlugin',
        'PricePlugin' => 'pricePlugin',
        'shipment_method_key' => 'shipmentMethodKey',
        'shipmentMethodKey' => 'shipmentMethodKey',
        'ShipmentMethodKey' => 'shipmentMethodKey',
        'shipment_carrier' => 'shipmentCarrier',
        'shipmentCarrier' => 'shipmentCarrier',
        'ShipmentCarrier' => 'shipmentCarrier',
        'tax_set' => 'taxSet',
        'taxSet' => 'taxSet',
        'TaxSet' => 'taxSet',
        'spy_shipment_method_prices' => 'spyShipmentMethodPrices',
        'spyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'SpyShipmentMethodPrices' => 'spyShipmentMethodPrices',
        'spy_shipment_method_stores' => 'spyShipmentMethodStores',
        'spyShipmentMethodStores' => 'spyShipmentMethodStores',
        'SpyShipmentMethodStores' => 'spyShipmentMethodStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_METHOD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHIPMENT_CARRIER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shipment_carrier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'availability_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_PRICE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'default_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DELIVERY_TIME_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'delivery_time_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_METHOD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shipment_method_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_CARRIER => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_carrier',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_SET => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHOD_PRICES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_method_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHOD_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_method_stores',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Shipment\Persistence\SpyShipmentMethod';


    /**
     * @module 
     *
     * @param integer|null $idShipmentMethod
     *
     * @return $this
     */
    public function setIdShipmentMethod($idShipmentMethod)
    {
        $this->idShipmentMethod = $idShipmentMethod;
        $this->modifiedProperties[self::ID_SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShipmentMethod()
    {
        return $this->idShipmentMethod;
    }

    /**
     * @module 
     *
     * @param integer|null $idShipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentMethodOrFail($idShipmentMethod)
    {
        if ($idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->setIdShipmentMethod($idShipmentMethod);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShipmentMethodOrFail()
    {
        if ($this->idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->idShipmentMethod;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentMethod()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShipmentCarrier
     *
     * @return $this
     */
    public function setFkShipmentCarrier($fkShipmentCarrier)
    {
        $this->fkShipmentCarrier = $fkShipmentCarrier;
        $this->modifiedProperties[self::FK_SHIPMENT_CARRIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShipmentCarrier()
    {
        return $this->fkShipmentCarrier;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShipmentCarrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShipmentCarrierOrFail($fkShipmentCarrier)
    {
        if ($fkShipmentCarrier === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_CARRIER);
        }

        return $this->setFkShipmentCarrier($fkShipmentCarrier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShipmentCarrierOrFail()
    {
        if ($this->fkShipmentCarrier === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_CARRIER);
        }

        return $this->fkShipmentCarrier;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShipmentCarrier()
    {
        $this->assertPropertyIsSet(self::FK_SHIPMENT_CARRIER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @return $this
     */
    public function setFkTaxSet($fkTaxSet)
    {
        $this->fkTaxSet = $fkTaxSet;
        $this->modifiedProperties[self::FK_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxSetOrFail($fkTaxSet)
    {
        if ($fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->setFkTaxSet($fkTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxSet()
    {
        $this->assertPropertyIsSet(self::FK_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $availabilityPlugin
     *
     * @return $this
     */
    public function setAvailabilityPlugin($availabilityPlugin)
    {
        $this->availabilityPlugin = $availabilityPlugin;
        $this->modifiedProperties[self::AVAILABILITY_PLUGIN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAvailabilityPlugin()
    {
        return $this->availabilityPlugin;
    }

    /**
     * @module 
     *
     * @param string|null $availabilityPlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityPluginOrFail($availabilityPlugin)
    {
        if ($availabilityPlugin === null) {
            $this->throwNullValueException(static::AVAILABILITY_PLUGIN);
        }

        return $this->setAvailabilityPlugin($availabilityPlugin);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAvailabilityPluginOrFail()
    {
        if ($this->availabilityPlugin === null) {
            $this->throwNullValueException(static::AVAILABILITY_PLUGIN);
        }

        return $this->availabilityPlugin;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityPlugin()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_PLUGIN);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultPrice
     *
     * @return $this
     */
    public function setDefaultPrice($defaultPrice)
    {
        $this->defaultPrice = $defaultPrice;
        $this->modifiedProperties[self::DEFAULT_PRICE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultPriceOrFail($defaultPrice)
    {
        if ($defaultPrice === null) {
            $this->throwNullValueException(static::DEFAULT_PRICE);
        }

        return $this->setDefaultPrice($defaultPrice);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultPriceOrFail()
    {
        if ($this->defaultPrice === null) {
            $this->throwNullValueException(static::DEFAULT_PRICE);
        }

        return $this->defaultPrice;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultPrice()
    {
        $this->assertPropertyIsSet(self::DEFAULT_PRICE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $deliveryTimePlugin
     *
     * @return $this
     */
    public function setDeliveryTimePlugin($deliveryTimePlugin)
    {
        $this->deliveryTimePlugin = $deliveryTimePlugin;
        $this->modifiedProperties[self::DELIVERY_TIME_PLUGIN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDeliveryTimePlugin()
    {
        return $this->deliveryTimePlugin;
    }

    /**
     * @module 
     *
     * @param string|null $deliveryTimePlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeliveryTimePluginOrFail($deliveryTimePlugin)
    {
        if ($deliveryTimePlugin === null) {
            $this->throwNullValueException(static::DELIVERY_TIME_PLUGIN);
        }

        return $this->setDeliveryTimePlugin($deliveryTimePlugin);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDeliveryTimePluginOrFail()
    {
        if ($this->deliveryTimePlugin === null) {
            $this->throwNullValueException(static::DELIVERY_TIME_PLUGIN);
        }

        return $this->deliveryTimePlugin;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTimePlugin()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME_PLUGIN);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $pricePlugin
     *
     * @return $this
     */
    public function setPricePlugin($pricePlugin)
    {
        $this->pricePlugin = $pricePlugin;
        $this->modifiedProperties[self::PRICE_PLUGIN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPricePlugin()
    {
        return $this->pricePlugin;
    }

    /**
     * @module 
     *
     * @param string|null $pricePlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPricePluginOrFail($pricePlugin)
    {
        if ($pricePlugin === null) {
            $this->throwNullValueException(static::PRICE_PLUGIN);
        }

        return $this->setPricePlugin($pricePlugin);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPricePluginOrFail()
    {
        if ($this->pricePlugin === null) {
            $this->throwNullValueException(static::PRICE_PLUGIN);
        }

        return $this->pricePlugin;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePricePlugin()
    {
        $this->assertPropertyIsSet(self::PRICE_PLUGIN);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $shipmentMethodKey
     *
     * @return $this
     */
    public function setShipmentMethodKey($shipmentMethodKey)
    {
        $this->shipmentMethodKey = $shipmentMethodKey;
        $this->modifiedProperties[self::SHIPMENT_METHOD_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getShipmentMethodKey()
    {
        return $this->shipmentMethodKey;
    }

    /**
     * @module 
     *
     * @param string|null $shipmentMethodKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentMethodKeyOrFail($shipmentMethodKey)
    {
        if ($shipmentMethodKey === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_KEY);
        }

        return $this->setShipmentMethodKey($shipmentMethodKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShipmentMethodKeyOrFail()
    {
        if ($this->shipmentMethodKey === null) {
            $this->throwNullValueException(static::SHIPMENT_METHOD_KEY);
        }

        return $this->shipmentMethodKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethodKey()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHOD_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer|null $shipmentCarrier
     *
     * @return $this
     */
    public function setShipmentCarrier(SpyShipmentCarrierEntityTransfer $shipmentCarrier = null)
    {
        $this->shipmentCarrier = $shipmentCarrier;
        $this->modifiedProperties[self::SHIPMENT_CARRIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer|null
     */
    public function getShipmentCarrier()
    {
        return $this->shipmentCarrier;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer $shipmentCarrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentCarrierOrFail(SpyShipmentCarrierEntityTransfer $shipmentCarrier)
    {
        return $this->setShipmentCarrier($shipmentCarrier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShipmentCarrierEntityTransfer
     */
    public function getShipmentCarrierOrFail()
    {
        if ($this->shipmentCarrier === null) {
            $this->throwNullValueException(static::SHIPMENT_CARRIER);
        }

        return $this->shipmentCarrier;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentCarrier()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_CARRIER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null $taxSet
     *
     * @return $this
     */
    public function setTaxSet(SpyTaxSetEntityTransfer $taxSet = null)
    {
        $this->taxSet = $taxSet;
        $this->modifiedProperties[self::TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    public function getTaxSet()
    {
        return $this->taxSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer $taxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxSetOrFail(SpyTaxSetEntityTransfer $taxSet)
    {
        return $this->setTaxSet($taxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer
     */
    public function getTaxSetOrFail()
    {
        if ($this->taxSet === null) {
            $this->throwNullValueException(static::TAX_SET);
        }

        return $this->taxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxSet()
    {
        $this->assertPropertyIsSet(self::TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[] $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function setSpyShipmentMethodPrices(ArrayObject $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer[]
     */
    public function getSpyShipmentMethodPrices()
    {
        return $this->spyShipmentMethodPrices;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices
     *
     * @return $this
     */
    public function addSpyShipmentMethodPrices(SpyShipmentMethodPriceEntityTransfer $spyShipmentMethodPrices)
    {
        $this->spyShipmentMethodPrices[] = $spyShipmentMethodPrices;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_PRICES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethodPrices()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHOD_PRICES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer[] $spyShipmentMethodStores
     *
     * @return $this
     */
    public function setSpyShipmentMethodStores(ArrayObject $spyShipmentMethodStores)
    {
        $this->spyShipmentMethodStores = $spyShipmentMethodStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer[]
     */
    public function getSpyShipmentMethodStores()
    {
        return $this->spyShipmentMethodStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodStoreEntityTransfer $spyShipmentMethodStores
     *
     * @return $this
     */
    public function addSpyShipmentMethodStores(SpyShipmentMethodStoreEntityTransfer $spyShipmentMethodStores)
    {
        $this->spyShipmentMethodStores[] = $spyShipmentMethodStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethodStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHOD_STORES);

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
                case 'idShipmentMethod':
                case 'fkShipmentCarrier':
                case 'fkTaxSet':
                case 'availabilityPlugin':
                case 'defaultPrice':
                case 'deliveryTimePlugin':
                case 'isActive':
                case 'name':
                case 'pricePlugin':
                case 'shipmentMethodKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shipmentCarrier':
                case 'taxSet':
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
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idShipmentMethod':
                case 'fkShipmentCarrier':
                case 'fkTaxSet':
                case 'availabilityPlugin':
                case 'defaultPrice':
                case 'deliveryTimePlugin':
                case 'isActive':
                case 'name':
                case 'pricePlugin':
                case 'shipmentMethodKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipmentCarrier':
                case 'taxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
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
                case 'idShipmentMethod':
                case 'fkShipmentCarrier':
                case 'fkTaxSet':
                case 'availabilityPlugin':
                case 'defaultPrice':
                case 'deliveryTimePlugin':
                case 'isActive':
                case 'name':
                case 'pricePlugin':
                case 'shipmentMethodKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipmentCarrier':
                case 'taxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyShipmentMethodPrices':
                case 'spyShipmentMethodStores':
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
        $this->spyShipmentMethodPrices = $this->spyShipmentMethodPrices ?: new ArrayObject();
        $this->spyShipmentMethodStores = $this->spyShipmentMethodStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShipmentMethod' => $this->idShipmentMethod,
            'fkShipmentCarrier' => $this->fkShipmentCarrier,
            'fkTaxSet' => $this->fkTaxSet,
            'availabilityPlugin' => $this->availabilityPlugin,
            'defaultPrice' => $this->defaultPrice,
            'deliveryTimePlugin' => $this->deliveryTimePlugin,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'pricePlugin' => $this->pricePlugin,
            'shipmentMethodKey' => $this->shipmentMethodKey,
            'shipmentCarrier' => $this->shipmentCarrier,
            'taxSet' => $this->taxSet,
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices,
            'spyShipmentMethodStores' => $this->spyShipmentMethodStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_method' => $this->idShipmentMethod,
            'fk_shipment_carrier' => $this->fkShipmentCarrier,
            'fk_tax_set' => $this->fkTaxSet,
            'availability_plugin' => $this->availabilityPlugin,
            'default_price' => $this->defaultPrice,
            'delivery_time_plugin' => $this->deliveryTimePlugin,
            'is_active' => $this->isActive,
            'name' => $this->name,
            'price_plugin' => $this->pricePlugin,
            'shipment_method_key' => $this->shipmentMethodKey,
            'shipment_carrier' => $this->shipmentCarrier,
            'tax_set' => $this->taxSet,
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices,
            'spy_shipment_method_stores' => $this->spyShipmentMethodStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_method' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, false) : $this->idShipmentMethod,
            'fk_shipment_carrier' => $this->fkShipmentCarrier instanceof AbstractTransfer ? $this->fkShipmentCarrier->toArray(true, false) : $this->fkShipmentCarrier,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'availability_plugin' => $this->availabilityPlugin instanceof AbstractTransfer ? $this->availabilityPlugin->toArray(true, false) : $this->availabilityPlugin,
            'default_price' => $this->defaultPrice instanceof AbstractTransfer ? $this->defaultPrice->toArray(true, false) : $this->defaultPrice,
            'delivery_time_plugin' => $this->deliveryTimePlugin instanceof AbstractTransfer ? $this->deliveryTimePlugin->toArray(true, false) : $this->deliveryTimePlugin,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'price_plugin' => $this->pricePlugin instanceof AbstractTransfer ? $this->pricePlugin->toArray(true, false) : $this->pricePlugin,
            'shipment_method_key' => $this->shipmentMethodKey instanceof AbstractTransfer ? $this->shipmentMethodKey->toArray(true, false) : $this->shipmentMethodKey,
            'shipment_carrier' => $this->shipmentCarrier instanceof AbstractTransfer ? $this->shipmentCarrier->toArray(true, false) : $this->shipmentCarrier,
            'tax_set' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, false) : $this->taxSet,
            'spy_shipment_method_prices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, false),
            'spy_shipment_method_stores' => $this->spyShipmentMethodStores instanceof AbstractTransfer ? $this->spyShipmentMethodStores->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethodStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShipmentMethod' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, true) : $this->idShipmentMethod,
            'fkShipmentCarrier' => $this->fkShipmentCarrier instanceof AbstractTransfer ? $this->fkShipmentCarrier->toArray(true, true) : $this->fkShipmentCarrier,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'availabilityPlugin' => $this->availabilityPlugin instanceof AbstractTransfer ? $this->availabilityPlugin->toArray(true, true) : $this->availabilityPlugin,
            'defaultPrice' => $this->defaultPrice instanceof AbstractTransfer ? $this->defaultPrice->toArray(true, true) : $this->defaultPrice,
            'deliveryTimePlugin' => $this->deliveryTimePlugin instanceof AbstractTransfer ? $this->deliveryTimePlugin->toArray(true, true) : $this->deliveryTimePlugin,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'pricePlugin' => $this->pricePlugin instanceof AbstractTransfer ? $this->pricePlugin->toArray(true, true) : $this->pricePlugin,
            'shipmentMethodKey' => $this->shipmentMethodKey instanceof AbstractTransfer ? $this->shipmentMethodKey->toArray(true, true) : $this->shipmentMethodKey,
            'shipmentCarrier' => $this->shipmentCarrier instanceof AbstractTransfer ? $this->shipmentCarrier->toArray(true, true) : $this->shipmentCarrier,
            'taxSet' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, true) : $this->taxSet,
            'spyShipmentMethodPrices' => $this->spyShipmentMethodPrices instanceof AbstractTransfer ? $this->spyShipmentMethodPrices->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethodPrices, true, true),
            'spyShipmentMethodStores' => $this->spyShipmentMethodStores instanceof AbstractTransfer ? $this->spyShipmentMethodStores->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethodStores, true, true),
        ];
    }
}
