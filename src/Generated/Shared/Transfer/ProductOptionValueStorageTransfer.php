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
class ProductOptionValueStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_VALUE = 'idProductOptionValue';

    /**
     * @var string
     */
    public const IS_SELECTED = 'isSelected';

    /**
     * @var string
     */
    public const SKU = 'sku';

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
    public const VALUE = 'value';

    /**
     * @var int|null
     */
    protected $idProductOptionValue;

    /**
     * @var bool|null
     */
    protected $isSelected;

    /**
     * @var string|null
     */
    protected $sku;

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
    protected $value;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_option_value' => 'idProductOptionValue',
        'idProductOptionValue' => 'idProductOptionValue',
        'IdProductOptionValue' => 'idProductOptionValue',
        'is_selected' => 'isSelected',
        'isSelected' => 'isSelected',
        'IsSelected' => 'isSelected',
        'sku' => 'sku',
        'Sku' => 'sku',
        'price' => 'price',
        'Price' => 'price',
        'prices' => 'prices',
        'Prices' => 'prices',
        'value' => 'value',
        'Value' => 'value',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_OPTION_VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_option_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SELECTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_selected',
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
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
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
     * @module ProductOptionWidget|ProductOptionStorage|ProductOptionsRestApi
     *
     * @param int|null $idProductOptionValue
     *
     * @return $this
     */
    public function setIdProductOptionValue($idProductOptionValue)
    {
        $this->idProductOptionValue = $idProductOptionValue;
        $this->modifiedProperties[self::ID_PRODUCT_OPTION_VALUE] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ProductOptionStorage|ProductOptionsRestApi
     *
     * @return int|null
     */
    public function getIdProductOptionValue()
    {
        return $this->idProductOptionValue;
    }

    /**
     * @module ProductOptionWidget|ProductOptionStorage|ProductOptionsRestApi
     *
     * @param int|null $idProductOptionValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOptionValueOrFail($idProductOptionValue)
    {
        if ($idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->setIdProductOptionValue($idProductOptionValue);
    }

    /**
     * @module ProductOptionWidget|ProductOptionStorage|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOptionValueOrFail()
    {
        if ($this->idProductOptionValue === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_VALUE);
        }

        return $this->idProductOptionValue;
    }

    /**
     * @module ProductOptionWidget|ProductOptionStorage|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductOptionValue()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_OPTION_VALUE);

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @param bool|null $isSelected
     *
     * @return $this
     */
    public function setIsSelected($isSelected)
    {
        $this->isSelected = $isSelected;
        $this->modifiedProperties[self::IS_SELECTED] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @return bool|null
     */
    public function getIsSelected()
    {
        return $this->isSelected;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @param bool|null $isSelected
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSelectedOrFail($isSelected)
    {
        if ($isSelected === null) {
            $this->throwNullValueException(static::IS_SELECTED);
        }

        return $this->setIsSelected($isSelected);
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSelectedOrFail()
    {
        if ($this->isSelected === null) {
            $this->throwNullValueException(static::IS_SELECTED);
        }

        return $this->isSelected;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSelected()
    {
        $this->assertPropertyIsSet(self::IS_SELECTED);

        return $this;
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
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
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
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
     * @module ProductOptionStorage|ProductOptionsRestApi
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
     * @module ProductOptionStorage|ProductOptionsRestApi
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
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductOptionStorage
     *
     * @param mixed $prices
     *
     * @return $this
     */
    public function addPrices($prices)
    {
        $this->prices[] = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductOptionStorage
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
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module ProductOptionStorage|ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

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
                case 'idProductOptionValue':
                case 'isSelected':
                case 'sku':
                case 'price':
                case 'prices':
                case 'value':
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
                case 'idProductOptionValue':
                case 'isSelected':
                case 'sku':
                case 'price':
                case 'prices':
                case 'value':
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
                case 'idProductOptionValue':
                case 'isSelected':
                case 'sku':
                case 'price':
                case 'prices':
                case 'value':
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
            'idProductOptionValue' => $this->idProductOptionValue,
            'isSelected' => $this->isSelected,
            'sku' => $this->sku,
            'price' => $this->price,
            'prices' => $this->prices,
            'value' => $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue,
            'is_selected' => $this->isSelected,
            'sku' => $this->sku,
            'price' => $this->price,
            'prices' => $this->prices,
            'value' => $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, false) : $this->idProductOptionValue,
            'is_selected' => $this->isSelected instanceof AbstractTransfer ? $this->isSelected->toArray(true, false) : $this->isSelected,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductOptionValue' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, true) : $this->idProductOptionValue,
            'isSelected' => $this->isSelected instanceof AbstractTransfer ? $this->isSelected->toArray(true, true) : $this->isSelected,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
        ];
    }
}
