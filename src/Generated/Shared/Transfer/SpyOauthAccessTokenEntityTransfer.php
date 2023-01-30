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
class SpyOauthAccessTokenEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OAUTH_ACCESS_TOKEN = 'idOauthAccessToken';

    /**
     * @var string
     */
    public const FK_OAUTH_CLIENT = 'fkOauthClient';

    /**
     * @var string
     */
    public const EXPIRITY_DATE = 'expirityDate';

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
    public const USER_IDENTIFIER = 'userIdentifier';

    /**
     * @var string
     */
    public const OAUTH_CLIENT = 'oauthClient';

    /**
     * @var integer|null
     */
    protected $idOauthAccessToken;

    /**
     * @var string|null
     */
    protected $fkOauthClient;

    /**
     * @var string|null
     */
    protected $expirityDate;

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
    protected $userIdentifier;

    /**
     * @var \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null
     */
    protected $oauthClient;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oauth_access_token' => 'idOauthAccessToken',
        'idOauthAccessToken' => 'idOauthAccessToken',
        'IdOauthAccessToken' => 'idOauthAccessToken',
        'fk_oauth_client' => 'fkOauthClient',
        'fkOauthClient' => 'fkOauthClient',
        'FkOauthClient' => 'fkOauthClient',
        'expirity_date' => 'expirityDate',
        'expirityDate' => 'expirityDate',
        'ExpirityDate' => 'expirityDate',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'user_identifier' => 'userIdentifier',
        'userIdentifier' => 'userIdentifier',
        'UserIdentifier' => 'userIdentifier',
        'oauth_client' => 'oauthClient',
        'oauthClient' => 'oauthClient',
        'OauthClient' => 'oauthClient',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OAUTH_ACCESS_TOKEN => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_oauth_access_token',
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
        self::EXPIRITY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expirity_date',
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
        self::OAUTH_CLIENT => [
            'type' => 'Generated\Shared\Transfer\SpyOauthClientEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'oauth_client',
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
    public static $entityNamespace = 'Orm\Zed\Oauth\Persistence\SpyOauthAccessToken';


    /**
     * @module 
     *
     * @param integer|null $idOauthAccessToken
     *
     * @return $this
     */
    public function setIdOauthAccessToken($idOauthAccessToken)
    {
        $this->idOauthAccessToken = $idOauthAccessToken;
        $this->modifiedProperties[self::ID_OAUTH_ACCESS_TOKEN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdOauthAccessToken()
    {
        return $this->idOauthAccessToken;
    }

    /**
     * @module 
     *
     * @param integer|null $idOauthAccessToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOauthAccessTokenOrFail($idOauthAccessToken)
    {
        if ($idOauthAccessToken === null) {
            $this->throwNullValueException(static::ID_OAUTH_ACCESS_TOKEN);
        }

        return $this->setIdOauthAccessToken($idOauthAccessToken);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOauthAccessTokenOrFail()
    {
        if ($this->idOauthAccessToken === null) {
            $this->throwNullValueException(static::ID_OAUTH_ACCESS_TOKEN);
        }

        return $this->idOauthAccessToken;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOauthAccessToken()
    {
        $this->assertPropertyIsSet(self::ID_OAUTH_ACCESS_TOKEN);

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
     * @param string|null $expirityDate
     *
     * @return $this
     */
    public function setExpirityDate($expirityDate)
    {
        $this->expirityDate = $expirityDate;
        $this->modifiedProperties[self::EXPIRITY_DATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExpirityDate()
    {
        return $this->expirityDate;
    }

    /**
     * @module 
     *
     * @param string|null $expirityDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpirityDateOrFail($expirityDate)
    {
        if ($expirityDate === null) {
            $this->throwNullValueException(static::EXPIRITY_DATE);
        }

        return $this->setExpirityDate($expirityDate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpirityDateOrFail()
    {
        if ($this->expirityDate === null) {
            $this->throwNullValueException(static::EXPIRITY_DATE);
        }

        return $this->expirityDate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpirityDate()
    {
        $this->assertPropertyIsSet(self::EXPIRITY_DATE);

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
     * @param \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null $oauthClient
     *
     * @return $this
     */
    public function setOauthClient(SpyOauthClientEntityTransfer $oauthClient = null)
    {
        $this->oauthClient = $oauthClient;
        $this->modifiedProperties[self::OAUTH_CLIENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyOauthClientEntityTransfer|null
     */
    public function getOauthClient()
    {
        return $this->oauthClient;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOauthClientEntityTransfer $oauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOauthClientOrFail(SpyOauthClientEntityTransfer $oauthClient)
    {
        return $this->setOauthClient($oauthClient);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyOauthClientEntityTransfer
     */
    public function getOauthClientOrFail()
    {
        if ($this->oauthClient === null) {
            $this->throwNullValueException(static::OAUTH_CLIENT);
        }

        return $this->oauthClient;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthClient()
    {
        $this->assertPropertyIsSet(self::OAUTH_CLIENT);

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
                case 'idOauthAccessToken':
                case 'fkOauthClient':
                case 'expirityDate':
                case 'identifier':
                case 'scopes':
                case 'userIdentifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'oauthClient':
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
                case 'idOauthAccessToken':
                case 'fkOauthClient':
                case 'expirityDate':
                case 'identifier':
                case 'scopes':
                case 'userIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'oauthClient':
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
                case 'idOauthAccessToken':
                case 'fkOauthClient':
                case 'expirityDate':
                case 'identifier':
                case 'scopes':
                case 'userIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'oauthClient':
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
            'idOauthAccessToken' => $this->idOauthAccessToken,
            'fkOauthClient' => $this->fkOauthClient,
            'expirityDate' => $this->expirityDate,
            'identifier' => $this->identifier,
            'scopes' => $this->scopes,
            'userIdentifier' => $this->userIdentifier,
            'oauthClient' => $this->oauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_access_token' => $this->idOauthAccessToken,
            'fk_oauth_client' => $this->fkOauthClient,
            'expirity_date' => $this->expirityDate,
            'identifier' => $this->identifier,
            'scopes' => $this->scopes,
            'user_identifier' => $this->userIdentifier,
            'oauth_client' => $this->oauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oauth_access_token' => $this->idOauthAccessToken instanceof AbstractTransfer ? $this->idOauthAccessToken->toArray(true, false) : $this->idOauthAccessToken,
            'fk_oauth_client' => $this->fkOauthClient instanceof AbstractTransfer ? $this->fkOauthClient->toArray(true, false) : $this->fkOauthClient,
            'expirity_date' => $this->expirityDate instanceof AbstractTransfer ? $this->expirityDate->toArray(true, false) : $this->expirityDate,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'user_identifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, false) : $this->userIdentifier,
            'oauth_client' => $this->oauthClient instanceof AbstractTransfer ? $this->oauthClient->toArray(true, false) : $this->oauthClient,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOauthAccessToken' => $this->idOauthAccessToken instanceof AbstractTransfer ? $this->idOauthAccessToken->toArray(true, true) : $this->idOauthAccessToken,
            'fkOauthClient' => $this->fkOauthClient instanceof AbstractTransfer ? $this->fkOauthClient->toArray(true, true) : $this->fkOauthClient,
            'expirityDate' => $this->expirityDate instanceof AbstractTransfer ? $this->expirityDate->toArray(true, true) : $this->expirityDate,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'userIdentifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, true) : $this->userIdentifier,
            'oauthClient' => $this->oauthClient instanceof AbstractTransfer ? $this->oauthClient->toArray(true, true) : $this->oauthClient,
        ];
    }
}
