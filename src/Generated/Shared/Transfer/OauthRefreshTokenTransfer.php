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
class OauthRefreshTokenTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const ID_OAUTH_CLIENT = 'idOauthClient';

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
    public const EXPIRES_AT = 'expiresAt';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var string
     */
    public const ACCESS_TOKEN_IDENTIFIER = 'accessTokenIdentifier';

    /**
     * @var string
     */
    public const REVOKED_AT = 'revokedAt';

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $idOauthClient;

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
    protected $expiresAt;

    /**
     * @var string|null
     */
    protected $scopes;

    /**
     * @var string|null
     */
    protected $accessTokenIdentifier;

    /**
     * @var string|null
     */
    protected $revokedAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'id_oauth_client' => 'idOauthClient',
        'idOauthClient' => 'idOauthClient',
        'IdOauthClient' => 'idOauthClient',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'user_identifier' => 'userIdentifier',
        'userIdentifier' => 'userIdentifier',
        'UserIdentifier' => 'userIdentifier',
        'expires_at' => 'expiresAt',
        'expiresAt' => 'expiresAt',
        'ExpiresAt' => 'expiresAt',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'access_token_identifier' => 'accessTokenIdentifier',
        'accessTokenIdentifier' => 'accessTokenIdentifier',
        'AccessTokenIdentifier' => 'accessTokenIdentifier',
        'revoked_at' => 'revokedAt',
        'revokedAt' => 'revokedAt',
        'RevokedAt' => 'revokedAt',
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
        self::ID_OAUTH_CLIENT => [
            'type' => 'string',
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
        self::ACCESS_TOKEN_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'access_token_identifier',
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
    ];

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @param string|null $idOauthClient
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getIdOauthClient()
    {
        return $this->idOauthClient;
    }

    /**
     * @module OauthRevoke|Oauth
     *
     * @param string|null $idOauthClient
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
     * @module OauthRevoke|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOauthClientOrFail()
    {
        if ($this->idOauthClient === null) {
            $this->throwNullValueException(static::ID_OAUTH_CLIENT);
        }

        return $this->idOauthClient;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
     *
     * @return string|null
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module OauthRevoke|Oauth
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
     * @module Oauth
     *
     * @param string|null $accessTokenIdentifier
     *
     * @return $this
     */
    public function setAccessTokenIdentifier($accessTokenIdentifier)
    {
        $this->accessTokenIdentifier = $accessTokenIdentifier;
        $this->modifiedProperties[self::ACCESS_TOKEN_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getAccessTokenIdentifier()
    {
        return $this->accessTokenIdentifier;
    }

    /**
     * @module Oauth
     *
     * @param string|null $accessTokenIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenIdentifierOrFail($accessTokenIdentifier)
    {
        if ($accessTokenIdentifier === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_IDENTIFIER);
        }

        return $this->setAccessTokenIdentifier($accessTokenIdentifier);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAccessTokenIdentifierOrFail()
    {
        if ($this->accessTokenIdentifier === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_IDENTIFIER);
        }

        return $this->accessTokenIdentifier;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAccessTokenIdentifier()
    {
        $this->assertPropertyIsSet(self::ACCESS_TOKEN_IDENTIFIER);

        return $this;
    }

    /**
     * @module Oauth
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
     * @module Oauth
     *
     * @return string|null
     */
    public function getRevokedAt()
    {
        return $this->revokedAt;
    }

    /**
     * @module Oauth
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
     * @module Oauth
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
     * @module Oauth
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
                case 'idOauthClient':
                case 'customerReference':
                case 'userIdentifier':
                case 'expiresAt':
                case 'scopes':
                case 'accessTokenIdentifier':
                case 'revokedAt':
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
                case 'idOauthClient':
                case 'customerReference':
                case 'userIdentifier':
                case 'expiresAt':
                case 'scopes':
                case 'accessTokenIdentifier':
                case 'revokedAt':
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
                case 'idOauthClient':
                case 'customerReference':
                case 'userIdentifier':
                case 'expiresAt':
                case 'scopes':
                case 'accessTokenIdentifier':
                case 'revokedAt':
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
            'idOauthClient' => $this->idOauthClient,
            'customerReference' => $this->customerReference,
            'userIdentifier' => $this->userIdentifier,
            'expiresAt' => $this->expiresAt,
            'scopes' => $this->scopes,
            'accessTokenIdentifier' => $this->accessTokenIdentifier,
            'revokedAt' => $this->revokedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'id_oauth_client' => $this->idOauthClient,
            'customer_reference' => $this->customerReference,
            'user_identifier' => $this->userIdentifier,
            'expires_at' => $this->expiresAt,
            'scopes' => $this->scopes,
            'access_token_identifier' => $this->accessTokenIdentifier,
            'revoked_at' => $this->revokedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'id_oauth_client' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, false) : $this->idOauthClient,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'user_identifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, false) : $this->userIdentifier,
            'expires_at' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, false) : $this->expiresAt,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'access_token_identifier' => $this->accessTokenIdentifier instanceof AbstractTransfer ? $this->accessTokenIdentifier->toArray(true, false) : $this->accessTokenIdentifier,
            'revoked_at' => $this->revokedAt instanceof AbstractTransfer ? $this->revokedAt->toArray(true, false) : $this->revokedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'idOauthClient' => $this->idOauthClient instanceof AbstractTransfer ? $this->idOauthClient->toArray(true, true) : $this->idOauthClient,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'userIdentifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, true) : $this->userIdentifier,
            'expiresAt' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, true) : $this->expiresAt,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'accessTokenIdentifier' => $this->accessTokenIdentifier instanceof AbstractTransfer ? $this->accessTokenIdentifier->toArray(true, true) : $this->accessTokenIdentifier,
            'revokedAt' => $this->revokedAt instanceof AbstractTransfer ? $this->revokedAt->toArray(true, true) : $this->revokedAt,
        ];
    }
}
