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
class PaymentMethodTransfer extends AbstractTransfer
{
    /**
     * @deprecated Use paymentMethodKey instead.
     */
    public const METHOD_NAME = 'methodName';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_KEY = 'paymentMethodKey';

    /**
     * @var string
     */
    public const LABEL_NAME = 'labelName';

    /**
     * @var string
     */
    public const GROUP_NAME = 'groupName';

    /**
     * @var string
     */
    public const PAYMENT_AUTHORIZATION_ENDPOINT = 'paymentAuthorizationEndpoint';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const ID_PAYMENT_METHOD = 'idPaymentMethod';

    /**
     * @var string
     */
    public const ID_PAYMENT_PROVIDER = 'idPaymentProvider';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDER = 'paymentProvider';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const IS_HIDDEN = 'isHidden';

    /**
     * @var string|null
     */
    protected $methodName;

    /**
     * @var string|null
     */
    protected $paymentMethodKey;

    /**
     * @var string|null
     */
    protected $labelName;

    /**
     * @var string|null
     */
    protected $groupName;

    /**
     * @var string|null
     */
    protected $paymentAuthorizationEndpoint;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var int|null
     */
    protected $idPaymentMethod;

    /**
     * @var int|null
     */
    protected $idPaymentProvider;

    /**
     * @var \Generated\Shared\Transfer\PaymentProviderTransfer|null
     */
    protected $paymentProvider;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var bool|null
     */
    protected $isHidden;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'method_name' => 'methodName',
        'methodName' => 'methodName',
        'MethodName' => 'methodName',
        'payment_method_key' => 'paymentMethodKey',
        'paymentMethodKey' => 'paymentMethodKey',
        'PaymentMethodKey' => 'paymentMethodKey',
        'label_name' => 'labelName',
        'labelName' => 'labelName',
        'LabelName' => 'labelName',
        'group_name' => 'groupName',
        'groupName' => 'groupName',
        'GroupName' => 'groupName',
        'payment_authorization_endpoint' => 'paymentAuthorizationEndpoint',
        'paymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'PaymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'name' => 'name',
        'Name' => 'name',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'id_payment_method' => 'idPaymentMethod',
        'idPaymentMethod' => 'idPaymentMethod',
        'IdPaymentMethod' => 'idPaymentMethod',
        'id_payment_provider' => 'idPaymentProvider',
        'idPaymentProvider' => 'idPaymentProvider',
        'IdPaymentProvider' => 'idPaymentProvider',
        'payment_provider' => 'paymentProvider',
        'paymentProvider' => 'paymentProvider',
        'PaymentProvider' => 'paymentProvider',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'is_hidden' => 'isHidden',
        'isHidden' => 'isHidden',
        'IsHidden' => 'isHidden',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_method_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LABEL_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'label_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_AUTHORIZATION_ENDPOINT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_authorization_endpoint',
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
        self::ID_PAYMENT_METHOD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_payment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PAYMENT_PROVIDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_payment_provider',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\PaymentProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_HIDDEN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_hidden',
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
     * @module CheckoutPage|PaymentPage|CheckoutRestApi|Nopayment|Payment|PaymentsRestApi
     *
     * @deprecated Use paymentMethodKey instead.
     *
     * @param string|null $methodName
     *
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
        $this->modifiedProperties[self::METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|CheckoutRestApi|Nopayment|Payment|PaymentsRestApi
     *
     * @deprecated Use paymentMethodKey instead.
     *
     * @return string|null
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @module CheckoutPage|PaymentPage|CheckoutRestApi|Nopayment|Payment|PaymentsRestApi
     *
     * @deprecated Use paymentMethodKey instead.
     *
     * @param string|null $methodName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodNameOrFail($methodName)
    {
        if ($methodName === null) {
            $this->throwNullValueException(static::METHOD_NAME);
        }

        return $this->setMethodName($methodName);
    }

    /**
     * @module CheckoutPage|PaymentPage|CheckoutRestApi|Nopayment|Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use paymentMethodKey instead.
     *
     * @return string
     */
    public function getMethodNameOrFail()
    {
        if ($this->methodName === null) {
            $this->throwNullValueException(static::METHOD_NAME);
        }

        return $this->methodName;
    }

    /**
     * @module CheckoutPage|PaymentPage|CheckoutRestApi|Nopayment|Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use paymentMethodKey instead.
     *
     * @return $this
     */
    public function requireMethodName()
    {
        $this->assertPropertyIsSet(self::METHOD_NAME);

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|PaymentGui|Payment
     *
     * @param string|null $paymentMethodKey
     *
     * @return $this
     */
    public function setPaymentMethodKey(?string $paymentMethodKey = null)
    {
        $this->paymentMethodKey = $paymentMethodKey;
        $this->modifiedProperties[self::PAYMENT_METHOD_KEY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|PaymentGui|Payment
     *
     * @return string|null
     */
    public function getPaymentMethodKey(): ?string
    {
        return $this->paymentMethodKey;
    }

    /**
     * @module CheckoutPage|PaymentPage|PaymentGui|Payment
     *
     * @param string $paymentMethodKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodKeyOrFail(string $paymentMethodKey)
    {
        return $this->setPaymentMethodKey($paymentMethodKey);
    }

    /**
     * @module CheckoutPage|PaymentPage|PaymentGui|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentMethodKeyOrFail(): string
    {
        if ($this->paymentMethodKey === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_KEY);
        }

        return $this->paymentMethodKey;
    }

    /**
     * @module CheckoutPage|PaymentPage|PaymentGui|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethodKey()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD_KEY);

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param string|null $labelName
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;
        $this->modifiedProperties[self::LABEL_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param string|null $labelName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLabelNameOrFail($labelName)
    {
        if ($labelName === null) {
            $this->throwNullValueException(static::LABEL_NAME);
        }

        return $this->setLabelName($labelName);
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLabelNameOrFail()
    {
        if ($this->labelName === null) {
            $this->throwNullValueException(static::LABEL_NAME);
        }

        return $this->labelName;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabelName()
    {
        $this->assertPropertyIsSet(self::LABEL_NAME);

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param string|null $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        $this->modifiedProperties[self::GROUP_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @param string|null $groupName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupNameOrFail($groupName)
    {
        if ($groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->setGroupName($groupName);
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupNameOrFail()
    {
        if ($this->groupName === null) {
            $this->throwNullValueException(static::GROUP_NAME);
        }

        return $this->groupName;
    }

    /**
     * @module CheckoutPage|PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupName()
    {
        $this->assertPropertyIsSet(self::GROUP_NAME);

        return $this;
    }

    /**
     * @module PaymentPage|Payment
     *
     * @param string|null $paymentAuthorizationEndpoint
     *
     * @return $this
     */
    public function setPaymentAuthorizationEndpoint($paymentAuthorizationEndpoint)
    {
        $this->paymentAuthorizationEndpoint = $paymentAuthorizationEndpoint;
        $this->modifiedProperties[self::PAYMENT_AUTHORIZATION_ENDPOINT] = true;

        return $this;
    }

    /**
     * @module PaymentPage|Payment
     *
     * @return string|null
     */
    public function getPaymentAuthorizationEndpoint()
    {
        return $this->paymentAuthorizationEndpoint;
    }

    /**
     * @module PaymentPage|Payment
     *
     * @param string|null $paymentAuthorizationEndpoint
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentAuthorizationEndpointOrFail($paymentAuthorizationEndpoint)
    {
        if ($paymentAuthorizationEndpoint === null) {
            $this->throwNullValueException(static::PAYMENT_AUTHORIZATION_ENDPOINT);
        }

        return $this->setPaymentAuthorizationEndpoint($paymentAuthorizationEndpoint);
    }

    /**
     * @module PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentAuthorizationEndpointOrFail()
    {
        if ($this->paymentAuthorizationEndpoint === null) {
            $this->throwNullValueException(static::PAYMENT_AUTHORIZATION_ENDPOINT);
        }

        return $this->paymentAuthorizationEndpoint;
    }

    /**
     * @module PaymentPage|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentAuthorizationEndpoint()
    {
        $this->assertPropertyIsSet(self::PAYMENT_AUTHORIZATION_ENDPOINT);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentGui|Payment|PaymentsRestApi
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
     * @module CheckoutRestApi|PaymentGui|Payment|PaymentsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CheckoutRestApi|PaymentGui|Payment|PaymentsRestApi
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
     * @module CheckoutRestApi|PaymentGui|Payment|PaymentsRestApi
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
     * @module CheckoutRestApi|PaymentGui|Payment|PaymentsRestApi
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
     * @module PaymentGui|Payment
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
     * @module PaymentGui|Payment
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module PaymentGui|Payment
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
     * @module PaymentGui|Payment
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
     * @module PaymentGui|Payment
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
     * @module Payment|PaymentsRestApi
     *
     * @param int|null $idPaymentMethod
     *
     * @return $this
     */
    public function setIdPaymentMethod($idPaymentMethod)
    {
        $this->idPaymentMethod = $idPaymentMethod;
        $this->modifiedProperties[self::ID_PAYMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @return int|null
     */
    public function getIdPaymentMethod()
    {
        return $this->idPaymentMethod;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @param int|null $idPaymentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPaymentMethodOrFail($idPaymentMethod)
    {
        if ($idPaymentMethod === null) {
            $this->throwNullValueException(static::ID_PAYMENT_METHOD);
        }

        return $this->setIdPaymentMethod($idPaymentMethod);
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPaymentMethodOrFail()
    {
        if ($this->idPaymentMethod === null) {
            $this->throwNullValueException(static::ID_PAYMENT_METHOD);
        }

        return $this->idPaymentMethod;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPaymentMethod()
    {
        $this->assertPropertyIsSet(self::ID_PAYMENT_METHOD);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param int|null $idPaymentProvider
     *
     * @return $this
     */
    public function setIdPaymentProvider($idPaymentProvider)
    {
        $this->idPaymentProvider = $idPaymentProvider;
        $this->modifiedProperties[self::ID_PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return int|null
     */
    public function getIdPaymentProvider()
    {
        return $this->idPaymentProvider;
    }

    /**
     * @module Payment
     *
     * @param int|null $idPaymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPaymentProviderOrFail($idPaymentProvider)
    {
        if ($idPaymentProvider === null) {
            $this->throwNullValueException(static::ID_PAYMENT_PROVIDER);
        }

        return $this->setIdPaymentProvider($idPaymentProvider);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPaymentProviderOrFail()
    {
        if ($this->idPaymentProvider === null) {
            $this->throwNullValueException(static::ID_PAYMENT_PROVIDER);
        }

        return $this->idPaymentProvider;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPaymentProvider()
    {
        $this->assertPropertyIsSet(self::ID_PAYMENT_PROVIDER);

        return $this;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderTransfer|null $paymentProvider
     *
     * @return $this
     */
    public function setPaymentProvider(PaymentProviderTransfer $paymentProvider = null)
    {
        $this->paymentProvider = $paymentProvider;
        $this->modifiedProperties[self::PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\PaymentProviderTransfer|null
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderTransfer $paymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderOrFail(PaymentProviderTransfer $paymentProvider)
    {
        return $this->setPaymentProvider($paymentProvider);
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentProviderTransfer
     */
    public function getPaymentProviderOrFail()
    {
        if ($this->paymentProvider === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER);
        }

        return $this->paymentProvider;
    }

    /**
     * @module Payment|PaymentsRestApi
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
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param bool|null $isHidden
     *
     * @return $this
     */
    public function setIsHidden($isHidden)
    {
        $this->isHidden = $isHidden;
        $this->modifiedProperties[self::IS_HIDDEN] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * @module Payment
     *
     * @param bool|null $isHidden
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsHiddenOrFail($isHidden)
    {
        if ($isHidden === null) {
            $this->throwNullValueException(static::IS_HIDDEN);
        }

        return $this->setIsHidden($isHidden);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsHiddenOrFail()
    {
        if ($this->isHidden === null) {
            $this->throwNullValueException(static::IS_HIDDEN);
        }

        return $this->isHidden;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsHidden()
    {
        $this->assertPropertyIsSet(self::IS_HIDDEN);

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
                case 'methodName':
                case 'paymentMethodKey':
                case 'labelName':
                case 'groupName':
                case 'paymentAuthorizationEndpoint':
                case 'name':
                case 'isActive':
                case 'idPaymentMethod':
                case 'idPaymentProvider':
                case 'isHidden':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'paymentProvider':
                case 'storeRelation':
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
                case 'methodName':
                case 'paymentMethodKey':
                case 'labelName':
                case 'groupName':
                case 'paymentAuthorizationEndpoint':
                case 'name':
                case 'isActive':
                case 'idPaymentMethod':
                case 'idPaymentProvider':
                case 'isHidden':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentProvider':
                case 'storeRelation':
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
                case 'methodName':
                case 'paymentMethodKey':
                case 'labelName':
                case 'groupName':
                case 'paymentAuthorizationEndpoint':
                case 'name':
                case 'isActive':
                case 'idPaymentMethod':
                case 'idPaymentProvider':
                case 'isHidden':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentProvider':
                case 'storeRelation':
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
            'methodName' => $this->methodName,
            'paymentMethodKey' => $this->paymentMethodKey,
            'labelName' => $this->labelName,
            'groupName' => $this->groupName,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint,
            'name' => $this->name,
            'isActive' => $this->isActive,
            'idPaymentMethod' => $this->idPaymentMethod,
            'idPaymentProvider' => $this->idPaymentProvider,
            'isHidden' => $this->isHidden,
            'paymentProvider' => $this->paymentProvider,
            'storeRelation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'method_name' => $this->methodName,
            'payment_method_key' => $this->paymentMethodKey,
            'label_name' => $this->labelName,
            'group_name' => $this->groupName,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint,
            'name' => $this->name,
            'is_active' => $this->isActive,
            'id_payment_method' => $this->idPaymentMethod,
            'id_payment_provider' => $this->idPaymentProvider,
            'is_hidden' => $this->isHidden,
            'payment_provider' => $this->paymentProvider,
            'store_relation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'method_name' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, false) : $this->methodName,
            'payment_method_key' => $this->paymentMethodKey instanceof AbstractTransfer ? $this->paymentMethodKey->toArray(true, false) : $this->paymentMethodKey,
            'label_name' => $this->labelName instanceof AbstractTransfer ? $this->labelName->toArray(true, false) : $this->labelName,
            'group_name' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, false) : $this->groupName,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, false) : $this->paymentAuthorizationEndpoint,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'id_payment_method' => $this->idPaymentMethod instanceof AbstractTransfer ? $this->idPaymentMethod->toArray(true, false) : $this->idPaymentMethod,
            'id_payment_provider' => $this->idPaymentProvider instanceof AbstractTransfer ? $this->idPaymentProvider->toArray(true, false) : $this->idPaymentProvider,
            'is_hidden' => $this->isHidden instanceof AbstractTransfer ? $this->isHidden->toArray(true, false) : $this->isHidden,
            'payment_provider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, false) : $this->paymentProvider,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'methodName' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, true) : $this->methodName,
            'paymentMethodKey' => $this->paymentMethodKey instanceof AbstractTransfer ? $this->paymentMethodKey->toArray(true, true) : $this->paymentMethodKey,
            'labelName' => $this->labelName instanceof AbstractTransfer ? $this->labelName->toArray(true, true) : $this->labelName,
            'groupName' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, true) : $this->groupName,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, true) : $this->paymentAuthorizationEndpoint,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'idPaymentMethod' => $this->idPaymentMethod instanceof AbstractTransfer ? $this->idPaymentMethod->toArray(true, true) : $this->idPaymentMethod,
            'idPaymentProvider' => $this->idPaymentProvider instanceof AbstractTransfer ? $this->idPaymentProvider->toArray(true, true) : $this->idPaymentProvider,
            'isHidden' => $this->isHidden instanceof AbstractTransfer ? $this->isHidden->toArray(true, true) : $this->isHidden,
            'paymentProvider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, true) : $this->paymentProvider,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
        ];
    }
}
