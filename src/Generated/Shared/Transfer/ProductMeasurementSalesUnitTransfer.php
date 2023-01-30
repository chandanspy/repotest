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
class ProductMeasurementSalesUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT = 'idProductMeasurementSalesUnit';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const PRECISION = 'precision';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const CONVERSION = 'conversion';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_UNIT = 'productMeasurementUnit';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_UNIT = 'fkProductMeasurementUnit';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_BASE_UNIT = 'productMeasurementBaseUnit';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const IS_DISPLAYED = 'isDisplayed';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_BASE_UNIT = 'fkProductMeasurementBaseUnit';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var int|null
     */
    protected $idProductMeasurementSalesUnit;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var int|null
     */
    protected $precision;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var float|null
     */
    protected $conversion;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    protected $productMeasurementUnit;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var int|null
     */
    protected $fkProductMeasurementUnit;

    /**
     * @var \Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer|null
     */
    protected $productMeasurementBaseUnit;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var bool|null
     */
    protected $isDisplayed;

    /**
     * @var int|null
     */
    protected $fkProductMeasurementBaseUnit;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_sales_unit' => 'idProductMeasurementSalesUnit',
        'idProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'IdProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'precision' => 'precision',
        'Precision' => 'precision',
        'value' => 'value',
        'Value' => 'value',
        'conversion' => 'conversion',
        'Conversion' => 'conversion',
        'product_measurement_unit' => 'productMeasurementUnit',
        'productMeasurementUnit' => 'productMeasurementUnit',
        'ProductMeasurementUnit' => 'productMeasurementUnit',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'fk_product_measurement_unit' => 'fkProductMeasurementUnit',
        'fkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'FkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'product_measurement_base_unit' => 'productMeasurementBaseUnit',
        'productMeasurementBaseUnit' => 'productMeasurementBaseUnit',
        'ProductMeasurementBaseUnit' => 'productMeasurementBaseUnit',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'is_displayed' => 'isDisplayed',
        'isDisplayed' => 'isDisplayed',
        'IsDisplayed' => 'isDisplayed',
        'fk_product_measurement_base_unit' => 'fkProductMeasurementBaseUnit',
        'fkProductMeasurementBaseUnit' => 'fkProductMeasurementBaseUnit',
        'FkProductMeasurementBaseUnit' => 'fkProductMeasurementBaseUnit',
        'code' => 'code',
        'Code' => 'code',
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
        self::VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'value',
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
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_measurement_base_unit',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::FK_PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_measurement_base_unit',
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
    ];

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @return int|null
     */
    public function getIdProductMeasurementSalesUnit()
    {
        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module CustomerReorderWidget|ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnitStorage
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @param int|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @param int|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @return float|null
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductMeasurementUnit|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementUnitTransfer|null
     */
    public function getProductMeasurementUnit()
    {
        return $this->productMeasurementUnit;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnitWidget|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductMeasurementUnitsRestApi|ProductPackagingUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer|null $productMeasurementBaseUnit
     *
     * @return $this
     */
    public function setProductMeasurementBaseUnit(ProductMeasurementBaseUnitTransfer $productMeasurementBaseUnit = null)
    {
        $this->productMeasurementBaseUnit = $productMeasurementBaseUnit;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_BASE_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer|null
     */
    public function getProductMeasurementBaseUnit()
    {
        return $this->productMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer $productMeasurementBaseUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementBaseUnitOrFail(ProductMeasurementBaseUnitTransfer $productMeasurementBaseUnit)
    {
        return $this->setProductMeasurementBaseUnit($productMeasurementBaseUnit);
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductMeasurementBaseUnitTransfer
     */
    public function getProductMeasurementBaseUnitOrFail()
    {
        if ($this->productMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->productMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductMeasurementBaseUnit()
    {
        $this->assertPropertyIsSet(self::PRODUCT_MEASUREMENT_BASE_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnitStorage|ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
     *
     * @return bool|null
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }

    /**
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
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
     * @module ProductMeasurementUnit
     *
     * @param int|null $fkProductMeasurementBaseUnit
     *
     * @return $this
     */
    public function setFkProductMeasurementBaseUnit($fkProductMeasurementBaseUnit)
    {
        $this->fkProductMeasurementBaseUnit = $fkProductMeasurementBaseUnit;
        $this->modifiedProperties[self::FK_PRODUCT_MEASUREMENT_BASE_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @return int|null
     */
    public function getFkProductMeasurementBaseUnit()
    {
        return $this->fkProductMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @param int|null $fkProductMeasurementBaseUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductMeasurementBaseUnitOrFail($fkProductMeasurementBaseUnit)
    {
        if ($fkProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->setFkProductMeasurementBaseUnit($fkProductMeasurementBaseUnit);
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductMeasurementBaseUnitOrFail()
    {
        if ($this->fkProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->fkProductMeasurementBaseUnit;
    }

    /**
     * @module ProductMeasurementUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductMeasurementBaseUnit()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_MEASUREMENT_BASE_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
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
     * @module ProductMeasurementUnitsRestApi
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
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
     * @module ProductMeasurementUnitsRestApi
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
     * @module ProductMeasurementUnitsRestApi
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
                case 'isDefault':
                case 'precision':
                case 'value':
                case 'conversion':
                case 'fkProductMeasurementUnit':
                case 'fkProduct':
                case 'isDisplayed':
                case 'fkProductMeasurementBaseUnit':
                case 'code':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productMeasurementUnit':
                case 'storeRelation':
                case 'productMeasurementBaseUnit':
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
                case 'idProductMeasurementSalesUnit':
                case 'isDefault':
                case 'precision':
                case 'value':
                case 'conversion':
                case 'fkProductMeasurementUnit':
                case 'fkProduct':
                case 'isDisplayed':
                case 'fkProductMeasurementBaseUnit':
                case 'code':
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
                case 'storeRelation':
                case 'productMeasurementBaseUnit':
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
                case 'idProductMeasurementSalesUnit':
                case 'isDefault':
                case 'precision':
                case 'value':
                case 'conversion':
                case 'fkProductMeasurementUnit':
                case 'fkProduct':
                case 'isDisplayed':
                case 'fkProductMeasurementBaseUnit':
                case 'code':
                    $values[$arrayKey] = $value;

                    break;
                case 'productMeasurementUnit':
                case 'storeRelation':
                case 'productMeasurementBaseUnit':
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
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit,
            'isDefault' => $this->isDefault,
            'precision' => $this->precision,
            'value' => $this->value,
            'conversion' => $this->conversion,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit,
            'fkProduct' => $this->fkProduct,
            'isDisplayed' => $this->isDisplayed,
            'fkProductMeasurementBaseUnit' => $this->fkProductMeasurementBaseUnit,
            'code' => $this->code,
            'productMeasurementUnit' => $this->productMeasurementUnit,
            'storeRelation' => $this->storeRelation,
            'productMeasurementBaseUnit' => $this->productMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit,
            'is_default' => $this->isDefault,
            'precision' => $this->precision,
            'value' => $this->value,
            'conversion' => $this->conversion,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit,
            'fk_product' => $this->fkProduct,
            'is_displayed' => $this->isDisplayed,
            'fk_product_measurement_base_unit' => $this->fkProductMeasurementBaseUnit,
            'code' => $this->code,
            'product_measurement_unit' => $this->productMeasurementUnit,
            'store_relation' => $this->storeRelation,
            'product_measurement_base_unit' => $this->productMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, false) : $this->idProductMeasurementSalesUnit,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, false) : $this->precision,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, false) : $this->conversion,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, false) : $this->fkProductMeasurementUnit,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'is_displayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, false) : $this->isDisplayed,
            'fk_product_measurement_base_unit' => $this->fkProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->fkProductMeasurementBaseUnit->toArray(true, false) : $this->fkProductMeasurementBaseUnit,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'product_measurement_unit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, false) : $this->productMeasurementUnit,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'product_measurement_base_unit' => $this->productMeasurementBaseUnit instanceof AbstractTransfer ? $this->productMeasurementBaseUnit->toArray(true, false) : $this->productMeasurementBaseUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, true) : $this->idProductMeasurementSalesUnit,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, true) : $this->precision,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, true) : $this->conversion,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, true) : $this->fkProductMeasurementUnit,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'isDisplayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, true) : $this->isDisplayed,
            'fkProductMeasurementBaseUnit' => $this->fkProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->fkProductMeasurementBaseUnit->toArray(true, true) : $this->fkProductMeasurementBaseUnit,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'productMeasurementUnit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, true) : $this->productMeasurementUnit,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'productMeasurementBaseUnit' => $this->productMeasurementBaseUnit instanceof AbstractTransfer ? $this->productMeasurementBaseUnit->toArray(true, true) : $this->productMeasurementBaseUnit,
        ];
    }
}
