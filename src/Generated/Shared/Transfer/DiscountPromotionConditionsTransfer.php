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
class DiscountPromotionConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION_IDS = 'discountPromotionIds';

    /**
     * @var string
     */
    public const DISCOUNT_IDS = 'discountIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var int[]
     */
    protected $discountPromotionIds = [];

    /**
     * @var int[]
     */
    protected $discountIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'discount_promotion_ids' => 'discountPromotionIds',
        'discountPromotionIds' => 'discountPromotionIds',
        'DiscountPromotionIds' => 'discountPromotionIds',
        'discount_ids' => 'discountIds',
        'discountIds' => 'discountIds',
        'DiscountIds' => 'discountIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISCOUNT_PROMOTION_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'discount_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
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
     * @module DiscountPromotion
     *
     * @param int[]|null $discountPromotionIds
     *
     * @return $this
     */
    public function setDiscountPromotionIds(array $discountPromotionIds = null)
    {
        if ($discountPromotionIds === null) {
            $discountPromotionIds = [];
        }

        $this->discountPromotionIds = $discountPromotionIds;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION_IDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return int[]
     */
    public function getDiscountPromotionIds()
    {
        return $this->discountPromotionIds;
    }

    /**
     * @module DiscountPromotion
     *
     * @param int $idDiscountPromotion
     *
     * @return $this
     */
    public function addIdDiscountPromotion($idDiscountPromotion)
    {
        $this->discountPromotionIds[] = $idDiscountPromotion;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION_IDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotionIds()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION_IDS);

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @param int[]|null $discountIds
     *
     * @return $this
     */
    public function setDiscountIds(array $discountIds = null)
    {
        if ($discountIds === null) {
            $discountIds = [];
        }

        $this->discountIds = $discountIds;
        $this->modifiedProperties[self::DISCOUNT_IDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return int[]
     */
    public function getDiscountIds()
    {
        return $this->discountIds;
    }

    /**
     * @module DiscountPromotion
     *
     * @param int $idDiscount
     *
     * @return $this
     */
    public function addIdDiscount($idDiscount)
    {
        $this->discountIds[] = $idDiscount;
        $this->modifiedProperties[self::DISCOUNT_IDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountIds()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_IDS);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = $uuids;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return string[]
     */
    public function getUuids()
    {
        return $this->uuids;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid($uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

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
                case 'discountPromotionIds':
                case 'discountIds':
                case 'uuids':
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
                case 'discountPromotionIds':
                case 'discountIds':
                case 'uuids':
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
                case 'discountPromotionIds':
                case 'discountIds':
                case 'uuids':
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
            'discountPromotionIds' => $this->discountPromotionIds,
            'discountIds' => $this->discountIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'discount_promotion_ids' => $this->discountPromotionIds,
            'discount_ids' => $this->discountIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'discount_promotion_ids' => $this->discountPromotionIds instanceof AbstractTransfer ? $this->discountPromotionIds->toArray(true, false) : $this->discountPromotionIds,
            'discount_ids' => $this->discountIds instanceof AbstractTransfer ? $this->discountIds->toArray(true, false) : $this->discountIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'discountPromotionIds' => $this->discountPromotionIds instanceof AbstractTransfer ? $this->discountPromotionIds->toArray(true, true) : $this->discountPromotionIds,
            'discountIds' => $this->discountIds instanceof AbstractTransfer ? $this->discountIds->toArray(true, true) : $this->discountIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
        ];
    }
}
