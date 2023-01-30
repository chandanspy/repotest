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
class RestAddressAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

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
    public const ZIP_CODE = 'zipCode';

    /**
     * @var string
     */
    public const CITY = 'city';

    /**
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const COMPANY = 'company';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const IS_DEFAULT_SHIPPING = 'isDefaultShipping';

    /**
     * @var string
     */
    public const IS_DEFAULT_BILLING = 'isDefaultBilling';

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

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
    protected $zipCode;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var bool|null
     */
    protected $isDefaultShipping;

    /**
     * @var bool|null
     */
    protected $isDefaultBilling;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'address1' => 'address1',
        'Address1' => 'address1',
        'address2' => 'address2',
        'Address2' => 'address2',
        'address3' => 'address3',
        'Address3' => 'address3',
        'zip_code' => 'zipCode',
        'zipCode' => 'zipCode',
        'ZipCode' => 'zipCode',
        'city' => 'city',
        'City' => 'city',
        'country' => 'country',
        'Country' => 'country',
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'company' => 'company',
        'Company' => 'company',
        'phone' => 'phone',
        'Phone' => 'phone',
        'is_default_shipping' => 'isDefaultShipping',
        'isDefaultShipping' => 'isDefaultShipping',
        'IsDefaultShipping' => 'isDefaultShipping',
        'is_default_billing' => 'isDefaultBilling',
        'isDefaultBilling' => 'isDefaultBilling',
        'IsDefaultBilling' => 'isDefaultBilling',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
        self::ZIP_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'zip_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'country',
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
            'rest_request_parameter' => 'required',
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
    ];

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @param string|null $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        $this->modifiedProperties[self::COUNTRY] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCountryOrFail($country)
    {
        if ($country === null) {
            $this->throwNullValueException(static::COUNTRY);
        }

        return $this->setCountry($country);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCountryOrFail()
    {
        if ($this->country === null) {
            $this->throwNullValueException(static::COUNTRY);
        }

        return $this->country;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return bool|null
     */
    public function getIsDefaultShipping()
    {
        return $this->isDefaultShipping;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return bool|null
     */
    public function getIsDefaultBilling()
    {
        return $this->isDefaultBilling;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'zipCode':
                case 'city':
                case 'country':
                case 'iso2Code':
                case 'company':
                case 'phone':
                case 'isDefaultShipping':
                case 'isDefaultBilling':
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
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'zipCode':
                case 'city':
                case 'country':
                case 'iso2Code':
                case 'company':
                case 'phone':
                case 'isDefaultShipping':
                case 'isDefaultBilling':
                    $values[$arrayKey] = $value;

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
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'zipCode':
                case 'city':
                case 'country':
                case 'iso2Code':
                case 'company':
                case 'phone':
                case 'isDefaultShipping':
                case 'isDefaultBilling':
                    $values[$arrayKey] = $value;

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
            'salutation' => $this->salutation,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'zipCode' => $this->zipCode,
            'city' => $this->city,
            'country' => $this->country,
            'iso2Code' => $this->iso2Code,
            'company' => $this->company,
            'phone' => $this->phone,
            'isDefaultShipping' => $this->isDefaultShipping,
            'isDefaultBilling' => $this->isDefaultBilling,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'salutation' => $this->salutation,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'zip_code' => $this->zipCode,
            'city' => $this->city,
            'country' => $this->country,
            'iso2_code' => $this->iso2Code,
            'company' => $this->company,
            'phone' => $this->phone,
            'is_default_shipping' => $this->isDefaultShipping,
            'is_default_billing' => $this->isDefaultBilling,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, false) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, false) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, false) : $this->address3,
            'zip_code' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, false) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, false) : $this->company,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'is_default_shipping' => $this->isDefaultShipping instanceof AbstractTransfer ? $this->isDefaultShipping->toArray(true, false) : $this->isDefaultShipping,
            'is_default_billing' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, false) : $this->isDefaultBilling,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, true) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, true) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, true) : $this->address3,
            'zipCode' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, true) : $this->zipCode,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'company' => $this->company instanceof AbstractTransfer ? $this->company->toArray(true, true) : $this->company,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'isDefaultShipping' => $this->isDefaultShipping instanceof AbstractTransfer ? $this->isDefaultShipping->toArray(true, true) : $this->isDefaultShipping,
            'isDefaultBilling' => $this->isDefaultBilling instanceof AbstractTransfer ? $this->isDefaultBilling->toArray(true, true) : $this->isDefaultBilling,
        ];
    }
}
