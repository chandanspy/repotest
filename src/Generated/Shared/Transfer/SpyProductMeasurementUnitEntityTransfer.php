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
class SpyProductMeasurementUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_UNIT = 'idProductMeasurementUnit';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const DEFAULT_PRECISION = 'defaultPrecision';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_BASE_UNITS = 'spyProductMeasurementBaseUnits';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_SALES_UNITS = 'spyProductMeasurementSalesUnits';

    /**
     * @var integer|null
     */
    protected $idProductMeasurementUnit;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var integer|null
     */
    protected $defaultPrecision;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[]
     */
    protected $spyProductMeasurementBaseUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitEntityTransfer[]
     */
    protected $spyProductMeasurementSalesUnits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_unit' => 'idProductMeasurementUnit',
        'idProductMeasurementUnit' => 'idProductMeasurementUnit',
        'IdProductMeasurementUnit' => 'idProductMeasurementUnit',
        'code' => 'code',
        'Code' => 'code',
        'default_precision' => 'defaultPrecision',
        'defaultPrecision' => 'defaultPrecision',
        'DefaultPrecision' => 'defaultPrecision',
        'name' => 'name',
        'Name' => 'name',
        'spy_product_measurement_base_units' => 'spyProductMeasurementBaseUnits',
        'spyProductMeasurementBaseUnits' => 'spyProductMeasurementBaseUnits',
        'SpyProductMeasurementBaseUnits' => 'spyProductMeasurementBaseUnits',
        'spy_product_measurement_sales_units' => 'spyProductMeasurementSalesUnits',
        'spyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
        'SpyProductMeasurementSalesUnits' => 'spyProductMeasurementSalesUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_base_units',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnit';


    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementUnit
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductMeasurementUnit()
    {
        return $this->idProductMeasurementUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementUnit
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductMeasurementUnitOrFail()
    {
        if ($this->idProductMeasurementUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->idProductMeasurementUnit;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $defaultPrecision
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
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultPrecision()
    {
        return $this->defaultPrecision;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultPrecision
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultPrecisionOrFail()
    {
        if ($this->defaultPrecision === null) {
            $this->throwNullValueException(static::DEFAULT_PRECISION);
        }

        return $this->defaultPrecision;
    }

    /**
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[] $spyProductMeasurementBaseUnits
     *
     * @return $this
     */
    public function setSpyProductMeasurementBaseUnits(ArrayObject $spyProductMeasurementBaseUnits)
    {
        $this->spyProductMeasurementBaseUnits = $spyProductMeasurementBaseUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer[]
     */
    public function getSpyProductMeasurementBaseUnits()
    {
        return $this->spyProductMeasurementBaseUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer $spyProductMeasurementBaseUnits
     *
     * @return $this
     */
    public function addSpyProductMeasurementBaseUnits(SpyProductMeasurementBaseUnitEntityTransfer $spyProductMeasurementBaseUnits)
    {
        $this->spyProductMeasurementBaseUnits[] = $spyProductMeasurementBaseUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementBaseUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_BASE_UNITS);

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
                case 'idProductMeasurementUnit':
                case 'code':
                case 'defaultPrecision':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductMeasurementBaseUnits':
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
                case 'idProductMeasurementUnit':
                case 'code':
                case 'defaultPrecision':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductMeasurementBaseUnits':
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
                case 'idProductMeasurementUnit':
                case 'code':
                case 'defaultPrecision':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductMeasurementBaseUnits':
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
        $this->spyProductMeasurementBaseUnits = $this->spyProductMeasurementBaseUnits ?: new ArrayObject();
        $this->spyProductMeasurementSalesUnits = $this->spyProductMeasurementSalesUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit,
            'code' => $this->code,
            'defaultPrecision' => $this->defaultPrecision,
            'name' => $this->name,
            'spyProductMeasurementBaseUnits' => $this->spyProductMeasurementBaseUnits,
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit,
            'code' => $this->code,
            'default_precision' => $this->defaultPrecision,
            'name' => $this->name,
            'spy_product_measurement_base_units' => $this->spyProductMeasurementBaseUnits,
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_unit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, false) : $this->idProductMeasurementUnit,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'default_precision' => $this->defaultPrecision instanceof AbstractTransfer ? $this->defaultPrecision->toArray(true, false) : $this->defaultPrecision,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_product_measurement_base_units' => $this->spyProductMeasurementBaseUnits instanceof AbstractTransfer ? $this->spyProductMeasurementBaseUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementBaseUnits, true, false),
            'spy_product_measurement_sales_units' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, true) : $this->idProductMeasurementUnit,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'defaultPrecision' => $this->defaultPrecision instanceof AbstractTransfer ? $this->defaultPrecision->toArray(true, true) : $this->defaultPrecision,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyProductMeasurementBaseUnits' => $this->spyProductMeasurementBaseUnits instanceof AbstractTransfer ? $this->spyProductMeasurementBaseUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementBaseUnits, true, true),
            'spyProductMeasurementSalesUnits' => $this->spyProductMeasurementSalesUnits instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnits, true, true),
        ];
    }
}
