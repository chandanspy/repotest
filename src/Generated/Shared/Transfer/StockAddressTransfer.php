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
class StockAddressTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_STOCK_ADDRESS = 'idStockAddress';

    /**
     * @var string
     */
    public const ID_STOCK = 'idStock';

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
    public const ZIP_CODE = 'zipCode';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const COMMENT = 'comment';

    /**
     * @var int|null
     */
    protected $idStockAddress;

    /**
     * @var int|null
     */
    protected $idStock;

    /**
     * @var \Generated\Shared\Transfer\CountryTransfer|null
     */
    protected $country;

    /**
     * @var \Generated\Shared\Transfer\RegionTransfer|null
     */
    protected $region;

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
    protected $zipCode;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_stock_address' => 'idStockAddress',
        'idStockAddress' => 'idStockAddress',
        'IdStockAddress' => 'idStockAddress',
        'id_stock' => 'idStock',
        'idStock' => 'idStock',
        'IdStock' => 'idStock',
        'country' => 'country',
        'Country' => 'country',
        'region' => 'region',
        'Region' => 'region',
        'address1' => 'address1',
        'Address1' => 'address1',
        'address2' => 'address2',
        'Address2' => 'address2',
        'address3' => 'address3',
        'Address3' => 'address3',
        'city' => 'city',
        'City' => 'city',
        'zip_code' => 'zipCode',
        'zipCode' => 'zipCode',
        'ZipCode' => 'zipCode',
        'phone' => 'phone',
        'Phone' => 'phone',
        'comment' => 'comment',
        'Comment' => 'comment',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STOCK_ADDRESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_stock_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STOCK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_stock',
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
        self::REGION => [
            'type' => 'Generated\Shared\Transfer\RegionTransfer',
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
    ];

    /**
     * @module StockAddress
     *
     * @param int|null $idStockAddress
     *
     * @return $this
     */
    public function setIdStockAddress($idStockAddress)
    {
        $this->idStockAddress = $idStockAddress;
        $this->modifiedProperties[self::ID_STOCK_ADDRESS] = true;

        return $this;
    }

    /**
     * @module StockAddress
     *
     * @return int|null
     */
    public function getIdStockAddress()
    {
        return $this->idStockAddress;
    }

    /**
     * @module StockAddress
     *
     * @param int|null $idStockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStockAddressOrFail($idStockAddress)
    {
        if ($idStockAddress === null) {
            $this->throwNullValueException(static::ID_STOCK_ADDRESS);
        }

        return $this->setIdStockAddress($idStockAddress);
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStockAddressOrFail()
    {
        if ($this->idStockAddress === null) {
            $this->throwNullValueException(static::ID_STOCK_ADDRESS);
        }

        return $this->idStockAddress;
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStockAddress()
    {
        $this->assertPropertyIsSet(self::ID_STOCK_ADDRESS);

        return $this;
    }

    /**
     * @module StockAddress
     *
     * @param int|null $idStock
     *
     * @return $this
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
        $this->modifiedProperties[self::ID_STOCK] = true;

        return $this;
    }

    /**
     * @module StockAddress
     *
     * @return int|null
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @module StockAddress
     *
     * @param int|null $idStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStockOrFail($idStock)
    {
        if ($idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->setIdStock($idStock);
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStockOrFail()
    {
        if ($this->idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->idStock;
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStock()
    {
        $this->assertPropertyIsSet(self::ID_STOCK);

        return $this;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return \Generated\Shared\Transfer\CountryTransfer|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @param \Generated\Shared\Transfer\RegionTransfer|null $region
     *
     * @return $this
     */
    public function setRegion(RegionTransfer $region = null)
    {
        $this->region = $region;
        $this->modifiedProperties[self::REGION] = true;

        return $this;
    }

    /**
     * @module StockAddress
     *
     * @return \Generated\Shared\Transfer\RegionTransfer|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @module StockAddress
     *
     * @param \Generated\Shared\Transfer\RegionTransfer $region
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegionOrFail(RegionTransfer $region)
    {
        return $this->setRegion($region);
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RegionTransfer
     */
    public function getRegionOrFail()
    {
        if ($this->region === null) {
            $this->throwNullValueException(static::REGION);
        }

        return $this->region;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module StockAddress
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
     * @module StockAddress
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
     * @module StockAddress
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
                case 'idStockAddress':
                case 'idStock':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'zipCode':
                case 'phone':
                case 'comment':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'country':
                case 'region':
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
                case 'idStockAddress':
                case 'idStock':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'zipCode':
                case 'phone':
                case 'comment':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
                case 'region':
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
                case 'idStockAddress':
                case 'idStock':
                case 'address1':
                case 'address2':
                case 'address3':
                case 'city':
                case 'zipCode':
                case 'phone':
                case 'comment':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
                case 'region':
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
            'idStockAddress' => $this->idStockAddress,
            'idStock' => $this->idStock,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'city' => $this->city,
            'zipCode' => $this->zipCode,
            'phone' => $this->phone,
            'comment' => $this->comment,
            'country' => $this->country,
            'region' => $this->region,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_stock_address' => $this->idStockAddress,
            'id_stock' => $this->idStock,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'address3' => $this->address3,
            'city' => $this->city,
            'zip_code' => $this->zipCode,
            'phone' => $this->phone,
            'comment' => $this->comment,
            'country' => $this->country,
            'region' => $this->region,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_stock_address' => $this->idStockAddress instanceof AbstractTransfer ? $this->idStockAddress->toArray(true, false) : $this->idStockAddress,
            'id_stock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, false) : $this->idStock,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, false) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, false) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, false) : $this->address3,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'zip_code' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, false) : $this->zipCode,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, false) : $this->region,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStockAddress' => $this->idStockAddress instanceof AbstractTransfer ? $this->idStockAddress->toArray(true, true) : $this->idStockAddress,
            'idStock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, true) : $this->idStock,
            'address1' => $this->address1 instanceof AbstractTransfer ? $this->address1->toArray(true, true) : $this->address1,
            'address2' => $this->address2 instanceof AbstractTransfer ? $this->address2->toArray(true, true) : $this->address2,
            'address3' => $this->address3 instanceof AbstractTransfer ? $this->address3->toArray(true, true) : $this->address3,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'zipCode' => $this->zipCode instanceof AbstractTransfer ? $this->zipCode->toArray(true, true) : $this->zipCode,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, true) : $this->region,
        ];
    }
}
