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
class PaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_SELECTION = 'paymentSelection';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDER = 'paymentProvider';

    /**
     * @var string
     */
    public const PAYMENT_METHOD = 'paymentMethod';

    /**
     * @var string
     */
    public const FOREIGN_PAYMENTS = 'foreignPayments';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT_CREDIT_CARD = 'dummyPaymentCreditCard';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT_INVOICE = 'dummyPaymentInvoice';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT = 'dummyPayment';

    /**
     * @var string
     */
    public const NOPAYMENT = 'nopayment';

    /**
     * @var string
     */
    public const IS_LIMITED_AMOUNT = 'isLimitedAmount';

    /**
     * @var string
     */
    public const ID_SALES_PAYMENT = 'idSalesPayment';

    /**
     * @var string
     */
    public const AVAILABLE_AMOUNT = 'availableAmount';

    /**
     * @var string|null
     */
    protected $paymentSelection;

    /**
     * @var string|null
     */
    protected $paymentProvider;

    /**
     * @var string|null
     */
    protected $paymentMethod;

    /**
     * @var array
     */
    protected $foreignPayments = [];

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPaymentCreditCard;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPaymentInvoice;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPayment;

    /**
     * @var \Generated\Shared\Transfer\NopaymentTransfer|null
     */
    protected $nopayment;

    /**
     * @var bool|null
     */
    protected $isLimitedAmount;

    /**
     * @var int|null
     */
    protected $idSalesPayment;

    /**
     * @var int|null
     */
    protected $availableAmount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_selection' => 'paymentSelection',
        'paymentSelection' => 'paymentSelection',
        'PaymentSelection' => 'paymentSelection',
        'payment_provider' => 'paymentProvider',
        'paymentProvider' => 'paymentProvider',
        'PaymentProvider' => 'paymentProvider',
        'payment_method' => 'paymentMethod',
        'paymentMethod' => 'paymentMethod',
        'PaymentMethod' => 'paymentMethod',
        'foreign_payments' => 'foreignPayments',
        'foreignPayments' => 'foreignPayments',
        'ForeignPayments' => 'foreignPayments',
        'amount' => 'amount',
        'Amount' => 'amount',
        'dummy_payment_credit_card' => 'dummyPaymentCreditCard',
        'dummyPaymentCreditCard' => 'dummyPaymentCreditCard',
        'DummyPaymentCreditCard' => 'dummyPaymentCreditCard',
        'dummy_payment_invoice' => 'dummyPaymentInvoice',
        'dummyPaymentInvoice' => 'dummyPaymentInvoice',
        'DummyPaymentInvoice' => 'dummyPaymentInvoice',
        'dummy_payment' => 'dummyPayment',
        'dummyPayment' => 'dummyPayment',
        'DummyPayment' => 'dummyPayment',
        'nopayment' => 'nopayment',
        'Nopayment' => 'nopayment',
        'is_limited_amount' => 'isLimitedAmount',
        'isLimitedAmount' => 'isLimitedAmount',
        'IsLimitedAmount' => 'isLimitedAmount',
        'id_sales_payment' => 'idSalesPayment',
        'idSalesPayment' => 'idSalesPayment',
        'IdSalesPayment' => 'idSalesPayment',
        'available_amount' => 'availableAmount',
        'availableAmount' => 'availableAmount',
        'AvailableAmount' => 'availableAmount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT_SELECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_selection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_provider',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FOREIGN_PAYMENTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'foreign_payments',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
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
        self::DUMMY_PAYMENT_CREDIT_CARD => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment_credit_card',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT_INVOICE => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment_invoice',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NOPAYMENT => [
            'type' => 'Generated\Shared\Transfer\NopaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'nopayment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_LIMITED_AMOUNT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_limited_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_PAYMENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_payment',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'available_amount',
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
     * @module CheckoutPage|PaymentPage|DummyPayment|Nopayment|Payment|Sales
     *
     * @param string|null $paymentSelection
     *
     * @return $this
     */
    public function setPaymentSelection($paymentSelection)
    {
        $this->paymentSelection = $paymentSelection;
        $this->modifiedProperties[self::PAYMENT_SELECTION] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|DummyPayment|Nopayment|Payment|Sales
     *
     * @return string|null
     */
    public function getPaymentSelection()
    {
        return $this->paymentSelection;
    }

    /**
     * @module CheckoutPage|PaymentPage|DummyPayment|Nopayment|Payment|Sales
     *
     * @param string|null $paymentSelection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentSelectionOrFail($paymentSelection)
    {
        if ($paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->setPaymentSelection($paymentSelection);
    }

    /**
     * @module CheckoutPage|PaymentPage|DummyPayment|Nopayment|Payment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentSelectionOrFail()
    {
        if ($this->paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->paymentSelection;
    }

    /**
     * @module CheckoutPage|PaymentPage|DummyPayment|Nopayment|Payment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentSelection()
    {
        $this->assertPropertyIsSet(self::PAYMENT_SELECTION);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @param string|null $paymentProvider
     *
     * @return $this
     */
    public function setPaymentProvider($paymentProvider)
    {
        $this->paymentProvider = $paymentProvider;
        $this->modifiedProperties[self::PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @return string|null
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @param string|null $paymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderOrFail($paymentProvider)
    {
        if ($paymentProvider === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER);
        }

        return $this->setPaymentProvider($paymentProvider);
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentProviderOrFail()
    {
        if ($this->paymentProvider === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER);
        }

        return $this->paymentProvider;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProvider()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @param string|null $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        $this->modifiedProperties[self::PAYMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @param string|null $paymentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodOrFail($paymentMethod)
    {
        if ($paymentMethod === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD);
        }

        return $this->setPaymentMethod($paymentMethod);
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentMethodOrFail()
    {
        if ($this->paymentMethod === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD);
        }

        return $this->paymentMethod;
    }

    /**
     * @module CheckoutPage|CustomerPage|PaymentPage|DummyPayment|Nopayment|Payment|PaymentsRestApi|SalesPaymentGui|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethod()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD);

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param array $foreignPayments
     *
     * @return $this
     */
    public function setForeignPayments($foreignPayments)
    {
        if ($foreignPayments === null) {
            $foreignPayments = [];
        }

        $this->foreignPayments = $foreignPayments;
        $this->modifiedProperties[self::FOREIGN_PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @return array
     */
    public function getForeignPayments()
    {
        return $this->foreignPayments;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param string|int $foreignPaymentKey
     * @param mixed $foreignPaymentValue
     *
     * @return $this
     */
    public function addForeignPayment($foreignPaymentKey, $foreignPaymentValue)
    {
        $this->foreignPayments[$foreignPaymentKey] = $foreignPaymentValue;
        $this->modifiedProperties[self::FOREIGN_PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireForeignPayments()
    {
        $this->assertPropertyIsSet(self::FOREIGN_PAYMENTS);

        return $this;
    }

    /**
     * @module CustomerPage|Nopayment|Payment|SalesPaymentGui|SalesPayment
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
     * @module CustomerPage|Nopayment|Payment|SalesPaymentGui|SalesPayment
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module CustomerPage|Nopayment|Payment|SalesPaymentGui|SalesPayment
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
     * @module CustomerPage|Nopayment|Payment|SalesPaymentGui|SalesPayment
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
     * @module CustomerPage|Nopayment|Payment|SalesPaymentGui|SalesPayment
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
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPaymentCreditCard
     *
     * @return $this
     */
    public function setDummyPaymentCreditCard(DummyPaymentTransfer $dummyPaymentCreditCard = null)
    {
        $this->dummyPaymentCreditCard = $dummyPaymentCreditCard;
        $this->modifiedProperties[self::DUMMY_PAYMENT_CREDIT_CARD] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPaymentCreditCard()
    {
        return $this->dummyPaymentCreditCard;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPaymentCreditCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentCreditCardOrFail(DummyPaymentTransfer $dummyPaymentCreditCard)
    {
        return $this->setDummyPaymentCreditCard($dummyPaymentCreditCard);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentCreditCardOrFail()
    {
        if ($this->dummyPaymentCreditCard === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT_CREDIT_CARD);
        }

        return $this->dummyPaymentCreditCard;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPaymentCreditCard()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT_CREDIT_CARD);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPaymentInvoice
     *
     * @return $this
     */
    public function setDummyPaymentInvoice(DummyPaymentTransfer $dummyPaymentInvoice = null)
    {
        $this->dummyPaymentInvoice = $dummyPaymentInvoice;
        $this->modifiedProperties[self::DUMMY_PAYMENT_INVOICE] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPaymentInvoice()
    {
        return $this->dummyPaymentInvoice;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPaymentInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentInvoiceOrFail(DummyPaymentTransfer $dummyPaymentInvoice)
    {
        return $this->setDummyPaymentInvoice($dummyPaymentInvoice);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentInvoiceOrFail()
    {
        if ($this->dummyPaymentInvoice === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT_INVOICE);
        }

        return $this->dummyPaymentInvoice;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPaymentInvoice()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT_INVOICE);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPayment
     *
     * @return $this
     */
    public function setDummyPayment(DummyPaymentTransfer $dummyPayment = null)
    {
        $this->dummyPayment = $dummyPayment;
        $this->modifiedProperties[self::DUMMY_PAYMENT] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPayment()
    {
        return $this->dummyPayment;
    }

    /**
     * @module DummyPayment
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentOrFail(DummyPaymentTransfer $dummyPayment)
    {
        return $this->setDummyPayment($dummyPayment);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentOrFail()
    {
        if ($this->dummyPayment === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT);
        }

        return $this->dummyPayment;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPayment()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT);

        return $this;
    }

    /**
     * @module Nopayment
     *
     * @param \Generated\Shared\Transfer\NopaymentTransfer|null $nopayment
     *
     * @return $this
     */
    public function setNopayment(NopaymentTransfer $nopayment = null)
    {
        $this->nopayment = $nopayment;
        $this->modifiedProperties[self::NOPAYMENT] = true;

        return $this;
    }

    /**
     * @module Nopayment
     *
     * @return \Generated\Shared\Transfer\NopaymentTransfer|null
     */
    public function getNopayment()
    {
        return $this->nopayment;
    }

    /**
     * @module Nopayment
     *
     * @param \Generated\Shared\Transfer\NopaymentTransfer $nopayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNopaymentOrFail(NopaymentTransfer $nopayment)
    {
        return $this->setNopayment($nopayment);
    }

    /**
     * @module Nopayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\NopaymentTransfer
     */
    public function getNopaymentOrFail()
    {
        if ($this->nopayment === null) {
            $this->throwNullValueException(static::NOPAYMENT);
        }

        return $this->nopayment;
    }

    /**
     * @module Nopayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNopayment()
    {
        $this->assertPropertyIsSet(self::NOPAYMENT);

        return $this;
    }

    /**
     * @module Nopayment|Payment|SalesPayment
     *
     * @param bool|null $isLimitedAmount
     *
     * @return $this
     */
    public function setIsLimitedAmount($isLimitedAmount)
    {
        $this->isLimitedAmount = $isLimitedAmount;
        $this->modifiedProperties[self::IS_LIMITED_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Nopayment|Payment|SalesPayment
     *
     * @return bool|null
     */
    public function getIsLimitedAmount()
    {
        return $this->isLimitedAmount;
    }

    /**
     * @module Nopayment|Payment|SalesPayment
     *
     * @param bool|null $isLimitedAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLimitedAmountOrFail($isLimitedAmount)
    {
        if ($isLimitedAmount === null) {
            $this->throwNullValueException(static::IS_LIMITED_AMOUNT);
        }

        return $this->setIsLimitedAmount($isLimitedAmount);
    }

    /**
     * @module Nopayment|Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsLimitedAmountOrFail()
    {
        if ($this->isLimitedAmount === null) {
            $this->throwNullValueException(static::IS_LIMITED_AMOUNT);
        }

        return $this->isLimitedAmount;
    }

    /**
     * @module Nopayment|Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLimitedAmount()
    {
        $this->assertPropertyIsSet(self::IS_LIMITED_AMOUNT);

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $idSalesPayment
     *
     * @return $this
     */
    public function setIdSalesPayment($idSalesPayment)
    {
        $this->idSalesPayment = $idSalesPayment;
        $this->modifiedProperties[self::ID_SALES_PAYMENT] = true;

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @return int|null
     */
    public function getIdSalesPayment()
    {
        return $this->idSalesPayment;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $idSalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesPaymentOrFail($idSalesPayment)
    {
        if ($idSalesPayment === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT);
        }

        return $this->setIdSalesPayment($idSalesPayment);
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesPaymentOrFail()
    {
        if ($this->idSalesPayment === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT);
        }

        return $this->idSalesPayment;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesPayment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_PAYMENT);

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $availableAmount
     *
     * @return $this
     */
    public function setAvailableAmount($availableAmount)
    {
        $this->availableAmount = $availableAmount;
        $this->modifiedProperties[self::AVAILABLE_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @return int|null
     */
    public function getAvailableAmount()
    {
        return $this->availableAmount;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $availableAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableAmountOrFail($availableAmount)
    {
        if ($availableAmount === null) {
            $this->throwNullValueException(static::AVAILABLE_AMOUNT);
        }

        return $this->setAvailableAmount($availableAmount);
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAvailableAmountOrFail()
    {
        if ($this->availableAmount === null) {
            $this->throwNullValueException(static::AVAILABLE_AMOUNT);
        }

        return $this->availableAmount;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableAmount()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_AMOUNT);

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
                case 'paymentSelection':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'foreignPayments':
                case 'amount':
                case 'isLimitedAmount':
                case 'idSalesPayment':
                case 'availableAmount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dummyPaymentCreditCard':
                case 'dummyPaymentInvoice':
                case 'dummyPayment':
                case 'nopayment':
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
                case 'paymentSelection':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'foreignPayments':
                case 'amount':
                case 'isLimitedAmount':
                case 'idSalesPayment':
                case 'availableAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'dummyPaymentCreditCard':
                case 'dummyPaymentInvoice':
                case 'dummyPayment':
                case 'nopayment':
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
                case 'paymentSelection':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'foreignPayments':
                case 'amount':
                case 'isLimitedAmount':
                case 'idSalesPayment':
                case 'availableAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'dummyPaymentCreditCard':
                case 'dummyPaymentInvoice':
                case 'dummyPayment':
                case 'nopayment':
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
            'paymentSelection' => $this->paymentSelection,
            'paymentProvider' => $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod,
            'foreignPayments' => $this->foreignPayments,
            'amount' => $this->amount,
            'isLimitedAmount' => $this->isLimitedAmount,
            'idSalesPayment' => $this->idSalesPayment,
            'availableAmount' => $this->availableAmount,
            'dummyPaymentCreditCard' => $this->dummyPaymentCreditCard,
            'dummyPaymentInvoice' => $this->dummyPaymentInvoice,
            'dummyPayment' => $this->dummyPayment,
            'nopayment' => $this->nopayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_selection' => $this->paymentSelection,
            'payment_provider' => $this->paymentProvider,
            'payment_method' => $this->paymentMethod,
            'foreign_payments' => $this->foreignPayments,
            'amount' => $this->amount,
            'is_limited_amount' => $this->isLimitedAmount,
            'id_sales_payment' => $this->idSalesPayment,
            'available_amount' => $this->availableAmount,
            'dummy_payment_credit_card' => $this->dummyPaymentCreditCard,
            'dummy_payment_invoice' => $this->dummyPaymentInvoice,
            'dummy_payment' => $this->dummyPayment,
            'nopayment' => $this->nopayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_selection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, false) : $this->paymentSelection,
            'payment_provider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, false) : $this->paymentProvider,
            'payment_method' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, false) : $this->paymentMethod,
            'foreign_payments' => $this->foreignPayments instanceof AbstractTransfer ? $this->foreignPayments->toArray(true, false) : $this->foreignPayments,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'is_limited_amount' => $this->isLimitedAmount instanceof AbstractTransfer ? $this->isLimitedAmount->toArray(true, false) : $this->isLimitedAmount,
            'id_sales_payment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, false) : $this->idSalesPayment,
            'available_amount' => $this->availableAmount instanceof AbstractTransfer ? $this->availableAmount->toArray(true, false) : $this->availableAmount,
            'dummy_payment_credit_card' => $this->dummyPaymentCreditCard instanceof AbstractTransfer ? $this->dummyPaymentCreditCard->toArray(true, false) : $this->dummyPaymentCreditCard,
            'dummy_payment_invoice' => $this->dummyPaymentInvoice instanceof AbstractTransfer ? $this->dummyPaymentInvoice->toArray(true, false) : $this->dummyPaymentInvoice,
            'dummy_payment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, false) : $this->dummyPayment,
            'nopayment' => $this->nopayment instanceof AbstractTransfer ? $this->nopayment->toArray(true, false) : $this->nopayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentSelection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, true) : $this->paymentSelection,
            'paymentProvider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, true) : $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, true) : $this->paymentMethod,
            'foreignPayments' => $this->foreignPayments instanceof AbstractTransfer ? $this->foreignPayments->toArray(true, true) : $this->foreignPayments,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'isLimitedAmount' => $this->isLimitedAmount instanceof AbstractTransfer ? $this->isLimitedAmount->toArray(true, true) : $this->isLimitedAmount,
            'idSalesPayment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, true) : $this->idSalesPayment,
            'availableAmount' => $this->availableAmount instanceof AbstractTransfer ? $this->availableAmount->toArray(true, true) : $this->availableAmount,
            'dummyPaymentCreditCard' => $this->dummyPaymentCreditCard instanceof AbstractTransfer ? $this->dummyPaymentCreditCard->toArray(true, true) : $this->dummyPaymentCreditCard,
            'dummyPaymentInvoice' => $this->dummyPaymentInvoice instanceof AbstractTransfer ? $this->dummyPaymentInvoice->toArray(true, true) : $this->dummyPaymentInvoice,
            'dummyPayment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, true) : $this->dummyPayment,
            'nopayment' => $this->nopayment instanceof AbstractTransfer ? $this->nopayment->toArray(true, true) : $this->nopayment,
        ];
    }
}
