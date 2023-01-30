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
class SpySalesOrderThresholdEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_THRESHOLD = 'idSalesOrderThreshold';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_THRESHOLD_TYPE = 'fkSalesOrderThresholdType';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const FEE = 'fee';

    /**
     * @var string
     */
    public const MESSAGE_GLOSSARY_KEY = 'messageGlossaryKey';

    /**
     * @var string
     */
    public const THRESHOLD = 'threshold';

    /**
     * @var string
     */
    public const SALES_ORDER_THRESHOLD_TYPE = 'salesOrderThresholdType';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var integer|null
     */
    protected $idSalesOrderThreshold;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderThresholdType;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var integer|null
     */
    protected $fee;

    /**
     * @var string|null
     */
    protected $messageGlossaryKey;

    /**
     * @var integer|null
     */
    protected $threshold;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer|null
     */
    protected $salesOrderThresholdType;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_threshold' => 'idSalesOrderThreshold',
        'idSalesOrderThreshold' => 'idSalesOrderThreshold',
        'IdSalesOrderThreshold' => 'idSalesOrderThreshold',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_sales_order_threshold_type' => 'fkSalesOrderThresholdType',
        'fkSalesOrderThresholdType' => 'fkSalesOrderThresholdType',
        'FkSalesOrderThresholdType' => 'fkSalesOrderThresholdType',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'fee' => 'fee',
        'Fee' => 'fee',
        'message_glossary_key' => 'messageGlossaryKey',
        'messageGlossaryKey' => 'messageGlossaryKey',
        'MessageGlossaryKey' => 'messageGlossaryKey',
        'threshold' => 'threshold',
        'Threshold' => 'threshold',
        'sales_order_threshold_type' => 'salesOrderThresholdType',
        'salesOrderThresholdType' => 'salesOrderThresholdType',
        'SalesOrderThresholdType' => 'salesOrderThresholdType',
        'currency' => 'currency',
        'Currency' => 'currency',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_THRESHOLD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_threshold',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_THRESHOLD_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_threshold_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FEE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fee',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE_GLOSSARY_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message_glossary_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::THRESHOLD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'threshold',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_THRESHOLD_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_threshold_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
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
    public static $entityNamespace = 'Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThreshold
     *
     * @return $this
     */
    public function setIdSalesOrderThreshold($idSalesOrderThreshold)
    {
        $this->idSalesOrderThreshold = $idSalesOrderThreshold;
        $this->modifiedProperties[self::ID_SALES_ORDER_THRESHOLD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderThreshold()
    {
        return $this->idSalesOrderThreshold;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderThresholdOrFail($idSalesOrderThreshold)
    {
        if ($idSalesOrderThreshold === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD);
        }

        return $this->setIdSalesOrderThreshold($idSalesOrderThreshold);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderThresholdOrFail()
    {
        if ($this->idSalesOrderThreshold === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_THRESHOLD);
        }

        return $this->idSalesOrderThreshold;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderThreshold()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_THRESHOLD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @return $this
     */
    public function setFkCurrency($fkCurrency)
    {
        $this->fkCurrency = $fkCurrency;
        $this->modifiedProperties[self::FK_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCurrencyOrFail($fkCurrency)
    {
        if ($fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->setFkCurrency($fkCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCurrency()
    {
        $this->assertPropertyIsSet(self::FK_CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderThresholdType
     *
     * @return $this
     */
    public function setFkSalesOrderThresholdType($fkSalesOrderThresholdType)
    {
        $this->fkSalesOrderThresholdType = $fkSalesOrderThresholdType;
        $this->modifiedProperties[self::FK_SALES_ORDER_THRESHOLD_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderThresholdType()
    {
        return $this->fkSalesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderThresholdType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderThresholdTypeOrFail($fkSalesOrderThresholdType)
    {
        if ($fkSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->setFkSalesOrderThresholdType($fkSalesOrderThresholdType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderThresholdTypeOrFail()
    {
        if ($this->fkSalesOrderThresholdType === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->fkSalesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderThresholdType()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_THRESHOLD_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        $this->modifiedProperties[self::FEE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @module 
     *
     * @param integer|null $fee
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFeeOrFail($fee)
    {
        if ($fee === null) {
            $this->throwNullValueException(static::FEE);
        }

        return $this->setFee($fee);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFeeOrFail()
    {
        if ($this->fee === null) {
            $this->throwNullValueException(static::FEE);
        }

        return $this->fee;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFee()
    {
        $this->assertPropertyIsSet(self::FEE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $messageGlossaryKey
     *
     * @return $this
     */
    public function setMessageGlossaryKey($messageGlossaryKey)
    {
        $this->messageGlossaryKey = $messageGlossaryKey;
        $this->modifiedProperties[self::MESSAGE_GLOSSARY_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getMessageGlossaryKey()
    {
        return $this->messageGlossaryKey;
    }

    /**
     * @module 
     *
     * @param string|null $messageGlossaryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageGlossaryKeyOrFail($messageGlossaryKey)
    {
        if ($messageGlossaryKey === null) {
            $this->throwNullValueException(static::MESSAGE_GLOSSARY_KEY);
        }

        return $this->setMessageGlossaryKey($messageGlossaryKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageGlossaryKeyOrFail()
    {
        if ($this->messageGlossaryKey === null) {
            $this->throwNullValueException(static::MESSAGE_GLOSSARY_KEY);
        }

        return $this->messageGlossaryKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageGlossaryKey()
    {
        $this->assertPropertyIsSet(self::MESSAGE_GLOSSARY_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->threshold = $threshold;
        $this->modifiedProperties[self::THRESHOLD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @module 
     *
     * @param integer|null $threshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setThresholdOrFail($threshold)
    {
        if ($threshold === null) {
            $this->throwNullValueException(static::THRESHOLD);
        }

        return $this->setThreshold($threshold);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getThresholdOrFail()
    {
        if ($this->threshold === null) {
            $this->throwNullValueException(static::THRESHOLD);
        }

        return $this->threshold;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireThreshold()
    {
        $this->assertPropertyIsSet(self::THRESHOLD);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer|null $salesOrderThresholdType
     *
     * @return $this
     */
    public function setSalesOrderThresholdType(SpySalesOrderThresholdTypeEntityTransfer $salesOrderThresholdType = null)
    {
        $this->salesOrderThresholdType = $salesOrderThresholdType;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer|null
     */
    public function getSalesOrderThresholdType()
    {
        return $this->salesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer $salesOrderThresholdType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderThresholdTypeOrFail(SpySalesOrderThresholdTypeEntityTransfer $salesOrderThresholdType)
    {
        return $this->setSalesOrderThresholdType($salesOrderThresholdType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderThresholdTypeEntityTransfer
     */
    public function getSalesOrderThresholdTypeOrFail()
    {
        if ($this->salesOrderThresholdType === null) {
            $this->throwNullValueException(static::SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->salesOrderThresholdType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderThresholdType()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_THRESHOLD_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(SpyCurrencyEntityTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(SpyCurrencyEntityTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'idSalesOrderThreshold':
                case 'fkCurrency':
                case 'fkSalesOrderThresholdType':
                case 'fkStore':
                case 'fee':
                case 'messageGlossaryKey':
                case 'threshold':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderThresholdType':
                case 'currency':
                case 'store':
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
                case 'idSalesOrderThreshold':
                case 'fkCurrency':
                case 'fkSalesOrderThresholdType':
                case 'fkStore':
                case 'fee':
                case 'messageGlossaryKey':
                case 'threshold':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderThresholdType':
                case 'currency':
                case 'store':
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
                case 'idSalesOrderThreshold':
                case 'fkCurrency':
                case 'fkSalesOrderThresholdType':
                case 'fkStore':
                case 'fee':
                case 'messageGlossaryKey':
                case 'threshold':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderThresholdType':
                case 'currency':
                case 'store':
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
            'idSalesOrderThreshold' => $this->idSalesOrderThreshold,
            'fkCurrency' => $this->fkCurrency,
            'fkSalesOrderThresholdType' => $this->fkSalesOrderThresholdType,
            'fkStore' => $this->fkStore,
            'fee' => $this->fee,
            'messageGlossaryKey' => $this->messageGlossaryKey,
            'threshold' => $this->threshold,
            'salesOrderThresholdType' => $this->salesOrderThresholdType,
            'currency' => $this->currency,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold' => $this->idSalesOrderThreshold,
            'fk_currency' => $this->fkCurrency,
            'fk_sales_order_threshold_type' => $this->fkSalesOrderThresholdType,
            'fk_store' => $this->fkStore,
            'fee' => $this->fee,
            'message_glossary_key' => $this->messageGlossaryKey,
            'threshold' => $this->threshold,
            'sales_order_threshold_type' => $this->salesOrderThresholdType,
            'currency' => $this->currency,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_threshold' => $this->idSalesOrderThreshold instanceof AbstractTransfer ? $this->idSalesOrderThreshold->toArray(true, false) : $this->idSalesOrderThreshold,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_sales_order_threshold_type' => $this->fkSalesOrderThresholdType instanceof AbstractTransfer ? $this->fkSalesOrderThresholdType->toArray(true, false) : $this->fkSalesOrderThresholdType,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, false) : $this->fee,
            'message_glossary_key' => $this->messageGlossaryKey instanceof AbstractTransfer ? $this->messageGlossaryKey->toArray(true, false) : $this->messageGlossaryKey,
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, false) : $this->threshold,
            'sales_order_threshold_type' => $this->salesOrderThresholdType instanceof AbstractTransfer ? $this->salesOrderThresholdType->toArray(true, false) : $this->salesOrderThresholdType,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderThreshold' => $this->idSalesOrderThreshold instanceof AbstractTransfer ? $this->idSalesOrderThreshold->toArray(true, true) : $this->idSalesOrderThreshold,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkSalesOrderThresholdType' => $this->fkSalesOrderThresholdType instanceof AbstractTransfer ? $this->fkSalesOrderThresholdType->toArray(true, true) : $this->fkSalesOrderThresholdType,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, true) : $this->fee,
            'messageGlossaryKey' => $this->messageGlossaryKey instanceof AbstractTransfer ? $this->messageGlossaryKey->toArray(true, true) : $this->messageGlossaryKey,
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, true) : $this->threshold,
            'salesOrderThresholdType' => $this->salesOrderThresholdType instanceof AbstractTransfer ? $this->salesOrderThresholdType->toArray(true, true) : $this->salesOrderThresholdType,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
