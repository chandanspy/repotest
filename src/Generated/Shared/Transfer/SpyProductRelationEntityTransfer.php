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
class SpyProductRelationEntityTransfer extends AbstractEntityTransfer
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
    public const FK_PRODUCT_RELATION_TYPE = 'fkProductRelationType';

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
    public const PRODUCT_RELATION_KEY = 'productRelationKey';

    /**
     * @var string
     */
    public const QUERY_SET_DATA = 'querySetData';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATION_TYPE = 'spyProductRelationType';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS = 'spyProductRelationProductAbstracts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_RELATION_STORES = 'spyProductRelationStores';

    /**
     * @var integer|null
     */
    protected $idProductRelation;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductRelationType;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isRebuildScheduled;

    /**
     * @var string|null
     */
    protected $productRelationKey;

    /**
     * @var string|null
     */
    protected $querySetData;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer|null
     */
    protected $spyProductRelationType;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[]
     */
    protected $spyProductRelationProductAbstracts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer[]
     */
    protected $spyProductRelationStores;

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
        'fk_product_relation_type' => 'fkProductRelationType',
        'fkProductRelationType' => 'fkProductRelationType',
        'FkProductRelationType' => 'fkProductRelationType',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_rebuild_scheduled' => 'isRebuildScheduled',
        'isRebuildScheduled' => 'isRebuildScheduled',
        'IsRebuildScheduled' => 'isRebuildScheduled',
        'product_relation_key' => 'productRelationKey',
        'productRelationKey' => 'productRelationKey',
        'ProductRelationKey' => 'productRelationKey',
        'query_set_data' => 'querySetData',
        'querySetData' => 'querySetData',
        'QuerySetData' => 'querySetData',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
        'spy_product_relation_type' => 'spyProductRelationType',
        'spyProductRelationType' => 'spyProductRelationType',
        'SpyProductRelationType' => 'spyProductRelationType',
        'spy_product_relation_product_abstracts' => 'spyProductRelationProductAbstracts',
        'spyProductRelationProductAbstracts' => 'spyProductRelationProductAbstracts',
        'SpyProductRelationProductAbstracts' => 'spyProductRelationProductAbstracts',
        'spy_product_relation_stores' => 'spyProductRelationStores',
        'spyProductRelationStores' => 'spyProductRelationStores',
        'SpyProductRelationStores' => 'spyProductRelationStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_RELATION => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::FK_PRODUCT_RELATION_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_relation_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
            'type' => 'boolean',
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
        self::QUERY_SET_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'query_set_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATION_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relation_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relation_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_RELATION_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_relation_stores',
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
    public static $entityNamespace = 'Orm\Zed\ProductRelation\Persistence\SpyProductRelation';


    /**
     * @module 
     *
     * @param integer|null $idProductRelation
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductRelation()
    {
        return $this->idProductRelation;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductRelation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductRelationOrFail()
    {
        if ($this->idProductRelation === null) {
            $this->throwNullValueException(static::ID_PRODUCT_RELATION);
        }

        return $this->idProductRelation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductAbstract
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductRelationType
     *
     * @return $this
     */
    public function setFkProductRelationType($fkProductRelationType)
    {
        $this->fkProductRelationType = $fkProductRelationType;
        $this->modifiedProperties[self::FK_PRODUCT_RELATION_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductRelationType()
    {
        return $this->fkProductRelationType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductRelationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductRelationTypeOrFail($fkProductRelationType)
    {
        if ($fkProductRelationType === null) {
            $this->throwNullValueException(static::FK_PRODUCT_RELATION_TYPE);
        }

        return $this->setFkProductRelationType($fkProductRelationType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductRelationTypeOrFail()
    {
        if ($this->fkProductRelationType === null) {
            $this->throwNullValueException(static::FK_PRODUCT_RELATION_TYPE);
        }

        return $this->fkProductRelationType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductRelationType()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_RELATION_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isRebuildScheduled
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsRebuildScheduled()
    {
        return $this->isRebuildScheduled;
    }

    /**
     * @module 
     *
     * @param boolean|null $isRebuildScheduled
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsRebuildScheduledOrFail()
    {
        if ($this->isRebuildScheduled === null) {
            $this->throwNullValueException(static::IS_REBUILD_SCHEDULED);
        }

        return $this->isRebuildScheduled;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getProductRelationKey()
    {
        return $this->productRelationKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $querySetData
     *
     * @return $this
     */
    public function setQuerySetData($querySetData)
    {
        $this->querySetData = $querySetData;
        $this->modifiedProperties[self::QUERY_SET_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuerySetData()
    {
        return $this->querySetData;
    }

    /**
     * @module 
     *
     * @param string|null $querySetData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuerySetDataOrFail($querySetData)
    {
        if ($querySetData === null) {
            $this->throwNullValueException(static::QUERY_SET_DATA);
        }

        return $this->setQuerySetData($querySetData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuerySetDataOrFail()
    {
        if ($this->querySetData === null) {
            $this->throwNullValueException(static::QUERY_SET_DATA);
        }

        return $this->querySetData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuerySetData()
    {
        $this->assertPropertyIsSet(self::QUERY_SET_DATA);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProductAbstract
     *
     * @return $this
     */
    public function setSpyProductAbstract(SpyProductAbstractEntityTransfer $spyProductAbstract = null)
    {
        $this->spyProductAbstract = $spyProductAbstract;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProductAbstract()
    {
        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAbstractOrFail(SpyProductAbstractEntityTransfer $spyProductAbstract)
    {
        return $this->setSpyProductAbstract($spyProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductAbstractOrFail()
    {
        if ($this->spyProductAbstract === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ABSTRACT);
        }

        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer|null $spyProductRelationType
     *
     * @return $this
     */
    public function setSpyProductRelationType(SpyProductRelationTypeEntityTransfer $spyProductRelationType = null)
    {
        $this->spyProductRelationType = $spyProductRelationType;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer|null
     */
    public function getSpyProductRelationType()
    {
        return $this->spyProductRelationType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer $spyProductRelationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductRelationTypeOrFail(SpyProductRelationTypeEntityTransfer $spyProductRelationType)
    {
        return $this->setSpyProductRelationType($spyProductRelationType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductRelationTypeEntityTransfer
     */
    public function getSpyProductRelationTypeOrFail()
    {
        if ($this->spyProductRelationType === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_RELATION_TYPE);
        }

        return $this->spyProductRelationType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelationType()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_RELATION_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[] $spyProductRelationProductAbstracts
     *
     * @return $this
     */
    public function setSpyProductRelationProductAbstracts(ArrayObject $spyProductRelationProductAbstracts)
    {
        $this->spyProductRelationProductAbstracts = $spyProductRelationProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer[]
     */
    public function getSpyProductRelationProductAbstracts()
    {
        return $this->spyProductRelationProductAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationProductAbstractEntityTransfer $spyProductRelationProductAbstracts
     *
     * @return $this
     */
    public function addSpyProductRelationProductAbstracts(SpyProductRelationProductAbstractEntityTransfer $spyProductRelationProductAbstracts)
    {
        $this->spyProductRelationProductAbstracts[] = $spyProductRelationProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelationProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_RELATION_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer[] $spyProductRelationStores
     *
     * @return $this
     */
    public function setSpyProductRelationStores(ArrayObject $spyProductRelationStores)
    {
        $this->spyProductRelationStores = $spyProductRelationStores;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer[]
     */
    public function getSpyProductRelationStores()
    {
        return $this->spyProductRelationStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductRelationStoreEntityTransfer $spyProductRelationStores
     *
     * @return $this
     */
    public function addSpyProductRelationStores(SpyProductRelationStoreEntityTransfer $spyProductRelationStores)
    {
        $this->spyProductRelationStores[] = $spyProductRelationStores;
        $this->modifiedProperties[self::SPY_PRODUCT_RELATION_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductRelationStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_RELATION_STORES);

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
                case 'fkProductRelationType':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'productRelationKey':
                case 'querySetData':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstract':
                case 'spyProductRelationType':
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
                case 'spyProductRelationProductAbstracts':
                case 'spyProductRelationStores':
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
                case 'idProductRelation':
                case 'fkProductAbstract':
                case 'fkProductRelationType':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'productRelationKey':
                case 'querySetData':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                case 'spyProductRelationType':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductRelationProductAbstracts':
                case 'spyProductRelationStores':
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
                case 'fkProductRelationType':
                case 'isActive':
                case 'isRebuildScheduled':
                case 'productRelationKey':
                case 'querySetData':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                case 'spyProductRelationType':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductRelationProductAbstracts':
                case 'spyProductRelationStores':
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
        $this->spyProductRelationProductAbstracts = $this->spyProductRelationProductAbstracts ?: new ArrayObject();
        $this->spyProductRelationStores = $this->spyProductRelationStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductRelation' => $this->idProductRelation,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkProductRelationType' => $this->fkProductRelationType,
            'isActive' => $this->isActive,
            'isRebuildScheduled' => $this->isRebuildScheduled,
            'productRelationKey' => $this->productRelationKey,
            'querySetData' => $this->querySetData,
            'spyProductAbstract' => $this->spyProductAbstract,
            'spyProductRelationType' => $this->spyProductRelationType,
            'spyProductRelationProductAbstracts' => $this->spyProductRelationProductAbstracts,
            'spyProductRelationStores' => $this->spyProductRelationStores,
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
            'fk_product_relation_type' => $this->fkProductRelationType,
            'is_active' => $this->isActive,
            'is_rebuild_scheduled' => $this->isRebuildScheduled,
            'product_relation_key' => $this->productRelationKey,
            'query_set_data' => $this->querySetData,
            'spy_product_abstract' => $this->spyProductAbstract,
            'spy_product_relation_type' => $this->spyProductRelationType,
            'spy_product_relation_product_abstracts' => $this->spyProductRelationProductAbstracts,
            'spy_product_relation_stores' => $this->spyProductRelationStores,
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
            'fk_product_relation_type' => $this->fkProductRelationType instanceof AbstractTransfer ? $this->fkProductRelationType->toArray(true, false) : $this->fkProductRelationType,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_rebuild_scheduled' => $this->isRebuildScheduled instanceof AbstractTransfer ? $this->isRebuildScheduled->toArray(true, false) : $this->isRebuildScheduled,
            'product_relation_key' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, false) : $this->productRelationKey,
            'query_set_data' => $this->querySetData instanceof AbstractTransfer ? $this->querySetData->toArray(true, false) : $this->querySetData,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
            'spy_product_relation_type' => $this->spyProductRelationType instanceof AbstractTransfer ? $this->spyProductRelationType->toArray(true, false) : $this->spyProductRelationType,
            'spy_product_relation_product_abstracts' => $this->spyProductRelationProductAbstracts instanceof AbstractTransfer ? $this->spyProductRelationProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyProductRelationProductAbstracts, true, false),
            'spy_product_relation_stores' => $this->spyProductRelationStores instanceof AbstractTransfer ? $this->spyProductRelationStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductRelationStores, true, false),
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
            'fkProductRelationType' => $this->fkProductRelationType instanceof AbstractTransfer ? $this->fkProductRelationType->toArray(true, true) : $this->fkProductRelationType,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isRebuildScheduled' => $this->isRebuildScheduled instanceof AbstractTransfer ? $this->isRebuildScheduled->toArray(true, true) : $this->isRebuildScheduled,
            'productRelationKey' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, true) : $this->productRelationKey,
            'querySetData' => $this->querySetData instanceof AbstractTransfer ? $this->querySetData->toArray(true, true) : $this->querySetData,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
            'spyProductRelationType' => $this->spyProductRelationType instanceof AbstractTransfer ? $this->spyProductRelationType->toArray(true, true) : $this->spyProductRelationType,
            'spyProductRelationProductAbstracts' => $this->spyProductRelationProductAbstracts instanceof AbstractTransfer ? $this->spyProductRelationProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyProductRelationProductAbstracts, true, true),
            'spyProductRelationStores' => $this->spyProductRelationStores instanceof AbstractTransfer ? $this->spyProductRelationStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductRelationStores, true, true),
        ];
    }
}
