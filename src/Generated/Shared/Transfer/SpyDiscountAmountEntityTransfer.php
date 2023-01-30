<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyDiscountAmountEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT_AMOUNT = 'idDiscountAmount';

    /**
     * @var string
     */
    public const FK_CURRENCY = 'fkCurrency';

    /**
     * @var string
     */
    public const FK_DISCOUNT = 'fkDiscount';

    /**
     * @var string
     */
    public const GROSS_AMOUNT = 'grossAmount';

    /**
     * @var string
     */
    public const NET_AMOUNT = 'netAmount';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const DISCOUNT = 'discount';

    /**
     * @var integer|null
     */
    protected $idDiscountAmount;

    /**
     * @var integer|null
     */
    protected $fkCurrency;

    /**
     * @var integer|null
     */
    protected $fkDiscount;

    /**
     * @var integer|null
     */
    protected $grossAmount;

    /**
     * @var integer|null
     */
    protected $netAmount;

    /**
     * @var \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SpyDiscountEntityTransfer|null
     */
    protected $discount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount_amount' => 'idDiscountAmount',
        'idDiscountAmount' => 'idDiscountAmount',
        'IdDiscountAmount' => 'idDiscountAmount',
        'fk_currency' => 'fkCurrency',
        'fkCurrency' => 'fkCurrency',
        'FkCurrency' => 'fkCurrency',
        'fk_discount' => 'fkDiscount',
        'fkDiscount' => 'fkDiscount',
        'FkDiscount' => 'fkDiscount',
        'gross_amount' => 'grossAmount',
        'grossAmount' => 'grossAmount',
        'GrossAmount' => 'grossAmount',
        'net_amount' => 'netAmount',
        'netAmount' => 'netAmount',
        'NetAmount' => 'netAmount',
        'currency' => 'currency',
        'Currency' => 'currency',
        'discount' => 'discount',
        'Discount' => 'discount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_discount_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CURRENCY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_DISCOUNT => [
            'type' => 'integer',
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
        self::GROSS_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'gross_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NET_AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'net_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\SpyCurrencyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DISCOUNT => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountEntityTransfer',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Discount\Persistence\SpyDiscountAmount';


    /**
     * @module 
     *
     * @param integer|null $idDiscountAmount
     *
     * @return $this
     */
    public function setIdDiscountAmount($idDiscountAmount)
    {
        $this->idDiscountAmount = $idDiscountAmount;
        $this->modifiedProperties[self::ID_DISCOUNT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDiscountAmount()
    {
        return $this->idDiscountAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $idDiscountAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountAmountOrFail($idDiscountAmount)
    {
        if ($idDiscountAmount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_AMOUNT);
        }

        return $this->setIdDiscountAmount($idDiscountAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDiscountAmountOrFail()
    {
        if ($this->idDiscountAmount === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_AMOUNT);
        }

        return $this->idDiscountAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscountAmount()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @return $this
     */
    public function setFkCurrency($fkCurrency)
    {
        $this->fkCurrency = $fkCurrency;
        $this->modifiedProperties[self::FK_CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCurrency()
    {
        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCurrencyOrFail($fkCurrency)
    {
        if ($fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->setFkCurrency($fkCurrency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCurrencyOrFail()
    {
        if ($this->fkCurrency === null) {
            $this->throwNullValueException(static::FK_CURRENCY);
        }

        return $this->fkCurrency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCurrency()
    {
        $this->assertPropertyIsSet(self::FK_CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDiscount
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkDiscount()
    {
        return $this->fkDiscount;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDiscount
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkDiscountOrFail()
    {
        if ($this->fkDiscount === null) {
            $this->throwNullValueException(static::FK_DISCOUNT);
        }

        return $this->fkDiscount;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $grossAmount
     *
     * @return $this
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        $this->modifiedProperties[self::GROSS_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $grossAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossAmountOrFail($grossAmount)
    {
        if ($grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->setGrossAmount($grossAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getGrossAmountOrFail()
    {
        if ($this->grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->grossAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossAmount()
    {
        $this->assertPropertyIsSet(self::GROSS_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $netAmount
     *
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        $this->modifiedProperties[self::NET_AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @module 
     *
     * @param integer|null $netAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetAmountOrFail($netAmount)
    {
        if ($netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->setNetAmount($netAmount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNetAmountOrFail()
    {
        if ($this->netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->netAmount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetAmount()
    {
        $this->assertPropertyIsSet(self::NET_AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(SpyCurrencyEntityTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCurrencyEntityTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(SpyCurrencyEntityTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCurrencyEntityTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountEntityTransfer|null $discount
     *
     * @return $this
     */
    public function setDiscount(SpyDiscountEntityTransfer $discount = null)
    {
        $this->discount = $discount;
        $this->modifiedProperties[self::DISCOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyDiscountEntityTransfer|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountEntityTransfer $discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountOrFail(SpyDiscountEntityTransfer $discount)
    {
        return $this->setDiscount($discount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyDiscountEntityTransfer
     */
    public function getDiscountOrFail()
    {
        if ($this->discount === null) {
            $this->throwNullValueException(static::DISCOUNT);
        }

        return $this->discount;
    }

    /**
     * @module 
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
                case 'idDiscountAmount':
                case 'fkCurrency':
                case 'fkDiscount':
                case 'grossAmount':
                case 'netAmount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currency':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idDiscountAmount':
                case 'fkCurrency':
                case 'fkDiscount':
                case 'grossAmount':
                case 'netAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
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
                case 'idDiscountAmount':
                case 'fkCurrency':
                case 'fkDiscount':
                case 'grossAmount':
                case 'netAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
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
            'idDiscountAmount' => $this->idDiscountAmount,
            'fkCurrency' => $this->fkCurrency,
            'fkDiscount' => $this->fkDiscount,
            'grossAmount' => $this->grossAmount,
            'netAmount' => $this->netAmount,
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_amount' => $this->idDiscountAmount,
            'fk_currency' => $this->fkCurrency,
            'fk_discount' => $this->fkDiscount,
            'gross_amount' => $this->grossAmount,
            'net_amount' => $this->netAmount,
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_amount' => $this->idDiscountAmount instanceof AbstractTransfer ? $this->idDiscountAmount->toArray(true, false) : $this->idDiscountAmount,
            'fk_currency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, false) : $this->fkCurrency,
            'fk_discount' => $this->fkDiscount instanceof AbstractTransfer ? $this->fkDiscount->toArray(true, false) : $this->fkDiscount,
            'gross_amount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, false) : $this->grossAmount,
            'net_amount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, false) : $this->netAmount,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, false) : $this->discount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscountAmount' => $this->idDiscountAmount instanceof AbstractTransfer ? $this->idDiscountAmount->toArray(true, true) : $this->idDiscountAmount,
            'fkCurrency' => $this->fkCurrency instanceof AbstractTransfer ? $this->fkCurrency->toArray(true, true) : $this->fkCurrency,
            'fkDiscount' => $this->fkDiscount instanceof AbstractTransfer ? $this->fkDiscount->toArray(true, true) : $this->fkDiscount,
            'grossAmount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, true) : $this->grossAmount,
            'netAmount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, true) : $this->netAmount,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'discount' => $this->discount instanceof AbstractTransfer ? $this->discount->toArray(true, true) : $this->discount,
        ];
    }
}
