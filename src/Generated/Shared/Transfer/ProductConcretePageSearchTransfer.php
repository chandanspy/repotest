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
class ProductConcretePageSearchTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const PRODUCT_LIST_MAP = 'productListMap';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE_PAGE_SEARCH = 'idProductConcretePageSearch';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const STRUCTURED_DATA = 'structuredData';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\ProductListMapTransfer|null
     */
    protected $productListMap;

    /**
     * @var int|null
     */
    protected $idProductConcretePageSearch;

    /**
     * @var int|null
     */
    protected $abstractSku;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string|null
     */
    protected $structuredData;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array
     */
    protected $images = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'product_list_map' => 'productListMap',
        'productListMap' => 'productListMap',
        'ProductListMap' => 'productListMap',
        'id_product_concrete_page_search' => 'idProductConcretePageSearch',
        'idProductConcretePageSearch' => 'idProductConcretePageSearch',
        'IdProductConcretePageSearch' => 'idProductConcretePageSearch',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'name' => 'name',
        'Name' => 'name',
        'sku' => 'sku',
        'Sku' => 'sku',
        'locale' => 'locale',
        'Locale' => 'locale',
        'store' => 'store',
        'Store' => 'store',
        'type' => 'type',
        'Type' => 'type',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'data' => 'data',
        'Data' => 'data',
        'structured_data' => 'structuredData',
        'structuredData' => 'structuredData',
        'StructuredData' => 'structuredData',
        'key' => 'key',
        'Key' => 'key',
        'images' => 'images',
        'Images' => 'images',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PRODUCT_LIST_MAP => [
            'type' => 'Generated\Shared\Transfer\ProductListMapTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_list_map',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_CONCRETE_PAGE_SEARCH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete_page_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
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
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRUCTURED_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'structured_data',
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
        self::IMAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'images',
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
     * @module ProductSearchWidget|Catalog|ProductListSearch|ProductPageSearch
     *
     * @param int|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductListSearch|ProductPageSearch
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductListSearch|ProductPageSearch
     *
     * @param int|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductListSearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductListSearch|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module ProductSearchWidget|ProductPageSearch
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
     * @module ProductSearchWidget|ProductPageSearch
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module ProductSearchWidget|ProductPageSearch
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
     * @module ProductSearchWidget|ProductPageSearch
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
     * @module ProductSearchWidget|ProductPageSearch
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
     * @module ProductListSearch
     *
     * @param \Generated\Shared\Transfer\ProductListMapTransfer|null $productListMap
     *
     * @return $this
     */
    public function setProductListMap(ProductListMapTransfer $productListMap = null)
    {
        $this->productListMap = $productListMap;
        $this->modifiedProperties[self::PRODUCT_LIST_MAP] = true;

        return $this;
    }

    /**
     * @module ProductListSearch
     *
     * @return \Generated\Shared\Transfer\ProductListMapTransfer|null
     */
    public function getProductListMap()
    {
        return $this->productListMap;
    }

    /**
     * @module ProductListSearch
     *
     * @param \Generated\Shared\Transfer\ProductListMapTransfer $productListMap
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductListMapOrFail(ProductListMapTransfer $productListMap)
    {
        return $this->setProductListMap($productListMap);
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductListMapTransfer
     */
    public function getProductListMapOrFail()
    {
        if ($this->productListMap === null) {
            $this->throwNullValueException(static::PRODUCT_LIST_MAP);
        }

        return $this->productListMap;
    }

    /**
     * @module ProductListSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductListMap()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LIST_MAP);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $idProductConcretePageSearch
     *
     * @return $this
     */
    public function setIdProductConcretePageSearch($idProductConcretePageSearch)
    {
        $this->idProductConcretePageSearch = $idProductConcretePageSearch;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE_PAGE_SEARCH] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return int|null
     */
    public function getIdProductConcretePageSearch()
    {
        return $this->idProductConcretePageSearch;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $idProductConcretePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcretePageSearchOrFail($idProductConcretePageSearch)
    {
        if ($idProductConcretePageSearch === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_PAGE_SEARCH);
        }

        return $this->setIdProductConcretePageSearch($idProductConcretePageSearch);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcretePageSearchOrFail()
    {
        if ($this->idProductConcretePageSearch === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_PAGE_SEARCH);
        }

        return $this->idProductConcretePageSearch;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcretePageSearch()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE_PAGE_SEARCH);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return int|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module ProductPageSearch
     *
     * @param int|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductPageSearch
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param array|null $data
     *
     * @return $this
     */
    public function setData(array $data = null)
    {
        if ($data === null) {
            $data = [];
        }

        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $structuredData
     *
     * @return $this
     */
    public function setStructuredData($structuredData)
    {
        $this->structuredData = $structuredData;
        $this->modifiedProperties[self::STRUCTURED_DATA] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getStructuredData()
    {
        return $this->structuredData;
    }

    /**
     * @module ProductPageSearch
     *
     * @param string|null $structuredData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStructuredDataOrFail($structuredData)
    {
        if ($structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->setStructuredData($structuredData);
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStructuredDataOrFail()
    {
        if ($this->structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->structuredData;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStructuredData()
    {
        $this->assertPropertyIsSet(self::STRUCTURED_DATA);

        return $this;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
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
     * @module ProductPageSearch
     *
     * @param array|null $images
     *
     * @return $this
     */
    public function setImages(array $images = null)
    {
        if ($images === null) {
            $images = [];
        }

        $this->images = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ProductPageSearch
     *
     * @param mixed $image
     *
     * @return $this
     */
    public function addImage($image)
    {
        $this->images[] = $image;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImages()
    {
        $this->assertPropertyIsSet(self::IMAGES);

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
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'idProductConcretePageSearch':
                case 'abstractSku':
                case 'name':
                case 'sku':
                case 'locale':
                case 'store':
                case 'type':
                case 'isActive':
                case 'data':
                case 'structuredData':
                case 'key':
                case 'images':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productListMap':
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
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'idProductConcretePageSearch':
                case 'abstractSku':
                case 'name':
                case 'sku':
                case 'locale':
                case 'store':
                case 'type':
                case 'isActive':
                case 'data':
                case 'structuredData':
                case 'key':
                case 'images':
                    $values[$arrayKey] = $value;

                    break;
                case 'productListMap':
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
                case 'fkProduct':
                case 'fkProductAbstract':
                case 'idProductConcretePageSearch':
                case 'abstractSku':
                case 'name':
                case 'sku':
                case 'locale':
                case 'store':
                case 'type':
                case 'isActive':
                case 'data':
                case 'structuredData':
                case 'key':
                case 'images':
                    $values[$arrayKey] = $value;

                    break;
                case 'productListMap':
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
            'fkProduct' => $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
            'idProductConcretePageSearch' => $this->idProductConcretePageSearch,
            'abstractSku' => $this->abstractSku,
            'name' => $this->name,
            'sku' => $this->sku,
            'locale' => $this->locale,
            'store' => $this->store,
            'type' => $this->type,
            'isActive' => $this->isActive,
            'data' => $this->data,
            'structuredData' => $this->structuredData,
            'key' => $this->key,
            'images' => $this->images,
            'productListMap' => $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product' => $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
            'id_product_concrete_page_search' => $this->idProductConcretePageSearch,
            'abstract_sku' => $this->abstractSku,
            'name' => $this->name,
            'sku' => $this->sku,
            'locale' => $this->locale,
            'store' => $this->store,
            'type' => $this->type,
            'is_active' => $this->isActive,
            'data' => $this->data,
            'structured_data' => $this->structuredData,
            'key' => $this->key,
            'images' => $this->images,
            'product_list_map' => $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'id_product_concrete_page_search' => $this->idProductConcretePageSearch instanceof AbstractTransfer ? $this->idProductConcretePageSearch->toArray(true, false) : $this->idProductConcretePageSearch,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'structured_data' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, false) : $this->structuredData,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->images,
            'product_list_map' => $this->productListMap instanceof AbstractTransfer ? $this->productListMap->toArray(true, false) : $this->productListMap,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'idProductConcretePageSearch' => $this->idProductConcretePageSearch instanceof AbstractTransfer ? $this->idProductConcretePageSearch->toArray(true, true) : $this->idProductConcretePageSearch,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'structuredData' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, true) : $this->structuredData,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->images,
            'productListMap' => $this->productListMap instanceof AbstractTransfer ? $this->productListMap->toArray(true, true) : $this->productListMap,
        ];
    }
}
