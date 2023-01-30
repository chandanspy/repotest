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
class PromotionItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT_PROMOTION = 'idDiscountPromotion';

    /**
     * @var string
     */
    public const DISCOUNT = 'discount';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const MAX_QUANTITY = 'maxQuantity';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idDiscountPromotion;

    /**
     * @var \Generated\Shared\Transfer\DiscountTransfer|null
     */
    protected $discount;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $maxQuantity;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

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
        'discount' => 'discount',
        'Discount' => 'discount',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'sku' => 'sku',
        'Sku' => 'sku',
        'max_quantity' => 'maxQuantity',
        'maxQuantity' => 'maxQuantity',
        'MaxQuantity' => 'maxQuantity',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
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
        self::DISCOUNT => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'discount',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::MAX_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'max_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
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
     * @module CartPage|DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi|PersistentCart
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
     * @module CartPage|DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi|PersistentCart
     *
     * @return int|null
     */
    public function getIdDiscountPromotion()
    {
        return $this->idDiscountPromotion;
    }

    /**
     * @module CartPage|DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi|PersistentCart
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
     * @module CartPage|DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi|PersistentCart
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
     * @module CartPage|DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi|PersistentCart
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer|null $discount
     *
     * @return $this
     */
    public function setDiscount(DiscountTransfer $discount = null)
    {
        $this->discount = $discount;
        $this->modifiedProperties[self::DISCOUNT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return \Generated\Shared\Transfer\DiscountTransfer|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountOrFail(DiscountTransfer $discount)
    {
        return $this->setDiscount($discount);
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DiscountTransfer
     */
    public function getDiscountOrFail()
    {
        if ($this->discount === null) {
            $this->throwNullValueException(static::DISCOUNT);
        }

        return $this->discount;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscount()
    {
        $this->assertPropertyIsSet(self::DISCOUNT);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
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
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
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
     * @module DiscountPromotionWidget|DiscountPromotion
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
     * @module DiscountPromotionWidget|DiscountPromotion
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
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @param int|null $maxQuantity
     *
     * @return $this
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;
        $this->modifiedProperties[self::MAX_QUANTITY] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @return int|null
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @param int|null $maxQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxQuantityOrFail($maxQuantity)
    {
        if ($maxQuantity === null) {
            $this->throwNullValueException(static::MAX_QUANTITY);
        }

        return $this->setMaxQuantity($maxQuantity);
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaxQuantityOrFail()
    {
        if ($this->maxQuantity === null) {
            $this->throwNullValueException(static::MAX_QUANTITY);
        }

        return $this->maxQuantity;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion|DiscountPromotionsRestApi|ProductsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMaxQuantity()
    {
        $this->assertPropertyIsSet(self::MAX_QUANTITY);

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module DiscountPromotionWidget|DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

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
                case 'sku':
                case 'maxQuantity':
                case 'idProductAbstract':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'discount':
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
                case 'idDiscountPromotion':
                case 'abstractSku':
                case 'sku':
                case 'maxQuantity':
                case 'idProductAbstract':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'discount':
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
                case 'idDiscountPromotion':
                case 'abstractSku':
                case 'sku':
                case 'maxQuantity':
                case 'idProductAbstract':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'discount':
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
            'idDiscountPromotion' => $this->idDiscountPromotion,
            'abstractSku' => $this->abstractSku,
            'sku' => $this->sku,
            'maxQuantity' => $this->maxQuantity,
            'idProductAbstract' => $this->idProductAbstract,
            'uuid' => $this->uuid,
            'discount' => $this->discount,
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
            'sku' => $this->sku,
            'max_quantity' => $this->maxQuantity,
            'id_product_abstract' => $this->idProductAbstract,
            'uuid' => $this->uuid,
            'discount' => $this->discount,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'max_quantity' => $this->maxQuantity instanceof AbstractTransfer ? $this->maxQuantity->toArray(true, false) : $this->maxQuantity,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, false) : $this->discount,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'maxQuantity' => $this->maxQuantity instanceof AbstractTransfer ? $this->maxQuantity->toArray(true, true) : $this->maxQuantity,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, true) : $this->discount,
        ];
    }
}
