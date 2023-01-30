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
class NodeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const IS_MAIN = 'isMain';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @deprecated Will be removed with next major
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const FK_PARENT_CATEGORY_NODE = 'fkParentCategoryNode';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const CATEGORY = 'category';

    /**
     * @var string
     */
    public const NODE_ORDER = 'nodeOrder';

    /**
     * @var string
     */
    public const IS_ROOT = 'isRoot';

    /**
     * @deprecated Will be removed with next major
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const CHILDREN_NODES = 'childrenNodes';

    /**
     * @var int|null
     */
    protected $idCategoryNode;

    /**
     * @var bool|null
     */
    protected $isMain;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $fkParentCategoryNode;

    /**
     * @var int|null
     */
    protected $fkCategory;

    /**
     * @var \Generated\Shared\Transfer\CategoryTransfer|null
     */
    protected $category;

    /**
     * @var int|null
     */
    protected $nodeOrder;

    /**
     * @var bool|null
     */
    protected $isRoot;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer[]
     */
    protected $localizedAttributes;

    /**
     * @var \Generated\Shared\Transfer\NodeCollectionTransfer|null
     */
    protected $childrenNodes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
        'path' => 'path',
        'Path' => 'path',
        'name' => 'name',
        'Name' => 'name',
        'fk_parent_category_node' => 'fkParentCategoryNode',
        'fkParentCategoryNode' => 'fkParentCategoryNode',
        'FkParentCategoryNode' => 'fkParentCategoryNode',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'category' => 'category',
        'Category' => 'category',
        'node_order' => 'nodeOrder',
        'nodeOrder' => 'nodeOrder',
        'NodeOrder' => 'nodeOrder',
        'is_root' => 'isRoot',
        'isRoot' => 'isRoot',
        'IsRoot' => 'isRoot',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'children_nodes' => 'childrenNodes',
        'childrenNodes' => 'childrenNodes',
        'ChildrenNodes' => 'childrenNodes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::FK_PARENT_CATEGORY_NODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_parent_category_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY => [
            'type' => 'Generated\Shared\Transfer\CategoryTransfer',
            'type_shim' => null,
            'name_underscore' => 'category',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NODE_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'node_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ROOT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_root',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHILDREN_NODES => [
            'type' => 'Generated\Shared\Transfer\NodeCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'children_nodes',
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
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage|ProductCategory|ProductPageSearch
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
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage|ProductCategory|ProductPageSearch
     *
     * @return int|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage|ProductCategory|ProductPageSearch
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
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage|ProductCategory|ProductPageSearch
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
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage|ProductCategory|ProductPageSearch
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
     * @module CategoryGui|Category
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
     * @module CategoryGui|Category
     *
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @module CategoryGui|Category
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
     * @module CategoryGui|Category
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
     * @module CategoryGui|Category
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
     * @module CategoryGui|Category|ProductListGui
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductListGui
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module CategoryGui|Category|ProductListGui
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module CategoryGui|Category|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module CategoryGui|Category|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Will be removed with next major
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
     * @module CategoryGui|Category
     *
     * @deprecated Will be removed with next major
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Will be removed with next major
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
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed with next major
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
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with next major
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module CategoryGui|CategoryStorage|Category
     *
     * @param int|null $fkParentCategoryNode
     *
     * @return $this
     */
    public function setFkParentCategoryNode($fkParentCategoryNode)
    {
        $this->fkParentCategoryNode = $fkParentCategoryNode;
        $this->modifiedProperties[self::FK_PARENT_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|CategoryStorage|Category
     *
     * @return int|null
     */
    public function getFkParentCategoryNode()
    {
        return $this->fkParentCategoryNode;
    }

    /**
     * @module CategoryGui|CategoryStorage|Category
     *
     * @param int|null $fkParentCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkParentCategoryNodeOrFail($fkParentCategoryNode)
    {
        if ($fkParentCategoryNode === null) {
            $this->throwNullValueException(static::FK_PARENT_CATEGORY_NODE);
        }

        return $this->setFkParentCategoryNode($fkParentCategoryNode);
    }

    /**
     * @module CategoryGui|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkParentCategoryNodeOrFail()
    {
        if ($this->fkParentCategoryNode === null) {
            $this->throwNullValueException(static::FK_PARENT_CATEGORY_NODE);
        }

        return $this->fkParentCategoryNode;
    }

    /**
     * @module CategoryGui|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkParentCategoryNode()
    {
        $this->assertPropertyIsSet(self::FK_PARENT_CATEGORY_NODE);

        return $this;
    }

    /**
     * @module CategoryPageSearch|Category|ProductCategoryStorage
     *
     * @param int|null $fkCategory
     *
     * @return $this
     */
    public function setFkCategory($fkCategory)
    {
        $this->fkCategory = $fkCategory;
        $this->modifiedProperties[self::FK_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|Category|ProductCategoryStorage
     *
     * @return int|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module CategoryPageSearch|Category|ProductCategoryStorage
     *
     * @param int|null $fkCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryOrFail($fkCategory)
    {
        if ($fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->setFkCategory($fkCategory);
    }

    /**
     * @module CategoryPageSearch|Category|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module CategoryPageSearch|Category|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategory()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\CategoryTransfer|null $category
     *
     * @return $this
     */
    public function setCategory(CategoryTransfer $category = null)
    {
        $this->category = $category;
        $this->modifiedProperties[self::CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return \Generated\Shared\Transfer\CategoryTransfer|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\CategoryTransfer $category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryOrFail(CategoryTransfer $category)
    {
        return $this->setCategory($category);
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CategoryTransfer
     */
    public function getCategoryOrFail()
    {
        if ($this->category === null) {
            $this->throwNullValueException(static::CATEGORY);
        }

        return $this->category;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategory()
    {
        $this->assertPropertyIsSet(self::CATEGORY);

        return $this;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @param int|null $nodeOrder
     *
     * @return $this
     */
    public function setNodeOrder($nodeOrder)
    {
        $this->nodeOrder = $nodeOrder;
        $this->modifiedProperties[self::NODE_ORDER] = true;

        return $this;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @return int|null
     */
    public function getNodeOrder()
    {
        return $this->nodeOrder;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @param int|null $nodeOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeOrderOrFail($nodeOrder)
    {
        if ($nodeOrder === null) {
            $this->throwNullValueException(static::NODE_ORDER);
        }

        return $this->setNodeOrder($nodeOrder);
    }

    /**
     * @module CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNodeOrderOrFail()
    {
        if ($this->nodeOrder === null) {
            $this->throwNullValueException(static::NODE_ORDER);
        }

        return $this->nodeOrder;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeOrder()
    {
        $this->assertPropertyIsSet(self::NODE_ORDER);

        return $this;
    }

    /**
     * @module Category|ProductListGui
     *
     * @param bool|null $isRoot
     *
     * @return $this
     */
    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
        $this->modifiedProperties[self::IS_ROOT] = true;

        return $this;
    }

    /**
     * @module Category|ProductListGui
     *
     * @return bool|null
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    /**
     * @module Category|ProductListGui
     *
     * @param bool|null $isRoot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRootOrFail($isRoot)
    {
        if ($isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->setIsRoot($isRoot);
    }

    /**
     * @module Category|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRootOrFail()
    {
        if ($this->isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->isRoot;
    }

    /**
     * @module Category|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRoot()
    {
        $this->assertPropertyIsSet(self::IS_ROOT);

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Will be removed with next major
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer[] $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(ArrayObject $localizedAttributes)
    {
        $this->localizedAttributes = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Will be removed with next major
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module Category
     *
     * @deprecated Will be removed with next major
     *
     * @param \Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer $localizedAttributes
     *
     * @return $this
     */
    public function addLocalizedAttributes(CategoryLocalizedAttributesTransfer $localizedAttributes)
    {
        $this->localizedAttributes[] = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with next major
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module Category
     *
     * @param \Generated\Shared\Transfer\NodeCollectionTransfer|null $childrenNodes
     *
     * @return $this
     */
    public function setChildrenNodes(NodeCollectionTransfer $childrenNodes = null)
    {
        $this->childrenNodes = $childrenNodes;
        $this->modifiedProperties[self::CHILDREN_NODES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return \Generated\Shared\Transfer\NodeCollectionTransfer|null
     */
    public function getChildrenNodes()
    {
        return $this->childrenNodes;
    }

    /**
     * @module Category
     *
     * @param \Generated\Shared\Transfer\NodeCollectionTransfer $childrenNodes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChildrenNodesOrFail(NodeCollectionTransfer $childrenNodes)
    {
        return $this->setChildrenNodes($childrenNodes);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NodeCollectionTransfer
     */
    public function getChildrenNodesOrFail()
    {
        if ($this->childrenNodes === null) {
            $this->throwNullValueException(static::CHILDREN_NODES);
        }

        return $this->childrenNodes;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildrenNodes()
    {
        $this->assertPropertyIsSet(self::CHILDREN_NODES);

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
                case 'idCategoryNode':
                case 'isMain':
                case 'path':
                case 'name':
                case 'fkParentCategoryNode':
                case 'fkCategory':
                case 'nodeOrder':
                case 'isRoot':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'category':
                case 'childrenNodes':
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
                case 'localizedAttributes':
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
                case 'idCategoryNode':
                case 'isMain':
                case 'path':
                case 'name':
                case 'fkParentCategoryNode':
                case 'fkCategory':
                case 'nodeOrder':
                case 'isRoot':
                    $values[$arrayKey] = $value;

                    break;
                case 'category':
                case 'childrenNodes':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'localizedAttributes':
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
                case 'idCategoryNode':
                case 'isMain':
                case 'path':
                case 'name':
                case 'fkParentCategoryNode':
                case 'fkCategory':
                case 'nodeOrder':
                case 'isRoot':
                    $values[$arrayKey] = $value;

                    break;
                case 'category':
                case 'childrenNodes':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'localizedAttributes':
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
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode,
            'isMain' => $this->isMain,
            'path' => $this->path,
            'name' => $this->name,
            'fkParentCategoryNode' => $this->fkParentCategoryNode,
            'fkCategory' => $this->fkCategory,
            'nodeOrder' => $this->nodeOrder,
            'isRoot' => $this->isRoot,
            'category' => $this->category,
            'childrenNodes' => $this->childrenNodes,
            'localizedAttributes' => $this->localizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode,
            'is_main' => $this->isMain,
            'path' => $this->path,
            'name' => $this->name,
            'fk_parent_category_node' => $this->fkParentCategoryNode,
            'fk_category' => $this->fkCategory,
            'node_order' => $this->nodeOrder,
            'is_root' => $this->isRoot,
            'category' => $this->category,
            'children_nodes' => $this->childrenNodes,
            'localized_attributes' => $this->localizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'fk_parent_category_node' => $this->fkParentCategoryNode instanceof AbstractTransfer ? $this->fkParentCategoryNode->toArray(true, false) : $this->fkParentCategoryNode,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'node_order' => $this->nodeOrder instanceof AbstractTransfer ? $this->nodeOrder->toArray(true, false) : $this->nodeOrder,
            'is_root' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, false) : $this->isRoot,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, false) : $this->category,
            'children_nodes' => $this->childrenNodes instanceof AbstractTransfer ? $this->childrenNodes->toArray(true, false) : $this->childrenNodes,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'fkParentCategoryNode' => $this->fkParentCategoryNode instanceof AbstractTransfer ? $this->fkParentCategoryNode->toArray(true, true) : $this->fkParentCategoryNode,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'nodeOrder' => $this->nodeOrder instanceof AbstractTransfer ? $this->nodeOrder->toArray(true, true) : $this->nodeOrder,
            'isRoot' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, true) : $this->isRoot,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, true) : $this->category,
            'childrenNodes' => $this->childrenNodes instanceof AbstractTransfer ? $this->childrenNodes->toArray(true, true) : $this->childrenNodes,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
        ];
    }
}
