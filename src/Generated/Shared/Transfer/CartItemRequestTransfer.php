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
class CartItemRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const QUOTE_UUID = 'quoteUuid';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION_UUID = 'discountPromotionUuid';

    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT = 'idProductMeasurementSalesUnit';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const PRODUCT_OPTIONS = 'productOptions';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $quoteUuid;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $discountPromotionUuid;

    /**
     * @var int|null
     */
    protected $idProductMeasurementSalesUnit;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amount;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    protected $productOptions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'quote_uuid' => 'quoteUuid',
        'quoteUuid' => 'quoteUuid',
        'QuoteUuid' => 'quoteUuid',
        'customer' => 'customer',
        'Customer' => 'customer',
        'discount_promotion_uuid' => 'discountPromotionUuid',
        'discountPromotionUuid' => 'discountPromotionUuid',
        'DiscountPromotionUuid' => 'discountPromotionUuid',
        'id_product_measurement_sales_unit' => 'idProductMeasurementSalesUnit',
        'idProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'IdProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'amount' => 'amount',
        'Amount' => 'amount',
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
            'rest_request_parameter' => 'no',
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
        self::DISCOUNT_PROMOTION_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_sales_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
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
    ];

    /**
     * @module CartsRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module CartsRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @module CartsRestApi|ProductBundleCartsRestApi
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
     * @return string|null
     */
    public function getQuoteUuid()
    {
        return $this->quoteUuid;
    }

    /**
     * @module CartsRestApi
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
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CartsRestApi
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
     * @param string|null $discountPromotionUuid
     *
     * @return $this
     */
    public function setDiscountPromotionUuid($discountPromotionUuid)
    {
        $this->discountPromotionUuid = $discountPromotionUuid;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION_UUID] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @return string|null
     */
    public function getDiscountPromotionUuid()
    {
        return $this->discountPromotionUuid;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @param string|null $discountPromotionUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountPromotionUuidOrFail($discountPromotionUuid)
    {
        if ($discountPromotionUuid === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_UUID);
        }

        return $this->setDiscountPromotionUuid($discountPromotionUuid);
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountPromotionUuidOrFail()
    {
        if ($this->discountPromotionUuid === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_UUID);
        }

        return $this->discountPromotionUuid;
    }

    /**
     * @module DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotionUuid()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION_UUID);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit)
    {
        $this->idProductMeasurementSalesUnit = $idProductMeasurementSalesUnit;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return int|null
     */
    public function getIdProductMeasurementSalesUnit()
    {
        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnitOrFail($idProductMeasurementSalesUnit)
    {
        if ($idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit);
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductMeasurementSalesUnitOrFail()
    {
        if ($this->idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementSalesUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_SALES_UNIT);

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amount
     *
     * @return $this
     */
    public function setAmount($amount = null)
    {
        if ($amount !== null && !$amount instanceof Decimal) {
            $amount = new Decimal($amount);
        }

        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amount
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
     * @module ProductMeasurementUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module ProductMeasurementUnitsRestApi
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
     * @module ProductOptionsRestApi
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
     * @module ProductOptionsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionTransfer[]
     */
    public function getProductOptions()
    {
        return $this->productOptions;
    }

    /**
     * @module ProductOptionsRestApi
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
                case 'groupKey':
                case 'quantity':
                case 'quoteUuid':
                case 'discountPromotionUuid':
                case 'idProductMeasurementSalesUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customer':
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
                case 'amount':
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
                case 'sku':
                case 'groupKey':
                case 'quantity':
                case 'quoteUuid':
                case 'discountPromotionUuid':
                case 'idProductMeasurementSalesUnit':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
                case 'groupKey':
                case 'quantity':
                case 'quoteUuid':
                case 'discountPromotionUuid':
                case 'idProductMeasurementSalesUnit':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
            'groupKey' => $this->groupKey,
            'quantity' => $this->quantity,
            'quoteUuid' => $this->quoteUuid,
            'discountPromotionUuid' => $this->discountPromotionUuid,
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit,
            'customer' => $this->customer,
            'productOptions' => $this->productOptions,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'group_key' => $this->groupKey,
            'quantity' => $this->quantity,
            'quote_uuid' => $this->quoteUuid,
            'discount_promotion_uuid' => $this->discountPromotionUuid,
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit,
            'customer' => $this->customer,
            'product_options' => $this->productOptions,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'quote_uuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, false) : $this->quoteUuid,
            'discount_promotion_uuid' => $this->discountPromotionUuid instanceof AbstractTransfer ? $this->discountPromotionUuid->toArray(true, false) : $this->discountPromotionUuid,
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, false) : $this->idProductMeasurementSalesUnit,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'product_options' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, false) : $this->addValuesToCollection($this->productOptions, true, false),
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'quoteUuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, true) : $this->quoteUuid,
            'discountPromotionUuid' => $this->discountPromotionUuid instanceof AbstractTransfer ? $this->discountPromotionUuid->toArray(true, true) : $this->discountPromotionUuid,
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, true) : $this->idProductMeasurementSalesUnit,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'productOptions' => $this->productOptions instanceof AbstractTransfer ? $this->productOptions->toArray(true, true) : $this->addValuesToCollection($this->productOptions, true, true),
            'amount' => $this->amount,
        ];
    }
}
