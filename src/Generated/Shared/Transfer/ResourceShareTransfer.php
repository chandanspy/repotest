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
class ResourceShareTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var string
     */
    public const RESOURCE_SHARE_DATA = 'resourceShareData';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const ID_RESOURCE_SHARE = 'idResourceShare';

    /**
     * @var string
     */
    public const EXPIRY_DATE = 'expiryDate';

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var \Generated\Shared\Transfer\ResourceShareDataTransfer|null
     */
    protected $resourceShareData;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var int|null
     */
    protected $idResourceShare;

    /**
     * @var string|null
     */
    protected $expiryDate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'resource_share_data' => 'resourceShareData',
        'resourceShareData' => 'resourceShareData',
        'ResourceShareData' => 'resourceShareData',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'id_resource_share' => 'idResourceShare',
        'idResourceShare' => 'idResourceShare',
        'IdResourceShare' => 'idResourceShare',
        'expiry_date' => 'expiryDate',
        'expiryDate' => 'expiryDate',
        'ExpiryDate' => 'expiryDate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::RESOURCE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE_SHARE_DATA => [
            'type' => 'Generated\Shared\Transfer\ResourceShareDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'resource_share_data',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_RESOURCE_SHARE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_resource_share',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPIRY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expiry_date',
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|ResourceSharePage|ResourceShare
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|ResourceSharePage|ResourceShare
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|ResourceSharePage|ResourceShare
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|ResourceSharePage|ResourceShare
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|ResourceSharePage|ResourceShare
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param string|null $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
        $this->modifiedProperties[self::RESOURCE_TYPE] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param string|null $resourceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceTypeOrFail($resourceType)
    {
        if ($resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->setResourceType($resourceType);
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceTypeOrFail()
    {
        if ($this->resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->resourceType;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceType()
    {
        $this->assertPropertyIsSet(self::RESOURCE_TYPE);

        return $this;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \Generated\Shared\Transfer\ResourceShareDataTransfer|null $resourceShareData
     *
     * @return $this
     */
    public function setResourceShareData(ResourceShareDataTransfer $resourceShareData = null)
    {
        $this->resourceShareData = $resourceShareData;
        $this->modifiedProperties[self::RESOURCE_SHARE_DATA] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return \Generated\Shared\Transfer\ResourceShareDataTransfer|null
     */
    public function getResourceShareData()
    {
        return $this->resourceShareData;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \Generated\Shared\Transfer\ResourceShareDataTransfer $resourceShareData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceShareDataOrFail(ResourceShareDataTransfer $resourceShareData)
    {
        return $this->setResourceShareData($resourceShareData);
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ResourceShareDataTransfer
     */
    public function getResourceShareDataOrFail()
    {
        if ($this->resourceShareData === null) {
            $this->throwNullValueException(static::RESOURCE_SHARE_DATA);
        }

        return $this->resourceShareData;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceShareData()
    {
        $this->assertPropertyIsSet(self::RESOURCE_SHARE_DATA);

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|ResourceShare
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|ResourceShare
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|ResourceShare
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module ResourceShare
     *
     * @param int|null $idResourceShare
     *
     * @return $this
     */
    public function setIdResourceShare($idResourceShare)
    {
        $this->idResourceShare = $idResourceShare;
        $this->modifiedProperties[self::ID_RESOURCE_SHARE] = true;

        return $this;
    }

    /**
     * @module ResourceShare
     *
     * @return int|null
     */
    public function getIdResourceShare()
    {
        return $this->idResourceShare;
    }

    /**
     * @module ResourceShare
     *
     * @param int|null $idResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdResourceShareOrFail($idResourceShare)
    {
        if ($idResourceShare === null) {
            $this->throwNullValueException(static::ID_RESOURCE_SHARE);
        }

        return $this->setIdResourceShare($idResourceShare);
    }

    /**
     * @module ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdResourceShareOrFail()
    {
        if ($this->idResourceShare === null) {
            $this->throwNullValueException(static::ID_RESOURCE_SHARE);
        }

        return $this->idResourceShare;
    }

    /**
     * @module ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdResourceShare()
    {
        $this->assertPropertyIsSet(self::ID_RESOURCE_SHARE);

        return $this;
    }

    /**
     * @module ResourceShare
     *
     * @param string|null $expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        $this->modifiedProperties[self::EXPIRY_DATE] = true;

        return $this;
    }

    /**
     * @module ResourceShare
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @module ResourceShare
     *
     * @param string|null $expiryDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiryDateOrFail($expiryDate)
    {
        if ($expiryDate === null) {
            $this->throwNullValueException(static::EXPIRY_DATE);
        }

        return $this->setExpiryDate($expiryDate);
    }

    /**
     * @module ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiryDateOrFail()
    {
        if ($this->expiryDate === null) {
            $this->throwNullValueException(static::EXPIRY_DATE);
        }

        return $this->expiryDate;
    }

    /**
     * @module ResourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpiryDate()
    {
        $this->assertPropertyIsSet(self::EXPIRY_DATE);

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
                case 'uuid':
                case 'resourceType':
                case 'customerReference':
                case 'idResourceShare':
                case 'expiryDate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'resourceShareData':
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
                case 'uuid':
                case 'resourceType':
                case 'customerReference':
                case 'idResourceShare':
                case 'expiryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceShareData':
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
                case 'uuid':
                case 'resourceType':
                case 'customerReference':
                case 'idResourceShare':
                case 'expiryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceShareData':
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
            'uuid' => $this->uuid,
            'resourceType' => $this->resourceType,
            'customerReference' => $this->customerReference,
            'idResourceShare' => $this->idResourceShare,
            'expiryDate' => $this->expiryDate,
            'resourceShareData' => $this->resourceShareData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid,
            'resource_type' => $this->resourceType,
            'customer_reference' => $this->customerReference,
            'id_resource_share' => $this->idResourceShare,
            'expiry_date' => $this->expiryDate,
            'resource_share_data' => $this->resourceShareData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'id_resource_share' => $this->idResourceShare instanceof AbstractTransfer ? $this->idResourceShare->toArray(true, false) : $this->idResourceShare,
            'expiry_date' => $this->expiryDate instanceof AbstractTransfer ? $this->expiryDate->toArray(true, false) : $this->expiryDate,
            'resource_share_data' => $this->resourceShareData instanceof AbstractTransfer ? $this->resourceShareData->toArray(true, false) : $this->resourceShareData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'idResourceShare' => $this->idResourceShare instanceof AbstractTransfer ? $this->idResourceShare->toArray(true, true) : $this->idResourceShare,
            'expiryDate' => $this->expiryDate instanceof AbstractTransfer ? $this->expiryDate->toArray(true, true) : $this->expiryDate,
            'resourceShareData' => $this->resourceShareData instanceof AbstractTransfer ? $this->resourceShareData->toArray(true, true) : $this->resourceShareData,
        ];
    }
}
