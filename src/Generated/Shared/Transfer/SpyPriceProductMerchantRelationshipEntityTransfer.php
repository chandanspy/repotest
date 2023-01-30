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
class SpyPriceProductMerchantRelationshipEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP = 'idPriceProductMerchantRelationship';

    /**
     * @var string
     */
    public const FK_MERCHANT_RELATIONSHIP = 'fkMerchantRelationship';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT_STORE = 'fkPriceProductStore';

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
    public const PRICE_PRODUCT_STORE = 'priceProductStore';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP = 'merchantRelationship';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT = 'productAbstract';

    /**
     * @var string|null
     */
    protected $idPriceProductMerchantRelationship;

    /**
     * @var integer|null
     */
    protected $fkMerchantRelationship;

    /**
     * @var string|null
     */
    protected $fkPriceProductStore;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null
     */
    protected $priceProductStore;

    /**
     * @var \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null
     */
    protected $merchantRelationship;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $productAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_merchant_relationship' => 'idPriceProductMerchantRelationship',
        'idPriceProductMerchantRelationship' => 'idPriceProductMerchantRelationship',
        'IdPriceProductMerchantRelationship' => 'idPriceProductMerchantRelationship',
        'fk_merchant_relationship' => 'fkMerchantRelationship',
        'fkMerchantRelationship' => 'fkMerchantRelationship',
        'FkMerchantRelationship' => 'fkMerchantRelationship',
        'fk_price_product_store' => 'fkPriceProductStore',
        'fkPriceProductStore' => 'fkPriceProductStore',
        'FkPriceProductStore' => 'fkPriceProductStore',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'price_product_store' => 'priceProductStore',
        'priceProductStore' => 'priceProductStore',
        'PriceProductStore' => 'priceProductStore',
        'merchant_relationship' => 'merchantRelationship',
        'merchantRelationship' => 'merchantRelationship',
        'MerchantRelationship' => 'merchantRelationship',
        'product' => 'product',
        'Product' => 'product',
        'product_abstract' => 'productAbstract',
        'productAbstract' => 'productAbstract',
        'ProductAbstract' => 'productAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT_RELATIONSHIP => [
            'type' => 'integer',
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
        self::FK_PRICE_PRODUCT_STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fk_price_product_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT => [
            'type' => 'integer',
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
        self::PRICE_PRODUCT_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product_store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_RELATIONSHIP => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract',
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
    public static $entityNamespace = 'Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship';


    /**
     * @module 
     *
     * @param string|null $idPriceProductMerchantRelationship
     *
     * @return $this
     */
    public function setIdPriceProductMerchantRelationship($idPriceProductMerchantRelationship)
    {
        $this->idPriceProductMerchantRelationship = $idPriceProductMerchantRelationship;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdPriceProductMerchantRelationship()
    {
        return $this->idPriceProductMerchantRelationship;
    }

    /**
     * @module 
     *
     * @param string|null $idPriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductMerchantRelationshipOrFail($idPriceProductMerchantRelationship)
    {
        if ($idPriceProductMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);
        }

        return $this->setIdPriceProductMerchantRelationship($idPriceProductMerchantRelationship);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPriceProductMerchantRelationshipOrFail()
    {
        if ($this->idPriceProductMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);
        }

        return $this->idPriceProductMerchantRelationship;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchantRelationship
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkMerchantRelationship()
    {
        return $this->fkMerchantRelationship;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchantRelationship
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkMerchantRelationshipOrFail()
    {
        if ($this->fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->fkMerchantRelationship;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $fkPriceProductStore
     *
     * @return $this
     */
    public function setFkPriceProductStore($fkPriceProductStore)
    {
        $this->fkPriceProductStore = $fkPriceProductStore;
        $this->modifiedProperties[self::FK_PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getFkPriceProductStore()
    {
        return $this->fkPriceProductStore;
    }

    /**
     * @module 
     *
     * @param string|null $fkPriceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceProductStoreOrFail($fkPriceProductStore)
    {
        if ($fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->setFkPriceProductStore($fkPriceProductStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFkPriceProductStoreOrFail()
    {
        if ($this->fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->fkPriceProductStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceProductStore()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_PRODUCT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
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
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null $priceProductStore
     *
     * @return $this
     */
    public function setPriceProductStore(SpyPriceProductStoreEntityTransfer $priceProductStore = null)
    {
        $this->priceProductStore = $priceProductStore;
        $this->modifiedProperties[self::PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null
     */
    public function getPriceProductStore()
    {
        return $this->priceProductStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer $priceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductStoreOrFail(SpyPriceProductStoreEntityTransfer $priceProductStore)
    {
        return $this->setPriceProductStore($priceProductStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer
     */
    public function getPriceProductStoreOrFail()
    {
        if ($this->priceProductStore === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT_STORE);
        }

        return $this->priceProductStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProductStore()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null $merchantRelationship
     *
     * @return $this
     */
    public function setMerchantRelationship(SpyMerchantRelationshipEntityTransfer $merchantRelationship = null)
    {
        $this->merchantRelationship = $merchantRelationship;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null
     */
    public function getMerchantRelationship()
    {
        return $this->merchantRelationship;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer $merchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantRelationshipOrFail(SpyMerchantRelationshipEntityTransfer $merchantRelationship)
    {
        return $this->setMerchantRelationship($merchantRelationship);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer
     */
    public function getMerchantRelationshipOrFail()
    {
        if ($this->merchantRelationship === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP);
        }

        return $this->merchantRelationship;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(SpyProductEntityTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(SpyProductEntityTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $productAbstract
     *
     * @return $this
     */
    public function setProductAbstract(SpyProductAbstractEntityTransfer $productAbstract = null)
    {
        $this->productAbstract = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getProductAbstract()
    {
        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $productAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractOrFail(SpyProductAbstractEntityTransfer $productAbstract)
    {
        return $this->setProductAbstract($productAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getProductAbstractOrFail()
    {
        if ($this->productAbstract === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT);
        }

        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstract()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT);

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
                case 'idPriceProductMerchantRelationship':
                case 'fkMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkProduct':
                case 'fkProductAbstract':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'priceProductStore':
                case 'merchantRelationship':
                case 'product':
                case 'productAbstract':
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
                case 'idPriceProductMerchantRelationship':
                case 'fkMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkProduct':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProductStore':
                case 'merchantRelationship':
                case 'product':
                case 'productAbstract':
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
                case 'idPriceProductMerchantRelationship':
                case 'fkMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkProduct':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProductStore':
                case 'merchantRelationship':
                case 'product':
                case 'productAbstract':
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
            'idPriceProductMerchantRelationship' => $this->idPriceProductMerchantRelationship,
            'fkMerchantRelationship' => $this->fkMerchantRelationship,
            'fkPriceProductStore' => $this->fkPriceProductStore,
            'fkProduct' => $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
            'priceProductStore' => $this->priceProductStore,
            'merchantRelationship' => $this->merchantRelationship,
            'product' => $this->product,
            'productAbstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_merchant_relationship' => $this->idPriceProductMerchantRelationship,
            'fk_merchant_relationship' => $this->fkMerchantRelationship,
            'fk_price_product_store' => $this->fkPriceProductStore,
            'fk_product' => $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
            'price_product_store' => $this->priceProductStore,
            'merchant_relationship' => $this->merchantRelationship,
            'product' => $this->product,
            'product_abstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_merchant_relationship' => $this->idPriceProductMerchantRelationship instanceof AbstractTransfer ? $this->idPriceProductMerchantRelationship->toArray(true, false) : $this->idPriceProductMerchantRelationship,
            'fk_merchant_relationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, false) : $this->fkMerchantRelationship,
            'fk_price_product_store' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, false) : $this->fkPriceProductStore,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'price_product_store' => $this->priceProductStore instanceof AbstractTransfer ? $this->priceProductStore->toArray(true, false) : $this->priceProductStore,
            'merchant_relationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, false) : $this->merchantRelationship,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'product_abstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, false) : $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductMerchantRelationship' => $this->idPriceProductMerchantRelationship instanceof AbstractTransfer ? $this->idPriceProductMerchantRelationship->toArray(true, true) : $this->idPriceProductMerchantRelationship,
            'fkMerchantRelationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, true) : $this->fkMerchantRelationship,
            'fkPriceProductStore' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, true) : $this->fkPriceProductStore,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'priceProductStore' => $this->priceProductStore instanceof AbstractTransfer ? $this->priceProductStore->toArray(true, true) : $this->priceProductStore,
            'merchantRelationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, true) : $this->merchantRelationship,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'productAbstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, true) : $this->productAbstract,
        ];
    }
}
