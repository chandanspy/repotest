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
class DiscountCalculatorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION = 'discountPromotion';

    /**
     * @var string
     */
    public const COLLECTOR_STRATEGY_TYPE = 'collectorStrategyType';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CALCULATOR_PLUGIN = 'calculatorPlugin';

    /**
     * @var string
     */
    public const COLLECTOR_QUERY_STRING = 'collectorQueryString';

    /**
     * @var string
     */
    public const MONEY_VALUE_COLLECTION = 'moneyValueCollection';

    /**
     * @var \Generated\Shared\Transfer\DiscountPromotionTransfer|null
     */
    protected $discountPromotion;

    /**
     * @var string|null
     */
    protected $collectorStrategyType;

    /**
     * @var string|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $calculatorPlugin;

    /**
     * @var string|null
     */
    protected $collectorQueryString;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    protected $moneyValueCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'discount_promotion' => 'discountPromotion',
        'discountPromotion' => 'discountPromotion',
        'DiscountPromotion' => 'discountPromotion',
        'collector_strategy_type' => 'collectorStrategyType',
        'collectorStrategyType' => 'collectorStrategyType',
        'CollectorStrategyType' => 'collectorStrategyType',
        'amount' => 'amount',
        'Amount' => 'amount',
        'calculator_plugin' => 'calculatorPlugin',
        'calculatorPlugin' => 'calculatorPlugin',
        'CalculatorPlugin' => 'calculatorPlugin',
        'collector_query_string' => 'collectorQueryString',
        'collectorQueryString' => 'collectorQueryString',
        'CollectorQueryString' => 'collectorQueryString',
        'money_value_collection' => 'moneyValueCollection',
        'moneyValueCollection' => 'moneyValueCollection',
        'MoneyValueCollection' => 'moneyValueCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISCOUNT_PROMOTION => [
            'type' => 'Generated\Shared\Transfer\DiscountPromotionTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COLLECTOR_STRATEGY_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'collector_strategy_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'string',
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
        self::CALCULATOR_PLUGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'calculator_plugin',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COLLECTOR_QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'collector_query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MONEY_VALUE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'money_value_collection',
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
     * @module DiscountPromotion
     *
     * @param \Generated\Shared\Transfer\DiscountPromotionTransfer|null $discountPromotion
     *
     * @return $this
     */
    public function setDiscountPromotion(DiscountPromotionTransfer $discountPromotion = null)
    {
        $this->discountPromotion = $discountPromotion;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return \Generated\Shared\Transfer\DiscountPromotionTransfer|null
     */
    public function getDiscountPromotion()
    {
        return $this->discountPromotion;
    }

    /**
     * @module DiscountPromotion
     *
     * @param \Generated\Shared\Transfer\DiscountPromotionTransfer $discountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountPromotionOrFail(DiscountPromotionTransfer $discountPromotion)
    {
        return $this->setDiscountPromotion($discountPromotion);
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountPromotionTransfer
     */
    public function getDiscountPromotionOrFail()
    {
        if ($this->discountPromotion === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION);
        }

        return $this->discountPromotion;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotion()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION);

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param string|null $collectorStrategyType
     *
     * @return $this
     */
    public function setCollectorStrategyType($collectorStrategyType)
    {
        $this->collectorStrategyType = $collectorStrategyType;
        $this->modifiedProperties[self::COLLECTOR_STRATEGY_TYPE] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @return string|null
     */
    public function getCollectorStrategyType()
    {
        return $this->collectorStrategyType;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param string|null $collectorStrategyType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCollectorStrategyTypeOrFail($collectorStrategyType)
    {
        if ($collectorStrategyType === null) {
            $this->throwNullValueException(static::COLLECTOR_STRATEGY_TYPE);
        }

        return $this->setCollectorStrategyType($collectorStrategyType);
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCollectorStrategyTypeOrFail()
    {
        if ($this->collectorStrategyType === null) {
            $this->throwNullValueException(static::COLLECTOR_STRATEGY_TYPE);
        }

        return $this->collectorStrategyType;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCollectorStrategyType()
    {
        $this->assertPropertyIsSet(self::COLLECTOR_STRATEGY_TYPE);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $amount
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
     * @module Discount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module Discount
     *
     * @param string|null $amount
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
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @param string|null $calculatorPlugin
     *
     * @return $this
     */
    public function setCalculatorPlugin($calculatorPlugin)
    {
        $this->calculatorPlugin = $calculatorPlugin;
        $this->modifiedProperties[self::CALCULATOR_PLUGIN] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getCalculatorPlugin()
    {
        return $this->calculatorPlugin;
    }

    /**
     * @module Discount
     *
     * @param string|null $calculatorPlugin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCalculatorPluginOrFail($calculatorPlugin)
    {
        if ($calculatorPlugin === null) {
            $this->throwNullValueException(static::CALCULATOR_PLUGIN);
        }

        return $this->setCalculatorPlugin($calculatorPlugin);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCalculatorPluginOrFail()
    {
        if ($this->calculatorPlugin === null) {
            $this->throwNullValueException(static::CALCULATOR_PLUGIN);
        }

        return $this->calculatorPlugin;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCalculatorPlugin()
    {
        $this->assertPropertyIsSet(self::CALCULATOR_PLUGIN);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param string|null $collectorQueryString
     *
     * @return $this
     */
    public function setCollectorQueryString($collectorQueryString)
    {
        $this->collectorQueryString = $collectorQueryString;
        $this->modifiedProperties[self::COLLECTOR_QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getCollectorQueryString()
    {
        return $this->collectorQueryString;
    }

    /**
     * @module Discount
     *
     * @param string|null $collectorQueryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCollectorQueryStringOrFail($collectorQueryString)
    {
        if ($collectorQueryString === null) {
            $this->throwNullValueException(static::COLLECTOR_QUERY_STRING);
        }

        return $this->setCollectorQueryString($collectorQueryString);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCollectorQueryStringOrFail()
    {
        if ($this->collectorQueryString === null) {
            $this->throwNullValueException(static::COLLECTOR_QUERY_STRING);
        }

        return $this->collectorQueryString;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCollectorQueryString()
    {
        $this->assertPropertyIsSet(self::COLLECTOR_QUERY_STRING);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[] $moneyValueCollection
     *
     * @return $this
     */
    public function setMoneyValueCollection(ArrayObject $moneyValueCollection)
    {
        $this->moneyValueCollection = $moneyValueCollection;
        $this->modifiedProperties[self::MONEY_VALUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MoneyValueTransfer[]
     */
    public function getMoneyValueCollection()
    {
        return $this->moneyValueCollection;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $moneyValue
     *
     * @return $this
     */
    public function addMoneyValue(MoneyValueTransfer $moneyValue)
    {
        $this->moneyValueCollection[] = $moneyValue;
        $this->modifiedProperties[self::MONEY_VALUE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMoneyValueCollection()
    {
        $this->assertCollectionPropertyIsSet(self::MONEY_VALUE_COLLECTION);

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
                case 'collectorStrategyType':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'discountPromotion':
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
                case 'moneyValueCollection':
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
                case 'collectorStrategyType':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountPromotion':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'moneyValueCollection':
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
                case 'collectorStrategyType':
                case 'amount':
                case 'calculatorPlugin':
                case 'collectorQueryString':
                    $values[$arrayKey] = $value;

                    break;
                case 'discountPromotion':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'moneyValueCollection':
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
        $this->moneyValueCollection = $this->moneyValueCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'collectorStrategyType' => $this->collectorStrategyType,
            'amount' => $this->amount,
            'calculatorPlugin' => $this->calculatorPlugin,
            'collectorQueryString' => $this->collectorQueryString,
            'discountPromotion' => $this->discountPromotion,
            'moneyValueCollection' => $this->moneyValueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'collector_strategy_type' => $this->collectorStrategyType,
            'amount' => $this->amount,
            'calculator_plugin' => $this->calculatorPlugin,
            'collector_query_string' => $this->collectorQueryString,
            'discount_promotion' => $this->discountPromotion,
            'money_value_collection' => $this->moneyValueCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'collector_strategy_type' => $this->collectorStrategyType instanceof AbstractTransfer ? $this->collectorStrategyType->toArray(true, false) : $this->collectorStrategyType,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'calculator_plugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, false) : $this->calculatorPlugin,
            'collector_query_string' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, false) : $this->collectorQueryString,
            'discount_promotion' => $this->discountPromotion instanceof AbstractTransfer ? $this->discountPromotion->toArray(true, false) : $this->discountPromotion,
            'money_value_collection' => $this->moneyValueCollection instanceof AbstractTransfer ? $this->moneyValueCollection->toArray(true, false) : $this->addValuesToCollection($this->moneyValueCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'collectorStrategyType' => $this->collectorStrategyType instanceof AbstractTransfer ? $this->collectorStrategyType->toArray(true, true) : $this->collectorStrategyType,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'calculatorPlugin' => $this->calculatorPlugin instanceof AbstractTransfer ? $this->calculatorPlugin->toArray(true, true) : $this->calculatorPlugin,
            'collectorQueryString' => $this->collectorQueryString instanceof AbstractTransfer ? $this->collectorQueryString->toArray(true, true) : $this->collectorQueryString,
            'discountPromotion' => $this->discountPromotion instanceof AbstractTransfer ? $this->discountPromotion->toArray(true, true) : $this->discountPromotion,
            'moneyValueCollection' => $this->moneyValueCollection instanceof AbstractTransfer ? $this->moneyValueCollection->toArray(true, true) : $this->addValuesToCollection($this->moneyValueCollection, true, true),
        ];
    }
}
