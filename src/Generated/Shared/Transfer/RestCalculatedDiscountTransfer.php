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
class RestCalculatedDiscountTransfer extends AbstractTransfer
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
    public const VOUCHER_CODE = 'voucherCode';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var int|null
     */
    protected $unitAmount;

    /**
     * @var int|null
     */
    protected $sumAmount;

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $voucherCode;

    /**
     * @var int|null
     */
    protected $quantity;

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
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'description' => 'description',
        'Description' => 'description',
        'voucher_code' => 'voucherCode',
        'voucherCode' => 'voucherCode',
        'VoucherCode' => 'voucherCode',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
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
    ];

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getUnitAmount()
    {
        return $this->unitAmount;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getSumAmount()
    {
        return $this->sumAmount;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getVoucherCode()
    {
        return $this->voucherCode;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
     * @module OrdersRestApi|ProductBundlesRestApi
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
                case 'displayName':
                case 'description':
                case 'voucherCode':
                case 'quantity':
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
                case 'displayName':
                case 'description':
                case 'voucherCode':
                case 'quantity':
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
                case 'displayName':
                case 'description':
                case 'voucherCode':
                case 'quantity':
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
            'displayName' => $this->displayName,
            'description' => $this->description,
            'voucherCode' => $this->voucherCode,
            'quantity' => $this->quantity,
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
            'display_name' => $this->displayName,
            'description' => $this->description,
            'voucher_code' => $this->voucherCode,
            'quantity' => $this->quantity,
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
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'voucher_code' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, false) : $this->voucherCode,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
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
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'voucherCode' => $this->voucherCode instanceof AbstractTransfer ? $this->voucherCode->toArray(true, true) : $this->voucherCode,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
        ];
    }
}
