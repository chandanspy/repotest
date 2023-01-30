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
class CompanyUserTransfer extends AbstractTransfer
{
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
    public const FK_COMPANY = 'fkCompany';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const COMPANY_ROLE_COLLECTION = 'companyRoleCollection';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\CompanyTransfer|null
     */
    protected $company;

    /**
     * @var int|null
     */
    protected $fkCompany;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var int|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\CompanyRoleCollectionTransfer|null
     */
    protected $companyRoleCollection;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
        'company' => 'company',
        'Company' => 'company',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'customer' => 'customer',
        'Customer' => 'customer',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'company_role_collection' => 'companyRoleCollection',
        'companyRoleCollection' => 'companyRoleCollection',
        'CompanyRoleCollection' => 'companyRoleCollection',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'key' => 'key',
        'Key' => 'key',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTransfer',
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
        self::ID_COMPANY_USER => [
            'type' => 'int',
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
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
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
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
        self::COMPANY_ROLE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CompanyRoleCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_role_collection',
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
        self::FK_CUSTOMER => [
            'type' => 'int',
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
        self::IS_ACTIVE => [
            'type' => 'bool',
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
    ];

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteRequest|SharedCart
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(CompanyBusinessUnitTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteRequest|SharedCart
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteRequest|SharedCart
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(CompanyBusinessUnitTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteRequest|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|MerchantRelationshipProductList|MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|QuoteRequest|SharedCart
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|BusinessOnBehalf|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyRoleGui|CompanySalesConnector|CompanyUserGui|CompanyUser|CompanyUsersRestApi|MerchantRelationshipProductList|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|BusinessOnBehalf|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyRoleGui|CompanySalesConnector|CompanyUserGui|CompanyUser|CompanyUsersRestApi|MerchantRelationshipProductList|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|BusinessOnBehalf|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyRoleGui|CompanySalesConnector|CompanyUserGui|CompanyUser|CompanyUsersRestApi|MerchantRelationshipProductList|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|BusinessOnBehalf|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyRoleGui|CompanySalesConnector|CompanyUserGui|CompanyUser|CompanyUsersRestApi|MerchantRelationshipProductList|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|BusinessOnBehalf|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyRoleGui|CompanySalesConnector|CompanyUserGui|CompanyUser|CompanyUsersRestApi|MerchantRelationshipProductList|QuoteRequest
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
     * @module CompanyPage|CompanyUserInvitationPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|QuoteApproval|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyUserInvitationPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|QuoteApproval|SharedCartsRestApi|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|QuoteApproval|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyUserInvitationPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|QuoteApproval|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyUserInvitationPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|QuoteApproval|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyUserInvitationPage|PersistentCartShareWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanySalesConnector|CompanyUserGui|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|OauthCompanyUser|OauthPermission|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $idCompanyUser
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
     * @module CompanyPage|CompanyUserInvitationPage|PersistentCartShareWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanySalesConnector|CompanyUserGui|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|OauthCompanyUser|OauthPermission|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|PersistentCartShareWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanySalesConnector|CompanyUserGui|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|OauthCompanyUser|OauthPermission|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $idCompanyUser
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
     * @module CompanyPage|CompanyUserInvitationPage|PersistentCartShareWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanySalesConnector|CompanyUserGui|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|OauthCompanyUser|OauthPermission|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|PersistentCartShareWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestWidget|SharedCartPage|SharedCartWidget|ShoppingListPage|ShoppingListWidget|BusinessOnBehalfGui|BusinessOnBehalf|CartsRestApi|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyRoleGui|CompanyRole|CompanySalesConnector|CompanyUserGui|CompanyUserInvitation|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|ConfigurableBundleCartsRestApi|MerchantRelationshipProductList|OauthCompanyUser|OauthPermission|PersistentCart|QuoteApproval|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyMailConnector|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser|CustomersRestApi|MerchantRelationshipProductList|OauthCompanyUser|QuoteApproval|QuoteRequest|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyMailConnector|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser|CustomersRestApi|MerchantRelationshipProductList|OauthCompanyUser|QuoteApproval|QuoteRequest|ShoppingList
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyMailConnector|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser|CustomersRestApi|MerchantRelationshipProductList|OauthCompanyUser|QuoteApproval|QuoteRequest|ShoppingList
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyMailConnector|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser|CustomersRestApi|MerchantRelationshipProductList|OauthCompanyUser|QuoteApproval|QuoteRequest|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyMailConnector|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser|CustomersRestApi|MerchantRelationshipProductList|OauthCompanyUser|QuoteApproval|QuoteRequest|ShoppingList
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
     * @module CompanyPage|PersistentCartShareWidget|SharedCartPage|CompanyBusinessUnitStorage|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUserInvitation|CompanyUserStorage|MerchantRelationship|QuoteApproval|SharedCart|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $fkCompanyBusinessUnit
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
     * @module CompanyPage|PersistentCartShareWidget|SharedCartPage|CompanyBusinessUnitStorage|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUserInvitation|CompanyUserStorage|MerchantRelationship|QuoteApproval|SharedCart|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module CompanyPage|PersistentCartShareWidget|SharedCartPage|CompanyBusinessUnitStorage|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUserInvitation|CompanyUserStorage|MerchantRelationship|QuoteApproval|SharedCart|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $fkCompanyBusinessUnit
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
     * @module CompanyPage|PersistentCartShareWidget|SharedCartPage|CompanyBusinessUnitStorage|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUserInvitation|CompanyUserStorage|MerchantRelationship|QuoteApproval|SharedCart|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module CompanyPage|PersistentCartShareWidget|SharedCartPage|CompanyBusinessUnitStorage|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUserInvitation|CompanyUserStorage|MerchantRelationship|QuoteApproval|SharedCart|ShoppingList|ShoppingListsRestApi
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
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi|CompanyUsersRestApi|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\CompanyRoleCollectionTransfer|null $companyRoleCollection
     *
     * @return $this
     */
    public function setCompanyRoleCollection(CompanyRoleCollectionTransfer $companyRoleCollection = null)
    {
        $this->companyRoleCollection = $companyRoleCollection;
        $this->modifiedProperties[self::COMPANY_ROLE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi|CompanyUsersRestApi|QuoteApproval
     *
     * @return \Generated\Shared\Transfer\CompanyRoleCollectionTransfer|null
     */
    public function getCompanyRoleCollection()
    {
        return $this->companyRoleCollection;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi|CompanyUsersRestApi|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\CompanyRoleCollectionTransfer $companyRoleCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyRoleCollectionOrFail(CompanyRoleCollectionTransfer $companyRoleCollection)
    {
        return $this->setCompanyRoleCollection($companyRoleCollection);
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi|CompanyUsersRestApi|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyRoleCollectionTransfer
     */
    public function getCompanyRoleCollectionOrFail()
    {
        if ($this->companyRoleCollection === null) {
            $this->throwNullValueException(static::COMPANY_ROLE_COLLECTION);
        }

        return $this->companyRoleCollection;
    }

    /**
     * @module CompanyPage|CompanyRoleGui|CompanyRole|CompanyRolesRestApi|CompanyUsersRestApi|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyRoleCollection()
    {
        $this->assertPropertyIsSet(self::COMPANY_ROLE_COLLECTION);

        return $this;
    }

    /**
     * @module CompanyPage|BusinessOnBehalf
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
     * @module CompanyPage|BusinessOnBehalf
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module CompanyPage|BusinessOnBehalf
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
     * @module CompanyPage|BusinessOnBehalf
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
     * @module CompanyPage|BusinessOnBehalf
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
     * @module SharedCartPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|MerchantRelationshipProductList
     *
     * @param int|null $fkCustomer
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
     * @module SharedCartPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|MerchantRelationshipProductList
     *
     * @return int|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module SharedCartPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|MerchantRelationshipProductList
     *
     * @param int|null $fkCustomer
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
     * @module SharedCartPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|MerchantRelationshipProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module SharedCartPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUserInvitation|CompanyUser|MerchantRelationshipProductList
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
     * @module CompanyUser
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
     * @module CompanyUser
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyUser
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
     * @module CompanyUser
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
     * @module CompanyUser
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
     * @module CompanyUserStorage|CompanyUser|CompanyUsersRestApi|OauthCompanyUser|OauthPermission|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyUserStorage|CompanyUser|CompanyUsersRestApi|OauthCompanyUser|OauthPermission|SharedCartsRestApi|ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CompanyUserStorage|CompanyUser|CompanyUsersRestApi|OauthCompanyUser|OauthPermission|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyUserStorage|CompanyUser|CompanyUsersRestApi|OauthCompanyUser|OauthPermission|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyUserStorage|CompanyUser|CompanyUsersRestApi|OauthCompanyUser|OauthPermission|SharedCartsRestApi|ShoppingListsRestApi
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
     * @module CompanyUser|CompanyUsersRestApi
     *
     * @param bool|null $isActive
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
     * @module CompanyUser|CompanyUsersRestApi
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CompanyUser|CompanyUsersRestApi
     *
     * @param bool|null $isActive
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
     * @module CompanyUser|CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module CompanyUser|CompanyUsersRestApi
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
                case 'fkCompany':
                case 'idCompanyUser':
                case 'fkCompanyBusinessUnit':
                case 'isDefault':
                case 'fkCustomer':
                case 'key':
                case 'uuid':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
                case 'companyRoleCollection':
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
                case 'fkCompany':
                case 'idCompanyUser':
                case 'fkCompanyBusinessUnit':
                case 'isDefault':
                case 'fkCustomer':
                case 'key':
                case 'uuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
                case 'companyRoleCollection':
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
                case 'fkCompany':
                case 'idCompanyUser':
                case 'fkCompanyBusinessUnit':
                case 'isDefault':
                case 'fkCustomer':
                case 'key':
                case 'uuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'company':
                case 'customer':
                case 'companyRoleCollection':
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
            'fkCompany' => $this->fkCompany,
            'idCompanyUser' => $this->idCompanyUser,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'isDefault' => $this->isDefault,
            'fkCustomer' => $this->fkCustomer,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'isActive' => $this->isActive,
            'companyBusinessUnit' => $this->companyBusinessUnit,
            'company' => $this->company,
            'customer' => $this->customer,
            'companyRoleCollection' => $this->companyRoleCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_company' => $this->fkCompany,
            'id_company_user' => $this->idCompanyUser,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'is_default' => $this->isDefault,
            'fk_customer' => $this->fkCustomer,
            'key' => $this->key,
            'uuid' => $this->uuid,
            'is_active' => $this->isActive,
            'company_business_unit' => $this->companyBusinessUnit,
            'company' => $this->company,
            'customer' => $this->customer,
            'company_role_collection' => $this->companyRoleCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'company_role_collection' => $this->companyRoleCollection instanceof AbstractTransfer ? $this->companyRoleCollection->toArray(true, false) : $this->companyRoleCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'companyRoleCollection' => $this->companyRoleCollection instanceof AbstractTransfer ? $this->companyRoleCollection->toArray(true, true) : $this->companyRoleCollection,
        ];
    }
}
