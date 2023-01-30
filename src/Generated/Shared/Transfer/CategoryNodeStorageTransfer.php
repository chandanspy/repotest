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
class CategoryNodeStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NODE_ID = 'nodeId';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_CURRENT = 'isCurrent';

    /**
     * @var string
     */
    public const CHILDREN = 'children';

    /**
     * @var string
     */
    public const HAS_CHILDREN = 'hasChildren';

    /**
     * @var string
     */
    public const URL = 'url';

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
    public const IMAGE = 'image';

    /**
     * @var string
     */
    public const PARENTS = 'parents';

    /**
     * @var string
     */
    public const ORDER = 'order';

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
     * @var int|null
     */
    protected $nodeId;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isCurrent;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[]
     */
    protected $children;

    /**
     * @var bool|null
     */
    protected $hasChildren;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var string|null
     */
    protected $image;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[]
     */
    protected $parents;

    /**
     * @var int|null
     */
    protected $order;

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
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'node_id' => 'nodeId',
        'nodeId' => 'nodeId',
        'NodeId' => 'nodeId',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_current' => 'isCurrent',
        'isCurrent' => 'isCurrent',
        'IsCurrent' => 'isCurrent',
        'children' => 'children',
        'Children' => 'children',
        'has_children' => 'hasChildren',
        'hasChildren' => 'hasChildren',
        'HasChildren' => 'hasChildren',
        'url' => 'url',
        'Url' => 'url',
        'name' => 'name',
        'Name' => 'name',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'image' => 'image',
        'Image' => 'image',
        'parents' => 'parents',
        'Parents' => 'parents',
        'order' => 'order',
        'Order' => 'order',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NODE_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'node_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_path',
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
        self::IS_CURRENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_current',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHILDREN => [
            'type' => 'Generated\Shared\Transfer\CategoryNodeStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'children',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HAS_CHILDREN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'has_children',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::IMAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENTS => [
            'type' => 'Generated\Shared\Transfer\CategoryNodeStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'parents',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'order',
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
    ];

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param int|null $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;
        $this->modifiedProperties[self::NODE_ID] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @return int|null
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param int|null $nodeId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeIdOrFail($nodeId)
    {
        if ($nodeId === null) {
            $this->throwNullValueException(static::NODE_ID);
        }

        return $this->setNodeId($nodeId);
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNodeIdOrFail()
    {
        if ($this->nodeId === null) {
            $this->throwNullValueException(static::NODE_ID);
        }

        return $this->nodeId;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeId()
    {
        $this->assertPropertyIsSet(self::NODE_ID);

        return $this;
    }

    /**
     * @module CatalogPage
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module CatalogPage
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module CatalogPage
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param string|null $templatePath
     *
     * @return $this
     */
    public function setTemplatePath($templatePath)
    {
        $this->templatePath = $templatePath;
        $this->modifiedProperties[self::TEMPLATE_PATH] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param string|null $templatePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplatePathOrFail($templatePath)
    {
        if ($templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->setTemplatePath($templatePath);
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplatePathOrFail()
    {
        if ($this->templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->templatePath;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplatePath()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_PATH);

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage
     *
     * @param bool|null $isCurrent
     *
     * @return $this
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;
        $this->modifiedProperties[self::IS_CURRENT] = true;

        return $this;
    }

    /**
     * @module CatalogPage
     *
     * @return bool|null
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }

    /**
     * @module CatalogPage
     *
     * @param bool|null $isCurrent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCurrentOrFail($isCurrent)
    {
        if ($isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->setIsCurrent($isCurrent);
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsCurrentOrFail()
    {
        if ($this->isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->isCurrent;
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsCurrent()
    {
        $this->assertPropertyIsSet(self::IS_CURRENT);

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[] $children
     *
     * @return $this
     */
    public function setChildren(ArrayObject $children)
    {
        $this->children = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @param \Generated\Shared\Transfer\CategoryNodeStorageTransfer $children
     *
     * @return $this
     */
    public function addChildren(CategoryNodeStorageTransfer $children)
    {
        $this->children[] = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildren()
    {
        $this->assertCollectionPropertyIsSet(self::CHILDREN);

        return $this;
    }

    /**
     * @module CatalogPage
     *
     * @param bool|null $hasChildren
     *
     * @return $this
     */
    public function setHasChildren($hasChildren)
    {
        $this->hasChildren = $hasChildren;
        $this->modifiedProperties[self::HAS_CHILDREN] = true;

        return $this;
    }

    /**
     * @module CatalogPage
     *
     * @return bool|null
     */
    public function getHasChildren()
    {
        return $this->hasChildren;
    }

    /**
     * @module CatalogPage
     *
     * @param bool|null $hasChildren
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHasChildrenOrFail($hasChildren)
    {
        if ($hasChildren === null) {
            $this->throwNullValueException(static::HAS_CHILDREN);
        }

        return $this->setHasChildren($hasChildren);
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHasChildrenOrFail()
    {
        if ($this->hasChildren === null) {
            $this->throwNullValueException(static::HAS_CHILDREN);
        }

        return $this->hasChildren;
    }

    /**
     * @module CatalogPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHasChildren()
    {
        $this->assertPropertyIsSet(self::HAS_CHILDREN);

        return $this;
    }

    /**
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CatalogPage|CategoryStorage
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
     * @module CategoriesRestApi|CategoryStorage
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
     * @module CategoriesRestApi|CategoryStorage
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module CategoriesRestApi|CategoryStorage
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
     * @module CategoriesRestApi|CategoryStorage
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
     * @module CategoriesRestApi|CategoryStorage
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
     * @module CategoryStorage
     *
     * @param string|null $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        $this->modifiedProperties[self::IMAGE] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @module CategoryStorage
     *
     * @param string|null $image
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImageOrFail($image)
    {
        if ($image === null) {
            $this->throwNullValueException(static::IMAGE);
        }

        return $this->setImage($image);
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImageOrFail()
    {
        if ($this->image === null) {
            $this->throwNullValueException(static::IMAGE);
        }

        return $this->image;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImage()
    {
        $this->assertPropertyIsSet(self::IMAGE);

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[] $parents
     *
     * @return $this
     */
    public function setParents(ArrayObject $parents)
    {
        $this->parents = $parents;
        $this->modifiedProperties[self::PARENTS] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryNodeStorageTransfer[]
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @module CategoryStorage
     *
     * @param \Generated\Shared\Transfer\CategoryNodeStorageTransfer $parents
     *
     * @return $this
     */
    public function addParents(CategoryNodeStorageTransfer $parents)
    {
        $this->parents[] = $parents;
        $this->modifiedProperties[self::PARENTS] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParents()
    {
        $this->assertCollectionPropertyIsSet(self::PARENTS);

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @param int|null $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module CategoryStorage
     *
     * @param int|null $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail($order)
    {
        if ($order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->setOrder($order);
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

        return $this;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
                case 'nodeId':
                case 'quantity':
                case 'templatePath':
                case 'isActive':
                case 'isCurrent':
                case 'hasChildren':
                case 'url':
                case 'name':
                case 'idCategory':
                case 'image':
                case 'order':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'children':
                case 'parents':
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
                case 'nodeId':
                case 'quantity':
                case 'templatePath':
                case 'isActive':
                case 'isCurrent':
                case 'hasChildren':
                case 'url':
                case 'name':
                case 'idCategory':
                case 'image':
                case 'order':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
                case 'parents':
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
                case 'nodeId':
                case 'quantity':
                case 'templatePath':
                case 'isActive':
                case 'isCurrent':
                case 'hasChildren':
                case 'url':
                case 'name':
                case 'idCategory':
                case 'image':
                case 'order':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
                case 'parents':
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
        $this->children = $this->children ?: new ArrayObject();
        $this->parents = $this->parents ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'nodeId' => $this->nodeId,
            'quantity' => $this->quantity,
            'templatePath' => $this->templatePath,
            'isActive' => $this->isActive,
            'isCurrent' => $this->isCurrent,
            'hasChildren' => $this->hasChildren,
            'url' => $this->url,
            'name' => $this->name,
            'idCategory' => $this->idCategory,
            'image' => $this->image,
            'order' => $this->order,
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => $this->metaKeywords,
            'children' => $this->children,
            'parents' => $this->parents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'node_id' => $this->nodeId,
            'quantity' => $this->quantity,
            'template_path' => $this->templatePath,
            'is_active' => $this->isActive,
            'is_current' => $this->isCurrent,
            'has_children' => $this->hasChildren,
            'url' => $this->url,
            'name' => $this->name,
            'id_category' => $this->idCategory,
            'image' => $this->image,
            'order' => $this->order,
            'meta_title' => $this->metaTitle,
            'meta_description' => $this->metaDescription,
            'meta_keywords' => $this->metaKeywords,
            'children' => $this->children,
            'parents' => $this->parents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'node_id' => $this->nodeId instanceof AbstractTransfer ? $this->nodeId->toArray(true, false) : $this->nodeId,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_current' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, false) : $this->isCurrent,
            'has_children' => $this->hasChildren instanceof AbstractTransfer ? $this->hasChildren->toArray(true, false) : $this->hasChildren,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'image' => $this->image instanceof AbstractTransfer ? $this->image->toArray(true, false) : $this->image,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, false) : $this->addValuesToCollection($this->children, true, false),
            'parents' => $this->parents instanceof AbstractTransfer ? $this->parents->toArray(true, false) : $this->addValuesToCollection($this->parents, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'nodeId' => $this->nodeId instanceof AbstractTransfer ? $this->nodeId->toArray(true, true) : $this->nodeId,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isCurrent' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, true) : $this->isCurrent,
            'hasChildren' => $this->hasChildren instanceof AbstractTransfer ? $this->hasChildren->toArray(true, true) : $this->hasChildren,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'image' => $this->image instanceof AbstractTransfer ? $this->image->toArray(true, true) : $this->image,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, true) : $this->addValuesToCollection($this->children, true, true),
            'parents' => $this->parents instanceof AbstractTransfer ? $this->parents->toArray(true, true) : $this->addValuesToCollection($this->parents, true, true),
        ];
    }
}
