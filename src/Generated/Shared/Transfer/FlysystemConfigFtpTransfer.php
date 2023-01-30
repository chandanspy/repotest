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
class FlysystemConfigFtpTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TIMEOUT = 'timeout';

    /**
     * @var string
     */
    public const SSL = 'ssl';

    /**
     * @var string
     */
    public const PASSIVE = 'passive';

    /**
     * @var string
     */
    public const ROOT = 'root';

    /**
     * @var string
     */
    public const PORT = 'port';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const HOST = 'host';

    /**
     * @var int|null
     */
    protected $timeout;

    /**
     * @var bool|null
     */
    protected $ssl;

    /**
     * @var bool|null
     */
    protected $passive;

    /**
     * @var string|null
     */
    protected $root;

    /**
     * @var int|null
     */
    protected $port;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'timeout' => 'timeout',
        'Timeout' => 'timeout',
        'ssl' => 'ssl',
        'Ssl' => 'ssl',
        'passive' => 'passive',
        'Passive' => 'passive',
        'root' => 'root',
        'Root' => 'root',
        'port' => 'port',
        'Port' => 'port',
        'password' => 'password',
        'Password' => 'password',
        'username' => 'username',
        'Username' => 'username',
        'host' => 'host',
        'Host' => 'host',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::SSL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'ssl',
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
        self::ROOT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'root',
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
    ];

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @param bool|null $ssl
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->ssl = $ssl;
        $this->modifiedProperties[self::SSL] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @return bool|null
     */
    public function getSsl()
    {
        return $this->ssl;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @param bool|null $ssl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSslOrFail($ssl)
    {
        if ($ssl === null) {
            $this->throwNullValueException(static::SSL);
        }

        return $this->setSsl($ssl);
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSslOrFail()
    {
        if ($this->ssl === null) {
            $this->throwNullValueException(static::SSL);
        }

        return $this->ssl;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSsl()
    {
        $this->assertPropertyIsSet(self::SSL);

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return bool|null
     */
    public function getPassive()
    {
        return $this->passive;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @param string|null $root
     *
     * @return $this
     */
    public function setRoot($root)
    {
        $this->root = $root;
        $this->modifiedProperties[self::ROOT] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @return string|null
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @param string|null $root
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRootOrFail($root)
    {
        if ($root === null) {
            $this->throwNullValueException(static::ROOT);
        }

        return $this->setRoot($root);
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRootOrFail()
    {
        if ($this->root === null) {
            $this->throwNullValueException(static::ROOT);
        }

        return $this->root;
    }

    /**
     * @module FlysystemFtpFileSystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoot()
    {
        $this->assertPropertyIsSet(self::ROOT);

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
     * @module FlysystemFtpFileSystem
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
                case 'timeout':
                case 'ssl':
                case 'passive':
                case 'root':
                case 'port':
                case 'password':
                case 'username':
                case 'host':
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
                case 'timeout':
                case 'ssl':
                case 'passive':
                case 'root':
                case 'port':
                case 'password':
                case 'username':
                case 'host':
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
                case 'timeout':
                case 'ssl':
                case 'passive':
                case 'root':
                case 'port':
                case 'password':
                case 'username':
                case 'host':
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
            'timeout' => $this->timeout,
            'ssl' => $this->ssl,
            'passive' => $this->passive,
            'root' => $this->root,
            'port' => $this->port,
            'password' => $this->password,
            'username' => $this->username,
            'host' => $this->host,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'timeout' => $this->timeout,
            'ssl' => $this->ssl,
            'passive' => $this->passive,
            'root' => $this->root,
            'port' => $this->port,
            'password' => $this->password,
            'username' => $this->username,
            'host' => $this->host,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, false) : $this->timeout,
            'ssl' => $this->ssl instanceof AbstractTransfer ? $this->ssl->toArray(true, false) : $this->ssl,
            'passive' => $this->passive instanceof AbstractTransfer ? $this->passive->toArray(true, false) : $this->passive,
            'root' => $this->root instanceof AbstractTransfer ? $this->root->toArray(true, false) : $this->root,
            'port' => $this->port instanceof AbstractTransfer ? $this->port->toArray(true, false) : $this->port,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, false) : $this->host,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, true) : $this->timeout,
            'ssl' => $this->ssl instanceof AbstractTransfer ? $this->ssl->toArray(true, true) : $this->ssl,
            'passive' => $this->passive instanceof AbstractTransfer ? $this->passive->toArray(true, true) : $this->passive,
            'root' => $this->root instanceof AbstractTransfer ? $this->root->toArray(true, true) : $this->root,
            'port' => $this->port instanceof AbstractTransfer ? $this->port->toArray(true, true) : $this->port,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, true) : $this->host,
        ];
    }
}
