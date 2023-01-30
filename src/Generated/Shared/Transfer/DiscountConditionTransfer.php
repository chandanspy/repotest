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
class DiscountConditionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DECISION_RULE_QUERY_STRING = 'decisionRuleQueryString';

    /**
     * @var string
     */
    public const MINIMUM_ITEM_AMOUNT = 'minimumItemAmount';

    /**
     * @var string|null
     */
    protected $decisionRuleQueryString;

    /**
     * @var int|null
     */
    protected $minimumItemAmount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'decision_rule_query_string' => 'decisionRuleQueryString',
        'decisionRuleQueryString' => 'decisionRuleQueryString',
        'DecisionRuleQueryString' => 'decisionRuleQueryString',
        'minimum_item_amount' => 'minimumItemAmount',
        'minimumItemAmount' => 'minimumItemAmount',
        'MinimumItemAmount' => 'minimumItemAmount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DECISION_RULE_QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'decision_rule_query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MINIMUM_ITEM_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'minimum_item_amount',
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
     * @module Discount
     *
     * @param string|null $decisionRuleQueryString
     *
     * @return $this
     */
    public function setDecisionRuleQueryString($decisionRuleQueryString)
    {
        $this->decisionRuleQueryString = $decisionRuleQueryString;
        $this->modifiedProperties[self::DECISION_RULE_QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDecisionRuleQueryString()
    {
        return $this->decisionRuleQueryString;
    }

    /**
     * @module Discount
     *
     * @param string|null $decisionRuleQueryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDecisionRuleQueryStringOrFail($decisionRuleQueryString)
    {
        if ($decisionRuleQueryString === null) {
            $this->throwNullValueException(static::DECISION_RULE_QUERY_STRING);
        }

        return $this->setDecisionRuleQueryString($decisionRuleQueryString);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDecisionRuleQueryStringOrFail()
    {
        if ($this->decisionRuleQueryString === null) {
            $this->throwNullValueException(static::DECISION_RULE_QUERY_STRING);
        }

        return $this->decisionRuleQueryString;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDecisionRuleQueryString()
    {
        $this->assertPropertyIsSet(self::DECISION_RULE_QUERY_STRING);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $minimumItemAmount
     *
     * @return $this
     */
    public function setMinimumItemAmount($minimumItemAmount)
    {
        $this->minimumItemAmount = $minimumItemAmount;
        $this->modifiedProperties[self::MINIMUM_ITEM_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getMinimumItemAmount()
    {
        return $this->minimumItemAmount;
    }

    /**
     * @module Discount
     *
     * @param int|null $minimumItemAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMinimumItemAmountOrFail($minimumItemAmount)
    {
        if ($minimumItemAmount === null) {
            $this->throwNullValueException(static::MINIMUM_ITEM_AMOUNT);
        }

        return $this->setMinimumItemAmount($minimumItemAmount);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMinimumItemAmountOrFail()
    {
        if ($this->minimumItemAmount === null) {
            $this->throwNullValueException(static::MINIMUM_ITEM_AMOUNT);
        }

        return $this->minimumItemAmount;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMinimumItemAmount()
    {
        $this->assertPropertyIsSet(self::MINIMUM_ITEM_AMOUNT);

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
                case 'decisionRuleQueryString':
                case 'minimumItemAmount':
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
                case 'decisionRuleQueryString':
                case 'minimumItemAmount':
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
                case 'decisionRuleQueryString':
                case 'minimumItemAmount':
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
            'decisionRuleQueryString' => $this->decisionRuleQueryString,
            'minimumItemAmount' => $this->minimumItemAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'decision_rule_query_string' => $this->decisionRuleQueryString,
            'minimum_item_amount' => $this->minimumItemAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'decision_rule_query_string' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, false) : $this->decisionRuleQueryString,
            'minimum_item_amount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, false) : $this->minimumItemAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'decisionRuleQueryString' => $this->decisionRuleQueryString instanceof AbstractTransfer ? $this->decisionRuleQueryString->toArray(true, true) : $this->decisionRuleQueryString,
            'minimumItemAmount' => $this->minimumItemAmount instanceof AbstractTransfer ? $this->minimumItemAmount->toArray(true, true) : $this->minimumItemAmount,
        ];
    }
}
