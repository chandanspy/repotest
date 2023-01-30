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
class CompanyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_COMPANY = 'idCompany';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const INITIAL_USER_TRANSFER = 'initialUserTransfer';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idCompany;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $initialUserTransfer;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_company' => 'idCompany',
        'idCompany' => 'idCompany',
        'IdCompany' => 'idCompany',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'status' => 'status',
        'Status' => 'status',
        'initial_user_transfer' => 'initialUserTransfer',
        'initialUserTransfer' => 'initialUserTransfer',
        'InitialUserTransfer' => 'initialUserTransfer',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'key' => 'key',
        'Key' => 'key',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company',
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
        self::INITIAL_USER_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'initial_user_transfer',
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
    ];

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyGui|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|Company|MerchantRelationshipGui|MerchantRelationship
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyGui|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|Company|MerchantRelationshipGui|MerchantRelationship
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyGui|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|Company|MerchantRelationshipGui|MerchantRelationship
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyGui|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|Company|MerchantRelationshipGui|MerchantRelationship
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
     * @module BusinessOnBehalfWidget|CompanyPage|CompanyUserAgentWidget|CompanyWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|BusinessOnBehalfGui|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyGui|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|Company|MerchantRelationshipGui|MerchantRelationship
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
     * @module CompanyPage|BusinessOnBehalfGui|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyMailConnector|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|CompanyUser|CompanyUsersRestApi|Company|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @param int|null $idCompany
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        $this->modifiedProperties[self::ID_COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyMailConnector|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|CompanyUser|CompanyUsersRestApi|Company|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @return int|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyMailConnector|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|CompanyUser|CompanyUsersRestApi|Company|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @param int|null $idCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyOrFail($idCompany)
    {
        if ($idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->setIdCompany($idCompany);
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyMailConnector|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|CompanyUser|CompanyUsersRestApi|Company|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyOrFail()
    {
        if ($this->idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->idCompany;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompaniesRestApi|CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyMailConnector|CompanyRoleGui|CompanyRole|CompanyUnitAddressGui|CompanyUserGui|CompanyUser|CompanyUsersRestApi|Company|MerchantRelationshipGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompany()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyGui|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyRole|Company
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CompanyPage|CompanyGui|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyMailConnector|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyMailConnector|CompanyRole|Company
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module CompanyPage|CompanyGui|CompanyMailConnector|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyMailConnector|CompanyRole|Company
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
     * @module CompanyPage|CompanyGui|CompanyMailConnector|CompanyRole|Company
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
     * @module CompanyPage|CompanyUser
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $initialUserTransfer
     *
     * @return $this
     */
    public function setInitialUserTransfer(CompanyUserTransfer $initialUserTransfer = null)
    {
        $this->initialUserTransfer = $initialUserTransfer;
        $this->modifiedProperties[self::INITIAL_USER_TRANSFER] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getInitialUserTransfer()
    {
        return $this->initialUserTransfer;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $initialUserTransfer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInitialUserTransferOrFail(CompanyUserTransfer $initialUserTransfer)
    {
        return $this->setInitialUserTransfer($initialUserTransfer);
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getInitialUserTransferOrFail()
    {
        if ($this->initialUserTransfer === null) {
            $this->throwNullValueException(static::INITIAL_USER_TRANSFER);
        }

        return $this->initialUserTransfer;
    }

    /**
     * @module CompanyPage|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInitialUserTransfer()
    {
        $this->assertPropertyIsSet(self::INITIAL_USER_TRANSFER);

        return $this;
    }

    /**
     * @module CompanyPage|CompaniesRestApi|CompanySalesConnector|Company
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
     * @module CompanyPage|CompaniesRestApi|CompanySalesConnector|Company
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CompanyPage|CompaniesRestApi|CompanySalesConnector|Company
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
     * @module CompanyPage|CompaniesRestApi|CompanySalesConnector|Company
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
     * @module CompanyPage|CompaniesRestApi|CompanySalesConnector|Company
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
     * @module Company
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
     * @module Company
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module Company
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
     * @module Company
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
     * @module Company
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
     * @module CompanyRole|Company
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
     * @module CompanyRole|Company
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module CompanyRole|Company
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
     * @module CompanyRole|Company
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
     * @module CompanyRole|Company
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
                case 'name':
                case 'idCompany':
                case 'isActive':
                case 'status':
                case 'uuid':
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'initialUserTransfer':
                case 'storeRelation':
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
                case 'name':
                case 'idCompany':
                case 'isActive':
                case 'status':
                case 'uuid':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'initialUserTransfer':
                case 'storeRelation':
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
                case 'name':
                case 'idCompany':
                case 'isActive':
                case 'status':
                case 'uuid':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'initialUserTransfer':
                case 'storeRelation':
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
            'name' => $this->name,
            'idCompany' => $this->idCompany,
            'isActive' => $this->isActive,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'key' => $this->key,
            'initialUserTransfer' => $this->initialUserTransfer,
            'storeRelation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_company' => $this->idCompany,
            'is_active' => $this->isActive,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'key' => $this->key,
            'initial_user_transfer' => $this->initialUserTransfer,
            'store_relation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_company' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, false) : $this->idCompany,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'initial_user_transfer' => $this->initialUserTransfer instanceof AbstractTransfer ? $this->initialUserTransfer->toArray(true, false) : $this->initialUserTransfer,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idCompany' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, true) : $this->idCompany,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'initialUserTransfer' => $this->initialUserTransfer instanceof AbstractTransfer ? $this->initialUserTransfer->toArray(true, true) : $this->initialUserTransfer,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
        ];
    }
}
