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
class StorageProductTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABLE = 'available';

    /**
     * @var string
     */
    public const PROMOTION_ITEM = 'promotionItem';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var bool|null
     */
    protected $available;

    /**
     * @var \Generated\Shared\Transfer\PromotionItemTransfer|null
     */
    protected $promotionItem;

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'available' => 'available',
        'Available' => 'available',
        'promotion_item' => 'promotionItem',
        'promotionItem' => 'promotionItem',
        'PromotionItem' => 'promotionItem',
        'price' => 'price',
        'Price' => 'price',
        'prices' => 'prices',
        'Prices' => 'prices',
        'sku' => 'sku',
        'Sku' => 'sku',
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'available',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROMOTION_ITEM => [
            'type' => 'Generated\Shared\Transfer\PromotionItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'promotion_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'prices',
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
        self::ID_PRODUCT_CONCRETE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete',
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
     * @module CmsContentWidgetProductConnector
     *
     * @param bool|null $available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        $this->modifiedProperties[self::AVAILABLE] = true;

        return $this;
    }

    /**
     * @module CmsContentWidgetProductConnector
     *
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @module CmsContentWidgetProductConnector
     *
     * @param bool|null $available
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableOrFail($available)
    {
        if ($available === null) {
            $this->throwNullValueException(static::AVAILABLE);
        }

        return $this->setAvailable($available);
    }

    /**
     * @module CmsContentWidgetProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAvailableOrFail()
    {
        if ($this->available === null) {
            $this->throwNullValueException(static::AVAILABLE);
        }

        return $this->available;
    }

    /**
     * @module CmsContentWidgetProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailable()
    {
        $this->assertPropertyIsSet(self::AVAILABLE);

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer|null $promotionItem
     *
     * @return $this
     */
    public function setPromotionItem(PromotionItemTransfer $promotionItem = null)
    {
        $this->promotionItem = $promotionItem;
        $this->modifiedProperties[self::PROMOTION_ITEM] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return \Generated\Shared\Transfer\PromotionItemTransfer|null
     */
    public function getPromotionItem()
    {
        return $this->promotionItem;
    }

    /**
     * @module DiscountPromotion
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer $promotionItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPromotionItemOrFail(PromotionItemTransfer $promotionItem)
    {
        return $this->setPromotionItem($promotionItem);
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PromotionItemTransfer
     */
    public function getPromotionItemOrFail()
    {
        if ($this->promotionItem === null) {
            $this->throwNullValueException(static::PROMOTION_ITEM);
        }

        return $this->promotionItem;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePromotionItem()
    {
        $this->assertPropertyIsSet(self::PROMOTION_ITEM);

        return $this;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @param int|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @param int|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

        return $this;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @param array|null $prices
     *
     * @return $this
     */
    public function setPrices(array $prices = null)
    {
        if ($prices === null) {
            $prices = [];
        }

        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @param mixed $price
     *
     * @return $this
     */
    public function addPrice($price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProduct|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module Product
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
     * @module Product
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module Product
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
     * @module Product
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
     * @module Product
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
     * @module ShoppingList
     *
     * @param int|null $idProductConcrete
     *
     * @return $this
     */
    public function setIdProductConcrete($idProductConcrete)
    {
        $this->idProductConcrete = $idProductConcrete;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idProductConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteOrFail($idProductConcrete)
    {
        if ($idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->setIdProductConcrete($idProductConcrete);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteOrFail()
    {
        if ($this->idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->idProductConcrete;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcrete()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE);

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
                case 'available':
                case 'price':
                case 'prices':
                case 'sku':
                case 'idProductConcrete':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'promotionItem':
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
                case 'available':
                case 'price':
                case 'prices':
                case 'sku':
                case 'idProductConcrete':
                    $values[$arrayKey] = $value;

                    break;
                case 'promotionItem':
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
                case 'available':
                case 'price':
                case 'prices':
                case 'sku':
                case 'idProductConcrete':
                    $values[$arrayKey] = $value;

                    break;
                case 'promotionItem':
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
            'available' => $this->available,
            'price' => $this->price,
            'prices' => $this->prices,
            'sku' => $this->sku,
            'idProductConcrete' => $this->idProductConcrete,
            'promotionItem' => $this->promotionItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'available' => $this->available,
            'price' => $this->price,
            'prices' => $this->prices,
            'sku' => $this->sku,
            'id_product_concrete' => $this->idProductConcrete,
            'promotion_item' => $this->promotionItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'available' => $this->available instanceof AbstractTransfer ? $this->available->toArray(true, false) : $this->available,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'promotion_item' => $this->promotionItem instanceof AbstractTransfer ? $this->promotionItem->toArray(true, false) : $this->promotionItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'available' => $this->available instanceof AbstractTransfer ? $this->available->toArray(true, true) : $this->available,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'promotionItem' => $this->promotionItem instanceof AbstractTransfer ? $this->promotionItem->toArray(true, true) : $this->promotionItem,
        ];
    }
}
