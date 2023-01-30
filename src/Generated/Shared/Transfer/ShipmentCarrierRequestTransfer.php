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
class ShipmentCarrierRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CARRIER = 'idCarrier';

    /**
     * @var string
     */
    public const CARRIER_NAME = 'carrierName';

    /**
     * @var string
     */
    public const EXCLUDED_CARRIER_IDS = 'excludedCarrierIds';

    /**
     * @var int|null
     */
    protected $idCarrier;

    /**
     * @var string|null
     */
    protected $carrierName;

    /**
     * @var array
     */
    protected $excludedCarrierIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_carrier' => 'idCarrier',
        'idCarrier' => 'idCarrier',
        'IdCarrier' => 'idCarrier',
        'carrier_name' => 'carrierName',
        'carrierName' => 'carrierName',
        'CarrierName' => 'carrierName',
        'excluded_carrier_ids' => 'excludedCarrierIds',
        'excludedCarrierIds' => 'excludedCarrierIds',
        'ExcludedCarrierIds' => 'excludedCarrierIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CARRIER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_carrier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARRIER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'carrier_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXCLUDED_CARRIER_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'excluded_carrier_ids',
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
     * @module ShipmentGui|Shipment
     *
     * @param int|null $idCarrier
     *
     * @return $this
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;
        $this->modifiedProperties[self::ID_CARRIER] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return int|null
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param int|null $idCarrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCarrierOrFail($idCarrier)
    {
        if ($idCarrier === null) {
            $this->throwNullValueException(static::ID_CARRIER);
        }

        return $this->setIdCarrier($idCarrier);
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCarrierOrFail()
    {
        if ($this->idCarrier === null) {
            $this->throwNullValueException(static::ID_CARRIER);
        }

        return $this->idCarrier;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCarrier()
    {
        $this->assertPropertyIsSet(self::ID_CARRIER);

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string|null $carrierName
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        $this->modifiedProperties[self::CARRIER_NAME] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param string|null $carrierName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCarrierNameOrFail($carrierName)
    {
        if ($carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->setCarrierName($carrierName);
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCarrierNameOrFail()
    {
        if ($this->carrierName === null) {
            $this->throwNullValueException(static::CARRIER_NAME);
        }

        return $this->carrierName;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCarrierName()
    {
        $this->assertPropertyIsSet(self::CARRIER_NAME);

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param array|null $excludedCarrierIds
     *
     * @return $this
     */
    public function setExcludedCarrierIds(array $excludedCarrierIds = null)
    {
        if ($excludedCarrierIds === null) {
            $excludedCarrierIds = [];
        }

        $this->excludedCarrierIds = $excludedCarrierIds;
        $this->modifiedProperties[self::EXCLUDED_CARRIER_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @return array
     */
    public function getExcludedCarrierIds()
    {
        return $this->excludedCarrierIds;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @param mixed $excludedCarrierId
     *
     * @return $this
     */
    public function addExcludedCarrierId($excludedCarrierId)
    {
        $this->excludedCarrierIds[] = $excludedCarrierId;
        $this->modifiedProperties[self::EXCLUDED_CARRIER_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExcludedCarrierIds()
    {
        $this->assertPropertyIsSet(self::EXCLUDED_CARRIER_IDS);

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
                case 'idCarrier':
                case 'carrierName':
                case 'excludedCarrierIds':
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
                case 'idCarrier':
                case 'carrierName':
                case 'excludedCarrierIds':
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
                case 'idCarrier':
                case 'carrierName':
                case 'excludedCarrierIds':
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
            'idCarrier' => $this->idCarrier,
            'carrierName' => $this->carrierName,
            'excludedCarrierIds' => $this->excludedCarrierIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_carrier' => $this->idCarrier,
            'carrier_name' => $this->carrierName,
            'excluded_carrier_ids' => $this->excludedCarrierIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_carrier' => $this->idCarrier instanceof AbstractTransfer ? $this->idCarrier->toArray(true, false) : $this->idCarrier,
            'carrier_name' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, false) : $this->carrierName,
            'excluded_carrier_ids' => $this->excludedCarrierIds instanceof AbstractTransfer ? $this->excludedCarrierIds->toArray(true, false) : $this->excludedCarrierIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCarrier' => $this->idCarrier instanceof AbstractTransfer ? $this->idCarrier->toArray(true, true) : $this->idCarrier,
            'carrierName' => $this->carrierName instanceof AbstractTransfer ? $this->carrierName->toArray(true, true) : $this->carrierName,
            'excludedCarrierIds' => $this->excludedCarrierIds instanceof AbstractTransfer ? $this->excludedCarrierIds->toArray(true, true) : $this->excludedCarrierIds,
        ];
    }
}
