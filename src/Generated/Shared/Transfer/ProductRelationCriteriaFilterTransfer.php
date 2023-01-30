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
class ProductRelationCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_RELATION = 'productRelation';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @var \Generated\Shared\Transfer\ProductRelationTransfer|null
     */
    protected $productRelation;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_relation' => 'productRelation',
        'productRelation' => 'productRelation',
        'ProductRelation' => 'productRelation',
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_RELATION => [
            'type' => 'Generated\Shared\Transfer\ProductRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
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
     * @module ProductRelation
     *
     * @param \Generated\Shared\Transfer\ProductRelationTransfer|null $productRelation
     *
     * @return $this
     */
    public function setProductRelation(ProductRelationTransfer $productRelation = null)
    {
        $this->productRelation = $productRelation;
        $this->modifiedProperties[self::PRODUCT_RELATION] = true;

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @return \Generated\Shared\Transfer\ProductRelationTransfer|null
     */
    public function getProductRelation()
    {
        return $this->productRelation;
    }

    /**
     * @module ProductRelation
     *
     * @param \Generated\Shared\Transfer\ProductRelationTransfer $productRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductRelationOrFail(ProductRelationTransfer $productRelation)
    {
        return $this->setProductRelation($productRelation);
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductRelationTransfer
     */
    public function getProductRelationOrFail()
    {
        if ($this->productRelation === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION);
        }

        return $this->productRelation;
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductRelation()
    {
        $this->assertPropertyIsSet(self::PRODUCT_RELATION);

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

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
                case 'limit':
                case 'offset':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productRelation':
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
                case 'limit':
                case 'offset':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelation':
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
                case 'limit':
                case 'offset':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelation':
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
            'limit' => $this->limit,
            'offset' => $this->offset,
            'productRelation' => $this->productRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
            'product_relation' => $this->productRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'product_relation' => $this->productRelation instanceof AbstractTransfer ? $this->productRelation->toArray(true, false) : $this->productRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'productRelation' => $this->productRelation instanceof AbstractTransfer ? $this->productRelation->toArray(true, true) : $this->productRelation,
        ];
    }
}
