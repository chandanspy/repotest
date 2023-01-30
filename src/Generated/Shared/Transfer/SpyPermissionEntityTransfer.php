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
class SpyPermissionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PERMISSION = 'idPermission';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const CONFIGURATION_SIGNATURE = 'configurationSignature';

    /**
     * @var string
     */
    public const SPY_COMPANY_ROLE_TO_PERMISSIONS = 'spyCompanyRoleToPermissions';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSIONS = 'spyShoppingListPermissionGroupToPermissions';

    /**
     * @var string
     */
    public const SPY_QUOTE_PERMISSION_GROUP_TO_PERMISSIONS = 'spyQuotePermissionGroupToPermissions';

    /**
     * @var integer|null
     */
    protected $idPermission;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $configurationSignature;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToPermissionEntityTransfer[]
     */
    protected $spyCompanyRoleToPermissions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListPermissionGroupToPermissionEntityTransfer[]
     */
    protected $spyShoppingListPermissionGroupToPermissions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuotePermissionGroupToPermissionEntityTransfer[]
     */
    protected $spyQuotePermissionGroupToPermissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_permission' => 'idPermission',
        'idPermission' => 'idPermission',
        'IdPermission' => 'idPermission',
        'key' => 'key',
        'Key' => 'key',
        'configuration_signature' => 'configurationSignature',
        'configurationSignature' => 'configurationSignature',
        'ConfigurationSignature' => 'configurationSignature',
        'spy_company_role_to_permissions' => 'spyCompanyRoleToPermissions',
        'spyCompanyRoleToPermissions' => 'spyCompanyRoleToPermissions',
        'SpyCompanyRoleToPermissions' => 'spyCompanyRoleToPermissions',
        'spy_shopping_list_permission_group_to_permissions' => 'spyShoppingListPermissionGroupToPermissions',
        'spyShoppingListPermissionGroupToPermissions' => 'spyShoppingListPermissionGroupToPermissions',
        'SpyShoppingListPermissionGroupToPermissions' => 'spyShoppingListPermissionGroupToPermissions',
        'spy_quote_permission_group_to_permissions' => 'spyQuotePermissionGroupToPermissions',
        'spyQuotePermissionGroupToPermissions' => 'spyQuotePermissionGroupToPermissions',
        'SpyQuotePermissionGroupToPermissions' => 'spyQuotePermissionGroupToPermissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PERMISSION => [
            'type' => 'integer',
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
        self::CONFIGURATION_SIGNATURE => [
            'type' => 'string',
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
        self::SPY_COMPANY_ROLE_TO_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyRoleToPermissionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_role_to_permissions',
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
    public static $entityNamespace = 'Orm\Zed\Permission\Persistence\SpyPermission';


    /**
     * @module 
     *
     * @param integer|null $idPermission
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdPermission()
    {
        return $this->idPermission;
    }

    /**
     * @module 
     *
     * @param integer|null $idPermission
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPermissionOrFail()
    {
        if ($this->idPermission === null) {
            $this->throwNullValueException(static::ID_PERMISSION);
        }

        return $this->idPermission;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $configurationSignature
     *
     * @return $this
     */
    public function setConfigurationSignature($configurationSignature)
    {
        $this->configurationSignature = $configurationSignature;
        $this->modifiedProperties[self::CONFIGURATION_SIGNATURE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getConfigurationSignature()
    {
        return $this->configurationSignature;
    }

    /**
     * @module 
     *
     * @param string|null $configurationSignature
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurationSignatureOrFail($configurationSignature)
    {
        if ($configurationSignature === null) {
            $this->throwNullValueException(static::CONFIGURATION_SIGNATURE);
        }

        return $this->setConfigurationSignature($configurationSignature);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurationSignatureOrFail()
    {
        if ($this->configurationSignature === null) {
            $this->throwNullValueException(static::CONFIGURATION_SIGNATURE);
        }

        return $this->configurationSignature;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToPermissionEntityTransfer[] $spyCompanyRoleToPermissions
     *
     * @return $this
     */
    public function setSpyCompanyRoleToPermissions(ArrayObject $spyCompanyRoleToPermissions)
    {
        $this->spyCompanyRoleToPermissions = $spyCompanyRoleToPermissions;
        $this->modifiedProperties[self::SPY_COMPANY_ROLE_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToPermissionEntityTransfer[]
     */
    public function getSpyCompanyRoleToPermissions()
    {
        return $this->spyCompanyRoleToPermissions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleToPermissionEntityTransfer $spyCompanyRoleToPermissions
     *
     * @return $this
     */
    public function addSpyCompanyRoleToPermissions(SpyCompanyRoleToPermissionEntityTransfer $spyCompanyRoleToPermissions)
    {
        $this->spyCompanyRoleToPermissions[] = $spyCompanyRoleToPermissions;
        $this->modifiedProperties[self::SPY_COMPANY_ROLE_TO_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyRoleToPermissions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_ROLE_TO_PERMISSIONS);

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
                case 'idPermission':
                case 'key':
                case 'configurationSignature':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyRoleToPermissions':
                case 'spyShoppingListPermissionGroupToPermissions':
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
                case 'idPermission':
                case 'key':
                case 'configurationSignature':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyRoleToPermissions':
                case 'spyShoppingListPermissionGroupToPermissions':
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
                case 'idPermission':
                case 'key':
                case 'configurationSignature':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyRoleToPermissions':
                case 'spyShoppingListPermissionGroupToPermissions':
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
        $this->spyCompanyRoleToPermissions = $this->spyCompanyRoleToPermissions ?: new ArrayObject();
        $this->spyShoppingListPermissionGroupToPermissions = $this->spyShoppingListPermissionGroupToPermissions ?: new ArrayObject();
        $this->spyQuotePermissionGroupToPermissions = $this->spyQuotePermissionGroupToPermissions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPermission' => $this->idPermission,
            'key' => $this->key,
            'configurationSignature' => $this->configurationSignature,
            'spyCompanyRoleToPermissions' => $this->spyCompanyRoleToPermissions,
            'spyShoppingListPermissionGroupToPermissions' => $this->spyShoppingListPermissionGroupToPermissions,
            'spyQuotePermissionGroupToPermissions' => $this->spyQuotePermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_permission' => $this->idPermission,
            'key' => $this->key,
            'configuration_signature' => $this->configurationSignature,
            'spy_company_role_to_permissions' => $this->spyCompanyRoleToPermissions,
            'spy_shopping_list_permission_group_to_permissions' => $this->spyShoppingListPermissionGroupToPermissions,
            'spy_quote_permission_group_to_permissions' => $this->spyQuotePermissionGroupToPermissions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_permission' => $this->idPermission instanceof AbstractTransfer ? $this->idPermission->toArray(true, false) : $this->idPermission,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'configuration_signature' => $this->configurationSignature instanceof AbstractTransfer ? $this->configurationSignature->toArray(true, false) : $this->configurationSignature,
            'spy_company_role_to_permissions' => $this->spyCompanyRoleToPermissions instanceof AbstractTransfer ? $this->spyCompanyRoleToPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyRoleToPermissions, true, false),
            'spy_shopping_list_permission_group_to_permissions' => $this->spyShoppingListPermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroupToPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListPermissionGroupToPermissions, true, false),
            'spy_quote_permission_group_to_permissions' => $this->spyQuotePermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyQuotePermissionGroupToPermissions->toArray(true, false) : $this->addValuesToCollection($this->spyQuotePermissionGroupToPermissions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPermission' => $this->idPermission instanceof AbstractTransfer ? $this->idPermission->toArray(true, true) : $this->idPermission,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'configurationSignature' => $this->configurationSignature instanceof AbstractTransfer ? $this->configurationSignature->toArray(true, true) : $this->configurationSignature,
            'spyCompanyRoleToPermissions' => $this->spyCompanyRoleToPermissions instanceof AbstractTransfer ? $this->spyCompanyRoleToPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyRoleToPermissions, true, true),
            'spyShoppingListPermissionGroupToPermissions' => $this->spyShoppingListPermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroupToPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListPermissionGroupToPermissions, true, true),
            'spyQuotePermissionGroupToPermissions' => $this->spyQuotePermissionGroupToPermissions instanceof AbstractTransfer ? $this->spyQuotePermissionGroupToPermissions->toArray(true, true) : $this->addValuesToCollection($this->spyQuotePermissionGroupToPermissions, true, true),
        ];
    }
}
