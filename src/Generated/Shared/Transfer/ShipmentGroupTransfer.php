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
class ShipmentGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const HASH = 'hash';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const CART_ITEMS = 'cartItems';

    /**
     * @var string
     */
    public const SHIPMENT = 'shipment';

    /**
     * @var string
     */
    public const STORE_CURRENCY_PRICE = 'storeCurrencyPrice';

    /**
     * @var string
     */
    public const AVAILABLE_SHIPMENT_METHODS = 'availableShipmentMethods';

    /**
     * @var string|null
     */
    protected $hash;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    protected $items;

    /**
     * @var array
     */
    protected $cartItems = [];

    /**
     * @var \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var int|null
     */
    protected $storeCurrencyPrice;

    /**
     * @var \Generated\Shared\Transfer\ShipmentMethodsTransfer|null
     */
    protected $availableShipmentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'hash' => 'hash',
        'Hash' => 'hash',
        'items' => 'items',
        'Items' => 'items',
        'cart_items' => 'cartItems',
        'cartItems' => 'cartItems',
        'CartItems' => 'cartItems',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'store_currency_price' => 'storeCurrencyPrice',
        'storeCurrencyPrice' => 'storeCurrencyPrice',
        'StoreCurrencyPrice' => 'storeCurrencyPrice',
        'available_shipment_methods' => 'availableShipmentMethods',
        'availableShipmentMethods' => 'availableShipmentMethods',
        'AvailableShipmentMethods' => 'availableShipmentMethods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'hash',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::CART_ITEMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'cart_items',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT => [
            'type' => 'Generated\Shared\Transfer\ShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_CURRENCY_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'store_currency_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\ShipmentMethodsTransfer',
            'type_shim' => null,
            'name_underscore' => 'available_shipment_methods',
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
     * @module CheckoutPage|CustomerPage|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        $this->modifiedProperties[self::HASH] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $hash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHashOrFail($hash)
    {
        if ($hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->setHash($hash);
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHashOrFail()
    {
        if ($this->hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->hash;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentCartConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHash()
    {
        $this->assertPropertyIsSet(self::HASH);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CustomerPage
     *
     * @param array|null $cartItems
     *
     * @return $this
     */
    public function setCartItems(array $cartItems = null)
    {
        if ($cartItems === null) {
            $cartItems = [];
        }

        $this->cartItems = $cartItems;
        $this->modifiedProperties[self::CART_ITEMS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage
     *
     * @return array
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * @module CheckoutPage|CustomerPage
     *
     * @param mixed $cartItem
     *
     * @return $this
     */
    public function addCartItem($cartItem)
    {
        $this->cartItems[] = $cartItem;
        $this->modifiedProperties[self::CART_ITEMS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartItems()
    {
        $this->assertPropertyIsSet(self::CART_ITEMS);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|QuoteApprovalShipmentConnector|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer|null $shipment
     *
     * @return $this
     */
    public function setShipment(ShipmentTransfer $shipment = null)
    {
        $this->shipment = $shipment;
        $this->modifiedProperties[self::SHIPMENT] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|QuoteApprovalShipmentConnector|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|QuoteApprovalShipmentConnector|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer $shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentOrFail(ShipmentTransfer $shipment)
    {
        return $this->setShipment($shipment);
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|QuoteApprovalShipmentConnector|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer
     */
    public function getShipmentOrFail()
    {
        if ($this->shipment === null) {
            $this->throwNullValueException(static::SHIPMENT);
        }

        return $this->shipment;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|Oms|QuoteApprovalShipmentConnector|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipment()
    {
        $this->assertPropertyIsSet(self::SHIPMENT);

        return $this;
    }

    /**
     * @module QuoteApprovalShipmentConnector
     *
     * @param int|null $storeCurrencyPrice
     *
     * @return $this
     */
    public function setStoreCurrencyPrice($storeCurrencyPrice)
    {
        $this->storeCurrencyPrice = $storeCurrencyPrice;
        $this->modifiedProperties[self::STORE_CURRENCY_PRICE] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalShipmentConnector
     *
     * @return int|null
     */
    public function getStoreCurrencyPrice()
    {
        return $this->storeCurrencyPrice;
    }

    /**
     * @module QuoteApprovalShipmentConnector
     *
     * @param int|null $storeCurrencyPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreCurrencyPriceOrFail($storeCurrencyPrice)
    {
        if ($storeCurrencyPrice === null) {
            $this->throwNullValueException(static::STORE_CURRENCY_PRICE);
        }

        return $this->setStoreCurrencyPrice($storeCurrencyPrice);
    }

    /**
     * @module QuoteApprovalShipmentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getStoreCurrencyPriceOrFail()
    {
        if ($this->storeCurrencyPrice === null) {
            $this->throwNullValueException(static::STORE_CURRENCY_PRICE);
        }

        return $this->storeCurrencyPrice;
    }

    /**
     * @module QuoteApprovalShipmentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreCurrencyPrice()
    {
        $this->assertPropertyIsSet(self::STORE_CURRENCY_PRICE);

        return $this;
    }

    /**
     * @module Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsTransfer|null $availableShipmentMethods
     *
     * @return $this
     */
    public function setAvailableShipmentMethods(ShipmentMethodsTransfer $availableShipmentMethods = null)
    {
        $this->availableShipmentMethods = $availableShipmentMethods;
        $this->modifiedProperties[self::AVAILABLE_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsTransfer|null
     */
    public function getAvailableShipmentMethods()
    {
        return $this->availableShipmentMethods;
    }

    /**
     * @module Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodsTransfer $availableShipmentMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableShipmentMethodsOrFail(ShipmentMethodsTransfer $availableShipmentMethods)
    {
        return $this->setAvailableShipmentMethods($availableShipmentMethods);
    }

    /**
     * @module Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsTransfer
     */
    public function getAvailableShipmentMethodsOrFail()
    {
        if ($this->availableShipmentMethods === null) {
            $this->throwNullValueException(static::AVAILABLE_SHIPMENT_METHODS);
        }

        return $this->availableShipmentMethods;
    }

    /**
     * @module Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableShipmentMethods()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_SHIPMENT_METHODS);

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
                case 'hash':
                case 'cartItems':
                case 'storeCurrencyPrice':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shipment':
                case 'availableShipmentMethods':
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
                case 'hash':
                case 'cartItems':
                case 'storeCurrencyPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipment':
                case 'availableShipmentMethods':
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
                case 'hash':
                case 'cartItems':
                case 'storeCurrencyPrice':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipment':
                case 'availableShipmentMethods':
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
            'hash' => $this->hash,
            'cartItems' => $this->cartItems,
            'storeCurrencyPrice' => $this->storeCurrencyPrice,
            'shipment' => $this->shipment,
            'availableShipmentMethods' => $this->availableShipmentMethods,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'hash' => $this->hash,
            'cart_items' => $this->cartItems,
            'store_currency_price' => $this->storeCurrencyPrice,
            'shipment' => $this->shipment,
            'available_shipment_methods' => $this->availableShipmentMethods,
            'items' => $this->items,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, false) : $this->hash,
            'cart_items' => $this->cartItems instanceof AbstractTransfer ? $this->cartItems->toArray(true, false) : $this->cartItems,
            'store_currency_price' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, false) : $this->storeCurrencyPrice,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'available_shipment_methods' => $this->availableShipmentMethods instanceof AbstractTransfer ? $this->availableShipmentMethods->toArray(true, false) : $this->availableShipmentMethods,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, true) : $this->hash,
            'cartItems' => $this->cartItems instanceof AbstractTransfer ? $this->cartItems->toArray(true, true) : $this->cartItems,
            'storeCurrencyPrice' => $this->storeCurrencyPrice instanceof AbstractTransfer ? $this->storeCurrencyPrice->toArray(true, true) : $this->storeCurrencyPrice,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'availableShipmentMethods' => $this->availableShipmentMethods instanceof AbstractTransfer ? $this->availableShipmentMethods->toArray(true, true) : $this->availableShipmentMethods,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
        ];
    }
}
