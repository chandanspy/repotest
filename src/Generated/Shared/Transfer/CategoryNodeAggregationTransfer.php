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
class CategoryNodeAggregationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const ID_CATEGORY_NODE_DESCENDANT = 'idCategoryNodeDescendant';

    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var int|null
     */
    protected $idCategoryNode;

    /**
     * @var int|null
     */
    protected $idCategoryNodeDescendant;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'id_category_node_descendant' => 'idCategoryNodeDescendant',
        'idCategoryNodeDescendant' => 'idCategoryNodeDescendant',
        'IdCategoryNodeDescendant' => 'idCategoryNodeDescendant',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'name' => 'name',
        'Name' => 'name',
        'url' => 'url',
        'Url' => 'url',
        'locale' => 'locale',
        'Locale' => 'locale',
        'store' => 'store',
        'Store' => 'store',
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
        self::ID_CATEGORY_NODE_DESCENDANT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category_node_descendant',
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
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @return int|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @param int|null $idCategoryNodeDescendant
     *
     * @return $this
     */
    public function setIdCategoryNodeDescendant($idCategoryNodeDescendant)
    {
        $this->idCategoryNodeDescendant = $idCategoryNodeDescendant;
        $this->modifiedProperties[self::ID_CATEGORY_NODE_DESCENDANT] = true;

        return $this;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @return int|null
     */
    public function getIdCategoryNodeDescendant()
    {
        return $this->idCategoryNodeDescendant;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @param int|null $idCategoryNodeDescendant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryNodeDescendantOrFail($idCategoryNodeDescendant)
    {
        if ($idCategoryNodeDescendant === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE_DESCENDANT);
        }

        return $this->setIdCategoryNodeDescendant($idCategoryNodeDescendant);
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryNodeDescendantOrFail()
    {
        if ($this->idCategoryNodeDescendant === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE_DESCENDANT);
        }

        return $this->idCategoryNodeDescendant;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryNodeDescendant()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_NODE_DESCENDANT);

        return $this;
    }

    /**
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
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
     * @module ProductCategoryStorage
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'idCategoryNodeDescendant':
                case 'idCategory':
                case 'name':
                case 'url':
                case 'locale':
                case 'store':
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
                case 'idCategoryNodeDescendant':
                case 'idCategory':
                case 'name':
                case 'url':
                case 'locale':
                case 'store':
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
                case 'idCategoryNodeDescendant':
                case 'idCategory':
                case 'name':
                case 'url':
                case 'locale':
                case 'store':
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
            'idCategoryNodeDescendant' => $this->idCategoryNodeDescendant,
            'idCategory' => $this->idCategory,
            'name' => $this->name,
            'url' => $this->url,
            'locale' => $this->locale,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode,
            'id_category_node_descendant' => $this->idCategoryNodeDescendant,
            'id_category' => $this->idCategory,
            'name' => $this->name,
            'url' => $this->url,
            'locale' => $this->locale,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'id_category_node_descendant' => $this->idCategoryNodeDescendant instanceof AbstractTransfer ? $this->idCategoryNodeDescendant->toArray(true, false) : $this->idCategoryNodeDescendant,
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'idCategoryNodeDescendant' => $this->idCategoryNodeDescendant instanceof AbstractTransfer ? $this->idCategoryNodeDescendant->toArray(true, true) : $this->idCategoryNodeDescendant,
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
