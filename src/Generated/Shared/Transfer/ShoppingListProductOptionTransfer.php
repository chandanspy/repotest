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
class ShoppingListProductOptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PRODUCT_OPTION = 'idShoppingListProductOption';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM = 'idShoppingListItem';

    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_VALUE = 'idProductOptionValue';

    /**
     * @var int|null
     */
    protected $idShoppingListProductOption;

    /**
     * @var int|null
     */
    protected $idShoppingListItem;

    /**
     * @var int|null
     */
    protected $idProductOptionValue;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_product_option' => 'idShoppingListProductOption',
        'idShoppingListProductOption' => 'idShoppingListProductOption',
        'IdShoppingListProductOption' => 'idShoppingListProductOption',
        'id_shopping_list_item' => 'idShoppingListItem',
        'idShoppingListItem' => 'idShoppingListItem',
        'IdShoppingListItem' => 'idShoppingListItem',
        'id_product_option_value' => 'idProductOptionValue',
        'idProductOptionValue' => 'idProductOptionValue',
        'IdProductOptionValue' => 'idProductOptionValue',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_PRODUCT_OPTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_product_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @param int|null $idShoppingListProductOption
     *
     * @return $this
     */
    public function setIdShoppingListProductOption($idShoppingListProductOption)
    {
        $this->idShoppingListProductOption = $idShoppingListProductOption;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_PRODUCT_OPTION] = true;

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @return int|null
     */
    public function getIdShoppingListProductOption()
    {
        return $this->idShoppingListProductOption;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @param int|null $idShoppingListProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListProductOptionOrFail($idShoppingListProductOption)
    {
        if ($idShoppingListProductOption === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PRODUCT_OPTION);
        }

        return $this->setIdShoppingListProductOption($idShoppingListProductOption);
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListProductOptionOrFail()
    {
        if ($this->idShoppingListProductOption === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PRODUCT_OPTION);
        }

        return $this->idShoppingListProductOption;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListProductOption()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_PRODUCT_OPTION);

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @param int|null $idShoppingListItem
     *
     * @return $this
     */
    public function setIdShoppingListItem($idShoppingListItem)
    {
        $this->idShoppingListItem = $idShoppingListItem;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @return int|null
     */
    public function getIdShoppingListItem()
    {
        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @param int|null $idShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemOrFail($idShoppingListItem)
    {
        if ($idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->setIdShoppingListItem($idShoppingListItem);
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListItemOrFail()
    {
        if ($this->idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItem()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector
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
     * @module ShoppingListProductOptionConnector
     *
     * @return int|null
     */
    public function getIdProductOptionValue()
    {
        return $this->idProductOptionValue;
    }

    /**
     * @module ShoppingListProductOptionConnector
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
     * @module ShoppingListProductOptionConnector
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
     * @module ShoppingListProductOptionConnector
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
                case 'idShoppingListProductOption':
                case 'idShoppingListItem':
                case 'idProductOptionValue':
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
                case 'idShoppingListProductOption':
                case 'idShoppingListItem':
                case 'idProductOptionValue':
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
                case 'idShoppingListProductOption':
                case 'idShoppingListItem':
                case 'idProductOptionValue':
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
            'idShoppingListProductOption' => $this->idShoppingListProductOption,
            'idShoppingListItem' => $this->idShoppingListItem,
            'idProductOptionValue' => $this->idProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_product_option' => $this->idShoppingListProductOption,
            'id_shopping_list_item' => $this->idShoppingListItem,
            'id_product_option_value' => $this->idProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_product_option' => $this->idShoppingListProductOption instanceof AbstractTransfer ? $this->idShoppingListProductOption->toArray(true, false) : $this->idShoppingListProductOption,
            'id_shopping_list_item' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, false) : $this->idShoppingListItem,
            'id_product_option_value' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, false) : $this->idProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListProductOption' => $this->idShoppingListProductOption instanceof AbstractTransfer ? $this->idShoppingListProductOption->toArray(true, true) : $this->idShoppingListProductOption,
            'idShoppingListItem' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, true) : $this->idShoppingListItem,
            'idProductOptionValue' => $this->idProductOptionValue instanceof AbstractTransfer ? $this->idProductOptionValue->toArray(true, true) : $this->idProductOptionValue,
        ];
    }
}
