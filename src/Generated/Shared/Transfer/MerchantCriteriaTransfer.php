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
class MerchantCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MERCHANT_REFERENCE = 'merchantReference';

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
    public const MERCHANT_REFERENCES = 'merchantReferences';

    /**
     * @var string
     */
    public const MERCHANT_IDS = 'merchantIds';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var int|null
     */
    protected $idMerchant;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var string[]
     */
    protected $merchantReferences = [];

    /**
     * @var array
     */
    protected $merchantIds = [];

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'id_merchant' => 'idMerchant',
        'idMerchant' => 'idMerchant',
        'IdMerchant' => 'idMerchant',
        'email' => 'email',
        'Email' => 'email',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'merchant_references' => 'merchantReferences',
        'merchantReferences' => 'merchantReferences',
        'MerchantReferences' => 'merchantReferences',
        'merchant_ids' => 'merchantIds',
        'merchantIds' => 'merchantIds',
        'MerchantIds' => 'merchantIds',
        'filter' => 'filter',
        'Filter' => 'filter',
        'status' => 'status',
        'Status' => 'status',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::MERCHANT_REFERENCES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'merchant_references',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'merchant_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantDataImport|MerchantGui|MerchantRelationship|Merchant
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module MerchantDataImport|MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantDataImport|MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantDataImport|MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantGui|MerchantRelationship|Merchant
     *
     * @return int|null
     */
    public function getIdMerchant()
    {
        return $this->idMerchant;
    }

    /**
     * @module MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantGui|MerchantRelationship|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module MerchantGui|Merchant
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
     * @module Merchant
     *
     * @param string[]|null $merchantReferences
     *
     * @return $this
     */
    public function setMerchantReferences(array $merchantReferences = null)
    {
        if ($merchantReferences === null) {
            $merchantReferences = [];
        }

        $this->merchantReferences = $merchantReferences;
        $this->modifiedProperties[self::MERCHANT_REFERENCES] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return string[]
     */
    public function getMerchantReferences()
    {
        return $this->merchantReferences;
    }

    /**
     * @module Merchant
     *
     * @param string $merchantReference
     *
     * @return $this
     */
    public function addMerchantReference($merchantReference)
    {
        $this->merchantReferences[] = $merchantReference;
        $this->modifiedProperties[self::MERCHANT_REFERENCES] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantReferences()
    {
        $this->assertPropertyIsSet(self::MERCHANT_REFERENCES);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @param array|null $merchantIds
     *
     * @return $this
     */
    public function setMerchantIds(array $merchantIds = null)
    {
        if ($merchantIds === null) {
            $merchantIds = [];
        }

        $this->merchantIds = $merchantIds;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return array
     */
    public function getMerchantIds()
    {
        return $this->merchantIds;
    }

    /**
     * @module Merchant
     *
     * @param mixed $merchantId
     *
     * @return $this
     */
    public function addMerchantId($merchantId)
    {
        $this->merchantIds[] = $merchantId;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantIds()
    {
        $this->assertPropertyIsSet(self::MERCHANT_IDS);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module Merchant
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
     * @module Merchant
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module Merchant
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
     * @module Merchant
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
     * @module Merchant
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
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module Merchant
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'merchantReference':
                case 'idMerchant':
                case 'email':
                case 'isActive':
                case 'merchantReferences':
                case 'merchantIds':
                case 'status':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
                case 'pagination':
                case 'store':
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
                case 'merchantReference':
                case 'idMerchant':
                case 'email':
                case 'isActive':
                case 'merchantReferences':
                case 'merchantIds':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
                case 'store':
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
                case 'merchantReference':
                case 'idMerchant':
                case 'email':
                case 'isActive':
                case 'merchantReferences':
                case 'merchantIds':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
                case 'store':
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
            'merchantReference' => $this->merchantReference,
            'idMerchant' => $this->idMerchant,
            'email' => $this->email,
            'isActive' => $this->isActive,
            'merchantReferences' => $this->merchantReferences,
            'merchantIds' => $this->merchantIds,
            'status' => $this->status,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'merchant_reference' => $this->merchantReference,
            'id_merchant' => $this->idMerchant,
            'email' => $this->email,
            'is_active' => $this->isActive,
            'merchant_references' => $this->merchantReferences,
            'merchant_ids' => $this->merchantIds,
            'status' => $this->status,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'id_merchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, false) : $this->idMerchant,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'merchant_references' => $this->merchantReferences instanceof AbstractTransfer ? $this->merchantReferences->toArray(true, false) : $this->merchantReferences,
            'merchant_ids' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, false) : $this->merchantIds,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'idMerchant' => $this->idMerchant instanceof AbstractTransfer ? $this->idMerchant->toArray(true, true) : $this->idMerchant,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'merchantReferences' => $this->merchantReferences instanceof AbstractTransfer ? $this->merchantReferences->toArray(true, true) : $this->merchantReferences,
            'merchantIds' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, true) : $this->merchantIds,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
