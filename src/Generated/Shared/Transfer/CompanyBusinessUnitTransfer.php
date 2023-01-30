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
class CompanyBusinessUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

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
    public const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    /**
     * @var string
     */
    public const ADDRESS_COLLECTION = 'addressCollection';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const PHONE = 'phone';

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
    public const BIC = 'bic';

    /**
     * @var string
     */
    public const FK_PARENT_COMPANY_BUSINESS_UNIT = 'fkParentCompanyBusinessUnit';

    /**
     * @var string
     */
    public const PARENT_COMPANY_BUSINESS_UNIT = 'parentCompanyBusinessUnit';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIPS = 'merchantRelationships';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $fkCompany;

    /**
     * @var int|null
     */
    protected $defaultBillingAddress;

    /**
     * @var \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null
     */
    protected $addressCollection;

    /**
     * @var \Generated\Shared\Transfer\CompanyTransfer|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $phone;

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
    protected $bic;

    /**
     * @var int|null
     */
    protected $fkParentCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    protected $parentCompanyBusinessUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipTransfer[]
     */
    protected $merchantRelationships;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_company_business_unit' => 'idCompanyBusinessUnit',
        'idCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'IdCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'address_collection' => 'addressCollection',
        'addressCollection' => 'addressCollection',
        'AddressCollection' => 'addressCollection',
        'company' => 'company',
        'Company' => 'company',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'key' => 'key',
        'Key' => 'key',
        'email' => 'email',
        'Email' => 'email',
        'phone' => 'phone',
        'Phone' => 'phone',
        'external_url' => 'externalUrl',
        'externalUrl' => 'externalUrl',
        'ExternalUrl' => 'externalUrl',
        'iban' => 'iban',
        'Iban' => 'iban',
        'bic' => 'bic',
        'Bic' => 'bic',
        'fk_parent_company_business_unit' => 'fkParentCompanyBusinessUnit',
        'fkParentCompanyBusinessUnit' => 'fkParentCompanyBusinessUnit',
        'FkParentCompanyBusinessUnit' => 'fkParentCompanyBusinessUnit',
        'parent_company_business_unit' => 'parentCompanyBusinessUnit',
        'parentCompanyBusinessUnit' => 'parentCompanyBusinessUnit',
        'ParentCompanyBusinessUnit' => 'parentCompanyBusinessUnit',
        'merchant_relationships' => 'merchantRelationships',
        'merchantRelationships' => 'merchantRelationships',
        'MerchantRelationships' => 'merchantRelationships',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'int',
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
        self::ADDRESS_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'address_collection',
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
        self::FK_PARENT_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
        self::PARENT_COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTransfer',
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
        self::MERCHANT_RELATIONSHIPS => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationships',
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|QuoteRequest
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|QuoteRequest
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|QuoteRequest
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUnitAddress|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage|SharedCart|ShoppingList
     *
     * @param int|null $idCompanyBusinessUnit
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUnitAddress|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage|SharedCart|ShoppingList
     *
     * @return int|null
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module CompanyPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUnitAddress|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage|SharedCart|ShoppingList
     *
     * @param int|null $idCompanyBusinessUnit
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUnitAddress|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage|SharedCart|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module CompanyPage|SharedCartPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUnitAddress|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipProductList|MerchantRelationship|PriceProductMerchantRelationshipStorage|SharedCart|ShoppingList
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
     * @module CompanyPage|SharedCartPage|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui
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
     * @module CompanyPage|SharedCartPage|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui
     *
     * @return int|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module CompanyPage|SharedCartPage|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui
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
     * @module CompanyPage|SharedCartPage|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui
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
     * @module CompanyPage|SharedCartPage|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi|CompanyUnitAddressGui|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @param int|null $defaultBillingAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return int|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @param int|null $defaultBillingAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultBillingAddressOrFail()
    {
        if ($this->defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null $addressCollection
     *
     * @return $this
     */
    public function setAddressCollection(CompanyUnitAddressCollectionTransfer $addressCollection = null)
    {
        $this->addressCollection = $addressCollection;
        $this->modifiedProperties[self::ADDRESS_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer|null
     */
    public function getAddressCollection()
    {
        return $this->addressCollection;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer $addressCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddressCollectionOrFail(CompanyUnitAddressCollectionTransfer $addressCollection)
    {
        return $this->setAddressCollection($addressCollection);
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer
     */
    public function getAddressCollectionOrFail()
    {
        if ($this->addressCollection === null) {
            $this->throwNullValueException(static::ADDRESS_COLLECTION);
        }

        return $this->addressCollection;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddressCollection()
    {
        $this->assertPropertyIsSet(self::ADDRESS_COLLECTION);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompaniesRestApi|CompanyBusinessUnit|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
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
     * @module CompanyPage|CompanyWidget|CompaniesRestApi|CompanyBusinessUnit|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompaniesRestApi|CompanyBusinessUnit|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
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
     * @module CompanyPage|CompanyWidget|CompaniesRestApi|CompanyBusinessUnit|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
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
     * @module CompanyPage|CompanyWidget|CompaniesRestApi|CompanyBusinessUnit|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
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
     * @module CompanyPage|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyPage|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyPage|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyPage|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @param int|null $fkParentCompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @return int|null
     */
    public function getFkParentCompanyBusinessUnit()
    {
        return $this->fkParentCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param int|null $fkParentCompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkParentCompanyBusinessUnitOrFail()
    {
        if ($this->fkParentCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_PARENT_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkParentCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null $parentCompanyBusinessUnit
     *
     * @return $this
     */
    public function setParentCompanyBusinessUnit(CompanyBusinessUnitTransfer $parentCompanyBusinessUnit = null)
    {
        $this->parentCompanyBusinessUnit = $parentCompanyBusinessUnit;
        $this->modifiedProperties[self::PARENT_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    public function getParentCompanyBusinessUnit()
    {
        return $this->parentCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $parentCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentCompanyBusinessUnitOrFail(CompanyBusinessUnitTransfer $parentCompanyBusinessUnit)
    {
        return $this->setParentCompanyBusinessUnit($parentCompanyBusinessUnit);
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function getParentCompanyBusinessUnitOrFail()
    {
        if ($this->parentCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::PARENT_COMPANY_BUSINESS_UNIT);
        }

        return $this->parentCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
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
     * @module MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationship
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipTransfer[] $merchantRelationships
     *
     * @return $this
     */
    public function setMerchantRelationships(ArrayObject $merchantRelationships)
    {
        $this->merchantRelationships = $merchantRelationships;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationship
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipTransfer[]
     */
    public function getMerchantRelationships()
    {
        return $this->merchantRelationships;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipTransfer $merchantRelationship
     *
     * @return $this
     */
    public function addMerchantRelationship(MerchantRelationshipTransfer $merchantRelationship)
    {
        $this->merchantRelationships[] = $merchantRelationship;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|MerchantRelationship|PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationships()
    {
        $this->assertCollectionPropertyIsSet(self::MERCHANT_RELATIONSHIPS);

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
                case 'name':
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'defaultBillingAddress':
                case 'uuid':
                case 'key':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'iban':
                case 'bic':
                case 'fkParentCompanyBusinessUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'addressCollection':
                case 'company':
                case 'parentCompanyBusinessUnit':
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
                case 'merchantRelationships':
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
                case 'name':
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'defaultBillingAddress':
                case 'uuid':
                case 'key':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'iban':
                case 'bic':
                case 'fkParentCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'addressCollection':
                case 'company':
                case 'parentCompanyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'merchantRelationships':
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
                case 'name':
                case 'idCompanyBusinessUnit':
                case 'fkCompany':
                case 'defaultBillingAddress':
                case 'uuid':
                case 'key':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'iban':
                case 'bic':
                case 'fkParentCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'addressCollection':
                case 'company':
                case 'parentCompanyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'merchantRelationships':
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
        $this->merchantRelationships = $this->merchantRelationships ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit,
            'fkCompany' => $this->fkCompany,
            'defaultBillingAddress' => $this->defaultBillingAddress,
            'uuid' => $this->uuid,
            'key' => $this->key,
            'email' => $this->email,
            'phone' => $this->phone,
            'externalUrl' => $this->externalUrl,
            'iban' => $this->iban,
            'bic' => $this->bic,
            'fkParentCompanyBusinessUnit' => $this->fkParentCompanyBusinessUnit,
            'addressCollection' => $this->addressCollection,
            'company' => $this->company,
            'parentCompanyBusinessUnit' => $this->parentCompanyBusinessUnit,
            'merchantRelationships' => $this->merchantRelationships,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_company_business_unit' => $this->idCompanyBusinessUnit,
            'fk_company' => $this->fkCompany,
            'default_billing_address' => $this->defaultBillingAddress,
            'uuid' => $this->uuid,
            'key' => $this->key,
            'email' => $this->email,
            'phone' => $this->phone,
            'external_url' => $this->externalUrl,
            'iban' => $this->iban,
            'bic' => $this->bic,
            'fk_parent_company_business_unit' => $this->fkParentCompanyBusinessUnit,
            'address_collection' => $this->addressCollection,
            'company' => $this->company,
            'parent_company_business_unit' => $this->parentCompanyBusinessUnit,
            'merchant_relationships' => $this->merchantRelationships,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_company_business_unit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, false) : $this->idCompanyBusinessUnit,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'default_billing_address' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, false) : $this->defaultBillingAddress,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'external_url' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, false) : $this->externalUrl,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, false) : $this->iban,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, false) : $this->bic,
            'fk_parent_company_business_unit' => $this->fkParentCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkParentCompanyBusinessUnit->toArray(true, false) : $this->fkParentCompanyBusinessUnit,
            'address_collection' => $this->addressCollection instanceof AbstractTransfer ? $this->addressCollection->toArray(true, false) : $this->addressCollection,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'parent_company_business_unit' => $this->parentCompanyBusinessUnit instanceof AbstractTransfer ? $this->parentCompanyBusinessUnit->toArray(true, false) : $this->parentCompanyBusinessUnit,
            'merchant_relationships' => $this->merchantRelationships instanceof AbstractTransfer ? $this->merchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->merchantRelationships, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, true) : $this->idCompanyBusinessUnit,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'defaultBillingAddress' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, true) : $this->defaultBillingAddress,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'externalUrl' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, true) : $this->externalUrl,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, true) : $this->iban,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, true) : $this->bic,
            'fkParentCompanyBusinessUnit' => $this->fkParentCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkParentCompanyBusinessUnit->toArray(true, true) : $this->fkParentCompanyBusinessUnit,
            'addressCollection' => $this->addressCollection instanceof AbstractTransfer ? $this->addressCollection->toArray(true, true) : $this->addressCollection,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'parentCompanyBusinessUnit' => $this->parentCompanyBusinessUnit instanceof AbstractTransfer ? $this->parentCompanyBusinessUnit->toArray(true, true) : $this->parentCompanyBusinessUnit,
            'merchantRelationships' => $this->merchantRelationships instanceof AbstractTransfer ? $this->merchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->merchantRelationships, true, true),
        ];
    }
}
