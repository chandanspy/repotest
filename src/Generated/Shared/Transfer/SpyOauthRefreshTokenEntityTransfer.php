<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyOauthRefreshTokenEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OAUTH_REFRESH_TOKEN = 'idOauthRefreshToken';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const USER_IDENTIFIER = 'userIdentifier';

    /**
     * @var string
     */
    public const FK_OAUTH_CLIENT = 'fkOauthClient';

    /**
     * @var string
     */
    public const EXPIRES_AT = 'expiresAt';

    /**
     * @var string
     */
    public const REVOKED_AT = 'revokedAt';

    /**
     * @var string
     */
    public const SPY_OAUTH_CLIENT = 'spyOauthClient';

    /**
     * @var string|null
     */
    protected $idOauthRefreshToken;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $scopes;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $userIdentifier;

    /**
     * @var string|null
     */
    protected $fkOauthClient;

    /**
     * @var string|null
     */
    protected $expiresAt;

    /**
     * @var string|null
     */
    protected $revokedAt;

    /**
     * @var \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null
     */
    protected $spyOauthClient;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oauth_refresh_token' => 'idOauthRefreshToken',
        'idOauthRefreshToken' => 'idOauthRefreshToken',
        'IdOauthRefreshToken' => 'idOauthRefreshToken',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'user_identifier' => 'userIdentifier',
        'userIdentifier' => 'userIdentifier',
        'UserIdentifier' => 'userIdentifier',
        'fk_oauth_client' => 'fkOauthClient',
        'fkOauthClient' => 'fkOauthClient',
        'FkOauthClient' => 'fkOauthClient',
        'expires_at' => 'expiresAt',
        'expiresAt' => 'expiresAt',
        'ExpiresAt' => 'expiresAt',
        'revoked_at' => 'revokedAt',
        'revokedAt' => 'revokedAt',
        'RevokedAt' => 'revokedAt',
        'spy_oauth_client' => 'spyOauthClient',
        'spyOauthClient' => 'spyOauthClient',
        'SpyOauthClient' => 'spyOauthClient',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OAUTH_REFRESH_TOKEN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_oauth_refresh_token',
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
        self::SCOPES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'scopes',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::USER_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_OAUTH_CLIENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fk_oauth_client',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPIRES_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expires_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVOKED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'revoked_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OAUTH_CLIENT => [
            'type' => 'Generated\Shared\Transfer\SpyOauthClientEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oauth_client',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshToken';


    /**
     * @module 
     *
     * @param string|null $idOauthRefreshToken
     *
     * @return $this
     */
    public function setIdOauthRefreshToken($idOauthRefreshToken)
    {
        $this->idOauthRefreshToken = $idOauthRefreshToken;
        $this->modifiedProperties[self::ID_OAUTH_REFRESH_TOKEN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdOauthRefreshToken()
    {
        return $this->idOauthRefreshToken;
    }

    /**
     * @module 
     *
     * @param string|null $idOauthRefreshToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOauthRefreshTokenOrFail($idOauthRefreshToken)
    {
        if ($idOauthRefreshToken === null) {
            $this->throwNullValueException(static::ID_OAUTH_REFRESH_TOKEN);
        }

        return $this->setIdOauthRefreshToken($idOauthRefreshToken);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOauthRefreshTokenOrFail()
    {
        if ($this->idOauthRefreshToken === null) {
            $this->throwNullValueException(static::ID_OAUTH_REFRESH_TOKEN);
        }

        return $this->idOauthRefreshToken;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOauthRefreshToken()
    {
        $this->assertPropertyIsSet(self::ID_OAUTH_REFRESH_TOKEN);

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
     * @param string|null $scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module 
     *
     * @param string|null $scopes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setScopesOrFail($scopes)
    {
        if ($scopes === null) {
            $this->throwNullValueException(static::SCOPES);
        }

        return $this->setScopes($scopes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getScopesOrFail()
    {
        if ($this->scopes === null) {
            $this->throwNullValueException(static::SCOPES);
        }

        return $this->scopes;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScopes()
    {
        $this->assertPropertyIsSet(self::SCOPES);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $userIdentifier
     *
     * @return $this
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;
        $this->modifiedProperties[self::USER_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @module 
     *
     * @param string|null $userIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserIdentifierOrFail($userIdentifier)
    {
        if ($userIdentifier === null) {
            $this->throwNullValueException(static::USER_IDENTIFIER);
        }

        return $this->setUserIdentifier($userIdentifier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserIdentifierOrFail()
    {
        if ($this->userIdentifier === null) {
            $this->throwNullValueException(static::USER_IDENTIFIER);
        }

        return $this->userIdentifier;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserIdentifier()
    {
        $this->assertPropertyIsSet(self::USER_IDENTIFIER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $fkOauthClient
     *
     * @return $this
     */
    public function setFkOauthClient($fkOauthClient)
    {
        $this->fkOauthClient = $fkOauthClient;
        $this->modifiedProperties[self::FK_OAUTH_CLIENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getFkOauthClient()
    {
        return $this->fkOauthClient;
    }

    /**
     * @module 
     *
     * @param string|null $fkOauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkOauthClientOrFail($fkOauthClient)
    {
        if ($fkOauthClient === null) {
            $this->throwNullValueException(static::FK_OAUTH_CLIENT);
        }

        return $this->setFkOauthClient($fkOauthClient);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFkOauthClientOrFail()
    {
        if ($this->fkOauthClient === null) {
            $this->throwNullValueException(static::FK_OAUTH_CLIENT);
        }

        return $this->fkOauthClient;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkOauthClient()
    {
        $this->assertPropertyIsSet(self::FK_OAUTH_CLIENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $expiresAt
     *
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
        $this->modifiedProperties[self::EXPIRES_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @module 
     *
     * @param string|null $expiresAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiresAtOrFail($expiresAt)
    {
        if ($expiresAt === null) {
            $this->throwNullValueException(static::EXPIRES_AT);
        }

        return $this->setExpiresAt($expiresAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiresAtOrFail()
    {
        if ($this->expiresAt === null) {
            $this->throwNullValueException(static::EXPIRES_AT);
        }

        return $this->expiresAt;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpiresAt()
    {
        $this->assertPropertyIsSet(self::EXPIRES_AT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $revokedAt
     *
     * @return $this
     */
    public function setRevokedAt($revokedAt)
    {
        $this->revokedAt = $revokedAt;
        $this->modifiedProperties[self::REVOKED_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getRevokedAt()
    {
        return $this->revokedAt;
    }

    /**
     * @module 
     *
     * @param string|null $revokedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRevokedAtOrFail($revokedAt)
    {
        if ($revokedAt === null) {
            $this->throwNullValueException(static::REVOKED_AT);
        }

        return $this->setRevokedAt($revokedAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRevokedAtOrFail()
    {
        if ($this->revokedAt === null) {
            $this->throwNullValueException(static::REVOKED_AT);
        }

        return $this->revokedAt;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRevokedAt()
    {
        $this->assertPropertyIsSet(self::REVOKED_AT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null $spyOauthClient
     *
     * @return $this
     */
    public function setSpyOauthClient(SpyOauthClientEntityTransfer $spyOauthClient = null)
    {
        $this->spyOauthClient = $spyOauthClient;
        $this->modifiedProperties[self::SPY_OAUTH_CLIENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null
     */
    public function getSpyOauthClient()
    {
        return $this->spyOauthClient;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOauthClientEntityTransfer $spyOauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyOauthClientOrFail(SpyOauthClientEntityTransfer $spyOauthClient)
    {
        return $this->setSpyOauthClient($spyOauthClient);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyOauthClientEntityTransfer
     */
    public function getSpyOauthClientOrFail()
    {
        if ($this->spyOauthClient === null) {
            $this->throwNullValueException(static::SPY_OAUTH_CLIENT);
        }

        return $this->spyOauthClient;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOauthClient()
    {
        $this->assertPropertyIsSet(self::SPY_OAUTH_CLIENT);

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
                case 'idOauthRefreshToken':
                case 'identifier':
                case 'scopes':
                case 'customerReference':
                case 'userIdentifier':
                case 'fkOauthClient':
                case 'expiresAt':
                case 'revokedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyOauthClient':
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
                case 'idOauthRefreshToken':
                case 'identifier':
                case 'scopes':
                case 'customerReference':
                case 'userIdentifier':
                case 'fkOauthClient':
                case 'expiresAt':
                case 'revokedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOauthClient':
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
                case 'idOauthRefreshToken':
                case 'identifier':
                case 'scopes':
                case 'customerReference':
                case 'userIdentifier':
                case 'fkOauthClient':
                case 'expiresAt':
                case 'revokedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyOauthClient':
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
            'idOauthRefreshToken' => $this->idOauthRefreshToken,
            'identifier' => $this->identifier,
            'scopes' => $this->scopes,
            'customerReference' => $this->customerReference,
            'userIdentifier' => $this->userIdentifier,
            'fkOauthClient' => $this->fkOauthClient,
            'expiresAt' => $this->expiresAt,
            'revokedAt' => $this->revokedAt,
            'spyOauthClient' => $this->spyOauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_refresh_token' => $this->idOauthRefreshToken,
            'identifier' => $this->identifier,
            'scopes' => $this->scopes,
            'customer_reference' => $this->customerReference,
            'user_identifier' => $this->userIdentifier,
            'fk_oauth_client' => $this->fkOauthClient,
            'expires_at' => $this->expiresAt,
            'revoked_at' => $this->revokedAt,
            'spy_oauth_client' => $this->spyOauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_refresh_token' => $this->idOauthRefreshToken instanceof AbstractTransfer ? $this->idOauthRefreshToken->toArray(true, false) : $this->idOauthRefreshToken,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'user_identifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, false) : $this->userIdentifier,
            'fk_oauth_client' => $this->fkOauthClient instanceof AbstractTransfer ? $this->fkOauthClient->toArray(true, false) : $this->fkOauthClient,
            'expires_at' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, false) : $this->expiresAt,
            'revoked_at' => $this->revokedAt instanceof AbstractTransfer ? $this->revokedAt->toArray(true, false) : $this->revokedAt,
            'spy_oauth_client' => $this->spyOauthClient instanceof AbstractTransfer ? $this->spyOauthClient->toArray(true, false) : $this->spyOauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOauthRefreshToken' => $this->idOauthRefreshToken instanceof AbstractTransfer ? $this->idOauthRefreshToken->toArray(true, true) : $this->idOauthRefreshToken,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'userIdentifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, true) : $this->userIdentifier,
            'fkOauthClient' => $this->fkOauthClient instanceof AbstractTransfer ? $this->fkOauthClient->toArray(true, true) : $this->fkOauthClient,
            'expiresAt' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, true) : $this->expiresAt,
            'revokedAt' => $this->revokedAt instanceof AbstractTransfer ? $this->revokedAt->toArray(true, true) : $this->revokedAt,
            'spyOauthClient' => $this->spyOauthClient instanceof AbstractTransfer ? $this->spyOauthClient->toArray(true, true) : $this->spyOauthClient,
        ];
    }
}
