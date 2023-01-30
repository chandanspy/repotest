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
class ConfigurableBundleTemplateSlotEditFormTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_SLOT = 'configurableBundleTemplateSlot';

    /**
     * @var string
     */
    public const PRODUCT_LIST_AGGREGATE_FORM = 'productListAggregateForm';

    /**
     * @var \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null
     */
    protected $configurableBundleTemplateSlot;

    /**
     * @var \Generated\Shared\Transfer\ProductListAggregateFormTransfer|null
     */
    protected $productListAggregateForm;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configurable_bundle_template_slot' => 'configurableBundleTemplateSlot',
        'configurableBundleTemplateSlot' => 'configurableBundleTemplateSlot',
        'ConfigurableBundleTemplateSlot' => 'configurableBundleTemplateSlot',
        'product_list_aggregate_form' => 'productListAggregateForm',
        'productListAggregateForm' => 'productListAggregateForm',
        'ProductListAggregateForm' => 'productListAggregateForm',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_slot',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST_AGGREGATE_FORM => [
            'type' => 'Generated\Shared\Transfer\ProductListAggregateFormTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list_aggregate_form',
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
     * @module ConfigurableBundleGui
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null $configurableBundleTemplateSlot
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlot(ConfigurableBundleTemplateSlotTransfer $configurableBundleTemplateSlot = null)
    {
        $this->configurableBundleTemplateSlot = $configurableBundleTemplateSlot;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null
     */
    public function getConfigurableBundleTemplateSlot()
    {
        return $this->configurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundleGui
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer $configurableBundleTemplateSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlotOrFail(ConfigurableBundleTemplateSlotTransfer $configurableBundleTemplateSlot)
    {
        return $this->setConfigurableBundleTemplateSlot($configurableBundleTemplateSlot);
    }

    /**
     * @module ConfigurableBundleGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer
     */
    public function getConfigurableBundleTemplateSlotOrFail()
    {
        if ($this->configurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->configurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundleGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateSlot()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListAggregateFormTransfer|null $productListAggregateForm
     *
     * @return $this
     */
    public function setProductListAggregateForm(ProductListAggregateFormTransfer $productListAggregateForm = null)
    {
        $this->productListAggregateForm = $productListAggregateForm;
        $this->modifiedProperties[self::PRODUCT_LIST_AGGREGATE_FORM] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return \Generated\Shared\Transfer\ProductListAggregateFormTransfer|null
     */
    public function getProductListAggregateForm()
    {
        return $this->productListAggregateForm;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListAggregateFormTransfer $productListAggregateForm
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListAggregateFormOrFail(ProductListAggregateFormTransfer $productListAggregateForm)
    {
        return $this->setProductListAggregateForm($productListAggregateForm);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListAggregateFormTransfer
     */
    public function getProductListAggregateFormOrFail()
    {
        if ($this->productListAggregateForm === null) {
            $this->throwNullValueException(static::PRODUCT_LIST_AGGREGATE_FORM);
        }

        return $this->productListAggregateForm;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListAggregateForm()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_AGGREGATE_FORM);

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
                case 'configurableBundleTemplateSlot':
                case 'productListAggregateForm':
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
                case 'configurableBundleTemplateSlot':
                case 'productListAggregateForm':
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
                case 'configurableBundleTemplateSlot':
                case 'productListAggregateForm':
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
            'configurableBundleTemplateSlot' => $this->configurableBundleTemplateSlot,
            'productListAggregateForm' => $this->productListAggregateForm,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_slot' => $this->configurableBundleTemplateSlot,
            'product_list_aggregate_form' => $this->productListAggregateForm,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_slot' => $this->configurableBundleTemplateSlot instanceof AbstractTransfer ? $this->configurableBundleTemplateSlot->toArray(true, false) : $this->configurableBundleTemplateSlot,
            'product_list_aggregate_form' => $this->productListAggregateForm instanceof AbstractTransfer ? $this->productListAggregateForm->toArray(true, false) : $this->productListAggregateForm,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'configurableBundleTemplateSlot' => $this->configurableBundleTemplateSlot instanceof AbstractTransfer ? $this->configurableBundleTemplateSlot->toArray(true, true) : $this->configurableBundleTemplateSlot,
            'productListAggregateForm' => $this->productListAggregateForm instanceof AbstractTransfer ? $this->productListAggregateForm->toArray(true, true) : $this->productListAggregateForm,
        ];
    }
}
