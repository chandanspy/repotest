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
class ShoppingListItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const PRODUCT_OPTIONS = 'productOptions';

    /**
     * @var string
     */
    public const SHOPPING_LIST_ITEM_NOTE = 'shoppingListItemNote';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM = 'idShoppingListItem';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST = 'fkShoppingList';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const MERCHANT_REFERENCE = 'merchantReference';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const SHOPPING_LIST_NAME = 'shoppingListName';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    protected $productOptions;

    /**
     * @var \Generated\Shared\Transfer\ShoppingListItemNoteTransfer|null
     */
    protected $shoppingListItemNote;

    /**
     * @var int|null
     */
    protected $idShoppingListItem;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $fkShoppingList;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $merchantReference;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var string|null
     */
    protected $shoppingListName;

    /**
     * @var \Generated\Shared\Transfer\StorageProductTransfer|null
     */
    protected $product;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'product_options' => 'productOptions',
        'productOptions' => 'productOptions',
        'ProductOptions' => 'productOptions',
        'shopping_list_item_note' => 'shoppingListItemNote',
        'shoppingListItemNote' => 'shoppingListItemNote',
        'ShoppingListItemNote' => 'shoppingListItemNote',
        'id_shopping_list_item' => 'idShoppingListItem',
        'idShoppingListItem' => 'idShoppingListItem',
        'IdShoppingListItem' => 'idShoppingListItem',
        'sku' => 'sku',
        'Sku' => 'sku',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'fk_shopping_list' => 'fkShoppingList',
        'fkShoppingList' => 'fkShoppingList',
        'FkShoppingList' => 'fkShoppingList',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'merchant_reference' => 'merchantReference',
        'merchantReference' => 'merchantReference',
        'MerchantReference' => 'merchantReference',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'shopping_list_name' => 'shoppingListName',
        'shoppingListName' => 'shoppingListName',
        'ShoppingListName' => 'shoppingListName',
        'product' => 'product',
        'Product' => 'product',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
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
        self::PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\ProductOptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST_ITEM_NOTE => [
            'type' => 'Generated\Shared\Transfer\ShoppingListItemNoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_item_note',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item',
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
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'merchant_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHOPPING_LIST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shopping_list_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\StorageProductTransfer',
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
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
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
     * @module ProductOptionWidget|ShoppingList
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
     * @module ProductOptionWidget|ShoppingList
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductOptionWidget|ShoppingList
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
     * @module ProductOptionWidget|ShoppingList
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
     * @module ProductOptionWidget|ShoppingList
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
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[] $productOptions
     *
     * @return $this
     */
    public function setProductOptions(ArrayObject $productOptions)
    {
        $this->productOptions = $productOptions;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @param \Generated\Shared\Transfer\ProductOptionTransfer $productOption
     *
     * @return $this
     */
    public function addProductOption(ProductOptionTransfer $productOption)
    {
        $this->productOptions[] = $productOption;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptions()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_OPTIONS);

        return $this;
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemNoteTransfer|null $shoppingListItemNote
     *
     * @return $this
     */
    public function setShoppingListItemNote(ShoppingListItemNoteTransfer $shoppingListItemNote = null)
    {
        $this->shoppingListItemNote = $shoppingListItemNote;
        $this->modifiedProperties[self::SHOPPING_LIST_ITEM_NOTE] = true;

        return $this;
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemNoteTransfer|null
     */
    public function getShoppingListItemNote()
    {
        return $this->shoppingListItemNote;
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemNoteTransfer $shoppingListItemNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListItemNoteOrFail(ShoppingListItemNoteTransfer $shoppingListItemNote)
    {
        return $this->setShoppingListItemNote($shoppingListItemNote);
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShoppingListItemNoteTransfer
     */
    public function getShoppingListItemNoteOrFail()
    {
        if ($this->shoppingListItemNote === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_ITEM_NOTE);
        }

        return $this->shoppingListItemNote;
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListItemNote()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_ITEM_NOTE);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListNote|ShoppingListProductOptionConnector|ShoppingList
     *
     * @param int|null $idShoppingListItem
     *
     * @return $this
     */
    public function setIdShoppingListItem($idShoppingListItem)
    {
        $this->idShoppingListItem = $idShoppingListItem;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListNote|ShoppingListProductOptionConnector|ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListItem()
    {
        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListNote|ShoppingListProductOptionConnector|ShoppingList
     *
     * @param int|null $idShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemOrFail($idShoppingListItem)
    {
        if ($idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->setIdShoppingListItem($idShoppingListItem);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListNote|ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListItemOrFail()
    {
        if ($this->idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->idShoppingListItem;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListNote|ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItem()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ProductDiscontinued|ShoppingListProductOptionConnector|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ProductDiscontinued|ShoppingListProductOptionConnector|ShoppingList
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ProductDiscontinued|ShoppingListProductOptionConnector|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ProductDiscontinued|ShoppingListProductOptionConnector|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ProductDiscontinued|ShoppingListProductOptionConnector|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $fkShoppingList
     *
     * @return $this
     */
    public function setFkShoppingList($fkShoppingList)
    {
        $this->fkShoppingList = $fkShoppingList;
        $this->modifiedProperties[self::FK_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getFkShoppingList()
    {
        return $this->fkShoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $fkShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListOrFail($fkShoppingList)
    {
        if ($fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->setFkShoppingList($fkShoppingList);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkShoppingListOrFail()
    {
        if ($this->fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->fkShoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingList()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module Merchant
     *
     * @param string|null $merchantReference
     *
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        $this->modifiedProperties[self::MERCHANT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Merchant
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @module Merchant
     *
     * @param string|null $merchantReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantReferenceOrFail($merchantReference)
    {
        if ($merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->setMerchantReference($merchantReference);
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMerchantReferenceOrFail()
    {
        if ($this->merchantReference === null) {
            $this->throwNullValueException(static::MERCHANT_REFERENCE);
        }

        return $this->merchantReference;
    }

    /**
     * @module Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantReference()
    {
        $this->assertPropertyIsSet(self::MERCHANT_REFERENCE);

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module ShoppingListProductOptionConnector|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @param string|null $shoppingListName
     *
     * @return $this
     */
    public function setShoppingListName($shoppingListName)
    {
        $this->shoppingListName = $shoppingListName;
        $this->modifiedProperties[self::SHOPPING_LIST_NAME] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return string|null
     */
    public function getShoppingListName()
    {
        return $this->shoppingListName;
    }

    /**
     * @module ShoppingList
     *
     * @param string|null $shoppingListName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShoppingListNameOrFail($shoppingListName)
    {
        if ($shoppingListName === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_NAME);
        }

        return $this->setShoppingListName($shoppingListName);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShoppingListNameOrFail()
    {
        if ($this->shoppingListName === null) {
            $this->throwNullValueException(static::SHOPPING_LIST_NAME);
        }

        return $this->shoppingListName;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingListName()
    {
        $this->assertPropertyIsSet(self::SHOPPING_LIST_NAME);

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @param \Generated\Shared\Transfer\StorageProductTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(StorageProductTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return \Generated\Shared\Transfer\StorageProductTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module ShoppingList
     *
     * @param \Generated\Shared\Transfer\StorageProductTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(StorageProductTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StorageProductTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module ShoppingList
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
     * @module ShoppingListsRestApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

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
                case 'idShoppingListItem':
                case 'sku':
                case 'quantity':
                case 'idProduct':
                case 'fkShoppingList':
                case 'idCompanyUser':
                case 'customerReference':
                case 'merchantReference':
                case 'priceMode':
                case 'currencyIsoCode':
                case 'shoppingListName':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shoppingListItemNote':
                case 'product':
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
                case 'productOptions':
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
                case 'idShoppingListItem':
                case 'sku':
                case 'quantity':
                case 'idProduct':
                case 'fkShoppingList':
                case 'idCompanyUser':
                case 'customerReference':
                case 'merchantReference':
                case 'priceMode':
                case 'currencyIsoCode':
                case 'shoppingListName':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingListItemNote':
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'productOptions':
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
                case 'idShoppingListItem':
                case 'sku':
                case 'quantity':
                case 'idProduct':
                case 'fkShoppingList':
                case 'idCompanyUser':
                case 'customerReference':
                case 'merchantReference':
                case 'priceMode':
                case 'currencyIsoCode':
                case 'shoppingListName':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingListItemNote':
                case 'product':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'productOptions':
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
        $this->productOptions = $this->productOptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract,
            'idShoppingListItem' => $this->idShoppingListItem,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'idProduct' => $this->idProduct,
            'fkShoppingList' => $this->fkShoppingList,
            'idCompanyUser' => $this->idCompanyUser,
            'customerReference' => $this->customerReference,
            'merchantReference' => $this->merchantReference,
            'priceMode' => $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode,
            'shoppingListName' => $this->shoppingListName,
            'uuid' => $this->uuid,
            'shoppingListItemNote' => $this->shoppingListItemNote,
            'product' => $this->product,
            'productOptions' => $this->productOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract,
            'id_shopping_list_item' => $this->idShoppingListItem,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'id_product' => $this->idProduct,
            'fk_shopping_list' => $this->fkShoppingList,
            'id_company_user' => $this->idCompanyUser,
            'customer_reference' => $this->customerReference,
            'merchant_reference' => $this->merchantReference,
            'price_mode' => $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode,
            'shopping_list_name' => $this->shoppingListName,
            'uuid' => $this->uuid,
            'shopping_list_item_note' => $this->shoppingListItemNote,
            'product' => $this->product,
            'product_options' => $this->productOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'id_shopping_list_item' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, false) : $this->idShoppingListItem,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'fk_shopping_list' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, false) : $this->fkShoppingList,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'merchant_reference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, false) : $this->merchantReference,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'shopping_list_name' => $this->shoppingListName instanceof AbstractTransfer ? $this->shoppingListName->toArray(true, false) : $this->shoppingListName,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'shopping_list_item_note' => $this->shoppingListItemNote instanceof AbstractTransfer ? $this->shoppingListItemNote->toArray(true, false) : $this->shoppingListItemNote,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
            'product_options' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, false) : $this->addValuesToCollection($this->productOptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'idShoppingListItem' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, true) : $this->idShoppingListItem,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'fkShoppingList' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, true) : $this->fkShoppingList,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'merchantReference' => $this->merchantReference instanceof AbstractTransfer ? $this->merchantReference->toArray(true, true) : $this->merchantReference,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'shoppingListName' => $this->shoppingListName instanceof AbstractTransfer ? $this->shoppingListName->toArray(true, true) : $this->shoppingListName,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'shoppingListItemNote' => $this->shoppingListItemNote instanceof AbstractTransfer ? $this->shoppingListItemNote->toArray(true, true) : $this->shoppingListItemNote,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
            'productOptions' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, true) : $this->addValuesToCollection($this->productOptions, true, true),
        ];
    }
}
