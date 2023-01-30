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
class SalesOrderConfiguredBundleItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM = 'idSalesOrderConfiguredBundleItem';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_CONFIGURED_BUNDLE = 'idSalesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID = 'configurableBundleTemplateSlotUuid';

    /**
     * @var int|null
     */
    protected $idSalesOrderItem;

    /**
     * @var int|null
     */
    protected $idSalesOrderConfiguredBundleItem;

    /**
     * @var int|null
     */
    protected $idSalesOrderConfiguredBundle;

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateSlotUuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
        'id_sales_order_configured_bundle_item' => 'idSalesOrderConfiguredBundleItem',
        'idSalesOrderConfiguredBundleItem' => 'idSalesOrderConfiguredBundleItem',
        'IdSalesOrderConfiguredBundleItem' => 'idSalesOrderConfiguredBundleItem',
        'id_sales_order_configured_bundle' => 'idSalesOrderConfiguredBundle',
        'idSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'IdSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'configurable_bundle_template_slot_uuid' => 'configurableBundleTemplateSlotUuid',
        'configurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
        'ConfigurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_configured_bundle_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_configured_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_slot_uuid',
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderItem
     *
     * @return $this
     */
    public function setIdSalesOrderItem($idSalesOrderItem)
    {
        $this->idSalesOrderItem = $idSalesOrderItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOrFail($idSalesOrderItem)
    {
        if ($idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->setIdSalesOrderItem($idSalesOrderItem);
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemOrFail()
    {
        if ($this->idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderConfiguredBundleItem
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem)
    {
        $this->idSalesOrderConfiguredBundleItem = $idSalesOrderConfiguredBundleItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getIdSalesOrderConfiguredBundleItem()
    {
        return $this->idSalesOrderConfiguredBundleItem;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderConfiguredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleItemOrFail($idSalesOrderConfiguredBundleItem)
    {
        if ($idSalesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->setIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem);
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderConfiguredBundleItemOrFail()
    {
        if ($this->idSalesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->idSalesOrderConfiguredBundleItem;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderConfiguredBundleItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundle($idSalesOrderConfiguredBundle)
    {
        $this->idSalesOrderConfiguredBundle = $idSalesOrderConfiguredBundle;
        $this->modifiedProperties[self::ID_SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getIdSalesOrderConfiguredBundle()
    {
        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param int|null $idSalesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleOrFail($idSalesOrderConfiguredBundle)
    {
        if ($idSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->setIdSalesOrderConfiguredBundle($idSalesOrderConfiguredBundle);
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderConfiguredBundleOrFail()
    {
        if ($this->idSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param string|null $configurableBundleTemplateSlotUuid
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid)
    {
        $this->configurableBundleTemplateSlotUuid = $configurableBundleTemplateSlotUuid;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @return string|null
     */
    public function getConfigurableBundleTemplateSlotUuid()
    {
        return $this->configurableBundleTemplateSlotUuid;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param string|null $configurableBundleTemplateSlotUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlotUuidOrFail($configurableBundleTemplateSlotUuid)
    {
        if ($configurableBundleTemplateSlotUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);
        }

        return $this->setConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid);
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurableBundleTemplateSlotUuidOrFail()
    {
        if ($this->configurableBundleTemplateSlotUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);
        }

        return $this->configurableBundleTemplateSlotUuid;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateSlotUuid()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);

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
                case 'idSalesOrderItem':
                case 'idSalesOrderConfiguredBundleItem':
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateSlotUuid':
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
                case 'idSalesOrderItem':
                case 'idSalesOrderConfiguredBundleItem':
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateSlotUuid':
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
                case 'idSalesOrderItem':
                case 'idSalesOrderConfiguredBundleItem':
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateSlotUuid':
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
            'idSalesOrderItem' => $this->idSalesOrderItem,
            'idSalesOrderConfiguredBundleItem' => $this->idSalesOrderConfiguredBundleItem,
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem,
            'id_sales_order_configured_bundle_item' => $this->idSalesOrderConfiguredBundleItem,
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
            'id_sales_order_configured_bundle_item' => $this->idSalesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundleItem->toArray(true, false) : $this->idSalesOrderConfiguredBundleItem,
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, false) : $this->idSalesOrderConfiguredBundle,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, false) : $this->configurableBundleTemplateSlotUuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
            'idSalesOrderConfiguredBundleItem' => $this->idSalesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundleItem->toArray(true, true) : $this->idSalesOrderConfiguredBundleItem,
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, true) : $this->idSalesOrderConfiguredBundle,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, true) : $this->configurableBundleTemplateSlotUuid,
        ];
    }
}
