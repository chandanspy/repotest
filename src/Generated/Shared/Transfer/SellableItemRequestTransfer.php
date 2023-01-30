<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SellableItemRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const PRODUCT_AVAILABILITY_CRITERIA = 'productAvailabilityCriteria';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const IS_PROCESSED = 'isProcessed';

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $quantity;

    /**
     * @var \Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer|null
     */
    protected $productAvailabilityCriteria;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var bool|null
     */
    protected $isProcessed;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'product_availability_criteria' => 'productAvailabilityCriteria',
        'productAvailabilityCriteria' => 'productAvailabilityCriteria',
        'ProductAvailabilityCriteria' => 'productAvailabilityCriteria',
        'sku' => 'sku',
        'Sku' => 'sku',
        'is_processed' => 'isProcessed',
        'isProcessed' => 'isProcessed',
        'IsProcessed' => 'isProcessed',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_AVAILABILITY_CRITERIA => [
            'type' => 'Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_availability_criteria',
            'is_collection' => false,
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
        self::IS_PROCESSED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_processed',
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
     * @module AvailabilityCartConnector|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        if ($quantity !== null && !$quantity instanceof Decimal) {
            $quantity = new Decimal($quantity);
        }

        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $quantity
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
     * @module AvailabilityCartConnector|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module AvailabilityCartConnector|Availability
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
     * @module AvailabilityCartConnector|Availability
     *
     * @param \Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer|null $productAvailabilityCriteria
     *
     * @return $this
     */
    public function setProductAvailabilityCriteria(ProductAvailabilityCriteriaTransfer $productAvailabilityCriteria = null)
    {
        $this->productAvailabilityCriteria = $productAvailabilityCriteria;
        $this->modifiedProperties[self::PRODUCT_AVAILABILITY_CRITERIA] = true;

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @return \Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer|null
     */
    public function getProductAvailabilityCriteria()
    {
        return $this->productAvailabilityCriteria;
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @param \Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer $productAvailabilityCriteria
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAvailabilityCriteriaOrFail(ProductAvailabilityCriteriaTransfer $productAvailabilityCriteria)
    {
        return $this->setProductAvailabilityCriteria($productAvailabilityCriteria);
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductAvailabilityCriteriaTransfer
     */
    public function getProductAvailabilityCriteriaOrFail()
    {
        if ($this->productAvailabilityCriteria === null) {
            $this->throwNullValueException(static::PRODUCT_AVAILABILITY_CRITERIA);
        }

        return $this->productAvailabilityCriteria;
    }

    /**
     * @module AvailabilityCartConnector|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAvailabilityCriteria()
    {
        $this->assertPropertyIsSet(self::PRODUCT_AVAILABILITY_CRITERIA);

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|Availability
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
     * @module AvailabilityCartConnector|Availability
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityCartConnector|Availability
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
     * @module AvailabilityCartConnector|Availability
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
     * @module AvailabilityCartConnector|Availability
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
     * @module Availability
     *
     * @param bool|null $isProcessed
     *
     * @return $this
     */
    public function setIsProcessed($isProcessed)
    {
        $this->isProcessed = $isProcessed;
        $this->modifiedProperties[self::IS_PROCESSED] = true;

        return $this;
    }

    /**
     * @module Availability
     *
     * @return bool|null
     */
    public function getIsProcessed()
    {
        return $this->isProcessed;
    }

    /**
     * @module Availability
     *
     * @param bool|null $isProcessed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsProcessedOrFail($isProcessed)
    {
        if ($isProcessed === null) {
            $this->throwNullValueException(static::IS_PROCESSED);
        }

        return $this->setIsProcessed($isProcessed);
    }

    /**
     * @module Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsProcessedOrFail()
    {
        if ($this->isProcessed === null) {
            $this->throwNullValueException(static::IS_PROCESSED);
        }

        return $this->isProcessed;
    }

    /**
     * @module Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsProcessed()
    {
        $this->assertPropertyIsSet(self::IS_PROCESSED);

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
                case 'isProcessed':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productAvailabilityCriteria':
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
                case 'quantity':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'isProcessed':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productAvailabilityCriteria':
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
                case 'sku':
                case 'isProcessed':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productAvailabilityCriteria':
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
            'sku' => $this->sku,
            'isProcessed' => $this->isProcessed,
            'productAvailabilityCriteria' => $this->productAvailabilityCriteria,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'is_processed' => $this->isProcessed,
            'product_availability_criteria' => $this->productAvailabilityCriteria,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'is_processed' => $this->isProcessed instanceof AbstractTransfer ? $this->isProcessed->toArray(true, false) : $this->isProcessed,
            'product_availability_criteria' => $this->productAvailabilityCriteria instanceof AbstractTransfer ? $this->productAvailabilityCriteria->toArray(true, false) : $this->productAvailabilityCriteria,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'isProcessed' => $this->isProcessed instanceof AbstractTransfer ? $this->isProcessed->toArray(true, true) : $this->isProcessed,
            'productAvailabilityCriteria' => $this->productAvailabilityCriteria instanceof AbstractTransfer ? $this->productAvailabilityCriteria->toArray(true, true) : $this->productAvailabilityCriteria,
            'quantity' => $this->quantity,
        ];
    }
}
