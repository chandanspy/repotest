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
class PaymentAuthorizeRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AUTHORIZATION = 'authorization';

    /**
     * @var string
     */
    public const REQUEST_URL = 'requestUrl';

    /**
     * @var string
     */
    public const POST_DATA = 'postData';

    /**
     * @var string
     */
    public const STORE_REFERENCE = 'storeReference';

    /**
     * @var string|null
     */
    protected $authorization;

    /**
     * @var string|null
     */
    protected $requestUrl;

    /**
     * @var array
     */
    protected $postData = [];

    /**
     * @var string|null
     */
    protected $storeReference;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'authorization' => 'authorization',
        'Authorization' => 'authorization',
        'request_url' => 'requestUrl',
        'requestUrl' => 'requestUrl',
        'RequestUrl' => 'requestUrl',
        'post_data' => 'postData',
        'postData' => 'postData',
        'PostData' => 'postData',
        'store_reference' => 'storeReference',
        'storeReference' => 'storeReference',
        'StoreReference' => 'storeReference',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AUTHORIZATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'authorization',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'request_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POST_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'post_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_reference',
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
     * @module OauthClient|Payment
     *
     * @param string|null $authorization
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;
        $this->modifiedProperties[self::AUTHORIZATION] = true;

        return $this;
    }

    /**
     * @module OauthClient|Payment
     *
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @module OauthClient|Payment
     *
     * @param string|null $authorization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAuthorizationOrFail($authorization)
    {
        if ($authorization === null) {
            $this->throwNullValueException(static::AUTHORIZATION);
        }

        return $this->setAuthorization($authorization);
    }

    /**
     * @module OauthClient|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAuthorizationOrFail()
    {
        if ($this->authorization === null) {
            $this->throwNullValueException(static::AUTHORIZATION);
        }

        return $this->authorization;
    }

    /**
     * @module OauthClient|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAuthorization()
    {
        $this->assertPropertyIsSet(self::AUTHORIZATION);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string|null $requestUrl
     *
     * @return $this
     */
    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
        $this->modifiedProperties[self::REQUEST_URL] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * @module Payment
     *
     * @param string|null $requestUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestUrlOrFail($requestUrl)
    {
        if ($requestUrl === null) {
            $this->throwNullValueException(static::REQUEST_URL);
        }

        return $this->setRequestUrl($requestUrl);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestUrlOrFail()
    {
        if ($this->requestUrl === null) {
            $this->throwNullValueException(static::REQUEST_URL);
        }

        return $this->requestUrl;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestUrl()
    {
        $this->assertPropertyIsSet(self::REQUEST_URL);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param array $postData
     *
     * @return $this
     */
    public function setPostData($postData)
    {
        if ($postData === null) {
            $postData = [];
        }

        $this->postData = $postData;
        $this->modifiedProperties[self::POST_DATA] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return array
     */
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * @module Payment
     *
     * @param string|int $postValueKey
     * @param mixed $postValueValue
     *
     * @return $this
     */
    public function addPostValue($postValueKey, $postValueValue)
    {
        $this->postData[$postValueKey] = $postValueValue;
        $this->modifiedProperties[self::POST_DATA] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePostData()
    {
        $this->assertPropertyIsSet(self::POST_DATA);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string|null $storeReference
     *
     * @return $this
     */
    public function setStoreReference($storeReference)
    {
        $this->storeReference = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getStoreReference()
    {
        return $this->storeReference;
    }

    /**
     * @module Payment
     *
     * @param string|null $storeReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreReferenceOrFail($storeReference)
    {
        if ($storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->setStoreReference($storeReference);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreReferenceOrFail()
    {
        if ($this->storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->storeReference;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreReference()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCE);

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
                case 'authorization':
                case 'requestUrl':
                case 'postData':
                case 'storeReference':
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
                case 'authorization':
                case 'requestUrl':
                case 'postData':
                case 'storeReference':
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
                case 'authorization':
                case 'requestUrl':
                case 'postData':
                case 'storeReference':
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
            'authorization' => $this->authorization,
            'requestUrl' => $this->requestUrl,
            'postData' => $this->postData,
            'storeReference' => $this->storeReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'authorization' => $this->authorization,
            'request_url' => $this->requestUrl,
            'post_data' => $this->postData,
            'store_reference' => $this->storeReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, false) : $this->authorization,
            'request_url' => $this->requestUrl instanceof AbstractTransfer ? $this->requestUrl->toArray(true, false) : $this->requestUrl,
            'post_data' => $this->postData instanceof AbstractTransfer ? $this->postData->toArray(true, false) : $this->postData,
            'store_reference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, false) : $this->storeReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, true) : $this->authorization,
            'requestUrl' => $this->requestUrl instanceof AbstractTransfer ? $this->requestUrl->toArray(true, true) : $this->requestUrl,
            'postData' => $this->postData instanceof AbstractTransfer ? $this->postData->toArray(true, true) : $this->postData,
            'storeReference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, true) : $this->storeReference,
        ];
    }
}
