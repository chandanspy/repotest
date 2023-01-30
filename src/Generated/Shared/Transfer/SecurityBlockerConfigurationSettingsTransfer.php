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
class SecurityBlockerConfigurationSettingsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NUMBER_OF_ATTEMPTS = 'numberOfAttempts';

    /**
     * @var string
     */
    public const TTL = 'ttl';

    /**
     * @var string
     */
    public const BLOCK_FOR = 'blockFor';

    /**
     * @var int|null
     */
    protected $numberOfAttempts;

    /**
     * @var int|null
     */
    protected $ttl;

    /**
     * @var int|null
     */
    protected $blockFor;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'number_of_attempts' => 'numberOfAttempts',
        'numberOfAttempts' => 'numberOfAttempts',
        'NumberOfAttempts' => 'numberOfAttempts',
        'ttl' => 'ttl',
        'Ttl' => 'ttl',
        'block_for' => 'blockFor',
        'blockFor' => 'blockFor',
        'BlockFor' => 'blockFor',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TTL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'ttl',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BLOCK_FOR => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'block_for',
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
     * @param int|null $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
        $this->modifiedProperties[self::TTL] = true;

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @return int|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @module SecurityBlocker
     *
     * @param int|null $ttl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTtlOrFail($ttl)
    {
        if ($ttl === null) {
            $this->throwNullValueException(static::TTL);
        }

        return $this->setTtl($ttl);
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTtlOrFail()
    {
        if ($this->ttl === null) {
            $this->throwNullValueException(static::TTL);
        }

        return $this->ttl;
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTtl()
    {
        $this->assertPropertyIsSet(self::TTL);

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @param int|null $blockFor
     *
     * @return $this
     */
    public function setBlockFor($blockFor)
    {
        $this->blockFor = $blockFor;
        $this->modifiedProperties[self::BLOCK_FOR] = true;

        return $this;
    }

    /**
     * @module SecurityBlocker
     *
     * @return int|null
     */
    public function getBlockFor()
    {
        return $this->blockFor;
    }

    /**
     * @module SecurityBlocker
     *
     * @param int|null $blockFor
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBlockForOrFail($blockFor)
    {
        if ($blockFor === null) {
            $this->throwNullValueException(static::BLOCK_FOR);
        }

        return $this->setBlockFor($blockFor);
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getBlockForOrFail()
    {
        if ($this->blockFor === null) {
            $this->throwNullValueException(static::BLOCK_FOR);
        }

        return $this->blockFor;
    }

    /**
     * @module SecurityBlocker
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlockFor()
    {
        $this->assertPropertyIsSet(self::BLOCK_FOR);

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
                case 'numberOfAttempts':
                case 'ttl':
                case 'blockFor':
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
                case 'numberOfAttempts':
                case 'ttl':
                case 'blockFor':
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
                case 'numberOfAttempts':
                case 'ttl':
                case 'blockFor':
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
            'numberOfAttempts' => $this->numberOfAttempts,
            'ttl' => $this->ttl,
            'blockFor' => $this->blockFor,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'number_of_attempts' => $this->numberOfAttempts,
            'ttl' => $this->ttl,
            'block_for' => $this->blockFor,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'number_of_attempts' => $this->numberOfAttempts instanceof AbstractTransfer ? $this->numberOfAttempts->toArray(true, false) : $this->numberOfAttempts,
            'ttl' => $this->ttl instanceof AbstractTransfer ? $this->ttl->toArray(true, false) : $this->ttl,
            'block_for' => $this->blockFor instanceof AbstractTransfer ? $this->blockFor->toArray(true, false) : $this->blockFor,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'numberOfAttempts' => $this->numberOfAttempts instanceof AbstractTransfer ? $this->numberOfAttempts->toArray(true, true) : $this->numberOfAttempts,
            'ttl' => $this->ttl instanceof AbstractTransfer ? $this->ttl->toArray(true, true) : $this->ttl,
            'blockFor' => $this->blockFor instanceof AbstractTransfer ? $this->blockFor->toArray(true, true) : $this->blockFor,
        ];
    }
}
