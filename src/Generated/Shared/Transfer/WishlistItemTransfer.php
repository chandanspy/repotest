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
class WishlistItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_AVAILABILITY = 'productConcreteAvailability';

    /**
     * @var string
     */
    public const IS_SELLABLE = 'isSellable';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null
     */
    protected $productConcreteAvailability;

    /**
     * @var bool|null
     */
    protected $isSellable;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[]
     */
    protected $prices;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_concrete_availability' => 'productConcreteAvailability',
        'productConcreteAvailability' => 'productConcreteAvailability',
        'ProductConcreteAvailability' => 'productConcreteAvailability',
        'is_sellable' => 'isSellable',
        'isSellable' => 'isSellable',
        'IsSellable' => 'isSellable',
        'sku' => 'sku',
        'Sku' => 'sku',
        'prices' => 'prices',
        'Prices' => 'prices',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONCRETE_AVAILABILITY => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_availability',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SELLABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_sellable',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'prices',
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
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null $productConcreteAvailability
     *
     * @return $this
     */
    public function setProductConcreteAvailability(ProductConcreteAvailabilityTransfer $productConcreteAvailability = null)
    {
        $this->productConcreteAvailability = $productConcreteAvailability;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @return \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer|null
     */
    public function getProductConcreteAvailability()
    {
        return $this->productConcreteAvailability;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer $productConcreteAvailability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteAvailabilityOrFail(ProductConcreteAvailabilityTransfer $productConcreteAvailability)
    {
        return $this->setProductConcreteAvailability($productConcreteAvailability);
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer
     */
    public function getProductConcreteAvailabilityOrFail()
    {
        if ($this->productConcreteAvailability === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_AVAILABILITY);
        }

        return $this->productConcreteAvailability;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteAvailability()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_AVAILABILITY);

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param bool|null $isSellable
     *
     * @return $this
     */
    public function setIsSellable($isSellable)
    {
        $this->isSellable = $isSellable;
        $this->modifiedProperties[self::IS_SELLABLE] = true;

        return $this;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @return bool|null
     */
    public function getIsSellable()
    {
        return $this->isSellable;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @param bool|null $isSellable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSellableOrFail($isSellable)
    {
        if ($isSellable === null) {
            $this->throwNullValueException(static::IS_SELLABLE);
        }

        return $this->setIsSellable($isSellable);
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSellableOrFail()
    {
        if ($this->isSellable === null) {
            $this->throwNullValueException(static::IS_SELLABLE);
        }

        return $this->isSellable;
    }

    /**
     * @module Availability|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSellable()
    {
        $this->assertPropertyIsSet(self::IS_SELLABLE);

        return $this;
    }

    /**
     * @module Availability|PriceProduct|ProductDiscontinued
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
     * @module Availability|PriceProduct|ProductDiscontinued
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module Availability|PriceProduct|ProductDiscontinued
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
     * @module Availability|PriceProduct|ProductDiscontinued
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
     * @module Availability|PriceProduct|ProductDiscontinued
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
     * @module PriceProduct|ProductPricesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[] $prices
     *
     * @return $this
     */
    public function setPrices(ArrayObject $prices)
    {
        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PriceProductTransfer[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $price
     *
     * @return $this
     */
    public function addPrice(PriceProductTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertCollectionPropertyIsSet(self::PRICES);

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
                case 'isSellable':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConcreteAvailability':
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
                case 'prices':
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
                case 'isSellable':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcreteAvailability':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'prices':
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
                case 'isSellable':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcreteAvailability':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'prices':
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
        $this->prices = $this->prices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSellable' => $this->isSellable,
            'sku' => $this->sku,
            'productConcreteAvailability' => $this->productConcreteAvailability,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_sellable' => $this->isSellable,
            'sku' => $this->sku,
            'product_concrete_availability' => $this->productConcreteAvailability,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_sellable' => $this->isSellable instanceof AbstractTransfer ? $this->isSellable->toArray(true, false) : $this->isSellable,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'product_concrete_availability' => $this->productConcreteAvailability instanceof AbstractTransfer ? $this->productConcreteAvailability->toArray(true, false) : $this->productConcreteAvailability,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSellable' => $this->isSellable instanceof AbstractTransfer ? $this->isSellable->toArray(true, true) : $this->isSellable,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'productConcreteAvailability' => $this->productConcreteAvailability instanceof AbstractTransfer ? $this->productConcreteAvailability->toArray(true, true) : $this->productConcreteAvailability,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
