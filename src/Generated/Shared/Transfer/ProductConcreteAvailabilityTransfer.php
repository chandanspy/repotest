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
class ProductConcreteAvailabilityTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const AVAILABILITY = 'availability';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'isNeverOutOfStock';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $availability;

    /**
     * @var bool|null
     */
    protected $isNeverOutOfStock;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'availability' => 'availability',
        'Availability' => 'availability',
        'is_never_out_of_stock' => 'isNeverOutOfStock',
        'isNeverOutOfStock' => 'isNeverOutOfStock',
        'IsNeverOutOfStock' => 'isNeverOutOfStock',
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
        self::AVAILABILITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'availability',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NEVER_OUT_OF_STOCK => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_never_out_of_stock',
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
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
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
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
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
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
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
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
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
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $availability
     *
     * @return $this
     */
    public function setAvailability($availability = null)
    {
        if ($availability !== null && !$availability instanceof Decimal) {
            $availability = new Decimal($availability);
        }

        $this->availability = $availability;
        $this->modifiedProperties[self::AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle|ProductPackagingUnit
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle|ProductPackagingUnit
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityOrFail($availability)
    {
        if ($availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->setAvailability($availability);
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAvailabilityOrFail()
    {
        if ($this->availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->availability;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle|ProductPackagingUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailability()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY);

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @param bool|null $isNeverOutOfStock
     *
     * @return $this
     */
    public function setIsNeverOutOfStock($isNeverOutOfStock)
    {
        $this->isNeverOutOfStock = $isNeverOutOfStock;
        $this->modifiedProperties[self::IS_NEVER_OUT_OF_STOCK] = true;

        return $this;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @return bool|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @param bool|null $isNeverOutOfStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNeverOutOfStockOrFail($isNeverOutOfStock)
    {
        if ($isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->setIsNeverOutOfStock($isNeverOutOfStock);
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNeverOutOfStockOrFail()
    {
        if ($this->isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityCartConnector|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNeverOutOfStock()
    {
        $this->assertPropertyIsSet(self::IS_NEVER_OUT_OF_STOCK);

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
                case 'isNeverOutOfStock':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'availability':
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
                case 'isNeverOutOfStock':
                case 'availability':
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
                case 'sku':
                case 'isNeverOutOfStock':
                case 'availability':
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
            'sku' => $this->sku,
            'isNeverOutOfStock' => $this->isNeverOutOfStock,
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'is_never_out_of_stock' => $this->isNeverOutOfStock,
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'is_never_out_of_stock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, false) : $this->isNeverOutOfStock,
            'availability' => $this->availability,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'isNeverOutOfStock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, true) : $this->isNeverOutOfStock,
            'availability' => $this->availability,
        ];
    }
}
