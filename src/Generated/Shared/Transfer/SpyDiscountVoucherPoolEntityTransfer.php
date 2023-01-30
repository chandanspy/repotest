<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyDiscountVoucherPoolEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DISCOUNT_VOUCHER_POOL = 'idDiscountVoucherPool';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_DISCOUNTS = 'spyDiscounts';

    /**
     * @var string
     */
    public const SPY_DISCOUNT_VOUCHERS = 'spyDiscountVouchers';

    /**
     * @var integer|null
     */
    protected $idDiscountVoucherPool;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountEntityTransfer[]
     */
    protected $spyDiscounts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyDiscountVoucherEntityTransfer[]
     */
    protected $spyDiscountVouchers;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_discount_voucher_pool' => 'idDiscountVoucherPool',
        'idDiscountVoucherPool' => 'idDiscountVoucherPool',
        'IdDiscountVoucherPool' => 'idDiscountVoucherPool',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'name' => 'name',
        'Name' => 'name',
        'spy_discounts' => 'spyDiscounts',
        'spyDiscounts' => 'spyDiscounts',
        'SpyDiscounts' => 'spyDiscounts',
        'spy_discount_vouchers' => 'spyDiscountVouchers',
        'spyDiscountVouchers' => 'spyDiscountVouchers',
        'SpyDiscountVouchers' => 'spyDiscountVouchers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DISCOUNT_VOUCHER_POOL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_discount_voucher_pool',
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
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DISCOUNT_VOUCHERS => [
            'type' => 'Generated\Shared\Transfer\SpyDiscountVoucherEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_discount_vouchers',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\Discount\Persistence\SpyDiscountVoucherPool';


    /**
     * @module 
     *
     * @param integer|null $idDiscountVoucherPool
     *
     * @return $this
     */
    public function setIdDiscountVoucherPool($idDiscountVoucherPool)
    {
        $this->idDiscountVoucherPool = $idDiscountVoucherPool;
        $this->modifiedProperties[self::ID_DISCOUNT_VOUCHER_POOL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDiscountVoucherPool()
    {
        return $this->idDiscountVoucherPool;
    }

    /**
     * @module 
     *
     * @param integer|null $idDiscountVoucherPool
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDiscountVoucherPoolOrFail($idDiscountVoucherPool)
    {
        if ($idDiscountVoucherPool === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_VOUCHER_POOL);
        }

        return $this->setIdDiscountVoucherPool($idDiscountVoucherPool);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDiscountVoucherPoolOrFail()
    {
        if ($this->idDiscountVoucherPool === null) {
            $this->throwNullValueException(static::ID_DISCOUNT_VOUCHER_POOL);
        }

        return $this->idDiscountVoucherPool;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDiscountVoucherPool()
    {
        $this->assertPropertyIsSet(self::ID_DISCOUNT_VOUCHER_POOL);

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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyDiscountEntityTransfer[] $spyDiscounts
     *
     * @return $this
     */
    public function setSpyDiscounts(ArrayObject $spyDiscounts)
    {
        $this->spyDiscounts = $spyDiscounts;
        $this->modifiedProperties[self::SPY_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyDiscountEntityTransfer[]
     */
    public function getSpyDiscounts()
    {
        return $this->spyDiscounts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountEntityTransfer $spyDiscounts
     *
     * @return $this
     */
    public function addSpyDiscounts(SpyDiscountEntityTransfer $spyDiscounts)
    {
        $this->spyDiscounts[] = $spyDiscounts;
        $this->modifiedProperties[self::SPY_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyDiscountVoucherEntityTransfer[] $spyDiscountVouchers
     *
     * @return $this
     */
    public function setSpyDiscountVouchers(ArrayObject $spyDiscountVouchers)
    {
        $this->spyDiscountVouchers = $spyDiscountVouchers;
        $this->modifiedProperties[self::SPY_DISCOUNT_VOUCHERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyDiscountVoucherEntityTransfer[]
     */
    public function getSpyDiscountVouchers()
    {
        return $this->spyDiscountVouchers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDiscountVoucherEntityTransfer $spyDiscountVouchers
     *
     * @return $this
     */
    public function addSpyDiscountVouchers(SpyDiscountVoucherEntityTransfer $spyDiscountVouchers)
    {
        $this->spyDiscountVouchers[] = $spyDiscountVouchers;
        $this->modifiedProperties[self::SPY_DISCOUNT_VOUCHERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDiscountVouchers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DISCOUNT_VOUCHERS);

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
                case 'idDiscountVoucherPool':
                case 'isActive':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyDiscounts':
                case 'spyDiscountVouchers':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idDiscountVoucherPool':
                case 'isActive':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDiscounts':
                case 'spyDiscountVouchers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idDiscountVoucherPool':
                case 'isActive':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDiscounts':
                case 'spyDiscountVouchers':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyDiscounts = $this->spyDiscounts ?: new ArrayObject();
        $this->spyDiscountVouchers = $this->spyDiscountVouchers ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idDiscountVoucherPool' => $this->idDiscountVoucherPool,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'spyDiscounts' => $this->spyDiscounts,
            'spyDiscountVouchers' => $this->spyDiscountVouchers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_voucher_pool' => $this->idDiscountVoucherPool,
            'is_active' => $this->isActive,
            'name' => $this->name,
            'spy_discounts' => $this->spyDiscounts,
            'spy_discount_vouchers' => $this->spyDiscountVouchers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_discount_voucher_pool' => $this->idDiscountVoucherPool instanceof AbstractTransfer ? $this->idDiscountVoucherPool->toArray(true, false) : $this->idDiscountVoucherPool,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_discounts' => $this->spyDiscounts instanceof AbstractTransfer ? $this->spyDiscounts->toArray(true, false) : $this->addValuesToCollection($this->spyDiscounts, true, false),
            'spy_discount_vouchers' => $this->spyDiscountVouchers instanceof AbstractTransfer ? $this->spyDiscountVouchers->toArray(true, false) : $this->addValuesToCollection($this->spyDiscountVouchers, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDiscountVoucherPool' => $this->idDiscountVoucherPool instanceof AbstractTransfer ? $this->idDiscountVoucherPool->toArray(true, true) : $this->idDiscountVoucherPool,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyDiscounts' => $this->spyDiscounts instanceof AbstractTransfer ? $this->spyDiscounts->toArray(true, true) : $this->addValuesToCollection($this->spyDiscounts, true, true),
            'spyDiscountVouchers' => $this->spyDiscountVouchers instanceof AbstractTransfer ? $this->spyDiscountVouchers->toArray(true, true) : $this->addValuesToCollection($this->spyDiscountVouchers, true, true),
        ];
    }
}
