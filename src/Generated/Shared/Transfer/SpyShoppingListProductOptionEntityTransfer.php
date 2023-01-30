<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShoppingListProductOptionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION = 'idShoppingListItemProductOption';

    /**
     * @var string
     */
    public const FK_PRODUCT_OPTION_VALUE = 'fkProductOptionValue';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_ITEM = 'fkShoppingListItem';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_ITEM = 'spyShoppingListItem';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_VALUE = 'spyProductOptionValue';

    /**
     * @var integer|null
     */
    protected $idShoppingListItemProductOption;

    /**
     * @var integer|null
     */
    protected $fkProductOptionValue;

    /**
     * @var integer|null
     */
    protected $fkShoppingListItem;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null
     */
    protected $spyShoppingListItem;

    /**
     * @var \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer|null
     */
    protected $spyProductOptionValue;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_item_product_option' => 'idShoppingListItemProductOption',
        'idShoppingListItemProductOption' => 'idShoppingListItemProductOption',
        'IdShoppingListItemProductOption' => 'idShoppingListItemProductOption',
        'fk_product_option_value' => 'fkProductOptionValue',
        'fkProductOptionValue' => 'fkProductOptionValue',
        'FkProductOptionValue' => 'fkProductOptionValue',
        'fk_shopping_list_item' => 'fkShoppingListItem',
        'fkShoppingListItem' => 'fkShoppingListItem',
        'FkShoppingListItem' => 'fkShoppingListItem',
        'spy_shopping_list_item' => 'spyShoppingListItem',
        'spyShoppingListItem' => 'spyShoppingListItem',
        'SpyShoppingListItem' => 'spyShoppingListItem',
        'spy_product_option_value' => 'spyProductOptionValue',
        'spyProductOptionValue' => 'spyProductOptionValue',
        'SpyProductOptionValue' => 'spyProductOptionValue',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item_product_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_OPTION_VALUE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_option_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_VALUE => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_value',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ShoppingListProductOptionConnector\Persistence\SpyShoppingListProductOption';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListItemProductOption
     *
     * @return $this
     */
    public function setIdShoppingListItemProductOption($idShoppingListItemProductOption)
    {
        $this->idShoppingListItemProductOption = $idShoppingListItemProductOption;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListItemProductOption()
    {
        return $this->idShoppingListItemProductOption;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListItemProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemProductOptionOrFail($idShoppingListItemProductOption)
    {
        if ($idShoppingListItemProductOption === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION);
        }

        return $this->setIdShoppingListItemProductOption($idShoppingListItemProductOption);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListItemProductOptionOrFail()
    {
        if ($this->idShoppingListItemProductOption === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION);
        }

        return $this->idShoppingListItemProductOption;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItemProductOption()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM_PRODUCT_OPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductOptionValue
     *
     * @return $this
     */
    public function setFkProductOptionValue($fkProductOptionValue)
    {
        $this->fkProductOptionValue = $fkProductOptionValue;
        $this->modifiedProperties[self::FK_PRODUCT_OPTION_VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductOptionValue()
    {
        return $this->fkProductOptionValue;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductOptionValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOptionValueOrFail($fkProductOptionValue)
    {
        if ($fkProductOptionValue === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_VALUE);
        }

        return $this->setFkProductOptionValue($fkProductOptionValue);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOptionValueOrFail()
    {
        if ($this->fkProductOptionValue === null) {
            $this->throwNullValueException(static::FK_PRODUCT_OPTION_VALUE);
        }

        return $this->fkProductOptionValue;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductOptionValue()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_OPTION_VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListItem
     *
     * @return $this
     */
    public function setFkShoppingListItem($fkShoppingListItem)
    {
        $this->fkShoppingListItem = $fkShoppingListItem;
        $this->modifiedProperties[self::FK_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingListItem()
    {
        return $this->fkShoppingListItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListItemOrFail($fkShoppingListItem)
    {
        if ($fkShoppingListItem === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_ITEM);
        }

        return $this->setFkShoppingListItem($fkShoppingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListItemOrFail()
    {
        if ($this->fkShoppingListItem === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_ITEM);
        }

        return $this->fkShoppingListItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingListItem()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null $spyShoppingListItem
     *
     * @return $this
     */
    public function setSpyShoppingListItem(SpyShoppingListItemEntityTransfer $spyShoppingListItem = null)
    {
        $this->spyShoppingListItem = $spyShoppingListItem;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null
     */
    public function getSpyShoppingListItem()
    {
        return $this->spyShoppingListItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer $spyShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListItemOrFail(SpyShoppingListItemEntityTransfer $spyShoppingListItem)
    {
        return $this->setSpyShoppingListItem($spyShoppingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer
     */
    public function getSpyShoppingListItemOrFail()
    {
        if ($this->spyShoppingListItem === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST_ITEM);
        }

        return $this->spyShoppingListItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListItem()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer|null $spyProductOptionValue
     *
     * @return $this
     */
    public function setSpyProductOptionValue(SpyProductOptionValueEntityTransfer $spyProductOptionValue = null)
    {
        $this->spyProductOptionValue = $spyProductOptionValue;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer|null
     */
    public function getSpyProductOptionValue()
    {
        return $this->spyProductOptionValue;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer $spyProductOptionValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductOptionValueOrFail(SpyProductOptionValueEntityTransfer $spyProductOptionValue)
    {
        return $this->setSpyProductOptionValue($spyProductOptionValue);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer
     */
    public function getSpyProductOptionValueOrFail()
    {
        if ($this->spyProductOptionValue === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_OPTION_VALUE);
        }

        return $this->spyProductOptionValue;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionValue()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_OPTION_VALUE);

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
                case 'idShoppingListItemProductOption':
                case 'fkProductOptionValue':
                case 'fkShoppingListItem':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListItem':
                case 'spyProductOptionValue':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idShoppingListItemProductOption':
                case 'fkProductOptionValue':
                case 'fkShoppingListItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItem':
                case 'spyProductOptionValue':
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
                case 'idShoppingListItemProductOption':
                case 'fkProductOptionValue':
                case 'fkShoppingListItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItem':
                case 'spyProductOptionValue':
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
            'idShoppingListItemProductOption' => $this->idShoppingListItemProductOption,
            'fkProductOptionValue' => $this->fkProductOptionValue,
            'fkShoppingListItem' => $this->fkShoppingListItem,
            'spyShoppingListItem' => $this->spyShoppingListItem,
            'spyProductOptionValue' => $this->spyProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item_product_option' => $this->idShoppingListItemProductOption,
            'fk_product_option_value' => $this->fkProductOptionValue,
            'fk_shopping_list_item' => $this->fkShoppingListItem,
            'spy_shopping_list_item' => $this->spyShoppingListItem,
            'spy_product_option_value' => $this->spyProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item_product_option' => $this->idShoppingListItemProductOption instanceof AbstractTransfer ? $this->idShoppingListItemProductOption->toArray(true, false) : $this->idShoppingListItemProductOption,
            'fk_product_option_value' => $this->fkProductOptionValue instanceof AbstractTransfer ? $this->fkProductOptionValue->toArray(true, false) : $this->fkProductOptionValue,
            'fk_shopping_list_item' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, false) : $this->fkShoppingListItem,
            'spy_shopping_list_item' => $this->spyShoppingListItem instanceof AbstractTransfer ? $this->spyShoppingListItem->toArray(true, false) : $this->spyShoppingListItem,
            'spy_product_option_value' => $this->spyProductOptionValue instanceof AbstractTransfer ? $this->spyProductOptionValue->toArray(true, false) : $this->spyProductOptionValue,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListItemProductOption' => $this->idShoppingListItemProductOption instanceof AbstractTransfer ? $this->idShoppingListItemProductOption->toArray(true, true) : $this->idShoppingListItemProductOption,
            'fkProductOptionValue' => $this->fkProductOptionValue instanceof AbstractTransfer ? $this->fkProductOptionValue->toArray(true, true) : $this->fkProductOptionValue,
            'fkShoppingListItem' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, true) : $this->fkShoppingListItem,
            'spyShoppingListItem' => $this->spyShoppingListItem instanceof AbstractTransfer ? $this->spyShoppingListItem->toArray(true, true) : $this->spyShoppingListItem,
            'spyProductOptionValue' => $this->spyProductOptionValue instanceof AbstractTransfer ? $this->spyProductOptionValue->toArray(true, true) : $this->spyProductOptionValue,
        ];
    }
}
