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
class RestAgentAccessTokensAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TOKEN_TYPE = 'tokenType';

    /**
     * @var string
     */
    public const EXPIRES_IN = 'expiresIn';

    /**
     * @var string
     */
    public const ACCESS_TOKEN = 'accessToken';

    /**
     * @var string
     */
    public const REFRESH_TOKEN = 'refreshToken';

    /**
     * @var string|null
     */
    protected $tokenType;

    /**
     * @var string|null
     */
    protected $expiresIn;

    /**
     * @var string|null
     */
    protected $accessToken;

    /**
     * @var string|null
     */
    protected $refreshToken;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'token_type' => 'tokenType',
        'tokenType' => 'tokenType',
        'TokenType' => 'tokenType',
        'expires_in' => 'expiresIn',
        'expiresIn' => 'expiresIn',
        'ExpiresIn' => 'expiresIn',
        'access_token' => 'accessToken',
        'accessToken' => 'accessToken',
        'AccessToken' => 'accessToken',
        'refresh_token' => 'refreshToken',
        'refreshToken' => 'refreshToken',
        'RefreshToken' => 'refreshToken',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TOKEN_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'token_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPIRES_IN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expires_in',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCESS_TOKEN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'access_token',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFRESH_TOKEN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'refresh_token',
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
     * @module AgentAuthRestApi
     *
     * @param string|null $tokenType
     *
     * @return $this
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
        $this->modifiedProperties[self::TOKEN_TYPE] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $tokenType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTokenTypeOrFail($tokenType)
    {
        if ($tokenType === null) {
            $this->throwNullValueException(static::TOKEN_TYPE);
        }

        return $this->setTokenType($tokenType);
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTokenTypeOrFail()
    {
        if ($this->tokenType === null) {
            $this->throwNullValueException(static::TOKEN_TYPE);
        }

        return $this->tokenType;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTokenType()
    {
        $this->assertPropertyIsSet(self::TOKEN_TYPE);

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $expiresIn
     *
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
        $this->modifiedProperties[self::EXPIRES_IN] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @return string|null
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $expiresIn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiresInOrFail($expiresIn)
    {
        if ($expiresIn === null) {
            $this->throwNullValueException(static::EXPIRES_IN);
        }

        return $this->setExpiresIn($expiresIn);
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiresInOrFail()
    {
        if ($this->expiresIn === null) {
            $this->throwNullValueException(static::EXPIRES_IN);
        }

        return $this->expiresIn;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpiresIn()
    {
        $this->assertPropertyIsSet(self::EXPIRES_IN);

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->modifiedProperties[self::ACCESS_TOKEN] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $accessToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenOrFail($accessToken)
    {
        if ($accessToken === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN);
        }

        return $this->setAccessToken($accessToken);
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAccessTokenOrFail()
    {
        if ($this->accessToken === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN);
        }

        return $this->accessToken;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAccessToken()
    {
        $this->assertPropertyIsSet(self::ACCESS_TOKEN);

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        $this->modifiedProperties[self::REFRESH_TOKEN] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param string|null $refreshToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefreshTokenOrFail($refreshToken)
    {
        if ($refreshToken === null) {
            $this->throwNullValueException(static::REFRESH_TOKEN);
        }

        return $this->setRefreshToken($refreshToken);
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefreshTokenOrFail()
    {
        if ($this->refreshToken === null) {
            $this->throwNullValueException(static::REFRESH_TOKEN);
        }

        return $this->refreshToken;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefreshToken()
    {
        $this->assertPropertyIsSet(self::REFRESH_TOKEN);

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
                case 'tokenType':
                case 'expiresIn':
                case 'accessToken':
                case 'refreshToken':
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
                case 'tokenType':
                case 'expiresIn':
                case 'accessToken':
                case 'refreshToken':
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
                case 'tokenType':
                case 'expiresIn':
                case 'accessToken':
                case 'refreshToken':
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
            'tokenType' => $this->tokenType,
            'expiresIn' => $this->expiresIn,
            'accessToken' => $this->accessToken,
            'refreshToken' => $this->refreshToken,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'token_type' => $this->tokenType,
            'expires_in' => $this->expiresIn,
            'access_token' => $this->accessToken,
            'refresh_token' => $this->refreshToken,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'token_type' => $this->tokenType instanceof AbstractTransfer ? $this->tokenType->toArray(true, false) : $this->tokenType,
            'expires_in' => $this->expiresIn instanceof AbstractTransfer ? $this->expiresIn->toArray(true, false) : $this->expiresIn,
            'access_token' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, false) : $this->accessToken,
            'refresh_token' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, false) : $this->refreshToken,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'tokenType' => $this->tokenType instanceof AbstractTransfer ? $this->tokenType->toArray(true, true) : $this->tokenType,
            'expiresIn' => $this->expiresIn instanceof AbstractTransfer ? $this->expiresIn->toArray(true, true) : $this->expiresIn,
            'accessToken' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, true) : $this->accessToken,
            'refreshToken' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, true) : $this->refreshToken,
        ];
    }
}
