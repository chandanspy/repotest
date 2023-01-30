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
class ShipmentMethodPluginCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABILITY_PLUGIN_OPTIONS = 'availabilityPluginOptions';

    /**
     * @var string
     */
    public const PRICE_PLUGIN_OPTIONS = 'pricePluginOptions';

    /**
     * @var string
     */
    public const DELIVERY_TIME_PLUGIN_OPTIONS = 'deliveryTimePluginOptions';

    /**
     * @var string[]
     */
    protected $availabilityPluginOptions = [];

    /**
     * @var string[]
     */
    protected $pricePluginOptions = [];

    /**
     * @var string[]
     */
    protected $deliveryTimePluginOptions = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'availability_plugin_options' => 'availabilityPluginOptions',
        'availabilityPluginOptions' => 'availabilityPluginOptions',
        'AvailabilityPluginOptions' => 'availabilityPluginOptions',
        'price_plugin_options' => 'pricePluginOptions',
        'pricePluginOptions' => 'pricePluginOptions',
        'PricePluginOptions' => 'pricePluginOptions',
        'delivery_time_plugin_options' => 'deliveryTimePluginOptions',
        'deliveryTimePluginOptions' => 'deliveryTimePluginOptions',
        'DeliveryTimePluginOptions' => 'deliveryTimePluginOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABILITY_PLUGIN_OPTIONS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'availability_plugin_options',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PLUGIN_OPTIONS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'price_plugin_options',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DELIVERY_TIME_PLUGIN_OPTIONS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'delivery_time_plugin_options',
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
     * @module ShipmentGui|Shipment
     *
     * @param string[]|null $availabilityPluginOptions
     *
     * @return $this
     */
    public function setAvailabilityPluginOptions(array $availabilityPluginOptions = null)
    {
        if ($availabilityPluginOptions === null) {
            $availabilityPluginOptions = [];
        }

        $this->availabilityPluginOptions = $availabilityPluginOptions;
        $this->modifiedProperties[self::AVAILABILITY_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return string[]
     */
    public function getAvailabilityPluginOptions()
    {
        return $this->availabilityPluginOptions;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string $availabilityPluginOption
     *
     * @return $this
     */
    public function addAvailabilityPluginOption($availabilityPluginOption)
    {
        $this->availabilityPluginOptions[] = $availabilityPluginOption;
        $this->modifiedProperties[self::AVAILABILITY_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailabilityPluginOptions()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY_PLUGIN_OPTIONS);

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string[]|null $pricePluginOptions
     *
     * @return $this
     */
    public function setPricePluginOptions(array $pricePluginOptions = null)
    {
        if ($pricePluginOptions === null) {
            $pricePluginOptions = [];
        }

        $this->pricePluginOptions = $pricePluginOptions;
        $this->modifiedProperties[self::PRICE_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return string[]
     */
    public function getPricePluginOptions()
    {
        return $this->pricePluginOptions;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string $pricePluginOption
     *
     * @return $this
     */
    public function addPricePluginOption($pricePluginOption)
    {
        $this->pricePluginOptions[] = $pricePluginOption;
        $this->modifiedProperties[self::PRICE_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePricePluginOptions()
    {
        $this->assertPropertyIsSet(self::PRICE_PLUGIN_OPTIONS);

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string[]|null $deliveryTimePluginOptions
     *
     * @return $this
     */
    public function setDeliveryTimePluginOptions(array $deliveryTimePluginOptions = null)
    {
        if ($deliveryTimePluginOptions === null) {
            $deliveryTimePluginOptions = [];
        }

        $this->deliveryTimePluginOptions = $deliveryTimePluginOptions;
        $this->modifiedProperties[self::DELIVERY_TIME_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return string[]
     */
    public function getDeliveryTimePluginOptions()
    {
        return $this->deliveryTimePluginOptions;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string $deliveryTimePluginOption
     *
     * @return $this
     */
    public function addDeliveryTimePluginOption($deliveryTimePluginOption)
    {
        $this->deliveryTimePluginOptions[] = $deliveryTimePluginOption;
        $this->modifiedProperties[self::DELIVERY_TIME_PLUGIN_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryTimePluginOptions()
    {
        $this->assertPropertyIsSet(self::DELIVERY_TIME_PLUGIN_OPTIONS);

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
                case 'availabilityPluginOptions':
                case 'pricePluginOptions':
                case 'deliveryTimePluginOptions':
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
                case 'availabilityPluginOptions':
                case 'pricePluginOptions':
                case 'deliveryTimePluginOptions':
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
                case 'availabilityPluginOptions':
                case 'pricePluginOptions':
                case 'deliveryTimePluginOptions':
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
            'availabilityPluginOptions' => $this->availabilityPluginOptions,
            'pricePluginOptions' => $this->pricePluginOptions,
            'deliveryTimePluginOptions' => $this->deliveryTimePluginOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'availability_plugin_options' => $this->availabilityPluginOptions,
            'price_plugin_options' => $this->pricePluginOptions,
            'delivery_time_plugin_options' => $this->deliveryTimePluginOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'availability_plugin_options' => $this->availabilityPluginOptions instanceof AbstractTransfer ? $this->availabilityPluginOptions->toArray(true, false) : $this->availabilityPluginOptions,
            'price_plugin_options' => $this->pricePluginOptions instanceof AbstractTransfer ? $this->pricePluginOptions->toArray(true, false) : $this->pricePluginOptions,
            'delivery_time_plugin_options' => $this->deliveryTimePluginOptions instanceof AbstractTransfer ? $this->deliveryTimePluginOptions->toArray(true, false) : $this->deliveryTimePluginOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'availabilityPluginOptions' => $this->availabilityPluginOptions instanceof AbstractTransfer ? $this->availabilityPluginOptions->toArray(true, true) : $this->availabilityPluginOptions,
            'pricePluginOptions' => $this->pricePluginOptions instanceof AbstractTransfer ? $this->pricePluginOptions->toArray(true, true) : $this->pricePluginOptions,
            'deliveryTimePluginOptions' => $this->deliveryTimePluginOptions instanceof AbstractTransfer ? $this->deliveryTimePluginOptions->toArray(true, true) : $this->deliveryTimePluginOptions,
        ];
    }
}
