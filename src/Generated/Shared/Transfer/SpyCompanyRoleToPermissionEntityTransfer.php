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
class SpyCompanyRoleToPermissionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_ROLE_TO_PERMISSION = 'idCompanyRoleToPermission';

    /**
     * @var string
     */
    public const FK_COMPANY_ROLE = 'fkCompanyRole';

    /**
     * @var string
     */
    public const FK_PERMISSION = 'fkPermission';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string
     */
    public const PERMISSION = 'permission';

    /**
     * @var string
     */
    public const COMPANY_ROLE = 'companyRole';

    /**
     * @var integer|null
     */
    protected $idCompanyRoleToPermission;

    /**
     * @var integer|null
     */
    protected $fkCompanyRole;

    /**
     * @var integer|null
     */
    protected $fkPermission;

    /**
     * @var string|null
     */
    protected $configuration;

    /**
     * @var \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    protected $permission;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null
     */
    protected $companyRole;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_role_to_permission' => 'idCompanyRoleToPermission',
        'idCompanyRoleToPermission' => 'idCompanyRoleToPermission',
        'IdCompanyRoleToPermission' => 'idCompanyRoleToPermission',
        'fk_company_role' => 'fkCompanyRole',
        'fkCompanyRole' => 'fkCompanyRole',
        'FkCompanyRole' => 'fkCompanyRole',
        'fk_permission' => 'fkPermission',
        'fkPermission' => 'fkPermission',
        'FkPermission' => 'fkPermission',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'permission' => 'permission',
        'Permission' => 'permission',
        'company_role' => 'companyRole',
        'companyRole' => 'companyRole',
        'CompanyRole' => 'companyRole',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_ROLE_TO_PERMISSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_role_to_permission',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_ROLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_role',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PERMISSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_permission',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PERMISSION => [
            'type' => 'Generated\Shared\Transfer\SpyPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'permission',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_ROLE => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_role',
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
    public static $entityNamespace = 'Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission';


    /**
     * @module 
     *
     * @param integer|null $idCompanyRoleToPermission
     *
     * @return $this
     */
    public function setIdCompanyRoleToPermission($idCompanyRoleToPermission)
    {
        $this->idCompanyRoleToPermission = $idCompanyRoleToPermission;
        $this->modifiedProperties[self::ID_COMPANY_ROLE_TO_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyRoleToPermission()
    {
        return $this->idCompanyRoleToPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyRoleToPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyRoleToPermissionOrFail($idCompanyRoleToPermission)
    {
        if ($idCompanyRoleToPermission === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE_TO_PERMISSION);
        }

        return $this->setIdCompanyRoleToPermission($idCompanyRoleToPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyRoleToPermissionOrFail()
    {
        if ($this->idCompanyRoleToPermission === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE_TO_PERMISSION);
        }

        return $this->idCompanyRoleToPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyRoleToPermission()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_ROLE_TO_PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyRole
     *
     * @return $this
     */
    public function setFkCompanyRole($fkCompanyRole)
    {
        $this->fkCompanyRole = $fkCompanyRole;
        $this->modifiedProperties[self::FK_COMPANY_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyRole()
    {
        return $this->fkCompanyRole;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyRoleOrFail($fkCompanyRole)
    {
        if ($fkCompanyRole === null) {
            $this->throwNullValueException(static::FK_COMPANY_ROLE);
        }

        return $this->setFkCompanyRole($fkCompanyRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyRoleOrFail()
    {
        if ($this->fkCompanyRole === null) {
            $this->throwNullValueException(static::FK_COMPANY_ROLE);
        }

        return $this->fkCompanyRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyRole()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_ROLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPermission
     *
     * @return $this
     */
    public function setFkPermission($fkPermission)
    {
        $this->fkPermission = $fkPermission;
        $this->modifiedProperties[self::FK_PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPermission()
    {
        return $this->fkPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPermissionOrFail($fkPermission)
    {
        if ($fkPermission === null) {
            $this->throwNullValueException(static::FK_PERMISSION);
        }

        return $this->setFkPermission($fkPermission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPermissionOrFail()
    {
        if ($this->fkPermission === null) {
            $this->throwNullValueException(static::FK_PERMISSION);
        }

        return $this->fkPermission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPermission()
    {
        $this->assertPropertyIsSet(self::FK_PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        $this->modifiedProperties[self::CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module 
     *
     * @param string|null $configuration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurationOrFail($configuration)
    {
        if ($configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->setConfiguration($configuration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurationOrFail()
    {
        if ($this->configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->configuration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguration()
    {
        $this->assertPropertyIsSet(self::CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null $permission
     *
     * @return $this
     */
    public function setPermission(SpyPermissionEntityTransfer $permission = null)
    {
        $this->permission = $permission;
        $this->modifiedProperties[self::PERMISSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer|null
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPermissionEntityTransfer $permission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPermissionOrFail(SpyPermissionEntityTransfer $permission)
    {
        return $this->setPermission($permission);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPermissionEntityTransfer
     */
    public function getPermissionOrFail()
    {
        if ($this->permission === null) {
            $this->throwNullValueException(static::PERMISSION);
        }

        return $this->permission;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePermission()
    {
        $this->assertPropertyIsSet(self::PERMISSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null $companyRole
     *
     * @return $this
     */
    public function setCompanyRole(SpyCompanyRoleEntityTransfer $companyRole = null)
    {
        $this->companyRole = $companyRole;
        $this->modifiedProperties[self::COMPANY_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null
     */
    public function getCompanyRole()
    {
        return $this->companyRole;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer $companyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyRoleOrFail(SpyCompanyRoleEntityTransfer $companyRole)
    {
        return $this->setCompanyRole($companyRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer
     */
    public function getCompanyRoleOrFail()
    {
        if ($this->companyRole === null) {
            $this->throwNullValueException(static::COMPANY_ROLE);
        }

        return $this->companyRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyRole()
    {
        $this->assertPropertyIsSet(self::COMPANY_ROLE);

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
                case 'idCompanyRoleToPermission':
                case 'fkCompanyRole':
                case 'fkPermission':
                case 'configuration':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'permission':
                case 'companyRole':
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
                case 'idCompanyRoleToPermission':
                case 'fkCompanyRole':
                case 'fkPermission':
                case 'configuration':
                    $values[$arrayKey] = $value;

                    break;
                case 'permission':
                case 'companyRole':
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
                case 'idCompanyRoleToPermission':
                case 'fkCompanyRole':
                case 'fkPermission':
                case 'configuration':
                    $values[$arrayKey] = $value;

                    break;
                case 'permission':
                case 'companyRole':
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
            'idCompanyRoleToPermission' => $this->idCompanyRoleToPermission,
            'fkCompanyRole' => $this->fkCompanyRole,
            'fkPermission' => $this->fkPermission,
            'configuration' => $this->configuration,
            'permission' => $this->permission,
            'companyRole' => $this->companyRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role_to_permission' => $this->idCompanyRoleToPermission,
            'fk_company_role' => $this->fkCompanyRole,
            'fk_permission' => $this->fkPermission,
            'configuration' => $this->configuration,
            'permission' => $this->permission,
            'company_role' => $this->companyRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role_to_permission' => $this->idCompanyRoleToPermission instanceof AbstractTransfer ? $this->idCompanyRoleToPermission->toArray(true, false) : $this->idCompanyRoleToPermission,
            'fk_company_role' => $this->fkCompanyRole instanceof AbstractTransfer ? $this->fkCompanyRole->toArray(true, false) : $this->fkCompanyRole,
            'fk_permission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, false) : $this->fkPermission,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'permission' => $this->permission instanceof AbstractTransfer ? $this->permission->toArray(true, false) : $this->permission,
            'company_role' => $this->companyRole instanceof AbstractTransfer ? $this->companyRole->toArray(true, false) : $this->companyRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyRoleToPermission' => $this->idCompanyRoleToPermission instanceof AbstractTransfer ? $this->idCompanyRoleToPermission->toArray(true, true) : $this->idCompanyRoleToPermission,
            'fkCompanyRole' => $this->fkCompanyRole instanceof AbstractTransfer ? $this->fkCompanyRole->toArray(true, true) : $this->fkCompanyRole,
            'fkPermission' => $this->fkPermission instanceof AbstractTransfer ? $this->fkPermission->toArray(true, true) : $this->fkPermission,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'permission' => $this->permission instanceof AbstractTransfer ? $this->permission->toArray(true, true) : $this->permission,
            'companyRole' => $this->companyRole instanceof AbstractTransfer ? $this->companyRole->toArray(true, true) : $this->companyRole,
        ];
    }
}
