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
class ProductMeasurementBaseUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_UNIT = 'fkProductMeasurementUnit';

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
    public const PRODUCT_MEASUREMENT_UNIT = 'productMeasurementUnit';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT = 'productAbstract';

    /**
     * @var int|null
     */
    protected $fkProductMeasurementUnit;

    /**
     * @var int|null
     */
    protected $idProductMeasurementBaseUnit;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    protected $productMeasurementUnit;

    /**
     * @var \Generated\Shared\Transfer\ProductAbstractTransfer|null
     */
    protected $productAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_product_measurement_unit' => 'fkProductMeasurementUnit',
        'fkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'FkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'id_product_measurement_base_unit' => 'idProductMeasurementBaseUnit',
        'idProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
        'IdProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'product_measurement_unit' => 'productMeasurementUnit',
        'productMeasurementUnit' => 'productMeasurementUnit',
        'ProductMeasurementUnit' => 'productMeasurementUnit',
        'product_abstract' => 'productAbstract',
        'productAbstract' => 'productAbstract',
        'ProductAbstract' => 'productAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'int',
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
        self::ID_PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'int',
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
            'type' => 'int',
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
        self::PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductMeasurementUnitTransfer',
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
        self::PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractTransfer',
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
    ];

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @param int|null $fkProductMeasurementUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getFkProductMeasurementUnit()
    {
        return $this->fkProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @param int|null $fkProductMeasurementUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductMeasurementUnitOrFail()
    {
        if ($this->fkProductMeasurementUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->fkProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
     *
     * @param int|null $idProductMeasurementBaseUnit
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
     * @module ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getIdProductMeasurementBaseUnit()
    {
        return $this->idProductMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param int|null $idProductMeasurementBaseUnit
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
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductMeasurementBaseUnitOrFail()
    {
        if ($this->idProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->idProductMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
     *
     * @param int|null $fkProductAbstract
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
     * @module ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param int|null $fkProductAbstract
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
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null $productMeasurementUnit
     *
     * @return $this
     */
    public function setProductMeasurementUnit(ProductMeasurementUnitTransfer $productMeasurementUnit = null)
    {
        $this->productMeasurementUnit = $productMeasurementUnit;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnit|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    public function getProductMeasurementUnit()
    {
        return $this->productMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnit|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementUnitTransfer $productMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementUnitOrFail(ProductMeasurementUnitTransfer $productMeasurementUnit)
    {
        return $this->setProductMeasurementUnit($productMeasurementUnit);
    }

    /**
     * @module ProductMeasurementUnit|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementUnitTransfer
     */
    public function getProductMeasurementUnitOrFail()
    {
        if ($this->productMeasurementUnit === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->productMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnit
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer|null $productAbstract
     *
     * @return $this
     */
    public function setProductAbstract(ProductAbstractTransfer $productAbstract = null)
    {
        $this->productAbstract = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer|null
     */
    public function getProductAbstract()
    {
        return $this->productAbstract;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractOrFail(ProductAbstractTransfer $productAbstract)
    {
        return $this->setProductAbstract($productAbstract);
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function getProductAbstractOrFail()
    {
        if ($this->productAbstract === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT);
        }

        return $this->productAbstract;
    }

    /**
     * @module ProductMeasurementUnit
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
                case 'fkProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productMeasurementUnit':
                case 'productAbstract':
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
                case 'fkProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
                case 'productAbstract':
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
                case 'fkProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
                case 'productAbstract':
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
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit,
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit,
            'fkProductAbstract' => $this->fkProductAbstract,
            'productMeasurementUnit' => $this->productMeasurementUnit,
            'productAbstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit,
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit,
            'fk_product_abstract' => $this->fkProductAbstract,
            'product_measurement_unit' => $this->productMeasurementUnit,
            'product_abstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, false) : $this->fkProductMeasurementUnit,
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, false) : $this->idProductMeasurementBaseUnit,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'product_measurement_unit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, false) : $this->productMeasurementUnit,
            'product_abstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, false) : $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, true) : $this->fkProductMeasurementUnit,
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, true) : $this->idProductMeasurementBaseUnit,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'productMeasurementUnit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, true) : $this->productMeasurementUnit,
            'productAbstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, true) : $this->productAbstract,
        ];
    }
}
