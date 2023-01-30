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
class ProductMeasurementUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_UNIT = 'idProductMeasurementUnit';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const DEFAULT_PRECISION = 'defaultPrecision';

    /**
     * @var int|null
     */
    protected $idProductMeasurementUnit;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var int|null
     */
    protected $defaultPrecision;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_unit' => 'idProductMeasurementUnit',
        'idProductMeasurementUnit' => 'idProductMeasurementUnit',
        'IdProductMeasurementUnit' => 'idProductMeasurementUnit',
        'name' => 'name',
        'Name' => 'name',
        'code' => 'code',
        'Code' => 'code',
        'default_precision' => 'defaultPrecision',
        'defaultPrecision' => 'defaultPrecision',
        'DefaultPrecision' => 'defaultPrecision',
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
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_PRECISION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'default_precision',
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getIdProductMeasurementUnit()
    {
        return $this->idProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param int|null $defaultPrecision
     *
     * @return $this
     */
    public function setDefaultPrecision($defaultPrecision)
    {
        $this->defaultPrecision = $defaultPrecision;
        $this->modifiedProperties[self::DEFAULT_PRECISION] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getDefaultPrecision()
    {
        return $this->defaultPrecision;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param int|null $defaultPrecision
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultPrecisionOrFail($defaultPrecision)
    {
        if ($defaultPrecision === null) {
            $this->throwNullValueException(static::DEFAULT_PRECISION);
        }

        return $this->setDefaultPrecision($defaultPrecision);
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultPrecisionOrFail()
    {
        if ($this->defaultPrecision === null) {
            $this->throwNullValueException(static::DEFAULT_PRECISION);
        }

        return $this->defaultPrecision;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultPrecision()
    {
        $this->assertPropertyIsSet(self::DEFAULT_PRECISION);

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
                case 'name':
                case 'code':
                case 'defaultPrecision':
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
                case 'name':
                case 'code':
                case 'defaultPrecision':
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
                case 'name':
                case 'code':
                case 'defaultPrecision':
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
            'name' => $this->name,
            'code' => $this->code,
            'defaultPrecision' => $this->defaultPrecision,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit,
            'name' => $this->name,
            'code' => $this->code,
            'default_precision' => $this->defaultPrecision,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, false) : $this->idProductMeasurementUnit,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'default_precision' => $this->defaultPrecision instanceof AbstractTransfer ? $this->defaultPrecision->toArray(true, false) : $this->defaultPrecision,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, true) : $this->idProductMeasurementUnit,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'defaultPrecision' => $this->defaultPrecision instanceof AbstractTransfer ? $this->defaultPrecision->toArray(true, true) : $this->defaultPrecision,
        ];
    }
}
