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
class RabbitMqConsumerOptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUEUE_NAME = 'queueName';

    /**
     * @var string
     */
    public const CONSUMER_TAG = 'consumerTag';

    /**
     * @var string
     */
    public const NO_LOCAL = 'noLocal';

    /**
     * @var string
     */
    public const NO_ACK = 'noAck';

    /**
     * @var string
     */
    public const CONSUMER_EXCLUSIVE = 'consumerExclusive';

    /**
     * @var string
     */
    public const NO_WAIT = 'noWait';

    /**
     * @var string
     */
    public const TIMEOUT = 'timeout';

    /**
     * @var string
     */
    public const REQUEUE_ON_REJECT = 'requeueOnReject';

    /**
     * @var string|null
     */
    protected $queueName;

    /**
     * @var bool|null
     */
    protected $consumerTag;

    /**
     * @var bool|null
     */
    protected $noLocal;

    /**
     * @var bool|null
     */
    protected $noAck;

    /**
     * @var bool|null
     */
    protected $consumerExclusive;

    /**
     * @var bool|null
     */
    protected $noWait;

    /**
     * @var int|null
     */
    protected $timeout;

    /**
     * @var bool|null
     */
    protected $requeueOnReject;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'queue_name' => 'queueName',
        'queueName' => 'queueName',
        'QueueName' => 'queueName',
        'consumer_tag' => 'consumerTag',
        'consumerTag' => 'consumerTag',
        'ConsumerTag' => 'consumerTag',
        'no_local' => 'noLocal',
        'noLocal' => 'noLocal',
        'NoLocal' => 'noLocal',
        'no_ack' => 'noAck',
        'noAck' => 'noAck',
        'NoAck' => 'noAck',
        'consumer_exclusive' => 'consumerExclusive',
        'consumerExclusive' => 'consumerExclusive',
        'ConsumerExclusive' => 'consumerExclusive',
        'no_wait' => 'noWait',
        'noWait' => 'noWait',
        'NoWait' => 'noWait',
        'timeout' => 'timeout',
        'Timeout' => 'timeout',
        'requeue_on_reject' => 'requeueOnReject',
        'requeueOnReject' => 'requeueOnReject',
        'RequeueOnReject' => 'requeueOnReject',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUEUE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'queue_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONSUMER_TAG => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'consumer_tag',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NO_LOCAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'no_local',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NO_ACK => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'no_ack',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONSUMER_EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'consumer_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NO_WAIT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'no_wait',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMEOUT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEUE_ON_REJECT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'requeue_on_reject',
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
     * @module RabbitMq
     *
     * @param string|null $queueName
     *
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;
        $this->modifiedProperties[self::QUEUE_NAME] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $queueName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueueNameOrFail($queueName)
    {
        if ($queueName === null) {
            $this->throwNullValueException(static::QUEUE_NAME);
        }

        return $this->setQueueName($queueName);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueueNameOrFail()
    {
        if ($this->queueName === null) {
            $this->throwNullValueException(static::QUEUE_NAME);
        }

        return $this->queueName;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueName()
    {
        $this->assertPropertyIsSet(self::QUEUE_NAME);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $consumerTag
     *
     * @return $this
     */
    public function setConsumerTag($consumerTag)
    {
        $this->consumerTag = $consumerTag;
        $this->modifiedProperties[self::CONSUMER_TAG] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getConsumerTag()
    {
        return $this->consumerTag;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $consumerTag
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConsumerTagOrFail($consumerTag)
    {
        if ($consumerTag === null) {
            $this->throwNullValueException(static::CONSUMER_TAG);
        }

        return $this->setConsumerTag($consumerTag);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getConsumerTagOrFail()
    {
        if ($this->consumerTag === null) {
            $this->throwNullValueException(static::CONSUMER_TAG);
        }

        return $this->consumerTag;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConsumerTag()
    {
        $this->assertPropertyIsSet(self::CONSUMER_TAG);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noLocal
     *
     * @return $this
     */
    public function setNoLocal($noLocal)
    {
        $this->noLocal = $noLocal;
        $this->modifiedProperties[self::NO_LOCAL] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getNoLocal()
    {
        return $this->noLocal;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noLocal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoLocalOrFail($noLocal)
    {
        if ($noLocal === null) {
            $this->throwNullValueException(static::NO_LOCAL);
        }

        return $this->setNoLocal($noLocal);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getNoLocalOrFail()
    {
        if ($this->noLocal === null) {
            $this->throwNullValueException(static::NO_LOCAL);
        }

        return $this->noLocal;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNoLocal()
    {
        $this->assertPropertyIsSet(self::NO_LOCAL);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noAck
     *
     * @return $this
     */
    public function setNoAck($noAck)
    {
        $this->noAck = $noAck;
        $this->modifiedProperties[self::NO_ACK] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getNoAck()
    {
        return $this->noAck;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noAck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoAckOrFail($noAck)
    {
        if ($noAck === null) {
            $this->throwNullValueException(static::NO_ACK);
        }

        return $this->setNoAck($noAck);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getNoAckOrFail()
    {
        if ($this->noAck === null) {
            $this->throwNullValueException(static::NO_ACK);
        }

        return $this->noAck;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNoAck()
    {
        $this->assertPropertyIsSet(self::NO_ACK);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $consumerExclusive
     *
     * @return $this
     */
    public function setConsumerExclusive($consumerExclusive)
    {
        $this->consumerExclusive = $consumerExclusive;
        $this->modifiedProperties[self::CONSUMER_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getConsumerExclusive()
    {
        return $this->consumerExclusive;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $consumerExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConsumerExclusiveOrFail($consumerExclusive)
    {
        if ($consumerExclusive === null) {
            $this->throwNullValueException(static::CONSUMER_EXCLUSIVE);
        }

        return $this->setConsumerExclusive($consumerExclusive);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getConsumerExclusiveOrFail()
    {
        if ($this->consumerExclusive === null) {
            $this->throwNullValueException(static::CONSUMER_EXCLUSIVE);
        }

        return $this->consumerExclusive;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConsumerExclusive()
    {
        $this->assertPropertyIsSet(self::CONSUMER_EXCLUSIVE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noWait
     *
     * @return $this
     */
    public function setNoWait($noWait)
    {
        $this->noWait = $noWait;
        $this->modifiedProperties[self::NO_WAIT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getNoWait()
    {
        return $this->noWait;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $noWait
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoWaitOrFail($noWait)
    {
        if ($noWait === null) {
            $this->throwNullValueException(static::NO_WAIT);
        }

        return $this->setNoWait($noWait);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getNoWaitOrFail()
    {
        if ($this->noWait === null) {
            $this->throwNullValueException(static::NO_WAIT);
        }

        return $this->noWait;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNoWait()
    {
        $this->assertPropertyIsSet(self::NO_WAIT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        $this->modifiedProperties[self::TIMEOUT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $timeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimeoutOrFail($timeout)
    {
        if ($timeout === null) {
            $this->throwNullValueException(static::TIMEOUT);
        }

        return $this->setTimeout($timeout);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTimeoutOrFail()
    {
        if ($this->timeout === null) {
            $this->throwNullValueException(static::TIMEOUT);
        }

        return $this->timeout;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimeout()
    {
        $this->assertPropertyIsSet(self::TIMEOUT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $requeueOnReject
     *
     * @return $this
     */
    public function setRequeueOnReject($requeueOnReject)
    {
        $this->requeueOnReject = $requeueOnReject;
        $this->modifiedProperties[self::REQUEUE_ON_REJECT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getRequeueOnReject()
    {
        return $this->requeueOnReject;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $requeueOnReject
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequeueOnRejectOrFail($requeueOnReject)
    {
        if ($requeueOnReject === null) {
            $this->throwNullValueException(static::REQUEUE_ON_REJECT);
        }

        return $this->setRequeueOnReject($requeueOnReject);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getRequeueOnRejectOrFail()
    {
        if ($this->requeueOnReject === null) {
            $this->throwNullValueException(static::REQUEUE_ON_REJECT);
        }

        return $this->requeueOnReject;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequeueOnReject()
    {
        $this->assertPropertyIsSet(self::REQUEUE_ON_REJECT);

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
                case 'queueName':
                case 'consumerTag':
                case 'noLocal':
                case 'noAck':
                case 'consumerExclusive':
                case 'noWait':
                case 'timeout':
                case 'requeueOnReject':
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
                case 'queueName':
                case 'consumerTag':
                case 'noLocal':
                case 'noAck':
                case 'consumerExclusive':
                case 'noWait':
                case 'timeout':
                case 'requeueOnReject':
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
                case 'queueName':
                case 'consumerTag':
                case 'noLocal':
                case 'noAck':
                case 'consumerExclusive':
                case 'noWait':
                case 'timeout':
                case 'requeueOnReject':
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
            'queueName' => $this->queueName,
            'consumerTag' => $this->consumerTag,
            'noLocal' => $this->noLocal,
            'noAck' => $this->noAck,
            'consumerExclusive' => $this->consumerExclusive,
            'noWait' => $this->noWait,
            'timeout' => $this->timeout,
            'requeueOnReject' => $this->requeueOnReject,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'queue_name' => $this->queueName,
            'consumer_tag' => $this->consumerTag,
            'no_local' => $this->noLocal,
            'no_ack' => $this->noAck,
            'consumer_exclusive' => $this->consumerExclusive,
            'no_wait' => $this->noWait,
            'timeout' => $this->timeout,
            'requeue_on_reject' => $this->requeueOnReject,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'queue_name' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, false) : $this->queueName,
            'consumer_tag' => $this->consumerTag instanceof AbstractTransfer ? $this->consumerTag->toArray(true, false) : $this->consumerTag,
            'no_local' => $this->noLocal instanceof AbstractTransfer ? $this->noLocal->toArray(true, false) : $this->noLocal,
            'no_ack' => $this->noAck instanceof AbstractTransfer ? $this->noAck->toArray(true, false) : $this->noAck,
            'consumer_exclusive' => $this->consumerExclusive instanceof AbstractTransfer ? $this->consumerExclusive->toArray(true, false) : $this->consumerExclusive,
            'no_wait' => $this->noWait instanceof AbstractTransfer ? $this->noWait->toArray(true, false) : $this->noWait,
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, false) : $this->timeout,
            'requeue_on_reject' => $this->requeueOnReject instanceof AbstractTransfer ? $this->requeueOnReject->toArray(true, false) : $this->requeueOnReject,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'queueName' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, true) : $this->queueName,
            'consumerTag' => $this->consumerTag instanceof AbstractTransfer ? $this->consumerTag->toArray(true, true) : $this->consumerTag,
            'noLocal' => $this->noLocal instanceof AbstractTransfer ? $this->noLocal->toArray(true, true) : $this->noLocal,
            'noAck' => $this->noAck instanceof AbstractTransfer ? $this->noAck->toArray(true, true) : $this->noAck,
            'consumerExclusive' => $this->consumerExclusive instanceof AbstractTransfer ? $this->consumerExclusive->toArray(true, true) : $this->consumerExclusive,
            'noWait' => $this->noWait instanceof AbstractTransfer ? $this->noWait->toArray(true, true) : $this->noWait,
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, true) : $this->timeout,
            'requeueOnReject' => $this->requeueOnReject instanceof AbstractTransfer ? $this->requeueOnReject->toArray(true, true) : $this->requeueOnReject,
        ];
    }
}
