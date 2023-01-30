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
class ProductConcreteMeasurementBaseUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_UNIT = 'idProductMeasurementUnit';

    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_BASE_UNIT = 'idProductMeasurementBaseUnit';

    /**
     * @var int|null
     */
    protected $idProductMeasurementUnit;

    /**
     * @var int|null
     */
    protected $idProductMeasurementBaseUnit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_unit' => 'idProductMeasurementUnit',
        'idProductMeasurementUnit' => 'idProductMeasurementUnit',
        'IdProductMeasurementUnit' => 'idProductMeasurementUnit',
        'id_product_measurement_base_unit' => 'idProductMeasurementBaseUnit',
        'idProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
        'IdProductMeasurementBaseUnit' => 'idProductMeasurementBaseUnit',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_unit',
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
    ];

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @param int|null $idProductMeasurementUnit
     *
     * @return $this
     */
    public function setIdProductMeasurementUnit($idProductMeasurementUnit)
    {
        $this->idProductMeasurementUnit = $idProductMeasurementUnit;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getIdProductMeasurementUnit()
    {
        return $this->idProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @param int|null $idProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementUnitOrFail($idProductMeasurementUnit)
    {
        if ($idProductMeasurementUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->setIdProductMeasurementUnit($idProductMeasurementUnit);
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductMeasurementUnitOrFail()
    {
        if ($this->idProductMeasurementUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->idProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getIdProductMeasurementBaseUnit()
    {
        return $this->idProductMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
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
                case 'idProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
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
                case 'idProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
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
                case 'idProductMeasurementUnit':
                case 'idProductMeasurementBaseUnit':
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
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit,
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit,
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, false) : $this->idProductMeasurementUnit,
            'id_product_measurement_base_unit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, false) : $this->idProductMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, true) : $this->idProductMeasurementUnit,
            'idProductMeasurementBaseUnit' => $this->idProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->idProductMeasurementBaseUnit->toArray(true, true) : $this->idProductMeasurementBaseUnit,
        ];
    }
}
