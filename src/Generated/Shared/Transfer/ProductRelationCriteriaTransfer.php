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
class ProductRelationCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const RELATION_TYPE_KEY = 'relationTypeKey';

    /**
     * @var string
     */
    public const PRODUCT_RELATION_KEY = 'productRelationKey';

    /**
     * @var string
     */
    public const QUERY_SET = 'querySet';

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var string|null
     */
    protected $relationTypeKey;

    /**
     * @var string|null
     */
    protected $productRelationKey;

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    protected $querySet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'relation_type_key' => 'relationTypeKey',
        'relationTypeKey' => 'relationTypeKey',
        'RelationTypeKey' => 'relationTypeKey',
        'product_relation_key' => 'productRelationKey',
        'productRelationKey' => 'productRelationKey',
        'ProductRelationKey' => 'productRelationKey',
        'query_set' => 'querySet',
        'querySet' => 'querySet',
        'QuerySet' => 'querySet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATION_TYPE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'relation_type_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_RELATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_relation_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUERY_SET => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'query_set',
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
     * @module ProductRelationGui|ProductRelation
     *
     * @param int|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param int|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $relationTypeKey
     *
     * @return $this
     */
    public function setRelationTypeKey($relationTypeKey)
    {
        $this->relationTypeKey = $relationTypeKey;
        $this->modifiedProperties[self::RELATION_TYPE_KEY] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return string|null
     */
    public function getRelationTypeKey()
    {
        return $this->relationTypeKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $relationTypeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelationTypeKeyOrFail($relationTypeKey)
    {
        if ($relationTypeKey === null) {
            $this->throwNullValueException(static::RELATION_TYPE_KEY);
        }

        return $this->setRelationTypeKey($relationTypeKey);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRelationTypeKeyOrFail()
    {
        if ($this->relationTypeKey === null) {
            $this->throwNullValueException(static::RELATION_TYPE_KEY);
        }

        return $this->relationTypeKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationTypeKey()
    {
        $this->assertPropertyIsSet(self::RELATION_TYPE_KEY);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $productRelationKey
     *
     * @return $this
     */
    public function setProductRelationKey($productRelationKey)
    {
        $this->productRelationKey = $productRelationKey;
        $this->modifiedProperties[self::PRODUCT_RELATION_KEY] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return string|null
     */
    public function getProductRelationKey()
    {
        return $this->productRelationKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param string|null $productRelationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductRelationKeyOrFail($productRelationKey)
    {
        if ($productRelationKey === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION_KEY);
        }

        return $this->setProductRelationKey($productRelationKey);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductRelationKeyOrFail()
    {
        if ($this->productRelationKey === null) {
            $this->throwNullValueException(static::PRODUCT_RELATION_KEY);
        }

        return $this->productRelationKey;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductRelationKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_RELATION_KEY);

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null $querySet
     *
     * @return $this
     */
    public function setQuerySet(PropelQueryBuilderRuleSetTransfer $querySet = null)
    {
        $this->querySet = $querySet;
        $this->modifiedProperties[self::QUERY_SET] = true;

        return $this;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer|null
     */
    public function getQuerySet()
    {
        return $this->querySet;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer $querySet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuerySetOrFail(PropelQueryBuilderRuleSetTransfer $querySet)
    {
        return $this->setQuerySet($querySet);
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderRuleSetTransfer
     */
    public function getQuerySetOrFail()
    {
        if ($this->querySet === null) {
            $this->throwNullValueException(static::QUERY_SET);
        }

        return $this->querySet;
    }

    /**
     * @module ProductRelationGui|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuerySet()
    {
        $this->assertPropertyIsSet(self::QUERY_SET);

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
                case 'fkProductAbstract':
                case 'relationTypeKey':
                case 'productRelationKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'querySet':
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
                case 'fkProductAbstract':
                case 'relationTypeKey':
                case 'productRelationKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'querySet':
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
                case 'fkProductAbstract':
                case 'relationTypeKey':
                case 'productRelationKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'querySet':
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
            'fkProductAbstract' => $this->fkProductAbstract,
            'relationTypeKey' => $this->relationTypeKey,
            'productRelationKey' => $this->productRelationKey,
            'querySet' => $this->querySet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract,
            'relation_type_key' => $this->relationTypeKey,
            'product_relation_key' => $this->productRelationKey,
            'query_set' => $this->querySet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'relation_type_key' => $this->relationTypeKey instanceof AbstractTransfer ? $this->relationTypeKey->toArray(true, false) : $this->relationTypeKey,
            'product_relation_key' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, false) : $this->productRelationKey,
            'query_set' => $this->querySet instanceof AbstractTransfer ? $this->querySet->toArray(true, false) : $this->querySet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'relationTypeKey' => $this->relationTypeKey instanceof AbstractTransfer ? $this->relationTypeKey->toArray(true, true) : $this->relationTypeKey,
            'productRelationKey' => $this->productRelationKey instanceof AbstractTransfer ? $this->productRelationKey->toArray(true, true) : $this->productRelationKey,
            'querySet' => $this->querySet instanceof AbstractTransfer ? $this->querySet->toArray(true, true) : $this->querySet,
        ];
    }
}
