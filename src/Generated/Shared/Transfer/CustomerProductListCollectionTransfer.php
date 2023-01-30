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
class CustomerProductListCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BLACKLIST_IDS = 'blacklistIds';

    /**
     * @var string
     */
    public const WHITELIST_IDS = 'whitelistIds';

    /**
     * @var int[]
     */
    protected $blacklistIds = [];

    /**
     * @var int[]
     */
    protected $whitelistIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'blacklist_ids' => 'blacklistIds',
        'blacklistIds' => 'blacklistIds',
        'BlacklistIds' => 'blacklistIds',
        'whitelist_ids' => 'whitelistIds',
        'whitelistIds' => 'whitelistIds',
        'WhitelistIds' => 'whitelistIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BLACKLIST_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'blacklist_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WHITELIST_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'whitelist_ids',
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
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param int[]|null $blacklistIds
     *
     * @return $this
     */
    public function setBlacklistIds(array $blacklistIds = null)
    {
        if ($blacklistIds === null) {
            $blacklistIds = [];
        }

        $this->blacklistIds = $blacklistIds;
        $this->modifiedProperties[self::BLACKLIST_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @return int[]
     */
    public function getBlacklistIds()
    {
        return $this->blacklistIds;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param int $blacklistId
     *
     * @return $this
     */
    public function addBlacklistId($blacklistId)
    {
        $this->blacklistIds[] = $blacklistId;
        $this->modifiedProperties[self::BLACKLIST_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlacklistIds()
    {
        $this->assertPropertyIsSet(self::BLACKLIST_IDS);

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param int[]|null $whitelistIds
     *
     * @return $this
     */
    public function setWhitelistIds(array $whitelistIds = null)
    {
        if ($whitelistIds === null) {
            $whitelistIds = [];
        }

        $this->whitelistIds = $whitelistIds;
        $this->modifiedProperties[self::WHITELIST_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @return int[]
     */
    public function getWhitelistIds()
    {
        return $this->whitelistIds;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @param int $whitelistId
     *
     * @return $this
     */
    public function addWhitelistId($whitelistId)
    {
        $this->whitelistIds[] = $whitelistId;
        $this->modifiedProperties[self::WHITELIST_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerCatalog|MerchantRelationshipProductList|ProductListStorage|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWhitelistIds()
    {
        $this->assertPropertyIsSet(self::WHITELIST_IDS);

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
                case 'blacklistIds':
                case 'whitelistIds':
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
                case 'blacklistIds':
                case 'whitelistIds':
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
                case 'blacklistIds':
                case 'whitelistIds':
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
            'blacklistIds' => $this->blacklistIds,
            'whitelistIds' => $this->whitelistIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'blacklist_ids' => $this->blacklistIds,
            'whitelist_ids' => $this->whitelistIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'blacklist_ids' => $this->blacklistIds instanceof AbstractTransfer ? $this->blacklistIds->toArray(true, false) : $this->blacklistIds,
            'whitelist_ids' => $this->whitelistIds instanceof AbstractTransfer ? $this->whitelistIds->toArray(true, false) : $this->whitelistIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'blacklistIds' => $this->blacklistIds instanceof AbstractTransfer ? $this->blacklistIds->toArray(true, true) : $this->blacklistIds,
            'whitelistIds' => $this->whitelistIds instanceof AbstractTransfer ? $this->whitelistIds->toArray(true, true) : $this->whitelistIds,
        ];
    }
}
