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
class SpyOauthClientAccessTokenCacheEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE = 'idSpyOauthClientAccessTokenCache';

    /**
     * @var string
     */
    public const CACHE_KEY = 'cacheKey';

    /**
     * @var string
     */
    public const ACCESS_TOKEN = 'accessToken';

    /**
     * @var string
     */
    public const EXPIRES_AT = 'expiresAt';

    /**
     * @var integer|null
     */
    protected $idSpyOauthClientAccessTokenCache;

    /**
     * @var string|null
     */
    protected $cacheKey;

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
        'id_spy_oauth_client_access_token_cache' => 'idSpyOauthClientAccessTokenCache',
        'idSpyOauthClientAccessTokenCache' => 'idSpyOauthClientAccessTokenCache',
        'IdSpyOauthClientAccessTokenCache' => 'idSpyOauthClientAccessTokenCache',
        'cache_key' => 'cacheKey',
        'cacheKey' => 'cacheKey',
        'CacheKey' => 'cacheKey',
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
        self::ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_spy_oauth_client_access_token_cache',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CACHE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cache_key',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\OauthClient\Persistence\SpyOauthClientAccessTokenCache';


    /**
     * @module 
     *
     * @param integer|null $idSpyOauthClientAccessTokenCache
     *
     * @return $this
     */
    public function setIdSpyOauthClientAccessTokenCache($idSpyOauthClientAccessTokenCache)
    {
        $this->idSpyOauthClientAccessTokenCache = $idSpyOauthClientAccessTokenCache;
        $this->modifiedProperties[self::ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSpyOauthClientAccessTokenCache()
    {
        return $this->idSpyOauthClientAccessTokenCache;
    }

    /**
     * @module 
     *
     * @param integer|null $idSpyOauthClientAccessTokenCache
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSpyOauthClientAccessTokenCacheOrFail($idSpyOauthClientAccessTokenCache)
    {
        if ($idSpyOauthClientAccessTokenCache === null) {
            $this->throwNullValueException(static::ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE);
        }

        return $this->setIdSpyOauthClientAccessTokenCache($idSpyOauthClientAccessTokenCache);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSpyOauthClientAccessTokenCacheOrFail()
    {
        if ($this->idSpyOauthClientAccessTokenCache === null) {
            $this->throwNullValueException(static::ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE);
        }

        return $this->idSpyOauthClientAccessTokenCache;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSpyOauthClientAccessTokenCache()
    {
        $this->assertPropertyIsSet(self::ID_SPY_OAUTH_CLIENT_ACCESS_TOKEN_CACHE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $cacheKey
     *
     * @return $this
     */
    public function setCacheKey($cacheKey)
    {
        $this->cacheKey = $cacheKey;
        $this->modifiedProperties[self::CACHE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCacheKey()
    {
        return $this->cacheKey;
    }

    /**
     * @module 
     *
     * @param string|null $cacheKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCacheKeyOrFail($cacheKey)
    {
        if ($cacheKey === null) {
            $this->throwNullValueException(static::CACHE_KEY);
        }

        return $this->setCacheKey($cacheKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCacheKeyOrFail()
    {
        if ($this->cacheKey === null) {
            $this->throwNullValueException(static::CACHE_KEY);
        }

        return $this->cacheKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCacheKey()
    {
        $this->assertPropertyIsSet(self::CACHE_KEY);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
                case 'idSpyOauthClientAccessTokenCache':
                case 'cacheKey':
                case 'accessToken':
                case 'expiresAt':
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
                case 'idSpyOauthClientAccessTokenCache':
                case 'cacheKey':
                case 'accessToken':
                case 'expiresAt':
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
                case 'idSpyOauthClientAccessTokenCache':
                case 'cacheKey':
                case 'accessToken':
                case 'expiresAt':
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
            'idSpyOauthClientAccessTokenCache' => $this->idSpyOauthClientAccessTokenCache,
            'cacheKey' => $this->cacheKey,
            'accessToken' => $this->accessToken,
            'expiresAt' => $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_spy_oauth_client_access_token_cache' => $this->idSpyOauthClientAccessTokenCache,
            'cache_key' => $this->cacheKey,
            'access_token' => $this->accessToken,
            'expires_at' => $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_spy_oauth_client_access_token_cache' => $this->idSpyOauthClientAccessTokenCache instanceof AbstractTransfer ? $this->idSpyOauthClientAccessTokenCache->toArray(true, false) : $this->idSpyOauthClientAccessTokenCache,
            'cache_key' => $this->cacheKey instanceof AbstractTransfer ? $this->cacheKey->toArray(true, false) : $this->cacheKey,
            'access_token' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, false) : $this->accessToken,
            'expires_at' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, false) : $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSpyOauthClientAccessTokenCache' => $this->idSpyOauthClientAccessTokenCache instanceof AbstractTransfer ? $this->idSpyOauthClientAccessTokenCache->toArray(true, true) : $this->idSpyOauthClientAccessTokenCache,
            'cacheKey' => $this->cacheKey instanceof AbstractTransfer ? $this->cacheKey->toArray(true, true) : $this->cacheKey,
            'accessToken' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, true) : $this->accessToken,
            'expiresAt' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, true) : $this->expiresAt,
        ];
    }
}
