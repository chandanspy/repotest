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
class StorageAttributeMapTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ATTRIBUTE_VARIANTS = 'attributeVariants';

    /**
     * @var string
     */
    public const SUPER_ATTRIBUTES = 'superAttributes';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_IDS = 'productConcreteIds';

    /**
     * @var array
     */
    protected $attributeVariants = [];

    /**
     * @var array
     */
    protected $superAttributes = [];

    /**
     * @var array
     */
    protected $productConcreteIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'attribute_variants' => 'attributeVariants',
        'attributeVariants' => 'attributeVariants',
        'AttributeVariants' => 'attributeVariants',
        'super_attributes' => 'superAttributes',
        'superAttributes' => 'superAttributes',
        'SuperAttributes' => 'superAttributes',
        'product_concrete_ids' => 'productConcreteIds',
        'productConcreteIds' => 'productConcreteIds',
        'ProductConcreteIds' => 'productConcreteIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ATTRIBUTE_VARIANTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attribute_variants',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUPER_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'super_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_ids',
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
     * @module CartVariant
     *
     * @param array|null $attributeVariants
     *
     * @return $this
     */
    public function setAttributeVariants(array $attributeVariants = null)
    {
        if ($attributeVariants === null) {
            $attributeVariants = [];
        }

        $this->attributeVariants = $attributeVariants;
        $this->modifiedProperties[self::ATTRIBUTE_VARIANTS] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @return array
     */
    public function getAttributeVariants()
    {
        return $this->attributeVariants;
    }

    /**
     * @module CartVariant
     *
     * @param mixed $attributeVariant
     *
     * @return $this
     */
    public function addAttributeVariant($attributeVariant)
    {
        $this->attributeVariants[] = $attributeVariant;
        $this->modifiedProperties[self::ATTRIBUTE_VARIANTS] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributeVariants()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTE_VARIANTS);

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @param array|null $superAttributes
     *
     * @return $this
     */
    public function setSuperAttributes(array $superAttributes = null)
    {
        if ($superAttributes === null) {
            $superAttributes = [];
        }

        $this->superAttributes = $superAttributes;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @return array
     */
    public function getSuperAttributes()
    {
        return $this->superAttributes;
    }

    /**
     * @module CartVariant
     *
     * @param mixed $superAttribute
     *
     * @return $this
     */
    public function addSuperAttribute($superAttribute)
    {
        $this->superAttributes[] = $superAttribute;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuperAttributes()
    {
        $this->assertPropertyIsSet(self::SUPER_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @param array|null $productConcreteIds
     *
     * @return $this
     */
    public function setProductConcreteIds(array $productConcreteIds = null)
    {
        if ($productConcreteIds === null) {
            $productConcreteIds = [];
        }

        $this->productConcreteIds = $productConcreteIds;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_IDS] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @return array
     */
    public function getProductConcreteIds()
    {
        return $this->productConcreteIds;
    }

    /**
     * @module CartVariant
     *
     * @param mixed $productConcreteId
     *
     * @return $this
     */
    public function addProductConcreteId($productConcreteId)
    {
        $this->productConcreteIds[] = $productConcreteId;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_IDS] = true;

        return $this;
    }

    /**
     * @module CartVariant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_IDS);

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
                case 'attributeVariants':
                case 'superAttributes':
                case 'productConcreteIds':
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
                case 'attributeVariants':
                case 'superAttributes':
                case 'productConcreteIds':
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
                case 'attributeVariants':
                case 'superAttributes':
                case 'productConcreteIds':
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
            'attributeVariants' => $this->attributeVariants,
            'superAttributes' => $this->superAttributes,
            'productConcreteIds' => $this->productConcreteIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'attribute_variants' => $this->attributeVariants,
            'super_attributes' => $this->superAttributes,
            'product_concrete_ids' => $this->productConcreteIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'attribute_variants' => $this->attributeVariants instanceof AbstractTransfer ? $this->attributeVariants->toArray(true, false) : $this->attributeVariants,
            'super_attributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, false) : $this->superAttributes,
            'product_concrete_ids' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, false) : $this->productConcreteIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'attributeVariants' => $this->attributeVariants instanceof AbstractTransfer ? $this->attributeVariants->toArray(true, true) : $this->attributeVariants,
            'superAttributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, true) : $this->superAttributes,
            'productConcreteIds' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, true) : $this->productConcreteIds,
        ];
    }
}
