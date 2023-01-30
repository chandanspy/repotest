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
class SpyDiscountVoucherEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT_VOUCHER = 'idDiscountVoucher';

    /**
     * @var string
     */
    public const FK_DISCOUNT_VOUCHER_POOL = 'fkDiscountVoucherPool';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const MAX_NUMBER_OF_USES = 'maxNumberOfUses';

    /**
     * @var string
     */
    public const NUMBER_OF_USES = 'numberOfUses';

    /**
     * @var string
     */
    public const VOUCHER_BATCH = 'voucherBatch';

    /**
     * @var string
     */
    public const VOUCHER_POOL = 'voucherPool';

    /**
     * @var integer|null
     */
    protected $idDiscountVoucher;

    /**
     * @var integer|null
     */
    protected $fkDiscountVoucherPool;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var integer|null
     */
    protected $maxNumberOfUses;

    /**
     * @var integer|null
     */
    protected $numberOfUses;

    /**
     * @var integer|null
     */
    protected $voucherBatch;

    /**
     * @var \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null
     */
    protected $voucherPool;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount_voucher' => 'idDiscountVoucher',
        'idDiscountVoucher' => 'idDiscountVoucher',
        'IdDiscountVoucher' => 'idDiscountVoucher',
        'fk_discount_voucher_pool' => 'fkDiscountVoucherPool',
        'fkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'FkDiscountVoucherPool' => 'fkDiscountVoucherPool',
        'code' => 'code',
        'Code' => 'code',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'max_number_of_uses' => 'maxNumberOfUses',
        'maxNumberOfUses' => 'maxNumberOfUses',
        'MaxNumberOfUses' => 'maxNumberOfUses',
        'number_of_uses' => 'numberOfUses',
        'numberOfUses' => 'numberOfUses',
        'NumberOfUses' => 'numberOfUses',
        'voucher_batch' => 'voucherBatch',
        'voucherBatch' => 'voucherBatch',
        'VoucherBatch' => 'voucherBatch',
        'voucher_pool' => 'voucherPool',
        'voucherPool' => 'voucherPool',
        'VoucherPool' => 'voucherPool',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT_VOUCHER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_discount_voucher',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_DISCOUNT_VOUCHER_POOL => [
            'type' => 'integer',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAX_NUMBER_OF_USES => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::VOUCHER_BATCH => [
            'type' => 'integer',
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
        self::VOUCHER_POOL => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'voucher_pool',
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
    public static $entityNamespace = 'Orm\Zed\Discount\Persistence\SpyDiscountVoucher';


    /**
     * @module 
     *
     * @param integer|null $idDiscountVoucher
     *
     * @return $this
     */
    public function setIdDiscountVoucher($idDiscountVoucher)
    {
        $this->idDiscountVoucher = $idDiscountVoucher;
        $this->modifiedProperties[self::ID_DISCOUNT_VOUCHER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDiscountVoucher()
    {
        return $this->idDiscountVoucher;
    }

    /**
     * @module 
     *
     * @param integer|null $idDiscountVoucher
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountVoucherOrFail($idDiscountVoucher)
    {
        if ($idDiscountVoucher === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_VOUCHER);
        }

        return $this->setIdDiscountVoucher($idDiscountVoucher);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDiscountVoucherOrFail()
    {
        if ($this->idDiscountVoucher === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_VOUCHER);
        }

        return $this->idDiscountVoucher;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscountVoucher()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT_VOUCHER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDiscountVoucherPool
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkDiscountVoucherPool()
    {
        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDiscountVoucherPool
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkDiscountVoucherPoolOrFail()
    {
        if ($this->fkDiscountVoucherPool === null) {
            $this->throwNullValueException(static::FK_DISCOUNT_VOUCHER_POOL);
        }

        return $this->fkDiscountVoucherPool;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $maxNumberOfUses
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
     * @module 
     *
     * @return integer|null
     */
    public function getMaxNumberOfUses()
    {
        return $this->maxNumberOfUses;
    }

    /**
     * @module 
     *
     * @param integer|null $maxNumberOfUses
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getMaxNumberOfUsesOrFail()
    {
        if ($this->maxNumberOfUses === null) {
            $this->throwNullValueException(static::MAX_NUMBER_OF_USES);
        }

        return $this->maxNumberOfUses;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $numberOfUses
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
     * @module 
     *
     * @return integer|null
     */
    public function getNumberOfUses()
    {
        return $this->numberOfUses;
    }

    /**
     * @module 
     *
     * @param integer|null $numberOfUses
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getNumberOfUsesOrFail()
    {
        if ($this->numberOfUses === null) {
            $this->throwNullValueException(static::NUMBER_OF_USES);
        }

        return $this->numberOfUses;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $voucherBatch
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
     * @module 
     *
     * @return integer|null
     */
    public function getVoucherBatch()
    {
        return $this->voucherBatch;
    }

    /**
     * @module 
     *
     * @param integer|null $voucherBatch
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getVoucherBatchOrFail()
    {
        if ($this->voucherBatch === null) {
            $this->throwNullValueException(static::VOUCHER_BATCH);
        }

        return $this->voucherBatch;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null $voucherPool
     *
     * @return $this
     */
    public function setVoucherPool(SpyDiscountVoucherPoolEntityTransfer $voucherPool = null)
    {
        $this->voucherPool = $voucherPool;
        $this->modifiedProperties[self::VOUCHER_POOL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer|null
     */
    public function getVoucherPool()
    {
        return $this->voucherPool;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer $voucherPool
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVoucherPoolOrFail(SpyDiscountVoucherPoolEntityTransfer $voucherPool)
    {
        return $this->setVoucherPool($voucherPool);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyDiscountVoucherPoolEntityTransfer
     */
    public function getVoucherPoolOrFail()
    {
        if ($this->voucherPool === null) {
            $this->throwNullValueException(static::VOUCHER_POOL);
        }

        return $this->voucherPool;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherPool()
    {
        $this->assertPropertyIsSet(self::VOUCHER_POOL);

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
                case 'idDiscountVoucher':
                case 'fkDiscountVoucherPool':
                case 'code':
                case 'isActive':
                case 'maxNumberOfUses':
                case 'numberOfUses':
                case 'voucherBatch':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'voucherPool':
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
                case 'idDiscountVoucher':
                case 'fkDiscountVoucherPool':
                case 'code':
                case 'isActive':
                case 'maxNumberOfUses':
                case 'numberOfUses':
                case 'voucherBatch':
                    $values[$arrayKey] = $value;

                    break;
                case 'voucherPool':
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
                case 'idDiscountVoucher':
                case 'fkDiscountVoucherPool':
                case 'code':
                case 'isActive':
                case 'maxNumberOfUses':
                case 'numberOfUses':
                case 'voucherBatch':
                    $values[$arrayKey] = $value;

                    break;
                case 'voucherPool':
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
            'idDiscountVoucher' => $this->idDiscountVoucher,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool,
            'code' => $this->code,
            'isActive' => $this->isActive,
            'maxNumberOfUses' => $this->maxNumberOfUses,
            'numberOfUses' => $this->numberOfUses,
            'voucherBatch' => $this->voucherBatch,
            'voucherPool' => $this->voucherPool,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_voucher' => $this->idDiscountVoucher,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool,
            'code' => $this->code,
            'is_active' => $this->isActive,
            'max_number_of_uses' => $this->maxNumberOfUses,
            'number_of_uses' => $this->numberOfUses,
            'voucher_batch' => $this->voucherBatch,
            'voucher_pool' => $this->voucherPool,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_voucher' => $this->idDiscountVoucher instanceof AbstractTransfer ? $this->idDiscountVoucher->toArray(true, false) : $this->idDiscountVoucher,
            'fk_discount_voucher_pool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, false) : $this->fkDiscountVoucherPool,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'max_number_of_uses' => $this->maxNumberOfUses instanceof AbstractTransfer ? $this->maxNumberOfUses->toArray(true, false) : $this->maxNumberOfUses,
            'number_of_uses' => $this->numberOfUses instanceof AbstractTransfer ? $this->numberOfUses->toArray(true, false) : $this->numberOfUses,
            'voucher_batch' => $this->voucherBatch instanceof AbstractTransfer ? $this->voucherBatch->toArray(true, false) : $this->voucherBatch,
            'voucher_pool' => $this->voucherPool instanceof AbstractTransfer ? $this->voucherPool->toArray(true, false) : $this->voucherPool,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscountVoucher' => $this->idDiscountVoucher instanceof AbstractTransfer ? $this->idDiscountVoucher->toArray(true, true) : $this->idDiscountVoucher,
            'fkDiscountVoucherPool' => $this->fkDiscountVoucherPool instanceof AbstractTransfer ? $this->fkDiscountVoucherPool->toArray(true, true) : $this->fkDiscountVoucherPool,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'maxNumberOfUses' => $this->maxNumberOfUses instanceof AbstractTransfer ? $this->maxNumberOfUses->toArray(true, true) : $this->maxNumberOfUses,
            'numberOfUses' => $this->numberOfUses instanceof AbstractTransfer ? $this->numberOfUses->toArray(true, true) : $this->numberOfUses,
            'voucherBatch' => $this->voucherBatch instanceof AbstractTransfer ? $this->voucherBatch->toArray(true, true) : $this->voucherBatch,
            'voucherPool' => $this->voucherPool instanceof AbstractTransfer ? $this->voucherPool->toArray(true, true) : $this->voucherPool,
        ];
    }
}
