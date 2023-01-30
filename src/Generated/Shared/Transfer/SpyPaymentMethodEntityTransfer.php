<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPaymentMethodEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PAYMENT_METHOD = 'idPaymentMethod';

    /**
     * @var string
     */
    public const FK_PAYMENT_PROVIDER = 'fkPaymentProvider';

    /**
     * @var string
     */
    public const GROUP_NAME = 'groupName';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_HIDDEN = 'isHidden';

    /**
     * @var string
     */
    public const LABEL_NAME = 'labelName';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PAYMENT_AUTHORIZATION_ENDPOINT = 'paymentAuthorizationEndpoint';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_KEY = 'paymentMethodKey';

    /**
     * @var string
     */
    public const SPY_PAYMENT_PROVIDER = 'spyPaymentProvider';

    /**
     * @var string
     */
    public const SPY_PAYMENT_METHOD_STORES = 'spyPaymentMethodStores';

    /**
     * @var integer|null
     */
    protected $idPaymentMethod;

    /**
     * @var integer|null
     */
    protected $fkPaymentProvider;

    /**
     * @var string|null
     */
    protected $groupName;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isHidden;

    /**
     * @var string|null
     */
    protected $labelName;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $paymentAuthorizationEndpoint;

    /**
     * @var string|null
     */
    protected $paymentMethodKey;

    /**
     * @var \Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer|null
     */
    protected $spyPaymentProvider;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer[]
     */
    protected $spyPaymentMethodStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_payment_method' => 'idPaymentMethod',
        'idPaymentMethod' => 'idPaymentMethod',
        'IdPaymentMethod' => 'idPaymentMethod',
        'fk_payment_provider' => 'fkPaymentProvider',
        'fkPaymentProvider' => 'fkPaymentProvider',
        'FkPaymentProvider' => 'fkPaymentProvider',
        'group_name' => 'groupName',
        'groupName' => 'groupName',
        'GroupName' => 'groupName',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_hidden' => 'isHidden',
        'isHidden' => 'isHidden',
        'IsHidden' => 'isHidden',
        'label_name' => 'labelName',
        'labelName' => 'labelName',
        'LabelName' => 'labelName',
        'name' => 'name',
        'Name' => 'name',
        'payment_authorization_endpoint' => 'paymentAuthorizationEndpoint',
        'paymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'PaymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'payment_method_key' => 'paymentMethodKey',
        'paymentMethodKey' => 'paymentMethodKey',
        'PaymentMethodKey' => 'paymentMethodKey',
        'spy_payment_provider' => 'spyPaymentProvider',
        'spyPaymentProvider' => 'spyPaymentProvider',
        'SpyPaymentProvider' => 'spyPaymentProvider',
        'spy_payment_method_stores' => 'spyPaymentMethodStores',
        'spyPaymentMethodStores' => 'spyPaymentMethodStores',
        'SpyPaymentMethodStores' => 'spyPaymentMethodStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PAYMENT_METHOD => [
            'type' => 'integer',
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
        self::FK_PAYMENT_PROVIDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_payment_provider',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::IS_HIDDEN => [
            'type' => 'boolean',
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
            'is_strict' => false,
        ],
        self::SPY_PAYMENT_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_payment_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PAYMENT_METHOD_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_payment_method_stores',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Payment\Persistence\SpyPaymentMethod';


    /**
     * @module 
     *
     * @param integer|null $idPaymentMethod
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdPaymentMethod()
    {
        return $this->idPaymentMethod;
    }

    /**
     * @module 
     *
     * @param integer|null $idPaymentMethod
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPaymentMethodOrFail()
    {
        if ($this->idPaymentMethod === null) {
            $this->throwNullValueException(static::ID_PAYMENT_METHOD);
        }

        return $this->idPaymentMethod;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkPaymentProvider
     *
     * @return $this
     */
    public function setFkPaymentProvider($fkPaymentProvider)
    {
        $this->fkPaymentProvider = $fkPaymentProvider;
        $this->modifiedProperties[self::FK_PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPaymentProvider()
    {
        return $this->fkPaymentProvider;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPaymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPaymentProviderOrFail($fkPaymentProvider)
    {
        if ($fkPaymentProvider === null) {
            $this->throwNullValueException(static::FK_PAYMENT_PROVIDER);
        }

        return $this->setFkPaymentProvider($fkPaymentProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPaymentProviderOrFail()
    {
        if ($this->fkPaymentProvider === null) {
            $this->throwNullValueException(static::FK_PAYMENT_PROVIDER);
        }

        return $this->fkPaymentProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPaymentProvider()
    {
        $this->assertPropertyIsSet(self::FK_PAYMENT_PROVIDER);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isHidden
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * @module 
     *
     * @param boolean|null $isHidden
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsHiddenOrFail()
    {
        if ($this->isHidden === null) {
            $this->throwNullValueException(static::IS_HIDDEN);
        }

        return $this->isHidden;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getPaymentAuthorizationEndpoint()
    {
        return $this->paymentAuthorizationEndpoint;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $paymentMethodKey
     *
     * @return $this
     */
    public function setPaymentMethodKey($paymentMethodKey)
    {
        $this->paymentMethodKey = $paymentMethodKey;
        $this->modifiedProperties[self::PAYMENT_METHOD_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPaymentMethodKey()
    {
        return $this->paymentMethodKey;
    }

    /**
     * @module 
     *
     * @param string|null $paymentMethodKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodKeyOrFail($paymentMethodKey)
    {
        if ($paymentMethodKey === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_KEY);
        }

        return $this->setPaymentMethodKey($paymentMethodKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentMethodKeyOrFail()
    {
        if ($this->paymentMethodKey === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_KEY);
        }

        return $this->paymentMethodKey;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer|null $spyPaymentProvider
     *
     * @return $this
     */
    public function setSpyPaymentProvider(SpyPaymentProviderEntityTransfer $spyPaymentProvider = null)
    {
        $this->spyPaymentProvider = $spyPaymentProvider;
        $this->modifiedProperties[self::SPY_PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer|null
     */
    public function getSpyPaymentProvider()
    {
        return $this->spyPaymentProvider;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer $spyPaymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPaymentProviderOrFail(SpyPaymentProviderEntityTransfer $spyPaymentProvider)
    {
        return $this->setSpyPaymentProvider($spyPaymentProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPaymentProviderEntityTransfer
     */
    public function getSpyPaymentProviderOrFail()
    {
        if ($this->spyPaymentProvider === null) {
            $this->throwNullValueException(static::SPY_PAYMENT_PROVIDER);
        }

        return $this->spyPaymentProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPaymentProvider()
    {
        $this->assertPropertyIsSet(self::SPY_PAYMENT_PROVIDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer[] $spyPaymentMethodStores
     *
     * @return $this
     */
    public function setSpyPaymentMethodStores(ArrayObject $spyPaymentMethodStores)
    {
        $this->spyPaymentMethodStores = $spyPaymentMethodStores;
        $this->modifiedProperties[self::SPY_PAYMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer[]
     */
    public function getSpyPaymentMethodStores()
    {
        return $this->spyPaymentMethodStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPaymentMethodStoreEntityTransfer $spyPaymentMethodStores
     *
     * @return $this
     */
    public function addSpyPaymentMethodStores(SpyPaymentMethodStoreEntityTransfer $spyPaymentMethodStores)
    {
        $this->spyPaymentMethodStores[] = $spyPaymentMethodStores;
        $this->modifiedProperties[self::SPY_PAYMENT_METHOD_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPaymentMethodStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PAYMENT_METHOD_STORES);

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
                case 'idPaymentMethod':
                case 'fkPaymentProvider':
                case 'groupName':
                case 'isActive':
                case 'isHidden':
                case 'labelName':
                case 'name':
                case 'paymentAuthorizationEndpoint':
                case 'paymentMethodKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPaymentProvider':
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
                case 'spyPaymentMethodStores':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idPaymentMethod':
                case 'fkPaymentProvider':
                case 'groupName':
                case 'isActive':
                case 'isHidden':
                case 'labelName':
                case 'name':
                case 'paymentAuthorizationEndpoint':
                case 'paymentMethodKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPaymentProvider':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPaymentMethodStores':
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
                case 'idPaymentMethod':
                case 'fkPaymentProvider':
                case 'groupName':
                case 'isActive':
                case 'isHidden':
                case 'labelName':
                case 'name':
                case 'paymentAuthorizationEndpoint':
                case 'paymentMethodKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPaymentProvider':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPaymentMethodStores':
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
        $this->spyPaymentMethodStores = $this->spyPaymentMethodStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPaymentMethod' => $this->idPaymentMethod,
            'fkPaymentProvider' => $this->fkPaymentProvider,
            'groupName' => $this->groupName,
            'isActive' => $this->isActive,
            'isHidden' => $this->isHidden,
            'labelName' => $this->labelName,
            'name' => $this->name,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint,
            'paymentMethodKey' => $this->paymentMethodKey,
            'spyPaymentProvider' => $this->spyPaymentProvider,
            'spyPaymentMethodStores' => $this->spyPaymentMethodStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_method' => $this->idPaymentMethod,
            'fk_payment_provider' => $this->fkPaymentProvider,
            'group_name' => $this->groupName,
            'is_active' => $this->isActive,
            'is_hidden' => $this->isHidden,
            'label_name' => $this->labelName,
            'name' => $this->name,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint,
            'payment_method_key' => $this->paymentMethodKey,
            'spy_payment_provider' => $this->spyPaymentProvider,
            'spy_payment_method_stores' => $this->spyPaymentMethodStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_method' => $this->idPaymentMethod instanceof AbstractTransfer ? $this->idPaymentMethod->toArray(true, false) : $this->idPaymentMethod,
            'fk_payment_provider' => $this->fkPaymentProvider instanceof AbstractTransfer ? $this->fkPaymentProvider->toArray(true, false) : $this->fkPaymentProvider,
            'group_name' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, false) : $this->groupName,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_hidden' => $this->isHidden instanceof AbstractTransfer ? $this->isHidden->toArray(true, false) : $this->isHidden,
            'label_name' => $this->labelName instanceof AbstractTransfer ? $this->labelName->toArray(true, false) : $this->labelName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, false) : $this->paymentAuthorizationEndpoint,
            'payment_method_key' => $this->paymentMethodKey instanceof AbstractTransfer ? $this->paymentMethodKey->toArray(true, false) : $this->paymentMethodKey,
            'spy_payment_provider' => $this->spyPaymentProvider instanceof AbstractTransfer ? $this->spyPaymentProvider->toArray(true, false) : $this->spyPaymentProvider,
            'spy_payment_method_stores' => $this->spyPaymentMethodStores instanceof AbstractTransfer ? $this->spyPaymentMethodStores->toArray(true, false) : $this->addValuesToCollection($this->spyPaymentMethodStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPaymentMethod' => $this->idPaymentMethod instanceof AbstractTransfer ? $this->idPaymentMethod->toArray(true, true) : $this->idPaymentMethod,
            'fkPaymentProvider' => $this->fkPaymentProvider instanceof AbstractTransfer ? $this->fkPaymentProvider->toArray(true, true) : $this->fkPaymentProvider,
            'groupName' => $this->groupName instanceof AbstractTransfer ? $this->groupName->toArray(true, true) : $this->groupName,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isHidden' => $this->isHidden instanceof AbstractTransfer ? $this->isHidden->toArray(true, true) : $this->isHidden,
            'labelName' => $this->labelName instanceof AbstractTransfer ? $this->labelName->toArray(true, true) : $this->labelName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, true) : $this->paymentAuthorizationEndpoint,
            'paymentMethodKey' => $this->paymentMethodKey instanceof AbstractTransfer ? $this->paymentMethodKey->toArray(true, true) : $this->paymentMethodKey,
            'spyPaymentProvider' => $this->spyPaymentProvider instanceof AbstractTransfer ? $this->spyPaymentProvider->toArray(true, true) : $this->spyPaymentProvider,
            'spyPaymentMethodStores' => $this->spyPaymentMethodStores instanceof AbstractTransfer ? $this->spyPaymentMethodStores->toArray(true, true) : $this->addValuesToCollection($this->spyPaymentMethodStores, true, true),
        ];
    }
}
