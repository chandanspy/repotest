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
class CurrentProductPriceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SUM_PRICE = 'sumPrice';

    /**
     * @deprecated Use priceDataByPriceType instead.
     */
    public const PRICE_DATA = 'priceData';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

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
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const PRICE_DATA_BY_PRICE_TYPE = 'priceDataByPriceType';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const PRICE_DIMENSION = 'priceDimension';

    /**
     * @var int|null
     */
    protected $sumPrice;

    /**
     * @var string|null
     */
    protected $priceData;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var array
     */
    protected $priceDataByPriceType = [];

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    protected $priceDimension;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sum_price' => 'sumPrice',
        'sumPrice' => 'sumPrice',
        'SumPrice' => 'sumPrice',
        'price_data' => 'priceData',
        'priceData' => 'priceData',
        'PriceData' => 'priceData',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'price' => 'price',
        'Price' => 'price',
        'prices' => 'prices',
        'Prices' => 'prices',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'price_data_by_price_type' => 'priceDataByPriceType',
        'priceDataByPriceType' => 'priceDataByPriceType',
        'PriceDataByPriceType' => 'priceDataByPriceType',
        'currency' => 'currency',
        'Currency' => 'currency',
        'price_dimension' => 'priceDimension',
        'priceDimension' => 'priceDimension',
        'PriceDimension' => 'priceDimension',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SUM_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DATA_BY_PRICE_TYPE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'price_data_by_price_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\CurrencyTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DIMENSION => [
            'type' => 'Generated\Shared\Transfer\PriceProductDimensionTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_dimension',
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
     * @module ConfigurableBundlePage|QuickOrderPage|PriceProduct|ShoppingList
     *
     * @param int|null $sumPrice
     *
     * @return $this
     */
    public function setSumPrice($sumPrice)
    {
        $this->sumPrice = $sumPrice;
        $this->modifiedProperties[self::SUM_PRICE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|PriceProduct|ShoppingList
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->sumPrice;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|PriceProduct|ShoppingList
     *
     * @param int|null $sumPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumPriceOrFail($sumPrice)
    {
        if ($sumPrice === null) {
            $this->throwNullValueException(static::SUM_PRICE);
        }

        return $this->setSumPrice($sumPrice);
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|PriceProduct|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumPriceOrFail()
    {
        if ($this->sumPrice === null) {
            $this->throwNullValueException(static::SUM_PRICE);
        }

        return $this->sumPrice;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|PriceProduct|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumPrice()
    {
        $this->assertPropertyIsSet(self::SUM_PRICE);

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductVolumesRestApi|PriceProduct
     *
     * @deprecated Use priceDataByPriceType instead.
     *
     * @param string|null $priceData
     *
     * @return $this
     */
    public function setPriceData($priceData)
    {
        $this->priceData = $priceData;
        $this->modifiedProperties[self::PRICE_DATA] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductVolumesRestApi|PriceProduct
     *
     * @deprecated Use priceDataByPriceType instead.
     *
     * @return string|null
     */
    public function getPriceData()
    {
        return $this->priceData;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductVolumesRestApi|PriceProduct
     *
     * @deprecated Use priceDataByPriceType instead.
     *
     * @param string|null $priceData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDataOrFail($priceData)
    {
        if ($priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->setPriceData($priceData);
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductVolumesRestApi|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use priceDataByPriceType instead.
     *
     * @return string
     */
    public function getPriceDataOrFail()
    {
        if ($this->priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->priceData;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProductVolumesRestApi|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use priceDataByPriceType instead.
     *
     * @return $this
     */
    public function requirePriceData()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA);

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProduct
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProduct
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProduct
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module PriceProductVolumeWidget|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module PriceProductVolumeWidget|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module CatalogPriceProductConnector|PriceProductStorage|PriceProduct|ProductPricesRestApi|ProductRelation|ShoppingList
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
     * @module PriceProductStorage|PriceProduct
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
     * @module PriceProductStorage|PriceProduct
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module PriceProductStorage|PriceProduct
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
     * @module PriceProductStorage|PriceProduct
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
     * @module PriceProductStorage|PriceProduct
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
     * @module PriceProductVolumesRestApi|PriceProduct
     *
     * @param array|null $priceDataByPriceType
     *
     * @return $this
     */
    public function setPriceDataByPriceType(array $priceDataByPriceType = null)
    {
        if ($priceDataByPriceType === null) {
            $priceDataByPriceType = [];
        }

        $this->priceDataByPriceType = $priceDataByPriceType;
        $this->modifiedProperties[self::PRICE_DATA_BY_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumesRestApi|PriceProduct
     *
     * @return array
     */
    public function getPriceDataByPriceType()
    {
        return $this->priceDataByPriceType;
    }

    /**
     * @module PriceProductVolumesRestApi|PriceProduct
     *
     * @param mixed $priceDataByPriceType
     *
     * @return $this
     */
    public function addPriceDataByPriceType($priceDataByPriceType)
    {
        $this->priceDataByPriceType[] = $priceDataByPriceType;
        $this->modifiedProperties[self::PRICE_DATA_BY_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumesRestApi|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDataByPriceType()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA_BY_PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module PriceProduct
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(CurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer|null $priceDimension
     *
     * @return $this
     */
    public function setPriceDimension(PriceProductDimensionTransfer $priceDimension = null)
    {
        $this->priceDimension = $priceDimension;
        $this->modifiedProperties[self::PRICE_DIMENSION] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    public function getPriceDimension()
    {
        return $this->priceDimension;
    }

    /**
     * @module PriceProduct
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceDimension
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDimensionOrFail(PriceProductDimensionTransfer $priceDimension)
    {
        return $this->setPriceDimension($priceDimension);
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer
     */
    public function getPriceDimensionOrFail()
    {
        if ($this->priceDimension === null) {
            $this->throwNullValueException(static::PRICE_DIMENSION);
        }

        return $this->priceDimension;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDimension()
    {
        $this->assertPropertyIsSet(self::PRICE_DIMENSION);

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
                case 'sumPrice':
                case 'priceData':
                case 'priceMode':
                case 'price':
                case 'prices':
                case 'quantity':
                case 'priceDataByPriceType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currency':
                case 'priceDimension':
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
                case 'sumPrice':
                case 'priceData':
                case 'priceMode':
                case 'price':
                case 'prices':
                case 'quantity':
                case 'priceDataByPriceType':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'priceDimension':
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
                case 'sumPrice':
                case 'priceData':
                case 'priceMode':
                case 'price':
                case 'prices':
                case 'quantity':
                case 'priceDataByPriceType':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                case 'priceDimension':
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
            'sumPrice' => $this->sumPrice,
            'priceData' => $this->priceData,
            'priceMode' => $this->priceMode,
            'price' => $this->price,
            'prices' => $this->prices,
            'quantity' => $this->quantity,
            'priceDataByPriceType' => $this->priceDataByPriceType,
            'currency' => $this->currency,
            'priceDimension' => $this->priceDimension,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sum_price' => $this->sumPrice,
            'price_data' => $this->priceData,
            'price_mode' => $this->priceMode,
            'price' => $this->price,
            'prices' => $this->prices,
            'quantity' => $this->quantity,
            'price_data_by_price_type' => $this->priceDataByPriceType,
            'currency' => $this->currency,
            'price_dimension' => $this->priceDimension,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sum_price' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, false) : $this->sumPrice,
            'price_data' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, false) : $this->priceData,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'price_data_by_price_type' => $this->priceDataByPriceType instanceof AbstractTransfer ? $this->priceDataByPriceType->toArray(true, false) : $this->priceDataByPriceType,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'price_dimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, false) : $this->priceDimension,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sumPrice' => $this->sumPrice instanceof AbstractTransfer ? $this->sumPrice->toArray(true, true) : $this->sumPrice,
            'priceData' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, true) : $this->priceData,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'priceDataByPriceType' => $this->priceDataByPriceType instanceof AbstractTransfer ? $this->priceDataByPriceType->toArray(true, true) : $this->priceDataByPriceType,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'priceDimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, true) : $this->priceDimension,
        ];
    }
}
