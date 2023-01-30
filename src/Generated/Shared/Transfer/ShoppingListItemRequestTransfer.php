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
class ShoppingListItemRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHOPPING_LIST_ITEM = 'shoppingListItem';

    /**
     * @var string
     */
    public const SHOPPING_LIST_UUID = 'shoppingListUuid';

    /**
     * @var string
     */
    public const COMPANY_USER_UUID = 'companyUserUuid';

    /**
     * @var string
     */
    public const ERROR_IDENTIFIERS = 'errorIdentifiers';

    /**
     * @var \Generated\Shared\Transfer\ShoppingListItemTransfer|null
     */
    protected $shoppingListItem;

    /**
     * @var string|null
     */
    protected $shoppingListUuid;

    /**
     * @var string|null
     */
    protected $companyUserUuid;

    /**
     * @var string[]
     */
    protected $errorIdentifiers = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shopping_list_item' => 'shoppingListItem',
        'shoppingListItem' => 'shoppingListItem',
        'ShoppingListItem' => 'shoppingListItem',
        'shopping_list_uuid' => 'shoppingListUuid',
        'shoppingListUuid' => 'shoppingListUuid',
        'ShoppingListUuid' => 'shoppingListUuid',
        'company_user_uuid' => 'companyUserUuid',
        'companyUserUuid' => 'companyUserUuid',
        'CompanyUserUuid' => 'companyUserUuid',
        'error_identifiers' => 'errorIdentifiers',
        'errorIdentifiers' => 'errorIdentifiers',
        'ErrorIdentifiers' => 'errorIdentifiers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHOPPING_LIST_ITEM => [
            'type' => 'Generated\Shared\Transfer\ShoppingListItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_user_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_IDENTIFIERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'error_identifiers',
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
     * @module ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer|null $shoppingListItem
     *
     * @return $this
     */
    public function setShoppingListItem(ShoppingListItemTransfer $shoppingListItem = null)
    {
        $this->shoppingListItem = $shoppingListItem;
        $this->modifiedProperties[self::SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer|null
     */
    public function getShoppingListItem()
    {
        return $this->shoppingListItem;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer $shoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListItemOrFail(ShoppingListItemTransfer $shoppingListItem)
    {
        return $this->setShoppingListItem($shoppingListItem);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemTransfer
     */
    public function getShoppingListItemOrFail()
    {
        if ($this->shoppingListItem === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_ITEM);
        }

        return $this->shoppingListItem;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListItem()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $shoppingListUuid
     *
     * @return $this
     */
    public function setShoppingListUuid($shoppingListUuid)
    {
        $this->shoppingListUuid = $shoppingListUuid;
        $this->modifiedProperties[self::SHOPPING_LIST_UUID] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getShoppingListUuid()
    {
        return $this->shoppingListUuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $shoppingListUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListUuidOrFail($shoppingListUuid)
    {
        if ($shoppingListUuid === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_UUID);
        }

        return $this->setShoppingListUuid($shoppingListUuid);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShoppingListUuidOrFail()
    {
        if ($this->shoppingListUuid === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_UUID);
        }

        return $this->shoppingListUuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListUuid()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_UUID);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $companyUserUuid
     *
     * @return $this
     */
    public function setCompanyUserUuid($companyUserUuid)
    {
        $this->companyUserUuid = $companyUserUuid;
        $this->modifiedProperties[self::COMPANY_USER_UUID] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getCompanyUserUuid()
    {
        return $this->companyUserUuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $companyUserUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserUuidOrFail($companyUserUuid)
    {
        if ($companyUserUuid === null) {
            $this->throwNullValueException(static::COMPANY_USER_UUID);
        }

        return $this->setCompanyUserUuid($companyUserUuid);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyUserUuidOrFail()
    {
        if ($this->companyUserUuid === null) {
            $this->throwNullValueException(static::COMPANY_USER_UUID);
        }

        return $this->companyUserUuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserUuid()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_UUID);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string[]|null $errorIdentifiers
     *
     * @return $this
     */
    public function setErrorIdentifiers(array $errorIdentifiers = null)
    {
        if ($errorIdentifiers === null) {
            $errorIdentifiers = [];
        }

        $this->errorIdentifiers = $errorIdentifiers;
        $this->modifiedProperties[self::ERROR_IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string[]
     */
    public function getErrorIdentifiers()
    {
        return $this->errorIdentifiers;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string $errorIdentifier
     *
     * @return $this
     */
    public function addErrorIdentifier($errorIdentifier)
    {
        $this->errorIdentifiers[] = $errorIdentifier;
        $this->modifiedProperties[self::ERROR_IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorIdentifiers()
    {
        $this->assertPropertyIsSet(self::ERROR_IDENTIFIERS);

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
                case 'shoppingListUuid':
                case 'companyUserUuid':
                case 'errorIdentifiers':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shoppingListItem':
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
                case 'shoppingListUuid':
                case 'companyUserUuid':
                case 'errorIdentifiers':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingListItem':
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
                case 'shoppingListUuid':
                case 'companyUserUuid':
                case 'errorIdentifiers':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingListItem':
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
            'shoppingListUuid' => $this->shoppingListUuid,
            'companyUserUuid' => $this->companyUserUuid,
            'errorIdentifiers' => $this->errorIdentifiers,
            'shoppingListItem' => $this->shoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'shopping_list_uuid' => $this->shoppingListUuid,
            'company_user_uuid' => $this->companyUserUuid,
            'error_identifiers' => $this->errorIdentifiers,
            'shopping_list_item' => $this->shoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'shopping_list_uuid' => $this->shoppingListUuid instanceof AbstractTransfer ? $this->shoppingListUuid->toArray(true, false) : $this->shoppingListUuid,
            'company_user_uuid' => $this->companyUserUuid instanceof AbstractTransfer ? $this->companyUserUuid->toArray(true, false) : $this->companyUserUuid,
            'error_identifiers' => $this->errorIdentifiers instanceof AbstractTransfer ? $this->errorIdentifiers->toArray(true, false) : $this->errorIdentifiers,
            'shopping_list_item' => $this->shoppingListItem instanceof AbstractTransfer ? $this->shoppingListItem->toArray(true, false) : $this->shoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shoppingListUuid' => $this->shoppingListUuid instanceof AbstractTransfer ? $this->shoppingListUuid->toArray(true, true) : $this->shoppingListUuid,
            'companyUserUuid' => $this->companyUserUuid instanceof AbstractTransfer ? $this->companyUserUuid->toArray(true, true) : $this->companyUserUuid,
            'errorIdentifiers' => $this->errorIdentifiers instanceof AbstractTransfer ? $this->errorIdentifiers->toArray(true, true) : $this->errorIdentifiers,
            'shoppingListItem' => $this->shoppingListItem instanceof AbstractTransfer ? $this->shoppingListItem->toArray(true, true) : $this->shoppingListItem,
        ];
    }
}
