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
class CompanyUnitAddressTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_UNIT_ADDRESS = 'idCompanyUnitAddress';

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
    public const IS_DEFAULT_BILLING = 'isDefaultBilling';

    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const ADDRESS2 = 'address2';

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
    public const ADDRESS1 = 'address1';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNITS = 'companyBusinessUnits';

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
    public const ADDRESS3 = 'address3';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const COMMENT = 'comment';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const FK_COUNTRY = 'fkCountry';

    /**
     * @var string
     */
    public const LABEL_COLLECTION = 'labelCollection';

    /**
     * @var string
     */
    public const FK_REGION = 'fkRegion';

    /**
     * @var int|null
     */
    protected $idCompanyUnitAddress;

    /**
     * @var int|null
     */
    protected $fkCompany;

    /**
     * @var int|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var bool|null
     */
    protected $isDefaultBilling;

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var string|null
     */
    protected $address2;

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
    protected $address1;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null
     */
    protected $companyBusinessUnits;

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
    protected $address3;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var int|null
     */
    protected $fkCountry;

    /**
     * @var \Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer|null
     */
    protected $labelCollection;

    /**
     * @var int|null
     */
    protected $fkRegion;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_unit_address' => 'idCompanyUnitAddress',
        'idCompanyUnitAddress' => 'idCompanyUnitAddress',
        'IdCompanyUnitAddress' => 'idCompanyUnitAddress',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'is_default_billing' => 'isDefaultBilling',
        'isDefaultBilling' => 'isDefaultBilling',
        'IsDefaultBilling' => 'isDefaultBilling',
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'address2' => 'address2',
        'Address2' => 'address2',
        'zip_code' => 'zipCode',
        'zipCode' => 'zipCode',
        'ZipCode' => 'zipCode',
        'city' => 'city',
        'City' => 'city',
        'address1' => 'address1',
        'Address1' => 'address1',
        'company_business_units' => 'companyBusinessUnits',
        'companyBusinessUnits' => 'companyBusinessUnits',
        'CompanyBusinessUnits' => 'companyBusinessUnits',
        'company' => 'company',
        'Company' => 'company',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'address3' => 'address3',
        'Address3' => 'address3',
        'phone' => 'phone',
        'Phone' => 'phone',
        'comment' => 'comment',
        'Comment' => 'comment',
        'key' => 'key',
        'Key' => 'key',
        'fk_country' => 'fkCountry',
        'fkCountry' => 'fkCountry',
        'FkCountry' => 'fkCountry',
        'label_collection' => 'labelCollection',
        'labelCollection' => 'labelCollection',
        'LabelCollection' => 'labelCollection',
        'fk_region' => 'fkRegion',
        'fkRegion' => 'fkRegion',
        'FkRegion' => 'fkRegion',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_units',
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
        self::LABEL_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'label_collection',
            'is_collection' => false,
            'is_transfer' => true,
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
    ];

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return int|null
     */
    public function getIdCompanyUnitAddress()
    {
        return $this->idCompanyUnitAddress;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return int|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyUnitAddress
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
     * @module CompanyPage|CompanyUnitAddress
     *
     * @return int|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module CompanyPage|CompanyUnitAddress
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
     * @module CompanyPage|CompanyUnitAddress
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
     * @module CompanyPage|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return bool|null
     */
    public function getIsDefaultBilling()
    {
        return $this->isDefaultBilling;
    }

    /**
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyWidget|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyPage|CompanyUnitAddress
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null $companyBusinessUnits
     *
     * @return $this
     */
    public function setCompanyBusinessUnits(CompanyBusinessUnitCollectionTransfer $companyBusinessUnits = null)
    {
        $this->companyBusinessUnits = $companyBusinessUnits;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUnitAddress
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer|null
     */
    public function getCompanyBusinessUnits()
    {
        return $this->companyBusinessUnits;
    }

    /**
     * @module CompanyPage|CompanyUnitAddress
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer $companyBusinessUnits
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitsOrFail(CompanyBusinessUnitCollectionTransfer $companyBusinessUnits)
    {
        return $this->setCompanyBusinessUnits($companyBusinessUnits);
    }

    /**
     * @module CompanyPage|CompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitCollectionTransfer
     */
    public function getCompanyBusinessUnitsOrFail()
    {
        if ($this->companyBusinessUnits === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNITS);
        }

        return $this->companyBusinessUnits;
    }

    /**
     * @module CompanyPage|CompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnits()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNITS);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyUnitAddressGui|CompanyUnitAddress
     *
     * @return int|null
     */
    public function getFkCountry()
    {
        return $this->fkCountry;
    }

    /**
     * @module CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyUnitAddressGui|CompanyUnitAddress
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
     * @module CompanyUnitAddressLabel
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer|null $labelCollection
     *
     * @return $this
     */
    public function setLabelCollection(CompanyUnitAddressLabelCollectionTransfer $labelCollection = null)
    {
        $this->labelCollection = $labelCollection;
        $this->modifiedProperties[self::LABEL_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CompanyUnitAddressLabel
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer|null
     */
    public function getLabelCollection()
    {
        return $this->labelCollection;
    }

    /**
     * @module CompanyUnitAddressLabel
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer $labelCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLabelCollectionOrFail(CompanyUnitAddressLabelCollectionTransfer $labelCollection)
    {
        return $this->setLabelCollection($labelCollection);
    }

    /**
     * @module CompanyUnitAddressLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer
     */
    public function getLabelCollectionOrFail()
    {
        if ($this->labelCollection === null) {
            $this->throwNullValueException(static::LABEL_COLLECTION);
        }

        return $this->labelCollection;
    }

    /**
     * @module CompanyUnitAddressLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabelCollection()
    {
        $this->assertPropertyIsSet(self::LABEL_COLLECTION);

        return $this;
    }

    /**
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
     *
     * @return int|null
     */
    public function getFkRegion()
    {
        return $this->fkRegion;
    }

    /**
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
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
     * @module CompanyUnitAddress
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
                case 'idCompanyUnitAddress':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'isDefaultBilling':
                case 'iso2Code':
                case 'address2':
                case 'zipCode':
                case 'city':
                case 'address1':
                case 'uuid':
                case 'address3':
                case 'phone':
                case 'comment':
                case 'key':
                case 'fkCountry':
                case 'fkRegion':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnits':
                case 'company':
                case 'labelCollection':
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
                case 'idCompanyUnitAddress':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'isDefaultBilling':
                case 'iso2Code':
                case 'address2':
                case 'zipCode':
                case 'city':
                case 'address1':
                case 'uuid':
                case 'address3':
                case 'phone':
                case 'comment':
                case 'key':
                case 'fkCountry':
                case 'fkRegion':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnits':
                case 'company':
                case 'labelCollection':
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
                case 'idCompanyUnitAddress':
                case 'fkCompany':
                case 'fkCompanyBusinessUnit':
                case 'isDefaultBilling':
                case 'iso2Code':
                case 'address2':
                case 'zipCode':
                case 'city':
                case 'address1':
                case 'uuid':
                case 'address3':
                case 'phone':
                case 'comment':
                case 'key':
                case 'fkCountry':
                case 'fkRegion':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnits':
                case 'company':
                case 'labelCollection':
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
            'idCompanyUnitAddress' => $this->idCompanyUnitAddress,
            'fkCompany' => $this->fkCompany,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'isDefaultBilling' => $this->isDefaultBilling,
            'iso2Code' => $this->iso2Code,
            'address2' => $this->address2,
            'zipCode' => $this->zipCode,
            'city' => $this->city,
            'address1' => $this->address1,
            'uuid' => $this->uuid,
            'address3' => $this->address3,
            'phone' => $this->phone,
            'comment' => $this->comment,
            'key' => $this->key,
            'fkCountry' => $this->fkCountry,
            'fkRegion' => $this->fkRegion,
            'companyBusinessUnits' => $this->companyBusinessUnits,
            'company' => $this->company,
            'labelCollection' => $this->labelCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address' => $this->idCompanyUnitAddress,
            'fk_company' => $this->fkCompany,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'is_default_billing' => $this->isDefaultBilling,
            'iso2_code' => $this->iso2Code,
            'address2' => $this->address2,
            'zip_code' => $this->zipCode,
            'city' => $this->city,
            'address1' => $this->address1,
            'uuid' => $this->uuid,
            'address3' => $this->address3,
            'phone' => $this->phone,
            'comment' => $this->comment,
            'key' => $this->key,
            'fk_country' => $this->fkCountry,
            'fk_region' => $this->fkRegion,
            'company_business_units' => $this->companyBusinessUnits,
            'company' => $this->company,
            'label_collection' => $this->labelCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address' => $this->idCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddress->toArray(true, false) : $this->idCompanyUnitAddress,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'is_default_billing' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, false) : $this->isDefaultBilling,
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, false) : $this->address2,
            'zip_code' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, false) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, false) : $this->address1,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, false) : $this->address3,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'fk_country' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, false) : $this->fkCountry,
            'fk_region' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, false) : $this->fkRegion,
            'company_business_units' => $this->companyBusinessUnits instanceof AbstractTransfer ? $this->companyBusinessUnits->toArray(true, false) : $this->companyBusinessUnits,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'label_collection' => $this->labelCollection instanceof AbstractTransfer ? $this->labelCollection->toArray(true, false) : $this->labelCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddress' => $this->idCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddress->toArray(true, true) : $this->idCompanyUnitAddress,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'isDefaultBilling' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, true) : $this->isDefaultBilling,
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, true) : $this->address2,
            'zipCode' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, true) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, true) : $this->address1,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, true) : $this->address3,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'fkCountry' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, true) : $this->fkCountry,
            'fkRegion' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, true) : $this->fkRegion,
            'companyBusinessUnits' => $this->companyBusinessUnits instanceof AbstractTransfer ? $this->companyBusinessUnits->toArray(true, true) : $this->companyBusinessUnits,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'labelCollection' => $this->labelCollection instanceof AbstractTransfer ? $this->labelCollection->toArray(true, true) : $this->labelCollection,
        ];
    }
}
