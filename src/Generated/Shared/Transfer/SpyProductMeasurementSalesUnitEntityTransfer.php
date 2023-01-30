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
class SpyProductMeasurementSalesUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT = 'idProductMeasurementSalesUnit';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_BASE_UNIT = 'fkProductMeasurementBaseUnit';

    /**
     * @var string
     */
    public const FK_PRODUCT_MEASUREMENT_UNIT = 'fkProductMeasurementUnit';

    /**
     * @var string
     */
    public const CONVERSION = 'conversion';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const IS_DISPLAYED = 'isDisplayed';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const PRECISION = 'precision';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_UNIT = 'productMeasurementUnit';

    /**
     * @var string
     */
    public const PRODUCT_MEASUREMENT_BASE_UNIT = 'productMeasurementBaseUnit';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MEASUREMENT_SALES_UNIT_STORES = 'spyProductMeasurementSalesUnitStores';

    /**
     * @var integer|null
     */
    protected $idProductMeasurementSalesUnit;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductMeasurementBaseUnit;

    /**
     * @var integer|null
     */
    protected $fkProductMeasurementUnit;

    /**
     * @var float|null
     */
    protected $conversion;

    /**
     * @var boolean|null
     */
    protected $isDefault;

    /**
     * @var boolean|null
     */
    protected $isDisplayed;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var integer|null
     */
    protected $precision;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var \Generated\Shared\Transfer\SpyProductMeasurementUnitEntityTransfer|null
     */
    protected $productMeasurementUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer|null
     */
    protected $productMeasurementBaseUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitStoreEntityTransfer[]
     */
    protected $spyProductMeasurementSalesUnitStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_sales_unit' => 'idProductMeasurementSalesUnit',
        'idProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'IdProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_measurement_base_unit' => 'fkProductMeasurementBaseUnit',
        'fkProductMeasurementBaseUnit' => 'fkProductMeasurementBaseUnit',
        'FkProductMeasurementBaseUnit' => 'fkProductMeasurementBaseUnit',
        'fk_product_measurement_unit' => 'fkProductMeasurementUnit',
        'fkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'FkProductMeasurementUnit' => 'fkProductMeasurementUnit',
        'conversion' => 'conversion',
        'Conversion' => 'conversion',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'is_displayed' => 'isDisplayed',
        'isDisplayed' => 'isDisplayed',
        'IsDisplayed' => 'isDisplayed',
        'key' => 'key',
        'Key' => 'key',
        'precision' => 'precision',
        'Precision' => 'precision',
        'product' => 'product',
        'Product' => 'product',
        'product_measurement_unit' => 'productMeasurementUnit',
        'productMeasurementUnit' => 'productMeasurementUnit',
        'ProductMeasurementUnit' => 'productMeasurementUnit',
        'product_measurement_base_unit' => 'productMeasurementBaseUnit',
        'productMeasurementBaseUnit' => 'productMeasurementBaseUnit',
        'ProductMeasurementBaseUnit' => 'productMeasurementBaseUnit',
        'spy_product_measurement_sales_unit_stores' => 'spyProductMeasurementSalesUnitStores',
        'spyProductMeasurementSalesUnitStores' => 'spyProductMeasurementSalesUnitStores',
        'SpyProductMeasurementSalesUnitStores' => 'spyProductMeasurementSalesUnitStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'integer',
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
        self::FK_PRODUCT => [
            'type' => 'integer',
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
        self::FK_PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'integer',
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
        self::IS_DEFAULT => [
            'type' => 'boolean',
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
        self::IS_DISPLAYED => [
            'type' => 'boolean',
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
        self::PRECISION => [
            'type' => 'integer',
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
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
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
        self::PRODUCT_MEASUREMENT_BASE_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer',
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
        self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductMeasurementSalesUnitStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_measurement_sales_unit_stores',
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
    public static $entityNamespace = 'Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit';


    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementSalesUnit
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductMeasurementSalesUnit()
    {
        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductMeasurementSalesUnit
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductMeasurementSalesUnitOrFail()
    {
        if ($this->idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductMeasurementBaseUnit
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductMeasurementBaseUnit()
    {
        return $this->fkProductMeasurementBaseUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductMeasurementBaseUnit
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductMeasurementBaseUnitOrFail()
    {
        if ($this->fkProductMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::FK_PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->fkProductMeasurementBaseUnit;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return float|null
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isDefault
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDefault
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isDisplayed
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDisplayed
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDisplayedOrFail()
    {
        if ($this->isDisplayed === null) {
            $this->throwNullValueException(static::IS_DISPLAYED);
        }

        return $this->isDisplayed;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $precision
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
     * @module 
     *
     * @return integer|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @module 
     *
     * @param integer|null $precision
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPrecisionOrFail()
    {
        if ($this->precision === null) {
            $this->throwNullValueException(static::PRECISION);
        }

        return $this->precision;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(SpyProductEntityTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(SpyProductEntityTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

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
     * @param \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer|null $productMeasurementBaseUnit
     *
     * @return $this
     */
    public function setProductMeasurementBaseUnit(SpyProductMeasurementBaseUnitEntityTransfer $productMeasurementBaseUnit = null)
    {
        $this->productMeasurementBaseUnit = $productMeasurementBaseUnit;
        $this->modifiedProperties[self::PRODUCT_MEASUREMENT_BASE_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer|null
     */
    public function getProductMeasurementBaseUnit()
    {
        return $this->productMeasurementBaseUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer $productMeasurementBaseUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductMeasurementBaseUnitOrFail(SpyProductMeasurementBaseUnitEntityTransfer $productMeasurementBaseUnit)
    {
        return $this->setProductMeasurementBaseUnit($productMeasurementBaseUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductMeasurementBaseUnitEntityTransfer
     */
    public function getProductMeasurementBaseUnitOrFail()
    {
        if ($this->productMeasurementBaseUnit === null) {
            $this->throwNullValueException(static::PRODUCT_MEASUREMENT_BASE_UNIT);
        }

        return $this->productMeasurementBaseUnit;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitStoreEntityTransfer[] $spyProductMeasurementSalesUnitStores
     *
     * @return $this
     */
    public function setSpyProductMeasurementSalesUnitStores(ArrayObject $spyProductMeasurementSalesUnitStores)
    {
        $this->spyProductMeasurementSalesUnitStores = $spyProductMeasurementSalesUnitStores;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductMeasurementSalesUnitStoreEntityTransfer[]
     */
    public function getSpyProductMeasurementSalesUnitStores()
    {
        return $this->spyProductMeasurementSalesUnitStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductMeasurementSalesUnitStoreEntityTransfer $spyProductMeasurementSalesUnitStores
     *
     * @return $this
     */
    public function addSpyProductMeasurementSalesUnitStores(SpyProductMeasurementSalesUnitStoreEntityTransfer $spyProductMeasurementSalesUnitStores)
    {
        $this->spyProductMeasurementSalesUnitStores[] = $spyProductMeasurementSalesUnitStores;
        $this->modifiedProperties[self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductMeasurementSalesUnitStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MEASUREMENT_SALES_UNIT_STORES);

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
                case 'fkProduct':
                case 'fkProductMeasurementBaseUnit':
                case 'fkProductMeasurementUnit':
                case 'conversion':
                case 'isDefault':
                case 'isDisplayed':
                case 'key':
                case 'precision':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'product':
                case 'productMeasurementUnit':
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
                case 'spyProductMeasurementSalesUnitStores':
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
                case 'idProductMeasurementSalesUnit':
                case 'fkProduct':
                case 'fkProductMeasurementBaseUnit':
                case 'fkProductMeasurementUnit':
                case 'conversion':
                case 'isDefault':
                case 'isDisplayed':
                case 'key':
                case 'precision':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'productMeasurementUnit':
                case 'productMeasurementBaseUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductMeasurementSalesUnitStores':
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
                case 'idProductMeasurementSalesUnit':
                case 'fkProduct':
                case 'fkProductMeasurementBaseUnit':
                case 'fkProductMeasurementUnit':
                case 'conversion':
                case 'isDefault':
                case 'isDisplayed':
                case 'key':
                case 'precision':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'productMeasurementUnit':
                case 'productMeasurementBaseUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductMeasurementSalesUnitStores':
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
        $this->spyProductMeasurementSalesUnitStores = $this->spyProductMeasurementSalesUnitStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit,
            'fkProduct' => $this->fkProduct,
            'fkProductMeasurementBaseUnit' => $this->fkProductMeasurementBaseUnit,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit,
            'conversion' => $this->conversion,
            'isDefault' => $this->isDefault,
            'isDisplayed' => $this->isDisplayed,
            'key' => $this->key,
            'precision' => $this->precision,
            'product' => $this->product,
            'productMeasurementUnit' => $this->productMeasurementUnit,
            'productMeasurementBaseUnit' => $this->productMeasurementBaseUnit,
            'spyProductMeasurementSalesUnitStores' => $this->spyProductMeasurementSalesUnitStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit,
            'fk_product' => $this->fkProduct,
            'fk_product_measurement_base_unit' => $this->fkProductMeasurementBaseUnit,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit,
            'conversion' => $this->conversion,
            'is_default' => $this->isDefault,
            'is_displayed' => $this->isDisplayed,
            'key' => $this->key,
            'precision' => $this->precision,
            'product' => $this->product,
            'product_measurement_unit' => $this->productMeasurementUnit,
            'product_measurement_base_unit' => $this->productMeasurementBaseUnit,
            'spy_product_measurement_sales_unit_stores' => $this->spyProductMeasurementSalesUnitStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, false) : $this->idProductMeasurementSalesUnit,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_measurement_base_unit' => $this->fkProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->fkProductMeasurementBaseUnit->toArray(true, false) : $this->fkProductMeasurementBaseUnit,
            'fk_product_measurement_unit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, false) : $this->fkProductMeasurementUnit,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, false) : $this->conversion,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'is_displayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, false) : $this->isDisplayed,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, false) : $this->precision,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'product_measurement_unit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, false) : $this->productMeasurementUnit,
            'product_measurement_base_unit' => $this->productMeasurementBaseUnit instanceof AbstractTransfer ? $this->productMeasurementBaseUnit->toArray(true, false) : $this->productMeasurementBaseUnit,
            'spy_product_measurement_sales_unit_stores' => $this->spyProductMeasurementSalesUnitStores instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnitStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnitStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, true) : $this->idProductMeasurementSalesUnit,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductMeasurementBaseUnit' => $this->fkProductMeasurementBaseUnit instanceof AbstractTransfer ? $this->fkProductMeasurementBaseUnit->toArray(true, true) : $this->fkProductMeasurementBaseUnit,
            'fkProductMeasurementUnit' => $this->fkProductMeasurementUnit instanceof AbstractTransfer ? $this->fkProductMeasurementUnit->toArray(true, true) : $this->fkProductMeasurementUnit,
            'conversion' => $this->conversion instanceof AbstractTransfer ? $this->conversion->toArray(true, true) : $this->conversion,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'isDisplayed' => $this->isDisplayed instanceof AbstractTransfer ? $this->isDisplayed->toArray(true, true) : $this->isDisplayed,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, true) : $this->precision,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'productMeasurementUnit' => $this->productMeasurementUnit instanceof AbstractTransfer ? $this->productMeasurementUnit->toArray(true, true) : $this->productMeasurementUnit,
            'productMeasurementBaseUnit' => $this->productMeasurementBaseUnit instanceof AbstractTransfer ? $this->productMeasurementBaseUnit->toArray(true, true) : $this->productMeasurementBaseUnit,
            'spyProductMeasurementSalesUnitStores' => $this->spyProductMeasurementSalesUnitStores instanceof AbstractTransfer ? $this->spyProductMeasurementSalesUnitStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductMeasurementSalesUnitStores, true, true),
        ];
    }
}
