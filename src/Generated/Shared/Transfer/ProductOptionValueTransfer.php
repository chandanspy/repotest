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
class ProductOptionValueTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_VALUE = 'idProductOptionValue';

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
    public const FK_PRODUCT_OPTION_GROUP = 'fkProductOptionGroup';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const OPTION_HASH = 'optionHash';

    /**
     * @var int|null
     */
    protected $idProductOptionValue;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    protected $prices;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $fkProductOptionGroup;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $optionHash;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_option_value' => 'idProductOptionValue',
        'idProductOptionValue' => 'idProductOptionValue',
        'IdProductOptionValue' => 'idProductOptionValue',
        'prices' => 'prices',
        'Prices' => 'prices',
        'sku' => 'sku',
        'Sku' => 'sku',
        'fk_product_option_group' => 'fkProductOptionGroup',
        'fkProductOptionGroup' => 'fkProductOptionGroup',
        'FkProductOptionGroup' => 'fkProductOptionGroup',
        'value' => 'value',
        'Value' => 'value',
        'option_hash' => 'optionHash',
        'optionHash' => 'optionHash',
        'OptionHash' => 'optionHash',
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
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
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
        self::FK_PRODUCT_OPTION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_option_group',
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
        self::OPTION_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'option_hash',
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @return int|null
     */
    public function getIdProductOptionValue()
    {
        return $this->idProductOptionValue;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[] $prices
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
     * @module ProductOption
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductOption
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $price
     *
     * @return $this
     */
    public function addPrice(MoneyValueTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param int|null $fkProductOptionGroup
     *
     * @return $this
     */
    public function setFkProductOptionGroup($fkProductOptionGroup)
    {
        $this->fkProductOptionGroup = $fkProductOptionGroup;
        $this->modifiedProperties[self::FK_PRODUCT_OPTION_GROUP] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return int|null
     */
    public function getFkProductOptionGroup()
    {
        return $this->fkProductOptionGroup;
    }

    /**
     * @module ProductOption
     *
     * @param int|null $fkProductOptionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOptionGroupOrFail($fkProductOptionGroup)
    {
        if ($fkProductOptionGroup === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_GROUP);
        }

        return $this->setFkProductOptionGroup($fkProductOptionGroup);
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOptionGroupOrFail()
    {
        if ($this->fkProductOptionGroup === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_GROUP);
        }

        return $this->fkProductOptionGroup;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductOptionGroup()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_OPTION_GROUP);

        return $this;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param string|null $optionHash
     *
     * @return $this
     */
    public function setOptionHash($optionHash)
    {
        $this->optionHash = $optionHash;
        $this->modifiedProperties[self::OPTION_HASH] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return string|null
     */
    public function getOptionHash()
    {
        return $this->optionHash;
    }

    /**
     * @module ProductOption
     *
     * @param string|null $optionHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOptionHashOrFail($optionHash)
    {
        if ($optionHash === null) {
            $this->throwNullValueException(static::OPTION_HASH);
        }

        return $this->setOptionHash($optionHash);
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOptionHashOrFail()
    {
        if ($this->optionHash === null) {
            $this->throwNullValueException(static::OPTION_HASH);
        }

        return $this->optionHash;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptionHash()
    {
        $this->assertPropertyIsSet(self::OPTION_HASH);

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
                case 'sku':
                case 'fkProductOptionGroup':
                case 'value':
                case 'optionHash':
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
                case 'idProductOptionValue':
                case 'sku':
                case 'fkProductOptionGroup':
                case 'value':
                case 'optionHash':
                    $values[$arrayKey] = $value;

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
                case 'idProductOptionValue':
                case 'sku':
                case 'fkProductOptionGroup':
                case 'value':
                case 'optionHash':
                    $values[$arrayKey] = $value;

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
            'idProductOptionValue' => $this->idProductOptionValue,
            'sku' => $this->sku,
            'fkProductOptionGroup' => $this->fkProductOptionGroup,
            'value' => $this->value,
            'optionHash' => $this->optionHash,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue,
            'sku' => $this->sku,
            'fk_product_option_group' => $this->fkProductOptionGroup,
            'value' => $this->value,
            'option_hash' => $this->optionHash,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_value' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, false) : $this->idProductOptionValue,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'fk_product_option_group' => $this->fkProductOptionGroup instanceof AbstractTransfer ? $this->fkProductOptionGroup->toArray(true, false) : $this->fkProductOptionGroup,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'option_hash' => $this->optionHash instanceof AbstractTransfer ? $this->optionHash->toArray(true, false) : $this->optionHash,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductOptionValue' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, true) : $this->idProductOptionValue,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'fkProductOptionGroup' => $this->fkProductOptionGroup instanceof AbstractTransfer ? $this->fkProductOptionGroup->toArray(true, true) : $this->fkProductOptionGroup,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'optionHash' => $this->optionHash instanceof AbstractTransfer ? $this->optionHash->toArray(true, true) : $this->optionHash,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
