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
class RestOrderItemProductOptionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OPTION_GROUP_NAME = 'optionGroupName';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const OPTION_NAME = 'optionName';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string|null
     */
    protected $optionGroupName;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $optionName;

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'option_group_name' => 'optionGroupName',
        'optionGroupName' => 'optionGroupName',
        'OptionGroupName' => 'optionGroupName',
        'sku' => 'sku',
        'Sku' => 'sku',
        'option_name' => 'optionName',
        'optionName' => 'optionName',
        'OptionName' => 'optionName',
        'price' => 'price',
        'Price' => 'price',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OPTION_GROUP_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'option_group_name',
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
        self::OPTION_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'option_name',
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
    ];

    /**
     * @module ProductOptionsRestApi
     *
     * @param string|null $optionGroupName
     *
     * @return $this
     */
    public function setOptionGroupName($optionGroupName)
    {
        $this->optionGroupName = $optionGroupName;
        $this->modifiedProperties[self::OPTION_GROUP_NAME] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getOptionGroupName()
    {
        return $this->optionGroupName;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param string|null $optionGroupName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOptionGroupNameOrFail($optionGroupName)
    {
        if ($optionGroupName === null) {
            $this->throwNullValueException(static::OPTION_GROUP_NAME);
        }

        return $this->setOptionGroupName($optionGroupName);
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOptionGroupNameOrFail()
    {
        if ($this->optionGroupName === null) {
            $this->throwNullValueException(static::OPTION_GROUP_NAME);
        }

        return $this->optionGroupName;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptionGroupName()
    {
        $this->assertPropertyIsSet(self::OPTION_GROUP_NAME);

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
     *
     * @param string|null $optionName
     *
     * @return $this
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;
        $this->modifiedProperties[self::OPTION_NAME] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param string|null $optionName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOptionNameOrFail($optionName)
    {
        if ($optionName === null) {
            $this->throwNullValueException(static::OPTION_NAME);
        }

        return $this->setOptionName($optionName);
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOptionNameOrFail()
    {
        if ($this->optionName === null) {
            $this->throwNullValueException(static::OPTION_NAME);
        }

        return $this->optionName;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptionName()
    {
        $this->assertPropertyIsSet(self::OPTION_NAME);

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
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
                case 'optionGroupName':
                case 'sku':
                case 'optionName':
                case 'price':
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
                case 'optionGroupName':
                case 'sku':
                case 'optionName':
                case 'price':
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
                case 'optionGroupName':
                case 'sku':
                case 'optionName':
                case 'price':
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
            'optionGroupName' => $this->optionGroupName,
            'sku' => $this->sku,
            'optionName' => $this->optionName,
            'price' => $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'option_group_name' => $this->optionGroupName,
            'sku' => $this->sku,
            'option_name' => $this->optionName,
            'price' => $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'option_group_name' => $this->optionGroupName instanceof AbstractTransfer ? $this->optionGroupName->toArray(true, false) : $this->optionGroupName,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'option_name' => $this->optionName instanceof AbstractTransfer ? $this->optionName->toArray(true, false) : $this->optionName,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'optionGroupName' => $this->optionGroupName instanceof AbstractTransfer ? $this->optionGroupName->toArray(true, true) : $this->optionGroupName,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'optionName' => $this->optionName instanceof AbstractTransfer ? $this->optionName->toArray(true, true) : $this->optionName,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
        ];
    }
}
