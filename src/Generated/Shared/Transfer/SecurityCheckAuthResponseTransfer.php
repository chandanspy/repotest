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
class SecurityCheckAuthResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_BLOCKED = 'isBlocked';

    /**
     * @var string
     */
    public const BLOCKED_FOR = 'blockedFor';

    /**
     * @var string
     */
    public const NUMBER_OF_ATTEMPTS = 'numberOfAttempts';

    /**
     * @var string
     */
    public const SECURITY_CHECK_AUTH_CONTEXT = 'securityCheckAuthContext';

    /**
     * @var bool|null
     */
    protected $isBlocked;

    /**
     * @var int|null
     */
    protected $blockedFor;

    /**
     * @var int|null
     */
    protected $numberOfAttempts;

    /**
     * @var \Generated\Shared\Transfer\SecurityCheckAuthContextTransfer|null
     */
    protected $securityCheckAuthContext;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_blocked' => 'isBlocked',
        'isBlocked' => 'isBlocked',
        'IsBlocked' => 'isBlocked',
        'blocked_for' => 'blockedFor',
        'blockedFor' => 'blockedFor',
        'BlockedFor' => 'blockedFor',
        'number_of_attempts' => 'numberOfAttempts',
        'numberOfAttempts' => 'numberOfAttempts',
        'NumberOfAttempts' => 'numberOfAttempts',
        'security_check_auth_context' => 'securityCheckAuthContext',
        'securityCheckAuthContext' => 'securityCheckAuthContext',
        'SecurityCheckAuthContext' => 'securityCheckAuthContext',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_BLOCKED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_blocked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BLOCKED_FOR => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'blocked_for',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NUMBER_OF_ATTEMPTS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_attempts',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SECURITY_CHECK_AUTH_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\SecurityCheckAuthContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'security_check_auth_context',
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
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @param bool|null $isBlocked
     *
     * @return $this
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;
        $this->modifiedProperties[self::IS_BLOCKED] = true;

        return $this;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @return bool|null
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @param bool|null $isBlocked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsBlockedOrFail($isBlocked)
    {
        if ($isBlocked === null) {
            $this->throwNullValueException(static::IS_BLOCKED);
        }

        return $this->setIsBlocked($isBlocked);
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsBlockedOrFail()
    {
        if ($this->isBlocked === null) {
            $this->throwNullValueException(static::IS_BLOCKED);
        }

        return $this->isBlocked;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsBlocked()
    {
        $this->assertPropertyIsSet(self::IS_BLOCKED);

        return $this;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @param int|null $blockedFor
     *
     * @return $this
     */
    public function setBlockedFor($blockedFor)
    {
        $this->blockedFor = $blockedFor;
        $this->modifiedProperties[self::BLOCKED_FOR] = true;

        return $this;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @return int|null
     */
    public function getBlockedFor()
    {
        return $this->blockedFor;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @param int|null $blockedFor
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBlockedForOrFail($blockedFor)
    {
        if ($blockedFor === null) {
            $this->throwNullValueException(static::BLOCKED_FOR);
        }

        return $this->setBlockedFor($blockedFor);
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getBlockedForOrFail()
    {
        if ($this->blockedFor === null) {
            $this->throwNullValueException(static::BLOCKED_FOR);
        }

        return $this->blockedFor;
    }

    /**
     * @module SecurityBlockerPage|SecurityBlockerRestApi|SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlockedFor()
    {
        $this->assertPropertyIsSet(self::BLOCKED_FOR);

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @param int|null $numberOfAttempts
     *
     * @return $this
     */
    public function setNumberOfAttempts($numberOfAttempts)
    {
        $this->numberOfAttempts = $numberOfAttempts;
        $this->modifiedProperties[self::NUMBER_OF_ATTEMPTS] = true;

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @return int|null
     */
    public function getNumberOfAttempts()
    {
        return $this->numberOfAttempts;
    }

    /**
     * @module SecurityBlocker
     *
     * @param int|null $numberOfAttempts
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfAttemptsOrFail($numberOfAttempts)
    {
        if ($numberOfAttempts === null) {
            $this->throwNullValueException(static::NUMBER_OF_ATTEMPTS);
        }

        return $this->setNumberOfAttempts($numberOfAttempts);
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfAttemptsOrFail()
    {
        if ($this->numberOfAttempts === null) {
            $this->throwNullValueException(static::NUMBER_OF_ATTEMPTS);
        }

        return $this->numberOfAttempts;
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfAttempts()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_ATTEMPTS);

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @param \Generated\Shared\Transfer\SecurityCheckAuthContextTransfer|null $securityCheckAuthContext
     *
     * @return $this
     */
    public function setSecurityCheckAuthContext(SecurityCheckAuthContextTransfer $securityCheckAuthContext = null)
    {
        $this->securityCheckAuthContext = $securityCheckAuthContext;
        $this->modifiedProperties[self::SECURITY_CHECK_AUTH_CONTEXT] = true;

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @return \Generated\Shared\Transfer\SecurityCheckAuthContextTransfer|null
     */
    public function getSecurityCheckAuthContext()
    {
        return $this->securityCheckAuthContext;
    }

    /**
     * @module SecurityBlocker
     *
     * @param \Generated\Shared\Transfer\SecurityCheckAuthContextTransfer $securityCheckAuthContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSecurityCheckAuthContextOrFail(SecurityCheckAuthContextTransfer $securityCheckAuthContext)
    {
        return $this->setSecurityCheckAuthContext($securityCheckAuthContext);
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SecurityCheckAuthContextTransfer
     */
    public function getSecurityCheckAuthContextOrFail()
    {
        if ($this->securityCheckAuthContext === null) {
            $this->throwNullValueException(static::SECURITY_CHECK_AUTH_CONTEXT);
        }

        return $this->securityCheckAuthContext;
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSecurityCheckAuthContext()
    {
        $this->assertPropertyIsSet(self::SECURITY_CHECK_AUTH_CONTEXT);

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
                case 'isBlocked':
                case 'blockedFor':
                case 'numberOfAttempts':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'securityCheckAuthContext':
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
                case 'isBlocked':
                case 'blockedFor':
                case 'numberOfAttempts':
                    $values[$arrayKey] = $value;

                    break;
                case 'securityCheckAuthContext':
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
                case 'isBlocked':
                case 'blockedFor':
                case 'numberOfAttempts':
                    $values[$arrayKey] = $value;

                    break;
                case 'securityCheckAuthContext':
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
            'isBlocked' => $this->isBlocked,
            'blockedFor' => $this->blockedFor,
            'numberOfAttempts' => $this->numberOfAttempts,
            'securityCheckAuthContext' => $this->securityCheckAuthContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_blocked' => $this->isBlocked,
            'blocked_for' => $this->blockedFor,
            'number_of_attempts' => $this->numberOfAttempts,
            'security_check_auth_context' => $this->securityCheckAuthContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_blocked' => $this->isBlocked instanceof AbstractTransfer ? $this->isBlocked->toArray(true, false) : $this->isBlocked,
            'blocked_for' => $this->blockedFor instanceof AbstractTransfer ? $this->blockedFor->toArray(true, false) : $this->blockedFor,
            'number_of_attempts' => $this->numberOfAttempts instanceof AbstractTransfer ? $this->numberOfAttempts->toArray(true, false) : $this->numberOfAttempts,
            'security_check_auth_context' => $this->securityCheckAuthContext instanceof AbstractTransfer ? $this->securityCheckAuthContext->toArray(true, false) : $this->securityCheckAuthContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isBlocked' => $this->isBlocked instanceof AbstractTransfer ? $this->isBlocked->toArray(true, true) : $this->isBlocked,
            'blockedFor' => $this->blockedFor instanceof AbstractTransfer ? $this->blockedFor->toArray(true, true) : $this->blockedFor,
            'numberOfAttempts' => $this->numberOfAttempts instanceof AbstractTransfer ? $this->numberOfAttempts->toArray(true, true) : $this->numberOfAttempts,
            'securityCheckAuthContext' => $this->securityCheckAuthContext instanceof AbstractTransfer ? $this->securityCheckAuthContext->toArray(true, true) : $this->securityCheckAuthContext,
        ];
    }
}
