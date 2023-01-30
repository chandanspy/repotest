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
class ConfigurableBundleTemplateSlotCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS = 'configurableBundleTemplateSlots';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer[]
     */
    protected $configurableBundleTemplateSlots;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configurable_bundle_template_slots' => 'configurableBundleTemplateSlots',
        'configurableBundleTemplateSlots' => 'configurableBundleTemplateSlots',
        'ConfigurableBundleTemplateSlots' => 'configurableBundleTemplateSlots',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_slots',
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
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer[] $configurableBundleTemplateSlots
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlots(ArrayObject $configurableBundleTemplateSlots)
    {
        $this->configurableBundleTemplateSlots = $configurableBundleTemplateSlots;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer[]
     */
    public function getConfigurableBundleTemplateSlots()
    {
        return $this->configurableBundleTemplateSlots;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer $configurableBundleTemplateSlot
     *
     * @return $this
     */
    public function addConfigurableBundleTemplateSlot(ConfigurableBundleTemplateSlotTransfer $configurableBundleTemplateSlot)
    {
        $this->configurableBundleTemplateSlots[] = $configurableBundleTemplateSlot;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateSlots()
    {
        $this->assertCollectionPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS);

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
                case 'configurableBundleTemplateSlots':
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
                case 'configurableBundleTemplateSlots':
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
                case 'configurableBundleTemplateSlots':
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
        $this->configurableBundleTemplateSlots = $this->configurableBundleTemplateSlots ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'configurableBundleTemplateSlots' => $this->configurableBundleTemplateSlots,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_slots' => $this->configurableBundleTemplateSlots,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'configurable_bundle_template_slots' => $this->configurableBundleTemplateSlots instanceof AbstractTransfer ? $this->configurableBundleTemplateSlots->toArray(true, false) : $this->addValuesToCollection($this->configurableBundleTemplateSlots, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'configurableBundleTemplateSlots' => $this->configurableBundleTemplateSlots instanceof AbstractTransfer ? $this->configurableBundleTemplateSlots->toArray(true, true) : $this->addValuesToCollection($this->configurableBundleTemplateSlots, true, true),
        ];
    }
}
