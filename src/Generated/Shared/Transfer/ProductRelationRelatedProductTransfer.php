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
class ProductRelationRelatedProductTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const ID_PRODUCT_RELATION_PRODUCT_ABSTRACT = 'idProductRelationProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_RELATION = 'fkProductRelation';

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var int|null
     */
    protected $order;

    /**
     * @var int|null
     */
    protected $idProductRelationProductAbstract;

    /**
     * @var int|null
     */
    protected $fkProductRelation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'order' => 'order',
        'Order' => 'order',
        'id_product_relation_product_abstract' => 'idProductRelationProductAbstract',
        'idProductRelationProductAbstract' => 'idProductRelationProductAbstract',
        'IdProductRelationProductAbstract' => 'idProductRelationProductAbstract',
        'fk_product_relation' => 'fkProductRelation',
        'fkProductRelation' => 'fkProductRelation',
        'FkProductRelation' => 'fkProductRelation',
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
        self::ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_RELATION_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_relation_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_RELATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_relation',
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
     * @module ProductRelationStorage|ProductRelation
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
     * @module ProductRelationStorage|ProductRelation
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module ProductRelationStorage|ProductRelation
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
     * @module ProductRelationStorage|ProductRelation
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
     * @module ProductRelationStorage|ProductRelation
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
     * @module ProductRelationStorage|ProductRelation
     *
     * @param int|null $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module ProductRelationStorage|ProductRelation
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module ProductRelationStorage|ProductRelation
     *
     * @param int|null $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail($order)
    {
        if ($order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->setOrder($order);
    }

    /**
     * @module ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module ProductRelationStorage|ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $idProductRelationProductAbstract
     *
     * @return $this
     */
    public function setIdProductRelationProductAbstract($idProductRelationProductAbstract)
    {
        $this->idProductRelationProductAbstract = $idProductRelationProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_RELATION_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @return int|null
     */
    public function getIdProductRelationProductAbstract()
    {
        return $this->idProductRelationProductAbstract;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $idProductRelationProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductRelationProductAbstractOrFail($idProductRelationProductAbstract)
    {
        if ($idProductRelationProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_RELATION_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductRelationProductAbstract($idProductRelationProductAbstract);
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductRelationProductAbstractOrFail()
    {
        if ($this->idProductRelationProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_RELATION_PRODUCT_ABSTRACT);
        }

        return $this->idProductRelationProductAbstract;
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductRelationProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_RELATION_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $fkProductRelation
     *
     * @return $this
     */
    public function setFkProductRelation($fkProductRelation)
    {
        $this->fkProductRelation = $fkProductRelation;
        $this->modifiedProperties[self::FK_PRODUCT_RELATION] = true;

        return $this;
    }

    /**
     * @module ProductRelation
     *
     * @return int|null
     */
    public function getFkProductRelation()
    {
        return $this->fkProductRelation;
    }

    /**
     * @module ProductRelation
     *
     * @param int|null $fkProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductRelationOrFail($fkProductRelation)
    {
        if ($fkProductRelation === null) {
            $this->throwNullValueException(static::FK_PRODUCT_RELATION);
        }

        return $this->setFkProductRelation($fkProductRelation);
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductRelationOrFail()
    {
        if ($this->fkProductRelation === null) {
            $this->throwNullValueException(static::FK_PRODUCT_RELATION);
        }

        return $this->fkProductRelation;
    }

    /**
     * @module ProductRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductRelation()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_RELATION);

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
                case 'order':
                case 'idProductRelationProductAbstract':
                case 'fkProductRelation':
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
                case 'order':
                case 'idProductRelationProductAbstract':
                case 'fkProductRelation':
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
                case 'fkProductAbstract':
                case 'order':
                case 'idProductRelationProductAbstract':
                case 'fkProductRelation':
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
            'fkProductAbstract' => $this->fkProductAbstract,
            'order' => $this->order,
            'idProductRelationProductAbstract' => $this->idProductRelationProductAbstract,
            'fkProductRelation' => $this->fkProductRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract,
            'order' => $this->order,
            'id_product_relation_product_abstract' => $this->idProductRelationProductAbstract,
            'fk_product_relation' => $this->fkProductRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'id_product_relation_product_abstract' => $this->idProductRelationProductAbstract instanceof AbstractTransfer ? $this->idProductRelationProductAbstract->toArray(true, false) : $this->idProductRelationProductAbstract,
            'fk_product_relation' => $this->fkProductRelation instanceof AbstractTransfer ? $this->fkProductRelation->toArray(true, false) : $this->fkProductRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'idProductRelationProductAbstract' => $this->idProductRelationProductAbstract instanceof AbstractTransfer ? $this->idProductRelationProductAbstract->toArray(true, true) : $this->idProductRelationProductAbstract,
            'fkProductRelation' => $this->fkProductRelation instanceof AbstractTransfer ? $this->fkProductRelation->toArray(true, true) : $this->fkProductRelation,
        ];
    }
}
