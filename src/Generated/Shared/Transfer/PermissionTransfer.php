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
class PermissionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PERMISSION = 'idPermission';

    /**
     * @var string
     */
    public const CONFIGURATION_SIGNATURE = 'configurationSignature';

    /**
     * @var string
     */
    public const ID_COMPANY_ROLE = 'idCompanyRole';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const IS_INFRASTRUCTURAL = 'isInfrastructural';

    /**
     * @var int|null
     */
    protected $idPermission;

    /**
     * @var array
     */
    protected $configurationSignature = [];

    /**
     * @var int|null
     */
    protected $idCompanyRole;

    /**
     * @var array
     */
    protected $configuration = [];

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var bool|null
     */
    protected $isInfrastructural;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_permission' => 'idPermission',
        'idPermission' => 'idPermission',
        'IdPermission' => 'idPermission',
        'configuration_signature' => 'configurationSignature',
        'configurationSignature' => 'configurationSignature',
        'ConfigurationSignature' => 'configurationSignature',
        'id_company_role' => 'idCompanyRole',
        'idCompanyRole' => 'idCompanyRole',
        'IdCompanyRole' => 'idCompanyRole',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'key' => 'key',
        'Key' => 'key',
        'is_infrastructural' => 'isInfrastructural',
        'isInfrastructural' => 'isInfrastructural',
        'IsInfrastructural' => 'isInfrastructural',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PERMISSION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_permission',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATION_SIGNATURE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'configuration_signature',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_ROLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_role',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATION => [
            'type' => 'array',
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
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_INFRASTRUCTURAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_infrastructural',
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole|Permission|SharedCart|ShoppingList
     *
     * @param int|null $idPermission
     *
     * @return $this
     */
    public function setIdPermission($idPermission)
    {
        $this->idPermission = $idPermission;
        $this->modifiedProperties[self::ID_PERMISSION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|Permission|SharedCart|ShoppingList
     *
     * @return int|null
     */
    public function getIdPermission()
    {
        return $this->idPermission;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|Permission|SharedCart|ShoppingList
     *
     * @param int|null $idPermission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPermissionOrFail($idPermission)
    {
        if ($idPermission === null) {
            $this->throwNullValueException(static::ID_PERMISSION);
        }

        return $this->setIdPermission($idPermission);
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|Permission|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPermissionOrFail()
    {
        if ($this->idPermission === null) {
            $this->throwNullValueException(static::ID_PERMISSION);
        }

        return $this->idPermission;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|Permission|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPermission()
    {
        $this->assertPropertyIsSet(self::ID_PERMISSION);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|Permission
     *
     * @param array|null $configurationSignature
     *
     * @return $this
     */
    public function setConfigurationSignature(array $configurationSignature = null)
    {
        if ($configurationSignature === null) {
            $configurationSignature = [];
        }

        $this->configurationSignature = $configurationSignature;
        $this->modifiedProperties[self::CONFIGURATION_SIGNATURE] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|Permission
     *
     * @return array
     */
    public function getConfigurationSignature()
    {
        return $this->configurationSignature;
    }

    /**
     * @module CompanyPage|CompanyRole|Permission
     *
     * @param mixed $configurationSignature
     *
     * @return $this
     */
    public function addConfigurationSignature($configurationSignature)
    {
        $this->configurationSignature[] = $configurationSignature;
        $this->modifiedProperties[self::CONFIGURATION_SIGNATURE] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|Permission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurationSignature()
    {
        $this->assertPropertyIsSet(self::CONFIGURATION_SIGNATURE);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole
     *
     * @param int|null $idCompanyRole
     *
     * @return $this
     */
    public function setIdCompanyRole($idCompanyRole)
    {
        $this->idCompanyRole = $idCompanyRole;
        $this->modifiedProperties[self::ID_COMPANY_ROLE] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole
     *
     * @return int|null
     */
    public function getIdCompanyRole()
    {
        return $this->idCompanyRole;
    }

    /**
     * @module CompanyPage|CompanyRole
     *
     * @param int|null $idCompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyRoleOrFail($idCompanyRole)
    {
        if ($idCompanyRole === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE);
        }

        return $this->setIdCompanyRole($idCompanyRole);
    }

    /**
     * @module CompanyPage|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyRoleOrFail()
    {
        if ($this->idCompanyRole === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE);
        }

        return $this->idCompanyRole;
    }

    /**
     * @module CompanyPage|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyRole()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_ROLE);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @param array|null $configuration
     *
     * @return $this
     */
    public function setConfiguration(array $configuration = null)
    {
        if ($configuration === null) {
            $configuration = [];
        }

        $this->configuration = $configuration;
        $this->modifiedProperties[self::CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module CompanyPage|CompanyRole|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @param mixed $configuration
     *
     * @return $this
     */
    public function addConfiguration($configuration)
    {
        $this->configuration[] = $configuration;
        $this->modifiedProperties[self::CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
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
     * @module CompanyRoleGui|CompanyRole|CustomerAccessPermission|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module CompanyRoleGui|CompanyRole|CustomerAccessPermission|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyRoleGui|CompanyRole|CustomerAccessPermission|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module CompanyRoleGui|CompanyRole|CustomerAccessPermission|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module CompanyRoleGui|CompanyRole|CustomerAccessPermission|OauthPermission|Permission|QuoteApproval|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module Permission
     *
     * @param bool|null $isInfrastructural
     *
     * @return $this
     */
    public function setIsInfrastructural($isInfrastructural)
    {
        $this->isInfrastructural = $isInfrastructural;
        $this->modifiedProperties[self::IS_INFRASTRUCTURAL] = true;

        return $this;
    }

    /**
     * @module Permission
     *
     * @return bool|null
     */
    public function getIsInfrastructural()
    {
        return $this->isInfrastructural;
    }

    /**
     * @module Permission
     *
     * @param bool|null $isInfrastructural
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsInfrastructuralOrFail($isInfrastructural)
    {
        if ($isInfrastructural === null) {
            $this->throwNullValueException(static::IS_INFRASTRUCTURAL);
        }

        return $this->setIsInfrastructural($isInfrastructural);
    }

    /**
     * @module Permission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsInfrastructuralOrFail()
    {
        if ($this->isInfrastructural === null) {
            $this->throwNullValueException(static::IS_INFRASTRUCTURAL);
        }

        return $this->isInfrastructural;
    }

    /**
     * @module Permission
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsInfrastructural()
    {
        $this->assertPropertyIsSet(self::IS_INFRASTRUCTURAL);

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
                case 'idPermission':
                case 'configurationSignature':
                case 'idCompanyRole':
                case 'configuration':
                case 'key':
                case 'isInfrastructural':
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
                case 'idPermission':
                case 'configurationSignature':
                case 'idCompanyRole':
                case 'configuration':
                case 'key':
                case 'isInfrastructural':
                    $values[$arrayKey] = $value;

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
                case 'idPermission':
                case 'configurationSignature':
                case 'idCompanyRole':
                case 'configuration':
                case 'key':
                case 'isInfrastructural':
                    $values[$arrayKey] = $value;

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
            'idPermission' => $this->idPermission,
            'configurationSignature' => $this->configurationSignature,
            'idCompanyRole' => $this->idCompanyRole,
            'configuration' => $this->configuration,
            'key' => $this->key,
            'isInfrastructural' => $this->isInfrastructural,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_permission' => $this->idPermission,
            'configuration_signature' => $this->configurationSignature,
            'id_company_role' => $this->idCompanyRole,
            'configuration' => $this->configuration,
            'key' => $this->key,
            'is_infrastructural' => $this->isInfrastructural,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_permission' => $this->idPermission instanceof AbstractTransfer ? $this->idPermission->toArray(true, false) : $this->idPermission,
            'configuration_signature' => $this->configurationSignature instanceof AbstractTransfer ? $this->configurationSignature->toArray(true, false) : $this->configurationSignature,
            'id_company_role' => $this->idCompanyRole instanceof AbstractTransfer ? $this->idCompanyRole->toArray(true, false) : $this->idCompanyRole,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'is_infrastructural' => $this->isInfrastructural instanceof AbstractTransfer ? $this->isInfrastructural->toArray(true, false) : $this->isInfrastructural,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPermission' => $this->idPermission instanceof AbstractTransfer ? $this->idPermission->toArray(true, true) : $this->idPermission,
            'configurationSignature' => $this->configurationSignature instanceof AbstractTransfer ? $this->configurationSignature->toArray(true, true) : $this->configurationSignature,
            'idCompanyRole' => $this->idCompanyRole instanceof AbstractTransfer ? $this->idCompanyRole->toArray(true, true) : $this->idCompanyRole,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'isInfrastructural' => $this->isInfrastructural instanceof AbstractTransfer ? $this->isInfrastructural->toArray(true, true) : $this->isInfrastructural,
        ];
    }
}
