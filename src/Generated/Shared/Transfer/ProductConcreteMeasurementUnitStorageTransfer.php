<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConcreteMeasurementUnitStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BASE_UNIT = 'baseUnit';

    /**
     * @var string
     */
    public const SALES_UNITS = 'salesUnits';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer|null
     */
    protected $baseUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductConcreteMeasurementSalesUnitTransfer[]
     */
    protected $salesUnits;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'base_unit' => 'baseUnit',
        'baseUnit' => 'baseUnit',
        'BaseUnit' => 'baseUnit',
        'sales_units' => 'salesUnits',
        'salesUnits' => 'salesUnits',
        'SalesUnits' => 'salesUnits',
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BASE_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'base_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_UNITS => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteMeasurementSalesUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
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
     * @param \Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer|null $baseUnit
     *
     * @return $this
     */
    public function setBaseUnit(ProductConcreteMeasurementBaseUnitTransfer $baseUnit = null)
    {
        $this->baseUnit = $baseUnit;
        $this->modifiedProperties[self::BASE_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @return \Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer|null
     */
    public function getBaseUnit()
    {
        return $this->baseUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer $baseUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBaseUnitOrFail(ProductConcreteMeasurementBaseUnitTransfer $baseUnit)
    {
        return $this->setBaseUnit($baseUnit);
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteMeasurementBaseUnitTransfer
     */
    public function getBaseUnitOrFail()
    {
        if ($this->baseUnit === null) {
            $this->throwNullValueException(static::BASE_UNIT);
        }

        return $this->baseUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBaseUnit()
    {
        $this->assertPropertyIsSet(self::BASE_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductConcreteMeasurementSalesUnitTransfer[] $salesUnits
     *
     * @return $this
     */
    public function setSalesUnits(ArrayObject $salesUnits)
    {
        $this->salesUnits = $salesUnits;
        $this->modifiedProperties[self::SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductConcreteMeasurementSalesUnitTransfer[]
     */
    public function getSalesUnits()
    {
        return $this->salesUnits;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param \Generated\Shared\Transfer\ProductConcreteMeasurementSalesUnitTransfer $salesUnit
     *
     * @return $this
     */
    public function addSalesUnit(ProductConcreteMeasurementSalesUnitTransfer $salesUnit)
    {
        $this->salesUnits[] = $salesUnit;
        $this->modifiedProperties[self::SALES_UNITS] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_UNITS);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

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
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'baseUnit':
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
                case 'salesUnits':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'baseUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'salesUnits':
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
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'baseUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'salesUnits':
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
        $this->salesUnits = $this->salesUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key,
            'baseUnit' => $this->baseUnit,
            'salesUnits' => $this->salesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key,
            'base_unit' => $this->baseUnit,
            'sales_units' => $this->salesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'base_unit' => $this->baseUnit instanceof AbstractTransfer ? $this->baseUnit->toArray(true, false) : $this->baseUnit,
            'sales_units' => $this->salesUnits instanceof AbstractTransfer ? $this->salesUnits->toArray(true, false) : $this->addValuesToCollection($this->salesUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'baseUnit' => $this->baseUnit instanceof AbstractTransfer ? $this->baseUnit->toArray(true, true) : $this->baseUnit,
            'salesUnits' => $this->salesUnits instanceof AbstractTransfer ? $this->salesUnits->toArray(true, true) : $this->addValuesToCollection($this->salesUnits, true, true),
        ];
    }
}
