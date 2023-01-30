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
class RestCartsThresholdsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

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
    public const DELTA_WITH_SUBTOTAL = 'deltaWithSubtotal';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $threshold;

    /**
     * @var int|null
     */
    protected $fee;

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
        'type' => 'type',
        'Type' => 'type',
        'threshold' => 'threshold',
        'Threshold' => 'threshold',
        'fee' => 'fee',
        'Fee' => 'fee',
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
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
     * @module SalesOrderThresholdsRestApi
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module SalesOrderThresholdsRestApi
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module SalesOrderThresholdsRestApi
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
     *
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
     *
     * @return int|null
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
     *
     * @return int|null
     */
    public function getDeltaWithSubtotal()
    {
        return $this->deltaWithSubtotal;
    }

    /**
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
     * @module SalesOrderThresholdsRestApi
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
                case 'type':
                case 'threshold':
                case 'fee':
                case 'deltaWithSubtotal':
                case 'message':
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
                case 'type':
                case 'threshold':
                case 'fee':
                case 'deltaWithSubtotal':
                case 'message':
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
                case 'type':
                case 'threshold':
                case 'fee':
                case 'deltaWithSubtotal':
                case 'message':
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
            'type' => $this->type,
            'threshold' => $this->threshold,
            'fee' => $this->fee,
            'deltaWithSubtotal' => $this->deltaWithSubtotal,
            'message' => $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'threshold' => $this->threshold,
            'fee' => $this->fee,
            'delta_with_subtotal' => $this->deltaWithSubtotal,
            'message' => $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, false) : $this->threshold,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, false) : $this->fee,
            'delta_with_subtotal' => $this->deltaWithSubtotal instanceof AbstractTransfer ? $this->deltaWithSubtotal->toArray(true, false) : $this->deltaWithSubtotal,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'threshold' => $this->threshold instanceof AbstractTransfer ? $this->threshold->toArray(true, true) : $this->threshold,
            'fee' => $this->fee instanceof AbstractTransfer ? $this->fee->toArray(true, true) : $this->fee,
            'deltaWithSubtotal' => $this->deltaWithSubtotal instanceof AbstractTransfer ? $this->deltaWithSubtotal->toArray(true, true) : $this->deltaWithSubtotal,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
        ];
    }
}
