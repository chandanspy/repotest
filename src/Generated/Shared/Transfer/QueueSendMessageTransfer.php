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
class QueueSendMessageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BODY = 'body';

    /**
     * @var string
     */
    public const QUEUE_POOL_NAME = 'queuePoolName';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const ROUTING_KEY = 'routingKey';

    /**
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var string|null
     */
    protected $queuePoolName;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $routingKey;

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'body' => 'body',
        'Body' => 'body',
        'queue_pool_name' => 'queuePoolName',
        'queuePoolName' => 'queuePoolName',
        'QueuePoolName' => 'queuePoolName',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'locale' => 'locale',
        'Locale' => 'locale',
        'routing_key' => 'routingKey',
        'routingKey' => 'routingKey',
        'RoutingKey' => 'routingKey',
        'headers' => 'headers',
        'Headers' => 'headers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BODY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'body',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_POOL_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'queue_pool_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROUTING_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'routing_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEADERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'headers',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Loggly|DataImport|Event|Log|Queue|RabbitMq|Synchronization
     *
     * @param string|null $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        $this->modifiedProperties[self::BODY] = true;

        return $this;
    }

    /**
     * @module Loggly|DataImport|Event|Log|Queue|RabbitMq|Synchronization
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @module Loggly|DataImport|Event|Log|Queue|RabbitMq|Synchronization
     *
     * @param string|null $body
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBodyOrFail($body)
    {
        if ($body === null) {
            $this->throwNullValueException(static::BODY);
        }

        return $this->setBody($body);
    }

    /**
     * @module Loggly|DataImport|Event|Log|Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBodyOrFail()
    {
        if ($this->body === null) {
            $this->throwNullValueException(static::BODY);
        }

        return $this->body;
    }

    /**
     * @module Loggly|DataImport|Event|Log|Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBody()
    {
        $this->assertPropertyIsSet(self::BODY);

        return $this;
    }

    /**
     * @module Event|Queue|RabbitMq|Synchronization
     *
     * @param string|null $queuePoolName
     *
     * @return $this
     */
    public function setQueuePoolName($queuePoolName)
    {
        $this->queuePoolName = $queuePoolName;
        $this->modifiedProperties[self::QUEUE_POOL_NAME] = true;

        return $this;
    }

    /**
     * @module Event|Queue|RabbitMq|Synchronization
     *
     * @return string|null
     */
    public function getQueuePoolName()
    {
        return $this->queuePoolName;
    }

    /**
     * @module Event|Queue|RabbitMq|Synchronization
     *
     * @param string|null $queuePoolName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueuePoolNameOrFail($queuePoolName)
    {
        if ($queuePoolName === null) {
            $this->throwNullValueException(static::QUEUE_POOL_NAME);
        }

        return $this->setQueuePoolName($queuePoolName);
    }

    /**
     * @module Event|Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueuePoolNameOrFail()
    {
        if ($this->queuePoolName === null) {
            $this->throwNullValueException(static::QUEUE_POOL_NAME);
        }

        return $this->queuePoolName;
    }

    /**
     * @module Event|Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueuePoolName()
    {
        $this->assertPropertyIsSet(self::QUEUE_POOL_NAME);

        return $this;
    }

    /**
     * @module Queue|RabbitMq|Synchronization
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module Queue|RabbitMq|Synchronization
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module Queue|RabbitMq|Synchronization
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module Queue|RabbitMq|Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module Queue|RabbitMq
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module Queue|RabbitMq
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module Queue|RabbitMq
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module Queue|RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module Queue|RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $routingKey
     *
     * @return $this
     */
    public function setRoutingKey($routingKey)
    {
        $this->routingKey = $routingKey;
        $this->modifiedProperties[self::ROUTING_KEY] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getRoutingKey()
    {
        return $this->routingKey;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $routingKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRoutingKeyOrFail($routingKey)
    {
        if ($routingKey === null) {
            $this->throwNullValueException(static::ROUTING_KEY);
        }

        return $this->setRoutingKey($routingKey);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRoutingKeyOrFail()
    {
        if ($this->routingKey === null) {
            $this->throwNullValueException(static::ROUTING_KEY);
        }

        return $this->routingKey;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoutingKey()
    {
        $this->assertPropertyIsSet(self::ROUTING_KEY);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        if ($headers === null) {
            $headers = [];
        }

        $this->headers = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @module RabbitMq
     *
     * @param string|int $headerKey
     * @param mixed $headerValue
     *
     * @return $this
     */
    public function addHeader($headerKey, $headerValue)
    {
        $this->headers[$headerKey] = $headerValue;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeaders()
    {
        $this->assertPropertyIsSet(self::HEADERS);

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
                case 'body':
                case 'queuePoolName':
                case 'storeName':
                case 'locale':
                case 'routingKey':
                case 'headers':
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
                case 'body':
                case 'queuePoolName':
                case 'storeName':
                case 'locale':
                case 'routingKey':
                case 'headers':
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
                case 'body':
                case 'queuePoolName':
                case 'storeName':
                case 'locale':
                case 'routingKey':
                case 'headers':
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
            'body' => $this->body,
            'queuePoolName' => $this->queuePoolName,
            'storeName' => $this->storeName,
            'locale' => $this->locale,
            'routingKey' => $this->routingKey,
            'headers' => $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'body' => $this->body,
            'queue_pool_name' => $this->queuePoolName,
            'store_name' => $this->storeName,
            'locale' => $this->locale,
            'routing_key' => $this->routingKey,
            'headers' => $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, false) : $this->body,
            'queue_pool_name' => $this->queuePoolName instanceof AbstractTransfer ? $this->queuePoolName->toArray(true, false) : $this->queuePoolName,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'routing_key' => $this->routingKey instanceof AbstractTransfer ? $this->routingKey->toArray(true, false) : $this->routingKey,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, false) : $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, true) : $this->body,
            'queuePoolName' => $this->queuePoolName instanceof AbstractTransfer ? $this->queuePoolName->toArray(true, true) : $this->queuePoolName,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'routingKey' => $this->routingKey instanceof AbstractTransfer ? $this->routingKey->toArray(true, true) : $this->routingKey,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, true) : $this->headers,
        ];
    }
}
