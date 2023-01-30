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
class QueueConnectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUEUE_OPTION_COLLECTION = 'queueOptionCollection';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const HOST = 'host';

    /**
     * @var string
     */
    public const PORT = 'port';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const VIRTUAL_HOST = 'virtualHost';

    /**
     * @var string
     */
    public const INSIST = 'insist';

    /**
     * @var string
     */
    public const LOGIN_METHOD = 'loginMethod';

    /**
     * @var string
     */
    public const LOGIN_RESPONSE = 'loginResponse';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const CONNECTION_TIMEOUT = 'connectionTimeout';

    /**
     * @var string
     */
    public const READ_WRITE_TIMEOUT = 'readWriteTimeout';

    /**
     * @var string
     */
    public const KEEP_ALIVE = 'keepAlive';

    /**
     * @var string
     */
    public const HEART_BEAT = 'heartBeat';

    /**
     * @var string
     */
    public const CHANNEL_RPC_TIMEOUT = 'channelRpcTimeout';

    /**
     * @var string
     */
    public const SSL_PROTOCOL = 'sslProtocol';

    /**
     * @var string
     */
    public const IS_DEFAULT_CONNECTION = 'isDefaultConnection';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var string
     */
    public const STREAM_CONTEXT_OPTIONS = 'streamContextOptions';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[]
     */
    protected $queueOptionCollection;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var int|null
     */
    protected $port;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $virtualHost;

    /**
     * @var bool|null
     */
    protected $insist;

    /**
     * @var string|null
     */
    protected $loginMethod;

    /**
     * @var string|null
     */
    protected $loginResponse;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var int|null
     */
    protected $connectionTimeout;

    /**
     * @var int|null
     */
    protected $readWriteTimeout;

    /**
     * @var bool|null
     */
    protected $keepAlive;

    /**
     * @var int|null
     */
    protected $heartBeat;

    /**
     * @var int|null
     */
    protected $channelRpcTimeout;

    /**
     * @var string|null
     */
    protected $sslProtocol;

    /**
     * @var bool|null
     */
    protected $isDefaultConnection;

    /**
     * @var array
     */
    protected $storeNames = [];

    /**
     * @var array
     */
    protected $streamContextOptions = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'queue_option_collection' => 'queueOptionCollection',
        'queueOptionCollection' => 'queueOptionCollection',
        'QueueOptionCollection' => 'queueOptionCollection',
        'name' => 'name',
        'Name' => 'name',
        'host' => 'host',
        'Host' => 'host',
        'port' => 'port',
        'Port' => 'port',
        'username' => 'username',
        'Username' => 'username',
        'password' => 'password',
        'Password' => 'password',
        'virtual_host' => 'virtualHost',
        'virtualHost' => 'virtualHost',
        'VirtualHost' => 'virtualHost',
        'insist' => 'insist',
        'Insist' => 'insist',
        'login_method' => 'loginMethod',
        'loginMethod' => 'loginMethod',
        'LoginMethod' => 'loginMethod',
        'login_response' => 'loginResponse',
        'loginResponse' => 'loginResponse',
        'LoginResponse' => 'loginResponse',
        'locale' => 'locale',
        'Locale' => 'locale',
        'connection_timeout' => 'connectionTimeout',
        'connectionTimeout' => 'connectionTimeout',
        'ConnectionTimeout' => 'connectionTimeout',
        'read_write_timeout' => 'readWriteTimeout',
        'readWriteTimeout' => 'readWriteTimeout',
        'ReadWriteTimeout' => 'readWriteTimeout',
        'keep_alive' => 'keepAlive',
        'keepAlive' => 'keepAlive',
        'KeepAlive' => 'keepAlive',
        'heart_beat' => 'heartBeat',
        'heartBeat' => 'heartBeat',
        'HeartBeat' => 'heartBeat',
        'channel_rpc_timeout' => 'channelRpcTimeout',
        'channelRpcTimeout' => 'channelRpcTimeout',
        'ChannelRpcTimeout' => 'channelRpcTimeout',
        'ssl_protocol' => 'sslProtocol',
        'sslProtocol' => 'sslProtocol',
        'SslProtocol' => 'sslProtocol',
        'is_default_connection' => 'isDefaultConnection',
        'isDefaultConnection' => 'isDefaultConnection',
        'IsDefaultConnection' => 'isDefaultConnection',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
        'stream_context_options' => 'streamContextOptions',
        'streamContextOptions' => 'streamContextOptions',
        'StreamContextOptions' => 'streamContextOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUEUE_OPTION_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\RabbitMqOptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'queue_option_collection',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::HOST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'host',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PORT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'port',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VIRTUAL_HOST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'virtual_host',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INSIST => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'insist',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOGIN_METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'login_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOGIN_RESPONSE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'login_response',
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
        self::CONNECTION_TIMEOUT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'connection_timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::READ_WRITE_TIMEOUT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'read_write_timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEEP_ALIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'keep_alive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEART_BEAT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'heart_beat',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHANNEL_RPC_TIMEOUT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'channel_rpc_timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SSL_PROTOCOL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'ssl_protocol',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT_CONNECTION => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default_connection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'store_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STREAM_CONTEXT_OPTIONS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'stream_context_options',
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
     * @param \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[] $queueOptionCollection
     *
     * @return $this
     */
    public function setQueueOptionCollection(ArrayObject $queueOptionCollection)
    {
        $this->queueOptionCollection = $queueOptionCollection;
        $this->modifiedProperties[self::QUEUE_OPTION_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Event|RabbitMq
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RabbitMqOptionTransfer[]
     */
    public function getQueueOptionCollection()
    {
        return $this->queueOptionCollection;
    }

    /**
     * @module Event|RabbitMq
     *
     * @param \Generated\Shared\Transfer\RabbitMqOptionTransfer $queueOptionItem
     *
     * @return $this
     */
    public function addQueueOptionItem(RabbitMqOptionTransfer $queueOptionItem)
    {
        $this->queueOptionCollection[] = $queueOptionItem;
        $this->modifiedProperties[self::QUEUE_OPTION_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Event|RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueOptionCollection()
    {
        $this->assertCollectionPropertyIsSet(self::QUEUE_OPTION_COLLECTION);

        return $this;
    }

    /**
     * @module RabbitMq
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
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module RabbitMq
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
     * @module RabbitMq
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
     * @module RabbitMq
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
     * @module RabbitMq
     *
     * @param string|null $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        $this->modifiedProperties[self::HOST] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $host
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHostOrFail($host)
    {
        if ($host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->setHost($host);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHostOrFail()
    {
        if ($this->host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->host;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHost()
    {
        $this->assertPropertyIsSet(self::HOST);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        $this->modifiedProperties[self::PORT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $port
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPortOrFail($port)
    {
        if ($port === null) {
            $this->throwNullValueException(static::PORT);
        }

        return $this->setPort($port);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPortOrFail()
    {
        if ($this->port === null) {
            $this->throwNullValueException(static::PORT);
        }

        return $this->port;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePort()
    {
        $this->assertPropertyIsSet(self::PORT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $virtualHost
     *
     * @return $this
     */
    public function setVirtualHost($virtualHost)
    {
        $this->virtualHost = $virtualHost;
        $this->modifiedProperties[self::VIRTUAL_HOST] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getVirtualHost()
    {
        return $this->virtualHost;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $virtualHost
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVirtualHostOrFail($virtualHost)
    {
        if ($virtualHost === null) {
            $this->throwNullValueException(static::VIRTUAL_HOST);
        }

        return $this->setVirtualHost($virtualHost);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVirtualHostOrFail()
    {
        if ($this->virtualHost === null) {
            $this->throwNullValueException(static::VIRTUAL_HOST);
        }

        return $this->virtualHost;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVirtualHost()
    {
        $this->assertPropertyIsSet(self::VIRTUAL_HOST);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $insist
     *
     * @return $this
     */
    public function setInsist($insist)
    {
        $this->insist = $insist;
        $this->modifiedProperties[self::INSIST] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getInsist()
    {
        return $this->insist;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $insist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setInsistOrFail($insist)
    {
        if ($insist === null) {
            $this->throwNullValueException(static::INSIST);
        }

        return $this->setInsist($insist);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getInsistOrFail()
    {
        if ($this->insist === null) {
            $this->throwNullValueException(static::INSIST);
        }

        return $this->insist;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireInsist()
    {
        $this->assertPropertyIsSet(self::INSIST);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $loginMethod
     *
     * @return $this
     */
    public function setLoginMethod($loginMethod)
    {
        $this->loginMethod = $loginMethod;
        $this->modifiedProperties[self::LOGIN_METHOD] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getLoginMethod()
    {
        return $this->loginMethod;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $loginMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLoginMethodOrFail($loginMethod)
    {
        if ($loginMethod === null) {
            $this->throwNullValueException(static::LOGIN_METHOD);
        }

        return $this->setLoginMethod($loginMethod);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLoginMethodOrFail()
    {
        if ($this->loginMethod === null) {
            $this->throwNullValueException(static::LOGIN_METHOD);
        }

        return $this->loginMethod;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLoginMethod()
    {
        $this->assertPropertyIsSet(self::LOGIN_METHOD);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $loginResponse
     *
     * @return $this
     */
    public function setLoginResponse($loginResponse)
    {
        $this->loginResponse = $loginResponse;
        $this->modifiedProperties[self::LOGIN_RESPONSE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getLoginResponse()
    {
        return $this->loginResponse;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $loginResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLoginResponseOrFail($loginResponse)
    {
        if ($loginResponse === null) {
            $this->throwNullValueException(static::LOGIN_RESPONSE);
        }

        return $this->setLoginResponse($loginResponse);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLoginResponseOrFail()
    {
        if ($this->loginResponse === null) {
            $this->throwNullValueException(static::LOGIN_RESPONSE);
        }

        return $this->loginResponse;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLoginResponse()
    {
        $this->assertPropertyIsSet(self::LOGIN_RESPONSE);

        return $this;
    }

    /**
     * @module RabbitMq
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
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module RabbitMq
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
     * @module RabbitMq
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
     * @module RabbitMq
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
     * @param int|null $connectionTimeout
     *
     * @return $this
     */
    public function setConnectionTimeout($connectionTimeout)
    {
        $this->connectionTimeout = $connectionTimeout;
        $this->modifiedProperties[self::CONNECTION_TIMEOUT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $connectionTimeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConnectionTimeoutOrFail($connectionTimeout)
    {
        if ($connectionTimeout === null) {
            $this->throwNullValueException(static::CONNECTION_TIMEOUT);
        }

        return $this->setConnectionTimeout($connectionTimeout);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getConnectionTimeoutOrFail()
    {
        if ($this->connectionTimeout === null) {
            $this->throwNullValueException(static::CONNECTION_TIMEOUT);
        }

        return $this->connectionTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConnectionTimeout()
    {
        $this->assertPropertyIsSet(self::CONNECTION_TIMEOUT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $readWriteTimeout
     *
     * @return $this
     */
    public function setReadWriteTimeout($readWriteTimeout)
    {
        $this->readWriteTimeout = $readWriteTimeout;
        $this->modifiedProperties[self::READ_WRITE_TIMEOUT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getReadWriteTimeout()
    {
        return $this->readWriteTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $readWriteTimeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReadWriteTimeoutOrFail($readWriteTimeout)
    {
        if ($readWriteTimeout === null) {
            $this->throwNullValueException(static::READ_WRITE_TIMEOUT);
        }

        return $this->setReadWriteTimeout($readWriteTimeout);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getReadWriteTimeoutOrFail()
    {
        if ($this->readWriteTimeout === null) {
            $this->throwNullValueException(static::READ_WRITE_TIMEOUT);
        }

        return $this->readWriteTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReadWriteTimeout()
    {
        $this->assertPropertyIsSet(self::READ_WRITE_TIMEOUT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $keepAlive
     *
     * @return $this
     */
    public function setKeepAlive($keepAlive)
    {
        $this->keepAlive = $keepAlive;
        $this->modifiedProperties[self::KEEP_ALIVE] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getKeepAlive()
    {
        return $this->keepAlive;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $keepAlive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeepAliveOrFail($keepAlive)
    {
        if ($keepAlive === null) {
            $this->throwNullValueException(static::KEEP_ALIVE);
        }

        return $this->setKeepAlive($keepAlive);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getKeepAliveOrFail()
    {
        if ($this->keepAlive === null) {
            $this->throwNullValueException(static::KEEP_ALIVE);
        }

        return $this->keepAlive;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKeepAlive()
    {
        $this->assertPropertyIsSet(self::KEEP_ALIVE);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $heartBeat
     *
     * @return $this
     */
    public function setHeartBeat($heartBeat)
    {
        $this->heartBeat = $heartBeat;
        $this->modifiedProperties[self::HEART_BEAT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getHeartBeat()
    {
        return $this->heartBeat;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $heartBeat
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHeartBeatOrFail($heartBeat)
    {
        if ($heartBeat === null) {
            $this->throwNullValueException(static::HEART_BEAT);
        }

        return $this->setHeartBeat($heartBeat);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getHeartBeatOrFail()
    {
        if ($this->heartBeat === null) {
            $this->throwNullValueException(static::HEART_BEAT);
        }

        return $this->heartBeat;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeartBeat()
    {
        $this->assertPropertyIsSet(self::HEART_BEAT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $channelRpcTimeout
     *
     * @return $this
     */
    public function setChannelRpcTimeout($channelRpcTimeout)
    {
        $this->channelRpcTimeout = $channelRpcTimeout;
        $this->modifiedProperties[self::CHANNEL_RPC_TIMEOUT] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return int|null
     */
    public function getChannelRpcTimeout()
    {
        return $this->channelRpcTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @param int|null $channelRpcTimeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChannelRpcTimeoutOrFail($channelRpcTimeout)
    {
        if ($channelRpcTimeout === null) {
            $this->throwNullValueException(static::CHANNEL_RPC_TIMEOUT);
        }

        return $this->setChannelRpcTimeout($channelRpcTimeout);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getChannelRpcTimeoutOrFail()
    {
        if ($this->channelRpcTimeout === null) {
            $this->throwNullValueException(static::CHANNEL_RPC_TIMEOUT);
        }

        return $this->channelRpcTimeout;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChannelRpcTimeout()
    {
        $this->assertPropertyIsSet(self::CHANNEL_RPC_TIMEOUT);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $sslProtocol
     *
     * @return $this
     */
    public function setSslProtocol($sslProtocol)
    {
        $this->sslProtocol = $sslProtocol;
        $this->modifiedProperties[self::SSL_PROTOCOL] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return string|null
     */
    public function getSslProtocol()
    {
        return $this->sslProtocol;
    }

    /**
     * @module RabbitMq
     *
     * @param string|null $sslProtocol
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSslProtocolOrFail($sslProtocol)
    {
        if ($sslProtocol === null) {
            $this->throwNullValueException(static::SSL_PROTOCOL);
        }

        return $this->setSslProtocol($sslProtocol);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSslProtocolOrFail()
    {
        if ($this->sslProtocol === null) {
            $this->throwNullValueException(static::SSL_PROTOCOL);
        }

        return $this->sslProtocol;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSslProtocol()
    {
        $this->assertPropertyIsSet(self::SSL_PROTOCOL);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $isDefaultConnection
     *
     * @return $this
     */
    public function setIsDefaultConnection($isDefaultConnection)
    {
        $this->isDefaultConnection = $isDefaultConnection;
        $this->modifiedProperties[self::IS_DEFAULT_CONNECTION] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return bool|null
     */
    public function getIsDefaultConnection()
    {
        return $this->isDefaultConnection;
    }

    /**
     * @module RabbitMq
     *
     * @param bool|null $isDefaultConnection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultConnectionOrFail($isDefaultConnection)
    {
        if ($isDefaultConnection === null) {
            $this->throwNullValueException(static::IS_DEFAULT_CONNECTION);
        }

        return $this->setIsDefaultConnection($isDefaultConnection);
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultConnectionOrFail()
    {
        if ($this->isDefaultConnection === null) {
            $this->throwNullValueException(static::IS_DEFAULT_CONNECTION);
        }

        return $this->isDefaultConnection;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefaultConnection()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT_CONNECTION);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param array|null $storeNames
     *
     * @return $this
     */
    public function setStoreNames(array $storeNames = null)
    {
        if ($storeNames === null) {
            $storeNames = [];
        }

        $this->storeNames = $storeNames;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return array
     */
    public function getStoreNames()
    {
        return $this->storeNames;
    }

    /**
     * @module RabbitMq
     *
     * @param mixed $storeNames
     *
     * @return $this
     */
    public function addStoreNames($storeNames)
    {
        $this->storeNames[] = $storeNames;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreNames()
    {
        $this->assertPropertyIsSet(self::STORE_NAMES);

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @param array|null $streamContextOptions
     *
     * @return $this
     */
    public function setStreamContextOptions(array $streamContextOptions = null)
    {
        if ($streamContextOptions === null) {
            $streamContextOptions = [];
        }

        $this->streamContextOptions = $streamContextOptions;
        $this->modifiedProperties[self::STREAM_CONTEXT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @return array
     */
    public function getStreamContextOptions()
    {
        return $this->streamContextOptions;
    }

    /**
     * @module RabbitMq
     *
     * @param mixed $streamContextOption
     *
     * @return $this
     */
    public function addStreamContextOption($streamContextOption)
    {
        $this->streamContextOptions[] = $streamContextOption;
        $this->modifiedProperties[self::STREAM_CONTEXT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module RabbitMq
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStreamContextOptions()
    {
        $this->assertPropertyIsSet(self::STREAM_CONTEXT_OPTIONS);

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
                case 'host':
                case 'port':
                case 'username':
                case 'password':
                case 'virtualHost':
                case 'insist':
                case 'loginMethod':
                case 'loginResponse':
                case 'locale':
                case 'connectionTimeout':
                case 'readWriteTimeout':
                case 'keepAlive':
                case 'heartBeat':
                case 'channelRpcTimeout':
                case 'sslProtocol':
                case 'isDefaultConnection':
                case 'storeNames':
                case 'streamContextOptions':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'queueOptionCollection':
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
                case 'name':
                case 'host':
                case 'port':
                case 'username':
                case 'password':
                case 'virtualHost':
                case 'insist':
                case 'loginMethod':
                case 'loginResponse':
                case 'locale':
                case 'connectionTimeout':
                case 'readWriteTimeout':
                case 'keepAlive':
                case 'heartBeat':
                case 'channelRpcTimeout':
                case 'sslProtocol':
                case 'isDefaultConnection':
                case 'storeNames':
                case 'streamContextOptions':
                    $values[$arrayKey] = $value;

                    break;
                case 'queueOptionCollection':
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
                case 'name':
                case 'host':
                case 'port':
                case 'username':
                case 'password':
                case 'virtualHost':
                case 'insist':
                case 'loginMethod':
                case 'loginResponse':
                case 'locale':
                case 'connectionTimeout':
                case 'readWriteTimeout':
                case 'keepAlive':
                case 'heartBeat':
                case 'channelRpcTimeout':
                case 'sslProtocol':
                case 'isDefaultConnection':
                case 'storeNames':
                case 'streamContextOptions':
                    $values[$arrayKey] = $value;

                    break;
                case 'queueOptionCollection':
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
        $this->queueOptionCollection = $this->queueOptionCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'host' => $this->host,
            'port' => $this->port,
            'username' => $this->username,
            'password' => $this->password,
            'virtualHost' => $this->virtualHost,
            'insist' => $this->insist,
            'loginMethod' => $this->loginMethod,
            'loginResponse' => $this->loginResponse,
            'locale' => $this->locale,
            'connectionTimeout' => $this->connectionTimeout,
            'readWriteTimeout' => $this->readWriteTimeout,
            'keepAlive' => $this->keepAlive,
            'heartBeat' => $this->heartBeat,
            'channelRpcTimeout' => $this->channelRpcTimeout,
            'sslProtocol' => $this->sslProtocol,
            'isDefaultConnection' => $this->isDefaultConnection,
            'storeNames' => $this->storeNames,
            'streamContextOptions' => $this->streamContextOptions,
            'queueOptionCollection' => $this->queueOptionCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'host' => $this->host,
            'port' => $this->port,
            'username' => $this->username,
            'password' => $this->password,
            'virtual_host' => $this->virtualHost,
            'insist' => $this->insist,
            'login_method' => $this->loginMethod,
            'login_response' => $this->loginResponse,
            'locale' => $this->locale,
            'connection_timeout' => $this->connectionTimeout,
            'read_write_timeout' => $this->readWriteTimeout,
            'keep_alive' => $this->keepAlive,
            'heart_beat' => $this->heartBeat,
            'channel_rpc_timeout' => $this->channelRpcTimeout,
            'ssl_protocol' => $this->sslProtocol,
            'is_default_connection' => $this->isDefaultConnection,
            'store_names' => $this->storeNames,
            'stream_context_options' => $this->streamContextOptions,
            'queue_option_collection' => $this->queueOptionCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, false) : $this->host,
            'port' => $this->port instanceof AbstractTransfer ? $this->port->toArray(true, false) : $this->port,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'virtual_host' => $this->virtualHost instanceof AbstractTransfer ? $this->virtualHost->toArray(true, false) : $this->virtualHost,
            'insist' => $this->insist instanceof AbstractTransfer ? $this->insist->toArray(true, false) : $this->insist,
            'login_method' => $this->loginMethod instanceof AbstractTransfer ? $this->loginMethod->toArray(true, false) : $this->loginMethod,
            'login_response' => $this->loginResponse instanceof AbstractTransfer ? $this->loginResponse->toArray(true, false) : $this->loginResponse,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'connection_timeout' => $this->connectionTimeout instanceof AbstractTransfer ? $this->connectionTimeout->toArray(true, false) : $this->connectionTimeout,
            'read_write_timeout' => $this->readWriteTimeout instanceof AbstractTransfer ? $this->readWriteTimeout->toArray(true, false) : $this->readWriteTimeout,
            'keep_alive' => $this->keepAlive instanceof AbstractTransfer ? $this->keepAlive->toArray(true, false) : $this->keepAlive,
            'heart_beat' => $this->heartBeat instanceof AbstractTransfer ? $this->heartBeat->toArray(true, false) : $this->heartBeat,
            'channel_rpc_timeout' => $this->channelRpcTimeout instanceof AbstractTransfer ? $this->channelRpcTimeout->toArray(true, false) : $this->channelRpcTimeout,
            'ssl_protocol' => $this->sslProtocol instanceof AbstractTransfer ? $this->sslProtocol->toArray(true, false) : $this->sslProtocol,
            'is_default_connection' => $this->isDefaultConnection instanceof AbstractTransfer ? $this->isDefaultConnection->toArray(true, false) : $this->isDefaultConnection,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
            'stream_context_options' => $this->streamContextOptions instanceof AbstractTransfer ? $this->streamContextOptions->toArray(true, false) : $this->streamContextOptions,
            'queue_option_collection' => $this->queueOptionCollection instanceof AbstractTransfer ? $this->queueOptionCollection->toArray(true, false) : $this->addValuesToCollection($this->queueOptionCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, true) : $this->host,
            'port' => $this->port instanceof AbstractTransfer ? $this->port->toArray(true, true) : $this->port,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'virtualHost' => $this->virtualHost instanceof AbstractTransfer ? $this->virtualHost->toArray(true, true) : $this->virtualHost,
            'insist' => $this->insist instanceof AbstractTransfer ? $this->insist->toArray(true, true) : $this->insist,
            'loginMethod' => $this->loginMethod instanceof AbstractTransfer ? $this->loginMethod->toArray(true, true) : $this->loginMethod,
            'loginResponse' => $this->loginResponse instanceof AbstractTransfer ? $this->loginResponse->toArray(true, true) : $this->loginResponse,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'connectionTimeout' => $this->connectionTimeout instanceof AbstractTransfer ? $this->connectionTimeout->toArray(true, true) : $this->connectionTimeout,
            'readWriteTimeout' => $this->readWriteTimeout instanceof AbstractTransfer ? $this->readWriteTimeout->toArray(true, true) : $this->readWriteTimeout,
            'keepAlive' => $this->keepAlive instanceof AbstractTransfer ? $this->keepAlive->toArray(true, true) : $this->keepAlive,
            'heartBeat' => $this->heartBeat instanceof AbstractTransfer ? $this->heartBeat->toArray(true, true) : $this->heartBeat,
            'channelRpcTimeout' => $this->channelRpcTimeout instanceof AbstractTransfer ? $this->channelRpcTimeout->toArray(true, true) : $this->channelRpcTimeout,
            'sslProtocol' => $this->sslProtocol instanceof AbstractTransfer ? $this->sslProtocol->toArray(true, true) : $this->sslProtocol,
            'isDefaultConnection' => $this->isDefaultConnection instanceof AbstractTransfer ? $this->isDefaultConnection->toArray(true, true) : $this->isDefaultConnection,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
            'streamContextOptions' => $this->streamContextOptions instanceof AbstractTransfer ? $this->streamContextOptions->toArray(true, true) : $this->streamContextOptions,
            'queueOptionCollection' => $this->queueOptionCollection instanceof AbstractTransfer ? $this->queueOptionCollection->toArray(true, true) : $this->addValuesToCollection($this->queueOptionCollection, true, true),
        ];
    }
}
