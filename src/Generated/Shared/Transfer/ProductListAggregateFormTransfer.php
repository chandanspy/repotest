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
class ProductListAggregateFormTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_LIST = 'productList';

    /**
     * @var string
     */
    public const PRODUCT_LIST_CATEGORY_RELATION = 'productListCategoryRelation';

    /**
     * @var string
     */
    public const PRODUCT_LIST_PRODUCT_CONCRETE_RELATION = 'productListProductConcreteRelation';

    /**
     * @var string
     */
    public const ASSIGNED_PRODUCT_IDS = 'assignedProductIds';

    /**
     * @var string
     */
    public const PRODUCT_IDS_TO_BE_ASSIGNED = 'productIdsToBeAssigned';

    /**
     * @var string
     */
    public const PRODUCT_IDS_TO_BE_DE_ASSIGNED = 'productIdsToBeDeAssigned';

    /**
     * @var string
     */
    public const OWNER_TYPE = 'ownerType';

    /**
     * @var \Generated\Shared\Transfer\ProductListTransfer|null
     */
    protected $productList;

    /**
     * @var \Generated\Shared\Transfer\ProductListCategoryRelationTransfer|null
     */
    protected $productListCategoryRelation;

    /**
     * @var \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer|null
     */
    protected $productListProductConcreteRelation;

    /**
     * @var string|null
     */
    protected $assignedProductIds;

    /**
     * @var string|null
     */
    protected $productIdsToBeAssigned;

    /**
     * @var string|null
     */
    protected $productIdsToBeDeAssigned;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_list' => 'productList',
        'productList' => 'productList',
        'ProductList' => 'productList',
        'product_list_category_relation' => 'productListCategoryRelation',
        'productListCategoryRelation' => 'productListCategoryRelation',
        'ProductListCategoryRelation' => 'productListCategoryRelation',
        'product_list_product_concrete_relation' => 'productListProductConcreteRelation',
        'productListProductConcreteRelation' => 'productListProductConcreteRelation',
        'ProductListProductConcreteRelation' => 'productListProductConcreteRelation',
        'assigned_product_ids' => 'assignedProductIds',
        'assignedProductIds' => 'assignedProductIds',
        'AssignedProductIds' => 'assignedProductIds',
        'product_ids_to_be_assigned' => 'productIdsToBeAssigned',
        'productIdsToBeAssigned' => 'productIdsToBeAssigned',
        'ProductIdsToBeAssigned' => 'productIdsToBeAssigned',
        'product_ids_to_be_de_assigned' => 'productIdsToBeDeAssigned',
        'productIdsToBeDeAssigned' => 'productIdsToBeDeAssigned',
        'ProductIdsToBeDeAssigned' => 'productIdsToBeDeAssigned',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_LIST => [
            'type' => 'Generated\Shared\Transfer\ProductListTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST_CATEGORY_RELATION => [
            'type' => 'Generated\Shared\Transfer\ProductListCategoryRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list_category_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LIST_PRODUCT_CONCRETE_RELATION => [
            'type' => 'Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list_product_concrete_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ASSIGNED_PRODUCT_IDS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'assigned_product_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IDS_TO_BE_ASSIGNED => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_ids_to_be_assigned',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IDS_TO_BE_DE_ASSIGNED => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_ids_to_be_de_assigned',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OWNER_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'owner_type',
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
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer|null $productList
     *
     * @return $this
     */
    public function setProductList(ProductListTransfer $productList = null)
    {
        $this->productList = $productList;
        $this->modifiedProperties[self::PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer|null
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListTransfer $productList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListOrFail(ProductListTransfer $productList)
    {
        return $this->setProductList($productList);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListTransfer
     */
    public function getProductListOrFail()
    {
        if ($this->productList === null) {
            $this->throwNullValueException(static::PRODUCT_LIST);
        }

        return $this->productList;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductList()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListCategoryRelationTransfer|null $productListCategoryRelation
     *
     * @return $this
     */
    public function setProductListCategoryRelation(ProductListCategoryRelationTransfer $productListCategoryRelation = null)
    {
        $this->productListCategoryRelation = $productListCategoryRelation;
        $this->modifiedProperties[self::PRODUCT_LIST_CATEGORY_RELATION] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return \Generated\Shared\Transfer\ProductListCategoryRelationTransfer|null
     */
    public function getProductListCategoryRelation()
    {
        return $this->productListCategoryRelation;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListCategoryRelationTransfer $productListCategoryRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListCategoryRelationOrFail(ProductListCategoryRelationTransfer $productListCategoryRelation)
    {
        return $this->setProductListCategoryRelation($productListCategoryRelation);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListCategoryRelationTransfer
     */
    public function getProductListCategoryRelationOrFail()
    {
        if ($this->productListCategoryRelation === null) {
            $this->throwNullValueException(static::PRODUCT_LIST_CATEGORY_RELATION);
        }

        return $this->productListCategoryRelation;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListCategoryRelation()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_CATEGORY_RELATION);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer|null $productListProductConcreteRelation
     *
     * @return $this
     */
    public function setProductListProductConcreteRelation(ProductListProductConcreteRelationTransfer $productListProductConcreteRelation = null)
    {
        $this->productListProductConcreteRelation = $productListProductConcreteRelation;
        $this->modifiedProperties[self::PRODUCT_LIST_PRODUCT_CONCRETE_RELATION] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer|null
     */
    public function getProductListProductConcreteRelation()
    {
        return $this->productListProductConcreteRelation;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer $productListProductConcreteRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListProductConcreteRelationOrFail(ProductListProductConcreteRelationTransfer $productListProductConcreteRelation)
    {
        return $this->setProductListProductConcreteRelation($productListProductConcreteRelation);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer
     */
    public function getProductListProductConcreteRelationOrFail()
    {
        if ($this->productListProductConcreteRelation === null) {
            $this->throwNullValueException(static::PRODUCT_LIST_PRODUCT_CONCRETE_RELATION);
        }

        return $this->productListProductConcreteRelation;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListProductConcreteRelation()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_PRODUCT_CONCRETE_RELATION);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $assignedProductIds
     *
     * @return $this
     */
    public function setAssignedProductIds($assignedProductIds)
    {
        $this->assignedProductIds = $assignedProductIds;
        $this->modifiedProperties[self::ASSIGNED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return string|null
     */
    public function getAssignedProductIds()
    {
        return $this->assignedProductIds;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $assignedProductIds
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssignedProductIdsOrFail($assignedProductIds)
    {
        if ($assignedProductIds === null) {
            $this->throwNullValueException(static::ASSIGNED_PRODUCT_IDS);
        }

        return $this->setAssignedProductIds($assignedProductIds);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssignedProductIdsOrFail()
    {
        if ($this->assignedProductIds === null) {
            $this->throwNullValueException(static::ASSIGNED_PRODUCT_IDS);
        }

        return $this->assignedProductIds;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssignedProductIds()
    {
        $this->assertPropertyIsSet(self::ASSIGNED_PRODUCT_IDS);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $productIdsToBeAssigned
     *
     * @return $this
     */
    public function setProductIdsToBeAssigned($productIdsToBeAssigned)
    {
        $this->productIdsToBeAssigned = $productIdsToBeAssigned;
        $this->modifiedProperties[self::PRODUCT_IDS_TO_BE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return string|null
     */
    public function getProductIdsToBeAssigned()
    {
        return $this->productIdsToBeAssigned;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $productIdsToBeAssigned
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductIdsToBeAssignedOrFail($productIdsToBeAssigned)
    {
        if ($productIdsToBeAssigned === null) {
            $this->throwNullValueException(static::PRODUCT_IDS_TO_BE_ASSIGNED);
        }

        return $this->setProductIdsToBeAssigned($productIdsToBeAssigned);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductIdsToBeAssignedOrFail()
    {
        if ($this->productIdsToBeAssigned === null) {
            $this->throwNullValueException(static::PRODUCT_IDS_TO_BE_ASSIGNED);
        }

        return $this->productIdsToBeAssigned;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIdsToBeAssigned()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDS_TO_BE_ASSIGNED);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $productIdsToBeDeAssigned
     *
     * @return $this
     */
    public function setProductIdsToBeDeAssigned($productIdsToBeDeAssigned)
    {
        $this->productIdsToBeDeAssigned = $productIdsToBeDeAssigned;
        $this->modifiedProperties[self::PRODUCT_IDS_TO_BE_DE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @return string|null
     */
    public function getProductIdsToBeDeAssigned()
    {
        return $this->productIdsToBeDeAssigned;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @param string|null $productIdsToBeDeAssigned
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductIdsToBeDeAssignedOrFail($productIdsToBeDeAssigned)
    {
        if ($productIdsToBeDeAssigned === null) {
            $this->throwNullValueException(static::PRODUCT_IDS_TO_BE_DE_ASSIGNED);
        }

        return $this->setProductIdsToBeDeAssigned($productIdsToBeDeAssigned);
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductIdsToBeDeAssignedOrFail()
    {
        if ($this->productIdsToBeDeAssigned === null) {
            $this->throwNullValueException(static::PRODUCT_IDS_TO_BE_DE_ASSIGNED);
        }

        return $this->productIdsToBeDeAssigned;
    }

    /**
     * @module ConfigurableBundleGui|ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIdsToBeDeAssigned()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDS_TO_BE_DE_ASSIGNED);

        return $this;
    }

    /**
     * @module ProductListGui
     *
     * @param string|null $ownerType
     *
     * @return $this
     */
    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;
        $this->modifiedProperties[self::OWNER_TYPE] = true;

        return $this;
    }

    /**
     * @module ProductListGui
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module ProductListGui
     *
     * @param string|null $ownerType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerTypeOrFail($ownerType)
    {
        if ($ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->setOwnerType($ownerType);
    }

    /**
     * @module ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOwnerTypeOrFail()
    {
        if ($this->ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->ownerType;
    }

    /**
     * @module ProductListGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerType()
    {
        $this->assertPropertyIsSet(self::OWNER_TYPE);

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
                case 'assignedProductIds':
                case 'productIdsToBeAssigned':
                case 'productIdsToBeDeAssigned':
                case 'ownerType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productList':
                case 'productListCategoryRelation':
                case 'productListProductConcreteRelation':
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
                case 'assignedProductIds':
                case 'productIdsToBeAssigned':
                case 'productIdsToBeDeAssigned':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                case 'productListCategoryRelation':
                case 'productListProductConcreteRelation':
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
                case 'assignedProductIds':
                case 'productIdsToBeAssigned':
                case 'productIdsToBeDeAssigned':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'productList':
                case 'productListCategoryRelation':
                case 'productListProductConcreteRelation':
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
            'assignedProductIds' => $this->assignedProductIds,
            'productIdsToBeAssigned' => $this->productIdsToBeAssigned,
            'productIdsToBeDeAssigned' => $this->productIdsToBeDeAssigned,
            'ownerType' => $this->ownerType,
            'productList' => $this->productList,
            'productListCategoryRelation' => $this->productListCategoryRelation,
            'productListProductConcreteRelation' => $this->productListProductConcreteRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'assigned_product_ids' => $this->assignedProductIds,
            'product_ids_to_be_assigned' => $this->productIdsToBeAssigned,
            'product_ids_to_be_de_assigned' => $this->productIdsToBeDeAssigned,
            'owner_type' => $this->ownerType,
            'product_list' => $this->productList,
            'product_list_category_relation' => $this->productListCategoryRelation,
            'product_list_product_concrete_relation' => $this->productListProductConcreteRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'assigned_product_ids' => $this->assignedProductIds instanceof AbstractTransfer ? $this->assignedProductIds->toArray(true, false) : $this->assignedProductIds,
            'product_ids_to_be_assigned' => $this->productIdsToBeAssigned instanceof AbstractTransfer ? $this->productIdsToBeAssigned->toArray(true, false) : $this->productIdsToBeAssigned,
            'product_ids_to_be_de_assigned' => $this->productIdsToBeDeAssigned instanceof AbstractTransfer ? $this->productIdsToBeDeAssigned->toArray(true, false) : $this->productIdsToBeDeAssigned,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
            'product_list' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, false) : $this->productList,
            'product_list_category_relation' => $this->productListCategoryRelation instanceof AbstractTransfer ? $this->productListCategoryRelation->toArray(true, false) : $this->productListCategoryRelation,
            'product_list_product_concrete_relation' => $this->productListProductConcreteRelation instanceof AbstractTransfer ? $this->productListProductConcreteRelation->toArray(true, false) : $this->productListProductConcreteRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'assignedProductIds' => $this->assignedProductIds instanceof AbstractTransfer ? $this->assignedProductIds->toArray(true, true) : $this->assignedProductIds,
            'productIdsToBeAssigned' => $this->productIdsToBeAssigned instanceof AbstractTransfer ? $this->productIdsToBeAssigned->toArray(true, true) : $this->productIdsToBeAssigned,
            'productIdsToBeDeAssigned' => $this->productIdsToBeDeAssigned instanceof AbstractTransfer ? $this->productIdsToBeDeAssigned->toArray(true, true) : $this->productIdsToBeDeAssigned,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
            'productList' => $this->productList instanceof AbstractTransfer ? $this->productList->toArray(true, true) : $this->productList,
            'productListCategoryRelation' => $this->productListCategoryRelation instanceof AbstractTransfer ? $this->productListCategoryRelation->toArray(true, true) : $this->productListCategoryRelation,
            'productListProductConcreteRelation' => $this->productListProductConcreteRelation instanceof AbstractTransfer ? $this->productListProductConcreteRelation->toArray(true, true) : $this->productListProductConcreteRelation,
        ];
    }
}
