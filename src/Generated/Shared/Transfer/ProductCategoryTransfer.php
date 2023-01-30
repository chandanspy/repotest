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
class ProductCategoryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CATEGORY = 'category';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const ID_PRODUCT_CATEGORY = 'idProductCategory';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const PRODUCT_ORDER = 'productOrder';

    /**
     * @var \Generated\Shared\Transfer\CategoryTransfer|null
     */
    protected $category;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var int|null
     */
    protected $idProductCategory;

    /**
     * @var int|null
     */
    protected $fkCategory;

    /**
     * @var int|null
     */
    protected $productOrder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'category' => 'category',
        'Category' => 'category',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'id_product_category' => 'idProductCategory',
        'idProductCategory' => 'idProductCategory',
        'IdProductCategory' => 'idProductCategory',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'product_order' => 'productOrder',
        'productOrder' => 'productOrder',
        'ProductOrder' => 'productOrder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CATEGORY => [
            'type' => 'Generated\Shared\Transfer\CategoryTransfer',
            'type_shim' => null,
            'name_underscore' => 'category',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::ID_PRODUCT_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'product_order',
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
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @param \Generated\Shared\Transfer\CategoryTransfer|null $category
     *
     * @return $this
     */
    public function setCategory(CategoryTransfer $category = null)
    {
        $this->category = $category;
        $this->modifiedProperties[self::CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @return \Generated\Shared\Transfer\CategoryTransfer|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @param \Generated\Shared\Transfer\CategoryTransfer $category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryOrFail(CategoryTransfer $category)
    {
        return $this->setCategory($category);
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CategoryTransfer
     */
    public function getCategoryOrFail()
    {
        if ($this->category === null) {
            $this->throwNullValueException(static::CATEGORY);
        }

        return $this->category;
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategory()
    {
        $this->assertPropertyIsSet(self::CATEGORY);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
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
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
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
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
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
     * @module CategoryDiscountConnector|ProductCategoryStorage|ProductCategory
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
     * @module ProductCategory
     *
     * @param int|null $idProductCategory
     *
     * @return $this
     */
    public function setIdProductCategory($idProductCategory)
    {
        $this->idProductCategory = $idProductCategory;
        $this->modifiedProperties[self::ID_PRODUCT_CATEGORY] = true;

        return $this;
    }

    /**
     * @module ProductCategory
     *
     * @return int|null
     */
    public function getIdProductCategory()
    {
        return $this->idProductCategory;
    }

    /**
     * @module ProductCategory
     *
     * @param int|null $idProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductCategoryOrFail($idProductCategory)
    {
        if ($idProductCategory === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CATEGORY);
        }

        return $this->setIdProductCategory($idProductCategory);
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductCategoryOrFail()
    {
        if ($this->idProductCategory === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CATEGORY);
        }

        return $this->idProductCategory;
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductCategory()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CATEGORY);

        return $this;
    }

    /**
     * @module ProductCategory
     *
     * @param int|null $fkCategory
     *
     * @return $this
     */
    public function setFkCategory($fkCategory)
    {
        $this->fkCategory = $fkCategory;
        $this->modifiedProperties[self::FK_CATEGORY] = true;

        return $this;
    }

    /**
     * @module ProductCategory
     *
     * @return int|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module ProductCategory
     *
     * @param int|null $fkCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryOrFail($fkCategory)
    {
        if ($fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->setFkCategory($fkCategory);
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategory()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY);

        return $this;
    }

    /**
     * @module ProductCategory
     *
     * @param int|null $productOrder
     *
     * @return $this
     */
    public function setProductOrder($productOrder)
    {
        $this->productOrder = $productOrder;
        $this->modifiedProperties[self::PRODUCT_ORDER] = true;

        return $this;
    }

    /**
     * @module ProductCategory
     *
     * @return int|null
     */
    public function getProductOrder()
    {
        return $this->productOrder;
    }

    /**
     * @module ProductCategory
     *
     * @param int|null $productOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrderOrFail($productOrder)
    {
        if ($productOrder === null) {
            $this->throwNullValueException(static::PRODUCT_ORDER);
        }

        return $this->setProductOrder($productOrder);
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getProductOrderOrFail()
    {
        if ($this->productOrder === null) {
            $this->throwNullValueException(static::PRODUCT_ORDER);
        }

        return $this->productOrder;
    }

    /**
     * @module ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOrder()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ORDER);

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
                case 'idProductCategory':
                case 'fkCategory':
                case 'productOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'category':
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
                case 'idProductCategory':
                case 'fkCategory':
                case 'productOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'category':
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
                case 'idProductCategory':
                case 'fkCategory':
                case 'productOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'category':
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
            'idProductCategory' => $this->idProductCategory,
            'fkCategory' => $this->fkCategory,
            'productOrder' => $this->productOrder,
            'category' => $this->category,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract,
            'id_product_category' => $this->idProductCategory,
            'fk_category' => $this->fkCategory,
            'product_order' => $this->productOrder,
            'category' => $this->category,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'id_product_category' => $this->idProductCategory instanceof AbstractTransfer ? $this->idProductCategory->toArray(true, false) : $this->idProductCategory,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'product_order' => $this->productOrder instanceof AbstractTransfer ? $this->productOrder->toArray(true, false) : $this->productOrder,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, false) : $this->category,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'idProductCategory' => $this->idProductCategory instanceof AbstractTransfer ? $this->idProductCategory->toArray(true, true) : $this->idProductCategory,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'productOrder' => $this->productOrder instanceof AbstractTransfer ? $this->productOrder->toArray(true, true) : $this->productOrder,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, true) : $this->category,
        ];
    }
}
