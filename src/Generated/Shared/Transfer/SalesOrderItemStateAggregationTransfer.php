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
class SalesOrderItemStateAggregationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const PROCESS_NAME = 'processName';

    /**
     * @var string
     */
    public const STATE_NAME = 'stateName';

    /**
     * @var string
     */
    public const SUM_AMOUNT = 'sumAmount';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $processName;

    /**
     * @var string|null
     */
    protected $stateName;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $sumAmount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'process_name' => 'processName',
        'processName' => 'processName',
        'ProcessName' => 'processName',
        'state_name' => 'stateName',
        'stateName' => 'stateName',
        'StateName' => 'stateName',
        'sum_amount' => 'sumAmount',
        'sumAmount' => 'sumAmount',
        'SumAmount' => 'sumAmount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROCESS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'process_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'state_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'sum_amount',
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
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $processName
     *
     * @return $this
     */
    public function setProcessName($processName)
    {
        $this->processName = $processName;
        $this->modifiedProperties[self::PROCESS_NAME] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getProcessName()
    {
        return $this->processName;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $processName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessNameOrFail($processName)
    {
        if ($processName === null) {
            $this->throwNullValueException(static::PROCESS_NAME);
        }

        return $this->setProcessName($processName);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProcessNameOrFail()
    {
        if ($this->processName === null) {
            $this->throwNullValueException(static::PROCESS_NAME);
        }

        return $this->processName;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProcessName()
    {
        $this->assertPropertyIsSet(self::PROCESS_NAME);

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $stateName
     *
     * @return $this
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
        $this->modifiedProperties[self::STATE_NAME] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|null $stateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateNameOrFail($stateName)
    {
        if ($stateName === null) {
            $this->throwNullValueException(static::STATE_NAME);
        }

        return $this->setStateName($stateName);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStateNameOrFail()
    {
        if ($this->stateName === null) {
            $this->throwNullValueException(static::STATE_NAME);
        }

        return $this->stateName;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStateName()
    {
        $this->assertPropertyIsSet(self::STATE_NAME);

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $sumAmount
     *
     * @return $this
     */
    public function setSumAmount($sumAmount = null)
    {
        if ($sumAmount !== null && !$sumAmount instanceof Decimal) {
            $sumAmount = new Decimal($sumAmount);
        }

        $this->sumAmount = $sumAmount;
        $this->modifiedProperties[self::SUM_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getSumAmount()
    {
        return $this->sumAmount;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $sumAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumAmountOrFail($sumAmount)
    {
        if ($sumAmount === null) {
            $this->throwNullValueException(static::SUM_AMOUNT);
        }

        return $this->setSumAmount($sumAmount);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getSumAmountOrFail()
    {
        if ($this->sumAmount === null) {
            $this->throwNullValueException(static::SUM_AMOUNT);
        }

        return $this->sumAmount;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSumAmount()
    {
        $this->assertPropertyIsSet(self::SUM_AMOUNT);

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
                case 'sku':
                case 'processName':
                case 'stateName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sumAmount':
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
                case 'sku':
                case 'processName':
                case 'stateName':
                case 'sumAmount':
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
                case 'sku':
                case 'processName':
                case 'stateName':
                case 'sumAmount':
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
            'sku' => $this->sku,
            'processName' => $this->processName,
            'stateName' => $this->stateName,
            'sumAmount' => $this->sumAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'process_name' => $this->processName,
            'state_name' => $this->stateName,
            'sum_amount' => $this->sumAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'process_name' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, false) : $this->processName,
            'state_name' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, false) : $this->stateName,
            'sum_amount' => $this->sumAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'processName' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, true) : $this->processName,
            'stateName' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, true) : $this->stateName,
            'sumAmount' => $this->sumAmount,
        ];
    }
}
