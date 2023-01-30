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
class OauthTokenCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const IS_REVOKED = 'isRevoked';

    /**
     * @var string
     */
    public const EXPIRES_AT = 'expiresAt';

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var bool|null
     */
    protected $isRevoked;

    /**
     * @var string|null
     */
    protected $expiresAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'is_revoked' => 'isRevoked',
        'isRevoked' => 'isRevoked',
        'IsRevoked' => 'isRevoked',
        'expires_at' => 'expiresAt',
        'expiresAt' => 'expiresAt',
        'ExpiresAt' => 'expiresAt',
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
        self::IS_REVOKED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_revoked',
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
     * @param bool|null $isRevoked
     *
     * @return $this
     */
    public function setIsRevoked($isRevoked)
    {
        $this->isRevoked = $isRevoked;
        $this->modifiedProperties[self::IS_REVOKED] = true;

        return $this;
    }

    /**
     * @module OauthRevoke|Oauth
     *
     * @return bool|null
     */
    public function getIsRevoked()
    {
        return $this->isRevoked;
    }

    /**
     * @module OauthRevoke|Oauth
     *
     * @param bool|null $isRevoked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRevokedOrFail($isRevoked)
    {
        if ($isRevoked === null) {
            $this->throwNullValueException(static::IS_REVOKED);
        }

        return $this->setIsRevoked($isRevoked);
    }

    /**
     * @module OauthRevoke|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRevokedOrFail()
    {
        if ($this->isRevoked === null) {
            $this->throwNullValueException(static::IS_REVOKED);
        }

        return $this->isRevoked;
    }

    /**
     * @module OauthRevoke|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRevoked()
    {
        $this->assertPropertyIsSet(self::IS_REVOKED);

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
                case 'customerReference':
                case 'isRevoked':
                case 'expiresAt':
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
                case 'customerReference':
                case 'isRevoked':
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
                case 'identifier':
                case 'customerReference':
                case 'isRevoked':
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
            'identifier' => $this->identifier,
            'customerReference' => $this->customerReference,
            'isRevoked' => $this->isRevoked,
            'expiresAt' => $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'customer_reference' => $this->customerReference,
            'is_revoked' => $this->isRevoked,
            'expires_at' => $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'is_revoked' => $this->isRevoked instanceof AbstractTransfer ? $this->isRevoked->toArray(true, false) : $this->isRevoked,
            'expires_at' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, false) : $this->expiresAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'isRevoked' => $this->isRevoked instanceof AbstractTransfer ? $this->isRevoked->toArray(true, true) : $this->isRevoked,
            'expiresAt' => $this->expiresAt instanceof AbstractTransfer ? $this->expiresAt->toArray(true, true) : $this->expiresAt,
        ];
    }
}
