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
class CategoryNodeUrlPathCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const CATEGORY_NODE_DESCENDANT_IDS = 'categoryNodeDescendantIds';

    /**
     * @var string
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var string
     */
    public const EXCLUDE_ROOT_NODE = 'excludeRootNode';

    /**
     * @var string
     */
    public const ONLY_PARENTS = 'onlyParents';

    /**
     * @var int|null
     */
    protected $idCategoryNode;

    /**
     * @var int[]
     */
    protected $categoryNodeDescendantIds = [];

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var bool|null
     */
    protected $excludeRootNode;

    /**
     * @var bool|null
     */
    protected $onlyParents;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'category_node_descendant_ids' => 'categoryNodeDescendantIds',
        'categoryNodeDescendantIds' => 'categoryNodeDescendantIds',
        'CategoryNodeDescendantIds' => 'categoryNodeDescendantIds',
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
        'exclude_root_node' => 'excludeRootNode',
        'excludeRootNode' => 'excludeRootNode',
        'ExcludeRootNode' => 'excludeRootNode',
        'only_parents' => 'onlyParents',
        'onlyParents' => 'onlyParents',
        'OnlyParents' => 'onlyParents',
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
        self::CATEGORY_NODE_DESCENDANT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_node_descendant_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::EXCLUDE_ROOT_NODE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'exclude_root_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ONLY_PARENTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'only_parents',
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
     * @param int[]|null $categoryNodeDescendantIds
     *
     * @return $this
     */
    public function setCategoryNodeDescendantIds(array $categoryNodeDescendantIds = null)
    {
        if ($categoryNodeDescendantIds === null) {
            $categoryNodeDescendantIds = [];
        }

        $this->categoryNodeDescendantIds = $categoryNodeDescendantIds;
        $this->modifiedProperties[self::CATEGORY_NODE_DESCENDANT_IDS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return int[]
     */
    public function getCategoryNodeDescendantIds()
    {
        return $this->categoryNodeDescendantIds;
    }

    /**
     * @module Category
     *
     * @param int $idCategoryNodeDescendant
     *
     * @return $this
     */
    public function addIdCategoryNodeDescendant($idCategoryNodeDescendant)
    {
        $this->categoryNodeDescendantIds[] = $idCategoryNodeDescendant;
        $this->modifiedProperties[self::CATEGORY_NODE_DESCENDANT_IDS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNodeDescendantIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE_DESCENDANT_IDS);

        return $this;
    }

    /**
     * @module Category
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
     * @module Category
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module Category
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
     * @module Category
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
     * @module Category
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
     * @module Category
     *
     * @param bool|null $excludeRootNode
     *
     * @return $this
     */
    public function setExcludeRootNode($excludeRootNode)
    {
        $this->excludeRootNode = $excludeRootNode;
        $this->modifiedProperties[self::EXCLUDE_ROOT_NODE] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getExcludeRootNode()
    {
        return $this->excludeRootNode;
    }

    /**
     * @module Category
     *
     * @param bool|null $excludeRootNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExcludeRootNodeOrFail($excludeRootNode)
    {
        if ($excludeRootNode === null) {
            $this->throwNullValueException(static::EXCLUDE_ROOT_NODE);
        }

        return $this->setExcludeRootNode($excludeRootNode);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getExcludeRootNodeOrFail()
    {
        if ($this->excludeRootNode === null) {
            $this->throwNullValueException(static::EXCLUDE_ROOT_NODE);
        }

        return $this->excludeRootNode;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExcludeRootNode()
    {
        $this->assertPropertyIsSet(self::EXCLUDE_ROOT_NODE);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $onlyParents
     *
     * @return $this
     */
    public function setOnlyParents($onlyParents)
    {
        $this->onlyParents = $onlyParents;
        $this->modifiedProperties[self::ONLY_PARENTS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getOnlyParents()
    {
        return $this->onlyParents;
    }

    /**
     * @module Category
     *
     * @param bool|null $onlyParents
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOnlyParentsOrFail($onlyParents)
    {
        if ($onlyParents === null) {
            $this->throwNullValueException(static::ONLY_PARENTS);
        }

        return $this->setOnlyParents($onlyParents);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getOnlyParentsOrFail()
    {
        if ($this->onlyParents === null) {
            $this->throwNullValueException(static::ONLY_PARENTS);
        }

        return $this->onlyParents;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOnlyParents()
    {
        $this->assertPropertyIsSet(self::ONLY_PARENTS);

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
                case 'categoryNodeDescendantIds':
                case 'idLocale':
                case 'excludeRootNode':
                case 'onlyParents':
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
                case 'idCategoryNode':
                case 'categoryNodeDescendantIds':
                case 'idLocale':
                case 'excludeRootNode':
                case 'onlyParents':
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
                case 'idCategoryNode':
                case 'categoryNodeDescendantIds':
                case 'idLocale':
                case 'excludeRootNode':
                case 'onlyParents':
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
            'idCategoryNode' => $this->idCategoryNode,
            'categoryNodeDescendantIds' => $this->categoryNodeDescendantIds,
            'idLocale' => $this->idLocale,
            'excludeRootNode' => $this->excludeRootNode,
            'onlyParents' => $this->onlyParents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode,
            'category_node_descendant_ids' => $this->categoryNodeDescendantIds,
            'id_locale' => $this->idLocale,
            'exclude_root_node' => $this->excludeRootNode,
            'only_parents' => $this->onlyParents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'category_node_descendant_ids' => $this->categoryNodeDescendantIds instanceof AbstractTransfer ? $this->categoryNodeDescendantIds->toArray(true, false) : $this->categoryNodeDescendantIds,
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
            'exclude_root_node' => $this->excludeRootNode instanceof AbstractTransfer ? $this->excludeRootNode->toArray(true, false) : $this->excludeRootNode,
            'only_parents' => $this->onlyParents instanceof AbstractTransfer ? $this->onlyParents->toArray(true, false) : $this->onlyParents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'categoryNodeDescendantIds' => $this->categoryNodeDescendantIds instanceof AbstractTransfer ? $this->categoryNodeDescendantIds->toArray(true, true) : $this->categoryNodeDescendantIds,
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
            'excludeRootNode' => $this->excludeRootNode instanceof AbstractTransfer ? $this->excludeRootNode->toArray(true, true) : $this->excludeRootNode,
            'onlyParents' => $this->onlyParents instanceof AbstractTransfer ? $this->onlyParents->toArray(true, true) : $this->onlyParents,
        ];
    }
}
