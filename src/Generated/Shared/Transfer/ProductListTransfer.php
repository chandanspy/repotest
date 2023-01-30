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
class ProductListTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LIST = 'idProductList';

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
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const FK_MERCHANT_RELATIONSHIP = 'fkMerchantRelationship';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var int|null
     */
    protected $idProductList;

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
    protected $type;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var int|null
     */
    protected $fkMerchantRelationship;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_list' => 'idProductList',
        'idProductList' => 'idProductList',
        'IdProductList' => 'idProductList',
        'product_list_category_relation' => 'productListCategoryRelation',
        'productListCategoryRelation' => 'productListCategoryRelation',
        'ProductListCategoryRelation' => 'productListCategoryRelation',
        'product_list_product_concrete_relation' => 'productListProductConcreteRelation',
        'productListProductConcreteRelation' => 'productListProductConcreteRelation',
        'ProductListProductConcreteRelation' => 'productListProductConcreteRelation',
        'type' => 'type',
        'Type' => 'type',
        'title' => 'title',
        'Title' => 'title',
        'fk_merchant_relationship' => 'fkMerchantRelationship',
        'fkMerchantRelationship' => 'fkMerchantRelationship',
        'FkMerchantRelationship' => 'fkMerchantRelationship',
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_list',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
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
     * @module ConfigurableBundlePage|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesProductsResourceRelationship|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductListGui|ProductListSearch|ProductList
     *
     * @param int|null $idProductList
     *
     * @return $this
     */
    public function setIdProductList($idProductList)
    {
        $this->idProductList = $idProductList;
        $this->modifiedProperties[self::ID_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesProductsResourceRelationship|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductListGui|ProductListSearch|ProductList
     *
     * @return int|null
     */
    public function getIdProductList()
    {
        return $this->idProductList;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesProductsResourceRelationship|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductListGui|ProductListSearch|ProductList
     *
     * @param int|null $idProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductListOrFail($idProductList)
    {
        if ($idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->setIdProductList($idProductList);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesProductsResourceRelationship|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductListGui|ProductListSearch|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductListOrFail()
    {
        if ($this->idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->idProductList;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleGui|ConfigurableBundleStorage|ConfigurableBundle|ConfigurableBundlesProductsResourceRelationship|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductListGui|ProductListSearch|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductList()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductListGui|ProductList
     *
     * @return \Generated\Shared\Transfer\ProductListCategoryRelationTransfer|null
     */
    public function getProductListCategoryRelation()
    {
        return $this->productListCategoryRelation;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductBundleProductListConnector|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @return \Generated\Shared\Transfer\ProductListProductConcreteRelationTransfer|null
     */
    public function getProductListProductConcreteRelation()
    {
        return $this->productListProductConcreteRelation;
    }

    /**
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductBundleProductListConnector|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductBundleProductListConnector|ProductListGui|ProductList
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
     * @module ConfigurableBundleGui|ConfigurableBundle|ProductBundleProductListConnector|ProductListGui|ProductList
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
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|MerchantRelationshipProductList|ProductBundleProductListConnector|ProductListGui|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|ProductListGui|ProductList
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->modifiedProperties[self::TITLE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|ProductListGui|ProductList
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|ProductListGui|ProductList
     *
     * @param string|null $title
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTitleOrFail($title)
    {
        if ($title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->setTitle($title);
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|ProductListGui|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTitleOrFail()
    {
        if ($this->title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->title;
    }

    /**
     * @module ConfigurableBundle|MerchantRelationshipProductListGui|ProductListGui|ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTitle()
    {
        $this->assertPropertyIsSet(self::TITLE);

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @param int|null $fkMerchantRelationship
     *
     * @return $this
     */
    public function setFkMerchantRelationship($fkMerchantRelationship)
    {
        $this->fkMerchantRelationship = $fkMerchantRelationship;
        $this->modifiedProperties[self::FK_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @return int|null
     */
    public function getFkMerchantRelationship()
    {
        return $this->fkMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @param int|null $fkMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantRelationshipOrFail($fkMerchantRelationship)
    {
        if ($fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->setFkMerchantRelationship($fkMerchantRelationship);
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkMerchantRelationshipOrFail()
    {
        if ($this->fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->fkMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module ProductList
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ProductList
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductList
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

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
                case 'idProductList':
                case 'type':
                case 'title':
                case 'fkMerchantRelationship':
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'idProductList':
                case 'type':
                case 'title':
                case 'fkMerchantRelationship':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
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
                case 'idProductList':
                case 'type':
                case 'title':
                case 'fkMerchantRelationship':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
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
            'idProductList' => $this->idProductList,
            'type' => $this->type,
            'title' => $this->title,
            'fkMerchantRelationship' => $this->fkMerchantRelationship,
            'key' => $this->key,
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
            'id_product_list' => $this->idProductList,
            'type' => $this->type,
            'title' => $this->title,
            'fk_merchant_relationship' => $this->fkMerchantRelationship,
            'key' => $this->key,
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
            'id_product_list' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, false) : $this->idProductList,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'fk_merchant_relationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, false) : $this->fkMerchantRelationship,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
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
            'idProductList' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, true) : $this->idProductList,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'fkMerchantRelationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, true) : $this->fkMerchantRelationship,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'productListCategoryRelation' => $this->productListCategoryRelation instanceof AbstractTransfer ? $this->productListCategoryRelation->toArray(true, true) : $this->productListCategoryRelation,
            'productListProductConcreteRelation' => $this->productListProductConcreteRelation instanceof AbstractTransfer ? $this->productListProductConcreteRelation->toArray(true, true) : $this->productListProductConcreteRelation,
        ];
    }
}
