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
class ShoppingListOverviewResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const ITEMS_COLLECTION = 'itemsCollection';

    /**
     * @var string
     */
    public const SHOPPING_LIST = 'shoppingList';

    /**
     * @var string
     */
    public const SHOPPING_LISTS = 'shoppingLists';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var \Generated\Shared\Transfer\ShoppingListItemCollectionTransfer|null
     */
    protected $itemsCollection;

    /**
     * @var \Generated\Shared\Transfer\ShoppingListTransfer|null
     */
    protected $shoppingList;

    /**
     * @var \Generated\Shared\Transfer\ShoppingListCollectionTransfer|null
     */
    protected $shoppingLists;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'items_collection' => 'itemsCollection',
        'itemsCollection' => 'itemsCollection',
        'ItemsCollection' => 'itemsCollection',
        'shopping_list' => 'shoppingList',
        'shoppingList' => 'shoppingList',
        'ShoppingList' => 'shoppingList',
        'shopping_lists' => 'shoppingLists',
        'shoppingLists' => 'shoppingLists',
        'ShoppingLists' => 'shoppingLists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\ShoppingListItemCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'items_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST => [
            'type' => 'Generated\Shared\Transfer\ShoppingListTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LISTS => [
            'type' => 'Generated\Shared\Transfer\ShoppingListCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_lists',
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
     * @module ShoppingListPage|ShoppingList
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param bool|null $isSuccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessOrFail($isSuccess)
    {
        if ($isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->setIsSuccess($isSuccess);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessOrFail()
    {
        if ($this->isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->isSuccess;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemCollectionTransfer|null $itemsCollection
     *
     * @return $this
     */
    public function setItemsCollection(ShoppingListItemCollectionTransfer $itemsCollection = null)
    {
        $this->itemsCollection = $itemsCollection;
        $this->modifiedProperties[self::ITEMS_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemCollectionTransfer|null
     */
    public function getItemsCollection()
    {
        return $this->itemsCollection;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemCollectionTransfer $itemsCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsCollectionOrFail(ShoppingListItemCollectionTransfer $itemsCollection)
    {
        return $this->setItemsCollection($itemsCollection);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemCollectionTransfer
     */
    public function getItemsCollectionOrFail()
    {
        if ($this->itemsCollection === null) {
            $this->throwNullValueException(static::ITEMS_COLLECTION);
        }

        return $this->itemsCollection;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsCollection()
    {
        $this->assertPropertyIsSet(self::ITEMS_COLLECTION);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListTransfer|null $shoppingList
     *
     * @return $this
     */
    public function setShoppingList(ShoppingListTransfer $shoppingList = null)
    {
        $this->shoppingList = $shoppingList;
        $this->modifiedProperties[self::SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return \Generated\Shared\Transfer\ShoppingListTransfer|null
     */
    public function getShoppingList()
    {
        return $this->shoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListTransfer $shoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListOrFail(ShoppingListTransfer $shoppingList)
    {
        return $this->setShoppingList($shoppingList);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListTransfer
     */
    public function getShoppingListOrFail()
    {
        if ($this->shoppingList === null) {
            $this->throwNullValueException(static::SHOPPING_LIST);
        }

        return $this->shoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingList()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListCollectionTransfer|null $shoppingLists
     *
     * @return $this
     */
    public function setShoppingLists(ShoppingListCollectionTransfer $shoppingLists = null)
    {
        $this->shoppingLists = $shoppingLists;
        $this->modifiedProperties[self::SHOPPING_LISTS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return \Generated\Shared\Transfer\ShoppingListCollectionTransfer|null
     */
    public function getShoppingLists()
    {
        return $this->shoppingLists;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListCollectionTransfer $shoppingLists
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListsOrFail(ShoppingListCollectionTransfer $shoppingLists)
    {
        return $this->setShoppingLists($shoppingLists);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListCollectionTransfer
     */
    public function getShoppingListsOrFail()
    {
        if ($this->shoppingLists === null) {
            $this->throwNullValueException(static::SHOPPING_LISTS);
        }

        return $this->shoppingLists;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingLists()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LISTS);

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
                case 'isSuccess':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'itemsCollection':
                case 'shoppingList':
                case 'shoppingLists':
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
                case 'isSuccess':
                    $values[$arrayKey] = $value;

                    break;
                case 'itemsCollection':
                case 'shoppingList':
                case 'shoppingLists':
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
                case 'isSuccess':
                    $values[$arrayKey] = $value;

                    break;
                case 'itemsCollection':
                case 'shoppingList':
                case 'shoppingLists':
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
            'isSuccess' => $this->isSuccess,
            'itemsCollection' => $this->itemsCollection,
            'shoppingList' => $this->shoppingList,
            'shoppingLists' => $this->shoppingLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'items_collection' => $this->itemsCollection,
            'shopping_list' => $this->shoppingList,
            'shopping_lists' => $this->shoppingLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'items_collection' => $this->itemsCollection instanceof AbstractTransfer ? $this->itemsCollection->toArray(true, false) : $this->itemsCollection,
            'shopping_list' => $this->shoppingList instanceof AbstractTransfer ? $this->shoppingList->toArray(true, false) : $this->shoppingList,
            'shopping_lists' => $this->shoppingLists instanceof AbstractTransfer ? $this->shoppingLists->toArray(true, false) : $this->shoppingLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'itemsCollection' => $this->itemsCollection instanceof AbstractTransfer ? $this->itemsCollection->toArray(true, true) : $this->itemsCollection,
            'shoppingList' => $this->shoppingList instanceof AbstractTransfer ? $this->shoppingList->toArray(true, true) : $this->shoppingList,
            'shoppingLists' => $this->shoppingLists instanceof AbstractTransfer ? $this->shoppingLists->toArray(true, true) : $this->shoppingLists,
        ];
    }
}
