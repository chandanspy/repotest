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
class ShoppingListFromCartRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NEW_SHOPPING_LIST_NAME = 'newShoppingListName';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST = 'idShoppingList';

    /**
     * @var string
     */
    public const SHOPPING_LIST_NAME = 'shoppingListName';

    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string|null
     */
    protected $newShoppingListName;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var int|null
     */
    protected $idShoppingList;

    /**
     * @var string|null
     */
    protected $shoppingListName;

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'new_shopping_list_name' => 'newShoppingListName',
        'newShoppingListName' => 'newShoppingListName',
        'NewShoppingListName' => 'newShoppingListName',
        'customer' => 'customer',
        'Customer' => 'customer',
        'id_shopping_list' => 'idShoppingList',
        'idShoppingList' => 'idShoppingList',
        'IdShoppingList' => 'idShoppingList',
        'shopping_list_name' => 'shoppingListName',
        'shoppingListName' => 'shoppingListName',
        'ShoppingListName' => 'shoppingListName',
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NEW_SHOPPING_LIST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_shopping_list_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
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
     * @module ShoppingListWidget
     *
     * @param string|null $newShoppingListName
     *
     * @return $this
     */
    public function setNewShoppingListName($newShoppingListName)
    {
        $this->newShoppingListName = $newShoppingListName;
        $this->modifiedProperties[self::NEW_SHOPPING_LIST_NAME] = true;

        return $this;
    }

    /**
     * @module ShoppingListWidget
     *
     * @return string|null
     */
    public function getNewShoppingListName()
    {
        return $this->newShoppingListName;
    }

    /**
     * @module ShoppingListWidget
     *
     * @param string|null $newShoppingListName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewShoppingListNameOrFail($newShoppingListName)
    {
        if ($newShoppingListName === null) {
            $this->throwNullValueException(static::NEW_SHOPPING_LIST_NAME);
        }

        return $this->setNewShoppingListName($newShoppingListName);
    }

    /**
     * @module ShoppingListWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewShoppingListNameOrFail()
    {
        if ($this->newShoppingListName === null) {
            $this->throwNullValueException(static::NEW_SHOPPING_LIST_NAME);
        }

        return $this->newShoppingListName;
    }

    /**
     * @module ShoppingListWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewShoppingListName()
    {
        $this->assertPropertyIsSet(self::NEW_SHOPPING_LIST_NAME);

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param int|null $idShoppingList
     *
     * @return $this
     */
    public function setIdShoppingList($idShoppingList)
    {
        $this->idShoppingList = $idShoppingList;
        $this->modifiedProperties[self::ID_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingList()
    {
        return $this->idShoppingList;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param int|null $idShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListOrFail($idShoppingList)
    {
        if ($idShoppingList === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST);
        }

        return $this->setIdShoppingList($idShoppingList);
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListOrFail()
    {
        if ($this->idShoppingList === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST);
        }

        return $this->idShoppingList;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingList()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param string|null $shoppingListName
     *
     * @return $this
     */
    public function setShoppingListName($shoppingListName)
    {
        $this->shoppingListName = $shoppingListName;
        $this->modifiedProperties[self::SHOPPING_LIST_NAME] = true;

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @return string|null
     */
    public function getShoppingListName()
    {
        return $this->shoppingListName;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param string|null $shoppingListName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListNameOrFail($shoppingListName)
    {
        if ($shoppingListName === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_NAME);
        }

        return $this->setShoppingListName($shoppingListName);
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShoppingListNameOrFail()
    {
        if ($this->shoppingListName === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_NAME);
        }

        return $this->shoppingListName;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListName()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_NAME);

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param int|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @param int|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

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
                case 'newShoppingListName':
                case 'idShoppingList':
                case 'shoppingListName':
                case 'idQuote':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customer':
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
                case 'newShoppingListName':
                case 'idShoppingList':
                case 'shoppingListName':
                case 'idQuote':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
                case 'newShoppingListName':
                case 'idShoppingList':
                case 'shoppingListName':
                case 'idQuote':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
            'newShoppingListName' => $this->newShoppingListName,
            'idShoppingList' => $this->idShoppingList,
            'shoppingListName' => $this->shoppingListName,
            'idQuote' => $this->idQuote,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'new_shopping_list_name' => $this->newShoppingListName,
            'id_shopping_list' => $this->idShoppingList,
            'shopping_list_name' => $this->shoppingListName,
            'id_quote' => $this->idQuote,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'new_shopping_list_name' => $this->newShoppingListName instanceof AbstractTransfer ? $this->newShoppingListName->toArray(true, false) : $this->newShoppingListName,
            'id_shopping_list' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, false) : $this->idShoppingList,
            'shopping_list_name' => $this->shoppingListName instanceof AbstractTransfer ? $this->shoppingListName->toArray(true, false) : $this->shoppingListName,
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'newShoppingListName' => $this->newShoppingListName instanceof AbstractTransfer ? $this->newShoppingListName->toArray(true, true) : $this->newShoppingListName,
            'idShoppingList' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, true) : $this->idShoppingList,
            'shoppingListName' => $this->shoppingListName instanceof AbstractTransfer ? $this->shoppingListName->toArray(true, true) : $this->shoppingListName,
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
        ];
    }
}
