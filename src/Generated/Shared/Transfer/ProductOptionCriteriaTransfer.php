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
class ProductOptionCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_OPTION_IDS = 'productOptionIds';

    /**
     * @var string
     */
    public const PRODUCT_OPTION_GROUP_IS_ACTIVE = 'productOptionGroupIsActive';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_SKU = 'productConcreteSku';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var array
     */
    protected $productOptionIds = [];

    /**
     * @var bool|null
     */
    protected $productOptionGroupIsActive;

    /**
     * @var string|null
     */
    protected $productConcreteSku;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_option_ids' => 'productOptionIds',
        'productOptionIds' => 'productOptionIds',
        'ProductOptionIds' => 'productOptionIds',
        'product_option_group_is_active' => 'productOptionGroupIsActive',
        'productOptionGroupIsActive' => 'productOptionGroupIsActive',
        'ProductOptionGroupIsActive' => 'productOptionGroupIsActive',
        'product_concrete_sku' => 'productConcreteSku',
        'productConcreteSku' => 'productConcreteSku',
        'ProductConcreteSku' => 'productConcreteSku',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_OPTION_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_option_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTION_GROUP_IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'product_option_group_is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_sku',
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
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
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
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param array|null $productOptionIds
     *
     * @return $this
     */
    public function setProductOptionIds(array $productOptionIds = null)
    {
        if ($productOptionIds === null) {
            $productOptionIds = [];
        }

        $this->productOptionIds = $productOptionIds;
        $this->modifiedProperties[self::PRODUCT_OPTION_IDS] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return array
     */
    public function getProductOptionIds()
    {
        return $this->productOptionIds;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param mixed $productOptionIds
     *
     * @return $this
     */
    public function addProductOptionIds($productOptionIds)
    {
        $this->productOptionIds[] = $productOptionIds;
        $this->modifiedProperties[self::PRODUCT_OPTION_IDS] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_OPTION_IDS);

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param bool|null $productOptionGroupIsActive
     *
     * @return $this
     */
    public function setProductOptionGroupIsActive($productOptionGroupIsActive)
    {
        $this->productOptionGroupIsActive = $productOptionGroupIsActive;
        $this->modifiedProperties[self::PRODUCT_OPTION_GROUP_IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return bool|null
     */
    public function getProductOptionGroupIsActive()
    {
        return $this->productOptionGroupIsActive;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param bool|null $productOptionGroupIsActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOptionGroupIsActiveOrFail($productOptionGroupIsActive)
    {
        if ($productOptionGroupIsActive === null) {
            $this->throwNullValueException(static::PRODUCT_OPTION_GROUP_IS_ACTIVE);
        }

        return $this->setProductOptionGroupIsActive($productOptionGroupIsActive);
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getProductOptionGroupIsActiveOrFail()
    {
        if ($this->productOptionGroupIsActive === null) {
            $this->throwNullValueException(static::PRODUCT_OPTION_GROUP_IS_ACTIVE);
        }

        return $this->productOptionGroupIsActive;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionGroupIsActive()
    {
        $this->assertPropertyIsSet(self::PRODUCT_OPTION_GROUP_IS_ACTIVE);

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param string|null $productConcreteSku
     *
     * @return $this
     */
    public function setProductConcreteSku($productConcreteSku)
    {
        $this->productConcreteSku = $productConcreteSku;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_SKU] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return string|null
     */
    public function getProductConcreteSku()
    {
        return $this->productConcreteSku;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param string|null $productConcreteSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteSkuOrFail($productConcreteSku)
    {
        if ($productConcreteSku === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_SKU);
        }

        return $this->setProductConcreteSku($productConcreteSku);
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductConcreteSkuOrFail()
    {
        if ($this->productConcreteSku === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_SKU);
        }

        return $this->productConcreteSku;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteSku()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_SKU);

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
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
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
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
     * @module ProductOption|ShoppingListProductOptionConnector
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
     * @module ProductOption|ShoppingListProductOptionConnector
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
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

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
                case 'productOptionIds':
                case 'productOptionGroupIsActive':
                case 'productConcreteSku':
                case 'priceMode':
                case 'currencyIsoCode':
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
                case 'productOptionIds':
                case 'productOptionGroupIsActive':
                case 'productConcreteSku':
                case 'priceMode':
                case 'currencyIsoCode':
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
                case 'productOptionIds':
                case 'productOptionGroupIsActive':
                case 'productConcreteSku':
                case 'priceMode':
                case 'currencyIsoCode':
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
            'productOptionIds' => $this->productOptionIds,
            'productOptionGroupIsActive' => $this->productOptionGroupIsActive,
            'productConcreteSku' => $this->productConcreteSku,
            'priceMode' => $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_option_ids' => $this->productOptionIds,
            'product_option_group_is_active' => $this->productOptionGroupIsActive,
            'product_concrete_sku' => $this->productConcreteSku,
            'price_mode' => $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_option_ids' => $this->productOptionIds instanceof AbstractTransfer ? $this->productOptionIds->toArray(true, false) : $this->productOptionIds,
            'product_option_group_is_active' => $this->productOptionGroupIsActive instanceof AbstractTransfer ? $this->productOptionGroupIsActive->toArray(true, false) : $this->productOptionGroupIsActive,
            'product_concrete_sku' => $this->productConcreteSku instanceof AbstractTransfer ? $this->productConcreteSku->toArray(true, false) : $this->productConcreteSku,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productOptionIds' => $this->productOptionIds instanceof AbstractTransfer ? $this->productOptionIds->toArray(true, true) : $this->productOptionIds,
            'productOptionGroupIsActive' => $this->productOptionGroupIsActive instanceof AbstractTransfer ? $this->productOptionGroupIsActive->toArray(true, true) : $this->productOptionGroupIsActive,
            'productConcreteSku' => $this->productConcreteSku instanceof AbstractTransfer ? $this->productConcreteSku->toArray(true, true) : $this->productConcreteSku,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
        ];
    }
}
