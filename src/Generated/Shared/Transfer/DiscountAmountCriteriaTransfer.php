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
class DiscountAmountCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const DISCOUNT_AMOUNT_IDS = 'discountAmountIds';

    /**
     * @var int|null
     */
    protected $idDiscount;

    /**
     * @var int[]
     */
    protected $discountAmountIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'discount_amount_ids' => 'discountAmountIds',
        'discountAmountIds' => 'discountAmountIds',
        'DiscountAmountIds' => 'discountAmountIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_AMOUNT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'discount_amount_ids',
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
     * @param int|null $idDiscount
     *
     * @return $this
     */
    public function setIdDiscount($idDiscount)
    {
        $this->idDiscount = $idDiscount;
        $this->modifiedProperties[self::ID_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getIdDiscount()
    {
        return $this->idDiscount;
    }

    /**
     * @module Discount
     *
     * @param int|null $idDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountOrFail($idDiscount)
    {
        if ($idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->setIdDiscount($idDiscount);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDiscountOrFail()
    {
        if ($this->idDiscount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT);
        }

        return $this->idDiscount;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscount()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int[]|null $discountAmountIds
     *
     * @return $this
     */
    public function setDiscountAmountIds(array $discountAmountIds = null)
    {
        if ($discountAmountIds === null) {
            $discountAmountIds = [];
        }

        $this->discountAmountIds = $discountAmountIds;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT_IDS] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int[]
     */
    public function getDiscountAmountIds()
    {
        return $this->discountAmountIds;
    }

    /**
     * @module Discount
     *
     * @param int $idDiscountAmount
     *
     * @return $this
     */
    public function addIdDiscountAmount($idDiscountAmount)
    {
        $this->discountAmountIds[] = $idDiscountAmount;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT_IDS] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountAmountIds()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_AMOUNT_IDS);

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
                case 'idDiscount':
                case 'discountAmountIds':
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
                case 'idDiscount':
                case 'discountAmountIds':
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
                case 'idDiscount':
                case 'discountAmountIds':
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
            'idDiscount' => $this->idDiscount,
            'discountAmountIds' => $this->discountAmountIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount,
            'discount_amount_ids' => $this->discountAmountIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'discount_amount_ids' => $this->discountAmountIds instanceof AbstractTransfer ? $this->discountAmountIds->toArray(true, false) : $this->discountAmountIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'discountAmountIds' => $this->discountAmountIds instanceof AbstractTransfer ? $this->discountAmountIds->toArray(true, true) : $this->discountAmountIds,
        ];
    }
}
