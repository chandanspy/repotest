<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductBundleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE_BUNDLE = 'idProductConcreteBundle';

    /**
     * @var string
     */
    public const BUNDLED_PRODUCTS = 'bundledProducts';

    /**
     * @var string
     */
    public const AVAILABILITY = 'availability';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'isNeverOutOfStock';

    /**
     * @var string
     */
    public const BUNDLES_TO_REMOVE = 'bundlesToRemove';

    /**
     * @var int|null
     */
    protected $idProductConcreteBundle;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductForBundleTransfer[]
     */
    protected $bundledProducts;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $availability;

    /**
     * @var bool|null
     */
    protected $isNeverOutOfStock;

    /**
     * @var array
     */
    protected $bundlesToRemove = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_concrete_bundle' => 'idProductConcreteBundle',
        'idProductConcreteBundle' => 'idProductConcreteBundle',
        'IdProductConcreteBundle' => 'idProductConcreteBundle',
        'bundled_products' => 'bundledProducts',
        'bundledProducts' => 'bundledProducts',
        'BundledProducts' => 'bundledProducts',
        'availability' => 'availability',
        'Availability' => 'availability',
        'is_never_out_of_stock' => 'isNeverOutOfStock',
        'isNeverOutOfStock' => 'isNeverOutOfStock',
        'IsNeverOutOfStock' => 'isNeverOutOfStock',
        'bundles_to_remove' => 'bundlesToRemove',
        'bundlesToRemove' => 'bundlesToRemove',
        'BundlesToRemove' => 'bundlesToRemove',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CONCRETE_BUNDLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BUNDLED_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\ProductForBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'bundled_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABILITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'availability',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NEVER_OUT_OF_STOCK => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_never_out_of_stock',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BUNDLES_TO_REMOVE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'bundles_to_remove',
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
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle
     *
     * @param int|null $idProductConcreteBundle
     *
     * @return $this
     */
    public function setIdProductConcreteBundle($idProductConcreteBundle)
    {
        $this->idProductConcreteBundle = $idProductConcreteBundle;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle
     *
     * @return int|null
     */
    public function getIdProductConcreteBundle()
    {
        return $this->idProductConcreteBundle;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle
     *
     * @param int|null $idProductConcreteBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteBundleOrFail($idProductConcreteBundle)
    {
        if ($idProductConcreteBundle === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_BUNDLE);
        }

        return $this->setIdProductConcreteBundle($idProductConcreteBundle);
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteBundleOrFail()
    {
        if ($this->idProductConcreteBundle === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_BUNDLE);
        }

        return $this->idProductConcreteBundle;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcreteBundle()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE_BUNDLE);

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductForBundleTransfer[] $bundledProducts
     *
     * @return $this
     */
    public function setBundledProducts(ArrayObject $bundledProducts)
    {
        $this->bundledProducts = $bundledProducts;
        $this->modifiedProperties[self::BUNDLED_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductForBundleTransfer[]
     */
    public function getBundledProducts()
    {
        return $this->bundledProducts;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param \Generated\Shared\Transfer\ProductForBundleTransfer $bundledProduct
     *
     * @return $this
     */
    public function addBundledProduct(ProductForBundleTransfer $bundledProduct)
    {
        $this->bundledProducts[] = $bundledProduct;
        $this->modifiedProperties[self::BUNDLED_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundleStorage|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundledProducts()
    {
        $this->assertCollectionPropertyIsSet(self::BUNDLED_PRODUCTS);

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $availability
     *
     * @return $this
     */
    public function setAvailability($availability = null)
    {
        if ($availability !== null && !$availability instanceof Decimal) {
            $availability = new Decimal($availability);
        }

        $this->availability = $availability;
        $this->modifiedProperties[self::AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityOrFail($availability)
    {
        if ($availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->setAvailability($availability);
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAvailabilityOrFail()
    {
        if ($this->availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->availability;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailability()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY);

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @param bool|null $isNeverOutOfStock
     *
     * @return $this
     */
    public function setIsNeverOutOfStock($isNeverOutOfStock)
    {
        $this->isNeverOutOfStock = $isNeverOutOfStock;
        $this->modifiedProperties[self::IS_NEVER_OUT_OF_STOCK] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @return bool|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->isNeverOutOfStock;
    }

    /**
     * @module ProductBundle
     *
     * @param bool|null $isNeverOutOfStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNeverOutOfStockOrFail($isNeverOutOfStock)
    {
        if ($isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->setIsNeverOutOfStock($isNeverOutOfStock);
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNeverOutOfStockOrFail()
    {
        if ($this->isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->isNeverOutOfStock;
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNeverOutOfStock()
    {
        $this->assertPropertyIsSet(self::IS_NEVER_OUT_OF_STOCK);

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param array|null $bundlesToRemove
     *
     * @return $this
     */
    public function setBundlesToRemove(array $bundlesToRemove = null)
    {
        if ($bundlesToRemove === null) {
            $bundlesToRemove = [];
        }

        $this->bundlesToRemove = $bundlesToRemove;
        $this->modifiedProperties[self::BUNDLES_TO_REMOVE] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @return array
     */
    public function getBundlesToRemove()
    {
        return $this->bundlesToRemove;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param mixed $bundleToRemove
     *
     * @return $this
     */
    public function addBundleToRemove($bundleToRemove)
    {
        $this->bundlesToRemove[] = $bundleToRemove;
        $this->modifiedProperties[self::BUNDLES_TO_REMOVE] = true;

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundlesToRemove()
    {
        $this->assertPropertyIsSet(self::BUNDLES_TO_REMOVE);

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
                case 'idProductConcreteBundle':
                case 'isNeverOutOfStock':
                case 'bundlesToRemove':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'bundledProducts':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'availability':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idProductConcreteBundle':
                case 'isNeverOutOfStock':
                case 'bundlesToRemove':
                case 'availability':
                    $values[$arrayKey] = $value;

                    break;
                case 'bundledProducts':
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
                case 'idProductConcreteBundle':
                case 'isNeverOutOfStock':
                case 'bundlesToRemove':
                case 'availability':
                    $values[$arrayKey] = $value;

                    break;
                case 'bundledProducts':
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
        $this->bundledProducts = $this->bundledProducts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductConcreteBundle' => $this->idProductConcreteBundle,
            'isNeverOutOfStock' => $this->isNeverOutOfStock,
            'bundlesToRemove' => $this->bundlesToRemove,
            'bundledProducts' => $this->bundledProducts,
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete_bundle' => $this->idProductConcreteBundle,
            'is_never_out_of_stock' => $this->isNeverOutOfStock,
            'bundles_to_remove' => $this->bundlesToRemove,
            'bundled_products' => $this->bundledProducts,
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete_bundle' => $this->idProductConcreteBundle instanceof AbstractTransfer ? $this->idProductConcreteBundle->toArray(true, false) : $this->idProductConcreteBundle,
            'is_never_out_of_stock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, false) : $this->isNeverOutOfStock,
            'bundles_to_remove' => $this->bundlesToRemove instanceof AbstractTransfer ? $this->bundlesToRemove->toArray(true, false) : $this->bundlesToRemove,
            'bundled_products' => $this->bundledProducts instanceof AbstractTransfer ? $this->bundledProducts->toArray(true, false) : $this->addValuesToCollection($this->bundledProducts, true, false),
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConcreteBundle' => $this->idProductConcreteBundle instanceof AbstractTransfer ? $this->idProductConcreteBundle->toArray(true, true) : $this->idProductConcreteBundle,
            'isNeverOutOfStock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, true) : $this->isNeverOutOfStock,
            'bundlesToRemove' => $this->bundlesToRemove instanceof AbstractTransfer ? $this->bundlesToRemove->toArray(true, true) : $this->bundlesToRemove,
            'bundledProducts' => $this->bundledProducts instanceof AbstractTransfer ? $this->bundledProducts->toArray(true, true) : $this->addValuesToCollection($this->bundledProducts, true, true),
            'availability' => $this->availability,
        ];
    }
}
