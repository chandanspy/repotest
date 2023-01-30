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
class SpyCategoryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const FK_CATEGORY_TEMPLATE = 'fkCategoryTemplate';

    /**
     * @var string
     */
    public const CATEGORY_KEY = 'categoryKey';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_CLICKABLE = 'isClickable';

    /**
     * @var string
     */
    public const IS_IN_MENU = 'isInMenu';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var string
     */
    public const CATEGORY_TEMPLATE = 'categoryTemplate';

    /**
     * @var string
     */
    public const SPY_PRODUCT_CATEGORY_FILTERS = 'spyProductCategoryFilters';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_CATEGORY_CONNECTORS = 'spyCmsBlockCategoryConnectors';

    /**
     * @var string
     */
    public const SPY_CATEGORY_IMAGE_SETS = 'spyCategoryImageSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST_CATEGORIES = 'spyProductListCategories';

    /**
     * @var string
     */
    public const SPY_PRODUCT_CATEGORIES = 'spyProductCategories';

    /**
     * @var string
     */
    public const SPY_CATEGORY_ATTRIBUTES = 'spyCategoryAttributes';

    /**
     * @var string
     */
    public const SPY_CATEGORY_NODES = 'spyCategoryNodes';

    /**
     * @var string
     */
    public const SPY_CATEGORY_STORES = 'spyCategoryStores';

    /**
     * @var integer|null
     */
    protected $idCategory;

    /**
     * @var integer|null
     */
    protected $fkCategoryTemplate;

    /**
     * @var string|null
     */
    protected $categoryKey;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isClickable;

    /**
     * @var boolean|null
     */
    protected $isInMenu;

    /**
     * @var boolean|null
     */
    protected $isSearchable;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null
     */
    protected $categoryTemplate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryFilterEntityTransfer[]
     */
    protected $spyProductCategoryFilters;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    protected $spyCmsBlockCategoryConnectors;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[]
     */
    protected $spyCategoryImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[]
     */
    protected $spyProductListCategories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[]
     */
    protected $spyProductCategories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[]
     */
    protected $spyCategoryAttributes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer[]
     */
    protected $spyCategoryNodes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer[]
     */
    protected $spyCategoryStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'fk_category_template' => 'fkCategoryTemplate',
        'fkCategoryTemplate' => 'fkCategoryTemplate',
        'FkCategoryTemplate' => 'fkCategoryTemplate',
        'category_key' => 'categoryKey',
        'categoryKey' => 'categoryKey',
        'CategoryKey' => 'categoryKey',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_clickable' => 'isClickable',
        'isClickable' => 'isClickable',
        'IsClickable' => 'isClickable',
        'is_in_menu' => 'isInMenu',
        'isInMenu' => 'isInMenu',
        'IsInMenu' => 'isInMenu',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
        'category_template' => 'categoryTemplate',
        'categoryTemplate' => 'categoryTemplate',
        'CategoryTemplate' => 'categoryTemplate',
        'spy_product_category_filters' => 'spyProductCategoryFilters',
        'spyProductCategoryFilters' => 'spyProductCategoryFilters',
        'SpyProductCategoryFilters' => 'spyProductCategoryFilters',
        'spy_cms_block_category_connectors' => 'spyCmsBlockCategoryConnectors',
        'spyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'SpyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'spy_category_image_sets' => 'spyCategoryImageSets',
        'spyCategoryImageSets' => 'spyCategoryImageSets',
        'SpyCategoryImageSets' => 'spyCategoryImageSets',
        'spy_product_list_categories' => 'spyProductListCategories',
        'spyProductListCategories' => 'spyProductListCategories',
        'SpyProductListCategories' => 'spyProductListCategories',
        'spy_product_categories' => 'spyProductCategories',
        'spyProductCategories' => 'spyProductCategories',
        'SpyProductCategories' => 'spyProductCategories',
        'spy_category_attributes' => 'spyCategoryAttributes',
        'spyCategoryAttributes' => 'spyCategoryAttributes',
        'SpyCategoryAttributes' => 'spyCategoryAttributes',
        'spy_category_nodes' => 'spyCategoryNodes',
        'spyCategoryNodes' => 'spyCategoryNodes',
        'SpyCategoryNodes' => 'spyCategoryNodes',
        'spy_category_stores' => 'spyCategoryStores',
        'spyCategoryStores' => 'spyCategoryStores',
        'SpyCategoryStores' => 'spyCategoryStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY => [
            'type' => 'integer',
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
        self::FK_CATEGORY_TEMPLATE => [
            'type' => 'integer',
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
        self::IS_CLICKABLE => [
            'type' => 'boolean',
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
        self::IS_IN_MENU => [
            'type' => 'boolean',
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
        self::IS_SEARCHABLE => [
            'type' => 'boolean',
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
        self::CATEGORY_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer',
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
        self::SPY_PRODUCT_CATEGORY_FILTERS => [
            'type' => 'Generated\Shared\Transfer\SpyProductCategoryFilterEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_category_filters',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_category_connectors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST_CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list_categories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_categories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_attributes',
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
        self::SPY_CATEGORY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_stores',
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
    public static $entityNamespace = 'Orm\Zed\Category\Persistence\SpyCategory';


    /**
     * @module 
     *
     * @param integer|null $idCategory
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategory
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryOrFail()
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCategoryTemplate
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryTemplate()
    {
        return $this->fkCategoryTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryTemplate
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryTemplateOrFail()
    {
        if ($this->fkCategoryTemplate === null) {
            $this->throwNullValueException(static::FK_CATEGORY_TEMPLATE);
        }

        return $this->fkCategoryTemplate;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCategoryKey()
    {
        return $this->categoryKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param boolean|null $isClickable
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsClickable()
    {
        return $this->isClickable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isClickable
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsClickableOrFail()
    {
        if ($this->isClickable === null) {
            $this->throwNullValueException(static::IS_CLICKABLE);
        }

        return $this->isClickable;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isInMenu
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsInMenu()
    {
        return $this->isInMenu;
    }

    /**
     * @module 
     *
     * @param boolean|null $isInMenu
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsInMenuOrFail()
    {
        if ($this->isInMenu === null) {
            $this->throwNullValueException(static::IS_IN_MENU);
        }

        return $this->isInMenu;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isSearchable
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isSearchable
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsSearchableOrFail()
    {
        if ($this->isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->isSearchable;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null $categoryTemplate
     *
     * @return $this
     */
    public function setCategoryTemplate(SpyCategoryTemplateEntityTransfer $categoryTemplate = null)
    {
        $this->categoryTemplate = $categoryTemplate;
        $this->modifiedProperties[self::CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null
     */
    public function getCategoryTemplate()
    {
        return $this->categoryTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer $categoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryTemplateOrFail(SpyCategoryTemplateEntityTransfer $categoryTemplate)
    {
        return $this->setCategoryTemplate($categoryTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer
     */
    public function getCategoryTemplateOrFail()
    {
        if ($this->categoryTemplate === null) {
            $this->throwNullValueException(static::CATEGORY_TEMPLATE);
        }

        return $this->categoryTemplate;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryFilterEntityTransfer[] $spyProductCategoryFilters
     *
     * @return $this
     */
    public function setSpyProductCategoryFilters(ArrayObject $spyProductCategoryFilters)
    {
        $this->spyProductCategoryFilters = $spyProductCategoryFilters;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORY_FILTERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryFilterEntityTransfer[]
     */
    public function getSpyProductCategoryFilters()
    {
        return $this->spyProductCategoryFilters;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductCategoryFilterEntityTransfer $spyProductCategoryFilters
     *
     * @return $this
     */
    public function addSpyProductCategoryFilters(SpyProductCategoryFilterEntityTransfer $spyProductCategoryFilters)
    {
        $this->spyProductCategoryFilters[] = $spyProductCategoryFilters;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORY_FILTERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductCategoryFilters()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_CATEGORY_FILTERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[] $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function setSpyCmsBlockCategoryConnectors(ArrayObject $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    public function getSpyCmsBlockCategoryConnectors()
    {
        return $this->spyCmsBlockCategoryConnectors;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function addSpyCmsBlockCategoryConnectors(SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors[] = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockCategoryConnectors()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[] $spyCategoryImageSets
     *
     * @return $this
     */
    public function setSpyCategoryImageSets(ArrayObject $spyCategoryImageSets)
    {
        $this->spyCategoryImageSets = $spyCategoryImageSets;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[]
     */
    public function getSpyCategoryImageSets()
    {
        return $this->spyCategoryImageSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer $spyCategoryImageSets
     *
     * @return $this
     */
    public function addSpyCategoryImageSets(SpyCategoryImageSetEntityTransfer $spyCategoryImageSets)
    {
        $this->spyCategoryImageSets[] = $spyCategoryImageSets;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_IMAGE_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[] $spyProductListCategories
     *
     * @return $this
     */
    public function setSpyProductListCategories(ArrayObject $spyProductListCategories)
    {
        $this->spyProductListCategories = $spyProductListCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[]
     */
    public function getSpyProductListCategories()
    {
        return $this->spyProductListCategories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer $spyProductListCategories
     *
     * @return $this
     */
    public function addSpyProductListCategories(SpyProductListCategoryEntityTransfer $spyProductListCategories)
    {
        $this->spyProductListCategories[] = $spyProductListCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductListCategories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LIST_CATEGORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[] $spyProductCategories
     *
     * @return $this
     */
    public function setSpyProductCategories(ArrayObject $spyProductCategories)
    {
        $this->spyProductCategories = $spyProductCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductCategoryEntityTransfer[]
     */
    public function getSpyProductCategories()
    {
        return $this->spyProductCategories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductCategoryEntityTransfer $spyProductCategories
     *
     * @return $this
     */
    public function addSpyProductCategories(SpyProductCategoryEntityTransfer $spyProductCategories)
    {
        $this->spyProductCategories[] = $spyProductCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductCategories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_CATEGORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[] $spyCategoryAttributes
     *
     * @return $this
     */
    public function setSpyCategoryAttributes(ArrayObject $spyCategoryAttributes)
    {
        $this->spyCategoryAttributes = $spyCategoryAttributes;
        $this->modifiedProperties[self::SPY_CATEGORY_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[]
     */
    public function getSpyCategoryAttributes()
    {
        return $this->spyCategoryAttributes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer $spyCategoryAttributes
     *
     * @return $this
     */
    public function addSpyCategoryAttributes(SpyCategoryAttributeEntityTransfer $spyCategoryAttributes)
    {
        $this->spyCategoryAttributes[] = $spyCategoryAttributes;
        $this->modifiedProperties[self::SPY_CATEGORY_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_ATTRIBUTES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer[] $spyCategoryStores
     *
     * @return $this
     */
    public function setSpyCategoryStores(ArrayObject $spyCategoryStores)
    {
        $this->spyCategoryStores = $spyCategoryStores;
        $this->modifiedProperties[self::SPY_CATEGORY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer[]
     */
    public function getSpyCategoryStores()
    {
        return $this->spyCategoryStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryStoreEntityTransfer $spyCategoryStores
     *
     * @return $this
     */
    public function addSpyCategoryStores(SpyCategoryStoreEntityTransfer $spyCategoryStores)
    {
        $this->spyCategoryStores[] = $spyCategoryStores;
        $this->modifiedProperties[self::SPY_CATEGORY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_STORES);

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
                case 'idCategory':
                case 'fkCategoryTemplate':
                case 'categoryKey':
                case 'isActive':
                case 'isClickable':
                case 'isInMenu':
                case 'isSearchable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'categoryTemplate':
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
                case 'spyProductCategoryFilters':
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategoryImageSets':
                case 'spyProductListCategories':
                case 'spyProductCategories':
                case 'spyCategoryAttributes':
                case 'spyCategoryNodes':
                case 'spyCategoryStores':
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
                case 'idCategory':
                case 'fkCategoryTemplate':
                case 'categoryKey':
                case 'isActive':
                case 'isClickable':
                case 'isInMenu':
                case 'isSearchable':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductCategoryFilters':
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategoryImageSets':
                case 'spyProductListCategories':
                case 'spyProductCategories':
                case 'spyCategoryAttributes':
                case 'spyCategoryNodes':
                case 'spyCategoryStores':
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
                case 'idCategory':
                case 'fkCategoryTemplate':
                case 'categoryKey':
                case 'isActive':
                case 'isClickable':
                case 'isInMenu':
                case 'isSearchable':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductCategoryFilters':
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategoryImageSets':
                case 'spyProductListCategories':
                case 'spyProductCategories':
                case 'spyCategoryAttributes':
                case 'spyCategoryNodes':
                case 'spyCategoryStores':
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
        $this->spyProductCategoryFilters = $this->spyProductCategoryFilters ?: new ArrayObject();
        $this->spyCmsBlockCategoryConnectors = $this->spyCmsBlockCategoryConnectors ?: new ArrayObject();
        $this->spyCategoryImageSets = $this->spyCategoryImageSets ?: new ArrayObject();
        $this->spyProductListCategories = $this->spyProductListCategories ?: new ArrayObject();
        $this->spyProductCategories = $this->spyProductCategories ?: new ArrayObject();
        $this->spyCategoryAttributes = $this->spyCategoryAttributes ?: new ArrayObject();
        $this->spyCategoryNodes = $this->spyCategoryNodes ?: new ArrayObject();
        $this->spyCategoryStores = $this->spyCategoryStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory,
            'fkCategoryTemplate' => $this->fkCategoryTemplate,
            'categoryKey' => $this->categoryKey,
            'isActive' => $this->isActive,
            'isClickable' => $this->isClickable,
            'isInMenu' => $this->isInMenu,
            'isSearchable' => $this->isSearchable,
            'categoryTemplate' => $this->categoryTemplate,
            'spyProductCategoryFilters' => $this->spyProductCategoryFilters,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors,
            'spyCategoryImageSets' => $this->spyCategoryImageSets,
            'spyProductListCategories' => $this->spyProductListCategories,
            'spyProductCategories' => $this->spyProductCategories,
            'spyCategoryAttributes' => $this->spyCategoryAttributes,
            'spyCategoryNodes' => $this->spyCategoryNodes,
            'spyCategoryStores' => $this->spyCategoryStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory,
            'fk_category_template' => $this->fkCategoryTemplate,
            'category_key' => $this->categoryKey,
            'is_active' => $this->isActive,
            'is_clickable' => $this->isClickable,
            'is_in_menu' => $this->isInMenu,
            'is_searchable' => $this->isSearchable,
            'category_template' => $this->categoryTemplate,
            'spy_product_category_filters' => $this->spyProductCategoryFilters,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors,
            'spy_category_image_sets' => $this->spyCategoryImageSets,
            'spy_product_list_categories' => $this->spyProductListCategories,
            'spy_product_categories' => $this->spyProductCategories,
            'spy_category_attributes' => $this->spyCategoryAttributes,
            'spy_category_nodes' => $this->spyCategoryNodes,
            'spy_category_stores' => $this->spyCategoryStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'fk_category_template' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, false) : $this->fkCategoryTemplate,
            'category_key' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, false) : $this->categoryKey,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_clickable' => $this->isClickable instanceof AbstractTransfer ? $this->isClickable->toArray(true, false) : $this->isClickable,
            'is_in_menu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, false) : $this->isInMenu,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
            'category_template' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, false) : $this->categoryTemplate,
            'spy_product_category_filters' => $this->spyProductCategoryFilters instanceof AbstractTransfer ? $this->spyProductCategoryFilters->toArray(true, false) : $this->addValuesToCollection($this->spyProductCategoryFilters, true, false),
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, false),
            'spy_category_image_sets' => $this->spyCategoryImageSets instanceof AbstractTransfer ? $this->spyCategoryImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryImageSets, true, false),
            'spy_product_list_categories' => $this->spyProductListCategories instanceof AbstractTransfer ? $this->spyProductListCategories->toArray(true, false) : $this->addValuesToCollection($this->spyProductListCategories, true, false),
            'spy_product_categories' => $this->spyProductCategories instanceof AbstractTransfer ? $this->spyProductCategories->toArray(true, false) : $this->addValuesToCollection($this->spyProductCategories, true, false),
            'spy_category_attributes' => $this->spyCategoryAttributes instanceof AbstractTransfer ? $this->spyCategoryAttributes->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryAttributes, true, false),
            'spy_category_nodes' => $this->spyCategoryNodes instanceof AbstractTransfer ? $this->spyCategoryNodes->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryNodes, true, false),
            'spy_category_stores' => $this->spyCategoryStores instanceof AbstractTransfer ? $this->spyCategoryStores->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'fkCategoryTemplate' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, true) : $this->fkCategoryTemplate,
            'categoryKey' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, true) : $this->categoryKey,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isClickable' => $this->isClickable instanceof AbstractTransfer ? $this->isClickable->toArray(true, true) : $this->isClickable,
            'isInMenu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, true) : $this->isInMenu,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
            'categoryTemplate' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, true) : $this->categoryTemplate,
            'spyProductCategoryFilters' => $this->spyProductCategoryFilters instanceof AbstractTransfer ? $this->spyProductCategoryFilters->toArray(true, true) : $this->addValuesToCollection($this->spyProductCategoryFilters, true, true),
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, true),
            'spyCategoryImageSets' => $this->spyCategoryImageSets instanceof AbstractTransfer ? $this->spyCategoryImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryImageSets, true, true),
            'spyProductListCategories' => $this->spyProductListCategories instanceof AbstractTransfer ? $this->spyProductListCategories->toArray(true, true) : $this->addValuesToCollection($this->spyProductListCategories, true, true),
            'spyProductCategories' => $this->spyProductCategories instanceof AbstractTransfer ? $this->spyProductCategories->toArray(true, true) : $this->addValuesToCollection($this->spyProductCategories, true, true),
            'spyCategoryAttributes' => $this->spyCategoryAttributes instanceof AbstractTransfer ? $this->spyCategoryAttributes->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryAttributes, true, true),
            'spyCategoryNodes' => $this->spyCategoryNodes instanceof AbstractTransfer ? $this->spyCategoryNodes->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryNodes, true, true),
            'spyCategoryStores' => $this->spyCategoryStores instanceof AbstractTransfer ? $this->spyCategoryStores->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryStores, true, true),
        ];
    }
}
