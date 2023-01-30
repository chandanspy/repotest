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
class ReturnTotalsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REFUND_TOTAL = 'refundTotal';

    /**
     * @var string
     */
    public const REMUNERATION_TOTAL = 'remunerationTotal';

    /**
     * @var int|null
     */
    protected $refundTotal;

    /**
     * @var int|null
     */
    protected $remunerationTotal;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'refund_total' => 'refundTotal',
        'refundTotal' => 'refundTotal',
        'RefundTotal' => 'refundTotal',
        'remuneration_total' => 'remunerationTotal',
        'remunerationTotal' => 'remunerationTotal',
        'RemunerationTotal' => 'remunerationTotal',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REFUND_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refund_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REMUNERATION_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'remuneration_total',
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
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $refundTotal
     *
     * @return $this
     */
    public function setRefundTotal($refundTotal)
    {
        $this->refundTotal = $refundTotal;
        $this->modifiedProperties[self::REFUND_TOTAL] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getRefundTotal()
    {
        return $this->refundTotal;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $refundTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundTotalOrFail($refundTotal)
    {
        if ($refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->setRefundTotal($refundTotal);
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundTotalOrFail()
    {
        if ($this->refundTotal === null) {
            $this->throwNullValueException(static::REFUND_TOTAL);
        }

        return $this->refundTotal;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundTotal()
    {
        $this->assertPropertyIsSet(self::REFUND_TOTAL);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationTotal
     *
     * @return $this
     */
    public function setRemunerationTotal($remunerationTotal)
    {
        $this->remunerationTotal = $remunerationTotal;
        $this->modifiedProperties[self::REMUNERATION_TOTAL] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @return int|null
     */
    public function getRemunerationTotal()
    {
        return $this->remunerationTotal;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param int|null $remunerationTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRemunerationTotalOrFail($remunerationTotal)
    {
        if ($remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->setRemunerationTotal($remunerationTotal);
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRemunerationTotalOrFail()
    {
        if ($this->remunerationTotal === null) {
            $this->throwNullValueException(static::REMUNERATION_TOTAL);
        }

        return $this->remunerationTotal;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRemunerationTotal()
    {
        $this->assertPropertyIsSet(self::REMUNERATION_TOTAL);

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
                case 'refundTotal':
                case 'remunerationTotal':
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
                case 'refundTotal':
                case 'remunerationTotal':
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
                case 'refundTotal':
                case 'remunerationTotal':
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
            'refundTotal' => $this->refundTotal,
            'remunerationTotal' => $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'refund_total' => $this->refundTotal,
            'remuneration_total' => $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'refund_total' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, false) : $this->refundTotal,
            'remuneration_total' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, false) : $this->remunerationTotal,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'refundTotal' => $this->refundTotal instanceof AbstractTransfer ? $this->refundTotal->toArray(true, true) : $this->refundTotal,
            'remunerationTotal' => $this->remunerationTotal instanceof AbstractTransfer ? $this->remunerationTotal->toArray(true, true) : $this->remunerationTotal,
        ];
    }
}
