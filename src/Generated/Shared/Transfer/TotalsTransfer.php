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
class TotalsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPMENT_TOTAL = 'shipmentTotal';

    /**
     * @var string
     */
    public const GRAND_TOTAL = 'grandTotal';

    /**
     * @var string
     */
    public const PRICE_TO_PAY = 'priceToPay';

    /**
     * @var string
     */
    public const REFUND_TOTAL = 'refundTotal';

    /**
     * @var string
     */
    public const TAX_TOTAL = 'taxTotal';

    /**
     * @var string
     */
    public const EXPENSE_TOTAL = 'expenseTotal';

    /**
     * @var string
     */
    public const SUBTOTAL = 'subtotal';

    /**
     * @var string
     */
    public const REMUNERATION_TOTAL = 'remunerationTotal';

    /**
     * @var string
     */
    public const CANCELED_TOTAL = 'canceledTotal';

    /**
     * @var string
     */
    public const DISCOUNT_TOTAL = 'discountTotal';

    /**
     * @var string
     */
    public const NET_TOTAL = 'netTotal';

    /**
     * @var string
     */
    public const HASH = 'hash';

    /**
     * @var int|null
     */
    protected $shipmentTotal;

    /**
     * @var int|null
     */
    protected $grandTotal;

    /**
     * @var int|null
     */
    protected $priceToPay;

    /**
     * @var int|null
     */
    protected $refundTotal;

    /**
     * @var \Generated\Shared\Transfer\TaxTotalTransfer|null
     */
    protected $taxTotal;

    /**
     * @var int|null
     */
    protected $expenseTotal;

    /**
     * @var int|null
     */
    protected $subtotal;

    /**
     * @var int|null
     */
    protected $remunerationTotal;

    /**
     * @var int|null
     */
    protected $canceledTotal;

    /**
     * @var int|null
     */
    protected $discountTotal;

    /**
     * @var int|null
     */
    protected $netTotal;

    /**
     * @var string|null
     */
    protected $hash;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipment_total' => 'shipmentTotal',
        'shipmentTotal' => 'shipmentTotal',
        'ShipmentTotal' => 'shipmentTotal',
        'grand_total' => 'grandTotal',
        'grandTotal' => 'grandTotal',
        'GrandTotal' => 'grandTotal',
        'price_to_pay' => 'priceToPay',
        'priceToPay' => 'priceToPay',
        'PriceToPay' => 'priceToPay',
        'refund_total' => 'refundTotal',
        'refundTotal' => 'refundTotal',
        'RefundTotal' => 'refundTotal',
        'tax_total' => 'taxTotal',
        'taxTotal' => 'taxTotal',
        'TaxTotal' => 'taxTotal',
        'expense_total' => 'expenseTotal',
        'expenseTotal' => 'expenseTotal',
        'ExpenseTotal' => 'expenseTotal',
        'subtotal' => 'subtotal',
        'Subtotal' => 'subtotal',
        'remuneration_total' => 'remunerationTotal',
        'remunerationTotal' => 'remunerationTotal',
        'RemunerationTotal' => 'remunerationTotal',
        'canceled_total' => 'canceledTotal',
        'canceledTotal' => 'canceledTotal',
        'CanceledTotal' => 'canceledTotal',
        'discount_total' => 'discountTotal',
        'discountTotal' => 'discountTotal',
        'DiscountTotal' => 'discountTotal',
        'net_total' => 'netTotal',
        'netTotal' => 'netTotal',
        'NetTotal' => 'netTotal',
        'hash' => 'hash',
        'Hash' => 'hash',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHIPMENT_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'shipment_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GRAND_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'grand_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TO_PAY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'price_to_pay',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REFUND_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refund_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_TOTAL => [
            'type' => 'Generated\Shared\Transfer\TaxTotalTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_total',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPENSE_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'expense_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBTOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'subtotal',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REMUNERATION_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'remuneration_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CANCELED_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'canceled_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'discount_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NET_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'net_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'hash',
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
     * @module CartPage|CheckoutPage|Shipment
     *
     * @param int|null $shipmentTotal
     *
     * @return $this
     */
    public function setShipmentTotal($shipmentTotal)
    {
        $this->shipmentTotal = $shipmentTotal;
        $this->modifiedProperties[self::SHIPMENT_TOTAL] = true;

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|Shipment
     *
     * @return int|null
     */
    public function getShipmentTotal()
    {
        return $this->shipmentTotal;
    }

    /**
     * @module CartPage|CheckoutPage|Shipment
     *
     * @param int|null $shipmentTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentTotalOrFail($shipmentTotal)
    {
        if ($shipmentTotal === null) {
            $this->throwNullValueException(static::SHIPMENT_TOTAL);
        }

        return $this->setShipmentTotal($shipmentTotal);
    }

    /**
     * @module CartPage|CheckoutPage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getShipmentTotalOrFail()
    {
        if ($this->shipmentTotal === null) {
            $this->throwNullValueException(static::SHIPMENT_TOTAL);
        }

        return $this->shipmentTotal;
    }

    /**
     * @module CartPage|CheckoutPage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentTotal()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_TOTAL);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Discount|MultiCart|Payment|QuoteApproval|SalesPayment|Sales
     *
     * @param int|null $grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
        $this->modifiedProperties[self::GRAND_TOTAL] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Discount|MultiCart|Payment|QuoteApproval|SalesPayment|Sales
     *
     * @return int|null
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Discount|MultiCart|Payment|QuoteApproval|SalesPayment|Sales
     *
     * @param int|null $grandTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrandTotalOrFail($grandTotal)
    {
        if ($grandTotal === null) {
            $this->throwNullValueException(static::GRAND_TOTAL);
        }

        return $this->setGrandTotal($grandTotal);
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Discount|MultiCart|Payment|QuoteApproval|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getGrandTotalOrFail()
    {
        if ($this->grandTotal === null) {
            $this->throwNullValueException(static::GRAND_TOTAL);
        }

        return $this->grandTotal;
    }

    /**
     * @module CheckoutPage|CustomerPage|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|Calculation|Discount|MultiCart|Payment|QuoteApproval|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrandTotal()
    {
        $this->assertPropertyIsSet(self::GRAND_TOTAL);

        return $this;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @param int|null $priceToPay
     *
     * @return $this
     */
    public function setPriceToPay($priceToPay)
    {
        $this->priceToPay = $priceToPay;
        $this->modifiedProperties[self::PRICE_TO_PAY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @return int|null
     */
    public function getPriceToPay()
    {
        return $this->priceToPay;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @param int|null $priceToPay
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceToPayOrFail($priceToPay)
    {
        if ($priceToPay === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY);
        }

        return $this->setPriceToPay($priceToPay);
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriceToPayOrFail()
    {
        if ($this->priceToPay === null) {
            $this->throwNullValueException(static::PRICE_TO_PAY);
        }

        return $this->priceToPay;
    }

    /**
     * @module CheckoutPage|Nopayment|Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceToPay()
    {
        $this->assertPropertyIsSet(self::PRICE_TO_PAY);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @param int|null $refundTotal
     *
     * @return $this
     */
    public function setRefundTotal($refundTotal)
    {
        $this->refundTotal = $refundTotal;
        $this->modifiedProperties[self::REFUND_TOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @return int|null
     */
    public function getRefundTotal()
    {
        return $this->refundTotal;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @param int|null $refundTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundTotalOrFail($refundTotal)
    {
        if ($refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->setRefundTotal($refundTotal);
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundTotalOrFail()
    {
        if ($this->refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->refundTotal;
    }

    /**
     * @module CustomerPage|Calculation|Refund|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundTotal()
    {
        $this->assertPropertyIsSet(self::REFUND_TOTAL);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|CartsRestApi|OrdersRestApi|Sales|Tax
     *
     * @param \Generated\Shared\Transfer\TaxTotalTransfer|null $taxTotal
     *
     * @return $this
     */
    public function setTaxTotal(TaxTotalTransfer $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        $this->modifiedProperties[self::TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|CartsRestApi|OrdersRestApi|Sales|Tax
     *
     * @return \Generated\Shared\Transfer\TaxTotalTransfer|null
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @module CustomerPage|Calculation|CartsRestApi|OrdersRestApi|Sales|Tax
     *
     * @param \Generated\Shared\Transfer\TaxTotalTransfer $taxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxTotalOrFail(TaxTotalTransfer $taxTotal)
    {
        return $this->setTaxTotal($taxTotal);
    }

    /**
     * @module CustomerPage|Calculation|CartsRestApi|OrdersRestApi|Sales|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxTotalTransfer
     */
    public function getTaxTotalOrFail()
    {
        if ($this->taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->taxTotal;
    }

    /**
     * @module CustomerPage|Calculation|CartsRestApi|OrdersRestApi|Sales|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxTotal()
    {
        $this->assertPropertyIsSet(self::TAX_TOTAL);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param int|null $expenseTotal
     *
     * @return $this
     */
    public function setExpenseTotal($expenseTotal)
    {
        $this->expenseTotal = $expenseTotal;
        $this->modifiedProperties[self::EXPENSE_TOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @return int|null
     */
    public function getExpenseTotal()
    {
        return $this->expenseTotal;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param int|null $expenseTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpenseTotalOrFail($expenseTotal)
    {
        if ($expenseTotal === null) {
            $this->throwNullValueException(static::EXPENSE_TOTAL);
        }

        return $this->setExpenseTotal($expenseTotal);
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getExpenseTotalOrFail()
    {
        if ($this->expenseTotal === null) {
            $this->throwNullValueException(static::EXPENSE_TOTAL);
        }

        return $this->expenseTotal;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpenseTotal()
    {
        $this->assertPropertyIsSet(self::EXPENSE_TOTAL);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Discount|SalesOrderThreshold|Sales
     *
     * @param int|null $subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        $this->modifiedProperties[self::SUBTOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Discount|SalesOrderThreshold|Sales
     *
     * @return int|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @module CustomerPage|Calculation|Discount|SalesOrderThreshold|Sales
     *
     * @param int|null $subtotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubtotalOrFail($subtotal)
    {
        if ($subtotal === null) {
            $this->throwNullValueException(static::SUBTOTAL);
        }

        return $this->setSubtotal($subtotal);
    }

    /**
     * @module CustomerPage|Calculation|Discount|SalesOrderThreshold|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSubtotalOrFail()
    {
        if ($this->subtotal === null) {
            $this->throwNullValueException(static::SUBTOTAL);
        }

        return $this->subtotal;
    }

    /**
     * @module CustomerPage|Calculation|Discount|SalesOrderThreshold|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubtotal()
    {
        $this->assertPropertyIsSet(self::SUBTOTAL);

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationTotal
     *
     * @return $this
     */
    public function setRemunerationTotal($remunerationTotal)
    {
        $this->remunerationTotal = $remunerationTotal;
        $this->modifiedProperties[self::REMUNERATION_TOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getRemunerationTotal()
    {
        return $this->remunerationTotal;
    }

    /**
     * @module CustomerPage|SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRemunerationTotalOrFail($remunerationTotal)
    {
        if ($remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->setRemunerationTotal($remunerationTotal);
    }

    /**
     * @module CustomerPage|SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRemunerationTotalOrFail()
    {
        if ($this->remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->remunerationTotal;
    }

    /**
     * @module CustomerPage|SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRemunerationTotal()
    {
        $this->assertPropertyIsSet(self::REMUNERATION_TOTAL);

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param int|null $canceledTotal
     *
     * @return $this
     */
    public function setCanceledTotal($canceledTotal)
    {
        $this->canceledTotal = $canceledTotal;
        $this->modifiedProperties[self::CANCELED_TOTAL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @return int|null
     */
    public function getCanceledTotal()
    {
        return $this->canceledTotal;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @param int|null $canceledTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCanceledTotalOrFail($canceledTotal)
    {
        if ($canceledTotal === null) {
            $this->throwNullValueException(static::CANCELED_TOTAL);
        }

        return $this->setCanceledTotal($canceledTotal);
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCanceledTotalOrFail()
    {
        if ($this->canceledTotal === null) {
            $this->throwNullValueException(static::CANCELED_TOTAL);
        }

        return $this->canceledTotal;
    }

    /**
     * @module CustomerPage|Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCanceledTotal()
    {
        $this->assertPropertyIsSet(self::CANCELED_TOTAL);

        return $this;
    }

    /**
     * @module Calculation|Sales
     *
     * @param int|null $discountTotal
     *
     * @return $this
     */
    public function setDiscountTotal($discountTotal)
    {
        $this->discountTotal = $discountTotal;
        $this->modifiedProperties[self::DISCOUNT_TOTAL] = true;

        return $this;
    }

    /**
     * @module Calculation|Sales
     *
     * @return int|null
     */
    public function getDiscountTotal()
    {
        return $this->discountTotal;
    }

    /**
     * @module Calculation|Sales
     *
     * @param int|null $discountTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountTotalOrFail($discountTotal)
    {
        if ($discountTotal === null) {
            $this->throwNullValueException(static::DISCOUNT_TOTAL);
        }

        return $this->setDiscountTotal($discountTotal);
    }

    /**
     * @module Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDiscountTotalOrFail()
    {
        if ($this->discountTotal === null) {
            $this->throwNullValueException(static::DISCOUNT_TOTAL);
        }

        return $this->discountTotal;
    }

    /**
     * @module Calculation|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountTotal()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_TOTAL);

        return $this;
    }

    /**
     * @module Calculation
     *
     * @param int|null $netTotal
     *
     * @return $this
     */
    public function setNetTotal($netTotal)
    {
        $this->netTotal = $netTotal;
        $this->modifiedProperties[self::NET_TOTAL] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @return int|null
     */
    public function getNetTotal()
    {
        return $this->netTotal;
    }

    /**
     * @module Calculation
     *
     * @param int|null $netTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetTotalOrFail($netTotal)
    {
        if ($netTotal === null) {
            $this->throwNullValueException(static::NET_TOTAL);
        }

        return $this->setNetTotal($netTotal);
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNetTotalOrFail()
    {
        if ($this->netTotal === null) {
            $this->throwNullValueException(static::NET_TOTAL);
        }

        return $this->netTotal;
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetTotal()
    {
        $this->assertPropertyIsSet(self::NET_TOTAL);

        return $this;
    }

    /**
     * @module Calculation
     *
     * @param string|null $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        $this->modifiedProperties[self::HASH] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @module Calculation
     *
     * @param string|null $hash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHashOrFail($hash)
    {
        if ($hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->setHash($hash);
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHashOrFail()
    {
        if ($this->hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->hash;
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHash()
    {
        $this->assertPropertyIsSet(self::HASH);

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
                case 'shipmentTotal':
                case 'grandTotal':
                case 'priceToPay':
                case 'refundTotal':
                case 'expenseTotal':
                case 'subtotal':
                case 'remunerationTotal':
                case 'canceledTotal':
                case 'discountTotal':
                case 'netTotal':
                case 'hash':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxTotal':
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
                case 'shipmentTotal':
                case 'grandTotal':
                case 'priceToPay':
                case 'refundTotal':
                case 'expenseTotal':
                case 'subtotal':
                case 'remunerationTotal':
                case 'canceledTotal':
                case 'discountTotal':
                case 'netTotal':
                case 'hash':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxTotal':
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
                case 'shipmentTotal':
                case 'grandTotal':
                case 'priceToPay':
                case 'refundTotal':
                case 'expenseTotal':
                case 'subtotal':
                case 'remunerationTotal':
                case 'canceledTotal':
                case 'discountTotal':
                case 'netTotal':
                case 'hash':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxTotal':
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
            'shipmentTotal' => $this->shipmentTotal,
            'grandTotal' => $this->grandTotal,
            'priceToPay' => $this->priceToPay,
            'refundTotal' => $this->refundTotal,
            'expenseTotal' => $this->expenseTotal,
            'subtotal' => $this->subtotal,
            'remunerationTotal' => $this->remunerationTotal,
            'canceledTotal' => $this->canceledTotal,
            'discountTotal' => $this->discountTotal,
            'netTotal' => $this->netTotal,
            'hash' => $this->hash,
            'taxTotal' => $this->taxTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'shipment_total' => $this->shipmentTotal,
            'grand_total' => $this->grandTotal,
            'price_to_pay' => $this->priceToPay,
            'refund_total' => $this->refundTotal,
            'expense_total' => $this->expenseTotal,
            'subtotal' => $this->subtotal,
            'remuneration_total' => $this->remunerationTotal,
            'canceled_total' => $this->canceledTotal,
            'discount_total' => $this->discountTotal,
            'net_total' => $this->netTotal,
            'hash' => $this->hash,
            'tax_total' => $this->taxTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'shipment_total' => $this->shipmentTotal instanceof AbstractTransfer ? $this->shipmentTotal->toArray(true, false) : $this->shipmentTotal,
            'grand_total' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, false) : $this->grandTotal,
            'price_to_pay' => $this->priceToPay instanceof AbstractTransfer ? $this->priceToPay->toArray(true, false) : $this->priceToPay,
            'refund_total' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, false) : $this->refundTotal,
            'expense_total' => $this->expenseTotal instanceof AbstractTransfer ? $this->expenseTotal->toArray(true, false) : $this->expenseTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, false) : $this->subtotal,
            'remuneration_total' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, false) : $this->remunerationTotal,
            'canceled_total' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, false) : $this->canceledTotal,
            'discount_total' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, false) : $this->discountTotal,
            'net_total' => $this->netTotal instanceof AbstractTransfer ? $this->netTotal->toArray(true, false) : $this->netTotal,
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, false) : $this->hash,
            'tax_total' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, false) : $this->taxTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shipmentTotal' => $this->shipmentTotal instanceof AbstractTransfer ? $this->shipmentTotal->toArray(true, true) : $this->shipmentTotal,
            'grandTotal' => $this->grandTotal instanceof AbstractTransfer ? $this->grandTotal->toArray(true, true) : $this->grandTotal,
            'priceToPay' => $this->priceToPay instanceof AbstractTransfer ? $this->priceToPay->toArray(true, true) : $this->priceToPay,
            'refundTotal' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, true) : $this->refundTotal,
            'expenseTotal' => $this->expenseTotal instanceof AbstractTransfer ? $this->expenseTotal->toArray(true, true) : $this->expenseTotal,
            'subtotal' => $this->subtotal instanceof AbstractTransfer ? $this->subtotal->toArray(true, true) : $this->subtotal,
            'remunerationTotal' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, true) : $this->remunerationTotal,
            'canceledTotal' => $this->canceledTotal instanceof AbstractTransfer ? $this->canceledTotal->toArray(true, true) : $this->canceledTotal,
            'discountTotal' => $this->discountTotal instanceof AbstractTransfer ? $this->discountTotal->toArray(true, true) : $this->discountTotal,
            'netTotal' => $this->netTotal instanceof AbstractTransfer ? $this->netTotal->toArray(true, true) : $this->netTotal,
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, true) : $this->hash,
            'taxTotal' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, true) : $this->taxTotal,
        ];
    }
}
