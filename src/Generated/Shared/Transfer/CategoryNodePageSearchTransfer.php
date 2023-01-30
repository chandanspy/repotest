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
class CategoryNodePageSearchTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @var string
     */
    public const NODE = 'node';

    /**
     * @var string
     */
    public const DATA = 'data';

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
     * @var \Generated\Shared\Transfer\NodeTransfer|null
     */
    protected $node;

    /**
     * @var array
     */
    protected $data = [];

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
        'node' => 'node',
        'Node' => 'node',
        'data' => 'data',
        'Data' => 'data',
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
        self::NODE => [
            'type' => 'Generated\Shared\Transfer\NodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data',
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
     *
     * @return int|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
     *
     * @param \Generated\Shared\Transfer\NodeTransfer|null $node
     *
     * @return $this
     */
    public function setNode(NodeTransfer $node = null)
    {
        $this->node = $node;
        $this->modifiedProperties[self::NODE] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch
     *
     * @return \Generated\Shared\Transfer\NodeTransfer|null
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @module CategoryPageSearch
     *
     * @param \Generated\Shared\Transfer\NodeTransfer $node
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeOrFail(NodeTransfer $node)
    {
        return $this->setNode($node);
    }

    /**
     * @module CategoryPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NodeTransfer
     */
    public function getNodeOrFail()
    {
        if ($this->node === null) {
            $this->throwNullValueException(static::NODE);
        }

        return $this->node;
    }

    /**
     * @module CategoryPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNode()
    {
        $this->assertPropertyIsSet(self::NODE);

        return $this;
    }

    /**
     * @module CategoryPageSearch
     *
     * @param array|null $data
     *
     * @return $this
     */
    public function setData(array $data = null)
    {
        if ($data === null) {
            $data = [];
        }

        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module CategoryPageSearch
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
     * @module CategoryPageSearch
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
                case 'data':
                case 'locale':
                case 'store':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'node':
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
                case 'idCategoryNode':
                case 'data':
                case 'locale':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'node':
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
                case 'idCategoryNode':
                case 'data':
                case 'locale':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'node':
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
            'idCategoryNode' => $this->idCategoryNode,
            'data' => $this->data,
            'locale' => $this->locale,
            'store' => $this->store,
            'node' => $this->node,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode,
            'data' => $this->data,
            'locale' => $this->locale,
            'store' => $this->store,
            'node' => $this->node,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'node' => $this->node instanceof AbstractTransfer ? $this->node->toArray(true, false) : $this->node,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'node' => $this->node instanceof AbstractTransfer ? $this->node->toArray(true, true) : $this->node,
        ];
    }
}
