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
class ProductBundleStorageTransfer extends AbstractTransfer
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
     * @var int|null
     */
    protected $idProductConcreteBundle;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductForProductBundleStorageTransfer[]
     */
    protected $bundledProducts;

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
            'type' => 'Generated\Shared\Transfer\ProductForProductBundleStorageTransfer',
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
    ];

    /**
     * @module ProductBundleStorage
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
     * @module ProductBundleStorage
     *
     * @return int|null
     */
    public function getIdProductConcreteBundle()
    {
        return $this->idProductConcreteBundle;
    }

    /**
     * @module ProductBundleStorage
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
     * @module ProductBundleStorage
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
     * @module ProductBundleStorage
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
     * @module ProductBundleStorage|ProductBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductForProductBundleStorageTransfer[] $bundledProducts
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
     * @module ProductBundleStorage|ProductBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductForProductBundleStorageTransfer[]
     */
    public function getBundledProducts()
    {
        return $this->bundledProducts;
    }

    /**
     * @module ProductBundleStorage|ProductBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductForProductBundleStorageTransfer $bundledProduct
     *
     * @return $this
     */
    public function addBundledProduct(ProductForProductBundleStorageTransfer $bundledProduct)
    {
        $this->bundledProducts[] = $bundledProduct;
        $this->modifiedProperties[self::BUNDLED_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundlesRestApi
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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'bundledProducts':
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
                case 'idProductConcreteBundle':
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
            'bundledProducts' => $this->bundledProducts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete_bundle' => $this->idProductConcreteBundle,
            'bundled_products' => $this->bundledProducts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete_bundle' => $this->idProductConcreteBundle instanceof AbstractTransfer ? $this->idProductConcreteBundle->toArray(true, false) : $this->idProductConcreteBundle,
            'bundled_products' => $this->bundledProducts instanceof AbstractTransfer ? $this->bundledProducts->toArray(true, false) : $this->addValuesToCollection($this->bundledProducts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConcreteBundle' => $this->idProductConcreteBundle instanceof AbstractTransfer ? $this->idProductConcreteBundle->toArray(true, true) : $this->idProductConcreteBundle,
            'bundledProducts' => $this->bundledProducts instanceof AbstractTransfer ? $this->bundledProducts->toArray(true, true) : $this->addValuesToCollection($this->bundledProducts, true, true),
        ];
    }
}
