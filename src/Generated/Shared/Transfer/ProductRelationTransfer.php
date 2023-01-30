<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductRelationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_RELATION = 'idProductRelation';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_REBUILD_SCHEDULED = 'isRebuildScheduled';

    /**
     * @var string
     */
    public const PRODUCT_RELATION_TYPE = 'productRelationType';

    /**
     * @var string
     */
    public const QUERY_SET = 'querySet';

    /**
     * @var string
     */
    public const QUERY_DATA_PROVIDER = 'queryDataProvider';

    /**
     * @var string
     */
    public const RELATED_PRODUCTS = 'relatedProducts';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const PRODUCT_RELATION_KEY = 'productRelationKey';

    /**
     * @var int|null
     */
    protected $idProductRelation;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isRebuildScheduled;

    /**
     * @var \Generated\Shared\Transfer\ProductRelationTypeTransfer|null
     */
    protected $productRelationType;

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    protected $querySet;

    /**
     * @var \Generated\Shared\Transfer\RuleQueryDataProviderTransfer|null
     */
    protected $queryDataProvider;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductRelationRelatedProductTransfer[]
     */
    protected $relatedProducts;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var string|null
     */
    protected $productRelationKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_relation' => 'idProductRelation',
        'idProductRelation' => 'idProductRelation',
        'IdProductRelation' => 'idProductRelation',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_rebuild_scheduled' => 'isRebuildScheduled',
        'isRebuildScheduled' => 'isRebuildScheduled',
        'IsRebuildScheduled' => 'isRebuildScheduled',
        'product_relation_type' => 'productRelationType',
        'productRelationType' => 'productRelationType',
        'ProductRelationType' => 'productRelationType',
        'query_set' => 'querySet',
        'querySet' => 'querySet',
        'QuerySet' => 'querySet',
        'query_data_provider' => 'queryDataProvider',
        'queryDataProvider' => 'queryDataProvider',
        'QueryDataProvider' => 'queryDataProvider',
        'related_products' => 'relatedProducts',
        'relatedProducts' => 'relatedProducts',
        'RelatedProducts' => 'relatedProducts',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'product_relation_key' => 'productRelationKey',
        'productRelationKey' => 'productRelationKey',
        'ProductRelationKey' => 'productRelationKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_RELATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_relation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_REBUILD_SCHEDULED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_rebuild_scheduled',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_RELATION_TYPE => [
            'type' => 'Generated\Shared\Transfer\ProductRelationTypeTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_relation_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUERY_SET => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'query_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUERY_DATA_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\RuleQueryDataProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'query_data_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATED_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\ProductRelationRelatedProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'related_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PRODUCT_RELATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_relation_key',
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
     * @module ProductRelationGui|ProductRelation
     *
     * @param int|null $idProductRelation
     *
     * @return $this
     */
    public function setIdProductRelation($idProductRelation)
    {
        $this->idProductRelation = $idProductRelation;
        $this->modifiedProperties[self::ID_PRODUCT_RELATION] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return int|null
     */
    public function getIdProductRelation()
    {
        return $this->idProductRelation;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param int|null $idProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductRelationOrFail($idProductRelation)
    {
        if ($idProductRelation === null) {
            $this->throwNullValueException(static::ID_PRODUCT_RELATION);
        }

        return $this->setIdProductRelation($idProductRelation);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductRelationOrFail()
    {
        if ($this->idProductRelation === null) {
            $this->throwNullValueException(static::ID_PRODUCT_RELATION);
        }

        return $this->idProductRelation;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductRelation()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_RELATION);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param int|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param int|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param bool|null $isRebuildScheduled
     *
     * @return $this
     */
    public function setIsRebuildScheduled($isRebuildScheduled)
    {
        $this->isRebuildScheduled = $isRebuildScheduled;
        $this->modifiedProperties[self::IS_REBUILD_SCHEDULED] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return bool|null
     */
    public function getIsRebuildScheduled()
    {
        return $this->isRebuildScheduled;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param bool|null $isRebuildScheduled
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRebuildScheduledOrFail($isRebuildScheduled)
    {
        if ($isRebuildScheduled === null) {
            $this->throwNullValueException(static::IS_REBUILD_SCHEDULED);
        }

        return $this->setIsRebuildScheduled($isRebuildScheduled);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRebuildScheduledOrFail()
    {
        if ($this->isRebuildScheduled === null) {
            $this->throwNullValueException(static::IS_REBUILD_SCHEDULED);
        }

        return $this->isRebuildScheduled;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRebuildScheduled()
    {
        $this->assertPropertyIsSet(self::IS_REBUILD_SCHEDULED);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param \Generated\Shared\Transfer\ProductRelationTypeTransfer|null $productRelationType
     *
     * @return $this
     */
    public function setProductRelationType(ProductRelationTypeTransfer $productRelationType = null)
    {
        $this->productRelationType = $productRelationType;
        $this->modifiedProperties[self::PRODUCT_RELATION_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @return \Generated\Shared\Transfer\ProductRelationTypeTransfer|null
     */
    public function getProductRelationType()
    {
        return $this->productRelationType;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param \Generated\Shared\Transfer\ProductRelationTypeTransfer $productRelationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductRelationTypeOrFail(ProductRelationTypeTransfer $productRelationType)
    {
        return $this->setProductRelationType($productRelationType);
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductRelationTypeTransfer
     */
    public function getProductRelationTypeOrFail()
    {
        if ($this->productRelationType === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION_TYPE);
        }

        return $this->productRelationType;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductRelationType()
    {
        $this->assertPropertyIsSet(self::PRODUCT_RELATION_TYPE);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null $querySet
     *
     * @return $this
     */
    public function setQuerySet(PropelQueryBuilderRuleSetTransfer $querySet = null)
    {
        $this->querySet = $querySet;
        $this->modifiedProperties[self::QUERY_SET] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    public function getQuerySet()
    {
        return $this->querySet;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer $querySet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuerySetOrFail(PropelQueryBuilderRuleSetTransfer $querySet)
    {
        return $this->setQuerySet($querySet);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer
     */
    public function getQuerySetOrFail()
    {
        if ($this->querySet === null) {
            $this->throwNullValueException(static::QUERY_SET);
        }

        return $this->querySet;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuerySet()
    {
        $this->assertPropertyIsSet(self::QUERY_SET);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\RuleQueryDataProviderTransfer|null $queryDataProvider
     *
     * @return $this
     */
    public function setQueryDataProvider(RuleQueryDataProviderTransfer $queryDataProvider = null)
    {
        $this->queryDataProvider = $queryDataProvider;
        $this->modifiedProperties[self::QUERY_DATA_PROVIDER] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return \Generated\Shared\Transfer\RuleQueryDataProviderTransfer|null
     */
    public function getQueryDataProvider()
    {
        return $this->queryDataProvider;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\RuleQueryDataProviderTransfer $queryDataProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueryDataProviderOrFail(RuleQueryDataProviderTransfer $queryDataProvider)
    {
        return $this->setQueryDataProvider($queryDataProvider);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RuleQueryDataProviderTransfer
     */
    public function getQueryDataProviderOrFail()
    {
        if ($this->queryDataProvider === null) {
            $this->throwNullValueException(static::QUERY_DATA_PROVIDER);
        }

        return $this->queryDataProvider;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryDataProvider()
    {
        $this->assertPropertyIsSet(self::QUERY_DATA_PROVIDER);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductRelationRelatedProductTransfer[] $relatedProducts
     *
     * @return $this
     */
    public function setRelatedProducts(ArrayObject $relatedProducts)
    {
        $this->relatedProducts = $relatedProducts;
        $this->modifiedProperties[self::RELATED_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductRelationRelatedProductTransfer[]
     */
    public function getRelatedProducts()
    {
        return $this->relatedProducts;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @param \Generated\Shared\Transfer\ProductRelationRelatedProductTransfer $relatedProduct
     *
     * @return $this
     */
    public function addRelatedProduct(ProductRelationRelatedProductTransfer $relatedProduct)
    {
        $this->relatedProducts[] = $relatedProduct;
        $this->modifiedProperties[self::RELATED_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelatedProducts()
    {
        $this->assertCollectionPropertyIsSet(self::RELATED_PRODUCTS);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
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
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
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
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
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
     * @module ProductRelationGui|ProductRelationStorage|ProductRelation
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
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $productRelationKey
     *
     * @return $this
     */
    public function setProductRelationKey($productRelationKey)
    {
        $this->productRelationKey = $productRelationKey;
        $this->modifiedProperties[self::PRODUCT_RELATION_KEY] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return string|null
     */
    public function getProductRelationKey()
    {
        return $this->productRelationKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $productRelationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductRelationKeyOrFail($productRelationKey)
    {
        if ($productRelationKey === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION_KEY);
        }

        return $this->setProductRelationKey($productRelationKey);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductRelationKeyOrFail()
    {
        if ($this->productRelationKey === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION_KEY);
        }

        return $this->productRelationKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductRelationKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_RELATION_KEY);

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
                case 'idProductRelation':
                case 'fkProductAbstract':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'createdAt':
                case 'updatedAt':
                case 'productRelationKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productRelationType':
                case 'querySet':
                case 'queryDataProvider':
                case 'storeRelation':
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
                case 'relatedProducts':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idProductRelation':
                case 'fkProductAbstract':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'createdAt':
                case 'updatedAt':
                case 'productRelationKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelationType':
                case 'querySet':
                case 'queryDataProvider':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'relatedProducts':
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
                case 'idProductRelation':
                case 'fkProductAbstract':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'createdAt':
                case 'updatedAt':
                case 'productRelationKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelationType':
                case 'querySet':
                case 'queryDataProvider':
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'relatedProducts':
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
        $this->relatedProducts = $this->relatedProducts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductRelation' => $this->idProductRelation,
            'fkProductAbstract' => $this->fkProductAbstract,
            'isActive' => $this->isActive,
            'isRebuildScheduled' => $this->isRebuildScheduled,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'productRelationKey' => $this->productRelationKey,
            'productRelationType' => $this->productRelationType,
            'querySet' => $this->querySet,
            'queryDataProvider' => $this->queryDataProvider,
            'storeRelation' => $this->storeRelation,
            'relatedProducts' => $this->relatedProducts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_relation' => $this->idProductRelation,
            'fk_product_abstract' => $this->fkProductAbstract,
            'is_active' => $this->isActive,
            'is_rebuild_scheduled' => $this->isRebuildScheduled,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'product_relation_key' => $this->productRelationKey,
            'product_relation_type' => $this->productRelationType,
            'query_set' => $this->querySet,
            'query_data_provider' => $this->queryDataProvider,
            'store_relation' => $this->storeRelation,
            'related_products' => $this->relatedProducts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_relation' => $this->idProductRelation instanceof AbstractTransfer ? $this->idProductRelation->toArray(true, false) : $this->idProductRelation,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_rebuild_scheduled' => $this->isRebuildScheduled instanceof AbstractTransfer ? $this->isRebuildScheduled->toArray(true, false) : $this->isRebuildScheduled,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'product_relation_key' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, false) : $this->productRelationKey,
            'product_relation_type' => $this->productRelationType instanceof AbstractTransfer ? $this->productRelationType->toArray(true, false) : $this->productRelationType,
            'query_set' => $this->querySet instanceof AbstractTransfer ? $this->querySet->toArray(true, false) : $this->querySet,
            'query_data_provider' => $this->queryDataProvider instanceof AbstractTransfer ? $this->queryDataProvider->toArray(true, false) : $this->queryDataProvider,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'related_products' => $this->relatedProducts instanceof AbstractTransfer ? $this->relatedProducts->toArray(true, false) : $this->addValuesToCollection($this->relatedProducts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductRelation' => $this->idProductRelation instanceof AbstractTransfer ? $this->idProductRelation->toArray(true, true) : $this->idProductRelation,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isRebuildScheduled' => $this->isRebuildScheduled instanceof AbstractTransfer ? $this->isRebuildScheduled->toArray(true, true) : $this->isRebuildScheduled,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'productRelationKey' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, true) : $this->productRelationKey,
            'productRelationType' => $this->productRelationType instanceof AbstractTransfer ? $this->productRelationType->toArray(true, true) : $this->productRelationType,
            'querySet' => $this->querySet instanceof AbstractTransfer ? $this->querySet->toArray(true, true) : $this->querySet,
            'queryDataProvider' => $this->queryDataProvider instanceof AbstractTransfer ? $this->queryDataProvider->toArray(true, true) : $this->queryDataProvider,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'relatedProducts' => $this->relatedProducts instanceof AbstractTransfer ? $this->relatedProducts->toArray(true, true) : $this->addValuesToCollection($this->relatedProducts, true, true),
        ];
    }
}
