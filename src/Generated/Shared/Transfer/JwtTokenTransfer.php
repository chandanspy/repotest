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
class JwtTokenTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * @var string
     */
    public const CLAIMS = 'claims';

    /**
     * @var string
     */
    public const SIGNATURE = 'signature';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var array
     */
    protected $claims = [];

    /**
     * @var string|null
     */
    protected $signature;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'headers' => 'headers',
        'Headers' => 'headers',
        'claims' => 'claims',
        'Claims' => 'claims',
        'signature' => 'signature',
        'Signature' => 'signature',
        'payload' => 'payload',
        'Payload' => 'payload',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::HEADERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'headers',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLAIMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'claims',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SIGNATURE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'signature',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYLOAD => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'payload',
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
     * @module Oauth
     *
     * @param array|null $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers = null)
    {
        if ($headers === null) {
            $headers = [];
        }

        $this->headers = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @module Oauth
     *
     * @param mixed $headers
     *
     * @return $this
     */
    public function addHeaders($headers)
    {
        $this->headers[] = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeaders()
    {
        $this->assertPropertyIsSet(self::HEADERS);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param array|null $claims
     *
     * @return $this
     */
    public function setClaims(array $claims = null)
    {
        if ($claims === null) {
            $claims = [];
        }

        $this->claims = $claims;
        $this->modifiedProperties[self::CLAIMS] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return array
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * @module Oauth
     *
     * @param mixed $claims
     *
     * @return $this
     */
    public function addClaims($claims)
    {
        $this->claims[] = $claims;
        $this->modifiedProperties[self::CLAIMS] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClaims()
    {
        $this->assertPropertyIsSet(self::CLAIMS);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        $this->modifiedProperties[self::SIGNATURE] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @module Oauth
     *
     * @param string|null $signature
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSignatureOrFail($signature)
    {
        if ($signature === null) {
            $this->throwNullValueException(static::SIGNATURE);
        }

        return $this->setSignature($signature);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSignatureOrFail()
    {
        if ($this->signature === null) {
            $this->throwNullValueException(static::SIGNATURE);
        }

        return $this->signature;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSignature()
    {
        $this->assertPropertyIsSet(self::SIGNATURE);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param array|null $payload
     *
     * @return $this
     */
    public function setPayload(array $payload = null)
    {
        if ($payload === null) {
            $payload = [];
        }

        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @module Oauth
     *
     * @param mixed $payload
     *
     * @return $this
     */
    public function addPayload($payload)
    {
        $this->payload[] = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayload()
    {
        $this->assertPropertyIsSet(self::PAYLOAD);

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
                case 'headers':
                case 'claims':
                case 'signature':
                case 'payload':
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
                case 'headers':
                case 'claims':
                case 'signature':
                case 'payload':
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
                case 'headers':
                case 'claims':
                case 'signature':
                case 'payload':
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
            'headers' => $this->headers,
            'claims' => $this->claims,
            'signature' => $this->signature,
            'payload' => $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'headers' => $this->headers,
            'claims' => $this->claims,
            'signature' => $this->signature,
            'payload' => $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, false) : $this->headers,
            'claims' => $this->claims instanceof AbstractTransfer ? $this->claims->toArray(true, false) : $this->claims,
            'signature' => $this->signature instanceof AbstractTransfer ? $this->signature->toArray(true, false) : $this->signature,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, true) : $this->headers,
            'claims' => $this->claims instanceof AbstractTransfer ? $this->claims->toArray(true, true) : $this->claims,
            'signature' => $this->signature instanceof AbstractTransfer ? $this->signature->toArray(true, true) : $this->signature,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
        ];
    }
}
