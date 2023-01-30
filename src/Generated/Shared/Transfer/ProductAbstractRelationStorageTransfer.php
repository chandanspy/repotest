<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductAbstractRelationStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const PRODUCT_RELATIONS = 'productRelations';

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductRelationStorageTransfer[]
     */
    protected $productRelations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'store' => 'store',
        'Store' => 'store',
        'product_relations' => 'productRelations',
        'productRelations' => 'productRelations',
        'ProductRelations' => 'productRelations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductRelationStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_relations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductRelationStorage
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductRelationStorage
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module ProductRelationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module ProductRelationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module ProductRelationStorage
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module ProductRelationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module ProductRelationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductRelationStorageTransfer[] $productRelations
     *
     * @return $this
     */
    public function setProductRelations(ArrayObject $productRelations)
    {
        $this->productRelations = $productRelations;
        $this->modifiedProperties[self::PRODUCT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductRelationStorageTransfer[]
     */
    public function getProductRelations()
    {
        return $this->productRelations;
    }

    /**
     * @module ProductRelationStorage
     *
     * @param \Generated\Shared\Transfer\ProductRelationStorageTransfer $productRelations
     *
     * @return $this
     */
    public function addProductRelations(ProductRelationStorageTransfer $productRelations)
    {
        $this->productRelations[] = $productRelations;
        $this->modifiedProperties[self::PRODUCT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module ProductRelationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductRelations()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_RELATIONS);

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
                case 'idProductAbstract':
                case 'store':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productRelations':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idProductAbstract':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelations':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idProductAbstract':
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'productRelations':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->productRelations = $this->productRelations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract,
            'store' => $this->store,
            'productRelations' => $this->productRelations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract,
            'store' => $this->store,
            'product_relations' => $this->productRelations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'product_relations' => $this->productRelations instanceof AbstractTransfer ? $this->productRelations->toArray(true, false) : $this->addValuesToCollection($this->productRelations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'productRelations' => $this->productRelations instanceof AbstractTransfer ? $this->productRelations->toArray(true, true) : $this->addValuesToCollection($this->productRelations, true, true),
        ];
    }
}
