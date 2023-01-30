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
class ShoppingListPermissionGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PERMISSION_GROUP = 'idShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const PERMISSIONS = 'permissions';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idShoppingListPermissionGroup;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[]
     */
    protected $permissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_shopping_list_permission_group' => 'idShoppingListPermissionGroup',
        'idShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'IdShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'permissions' => 'permissions',
        'Permissions' => 'permissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
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
     * @module ShoppingListPage|ShoppingList
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroup($idShoppingListPermissionGroup)
    {
        $this->idShoppingListPermissionGroup = $idShoppingListPermissionGroup;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListPermissionGroup()
    {
        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroupOrFail($idShoppingListPermissionGroup)
    {
        if ($idShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->setIdShoppingListPermissionGroup($idShoppingListPermissionGroup);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListPermissionGroupOrFail()
    {
        if ($this->idShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_PERMISSION_GROUP);

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
                case 'name':
                case 'idShoppingListPermissionGroup':
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
                case 'name':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

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
                case 'name':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

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
            'name' => $this->name,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, false) : $this->idShoppingListPermissionGroup,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, false) : $this->addValuesToCollection($this->permissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, true) : $this->idShoppingListPermissionGroup,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, true) : $this->addValuesToCollection($this->permissions, true, true),
        ];
    }
}
