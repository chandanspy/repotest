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
class RestCategoryNodeSearchResultAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NODE_ID = 'nodeId';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DOC_COUNT = 'docCount';

    /**
     * @var string
     */
    public const CHILDREN = 'children';

    /**
     * @var int|null
     */
    protected $nodeId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $docCount;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[]
     */
    protected $children;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'node_id' => 'nodeId',
        'nodeId' => 'nodeId',
        'NodeId' => 'nodeId',
        'name' => 'name',
        'Name' => 'name',
        'doc_count' => 'docCount',
        'docCount' => 'docCount',
        'DocCount' => 'docCount',
        'children' => 'children',
        'Children' => 'children',
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
        self::DOC_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'doc_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHILDREN => [
            'type' => 'Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer',
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
    ];

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @return int|null
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @param int|null $docCount
     *
     * @return $this
     */
    public function setDocCount($docCount)
    {
        $this->docCount = $docCount;
        $this->modifiedProperties[self::DOC_COUNT] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return int|null
     */
    public function getDocCount()
    {
        return $this->docCount;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param int|null $docCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDocCountOrFail($docCount)
    {
        if ($docCount === null) {
            $this->throwNullValueException(static::DOC_COUNT);
        }

        return $this->setDocCount($docCount);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDocCountOrFail()
    {
        if ($this->docCount === null) {
            $this->throwNullValueException(static::DOC_COUNT);
        }

        return $this->docCount;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDocCount()
    {
        $this->assertPropertyIsSet(self::DOC_COUNT);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[] $children
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
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer $children
     *
     * @return $this
     */
    public function addChildren(RestCategoryNodeSearchResultAttributesTransfer $children)
    {
        $this->children[] = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
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
                case 'name':
                case 'docCount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'children':
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
                case 'name':
                case 'docCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
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
                case 'name':
                case 'docCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'nodeId' => $this->nodeId,
            'name' => $this->name,
            'docCount' => $this->docCount,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'node_id' => $this->nodeId,
            'name' => $this->name,
            'doc_count' => $this->docCount,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'node_id' => $this->nodeId instanceof AbstractTransfer ? $this->nodeId->toArray(true, false) : $this->nodeId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'doc_count' => $this->docCount instanceof AbstractTransfer ? $this->docCount->toArray(true, false) : $this->docCount,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, false) : $this->addValuesToCollection($this->children, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'nodeId' => $this->nodeId instanceof AbstractTransfer ? $this->nodeId->toArray(true, true) : $this->nodeId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'docCount' => $this->docCount instanceof AbstractTransfer ? $this->docCount->toArray(true, true) : $this->docCount,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, true) : $this->addValuesToCollection($this->children, true, true),
        ];
    }
}
