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
class CategoryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CATEGORY_NODE = 'categoryNode';

    /**
     * @var string
     */
    public const CATEGORY_KEY = 'categoryKey';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const EXTRA_PARENTS = 'extraParents';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const IS_IN_MENU = 'isInMenu';

    /**
     * @var string
     */
    public const IS_CLICKABLE = 'isClickable';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var string
     */
    public const PARENT_CATEGORY_NODE = 'parentCategoryNode';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const CATEGORY_TEMPLATE = 'categoryTemplate';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const IMAGE_NAME = 'imageName';

    /**
     * @var string
     */
    public const CATEGORY_IMAGE_NAME = 'categoryImageName';

    /**
     * @var string
     */
    public const META_TITLE = 'metaTitle';

    /**
     * @var string
     */
    public const META_DESCRIPTION = 'metaDescription';

    /**
     * @var string
     */
    public const META_KEYWORDS = 'metaKeywords';

    /**
     * @var string
     */
    public const NODE_COLLECTION = 'nodeCollection';

    /**
     * @var string
     */
    public const FK_CATEGORY_TEMPLATE = 'fkCategoryTemplate';

    /**
     * @var string
     */
    public const ID_CMS_BLOCKS = 'idCmsBlocks';

    /**
     * @var \Generated\Shared\Transfer\NodeTransfer|null
     */
    protected $categoryNode;

    /**
     * @var string|null
     */
    protected $categoryKey;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\NodeTransfer[]
     */
    protected $extraParents;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer[]
     */
    protected $localizedAttributes;

    /**
     * @var bool|null
     */
    protected $isInMenu;

    /**
     * @var bool|null
     */
    protected $isClickable;

    /**
     * @var bool|null
     */
    protected $isSearchable;

    /**
     * @var \Generated\Shared\Transfer\NodeTransfer|null
     */
    protected $parentCategoryNode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetTransfer[]
     */
    protected $imageSets;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var \Generated\Shared\Transfer\CategoryTemplateTransfer|null
     */
    protected $categoryTemplate;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $imageName;

    /**
     * @var string|null
     */
    protected $categoryImageName;

    /**
     * @var string|null
     */
    protected $metaTitle;

    /**
     * @var string|null
     */
    protected $metaDescription;

    /**
     * @var string|null
     */
    protected $metaKeywords;

    /**
     * @var \Generated\Shared\Transfer\NodeCollectionTransfer|null
     */
    protected $nodeCollection;

    /**
     * @var int|null
     */
    protected $fkCategoryTemplate;

    /**
     * @var array
     */
    protected $idCmsBlocks = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'category_node' => 'categoryNode',
        'categoryNode' => 'categoryNode',
        'CategoryNode' => 'categoryNode',
        'category_key' => 'categoryKey',
        'categoryKey' => 'categoryKey',
        'CategoryKey' => 'categoryKey',
        'name' => 'name',
        'Name' => 'name',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'extra_parents' => 'extraParents',
        'extraParents' => 'extraParents',
        'ExtraParents' => 'extraParents',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'is_in_menu' => 'isInMenu',
        'isInMenu' => 'isInMenu',
        'IsInMenu' => 'isInMenu',
        'is_clickable' => 'isClickable',
        'isClickable' => 'isClickable',
        'IsClickable' => 'isClickable',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
        'parent_category_node' => 'parentCategoryNode',
        'parentCategoryNode' => 'parentCategoryNode',
        'ParentCategoryNode' => 'parentCategoryNode',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'category_template' => 'categoryTemplate',
        'categoryTemplate' => 'categoryTemplate',
        'CategoryTemplate' => 'categoryTemplate',
        'url' => 'url',
        'Url' => 'url',
        'image_name' => 'imageName',
        'imageName' => 'imageName',
        'ImageName' => 'imageName',
        'category_image_name' => 'categoryImageName',
        'categoryImageName' => 'categoryImageName',
        'CategoryImageName' => 'categoryImageName',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
        'node_collection' => 'nodeCollection',
        'nodeCollection' => 'nodeCollection',
        'NodeCollection' => 'nodeCollection',
        'fk_category_template' => 'fkCategoryTemplate',
        'fkCategoryTemplate' => 'fkCategoryTemplate',
        'FkCategoryTemplate' => 'fkCategoryTemplate',
        'id_cms_blocks' => 'idCmsBlocks',
        'idCmsBlocks' => 'idCmsBlocks',
        'IdCmsBlocks' => 'idCmsBlocks',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CATEGORY_NODE => [
            'type' => 'Generated\Shared\Transfer\NodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'category_key',
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
        self::EXTRA_PARENTS => [
            'type' => 'Generated\Shared\Transfer\NodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'extra_parents',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::IS_IN_MENU => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_in_menu',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_CLICKABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_clickable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SEARCHABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_searchable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT_CATEGORY_NODE => [
            'type' => 'Generated\Shared\Transfer\NodeTransfer',
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
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\CategoryImageSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => true,
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
        self::CATEGORY_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\CategoryTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'image_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_IMAGE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'category_image_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_KEYWORDS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_keywords',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NODE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\NodeCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'node_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_category_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CMS_BLOCKS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_cms_blocks',
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
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|Category|ProductCategory
     *
     * @param \Generated\Shared\Transfer\NodeTransfer|null $categoryNode
     *
     * @return $this
     */
    public function setCategoryNode(NodeTransfer $categoryNode = null)
    {
        $this->categoryNode = $categoryNode;
        $this->modifiedProperties[self::CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|Category|ProductCategory
     *
     * @return \Generated\Shared\Transfer\NodeTransfer|null
     */
    public function getCategoryNode()
    {
        return $this->categoryNode;
    }

    /**
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|Category|ProductCategory
     *
     * @param \Generated\Shared\Transfer\NodeTransfer $categoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryNodeOrFail(NodeTransfer $categoryNode)
    {
        return $this->setCategoryNode($categoryNode);
    }

    /**
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|Category|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NodeTransfer
     */
    public function getCategoryNodeOrFail()
    {
        if ($this->categoryNode === null) {
            $this->throwNullValueException(static::CATEGORY_NODE);
        }

        return $this->categoryNode;
    }

    /**
     * @module CategoryDiscountConnector|CategoryGui|CategoryNavigationConnector|Category|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNode()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @param string|null $categoryKey
     *
     * @return $this
     */
    public function setCategoryKey($categoryKey)
    {
        $this->categoryKey = $categoryKey;
        $this->modifiedProperties[self::CATEGORY_KEY] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @return string|null
     */
    public function getCategoryKey()
    {
        return $this->categoryKey;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @param string|null $categoryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryKeyOrFail($categoryKey)
    {
        if ($categoryKey === null) {
            $this->throwNullValueException(static::CATEGORY_KEY);
        }

        return $this->setCategoryKey($categoryKey);
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCategoryKeyOrFail()
    {
        if ($this->categoryKey === null) {
            $this->throwNullValueException(static::CATEGORY_KEY);
        }

        return $this->categoryKey;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryKey()
    {
        $this->assertPropertyIsSet(self::CATEGORY_KEY);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductListGui
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
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductListGui
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductListGui
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
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductListGui
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
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductListGui
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
     * @module CategoryGui|CategoryImage|CategoryStorage|Category|CmsBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductCategory|ProductListGui
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
     * @module CategoryGui|CategoryImage|CategoryStorage|Category|CmsBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductCategory|ProductListGui
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module CategoryGui|CategoryImage|CategoryStorage|Category|CmsBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductCategory|ProductListGui
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
     * @module CategoryGui|CategoryImage|CategoryStorage|Category|CmsBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductCategory|ProductListGui
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
     * @module CategoryGui|CategoryImage|CategoryStorage|Category|CmsBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryGui|ProductCategoryFilterGui|ProductCategory|ProductListGui
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
     * @module CategoryGui|Category
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\NodeTransfer[] $extraParents
     *
     * @return $this
     */
    public function setExtraParents(ArrayObject $extraParents)
    {
        $this->extraParents = $extraParents;
        $this->modifiedProperties[self::EXTRA_PARENTS] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\NodeTransfer[]
     */
    public function getExtraParents()
    {
        return $this->extraParents;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param \Generated\Shared\Transfer\NodeTransfer $extraParent
     *
     * @return $this
     */
    public function addExtraParent(NodeTransfer $extraParent)
    {
        $this->extraParents[] = $extraParent;
        $this->modifiedProperties[self::EXTRA_PARENTS] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExtraParents()
    {
        $this->assertCollectionPropertyIsSet(self::EXTRA_PARENTS);

        return $this;
    }

    /**
     * @module CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryGui|CategoryNavigationConnector|CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryGui|CategoryPageSearch|CategoryStorage|Category|ProductCategory
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
     * @module CategoryGui|CategoryPageSearch|CategoryStorage|Category|ProductCategory
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryLocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module CategoryGui|CategoryPageSearch|CategoryStorage|Category|ProductCategory
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
     * @module CategoryGui|CategoryPageSearch|CategoryStorage|Category|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param bool|null $isInMenu
     *
     * @return $this
     */
    public function setIsInMenu($isInMenu)
    {
        $this->isInMenu = $isInMenu;
        $this->modifiedProperties[self::IS_IN_MENU] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @return bool|null
     */
    public function getIsInMenu()
    {
        return $this->isInMenu;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param bool|null $isInMenu
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsInMenuOrFail($isInMenu)
    {
        if ($isInMenu === null) {
            $this->throwNullValueException(static::IS_IN_MENU);
        }

        return $this->setIsInMenu($isInMenu);
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsInMenuOrFail()
    {
        if ($this->isInMenu === null) {
            $this->throwNullValueException(static::IS_IN_MENU);
        }

        return $this->isInMenu;
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsInMenu()
    {
        $this->assertPropertyIsSet(self::IS_IN_MENU);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param bool|null $isClickable
     *
     * @return $this
     */
    public function setIsClickable($isClickable)
    {
        $this->isClickable = $isClickable;
        $this->modifiedProperties[self::IS_CLICKABLE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @return bool|null
     */
    public function getIsClickable()
    {
        return $this->isClickable;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param bool|null $isClickable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsClickableOrFail($isClickable)
    {
        if ($isClickable === null) {
            $this->throwNullValueException(static::IS_CLICKABLE);
        }

        return $this->setIsClickable($isClickable);
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsClickableOrFail()
    {
        if ($this->isClickable === null) {
            $this->throwNullValueException(static::IS_CLICKABLE);
        }

        return $this->isClickable;
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsClickable()
    {
        $this->assertPropertyIsSet(self::IS_CLICKABLE);

        return $this;
    }

    /**
     * @module CategoryGui|CategoryPageSearch|Category
     *
     * @param bool|null $isSearchable
     *
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
        $this->modifiedProperties[self::IS_SEARCHABLE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|CategoryPageSearch|Category
     *
     * @return bool|null
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @module CategoryGui|CategoryPageSearch|Category
     *
     * @param bool|null $isSearchable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSearchableOrFail($isSearchable)
    {
        if ($isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->setIsSearchable($isSearchable);
    }

    /**
     * @module CategoryGui|CategoryPageSearch|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSearchableOrFail()
    {
        if ($this->isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->isSearchable;
    }

    /**
     * @module CategoryGui|CategoryPageSearch|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSearchable()
    {
        $this->assertPropertyIsSet(self::IS_SEARCHABLE);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param \Generated\Shared\Transfer\NodeTransfer|null $parentCategoryNode
     *
     * @return $this
     */
    public function setParentCategoryNode(NodeTransfer $parentCategoryNode = null)
    {
        $this->parentCategoryNode = $parentCategoryNode;
        $this->modifiedProperties[self::PARENT_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @return \Generated\Shared\Transfer\NodeTransfer|null
     */
    public function getParentCategoryNode()
    {
        return $this->parentCategoryNode;
    }

    /**
     * @module CategoryGui|Category
     *
     * @param \Generated\Shared\Transfer\NodeTransfer $parentCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentCategoryNodeOrFail(NodeTransfer $parentCategoryNode)
    {
        return $this->setParentCategoryNode($parentCategoryNode);
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NodeTransfer
     */
    public function getParentCategoryNodeOrFail()
    {
        if ($this->parentCategoryNode === null) {
            $this->throwNullValueException(static::PARENT_CATEGORY_NODE);
        }

        return $this->parentCategoryNode;
    }

    /**
     * @module CategoryGui|Category
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
     * @module CategoryImage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetTransfer[] $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module CategoryImage
     *
     * @param \Generated\Shared\Transfer\CategoryImageSetTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(CategoryImageSetTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module CategoryImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\CategoryTemplateTransfer|null $categoryTemplate
     *
     * @return $this
     */
    public function setCategoryTemplate(CategoryTemplateTransfer $categoryTemplate = null)
    {
        $this->categoryTemplate = $categoryTemplate;
        $this->modifiedProperties[self::CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @return \Generated\Shared\Transfer\CategoryTemplateTransfer|null
     */
    public function getCategoryTemplate()
    {
        return $this->categoryTemplate;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\CategoryTemplateTransfer $categoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryTemplateOrFail(CategoryTemplateTransfer $categoryTemplate)
    {
        return $this->setCategoryTemplate($categoryTemplate);
    }

    /**
     * @module CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CategoryTemplateTransfer
     */
    public function getCategoryTemplateOrFail()
    {
        if ($this->categoryTemplate === null) {
            $this->throwNullValueException(static::CATEGORY_TEMPLATE);
        }

        return $this->categoryTemplate;
    }

    /**
     * @module CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryTemplate()
    {
        $this->assertPropertyIsSet(self::CATEGORY_TEMPLATE);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module Category
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
        $this->modifiedProperties[self::IMAGE_NAME] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @module Category
     *
     * @param string|null $imageName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImageNameOrFail($imageName)
    {
        if ($imageName === null) {
            $this->throwNullValueException(static::IMAGE_NAME);
        }

        return $this->setImageName($imageName);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImageNameOrFail()
    {
        if ($this->imageName === null) {
            $this->throwNullValueException(static::IMAGE_NAME);
        }

        return $this->imageName;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageName()
    {
        $this->assertPropertyIsSet(self::IMAGE_NAME);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $categoryImageName
     *
     * @return $this
     */
    public function setCategoryImageName($categoryImageName)
    {
        $this->categoryImageName = $categoryImageName;
        $this->modifiedProperties[self::CATEGORY_IMAGE_NAME] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getCategoryImageName()
    {
        return $this->categoryImageName;
    }

    /**
     * @module Category
     *
     * @param string|null $categoryImageName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryImageNameOrFail($categoryImageName)
    {
        if ($categoryImageName === null) {
            $this->throwNullValueException(static::CATEGORY_IMAGE_NAME);
        }

        return $this->setCategoryImageName($categoryImageName);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCategoryImageNameOrFail()
    {
        if ($this->categoryImageName === null) {
            $this->throwNullValueException(static::CATEGORY_IMAGE_NAME);
        }

        return $this->categoryImageName;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryImageName()
    {
        $this->assertPropertyIsSet(self::CATEGORY_IMAGE_NAME);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $metaTitle
     *
     * @return $this
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
        $this->modifiedProperties[self::META_TITLE] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module Category
     *
     * @param string|null $metaTitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaTitleOrFail($metaTitle)
    {
        if ($metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->setMetaTitle($metaTitle);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaTitleOrFail()
    {
        if ($this->metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->metaTitle;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaTitle()
    {
        $this->assertPropertyIsSet(self::META_TITLE);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $metaDescription
     *
     * @return $this
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        $this->modifiedProperties[self::META_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module Category
     *
     * @param string|null $metaDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaDescriptionOrFail($metaDescription)
    {
        if ($metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->setMetaDescription($metaDescription);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaDescriptionOrFail()
    {
        if ($this->metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->metaDescription;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaDescription()
    {
        $this->assertPropertyIsSet(self::META_DESCRIPTION);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string|null $metaKeywords
     *
     * @return $this
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        $this->modifiedProperties[self::META_KEYWORDS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module Category
     *
     * @param string|null $metaKeywords
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaKeywordsOrFail($metaKeywords)
    {
        if ($metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->setMetaKeywords($metaKeywords);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaKeywordsOrFail()
    {
        if ($this->metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->metaKeywords;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaKeywords()
    {
        $this->assertPropertyIsSet(self::META_KEYWORDS);

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui|ProductCategoryStorage|ProductListGui
     *
     * @param \Generated\Shared\Transfer\NodeCollectionTransfer|null $nodeCollection
     *
     * @return $this
     */
    public function setNodeCollection(NodeCollectionTransfer $nodeCollection = null)
    {
        $this->nodeCollection = $nodeCollection;
        $this->modifiedProperties[self::NODE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Category|ProductCategoryFilterGui|ProductCategoryStorage|ProductListGui
     *
     * @return \Generated\Shared\Transfer\NodeCollectionTransfer|null
     */
    public function getNodeCollection()
    {
        return $this->nodeCollection;
    }

    /**
     * @module Category|ProductCategoryFilterGui|ProductCategoryStorage|ProductListGui
     *
     * @param \Generated\Shared\Transfer\NodeCollectionTransfer $nodeCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeCollectionOrFail(NodeCollectionTransfer $nodeCollection)
    {
        return $this->setNodeCollection($nodeCollection);
    }

    /**
     * @module Category|ProductCategoryFilterGui|ProductCategoryStorage|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NodeCollectionTransfer
     */
    public function getNodeCollectionOrFail()
    {
        if ($this->nodeCollection === null) {
            $this->throwNullValueException(static::NODE_COLLECTION);
        }

        return $this->nodeCollection;
    }

    /**
     * @module Category|ProductCategoryFilterGui|ProductCategoryStorage|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeCollection()
    {
        $this->assertPropertyIsSet(self::NODE_COLLECTION);

        return $this;
    }

    /**
     * @module Category|CmsBlockCategoryConnector
     *
     * @param int|null $fkCategoryTemplate
     *
     * @return $this
     */
    public function setFkCategoryTemplate($fkCategoryTemplate)
    {
        $this->fkCategoryTemplate = $fkCategoryTemplate;
        $this->modifiedProperties[self::FK_CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module Category|CmsBlockCategoryConnector
     *
     * @return int|null
     */
    public function getFkCategoryTemplate()
    {
        return $this->fkCategoryTemplate;
    }

    /**
     * @module Category|CmsBlockCategoryConnector
     *
     * @param int|null $fkCategoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryTemplateOrFail($fkCategoryTemplate)
    {
        if ($fkCategoryTemplate === null) {
            $this->throwNullValueException(static::FK_CATEGORY_TEMPLATE);
        }

        return $this->setFkCategoryTemplate($fkCategoryTemplate);
    }

    /**
     * @module Category|CmsBlockCategoryConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCategoryTemplateOrFail()
    {
        if ($this->fkCategoryTemplate === null) {
            $this->throwNullValueException(static::FK_CATEGORY_TEMPLATE);
        }

        return $this->fkCategoryTemplate;
    }

    /**
     * @module Category|CmsBlockCategoryConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @param array|null $idCmsBlocks
     *
     * @return $this
     */
    public function setIdCmsBlocks(array $idCmsBlocks = null)
    {
        if ($idCmsBlocks === null) {
            $idCmsBlocks = [];
        }

        $this->idCmsBlocks = $idCmsBlocks;
        $this->modifiedProperties[self::ID_CMS_BLOCKS] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @return array
     */
    public function getIdCmsBlocks()
    {
        return $this->idCmsBlocks;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @param mixed $idCmsBlocks
     *
     * @return $this
     */
    public function addIdCmsBlocks($idCmsBlocks)
    {
        $this->idCmsBlocks[] = $idCmsBlocks;
        $this->modifiedProperties[self::ID_CMS_BLOCKS] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlocks()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCKS);

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
                case 'categoryKey':
                case 'name':
                case 'idCategory':
                case 'isActive':
                case 'isInMenu':
                case 'isClickable':
                case 'isSearchable':
                case 'url':
                case 'imageName':
                case 'categoryImageName':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'fkCategoryTemplate':
                case 'idCmsBlocks':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'categoryNode':
                case 'parentCategoryNode':
                case 'storeRelation':
                case 'categoryTemplate':
                case 'nodeCollection':
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
                case 'extraParents':
                case 'localizedAttributes':
                case 'imageSets':
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
                case 'categoryKey':
                case 'name':
                case 'idCategory':
                case 'isActive':
                case 'isInMenu':
                case 'isClickable':
                case 'isSearchable':
                case 'url':
                case 'imageName':
                case 'categoryImageName':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'fkCategoryTemplate':
                case 'idCmsBlocks':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryNode':
                case 'parentCategoryNode':
                case 'storeRelation':
                case 'categoryTemplate':
                case 'nodeCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'extraParents':
                case 'localizedAttributes':
                case 'imageSets':
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
                case 'categoryKey':
                case 'name':
                case 'idCategory':
                case 'isActive':
                case 'isInMenu':
                case 'isClickable':
                case 'isSearchable':
                case 'url':
                case 'imageName':
                case 'categoryImageName':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                case 'fkCategoryTemplate':
                case 'idCmsBlocks':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryNode':
                case 'parentCategoryNode':
                case 'storeRelation':
                case 'categoryTemplate':
                case 'nodeCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'extraParents':
                case 'localizedAttributes':
                case 'imageSets':
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
        $this->extraParents = $this->extraParents ?: new ArrayObject();
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'categoryKey' => $this->categoryKey,
            'name' => $this->name,
            'idCategory' => $this->idCategory,
            'isActive' => $this->isActive,
            'isInMenu' => $this->isInMenu,
            'isClickable' => $this->isClickable,
            'isSearchable' => $this->isSearchable,
            'url' => $this->url,
            'imageName' => $this->imageName,
            'categoryImageName' => $this->categoryImageName,
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => $this->metaKeywords,
            'fkCategoryTemplate' => $this->fkCategoryTemplate,
            'idCmsBlocks' => $this->idCmsBlocks,
            'categoryNode' => $this->categoryNode,
            'parentCategoryNode' => $this->parentCategoryNode,
            'storeRelation' => $this->storeRelation,
            'categoryTemplate' => $this->categoryTemplate,
            'nodeCollection' => $this->nodeCollection,
            'extraParents' => $this->extraParents,
            'localizedAttributes' => $this->localizedAttributes,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'category_key' => $this->categoryKey,
            'name' => $this->name,
            'id_category' => $this->idCategory,
            'is_active' => $this->isActive,
            'is_in_menu' => $this->isInMenu,
            'is_clickable' => $this->isClickable,
            'is_searchable' => $this->isSearchable,
            'url' => $this->url,
            'image_name' => $this->imageName,
            'category_image_name' => $this->categoryImageName,
            'meta_title' => $this->metaTitle,
            'meta_description' => $this->metaDescription,
            'meta_keywords' => $this->metaKeywords,
            'fk_category_template' => $this->fkCategoryTemplate,
            'id_cms_blocks' => $this->idCmsBlocks,
            'category_node' => $this->categoryNode,
            'parent_category_node' => $this->parentCategoryNode,
            'store_relation' => $this->storeRelation,
            'category_template' => $this->categoryTemplate,
            'node_collection' => $this->nodeCollection,
            'extra_parents' => $this->extraParents,
            'localized_attributes' => $this->localizedAttributes,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'category_key' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, false) : $this->categoryKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_in_menu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, false) : $this->isInMenu,
            'is_clickable' => $this->isClickable instanceof AbstractTransfer ? $this->isClickable->toArray(true, false) : $this->isClickable,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'image_name' => $this->imageName instanceof AbstractTransfer ? $this->imageName->toArray(true, false) : $this->imageName,
            'category_image_name' => $this->categoryImageName instanceof AbstractTransfer ? $this->categoryImageName->toArray(true, false) : $this->categoryImageName,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'fk_category_template' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, false) : $this->fkCategoryTemplate,
            'id_cms_blocks' => $this->idCmsBlocks instanceof AbstractTransfer ? $this->idCmsBlocks->toArray(true, false) : $this->idCmsBlocks,
            'category_node' => $this->categoryNode instanceof AbstractTransfer ? $this->categoryNode->toArray(true, false) : $this->categoryNode,
            'parent_category_node' => $this->parentCategoryNode instanceof AbstractTransfer ? $this->parentCategoryNode->toArray(true, false) : $this->parentCategoryNode,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'category_template' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, false) : $this->categoryTemplate,
            'node_collection' => $this->nodeCollection instanceof AbstractTransfer ? $this->nodeCollection->toArray(true, false) : $this->nodeCollection,
            'extra_parents' => $this->extraParents instanceof AbstractTransfer ? $this->extraParents->toArray(true, false) : $this->addValuesToCollection($this->extraParents, true, false),
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'categoryKey' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, true) : $this->categoryKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isInMenu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, true) : $this->isInMenu,
            'isClickable' => $this->isClickable instanceof AbstractTransfer ? $this->isClickable->toArray(true, true) : $this->isClickable,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'imageName' => $this->imageName instanceof AbstractTransfer ? $this->imageName->toArray(true, true) : $this->imageName,
            'categoryImageName' => $this->categoryImageName instanceof AbstractTransfer ? $this->categoryImageName->toArray(true, true) : $this->categoryImageName,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'fkCategoryTemplate' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, true) : $this->fkCategoryTemplate,
            'idCmsBlocks' => $this->idCmsBlocks instanceof AbstractTransfer ? $this->idCmsBlocks->toArray(true, true) : $this->idCmsBlocks,
            'categoryNode' => $this->categoryNode instanceof AbstractTransfer ? $this->categoryNode->toArray(true, true) : $this->categoryNode,
            'parentCategoryNode' => $this->parentCategoryNode instanceof AbstractTransfer ? $this->parentCategoryNode->toArray(true, true) : $this->parentCategoryNode,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'categoryTemplate' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, true) : $this->categoryTemplate,
            'nodeCollection' => $this->nodeCollection instanceof AbstractTransfer ? $this->nodeCollection->toArray(true, true) : $this->nodeCollection,
            'extraParents' => $this->extraParents instanceof AbstractTransfer ? $this->extraParents->toArray(true, true) : $this->addValuesToCollection($this->extraParents, true, true),
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
