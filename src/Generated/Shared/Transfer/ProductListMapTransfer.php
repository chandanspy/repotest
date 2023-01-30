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
class ProductListMapTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WHITELISTS = 'whitelists';

    /**
     * @var string
     */
    public const BLACKLISTS = 'blacklists';

    /**
     * @var array
     */
    protected $whitelists = [];

    /**
     * @var array
     */
    protected $blacklists = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'whitelists' => 'whitelists',
        'Whitelists' => 'whitelists',
        'blacklists' => 'blacklists',
        'Blacklists' => 'blacklists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::WHITELISTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'whitelists',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BLACKLISTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'blacklists',
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
     * @module ProductListSearch
     *
     * @param array|null $whitelists
     *
     * @return $this
     */
    public function setWhitelists(array $whitelists = null)
    {
        if ($whitelists === null) {
            $whitelists = [];
        }

        $this->whitelists = $whitelists;
        $this->modifiedProperties[self::WHITELISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @return array
     */
    public function getWhitelists()
    {
        return $this->whitelists;
    }

    /**
     * @module ProductListSearch
     *
     * @param mixed $whitelists
     *
     * @return $this
     */
    public function addWhitelists($whitelists)
    {
        $this->whitelists[] = $whitelists;
        $this->modifiedProperties[self::WHITELISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWhitelists()
    {
        $this->assertPropertyIsSet(self::WHITELISTS);

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @param array|null $blacklists
     *
     * @return $this
     */
    public function setBlacklists(array $blacklists = null)
    {
        if ($blacklists === null) {
            $blacklists = [];
        }

        $this->blacklists = $blacklists;
        $this->modifiedProperties[self::BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @return array
     */
    public function getBlacklists()
    {
        return $this->blacklists;
    }

    /**
     * @module ProductListSearch
     *
     * @param mixed $blacklists
     *
     * @return $this
     */
    public function addBlacklists($blacklists)
    {
        $this->blacklists[] = $blacklists;
        $this->modifiedProperties[self::BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlacklists()
    {
        $this->assertPropertyIsSet(self::BLACKLISTS);

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
                case 'whitelists':
                case 'blacklists':
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
                case 'whitelists':
                case 'blacklists':
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
                case 'whitelists':
                case 'blacklists':
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
            'whitelists' => $this->whitelists,
            'blacklists' => $this->blacklists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'whitelists' => $this->whitelists,
            'blacklists' => $this->blacklists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'whitelists' => $this->whitelists instanceof AbstractTransfer ? $this->whitelists->toArray(true, false) : $this->whitelists,
            'blacklists' => $this->blacklists instanceof AbstractTransfer ? $this->blacklists->toArray(true, false) : $this->blacklists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'whitelists' => $this->whitelists instanceof AbstractTransfer ? $this->whitelists->toArray(true, true) : $this->whitelists,
            'blacklists' => $this->blacklists instanceof AbstractTransfer ? $this->blacklists->toArray(true, true) : $this->blacklists,
        ];
    }
}
