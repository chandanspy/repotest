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
class CompanyRoleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_ROLE = 'idCompanyRole';

    /**
     * @var string
     */
    public const FK_COMPANY = 'fkCompany';

    /**
     * @var string
     */
    public const COMPANY_USER_COLLECTION = 'companyUserCollection';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const PERMISSION_COLLECTION = 'permissionCollection';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idCompanyRole;

    /**
     * @var int|null
     */
    protected $fkCompany;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserCollectionTransfer|null
     */
    protected $companyUserCollection;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    protected $permissionCollection;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\CompanyTransfer|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_role' => 'idCompanyRole',
        'idCompanyRole' => 'idCompanyRole',
        'IdCompanyRole' => 'idCompanyRole',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'company_user_collection' => 'companyUserCollection',
        'companyUserCollection' => 'companyUserCollection',
        'CompanyUserCollection' => 'companyUserCollection',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'permission_collection' => 'permissionCollection',
        'permissionCollection' => 'permissionCollection',
        'PermissionCollection' => 'permissionCollection',
        'name' => 'name',
        'Name' => 'name',
        'company' => 'company',
        'Company' => 'company',
        'key' => 'key',
        'Key' => 'key',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FK_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CompanyUserCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user_collection',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::PERMISSION_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\PermissionCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'permission_collection',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::COMPANY => [
            'type' => 'Generated\Shared\Transfer\CompanyTransfer',
            'type_shim' => null,
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @return int|null
     */
    public function getIdCompanyRole()
    {
        return $this->idCompanyRole;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi
     *
     * @param int|null $fkCompany
     *
     * @return $this
     */
    public function setFkCompany($fkCompany)
    {
        $this->fkCompany = $fkCompany;
        $this->modifiedProperties[self::FK_COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi
     *
     * @return int|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi
     *
     * @param int|null $fkCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyOrFail($fkCompany)
    {
        if ($fkCompany === null) {
            $this->throwNullValueException(static::FK_COMPANY);
        }

        return $this->setFkCompany($fkCompany);
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyOrFail()
    {
        if ($this->fkCompany === null) {
            $this->throwNullValueException(static::FK_COMPANY);
        }

        return $this->fkCompany;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompany()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @param \Generated\Shared\Transfer\CompanyUserCollectionTransfer|null $companyUserCollection
     *
     * @return $this
     */
    public function setCompanyUserCollection(CompanyUserCollectionTransfer $companyUserCollection = null)
    {
        $this->companyUserCollection = $companyUserCollection;
        $this->modifiedProperties[self::COMPANY_USER_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @return \Generated\Shared\Transfer\CompanyUserCollectionTransfer|null
     */
    public function getCompanyUserCollection()
    {
        return $this->companyUserCollection;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @param \Generated\Shared\Transfer\CompanyUserCollectionTransfer $companyUserCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserCollectionOrFail(CompanyUserCollectionTransfer $companyUserCollection)
    {
        return $this->setCompanyUserCollection($companyUserCollection);
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserCollectionTransfer
     */
    public function getCompanyUserCollectionOrFail()
    {
        if ($this->companyUserCollection === null) {
            $this->throwNullValueException(static::COMPANY_USER_COLLECTION);
        }

        return $this->companyUserCollection;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserCollection()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_COLLECTION);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRole|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer|null $permissionCollection
     *
     * @return $this
     */
    public function setPermissionCollection(PermissionCollectionTransfer $permissionCollection = null)
    {
        $this->permissionCollection = $permissionCollection;
        $this->modifiedProperties[self::PERMISSION_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRole|QuoteApproval
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    public function getPermissionCollection()
    {
        return $this->permissionCollection;
    }

    /**
     * @module CompanyPage|CompanyRole|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer $permissionCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPermissionCollectionOrFail(PermissionCollectionTransfer $permissionCollection)
    {
        return $this->setPermissionCollection($permissionCollection);
    }

    /**
     * @module CompanyPage|CompanyRole|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer
     */
    public function getPermissionCollectionOrFail()
    {
        if ($this->permissionCollection === null) {
            $this->throwNullValueException(static::PERMISSION_COLLECTION);
        }

        return $this->permissionCollection;
    }

    /**
     * @module CompanyPage|CompanyRole|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePermissionCollection()
    {
        $this->assertPropertyIsSet(self::PERMISSION_COLLECTION);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole
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
     * @module CompaniesRestApi|CompanyRole
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer|null $company
     *
     * @return $this
     */
    public function setCompany(CompanyTransfer $company = null)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module CompaniesRestApi|CompanyRole
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CompaniesRestApi|CompanyRole
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail(CompanyTransfer $company)
    {
        return $this->setCompany($company);
    }

    /**
     * @module CompaniesRestApi|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module CompaniesRestApi|CompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompany()
    {
        $this->assertPropertyIsSet(self::COMPANY);

        return $this;
    }

    /**
     * @module CompanyRole
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
     * @module CompanyRole
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyRole
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
     * @module CompanyRole
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
     * @module CompanyRole
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
     * @module CompanyRole|CompanyRolesRestApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module CompanyRole|CompanyRolesRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CompanyRole|CompanyRolesRestApi
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module CompanyRole|CompanyRolesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module CompanyRole|CompanyRolesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

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
                case 'idCompanyRole':
                case 'fkCompany':
                case 'isDefault':
                case 'name':
                case 'key':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUserCollection':
                case 'permissionCollection':
                case 'company':
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
                case 'idCompanyRole':
                case 'fkCompany':
                case 'isDefault':
                case 'name':
                case 'key':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserCollection':
                case 'permissionCollection':
                case 'company':
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
                case 'idCompanyRole':
                case 'fkCompany':
                case 'isDefault':
                case 'name':
                case 'key':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserCollection':
                case 'permissionCollection':
                case 'company':
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
            'idCompanyRole' => $this->idCompanyRole,
            'fkCompany' => $this->fkCompany,
            'isDefault' => $this->isDefault,
            'name' => $this->name,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'companyUserCollection' => $this->companyUserCollection,
            'permissionCollection' => $this->permissionCollection,
            'company' => $this->company,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role' => $this->idCompanyRole,
            'fk_company' => $this->fkCompany,
            'is_default' => $this->isDefault,
            'name' => $this->name,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'company_user_collection' => $this->companyUserCollection,
            'permission_collection' => $this->permissionCollection,
            'company' => $this->company,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role' => $this->idCompanyRole instanceof AbstractTransfer ? $this->idCompanyRole->toArray(true, false) : $this->idCompanyRole,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'company_user_collection' => $this->companyUserCollection instanceof AbstractTransfer ? $this->companyUserCollection->toArray(true, false) : $this->companyUserCollection,
            'permission_collection' => $this->permissionCollection instanceof AbstractTransfer ? $this->permissionCollection->toArray(true, false) : $this->permissionCollection,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyRole' => $this->idCompanyRole instanceof AbstractTransfer ? $this->idCompanyRole->toArray(true, true) : $this->idCompanyRole,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'companyUserCollection' => $this->companyUserCollection instanceof AbstractTransfer ? $this->companyUserCollection->toArray(true, true) : $this->companyUserCollection,
            'permissionCollection' => $this->permissionCollection instanceof AbstractTransfer ? $this->permissionCollection->toArray(true, true) : $this->permissionCollection,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
        ];
    }
}
