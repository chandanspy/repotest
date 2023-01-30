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
class SpyProductMeasurementSalesUnitStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE = 'idProductMeasurementSalesUnitStore';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_SALES_UNIT = 'fkProductMeasurementSalesUnit';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const SPY_STORE = 'spyStore';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_SALES_UNIT = 'spyProductMeasurementSalesUnit';

    /**
     * @var integer|null
     */
    protected $idProductMeasurementSalesUnitStore;

    /**
     * @var integer|null
     */
    protected $fkProductMeasurementSalesUnit;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $spyStore;

    /**
     * @var \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer|null
     */
    protected $spyProductMeasurementSalesUnit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_sales_unit_store' => 'idProductMeasurementSalesUnitStore',
        'idProductMeasurementSalesUnitStore' => 'idProductMeasurementSalesUnitStore',
        'IdProductMeasurementSalesUnitStore' => 'idProductMeasurementSalesUnitStore',
        'fk_product_measurement_sales_unit' => 'fkProductMeasurementSalesUnit',
        'fkProductMeasurementSalesUnit' => 'fkProductMeasurementSalesUnit',
        'FkProductMeasurementSalesUnit' => 'fkProductMeasurementSalesUnit',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'spy_store' => 'spyStore',
        'spyStore' => 'spyStore',
        'SpyStore' => 'spyStore',
        'spy_product_measurement_sales_unit' => 'spyProductMeasurementSalesUnit',
        'spyProductMeasurementSalesUnit' => 'spyProductMeasurementSalesUnit',
        'SpyProductMeasurementSalesUnit' => 'spyProductMeasurementSalesUnit',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_sales_unit_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_measurement_sales_unit',
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
        self::SPY_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_sales_unit',
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
    public static $entityNamespace = 'Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore';


    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementSalesUnitStore
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnitStore($idProductMeasurementSalesUnitStore)
    {
        $this->idProductMeasurementSalesUnitStore = $idProductMeasurementSalesUnitStore;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductMeasurementSalesUnitStore()
    {
        return $this->idProductMeasurementSalesUnitStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementSalesUnitStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnitStoreOrFail($idProductMeasurementSalesUnitStore)
    {
        if ($idProductMeasurementSalesUnitStore === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE);
        }

        return $this->setIdProductMeasurementSalesUnitStore($idProductMeasurementSalesUnitStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductMeasurementSalesUnitStoreOrFail()
    {
        if ($this->idProductMeasurementSalesUnitStore === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE);
        }

        return $this->idProductMeasurementSalesUnitStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementSalesUnitStore()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_SALES_UNIT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductMeasurementSalesUnit
     *
     * @return $this
     */
    public function setFkProductMeasurementSalesUnit($fkProductMeasurementSalesUnit)
    {
        $this->fkProductMeasurementSalesUnit = $fkProductMeasurementSalesUnit;
        $this->modifiedProperties[self::FK_PRODUCT_MEASUREMENT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductMeasurementSalesUnit()
    {
        return $this->fkProductMeasurementSalesUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductMeasurementSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductMeasurementSalesUnitOrFail($fkProductMeasurementSalesUnit)
    {
        if ($fkProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->setFkProductMeasurementSalesUnit($fkProductMeasurementSalesUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductMeasurementSalesUnitOrFail()
    {
        if ($this->fkProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->fkProductMeasurementSalesUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductMeasurementSalesUnit()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_MEASUREMENT_SALES_UNIT);

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
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $spyStore
     *
     * @return $this
     */
    public function setSpyStore(SpyStoreEntityTransfer $spyStore = null)
    {
        $this->spyStore = $spyStore;
        $this->modifiedProperties[self::SPY_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getSpyStore()
    {
        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $spyStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyStoreOrFail(SpyStoreEntityTransfer $spyStore)
    {
        return $this->setSpyStore($spyStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getSpyStoreOrFail()
    {
        if ($this->spyStore === null) {
            $this->throwNullValueException(static::SPY_STORE);
        }

        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStore()
    {
        $this->assertPropertyIsSet(self::SPY_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer|null $spyProductMeasurementSalesUnit
     *
     * @return $this
     */
    public function setSpyProductMeasurementSalesUnit(SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnit = null)
    {
        $this->spyProductMeasurementSalesUnit = $spyProductMeasurementSalesUnit;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer|null
     */
    public function getSpyProductMeasurementSalesUnit()
    {
        return $this->spyProductMeasurementSalesUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductMeasurementSalesUnitOrFail(SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnit)
    {
        return $this->setSpyProductMeasurementSalesUnit($spyProductMeasurementSalesUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer
     */
    public function getSpyProductMeasurementSalesUnitOrFail()
    {
        if ($this->spyProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->spyProductMeasurementSalesUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementSalesUnit()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT);

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
                case 'idProductMeasurementSalesUnitStore':
                case 'fkProductMeasurementSalesUnit':
                case 'fkStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyStore':
                case 'spyProductMeasurementSalesUnit':
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
                case 'idProductMeasurementSalesUnitStore':
                case 'fkProductMeasurementSalesUnit':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStore':
                case 'spyProductMeasurementSalesUnit':
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
                case 'idProductMeasurementSalesUnitStore':
                case 'fkProductMeasurementSalesUnit':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStore':
                case 'spyProductMeasurementSalesUnit':
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
            'idProductMeasurementSalesUnitStore' => $this->idProductMeasurementSalesUnitStore,
            'fkProductMeasurementSalesUnit' => $this->fkProductMeasurementSalesUnit,
            'fkStore' => $this->fkStore,
            'spyStore' => $this->spyStore,
            'spyProductMeasurementSalesUnit' => $this->spyProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit_store' => $this->idProductMeasurementSalesUnitStore,
            'fk_product_measurement_sales_unit' => $this->fkProductMeasurementSalesUnit,
            'fk_store' => $this->fkStore,
            'spy_store' => $this->spyStore,
            'spy_product_measurement_sales_unit' => $this->spyProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit_store' => $this->idProductMeasurementSalesUnitStore instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnitStore->toArray(true, false) : $this->idProductMeasurementSalesUnitStore,
            'fk_product_measurement_sales_unit' => $this->fkProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->fkProductMeasurementSalesUnit->toArray(true, false) : $this->fkProductMeasurementSalesUnit,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'spy_store' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, false) : $this->spyStore,
            'spy_product_measurement_sales_unit' => $this->spyProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnit->toArray(true, false) : $this->spyProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnitStore' => $this->idProductMeasurementSalesUnitStore instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnitStore->toArray(true, true) : $this->idProductMeasurementSalesUnitStore,
            'fkProductMeasurementSalesUnit' => $this->fkProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->fkProductMeasurementSalesUnit->toArray(true, true) : $this->fkProductMeasurementSalesUnit,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'spyStore' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, true) : $this->spyStore,
            'spyProductMeasurementSalesUnit' => $this->spyProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnit->toArray(true, true) : $this->spyProductMeasurementSalesUnit,
        ];
    }
}
