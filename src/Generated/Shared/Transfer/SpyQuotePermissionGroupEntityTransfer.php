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
class SpyQuotePermissionGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_PERMISSION_GROUP = 'idQuotePermissionGroup';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_QUOTE_COMPANY_USERS = 'spyQuoteCompanyUsers';

    /**
     * @var string
     */
    public const SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS = 'spyQuotePermissionGroupToPermissions';

    /**
     * @var integer|null
     */
    protected $idQuotePermissionGroup;

    /**
     * @var boolean|null
     */
    protected $isDefault;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer[]
     */
    protected $spyQuoteCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer[]
     */
    protected $spyQuotePermissionGroupToPermissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_permission_group' => 'idQuotePermissionGroup',
        'idQuotePermissionGroup' => 'idQuotePermissionGroup',
        'IdQuotePermissionGroup' => 'idQuotePermissionGroup',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'name' => 'name',
        'Name' => 'name',
        'spy_quote_company_users' => 'spyQuoteCompanyUsers',
        'spyQuoteCompanyUsers' => 'spyQuoteCompanyUsers',
        'SpyQuoteCompanyUsers' => 'spyQuoteCompanyUsers',
        'spy_quote_permission_group_to_permissions' => 'spyQuotePermissionGroupToPermissions',
        'spyQuotePermissionGroupToPermissions' => 'spyQuotePermissionGroupToPermissions',
        'SpyQuotePermissionGroupToPermissions' => 'spyQuotePermissionGroupToPermissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_PERMISSION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_default',
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
        self::SPY_QUOTE_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_permission_group_to_permissions',
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
    public static $entityNamespace = 'Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroup';


    /**
     * @module 
     *
     * @param integer|null $idQuotePermissionGroup
     *
     * @return $this
     */
    public function setIdQuotePermissionGroup($idQuotePermissionGroup)
    {
        $this->idQuotePermissionGroup = $idQuotePermissionGroup;
        $this->modifiedProperties[self::ID_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuotePermissionGroup()
    {
        return $this->idQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuotePermissionGroupOrFail($idQuotePermissionGroup)
    {
        if ($idQuotePermissionGroup === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP);
        }

        return $this->setIdQuotePermissionGroup($idQuotePermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuotePermissionGroupOrFail()
    {
        if ($this->idQuotePermissionGroup === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP);
        }

        return $this->idQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        $this->modifiedProperties[self::IS_DEFAULT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultOrFail($isDefault)
    {
        if ($isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->setIsDefault($isDefault);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefault()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer[] $spyQuoteCompanyUsers
     *
     * @return $this
     */
    public function setSpyQuoteCompanyUsers(ArrayObject $spyQuoteCompanyUsers)
    {
        $this->spyQuoteCompanyUsers = $spyQuoteCompanyUsers;
        $this->modifiedProperties[self::SPY_QUOTE_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer[]
     */
    public function getSpyQuoteCompanyUsers()
    {
        return $this->spyQuoteCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer $spyQuoteCompanyUsers
     *
     * @return $this
     */
    public function addSpyQuoteCompanyUsers(SpyQuoteCompanyUserEntityTransfer $spyQuoteCompanyUsers)
    {
        $this->spyQuoteCompanyUsers[] = $spyQuoteCompanyUsers;
        $this->modifiedProperties[self::SPY_QUOTE_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuoteCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTE_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer[] $spyQuotePermissionGroupToPermissions
     *
     * @return $this
     */
    public function setSpyQuotePermissionGroupToPermissions(ArrayObject $spyQuotePermissionGroupToPermissions)
    {
        $this->spyQuotePermissionGroupToPermissions = $spyQuotePermissionGroupToPermissions;
        $this->modifiedProperties[self::SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer[]
     */
    public function getSpyQuotePermissionGroupToPermissions()
    {
        return $this->spyQuotePermissionGroupToPermissions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer $spyQuotePermissionGroupToPermissions
     *
     * @return $this
     */
    public function addSpyQuotePermissionGroupToPermissions(SpyQuotePermissionGroupToPermissionEntityTransfer $spyQuotePermissionGroupToPermissions)
    {
        $this->spyQuotePermissionGroupToPermissions[] = $spyQuotePermissionGroupToPermissions;
        $this->modifiedProperties[self::SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuotePermissionGroupToPermissions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS);

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
                case 'idQuotePermissionGroup':
                case 'isDefault':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyQuoteCompanyUsers':
                case 'spyQuotePermissionGroupToPermissions':
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
                case 'idQuotePermissionGroup':
                case 'isDefault':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyQuoteCompanyUsers':
                case 'spyQuotePermissionGroupToPermissions':
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
                case 'idQuotePermissionGroup':
                case 'isDefault':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyQuoteCompanyUsers':
                case 'spyQuotePermissionGroupToPermissions':
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
        $this->spyQuoteCompanyUsers = $this->spyQuoteCompanyUsers ?: new ArrayObject();
        $this->spyQuotePermissionGroupToPermissions = $this->spyQuotePermissionGroupToPermissions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup,
            'isDefault' => $this->isDefault,
            'name' => $this->name,
            'spyQuoteCompanyUsers' => $this->spyQuoteCompanyUsers,
            'spyQuotePermissionGroupToPermissions' => $this->spyQuotePermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group' => $this->idQuotePermissionGroup,
            'is_default' => $this->isDefault,
            'name' => $this->name,
            'spy_quote_company_users' => $this->spyQuoteCompanyUsers,
            'spy_quote_permission_group_to_permissions' => $this->spyQuotePermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, false) : $this->idQuotePermissionGroup,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_quote_company_users' => $this->spyQuoteCompanyUsers instanceof AbstractTransfer ? $this->spyQuoteCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyQuoteCompanyUsers, true, false),
            'spy_quote_permission_group_to_permissions' => $this->spyQuotePermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyQuotePermissionGroupToPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyQuotePermissionGroupToPermissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, true) : $this->idQuotePermissionGroup,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyQuoteCompanyUsers' => $this->spyQuoteCompanyUsers instanceof AbstractTransfer ? $this->spyQuoteCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyQuoteCompanyUsers, true, true),
            'spyQuotePermissionGroupToPermissions' => $this->spyQuotePermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyQuotePermissionGroupToPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyQuotePermissionGroupToPermissions, true, true),
        ];
    }
}
