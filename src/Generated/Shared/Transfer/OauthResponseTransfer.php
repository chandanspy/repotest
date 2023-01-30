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
class OauthResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_VALID = 'isValid';

    /**
     * @var string
     */
    public const ANONYMOUS_CUSTOMER_REFERENCE = 'anonymousCustomerReference';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const ERROR = 'error';

    /**
     * @var string
     */
    public const ACCESS_TOKEN = 'accessToken';

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
    public const REFRESH_TOKEN = 'refreshToken';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var bool|null
     */
    protected $isValid;

    /**
     * @var string|null
     */
    protected $anonymousCustomerReference;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\OauthErrorTransfer|null
     */
    protected $error;

    /**
     * @var string|null
     */
    protected $accessToken;

    /**
     * @var string|null
     */
    protected $tokenType;

    /**
     * @var int|null
     */
    protected $expiresIn;

    /**
     * @var string|null
     */
    protected $refreshToken;

    /**
     * @var string|null
     */
    protected $idCompanyUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_valid' => 'isValid',
        'isValid' => 'isValid',
        'IsValid' => 'isValid',
        'anonymous_customer_reference' => 'anonymousCustomerReference',
        'anonymousCustomerReference' => 'anonymousCustomerReference',
        'AnonymousCustomerReference' => 'anonymousCustomerReference',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'error' => 'error',
        'Error' => 'error',
        'access_token' => 'accessToken',
        'accessToken' => 'accessToken',
        'AccessToken' => 'accessToken',
        'token_type' => 'tokenType',
        'tokenType' => 'tokenType',
        'TokenType' => 'tokenType',
        'expires_in' => 'expiresIn',
        'expiresIn' => 'expiresIn',
        'ExpiresIn' => 'expiresIn',
        'refresh_token' => 'refreshToken',
        'refreshToken' => 'refreshToken',
        'RefreshToken' => 'refreshToken',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_VALID => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_valid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ANONYMOUS_CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'anonymous_customer_reference',
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
        self::ERROR => [
            'type' => 'Generated\Shared\Transfer\OauthErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'error',
            'is_collection' => false,
            'is_transfer' => true,
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
            'type' => 'int',
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
        self::ID_COMPANY_USER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
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
     * @module AgentAuthRestApi|AuthRestApi|CompanyUserAuthRestApi|Oauth
     *
     * @param bool|null $isValid
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
        $this->modifiedProperties[self::IS_VALID] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|CompanyUserAuthRestApi|Oauth
     *
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|CompanyUserAuthRestApi|Oauth
     *
     * @param bool|null $isValid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsValidOrFail($isValid)
    {
        if ($isValid === null) {
            $this->throwNullValueException(static::IS_VALID);
        }

        return $this->setIsValid($isValid);
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|CompanyUserAuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsValidOrFail()
    {
        if ($this->isValid === null) {
            $this->throwNullValueException(static::IS_VALID);
        }

        return $this->isValid;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|CompanyUserAuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsValid()
    {
        $this->assertPropertyIsSet(self::IS_VALID);

        return $this;
    }

    /**
     * @module AuthRestApi|CartsRestApi
     *
     * @param string|null $anonymousCustomerReference
     *
     * @return $this
     */
    public function setAnonymousCustomerReference($anonymousCustomerReference)
    {
        $this->anonymousCustomerReference = $anonymousCustomerReference;
        $this->modifiedProperties[self::ANONYMOUS_CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|CartsRestApi
     *
     * @return string|null
     */
    public function getAnonymousCustomerReference()
    {
        return $this->anonymousCustomerReference;
    }

    /**
     * @module AuthRestApi|CartsRestApi
     *
     * @param string|null $anonymousCustomerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnonymousCustomerReferenceOrFail($anonymousCustomerReference)
    {
        if ($anonymousCustomerReference === null) {
            $this->throwNullValueException(static::ANONYMOUS_CUSTOMER_REFERENCE);
        }

        return $this->setAnonymousCustomerReference($anonymousCustomerReference);
    }

    /**
     * @module AuthRestApi|CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAnonymousCustomerReferenceOrFail()
    {
        if ($this->anonymousCustomerReference === null) {
            $this->throwNullValueException(static::ANONYMOUS_CUSTOMER_REFERENCE);
        }

        return $this->anonymousCustomerReference;
    }

    /**
     * @module AuthRestApi|CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnonymousCustomerReference()
    {
        $this->assertPropertyIsSet(self::ANONYMOUS_CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module AuthRestApi|CartsRestApi
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
     * @module AuthRestApi|CartsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module AuthRestApi|CartsRestApi
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
     * @module AuthRestApi|CartsRestApi
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
     * @module AuthRestApi|CartsRestApi
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
     * @module AuthRestApi|Oauth
     *
     * @param \Generated\Shared\Transfer\OauthErrorTransfer|null $error
     *
     * @return $this
     */
    public function setError(OauthErrorTransfer $error = null)
    {
        $this->error = $error;
        $this->modifiedProperties[self::ERROR] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @return \Generated\Shared\Transfer\OauthErrorTransfer|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @param \Generated\Shared\Transfer\OauthErrorTransfer $error
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorOrFail(OauthErrorTransfer $error)
    {
        return $this->setError($error);
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OauthErrorTransfer
     */
    public function getErrorOrFail()
    {
        if ($this->error === null) {
            $this->throwNullValueException(static::ERROR);
        }

        return $this->error;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireError()
    {
        $this->assertPropertyIsSet(self::ERROR);

        return $this;
    }

    /**
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
     *
     * @param int|null $expiresIn
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
     * @module AuthRestApi|Oauth
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @module AuthRestApi|Oauth
     *
     * @param int|null $expiresIn
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
     * @module AuthRestApi|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getExpiresInOrFail()
    {
        if ($this->expiresIn === null) {
            $this->throwNullValueException(static::EXPIRES_IN);
        }

        return $this->expiresIn;
    }

    /**
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module AuthRestApi|Oauth
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
     * @module CompanyUsersRestApi
     *
     * @param string|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return string|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param string|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

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
                case 'isValid':
                case 'anonymousCustomerReference':
                case 'customerReference':
                case 'accessToken':
                case 'tokenType':
                case 'expiresIn':
                case 'refreshToken':
                case 'idCompanyUser':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'error':
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
                case 'isValid':
                case 'anonymousCustomerReference':
                case 'customerReference':
                case 'accessToken':
                case 'tokenType':
                case 'expiresIn':
                case 'refreshToken':
                case 'idCompanyUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'error':
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
                case 'isValid':
                case 'anonymousCustomerReference':
                case 'customerReference':
                case 'accessToken':
                case 'tokenType':
                case 'expiresIn':
                case 'refreshToken':
                case 'idCompanyUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'error':
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
            'isValid' => $this->isValid,
            'anonymousCustomerReference' => $this->anonymousCustomerReference,
            'customerReference' => $this->customerReference,
            'accessToken' => $this->accessToken,
            'tokenType' => $this->tokenType,
            'expiresIn' => $this->expiresIn,
            'refreshToken' => $this->refreshToken,
            'idCompanyUser' => $this->idCompanyUser,
            'error' => $this->error,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_valid' => $this->isValid,
            'anonymous_customer_reference' => $this->anonymousCustomerReference,
            'customer_reference' => $this->customerReference,
            'access_token' => $this->accessToken,
            'token_type' => $this->tokenType,
            'expires_in' => $this->expiresIn,
            'refresh_token' => $this->refreshToken,
            'id_company_user' => $this->idCompanyUser,
            'error' => $this->error,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_valid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, false) : $this->isValid,
            'anonymous_customer_reference' => $this->anonymousCustomerReference instanceof AbstractTransfer ? $this->anonymousCustomerReference->toArray(true, false) : $this->anonymousCustomerReference,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'access_token' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, false) : $this->accessToken,
            'token_type' => $this->tokenType instanceof AbstractTransfer ? $this->tokenType->toArray(true, false) : $this->tokenType,
            'expires_in' => $this->expiresIn instanceof AbstractTransfer ? $this->expiresIn->toArray(true, false) : $this->expiresIn,
            'refresh_token' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, false) : $this->refreshToken,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'error' => $this->error instanceof AbstractTransfer ? $this->error->toArray(true, false) : $this->error,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isValid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, true) : $this->isValid,
            'anonymousCustomerReference' => $this->anonymousCustomerReference instanceof AbstractTransfer ? $this->anonymousCustomerReference->toArray(true, true) : $this->anonymousCustomerReference,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'accessToken' => $this->accessToken instanceof AbstractTransfer ? $this->accessToken->toArray(true, true) : $this->accessToken,
            'tokenType' => $this->tokenType instanceof AbstractTransfer ? $this->tokenType->toArray(true, true) : $this->tokenType,
            'expiresIn' => $this->expiresIn instanceof AbstractTransfer ? $this->expiresIn->toArray(true, true) : $this->expiresIn,
            'refreshToken' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, true) : $this->refreshToken,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'error' => $this->error instanceof AbstractTransfer ? $this->error->toArray(true, true) : $this->error,
        ];
    }
}
