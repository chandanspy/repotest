<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyOauthClientEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OAUTH_CLIENT = 'idOauthClient';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

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
    public const REDIRECT_URI = 'redirectUri';

    /**
     * @var string
     */
    public const SECRET = 'secret';

    /**
     * @var string
     */
    public const SPY_OAUTH_ACCESS_TOKENS = 'spyOauthAccessTokens';

    /**
     * @var string
     */
    public const SPY_OAUTH_REFRESH_TOKENS = 'spyOauthRefreshTokens';

    /**
     * @var integer|null
     */
    protected $idOauthClient;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var boolean|null
     */
    protected $isConfidential;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $redirectUri;

    /**
     * @var string|null
     */
    protected $secret;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOauthAccessTokenEntityTransfer[]
     */
    protected $spyOauthAccessTokens;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyOauthRefreshTokenEntityTransfer[]
     */
    protected $spyOauthRefreshTokens;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oauth_client' => 'idOauthClient',
        'idOauthClient' => 'idOauthClient',
        'IdOauthClient' => 'idOauthClient',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'is_confidential' => 'isConfidential',
        'isConfidential' => 'isConfidential',
        'IsConfidential' => 'isConfidential',
        'name' => 'name',
        'Name' => 'name',
        'redirect_uri' => 'redirectUri',
        'redirectUri' => 'redirectUri',
        'RedirectUri' => 'redirectUri',
        'secret' => 'secret',
        'Secret' => 'secret',
        'spy_oauth_access_tokens' => 'spyOauthAccessTokens',
        'spyOauthAccessTokens' => 'spyOauthAccessTokens',
        'SpyOauthAccessTokens' => 'spyOauthAccessTokens',
        'spy_oauth_refresh_tokens' => 'spyOauthRefreshTokens',
        'spyOauthRefreshTokens' => 'spyOauthRefreshTokens',
        'SpyOauthRefreshTokens' => 'spyOauthRefreshTokens',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OAUTH_CLIENT => [
            'type' => 'integer',
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
        self::IS_CONFIDENTIAL => [
            'type' => 'boolean',
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
        self::SPY_OAUTH_ACCESS_TOKENS => [
            'type' => 'Generated\Shared\Transfer\SpyOauthAccessTokenEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oauth_access_tokens',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OAUTH_REFRESH_TOKENS => [
            'type' => 'Generated\Shared\Transfer\SpyOauthRefreshTokenEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oauth_refresh_tokens',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Oauth\Persistence\SpyOauthClient';


    /**
     * @module 
     *
     * @param integer|null $idOauthClient
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdOauthClient()
    {
        return $this->idOauthClient;
    }

    /**
     * @module 
     *
     * @param integer|null $idOauthClient
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOauthClientOrFail()
    {
        if ($this->idOauthClient === null) {
            $this->throwNullValueException(static::ID_OAUTH_CLIENT);
        }

        return $this->idOauthClient;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isConfidential
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsConfidential()
    {
        return $this->isConfidential;
    }

    /**
     * @module 
     *
     * @param boolean|null $isConfidential
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsConfidentialOrFail()
    {
        if ($this->isConfidential === null) {
            $this->throwNullValueException(static::IS_CONFIDENTIAL);
        }

        return $this->isConfidential;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOauthAccessTokenEntityTransfer[] $spyOauthAccessTokens
     *
     * @return $this
     */
    public function setSpyOauthAccessTokens(ArrayObject $spyOauthAccessTokens)
    {
        $this->spyOauthAccessTokens = $spyOauthAccessTokens;
        $this->modifiedProperties[self::SPY_OAUTH_ACCESS_TOKENS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOauthAccessTokenEntityTransfer[]
     */
    public function getSpyOauthAccessTokens()
    {
        return $this->spyOauthAccessTokens;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOauthAccessTokenEntityTransfer $spyOauthAccessTokens
     *
     * @return $this
     */
    public function addSpyOauthAccessTokens(SpyOauthAccessTokenEntityTransfer $spyOauthAccessTokens)
    {
        $this->spyOauthAccessTokens[] = $spyOauthAccessTokens;
        $this->modifiedProperties[self::SPY_OAUTH_ACCESS_TOKENS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOauthAccessTokens()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OAUTH_ACCESS_TOKENS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyOauthRefreshTokenEntityTransfer[] $spyOauthRefreshTokens
     *
     * @return $this
     */
    public function setSpyOauthRefreshTokens(ArrayObject $spyOauthRefreshTokens)
    {
        $this->spyOauthRefreshTokens = $spyOauthRefreshTokens;
        $this->modifiedProperties[self::SPY_OAUTH_REFRESH_TOKENS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyOauthRefreshTokenEntityTransfer[]
     */
    public function getSpyOauthRefreshTokens()
    {
        return $this->spyOauthRefreshTokens;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOauthRefreshTokenEntityTransfer $spyOauthRefreshTokens
     *
     * @return $this
     */
    public function addSpyOauthRefreshTokens(SpyOauthRefreshTokenEntityTransfer $spyOauthRefreshTokens)
    {
        $this->spyOauthRefreshTokens[] = $spyOauthRefreshTokens;
        $this->modifiedProperties[self::SPY_OAUTH_REFRESH_TOKENS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOauthRefreshTokens()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OAUTH_REFRESH_TOKENS);

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
                case 'idOauthClient':
                case 'identifier':
                case 'isConfidential':
                case 'name':
                case 'redirectUri':
                case 'secret':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyOauthAccessTokens':
                case 'spyOauthRefreshTokens':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idOauthClient':
                case 'identifier':
                case 'isConfidential':
                case 'name':
                case 'redirectUri':
                case 'secret':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOauthAccessTokens':
                case 'spyOauthRefreshTokens':
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
                case 'idOauthClient':
                case 'identifier':
                case 'isConfidential':
                case 'name':
                case 'redirectUri':
                case 'secret':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOauthAccessTokens':
                case 'spyOauthRefreshTokens':
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
        $this->spyOauthAccessTokens = $this->spyOauthAccessTokens ?: new ArrayObject();
        $this->spyOauthRefreshTokens = $this->spyOauthRefreshTokens ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idOauthClient' => $this->idOauthClient,
            'identifier' => $this->identifier,
            'isConfidential' => $this->isConfidential,
            'name' => $this->name,
            'redirectUri' => $this->redirectUri,
            'secret' => $this->secret,
            'spyOauthAccessTokens' => $this->spyOauthAccessTokens,
            'spyOauthRefreshTokens' => $this->spyOauthRefreshTokens,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_client' => $this->idOauthClient,
            'identifier' => $this->identifier,
            'is_confidential' => $this->isConfidential,
            'name' => $this->name,
            'redirect_uri' => $this->redirectUri,
            'secret' => $this->secret,
            'spy_oauth_access_tokens' => $this->spyOauthAccessTokens,
            'spy_oauth_refresh_tokens' => $this->spyOauthRefreshTokens,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_client' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, false) : $this->idOauthClient,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'is_confidential' => $this->isConfidential instanceof AbstractTransfer ? $this->isConfidential->toArray(true, false) : $this->isConfidential,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'redirect_uri' => $this->redirectUri instanceof AbstractTransfer ? $this->redirectUri->toArray(true, false) : $this->redirectUri,
            'secret' => $this->secret instanceof AbstractTransfer ? $this->secret->toArray(true, false) : $this->secret,
            'spy_oauth_access_tokens' => $this->spyOauthAccessTokens instanceof AbstractTransfer ? $this->spyOauthAccessTokens->toArray(true, false) : $this->addValuesToCollection($this->spyOauthAccessTokens, true, false),
            'spy_oauth_refresh_tokens' => $this->spyOauthRefreshTokens instanceof AbstractTransfer ? $this->spyOauthRefreshTokens->toArray(true, false) : $this->addValuesToCollection($this->spyOauthRefreshTokens, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOauthClient' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, true) : $this->idOauthClient,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'isConfidential' => $this->isConfidential instanceof AbstractTransfer ? $this->isConfidential->toArray(true, true) : $this->isConfidential,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'redirectUri' => $this->redirectUri instanceof AbstractTransfer ? $this->redirectUri->toArray(true, true) : $this->redirectUri,
            'secret' => $this->secret instanceof AbstractTransfer ? $this->secret->toArray(true, true) : $this->secret,
            'spyOauthAccessTokens' => $this->spyOauthAccessTokens instanceof AbstractTransfer ? $this->spyOauthAccessTokens->toArray(true, true) : $this->addValuesToCollection($this->spyOauthAccessTokens, true, true),
            'spyOauthRefreshTokens' => $this->spyOauthRefreshTokens instanceof AbstractTransfer ? $this->spyOauthRefreshTokens->toArray(true, true) : $this->addValuesToCollection($this->spyOauthRefreshTokens, true, true),
        ];
    }
}
