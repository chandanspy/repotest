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
class NavigationTreeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NODES = 'nodes';

    /**
     * @var string
     */
    public const NAVIGATION = 'navigation';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[]
     */
    protected $nodes;

    /**
     * @var \Generated\Shared\Transfer\NavigationTransfer|null
     */
    protected $navigation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'nodes' => 'nodes',
        'Nodes' => 'nodes',
        'navigation' => 'navigation',
        'Navigation' => 'navigation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NODES => [
            'type' => 'Generated\Shared\Transfer\NavigationTreeNodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'nodes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAVIGATION => [
            'type' => 'Generated\Shared\Transfer\NavigationTransfer',
            'type_shim' => null,
            'name_underscore' => 'navigation',
            'is_collection' => false,
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
     * @param \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[] $nodes
     *
     * @return $this
     */
    public function setNodes(ArrayObject $nodes)
    {
        $this->nodes = $nodes;
        $this->modifiedProperties[self::NODES] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\NavigationTreeNodeTransfer[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationTreeNodeTransfer $node
     *
     * @return $this
     */
    public function addNode(NavigationTreeNodeTransfer $node)
    {
        $this->nodes[] = $node;
        $this->modifiedProperties[self::NODES] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodes()
    {
        $this->assertCollectionPropertyIsSet(self::NODES);

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer|null $navigation
     *
     * @return $this
     */
    public function setNavigation(NavigationTransfer $navigation = null)
    {
        $this->navigation = $navigation;
        $this->modifiedProperties[self::NAVIGATION] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @return \Generated\Shared\Transfer\NavigationTransfer|null
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationTransfer $navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNavigationOrFail(NavigationTransfer $navigation)
    {
        return $this->setNavigation($navigation);
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NavigationTransfer
     */
    public function getNavigationOrFail()
    {
        if ($this->navigation === null) {
            $this->throwNullValueException(static::NAVIGATION);
        }

        return $this->navigation;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNavigation()
    {
        $this->assertPropertyIsSet(self::NAVIGATION);

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
                case 'navigation':
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
                case 'nodes':
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
                case 'navigation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'nodes':
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
                case 'navigation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'nodes':
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
        $this->nodes = $this->nodes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'navigation' => $this->navigation,
            'nodes' => $this->nodes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'navigation' => $this->navigation,
            'nodes' => $this->nodes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'navigation' => $this->navigation instanceof AbstractTransfer ? $this->navigation->toArray(true, false) : $this->navigation,
            'nodes' => $this->nodes instanceof AbstractTransfer ? $this->nodes->toArray(true, false) : $this->addValuesToCollection($this->nodes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'navigation' => $this->navigation instanceof AbstractTransfer ? $this->navigation->toArray(true, true) : $this->navigation,
            'nodes' => $this->nodes instanceof AbstractTransfer ? $this->nodes->toArray(true, true) : $this->addValuesToCollection($this->nodes, true, true),
        ];
    }
}
