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
class SalesOrderThresholdValueTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const THRESHOLD = 'threshold';

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
    public const SALES_ORDER_THRESHOLD_TYPE = 'salesOrderThresholdType';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const DELTA_WITH_SUBTOTAL = 'deltaWithSubtotal';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var int|null
     */
    protected $threshold;

    /**
     * @var int|null
     */
    protected $fee;

    /**
     * @var string|null
     */
    protected $messageGlossaryKey;

    /**
     * @var \Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer|null
     */
    protected $salesOrderThresholdType;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var int|null
     */
    protected $deltaWithSubtotal;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'threshold' => 'threshold',
        'Threshold' => 'threshold',
        'fee' => 'fee',
        'Fee' => 'fee',
        'message_glossary_key' => 'messageGlossaryKey',
        'messageGlossaryKey' => 'messageGlossaryKey',
        'MessageGlossaryKey' => 'messageGlossaryKey',
        'sales_order_threshold_type' => 'salesOrderThresholdType',
        'salesOrderThresholdType' => 'salesOrderThresholdType',
        'SalesOrderThresholdType' => 'salesOrderThresholdType',
        'value' => 'value',
        'Value' => 'value',
        'delta_with_subtotal' => 'deltaWithSubtotal',
        'deltaWithSubtotal' => 'deltaWithSubtotal',
        'DeltaWithSubtotal' => 'deltaWithSubtotal',
        'message' => 'message',
        'Message' => 'message',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::THRESHOLD => [
            'type' => 'int',
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
        self::FEE => [
            'type' => 'int',
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
        self::SALES_ORDER_THRESHOLD_TYPE => [
            'type' => 'Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer',
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
        self::VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DELTA_WITH_SUBTOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'delta_with_subtotal',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param int|null $threshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param int|null $threshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getThresholdOrFail()
    {
        if ($this->threshold === null) {
            $this->throwNullValueException(static::THRESHOLD);
        }

        return $this->threshold;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param int|null $fee
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @return int|null
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @param int|null $fee
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFeeOrFail()
    {
        if ($this->fee === null) {
            $this->throwNullValueException(static::FEE);
        }

        return $this->fee;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThreshold
     *
     * @return string|null
     */
    public function getMessageGlossaryKey()
    {
        return $this->messageGlossaryKey;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer|null $salesOrderThresholdType
     *
     * @return $this
     */
    public function setSalesOrderThresholdType(SalesOrderThresholdTypeTransfer $salesOrderThresholdType = null)
    {
        $this->salesOrderThresholdType = $salesOrderThresholdType;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_TYPE] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer|null
     */
    public function getSalesOrderThresholdType()
    {
        return $this->salesOrderThresholdType;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer $salesOrderThresholdType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderThresholdTypeOrFail(SalesOrderThresholdTypeTransfer $salesOrderThresholdType)
    {
        return $this->setSalesOrderThresholdType($salesOrderThresholdType);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdTypeTransfer
     */
    public function getSalesOrderThresholdTypeOrFail()
    {
        if ($this->salesOrderThresholdType === null) {
            $this->throwNullValueException(static::SALES_ORDER_THRESHOLD_TYPE);
        }

        return $this->salesOrderThresholdType;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|SalesOrderThresholdDataImport|SalesOrderThresholdGui|SalesOrderThreshold|SalesOrderThresholdsRestApi
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
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @param int|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @param int|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @param int|null $deltaWithSubtotal
     *
     * @return $this
     */
    public function setDeltaWithSubtotal($deltaWithSubtotal)
    {
        $this->deltaWithSubtotal = $deltaWithSubtotal;
        $this->modifiedProperties[self::DELTA_WITH_SUBTOTAL] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @return int|null
     */
    public function getDeltaWithSubtotal()
    {
        return $this->deltaWithSubtotal;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @param int|null $deltaWithSubtotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeltaWithSubtotalOrFail($deltaWithSubtotal)
    {
        if ($deltaWithSubtotal === null) {
            $this->throwNullValueException(static::DELTA_WITH_SUBTOTAL);
        }

        return $this->setDeltaWithSubtotal($deltaWithSubtotal);
    }

    /**
     * @module SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDeltaWithSubtotalOrFail()
    {
        if ($this->deltaWithSubtotal === null) {
            $this->throwNullValueException(static::DELTA_WITH_SUBTOTAL);
        }

        return $this->deltaWithSubtotal;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeltaWithSubtotal()
    {
        $this->assertPropertyIsSet(self::DELTA_WITH_SUBTOTAL);

        return $this;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module SalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

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
                case 'threshold':
                case 'fee':
                case 'messageGlossaryKey':
                case 'value':
                case 'deltaWithSubtotal':
                case 'message':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderThresholdType':
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
                case 'threshold':
                case 'fee':
                case 'messageGlossaryKey':
                case 'value':
                case 'deltaWithSubtotal':
                case 'message':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderThresholdType':
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
                case 'threshold':
                case 'fee':
                case 'messageGlossaryKey':
                case 'value':
                case 'deltaWithSubtotal':
                case 'message':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderThresholdType':
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
            'threshold' => $this->threshold,
            'fee' => $this->fee,
            'messageGlossaryKey' => $this->messageGlossaryKey,
            'value' => $this->value,
            'deltaWithSubtotal' => $this->deltaWithSubtotal,
            'message' => $this->message,
            'salesOrderThresholdType' => $this->salesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'threshold' => $this->threshold,
            'fee' => $this->fee,
            'message_glossary_key' => $this->messageGlossaryKey,
            'value' => $this->value,
            'delta_with_subtotal' => $this->deltaWithSubtotal,
            'message' => $this->message,
            'sales_order_threshold_type' => $this->salesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, false) : $this->threshold,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, false) : $this->fee,
            'message_glossary_key' => $this->messageGlossaryKey instanceof AbstractTransfer ? $this->messageGlossaryKey->toArray(true, false) : $this->messageGlossaryKey,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'delta_with_subtotal' => $this->deltaWithSubtotal instanceof AbstractTransfer ? $this->deltaWithSubtotal->toArray(true, false) : $this->deltaWithSubtotal,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'sales_order_threshold_type' => $this->salesOrderThresholdType instanceof AbstractTransfer ? $this->salesOrderThresholdType->toArray(true, false) : $this->salesOrderThresholdType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, true) : $this->threshold,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, true) : $this->fee,
            'messageGlossaryKey' => $this->messageGlossaryKey instanceof AbstractTransfer ? $this->messageGlossaryKey->toArray(true, true) : $this->messageGlossaryKey,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'deltaWithSubtotal' => $this->deltaWithSubtotal instanceof AbstractTransfer ? $this->deltaWithSubtotal->toArray(true, true) : $this->deltaWithSubtotal,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'salesOrderThresholdType' => $this->salesOrderThresholdType instanceof AbstractTransfer ? $this->salesOrderThresholdType->toArray(true, true) : $this->salesOrderThresholdType,
        ];
    }
}
