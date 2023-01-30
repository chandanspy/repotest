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
class SpyCompanyBusinessUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_BUSINESS_UNIT = 'idCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY = 'fkCompany';

    /**
     * @var string
     */
    public const FK_PARENT_COMPANY_BUSINESS_UNIT = 'fkParentCompanyBusinessUnit';

    /**
     * @var string
     */
    public const BIC = 'bic';

    /**
     * @var string
     */
    public const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const EXTERNAL_URL = 'externalUrl';

    /**
     * @var string
     */
    public const IBAN = 'iban';

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
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const PARENT_COMPANY_BUSINESS_UNIT = 'parentCompanyBusinessUnit';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_DEFAULT_BILLING_ADDRESS = 'companyBusinessUnitDefaultBillingAddress';

    /**
     * @var string
     */
    public const SPY_COMPANY_USERS = 'spyCompanyUsers';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIPS = 'spyMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS = 'spyMerchantRelationshipToCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_COMPANY_BUSINESS_UNITS = 'spyCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS = 'spyShoppingListCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS = 'spyCompanyUnitAddressToCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER_INVITATIONS = 'spyCompanyUserInvitations';

    /**
     * @var integer|null
     */
    protected $idCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCompany;

    /**
     * @var integer|null
     */
    protected $fkParentCompanyBusinessUnit;

    /**
     * @var string|null
     */
    protected $bic;

    /**
     * @var integer|null
     */
    protected $defaultBillingAddress;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $externalUrl;

    /**
     * @var string|null
     */
    protected $iban;

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
    protected $phone;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyEntityTransfer|null
     */
    protected $company;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $parentCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null
     */
    protected $companyBusinessUnitDefaultBillingAddress;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserEntityTransfer[]
     */
    protected $spyCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer[]
     */
    protected $spyMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyMerchantRelationshipToCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyShoppingListCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyCompanyUnitAddressToCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[]
     */
    protected $spyCompanyUserInvitations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_business_unit' => 'idCompanyBusinessUnit',
        'idCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'IdCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'fk_parent_company_business_unit' => 'fkParentCompanyBusinessUnit',
        'fkParentCompanyBusinessUnit' => 'fkParentCompanyBusinessUnit',
        'FkParentCompanyBusinessUnit' => 'fkParentCompanyBusinessUnit',
        'bic' => 'bic',
        'Bic' => 'bic',
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'email' => 'email',
        'Email' => 'email',
        'external_url' => 'externalUrl',
        'externalUrl' => 'externalUrl',
        'ExternalUrl' => 'externalUrl',
        'iban' => 'iban',
        'Iban' => 'iban',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'phone' => 'phone',
        'Phone' => 'phone',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'company' => 'company',
        'Company' => 'company',
        'parent_company_business_unit' => 'parentCompanyBusinessUnit',
        'parentCompanyBusinessUnit' => 'parentCompanyBusinessUnit',
        'ParentCompanyBusinessUnit' => 'parentCompanyBusinessUnit',
        'company_business_unit_default_billing_address' => 'companyBusinessUnitDefaultBillingAddress',
        'companyBusinessUnitDefaultBillingAddress' => 'companyBusinessUnitDefaultBillingAddress',
        'CompanyBusinessUnitDefaultBillingAddress' => 'companyBusinessUnitDefaultBillingAddress',
        'spy_company_users' => 'spyCompanyUsers',
        'spyCompanyUsers' => 'spyCompanyUsers',
        'SpyCompanyUsers' => 'spyCompanyUsers',
        'spy_merchant_relationships' => 'spyMerchantRelationships',
        'spyMerchantRelationships' => 'spyMerchantRelationships',
        'SpyMerchantRelationships' => 'spyMerchantRelationships',
        'spy_merchant_relationship_to_company_business_units' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'spyMerchantRelationshipToCompanyBusinessUnits' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'SpyMerchantRelationshipToCompanyBusinessUnits' => 'spyMerchantRelationshipToCompanyBusinessUnits',
        'spy_company_business_units' => 'spyCompanyBusinessUnits',
        'spyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'SpyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'spy_shopping_list_company_business_units' => 'spyShoppingListCompanyBusinessUnits',
        'spyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
        'SpyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
        'spy_company_unit_address_to_company_business_units' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
        'spyCompanyUnitAddressToCompanyBusinessUnits' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
        'SpyCompanyUnitAddressToCompanyBusinessUnits' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
        'spy_company_user_invitations' => 'spyCompanyUserInvitations',
        'spyCompanyUserInvitations' => 'spyCompanyUserInvitations',
        'SpyCompanyUserInvitations' => 'spyCompanyUserInvitations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_business_unit',
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
        self::FK_PARENT_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_parent_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BIC => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bic',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'default_billing_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXTERNAL_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IBAN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iban',
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
        self::PHONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'phone',
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
        self::PARENT_COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT_DEFAULT_BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_default_billing_address',
            'is_collection' => false,
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
        self::SPY_MERCHANT_RELATIONSHIPS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationships',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship_to_company_business_units',
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
        self::SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_address_to_company_business_units',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit';


    /**
     * @module 
     *
     * @param integer|null $idCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnit($idCompanyBusinessUnit)
    {
        $this->idCompanyBusinessUnit = $idCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnitOrFail($idCompanyBusinessUnit)
    {
        if ($idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdCompanyBusinessUnit($idCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_BUSINESS_UNIT);

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
     * @param integer|null $fkParentCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkParentCompanyBusinessUnit($fkParentCompanyBusinessUnit)
    {
        $this->fkParentCompanyBusinessUnit = $fkParentCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_PARENT_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkParentCompanyBusinessUnit()
    {
        return $this->fkParentCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkParentCompanyBusinessUnitOrFail($fkParentCompanyBusinessUnit)
    {
        if ($fkParentCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_PARENT_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkParentCompanyBusinessUnit($fkParentCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkParentCompanyBusinessUnitOrFail()
    {
        if ($this->fkParentCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_PARENT_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkParentCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkParentCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_PARENT_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        $this->modifiedProperties[self::BIC] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @module 
     *
     * @param string|null $bic
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBicOrFail($bic)
    {
        if ($bic === null) {
            $this->throwNullValueException(static::BIC);
        }

        return $this->setBic($bic);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBicOrFail()
    {
        if ($this->bic === null) {
            $this->throwNullValueException(static::BIC);
        }

        return $this->bic;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBic()
    {
        $this->assertPropertyIsSet(self::BIC);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->modifiedProperties[self::DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $defaultBillingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultBillingAddressOrFail($defaultBillingAddress)
    {
        if ($defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->setDefaultBillingAddress($defaultBillingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDefaultBillingAddressOrFail()
    {
        if ($this->defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module 
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $externalUrl
     *
     * @return $this
     */
    public function setExternalUrl($externalUrl)
    {
        $this->externalUrl = $externalUrl;
        $this->modifiedProperties[self::EXTERNAL_URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @module 
     *
     * @param string|null $externalUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlOrFail($externalUrl)
    {
        if ($externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->setExternalUrl($externalUrl);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlOrFail()
    {
        if ($this->externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->externalUrl;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrl()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        $this->modifiedProperties[self::IBAN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @module 
     *
     * @param string|null $iban
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIbanOrFail($iban)
    {
        if ($iban === null) {
            $this->throwNullValueException(static::IBAN);
        }

        return $this->setIban($iban);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIbanOrFail()
    {
        if ($this->iban === null) {
            $this->throwNullValueException(static::IBAN);
        }

        return $this->iban;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIban()
    {
        $this->assertPropertyIsSet(self::IBAN);

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
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->modifiedProperties[self::PHONE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module 
     *
     * @param string|null $phone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPhoneOrFail($phone)
    {
        if ($phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->setPhone($phone);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPhoneOrFail()
    {
        if ($this->phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->phone;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePhone()
    {
        $this->assertPropertyIsSet(self::PHONE);

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
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null $parentCompanyBusinessUnit
     *
     * @return $this
     */
    public function setParentCompanyBusinessUnit(SpyCompanyBusinessUnitEntityTransfer $parentCompanyBusinessUnit = null)
    {
        $this->parentCompanyBusinessUnit = $parentCompanyBusinessUnit;
        $this->modifiedProperties[self::PARENT_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    public function getParentCompanyBusinessUnit()
    {
        return $this->parentCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $parentCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentCompanyBusinessUnitOrFail(SpyCompanyBusinessUnitEntityTransfer $parentCompanyBusinessUnit)
    {
        return $this->setParentCompanyBusinessUnit($parentCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer
     */
    public function getParentCompanyBusinessUnitOrFail()
    {
        if ($this->parentCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::PARENT_COMPANY_BUSINESS_UNIT);
        }

        return $this->parentCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::PARENT_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null $companyBusinessUnitDefaultBillingAddress
     *
     * @return $this
     */
    public function setCompanyBusinessUnitDefaultBillingAddress(SpyCompanyUnitAddressEntityTransfer $companyBusinessUnitDefaultBillingAddress = null)
    {
        $this->companyBusinessUnitDefaultBillingAddress = $companyBusinessUnitDefaultBillingAddress;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null
     */
    public function getCompanyBusinessUnitDefaultBillingAddress()
    {
        return $this->companyBusinessUnitDefaultBillingAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer $companyBusinessUnitDefaultBillingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitDefaultBillingAddressOrFail(SpyCompanyUnitAddressEntityTransfer $companyBusinessUnitDefaultBillingAddress)
    {
        return $this->setCompanyBusinessUnitDefaultBillingAddress($companyBusinessUnitDefaultBillingAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer
     */
    public function getCompanyBusinessUnitDefaultBillingAddressOrFail()
    {
        if ($this->companyBusinessUnitDefaultBillingAddress === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_DEFAULT_BILLING_ADDRESS);
        }

        return $this->companyBusinessUnitDefaultBillingAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_DEFAULT_BILLING_ADDRESS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer[] $spyMerchantRelationships
     *
     * @return $this
     */
    public function setSpyMerchantRelationships(ArrayObject $spyMerchantRelationships)
    {
        $this->spyMerchantRelationships = $spyMerchantRelationships;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer[]
     */
    public function getSpyMerchantRelationships()
    {
        return $this->spyMerchantRelationships;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer $spyMerchantRelationships
     *
     * @return $this
     */
    public function addSpyMerchantRelationships(SpyMerchantRelationshipEntityTransfer $spyMerchantRelationships)
    {
        $this->spyMerchantRelationships[] = $spyMerchantRelationships;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationships()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[] $spyMerchantRelationshipToCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipToCompanyBusinessUnits(ArrayObject $spyMerchantRelationshipToCompanyBusinessUnits)
    {
        $this->spyMerchantRelationshipToCompanyBusinessUnits = $spyMerchantRelationshipToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyMerchantRelationshipToCompanyBusinessUnits()
    {
        return $this->spyMerchantRelationshipToCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer $spyMerchantRelationshipToCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyMerchantRelationshipToCompanyBusinessUnits(SpyMerchantRelationshipToCompanyBusinessUnitEntityTransfer $spyMerchantRelationshipToCompanyBusinessUnits)
    {
        $this->spyMerchantRelationshipToCompanyBusinessUnits[] = $spyMerchantRelationshipToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationshipToCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNITS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer[] $spyCompanyUnitAddressToCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddressToCompanyBusinessUnits(ArrayObject $spyCompanyUnitAddressToCompanyBusinessUnits)
    {
        $this->spyCompanyUnitAddressToCompanyBusinessUnits = $spyCompanyUnitAddressToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyCompanyUnitAddressToCompanyBusinessUnits()
    {
        return $this->spyCompanyUnitAddressToCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer $spyCompanyUnitAddressToCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddressToCompanyBusinessUnits(SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer $spyCompanyUnitAddressToCompanyBusinessUnits)
    {
        $this->spyCompanyUnitAddressToCompanyBusinessUnits[] = $spyCompanyUnitAddressToCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddressToCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS);

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
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'fkParentCompanyBusinessUnit':
                case 'bic':
                case 'defaultBillingAddress':
                case 'email':
                case 'externalUrl':
                case 'iban':
                case 'key':
                case 'name':
                case 'phone':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'company':
                case 'parentCompanyBusinessUnit':
                case 'companyBusinessUnitDefaultBillingAddress':
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
                case 'spyCompanyUsers':
                case 'spyMerchantRelationships':
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyCompanyBusinessUnits':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
                case 'spyCompanyUserInvitations':
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
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'fkParentCompanyBusinessUnit':
                case 'bic':
                case 'defaultBillingAddress':
                case 'email':
                case 'externalUrl':
                case 'iban':
                case 'key':
                case 'name':
                case 'phone':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'company':
                case 'parentCompanyBusinessUnit':
                case 'companyBusinessUnitDefaultBillingAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCompanyUsers':
                case 'spyMerchantRelationships':
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyCompanyBusinessUnits':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
                case 'spyCompanyUserInvitations':
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
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'fkParentCompanyBusinessUnit':
                case 'bic':
                case 'defaultBillingAddress':
                case 'email':
                case 'externalUrl':
                case 'iban':
                case 'key':
                case 'name':
                case 'phone':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'company':
                case 'parentCompanyBusinessUnit':
                case 'companyBusinessUnitDefaultBillingAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCompanyUsers':
                case 'spyMerchantRelationships':
                case 'spyMerchantRelationshipToCompanyBusinessUnits':
                case 'spyCompanyBusinessUnits':
                case 'spyShoppingListCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
                case 'spyCompanyUserInvitations':
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
        $this->spyCompanyUsers = $this->spyCompanyUsers ?: new ArrayObject();
        $this->spyMerchantRelationships = $this->spyMerchantRelationships ?: new ArrayObject();
        $this->spyMerchantRelationshipToCompanyBusinessUnits = $this->spyMerchantRelationshipToCompanyBusinessUnits ?: new ArrayObject();
        $this->spyCompanyBusinessUnits = $this->spyCompanyBusinessUnits ?: new ArrayObject();
        $this->spyShoppingListCompanyBusinessUnits = $this->spyShoppingListCompanyBusinessUnits ?: new ArrayObject();
        $this->spyCompanyUnitAddressToCompanyBusinessUnits = $this->spyCompanyUnitAddressToCompanyBusinessUnits ?: new ArrayObject();
        $this->spyCompanyUserInvitations = $this->spyCompanyUserInvitations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit,
            'fkCompany' => $this->fkCompany,
            'fkParentCompanyBusinessUnit' => $this->fkParentCompanyBusinessUnit,
            'bic' => $this->bic,
            'defaultBillingAddress' => $this->defaultBillingAddress,
            'email' => $this->email,
            'externalUrl' => $this->externalUrl,
            'iban' => $this->iban,
            'key' => $this->key,
            'name' => $this->name,
            'phone' => $this->phone,
            'uuid' => $this->uuid,
            'company' => $this->company,
            'parentCompanyBusinessUnit' => $this->parentCompanyBusinessUnit,
            'companyBusinessUnitDefaultBillingAddress' => $this->companyBusinessUnitDefaultBillingAddress,
            'spyCompanyUsers' => $this->spyCompanyUsers,
            'spyMerchantRelationships' => $this->spyMerchantRelationships,
            'spyMerchantRelationshipToCompanyBusinessUnits' => $this->spyMerchantRelationshipToCompanyBusinessUnits,
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits,
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits,
            'spyCompanyUnitAddressToCompanyBusinessUnits' => $this->spyCompanyUnitAddressToCompanyBusinessUnits,
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_business_unit' => $this->idCompanyBusinessUnit,
            'fk_company' => $this->fkCompany,
            'fk_parent_company_business_unit' => $this->fkParentCompanyBusinessUnit,
            'bic' => $this->bic,
            'default_billing_address' => $this->defaultBillingAddress,
            'email' => $this->email,
            'external_url' => $this->externalUrl,
            'iban' => $this->iban,
            'key' => $this->key,
            'name' => $this->name,
            'phone' => $this->phone,
            'uuid' => $this->uuid,
            'company' => $this->company,
            'parent_company_business_unit' => $this->parentCompanyBusinessUnit,
            'company_business_unit_default_billing_address' => $this->companyBusinessUnitDefaultBillingAddress,
            'spy_company_users' => $this->spyCompanyUsers,
            'spy_merchant_relationships' => $this->spyMerchantRelationships,
            'spy_merchant_relationship_to_company_business_units' => $this->spyMerchantRelationshipToCompanyBusinessUnits,
            'spy_company_business_units' => $this->spyCompanyBusinessUnits,
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits,
            'spy_company_unit_address_to_company_business_units' => $this->spyCompanyUnitAddressToCompanyBusinessUnits,
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_business_unit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, false) : $this->idCompanyBusinessUnit,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'fk_parent_company_business_unit' => $this->fkParentCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkParentCompanyBusinessUnit->toArray(true, false) : $this->fkParentCompanyBusinessUnit,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, false) : $this->bic,
            'default_billing_address' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, false) : $this->defaultBillingAddress,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'external_url' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, false) : $this->externalUrl,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, false) : $this->iban,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'parent_company_business_unit' => $this->parentCompanyBusinessUnit instanceof AbstractTransfer ? $this->parentCompanyBusinessUnit->toArray(true, false) : $this->parentCompanyBusinessUnit,
            'company_business_unit_default_billing_address' => $this->companyBusinessUnitDefaultBillingAddress instanceof AbstractTransfer ? $this->companyBusinessUnitDefaultBillingAddress->toArray(true, false) : $this->companyBusinessUnitDefaultBillingAddress,
            'spy_company_users' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUsers, true, false),
            'spy_merchant_relationships' => $this->spyMerchantRelationships instanceof AbstractTransfer ? $this->spyMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationships, true, false),
            'spy_merchant_relationship_to_company_business_units' => $this->spyMerchantRelationshipToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyMerchantRelationshipToCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationshipToCompanyBusinessUnits, true, false),
            'spy_company_business_units' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, false),
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, false),
            'spy_company_unit_address_to_company_business_units' => $this->spyCompanyUnitAddressToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyUnitAddressToCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddressToCompanyBusinessUnits, true, false),
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, true) : $this->idCompanyBusinessUnit,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'fkParentCompanyBusinessUnit' => $this->fkParentCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkParentCompanyBusinessUnit->toArray(true, true) : $this->fkParentCompanyBusinessUnit,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, true) : $this->bic,
            'defaultBillingAddress' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, true) : $this->defaultBillingAddress,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'externalUrl' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, true) : $this->externalUrl,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, true) : $this->iban,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'parentCompanyBusinessUnit' => $this->parentCompanyBusinessUnit instanceof AbstractTransfer ? $this->parentCompanyBusinessUnit->toArray(true, true) : $this->parentCompanyBusinessUnit,
            'companyBusinessUnitDefaultBillingAddress' => $this->companyBusinessUnitDefaultBillingAddress instanceof AbstractTransfer ? $this->companyBusinessUnitDefaultBillingAddress->toArray(true, true) : $this->companyBusinessUnitDefaultBillingAddress,
            'spyCompanyUsers' => $this->spyCompanyUsers instanceof AbstractTransfer ? $this->spyCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUsers, true, true),
            'spyMerchantRelationships' => $this->spyMerchantRelationships instanceof AbstractTransfer ? $this->spyMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationships, true, true),
            'spyMerchantRelationshipToCompanyBusinessUnits' => $this->spyMerchantRelationshipToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyMerchantRelationshipToCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationshipToCompanyBusinessUnits, true, true),
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, true),
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, true),
            'spyCompanyUnitAddressToCompanyBusinessUnits' => $this->spyCompanyUnitAddressToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyUnitAddressToCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddressToCompanyBusinessUnits, true, true),
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, true),
        ];
    }
}
