<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductCategoryEntityTransfer extends AbstractEntityTransfer
{
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
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const PRODUCT_ORDER = 'productOrder';

    /**
     * @var string
     */
    public const SPY_CATEGORY = 'spyCategory';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var integer|null
     */
    protected $idProductCategory;

    /**
     * @var integer|null
     */
    protected $fkCategory;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $productOrder;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    protected $spyCategory;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_category' => 'idProductCategory',
        'idProductCategory' => 'idProductCategory',
        'IdProductCategory' => 'idProductCategory',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'product_order' => 'productOrder',
        'productOrder' => 'productOrder',
        'ProductOrder' => 'productOrder',
        'spy_category' => 'spyCategory',
        'spyCategory' => 'spyCategory',
        'SpyCategory' => 'spyCategory',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CATEGORY => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
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
        self::PRODUCT_ORDER => [
            'type' => 'integer',
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
        self::SPY_CATEGORY => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductCategory\Persistence\SpyProductCategory';


    /**
     * @module 
     *
     * @param integer|null $idProductCategory
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductCategory()
    {
        return $this->idProductCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductCategory
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductCategoryOrFail()
    {
        if ($this->idProductCategory === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CATEGORY);
        }

        return $this->idProductCategory;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCategory
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductAbstract
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $productOrder
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
     * @module 
     *
     * @return integer|null
     */
    public function getProductOrder()
    {
        return $this->productOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $productOrder
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getProductOrderOrFail()
    {
        if ($this->productOrder === null) {
            $this->throwNullValueException(static::PRODUCT_ORDER);
        }

        return $this->productOrder;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null $spyCategory
     *
     * @return $this
     */
    public function setSpyCategory(SpyCategoryEntityTransfer $spyCategory = null)
    {
        $this->spyCategory = $spyCategory;
        $this->modifiedProperties[self::SPY_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    public function getSpyCategory()
    {
        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $spyCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryOrFail(SpyCategoryEntityTransfer $spyCategory)
    {
        return $this->setSpyCategory($spyCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer
     */
    public function getSpyCategoryOrFail()
    {
        if ($this->spyCategory === null) {
            $this->throwNullValueException(static::SPY_CATEGORY);
        }

        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategory()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProductAbstract
     *
     * @return $this
     */
    public function setSpyProductAbstract(SpyProductAbstractEntityTransfer $spyProductAbstract = null)
    {
        $this->spyProductAbstract = $spyProductAbstract;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProductAbstract()
    {
        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAbstractOrFail(SpyProductAbstractEntityTransfer $spyProductAbstract)
    {
        return $this->setSpyProductAbstract($spyProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductAbstractOrFail()
    {
        if ($this->spyProductAbstract === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ABSTRACT);
        }

        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ABSTRACT);

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
                case 'idProductCategory':
                case 'fkCategory':
                case 'fkProductAbstract':
                case 'productOrder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCategory':
                case 'spyProductAbstract':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idProductCategory':
                case 'fkCategory':
                case 'fkProductAbstract':
                case 'productOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategory':
                case 'spyProductAbstract':
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
                case 'idProductCategory':
                case 'fkCategory':
                case 'fkProductAbstract':
                case 'productOrder':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategory':
                case 'spyProductAbstract':
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
            'idProductCategory' => $this->idProductCategory,
            'fkCategory' => $this->fkCategory,
            'fkProductAbstract' => $this->fkProductAbstract,
            'productOrder' => $this->productOrder,
            'spyCategory' => $this->spyCategory,
            'spyProductAbstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_category' => $this->idProductCategory,
            'fk_category' => $this->fkCategory,
            'fk_product_abstract' => $this->fkProductAbstract,
            'product_order' => $this->productOrder,
            'spy_category' => $this->spyCategory,
            'spy_product_abstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_category' => $this->idProductCategory instanceof AbstractTransfer ? $this->idProductCategory->toArray(true, false) : $this->idProductCategory,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'product_order' => $this->productOrder instanceof AbstractTransfer ? $this->productOrder->toArray(true, false) : $this->productOrder,
            'spy_category' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, false) : $this->spyCategory,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductCategory' => $this->idProductCategory instanceof AbstractTransfer ? $this->idProductCategory->toArray(true, true) : $this->idProductCategory,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'productOrder' => $this->productOrder instanceof AbstractTransfer ? $this->productOrder->toArray(true, true) : $this->productOrder,
            'spyCategory' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, true) : $this->spyCategory,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
        ];
    }
}
