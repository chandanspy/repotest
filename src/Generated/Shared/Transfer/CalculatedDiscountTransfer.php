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
class CalculatedDiscountTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UNIT_AMOUNT = 'unitAmount';

    /**
     * @var string
     */
    public const SUM_AMOUNT = 'sumAmount';

    /**
     * @deprecated use unitAmount
     */
    public const UNIT_GROSS_AMOUNT = 'unitGrossAmount';

    /**
     * @deprecated use sumAmount
     */
    public const SUM_GROSS_AMOUNT = 'sumGrossAmount';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const VOUCHER_CODE = 'voucherCode';

    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const PRIORITY = 'priority';

    /**
     * @var int|null
     */
    protected $unitAmount;

    /**
     * @var int|null
     */
    protected $sumAmount;

    /**
     * @var int|null
     */
    protected $unitGrossAmount;

    /**
     * @var int|null
     */
    protected $sumGrossAmount;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $idDiscount;

    /**
     * @var string|null
     */
    protected $voucherCode;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $priority;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'unit_amount' => 'unitAmount',
        'unitAmount' => 'unitAmount',
        'UnitAmount' => 'unitAmount',
        'sum_amount' => 'sumAmount',
        'sumAmount' => 'sumAmount',
        'SumAmount' => 'sumAmount',
        'unit_gross_amount' => 'unitGrossAmount',
        'unitGrossAmount' => 'unitGrossAmount',
        'UnitGrossAmount' => 'unitGrossAmount',
        'sum_gross_amount' => 'sumGrossAmount',
        'sumGrossAmount' => 'sumGrossAmount',
        'SumGrossAmount' => 'sumGrossAmount',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'voucher_code' => 'voucherCode',
        'voucherCode' => 'voucherCode',
        'VoucherCode' => 'voucherCode',
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'description' => 'description',
        'Description' => 'description',
        'priority' => 'priority',
        'Priority' => 'priority',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::UNIT_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UNIT_GROSS_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'unit_gross_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUM_GROSS_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'sum_gross_amount',
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
        self::VOUCHER_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'voucher_code',
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRIORITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'priority',
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
     * @module Calculation|Discount|SalesQuantity
     *
     * @param int|null $unitAmount
     *
     * @return $this
     */
    public function setUnitAmount($unitAmount)
    {
        $this->unitAmount = $unitAmount;
        $this->modifiedProperties[self::UNIT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getUnitAmount()
    {
        return $this->unitAmount;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @param int|null $unitAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitAmountOrFail($unitAmount)
    {
        if ($unitAmount === null) {
            $this->throwNullValueException(static::UNIT_AMOUNT);
        }

        return $this->setUnitAmount($unitAmount);
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getUnitAmountOrFail()
    {
        if ($this->unitAmount === null) {
            $this->throwNullValueException(static::UNIT_AMOUNT);
        }

        return $this->unitAmount;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUnitAmount()
    {
        $this->assertPropertyIsSet(self::UNIT_AMOUNT);

        return $this;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @param int|null $sumAmount
     *
     * @return $this
     */
    public function setSumAmount($sumAmount)
    {
        $this->sumAmount = $sumAmount;
        $this->modifiedProperties[self::SUM_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getSumAmount()
    {
        return $this->sumAmount;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
     *
     * @param int|null $sumAmount
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
     * @module Calculation|Discount|SalesQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSumAmountOrFail()
    {
        if ($this->sumAmount === null) {
            $this->throwNullValueException(static::SUM_AMOUNT);
        }

        return $this->sumAmount;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
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
     * @module Calculation|Discount
     *
     * @deprecated use unitAmount
     *
     * @param int|null $unitGrossAmount
     *
     * @return $this
     */
    public function setUnitGrossAmount($unitGrossAmount)
    {
        $this->unitGrossAmount = $unitGrossAmount;
        $this->modifiedProperties[self::UNIT_GROSS_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @deprecated use unitAmount
     *
     * @return int|null
     */
    public function getUnitGrossAmount()
    {
        return $this->unitGrossAmount;
    }

    /**
     * @module Calculation|Discount
     *
     * @deprecated use unitAmount
     *
     * @param int|null $unitGrossAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUnitGrossAmountOrFail($unitGrossAmount)
    {
        if ($unitGrossAmount === null) {
            $this->throwNullValueException(static::UNIT_GROSS_AMOUNT);
        }

        return $this->setUnitGrossAmount($unitGrossAmount);
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated use unitAmount
     *
     * @return int
     */
    public function getUnitGrossAmountOrFail()
    {
        if ($this->unitGrossAmount === null) {
            $this->throwNullValueException(static::UNIT_GROSS_AMOUNT);
        }

        return $this->unitGrossAmount;
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated use unitAmount
     *
     * @return $this
     */
    public function requireUnitGrossAmount()
    {
        $this->assertPropertyIsSet(self::UNIT_GROSS_AMOUNT);

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @deprecated use sumAmount
     *
     * @param int|null $sumGrossAmount
     *
     * @return $this
     */
    public function setSumGrossAmount($sumGrossAmount)
    {
        $this->sumGrossAmount = $sumGrossAmount;
        $this->modifiedProperties[self::SUM_GROSS_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @deprecated use sumAmount
     *
     * @return int|null
     */
    public function getSumGrossAmount()
    {
        return $this->sumGrossAmount;
    }

    /**
     * @module Calculation|Discount
     *
     * @deprecated use sumAmount
     *
     * @param int|null $sumGrossAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSumGrossAmountOrFail($sumGrossAmount)
    {
        if ($sumGrossAmount === null) {
            $this->throwNullValueException(static::SUM_GROSS_AMOUNT);
        }

        return $this->setSumGrossAmount($sumGrossAmount);
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated use sumAmount
     *
     * @return int
     */
    public function getSumGrossAmountOrFail()
    {
        if ($this->sumGrossAmount === null) {
            $this->throwNullValueException(static::SUM_GROSS_AMOUNT);
        }

        return $this->sumGrossAmount;
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated use sumAmount
     *
     * @return $this
     */
    public function requireSumGrossAmount()
    {
        $this->assertPropertyIsSet(self::SUM_GROSS_AMOUNT);

        return $this;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
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
     * @module Calculation|Discount|SalesQuantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module Calculation|Discount|SalesQuantity
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
     * @module Calculation|Discount|SalesQuantity
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
     * @module Calculation|Discount|SalesQuantity
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
     * @module Calculation|Discount|SalesQuantity|Sales
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
     * @module Calculation|Discount|SalesQuantity|Sales
     *
     * @return int|null
     */
    public function getIdDiscount()
    {
        return $this->idDiscount;
    }

    /**
     * @module Calculation|Discount|SalesQuantity|Sales
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
     * @module Calculation|Discount|SalesQuantity|Sales
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
     * @module Calculation|Discount|SalesQuantity|Sales
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
     * @module Calculation|Discount
     *
     * @param string|null $voucherCode
     *
     * @return $this
     */
    public function setVoucherCode($voucherCode)
    {
        $this->voucherCode = $voucherCode;
        $this->modifiedProperties[self::VOUCHER_CODE] = true;

        return $this;
    }

    /**
     * @module Calculation|Discount
     *
     * @return string|null
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * @module Calculation|Discount
     *
     * @param string|null $voucherCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVoucherCodeOrFail($voucherCode)
    {
        if ($voucherCode === null) {
            $this->throwNullValueException(static::VOUCHER_CODE);
        }

        return $this->setVoucherCode($voucherCode);
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVoucherCodeOrFail()
    {
        if ($this->voucherCode === null) {
            $this->throwNullValueException(static::VOUCHER_CODE);
        }

        return $this->voucherCode;
    }

    /**
     * @module Calculation|Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherCode()
    {
        $this->assertPropertyIsSet(self::VOUCHER_CODE);

        return $this;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module Discount
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        $this->modifiedProperties[self::PRIORITY] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @param int|null $priority
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriorityOrFail($priority)
    {
        if ($priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->setPriority($priority);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriorityOrFail()
    {
        if ($this->priority === null) {
            $this->throwNullValueException(static::PRIORITY);
        }

        return $this->priority;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriority()
    {
        $this->assertPropertyIsSet(self::PRIORITY);

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
                case 'unitAmount':
                case 'sumAmount':
                case 'unitGrossAmount':
                case 'sumGrossAmount':
                case 'quantity':
                case 'idDiscount':
                case 'voucherCode':
                case 'displayName':
                case 'description':
                case 'priority':
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
                case 'unitAmount':
                case 'sumAmount':
                case 'unitGrossAmount':
                case 'sumGrossAmount':
                case 'quantity':
                case 'idDiscount':
                case 'voucherCode':
                case 'displayName':
                case 'description':
                case 'priority':
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
                case 'unitAmount':
                case 'sumAmount':
                case 'unitGrossAmount':
                case 'sumGrossAmount':
                case 'quantity':
                case 'idDiscount':
                case 'voucherCode':
                case 'displayName':
                case 'description':
                case 'priority':
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
            'unitAmount' => $this->unitAmount,
            'sumAmount' => $this->sumAmount,
            'unitGrossAmount' => $this->unitGrossAmount,
            'sumGrossAmount' => $this->sumGrossAmount,
            'quantity' => $this->quantity,
            'idDiscount' => $this->idDiscount,
            'voucherCode' => $this->voucherCode,
            'displayName' => $this->displayName,
            'description' => $this->description,
            'priority' => $this->priority,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'unit_amount' => $this->unitAmount,
            'sum_amount' => $this->sumAmount,
            'unit_gross_amount' => $this->unitGrossAmount,
            'sum_gross_amount' => $this->sumGrossAmount,
            'quantity' => $this->quantity,
            'id_discount' => $this->idDiscount,
            'voucher_code' => $this->voucherCode,
            'display_name' => $this->displayName,
            'description' => $this->description,
            'priority' => $this->priority,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'unit_amount' => $this->unitAmount instanceof AbstractTransfer ? $this->unitAmount->toArray(true, false) : $this->unitAmount,
            'sum_amount' => $this->sumAmount instanceof AbstractTransfer ? $this->sumAmount->toArray(true, false) : $this->sumAmount,
            'unit_gross_amount' => $this->unitGrossAmount instanceof AbstractTransfer ? $this->unitGrossAmount->toArray(true, false) : $this->unitGrossAmount,
            'sum_gross_amount' => $this->sumGrossAmount instanceof AbstractTransfer ? $this->sumGrossAmount->toArray(true, false) : $this->sumGrossAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'voucher_code' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, false) : $this->voucherCode,
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, false) : $this->priority,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'unitAmount' => $this->unitAmount instanceof AbstractTransfer ? $this->unitAmount->toArray(true, true) : $this->unitAmount,
            'sumAmount' => $this->sumAmount instanceof AbstractTransfer ? $this->sumAmount->toArray(true, true) : $this->sumAmount,
            'unitGrossAmount' => $this->unitGrossAmount instanceof AbstractTransfer ? $this->unitGrossAmount->toArray(true, true) : $this->unitGrossAmount,
            'sumGrossAmount' => $this->sumGrossAmount instanceof AbstractTransfer ? $this->sumGrossAmount->toArray(true, true) : $this->sumGrossAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'voucherCode' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, true) : $this->voucherCode,
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'priority' => $this->priority instanceof AbstractTransfer ? $this->priority->toArray(true, true) : $this->priority,
        ];
    }
}
