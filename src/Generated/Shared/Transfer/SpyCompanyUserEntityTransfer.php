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
class SpyCompanyUserEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY = 'fkCompany';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT = 'companyBusinessUnit';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const SPY_COMPANY_ROLE_TO_COMPANY_USERS = 'spyCompanyRoleToCompanyUsers';

    /**
     * @var string
     */
    public const SPY_QUOTE_REQUESTS = 'spyQuoteRequests';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_USERS = 'spyShoppingListCompanyUsers';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS = 'spyShoppingListCompanyBusinessUnitBlacklists';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER_INVITATIONS = 'spyCompanyUserInvitations';

    /**
     * @var string
     */
    public const SPY_QUOTE_APPROVALS = 'spyQuoteApprovals';

    /**
     * @var string
     */
    public const SPY_QUOTE_COMPANY_USERS = 'spyQuoteCompanyUsers';

    /**
     * @var integer|null
     */
    protected $idCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkCompany;

    /**
     * @var integer|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCustomer;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isDefault;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyEntityTransfer|null
     */
    protected $company;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    protected $customer;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToCompanyUserEntityTransfer[]
     */
    protected $spyCompanyRoleToCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer[]
     */
    protected $spyQuoteRequests;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[]
     */
    protected $spyShoppingListCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[]
     */
    protected $spyShoppingListCompanyBusinessUnitBlacklists;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[]
     */
    protected $spyCompanyUserInvitations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuoteApprovalEntityTransfer[]
     */
    protected $spyQuoteApprovals;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuoteCompanyUserEntityTransfer[]
     */
    protected $spyQuoteCompanyUsers;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'key' => 'key',
        'Key' => 'key',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
        'company' => 'company',
        'Company' => 'company',
        'customer' => 'customer',
        'Customer' => 'customer',
        'spy_company_role_to_company_users' => 'spyCompanyRoleToCompanyUsers',
        'spyCompanyRoleToCompanyUsers' => 'spyCompanyRoleToCompanyUsers',
        'SpyCompanyRoleToCompanyUsers' => 'spyCompanyRoleToCompanyUsers',
        'spy_quote_requests' => 'spyQuoteRequests',
        'spyQuoteRequests' => 'spyQuoteRequests',
        'SpyQuoteRequests' => 'spyQuoteRequests',
        'spy_shopping_list_company_users' => 'spyShoppingListCompanyUsers',
        'spyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'SpyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'spy_shopping_list_company_business_unit_blacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
        'spyShoppingListCompanyBusinessUnitBlacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
        'SpyShoppingListCompanyBusinessUnitBlacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
        'spy_company_user_invitations' => 'spyCompanyUserInvitations',
        'spyCompanyUserInvitations' => 'spyCompanyUserInvitations',
        'SpyCompanyUserInvitations' => 'spyCompanyUserInvitations',
        'spy_quote_approvals' => 'spyQuoteApprovals',
        'spyQuoteApprovals' => 'spyQuoteApprovals',
        'SpyQuoteApprovals' => 'spyQuoteApprovals',
        'spy_quote_company_users' => 'spyQuoteCompanyUsers',
        'spyQuoteCompanyUsers' => 'spyQuoteCompanyUsers',
        'SpyQuoteCompanyUsers' => 'spyQuoteCompanyUsers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY => [
            'type' => 'integer',
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
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
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
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyEntityTransfer',
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
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_ROLE_TO_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyRoleToCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_role_to_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_REQUESTS => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_requests',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_business_unit_blacklists',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_USER_INVITATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_user_invitations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_APPROVALS => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteApprovalEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_approvals',
            'is_collection' => true,
            'is_transfer' => true,
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CompanyUser\Persistence\SpyCompanyUser';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompany
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompany
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyOrFail()
    {
        if ($this->fkCompany === null) {
            $this->throwNullValueException(static::FK_COMPANY);
        }

        return $this->fkCompany;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnit($fkCompanyBusinessUnit)
    {
        $this->fkCompanyBusinessUnit = $fkCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnitOrFail($fkCompanyBusinessUnit)
    {
        if ($fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkCompanyBusinessUnit($fkCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

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
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyEntityTransfer|null $company
     *
     * @return $this
     */
    public function setCompany(SpyCompanyEntityTransfer $company = null)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyEntityTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyEntityTransfer $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail(SpyCompanyEntityTransfer $company)
    {
        return $this->setCompany($company);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyEntityTransfer
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(SpyCustomerEntityTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(SpyCustomerEntityTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToCompanyUserEntityTransfer[] $spyCompanyRoleToCompanyUsers
     *
     * @return $this
     */
    public function setSpyCompanyRoleToCompanyUsers(ArrayObject $spyCompanyRoleToCompanyUsers)
    {
        $this->spyCompanyRoleToCompanyUsers = $spyCompanyRoleToCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_ROLE_TO_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyRoleToCompanyUserEntityTransfer[]
     */
    public function getSpyCompanyRoleToCompanyUsers()
    {
        return $this->spyCompanyRoleToCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleToCompanyUserEntityTransfer $spyCompanyRoleToCompanyUsers
     *
     * @return $this
     */
    public function addSpyCompanyRoleToCompanyUsers(SpyCompanyRoleToCompanyUserEntityTransfer $spyCompanyRoleToCompanyUsers)
    {
        $this->spyCompanyRoleToCompanyUsers[] = $spyCompanyRoleToCompanyUsers;
        $this->modifiedProperties[self::SPY_COMPANY_ROLE_TO_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyRoleToCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_ROLE_TO_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer[] $spyQuoteRequests
     *
     * @return $this
     */
    public function setSpyQuoteRequests(ArrayObject $spyQuoteRequests)
    {
        $this->spyQuoteRequests = $spyQuoteRequests;
        $this->modifiedProperties[self::SPY_QUOTE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer[]
     */
    public function getSpyQuoteRequests()
    {
        return $this->spyQuoteRequests;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer $spyQuoteRequests
     *
     * @return $this
     */
    public function addSpyQuoteRequests(SpyQuoteRequestEntityTransfer $spyQuoteRequests)
    {
        $this->spyQuoteRequests[] = $spyQuoteRequests;
        $this->modifiedProperties[self::SPY_QUOTE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuoteRequests()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTE_REQUESTS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[] $spyShoppingListCompanyBusinessUnitBlacklists
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnitBlacklists(ArrayObject $spyShoppingListCompanyBusinessUnitBlacklists)
    {
        $this->spyShoppingListCompanyBusinessUnitBlacklists = $spyShoppingListCompanyBusinessUnitBlacklists;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[]
     */
    public function getSpyShoppingListCompanyBusinessUnitBlacklists()
    {
        return $this->spyShoppingListCompanyBusinessUnitBlacklists;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer $spyShoppingListCompanyBusinessUnitBlacklists
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyBusinessUnitBlacklists(SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer $spyShoppingListCompanyBusinessUnitBlacklists)
    {
        $this->spyShoppingListCompanyBusinessUnitBlacklists[] = $spyShoppingListCompanyBusinessUnitBlacklists;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyBusinessUnitBlacklists()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[] $spyCompanyUserInvitations
     *
     * @return $this
     */
    public function setSpyCompanyUserInvitations(ArrayObject $spyCompanyUserInvitations)
    {
        $this->spyCompanyUserInvitations = $spyCompanyUserInvitations;
        $this->modifiedProperties[self::SPY_COMPANY_USER_INVITATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[]
     */
    public function getSpyCompanyUserInvitations()
    {
        return $this->spyCompanyUserInvitations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer $spyCompanyUserInvitations
     *
     * @return $this
     */
    public function addSpyCompanyUserInvitations(SpyCompanyUserInvitationEntityTransfer $spyCompanyUserInvitations)
    {
        $this->spyCompanyUserInvitations[] = $spyCompanyUserInvitations;
        $this->modifiedProperties[self::SPY_COMPANY_USER_INVITATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUserInvitations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_USER_INVITATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyQuoteApprovalEntityTransfer[] $spyQuoteApprovals
     *
     * @return $this
     */
    public function setSpyQuoteApprovals(ArrayObject $spyQuoteApprovals)
    {
        $this->spyQuoteApprovals = $spyQuoteApprovals;
        $this->modifiedProperties[self::SPY_QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyQuoteApprovalEntityTransfer[]
     */
    public function getSpyQuoteApprovals()
    {
        return $this->spyQuoteApprovals;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteApprovalEntityTransfer $spyQuoteApprovals
     *
     * @return $this
     */
    public function addSpyQuoteApprovals(SpyQuoteApprovalEntityTransfer $spyQuoteApprovals)
    {
        $this->spyQuoteApprovals[] = $spyQuoteApprovals;
        $this->modifiedProperties[self::SPY_QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuoteApprovals()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTE_APPROVALS);

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
                case 'idCompanyUser':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'fkCustomer':
                case 'isActive':
                case 'isDefault':
                case 'key':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
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
                case 'spyCompanyRoleToCompanyUsers':
                case 'spyQuoteRequests':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
                case 'spyCompanyUserInvitations':
                case 'spyQuoteApprovals':
                case 'spyQuoteCompanyUsers':
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
                case 'idCompanyUser':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'fkCustomer':
                case 'isActive':
                case 'isDefault':
                case 'key':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCompanyRoleToCompanyUsers':
                case 'spyQuoteRequests':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
                case 'spyCompanyUserInvitations':
                case 'spyQuoteApprovals':
                case 'spyQuoteCompanyUsers':
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
                case 'idCompanyUser':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'fkCustomer':
                case 'isActive':
                case 'isDefault':
                case 'key':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCompanyRoleToCompanyUsers':
                case 'spyQuoteRequests':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
                case 'spyCompanyUserInvitations':
                case 'spyQuoteApprovals':
                case 'spyQuoteCompanyUsers':
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
        $this->spyCompanyRoleToCompanyUsers = $this->spyCompanyRoleToCompanyUsers ?: new ArrayObject();
        $this->spyQuoteRequests = $this->spyQuoteRequests ?: new ArrayObject();
        $this->spyShoppingListCompanyUsers = $this->spyShoppingListCompanyUsers ?: new ArrayObject();
        $this->spyShoppingListCompanyBusinessUnitBlacklists = $this->spyShoppingListCompanyBusinessUnitBlacklists ?: new ArrayObject();
        $this->spyCompanyUserInvitations = $this->spyCompanyUserInvitations ?: new ArrayObject();
        $this->spyQuoteApprovals = $this->spyQuoteApprovals ?: new ArrayObject();
        $this->spyQuoteCompanyUsers = $this->spyQuoteCompanyUsers ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompanyUser' => $this->idCompanyUser,
            'fkCompany' => $this->fkCompany,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkCustomer' => $this->fkCustomer,
            'isActive' => $this->isActive,
            'isDefault' => $this->isDefault,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'companyBusinessUnit' => $this->companyBusinessUnit,
            'company' => $this->company,
            'customer' => $this->customer,
            'spyCompanyRoleToCompanyUsers' => $this->spyCompanyRoleToCompanyUsers,
            'spyQuoteRequests' => $this->spyQuoteRequests,
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers,
            'spyShoppingListCompanyBusinessUnitBlacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists,
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations,
            'spyQuoteApprovals' => $this->spyQuoteApprovals,
            'spyQuoteCompanyUsers' => $this->spyQuoteCompanyUsers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser,
            'fk_company' => $this->fkCompany,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_customer' => $this->fkCustomer,
            'is_active' => $this->isActive,
            'is_default' => $this->isDefault,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'company_business_unit' => $this->companyBusinessUnit,
            'company' => $this->company,
            'customer' => $this->customer,
            'spy_company_role_to_company_users' => $this->spyCompanyRoleToCompanyUsers,
            'spy_quote_requests' => $this->spyQuoteRequests,
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers,
            'spy_shopping_list_company_business_unit_blacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists,
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations,
            'spy_quote_approvals' => $this->spyQuoteApprovals,
            'spy_quote_company_users' => $this->spyQuoteCompanyUsers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'spy_company_role_to_company_users' => $this->spyCompanyRoleToCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyRoleToCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyRoleToCompanyUsers, true, false),
            'spy_quote_requests' => $this->spyQuoteRequests instanceof AbstractTransfer ? $this->spyQuoteRequests->toArray(true, false) : $this->addValuesToCollection($this->spyQuoteRequests, true, false),
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, false),
            'spy_shopping_list_company_business_unit_blacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnitBlacklists->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnitBlacklists, true, false),
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, false),
            'spy_quote_approvals' => $this->spyQuoteApprovals instanceof AbstractTransfer ? $this->spyQuoteApprovals->toArray(true, false) : $this->addValuesToCollection($this->spyQuoteApprovals, true, false),
            'spy_quote_company_users' => $this->spyQuoteCompanyUsers instanceof AbstractTransfer ? $this->spyQuoteCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyQuoteCompanyUsers, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'spyCompanyRoleToCompanyUsers' => $this->spyCompanyRoleToCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyRoleToCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyRoleToCompanyUsers, true, true),
            'spyQuoteRequests' => $this->spyQuoteRequests instanceof AbstractTransfer ? $this->spyQuoteRequests->toArray(true, true) : $this->addValuesToCollection($this->spyQuoteRequests, true, true),
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, true),
            'spyShoppingListCompanyBusinessUnitBlacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnitBlacklists->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnitBlacklists, true, true),
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, true),
            'spyQuoteApprovals' => $this->spyQuoteApprovals instanceof AbstractTransfer ? $this->spyQuoteApprovals->toArray(true, true) : $this->addValuesToCollection($this->spyQuoteApprovals, true, true),
            'spyQuoteCompanyUsers' => $this->spyQuoteCompanyUsers instanceof AbstractTransfer ? $this->spyQuoteCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyQuoteCompanyUsers, true, true),
        ];
    }
}
