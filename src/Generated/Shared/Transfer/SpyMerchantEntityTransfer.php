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
class SpyMerchantEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT = 'idMerchant';

    /**
     * @var string
     */
    public const EMAIL = 'email';

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
    public const NAME = 'name';

    /**
     * @var string
     */
    public const REGISTRATION_NUMBER = 'registrationNumber';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const SPY_MERCHANT_STORES = 'spyMerchantStores';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIPS = 'spyMerchantRelationships';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var integer|null
     */
    protected $idMerchant;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $merchantReference;

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
    protected $status;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantStoreEntityTransfer[]
     */
    protected $spyMerchantStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer[]
     */
    protected $spyMerchantRelationships;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant' => 'idMerchant',
        'idMerchant' => 'idMerchant',
        'IdMerchant' => 'idMerchant',
        'email' => 'email',
        'Email' => 'email',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'name' => 'name',
        'Name' => 'name',
        'registration_number' => 'registrationNumber',
        'registrationNumber' => 'registrationNumber',
        'RegistrationNumber' => 'registrationNumber',
        'status' => 'status',
        'Status' => 'status',
        'spy_merchant_stores' => 'spyMerchantStores',
        'spyMerchantStores' => 'spyMerchantStores',
        'SpyMerchantStores' => 'spyMerchantStores',
        'spy_merchant_relationships' => 'spyMerchantRelationships',
        'spyMerchantRelationships' => 'spyMerchantRelationships',
        'SpyMerchantRelationships' => 'spyMerchantRelationships',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT => [
            'type' => 'integer',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::SPY_MERCHANT_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_stores',
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
        self::SPY_URLS => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_urls',
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
    public static $entityNamespace = 'Orm\Zed\Merchant\Persistence\SpyMerchant';


    /**
     * @module 
     *
     * @param integer|null $idMerchant
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdMerchant()
    {
        return $this->idMerchant;
    }

    /**
     * @module 
     *
     * @param integer|null $idMerchant
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdMerchantOrFail()
    {
        if ($this->idMerchant === null) {
            $this->throwNullValueException(static::ID_MERCHANT);
        }

        return $this->idMerchant;
    }

    /**
     * @module 
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
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyMerchantStoreEntityTransfer[] $spyMerchantStores
     *
     * @return $this
     */
    public function setSpyMerchantStores(ArrayObject $spyMerchantStores)
    {
        $this->spyMerchantStores = $spyMerchantStores;
        $this->modifiedProperties[self::SPY_MERCHANT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyMerchantStoreEntityTransfer[]
     */
    public function getSpyMerchantStores()
    {
        return $this->spyMerchantStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantStoreEntityTransfer $spyMerchantStores
     *
     * @return $this
     */
    public function addSpyMerchantStores(SpyMerchantStoreEntityTransfer $spyMerchantStores)
    {
        $this->spyMerchantStores[] = $spyMerchantStores;
        $this->modifiedProperties[self::SPY_MERCHANT_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_MERCHANT_STORES);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[] $spyUrls
     *
     * @return $this
     */
    public function setSpyUrls(ArrayObject $spyUrls)
    {
        $this->spyUrls = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    public function getSpyUrls()
    {
        return $this->spyUrls;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrls
     *
     * @return $this
     */
    public function addSpyUrls(SpyUrlEntityTransfer $spyUrls)
    {
        $this->spyUrls[] = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrls()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_URLS);

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
                case 'email':
                case 'isActive':
                case 'merchantReference':
                case 'name':
                case 'registrationNumber':
                case 'status':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyMerchantStores':
                case 'spyMerchantRelationships':
                case 'spyUrls':
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
                case 'idMerchant':
                case 'email':
                case 'isActive':
                case 'merchantReference':
                case 'name':
                case 'registrationNumber':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantStores':
                case 'spyMerchantRelationships':
                case 'spyUrls':
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
                case 'email':
                case 'isActive':
                case 'merchantReference':
                case 'name':
                case 'registrationNumber':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantStores':
                case 'spyMerchantRelationships':
                case 'spyUrls':
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
        $this->spyMerchantStores = $this->spyMerchantStores ?: new ArrayObject();
        $this->spyMerchantRelationships = $this->spyMerchantRelationships ?: new ArrayObject();
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idMerchant' => $this->idMerchant,
            'email' => $this->email,
            'isActive' => $this->isActive,
            'merchantReference' => $this->merchantReference,
            'name' => $this->name,
            'registrationNumber' => $this->registrationNumber,
            'status' => $this->status,
            'spyMerchantStores' => $this->spyMerchantStores,
            'spyMerchantRelationships' => $this->spyMerchantRelationships,
            'spyUrls' => $this->spyUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant' => $this->idMerchant,
            'email' => $this->email,
            'is_active' => $this->isActive,
            'merchant_reference' => $this->merchantReference,
            'name' => $this->name,
            'registration_number' => $this->registrationNumber,
            'status' => $this->status,
            'spy_merchant_stores' => $this->spyMerchantStores,
            'spy_merchant_relationships' => $this->spyMerchantRelationships,
            'spy_urls' => $this->spyUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, false) : $this->idMerchant,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'registration_number' => $this->registrationNumber instanceof AbstractTransfer ? $this->registrationNumber->toArray(true, false) : $this->registrationNumber,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'spy_merchant_stores' => $this->spyMerchantStores instanceof AbstractTransfer ? $this->spyMerchantStores->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantStores, true, false),
            'spy_merchant_relationships' => $this->spyMerchantRelationships instanceof AbstractTransfer ? $this->spyMerchantRelationships->toArray(true, false) : $this->addValuesToCollection($this->spyMerchantRelationships, true, false),
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, true) : $this->idMerchant,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'registrationNumber' => $this->registrationNumber instanceof AbstractTransfer ? $this->registrationNumber->toArray(true, true) : $this->registrationNumber,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'spyMerchantStores' => $this->spyMerchantStores instanceof AbstractTransfer ? $this->spyMerchantStores->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantStores, true, true),
            'spyMerchantRelationships' => $this->spyMerchantRelationships instanceof AbstractTransfer ? $this->spyMerchantRelationships->toArray(true, true) : $this->addValuesToCollection($this->spyMerchantRelationships, true, true),
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
        ];
    }
}
