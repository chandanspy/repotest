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
class SpyMerchantRelationshipEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT_RELATIONSHIP = 'idMerchantRelationship';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_MERCHANT = 'fkMerchant';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_KEY = 'merchantRelationshipKey';

    /**
     * @var string
     */
    public const MERCHANT = 'merchant';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT = 'companyBusinessUnit';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS = 'spyMerchantRelationshipToCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS = 'spyMerchantRelationshipSalesOrderThresholds';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS = 'spyPriceProductMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LISTS = 'spyProductLists';

    /**
     * @var integer|null
     */
    protected $idMerchantRelationship;

    /**
     * @var integer|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkMerchant;

    /**
     * @var string|null
     */
    protected $merchantRelationshipKey;

    /**
     * @var \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    protected $merchant;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyMerchantRelationshipToCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    protected $spyMerchantRelationshipSalesOrderThresholds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    protected $spyPriceProductMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductListEntityTransfer[]
     */
    protected $spyProductLists;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant_relationship' => 'idMerchantRelationship',
        'idMerchantRelationship' => 'idMerchantRelationship',
        'IdMerchantRelationship' => 'idMerchantRelationship',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_merchant' => 'fkMerchant',
        'fkMerchant' => 'fkMerchant',
        'FkMerchant' => 'fkMerchant',
        'merchant_relationship_key' => 'merchantRelationshipKey',
        'merchantRelationshipKey' => 'merchantRelationshipKey',
        'MerchantRelationshipKey' => 'merchantRelationshipKey',
        'merchant' => 'merchant',
        'Merchant' => 'merchant',
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
        'spy_merchant_relationship_to_company_business_units' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'spyMerchantRelationshipToCompanyBusinessUnits' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'SpyMerchantRelationshipToCompanyBusinessUnits' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'spy_merchant_relationship_sales_order_thresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'SpyMerchantRelationshipSalesOrderThresholds' => 'spyMerchantRelationshipSalesOrderThresholds',
        'spy_price_product_merchant_relationships' => 'spyPriceProductMerchantRelationships',
        'spyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'SpyPriceProductMerchantRelationships' => 'spyPriceProductMerchantRelationships',
        'spy_product_lists' => 'spyProductLists',
        'spyProductLists' => 'spyProductLists',
        'SpyProductLists' => 'spyProductLists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT_RELATIONSHIP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_RELATIONSHIP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship_to_company_business_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship_sales_order_thresholds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_merchant_relationships',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LISTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_lists',
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
    public static $entityNamespace = 'Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship';


    /**
     * @module 
     *
     * @param integer|null $idMerchantRelationship
     *
     * @return $this
     */
    public function setIdMerchantRelationship($idMerchantRelationship)
    {
        $this->idMerchantRelationship = $idMerchantRelationship;
        $this->modifiedProperties[self::ID_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdMerchantRelationship()
    {
        return $this->idMerchantRelationship;
    }

    /**
     * @module 
     *
     * @param integer|null $idMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantRelationshipOrFail($idMerchantRelationship)
    {
        if ($idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->setIdMerchantRelationship($idMerchantRelationship);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdMerchantRelationshipOrFail()
    {
        if ($this->idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->idMerchantRelationship;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnit($fkCompanyBusinessUnit)
    {
        $this->fkCompanyBusinessUnit = $fkCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnitOrFail($fkCompanyBusinessUnit)
    {
        if ($fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkCompanyBusinessUnit($fkCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchant
     *
     * @return $this
     */
    public function setFkMerchant($fkMerchant)
    {
        $this->fkMerchant = $fkMerchant;
        $this->modifiedProperties[self::FK_MERCHANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkMerchant()
    {
        return $this->fkMerchant;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantOrFail($fkMerchant)
    {
        if ($fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->setFkMerchant($fkMerchant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkMerchantOrFail()
    {
        if ($this->fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->fkMerchant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchant()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $merchantRelationshipKey
     *
     * @return $this
     */
    public function setMerchantRelationshipKey($merchantRelationshipKey)
    {
        $this->merchantRelationshipKey = $merchantRelationshipKey;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getMerchantRelationshipKey()
    {
        return $this->merchantRelationshipKey;
    }

    /**
     * @module 
     *
     * @param string|null $merchantRelationshipKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantRelationshipKeyOrFail($merchantRelationshipKey)
    {
        if ($merchantRelationshipKey === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP_KEY);
        }

        return $this->setMerchantRelationshipKey($merchantRelationshipKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMerchantRelationshipKeyOrFail()
    {
        if ($this->merchantRelationshipKey === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP_KEY);
        }

        return $this->merchantRelationshipKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipKey()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null $merchant
     *
     * @return $this
     */
    public function setMerchant(SpyMerchantEntityTransfer $merchant = null)
    {
        $this->merchant = $merchant;
        $this->modifiedProperties[self::MERCHANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer $merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantOrFail(SpyMerchantEntityTransfer $merchant)
    {
        return $this->setMerchant($merchant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer
     */
    public function getMerchantOrFail()
    {
        if ($this->merchant === null) {
            $this->throwNullValueException(static::MERCHANT);
        }

        return $this->merchant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchant()
    {
        $this->assertPropertyIsSet(self::MERCHANT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[] $spyMerchantRelationshipToCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipToCompanyBusinessUnits(ArrayObject $spyMerchantRelationshipToCompanyBusinessUnits)
    {
        $this->spyMerchantRelationshipToCompanyBusinessUnits = $spyMerchantRelationshipToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyMerchantRelationshipToCompanyBusinessUnits()
    {
        return $this->spyMerchantRelationshipToCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer $spyMerchantRelationshipToCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyMerchantRelationshipToCompanyBusinessUnits(SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer $spyMerchantRelationshipToCompanyBusinessUnits)
    {
        $this->spyMerchantRelationshipToCompanyBusinessUnits[] = $spyMerchantRelationshipToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationshipToCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[] $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipSalesOrderThresholds(ArrayObject $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer[]
     */
    public function getSpyMerchantRelationshipSalesOrderThresholds()
    {
        return $this->spyMerchantRelationshipSalesOrderThresholds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function addSpyMerchantRelationshipSalesOrderThresholds(SpyMerchantRelationshipSalesOrderThresholdEntityTransfer $spyMerchantRelationshipSalesOrderThresholds)
    {
        $this->spyMerchantRelationshipSalesOrderThresholds[] = $spyMerchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationshipSalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[] $spyPriceProductMerchantRelationships
     *
     * @return $this
     */
    public function setSpyPriceProductMerchantRelationships(ArrayObject $spyPriceProductMerchantRelationships)
    {
        $this->spyPriceProductMerchantRelationships = $spyPriceProductMerchantRelationships;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer[]
     */
    public function getSpyPriceProductMerchantRelationships()
    {
        return $this->spyPriceProductMerchantRelationships;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductMerchantRelationshipEntityTransfer $spyPriceProductMerchantRelationships
     *
     * @return $this
     */
    public function addSpyPriceProductMerchantRelationships(SpyPriceProductMerchantRelationshipEntityTransfer $spyPriceProductMerchantRelationships)
    {
        $this->spyPriceProductMerchantRelationships[] = $spyPriceProductMerchantRelationships;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductMerchantRelationships()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_MERCHANT_RELATIONSHIPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductListEntityTransfer[] $spyProductLists
     *
     * @return $this
     */
    public function setSpyProductLists(ArrayObject $spyProductLists)
    {
        $this->spyProductLists = $spyProductLists;
        $this->modifiedProperties[self::SPY_PRODUCT_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductListEntityTransfer[]
     */
    public function getSpyProductLists()
    {
        return $this->spyProductLists;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListEntityTransfer $spyProductLists
     *
     * @return $this
     */
    public function addSpyProductLists(SpyProductListEntityTransfer $spyProductLists)
    {
        $this->spyProductLists[] = $spyProductLists;
        $this->modifiedProperties[self::SPY_PRODUCT_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLists()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LISTS);

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
                case 'idMerchantRelationship':
                case 'fkCompanyBusinessUnit':
                case 'fkMerchant':
                case 'merchantRelationshipKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'merchant':
                case 'companyBusinessUnit':
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
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductLists':
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
                case 'idMerchantRelationship':
                case 'fkCompanyBusinessUnit':
                case 'fkMerchant':
                case 'merchantRelationshipKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchant':
                case 'companyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductLists':
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
                case 'idMerchantRelationship':
                case 'fkCompanyBusinessUnit':
                case 'fkMerchant':
                case 'merchantRelationshipKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchant':
                case 'companyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyMerchantRelationshipSalesOrderThresholds':
                case 'spyPriceProductMerchantRelationships':
                case 'spyProductLists':
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
        $this->spyMerchantRelationshipToCompanyBusinessUnits = $this->spyMerchantRelationshipToCompanyBusinessUnits ?: new ArrayObject();
        $this->spyMerchantRelationshipSalesOrderThresholds = $this->spyMerchantRelationshipSalesOrderThresholds ?: new ArrayObject();
        $this->spyPriceProductMerchantRelationships = $this->spyPriceProductMerchantRelationships ?: new ArrayObject();
        $this->spyProductLists = $this->spyProductLists ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationship' => $this->idMerchantRelationship,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkMerchant' => $this->fkMerchant,
            'merchantRelationshipKey' => $this->merchantRelationshipKey,
            'merchant' => $this->merchant,
            'companyBusinessUnit' => $this->companyBusinessUnit,
            'spyMerchantRelationshipToCompanyBusinessUnits' => $this->spyMerchantRelationshipToCompanyBusinessUnits,
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships,
            'spyProductLists' => $this->spyProductLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_merchant' => $this->fkMerchant,
            'merchant_relationship_key' => $this->merchantRelationshipKey,
            'merchant' => $this->merchant,
            'company_business_unit' => $this->companyBusinessUnit,
            'spy_merchant_relationship_to_company_business_units' => $this->spyMerchantRelationshipToCompanyBusinessUnits,
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds,
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships,
            'spy_product_lists' => $this->spyProductLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, false) : $this->idMerchantRelationship,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_merchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, false) : $this->fkMerchant,
            'merchant_relationship_key' => $this->merchantRelationshipKey instanceof AbstractTransfer ? $this->merchantRelationshipKey->toArray(true, false) : $this->merchantRelationshipKey,
            'merchant' => $this->merchant instanceof AbstractTransfer ? $this->merchant->toArray(true, false) : $this->merchant,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
            'spy_merchant_relationship_to_company_business_units' => $this->spyMerchantRelationshipToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyMerchantRelationshipToCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationshipToCompanyBusinessUnits, true, false),
            'spy_merchant_relationship_sales_order_thresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, false),
            'spy_price_product_merchant_relationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, false),
            'spy_product_lists' => $this->spyProductLists instanceof AbstractTransfer ? $this->spyProductLists->toArray(true, false) : $this->addValuesToCollection($this->spyProductLists, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, true) : $this->idMerchantRelationship,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkMerchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, true) : $this->fkMerchant,
            'merchantRelationshipKey' => $this->merchantRelationshipKey instanceof AbstractTransfer ? $this->merchantRelationshipKey->toArray(true, true) : $this->merchantRelationshipKey,
            'merchant' => $this->merchant instanceof AbstractTransfer ? $this->merchant->toArray(true, true) : $this->merchant,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
            'spyMerchantRelationshipToCompanyBusinessUnits' => $this->spyMerchantRelationshipToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyMerchantRelationshipToCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationshipToCompanyBusinessUnits, true, true),
            'spyMerchantRelationshipSalesOrderThresholds' => $this->spyMerchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->spyMerchantRelationshipSalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationshipSalesOrderThresholds, true, true),
            'spyPriceProductMerchantRelationships' => $this->spyPriceProductMerchantRelationships instanceof AbstractTransfer ? $this->spyPriceProductMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductMerchantRelationships, true, true),
            'spyProductLists' => $this->spyProductLists instanceof AbstractTransfer ? $this->spyProductLists->toArray(true, true) : $this->addValuesToCollection($this->spyProductLists, true, true),
        ];
    }
}
