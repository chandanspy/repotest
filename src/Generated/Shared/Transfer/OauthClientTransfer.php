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
class OauthClientTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const SECRET = 'secret';

    /**
     * @var string
     */
    public const IS_CONFIDENTIAL = 'isConfidential';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_OAUTH_CLIENT = 'idOauthClient';

    /**
     * @var string
     */
    public const REDIRECT_URI = 'redirectUri';

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $secret;

    /**
     * @var bool|null
     */
    protected $isConfidential;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idOauthClient;

    /**
     * @var string|null
     */
    protected $redirectUri;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'secret' => 'secret',
        'Secret' => 'secret',
        'is_confidential' => 'isConfidential',
        'isConfidential' => 'isConfidential',
        'IsConfidential' => 'isConfidential',
        'name' => 'name',
        'Name' => 'name',
        'id_oauth_client' => 'idOauthClient',
        'idOauthClient' => 'idOauthClient',
        'IdOauthClient' => 'idOauthClient',
        'redirect_uri' => 'redirectUri',
        'redirectUri' => 'redirectUri',
        'RedirectUri' => 'redirectUri',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SECRET => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'secret',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_CONFIDENTIAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_confidential',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::ID_OAUTH_CLIENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_oauth_client',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REDIRECT_URI => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'redirect_uri',
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
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param string|null $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param string|null $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail($identifier)
    {
        if ($identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->setIdentifier($identifier);
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdentifierOrFail()
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param string|null $secret
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        $this->modifiedProperties[self::SECRET] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param string|null $secret
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSecretOrFail($secret)
    {
        if ($secret === null) {
            $this->throwNullValueException(static::SECRET);
        }

        return $this->setSecret($secret);
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSecretOrFail()
    {
        if ($this->secret === null) {
            $this->throwNullValueException(static::SECRET);
        }

        return $this->secret;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSecret()
    {
        $this->assertPropertyIsSet(self::SECRET);

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param bool|null $isConfidential
     *
     * @return $this
     */
    public function setIsConfidential($isConfidential)
    {
        $this->isConfidential = $isConfidential;
        $this->modifiedProperties[self::IS_CONFIDENTIAL] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @return bool|null
     */
    public function getIsConfidential()
    {
        return $this->isConfidential;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @param bool|null $isConfidential
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsConfidentialOrFail($isConfidential)
    {
        if ($isConfidential === null) {
            $this->throwNullValueException(static::IS_CONFIDENTIAL);
        }

        return $this->setIsConfidential($isConfidential);
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsConfidentialOrFail()
    {
        if ($this->isConfidential === null) {
            $this->throwNullValueException(static::IS_CONFIDENTIAL);
        }

        return $this->isConfidential;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsConfidential()
    {
        $this->assertPropertyIsSet(self::IS_CONFIDENTIAL);

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|Oauth
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
     * @module Oauth
     *
     * @param int|null $idOauthClient
     *
     * @return $this
     */
    public function setIdOauthClient($idOauthClient)
    {
        $this->idOauthClient = $idOauthClient;
        $this->modifiedProperties[self::ID_OAUTH_CLIENT] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return int|null
     */
    public function getIdOauthClient()
    {
        return $this->idOauthClient;
    }

    /**
     * @module Oauth
     *
     * @param int|null $idOauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOauthClientOrFail($idOauthClient)
    {
        if ($idOauthClient === null) {
            $this->throwNullValueException(static::ID_OAUTH_CLIENT);
        }

        return $this->setIdOauthClient($idOauthClient);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdOauthClientOrFail()
    {
        if ($this->idOauthClient === null) {
            $this->throwNullValueException(static::ID_OAUTH_CLIENT);
        }

        return $this->idOauthClient;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOauthClient()
    {
        $this->assertPropertyIsSet(self::ID_OAUTH_CLIENT);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $redirectUri
     *
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
        $this->modifiedProperties[self::REDIRECT_URI] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @module Oauth
     *
     * @param string|null $redirectUri
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRedirectUriOrFail($redirectUri)
    {
        if ($redirectUri === null) {
            $this->throwNullValueException(static::REDIRECT_URI);
        }

        return $this->setRedirectUri($redirectUri);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRedirectUriOrFail()
    {
        if ($this->redirectUri === null) {
            $this->throwNullValueException(static::REDIRECT_URI);
        }

        return $this->redirectUri;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRedirectUri()
    {
        $this->assertPropertyIsSet(self::REDIRECT_URI);

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
                case 'identifier':
                case 'secret':
                case 'isConfidential':
                case 'name':
                case 'idOauthClient':
                case 'redirectUri':
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
                case 'identifier':
                case 'secret':
                case 'isConfidential':
                case 'name':
                case 'idOauthClient':
                case 'redirectUri':
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
                case 'identifier':
                case 'secret':
                case 'isConfidential':
                case 'name':
                case 'idOauthClient':
                case 'redirectUri':
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
            'identifier' => $this->identifier,
            'secret' => $this->secret,
            'isConfidential' => $this->isConfidential,
            'name' => $this->name,
            'idOauthClient' => $this->idOauthClient,
            'redirectUri' => $this->redirectUri,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'secret' => $this->secret,
            'is_confidential' => $this->isConfidential,
            'name' => $this->name,
            'id_oauth_client' => $this->idOauthClient,
            'redirect_uri' => $this->redirectUri,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'secret' => $this->secret instanceof AbstractTransfer ? $this->secret->toArray(true, false) : $this->secret,
            'is_confidential' => $this->isConfidential instanceof AbstractTransfer ? $this->isConfidential->toArray(true, false) : $this->isConfidential,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_oauth_client' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, false) : $this->idOauthClient,
            'redirect_uri' => $this->redirectUri instanceof AbstractTransfer ? $this->redirectUri->toArray(true, false) : $this->redirectUri,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'secret' => $this->secret instanceof AbstractTransfer ? $this->secret->toArray(true, true) : $this->secret,
            'isConfidential' => $this->isConfidential instanceof AbstractTransfer ? $this->isConfidential->toArray(true, true) : $this->isConfidential,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idOauthClient' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, true) : $this->idOauthClient,
            'redirectUri' => $this->redirectUri instanceof AbstractTransfer ? $this->redirectUri->toArray(true, true) : $this->redirectUri,
        ];
    }
}
