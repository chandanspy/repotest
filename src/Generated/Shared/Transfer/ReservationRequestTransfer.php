<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ReservationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const RESERVED_STATES = 'reservedStates';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const RESERVATION_QUANTITY = 'reservationQuantity';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Generated\Shared\Transfer\OmsStateCollectionTransfer|null
     */
    protected $reservedStates;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $reservationQuantity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'reserved_states' => 'reservedStates',
        'reservedStates' => 'reservedStates',
        'ReservedStates' => 'reservedStates',
        'store' => 'store',
        'Store' => 'store',
        'reservation_quantity' => 'reservationQuantity',
        'reservationQuantity' => 'reservationQuantity',
        'ReservationQuantity' => 'reservationQuantity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::RESERVED_STATES => [
            'type' => 'Generated\Shared\Transfer\OmsStateCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'reserved_states',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESERVATION_QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'reservation_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Availability|Oms|ProductBundle|ProductPackagingUnit
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
     * @module Availability|Oms|ProductBundle|ProductPackagingUnit
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module Availability|Oms|ProductBundle|ProductPackagingUnit
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
     * @module Availability|Oms|ProductBundle|ProductPackagingUnit
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
     * @module Availability|Oms|ProductBundle|ProductPackagingUnit
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
     * @module Oms|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\OmsStateCollectionTransfer|null $reservedStates
     *
     * @return $this
     */
    public function setReservedStates(OmsStateCollectionTransfer $reservedStates = null)
    {
        $this->reservedStates = $reservedStates;
        $this->modifiedProperties[self::RESERVED_STATES] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\OmsStateCollectionTransfer|null
     */
    public function getReservedStates()
    {
        return $this->reservedStates;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\OmsStateCollectionTransfer $reservedStates
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReservedStatesOrFail(OmsStateCollectionTransfer $reservedStates)
    {
        return $this->setReservedStates($reservedStates);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OmsStateCollectionTransfer
     */
    public function getReservedStatesOrFail()
    {
        if ($this->reservedStates === null) {
            $this->throwNullValueException(static::RESERVED_STATES);
        }

        return $this->reservedStates;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReservedStates()
    {
        $this->assertPropertyIsSet(self::RESERVED_STATES);

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module Oms|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $reservationQuantity
     *
     * @return $this
     */
    public function setReservationQuantity($reservationQuantity = null)
    {
        if ($reservationQuantity !== null && !$reservationQuantity instanceof Decimal) {
            $reservationQuantity = new Decimal($reservationQuantity);
        }

        $this->reservationQuantity = $reservationQuantity;
        $this->modifiedProperties[self::RESERVATION_QUANTITY] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getReservationQuantity()
    {
        return $this->reservationQuantity;
    }

    /**
     * @module Oms
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $reservationQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReservationQuantityOrFail($reservationQuantity)
    {
        if ($reservationQuantity === null) {
            $this->throwNullValueException(static::RESERVATION_QUANTITY);
        }

        return $this->setReservationQuantity($reservationQuantity);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getReservationQuantityOrFail()
    {
        if ($this->reservationQuantity === null) {
            $this->throwNullValueException(static::RESERVATION_QUANTITY);
        }

        return $this->reservationQuantity;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReservationQuantity()
    {
        $this->assertPropertyIsSet(self::RESERVATION_QUANTITY);

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
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'reservedStates':
                case 'store':
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
                case 'reservationQuantity':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'sku':
                case 'reservationQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'reservedStates':
                case 'store':
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
                case 'sku':
                case 'reservationQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'reservedStates':
                case 'store':
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
            'sku' => $this->sku,
            'reservedStates' => $this->reservedStates,
            'store' => $this->store,
            'reservationQuantity' => $this->reservationQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'reserved_states' => $this->reservedStates,
            'store' => $this->store,
            'reservation_quantity' => $this->reservationQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'reserved_states' => $this->reservedStates instanceof AbstractTransfer ? $this->reservedStates->toArray(true, false) : $this->reservedStates,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'reservation_quantity' => $this->reservationQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'reservedStates' => $this->reservedStates instanceof AbstractTransfer ? $this->reservedStates->toArray(true, true) : $this->reservedStates,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'reservationQuantity' => $this->reservationQuantity,
        ];
    }
}
