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
class MerchantTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT = 'idMerchant';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const REGISTRATION_NUMBER = 'registrationNumber';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const MERCHANT_REFERENCE = 'merchantReference';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const MERCHANT_PROFILE = 'merchantProfile';

    /**
     * @deprecated Use MerchantProfile.addressCollection instead
     */
    public const ADDRESS_COLLECTION = 'addressCollection';

    /**
     * @var string
     */
    public const URL_COLLECTION = 'urlCollection';

    /**
     * @deprecated Use merchantReference property instead.
     */
    public const MERCHANT_KEY = 'merchantKey';

    /**
     * @var int|null
     */
    protected $idMerchant;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $registrationNumber;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var \Generated\Shared\Transfer\MerchantProfileTransfer|null
     */
    protected $merchantProfile;

    /**
     * @var \Generated\Shared\Transfer\MerchantAddressCollectionTransfer|null
     */
    protected $addressCollection;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[]
     */
    protected $urlCollection;

    /**
     * @var string|null
     */
    protected $merchantKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant' => 'idMerchant',
        'idMerchant' => 'idMerchant',
        'IdMerchant' => 'idMerchant',
        'name' => 'name',
        'Name' => 'name',
        'registration_number' => 'registrationNumber',
        'registrationNumber' => 'registrationNumber',
        'RegistrationNumber' => 'registrationNumber',
        'email' => 'email',
        'Email' => 'email',
        'status' => 'status',
        'Status' => 'status',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'merchant_profile' => 'merchantProfile',
        'merchantProfile' => 'merchantProfile',
        'MerchantProfile' => 'merchantProfile',
        'address_collection' => 'addressCollection',
        'addressCollection' => 'addressCollection',
        'AddressCollection' => 'addressCollection',
        'url_collection' => 'urlCollection',
        'urlCollection' => 'urlCollection',
        'UrlCollection' => 'urlCollection',
        'merchant_key' => 'merchantKey',
        'merchantKey' => 'merchantKey',
        'MerchantKey' => 'merchantKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_merchant',
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
        self::REGISTRATION_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'registration_number',
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
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
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
        self::MERCHANT_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_PROFILE => [
            'type' => 'Generated\Shared\Transfer\MerchantProfileTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_profile',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDRESS_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\MerchantAddressCollectionTransfer',
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
        self::URL_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\UrlTransfer',
            'type_shim' => null,
            'name_underscore' => 'url_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_key',
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
     * @module MerchantDataImport|MerchantGui|MerchantRelationshipGui|MerchantRelationship|Merchant
     *
     * @param int|null $idMerchant
     *
     * @return $this
     */
    public function setIdMerchant($idMerchant)
    {
        $this->idMerchant = $idMerchant;
        $this->modifiedProperties[self::ID_MERCHANT] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationshipGui|MerchantRelationship|Merchant
     *
     * @return int|null
     */
    public function getIdMerchant()
    {
        return $this->idMerchant;
    }

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationshipGui|MerchantRelationship|Merchant
     *
     * @param int|null $idMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantOrFail($idMerchant)
    {
        if ($idMerchant === null) {
            $this->throwNullValueException(static::ID_MERCHANT);
        }

        return $this->setIdMerchant($idMerchant);
    }

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationshipGui|MerchantRelationship|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdMerchantOrFail()
    {
        if ($this->idMerchant === null) {
            $this->throwNullValueException(static::ID_MERCHANT);
        }

        return $this->idMerchant;
    }

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationshipGui|MerchantRelationship|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMerchant()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT);

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantRelationshipGui|MerchantRelationshipProductListGui|Merchant|PriceProductMerchantRelationshipGui
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
     * @module MerchantDataImport|MerchantRelationshipGui|MerchantRelationshipProductListGui|Merchant|PriceProductMerchantRelationshipGui
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module MerchantDataImport|MerchantRelationshipGui|MerchantRelationshipProductListGui|Merchant|PriceProductMerchantRelationshipGui
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
     * @module MerchantDataImport|MerchantRelationshipGui|MerchantRelationshipProductListGui|Merchant|PriceProductMerchantRelationshipGui
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
     * @module MerchantDataImport|MerchantRelationshipGui|MerchantRelationshipProductListGui|Merchant|PriceProductMerchantRelationshipGui
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
     * @module MerchantDataImport|Merchant
     *
     * @param string|null $registrationNumber
     *
     * @return $this
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
        $this->modifiedProperties[self::REGISTRATION_NUMBER] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport|Merchant
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @module MerchantDataImport|Merchant
     *
     * @param string|null $registrationNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRegistrationNumberOrFail($registrationNumber)
    {
        if ($registrationNumber === null) {
            $this->throwNullValueException(static::REGISTRATION_NUMBER);
        }

        return $this->setRegistrationNumber($registrationNumber);
    }

    /**
     * @module MerchantDataImport|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRegistrationNumberOrFail()
    {
        if ($this->registrationNumber === null) {
            $this->throwNullValueException(static::REGISTRATION_NUMBER);
        }

        return $this->registrationNumber;
    }

    /**
     * @module MerchantDataImport|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegistrationNumber()
    {
        $this->assertPropertyIsSet(self::REGISTRATION_NUMBER);

        return $this;
    }

    /**
     * @module MerchantDataImport|Merchant
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
     * @module MerchantDataImport|Merchant
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module MerchantDataImport|Merchant
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
     * @module MerchantDataImport|Merchant
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
     * @module MerchantDataImport|Merchant
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
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant|PriceProductMerchantRelationship
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
     * @module MerchantDataImport|MerchantGui|Merchant|PriceProductMerchantRelationship
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant|PriceProductMerchantRelationship
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
     * @module MerchantDataImport|MerchantGui|Merchant|PriceProductMerchantRelationship
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
     * @module MerchantDataImport|MerchantGui|Merchant|PriceProductMerchantRelationship
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
     * @module MerchantDataImport|MerchantRelationship|Merchant
     *
     * @param string|null $merchantReference
     *
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        $this->modifiedProperties[self::MERCHANT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantRelationship|Merchant
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module MerchantDataImport|MerchantRelationship|Merchant
     *
     * @param string|null $merchantReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantReferenceOrFail($merchantReference)
    {
        if ($merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->setMerchantReference($merchantReference);
    }

    /**
     * @module MerchantDataImport|MerchantRelationship|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMerchantReferenceOrFail()
    {
        if ($this->merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->merchantReference;
    }

    /**
     * @module MerchantDataImport|MerchantRelationship|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantReference()
    {
        $this->assertPropertyIsSet(self::MERCHANT_REFERENCE);

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module MerchantDataImport|MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module MerchantDataImport
     *
     * @param \Generated\Shared\Transfer\MerchantProfileTransfer|null $merchantProfile
     *
     * @return $this
     */
    public function setMerchantProfile(MerchantProfileTransfer $merchantProfile = null)
    {
        $this->merchantProfile = $merchantProfile;
        $this->modifiedProperties[self::MERCHANT_PROFILE] = true;

        return $this;
    }

    /**
     * @module MerchantDataImport
     *
     * @return \Generated\Shared\Transfer\MerchantProfileTransfer|null
     */
    public function getMerchantProfile()
    {
        return $this->merchantProfile;
    }

    /**
     * @module MerchantDataImport
     *
     * @param \Generated\Shared\Transfer\MerchantProfileTransfer $merchantProfile
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantProfileOrFail(MerchantProfileTransfer $merchantProfile)
    {
        return $this->setMerchantProfile($merchantProfile);
    }

    /**
     * @module MerchantDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MerchantProfileTransfer
     */
    public function getMerchantProfileOrFail()
    {
        if ($this->merchantProfile === null) {
            $this->throwNullValueException(static::MERCHANT_PROFILE);
        }

        return $this->merchantProfile;
    }

    /**
     * @module MerchantDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantProfile()
    {
        $this->assertPropertyIsSet(self::MERCHANT_PROFILE);

        return $this;
    }

    /**
     * @module MerchantGui
     *
     * @deprecated Use MerchantProfile.addressCollection instead
     *
     * @param \Generated\Shared\Transfer\MerchantAddressCollectionTransfer|null $addressCollection
     *
     * @return $this
     */
    public function setAddressCollection(MerchantAddressCollectionTransfer $addressCollection = null)
    {
        $this->addressCollection = $addressCollection;
        $this->modifiedProperties[self::ADDRESS_COLLECTION] = true;

        return $this;
    }

    /**
     * @module MerchantGui
     *
     * @deprecated Use MerchantProfile.addressCollection instead
     *
     * @return \Generated\Shared\Transfer\MerchantAddressCollectionTransfer|null
     */
    public function getAddressCollection()
    {
        return $this->addressCollection;
    }

    /**
     * @module MerchantGui
     *
     * @deprecated Use MerchantProfile.addressCollection instead
     *
     * @param \Generated\Shared\Transfer\MerchantAddressCollectionTransfer $addressCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddressCollectionOrFail(MerchantAddressCollectionTransfer $addressCollection)
    {
        return $this->setAddressCollection($addressCollection);
    }

    /**
     * @module MerchantGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use MerchantProfile.addressCollection instead
     *
     * @return \Generated\Shared\Transfer\MerchantAddressCollectionTransfer
     */
    public function getAddressCollectionOrFail()
    {
        if ($this->addressCollection === null) {
            $this->throwNullValueException(static::ADDRESS_COLLECTION);
        }

        return $this->addressCollection;
    }

    /**
     * @module MerchantGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use MerchantProfile.addressCollection instead
     *
     * @return $this
     */
    public function requireAddressCollection()
    {
        $this->assertPropertyIsSet(self::ADDRESS_COLLECTION);

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[] $urlCollection
     *
     * @return $this
     */
    public function setUrlCollection(ArrayObject $urlCollection)
    {
        $this->urlCollection = $urlCollection;
        $this->modifiedProperties[self::URL_COLLECTION] = true;

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[]
     */
    public function getUrlCollection()
    {
        return $this->urlCollection;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param \Generated\Shared\Transfer\UrlTransfer $url
     *
     * @return $this
     */
    public function addUrl(UrlTransfer $url)
    {
        $this->urlCollection[] = $url;
        $this->modifiedProperties[self::URL_COLLECTION] = true;

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrlCollection()
    {
        $this->assertCollectionPropertyIsSet(self::URL_COLLECTION);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @deprecated Use merchantReference property instead.
     *
     * @param string|null $merchantKey
     *
     * @return $this
     */
    public function setMerchantKey($merchantKey)
    {
        $this->merchantKey = $merchantKey;
        $this->modifiedProperties[self::MERCHANT_KEY] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @deprecated Use merchantReference property instead.
     *
     * @return string|null
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * @module Merchant
     *
     * @deprecated Use merchantReference property instead.
     *
     * @param string|null $merchantKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantKeyOrFail($merchantKey)
    {
        if ($merchantKey === null) {
            $this->throwNullValueException(static::MERCHANT_KEY);
        }

        return $this->setMerchantKey($merchantKey);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use merchantReference property instead.
     *
     * @return string
     */
    public function getMerchantKeyOrFail()
    {
        if ($this->merchantKey === null) {
            $this->throwNullValueException(static::MERCHANT_KEY);
        }

        return $this->merchantKey;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use merchantReference property instead.
     *
     * @return $this
     */
    public function requireMerchantKey()
    {
        $this->assertPropertyIsSet(self::MERCHANT_KEY);

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
                case 'idMerchant':
                case 'name':
                case 'registrationNumber':
                case 'email':
                case 'status':
                case 'isActive':
                case 'merchantReference':
                case 'merchantKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'storeRelation':
                case 'merchantProfile':
                case 'addressCollection':
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
                case 'urlCollection':
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
                case 'idMerchant':
                case 'name':
                case 'registrationNumber':
                case 'email':
                case 'status':
                case 'isActive':
                case 'merchantReference':
                case 'merchantKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                case 'merchantProfile':
                case 'addressCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'urlCollection':
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
                case 'idMerchant':
                case 'name':
                case 'registrationNumber':
                case 'email':
                case 'status':
                case 'isActive':
                case 'merchantReference':
                case 'merchantKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                case 'merchantProfile':
                case 'addressCollection':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'urlCollection':
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
        $this->urlCollection = $this->urlCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idMerchant' => $this->idMerchant,
            'name' => $this->name,
            'registrationNumber' => $this->registrationNumber,
            'email' => $this->email,
            'status' => $this->status,
            'isActive' => $this->isActive,
            'merchantReference' => $this->merchantReference,
            'merchantKey' => $this->merchantKey,
            'storeRelation' => $this->storeRelation,
            'merchantProfile' => $this->merchantProfile,
            'addressCollection' => $this->addressCollection,
            'urlCollection' => $this->urlCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant' => $this->idMerchant,
            'name' => $this->name,
            'registration_number' => $this->registrationNumber,
            'email' => $this->email,
            'status' => $this->status,
            'is_active' => $this->isActive,
            'merchant_reference' => $this->merchantReference,
            'merchant_key' => $this->merchantKey,
            'store_relation' => $this->storeRelation,
            'merchant_profile' => $this->merchantProfile,
            'address_collection' => $this->addressCollection,
            'url_collection' => $this->urlCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, false) : $this->idMerchant,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'registration_number' => $this->registrationNumber instanceof AbstractTransfer ? $this->registrationNumber->toArray(true, false) : $this->registrationNumber,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'merchant_key' => $this->merchantKey instanceof AbstractTransfer ? $this->merchantKey->toArray(true, false) : $this->merchantKey,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'merchant_profile' => $this->merchantProfile instanceof AbstractTransfer ? $this->merchantProfile->toArray(true, false) : $this->merchantProfile,
            'address_collection' => $this->addressCollection instanceof AbstractTransfer ? $this->addressCollection->toArray(true, false) : $this->addressCollection,
            'url_collection' => $this->urlCollection instanceof AbstractTransfer ? $this->urlCollection->toArray(true, false) : $this->addValuesToCollection($this->urlCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, true) : $this->idMerchant,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'registrationNumber' => $this->registrationNumber instanceof AbstractTransfer ? $this->registrationNumber->toArray(true, true) : $this->registrationNumber,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'merchantKey' => $this->merchantKey instanceof AbstractTransfer ? $this->merchantKey->toArray(true, true) : $this->merchantKey,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'merchantProfile' => $this->merchantProfile instanceof AbstractTransfer ? $this->merchantProfile->toArray(true, true) : $this->merchantProfile,
            'addressCollection' => $this->addressCollection instanceof AbstractTransfer ? $this->addressCollection->toArray(true, true) : $this->addressCollection,
            'urlCollection' => $this->urlCollection instanceof AbstractTransfer ? $this->urlCollection->toArray(true, true) : $this->addValuesToCollection($this->urlCollection, true, true),
        ];
    }
}
