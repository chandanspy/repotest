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
class RestQuoteRequestItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURED_BUNDLE = 'configuredBundle';

    /**
     * @var string
     */
    public const CONFIGURED_BUNDLE_ITEM = 'configuredBundleItem';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const SALES_UNIT = 'salesUnit';

    /**
     * @var string
     */
    public const SELECTED_PRODUCT_OPTIONS = 'selectedProductOptions';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer|null
     */
    protected $configuredBundle;

    /**
     * @var \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer|null
     */
    protected $configuredBundleItem;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var \Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer|null
     */
    protected $salesUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestQuoteRequestProductOptionTransfer[]
     */
    protected $selectedProductOptions;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configured_bundle' => 'configuredBundle',
        'configuredBundle' => 'configuredBundle',
        'ConfiguredBundle' => 'configuredBundle',
        'configured_bundle_item' => 'configuredBundleItem',
        'configuredBundleItem' => 'configuredBundleItem',
        'ConfiguredBundleItem' => 'configuredBundleItem',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'sales_unit' => 'salesUnit',
        'salesUnit' => 'salesUnit',
        'SalesUnit' => 'salesUnit',
        'selected_product_options' => 'selectedProductOptions',
        'selectedProductOptions' => 'selectedProductOptions',
        'SelectedProductOptions' => 'selectedProductOptions',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'configured_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURED_BUNDLE_ITEM => [
            'type' => 'Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'configured_bundle_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\RestQuoteRequestProductOptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'selected_product_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
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
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer|null $configuredBundle
     *
     * @return $this
     */
    public function setConfiguredBundle(RestQuoteRequestsConfiguredBundleTransfer $configuredBundle = null)
    {
        $this->configuredBundle = $configuredBundle;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer|null
     */
    public function getConfiguredBundle()
    {
        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer $configuredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleOrFail(RestQuoteRequestsConfiguredBundleTransfer $configuredBundle)
    {
        return $this->setConfiguredBundle($configuredBundle);
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleTransfer
     */
    public function getConfiguredBundleOrFail()
    {
        if ($this->configuredBundle === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE);
        }

        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer|null $configuredBundleItem
     *
     * @return $this
     */
    public function setConfiguredBundleItem(RestQuoteRequestsConfiguredBundleItemTransfer $configuredBundleItem = null)
    {
        $this->configuredBundleItem = $configuredBundleItem;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer|null
     */
    public function getConfiguredBundleItem()
    {
        return $this->configuredBundleItem;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer $configuredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleItemOrFail(RestQuoteRequestsConfiguredBundleItemTransfer $configuredBundleItem)
    {
        return $this->setConfiguredBundleItem($configuredBundleItem);
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestsConfiguredBundleItemTransfer
     */
    public function getConfiguredBundleItemOrFail()
    {
        if ($this->configuredBundleItem === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE_ITEM);
        }

        return $this->configuredBundleItem;
    }

    /**
     * @module ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguredBundleItem()
    {
        $this->assertPropertyIsSet(self::CONFIGURED_BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer|null $salesUnit
     *
     * @return $this
     */
    public function setSalesUnit(RestQuoteRequestSalesUnitTransfer $salesUnit = null)
    {
        $this->salesUnit = $salesUnit;
        $this->modifiedProperties[self::SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer|null
     */
    public function getSalesUnit()
    {
        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer $salesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesUnitOrFail(RestQuoteRequestSalesUnitTransfer $salesUnit)
    {
        return $this->setSalesUnit($salesUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestSalesUnitTransfer
     */
    public function getSalesUnitOrFail()
    {
        if ($this->salesUnit === null) {
            $this->throwNullValueException(static::SALES_UNIT);
        }

        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesUnit()
    {
        $this->assertPropertyIsSet(self::SALES_UNIT);

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestQuoteRequestProductOptionTransfer[] $selectedProductOptions
     *
     * @return $this
     */
    public function setSelectedProductOptions(ArrayObject $selectedProductOptions)
    {
        $this->selectedProductOptions = $selectedProductOptions;
        $this->modifiedProperties[self::SELECTED_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestQuoteRequestProductOptionTransfer[]
     */
    public function getSelectedProductOptions()
    {
        return $this->selectedProductOptions;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestProductOptionTransfer $selectedProductOption
     *
     * @return $this
     */
    public function addSelectedProductOption(RestQuoteRequestProductOptionTransfer $selectedProductOption)
    {
        $this->selectedProductOptions[] = $selectedProductOption;
        $this->modifiedProperties[self::SELECTED_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedProductOptions()
    {
        $this->assertCollectionPropertyIsSet(self::SELECTED_PRODUCT_OPTIONS);

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module ProductsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductsRestApi
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

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
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'configuredBundle':
                case 'configuredBundleItem':
                case 'salesUnit':
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
                case 'selectedProductOptions':
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
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'configuredBundle':
                case 'configuredBundleItem':
                case 'salesUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'selectedProductOptions':
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
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'configuredBundle':
                case 'configuredBundleItem':
                case 'salesUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'selectedProductOptions':
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
        $this->selectedProductOptions = $this->selectedProductOptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'groupKey' => $this->groupKey,
            'sku' => $this->sku,
            'configuredBundle' => $this->configuredBundle,
            'configuredBundleItem' => $this->configuredBundleItem,
            'salesUnit' => $this->salesUnit,
            'selectedProductOptions' => $this->selectedProductOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'group_key' => $this->groupKey,
            'sku' => $this->sku,
            'configured_bundle' => $this->configuredBundle,
            'configured_bundle_item' => $this->configuredBundleItem,
            'sales_unit' => $this->salesUnit,
            'selected_product_options' => $this->selectedProductOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'configured_bundle' => $this->configuredBundle instanceof AbstractTransfer ? $this->configuredBundle->toArray(true, false) : $this->configuredBundle,
            'configured_bundle_item' => $this->configuredBundleItem instanceof AbstractTransfer ? $this->configuredBundleItem->toArray(true, false) : $this->configuredBundleItem,
            'sales_unit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, false) : $this->salesUnit,
            'selected_product_options' => $this->selectedProductOptions instanceof AbstractTransfer ? $this->selectedProductOptions->toArray(true, false) : $this->addValuesToCollection($this->selectedProductOptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'configuredBundle' => $this->configuredBundle instanceof AbstractTransfer ? $this->configuredBundle->toArray(true, true) : $this->configuredBundle,
            'configuredBundleItem' => $this->configuredBundleItem instanceof AbstractTransfer ? $this->configuredBundleItem->toArray(true, true) : $this->configuredBundleItem,
            'salesUnit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, true) : $this->salesUnit,
            'selectedProductOptions' => $this->selectedProductOptions instanceof AbstractTransfer ? $this->selectedProductOptions->toArray(true, true) : $this->addValuesToCollection($this->selectedProductOptions, true, true),
        ];
    }
}
