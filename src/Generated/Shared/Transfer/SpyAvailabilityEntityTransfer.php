<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyAvailabilityEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_AVAILABILITY = 'idAvailability';

    /**
     * @var string
     */
    public const FK_AVAILABILITY_ABSTRACT = 'fkAvailabilityAbstract';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'isNeverOutOfStock';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SPY_AVAILABILITY_ABSTRACT = 'spyAvailabilityAbstract';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var integer|null
     */
    protected $idAvailability;

    /**
     * @var integer|null
     */
    protected $fkAvailabilityAbstract;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var boolean|null
     */
    protected $isNeverOutOfStock;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer|null
     */
    protected $spyAvailabilityAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_availability' => 'idAvailability',
        'idAvailability' => 'idAvailability',
        'IdAvailability' => 'idAvailability',
        'fk_availability_abstract' => 'fkAvailabilityAbstract',
        'fkAvailabilityAbstract' => 'fkAvailabilityAbstract',
        'FkAvailabilityAbstract' => 'fkAvailabilityAbstract',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'is_never_out_of_stock' => 'isNeverOutOfStock',
        'isNeverOutOfStock' => 'isNeverOutOfStock',
        'IsNeverOutOfStock' => 'isNeverOutOfStock',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sku' => 'sku',
        'Sku' => 'sku',
        'spy_availability_abstract' => 'spyAvailabilityAbstract',
        'spyAvailabilityAbstract' => 'spyAvailabilityAbstract',
        'SpyAvailabilityAbstract' => 'spyAvailabilityAbstract',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_AVAILABILITY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_availability',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_AVAILABILITY_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_availability_abstract',
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
        self::IS_NEVER_OUT_OF_STOCK => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_never_out_of_stock',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITY_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availability_abstract',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Availability\Persistence\SpyAvailability';


    /**
     * @module 
     *
     * @param integer|null $idAvailability
     *
     * @return $this
     */
    public function setIdAvailability($idAvailability)
    {
        $this->idAvailability = $idAvailability;
        $this->modifiedProperties[self::ID_AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAvailability()
    {
        return $this->idAvailability;
    }

    /**
     * @module 
     *
     * @param integer|null $idAvailability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAvailabilityOrFail($idAvailability)
    {
        if ($idAvailability === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY);
        }

        return $this->setIdAvailability($idAvailability);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAvailabilityOrFail()
    {
        if ($this->idAvailability === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY);
        }

        return $this->idAvailability;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAvailability()
    {
        $this->assertPropertyIsSet(self::ID_AVAILABILITY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAvailabilityAbstract
     *
     * @return $this
     */
    public function setFkAvailabilityAbstract($fkAvailabilityAbstract)
    {
        $this->fkAvailabilityAbstract = $fkAvailabilityAbstract;
        $this->modifiedProperties[self::FK_AVAILABILITY_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAvailabilityAbstract()
    {
        return $this->fkAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAvailabilityAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAvailabilityAbstractOrFail($fkAvailabilityAbstract)
    {
        if ($fkAvailabilityAbstract === null) {
            $this->throwNullValueException(static::FK_AVAILABILITY_ABSTRACT);
        }

        return $this->setFkAvailabilityAbstract($fkAvailabilityAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAvailabilityAbstractOrFail()
    {
        if ($this->fkAvailabilityAbstract === null) {
            $this->throwNullValueException(static::FK_AVAILABILITY_ABSTRACT);
        }

        return $this->fkAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAvailabilityAbstract()
    {
        $this->assertPropertyIsSet(self::FK_AVAILABILITY_ABSTRACT);

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
     * @param boolean|null $isNeverOutOfStock
     *
     * @return $this
     */
    public function setIsNeverOutOfStock($isNeverOutOfStock)
    {
        $this->isNeverOutOfStock = $isNeverOutOfStock;
        $this->modifiedProperties[self::IS_NEVER_OUT_OF_STOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->isNeverOutOfStock;
    }

    /**
     * @module 
     *
     * @param boolean|null $isNeverOutOfStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNeverOutOfStockOrFail($isNeverOutOfStock)
    {
        if ($isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->setIsNeverOutOfStock($isNeverOutOfStock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsNeverOutOfStockOrFail()
    {
        if ($this->isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->isNeverOutOfStock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNeverOutOfStock()
    {
        $this->assertPropertyIsSet(self::IS_NEVER_OUT_OF_STOCK);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        if ($quantity !== null && !$quantity instanceof Decimal) {
            $quantity = new Decimal($quantity);
        }

        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer|null $spyAvailabilityAbstract
     *
     * @return $this
     */
    public function setSpyAvailabilityAbstract(SpyAvailabilityAbstractEntityTransfer $spyAvailabilityAbstract = null)
    {
        $this->spyAvailabilityAbstract = $spyAvailabilityAbstract;
        $this->modifiedProperties[self::SPY_AVAILABILITY_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer|null
     */
    public function getSpyAvailabilityAbstract()
    {
        return $this->spyAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer $spyAvailabilityAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyAvailabilityAbstractOrFail(SpyAvailabilityAbstractEntityTransfer $spyAvailabilityAbstract)
    {
        return $this->setSpyAvailabilityAbstract($spyAvailabilityAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyAvailabilityAbstractEntityTransfer
     */
    public function getSpyAvailabilityAbstractOrFail()
    {
        if ($this->spyAvailabilityAbstract === null) {
            $this->throwNullValueException(static::SPY_AVAILABILITY_ABSTRACT);
        }

        return $this->spyAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilityAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_AVAILABILITY_ABSTRACT);

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
                case 'idAvailability':
                case 'fkAvailabilityAbstract':
                case 'fkStore':
                case 'isNeverOutOfStock':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAvailabilityAbstract':
                case 'store':
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
                case 'quantity':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idAvailability':
                case 'fkAvailabilityAbstract':
                case 'fkStore':
                case 'isNeverOutOfStock':
                case 'sku':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAvailabilityAbstract':
                case 'store':
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
                case 'idAvailability':
                case 'fkAvailabilityAbstract':
                case 'fkStore':
                case 'isNeverOutOfStock':
                case 'sku':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAvailabilityAbstract':
                case 'store':
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
            'idAvailability' => $this->idAvailability,
            'fkAvailabilityAbstract' => $this->fkAvailabilityAbstract,
            'fkStore' => $this->fkStore,
            'isNeverOutOfStock' => $this->isNeverOutOfStock,
            'sku' => $this->sku,
            'spyAvailabilityAbstract' => $this->spyAvailabilityAbstract,
            'store' => $this->store,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_availability' => $this->idAvailability,
            'fk_availability_abstract' => $this->fkAvailabilityAbstract,
            'fk_store' => $this->fkStore,
            'is_never_out_of_stock' => $this->isNeverOutOfStock,
            'sku' => $this->sku,
            'spy_availability_abstract' => $this->spyAvailabilityAbstract,
            'store' => $this->store,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_availability' => $this->idAvailability instanceof AbstractTransfer ? $this->idAvailability->toArray(true, false) : $this->idAvailability,
            'fk_availability_abstract' => $this->fkAvailabilityAbstract instanceof AbstractTransfer ? $this->fkAvailabilityAbstract->toArray(true, false) : $this->fkAvailabilityAbstract,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'is_never_out_of_stock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, false) : $this->isNeverOutOfStock,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'spy_availability_abstract' => $this->spyAvailabilityAbstract instanceof AbstractTransfer ? $this->spyAvailabilityAbstract->toArray(true, false) : $this->spyAvailabilityAbstract,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAvailability' => $this->idAvailability instanceof AbstractTransfer ? $this->idAvailability->toArray(true, true) : $this->idAvailability,
            'fkAvailabilityAbstract' => $this->fkAvailabilityAbstract instanceof AbstractTransfer ? $this->fkAvailabilityAbstract->toArray(true, true) : $this->fkAvailabilityAbstract,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'isNeverOutOfStock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, true) : $this->isNeverOutOfStock,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'spyAvailabilityAbstract' => $this->spyAvailabilityAbstract instanceof AbstractTransfer ? $this->spyAvailabilityAbstract->toArray(true, true) : $this->spyAvailabilityAbstract,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'quantity' => $this->quantity,
        ];
    }
}
