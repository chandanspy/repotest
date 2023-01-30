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
class ProductConcreteMeasurementSalesUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT = 'idProductMeasurementSalesUnit';

    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_UNIT = 'idProductMeasurementUnit';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

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
     * @var int|null
     */
    protected $idProductMeasurementSalesUnit;

    /**
     * @var int|null
     */
    protected $idProductMeasurementUnit;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var float|null
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
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_sales_unit' => 'idProductMeasurementSalesUnit',
        'idProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'IdProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'id_product_measurement_unit' => 'idProductMeasurementUnit',
        'idProductMeasurementUnit' => 'idProductMeasurementUnit',
        'IdProductMeasurementUnit' => 'idProductMeasurementUnit',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
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
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_sales_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::FK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONVERSION => [
            'type' => 'float',
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
    ];

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit)
    {
        $this->idProductMeasurementSalesUnit = $idProductMeasurementSalesUnit;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getIdProductMeasurementSalesUnit()
    {
        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnitOrFail($idProductMeasurementSalesUnit)
    {
        if ($idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit);
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductMeasurementSalesUnitOrFail()
    {
        if ($this->idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementSalesUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_SALES_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getIdProductMeasurementUnit()
    {
        return $this->idProductMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
     *
     * @param int|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param int|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param float|null $conversion
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
     * @module ProductMeasurementUnitStorage
     *
     * @return float|null
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @module ProductMeasurementUnitStorage
     *
     * @param float|null $conversion
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
     * @module ProductMeasurementUnitStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getConversionOrFail()
    {
        if ($this->conversion === null) {
            $this->throwNullValueException(static::CONVERSION);
        }

        return $this->conversion;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
     *
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
     *
     * @return bool|null
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
     * @module ProductMeasurementUnitStorage
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
                case 'idProductMeasurementSalesUnit':
                case 'idProductMeasurementUnit':
                case 'fkProduct':
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
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
                case 'idProductMeasurementSalesUnit':
                case 'idProductMeasurementUnit':
                case 'fkProduct':
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
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
                case 'idProductMeasurementSalesUnit':
                case 'idProductMeasurementUnit':
                case 'fkProduct':
                case 'conversion':
                case 'precision':
                case 'isDisplayed':
                case 'isDefault':
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
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit,
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit,
            'fkProduct' => $this->fkProduct,
            'conversion' => $this->conversion,
            'precision' => $this->precision,
            'isDisplayed' => $this->isDisplayed,
            'isDefault' => $this->isDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit,
            'id_product_measurement_unit' => $this->idProductMeasurementUnit,
            'fk_product' => $this->fkProduct,
            'conversion' => $this->conversion,
            'precision' => $this->precision,
            'is_displayed' => $this->isDisplayed,
            'is_default' => $this->isDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, false) : $this->idProductMeasurementSalesUnit,
            'id_product_measurement_unit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, false) : $this->idProductMeasurementUnit,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, false) : $this->conversion,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, false) : $this->precision,
            'is_displayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, false) : $this->isDisplayed,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, true) : $this->idProductMeasurementSalesUnit,
            'idProductMeasurementUnit' => $this->idProductMeasurementUnit instanceof AbstractTransfer ? $this->idProductMeasurementUnit->toArray(true, true) : $this->idProductMeasurementUnit,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, true) : $this->conversion,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, true) : $this->precision,
            'isDisplayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, true) : $this->isDisplayed,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
        ];
    }
}
