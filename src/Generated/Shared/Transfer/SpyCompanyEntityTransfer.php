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
class SpyCompanyEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY = 'idCompany';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_COMPANY_ROLES = 'spyCompanyRoles';

    /**
     * @var string
     */
    public const SPY_COMPANY_USERS = 'spyCompanyUsers';

    /**
     * @var string
     */
    public const SPY_COMPANY_BUSINESS_UNITS = 'spyCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_COMPANY_STORES = 'spyCompanyStores';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESSES = 'spyCompanyUnitAddresses';

    /**
     * @var integer|null
     */
    protected $idCompany;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer[]
     */
    protected $spyCompanyRoles;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[]
     */
    protected $spyCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyStoreEntityTransfer[]
     */
    protected $spyCompanyStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    protected $spyCompanyUnitAddresses;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company' => 'idCompany',
        'idCompany' => 'idCompany',
        'IdCompany' => 'idCompany',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'status' => 'status',
        'Status' => 'status',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_company_roles' => 'spyCompanyRoles',
        'spyCompanyRoles' => 'spyCompanyRoles',
        'SpyCompanyRoles' => 'spyCompanyRoles',
        'spy_company_users' => 'spyCompanyUsers',
        'spyCompanyUsers' => 'spyCompanyUsers',
        'SpyCompanyUsers' => 'spyCompanyUsers',
        'spy_company_business_units' => 'spyCompanyBusinessUnits',
        'spyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'SpyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'spy_company_stores' => 'spyCompanyStores',
        'spyCompanyStores' => 'spyCompanyStores',
        'SpyCompanyStores' => 'spyCompanyStores',
        'spy_company_unit_addresses' => 'spyCompanyUnitAddresses',
        'spyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
        'SpyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
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
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
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
        self::SPY_COMPANY_ROLES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_roles',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_business_units',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_addresses',
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
    public static $entityNamespace = 'Orm\Zed\Company\Persistence\SpyCompany';


    /**
     * @module 
     *
     * @param integer|null $idCompany
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        $this->modifiedProperties[self::ID_COMPANY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyOrFail($idCompany)
    {
        if ($idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->setIdCompany($idCompany);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyOrFail()
    {
        if ($this->idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->idCompany;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompany()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module 
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer[] $spyCompanyRoles
     *
     * @return $this
     */
    public function setSpyCompanyRoles(ArrayObject $spyCompanyRoles)
    {
        $this->spyCompanyRoles = $spyCompanyRoles;
        $this->modifiedProperties[self::SPY_COMPANY_ROLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer[]
     */
    public function getSpyCompanyRoles()
    {
        return $this->spyCompanyRoles;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer $spyCompanyRoles
     *
     * @return $this
     */
    public function addSpyCompanyRoles(SpyCompanyRoleEntityTransfer $spyCompanyRoles)
    {
        $this->spyCompanyRoles[] = $spyCompanyRoles;
        $this->modifiedProperties[self::SPY_COMPANY_ROLES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyRoles()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_ROLES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[] $spyCompanyUsers
     *
     * @return $this
     */
    public function setSpyCompanyUsers(ArrayObject $spyCompanyUsers)
    {
        $this->spyCompanyUsers = $spyCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[]
     */
    public function getSpyCompanyUsers()
    {
        return $this->spyCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer $spyCompanyUsers
     *
     * @return $this
     */
    public function addSpyCompanyUsers(SpyCompanyUserEntityTransfer $spyCompanyUsers)
    {
        $this->spyCompanyUsers[] = $spyCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer[] $spyCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyCompanyBusinessUnits(ArrayObject $spyCompanyBusinessUnits)
    {
        $this->spyCompanyBusinessUnits = $spyCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyCompanyBusinessUnits()
    {
        return $this->spyCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $spyCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyCompanyBusinessUnits(SpyCompanyBusinessUnitEntityTransfer $spyCompanyBusinessUnits)
    {
        $this->spyCompanyBusinessUnits[] = $spyCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_BUSINESS_UNITS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyStoreEntityTransfer[] $spyCompanyStores
     *
     * @return $this
     */
    public function setSpyCompanyStores(ArrayObject $spyCompanyStores)
    {
        $this->spyCompanyStores = $spyCompanyStores;
        $this->modifiedProperties[self::SPY_COMPANY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyStoreEntityTransfer[]
     */
    public function getSpyCompanyStores()
    {
        return $this->spyCompanyStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyStoreEntityTransfer $spyCompanyStores
     *
     * @return $this
     */
    public function addSpyCompanyStores(SpyCompanyStoreEntityTransfer $spyCompanyStores)
    {
        $this->spyCompanyStores[] = $spyCompanyStores;
        $this->modifiedProperties[self::SPY_COMPANY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[] $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddresses(ArrayObject $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    public function getSpyCompanyUnitAddresses()
    {
        return $this->spyCompanyUnitAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddresses(SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses[] = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESSES);

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
                case 'idCompany':
                case 'isActive':
                case 'key':
                case 'name':
                case 'status':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyRoles':
                case 'spyCompanyUsers':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyStores':
                case 'spyCompanyUnitAddresses':
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
                case 'idCompany':
                case 'isActive':
                case 'key':
                case 'name':
                case 'status':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyRoles':
                case 'spyCompanyUsers':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyStores':
                case 'spyCompanyUnitAddresses':
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
                case 'idCompany':
                case 'isActive':
                case 'key':
                case 'name':
                case 'status':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyRoles':
                case 'spyCompanyUsers':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyStores':
                case 'spyCompanyUnitAddresses':
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
        $this->spyCompanyRoles = $this->spyCompanyRoles ?: new ArrayObject();
        $this->spyCompanyUsers = $this->spyCompanyUsers ?: new ArrayObject();
        $this->spyCompanyBusinessUnits = $this->spyCompanyBusinessUnits ?: new ArrayObject();
        $this->spyCompanyStores = $this->spyCompanyStores ?: new ArrayObject();
        $this->spyCompanyUnitAddresses = $this->spyCompanyUnitAddresses ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompany' => $this->idCompany,
            'isActive' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'spyCompanyRoles' => $this->spyCompanyRoles,
            'spyCompanyUsers' => $this->spyCompanyUsers,
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits,
            'spyCompanyStores' => $this->spyCompanyStores,
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company' => $this->idCompany,
            'is_active' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'spy_company_roles' => $this->spyCompanyRoles,
            'spy_company_users' => $this->spyCompanyUsers,
            'spy_company_business_units' => $this->spyCompanyBusinessUnits,
            'spy_company_stores' => $this->spyCompanyStores,
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, false) : $this->idCompany,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_company_roles' => $this->spyCompanyRoles instanceof AbstractTransfer ? $this->spyCompanyRoles->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyRoles, true, false),
            'spy_company_users' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUsers, true, false),
            'spy_company_business_units' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, false),
            'spy_company_stores' => $this->spyCompanyStores instanceof AbstractTransfer ? $this->spyCompanyStores->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyStores, true, false),
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompany' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, true) : $this->idCompany,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyCompanyRoles' => $this->spyCompanyRoles instanceof AbstractTransfer ? $this->spyCompanyRoles->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyRoles, true, true),
            'spyCompanyUsers' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUsers, true, true),
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, true),
            'spyCompanyStores' => $this->spyCompanyStores instanceof AbstractTransfer ? $this->spyCompanyStores->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyStores, true, true),
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, true),
        ];
    }
}
