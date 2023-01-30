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
class OauthAccessTokenDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OAUTH_USER_ID = 'oauthUserId';

    /**
     * @var string
     */
    public const OAUTH_SCOPES = 'oauthScopes';

    /**
     * @var string
     */
    public const OAUTH_ACCESS_TOKEN_ID = 'oauthAccessTokenId';

    /**
     * @var string
     */
    public const OAUTH_CLIENT_ID = 'oauthClientId';

    /**
     * @var string|null
     */
    protected $oauthUserId;

    /**
     * @var array
     */
    protected $oauthScopes = [];

    /**
     * @var string|null
     */
    protected $oauthAccessTokenId;

    /**
     * @var string|null
     */
    protected $oauthClientId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'oauth_user_id' => 'oauthUserId',
        'oauthUserId' => 'oauthUserId',
        'OauthUserId' => 'oauthUserId',
        'oauth_scopes' => 'oauthScopes',
        'oauthScopes' => 'oauthScopes',
        'OauthScopes' => 'oauthScopes',
        'oauth_access_token_id' => 'oauthAccessTokenId',
        'oauthAccessTokenId' => 'oauthAccessTokenId',
        'OauthAccessTokenId' => 'oauthAccessTokenId',
        'oauth_client_id' => 'oauthClientId',
        'oauthClientId' => 'oauthClientId',
        'OauthClientId' => 'oauthClientId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OAUTH_USER_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'oauth_user_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OAUTH_SCOPES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'oauth_scopes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OAUTH_ACCESS_TOKEN_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'oauth_access_token_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OAUTH_CLIENT_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'oauth_client_id',
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
     * @module AgentAuthRestApi|AuthRestApi|OauthPermission|Oauth
     *
     * @param string|null $oauthUserId
     *
     * @return $this
     */
    public function setOauthUserId($oauthUserId)
    {
        $this->oauthUserId = $oauthUserId;
        $this->modifiedProperties[self::OAUTH_USER_ID] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthPermission|Oauth
     *
     * @return string|null
     */
    public function getOauthUserId()
    {
        return $this->oauthUserId;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthPermission|Oauth
     *
     * @param string|null $oauthUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOauthUserIdOrFail($oauthUserId)
    {
        if ($oauthUserId === null) {
            $this->throwNullValueException(static::OAUTH_USER_ID);
        }

        return $this->setOauthUserId($oauthUserId);
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthPermission|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOauthUserIdOrFail()
    {
        if ($this->oauthUserId === null) {
            $this->throwNullValueException(static::OAUTH_USER_ID);
        }

        return $this->oauthUserId;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthPermission|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthUserId()
    {
        $this->assertPropertyIsSet(self::OAUTH_USER_ID);

        return $this;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @param array|null $oauthScopes
     *
     * @return $this
     */
    public function setOauthScopes(array $oauthScopes = null)
    {
        if ($oauthScopes === null) {
            $oauthScopes = [];
        }

        $this->oauthScopes = $oauthScopes;
        $this->modifiedProperties[self::OAUTH_SCOPES] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @return array
     */
    public function getOauthScopes()
    {
        return $this->oauthScopes;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @param mixed $oauthScopes
     *
     * @return $this
     */
    public function addOauthScopes($oauthScopes)
    {
        $this->oauthScopes[] = $oauthScopes;
        $this->modifiedProperties[self::OAUTH_SCOPES] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthScopes()
    {
        $this->assertPropertyIsSet(self::OAUTH_SCOPES);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $oauthAccessTokenId
     *
     * @return $this
     */
    public function setOauthAccessTokenId($oauthAccessTokenId)
    {
        $this->oauthAccessTokenId = $oauthAccessTokenId;
        $this->modifiedProperties[self::OAUTH_ACCESS_TOKEN_ID] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getOauthAccessTokenId()
    {
        return $this->oauthAccessTokenId;
    }

    /**
     * @module Oauth
     *
     * @param string|null $oauthAccessTokenId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOauthAccessTokenIdOrFail($oauthAccessTokenId)
    {
        if ($oauthAccessTokenId === null) {
            $this->throwNullValueException(static::OAUTH_ACCESS_TOKEN_ID);
        }

        return $this->setOauthAccessTokenId($oauthAccessTokenId);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOauthAccessTokenIdOrFail()
    {
        if ($this->oauthAccessTokenId === null) {
            $this->throwNullValueException(static::OAUTH_ACCESS_TOKEN_ID);
        }

        return $this->oauthAccessTokenId;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthAccessTokenId()
    {
        $this->assertPropertyIsSet(self::OAUTH_ACCESS_TOKEN_ID);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $oauthClientId
     *
     * @return $this
     */
    public function setOauthClientId($oauthClientId)
    {
        $this->oauthClientId = $oauthClientId;
        $this->modifiedProperties[self::OAUTH_CLIENT_ID] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getOauthClientId()
    {
        return $this->oauthClientId;
    }

    /**
     * @module Oauth
     *
     * @param string|null $oauthClientId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOauthClientIdOrFail($oauthClientId)
    {
        if ($oauthClientId === null) {
            $this->throwNullValueException(static::OAUTH_CLIENT_ID);
        }

        return $this->setOauthClientId($oauthClientId);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOauthClientIdOrFail()
    {
        if ($this->oauthClientId === null) {
            $this->throwNullValueException(static::OAUTH_CLIENT_ID);
        }

        return $this->oauthClientId;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthClientId()
    {
        $this->assertPropertyIsSet(self::OAUTH_CLIENT_ID);

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
                case 'oauthUserId':
                case 'oauthScopes':
                case 'oauthAccessTokenId':
                case 'oauthClientId':
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
                case 'oauthUserId':
                case 'oauthScopes':
                case 'oauthAccessTokenId':
                case 'oauthClientId':
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
                case 'oauthUserId':
                case 'oauthScopes':
                case 'oauthAccessTokenId':
                case 'oauthClientId':
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
            'oauthUserId' => $this->oauthUserId,
            'oauthScopes' => $this->oauthScopes,
            'oauthAccessTokenId' => $this->oauthAccessTokenId,
            'oauthClientId' => $this->oauthClientId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'oauth_user_id' => $this->oauthUserId,
            'oauth_scopes' => $this->oauthScopes,
            'oauth_access_token_id' => $this->oauthAccessTokenId,
            'oauth_client_id' => $this->oauthClientId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'oauth_user_id' => $this->oauthUserId instanceof AbstractTransfer ? $this->oauthUserId->toArray(true, false) : $this->oauthUserId,
            'oauth_scopes' => $this->oauthScopes instanceof AbstractTransfer ? $this->oauthScopes->toArray(true, false) : $this->oauthScopes,
            'oauth_access_token_id' => $this->oauthAccessTokenId instanceof AbstractTransfer ? $this->oauthAccessTokenId->toArray(true, false) : $this->oauthAccessTokenId,
            'oauth_client_id' => $this->oauthClientId instanceof AbstractTransfer ? $this->oauthClientId->toArray(true, false) : $this->oauthClientId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'oauthUserId' => $this->oauthUserId instanceof AbstractTransfer ? $this->oauthUserId->toArray(true, true) : $this->oauthUserId,
            'oauthScopes' => $this->oauthScopes instanceof AbstractTransfer ? $this->oauthScopes->toArray(true, true) : $this->oauthScopes,
            'oauthAccessTokenId' => $this->oauthAccessTokenId instanceof AbstractTransfer ? $this->oauthAccessTokenId->toArray(true, true) : $this->oauthAccessTokenId,
            'oauthClientId' => $this->oauthClientId instanceof AbstractTransfer ? $this->oauthClientId->toArray(true, true) : $this->oauthClientId,
        ];
    }
}
