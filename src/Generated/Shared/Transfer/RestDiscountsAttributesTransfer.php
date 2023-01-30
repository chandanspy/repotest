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
class RestDiscountsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const DISCOUNT_TYPE = 'discountType';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const EXPIRATION_DATE_TIME = 'expirationDateTime';

    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION_ABSTRACT_SKU = 'discountPromotionAbstractSku';

    /**
     * @var string
     */
    public const DISCOUNT_PROMOTION_QUANTITY = 'discountPromotionQuantity';

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $discountType;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var bool|null
     */
    protected $isExclusive;

    /**
     * @var string|null
     */
    protected $expirationDateTime;

    /**
     * @var string|null
     */
    protected $discountPromotionAbstractSku;

    /**
     * @var int|null
     */
    protected $discountPromotionQuantity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'amount' => 'amount',
        'Amount' => 'amount',
        'code' => 'code',
        'Code' => 'code',
        'discount_type' => 'discountType',
        'discountType' => 'discountType',
        'DiscountType' => 'discountType',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'expiration_date_time' => 'expirationDateTime',
        'expirationDateTime' => 'expirationDateTime',
        'ExpirationDateTime' => 'expirationDateTime',
        'discount_promotion_abstract_sku' => 'discountPromotionAbstractSku',
        'discountPromotionAbstractSku' => 'discountPromotionAbstractSku',
        'DiscountPromotionAbstractSku' => 'discountPromotionAbstractSku',
        'discount_promotion_quantity' => 'discountPromotionQuantity',
        'discountPromotionQuantity' => 'discountPromotionQuantity',
        'DiscountPromotionQuantity' => 'discountPromotionQuantity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AMOUNT => [
            'type' => 'int',
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
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISPLAY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPIRATION_DATE_TIME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expiration_date_time',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_PROMOTION_ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion_abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT_PROMOTION_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'discount_promotion_quantity',
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
     * @module CartCodesRestApi
     *
     * @param int|null $amount
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
     * @module CartCodesRestApi
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param int|null $amount
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
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module CartCodesRestApi
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
     * @module CartCodesRestApi
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $discountType
     *
     * @return $this
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        $this->modifiedProperties[self::DISCOUNT_TYPE] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $discountType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountTypeOrFail($discountType)
    {
        if ($discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->setDiscountType($discountType);
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountTypeOrFail()
    {
        if ($this->discountType === null) {
            $this->throwNullValueException(static::DISCOUNT_TYPE);
        }

        return $this->discountType;
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountType()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_TYPE);

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        $this->modifiedProperties[self::DISPLAY_NAME] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $displayName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayNameOrFail($displayName)
    {
        if ($displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->setDisplayName($displayName);
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayNameOrFail()
    {
        if ($this->displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->displayName;
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayName()
    {
        $this->assertPropertyIsSet(self::DISPLAY_NAME);

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param bool|null $isExclusive
     *
     * @return $this
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        $this->modifiedProperties[self::IS_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @return bool|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param bool|null $isExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExclusiveOrFail($isExclusive)
    {
        if ($isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->setIsExclusive($isExclusive);
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExclusive()
    {
        $this->assertPropertyIsSet(self::IS_EXCLUSIVE);

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $expirationDateTime
     *
     * @return $this
     */
    public function setExpirationDateTime($expirationDateTime)
    {
        $this->expirationDateTime = $expirationDateTime;
        $this->modifiedProperties[self::EXPIRATION_DATE_TIME] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi
     *
     * @return string|null
     */
    public function getExpirationDateTime()
    {
        return $this->expirationDateTime;
    }

    /**
     * @module CartCodesRestApi
     *
     * @param string|null $expirationDateTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpirationDateTimeOrFail($expirationDateTime)
    {
        if ($expirationDateTime === null) {
            $this->throwNullValueException(static::EXPIRATION_DATE_TIME);
        }

        return $this->setExpirationDateTime($expirationDateTime);
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpirationDateTimeOrFail()
    {
        if ($this->expirationDateTime === null) {
            $this->throwNullValueException(static::EXPIRATION_DATE_TIME);
        }

        return $this->expirationDateTime;
    }

    /**
     * @module CartCodesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpirationDateTime()
    {
        $this->assertPropertyIsSet(self::EXPIRATION_DATE_TIME);

        return $this;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @param string|null $discountPromotionAbstractSku
     *
     * @return $this
     */
    public function setDiscountPromotionAbstractSku($discountPromotionAbstractSku)
    {
        $this->discountPromotionAbstractSku = $discountPromotionAbstractSku;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION_ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @return string|null
     */
    public function getDiscountPromotionAbstractSku()
    {
        return $this->discountPromotionAbstractSku;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @param string|null $discountPromotionAbstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountPromotionAbstractSkuOrFail($discountPromotionAbstractSku)
    {
        if ($discountPromotionAbstractSku === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_ABSTRACT_SKU);
        }

        return $this->setDiscountPromotionAbstractSku($discountPromotionAbstractSku);
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDiscountPromotionAbstractSkuOrFail()
    {
        if ($this->discountPromotionAbstractSku === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_ABSTRACT_SKU);
        }

        return $this->discountPromotionAbstractSku;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotionAbstractSku()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION_ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @param int|null $discountPromotionQuantity
     *
     * @return $this
     */
    public function setDiscountPromotionQuantity($discountPromotionQuantity)
    {
        $this->discountPromotionQuantity = $discountPromotionQuantity;
        $this->modifiedProperties[self::DISCOUNT_PROMOTION_QUANTITY] = true;

        return $this;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @return int|null
     */
    public function getDiscountPromotionQuantity()
    {
        return $this->discountPromotionQuantity;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @param int|null $discountPromotionQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountPromotionQuantityOrFail($discountPromotionQuantity)
    {
        if ($discountPromotionQuantity === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_QUANTITY);
        }

        return $this->setDiscountPromotionQuantity($discountPromotionQuantity);
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDiscountPromotionQuantityOrFail()
    {
        if ($this->discountPromotionQuantity === null) {
            $this->throwNullValueException(static::DISCOUNT_PROMOTION_QUANTITY);
        }

        return $this->discountPromotionQuantity;
    }

    /**
     * @module CartCodesRestApi|DiscountPromotionsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountPromotionQuantity()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_PROMOTION_QUANTITY);

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
                case 'amount':
                case 'code':
                case 'discountType':
                case 'displayName':
                case 'isExclusive':
                case 'expirationDateTime':
                case 'discountPromotionAbstractSku':
                case 'discountPromotionQuantity':
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
                case 'amount':
                case 'code':
                case 'discountType':
                case 'displayName':
                case 'isExclusive':
                case 'expirationDateTime':
                case 'discountPromotionAbstractSku':
                case 'discountPromotionQuantity':
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
                case 'amount':
                case 'code':
                case 'discountType':
                case 'displayName':
                case 'isExclusive':
                case 'expirationDateTime':
                case 'discountPromotionAbstractSku':
                case 'discountPromotionQuantity':
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
            'amount' => $this->amount,
            'code' => $this->code,
            'discountType' => $this->discountType,
            'displayName' => $this->displayName,
            'isExclusive' => $this->isExclusive,
            'expirationDateTime' => $this->expirationDateTime,
            'discountPromotionAbstractSku' => $this->discountPromotionAbstractSku,
            'discountPromotionQuantity' => $this->discountPromotionQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'amount' => $this->amount,
            'code' => $this->code,
            'discount_type' => $this->discountType,
            'display_name' => $this->displayName,
            'is_exclusive' => $this->isExclusive,
            'expiration_date_time' => $this->expirationDateTime,
            'discount_promotion_abstract_sku' => $this->discountPromotionAbstractSku,
            'discount_promotion_quantity' => $this->discountPromotionQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'discount_type' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, false) : $this->discountType,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'expiration_date_time' => $this->expirationDateTime instanceof AbstractTransfer ? $this->expirationDateTime->toArray(true, false) : $this->expirationDateTime,
            'discount_promotion_abstract_sku' => $this->discountPromotionAbstractSku instanceof AbstractTransfer ? $this->discountPromotionAbstractSku->toArray(true, false) : $this->discountPromotionAbstractSku,
            'discount_promotion_quantity' => $this->discountPromotionQuantity instanceof AbstractTransfer ? $this->discountPromotionQuantity->toArray(true, false) : $this->discountPromotionQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'discountType' => $this->discountType instanceof AbstractTransfer ? $this->discountType->toArray(true, true) : $this->discountType,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'expirationDateTime' => $this->expirationDateTime instanceof AbstractTransfer ? $this->expirationDateTime->toArray(true, true) : $this->expirationDateTime,
            'discountPromotionAbstractSku' => $this->discountPromotionAbstractSku instanceof AbstractTransfer ? $this->discountPromotionAbstractSku->toArray(true, true) : $this->discountPromotionAbstractSku,
            'discountPromotionQuantity' => $this->discountPromotionQuantity instanceof AbstractTransfer ? $this->discountPromotionQuantity->toArray(true, true) : $this->discountPromotionQuantity,
        ];
    }
}
