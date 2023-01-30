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
class ProductBundleGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_BUNDLE = 'isBundle';

    /**
     * @var string
     */
    public const BUNDLE_ITEM = 'bundleItem';

    /**
     * @var string
     */
    public const GROUP_IMAGE = 'groupImage';

    /**
     * @var string
     */
    public const GROUP_ITEMS = 'groupItems';

    /**
     * @var string
     */
    public const ROW_COUNT = 'rowCount';

    /**
     * @var bool|null
     */
    protected $isBundle;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $bundleItem;

    /**
     * @var string|null
     */
    protected $groupImage;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $groupItems;

    /**
     * @var int|null
     */
    protected $rowCount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_bundle' => 'isBundle',
        'isBundle' => 'isBundle',
        'IsBundle' => 'isBundle',
        'bundle_item' => 'bundleItem',
        'bundleItem' => 'bundleItem',
        'BundleItem' => 'bundleItem',
        'group_image' => 'groupImage',
        'groupImage' => 'groupImage',
        'GroupImage' => 'groupImage',
        'group_items' => 'groupItems',
        'groupItems' => 'groupItems',
        'GroupItems' => 'groupItems',
        'row_count' => 'rowCount',
        'rowCount' => 'rowCount',
        'RowCount' => 'rowCount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_BUNDLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BUNDLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'bundle_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_IMAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_image',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'group_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROW_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'row_count',
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
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @param bool|null $isBundle
     *
     * @return $this
     */
    public function setIsBundle($isBundle)
    {
        $this->isBundle = $isBundle;
        $this->modifiedProperties[self::IS_BUNDLE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @return bool|null
     */
    public function getIsBundle()
    {
        return $this->isBundle;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @param bool|null $isBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsBundleOrFail($isBundle)
    {
        if ($isBundle === null) {
            $this->throwNullValueException(static::IS_BUNDLE);
        }

        return $this->setIsBundle($isBundle);
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsBundleOrFail()
    {
        if ($this->isBundle === null) {
            $this->throwNullValueException(static::IS_BUNDLE);
        }

        return $this->isBundle;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsBundle()
    {
        $this->assertPropertyIsSet(self::IS_BUNDLE);

        return $this;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $bundleItem
     *
     * @return $this
     */
    public function setBundleItem(ItemTransfer $bundleItem = null)
    {
        $this->bundleItem = $bundleItem;
        $this->modifiedProperties[self::BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getBundleItem()
    {
        return $this->bundleItem;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $bundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBundleItemOrFail(ItemTransfer $bundleItem)
    {
        return $this->setBundleItem($bundleItem);
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getBundleItemOrFail()
    {
        if ($this->bundleItem === null) {
            $this->throwNullValueException(static::BUNDLE_ITEM);
        }

        return $this->bundleItem;
    }

    /**
     * @module CustomerPage|ProductBundle|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundleItem()
    {
        $this->assertPropertyIsSet(self::BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @param string|null $groupImage
     *
     * @return $this
     */
    public function setGroupImage($groupImage)
    {
        $this->groupImage = $groupImage;
        $this->modifiedProperties[self::GROUP_IMAGE] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @return string|null
     */
    public function getGroupImage()
    {
        return $this->groupImage;
    }

    /**
     * @module ProductBundle
     *
     * @param string|null $groupImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupImageOrFail($groupImage)
    {
        if ($groupImage === null) {
            $this->throwNullValueException(static::GROUP_IMAGE);
        }

        return $this->setGroupImage($groupImage);
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupImageOrFail()
    {
        if ($this->groupImage === null) {
            $this->throwNullValueException(static::GROUP_IMAGE);
        }

        return $this->groupImage;
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupImage()
    {
        $this->assertPropertyIsSet(self::GROUP_IMAGE);

        return $this;
    }

    /**
     * @module ProductBundle|ShipmentGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $groupItems
     *
     * @return $this
     */
    public function setGroupItems(ArrayObject $groupItems)
    {
        $this->groupItems = $groupItems;
        $this->modifiedProperties[self::GROUP_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ShipmentGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getGroupItems()
    {
        return $this->groupItems;
    }

    /**
     * @module ProductBundle|ShipmentGui
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ItemTransfer $item)
    {
        $this->groupItems[] = $item;
        $this->modifiedProperties[self::GROUP_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ShipmentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupItems()
    {
        $this->assertCollectionPropertyIsSet(self::GROUP_ITEMS);

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @param int|null $rowCount
     *
     * @return $this
     */
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
        $this->modifiedProperties[self::ROW_COUNT] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @return int|null
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    /**
     * @module ProductBundle
     *
     * @param int|null $rowCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRowCountOrFail($rowCount)
    {
        if ($rowCount === null) {
            $this->throwNullValueException(static::ROW_COUNT);
        }

        return $this->setRowCount($rowCount);
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRowCountOrFail()
    {
        if ($this->rowCount === null) {
            $this->throwNullValueException(static::ROW_COUNT);
        }

        return $this->rowCount;
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRowCount()
    {
        $this->assertPropertyIsSet(self::ROW_COUNT);

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
                case 'isBundle':
                case 'groupImage':
                case 'rowCount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'bundleItem':
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
                case 'groupItems':
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
                case 'isBundle':
                case 'groupImage':
                case 'rowCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'bundleItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'groupItems':
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
                case 'isBundle':
                case 'groupImage':
                case 'rowCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'bundleItem':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'groupItems':
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
        $this->groupItems = $this->groupItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isBundle' => $this->isBundle,
            'groupImage' => $this->groupImage,
            'rowCount' => $this->rowCount,
            'bundleItem' => $this->bundleItem,
            'groupItems' => $this->groupItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_bundle' => $this->isBundle,
            'group_image' => $this->groupImage,
            'row_count' => $this->rowCount,
            'bundle_item' => $this->bundleItem,
            'group_items' => $this->groupItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_bundle' => $this->isBundle instanceof AbstractTransfer ? $this->isBundle->toArray(true, false) : $this->isBundle,
            'group_image' => $this->groupImage instanceof AbstractTransfer ? $this->groupImage->toArray(true, false) : $this->groupImage,
            'row_count' => $this->rowCount instanceof AbstractTransfer ? $this->rowCount->toArray(true, false) : $this->rowCount,
            'bundle_item' => $this->bundleItem instanceof AbstractTransfer ? $this->bundleItem->toArray(true, false) : $this->bundleItem,
            'group_items' => $this->groupItems instanceof AbstractTransfer ? $this->groupItems->toArray(true, false) : $this->addValuesToCollection($this->groupItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isBundle' => $this->isBundle instanceof AbstractTransfer ? $this->isBundle->toArray(true, true) : $this->isBundle,
            'groupImage' => $this->groupImage instanceof AbstractTransfer ? $this->groupImage->toArray(true, true) : $this->groupImage,
            'rowCount' => $this->rowCount instanceof AbstractTransfer ? $this->rowCount->toArray(true, true) : $this->rowCount,
            'bundleItem' => $this->bundleItem instanceof AbstractTransfer ? $this->bundleItem->toArray(true, true) : $this->bundleItem,
            'groupItems' => $this->groupItems instanceof AbstractTransfer ? $this->groupItems->toArray(true, true) : $this->addValuesToCollection($this->groupItems, true, true),
        ];
    }
}
