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
class DiscountVoucherTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT = 'idDiscount';

    /**
     * @var string
     */
    public const FK_DISCOUNT_VOUCHER_POOL = 'fkDiscountVoucherPool';

    /**
     * @var string
     */
    public const VOUCHER_BATCH = 'voucherBatch';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const CUSTOM_CODE = 'customCode';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const RANDOM_GENERATED_CODE_LENGTH = 'randomGeneratedCodeLength';

    /**
     * @var string
     */
    public const MAX_NUMBER_OF_USES = 'maxNumberOfUses';

    /**
     * @var string
     */
    public const NUMBER_OF_USES = 'numberOfUses';

    /**
     * @var int|null
     */
    protected $idDiscount;

    /**
     * @var int|null
     */
    protected $fkDiscountVoucherPool;

    /**
     * @var int|null
     */
    protected $voucherBatch;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $customCode;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var int|null
     */
    protected $randomGeneratedCodeLength;

    /**
     * @var int|null
     */
    protected $maxNumberOfUses;

    /**
     * @var int|null
     */
    protected $numberOfUses;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount' => 'idDiscount',
        'idDiscount' => 'idDiscount',
        'IdDiscount' => 'idDiscount',
        'fk_discount_voucher_pool' => 'fkDiscountVoucherPool',
        'fkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'FkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'voucher_batch' => 'voucherBatch',
        'voucherBatch' => 'voucherBatch',
        'VoucherBatch' => 'voucherBatch',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'custom_code' => 'customCode',
        'customCode' => 'customCode',
        'CustomCode' => 'customCode',
        'code' => 'code',
        'Code' => 'code',
        'random_generated_code_length' => 'randomGeneratedCodeLength',
        'randomGeneratedCodeLength' => 'randomGeneratedCodeLength',
        'RandomGeneratedCodeLength' => 'randomGeneratedCodeLength',
        'max_number_of_uses' => 'maxNumberOfUses',
        'maxNumberOfUses' => 'maxNumberOfUses',
        'MaxNumberOfUses' => 'maxNumberOfUses',
        'number_of_uses' => 'numberOfUses',
        'numberOfUses' => 'numberOfUses',
        'NumberOfUses' => 'numberOfUses',
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
        self::FK_DISCOUNT_VOUCHER_POOL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_discount_voucher_pool',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VOUCHER_BATCH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'voucher_batch',
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
        self::CUSTOM_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'custom_code',
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
        self::RANDOM_GENERATED_CODE_LENGTH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'random_generated_code_length',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAX_NUMBER_OF_USES => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'max_number_of_uses',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NUMBER_OF_USES => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_uses',
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
     * @param int|null $fkDiscountVoucherPool
     *
     * @return $this
     */
    public function setFkDiscountVoucherPool($fkDiscountVoucherPool)
    {
        $this->fkDiscountVoucherPool = $fkDiscountVoucherPool;
        $this->modifiedProperties[self::FK_DISCOUNT_VOUCHER_POOL] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getFkDiscountVoucherPool()
    {
        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module Discount
     *
     * @param int|null $fkDiscountVoucherPool
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkDiscountVoucherPoolOrFail($fkDiscountVoucherPool)
    {
        if ($fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->setFkDiscountVoucherPool($fkDiscountVoucherPool);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkDiscountVoucherPoolOrFail()
    {
        if ($this->fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkDiscountVoucherPool()
    {
        $this->assertPropertyIsSet(self::FK_DISCOUNT_VOUCHER_POOL);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $voucherBatch
     *
     * @return $this
     */
    public function setVoucherBatch($voucherBatch)
    {
        $this->voucherBatch = $voucherBatch;
        $this->modifiedProperties[self::VOUCHER_BATCH] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getVoucherBatch()
    {
        return $this->voucherBatch;
    }

    /**
     * @module Discount
     *
     * @param int|null $voucherBatch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVoucherBatchOrFail($voucherBatch)
    {
        if ($voucherBatch === null) {
            $this->throwNullValueException(static::VOUCHER_BATCH);
        }

        return $this->setVoucherBatch($voucherBatch);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVoucherBatchOrFail()
    {
        if ($this->voucherBatch === null) {
            $this->throwNullValueException(static::VOUCHER_BATCH);
        }

        return $this->voucherBatch;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherBatch()
    {
        $this->assertPropertyIsSet(self::VOUCHER_BATCH);

        return $this;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param string|null $customCode
     *
     * @return $this
     */
    public function setCustomCode($customCode)
    {
        $this->customCode = $customCode;
        $this->modifiedProperties[self::CUSTOM_CODE] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return string|null
     */
    public function getCustomCode()
    {
        return $this->customCode;
    }

    /**
     * @module Discount
     *
     * @param string|null $customCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomCodeOrFail($customCode)
    {
        if ($customCode === null) {
            $this->throwNullValueException(static::CUSTOM_CODE);
        }

        return $this->setCustomCode($customCode);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomCodeOrFail()
    {
        if ($this->customCode === null) {
            $this->throwNullValueException(static::CUSTOM_CODE);
        }

        return $this->customCode;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomCode()
    {
        $this->assertPropertyIsSet(self::CUSTOM_CODE);

        return $this;
    }

    /**
     * @module Discount
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
     * @module Discount
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module Discount
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
     * @module Discount
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
     * @module Discount
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
     * @module Discount
     *
     * @param int|null $randomGeneratedCodeLength
     *
     * @return $this
     */
    public function setRandomGeneratedCodeLength($randomGeneratedCodeLength)
    {
        $this->randomGeneratedCodeLength = $randomGeneratedCodeLength;
        $this->modifiedProperties[self::RANDOM_GENERATED_CODE_LENGTH] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getRandomGeneratedCodeLength()
    {
        return $this->randomGeneratedCodeLength;
    }

    /**
     * @module Discount
     *
     * @param int|null $randomGeneratedCodeLength
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRandomGeneratedCodeLengthOrFail($randomGeneratedCodeLength)
    {
        if ($randomGeneratedCodeLength === null) {
            $this->throwNullValueException(static::RANDOM_GENERATED_CODE_LENGTH);
        }

        return $this->setRandomGeneratedCodeLength($randomGeneratedCodeLength);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRandomGeneratedCodeLengthOrFail()
    {
        if ($this->randomGeneratedCodeLength === null) {
            $this->throwNullValueException(static::RANDOM_GENERATED_CODE_LENGTH);
        }

        return $this->randomGeneratedCodeLength;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRandomGeneratedCodeLength()
    {
        $this->assertPropertyIsSet(self::RANDOM_GENERATED_CODE_LENGTH);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $maxNumberOfUses
     *
     * @return $this
     */
    public function setMaxNumberOfUses($maxNumberOfUses)
    {
        $this->maxNumberOfUses = $maxNumberOfUses;
        $this->modifiedProperties[self::MAX_NUMBER_OF_USES] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getMaxNumberOfUses()
    {
        return $this->maxNumberOfUses;
    }

    /**
     * @module Discount
     *
     * @param int|null $maxNumberOfUses
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxNumberOfUsesOrFail($maxNumberOfUses)
    {
        if ($maxNumberOfUses === null) {
            $this->throwNullValueException(static::MAX_NUMBER_OF_USES);
        }

        return $this->setMaxNumberOfUses($maxNumberOfUses);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaxNumberOfUsesOrFail()
    {
        if ($this->maxNumberOfUses === null) {
            $this->throwNullValueException(static::MAX_NUMBER_OF_USES);
        }

        return $this->maxNumberOfUses;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMaxNumberOfUses()
    {
        $this->assertPropertyIsSet(self::MAX_NUMBER_OF_USES);

        return $this;
    }

    /**
     * @module Discount
     *
     * @param int|null $numberOfUses
     *
     * @return $this
     */
    public function setNumberOfUses($numberOfUses)
    {
        $this->numberOfUses = $numberOfUses;
        $this->modifiedProperties[self::NUMBER_OF_USES] = true;

        return $this;
    }

    /**
     * @module Discount
     *
     * @return int|null
     */
    public function getNumberOfUses()
    {
        return $this->numberOfUses;
    }

    /**
     * @module Discount
     *
     * @param int|null $numberOfUses
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfUsesOrFail($numberOfUses)
    {
        if ($numberOfUses === null) {
            $this->throwNullValueException(static::NUMBER_OF_USES);
        }

        return $this->setNumberOfUses($numberOfUses);
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfUsesOrFail()
    {
        if ($this->numberOfUses === null) {
            $this->throwNullValueException(static::NUMBER_OF_USES);
        }

        return $this->numberOfUses;
    }

    /**
     * @module Discount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfUses()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_USES);

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
                case 'fkDiscountVoucherPool':
                case 'voucherBatch':
                case 'quantity':
                case 'customCode':
                case 'code':
                case 'randomGeneratedCodeLength':
                case 'maxNumberOfUses':
                case 'numberOfUses':
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
                case 'fkDiscountVoucherPool':
                case 'voucherBatch':
                case 'quantity':
                case 'customCode':
                case 'code':
                case 'randomGeneratedCodeLength':
                case 'maxNumberOfUses':
                case 'numberOfUses':
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
                case 'fkDiscountVoucherPool':
                case 'voucherBatch':
                case 'quantity':
                case 'customCode':
                case 'code':
                case 'randomGeneratedCodeLength':
                case 'maxNumberOfUses':
                case 'numberOfUses':
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
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool,
            'voucherBatch' => $this->voucherBatch,
            'quantity' => $this->quantity,
            'customCode' => $this->customCode,
            'code' => $this->code,
            'randomGeneratedCodeLength' => $this->randomGeneratedCodeLength,
            'maxNumberOfUses' => $this->maxNumberOfUses,
            'numberOfUses' => $this->numberOfUses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool,
            'voucher_batch' => $this->voucherBatch,
            'quantity' => $this->quantity,
            'custom_code' => $this->customCode,
            'code' => $this->code,
            'random_generated_code_length' => $this->randomGeneratedCodeLength,
            'max_number_of_uses' => $this->maxNumberOfUses,
            'number_of_uses' => $this->numberOfUses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, false) : $this->idDiscount,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, false) : $this->fkDiscountVoucherPool,
            'voucher_batch' => $this->voucherBatch instanceof AbstractTransfer ? $this->voucherBatch->toArray(true, false) : $this->voucherBatch,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'custom_code' => $this->customCode instanceof AbstractTransfer ? $this->customCode->toArray(true, false) : $this->customCode,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'random_generated_code_length' => $this->randomGeneratedCodeLength instanceof AbstractTransfer ? $this->randomGeneratedCodeLength->toArray(true, false) : $this->randomGeneratedCodeLength,
            'max_number_of_uses' => $this->maxNumberOfUses instanceof AbstractTransfer ? $this->maxNumberOfUses->toArray(true, false) : $this->maxNumberOfUses,
            'number_of_uses' => $this->numberOfUses instanceof AbstractTransfer ? $this->numberOfUses->toArray(true, false) : $this->numberOfUses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscount' => $this->idDiscount instanceof AbstractTransfer ? $this->idDiscount->toArray(true, true) : $this->idDiscount,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, true) : $this->fkDiscountVoucherPool,
            'voucherBatch' => $this->voucherBatch instanceof AbstractTransfer ? $this->voucherBatch->toArray(true, true) : $this->voucherBatch,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'customCode' => $this->customCode instanceof AbstractTransfer ? $this->customCode->toArray(true, true) : $this->customCode,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'randomGeneratedCodeLength' => $this->randomGeneratedCodeLength instanceof AbstractTransfer ? $this->randomGeneratedCodeLength->toArray(true, true) : $this->randomGeneratedCodeLength,
            'maxNumberOfUses' => $this->maxNumberOfUses instanceof AbstractTransfer ? $this->maxNumberOfUses->toArray(true, true) : $this->maxNumberOfUses,
            'numberOfUses' => $this->numberOfUses instanceof AbstractTransfer ? $this->numberOfUses->toArray(true, true) : $this->numberOfUses,
        ];
    }
}
