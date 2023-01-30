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
class MessageAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STORE_REFERENCE = 'storeReference';

    /**
     * @var string
     */
    public const EMITTER = 'emitter';

    /**
     * @deprecated Use emitter property instead.
     */
    public const PUBLISHER = 'publisher';

    /**
     * @var string
     */
    public const TRANSFER_NAME = 'transferName';

    /**
     * @var string
     */
    public const EVENT = 'event';

    /**
     * @var string
     */
    public const TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    public const CORRELATION_ID = 'correlationId';

    /**
     * @var string
     */
    public const TENANT_IDENTIFIER = 'tenantIdentifier';

    /**
     * @var string
     */
    public const AUTHORIZATION = 'authorization';

    /**
     * @var string|null
     */
    protected $storeReference;

    /**
     * @var string|null
     */
    protected $emitter;

    /**
     * @var \Generated\Shared\Transfer\PublisherTransfer|null
     */
    protected $publisher;

    /**
     * @var string|null
     */
    protected $transferName;

    /**
     * @var string|null
     */
    protected $event;

    /**
     * @var string|null
     */
    protected $timestamp;

    /**
     * @var string|null
     */
    protected $correlationId;

    /**
     * @var string|null
     */
    protected $tenantIdentifier;

    /**
     * @var string|null
     */
    protected $authorization;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'store_reference' => 'storeReference',
        'storeReference' => 'storeReference',
        'StoreReference' => 'storeReference',
        'emitter' => 'emitter',
        'Emitter' => 'emitter',
        'publisher' => 'publisher',
        'Publisher' => 'publisher',
        'transfer_name' => 'transferName',
        'transferName' => 'transferName',
        'TransferName' => 'transferName',
        'event' => 'event',
        'Event' => 'event',
        'timestamp' => 'timestamp',
        'Timestamp' => 'timestamp',
        'correlation_id' => 'correlationId',
        'correlationId' => 'correlationId',
        'CorrelationId' => 'correlationId',
        'tenant_identifier' => 'tenantIdentifier',
        'tenantIdentifier' => 'tenantIdentifier',
        'TenantIdentifier' => 'tenantIdentifier',
        'authorization' => 'authorization',
        'Authorization' => 'authorization',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STORE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMITTER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'emitter',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PUBLISHER => [
            'type' => 'Generated\Shared\Transfer\PublisherTransfer',
            'type_shim' => null,
            'name_underscore' => 'publisher',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSFER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'transfer_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EVENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'event',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMESTAMP => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'timestamp',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CORRELATION_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'correlation_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TENANT_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'tenant_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AUTHORIZATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'authorization',
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
     * @module Asset|MessageBroker|Payment|StoreReference
     *
     * @param string|null $storeReference
     *
     * @return $this
     */
    public function setStoreReference($storeReference)
    {
        $this->storeReference = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Asset|MessageBroker|Payment|StoreReference
     *
     * @return string|null
     */
    public function getStoreReference()
    {
        return $this->storeReference;
    }

    /**
     * @module Asset|MessageBroker|Payment|StoreReference
     *
     * @param string|null $storeReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreReferenceOrFail($storeReference)
    {
        if ($storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->setStoreReference($storeReference);
    }

    /**
     * @module Asset|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreReferenceOrFail()
    {
        if ($this->storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->storeReference;
    }

    /**
     * @module Asset|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreReference()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCE);

        return $this;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|StoreReference
     *
     * @param string|null $emitter
     *
     * @return $this
     */
    public function setEmitter($emitter)
    {
        $this->emitter = $emitter;
        $this->modifiedProperties[self::EMITTER] = true;

        return $this;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|StoreReference
     *
     * @return string|null
     */
    public function getEmitter()
    {
        return $this->emitter;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|StoreReference
     *
     * @param string|null $emitter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmitterOrFail($emitter)
    {
        if ($emitter === null) {
            $this->throwNullValueException(static::EMITTER);
        }

        return $this->setEmitter($emitter);
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmitterOrFail()
    {
        if ($this->emitter === null) {
            $this->throwNullValueException(static::EMITTER);
        }

        return $this->emitter;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmitter()
    {
        $this->assertPropertyIsSet(self::EMITTER);

        return $this;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|Payment|StoreReference
     *
     * @deprecated Use emitter property instead.
     *
     * @param \Generated\Shared\Transfer\PublisherTransfer|null $publisher
     *
     * @return $this
     */
    public function setPublisher(PublisherTransfer $publisher = null)
    {
        $this->publisher = $publisher;
        $this->modifiedProperties[self::PUBLISHER] = true;

        return $this;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|Payment|StoreReference
     *
     * @deprecated Use emitter property instead.
     *
     * @return \Generated\Shared\Transfer\PublisherTransfer|null
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|Payment|StoreReference
     *
     * @deprecated Use emitter property instead.
     *
     * @param \Generated\Shared\Transfer\PublisherTransfer $publisher
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPublisherOrFail(PublisherTransfer $publisher)
    {
        return $this->setPublisher($publisher);
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use emitter property instead.
     *
     * @return \Generated\Shared\Transfer\PublisherTransfer
     */
    public function getPublisherOrFail()
    {
        if ($this->publisher === null) {
            $this->throwNullValueException(static::PUBLISHER);
        }

        return $this->publisher;
    }

    /**
     * @module Asset|MessageBrokerAws|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use emitter property instead.
     *
     * @return $this
     */
    public function requirePublisher()
    {
        $this->assertPropertyIsSet(self::PUBLISHER);

        return $this;
    }

    /**
     * @module MessageBrokerAws|MessageBroker
     *
     * @param string|null $transferName
     *
     * @return $this
     */
    public function setTransferName($transferName)
    {
        $this->transferName = $transferName;
        $this->modifiedProperties[self::TRANSFER_NAME] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws|MessageBroker
     *
     * @return string|null
     */
    public function getTransferName()
    {
        return $this->transferName;
    }

    /**
     * @module MessageBrokerAws|MessageBroker
     *
     * @param string|null $transferName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTransferNameOrFail($transferName)
    {
        if ($transferName === null) {
            $this->throwNullValueException(static::TRANSFER_NAME);
        }

        return $this->setTransferName($transferName);
    }

    /**
     * @module MessageBrokerAws|MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTransferNameOrFail()
    {
        if ($this->transferName === null) {
            $this->throwNullValueException(static::TRANSFER_NAME);
        }

        return $this->transferName;
    }

    /**
     * @module MessageBrokerAws|MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTransferName()
    {
        $this->assertPropertyIsSet(self::TRANSFER_NAME);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        $this->modifiedProperties[self::EVENT] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return string|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $event
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEventOrFail($event)
    {
        if ($event === null) {
            $this->throwNullValueException(static::EVENT);
        }

        return $this->setEvent($event);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEventOrFail()
    {
        if ($this->event === null) {
            $this->throwNullValueException(static::EVENT);
        }

        return $this->event;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEvent()
    {
        $this->assertPropertyIsSet(self::EVENT);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->modifiedProperties[self::TIMESTAMP] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $timestamp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimestampOrFail($timestamp)
    {
        if ($timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->setTimestamp($timestamp);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimestampOrFail()
    {
        if ($this->timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->timestamp;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimestamp()
    {
        $this->assertPropertyIsSet(self::TIMESTAMP);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $correlationId
     *
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->correlationId = $correlationId;
        $this->modifiedProperties[self::CORRELATION_ID] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return string|null
     */
    public function getCorrelationId()
    {
        return $this->correlationId;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $correlationId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCorrelationIdOrFail($correlationId)
    {
        if ($correlationId === null) {
            $this->throwNullValueException(static::CORRELATION_ID);
        }

        return $this->setCorrelationId($correlationId);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCorrelationIdOrFail()
    {
        if ($this->correlationId === null) {
            $this->throwNullValueException(static::CORRELATION_ID);
        }

        return $this->correlationId;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCorrelationId()
    {
        $this->assertPropertyIsSet(self::CORRELATION_ID);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $tenantIdentifier
     *
     * @return $this
     */
    public function setTenantIdentifier($tenantIdentifier)
    {
        $this->tenantIdentifier = $tenantIdentifier;
        $this->modifiedProperties[self::TENANT_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return string|null
     */
    public function getTenantIdentifier()
    {
        return $this->tenantIdentifier;
    }

    /**
     * @module MessageBroker
     *
     * @param string|null $tenantIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTenantIdentifierOrFail($tenantIdentifier)
    {
        if ($tenantIdentifier === null) {
            $this->throwNullValueException(static::TENANT_IDENTIFIER);
        }

        return $this->setTenantIdentifier($tenantIdentifier);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTenantIdentifierOrFail()
    {
        if ($this->tenantIdentifier === null) {
            $this->throwNullValueException(static::TENANT_IDENTIFIER);
        }

        return $this->tenantIdentifier;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTenantIdentifier()
    {
        $this->assertPropertyIsSet(self::TENANT_IDENTIFIER);

        return $this;
    }

    /**
     * @module OauthClient
     *
     * @param string|null $authorization
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
        $this->modifiedProperties[self::AUTHORIZATION] = true;

        return $this;
    }

    /**
     * @module OauthClient
     *
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @module OauthClient
     *
     * @param string|null $authorization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAuthorizationOrFail($authorization)
    {
        if ($authorization === null) {
            $this->throwNullValueException(static::AUTHORIZATION);
        }

        return $this->setAuthorization($authorization);
    }

    /**
     * @module OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAuthorizationOrFail()
    {
        if ($this->authorization === null) {
            $this->throwNullValueException(static::AUTHORIZATION);
        }

        return $this->authorization;
    }

    /**
     * @module OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAuthorization()
    {
        $this->assertPropertyIsSet(self::AUTHORIZATION);

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
                case 'storeReference':
                case 'emitter':
                case 'transferName':
                case 'event':
                case 'timestamp':
                case 'correlationId':
                case 'tenantIdentifier':
                case 'authorization':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'publisher':
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
                case 'storeReference':
                case 'emitter':
                case 'transferName':
                case 'event':
                case 'timestamp':
                case 'correlationId':
                case 'tenantIdentifier':
                case 'authorization':
                    $values[$arrayKey] = $value;

                    break;
                case 'publisher':
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
                case 'storeReference':
                case 'emitter':
                case 'transferName':
                case 'event':
                case 'timestamp':
                case 'correlationId':
                case 'tenantIdentifier':
                case 'authorization':
                    $values[$arrayKey] = $value;

                    break;
                case 'publisher':
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
            'storeReference' => $this->storeReference,
            'emitter' => $this->emitter,
            'transferName' => $this->transferName,
            'event' => $this->event,
            'timestamp' => $this->timestamp,
            'correlationId' => $this->correlationId,
            'tenantIdentifier' => $this->tenantIdentifier,
            'authorization' => $this->authorization,
            'publisher' => $this->publisher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'store_reference' => $this->storeReference,
            'emitter' => $this->emitter,
            'transfer_name' => $this->transferName,
            'event' => $this->event,
            'timestamp' => $this->timestamp,
            'correlation_id' => $this->correlationId,
            'tenant_identifier' => $this->tenantIdentifier,
            'authorization' => $this->authorization,
            'publisher' => $this->publisher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'store_reference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, false) : $this->storeReference,
            'emitter' => $this->emitter instanceof AbstractTransfer ? $this->emitter->toArray(true, false) : $this->emitter,
            'transfer_name' => $this->transferName instanceof AbstractTransfer ? $this->transferName->toArray(true, false) : $this->transferName,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, false) : $this->event,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, false) : $this->timestamp,
            'correlation_id' => $this->correlationId instanceof AbstractTransfer ? $this->correlationId->toArray(true, false) : $this->correlationId,
            'tenant_identifier' => $this->tenantIdentifier instanceof AbstractTransfer ? $this->tenantIdentifier->toArray(true, false) : $this->tenantIdentifier,
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, false) : $this->authorization,
            'publisher' => $this->publisher instanceof AbstractTransfer ? $this->publisher->toArray(true, false) : $this->publisher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'storeReference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, true) : $this->storeReference,
            'emitter' => $this->emitter instanceof AbstractTransfer ? $this->emitter->toArray(true, true) : $this->emitter,
            'transferName' => $this->transferName instanceof AbstractTransfer ? $this->transferName->toArray(true, true) : $this->transferName,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, true) : $this->event,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, true) : $this->timestamp,
            'correlationId' => $this->correlationId instanceof AbstractTransfer ? $this->correlationId->toArray(true, true) : $this->correlationId,
            'tenantIdentifier' => $this->tenantIdentifier instanceof AbstractTransfer ? $this->tenantIdentifier->toArray(true, true) : $this->tenantIdentifier,
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, true) : $this->authorization,
            'publisher' => $this->publisher instanceof AbstractTransfer ? $this->publisher->toArray(true, true) : $this->publisher,
        ];
    }
}
