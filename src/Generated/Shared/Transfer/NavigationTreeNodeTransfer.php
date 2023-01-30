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
class NavigationTreeNodeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAVIGATION_NODE = 'navigationNode';

    /**
     * @var string
     */
    public const CHILDREN = 'children';

    /**
     * @var \Generated\Shared\Transfer\NavigationNodeTransfer|null
     */
    protected $navigationNode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[]
     */
    protected $children;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'navigation_node' => 'navigationNode',
        'navigationNode' => 'navigationNode',
        'NavigationNode' => 'navigationNode',
        'children' => 'children',
        'Children' => 'children',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAVIGATION_NODE => [
            'type' => 'Generated\Shared\Transfer\NavigationNodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'navigation_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHILDREN => [
            'type' => 'Generated\Shared\Transfer\NavigationTreeNodeTransfer',
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
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationNodeTransfer|null $navigationNode
     *
     * @return $this
     */
    public function setNavigationNode(NavigationNodeTransfer $navigationNode = null)
    {
        $this->navigationNode = $navigationNode;
        $this->modifiedProperties[self::NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @return \Generated\Shared\Transfer\NavigationNodeTransfer|null
     */
    public function getNavigationNode()
    {
        return $this->navigationNode;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationNodeTransfer $navigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNavigationNodeOrFail(NavigationNodeTransfer $navigationNode)
    {
        return $this->setNavigationNode($navigationNode);
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NavigationNodeTransfer
     */
    public function getNavigationNodeOrFail()
    {
        if ($this->navigationNode === null) {
            $this->throwNullValueException(static::NAVIGATION_NODE);
        }

        return $this->navigationNode;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNavigationNode()
    {
        $this->assertPropertyIsSet(self::NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[] $children
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
     * @module NavigationStorage|Navigation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationTreeNodeTransfer $child
     *
     * @return $this
     */
    public function addChild(NavigationTreeNodeTransfer $child)
    {
        $this->children[] = $child;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
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
                case 'navigationNode':
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
                case 'navigationNode':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'navigationNode':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'navigationNode' => $this->navigationNode,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'navigation_node' => $this->navigationNode,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'navigation_node' => $this->navigationNode instanceof AbstractTransfer ? $this->navigationNode->toArray(true, false) : $this->navigationNode,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, false) : $this->addValuesToCollection($this->children, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'navigationNode' => $this->navigationNode instanceof AbstractTransfer ? $this->navigationNode->toArray(true, true) : $this->navigationNode,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, true) : $this->addValuesToCollection($this->children, true, true),
        ];
    }
}
