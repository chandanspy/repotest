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
class RestOrdersSalesUnitAttributesTransfer extends AbstractTransfer
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
    public const PRODUCT_MEASUREMENT_UNIT = 'productMeasurementUnit';

    /**
     * @var int|null
     */
    protected $conversion;

    /**
     * @var int|null
     */
    protected $precision;

    /**
     * @var \Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer|null
     */
    protected $productMeasurementUnit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'conversion' => 'conversion',
        'Conversion' => 'conversion',
        'precision' => 'precision',
        'Precision' => 'precision',
        'product_measurement_unit' => 'productMeasurementUnit',
        'productMeasurementUnit' => 'productMeasurementUnit',
        'ProductMeasurementUnit' => 'productMeasurementUnit',
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
        self::PRODUCT_MEASUREMENT_UNIT => [
            'type' => 'Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer',
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
     * @param \Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer|null $productMeasurementUnit
     *
     * @return $this
     */
    public function setProductMeasurementUnit(RestOrdersProductMeasurementUnitsAttributesTransfer $productMeasurementUnit = null)
    {
        $this->productMeasurementUnit = $productMeasurementUnit;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer|null
     */
    public function getProductMeasurementUnit()
    {
        return $this->productMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer $productMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementUnitOrFail(RestOrdersProductMeasurementUnitsAttributesTransfer $productMeasurementUnit)
    {
        return $this->setProductMeasurementUnit($productMeasurementUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestOrdersProductMeasurementUnitsAttributesTransfer
     */
    public function getProductMeasurementUnitOrFail()
    {
        if ($this->productMeasurementUnit === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_UNIT);
        }

        return $this->productMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
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
                case 'conversion':
                case 'precision':
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
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
            'conversion' => $this->conversion,
            'precision' => $this->precision,
            'productMeasurementUnit' => $this->productMeasurementUnit,
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
            'product_measurement_unit' => $this->productMeasurementUnit,
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
            'product_measurement_unit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, false) : $this->productMeasurementUnit,
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
            'productMeasurementUnit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, true) : $this->productMeasurementUnit,
        ];
    }
}
