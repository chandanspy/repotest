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
class ProductImageFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IMAGE_SET_IDS = 'productImageSetIds';

    /**
     * @var string
     */
    public const PRODUCT_IMAGE_IDS = 'productImageIds';

    /**
     * @var array
     */
    protected $productImageSetIds = [];

    /**
     * @var array
     */
    protected $productImageIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_image_set_ids' => 'productImageSetIds',
        'productImageSetIds' => 'productImageSetIds',
        'ProductImageSetIds' => 'productImageSetIds',
        'product_image_ids' => 'productImageIds',
        'productImageIds' => 'productImageIds',
        'ProductImageIds' => 'productImageIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IMAGE_SET_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_image_set_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IMAGE_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_image_ids',
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
     * @module ProductImage|ProductPageSearch
     *
     * @param array|null $productImageSetIds
     *
     * @return $this
     */
    public function setProductImageSetIds(array $productImageSetIds = null)
    {
        if ($productImageSetIds === null) {
            $productImageSetIds = [];
        }

        $this->productImageSetIds = $productImageSetIds;
        $this->modifiedProperties[self::PRODUCT_IMAGE_SET_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @return array
     */
    public function getProductImageSetIds()
    {
        return $this->productImageSetIds;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @param mixed $productImageSetId
     *
     * @return $this
     */
    public function addProductImageSetId($productImageSetId)
    {
        $this->productImageSetIds[] = $productImageSetId;
        $this->modifiedProperties[self::PRODUCT_IMAGE_SET_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageSetIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGE_SET_IDS);

        return $this;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @param array|null $productImageIds
     *
     * @return $this
     */
    public function setProductImageIds(array $productImageIds = null)
    {
        if ($productImageIds === null) {
            $productImageIds = [];
        }

        $this->productImageIds = $productImageIds;
        $this->modifiedProperties[self::PRODUCT_IMAGE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @return array
     */
    public function getProductImageIds()
    {
        return $this->productImageIds;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @param mixed $productImageId
     *
     * @return $this
     */
    public function addProductImageId($productImageId)
    {
        $this->productImageIds[] = $productImageId;
        $this->modifiedProperties[self::PRODUCT_IMAGE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImage|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductImageIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IMAGE_IDS);

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
                case 'productImageSetIds':
                case 'productImageIds':
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
                case 'productImageSetIds':
                case 'productImageIds':
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
                case 'productImageSetIds':
                case 'productImageIds':
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
            'productImageSetIds' => $this->productImageSetIds,
            'productImageIds' => $this->productImageIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_image_set_ids' => $this->productImageSetIds,
            'product_image_ids' => $this->productImageIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_image_set_ids' => $this->productImageSetIds instanceof AbstractTransfer ? $this->productImageSetIds->toArray(true, false) : $this->productImageSetIds,
            'product_image_ids' => $this->productImageIds instanceof AbstractTransfer ? $this->productImageIds->toArray(true, false) : $this->productImageIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productImageSetIds' => $this->productImageSetIds instanceof AbstractTransfer ? $this->productImageSetIds->toArray(true, true) : $this->productImageSetIds,
            'productImageIds' => $this->productImageIds instanceof AbstractTransfer ? $this->productImageIds->toArray(true, true) : $this->productImageIds,
        ];
    }
}
