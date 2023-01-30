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
class SpyCompanyUnitAddressEntityTransfer extends AbstractEntityTransfer
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
    public const FK_COUNTRY = 'fkCountry';

    /**
     * @var string
     */
    public const FK_REGION = 'fkRegion';

    /**
     * @var string
     */
    public const ADDRESS1 = 'address1';

    /**
     * @var string
     */
    public const ADDRESS2 = 'address2';

    /**
     * @var string
     */
    public const ADDRESS3 = 'address3';

    /**
     * @var string
     */
    public const CITY = 'city';

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
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ZIP_CODE = 'zipCode';

    /**
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * @var string
     */
    public const REGION = 'region';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES = 'spyCompanyUnitAddressLabelToCompanyUnitAddresses';

    /**
     * @var string
     */
    public const SPY_COMPANY_BUSINESS_UNITS = 'spyCompanyBusinessUnits';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNITS = 'spyCompanyUnitAddressToCompanyBusinessUnits';

    /**
     * @var integer|null
     */
    protected $idCompanyUnitAddress;

    /**
     * @var integer|null
     */
    protected $fkCompany;

    /**
     * @var integer|null
     */
    protected $fkCountry;

    /**
     * @var integer|null
     */
    protected $fkRegion;

    /**
     * @var string|null
     */
    protected $address1;

    /**
     * @var string|null
     */
    protected $address2;

    /**
     * @var string|null
     */
    protected $address3;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $zipCode;

    /**
     * @var \Generated\Shared\Transfer\SpyCountryEntityTransfer|null
     */
    protected $country;

    /**
     * @var \Generated\Shared\Transfer\SpyRegionEntityTransfer|null
     */
    protected $region;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyEntityTransfer|null
     */
    protected $company;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[]
     */
    protected $spyCompanyUnitAddressLabelToCompanyUnitAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyCompanyBusinessUnits;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyCompanyUnitAddressToCompanyBusinessUnits;

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
        'fk_country' => 'fkCountry',
        'fkCountry' => 'fkCountry',
        'FkCountry' => 'fkCountry',
        'fk_region' => 'fkRegion',
        'fkRegion' => 'fkRegion',
        'FkRegion' => 'fkRegion',
        'address1' => 'address1',
        'Address1' => 'address1',
        'address2' => 'address2',
        'Address2' => 'address2',
        'address3' => 'address3',
        'Address3' => 'address3',
        'city' => 'city',
        'City' => 'city',
        'comment' => 'comment',
        'Comment' => 'comment',
        'key' => 'key',
        'Key' => 'key',
        'phone' => 'phone',
        'Phone' => 'phone',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'zip_code' => 'zipCode',
        'zipCode' => 'zipCode',
        'ZipCode' => 'zipCode',
        'country' => 'country',
        'Country' => 'country',
        'region' => 'region',
        'Region' => 'region',
        'company' => 'company',
        'Company' => 'company',
        'spy_company_unit_address_label_to_company_unit_addresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
        'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
        'SpyCompanyUnitAddressLabelToCompanyUnitAddresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
        'spy_company_business_units' => 'spyCompanyBusinessUnits',
        'spyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'SpyCompanyBusinessUnits' => 'spyCompanyBusinessUnits',
        'spy_company_unit_address_to_company_business_units' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
        'spyCompanyUnitAddressToCompanyBusinessUnits' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
        'SpyCompanyUnitAddressToCompanyBusinessUnits' => 'spyCompanyUnitAddressToCompanyBusinessUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_UNIT_ADDRESS => [
            'type' => 'integer',
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
        self::FK_COUNTRY => [
            'type' => 'integer',
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
        self::FK_REGION => [
            'type' => 'integer',
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
        self::COUNTRY => [
            'type' => 'Generated\Shared\Transfer\SpyCountryEntityTransfer',
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
        self::REGION => [
            'type' => 'Generated\Shared\Transfer\SpyRegionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'region',
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
        self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_address_label_to_company_unit_addresses',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddress
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUnitAddress()
    {
        return $this->idCompanyUnitAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddress
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUnitAddressOrFail()
    {
        if ($this->idCompanyUnitAddress === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS);
        }

        return $this->idCompanyUnitAddress;
    }

    /**
     * @module 
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
     * @param integer|null $fkCountry
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCountry()
    {
        return $this->fkCountry;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCountry
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCountryOrFail()
    {
        if ($this->fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->fkCountry;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkRegion
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkRegion()
    {
        return $this->fkRegion;
    }

    /**
     * @module 
     *
     * @param integer|null $fkRegion
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkRegionOrFail()
    {
        if ($this->fkRegion === null) {
            $this->throwNullValueException(static::FK_REGION);
        }

        return $this->fkRegion;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryEntityTransfer|null $country
     *
     * @return $this
     */
    public function setCountry(SpyCountryEntityTransfer $country = null)
    {
        $this->country = $country;
        $this->modifiedProperties[self::COUNTRY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCountryEntityTransfer|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryEntityTransfer $country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCountryOrFail(SpyCountryEntityTransfer $country)
    {
        return $this->setCountry($country);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCountryEntityTransfer
     */
    public function getCountryOrFail()
    {
        if ($this->country === null) {
            $this->throwNullValueException(static::COUNTRY);
        }

        return $this->country;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyRegionEntityTransfer|null $region
     *
     * @return $this
     */
    public function setRegion(SpyRegionEntityTransfer $region = null)
    {
        $this->region = $region;
        $this->modifiedProperties[self::REGION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyRegionEntityTransfer|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyRegionEntityTransfer $region
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegionOrFail(SpyRegionEntityTransfer $region)
    {
        return $this->setRegion($region);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyRegionEntityTransfer
     */
    public function getRegionOrFail()
    {
        if ($this->region === null) {
            $this->throwNullValueException(static::REGION);
        }

        return $this->region;
    }

    /**
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[] $spyCompanyUnitAddressLabelToCompanyUnitAddresses
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddressLabelToCompanyUnitAddresses(ArrayObject $spyCompanyUnitAddressLabelToCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses = $spyCompanyUnitAddressLabelToCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[]
     */
    public function getSpyCompanyUnitAddressLabelToCompanyUnitAddresses()
    {
        return $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer $spyCompanyUnitAddressLabelToCompanyUnitAddresses
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddressLabelToCompanyUnitAddresses(SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer $spyCompanyUnitAddressLabelToCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses[] = $spyCompanyUnitAddressLabelToCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddressLabelToCompanyUnitAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES);

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
                case 'fkCountry':
                case 'fkRegion':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'comment':
                case 'key':
                case 'phone':
                case 'uuid':
                case 'zipCode':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'country':
                case 'region':
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
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
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
                case 'idCompanyUnitAddress':
                case 'fkCompany':
                case 'fkCountry':
                case 'fkRegion':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'comment':
                case 'key':
                case 'phone':
                case 'uuid':
                case 'zipCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
                case 'region':
                case 'company':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
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
                case 'idCompanyUnitAddress':
                case 'fkCompany':
                case 'fkCountry':
                case 'fkRegion':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'comment':
                case 'key':
                case 'phone':
                case 'uuid':
                case 'zipCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
                case 'region':
                case 'company':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
                case 'spyCompanyBusinessUnits':
                case 'spyCompanyUnitAddressToCompanyBusinessUnits':
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
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses = $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses ?: new ArrayObject();
        $this->spyCompanyBusinessUnits = $this->spyCompanyBusinessUnits ?: new ArrayObject();
        $this->spyCompanyUnitAddressToCompanyBusinessUnits = $this->spyCompanyUnitAddressToCompanyBusinessUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddress' => $this->idCompanyUnitAddress,
            'fkCompany' => $this->fkCompany,
            'fkCountry' => $this->fkCountry,
            'fkRegion' => $this->fkRegion,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'city' => $this->city,
            'comment' => $this->comment,
            'key' => $this->key,
            'phone' => $this->phone,
            'uuid' => $this->uuid,
            'zipCode' => $this->zipCode,
            'country' => $this->country,
            'region' => $this->region,
            'company' => $this->company,
            'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses,
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits,
            'spyCompanyUnitAddressToCompanyBusinessUnits' => $this->spyCompanyUnitAddressToCompanyBusinessUnits,
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
            'fk_country' => $this->fkCountry,
            'fk_region' => $this->fkRegion,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'city' => $this->city,
            'comment' => $this->comment,
            'key' => $this->key,
            'phone' => $this->phone,
            'uuid' => $this->uuid,
            'zip_code' => $this->zipCode,
            'country' => $this->country,
            'region' => $this->region,
            'company' => $this->company,
            'spy_company_unit_address_label_to_company_unit_addresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses,
            'spy_company_business_units' => $this->spyCompanyBusinessUnits,
            'spy_company_unit_address_to_company_business_units' => $this->spyCompanyUnitAddressToCompanyBusinessUnits,
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
            'fk_country' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, false) : $this->fkCountry,
            'fk_region' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, false) : $this->fkRegion,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, false) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, false) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, false) : $this->address3,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'zip_code' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, false) : $this->zipCode,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, false) : $this->region,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'spy_company_unit_address_label_to_company_unit_addresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddressLabelToCompanyUnitAddresses, true, false),
            'spy_company_business_units' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, false),
            'spy_company_unit_address_to_company_business_units' => $this->spyCompanyUnitAddressToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyUnitAddressToCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddressToCompanyBusinessUnits, true, false),
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
            'fkCountry' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, true) : $this->fkCountry,
            'fkRegion' => $this->fkRegion instanceof AbstractTransfer ? $this->fkRegion->toArray(true, true) : $this->fkRegion,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, true) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, true) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, true) : $this->address3,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'zipCode' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, true) : $this->zipCode,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, true) : $this->region,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddressLabelToCompanyUnitAddresses, true, true),
            'spyCompanyBusinessUnits' => $this->spyCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyBusinessUnits, true, true),
            'spyCompanyUnitAddressToCompanyBusinessUnits' => $this->spyCompanyUnitAddressToCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyCompanyUnitAddressToCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddressToCompanyBusinessUnits, true, true),
        ];
    }
}
