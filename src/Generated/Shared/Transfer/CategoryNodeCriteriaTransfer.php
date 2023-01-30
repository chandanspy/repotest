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
class CategoryNodeCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CATEGORY_NODE_IDS = 'categoryNodeIds';

    /**
     * @var string
     */
    public const CATEGORY_IDS = 'categoryIds';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const WITH_RELATIONS = 'withRelations';

    /**
     * @var string
     */
    public const CATEGORY_TEMPLATE_IDS = 'categoryTemplateIds';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const IS_IN_MENU = 'isInMenu';

    /**
     * @var string
     */
    public const IS_ROOT = 'isRoot';

    /**
     * @var string
     */
    public const IS_MAIN = 'isMain';

    /**
     * @var int[]
     */
    protected $categoryNodeIds = [];

    /**
     * @var int[]
     */
    protected $categoryIds = [];

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $withRelations;

    /**
     * @var int[]
     */
    protected $categoryTemplateIds = [];

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var bool|null
     */
    protected $isInMenu;

    /**
     * @var bool|null
     */
    protected $isRoot;

    /**
     * @var bool|null
     */
    protected $isMain;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'category_node_ids' => 'categoryNodeIds',
        'categoryNodeIds' => 'categoryNodeIds',
        'CategoryNodeIds' => 'categoryNodeIds',
        'category_ids' => 'categoryIds',
        'categoryIds' => 'categoryIds',
        'CategoryIds' => 'categoryIds',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'with_relations' => 'withRelations',
        'withRelations' => 'withRelations',
        'WithRelations' => 'withRelations',
        'category_template_ids' => 'categoryTemplateIds',
        'categoryTemplateIds' => 'categoryTemplateIds',
        'CategoryTemplateIds' => 'categoryTemplateIds',
        'filter' => 'filter',
        'Filter' => 'filter',
        'is_in_menu' => 'isInMenu',
        'isInMenu' => 'isInMenu',
        'IsInMenu' => 'isInMenu',
        'is_root' => 'isRoot',
        'isRoot' => 'isRoot',
        'IsRoot' => 'isRoot',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CATEGORY_NODE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_node_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_ids',
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
        self::WITH_RELATIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_relations',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_TEMPLATE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_template_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
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
    ];

    /**
     * @module CategoryDiscountConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage
     *
     * @param int[]|null $categoryNodeIds
     *
     * @return $this
     */
    public function setCategoryNodeIds(array $categoryNodeIds = null)
    {
        if ($categoryNodeIds === null) {
            $categoryNodeIds = [];
        }

        $this->categoryNodeIds = $categoryNodeIds;
        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage
     *
     * @return int[]
     */
    public function getCategoryNodeIds()
    {
        return $this->categoryNodeIds;
    }

    /**
     * @module CategoryDiscountConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage
     *
     * @param int $idCategoryNode
     *
     * @return $this
     */
    public function addIdCategoryNode($idCategoryNode)
    {
        $this->categoryNodeIds[] = $idCategoryNode;
        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|CategoryPageSearch|CategoryStorage|Category|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNodeIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE_IDS);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param int[]|null $categoryIds
     *
     * @return $this
     */
    public function setCategoryIds(array $categoryIds = null)
    {
        if ($categoryIds === null) {
            $categoryIds = [];
        }

        $this->categoryIds = $categoryIds;
        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return int[]
     */
    public function getCategoryIds()
    {
        return $this->categoryIds;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param int $idCategory
     *
     * @return $this
     */
    public function addIdCategory($idCategory)
    {
        $this->categoryIds[] = $idCategory;
        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_IDS);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
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
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param bool|null $withRelations
     *
     * @return $this
     */
    public function setWithRelations($withRelations)
    {
        $this->withRelations = $withRelations;
        $this->modifiedProperties[self::WITH_RELATIONS] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return bool|null
     */
    public function getWithRelations()
    {
        return $this->withRelations;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param bool|null $withRelations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithRelationsOrFail($withRelations)
    {
        if ($withRelations === null) {
            $this->throwNullValueException(static::WITH_RELATIONS);
        }

        return $this->setWithRelations($withRelations);
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithRelationsOrFail()
    {
        if ($this->withRelations === null) {
            $this->throwNullValueException(static::WITH_RELATIONS);
        }

        return $this->withRelations;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithRelations()
    {
        $this->assertPropertyIsSet(self::WITH_RELATIONS);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param int[]|null $categoryTemplateIds
     *
     * @return $this
     */
    public function setCategoryTemplateIds(array $categoryTemplateIds = null)
    {
        if ($categoryTemplateIds === null) {
            $categoryTemplateIds = [];
        }

        $this->categoryTemplateIds = $categoryTemplateIds;
        $this->modifiedProperties[self::CATEGORY_TEMPLATE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return int[]
     */
    public function getCategoryTemplateIds()
    {
        return $this->categoryTemplateIds;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param int $idCategoryTemplate
     *
     * @return $this
     */
    public function addIdCategoryTemplate($idCategoryTemplate)
    {
        $this->categoryTemplateIds[] = $idCategoryTemplate;
        $this->modifiedProperties[self::CATEGORY_TEMPLATE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryTemplateIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_TEMPLATE_IDS);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
     *
     * @return bool|null
     */
    public function getIsInMenu()
    {
        return $this->isInMenu;
    }

    /**
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
     *
     * @return bool|null
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    /**
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
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
     * @module CategoryStorage|Category
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
                case 'categoryNodeIds':
                case 'categoryIds':
                case 'isActive':
                case 'withRelations':
                case 'categoryTemplateIds':
                case 'isInMenu':
                case 'isRoot':
                case 'isMain':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'categoryNodeIds':
                case 'categoryIds':
                case 'isActive':
                case 'withRelations':
                case 'categoryTemplateIds':
                case 'isInMenu':
                case 'isRoot':
                case 'isMain':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'categoryNodeIds':
                case 'categoryIds':
                case 'isActive':
                case 'withRelations':
                case 'categoryTemplateIds':
                case 'isInMenu':
                case 'isRoot':
                case 'isMain':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'categoryNodeIds' => $this->categoryNodeIds,
            'categoryIds' => $this->categoryIds,
            'isActive' => $this->isActive,
            'withRelations' => $this->withRelations,
            'categoryTemplateIds' => $this->categoryTemplateIds,
            'isInMenu' => $this->isInMenu,
            'isRoot' => $this->isRoot,
            'isMain' => $this->isMain,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'category_node_ids' => $this->categoryNodeIds,
            'category_ids' => $this->categoryIds,
            'is_active' => $this->isActive,
            'with_relations' => $this->withRelations,
            'category_template_ids' => $this->categoryTemplateIds,
            'is_in_menu' => $this->isInMenu,
            'is_root' => $this->isRoot,
            'is_main' => $this->isMain,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'category_node_ids' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, false) : $this->categoryNodeIds,
            'category_ids' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, false) : $this->categoryIds,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'with_relations' => $this->withRelations instanceof AbstractTransfer ? $this->withRelations->toArray(true, false) : $this->withRelations,
            'category_template_ids' => $this->categoryTemplateIds instanceof AbstractTransfer ? $this->categoryTemplateIds->toArray(true, false) : $this->categoryTemplateIds,
            'is_in_menu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, false) : $this->isInMenu,
            'is_root' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, false) : $this->isRoot,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'categoryNodeIds' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, true) : $this->categoryNodeIds,
            'categoryIds' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, true) : $this->categoryIds,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'withRelations' => $this->withRelations instanceof AbstractTransfer ? $this->withRelations->toArray(true, true) : $this->withRelations,
            'categoryTemplateIds' => $this->categoryTemplateIds instanceof AbstractTransfer ? $this->categoryTemplateIds->toArray(true, true) : $this->categoryTemplateIds,
            'isInMenu' => $this->isInMenu instanceof AbstractTransfer ? $this->isInMenu->toArray(true, true) : $this->isInMenu,
            'isRoot' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, true) : $this->isRoot,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
