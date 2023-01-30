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
class ShoppingListResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const SHOPPING_LIST = 'shoppingList';

    /**
     * @var string
     */
    public const PERMISSIONS = 'permissions';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @var \Generated\Shared\Transfer\ShoppingListTransfer|null
     */
    protected $shoppingList;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[]
     */
    protected $permissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'errors' => 'errors',
        'Errors' => 'errors',
        'shopping_list' => 'shoppingList',
        'shoppingList' => 'shoppingList',
        'ShoppingList' => 'shoppingList',
        'permissions' => 'permissions',
        'Permissions' => 'permissions',
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
        self::ERRORS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\PermissionTransfer',
            'type_shim' => null,
            'name_underscore' => 'permissions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingList|ShoppingListsRestApi
     *
     * @param array|null $errors
     *
     * @return $this
     */
    public function setErrors(array $errors = null)
    {
        if ($errors === null) {
            $errors = [];
        }

        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList|ShoppingListsRestApi
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module ShoppingListPage|ShoppingList|ShoppingListsRestApi
     *
     * @param mixed $error
     *
     * @return $this
     */
    public function addError($error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return \Generated\Shared\Transfer\ShoppingListTransfer|null
     */
    public function getShoppingList()
    {
        return $this->shoppingList;
    }

    /**
     * @module ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingList
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[] $permissions
     *
     * @return $this
     */
    public function setPermissions(ArrayObject $permissions)
    {
        $this->permissions = $permissions;
        $this->modifiedProperties[self::PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @module ShoppingList
     *
     * @param \Generated\Shared\Transfer\PermissionTransfer $permission
     *
     * @return $this
     */
    public function addPermission(PermissionTransfer $permission)
    {
        $this->permissions[] = $permission;
        $this->modifiedProperties[self::PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePermissions()
    {
        $this->assertCollectionPropertyIsSet(self::PERMISSIONS);

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
                case 'errors':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shoppingList':
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
                case 'permissions':
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
                case 'isSuccess':
                case 'errors':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'permissions':
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
                case 'isSuccess':
                case 'errors':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'permissions':
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
        $this->permissions = $this->permissions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'errors' => $this->errors,
            'shoppingList' => $this->shoppingList,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'errors' => $this->errors,
            'shopping_list' => $this->shoppingList,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->errors,
            'shopping_list' => $this->shoppingList instanceof AbstractTransfer ? $this->shoppingList->toArray(true, false) : $this->shoppingList,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, false) : $this->addValuesToCollection($this->permissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->errors,
            'shoppingList' => $this->shoppingList instanceof AbstractTransfer ? $this->shoppingList->toArray(true, true) : $this->shoppingList,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, true) : $this->addValuesToCollection($this->permissions, true, true),
        ];
    }
}
