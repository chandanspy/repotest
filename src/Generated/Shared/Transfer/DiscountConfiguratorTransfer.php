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
class DiscountConfiguratorTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISCOUNT_GENERAL = 'discountGeneral';

    /**
     * @var string
     */
    public const DISCOUNT_CALCULATOR = 'discountCalculator';

    /**
     * @var string
     */
    public const DISCOUNT_CONDITION = 'discountCondition';

    /**
     * @var string
     */
    public const DISCOUNT_VOUCHER = 'discountVoucher';

    /**
     * @var \Generated\Shared\Transfer\DiscountGeneralTransfer|null
     */
    protected $discountGeneral;

    /**
     * @var \Generated\Shared\Transfer\DiscountCalculatorTransfer|null
     */
    protected $discountCalculator;

    /**
     * @var \Generated\Shared\Transfer\DiscountConditionTransfer|null
     */
    protected $discountCondition;

    /**
     * @var \Generated\Shared\Transfer\DiscountVoucherTransfer|null
     */
    protected $discountVoucher;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'discount_general' => 'discountGeneral',
        'discountGeneral' => 'discountGeneral',
        'DiscountGeneral' => 'discountGeneral',
        'discount_calculator' => 'discountCalculator',
        'discountCalculator' => 'discountCalculator',
        'DiscountCalculator' => 'discountCalculator',
        'discount_condition' => 'discountCondition',
        'discountCondition' => 'discountCondition',
        'DiscountCondition' => 'discountCondition',
        'discount_voucher' => 'discountVoucher',
        'discountVoucher' => 'discountVoucher',
        'DiscountVoucher' => 'discountVoucher',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISCOUNT_GENERAL => [
            'type' => 'Generated\Shared\Transfer\DiscountGeneralTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_general',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_CALCULATOR => [
            'type' => 'Generated\Shared\Transfer\DiscountCalculatorTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_calculator',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_CONDITION => [
            'type' => 'Generated\Shared\Transfer\DiscountConditionTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_condition',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_VOUCHER => [
            'type' => 'Generated\Shared\Transfer\DiscountVoucherTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount_voucher',
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
     * @module DiscountPromotion|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountGeneralTransfer|null $discountGeneral
     *
     * @return $this
     */
    public function setDiscountGeneral(DiscountGeneralTransfer $discountGeneral = null)
    {
        $this->discountGeneral = $discountGeneral;
        $this->modifiedProperties[self::DISCOUNT_GENERAL] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @return \Generated\Shared\Transfer\DiscountGeneralTransfer|null
     */
    public function getDiscountGeneral()
    {
        return $this->discountGeneral;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountGeneralTransfer $discountGeneral
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountGeneralOrFail(DiscountGeneralTransfer $discountGeneral)
    {
        return $this->setDiscountGeneral($discountGeneral);
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountGeneralTransfer
     */
    public function getDiscountGeneralOrFail()
    {
        if ($this->discountGeneral === null) {
            $this->throwNullValueException(static::DISCOUNT_GENERAL);
        }

        return $this->discountGeneral;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountGeneral()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_GENERAL);

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountCalculatorTransfer|null $discountCalculator
     *
     * @return $this
     */
    public function setDiscountCalculator(DiscountCalculatorTransfer $discountCalculator = null)
    {
        $this->discountCalculator = $discountCalculator;
        $this->modifiedProperties[self::DISCOUNT_CALCULATOR] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @return \Generated\Shared\Transfer\DiscountCalculatorTransfer|null
     */
    public function getDiscountCalculator()
    {
        return $this->discountCalculator;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @param \Generated\Shared\Transfer\DiscountCalculatorTransfer $discountCalculator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountCalculatorOrFail(DiscountCalculatorTransfer $discountCalculator)
    {
        return $this->setDiscountCalculator($discountCalculator);
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountCalculatorTransfer
     */
    public function getDiscountCalculatorOrFail()
    {
        if ($this->discountCalculator === null) {
            $this->throwNullValueException(static::DISCOUNT_CALCULATOR);
        }

        return $this->discountCalculator;
    }

    /**
     * @module DiscountPromotion|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountCalculator()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_CALCULATOR);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\DiscountConditionTransfer|null $discountCondition
     *
     * @return $this
     */
    public function setDiscountCondition(DiscountConditionTransfer $discountCondition = null)
    {
        $this->discountCondition = $discountCondition;
        $this->modifiedProperties[self::DISCOUNT_CONDITION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \Generated\Shared\Transfer\DiscountConditionTransfer|null
     */
    public function getDiscountCondition()
    {
        return $this->discountCondition;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\DiscountConditionTransfer $discountCondition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountConditionOrFail(DiscountConditionTransfer $discountCondition)
    {
        return $this->setDiscountCondition($discountCondition);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountConditionTransfer
     */
    public function getDiscountConditionOrFail()
    {
        if ($this->discountCondition === null) {
            $this->throwNullValueException(static::DISCOUNT_CONDITION);
        }

        return $this->discountCondition;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountCondition()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_CONDITION);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\DiscountVoucherTransfer|null $discountVoucher
     *
     * @return $this
     */
    public function setDiscountVoucher(DiscountVoucherTransfer $discountVoucher = null)
    {
        $this->discountVoucher = $discountVoucher;
        $this->modifiedProperties[self::DISCOUNT_VOUCHER] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return \Generated\Shared\Transfer\DiscountVoucherTransfer|null
     */
    public function getDiscountVoucher()
    {
        return $this->discountVoucher;
    }

    /**
     * @module Discount
     *
     * @param \Generated\Shared\Transfer\DiscountVoucherTransfer $discountVoucher
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountVoucherOrFail(DiscountVoucherTransfer $discountVoucher)
    {
        return $this->setDiscountVoucher($discountVoucher);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountVoucherTransfer
     */
    public function getDiscountVoucherOrFail()
    {
        if ($this->discountVoucher === null) {
            $this->throwNullValueException(static::DISCOUNT_VOUCHER);
        }

        return $this->discountVoucher;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountVoucher()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_VOUCHER);

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
                case 'discountGeneral':
                case 'discountCalculator':
                case 'discountCondition':
                case 'discountVoucher':
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
                case 'discountGeneral':
                case 'discountCalculator':
                case 'discountCondition':
                case 'discountVoucher':
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
                case 'discountGeneral':
                case 'discountCalculator':
                case 'discountCondition':
                case 'discountVoucher':
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
            'discountGeneral' => $this->discountGeneral,
            'discountCalculator' => $this->discountCalculator,
            'discountCondition' => $this->discountCondition,
            'discountVoucher' => $this->discountVoucher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'discount_general' => $this->discountGeneral,
            'discount_calculator' => $this->discountCalculator,
            'discount_condition' => $this->discountCondition,
            'discount_voucher' => $this->discountVoucher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'discount_general' => $this->discountGeneral instanceof AbstractTransfer ? $this->discountGeneral->toArray(true, false) : $this->discountGeneral,
            'discount_calculator' => $this->discountCalculator instanceof AbstractTransfer ? $this->discountCalculator->toArray(true, false) : $this->discountCalculator,
            'discount_condition' => $this->discountCondition instanceof AbstractTransfer ? $this->discountCondition->toArray(true, false) : $this->discountCondition,
            'discount_voucher' => $this->discountVoucher instanceof AbstractTransfer ? $this->discountVoucher->toArray(true, false) : $this->discountVoucher,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'discountGeneral' => $this->discountGeneral instanceof AbstractTransfer ? $this->discountGeneral->toArray(true, true) : $this->discountGeneral,
            'discountCalculator' => $this->discountCalculator instanceof AbstractTransfer ? $this->discountCalculator->toArray(true, true) : $this->discountCalculator,
            'discountCondition' => $this->discountCondition instanceof AbstractTransfer ? $this->discountCondition->toArray(true, true) : $this->discountCondition,
            'discountVoucher' => $this->discountVoucher instanceof AbstractTransfer ? $this->discountVoucher->toArray(true, true) : $this->discountVoucher,
        ];
    }
}
