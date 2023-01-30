<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductPackagingUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_PACKAGING_UNIT = 'idProductPackagingUnit';

    /**
     * @var string
     */
    public const FK_LEAD_PRODUCT = 'fkLeadProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_PACKAGING_UNIT_TYPE = 'fkProductPackagingUnitType';

    /**
     * @var string
     */
    public const AMOUNT_INTERVAL = 'amountInterval';

    /**
     * @var string
     */
    public const AMOUNT_MAX = 'amountMax';

    /**
     * @var string
     */
    public const AMOUNT_MIN = 'amountMin';

    /**
     * @var string
     */
    public const DEFAULT_AMOUNT = 'defaultAmount';

    /**
     * @var string
     */
    public const IS_AMOUNT_VARIABLE = 'isAmountVariable';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const LEAD_PRODUCT = 'leadProduct';

    /**
     * @var string
     */
    public const PRODUCT_PACKAGING_UNIT_TYPE = 'productPackagingUnitType';

    /**
     * @var integer|null
     */
    protected $idProductPackagingUnit;

    /**
     * @var integer|null
     */
    protected $fkLeadProduct;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductPackagingUnitType;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountInterval;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMax;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMin;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $defaultAmount;

    /**
     * @var boolean|null
     */
    protected $isAmountVariable;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $leadProduct;

    /**
     * @var \Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer|null
     */
    protected $productPackagingUnitType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_packaging_unit' => 'idProductPackagingUnit',
        'idProductPackagingUnit' => 'idProductPackagingUnit',
        'IdProductPackagingUnit' => 'idProductPackagingUnit',
        'fk_lead_product' => 'fkLeadProduct',
        'fkLeadProduct' => 'fkLeadProduct',
        'FkLeadProduct' => 'fkLeadProduct',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_packaging_unit_type' => 'fkProductPackagingUnitType',
        'fkProductPackagingUnitType' => 'fkProductPackagingUnitType',
        'FkProductPackagingUnitType' => 'fkProductPackagingUnitType',
        'amount_interval' => 'amountInterval',
        'amountInterval' => 'amountInterval',
        'AmountInterval' => 'amountInterval',
        'amount_max' => 'amountMax',
        'amountMax' => 'amountMax',
        'AmountMax' => 'amountMax',
        'amount_min' => 'amountMin',
        'amountMin' => 'amountMin',
        'AmountMin' => 'amountMin',
        'default_amount' => 'defaultAmount',
        'defaultAmount' => 'defaultAmount',
        'DefaultAmount' => 'defaultAmount',
        'is_amount_variable' => 'isAmountVariable',
        'isAmountVariable' => 'isAmountVariable',
        'IsAmountVariable' => 'isAmountVariable',
        'product' => 'product',
        'Product' => 'product',
        'lead_product' => 'leadProduct',
        'leadProduct' => 'leadProduct',
        'LeadProduct' => 'leadProduct',
        'product_packaging_unit_type' => 'productPackagingUnitType',
        'productPackagingUnitType' => 'productPackagingUnitType',
        'ProductPackagingUnitType' => 'productPackagingUnitType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_PACKAGING_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_packaging_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LEAD_PRODUCT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_lead_product',
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
        self::FK_PRODUCT_PACKAGING_UNIT_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_packaging_unit_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_INTERVAL => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_interval',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MAX => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MIN => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'default_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AMOUNT_VARIABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_amount_variable',
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
        self::LEAD_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'lead_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_PACKAGING_UNIT_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_packaging_unit_type',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit';


    /**
     * @module 
     *
     * @param integer|null $idProductPackagingUnit
     *
     * @return $this
     */
    public function setIdProductPackagingUnit($idProductPackagingUnit)
    {
        $this->idProductPackagingUnit = $idProductPackagingUnit;
        $this->modifiedProperties[self::ID_PRODUCT_PACKAGING_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductPackagingUnit()
    {
        return $this->idProductPackagingUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductPackagingUnitOrFail($idProductPackagingUnit)
    {
        if ($idProductPackagingUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT);
        }

        return $this->setIdProductPackagingUnit($idProductPackagingUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductPackagingUnitOrFail()
    {
        if ($this->idProductPackagingUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT);
        }

        return $this->idProductPackagingUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductPackagingUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_PACKAGING_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLeadProduct
     *
     * @return $this
     */
    public function setFkLeadProduct($fkLeadProduct)
    {
        $this->fkLeadProduct = $fkLeadProduct;
        $this->modifiedProperties[self::FK_LEAD_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLeadProduct()
    {
        return $this->fkLeadProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLeadProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLeadProductOrFail($fkLeadProduct)
    {
        if ($fkLeadProduct === null) {
            $this->throwNullValueException(static::FK_LEAD_PRODUCT);
        }

        return $this->setFkLeadProduct($fkLeadProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLeadProductOrFail()
    {
        if ($this->fkLeadProduct === null) {
            $this->throwNullValueException(static::FK_LEAD_PRODUCT);
        }

        return $this->fkLeadProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLeadProduct()
    {
        $this->assertPropertyIsSet(self::FK_LEAD_PRODUCT);

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
     * @param integer|null $fkProductPackagingUnitType
     *
     * @return $this
     */
    public function setFkProductPackagingUnitType($fkProductPackagingUnitType)
    {
        $this->fkProductPackagingUnitType = $fkProductPackagingUnitType;
        $this->modifiedProperties[self::FK_PRODUCT_PACKAGING_UNIT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductPackagingUnitType()
    {
        return $this->fkProductPackagingUnitType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductPackagingUnitType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductPackagingUnitTypeOrFail($fkProductPackagingUnitType)
    {
        if ($fkProductPackagingUnitType === null) {
            $this->throwNullValueException(static::FK_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->setFkProductPackagingUnitType($fkProductPackagingUnitType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductPackagingUnitTypeOrFail()
    {
        if ($this->fkProductPackagingUnitType === null) {
            $this->throwNullValueException(static::FK_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->fkProductPackagingUnitType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductPackagingUnitType()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_PACKAGING_UNIT_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountInterval
     *
     * @return $this
     */
    public function setAmountInterval($amountInterval = null)
    {
        if ($amountInterval !== null && !$amountInterval instanceof Decimal) {
            $amountInterval = new Decimal($amountInterval);
        }

        $this->amountInterval = $amountInterval;
        $this->modifiedProperties[self::AMOUNT_INTERVAL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountInterval()
    {
        return $this->amountInterval;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountInterval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountIntervalOrFail($amountInterval)
    {
        if ($amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->setAmountInterval($amountInterval);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountIntervalOrFail()
    {
        if ($this->amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->amountInterval;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountInterval()
    {
        $this->assertPropertyIsSet(self::AMOUNT_INTERVAL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMax
     *
     * @return $this
     */
    public function setAmountMax($amountMax = null)
    {
        if ($amountMax !== null && !$amountMax instanceof Decimal) {
            $amountMax = new Decimal($amountMax);
        }

        $this->amountMax = $amountMax;
        $this->modifiedProperties[self::AMOUNT_MAX] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMax()
    {
        return $this->amountMax;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMaxOrFail($amountMax)
    {
        if ($amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->setAmountMax($amountMax);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMaxOrFail()
    {
        if ($this->amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->amountMax;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMax()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MAX);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMin
     *
     * @return $this
     */
    public function setAmountMin($amountMin = null)
    {
        if ($amountMin !== null && !$amountMin instanceof Decimal) {
            $amountMin = new Decimal($amountMin);
        }

        $this->amountMin = $amountMin;
        $this->modifiedProperties[self::AMOUNT_MIN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMin()
    {
        return $this->amountMin;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMinOrFail($amountMin)
    {
        if ($amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->setAmountMin($amountMin);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMinOrFail()
    {
        if ($this->amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->amountMin;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMin()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MIN);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $defaultAmount
     *
     * @return $this
     */
    public function setDefaultAmount($defaultAmount = null)
    {
        if ($defaultAmount !== null && !$defaultAmount instanceof Decimal) {
            $defaultAmount = new Decimal($defaultAmount);
        }

        $this->defaultAmount = $defaultAmount;
        $this->modifiedProperties[self::DEFAULT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getDefaultAmount()
    {
        return $this->defaultAmount;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $defaultAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultAmountOrFail($defaultAmount)
    {
        if ($defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->setDefaultAmount($defaultAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getDefaultAmountOrFail()
    {
        if ($this->defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->defaultAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultAmount()
    {
        $this->assertPropertyIsSet(self::DEFAULT_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isAmountVariable
     *
     * @return $this
     */
    public function setIsAmountVariable($isAmountVariable)
    {
        $this->isAmountVariable = $isAmountVariable;
        $this->modifiedProperties[self::IS_AMOUNT_VARIABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsAmountVariable()
    {
        return $this->isAmountVariable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isAmountVariable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAmountVariableOrFail($isAmountVariable)
    {
        if ($isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->setIsAmountVariable($isAmountVariable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsAmountVariableOrFail()
    {
        if ($this->isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->isAmountVariable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAmountVariable()
    {
        $this->assertPropertyIsSet(self::IS_AMOUNT_VARIABLE);

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
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $leadProduct
     *
     * @return $this
     */
    public function setLeadProduct(SpyProductEntityTransfer $leadProduct = null)
    {
        $this->leadProduct = $leadProduct;
        $this->modifiedProperties[self::LEAD_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getLeadProduct()
    {
        return $this->leadProduct;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $leadProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLeadProductOrFail(SpyProductEntityTransfer $leadProduct)
    {
        return $this->setLeadProduct($leadProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getLeadProductOrFail()
    {
        if ($this->leadProduct === null) {
            $this->throwNullValueException(static::LEAD_PRODUCT);
        }

        return $this->leadProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLeadProduct()
    {
        $this->assertPropertyIsSet(self::LEAD_PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer|null $productPackagingUnitType
     *
     * @return $this
     */
    public function setProductPackagingUnitType(SpyProductPackagingUnitTypeEntityTransfer $productPackagingUnitType = null)
    {
        $this->productPackagingUnitType = $productPackagingUnitType;
        $this->modifiedProperties[self::PRODUCT_PACKAGING_UNIT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer|null
     */
    public function getProductPackagingUnitType()
    {
        return $this->productPackagingUnitType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer $productPackagingUnitType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductPackagingUnitTypeOrFail(SpyProductPackagingUnitTypeEntityTransfer $productPackagingUnitType)
    {
        return $this->setProductPackagingUnitType($productPackagingUnitType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductPackagingUnitTypeEntityTransfer
     */
    public function getProductPackagingUnitTypeOrFail()
    {
        if ($this->productPackagingUnitType === null) {
            $this->throwNullValueException(static::PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->productPackagingUnitType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductPackagingUnitType()
    {
        $this->assertPropertyIsSet(self::PRODUCT_PACKAGING_UNIT_TYPE);

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
                case 'idProductPackagingUnit':
                case 'fkLeadProduct':
                case 'fkProduct':
                case 'fkProductPackagingUnitType':
                case 'isAmountVariable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'product':
                case 'leadProduct':
                case 'productPackagingUnitType':
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
                case 'amountInterval':
                case 'amountMax':
                case 'amountMin':
                case 'defaultAmount':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idProductPackagingUnit':
                case 'fkLeadProduct':
                case 'fkProduct':
                case 'fkProductPackagingUnitType':
                case 'isAmountVariable':
                case 'amountInterval':
                case 'amountMax':
                case 'amountMin':
                case 'defaultAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'leadProduct':
                case 'productPackagingUnitType':
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
                case 'idProductPackagingUnit':
                case 'fkLeadProduct':
                case 'fkProduct':
                case 'fkProductPackagingUnitType':
                case 'isAmountVariable':
                case 'amountInterval':
                case 'amountMax':
                case 'amountMin':
                case 'defaultAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
                case 'leadProduct':
                case 'productPackagingUnitType':
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
            'idProductPackagingUnit' => $this->idProductPackagingUnit,
            'fkLeadProduct' => $this->fkLeadProduct,
            'fkProduct' => $this->fkProduct,
            'fkProductPackagingUnitType' => $this->fkProductPackagingUnitType,
            'isAmountVariable' => $this->isAmountVariable,
            'product' => $this->product,
            'leadProduct' => $this->leadProduct,
            'productPackagingUnitType' => $this->productPackagingUnitType,
            'amountInterval' => $this->amountInterval,
            'amountMax' => $this->amountMax,
            'amountMin' => $this->amountMin,
            'defaultAmount' => $this->defaultAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit' => $this->idProductPackagingUnit,
            'fk_lead_product' => $this->fkLeadProduct,
            'fk_product' => $this->fkProduct,
            'fk_product_packaging_unit_type' => $this->fkProductPackagingUnitType,
            'is_amount_variable' => $this->isAmountVariable,
            'product' => $this->product,
            'lead_product' => $this->leadProduct,
            'product_packaging_unit_type' => $this->productPackagingUnitType,
            'amount_interval' => $this->amountInterval,
            'amount_max' => $this->amountMax,
            'amount_min' => $this->amountMin,
            'default_amount' => $this->defaultAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit' => $this->idProductPackagingUnit instanceof AbstractTransfer ? $this->idProductPackagingUnit->toArray(true, false) : $this->idProductPackagingUnit,
            'fk_lead_product' => $this->fkLeadProduct instanceof AbstractTransfer ? $this->fkLeadProduct->toArray(true, false) : $this->fkLeadProduct,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_packaging_unit_type' => $this->fkProductPackagingUnitType instanceof AbstractTransfer ? $this->fkProductPackagingUnitType->toArray(true, false) : $this->fkProductPackagingUnitType,
            'is_amount_variable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, false) : $this->isAmountVariable,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'lead_product' => $this->leadProduct instanceof AbstractTransfer ? $this->leadProduct->toArray(true, false) : $this->leadProduct,
            'product_packaging_unit_type' => $this->productPackagingUnitType instanceof AbstractTransfer ? $this->productPackagingUnitType->toArray(true, false) : $this->productPackagingUnitType,
            'amount_interval' => $this->amountInterval,
            'amount_max' => $this->amountMax,
            'amount_min' => $this->amountMin,
            'default_amount' => $this->defaultAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnit' => $this->idProductPackagingUnit instanceof AbstractTransfer ? $this->idProductPackagingUnit->toArray(true, true) : $this->idProductPackagingUnit,
            'fkLeadProduct' => $this->fkLeadProduct instanceof AbstractTransfer ? $this->fkLeadProduct->toArray(true, true) : $this->fkLeadProduct,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductPackagingUnitType' => $this->fkProductPackagingUnitType instanceof AbstractTransfer ? $this->fkProductPackagingUnitType->toArray(true, true) : $this->fkProductPackagingUnitType,
            'isAmountVariable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, true) : $this->isAmountVariable,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'leadProduct' => $this->leadProduct instanceof AbstractTransfer ? $this->leadProduct->toArray(true, true) : $this->leadProduct,
            'productPackagingUnitType' => $this->productPackagingUnitType instanceof AbstractTransfer ? $this->productPackagingUnitType->toArray(true, true) : $this->productPackagingUnitType,
            'amountInterval' => $this->amountInterval,
            'amountMax' => $this->amountMax,
            'amountMin' => $this->amountMin,
            'defaultAmount' => $this->defaultAmount,
        ];
    }
}
