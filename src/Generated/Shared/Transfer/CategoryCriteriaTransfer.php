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
class CategoryCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const WITH_NODES = 'withNodes';

    /**
     * @var string
     */
    public const WITH_CHILDREN = 'withChildren';

    /**
     * @var string
     */
    public const IS_MAIN = 'isMain';

    /**
     * @var string
     */
    public const WITH_CHILDREN_RECURSIVELY = 'withChildrenRecursively';

    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var bool|null
     */
    protected $withNodes;

    /**
     * @var bool|null
     */
    protected $withChildren;

    /**
     * @var bool|null
     */
    protected $isMain;

    /**
     * @var bool|null
     */
    protected $withChildrenRecursively;

    /**
     * @var int|null
     */
    protected $idCategoryNode;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'with_nodes' => 'withNodes',
        'withNodes' => 'withNodes',
        'WithNodes' => 'withNodes',
        'with_children' => 'withChildren',
        'withChildren' => 'withChildren',
        'WithChildren' => 'withChildren',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
        'with_children_recursively' => 'withChildrenRecursively',
        'withChildrenRecursively' => 'withChildrenRecursively',
        'WithChildrenRecursively' => 'withChildrenRecursively',
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_NODES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_nodes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_CHILDREN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_children',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_MAIN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_main',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_CHILDREN_RECURSIVELY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_children_recursively',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORY_NODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
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
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @param int|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @param int|null $idLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocaleOrFail($idLocale)
    {
        if ($idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->setIdLocale($idLocale);
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdLocaleOrFail()
    {
        if ($this->idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->idLocale;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLocale()
    {
        $this->assertPropertyIsSet(self::ID_LOCALE);

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param int|null $idCategory
     *
     * @return $this
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
        $this->modifiedProperties[self::ID_CATEGORY] = true;

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param int|null $idCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryOrFail($idCategory)
    {
        if ($idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->setIdCategory($idCategory);
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryOrFail()
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategory()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module Category
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $withNodes
     *
     * @return $this
     */
    public function setWithNodes($withNodes)
    {
        $this->withNodes = $withNodes;
        $this->modifiedProperties[self::WITH_NODES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getWithNodes()
    {
        return $this->withNodes;
    }

    /**
     * @module Category
     *
     * @param bool|null $withNodes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithNodesOrFail($withNodes)
    {
        if ($withNodes === null) {
            $this->throwNullValueException(static::WITH_NODES);
        }

        return $this->setWithNodes($withNodes);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithNodesOrFail()
    {
        if ($this->withNodes === null) {
            $this->throwNullValueException(static::WITH_NODES);
        }

        return $this->withNodes;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithNodes()
    {
        $this->assertPropertyIsSet(self::WITH_NODES);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $withChildren
     *
     * @return $this
     */
    public function setWithChildren($withChildren)
    {
        $this->withChildren = $withChildren;
        $this->modifiedProperties[self::WITH_CHILDREN] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getWithChildren()
    {
        return $this->withChildren;
    }

    /**
     * @module Category
     *
     * @param bool|null $withChildren
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenOrFail($withChildren)
    {
        if ($withChildren === null) {
            $this->throwNullValueException(static::WITH_CHILDREN);
        }

        return $this->setWithChildren($withChildren);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithChildrenOrFail()
    {
        if ($this->withChildren === null) {
            $this->throwNullValueException(static::WITH_CHILDREN);
        }

        return $this->withChildren;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithChildren()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $isMain
     *
     * @return $this
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        $this->modifiedProperties[self::IS_MAIN] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @module Category
     *
     * @param bool|null $isMain
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMainOrFail($isMain)
    {
        if ($isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->setIsMain($isMain);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsMainOrFail()
    {
        if ($this->isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->isMain;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsMain()
    {
        $this->assertPropertyIsSet(self::IS_MAIN);

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param bool|null $withChildrenRecursively
     *
     * @return $this
     */
    public function setWithChildrenRecursively($withChildrenRecursively)
    {
        $this->withChildrenRecursively = $withChildrenRecursively;
        $this->modifiedProperties[self::WITH_CHILDREN_RECURSIVELY] = true;

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @return bool|null
     */
    public function getWithChildrenRecursively()
    {
        return $this->withChildrenRecursively;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @param bool|null $withChildrenRecursively
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenRecursivelyOrFail($withChildrenRecursively)
    {
        if ($withChildrenRecursively === null) {
            $this->throwNullValueException(static::WITH_CHILDREN_RECURSIVELY);
        }

        return $this->setWithChildrenRecursively($withChildrenRecursively);
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithChildrenRecursivelyOrFail()
    {
        if ($this->withChildrenRecursively === null) {
            $this->throwNullValueException(static::WITH_CHILDREN_RECURSIVELY);
        }

        return $this->withChildrenRecursively;
    }

    /**
     * @module Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithChildrenRecursively()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN_RECURSIVELY);

        return $this;
    }

    /**
     * @module Category
     *
     * @param int|null $idCategoryNode
     *
     * @return $this
     */
    public function setIdCategoryNode($idCategoryNode)
    {
        $this->idCategoryNode = $idCategoryNode;
        $this->modifiedProperties[self::ID_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return int|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module Category
     *
     * @param int|null $idCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryNodeOrFail($idCategoryNode)
    {
        if ($idCategoryNode === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE);
        }

        return $this->setIdCategoryNode($idCategoryNode);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryNodeOrFail()
    {
        if ($this->idCategoryNode === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE);
        }

        return $this->idCategoryNode;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryNode()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_NODE);

        return $this;
    }

    /**
     * @module Category
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module Category
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module Category
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module Category
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

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
                case 'idLocale':
                case 'idCategory':
                case 'storeName':
                case 'localeName':
                case 'withNodes':
                case 'withChildren':
                case 'isMain':
                case 'withChildrenRecursively':
                case 'idCategoryNode':
                case 'limit':
                case 'offset':
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
                case 'idLocale':
                case 'idCategory':
                case 'storeName':
                case 'localeName':
                case 'withNodes':
                case 'withChildren':
                case 'isMain':
                case 'withChildrenRecursively':
                case 'idCategoryNode':
                case 'limit':
                case 'offset':
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
                case 'idLocale':
                case 'idCategory':
                case 'storeName':
                case 'localeName':
                case 'withNodes':
                case 'withChildren':
                case 'isMain':
                case 'withChildrenRecursively':
                case 'idCategoryNode':
                case 'limit':
                case 'offset':
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
            'idLocale' => $this->idLocale,
            'idCategory' => $this->idCategory,
            'storeName' => $this->storeName,
            'localeName' => $this->localeName,
            'withNodes' => $this->withNodes,
            'withChildren' => $this->withChildren,
            'isMain' => $this->isMain,
            'withChildrenRecursively' => $this->withChildrenRecursively,
            'idCategoryNode' => $this->idCategoryNode,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale,
            'id_category' => $this->idCategory,
            'store_name' => $this->storeName,
            'locale_name' => $this->localeName,
            'with_nodes' => $this->withNodes,
            'with_children' => $this->withChildren,
            'is_main' => $this->isMain,
            'with_children_recursively' => $this->withChildrenRecursively,
            'id_category_node' => $this->idCategoryNode,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'with_nodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, false) : $this->withNodes,
            'with_children' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, false) : $this->withChildren,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'with_children_recursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, false) : $this->withChildrenRecursively,
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'withNodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, true) : $this->withNodes,
            'withChildren' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, true) : $this->withChildren,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'withChildrenRecursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, true) : $this->withChildrenRecursively,
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
        ];
    }
}
