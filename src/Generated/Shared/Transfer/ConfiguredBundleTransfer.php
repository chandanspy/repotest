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
class ConfiguredBundleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const TEMPLATE = 'template';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null
     */
    protected $template;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'note' => 'note',
        'Note' => 'note',
        'template' => 'template',
        'Template' => 'template',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'items' => 'items',
        'Items' => 'items',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'template',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
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
     * @module ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param string|null $groupKey
     *
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;
        $this->modifiedProperties[self::GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param string|null $groupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyOrFail($groupKey)
    {
        if ($groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->setGroupKey($groupKey);
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyOrFail()
    {
        if ($this->groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->groupKey;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKey()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY);

        return $this;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundleNote
     *
     * @param string|null $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        $this->modifiedProperties[self::NOTE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundleNote
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundleNote
     *
     * @param string|null $note
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoteOrFail($note)
    {
        if ($note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->setNote($note);
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundleNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNoteOrFail()
    {
        if ($this->note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->note;
    }

    /**
     * @module ConfigurableBundleNoteWidget|ConfigurableBundleNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNote()
    {
        $this->assertPropertyIsSet(self::NOTE);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null $template
     *
     * @return $this
     */
    public function setTemplate(ConfigurableBundleTemplateTransfer $template = null)
    {
        $this->template = $template;
        $this->modifiedProperties[self::TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer|null
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer $template
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateOrFail(ConfigurableBundleTemplateTransfer $template)
    {
        return $this->setTemplate($template);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateTransfer
     */
    public function getTemplateOrFail()
    {
        if ($this->template === null) {
            $this->throwNullValueException(static::TEMPLATE);
        }

        return $this->template;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|ConfigurableBundlesRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplate()
    {
        $this->assertPropertyIsSet(self::TEMPLATE);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
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
     * @module ConfigurableBundleWidget|ConfigurableBundleCart
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleWidget|ConfigurableBundleCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

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
                case 'groupKey':
                case 'note':
                case 'quantity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'template':
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
                case 'items':
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
                case 'groupKey':
                case 'note':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'template':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
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
                case 'groupKey':
                case 'note':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'template':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
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
        $this->items = $this->items ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'groupKey' => $this->groupKey,
            'note' => $this->note,
            'quantity' => $this->quantity,
            'template' => $this->template,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'group_key' => $this->groupKey,
            'note' => $this->note,
            'quantity' => $this->quantity,
            'template' => $this->template,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'template' => $this->template instanceof AbstractTransfer ? $this->template->toArray(true, false) : $this->template,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'template' => $this->template instanceof AbstractTransfer ? $this->template->toArray(true, true) : $this->template,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
        ];
    }
}
