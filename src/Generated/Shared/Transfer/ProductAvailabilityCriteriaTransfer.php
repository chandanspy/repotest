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
class ProductAvailabilityCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_SKUS = 'productConcreteSkus';

    /**
     * @var string
     */
    public const STORE_IDS = 'storeIds';

    /**
     * @var string[]
     */
    protected $productConcreteSkus = [];

    /**
     * @var int[]
     */
    protected $storeIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_concrete_skus' => 'productConcreteSkus',
        'productConcreteSkus' => 'productConcreteSkus',
        'ProductConcreteSkus' => 'productConcreteSkus',
        'store_ids' => 'storeIds',
        'storeIds' => 'storeIds',
        'StoreIds' => 'storeIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONCRETE_SKUS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_skus',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'store_ids',
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
     * @module Availability|ProductBundle
     *
     * @param string[]|null $productConcreteSkus
     *
     * @return $this
     */
    public function setProductConcreteSkus(array $productConcreteSkus = null)
    {
        if ($productConcreteSkus === null) {
            $productConcreteSkus = [];
        }

        $this->productConcreteSkus = $productConcreteSkus;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_SKUS] = true;

        return $this;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @return string[]
     */
    public function getProductConcreteSkus()
    {
        return $this->productConcreteSkus;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @param string $productConcreteSku
     *
     * @return $this
     */
    public function addProductConcreteSku($productConcreteSku)
    {
        $this->productConcreteSkus[] = $productConcreteSku;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_SKUS] = true;

        return $this;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteSkus()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_SKUS);

        return $this;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @param int[]|null $storeIds
     *
     * @return $this
     */
    public function setStoreIds(array $storeIds = null)
    {
        if ($storeIds === null) {
            $storeIds = [];
        }

        $this->storeIds = $storeIds;
        $this->modifiedProperties[self::STORE_IDS] = true;

        return $this;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @return int[]
     */
    public function getStoreIds()
    {
        return $this->storeIds;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @param int $idStore
     *
     * @return $this
     */
    public function addIdStore($idStore)
    {
        $this->storeIds[] = $idStore;
        $this->modifiedProperties[self::STORE_IDS] = true;

        return $this;
    }

    /**
     * @module Availability|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreIds()
    {
        $this->assertPropertyIsSet(self::STORE_IDS);

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
                case 'productConcreteSkus':
                case 'storeIds':
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
                case 'productConcreteSkus':
                case 'storeIds':
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
                case 'productConcreteSkus':
                case 'storeIds':
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
            'productConcreteSkus' => $this->productConcreteSkus,
            'storeIds' => $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_concrete_skus' => $this->productConcreteSkus,
            'store_ids' => $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_concrete_skus' => $this->productConcreteSkus instanceof AbstractTransfer ? $this->productConcreteSkus->toArray(true, false) : $this->productConcreteSkus,
            'store_ids' => $this->storeIds instanceof AbstractTransfer ? $this->storeIds->toArray(true, false) : $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productConcreteSkus' => $this->productConcreteSkus instanceof AbstractTransfer ? $this->productConcreteSkus->toArray(true, true) : $this->productConcreteSkus,
            'storeIds' => $this->storeIds instanceof AbstractTransfer ? $this->storeIds->toArray(true, true) : $this->storeIds,
        ];
    }
}
