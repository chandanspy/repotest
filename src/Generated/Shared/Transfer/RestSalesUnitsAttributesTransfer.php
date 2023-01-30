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
class RestSalesUnitsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONVERSION = 'conversion';

    /**
     * @var string
     */
    public const PRECISION = 'precision';

    /**
     * @var string
     */
    public const IS_DISPLAYED = 'isDisplayed';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_UNIT_CODE = 'productMeasurementUnitCode';

    /**
     * @var int|null
     */
    protected $conversion;

    /**
     * @var int|null
     */
    protected $precision;

    /**
     * @var bool|null
     */
    protected $isDisplayed;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var string|null
     */
    protected $productMeasurementUnitCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'conversion' => 'conversion',
        'Conversion' => 'conversion',
        'precision' => 'precision',
        'Precision' => 'precision',
        'is_displayed' => 'isDisplayed',
        'isDisplayed' => 'isDisplayed',
        'IsDisplayed' => 'isDisplayed',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'product_measurement_unit_code' => 'productMeasurementUnitCode',
        'productMeasurementUnitCode' => 'productMeasurementUnitCode',
        'ProductMeasurementUnitCode' => 'productMeasurementUnitCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONVERSION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'conversion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRECISION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'precision',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DISPLAYED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_displayed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_MEASUREMENT_UNIT_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_measurement_unit_code',
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
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $conversion
     *
     * @return $this
     */
    public function setConversion($conversion)
    {
        $this->conversion = $conversion;
        $this->modifiedProperties[self::CONVERSION] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return int|null
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $conversion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConversionOrFail($conversion)
    {
        if ($conversion === null) {
            $this->throwNullValueException(static::CONVERSION);
        }

        return $this->setConversion($conversion);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getConversionOrFail()
    {
        if ($this->conversion === null) {
            $this->throwNullValueException(static::CONVERSION);
        }

        return $this->conversion;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConversion()
    {
        $this->assertPropertyIsSet(self::CONVERSION);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $precision
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        $this->modifiedProperties[self::PRECISION] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $precision
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPrecisionOrFail($precision)
    {
        if ($precision === null) {
            $this->throwNullValueException(static::PRECISION);
        }

        return $this->setPrecision($precision);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPrecisionOrFail()
    {
        if ($this->precision === null) {
            $this->throwNullValueException(static::PRECISION);
        }

        return $this->precision;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrecision()
    {
        $this->assertPropertyIsSet(self::PRECISION);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param bool|null $isDisplayed
     *
     * @return $this
     */
    public function setIsDisplayed($isDisplayed)
    {
        $this->isDisplayed = $isDisplayed;
        $this->modifiedProperties[self::IS_DISPLAYED] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return bool|null
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param bool|null $isDisplayed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDisplayedOrFail($isDisplayed)
    {
        if ($isDisplayed === null) {
            $this->throwNullValueException(static::IS_DISPLAYED);
        }

        return $this->setIsDisplayed($isDisplayed);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDisplayedOrFail()
    {
        if ($this->isDisplayed === null) {
            $this->throwNullValueException(static::IS_DISPLAYED);
        }

        return $this->isDisplayed;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDisplayed()
    {
        $this->assertPropertyIsSet(self::IS_DISPLAYED);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param bool|null $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        $this->modifiedProperties[self::IS_DEFAULT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param bool|null $isDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultOrFail($isDefault)
    {
        if ($isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->setIsDefault($isDefault);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefault()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|null $productMeasurementUnitCode
     *
     * @return $this
     */
    public function setProductMeasurementUnitCode($productMeasurementUnitCode)
    {
        $this->productMeasurementUnitCode = $productMeasurementUnitCode;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_UNIT_CODE] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return string|null
     */
    public function getProductMeasurementUnitCode()
    {
        return $this->productMeasurementUnitCode;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|null $productMeasurementUnitCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementUnitCodeOrFail($productMeasurementUnitCode)
    {
        if ($productMeasurementUnitCode === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_UNIT_CODE);
        }

        return $this->setProductMeasurementUnitCode($productMeasurementUnitCode);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductMeasurementUnitCodeOrFail()
    {
        if ($this->productMeasurementUnitCode === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_UNIT_CODE);
        }

        return $this->productMeasurementUnitCode;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductMeasurementUnitCode()
    {
        $this->assertPropertyIsSet(self::PRODUCT_MEASUREMENT_UNIT_CODE);

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
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
                case 'productMeasurementUnitCode':
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
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
                case 'productMeasurementUnitCode':
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
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
                case 'productMeasurementUnitCode':
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
            'conversion' => $this->conversion,
            'precision' => $this->precision,
            'isDisplayed' => $this->isDisplayed,
            'isDefault' => $this->isDefault,
            'productMeasurementUnitCode' => $this->productMeasurementUnitCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'conversion' => $this->conversion,
            'precision' => $this->precision,
            'is_displayed' => $this->isDisplayed,
            'is_default' => $this->isDefault,
            'product_measurement_unit_code' => $this->productMeasurementUnitCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, false) : $this->conversion,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, false) : $this->precision,
            'is_displayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, false) : $this->isDisplayed,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'product_measurement_unit_code' => $this->productMeasurementUnitCode instanceof AbstractTransfer ? $this->productMeasurementUnitCode->toArray(true, false) : $this->productMeasurementUnitCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, true) : $this->conversion,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, true) : $this->precision,
            'isDisplayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, true) : $this->isDisplayed,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'productMeasurementUnitCode' => $this->productMeasurementUnitCode instanceof AbstractTransfer ? $this->productMeasurementUnitCode->toArray(true, true) : $this->productMeasurementUnitCode,
        ];
    }
}
