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
class SalesOrderConfiguredBundleFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_UUID = 'configurableBundleTemplateUuid';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID = 'configurableBundleTemplateSlotUuid';

    /**
     * @var string
     */
    public const SALES_ORDER_ITEM_IDS = 'salesOrderItemIds';

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateUuid;

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateSlotUuid;

    /**
     * @var array
     */
    protected $salesOrderItemIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configurable_bundle_template_uuid' => 'configurableBundleTemplateUuid',
        'configurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
        'ConfigurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
        'configurable_bundle_template_slot_uuid' => 'configurableBundleTemplateSlotUuid',
        'configurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
        'ConfigurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
        'sales_order_item_ids' => 'salesOrderItemIds',
        'salesOrderItemIds' => 'salesOrderItemIds',
        'SalesOrderItemIds' => 'salesOrderItemIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_uuid',
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
        self::SALES_ORDER_ITEM_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'sales_order_item_ids',
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
     * @module SalesConfigurableBundle
     *
     * @param string|null $configurableBundleTemplateUuid
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateUuid($configurableBundleTemplateUuid)
    {
        $this->configurableBundleTemplateUuid = $configurableBundleTemplateUuid;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @return string|null
     */
    public function getConfigurableBundleTemplateUuid()
    {
        return $this->configurableBundleTemplateUuid;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param string|null $configurableBundleTemplateUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateUuidOrFail($configurableBundleTemplateUuid)
    {
        if ($configurableBundleTemplateUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
        }

        return $this->setConfigurableBundleTemplateUuid($configurableBundleTemplateUuid);
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurableBundleTemplateUuidOrFail()
    {
        if ($this->configurableBundleTemplateUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
        }

        return $this->configurableBundleTemplateUuid;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateUuid()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);

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
     * @module SalesConfigurableBundle
     *
     * @param array|null $salesOrderItemIds
     *
     * @return $this
     */
    public function setSalesOrderItemIds(array $salesOrderItemIds = null)
    {
        if ($salesOrderItemIds === null) {
            $salesOrderItemIds = [];
        }

        $this->salesOrderItemIds = $salesOrderItemIds;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @return array
     */
    public function getSalesOrderItemIds()
    {
        return $this->salesOrderItemIds;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @param mixed $salesOrderItemIds
     *
     * @return $this
     */
    public function addSalesOrderItemIds($salesOrderItemIds)
    {
        $this->salesOrderItemIds[] = $salesOrderItemIds;
        $this->modifiedProperties[self::SALES_ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderItemIds()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_ITEM_IDS);

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
                case 'configurableBundleTemplateUuid':
                case 'configurableBundleTemplateSlotUuid':
                case 'salesOrderItemIds':
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
                case 'configurableBundleTemplateUuid':
                case 'configurableBundleTemplateSlotUuid':
                case 'salesOrderItemIds':
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
                case 'configurableBundleTemplateUuid':
                case 'configurableBundleTemplateSlotUuid':
                case 'salesOrderItemIds':
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
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid,
            'salesOrderItemIds' => $this->salesOrderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid,
            'sales_order_item_ids' => $this->salesOrderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, false) : $this->configurableBundleTemplateUuid,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, false) : $this->configurableBundleTemplateSlotUuid,
            'sales_order_item_ids' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, false) : $this->salesOrderItemIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, true) : $this->configurableBundleTemplateUuid,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, true) : $this->configurableBundleTemplateSlotUuid,
            'salesOrderItemIds' => $this->salesOrderItemIds instanceof AbstractTransfer ? $this->salesOrderItemIds->toArray(true, true) : $this->salesOrderItemIds,
        ];
    }
}
