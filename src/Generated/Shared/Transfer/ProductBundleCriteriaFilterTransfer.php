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
class ProductBundleCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_BUNDLED_PRODUCT = 'idBundledProduct';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_IDS = 'productConcreteIds';

    /**
     * @var string
     */
    public const BUNDLED_PRODUCT_IDS = 'bundledProductIds';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const APPLY_GROUPED = 'applyGrouped';

    /**
     * @var string
     */
    public const IS_PRODUCT_CONCRETE_ACTIVE = 'isProductConcreteActive';

    /**
     * @var string
     */
    public const IS_BUNDLED_PRODUCT_ACTIVE = 'isBundledProductActive';

    /**
     * @var int|null
     */
    protected $idBundledProduct;

    /**
     * @var int[]
     */
    protected $productConcreteIds = [];

    /**
     * @var int[]
     */
    protected $bundledProductIds = [];

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var bool|null
     */
    protected $applyGrouped;

    /**
     * @var bool|null
     */
    protected $isProductConcreteActive;

    /**
     * @var bool|null
     */
    protected $isBundledProductActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_bundled_product' => 'idBundledProduct',
        'idBundledProduct' => 'idBundledProduct',
        'IdBundledProduct' => 'idBundledProduct',
        'product_concrete_ids' => 'productConcreteIds',
        'productConcreteIds' => 'productConcreteIds',
        'ProductConcreteIds' => 'productConcreteIds',
        'bundled_product_ids' => 'bundledProductIds',
        'bundledProductIds' => 'bundledProductIds',
        'BundledProductIds' => 'bundledProductIds',
        'filter' => 'filter',
        'Filter' => 'filter',
        'apply_grouped' => 'applyGrouped',
        'applyGrouped' => 'applyGrouped',
        'ApplyGrouped' => 'applyGrouped',
        'is_product_concrete_active' => 'isProductConcreteActive',
        'isProductConcreteActive' => 'isProductConcreteActive',
        'IsProductConcreteActive' => 'isProductConcreteActive',
        'is_bundled_product_active' => 'isBundledProductActive',
        'isBundledProductActive' => 'isBundledProductActive',
        'IsBundledProductActive' => 'isBundledProductActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_BUNDLED_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_bundled_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE_IDS => [
            'type' => 'int[]',
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
        self::BUNDLED_PRODUCT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'bundled_product_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLY_GROUPED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'apply_grouped',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_PRODUCT_CONCRETE_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_product_concrete_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_BUNDLED_PRODUCT_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_bundled_product_active',
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
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @param int|null $idBundledProduct
     *
     * @return $this
     */
    public function setIdBundledProduct($idBundledProduct)
    {
        $this->idBundledProduct = $idBundledProduct;
        $this->modifiedProperties[self::ID_BUNDLED_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @return int|null
     */
    public function getIdBundledProduct()
    {
        return $this->idBundledProduct;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @param int|null $idBundledProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdBundledProductOrFail($idBundledProduct)
    {
        if ($idBundledProduct === null) {
            $this->throwNullValueException(static::ID_BUNDLED_PRODUCT);
        }

        return $this->setIdBundledProduct($idBundledProduct);
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdBundledProductOrFail()
    {
        if ($this->idBundledProduct === null) {
            $this->throwNullValueException(static::ID_BUNDLED_PRODUCT);
        }

        return $this->idBundledProduct;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdBundledProduct()
    {
        $this->assertPropertyIsSet(self::ID_BUNDLED_PRODUCT);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param int[]|null $productConcreteIds
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
     * @module ProductBundleStorage|ProductBundle
     *
     * @return int[]
     */
    public function getProductConcreteIds()
    {
        return $this->productConcreteIds;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param int $idProductConcrete
     *
     * @return $this
     */
    public function addIdProductConcrete($idProductConcrete)
    {
        $this->productConcreteIds[] = $idProductConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
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
     * @module ProductBundleStorage|ProductBundle
     *
     * @param int[]|null $bundledProductIds
     *
     * @return $this
     */
    public function setBundledProductIds(array $bundledProductIds = null)
    {
        if ($bundledProductIds === null) {
            $bundledProductIds = [];
        }

        $this->bundledProductIds = $bundledProductIds;
        $this->modifiedProperties[self::BUNDLED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return int[]
     */
    public function getBundledProductIds()
    {
        return $this->bundledProductIds;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param int $idBundledProduct
     *
     * @return $this
     */
    public function addIdBundledProduct($idBundledProduct)
    {
        $this->bundledProductIds[] = $idBundledProduct;
        $this->modifiedProperties[self::BUNDLED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundledProductIds()
    {
        $this->assertPropertyIsSet(self::BUNDLED_PRODUCT_IDS);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $applyGrouped
     *
     * @return $this
     */
    public function setApplyGrouped($applyGrouped)
    {
        $this->applyGrouped = $applyGrouped;
        $this->modifiedProperties[self::APPLY_GROUPED] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return bool|null
     */
    public function getApplyGrouped()
    {
        return $this->applyGrouped;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $applyGrouped
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplyGroupedOrFail($applyGrouped)
    {
        if ($applyGrouped === null) {
            $this->throwNullValueException(static::APPLY_GROUPED);
        }

        return $this->setApplyGrouped($applyGrouped);
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getApplyGroupedOrFail()
    {
        if ($this->applyGrouped === null) {
            $this->throwNullValueException(static::APPLY_GROUPED);
        }

        return $this->applyGrouped;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplyGrouped()
    {
        $this->assertPropertyIsSet(self::APPLY_GROUPED);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isProductConcreteActive
     *
     * @return $this
     */
    public function setIsProductConcreteActive($isProductConcreteActive)
    {
        $this->isProductConcreteActive = $isProductConcreteActive;
        $this->modifiedProperties[self::IS_PRODUCT_CONCRETE_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return bool|null
     */
    public function getIsProductConcreteActive()
    {
        return $this->isProductConcreteActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isProductConcreteActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsProductConcreteActiveOrFail($isProductConcreteActive)
    {
        if ($isProductConcreteActive === null) {
            $this->throwNullValueException(static::IS_PRODUCT_CONCRETE_ACTIVE);
        }

        return $this->setIsProductConcreteActive($isProductConcreteActive);
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsProductConcreteActiveOrFail()
    {
        if ($this->isProductConcreteActive === null) {
            $this->throwNullValueException(static::IS_PRODUCT_CONCRETE_ACTIVE);
        }

        return $this->isProductConcreteActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsProductConcreteActive()
    {
        $this->assertPropertyIsSet(self::IS_PRODUCT_CONCRETE_ACTIVE);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isBundledProductActive
     *
     * @return $this
     */
    public function setIsBundledProductActive($isBundledProductActive)
    {
        $this->isBundledProductActive = $isBundledProductActive;
        $this->modifiedProperties[self::IS_BUNDLED_PRODUCT_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return bool|null
     */
    public function getIsBundledProductActive()
    {
        return $this->isBundledProductActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isBundledProductActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsBundledProductActiveOrFail($isBundledProductActive)
    {
        if ($isBundledProductActive === null) {
            $this->throwNullValueException(static::IS_BUNDLED_PRODUCT_ACTIVE);
        }

        return $this->setIsBundledProductActive($isBundledProductActive);
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsBundledProductActiveOrFail()
    {
        if ($this->isBundledProductActive === null) {
            $this->throwNullValueException(static::IS_BUNDLED_PRODUCT_ACTIVE);
        }

        return $this->isBundledProductActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsBundledProductActive()
    {
        $this->assertPropertyIsSet(self::IS_BUNDLED_PRODUCT_ACTIVE);

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
                case 'idBundledProduct':
                case 'productConcreteIds':
                case 'bundledProductIds':
                case 'applyGrouped':
                case 'isProductConcreteActive':
                case 'isBundledProductActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'idBundledProduct':
                case 'productConcreteIds':
                case 'bundledProductIds':
                case 'applyGrouped':
                case 'isProductConcreteActive':
                case 'isBundledProductActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'idBundledProduct':
                case 'productConcreteIds':
                case 'bundledProductIds':
                case 'applyGrouped':
                case 'isProductConcreteActive':
                case 'isBundledProductActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'idBundledProduct' => $this->idBundledProduct,
            'productConcreteIds' => $this->productConcreteIds,
            'bundledProductIds' => $this->bundledProductIds,
            'applyGrouped' => $this->applyGrouped,
            'isProductConcreteActive' => $this->isProductConcreteActive,
            'isBundledProductActive' => $this->isBundledProductActive,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_bundled_product' => $this->idBundledProduct,
            'product_concrete_ids' => $this->productConcreteIds,
            'bundled_product_ids' => $this->bundledProductIds,
            'apply_grouped' => $this->applyGrouped,
            'is_product_concrete_active' => $this->isProductConcreteActive,
            'is_bundled_product_active' => $this->isBundledProductActive,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_bundled_product' => $this->idBundledProduct instanceof AbstractTransfer ? $this->idBundledProduct->toArray(true, false) : $this->idBundledProduct,
            'product_concrete_ids' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, false) : $this->productConcreteIds,
            'bundled_product_ids' => $this->bundledProductIds instanceof AbstractTransfer ? $this->bundledProductIds->toArray(true, false) : $this->bundledProductIds,
            'apply_grouped' => $this->applyGrouped instanceof AbstractTransfer ? $this->applyGrouped->toArray(true, false) : $this->applyGrouped,
            'is_product_concrete_active' => $this->isProductConcreteActive instanceof AbstractTransfer ? $this->isProductConcreteActive->toArray(true, false) : $this->isProductConcreteActive,
            'is_bundled_product_active' => $this->isBundledProductActive instanceof AbstractTransfer ? $this->isBundledProductActive->toArray(true, false) : $this->isBundledProductActive,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idBundledProduct' => $this->idBundledProduct instanceof AbstractTransfer ? $this->idBundledProduct->toArray(true, true) : $this->idBundledProduct,
            'productConcreteIds' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, true) : $this->productConcreteIds,
            'bundledProductIds' => $this->bundledProductIds instanceof AbstractTransfer ? $this->bundledProductIds->toArray(true, true) : $this->bundledProductIds,
            'applyGrouped' => $this->applyGrouped instanceof AbstractTransfer ? $this->applyGrouped->toArray(true, true) : $this->applyGrouped,
            'isProductConcreteActive' => $this->isProductConcreteActive instanceof AbstractTransfer ? $this->isProductConcreteActive->toArray(true, true) : $this->isProductConcreteActive,
            'isBundledProductActive' => $this->isBundledProductActive instanceof AbstractTransfer ? $this->isBundledProductActive->toArray(true, true) : $this->isBundledProductActive,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
