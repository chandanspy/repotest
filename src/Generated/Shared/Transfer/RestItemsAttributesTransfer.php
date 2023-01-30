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
class RestItemsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CALCULATIONS = 'calculations';

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
    public const SALES_UNIT = 'salesUnit';

    /**
     * @var string
     */
    public const SELECTED_PRODUCT_OPTIONS = 'selectedProductOptions';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null
     */
    protected $calculations;

    /**
     * @var \Generated\Shared\Transfer\RestConfiguredBundleTransfer|null
     */
    protected $configuredBundle;

    /**
     * @var \Generated\Shared\Transfer\RestConfiguredBundleItemTransfer|null
     */
    protected $configuredBundleItem;

    /**
     * @var \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null
     */
    protected $salesUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestItemProductOptionsTransfer[]
     */
    protected $selectedProductOptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'amount' => 'amount',
        'Amount' => 'amount',
        'calculations' => 'calculations',
        'Calculations' => 'calculations',
        'configured_bundle' => 'configuredBundle',
        'configuredBundle' => 'configuredBundle',
        'ConfiguredBundle' => 'configuredBundle',
        'configured_bundle_item' => 'configuredBundleItem',
        'configuredBundleItem' => 'configuredBundleItem',
        'ConfiguredBundleItem' => 'configuredBundleItem',
        'sales_unit' => 'salesUnit',
        'salesUnit' => 'salesUnit',
        'SalesUnit' => 'salesUnit',
        'selected_product_options' => 'selectedProductOptions',
        'selectedProductOptions' => 'selectedProductOptions',
        'SelectedProductOptions' => 'selectedProductOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CALCULATIONS => [
            'type' => 'Generated\Shared\Transfer\RestCartItemCalculationsTransfer',
            'type_shim' => null,
            'name_underscore' => 'calculations',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\RestConfiguredBundleTransfer',
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
            'type' => 'Generated\Shared\Transfer\RestConfiguredBundleItemTransfer',
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
        self::SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer',
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
            'type' => 'Generated\Shared\Transfer\RestItemProductOptionsTransfer',
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
    ];

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi|ProductMeasurementUnitsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi|ProductMeasurementUnitsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi|ProductMeasurementUnitsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi|ProductMeasurementUnitsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi|ProductMeasurementUnitsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param int|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null $calculations
     *
     * @return $this
     */
    public function setCalculations(RestCartItemCalculationsTransfer $calculations = null)
    {
        $this->calculations = $calculations;
        $this->modifiedProperties[self::CALCULATIONS] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null
     */
    public function getCalculations()
    {
        return $this->calculations;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemCalculationsTransfer $calculations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCalculationsOrFail(RestCartItemCalculationsTransfer $calculations)
    {
        return $this->setCalculations($calculations);
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCartItemCalculationsTransfer
     */
    public function getCalculationsOrFail()
    {
        if ($this->calculations === null) {
            $this->throwNullValueException(static::CALCULATIONS);
        }

        return $this->calculations;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCalculations()
    {
        $this->assertPropertyIsSet(self::CALCULATIONS);

        return $this;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestConfiguredBundleTransfer|null $configuredBundle
     *
     * @return $this
     */
    public function setConfiguredBundle(RestConfiguredBundleTransfer $configuredBundle = null)
    {
        $this->configuredBundle = $configuredBundle;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @return \Generated\Shared\Transfer\RestConfiguredBundleTransfer|null
     */
    public function getConfiguredBundle()
    {
        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestConfiguredBundleTransfer $configuredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleOrFail(RestConfiguredBundleTransfer $configuredBundle)
    {
        return $this->setConfiguredBundle($configuredBundle);
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestConfiguredBundleTransfer
     */
    public function getConfiguredBundleOrFail()
    {
        if ($this->configuredBundle === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE);
        }

        return $this->configuredBundle;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
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
     * @module ConfigurableBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestConfiguredBundleItemTransfer|null $configuredBundleItem
     *
     * @return $this
     */
    public function setConfiguredBundleItem(RestConfiguredBundleItemTransfer $configuredBundleItem = null)
    {
        $this->configuredBundleItem = $configuredBundleItem;
        $this->modifiedProperties[self::CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @return \Generated\Shared\Transfer\RestConfiguredBundleItemTransfer|null
     */
    public function getConfiguredBundleItem()
    {
        return $this->configuredBundleItem;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestConfiguredBundleItemTransfer $configuredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguredBundleItemOrFail(RestConfiguredBundleItemTransfer $configuredBundleItem)
    {
        return $this->setConfiguredBundleItem($configuredBundleItem);
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestConfiguredBundleItemTransfer
     */
    public function getConfiguredBundleItemOrFail()
    {
        if ($this->configuredBundleItem === null) {
            $this->throwNullValueException(static::CONFIGURED_BUNDLE_ITEM);
        }

        return $this->configuredBundleItem;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
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
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null $salesUnit
     *
     * @return $this
     */
    public function setSalesUnit(RestCartItemsSalesUnitAttributesTransfer $salesUnit = null)
    {
        $this->salesUnit = $salesUnit;
        $this->modifiedProperties[self::SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null
     */
    public function getSalesUnit()
    {
        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer $salesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesUnitOrFail(RestCartItemsSalesUnitAttributesTransfer $salesUnit)
    {
        return $this->setSalesUnit($salesUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer
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
     * @param \ArrayObject|\Generated\Shared\Transfer\RestItemProductOptionsTransfer[] $selectedProductOptions
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
     * @return \ArrayObject|\Generated\Shared\Transfer\RestItemProductOptionsTransfer[]
     */
    public function getSelectedProductOptions()
    {
        return $this->selectedProductOptions;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \Generated\Shared\Transfer\RestItemProductOptionsTransfer $selectedProductOption
     *
     * @return $this
     */
    public function addSelectedProductOption(RestItemProductOptionsTransfer $selectedProductOption)
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'calculations':
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'calculations':
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'calculations':
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
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'groupKey' => $this->groupKey,
            'abstractSku' => $this->abstractSku,
            'amount' => $this->amount,
            'calculations' => $this->calculations,
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
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'group_key' => $this->groupKey,
            'abstract_sku' => $this->abstractSku,
            'amount' => $this->amount,
            'calculations' => $this->calculations,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'calculations' => $this->calculations instanceof AbstractTransfer ? $this->calculations->toArray(true, false) : $this->calculations,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'calculations' => $this->calculations instanceof AbstractTransfer ? $this->calculations->toArray(true, true) : $this->calculations,
            'configuredBundle' => $this->configuredBundle instanceof AbstractTransfer ? $this->configuredBundle->toArray(true, true) : $this->configuredBundle,
            'configuredBundleItem' => $this->configuredBundleItem instanceof AbstractTransfer ? $this->configuredBundleItem->toArray(true, true) : $this->configuredBundleItem,
            'salesUnit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, true) : $this->salesUnit,
            'selectedProductOptions' => $this->selectedProductOptions instanceof AbstractTransfer ? $this->selectedProductOptions->toArray(true, true) : $this->addValuesToCollection($this->selectedProductOptions, true, true),
        ];
    }
}
