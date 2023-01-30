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
class QuoteResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const QUOTE_TRANSFER = 'quoteTransfer';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const CUSTOMER_QUOTES = 'customerQuotes';

    /**
     * @var string
     */
    public const SHARED_CUSTOMER_QUOTES = 'sharedCustomerQuotes';

    /**
     * @var string
     */
    public const CUSTOMER_PERMISSIONS = 'customerPermissions';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quoteTransfer;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QuoteErrorTransfer[]
     */
    protected $errors;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var \Generated\Shared\Transfer\QuoteCollectionTransfer|null
     */
    protected $customerQuotes;

    /**
     * @var \Generated\Shared\Transfer\QuoteCollectionTransfer|null
     */
    protected $sharedCustomerQuotes;

    /**
     * @var \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    protected $customerPermissions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'quote_transfer' => 'quoteTransfer',
        'quoteTransfer' => 'quoteTransfer',
        'QuoteTransfer' => 'quoteTransfer',
        'errors' => 'errors',
        'Errors' => 'errors',
        'customer' => 'customer',
        'Customer' => 'customer',
        'quote' => 'quote',
        'Quote' => 'quote',
        'customer_quotes' => 'customerQuotes',
        'customerQuotes' => 'customerQuotes',
        'CustomerQuotes' => 'customerQuotes',
        'shared_customer_quotes' => 'sharedCustomerQuotes',
        'sharedCustomerQuotes' => 'sharedCustomerQuotes',
        'SharedCustomerQuotes' => 'sharedCustomerQuotes',
        'customer_permissions' => 'customerPermissions',
        'customerPermissions' => 'customerPermissions',
        'CustomerPermissions' => 'customerPermissions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_transfer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\QuoteErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_QUOTES => [
            'type' => 'Generated\Shared\Transfer\QuoteCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer_quotes',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHARED_CUSTOMER_QUOTES => [
            'type' => 'Generated\Shared\Transfer\QuoteCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'shared_customer_quotes',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_PERMISSIONS => [
            'type' => 'Generated\Shared\Transfer\PermissionCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer_permissions',
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
     * @module CartNoteWidget|CartPage|ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|SharedCartPage|CartCodesRestApi|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module CartNoteWidget|CartPage|ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|SharedCartPage|CartCodesRestApi|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module CartNoteWidget|CartPage|ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|SharedCartPage|CartCodesRestApi|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @param bool|null $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail($isSuccessful)
    {
        if ($isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module CartNoteWidget|CartPage|ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|SharedCartPage|CartCodesRestApi|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail()
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module CartNoteWidget|CartPage|ConfigurableBundleNoteWidget|ConfigurableBundlePage|ConfigurableBundleWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|SharedCartPage|CartCodesRestApi|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module CartPage|ConfigurableBundleNoteWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|UpSellingProductsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quoteTransfer
     *
     * @return $this
     */
    public function setQuoteTransfer(QuoteTransfer $quoteTransfer = null)
    {
        $this->quoteTransfer = $quoteTransfer;
        $this->modifiedProperties[self::QUOTE_TRANSFER] = true;

        return $this;
    }

    /**
     * @module CartPage|ConfigurableBundleNoteWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|UpSellingProductsRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuoteTransfer()
    {
        return $this->quoteTransfer;
    }

    /**
     * @module CartPage|ConfigurableBundleNoteWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|UpSellingProductsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteTransferOrFail(QuoteTransfer $quoteTransfer)
    {
        return $this->setQuoteTransfer($quoteTransfer);
    }

    /**
     * @module CartPage|ConfigurableBundleNoteWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteTransferOrFail()
    {
        if ($this->quoteTransfer === null) {
            $this->throwNullValueException(static::QUOTE_TRANSFER);
        }

        return $this->quoteTransfer;
    }

    /**
     * @module CartPage|ConfigurableBundleNoteWidget|MultiCartPage|OrderCustomReferenceWidget|PersistentCartSharePage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|MultiCart|PersistentCartShare|PersistentCart|QuoteApproval|QuoteRequestAgent|QuoteRequest|Quote|SharedCart|SharedCartsRestApi|ShoppingList|UpSellingProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteTransfer()
    {
        $this->assertPropertyIsSet(self::QUOTE_TRANSFER);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QuoteErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QuoteErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote
     *
     * @param \Generated\Shared\Transfer\QuoteErrorTransfer $error
     *
     * @return $this
     */
    public function addError(QuoteErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleWidget|OrderCustomReferenceWidget|PersistentCartSharePage|QuoteRequestAgentPage|QuoteRequestPage|Cart|CartsRestApi|CheckoutRestApi|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|OrderCustomReference|PersistentCartShare|PersistentCart|QuoteRequestAgent|QuoteRequest|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module Cart|CheckoutRestApi|MultiCart|PersistentCart|Quote|SharedCart
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
     * @module Cart|CheckoutRestApi|MultiCart|PersistentCart|Quote|SharedCart
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module Cart|CheckoutRestApi|MultiCart|PersistentCart|Quote|SharedCart
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
     * @module Cart|CheckoutRestApi|MultiCart|PersistentCart|Quote|SharedCart
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
     * @module Cart|CheckoutRestApi|MultiCart|PersistentCart|Quote|SharedCart
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
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module MultiCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteCollectionTransfer|null $customerQuotes
     *
     * @return $this
     */
    public function setCustomerQuotes(QuoteCollectionTransfer $customerQuotes = null)
    {
        $this->customerQuotes = $customerQuotes;
        $this->modifiedProperties[self::CUSTOMER_QUOTES] = true;

        return $this;
    }

    /**
     * @module MultiCart|SharedCart
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer|null
     */
    public function getCustomerQuotes()
    {
        return $this->customerQuotes;
    }

    /**
     * @module MultiCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteCollectionTransfer $customerQuotes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerQuotesOrFail(QuoteCollectionTransfer $customerQuotes)
    {
        return $this->setCustomerQuotes($customerQuotes);
    }

    /**
     * @module MultiCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer
     */
    public function getCustomerQuotesOrFail()
    {
        if ($this->customerQuotes === null) {
            $this->throwNullValueException(static::CUSTOMER_QUOTES);
        }

        return $this->customerQuotes;
    }

    /**
     * @module MultiCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerQuotes()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_QUOTES);

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteCollectionTransfer|null $sharedCustomerQuotes
     *
     * @return $this
     */
    public function setSharedCustomerQuotes(QuoteCollectionTransfer $sharedCustomerQuotes = null)
    {
        $this->sharedCustomerQuotes = $sharedCustomerQuotes;
        $this->modifiedProperties[self::SHARED_CUSTOMER_QUOTES] = true;

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer|null
     */
    public function getSharedCustomerQuotes()
    {
        return $this->sharedCustomerQuotes;
    }

    /**
     * @module SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteCollectionTransfer $sharedCustomerQuotes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSharedCustomerQuotesOrFail(QuoteCollectionTransfer $sharedCustomerQuotes)
    {
        return $this->setSharedCustomerQuotes($sharedCustomerQuotes);
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteCollectionTransfer
     */
    public function getSharedCustomerQuotesOrFail()
    {
        if ($this->sharedCustomerQuotes === null) {
            $this->throwNullValueException(static::SHARED_CUSTOMER_QUOTES);
        }

        return $this->sharedCustomerQuotes;
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSharedCustomerQuotes()
    {
        $this->assertPropertyIsSet(self::SHARED_CUSTOMER_QUOTES);

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer|null $customerPermissions
     *
     * @return $this
     */
    public function setCustomerPermissions(PermissionCollectionTransfer $customerPermissions = null)
    {
        $this->customerPermissions = $customerPermissions;
        $this->modifiedProperties[self::CUSTOMER_PERMISSIONS] = true;

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer|null
     */
    public function getCustomerPermissions()
    {
        return $this->customerPermissions;
    }

    /**
     * @module SharedCart
     *
     * @param \Generated\Shared\Transfer\PermissionCollectionTransfer $customerPermissions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerPermissionsOrFail(PermissionCollectionTransfer $customerPermissions)
    {
        return $this->setCustomerPermissions($customerPermissions);
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PermissionCollectionTransfer
     */
    public function getCustomerPermissionsOrFail()
    {
        if ($this->customerPermissions === null) {
            $this->throwNullValueException(static::CUSTOMER_PERMISSIONS);
        }

        return $this->customerPermissions;
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerPermissions()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_PERMISSIONS);

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
                case 'isSuccessful':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quoteTransfer':
                case 'customer':
                case 'quote':
                case 'customerQuotes':
                case 'sharedCustomerQuotes':
                case 'customerPermissions':
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
                case 'errors':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteTransfer':
                case 'customer':
                case 'quote':
                case 'customerQuotes':
                case 'sharedCustomerQuotes':
                case 'customerPermissions':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'errors':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteTransfer':
                case 'customer':
                case 'quote':
                case 'customerQuotes':
                case 'sharedCustomerQuotes':
                case 'customerPermissions':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'errors':
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
        $this->errors = $this->errors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'quoteTransfer' => $this->quoteTransfer,
            'customer' => $this->customer,
            'quote' => $this->quote,
            'customerQuotes' => $this->customerQuotes,
            'sharedCustomerQuotes' => $this->sharedCustomerQuotes,
            'customerPermissions' => $this->customerPermissions,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'quote_transfer' => $this->quoteTransfer,
            'customer' => $this->customer,
            'quote' => $this->quote,
            'customer_quotes' => $this->customerQuotes,
            'shared_customer_quotes' => $this->sharedCustomerQuotes,
            'customer_permissions' => $this->customerPermissions,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'quote_transfer' => $this->quoteTransfer instanceof AbstractTransfer ? $this->quoteTransfer->toArray(true, false) : $this->quoteTransfer,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
            'customer_quotes' => $this->customerQuotes instanceof AbstractTransfer ? $this->customerQuotes->toArray(true, false) : $this->customerQuotes,
            'shared_customer_quotes' => $this->sharedCustomerQuotes instanceof AbstractTransfer ? $this->sharedCustomerQuotes->toArray(true, false) : $this->sharedCustomerQuotes,
            'customer_permissions' => $this->customerPermissions instanceof AbstractTransfer ? $this->customerPermissions->toArray(true, false) : $this->customerPermissions,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'quoteTransfer' => $this->quoteTransfer instanceof AbstractTransfer ? $this->quoteTransfer->toArray(true, true) : $this->quoteTransfer,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
            'customerQuotes' => $this->customerQuotes instanceof AbstractTransfer ? $this->customerQuotes->toArray(true, true) : $this->customerQuotes,
            'sharedCustomerQuotes' => $this->sharedCustomerQuotes instanceof AbstractTransfer ? $this->sharedCustomerQuotes->toArray(true, true) : $this->sharedCustomerQuotes,
            'customerPermissions' => $this->customerPermissions instanceof AbstractTransfer ? $this->customerPermissions->toArray(true, true) : $this->customerPermissions,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
