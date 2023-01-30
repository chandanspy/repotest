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
class SalesPaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const REDIRECT_URL = 'redirectUrl';

    /**
     * @var string
     */
    public const CC_TYPE = 'ccType';

    /**
     * @var string
     */
    public const CC_NUMBER = 'ccNumber';

    /**
     * @var string
     */
    public const CC_CARDHOLDER = 'ccCardholder';

    /**
     * @var string
     */
    public const CC_EXPIRATION_MONTH = 'ccExpirationMonth';

    /**
     * @var string
     */
    public const CC_EXPIRATION_YEAR = 'ccExpirationYear';

    /**
     * @var string
     */
    public const CC_VERIFICATION = 'ccVerification';

    /**
     * @var string
     */
    public const DEBIT_HOLDER = 'debitHolder';

    /**
     * @var string
     */
    public const DEBIT_ACCOUNT_NUMBER = 'debitAccountNumber';

    /**
     * @var string
     */
    public const DEBIT_BANK_CODE_NUMBER = 'debitBankCodeNumber';

    /**
     * @var string
     */
    public const DEBIT_INSTITUTE = 'debitInstitute';

    /**
     * @var string
     */
    public const PSEUDO_CC_NUMBER = 'pseudoCcNumber';

    /**
     * @var string
     */
    public const PAYMENT_DATA = 'paymentData';

    /**
     * @var string
     */
    public const PAYMENT_DATA_CLASS_NAME = 'paymentDataClassName';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

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
    public const ID_SALES_PAYMENT = 'idSalesPayment';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $redirectUrl;

    /**
     * @var string|null
     */
    protected $ccType;

    /**
     * @var string|null
     */
    protected $ccNumber;

    /**
     * @var string|null
     */
    protected $ccCardholder;

    /**
     * @var string|null
     */
    protected $ccExpirationMonth;

    /**
     * @var string|null
     */
    protected $ccExpirationYear;

    /**
     * @var string|null
     */
    protected $ccVerification;

    /**
     * @var string|null
     */
    protected $debitHolder;

    /**
     * @var string|null
     */
    protected $debitAccountNumber;

    /**
     * @var string|null
     */
    protected $debitBankCodeNumber;

    /**
     * @var string|null
     */
    protected $debitInstitute;

    /**
     * @var string|null
     */
    protected $pseudoCcNumber;

    /**
     * @var string|null
     */
    protected $paymentData;

    /**
     * @var string|null
     */
    protected $paymentDataClassName;

    /**
     * @var int|null
     */
    protected $fkSalesOrder;

    /**
     * @var string|null
     */
    protected $paymentProvider;

    /**
     * @var string|null
     */
    protected $paymentMethod;

    /**
     * @var int|null
     */
    protected $idSalesPayment;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'method' => 'method',
        'Method' => 'method',
        'redirect_url' => 'redirectUrl',
        'redirectUrl' => 'redirectUrl',
        'RedirectUrl' => 'redirectUrl',
        'cc_type' => 'ccType',
        'ccType' => 'ccType',
        'CcType' => 'ccType',
        'cc_number' => 'ccNumber',
        'ccNumber' => 'ccNumber',
        'CcNumber' => 'ccNumber',
        'cc_cardholder' => 'ccCardholder',
        'ccCardholder' => 'ccCardholder',
        'CcCardholder' => 'ccCardholder',
        'cc_expiration_month' => 'ccExpirationMonth',
        'ccExpirationMonth' => 'ccExpirationMonth',
        'CcExpirationMonth' => 'ccExpirationMonth',
        'cc_expiration_year' => 'ccExpirationYear',
        'ccExpirationYear' => 'ccExpirationYear',
        'CcExpirationYear' => 'ccExpirationYear',
        'cc_verification' => 'ccVerification',
        'ccVerification' => 'ccVerification',
        'CcVerification' => 'ccVerification',
        'debit_holder' => 'debitHolder',
        'debitHolder' => 'debitHolder',
        'DebitHolder' => 'debitHolder',
        'debit_account_number' => 'debitAccountNumber',
        'debitAccountNumber' => 'debitAccountNumber',
        'DebitAccountNumber' => 'debitAccountNumber',
        'debit_bank_code_number' => 'debitBankCodeNumber',
        'debitBankCodeNumber' => 'debitBankCodeNumber',
        'DebitBankCodeNumber' => 'debitBankCodeNumber',
        'debit_institute' => 'debitInstitute',
        'debitInstitute' => 'debitInstitute',
        'DebitInstitute' => 'debitInstitute',
        'pseudo_cc_number' => 'pseudoCcNumber',
        'pseudoCcNumber' => 'pseudoCcNumber',
        'PseudoCcNumber' => 'pseudoCcNumber',
        'payment_data' => 'paymentData',
        'paymentData' => 'paymentData',
        'PaymentData' => 'paymentData',
        'payment_data_class_name' => 'paymentDataClassName',
        'paymentDataClassName' => 'paymentDataClassName',
        'PaymentDataClassName' => 'paymentDataClassName',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'payment_provider' => 'paymentProvider',
        'paymentProvider' => 'paymentProvider',
        'PaymentProvider' => 'paymentProvider',
        'payment_method' => 'paymentMethod',
        'paymentMethod' => 'paymentMethod',
        'PaymentMethod' => 'paymentMethod',
        'id_sales_payment' => 'idSalesPayment',
        'idSalesPayment' => 'idSalesPayment',
        'IdSalesPayment' => 'idSalesPayment',
        'amount' => 'amount',
        'Amount' => 'amount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REDIRECT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'redirect_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_CARDHOLDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_cardholder',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_EXPIRATION_MONTH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_expiration_month',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_EXPIRATION_YEAR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_expiration_year',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CC_VERIFICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cc_verification',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEBIT_HOLDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'debit_holder',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEBIT_ACCOUNT_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'debit_account_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEBIT_BANK_CODE_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'debit_bank_code_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEBIT_INSTITUTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'debit_institute',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PSEUDO_CC_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'pseudo_cc_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_DATA_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_data_class_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
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
            'is_strict' => true,
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        $this->modifiedProperties[self::REDIRECT_URL] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $redirectUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRedirectUrlOrFail($redirectUrl)
    {
        if ($redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->setRedirectUrl($redirectUrl);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRedirectUrlOrFail()
    {
        if ($this->redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->redirectUrl;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRedirectUrl()
    {
        $this->assertPropertyIsSet(self::REDIRECT_URL);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccType
     *
     * @return $this
     */
    public function setCcType($ccType)
    {
        $this->ccType = $ccType;
        $this->modifiedProperties[self::CC_TYPE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcType()
    {
        return $this->ccType;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcTypeOrFail($ccType)
    {
        if ($ccType === null) {
            $this->throwNullValueException(static::CC_TYPE);
        }

        return $this->setCcType($ccType);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcTypeOrFail()
    {
        if ($this->ccType === null) {
            $this->throwNullValueException(static::CC_TYPE);
        }

        return $this->ccType;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcType()
    {
        $this->assertPropertyIsSet(self::CC_TYPE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccNumber
     *
     * @return $this
     */
    public function setCcNumber($ccNumber)
    {
        $this->ccNumber = $ccNumber;
        $this->modifiedProperties[self::CC_NUMBER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcNumberOrFail($ccNumber)
    {
        if ($ccNumber === null) {
            $this->throwNullValueException(static::CC_NUMBER);
        }

        return $this->setCcNumber($ccNumber);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcNumberOrFail()
    {
        if ($this->ccNumber === null) {
            $this->throwNullValueException(static::CC_NUMBER);
        }

        return $this->ccNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcNumber()
    {
        $this->assertPropertyIsSet(self::CC_NUMBER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccCardholder
     *
     * @return $this
     */
    public function setCcCardholder($ccCardholder)
    {
        $this->ccCardholder = $ccCardholder;
        $this->modifiedProperties[self::CC_CARDHOLDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcCardholder()
    {
        return $this->ccCardholder;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccCardholder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcCardholderOrFail($ccCardholder)
    {
        if ($ccCardholder === null) {
            $this->throwNullValueException(static::CC_CARDHOLDER);
        }

        return $this->setCcCardholder($ccCardholder);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcCardholderOrFail()
    {
        if ($this->ccCardholder === null) {
            $this->throwNullValueException(static::CC_CARDHOLDER);
        }

        return $this->ccCardholder;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcCardholder()
    {
        $this->assertPropertyIsSet(self::CC_CARDHOLDER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccExpirationMonth
     *
     * @return $this
     */
    public function setCcExpirationMonth($ccExpirationMonth)
    {
        $this->ccExpirationMonth = $ccExpirationMonth;
        $this->modifiedProperties[self::CC_EXPIRATION_MONTH] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcExpirationMonth()
    {
        return $this->ccExpirationMonth;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccExpirationMonth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcExpirationMonthOrFail($ccExpirationMonth)
    {
        if ($ccExpirationMonth === null) {
            $this->throwNullValueException(static::CC_EXPIRATION_MONTH);
        }

        return $this->setCcExpirationMonth($ccExpirationMonth);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcExpirationMonthOrFail()
    {
        if ($this->ccExpirationMonth === null) {
            $this->throwNullValueException(static::CC_EXPIRATION_MONTH);
        }

        return $this->ccExpirationMonth;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcExpirationMonth()
    {
        $this->assertPropertyIsSet(self::CC_EXPIRATION_MONTH);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccExpirationYear
     *
     * @return $this
     */
    public function setCcExpirationYear($ccExpirationYear)
    {
        $this->ccExpirationYear = $ccExpirationYear;
        $this->modifiedProperties[self::CC_EXPIRATION_YEAR] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcExpirationYear()
    {
        return $this->ccExpirationYear;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccExpirationYear
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcExpirationYearOrFail($ccExpirationYear)
    {
        if ($ccExpirationYear === null) {
            $this->throwNullValueException(static::CC_EXPIRATION_YEAR);
        }

        return $this->setCcExpirationYear($ccExpirationYear);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcExpirationYearOrFail()
    {
        if ($this->ccExpirationYear === null) {
            $this->throwNullValueException(static::CC_EXPIRATION_YEAR);
        }

        return $this->ccExpirationYear;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcExpirationYear()
    {
        $this->assertPropertyIsSet(self::CC_EXPIRATION_YEAR);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccVerification
     *
     * @return $this
     */
    public function setCcVerification($ccVerification)
    {
        $this->ccVerification = $ccVerification;
        $this->modifiedProperties[self::CC_VERIFICATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCcVerification()
    {
        return $this->ccVerification;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $ccVerification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCcVerificationOrFail($ccVerification)
    {
        if ($ccVerification === null) {
            $this->throwNullValueException(static::CC_VERIFICATION);
        }

        return $this->setCcVerification($ccVerification);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCcVerificationOrFail()
    {
        if ($this->ccVerification === null) {
            $this->throwNullValueException(static::CC_VERIFICATION);
        }

        return $this->ccVerification;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCcVerification()
    {
        $this->assertPropertyIsSet(self::CC_VERIFICATION);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitHolder
     *
     * @return $this
     */
    public function setDebitHolder($debitHolder)
    {
        $this->debitHolder = $debitHolder;
        $this->modifiedProperties[self::DEBIT_HOLDER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getDebitHolder()
    {
        return $this->debitHolder;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitHolder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDebitHolderOrFail($debitHolder)
    {
        if ($debitHolder === null) {
            $this->throwNullValueException(static::DEBIT_HOLDER);
        }

        return $this->setDebitHolder($debitHolder);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDebitHolderOrFail()
    {
        if ($this->debitHolder === null) {
            $this->throwNullValueException(static::DEBIT_HOLDER);
        }

        return $this->debitHolder;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDebitHolder()
    {
        $this->assertPropertyIsSet(self::DEBIT_HOLDER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitAccountNumber
     *
     * @return $this
     */
    public function setDebitAccountNumber($debitAccountNumber)
    {
        $this->debitAccountNumber = $debitAccountNumber;
        $this->modifiedProperties[self::DEBIT_ACCOUNT_NUMBER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getDebitAccountNumber()
    {
        return $this->debitAccountNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitAccountNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDebitAccountNumberOrFail($debitAccountNumber)
    {
        if ($debitAccountNumber === null) {
            $this->throwNullValueException(static::DEBIT_ACCOUNT_NUMBER);
        }

        return $this->setDebitAccountNumber($debitAccountNumber);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDebitAccountNumberOrFail()
    {
        if ($this->debitAccountNumber === null) {
            $this->throwNullValueException(static::DEBIT_ACCOUNT_NUMBER);
        }

        return $this->debitAccountNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDebitAccountNumber()
    {
        $this->assertPropertyIsSet(self::DEBIT_ACCOUNT_NUMBER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitBankCodeNumber
     *
     * @return $this
     */
    public function setDebitBankCodeNumber($debitBankCodeNumber)
    {
        $this->debitBankCodeNumber = $debitBankCodeNumber;
        $this->modifiedProperties[self::DEBIT_BANK_CODE_NUMBER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getDebitBankCodeNumber()
    {
        return $this->debitBankCodeNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitBankCodeNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDebitBankCodeNumberOrFail($debitBankCodeNumber)
    {
        if ($debitBankCodeNumber === null) {
            $this->throwNullValueException(static::DEBIT_BANK_CODE_NUMBER);
        }

        return $this->setDebitBankCodeNumber($debitBankCodeNumber);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDebitBankCodeNumberOrFail()
    {
        if ($this->debitBankCodeNumber === null) {
            $this->throwNullValueException(static::DEBIT_BANK_CODE_NUMBER);
        }

        return $this->debitBankCodeNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDebitBankCodeNumber()
    {
        $this->assertPropertyIsSet(self::DEBIT_BANK_CODE_NUMBER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitInstitute
     *
     * @return $this
     */
    public function setDebitInstitute($debitInstitute)
    {
        $this->debitInstitute = $debitInstitute;
        $this->modifiedProperties[self::DEBIT_INSTITUTE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getDebitInstitute()
    {
        return $this->debitInstitute;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $debitInstitute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDebitInstituteOrFail($debitInstitute)
    {
        if ($debitInstitute === null) {
            $this->throwNullValueException(static::DEBIT_INSTITUTE);
        }

        return $this->setDebitInstitute($debitInstitute);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDebitInstituteOrFail()
    {
        if ($this->debitInstitute === null) {
            $this->throwNullValueException(static::DEBIT_INSTITUTE);
        }

        return $this->debitInstitute;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDebitInstitute()
    {
        $this->assertPropertyIsSet(self::DEBIT_INSTITUTE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $pseudoCcNumber
     *
     * @return $this
     */
    public function setPseudoCcNumber($pseudoCcNumber)
    {
        $this->pseudoCcNumber = $pseudoCcNumber;
        $this->modifiedProperties[self::PSEUDO_CC_NUMBER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getPseudoCcNumber()
    {
        return $this->pseudoCcNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $pseudoCcNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPseudoCcNumberOrFail($pseudoCcNumber)
    {
        if ($pseudoCcNumber === null) {
            $this->throwNullValueException(static::PSEUDO_CC_NUMBER);
        }

        return $this->setPseudoCcNumber($pseudoCcNumber);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPseudoCcNumberOrFail()
    {
        if ($this->pseudoCcNumber === null) {
            $this->throwNullValueException(static::PSEUDO_CC_NUMBER);
        }

        return $this->pseudoCcNumber;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePseudoCcNumber()
    {
        $this->assertPropertyIsSet(self::PSEUDO_CC_NUMBER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $paymentData
     *
     * @return $this
     */
    public function setPaymentData($paymentData)
    {
        $this->paymentData = $paymentData;
        $this->modifiedProperties[self::PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getPaymentData()
    {
        return $this->paymentData;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $paymentData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentDataOrFail($paymentData)
    {
        if ($paymentData === null) {
            $this->throwNullValueException(static::PAYMENT_DATA);
        }

        return $this->setPaymentData($paymentData);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentDataOrFail()
    {
        if ($this->paymentData === null) {
            $this->throwNullValueException(static::PAYMENT_DATA);
        }

        return $this->paymentData;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentData()
    {
        $this->assertPropertyIsSet(self::PAYMENT_DATA);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $paymentDataClassName
     *
     * @return $this
     */
    public function setPaymentDataClassName($paymentDataClassName)
    {
        $this->paymentDataClassName = $paymentDataClassName;
        $this->modifiedProperties[self::PAYMENT_DATA_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getPaymentDataClassName()
    {
        return $this->paymentDataClassName;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $paymentDataClassName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentDataClassNameOrFail($paymentDataClassName)
    {
        if ($paymentDataClassName === null) {
            $this->throwNullValueException(static::PAYMENT_DATA_CLASS_NAME);
        }

        return $this->setPaymentDataClassName($paymentDataClassName);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentDataClassNameOrFail()
    {
        if ($this->paymentDataClassName === null) {
            $this->throwNullValueException(static::PAYMENT_DATA_CLASS_NAME);
        }

        return $this->paymentDataClassName;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentDataClassName()
    {
        $this->assertPropertyIsSet(self::PAYMENT_DATA_CLASS_NAME);

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @return int|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @param int|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module Payment|SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

        return $this;
    }

    /**
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
     *
     * @return string|null
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
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
     * @module Payment|SalesPayment
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
     * @module SalesPayment
     *
     * @param int|null $idSalesPayment
     *
     * @return $this
     */
    public function setIdSalesPayment(?int $idSalesPayment = null)
    {
        $this->idSalesPayment = $idSalesPayment;
        $this->modifiedProperties[self::ID_SALES_PAYMENT] = true;

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @return int|null
     */
    public function getIdSalesPayment(): ?int
    {
        return $this->idSalesPayment;
    }

    /**
     * @module SalesPayment
     *
     * @param int $idSalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesPaymentOrFail(int $idSalesPayment)
    {
        return $this->setIdSalesPayment($idSalesPayment);
    }

    /**
     * @module SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesPaymentOrFail(): int
    {
        if ($this->idSalesPayment === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT);
        }

        return $this->idSalesPayment;
    }

    /**
     * @module SalesPayment
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
     * @module SalesPayment
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount(?int $amount = null)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module SalesPayment
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @module SalesPayment
     *
     * @param int $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail(int $amount)
    {
        return $this->setAmount($amount);
    }

    /**
     * @module SalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail(): int
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module SalesPayment
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
                case 'method':
                case 'redirectUrl':
                case 'ccType':
                case 'ccNumber':
                case 'ccCardholder':
                case 'ccExpirationMonth':
                case 'ccExpirationYear':
                case 'ccVerification':
                case 'debitHolder':
                case 'debitAccountNumber':
                case 'debitBankCodeNumber':
                case 'debitInstitute':
                case 'pseudoCcNumber':
                case 'paymentData':
                case 'paymentDataClassName':
                case 'fkSalesOrder':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'idSalesPayment':
                case 'amount':
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
                case 'method':
                case 'redirectUrl':
                case 'ccType':
                case 'ccNumber':
                case 'ccCardholder':
                case 'ccExpirationMonth':
                case 'ccExpirationYear':
                case 'ccVerification':
                case 'debitHolder':
                case 'debitAccountNumber':
                case 'debitBankCodeNumber':
                case 'debitInstitute':
                case 'pseudoCcNumber':
                case 'paymentData':
                case 'paymentDataClassName':
                case 'fkSalesOrder':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'idSalesPayment':
                case 'amount':
                    $values[$arrayKey] = $value;

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
                case 'method':
                case 'redirectUrl':
                case 'ccType':
                case 'ccNumber':
                case 'ccCardholder':
                case 'ccExpirationMonth':
                case 'ccExpirationYear':
                case 'ccVerification':
                case 'debitHolder':
                case 'debitAccountNumber':
                case 'debitBankCodeNumber':
                case 'debitInstitute':
                case 'pseudoCcNumber':
                case 'paymentData':
                case 'paymentDataClassName':
                case 'fkSalesOrder':
                case 'paymentProvider':
                case 'paymentMethod':
                case 'idSalesPayment':
                case 'amount':
                    $values[$arrayKey] = $value;

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
            'method' => $this->method,
            'redirectUrl' => $this->redirectUrl,
            'ccType' => $this->ccType,
            'ccNumber' => $this->ccNumber,
            'ccCardholder' => $this->ccCardholder,
            'ccExpirationMonth' => $this->ccExpirationMonth,
            'ccExpirationYear' => $this->ccExpirationYear,
            'ccVerification' => $this->ccVerification,
            'debitHolder' => $this->debitHolder,
            'debitAccountNumber' => $this->debitAccountNumber,
            'debitBankCodeNumber' => $this->debitBankCodeNumber,
            'debitInstitute' => $this->debitInstitute,
            'pseudoCcNumber' => $this->pseudoCcNumber,
            'paymentData' => $this->paymentData,
            'paymentDataClassName' => $this->paymentDataClassName,
            'fkSalesOrder' => $this->fkSalesOrder,
            'paymentProvider' => $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod,
            'idSalesPayment' => $this->idSalesPayment,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method,
            'redirect_url' => $this->redirectUrl,
            'cc_type' => $this->ccType,
            'cc_number' => $this->ccNumber,
            'cc_cardholder' => $this->ccCardholder,
            'cc_expiration_month' => $this->ccExpirationMonth,
            'cc_expiration_year' => $this->ccExpirationYear,
            'cc_verification' => $this->ccVerification,
            'debit_holder' => $this->debitHolder,
            'debit_account_number' => $this->debitAccountNumber,
            'debit_bank_code_number' => $this->debitBankCodeNumber,
            'debit_institute' => $this->debitInstitute,
            'pseudo_cc_number' => $this->pseudoCcNumber,
            'payment_data' => $this->paymentData,
            'payment_data_class_name' => $this->paymentDataClassName,
            'fk_sales_order' => $this->fkSalesOrder,
            'payment_provider' => $this->paymentProvider,
            'payment_method' => $this->paymentMethod,
            'id_sales_payment' => $this->idSalesPayment,
            'amount' => $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'redirect_url' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, false) : $this->redirectUrl,
            'cc_type' => $this->ccType instanceof AbstractTransfer ? $this->ccType->toArray(true, false) : $this->ccType,
            'cc_number' => $this->ccNumber instanceof AbstractTransfer ? $this->ccNumber->toArray(true, false) : $this->ccNumber,
            'cc_cardholder' => $this->ccCardholder instanceof AbstractTransfer ? $this->ccCardholder->toArray(true, false) : $this->ccCardholder,
            'cc_expiration_month' => $this->ccExpirationMonth instanceof AbstractTransfer ? $this->ccExpirationMonth->toArray(true, false) : $this->ccExpirationMonth,
            'cc_expiration_year' => $this->ccExpirationYear instanceof AbstractTransfer ? $this->ccExpirationYear->toArray(true, false) : $this->ccExpirationYear,
            'cc_verification' => $this->ccVerification instanceof AbstractTransfer ? $this->ccVerification->toArray(true, false) : $this->ccVerification,
            'debit_holder' => $this->debitHolder instanceof AbstractTransfer ? $this->debitHolder->toArray(true, false) : $this->debitHolder,
            'debit_account_number' => $this->debitAccountNumber instanceof AbstractTransfer ? $this->debitAccountNumber->toArray(true, false) : $this->debitAccountNumber,
            'debit_bank_code_number' => $this->debitBankCodeNumber instanceof AbstractTransfer ? $this->debitBankCodeNumber->toArray(true, false) : $this->debitBankCodeNumber,
            'debit_institute' => $this->debitInstitute instanceof AbstractTransfer ? $this->debitInstitute->toArray(true, false) : $this->debitInstitute,
            'pseudo_cc_number' => $this->pseudoCcNumber instanceof AbstractTransfer ? $this->pseudoCcNumber->toArray(true, false) : $this->pseudoCcNumber,
            'payment_data' => $this->paymentData instanceof AbstractTransfer ? $this->paymentData->toArray(true, false) : $this->paymentData,
            'payment_data_class_name' => $this->paymentDataClassName instanceof AbstractTransfer ? $this->paymentDataClassName->toArray(true, false) : $this->paymentDataClassName,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'payment_provider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, false) : $this->paymentProvider,
            'payment_method' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, false) : $this->paymentMethod,
            'id_sales_payment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, false) : $this->idSalesPayment,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'redirectUrl' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, true) : $this->redirectUrl,
            'ccType' => $this->ccType instanceof AbstractTransfer ? $this->ccType->toArray(true, true) : $this->ccType,
            'ccNumber' => $this->ccNumber instanceof AbstractTransfer ? $this->ccNumber->toArray(true, true) : $this->ccNumber,
            'ccCardholder' => $this->ccCardholder instanceof AbstractTransfer ? $this->ccCardholder->toArray(true, true) : $this->ccCardholder,
            'ccExpirationMonth' => $this->ccExpirationMonth instanceof AbstractTransfer ? $this->ccExpirationMonth->toArray(true, true) : $this->ccExpirationMonth,
            'ccExpirationYear' => $this->ccExpirationYear instanceof AbstractTransfer ? $this->ccExpirationYear->toArray(true, true) : $this->ccExpirationYear,
            'ccVerification' => $this->ccVerification instanceof AbstractTransfer ? $this->ccVerification->toArray(true, true) : $this->ccVerification,
            'debitHolder' => $this->debitHolder instanceof AbstractTransfer ? $this->debitHolder->toArray(true, true) : $this->debitHolder,
            'debitAccountNumber' => $this->debitAccountNumber instanceof AbstractTransfer ? $this->debitAccountNumber->toArray(true, true) : $this->debitAccountNumber,
            'debitBankCodeNumber' => $this->debitBankCodeNumber instanceof AbstractTransfer ? $this->debitBankCodeNumber->toArray(true, true) : $this->debitBankCodeNumber,
            'debitInstitute' => $this->debitInstitute instanceof AbstractTransfer ? $this->debitInstitute->toArray(true, true) : $this->debitInstitute,
            'pseudoCcNumber' => $this->pseudoCcNumber instanceof AbstractTransfer ? $this->pseudoCcNumber->toArray(true, true) : $this->pseudoCcNumber,
            'paymentData' => $this->paymentData instanceof AbstractTransfer ? $this->paymentData->toArray(true, true) : $this->paymentData,
            'paymentDataClassName' => $this->paymentDataClassName instanceof AbstractTransfer ? $this->paymentDataClassName->toArray(true, true) : $this->paymentDataClassName,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'paymentProvider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, true) : $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, true) : $this->paymentMethod,
            'idSalesPayment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, true) : $this->idSalesPayment,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
        ];
    }
}
