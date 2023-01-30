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
class RestCartItemsAttributesTransfer extends AbstractTransfer
{
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
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CALCULATIONS = 'calculations';

    /**
     * @deprecated Will be removed with next major
     */
    public const QUOTE_UUID = 'quoteUuid';

    /**
     * @deprecated Will be removed with next major
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @deprecated Will be removed with next major
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const ID_PROMOTIONAL_ITEM = 'idPromotionalItem';

    /**
     * @var string
     */
    public const SALES_UNIT = 'salesUnit';

    /**
     * @var string
     */
    public const PRODUCT_OPTIONS = 'productOptions';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null
     */
    protected $calculations;

    /**
     * @var string|null
     */
    protected $quoteUuid;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $idPromotionalItem;

    /**
     * @var \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null
     */
    protected $salesUnit;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCartItemsProductOptionTransfer[]
     */
    protected $productOptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'amount' => 'amount',
        'Amount' => 'amount',
        'calculations' => 'calculations',
        'Calculations' => 'calculations',
        'quote_uuid' => 'quoteUuid',
        'quoteUuid' => 'quoteUuid',
        'QuoteUuid' => 'quoteUuid',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'customer' => 'customer',
        'Customer' => 'customer',
        'id_promotional_item' => 'idPromotionalItem',
        'idPromotionalItem' => 'idPromotionalItem',
        'IdPromotionalItem' => 'idPromotionalItem',
        'sales_unit' => 'salesUnit',
        'salesUnit' => 'salesUnit',
        'SalesUnit' => 'salesUnit',
        'product_options' => 'productOptions',
        'productOptions' => 'productOptions',
        'ProductOptions' => 'productOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
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
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CALCULATIONS => [
            'type' => 'Generated\Shared\Transfer\RestCartItemCalculationsTransfer',
            'type_shim' => null,
            'name_underscore' => 'calculations',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_uuid',
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
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PROMOTIONAL_ITEM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_promotional_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_UNIT => [
            'type' => 'Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\RestCartItemsProductOptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CartsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module CartsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
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
     * @module CartsRestApi
     *
     * @param string|null $groupKey
     *
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;
        $this->modifiedProperties[self::GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module CartsRestApi
     *
     * @param string|null $groupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyOrFail($groupKey)
    {
        if ($groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->setGroupKey($groupKey);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyOrFail()
    {
        if ($this->groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->groupKey;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKey()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @param string|null $abstractSku
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
     * @module CartsRestApi
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module CartsRestApi
     *
     * @param string|null $abstractSku
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
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module CartsRestApi
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
     * @module CartsRestApi
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module CartsRestApi
     *
     * @param int|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null $calculations
     *
     * @return $this
     */
    public function setCalculations(RestCartItemCalculationsTransfer $calculations = null)
    {
        $this->calculations = $calculations;
        $this->modifiedProperties[self::CALCULATIONS] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @return \Generated\Shared\Transfer\RestCartItemCalculationsTransfer|null
     */
    public function getCalculations()
    {
        return $this->calculations;
    }

    /**
     * @module CartsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemCalculationsTransfer $calculations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCalculationsOrFail(RestCartItemCalculationsTransfer $calculations)
    {
        return $this->setCalculations($calculations);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCartItemCalculationsTransfer
     */
    public function getCalculationsOrFail()
    {
        if ($this->calculations === null) {
            $this->throwNullValueException(static::CALCULATIONS);
        }

        return $this->calculations;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCalculations()
    {
        $this->assertPropertyIsSet(self::CALCULATIONS);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @param string|null $quoteUuid
     *
     * @return $this
     */
    public function setQuoteUuid($quoteUuid)
    {
        $this->quoteUuid = $quoteUuid;
        $this->modifiedProperties[self::QUOTE_UUID] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @return string|null
     */
    public function getQuoteUuid()
    {
        return $this->quoteUuid;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @param string|null $quoteUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteUuidOrFail($quoteUuid)
    {
        if ($quoteUuid === null) {
            $this->throwNullValueException(static::QUOTE_UUID);
        }

        return $this->setQuoteUuid($quoteUuid);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed with next major
     *
     * @return string
     */
    public function getQuoteUuidOrFail()
    {
        if ($this->quoteUuid === null) {
            $this->throwNullValueException(static::QUOTE_UUID);
        }

        return $this->quoteUuid;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with next major
     *
     * @return $this
     */
    public function requireQuoteUuid()
    {
        $this->assertPropertyIsSet(self::QUOTE_UUID);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
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
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
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
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed with next major
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
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with next major
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CartsRestApi
     *
     * @deprecated Will be removed with next major
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed with next major
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed with next major
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @param string|null $idPromotionalItem
     *
     * @return $this
     */
    public function setIdPromotionalItem($idPromotionalItem)
    {
        $this->idPromotionalItem = $idPromotionalItem;
        $this->modifiedProperties[self::ID_PROMOTIONAL_ITEM] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @return string|null
     */
    public function getIdPromotionalItem()
    {
        return $this->idPromotionalItem;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @param string|null $idPromotionalItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPromotionalItemOrFail($idPromotionalItem)
    {
        if ($idPromotionalItem === null) {
            $this->throwNullValueException(static::ID_PROMOTIONAL_ITEM);
        }

        return $this->setIdPromotionalItem($idPromotionalItem);
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPromotionalItemOrFail()
    {
        if ($this->idPromotionalItem === null) {
            $this->throwNullValueException(static::ID_PROMOTIONAL_ITEM);
        }

        return $this->idPromotionalItem;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPromotionalItem()
    {
        $this->assertPropertyIsSet(self::ID_PROMOTIONAL_ITEM);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null $salesUnit
     *
     * @return $this
     */
    public function setSalesUnit(RestCartItemsSalesUnitAttributesTransfer $salesUnit = null)
    {
        $this->salesUnit = $salesUnit;
        $this->modifiedProperties[self::SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer|null
     */
    public function getSalesUnit()
    {
        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer $salesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesUnitOrFail(RestCartItemsSalesUnitAttributesTransfer $salesUnit)
    {
        return $this->setSalesUnit($salesUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCartItemsSalesUnitAttributesTransfer
     */
    public function getSalesUnitOrFail()
    {
        if ($this->salesUnit === null) {
            $this->throwNullValueException(static::SALES_UNIT);
        }

        return $this->salesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesUnit()
    {
        $this->assertPropertyIsSet(self::SALES_UNIT);

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCartItemsProductOptionTransfer[] $productOptions
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
     * @module ProductOptionsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCartItemsProductOptionTransfer[]
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * @module ProductOptionsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCartItemsProductOptionTransfer $productOption
     *
     * @return $this
     */
    public function addProductOption(RestCartItemsProductOptionTransfer $productOption)
    {
        $this->productOptions[] = $productOption;
        $this->modifiedProperties[self::PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module ProductOptionsRestApi
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                case 'quoteUuid':
                case 'customerReference':
                case 'idPromotionalItem':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'calculations':
                case 'customer':
                case 'salesUnit':
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                case 'quoteUuid':
                case 'customerReference':
                case 'idPromotionalItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'calculations':
                case 'customer':
                case 'salesUnit':
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
                case 'sku':
                case 'quantity':
                case 'groupKey':
                case 'abstractSku':
                case 'amount':
                case 'quoteUuid':
                case 'customerReference':
                case 'idPromotionalItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'calculations':
                case 'customer':
                case 'salesUnit':
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
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'groupKey' => $this->groupKey,
            'abstractSku' => $this->abstractSku,
            'amount' => $this->amount,
            'quoteUuid' => $this->quoteUuid,
            'customerReference' => $this->customerReference,
            'idPromotionalItem' => $this->idPromotionalItem,
            'calculations' => $this->calculations,
            'customer' => $this->customer,
            'salesUnit' => $this->salesUnit,
            'productOptions' => $this->productOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'group_key' => $this->groupKey,
            'abstract_sku' => $this->abstractSku,
            'amount' => $this->amount,
            'quote_uuid' => $this->quoteUuid,
            'customer_reference' => $this->customerReference,
            'id_promotional_item' => $this->idPromotionalItem,
            'calculations' => $this->calculations,
            'customer' => $this->customer,
            'sales_unit' => $this->salesUnit,
            'product_options' => $this->productOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'quote_uuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, false) : $this->quoteUuid,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'id_promotional_item' => $this->idPromotionalItem instanceof AbstractTransfer ? $this->idPromotionalItem->toArray(true, false) : $this->idPromotionalItem,
            'calculations' => $this->calculations instanceof AbstractTransfer ? $this->calculations->toArray(true, false) : $this->calculations,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'sales_unit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, false) : $this->salesUnit,
            'product_options' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, false) : $this->addValuesToCollection($this->productOptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'quoteUuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, true) : $this->quoteUuid,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'idPromotionalItem' => $this->idPromotionalItem instanceof AbstractTransfer ? $this->idPromotionalItem->toArray(true, true) : $this->idPromotionalItem,
            'calculations' => $this->calculations instanceof AbstractTransfer ? $this->calculations->toArray(true, true) : $this->calculations,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'salesUnit' => $this->salesUnit instanceof AbstractTransfer ? $this->salesUnit->toArray(true, true) : $this->salesUnit,
            'productOptions' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, true) : $this->addValuesToCollection($this->productOptions, true, true),
        ];
    }
}
