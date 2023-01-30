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
class AccessTokenResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const ACCESS_TOKEN_ERROR = 'accessTokenError';

    /**
     * @var string
     */
    public const ACCESS_TOKEN = 'accessToken';

    /**
     * @var string
     */
    public const EXPIRES_AT = 'expiresAt';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \Generated\Shared\Transfer\AccessTokenErrorTransfer|null
     */
    protected $accessTokenError;

    /**
     * @var string|null
     */
    protected $accessToken;

    /**
     * @var string|null
     */
    protected $expiresAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'access_token_error' => 'accessTokenError',
        'accessTokenError' => 'accessTokenError',
        'AccessTokenError' => 'accessTokenError',
        'access_token' => 'accessToken',
        'accessToken' => 'accessToken',
        'AccessToken' => 'accessToken',
        'expires_at' => 'expiresAt',
        'expiresAt' => 'expiresAt',
        'ExpiresAt' => 'expiresAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ACCESS_TOKEN_ERROR => [
            'type' => 'Generated\Shared\Transfer\AccessTokenErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'access_token_error',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful(?bool $isSuccessful = null)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @return bool|null
     */
    public function getIsSuccessful(): ?bool
    {
        return $this->isSuccessful;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param bool $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail(bool $isSuccessful)
    {
        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail(): bool
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @param \Generated\Shared\Transfer\AccessTokenErrorTransfer|null $accessTokenError
     *
     * @return $this
     */
    public function setAccessTokenError(?AccessTokenErrorTransfer $accessTokenError = null)
    {
        $this->accessTokenError = $accessTokenError;
        $this->modifiedProperties[self::ACCESS_TOKEN_ERROR] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @return \Generated\Shared\Transfer\AccessTokenErrorTransfer|null
     */
    public function getAccessTokenError(): ?AccessTokenErrorTransfer
    {
        return $this->accessTokenError;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @param \Generated\Shared\Transfer\AccessTokenErrorTransfer $accessTokenError
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenErrorOrFail(AccessTokenErrorTransfer $accessTokenError)
    {
        return $this->setAccessTokenError($accessTokenError);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AccessTokenErrorTransfer
     */
    public function getAccessTokenErrorOrFail(): AccessTokenErrorTransfer
    {
        if ($this->accessTokenError === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_ERROR);
        }

        return $this->accessTokenError;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAccessTokenError()
    {
        $this->assertPropertyIsSet(self::ACCESS_TOKEN_ERROR);

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string|null $accessToken
     *
     * @return $this
     */
    public function setAccessToken(?string $accessToken = null)
    {
        $this->accessToken = $accessToken;
        $this->modifiedProperties[self::ACCESS_TOKEN] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string $accessToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenOrFail(string $accessToken)
    {
        return $this->setAccessToken($accessToken);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAccessTokenOrFail(): string
    {
        if ($this->accessToken === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN);
        }

        return $this->accessToken;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
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
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string|null $expiresAt
     *
     * @return $this
     */
    public function setExpiresAt(?string $expiresAt = null)
    {
        $this->expiresAt = $expiresAt;
        $this->modifiedProperties[self::EXPIRES_AT] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @return string|null
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string $expiresAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiresAtOrFail(string $expiresAt)
    {
        return $this->setExpiresAt($expiresAt);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiresAtOrFail(): string
    {
        if ($this->expiresAt === null) {
            $this->throwNullValueException(static::EXPIRES_AT);
        }

        return $this->expiresAt;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
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
                case 'isSuccessful':
                case 'accessToken':
                case 'expiresAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'accessTokenError':
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
                case 'isSuccessful':
                case 'accessToken':
                case 'expiresAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'accessTokenError':
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
                case 'isSuccessful':
                case 'accessToken':
                case 'expiresAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'accessTokenError':
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
            'isSuccessful' => $this->isSuccessful,
            'accessToken' => $this->accessToken,
            'expiresAt' => $this->expiresAt,
            'accessTokenError' => $this->accessTokenError,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'access_token' => $this->accessToken,
            'expires_at' => $this->expiresAt,
            'access_token_error' => $this->accessTokenError,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'access_token' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, false) : $this->accessToken,
            'expires_at' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, false) : $this->expiresAt,
            'access_token_error' => $this->accessTokenError instanceof AbstractTransfer ? $this->accessTokenError->toArray(true, false) : $this->accessTokenError,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'accessToken' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, true) : $this->accessToken,
            'expiresAt' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, true) : $this->expiresAt,
            'accessTokenError' => $this->accessTokenError instanceof AbstractTransfer ? $this->accessTokenError->toArray(true, true) : $this->accessTokenError,
        ];
    }
}
