<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShoppingListPermissionGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PERMISSION_GROUP = 'idShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_USERS = 'spyShoppingListCompanyUsers';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS = 'spyShoppingListCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS = 'spyShoppingListPermissionGroupToPermissions';

    /**
     * @var integer|null
     */
    protected $idShoppingListPermissionGroup;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[]
     */
    protected $spyShoppingListCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyShoppingListCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer[]
     */
    protected $spyShoppingListPermissionGroupToPermissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_permission_group' => 'idShoppingListPermissionGroup',
        'idShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'IdShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'name' => 'name',
        'Name' => 'name',
        'spy_shopping_list_company_users' => 'spyShoppingListCompanyUsers',
        'spyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'SpyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'spy_shopping_list_company_business_units' => 'spyShoppingListCompanyBusinessUnits',
        'spyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
        'SpyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
        'spy_shopping_list_permission_group_to_permissions' => 'spyShoppingListPermissionGroupToPermissions',
        'spyShoppingListPermissionGroupToPermissions' => 'spyShoppingListPermissionGroupToPermissions',
        'SpyShoppingListPermissionGroupToPermissions' => 'spyShoppingListPermissionGroupToPermissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'integer',
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
        self::SPY_SHOPPING_LIST_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_business_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_permission_group_to_permissions',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListPermissionGroup
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListPermissionGroup()
    {
        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListPermissionGroup
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListPermissionGroupOrFail()
    {
        if ($this->idShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[] $spyShoppingListCompanyUsers
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyUsers(ArrayObject $spyShoppingListCompanyUsers)
    {
        $this->spyShoppingListCompanyUsers = $spyShoppingListCompanyUsers;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[]
     */
    public function getSpyShoppingListCompanyUsers()
    {
        return $this->spyShoppingListCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer $spyShoppingListCompanyUsers
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyUsers(SpyShoppingListCompanyUserEntityTransfer $spyShoppingListCompanyUsers)
    {
        $this->spyShoppingListCompanyUsers[] = $spyShoppingListCompanyUsers;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[] $spyShoppingListCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnits(ArrayObject $spyShoppingListCompanyBusinessUnits)
    {
        $this->spyShoppingListCompanyBusinessUnits = $spyShoppingListCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyShoppingListCompanyBusinessUnits()
    {
        return $this->spyShoppingListCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyBusinessUnits(SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnits)
    {
        $this->spyShoppingListCompanyBusinessUnits[] = $spyShoppingListCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer[] $spyShoppingListPermissionGroupToPermissions
     *
     * @return $this
     */
    public function setSpyShoppingListPermissionGroupToPermissions(ArrayObject $spyShoppingListPermissionGroupToPermissions)
    {
        $this->spyShoppingListPermissionGroupToPermissions = $spyShoppingListPermissionGroupToPermissions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer[]
     */
    public function getSpyShoppingListPermissionGroupToPermissions()
    {
        return $this->spyShoppingListPermissionGroupToPermissions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer $spyShoppingListPermissionGroupToPermissions
     *
     * @return $this
     */
    public function addSpyShoppingListPermissionGroupToPermissions(SpyShoppingListPermissionGroupToPermissionEntityTransfer $spyShoppingListPermissionGroupToPermissions)
    {
        $this->spyShoppingListPermissionGroupToPermissions[] = $spyShoppingListPermissionGroupToPermissions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListPermissionGroupToPermissions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS);

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
                case 'idShoppingListPermissionGroup':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyShoppingListPermissionGroupToPermissions':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idShoppingListPermissionGroup':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyShoppingListPermissionGroupToPermissions':
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
                case 'idShoppingListPermissionGroup':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyShoppingListPermissionGroupToPermissions':
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
        $this->spyShoppingListCompanyUsers = $this->spyShoppingListCompanyUsers ?: new ArrayObject();
        $this->spyShoppingListCompanyBusinessUnits = $this->spyShoppingListCompanyBusinessUnits ?: new ArrayObject();
        $this->spyShoppingListPermissionGroupToPermissions = $this->spyShoppingListPermissionGroupToPermissions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup,
            'name' => $this->name,
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers,
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits,
            'spyShoppingListPermissionGroupToPermissions' => $this->spyShoppingListPermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup,
            'name' => $this->name,
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers,
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits,
            'spy_shopping_list_permission_group_to_permissions' => $this->spyShoppingListPermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, false) : $this->idShoppingListPermissionGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, false),
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, false),
            'spy_shopping_list_permission_group_to_permissions' => $this->spyShoppingListPermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroupToPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListPermissionGroupToPermissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, true) : $this->idShoppingListPermissionGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, true),
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, true),
            'spyShoppingListPermissionGroupToPermissions' => $this->spyShoppingListPermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroupToPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListPermissionGroupToPermissions, true, true),
        ];
    }
}
