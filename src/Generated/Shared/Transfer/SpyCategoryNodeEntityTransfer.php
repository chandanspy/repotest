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
class SpyCategoryNodeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const FK_PARENT_CATEGORY_NODE = 'fkParentCategoryNode';

    /**
     * @var string
     */
    public const IS_MAIN = 'isMain';

    /**
     * @var string
     */
    public const IS_ROOT = 'isRoot';

    /**
     * @var string
     */
    public const NODE_ORDER = 'nodeOrder';

    /**
     * @var string
     */
    public const PARENT_CATEGORY_NODE = 'parentCategoryNode';

    /**
     * @var string
     */
    public const CATEGORY = 'category';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var string
     */
    public const SPY_CATEGORY_NODES = 'spyCategoryNodes';

    /**
     * @var string
     */
    public const SPY_CATEGORY_CLOSURE_TABLES = 'spyCategoryClosureTables';

    /**
     * @var integer|null
     */
    protected $idCategoryNode;

    /**
     * @var integer|null
     */
    protected $fkCategory;

    /**
     * @var integer|null
     */
    protected $fkParentCategoryNode;

    /**
     * @var boolean|null
     */
    protected $isMain;

    /**
     * @var boolean|null
     */
    protected $isRoot;

    /**
     * @var integer|null
     */
    protected $nodeOrder;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    protected $parentCategoryNode;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    protected $category;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer[]
     */
    protected $spyCategoryNodes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer[]
     */
    protected $spyCategoryClosureTables;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'fk_parent_category_node' => 'fkParentCategoryNode',
        'fkParentCategoryNode' => 'fkParentCategoryNode',
        'FkParentCategoryNode' => 'fkParentCategoryNode',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
        'is_root' => 'isRoot',
        'isRoot' => 'isRoot',
        'IsRoot' => 'isRoot',
        'node_order' => 'nodeOrder',
        'nodeOrder' => 'nodeOrder',
        'NodeOrder' => 'nodeOrder',
        'parent_category_node' => 'parentCategoryNode',
        'parentCategoryNode' => 'parentCategoryNode',
        'ParentCategoryNode' => 'parentCategoryNode',
        'category' => 'category',
        'Category' => 'category',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
        'spy_category_nodes' => 'spyCategoryNodes',
        'spyCategoryNodes' => 'spyCategoryNodes',
        'SpyCategoryNodes' => 'spyCategoryNodes',
        'spy_category_closure_tables' => 'spyCategoryClosureTables',
        'spyCategoryClosureTables' => 'spyCategoryClosureTables',
        'SpyCategoryClosureTables' => 'spyCategoryClosureTables',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_NODE => [
            'type' => 'integer',
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
        self::FK_CATEGORY => [
            'type' => 'integer',
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
        self::FK_PARENT_CATEGORY_NODE => [
            'type' => 'integer',
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
        self::IS_MAIN => [
            'type' => 'boolean',
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
        self::IS_ROOT => [
            'type' => 'boolean',
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
        self::NODE_ORDER => [
            'type' => 'integer',
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
        self::PARENT_CATEGORY_NODE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_category_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
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
        self::SPY_URLS => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_NODES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_nodes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_CLOSURE_TABLES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_closure_tables',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_CLOSURE_TABLES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_closure_tables',
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
    public static $entityNamespace = 'Orm\Zed\Category\Persistence\SpyCategoryNode';


    /**
     * @module 
     *
     * @param integer|null $idCategoryNode
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryNode
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryNodeOrFail()
    {
        if ($this->idCategoryNode === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE);
        }

        return $this->idCategoryNode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCategory
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkParentCategoryNode
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkParentCategoryNode()
    {
        return $this->fkParentCategoryNode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentCategoryNode
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkParentCategoryNodeOrFail()
    {
        if ($this->fkParentCategoryNode === null) {
            $this->throwNullValueException(static::FK_PARENT_CATEGORY_NODE);
        }

        return $this->fkParentCategoryNode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isMain
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @module 
     *
     * @param boolean|null $isMain
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsMainOrFail()
    {
        if ($this->isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->isMain;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isRoot
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    /**
     * @module 
     *
     * @param boolean|null $isRoot
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsRootOrFail()
    {
        if ($this->isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->isRoot;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $nodeOrder
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
     * @module 
     *
     * @return integer|null
     */
    public function getNodeOrder()
    {
        return $this->nodeOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $nodeOrder
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNodeOrderOrFail()
    {
        if ($this->nodeOrder === null) {
            $this->throwNullValueException(static::NODE_ORDER);
        }

        return $this->nodeOrder;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null $parentCategoryNode
     *
     * @return $this
     */
    public function setParentCategoryNode(SpyCategoryNodeEntityTransfer $parentCategoryNode = null)
    {
        $this->parentCategoryNode = $parentCategoryNode;
        $this->modifiedProperties[self::PARENT_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    public function getParentCategoryNode()
    {
        return $this->parentCategoryNode;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer $parentCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentCategoryNodeOrFail(SpyCategoryNodeEntityTransfer $parentCategoryNode)
    {
        return $this->setParentCategoryNode($parentCategoryNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer
     */
    public function getParentCategoryNodeOrFail()
    {
        if ($this->parentCategoryNode === null) {
            $this->throwNullValueException(static::PARENT_CATEGORY_NODE);
        }

        return $this->parentCategoryNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentCategoryNode()
    {
        $this->assertPropertyIsSet(self::PARENT_CATEGORY_NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null $category
     *
     * @return $this
     */
    public function setCategory(SpyCategoryEntityTransfer $category = null)
    {
        $this->category = $category;
        $this->modifiedProperties[self::CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryOrFail(SpyCategoryEntityTransfer $category)
    {
        return $this->setCategory($category);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer
     */
    public function getCategoryOrFail()
    {
        if ($this->category === null) {
            $this->throwNullValueException(static::CATEGORY);
        }

        return $this->category;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[] $spyUrls
     *
     * @return $this
     */
    public function setSpyUrls(ArrayObject $spyUrls)
    {
        $this->spyUrls = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    public function getSpyUrls()
    {
        return $this->spyUrls;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrls
     *
     * @return $this
     */
    public function addSpyUrls(SpyUrlEntityTransfer $spyUrls)
    {
        $this->spyUrls[] = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrls()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_URLS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer[] $spyCategoryNodes
     *
     * @return $this
     */
    public function setSpyCategoryNodes(ArrayObject $spyCategoryNodes)
    {
        $this->spyCategoryNodes = $spyCategoryNodes;
        $this->modifiedProperties[self::SPY_CATEGORY_NODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer[]
     */
    public function getSpyCategoryNodes()
    {
        return $this->spyCategoryNodes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer $spyCategoryNodes
     *
     * @return $this
     */
    public function addSpyCategoryNodes(SpyCategoryNodeEntityTransfer $spyCategoryNodes)
    {
        $this->spyCategoryNodes[] = $spyCategoryNodes;
        $this->modifiedProperties[self::SPY_CATEGORY_NODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryNodes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_NODES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer[] $spyCategoryClosureTables
     *
     * @return $this
     */
    public function setSpyCategoryClosureTables(ArrayObject $spyCategoryClosureTables)
    {
        $this->spyCategoryClosureTables = $spyCategoryClosureTables;
        $this->modifiedProperties[self::SPY_CATEGORY_CLOSURE_TABLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer[]
     */
    public function getSpyCategoryClosureTables()
    {
        return $this->spyCategoryClosureTables;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryClosureTableEntityTransfer $spyCategoryClosureTables
     *
     * @return $this
     */
    public function addSpyCategoryClosureTables(SpyCategoryClosureTableEntityTransfer $spyCategoryClosureTables)
    {
        $this->spyCategoryClosureTables[] = $spyCategoryClosureTables;
        $this->modifiedProperties[self::SPY_CATEGORY_CLOSURE_TABLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryClosureTables()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_CLOSURE_TABLES);

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
                case 'fkCategory':
                case 'fkParentCategoryNode':
                case 'isMain':
                case 'isRoot':
                case 'nodeOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parentCategoryNode':
                case 'category':
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
                case 'spyUrls':
                case 'spyCategoryNodes':
                case 'spyCategoryClosureTables':
                case 'spyCategoryClosureTables':
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
                case 'idCategoryNode':
                case 'fkCategory':
                case 'fkParentCategoryNode':
                case 'isMain':
                case 'isRoot':
                case 'nodeOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentCategoryNode':
                case 'category':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyUrls':
                case 'spyCategoryNodes':
                case 'spyCategoryClosureTables':
                case 'spyCategoryClosureTables':
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
                case 'fkCategory':
                case 'fkParentCategoryNode':
                case 'isMain':
                case 'isRoot':
                case 'nodeOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentCategoryNode':
                case 'category':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyUrls':
                case 'spyCategoryNodes':
                case 'spyCategoryClosureTables':
                case 'spyCategoryClosureTables':
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
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
        $this->spyCategoryNodes = $this->spyCategoryNodes ?: new ArrayObject();
        $this->spyCategoryClosureTables = $this->spyCategoryClosureTables ?: new ArrayObject();
        $this->spyCategoryClosureTables = $this->spyCategoryClosureTables ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode,
            'fkCategory' => $this->fkCategory,
            'fkParentCategoryNode' => $this->fkParentCategoryNode,
            'isMain' => $this->isMain,
            'isRoot' => $this->isRoot,
            'nodeOrder' => $this->nodeOrder,
            'parentCategoryNode' => $this->parentCategoryNode,
            'category' => $this->category,
            'spyUrls' => $this->spyUrls,
            'spyCategoryNodes' => $this->spyCategoryNodes,
            'spyCategoryClosureTables' => $this->spyCategoryClosureTables,
            'spyCategoryClosureTables' => $this->spyCategoryClosureTables,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode,
            'fk_category' => $this->fkCategory,
            'fk_parent_category_node' => $this->fkParentCategoryNode,
            'is_main' => $this->isMain,
            'is_root' => $this->isRoot,
            'node_order' => $this->nodeOrder,
            'parent_category_node' => $this->parentCategoryNode,
            'category' => $this->category,
            'spy_urls' => $this->spyUrls,
            'spy_category_nodes' => $this->spyCategoryNodes,
            'spy_category_closure_tables' => $this->spyCategoryClosureTables,
            'spy_category_closure_tables' => $this->spyCategoryClosureTables,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'fk_parent_category_node' => $this->fkParentCategoryNode instanceof AbstractTransfer ? $this->fkParentCategoryNode->toArray(true, false) : $this->fkParentCategoryNode,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'is_root' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, false) : $this->isRoot,
            'node_order' => $this->nodeOrder instanceof AbstractTransfer ? $this->nodeOrder->toArray(true, false) : $this->nodeOrder,
            'parent_category_node' => $this->parentCategoryNode instanceof AbstractTransfer ? $this->parentCategoryNode->toArray(true, false) : $this->parentCategoryNode,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, false) : $this->category,
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
            'spy_category_nodes' => $this->spyCategoryNodes instanceof AbstractTransfer ? $this->spyCategoryNodes->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryNodes, true, false),
            'spy_category_closure_tables' => $this->spyCategoryClosureTables instanceof AbstractTransfer ? $this->spyCategoryClosureTables->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryClosureTables, true, false),
            'spy_category_closure_tables' => $this->spyCategoryClosureTables instanceof AbstractTransfer ? $this->spyCategoryClosureTables->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryClosureTables, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'fkParentCategoryNode' => $this->fkParentCategoryNode instanceof AbstractTransfer ? $this->fkParentCategoryNode->toArray(true, true) : $this->fkParentCategoryNode,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'isRoot' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, true) : $this->isRoot,
            'nodeOrder' => $this->nodeOrder instanceof AbstractTransfer ? $this->nodeOrder->toArray(true, true) : $this->nodeOrder,
            'parentCategoryNode' => $this->parentCategoryNode instanceof AbstractTransfer ? $this->parentCategoryNode->toArray(true, true) : $this->parentCategoryNode,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, true) : $this->category,
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
            'spyCategoryNodes' => $this->spyCategoryNodes instanceof AbstractTransfer ? $this->spyCategoryNodes->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryNodes, true, true),
            'spyCategoryClosureTables' => $this->spyCategoryClosureTables instanceof AbstractTransfer ? $this->spyCategoryClosureTables->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryClosureTables, true, true),
            'spyCategoryClosureTables' => $this->spyCategoryClosureTables instanceof AbstractTransfer ? $this->spyCategoryClosureTables->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryClosureTables, true, true),
        ];
    }
}
