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
class OmsAvailabilityReservationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const RESERVATION_AMOUNT = 'reservationAmount';

    /**
     * @var string
     */
    public const ORIGIN_STORE = 'originStore';

    /**
     * @var string
     */
    public const SYNCHRONIZE_TO_STORE = 'synchronizeToStore';

    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $reservationAmount;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $originStore;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $synchronizeToStore;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'reservation_amount' => 'reservationAmount',
        'reservationAmount' => 'reservationAmount',
        'ReservationAmount' => 'reservationAmount',
        'origin_store' => 'originStore',
        'originStore' => 'originStore',
        'OriginStore' => 'originStore',
        'synchronize_to_store' => 'synchronizeToStore',
        'synchronizeToStore' => 'synchronizeToStore',
        'SynchronizeToStore' => 'synchronizeToStore',
        'version' => 'version',
        'Version' => 'version',
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
        self::RESERVATION_AMOUNT => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'reservation_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGIN_STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'origin_store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SYNCHRONIZE_TO_STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'synchronize_to_store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VERSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'version',
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
     * @module Oms
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
     * @module Oms
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module Oms
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
     * @module Oms
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
     * @module Oms
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
     * @module Oms
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $reservationAmount
     *
     * @return $this
     */
    public function setReservationAmount($reservationAmount = null)
    {
        if ($reservationAmount !== null && !$reservationAmount instanceof Decimal) {
            $reservationAmount = new Decimal($reservationAmount);
        }

        $this->reservationAmount = $reservationAmount;
        $this->modifiedProperties[self::RESERVATION_AMOUNT] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getReservationAmount()
    {
        return $this->reservationAmount;
    }

    /**
     * @module Oms
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $reservationAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReservationAmountOrFail($reservationAmount)
    {
        if ($reservationAmount === null) {
            $this->throwNullValueException(static::RESERVATION_AMOUNT);
        }

        return $this->setReservationAmount($reservationAmount);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getReservationAmountOrFail()
    {
        if ($this->reservationAmount === null) {
            $this->throwNullValueException(static::RESERVATION_AMOUNT);
        }

        return $this->reservationAmount;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReservationAmount()
    {
        $this->assertPropertyIsSet(self::RESERVATION_AMOUNT);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $originStore
     *
     * @return $this
     */
    public function setOriginStore(StoreTransfer $originStore = null)
    {
        $this->originStore = $originStore;
        $this->modifiedProperties[self::ORIGIN_STORE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getOriginStore()
    {
        return $this->originStore;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $originStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginStoreOrFail(StoreTransfer $originStore)
    {
        return $this->setOriginStore($originStore);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getOriginStoreOrFail()
    {
        if ($this->originStore === null) {
            $this->throwNullValueException(static::ORIGIN_STORE);
        }

        return $this->originStore;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginStore()
    {
        $this->assertPropertyIsSet(self::ORIGIN_STORE);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $synchronizeToStore
     *
     * @return $this
     */
    public function setSynchronizeToStore(StoreTransfer $synchronizeToStore = null)
    {
        $this->synchronizeToStore = $synchronizeToStore;
        $this->modifiedProperties[self::SYNCHRONIZE_TO_STORE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getSynchronizeToStore()
    {
        return $this->synchronizeToStore;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $synchronizeToStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSynchronizeToStoreOrFail(StoreTransfer $synchronizeToStore)
    {
        return $this->setSynchronizeToStore($synchronizeToStore);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getSynchronizeToStoreOrFail()
    {
        if ($this->synchronizeToStore === null) {
            $this->throwNullValueException(static::SYNCHRONIZE_TO_STORE);
        }

        return $this->synchronizeToStore;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSynchronizeToStore()
    {
        $this->assertPropertyIsSet(self::SYNCHRONIZE_TO_STORE);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->modifiedProperties[self::VERSION] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module Oms
     *
     * @param string|null $version
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionOrFail($version)
    {
        if ($version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->setVersion($version);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersion()
    {
        $this->assertPropertyIsSet(self::VERSION);

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
                case 'version':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'originStore':
                case 'synchronizeToStore':
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
                case 'reservationAmount':
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
                case 'version':
                case 'reservationAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'originStore':
                case 'synchronizeToStore':
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
                case 'version':
                case 'reservationAmount':
                    $values[$arrayKey] = $value;

                    break;
                case 'originStore':
                case 'synchronizeToStore':
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
            'version' => $this->version,
            'originStore' => $this->originStore,
            'synchronizeToStore' => $this->synchronizeToStore,
            'reservationAmount' => $this->reservationAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'version' => $this->version,
            'origin_store' => $this->originStore,
            'synchronize_to_store' => $this->synchronizeToStore,
            'reservation_amount' => $this->reservationAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'origin_store' => $this->originStore instanceof AbstractTransfer ? $this->originStore->toArray(true, false) : $this->originStore,
            'synchronize_to_store' => $this->synchronizeToStore instanceof AbstractTransfer ? $this->synchronizeToStore->toArray(true, false) : $this->synchronizeToStore,
            'reservation_amount' => $this->reservationAmount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'originStore' => $this->originStore instanceof AbstractTransfer ? $this->originStore->toArray(true, true) : $this->originStore,
            'synchronizeToStore' => $this->synchronizeToStore instanceof AbstractTransfer ? $this->synchronizeToStore->toArray(true, true) : $this->synchronizeToStore,
            'reservationAmount' => $this->reservationAmount,
        ];
    }
}
