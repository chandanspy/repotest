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
class ConfiguredBundleItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SLOT = 'slot';

    /**
     * @var string
     */
    public const QUANTITY_PER_SLOT = 'quantityPerSlot';

    /**
     * @var \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null
     */
    protected $slot;

    /**
     * @var int|null
     */
    protected $quantityPerSlot;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'slot' => 'slot',
        'Slot' => 'slot',
        'quantity_per_slot' => 'quantityPerSlot',
        'quantityPerSlot' => 'quantityPerSlot',
        'QuantityPerSlot' => 'quantityPerSlot',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SLOT => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer',
            'type_shim' => null,
            'name_underscore' => 'slot',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_PER_SLOT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity_per_slot',
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
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null $slot
     *
     * @return $this
     */
    public function setSlot(ConfigurableBundleTemplateSlotTransfer $slot = null)
    {
        $this->slot = $slot;
        $this->modifiedProperties[self::SLOT] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer|null
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer $slot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSlotOrFail(ConfigurableBundleTemplateSlotTransfer $slot)
    {
        return $this->setSlot($slot);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotTransfer
     */
    public function getSlotOrFail()
    {
        if ($this->slot === null) {
            $this->throwNullValueException(static::SLOT);
        }

        return $this->slot;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundle|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlot()
    {
        $this->assertPropertyIsSet(self::SLOT);

        return $this;
    }

    /**
     * @module ConfigurableBundleCart|ConfigurableBundleCartsRestApi|SalesConfigurableBundle
     *
     * @param int|null $quantityPerSlot
     *
     * @return $this
     */
    public function setQuantityPerSlot($quantityPerSlot)
    {
        $this->quantityPerSlot = $quantityPerSlot;
        $this->modifiedProperties[self::QUANTITY_PER_SLOT] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleCart|ConfigurableBundleCartsRestApi|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getQuantityPerSlot()
    {
        return $this->quantityPerSlot;
    }

    /**
     * @module ConfigurableBundleCart|ConfigurableBundleCartsRestApi|SalesConfigurableBundle
     *
     * @param int|null $quantityPerSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityPerSlotOrFail($quantityPerSlot)
    {
        if ($quantityPerSlot === null) {
            $this->throwNullValueException(static::QUANTITY_PER_SLOT);
        }

        return $this->setQuantityPerSlot($quantityPerSlot);
    }

    /**
     * @module ConfigurableBundleCart|ConfigurableBundleCartsRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityPerSlotOrFail()
    {
        if ($this->quantityPerSlot === null) {
            $this->throwNullValueException(static::QUANTITY_PER_SLOT);
        }

        return $this->quantityPerSlot;
    }

    /**
     * @module ConfigurableBundleCart|ConfigurableBundleCartsRestApi|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityPerSlot()
    {
        $this->assertPropertyIsSet(self::QUANTITY_PER_SLOT);

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
                case 'quantityPerSlot':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'slot':
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
                case 'quantityPerSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'slot':
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
                case 'quantityPerSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'slot':
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
            'quantityPerSlot' => $this->quantityPerSlot,
            'slot' => $this->slot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quantity_per_slot' => $this->quantityPerSlot,
            'slot' => $this->slot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quantity_per_slot' => $this->quantityPerSlot instanceof AbstractTransfer ? $this->quantityPerSlot->toArray(true, false) : $this->quantityPerSlot,
            'slot' => $this->slot instanceof AbstractTransfer ? $this->slot->toArray(true, false) : $this->slot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quantityPerSlot' => $this->quantityPerSlot instanceof AbstractTransfer ? $this->quantityPerSlot->toArray(true, true) : $this->quantityPerSlot,
            'slot' => $this->slot instanceof AbstractTransfer ? $this->slot->toArray(true, true) : $this->slot,
        ];
    }
}
