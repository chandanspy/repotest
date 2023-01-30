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
class MessageBrokerWorkerConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CHANNELS = 'channels';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const FAILURE_LIMIT = 'failureLimit';

    /**
     * @var string
     */
    public const MEMORY_LIMIT = 'memoryLimit';

    /**
     * @var string
     */
    public const TIME_LIMIT = 'timeLimit';

    /**
     * @var string
     */
    public const SLEEP = 'sleep';

    /**
     * @var array
     */
    protected $channels = [];

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $failureLimit;

    /**
     * @var int|null
     */
    protected $memoryLimit;

    /**
     * @var int|null
     */
    protected $timeLimit;

    /**
     * @var int|null
     */
    protected $sleep;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'channels' => 'channels',
        'Channels' => 'channels',
        'limit' => 'limit',
        'Limit' => 'limit',
        'failure_limit' => 'failureLimit',
        'failureLimit' => 'failureLimit',
        'FailureLimit' => 'failureLimit',
        'memory_limit' => 'memoryLimit',
        'memoryLimit' => 'memoryLimit',
        'MemoryLimit' => 'memoryLimit',
        'time_limit' => 'timeLimit',
        'timeLimit' => 'timeLimit',
        'TimeLimit' => 'timeLimit',
        'sleep' => 'sleep',
        'Sleep' => 'sleep',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CHANNELS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'channels',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FAILURE_LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'failure_limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MEMORY_LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'memory_limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIME_LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'time_limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SLEEP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sleep',
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
     * @module MessageBroker
     *
     * @param array|null $channels
     *
     * @return $this
     */
    public function setChannels(array $channels = null)
    {
        if ($channels === null) {
            $channels = [];
        }

        $this->channels = $channels;
        $this->modifiedProperties[self::CHANNELS] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return array
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @module MessageBroker
     *
     * @param mixed $channel
     *
     * @return $this
     */
    public function addChannel($channel)
    {
        $this->channels[] = $channel;
        $this->modifiedProperties[self::CHANNELS] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChannels()
    {
        $this->assertPropertyIsSet(self::CHANNELS);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $failureLimit
     *
     * @return $this
     */
    public function setFailureLimit($failureLimit)
    {
        $this->failureLimit = $failureLimit;
        $this->modifiedProperties[self::FAILURE_LIMIT] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return int|null
     */
    public function getFailureLimit()
    {
        return $this->failureLimit;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $failureLimit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFailureLimitOrFail($failureLimit)
    {
        if ($failureLimit === null) {
            $this->throwNullValueException(static::FAILURE_LIMIT);
        }

        return $this->setFailureLimit($failureLimit);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFailureLimitOrFail()
    {
        if ($this->failureLimit === null) {
            $this->throwNullValueException(static::FAILURE_LIMIT);
        }

        return $this->failureLimit;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFailureLimit()
    {
        $this->assertPropertyIsSet(self::FAILURE_LIMIT);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $memoryLimit
     *
     * @return $this
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->memoryLimit = $memoryLimit;
        $this->modifiedProperties[self::MEMORY_LIMIT] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return int|null
     */
    public function getMemoryLimit()
    {
        return $this->memoryLimit;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $memoryLimit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMemoryLimitOrFail($memoryLimit)
    {
        if ($memoryLimit === null) {
            $this->throwNullValueException(static::MEMORY_LIMIT);
        }

        return $this->setMemoryLimit($memoryLimit);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMemoryLimitOrFail()
    {
        if ($this->memoryLimit === null) {
            $this->throwNullValueException(static::MEMORY_LIMIT);
        }

        return $this->memoryLimit;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMemoryLimit()
    {
        $this->assertPropertyIsSet(self::MEMORY_LIMIT);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $timeLimit
     *
     * @return $this
     */
    public function setTimeLimit($timeLimit)
    {
        $this->timeLimit = $timeLimit;
        $this->modifiedProperties[self::TIME_LIMIT] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return int|null
     */
    public function getTimeLimit()
    {
        return $this->timeLimit;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $timeLimit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimeLimitOrFail($timeLimit)
    {
        if ($timeLimit === null) {
            $this->throwNullValueException(static::TIME_LIMIT);
        }

        return $this->setTimeLimit($timeLimit);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTimeLimitOrFail()
    {
        if ($this->timeLimit === null) {
            $this->throwNullValueException(static::TIME_LIMIT);
        }

        return $this->timeLimit;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimeLimit()
    {
        $this->assertPropertyIsSet(self::TIME_LIMIT);

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $sleep
     *
     * @return $this
     */
    public function setSleep($sleep)
    {
        $this->sleep = $sleep;
        $this->modifiedProperties[self::SLEEP] = true;

        return $this;
    }

    /**
     * @module MessageBroker
     *
     * @return int|null
     */
    public function getSleep()
    {
        return $this->sleep;
    }

    /**
     * @module MessageBroker
     *
     * @param int|null $sleep
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSleepOrFail($sleep)
    {
        if ($sleep === null) {
            $this->throwNullValueException(static::SLEEP);
        }

        return $this->setSleep($sleep);
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSleepOrFail()
    {
        if ($this->sleep === null) {
            $this->throwNullValueException(static::SLEEP);
        }

        return $this->sleep;
    }

    /**
     * @module MessageBroker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSleep()
    {
        $this->assertPropertyIsSet(self::SLEEP);

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
                case 'channels':
                case 'limit':
                case 'failureLimit':
                case 'memoryLimit':
                case 'timeLimit':
                case 'sleep':
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
                case 'channels':
                case 'limit':
                case 'failureLimit':
                case 'memoryLimit':
                case 'timeLimit':
                case 'sleep':
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
                case 'channels':
                case 'limit':
                case 'failureLimit':
                case 'memoryLimit':
                case 'timeLimit':
                case 'sleep':
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
            'channels' => $this->channels,
            'limit' => $this->limit,
            'failureLimit' => $this->failureLimit,
            'memoryLimit' => $this->memoryLimit,
            'timeLimit' => $this->timeLimit,
            'sleep' => $this->sleep,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'channels' => $this->channels,
            'limit' => $this->limit,
            'failure_limit' => $this->failureLimit,
            'memory_limit' => $this->memoryLimit,
            'time_limit' => $this->timeLimit,
            'sleep' => $this->sleep,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'channels' => $this->channels instanceof AbstractTransfer ? $this->channels->toArray(true, false) : $this->channels,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'failure_limit' => $this->failureLimit instanceof AbstractTransfer ? $this->failureLimit->toArray(true, false) : $this->failureLimit,
            'memory_limit' => $this->memoryLimit instanceof AbstractTransfer ? $this->memoryLimit->toArray(true, false) : $this->memoryLimit,
            'time_limit' => $this->timeLimit instanceof AbstractTransfer ? $this->timeLimit->toArray(true, false) : $this->timeLimit,
            'sleep' => $this->sleep instanceof AbstractTransfer ? $this->sleep->toArray(true, false) : $this->sleep,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'channels' => $this->channels instanceof AbstractTransfer ? $this->channels->toArray(true, true) : $this->channels,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'failureLimit' => $this->failureLimit instanceof AbstractTransfer ? $this->failureLimit->toArray(true, true) : $this->failureLimit,
            'memoryLimit' => $this->memoryLimit instanceof AbstractTransfer ? $this->memoryLimit->toArray(true, true) : $this->memoryLimit,
            'timeLimit' => $this->timeLimit instanceof AbstractTransfer ? $this->timeLimit->toArray(true, true) : $this->timeLimit,
            'sleep' => $this->sleep instanceof AbstractTransfer ? $this->sleep->toArray(true, true) : $this->sleep,
        ];
    }
}
