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
class SpyProductMeasurementBaseUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_BASE_UNIT = 'idProductMeasurementBaseUnit';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_UNIT = 'fkProductMeasurementUnit';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT = 'productAbstract';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_UNIT = 'productMeasurementUnit';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_SALES_UNITS = 'spyProductMeasurementSalesUnits';

    /**
     * @var integer|null
     */
    protected $idProductMeasurementBaseUnit;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductMeasurementUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $productAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer|null
     */
    protected $productMeasurementUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[]
     */
    protected $spyProductMeasurementSalesUnits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_base_unit' => 'idProductMeasurementBaseUnit',
        'idProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
        'IdProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_product_measurement_unit' => 'fkProductMeasurementUnit',
        'fkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'FkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'product_abstract' => 'productAbstract',
        'productAbstract' => 'productAbstract',
        'ProductAbstract' => 'productAbstract',
        'product_measurement_unit' => 'productMeasurementUnit',
        'productMeasurementUnit' => 'productMeasurementUnit',
        'ProductMeasurementUnit' => 'productMeasurementUnit',
        'spy_product_measurement_sales_units' => 'spyProductMeasurementSalesUnits',
        'spyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
        'SpyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_base_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_measurement_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_measurement_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_sales_units',
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
    public static $entityNamespace = 'Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnit';


    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementBaseUnit
     *
     * @return $this
     */
    public function setIdProductMeasurementBaseUnit($idProductMeasurementBaseUnit)
    {
        $this->idProductMeasurementBaseUnit = $idProductMeasurementBaseUnit;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_BASE_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductMeasurementBaseUnit()
    {
        return $this->idProductMeasurementBaseUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementBaseUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementBaseUnitOrFail($idProductMeasurementBaseUnit)
    {
        if ($idProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->setIdProductMeasurementBaseUnit($idProductMeasurementBaseUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductMeasurementBaseUnitOrFail()
    {
        if ($this->idProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->idProductMeasurementBaseUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementBaseUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_BASE_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductMeasurementUnit
     *
     * @return $this
     */
    public function setFkProductMeasurementUnit($fkProductMeasurementUnit)
    {
        $this->fkProductMeasurementUnit = $fkProductMeasurementUnit;
        $this->modifiedProperties[self::FK_PRODUCT_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductMeasurementUnit()
    {
        return $this->fkProductMeasurementUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductMeasurementUnitOrFail($fkProductMeasurementUnit)
    {
        if ($fkProductMeasurementUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->setFkProductMeasurementUnit($fkProductMeasurementUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductMeasurementUnitOrFail()
    {
        if ($this->fkProductMeasurementUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->fkProductMeasurementUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductMeasurementUnit()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_MEASUREMENT_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $productAbstract
     *
     * @return $this
     */
    public function setProductAbstract(SpyProductAbstractEntityTransfer $productAbstract = null)
    {
        $this->productAbstract = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getProductAbstract()
    {
        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $productAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractOrFail(SpyProductAbstractEntityTransfer $productAbstract)
    {
        return $this->setProductAbstract($productAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getProductAbstractOrFail()
    {
        if ($this->productAbstract === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT);
        }

        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstract()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer|null $productMeasurementUnit
     *
     * @return $this
     */
    public function setProductMeasurementUnit(SpyProductMeasurementUnitEntityTransfer $productMeasurementUnit = null)
    {
        $this->productMeasurementUnit = $productMeasurementUnit;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer|null
     */
    public function getProductMeasurementUnit()
    {
        return $this->productMeasurementUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer $productMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementUnitOrFail(SpyProductMeasurementUnitEntityTransfer $productMeasurementUnit)
    {
        return $this->setProductMeasurementUnit($productMeasurementUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer
     */
    public function getProductMeasurementUnitOrFail()
    {
        if ($this->productMeasurementUnit === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->productMeasurementUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductMeasurementUnit()
    {
        $this->assertPropertyIsSet(self::PRODUCT_MEASUREMENT_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[] $spyProductMeasurementSalesUnits
     *
     * @return $this
     */
    public function setSpyProductMeasurementSalesUnits(ArrayObject $spyProductMeasurementSalesUnits)
    {
        $this->spyProductMeasurementSalesUnits = $spyProductMeasurementSalesUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[]
     */
    public function getSpyProductMeasurementSalesUnits()
    {
        return $this->spyProductMeasurementSalesUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnits
     *
     * @return $this
     */
    public function addSpyProductMeasurementSalesUnits(SpyProductMeasurementSalesUnitEntityTransfer $spyProductMeasurementSalesUnits)
    {
        $this->spyProductMeasurementSalesUnits[] = $spyProductMeasurementSalesUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementSalesUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_SALES_UNITS);

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
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                case 'fkProductMeasurementUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productAbstract':
                case 'productMeasurementUnit':
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
                case 'spyProductMeasurementSalesUnits':
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
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                case 'fkProductMeasurementUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'productAbstract':
                case 'productMeasurementUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductMeasurementSalesUnits':
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
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                case 'fkProductMeasurementUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'productAbstract':
                case 'productMeasurementUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductMeasurementSalesUnits':
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
        $this->spyProductMeasurementSalesUnits = $this->spyProductMeasurementSalesUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit,
            'productAbstract' => $this->productAbstract,
            'productMeasurementUnit' => $this->productMeasurementUnit,
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit,
            'product_abstract' => $this->productAbstract,
            'product_measurement_unit' => $this->productMeasurementUnit,
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, false) : $this->idProductMeasurementBaseUnit,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, false) : $this->fkProductMeasurementUnit,
            'product_abstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, false) : $this->productAbstract,
            'product_measurement_unit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, false) : $this->productMeasurementUnit,
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, true) : $this->idProductMeasurementBaseUnit,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, true) : $this->fkProductMeasurementUnit,
            'productAbstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, true) : $this->productAbstract,
            'productMeasurementUnit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, true) : $this->productMeasurementUnit,
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, true),
        ];
    }
}
