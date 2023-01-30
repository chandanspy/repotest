<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductPackagingUnitAmountTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AMOUNT_INTERVAL = 'amountInterval';

    /**
     * @var string
     */
    public const IS_AMOUNT_VARIABLE = 'isAmountVariable';

    /**
     * @var string
     */
    public const DEFAULT_AMOUNT = 'defaultAmount';

    /**
     * @var string
     */
    public const AMOUNT_MIN = 'amountMin';

    /**
     * @var string
     */
    public const AMOUNT_MAX = 'amountMax';

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountInterval;

    /**
     * @var bool|null
     */
    protected $isAmountVariable;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $defaultAmount;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMin;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $amountMax;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'amount_interval' => 'amountInterval',
        'amountInterval' => 'amountInterval',
        'AmountInterval' => 'amountInterval',
        'is_amount_variable' => 'isAmountVariable',
        'isAmountVariable' => 'isAmountVariable',
        'IsAmountVariable' => 'isAmountVariable',
        'default_amount' => 'defaultAmount',
        'defaultAmount' => 'defaultAmount',
        'DefaultAmount' => 'defaultAmount',
        'amount_min' => 'amountMin',
        'amountMin' => 'amountMin',
        'AmountMin' => 'amountMin',
        'amount_max' => 'amountMax',
        'amountMax' => 'amountMax',
        'AmountMax' => 'amountMax',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AMOUNT_INTERVAL => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_interval',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AMOUNT_VARIABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_amount_variable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'default_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MIN => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT_MAX => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'amount_max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountInterval
     *
     * @return $this
     */
    public function setAmountInterval($amountInterval = null)
    {
        if ($amountInterval !== null && !$amountInterval instanceof Decimal) {
            $amountInterval = new Decimal($amountInterval);
        }

        $this->amountInterval = $amountInterval;
        $this->modifiedProperties[self::AMOUNT_INTERVAL] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountInterval()
    {
        return $this->amountInterval;
    }

    /**
     * @module ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountInterval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountIntervalOrFail($amountInterval)
    {
        if ($amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->setAmountInterval($amountInterval);
    }

    /**
     * @module ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountIntervalOrFail()
    {
        if ($this->amountInterval === null) {
            $this->throwNullValueException(static::AMOUNT_INTERVAL);
        }

        return $this->amountInterval;
    }

    /**
     * @module ProductPackagingUnitStorage|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountInterval()
    {
        $this->assertPropertyIsSet(self::AMOUNT_INTERVAL);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param bool|null $isAmountVariable
     *
     * @return $this
     */
    public function setIsAmountVariable($isAmountVariable)
    {
        $this->isAmountVariable = $isAmountVariable;
        $this->modifiedProperties[self::IS_AMOUNT_VARIABLE] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return bool|null
     */
    public function getIsAmountVariable()
    {
        return $this->isAmountVariable;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param bool|null $isAmountVariable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAmountVariableOrFail($isAmountVariable)
    {
        if ($isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->setIsAmountVariable($isAmountVariable);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAmountVariableOrFail()
    {
        if ($this->isAmountVariable === null) {
            $this->throwNullValueException(static::IS_AMOUNT_VARIABLE);
        }

        return $this->isAmountVariable;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAmountVariable()
    {
        $this->assertPropertyIsSet(self::IS_AMOUNT_VARIABLE);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $defaultAmount
     *
     * @return $this
     */
    public function setDefaultAmount($defaultAmount = null)
    {
        if ($defaultAmount !== null && !$defaultAmount instanceof Decimal) {
            $defaultAmount = new Decimal($defaultAmount);
        }

        $this->defaultAmount = $defaultAmount;
        $this->modifiedProperties[self::DEFAULT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getDefaultAmount()
    {
        return $this->defaultAmount;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $defaultAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultAmountOrFail($defaultAmount)
    {
        if ($defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->setDefaultAmount($defaultAmount);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getDefaultAmountOrFail()
    {
        if ($this->defaultAmount === null) {
            $this->throwNullValueException(static::DEFAULT_AMOUNT);
        }

        return $this->defaultAmount;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultAmount()
    {
        $this->assertPropertyIsSet(self::DEFAULT_AMOUNT);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMin
     *
     * @return $this
     */
    public function setAmountMin($amountMin = null)
    {
        if ($amountMin !== null && !$amountMin instanceof Decimal) {
            $amountMin = new Decimal($amountMin);
        }

        $this->amountMin = $amountMin;
        $this->modifiedProperties[self::AMOUNT_MIN] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMin()
    {
        return $this->amountMin;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMinOrFail($amountMin)
    {
        if ($amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->setAmountMin($amountMin);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMinOrFail()
    {
        if ($this->amountMin === null) {
            $this->throwNullValueException(static::AMOUNT_MIN);
        }

        return $this->amountMin;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMin()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MIN);

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $amountMax
     *
     * @return $this
     */
    public function setAmountMax($amountMax = null)
    {
        if ($amountMax !== null && !$amountMax instanceof Decimal) {
            $amountMax = new Decimal($amountMax);
        }

        $this->amountMax = $amountMax;
        $this->modifiedProperties[self::AMOUNT_MAX] = true;

        return $this;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAmountMax()
    {
        return $this->amountMax;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $amountMax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountMaxOrFail($amountMax)
    {
        if ($amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->setAmountMax($amountMax);
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAmountMaxOrFail()
    {
        if ($this->amountMax === null) {
            $this->throwNullValueException(static::AMOUNT_MAX);
        }

        return $this->amountMax;
    }

    /**
     * @module ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmountMax()
    {
        $this->assertPropertyIsSet(self::AMOUNT_MAX);

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
                case 'isAmountVariable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'amountInterval':
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
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
                case 'isAmountVariable':
                case 'amountInterval':
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
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
                case 'isAmountVariable':
                case 'amountInterval':
                case 'defaultAmount':
                case 'amountMin':
                case 'amountMax':
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
            'isAmountVariable' => $this->isAmountVariable,
            'amountInterval' => $this->amountInterval,
            'defaultAmount' => $this->defaultAmount,
            'amountMin' => $this->amountMin,
            'amountMax' => $this->amountMax,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_amount_variable' => $this->isAmountVariable,
            'amount_interval' => $this->amountInterval,
            'default_amount' => $this->defaultAmount,
            'amount_min' => $this->amountMin,
            'amount_max' => $this->amountMax,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_amount_variable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, false) : $this->isAmountVariable,
            'amount_interval' => $this->amountInterval,
            'default_amount' => $this->defaultAmount,
            'amount_min' => $this->amountMin,
            'amount_max' => $this->amountMax,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isAmountVariable' => $this->isAmountVariable instanceof AbstractTransfer ? $this->isAmountVariable->toArray(true, true) : $this->isAmountVariable,
            'amountInterval' => $this->amountInterval,
            'defaultAmount' => $this->defaultAmount,
            'amountMin' => $this->amountMin,
            'amountMax' => $this->amountMax,
        ];
    }
}
