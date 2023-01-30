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
class MerchantRelationshipTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT_RELATIONSHIP = 'idMerchantRelationship';

    /**
     * @var string
     */
    public const OWNER_COMPANY_BUSINESS_UNIT = 'ownerCompanyBusinessUnit';

    /**
     * @var string
     */
    public const PRODUCT_LIST_IDS = 'productListIds';

    /**
     * @var string
     */
    public const MERCHANT = 'merchant';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_KEY = 'merchantRelationshipKey';

    /**
     * @var string
     */
    public const FK_MERCHANT = 'fkMerchant';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const ASSIGNEE_COMPANY_BUSINESS_UNITS = 'assigneeCompanyBusinessUnits';

    /**
     * @var int|null
     */
    protected $idMerchantRelationship;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    protected $ownerCompanyBusinessUnit;

    /**
     * @var int[]
     */
    protected $productListIds = [];

    /**
     * @var \Generated\Shared\Transfer\MerchantTransfer|null
     */
    protected $merchant;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $merchantRelationshipKey;

    /**
     * @var int|null
     */
    protected $fkMerchant;

    /**
     * @var int|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null
     */
    protected $assigneeCompanyBusinessUnits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant_relationship' => 'idMerchantRelationship',
        'idMerchantRelationship' => 'idMerchantRelationship',
        'IdMerchantRelationship' => 'idMerchantRelationship',
        'owner_company_business_unit' => 'ownerCompanyBusinessUnit',
        'ownerCompanyBusinessUnit' => 'ownerCompanyBusinessUnit',
        'OwnerCompanyBusinessUnit' => 'ownerCompanyBusinessUnit',
        'product_list_ids' => 'productListIds',
        'productListIds' => 'productListIds',
        'ProductListIds' => 'productListIds',
        'merchant' => 'merchant',
        'Merchant' => 'merchant',
        'name' => 'name',
        'Name' => 'name',
        'merchant_relationship_key' => 'merchantRelationshipKey',
        'merchantRelationshipKey' => 'merchantRelationshipKey',
        'MerchantRelationshipKey' => 'merchantRelationshipKey',
        'fk_merchant' => 'fkMerchant',
        'fkMerchant' => 'fkMerchant',
        'FkMerchant' => 'fkMerchant',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'assignee_company_business_units' => 'assigneeCompanyBusinessUnits',
        'assigneeCompanyBusinessUnits' => 'assigneeCompanyBusinessUnits',
        'AssigneeCompanyBusinessUnits' => 'assigneeCompanyBusinessUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
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
        self::OWNER_COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'owner_company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_list_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT => [
            'type' => 'Generated\Shared\Transfer\MerchantTransfer',
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
        self::FK_MERCHANT => [
            'type' => 'int',
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
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
        self::ASSIGNEE_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'assignee_company_business_units',
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @param int|null $idMerchantRelationship
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @return int|null
     */
    public function getIdMerchantRelationship()
    {
        return $this->idMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @param int|null $idMerchantRelationship
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdMerchantRelationshipOrFail()
    {
        if ($this->idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->idMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null $ownerCompanyBusinessUnit
     *
     * @return $this
     */
    public function setOwnerCompanyBusinessUnit(CompanyBusinessUnitTransfer $ownerCompanyBusinessUnit = null)
    {
        $this->ownerCompanyBusinessUnit = $ownerCompanyBusinessUnit;
        $this->modifiedProperties[self::OWNER_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    public function getOwnerCompanyBusinessUnit()
    {
        return $this->ownerCompanyBusinessUnit;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $ownerCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerCompanyBusinessUnitOrFail(CompanyBusinessUnitTransfer $ownerCompanyBusinessUnit)
    {
        return $this->setOwnerCompanyBusinessUnit($ownerCompanyBusinessUnit);
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function getOwnerCompanyBusinessUnitOrFail()
    {
        if ($this->ownerCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::OWNER_COMPANY_BUSINESS_UNIT);
        }

        return $this->ownerCompanyBusinessUnit;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::OWNER_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @param int[]|null $productListIds
     *
     * @return $this
     */
    public function setProductListIds(array $productListIds = null)
    {
        if ($productListIds === null) {
            $productListIds = [];
        }

        $this->productListIds = $productListIds;
        $this->modifiedProperties[self::PRODUCT_LIST_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @return int[]
     */
    public function getProductListIds()
    {
        return $this->productListIds;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @param int $productListId
     *
     * @return $this
     */
    public function addProductListId($productListId)
    {
        $this->productListIds[] = $productListId;
        $this->modifiedProperties[self::PRODUCT_LIST_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_IDS);

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantTransfer|null $merchant
     *
     * @return $this
     */
    public function setMerchant(MerchantTransfer $merchant = null)
    {
        $this->merchant = $merchant;
        $this->modifiedProperties[self::MERCHANT] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @return \Generated\Shared\Transfer\MerchantTransfer|null
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantTransfer $merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantOrFail(MerchantTransfer $merchant)
    {
        return $this->setMerchant($merchant);
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MerchantTransfer
     */
    public function getMerchantOrFail()
    {
        if ($this->merchant === null) {
            $this->throwNullValueException(static::MERCHANT);
        }

        return $this->merchant;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationship
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationship
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationship
     *
     * @return string|null
     */
    public function getMerchantRelationshipKey()
    {
        return $this->merchantRelationshipKey;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationship
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationship
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationship
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
     * @module MerchantRelationship
     *
     * @param int|null $fkMerchant
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
     * @module MerchantRelationship
     *
     * @return int|null
     */
    public function getFkMerchant()
    {
        return $this->fkMerchant;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int|null $fkMerchant
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
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkMerchantOrFail()
    {
        if ($this->fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->fkMerchant;
    }

    /**
     * @module MerchantRelationship
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
     * @module MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkCompanyBusinessUnit
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
     * @module MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkCompanyBusinessUnit
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
     * @module MerchantRelationship|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module MerchantRelationship|PriceProductMerchantRelationshipStorage
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
     * @module MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null $assigneeCompanyBusinessUnits
     *
     * @return $this
     */
    public function setAssigneeCompanyBusinessUnits(CompanyBusinessUnitCollectionTransfer $assigneeCompanyBusinessUnits = null)
    {
        $this->assigneeCompanyBusinessUnits = $assigneeCompanyBusinessUnits;
        $this->modifiedProperties[self::ASSIGNEE_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null
     */
    public function getAssigneeCompanyBusinessUnits()
    {
        return $this->assigneeCompanyBusinessUnits;
    }

    /**
     * @module MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer $assigneeCompanyBusinessUnits
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssigneeCompanyBusinessUnitsOrFail(CompanyBusinessUnitCollectionTransfer $assigneeCompanyBusinessUnits)
    {
        return $this->setAssigneeCompanyBusinessUnits($assigneeCompanyBusinessUnits);
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer
     */
    public function getAssigneeCompanyBusinessUnitsOrFail()
    {
        if ($this->assigneeCompanyBusinessUnits === null) {
            $this->throwNullValueException(static::ASSIGNEE_COMPANY_BUSINESS_UNITS);
        }

        return $this->assigneeCompanyBusinessUnits;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssigneeCompanyBusinessUnits()
    {
        $this->assertPropertyIsSet(self::ASSIGNEE_COMPANY_BUSINESS_UNITS);

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
                case 'productListIds':
                case 'name':
                case 'merchantRelationshipKey':
                case 'fkMerchant':
                case 'fkCompanyBusinessUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'ownerCompanyBusinessUnit':
                case 'merchant':
                case 'assigneeCompanyBusinessUnits':
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
                case 'idMerchantRelationship':
                case 'productListIds':
                case 'name':
                case 'merchantRelationshipKey':
                case 'fkMerchant':
                case 'fkCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'ownerCompanyBusinessUnit':
                case 'merchant':
                case 'assigneeCompanyBusinessUnits':
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
                case 'idMerchantRelationship':
                case 'productListIds':
                case 'name':
                case 'merchantRelationshipKey':
                case 'fkMerchant':
                case 'fkCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'ownerCompanyBusinessUnit':
                case 'merchant':
                case 'assigneeCompanyBusinessUnits':
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
            'idMerchantRelationship' => $this->idMerchantRelationship,
            'productListIds' => $this->productListIds,
            'name' => $this->name,
            'merchantRelationshipKey' => $this->merchantRelationshipKey,
            'fkMerchant' => $this->fkMerchant,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'ownerCompanyBusinessUnit' => $this->ownerCompanyBusinessUnit,
            'merchant' => $this->merchant,
            'assigneeCompanyBusinessUnits' => $this->assigneeCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship,
            'product_list_ids' => $this->productListIds,
            'name' => $this->name,
            'merchant_relationship_key' => $this->merchantRelationshipKey,
            'fk_merchant' => $this->fkMerchant,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'owner_company_business_unit' => $this->ownerCompanyBusinessUnit,
            'merchant' => $this->merchant,
            'assignee_company_business_units' => $this->assigneeCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, false) : $this->idMerchantRelationship,
            'product_list_ids' => $this->productListIds instanceof AbstractTransfer ? $this->productListIds->toArray(true, false) : $this->productListIds,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'merchant_relationship_key' => $this->merchantRelationshipKey instanceof AbstractTransfer ? $this->merchantRelationshipKey->toArray(true, false) : $this->merchantRelationshipKey,
            'fk_merchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, false) : $this->fkMerchant,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'owner_company_business_unit' => $this->ownerCompanyBusinessUnit instanceof AbstractTransfer ? $this->ownerCompanyBusinessUnit->toArray(true, false) : $this->ownerCompanyBusinessUnit,
            'merchant' => $this->merchant instanceof AbstractTransfer ? $this->merchant->toArray(true, false) : $this->merchant,
            'assignee_company_business_units' => $this->assigneeCompanyBusinessUnits instanceof AbstractTransfer ? $this->assigneeCompanyBusinessUnits->toArray(true, false) : $this->assigneeCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, true) : $this->idMerchantRelationship,
            'productListIds' => $this->productListIds instanceof AbstractTransfer ? $this->productListIds->toArray(true, true) : $this->productListIds,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'merchantRelationshipKey' => $this->merchantRelationshipKey instanceof AbstractTransfer ? $this->merchantRelationshipKey->toArray(true, true) : $this->merchantRelationshipKey,
            'fkMerchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, true) : $this->fkMerchant,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'ownerCompanyBusinessUnit' => $this->ownerCompanyBusinessUnit instanceof AbstractTransfer ? $this->ownerCompanyBusinessUnit->toArray(true, true) : $this->ownerCompanyBusinessUnit,
            'merchant' => $this->merchant instanceof AbstractTransfer ? $this->merchant->toArray(true, true) : $this->merchant,
            'assigneeCompanyBusinessUnits' => $this->assigneeCompanyBusinessUnits instanceof AbstractTransfer ? $this->assigneeCompanyBusinessUnits->toArray(true, true) : $this->assigneeCompanyBusinessUnits,
        ];
    }
}
