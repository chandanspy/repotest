<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PyzStoreLocationsEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const IDSTORE = 'idstore';

    /**
     * @var string
     */
    public const STORENAME = 'storename';

    /**
     * @var string
     */
    public const STREET = 'street';

    /**
     * @var string
     */
    public const CITY = 'city';

    /**
     * @var string
     */
    public const REGION = 'region';

    /**
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * @var string
     */
    public const ZIPCODE = 'zipcode';

    /**
     * @var string
     */
    public const LONGITUDE = 'longitude';

    /**
     * @var string
     */
    public const LATITUDE = 'latitude';

    /**
     * @var string
     */
    public const STOREIMAGE = 'storeimage';

    /**
     * @var integer|null
     */
    protected $idstore;

    /**
     * @var string|null
     */
    protected $storename;

    /**
     * @var string|null
     */
    protected $street;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $region;

    /**
     * @var string|null
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $zipcode;

    /**
     * @var string|null
     */
    protected $longitude;

    /**
     * @var string|null
     */
    protected $latitude;

    /**
     * @var string|null
     */
    protected $storeimage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'idstore' => 'idstore',
        'Idstore' => 'idstore',
        'storename' => 'storename',
        'Storename' => 'storename',
        'street' => 'street',
        'Street' => 'street',
        'city' => 'city',
        'City' => 'city',
        'region' => 'region',
        'Region' => 'region',
        'country' => 'country',
        'Country' => 'country',
        'zipcode' => 'zipcode',
        'Zipcode' => 'zipcode',
        'longitude' => 'longitude',
        'Longitude' => 'longitude',
        'latitude' => 'latitude',
        'Latitude' => 'latitude',
        'storeimage' => 'storeimage',
        'Storeimage' => 'storeimage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IDSTORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'idstore',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORENAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'storename',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STREET => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'street',
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
        self::ZIPCODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'zipcode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LONGITUDE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'longitude',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LATITUDE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'latitude',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STOREIMAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'storeimage',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\StoreLocations\Persistence\PyzStoreLocations';


    /**
     * @module 
     *
     * @param integer|null $idstore
     *
     * @return $this
     */
    public function setIdstore($idstore)
    {
        $this->idstore = $idstore;
        $this->modifiedProperties[self::IDSTORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdstore()
    {
        return $this->idstore;
    }

    /**
     * @module 
     *
     * @param integer|null $idstore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdstoreOrFail($idstore)
    {
        if ($idstore === null) {
            $this->throwNullValueException(static::IDSTORE);
        }

        return $this->setIdstore($idstore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdstoreOrFail()
    {
        if ($this->idstore === null) {
            $this->throwNullValueException(static::IDSTORE);
        }

        return $this->idstore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdstore()
    {
        $this->assertPropertyIsSet(self::IDSTORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $storename
     *
     * @return $this
     */
    public function setStorename($storename)
    {
        $this->storename = $storename;
        $this->modifiedProperties[self::STORENAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStorename()
    {
        return $this->storename;
    }

    /**
     * @module 
     *
     * @param string|null $storename
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStorenameOrFail($storename)
    {
        if ($storename === null) {
            $this->throwNullValueException(static::STORENAME);
        }

        return $this->setStorename($storename);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStorenameOrFail()
    {
        if ($this->storename === null) {
            $this->throwNullValueException(static::STORENAME);
        }

        return $this->storename;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStorename()
    {
        $this->assertPropertyIsSet(self::STORENAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        $this->modifiedProperties[self::STREET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @module 
     *
     * @param string|null $street
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStreetOrFail($street)
    {
        if ($street === null) {
            $this->throwNullValueException(static::STREET);
        }

        return $this->setStreet($street);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStreetOrFail()
    {
        if ($this->street === null) {
            $this->throwNullValueException(static::STREET);
        }

        return $this->street;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStreet()
    {
        $this->assertPropertyIsSet(self::STREET);

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
     * @module 
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module 
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
     * @module 
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
     * @param string|null $zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        $this->modifiedProperties[self::ZIPCODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @module 
     *
     * @param string|null $zipcode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setZipcodeOrFail($zipcode)
    {
        if ($zipcode === null) {
            $this->throwNullValueException(static::ZIPCODE);
        }

        return $this->setZipcode($zipcode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getZipcodeOrFail()
    {
        if ($this->zipcode === null) {
            $this->throwNullValueException(static::ZIPCODE);
        }

        return $this->zipcode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireZipcode()
    {
        $this->assertPropertyIsSet(self::ZIPCODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        $this->modifiedProperties[self::LONGITUDE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @module 
     *
     * @param string|null $longitude
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLongitudeOrFail($longitude)
    {
        if ($longitude === null) {
            $this->throwNullValueException(static::LONGITUDE);
        }

        return $this->setLongitude($longitude);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLongitudeOrFail()
    {
        if ($this->longitude === null) {
            $this->throwNullValueException(static::LONGITUDE);
        }

        return $this->longitude;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLongitude()
    {
        $this->assertPropertyIsSet(self::LONGITUDE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        $this->modifiedProperties[self::LATITUDE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @module 
     *
     * @param string|null $latitude
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLatitudeOrFail($latitude)
    {
        if ($latitude === null) {
            $this->throwNullValueException(static::LATITUDE);
        }

        return $this->setLatitude($latitude);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLatitudeOrFail()
    {
        if ($this->latitude === null) {
            $this->throwNullValueException(static::LATITUDE);
        }

        return $this->latitude;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLatitude()
    {
        $this->assertPropertyIsSet(self::LATITUDE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $storeimage
     *
     * @return $this
     */
    public function setStoreimage($storeimage)
    {
        $this->storeimage = $storeimage;
        $this->modifiedProperties[self::STOREIMAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStoreimage()
    {
        return $this->storeimage;
    }

    /**
     * @module 
     *
     * @param string|null $storeimage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreimageOrFail($storeimage)
    {
        if ($storeimage === null) {
            $this->throwNullValueException(static::STOREIMAGE);
        }

        return $this->setStoreimage($storeimage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreimageOrFail()
    {
        if ($this->storeimage === null) {
            $this->throwNullValueException(static::STOREIMAGE);
        }

        return $this->storeimage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreimage()
    {
        $this->assertPropertyIsSet(self::STOREIMAGE);

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
                case 'idstore':
                case 'storename':
                case 'street':
                case 'city':
                case 'region':
                case 'country':
                case 'zipcode':
                case 'longitude':
                case 'latitude':
                case 'storeimage':
                    $this->$normalizedPropertyName = $value;
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
                case 'idstore':
                case 'storename':
                case 'street':
                case 'city':
                case 'region':
                case 'country':
                case 'zipcode':
                case 'longitude':
                case 'latitude':
                case 'storeimage':
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
                case 'idstore':
                case 'storename':
                case 'street':
                case 'city':
                case 'region':
                case 'country':
                case 'zipcode':
                case 'longitude':
                case 'latitude':
                case 'storeimage':
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
            'idstore' => $this->idstore,
            'storename' => $this->storename,
            'street' => $this->street,
            'city' => $this->city,
            'region' => $this->region,
            'country' => $this->country,
            'zipcode' => $this->zipcode,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'storeimage' => $this->storeimage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'idstore' => $this->idstore,
            'storename' => $this->storename,
            'street' => $this->street,
            'city' => $this->city,
            'region' => $this->region,
            'country' => $this->country,
            'zipcode' => $this->zipcode,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'storeimage' => $this->storeimage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'idstore' => $this->idstore instanceof AbstractTransfer ? $this->idstore->toArray(true, false) : $this->idstore,
            'storename' => $this->storename instanceof AbstractTransfer ? $this->storename->toArray(true, false) : $this->storename,
            'street' => $this->street instanceof AbstractTransfer ? $this->street->toArray(true, false) : $this->street,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, false) : $this->city,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, false) : $this->region,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
            'zipcode' => $this->zipcode instanceof AbstractTransfer ? $this->zipcode->toArray(true, false) : $this->zipcode,
            'longitude' => $this->longitude instanceof AbstractTransfer ? $this->longitude->toArray(true, false) : $this->longitude,
            'latitude' => $this->latitude instanceof AbstractTransfer ? $this->latitude->toArray(true, false) : $this->latitude,
            'storeimage' => $this->storeimage instanceof AbstractTransfer ? $this->storeimage->toArray(true, false) : $this->storeimage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idstore' => $this->idstore instanceof AbstractTransfer ? $this->idstore->toArray(true, true) : $this->idstore,
            'storename' => $this->storename instanceof AbstractTransfer ? $this->storename->toArray(true, true) : $this->storename,
            'street' => $this->street instanceof AbstractTransfer ? $this->street->toArray(true, true) : $this->street,
            'city' => $this->city instanceof AbstractTransfer ? $this->city->toArray(true, true) : $this->city,
            'region' => $this->region instanceof AbstractTransfer ? $this->region->toArray(true, true) : $this->region,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
            'zipcode' => $this->zipcode instanceof AbstractTransfer ? $this->zipcode->toArray(true, true) : $this->zipcode,
            'longitude' => $this->longitude instanceof AbstractTransfer ? $this->longitude->toArray(true, true) : $this->longitude,
            'latitude' => $this->latitude instanceof AbstractTransfer ? $this->latitude->toArray(true, true) : $this->latitude,
            'storeimage' => $this->storeimage instanceof AbstractTransfer ? $this->storeimage->toArray(true, true) : $this->storeimage,
        ];
    }
}
