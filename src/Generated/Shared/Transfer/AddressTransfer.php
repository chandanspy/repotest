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
class AddressTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_DEFAULT_SHIPPING = 'isDefaultShipping';

    /**
     * @var string
     */
    public const IS_DEFAULT_BILLING = 'isDefaultBilling';

    /**
     * @var string
     */
    public const IS_ADDRESS_SAVING_SKIPPED = 'isAddressSavingSkipped';

    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const FK_REGION = 'fkRegion';

    /**
     * @var string
     */
    public const FK_COUNTRY = 'fkCountry';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const ZIP_CODE = 'zipCode';

    /**
     * @var string
     */
    public const CITY = 'city';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const ADDRESS3 = 'address3';

    /**
     * @var string
     */
    public const ADDRESS2 = 'address2';

    /**
     * @var string
     */
    public const ADDRESS1 = 'address1';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const CUSTOMER_ID = 'customerId';

    /**
     * @var string
     */
    public const ID_CUSTOMER_ADDRESS = 'idCustomerAddress';

    /**
     * @var string
     */
    public const ID_COMPANY_UNIT_ADDRESS = 'idCompanyUnitAddress';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ADDRESS = 'idSalesOrderAddress';

    /**
     * @var string
     */
    public const REGION = 'region';

    /**
     * @var string
     */
    public const FK_MISC_COUNTRY = 'fkMiscCountry';

    /**
     * @var string
     */
    public const MIDDLE_NAME = 'middleName';

    /**
     * @var string
     */
    public const PO_BOX = 'poBox';

    /**
     * @var string
     */
    public const CELL_PHONE = 'cellPhone';

    /**
     * @var string
     */
    public const COMMENT = 'comment';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const IS_DELETED = 'isDeleted';

    /**
     * @var string
     */
    public const ANONYMIZED_AT = 'anonymizedAt';

    /**
     * @var bool|null
     */
    protected $isDefaultShipping;

    /**
     * @var bool|null
     */
    protected $isDefaultBilling;

    /**
     * @var bool|null
     */
    protected $isAddressSavingSkipped;

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var int|null
     */
    protected $fkRegion;

    /**
     * @var int|null
     */
    protected $fkCountry;

    /**
     * @var string|null
     */
    protected $state;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $zipCode;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $address3;

    /**
     * @var string|null
     */
    protected $address2;

    /**
     * @var string|null
     */
    protected $address1;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var int|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $customerId;

    /**
     * @var int|null
     */
    protected $idCustomerAddress;

    /**
     * @var int|null
     */
    protected $idCompanyUnitAddress;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var int|null
     */
    protected $idSalesOrderAddress;

    /**
     * @var string|null
     */
    protected $region;

    /**
     * @var int|null
     */
    protected $fkMiscCountry;

    /**
     * @var string|null
     */
    protected $middleName;

    /**
     * @var string|null
     */
    protected $poBox;

    /**
     * @var string|null
     */
    protected $cellPhone;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var \Generated\Shared\Transfer\CountryTransfer|null
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var bool|null
     */
    protected $isDeleted;

    /**
     * @var string|null
     */
    protected $anonymizedAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_default_shipping' => 'isDefaultShipping',
        'isDefaultShipping' => 'isDefaultShipping',
        'IsDefaultShipping' => 'isDefaultShipping',
        'is_default_billing' => 'isDefaultBilling',
        'isDefaultBilling' => 'isDefaultBilling',
        'IsDefaultBilling' => 'isDefaultBilling',
        'is_address_saving_skipped' => 'isAddressSavingSkipped',
        'isAddressSavingSkipped' => 'isAddressSavingSkipped',
        'IsAddressSavingSkipped' => 'isAddressSavingSkipped',
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'fk_region' => 'fkRegion',
        'fkRegion' => 'fkRegion',
        'FkRegion' => 'fkRegion',
        'fk_country' => 'fkCountry',
        'fkCountry' => 'fkCountry',
        'FkCountry' => 'fkCountry',
        'state' => 'state',
        'State' => 'state',
        'phone' => 'phone',
        'Phone' => 'phone',
        'zip_code' => 'zipCode',
        'zipCode' => 'zipCode',
        'ZipCode' => 'zipCode',
        'city' => 'city',
        'City' => 'city',
        'company' => 'company',
        'Company' => 'company',
        'address3' => 'address3',
        'Address3' => 'address3',
        'address2' => 'address2',
        'Address2' => 'address2',
        'address1' => 'address1',
        'Address1' => 'address1',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'email' => 'email',
        'Email' => 'email',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'customer_id' => 'customerId',
        'customerId' => 'customerId',
        'CustomerId' => 'customerId',
        'id_customer_address' => 'idCustomerAddress',
        'idCustomerAddress' => 'idCustomerAddress',
        'IdCustomerAddress' => 'idCustomerAddress',
        'id_company_unit_address' => 'idCompanyUnitAddress',
        'idCompanyUnitAddress' => 'idCompanyUnitAddress',
        'IdCompanyUnitAddress' => 'idCompanyUnitAddress',
        'key' => 'key',
        'Key' => 'key',
        'id_sales_order_address' => 'idSalesOrderAddress',
        'idSalesOrderAddress' => 'idSalesOrderAddress',
        'IdSalesOrderAddress' => 'idSalesOrderAddress',
        'region' => 'region',
        'Region' => 'region',
        'fk_misc_country' => 'fkMiscCountry',
        'fkMiscCountry' => 'fkMiscCountry',
        'FkMiscCountry' => 'fkMiscCountry',
        'middle_name' => 'middleName',
        'middleName' => 'middleName',
        'MiddleName' => 'middleName',
        'po_box' => 'poBox',
        'poBox' => 'poBox',
        'PoBox' => 'poBox',
        'cell_phone' => 'cellPhone',
        'cellPhone' => 'cellPhone',
        'CellPhone' => 'cellPhone',
        'comment' => 'comment',
        'Comment' => 'comment',
        'description' => 'description',
        'Description' => 'description',
        'country' => 'country',
        'Country' => 'country',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'is_deleted' => 'isDeleted',
        'isDeleted' => 'isDeleted',
        'IsDeleted' => 'isDeleted',
        'anonymized_at' => 'anonymizedAt',
        'anonymizedAt' => 'anonymizedAt',
        'AnonymizedAt' => 'anonymizedAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_DEFAULT_SHIPPING => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default_shipping',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT_BILLING => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default_billing',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ADDRESS_SAVING_SKIPPED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_address_saving_skipped',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISO2_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso2_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_REGION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_region',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COUNTRY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_country',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'state',
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
        self::ZIP_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'zip_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CITY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'city',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDRESS3 => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'address3',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDRESS2 => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'address2',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDRESS1 => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'address1',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
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
        self::CUSTOMER_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMER_ADDRESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_UNIT_ADDRESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_unit_address',
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
        self::ID_SALES_ORDER_ADDRESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'region',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MISC_COUNTRY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_misc_country',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MIDDLE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'middle_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PO_BOX => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'po_box',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CELL_PHONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cell_phone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMMENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'comment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRY => [
            'type' => 'Generated\Shared\Transfer\CountryTransfer',
            'type_shim' => null,
            'name_underscore' => 'country',
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
        self::IS_DELETED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_deleted',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ANONYMIZED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'anonymized_at',
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
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @param bool|null $isDefaultShipping
     *
     * @return $this
     */
    public function setIsDefaultShipping($isDefaultShipping)
    {
        $this->isDefaultShipping = $isDefaultShipping;
        $this->modifiedProperties[self::IS_DEFAULT_SHIPPING] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @return bool|null
     */
    public function getIsDefaultShipping()
    {
        return $this->isDefaultShipping;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @param bool|null $isDefaultShipping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultShippingOrFail($isDefaultShipping)
    {
        if ($isDefaultShipping === null) {
            $this->throwNullValueException(static::IS_DEFAULT_SHIPPING);
        }

        return $this->setIsDefaultShipping($isDefaultShipping);
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultShippingOrFail()
    {
        if ($this->isDefaultShipping === null) {
            $this->throwNullValueException(static::IS_DEFAULT_SHIPPING);
        }

        return $this->isDefaultShipping;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefaultShipping()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT_SHIPPING);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @param bool|null $isDefaultBilling
     *
     * @return $this
     */
    public function setIsDefaultBilling($isDefaultBilling)
    {
        $this->isDefaultBilling = $isDefaultBilling;
        $this->modifiedProperties[self::IS_DEFAULT_BILLING] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @return bool|null
     */
    public function getIsDefaultBilling()
    {
        return $this->isDefaultBilling;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @param bool|null $isDefaultBilling
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultBillingOrFail($isDefaultBilling)
    {
        if ($isDefaultBilling === null) {
            $this->throwNullValueException(static::IS_DEFAULT_BILLING);
        }

        return $this->setIsDefaultBilling($isDefaultBilling);
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultBillingOrFail()
    {
        if ($this->isDefaultBilling === null) {
            $this->throwNullValueException(static::IS_DEFAULT_BILLING);
        }

        return $this->isDefaultBilling;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefaultBilling()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT_BILLING);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @return $this
     */
    public function setIsAddressSavingSkipped($isAddressSavingSkipped)
    {
        $this->isAddressSavingSkipped = $isAddressSavingSkipped;
        $this->modifiedProperties[self::IS_ADDRESS_SAVING_SKIPPED] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @return bool|null
     */
    public function getIsAddressSavingSkipped()
    {
        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CompanyPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAddressSavingSkippedOrFail($isAddressSavingSkipped)
    {
        if ($isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->setIsAddressSavingSkipped($isAddressSavingSkipped);
    }

    /**
     * @module CheckoutPage|CompanyPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAddressSavingSkippedOrFail()
    {
        if ($this->isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CompanyPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAddressSavingSkipped()
    {
        $this->assertPropertyIsSet(self::IS_ADDRESS_SAVING_SKIPPED);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Country|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApproval|Sales|Shipment|TaxProductConnector|Tax
     *
     * @param string|null $iso2Code
     *
     * @return $this
     */
    public function setIso2Code($iso2Code)
    {
        $this->iso2Code = $iso2Code;
        $this->modifiedProperties[self::ISO2_CODE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Country|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApproval|Sales|Shipment|TaxProductConnector|Tax
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Country|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApproval|Sales|Shipment|TaxProductConnector|Tax
     *
     * @param string|null $iso2Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso2CodeOrFail($iso2Code)
    {
        if ($iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->setIso2Code($iso2Code);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Country|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApproval|Sales|Shipment|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso2CodeOrFail()
    {
        if ($this->iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->iso2Code;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Country|Customer|CustomersRestApi|OrdersRestApi|ProductOption|QuoteApproval|Sales|Shipment|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso2Code()
    {
        $this->assertPropertyIsSet(self::ISO2_CODE);

        return $this;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @param int|null $fkRegion
     *
     * @return $this
     */
    public function setFkRegion($fkRegion)
    {
        $this->fkRegion = $fkRegion;
        $this->modifiedProperties[self::FK_REGION] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @return int|null
     */
    public function getFkRegion()
    {
        return $this->fkRegion;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @param int|null $fkRegion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkRegionOrFail($fkRegion)
    {
        if ($fkRegion === null) {
            $this->throwNullValueException(static::FK_REGION);
        }

        return $this->setFkRegion($fkRegion);
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkRegionOrFail()
    {
        if ($this->fkRegion === null) {
            $this->throwNullValueException(static::FK_REGION);
        }

        return $this->fkRegion;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkRegion()
    {
        $this->assertPropertyIsSet(self::FK_REGION);

        return $this;
    }

    /**
     * @module CheckoutPage|Customer|Sales|Shipment|Tax
     *
     * @param int|null $fkCountry
     *
     * @return $this
     */
    public function setFkCountry($fkCountry)
    {
        $this->fkCountry = $fkCountry;
        $this->modifiedProperties[self::FK_COUNTRY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Customer|Sales|Shipment|Tax
     *
     * @return int|null
     */
    public function getFkCountry()
    {
        return $this->fkCountry;
    }

    /**
     * @module CheckoutPage|Customer|Sales|Shipment|Tax
     *
     * @param int|null $fkCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCountryOrFail($fkCountry)
    {
        if ($fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->setFkCountry($fkCountry);
    }

    /**
     * @module CheckoutPage|Customer|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCountryOrFail()
    {
        if ($this->fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->fkCountry;
    }

    /**
     * @module CheckoutPage|Customer|Sales|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCountry()
    {
        $this->assertPropertyIsSet(self::FK_COUNTRY);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|QuoteApproval|Sales|Shipment
     *
     * @param string|null $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|QuoteApproval|Sales|Shipment
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|QuoteApproval|Sales|Shipment
     *
     * @param string|null $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail($state)
    {
        if ($state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->setState($state);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|QuoteApproval|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|QuoteApproval|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireState()
    {
        $this->assertPropertyIsSet(self::STATE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer|Oms|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|Oms|QuoteApproval|Sales|Shipment
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer|Oms|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|Oms|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|Oms|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $zipCode
     *
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        $this->modifiedProperties[self::ZIP_CODE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $zipCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setZipCodeOrFail($zipCode)
    {
        if ($zipCode === null) {
            $this->throwNullValueException(static::ZIP_CODE);
        }

        return $this->setZipCode($zipCode);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getZipCodeOrFail()
    {
        if ($this->zipCode === null) {
            $this->throwNullValueException(static::ZIP_CODE);
        }

        return $this->zipCode;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireZipCode()
    {
        $this->assertPropertyIsSet(self::ZIP_CODE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        $this->modifiedProperties[self::CITY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $city
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCityOrFail($city)
    {
        if ($city === null) {
            $this->throwNullValueException(static::CITY);
        }

        return $this->setCity($city);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCityOrFail()
    {
        if ($this->city === null) {
            $this->throwNullValueException(static::CITY);
        }

        return $this->city;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCity()
    {
        $this->assertPropertyIsSet(self::CITY);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|Shipment
     *
     * @param string|null $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        $this->modifiedProperties[self::COMPANY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|Shipment
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|Shipment
     *
     * @param string|null $company
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyOrFail($company)
    {
        if ($company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->setCompany($company);
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyOrFail()
    {
        if ($this->company === null) {
            $this->throwNullValueException(static::COMPANY);
        }

        return $this->company;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|Shipment
     *
     * @param string|null $address3
     *
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
        $this->modifiedProperties[self::ADDRESS3] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|Shipment
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|Shipment
     *
     * @param string|null $address3
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddress3OrFail($address3)
    {
        if ($address3 === null) {
            $this->throwNullValueException(static::ADDRESS3);
        }

        return $this->setAddress3($address3);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAddress3OrFail()
    {
        if ($this->address3 === null) {
            $this->throwNullValueException(static::ADDRESS3);
        }

        return $this->address3;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddress3()
    {
        $this->assertPropertyIsSet(self::ADDRESS3);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @param string|null $address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        $this->modifiedProperties[self::ADDRESS2] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @param string|null $address2
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddress2OrFail($address2)
    {
        if ($address2 === null) {
            $this->throwNullValueException(static::ADDRESS2);
        }

        return $this->setAddress2($address2);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAddress2OrFail()
    {
        if ($this->address2 === null) {
            $this->throwNullValueException(static::ADDRESS2);
        }

        return $this->address2;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddress2()
    {
        $this->assertPropertyIsSet(self::ADDRESS2);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        $this->modifiedProperties[self::ADDRESS1] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $address1
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddress1OrFail($address1)
    {
        if ($address1 === null) {
            $this->throwNullValueException(static::ADDRESS1);
        }

        return $this->setAddress1($address1);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAddress1OrFail()
    {
        if ($this->address1 === null) {
            $this->throwNullValueException(static::ADDRESS1);
        }

        return $this->address1;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Oms|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddress1()
    {
        $this->assertPropertyIsSet(self::ADDRESS1);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|DummyPayment|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|DummyPayment|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|DummyPayment|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|DummyPayment|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|DummyPayment|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|Checkout|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|Oms|Payment|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @param string|null $salutation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalutationOrFail($salutation)
    {
        if ($salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->setSalutation($salutation);
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalutationOrFail()
    {
        if ($this->salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->salutation;
    }

    /**
     * @module CheckoutPage|CompanyPage|CompanyWidget|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|QuoteApproval|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|QuoteApproval|Sales|Shipment
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CheckoutPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|CompanyBusinessUnitAddressesRestApi|Customer|QuoteApproval|Sales|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|CustomersRestApi|ShipmentGui|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|CustomersRestApi|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer|CustomersRestApi|ShipmentGui|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|CustomersRestApi|ShipmentGui|Shipment
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
     * @module CheckoutPage|CustomerPage|Customer|CustomersRestApi|ShipmentGui|Shipment
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
     * @module CheckoutPage|Customer|Shipment
     *
     * @param string|null $customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        $this->modifiedProperties[self::CUSTOMER_ID] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @param string|null $customerId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerIdOrFail($customerId)
    {
        if ($customerId === null) {
            $this->throwNullValueException(static::CUSTOMER_ID);
        }

        return $this->setCustomerId($customerId);
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerIdOrFail()
    {
        if ($this->customerId === null) {
            $this->throwNullValueException(static::CUSTOMER_ID);
        }

        return $this->customerId;
    }

    /**
     * @module CheckoutPage|Customer|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerId()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_ID);

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idCustomerAddress
     *
     * @return $this
     */
    public function setIdCustomerAddress($idCustomerAddress)
    {
        $this->idCustomerAddress = $idCustomerAddress;
        $this->modifiedProperties[self::ID_CUSTOMER_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getIdCustomerAddress()
    {
        return $this->idCustomerAddress;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @param int|null $idCustomerAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerAddressOrFail($idCustomerAddress)
    {
        if ($idCustomerAddress === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_ADDRESS);
        }

        return $this->setIdCustomerAddress($idCustomerAddress);
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerAddressOrFail()
    {
        if ($this->idCustomerAddress === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_ADDRESS);
        }

        return $this->idCustomerAddress;
    }

    /**
     * @module CheckoutPage|CompanyWidget|CustomerPage|CheckoutRestApi|Customer|CustomersRestApi|Oms|Sales|ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomerAddress()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER_ADDRESS);

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|Customer
     *
     * @param int|null $idCompanyUnitAddress
     *
     * @return $this
     */
    public function setIdCompanyUnitAddress($idCompanyUnitAddress)
    {
        $this->idCompanyUnitAddress = $idCompanyUnitAddress;
        $this->modifiedProperties[self::ID_COMPANY_UNIT_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|Customer
     *
     * @return int|null
     */
    public function getIdCompanyUnitAddress()
    {
        return $this->idCompanyUnitAddress;
    }

    /**
     * @module CompanyPage|CustomerPage|Customer
     *
     * @param int|null $idCompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressOrFail($idCompanyUnitAddress)
    {
        if ($idCompanyUnitAddress === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS);
        }

        return $this->setIdCompanyUnitAddress($idCompanyUnitAddress);
    }

    /**
     * @module CompanyPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUnitAddressOrFail()
    {
        if ($this->idCompanyUnitAddress === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS);
        }

        return $this->idCompanyUnitAddress;
    }

    /**
     * @module CompanyPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUnitAddress()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_UNIT_ADDRESS);

        return $this;
    }

    /**
     * @module CompanyWidget|Customer
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
     * @module CompanyWidget|Customer
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyWidget|Customer
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
     * @module CompanyWidget|Customer
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
     * @module CompanyWidget|Customer
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
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|Shipment
     *
     * @param int|null $idSalesOrderAddress
     *
     * @return $this
     */
    public function setIdSalesOrderAddress($idSalesOrderAddress)
    {
        $this->idSalesOrderAddress = $idSalesOrderAddress;
        $this->modifiedProperties[self::ID_SALES_ORDER_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|Shipment
     *
     * @return int|null
     */
    public function getIdSalesOrderAddress()
    {
        return $this->idSalesOrderAddress;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|Shipment
     *
     * @param int|null $idSalesOrderAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderAddressOrFail($idSalesOrderAddress)
    {
        if ($idSalesOrderAddress === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ADDRESS);
        }

        return $this->setIdSalesOrderAddress($idSalesOrderAddress);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderAddressOrFail()
    {
        if ($this->idSalesOrderAddress === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ADDRESS);
        }

        return $this->idSalesOrderAddress;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|Customer|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderAddress()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ADDRESS);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        $this->modifiedProperties[self::REGION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $region
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegionOrFail($region)
    {
        if ($region === null) {
            $this->throwNullValueException(static::REGION);
        }

        return $this->setRegion($region);
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegionOrFail()
    {
        if ($this->region === null) {
            $this->throwNullValueException(static::REGION);
        }

        return $this->region;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegion()
    {
        $this->assertPropertyIsSet(self::REGION);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param int|null $fkMiscCountry
     *
     * @return $this
     */
    public function setFkMiscCountry($fkMiscCountry)
    {
        $this->fkMiscCountry = $fkMiscCountry;
        $this->modifiedProperties[self::FK_MISC_COUNTRY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @return int|null
     */
    public function getFkMiscCountry()
    {
        return $this->fkMiscCountry;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param int|null $fkMiscCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMiscCountryOrFail($fkMiscCountry)
    {
        if ($fkMiscCountry === null) {
            $this->throwNullValueException(static::FK_MISC_COUNTRY);
        }

        return $this->setFkMiscCountry($fkMiscCountry);
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkMiscCountryOrFail()
    {
        if ($this->fkMiscCountry === null) {
            $this->throwNullValueException(static::FK_MISC_COUNTRY);
        }

        return $this->fkMiscCountry;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMiscCountry()
    {
        $this->assertPropertyIsSet(self::FK_MISC_COUNTRY);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $middleName
     *
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        $this->modifiedProperties[self::MIDDLE_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $middleName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMiddleNameOrFail($middleName)
    {
        if ($middleName === null) {
            $this->throwNullValueException(static::MIDDLE_NAME);
        }

        return $this->setMiddleName($middleName);
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMiddleNameOrFail()
    {
        if ($this->middleName === null) {
            $this->throwNullValueException(static::MIDDLE_NAME);
        }

        return $this->middleName;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMiddleName()
    {
        $this->assertPropertyIsSet(self::MIDDLE_NAME);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $poBox
     *
     * @return $this
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
        $this->modifiedProperties[self::PO_BOX] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $poBox
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPoBoxOrFail($poBox)
    {
        if ($poBox === null) {
            $this->throwNullValueException(static::PO_BOX);
        }

        return $this->setPoBox($poBox);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPoBoxOrFail()
    {
        if ($this->poBox === null) {
            $this->throwNullValueException(static::PO_BOX);
        }

        return $this->poBox;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePoBox()
    {
        $this->assertPropertyIsSet(self::PO_BOX);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $cellPhone
     *
     * @return $this
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;
        $this->modifiedProperties[self::CELL_PHONE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @return string|null
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $cellPhone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCellPhoneOrFail($cellPhone)
    {
        if ($cellPhone === null) {
            $this->throwNullValueException(static::CELL_PHONE);
        }

        return $this->setCellPhone($cellPhone);
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCellPhoneOrFail()
    {
        if ($this->cellPhone === null) {
            $this->throwNullValueException(static::CELL_PHONE);
        }

        return $this->cellPhone;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCellPhone()
    {
        $this->assertPropertyIsSet(self::CELL_PHONE);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        $this->modifiedProperties[self::COMMENT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @param string|null $comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommentOrFail($comment)
    {
        if ($comment === null) {
            $this->throwNullValueException(static::COMMENT);
        }

        return $this->setComment($comment);
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCommentOrFail()
    {
        if ($this->comment === null) {
            $this->throwNullValueException(static::COMMENT);
        }

        return $this->comment;
    }

    /**
     * @module CustomerPage|Customer|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireComment()
    {
        $this->assertPropertyIsSet(self::COMMENT);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi|OrdersRestApi|Sales|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\CountryTransfer|null $country
     *
     * @return $this
     */
    public function setCountry(CountryTransfer $country = null)
    {
        $this->country = $country;
        $this->modifiedProperties[self::COUNTRY] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi|OrdersRestApi|Sales|Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\CountryTransfer|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi|OrdersRestApi|Sales|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\CountryTransfer $country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCountryOrFail(CountryTransfer $country)
    {
        return $this->setCountry($country);
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi|OrdersRestApi|Sales|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CountryTransfer
     */
    public function getCountryOrFail()
    {
        if ($this->country === null) {
            $this->throwNullValueException(static::COUNTRY);
        }

        return $this->country;
    }

    /**
     * @module CustomerPage|Customer|CustomersRestApi|OrdersRestApi|Sales|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountry()
    {
        $this->assertPropertyIsSet(self::COUNTRY);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|ShipmentsRestApi
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
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|ShipmentsRestApi
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
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|ShipmentsRestApi
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
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|Customer|CustomersRestApi|ShipmentsRestApi
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
     * @module Customer
     *
     * @param bool|null $isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        $this->modifiedProperties[self::IS_DELETED] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @module Customer
     *
     * @param bool|null $isDeleted
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDeletedOrFail($isDeleted)
    {
        if ($isDeleted === null) {
            $this->throwNullValueException(static::IS_DELETED);
        }

        return $this->setIsDeleted($isDeleted);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDeletedOrFail()
    {
        if ($this->isDeleted === null) {
            $this->throwNullValueException(static::IS_DELETED);
        }

        return $this->isDeleted;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDeleted()
    {
        $this->assertPropertyIsSet(self::IS_DELETED);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param string|null $anonymizedAt
     *
     * @return $this
     */
    public function setAnonymizedAt($anonymizedAt)
    {
        $this->anonymizedAt = $anonymizedAt;
        $this->modifiedProperties[self::ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return string|null
     */
    public function getAnonymizedAt()
    {
        return $this->anonymizedAt;
    }

    /**
     * @module Customer
     *
     * @param string|null $anonymizedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnonymizedAtOrFail($anonymizedAt)
    {
        if ($anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->setAnonymizedAt($anonymizedAt);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAnonymizedAtOrFail()
    {
        if ($this->anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->anonymizedAt;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::ANONYMIZED_AT);

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
                case 'isDefaultShipping':
                case 'isDefaultBilling':
                case 'isAddressSavingSkipped':
                case 'iso2Code':
                case 'fkRegion':
                case 'fkCountry':
                case 'state':
                case 'phone':
                case 'zipCode':
                case 'city':
                case 'company':
                case 'address3':
                case 'address2':
                case 'address1':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'email':
                case 'fkCustomer':
                case 'customerId':
                case 'idCustomerAddress':
                case 'idCompanyUnitAddress':
                case 'key':
                case 'idSalesOrderAddress':
                case 'region':
                case 'fkMiscCountry':
                case 'middleName':
                case 'poBox':
                case 'cellPhone':
                case 'comment':
                case 'description':
                case 'uuid':
                case 'isDeleted':
                case 'anonymizedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'country':
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
                case 'isDefaultShipping':
                case 'isDefaultBilling':
                case 'isAddressSavingSkipped':
                case 'iso2Code':
                case 'fkRegion':
                case 'fkCountry':
                case 'state':
                case 'phone':
                case 'zipCode':
                case 'city':
                case 'company':
                case 'address3':
                case 'address2':
                case 'address1':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'email':
                case 'fkCustomer':
                case 'customerId':
                case 'idCustomerAddress':
                case 'idCompanyUnitAddress':
                case 'key':
                case 'idSalesOrderAddress':
                case 'region':
                case 'fkMiscCountry':
                case 'middleName':
                case 'poBox':
                case 'cellPhone':
                case 'comment':
                case 'description':
                case 'uuid':
                case 'isDeleted':
                case 'anonymizedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
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
                case 'isDefaultShipping':
                case 'isDefaultBilling':
                case 'isAddressSavingSkipped':
                case 'iso2Code':
                case 'fkRegion':
                case 'fkCountry':
                case 'state':
                case 'phone':
                case 'zipCode':
                case 'city':
                case 'company':
                case 'address3':
                case 'address2':
                case 'address1':
                case 'lastName':
                case 'firstName':
                case 'salutation':
                case 'email':
                case 'fkCustomer':
                case 'customerId':
                case 'idCustomerAddress':
                case 'idCompanyUnitAddress':
                case 'key':
                case 'idSalesOrderAddress':
                case 'region':
                case 'fkMiscCountry':
                case 'middleName':
                case 'poBox':
                case 'cellPhone':
                case 'comment':
                case 'description':
                case 'uuid':
                case 'isDeleted':
                case 'anonymizedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
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
            'isDefaultShipping' => $this->isDefaultShipping,
            'isDefaultBilling' => $this->isDefaultBilling,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped,
            'iso2Code' => $this->iso2Code,
            'fkRegion' => $this->fkRegion,
            'fkCountry' => $this->fkCountry,
            'state' => $this->state,
            'phone' => $this->phone,
            'zipCode' => $this->zipCode,
            'city' => $this->city,
            'company' => $this->company,
            'address3' => $this->address3,
            'address2' => $this->address2,
            'address1' => $this->address1,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'salutation' => $this->salutation,
            'email' => $this->email,
            'fkCustomer' => $this->fkCustomer,
            'customerId' => $this->customerId,
            'idCustomerAddress' => $this->idCustomerAddress,
            'idCompanyUnitAddress' => $this->idCompanyUnitAddress,
            'key' => $this->key,
            'idSalesOrderAddress' => $this->idSalesOrderAddress,
            'region' => $this->region,
            'fkMiscCountry' => $this->fkMiscCountry,
            'middleName' => $this->middleName,
            'poBox' => $this->poBox,
            'cellPhone' => $this->cellPhone,
            'comment' => $this->comment,
            'description' => $this->description,
            'uuid' => $this->uuid,
            'isDeleted' => $this->isDeleted,
            'anonymizedAt' => $this->anonymizedAt,
            'country' => $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_default_shipping' => $this->isDefaultShipping,
            'is_default_billing' => $this->isDefaultBilling,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped,
            'iso2_code' => $this->iso2Code,
            'fk_region' => $this->fkRegion,
            'fk_country' => $this->fkCountry,
            'state' => $this->state,
            'phone' => $this->phone,
            'zip_code' => $this->zipCode,
            'city' => $this->city,
            'company' => $this->company,
            'address3' => $this->address3,
            'address2' => $this->address2,
            'address1' => $this->address1,
            'last_name' => $this->lastName,
            'first_name' => $this->firstName,
            'salutation' => $this->salutation,
            'email' => $this->email,
            'fk_customer' => $this->fkCustomer,
            'customer_id' => $this->customerId,
            'id_customer_address' => $this->idCustomerAddress,
            'id_company_unit_address' => $this->idCompanyUnitAddress,
            'key' => $this->key,
            'id_sales_order_address' => $this->idSalesOrderAddress,
            'region' => $this->region,
            'fk_misc_country' => $this->fkMiscCountry,
            'middle_name' => $this->middleName,
            'po_box' => $this->poBox,
            'cell_phone' => $this->cellPhone,
            'comment' => $this->comment,
            'description' => $this->description,
            'uuid' => $this->uuid,
            'is_deleted' => $this->isDeleted,
            'anonymized_at' => $this->anonymizedAt,
            'country' => $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_default_shipping' => $this->isDefaultShipping instanceof AbstractTransfer ? $this->isDefaultShipping->toArray(true, false) : $this->isDefaultShipping,
            'is_default_billing' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, false) : $this->isDefaultBilling,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, false) : $this->isAddressSavingSkipped,
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'fk_region' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, false) : $this->fkRegion,
            'fk_country' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, false) : $this->fkCountry,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'zip_code' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, false) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, false) : $this->address3,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, false) : $this->address2,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, false) : $this->address1,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'customer_id' => $this->customerId instanceof AbstractTransfer ? $this->customerId->toArray(true, false) : $this->customerId,
            'id_customer_address' => $this->idCustomerAddress instanceof AbstractTransfer ? $this->idCustomerAddress->toArray(true, false) : $this->idCustomerAddress,
            'id_company_unit_address' => $this->idCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddress->toArray(true, false) : $this->idCompanyUnitAddress,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'id_sales_order_address' => $this->idSalesOrderAddress instanceof AbstractTransfer ? $this->idSalesOrderAddress->toArray(true, false) : $this->idSalesOrderAddress,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, false) : $this->region,
            'fk_misc_country' => $this->fkMiscCountry instanceof AbstractTransfer ? $this->fkMiscCountry->toArray(true, false) : $this->fkMiscCountry,
            'middle_name' => $this->middleName instanceof AbstractTransfer ? $this->middleName->toArray(true, false) : $this->middleName,
            'po_box' => $this->poBox instanceof AbstractTransfer ? $this->poBox->toArray(true, false) : $this->poBox,
            'cell_phone' => $this->cellPhone instanceof AbstractTransfer ? $this->cellPhone->toArray(true, false) : $this->cellPhone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'is_deleted' => $this->isDeleted instanceof AbstractTransfer ? $this->isDeleted->toArray(true, false) : $this->isDeleted,
            'anonymized_at' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, false) : $this->anonymizedAt,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isDefaultShipping' => $this->isDefaultShipping instanceof AbstractTransfer ? $this->isDefaultShipping->toArray(true, true) : $this->isDefaultShipping,
            'isDefaultBilling' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, true) : $this->isDefaultBilling,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, true) : $this->isAddressSavingSkipped,
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'fkRegion' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, true) : $this->fkRegion,
            'fkCountry' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, true) : $this->fkCountry,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'zipCode' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, true) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, true) : $this->address3,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, true) : $this->address2,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, true) : $this->address1,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'customerId' => $this->customerId instanceof AbstractTransfer ? $this->customerId->toArray(true, true) : $this->customerId,
            'idCustomerAddress' => $this->idCustomerAddress instanceof AbstractTransfer ? $this->idCustomerAddress->toArray(true, true) : $this->idCustomerAddress,
            'idCompanyUnitAddress' => $this->idCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddress->toArray(true, true) : $this->idCompanyUnitAddress,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'idSalesOrderAddress' => $this->idSalesOrderAddress instanceof AbstractTransfer ? $this->idSalesOrderAddress->toArray(true, true) : $this->idSalesOrderAddress,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, true) : $this->region,
            'fkMiscCountry' => $this->fkMiscCountry instanceof AbstractTransfer ? $this->fkMiscCountry->toArray(true, true) : $this->fkMiscCountry,
            'middleName' => $this->middleName instanceof AbstractTransfer ? $this->middleName->toArray(true, true) : $this->middleName,
            'poBox' => $this->poBox instanceof AbstractTransfer ? $this->poBox->toArray(true, true) : $this->poBox,
            'cellPhone' => $this->cellPhone instanceof AbstractTransfer ? $this->cellPhone->toArray(true, true) : $this->cellPhone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'isDeleted' => $this->isDeleted instanceof AbstractTransfer ? $this->isDeleted->toArray(true, true) : $this->isDeleted,
            'anonymizedAt' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, true) : $this->anonymizedAt,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
        ];
    }
}
