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
class DiscountPromotionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT_PROMOTION = 'idDiscountPromotion';

    /**
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const ABSTRACT_SKUS = 'abstractSkus';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const FK_DISCOUNT = 'fkDiscount';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idDiscountPromotion;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var string[]
     */
    protected $abstractSkus = [];

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $fkDiscount;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount_promotion' => 'idDiscountPromotion',
        'idDiscountPromotion' => 'idDiscountPromotion',
        'IdDiscountPromotion' => 'idDiscountPromotion',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'abstract_skus' => 'abstractSkus',
        'abstractSkus' => 'abstractSkus',
        'AbstractSkus' => 'abstractSkus',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'fk_discount' => 'fkDiscount',
        'fkDiscount' => 'fkDiscount',
        'FkDiscount' => 'fkDiscount',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT_PROMOTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_discount_promotion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKUS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'abstract_skus',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_DISCOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_discount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $idDiscountPromotion
     *
     * @return $this
     */
    public function setIdDiscountPromotion($idDiscountPromotion)
    {
        $this->idDiscountPromotion = $idDiscountPromotion;
        $this->modifiedProperties[self::ID_DISCOUNT_PROMOTION] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return int|null
     */
    public function getIdDiscountPromotion()
    {
        return $this->idDiscountPromotion;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $idDiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountPromotionOrFail($idDiscountPromotion)
    {
        if ($idDiscountPromotion === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_PROMOTION);
        }

        return $this->setIdDiscountPromotion($idDiscountPromotion);
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDiscountPromotionOrFail()
    {
        if ($this->idDiscountPromotion === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_PROMOTION);
        }

        return $this->idDiscountPromotion;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscountPromotion()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT_PROMOTION);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use `abstractSkus` (plural) instead and provide a comma separated list.
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string[]|null $abstractSkus
     *
     * @return $this
     */
    public function setAbstractSkus(array $abstractSkus = null)
    {
        if ($abstractSkus === null) {
            $abstractSkus = [];
        }

        $this->abstractSkus = $abstractSkus;
        $this->modifiedProperties[self::ABSTRACT_SKUS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return string[]
     */
    public function getAbstractSkus()
    {
        return $this->abstractSkus;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string $abstractSku
     *
     * @return $this
     */
    public function addAbstractSku($abstractSku)
    {
        $this->abstractSkus[] = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKUS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSkus()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKUS);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $fkDiscount
     *
     * @return $this
     */
    public function setFkDiscount($fkDiscount)
    {
        $this->fkDiscount = $fkDiscount;
        $this->modifiedProperties[self::FK_DISCOUNT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return int|null
     */
    public function getFkDiscount()
    {
        return $this->fkDiscount;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param int|null $fkDiscount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkDiscountOrFail($fkDiscount)
    {
        if ($fkDiscount === null) {
            $this->throwNullValueException(static::FK_DISCOUNT);
        }

        return $this->setFkDiscount($fkDiscount);
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkDiscountOrFail()
    {
        if ($this->fkDiscount === null) {
            $this->throwNullValueException(static::FK_DISCOUNT);
        }

        return $this->fkDiscount;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkDiscount()
    {
        $this->assertPropertyIsSet(self::FK_DISCOUNT);

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

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
                case 'idDiscountPromotion':
                case 'abstractSku':
                case 'abstractSkus':
                case 'quantity':
                case 'fkDiscount':
                case 'uuid':
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
                case 'idDiscountPromotion':
                case 'abstractSku':
                case 'abstractSkus':
                case 'quantity':
                case 'fkDiscount':
                case 'uuid':
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
                case 'idDiscountPromotion':
                case 'abstractSku':
                case 'abstractSkus':
                case 'quantity':
                case 'fkDiscount':
                case 'uuid':
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
            'idDiscountPromotion' => $this->idDiscountPromotion,
            'abstractSku' => $this->abstractSku,
            'abstractSkus' => $this->abstractSkus,
            'quantity' => $this->quantity,
            'fkDiscount' => $this->fkDiscount,
            'uuid' => $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_promotion' => $this->idDiscountPromotion,
            'abstract_sku' => $this->abstractSku,
            'abstract_skus' => $this->abstractSkus,
            'quantity' => $this->quantity,
            'fk_discount' => $this->fkDiscount,
            'uuid' => $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_promotion' => $this->idDiscountPromotion instanceof AbstractTransfer ? $this->idDiscountPromotion->toArray(true, false) : $this->idDiscountPromotion,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'abstract_skus' => $this->abstractSkus instanceof AbstractTransfer ? $this->abstractSkus->toArray(true, false) : $this->abstractSkus,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'fk_discount' => $this->fkDiscount instanceof AbstractTransfer ? $this->fkDiscount->toArray(true, false) : $this->fkDiscount,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscountPromotion' => $this->idDiscountPromotion instanceof AbstractTransfer ? $this->idDiscountPromotion->toArray(true, true) : $this->idDiscountPromotion,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'abstractSkus' => $this->abstractSkus instanceof AbstractTransfer ? $this->abstractSkus->toArray(true, true) : $this->abstractSkus,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'fkDiscount' => $this->fkDiscount instanceof AbstractTransfer ? $this->fkDiscount->toArray(true, true) : $this->fkDiscount,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
        ];
    }
}
