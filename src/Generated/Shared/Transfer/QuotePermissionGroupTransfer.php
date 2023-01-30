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
class QuotePermissionGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_PERMISSION_GROUP = 'idQuotePermissionGroup';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const PERMISSIONS = 'permissions';

    /**
     * @var int|null
     */
    protected $idQuotePermissionGroup;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[]
     */
    protected $permissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_permission_group' => 'idQuotePermissionGroup',
        'idQuotePermissionGroup' => 'idQuotePermissionGroup',
        'IdQuotePermissionGroup' => 'idQuotePermissionGroup',
        'name' => 'name',
        'Name' => 'name',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'permissions' => 'permissions',
        'Permissions' => 'permissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_PERMISSION_GROUP => [
            'type' => 'int',
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
        self::IS_DEFAULT => [
            'type' => 'bool',
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
     * @module SharedCartPage|CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuotePermissionGroup
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
     * @module SharedCartPage|CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdQuotePermissionGroup()
    {
        return $this->idQuotePermissionGroup;
    }

    /**
     * @module SharedCartPage|CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuotePermissionGroup
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
     * @module SharedCartPage|CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuotePermissionGroupOrFail()
    {
        if ($this->idQuotePermissionGroup === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP);
        }

        return $this->idQuotePermissionGroup;
    }

    /**
     * @module SharedCartPage|CartPermissionGroupsRestApi|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|SharedCart
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
     * @module SharedCartPage|SharedCart
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SharedCartPage|SharedCart
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
     * @module SharedCartPage|SharedCart
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
     * @module SharedCartPage|SharedCart
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
     * @module SharedCart
     *
     * @param bool|null $isDefault
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
     * @module SharedCart
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module SharedCart
     *
     * @param bool|null $isDefault
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
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module SharedCart
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
     * @module SharedCart
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
     * @module SharedCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PermissionTransfer[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @module SharedCart
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
     * @module SharedCart
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
                case 'idQuotePermissionGroup':
                case 'name':
                case 'isDefault':
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
                case 'idQuotePermissionGroup':
                case 'name':
                case 'isDefault':
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
                case 'idQuotePermissionGroup':
                case 'name':
                case 'isDefault':
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
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup,
            'name' => $this->name,
            'isDefault' => $this->isDefault,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group' => $this->idQuotePermissionGroup,
            'name' => $this->name,
            'is_default' => $this->isDefault,
            'permissions' => $this->permissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_permission_group' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, false) : $this->idQuotePermissionGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, false) : $this->addValuesToCollection($this->permissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, true) : $this->idQuotePermissionGroup,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'permissions' => $this->permissions instanceof AbstractTransfer ? $this->permissions->toArray(true, true) : $this->addValuesToCollection($this->permissions, true, true),
        ];
    }
}
