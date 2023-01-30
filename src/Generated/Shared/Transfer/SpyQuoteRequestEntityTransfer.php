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
class SpyQuoteRequestEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_REQUEST = 'idQuoteRequest';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var string
     */
    public const VALID_UNTIL = 'validUntil';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const IS_LATEST_VERSION_VISIBLE = 'isLatestVersionVisible';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const SPY_QUOTE_REQUEST_VERSIONS = 'spyQuoteRequestVersions';

    /**
     * @var integer|null
     */
    protected $idQuoteRequest;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var string|null
     */
    protected $validUntil;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var boolean|null
     */
    protected $isLatestVersionVisible;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $companyUser;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestVersionEntityTransfer[]
     */
    protected $spyQuoteRequestVersions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_request' => 'idQuoteRequest',
        'idQuoteRequest' => 'idQuoteRequest',
        'IdQuoteRequest' => 'idQuoteRequest',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
        'valid_until' => 'validUntil',
        'validUntil' => 'validUntil',
        'ValidUntil' => 'validUntil',
        'status' => 'status',
        'Status' => 'status',
        'is_latest_version_visible' => 'isLatestVersionVisible',
        'isLatestVersionVisible' => 'isLatestVersionVisible',
        'IsLatestVersionVisible' => 'isLatestVersionVisible',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'spy_quote_request_versions' => 'spyQuoteRequestVersions',
        'spyQuoteRequestVersions' => 'spyQuoteRequestVersions',
        'SpyQuoteRequestVersions' => 'spyQuoteRequestVersions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_REQUEST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote_request',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_REQUEST_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_UNTIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_until',
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
        self::IS_LATEST_VERSION_VISIBLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_latest_version_visible',
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
        self::COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_REQUEST_VERSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteRequestVersionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_request_versions',
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
    public static $entityNamespace = 'Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequest';


    /**
     * @module 
     *
     * @param integer|null $idQuoteRequest
     *
     * @return $this
     */
    public function setIdQuoteRequest($idQuoteRequest)
    {
        $this->idQuoteRequest = $idQuoteRequest;
        $this->modifiedProperties[self::ID_QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuoteRequest()
    {
        return $this->idQuoteRequest;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteRequestOrFail($idQuoteRequest)
    {
        if ($idQuoteRequest === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST);
        }

        return $this->setIdQuoteRequest($idQuoteRequest);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuoteRequestOrFail()
    {
        if ($this->idQuoteRequest === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST);
        }

        return $this->idQuoteRequest;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteRequest()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_REQUEST);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUser
     *
     * @return $this
     */
    public function setFkCompanyUser($fkCompanyUser)
    {
        $this->fkCompanyUser = $fkCompanyUser;
        $this->modifiedProperties[self::FK_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyUserOrFail($fkCompanyUser)
    {
        if ($fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->setFkCompanyUser($fkCompanyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyUserOrFail()
    {
        if ($this->fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->fkCompanyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyUser()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $quoteRequestReference
     *
     * @return $this
     */
    public function setQuoteRequestReference($quoteRequestReference)
    {
        $this->quoteRequestReference = $quoteRequestReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module 
     *
     * @param string|null $quoteRequestReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestReferenceOrFail($quoteRequestReference)
    {
        if ($quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->setQuoteRequestReference($quoteRequestReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestReferenceOrFail()
    {
        if ($this->quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->quoteRequestReference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $validUntil
     *
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        $this->modifiedProperties[self::VALID_UNTIL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @module 
     *
     * @param string|null $validUntil
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidUntilOrFail($validUntil)
    {
        if ($validUntil === null) {
            $this->throwNullValueException(static::VALID_UNTIL);
        }

        return $this->setValidUntil($validUntil);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidUntilOrFail()
    {
        if ($this->validUntil === null) {
            $this->throwNullValueException(static::VALID_UNTIL);
        }

        return $this->validUntil;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidUntil()
    {
        $this->assertPropertyIsSet(self::VALID_UNTIL);

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
     * @param boolean|null $isLatestVersionVisible
     *
     * @return $this
     */
    public function setIsLatestVersionVisible($isLatestVersionVisible)
    {
        $this->isLatestVersionVisible = $isLatestVersionVisible;
        $this->modifiedProperties[self::IS_LATEST_VERSION_VISIBLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsLatestVersionVisible()
    {
        return $this->isLatestVersionVisible;
    }

    /**
     * @module 
     *
     * @param boolean|null $isLatestVersionVisible
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLatestVersionVisibleOrFail($isLatestVersionVisible)
    {
        if ($isLatestVersionVisible === null) {
            $this->throwNullValueException(static::IS_LATEST_VERSION_VISIBLE);
        }

        return $this->setIsLatestVersionVisible($isLatestVersionVisible);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsLatestVersionVisibleOrFail()
    {
        if ($this->isLatestVersionVisible === null) {
            $this->throwNullValueException(static::IS_LATEST_VERSION_VISIBLE);
        }

        return $this->isLatestVersionVisible;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLatestVersionVisible()
    {
        $this->assertPropertyIsSet(self::IS_LATEST_VERSION_VISIBLE);

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
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null $companyUser
     *
     * @return $this
     */
    public function setCompanyUser(SpyCompanyUserEntityTransfer $companyUser = null)
    {
        $this->companyUser = $companyUser;
        $this->modifiedProperties[self::COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer $companyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserOrFail(SpyCompanyUserEntityTransfer $companyUser)
    {
        return $this->setCompanyUser($companyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer
     */
    public function getCompanyUserOrFail()
    {
        if ($this->companyUser === null) {
            $this->throwNullValueException(static::COMPANY_USER);
        }

        return $this->companyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUser()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestVersionEntityTransfer[] $spyQuoteRequestVersions
     *
     * @return $this
     */
    public function setSpyQuoteRequestVersions(ArrayObject $spyQuoteRequestVersions)
    {
        $this->spyQuoteRequestVersions = $spyQuoteRequestVersions;
        $this->modifiedProperties[self::SPY_QUOTE_REQUEST_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyQuoteRequestVersionEntityTransfer[]
     */
    public function getSpyQuoteRequestVersions()
    {
        return $this->spyQuoteRequestVersions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteRequestVersionEntityTransfer $spyQuoteRequestVersions
     *
     * @return $this
     */
    public function addSpyQuoteRequestVersions(SpyQuoteRequestVersionEntityTransfer $spyQuoteRequestVersions)
    {
        $this->spyQuoteRequestVersions[] = $spyQuoteRequestVersions;
        $this->modifiedProperties[self::SPY_QUOTE_REQUEST_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuoteRequestVersions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_QUOTE_REQUEST_VERSIONS);

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
                case 'idQuoteRequest':
                case 'fkCompanyUser':
                case 'quoteRequestReference':
                case 'validUntil':
                case 'status':
                case 'isLatestVersionVisible':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUser':
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
                case 'spyQuoteRequestVersions':
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
                case 'idQuoteRequest':
                case 'fkCompanyUser':
                case 'quoteRequestReference':
                case 'validUntil':
                case 'status':
                case 'isLatestVersionVisible':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyQuoteRequestVersions':
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
                case 'idQuoteRequest':
                case 'fkCompanyUser':
                case 'quoteRequestReference':
                case 'validUntil':
                case 'status':
                case 'isLatestVersionVisible':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyQuoteRequestVersions':
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
        $this->spyQuoteRequestVersions = $this->spyQuoteRequestVersions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idQuoteRequest' => $this->idQuoteRequest,
            'fkCompanyUser' => $this->fkCompanyUser,
            'quoteRequestReference' => $this->quoteRequestReference,
            'validUntil' => $this->validUntil,
            'status' => $this->status,
            'isLatestVersionVisible' => $this->isLatestVersionVisible,
            'uuid' => $this->uuid,
            'companyUser' => $this->companyUser,
            'spyQuoteRequestVersions' => $this->spyQuoteRequestVersions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request' => $this->idQuoteRequest,
            'fk_company_user' => $this->fkCompanyUser,
            'quote_request_reference' => $this->quoteRequestReference,
            'valid_until' => $this->validUntil,
            'status' => $this->status,
            'is_latest_version_visible' => $this->isLatestVersionVisible,
            'uuid' => $this->uuid,
            'company_user' => $this->companyUser,
            'spy_quote_request_versions' => $this->spyQuoteRequestVersions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, false) : $this->idQuoteRequest,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'valid_until' => $this->validUntil instanceof AbstractTransfer ? $this->validUntil->toArray(true, false) : $this->validUntil,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_latest_version_visible' => $this->isLatestVersionVisible instanceof AbstractTransfer ? $this->isLatestVersionVisible->toArray(true, false) : $this->isLatestVersionVisible,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
            'spy_quote_request_versions' => $this->spyQuoteRequestVersions instanceof AbstractTransfer ? $this->spyQuoteRequestVersions->toArray(true, false) : $this->addValuesToCollection($this->spyQuoteRequestVersions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteRequest' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, true) : $this->idQuoteRequest,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'validUntil' => $this->validUntil instanceof AbstractTransfer ? $this->validUntil->toArray(true, true) : $this->validUntil,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isLatestVersionVisible' => $this->isLatestVersionVisible instanceof AbstractTransfer ? $this->isLatestVersionVisible->toArray(true, true) : $this->isLatestVersionVisible,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
            'spyQuoteRequestVersions' => $this->spyQuoteRequestVersions instanceof AbstractTransfer ? $this->spyQuoteRequestVersions->toArray(true, true) : $this->addValuesToCollection($this->spyQuoteRequestVersions, true, true),
        ];
    }
}
