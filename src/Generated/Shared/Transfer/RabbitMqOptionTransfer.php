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
class RabbitMqOptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUEUE_NAME = 'queueName';

    /**
     * @var string
     */
    public const BINDING_QUEUE_COLLECTION = 'bindingQueueCollection';

    /**
     * @var string
     */
    public const CHUNK_SIZE = 'chunkSize';

    /**
     * @var string
     */
    public const PASSIVE = 'passive';

    /**
     * @var string
     */
    public const DURABLE = 'durable';

    /**
     * @var string
     */
    public const AUTO_DELETE = 'autoDelete';

    /**
     * @var string
     */
    public const EXCLUSIVE = 'exclusive';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const NO_WAIT = 'noWait';

    /**
     * @var string
     */
    public const ARGUMENTS = 'arguments';

    /**
     * @var string
     */
    public const ROUTING_KEYS = 'routingKeys';

    /**
     * @var string
     */
    public const DECLARATION_TYPE = 'declarationType';

    /**
     * @var string|null
     */
    protected $queueName;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[]
     */
    protected $bindingQueueCollection;

    /**
     * @var int|null
     */
    protected $chunkSize;

    /**
     * @var bool|null
     */
    protected $passive;

    /**
     * @var bool|null
     */
    protected $durable;

    /**
     * @var bool|null
     */
    protected $autoDelete;

    /**
     * @var bool|null
     */
    protected $exclusive;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $noWait;

    /**
     * @var array
     */
    protected $arguments = [];

    /**
     * @var string[]
     */
    protected $routingKeys = [];

    /**
     * @var string|null
     */
    protected $declarationType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'queue_name' => 'queueName',
        'queueName' => 'queueName',
        'QueueName' => 'queueName',
        'binding_queue_collection' => 'bindingQueueCollection',
        'bindingQueueCollection' => 'bindingQueueCollection',
        'BindingQueueCollection' => 'bindingQueueCollection',
        'chunk_size' => 'chunkSize',
        'chunkSize' => 'chunkSize',
        'ChunkSize' => 'chunkSize',
        'passive' => 'passive',
        'Passive' => 'passive',
        'durable' => 'durable',
        'Durable' => 'durable',
        'auto_delete' => 'autoDelete',
        'autoDelete' => 'autoDelete',
        'AutoDelete' => 'autoDelete',
        'exclusive' => 'exclusive',
        'Exclusive' => 'exclusive',
        'type' => 'type',
        'Type' => 'type',
        'no_wait' => 'noWait',
        'noWait' => 'noWait',
        'NoWait' => 'noWait',
        'arguments' => 'arguments',
        'Arguments' => 'arguments',
        'routing_keys' => 'routingKeys',
        'routingKeys' => 'routingKeys',
        'RoutingKeys' => 'routingKeys',
        'declaration_type' => 'declarationType',
        'declarationType' => 'declarationType',
        'DeclarationType' => 'declarationType',
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
        self::BINDING_QUEUE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\RabbitMqOptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'binding_queue_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHUNK_SIZE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'chunk_size',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'passive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DURABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'durable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AUTO_DELETE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'auto_delete',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
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
        self::ARGUMENTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'arguments',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROUTING_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'routing_keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DECLARATION_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'declaration_type',
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
     * @module Event|RabbitMq
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
     * @module Event|RabbitMq
     *
     * @return string|null
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @module Event|RabbitMq
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
     * @module Event|RabbitMq
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
     * @module Event|RabbitMq
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
     * @module Event|RabbitMq
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[] $bindingQueueCollection
     *
     * @return $this
     */
    public function setBindingQueueCollection(ArrayObject $bindingQueueCollection)
    {
        $this->bindingQueueCollection = $bindingQueueCollection;
        $this->modifiedProperties[self::BINDING_QUEUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Event|RabbitMq
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[]
     */
    public function getBindingQueueCollection()
    {
        return $this->bindingQueueCollection;
    }

    /**
     * @module Event|RabbitMq
     *
     * @param \Generated\Shared\Transfer\RabbitMqOptionTransfer $bindingQueueItem
     *
     * @return $this
     */
    public function addBindingQueueItem(RabbitMqOptionTransfer $bindingQueueItem)
    {
        $this->bindingQueueCollection[] = $bindingQueueItem;
        $this->modifiedProperties[self::BINDING_QUEUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Event|RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBindingQueueCollection()
    {
        $this->assertCollectionPropertyIsSet(self::BINDING_QUEUE_COLLECTION);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $chunkSize
     *
     * @return $this
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;
        $this->modifiedProperties[self::CHUNK_SIZE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $chunkSize
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChunkSizeOrFail($chunkSize)
    {
        if ($chunkSize === null) {
            $this->throwNullValueException(static::CHUNK_SIZE);
        }

        return $this->setChunkSize($chunkSize);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getChunkSizeOrFail()
    {
        if ($this->chunkSize === null) {
            $this->throwNullValueException(static::CHUNK_SIZE);
        }

        return $this->chunkSize;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChunkSize()
    {
        $this->assertPropertyIsSet(self::CHUNK_SIZE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $passive
     *
     * @return $this
     */
    public function setPassive($passive)
    {
        $this->passive = $passive;
        $this->modifiedProperties[self::PASSIVE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getPassive()
    {
        return $this->passive;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $passive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPassiveOrFail($passive)
    {
        if ($passive === null) {
            $this->throwNullValueException(static::PASSIVE);
        }

        return $this->setPassive($passive);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getPassiveOrFail()
    {
        if ($this->passive === null) {
            $this->throwNullValueException(static::PASSIVE);
        }

        return $this->passive;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassive()
    {
        $this->assertPropertyIsSet(self::PASSIVE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $durable
     *
     * @return $this
     */
    public function setDurable($durable)
    {
        $this->durable = $durable;
        $this->modifiedProperties[self::DURABLE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getDurable()
    {
        return $this->durable;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $durable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDurableOrFail($durable)
    {
        if ($durable === null) {
            $this->throwNullValueException(static::DURABLE);
        }

        return $this->setDurable($durable);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getDurableOrFail()
    {
        if ($this->durable === null) {
            $this->throwNullValueException(static::DURABLE);
        }

        return $this->durable;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDurable()
    {
        $this->assertPropertyIsSet(self::DURABLE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $autoDelete
     *
     * @return $this
     */
    public function setAutoDelete($autoDelete)
    {
        $this->autoDelete = $autoDelete;
        $this->modifiedProperties[self::AUTO_DELETE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getAutoDelete()
    {
        return $this->autoDelete;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $autoDelete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAutoDeleteOrFail($autoDelete)
    {
        if ($autoDelete === null) {
            $this->throwNullValueException(static::AUTO_DELETE);
        }

        return $this->setAutoDelete($autoDelete);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAutoDeleteOrFail()
    {
        if ($this->autoDelete === null) {
            $this->throwNullValueException(static::AUTO_DELETE);
        }

        return $this->autoDelete;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAutoDelete()
    {
        $this->assertPropertyIsSet(self::AUTO_DELETE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $exclusive
     *
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->exclusive = $exclusive;
        $this->modifiedProperties[self::EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $exclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExclusiveOrFail($exclusive)
    {
        if ($exclusive === null) {
            $this->throwNullValueException(static::EXCLUSIVE);
        }

        return $this->setExclusive($exclusive);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getExclusiveOrFail()
    {
        if ($this->exclusive === null) {
            $this->throwNullValueException(static::EXCLUSIVE);
        }

        return $this->exclusive;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExclusive()
    {
        $this->assertPropertyIsSet(self::EXCLUSIVE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

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
     * @param array|null $arguments
     *
     * @return $this
     */
    public function setArguments(array $arguments = null)
    {
        if ($arguments === null) {
            $arguments = [];
        }

        $this->arguments = $arguments;
        $this->modifiedProperties[self::ARGUMENTS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @module RabbitMq
     *
     * @param mixed $arguments
     *
     * @return $this
     */
    public function addArguments($arguments)
    {
        $this->arguments[] = $arguments;
        $this->modifiedProperties[self::ARGUMENTS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireArguments()
    {
        $this->assertPropertyIsSet(self::ARGUMENTS);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string[]|null $routingKeys
     *
     * @return $this
     */
    public function setRoutingKeys(array $routingKeys = null)
    {
        if ($routingKeys === null) {
            $routingKeys = [];
        }

        $this->routingKeys = $routingKeys;
        $this->modifiedProperties[self::ROUTING_KEYS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string[]
     */
    public function getRoutingKeys()
    {
        return $this->routingKeys;
    }

    /**
     * @module RabbitMq
     *
     * @param string $routingKey
     *
     * @return $this
     */
    public function addRoutingKey($routingKey)
    {
        $this->routingKeys[] = $routingKey;
        $this->modifiedProperties[self::ROUTING_KEYS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoutingKeys()
    {
        $this->assertPropertyIsSet(self::ROUTING_KEYS);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $declarationType
     *
     * @return $this
     */
    public function setDeclarationType($declarationType)
    {
        $this->declarationType = $declarationType;
        $this->modifiedProperties[self::DECLARATION_TYPE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getDeclarationType()
    {
        return $this->declarationType;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $declarationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeclarationTypeOrFail($declarationType)
    {
        if ($declarationType === null) {
            $this->throwNullValueException(static::DECLARATION_TYPE);
        }

        return $this->setDeclarationType($declarationType);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDeclarationTypeOrFail()
    {
        if ($this->declarationType === null) {
            $this->throwNullValueException(static::DECLARATION_TYPE);
        }

        return $this->declarationType;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeclarationType()
    {
        $this->assertPropertyIsSet(self::DECLARATION_TYPE);

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
                case 'chunkSize':
                case 'passive':
                case 'durable':
                case 'autoDelete':
                case 'exclusive':
                case 'type':
                case 'noWait':
                case 'arguments':
                case 'routingKeys':
                case 'declarationType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'bindingQueueCollection':
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
                case 'queueName':
                case 'chunkSize':
                case 'passive':
                case 'durable':
                case 'autoDelete':
                case 'exclusive':
                case 'type':
                case 'noWait':
                case 'arguments':
                case 'routingKeys':
                case 'declarationType':
                    $values[$arrayKey] = $value;

                    break;
                case 'bindingQueueCollection':
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
                case 'queueName':
                case 'chunkSize':
                case 'passive':
                case 'durable':
                case 'autoDelete':
                case 'exclusive':
                case 'type':
                case 'noWait':
                case 'arguments':
                case 'routingKeys':
                case 'declarationType':
                    $values[$arrayKey] = $value;

                    break;
                case 'bindingQueueCollection':
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
        $this->bindingQueueCollection = $this->bindingQueueCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'queueName' => $this->queueName,
            'chunkSize' => $this->chunkSize,
            'passive' => $this->passive,
            'durable' => $this->durable,
            'autoDelete' => $this->autoDelete,
            'exclusive' => $this->exclusive,
            'type' => $this->type,
            'noWait' => $this->noWait,
            'arguments' => $this->arguments,
            'routingKeys' => $this->routingKeys,
            'declarationType' => $this->declarationType,
            'bindingQueueCollection' => $this->bindingQueueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'queue_name' => $this->queueName,
            'chunk_size' => $this->chunkSize,
            'passive' => $this->passive,
            'durable' => $this->durable,
            'auto_delete' => $this->autoDelete,
            'exclusive' => $this->exclusive,
            'type' => $this->type,
            'no_wait' => $this->noWait,
            'arguments' => $this->arguments,
            'routing_keys' => $this->routingKeys,
            'declaration_type' => $this->declarationType,
            'binding_queue_collection' => $this->bindingQueueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'queue_name' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, false) : $this->queueName,
            'chunk_size' => $this->chunkSize instanceof AbstractTransfer ? $this->chunkSize->toArray(true, false) : $this->chunkSize,
            'passive' => $this->passive instanceof AbstractTransfer ? $this->passive->toArray(true, false) : $this->passive,
            'durable' => $this->durable instanceof AbstractTransfer ? $this->durable->toArray(true, false) : $this->durable,
            'auto_delete' => $this->autoDelete instanceof AbstractTransfer ? $this->autoDelete->toArray(true, false) : $this->autoDelete,
            'exclusive' => $this->exclusive instanceof AbstractTransfer ? $this->exclusive->toArray(true, false) : $this->exclusive,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'no_wait' => $this->noWait instanceof AbstractTransfer ? $this->noWait->toArray(true, false) : $this->noWait,
            'arguments' => $this->arguments instanceof AbstractTransfer ? $this->arguments->toArray(true, false) : $this->arguments,
            'routing_keys' => $this->routingKeys instanceof AbstractTransfer ? $this->routingKeys->toArray(true, false) : $this->routingKeys,
            'declaration_type' => $this->declarationType instanceof AbstractTransfer ? $this->declarationType->toArray(true, false) : $this->declarationType,
            'binding_queue_collection' => $this->bindingQueueCollection instanceof AbstractTransfer ? $this->bindingQueueCollection->toArray(true, false) : $this->addValuesToCollection($this->bindingQueueCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'queueName' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, true) : $this->queueName,
            'chunkSize' => $this->chunkSize instanceof AbstractTransfer ? $this->chunkSize->toArray(true, true) : $this->chunkSize,
            'passive' => $this->passive instanceof AbstractTransfer ? $this->passive->toArray(true, true) : $this->passive,
            'durable' => $this->durable instanceof AbstractTransfer ? $this->durable->toArray(true, true) : $this->durable,
            'autoDelete' => $this->autoDelete instanceof AbstractTransfer ? $this->autoDelete->toArray(true, true) : $this->autoDelete,
            'exclusive' => $this->exclusive instanceof AbstractTransfer ? $this->exclusive->toArray(true, true) : $this->exclusive,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'noWait' => $this->noWait instanceof AbstractTransfer ? $this->noWait->toArray(true, true) : $this->noWait,
            'arguments' => $this->arguments instanceof AbstractTransfer ? $this->arguments->toArray(true, true) : $this->arguments,
            'routingKeys' => $this->routingKeys instanceof AbstractTransfer ? $this->routingKeys->toArray(true, true) : $this->routingKeys,
            'declarationType' => $this->declarationType instanceof AbstractTransfer ? $this->declarationType->toArray(true, true) : $this->declarationType,
            'bindingQueueCollection' => $this->bindingQueueCollection instanceof AbstractTransfer ? $this->bindingQueueCollection->toArray(true, true) : $this->addValuesToCollection($this->bindingQueueCollection, true, true),
        ];
    }
}
