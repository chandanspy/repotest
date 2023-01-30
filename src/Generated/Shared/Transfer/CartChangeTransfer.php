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
class CartChangeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const OPERATION = 'operation';

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

    /**
     * @var string|null
     */
    protected $operation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote' => 'quote',
        'Quote' => 'quote',
        'items' => 'items',
        'Items' => 'items',
        'operation' => 'operation',
        'Operation' => 'operation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPERATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operation',
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
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCustomerPermission|ProductList|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|ShipmentCartConnector|ShoppingList
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCustomerPermission|ProductList|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|ShipmentCartConnector|ShoppingList
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCustomerPermission|ProductList|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|ShipmentCartConnector|ShoppingList
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCustomerPermission|ProductList|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|ShipmentCartConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCustomerPermission|ProductList|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|ShipmentCartConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|ConfigurableBundleCart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductImageCartConnector|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|SalesQuantity|ShipmentCartConnector|ShoppingList
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|ConfigurableBundleCart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductImageCartConnector|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|SalesQuantity|ShipmentCartConnector|ShoppingList
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|ConfigurableBundleCart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductImageCartConnector|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|SalesQuantity|ShipmentCartConnector|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget|AvailabilityCartConnector|Cart|ConfigurableBundleCart|DiscountPromotion|Merchant|PersistentCart|PriceCartConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinued|ProductImageCartConnector|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantity|SalesQuantity|ShipmentCartConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module Cart|DiscountPromotion|PriceCartConnector|ShipmentCartConnector
     *
     * @param string|null $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        $this->modifiedProperties[self::OPERATION] = true;

        return $this;
    }

    /**
     * @module Cart|DiscountPromotion|PriceCartConnector|ShipmentCartConnector
     *
     * @return string|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @module Cart|DiscountPromotion|PriceCartConnector|ShipmentCartConnector
     *
     * @param string|null $operation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperationOrFail($operation)
    {
        if ($operation === null) {
            $this->throwNullValueException(static::OPERATION);
        }

        return $this->setOperation($operation);
    }

    /**
     * @module Cart|DiscountPromotion|PriceCartConnector|ShipmentCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperationOrFail()
    {
        if ($this->operation === null) {
            $this->throwNullValueException(static::OPERATION);
        }

        return $this->operation;
    }

    /**
     * @module Cart|DiscountPromotion|PriceCartConnector|ShipmentCartConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperation()
    {
        $this->assertPropertyIsSet(self::OPERATION);

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
                case 'operation':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quote':
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
                case 'items':
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
                case 'operation':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
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
                case 'operation':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
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
        $this->items = $this->items ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'operation' => $this->operation,
            'quote' => $this->quote,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'operation' => $this->operation,
            'quote' => $this->quote,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'operation' => $this->operation instanceof AbstractTransfer ? $this->operation->toArray(true, false) : $this->operation,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'operation' => $this->operation instanceof AbstractTransfer ? $this->operation->toArray(true, true) : $this->operation,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
        ];
    }
}
